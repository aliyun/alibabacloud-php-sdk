<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\GetCloudAssetDetailRequest\cloudAssetInstances;
use AlibabaCloud\Tea\Model;

class GetCloudAssetDetailRequest extends Model
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
     * @description The type of the cloud asset. Valid values:
     *
     *   **0**: Elastic Compute Service (ECS).
     *   **1**: Server Load Balancer (SLB).
     *   **3**: ApsaraDB RDS.
     *   **4**: ApsaraDB for MongoDB.
     *   **5**: ApsaraDB for Redis.
     *   **6**: Container Registry.
     *   **8**: Container Service for Kubernetes.
     *   **9**: Virtual Private Cloud (VPC).
     *   **11**: ActionTrail.
     *   **12**: Alibaba Cloud CDN (CDN).
     *   **13**: Certificate Management Service.
     *   **14**: Apsara Devops.
     *   **15**: Resource Access Management (RAM).
     *   **16**: Anti-DDoS.
     *   **17**: Web Application Firewall (WAF).
     *   **18**: Object Storage Service (OSS).
     *   **19**: PolarDB.
     *   **20**: ApsaraDB RDS for PostgreSQL.
     *   **21**: Microservices Engine (MSE).
     *   **22**: Apsara File Storage NAS (NAS).
     *   **23**: Data Security Center (DSC).
     *   **24**: Elastic IP Address (EIP).
     *   **25**: Identity as a Service (IDaaS)-Employee Identity and Access Management (EIAM).
     *   **26**: PolarDB-X.
     *   **27**: Elasticsearch.
     *
     * @example 14
     *
     * @var int
     */
    public $assetType;

    /**
     * @description The details of the assets.
     *
     * @var cloudAssetInstances[]
     */
    public $cloudAssetInstances;

    /**
     * @description The service provider of the cloud asset. Valid values:
     *
     *   **0**: Alibaba Cloud.
     *   **1**: service provider that is unrecognized.
     *   **2**: data center.
     *   **3**, **4**, **5**, and **7**: third-party service provider.
     *   **8**: simple application server.
     *
     * @example 0
     *
     * @var int
     */
    public $vendor;
    protected $_name = [
        'assetSubType'        => 'AssetSubType',
        'assetType'           => 'AssetType',
        'cloudAssetInstances' => 'CloudAssetInstances',
        'vendor'              => 'Vendor',
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
        if (null !== $this->cloudAssetInstances) {
            $res['CloudAssetInstances'] = [];
            if (null !== $this->cloudAssetInstances && \is_array($this->cloudAssetInstances)) {
                $n = 0;
                foreach ($this->cloudAssetInstances as $item) {
                    $res['CloudAssetInstances'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->vendor) {
            $res['Vendor'] = $this->vendor;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetCloudAssetDetailRequest
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
        if (isset($map['CloudAssetInstances'])) {
            if (!empty($map['CloudAssetInstances'])) {
                $model->cloudAssetInstances = [];
                $n                          = 0;
                foreach ($map['CloudAssetInstances'] as $item) {
                    $model->cloudAssetInstances[$n++] = null !== $item ? cloudAssetInstances::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Vendor'])) {
            $model->vendor = $map['Vendor'];
        }

        return $model;
    }
}
