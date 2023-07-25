<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Tea\Model;

class CreateRemediationRequest extends Model
{
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
     * For more information about how to obtain the ID of a rule, see [ListConfigRules](~~169607~~).
     * @example cr-8a973ac2e2be00a2****
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
     * For more information about how to obtain the remediation template configuration, see the `TemplateDefinition` response parameter provided in [ListRemediationTemplates](~~416781~~).
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
     *   OOS: Operation Orchestration Service (official remediation)
     *   FC: Function Compute (custom remediation)
     *
     * @example OOS
     *
     * @var string
     */
    public $remediationType;

    /**
     * @description The source of remediation. Valid values:
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
     * @return CreateRemediationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
