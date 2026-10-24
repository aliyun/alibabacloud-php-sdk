<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CsasEdr\V20241122\Models\ListClientRuleStrategyResponseBody;

use AlibabaCloud\Dara\Model;

class list_ extends Model
{
    /**
     * @var int
     */
    public $actionType;

    /**
     * @var int
     */
    public $allGroup;

    /**
     * @var string
     */
    public $approvalId;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string[]
     */
    public $excludeUserNameList;

    /**
     * @var int
     */
    public $id;

    /**
     * @var bool
     */
    public $inSwitch;

    /**
     * @var string[]
     */
    public $includeGroupIdList;

    /**
     * @var string
     */
    public $mainButtonTextCh;

    /**
     * @var string
     */
    public $mainButtonTextEn;

    /**
     * @var string
     */
    public $matchMode;

    /**
     * @var string[]
     */
    public $matchTargetIds;

    /**
     * @var string
     */
    public $minorButtonTextCh;

    /**
     * @var string
     */
    public $minorButtonTextEn;

    /**
     * @var string
     */
    public $name;

    /**
     * @var bool
     */
    public $outSwitch;

    /**
     * @var int
     */
    public $policyType;

    /**
     * @var string[]
     */
    public $portOnList;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var string
     */
    public $selectionKey;

    /**
     * @var string[]
     */
    public $softWareOnList;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $strategySourceType;

    /**
     * @var int
     */
    public $supportsApproval;

    /**
     * @var string
     */
    public $usContent;

    /**
     * @var string
     */
    public $usTitle;

    /**
     * @var string
     */
    public $zhContent;

    /**
     * @var string
     */
    public $zhTitle;
    protected $_name = [
        'actionType' => 'ActionType',
        'allGroup' => 'AllGroup',
        'approvalId' => 'ApprovalId',
        'createTime' => 'CreateTime',
        'description' => 'Description',
        'excludeUserNameList' => 'ExcludeUserNameList',
        'id' => 'Id',
        'inSwitch' => 'InSwitch',
        'includeGroupIdList' => 'IncludeGroupIdList',
        'mainButtonTextCh' => 'MainButtonTextCh',
        'mainButtonTextEn' => 'MainButtonTextEn',
        'matchMode' => 'MatchMode',
        'matchTargetIds' => 'MatchTargetIds',
        'minorButtonTextCh' => 'MinorButtonTextCh',
        'minorButtonTextEn' => 'MinorButtonTextEn',
        'name' => 'Name',
        'outSwitch' => 'OutSwitch',
        'policyType' => 'PolicyType',
        'portOnList' => 'PortOnList',
        'priority' => 'Priority',
        'selectionKey' => 'SelectionKey',
        'softWareOnList' => 'SoftWareOnList',
        'status' => 'Status',
        'strategySourceType' => 'StrategySourceType',
        'supportsApproval' => 'SupportsApproval',
        'usContent' => 'UsContent',
        'usTitle' => 'UsTitle',
        'zhContent' => 'ZhContent',
        'zhTitle' => 'ZhTitle',
    ];

    public function validate()
    {
        if (\is_array($this->excludeUserNameList)) {
            Model::validateArray($this->excludeUserNameList);
        }
        if (\is_array($this->includeGroupIdList)) {
            Model::validateArray($this->includeGroupIdList);
        }
        if (\is_array($this->matchTargetIds)) {
            Model::validateArray($this->matchTargetIds);
        }
        if (\is_array($this->portOnList)) {
            Model::validateArray($this->portOnList);
        }
        if (\is_array($this->softWareOnList)) {
            Model::validateArray($this->softWareOnList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->actionType) {
            $res['ActionType'] = $this->actionType;
        }

        if (null !== $this->allGroup) {
            $res['AllGroup'] = $this->allGroup;
        }

        if (null !== $this->approvalId) {
            $res['ApprovalId'] = $this->approvalId;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->excludeUserNameList) {
            if (\is_array($this->excludeUserNameList)) {
                $res['ExcludeUserNameList'] = [];
                $n1 = 0;
                foreach ($this->excludeUserNameList as $item1) {
                    $res['ExcludeUserNameList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->inSwitch) {
            $res['InSwitch'] = $this->inSwitch;
        }

        if (null !== $this->includeGroupIdList) {
            if (\is_array($this->includeGroupIdList)) {
                $res['IncludeGroupIdList'] = [];
                $n1 = 0;
                foreach ($this->includeGroupIdList as $item1) {
                    $res['IncludeGroupIdList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->mainButtonTextCh) {
            $res['MainButtonTextCh'] = $this->mainButtonTextCh;
        }

        if (null !== $this->mainButtonTextEn) {
            $res['MainButtonTextEn'] = $this->mainButtonTextEn;
        }

        if (null !== $this->matchMode) {
            $res['MatchMode'] = $this->matchMode;
        }

        if (null !== $this->matchTargetIds) {
            if (\is_array($this->matchTargetIds)) {
                $res['MatchTargetIds'] = [];
                $n1 = 0;
                foreach ($this->matchTargetIds as $item1) {
                    $res['MatchTargetIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->minorButtonTextCh) {
            $res['MinorButtonTextCh'] = $this->minorButtonTextCh;
        }

        if (null !== $this->minorButtonTextEn) {
            $res['MinorButtonTextEn'] = $this->minorButtonTextEn;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->outSwitch) {
            $res['OutSwitch'] = $this->outSwitch;
        }

        if (null !== $this->policyType) {
            $res['PolicyType'] = $this->policyType;
        }

        if (null !== $this->portOnList) {
            if (\is_array($this->portOnList)) {
                $res['PortOnList'] = [];
                $n1 = 0;
                foreach ($this->portOnList as $item1) {
                    $res['PortOnList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }

        if (null !== $this->selectionKey) {
            $res['SelectionKey'] = $this->selectionKey;
        }

        if (null !== $this->softWareOnList) {
            if (\is_array($this->softWareOnList)) {
                $res['SoftWareOnList'] = [];
                $n1 = 0;
                foreach ($this->softWareOnList as $item1) {
                    $res['SoftWareOnList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->strategySourceType) {
            $res['StrategySourceType'] = $this->strategySourceType;
        }

        if (null !== $this->supportsApproval) {
            $res['SupportsApproval'] = $this->supportsApproval;
        }

        if (null !== $this->usContent) {
            $res['UsContent'] = $this->usContent;
        }

        if (null !== $this->usTitle) {
            $res['UsTitle'] = $this->usTitle;
        }

        if (null !== $this->zhContent) {
            $res['ZhContent'] = $this->zhContent;
        }

        if (null !== $this->zhTitle) {
            $res['ZhTitle'] = $this->zhTitle;
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
        if (isset($map['ActionType'])) {
            $model->actionType = $map['ActionType'];
        }

        if (isset($map['AllGroup'])) {
            $model->allGroup = $map['AllGroup'];
        }

        if (isset($map['ApprovalId'])) {
            $model->approvalId = $map['ApprovalId'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['ExcludeUserNameList'])) {
            if (!empty($map['ExcludeUserNameList'])) {
                $model->excludeUserNameList = [];
                $n1 = 0;
                foreach ($map['ExcludeUserNameList'] as $item1) {
                    $model->excludeUserNameList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['InSwitch'])) {
            $model->inSwitch = $map['InSwitch'];
        }

        if (isset($map['IncludeGroupIdList'])) {
            if (!empty($map['IncludeGroupIdList'])) {
                $model->includeGroupIdList = [];
                $n1 = 0;
                foreach ($map['IncludeGroupIdList'] as $item1) {
                    $model->includeGroupIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['MainButtonTextCh'])) {
            $model->mainButtonTextCh = $map['MainButtonTextCh'];
        }

        if (isset($map['MainButtonTextEn'])) {
            $model->mainButtonTextEn = $map['MainButtonTextEn'];
        }

        if (isset($map['MatchMode'])) {
            $model->matchMode = $map['MatchMode'];
        }

        if (isset($map['MatchTargetIds'])) {
            if (!empty($map['MatchTargetIds'])) {
                $model->matchTargetIds = [];
                $n1 = 0;
                foreach ($map['MatchTargetIds'] as $item1) {
                    $model->matchTargetIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['MinorButtonTextCh'])) {
            $model->minorButtonTextCh = $map['MinorButtonTextCh'];
        }

        if (isset($map['MinorButtonTextEn'])) {
            $model->minorButtonTextEn = $map['MinorButtonTextEn'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['OutSwitch'])) {
            $model->outSwitch = $map['OutSwitch'];
        }

        if (isset($map['PolicyType'])) {
            $model->policyType = $map['PolicyType'];
        }

        if (isset($map['PortOnList'])) {
            if (!empty($map['PortOnList'])) {
                $model->portOnList = [];
                $n1 = 0;
                foreach ($map['PortOnList'] as $item1) {
                    $model->portOnList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }

        if (isset($map['SelectionKey'])) {
            $model->selectionKey = $map['SelectionKey'];
        }

        if (isset($map['SoftWareOnList'])) {
            if (!empty($map['SoftWareOnList'])) {
                $model->softWareOnList = [];
                $n1 = 0;
                foreach ($map['SoftWareOnList'] as $item1) {
                    $model->softWareOnList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['StrategySourceType'])) {
            $model->strategySourceType = $map['StrategySourceType'];
        }

        if (isset($map['SupportsApproval'])) {
            $model->supportsApproval = $map['SupportsApproval'];
        }

        if (isset($map['UsContent'])) {
            $model->usContent = $map['UsContent'];
        }

        if (isset($map['UsTitle'])) {
            $model->usTitle = $map['UsTitle'];
        }

        if (isset($map['ZhContent'])) {
            $model->zhContent = $map['ZhContent'];
        }

        if (isset($map['ZhTitle'])) {
            $model->zhTitle = $map['ZhTitle'];
        }

        return $model;
    }
}
