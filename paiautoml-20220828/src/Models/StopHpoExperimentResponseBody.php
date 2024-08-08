<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiAutoML\V20220828\Models;

use AlibabaCloud\Tea\Model;

class StopHpoExperimentResponseBody extends Model
{
    /**
     * @description Response code.
     *
     * @example INVALID_INPUT_PARAMS
     *
     * @var string
     */
    public $code;

    /**
     * @description Extra error information.
     *
     * @var string[]
     */
    public $detail;

    /**
     * @description Experiment ID
     *
     * @example sHpITOH
     *
     * @var string
     */
    public $expId;

    /**
     * @description Error message.
     *
     * @example Missing \\"user_id\\" in request.
     *
     * @var string
     */
    public $message;

    /**
     * @description The ID of the request.
     *
     * @example 071A904D-5A49-597F-9F69-81C7701D04AC
     *
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'code'      => 'Code',
        'detail'    => 'Detail',
        'expId'     => 'ExpId',
        'message'   => 'Message',
        'requestId' => 'RequestId',
        'status'    => 'Status',
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
        if (null !== $this->detail) {
            $res['Detail'] = $this->detail;
        }
        if (null !== $this->expId) {
            $res['ExpId'] = $this->expId;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StopHpoExperimentResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Detail'])) {
            $model->detail = $map['Detail'];
        }
        if (isset($map['ExpId'])) {
            $model->expId = $map['ExpId'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
