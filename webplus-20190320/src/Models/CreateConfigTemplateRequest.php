<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebPlus\V20190320\Models;

use AlibabaCloud\Tea\Model;

class CreateConfigTemplateRequest extends Model
{
    /**
     * @var string
     */
    public $templateName;

    /**
     * @var string
     */
    public $templateDescription;

    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $stackId;

    /**
     * @var string
     */
    public $sourceTemplateId;

    /**
     * @var string
     */
    public $sourceEnvId;

    /**
     * @var string
     */
    public $profileName;

    /**
     * @var string
     */
    public $pkgVersionId;

    /**
     * @var string
     */
    public $optionSettings;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'templateName'        => 'TemplateName',
        'templateDescription' => 'TemplateDescription',
        'appId'               => 'AppId',
        'stackId'             => 'StackId',
        'sourceTemplateId'    => 'SourceTemplateId',
        'sourceEnvId'         => 'SourceEnvId',
        'profileName'         => 'ProfileName',
        'pkgVersionId'        => 'PkgVersionId',
        'optionSettings'      => 'OptionSettings',
        'regionId'            => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }
        if (null !== $this->templateDescription) {
            $res['TemplateDescription'] = $this->templateDescription;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->stackId) {
            $res['StackId'] = $this->stackId;
        }
        if (null !== $this->sourceTemplateId) {
            $res['SourceTemplateId'] = $this->sourceTemplateId;
        }
        if (null !== $this->sourceEnvId) {
            $res['SourceEnvId'] = $this->sourceEnvId;
        }
        if (null !== $this->profileName) {
            $res['ProfileName'] = $this->profileName;
        }
        if (null !== $this->pkgVersionId) {
            $res['PkgVersionId'] = $this->pkgVersionId;
        }
        if (null !== $this->optionSettings) {
            $res['OptionSettings'] = $this->optionSettings;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateConfigTemplateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }
        if (isset($map['TemplateDescription'])) {
            $model->templateDescription = $map['TemplateDescription'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['StackId'])) {
            $model->stackId = $map['StackId'];
        }
        if (isset($map['SourceTemplateId'])) {
            $model->sourceTemplateId = $map['SourceTemplateId'];
        }
        if (isset($map['SourceEnvId'])) {
            $model->sourceEnvId = $map['SourceEnvId'];
        }
        if (isset($map['ProfileName'])) {
            $model->profileName = $map['ProfileName'];
        }
        if (isset($map['PkgVersionId'])) {
            $model->pkgVersionId = $map['PkgVersionId'];
        }
        if (isset($map['OptionSettings'])) {
            $model->optionSettings = $map['OptionSettings'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
