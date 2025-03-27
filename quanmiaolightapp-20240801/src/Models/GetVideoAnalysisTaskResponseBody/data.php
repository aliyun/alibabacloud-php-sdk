<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\GetVideoAnalysisTaskResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\GetVideoAnalysisTaskResponseBody\data\header;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\GetVideoAnalysisTaskResponseBody\data\payload;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\GetVideoAnalysisTaskResponseBody\data\taskRunInfo;

class data extends Model
{
    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var header
     */
    public $header;

    /**
     * @var payload
     */
    public $payload;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var taskRunInfo
     */
    public $taskRunInfo;

    /**
     * @var string
     */
    public $taskStatus;
    protected $_name = [
        'errorMessage' => 'errorMessage',
        'header' => 'header',
        'payload' => 'payload',
        'taskId' => 'taskId',
        'taskRunInfo' => 'taskRunInfo',
        'taskStatus' => 'taskStatus',
    ];

    public function validate()
    {
        if (null !== $this->header) {
            $this->header->validate();
        }
        if (null !== $this->payload) {
            $this->payload->validate();
        }
        if (null !== $this->taskRunInfo) {
            $this->taskRunInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->errorMessage) {
            $res['errorMessage'] = $this->errorMessage;
        }

        if (null !== $this->header) {
            $res['header'] = null !== $this->header ? $this->header->toArray($noStream) : $this->header;
        }

        if (null !== $this->payload) {
            $res['payload'] = null !== $this->payload ? $this->payload->toArray($noStream) : $this->payload;
        }

        if (null !== $this->taskId) {
            $res['taskId'] = $this->taskId;
        }

        if (null !== $this->taskRunInfo) {
            $res['taskRunInfo'] = null !== $this->taskRunInfo ? $this->taskRunInfo->toArray($noStream) : $this->taskRunInfo;
        }

        if (null !== $this->taskStatus) {
            $res['taskStatus'] = $this->taskStatus;
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
        if (isset($map['errorMessage'])) {
            $model->errorMessage = $map['errorMessage'];
        }

        if (isset($map['header'])) {
            $model->header = header::fromMap($map['header']);
        }

        if (isset($map['payload'])) {
            $model->payload = payload::fromMap($map['payload']);
        }

        if (isset($map['taskId'])) {
            $model->taskId = $map['taskId'];
        }

        if (isset($map['taskRunInfo'])) {
            $model->taskRunInfo = taskRunInfo::fromMap($map['taskRunInfo']);
        }

        if (isset($map['taskStatus'])) {
            $model->taskStatus = $map['taskStatus'];
        }

        return $model;
    }
}
