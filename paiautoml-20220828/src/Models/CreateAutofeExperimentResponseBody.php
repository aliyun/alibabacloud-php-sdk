<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiAutoML\V20220828\Models;

use AlibabaCloud\Tea\Model;

class CreateAutofeExperimentResponseBody extends Model
{
    /**
     * @example INVALID_INPUT_PARAMS
     *
     * @var string
     */
    public $code;

    /**
     * @example {}
     *
     * @var mixed[]
     */
    public $detail;

    /**
     * @example t8cNdMO
     *
     * @var string
     */
    public $experimentId;

    /**
     * @example Missing \\"user_id\\" in request.
     *
     * @var string
     */
    public $message;

    /**
     * @example 22A1EC4E-15A2-51FF-BFA3-10D6735BAA69
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
     * @return CreateAutofeExperimentResponseBody
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
