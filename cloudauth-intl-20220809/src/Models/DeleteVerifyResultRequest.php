<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauthintl\V20220809\Models;

use AlibabaCloud\Tea\Model;

class DeleteVerifyResultRequest extends Model
{
    /**
     * @example Y / N
     *
     * @var string
     */
    public $deleteAfterQuery;

    /**
     * @example Img / Text / All
     *
     * @var string
     */
    public $deleteType;

    /**
     * @example 4ab0b***cbde97
     *
     * @var string
     */
    public $transactionId;
    protected $_name = [
        'deleteAfterQuery' => 'DeleteAfterQuery',
        'deleteType'       => 'DeleteType',
        'transactionId'    => 'TransactionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deleteAfterQuery) {
            $res['DeleteAfterQuery'] = $this->deleteAfterQuery;
        }
        if (null !== $this->deleteType) {
            $res['DeleteType'] = $this->deleteType;
        }
        if (null !== $this->transactionId) {
            $res['TransactionId'] = $this->transactionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteVerifyResultRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeleteAfterQuery'])) {
            $model->deleteAfterQuery = $map['DeleteAfterQuery'];
        }
        if (isset($map['DeleteType'])) {
            $model->deleteType = $map['DeleteType'];
        }
        if (isset($map['TransactionId'])) {
            $model->transactionId = $map['TransactionId'];
        }

        return $model;
    }
}
