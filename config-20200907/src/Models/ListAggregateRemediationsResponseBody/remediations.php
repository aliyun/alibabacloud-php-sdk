<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\ListAggregateRemediationsResponseBody;

use AlibabaCloud\Tea\Model;

class remediations extends Model
{
    /**
     * @description The ID of the Alibaba Cloud account to which the resource belongs.
     *
     * @example 100931896542****
     *
     * @var int
     */
    public $accountId;

    /**
     * @description The ID of the account group.
     *
     * @example ca-6b4a626622af0012****
     *
     * @var string
     */
    public $aggregatorId;

    /**
     * @description The rule ID.
     *
     * @example cr-6b7c626622af00b4****
     *
     * @var string
     */
    public $configRuleId;

    /**
     * @description The execution mode of the remediation template. Valid values:
     *
     *   NON_EXECUTION: The remediation template is not executed.
     *   AUTO_EXECUTION: The remediation template is automatically executed.
     *   MANUAL_EXECUTION: The remediation template is manually executed.
     *   NOT_CONFIG: The execution mode is not specified.
     *
     * @example AUTO_EXECUTION
     *
     * @var string
     */
    public $invokeType;

    /**
     * @description The ID of the last successful execution of the remediation template.
     *
     * @example bd7629fb-cac8-42fe-bcb1-e362c5a6****
     *
     * @var string
     */
    public $lastSuccessfulInvocationId;

    /**
     * @description The timestamp of the last successful execution of the remediation template. Unit: milliseconds.
     *
     * @example 1625451393589
     *
     * @var int
     */
    public $lastSuccessfulInvocationTime;

    /**
     * @description The mode of the last successful execution of the remediation template. Valid values:
     *
     *   NON_EXECUTION: The remediation template is not executed.
     *   AUTO_EXECUTION: The remediation template is automatically executed.
     *   MANUAL_EXECUTION: The remediation template is manually executed.
     *   NOT_CONFIG: The execution mode is not specified.
     *
     * @example AUTO_EXECUTION
     *
     * @var string
     */
    public $lastSuccessfulInvocationType;

    /**
     * @description The converted configuration of the remediation template. This parameter is returned only for an OOS remediation template.
     *
     * @example {"bucketName": "{resourceId}", "regionId": "{regionId}", "permissionName": "private"}
     *
     * @var string
     */
    public $remediaitonOriginParams;

    /**
     * @description The ID of the remediation template.
     *
     * @example crr-6b7c626622af0026****
     *
     * @var string
     */
    public $remediationId;

    /**
     * @description The source of remediation template. Valid values:
     *
     *   ALIYUN: official template.
     *   CUSTOM: custom template.
     *   NONE: none.
     *
     * @example ALIYUN
     *
     * @var string
     */
    public $remediationSourceType;

    /**
     * @description The ID of the remediation template.
     *
     * @example ACS-OSS-PutBucketAcl
     *
     * @var string
     */
    public $remediationTemplateId;

    /**
     * @description The type of the remediation template. Valid values:
     *
     *   OOS: Operation Orchestration Service (official remediation).
     *   FC: Function Compute (custom remediation).
     *
     * @example OOS
     *
     * @var string
     */
    public $remediationType;
    protected $_name = [
        'accountId'                    => 'AccountId',
        'aggregatorId'                 => 'AggregatorId',
        'configRuleId'                 => 'ConfigRuleId',
        'invokeType'                   => 'InvokeType',
        'lastSuccessfulInvocationId'   => 'LastSuccessfulInvocationId',
        'lastSuccessfulInvocationTime' => 'LastSuccessfulInvocationTime',
        'lastSuccessfulInvocationType' => 'LastSuccessfulInvocationType',
        'remediaitonOriginParams'      => 'RemediaitonOriginParams',
        'remediationId'                => 'RemediationId',
        'remediationSourceType'        => 'RemediationSourceType',
        'remediationTemplateId'        => 'RemediationTemplateId',
        'remediationType'              => 'RemediationType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }
        if (null !== $this->aggregatorId) {
            $res['AggregatorId'] = $this->aggregatorId;
        }
        if (null !== $this->configRuleId) {
            $res['ConfigRuleId'] = $this->configRuleId;
        }
        if (null !== $this->invokeType) {
            $res['InvokeType'] = $this->invokeType;
        }
        if (null !== $this->lastSuccessfulInvocationId) {
            $res['LastSuccessfulInvocationId'] = $this->lastSuccessfulInvocationId;
        }
        if (null !== $this->lastSuccessfulInvocationTime) {
            $res['LastSuccessfulInvocationTime'] = $this->lastSuccessfulInvocationTime;
        }
        if (null !== $this->lastSuccessfulInvocationType) {
            $res['LastSuccessfulInvocationType'] = $this->lastSuccessfulInvocationType;
        }
        if (null !== $this->remediaitonOriginParams) {
            $res['RemediaitonOriginParams'] = $this->remediaitonOriginParams;
        }
        if (null !== $this->remediationId) {
            $res['RemediationId'] = $this->remediationId;
        }
        if (null !== $this->remediationSourceType) {
            $res['RemediationSourceType'] = $this->remediationSourceType;
        }
        if (null !== $this->remediationTemplateId) {
            $res['RemediationTemplateId'] = $this->remediationTemplateId;
        }
        if (null !== $this->remediationType) {
            $res['RemediationType'] = $this->remediationType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return remediations
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }
        if (isset($map['AggregatorId'])) {
            $model->aggregatorId = $map['AggregatorId'];
        }
        if (isset($map['ConfigRuleId'])) {
            $model->configRuleId = $map['ConfigRuleId'];
        }
        if (isset($map['InvokeType'])) {
            $model->invokeType = $map['InvokeType'];
        }
        if (isset($map['LastSuccessfulInvocationId'])) {
            $model->lastSuccessfulInvocationId = $map['LastSuccessfulInvocationId'];
        }
        if (isset($map['LastSuccessfulInvocationTime'])) {
            $model->lastSuccessfulInvocationTime = $map['LastSuccessfulInvocationTime'];
        }
        if (isset($map['LastSuccessfulInvocationType'])) {
            $model->lastSuccessfulInvocationType = $map['LastSuccessfulInvocationType'];
        }
        if (isset($map['RemediaitonOriginParams'])) {
            $model->remediaitonOriginParams = $map['RemediaitonOriginParams'];
        }
        if (isset($map['RemediationId'])) {
            $model->remediationId = $map['RemediationId'];
        }
        if (isset($map['RemediationSourceType'])) {
            $model->remediationSourceType = $map['RemediationSourceType'];
        }
        if (isset($map['RemediationTemplateId'])) {
            $model->remediationTemplateId = $map['RemediationTemplateId'];
        }
        if (isset($map['RemediationType'])) {
            $model->remediationType = $map['RemediationType'];
        }

        return $model;
    }
}
