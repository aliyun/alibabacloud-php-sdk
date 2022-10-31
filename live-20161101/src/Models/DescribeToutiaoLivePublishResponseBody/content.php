<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeToutiaoLivePublishResponseBody;

use AlibabaCloud\Tea\Model;

class content extends Model
{
    /**
     * @var string
     */
    public $app;

    /**
     * @var float
     */
    public $bitrate;

    /**
     * @var float
     */
    public $bwDiff;

    /**
     * @var string
     */
    public $cdnName;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var float
     */
    public $flr;

    /**
     * @var float
     */
    public $fps;

    /**
     * @var string
     */
    public $streamName;

    /**
     * @var int
     */
    public $timestamp;
    protected $_name = [
        'app'        => 'App',
        'bitrate'    => 'Bitrate',
        'bwDiff'     => 'BwDiff',
        'cdnName'    => 'CdnName',
        'domain'     => 'Domain',
        'flr'        => 'Flr',
        'fps'        => 'Fps',
        'streamName' => 'StreamName',
        'timestamp'  => 'Timestamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->app) {
            $res['App'] = $this->app;
        }
        if (null !== $this->bitrate) {
            $res['Bitrate'] = $this->bitrate;
        }
        if (null !== $this->bwDiff) {
            $res['BwDiff'] = $this->bwDiff;
        }
        if (null !== $this->cdnName) {
            $res['CdnName'] = $this->cdnName;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->flr) {
            $res['Flr'] = $this->flr;
        }
        if (null !== $this->fps) {
            $res['Fps'] = $this->fps;
        }
        if (null !== $this->streamName) {
            $res['StreamName'] = $this->streamName;
        }
        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return content
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['App'])) {
            $model->app = $map['App'];
        }
        if (isset($map['Bitrate'])) {
            $model->bitrate = $map['Bitrate'];
        }
        if (isset($map['BwDiff'])) {
            $model->bwDiff = $map['BwDiff'];
        }
        if (isset($map['CdnName'])) {
            $model->cdnName = $map['CdnName'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['Flr'])) {
            $model->flr = $map['Flr'];
        }
        if (isset($map['Fps'])) {
            $model->fps = $map['Fps'];
        }
        if (isset($map['StreamName'])) {
            $model->streamName = $map['StreamName'];
        }
        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }

        return $model;
    }
}
