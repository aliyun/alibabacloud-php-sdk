<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models;

use AlibabaCloud\Tea\Model;

class ProcessPublicCloudIDEContractTransactionRequest extends Model
{
    /**
     * @var string
     */
    public $bizid;

    /**
     * @var string
     */
    public $transaction;
    protected $_name = [
        'bizid'       => 'Bizid',
        'transaction' => 'Transaction',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizid) {
            $res['Bizid'] = $this->bizid;
        }
        if (null !== $this->transaction) {
            $res['Transaction'] = $this->transaction;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ProcessPublicCloudIDEContractTransactionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bizid'])) {
            $model->bizid = $map['Bizid'];
        }
        if (isset($map['Transaction'])) {
            $model->transaction = $map['Transaction'];
        }

        return $model;
    }
}
