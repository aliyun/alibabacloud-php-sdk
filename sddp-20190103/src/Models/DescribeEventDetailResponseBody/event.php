<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeEventDetailResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeEventDetailResponseBody\event\detail;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeEventDetailResponseBody\event\handleInfoList;

class event extends Model
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
    public $dataInstance;
    /**
     * @var string
     */
    public $dealDisplayName;
    /**
     * @var string
     */
    public $dealLoginName;
    /**
     * @var string
     */
    public $dealReason;
    /**
     * @var int
     */
    public $dealTime;
    /**
     * @var int
     */
    public $dealUserId;
    /**
     * @var detail
     */
    public $detail;
    /**
     * @var string
     */
    public $displayName;
    /**
     * @var int
     */
    public $eventTime;
    /**
     * @var handleInfoList[]
     */
    public $handleInfoList;
    /**
     * @var int
     */
    public $id;
    /**
     * @var string
     */
    public $logDetail;
    /**
     * @var string
     */
    public $loginName;
    /**
     * @var bool
     */
    public $newAlarm;
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
    public $typeCode;
    /**
     * @var string
     */
    public $typeName;
    /**
     * @var int
     */
    public $userId;
    protected $_name = [
        'alertTime'       => 'AlertTime',
        'backed'          => 'Backed',
        'dataInstance'    => 'DataInstance',
        'dealDisplayName' => 'DealDisplayName',
        'dealLoginName'   => 'DealLoginName',
        'dealReason'      => 'DealReason',
        'dealTime'        => 'DealTime',
        'dealUserId'      => 'DealUserId',
        'detail'          => 'Detail',
        'displayName'     => 'DisplayName',
        'eventTime'       => 'EventTime',
        'handleInfoList'  => 'HandleInfoList',
        'id'              => 'Id',
        'logDetail'       => 'LogDetail',
        'loginName'       => 'LoginName',
        'newAlarm'        => 'NewAlarm',
        'productCode'     => 'ProductCode',
        'status'          => 'Status',
        'statusName'      => 'StatusName',
        'subTypeCode'     => 'SubTypeCode',
        'subTypeName'     => 'SubTypeName',
        'typeCode'        => 'TypeCode',
        'typeName'        => 'TypeName',
        'userId'          => 'UserId',
    ];

    public function validate()
    {
        if (null !== $this->detail) {
            $this->detail->validate();
        }
        if (\is_array($this->handleInfoList)) {
            Model::validateArray($this->handleInfoList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alertTime) {
            $res['AlertTime'] = $this->alertTime;
        }

        if (null !== $this->backed) {
            $res['Backed'] = $this->backed;
        }

        if (null !== $this->dataInstance) {
            $res['DataInstance'] = $this->dataInstance;
        }

        if (null !== $this->dealDisplayName) {
            $res['DealDisplayName'] = $this->dealDisplayName;
        }

        if (null !== $this->dealLoginName) {
            $res['DealLoginName'] = $this->dealLoginName;
        }

        if (null !== $this->dealReason) {
            $res['DealReason'] = $this->dealReason;
        }

        if (null !== $this->dealTime) {
            $res['DealTime'] = $this->dealTime;
        }

        if (null !== $this->dealUserId) {
            $res['DealUserId'] = $this->dealUserId;
        }

        if (null !== $this->detail) {
            $res['Detail'] = null !== $this->detail ? $this->detail->toArray($noStream) : $this->detail;
        }

        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }

        if (null !== $this->eventTime) {
            $res['EventTime'] = $this->eventTime;
        }

        if (null !== $this->handleInfoList) {
            if (\is_array($this->handleInfoList)) {
                $res['HandleInfoList'] = [];
                $n1                    = 0;
                foreach ($this->handleInfoList as $item1) {
                    $res['HandleInfoList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->logDetail) {
            $res['LogDetail'] = $this->logDetail;
        }

        if (null !== $this->loginName) {
            $res['LoginName'] = $this->loginName;
        }

        if (null !== $this->newAlarm) {
            $res['NewAlarm'] = $this->newAlarm;
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

        if (null !== $this->typeCode) {
            $res['TypeCode'] = $this->typeCode;
        }

        if (null !== $this->typeName) {
            $res['TypeName'] = $this->typeName;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
        if (isset($map['AlertTime'])) {
            $model->alertTime = $map['AlertTime'];
        }

        if (isset($map['Backed'])) {
            $model->backed = $map['Backed'];
        }

        if (isset($map['DataInstance'])) {
            $model->dataInstance = $map['DataInstance'];
        }

        if (isset($map['DealDisplayName'])) {
            $model->dealDisplayName = $map['DealDisplayName'];
        }

        if (isset($map['DealLoginName'])) {
            $model->dealLoginName = $map['DealLoginName'];
        }

        if (isset($map['DealReason'])) {
            $model->dealReason = $map['DealReason'];
        }

        if (isset($map['DealTime'])) {
            $model->dealTime = $map['DealTime'];
        }

        if (isset($map['DealUserId'])) {
            $model->dealUserId = $map['DealUserId'];
        }

        if (isset($map['Detail'])) {
            $model->detail = detail::fromMap($map['Detail']);
        }

        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }

        if (isset($map['EventTime'])) {
            $model->eventTime = $map['EventTime'];
        }

        if (isset($map['HandleInfoList'])) {
            if (!empty($map['HandleInfoList'])) {
                $model->handleInfoList = [];
                $n1                    = 0;
                foreach ($map['HandleInfoList'] as $item1) {
                    $model->handleInfoList[$n1++] = handleInfoList::fromMap($item1);
                }
            }
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['LogDetail'])) {
            $model->logDetail = $map['LogDetail'];
        }

        if (isset($map['LoginName'])) {
            $model->loginName = $map['LoginName'];
        }

        if (isset($map['NewAlarm'])) {
            $model->newAlarm = $map['NewAlarm'];
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

        if (isset($map['TypeCode'])) {
            $model->typeCode = $map['TypeCode'];
        }

        if (isset($map['TypeName'])) {
            $model->typeName = $map['TypeName'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
