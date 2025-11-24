<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig\extraConfiguration\adaptiveXdsConfiguration;

use AlibabaCloud\Dara\Model;

class egressHpaCpu extends Model
{
    /**
     * @var int
     */
    public $targetAverageUtilization;
    protected $_name = [
        'targetAverageUtilization' => 'TargetAverageUtilization',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->targetAverageUtilization) {
            $res['TargetAverageUtilization'] = $this->targetAverageUtilization;
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
        if (isset($map['TargetAverageUtilization'])) {
            $model->targetAverageUtilization = $map['TargetAverageUtilization'];
        }

        return $model;
    }
}
