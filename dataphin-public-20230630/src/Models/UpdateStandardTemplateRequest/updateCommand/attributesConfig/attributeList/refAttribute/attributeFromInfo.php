<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdateStandardTemplateRequest\updateCommand\attributesConfig\attributeList\refAttribute;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdateStandardTemplateRequest\updateCommand\attributesConfig\attributeList\refAttribute\attributeFromInfo\standardReference;

class attributeFromInfo extends Model
{
    /**
     * @var string
     */
    public $attributeFrom;

    /**
     * @var standardReference
     */
    public $standardReference;
    protected $_name = [
        'attributeFrom' => 'AttributeFrom',
        'standardReference' => 'StandardReference',
    ];

    public function validate()
    {
        if (null !== $this->standardReference) {
            $this->standardReference->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attributeFrom) {
            $res['AttributeFrom'] = $this->attributeFrom;
        }

        if (null !== $this->standardReference) {
            $res['StandardReference'] = null !== $this->standardReference ? $this->standardReference->toArray($noStream) : $this->standardReference;
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
        if (isset($map['AttributeFrom'])) {
            $model->attributeFrom = $map['AttributeFrom'];
        }

        if (isset($map['StandardReference'])) {
            $model->standardReference = standardReference::fromMap($map['StandardReference']);
        }

        return $model;
    }
}
