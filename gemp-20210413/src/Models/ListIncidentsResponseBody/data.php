<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\ListIncidentsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $assignToWhoIsValid;

    /**
     * @description 代表创建时间的资源属性字段
     *
     * @example 21312
     *
     * @var int
     */
    public $assignUserId;

    /**
     * @description 代表资源一级ID的资源属性字段
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
     * @description 事件级别
     *
     * @example 2020-10-1 00:00:00
     *
     * @var string
     */
    public $createTime;

    /**
     * @description 时间指派人ID
     *
     * @example HIGH
     *
     * @var string
     */
    public $effect;

    /**
     * @description 修改时间
     *
     * @example 12321
     *
     * @var int
     */
    public $incidentId;

    /**
     * @description 影响程度
     *
     * @example P4
     *
     * @var string
     */
    public $incidentLevel;

    /**
     * @example I3000021
     *
     * @var string
     */
    public $incidentNumber;

    /**
     * @description 关联流转规则ID
     *
     * @example RESPONDED
     *
     * @var string
     */
    public $incidentStatus;

    /**
     * @description 事件内容
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
     * @var int
     */
    public $relRouteRuleDeleteType;

    /**
     * @var int
     */
    public $relServiceDeleteType;

    /**
     * @description 事件状态
     *
     * @example 213123
     *
     * @var int
     */
    public $relatedServiceId;

    /**
     * @var string
     */
    public $relatedServiceName;

    /**
     * @description 关联的服务ID
     *
     * @example 123
     *
     * @var int
     */
    public $routeRuleId;

    /**
     * @var string
     */
    public $routeRuleName;
    protected $_name = [
        'assignToWhoIsValid'     => 'assignToWhoIsValid',
        'assignUserId'           => 'assignUserId',
        'assignUserName'         => 'assignUserName',
        'assignUserPhone'        => 'assignUserPhone',
        'createTime'             => 'createTime',
        'effect'                 => 'effect',
        'incidentId'             => 'incidentId',
        'incidentLevel'          => 'incidentLevel',
        'incidentNumber'         => 'incidentNumber',
        'incidentStatus'         => 'incidentStatus',
        'incidentTitle'          => 'incidentTitle',
        'isManual'               => 'isManual',
        'relRouteRuleDeleteType' => 'relRouteRuleDeleteType',
        'relServiceDeleteType'   => 'relServiceDeleteType',
        'relatedServiceId'       => 'relatedServiceId',
        'relatedServiceName'     => 'relatedServiceName',
        'routeRuleId'            => 'routeRuleId',
        'routeRuleName'          => 'routeRuleName',
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
        if (null !== $this->effect) {
            $res['effect'] = $this->effect;
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
        if (null !== $this->relRouteRuleDeleteType) {
            $res['relRouteRuleDeleteType'] = $this->relRouteRuleDeleteType;
        }
        if (null !== $this->relServiceDeleteType) {
            $res['relServiceDeleteType'] = $this->relServiceDeleteType;
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
        if (isset($map['effect'])) {
            $model->effect = $map['effect'];
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
        if (isset($map['relRouteRuleDeleteType'])) {
            $model->relRouteRuleDeleteType = $map['relRouteRuleDeleteType'];
        }
        if (isset($map['relServiceDeleteType'])) {
            $model->relServiceDeleteType = $map['relServiceDeleteType'];
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
