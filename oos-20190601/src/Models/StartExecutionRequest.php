<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\Tea\Model;

class StartExecutionRequest extends Model
{
    /**
     * @description The access token.
     *
     * @example 123e56767-e89b-12d3-a456-426655440000
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The description of the execution.
     *
     * @example test execution.
     *
     * @var string
     */
    public $description;

    /**
     * @description The loop mode. Valid values:
     *
     *   Automatic: does not suspend the execution of the template. This is the default value.
     *   FirstBatchPause: suspends the execution of the template after the first batch is complete.
     *   EveryBatchPause: suspends the execution of the template after each batch is complete.
     *
     * @example Automatic
     *
     * @var string
     */
    public $loopMode;

    /**
     * @description The execution mode. Valid values:
     *
     *   Automatic: automatically starts the execution of the template. This is the default value.
     *   FailurePause: suspends the execution of the template upon a failure.
     *   Debug: manually starts the execution of the template.
     *
     * @example Automatic
     *
     * @var string
     */
    public $mode;

    /**
     * @description The JSON string that consists of a set of parameters. Default value: {}.
     *
     * @example {"Status":"Running"}
     *
     * @var string
     */
    public $parameters;

    /**
     * @description The ID of the parent execution.
     *
     * @example exec-xxx
     *
     * @var string
     */
    public $parentExecutionId;

    /**
     * @description The ID of the region in which the execution resides.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-acfmxsn4m4******
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The security check mode. Valid values:
     *
     *   Skip: specifies that you are aware of the risks. The system performs all actions in the execution without manual confirmation, regardless of the risk level. This parameter is valid only if the `Mode` parameter is set to Automatic.
     *   ConfirmEveryHighRiskAction: requires you to confirm each high-risk action. This is the default value. You can call the **NotifyExecution** operation to confirm or cancel an action.
     *
     * @example Skip
     *
     * @var string
     */
    public $safetyCheck;

    /**
     * @description The tags for the execution.
     *
     * @example {"k1":"v2","k2":"v2"}
     *
     * @var mixed[]
     */
    public $tags;

    /**
     * @description The content of the template in the JSON or YAML format. This parameter is the same as the Content parameter that you can specify when you call the CreateTemplate operation. You can use this parameter to specify the tasks that you want to run. This way, you do not need to create a template before you start an execution. If you select an existing template, you do not need to specify this parameter.
     *
     * @example {   "Description": "Example template, describe instances in some status",   "FormatVersion": "OOS-2019-06-01",   "Parameters": {},   "Tasks": [     {       "Name": "describeInstances",       "Action": "ACS::ExecuteAPI",       "Description": "desc-en",       "Properties": {         "Service": "ECS",         "API": "DescribeInstances",         "Parameters": {           "Status": "Running"         }       }     }   ] }
     *
     * @var string
     */
    public $templateContent;

    /**
     * @description The name of the template. The name must be 1 to 200 characters in length, and can contain letters, digits, hyphens (-), and underscores (\_).
     *
     * @example vmeixme
     *
     * @var string
     */
    public $templateName;

    /**
     * @description The Object Storage Service (OSS) URL of the object that stores the content of the Operation Orchestration Service (OOS) template. The access control list (ACL) of the object must be public-read. You can use this parameter to specify the tasks that you want to run. This way, you do not need to create a template before you start an execution. If you select an existing template, you do not need to specify this parameter.
     *
     * @example http://oos-template.cn-hangzhou.oss.aliyun-inc.com/oos-test-template.json
     *
     * @var string
     */
    public $templateURL;

    /**
     * @description The version number of the template. If you do not specify this parameter, the system uses the latest version.
     *
     * @example v1
     *
     * @var string
     */
    public $templateVersion;
    protected $_name = [
        'clientToken'       => 'ClientToken',
        'description'       => 'Description',
        'loopMode'          => 'LoopMode',
        'mode'              => 'Mode',
        'parameters'        => 'Parameters',
        'parentExecutionId' => 'ParentExecutionId',
        'regionId'          => 'RegionId',
        'resourceGroupId'   => 'ResourceGroupId',
        'safetyCheck'       => 'SafetyCheck',
        'tags'              => 'Tags',
        'templateContent'   => 'TemplateContent',
        'templateName'      => 'TemplateName',
        'templateURL'       => 'TemplateURL',
        'templateVersion'   => 'TemplateVersion',
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
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->loopMode) {
            $res['LoopMode'] = $this->loopMode;
        }
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }
        if (null !== $this->parameters) {
            $res['Parameters'] = $this->parameters;
        }
        if (null !== $this->parentExecutionId) {
            $res['ParentExecutionId'] = $this->parentExecutionId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->safetyCheck) {
            $res['SafetyCheck'] = $this->safetyCheck;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }
        if (null !== $this->templateContent) {
            $res['TemplateContent'] = $this->templateContent;
        }
        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
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
     * @return StartExecutionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['LoopMode'])) {
            $model->loopMode = $map['LoopMode'];
        }
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }
        if (isset($map['Parameters'])) {
            $model->parameters = $map['Parameters'];
        }
        if (isset($map['ParentExecutionId'])) {
            $model->parentExecutionId = $map['ParentExecutionId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['SafetyCheck'])) {
            $model->safetyCheck = $map['SafetyCheck'];
        }
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }
        if (isset($map['TemplateContent'])) {
            $model->templateContent = $map['TemplateContent'];
        }
        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
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
