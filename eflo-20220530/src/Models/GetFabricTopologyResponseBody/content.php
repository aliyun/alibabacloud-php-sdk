<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models\GetFabricTopologyResponseBody;

use AlibabaCloud\SDK\Eflo\V20220530\Models\GetFabricTopologyResponseBody\content\topoInfo;
use AlibabaCloud\Tea\Model;

class content extends Model
{
    /**
     * @description The cluster ID.
     *
     * @example cluster-****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The region ID.
     *
     * @example cn-wulanchabu
     *
     * @var string
     */
    public $regionId;

    /**
     * @description network interface controller Topology Information
     *
     * @var topoInfo[]
     */
    public $topoInfo;

    /**
     * @description The ID of the virtual private cloud (VPC).
     *
     * @example vpc-j6ctp4n75306****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description Lingjun CIDR block ID
     *
     * @example vpd-fuli****
     *
     * @var string
     */
    public $vpdId;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'regionId'  => 'RegionId',
        'topoInfo'  => 'TopoInfo',
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
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->topoInfo) {
            $res['TopoInfo'] = [];
            if (null !== $this->topoInfo && \is_array($this->topoInfo)) {
                $n = 0;
                foreach ($this->topoInfo as $item) {
                    $res['TopoInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
     * @return content
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['TopoInfo'])) {
            if (!empty($map['TopoInfo'])) {
                $model->topoInfo = [];
                $n               = 0;
                foreach ($map['TopoInfo'] as $item) {
                    $model->topoInfo[$n++] = null !== $item ? topoInfo::fromMap($item) : $item;
                }
            }
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
