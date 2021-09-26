<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeDataAssetsResponseBody;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $acl;

    /**
     * @var int
     */
    public $creationTime;

    /**
     * @var string
     */
    public $dataType;

    /**
     * @var string
     */
    public $owner;

    /**
     * @var string
     */
    public $sensitiveRatio;

    /**
     * @var bool
     */
    public $protection;

    /**
     * @var bool
     */
    public $labelsec;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var int
     */
    public $riskLevelId;

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
    public $objectKey;

    /**
     * @var string
     */
    public $riskLevelName;

    /**
     * @var string
     */
    public $odpsRiskLevelName;

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
    public $sensitiveCount;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $productCode;
    protected $_name = [
        'acl'               => 'Acl',
        'creationTime'      => 'CreationTime',
        'dataType'          => 'DataType',
        'owner'             => 'Owner',
        'sensitiveRatio'    => 'SensitiveRatio',
        'protection'        => 'Protection',
        'labelsec'          => 'Labelsec',
        'totalCount'        => 'TotalCount',
        'riskLevelId'       => 'RiskLevelId',
        'ruleName'          => 'RuleName',
        'sensitive'         => 'Sensitive',
        'objectKey'         => 'ObjectKey',
        'riskLevelName'     => 'RiskLevelName',
        'odpsRiskLevelName' => 'OdpsRiskLevelName',
        'productId'         => 'ProductId',
        'name'              => 'Name',
        'sensitiveCount'    => 'SensitiveCount',
        'id'                => 'Id',
        'productCode'       => 'ProductCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acl) {
            $res['Acl'] = $this->acl;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->dataType) {
            $res['DataType'] = $this->dataType;
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->sensitiveRatio) {
            $res['SensitiveRatio'] = $this->sensitiveRatio;
        }
        if (null !== $this->protection) {
            $res['Protection'] = $this->protection;
        }
        if (null !== $this->labelsec) {
            $res['Labelsec'] = $this->labelsec;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->riskLevelId) {
            $res['RiskLevelId'] = $this->riskLevelId;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->sensitive) {
            $res['Sensitive'] = $this->sensitive;
        }
        if (null !== $this->objectKey) {
            $res['ObjectKey'] = $this->objectKey;
        }
        if (null !== $this->riskLevelName) {
            $res['RiskLevelName'] = $this->riskLevelName;
        }
        if (null !== $this->odpsRiskLevelName) {
            $res['OdpsRiskLevelName'] = $this->odpsRiskLevelName;
        }
        if (null !== $this->productId) {
            $res['ProductId'] = $this->productId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
        if (isset($map['Acl'])) {
            $model->acl = $map['Acl'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['DataType'])) {
            $model->dataType = $map['DataType'];
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }
        if (isset($map['SensitiveRatio'])) {
            $model->sensitiveRatio = $map['SensitiveRatio'];
        }
        if (isset($map['Protection'])) {
            $model->protection = $map['Protection'];
        }
        if (isset($map['Labelsec'])) {
            $model->labelsec = $map['Labelsec'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['RiskLevelId'])) {
            $model->riskLevelId = $map['RiskLevelId'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['Sensitive'])) {
            $model->sensitive = $map['Sensitive'];
        }
        if (isset($map['ObjectKey'])) {
            $model->objectKey = $map['ObjectKey'];
        }
        if (isset($map['RiskLevelName'])) {
            $model->riskLevelName = $map['RiskLevelName'];
        }
        if (isset($map['OdpsRiskLevelName'])) {
            $model->odpsRiskLevelName = $map['OdpsRiskLevelName'];
        }
        if (isset($map['ProductId'])) {
            $model->productId = $map['ProductId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
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
