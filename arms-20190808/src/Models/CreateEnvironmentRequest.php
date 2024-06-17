<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateEnvironmentRequest\tags;
use AlibabaCloud\Tea\Model;

class CreateEnvironmentRequest extends Model
{
    /**
     * @description The language. Default value: zh.
     *
     * Valid values:
     *
     *   en
     *
     * .
     *
     *   zh
     *
     * .
     * @example zh
     *
     * @var string
     */
    public $aliyunLang;

    /**
     * @description The ID of the resource bound to the environment, such as the container ID or VPC ID. For a Cloud environment, specify the region ID.
     *
     * This parameter is required.
     * @example c6e9dec475dca4a50a188411d8cbxxx
     *
     * @var string
     */
    public $bindResourceId;

    /**
     * @description The name of the environment.
     *
     * This parameter is required.
     * @example env1
     *
     * @var string
     */
    public $environmentName;

    /**
     * @description The subtype of the environment. Valid values:
     *
     *   CS: ACK
     *   ECS: ECS
     *   Cloud: cloud service
     *
     * This parameter is required.
     * @example ECS, ACK, etc.
     *
     * @var string
     */
    public $environmentSubType;

    /**
     * @description The type of the environment. Valid values:
     *
     *   CS: ACK
     *   ECS: ECS
     *   Cloud: cloud service
     *
     * This parameter is required.
     * @example CS
     *
     * @var string
     */
    public $environmentType;

    /**
     * @description The payable resource plan. Valid values:
     *
     *   If the EnvironmentType parameter is set to CS, set the value to CS_Basic or CS_Pro. Default value: CS_Basic.
     *   Otherwise, leave the parameter empty.
     *
     * @example CS_Basic
     *
     * @var string
     */
    public $feePackage;

    /**
     * @description 环境绑定的grafana工作区id。传空时，表示使用默认的共享grafana。
     *
     * @var string
     */
    public $grafanaWorkspaceId;

    /**
     * @var bool
     */
    public $initEnvironment;

    /**
     * @description Specifies whether agents or exporters are managed. Valid values:
     *
     *   none: No. By default, no managed agents or exporters are provided for ACK clusters.
     *   agent: Agents are managed. By default, managed agents are provided for ASK clusters, ACS clusters, and ACK One clusters.
     *   agent-exporter: Agents and exporters are managed. By default, managed agents and exporters are provided for cloud services.
     *
     * @example none
     *
     * @var string
     */
    public $managedType;

    /**
     * @description The ID of the Prometheus instance. If no Prometheus instance is created, call the InitEnvironment operation.
     *
     * @example c6e9dec475dca4a50a188411d8cbxxx
     *
     * @var string
     */
    public $prometheusInstanceId;

    /**
     * @description The region ID.
     *
     * This parameter is required.
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
        'feePackage'           => 'FeePackage',
        'grafanaWorkspaceId'   => 'GrafanaWorkspaceId',
        'initEnvironment'      => 'InitEnvironment',
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
        if (null !== $this->feePackage) {
            $res['FeePackage'] = $this->feePackage;
        }
        if (null !== $this->grafanaWorkspaceId) {
            $res['GrafanaWorkspaceId'] = $this->grafanaWorkspaceId;
        }
        if (null !== $this->initEnvironment) {
            $res['InitEnvironment'] = $this->initEnvironment;
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
        if (isset($map['FeePackage'])) {
            $model->feePackage = $map['FeePackage'];
        }
        if (isset($map['GrafanaWorkspaceId'])) {
            $model->grafanaWorkspaceId = $map['GrafanaWorkspaceId'];
        }
        if (isset($map['InitEnvironment'])) {
            $model->initEnvironment = $map['InitEnvironment'];
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
