<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamsOnlineListResponseBody\onlineInfo;

use AlibabaCloud\Tea\Model;

class liveStreamOnlineInfo extends Model
{
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
    public $domainName;

    /**
     * @var string
     */
    public $publishDomain;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $publishTime;
    protected $_name = [
        'publishUrl'    => 'PublishUrl',
        'streamName'    => 'StreamName',
        'domainName'    => 'DomainName',
        'publishDomain' => 'PublishDomain',
        'appName'       => 'AppName',
        'publishTime'   => 'PublishTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->publishUrl) {
            $res['PublishUrl'] = $this->publishUrl;
        }
        if (null !== $this->streamName) {
            $res['StreamName'] = $this->streamName;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->publishDomain) {
            $res['PublishDomain'] = $this->publishDomain;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->publishTime) {
            $res['PublishTime'] = $this->publishTime;
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
        if (isset($map['PublishUrl'])) {
            $model->publishUrl = $map['PublishUrl'];
        }
        if (isset($map['StreamName'])) {
            $model->streamName = $map['StreamName'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['PublishDomain'])) {
            $model->publishDomain = $map['PublishDomain'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['PublishTime'])) {
            $model->publishTime = $map['PublishTime'];
        }

        return $model;
    }
}
