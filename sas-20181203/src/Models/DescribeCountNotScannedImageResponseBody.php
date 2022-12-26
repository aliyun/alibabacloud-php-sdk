<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeCountNotScannedImageResponseBody extends Model
{
    /**
     * @example 28
     *
     * @var int
     */
    public $notScannedCnt;

    /**
     * @example 24A20733-10A0-4AF6-BE6B-E3322413BB68
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'notScannedCnt' => 'NotScannedCnt',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->notScannedCnt) {
            $res['NotScannedCnt'] = $this->notScannedCnt;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCountNotScannedImageResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NotScannedCnt'])) {
            $model->notScannedCnt = $map['NotScannedCnt'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
