<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models\ListServiceInstancesResponseBody\serviceInstances;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\ListServiceInstancesResponseBody\serviceInstances\service\commodity;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\ListServiceInstancesResponseBody\serviceInstances\service\serviceInfos;

class service extends Model
{
    /**
     * @var commodity
     */
    public $commodity;

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
    public $serviceId;

    /**
     * @var serviceInfos[]
     */
    public $serviceInfos;

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
     * @var string
     */
    public $version;

    /**
     * @var string
     */
    public $versionName;
    protected $_name = [
        'commodity' => 'Commodity',
        'deployType' => 'DeployType',
        'publishTime' => 'PublishTime',
        'serviceId' => 'ServiceId',
        'serviceInfos' => 'ServiceInfos',
        'serviceType' => 'ServiceType',
        'status' => 'Status',
        'supplierName' => 'SupplierName',
        'supplierUrl' => 'SupplierUrl',
        'version' => 'Version',
        'versionName' => 'VersionName',
    ];

    public function validate()
    {
        if (null !== $this->commodity) {
            $this->commodity->validate();
        }
        if (\is_array($this->serviceInfos)) {
            Model::validateArray($this->serviceInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->commodity) {
            $res['Commodity'] = null !== $this->commodity ? $this->commodity->toArray($noStream) : $this->commodity;
        }

        if (null !== $this->deployType) {
            $res['DeployType'] = $this->deployType;
        }

        if (null !== $this->publishTime) {
            $res['PublishTime'] = $this->publishTime;
        }

        if (null !== $this->serviceId) {
            $res['ServiceId'] = $this->serviceId;
        }

        if (null !== $this->serviceInfos) {
            if (\is_array($this->serviceInfos)) {
                $res['ServiceInfos'] = [];
                $n1 = 0;
                foreach ($this->serviceInfos as $item1) {
                    $res['ServiceInfos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['Commodity'])) {
            $model->commodity = commodity::fromMap($map['Commodity']);
        }

        if (isset($map['DeployType'])) {
            $model->deployType = $map['DeployType'];
        }

        if (isset($map['PublishTime'])) {
            $model->publishTime = $map['PublishTime'];
        }

        if (isset($map['ServiceId'])) {
            $model->serviceId = $map['ServiceId'];
        }

        if (isset($map['ServiceInfos'])) {
            if (!empty($map['ServiceInfos'])) {
                $model->serviceInfos = [];
                $n1 = 0;
                foreach ($map['ServiceInfos'] as $item1) {
                    $model->serviceInfos[$n1] = serviceInfos::fromMap($item1);
                    ++$n1;
                }
            }
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

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        if (isset($map['VersionName'])) {
            $model->versionName = $map['VersionName'];
        }

        return $model;
    }
}
