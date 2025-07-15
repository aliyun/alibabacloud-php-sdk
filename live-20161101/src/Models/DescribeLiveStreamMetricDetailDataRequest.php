<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class DescribeLiveStreamMetricDetailDataRequest extends Model
{
    /**
     * @description The name of the application for which you want to query the monitoring data of streams.
     *
     * >  If you specify the StreamName parameter, you must also specify the AppName parameter.
     *
     * @example liveApp****
     *
     * @var string
     */
    public $appName;

    /**
     * @description *   The accelerated domain name. You can specify only one domain name. If you specify multiple domain names, an error occurs.
     *   If you do not specify the AppName and StreamName parameters, monitoring data of all streams for the domain name is returned.
     *   If you leave this parameter empty, monitoring data of streams under all domain names is returned.
     *   If you specify the DomainName parameter and set both the AppName and StreamName parameters to all, monitoring data of all streams in all applications under the specified domain name is returned.
     *   When you specify the DomainName parameter, make sure that the domain name is a domain name used for live streaming and that you have the permissions on the domain name.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The end of the time range to query. The end time must be later than the start time, and the maximum time range that can be specified is one day. Specify the time in the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC.
     *
     * This parameter is required.
     *
     * @example 2015-12-10T21:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The token used to query data by page. Up to 5,000 rows of data can be returned per query. If the number of rows exceeds 5,000, a token that determines the start point of the next query is provided in the response. If you specify this parameter, data continues to be obtained from the end of the previous query.
     *
     * @example UjsM9x3aVcJi9a0-ArwJUTTC67CIBKLw*****
     *
     * @var string
     */
    public $nextPageToken;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The streaming protocol. Valid values: **flv**, **hls**, **rtmp**, **rts**, and **p2p**.
     *
     * You can specify multiple protocols. Separate multiple protocols with commas (,). However, data over multiple protocols is not aggregated and is returned based on the stream.
     *
     * @example flv
     *
     * @var string
     */
    public $protocol;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @description The beginning of the time range to query. Specify the time in the ISO 8601 standard in the YYYY-MM-DDThh:mm:ssZ format. The time must be in UTC.
     *
     * This parameter is required.
     *
     * @example 2015-12-10T20:00:00Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The name of the stream. The stream must belong to the application that is specified by the AppName parameter.
     *
     * >  If you specify the StreamName parameter, you must also specify the AppName parameter.
     *
     * @example liveStream****
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
        'protocol' => 'Protocol',
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
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
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
     * @return DescribeLiveStreamMetricDetailDataRequest
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
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
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
