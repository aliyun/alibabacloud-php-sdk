<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdateStandardRequest\updateCommand\standardTemplateReference;

use AlibabaCloud\Dara\Model;

class attributeValueList extends Model
{
    /**
     * @var int
     */
    public $attributeId;

    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'attributeId' => 'AttributeId',
        'value' => 'Value',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attributeId) {
            $res['AttributeId'] = $this->attributeId;
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
        if (isset($map['AttributeId'])) {
            $model->attributeId = $map['AttributeId'];
        }

        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
