<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20160722\Models\DescribeScalingGroupsResponseBody\scalingGroups\scalingGroup;

use AlibabaCloud\Tea\Model;

class removalPolicies extends Model
{
    /**
     * @var string[]
     */
    public $removalPolicy;
    protected $_name = [
        'removalPolicy' => 'RemovalPolicy',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->removalPolicy) {
            $res['RemovalPolicy'] = $this->removalPolicy;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return removalPolicies
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RemovalPolicy'])) {
            if (!empty($map['RemovalPolicy'])) {
                $model->removalPolicy = $map['RemovalPolicy'];
            }
        }

        return $model;
    }
}
