<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class DescribeLiveStreamPushMetricDetailDataRequest extends Model
{
    /**
     * @description The name of the application to which the live stream belongs. The stream-level data of this application is returned.
     *
     * @example app
     *
     * @var string
     */
    public $appName;

    /**
     * @description *   The accelerated domain name. You can specify only one domain name. If you specify multiple domain names, an error occurs.
     *   If you do not specify the AppName and StreamName parameters, data of all streams under the specified domain name is returned. The data is not aggregated.
     *   If you specify the DomainName parameter and set both the AppName and StreamName parameters to all, data of all streams in all applications under the specified domain name is aggregated and returned.
     *
     * This parameter is required.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The end of the time range to query. The end time must be later than the start time, and the maximum time range that can be specified is one day. Specify the time in the ISO 8601 standard
     *
     * in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC.
     *
     * This parameter is required.
     *
     * @example 2022-09-10T21:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description A pagination token. When you call this operation, up to 5,000 rows of data can be returned per query. If the number of rows exceeds 5,000, the response includes a pagination token that is used in the next request to retrieve a new page of results.
     *
     * When you specify the token in the next query, data continues to be obtained from the end of the previous query.
     *
     * @example UjsM9x3aVcJi9a0-ArwJUTTC67C***37C0=
     *
     * @var string
     */
    public $nextPageToken;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @description The beginning of the time range to query. Specify the time in the ISO 8601 standard in the YYYY-MM-DDThh:mm:ssZ format. The time must be in UTC.
     *
     * This parameter is required.
     *
     * @example 2022-09-10T20:00:00Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The name of the live stream. The data of the stream in the specified application is returned. If the StreamName parameter is specified, the AppName parameter must also be specified.
     *
     * @example test
     *
     * @var string
     */
    public $streamName;
    protected $_name = [
        'appName' => 'AppName',
        'domainName' => 'DomainName',
        'endTime' => 'EndTime',
        'nextPageToken' => 'NextPageToken',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
        'startTime' => 'StartTime',
        'streamName' => 'StreamName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->nextPageToken) {
            $res['NextPageToken'] = $this->nextPageToken;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->streamName) {
            $res['StreamName'] = $this->streamName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLiveStreamPushMetricDetailDataRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['NextPageToken'])) {
            $model->nextPageToken = $map['NextPageToken'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['StreamName'])) {
            $model->streamName = $map['StreamName'];
        }

        return $model;
    }
}
