<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models;

use AlibabaCloud\SDK\Edsuser\V20210308\Models\UpdatePropertyRequest\propertyValues;
use AlibabaCloud\Tea\Model;

class UpdatePropertyRequest extends Model
{
    /**
     * @description The ID of the property that you want to modify. You can call the [ListProperty](https://help.aliyun.com/document_detail/410890.html) operation to query the property ID.
     *
     * This parameter is required.
     *
     * @example 390
     *
     * @var int
     */
    public $propertyId;

    /**
     * @description The new property name.
     *
     * This parameter is required.
     *
     * @example testkey
     *
     * @var string
     */
    public $propertyKey;

    /**
     * @description The values of property.
     *
     * @var propertyValues[]
     */
    public $propertyValues;
    protected $_name = [
        'propertyId' => 'PropertyId',
        'propertyKey' => 'PropertyKey',
        'propertyValues' => 'PropertyValues',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->propertyId) {
            $res['PropertyId'] = $this->propertyId;
        }
        if (null !== $this->propertyKey) {
            $res['PropertyKey'] = $this->propertyKey;
        }
        if (null !== $this->propertyValues) {
            $res['PropertyValues'] = [];
            if (null !== $this->propertyValues && \is_array($this->propertyValues)) {
                $n = 0;
                foreach ($this->propertyValues as $item) {
                    $res['PropertyValues'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdatePropertyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PropertyId'])) {
            $model->propertyId = $map['PropertyId'];
        }
        if (isset($map['PropertyKey'])) {
            $model->propertyKey = $map['PropertyKey'];
        }
        if (isset($map['PropertyValues'])) {
            if (!empty($map['PropertyValues'])) {
                $model->propertyValues = [];
                $n = 0;
                foreach ($map['PropertyValues'] as $item) {
                    $model->propertyValues[$n++] = null !== $item ? propertyValues::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
