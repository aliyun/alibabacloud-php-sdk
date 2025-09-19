<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetImageScanNumInPeriodResponseBody\imageScanData;

class GetImageScanNumInPeriodResponseBody extends Model
{
    /**
     * @var imageScanData
     */
    public $imageScanData;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'imageScanData' => 'ImageScanData',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->imageScanData) {
            $this->imageScanData->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->imageScanData) {
            $res['ImageScanData'] = null !== $this->imageScanData ? $this->imageScanData->toArray($noStream) : $this->imageScanData;
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
        if (isset($map['ImageScanData'])) {
            $model->imageScanData = imageScanData::fromMap($map['ImageScanData']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
