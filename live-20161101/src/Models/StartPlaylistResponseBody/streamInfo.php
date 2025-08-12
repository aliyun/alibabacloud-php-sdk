<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\StartPlaylistResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\StartPlaylistResponseBody\streamInfo\streams;

class streamInfo extends Model
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
    public $streamName;

    /**
     * @var streams
     */
    public $streams;
    protected $_name = [
        'appName' => 'AppName',
        'domainName' => 'DomainName',
        'streamName' => 'StreamName',
        'streams' => 'Streams',
    ];

    public function validate()
    {
        if (null !== $this->streams) {
            $this->streams->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['Streams'] = null !== $this->streams ? $this->streams->toArray($noStream) : $this->streams;
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
