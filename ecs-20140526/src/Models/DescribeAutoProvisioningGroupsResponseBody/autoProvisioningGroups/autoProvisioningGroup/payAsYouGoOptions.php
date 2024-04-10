<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAutoProvisioningGroupsResponseBody\autoProvisioningGroups\autoProvisioningGroup;

use AlibabaCloud\Tea\Model;

class payAsYouGoOptions extends Model
{
    /**
     * @description The policy for creating pay-as-you-go instances. Valid values:
     *
     *   lowest-price: cost optimization policy. This policy indicates that lowest-cost instance types are used to create instances.
     *   prioritized: priority-based policy. This policy indicates that instances are created based on the priority specified by LaunchTemplateConfig.N.Priority.
     *
     * >  The value of LaunchTemplateConfig.N.Priority is specified when the auto provisioning group is created, and the value cannot be modified.
     * @example prioritized
     *
     * @var string
     */
    public $allocationStrategy;
    protected $_name = [
        'allocationStrategy' => 'AllocationStrategy',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allocationStrategy) {
            $res['AllocationStrategy'] = $this->allocationStrategy;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return payAsYouGoOptions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllocationStrategy'])) {
            $model->allocationStrategy = $map['AllocationStrategy'];
        }

        return $model;
    }
}
