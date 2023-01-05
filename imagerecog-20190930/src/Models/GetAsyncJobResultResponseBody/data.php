<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imagerecog\V20190930\Models\GetAsyncJobResultResponseBody;

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
     * @example 72CFDC08-3FEF-56AA-91E5-B14DE31C09C2
     *
     * @var string
     */
    public $jobId;

    /**
     * @example {\"tags\":[{\"confidence\":-1,\"value\":\"{\\\"tagInfo\\\": {\\\"humanInfo\\\": [[{\\\"category\\\": \\\"human-real-normal\\\", \\\"score\\\": 0.9690580798778683, \\\"bbox\\\": [77, 280, 431, 569], \\\"cloth_category\\\": \\\"modern\\\", \\\"cloth_category_score\\\": 0.7393399477005005}]], \\\"sceneInfo\\\": [[{\\\"category\\\": \\\"gamescreen-gameeffect\\\", \\\"score\\\": 0.44200169294841274}]], \\\"objectInfo\\\": [null]}}\"}]}
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
