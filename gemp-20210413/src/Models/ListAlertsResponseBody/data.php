<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\ListAlertsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 20000
     *
     * @var int
     */
    public $alertId;

    /**
     * @example P1
     *
     * @var string
     */
    public $alertLevel;

    /**
     * @example A123123123
     *
     * @var string
     */
    public $alertNumber;

    /**
     * @example zabbix
     *
     * @var string
     */
    public $alertSourceName;

    /**
     * @example 2020-03-05 15:53:55
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 2021-09-08 18:30:00
     *
     * @var string
     */
    public $firstEventTime;

    /**
     * @var string
     */
    public $monitorSourceName;

    /**
     * @var int
     */
    public $relServiceDeleteType;

    /**
     * @example 服务A
     *
     * @var string
     */
    public $relatedServiceName;

    /**
     * @var int
     */
    public $routeRuleDeleteType;

    /**
     * @example 10000
     *
     * @var int
     */
    public $routeRuleId;

    /**
     * @example 流转规则
     *
     * @var string
     */
    public $routeRuleName;

    /**
     * @example 10
     *
     * @var int
     */
    public $sourceEventCount;

    /**
     * @example 报警
     *
     * @var string
     */
    public $title;
    protected $_name = [
        'alertId'              => 'alertId',
        'alertLevel'           => 'alertLevel',
        'alertNumber'          => 'alertNumber',
        'alertSourceName'      => 'alertSourceName',
        'createTime'           => 'createTime',
        'firstEventTime'       => 'firstEventTime',
        'monitorSourceName'    => 'monitorSourceName',
        'relServiceDeleteType' => 'relServiceDeleteType',
        'relatedServiceName'   => 'relatedServiceName',
        'routeRuleDeleteType'  => 'routeRuleDeleteType',
        'routeRuleId'          => 'routeRuleId',
        'routeRuleName'        => 'routeRuleName',
        'sourceEventCount'     => 'sourceEventCount',
        'title'                => 'title',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alertId) {
            $res['alertId'] = $this->alertId;
        }
        if (null !== $this->alertLevel) {
            $res['alertLevel'] = $this->alertLevel;
        }
        if (null !== $this->alertNumber) {
            $res['alertNumber'] = $this->alertNumber;
        }
        if (null !== $this->alertSourceName) {
            $res['alertSourceName'] = $this->alertSourceName;
        }
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }
        if (null !== $this->firstEventTime) {
            $res['firstEventTime'] = $this->firstEventTime;
        }
        if (null !== $this->monitorSourceName) {
            $res['monitorSourceName'] = $this->monitorSourceName;
        }
        if (null !== $this->relServiceDeleteType) {
            $res['relServiceDeleteType'] = $this->relServiceDeleteType;
        }
        if (null !== $this->relatedServiceName) {
            $res['relatedServiceName'] = $this->relatedServiceName;
        }
        if (null !== $this->routeRuleDeleteType) {
            $res['routeRuleDeleteType'] = $this->routeRuleDeleteType;
        }
        if (null !== $this->routeRuleId) {
            $res['routeRuleId'] = $this->routeRuleId;
        }
        if (null !== $this->routeRuleName) {
            $res['routeRuleName'] = $this->routeRuleName;
        }
        if (null !== $this->sourceEventCount) {
            $res['sourceEventCount'] = $this->sourceEventCount;
        }
        if (null !== $this->title) {
            $res['title'] = $this->title;
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
        if (isset($map['alertId'])) {
            $model->alertId = $map['alertId'];
        }
        if (isset($map['alertLevel'])) {
            $model->alertLevel = $map['alertLevel'];
        }
        if (isset($map['alertNumber'])) {
            $model->alertNumber = $map['alertNumber'];
        }
        if (isset($map['alertSourceName'])) {
            $model->alertSourceName = $map['alertSourceName'];
        }
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }
        if (isset($map['firstEventTime'])) {
            $model->firstEventTime = $map['firstEventTime'];
        }
        if (isset($map['monitorSourceName'])) {
            $model->monitorSourceName = $map['monitorSourceName'];
        }
        if (isset($map['relServiceDeleteType'])) {
            $model->relServiceDeleteType = $map['relServiceDeleteType'];
        }
        if (isset($map['relatedServiceName'])) {
            $model->relatedServiceName = $map['relatedServiceName'];
        }
        if (isset($map['routeRuleDeleteType'])) {
            $model->routeRuleDeleteType = $map['routeRuleDeleteType'];
        }
        if (isset($map['routeRuleId'])) {
            $model->routeRuleId = $map['routeRuleId'];
        }
        if (isset($map['routeRuleName'])) {
            $model->routeRuleName = $map['routeRuleName'];
        }
        if (isset($map['sourceEventCount'])) {
            $model->sourceEventCount = $map['sourceEventCount'];
        }
        if (isset($map['title'])) {
            $model->title = $map['title'];
        }

        return $model;
    }
}
