<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models;

use AlibabaCloud\Tea\Model;

class UpdateRuleResponseBody extends Model
{
    /**
     * @description The response code. The value Success indicates that the request was successful. Other values indicate that the request failed. For information about error codes, see Error codes.
     *
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @description The result of the operation.
     *
     * @example true
     *
     * @var bool
     */
    public $data;

    /**
     * @description The error message that is returned if the request failed.
     *
     * @example EventRuleFilterPatternSchemaError
     *
     * @var string
     */
    public $message;

    /**
     * @description The request ID.
     *
     * @example 7439944D-D9FC-5614-B65E-07A468988924
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the operation was successful. If the operation was successful, the value true is returned.
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'code' => 'Code',
        'data' => 'Data',
        'message' => 'Message',
        'requestId' => 'RequestId',
        'success' => 'Success',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateRuleResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
