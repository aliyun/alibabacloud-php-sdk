<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\Tea\Model;

class CreateRepoTriggerRequest extends Model
{
    /**
     * @description The ID of the instance.
     *
     * @example cri-xkx6vujuhay0****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The ID of the image repository.
     *
     * @example crr-xwvi3osiy4ff****
     *
     * @var string
     */
    public $repoId;

    /**
     * @description The name of the trigger.
     *
     * @example trigger1
     *
     * @var string
     */
    public $triggerName;

    /**
     * @description The image tag based on which the trigger is set.
     *
     * >
     *
     *   If `TriggerType` is set to `ALL`, `TriggerTag` can be set to a string or an array, for example, `*`.
     *
     *   If `TriggerType` is set to `TAG_LIST`, `TriggerTag` must be set to an array, for example, `[1]`.
     *   If `TriggerType` is set to `TAG_REG_EXP`, `TriggerTag` must be set to a string, for example, `*`.
     *
     * @example [1]
     *
     * @var string
     */
    public $triggerTag;

    /**
     * @description The type of the trigger. Valid values:
     *
     *   `ALL`: a trigger that supports both tags and regular expressions.
     *   `TAG_LIST`: a tag-based trigger.
     *   `TAG_REG_EXP`: a regular expression-based trigger.
     *
     * @example ALL
     *
     * @var string
     */
    public $triggerType;

    /**
     * @description The URL of the trigger.
     *
     * @example http://www.mysite.com
     *
     * @var string
     */
    public $triggerUrl;
    protected $_name = [
        'instanceId'  => 'InstanceId',
        'repoId'      => 'RepoId',
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
     * @return CreateRepoTriggerRequest
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
