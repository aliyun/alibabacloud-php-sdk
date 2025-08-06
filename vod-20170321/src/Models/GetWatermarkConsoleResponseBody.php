<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetWatermarkConsoleResponseBody\watermark;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetWatermarkConsoleResponseBody\watermarkInfo;

class GetWatermarkConsoleResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var watermark
     */
    public $watermark;

    /**
     * @var watermarkInfo
     */
    public $watermarkInfo;
    protected $_name = [
        'requestId' => 'RequestId',
        'watermark' => 'Watermark',
        'watermarkInfo' => 'WatermarkInfo',
    ];

    public function validate()
    {
        if (null !== $this->watermark) {
            $this->watermark->validate();
        }
        if (null !== $this->watermarkInfo) {
            $this->watermarkInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->watermark) {
            $res['Watermark'] = null !== $this->watermark ? $this->watermark->toArray($noStream) : $this->watermark;
        }

        if (null !== $this->watermarkInfo) {
            $res['WatermarkInfo'] = null !== $this->watermarkInfo ? $this->watermarkInfo->toArray($noStream) : $this->watermarkInfo;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Watermark'])) {
            $model->watermark = watermark::fromMap($map['Watermark']);
        }

        if (isset($map['WatermarkInfo'])) {
            $model->watermarkInfo = watermarkInfo::fromMap($map['WatermarkInfo']);
        }

        return $model;
    }
}
