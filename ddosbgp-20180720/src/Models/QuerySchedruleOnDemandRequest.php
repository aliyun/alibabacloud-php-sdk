<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models;

use AlibabaCloud\Tea\Model;

class QuerySchedruleOnDemandRequest extends Model
{
    /**
     * @description The ID of the on-demand instance.
     *
     * This parameter is required.
     * @example ddosbgp-cn-z2q1qzxb****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The region ID of the on-demand instance.
     *
     * >  You can call the [DescribeRegions](https://help.aliyun.com/document_detail/118703.html) operation to query all regions supported by Anti-DDoS Origin.
     * @example cn-zhangjiakou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'regionId'   => 'RegionId',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QuerySchedruleOnDemandRequest
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

        return $model;
    }
}
