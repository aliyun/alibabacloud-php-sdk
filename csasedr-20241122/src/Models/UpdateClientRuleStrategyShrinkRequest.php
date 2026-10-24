<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CsasEdr\V20241122\Models;

use AlibabaCloud\Dara\Model;

class UpdateClientRuleStrategyShrinkRequest extends Model
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
     * @var string
     */
    public $cmdline;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $excludeUserNameListShrink;

    /**
     * @var string
     */
    public $filePath;

    /**
     * @var int
     */
    public $id;

    /**
     * @var bool
     */
    public $inSwitch;

    /**
     * @var string
     */
    public $includeGroupIdListShrink;

    /**
     * @var string
     */
    public $ip;

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
    public $md5List;

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
     * @var string
     */
    public $newFilePath;

    /**
     * @var bool
     */
    public $outSwitch;

    /**
     * @var string
     */
    public $parentCmdline;

    /**
     * @var string
     */
    public $parentProcPath;

    /**
     * @var string
     */
    public $platform;

    /**
     * @var int
     */
    public $policyType;

    /**
     * @var string
     */
    public $port;

    /**
     * @var string
     */
    public $portOnListShrink;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var string
     */
    public $procPath;

    /**
     * @var string
     */
    public $registryContent;

    /**
     * @var string
     */
    public $registryKey;

    /**
     * @var int
     */
    public $ruleType;

    /**
     * @var string
     */
    public $softWareOnListShrink;

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
        'cmdline' => 'Cmdline',
        'description' => 'Description',
        'excludeUserNameListShrink' => 'ExcludeUserNameList',
        'filePath' => 'FilePath',
        'id' => 'Id',
        'inSwitch' => 'InSwitch',
        'includeGroupIdListShrink' => 'IncludeGroupIdList',
        'ip' => 'Ip',
        'mainButtonTextCh' => 'MainButtonTextCh',
        'mainButtonTextEn' => 'MainButtonTextEn',
        'matchMode' => 'MatchMode',
        'matchTargetIds' => 'MatchTargetIds',
        'md5List' => 'Md5List',
        'minorButtonTextCh' => 'MinorButtonTextCh',
        'minorButtonTextEn' => 'MinorButtonTextEn',
        'name' => 'Name',
        'newFilePath' => 'NewFilePath',
        'outSwitch' => 'OutSwitch',
        'parentCmdline' => 'ParentCmdline',
        'parentProcPath' => 'ParentProcPath',
        'platform' => 'Platform',
        'policyType' => 'PolicyType',
        'port' => 'Port',
        'portOnListShrink' => 'PortOnList',
        'priority' => 'Priority',
        'procPath' => 'ProcPath',
        'registryContent' => 'RegistryContent',
        'registryKey' => 'RegistryKey',
        'ruleType' => 'RuleType',
        'softWareOnListShrink' => 'SoftWareOnList',
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
        if (\is_array($this->matchTargetIds)) {
            Model::validateArray($this->matchTargetIds);
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

        if (null !== $this->cmdline) {
            $res['Cmdline'] = $this->cmdline;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->excludeUserNameListShrink) {
            $res['ExcludeUserNameList'] = $this->excludeUserNameListShrink;
        }

        if (null !== $this->filePath) {
            $res['FilePath'] = $this->filePath;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->inSwitch) {
            $res['InSwitch'] = $this->inSwitch;
        }

        if (null !== $this->includeGroupIdListShrink) {
            $res['IncludeGroupIdList'] = $this->includeGroupIdListShrink;
        }

        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
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

        if (null !== $this->md5List) {
            $res['Md5List'] = $this->md5List;
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

        if (null !== $this->newFilePath) {
            $res['NewFilePath'] = $this->newFilePath;
        }

        if (null !== $this->outSwitch) {
            $res['OutSwitch'] = $this->outSwitch;
        }

        if (null !== $this->parentCmdline) {
            $res['ParentCmdline'] = $this->parentCmdline;
        }

        if (null !== $this->parentProcPath) {
            $res['ParentProcPath'] = $this->parentProcPath;
        }

        if (null !== $this->platform) {
            $res['Platform'] = $this->platform;
        }

        if (null !== $this->policyType) {
            $res['PolicyType'] = $this->policyType;
        }

        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }

        if (null !== $this->portOnListShrink) {
            $res['PortOnList'] = $this->portOnListShrink;
        }

        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }

        if (null !== $this->procPath) {
            $res['ProcPath'] = $this->procPath;
        }

        if (null !== $this->registryContent) {
            $res['RegistryContent'] = $this->registryContent;
        }

        if (null !== $this->registryKey) {
            $res['RegistryKey'] = $this->registryKey;
        }

        if (null !== $this->ruleType) {
            $res['RuleType'] = $this->ruleType;
        }

        if (null !== $this->softWareOnListShrink) {
            $res['SoftWareOnList'] = $this->softWareOnListShrink;
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

        if (isset($map['Cmdline'])) {
            $model->cmdline = $map['Cmdline'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['ExcludeUserNameList'])) {
            $model->excludeUserNameListShrink = $map['ExcludeUserNameList'];
        }

        if (isset($map['FilePath'])) {
            $model->filePath = $map['FilePath'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['InSwitch'])) {
            $model->inSwitch = $map['InSwitch'];
        }

        if (isset($map['IncludeGroupIdList'])) {
            $model->includeGroupIdListShrink = $map['IncludeGroupIdList'];
        }

        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
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

        if (isset($map['Md5List'])) {
            $model->md5List = $map['Md5List'];
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

        if (isset($map['NewFilePath'])) {
            $model->newFilePath = $map['NewFilePath'];
        }

        if (isset($map['OutSwitch'])) {
            $model->outSwitch = $map['OutSwitch'];
        }

        if (isset($map['ParentCmdline'])) {
            $model->parentCmdline = $map['ParentCmdline'];
        }

        if (isset($map['ParentProcPath'])) {
            $model->parentProcPath = $map['ParentProcPath'];
        }

        if (isset($map['Platform'])) {
            $model->platform = $map['Platform'];
        }

        if (isset($map['PolicyType'])) {
            $model->policyType = $map['PolicyType'];
        }

        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }

        if (isset($map['PortOnList'])) {
            $model->portOnListShrink = $map['PortOnList'];
        }

        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }

        if (isset($map['ProcPath'])) {
            $model->procPath = $map['ProcPath'];
        }

        if (isset($map['RegistryContent'])) {
            $model->registryContent = $map['RegistryContent'];
        }

        if (isset($map['RegistryKey'])) {
            $model->registryKey = $map['RegistryKey'];
        }

        if (isset($map['RuleType'])) {
            $model->ruleType = $map['RuleType'];
        }

        if (isset($map['SoftWareOnList'])) {
            $model->softWareOnListShrink = $map['SoftWareOnList'];
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
