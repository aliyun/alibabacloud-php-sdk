<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20210422\Models\SearchAlertRulesResponseBody\pageBean;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ARMS\V20210422\Models\SearchAlertRulesResponseBody\pageBean\alertRules\alarmContext;
use AlibabaCloud\SDK\ARMS\V20210422\Models\SearchAlertRulesResponseBody\pageBean\alertRules\alertRule;
use AlibabaCloud\SDK\ARMS\V20210422\Models\SearchAlertRulesResponseBody\pageBean\alertRules\metricParam;
use AlibabaCloud\SDK\ARMS\V20210422\Models\SearchAlertRulesResponseBody\pageBean\alertRules\notice;

class alertRules extends Model
{
    /**
     * @var alarmContext
     */
    public $alarmContext;

    /**
     * @var string
     */
    public $alertLevel;

    /**
     * @var alertRule
     */
    public $alertRule;

    /**
     * @var string
     */
    public $alertTitle;

    /**
     * @var int
     */
    public $alertType;

    /**
     * @var int
     */
    public $alertVersion;

    /**
     * @var string[]
     */
    public $alertWay;

    /**
     * @var string[]
     */
    public $alertWays;

    /**
     * @var string
     */
    public $config;

    /**
     * @var string
     */
    public $contactGroupIdList;

    /**
     * @var string
     */
    public $contactGroupIds;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var int
     */
    public $id;

    /**
     * @var metricParam
     */
    public $metricParam;

    /**
     * @var notice
     */
    public $notice;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $taskId;

    /**
     * @var string
     */
    public $taskStatus;

    /**
     * @var string
     */
    public $title;

    /**
     * @var int
     */
    public $updateTime;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'alarmContext' => 'AlarmContext',
        'alertLevel' => 'AlertLevel',
        'alertRule' => 'AlertRule',
        'alertTitle' => 'AlertTitle',
        'alertType' => 'AlertType',
        'alertVersion' => 'AlertVersion',
        'alertWay' => 'AlertWay',
        'alertWays' => 'AlertWays',
        'config' => 'Config',
        'contactGroupIdList' => 'ContactGroupIdList',
        'contactGroupIds' => 'ContactGroupIds',
        'createTime' => 'CreateTime',
        'id' => 'Id',
        'metricParam' => 'MetricParam',
        'notice' => 'Notice',
        'regionId' => 'RegionId',
        'status' => 'Status',
        'taskId' => 'TaskId',
        'taskStatus' => 'TaskStatus',
        'title' => 'Title',
        'updateTime' => 'UpdateTime',
        'userId' => 'UserId',
    ];

    public function validate()
    {
        if (null !== $this->alarmContext) {
            $this->alarmContext->validate();
        }
        if (null !== $this->alertRule) {
            $this->alertRule->validate();
        }
        if (\is_array($this->alertWay)) {
            Model::validateArray($this->alertWay);
        }
        if (\is_array($this->alertWays)) {
            Model::validateArray($this->alertWays);
        }
        if (null !== $this->metricParam) {
            $this->metricParam->validate();
        }
        if (null !== $this->notice) {
            $this->notice->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alarmContext) {
            $res['AlarmContext'] = null !== $this->alarmContext ? $this->alarmContext->toArray($noStream) : $this->alarmContext;
        }

        if (null !== $this->alertLevel) {
            $res['AlertLevel'] = $this->alertLevel;
        }

        if (null !== $this->alertRule) {
            $res['AlertRule'] = null !== $this->alertRule ? $this->alertRule->toArray($noStream) : $this->alertRule;
        }

        if (null !== $this->alertTitle) {
            $res['AlertTitle'] = $this->alertTitle;
        }

        if (null !== $this->alertType) {
            $res['AlertType'] = $this->alertType;
        }

        if (null !== $this->alertVersion) {
            $res['AlertVersion'] = $this->alertVersion;
        }

        if (null !== $this->alertWay) {
            if (\is_array($this->alertWay)) {
                $res['AlertWay'] = [];
                $n1 = 0;
                foreach ($this->alertWay as $item1) {
                    $res['AlertWay'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->alertWays) {
            if (\is_array($this->alertWays)) {
                $res['AlertWays'] = [];
                $n1 = 0;
                foreach ($this->alertWays as $item1) {
                    $res['AlertWays'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->config) {
            $res['Config'] = $this->config;
        }

        if (null !== $this->contactGroupIdList) {
            $res['ContactGroupIdList'] = $this->contactGroupIdList;
        }

        if (null !== $this->contactGroupIds) {
            $res['ContactGroupIds'] = $this->contactGroupIds;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->metricParam) {
            $res['MetricParam'] = null !== $this->metricParam ? $this->metricParam->toArray($noStream) : $this->metricParam;
        }

        if (null !== $this->notice) {
            $res['Notice'] = null !== $this->notice ? $this->notice->toArray($noStream) : $this->notice;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
        }

        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
        if (isset($map['AlarmContext'])) {
            $model->alarmContext = alarmContext::fromMap($map['AlarmContext']);
        }

        if (isset($map['AlertLevel'])) {
            $model->alertLevel = $map['AlertLevel'];
        }

        if (isset($map['AlertRule'])) {
            $model->alertRule = alertRule::fromMap($map['AlertRule']);
        }

        if (isset($map['AlertTitle'])) {
            $model->alertTitle = $map['AlertTitle'];
        }

        if (isset($map['AlertType'])) {
            $model->alertType = $map['AlertType'];
        }

        if (isset($map['AlertVersion'])) {
            $model->alertVersion = $map['AlertVersion'];
        }

        if (isset($map['AlertWay'])) {
            if (!empty($map['AlertWay'])) {
                $model->alertWay = [];
                $n1 = 0;
                foreach ($map['AlertWay'] as $item1) {
                    $model->alertWay[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['AlertWays'])) {
            if (!empty($map['AlertWays'])) {
                $model->alertWays = [];
                $n1 = 0;
                foreach ($map['AlertWays'] as $item1) {
                    $model->alertWays[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }

        if (isset($map['ContactGroupIdList'])) {
            $model->contactGroupIdList = $map['ContactGroupIdList'];
        }

        if (isset($map['ContactGroupIds'])) {
            $model->contactGroupIds = $map['ContactGroupIds'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['MetricParam'])) {
            $model->metricParam = metricParam::fromMap($map['MetricParam']);
        }

        if (isset($map['Notice'])) {
            $model->notice = notice::fromMap($map['Notice']);
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }

        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
