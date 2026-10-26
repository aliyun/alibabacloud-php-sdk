<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sandbox\V20260820\Models;

use AlibabaCloud\Dara\Model;

class SandboxLifecycleEvent extends Model
{
    /**
     * @var string
     */
    public $action;

    /**
     * @var string
     */
    public $buildID;

    /**
     * @var string
     */
    public $description;

    /**
     * @var mixed[]
     */
    public $eventData;

    /**
     * @var string
     */
    public $eventID;

    /**
     * @var string
     */
    public $eventType;

    /**
     * @var string
     */
    public $level;

    /**
     * @var string
     */
    public $occurredAt;

    /**
     * @var string
     */
    public $reason;

    /**
     * @var string
     */
    public $sandboxID;

    /**
     * @var string
     */
    public $teamID;

    /**
     * @var string
     */
    public $templateID;
    protected $_name = [
        'action' => 'action',
        'buildID' => 'buildID',
        'description' => 'description',
        'eventData' => 'eventData',
        'eventID' => 'eventID',
        'eventType' => 'eventType',
        'level' => 'level',
        'occurredAt' => 'occurredAt',
        'reason' => 'reason',
        'sandboxID' => 'sandboxID',
        'teamID' => 'teamID',
        'templateID' => 'templateID',
    ];

    public function validate()
    {
        if (\is_array($this->eventData)) {
            Model::validateArray($this->eventData);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->action) {
            $res['action'] = $this->action;
        }

        if (null !== $this->buildID) {
            $res['buildID'] = $this->buildID;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->eventData) {
            if (\is_array($this->eventData)) {
                $res['eventData'] = [];
                foreach ($this->eventData as $key1 => $value1) {
                    $res['eventData'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->eventID) {
            $res['eventID'] = $this->eventID;
        }

        if (null !== $this->eventType) {
            $res['eventType'] = $this->eventType;
        }

        if (null !== $this->level) {
            $res['level'] = $this->level;
        }

        if (null !== $this->occurredAt) {
            $res['occurredAt'] = $this->occurredAt;
        }

        if (null !== $this->reason) {
            $res['reason'] = $this->reason;
        }

        if (null !== $this->sandboxID) {
            $res['sandboxID'] = $this->sandboxID;
        }

        if (null !== $this->teamID) {
            $res['teamID'] = $this->teamID;
        }

        if (null !== $this->templateID) {
            $res['templateID'] = $this->templateID;
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
        if (isset($map['action'])) {
            $model->action = $map['action'];
        }

        if (isset($map['buildID'])) {
            $model->buildID = $map['buildID'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['eventData'])) {
            if (!empty($map['eventData'])) {
                $model->eventData = [];
                foreach ($map['eventData'] as $key1 => $value1) {
                    $model->eventData[$key1] = $value1;
                }
            }
        }

        if (isset($map['eventID'])) {
            $model->eventID = $map['eventID'];
        }

        if (isset($map['eventType'])) {
            $model->eventType = $map['eventType'];
        }

        if (isset($map['level'])) {
            $model->level = $map['level'];
        }

        if (isset($map['occurredAt'])) {
            $model->occurredAt = $map['occurredAt'];
        }

        if (isset($map['reason'])) {
            $model->reason = $map['reason'];
        }

        if (isset($map['sandboxID'])) {
            $model->sandboxID = $map['sandboxID'];
        }

        if (isset($map['teamID'])) {
            $model->teamID = $map['teamID'];
        }

        if (isset($map['templateID'])) {
            $model->templateID = $map['templateID'];
        }

        return $model;
    }
}
