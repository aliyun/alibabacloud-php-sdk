<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class SetDataShareInstanceResponseBody extends Model
{
    /**
     * @description The error message returned if the operation fails.
     *
     * @example error message
     *
     * @var string
     */
    public $errMessage;

    /**
     * @description The ID of the request.
     *
     * @example B4CAF581-2AC7-41AD-8940-D5**********
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The state of the operation. Valid values:
     *
     *   **success**: The operation is successful.
     *   **failed**: The operation fails.
     *
     * @example success
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'errMessage' => 'ErrMessage',
        'requestId'  => 'RequestId',
        'status'     => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errMessage) {
            $res['ErrMessage'] = $this->errMessage;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetDataShareInstanceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrMessage'])) {
            $model->errMessage = $map['ErrMessage'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
