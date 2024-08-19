<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models;

use AlibabaCloud\Tea\Model;

class UpdateImageLibFreeInspectionShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $configShrink;

    /**
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'configShrink' => 'Config',
        'regionId'     => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configShrink) {
            $res['Config'] = $this->configShrink;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateImageLibFreeInspectionShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Config'])) {
            $model->configShrink = $map['Config'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
