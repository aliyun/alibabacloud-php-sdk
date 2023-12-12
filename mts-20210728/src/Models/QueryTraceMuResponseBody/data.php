<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20210728\Models\QueryTraceMuResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 1527441300
     *
     * @var int
     */
    public $gmtCreate;

    /**
     * @example 1527441300
     *
     * @var int
     */
    public $gmtModified;

    /**
     * @example bfb786c639894f4d80648792021e****
     *
     * @var string
     */
    public $jobId;

    /**
     * @example 437bd2b516ffda105d07b12a9a82****
     *
     * @var string
     */
    public $mediaId;

    /**
     * @example {"Bucket":"ivison-test","Location":"oss-cn-shanghai","Object":"out/test.m3u8"}
     *
     * @var string
     */
    public $output;

    /**
     * @example Success
     *
     * @var string
     */
    public $status;

    /**
     * @example 平头哥半导体
     *
     * @var string
     */
    public $trace;

    /**
     * @example 65
     *
     * @var int
     */
    public $traceId;

    /**
     * @example {"uid":134669327666****}
     *
     * @var string
     */
    public $userData;

    /**
     * @example 1346693276669150
     *
     * @var int
     */
    public $userId;
    protected $_name = [
        'gmtCreate'   => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'jobId'       => 'JobId',
        'mediaId'     => 'MediaId',
        'output'      => 'Output',
        'status'      => 'Status',
        'trace'       => 'Trace',
        'traceId'     => 'TraceId',
        'userData'    => 'UserData',
        'userId'      => 'UserId',
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
        if (null !== $this->mediaId) {
            $res['MediaId'] = $this->mediaId;
        }
        if (null !== $this->output) {
            $res['Output'] = $this->output;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->trace) {
            $res['Trace'] = $this->trace;
        }
        if (null !== $this->traceId) {
            $res['TraceId'] = $this->traceId;
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
        if (isset($map['MediaId'])) {
            $model->mediaId = $map['MediaId'];
        }
        if (isset($map['Output'])) {
            $model->output = $map['Output'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Trace'])) {
            $model->trace = $map['Trace'];
        }
        if (isset($map['TraceId'])) {
            $model->traceId = $map['TraceId'];
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
