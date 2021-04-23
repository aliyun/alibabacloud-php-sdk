<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDetectPornDataResponseBody\detectPornData;

use AlibabaCloud\Tea\Model;

class dataModule extends Model
{
    /**
     * @var string
     */
    public $domain;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $app;

    /**
     * @var string
     */
    public $stream;

    /**
     * @var string
     */
    public $timeStamp;

    /**
     * @var int
     */
    public $count;

    /**
     * @var string
     */
    public $scene;

    /**
     * @var string
     */
    public $fee;
    protected $_name = [
        'domain'    => 'Domain',
        'region'    => 'Region',
        'app'       => 'App',
        'stream'    => 'Stream',
        'timeStamp' => 'TimeStamp',
        'count'     => 'Count',
        'scene'     => 'Scene',
        'fee'       => 'Fee',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->app) {
            $res['App'] = $this->app;
        }
        if (null !== $this->stream) {
            $res['Stream'] = $this->stream;
        }
        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->scene) {
            $res['Scene'] = $this->scene;
        }
        if (null !== $this->fee) {
            $res['Fee'] = $this->fee;
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
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['App'])) {
            $model->app = $map['App'];
        }
        if (isset($map['Stream'])) {
            $model->stream = $map['Stream'];
        }
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['Scene'])) {
            $model->scene = $map['Scene'];
        }
        if (isset($map['Fee'])) {
            $model->fee = $map['Fee'];
        }

        return $model;
    }
}
