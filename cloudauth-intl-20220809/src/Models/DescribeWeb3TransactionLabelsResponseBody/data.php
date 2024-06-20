<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\DescribeWeb3TransactionLabelsResponseBody;

use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\DescribeWeb3TransactionLabelsResponseBody\data\contractDetails;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\DescribeWeb3TransactionLabelsResponseBody\data\inputDetails;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\DescribeWeb3TransactionLabelsResponseBody\data\outputDetails;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\DescribeWeb3TransactionLabelsResponseBody\data\tokenTransferDetails;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description the amount of native currency
     *
     * @example 27
     *
     * @var string
     */
    public $amount;

    /**
     * @description chainName
     *
     * @example ETH
     *
     * @var string
     */
    public $chainName;

    /**
     * @description short name of blockchain
     *
     * @example eth
     *
     * @var string
     */
    public $chainShortName;

    /**
     * @description contract details
     *
     * @var contractDetails[]
     */
    public $contractDetails;

    /**
     * @description error log
     *
     * @example “”
     *
     * @var string
     */
    public $errorLog;

    /**
     * @description gasLimit
     *
     * @example 1232
     *
     * @var int
     */
    public $gasLimit;

    /**
     * @description gasPrice
     *
     * @example 5034
     *
     * @var string
     */
    public $gasPrice;

    /**
     * @description gasUsed
     *
     * @example 234
     *
     * @var int
     */
    public $gasUsed;

    /**
     * @description height
     *
     * @example 17087552
     *
     * @var int
     */
    public $height;

    /**
     * @description the position of the transaction in the block
     *
     * @example 94
     *
     * @var int
     */
    public $index;

    /**
     * @description input data
     *
     * @example a9059cbb000000000000000000000000c7019579cb9bdb9204e61c7179ba2f88f9d2990b000000000xxxxxx
     *
     * @var string
     */
    public $inputData;

    /**
     * @description input details
     *
     * @var inputDetails[]
     */
    public $inputDetails;

    /**
     * @description the method name of contract call. For external transaction method: [\\"CALL\\",\\"CALLCODE\\",\\"DELEGATECALL\\",\\"STATICCALL\\"]; for internal transaction method: the first 4 bytes of the hash of the method name
     *
     * @example a9059cbb
     *
     * @var string
     */
    public $methodId;

    /**
     * @description nonce
     *
     * @example 6242724
     *
     * @var string
     */
    public $nonce;

    /**
     * @description output details
     *
     * @var outputDetails[]
     */
    public $outputDetails;

    /**
     * @description the transaction state. 1: success 0: fail
     *
     * @example 1
     *
     * @var int
     */
    public $state;

    /**
     * @description token transfer details
     *
     * @var tokenTransferDetails[]
     */
    public $tokenTransferDetails;

    /**
     * @description the symbol of native currency
     *
     * @example ETH
     *
     * @var string
     */
    public $transactionSymbol;

    /**
     * @description the block timestamp
     *
     * @example 1681991807
     *
     * @var string
     */
    public $transactionTime;

    /**
     * @description Integer	0: legacy; 1: eip 2930; 2: eip 1559
     *
     * @example 1
     *
     * @var string
     */
    public $transactionType;

    /**
     * @description the transaction fee in eth
     *
     * @example 0.002321489548255059
     *
     * @var string
     */
    public $txfee;

    /**
     * @description Txid
     *
     * @example c92880148d4896d8a2093a891a8f08916fe141fba474ede410xxxxxx
     *
     * @var string
     */
    public $txid;
    protected $_name = [
        'amount'               => 'Amount',
        'chainName'            => 'ChainName',
        'chainShortName'       => 'ChainShortName',
        'contractDetails'      => 'ContractDetails',
        'errorLog'             => 'ErrorLog',
        'gasLimit'             => 'GasLimit',
        'gasPrice'             => 'GasPrice',
        'gasUsed'              => 'GasUsed',
        'height'               => 'Height',
        'index'                => 'Index',
        'inputData'            => 'InputData',
        'inputDetails'         => 'InputDetails',
        'methodId'             => 'MethodId',
        'nonce'                => 'Nonce',
        'outputDetails'        => 'OutputDetails',
        'state'                => 'State',
        'tokenTransferDetails' => 'TokenTransferDetails',
        'transactionSymbol'    => 'TransactionSymbol',
        'transactionTime'      => 'TransactionTime',
        'transactionType'      => 'TransactionType',
        'txfee'                => 'Txfee',
        'txid'                 => 'Txid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->amount) {
            $res['Amount'] = $this->amount;
        }
        if (null !== $this->chainName) {
            $res['ChainName'] = $this->chainName;
        }
        if (null !== $this->chainShortName) {
            $res['ChainShortName'] = $this->chainShortName;
        }
        if (null !== $this->contractDetails) {
            $res['ContractDetails'] = [];
            if (null !== $this->contractDetails && \is_array($this->contractDetails)) {
                $n = 0;
                foreach ($this->contractDetails as $item) {
                    $res['ContractDetails'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->errorLog) {
            $res['ErrorLog'] = $this->errorLog;
        }
        if (null !== $this->gasLimit) {
            $res['GasLimit'] = $this->gasLimit;
        }
        if (null !== $this->gasPrice) {
            $res['GasPrice'] = $this->gasPrice;
        }
        if (null !== $this->gasUsed) {
            $res['GasUsed'] = $this->gasUsed;
        }
        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }
        if (null !== $this->index) {
            $res['Index'] = $this->index;
        }
        if (null !== $this->inputData) {
            $res['InputData'] = $this->inputData;
        }
        if (null !== $this->inputDetails) {
            $res['InputDetails'] = [];
            if (null !== $this->inputDetails && \is_array($this->inputDetails)) {
                $n = 0;
                foreach ($this->inputDetails as $item) {
                    $res['InputDetails'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->methodId) {
            $res['MethodId'] = $this->methodId;
        }
        if (null !== $this->nonce) {
            $res['Nonce'] = $this->nonce;
        }
        if (null !== $this->outputDetails) {
            $res['OutputDetails'] = [];
            if (null !== $this->outputDetails && \is_array($this->outputDetails)) {
                $n = 0;
                foreach ($this->outputDetails as $item) {
                    $res['OutputDetails'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->tokenTransferDetails) {
            $res['TokenTransferDetails'] = [];
            if (null !== $this->tokenTransferDetails && \is_array($this->tokenTransferDetails)) {
                $n = 0;
                foreach ($this->tokenTransferDetails as $item) {
                    $res['TokenTransferDetails'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->transactionSymbol) {
            $res['TransactionSymbol'] = $this->transactionSymbol;
        }
        if (null !== $this->transactionTime) {
            $res['TransactionTime'] = $this->transactionTime;
        }
        if (null !== $this->transactionType) {
            $res['TransactionType'] = $this->transactionType;
        }
        if (null !== $this->txfee) {
            $res['Txfee'] = $this->txfee;
        }
        if (null !== $this->txid) {
            $res['Txid'] = $this->txid;
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
        if (isset($map['Amount'])) {
            $model->amount = $map['Amount'];
        }
        if (isset($map['ChainName'])) {
            $model->chainName = $map['ChainName'];
        }
        if (isset($map['ChainShortName'])) {
            $model->chainShortName = $map['ChainShortName'];
        }
        if (isset($map['ContractDetails'])) {
            if (!empty($map['ContractDetails'])) {
                $model->contractDetails = [];
                $n                      = 0;
                foreach ($map['ContractDetails'] as $item) {
                    $model->contractDetails[$n++] = null !== $item ? contractDetails::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ErrorLog'])) {
            $model->errorLog = $map['ErrorLog'];
        }
        if (isset($map['GasLimit'])) {
            $model->gasLimit = $map['GasLimit'];
        }
        if (isset($map['GasPrice'])) {
            $model->gasPrice = $map['GasPrice'];
        }
        if (isset($map['GasUsed'])) {
            $model->gasUsed = $map['GasUsed'];
        }
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }
        if (isset($map['Index'])) {
            $model->index = $map['Index'];
        }
        if (isset($map['InputData'])) {
            $model->inputData = $map['InputData'];
        }
        if (isset($map['InputDetails'])) {
            if (!empty($map['InputDetails'])) {
                $model->inputDetails = [];
                $n                   = 0;
                foreach ($map['InputDetails'] as $item) {
                    $model->inputDetails[$n++] = null !== $item ? inputDetails::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['MethodId'])) {
            $model->methodId = $map['MethodId'];
        }
        if (isset($map['Nonce'])) {
            $model->nonce = $map['Nonce'];
        }
        if (isset($map['OutputDetails'])) {
            if (!empty($map['OutputDetails'])) {
                $model->outputDetails = [];
                $n                    = 0;
                foreach ($map['OutputDetails'] as $item) {
                    $model->outputDetails[$n++] = null !== $item ? outputDetails::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['TokenTransferDetails'])) {
            if (!empty($map['TokenTransferDetails'])) {
                $model->tokenTransferDetails = [];
                $n                           = 0;
                foreach ($map['TokenTransferDetails'] as $item) {
                    $model->tokenTransferDetails[$n++] = null !== $item ? tokenTransferDetails::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TransactionSymbol'])) {
            $model->transactionSymbol = $map['TransactionSymbol'];
        }
        if (isset($map['TransactionTime'])) {
            $model->transactionTime = $map['TransactionTime'];
        }
        if (isset($map['TransactionType'])) {
            $model->transactionType = $map['TransactionType'];
        }
        if (isset($map['Txfee'])) {
            $model->txfee = $map['Txfee'];
        }
        if (isset($map['Txid'])) {
            $model->txid = $map['Txid'];
        }

        return $model;
    }
}
