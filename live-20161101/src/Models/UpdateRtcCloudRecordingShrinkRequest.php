<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Dara\Model;

class UpdateRtcCloudRecordingShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $mixLayoutParamsShrink;

    /**
     * @var string
     */
    public $subscribeParamsShrink;

    /**
     * @var string
     */
    public $taskId;
    protected $_name = [
        'mixLayoutParamsShrink' => 'MixLayoutParams',
        'subscribeParamsShrink' => 'SubscribeParams',
        'taskId' => 'TaskId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
