<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeRulesResponseBody;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $displayName;

    /**
     * @var int
     */
    public $status;

    /**
     * @var int
     */
    public $warnLevel;

    /**
     * @var int
     */
    public $userId;

    /**
     * @var string
     */
    public $statExpress;

    /**
     * @var int
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $riskLevelId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $productId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $target;

    /**
     * @var string
     */
    public $loginName;

    /**
     * @var string
     */
    public $categoryName;

    /**
     * @var string
     */
    public $contentCategory;

    /**
     * @var int
     */
    public $hitTotalCount;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var int
     */
    public $customType;

    /**
     * @var string
     */
    public $riskLevelName;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var int
     */
    public $category;

    /**
     * @var string
     */
    public $majorKey;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $productCode;
    protected $_name = [
        'displayName'     => 'DisplayName',
        'status'          => 'Status',
        'warnLevel'       => 'WarnLevel',
        'userId'          => 'UserId',
        'statExpress'     => 'StatExpress',
        'gmtModified'     => 'GmtModified',
        'riskLevelId'     => 'RiskLevelId',
        'description'     => 'Description',
        'productId'       => 'ProductId',
        'name'            => 'Name',
        'content'         => 'Content',
        'target'          => 'Target',
        'loginName'       => 'LoginName',
        'categoryName'    => 'CategoryName',
        'contentCategory' => 'ContentCategory',
        'hitTotalCount'   => 'HitTotalCount',
        'groupId'         => 'GroupId',
        'customType'      => 'CustomType',
        'riskLevelName'   => 'RiskLevelName',
        'gmtCreate'       => 'GmtCreate',
        'category'        => 'Category',
        'majorKey'        => 'MajorKey',
        'id'              => 'Id',
        'productCode'     => 'ProductCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->warnLevel) {
            $res['WarnLevel'] = $this->warnLevel;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->statExpress) {
            $res['StatExpress'] = $this->statExpress;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->riskLevelId) {
            $res['RiskLevelId'] = $this->riskLevelId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->productId) {
            $res['ProductId'] = $this->productId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->target) {
            $res['Target'] = $this->target;
        }
        if (null !== $this->loginName) {
            $res['LoginName'] = $this->loginName;
        }
        if (null !== $this->categoryName) {
            $res['CategoryName'] = $this->categoryName;
        }
        if (null !== $this->contentCategory) {
            $res['ContentCategory'] = $this->contentCategory;
        }
        if (null !== $this->hitTotalCount) {
            $res['HitTotalCount'] = $this->hitTotalCount;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->customType) {
            $res['CustomType'] = $this->customType;
        }
        if (null !== $this->riskLevelName) {
            $res['RiskLevelName'] = $this->riskLevelName;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->majorKey) {
            $res['MajorKey'] = $this->majorKey;
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
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['WarnLevel'])) {
            $model->warnLevel = $map['WarnLevel'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['StatExpress'])) {
            $model->statExpress = $map['StatExpress'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['RiskLevelId'])) {
            $model->riskLevelId = $map['RiskLevelId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ProductId'])) {
            $model->productId = $map['ProductId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['Target'])) {
            $model->target = $map['Target'];
        }
        if (isset($map['LoginName'])) {
            $model->loginName = $map['LoginName'];
        }
        if (isset($map['CategoryName'])) {
            $model->categoryName = $map['CategoryName'];
        }
        if (isset($map['ContentCategory'])) {
            $model->contentCategory = $map['ContentCategory'];
        }
        if (isset($map['HitTotalCount'])) {
            $model->hitTotalCount = $map['HitTotalCount'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['CustomType'])) {
            $model->customType = $map['CustomType'];
        }
        if (isset($map['RiskLevelName'])) {
            $model->riskLevelName = $map['RiskLevelName'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['MajorKey'])) {
            $model->majorKey = $map['MajorKey'];
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
