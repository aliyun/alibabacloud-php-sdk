<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20190902\Models;

use AlibabaCloud\Tea\Model;

class ListAdminTrademarkApplicationsRequest extends Model
{
    /**
     * @var string
     */
    public $applicantName;

    /**
     * @var int
     */
    public $applicationStatus;

    /**
     * @var string
     */
    public $applicationType;

    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $orderId;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $sortOrder;

    /**
     * @var int
     */
    public $supplementStatus;

    /**
     * @var string
     */
    public $trademarkName;

    /**
     * @var string
     */
    public $trademarkNumber;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'applicantName'     => 'ApplicantName',
        'applicationStatus' => 'ApplicationStatus',
        'applicationType'   => 'ApplicationType',
        'bizId'             => 'BizId',
        'orderId'           => 'OrderId',
        'pageNumber'        => 'PageNumber',
        'pageSize'          => 'PageSize',
        'sortOrder'         => 'SortOrder',
        'supplementStatus'  => 'SupplementStatus',
        'trademarkName'     => 'TrademarkName',
        'trademarkNumber'   => 'TrademarkNumber',
        'userId'            => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applicantName) {
            $res['ApplicantName'] = $this->applicantName;
        }
        if (null !== $this->applicationStatus) {
            $res['ApplicationStatus'] = $this->applicationStatus;
        }
        if (null !== $this->applicationType) {
            $res['ApplicationType'] = $this->applicationType;
        }
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->sortOrder) {
            $res['SortOrder'] = $this->sortOrder;
        }
        if (null !== $this->supplementStatus) {
            $res['SupplementStatus'] = $this->supplementStatus;
        }
        if (null !== $this->trademarkName) {
            $res['TrademarkName'] = $this->trademarkName;
        }
        if (null !== $this->trademarkNumber) {
            $res['TrademarkNumber'] = $this->trademarkNumber;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAdminTrademarkApplicationsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplicantName'])) {
            $model->applicantName = $map['ApplicantName'];
        }
        if (isset($map['ApplicationStatus'])) {
            $model->applicationStatus = $map['ApplicationStatus'];
        }
        if (isset($map['ApplicationType'])) {
            $model->applicationType = $map['ApplicationType'];
        }
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['SortOrder'])) {
            $model->sortOrder = $map['SortOrder'];
        }
        if (isset($map['SupplementStatus'])) {
            $model->supplementStatus = $map['SupplementStatus'];
        }
        if (isset($map['TrademarkName'])) {
            $model->trademarkName = $map['TrademarkName'];
        }
        if (isset($map['TrademarkNumber'])) {
            $model->trademarkNumber = $map['TrademarkNumber'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
