<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeAiEngineEvidenceRequestsResponseBody\items\attackSources;

use AlibabaCloud\Dara\Model;

class sources extends Model
{
    /**
     * @var string
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
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attribute) {
            $res['Attribute'] = $this->attribute;
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
            $model->attribute = $map['Attribute'];
        }

        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
