<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ListCheckResultRequest extends Model
{
    /**
     * @description The key that you want to use to search for check items in fuzzy match mode.
     *
     * @example OSS
     *
     * @var string
     */
    public $checkKey;

    /**
     * @description The page number.
     *
     * @example 2
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description Specifies whether the check item supports custom parameters. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $customParam;

    /**
     * @description The instance IDs of the cloud services that you want to query. Separate multiple IDs with commas (,).
     *
     * @var string[]
     */
    public $instanceIds;

    /**
     * @description The asset type of the cloud services. Valid values:
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
     * @var string[]
     */
    public $instanceTypes;

    /**
     * @description The language of the content within the request and response. Default value: **zh**. Valid values:
     *
     *   **zh**: Chinese
     *   **en**: English
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description The number of entries per page. Maximum value : 100.
     *
     * @example 50
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The region ID of the instance. Valid values:
     *
     *   **cn-hangzhou**: International
     *   **ap-southeast-1**: Singapore
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The IDs of requirement items.
     *
     * @var int[]
     */
    public $requirementIds;

    /**
     * @description The risk levels of check items. Separate multiple risk levels with commas (,). Valid values:
     *
     *   **HIGH**
     *   **MEDIUM**
     *   **LOW**
     *
     * @var string[]
     */
    public $riskLevels;

    /**
     * @description The types of the conditions based on which check items are sorted. Valid values:
     *
     *   **RISK_LEVEL**: risk level
     *   **STATUS**: status
     *
     * @var string[]
     */
    public $sortTypes;

    /**
     * @description The IDs of standards.
     *
     * @var int[]
     */
    public $standardIds;

    /**
     * @description The statuses of check items. Separate multiple statuses with commas (,). Valid values:
     *
     *   **PASS**
     *   **NOT_PASS**
     *   **CHECKING**
     *   **NOT_CHECK**
     *   **WHITELIST**
     *
     * @var string[]
     */
    public $statuses;

    /**
     * @description The types of check standards.
     *
     * @var string[]
     */
    public $types;

    /**
     * @description The cloud service providers. Valid value:
     *
     *   **ALIYUN**: Alibaba Cloud
     *
     * @var string[]
     */
    public $vendors;
    protected $_name = [
        'checkKey'       => 'CheckKey',
        'currentPage'    => 'CurrentPage',
        'customParam'    => 'CustomParam',
        'instanceIds'    => 'InstanceIds',
        'instanceTypes'  => 'InstanceTypes',
        'lang'           => 'Lang',
        'pageSize'       => 'PageSize',
        'regionId'       => 'RegionId',
        'requirementIds' => 'RequirementIds',
        'riskLevels'     => 'RiskLevels',
        'sortTypes'      => 'SortTypes',
        'standardIds'    => 'StandardIds',
        'statuses'       => 'Statuses',
        'types'          => 'Types',
        'vendors'        => 'Vendors',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkKey) {
            $res['CheckKey'] = $this->checkKey;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->customParam) {
            $res['CustomParam'] = $this->customParam;
        }
        if (null !== $this->instanceIds) {
            $res['InstanceIds'] = $this->instanceIds;
        }
        if (null !== $this->instanceTypes) {
            $res['InstanceTypes'] = $this->instanceTypes;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->requirementIds) {
            $res['RequirementIds'] = $this->requirementIds;
        }
        if (null !== $this->riskLevels) {
            $res['RiskLevels'] = $this->riskLevels;
        }
        if (null !== $this->sortTypes) {
            $res['SortTypes'] = $this->sortTypes;
        }
        if (null !== $this->standardIds) {
            $res['StandardIds'] = $this->standardIds;
        }
        if (null !== $this->statuses) {
            $res['Statuses'] = $this->statuses;
        }
        if (null !== $this->types) {
            $res['Types'] = $this->types;
        }
        if (null !== $this->vendors) {
            $res['Vendors'] = $this->vendors;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListCheckResultRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckKey'])) {
            $model->checkKey = $map['CheckKey'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['CustomParam'])) {
            $model->customParam = $map['CustomParam'];
        }
        if (isset($map['InstanceIds'])) {
            if (!empty($map['InstanceIds'])) {
                $model->instanceIds = $map['InstanceIds'];
            }
        }
        if (isset($map['InstanceTypes'])) {
            if (!empty($map['InstanceTypes'])) {
                $model->instanceTypes = $map['InstanceTypes'];
            }
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RequirementIds'])) {
            if (!empty($map['RequirementIds'])) {
                $model->requirementIds = $map['RequirementIds'];
            }
        }
        if (isset($map['RiskLevels'])) {
            if (!empty($map['RiskLevels'])) {
                $model->riskLevels = $map['RiskLevels'];
            }
        }
        if (isset($map['SortTypes'])) {
            if (!empty($map['SortTypes'])) {
                $model->sortTypes = $map['SortTypes'];
            }
        }
        if (isset($map['StandardIds'])) {
            if (!empty($map['StandardIds'])) {
                $model->standardIds = $map['StandardIds'];
            }
        }
        if (isset($map['Statuses'])) {
            if (!empty($map['Statuses'])) {
                $model->statuses = $map['Statuses'];
            }
        }
        if (isset($map['Types'])) {
            if (!empty($map['Types'])) {
                $model->types = $map['Types'];
            }
        }
        if (isset($map['Vendors'])) {
            if (!empty($map['Vendors'])) {
                $model->vendors = $map['Vendors'];
            }
        }

        return $model;
    }
}
