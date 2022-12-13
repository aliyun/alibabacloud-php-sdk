<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\GetSimilarIncidentStatisticsResponseBody\data;

use AlibabaCloud\Tea\Model;

class topFiveIncidents extends Model
{
    /**
     * @example 43
     *
     * @var string
     */
    public $assignUserId;

    /**
     * @example 张老三
     *
     * @var string
     */
    public $assignUserName;

    /**
     * @example 2021-09-09 09:09:09
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 6787678767
     *
     * @var int
     */
    public $durationTime;

    /**
     * @example 2
     *
     * @var int
     */
    public $finishReason;

    /**
     * @example xxxx原因
     *
     * @var string
     */
    public $finishReasonDescription;

    /**
     * @example xxx方案
     *
     * @var string
     */
    public $finishSolutionDescription;

    /**
     * @example 5
     *
     * @var int
     */
    public $incidentFinishSolution;

    /**
     * @example 32
     *
     * @var int
     */
    public $incidentId;

    /**
     * @example I34324
     *
     * @var string
     */
    public $incidentNumber;

    /**
     * @example xxx事件
     *
     * @var string
     */
    public $incidentTitle;

    /**
     * @example 4343
     *
     * @var int
     */
    public $relatedRouteRuleId;

    /**
     * @example xxx
     *
     * @var string
     */
    public $relatedRouteRuleName;

    /**
     * @example 1992.21
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
