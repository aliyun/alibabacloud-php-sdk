<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAutoProvisioningGroupsResponseBody\autoProvisioningGroups\autoProvisioningGroup;

use AlibabaCloud\Tea\Model;

class payAsYouGoOptions extends Model
{
    /**
     * @description The provisioning policy for pay-as-you-go instances. Valid values:
     *
     * >  The LaunchTemplateConfig.N.Priority parameter is set when the auto provisioning group is created, and cannot be modified.
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
