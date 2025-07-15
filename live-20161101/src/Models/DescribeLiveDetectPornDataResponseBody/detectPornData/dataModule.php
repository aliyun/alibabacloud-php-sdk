<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDetectPornDataResponseBody\detectPornData;

use AlibabaCloud\Tea\Model;

class dataModule extends Model
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
     * @description The number of reviewed images.
     *
     * @example 2
     *
     * @var int
     */
    public $count;

    /**
     * @description The main streaming domain.
     *
     * @example example.com
     *
     * @var string
     */
    public $domain;

    /**
     * @description Indicates whether a quota of free image scanning is available. Valid values:
     *
     *   **free**
     *   **charge**
     *
     * @example free
     *
     * @var string
     */
    public $fee;

    /**
     * @description The region in which the domain name resides.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $region;

    /**
     * @description The moderation scenario. Valid values:
     *
     *   **porn** (default): pornography
     *   **terrorism**: terrorism or politically sensitive content
     *   **ad**: ad violation
     *   **live**: undesirable scene
     *   **logo**
     *
     * @example porn
     *
     * @var string
     */
    public $scene;

    /**
     * @description The name of the live stream.
     *
     * @example liveStream****
     *
     * @var string
     */
    public $stream;

    /**
     * @description The timestamp of the data returned. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2017-12-10T15:00:05Z
     *
     * @var string
     */
    public $timeStamp;
    protected $_name = [
        'app' => 'App',
        'count' => 'Count',
        'domain' => 'Domain',
        'fee' => 'Fee',
        'region' => 'Region',
        'scene' => 'Scene',
        'stream' => 'Stream',
        'timeStamp' => 'TimeStamp',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->app) {
            $res['App'] = $this->app;
        }
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->fee) {
            $res['Fee'] = $this->fee;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->scene) {
            $res['Scene'] = $this->scene;
        }
        if (null !== $this->stream) {
            $res['Stream'] = $this->stream;
        }
        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataModule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['App'])) {
            $model->app = $map['App'];
        }
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['Fee'])) {
            $model->fee = $map['Fee'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['Scene'])) {
            $model->scene = $map['Scene'];
        }
        if (isset($map['Stream'])) {
            $model->stream = $map['Stream'];
        }
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }

        return $model;
    }
}
