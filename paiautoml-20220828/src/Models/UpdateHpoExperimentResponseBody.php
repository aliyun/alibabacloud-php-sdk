<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiAutoML\V20220828\Models;

use AlibabaCloud\Tea\Model;

class UpdateHpoExperimentResponseBody extends Model
{
    /**
     * @description Error code.
     *
     * @example SUCCESS
     *
     * @var string
     */
    public $code;

    /**
     * @description Extra error information.
     *
     * @example {}
     *
     * @var mixed[]
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
     * @description The ID of the request.
     *
     * @example 3F190916-B3E5-5D1E-AD0C-35C0DF105F51
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'code'      => 'Code',
        'detail'    => 'Detail',
        'message'   => 'Message',
        'requestId' => 'RequestId',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateHpoExperimentResponseBody
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

        return $model;
    }
}
