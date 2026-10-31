<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdateScheduleMonitorRequest\updateCommand;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdateScheduleMonitorRequest\updateCommand\monitoredItemConfig\monitoredNodeRange;

class monitoredItemConfig extends Model
{
    /**
     * @var int
     */
    public $bizUnitId;

    /**
     * @var int
     */
    public $logicalTableId;

    /**
     * @var string
     */
    public $logicalTableName;

    /**
     * @var string
     */
    public $monitoredItemType;

    /**
     * @var monitoredNodeRange
     */
    public $monitoredNodeRange;

    /**
     * @var string
     */
    public $nodeId;

    /**
     * @var string
     */
    public $nodeName;

    /**
     * @var string
     */
    public $nodeSubType;

    /**
     * @var string[]
     */
    public $opsOwnerIdList;

    /**
     * @var int
     */
    public $projectId;
    protected $_name = [
        'bizUnitId' => 'BizUnitId',
        'logicalTableId' => 'LogicalTableId',
        'logicalTableName' => 'LogicalTableName',
        'monitoredItemType' => 'MonitoredItemType',
        'monitoredNodeRange' => 'MonitoredNodeRange',
        'nodeId' => 'NodeId',
        'nodeName' => 'NodeName',
        'nodeSubType' => 'NodeSubType',
        'opsOwnerIdList' => 'OpsOwnerIdList',
        'projectId' => 'ProjectId',
    ];

    public function validate()
    {
        if (null !== $this->monitoredNodeRange) {
            $this->monitoredNodeRange->validate();
        }
        if (\is_array($this->opsOwnerIdList)) {
            Model::validateArray($this->opsOwnerIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizUnitId) {
            $res['BizUnitId'] = $this->bizUnitId;
        }

        if (null !== $this->logicalTableId) {
            $res['LogicalTableId'] = $this->logicalTableId;
        }

        if (null !== $this->logicalTableName) {
            $res['LogicalTableName'] = $this->logicalTableName;
        }

        if (null !== $this->monitoredItemType) {
            $res['MonitoredItemType'] = $this->monitoredItemType;
        }

        if (null !== $this->monitoredNodeRange) {
            $res['MonitoredNodeRange'] = null !== $this->monitoredNodeRange ? $this->monitoredNodeRange->toArray($noStream) : $this->monitoredNodeRange;
        }

        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }

        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
        }

        if (null !== $this->nodeSubType) {
            $res['NodeSubType'] = $this->nodeSubType;
        }

        if (null !== $this->opsOwnerIdList) {
            if (\is_array($this->opsOwnerIdList)) {
                $res['OpsOwnerIdList'] = [];
                $n1 = 0;
                foreach ($this->opsOwnerIdList as $item1) {
                    $res['OpsOwnerIdList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
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
        if (isset($map['BizUnitId'])) {
            $model->bizUnitId = $map['BizUnitId'];
        }

        if (isset($map['LogicalTableId'])) {
            $model->logicalTableId = $map['LogicalTableId'];
        }

        if (isset($map['LogicalTableName'])) {
            $model->logicalTableName = $map['LogicalTableName'];
        }

        if (isset($map['MonitoredItemType'])) {
            $model->monitoredItemType = $map['MonitoredItemType'];
        }

        if (isset($map['MonitoredNodeRange'])) {
            $model->monitoredNodeRange = monitoredNodeRange::fromMap($map['MonitoredNodeRange']);
        }

        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }

        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
        }

        if (isset($map['NodeSubType'])) {
            $model->nodeSubType = $map['NodeSubType'];
        }

        if (isset($map['OpsOwnerIdList'])) {
            if (!empty($map['OpsOwnerIdList'])) {
                $model->opsOwnerIdList = [];
                $n1 = 0;
                foreach ($map['OpsOwnerIdList'] as $item1) {
                    $model->opsOwnerIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        return $model;
    }
}
