<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models\ListPropertyResponseBody;

use AlibabaCloud\SDK\Edsuser\V20210308\Models\ListPropertyResponseBody\properties\propertyValues;
use AlibabaCloud\Tea\Model;

class properties extends Model
{
    /**
     * @description The ID of the property.
     *
     * @example 30
     *
     * @var int
     */
    public $propertyId;

    /**
     * @description The name of the property.
     *
     * @example department
     *
     * @var string
     */
    public $propertyKey;

    /**
     * @description Details about the property values.
     *
     * @var propertyValues[]
     */
    public $propertyValues;
    protected $_name = [
        'propertyId'     => 'PropertyId',
        'propertyKey'    => 'PropertyKey',
        'propertyValues' => 'PropertyValues',
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
     * @return properties
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
                $n                     = 0;
                foreach ($map['PropertyValues'] as $item) {
                    $model->propertyValues[$n++] = null !== $item ? propertyValues::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
