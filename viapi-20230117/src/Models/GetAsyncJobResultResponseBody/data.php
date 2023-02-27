<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Viapi\V20230117\Models\GetAsyncJobResultResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example InvalidParameter
     *
     * @var string
     */
    public $errorCode;

    /**
     * @example product is not active
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @example B6590005-5E7C-4A25-8F97-4479888D8271
     *
     * @var string
     */
    public $jobId;

    /**
     * @example {\"pointCloudUrl\":\"http://virutalbuy-public.oss-cn-hangzhou.aliyuncs.com/MultiviewStereo/83e2fcec-02e1-4522-8680-92f532956e2c/cas_input.ply\"}
     *
     * @var string
     */
    public $result;

    /**
     * @example PROCESS_SUCCESS
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'errorCode'    => 'ErrorCode',
        'errorMessage' => 'ErrorMessage',
        'jobId'        => 'JobId',
        'result'       => 'Result',
        'status'       => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->result) {
            $res['Result'] = $this->result;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
