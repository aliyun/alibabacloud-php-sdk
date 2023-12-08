<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class RefreshAssetsRequest extends Model
{
    /**
     * @description The type of the asset that you want to synchronize. Valid values:
     *
     *   **cloud_product**: Alibaba Cloud service
     *   **ecs**: Elastic Compute Service (ECS) instance
     *   **container_image**: container image
     *
     * @example cloud_product
     *
     * @var string
     */
    public $assetType;

    /**
     * @description The subtype of the cloud service.
     *
     * >  The following list describes the subtypes of cloud services.
     * @example 0
     *
     * @var int
     */
    public $cloudAssetSubType;

    /**
     * @description The type of the cloud service. Valid values:
     *
     *   **0**: ECS
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
     *
     * @example 0
     *
     * @var int
     */
    public $cloudAssetType;

    /**
     * @description The type of the server. Valid values:
     *
     *   **0**: an asset provided by Alibaba Cloud
     *   **1**: a third-party cloud asset
     *   **2**: an asset in a data center
     *   **3**, **4**, **5**, and **7**: an asset provided by another cloud
     *   **8**: a lightweight asset
     *
     * @example 0
     *
     * @var int
     */
    public $vendor;
    protected $_name = [
        'assetType'         => 'AssetType',
        'cloudAssetSubType' => 'CloudAssetSubType',
        'cloudAssetType'    => 'CloudAssetType',
        'vendor'            => 'Vendor',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->assetType) {
            $res['AssetType'] = $this->assetType;
        }
        if (null !== $this->cloudAssetSubType) {
            $res['CloudAssetSubType'] = $this->cloudAssetSubType;
        }
        if (null !== $this->cloudAssetType) {
            $res['CloudAssetType'] = $this->cloudAssetType;
        }
        if (null !== $this->vendor) {
            $res['Vendor'] = $this->vendor;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RefreshAssetsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AssetType'])) {
            $model->assetType = $map['AssetType'];
        }
        if (isset($map['CloudAssetSubType'])) {
            $model->cloudAssetSubType = $map['CloudAssetSubType'];
        }
        if (isset($map['CloudAssetType'])) {
            $model->cloudAssetType = $map['CloudAssetType'];
        }
        if (isset($map['Vendor'])) {
            $model->vendor = $map['Vendor'];
        }

        return $model;
    }
}
