<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models;

use AlibabaCloud\Tea\Model;

class UpdateImageLibFreeInspectionRequest extends Model
{
    /**
     * @var int[]
     */
    public $config;

    /**
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'config'   => 'Config',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->config) {
            $res['Config'] = $this->config;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateImageLibFreeInspectionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
