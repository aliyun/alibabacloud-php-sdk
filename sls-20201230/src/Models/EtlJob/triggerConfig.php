<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models\EtlJob;

use AlibabaCloud\Tea\Model;

class triggerConfig extends Model
{
    /**
     * @description 最大重试次数
     *
     * @var int
     */
    public $maxRetryTime;

    /**
     * @description 角色授权配置
     *
     * @var string
     */
    public $roleArn;

    /**
     * @description 开始位置
     *
     * @var string
     */
    public $startingPosition;

    /**
     * @description 开始时间
     *
     * @var int
     */
    public $startingUnixtime;

    /**
     * @description 触发间隔
     *
     * @var int
     */
    public $triggerInterval;
    protected $_name = [
        'maxRetryTime'     => 'maxRetryTime',
        'roleArn'          => 'roleArn',
        'startingPosition' => 'startingPosition',
        'startingUnixtime' => 'startingUnixtime',
        'triggerInterval'  => 'triggerInterval',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxRetryTime) {
            $res['maxRetryTime'] = $this->maxRetryTime;
        }
        if (null !== $this->roleArn) {
            $res['roleArn'] = $this->roleArn;
        }
        if (null !== $this->startingPosition) {
            $res['startingPosition'] = $this->startingPosition;
        }
        if (null !== $this->startingUnixtime) {
            $res['startingUnixtime'] = $this->startingUnixtime;
        }
        if (null !== $this->triggerInterval) {
            $res['triggerInterval'] = $this->triggerInterval;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return triggerConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['maxRetryTime'])) {
            $model->maxRetryTime = $map['maxRetryTime'];
        }
        if (isset($map['roleArn'])) {
            $model->roleArn = $map['roleArn'];
        }
        if (isset($map['startingPosition'])) {
            $model->startingPosition = $map['startingPosition'];
        }
        if (isset($map['startingUnixtime'])) {
            $model->startingUnixtime = $map['startingUnixtime'];
        }
        if (isset($map['triggerInterval'])) {
            $model->triggerInterval = $map['triggerInterval'];
        }

        return $model;
    }
}
