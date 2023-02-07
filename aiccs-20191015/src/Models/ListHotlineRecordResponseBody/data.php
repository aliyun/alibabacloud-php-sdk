<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\ListHotlineRecordResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 100365558
     *
     * @var string
     */
    public $callId;

    /**
     * @example 100365548
     *
     * @var string
     */
    public $connectionId;

    /**
     * @example 16128694810
     *
     * @var int
     */
    public $endTime;

    /**
     * @example 16128694110
     *
     * @var int
     */
    public $startTime;

    /**
     * @example http://aliccrec-shvpc.oss-cn-shanghai.aliyuncs.com
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'callId'       => 'CallId',
        'connectionId' => 'ConnectionId',
        'endTime'      => 'EndTime',
        'startTime'    => 'StartTime',
        'url'          => 'Url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->callId) {
            $res['CallId'] = $this->callId;
        }
        if (null !== $this->connectionId) {
            $res['ConnectionId'] = $this->connectionId;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CallId'])) {
            $model->callId = $map['CallId'];
        }
        if (isset($map['ConnectionId'])) {
            $model->connectionId = $map['ConnectionId'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
