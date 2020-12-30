<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20181012\Models;

use AlibabaCloud\Tea\Model;

class QueryRawDataRequest extends Model
{
    /**
     * @var string
     */
    public $itemId;

    /**
     * @var string
     */
    public $itemType;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $userType;
    protected $_name = [
        'itemId'   => 'ItemId',
        'itemType' => 'ItemType',
        'userId'   => 'UserId',
        'userType' => 'UserType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->itemId) {
            $res['ItemId'] = $this->itemId;
        }
        if (null !== $this->itemType) {
            $res['ItemType'] = $this->itemType;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->userType) {
            $res['UserType'] = $this->userType;
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
        if (isset($map['ItemId'])) {
            $model->itemId = $map['ItemId'];
        }
        if (isset($map['ItemType'])) {
            $model->itemType = $map['ItemType'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['UserType'])) {
            $model->userType = $map['UserType'];
        }

        return $model;
    }
}
