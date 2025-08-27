<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ListFreeNodesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ListFreeNodesResponseBody\nodes\tags;

class nodes extends Model
{
    /**
     * @var string
     */
    public $commodityCode;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $expiredTime;

    /**
     * @var string
     */
    public $hpnZone;

    /**
     * @var string
     */
    public $machineType;

    /**
     * @var string
     */
    public $nodeId;

    /**
     * @var string
     */
    public $operatingState;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $sn;

    /**
     * @var tags[]
     */
    public $tags;

    /**
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

    public function validate()
    {
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1] = tags::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
