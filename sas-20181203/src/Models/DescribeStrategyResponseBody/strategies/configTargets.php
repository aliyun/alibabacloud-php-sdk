<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeStrategyResponseBody\strategies;

use AlibabaCloud\Tea\Model;

class configTargets extends Model
{
    /**
     * @description Indicates whether the baseline check policy is applied to the asset group. Valid values:
     *
     *   **add**: yes
     *   **del**: no
     *
     * @example add
     *
     * @var string
     */
    public $flag;

    /**
     * @description The asset group ID or UUID of the asset to which the baseline check policy is applied.
     *
     * @example 10099713
     *
     * @var string
     */
    public $target;

    /**
     * @description The condition by which the baseline check policy is applied to the asset. Valid values:
     *
     *   **groupId**: the ID of the asset group
     *   **uuid**: the UUID of the asset
     *
     * @example groupId
     *
     * @var string
     */
    public $targetType;
    protected $_name = [
        'flag'       => 'Flag',
        'target'     => 'Target',
        'targetType' => 'TargetType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->flag) {
            $res['Flag'] = $this->flag;
        }
        if (null !== $this->target) {
            $res['Target'] = $this->target;
        }
        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return configTargets
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Flag'])) {
            $model->flag = $map['Flag'];
        }
        if (isset($map['Target'])) {
            $model->target = $map['Target'];
        }
        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }

        return $model;
    }
}
