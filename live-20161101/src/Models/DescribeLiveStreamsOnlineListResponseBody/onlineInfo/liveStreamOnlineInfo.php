<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamsOnlineListResponseBody\onlineInfo;

use AlibabaCloud\Tea\Model;

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
    public $width;
    protected $_name = [
        'appName'       => 'AppName',
        'audioCodecId'  => 'AudioCodecId',
        'clientIp'      => 'ClientIp',
        'domainName'    => 'DomainName',
        'frameRate'     => 'FrameRate',
        'height'        => 'Height',
        'publishDomain' => 'PublishDomain',
        'publishTime'   => 'PublishTime',
        'publishType'   => 'PublishType',
        'publishUrl'    => 'PublishUrl',
        'serverIp'      => 'ServerIp',
        'streamName'    => 'StreamName',
        'transcoded'    => 'Transcoded',
        'videoCodecId'  => 'VideoCodecId',
        'width'         => 'Width',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->audioCodecId) {
            $res['AudioCodecId'] = $this->audioCodecId;
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
        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }

        return $model;
    }
}
