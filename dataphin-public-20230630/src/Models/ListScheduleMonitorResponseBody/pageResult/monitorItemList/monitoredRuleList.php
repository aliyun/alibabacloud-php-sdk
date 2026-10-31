<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListScheduleMonitorResponseBody\pageResult\monitorItemList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListScheduleMonitorResponseBody\pageResult\monitorItemList\monitoredRuleList\alertReason;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListScheduleMonitorResponseBody\pageResult\monitorItemList\monitoredRuleList\alertStrategy;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListScheduleMonitorResponseBody\pageResult\monitorItemList\monitoredRuleList\creator;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListScheduleMonitorResponseBody\pageResult\monitorItemList\monitoredRuleList\modifier;

class monitoredRuleList extends Model
{
    /**
     * @var alertReason
     */
    public $alertReason;

    /**
     * @var alertStrategy
     */
    public $alertStrategy;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var creator
     */
    public $creator;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $modifiedTime;

    /**
     * @var modifier
     */
    public $modifier;

    /**
     * @var int
     */
    public $monitoredItemId;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var bool
     */
    public $switchStatus;

    /**
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'alertReason' => 'AlertReason',
        'alertStrategy' => 'AlertStrategy',
        'createTime' => 'CreateTime',
        'creator' => 'Creator',
        'id' => 'Id',
        'modifiedTime' => 'ModifiedTime',
        'modifier' => 'Modifier',
        'monitoredItemId' => 'MonitoredItemId',
        'projectId' => 'ProjectId',
        'switchStatus' => 'SwitchStatus',
        'tenantId' => 'TenantId',
    ];

    public function validate()
    {
        if (null !== $this->alertReason) {
            $this->alertReason->validate();
        }
        if (null !== $this->alertStrategy) {
            $this->alertStrategy->validate();
        }
        if (null !== $this->creator) {
            $this->creator->validate();
        }
        if (null !== $this->modifier) {
            $this->modifier->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alertReason) {
            $res['AlertReason'] = null !== $this->alertReason ? $this->alertReason->toArray($noStream) : $this->alertReason;
        }

        if (null !== $this->alertStrategy) {
            $res['AlertStrategy'] = null !== $this->alertStrategy ? $this->alertStrategy->toArray($noStream) : $this->alertStrategy;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->creator) {
            $res['Creator'] = null !== $this->creator ? $this->creator->toArray($noStream) : $this->creator;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }

        if (null !== $this->modifier) {
            $res['Modifier'] = null !== $this->modifier ? $this->modifier->toArray($noStream) : $this->modifier;
        }

        if (null !== $this->monitoredItemId) {
            $res['MonitoredItemId'] = $this->monitoredItemId;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        if (null !== $this->switchStatus) {
            $res['SwitchStatus'] = $this->switchStatus;
        }

        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
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
        if (isset($map['AlertReason'])) {
            $model->alertReason = alertReason::fromMap($map['AlertReason']);
        }

        if (isset($map['AlertStrategy'])) {
            $model->alertStrategy = alertStrategy::fromMap($map['AlertStrategy']);
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Creator'])) {
            $model->creator = creator::fromMap($map['Creator']);
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }

        if (isset($map['Modifier'])) {
            $model->modifier = modifier::fromMap($map['Modifier']);
        }

        if (isset($map['MonitoredItemId'])) {
            $model->monitoredItemId = $map['MonitoredItemId'];
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        if (isset($map['SwitchStatus'])) {
            $model->switchStatus = $map['SwitchStatus'];
        }

        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        return $model;
    }
}
