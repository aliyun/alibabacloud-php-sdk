<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class DescribeVodEditingUsageDataRequest extends Model
{
    /**
     * @example app-****
     *
     * @var string
     */
    public $appId;

    /**
     * @example 2024-11-07T16:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @example cn-beijing
     *
     * @var string
     */
    public $region;

    /**
     * @example H264.SD
     *
     * @var string
     */
    public $specification;

    /**
     * @example 2024-11-06T16:00:00Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'appId' => 'AppId',
        'endTime' => 'EndTime',
        'ownerId' => 'OwnerId',
        'region' => 'Region',
        'specification' => 'Specification',
        'startTime' => 'StartTime',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->specification) {
            $res['Specification'] = $this->specification;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVodEditingUsageDataRequest
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
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['Specification'])) {
            $model->specification = $map['Specification'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
