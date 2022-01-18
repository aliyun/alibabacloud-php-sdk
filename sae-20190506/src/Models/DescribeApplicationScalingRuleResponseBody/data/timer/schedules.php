<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\DescribeApplicationScalingRuleResponseBody\data\timer;

use AlibabaCloud\Tea\Model;

class schedules extends Model
{
    /**
     * @var string
     */
    public $atTime;

    /**
     * @var int
     */
    public $targetReplicas;
    protected $_name = [
        'atTime'         => 'AtTime',
        'targetReplicas' => 'TargetReplicas',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->atTime) {
            $res['AtTime'] = $this->atTime;
        }
        if (null !== $this->targetReplicas) {
            $res['TargetReplicas'] = $this->targetReplicas;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return schedules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AtTime'])) {
            $model->atTime = $map['AtTime'];
        }
        if (isset($map['TargetReplicas'])) {
            $model->targetReplicas = $map['TargetReplicas'];
        }

        return $model;
    }
}
