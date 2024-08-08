<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiAutoML\V20220828\Models;

use AlibabaCloud\Tea\Model;

class CreateHpoExperimentResponseBody extends Model
{
    /**
     * @description The HTTP status code. The status code 200 indicates that the request was successful.
     *
     * @example INVALID_INPUT_PARAMS
     *
     * @var string
     */
    public $code;

    /**
     * @description Detailed information of the failure.
     *
     * @var string[]
     */
    public $detail;

    /**
     * @description Id of the request
     *
     * @example sORVEck
     *
     * @var string
     */
    public $experimentId;

    /**
     * @description The error message returned.
     *
     * @example Missing \\"user_id\\" in request.
     *
     * @var string
     */
    public $message;

    /**
     * @description The request ID.
     *
     * @example 3F190916-B3E5-5D1E-AD0C-35C0DF105F51
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'code'         => 'Code',
        'detail'       => 'Detail',
        'experimentId' => 'ExperimentId',
        'message'      => 'Message',
        'requestId'    => 'RequestId',
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
        if (null !== $this->experimentId) {
            $res['ExperimentId'] = $this->experimentId;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateHpoExperimentResponseBody
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
        if (isset($map['ExperimentId'])) {
            $model->experimentId = $map['ExperimentId'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
