<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\SDK\Eas\V20210701\Models\DescribeVirtualResourceResponseBody\resources;
use AlibabaCloud\Tea\Model;

class DescribeVirtualResourceResponseBody extends Model
{
    /**
     * @description The time when the virtual resource group was created.
     *
     * @example 2024-10-16T17:52:49Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description Indicates whether the retention period of preemptible instances was disabled.
     *
     * @example true
     *
     * @var bool
     */
    public $disableSpotProtectionPeriod;

    /**
     * @var string[]
     */
    public $features;

    /**
     * @description The ID of the request.
     *
     * @example 40325405-579C-4D82****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The list of resources in the virtual resource group.
     *
     * @var resources[]
     */
    public $resources;

    /**
     * @description The number of deployed services.
     *
     * @example 1
     *
     * @var int
     */
    public $serviceCount;

    /**
     * @description The time when the virtual resource group was last updated.
     *
     * @example 2024-10-16T19:52:49Z
     *
     * @var string
     */
    public $updateTime;

    /**
     * @description The ID of the virtual resource group.
     *
     * @example eas-vr-npovr28onap1xxxxxx
     *
     * @var string
     */
    public $virtualResourceId;

    /**
     * @description The name of the virtual resource group.
     *
     * @example MyVirtualResource
     *
     * @var string
     */
    public $virtualResourceName;
    protected $_name = [
        'createTime' => 'CreateTime',
        'disableSpotProtectionPeriod' => 'DisableSpotProtectionPeriod',
        'features' => 'Features',
        'requestId' => 'RequestId',
        'resources' => 'Resources',
        'serviceCount' => 'ServiceCount',
        'updateTime' => 'UpdateTime',
        'virtualResourceId' => 'VirtualResourceId',
        'virtualResourceName' => 'VirtualResourceName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->disableSpotProtectionPeriod) {
            $res['DisableSpotProtectionPeriod'] = $this->disableSpotProtectionPeriod;
        }
        if (null !== $this->features) {
            $res['Features'] = $this->features;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resources) {
            $res['Resources'] = [];
            if (null !== $this->resources && \is_array($this->resources)) {
                $n = 0;
                foreach ($this->resources as $item) {
                    $res['Resources'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->serviceCount) {
            $res['ServiceCount'] = $this->serviceCount;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->virtualResourceId) {
            $res['VirtualResourceId'] = $this->virtualResourceId;
        }
        if (null !== $this->virtualResourceName) {
            $res['VirtualResourceName'] = $this->virtualResourceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVirtualResourceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DisableSpotProtectionPeriod'])) {
            $model->disableSpotProtectionPeriod = $map['DisableSpotProtectionPeriod'];
        }
        if (isset($map['Features'])) {
            if (!empty($map['Features'])) {
                $model->features = $map['Features'];
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Resources'])) {
            if (!empty($map['Resources'])) {
                $model->resources = [];
                $n = 0;
                foreach ($map['Resources'] as $item) {
                    $model->resources[$n++] = null !== $item ? resources::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ServiceCount'])) {
            $model->serviceCount = $map['ServiceCount'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['VirtualResourceId'])) {
            $model->virtualResourceId = $map['VirtualResourceId'];
        }
        if (isset($map['VirtualResourceName'])) {
            $model->virtualResourceName = $map['VirtualResourceName'];
        }

        return $model;
    }
}
