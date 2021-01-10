<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\Tea\Model;

class CountDeviceBrandsRequest extends Model
{
    /**
     * @var int
     */
    public $deviceBrandId;

    /**
     * @var string
     */
    public $deviceBrand;

    /**
     * @var string
     */
    public $projectId;
    protected $_name = [
        'deviceBrandId' => 'DeviceBrandId',
        'deviceBrand'   => 'DeviceBrand',
        'projectId'     => 'ProjectId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceBrandId) {
            $res['DeviceBrandId'] = $this->deviceBrandId;
        }
        if (null !== $this->deviceBrand) {
            $res['DeviceBrand'] = $this->deviceBrand;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CountDeviceBrandsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceBrandId'])) {
            $model->deviceBrandId = $map['DeviceBrandId'];
        }
        if (isset($map['DeviceBrand'])) {
            $model->deviceBrand = $map['DeviceBrand'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        return $model;
    }
}
