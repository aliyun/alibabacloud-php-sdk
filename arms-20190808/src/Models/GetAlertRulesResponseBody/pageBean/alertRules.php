<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\GetAlertRulesResponseBody\pageBean;

use AlibabaCloud\SDK\ARMS\V20190808\Models\GetAlertRulesResponseBody\pageBean\alertRules\alertRuleContent;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetAlertRulesResponseBody\pageBean\alertRules\annotations;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetAlertRulesResponseBody\pageBean\alertRules\filters;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetAlertRulesResponseBody\pageBean\alertRules\labels;
use AlibabaCloud\Tea\Model;

class alertRules extends Model
{
    /**
     * @var string
     */
    public $alertCheckType;

    /**
     * @var int
     */
    public $alertGroup;

    /**
     * @var float
     */
    public $alertId;

    /**
     * @var string
     */
    public $alertName;

    /**
     * @var alertRuleContent
     */
    public $alertRuleContent;

    /**
     * @var string
     */
    public $alertStatus;

    /**
     * @var string
     */
    public $alertType;

    /**
     * @var annotations[]
     */
    public $annotations;

    /**
     * @var bool
     */
    public $autoAddNewApplication;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var int
     */
    public $createdTime;

    /**
     * @var string
     */
    public $duration;

    /**
     * @var string
     */
    public $extend;

    /**
     * @var filters
     */
    public $filters;

    /**
     * @var labels[]
     */
    public $labels;

    /**
     * @var string
     */
    public $level;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $metricsType;

    /**
     * @var string
     */
    public $notifyStrategy;

    /**
     * @var string[]
     */
    public $pids;

    /**
     * @var string
     */
    public $promQL;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $updatedTime;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'alertCheckType'        => 'AlertCheckType',
        'alertGroup'            => 'AlertGroup',
        'alertId'               => 'AlertId',
        'alertName'             => 'AlertName',
        'alertRuleContent'      => 'AlertRuleContent',
        'alertStatus'           => 'AlertStatus',
        'alertType'             => 'AlertType',
        'annotations'           => 'Annotations',
        'autoAddNewApplication' => 'AutoAddNewApplication',
        'clusterId'             => 'ClusterId',
        'createdTime'           => 'CreatedTime',
        'duration'              => 'Duration',
        'extend'                => 'Extend',
        'filters'               => 'Filters',
        'labels'                => 'Labels',
        'level'                 => 'Level',
        'message'               => 'Message',
        'metricsType'           => 'MetricsType',
        'notifyStrategy'        => 'NotifyStrategy',
        'pids'                  => 'Pids',
        'promQL'                => 'PromQL',
        'regionId'              => 'RegionId',
        'updatedTime'           => 'UpdatedTime',
        'userId'                => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alertCheckType) {
            $res['AlertCheckType'] = $this->alertCheckType;
        }
        if (null !== $this->alertGroup) {
            $res['AlertGroup'] = $this->alertGroup;
        }
        if (null !== $this->alertId) {
            $res['AlertId'] = $this->alertId;
        }
        if (null !== $this->alertName) {
            $res['AlertName'] = $this->alertName;
        }
        if (null !== $this->alertRuleContent) {
            $res['AlertRuleContent'] = null !== $this->alertRuleContent ? $this->alertRuleContent->toMap() : null;
        }
        if (null !== $this->alertStatus) {
            $res['AlertStatus'] = $this->alertStatus;
        }
        if (null !== $this->alertType) {
            $res['AlertType'] = $this->alertType;
        }
        if (null !== $this->annotations) {
            $res['Annotations'] = [];
            if (null !== $this->annotations && \is_array($this->annotations)) {
                $n = 0;
                foreach ($this->annotations as $item) {
                    $res['Annotations'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->autoAddNewApplication) {
            $res['AutoAddNewApplication'] = $this->autoAddNewApplication;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->extend) {
            $res['Extend'] = $this->extend;
        }
        if (null !== $this->filters) {
            $res['Filters'] = null !== $this->filters ? $this->filters->toMap() : null;
        }
        if (null !== $this->labels) {
            $res['Labels'] = [];
            if (null !== $this->labels && \is_array($this->labels)) {
                $n = 0;
                foreach ($this->labels as $item) {
                    $res['Labels'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->metricsType) {
            $res['MetricsType'] = $this->metricsType;
        }
        if (null !== $this->notifyStrategy) {
            $res['NotifyStrategy'] = $this->notifyStrategy;
        }
        if (null !== $this->pids) {
            $res['Pids'] = $this->pids;
        }
        if (null !== $this->promQL) {
            $res['PromQL'] = $this->promQL;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->updatedTime) {
            $res['UpdatedTime'] = $this->updatedTime;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return alertRules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlertCheckType'])) {
            $model->alertCheckType = $map['AlertCheckType'];
        }
        if (isset($map['AlertGroup'])) {
            $model->alertGroup = $map['AlertGroup'];
        }
        if (isset($map['AlertId'])) {
            $model->alertId = $map['AlertId'];
        }
        if (isset($map['AlertName'])) {
            $model->alertName = $map['AlertName'];
        }
        if (isset($map['AlertRuleContent'])) {
            $model->alertRuleContent = alertRuleContent::fromMap($map['AlertRuleContent']);
        }
        if (isset($map['AlertStatus'])) {
            $model->alertStatus = $map['AlertStatus'];
        }
        if (isset($map['AlertType'])) {
            $model->alertType = $map['AlertType'];
        }
        if (isset($map['Annotations'])) {
            if (!empty($map['Annotations'])) {
                $model->annotations = [];
                $n                  = 0;
                foreach ($map['Annotations'] as $item) {
                    $model->annotations[$n++] = null !== $item ? annotations::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['AutoAddNewApplication'])) {
            $model->autoAddNewApplication = $map['AutoAddNewApplication'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['Extend'])) {
            $model->extend = $map['Extend'];
        }
        if (isset($map['Filters'])) {
            $model->filters = filters::fromMap($map['Filters']);
        }
        if (isset($map['Labels'])) {
            if (!empty($map['Labels'])) {
                $model->labels = [];
                $n             = 0;
                foreach ($map['Labels'] as $item) {
                    $model->labels[$n++] = null !== $item ? labels::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['MetricsType'])) {
            $model->metricsType = $map['MetricsType'];
        }
        if (isset($map['NotifyStrategy'])) {
            $model->notifyStrategy = $map['NotifyStrategy'];
        }
        if (isset($map['Pids'])) {
            if (!empty($map['Pids'])) {
                $model->pids = $map['Pids'];
            }
        }
        if (isset($map['PromQL'])) {
            $model->promQL = $map['PromQL'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['UpdatedTime'])) {
            $model->updatedTime = $map['UpdatedTime'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
