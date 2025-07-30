<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models;

use AlibabaCloud\Tea\Model;

class DeleteUserPropertyValueRequest extends Model
{
    /**
     * @description The property ID. You can call the [ListProperty](~~ListProperty~~) operation to query the property ID.
     *
     * This parameter is required.
     *
     * @example 390
     *
     * @var int
     */
    public $propertyId;

    /**
     * @description The property value ID. You can call the [ListProperty](~~ListProperty~~) operation to query the property value ID.
     *
     * This parameter is required.
     *
     * @example 978
     *
     * @var int
     */
    public $propertyValueId;

    /**
     * @description The user ID. You can call the [DescribeUsers](~~DescribeUsers~~) operation to query the user ID, which is the return value of the `Id` parameter.
     *
     * This parameter is required.
     *
     * @example 123
     *
     * @var int
     */
    public $userId;
    protected $_name = [
        'propertyId' => 'PropertyId',
        'propertyValueId' => 'PropertyValueId',
        'userId' => 'UserId',
    ];

    public function validate() {}

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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteUserPropertyValueRequest
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

        return $model;
    }
}
