<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ListFreeNodesResponseBody;

use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ListFreeNodesResponseBody\nodes\tags;
use AlibabaCloud\Tea\Model;

class nodes extends Model
{
    /**
     * @description The commodity code.
     *
     * @example bccluster_eflocomputing_public_cn
     *
     * @var string
     */
    public $commodityCode;

    /**
     * @description The creation time.
     *
     * @example 1652321554
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The time when the node expires.
     *
     * @example 1673107200
     *
     * @var string
     */
    public $expiredTime;

    /**
     * @description The cluster number.
     *
     * @example A1
     *
     * @var string
     */
    public $hpnZone;

    /**
     * @description The instance type.
     *
     * @example efg1.nvga1
     *
     * @var string
     */
    public $machineType;

    /**
     * @description The node ID.
     *
     * @example e01-cn-7pp2x193801
     *
     * @var string
     */
    public $nodeId;

    /**
     * @description The node status.
     *
     * @example Unused
     *
     * @var string
     */
    public $operatingState;

    /**
     * @description The resource group ID.
     *
     * @example rg-aekzkkbrpl4owgy
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The serial number of the node.
     *
     * @example sn_pozkHBgicd
     *
     * @var string
     */
    public $sn;

    /**
     * @description The tags.
     *
     * @var tags[]
     */
    public $tags;

    /**
     * @description The zone ID.
     *
     * @example cn-hangzhou-j
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'commodityCode' => 'CommodityCode',
        'createTime' => 'CreateTime',
        'expiredTime' => 'ExpiredTime',
        'hpnZone' => 'HpnZone',
        'machineType' => 'MachineType',
        'nodeId' => 'NodeId',
        'operatingState' => 'OperatingState',
        'resourceGroupId' => 'ResourceGroupId',
        'sn' => 'Sn',
        'tags' => 'Tags',
        'zoneId' => 'ZoneId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->commodityCode) {
            $res['CommodityCode'] = $this->commodityCode;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->hpnZone) {
            $res['HpnZone'] = $this->hpnZone;
        }
        if (null !== $this->machineType) {
            $res['MachineType'] = $this->machineType;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->operatingState) {
            $res['OperatingState'] = $this->operatingState;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->sn) {
            $res['Sn'] = $this->sn;
        }
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return nodes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CommodityCode'])) {
            $model->commodityCode = $map['CommodityCode'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['HpnZone'])) {
            $model->hpnZone = $map['HpnZone'];
        }
        if (isset($map['MachineType'])) {
            $model->machineType = $map['MachineType'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['OperatingState'])) {
            $model->operatingState = $map['OperatingState'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Sn'])) {
            $model->sn = $map['Sn'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
