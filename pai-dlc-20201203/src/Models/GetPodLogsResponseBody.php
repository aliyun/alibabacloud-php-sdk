<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Tea\Model;

class GetPodLogsResponseBody extends Model
{
    /**
     * @example dlc-20210126170216-******
     *
     * @var string
     */
    public $jobId;

    /**
     * @var string[]
     */
    public $logs;

    /**
     * @example dlc-20210126170216-****-chief-0
     *
     * @var string
     */
    public $podId;

    /**
     * @example 94a7cc7c-0033-48b5-85bd-71c63592c268
     *
     * @var string
     */
    public $podUid;

    /**
     * @example 473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'jobId'     => 'JobId',
        'logs'      => 'Logs',
        'podId'     => 'PodId',
        'podUid'    => 'PodUid',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->logs) {
            $res['Logs'] = $this->logs;
        }
        if (null !== $this->podId) {
            $res['PodId'] = $this->podId;
        }
        if (null !== $this->podUid) {
            $res['PodUid'] = $this->podUid;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetPodLogsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['Logs'])) {
            if (!empty($map['Logs'])) {
                $model->logs = $map['Logs'];
            }
        }
        if (isset($map['PodId'])) {
            $model->podId = $map['PodId'];
        }
        if (isset($map['PodUid'])) {
            $model->podUid = $map['PodUid'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
