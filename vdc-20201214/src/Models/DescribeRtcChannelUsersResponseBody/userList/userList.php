<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeRtcChannelUsersResponseBody\userList;

use AlibabaCloud\Tea\Model;

class userList extends Model
{
    /**
     * @description 用户ID
     *
     * @var string
     */
    public $userId;

    /**
     * @description ChannelID
     *
     * @var string
     */
    public $channel;

    /**
     * @description 用户加入频道时间
     *
     * @var string
     */
    public $startTime;

    /**
     * @description 用户离开频道时间
     *
     * @var string
     */
    public $endTime;

    /**
     * @description 服务大区
     *
     * @var string
     */
    public $serviceArea;

    /**
     * @description 用户地理位置
     *
     * @var string
     */
    public $location;

    /**
     * @description 订阅音频时长(单位分钟)
     *
     * @var int
     */
    public $subAudio;

    /**
     * @description 发布音频时长(单位分钟)
     *
     * @var int
     */
    public $pubAudio;

    /**
     * @description 订阅时360视频长(单位分钟)
     *
     * @var int
     */
    public $subVideo360;

    /**
     * @description 发布360视频时长(单位分钟)
     *
     * @var int
     */
    public $pubVideo360;

    /**
     * @description 订阅720视频时长(单位分钟)
     *
     * @var int
     */
    public $subVideo720;

    /**
     * @description 发布720视频时长(单位分钟)
     *
     * @var int
     */
    public $pubVideo720;

    /**
     * @description 订阅1080视频时长(单位分钟)
     *
     * @var int
     */
    public $subVideo1080;

    /**
     * @description 发布1080视频时长(单位分钟)
     *
     * @var int
     */
    public $pubVideo1080;

    /**
     * @description 订阅屏幕共享时长(单位分钟)
     *
     * @var int
     */
    public $subContent;

    /**
     * @description 发布屏幕共享时长(单位分钟)
     *
     * @var int
     */
    public $pubContent;
    protected $_name = [
        'userId'       => 'UserId',
        'channel'      => 'Channel',
        'startTime'    => 'StartTime',
        'endTime'      => 'EndTime',
        'serviceArea'  => 'ServiceArea',
        'location'     => 'Location',
        'subAudio'     => 'SubAudio',
        'pubAudio'     => 'PubAudio',
        'subVideo360'  => 'SubVideo360',
        'pubVideo360'  => 'PubVideo360',
        'subVideo720'  => 'SubVideo720',
        'pubVideo720'  => 'PubVideo720',
        'subVideo1080' => 'SubVideo1080',
        'pubVideo1080' => 'PubVideo1080',
        'subContent'   => 'SubContent',
        'pubContent'   => 'PubContent',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->channel) {
            $res['Channel'] = $this->channel;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->serviceArea) {
            $res['ServiceArea'] = $this->serviceArea;
        }
        if (null !== $this->location) {
            $res['Location'] = $this->location;
        }
        if (null !== $this->subAudio) {
            $res['SubAudio'] = $this->subAudio;
        }
        if (null !== $this->pubAudio) {
            $res['PubAudio'] = $this->pubAudio;
        }
        if (null !== $this->subVideo360) {
            $res['SubVideo360'] = $this->subVideo360;
        }
        if (null !== $this->pubVideo360) {
            $res['PubVideo360'] = $this->pubVideo360;
        }
        if (null !== $this->subVideo720) {
            $res['SubVideo720'] = $this->subVideo720;
        }
        if (null !== $this->pubVideo720) {
            $res['PubVideo720'] = $this->pubVideo720;
        }
        if (null !== $this->subVideo1080) {
            $res['SubVideo1080'] = $this->subVideo1080;
        }
        if (null !== $this->pubVideo1080) {
            $res['PubVideo1080'] = $this->pubVideo1080;
        }
        if (null !== $this->subContent) {
            $res['SubContent'] = $this->subContent;
        }
        if (null !== $this->pubContent) {
            $res['PubContent'] = $this->pubContent;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return userList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['Channel'])) {
            $model->channel = $map['Channel'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['ServiceArea'])) {
            $model->serviceArea = $map['ServiceArea'];
        }
        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }
        if (isset($map['SubAudio'])) {
            $model->subAudio = $map['SubAudio'];
        }
        if (isset($map['PubAudio'])) {
            $model->pubAudio = $map['PubAudio'];
        }
        if (isset($map['SubVideo360'])) {
            $model->subVideo360 = $map['SubVideo360'];
        }
        if (isset($map['PubVideo360'])) {
            $model->pubVideo360 = $map['PubVideo360'];
        }
        if (isset($map['SubVideo720'])) {
            $model->subVideo720 = $map['SubVideo720'];
        }
        if (isset($map['PubVideo720'])) {
            $model->pubVideo720 = $map['PubVideo720'];
        }
        if (isset($map['SubVideo1080'])) {
            $model->subVideo1080 = $map['SubVideo1080'];
        }
        if (isset($map['PubVideo1080'])) {
            $model->pubVideo1080 = $map['PubVideo1080'];
        }
        if (isset($map['SubContent'])) {
            $model->subContent = $map['SubContent'];
        }
        if (isset($map['PubContent'])) {
            $model->pubContent = $map['PubContent'];
        }

        return $model;
    }
}
