<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models;

use AlibabaCloud\Tea\Model;

class CheckUsedPropertyValueRequest extends Model
{
    /**
     * @description The property ID. You can call the [ListProperty](~~ListProperty~~) operation to query property ID.
     *
     * This parameter is required.
     * @example 380
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
    protected $_name = [
        'propertyId'      => 'PropertyId',
        'propertyValueId' => 'PropertyValueId',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckUsedPropertyValueRequest
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

        return $model;
    }
}
