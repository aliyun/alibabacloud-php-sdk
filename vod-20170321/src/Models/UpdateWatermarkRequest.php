<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class UpdateWatermarkRequest extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $watermarkId;

    /**
     * @var string
     */
    public $watermarkConfig;
    protected $_name = [
        'name'            => 'Name',
        'watermarkId'     => 'WatermarkId',
        'watermarkConfig' => 'WatermarkConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->watermarkId) {
            $res['WatermarkId'] = $this->watermarkId;
        }
        if (null !== $this->watermarkConfig) {
            $res['WatermarkConfig'] = $this->watermarkConfig;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateWatermarkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['WatermarkId'])) {
            $model->watermarkId = $map['WatermarkId'];
        }
        if (isset($map['WatermarkConfig'])) {
            $model->watermarkConfig = $map['WatermarkConfig'];
        }

        return $model;
    }
}
