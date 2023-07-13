<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class DeleteEdgeDriverVersionResponseBody extends Model
{
    /**
     * @description The return code of the operation. A value of Success indicates that the call was successful. Other values indicate that specific errors occurred. For more information, see [Error codes](~~135200~~).
     *
     * @example Success
     *
     * @var string
     */
    public $code;

    /**
     * @description The error message that is returned if the call failed.
     *
     * @example request parameter error
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description The ID of the request.
     *
     * @example J82E857F-T6B9-4FDE-96B8-E4BE97095D1A
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the call was successful. A value of true indicates that the call was successful. A value of false indicates that the call failed.
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'         => 'Code',
        'errorMessage' => 'ErrorMessage',
        'requestId'    => 'RequestId',
        'success'      => 'Success',
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
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
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
     * @return DeleteEdgeDriverVersionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
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
