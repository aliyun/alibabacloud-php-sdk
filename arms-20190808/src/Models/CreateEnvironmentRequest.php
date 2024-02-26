<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateEnvironmentRequest\tags;
use AlibabaCloud\Tea\Model;

class CreateEnvironmentRequest extends Model
{
    /**
     * @description The language. Valid values: zh and en. Default value: zh.
     *
     * @example zh
     *
     * @var string
     */
    public $aliyunLang;

    /**
     * @description The ID of the resource bound to the environment, such as the container ID or VPC ID. For a Cloud environment, specify the region ID.
     *
     * @example c6e9dec475dca4a50a188411d8cbxxx
     *
     * @var string
     */
    public $bindResourceId;

    /**
     * @description The name of the environment.
     *
     * @example env1
     *
     * @var string
     */
    public $environmentName;

    /**
     * @description The subtype of the environment. Valid values:
     *
     *   CS: Container Service for Kubernetes (ACK)
     *   ECS: Elastic Compute Service (ECS)
     *   Cloud: cloud service
     *
     * @example ECS, ACK, etc.
     *
     * @var string
     */
    public $environmentSubType;

    /**
     * @description The type of the environment. Valid values:
     *
     *   CS: Container Service
     *   ECS: Elastic Compute Service
     *   Cloud: cloud service
     *
     * @example CS
     *
     * @var string
     */
    public $environmentType;

    /**
     * @description type of managed:
     * - agent-exproter: maanged agent and exporter. default of prometheus for Cloud.
     * @example none
     *
     * @var string
     */
    public $managedType;

    /**
     * @var string
     */
    public $prometheusInstanceId;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-acfmxyexli2****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The tags of the instance. You can specify this parameter to manage tags for the instance.
     *
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'aliyunLang'           => 'AliyunLang',
        'bindResourceId'       => 'BindResourceId',
        'environmentName'      => 'EnvironmentName',
        'environmentSubType'   => 'EnvironmentSubType',
        'environmentType'      => 'EnvironmentType',
        'managedType'          => 'ManagedType',
        'prometheusInstanceId' => 'PrometheusInstanceId',
        'regionId'             => 'RegionId',
        'resourceGroupId'      => 'ResourceGroupId',
        'tags'                 => 'Tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliyunLang) {
            $res['AliyunLang'] = $this->aliyunLang;
        }
        if (null !== $this->bindResourceId) {
            $res['BindResourceId'] = $this->bindResourceId;
        }
        if (null !== $this->environmentName) {
            $res['EnvironmentName'] = $this->environmentName;
        }
        if (null !== $this->environmentSubType) {
            $res['EnvironmentSubType'] = $this->environmentSubType;
        }
        if (null !== $this->environmentType) {
            $res['EnvironmentType'] = $this->environmentType;
        }
        if (null !== $this->managedType) {
            $res['ManagedType'] = $this->managedType;
        }
        if (null !== $this->prometheusInstanceId) {
            $res['PrometheusInstanceId'] = $this->prometheusInstanceId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateEnvironmentRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliyunLang'])) {
            $model->aliyunLang = $map['AliyunLang'];
        }
        if (isset($map['BindResourceId'])) {
            $model->bindResourceId = $map['BindResourceId'];
        }
        if (isset($map['EnvironmentName'])) {
            $model->environmentName = $map['EnvironmentName'];
        }
        if (isset($map['EnvironmentSubType'])) {
            $model->environmentSubType = $map['EnvironmentSubType'];
        }
        if (isset($map['EnvironmentType'])) {
            $model->environmentType = $map['EnvironmentType'];
        }
        if (isset($map['ManagedType'])) {
            $model->managedType = $map['ManagedType'];
        }
        if (isset($map['PrometheusInstanceId'])) {
            $model->prometheusInstanceId = $map['PrometheusInstanceId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
