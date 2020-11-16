<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamsOnlineListResponse\onlineInfo;

use AlibabaCloud\Tea\Model;

class liveStreamOnlineInfo extends Model
{
    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $streamName;

    /**
     * @var string
     */
    public $publishTime;

    /**
     * @var string
     */
    public $publishUrl;

    /**
     * @var string
     */
    public $publishDomain;

    /**
     * @var string
     */
    public $publishType;

    /**
     * @var string
     */
    public $transcoded;

    /**
     * @var string
     */
    public $transcodeId;

    /**
     * @var string
     */
    public $serverIp;

    /**
     * @var string
     */
    public $clientIp;

    /**
     * @var int
     */
    public $videoCodecId;

    /**
     * @var int
     */
    public $videoDataRate;

    /**
     * @var int
     */
    public $frameRate;

    /**
     * @var int
     */
    public $width;

    /**
     * @var int
     */
    public $height;

    /**
     * @var int
     */
    public $audioCodecId;

    /**
     * @var int
     */
    public $audioDataRate;
    protected $_name = [
        'domainName'    => 'DomainName',
        'appName'       => 'AppName',
        'streamName'    => 'StreamName',
        'publishTime'   => 'PublishTime',
        'publishUrl'    => 'PublishUrl',
        'publishDomain' => 'PublishDomain',
        'publishType'   => 'PublishType',
        'transcoded'    => 'Transcoded',
        'transcodeId'   => 'TranscodeId',
        'serverIp'      => 'ServerIp',
        'clientIp'      => 'ClientIp',
        'videoCodecId'  => 'VideoCodecId',
        'videoDataRate' => 'VideoDataRate',
        'frameRate'     => 'FrameRate',
        'width'         => 'Width',
        'height'        => 'Height',
        'audioCodecId'  => 'AudioCodecId',
        'audioDataRate' => 'AudioDataRate',
    ];

    public function validate()
    {
        Model::validateRequired('domainName', $this->domainName, true);
        Model::validateRequired('appName', $this->appName, true);
        Model::validateRequired('streamName', $this->streamName, true);
        Model::validateRequired('publishTime', $this->publishTime, true);
        Model::validateRequired('publishUrl', $this->publishUrl, true);
        Model::validateRequired('publishDomain', $this->publishDomain, true);
        Model::validateRequired('publishType', $this->publishType, true);
        Model::validateRequired('transcoded', $this->transcoded, true);
        Model::validateRequired('transcodeId', $this->transcodeId, true);
        Model::validateRequired('serverIp', $this->serverIp, true);
        Model::validateRequired('clientIp', $this->clientIp, true);
        Model::validateRequired('videoCodecId', $this->videoCodecId, true);
        Model::validateRequired('videoDataRate', $this->videoDataRate, true);
        Model::validateRequired('frameRate', $this->frameRate, true);
        Model::validateRequired('width', $this->width, true);
        Model::validateRequired('height', $this->height, true);
        Model::validateRequired('audioCodecId', $this->audioCodecId, true);
        Model::validateRequired('audioDataRate', $this->audioDataRate, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->streamName) {
            $res['StreamName'] = $this->streamName;
        }
        if (null !== $this->publishTime) {
            $res['PublishTime'] = $this->publishTime;
        }
        if (null !== $this->publishUrl) {
            $res['PublishUrl'] = $this->publishUrl;
        }
        if (null !== $this->publishDomain) {
            $res['PublishDomain'] = $this->publishDomain;
        }
        if (null !== $this->publishType) {
            $res['PublishType'] = $this->publishType;
        }
        if (null !== $this->transcoded) {
            $res['Transcoded'] = $this->transcoded;
        }
        if (null !== $this->transcodeId) {
            $res['TranscodeId'] = $this->transcodeId;
        }
        if (null !== $this->serverIp) {
            $res['ServerIp'] = $this->serverIp;
        }
        if (null !== $this->clientIp) {
            $res['ClientIp'] = $this->clientIp;
        }
        if (null !== $this->videoCodecId) {
            $res['VideoCodecId'] = $this->videoCodecId;
        }
        if (null !== $this->videoDataRate) {
            $res['VideoDataRate'] = $this->videoDataRate;
        }
        if (null !== $this->frameRate) {
            $res['FrameRate'] = $this->frameRate;
        }
        if (null !== $this->width) {
            $res['Width'] = $this->width;
        }
        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }
        if (null !== $this->audioCodecId) {
            $res['AudioCodecId'] = $this->audioCodecId;
        }
        if (null !== $this->audioDataRate) {
            $res['AudioDataRate'] = $this->audioDataRate;
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
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['StreamName'])) {
            $model->streamName = $map['StreamName'];
        }
        if (isset($map['PublishTime'])) {
            $model->publishTime = $map['PublishTime'];
        }
        if (isset($map['PublishUrl'])) {
            $model->publishUrl = $map['PublishUrl'];
        }
        if (isset($map['PublishDomain'])) {
            $model->publishDomain = $map['PublishDomain'];
        }
        if (isset($map['PublishType'])) {
            $model->publishType = $map['PublishType'];
        }
        if (isset($map['Transcoded'])) {
            $model->transcoded = $map['Transcoded'];
        }
        if (isset($map['TranscodeId'])) {
            $model->transcodeId = $map['TranscodeId'];
        }
        if (isset($map['ServerIp'])) {
            $model->serverIp = $map['ServerIp'];
        }
        if (isset($map['ClientIp'])) {
            $model->clientIp = $map['ClientIp'];
        }
        if (isset($map['VideoCodecId'])) {
            $model->videoCodecId = $map['VideoCodecId'];
        }
        if (isset($map['VideoDataRate'])) {
            $model->videoDataRate = $map['VideoDataRate'];
        }
        if (isset($map['FrameRate'])) {
            $model->frameRate = $map['FrameRate'];
        }
        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }
        if (isset($map['AudioCodecId'])) {
            $model->audioCodecId = $map['AudioCodecId'];
        }
        if (isset($map['AudioDataRate'])) {
            $model->audioDataRate = $map['AudioDataRate'];
        }

        return $model;
    }
}
