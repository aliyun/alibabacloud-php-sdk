<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsStreamsOnlineListResponseBody\onlineInfo;

use AlibabaCloud\Tea\Model;

class liveStreamOnlineInfo extends Model
{
    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $domainName;

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
    public $streamName;

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
