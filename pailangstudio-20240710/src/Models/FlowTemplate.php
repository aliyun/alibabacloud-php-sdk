<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAILangStudio\V20240710\Models;

use AlibabaCloud\Dara\Model;

class FlowTemplate extends Model
{
    /**
     * @var string
     */
    public $accessibility;

    /**
     * @var string
     */
    public $aliyunDocumentId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string[]
     */
    public $descriptionI18N;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string[]
     */
    public $displayNameI18N;

    /**
     * @var string
     */
    public $flowFiles;

    /**
     * @var string
     */
    public $flowStoragePath;

    /**
     * @var string
     */
    public $flowTemplateId;

    /**
     * @var string
     */
    public $flowType;

    /**
     * @var string
     */
    public $locale;

    /**
     * @var int
     */
    public $referenceCount;

    /**
     * @var string
     */
    public $templateGroup;

    /**
     * @var string
     */
    public $templateName;

    /**
     * @var string
     */
    public $url;

    /**
     * @var string
     */
    public $version;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'accessibility' => 'Accessibility',
        'aliyunDocumentId' => 'AliyunDocumentId',
        'description' => 'Description',
        'descriptionI18N' => 'DescriptionI18N',
        'displayName' => 'DisplayName',
        'displayNameI18N' => 'DisplayNameI18N',
        'flowFiles' => 'FlowFiles',
        'flowStoragePath' => 'FlowStoragePath',
        'flowTemplateId' => 'FlowTemplateId',
        'flowType' => 'FlowType',
        'locale' => 'Locale',
        'referenceCount' => 'ReferenceCount',
        'templateGroup' => 'TemplateGroup',
        'templateName' => 'TemplateName',
        'url' => 'Url',
        'version' => 'Version',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        if (\is_array($this->descriptionI18N)) {
            Model::validateArray($this->descriptionI18N);
        }
        if (\is_array($this->displayNameI18N)) {
            Model::validateArray($this->displayNameI18N);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessibility) {
            $res['Accessibility'] = $this->accessibility;
        }

        if (null !== $this->aliyunDocumentId) {
            $res['AliyunDocumentId'] = $this->aliyunDocumentId;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->descriptionI18N) {
            if (\is_array($this->descriptionI18N)) {
                $res['DescriptionI18N'] = [];
                foreach ($this->descriptionI18N as $key1 => $value1) {
                    $res['DescriptionI18N'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }

        if (null !== $this->displayNameI18N) {
            if (\is_array($this->displayNameI18N)) {
                $res['DisplayNameI18N'] = [];
                foreach ($this->displayNameI18N as $key1 => $value1) {
                    $res['DisplayNameI18N'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->flowFiles) {
            $res['FlowFiles'] = $this->flowFiles;
        }

        if (null !== $this->flowStoragePath) {
            $res['FlowStoragePath'] = $this->flowStoragePath;
        }

        if (null !== $this->flowTemplateId) {
            $res['FlowTemplateId'] = $this->flowTemplateId;
        }

        if (null !== $this->flowType) {
            $res['FlowType'] = $this->flowType;
        }

        if (null !== $this->locale) {
            $res['Locale'] = $this->locale;
        }

        if (null !== $this->referenceCount) {
            $res['ReferenceCount'] = $this->referenceCount;
        }

        if (null !== $this->templateGroup) {
            $res['TemplateGroup'] = $this->templateGroup;
        }

        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }

        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
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
        if (isset($map['Accessibility'])) {
            $model->accessibility = $map['Accessibility'];
        }

        if (isset($map['AliyunDocumentId'])) {
            $model->aliyunDocumentId = $map['AliyunDocumentId'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DescriptionI18N'])) {
            if (!empty($map['DescriptionI18N'])) {
                $model->descriptionI18N = [];
                foreach ($map['DescriptionI18N'] as $key1 => $value1) {
                    $model->descriptionI18N[$key1] = $value1;
                }
            }
        }

        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }

        if (isset($map['DisplayNameI18N'])) {
            if (!empty($map['DisplayNameI18N'])) {
                $model->displayNameI18N = [];
                foreach ($map['DisplayNameI18N'] as $key1 => $value1) {
                    $model->displayNameI18N[$key1] = $value1;
                }
            }
        }

        if (isset($map['FlowFiles'])) {
            $model->flowFiles = $map['FlowFiles'];
        }

        if (isset($map['FlowStoragePath'])) {
            $model->flowStoragePath = $map['FlowStoragePath'];
        }

        if (isset($map['FlowTemplateId'])) {
            $model->flowTemplateId = $map['FlowTemplateId'];
        }

        if (isset($map['FlowType'])) {
            $model->flowType = $map['FlowType'];
        }

        if (isset($map['Locale'])) {
            $model->locale = $map['Locale'];
        }

        if (isset($map['ReferenceCount'])) {
            $model->referenceCount = $map['ReferenceCount'];
        }

        if (isset($map['TemplateGroup'])) {
            $model->templateGroup = $map['TemplateGroup'];
        }

        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }

        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
