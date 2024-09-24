<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models;

use AlibabaCloud\Tea\Model;

class SetUserPropertyValueRequest extends Model
{
    /**
     * @description The property ID. You can call the [ListProperty](~~ListProperty~~) operation to query the property ID.
     *
     * This parameter is required.
     * @example 390
     *
     * @var int
     */
    public $propertyId;

    /**
     * @description The ID of the property value. You can call the [ListProperty](~~ListProperty~~) operation to query the ID of the property value.
     *
     * This parameter is required.
     * @example 978
     *
     * @var int
     */
    public $propertyValueId;

    /**
     * @description The ID of the convenience user. You can call the [DescribeUsers](~~DescribeUsers~~) operation to query the user ID.
     *
     * This parameter is required.
     * @example 11
     *
     * @var int
     */
    public $userId;

    /**
     * @description The username of the convenience user.
     *
     * This parameter is required.
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
