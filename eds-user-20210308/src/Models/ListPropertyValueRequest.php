<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models;

use AlibabaCloud\Tea\Model;

class ListPropertyValueRequest extends Model
{
    /**
     * @description The ID of the property. You can call the [ListProperty](~~410890~~) operation to query the property ID.
     *
     * @example 390
     *
     * @var int
     */
    public $propertyId;
    protected $_name = [
        'propertyId' => 'PropertyId',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPropertyValueRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PropertyId'])) {
            $model->propertyId = $map['PropertyId'];
        }

        return $model;
    }
}
