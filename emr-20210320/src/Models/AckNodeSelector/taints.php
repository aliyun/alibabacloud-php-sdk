<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models\AckNodeSelector;

use AlibabaCloud\Tea\Model;

class taints extends Model
{
    /**
     * @description 污点效果。
     *
     * @var string
     */
    public $effect;

    /**
     * @description 污点键。
     *
     * @example emr
     *
     * @var string
     */
    public $key;

    /**
     * @description 污点值。
     *
     * @example true
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'effect' => 'Effect',
        'key'    => 'Key',
        'value'  => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->effect) {
            $res['Effect'] = $this->effect;
        }
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return taints
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Effect'])) {
            $model->effect = $map['Effect'];
        }
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
