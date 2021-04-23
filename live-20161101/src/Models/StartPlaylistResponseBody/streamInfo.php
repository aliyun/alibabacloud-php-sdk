<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\StartPlaylistResponseBody;

use AlibabaCloud\SDK\Live\V20161101\Models\StartPlaylistResponseBody\streamInfo\streams;
use AlibabaCloud\Tea\Model;

class streamInfo extends Model
{
    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $streamName;

    /**
     * @var streams
     */
    public $streams;

    /**
     * @var string
     */
    public $domainName;
    protected $_name = [
        'appName'    => 'AppName',
        'streamName' => 'StreamName',
        'streams'    => 'Streams',
        'domainName' => 'DomainName',
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
        if (null !== $this->streamName) {
            $res['StreamName'] = $this->streamName;
        }
        if (null !== $this->streams) {
            $res['Streams'] = null !== $this->streams ? $this->streams->toMap() : null;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
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
        if (isset($map['StreamName'])) {
            $model->streamName = $map['StreamName'];
        }
        if (isset($map['Streams'])) {
            $model->streams = streams::fromMap($map['Streams']);
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }

        return $model;
    }
}
