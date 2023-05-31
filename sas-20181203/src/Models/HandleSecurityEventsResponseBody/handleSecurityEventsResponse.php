<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\HandleSecurityEventsResponseBody;

use AlibabaCloud\Tea\Model;

class handleSecurityEventsResponse extends Model
{
    /**
     * @description The ID of the task to handle the alert events.
     *
     * @example 15411
     *
     * @var int
     */
    public $taskId;
    protected $_name = [
        'taskId' => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return handleSecurityEventsResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
