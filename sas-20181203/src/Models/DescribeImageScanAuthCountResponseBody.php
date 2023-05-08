<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageScanAuthCountResponseBody\imageScan;
use AlibabaCloud\Tea\Model;

class DescribeImageScanAuthCountResponseBody extends Model
{
    /**
     * @var imageScan
     */
    public $imageScan;

    /**
     * @example 892NYH839-0EDC-4CD0-A2EF-5BD294656C99
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'imageScan' => 'ImageScan',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageScan) {
            $res['ImageScan'] = null !== $this->imageScan ? $this->imageScan->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeImageScanAuthCountResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageScan'])) {
            $model->imageScan = imageScan::fromMap($map['ImageScan']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
