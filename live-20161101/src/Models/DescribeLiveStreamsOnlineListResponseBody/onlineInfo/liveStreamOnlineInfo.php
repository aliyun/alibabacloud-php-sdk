<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamsOnlineListResponseBody\onlineInfo;

use AlibabaCloud\Tea\Model;

class liveStreamOnlineInfo extends Model
{
    /**
     * @description The name of the application to which the live stream belongs.
     *
     * @example liveApp****
     *
     * @var string
     */
    public $appName;

    /**
     * @description The ID of the audio codec.
     *
     * @example 10
     *
     * @var int
     */
    public $audioCodecId;

    /**
     * @description The audio bitrate of the live stream. Unit: Kbit/s.
     *
     * >  This parameter can be returned after you submit a ticket for whitelist configuration. For more information about how to submit a ticket, see Contact us.
     *
     * @example 600
     *
     * @var int
     */
    public $audioDataRate;

    /**
     * @description The IP address of the client for stream ingest.
     *
     * @example 106.11.XX.XX
     *
     * @var string
     */
    public $clientIp;

    /**
     * @description The main streaming domain.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The frame rate. Unit: FPS.
     *
     * @example 15
     *
     * @var int
     */
    public $frameRate;

    /**
     * @description The height of the video resolution. Unit: pixels.
     *
     * @example 720
     *
     * @var int
     */
    public $height;

    /**
     * @description The ingest domain. If live center ingest was used, the streaming domain is returned.
     *
     * @example demo.aliyundoc.com
     *
     * @var string
     */
    public $publishDomain;

    /**
     * @description The start time of stream ingest. The time follows the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2021-08-09T02:37:59Z
     *
     * @var string
     */
    public $publishTime;

    /**
     * @description The ingest type. Valid values:
     *
     *   **edge**: edge ingest.
     *   **center**: live center ingest.
     *
     * @example edge
     *
     * @var string
     */
    public $publishType;

    /**
     * @description The complete URL that was used to ingest the stream.
     *
     * @example rtmp://demo.aliyundoc.com/live/test****
     *
     * @var string
     */
    public $publishUrl;

    /**
     * @description The IP address of the ingest node.
     *
     * @example 120.221.XX.XX
     *
     * @var string
     */
    public $serverIp;

    /**
     * @description The name of the live stream.
     *
     * @example liveStream****
     *
     * @var string
     */
    public $streamName;

    /**
     * @description Indicates whether the stream was transcoded. Valid values:
     *
     *   **yes**
     *   **no**
     *
     * @example no
     *
     * @var string
     */
    public $transcoded;

    /**
     * @description The ID of the video codec.
     *
     * @example 7
     *
     * @var int
     */
    public $videoCodecId;

    /**
     * @description The video bitrate of the live stream. Unit: Kbit/s.
     *
     * >  This parameter can be returned after you submit a ticket for whitelist configuration. For more information about how to submit a ticket, see Contact us.
     *
     * @example 600
     *
     * @var int
     */
    public $videoDataRate;

    /**
     * @description The width of the video resolution. Unit: pixels.
     *
     * @example 1280
     *
     * @var int
     */
    public $width;
    protected $_name = [
        'appName' => 'AppName',
        'audioCodecId' => 'AudioCodecId',
        'audioDataRate' => 'AudioDataRate',
        'clientIp' => 'ClientIp',
        'domainName' => 'DomainName',
        'frameRate' => 'FrameRate',
        'height' => 'Height',
        'publishDomain' => 'PublishDomain',
        'publishTime' => 'PublishTime',
        'publishType' => 'PublishType',
        'publishUrl' => 'PublishUrl',
        'serverIp' => 'ServerIp',
        'streamName' => 'StreamName',
        'transcoded' => 'Transcoded',
        'videoCodecId' => 'VideoCodecId',
        'videoDataRate' => 'VideoDataRate',
        'width' => 'Width',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->audioCodecId) {
            $res['AudioCodecId'] = $this->audioCodecId;
        }
        if (null !== $this->audioDataRate) {
            $res['AudioDataRate'] = $this->audioDataRate;
        }
        if (null !== $this->clientIp) {
            $res['ClientIp'] = $this->clientIp;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->frameRate) {
            $res['FrameRate'] = $this->frameRate;
        }
        if (null !== $this->height) {
            $res['Height'] = $this->height;
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
        if (null !== $this->serverIp) {
            $res['ServerIp'] = $this->serverIp;
        }
        if (null !== $this->streamName) {
            $res['StreamName'] = $this->streamName;
        }
        if (null !== $this->transcoded) {
            $res['Transcoded'] = $this->transcoded;
        }
        if (null !== $this->videoCodecId) {
            $res['VideoCodecId'] = $this->videoCodecId;
        }
        if (null !== $this->videoDataRate) {
            $res['VideoDataRate'] = $this->videoDataRate;
        }
        if (null !== $this->width) {
            $res['Width'] = $this->width;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return liveStreamOnlineInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['AudioCodecId'])) {
            $model->audioCodecId = $map['AudioCodecId'];
        }
        if (isset($map['AudioDataRate'])) {
            $model->audioDataRate = $map['AudioDataRate'];
        }
        if (isset($map['ClientIp'])) {
            $model->clientIp = $map['ClientIp'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['FrameRate'])) {
            $model->frameRate = $map['FrameRate'];
        }
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
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
        if (isset($map['ServerIp'])) {
            $model->serverIp = $map['ServerIp'];
        }
        if (isset($map['StreamName'])) {
            $model->streamName = $map['StreamName'];
        }
        if (isset($map['Transcoded'])) {
            $model->transcoded = $map['Transcoded'];
        }
        if (isset($map['VideoCodecId'])) {
            $model->videoCodecId = $map['VideoCodecId'];
        }
        if (isset($map['VideoDataRate'])) {
            $model->videoDataRate = $map['VideoDataRate'];
        }
        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }

        return $model;
    }
}
