<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class UpdateRtcCloudRecordingShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $mixLayoutParamsShrink;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $subscribeParamsShrink;

    /**
     * @description This parameter is required.
     *
     * @example ******73-8501-****-8ac1-72295a******
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'mixLayoutParamsShrink' => 'MixLayoutParams',
        'subscribeParamsShrink' => 'SubscribeParams',
        'taskId' => 'TaskId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->mixLayoutParamsShrink) {
            $res['MixLayoutParams'] = $this->mixLayoutParamsShrink;
        }
        if (null !== $this->subscribeParamsShrink) {
            $res['SubscribeParams'] = $this->subscribeParamsShrink;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateRtcCloudRecordingShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MixLayoutParams'])) {
            $model->mixLayoutParamsShrink = $map['MixLayoutParams'];
        }
        if (isset($map['SubscribeParams'])) {
            $model->subscribeParamsShrink = $map['SubscribeParams'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
