<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\GetAiOutboundTaskProgressResponseBody;

use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetAiOutboundTaskProgressResponseBody\data\calloutProgress;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetAiOutboundTaskProgressResponseBody\data\taskProgress;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var calloutProgress
     */
    public $calloutProgress;

    /**
     * @example 123456
     *
     * @var int
     */
    public $taskId;

    /**
     * @var taskProgress
     */
    public $taskProgress;

    /**
     * @example 2
     *
     * @var int
     */
    public $type;
    protected $_name = [
        'calloutProgress' => 'CalloutProgress',
        'taskId'          => 'TaskId',
        'taskProgress'    => 'TaskProgress',
        'type'            => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->calloutProgress) {
            $res['CalloutProgress'] = null !== $this->calloutProgress ? $this->calloutProgress->toMap() : null;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->taskProgress) {
            $res['TaskProgress'] = null !== $this->taskProgress ? $this->taskProgress->toMap() : null;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
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
