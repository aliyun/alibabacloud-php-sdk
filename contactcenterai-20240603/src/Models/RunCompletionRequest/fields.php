<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ContactCenterAI\V20240603\Models\RunCompletionRequest;

use AlibabaCloud\SDK\ContactCenterAI\V20240603\Models\RunCompletionRequest\fields\enumValues;
use AlibabaCloud\Tea\Model;

class fields extends Model
{
    /**
     * @example phoneNumber
     *
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
     * @description This parameter is required.
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'code'       => 'Code',
        'desc'       => 'Desc',
        'enumValues' => 'EnumValues',
        'name'       => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->desc) {
            $res['Desc'] = $this->desc;
        }
        if (null !== $this->enumValues) {
            $res['EnumValues'] = [];
            if (null !== $this->enumValues && \is_array($this->enumValues)) {
                $n = 0;
                foreach ($this->enumValues as $item) {
                    $res['EnumValues'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return fields
     */
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
                $n                 = 0;
                foreach ($map['EnumValues'] as $item) {
                    $model->enumValues[$n++] = null !== $item ? enumValues::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
