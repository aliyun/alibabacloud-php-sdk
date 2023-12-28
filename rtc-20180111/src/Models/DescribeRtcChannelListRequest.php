<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\Tea\Model;

class DescribeRtcChannelListRequest extends Model
{
    /**
     * @example aoe****
     *
     * @var string
     */
    public $appId;

    /**
     * @example testChannel
     *
     * @var string
     */
    public $channelId;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNo;

    /**
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example cn
     *
     * @var string
     */
    public $serviceArea;

    /**
     * @example desc
     *
     * @var string
     */
    public $sortType;

    /**
     * @example 2018-01-29T00:00:00Z
     *
     * @var string
     */
    public $timePoint;

    /**
     * @example testUser
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'appId'       => 'AppId',
        'channelId'   => 'ChannelId',
        'ownerId'     => 'OwnerId',
        'pageNo'      => 'PageNo',
        'pageSize'    => 'PageSize',
        'serviceArea' => 'ServiceArea',
        'sortType'    => 'SortType',
        'timePoint'   => 'TimePoint',
        'userId'      => 'UserId',
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
        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->serviceArea) {
            $res['ServiceArea'] = $this->serviceArea;
        }
        if (null !== $this->sortType) {
            $res['SortType'] = $this->sortType;
        }
        if (null !== $this->timePoint) {
            $res['TimePoint'] = $this->timePoint;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRtcChannelListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ServiceArea'])) {
            $model->serviceArea = $map['ServiceArea'];
        }
        if (isset($map['SortType'])) {
            $model->sortType = $map['SortType'];
        }
        if (isset($map['TimePoint'])) {
            $model->timePoint = $map['TimePoint'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
