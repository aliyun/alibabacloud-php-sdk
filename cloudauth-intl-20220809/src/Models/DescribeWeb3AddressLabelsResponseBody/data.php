<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\DescribeWeb3AddressLabelsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description address
     *
     * @example 2341980145045A5c5acad3d2Df0cF3B2Afxxxxxx
     *
     * @var string
     */
    public $address;

    /**
     * @description amount of native currency
     *
     * @example 0
     *
     * @var string
     */
    public $balance;

    /**
     * @description native currency of the chain
     *
     * @example ETH
     *
     * @var string
     */
    public $balanceSymbol;

    /**
     * @description ChainNameEnumstring name of blockchain
     *
     * @example Ethereum Mainnet
     *
     * @var string
     */
    public $chainName;

    /**
     * @description ChainShortName
     *
     * @example eth
     *
     * @var string
     */
    public $chainShortName;

    /**
     * @description 0: EOA; 1: Contract
     *
     * @example 0
     *
     * @var string
     */
    public $contractAddress;

    /**
     * @description the address of deployer if the current address is a contract, null if the current address is an EOA
     *
     * @example dAC17F958D2ee523a2206206994597C13Dxxxxxx
     *
     * @var string
     */
    public $createContractAddress;

    /**
     * @description contract creation hash if the current address is a contract, null if the current address is an EOA
     *
     * @example dAC17F958D2ee523a2206206994597C13Dxxxxxx
     *
     * @var string
     */
    public $createContractTransactionHash;

    /**
     * @description customized assessment detail
     *
     * @example ""
     *
     * @var string
     */
    public $customRiskAssessment;

    /**
     * @description the first transaction hash sent by the address
     *
     * @example 20230304
     *
     * @var string
     */
    public $firstTransactionTime;

    /**
     * @description 0: Not validator; 1: validator
     *
     * @example 0
     *
     * @var string
     */
    public $isProducerAddress;

    /**
     * @description the latest transaction hash sent by the address
     *
     * @example 20230304
     *
     * @var string
     */
    public $lastTransactionTime;

    /**
     * @description the amount of native currency received in 180 days
     *
     * @example 0
     *
     * @var string
     */
    public $receiveAmount;

    /**
     * @description the amount of native currency sent in 180 days
     *
     * @example 0
     *
     * @var string
     */
    public $sendAmount;

    /**
     * @description tag
     *
     * @example contracts:Tether: Tether_USD,token_standard:erc20
     *
     * @var string
     */
    public $tag;

    /**
     * @description if the address is an erc20 token, returns the token name
     *
     * @example Tether USD
     *
     * @var string
     */
    public $token;

    /**
     * @description the number of erc20 tokens involved with current address in 180 days
     *
     * @example 1
     *
     * @var int
     */
    public $tokenAmount;

    /**
     * @description address of erc20 tokens involved with current address in 180 days
     *
     * @example ["{"ERC721":[]"]}"]
     *
     * @var string
     */
    public $tokenList;

    /**
     * @description the number of transactions
     *
     * @example 2
     *
     * @var int
     */
    public $transactionCount;
    protected $_name = [
        'address'                       => 'Address',
        'balance'                       => 'Balance',
        'balanceSymbol'                 => 'BalanceSymbol',
        'chainName'                     => 'ChainName',
        'chainShortName'                => 'ChainShortName',
        'contractAddress'               => 'ContractAddress',
        'createContractAddress'         => 'CreateContractAddress',
        'createContractTransactionHash' => 'CreateContractTransactionHash',
        'customRiskAssessment'          => 'CustomRiskAssessment',
        'firstTransactionTime'          => 'FirstTransactionTime',
        'isProducerAddress'             => 'IsProducerAddress',
        'lastTransactionTime'           => 'LastTransactionTime',
        'receiveAmount'                 => 'ReceiveAmount',
        'sendAmount'                    => 'SendAmount',
        'tag'                           => 'Tag',
        'token'                         => 'Token',
        'tokenAmount'                   => 'TokenAmount',
        'tokenList'                     => 'TokenList',
        'transactionCount'              => 'TransactionCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->address) {
            $res['Address'] = $this->address;
        }
        if (null !== $this->balance) {
            $res['Balance'] = $this->balance;
        }
        if (null !== $this->balanceSymbol) {
            $res['BalanceSymbol'] = $this->balanceSymbol;
        }
        if (null !== $this->chainName) {
            $res['ChainName'] = $this->chainName;
        }
        if (null !== $this->chainShortName) {
            $res['ChainShortName'] = $this->chainShortName;
        }
        if (null !== $this->contractAddress) {
            $res['ContractAddress'] = $this->contractAddress;
        }
        if (null !== $this->createContractAddress) {
            $res['CreateContractAddress'] = $this->createContractAddress;
        }
        if (null !== $this->createContractTransactionHash) {
            $res['CreateContractTransactionHash'] = $this->createContractTransactionHash;
        }
        if (null !== $this->customRiskAssessment) {
            $res['CustomRiskAssessment'] = $this->customRiskAssessment;
        }
        if (null !== $this->firstTransactionTime) {
            $res['FirstTransactionTime'] = $this->firstTransactionTime;
        }
        if (null !== $this->isProducerAddress) {
            $res['IsProducerAddress'] = $this->isProducerAddress;
        }
        if (null !== $this->lastTransactionTime) {
            $res['LastTransactionTime'] = $this->lastTransactionTime;
        }
        if (null !== $this->receiveAmount) {
            $res['ReceiveAmount'] = $this->receiveAmount;
        }
        if (null !== $this->sendAmount) {
            $res['SendAmount'] = $this->sendAmount;
        }
        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }
        if (null !== $this->token) {
            $res['Token'] = $this->token;
        }
        if (null !== $this->tokenAmount) {
            $res['TokenAmount'] = $this->tokenAmount;
        }
        if (null !== $this->tokenList) {
            $res['TokenList'] = $this->tokenList;
        }
        if (null !== $this->transactionCount) {
            $res['TransactionCount'] = $this->transactionCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }
        if (isset($map['Balance'])) {
            $model->balance = $map['Balance'];
        }
        if (isset($map['BalanceSymbol'])) {
            $model->balanceSymbol = $map['BalanceSymbol'];
        }
        if (isset($map['ChainName'])) {
            $model->chainName = $map['ChainName'];
        }
        if (isset($map['ChainShortName'])) {
            $model->chainShortName = $map['ChainShortName'];
        }
        if (isset($map['ContractAddress'])) {
            $model->contractAddress = $map['ContractAddress'];
        }
        if (isset($map['CreateContractAddress'])) {
            $model->createContractAddress = $map['CreateContractAddress'];
        }
        if (isset($map['CreateContractTransactionHash'])) {
            $model->createContractTransactionHash = $map['CreateContractTransactionHash'];
        }
        if (isset($map['CustomRiskAssessment'])) {
            $model->customRiskAssessment = $map['CustomRiskAssessment'];
        }
        if (isset($map['FirstTransactionTime'])) {
            $model->firstTransactionTime = $map['FirstTransactionTime'];
        }
        if (isset($map['IsProducerAddress'])) {
            $model->isProducerAddress = $map['IsProducerAddress'];
        }
        if (isset($map['LastTransactionTime'])) {
            $model->lastTransactionTime = $map['LastTransactionTime'];
        }
        if (isset($map['ReceiveAmount'])) {
            $model->receiveAmount = $map['ReceiveAmount'];
        }
        if (isset($map['SendAmount'])) {
            $model->sendAmount = $map['SendAmount'];
        }
        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }
        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }
        if (isset($map['TokenAmount'])) {
            $model->tokenAmount = $map['TokenAmount'];
        }
        if (isset($map['TokenList'])) {
            $model->tokenList = $map['TokenList'];
        }
        if (isset($map['TransactionCount'])) {
            $model->transactionCount = $map['TransactionCount'];
        }

        return $model;
    }
}
