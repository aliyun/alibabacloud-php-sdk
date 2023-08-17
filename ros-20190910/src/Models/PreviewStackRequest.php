<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\SDK\ROS\V20190910\Models\PreviewStackRequest\parameters;
use AlibabaCloud\Tea\Model;

class PreviewStackRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the token, but you must make sure that the token is unique among different requests.\
     * For more information, see [Ensure idempotence](~~134212~~).
     * @example 123e4567-e89b-12d3-a456-42665544****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description Specifies whether to disable rollback for the resources when the stack fails to be created. Valid values:
     *
     *   true
     *   false (default)
     *
     * @example false
     *
     * @var bool
     */
    public $disableRollback;

    /**
     * @description Specifies whether to query the parameters that you want to use in compliance precheck.
     *
     * Valid values:
     *
     *   true
     *   false (default)
     *
     * @example false
     *
     * @var bool
     */
    public $enablePreConfig;

    /**
     * @description The maximum number of concurrent operations that can be performed on resources. This parameter takes effect only for Terraform stacks.
     *
     * > If you set this parameter to an integer greater than 0, the integer is used. If you set this parameter to 0 or leave this parameter empty, the default value of Terraform is used. In most cases, the default value of Terraform is 10.
     * @example 1
     *
     * @var int
     */
    public $parallelism;

    /**
     * @description The parameters of the stack.
     *
     * @var parameters[]
     */
    public $parameters;

    /**
     * @description The region ID of the stack. You can call the [DescribeRegions](~~131035~~) operation to query the most recent region list.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The stack ID. You can use this parameter to preview a stack that you want to update.
     *
     *
     *
     * > - In the scenario in which you preview a stack that you want to create or update, you cannot preview the resources in its nested stacks.
     * @example 4a6c9851-3b0f-4f5f-b4ca-a14bf691****
     *
     * @var string
     */
    public $stackId;

    /**
     * @description The stack name. You can use this parameter to preview the stack that you want to create. The name can be up to 255 characters in length, and can contain digits, letters, hyphens (-), and underscores (\_). It must start with a digit or letter.
     *
     * > You must and can specify only one of StackName and StackId.
     * @example MyStack
     *
     * @var string
     */
    public $stackName;

    /**
     * @description The structure that contains the stack policy body. The stack policy body must be 1 to 16,384 bytes in length.
     *
     * > You can specify only one of StackPolicyBody and StackPolicyURL.
     * @example {"Statement": [{"Action": "Update:*", "Resource": "*", "Effect": "Allow", "Principal": "*"}]}
     *
     * @var string
     */
    public $stackPolicyBody;

    /**
     * @description The URL of the file that contains the stack policy. The URL must point to a policy that is located on an HTTP or HTTPS web server or in an Object Storage Service (OSS) bucket, such as oss://ros/stack-policy/demo or oss://ros/stack-policy/demo?RegionId=cn-hangzhou. The policy file can be up to 16,384 bytes in length. If you do not specify the region ID of the OSS bucket, the value of RegionId is used.
     *
     * The URL can be up to 1,350 bytes in length.
     * @example oss://ros-stack-policy/demo
     *
     * @var string
     */
    public $stackPolicyURL;

    /**
     * @description The structure that contains the template body. The template body must be 1 to 524,288 bytes in length. If the length of the template body exceeds the upper limit, we recommend that you add parameters to the HTTP POST request body to prevent request failures caused by excessively long URLs.
     *
     * > You must and can specify only one of the following parameters: TemplateBody, TemplateURL, TemplateId, and TemplateScratchId.
     * @example {"ROSTemplateFormatVersion":"2015-09-01"}
     *
     * @var string
     */
    public $templateBody;

    /**
     * @description The template ID. This parameter applies to shared and private templates.
     *
     * > You must and can specify only one of the following parameters: TemplateBody, TemplateURL, TemplateId, and TemplateScratchId.
     * @example 5ecd1e10-b0e9-4389-a565-e4c15efc****
     *
     * @var string
     */
    public $templateId;

    /**
     * @description The scenario ID.
     *
     * > You must and can specify only one of the following parameters: TemplateBody, TemplateURL, TemplateId, and TemplateScratchId.
     * @example ts-aa9c62feab844a6b****
     *
     * @var string
     */
    public $templateScratchId;

    /**
     * @description The region ID of the scenario. The default value is the same as the value of RegionId.
     *
     * You can call the [DescribeRegions](~~131035~~) operation to query the most recent region list.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $templateScratchRegionId;

    /**
     * @description The URL of the file that contains the template body. The URL must point to a template that is located on an HTTP or HTTPS web server or in an OSS bucket, such as oss://ros/template/demo or oss://ros/template/demo?RegionId=cn-hangzhou. The template body can be up to 524,288 bytes in length. If you do not specify the region ID of the OSS bucket, the value of RegionId is used.
     *
     * > You must and can specify only one of the following parameters: TemplateBody, TemplateURL, TemplateId, and TemplateScratchId.
     * @example oss://ros-template/demo
     *
     * @var string
     */
    public $templateURL;

    /**
     * @description The version of the template. This parameter takes effect only when TemplateId is specified.
     *
     * @example v1
     *
     * @var string
     */
    public $templateVersion;

    /**
     * @description The timeout period for creating the stack.
     *
     * Default value: 60.
     * @example 60
     *
     * @var int
     */
    public $timeoutInMinutes;
    protected $_name = [
        'clientToken'             => 'ClientToken',
        'disableRollback'         => 'DisableRollback',
        'enablePreConfig'         => 'EnablePreConfig',
        'parallelism'             => 'Parallelism',
        'parameters'              => 'Parameters',
        'regionId'                => 'RegionId',
        'stackId'                 => 'StackId',
        'stackName'               => 'StackName',
        'stackPolicyBody'         => 'StackPolicyBody',
        'stackPolicyURL'          => 'StackPolicyURL',
        'templateBody'            => 'TemplateBody',
        'templateId'              => 'TemplateId',
        'templateScratchId'       => 'TemplateScratchId',
        'templateScratchRegionId' => 'TemplateScratchRegionId',
        'templateURL'             => 'TemplateURL',
        'templateVersion'         => 'TemplateVersion',
        'timeoutInMinutes'        => 'TimeoutInMinutes',
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
        if (null !== $this->enablePreConfig) {
            $res['EnablePreConfig'] = $this->enablePreConfig;
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
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->stackId) {
            $res['StackId'] = $this->stackId;
        }
        if (null !== $this->stackName) {
            $res['StackName'] = $this->stackName;
        }
        if (null !== $this->stackPolicyBody) {
            $res['StackPolicyBody'] = $this->stackPolicyBody;
        }
        if (null !== $this->stackPolicyURL) {
            $res['StackPolicyURL'] = $this->stackPolicyURL;
        }
        if (null !== $this->templateBody) {
            $res['TemplateBody'] = $this->templateBody;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->templateScratchId) {
            $res['TemplateScratchId'] = $this->templateScratchId;
        }
        if (null !== $this->templateScratchRegionId) {
            $res['TemplateScratchRegionId'] = $this->templateScratchRegionId;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PreviewStackRequest
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
        if (isset($map['EnablePreConfig'])) {
            $model->enablePreConfig = $map['EnablePreConfig'];
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['StackId'])) {
            $model->stackId = $map['StackId'];
        }
        if (isset($map['StackName'])) {
            $model->stackName = $map['StackName'];
        }
        if (isset($map['StackPolicyBody'])) {
            $model->stackPolicyBody = $map['StackPolicyBody'];
        }
        if (isset($map['StackPolicyURL'])) {
            $model->stackPolicyURL = $map['StackPolicyURL'];
        }
        if (isset($map['TemplateBody'])) {
            $model->templateBody = $map['TemplateBody'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['TemplateScratchId'])) {
            $model->templateScratchId = $map['TemplateScratchId'];
        }
        if (isset($map['TemplateScratchRegionId'])) {
            $model->templateScratchRegionId = $map['TemplateScratchRegionId'];
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

        return $model;
    }
}
