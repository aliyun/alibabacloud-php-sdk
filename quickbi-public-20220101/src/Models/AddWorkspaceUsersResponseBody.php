<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\AddWorkspaceUsersResponseBody\result;
use AlibabaCloud\Tea\Model;

class AddWorkspaceUsersResponseBody extends Model
{
    /**
     * @description Request ID.
     *
     * @example 7AAB95D7-2E11-4FE2-94BC-858E4FC0C976
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Returns the result of the API execution.
     *
     * @var result
     */
    public $result;

    /**
     * @description Indicates whether the request was successful. Value range:
     * - true: The request was successful. There may be cases where some members are added successfully and others fail. For the reasons of failure, refer to the FailureDetail in the response.
     * - false: The request failed, and no data will be persisted.
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
            $res['Result'] = null !== $this->result ? $this->result->toMap() : null;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddWorkspaceUsersResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Result'])) {
            $model->result = result::fromMap($map['Result']);
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
