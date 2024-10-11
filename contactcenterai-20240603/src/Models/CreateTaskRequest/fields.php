<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ContactCenterAI\V20240603\Models\CreateTaskRequest;

use AlibabaCloud\SDK\ContactCenterAI\V20240603\Models\CreateTaskRequest\fields\enumValues;
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
     * @description This parameter is required.
     *
     * @var string
     */
    public $desc;

    /**
     * @description This parameter is required.
     *
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
        'code'       => 'code',
        'desc'       => 'desc',
        'enumValues' => 'enumValues',
        'name'       => 'name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }
        if (null !== $this->desc) {
            $res['desc'] = $this->desc;
        }
        if (null !== $this->enumValues) {
            $res['enumValues'] = [];
            if (null !== $this->enumValues && \is_array($this->enumValues)) {
                $n = 0;
                foreach ($this->enumValues as $item) {
                    $res['enumValues'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
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
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }
        if (isset($map['desc'])) {
            $model->desc = $map['desc'];
        }
        if (isset($map['enumValues'])) {
            if (!empty($map['enumValues'])) {
                $model->enumValues = [];
                $n                 = 0;
                foreach ($map['enumValues'] as $item) {
                    $model->enumValues[$n++] = null !== $item ? enumValues::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        return $model;
    }
}
