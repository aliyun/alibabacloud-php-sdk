<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauthintl\V20220809\Models;

use AlibabaCloud\Tea\Model;

class DeletePictureRequest extends Model
{
    /**
     * @example Y/N
     *
     * @var string
     */
    public $deletePicAfterQuery;

    /**
     * @example 4ab0b***cbde97
     *
     * @var string
     */
    public $transactionId;
    protected $_name = [
        'deletePicAfterQuery' => 'DeletePicAfterQuery',
        'transactionId'       => 'TransactionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deletePicAfterQuery) {
            $res['DeletePicAfterQuery'] = $this->deletePicAfterQuery;
        }
        if (null !== $this->transactionId) {
            $res['TransactionId'] = $this->transactionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeletePictureRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeletePicAfterQuery'])) {
            $model->deletePicAfterQuery = $map['DeletePicAfterQuery'];
        }
        if (isset($map['TransactionId'])) {
            $model->transactionId = $map['TransactionId'];
        }

        return $model;
    }
}
