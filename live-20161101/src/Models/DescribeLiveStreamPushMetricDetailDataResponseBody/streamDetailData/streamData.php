<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamPushMetricDetailDataResponseBody\streamDetailData;

use AlibabaCloud\Tea\Model;

class streamData extends Model
{
    /**
     * @description The name of the application.
     *
     * @example app
     *
     * @var string
     */
    public $appName;

    /**
     * @description The total bandwidth consumed by the stream per minute. Unit: bit/s.
     *
     * @example 423304182
     *
     * @var float
     */
    public $reqBps;

    /**
     * @description The total amount of traffic consumed by the stream per minute. Unit: bytes.
     *
     * @example 423304182.66
     *
     * @var int
     */
    public $reqTraffic;

    /**
     * @description The name of the stream.
     *
     * @example test.flv
     *
     * @var string
     */
    public $streamName;

    /**
     * @description The timestamp of the returned data.
     *
     * @example 2022-09-10T20:00:00Z
     *
     * @var string
     */
    public $timeStamp;
    protected $_name = [
        'appName' => 'AppName',
        'reqBps' => 'ReqBps',
        'reqTraffic' => 'ReqTraffic',
        'streamName' => 'StreamName',
        'timeStamp' => 'TimeStamp',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->reqBps) {
            $res['ReqBps'] = $this->reqBps;
        }
        if (null !== $this->reqTraffic) {
            $res['ReqTraffic'] = $this->reqTraffic;
        }
        if (null !== $this->streamName) {
            $res['StreamName'] = $this->streamName;
        }
        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return streamData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['ReqBps'])) {
            $model->reqBps = $map['ReqBps'];
        }
        if (isset($map['ReqTraffic'])) {
            $model->reqTraffic = $map['ReqTraffic'];
        }
        if (isset($map['StreamName'])) {
            $model->streamName = $map['StreamName'];
        }
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }

        return $model;
    }
}
