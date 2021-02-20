<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRtcChannelUserListResponseBody\userList;

use AlibabaCloud\Tea\Model;

class userList extends Model
{
    /**
     * @var int
     */
    public $subVideo720;

    /**
     * @var int
     */
    public $subVideo1080;

    /**
     * @var int
     */
    public $subContent;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var int
     */
    public $pubVideo360;

    /**
     * @var int
     */
    public $subVideo360;

    /**
     * @var string
     */
    public $serviceArea;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var int
     */
    public $pubContent;

    /**
     * @var string
     */
    public $channelId;

    /**
     * @var int
     */
    public $pubVideo1080;

    /**
     * @var int
     */
    public $pubAudio;

    /**
     * @var int
     */
    public $pubVideo720;

    /**
     * @var int
     */
    public $subAudio;
    protected $_name = [
        'subVideo720'  => 'SubVideo720',
        'subVideo1080' => 'SubVideo1080',
        'subContent'   => 'SubContent',
        'userId'       => 'UserId',
        'pubVideo360'  => 'PubVideo360',
        'subVideo360'  => 'SubVideo360',
        'serviceArea'  => 'ServiceArea',
        'endTime'      => 'EndTime',
        'startTime'    => 'StartTime',
        'pubContent'   => 'PubContent',
        'channelId'    => 'ChannelId',
        'pubVideo1080' => 'PubVideo1080',
        'pubAudio'     => 'PubAudio',
        'pubVideo720'  => 'PubVideo720',
        'subAudio'     => 'SubAudio',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->subVideo720) {
            $res['SubVideo720'] = $this->subVideo720;
        }
        if (null !== $this->subVideo1080) {
            $res['SubVideo1080'] = $this->subVideo1080;
        }
        if (null !== $this->subContent) {
            $res['SubContent'] = $this->subContent;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->pubVideo360) {
            $res['PubVideo360'] = $this->pubVideo360;
        }
        if (null !== $this->subVideo360) {
            $res['SubVideo360'] = $this->subVideo360;
        }
        if (null !== $this->serviceArea) {
            $res['ServiceArea'] = $this->serviceArea;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->pubContent) {
            $res['PubContent'] = $this->pubContent;
        }
        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }
        if (null !== $this->pubVideo1080) {
            $res['PubVideo1080'] = $this->pubVideo1080;
        }
        if (null !== $this->pubAudio) {
            $res['PubAudio'] = $this->pubAudio;
        }
        if (null !== $this->pubVideo720) {
            $res['PubVideo720'] = $this->pubVideo720;
        }
        if (null !== $this->subAudio) {
            $res['SubAudio'] = $this->subAudio;
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
        if (isset($map['SubVideo720'])) {
            $model->subVideo720 = $map['SubVideo720'];
        }
        if (isset($map['SubVideo1080'])) {
            $model->subVideo1080 = $map['SubVideo1080'];
        }
        if (isset($map['SubContent'])) {
            $model->subContent = $map['SubContent'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['PubVideo360'])) {
            $model->pubVideo360 = $map['PubVideo360'];
        }
        if (isset($map['SubVideo360'])) {
            $model->subVideo360 = $map['SubVideo360'];
        }
        if (isset($map['ServiceArea'])) {
            $model->serviceArea = $map['ServiceArea'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['PubContent'])) {
            $model->pubContent = $map['PubContent'];
        }
        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }
        if (isset($map['PubVideo1080'])) {
            $model->pubVideo1080 = $map['PubVideo1080'];
        }
        if (isset($map['PubAudio'])) {
            $model->pubAudio = $map['PubAudio'];
        }
        if (isset($map['PubVideo720'])) {
            $model->pubVideo720 = $map['PubVideo720'];
        }
        if (isset($map['SubAudio'])) {
            $model->subAudio = $map['SubAudio'];
        }

        return $model;
    }
}
