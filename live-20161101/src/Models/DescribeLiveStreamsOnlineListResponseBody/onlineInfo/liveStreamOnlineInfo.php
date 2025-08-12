<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamsOnlineListResponseBody\onlineInfo;

use AlibabaCloud\Dara\Model;

class liveStreamOnlineInfo extends Model
{
    /**
     * @var string
     */
    public $appName;

    /**
     * @var int
     */
    public $audioCodecId;

    /**
     * @var int
     */
    public $audioDataRate;

    /**
     * @var string
     */
    public $clientIp;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var int
     */
    public $frameRate;

    /**
     * @var int
     */
    public $height;

    /**
     * @var string
     */
    public $publishDomain;

    /**
     * @var string
     */
    public $publishTime;

    /**
     * @var string
     */
    public $publishType;

    /**
     * @var string
     */
    public $publishUrl;

    /**
     * @var string
     */
    public $serverIp;

    /**
     * @var string
     */
    public $streamName;

    /**
     * @var string
     */
    public $transcoded;

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

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
