<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceInstanceResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceInstanceResponseBody\service\serviceInfos;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceInstanceResponseBody\service\upgradableServiceInfos;

class service extends Model
{
    /**
     * @var string
     */
    public $deployMetadata;

    /**
     * @var string
     */
    public $deployType;

    /**
     * @var string
     */
    public $publishTime;

    /**
     * @var string
     */
    public $serviceDocUrl;

    /**
     * @var string
     */
    public $serviceId;

    /**
     * @var serviceInfos[]
     */
    public $serviceInfos;

    /**
     * @var string
     */
    public $serviceProductUrl;

    /**
     * @var string
     */
    public $serviceType;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $supplierName;

    /**
     * @var string
     */
    public $supplierUrl;

    /**
     * @var upgradableServiceInfos[]
     */
    public $upgradableServiceInfos;

    /**
     * @var string[]
     */
    public $upgradableServiceVersions;

    /**
     * @var string
     */
    public $version;

    /**
     * @var string
     */
    public $versionName;
    protected $_name = [
        'deployMetadata' => 'DeployMetadata',
        'deployType' => 'DeployType',
        'publishTime' => 'PublishTime',
        'serviceDocUrl' => 'ServiceDocUrl',
        'serviceId' => 'ServiceId',
        'serviceInfos' => 'ServiceInfos',
        'serviceProductUrl' => 'ServiceProductUrl',
        'serviceType' => 'ServiceType',
        'status' => 'Status',
        'supplierName' => 'SupplierName',
        'supplierUrl' => 'SupplierUrl',
        'upgradableServiceInfos' => 'UpgradableServiceInfos',
        'upgradableServiceVersions' => 'UpgradableServiceVersions',
        'version' => 'Version',
        'versionName' => 'VersionName',
    ];

    public function validate()
    {
        if (\is_array($this->serviceInfos)) {
            Model::validateArray($this->serviceInfos);
        }
        if (\is_array($this->upgradableServiceInfos)) {
            Model::validateArray($this->upgradableServiceInfos);
        }
        if (\is_array($this->upgradableServiceVersions)) {
            Model::validateArray($this->upgradableServiceVersions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deployMetadata) {
            $res['DeployMetadata'] = $this->deployMetadata;
        }

        if (null !== $this->deployType) {
            $res['DeployType'] = $this->deployType;
        }

        if (null !== $this->publishTime) {
            $res['PublishTime'] = $this->publishTime;
        }

        if (null !== $this->serviceDocUrl) {
            $res['ServiceDocUrl'] = $this->serviceDocUrl;
        }

        if (null !== $this->serviceId) {
            $res['ServiceId'] = $this->serviceId;
        }

        if (null !== $this->serviceInfos) {
            if (\is_array($this->serviceInfos)) {
                $res['ServiceInfos'] = [];
                $n1 = 0;
                foreach ($this->serviceInfos as $item1) {
                    $res['ServiceInfos'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->serviceProductUrl) {
            $res['ServiceProductUrl'] = $this->serviceProductUrl;
        }

        if (null !== $this->serviceType) {
            $res['ServiceType'] = $this->serviceType;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->supplierName) {
            $res['SupplierName'] = $this->supplierName;
        }

        if (null !== $this->supplierUrl) {
            $res['SupplierUrl'] = $this->supplierUrl;
        }

        if (null !== $this->upgradableServiceInfos) {
            if (\is_array($this->upgradableServiceInfos)) {
                $res['UpgradableServiceInfos'] = [];
                $n1 = 0;
                foreach ($this->upgradableServiceInfos as $item1) {
                    $res['UpgradableServiceInfos'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->upgradableServiceVersions) {
            if (\is_array($this->upgradableServiceVersions)) {
                $res['UpgradableServiceVersions'] = [];
                $n1 = 0;
                foreach ($this->upgradableServiceVersions as $item1) {
                    $res['UpgradableServiceVersions'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        if (null !== $this->versionName) {
            $res['VersionName'] = $this->versionName;
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
        if (isset($map['DeployMetadata'])) {
            $model->deployMetadata = $map['DeployMetadata'];
        }

        if (isset($map['DeployType'])) {
            $model->deployType = $map['DeployType'];
        }

        if (isset($map['PublishTime'])) {
            $model->publishTime = $map['PublishTime'];
        }

        if (isset($map['ServiceDocUrl'])) {
            $model->serviceDocUrl = $map['ServiceDocUrl'];
        }

        if (isset($map['ServiceId'])) {
            $model->serviceId = $map['ServiceId'];
        }

        if (isset($map['ServiceInfos'])) {
            if (!empty($map['ServiceInfos'])) {
                $model->serviceInfos = [];
                $n1 = 0;
                foreach ($map['ServiceInfos'] as $item1) {
                    $model->serviceInfos[$n1++] = serviceInfos::fromMap($item1);
                }
            }
        }

        if (isset($map['ServiceProductUrl'])) {
            $model->serviceProductUrl = $map['ServiceProductUrl'];
        }

        if (isset($map['ServiceType'])) {
            $model->serviceType = $map['ServiceType'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['SupplierName'])) {
            $model->supplierName = $map['SupplierName'];
        }

        if (isset($map['SupplierUrl'])) {
            $model->supplierUrl = $map['SupplierUrl'];
        }

        if (isset($map['UpgradableServiceInfos'])) {
            if (!empty($map['UpgradableServiceInfos'])) {
                $model->upgradableServiceInfos = [];
                $n1 = 0;
                foreach ($map['UpgradableServiceInfos'] as $item1) {
                    $model->upgradableServiceInfos[$n1++] = upgradableServiceInfos::fromMap($item1);
                }
            }
        }

        if (isset($map['UpgradableServiceVersions'])) {
            if (!empty($map['UpgradableServiceVersions'])) {
                $model->upgradableServiceVersions = [];
                $n1 = 0;
                foreach ($map['UpgradableServiceVersions'] as $item1) {
                    $model->upgradableServiceVersions[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        if (isset($map['VersionName'])) {
            $model->versionName = $map['VersionName'];
        }

        return $model;
    }
}
