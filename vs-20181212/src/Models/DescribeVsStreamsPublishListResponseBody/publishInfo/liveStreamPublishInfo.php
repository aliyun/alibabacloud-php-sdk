<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsStreamsPublishListResponseBody\publishInfo;

use AlibabaCloud\Tea\Model;

class liveStreamPublishInfo extends Model
{
    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $clientAddr;

    /**
     * @var string
     */
    public $domainName;

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
    public $stopTime;

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
    public $transcodeId;

    /**
     * @var string
     */
    public $transcoded;
    protected $_name = [
        'appName'       => 'AppName',
        'clientAddr'    => 'ClientAddr',
        'domainName'    => 'DomainName',
        'edgeNodeAddr'  => 'EdgeNodeAddr',
        'publishDomain' => 'PublishDomain',
        'publishTime'   => 'PublishTime',
        'publishType'   => 'PublishType',
        'publishUrl'    => 'PublishUrl',
        'stopTime'      => 'StopTime',
        'streamName'    => 'StreamName',
        'streamUrl'     => 'StreamUrl',
        'transcodeId'   => 'TranscodeId',
        'transcoded'    => 'Transcoded',
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
