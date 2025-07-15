<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\DeleteVerifyResultResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example Y/N
     *
     * @var string
     */
    public $deleteResult;

    /**
     * @example 4ab0b***cbde97
     *
     * @var string
     */
    public $transactionId;
    protected $_name = [
        'deleteResult' => 'DeleteResult',
        'transactionId' => 'TransactionId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->deleteResult) {
            $res['DeleteResult'] = $this->deleteResult;
        }
        if (null !== $this->transactionId) {
            $res['TransactionId'] = $this->transactionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeleteResult'])) {
            $model->deleteResult = $map['DeleteResult'];
        }
        if (isset($map['TransactionId'])) {
            $model->transactionId = $map['TransactionId'];
        }

        return $model;
    }
}
