<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\DescribeApplicationScalingRulesResponseBody\appScalingRules\result;

use AlibabaCloud\SDK\Edas\V20170801\Models\DescribeApplicationScalingRulesResponseBody\appScalingRules\result\behaviour\scaleDown;
use AlibabaCloud\SDK\Edas\V20170801\Models\DescribeApplicationScalingRulesResponseBody\appScalingRules\result\behaviour\scaleUp;
use AlibabaCloud\Tea\Model;

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
