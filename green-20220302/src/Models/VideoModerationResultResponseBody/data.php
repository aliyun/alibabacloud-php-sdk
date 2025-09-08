<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220302\Models\VideoModerationResultResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Green\V20220302\Models\VideoModerationResultResponseBody\data\audioResult;
use AlibabaCloud\SDK\Green\V20220302\Models\VideoModerationResultResponseBody\data\frameResult;

class data extends Model
{
    /**
     * @var audioResult
     */
    public $audioResult;

    /**
     * @var string
     */
    public $dataId;

    /**
     * @var frameResult
     */
    public $frameResult;

    /**
     * @var string
     */
    public $liveId;

    /**
     * @var string
     */
    public $manualTaskId;

    /**
     * @var string
     */
    public $riskLevel;

    /**
     * @var string
     */
    public $taskId;
    protected $_name = [
        'audioResult' => 'AudioResult',
        'dataId' => 'DataId',
        'frameResult' => 'FrameResult',
        'liveId' => 'LiveId',
        'manualTaskId' => 'ManualTaskId',
        'riskLevel' => 'RiskLevel',
        'taskId' => 'TaskId',
    ];

    public function validate()
    {
        if (null !== $this->audioResult) {
            $this->audioResult->validate();
        }
        if (null !== $this->frameResult) {
            $this->frameResult->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->audioResult) {
            $res['AudioResult'] = null !== $this->audioResult ? $this->audioResult->toArray($noStream) : $this->audioResult;
        }

        if (null !== $this->dataId) {
            $res['DataId'] = $this->dataId;
        }

        if (null !== $this->frameResult) {
            $res['FrameResult'] = null !== $this->frameResult ? $this->frameResult->toArray($noStream) : $this->frameResult;
        }

        if (null !== $this->liveId) {
            $res['LiveId'] = $this->liveId;
        }

        if (null !== $this->manualTaskId) {
            $res['ManualTaskId'] = $this->manualTaskId;
        }

        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
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
        if (isset($map['AudioResult'])) {
            $model->audioResult = audioResult::fromMap($map['AudioResult']);
        }

        if (isset($map['DataId'])) {
            $model->dataId = $map['DataId'];
        }

        if (isset($map['FrameResult'])) {
            $model->frameResult = frameResult::fromMap($map['FrameResult']);
        }

        if (isset($map['LiveId'])) {
            $model->liveId = $map['LiveId'];
        }

        if (isset($map['ManualTaskId'])) {
            $model->manualTaskId = $map['ManualTaskId'];
        }

        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
