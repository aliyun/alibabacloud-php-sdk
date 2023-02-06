<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListServiceInstancesResponseBody\serviceInstances;

use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListServiceInstancesResponseBody\serviceInstances\service\serviceInfos;
use AlibabaCloud\Tea\Model;

class service extends Model
{
    /**
     * @var string
     */
    public $deployMetadata;

    /**
     * @example ros
     *
     * @var string
     */
    public $deployType;

    /**
     * @example 2021-05-21T00:00:00Z
     *
     * @var string
     */
    public $publishTime;

    /**
     * @example service-0e6fca6a51a54420****
     *
     * @var string
     */
    public $serviceId;

    /**
     * @var serviceInfos[]
     */
    public $serviceInfos;

    /**
     * @example private
     *
     * @var string
     */
    public $serviceType;

    /**
     * @example Online
     *
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $supplierName;

    /**
     * @example http://example.com
     *
     * @var string
     */
    public $supplierUrl;

    /**
     * @example 1.0
     *
     * @var string
     */
    public $version;

    /**
     * @var string
     */
    public $versionName;
    protected $_name = [
        'deployMetadata' => 'DeployMetadata',
        'deployType'     => 'DeployType',
        'publishTime'    => 'PublishTime',
        'serviceId'      => 'ServiceId',
        'serviceInfos'   => 'ServiceInfos',
        'serviceType'    => 'ServiceType',
        'status'         => 'Status',
        'supplierName'   => 'SupplierName',
        'supplierUrl'    => 'SupplierUrl',
        'version'        => 'Version',
        'versionName'    => 'VersionName',
    ];

    public function validate()
    {
    }

    public function toMap()
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
        if (null !== $this->serviceId) {
            $res['ServiceId'] = $this->serviceId;
        }
        if (null !== $this->serviceInfos) {
            $res['ServiceInfos'] = [];
            if (null !== $this->serviceInfos && \is_array($this->serviceInfos)) {
                $n = 0;
                foreach ($this->serviceInfos as $item) {
                    $res['ServiceInfos'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return service
     */
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
        if (isset($map['ServiceId'])) {
            $model->serviceId = $map['ServiceId'];
        }
        if (isset($map['ServiceInfos'])) {
            if (!empty($map['ServiceInfos'])) {
                $model->serviceInfos = [];
                $n                   = 0;
                foreach ($map['ServiceInfos'] as $item) {
                    $model->serviceInfos[$n++] = null !== $item ? serviceInfos::fromMap($item) : $item;
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
