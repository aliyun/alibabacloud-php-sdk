<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\CreateApplicationScalingRuleResponseBody\appScalingRule;

use AlibabaCloud\SDK\Edas\V20170801\Models\CreateApplicationScalingRuleResponseBody\appScalingRule\behaviour\scaleDown;
use AlibabaCloud\SDK\Edas\V20170801\Models\CreateApplicationScalingRuleResponseBody\appScalingRule\behaviour\scaleUp;
use AlibabaCloud\Tea\Model;

class behaviour extends Model
{
    /**
     * @description 弹性缩容行为配置。
     *
     * @var scaleDown
     */
    public $scaleDown;

    /**
     * @description 弹性扩容行为配置。
     *
     * @var scaleUp
     */
    public $scaleUp;
    protected $_name = [
        'scaleDown' => 'ScaleDown',
        'scaleUp'   => 'ScaleUp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->scaleDown) {
            $res['ScaleDown'] = null !== $this->scaleDown ? $this->scaleDown->toMap() : null;
        }
        if (null !== $this->scaleUp) {
            $res['ScaleUp'] = null !== $this->scaleUp ? $this->scaleUp->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return behaviour
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ScaleDown'])) {
            $model->scaleDown = scaleDown::fromMap($map['ScaleDown']);
        }
        if (isset($map['ScaleUp'])) {
            $model->scaleUp = scaleUp::fromMap($map['ScaleUp']);
        }

        return $model;
    }
}
