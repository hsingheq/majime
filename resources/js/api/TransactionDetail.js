import axios from './axios.js'

export default {

    AddTrasaction(data) {
        return axios.post('add_Transaction_Data', data)
    },
    // updateWayData(data) {
    //     return axios.post('updateWayData', data)
    // },
    // getAWBLocation(data){
    // 	return axios.post('getAWBLocation', data)
    // }
     ViewTras(data) {
        return axios.get('view_Transaction', data)
    },

}