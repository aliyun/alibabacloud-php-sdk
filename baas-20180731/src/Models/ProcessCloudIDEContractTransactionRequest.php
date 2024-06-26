<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models;

use AlibabaCloud\Tea\Model;

class ProcessCloudIDEContractTransactionRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $antChainId;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $transaction;
    protected $_name = [
        'antChainId'  => 'AntChainId',
        'transaction' => 'Transaction',
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
        if (null !== $this->transaction) {
            $res['Transaction'] = $this->transaction;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ProcessCloudIDEContractTransactionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AntChainId'])) {
            $model->antChainId = $map['AntChainId'];
        }
        if (isset($map['Transaction'])) {
            $model->transaction = $map['Transaction'];
        }

        return $model;
    }
}
