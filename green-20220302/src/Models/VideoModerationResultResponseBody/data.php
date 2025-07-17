<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220302\Models\VideoModerationResultResponseBody;

use AlibabaCloud\SDK\Green\V20220302\Models\VideoModerationResultResponseBody\data\audioResult;
use AlibabaCloud\SDK\Green\V20220302\Models\VideoModerationResultResponseBody\data\frameResult;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The voice moderation results. The moderation results contain a structure.
     *
     * @var audioResult
     */
    public $audioResult;

    /**
     * @description The value of dataId that is specified in the API request. If this parameter is not specified in the API request, the dataId field is not available in the response.
     *
     * @example product_content-2055763
     *
     * @var string
     */
    public $dataId;

    /**
     * @description The image moderation results. If the call is successful, the HTTP status code 200 and moderation results are returned. The moderation results contain a structure.
     *
     * @var frameResult
     */
    public $frameResult;

    /**
     * @description The unique ID of the live stream.
     *
     * @example liveId
     *
     * @var string
     */
    public $liveId;

    /**
     * @var string
     */
    public $manualTaskId;

    /**
     * @description Risk Level.
     *
     * @example high
     *
     * @var string
     */
    public $riskLevel;

    /**
     * @description The task ID.
     *
     * @example xxxxx-xxxxx
     *
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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->audioResult) {
            $res['AudioResult'] = null !== $this->audioResult ? $this->audioResult->toMap() : null;
        }
        if (null !== $this->dataId) {
            $res['DataId'] = $this->dataId;
        }
        if (null !== $this->frameResult) {
            $res['FrameResult'] = null !== $this->frameResult ? $this->frameResult->toMap() : null;
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

    /**
     * @param array $map
     *
     * @return data
     */
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
