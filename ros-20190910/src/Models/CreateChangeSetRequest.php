<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ROS\V20190910\Models\CreateChangeSetRequest\parameters;
use AlibabaCloud\SDK\ROS\V20190910\Models\CreateChangeSetRequest\resourcesToImport;
use AlibabaCloud\SDK\ROS\V20190910\Models\CreateChangeSetRequest\tags;

class CreateChangeSetRequest extends Model
{
    /**
     * @var string
     */
    public $changeSetName;

    /**
     * @var string
     */
    public $changeSetType;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $disableRollback;

    /**
     * @var string[]
     */
    public $notificationURLs;

    /**
     * @var int
     */
    public $parallelism;

    /**
     * @var parameters[]
     */
    public $parameters;

    /**
     * @var string
     */
    public $ramRoleName;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $replacementOption;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var resourcesToImport[]
     */
    public $resourcesToImport;

    /**
     * @var string
     */
    public $stackId;

    /**
     * @var string
     */
    public $stackName;

    /**
     * @var string
     */
    public $stackPolicyBody;

    /**
     * @var string
     */
    public $stackPolicyDuringUpdateBody;

    /**
     * @var string
     */
    public $stackPolicyDuringUpdateURL;

    /**
     * @var string
     */
    public $stackPolicyURL;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @var string
     */
    public $templateBody;

    /**
     * @var string
     */
    public $templateId;

    /**
     * @var string
     */
    public $templateScratchId;

    /**
     * @var string
     */
    public $templateURL;

    /**
     * @var string
     */
    public $templateVersion;

    /**
     * @var int
     */
    public $timeoutInMinutes;

    /**
     * @var bool
     */
    public $usePreviousParameters;
    protected $_name = [
        'changeSetName' => 'ChangeSetName',
        'changeSetType' => 'ChangeSetType',
        'clientToken' => 'ClientToken',
        'description' => 'Description',
        'disableRollback' => 'DisableRollback',
        'notificationURLs' => 'NotificationURLs',
        'parallelism' => 'Parallelism',
        'parameters' => 'Parameters',
        'ramRoleName' => 'RamRoleName',
        'regionId' => 'RegionId',
        'replacementOption' => 'ReplacementOption',
        'resourceGroupId' => 'ResourceGroupId',
        'resourcesToImport' => 'ResourcesToImport',
        'stackId' => 'StackId',
        'stackName' => 'StackName',
        'stackPolicyBody' => 'StackPolicyBody',
        'stackPolicyDuringUpdateBody' => 'StackPolicyDuringUpdateBody',
        'stackPolicyDuringUpdateURL' => 'StackPolicyDuringUpdateURL',
        'stackPolicyURL' => 'StackPolicyURL',
        'tags' => 'Tags',
        'templateBody' => 'TemplateBody',
        'templateId' => 'TemplateId',
        'templateScratchId' => 'TemplateScratchId',
        'templateURL' => 'TemplateURL',
        'templateVersion' => 'TemplateVersion',
        'timeoutInMinutes' => 'TimeoutInMinutes',
        'usePreviousParameters' => 'UsePreviousParameters',
    ];

    public function validate()
    {
        if (\is_array($this->notificationURLs)) {
            Model::validateArray($this->notificationURLs);
        }
        if (\is_array($this->parameters)) {
            Model::validateArray($this->parameters);
        }
        if (\is_array($this->resourcesToImport)) {
            Model::validateArray($this->resourcesToImport);
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->notificationURLs)) {
                $res['NotificationURLs'] = [];
                $n1 = 0;
                foreach ($this->notificationURLs as $item1) {
                    $res['NotificationURLs'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->parallelism) {
            $res['Parallelism'] = $this->parallelism;
        }

        if (null !== $this->parameters) {
            if (\is_array($this->parameters)) {
                $res['Parameters'] = [];
                $n1 = 0;
                foreach ($this->parameters as $item1) {
                    $res['Parameters'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (null !== $this->resourcesToImport) {
            if (\is_array($this->resourcesToImport)) {
                $res['ResourcesToImport'] = [];
                $n1 = 0;
                foreach ($this->resourcesToImport as $item1) {
                    $res['ResourcesToImport'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $model->notificationURLs = [];
                $n1 = 0;
                foreach ($map['NotificationURLs'] as $item1) {
                    $model->notificationURLs[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Parallelism'])) {
            $model->parallelism = $map['Parallelism'];
        }

        if (isset($map['Parameters'])) {
            if (!empty($map['Parameters'])) {
                $model->parameters = [];
                $n1 = 0;
                foreach ($map['Parameters'] as $item1) {
                    $model->parameters[$n1++] = parameters::fromMap($item1);
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

        if (isset($map['ResourcesToImport'])) {
            if (!empty($map['ResourcesToImport'])) {
                $model->resourcesToImport = [];
                $n1 = 0;
                foreach ($map['ResourcesToImport'] as $item1) {
                    $model->resourcesToImport[$n1++] = resourcesToImport::fromMap($item1);
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

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1++] = tags::fromMap($item1);
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
