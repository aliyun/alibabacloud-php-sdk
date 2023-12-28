<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\Tea\Model;

class DescribeRtcUserCntDataRequest extends Model
{
    /**
     * @example yourAppId
     *
     * @var string
     */
    public $appId;

    /**
     * @example 2018-01-29T01:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @example 3600
     *
     * @var string
     */
    public $interval;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @example CN
     *
     * @var string
     */
    public $serviceArea;

    /**
     * @example 2018-01-29T00:00:00Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'appId'       => 'AppId',
        'endTime'     => 'EndTime',
        'interval'    => 'Interval',
        'ownerId'     => 'OwnerId',
        'serviceArea' => 'ServiceArea',
        'startTime'   => 'StartTime',
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
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->serviceArea) {
            $res['ServiceArea'] = $this->serviceArea;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRtcUserCntDataRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ServiceArea'])) {
            $model->serviceArea = $map['ServiceArea'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
