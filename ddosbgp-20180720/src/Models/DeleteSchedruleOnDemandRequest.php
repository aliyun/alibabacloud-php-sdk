<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models;

use AlibabaCloud\Tea\Model;

class DeleteSchedruleOnDemandRequest extends Model
{
    /**
     * @description The name of the scheduling rule that you want to delete.
     *
     * @example ddosbgp-cn-z2q1qzxb****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The ID of the request.
     *
     * @example cn-zhangjiakou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The region ID of the on-demand instance.
     *
     * >  You can call the [DescribeRegions](~~118703~~) operation to query all regions supported by Anti-DDoS Origin.
     * @example testrule
     *
     * @var string
     */
    public $ruleName;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'regionId'   => 'RegionId',
        'ruleName'   => 'RuleName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteSchedruleOnDemandRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }

        return $model;
    }
}
