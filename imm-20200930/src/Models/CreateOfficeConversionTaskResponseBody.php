<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class CreateOfficeConversionTaskResponseBody extends Model
{
    /**
     * @example 2C2-1I0EG57VR37J4rQ8oKG6C9*****
     *
     * @var string
     */
    public $eventId;

    /**
     * @example FF3B7D81-66AE-47E0-BF69-157DCF18*****
     *
     * @var string
     */
    public $requestId;

    /**
     * @example formatconvert-00bec802-073a-4b61-ba3b-39bc2fdd*****
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'eventId'   => 'EventId',
        'requestId' => 'RequestId',
        'taskId'    => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventId) {
            $res['EventId'] = $this->eventId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateOfficeConversionTaskResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EventId'])) {
            $model->eventId = $map['EventId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
