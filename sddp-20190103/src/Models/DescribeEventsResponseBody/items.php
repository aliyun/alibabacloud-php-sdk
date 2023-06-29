<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeEventsResponseBody;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @description The time when an alert was triggered for the anomalous event. The value is a UNIX timestamp. Unit: milliseconds.
     *
     * @example 154529000
     *
     * @var int
     */
    public $alertTime;

    /**
     * @description Indicates whether the detection of anomalous events is enhanced. If the detection of anomalous events is enhanced, the detection accuracy and the rate of triggering alerts for anomalous events are improved. Valid values:
     *
     *   true: yes
     *   false: no
     *
     * @example false
     *
     * @var bool
     */
    public $backed;

    /**
     * @description The display name of the account that is used to handle the anomalous event.
     *
     * @example yundunsr
     *
     * @var string
     */
    public $dealDisplayName;

    /**
     * @description The username of the account that is used to handle the anomalous event.
     *
     * @example det1111
     *
     * @var string
     */
    public $dealLoginName;

    /**
     * @description The time when the anomalous event was handled. The value is a UNIX timestamp. Unit: milliseconds.
     *
     * @example 12223300
     *
     * @var int
     */
    public $dealTime;

    /**
     * @description The ID of the account that is used to handle the anomalous event.
     *
     * @example 229157443385014***
     *
     * @var int
     */
    public $dealUserId;

    /**
     * @description The display name of the account that triggered the anomalous event.
     *
     * @example yundunsr
     *
     * @var string
     */
    public $displayName;

    /**
     * @description The time when the anomalous event occurred. The value is a UNIX timestamp. Unit: milliseconds.
     *
     * @example 1545829129000
     *
     * @var int
     */
    public $eventTime;

    /**
     * @description The ID of the anomalous event.
     *
     * @example 42233335555
     *
     * @var int
     */
    public $id;

    /**
     * @description The username of the account that triggered the anomalous event.
     *
     * @example det1111
     *
     * @var string
     */
    public $loginName;

    /**
     * @description The name of the service in which the anomalous event was detected.
     *
     * @example RDS
     *
     * @var string
     */
    public $productCode;

    /**
     * @description The handling status for the anomalous event. Valid values:
     *
     *   0: unhandled
     *   1: confirmed
     *   2: marked as false positive
     *
     * @example 0
     *
     * @var int
     */
    public $status;

    /**
     * @description The name of the handling status for the anomalous event.
     *
     * @example Pending
     *
     * @var string
     */
    public $statusName;

    /**
     * @description The code of the anomalous event subtype.
     *
     * @example 020008
     *
     * @var string
     */
    public $subTypeCode;

    /**
     * @description The name of the anomalous event subtype.
     *
     * @example Anomalous volume of downloaded data
     *
     * @var string
     */
    public $subTypeName;

    /**
     * @description The name of the destination service in an anomalous data flow.
     *
     * @example RDS
     *
     * @var string
     */
    public $targetProductCode;

    /**
     * @description The code of the anomalous event type.
     *
     * @example 02
     *
     * @var string
     */
    public $typeCode;

    /**
     * @description The name of the anomalous event type.
     *
     * @example Anomalous data flow
     *
     * @var string
     */
    public $typeName;

    /**
     * @description The ID of the account that triggered the anomalous event.
     *
     * @example 1978132506596***
     *
     * @var int
     */
    public $userId;

    /**
     * @description The severity of the anomalous event.
     *
     *   **1**: low
     *   **2**: medium
     *   **3**: high
     *
     * @example 2
     *
     * @var int
     */
    public $warnLevel;
    protected $_name = [
        'alertTime'         => 'AlertTime',
        'backed'            => 'Backed',
        'dealDisplayName'   => 'DealDisplayName',
        'dealLoginName'     => 'DealLoginName',
        'dealTime'          => 'DealTime',
        'dealUserId'        => 'DealUserId',
        'displayName'       => 'DisplayName',
        'eventTime'         => 'EventTime',
        'id'                => 'Id',
        'loginName'         => 'LoginName',
        'productCode'       => 'ProductCode',
        'status'            => 'Status',
        'statusName'        => 'StatusName',
        'subTypeCode'       => 'SubTypeCode',
        'subTypeName'       => 'SubTypeName',
        'targetProductCode' => 'TargetProductCode',
        'typeCode'          => 'TypeCode',
        'typeName'          => 'TypeName',
        'userId'            => 'UserId',
        'warnLevel'         => 'WarnLevel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alertTime) {
            $res['AlertTime'] = $this->alertTime;
        }
        if (null !== $this->backed) {
            $res['Backed'] = $this->backed;
        }
        if (null !== $this->dealDisplayName) {
            $res['DealDisplayName'] = $this->dealDisplayName;
        }
        if (null !== $this->dealLoginName) {
            $res['DealLoginName'] = $this->dealLoginName;
        }
        if (null !== $this->dealTime) {
            $res['DealTime'] = $this->dealTime;
        }
        if (null !== $this->dealUserId) {
            $res['DealUserId'] = $this->dealUserId;
        }
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->eventTime) {
            $res['EventTime'] = $this->eventTime;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->loginName) {
            $res['LoginName'] = $this->loginName;
        }
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->statusName) {
            $res['StatusName'] = $this->statusName;
        }
        if (null !== $this->subTypeCode) {
            $res['SubTypeCode'] = $this->subTypeCode;
        }
        if (null !== $this->subTypeName) {
            $res['SubTypeName'] = $this->subTypeName;
        }
        if (null !== $this->targetProductCode) {
            $res['TargetProductCode'] = $this->targetProductCode;
        }
        if (null !== $this->typeCode) {
            $res['TypeCode'] = $this->typeCode;
        }
        if (null !== $this->typeName) {
            $res['TypeName'] = $this->typeName;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->warnLevel) {
            $res['WarnLevel'] = $this->warnLevel;
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
        if (isset($map['AlertTime'])) {
            $model->alertTime = $map['AlertTime'];
        }
        if (isset($map['Backed'])) {
            $model->backed = $map['Backed'];
        }
        if (isset($map['DealDisplayName'])) {
            $model->dealDisplayName = $map['DealDisplayName'];
        }
        if (isset($map['DealLoginName'])) {
            $model->dealLoginName = $map['DealLoginName'];
        }
        if (isset($map['DealTime'])) {
            $model->dealTime = $map['DealTime'];
        }
        if (isset($map['DealUserId'])) {
            $model->dealUserId = $map['DealUserId'];
        }
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['EventTime'])) {
            $model->eventTime = $map['EventTime'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['LoginName'])) {
            $model->loginName = $map['LoginName'];
        }
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StatusName'])) {
            $model->statusName = $map['StatusName'];
        }
        if (isset($map['SubTypeCode'])) {
            $model->subTypeCode = $map['SubTypeCode'];
        }
        if (isset($map['SubTypeName'])) {
            $model->subTypeName = $map['SubTypeName'];
        }
        if (isset($map['TargetProductCode'])) {
            $model->targetProductCode = $map['TargetProductCode'];
        }
        if (isset($map['TypeCode'])) {
            $model->typeCode = $map['TypeCode'];
        }
        if (isset($map['TypeName'])) {
            $model->typeName = $map['TypeName'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['WarnLevel'])) {
            $model->warnLevel = $map['WarnLevel'];
        }

        return $model;
    }
}
