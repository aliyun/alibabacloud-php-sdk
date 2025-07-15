<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauthintl\V20220809\Models;

use AlibabaCloud\Tea\Model;

class CheckVerifyLogRequest extends Model
{
    /**
     * @example e0c34a***353888
     *
     * @var string
     */
    public $merchantBizId;

    /**
     * @example hksb7ba1b*********015d694361bee4
     *
     * @var string
     */
    public $transactionId;
    protected $_name = [
        'merchantBizId' => 'MerchantBizId',
        'transactionId' => 'TransactionId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->merchantBizId) {
            $res['MerchantBizId'] = $this->merchantBizId;
        }
        if (null !== $this->transactionId) {
            $res['TransactionId'] = $this->transactionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckVerifyLogRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MerchantBizId'])) {
            $model->merchantBizId = $map['MerchantBizId'];
        }
        if (isset($map['TransactionId'])) {
            $model->transactionId = $map['TransactionId'];
        }

        return $model;
    }
}
