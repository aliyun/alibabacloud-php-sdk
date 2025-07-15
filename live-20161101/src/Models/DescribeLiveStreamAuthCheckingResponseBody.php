<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class DescribeLiveStreamAuthCheckingResponseBody extends Model
{
    /**
     * @description The error message for failed authentication.
     *
     * @example INVALID AUTH_KEY
     *
     * @var string
     */
    public $description;

    /**
     * @description The request ID.
     *
     * @example 16F08B4E-14FD-5D72-AB2F-BAFA4C4D57F1
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the signed URL is valid. Valid values:
     *
     *   pass: valid.
     *   false: invalid.
     *
     * @example pass
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'description' => 'Description',
        'requestId' => 'RequestId',
        'status' => 'Status',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
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
     * @return DescribeLiveStreamAuthCheckingResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
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
