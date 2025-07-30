<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribePriceRequest;

use AlibabaCloud\Tea\Model;

class schedulerOptions extends Model
{
    /**
     * @description This parameter takes effect only when ResourceType is set to instance.
     *
     * The ID of the dedicated host. You can call the [DescribeDedicatedHosts](https://help.aliyun.com/document_detail/134242.html) operation to query the dedicated host list.
     *
     * @example dh-bp67acfmxazb4p****
     *
     * @var string
     */
    public $dedicatedHostId;

    /**
     * @var string
     */
    public $deploymentSetStrategy;
    protected $_name = [
        'dedicatedHostId' => 'DedicatedHostId',
        'deploymentSetStrategy' => 'DeploymentSetStrategy',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->dedicatedHostId) {
            $res['DedicatedHostId'] = $this->dedicatedHostId;
        }
        if (null !== $this->deploymentSetStrategy) {
            $res['DeploymentSetStrategy'] = $this->deploymentSetStrategy;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return schedulerOptions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DedicatedHostId'])) {
            $model->dedicatedHostId = $map['DedicatedHostId'];
        }
        if (isset($map['DeploymentSetStrategy'])) {
            $model->deploymentSetStrategy = $map['DeploymentSetStrategy'];
        }

        return $model;
    }
}
