<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamsPublishListResponse\publishInfo;

use AlibabaCloud\Tea\Model;

class liveStreamPublishInfo extends Model
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
    public $streamUrl;

    /**
     * @var string
     */
    public $publishTime;

    /**
     * @var string
     */
    public $stopTime;

    /**
     * @var string
     */
    public $publishUrl;

    /**
     * @var string
     */
    public $clientAddr;

    /**
     * @var string
     */
    public $edgeNodeAddr;

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
    protected $_name = [
        'domainName'    => 'DomainName',
        'appName'       => 'AppName',
        'streamName'    => 'StreamName',
        'streamUrl'     => 'StreamUrl',
        'publishTime'   => 'PublishTime',
        'stopTime'      => 'StopTime',
        'publishUrl'    => 'PublishUrl',
        'clientAddr'    => 'ClientAddr',
        'edgeNodeAddr'  => 'EdgeNodeAddr',
        'publishDomain' => 'PublishDomain',
        'publishType'   => 'PublishType',
        'transcoded'    => 'Transcoded',
        'transcodeId'   => 'TranscodeId',
    ];

    public function validate()
    {
        Model::validateRequired('domainName', $this->domainName, true);
        Model::validateRequired('appName', $this->appName, true);
        Model::validateRequired('streamName', $this->streamName, true);
        Model::validateRequired('streamUrl', $this->streamUrl, true);
        Model::validateRequired('publishTime', $this->publishTime, true);
        Model::validateRequired('stopTime', $this->stopTime, true);
        Model::validateRequired('publishUrl', $this->publishUrl, true);
        Model::validateRequired('clientAddr', $this->clientAddr, true);
        Model::validateRequired('edgeNodeAddr', $this->edgeNodeAddr, true);
        Model::validateRequired('publishDomain', $this->publishDomain, true);
        Model::validateRequired('publishType', $this->publishType, true);
        Model::validateRequired('transcoded', $this->transcoded, true);
        Model::validateRequired('transcodeId', $this->transcodeId, true);
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
        if (null !== $this->streamUrl) {
            $res['StreamUrl'] = $this->streamUrl;
        }
        if (null !== $this->publishTime) {
            $res['PublishTime'] = $this->publishTime;
        }
        if (null !== $this->stopTime) {
            $res['StopTime'] = $this->stopTime;
        }
        if (null !== $this->publishUrl) {
            $res['PublishUrl'] = $this->publishUrl;
        }
        if (null !== $this->clientAddr) {
            $res['ClientAddr'] = $this->clientAddr;
        }
        if (null !== $this->edgeNodeAddr) {
            $res['EdgeNodeAddr'] = $this->edgeNodeAddr;
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
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['StreamName'])) {
            $model->streamName = $map['StreamName'];
        }
        if (isset($map['StreamUrl'])) {
            $model->streamUrl = $map['StreamUrl'];
        }
        if (isset($map['PublishTime'])) {
            $model->publishTime = $map['PublishTime'];
        }
        if (isset($map['StopTime'])) {
            $model->stopTime = $map['StopTime'];
        }
        if (isset($map['PublishUrl'])) {
            $model->publishUrl = $map['PublishUrl'];
        }
        if (isset($map['ClientAddr'])) {
            $model->clientAddr = $map['ClientAddr'];
        }
        if (isset($map['EdgeNodeAddr'])) {
            $model->edgeNodeAddr = $map['EdgeNodeAddr'];
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

        return $model;
    }
}
