<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamsPublishListResponseBody\publishInfo;

use AlibabaCloud\Tea\Model;

class liveStreamPublishInfo extends Model
{
    /**
     * @description Internal error
     *
     * @example 3000001
     *
     * @var string
     */
    public $aliInnerErrorFlags;

    /**
     * @description The name of the application to which the live stream belongs.
     *
     * @example liveApp****
     *
     * @var string
     */
    public $appName;

    /**
     * @description The IP address of the client that ingested the live stream.
     *
     * @example 10.175.XX.XX
     *
     * @var string
     */
    public $clientAddr;

    /**
     * @description The ingest domain or main streaming domain.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The IP address of the CDN point of presence (POP) to which the stream was ingested.
     *
     * @example 10.175.XX.XX
     *
     * @var string
     */
    public $edgeNodeAddr;

    /**
     * @description The ingest domain.
     *
     * @example demo.aliyundoc.com
     *
     * @var string
     */
    public $publishDomain;

    /**
     * @description The time when the stream ingest was started. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2015-12-02T03:05:53Z
     *
     * @var string
     */
    public $publishTime;

    /**
     * @description The type of the stream ingest. Valid values:
     *
     *   **edge**: edge ingest
     *   **center**: live center ingest
     *
     * @example edge
     *
     * @var string
     */
    public $publishType;

    /**
     * @description The complete ingest URL.
     *
     * @var string
     */
    public $publishUrl;

    /**
     * @description The time when the stream ingest was stopped. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2015-12-02T03:11:19Z
     *
     * @var string
     */
    public $stopTime;

    /**
     * @description The name of the live stream.
     *
     * @example liveStream****
     *
     * @var string
     */
    public $streamName;

    /**
     * @description The streaming URL.
     *
     * @var string
     */
    public $streamUrl;

    /**
     * @description The ID of the transcoding template.
     *
     * >  This parameter is not returned if the value of the Transcoded parameter is no.
     *
     * @example ld
     *
     * @var string
     */
    public $transcodeId;

    /**
     * @description Indicates whether the stream was a transcoded stream.
     *
     * @example yes
     *
     * @var string
     */
    public $transcoded;
    protected $_name = [
        'aliInnerErrorFlags' => 'AliInnerErrorFlags',
        'appName' => 'AppName',
        'clientAddr' => 'ClientAddr',
        'domainName' => 'DomainName',
        'edgeNodeAddr' => 'EdgeNodeAddr',
        'publishDomain' => 'PublishDomain',
        'publishTime' => 'PublishTime',
        'publishType' => 'PublishType',
        'publishUrl' => 'PublishUrl',
        'stopTime' => 'StopTime',
        'streamName' => 'StreamName',
        'streamUrl' => 'StreamUrl',
        'transcodeId' => 'TranscodeId',
        'transcoded' => 'Transcoded',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliInnerErrorFlags) {
            $res['AliInnerErrorFlags'] = $this->aliInnerErrorFlags;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->clientAddr) {
            $res['ClientAddr'] = $this->clientAddr;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->edgeNodeAddr) {
            $res['EdgeNodeAddr'] = $this->edgeNodeAddr;
        }
        if (null !== $this->publishDomain) {
            $res['PublishDomain'] = $this->publishDomain;
        }
        if (null !== $this->publishTime) {
            $res['PublishTime'] = $this->publishTime;
        }
        if (null !== $this->publishType) {
            $res['PublishType'] = $this->publishType;
        }
        if (null !== $this->publishUrl) {
            $res['PublishUrl'] = $this->publishUrl;
        }
        if (null !== $this->stopTime) {
            $res['StopTime'] = $this->stopTime;
        }
        if (null !== $this->streamName) {
            $res['StreamName'] = $this->streamName;
        }
        if (null !== $this->streamUrl) {
            $res['StreamUrl'] = $this->streamUrl;
        }
        if (null !== $this->transcodeId) {
            $res['TranscodeId'] = $this->transcodeId;
        }
        if (null !== $this->transcoded) {
            $res['Transcoded'] = $this->transcoded;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return liveStreamPublishInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliInnerErrorFlags'])) {
            $model->aliInnerErrorFlags = $map['AliInnerErrorFlags'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['ClientAddr'])) {
            $model->clientAddr = $map['ClientAddr'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['EdgeNodeAddr'])) {
            $model->edgeNodeAddr = $map['EdgeNodeAddr'];
        }
        if (isset($map['PublishDomain'])) {
            $model->publishDomain = $map['PublishDomain'];
        }
        if (isset($map['PublishTime'])) {
            $model->publishTime = $map['PublishTime'];
        }
        if (isset($map['PublishType'])) {
            $model->publishType = $map['PublishType'];
        }
        if (isset($map['PublishUrl'])) {
            $model->publishUrl = $map['PublishUrl'];
        }
        if (isset($map['StopTime'])) {
            $model->stopTime = $map['StopTime'];
        }
        if (isset($map['StreamName'])) {
            $model->streamName = $map['StreamName'];
        }
        if (isset($map['StreamUrl'])) {
            $model->streamUrl = $map['StreamUrl'];
        }
        if (isset($map['TranscodeId'])) {
            $model->transcodeId = $map['TranscodeId'];
        }
        if (isset($map['Transcoded'])) {
            $model->transcoded = $map['Transcoded'];
        }

        return $model;
    }
}
