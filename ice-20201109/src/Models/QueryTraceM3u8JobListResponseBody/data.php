<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\QueryTraceM3u8JobListResponseBody;

use AlibabaCloud\SDK\ICE\V20201109\Models\QueryTraceM3u8JobListResponseBody\data\output;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 1627357322
     *
     * @var int
     */
    public $gmtCreate;

    /**
     * @example 1627357322
     *
     * @var int
     */
    public $gmtModified;

    /**
     * @example ****d718e2ff4f018ccf419a7b71****
     *
     * @var string
     */
    public $jobId;

    /**
     * @var output
     */
    public $output;

    /**
     * @example success
     *
     * @var string
     */
    public $status;

    /**
     * @example test
     *
     * @var string
     */
    public $trace;

    /**
     * @example ****437bd2b105d07b12a9a82****
     *
     * @var string
     */
    public $traceMediaId;

    /**
     * @example 112
     *
     * @var string
     */
    public $userData;

    /**
     * @example 1346693276****
     *
     * @var int
     */
    public $userId;
    protected $_name = [
        'gmtCreate'    => 'GmtCreate',
        'gmtModified'  => 'GmtModified',
        'jobId'        => 'JobId',
        'output'       => 'Output',
        'status'       => 'Status',
        'trace'        => 'Trace',
        'traceMediaId' => 'TraceMediaId',
        'userData'     => 'UserData',
        'userId'       => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->output) {
            $res['Output'] = null !== $this->output ? $this->output->toMap() : null;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->trace) {
            $res['Trace'] = $this->trace;
        }
        if (null !== $this->traceMediaId) {
            $res['TraceMediaId'] = $this->traceMediaId;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['Output'])) {
            $model->output = output::fromMap($map['Output']);
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Trace'])) {
            $model->trace = $map['Trace'];
        }
        if (isset($map['TraceMediaId'])) {
            $model->traceMediaId = $map['TraceMediaId'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
