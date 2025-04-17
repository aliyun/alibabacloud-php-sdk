<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;

class UpdateWatermarkRequest extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $watermarkConfig;

    /**
     * @var string
     */
    public $watermarkId;
    protected $_name = [
        'name' => 'Name',
        'watermarkConfig' => 'WatermarkConfig',
        'watermarkId' => 'WatermarkId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->watermarkConfig) {
            $res['WatermarkConfig'] = $this->watermarkConfig;
        }

        if (null !== $this->watermarkId) {
            $res['WatermarkId'] = $this->watermarkId;
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
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['WatermarkConfig'])) {
            $model->watermarkConfig = $map['WatermarkConfig'];
        }

        if (isset($map['WatermarkId'])) {
            $model->watermarkId = $map['WatermarkId'];
        }

        return $model;
    }
}
