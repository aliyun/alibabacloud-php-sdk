<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models\ScalingGroupConfig;

use AlibabaCloud\Tea\Model;

class nodeOfflinePolicy extends Model
{
    /**
     * @description 下线模式,是否为优雅下线。
     *
     * @example DEFAULT
     *
     * @var string
     */
    public $mode;

    /**
     * @description 下线超时时间,单位毫秒。
     *
     * @example 1000
     *
     * @var int
     */
    public $timeoutMs;
    protected $_name = [
        'mode'      => 'Mode',
        'timeoutMs' => 'TimeoutMs',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }
        if (null !== $this->timeoutMs) {
            $res['TimeoutMs'] = $this->timeoutMs;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return nodeOfflinePolicy
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }
        if (isset($map['TimeoutMs'])) {
            $model->timeoutMs = $map['TimeoutMs'];
        }

        return $model;
    }
}
