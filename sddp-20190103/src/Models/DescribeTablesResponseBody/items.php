<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeTablesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeTablesResponseBody\items\ruleList;

class items extends Model
{
    /**
     * @var int
     */
    public $creationTime;
    /**
     * @var int
     */
    public $id;
    /**
     * @var string
     */
    public $instanceDescription;
    /**
     * @var int
     */
    public $instanceId;
    /**
     * @var string
     */
    public $instanceName;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $owner;
    /**
     * @var string
     */
    public $productCode;
    /**
     * @var string
     */
    public $productId;
    /**
     * @var int
     */
    public $riskLevelId;
    /**
     * @var string
     */
    public $riskLevelName;
    /**
     * @var ruleList[]
     */
    public $ruleList;
    /**
     * @var bool
     */
    public $sensitive;
    /**
     * @var int
     */
    public $sensitiveCount;
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
        if (\is_array($this->ruleList)) {
            Model::validateArray($this->ruleList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->ruleList)) {
                $res['RuleList'] = [];
                $n1              = 0;
                foreach ($this->ruleList as $item1) {
                    $res['RuleList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1              = 0;
                foreach ($map['RuleList'] as $item1) {
                    $model->ruleList[$n1++] = ruleList::fromMap($item1);
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
