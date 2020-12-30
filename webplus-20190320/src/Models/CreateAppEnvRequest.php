<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebPlus\V20190320\Models;

use AlibabaCloud\Tea\Model;

class CreateAppEnvRequest extends Model
{
    /**
     * @var string
     */
    public $envName;

    /**
     * @var string
     */
    public $envDescription;

    /**
     * @var string
     */
    public $stackId;

    /**
     * @var string
     */
    public $appId;

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
    public $profileName;

    /**
     * @var string
     */
    public $sourceEnvId;

    /**
     * @var string
     */
    public $templateId;

    /**
     * @var bool
     */
    public $dryRun;

    /**
     * @var string
     */
    public $extraProperties;
    protected $_name = [
        'envName'         => 'EnvName',
        'envDescription'  => 'EnvDescription',
        'stackId'         => 'StackId',
        'appId'           => 'AppId',
        'pkgVersionId'    => 'PkgVersionId',
        'optionSettings'  => 'OptionSettings',
        'profileName'     => 'ProfileName',
        'sourceEnvId'     => 'SourceEnvId',
        'templateId'      => 'TemplateId',
        'dryRun'          => 'DryRun',
        'extraProperties' => 'ExtraProperties',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->envName) {
            $res['EnvName'] = $this->envName;
        }
        if (null !== $this->envDescription) {
            $res['EnvDescription'] = $this->envDescription;
        }
        if (null !== $this->stackId) {
            $res['StackId'] = $this->stackId;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->pkgVersionId) {
            $res['PkgVersionId'] = $this->pkgVersionId;
        }
        if (null !== $this->optionSettings) {
            $res['OptionSettings'] = $this->optionSettings;
        }
        if (null !== $this->profileName) {
            $res['ProfileName'] = $this->profileName;
        }
        if (null !== $this->sourceEnvId) {
            $res['SourceEnvId'] = $this->sourceEnvId;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->extraProperties) {
            $res['ExtraProperties'] = $this->extraProperties;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAppEnvRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnvName'])) {
            $model->envName = $map['EnvName'];
        }
        if (isset($map['EnvDescription'])) {
            $model->envDescription = $map['EnvDescription'];
        }
        if (isset($map['StackId'])) {
            $model->stackId = $map['StackId'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['PkgVersionId'])) {
            $model->pkgVersionId = $map['PkgVersionId'];
        }
        if (isset($map['OptionSettings'])) {
            $model->optionSettings = $map['OptionSettings'];
        }
        if (isset($map['ProfileName'])) {
            $model->profileName = $map['ProfileName'];
        }
        if (isset($map['SourceEnvId'])) {
            $model->sourceEnvId = $map['SourceEnvId'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['ExtraProperties'])) {
            $model->extraProperties = $map['ExtraProperties'];
        }

        return $model;
    }
}
