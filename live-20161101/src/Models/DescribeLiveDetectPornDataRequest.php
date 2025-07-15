<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class DescribeLiveDetectPornDataRequest extends Model
{
    /**
     * @description The name of the application to which the live stream belongs.
     *
     * @example liveApp****
     *
     * @var string
     */
    public $app;

    /**
     * @description The main streaming domain to query.
     *
     *   You can query one or more domain names. If you specify multiple domain names, separate them with commas (,).
     *   If you do not specify this parameter, the data of all domain names within your Alibaba Cloud account is returned.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The end of the time range to query. Specify the time in the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time must be in UTC.
     *
     * @example 2017-12-10T09:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description Specifies whether a quota of free image scanning is available. Valid values:
     *
     *   **free**: specifies that a quota of free image scanning is available.
     *   **charge**: specifies that a quota of free image scanning is not available and fees are charged.
     *
     * @example free
     *
     * @var string
     */
    public $fee;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The ID of the region where the domain name resides.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @description The moderation scenario. Valid values:
     *
     *   **porn**: pornography detection. This is the default value.
     *   **terrorism**: terrorism detection
     *   **ad**: ad violation detection
     *   **live**: undesirable scene detection
     *   **logo**: logo detection
     *
     * @example porn
     *
     * @var string
     */
    public $scene;

    /**
     * @description The fields based on which data is grouped. Separate multiple fields with commas (,).
     *
     * > If you leave the **SplitBy** parameter empty, only the **TimeStamp** and **Count** parameters are returned.
     *
     * @example liveApp****,liveStream****
     *
     * @var string
     */
    public $splitBy;

    /**
     * @description The beginning of the time range to query. Specify the time in the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time must be in UTC.
     *
     * >
     *
     *   You can query data in the last 90 days.
     *
     *   The minimum data granularity is 5 minutes. If you do not specify this parameter, data in the last 24 hours is queried.
     *
     * @example 2017-12-10T08:00:00Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The name of the live stream.
     *
     * @example liveStream****
     *
     * @var string
     */
    public $stream;
    protected $_name = [
        'app' => 'App',
        'domainName' => 'DomainName',
        'endTime' => 'EndTime',
        'fee' => 'Fee',
        'ownerId' => 'OwnerId',
        'region' => 'Region',
        'regionId' => 'RegionId',
        'scene' => 'Scene',
        'splitBy' => 'SplitBy',
        'startTime' => 'StartTime',
        'stream' => 'Stream',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->app) {
            $res['App'] = $this->app;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->fee) {
            $res['Fee'] = $this->fee;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->scene) {
            $res['Scene'] = $this->scene;
        }
        if (null !== $this->splitBy) {
            $res['SplitBy'] = $this->splitBy;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->stream) {
            $res['Stream'] = $this->stream;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLiveDetectPornDataRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['App'])) {
            $model->app = $map['App'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Fee'])) {
            $model->fee = $map['Fee'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Scene'])) {
            $model->scene = $map['Scene'];
        }
        if (isset($map['SplitBy'])) {
            $model->splitBy = $map['SplitBy'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Stream'])) {
            $model->stream = $map['Stream'];
        }

        return $model;
    }
}
