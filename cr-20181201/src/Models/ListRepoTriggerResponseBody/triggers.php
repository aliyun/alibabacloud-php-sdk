<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models\ListRepoTriggerResponseBody;

use AlibabaCloud\Tea\Model;

class triggers extends Model
{
    /**
     * @var string
     */
    public $repoEvent;

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
