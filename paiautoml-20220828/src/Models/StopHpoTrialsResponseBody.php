<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiAutoML\V20220828\Models;

use AlibabaCloud\Tea\Model;

class StopHpoTrialsResponseBody extends Model
{
    /**
     * @description Error code.
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
     * @example failed to stop any trial
     *
     * @var string
     */
    public $message;

    /**
     * @description The request ID.
     *
     * @example 071A904D-5A49-597F-9F69-81C7701D04AC
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The results of trial stop.
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
     * @return StopHpoTrialsResponseBody
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
