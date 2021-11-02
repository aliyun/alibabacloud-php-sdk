<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeInstancesResponseBody;

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
    public $departName;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $instanceDescription;

    /**
     * @var bool
     */
    public $labelsec;

    /**
     * @var int
     */
    public $lastFinishTime;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $odpsRiskLevelName;

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
     * @var bool
     */
    public $protection;

    /**
     * @var int
     */
    public $riskLevelId;

    /**
     * @var string
     */
    public $riskLevelName;

    /**
     * @var string
     */
    public $ruleName;

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
    public $tenantName;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'creationTime'        => 'CreationTime',
        'departName'          => 'DepartName',
        'id'                  => 'Id',
        'instanceDescription' => 'InstanceDescription',
        'labelsec'            => 'Labelsec',
        'lastFinishTime'      => 'LastFinishTime',
        'name'                => 'Name',
        'odpsRiskLevelName'   => 'OdpsRiskLevelName',
        'owner'               => 'Owner',
        'productCode'         => 'ProductCode',
        'productId'           => 'ProductId',
        'protection'          => 'Protection',
        'riskLevelId'         => 'RiskLevelId',
        'riskLevelName'       => 'RiskLevelName',
        'ruleName'            => 'RuleName',
        'sensitive'           => 'Sensitive',
        'sensitiveCount'      => 'SensitiveCount',
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
        if (null !== $this->departName) {
            $res['DepartName'] = $this->departName;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->instanceDescription) {
            $res['InstanceDescription'] = $this->instanceDescription;
        }
        if (null !== $this->labelsec) {
            $res['Labelsec'] = $this->labelsec;
        }
        if (null !== $this->lastFinishTime) {
            $res['LastFinishTime'] = $this->lastFinishTime;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->odpsRiskLevelName) {
            $res['OdpsRiskLevelName'] = $this->odpsRiskLevelName;
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
        if (null !== $this->protection) {
            $res['Protection'] = $this->protection;
        }
        if (null !== $this->riskLevelId) {
            $res['RiskLevelId'] = $this->riskLevelId;
        }
        if (null !== $this->riskLevelName) {
            $res['RiskLevelName'] = $this->riskLevelName;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->sensitive) {
            $res['Sensitive'] = $this->sensitive;
        }
        if (null !== $this->sensitiveCount) {
            $res['SensitiveCount'] = $this->sensitiveCount;
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
        if (isset($map['DepartName'])) {
            $model->departName = $map['DepartName'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['InstanceDescription'])) {
            $model->instanceDescription = $map['InstanceDescription'];
        }
        if (isset($map['Labelsec'])) {
            $model->labelsec = $map['Labelsec'];
        }
        if (isset($map['LastFinishTime'])) {
            $model->lastFinishTime = $map['LastFinishTime'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OdpsRiskLevelName'])) {
            $model->odpsRiskLevelName = $map['OdpsRiskLevelName'];
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
        if (isset($map['Protection'])) {
            $model->protection = $map['Protection'];
        }
        if (isset($map['RiskLevelId'])) {
            $model->riskLevelId = $map['RiskLevelId'];
        }
        if (isset($map['RiskLevelName'])) {
            $model->riskLevelName = $map['RiskLevelName'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['Sensitive'])) {
            $model->sensitive = $map['Sensitive'];
        }
        if (isset($map['SensitiveCount'])) {
            $model->sensitiveCount = $map['SensitiveCount'];
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
