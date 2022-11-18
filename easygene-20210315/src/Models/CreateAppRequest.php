<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EasyGene\V20210315\Models;

use AlibabaCloud\SDK\EasyGene\V20210315\Models\CreateAppRequest\configs;
use AlibabaCloud\SDK\EasyGene\V20210315\Models\CreateAppRequest\dependencies;
use AlibabaCloud\Tea\Model;

class CreateAppRequest extends Model
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
     * @var configs[]
     */
    public $configs;

    /**
     * @var string
     */
    public $definition;

    /**
     * @var dependencies[]
     */
    public $dependencies;

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
        'appName'         => 'AppName',
        'appType'         => 'AppType',
        'clientToken'     => 'ClientToken',
        'configs'         => 'Configs',
        'definition'      => 'Definition',
        'dependencies'    => 'Dependencies',
        'description'     => 'Description',
        'documentation'   => 'Documentation',
        'labels'          => 'Labels',
        'language'        => 'Language',
        'languageVersion' => 'LanguageVersion',
        'path'            => 'Path',
        'revisionComment' => 'RevisionComment',
        'workspace'       => 'Workspace',
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
        if (null !== $this->configs) {
            $res['Configs'] = [];
            if (null !== $this->configs && \is_array($this->configs)) {
                $n = 0;
                foreach ($this->configs as $item) {
                    $res['Configs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->definition) {
            $res['Definition'] = $this->definition;
        }
        if (null !== $this->dependencies) {
            $res['Dependencies'] = [];
            if (null !== $this->dependencies && \is_array($this->dependencies)) {
                $n = 0;
                foreach ($this->dependencies as $item) {
                    $res['Dependencies'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
     * @return CreateAppRequest
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
            if (!empty($map['Configs'])) {
                $model->configs = [];
                $n              = 0;
                foreach ($map['Configs'] as $item) {
                    $model->configs[$n++] = null !== $item ? configs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Definition'])) {
            $model->definition = $map['Definition'];
        }
        if (isset($map['Dependencies'])) {
            if (!empty($map['Dependencies'])) {
                $model->dependencies = [];
                $n                   = 0;
                foreach ($map['Dependencies'] as $item) {
                    $model->dependencies[$n++] = null !== $item ? dependencies::fromMap($item) : $item;
                }
            }
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
