<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models\GetImageDetectionTaskResultResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\DianJin\V20240628\Models\GetImageDetectionTaskResultResponseBody\data\detectionResult;
use AlibabaCloud\SDK\DianJin\V20240628\Models\GetImageDetectionTaskResultResponseBody\data\fileInfo;

class data extends Model
{
    /**
     * @var string
     */
    public $detectionConclusion;

    /**
     * @var detectionResult
     */
    public $detectionResult;

    /**
     * @var fileInfo
     */
    public $fileInfo;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $taskStatus;
    protected $_name = [
        'detectionConclusion' => 'detectionConclusion',
        'detectionResult' => 'detectionResult',
        'fileInfo' => 'fileInfo',
        'taskId' => 'taskId',
        'taskStatus' => 'taskStatus',
    ];

    public function validate()
    {
        if (null !== $this->detectionResult) {
            $this->detectionResult->validate();
        }
        if (null !== $this->fileInfo) {
            $this->fileInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->detectionConclusion) {
            $res['detectionConclusion'] = $this->detectionConclusion;
        }

        if (null !== $this->detectionResult) {
            $res['detectionResult'] = null !== $this->detectionResult ? $this->detectionResult->toArray($noStream) : $this->detectionResult;
        }

        if (null !== $this->fileInfo) {
            $res['fileInfo'] = null !== $this->fileInfo ? $this->fileInfo->toArray($noStream) : $this->fileInfo;
        }

        if (null !== $this->taskId) {
            $res['taskId'] = $this->taskId;
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
        if (isset($map['detectionConclusion'])) {
            $model->detectionConclusion = $map['detectionConclusion'];
        }

        if (isset($map['detectionResult'])) {
            $model->detectionResult = detectionResult::fromMap($map['detectionResult']);
        }

        if (isset($map['fileInfo'])) {
            $model->fileInfo = fileInfo::fromMap($map['fileInfo']);
        }

        if (isset($map['taskId'])) {
            $model->taskId = $map['taskId'];
        }

        if (isset($map['taskStatus'])) {
            $model->taskStatus = $map['taskStatus'];
        }

        return $model;
    }
}
