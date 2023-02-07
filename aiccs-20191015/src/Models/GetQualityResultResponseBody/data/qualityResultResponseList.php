<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\GetQualityResultResponseBody\data;

use AlibabaCloud\Tea\Model;

class qualityResultResponseList extends Model
{
    /**
     * @var string
     */
    public $channelType;

    /**
     * @var string
     */
    public $channelTypeName;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var string
     */
    public $hitDetail;

    /**
     * @var bool
     */
    public $hitStatus;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $memberName;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var string
     */
    public $ruleId;

    /**
     * @var string
     */
    public $ruleName;

    /**
     * @var string
     */
    public $servicerId;

    /**
     * @var string
     */
    public $servicerName;

    /**
     * @var string
     */
    public $touchId;

    /**
     * @var string
     */
    public $touchStartTime;
    protected $_name = [
        'channelType'     => 'ChannelType',
        'channelTypeName' => 'ChannelTypeName',
        'groupId'         => 'GroupId',
        'groupName'       => 'GroupName',
        'hitDetail'       => 'HitDetail',
        'hitStatus'       => 'HitStatus',
        'instanceName'    => 'InstanceName',
        'memberName'      => 'MemberName',
        'projectId'       => 'ProjectId',
        'projectName'     => 'ProjectName',
        'ruleId'          => 'RuleId',
        'ruleName'        => 'RuleName',
        'servicerId'      => 'ServicerId',
        'servicerName'    => 'ServicerName',
        'touchId'         => 'TouchId',
        'touchStartTime'  => 'TouchStartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->channelType) {
            $res['ChannelType'] = $this->channelType;
        }
        if (null !== $this->channelTypeName) {
            $res['ChannelTypeName'] = $this->channelTypeName;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->hitDetail) {
            $res['HitDetail'] = $this->hitDetail;
        }
        if (null !== $this->hitStatus) {
            $res['HitStatus'] = $this->hitStatus;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->memberName) {
            $res['MemberName'] = $this->memberName;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->servicerId) {
            $res['ServicerId'] = $this->servicerId;
        }
        if (null !== $this->servicerName) {
            $res['ServicerName'] = $this->servicerName;
        }
        if (null !== $this->touchId) {
            $res['TouchId'] = $this->touchId;
        }
        if (null !== $this->touchStartTime) {
            $res['TouchStartTime'] = $this->touchStartTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return qualityResultResponseList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChannelType'])) {
            $model->channelType = $map['ChannelType'];
        }
        if (isset($map['ChannelTypeName'])) {
            $model->channelTypeName = $map['ChannelTypeName'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['HitDetail'])) {
            $model->hitDetail = $map['HitDetail'];
        }
        if (isset($map['HitStatus'])) {
            $model->hitStatus = $map['HitStatus'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['MemberName'])) {
            $model->memberName = $map['MemberName'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['ServicerId'])) {
            $model->servicerId = $map['ServicerId'];
        }
        if (isset($map['ServicerName'])) {
            $model->servicerName = $map['ServicerName'];
        }
        if (isset($map['TouchId'])) {
            $model->touchId = $map['TouchId'];
        }
        if (isset($map['TouchStartTime'])) {
            $model->touchStartTime = $map['TouchStartTime'];
        }

        return $model;
    }
}
