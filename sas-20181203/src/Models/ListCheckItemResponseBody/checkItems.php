<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListCheckItemResponseBody;

use AlibabaCloud\SDK\Sas\V20181203\Models\ListCheckItemResponseBody\checkItems\customConfigs;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListCheckItemResponseBody\checkItems\description;
use AlibabaCloud\Tea\Model;

class checkItems extends Model
{
    /**
     * @description The ID of the check item.
     *
     * @example 21
     *
     * @var int
     */
    public $checkId;

    /**
     * @description The name of the check item.
     *
     * @example Enable deletion protection
     *
     * @var string
     */
    public $checkShowName;

    /**
     * @description The check items.
     *
     * @var customConfigs[]
     */
    public $customConfigs;

    /**
     * @description The description of the check item.
     *
     * @var description
     */
    public $description;

    /**
     * @var int
     */
    public $estimatedCount;

    /**
     * @description The asset subtype of the cloud service. Valid value:
     *
     *   If **InstanceType** is set to **ECS**, this parameter supports the following valid values:
     *
     *   **INSTANCE**
     *   **DISK**
     *   **SECURITY_GROUP**
     *
     *   If **InstanceType** is set to **ACR**, this parameter supports the following valid values:
     *
     *   **REPOSITORY_ENTERPRISE**
     *   **REPOSITORY_PERSON**
     *
     *   If **InstanceType** is set to **RAM**, this parameter supports the following valid values:
     *
     *   **ALIAS**
     *   **USER**
     *   **POLICY**
     *   **GROUP**
     *
     *   If **InstanceType** is set to **WAF**, this parameter supports the following valid values:
     *
     *   **DOMAIN**
     *
     *   If **InstanceType** is set to other values, this parameter supports the following valid values:
     *
     *   **INSTANCE**
     *
     * @example ECS
     *
     * @var string
     */
    public $instanceSubType;

    /**
     * @description The asset type of the cloud service. Valid value:
     *
     *   **ECS**: Elastic Compute Service (ECS)
     *   **SLB**: Server Load Balancer (SLB)
     *   **RDS**: ApsaraDB RDS
     *   **MONGODB**: ApsaraDB for MongoDB (MongoDB)
     *   **KVSTORE**: ApsaraDB for Redis (Redis)
     *   **ACR**: Container Registry
     *   **CSK**: Container Service for Kubernetes (ACK)
     *   **VPC**: Virtual Private Cloud (VPC)
     *   **ACTIONTRAIL**: ActionTrail
     *   **CDN**: Alibaba Cloud CDN (CDN)
     *   **CAS**: Certificate Management Service (formerly SSL Certificates Service)
     *   **RDC**: Apsara Devops
     *   **RAM**: Resource Access Management (RAM)
     *   **DDOS**: Anti-DDoS
     *   **WAF**: Web Application Firewall (WAF)
     *   **OSS**: Object Storage Service (OSS)
     *   **POLARDB**: PolarDB
     *   **POSTGRESQL**: ApsaraDB RDS for PostgreSQL
     *   **MSE**: Microservices Engine (MSE)
     *   **NAS**: Apsara File Storage NAS (NAS)
     *   **SDDP**: Sensitive Data Discovery and Protection (SDDP)
     *   **EIP**: Elastic IP Address (EIP)
     *
     * @example OSS
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The risk level of the check item. Valid value:
     *
     *   **HIGH**
     *   **MEDIUM**
     *   **LOW**
     *
     * @example HIGH
     *
     * @var string
     */
    public $riskLevel;

    /**
     * @description The IDs of the sections associated with the check items.
     *
     * @var int[]
     */
    public $sectionIds;

    /**
     * @description The type of the cloud asset. Valid value:
     *
     *   **0**: an asset provided by Alibaba Cloud
     *   **1**: a third-party cloud asset
     *   **2**: an asset in a data center
     *   **3**, **4**, **5**, and **7**: other cloud asset
     *   **8**: a simple application server
     *
     * @example 0
     *
     * @var string
     */
    public $vendor;
    protected $_name = [
        'checkId'         => 'CheckId',
        'checkShowName'   => 'CheckShowName',
        'customConfigs'   => 'CustomConfigs',
        'description'     => 'Description',
        'estimatedCount'  => 'EstimatedCount',
        'instanceSubType' => 'InstanceSubType',
        'instanceType'    => 'InstanceType',
        'riskLevel'       => 'RiskLevel',
        'sectionIds'      => 'SectionIds',
        'vendor'          => 'Vendor',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkId) {
            $res['CheckId'] = $this->checkId;
        }
        if (null !== $this->checkShowName) {
            $res['CheckShowName'] = $this->checkShowName;
        }
        if (null !== $this->customConfigs) {
            $res['CustomConfigs'] = [];
            if (null !== $this->customConfigs && \is_array($this->customConfigs)) {
                $n = 0;
                foreach ($this->customConfigs as $item) {
                    $res['CustomConfigs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->description) {
            $res['Description'] = null !== $this->description ? $this->description->toMap() : null;
        }
        if (null !== $this->estimatedCount) {
            $res['EstimatedCount'] = $this->estimatedCount;
        }
        if (null !== $this->instanceSubType) {
            $res['InstanceSubType'] = $this->instanceSubType;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
        }
        if (null !== $this->sectionIds) {
            $res['SectionIds'] = $this->sectionIds;
        }
        if (null !== $this->vendor) {
            $res['Vendor'] = $this->vendor;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return checkItems
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckId'])) {
            $model->checkId = $map['CheckId'];
        }
        if (isset($map['CheckShowName'])) {
            $model->checkShowName = $map['CheckShowName'];
        }
        if (isset($map['CustomConfigs'])) {
            if (!empty($map['CustomConfigs'])) {
                $model->customConfigs = [];
                $n                    = 0;
                foreach ($map['CustomConfigs'] as $item) {
                    $model->customConfigs[$n++] = null !== $item ? customConfigs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Description'])) {
            $model->description = description::fromMap($map['Description']);
        }
        if (isset($map['EstimatedCount'])) {
            $model->estimatedCount = $map['EstimatedCount'];
        }
        if (isset($map['InstanceSubType'])) {
            $model->instanceSubType = $map['InstanceSubType'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }
        if (isset($map['SectionIds'])) {
            if (!empty($map['SectionIds'])) {
                $model->sectionIds = $map['SectionIds'];
            }
        }
        if (isset($map['Vendor'])) {
            $model->vendor = $map['Vendor'];
        }

        return $model;
    }
}
