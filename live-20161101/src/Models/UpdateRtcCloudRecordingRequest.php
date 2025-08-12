<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\UpdateRtcCloudRecordingRequest\mixLayoutParams;
use AlibabaCloud\SDK\Live\V20161101\Models\UpdateRtcCloudRecordingRequest\subscribeParams;

class UpdateRtcCloudRecordingRequest extends Model
{
    /**
     * @var mixLayoutParams
     */
    public $mixLayoutParams;

    /**
     * @var subscribeParams
     */
    public $subscribeParams;

    /**
     * @var string
     */
    public $taskId;
    protected $_name = [
        'mixLayoutParams' => 'MixLayoutParams',
        'subscribeParams' => 'SubscribeParams',
        'taskId' => 'TaskId',
    ];

    public function validate()
    {
        if (null !== $this->mixLayoutParams) {
            $this->mixLayoutParams->validate();
        }
        if (null !== $this->subscribeParams) {
            $this->subscribeParams->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mixLayoutParams) {
            $res['MixLayoutParams'] = null !== $this->mixLayoutParams ? $this->mixLayoutParams->toArray($noStream) : $this->mixLayoutParams;
        }

        if (null !== $this->subscribeParams) {
            $res['SubscribeParams'] = null !== $this->subscribeParams ? $this->subscribeParams->toArray($noStream) : $this->subscribeParams;
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
