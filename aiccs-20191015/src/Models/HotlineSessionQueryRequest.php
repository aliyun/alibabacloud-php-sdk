<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models;

use AlibabaCloud\Dara\Model;

class HotlineSessionQueryRequest extends Model
{
    /**
     * @var string
     */
    public $acid;

    /**
     * @var string[]
     */
    public $acidList;

    /**
     * @var string
     */
    public $callResult;

    /**
     * @var string[]
     */
    public $callResultList;

    /**
     * @var int
     */
    public $callType;

    /**
     * @var int[]
     */
    public $callTypeList;

    /**
     * @var string
     */
    public $calledNumber;

    /**
     * @var string[]
     */
    public $calledNumberList;

    /**
     * @var string
     */
    public $callingNumber;

    /**
     * @var string[]
     */
    public $callingNumberList;

    /**
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
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $instanceId;

    /**
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
     * @var int
     */
    public $pageNo;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $params;

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
        'acid' => 'Acid',
        'acidList' => 'AcidList',
        'callResult' => 'CallResult',
        'callResultList' => 'CallResultList',
        'callType' => 'CallType',
        'callTypeList' => 'CallTypeList',
        'calledNumber' => 'CalledNumber',
        'calledNumberList' => 'CalledNumberList',
        'callingNumber' => 'CallingNumber',
        'callingNumberList' => 'CallingNumberList',
        'groupId' => 'GroupId',
        'groupIdList' => 'GroupIdList',
        'groupName' => 'GroupName',
        'id' => 'Id',
        'instanceId' => 'InstanceId',
        'memberId' => 'MemberId',
        'memberIdList' => 'MemberIdList',
        'memberName' => 'MemberName',
        'pageNo' => 'PageNo',
        'pageSize' => 'PageSize',
        'params' => 'Params',
        'queryEndTime' => 'QueryEndTime',
        'queryStartTime' => 'QueryStartTime',
        'requestId' => 'RequestId',
        'servicerId' => 'ServicerId',
        'servicerIdList' => 'ServicerIdList',
        'servicerName' => 'ServicerName',
    ];

    public function validate()
    {
        if (\is_array($this->acidList)) {
            Model::validateArray($this->acidList);
        }
        if (\is_array($this->callResultList)) {
            Model::validateArray($this->callResultList);
        }
        if (\is_array($this->callTypeList)) {
            Model::validateArray($this->callTypeList);
        }
        if (\is_array($this->calledNumberList)) {
            Model::validateArray($this->calledNumberList);
        }
        if (\is_array($this->callingNumberList)) {
            Model::validateArray($this->callingNumberList);
        }
        if (\is_array($this->groupIdList)) {
            Model::validateArray($this->groupIdList);
        }
        if (\is_array($this->memberIdList)) {
            Model::validateArray($this->memberIdList);
        }
        if (\is_array($this->servicerIdList)) {
            Model::validateArray($this->servicerIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->acid) {
            $res['Acid'] = $this->acid;
        }

        if (null !== $this->acidList) {
            if (\is_array($this->acidList)) {
                $res['AcidList'] = [];
                $n1 = 0;
                foreach ($this->acidList as $item1) {
                    $res['AcidList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->callResult) {
            $res['CallResult'] = $this->callResult;
        }

        if (null !== $this->callResultList) {
            if (\is_array($this->callResultList)) {
                $res['CallResultList'] = [];
                $n1 = 0;
                foreach ($this->callResultList as $item1) {
                    $res['CallResultList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->callType) {
            $res['CallType'] = $this->callType;
        }

        if (null !== $this->callTypeList) {
            if (\is_array($this->callTypeList)) {
                $res['CallTypeList'] = [];
                $n1 = 0;
                foreach ($this->callTypeList as $item1) {
                    $res['CallTypeList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->calledNumber) {
            $res['CalledNumber'] = $this->calledNumber;
        }

        if (null !== $this->calledNumberList) {
            if (\is_array($this->calledNumberList)) {
                $res['CalledNumberList'] = [];
                $n1 = 0;
                foreach ($this->calledNumberList as $item1) {
                    $res['CalledNumberList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->callingNumber) {
            $res['CallingNumber'] = $this->callingNumber;
        }

        if (null !== $this->callingNumberList) {
            if (\is_array($this->callingNumberList)) {
                $res['CallingNumberList'] = [];
                $n1 = 0;
                foreach ($this->callingNumberList as $item1) {
                    $res['CallingNumberList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }

        if (null !== $this->groupIdList) {
            if (\is_array($this->groupIdList)) {
                $res['GroupIdList'] = [];
                $n1 = 0;
                foreach ($this->groupIdList as $item1) {
                    $res['GroupIdList'][$n1++] = $item1;
                }
            }
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
            if (\is_array($this->memberIdList)) {
                $res['MemberIdList'] = [];
                $n1 = 0;
                foreach ($this->memberIdList as $item1) {
                    $res['MemberIdList'][$n1++] = $item1;
                }
            }
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
            if (\is_array($this->servicerIdList)) {
                $res['ServicerIdList'] = [];
                $n1 = 0;
                foreach ($this->servicerIdList as $item1) {
                    $res['ServicerIdList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->servicerName) {
            $res['ServicerName'] = $this->servicerName;
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
        if (isset($map['Acid'])) {
            $model->acid = $map['Acid'];
        }

        if (isset($map['AcidList'])) {
            if (!empty($map['AcidList'])) {
                $model->acidList = [];
                $n1 = 0;
                foreach ($map['AcidList'] as $item1) {
                    $model->acidList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['CallResult'])) {
            $model->callResult = $map['CallResult'];
        }

        if (isset($map['CallResultList'])) {
            if (!empty($map['CallResultList'])) {
                $model->callResultList = [];
                $n1 = 0;
                foreach ($map['CallResultList'] as $item1) {
                    $model->callResultList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['CallType'])) {
            $model->callType = $map['CallType'];
        }

        if (isset($map['CallTypeList'])) {
            if (!empty($map['CallTypeList'])) {
                $model->callTypeList = [];
                $n1 = 0;
                foreach ($map['CallTypeList'] as $item1) {
                    $model->callTypeList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['CalledNumber'])) {
            $model->calledNumber = $map['CalledNumber'];
        }

        if (isset($map['CalledNumberList'])) {
            if (!empty($map['CalledNumberList'])) {
                $model->calledNumberList = [];
                $n1 = 0;
                foreach ($map['CalledNumberList'] as $item1) {
                    $model->calledNumberList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['CallingNumber'])) {
            $model->callingNumber = $map['CallingNumber'];
        }

        if (isset($map['CallingNumberList'])) {
            if (!empty($map['CallingNumberList'])) {
                $model->callingNumberList = [];
                $n1 = 0;
                foreach ($map['CallingNumberList'] as $item1) {
                    $model->callingNumberList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        if (isset($map['GroupIdList'])) {
            if (!empty($map['GroupIdList'])) {
                $model->groupIdList = [];
                $n1 = 0;
                foreach ($map['GroupIdList'] as $item1) {
                    $model->groupIdList[$n1++] = $item1;
                }
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
                $model->memberIdList = [];
                $n1 = 0;
                foreach ($map['MemberIdList'] as $item1) {
                    $model->memberIdList[$n1++] = $item1;
                }
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
                $model->servicerIdList = [];
                $n1 = 0;
                foreach ($map['ServicerIdList'] as $item1) {
                    $model->servicerIdList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ServicerName'])) {
            $model->servicerName = $map['ServicerName'];
        }

        return $model;
    }
}
