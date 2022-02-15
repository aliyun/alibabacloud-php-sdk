<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\ListAlertsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description 报警ID
     *
     * @var int
     */
    public $alertId;

    /**
     * @description 告警优先级  1，2，3，4  对应 p1,p2,p3,p4
     *
     * @var string
     */
    public $alertLevel;

    /**
     * @description 报警编号
     *
     * @var string
     */
    public $alertNumber;

    /**
     * @description 报警源
     *
     * @var string
     */
    public $alertSourceName;

    /**
     * @description 创建时间
     *
     * @var string
     */
    public $createTime;

    /**
     * @description 第一次告警上报时间
     *
     * @var string
     */
    public $firstEventTime;

    /**
     * @description 关联服务名称
     *
     * @var string
     */
    public $relatedServiceName;

    /**
     * @description 关联流转规则ID
     *
     * @var int
     */
    public $routeRuleId;

    /**
     * @description 流转规则名字
     *
     * @var string
     */
    public $routeRuleName;

    /**
     * @description 收敛量
     *
     * @var int
     */
    public $sourceEventCount;

    /**
     * @description 报警标题
     *
     * @var string
     */
    public $title;
    protected $_name = [
        'alertId'            => 'alertId',
        'alertLevel'         => 'alertLevel',
        'alertNumber'        => 'alertNumber',
        'alertSourceName'    => 'alertSourceName',
        'createTime'         => 'createTime',
        'firstEventTime'     => 'firstEventTime',
        'relatedServiceName' => 'relatedServiceName',
        'routeRuleId'        => 'routeRuleId',
        'routeRuleName'      => 'routeRuleName',
        'sourceEventCount'   => 'sourceEventCount',
        'title'              => 'title',
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
        if (null !== $this->relatedServiceName) {
            $res['relatedServiceName'] = $this->relatedServiceName;
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
        if (isset($map['relatedServiceName'])) {
            $model->relatedServiceName = $map['relatedServiceName'];
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
