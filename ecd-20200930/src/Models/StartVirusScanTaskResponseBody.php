<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class StartVirusScanTaskResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 9C638DCB-E5A8-423E-9C3B-06BCBB564B11
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the virus scan task.
     *
     * @example 123456
     *
     * @var int
     */
    public $scanTaskId;
    protected $_name = [
        'requestId'  => 'RequestId',
        'scanTaskId' => 'ScanTaskId',
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
        if (null !== $this->scanTaskId) {
            $res['ScanTaskId'] = $this->scanTaskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StartVirusScanTaskResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ScanTaskId'])) {
            $model->scanTaskId = $map['ScanTaskId'];
        }

        return $model;
    }
}
