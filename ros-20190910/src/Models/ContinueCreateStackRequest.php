<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\SDK\ROS\V20190910\Models\ContinueCreateStackRequest\parameters;
use AlibabaCloud\Tea\Model;

class ContinueCreateStackRequest extends Model
{
    /**
     * @description Specifies whether only to validate the stack in the request. Default value: false. Valid values:
     *
     *   true: only validates the stack.
     *   false: validates and continues to create the stack.
     *
     * @example false
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description The mode in which ROS continues to create the stack. Default value: Recreate. Valid values:
     *
     *   Recreate
     *
     * If you set this parameter to Recreate, ROS continues to create only the following types of resources:
     *
     *   Resources that fail to be created
     *
     *   Resources that you specify for the RecreatingResources.N parameter
     *
     *   Dependencies of the resources that you specify for the RecreatingResources.N parameter
     *
     *   Resources that you have not created
     *
     * >  The RecreatingResources.N, TemplateBody, and TemplateURL parameters, and the Parameters section take effect only when the Mode parameter is set to Recreate.
     *
     *   Ignore
     *
     *   ROS ignores and discards resources that fail to be created and you have not created, and marks the stack as successfully created.
     *
     *   The body of the template that you use to create the stack is changed.
     *
     * >  This value is valid only for ROS stacks.
     * @example Recreate
     *
     * @var string
     */
    public $mode;

    /**
     * @description The maximum number of concurrent operations that can be performed on resources.
     *
     * >
     *   If you set this parameter to an integer that is greater than 0, the integer is used.
     *   If you set this parameter to 0, no limit is imposed on ROS stacks. However, the default value in Terraform is used for Terraform stacks. In most cases, the default value in Terraform is 10.
     *   If you leave this parameter empty, the value that you specified for this parameter in the previous request is used. If you left this parameter empty in the previous request, no limit is imposed on ROS stacks. However, the default value in Terraform is used for Terraform stacks. In most cases, the default value in Terraform is 10.
     *   If you set this parameter to a specific value, ROS associates the value with the stack. The value affects subsequent operations on the stack.
     *
     * @example 1
     *
     * @var int
     */
    public $parallelism;

    /**
     * @description test
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
     * @description test
     *
     * @var string[]
     */
    public $recreatingOptions;

    /**
     * @example WebServer
     *
     * @var string[]
     */
    public $recreatingResources;

    /**
     * @description The region ID of the stack. You can call the [DescribeRegions](~~131035~~) operation to query the most recent region list.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the stack.
     *
     * @example 4a6c9851-3b0f-4f5f-b4ca-a14bf691****
     *
     * @var string
     */
    public $stackId;

    /**
     * @description The structure that contains the template body. The template body must be 1 to 524,288 bytes in length.
     *
     * An ROS template is subject to the following limits:
     *
     *   You can modify only the following sections in the template: Description, Metadata, Resources, and Outputs.
     *
     *   You cannot add sections to or remove sections from the template.
     *
     *   The Resources section is subject to the following limits:
     *
     *   You cannot delete the resources or change the template body for the resources that you do not want to continue to create.
     *
     *   You can delete the resources or change the template body for the resources that you want to continue to create.
     *
     *   You can add resources to this section.
     *
     * > *   This parameter takes effect only when the Mode parameter is set to Recreate.
     *   You can specify only one of the following parameters: TemplateBody, TemplateURL, and TemplateId. If you do not specify the parameters, the existing template is used.
     *
     * @example {"ROSTemplateFormatVersion": "2015-09-01"}
     *
     * @var string
     */
    public $templateBody;

    /**
     * @description The ID of the template. This parameter applies to shared templates and private templates.
     *
     * >
     *   This parameter takes effect when the `Mode` parameter is set to `Recreate`. When you specify the TemplateId parameter in a template, the template is subject to the limits that are described for the `TemplateBody` parameter in this topic.
     *   You can specify only one of the following parameters: `TemplateBody`, `TemplateURL`, and `TemplateId`. If you do not specify the parameters, the existing template is used.
     *
     * @example 5ecd1e10-b0e9-4389-a565-e4c15efc****
     *
     * @var string
     */
    public $templateId;

    /**
     * @description The URL of the file that contains the template body. The URL must point to a template that is located on an HTTP or HTTPS web server or in an Object Storage Service (OSS) bucket, such as oss://ros/template/demo or oss://ros/template/demo?RegionId=cn-hangzhou. The template body can be up to 524,288 bytes in length.
     *
     * >
     *   This parameter takes effect only when the Mode parameter is set to Recreate. When you specify the TemplateURL parameter in a template, the template is subject to the limits that are described for the TemplateBody parameter in this topic.
     *   You can specify only one of the following parameters: TemplateBody, TemplateURL, and TemplateId. If you do not specify the parameters, the existing template is used.
     *
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
    protected $_name = [
        'dryRun'              => 'DryRun',
        'mode'                => 'Mode',
        'parallelism'         => 'Parallelism',
        'parameters'          => 'Parameters',
        'ramRoleName'         => 'RamRoleName',
        'recreatingOptions'   => 'RecreatingOptions',
        'recreatingResources' => 'RecreatingResources',
        'regionId'            => 'RegionId',
        'stackId'             => 'StackId',
        'templateBody'        => 'TemplateBody',
        'templateId'          => 'TemplateId',
        'templateURL'         => 'TemplateURL',
        'templateVersion'     => 'TemplateVersion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
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
        if (null !== $this->recreatingOptions) {
            $res['RecreatingOptions'] = $this->recreatingOptions;
        }
        if (null !== $this->recreatingResources) {
            $res['RecreatingResources'] = $this->recreatingResources;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->stackId) {
            $res['StackId'] = $this->stackId;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ContinueCreateStackRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
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
        if (isset($map['RecreatingOptions'])) {
            if (!empty($map['RecreatingOptions'])) {
                $model->recreatingOptions = $map['RecreatingOptions'];
            }
        }
        if (isset($map['RecreatingResources'])) {
            if (!empty($map['RecreatingResources'])) {
                $model->recreatingResources = $map['RecreatingResources'];
            }
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['StackId'])) {
            $model->stackId = $map['StackId'];
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

        return $model;
    }
}
