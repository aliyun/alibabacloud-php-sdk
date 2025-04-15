<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\GetAiOutboundTaskProgressResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetAiOutboundTaskProgressResponseBody\data\calloutProgress;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetAiOutboundTaskProgressResponseBody\data\taskProgress;

class data extends Model
{
    /**
     * @var calloutProgress
     */
    public $calloutProgress;

    /**
     * @var int
     */
    public $taskId;

    /**
     * @var taskProgress
     */
    public $taskProgress;

    /**
     * @var int
     */
    public $type;
    protected $_name = [
        'calloutProgress' => 'CalloutProgress',
        'taskId' => 'TaskId',
        'taskProgress' => 'TaskProgress',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (null !== $this->calloutProgress) {
            $this->calloutProgress->validate();
        }
        if (null !== $this->taskProgress) {
            $this->taskProgress->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->calloutProgress) {
            $res['CalloutProgress'] = null !== $this->calloutProgress ? $this->calloutProgress->toArray($noStream) : $this->calloutProgress;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->taskProgress) {
            $res['TaskProgress'] = null !== $this->taskProgress ? $this->taskProgress->toArray($noStream) : $this->taskProgress;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['CalloutProgress'])) {
            $model->calloutProgress = calloutProgress::fromMap($map['CalloutProgress']);
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['TaskProgress'])) {
            $model->taskProgress = taskProgress::fromMap($map['TaskProgress']);
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
