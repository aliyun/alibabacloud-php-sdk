<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\QueryTraceAbJobListResponseBody;

use AlibabaCloud\SDK\ICE\V20201109\Models\QueryTraceAbJobListResponseBody\data\input;
use AlibabaCloud\SDK\ICE\V20201109\Models\QueryTraceAbJobListResponseBody\data\output;
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
     * @var input
     */
    public $input;

    /**
     * @example bfb786c639894f4d80648792021eff90
     *
     * @var string
     */
    public $jobId;

    /**
     * @example 2
     *
     * @var int
     */
    public $level;

    /**
     * @var output
     */
    public $output;

    /**
     * @example {"Code":"success","Message":"ok"}
     *
     * @var string
     */
    public $result;

    /**
     * @example success
     *
     * @var string
     */
    public $status;

    /**
     * @example ****437bd2b51105d07b12a9****
     *
     * @var string
     */
    public $traceMediaId;

    /**
     * @example 123
     *
     * @var string
     */
    public $userData;

    /**
     * @example 13466932****
     *
     * @var int
     */
    public $userId;
    protected $_name = [
        'gmtCreate'    => 'GmtCreate',
        'gmtModified'  => 'GmtModified',
        'input'        => 'Input',
        'jobId'        => 'JobId',
        'level'        => 'Level',
        'output'       => 'Output',
        'result'       => 'Result',
        'status'       => 'Status',
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
        if (null !== $this->input) {
            $res['Input'] = null !== $this->input ? $this->input->toMap() : null;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }
        if (null !== $this->output) {
            $res['Output'] = null !== $this->output ? $this->output->toMap() : null;
        }
        if (null !== $this->result) {
            $res['Result'] = $this->result;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['Input'])) {
            $model->input = input::fromMap($map['Input']);
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }
        if (isset($map['Output'])) {
            $model->output = output::fromMap($map['Output']);
        }
        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
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
