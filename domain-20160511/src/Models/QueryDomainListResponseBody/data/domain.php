<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20160511\Models\QueryDomainListResponseBody\data;

use AlibabaCloud\Dara\Model;

class domain extends Model
{
    /**
     * @var string
     */
    public $deadDate;

    /**
     * @var int
     */
    public $deadDateLong;

    /**
     * @var string
     */
    public $deadDateStatus;

    /**
     * @var string
     */
    public $domainAuditStatus;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $domainRegType;

    /**
     * @var string
     */
    public $domainStatus;

    /**
     * @var string
     */
    public $domainType;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var bool
     */
    public $premium;

    /**
     * @var string
     */
    public $productId;

    /**
     * @var string
     */
    public $regDate;

    /**
     * @var int
     */
    public $regDateLong;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $saleId;
    protected $_name = [
        'deadDate' => 'DeadDate',
        'deadDateLong' => 'DeadDateLong',
        'deadDateStatus' => 'DeadDateStatus',
        'domainAuditStatus' => 'DomainAuditStatus',
        'domainName' => 'DomainName',
        'domainRegType' => 'DomainRegType',
        'domainStatus' => 'DomainStatus',
        'domainType' => 'DomainType',
        'groupId' => 'GroupId',
        'premium' => 'Premium',
        'productId' => 'ProductId',
        'regDate' => 'RegDate',
        'regDateLong' => 'RegDateLong',
        'remark' => 'Remark',
        'saleId' => 'SaleId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deadDate) {
            $res['DeadDate'] = $this->deadDate;
        }

        if (null !== $this->deadDateLong) {
            $res['DeadDateLong'] = $this->deadDateLong;
        }

        if (null !== $this->deadDateStatus) {
            $res['DeadDateStatus'] = $this->deadDateStatus;
        }

        if (null !== $this->domainAuditStatus) {
            $res['DomainAuditStatus'] = $this->domainAuditStatus;
        }

        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }

        if (null !== $this->domainRegType) {
            $res['DomainRegType'] = $this->domainRegType;
        }

        if (null !== $this->domainStatus) {
            $res['DomainStatus'] = $this->domainStatus;
        }

        if (null !== $this->domainType) {
            $res['DomainType'] = $this->domainType;
        }

        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }

        if (null !== $this->premium) {
            $res['Premium'] = $this->premium;
        }

        if (null !== $this->productId) {
            $res['ProductId'] = $this->productId;
        }

        if (null !== $this->regDate) {
            $res['RegDate'] = $this->regDate;
        }

        if (null !== $this->regDateLong) {
            $res['RegDateLong'] = $this->regDateLong;
        }

        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        if (null !== $this->saleId) {
            $res['SaleId'] = $this->saleId;
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
        if (isset($map['DeadDate'])) {
            $model->deadDate = $map['DeadDate'];
        }

        if (isset($map['DeadDateLong'])) {
            $model->deadDateLong = $map['DeadDateLong'];
        }

        if (isset($map['DeadDateStatus'])) {
            $model->deadDateStatus = $map['DeadDateStatus'];
        }

        if (isset($map['DomainAuditStatus'])) {
            $model->domainAuditStatus = $map['DomainAuditStatus'];
        }

        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }

        if (isset($map['DomainRegType'])) {
            $model->domainRegType = $map['DomainRegType'];
        }

        if (isset($map['DomainStatus'])) {
            $model->domainStatus = $map['DomainStatus'];
        }

        if (isset($map['DomainType'])) {
            $model->domainType = $map['DomainType'];
        }

        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        if (isset($map['Premium'])) {
            $model->premium = $map['Premium'];
        }

        if (isset($map['ProductId'])) {
            $model->productId = $map['ProductId'];
        }

        if (isset($map['RegDate'])) {
            $model->regDate = $map['RegDate'];
        }

        if (isset($map['RegDateLong'])) {
            $model->regDateLong = $map['RegDateLong'];
        }

        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        if (isset($map['SaleId'])) {
            $model->saleId = $map['SaleId'];
        }

        return $model;
    }
}
