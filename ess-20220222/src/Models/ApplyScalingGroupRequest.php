<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models;

use AlibabaCloud\Tea\Model;

class ApplyScalingGroupRequest extends Model
{
    /**
     * @description The content of the configuration file.
     *
     * This parameter is required.
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
    public $content;

    /**
     * @description Optional. The format of the configuration file. Default value: YAML. Set the value to YAML.
     *
     * @example YAML
     *
     * @var string
     */
    public $format;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'content' => 'Content',
        'format' => 'Format',
        'regionId' => 'RegionId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->format) {
            $res['Format'] = $this->format;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ApplyScalingGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['Format'])) {
            $model->format = $map['Format'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
