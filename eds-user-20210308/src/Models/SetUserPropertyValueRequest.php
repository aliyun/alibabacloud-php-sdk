<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models;

use AlibabaCloud\Tea\Model;

class SetUserPropertyValueRequest extends Model
{
    /**
     * @example 390
     *
     * @var int
     */
    public $propertyId;

    /**
     * @example 978
     *
     * @var int
     */
    public $propertyValueId;

    /**
     * @description Associates a user property with a user.
     *
     * @example 11
     *
     * @var int
     */
    public $userId;

    /**
     * @description SetUserPropertyValue
     *
     * @example test
     *
     * @var string
     */
    public $userName;
    protected $_name = [
        'propertyId'      => 'PropertyId',
        'propertyValueId' => 'PropertyValueId',
        'userId'          => 'UserId',
        'userName'        => 'UserName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->propertyId) {
            $res['PropertyId'] = $this->propertyId;
        }
        if (null !== $this->propertyValueId) {
            $res['PropertyValueId'] = $this->propertyValueId;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetUserPropertyValueRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PropertyId'])) {
            $model->propertyId = $map['PropertyId'];
        }
        if (isset($map['PropertyValueId'])) {
            $model->propertyValueId = $map['PropertyValueId'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}
