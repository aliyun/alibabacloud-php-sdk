<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\Tea\Model;

class ListDeviceBrandsRequest extends Model
{
    /**
     * @var string
     */
    public $projectId;

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
    public $start;

    /**
     * @var string
     */
    public $length;
    protected $_name = [
        'projectId'     => 'ProjectId',
        'deviceBrandId' => 'DeviceBrandId',
        'deviceBrand'   => 'DeviceBrand',
        'start'         => 'Start',
        'length'        => 'Length',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->deviceBrandId) {
            $res['DeviceBrandId'] = $this->deviceBrandId;
        }
        if (null !== $this->deviceBrand) {
            $res['DeviceBrand'] = $this->deviceBrand;
        }
        if (null !== $this->start) {
            $res['Start'] = $this->start;
        }
        if (null !== $this->length) {
            $res['Length'] = $this->length;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDeviceBrandsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['DeviceBrandId'])) {
            $model->deviceBrandId = $map['DeviceBrandId'];
        }
        if (isset($map['DeviceBrand'])) {
            $model->deviceBrand = $map['DeviceBrand'];
        }
        if (isset($map['Start'])) {
            $model->start = $map['Start'];
        }
        if (isset($map['Length'])) {
            $model->length = $map['Length'];
        }

        return $model;
    }
}
