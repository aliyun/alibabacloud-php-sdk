<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20260120\Models;

use AlibabaCloud\Dara\Model;

class ListDataMaskingColumnsRequest extends Model
{
    /**
     * @var string
     */
    public $columnName;

    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var string
     */
    public $dbName;

    /**
     * @var string
     */
    public $engineType;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $maskingStatus;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $productCode;

    /**
     * @var int
     */
    public $productId;

    /**
     * @var string
     */
    public $productIds;

    /**
     * @var int
     */
    public $riskLeveLId;

    /**
     * @var string
     */
    public $riskLevelIds;

    /**
     * @var string
     */
    public $tableName;

    /**
     * @var int
     */
    public $templateId;

    /**
     * @var string
     */
    public $templateRuleIds;
    protected $_name = [
        'columnName' => 'ColumnName',
        'currentPage' => 'CurrentPage',
        'dbName' => 'DbName',
        'engineType' => 'EngineType',
        'instanceId' => 'InstanceId',
        'lang' => 'Lang',
        'maskingStatus' => 'MaskingStatus',
        'pageSize' => 'PageSize',
        'productCode' => 'ProductCode',
        'productId' => 'ProductId',
        'productIds' => 'ProductIds',
        'riskLeveLId' => 'RiskLeveLId',
        'riskLevelIds' => 'RiskLevelIds',
        'tableName' => 'TableName',
        'templateId' => 'TemplateId',
        'templateRuleIds' => 'TemplateRuleIds',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->columnName) {
            $res['ColumnName'] = $this->columnName;
        }

        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }

        if (null !== $this->engineType) {
            $res['EngineType'] = $this->engineType;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->maskingStatus) {
            $res['MaskingStatus'] = $this->maskingStatus;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }

        if (null !== $this->productId) {
            $res['ProductId'] = $this->productId;
        }

        if (null !== $this->productIds) {
            $res['ProductIds'] = $this->productIds;
        }

        if (null !== $this->riskLeveLId) {
            $res['RiskLeveLId'] = $this->riskLeveLId;
        }

        if (null !== $this->riskLevelIds) {
            $res['RiskLevelIds'] = $this->riskLevelIds;
        }

        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }

        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }

        if (null !== $this->templateRuleIds) {
            $res['TemplateRuleIds'] = $this->templateRuleIds;
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
        if (isset($map['ColumnName'])) {
            $model->columnName = $map['ColumnName'];
        }

        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }

        if (isset($map['EngineType'])) {
            $model->engineType = $map['EngineType'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['MaskingStatus'])) {
            $model->maskingStatus = $map['MaskingStatus'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }

        if (isset($map['ProductId'])) {
            $model->productId = $map['ProductId'];
        }

        if (isset($map['ProductIds'])) {
            $model->productIds = $map['ProductIds'];
        }

        if (isset($map['RiskLeveLId'])) {
            $model->riskLeveLId = $map['RiskLeveLId'];
        }

        if (isset($map['RiskLevelIds'])) {
            $model->riskLevelIds = $map['RiskLevelIds'];
        }

        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }

        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        if (isset($map['TemplateRuleIds'])) {
            $model->templateRuleIds = $map['TemplateRuleIds'];
        }

        return $model;
    }
}
