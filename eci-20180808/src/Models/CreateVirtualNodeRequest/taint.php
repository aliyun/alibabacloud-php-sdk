<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\CreateVirtualNodeRequest;

use AlibabaCloud\Tea\Model;

class taint extends Model
{
    /**
     * @description The effect of taint N. Valid values of N: 1 to 20. Valid values:
     *
     * - PreferNoSchedule: Pods are preferentially not scheduled to the nodes that have the taint.
     * @example NoSchedule
     *
     * @var string
     */
    public $effect;

    /**
     * @description The key of taint.
     *
     * @example testKey
     *
     * @var string
     */
    public $key;

    /**
     * @description The value of taint.
     *
     * @example testValue
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
     * @return taint
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
