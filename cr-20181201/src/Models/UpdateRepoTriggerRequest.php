<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\Dara\Model;

class UpdateRepoTriggerRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $repoId;

    /**
     * @var string
     */
    public $triggerId;

    /**
     * @var string
     */
    public $triggerName;

    /**
     * @var string
     */
    public $triggerTag;

    /**
     * @var string
     */
    public $triggerType;

    /**
     * @var string
     */
    public $triggerUrl;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'repoId' => 'RepoId',
        'triggerId' => 'TriggerId',
        'triggerName' => 'TriggerName',
        'triggerTag' => 'TriggerTag',
        'triggerType' => 'TriggerType',
        'triggerUrl' => 'TriggerUrl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->repoId) {
            $res['RepoId'] = $this->repoId;
        }

        if (null !== $this->triggerId) {
            $res['TriggerId'] = $this->triggerId;
        }

        if (null !== $this->triggerName) {
            $res['TriggerName'] = $this->triggerName;
        }

        if (null !== $this->triggerTag) {
            $res['TriggerTag'] = $this->triggerTag;
        }

        if (null !== $this->triggerType) {
            $res['TriggerType'] = $this->triggerType;
        }

        if (null !== $this->triggerUrl) {
            $res['TriggerUrl'] = $this->triggerUrl;
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['RepoId'])) {
            $model->repoId = $map['RepoId'];
        }

        if (isset($map['TriggerId'])) {
            $model->triggerId = $map['TriggerId'];
        }

        if (isset($map['TriggerName'])) {
            $model->triggerName = $map['TriggerName'];
        }

        if (isset($map['TriggerTag'])) {
            $model->triggerTag = $map['TriggerTag'];
        }

        if (isset($map['TriggerType'])) {
            $model->triggerType = $map['TriggerType'];
        }

        if (isset($map['TriggerUrl'])) {
            $model->triggerUrl = $map['TriggerUrl'];
        }

        return $model;
    }
}
