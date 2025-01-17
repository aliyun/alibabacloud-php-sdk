<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageScanAuthCountResponseBody\imageScan;

class DescribeImageScanAuthCountResponseBody extends Model
{
    /**
     * @var imageScan
     */
    public $imageScan;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'imageScan' => 'ImageScan',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->imageScan) {
            $this->imageScan->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->imageScan) {
            $res['ImageScan'] = null !== $this->imageScan ? $this->imageScan->toArray($noStream) : $this->imageScan;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
