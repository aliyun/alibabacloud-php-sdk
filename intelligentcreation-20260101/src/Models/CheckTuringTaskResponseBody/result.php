<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20260101\Models\CheckTuringTaskResponseBody;

use AlibabaCloud\Dara\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $failCode;

    /**
     * @var string
     */
    public $failMsg;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $videoUrl;
    protected $_name = [
        'failCode' => 'failCode',
        'failMsg' => 'failMsg',
        'status' => 'status',
        'taskId' => 'taskId',
        'videoUrl' => 'videoUrl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->failCode) {
            $res['failCode'] = $this->failCode;
        }

        if (null !== $this->failMsg) {
            $res['failMsg'] = $this->failMsg;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->taskId) {
            $res['taskId'] = $this->taskId;
        }

        if (null !== $this->videoUrl) {
            $res['videoUrl'] = $this->videoUrl;
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
        if (isset($map['failCode'])) {
            $model->failCode = $map['failCode'];
        }

        if (isset($map['failMsg'])) {
            $model->failMsg = $map['failMsg'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['taskId'])) {
            $model->taskId = $map['taskId'];
        }

        if (isset($map['videoUrl'])) {
            $model->videoUrl = $map['videoUrl'];
        }

        return $model;
    }
}
