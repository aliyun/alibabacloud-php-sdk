<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models\ListRepoTriggerResponseBody;

use AlibabaCloud\Tea\Model;

class triggers extends Model
{
    /**
     * @var string
     */
    public $triggerName;

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
    public $triggerUrl;

    /**
     * @var string
     */
    public $triggerType;

    /**
     * @var string
     */
    public $triggerTag;
    protected $_name = [
        'triggerName' => 'TriggerName',
        'repoEvent'   => 'RepoEvent',
        'triggerId'   => 'TriggerId',
        'triggerUrl'  => 'TriggerUrl',
        'triggerType' => 'TriggerType',
        'triggerTag'  => 'TriggerTag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->triggerName) {
            $res['TriggerName'] = $this->triggerName;
        }
        if (null !== $this->repoEvent) {
            $res['RepoEvent'] = $this->repoEvent;
        }
        if (null !== $this->triggerId) {
            $res['TriggerId'] = $this->triggerId;
        }
        if (null !== $this->triggerUrl) {
            $res['TriggerUrl'] = $this->triggerUrl;
        }
        if (null !== $this->triggerType) {
            $res['TriggerType'] = $this->triggerType;
        }
        if (null !== $this->triggerTag) {
            $res['TriggerTag'] = $this->triggerTag;
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
        if (isset($map['TriggerName'])) {
            $model->triggerName = $map['TriggerName'];
        }
        if (isset($map['RepoEvent'])) {
            $model->repoEvent = $map['RepoEvent'];
        }
        if (isset($map['TriggerId'])) {
            $model->triggerId = $map['TriggerId'];
        }
        if (isset($map['TriggerUrl'])) {
            $model->triggerUrl = $map['TriggerUrl'];
        }
        if (isset($map['TriggerType'])) {
            $model->triggerType = $map['TriggerType'];
        }
        if (isset($map['TriggerTag'])) {
            $model->triggerTag = $map['TriggerTag'];
        }

        return $model;
    }
}
