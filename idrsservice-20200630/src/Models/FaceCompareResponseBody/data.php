<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idrsservice\V20200630\Models\FaceCompareResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @description ID
     *
     * @example 59b0bbfe-929b-4a8c-9833-3ce70b4bad38
     *
     * @var string
     */
    public $id;

    /**
     * @example -
     *
     * @var string
     */
    public $message;

    /**
     * @example T
     *
     * @var string
     */
    public $passed;

    /**
     * @example 59b0bbfe-929b-4a8c-9833-3ce70b4bad38
     *
     * @var string
     */
    public $requestId;

    /**
     * @example completed
     *
     * @var string
     */
    public $status;

    /**
     * @example 60.86
     *
     * @var float
     */
    public $verifyScore;
    protected $_name = [
        'code'        => 'Code',
        'id'          => 'Id',
        'message'     => 'Message',
        'passed'      => 'Passed',
        'requestId'   => 'RequestId',
        'status'      => 'Status',
        'verifyScore' => 'VerifyScore',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->passed) {
            $res['Passed'] = $this->passed;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->verifyScore) {
            $res['VerifyScore'] = $this->verifyScore;
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Passed'])) {
            $model->passed = $map['Passed'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['VerifyScore'])) {
            $model->verifyScore = $map['VerifyScore'];
        }

        return $model;
    }
}
