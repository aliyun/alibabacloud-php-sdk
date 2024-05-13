<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Antiddospublic\V20170518\Models;

use AlibabaCloud\Tea\Model;

class DescribeDdosThresholdRequest extends Model
{
    /**
     * @description The region ID of the asset.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $ddosRegionId;

    /**
     * @description The type of the threshold. Valid values:
     *
     *   **defense**: traffic scrubbing threshold
     *   **blackhole**: DDoS mitigation threshold
     *
     * This parameter is required.
     * @example defense
     *
     * @var string
     */
    public $ddosType;

    /**
     * @description The ID of asset N to query.
     *
     * This parameter is required.
     * @var string[]
     */
    public $instanceIds;

    /**
     * @description The type of the asset. Valid values:
     *
     *   **ecs**: ECS instance
     *   **slb**: SLB instance
     *   **eip**: EIP
     *
     * This parameter is required.
     * @example ecs
     *
     * @var string
     */
    public $instanceType;
    protected $_name = [
        'ddosRegionId' => 'DdosRegionId',
        'ddosType'     => 'DdosType',
        'instanceIds'  => 'InstanceIds',
        'instanceType' => 'InstanceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ddosRegionId) {
            $res['DdosRegionId'] = $this->ddosRegionId;
        }
        if (null !== $this->ddosType) {
            $res['DdosType'] = $this->ddosType;
        }
        if (null !== $this->instanceIds) {
            $res['InstanceIds'] = $this->instanceIds;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDdosThresholdRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DdosRegionId'])) {
            $model->ddosRegionId = $map['DdosRegionId'];
        }
        if (isset($map['DdosType'])) {
            $model->ddosType = $map['DdosType'];
        }
        if (isset($map['InstanceIds'])) {
            if (!empty($map['InstanceIds'])) {
                $model->instanceIds = $map['InstanceIds'];
            }
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }

        return $model;
    }
}
