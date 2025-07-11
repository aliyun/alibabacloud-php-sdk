<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class DescribeRecordingsRequest extends Model
{
    /**
     * @description The cloud computer ID. If this parameter is not specified, the screen recording files on all cloud computers in the designated region will be queried.
     *
     * @example ecd-hlh41mk78dugw****
     *
     * @var string
     */
    public $desktopId;

    /**
     * @description The end time of the query. Specify the time in the `YYYYMMDDhhmmss` format. The time must be in UTC+8.
     *
     * @example 20230424004441
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The maximum number of entries per page.
     *
     * Maximum value: 100.
     *
     * Default value: 10.
     *
     * @example 20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description Specifies whether to return a URL.
     *
     * Valid values:
     *
     *   true
     *   false (default)
     *
     * @example false
     *
     * @var bool
     */
    public $needSignedUrl;

    /**
     * @description The pagination token that is used in the request to retrieve a new page of results. You do not need to specify this parameter for the first request. You must specify the token that is obtained from the previous query as the value of `NextToken`.
     *
     * @example aGN4YzAxQGNuLWhhbmd6aG91LjExNzU5NTMyNjgzMTQ1****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The policy ID.
     *
     * @example pg-gx2x1dhsmthe9****
     *
     * @var string
     */
    public $policyGroupId;

    /**
     * @description The region ID. You can call the [DescribeRegions](~~DescribeRegions~~) operation to query the list of regions where Elastic Desktop Service (EDS) Enterprise is available.
     *
     * This parameter is required.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The validity period of the returned URL. Unit: minutes.
     *
     * @example 10
     *
     * @var int
     */
    public $signedUrlExpireMinutes;

    /**
     * @description The end time of the query. Specify the time in the ISO 8601 standard in the `yyyy-mm-ddthh:mm:ssz` format. The time must be in UTC+0.
     *
     * @example 2025-01-27T02:30:10Z
     *
     * @var string
     */
    public $standardEndTime;

    /**
     * @description The start time of the query. Specify the time in the ISO 8601 standard in the `yyyy-mm-ddthh:mm:ssz` format. The time must be in UTC+0.
     *
     * @example 2025-01-27T02:20:10Z
     *
     * @var string
     */
    public $standardStartTime;

    /**
     * @description The start time of the query. Specify the time in the `YYYYMMDDhhmmss` format. The time must be in UTC+8.
     *
     * @example 20230424000000
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'desktopId' => 'DesktopId',
        'endTime' => 'EndTime',
        'maxResults' => 'MaxResults',
        'needSignedUrl' => 'NeedSignedUrl',
        'nextToken' => 'NextToken',
        'policyGroupId' => 'PolicyGroupId',
        'regionId' => 'RegionId',
        'signedUrlExpireMinutes' => 'SignedUrlExpireMinutes',
        'standardEndTime' => 'StandardEndTime',
        'standardStartTime' => 'StandardStartTime',
        'startTime' => 'StartTime',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->desktopId) {
            $res['DesktopId'] = $this->desktopId;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->needSignedUrl) {
            $res['NeedSignedUrl'] = $this->needSignedUrl;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->policyGroupId) {
            $res['PolicyGroupId'] = $this->policyGroupId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->signedUrlExpireMinutes) {
            $res['SignedUrlExpireMinutes'] = $this->signedUrlExpireMinutes;
        }
        if (null !== $this->standardEndTime) {
            $res['StandardEndTime'] = $this->standardEndTime;
        }
        if (null !== $this->standardStartTime) {
            $res['StandardStartTime'] = $this->standardStartTime;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRecordingsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DesktopId'])) {
            $model->desktopId = $map['DesktopId'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NeedSignedUrl'])) {
            $model->needSignedUrl = $map['NeedSignedUrl'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['PolicyGroupId'])) {
            $model->policyGroupId = $map['PolicyGroupId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SignedUrlExpireMinutes'])) {
            $model->signedUrlExpireMinutes = $map['SignedUrlExpireMinutes'];
        }
        if (isset($map['StandardEndTime'])) {
            $model->standardEndTime = $map['StandardEndTime'];
        }
        if (isset($map['StandardStartTime'])) {
            $model->standardStartTime = $map['StandardStartTime'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
