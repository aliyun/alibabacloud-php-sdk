<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20160511\Models;

use AlibabaCloud\Dara\Model;

class QueryDomainListRequest extends Model
{
    /**
     * @var int
     */
    public $deadEndDate;

    /**
     * @var int
     */
    public $deadStartDate;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $domainType;

    /**
     * @var string
     */
    public $endDate;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $orderByType;

    /**
     * @var string
     */
    public $orderKeyType;

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
    public $productDomainType;

    /**
     * @var string
     */
    public $queryType;

    /**
     * @var int
     */
    public $regEndDate;

    /**
     * @var int
     */
    public $regStartDate;

    /**
     * @var string
     */
    public $startDate;

    /**
     * @var string
     */
    public $userClientIp;
    protected $_name = [
        'deadEndDate' => 'DeadEndDate',
        'deadStartDate' => 'DeadStartDate',
        'domainName' => 'DomainName',
        'domainType' => 'DomainType',
        'endDate' => 'EndDate',
        'groupId' => 'GroupId',
        'lang' => 'Lang',
        'orderByType' => 'OrderByType',
        'orderKeyType' => 'OrderKeyType',
        'pageNum' => 'PageNum',
        'pageSize' => 'PageSize',
        'productDomainType' => 'ProductDomainType',
        'queryType' => 'QueryType',
        'regEndDate' => 'RegEndDate',
        'regStartDate' => 'RegStartDate',
        'startDate' => 'StartDate',
        'userClientIp' => 'UserClientIp',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deadEndDate) {
            $res['DeadEndDate'] = $this->deadEndDate;
        }

        if (null !== $this->deadStartDate) {
            $res['DeadStartDate'] = $this->deadStartDate;
        }

        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }

        if (null !== $this->domainType) {
            $res['DomainType'] = $this->domainType;
        }

        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }

        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->orderByType) {
            $res['OrderByType'] = $this->orderByType;
        }

        if (null !== $this->orderKeyType) {
            $res['OrderKeyType'] = $this->orderKeyType;
        }

        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->productDomainType) {
            $res['ProductDomainType'] = $this->productDomainType;
        }

        if (null !== $this->queryType) {
            $res['QueryType'] = $this->queryType;
        }

        if (null !== $this->regEndDate) {
            $res['RegEndDate'] = $this->regEndDate;
        }

        if (null !== $this->regStartDate) {
            $res['RegStartDate'] = $this->regStartDate;
        }

        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }

        if (null !== $this->userClientIp) {
            $res['UserClientIp'] = $this->userClientIp;
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
        if (isset($map['DeadEndDate'])) {
            $model->deadEndDate = $map['DeadEndDate'];
        }

        if (isset($map['DeadStartDate'])) {
            $model->deadStartDate = $map['DeadStartDate'];
        }

        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }

        if (isset($map['DomainType'])) {
            $model->domainType = $map['DomainType'];
        }

        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }

        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['OrderByType'])) {
            $model->orderByType = $map['OrderByType'];
        }

        if (isset($map['OrderKeyType'])) {
            $model->orderKeyType = $map['OrderKeyType'];
        }

        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['ProductDomainType'])) {
            $model->productDomainType = $map['ProductDomainType'];
        }

        if (isset($map['QueryType'])) {
            $model->queryType = $map['QueryType'];
        }

        if (isset($map['RegEndDate'])) {
            $model->regEndDate = $map['RegEndDate'];
        }

        if (isset($map['RegStartDate'])) {
            $model->regStartDate = $map['RegStartDate'];
        }

        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }

        if (isset($map['UserClientIp'])) {
            $model->userClientIp = $map['UserClientIp'];
        }

        return $model;
    }
}
