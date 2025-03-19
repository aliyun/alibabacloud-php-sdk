<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models;

use AlibabaCloud\Tea\Model;

class UpdateServiceInstanceAttributesRequest extends Model
{
    /**
     * @description Specifies whether to authorize the service provider to perform O\\&M operations on the service instance.
     *
     * @example true
     *
     * @var bool
     */
    public $enableOperation;

    /**
     * @description The region ID.
     *
     * This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the service instance.
     *
     * You can call the [ListServiceInstances](https://help.aliyun.com/document_detail/396200.html) operation to obtain the ID of the service instance.
     *
     * This parameter is required.
     *
     * @example si-d6ab3a63ccbb4b17xxxx
     *
     * @var string
     */
    public $serviceInstanceId;
    protected $_name = [
        'enableOperation' => 'EnableOperation',
        'regionId' => 'RegionId',
        'serviceInstanceId' => 'ServiceInstanceId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->enableOperation) {
            $res['EnableOperation'] = $this->enableOperation;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->serviceInstanceId) {
            $res['ServiceInstanceId'] = $this->serviceInstanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateServiceInstanceAttributesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnableOperation'])) {
            $model->enableOperation = $map['EnableOperation'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ServiceInstanceId'])) {
            $model->serviceInstanceId = $map['ServiceInstanceId'];
        }

        return $model;
    }
}
