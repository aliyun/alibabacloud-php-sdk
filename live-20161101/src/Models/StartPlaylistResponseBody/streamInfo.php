<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\StartPlaylistResponseBody;

use AlibabaCloud\SDK\Live\V20161101\Models\StartPlaylistResponseBody\streamInfo\streams;
use AlibabaCloud\Tea\Model;

class streamInfo extends Model
{
    /**
     * @description The name of the application.
     *
     * @example liveApp****
     *
     * @var string
     */
    public $appName;

    /**
     * @description The main streaming domain.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The name of the live stream.
     *
     * @example liveStream****
     *
     * @var string
     */
    public $streamName;

    /**
     * @description The streaming URLs.
     *
     * @var streams
     */
    public $streams;
    protected $_name = [
        'appName' => 'AppName',
        'domainName' => 'DomainName',
        'streamName' => 'StreamName',
        'streams' => 'Streams',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->streamName) {
            $res['StreamName'] = $this->streamName;
        }
        if (null !== $this->streams) {
            $res['Streams'] = null !== $this->streams ? $this->streams->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return streamInfo
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
        if (isset($map['StreamName'])) {
            $model->streamName = $map['StreamName'];
        }
        if (isset($map['Streams'])) {
            $model->streams = streams::fromMap($map['Streams']);
        }

        return $model;
    }
}
