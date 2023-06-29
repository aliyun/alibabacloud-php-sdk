<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models;

use AlibabaCloud\Tea\Model;

class DescribeEventsRequest extends Model
{
    /**
     * @description The page number of the page to return.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The ID of the account that handles the anomalous event.
     *
     * @example yundun-***
     *
     * @var string
     */
    public $dealUserId;

    /**
     * @description The end of the time range during which the anomalous events are detected. The value is a UNIX timestamp. Unit: milliseconds.
     *
     * @example 1698700000
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The unique ID of the anomalous event.
     *
     * @example 789026
     *
     * @var int
     */
    public $id;

    /**
     * @description The name of the data asset.
     *
     * @example rm-uf6yzvbc2tg90iuxk.l****
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The language of the content within the request and response. Default value: **zh_cn**. Valid values:
     *
     *   **zh_cn**: Chinese
     *   **en_us**: English
     *
     * @example zh_cn
     *
     * @var string
     */
    public $lang;

    /**
     * @description The number of entries to return on each page.
     *
     * @example 12
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The name of the service to which the table belongs. Valid values include **MaxCompute, OSS, ADS, OTS, and RDS**.
     *
     * @example OSS
     *
     * @var string
     */
    public $productCode;

    /**
     * @description The beginning of the time range during which the anomalous events are detected. The value is a UNIX timestamp. Unit: milliseconds.
     *
     * @example 1657900000
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The handling status of the anomalous event. Valid values:
     *
     *   0: unhandled
     *   1: confirmed
     *   2: marked as false positive
     *
     * @example 1
     *
     * @var string
     */
    public $status;

    /**
     * @description The name of the anomalous event subtype.
     *
     * > You can call the **DescribeEventTypes** operation to query the name of the anomalous event subtype.
     * @example Anomalous volume of downloaded data
     *
     * @var string
     */
    public $subTypeCode;

    /**
     * @description The name of the destination service in an anomalous data flow. Valid values include **MaxCompute, OSS, ADS, OTS, and RDS**
     *
     * @example RDS
     *
     * @var string
     */
    public $targetProductCode;

    /**
     * @description The name of the anomalous event type. Valid values:
     *
     *   01: anomalous permission usage
     *   02: anomalous data flow
     *   03: anomalous data operation
     *
     * @example 02
     *
     * @var string
     */
    public $typeCode;

    /**
     * @description The ID of the account that triggered the anomalous event.
     *
     * @example 1978132506596***
     *
     * @var int
     */
    public $userId;

    /**
     * @description The username of the RAM user.
     *
     * @example name
     *
     * @var string
     */
    public $userName;
    protected $_name = [
        'currentPage'       => 'CurrentPage',
        'dealUserId'        => 'DealUserId',
        'endTime'           => 'EndTime',
        'id'                => 'Id',
        'instanceName'      => 'InstanceName',
        'lang'              => 'Lang',
        'pageSize'          => 'PageSize',
        'productCode'       => 'ProductCode',
        'startTime'         => 'StartTime',
        'status'            => 'Status',
        'subTypeCode'       => 'SubTypeCode',
        'targetProductCode' => 'TargetProductCode',
        'typeCode'          => 'TypeCode',
        'userId'            => 'UserId',
        'userName'          => 'UserName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->dealUserId) {
            $res['DealUserId'] = $this->dealUserId;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->subTypeCode) {
            $res['SubTypeCode'] = $this->subTypeCode;
        }
        if (null !== $this->targetProductCode) {
            $res['TargetProductCode'] = $this->targetProductCode;
        }
        if (null !== $this->typeCode) {
            $res['TypeCode'] = $this->typeCode;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeEventsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['DealUserId'])) {
            $model->dealUserId = $map['DealUserId'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SubTypeCode'])) {
            $model->subTypeCode = $map['SubTypeCode'];
        }
        if (isset($map['TargetProductCode'])) {
            $model->targetProductCode = $map['TargetProductCode'];
        }
        if (isset($map['TypeCode'])) {
            $model->typeCode = $map['TypeCode'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}
