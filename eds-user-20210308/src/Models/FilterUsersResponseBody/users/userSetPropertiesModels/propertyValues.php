<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models\FilterUsersResponseBody\users\userSetPropertiesModels;

use AlibabaCloud\Dara\Model;

class propertyValues extends Model
{
    /**
     * @var string
     */
    public $propertyValue;

    /**
     * @var int
     */
    public $propertyValueId;
    protected $_name = [
        'propertyValue' => 'PropertyValue',
        'propertyValueId' => 'PropertyValueId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
