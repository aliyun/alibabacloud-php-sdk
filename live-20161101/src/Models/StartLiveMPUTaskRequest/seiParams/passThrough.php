<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\StartLiveMPUTaskRequest\seiParams;

use AlibabaCloud\Dara\Model;

class passThrough extends Model
{
    /**
     * @var string
     */
    public $followIdr;

    /**
     * @var string
     */
    public $interval;

    /**
     * @var string
     */
    public $payloadContent;

    /**
     * @var string
     */
    public $payloadContentKey;
    protected $_name = [
        'followIdr' => 'FollowIdr',
        'interval' => 'Interval',
        'payloadContent' => 'PayloadContent',
        'payloadContentKey' => 'PayloadContentKey',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->followIdr) {
            $res['FollowIdr'] = $this->followIdr;
        }

        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }

        if (null !== $this->payloadContent) {
            $res['PayloadContent'] = $this->payloadContent;
        }

        if (null !== $this->payloadContentKey) {
            $res['PayloadContentKey'] = $this->payloadContentKey;
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
        if (isset($map['FollowIdr'])) {
            $model->followIdr = $map['FollowIdr'];
        }

        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }

        if (isset($map['PayloadContent'])) {
            $model->payloadContent = $map['PayloadContent'];
        }

        if (isset($map['PayloadContentKey'])) {
            $model->payloadContentKey = $map['PayloadContentKey'];
        }

        return $model;
    }
}
