import Lgo from './components/Logo';
import LogoSymbol from './components/LogoSymbol';
import Colors from './components/Colors';
export default{
	mode: 'history',

	routes:[

	{
		path:'/',
		component: Logo
	},
	{
		path:'/logo-symbol',
		component: LogoSymbol
	},
	{
		path:'/colors',
		component: colors
	},
	]

};