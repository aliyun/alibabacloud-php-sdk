<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\ListAlertHistoriesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20240330\Models\AlertRuleSend;

class data extends Model
{
    /**
     * @var string
     */
    public $alertHistoryId;

    /**
     * @var string
     */
    public $alertRuleId;

    /**
     * @var string[]
     */
    public $annotations;

    /**
     * @var string
     */
    public $bizSource;

    /**
     * @var int
     */
    public $count;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var int
     */
    public $gmtModified;

    /**
     * @var string[]
     */
    public $instanceDetail;

    /**
     * @var string
     */
    public $instanceKey;

    /**
     * @var string[]
     */
    public $labels;

    /**
     * @var string
     */
    public $latestLevel;

    /**
     * @var string
     */
    public $maxLevel;

    /**
     * @var string
     */
    public $message;

    /**
     * @var bool
     */
    public $observeResourceGlobalScope;

    /**
     * @var string
     */
    public $observeResourceList;

    /**
     * @var string
     */
    public $observeResourceType;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $ruleDisplayName;

    /**
     * @var AlertRuleSend
     */
    public $send;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $workspace;
    protected $_name = [
        'alertHistoryId' => 'alertHistoryId',
        'alertRuleId' => 'alertRuleId',
        'annotations' => 'annotations',
        'bizSource' => 'bizSource',
        'count' => 'count',
        'endTime' => 'endTime',
        'gmtCreate' => 'gmtCreate',
        'gmtModified' => 'gmtModified',
        'instanceDetail' => 'instanceDetail',
        'instanceKey' => 'instanceKey',
        'labels' => 'labels',
        'latestLevel' => 'latestLevel',
        'maxLevel' => 'maxLevel',
        'message' => 'message',
        'observeResourceGlobalScope' => 'observeResourceGlobalScope',
        'observeResourceList' => 'observeResourceList',
        'observeResourceType' => 'observeResourceType',
        'regionId' => 'regionId',
        'ruleDisplayName' => 'ruleDisplayName',
        'send' => 'send',
        'startTime' => 'startTime',
        'status' => 'status',
        'workspace' => 'workspace',
    ];

    public function validate()
    {
        if (\is_array($this->annotations)) {
            Model::validateArray($this->annotations);
        }
        if (\is_array($this->instanceDetail)) {
            Model::validateArray($this->instanceDetail);
        }
        if (\is_array($this->labels)) {
            Model::validateArray($this->labels);
        }
        if (null !== $this->send) {
            $this->send->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alertHistoryId) {
            $res['alertHistoryId'] = $this->alertHistoryId;
        }

        if (null !== $this->alertRuleId) {
            $res['alertRuleId'] = $this->alertRuleId;
        }

        if (null !== $this->annotations) {
            if (\is_array($this->annotations)) {
                $res['annotations'] = [];
                foreach ($this->annotations as $key1 => $value1) {
                    $res['annotations'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->bizSource) {
            $res['bizSource'] = $this->bizSource;
        }

        if (null !== $this->count) {
            $res['count'] = $this->count;
        }

        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }

        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['gmtModified'] = $this->gmtModified;
        }

        if (null !== $this->instanceDetail) {
            if (\is_array($this->instanceDetail)) {
                $res['instanceDetail'] = [];
                foreach ($this->instanceDetail as $key1 => $value1) {
                    $res['instanceDetail'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->instanceKey) {
            $res['instanceKey'] = $this->instanceKey;
        }

        if (null !== $this->labels) {
            if (\is_array($this->labels)) {
                $res['labels'] = [];
                foreach ($this->labels as $key1 => $value1) {
                    $res['labels'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->latestLevel) {
            $res['latestLevel'] = $this->latestLevel;
        }

        if (null !== $this->maxLevel) {
            $res['maxLevel'] = $this->maxLevel;
        }

        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        if (null !== $this->observeResourceGlobalScope) {
            $res['observeResourceGlobalScope'] = $this->observeResourceGlobalScope;
        }

        if (null !== $this->observeResourceList) {
            $res['observeResourceList'] = $this->observeResourceList;
        }

        if (null !== $this->observeResourceType) {
            $res['observeResourceType'] = $this->observeResourceType;
        }

        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }

        if (null !== $this->ruleDisplayName) {
            $res['ruleDisplayName'] = $this->ruleDisplayName;
        }

        if (null !== $this->send) {
            $res['send'] = null !== $this->send ? $this->send->toArray($noStream) : $this->send;
        }

        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->workspace) {
            $res['workspace'] = $this->workspace;
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
        if (isset($map['alertHistoryId'])) {
            $model->alertHistoryId = $map['alertHistoryId'];
        }

        if (isset($map['alertRuleId'])) {
            $model->alertRuleId = $map['alertRuleId'];
        }

        if (isset($map['annotations'])) {
            if (!empty($map['annotations'])) {
                $model->annotations = [];
                foreach ($map['annotations'] as $key1 => $value1) {
                    $model->annotations[$key1] = $value1;
                }
            }
        }

        if (isset($map['bizSource'])) {
            $model->bizSource = $map['bizSource'];
        }

        if (isset($map['count'])) {
            $model->count = $map['count'];
        }

        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }

        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }

        if (isset($map['gmtModified'])) {
            $model->gmtModified = $map['gmtModified'];
        }

        if (isset($map['instanceDetail'])) {
            if (!empty($map['instanceDetail'])) {
                $model->instanceDetail = [];
                foreach ($map['instanceDetail'] as $key1 => $value1) {
                    $model->instanceDetail[$key1] = $value1;
                }
            }
        }

        if (isset($map['instanceKey'])) {
            $model->instanceKey = $map['instanceKey'];
        }

        if (isset($map['labels'])) {
            if (!empty($map['labels'])) {
                $model->labels = [];
                foreach ($map['labels'] as $key1 => $value1) {
                    $model->labels[$key1] = $value1;
                }
            }
        }

        if (isset($map['latestLevel'])) {
            $model->latestLevel = $map['latestLevel'];
        }

        if (isset($map['maxLevel'])) {
            $model->maxLevel = $map['maxLevel'];
        }

        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        if (isset($map['observeResourceGlobalScope'])) {
            $model->observeResourceGlobalScope = $map['observeResourceGlobalScope'];
        }

        if (isset($map['observeResourceList'])) {
            $model->observeResourceList = $map['observeResourceList'];
        }

        if (isset($map['observeResourceType'])) {
            $model->observeResourceType = $map['observeResourceType'];
        }

        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }

        if (isset($map['ruleDisplayName'])) {
            $model->ruleDisplayName = $map['ruleDisplayName'];
        }

        if (isset($map['send'])) {
            $model->send = AlertRuleSend::fromMap($map['send']);
        }

        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['workspace'])) {
            $model->workspace = $map['workspace'];
        }

        return $model;
    }
}
