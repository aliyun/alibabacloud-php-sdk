<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ContactCenterAI\V20240603\Models\RunCompletionRequest\fields;

use AlibabaCloud\Dara\Model;

class enumValues extends Model
{
    /**
     * @var string
     */
    public $desc;

    /**
     * @var string
     */
    public $enumValue;
    protected $_name = [
        'desc' => 'Desc',
        'enumValue' => 'EnumValue',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->desc) {
            $res['Desc'] = $this->desc;
        }

        if (null !== $this->enumValue) {
            $res['EnumValue'] = $this->enumValue;
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
        if (isset($map['Desc'])) {
            $model->desc = $map['Desc'];
        }

        if (isset($map['EnumValue'])) {
            $model->enumValue = $map['EnumValue'];
        }

        return $model;
    }
}
