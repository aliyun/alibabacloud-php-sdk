<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeEventsResponseBody;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @var int
     */
    public $alertTime;

    /**
     * @var bool
     */
    public $backed;

    /**
     * @var string
     */
    public $dealDisplayName;

    /**
     * @var string
     */
    public $dealLoginName;

    /**
     * @var int
     */
    public $dealTime;

    /**
     * @var int
     */
    public $dealUserId;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var int
     */
    public $eventTime;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $loginName;

    /**
     * @var string
     */
    public $productCode;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $statusName;

    /**
     * @var string
     */
    public $subTypeCode;

    /**
     * @var string
     */
    public $subTypeName;

    /**
     * @var string
     */
    public $targetProductCode;

    /**
     * @var string
     */
    public $typeCode;

    /**
     * @var string
     */
    public $typeName;

    /**
     * @var int
     */
    public $userId;

    /**
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
