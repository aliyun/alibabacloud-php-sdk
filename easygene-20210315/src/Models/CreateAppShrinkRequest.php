<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EasyGene\V20210315\Models;

use AlibabaCloud\Tea\Model;

class CreateAppShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $appType;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $configsShrink;

    /**
     * @var string
     */
    public $definition;

    /**
     * @var string
     */
    public $dependenciesShrink;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $documentation;

    /**
     * @var string
     */
    public $labels;

    /**
     * @var string
     */
    public $language;

    /**
     * @var string
     */
    public $languageVersion;

    /**
     * @var string
     */
    public $path;

    /**
     * @var string
     */
    public $revisionComment;

    /**
     * @var string
     */
    public $workspace;
    protected $_name = [
        'appName'            => 'AppName',
        'appType'            => 'AppType',
        'clientToken'        => 'ClientToken',
        'configsShrink'      => 'Configs',
        'definition'         => 'Definition',
        'dependenciesShrink' => 'Dependencies',
        'description'        => 'Description',
        'documentation'      => 'Documentation',
        'labels'             => 'Labels',
        'language'           => 'Language',
        'languageVersion'    => 'LanguageVersion',
        'path'               => 'Path',
        'revisionComment'    => 'RevisionComment',
        'workspace'          => 'Workspace',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->appType) {
            $res['AppType'] = $this->appType;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->configsShrink) {
            $res['Configs'] = $this->configsShrink;
        }
        if (null !== $this->definition) {
            $res['Definition'] = $this->definition;
        }
        if (null !== $this->dependenciesShrink) {
            $res['Dependencies'] = $this->dependenciesShrink;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->documentation) {
            $res['Documentation'] = $this->documentation;
        }
        if (null !== $this->labels) {
            $res['Labels'] = $this->labels;
        }
        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }
        if (null !== $this->languageVersion) {
            $res['LanguageVersion'] = $this->languageVersion;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }
        if (null !== $this->revisionComment) {
            $res['RevisionComment'] = $this->revisionComment;
        }
        if (null !== $this->workspace) {
            $res['Workspace'] = $this->workspace;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAppShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['AppType'])) {
            $model->appType = $map['AppType'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Configs'])) {
            $model->configsShrink = $map['Configs'];
        }
        if (isset($map['Definition'])) {
            $model->definition = $map['Definition'];
        }
        if (isset($map['Dependencies'])) {
            $model->dependenciesShrink = $map['Dependencies'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Documentation'])) {
            $model->documentation = $map['Documentation'];
        }
        if (isset($map['Labels'])) {
            $model->labels = $map['Labels'];
        }
        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }
        if (isset($map['LanguageVersion'])) {
            $model->languageVersion = $map['LanguageVersion'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }
        if (isset($map['RevisionComment'])) {
            $model->revisionComment = $map['RevisionComment'];
        }
        if (isset($map['Workspace'])) {
            $model->workspace = $map['Workspace'];
        }

        return $model;
    }
}
