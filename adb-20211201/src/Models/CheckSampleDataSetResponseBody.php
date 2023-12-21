<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Tea\Model;

class CheckSampleDataSetResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example 0CE655C3-C211-513D-A42F-D4AE2D1A867C
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The state of the built-in dataset. Valid values:
     *
     *   **SUCCEED**: The dataset is loaded.
     *   **INIT**: The dataset is being loaded.
     *   **FAILED**: The dataset failed to be loaded.
     *   **UNINITIALIZED**: The dataset is not loaded.
     *
     * @example UNINITIALIZED
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'requestId' => 'RequestId',
        'status'    => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
     * @return CheckSampleDataSetResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
