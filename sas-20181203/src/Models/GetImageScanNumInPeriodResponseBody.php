<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\GetImageScanNumInPeriodResponseBody\imageScanData;
use AlibabaCloud\Tea\Model;

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
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageScanData) {
            $res['ImageScanData'] = null !== $this->imageScanData ? $this->imageScanData->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetImageScanNumInPeriodResponseBody
     */
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
