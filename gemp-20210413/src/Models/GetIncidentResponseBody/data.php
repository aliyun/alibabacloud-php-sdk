<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\GetIncidentResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $assignToWhoIsValid;

    /**
     * @example 12312
     *
     * @var int
     */
    public $assignUserId;

    /**
     * @example 小明
     *
     * @var string
     */
    public $assignUserName;

    /**
     * @example 1390000****
     *
     * @var string
     */
    public $assignUserPhone;

    /**
     * @example 2020-01-10 00:00:00
     *
     * @var string
     */
    public $createTime;

    /**
     * @var int
     */
    public $defaultAssignToWho;

    /**
     * @var int
     */
    public $defaultAssignToWhoIsValid;

    /**
     * @var string
     */
    public $defaultAssignToWhoName;

    /**
     * @example 3000000
     *
     * @var int
     */
    public $durationTime;

    /**
     * @example LOW
     *
     * @var string
     */
    public $effect;

    /**
     * @example 事件描述
     *
     * @var string
     */
    public $incidentDescription;

    /**
     * @example 3213
     *
     * @var int
     */
    public $incidentId;

    /**
     * @example P4
     *
     * @var string
     */
    public $incidentLevel;

    /**
     * @example I3443831000000016247759753663894
     *
     * @var string
     */
    public $incidentNumber;

    /**
     * @example FINISHE
     *
     * @var string
     */
    public $incidentStatus;

    /**
     * @example 事件标题
     *
     * @var string
     */
    public $incidentTitle;

    /**
     * @example true
     *
     * @var bool
     */
    public $isManual;

    /**
     * @example true
     *
     * @var bool
     */
    public $isUpgrade;

    /**
     * @example 1 短信  2  邮件  3  电话  4 企微群 5 钉钉群 6飞书 7 群通知 8 slack
     *
     * @var string[]
     */
    public $notifyChannels;

    /**
     * @example 232113
     *
     * @var int
     */
    public $problemId;

    /**
     * @example 3332113231453321
     *
     * @var string
     */
    public $problemNumber;

    /**
     * @var int
     */
    public $relRouteRuleDeleteType;

    /**
     * @var int
     */
    public $relServiceDeleteType;

    /**
     * @var int
     */
    public $relServiceGroupIsValid;

    /**
     * @example 关联服务描述
     *
     * @var string
     */
    public $relatedServiceDescription;

    /**
     * @example 13000
     *
     * @var int
     */
    public $relatedServiceGroupId;

    /**
     * @example 服务组A
     *
     * @var string
     */
    public $relatedServiceGroupName;

    /**
     * @example 312312
     *
     * @var int
     */
    public $relatedServiceId;

    /**
     * @example 服务A
     *
     * @var string
     */
    public $relatedServiceName;

    /**
     * @example 3123
     *
     * @var int
     */
    public $routeRuleId;

    /**
     * @example 流转规则A
     *
     * @var string
     */
    public $routeRuleName;
    protected $_name = [
        'assignToWhoIsValid'        => 'assignToWhoIsValid',
        'assignUserId'              => 'assignUserId',
        'assignUserName'            => 'assignUserName',
        'assignUserPhone'           => 'assignUserPhone',
        'createTime'                => 'createTime',
        'defaultAssignToWho'        => 'defaultAssignToWho',
        'defaultAssignToWhoIsValid' => 'defaultAssignToWhoIsValid',
        'defaultAssignToWhoName'    => 'defaultAssignToWhoName',
        'durationTime'              => 'durationTime',
        'effect'                    => 'effect',
        'incidentDescription'       => 'incidentDescription',
        'incidentId'                => 'incidentId',
        'incidentLevel'             => 'incidentLevel',
        'incidentNumber'            => 'incidentNumber',
        'incidentStatus'            => 'incidentStatus',
        'incidentTitle'             => 'incidentTitle',
        'isManual'                  => 'isManual',
        'isUpgrade'                 => 'isUpgrade',
        'notifyChannels'            => 'notifyChannels',
        'problemId'                 => 'problemId',
        'problemNumber'             => 'problemNumber',
        'relRouteRuleDeleteType'    => 'relRouteRuleDeleteType',
        'relServiceDeleteType'      => 'relServiceDeleteType',
        'relServiceGroupIsValid'    => 'relServiceGroupIsValid',
        'relatedServiceDescription' => 'relatedServiceDescription',
        'relatedServiceGroupId'     => 'relatedServiceGroupId',
        'relatedServiceGroupName'   => 'relatedServiceGroupName',
        'relatedServiceId'          => 'relatedServiceId',
        'relatedServiceName'        => 'relatedServiceName',
        'routeRuleId'               => 'routeRuleId',
        'routeRuleName'             => 'routeRuleName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->assignToWhoIsValid) {
            $res['assignToWhoIsValid'] = $this->assignToWhoIsValid;
        }
        if (null !== $this->assignUserId) {
            $res['assignUserId'] = $this->assignUserId;
        }
        if (null !== $this->assignUserName) {
            $res['assignUserName'] = $this->assignUserName;
        }
        if (null !== $this->assignUserPhone) {
            $res['assignUserPhone'] = $this->assignUserPhone;
        }
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }
        if (null !== $this->defaultAssignToWho) {
            $res['defaultAssignToWho'] = $this->defaultAssignToWho;
        }
        if (null !== $this->defaultAssignToWhoIsValid) {
            $res['defaultAssignToWhoIsValid'] = $this->defaultAssignToWhoIsValid;
        }
        if (null !== $this->defaultAssignToWhoName) {
            $res['defaultAssignToWhoName'] = $this->defaultAssignToWhoName;
        }
        if (null !== $this->durationTime) {
            $res['durationTime'] = $this->durationTime;
        }
        if (null !== $this->effect) {
            $res['effect'] = $this->effect;
        }
        if (null !== $this->incidentDescription) {
            $res['incidentDescription'] = $this->incidentDescription;
        }
        if (null !== $this->incidentId) {
            $res['incidentId'] = $this->incidentId;
        }
        if (null !== $this->incidentLevel) {
            $res['incidentLevel'] = $this->incidentLevel;
        }
        if (null !== $this->incidentNumber) {
            $res['incidentNumber'] = $this->incidentNumber;
        }
        if (null !== $this->incidentStatus) {
            $res['incidentStatus'] = $this->incidentStatus;
        }
        if (null !== $this->incidentTitle) {
            $res['incidentTitle'] = $this->incidentTitle;
        }
        if (null !== $this->isManual) {
            $res['isManual'] = $this->isManual;
        }
        if (null !== $this->isUpgrade) {
            $res['isUpgrade'] = $this->isUpgrade;
        }
        if (null !== $this->notifyChannels) {
            $res['notifyChannels'] = $this->notifyChannels;
        }
        if (null !== $this->problemId) {
            $res['problemId'] = $this->problemId;
        }
        if (null !== $this->problemNumber) {
            $res['problemNumber'] = $this->problemNumber;
        }
        if (null !== $this->relRouteRuleDeleteType) {
            $res['relRouteRuleDeleteType'] = $this->relRouteRuleDeleteType;
        }
        if (null !== $this->relServiceDeleteType) {
            $res['relServiceDeleteType'] = $this->relServiceDeleteType;
        }
        if (null !== $this->relServiceGroupIsValid) {
            $res['relServiceGroupIsValid'] = $this->relServiceGroupIsValid;
        }
        if (null !== $this->relatedServiceDescription) {
            $res['relatedServiceDescription'] = $this->relatedServiceDescription;
        }
        if (null !== $this->relatedServiceGroupId) {
            $res['relatedServiceGroupId'] = $this->relatedServiceGroupId;
        }
        if (null !== $this->relatedServiceGroupName) {
            $res['relatedServiceGroupName'] = $this->relatedServiceGroupName;
        }
        if (null !== $this->relatedServiceId) {
            $res['relatedServiceId'] = $this->relatedServiceId;
        }
        if (null !== $this->relatedServiceName) {
            $res['relatedServiceName'] = $this->relatedServiceName;
        }
        if (null !== $this->routeRuleId) {
            $res['routeRuleId'] = $this->routeRuleId;
        }
        if (null !== $this->routeRuleName) {
            $res['routeRuleName'] = $this->routeRuleName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['assignToWhoIsValid'])) {
            $model->assignToWhoIsValid = $map['assignToWhoIsValid'];
        }
        if (isset($map['assignUserId'])) {
            $model->assignUserId = $map['assignUserId'];
        }
        if (isset($map['assignUserName'])) {
            $model->assignUserName = $map['assignUserName'];
        }
        if (isset($map['assignUserPhone'])) {
            $model->assignUserPhone = $map['assignUserPhone'];
        }
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }
        if (isset($map['defaultAssignToWho'])) {
            $model->defaultAssignToWho = $map['defaultAssignToWho'];
        }
        if (isset($map['defaultAssignToWhoIsValid'])) {
            $model->defaultAssignToWhoIsValid = $map['defaultAssignToWhoIsValid'];
        }
        if (isset($map['defaultAssignToWhoName'])) {
            $model->defaultAssignToWhoName = $map['defaultAssignToWhoName'];
        }
        if (isset($map['durationTime'])) {
            $model->durationTime = $map['durationTime'];
        }
        if (isset($map['effect'])) {
            $model->effect = $map['effect'];
        }
        if (isset($map['incidentDescription'])) {
            $model->incidentDescription = $map['incidentDescription'];
        }
        if (isset($map['incidentId'])) {
            $model->incidentId = $map['incidentId'];
        }
        if (isset($map['incidentLevel'])) {
            $model->incidentLevel = $map['incidentLevel'];
        }
        if (isset($map['incidentNumber'])) {
            $model->incidentNumber = $map['incidentNumber'];
        }
        if (isset($map['incidentStatus'])) {
            $model->incidentStatus = $map['incidentStatus'];
        }
        if (isset($map['incidentTitle'])) {
            $model->incidentTitle = $map['incidentTitle'];
        }
        if (isset($map['isManual'])) {
            $model->isManual = $map['isManual'];
        }
        if (isset($map['isUpgrade'])) {
            $model->isUpgrade = $map['isUpgrade'];
        }
        if (isset($map['notifyChannels'])) {
            if (!empty($map['notifyChannels'])) {
                $model->notifyChannels = $map['notifyChannels'];
            }
        }
        if (isset($map['problemId'])) {
            $model->problemId = $map['problemId'];
        }
        if (isset($map['problemNumber'])) {
            $model->problemNumber = $map['problemNumber'];
        }
        if (isset($map['relRouteRuleDeleteType'])) {
            $model->relRouteRuleDeleteType = $map['relRouteRuleDeleteType'];
        }
        if (isset($map['relServiceDeleteType'])) {
            $model->relServiceDeleteType = $map['relServiceDeleteType'];
        }
        if (isset($map['relServiceGroupIsValid'])) {
            $model->relServiceGroupIsValid = $map['relServiceGroupIsValid'];
        }
        if (isset($map['relatedServiceDescription'])) {
            $model->relatedServiceDescription = $map['relatedServiceDescription'];
        }
        if (isset($map['relatedServiceGroupId'])) {
            $model->relatedServiceGroupId = $map['relatedServiceGroupId'];
        }
        if (isset($map['relatedServiceGroupName'])) {
            $model->relatedServiceGroupName = $map['relatedServiceGroupName'];
        }
        if (isset($map['relatedServiceId'])) {
            $model->relatedServiceId = $map['relatedServiceId'];
        }
        if (isset($map['relatedServiceName'])) {
            $model->relatedServiceName = $map['relatedServiceName'];
        }
        if (isset($map['routeRuleId'])) {
            $model->routeRuleId = $map['routeRuleId'];
        }
        if (isset($map['routeRuleName'])) {
            $model->routeRuleName = $map['routeRuleName'];
        }

        return $model;
    }
}
