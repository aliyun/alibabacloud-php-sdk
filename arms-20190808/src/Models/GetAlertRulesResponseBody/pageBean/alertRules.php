<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\GetAlertRulesResponseBody\pageBean;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetAlertRulesResponseBody\pageBean\alertRules\alertRuleContent;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetAlertRulesResponseBody\pageBean\alertRules\annotations;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetAlertRulesResponseBody\pageBean\alertRules\filters;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetAlertRulesResponseBody\pageBean\alertRules\labels;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetAlertRulesResponseBody\pageBean\alertRules\tags;

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
     * @var int
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
     * @var tags[]
     */
    public $tags;
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
        'tags'                  => 'Tags',
        'updatedTime'           => 'UpdatedTime',
        'userId'                => 'UserId',
    ];

    public function validate()
    {
        if (null !== $this->alertRuleContent) {
            $this->alertRuleContent->validate();
        }
        if (\is_array($this->annotations)) {
            Model::validateArray($this->annotations);
        }
        if (null !== $this->filters) {
            $this->filters->validate();
        }
        if (\is_array($this->labels)) {
            Model::validateArray($this->labels);
        }
        if (\is_array($this->pids)) {
            Model::validateArray($this->pids);
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

        if (null !== $this->alertRuleContent) {
            $res['AlertRuleContent'] = null !== $this->alertRuleContent ? $this->alertRuleContent->toArray($noStream) : $this->alertRuleContent;
        }

        if (null !== $this->alertStatus) {
            $res['AlertStatus'] = $this->alertStatus;
        }

        if (null !== $this->alertType) {
            $res['AlertType'] = $this->alertType;
        }

        if (null !== $this->annotations) {
            if (\is_array($this->annotations)) {
                $res['Annotations'] = [];
                $n1                 = 0;
                foreach ($this->annotations as $item1) {
                    $res['Annotations'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            $res['Filters'] = null !== $this->filters ? $this->filters->toArray($noStream) : $this->filters;
        }

        if (null !== $this->labels) {
            if (\is_array($this->labels)) {
                $res['Labels'] = [];
                $n1            = 0;
                foreach ($this->labels as $item1) {
                    $res['Labels'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            if (\is_array($this->pids)) {
                $res['Pids'] = [];
                $n1          = 0;
                foreach ($this->pids as $item1) {
                    $res['Pids'][$n1++] = $item1;
                }
            }
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
                $n1          = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->updatedTime) {
            $res['UpdatedTime'] = $this->updatedTime;
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
                $n1                 = 0;
                foreach ($map['Annotations'] as $item1) {
                    $model->annotations[$n1++] = annotations::fromMap($item1);
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
                $n1            = 0;
                foreach ($map['Labels'] as $item1) {
                    $model->labels[$n1++] = labels::fromMap($item1);
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
                $model->pids = [];
                $n1          = 0;
                foreach ($map['Pids'] as $item1) {
                    $model->pids[$n1++] = $item1;
                }
            }
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
                $n1          = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1++] = tags::fromMap($item1);
                }
            }
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
