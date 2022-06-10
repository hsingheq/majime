import axios from './axios.js'

export default {

    getOrderDetail(data) {
        return axios.post('getOrderdetail', data)
    },

    getOrderDetails(data) {
        return axios.post('getOrderDetails', data)
    },
    orderSearch(data) {
        return axios.post('order_Search',data)
    },

    getOrderProfile(oid, vid) {
        return axios.get('order_Profile/' + oid+'?vid='+vid)
    },
    getOrderItems(oid, vid) {
        return axios.get('order_items/' + oid+'?vid='+vid)
    },
    changeStatus(data) {
        return axios.post('changeStatus', data)
    },
    
    getOrderOnStatus(vid,status) {
        return axios.get('getOrderOnStatus/'+vid+'/'+status)
    },
    assignAWB(data){
        return axios.post('assignAWB', data)
    },
    assignAWBOrder(data){
        return axios.post('assignAWBOrder', data)
    },
    return_order(){
        return axios.get('return_order')
    },
    printSlip(data){
        return axios.post('printSlip', data)
    },
    printOrderSlip(data){
        return axios.post('printOrderSlip', data)
    },
     citySearch(data) {
        return axios.post('city_Search', data)
    },
    stateSearch(data) {
        return axios.post('state_Search', data)
    },
    statusSearch(data) {
        return axios.post('status_Search', data)
    },
     PendingRefundstatus(data) {
        return axios.get('get_PackdetailRefund1', data)
    },
    PendingRefund_changeStatus(data) {
        return axios.post('Refundchange_Status', data)
    },
    // getPackdetail_Refund(data) {
    //     return axios.post('get_Packdetail_Refund', data)
    // },
    ListOrderStatus_assign(data) {
        return axios.post('listOrder_Status', data)
    },
    downloadsheet(data) {
        return axios.post('download_Sheet', data)
    },

    stateSearchoption(data) {
        return axios.post('state_Search_option', data)
    },
     stateSearchSt(data) {
        return axios.post('state_Search_Select', data)
    },
    getStates() {
        return axios.get('state_data')
    },
    getCity() {
        return axios.get('city_data')
    },
     getStatus() {
        return axios.get('status_data')
    },
     getPackdetail_Refund(data) {
        return axios.get('get_packdetail_Refund/' + data)
    },
    getPackDetail(data) {
        return axios.get('getpackdetail/' + data)
    },
    changeProcessingStatus(data) {
        return axios.post('changeProcessing_Status', data)
    },
       getProcessing_OrderDetails(data) {
        return axios.post('getProcessingOrder_Details', data)
    },
      getProcessing_data(data) {
        return axios.get('get_processing_data/' + data)
    },

}
