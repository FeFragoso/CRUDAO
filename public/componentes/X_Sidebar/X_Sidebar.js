export default class X_Sidebar extends HTMLElement {

  static get observedAttributes() {
    return [
      'x-opcoes'
    ];
  }

  constructor() {
    
    super();

    this._Xopcoes = this.getAttribute('x-opcoes');
    
  }

  attributeChangedCallback(name, oldValue, newValue) {

    switch (name) {

      case 'x-opcoes': this._Xopcoes = newValue; break;
        
    }

    this._Xopcoes_HTML = '';
    
    let opcoes = JSON.parse(this._Xopcoes);

    for (let x in opcoes) {

      if (opcoes.hasOwnProperty(x)) {

        this._Xopcoes_HTML += `
          <div
            onclick="window.open('${opcoes[x].rota}', '_blank')"
            style="
              height: 3rem;
            
              margin: 0.25rem;
              
              overflow: hidden;
              
              display: flex;
              align-items: center;
              
              cursor: pointer;

              border: solid 1px #ccc;
              border-radius: 0.15rem;
            "
          >

            <i
              class="${opcoes[x].icone}"
              style="
                font-size: 2.25rem;
                margin: 0 0.3rem 0 0.3rem;
              "
            > </i>

            <p
              style="
                width: 100%;
                padding-top: 0.25rem;
                font-size: 1.75rem;
                text-align: center;
              "
            >${opcoes[x].titulo}</p>

          </div>
        `;
        
      }
      
    }
    
    this.render();
    
  }

  connectedCallback() {

    this.render();

    // ABRE SIDEBAR
    this.addEventListener('mouseover', (e) => {
      e.currentTarget.style.width = '21rem';
    });

    // FECHAR SIDEBAR
    this.addEventListener('mouseout', (e) => {
      e.currentTarget.style.width = '3.5rem';
    });
    
  }

  render() {

    this.innerHTML = `
      ${this._Xopcoes_HTML}

      
    `;
    
  }
  
}

customElements.define('x-sidebar', X_Sidebar);