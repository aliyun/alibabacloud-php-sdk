<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\SDK\ROS\V20190910\Models\UpdateStackRequest\parameters;
use AlibabaCloud\SDK\ROS\V20190910\Models\UpdateStackRequest\tags;
use AlibabaCloud\Tea\Model;

class UpdateStackRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the value, but you must make sure that the value is unique among different requests.
     *
     * For more information, see [Ensure idempotence](~~134212~~).
     * @example 123e4567-e89b-12d3-a456-42665544****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description Specifies whether to roll back the resources in the stack when the stack fails to be updated.
     *
     * Default value: false. Valid values:
     *
     *   true
     *   false
     *
     * @example false
     *
     * @var bool
     */
    public $disableRollback;

    /**
     * @description Specifies whether only to validate the stack in the request. Default value: false. Valid values:
     *
     *   true: only validates the stack.
     *   false: validates and updates the stack.
     *
     * >  When no changes are made during the update, the following rules apply: If you set the DryRun parameter to false, the NotSupported error code is returned. If you set the DryRun parameter to true, no error is reported.
     * @example false
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description The dry run option in the list format. You can specify only one dry run option.
     *
     * > This parameter takes effect only when DryRun is set to true.
     * @var string[]
     */
    public $dryRunOptions;

    /**
     * @description The maximum number of concurrent operations that can be performed on resources.
     *
     * > - If you set this parameter to a specific value, ROS associates the value with the stack. The value affects subsequent operations on the stack.
     * @example 1
     *
     * @var int
     */
    public $parallelism;

    /**
     * @description The parameters.
     *
     * @var parameters[]
     */
    public $parameters;

    /**
     * @description The name of the RAM role. Resource Orchestration Service (ROS) assumes the RAM role to create the stack and uses the credentials of the role to call the APIs of Alibaba Cloud services.
     *
     * The name of the RAM role can be up to 64 bytes in length.
     * @example test-role
     *
     * @var string
     */
    public $ramRoleName;

    /**
     * @description The ID of the region in which the stack is deployed. You can call the [DescribeRegions](~~131035~~) operation to query the most recent region list.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $regionId;

    /**
     * @description Specifies whether to enable the replacement update feature. If you cannot change resource properties, you can enable the replacement update feature to replace the resource properties. If the replacement update feature is used, the existing resource is deleted and a new resource is created. The physical ID of the new resource is different from the physical ID of the deleted resource.
     *
     * Default value: Disabled. Valid values:
     *
     *   Enabled
     *   Disabled
     *
     * >  Changes have higher priorities than replacement updates.
     * @example Disabled
     *
     * @var string
     */
    public $replacementOption;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-acfmxazb4ph6aiy****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The ID of the stack.
     *
     * @example 4a6c9851-3b0f-4f5f-b4ca-a14bf691****
     *
     * @var string
     */
    public $stackId;

    /**
     * @description The structure that contains the stack policy body. The policy body must be 1 to 16,384 bytes in length.
     *
     * >  You can specify only one of the StackPolicyBody and StackPolicyURL parameters.
     * @example {"Statement": [{"Action": "Update:*", "Resource": "*", "Effect": "Allow", "Principal": "*"}]}
     *
     * @var string
     */
    public $stackPolicyBody;

    /**
     * @description The structure that contains the body of the temporary overriding stack policy. The policy body must be 1 to 16,384 bytes in length.
     *
     * This parameter takes effect only when the ChangeSetType parameter is set to UPDATE. You can specify only one of the following parameters:
     *
     *   StackPolicyBody
     *   StackPolicyURL
     *   StackPolicyDuringUpdateBody
     *   StackPolicyDuringUpdateURL
     *
     * @example {"Statement": [{"Effect": "Allow", "Action": "Update:*", "Principal": "*", "Resource": "*"}]}
     *
     * @var string
     */
    public $stackPolicyDuringUpdateBody;

    /**
     * @description The URL of the file that contains the temporary overriding stack policy. The URL must point to a policy that is located on an HTTP or HTTPS web server or in an OSS bucket, such as oss://ros/stack-policy/demo or oss://ros/stack-policy/demo?RegionId=cn-hangzhou. The policy file can be up to 16,384 bytes in length.
     *
     * If you want to update protected resources, you must specify a temporary overriding stack policy during the update. If you do not specify a temporary overriding stack policy, the existing policy that is associated with the stack is used. This parameter takes effect only when the ChangeSetType parameter is set to UPDATE. You can specify only one of the following parameters:
     *
     *   StackPolicyBody
     *   StackPolicyURL
     *   StackPolicyDuringUpdateBody
     *   StackPolicyDuringUpdateURL
     *
     * @example oss://ros-stack-policy/demo
     *
     * @var string
     */
    public $stackPolicyDuringUpdateURL;

    /**
     * @description The URL of the file that contains the stack policy. The URL must point to a policy that is located on an HTTP or HTTPS web server or in an Object Storage Service (OSS) bucket, such as oss://ros/stack-policy/demo or oss://ros/stack-policy/demo?RegionId=cn-hangzhou. The policy file can be up to 16,384 bytes in length. If you do not specify the region ID of the OSS bucket, the value of the RegionId parameter is used.
     *
     * The URL can be up to 1,350 bytes in length.
     * @example oss://ros-stack-policy/demo
     *
     * @var string
     */
    public $stackPolicyURL;

    /**
     * @description The value of tag N that you want to add to the template.
     *
     * @var tags[]
     */
    public $tags;

    /**
     * @var string
     */
    public $templateBody;

    /**
     * @description The ID of the template. This parameter applies to shared templates and private templates.
     *
     * >  You must specify only one of the following parameters: TemplateBody, TemplateURL, and TemplateId.
     * @example 5ecd1e10-b0e9-4389-a565-e4c15efc****
     *
     * @var string
     */
    public $templateId;

    /**
     * @description The URL of the file that contains the template body. The URL must point to a template that is located on an HTTP or HTTPS web server or in an OSS bucket, such as oss://ros/template/demo or oss://ros/template/demo?RegionId=cn-hangzhou. The template body must be 1 to 524,288 bytes in length. If you do not specify the region ID of the OSS bucket, the value of the RegionId parameter is used.
     *
     * >  You must specify only one of the following parameters: TemplateBody, TemplateURL, and TemplateId.
     * @example oss://ros-template/demo
     *
     * @var string
     */
    public $templateURL;

    /**
     * @description The version of the template. This parameter takes effect only when the TemplateId parameter is specified.
     *
     * @example v1
     *
     * @var string
     */
    public $templateVersion;

    /**
     * @description The timeout period for the update operation on the stack.
     *
     *   Default value: 60.
     *   Unit: minutes.
     *
     * @example 10
     *
     * @var int
     */
    public $timeoutInMinutes;

    /**
     * @description Specifies whether to use the values specified in the previous request for the parameters that you do not specify in the current request.
     *
     * Valid values:
     *
     *   true
     *   false
     *
     * @example true
     *
     * @var bool
     */
    public $usePreviousParameters;
    protected $_name = [
        'clientToken'                 => 'ClientToken',
        'disableRollback'             => 'DisableRollback',
        'dryRun'                      => 'DryRun',
        'dryRunOptions'               => 'DryRunOptions',
        'parallelism'                 => 'Parallelism',
        'parameters'                  => 'Parameters',
        'ramRoleName'                 => 'RamRoleName',
        'regionId'                    => 'RegionId',
        'replacementOption'           => 'ReplacementOption',
        'resourceGroupId'             => 'ResourceGroupId',
        'stackId'                     => 'StackId',
        'stackPolicyBody'             => 'StackPolicyBody',
        'stackPolicyDuringUpdateBody' => 'StackPolicyDuringUpdateBody',
        'stackPolicyDuringUpdateURL'  => 'StackPolicyDuringUpdateURL',
        'stackPolicyURL'              => 'StackPolicyURL',
        'tags'                        => 'Tags',
        'templateBody'                => 'TemplateBody',
        'templateId'                  => 'TemplateId',
        'templateURL'                 => 'TemplateURL',
        'templateVersion'             => 'TemplateVersion',
        'timeoutInMinutes'            => 'TimeoutInMinutes',
        'usePreviousParameters'       => 'UsePreviousParameters',
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
        if (null !== $this->disableRollback) {
            $res['DisableRollback'] = $this->disableRollback;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->dryRunOptions) {
            $res['DryRunOptions'] = $this->dryRunOptions;
        }
        if (null !== $this->parallelism) {
            $res['Parallelism'] = $this->parallelism;
        }
        if (null !== $this->parameters) {
            $res['Parameters'] = [];
            if (null !== $this->parameters && \is_array($this->parameters)) {
                $n = 0;
                foreach ($this->parameters as $item) {
                    $res['Parameters'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->ramRoleName) {
            $res['RamRoleName'] = $this->ramRoleName;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->replacementOption) {
            $res['ReplacementOption'] = $this->replacementOption;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->stackId) {
            $res['StackId'] = $this->stackId;
        }
        if (null !== $this->stackPolicyBody) {
            $res['StackPolicyBody'] = $this->stackPolicyBody;
        }
        if (null !== $this->stackPolicyDuringUpdateBody) {
            $res['StackPolicyDuringUpdateBody'] = $this->stackPolicyDuringUpdateBody;
        }
        if (null !== $this->stackPolicyDuringUpdateURL) {
            $res['StackPolicyDuringUpdateURL'] = $this->stackPolicyDuringUpdateURL;
        }
        if (null !== $this->stackPolicyURL) {
            $res['StackPolicyURL'] = $this->stackPolicyURL;
        }
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->templateBody) {
            $res['TemplateBody'] = $this->templateBody;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->templateURL) {
            $res['TemplateURL'] = $this->templateURL;
        }
        if (null !== $this->templateVersion) {
            $res['TemplateVersion'] = $this->templateVersion;
        }
        if (null !== $this->timeoutInMinutes) {
            $res['TimeoutInMinutes'] = $this->timeoutInMinutes;
        }
        if (null !== $this->usePreviousParameters) {
            $res['UsePreviousParameters'] = $this->usePreviousParameters;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateStackRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DisableRollback'])) {
            $model->disableRollback = $map['DisableRollback'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['DryRunOptions'])) {
            if (!empty($map['DryRunOptions'])) {
                $model->dryRunOptions = $map['DryRunOptions'];
            }
        }
        if (isset($map['Parallelism'])) {
            $model->parallelism = $map['Parallelism'];
        }
        if (isset($map['Parameters'])) {
            if (!empty($map['Parameters'])) {
                $model->parameters = [];
                $n                 = 0;
                foreach ($map['Parameters'] as $item) {
                    $model->parameters[$n++] = null !== $item ? parameters::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RamRoleName'])) {
            $model->ramRoleName = $map['RamRoleName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ReplacementOption'])) {
            $model->replacementOption = $map['ReplacementOption'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['StackId'])) {
            $model->stackId = $map['StackId'];
        }
        if (isset($map['StackPolicyBody'])) {
            $model->stackPolicyBody = $map['StackPolicyBody'];
        }
        if (isset($map['StackPolicyDuringUpdateBody'])) {
            $model->stackPolicyDuringUpdateBody = $map['StackPolicyDuringUpdateBody'];
        }
        if (isset($map['StackPolicyDuringUpdateURL'])) {
            $model->stackPolicyDuringUpdateURL = $map['StackPolicyDuringUpdateURL'];
        }
        if (isset($map['StackPolicyURL'])) {
            $model->stackPolicyURL = $map['StackPolicyURL'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TemplateBody'])) {
            $model->templateBody = $map['TemplateBody'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['TemplateURL'])) {
            $model->templateURL = $map['TemplateURL'];
        }
        if (isset($map['TemplateVersion'])) {
            $model->templateVersion = $map['TemplateVersion'];
        }
        if (isset($map['TimeoutInMinutes'])) {
            $model->timeoutInMinutes = $map['TimeoutInMinutes'];
        }
        if (isset($map['UsePreviousParameters'])) {
            $model->usePreviousParameters = $map['UsePreviousParameters'];
        }

        return $model;
    }
}
