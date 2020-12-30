<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\UpdateWatermarkResponseBody\watermarkInfo;
use AlibabaCloud\Tea\Model;

class UpdateWatermarkResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
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
     * @return UpdateWatermarkResponseBody
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
