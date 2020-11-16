<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDetectPornDataResponse\detectPornData;

use AlibabaCloud\Tea\Model;

class dataModule extends Model
{
    /**
     * @var string
     */
    public $timeStamp;

    /**
     * @var string
     */
    public $app;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var string
     */
    public $stream;

    /**
     * @var string
     */
    public $fee;

    /**
     * @var string
     */
    public $scene;

    /**
     * @var string
     */
    public $region;

    /**
     * @var int
     */
    public $count;
    protected $_name = [
        'timeStamp' => 'TimeStamp',
        'app'       => 'App',
        'domain'    => 'Domain',
        'stream'    => 'Stream',
        'fee'       => 'Fee',
        'scene'     => 'Scene',
        'region'    => 'Region',
        'count'     => 'Count',
    ];

    public function validate()
    {
        Model::validateRequired('timeStamp', $this->timeStamp, true);
        Model::validateRequired('app', $this->app, true);
        Model::validateRequired('domain', $this->domain, true);
        Model::validateRequired('stream', $this->stream, true);
        Model::validateRequired('fee', $this->fee, true);
        Model::validateRequired('scene', $this->scene, true);
        Model::validateRequired('region', $this->region, true);
        Model::validateRequired('count', $this->count, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }
        if (null !== $this->app) {
            $res['App'] = $this->app;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->stream) {
            $res['Stream'] = $this->stream;
        }
        if (null !== $this->fee) {
            $res['Fee'] = $this->fee;
        }
        if (null !== $this->scene) {
            $res['Scene'] = $this->scene;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->count) {
            $res['Count'] = $this->count;
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
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }
        if (isset($map['App'])) {
            $model->app = $map['App'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['Stream'])) {
            $model->stream = $map['Stream'];
        }
        if (isset($map['Fee'])) {
            $model->fee = $map['Fee'];
        }
        if (isset($map['Scene'])) {
            $model->scene = $map['Scene'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

        return $model;
    }
}
