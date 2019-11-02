import React, {Component} from 'react';
import './Style.css'

class Gerador extends Component{

    state = {
        posts:[]
    }

    componentDidMount(){
        fetch('https://jsonplaceholder.typicode.com/posts')
        .then(Response => Response.json())
        .then(data => this.setState({
            posts:data
        }))
    }
    
    render() {
        const{posts} = this.state
        console.log(this.state.posts)

        return(
                posts.map((post) =>{
                        return <div key={post.id} className="id_post">
                        <h1>{post.title}</h1>
                        {/* <br/> */}
                        <p>{post.body}</p>
                        </div>
                    })
                
        )
    }
}

export default Gerador;

