<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;

class UpdateKBSyncLinkResponseBody extends Model
{
    /**
     * @var string
     */
    public $linkId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $selectionMode;

    /**
     * @var string
     */
    public $selectionRules;

    /**
     * @var string
     */
    public $syncSchedule;

    /**
     * @var int
     */
    public $taskId;
    protected $_name = [
        'linkId' => 'LinkId',
        'requestId' => 'RequestId',
        'selectionMode' => 'SelectionMode',
        'selectionRules' => 'SelectionRules',
        'syncSchedule' => 'SyncSchedule',
        'taskId' => 'TaskId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->linkId) {
            $res['LinkId'] = $this->linkId;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->selectionMode) {
            $res['SelectionMode'] = $this->selectionMode;
        }

        if (null !== $this->selectionRules) {
            $res['SelectionRules'] = $this->selectionRules;
        }

        if (null !== $this->syncSchedule) {
            $res['SyncSchedule'] = $this->syncSchedule;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
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
        if (isset($map['LinkId'])) {
            $model->linkId = $map['LinkId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SelectionMode'])) {
            $model->selectionMode = $map['SelectionMode'];
        }

        if (isset($map['SelectionRules'])) {
            $model->selectionRules = $map['SelectionRules'];
        }

        if (isset($map['SyncSchedule'])) {
            $model->syncSchedule = $map['SyncSchedule'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
