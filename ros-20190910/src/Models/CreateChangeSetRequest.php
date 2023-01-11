<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\SDK\ROS\V20190910\Models\CreateChangeSetRequest\parameters;
use AlibabaCloud\SDK\ROS\V20190910\Models\CreateChangeSetRequest\resourcesToImport;
use AlibabaCloud\Tea\Model;

class CreateChangeSetRequest extends Model
{
    /**
     * @example MyChangeSet
     *
     * @var string
     */
    public $changeSetName;

    /**
     * @example UPDATE
     *
     * @var string
     */
    public $changeSetType;

    /**
     * @example 123e4567-e89b-12d3-a456-42665544****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @example It is a demo.
     *
     * @var string
     */
    public $description;

    /**
     * @example false
     *
     * @var bool
     */
    public $disableRollback;

    /**
     * @example http://my-site.com/ros-notify
     *
     * @var string[]
     */
    public $notificationURLs;

    /**
     * @example 1
     *
     * @var int
     */
    public $parallelism;

    /**
     * @var parameters[]
     */
    public $parameters;

    /**
     * @example test-role
     *
     * @var string
     */
    public $ramRoleName;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example Disabled
     *
     * @var string
     */
    public $replacementOption;

    /**
     * @var resourcesToImport[]
     */
    public $resourcesToImport;

    /**
     * @example 4a6c9851-3b0f-4f5f-b4ca-a14bf691****
     *
     * @var string
     */
    public $stackId;

    /**
     * @example MyStack
     *
     * @var string
     */
    public $stackName;

    /**
     * @example {"Statement":[{"Effect":"Allow","Action":"Update:*","Principal":"*","Resource":"*"}]}
     *
     * @var string
     */
    public $stackPolicyBody;

    /**
     * @example {"Statement":[{"Effect":"Allow","Action":"Update:*","Principal":"*","Resource":"*"}]}
     *
     * @var string
     */
    public $stackPolicyDuringUpdateBody;

    /**
     * @example oss://ros/stack-policy/demo
     *
     * @var string
     */
    public $stackPolicyDuringUpdateURL;

    /**
     * @example oss://ros/stack-policy/demo
     *
     * @var string
     */
    public $stackPolicyURL;

    /**
     * @example {"ROSTemplateFormatVersion":"2015-09-01"}
     *
     * @var string
     */
    public $templateBody;

    /**
     * @example 5ecd1e10-b0e9-4389-a565-e4c15efc****
     *
     * @var string
     */
    public $templateId;

    /**
     * @example 4a6c9851-3b0f-4f5f-b4ca-a14bf691****
     *
     * @var string
     */
    public $templateScratchId;

    /**
     * @example oss://ros/template/demo
     *
     * @var string
     */
    public $templateURL;

    /**
     * @example v1
     *
     * @var string
     */
    public $templateVersion;

    /**
     * @example 12
     *
     * @var int
     */
    public $timeoutInMinutes;

    /**
     * @example true
     *
     * @var bool
     */
    public $usePreviousParameters;
    protected $_name = [
        'changeSetName'               => 'ChangeSetName',
        'changeSetType'               => 'ChangeSetType',
        'clientToken'                 => 'ClientToken',
        'description'                 => 'Description',
        'disableRollback'             => 'DisableRollback',
        'notificationURLs'            => 'NotificationURLs',
        'parallelism'                 => 'Parallelism',
        'parameters'                  => 'Parameters',
        'ramRoleName'                 => 'RamRoleName',
        'regionId'                    => 'RegionId',
        'replacementOption'           => 'ReplacementOption',
        'resourcesToImport'           => 'ResourcesToImport',
        'stackId'                     => 'StackId',
        'stackName'                   => 'StackName',
        'stackPolicyBody'             => 'StackPolicyBody',
        'stackPolicyDuringUpdateBody' => 'StackPolicyDuringUpdateBody',
        'stackPolicyDuringUpdateURL'  => 'StackPolicyDuringUpdateURL',
        'stackPolicyURL'              => 'StackPolicyURL',
        'templateBody'                => 'TemplateBody',
        'templateId'                  => 'TemplateId',
        'templateScratchId'           => 'TemplateScratchId',
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
        if (null !== $this->changeSetName) {
            $res['ChangeSetName'] = $this->changeSetName;
        }
        if (null !== $this->changeSetType) {
            $res['ChangeSetType'] = $this->changeSetType;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
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
        if (null !== $this->replacementOption) {
            $res['ReplacementOption'] = $this->replacementOption;
        }
        if (null !== $this->resourcesToImport) {
            $res['ResourcesToImport'] = [];
            if (null !== $this->resourcesToImport && \is_array($this->resourcesToImport)) {
                $n = 0;
                foreach ($this->resourcesToImport as $item) {
                    $res['ResourcesToImport'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (null !== $this->stackPolicyDuringUpdateBody) {
            $res['StackPolicyDuringUpdateBody'] = $this->stackPolicyDuringUpdateBody;
        }
        if (null !== $this->stackPolicyDuringUpdateURL) {
            $res['StackPolicyDuringUpdateURL'] = $this->stackPolicyDuringUpdateURL;
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
     * @return CreateChangeSetRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChangeSetName'])) {
            $model->changeSetName = $map['ChangeSetName'];
        }
        if (isset($map['ChangeSetType'])) {
            $model->changeSetType = $map['ChangeSetType'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
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
        if (isset($map['ReplacementOption'])) {
            $model->replacementOption = $map['ReplacementOption'];
        }
        if (isset($map['ResourcesToImport'])) {
            if (!empty($map['ResourcesToImport'])) {
                $model->resourcesToImport = [];
                $n                        = 0;
                foreach ($map['ResourcesToImport'] as $item) {
                    $model->resourcesToImport[$n++] = null !== $item ? resourcesToImport::fromMap($item) : $item;
                }
            }
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
        if (isset($map['StackPolicyDuringUpdateBody'])) {
            $model->stackPolicyDuringUpdateBody = $map['StackPolicyDuringUpdateBody'];
        }
        if (isset($map['StackPolicyDuringUpdateURL'])) {
            $model->stackPolicyDuringUpdateURL = $map['StackPolicyDuringUpdateURL'];
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
