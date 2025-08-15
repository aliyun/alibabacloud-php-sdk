<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauthintl\V20220809\Models;

use AlibabaCloud\Dara\Model;

class DeleteVerifyResultRequest extends Model
{
    /**
     * @var string
     */
    public $deleteAfterQuery;

    /**
     * @var string
     */
    public $deleteType;

    /**
     * @var string
     */
    public $transactionId;
    protected $_name = [
        'deleteAfterQuery' => 'DeleteAfterQuery',
        'deleteType' => 'DeleteType',
        'transactionId' => 'TransactionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
