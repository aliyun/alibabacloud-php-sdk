<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models;

use AlibabaCloud\Tea\Model;

class DescribeOnDemandInstanceStatusRequest extends Model
{
    /**
     * @description The mode used to start the on-demand instance. Valid values:
     *
     *   **manual**: The instance is manually started.
     *   **netflow-auto**: The instance is automatically started by using NetFlow that monitors network traffic.
     *
     * @example ddosbgp-cn-z2q1qzxb****
     *
     * @var string[]
     */
    public $instanceIdList;

    /**
     * @description The details of the on-demand instance.
     *
     * @example cn-zhangjiakou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'instanceIdList' => 'InstanceIdList',
        'regionId'       => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceIdList) {
            $res['InstanceIdList'] = $this->instanceIdList;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeOnDemandInstanceStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceIdList'])) {
            if (!empty($map['InstanceIdList'])) {
                $model->instanceIdList = $map['InstanceIdList'];
            }
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
