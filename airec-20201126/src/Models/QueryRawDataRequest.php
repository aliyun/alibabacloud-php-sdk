<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20201126\Models;

use AlibabaCloud\Tea\Model;

class QueryRawDataRequest extends Model
{
    /**
     * @var string
     */
    public $imei;

    /**
     * @example 112
     *
     * @var string
     */
    public $itemId;

    /**
     * @example video
     *
     * @var string
     */
    public $itemType;

    /**
     * @example 111
     *
     * @var string
     */
    public $userId;

    /**
     * @example app
     *
     * @var string
     */
    public $userType;
    protected $_name = [
        'imei'     => 'imei',
        'itemId'   => 'itemId',
        'itemType' => 'itemType',
        'userId'   => 'userId',
        'userType' => 'userType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imei) {
            $res['imei'] = $this->imei;
        }
        if (null !== $this->itemId) {
            $res['itemId'] = $this->itemId;
        }
        if (null !== $this->itemType) {
            $res['itemType'] = $this->itemType;
        }
        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
        }
        if (null !== $this->userType) {
            $res['userType'] = $this->userType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryRawDataRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['imei'])) {
            $model->imei = $map['imei'];
        }
        if (isset($map['itemId'])) {
            $model->itemId = $map['itemId'];
        }
        if (isset($map['itemType'])) {
            $model->itemType = $map['itemType'];
        }
        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }
        if (isset($map['userType'])) {
            $model->userType = $map['userType'];
        }

        return $model;
    }
}
