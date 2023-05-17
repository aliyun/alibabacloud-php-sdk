<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models\CreatePropertyResponseBody\createResult\savePropertyValueModel;

use AlibabaCloud\Tea\Model;

class savePropertyValues extends Model
{
    /**
     * @example HR
     *
     * @var string
     */
    public $propertyValue;

    /**
     * @example 978
     *
     * @var int
     */
    public $propertyValueId;
    protected $_name = [
        'propertyValue'   => 'PropertyValue',
        'propertyValueId' => 'PropertyValueId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->propertyValue) {
            $res['PropertyValue'] = $this->propertyValue;
        }
        if (null !== $this->propertyValueId) {
            $res['PropertyValueId'] = $this->propertyValueId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return savePropertyValues
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PropertyValue'])) {
            $model->propertyValue = $map['PropertyValue'];
        }
        if (isset($map['PropertyValueId'])) {
            $model->propertyValueId = $map['PropertyValueId'];
        }

        return $model;
    }
}
