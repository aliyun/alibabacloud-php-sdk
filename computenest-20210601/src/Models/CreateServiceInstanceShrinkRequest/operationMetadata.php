<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models\CreateServiceInstanceShrinkRequest;

use AlibabaCloud\Tea\Model;

class operationMetadata extends Model
{
    /**
     * @description The operation end time.
     *
     * @example 2022-01-28T06:48:56Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The additional information.
     *
     * @example ```json
     * "username": "admin",
     * "password": "******",
     * "vncPassword": "******"
     * ```
     * @var string
     */
    public $extraInfo;

    /**
     * @description Imported resource.
     *
     * @example {   "RegionId": "cn-hangzhou",   "Type": "ResourceIds",   "ResourceIds": {     "ALIYUN::ECS::INSTANCE": ["i-xxx", "i-yyy"],     "ALIYUN::RDS::INSTANCE": ["rm-xxx", "rm-yyy"],     "ALIYUN::VPC::VPC": ["vpc-xxx", "vpc-yyy"],     "ALIYUN::SLB::INSTANCE": ["lb-xxx", "lb-yyy"]   } }
     *
     * @var string
     */
    public $resources;

    /**
     * @description The ID of the service instance.
     *
     * @example si-d6ab3a63ccbb4b17****
     *
     * @var string
     */
    public $serviceInstanceId;

    /**
     * @description The operation start time.
     *
     * @example 2021-12-29T06:48:56Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'endTime'           => 'EndTime',
        'extraInfo'         => 'ExtraInfo',
        'resources'         => 'Resources',
        'serviceInstanceId' => 'ServiceInstanceId',
        'startTime'         => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->extraInfo) {
            $res['ExtraInfo'] = $this->extraInfo;
        }
        if (null !== $this->resources) {
            $res['Resources'] = $this->resources;
        }
        if (null !== $this->serviceInstanceId) {
            $res['ServiceInstanceId'] = $this->serviceInstanceId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return operationMetadata
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['ExtraInfo'])) {
            $model->extraInfo = $map['ExtraInfo'];
        }
        if (isset($map['Resources'])) {
            $model->resources = $map['Resources'];
        }
        if (isset($map['ServiceInstanceId'])) {
            $model->serviceInstanceId = $map['ServiceInstanceId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
