<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeCountScannedImageResponseBody extends Model
{
    /**
     * @example 3F4236AB-7070-538D-85EB-98EBFE6C****
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 11
     *
     * @var int
     */
    public $scannedCount;
    protected $_name = [
        'requestId'    => 'RequestId',
        'scannedCount' => 'ScannedCount',
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
        if (null !== $this->scannedCount) {
            $res['ScannedCount'] = $this->scannedCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCountScannedImageResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ScannedCount'])) {
            $model->scannedCount = $map['ScannedCount'];
        }

        return $model;
    }
}
