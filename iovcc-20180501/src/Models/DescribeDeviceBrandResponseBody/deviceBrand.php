<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models\DescribeDeviceBrandResponseBody;

use AlibabaCloud\Tea\Model;

class deviceBrand extends Model
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

    /**
     * @var string
     */
    public $manufacture;

    /**
     * @var string
     */
    public $description;
    protected $_name = [
        'deviceBrandId' => 'DeviceBrandId',
        'deviceBrand'   => 'DeviceBrand',
        'projectId'     => 'ProjectId',
        'manufacture'   => 'Manufacture',
        'description'   => 'Description',
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
        if (null !== $this->manufacture) {
            $res['Manufacture'] = $this->manufacture;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return deviceBrand
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
        if (isset($map['Manufacture'])) {
            $model->manufacture = $map['Manufacture'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        return $model;
    }
}
