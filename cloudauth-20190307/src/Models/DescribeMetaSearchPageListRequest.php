<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models;

use AlibabaCloud\Dara\Model;

class DescribeMetaSearchPageListRequest extends Model
{
    /**
     * @var string
     */
    public $api;

    /**
     * @var string
     */
    public $bankCard;

    /**
     * @var string
     */
    public $bizCode;

    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var int
     */
    public $endDate;

    /**
     * @var string
     */
    public $identifyNum;

    /**
     * @var string
     */
    public $ispName;

    /**
     * @var string
     */
    public $mobile;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $reqId;

    /**
     * @var int
     */
    public $startDate;

    /**
     * @var string
     */
    public $subCode;

    /**
     * @var string
     */
    public $userName;

    /**
     * @var string
     */
    public $vehicleNum;
    protected $_name = [
        'api' => 'Api',
        'bankCard' => 'BankCard',
        'bizCode' => 'BizCode',
        'currentPage' => 'CurrentPage',
        'endDate' => 'EndDate',
        'identifyNum' => 'IdentifyNum',
        'ispName' => 'IspName',
        'mobile' => 'Mobile',
        'pageSize' => 'PageSize',
        'reqId' => 'ReqId',
        'startDate' => 'StartDate',
        'subCode' => 'SubCode',
        'userName' => 'UserName',
        'vehicleNum' => 'VehicleNum',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->api) {
            $res['Api'] = $this->api;
        }

        if (null !== $this->bankCard) {
            $res['BankCard'] = $this->bankCard;
        }

        if (null !== $this->bizCode) {
            $res['BizCode'] = $this->bizCode;
        }

        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }

        if (null !== $this->identifyNum) {
            $res['IdentifyNum'] = $this->identifyNum;
        }

        if (null !== $this->ispName) {
            $res['IspName'] = $this->ispName;
        }

        if (null !== $this->mobile) {
            $res['Mobile'] = $this->mobile;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->reqId) {
            $res['ReqId'] = $this->reqId;
        }

        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }

        if (null !== $this->subCode) {
            $res['SubCode'] = $this->subCode;
        }

        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }

        if (null !== $this->vehicleNum) {
            $res['VehicleNum'] = $this->vehicleNum;
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
        if (isset($map['Api'])) {
            $model->api = $map['Api'];
        }

        if (isset($map['BankCard'])) {
            $model->bankCard = $map['BankCard'];
        }

        if (isset($map['BizCode'])) {
            $model->bizCode = $map['BizCode'];
        }

        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }

        if (isset($map['IdentifyNum'])) {
            $model->identifyNum = $map['IdentifyNum'];
        }

        if (isset($map['IspName'])) {
            $model->ispName = $map['IspName'];
        }

        if (isset($map['Mobile'])) {
            $model->mobile = $map['Mobile'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['ReqId'])) {
            $model->reqId = $map['ReqId'];
        }

        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }

        if (isset($map['SubCode'])) {
            $model->subCode = $map['SubCode'];
        }

        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        if (isset($map['VehicleNum'])) {
            $model->vehicleNum = $map['VehicleNum'];
        }

        return $model;
    }
}
