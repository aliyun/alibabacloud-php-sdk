<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models;

use AlibabaCloud\Tea\Model;

class ModifyRuleRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $customType;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $category;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $statExpress;

    /**
     * @var int
     */
    public $riskLevelId;

    /**
     * @var int
     */
    public $ruleType;

    /**
     * @var string
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
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $contentCategory;

    /**
     * @var string
     */
    public $target;
    protected $_name = [
        'lang'            => 'Lang',
        'id'              => 'Id',
        'customType'      => 'CustomType',
        'name'            => 'Name',
        'category'        => 'Category',
        'content'         => 'Content',
        'statExpress'     => 'StatExpress',
        'riskLevelId'     => 'RiskLevelId',
        'ruleType'        => 'RuleType',
        'productCode'     => 'ProductCode',
        'productId'       => 'ProductId',
        'warnLevel'       => 'WarnLevel',
        'description'     => 'Description',
        'contentCategory' => 'ContentCategory',
        'target'          => 'Target',
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
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->customType) {
            $res['CustomType'] = $this->customType;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->statExpress) {
            $res['StatExpress'] = $this->statExpress;
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
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->contentCategory) {
            $res['ContentCategory'] = $this->contentCategory;
        }
        if (null !== $this->target) {
            $res['Target'] = $this->target;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['CustomType'])) {
            $model->customType = $map['CustomType'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['StatExpress'])) {
            $model->statExpress = $map['StatExpress'];
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ContentCategory'])) {
            $model->contentCategory = $map['ContentCategory'];
        }
        if (isset($map['Target'])) {
            $model->target = $map['Target'];
        }

        return $model;
    }
}
