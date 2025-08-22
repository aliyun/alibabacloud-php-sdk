<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateOrUpdateAlertRuleRequest\markTags;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateOrUpdateAlertRuleRequest\tags;

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
    public $alertPiplines;

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
    public $autoAddTargetConfig;

    /**
     * @var int
     */
    public $checkCycle;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $dataConfig;

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
     * @var markTags[]
     */
    public $markTags;

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
    public $notice;

    /**
     * @var string
     */
    public $notifyMode;

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
    public $product;

    /**
     * @var string
     */
    public $promQL;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'alertCheckType' => 'AlertCheckType',
        'alertGroup' => 'AlertGroup',
        'alertId' => 'AlertId',
        'alertName' => 'AlertName',
        'alertPiplines' => 'AlertPiplines',
        'alertRuleContent' => 'AlertRuleContent',
        'alertStatus' => 'AlertStatus',
        'alertType' => 'AlertType',
        'annotations' => 'Annotations',
        'autoAddNewApplication' => 'AutoAddNewApplication',
        'autoAddTargetConfig' => 'AutoAddTargetConfig',
        'checkCycle' => 'CheckCycle',
        'clusterId' => 'ClusterId',
        'dataConfig' => 'DataConfig',
        'duration' => 'Duration',
        'filters' => 'Filters',
        'labels' => 'Labels',
        'level' => 'Level',
        'markTags' => 'MarkTags',
        'message' => 'Message',
        'metricsKey' => 'MetricsKey',
        'metricsType' => 'MetricsType',
        'notice' => 'Notice',
        'notifyMode' => 'NotifyMode',
        'notifyStrategy' => 'NotifyStrategy',
        'pids' => 'Pids',
        'product' => 'Product',
        'promQL' => 'PromQL',
        'regionId' => 'RegionId',
        'tags' => 'Tags',
    ];

    public function validate()
    {
        if (\is_array($this->markTags)) {
            Model::validateArray($this->markTags);
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->alertPiplines) {
            $res['AlertPiplines'] = $this->alertPiplines;
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

        if (null !== $this->autoAddTargetConfig) {
            $res['AutoAddTargetConfig'] = $this->autoAddTargetConfig;
        }

        if (null !== $this->checkCycle) {
            $res['CheckCycle'] = $this->checkCycle;
        }

        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->dataConfig) {
            $res['DataConfig'] = $this->dataConfig;
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

        if (null !== $this->markTags) {
            if (\is_array($this->markTags)) {
                $res['MarkTags'] = [];
                $n1 = 0;
                foreach ($this->markTags as $item1) {
                    $res['MarkTags'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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

        if (null !== $this->notice) {
            $res['Notice'] = $this->notice;
        }

        if (null !== $this->notifyMode) {
            $res['NotifyMode'] = $this->notifyMode;
        }

        if (null !== $this->notifyStrategy) {
            $res['NotifyStrategy'] = $this->notifyStrategy;
        }

        if (null !== $this->pids) {
            $res['Pids'] = $this->pids;
        }

        if (null !== $this->product) {
            $res['Product'] = $this->product;
        }

        if (null !== $this->promQL) {
            $res['PromQL'] = $this->promQL;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        if (isset($map['AlertPiplines'])) {
            $model->alertPiplines = $map['AlertPiplines'];
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

        if (isset($map['AutoAddTargetConfig'])) {
            $model->autoAddTargetConfig = $map['AutoAddTargetConfig'];
        }

        if (isset($map['CheckCycle'])) {
            $model->checkCycle = $map['CheckCycle'];
        }

        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['DataConfig'])) {
            $model->dataConfig = $map['DataConfig'];
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

        if (isset($map['MarkTags'])) {
            if (!empty($map['MarkTags'])) {
                $model->markTags = [];
                $n1 = 0;
                foreach ($map['MarkTags'] as $item1) {
                    $model->markTags[$n1] = markTags::fromMap($item1);
                    ++$n1;
                }
            }
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

        if (isset($map['Notice'])) {
            $model->notice = $map['Notice'];
        }

        if (isset($map['NotifyMode'])) {
            $model->notifyMode = $map['NotifyMode'];
        }

        if (isset($map['NotifyStrategy'])) {
            $model->notifyStrategy = $map['NotifyStrategy'];
        }

        if (isset($map['Pids'])) {
            $model->pids = $map['Pids'];
        }

        if (isset($map['Product'])) {
            $model->product = $map['Product'];
        }

        if (isset($map['PromQL'])) {
            $model->promQL = $map['PromQL'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
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

        return $model;
    }
}
