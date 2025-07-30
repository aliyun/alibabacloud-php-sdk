<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamMergeResponseBody\liveStreamMergeList;

use AlibabaCloud\Tea\Model;

class liveStreamMerge extends Model
{
    /**
     * @description The name of the application that generates the output stream.
     *
     * @example app
     *
     * @var string
     */
    public $appName;

    /**
     * @description The application that is being used.
     *
     * @example app1
     *
     * @var string
     */
    public $appUsing;

    /**
     * @description The streaming domain.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The end time of the stream mixing.
     *
     * @example 2020-05-29T01:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The names of the applications that generate the input additional streams other than the primary stream and secondary stream, and the names of these additional streams.
     *
     * @example app3/stream3,app4/stream4,app5/stream5,…,appN/streamN
     *
     * @var string
     */
    public $extraInAppStreams;

    /**
     * @description The name of the application that generates the input primary stream.
     *
     * @example app1
     *
     * @var string
     */
    public $inAppName1;

    /**
     * @description The name of the application that generates the input secondary stream.
     *
     * @example app2
     *
     * @var string
     */
    public $inAppName2;

    /**
     * @description The name of the input primary stream.
     *
     * @example InStream1
     *
     * @var string
     */
    public $inStreamName1;

    /**
     * @description The name of the input secondary stream.
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
     * @description The streaming protocol.
     *
     * @example rtmp
     *
     * @var string
     */
    public $protocol;

    /**
     * @description The start time of the stream mixing.
     *
     * @example 2020-05-29T00:00:00Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The name of the output stream.
     *
     * @example StreamName
     *
     * @var string
     */
    public $streamName;

    /**
     * @description The stream that is being used.
     *
     * @example InStream1
     *
     * @var string
     */
    public $streamUsing;
    protected $_name = [
        'appName' => 'AppName',
        'appUsing' => 'AppUsing',
        'domainName' => 'DomainName',
        'endTime' => 'EndTime',
        'extraInAppStreams' => 'ExtraInAppStreams',
        'inAppName1' => 'InAppName1',
        'inAppName2' => 'InAppName2',
        'inStreamName1' => 'InStreamName1',
        'inStreamName2' => 'InStreamName2',
        'liveMerger' => 'LiveMerger',
        'mergeParameters' => 'MergeParameters',
        'protocol' => 'Protocol',
        'startTime' => 'StartTime',
        'streamName' => 'StreamName',
        'streamUsing' => 'StreamUsing',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->appUsing) {
            $res['AppUsing'] = $this->appUsing;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->extraInAppStreams) {
            $res['ExtraInAppStreams'] = $this->extraInAppStreams;
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
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->streamName) {
            $res['StreamName'] = $this->streamName;
        }
        if (null !== $this->streamUsing) {
            $res['StreamUsing'] = $this->streamUsing;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return liveStreamMerge
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['AppUsing'])) {
            $model->appUsing = $map['AppUsing'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['ExtraInAppStreams'])) {
            $model->extraInAppStreams = $map['ExtraInAppStreams'];
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
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['StreamName'])) {
            $model->streamName = $map['StreamName'];
        }
        if (isset($map['StreamUsing'])) {
            $model->streamUsing = $map['StreamUsing'];
        }

        return $model;
    }
}
