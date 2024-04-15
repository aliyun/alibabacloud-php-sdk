<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class DescribeDesktopGroupSessionsRequest extends Model
{
    /**
     * @description The end of the time range to query.
     *
     * @example "2022-08-31T06:56:45Z"
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The ID of the end user.
     *
     * @example xianqiu
     *
     * @var string
     */
    public $endUserId;

    /**
     * @description The number of entries per page.
     *
     * @example 20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The pagination token that is used in the next request to retrieve a new page of results.
     *
     * @example "asdfdfsdfsdfds"
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The type of the session.
     *
     * Valid values:
     *
     *   0: single-session
     *   1: multi-session
     *
     * @example 1
     *
     * @var int
     */
    public $ownType;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The status of the session.
     *
     * Valid values:
     *
     *   Connected
     *
     * <!-- -->
     *
     *   Disconnected
     *
     * <!-- -->
     * @example Connected
     *
     * @var string
     */
    public $sessionStatus;

    /**
     * @description The beginning of the time range to query.
     *
     * @example "2022-08-31T06:56:45Z"
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'endTime'       => 'EndTime',
        'endUserId'     => 'EndUserId',
        'maxResults'    => 'MaxResults',
        'nextToken'     => 'NextToken',
        'ownType'       => 'OwnType',
        'regionId'      => 'RegionId',
        'sessionStatus' => 'SessionStatus',
        'startTime'     => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->endUserId) {
            $res['EndUserId'] = $this->endUserId;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->ownType) {
            $res['OwnType'] = $this->ownType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->sessionStatus) {
            $res['SessionStatus'] = $this->sessionStatus;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDesktopGroupSessionsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['EndUserId'])) {
            $model->endUserId = $map['EndUserId'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['OwnType'])) {
            $model->ownType = $map['OwnType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SessionStatus'])) {
            $model->sessionStatus = $map['SessionStatus'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
