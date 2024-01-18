<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\ApplyNodesRequest;

use AlibabaCloud\Tea\Model;

class instanceTypeModel extends Model
{
    /**
     * @description The instance type of the compute node. The default value is the instance type that was specified when you created the cluster or the last time you added compute nodes.
     *
     * Valid values of N: 1 to 10.
     * @example ecs.n1.tiny
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The maximum hourly price that you can pay for the preemptible node. The value is a floating-point number that supports up to three decimal places.
     *
     * Valid values of N: 1 to 10.
     * @example 0.034
     *
     * @var float
     */
    public $maxPrice;

    /**
     * @description The image ID of the compute node. You must select a Windows image.
     *
     * Valid values of N: 1 to 10.
     * @example win2016_1607_x64_dtc_zh-cn_40G_alibase_20210516.vhd
     *
     * @var string
     */
    public $targetImageId;
    protected $_name = [
        'instanceType'  => 'InstanceType',
        'maxPrice'      => 'MaxPrice',
        'targetImageId' => 'TargetImageId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->maxPrice) {
            $res['MaxPrice'] = $this->maxPrice;
        }
        if (null !== $this->targetImageId) {
            $res['TargetImageId'] = $this->targetImageId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceTypeModel
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['MaxPrice'])) {
            $model->maxPrice = $map['MaxPrice'];
        }
        if (isset($map['TargetImageId'])) {
            $model->targetImageId = $map['TargetImageId'];
        }

        return $model;
    }
}
