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
    public $acl;

    /**
     * @var int
     */
    public $lastFinishTime;

    /**
     * @var string
     */
    public $owner;

    /**
     * @var string
     */
    public $tenantName;

    /**
     * @var bool
     */
    public $protection;

    /**
     * @var string
     */
    public $departName;

    /**
     * @var bool
     */
    public $labelsec;

    /**
     * @var int
     */
    public $riskLevelId;

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
    public $totalCount;

    /**
     * @var string
     */
    public $instanceDescription;

    /**
     * @var string
     */
    public $ruleName;

    /**
     * @var bool
     */
    public $sensitive;

    /**
     * @var string
     */
    public $riskLevelName;

    /**
     * @var string
     */
    public $odpsRiskLevelName;

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
    protected $_name = [
        'creationTime'        => 'CreationTime',
        'acl'                 => 'Acl',
        'lastFinishTime'      => 'LastFinishTime',
        'owner'               => 'Owner',
        'tenantName'          => 'TenantName',
        'protection'          => 'Protection',
        'departName'          => 'DepartName',
        'labelsec'            => 'Labelsec',
        'riskLevelId'         => 'RiskLevelId',
        'productId'           => 'ProductId',
        'name'                => 'Name',
        'totalCount'          => 'TotalCount',
        'instanceDescription' => 'InstanceDescription',
        'ruleName'            => 'RuleName',
        'sensitive'           => 'Sensitive',
        'riskLevelName'       => 'RiskLevelName',
        'odpsRiskLevelName'   => 'OdpsRiskLevelName',
        'sensitiveCount'      => 'SensitiveCount',
        'id'                  => 'Id',
        'productCode'         => 'ProductCode',
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
        if (null !== $this->acl) {
            $res['Acl'] = $this->acl;
        }
        if (null !== $this->lastFinishTime) {
            $res['LastFinishTime'] = $this->lastFinishTime;
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->tenantName) {
            $res['TenantName'] = $this->tenantName;
        }
        if (null !== $this->protection) {
            $res['Protection'] = $this->protection;
        }
        if (null !== $this->departName) {
            $res['DepartName'] = $this->departName;
        }
        if (null !== $this->labelsec) {
            $res['Labelsec'] = $this->labelsec;
        }
        if (null !== $this->riskLevelId) {
            $res['RiskLevelId'] = $this->riskLevelId;
        }
        if (null !== $this->productId) {
            $res['ProductId'] = $this->productId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->instanceDescription) {
            $res['InstanceDescription'] = $this->instanceDescription;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->sensitive) {
            $res['Sensitive'] = $this->sensitive;
        }
        if (null !== $this->riskLevelName) {
            $res['RiskLevelName'] = $this->riskLevelName;
        }
        if (null !== $this->odpsRiskLevelName) {
            $res['OdpsRiskLevelName'] = $this->odpsRiskLevelName;
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
        if (isset($map['Acl'])) {
            $model->acl = $map['Acl'];
        }
        if (isset($map['LastFinishTime'])) {
            $model->lastFinishTime = $map['LastFinishTime'];
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }
        if (isset($map['TenantName'])) {
            $model->tenantName = $map['TenantName'];
        }
        if (isset($map['Protection'])) {
            $model->protection = $map['Protection'];
        }
        if (isset($map['DepartName'])) {
            $model->departName = $map['DepartName'];
        }
        if (isset($map['Labelsec'])) {
            $model->labelsec = $map['Labelsec'];
        }
        if (isset($map['RiskLevelId'])) {
            $model->riskLevelId = $map['RiskLevelId'];
        }
        if (isset($map['ProductId'])) {
            $model->productId = $map['ProductId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['InstanceDescription'])) {
            $model->instanceDescription = $map['InstanceDescription'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['Sensitive'])) {
            $model->sensitive = $map['Sensitive'];
        }
        if (isset($map['RiskLevelName'])) {
            $model->riskLevelName = $map['RiskLevelName'];
        }
        if (isset($map['OdpsRiskLevelName'])) {
            $model->odpsRiskLevelName = $map['OdpsRiskLevelName'];
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

        return $model;
    }
}
