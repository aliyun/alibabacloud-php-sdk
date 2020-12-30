<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class GetWatermarkRequest extends Model
{
    /**
     * @var string
     */
    public $watermarkId;
    protected $_name = [
        'watermarkId' => 'WatermarkId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->watermarkId) {
            $res['WatermarkId'] = $this->watermarkId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetWatermarkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['WatermarkId'])) {
            $model->watermarkId = $map['WatermarkId'];
        }

        return $model;
    }
}
