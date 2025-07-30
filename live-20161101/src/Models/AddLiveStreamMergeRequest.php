<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class AddLiveStreamMergeRequest extends Model
{
    /**
     * @description The name of the application that generates the output stream. The value must be the same as the application name in the ingest URL of the output stream. Otherwise, the configuration does not take effect. You cannot set the value to an asterisk (\\*).
     *
     * This parameter is required.
     *
     * @example app
     *
     * @var string
     */
    public $appName;

    /**
     * @description The streaming domain.
     *
     * This parameter is required.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The end time of the stream mixing.
     *
     * Specify the time in the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC.
     *
     * >  The interval between the start time and the end time must be within 7 days.
     *
     * This parameter is required.
     *
     * @example 2020-05-29T01:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The name of the application that generates the input primary stream. The value must be the same as the application name that is specified in the ingest URL of the primary stream. Otherwise, the configuration does not take effect.
     *
     * This parameter is required.
     *
     * @example app1
     *
     * @var string
     */
    public $inAppName1;

    /**
     * @description The name of the application that generates the input secondary stream. The value must be the same as the application name that is specified in the ingest URL of the secondary stream. Otherwise, the configuration does not take effect.
     *
     * This parameter is required.
     *
     * @example app2
     *
     * @var string
     */
    public $inAppName2;

    /**
     * @description The name of the input primary stream. The value must be the same as the stream name that is specified in the ingest URL of the primary stream. Otherwise, the configuration does not take effect.
     *
     * This parameter is required.
     *
     * @example InStream1
     *
     * @var string
     */
    public $inStreamName1;

    /**
     * @description The name of the input secondary stream. The value must be the same as the stream name that is specified in the ingest URL of the secondary stream. Otherwise, the configuration does not take effect.
     *
     * This parameter is required.
     *
     * @example stream2
     *
     * @var string
     */
    public $inStreamName2;

    /**
     * @var string
     */
    public $liveMerger;

    /**
     * @var string
     */
    public $mergeParameters;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The streaming protocol. Valid values:
     *
     *   **rtmp**: This is the default value.
     *   **rtc**
     *
     * @example rtmp
     *
     * @var string
     */
    public $protocol;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @description The start time of the stream mixing.
     *
     * Specify the time in the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC.
     *
     * This parameter is required.
     *
     * @example 2020-05-29T00:00:00Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The name of the output stream. The value must be the same as the stream name in the ingest URL of the output stream. Otherwise, the configuration does not take effect. You cannot set the value to an asterisk (\\*).
     *
     * This parameter is required.
     *
     * @example StreamName
     *
     * @var string
     */
    public $streamName;
    protected $_name = [
        'appName' => 'AppName',
        'domainName' => 'DomainName',
        'endTime' => 'EndTime',
        'inAppName1' => 'InAppName1',
        'inAppName2' => 'InAppName2',
        'inStreamName1' => 'InStreamName1',
        'inStreamName2' => 'InStreamName2',
        'liveMerger' => 'LiveMerger',
        'mergeParameters' => 'MergeParameters',
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
        if (null !== $this->inAppName1) {
            $res['InAppName1'] = $this->inAppName1;
        }
        if (null !== $this->inAppName2) {
            $res['InAppName2'] = $this->inAppName2;
        }
        if (null !== $this->inStreamName1) {
            $res['InStreamName1'] = $this->inStreamName1;
        }
        if (null !== $this->inStreamName2) {
            $res['InStreamName2'] = $this->inStreamName2;
        }
        if (null !== $this->liveMerger) {
            $res['LiveMerger'] = $this->liveMerger;
        }
        if (null !== $this->mergeParameters) {
            $res['MergeParameters'] = $this->mergeParameters;
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
     * @return AddLiveStreamMergeRequest
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
        if (isset($map['InAppName1'])) {
            $model->inAppName1 = $map['InAppName1'];
        }
        if (isset($map['InAppName2'])) {
            $model->inAppName2 = $map['InAppName2'];
        }
        if (isset($map['InStreamName1'])) {
            $model->inStreamName1 = $map['InStreamName1'];
        }
        if (isset($map['InStreamName2'])) {
            $model->inStreamName2 = $map['InStreamName2'];
        }
        if (isset($map['LiveMerger'])) {
            $model->liveMerger = $map['LiveMerger'];
        }
        if (isset($map['MergeParameters'])) {
            $model->mergeParameters = $map['MergeParameters'];
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
