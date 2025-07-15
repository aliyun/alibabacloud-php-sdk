<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\UpdateRtcCloudRecordingRequest\mixLayoutParams;
use AlibabaCloud\SDK\Live\V20161101\Models\UpdateRtcCloudRecordingRequest\subscribeParams;
use AlibabaCloud\Tea\Model;

class UpdateRtcCloudRecordingRequest extends Model
{
    /**
     * @var mixLayoutParams
     */
    public $mixLayoutParams;

    /**
     * @description This parameter is required.
     *
     * @var subscribeParams
     */
    public $subscribeParams;

    /**
     * @description This parameter is required.
     *
     * @example ******73-8501-****-8ac1-72295a******
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'mixLayoutParams' => 'MixLayoutParams',
        'subscribeParams' => 'SubscribeParams',
        'taskId' => 'TaskId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->mixLayoutParams) {
            $res['MixLayoutParams'] = null !== $this->mixLayoutParams ? $this->mixLayoutParams->toMap() : null;
        }
        if (null !== $this->subscribeParams) {
            $res['SubscribeParams'] = null !== $this->subscribeParams ? $this->subscribeParams->toMap() : null;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateRtcCloudRecordingRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MixLayoutParams'])) {
            $model->mixLayoutParams = mixLayoutParams::fromMap($map['MixLayoutParams']);
        }
        if (isset($map['SubscribeParams'])) {
            $model->subscribeParams = subscribeParams::fromMap($map['SubscribeParams']);
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
