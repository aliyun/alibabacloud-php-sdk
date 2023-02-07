<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models;

use AlibabaCloud\Tea\Model;

class HotlineSessionQueryRequest extends Model
{
    /**
     * @example 7719786****
     *
     * @var string
     */
    public $acid;

    /**
     * @var string[]
     */
    public $acidList;

    /**
     * @example normal
     *
     * @var string
     */
    public $callResult;

    /**
     * @var string[]
     */
    public $callResultList;

    /**
     * @example 1
     *
     * @var int
     */
    public $callType;

    /**
     * @var int[]
     */
    public $callTypeList;

    /**
     * @example 135615****
     *
     * @var string
     */
    public $calledNumber;

    /**
     * @var string[]
     */
    public $calledNumberList;

    /**
     * @example 057177****
     *
     * @var string
     */
    public $callingNumber;

    /**
     * @var string[]
     */
    public $callingNumberList;

    /**
     * @example 123456
     *
     * @var int
     */
    public $groupId;

    /**
     * @var int[]
     */
    public $groupIdList;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @example acc1c58dab4a4dd280e3813c66
     *
     * @var string
     */
    public $id;

    /**
     * @example ccc_xp_pre-cn-***
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 7856****
     *
     * @var string
     */
    public $memberId;

    /**
     * @var string[]
     */
    public $memberIdList;

    /**
     * @var string
     */
    public $memberName;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNo;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example xxxx
     *
     * @var string
     */
    public $params;

    /**
     * @example 161482972
     *
     * @var int
     */
    public $queryEndTime;

    /**
     * @example 161482872
     *
     * @var int
     */
    public $queryStartTime;

    /**
     * @example EE338D98-9BD3-4413-B165
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 555555
     *
     * @var string
     */
    public $servicerId;

    /**
     * @var string[]
     */
    public $servicerIdList;

    /**
     * @var string
     */
    public $servicerName;
    protected $_name = [
        'acid'              => 'Acid',
        'acidList'          => 'AcidList',
        'callResult'        => 'CallResult',
        'callResultList'    => 'CallResultList',
        'callType'          => 'CallType',
        'callTypeList'      => 'CallTypeList',
        'calledNumber'      => 'CalledNumber',
        'calledNumberList'  => 'CalledNumberList',
        'callingNumber'     => 'CallingNumber',
        'callingNumberList' => 'CallingNumberList',
        'groupId'           => 'GroupId',
        'groupIdList'       => 'GroupIdList',
        'groupName'         => 'GroupName',
        'id'                => 'Id',
        'instanceId'        => 'InstanceId',
        'memberId'          => 'MemberId',
        'memberIdList'      => 'MemberIdList',
        'memberName'        => 'MemberName',
        'pageNo'            => 'PageNo',
        'pageSize'          => 'PageSize',
        'params'            => 'Params',
        'queryEndTime'      => 'QueryEndTime',
        'queryStartTime'    => 'QueryStartTime',
        'requestId'         => 'RequestId',
        'servicerId'        => 'ServicerId',
        'servicerIdList'    => 'ServicerIdList',
        'servicerName'      => 'ServicerName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acid) {
            $res['Acid'] = $this->acid;
        }
        if (null !== $this->acidList) {
            $res['AcidList'] = $this->acidList;
        }
        if (null !== $this->callResult) {
            $res['CallResult'] = $this->callResult;
        }
        if (null !== $this->callResultList) {
            $res['CallResultList'] = $this->callResultList;
        }
        if (null !== $this->callType) {
            $res['CallType'] = $this->callType;
        }
        if (null !== $this->callTypeList) {
            $res['CallTypeList'] = $this->callTypeList;
        }
        if (null !== $this->calledNumber) {
            $res['CalledNumber'] = $this->calledNumber;
        }
        if (null !== $this->calledNumberList) {
            $res['CalledNumberList'] = $this->calledNumberList;
        }
        if (null !== $this->callingNumber) {
            $res['CallingNumber'] = $this->callingNumber;
        }
        if (null !== $this->callingNumberList) {
            $res['CallingNumberList'] = $this->callingNumberList;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->groupIdList) {
            $res['GroupIdList'] = $this->groupIdList;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->memberId) {
            $res['MemberId'] = $this->memberId;
        }
        if (null !== $this->memberIdList) {
            $res['MemberIdList'] = $this->memberIdList;
        }
        if (null !== $this->memberName) {
            $res['MemberName'] = $this->memberName;
        }
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->params) {
            $res['Params'] = $this->params;
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
        if (null !== $this->servicerId) {
            $res['ServicerId'] = $this->servicerId;
        }
        if (null !== $this->servicerIdList) {
            $res['ServicerIdList'] = $this->servicerIdList;
        }
        if (null !== $this->servicerName) {
            $res['ServicerName'] = $this->servicerName;
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
        if (isset($map['Acid'])) {
            $model->acid = $map['Acid'];
        }
        if (isset($map['AcidList'])) {
            if (!empty($map['AcidList'])) {
                $model->acidList = $map['AcidList'];
            }
        }
        if (isset($map['CallResult'])) {
            $model->callResult = $map['CallResult'];
        }
        if (isset($map['CallResultList'])) {
            if (!empty($map['CallResultList'])) {
                $model->callResultList = $map['CallResultList'];
            }
        }
        if (isset($map['CallType'])) {
            $model->callType = $map['CallType'];
        }
        if (isset($map['CallTypeList'])) {
            if (!empty($map['CallTypeList'])) {
                $model->callTypeList = $map['CallTypeList'];
            }
        }
        if (isset($map['CalledNumber'])) {
            $model->calledNumber = $map['CalledNumber'];
        }
        if (isset($map['CalledNumberList'])) {
            if (!empty($map['CalledNumberList'])) {
                $model->calledNumberList = $map['CalledNumberList'];
            }
        }
        if (isset($map['CallingNumber'])) {
            $model->callingNumber = $map['CallingNumber'];
        }
        if (isset($map['CallingNumberList'])) {
            if (!empty($map['CallingNumberList'])) {
                $model->callingNumberList = $map['CallingNumberList'];
            }
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['GroupIdList'])) {
            if (!empty($map['GroupIdList'])) {
                $model->groupIdList = $map['GroupIdList'];
            }
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['MemberId'])) {
            $model->memberId = $map['MemberId'];
        }
        if (isset($map['MemberIdList'])) {
            if (!empty($map['MemberIdList'])) {
                $model->memberIdList = $map['MemberIdList'];
            }
        }
        if (isset($map['MemberName'])) {
            $model->memberName = $map['MemberName'];
        }
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Params'])) {
            $model->params = $map['Params'];
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
        if (isset($map['ServicerId'])) {
            $model->servicerId = $map['ServicerId'];
        }
        if (isset($map['ServicerIdList'])) {
            if (!empty($map['ServicerIdList'])) {
                $model->servicerIdList = $map['ServicerIdList'];
            }
        }
        if (isset($map['ServicerName'])) {
            $model->servicerName = $map['ServicerName'];
        }

        return $model;
    }
}
