<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models\ListDeviceBrandsResponseBody;

use AlibabaCloud\Tea\Model;

class deviceBrands extends Model
{
    /**
     * @var int
     */
    public $deviceBrandId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $manufacture;

    /**
     * @var string
     */
    public $deviceBrand;
    protected $_name = [
        'deviceBrandId' => 'DeviceBrandId',
        'description'   => 'Description',
        'projectId'     => 'ProjectId',
        'manufacture'   => 'Manufacture',
        'deviceBrand'   => 'DeviceBrand',
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
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->manufacture) {
            $res['Manufacture'] = $this->manufacture;
        }
        if (null !== $this->deviceBrand) {
            $res['DeviceBrand'] = $this->deviceBrand;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return deviceBrands
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceBrandId'])) {
            $model->deviceBrandId = $map['DeviceBrandId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['Manufacture'])) {
            $model->manufacture = $map['Manufacture'];
        }
        if (isset($map['DeviceBrand'])) {
            $model->deviceBrand = $map['DeviceBrand'];
        }

        return $model;
    }
}
