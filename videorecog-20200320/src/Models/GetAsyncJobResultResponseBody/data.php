<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videorecog\V20200320\Models\GetAsyncJobResultResponseBody;

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
     * @example 7DFDA846-178B-4ADB-B69A-62C641214D81
     *
     * @var string
     */
    public $jobId;

    /**
     * @example {\"Outputs\":[{\"ImageURL\":\"http://algo-app-aic-vd-cn-shanghai-prod.oss-cn-shanghai.aliyuncs.com/video-cover/2020-03-25-11/pic_4t7zW6R6SUGn4DLF.mp4_2375_1920_1080_96ce5a96b5b16628cd778c035b68356d_beautified.png?Expires=1585136160&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=MDd7BqbivlLRd16MTKbPFQHV3u****\",\"Confidence\":8.426481079120514},{\"ImageURL\":\"http://algo-app-aic-vd-cn-shanghai-prod.oss-cn-shanghai.aliyuncs.com/video-cover/2020-03-25-11/pic_4t7zW6R6SUGn4DLF.mp4_2996_1920_1080_d5df0556bf420242c84fe6f7a45d01e1_beautified.png?Expires=1585136160&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=htaW5G%2BpqPBW%2BEMTe01ckVoGsQ****\",\"Confidence\":6.225726566341124}]}
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
