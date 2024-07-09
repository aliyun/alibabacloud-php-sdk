<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class DescribeUserConnectionRecordsRequest extends Model
{
    /**
     * @description The duration when the cloud desktop is connected, which is the minimum value for condition filtering.
     *
     * @example 100
     *
     * @var int
     */
    public $connectDurationFrom;

    /**
     * @description The duration when the cloud desktop is connected, which is the maximum value for condition filtering.
     *
     * @example 100
     *
     * @var int
     */
    public $connectDurationTo;

    /**
     * @description The time when the cloud desktop stops to be connected, which is the minimum value for condition filtering. The value is a UNIX timestamp. Unit: milliseconds.
     *
     * @example 1631266200000
     *
     * @var int
     */
    public $connectEndTimeFrom;

    /**
     * @description The time when the cloud desktop stops to be connected, which is the maximum value for condition filtering. The value is a UNIX timestamp. Unit: milliseconds.
     *
     * @example 1631268000000
     *
     * @var int
     */
    public $connectEndTimeTo;

    /**
     * @description The time when the cloud desktop starts to be connected, which is the minimum value for condition filtering. The value is a UNIX timestamp. Unit: milliseconds.
     *
     * @example 1631239200000
     *
     * @var int
     */
    public $connectStartTimeFrom;

    /**
     * @description The time when the cloud desktop starts to be connected, which is the maximum value for condition filtering. The value is a UNIX timestamp. Unit: milliseconds.
     *
     * @example 1631241000000
     *
     * @var int
     */
    public $connectStartTimeTo;

    /**
     * @description The ID of the cloud computer pool.
     *
     * This parameter is required.
     * @example dg-2i8qxpv6t1a03****
     *
     * @var string
     */
    public $desktopGroupId;

    /**
     * @description The ID of the cloud computer.
     *
     * @example ecd-138dsptkrt00u****
     *
     * @var string
     */
    public $desktopId;

    /**
     * @description The ID of the authorized user.
     *
     * This parameter is required.
     * @example alice
     *
     * @var string
     */
    public $endUserId;

    /**
     * @description The type of the user account.
     *
     * Valid values:
     *
     *   SIMPLE: convenience account
     *
     * <!-- -->
     *
     *   AD_CONNECTOR: enterprise AD account
     *
     * <!-- -->
     * @example SIMPLE
     *
     * @var string
     */
    public $endUserType;

    /**
     * @description The number of entries to return on each page. Maximum value: 100. Default value: 10.
     *
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The token that determines the start point of the next query. If this parameter is empty, all results are returned.
     *
     * @example caeba0bbb2be03f84eb48b699f0a4883
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The region ID. You can call the [DescribeRegions](https://help.aliyun.com/document_detail/196646.html) operation to query the most recent region list.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'connectDurationFrom'  => 'ConnectDurationFrom',
        'connectDurationTo'    => 'ConnectDurationTo',
        'connectEndTimeFrom'   => 'ConnectEndTimeFrom',
        'connectEndTimeTo'     => 'ConnectEndTimeTo',
        'connectStartTimeFrom' => 'ConnectStartTimeFrom',
        'connectStartTimeTo'   => 'ConnectStartTimeTo',
        'desktopGroupId'       => 'DesktopGroupId',
        'desktopId'            => 'DesktopId',
        'endUserId'            => 'EndUserId',
        'endUserType'          => 'EndUserType',
        'maxResults'           => 'MaxResults',
        'nextToken'            => 'NextToken',
        'regionId'             => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->connectDurationFrom) {
            $res['ConnectDurationFrom'] = $this->connectDurationFrom;
        }
        if (null !== $this->connectDurationTo) {
            $res['ConnectDurationTo'] = $this->connectDurationTo;
        }
        if (null !== $this->connectEndTimeFrom) {
            $res['ConnectEndTimeFrom'] = $this->connectEndTimeFrom;
        }
        if (null !== $this->connectEndTimeTo) {
            $res['ConnectEndTimeTo'] = $this->connectEndTimeTo;
        }
        if (null !== $this->connectStartTimeFrom) {
            $res['ConnectStartTimeFrom'] = $this->connectStartTimeFrom;
        }
        if (null !== $this->connectStartTimeTo) {
            $res['ConnectStartTimeTo'] = $this->connectStartTimeTo;
        }
        if (null !== $this->desktopGroupId) {
            $res['DesktopGroupId'] = $this->desktopGroupId;
        }
        if (null !== $this->desktopId) {
            $res['DesktopId'] = $this->desktopId;
        }
        if (null !== $this->endUserId) {
            $res['EndUserId'] = $this->endUserId;
        }
        if (null !== $this->endUserType) {
            $res['EndUserType'] = $this->endUserType;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeUserConnectionRecordsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConnectDurationFrom'])) {
            $model->connectDurationFrom = $map['ConnectDurationFrom'];
        }
        if (isset($map['ConnectDurationTo'])) {
            $model->connectDurationTo = $map['ConnectDurationTo'];
        }
        if (isset($map['ConnectEndTimeFrom'])) {
            $model->connectEndTimeFrom = $map['ConnectEndTimeFrom'];
        }
        if (isset($map['ConnectEndTimeTo'])) {
            $model->connectEndTimeTo = $map['ConnectEndTimeTo'];
        }
        if (isset($map['ConnectStartTimeFrom'])) {
            $model->connectStartTimeFrom = $map['ConnectStartTimeFrom'];
        }
        if (isset($map['ConnectStartTimeTo'])) {
            $model->connectStartTimeTo = $map['ConnectStartTimeTo'];
        }
        if (isset($map['DesktopGroupId'])) {
            $model->desktopGroupId = $map['DesktopGroupId'];
        }
        if (isset($map['DesktopId'])) {
            $model->desktopId = $map['DesktopId'];
        }
        if (isset($map['EndUserId'])) {
            $model->endUserId = $map['EndUserId'];
        }
        if (isset($map['EndUserType'])) {
            $model->endUserType = $map['EndUserType'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
