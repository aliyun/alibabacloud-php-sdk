<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeEventDetailResponseBody;

use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeEventDetailResponseBody\event\detail;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeEventDetailResponseBody\event\handleInfoList;
use AlibabaCloud\Tea\Model;

class event extends Model
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
     * @var string
     */
    public $dealReason;

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
     * @var string
     */
    public $dataInstance;

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
    public $logDetail;

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

    /**
     * @var handleInfoList[]
     */
    public $handleInfoList;

    /**
     * @var detail
     */
    public $detail;
    protected $_name = [
        'displayName'     => 'DisplayName',
        'status'          => 'Status',
        'dealReason'      => 'DealReason',
        'userId'          => 'UserId',
        'statusName'      => 'StatusName',
        'dealTime'        => 'DealTime',
        'dealLoginName'   => 'DealLoginName',
        'subTypeName'     => 'SubTypeName',
        'backed'          => 'Backed',
        'dataInstance'    => 'DataInstance',
        'eventTime'       => 'EventTime',
        'loginName'       => 'LoginName',
        'subTypeCode'     => 'SubTypeCode',
        'logDetail'       => 'LogDetail',
        'typeCode'        => 'TypeCode',
        'alertTime'       => 'AlertTime',
        'dealUserId'      => 'DealUserId',
        'typeName'        => 'TypeName',
        'dealDisplayName' => 'DealDisplayName',
        'id'              => 'Id',
        'productCode'     => 'ProductCode',
        'handleInfoList'  => 'HandleInfoList',
        'detail'          => 'Detail',
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
        if (null !== $this->dealReason) {
            $res['DealReason'] = $this->dealReason;
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
        if (null !== $this->dataInstance) {
            $res['DataInstance'] = $this->dataInstance;
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
        if (null !== $this->logDetail) {
            $res['LogDetail'] = $this->logDetail;
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
        if (null !== $this->handleInfoList) {
            $res['HandleInfoList'] = [];
            if (null !== $this->handleInfoList && \is_array($this->handleInfoList)) {
                $n = 0;
                foreach ($this->handleInfoList as $item) {
                    $res['HandleInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->detail) {
            $res['Detail'] = null !== $this->detail ? $this->detail->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return event
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
        if (isset($map['DealReason'])) {
            $model->dealReason = $map['DealReason'];
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
        if (isset($map['DataInstance'])) {
            $model->dataInstance = $map['DataInstance'];
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
        if (isset($map['LogDetail'])) {
            $model->logDetail = $map['LogDetail'];
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
        if (isset($map['HandleInfoList'])) {
            if (!empty($map['HandleInfoList'])) {
                $model->handleInfoList = [];
                $n                     = 0;
                foreach ($map['HandleInfoList'] as $item) {
                    $model->handleInfoList[$n++] = null !== $item ? handleInfoList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Detail'])) {
            $model->detail = detail::fromMap($map['Detail']);
        }

        return $model;
    }
}
