<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models;

use AlibabaCloud\Tea\Model;

class QueryTradeMarkApplicationsRequest extends Model
{
    /**
     * @var string
     */
    public $tmName;

    /**
     * @var int
     */
    public $pageNum;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $materialName;

    /**
     * @var string
     */
    public $tmNumber;

    /**
     * @var string
     */
    public $orderId;

    /**
     * @var int
     */
    public $status;

    /**
     * @var int
     */
    public $supplementStatus;

    /**
     * @var string
     */
    public $sortOrder;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $intentionBizId;

    /**
     * @var int
     */
    public $hidden;

    /**
     * @var int
     */
    public $productType;

    /**
     * @var string
     */
    public $logisticsNo;

    /**
     * @var string
     */
    public $classificationCode;

    /**
     * @var string
     */
    public $sortFiled;
    protected $_name = [
        'tmName'             => 'TmName',
        'pageNum'            => 'PageNum',
        'pageSize'           => 'PageSize',
        'materialName'       => 'MaterialName',
        'tmNumber'           => 'TmNumber',
        'orderId'            => 'OrderId',
        'status'             => 'Status',
        'supplementStatus'   => 'SupplementStatus',
        'sortOrder'          => 'SortOrder',
        'type'               => 'Type',
        'bizId'              => 'BizId',
        'intentionBizId'     => 'IntentionBizId',
        'hidden'             => 'Hidden',
        'productType'        => 'ProductType',
        'logisticsNo'        => 'LogisticsNo',
        'classificationCode' => 'ClassificationCode',
        'sortFiled'          => 'SortFiled',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tmName) {
            $res['TmName'] = $this->tmName;
        }
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->materialName) {
            $res['MaterialName'] = $this->materialName;
        }
        if (null !== $this->tmNumber) {
            $res['TmNumber'] = $this->tmNumber;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->supplementStatus) {
            $res['SupplementStatus'] = $this->supplementStatus;
        }
        if (null !== $this->sortOrder) {
            $res['SortOrder'] = $this->sortOrder;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->intentionBizId) {
            $res['IntentionBizId'] = $this->intentionBizId;
        }
        if (null !== $this->hidden) {
            $res['Hidden'] = $this->hidden;
        }
        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }
        if (null !== $this->logisticsNo) {
            $res['LogisticsNo'] = $this->logisticsNo;
        }
        if (null !== $this->classificationCode) {
            $res['ClassificationCode'] = $this->classificationCode;
        }
        if (null !== $this->sortFiled) {
            $res['SortFiled'] = $this->sortFiled;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryTradeMarkApplicationsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TmName'])) {
            $model->tmName = $map['TmName'];
        }
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['MaterialName'])) {
            $model->materialName = $map['MaterialName'];
        }
        if (isset($map['TmNumber'])) {
            $model->tmNumber = $map['TmNumber'];
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SupplementStatus'])) {
            $model->supplementStatus = $map['SupplementStatus'];
        }
        if (isset($map['SortOrder'])) {
            $model->sortOrder = $map['SortOrder'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['IntentionBizId'])) {
            $model->intentionBizId = $map['IntentionBizId'];
        }
        if (isset($map['Hidden'])) {
            $model->hidden = $map['Hidden'];
        }
        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }
        if (isset($map['LogisticsNo'])) {
            $model->logisticsNo = $map['LogisticsNo'];
        }
        if (isset($map['ClassificationCode'])) {
            $model->classificationCode = $map['ClassificationCode'];
        }
        if (isset($map['SortFiled'])) {
            $model->sortFiled = $map['SortFiled'];
        }

        return $model;
    }
}
