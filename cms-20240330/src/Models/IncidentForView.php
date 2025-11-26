<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class IncidentForView extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var IncidentEscalationPolicyForView[]
     */
    public $escalations;

    /**
     * @var string
     */
    public $groupUuid;

    /**
     * @var string[]
     */
    public $groupingKeys;

    /**
     * @var string
     */
    public $incidentId;

    /**
     * @var string
     */
    public $notifyStrategyName;

    /**
     * @var string
     */
    public $notifyStrategyUuid;

    /**
     * @var ContactForIncidentView
     */
    public $operator;

    /**
     * @var ContactForIncidentView[]
     */
    public $owners;

    /**
     * @var ContactForIncidentView[]
     */
    public $participants;

    /**
     * @var IncidentResponsePlanForView
     */
    public $plan;

    /**
     * @var EventResourceForIncidentView[]
     */
    public $relatedResources;

    /**
     * @var string
     */
    public $rootCauseCategory;

    /**
     * @var string
     */
    public $severity;

    /**
     * @var string
     */
    public $solution;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $subscriptionName;

    /**
     * @var string
     */
    public $subscriptionUuid;

    /**
     * @var int
     */
    public $time;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $workspace;
    protected $_name = [
        'content' => 'content',
        'escalations' => 'escalations',
        'groupUuid' => 'groupUuid',
        'groupingKeys' => 'groupingKeys',
        'incidentId' => 'incidentId',
        'notifyStrategyName' => 'notifyStrategyName',
        'notifyStrategyUuid' => 'notifyStrategyUuid',
        'operator' => 'operator',
        'owners' => 'owners',
        'participants' => 'participants',
        'plan' => 'plan',
        'relatedResources' => 'relatedResources',
        'rootCauseCategory' => 'rootCauseCategory',
        'severity' => 'severity',
        'solution' => 'solution',
        'state' => 'state',
        'subscriptionName' => 'subscriptionName',
        'subscriptionUuid' => 'subscriptionUuid',
        'time' => 'time',
        'title' => 'title',
        'userId' => 'userId',
        'workspace' => 'workspace',
    ];

    public function validate()
    {
        if (\is_array($this->escalations)) {
            Model::validateArray($this->escalations);
        }
        if (\is_array($this->groupingKeys)) {
            Model::validateArray($this->groupingKeys);
        }
        if (null !== $this->operator) {
            $this->operator->validate();
        }
        if (\is_array($this->owners)) {
            Model::validateArray($this->owners);
        }
        if (\is_array($this->participants)) {
            Model::validateArray($this->participants);
        }
        if (null !== $this->plan) {
            $this->plan->validate();
        }
        if (\is_array($this->relatedResources)) {
            Model::validateArray($this->relatedResources);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->content) {
            $res['content'] = $this->content;
        }

        if (null !== $this->escalations) {
            if (\is_array($this->escalations)) {
                $res['escalations'] = [];
                $n1 = 0;
                foreach ($this->escalations as $item1) {
                    $res['escalations'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->groupUuid) {
            $res['groupUuid'] = $this->groupUuid;
        }

        if (null !== $this->groupingKeys) {
            if (\is_array($this->groupingKeys)) {
                $res['groupingKeys'] = [];
                foreach ($this->groupingKeys as $key1 => $value1) {
                    $res['groupingKeys'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->incidentId) {
            $res['incidentId'] = $this->incidentId;
        }

        if (null !== $this->notifyStrategyName) {
            $res['notifyStrategyName'] = $this->notifyStrategyName;
        }

        if (null !== $this->notifyStrategyUuid) {
            $res['notifyStrategyUuid'] = $this->notifyStrategyUuid;
        }

        if (null !== $this->operator) {
            $res['operator'] = null !== $this->operator ? $this->operator->toArray($noStream) : $this->operator;
        }

        if (null !== $this->owners) {
            if (\is_array($this->owners)) {
                $res['owners'] = [];
                $n1 = 0;
                foreach ($this->owners as $item1) {
                    $res['owners'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->participants) {
            if (\is_array($this->participants)) {
                $res['participants'] = [];
                $n1 = 0;
                foreach ($this->participants as $item1) {
                    $res['participants'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->plan) {
            $res['plan'] = null !== $this->plan ? $this->plan->toArray($noStream) : $this->plan;
        }

        if (null !== $this->relatedResources) {
            if (\is_array($this->relatedResources)) {
                $res['relatedResources'] = [];
                $n1 = 0;
                foreach ($this->relatedResources as $item1) {
                    $res['relatedResources'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->rootCauseCategory) {
            $res['rootCauseCategory'] = $this->rootCauseCategory;
        }

        if (null !== $this->severity) {
            $res['severity'] = $this->severity;
        }

        if (null !== $this->solution) {
            $res['solution'] = $this->solution;
        }

        if (null !== $this->state) {
            $res['state'] = $this->state;
        }

        if (null !== $this->subscriptionName) {
            $res['subscriptionName'] = $this->subscriptionName;
        }

        if (null !== $this->subscriptionUuid) {
            $res['subscriptionUuid'] = $this->subscriptionUuid;
        }

        if (null !== $this->time) {
            $res['time'] = $this->time;
        }

        if (null !== $this->title) {
            $res['title'] = $this->title;
        }

        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
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
        if (isset($map['content'])) {
            $model->content = $map['content'];
        }

        if (isset($map['escalations'])) {
            if (!empty($map['escalations'])) {
                $model->escalations = [];
                $n1 = 0;
                foreach ($map['escalations'] as $item1) {
                    $model->escalations[$n1] = IncidentEscalationPolicyForView::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['groupUuid'])) {
            $model->groupUuid = $map['groupUuid'];
        }

        if (isset($map['groupingKeys'])) {
            if (!empty($map['groupingKeys'])) {
                $model->groupingKeys = [];
                foreach ($map['groupingKeys'] as $key1 => $value1) {
                    $model->groupingKeys[$key1] = $value1;
                }
            }
        }

        if (isset($map['incidentId'])) {
            $model->incidentId = $map['incidentId'];
        }

        if (isset($map['notifyStrategyName'])) {
            $model->notifyStrategyName = $map['notifyStrategyName'];
        }

        if (isset($map['notifyStrategyUuid'])) {
            $model->notifyStrategyUuid = $map['notifyStrategyUuid'];
        }

        if (isset($map['operator'])) {
            $model->operator = ContactForIncidentView::fromMap($map['operator']);
        }

        if (isset($map['owners'])) {
            if (!empty($map['owners'])) {
                $model->owners = [];
                $n1 = 0;
                foreach ($map['owners'] as $item1) {
                    $model->owners[$n1] = ContactForIncidentView::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['participants'])) {
            if (!empty($map['participants'])) {
                $model->participants = [];
                $n1 = 0;
                foreach ($map['participants'] as $item1) {
                    $model->participants[$n1] = ContactForIncidentView::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['plan'])) {
            $model->plan = IncidentResponsePlanForView::fromMap($map['plan']);
        }

        if (isset($map['relatedResources'])) {
            if (!empty($map['relatedResources'])) {
                $model->relatedResources = [];
                $n1 = 0;
                foreach ($map['relatedResources'] as $item1) {
                    $model->relatedResources[$n1] = EventResourceForIncidentView::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['rootCauseCategory'])) {
            $model->rootCauseCategory = $map['rootCauseCategory'];
        }

        if (isset($map['severity'])) {
            $model->severity = $map['severity'];
        }

        if (isset($map['solution'])) {
            $model->solution = $map['solution'];
        }

        if (isset($map['state'])) {
            $model->state = $map['state'];
        }

        if (isset($map['subscriptionName'])) {
            $model->subscriptionName = $map['subscriptionName'];
        }

        if (isset($map['subscriptionUuid'])) {
            $model->subscriptionUuid = $map['subscriptionUuid'];
        }

        if (isset($map['time'])) {
            $model->time = $map['time'];
        }

        if (isset($map['title'])) {
            $model->title = $map['title'];
        }

        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }

        if (isset($map['workspace'])) {
            $model->workspace = $map['workspace'];
        }

        return $model;
    }
}
