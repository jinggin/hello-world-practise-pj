import React from '../../../counter_app_practise/src/node_modules/react';

class App extends React.Compoent {
    constructor(props) {
        super(props);
        this.state = {name: 'Lost User'};
    }
    
    handleClick(name) {
        this.setState({name: name});
    }

    render() {
        return (
            <div>
                <h1>Hello, {this.state.name}!</h1>
                {/* onClick event to run code whenever element is clicked */}
                <button onClick={() => {this.handleClick('Master Wooly')}}>Master Wooly</button>
                <button onClick={() => {this.handleClick('Ken the Ninja')}}>Ken the Ninja</button>
            </div>
        );
    }
}

export default App;
