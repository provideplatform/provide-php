<?php

require 'api_client.php';

class Goldmine {
    
    function __construct($scheme, $host, $token) {
        $this->api_client = new APIClient($scheme, $host, $token);
    }

    function fetch_bridges($params=null) {
        return $this->api_client->get('bridges', $params);
    }

    function fetch_bridge_details($bridge_id) {
        return $this->api_client->get('bridges/'.$bridge_id);
    }

    function create_bridge($params) {
        return $this->api_client->post('bridges', $params);
    }

    function fetch_connectors($params) {
        return $this->api_client->get('connectors', $params);
    }
    function fetch_connector_details($connectorId) {
        return $this->api_client->get('connectors/'.$connectorId);
    }
    function create_connector($params) {
        return $this->api_client->post('connectors', $params);
    }
    function delete_connector($connectorId) {
        return $this->api_client->delete('connectors/'.$connectorId);
    }
    function fetch_contracts($params=null) {
        return $this->api_client->get('contracts', $params);
    }
    function fetch_contract_details($contract_id) {
        return $this->api_client->get('contracts/'.$contract_id);
    }
    function create_contract($params) {
        return $this->api_client->post('contracts', $params);
    }
    function execute_contract($contract_id, $params) {
        return $this->api_client->post('contracts/'.$contract_id.'/execute', $params);
    }
    function fetch_networks($params) {
        return $this->api_client->get('networks', $params);
    }
    function create_network($params) {
        return $this->api_client->post('networks', $params);
    }
    function update_network($network_id, $params) {
        return $this->api_client->put('networks/'.$network_id, $params);
    }
    function fetch_network_details($network_id) {
        return $this->api_client->get('networks/'.$network_id);
    }
    function fetch_network_accounts($network_id, $params) {
        return $this->api_client->get('networks/'.$network_id.'/accounts', $params);
    }
    function fetch_network_blocks($network_id, $params) {
        return $this->api_client->get('networks/'.$network_id.'/blocks', $params);
    }
    function fetch_network_bridges($network_id, $params) {
        return $this->api_client->get('networks/'.$network_id.'/bridges', $params);
    }
    function fetch_network_connectors($network_id, $params) {
        return $this->api_client->get('networks/'.$network_id.'/connectors', $params);
    }
    function fetch_network_contracts($network_id, $params) {
        return $this->api_client->get('networks/'.$network_id.'/contracts', $params);
    }
    function fetch_network_contract_details($network_id, $contract_id) {
        return $this->api_client->get('networks/'.$network_id.'/contracts/'.$contract_id);
    }
    function fetch_network_oracles($network_id, $params) {
        return $this->api_client->get('networks/'.$network_id.'/oracles', $params);
    }
    function fetch_network_tokens($network_id, $params) {
        return $this->api_client->get('networks/'.$network_id.'/tokens', $params);
    }
    function fetch_network_transactions($network_id, $params) {
        return $this->api_client->get('networks/'.$network_id.'/transactions', $params);
    }
    function fetch_network_transaction_details($network_id, $transaction_id) {
        return $this->api_client->get('networks/'.$network_id.'/transactions/'.$transaction_id);
    }
    function fetch_network_status($network_id) {
        return $this->api_client->get('networks/'.$network_id.'/status');
    }
    function fetch_network_nodes($network_id, $params) {
        return $this->api_client->get('networks/'.$network_id.'/nodes', $params);
    }
    function create_network_node($network_id, $params) {
        return $this->api_client->post('networks/'.$network_id.'/nodes', $params);
    }
    function fetch_network_node_details($network_id, $node_id) {
        return $this->api_client->get('networks/'.$network_id.'/nodes/'.$node_id);
    }
    function fetch_network_node_logs($network_id, $node_id) {
        return $this->api_client->get('networks/'.$network_id.'/nodes/'.$node_id.'/logs');
    }
    function delete_network_node($network_id, $node_id) {
        return $this->api_client->delete('networks/'.$network_id.'/nodes/'.$node_id);
    }
    function fetch_oracles($params) {
        return $this->api_client->get('oracles', $params);
    }
    function fetch_oracle_details($oracle_id) {
        return $this->api_client->get('oracles/'.$oracle_id);
    }
    function create_oracle($params) {
        return $this->api_client->post('oracles', $params);
    }
    function fetch_tokens($params) {
        return $this->api_client->get('tokens', $params);
    }
    function fetch_token_details($token_id) {
        return $this->api_client->get('tokens/'.$token_id);
    }
    function create_token($params) {
        return $this->api_client->post('tokens', $params);
    }
    function create_transaction($params) {
        return $this->api_client->post('transactions', $params);
    }
    function fetch_transactions($params) {
        return $this->api_client->get('transactions', $params);
    }
    function fetch_transaction_details($tx_id) {
        return $this->api_client->get('transactions/'.$tx_id);
    }
    function fetch_wallet_balance($wallet_id, $token_id) {
        return $this->api_client->get('wallets/'.$wallet_id.'/balances/'.$token_id);
    }
    function fetch_wallets($params) {
        return $this->api_client->get('wallets', $params);
    }
    function fetch_wallet_details($wallet_id) {
        return $this->api_client->get('wallets/'.$wallet_id);
    }
    function create_wallet($params) {
        return $this->api_client->post('wallets', $params);
    }
}