<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeVpcHavsInstancesResponseBody\vpcHavsInstances\vpcHavsInstance\havsInstances;

use AlibabaCloud\Tea\Model;

class havsInstance extends Model
{
    /**
     * @var string
     */
    public $ecsInstanceId;

    /**
     * @var string
     */
    public $reason;
    protected $_name = [
        'ecsInstanceId' => 'EcsInstanceId',
        'reason'        => 'Reason',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ecsInstanceId) {
            $res['EcsInstanceId'] = $this->ecsInstanceId;
        }
        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return havsInstance
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EcsInstanceId'])) {
            $model->ecsInstanceId = $map['EcsInstanceId'];
        }
        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }

        return $model;
    }
}
