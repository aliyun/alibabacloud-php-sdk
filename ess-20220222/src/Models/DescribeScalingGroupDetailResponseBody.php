<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models;

use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeScalingGroupDetailResponseBody\scalingGroup;
use AlibabaCloud\Tea\Model;

class DescribeScalingGroupDetailResponseBody extends Model
{
    /**
     * @description The output details of the scaling group of the Elastic Container Instance type. Currently, the output is displayed in a Kubernetes Deployment YAML file.
     *
     * @example apiVersion: apps/v1
     * kind: Deployment
     * metadata:
     * name: nginx-deployment
     * labels:
     * app: nginx
     * spec:
     * replicas: 3
     * selector:
     * matchLabels:
     * app: nginx
     * template:
     * metadata:
     * labels:
     * app: nginx
     * annotations:
     * k8s.aliyun.com/eip-bandwidth: 10
     * k8s.aliyun.com/eci-with-eip: true
     * spec:
     * containers:
     * - name: nginx
     * image: nginx:1.14.2
     * ports:
     * - containerPort: 80
     *
     * @var string
     */
    public $output;

    /**
     * @description The request ID.
     *
     * @example 473469C7-AA6F-4DC5-B3DB-A3DC0DE3****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The scaling group.
     *
     * @var scalingGroup
     */
    public $scalingGroup;
    protected $_name = [
        'output' => 'Output',
        'requestId' => 'RequestId',
        'scalingGroup' => 'ScalingGroup',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->output) {
            $res['Output'] = $this->output;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->scalingGroup) {
            $res['ScalingGroup'] = null !== $this->scalingGroup ? $this->scalingGroup->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeScalingGroupDetailResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Output'])) {
            $model->output = $map['Output'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ScalingGroup'])) {
            $model->scalingGroup = scalingGroup::fromMap($map['ScalingGroup']);
        }

        return $model;
    }
}
