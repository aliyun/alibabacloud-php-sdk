<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CGCS\V20211111\Models\GetAppSessionResponseBody;

use AlibabaCloud\Tea\Model;

class bizInfo extends Model
{
    /**
     * @description 会话启动时间
     *
     * @example 2022-07-20 17:58:51
     *
     * @var string
     */
    public $startTime;

    /**
     * @description 会话停止时间
     *
     * @example 2022-07-20 17:58:57
     *
     * @var string
     */
    public $stopTime;
    protected $_name = [
        'startTime' => 'StartTime',
        'stopTime'  => 'StopTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->stopTime) {
            $res['StopTime'] = $this->stopTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return bizInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['StopTime'])) {
            $model->stopTime = $map['StopTime'];
        }

        return $model;
    }
}
