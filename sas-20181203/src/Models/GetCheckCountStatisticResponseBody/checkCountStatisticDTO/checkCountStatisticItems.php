<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetCheckCountStatisticResponseBody\checkCountStatisticDTO;

use AlibabaCloud\Tea\Model;

class checkCountStatisticItems extends Model
{
    /**
     * @description Cloud product instance ID.
     *
     * @example i-wz9bpxyu6t74qn9g****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description Instance name of the asset.
     *
     * @example launch-advisor-2021****
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description Subtype of the cloud product.
     *
     * @example 0
     *
     * @var int
     */
    public $instanceSubType;

    /**
     * @description The subtype of the cloud product. Values:
     *
     * - When **InstanceType** is **ECS**, this parameter can take the following values:
     * - **INSTANCE**
     * - **DISK**
     * - **SECURITY_GROUP**
     * - When **InstanceType** is **ACR**, this parameter can take the following values:
     * - **REPOSITORY_ENTERPRISE**
     * - **REPOSITORY_PERSON**
     * - When **InstanceType** is **RAM**, this parameter can take the following values:
     * - **ALIAS**
     * - **USER**
     * - **POLICY**
     * - **GROUP**
     * - When **InstanceType** is **WAF**, this parameter can take the following value:
     * - **DOMAIN**
     * - For other **InstanceType** values, this parameter takes the value:
     * - **INSTANCE**
     * @example INSTANCE
     *
     * @var string
     */
    public $instanceSubTypeName;

    /**
     * @description Type of the cloud product. Values:
     * - **0**: ECS (Elastic Compute Service)
     * - **1**: SLB (Server Load Balancer)
     * - **2**: NAT Gateway
     * - **3**: RDS (Relational Database Service) Database
     * - **4**: MongoDB Database
     * - **5**: Redis Database
     * - **6**: Container Image
     * - **7**: Container
     * @example 0
     *
     * @var int
     */
    public $instanceType;

    /**
     * @description The asset type of cloud products. Values:
     * - **ECS**: Elastic Compute Service
     * - **SLB**: Server Load Balancer
     * - **RDS**: Relational Database Service
     * - **MONGODB**: MongoDB Database
     * - **KVSTORE**: Redis Database
     * - **ACR**: Container Registry
     * - **CSK**: CSK
     * - **VPC**: Virtual Private Cloud
     * - **ACTIONTRAIL**: Action Trail
     * - **CDN**: Content Delivery Network
     * - **CAS**: Digital Certificate Management Service (formerly SSL Certificates)
     * - **RDC**: DevOps
     * - **RAM**: Resource Access Management
     * - **DDOS**: Distributed Denial of Service
     * - **WAF**: Web Application Firewall
     * - **OSS**: Object Storage Service
     * - **POLARDB**: POLARDB
     * - **POSTGRESQL**: PostgreSQL
     * - **MSE**: MSE
     * - **NAS**: Network Attached Storage
     * - **SDDP**: Sensitive Data Discovery and Protection
     * - **EIP**: Elastic IP
     * @example ECS
     *
     * @var string
     */
    public $instanceTypeName;

    /**
     * @description Region ID.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionId;

    /**
     * @description Number of risks.
     *
     * @example 22
     *
     * @var int
     */
    public $riskCount;

    /**
     * @description Cloud vendor. Values:
     * - **ALIYUN**: Alibaba Cloud
     * - **TENCENT**: Tencent Cloud
     * - **MICROSOFT**: Azure
     * - **AWS**: Amazon Web Services (AWS)
     * @example ALIYUN
     *
     * @var int
     */
    public $vendor;
    protected $_name = [
        'instanceId'          => 'InstanceId',
        'instanceName'        => 'InstanceName',
        'instanceSubType'     => 'InstanceSubType',
        'instanceSubTypeName' => 'InstanceSubTypeName',
        'instanceType'        => 'InstanceType',
        'instanceTypeName'    => 'InstanceTypeName',
        'regionId'            => 'RegionId',
        'riskCount'           => 'RiskCount',
        'vendor'              => 'Vendor',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->instanceSubType) {
            $res['InstanceSubType'] = $this->instanceSubType;
        }
        if (null !== $this->instanceSubTypeName) {
            $res['InstanceSubTypeName'] = $this->instanceSubTypeName;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->instanceTypeName) {
            $res['InstanceTypeName'] = $this->instanceTypeName;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->riskCount) {
            $res['RiskCount'] = $this->riskCount;
        }
        if (null !== $this->vendor) {
            $res['Vendor'] = $this->vendor;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return checkCountStatisticItems
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['InstanceSubType'])) {
            $model->instanceSubType = $map['InstanceSubType'];
        }
        if (isset($map['InstanceSubTypeName'])) {
            $model->instanceSubTypeName = $map['InstanceSubTypeName'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['InstanceTypeName'])) {
            $model->instanceTypeName = $map['InstanceTypeName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RiskCount'])) {
            $model->riskCount = $map['RiskCount'];
        }
        if (isset($map['Vendor'])) {
            $model->vendor = $map['Vendor'];
        }

        return $model;
    }
}
