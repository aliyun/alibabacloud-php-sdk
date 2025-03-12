<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListOperationCheckRequest;

use AlibabaCloud\Tea\Model;

class operationTaskInstances extends Model
{
    /**
     * @description Cloud asset instance ID.
     *
     * @example r-bp1642ib4bg2bm****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description Region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description Asset vendor. Values:
     *
     * - **ALIYUN**: Alibaba Cloud
     * @example ALIYUN
     *
     * @var string
     */
    public $vendor;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'regionId'   => 'RegionId',
        'vendor'     => 'Vendor',
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
        if (null !== $this->vendor) {
            $res['Vendor'] = $this->vendor;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return operationTaskInstances
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
        if (isset($map['Vendor'])) {
            $model->vendor = $map['Vendor'];
        }

        return $model;
    }
}
