<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class CreateDiskRequest extends Model
{
    /**
     * @description 磁盘种类 高效云盘:cloud_efficiency 全闪云盘:cloud_ssd
     *
     * @var string
     */
    public $category;

    /**
     * @description 节点ID
     *
     * @var string
     */
    public $ensRegionId;

    /**
     * @description 实例付费方式，取值 PrePaid:预付费，包年包月 PostPaid:按量付费。目前只支持：PostPaid
     *
     * @var string
     */
    public $instanceChargeType;

    /**
     * @description 磁盘大小,单位GB
     *
     * @var string
     */
    public $size;
    protected $_name = [
        'category'           => 'Category',
        'ensRegionId'        => 'EnsRegionId',
        'instanceChargeType' => 'InstanceChargeType',
        'size'               => 'Size',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->ensRegionId) {
            $res['EnsRegionId'] = $this->ensRegionId;
        }
        if (null !== $this->instanceChargeType) {
            $res['InstanceChargeType'] = $this->instanceChargeType;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDiskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['EnsRegionId'])) {
            $model->ensRegionId = $map['EnsRegionId'];
        }
        if (isset($map['InstanceChargeType'])) {
            $model->instanceChargeType = $map['InstanceChargeType'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        return $model;
    }
}
