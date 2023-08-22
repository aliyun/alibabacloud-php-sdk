<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\Tea\Model;

class UpdateRepoTriggerRequest extends Model
{
    /**
     * @description The ID of the instance.
     *
     * @example cri-kmsiwlxxdcva****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The ID of the image repository.
     *
     * @example crr-tquyps22md8p****
     *
     * @var string
     */
    public $repoId;

    /**
     * @description The ID of the trigger.
     *
     * @example crw-k7bdx4kt52ty****
     *
     * @var string
     */
    public $triggerId;

    /**
     * @description The name of the trigger.
     *
     * You can specify the TriggerName or TriggerUrl parameter. The TriggerName parameter is optional.
     * @example test_trigger
     *
     * @var string
     */
    public $triggerName;

    /**
     * @description The image tag based on which the trigger is set.
     *
     * @example master
     *
     * @var string
     */
    public $triggerTag;

    /**
     * @description The type of the trigger. Valid values:
     *
     *   `ALL`: a trigger that supports both tags and regular expressions.
     *   `TAG_LISTTAG`: a tag-based trigger.
     *   `TAG_REG_EXP`: a regular expression-based trigger.
     *
     * @example TAG_LIST
     *
     * @var string
     */
    public $triggerType;

    /**
     * @description The URL of the trigger.
     *
     * @example https://www.test.com
     *
     * @var string
     */
    public $triggerUrl;
    protected $_name = [
        'instanceId'  => 'InstanceId',
        'repoId'      => 'RepoId',
        'triggerId'   => 'TriggerId',
        'triggerName' => 'TriggerName',
        'triggerTag'  => 'TriggerTag',
        'triggerType' => 'TriggerType',
        'triggerUrl'  => 'TriggerUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return UpdateRepoTriggerRequest
     */
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
