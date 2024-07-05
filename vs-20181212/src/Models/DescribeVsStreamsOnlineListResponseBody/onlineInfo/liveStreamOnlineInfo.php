<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsStreamsOnlineListResponseBody\onlineInfo;

use AlibabaCloud\Tea\Model;

class liveStreamOnlineInfo extends Model
{
    /**
     * @example xxxApp
     *
     * @var string
     */
    public $appName;

    /**
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @example push.example.com
     *
     * @var string
     */
    public $publishDomain;

    /**
     * @example 2015-12-02T06:58:04Z
     *
     * @var string
     */
    public $publishTime;

    /**
     * @example edge
     *
     * @var string
     */
    public $publishType;

    /**
     * @example rtmp://example.com/xchen
     *
     * @var string
     */
    public $publishUrl;

    /**
     * @example testxchen_small
     *
     * @var string
     */
    public $streamName;

    /**
     * @example 123
     *
     * @var string
     */
    public $transcodeId;

    /**
     * @example no
     *
     * @var string
     */
    public $transcoded;
    protected $_name = [
        'appName'       => 'AppName',
        'domainName'    => 'DomainName',
        'publishDomain' => 'PublishDomain',
        'publishTime'   => 'PublishTime',
        'publishType'   => 'PublishType',
        'publishUrl'    => 'PublishUrl',
        'streamName'    => 'StreamName',
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
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
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
        if (null !== $this->streamName) {
            $res['StreamName'] = $this->streamName;
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
     * @return liveStreamOnlineInfo
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
        if (isset($map['StreamName'])) {
            $model->streamName = $map['StreamName'];
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
