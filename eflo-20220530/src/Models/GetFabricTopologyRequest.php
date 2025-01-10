<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models;

use AlibabaCloud\Tea\Model;

class GetFabricTopologyRequest extends Model
{
    /**
     * @description The cluster ID.
     *
     * @example i-169263721924****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description Lingjun network interface controller ID List
     *
     * @var string[]
     */
    public $lniIds;

    /**
     * @description Node ID list
     *
     * @var string[]
     */
    public $nodeIds;

    /**
     * @description The region ID.
     *
     * This parameter is required.
     * @example cn-wulanchabu
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the virtual private cloud (VPC).
     *
     * @example vpc-k8i0g9fk68t7u0u2w****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description Lingjun CIDR block ID
     *
     * @example vpd-aof7****
     *
     * @var string
     */
    public $vpdId;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'lniIds'    => 'LniIds',
        'nodeIds'   => 'NodeIds',
        'regionId'  => 'RegionId',
        'vpcId'     => 'VpcId',
        'vpdId'     => 'VpdId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->lniIds) {
            $res['LniIds'] = $this->lniIds;
        }
        if (null !== $this->nodeIds) {
            $res['NodeIds'] = $this->nodeIds;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->vpdId) {
            $res['VpdId'] = $this->vpdId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetFabricTopologyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['LniIds'])) {
            if (!empty($map['LniIds'])) {
                $model->lniIds = $map['LniIds'];
            }
        }
        if (isset($map['NodeIds'])) {
            if (!empty($map['NodeIds'])) {
                $model->nodeIds = $map['NodeIds'];
            }
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['VpdId'])) {
            $model->vpdId = $map['VpdId'];
        }

        return $model;
    }
}
