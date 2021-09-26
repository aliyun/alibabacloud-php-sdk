<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models;

use AlibabaCloud\Tea\Model;

class DescribeEventTopRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var int
     */
    public $userId;

    /**
     * @var string
     */
    public $dealUserId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $typeCode;

    /**
     * @var string
     */
    public $subTypeCode;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $productCode;

    /**
     * @var string
     */
    public $targetProductCode;

    /**
     * @var string
     */
    public $userName;
    protected $_name = [
        'lang'              => 'Lang',
        'userId'            => 'UserId',
        'dealUserId'        => 'DealUserId',
        'status'            => 'Status',
        'typeCode'          => 'TypeCode',
        'subTypeCode'       => 'SubTypeCode',
        'startTime'         => 'StartTime',
        'endTime'           => 'EndTime',
        'pageSize'          => 'PageSize',
        'currentPage'       => 'CurrentPage',
        'instanceName'      => 'InstanceName',
        'productCode'       => 'ProductCode',
        'targetProductCode' => 'TargetProductCode',
        'userName'          => 'UserName',
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
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->dealUserId) {
            $res['DealUserId'] = $this->dealUserId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->typeCode) {
            $res['TypeCode'] = $this->typeCode;
        }
        if (null !== $this->subTypeCode) {
            $res['SubTypeCode'] = $this->subTypeCode;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }
        if (null !== $this->targetProductCode) {
            $res['TargetProductCode'] = $this->targetProductCode;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeEventTopRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['DealUserId'])) {
            $model->dealUserId = $map['DealUserId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TypeCode'])) {
            $model->typeCode = $map['TypeCode'];
        }
        if (isset($map['SubTypeCode'])) {
            $model->subTypeCode = $map['SubTypeCode'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }
        if (isset($map['TargetProductCode'])) {
            $model->targetProductCode = $map['TargetProductCode'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}
