<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListScheduleMonitorResponseBody\pageResult;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListScheduleMonitorResponseBody\pageResult\monitorItemList\bizUnit;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListScheduleMonitorResponseBody\pageResult\monitorItemList\logicTable;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListScheduleMonitorResponseBody\pageResult\monitorItemList\monitoredRuleList;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListScheduleMonitorResponseBody\pageResult\monitorItemList\monitoredTask;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListScheduleMonitorResponseBody\pageResult\monitorItemList\monitorNodeRange;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListScheduleMonitorResponseBody\pageResult\monitorItemList\projectInfo;

class monitorItemList extends Model
{
    /**
     * @var bizUnit
     */
    public $bizUnit;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var logicTable
     */
    public $logicTable;

    /**
     * @var string
     */
    public $modifiedTime;

    /**
     * @var monitorNodeRange
     */
    public $monitorNodeRange;

    /**
     * @var int
     */
    public $monitoredItemId;

    /**
     * @var monitoredRuleList[]
     */
    public $monitoredRuleList;

    /**
     * @var monitoredTask
     */
    public $monitoredTask;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var projectInfo
     */
    public $projectInfo;

    /**
     * @var string
     */
    public $subType;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'bizUnit' => 'BizUnit',
        'createTime' => 'CreateTime',
        'logicTable' => 'LogicTable',
        'modifiedTime' => 'ModifiedTime',
        'monitorNodeRange' => 'MonitorNodeRange',
        'monitoredItemId' => 'MonitoredItemId',
        'monitoredRuleList' => 'MonitoredRuleList',
        'monitoredTask' => 'MonitoredTask',
        'projectId' => 'ProjectId',
        'projectInfo' => 'ProjectInfo',
        'subType' => 'SubType',
        'tenantId' => 'TenantId',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (null !== $this->bizUnit) {
            $this->bizUnit->validate();
        }
        if (null !== $this->logicTable) {
            $this->logicTable->validate();
        }
        if (null !== $this->monitorNodeRange) {
            $this->monitorNodeRange->validate();
        }
        if (\is_array($this->monitoredRuleList)) {
            Model::validateArray($this->monitoredRuleList);
        }
        if (null !== $this->monitoredTask) {
            $this->monitoredTask->validate();
        }
        if (null !== $this->projectInfo) {
            $this->projectInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizUnit) {
            $res['BizUnit'] = null !== $this->bizUnit ? $this->bizUnit->toArray($noStream) : $this->bizUnit;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->logicTable) {
            $res['LogicTable'] = null !== $this->logicTable ? $this->logicTable->toArray($noStream) : $this->logicTable;
        }

        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }

        if (null !== $this->monitorNodeRange) {
            $res['MonitorNodeRange'] = null !== $this->monitorNodeRange ? $this->monitorNodeRange->toArray($noStream) : $this->monitorNodeRange;
        }

        if (null !== $this->monitoredItemId) {
            $res['MonitoredItemId'] = $this->monitoredItemId;
        }

        if (null !== $this->monitoredRuleList) {
            if (\is_array($this->monitoredRuleList)) {
                $res['MonitoredRuleList'] = [];
                $n1 = 0;
                foreach ($this->monitoredRuleList as $item1) {
                    $res['MonitoredRuleList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->monitoredTask) {
            $res['MonitoredTask'] = null !== $this->monitoredTask ? $this->monitoredTask->toArray($noStream) : $this->monitoredTask;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        if (null !== $this->projectInfo) {
            $res['ProjectInfo'] = null !== $this->projectInfo ? $this->projectInfo->toArray($noStream) : $this->projectInfo;
        }

        if (null !== $this->subType) {
            $res['SubType'] = $this->subType;
        }

        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['BizUnit'])) {
            $model->bizUnit = bizUnit::fromMap($map['BizUnit']);
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['LogicTable'])) {
            $model->logicTable = logicTable::fromMap($map['LogicTable']);
        }

        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }

        if (isset($map['MonitorNodeRange'])) {
            $model->monitorNodeRange = monitorNodeRange::fromMap($map['MonitorNodeRange']);
        }

        if (isset($map['MonitoredItemId'])) {
            $model->monitoredItemId = $map['MonitoredItemId'];
        }

        if (isset($map['MonitoredRuleList'])) {
            if (!empty($map['MonitoredRuleList'])) {
                $model->monitoredRuleList = [];
                $n1 = 0;
                foreach ($map['MonitoredRuleList'] as $item1) {
                    $model->monitoredRuleList[$n1] = monitoredRuleList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['MonitoredTask'])) {
            $model->monitoredTask = monitoredTask::fromMap($map['MonitoredTask']);
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        if (isset($map['ProjectInfo'])) {
            $model->projectInfo = projectInfo::fromMap($map['ProjectInfo']);
        }

        if (isset($map['SubType'])) {
            $model->subType = $map['SubType'];
        }

        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
