<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Tea\Model;

class DeleteUserResponseBody extends Model
{
    /**
     * @description Request ID.
     *
     * @example DC4E1E63-B337-44F8-8C22-6F00DF67E2C3
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Returns the execution result of the interface. Possible values:
     *
     * - true: Execution succeeded
     * - false: Execution failed
     *
     * @example true
     *
     * @var bool
     */
    public $result;

    /**
     * @description Indicates whether the request was successful. Possible values:
     * - true: The request was successful - false: The request failed
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'requestId' => 'RequestId',
        'result' => 'Result',
        'success' => 'Success',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->result) {
            $res['Result'] = $this->result;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteUserResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
