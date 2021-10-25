<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\UniMkt\V20181212\Models\QueryAppTasksResponseBody\data;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $timeSchema;

    /**
     * @var int
     */
    public $quota;

    /**
     * @var string
     */
    public $contentIds;

    /**
     * @var int
     */
    public $chargeCost;

    /**
     * @var int
     */
    public $proxyUserId;

    /**
     * @var int
     */
    public $openScene;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var string
     */
    public $accountNo;

    /**
     * @var int
     */
    public $allContentStatus;

    /**
     * @var int
     */
    public $quotaDay;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var int
     */
    public $brandUserId;

    /**
     * @var string
     */
    public $priceType;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $balanceDay;

    /**
     * @var int
     */
    public $popularizePosition;

    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $balance;
    protected $_name = [
        'status'             => 'Status',
        'timeSchema'         => 'TimeSchema',
        'quota'              => 'Quota',
        'contentIds'         => 'ContentIds',
        'chargeCost'         => 'ChargeCost',
        'proxyUserId'        => 'ProxyUserId',
        'openScene'          => 'OpenScene',
        'priority'           => 'Priority',
        'accountNo'          => 'AccountNo',
        'allContentStatus'   => 'AllContentStatus',
        'quotaDay'           => 'QuotaDay',
        'endTime'            => 'EndTime',
        'startTime'          => 'StartTime',
        'brandUserId'        => 'BrandUserId',
        'priceType'          => 'PriceType',
        'name'               => 'Name',
        'balanceDay'         => 'BalanceDay',
        'popularizePosition' => 'PopularizePosition',
        'id'                 => 'Id',
        'balance'            => 'Balance',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->timeSchema) {
            $res['TimeSchema'] = $this->timeSchema;
        }
        if (null !== $this->quota) {
            $res['Quota'] = $this->quota;
        }
        if (null !== $this->contentIds) {
            $res['ContentIds'] = $this->contentIds;
        }
        if (null !== $this->chargeCost) {
            $res['ChargeCost'] = $this->chargeCost;
        }
        if (null !== $this->proxyUserId) {
            $res['ProxyUserId'] = $this->proxyUserId;
        }
        if (null !== $this->openScene) {
            $res['OpenScene'] = $this->openScene;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->accountNo) {
            $res['AccountNo'] = $this->accountNo;
        }
        if (null !== $this->allContentStatus) {
            $res['AllContentStatus'] = $this->allContentStatus;
        }
        if (null !== $this->quotaDay) {
            $res['QuotaDay'] = $this->quotaDay;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->brandUserId) {
            $res['BrandUserId'] = $this->brandUserId;
        }
        if (null !== $this->priceType) {
            $res['PriceType'] = $this->priceType;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->balanceDay) {
            $res['BalanceDay'] = $this->balanceDay;
        }
        if (null !== $this->popularizePosition) {
            $res['PopularizePosition'] = $this->popularizePosition;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->balance) {
            $res['Balance'] = $this->balance;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TimeSchema'])) {
            $model->timeSchema = $map['TimeSchema'];
        }
        if (isset($map['Quota'])) {
            $model->quota = $map['Quota'];
        }
        if (isset($map['ContentIds'])) {
            $model->contentIds = $map['ContentIds'];
        }
        if (isset($map['ChargeCost'])) {
            $model->chargeCost = $map['ChargeCost'];
        }
        if (isset($map['ProxyUserId'])) {
            $model->proxyUserId = $map['ProxyUserId'];
        }
        if (isset($map['OpenScene'])) {
            $model->openScene = $map['OpenScene'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['AccountNo'])) {
            $model->accountNo = $map['AccountNo'];
        }
        if (isset($map['AllContentStatus'])) {
            $model->allContentStatus = $map['AllContentStatus'];
        }
        if (isset($map['QuotaDay'])) {
            $model->quotaDay = $map['QuotaDay'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['BrandUserId'])) {
            $model->brandUserId = $map['BrandUserId'];
        }
        if (isset($map['PriceType'])) {
            $model->priceType = $map['PriceType'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['BalanceDay'])) {
            $model->balanceDay = $map['BalanceDay'];
        }
        if (isset($map['PopularizePosition'])) {
            $model->popularizePosition = $map['PopularizePosition'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Balance'])) {
            $model->balance = $map['Balance'];
        }

        return $model;
    }
}
