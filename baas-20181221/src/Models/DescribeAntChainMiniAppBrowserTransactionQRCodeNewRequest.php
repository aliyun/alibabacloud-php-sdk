<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20181221\Models;

use AlibabaCloud\Tea\Model;

class DescribeAntChainMiniAppBrowserTransactionQRCodeNewRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example bDXK6boZ
     *
     * @var string
     */
    public $antChainId;

    /**
     * @example 9782291a957d28bec9e02f3dcb27d78392815ede7670b70793e0fd9763309cda
     *
     * @var string
     */
    public $contractId;

    /**
     * @description This parameter is required.
     *
     * @example 4a1f1371012cf840a9e4c6bde430d5ba600e422e592d153bd2689783cd1f87d0
     *
     * @var string
     */
    public $transactionHash;
    protected $_name = [
        'antChainId'      => 'AntChainId',
        'contractId'      => 'ContractId',
        'transactionHash' => 'TransactionHash',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->antChainId) {
            $res['AntChainId'] = $this->antChainId;
        }
        if (null !== $this->contractId) {
            $res['ContractId'] = $this->contractId;
        }
        if (null !== $this->transactionHash) {
            $res['TransactionHash'] = $this->transactionHash;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAntChainMiniAppBrowserTransactionQRCodeNewRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AntChainId'])) {
            $model->antChainId = $map['AntChainId'];
        }
        if (isset($map['ContractId'])) {
            $model->contractId = $map['ContractId'];
        }
        if (isset($map['TransactionHash'])) {
            $model->transactionHash = $map['TransactionHash'];
        }

        return $model;
    }
}
