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
     * @description The item ID. This parameter is required when the table parameter is set to item.
     *
     * @example 112
     *
     * @var string
     */
    public $itemId;

    /**
     * @description The type of the item. This parameter is required when the table parameter is set to item.
     *
     * @example video
     *
     * @var string
     */
    public $itemType;

    /**
     * @description The user ID. This parameter is required when the table parameter is set to user.
     *
     * @example 111
     *
     * @var string
     */
    public $userId;

    /**
     * @description The type of the user. This parameter is required when the table parameter is set to user.
     *
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
