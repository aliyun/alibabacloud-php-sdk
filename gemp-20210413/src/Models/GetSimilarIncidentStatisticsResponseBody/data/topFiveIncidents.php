<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\GetSimilarIncidentStatisticsResponseBody\data;

use AlibabaCloud\Tea\Model;

class topFiveIncidents extends Model
{
    /**
     * @description 分派人id
     *
     * @var string
     */
    public $assignUserId;

    /**
     * @description 分派人
     *
     * @var string
     */
    public $assignUserName;

    /**
     * @description 触发时间
     *
     * @var string
     */
    public $createTime;

    /**
     * @description 持续时间
     *
     * @var int
     */
    public $durationTime;

    /**
     * @description 触发原因
     *
     * @var int
     */
    public $finishReason;

    /**
     * @description 触发原因描述
     *
     * @var string
     */
    public $finishReasonDescription;

    /**
     * @description 解决方案描述
     *
     * @var string
     */
    public $finishSolutionDescription;

    /**
     * @description 解决方案
     *
     * @var int
     */
    public $incidentFinishSolution;

    /**
     * @description 事件id
     *
     * @var int
     */
    public $incidentId;

    /**
     * @description 事件编号
     *
     * @var string
     */
    public $incidentNumber;

    /**
     * @description 事件标题
     *
     * @var string
     */
    public $incidentTitle;

    /**
     * @description 流转规则id
     *
     * @var int
     */
    public $relatedRouteRuleId;

    /**
     * @description 流转规则名称
     *
     * @var string
     */
    public $relatedRouteRuleName;

    /**
     * @description 相似度
     *
     * @var string
     */
    public $similarScore;
    protected $_name = [
        'assignUserId'              => 'assignUserId',
        'assignUserName'            => 'assignUserName',
        'createTime'                => 'createTime',
        'durationTime'              => 'durationTime',
        'finishReason'              => 'finishReason',
        'finishReasonDescription'   => 'finishReasonDescription',
        'finishSolutionDescription' => 'finishSolutionDescription',
        'incidentFinishSolution'    => 'incidentFinishSolution',
        'incidentId'                => 'incidentId',
        'incidentNumber'            => 'incidentNumber',
        'incidentTitle'             => 'incidentTitle',
        'relatedRouteRuleId'        => 'relatedRouteRuleId',
        'relatedRouteRuleName'      => 'relatedRouteRuleName',
        'similarScore'              => 'similarScore',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->assignUserId) {
            $res['assignUserId'] = $this->assignUserId;
        }
        if (null !== $this->assignUserName) {
            $res['assignUserName'] = $this->assignUserName;
        }
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }
        if (null !== $this->durationTime) {
            $res['durationTime'] = $this->durationTime;
        }
        if (null !== $this->finishReason) {
            $res['finishReason'] = $this->finishReason;
        }
        if (null !== $this->finishReasonDescription) {
            $res['finishReasonDescription'] = $this->finishReasonDescription;
        }
        if (null !== $this->finishSolutionDescription) {
            $res['finishSolutionDescription'] = $this->finishSolutionDescription;
        }
        if (null !== $this->incidentFinishSolution) {
            $res['incidentFinishSolution'] = $this->incidentFinishSolution;
        }
        if (null !== $this->incidentId) {
            $res['incidentId'] = $this->incidentId;
        }
        if (null !== $this->incidentNumber) {
            $res['incidentNumber'] = $this->incidentNumber;
        }
        if (null !== $this->incidentTitle) {
            $res['incidentTitle'] = $this->incidentTitle;
        }
        if (null !== $this->relatedRouteRuleId) {
            $res['relatedRouteRuleId'] = $this->relatedRouteRuleId;
        }
        if (null !== $this->relatedRouteRuleName) {
            $res['relatedRouteRuleName'] = $this->relatedRouteRuleName;
        }
        if (null !== $this->similarScore) {
            $res['similarScore'] = $this->similarScore;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return topFiveIncidents
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['assignUserId'])) {
            $model->assignUserId = $map['assignUserId'];
        }
        if (isset($map['assignUserName'])) {
            $model->assignUserName = $map['assignUserName'];
        }
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }
        if (isset($map['durationTime'])) {
            $model->durationTime = $map['durationTime'];
        }
        if (isset($map['finishReason'])) {
            $model->finishReason = $map['finishReason'];
        }
        if (isset($map['finishReasonDescription'])) {
            $model->finishReasonDescription = $map['finishReasonDescription'];
        }
        if (isset($map['finishSolutionDescription'])) {
            $model->finishSolutionDescription = $map['finishSolutionDescription'];
        }
        if (isset($map['incidentFinishSolution'])) {
            $model->incidentFinishSolution = $map['incidentFinishSolution'];
        }
        if (isset($map['incidentId'])) {
            $model->incidentId = $map['incidentId'];
        }
        if (isset($map['incidentNumber'])) {
            $model->incidentNumber = $map['incidentNumber'];
        }
        if (isset($map['incidentTitle'])) {
            $model->incidentTitle = $map['incidentTitle'];
        }
        if (isset($map['relatedRouteRuleId'])) {
            $model->relatedRouteRuleId = $map['relatedRouteRuleId'];
        }
        if (isset($map['relatedRouteRuleName'])) {
            $model->relatedRouteRuleName = $map['relatedRouteRuleName'];
        }
        if (isset($map['similarScore'])) {
            $model->similarScore = $map['similarScore'];
        }

        return $model;
    }
}
