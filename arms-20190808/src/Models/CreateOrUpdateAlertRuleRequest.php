<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class CreateOrUpdateAlertRuleRequest extends Model
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
     * @var int
     */
    public $alertId;

    /**
     * @var string
     */
    public $alertName;

    /**
     * @var string
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
     * @var string
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
    public $duration;

    /**
     * @var string
     */
    public $filters;

    /**
     * @var string
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
    public $metricsKey;

    /**
     * @var string
     */
    public $metricsType;

    /**
     * @var string
     */
    public $notifyStrategy;

    /**
     * @var string
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
        'duration'              => 'Duration',
        'filters'               => 'Filters',
        'labels'                => 'Labels',
        'level'                 => 'Level',
        'message'               => 'Message',
        'metricsKey'            => 'MetricsKey',
        'metricsType'           => 'MetricsType',
        'notifyStrategy'        => 'NotifyStrategy',
        'pids'                  => 'Pids',
        'promQL'                => 'PromQL',
        'regionId'              => 'RegionId',
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
            $res['AlertRuleContent'] = $this->alertRuleContent;
        }
        if (null !== $this->alertStatus) {
            $res['AlertStatus'] = $this->alertStatus;
        }
        if (null !== $this->alertType) {
            $res['AlertType'] = $this->alertType;
        }
        if (null !== $this->annotations) {
            $res['Annotations'] = $this->annotations;
        }
        if (null !== $this->autoAddNewApplication) {
            $res['AutoAddNewApplication'] = $this->autoAddNewApplication;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->filters) {
            $res['Filters'] = $this->filters;
        }
        if (null !== $this->labels) {
            $res['Labels'] = $this->labels;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->metricsKey) {
            $res['MetricsKey'] = $this->metricsKey;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateOrUpdateAlertRuleRequest
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
            $model->alertRuleContent = $map['AlertRuleContent'];
        }
        if (isset($map['AlertStatus'])) {
            $model->alertStatus = $map['AlertStatus'];
        }
        if (isset($map['AlertType'])) {
            $model->alertType = $map['AlertType'];
        }
        if (isset($map['Annotations'])) {
            $model->annotations = $map['Annotations'];
        }
        if (isset($map['AutoAddNewApplication'])) {
            $model->autoAddNewApplication = $map['AutoAddNewApplication'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['Filters'])) {
            $model->filters = $map['Filters'];
        }
        if (isset($map['Labels'])) {
            $model->labels = $map['Labels'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['MetricsKey'])) {
            $model->metricsKey = $map['MetricsKey'];
        }
        if (isset($map['MetricsType'])) {
            $model->metricsType = $map['MetricsType'];
        }
        if (isset($map['NotifyStrategy'])) {
            $model->notifyStrategy = $map['NotifyStrategy'];
        }
        if (isset($map['Pids'])) {
            $model->pids = $map['Pids'];
        }
        if (isset($map['PromQL'])) {
            $model->promQL = $map['PromQL'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
