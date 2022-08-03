<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\Tea\Model;

class LiveChannelSnapshot extends Model
{
    /**
     * @var string
     */
    public $destBucket;

    /**
     * @var int
     */
    public $interval;

    /**
     * @var string
     */
    public $notifyTopic;

    /**
     * @var string
     */
    public $roleName;
    protected $_name = [
        'destBucket'  => 'DestBucket',
        'interval'    => 'Interval',
        'notifyTopic' => 'NotifyTopic',
        'roleName'    => 'RoleName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->destBucket) {
            $res['DestBucket'] = $this->destBucket;
        }
        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }
        if (null !== $this->notifyTopic) {
            $res['NotifyTopic'] = $this->notifyTopic;
        }
        if (null !== $this->roleName) {
            $res['RoleName'] = $this->roleName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return LiveChannelSnapshot
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DestBucket'])) {
            $model->destBucket = $map['DestBucket'];
        }
        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }
        if (isset($map['NotifyTopic'])) {
            $model->notifyTopic = $map['NotifyTopic'];
        }
        if (isset($map['RoleName'])) {
            $model->roleName = $map['RoleName'];
        }

        return $model;
    }
}
