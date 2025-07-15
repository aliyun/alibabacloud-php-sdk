<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeToutiaoLivePlayResponseBody;

use AlibabaCloud\Tea\Model;

class content extends Model
{
    /**
     * @description The name of the application to which the live stream belongs.
     *
     * @example liveApp****
     *
     * @var string
     */
    public $app;

    /**
     * @description The bandwidth. Unit: Mbit/s.
     *
     * @example 0.0801239013671875
     *
     * @var float
     */
    public $bandwidth;

    /**
     * @description The Content Delivery Network (CDN) name.
     *
     * @example ali
     *
     * @var string
     */
    public $cdnName;

    /**
     * @description The streaming domain.
     *
     * @example example.com
     *
     * @var string
     */
    public $domain;

    /**
     * @description The number of viewers.
     *
     * @example 452
     *
     * @var int
     */
    public $playNum;

    /**
     * @description The name of the live stream.
     *
     * @example liveStream****
     *
     * @var string
     */
    public $streamName;

    /**
     * @description The timestamp.
     *
     * @example 1625484600
     *
     * @var int
     */
    public $timestamp;
    protected $_name = [
        'app' => 'App',
        'bandwidth' => 'Bandwidth',
        'cdnName' => 'CdnName',
        'domain' => 'Domain',
        'playNum' => 'PlayNum',
        'streamName' => 'StreamName',
        'timestamp' => 'Timestamp',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->app) {
            $res['App'] = $this->app;
        }
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->cdnName) {
            $res['CdnName'] = $this->cdnName;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->playNum) {
            $res['PlayNum'] = $this->playNum;
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
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['CdnName'])) {
            $model->cdnName = $map['CdnName'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['PlayNum'])) {
            $model->playNum = $map['PlayNum'];
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
