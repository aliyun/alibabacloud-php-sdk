<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ContactCenterAI\V20240603\Models\RunCompletionRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ContactCenterAI\V20240603\Models\RunCompletionRequest\fields\enumValues;

class fields extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $desc;

    /**
     * @var enumValues[]
     */
    public $enumValues;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'code' => 'Code',
        'desc' => 'Desc',
        'enumValues' => 'EnumValues',
        'name' => 'Name',
    ];

    public function validate()
    {
        if (\is_array($this->enumValues)) {
            Model::validateArray($this->enumValues);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->desc) {
            $res['Desc'] = $this->desc;
        }

        if (null !== $this->enumValues) {
            if (\is_array($this->enumValues)) {
                $res['EnumValues'] = [];
                $n1 = 0;
                foreach ($this->enumValues as $item1) {
                    $res['EnumValues'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['Desc'])) {
            $model->desc = $map['Desc'];
        }

        if (isset($map['EnumValues'])) {
            if (!empty($map['EnumValues'])) {
                $model->enumValues = [];
                $n1 = 0;
                foreach ($map['EnumValues'] as $item1) {
                    $model->enumValues[$n1] = enumValues::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
