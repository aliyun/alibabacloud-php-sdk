<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetStandardResponseBody\standardInfo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetStandardResponseBody\standardInfo\attributeWithValueList\attribute;

class attributeWithValueList extends Model
{
    /**
     * @var attribute
     */
    public $attribute;

    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'attribute' => 'Attribute',
        'value' => 'Value',
    ];

    public function validate()
    {
        if (null !== $this->attribute) {
            $this->attribute->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attribute) {
            $res['Attribute'] = null !== $this->attribute ? $this->attribute->toArray($noStream) : $this->attribute;
        }

        if (null !== $this->value) {
            $res['Value'] = $this->value;
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
        if (isset($map['Attribute'])) {
            $model->attribute = attribute::fromMap($map['Attribute']);
        }

        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
