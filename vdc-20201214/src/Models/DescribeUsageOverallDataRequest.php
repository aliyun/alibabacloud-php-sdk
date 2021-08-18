<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdc\V20201214\Models;

use AlibabaCloud\Tea\Model;

class DescribeUsageOverallDataRequest extends Model
{
    /**
     * @description 开始时间，秒级时间戳：1609344000
     *
     * @var int
     */
    public $startDate;

    /**
     * @description 结束时间，秒级时间戳：1609344000
     *
     * @var int
     */
    public $endDate;

    /**
     * @description 类型，半角逗号分隔    总时长：TOTAL_CALL_DURATION  视频通信时长：VIDEO_CALL_DURATION  音频通信时长：AUDIO_CALL_DURATION    通信频道数：CALL_CHANNEL_COUNT  高并发通信频道数：  HIGHLY_CONCURRENT_CHANNEL_COUNT  并发频道数峰值：  CHANNEL_CONCURRENT_PEAK    在线人数峰值：ONLINE_USER_PEAK  累计通话人数：  TOTAL_CALL_USER  累计进出人次：  TOTAL_INOUT_NUM
     *
     * @var string
     */
    public $types;

    /**
     * @description APP ID
     *
     * @var string
     */
    public $appId;
    protected $_name = [
        'startDate' => 'StartDate',
        'endDate'   => 'EndDate',
        'types'     => 'Types',
        'appId'     => 'AppId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }
        if (null !== $this->types) {
            $res['Types'] = $this->types;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeUsageOverallDataRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }
        if (isset($map['Types'])) {
            $model->types = $map['Types'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        return $model;
    }
}
