<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\ApplyNodesRequest;

use AlibabaCloud\Dara\Model;

class instanceTypeModel extends Model
{
    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var float
     */
    public $maxPrice;

    /**
     * @var string
     */
    public $targetImageId;
    protected $_name = [
        'instanceType' => 'InstanceType',
        'maxPrice' => 'MaxPrice',
        'targetImageId' => 'TargetImageId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
