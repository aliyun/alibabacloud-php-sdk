<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models\GetServiceInstanceResponseBody;

use AlibabaCloud\SDK\ComputeNest\V20210601\Models\GetServiceInstanceResponseBody\service\serviceInfos;
use AlibabaCloud\Tea\Model;

class service extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $publishTime;

    /**
     * @var string
     */
    public $version;

    /**
     * @var string
     */
    public $deployType;

    /**
     * @var string
     */
    public $serviceId;

    /**
     * @var string
     */
    public $supplierUrl;

    /**
     * @var string
     */
    public $serviceType;

    /**
     * @var string
     */
    public $supplierName;

    /**
     * @var serviceInfos[]
     */
    public $serviceInfos;

    /**
     * @var string
     */
    public $deployMetadata;
    protected $_name = [
        'status'         => 'Status',
        'publishTime'    => 'PublishTime',
        'version'        => 'Version',
        'deployType'     => 'DeployType',
        'serviceId'      => 'ServiceId',
        'supplierUrl'    => 'SupplierUrl',
        'serviceType'    => 'ServiceType',
        'supplierName'   => 'SupplierName',
        'serviceInfos'   => 'ServiceInfos',
        'deployMetadata' => 'DeployMetadata',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->publishTime) {
            $res['PublishTime'] = $this->publishTime;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }
        if (null !== $this->deployType) {
            $res['DeployType'] = $this->deployType;
        }
        if (null !== $this->serviceId) {
            $res['ServiceId'] = $this->serviceId;
        }
        if (null !== $this->supplierUrl) {
            $res['SupplierUrl'] = $this->supplierUrl;
        }
        if (null !== $this->serviceType) {
            $res['ServiceType'] = $this->serviceType;
        }
        if (null !== $this->supplierName) {
            $res['SupplierName'] = $this->supplierName;
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
        if (null !== $this->deployMetadata) {
            $res['DeployMetadata'] = $this->deployMetadata;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['PublishTime'])) {
            $model->publishTime = $map['PublishTime'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }
        if (isset($map['DeployType'])) {
            $model->deployType = $map['DeployType'];
        }
        if (isset($map['ServiceId'])) {
            $model->serviceId = $map['ServiceId'];
        }
        if (isset($map['SupplierUrl'])) {
            $model->supplierUrl = $map['SupplierUrl'];
        }
        if (isset($map['ServiceType'])) {
            $model->serviceType = $map['ServiceType'];
        }
        if (isset($map['SupplierName'])) {
            $model->supplierName = $map['SupplierName'];
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
        if (isset($map['DeployMetadata'])) {
            $model->deployMetadata = $map['DeployMetadata'];
        }

        return $model;
    }
}
