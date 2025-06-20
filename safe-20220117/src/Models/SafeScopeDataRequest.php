<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Safe\V20220117\Models;

use AlibabaCloud\Dara\Model;

class SafeScopeDataRequest extends Model
{
    /**
     * @var string
     */
    public $authKey;

    /**
     * @var string
     */
    public $authSign;

    /**
     * @var string
     */
    public $category;

    /**
     * @var string
     */
    public $codeList;

    /**
     * @var string
     */
    public $factor;

    /**
     * @var string
     */
    public $groupBy;

    /**
     * @var string
     */
    public $idList;

    /**
     * @var string
     */
    public $item;

    /**
     * @var int
     */
    public $limit;

    /**
     * @var bool
     */
    public $needTotalCount;

    /**
     * @var string
     */
    public $orderBy;

    /**
     * @var string
     */
    public $orderDirection;

    /**
     * @var int
     */
    public $page;

    /**
     * @var string
     */
    public $parentCode;

    /**
     * @var int
     */
    public $parentId;

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
    public $regionNameEn;

    /**
     * @var int
     */
    public $reqTimestamp;

    /**
     * @var string
     */
    public $searchValue;

    /**
     * @var int
     */
    public $type;

    /**
     * @var string
     */
    public $uid;
    protected $_name = [
        'authKey' => 'AuthKey',
        'authSign' => 'AuthSign',
        'category' => 'Category',
        'codeList' => 'CodeList',
        'factor' => 'Factor',
        'groupBy' => 'GroupBy',
        'idList' => 'IdList',
        'item' => 'Item',
        'limit' => 'Limit',
        'needTotalCount' => 'NeedTotalCount',
        'orderBy' => 'OrderBy',
        'orderDirection' => 'OrderDirection',
        'page' => 'Page',
        'parentCode' => 'ParentCode',
        'parentId' => 'ParentId',
        'productCode' => 'ProductCode',
        'productId' => 'ProductId',
        'regionNameEn' => 'RegionNameEn',
        'reqTimestamp' => 'ReqTimestamp',
        'searchValue' => 'SearchValue',
        'type' => 'Type',
        'uid' => 'Uid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authKey) {
            $res['AuthKey'] = $this->authKey;
        }

        if (null !== $this->authSign) {
            $res['AuthSign'] = $this->authSign;
        }

        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }

        if (null !== $this->codeList) {
            $res['CodeList'] = $this->codeList;
        }

        if (null !== $this->factor) {
            $res['Factor'] = $this->factor;
        }

        if (null !== $this->groupBy) {
            $res['GroupBy'] = $this->groupBy;
        }

        if (null !== $this->idList) {
            $res['IdList'] = $this->idList;
        }

        if (null !== $this->item) {
            $res['Item'] = $this->item;
        }

        if (null !== $this->limit) {
            $res['Limit'] = $this->limit;
        }

        if (null !== $this->needTotalCount) {
            $res['NeedTotalCount'] = $this->needTotalCount;
        }

        if (null !== $this->orderBy) {
            $res['OrderBy'] = $this->orderBy;
        }

        if (null !== $this->orderDirection) {
            $res['OrderDirection'] = $this->orderDirection;
        }

        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }

        if (null !== $this->parentCode) {
            $res['ParentCode'] = $this->parentCode;
        }

        if (null !== $this->parentId) {
            $res['ParentId'] = $this->parentId;
        }

        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }

        if (null !== $this->productId) {
            $res['ProductId'] = $this->productId;
        }

        if (null !== $this->regionNameEn) {
            $res['RegionNameEn'] = $this->regionNameEn;
        }

        if (null !== $this->reqTimestamp) {
            $res['ReqTimestamp'] = $this->reqTimestamp;
        }

        if (null !== $this->searchValue) {
            $res['SearchValue'] = $this->searchValue;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->uid) {
            $res['Uid'] = $this->uid;
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
        if (isset($map['AuthKey'])) {
            $model->authKey = $map['AuthKey'];
        }

        if (isset($map['AuthSign'])) {
            $model->authSign = $map['AuthSign'];
        }

        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }

        if (isset($map['CodeList'])) {
            $model->codeList = $map['CodeList'];
        }

        if (isset($map['Factor'])) {
            $model->factor = $map['Factor'];
        }

        if (isset($map['GroupBy'])) {
            $model->groupBy = $map['GroupBy'];
        }

        if (isset($map['IdList'])) {
            $model->idList = $map['IdList'];
        }

        if (isset($map['Item'])) {
            $model->item = $map['Item'];
        }

        if (isset($map['Limit'])) {
            $model->limit = $map['Limit'];
        }

        if (isset($map['NeedTotalCount'])) {
            $model->needTotalCount = $map['NeedTotalCount'];
        }

        if (isset($map['OrderBy'])) {
            $model->orderBy = $map['OrderBy'];
        }

        if (isset($map['OrderDirection'])) {
            $model->orderDirection = $map['OrderDirection'];
        }

        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }

        if (isset($map['ParentCode'])) {
            $model->parentCode = $map['ParentCode'];
        }

        if (isset($map['ParentId'])) {
            $model->parentId = $map['ParentId'];
        }

        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }

        if (isset($map['ProductId'])) {
            $model->productId = $map['ProductId'];
        }

        if (isset($map['RegionNameEn'])) {
            $model->regionNameEn = $map['RegionNameEn'];
        }

        if (isset($map['ReqTimestamp'])) {
            $model->reqTimestamp = $map['ReqTimestamp'];
        }

        if (isset($map['SearchValue'])) {
            $model->searchValue = $map['SearchValue'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }

        return $model;
    }
}
