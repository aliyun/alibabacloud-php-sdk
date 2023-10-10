<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\SDK\ROS\V20190910\Models\CreateStackRequest\parameters;
use AlibabaCloud\SDK\ROS\V20190910\Models\CreateStackRequest\tags;
use AlibabaCloud\Tea\Model;

class CreateStackRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the token, but you must make sure that the token is unique among different requests. The token can be up to 64 characters in length, and can contain letters, digits, hyphens (-), and underscores (\_).
     *
     * For more information, see [Ensure idempotence](~~134212~~).
     * @example 123e4567-e89b-12d3-a456-42665544****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The creation option for the stack. Valid values:
     *
     *   KeepStackOnCreationComplete (default): After the stack is created, the stack and its resources are retained. The quota for the maximum number of stacks that can be created in ROS is consumed.
     *   AbandonStackOnCreationComplete: After the stack is created, the stack is deleted, but its resources are retained. The quota for the maximum number of stacks that can be created in ROS is not consumed. If the stack fails to be created, the stack is retained.
     *   AbandonStackOnCreationRollbackComplete: When the resources of the stack are rolled back after the stack fails to be created, the stack is deleted. The quota for the maximum number of stacks that can be created in ROS is not consumed. In other rollback scenarios, the stack is retained.
     *   ManuallyPay: When you create the stack, you must manually pay for the subscription resources that are used. The following resource types support manual payment: `ALIYUN::ECS::InstanceGroup`, `ALIYUN::RDS::DBInstance`, `ALIYUN::SLB::LoadBalancer`, `ALIYUN::VPC::EIP`, and `ALIYUN::VPC::VpnGateway`.
     *
     * >  You can specify only one of CreateOption and CreateOptions.
     * @example KeepStackOnCreationComplete
     *
     * @var string
     */
    public $createOption;

    /**
     * @description The creation options for the stack.
     *
     * @var string[]
     */
    public $createOptions;

    /**
     * @description Specifies whether to enable deletion protection for the stack. Valid values:
     *
     *   Enabled.
     *   Disabled (default). If deletion protection is disabled, you can delete the stack by using the ROS console or by calling the DeleteStack operation.
     *
     * > The value of DeletionProtection that you specify for the root stack applies to its nested stacks.
     * @example Enabled
     *
     * @var string
     */
    public $deletionProtection;

    /**
     * @description Specifies whether to disable rollback for the resources when the stack fails to be created.
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
    public $disableRollback;

    /**
     * @description The callback URLs that are used to receive stack events. Valid values:
     *
     *   HTTP POST URL
     *
     * Each URL can be up to 1,024 bytes in length.
     *
     *   eventbridge
     *
     * ],
     * "StackId": "80bd6b6c-e888-4573-ae3b-93d29113****",
     * }
     * @example http://my-site.com/ros-event
     *
     * @var string[]
     */
    public $notificationURLs;

    /**
     * @description The maximum number of concurrent operations that can be performed on resources.
     *
     * > -  If you set this parameter to a specific value, ROS associates the value with the stack. The value affects subsequent operations on the stack, such as an update operation.
     * @example 1
     *
     * @var int
     */
    public $parallelism;

    /**
     * @description The parameters that are defined in the template.
     *
     * @var parameters[]
     */
    public $parameters;

    /**
     * @description The name of the RAM role. ROS assumes the RAM role to create the stack and uses the credentials of the role to call the APIs of Alibaba Cloud services.\
     * The RAM role name can be up to 64 characters in length.
     * @example test-role
     *
     * @var string
     */
    public $ramRoleName;

    /**
     * @description The region ID of the stack. You can call the [DescribeRegions](~~131035~~) operation to query the most recent region list.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group. If you leave this parameter empty, the stack is added to the default resource group.
     *
     * For more information about resource groups, see the "Resource group" section of the [What is Resource Management?](~~94475~~) topic.
     * @example rg-acfmxazb4ph6aiy****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The name of the stack.\
     * The name can be up to 255 characters in length, and can contain digits, letters, hyphens (-), and underscores (\_). It must start with a letter.
     * @example MyStack
     *
     * @var string
     */
    public $stackName;

    /**
     * @description The structure that contains the stack policy body. The policy body must be 1 to 16,384 bytes in length.
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
     * @description The tags that you want to add to the stack.
     *
     * @var tags[]
     */
    public $tags;

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
     * @description The template ID. This parameter applies to shared templates and private templates.
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
     *   Default value: 60.
     *   Unit: minutes.
     *   Valid values: 10 to 1440.
     *
     * @example 10
     *
     * @var int
     */
    public $timeoutInMinutes;
    protected $_name = [
        'clientToken'             => 'ClientToken',
        'createOption'            => 'CreateOption',
        'createOptions'           => 'CreateOptions',
        'deletionProtection'      => 'DeletionProtection',
        'disableRollback'         => 'DisableRollback',
        'notificationURLs'        => 'NotificationURLs',
        'parallelism'             => 'Parallelism',
        'parameters'              => 'Parameters',
        'ramRoleName'             => 'RamRoleName',
        'regionId'                => 'RegionId',
        'resourceGroupId'         => 'ResourceGroupId',
        'stackName'               => 'StackName',
        'stackPolicyBody'         => 'StackPolicyBody',
        'stackPolicyURL'          => 'StackPolicyURL',
        'tags'                    => 'Tags',
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
        if (null !== $this->createOption) {
            $res['CreateOption'] = $this->createOption;
        }
        if (null !== $this->createOptions) {
            $res['CreateOptions'] = $this->createOptions;
        }
        if (null !== $this->deletionProtection) {
            $res['DeletionProtection'] = $this->deletionProtection;
        }
        if (null !== $this->disableRollback) {
            $res['DisableRollback'] = $this->disableRollback;
        }
        if (null !== $this->notificationURLs) {
            $res['NotificationURLs'] = $this->notificationURLs;
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
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
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
     * @return CreateStackRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['CreateOption'])) {
            $model->createOption = $map['CreateOption'];
        }
        if (isset($map['CreateOptions'])) {
            if (!empty($map['CreateOptions'])) {
                $model->createOptions = $map['CreateOptions'];
            }
        }
        if (isset($map['DeletionProtection'])) {
            $model->deletionProtection = $map['DeletionProtection'];
        }
        if (isset($map['DisableRollback'])) {
            $model->disableRollback = $map['DisableRollback'];
        }
        if (isset($map['NotificationURLs'])) {
            if (!empty($map['NotificationURLs'])) {
                $model->notificationURLs = $map['NotificationURLs'];
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
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
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
