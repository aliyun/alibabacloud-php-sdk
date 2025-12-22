<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models\CreateVideoCreationTaskResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $estimatedWaitTimeInSeconds;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $taskId;
    protected $_name = [
        'estimatedWaitTimeInSeconds' => 'estimatedWaitTimeInSeconds',
        'requestId' => 'requestId',
        'taskId' => 'taskId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->estimatedWaitTimeInSeconds) {
            $res['estimatedWaitTimeInSeconds'] = $this->estimatedWaitTimeInSeconds;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->taskId) {
            $res['taskId'] = $this->taskId;
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
        if (isset($map['estimatedWaitTimeInSeconds'])) {
            $model->estimatedWaitTimeInSeconds = $map['estimatedWaitTimeInSeconds'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['taskId'])) {
            $model->taskId = $map['taskId'];
        }

        return $model;
    }
}
