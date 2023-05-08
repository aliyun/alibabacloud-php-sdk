<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetCloudAssetSummaryResponseBody\groupedFields;

use AlibabaCloud\Tea\Model;

class cloudAssetSummaryMetas extends Model
{
    /**
     * @description The subtype of the cloud service.
     *
     * @example 0
     *
     * @var int
     */
    public $assetSubType;

    /**
     * @description The type of the cloud service. Valid values:
     *
     *   **0**: Elastic Compute Service (ECS)
     *   **1**: Server Load Balancer (SLB)
     *   **3**: ApsaraDB RDS
     *   **4**: ApsaraDB for MongoDB (MongoDB)
     *   **5**: ApsaraDB for Redis (Redis)
     *   **6**: Container Registry
     *   **8**: Container Service for Kubernetes (ACK)
     *   **9**: Virtual Private Cloud (VPC)
     *   **11**: ActionTrail
     *   **12**: Alibaba Cloud CDN (CDN)
     *   **13**: Certificate Management Service (formerly SSL Certificates Service)
     *   **14**: Apsara Devops
     *   **15**: Resource Access Management (RAM)
     *   **16**: Anti-DDoS
     *   **17**: Web Application Firewall (WAF)
     *   **18**: Object Storage Service (OSS)
     *   **19**: PolarDB
     *   **20**: ApsaraDB RDS for PostgreSQL
     *   **21**: Microservices Engine (MSE)
     *   **22**: Apsara File Storage NAS (NAS)
     *   **23**: Data Security Center (DSC)
     *   **24**: Elastic IP Address (EIP)
     *   **25**: IDaaS EIAM
     *   **26**: PolarDB-X
     *   **27**: Elasticsearch
     *
     * @example 16
     *
     * @var int
     */
    public $assetType;

    /**
     * @description The total number of cloud service instances of this type.
     *
     * @example 16
     *
     * @var int
     */
    public $instanceCount;

    /**
     * @description The total number of cloud service instances that are at risk of this type.
     *
     * @example 5
     *
     * @var int
     */
    public $instanceRiskCount;
    protected $_name = [
        'assetSubType'      => 'AssetSubType',
        'assetType'         => 'AssetType',
        'instanceCount'     => 'InstanceCount',
        'instanceRiskCount' => 'InstanceRiskCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->assetSubType) {
            $res['AssetSubType'] = $this->assetSubType;
        }
        if (null !== $this->assetType) {
            $res['AssetType'] = $this->assetType;
        }
        if (null !== $this->instanceCount) {
            $res['InstanceCount'] = $this->instanceCount;
        }
        if (null !== $this->instanceRiskCount) {
            $res['InstanceRiskCount'] = $this->instanceRiskCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cloudAssetSummaryMetas
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AssetSubType'])) {
            $model->assetSubType = $map['AssetSubType'];
        }
        if (isset($map['AssetType'])) {
            $model->assetType = $map['AssetType'];
        }
        if (isset($map['InstanceCount'])) {
            $model->instanceCount = $map['InstanceCount'];
        }
        if (isset($map['InstanceRiskCount'])) {
            $model->instanceRiskCount = $map['InstanceRiskCount'];
        }

        return $model;
    }
}
