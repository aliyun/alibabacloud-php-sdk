<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateEnvironmentRequest\tags;

class CreateEnvironmentRequest extends Model
{
    /**
     * @var string
     */
    public $aliyunLang;

    /**
     * @var string
     */
    public $bindResourceId;

    /**
     * @var string
     */
    public $environmentName;

    /**
     * @var string
     */
    public $environmentSubType;

    /**
     * @var string
     */
    public $environmentType;

    /**
     * @var string
     */
    public $feePackage;

    /**
     * @var string
     */
    public $grafanaWorkspaceId;

    /**
     * @var bool
     */
    public $initEnvironment;

    /**
     * @var string
     */
    public $managedType;

    /**
     * @var string
     */
    public $prometheusInstanceId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'aliyunLang' => 'AliyunLang',
        'bindResourceId' => 'BindResourceId',
        'environmentName' => 'EnvironmentName',
        'environmentSubType' => 'EnvironmentSubType',
        'environmentType' => 'EnvironmentType',
        'feePackage' => 'FeePackage',
        'grafanaWorkspaceId' => 'GrafanaWorkspaceId',
        'initEnvironment' => 'InitEnvironment',
        'managedType' => 'ManagedType',
        'prometheusInstanceId' => 'PrometheusInstanceId',
        'regionId' => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'tags' => 'Tags',
    ];

    public function validate()
    {
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1] = tags::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
