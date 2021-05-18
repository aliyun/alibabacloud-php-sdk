<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models;

use AlibabaCloud\Tea\Model;

class HotlineSessionQueryRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $acid;

    /**
     * @var int
     */
    public $callType;

    /**
     * @var string
     */
    public $calledNumber;

    /**
     * @var string
     */
    public $callingNumber;

    /**
     * @var int
     */
    public $groupId;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var string
     */
    public $memberId;

    /**
     * @var string
     */
    public $memberName;

    /**
     * @var int
     */
    public $queryEndTime;

    /**
     * @var int
     */
    public $queryStartTime;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $servicerName;

    /**
     * @var string
     */
    public $servicerId;

    /**
     * @var string
     */
    public $params;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $pageNo;

    /**
     * @var string
     */
    public $callResult;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string[]
     */
    public $acidList;

    /**
     * @var int[]
     */
    public $callTypeList;

    /**
     * @var int[]
     */
    public $groupIdList;

    /**
     * @var string[]
     */
    public $callingNumberList;

    /**
     * @var string[]
     */
    public $calledNumberList;

    /**
     * @var string[]
     */
    public $memberIdList;

    /**
     * @var string[]
     */
    public $servicerIdList;

    /**
     * @var string[]
     */
    public $callResultList;
    protected $_name = [
        'instanceId'        => 'InstanceId',
        'acid'              => 'Acid',
        'callType'          => 'CallType',
        'calledNumber'      => 'CalledNumber',
        'callingNumber'     => 'CallingNumber',
        'groupId'           => 'GroupId',
        'groupName'         => 'GroupName',
        'memberId'          => 'MemberId',
        'memberName'        => 'MemberName',
        'queryEndTime'      => 'QueryEndTime',
        'queryStartTime'    => 'QueryStartTime',
        'requestId'         => 'RequestId',
        'servicerName'      => 'ServicerName',
        'servicerId'        => 'ServicerId',
        'params'            => 'Params',
        'pageSize'          => 'PageSize',
        'pageNo'            => 'PageNo',
        'callResult'        => 'CallResult',
        'id'                => 'Id',
        'acidList'          => 'AcidList',
        'callTypeList'      => 'CallTypeList',
        'groupIdList'       => 'GroupIdList',
        'callingNumberList' => 'CallingNumberList',
        'calledNumberList'  => 'CalledNumberList',
        'memberIdList'      => 'MemberIdList',
        'servicerIdList'    => 'ServicerIdList',
        'callResultList'    => 'CallResultList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->acid) {
            $res['Acid'] = $this->acid;
        }
        if (null !== $this->callType) {
            $res['CallType'] = $this->callType;
        }
        if (null !== $this->calledNumber) {
            $res['CalledNumber'] = $this->calledNumber;
        }
        if (null !== $this->callingNumber) {
            $res['CallingNumber'] = $this->callingNumber;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->memberId) {
            $res['MemberId'] = $this->memberId;
        }
        if (null !== $this->memberName) {
            $res['MemberName'] = $this->memberName;
        }
        if (null !== $this->queryEndTime) {
            $res['QueryEndTime'] = $this->queryEndTime;
        }
        if (null !== $this->queryStartTime) {
            $res['QueryStartTime'] = $this->queryStartTime;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->servicerName) {
            $res['ServicerName'] = $this->servicerName;
        }
        if (null !== $this->servicerId) {
            $res['ServicerId'] = $this->servicerId;
        }
        if (null !== $this->params) {
            $res['Params'] = $this->params;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->callResult) {
            $res['CallResult'] = $this->callResult;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->acidList) {
            $res['AcidList'] = $this->acidList;
        }
        if (null !== $this->callTypeList) {
            $res['CallTypeList'] = $this->callTypeList;
        }
        if (null !== $this->groupIdList) {
            $res['GroupIdList'] = $this->groupIdList;
        }
        if (null !== $this->callingNumberList) {
            $res['CallingNumberList'] = $this->callingNumberList;
        }
        if (null !== $this->calledNumberList) {
            $res['CalledNumberList'] = $this->calledNumberList;
        }
        if (null !== $this->memberIdList) {
            $res['MemberIdList'] = $this->memberIdList;
        }
        if (null !== $this->servicerIdList) {
            $res['ServicerIdList'] = $this->servicerIdList;
        }
        if (null !== $this->callResultList) {
            $res['CallResultList'] = $this->callResultList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return HotlineSessionQueryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Acid'])) {
            $model->acid = $map['Acid'];
        }
        if (isset($map['CallType'])) {
            $model->callType = $map['CallType'];
        }
        if (isset($map['CalledNumber'])) {
            $model->calledNumber = $map['CalledNumber'];
        }
        if (isset($map['CallingNumber'])) {
            $model->callingNumber = $map['CallingNumber'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['MemberId'])) {
            $model->memberId = $map['MemberId'];
        }
        if (isset($map['MemberName'])) {
            $model->memberName = $map['MemberName'];
        }
        if (isset($map['QueryEndTime'])) {
            $model->queryEndTime = $map['QueryEndTime'];
        }
        if (isset($map['QueryStartTime'])) {
            $model->queryStartTime = $map['QueryStartTime'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ServicerName'])) {
            $model->servicerName = $map['ServicerName'];
        }
        if (isset($map['ServicerId'])) {
            $model->servicerId = $map['ServicerId'];
        }
        if (isset($map['Params'])) {
            $model->params = $map['Params'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['CallResult'])) {
            $model->callResult = $map['CallResult'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['AcidList'])) {
            if (!empty($map['AcidList'])) {
                $model->acidList = $map['AcidList'];
            }
        }
        if (isset($map['CallTypeList'])) {
            if (!empty($map['CallTypeList'])) {
                $model->callTypeList = $map['CallTypeList'];
            }
        }
        if (isset($map['GroupIdList'])) {
            if (!empty($map['GroupIdList'])) {
                $model->groupIdList = $map['GroupIdList'];
            }
        }
        if (isset($map['CallingNumberList'])) {
            if (!empty($map['CallingNumberList'])) {
                $model->callingNumberList = $map['CallingNumberList'];
            }
        }
        if (isset($map['CalledNumberList'])) {
            if (!empty($map['CalledNumberList'])) {
                $model->calledNumberList = $map['CalledNumberList'];
            }
        }
        if (isset($map['MemberIdList'])) {
            if (!empty($map['MemberIdList'])) {
                $model->memberIdList = $map['MemberIdList'];
            }
        }
        if (isset($map['ServicerIdList'])) {
            if (!empty($map['ServicerIdList'])) {
                $model->servicerIdList = $map['ServicerIdList'];
            }
        }
        if (isset($map['CallResultList'])) {
            if (!empty($map['CallResultList'])) {
                $model->callResultList = $map['CallResultList'];
            }
        }

        return $model;
    }
}
