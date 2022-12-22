<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Composer\V20181212\Models;

use AlibabaCloud\Tea\Model;

class EnableFlowResponseBody extends Model
{
    /**
     * @description The status of the workflow. Valid values:
     *
     *   **Enabled**: The workflow is enabled.
     *   **Disabled**: The workflow is disabled.
     *
     * @example Enabled
     *
     * @var string
     */
    public $flowStatus;

    /**
     * @description The ID of the request.
     *
     * @example ADB97A33-50E7-48A5-963D-ACBAE36D0BEC
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the operation was successful. Valid values:
     *
     *   **true**: The operation was successful.
     *   **false**: The operation failed.
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'flowStatus' => 'FlowStatus',
        'requestId'  => 'RequestId',
        'success'    => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->flowStatus) {
            $res['FlowStatus'] = $this->flowStatus;
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
     * @return EnableFlowResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FlowStatus'])) {
            $model->flowStatus = $map['FlowStatus'];
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
