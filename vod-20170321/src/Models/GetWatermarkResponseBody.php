<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetWatermarkResponseBody\watermarkInfo;
use AlibabaCloud\Tea\Model;

class GetWatermarkResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 25818875-5F78-4A*****F6-D7393642CA58
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The information about the watermark.
     *
     * @var watermarkInfo
     */
    public $watermarkInfo;
    protected $_name = [
        'requestId'     => 'RequestId',
        'watermarkInfo' => 'WatermarkInfo',
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
        if (null !== $this->watermarkInfo) {
            $res['WatermarkInfo'] = null !== $this->watermarkInfo ? $this->watermarkInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetWatermarkResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['WatermarkInfo'])) {
            $model->watermarkInfo = watermarkInfo::fromMap($map['WatermarkInfo']);
        }

        return $model;
    }
}
