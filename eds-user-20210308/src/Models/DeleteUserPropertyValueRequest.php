<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models;

use AlibabaCloud\Tea\Model;

class DeleteUserPropertyValueRequest extends Model
{
    /**
     * @description The property ID.
     *
     * This parameter is required.
     * @example 390
     *
     * @var int
     */
    public $propertyId;

    /**
     * @description The ID of the property value.
     *
     * This parameter is required.
     * @example 978
     *
     * @var int
     */
    public $propertyValueId;

    /**
     * @description The ID of the convenience user.
     *
     * This parameter is required.
     * @example 123
     *
     * @var int
     */
    public $userId;
    protected $_name = [
        'propertyId'      => 'PropertyId',
        'propertyValueId' => 'PropertyValueId',
        'userId'          => 'UserId',
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
