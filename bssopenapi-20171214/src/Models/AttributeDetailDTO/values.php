<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\AttributeDetailDTO;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\AttributeDetailDTO;

class values extends Model
{
    /**
     * @var AttributeDetailDTO[]
     */
    public $cascadingAttributeValues;

    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'cascadingAttributeValues' => 'CascadingAttributeValues',
        'value' => 'Value',
    ];

    public function validate()
    {
        if (\is_array($this->cascadingAttributeValues)) {
            Model::validateArray($this->cascadingAttributeValues);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cascadingAttributeValues) {
            if (\is_array($this->cascadingAttributeValues)) {
                $res['CascadingAttributeValues'] = [];
                $n1 = 0;
                foreach ($this->cascadingAttributeValues as $item1) {
                    $res['CascadingAttributeValues'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['CascadingAttributeValues'])) {
            if (!empty($map['CascadingAttributeValues'])) {
                $model->cascadingAttributeValues = [];
                $n1 = 0;
                foreach ($map['CascadingAttributeValues'] as $item1) {
                    $model->cascadingAttributeValues[$n1] = AttributeDetailDTO::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
