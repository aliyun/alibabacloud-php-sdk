<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdc\V20201214\Models;

use AlibabaCloud\Tea\Model;

class DescribeQualityOverallDataRequest extends Model
{
    /**
     * @description APP ID
     *
     * @var string
     */
    public $appId;

    /**
     * @description 结束时间，秒级时间戳，如1609344000
     *
     * @var int
     */
    public $endDate;

    /**
     * @description 开始时间，秒级时间戳，如1609344000
     *
     * @var int
     */
    public $startDate;

    /**
     * @description 类型，以半角逗号分隔 加入频道成功率： JOIN_CHANNEL_SUC_RATE 五秒加入频道成功率： JOIN_CHANNEL_SUC_FIVE_SEC_RATE  首次出声时间： AUDIO_SPEAK_OUT_DUR 首次出图时间： VIDEO_FIRST_PIC_DUR 音频卡顿率： AUDIO_STUCK_RATE 视频卡顿率： VIDEO_STUCK_RATE 音频延时： AUDIO_DELAY 视频延时： AUDIO_DELAY 音频优质传输率： AUDIO_HIGH_QUALITY_TRANSMISSION_RATE 视频优质传输率： VIDEO_HIGH_QUALITY_TRANSMISSION_RATE
     *
     * @var string
     */
    public $types;
    protected $_name = [
        'appId'     => 'AppId',
        'endDate'   => 'EndDate',
        'startDate' => 'StartDate',
        'types'     => 'Types',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }
        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }
        if (null !== $this->types) {
            $res['Types'] = $this->types;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeQualityOverallDataRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }
        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }
        if (isset($map['Types'])) {
            $model->types = $map['Types'];
        }

        return $model;
    }
}
