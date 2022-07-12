<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class DescribeUserConnectionRecordsRequest extends Model
{
    /**
     * @var int
     */
    public $connectDurationFrom;

    /**
     * @var int
     */
    public $connectDurationTo;

    /**
     * @var int
     */
    public $connectEndTimeFrom;

    /**
     * @var int
     */
    public $connectEndTimeTo;

    /**
     * @var int
     */
    public $connectStartTimeFrom;

    /**
     * @var int
     */
    public $connectStartTimeTo;

    /**
     * @var string
     */
    public $desktopGroupId;

    /**
     * @var string
     */
    public $desktopId;

    /**
     * @var string
     */
    public $endUserId;

    /**
     * @var string
     */
    public $endUserType;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
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
