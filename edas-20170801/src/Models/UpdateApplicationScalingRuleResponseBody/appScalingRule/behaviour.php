<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\UpdateApplicationScalingRuleResponseBody\appScalingRule;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edas\V20170801\Models\UpdateApplicationScalingRuleResponseBody\appScalingRule\behaviour\scaleDown;
use AlibabaCloud\SDK\Edas\V20170801\Models\UpdateApplicationScalingRuleResponseBody\appScalingRule\behaviour\scaleUp;

class behaviour extends Model
{
    /**
     * @var scaleDown
     */
    public $scaleDown;

    /**
     * @var scaleUp
     */
    public $scaleUp;
    protected $_name = [
        'scaleDown' => 'ScaleDown',
        'scaleUp' => 'ScaleUp',
    ];

    public function validate()
    {
        if (null !== $this->scaleDown) {
            $this->scaleDown->validate();
        }
        if (null !== $this->scaleUp) {
            $this->scaleUp->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->scaleDown) {
            $res['ScaleDown'] = null !== $this->scaleDown ? $this->scaleDown->toArray($noStream) : $this->scaleDown;
        }

        if (null !== $this->scaleUp) {
            $res['ScaleUp'] = null !== $this->scaleUp ? $this->scaleUp->toArray($noStream) : $this->scaleUp;
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
        if (isset($map['ScaleDown'])) {
            $model->scaleDown = scaleDown::fromMap($map['ScaleDown']);
        }

        if (isset($map['ScaleUp'])) {
            $model->scaleUp = scaleUp::fromMap($map['ScaleUp']);
        }

        return $model;
    }
}
