<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeTablesResponseBody;

use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeTablesResponseBody\items\ruleList;
use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @var int
     */
    public $creationTime;

    /**
     * @var string
     */
    public $owner;

    /**
     * @var string
     */
    public $sensitiveRatio;

    /**
     * @var string
     */
    public $tenantName;

    /**
     * @var int
     */
    public $riskLevelId;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $productId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $instanceId;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var string
     */
    public $instanceDescription;

    /**
     * @var bool
     */
    public $sensitive;

    /**
     * @var string
     */
    public $riskLevelName;

    /**
     * @var int
     */
    public $sensitiveCount;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $productCode;

    /**
     * @var ruleList[]
     */
    public $ruleList;
    protected $_name = [
        'creationTime'        => 'CreationTime',
        'owner'               => 'Owner',
        'sensitiveRatio'      => 'SensitiveRatio',
        'tenantName'          => 'TenantName',
        'riskLevelId'         => 'RiskLevelId',
        'instanceName'        => 'InstanceName',
        'productId'           => 'ProductId',
        'name'                => 'Name',
        'instanceId'          => 'InstanceId',
        'totalCount'          => 'TotalCount',
        'instanceDescription' => 'InstanceDescription',
        'sensitive'           => 'Sensitive',
        'riskLevelName'       => 'RiskLevelName',
        'sensitiveCount'      => 'SensitiveCount',
        'id'                  => 'Id',
        'productCode'         => 'ProductCode',
        'ruleList'            => 'RuleList',
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
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->sensitiveRatio) {
            $res['SensitiveRatio'] = $this->sensitiveRatio;
        }
        if (null !== $this->tenantName) {
            $res['TenantName'] = $this->tenantName;
        }
        if (null !== $this->riskLevelId) {
            $res['RiskLevelId'] = $this->riskLevelId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->productId) {
            $res['ProductId'] = $this->productId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->instanceDescription) {
            $res['InstanceDescription'] = $this->instanceDescription;
        }
        if (null !== $this->sensitive) {
            $res['Sensitive'] = $this->sensitive;
        }
        if (null !== $this->riskLevelName) {
            $res['RiskLevelName'] = $this->riskLevelName;
        }
        if (null !== $this->sensitiveCount) {
            $res['SensitiveCount'] = $this->sensitiveCount;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
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
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }
        if (isset($map['SensitiveRatio'])) {
            $model->sensitiveRatio = $map['SensitiveRatio'];
        }
        if (isset($map['TenantName'])) {
            $model->tenantName = $map['TenantName'];
        }
        if (isset($map['RiskLevelId'])) {
            $model->riskLevelId = $map['RiskLevelId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['ProductId'])) {
            $model->productId = $map['ProductId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['InstanceDescription'])) {
            $model->instanceDescription = $map['InstanceDescription'];
        }
        if (isset($map['Sensitive'])) {
            $model->sensitive = $map['Sensitive'];
        }
        if (isset($map['RiskLevelName'])) {
            $model->riskLevelName = $map['RiskLevelName'];
        }
        if (isset($map['SensitiveCount'])) {
            $model->sensitiveCount = $map['SensitiveCount'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
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

        return $model;
    }
}
