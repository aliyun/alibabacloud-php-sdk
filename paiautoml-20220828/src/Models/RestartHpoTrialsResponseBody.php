<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiAutoML\V20220828\Models;

use AlibabaCloud\Tea\Model;

class RestartHpoTrialsResponseBody extends Model
{
    /**
     * @description Response code.
     *
     * @example INVALID_USER_OR_EXP
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
     * @description Error message.
     *
     * @example Missing \\"user_id\\" in request.
     *
     * @var string
     */
    public $message;

    /**
     * @description Id of the request
     *
     * @example 3F190916-B3E5-5D1E-AD0C-35C0DF105F51
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Restart status of all the trial IDs.
     *
     * @example {
     * }
     * @var mixed[]
     */
    public $results;
    protected $_name = [
        'code'      => 'Code',
        'detail'    => 'Detail',
        'message'   => 'Message',
        'requestId' => 'RequestId',
        'results'   => 'Results',
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
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->results) {
            $res['Results'] = $this->results;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RestartHpoTrialsResponseBody
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
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Results'])) {
            $model->results = $map['Results'];
        }

        return $model;
    }
}
