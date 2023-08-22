<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models\ListRepoTriggerResponseBody;

use AlibabaCloud\Tea\Model;

class triggers extends Model
{
    /**
     * @description The type of the event that activates the trigger. Valid values:
     *
     *   `BUILD_SUCCESS`: The trigger is activated when an image building task is successful.
     *   `BUILD_Fail`: The trigger is activated when an image building task fails.
     *
     * @example BUILD_SUCCESS
     *
     * @var string
     */
    public $repoEvent;

    /**
     * @description The ID of the trigger.
     *
     * @example crw-vriyql9eq7ep****
     *
     * @var string
     */
    public $triggerId;

    /**
     * @description The name of the trigger.
     *
     * @example test
     *
     * @var string
     */
    public $triggerName;

    /**
     * @description The image tag based on which the trigger is set.
     *
     * @example *
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
     * @example ALL
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
        'repoEvent'   => 'RepoEvent',
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
        if (null !== $this->repoEvent) {
            $res['RepoEvent'] = $this->repoEvent;
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
     * @return triggers
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RepoEvent'])) {
            $model->repoEvent = $map['RepoEvent'];
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
