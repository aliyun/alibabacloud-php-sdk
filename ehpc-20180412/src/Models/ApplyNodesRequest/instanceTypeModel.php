<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\ApplyNodesRequest;

use AlibabaCloud\Tea\Model;

class instanceTypeModel extends Model
{
    /**
     * @var float
     */
    public $maxPrice;

    /**
     * @var string
     */
    public $targetImageId;

    /**
     * @var string
     */
    public $instanceType;
    protected $_name = [
        'maxPrice'      => 'MaxPrice',
        'targetImageId' => 'TargetImageId',
        'instanceType'  => 'InstanceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxPrice) {
            $res['MaxPrice'] = $this->maxPrice;
        }
        if (null !== $this->targetImageId) {
            $res['TargetImageId'] = $this->targetImageId;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
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
        if (isset($map['MaxPrice'])) {
            $model->maxPrice = $map['MaxPrice'];
        }
        if (isset($map['TargetImageId'])) {
            $model->targetImageId = $map['TargetImageId'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }

        return $model;
    }
}
