<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models;

use AlibabaCloud\Tea\Model;

class DescribeRulesRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var int
     */
    public $customType;

    /**
     * @var int
     */
    public $category;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $riskLevelId;

    /**
     * @var int
     */
    public $ruleType;

    /**
     * @var int
     */
    public $productCode;

    /**
     * @var int
     */
    public $productId;

    /**
     * @var int
     */
    public $warnLevel;

    /**
     * @var int
     */
    public $contentCategory;

    /**
     * @var int
     */
    public $status;

    /**
     * @var bool
     */
    public $keywordCompatible;

    /**
     * @var string
     */
    public $groupId;
    protected $_name = [
        'lang'              => 'Lang',
        'pageSize'          => 'PageSize',
        'currentPage'       => 'CurrentPage',
        'customType'        => 'CustomType',
        'category'          => 'Category',
        'name'              => 'Name',
        'riskLevelId'       => 'RiskLevelId',
        'ruleType'          => 'RuleType',
        'productCode'       => 'ProductCode',
        'productId'         => 'ProductId',
        'warnLevel'         => 'WarnLevel',
        'contentCategory'   => 'ContentCategory',
        'status'            => 'Status',
        'keywordCompatible' => 'KeywordCompatible',
        'groupId'           => 'GroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->customType) {
            $res['CustomType'] = $this->customType;
        }
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->riskLevelId) {
            $res['RiskLevelId'] = $this->riskLevelId;
        }
        if (null !== $this->ruleType) {
            $res['RuleType'] = $this->ruleType;
        }
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }
        if (null !== $this->productId) {
            $res['ProductId'] = $this->productId;
        }
        if (null !== $this->warnLevel) {
            $res['WarnLevel'] = $this->warnLevel;
        }
        if (null !== $this->contentCategory) {
            $res['ContentCategory'] = $this->contentCategory;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->keywordCompatible) {
            $res['KeywordCompatible'] = $this->keywordCompatible;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRulesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['CustomType'])) {
            $model->customType = $map['CustomType'];
        }
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RiskLevelId'])) {
            $model->riskLevelId = $map['RiskLevelId'];
        }
        if (isset($map['RuleType'])) {
            $model->ruleType = $map['RuleType'];
        }
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }
        if (isset($map['ProductId'])) {
            $model->productId = $map['ProductId'];
        }
        if (isset($map['WarnLevel'])) {
            $model->warnLevel = $map['WarnLevel'];
        }
        if (isset($map['ContentCategory'])) {
            $model->contentCategory = $map['ContentCategory'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['KeywordCompatible'])) {
            $model->keywordCompatible = $map['KeywordCompatible'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        return $model;
    }
}
