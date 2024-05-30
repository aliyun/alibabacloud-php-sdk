<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videoenhan\V20200320\Models\GetAsyncJobResultResponseBody;

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
     * @example paramsIllegal
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @example 49E2CC28-ED1D-4CC5-854D-7D0AE2B20976
     *
     * @var string
     */
    public $jobId;

    /**
     * @example {\\"VideoUrl\\":\\"http://algo-app-aic-vd-cn-shanghai-prod.oss-cn-shanghai.aliyuncs.com/video-super-resolution/2020-03-26-02/55%3A59-XFLsuEKpPxleHl4n.mp4?Expires=1585193159&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=OqsxMwAKsFVjPO%2Brgw%2BpXHIm6v****\\"}
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
