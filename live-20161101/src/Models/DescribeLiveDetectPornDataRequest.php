<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class DescribeLiveDetectPornDataRequest extends Model
{
    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $endTime;

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
     * @var string
     */
    public $splitBy;
    protected $_name = [
        'domainName' => 'DomainName',
        'startTime'  => 'StartTime',
        'endTime'    => 'EndTime',
        'app'        => 'App',
        'stream'     => 'Stream',
        'fee'        => 'Fee',
        'scene'      => 'Scene',
        'region'     => 'Region',
        'splitBy'    => 'SplitBy',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->app) {
            $res['App'] = $this->app;
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
        if (null !== $this->splitBy) {
            $res['SplitBy'] = $this->splitBy;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLiveDetectPornDataRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['App'])) {
            $model->app = $map['App'];
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
        if (isset($map['SplitBy'])) {
            $model->splitBy = $map['SplitBy'];
        }

        return $model;
    }
}
