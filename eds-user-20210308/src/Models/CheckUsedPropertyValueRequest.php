<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models;

use AlibabaCloud\Dara\Model;

class CheckUsedPropertyValueRequest extends Model
{
    /**
     * @var int
     */
    public $propertyId;

    /**
     * @var int
     */
    public $propertyValueId;
    protected $_name = [
        'propertyId' => 'PropertyId',
        'propertyValueId' => 'PropertyValueId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
