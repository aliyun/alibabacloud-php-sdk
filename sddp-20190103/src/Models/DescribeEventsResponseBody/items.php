<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeEventsResponseBody;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $displayName;

    /**
     * @var int
     */
    public $status;

    /**
     * @var int
     */
    public $warnLevel;

    /**
     * @var int
     */
    public $userId;

    /**
     * @var string
     */
    public $statusName;

    /**
     * @var int
     */
    public $dealTime;

    /**
     * @var string
     */
    public $dealLoginName;

    /**
     * @var string
     */
    public $subTypeName;

    /**
     * @var bool
     */
    public $backed;

    /**
     * @var int
     */
    public $eventTime;

    /**
     * @var string
     */
    public $loginName;

    /**
     * @var string
     */
    public $subTypeCode;

    /**
     * @var string
     */
    public $targetProductCode;

    /**
     * @var string
     */
    public $typeCode;

    /**
     * @var int
     */
    public $alertTime;

    /**
     * @var int
     */
    public $dealUserId;

    /**
     * @var string
     */
    public $typeName;

    /**
     * @var string
     */
    public $dealDisplayName;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $productCode;
    protected $_name = [
        'displayName'       => 'DisplayName',
        'status'            => 'Status',
        'warnLevel'         => 'WarnLevel',
        'userId'            => 'UserId',
        'statusName'        => 'StatusName',
        'dealTime'          => 'DealTime',
        'dealLoginName'     => 'DealLoginName',
        'subTypeName'       => 'SubTypeName',
        'backed'            => 'Backed',
        'eventTime'         => 'EventTime',
        'loginName'         => 'LoginName',
        'subTypeCode'       => 'SubTypeCode',
        'targetProductCode' => 'TargetProductCode',
        'typeCode'          => 'TypeCode',
        'alertTime'         => 'AlertTime',
        'dealUserId'        => 'DealUserId',
        'typeName'          => 'TypeName',
        'dealDisplayName'   => 'DealDisplayName',
        'id'                => 'Id',
        'productCode'       => 'ProductCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->warnLevel) {
            $res['WarnLevel'] = $this->warnLevel;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->statusName) {
            $res['StatusName'] = $this->statusName;
        }
        if (null !== $this->dealTime) {
            $res['DealTime'] = $this->dealTime;
        }
        if (null !== $this->dealLoginName) {
            $res['DealLoginName'] = $this->dealLoginName;
        }
        if (null !== $this->subTypeName) {
            $res['SubTypeName'] = $this->subTypeName;
        }
        if (null !== $this->backed) {
            $res['Backed'] = $this->backed;
        }
        if (null !== $this->eventTime) {
            $res['EventTime'] = $this->eventTime;
        }
        if (null !== $this->loginName) {
            $res['LoginName'] = $this->loginName;
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
        if (null !== $this->alertTime) {
            $res['AlertTime'] = $this->alertTime;
        }
        if (null !== $this->dealUserId) {
            $res['DealUserId'] = $this->dealUserId;
        }
        if (null !== $this->typeName) {
            $res['TypeName'] = $this->typeName;
        }
        if (null !== $this->dealDisplayName) {
            $res['DealDisplayName'] = $this->dealDisplayName;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
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
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['WarnLevel'])) {
            $model->warnLevel = $map['WarnLevel'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['StatusName'])) {
            $model->statusName = $map['StatusName'];
        }
        if (isset($map['DealTime'])) {
            $model->dealTime = $map['DealTime'];
        }
        if (isset($map['DealLoginName'])) {
            $model->dealLoginName = $map['DealLoginName'];
        }
        if (isset($map['SubTypeName'])) {
            $model->subTypeName = $map['SubTypeName'];
        }
        if (isset($map['Backed'])) {
            $model->backed = $map['Backed'];
        }
        if (isset($map['EventTime'])) {
            $model->eventTime = $map['EventTime'];
        }
        if (isset($map['LoginName'])) {
            $model->loginName = $map['LoginName'];
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
        if (isset($map['AlertTime'])) {
            $model->alertTime = $map['AlertTime'];
        }
        if (isset($map['DealUserId'])) {
            $model->dealUserId = $map['DealUserId'];
        }
        if (isset($map['TypeName'])) {
            $model->typeName = $map['TypeName'];
        }
        if (isset($map['DealDisplayName'])) {
            $model->dealDisplayName = $map['DealDisplayName'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }

        return $model;
    }
}
