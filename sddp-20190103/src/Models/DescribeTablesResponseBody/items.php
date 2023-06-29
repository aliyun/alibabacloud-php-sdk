<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeTablesResponseBody;

use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeTablesResponseBody\items\ruleList;
use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @description The point in time when the table was created. Unit: milliseconds.
     *
     * @example 1536751124000
     *
     * @var int
     */
    public $creationTime;

    /**
     * @description The ID of the table.
     *
     * @example 222
     *
     * @var int
     */
    public $id;

    /**
     * @description The description of the data asset.
     *
     * @example Description 1
     *
     * @var string
     */
    public $instanceDescription;

    /**
     * @description The ID of the data asset to which the table belongs.
     *
     * @example 1
     *
     * @var int
     */
    public $instanceId;

    /**
     * @description The name of the data asset to which the table belongs.
     *
     * @example Data Asset 1
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The name of the table.
     *
     * @example gxdata
     *
     * @var string
     */
    public $name;

    /**
     * @description The Alibaba Cloud account to which the table belongs.
     *
     * @example dtdep-239-******
     *
     * @var string
     */
    public $owner;

    /**
     * @description The name of the service to which the table belongs. Valid values include **MaxCompute, OSS, ADS, OTS, and RDS**. For more information about the types of data assets from which DSC can scan for sensitive data, see [Supported data assets](~~212906~~).
     *
     * @example MaxCompute
     *
     * @var string
     */
    public $productCode;

    /**
     * @description The ID of the service to which the table belongs.
     *
     * @example 1
     *
     * @var string
     */
    public $productId;

    /**
     * @description The sensitivity level of the table. Each sensitivity level ID corresponds to a sensitivity level name. Valid values:
     *
     *   **1**: N/A, which indicates that no sensitive data is detected.
     *   **2**: S1, which indicates the low sensitivity level.
     *   **3**: S2, which indicates the medium sensitivity level.
     *   **4**: S3, which indicates the high sensitivity level.
     *   **5**: S4, which indicates the highest sensitivity level.
     *
     * @example 2
     *
     * @var int
     */
    public $riskLevelId;

    /**
     * @description The name of the sensitivity level for the table. Valid values:
     *
     *   **N/A**: indicates that no sensitive data is detected.
     *   **S1**: indicates the low sensitivity level.
     *   **S2**: indicates the medium sensitivity level.
     *   **S3**: indicates the high sensitivity level.
     *   **S4**: indicates the highest sensitivity level.
     *
     * @example S2
     *
     * @var string
     */
    public $riskLevelName;

    /**
     * @description The information about the sensitive data detection rules that are hit.
     *
     * @var ruleList[]
     */
    public $ruleList;

    /**
     * @description Indicates whether the table contains sensitive fields. Valid values:
     *
     *   **true**: yes
     *   **false**: no
     *
     * @example true
     *
     * @var bool
     */
    public $sensitive;

    /**
     * @description The total number of sensitive fields in the table.
     *
     * @example 32
     *
     * @var int
     */
    public $sensitiveCount;

    /**
     * @description The percentage of sensitive fields in the table.
     *
     * @example 21%
     *
     * @var string
     */
    public $sensitiveRatio;

    /**
     * @description The name of the tenant.
     *
     * @example Tenant 1
     *
     * @var string
     */
    public $tenantName;

    /**
     * @description The total number of fields in the table.
     *
     * @example 1234
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'creationTime'        => 'CreationTime',
        'id'                  => 'Id',
        'instanceDescription' => 'InstanceDescription',
        'instanceId'          => 'InstanceId',
        'instanceName'        => 'InstanceName',
        'name'                => 'Name',
        'owner'               => 'Owner',
        'productCode'         => 'ProductCode',
        'productId'           => 'ProductId',
        'riskLevelId'         => 'RiskLevelId',
        'riskLevelName'       => 'RiskLevelName',
        'ruleList'            => 'RuleList',
        'sensitive'           => 'Sensitive',
        'sensitiveCount'      => 'SensitiveCount',
        'sensitiveRatio'      => 'SensitiveRatio',
        'tenantName'          => 'TenantName',
        'totalCount'          => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->instanceDescription) {
            $res['InstanceDescription'] = $this->instanceDescription;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }
        if (null !== $this->productId) {
            $res['ProductId'] = $this->productId;
        }
        if (null !== $this->riskLevelId) {
            $res['RiskLevelId'] = $this->riskLevelId;
        }
        if (null !== $this->riskLevelName) {
            $res['RiskLevelName'] = $this->riskLevelName;
        }
        if (null !== $this->ruleList) {
            $res['RuleList'] = [];
            if (null !== $this->ruleList && \is_array($this->ruleList)) {
                $n = 0;
                foreach ($this->ruleList as $item) {
                    $res['RuleList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->sensitive) {
            $res['Sensitive'] = $this->sensitive;
        }
        if (null !== $this->sensitiveCount) {
            $res['SensitiveCount'] = $this->sensitiveCount;
        }
        if (null !== $this->sensitiveRatio) {
            $res['SensitiveRatio'] = $this->sensitiveRatio;
        }
        if (null !== $this->tenantName) {
            $res['TenantName'] = $this->tenantName;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['InstanceDescription'])) {
            $model->instanceDescription = $map['InstanceDescription'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }
        if (isset($map['ProductId'])) {
            $model->productId = $map['ProductId'];
        }
        if (isset($map['RiskLevelId'])) {
            $model->riskLevelId = $map['RiskLevelId'];
        }
        if (isset($map['RiskLevelName'])) {
            $model->riskLevelName = $map['RiskLevelName'];
        }
        if (isset($map['RuleList'])) {
            if (!empty($map['RuleList'])) {
                $model->ruleList = [];
                $n               = 0;
                foreach ($map['RuleList'] as $item) {
                    $model->ruleList[$n++] = null !== $item ? ruleList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Sensitive'])) {
            $model->sensitive = $map['Sensitive'];
        }
        if (isset($map['SensitiveCount'])) {
            $model->sensitiveCount = $map['SensitiveCount'];
        }
        if (isset($map['SensitiveRatio'])) {
            $model->sensitiveRatio = $map['SensitiveRatio'];
        }
        if (isset($map['TenantName'])) {
            $model->tenantName = $map['TenantName'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
