import React from 'react';

class App extends React.Component {
    constructor(props) {
        super(props);
        // state defined
        this.state = {count: 0};
    }

    handleClick() {
        this.setState({count: this.state.count + 1});
    }

    render() {
        return (
            <div>
                <h1>{this.state.count}</h1>
                <button onClick={()=>{this.handleClick()}}>+</button>
            </div>

        );
    }
}

export default App;