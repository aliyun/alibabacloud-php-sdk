<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Tea\Model;

class CreateAggregateRemediationRequest extends Model
{
    /**
     * @description The ID of the account group.
     *
     * For more information about how to obtain the ID of the account group, see [ListAggregators](~~255797~~).
     * @example ca-6b4a626622af0012****
     *
     * @var string
     */
    public $aggregatorId;

    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the token, but you must make sure that the token is unique among different requests. The `token` can contain only ASCII characters and cannot exceed 64 characters in length.
     *
     * @example AAAAAdDWBF2****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The rule ID.
     *
     * For more information about how to obtain the ID of a rule, see [ListAggregateConfigRules](~~264148~~).
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
     * @example MANUAL_EXECUTION
     *
     * @var string
     */
    public $invokeType;

    /**
     * @description The configuration of the remediation template.
     *
     * For more information about how to obtain the configuration of the remediation template, see [ListRemediationTemplates](~~416781~~). You can view the `TemplateDefinition` response parameter to obtain the configuration of the remediation template.
     * @example {"bucketName": "{resourceId}", "regionId": "{regionId}", "permissionName": "private"}
     *
     * @var string
     */
    public $params;

    /**
     * @description The ID of the remediation template.
     *
     *   If you set the `RemediationType` parameter to `OOS`, set this parameter to the identifier of the relevant official remediation template, such as `ACS-OSS-PutBucketAcl`. For more information about how to obtain the remediation template identifier, see [ListRemediationTemplates](~~416781~~).
     *   If you set the `RemediationType` parameter to `FC`, set this parameter to the Alibaba Cloud Resource Name (ARN) of the relevant Function Compute resource, such as `acs:fc:cn-hangzhou:100931896542****:services/ConfigService.LATEST/functions/test-php`.
     *
     * @example ACS-OSS-PutBucketAcl
     *
     * @var string
     */
    public $remediationTemplateId;

    /**
     * @description The type of the remediation template. Valid values:
     *
     *   OOS: stands for Operation Orchestration Service and indicates official remediation.
     *   FC: stands for Function Compute and indicates custom remediation.
     *
     * @example OOS
     *
     * @var string
     */
    public $remediationType;

    /**
     * @description The source of remediation template. Valid values:
     *
     *   ALIYUN (default): official template.
     *   CUSTOM: custom template.
     *   NONE: none.
     *
     * @example ALIYUN
     *
     * @var string
     */
    public $sourceType;
    protected $_name = [
        'aggregatorId'          => 'AggregatorId',
        'clientToken'           => 'ClientToken',
        'configRuleId'          => 'ConfigRuleId',
        'invokeType'            => 'InvokeType',
        'params'                => 'Params',
        'remediationTemplateId' => 'RemediationTemplateId',
        'remediationType'       => 'RemediationType',
        'sourceType'            => 'SourceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aggregatorId) {
            $res['AggregatorId'] = $this->aggregatorId;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->configRuleId) {
            $res['ConfigRuleId'] = $this->configRuleId;
        }
        if (null !== $this->invokeType) {
            $res['InvokeType'] = $this->invokeType;
        }
        if (null !== $this->params) {
            $res['Params'] = $this->params;
        }
        if (null !== $this->remediationTemplateId) {
            $res['RemediationTemplateId'] = $this->remediationTemplateId;
        }
        if (null !== $this->remediationType) {
            $res['RemediationType'] = $this->remediationType;
        }
        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAggregateRemediationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AggregatorId'])) {
            $model->aggregatorId = $map['AggregatorId'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['ConfigRuleId'])) {
            $model->configRuleId = $map['ConfigRuleId'];
        }
        if (isset($map['InvokeType'])) {
            $model->invokeType = $map['InvokeType'];
        }
        if (isset($map['Params'])) {
            $model->params = $map['Params'];
        }
        if (isset($map['RemediationTemplateId'])) {
            $model->remediationTemplateId = $map['RemediationTemplateId'];
        }
        if (isset($map['RemediationType'])) {
            $model->remediationType = $map['RemediationType'];
        }
        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }

        return $model;
    }
}
