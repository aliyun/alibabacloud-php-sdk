<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models\ModifySystemPropertyTemplateRequest\systemPropertyInfo;

use AlibabaCloud\Dara\Model;

class customPropertyInfos extends Model
{
    /**
     * @var string
     */
    public $propertyName;

    /**
     * @var string
     */
    public $propertyValue;
    protected $_name = [
        'propertyName' => 'PropertyName',
        'propertyValue' => 'PropertyValue',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->propertyName) {
            $res['PropertyName'] = $this->propertyName;
        }

        if (null !== $this->propertyValue) {
            $res['PropertyValue'] = $this->propertyValue;
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
        if (isset($map['PropertyName'])) {
            $model->propertyName = $map['PropertyName'];
        }

        if (isset($map['PropertyValue'])) {
            $model->propertyValue = $map['PropertyValue'];
        }

        return $model;
    }
}
