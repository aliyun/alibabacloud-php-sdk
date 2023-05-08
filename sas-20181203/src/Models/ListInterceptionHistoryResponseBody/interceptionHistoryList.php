<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListInterceptionHistoryResponseBody;

use AlibabaCloud\Tea\Model;

class interceptionHistoryList extends Model
{
    /**
     * @description The ID of the container cluster.
     *
     * @example c556c8133b5ad4378b7fc533ddbda****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The name of the cluster.
     *
     * @example opa-terway-nonet****
     *
     * @var string
     */
    public $clusterName;

    /**
     * @description The name of the destination application.
     *
     * @example sas-web****
     *
     * @var string
     */
    public $dstAppName;

    /**
     * @description The destination namespace.
     *
     * @example service****
     *
     * @var string
     */
    public $dstNamespace;

    /**
     * @description The destination port range configured for the defense rule.
     *
     * @example 33
     *
     * @var int
     */
    public $dstPort;

    /**
     * @description The name of the destination network object.
     *
     * @example sas-web****
     *
     * @var string
     */
    public $dstRuleTargetName;

    /**
     * @description The timestamp when the alert was first generated on the current day.
     *
     * @example 1639718858000
     *
     * @var int
     */
    public $firstTime;

    /**
     * @description The ID of the alert.
     *
     * @example 1126
     *
     * @var int
     */
    public $id;

    /**
     * @description The name of the alert.
     *
     * @example Abnormal access
     *
     * @var int
     */
    public $interceptionName;

    /**
     * @description The handling type. Valid values:
     *
     *   **0**: monitor
     *   **1**: intercept
     *   **2**: generate alert
     *   **3**: allow
     *
     * @example 0
     *
     * @var int
     */
    public $interceptionType;

    /**
     * @description The timestamp when the alert was last generated on the current day.
     *
     * @example 1639731078000
     *
     * @var int
     */
    public $lastTime;

    /**
     * @description The name of the destination application.
     *
     * @example sas-service****
     *
     * @var string
     */
    public $realDstAppName;

    /**
     * @description The name of the destination image.
     *
     * @example sas-servi****
     *
     * @var string
     */
    public $realDstImageName;

    /**
     * @description The destination namespace.
     *
     * @example service****
     *
     * @var string
     */
    public $realDstNamespace;

    /**
     * @description The destination pod.
     *
     * @example sas-web-84cc7dd9****
     *
     * @var string
     */
    public $realDstPodName;

    /**
     * @description The handling type of actual hits. Valid values:
     *
     *   **0**: monitor
     *   **1**: intercept
     *   **2**: generate alert
     *   **3**: allow
     *
     * @example 0
     *
     * @var int
     */
    public $realInterceptionType;

    /**
     * @description The name of the source application.
     *
     * @example sas-service****
     *
     * @var string
     */
    public $realSrcAppName;

    /**
     * @description The name of the source image.
     *
     * @example sas-servi****
     *
     * @var string
     */
    public $realSrcImageName;

    /**
     * @description The source namespace.
     *
     * @example service****
     *
     * @var string
     */
    public $realSrcNamespace;

    /**
     * @description The source pod.
     *
     * @example sas-service-757b9d****
     *
     * @var string
     */
    public $realSrcPodName;

    /**
     * @description The risk level. Valid values:
     *
     *   **-1**: unknown
     *   **0**: none
     *   **1**: low
     *   **2**: medium
     *   **3**: high
     *
     * @example 1
     *
     * @var int
     */
    public $riskLevel;

    /**
     * @description The ID of the defense rule based on which the alert was generated.
     *
     * @example 136
     *
     * @var int
     */
    public $ruleId;

    /**
     * @description The name of the defense rule.
     *
     * @example all****
     *
     * @var string
     */
    public $ruleName;

    /**
     * @description The name of the source application.
     *
     * @example sas-web****
     *
     * @var string
     */
    public $srcAppName;

    /**
     * @description The source namespace.
     *
     * @example service****
     *
     * @var string
     */
    public $srcNamespace;

    /**
     * @description The name of the source network object.
     *
     * @example sas-web****
     *
     * @var string
     */
    public $srcRuleTargetName;

    /**
     * @description The handling status. Valid values:
     *
     *   **0**: unhandled
     *   **1**: handled
     *   **2**: manually handled
     *   **3**: ignored
     *
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @description The number of attempts.
     *
     * @example 34
     *
     * @var int
     */
    public $tryCount;
    protected $_name = [
        'clusterId'            => 'ClusterId',
        'clusterName'          => 'ClusterName',
        'dstAppName'           => 'DstAppName',
        'dstNamespace'         => 'DstNamespace',
        'dstPort'              => 'DstPort',
        'dstRuleTargetName'    => 'DstRuleTargetName',
        'firstTime'            => 'FirstTime',
        'id'                   => 'Id',
        'interceptionName'     => 'InterceptionName',
        'interceptionType'     => 'InterceptionType',
        'lastTime'             => 'LastTime',
        'realDstAppName'       => 'RealDstAppName',
        'realDstImageName'     => 'RealDstImageName',
        'realDstNamespace'     => 'RealDstNamespace',
        'realDstPodName'       => 'RealDstPodName',
        'realInterceptionType' => 'RealInterceptionType',
        'realSrcAppName'       => 'RealSrcAppName',
        'realSrcImageName'     => 'RealSrcImageName',
        'realSrcNamespace'     => 'RealSrcNamespace',
        'realSrcPodName'       => 'RealSrcPodName',
        'riskLevel'            => 'RiskLevel',
        'ruleId'               => 'RuleId',
        'ruleName'             => 'RuleName',
        'srcAppName'           => 'SrcAppName',
        'srcNamespace'         => 'SrcNamespace',
        'srcRuleTargetName'    => 'SrcRuleTargetName',
        'status'               => 'Status',
        'tryCount'             => 'TryCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }
        if (null !== $this->dstAppName) {
            $res['DstAppName'] = $this->dstAppName;
        }
        if (null !== $this->dstNamespace) {
            $res['DstNamespace'] = $this->dstNamespace;
        }
        if (null !== $this->dstPort) {
            $res['DstPort'] = $this->dstPort;
        }
        if (null !== $this->dstRuleTargetName) {
            $res['DstRuleTargetName'] = $this->dstRuleTargetName;
        }
        if (null !== $this->firstTime) {
            $res['FirstTime'] = $this->firstTime;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->interceptionName) {
            $res['InterceptionName'] = $this->interceptionName;
        }
        if (null !== $this->interceptionType) {
            $res['InterceptionType'] = $this->interceptionType;
        }
        if (null !== $this->lastTime) {
            $res['LastTime'] = $this->lastTime;
        }
        if (null !== $this->realDstAppName) {
            $res['RealDstAppName'] = $this->realDstAppName;
        }
        if (null !== $this->realDstImageName) {
            $res['RealDstImageName'] = $this->realDstImageName;
        }
        if (null !== $this->realDstNamespace) {
            $res['RealDstNamespace'] = $this->realDstNamespace;
        }
        if (null !== $this->realDstPodName) {
            $res['RealDstPodName'] = $this->realDstPodName;
        }
        if (null !== $this->realInterceptionType) {
            $res['RealInterceptionType'] = $this->realInterceptionType;
        }
        if (null !== $this->realSrcAppName) {
            $res['RealSrcAppName'] = $this->realSrcAppName;
        }
        if (null !== $this->realSrcImageName) {
            $res['RealSrcImageName'] = $this->realSrcImageName;
        }
        if (null !== $this->realSrcNamespace) {
            $res['RealSrcNamespace'] = $this->realSrcNamespace;
        }
        if (null !== $this->realSrcPodName) {
            $res['RealSrcPodName'] = $this->realSrcPodName;
        }
        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->srcAppName) {
            $res['SrcAppName'] = $this->srcAppName;
        }
        if (null !== $this->srcNamespace) {
            $res['SrcNamespace'] = $this->srcNamespace;
        }
        if (null !== $this->srcRuleTargetName) {
            $res['SrcRuleTargetName'] = $this->srcRuleTargetName;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tryCount) {
            $res['TryCount'] = $this->tryCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return interceptionHistoryList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }
        if (isset($map['DstAppName'])) {
            $model->dstAppName = $map['DstAppName'];
        }
        if (isset($map['DstNamespace'])) {
            $model->dstNamespace = $map['DstNamespace'];
        }
        if (isset($map['DstPort'])) {
            $model->dstPort = $map['DstPort'];
        }
        if (isset($map['DstRuleTargetName'])) {
            $model->dstRuleTargetName = $map['DstRuleTargetName'];
        }
        if (isset($map['FirstTime'])) {
            $model->firstTime = $map['FirstTime'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['InterceptionName'])) {
            $model->interceptionName = $map['InterceptionName'];
        }
        if (isset($map['InterceptionType'])) {
            $model->interceptionType = $map['InterceptionType'];
        }
        if (isset($map['LastTime'])) {
            $model->lastTime = $map['LastTime'];
        }
        if (isset($map['RealDstAppName'])) {
            $model->realDstAppName = $map['RealDstAppName'];
        }
        if (isset($map['RealDstImageName'])) {
            $model->realDstImageName = $map['RealDstImageName'];
        }
        if (isset($map['RealDstNamespace'])) {
            $model->realDstNamespace = $map['RealDstNamespace'];
        }
        if (isset($map['RealDstPodName'])) {
            $model->realDstPodName = $map['RealDstPodName'];
        }
        if (isset($map['RealInterceptionType'])) {
            $model->realInterceptionType = $map['RealInterceptionType'];
        }
        if (isset($map['RealSrcAppName'])) {
            $model->realSrcAppName = $map['RealSrcAppName'];
        }
        if (isset($map['RealSrcImageName'])) {
            $model->realSrcImageName = $map['RealSrcImageName'];
        }
        if (isset($map['RealSrcNamespace'])) {
            $model->realSrcNamespace = $map['RealSrcNamespace'];
        }
        if (isset($map['RealSrcPodName'])) {
            $model->realSrcPodName = $map['RealSrcPodName'];
        }
        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['SrcAppName'])) {
            $model->srcAppName = $map['SrcAppName'];
        }
        if (isset($map['SrcNamespace'])) {
            $model->srcNamespace = $map['SrcNamespace'];
        }
        if (isset($map['SrcRuleTargetName'])) {
            $model->srcRuleTargetName = $map['SrcRuleTargetName'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TryCount'])) {
            $model->tryCount = $map['TryCount'];
        }

        return $model;
    }
}
