<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageScanAuthCountResponseBody\imageScan;
use AlibabaCloud\Tea\Model;

class DescribeImageScanAuthCountResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var imageScan
     */
    public $imageScan;
    protected $_name = [
        'requestId' => 'RequestId',
        'imageScan' => 'ImageScan',
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
        if (null !== $this->imageScan) {
            $res['ImageScan'] = null !== $this->imageScan ? $this->imageScan->toMap() : null;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ImageScan'])) {
            $model->imageScan = imageScan::fromMap($map['ImageScan']);
        }

        return $model;
    }
}
