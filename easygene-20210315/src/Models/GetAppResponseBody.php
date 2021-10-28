<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EasyGene\V20210315\Models;

use AlibabaCloud\SDK\EasyGene\V20210315\Models\GetAppResponseBody\configs;
use AlibabaCloud\SDK\EasyGene\V20210315\Models\GetAppResponseBody\dependencies;
use AlibabaCloud\SDK\EasyGene\V20210315\Models\GetAppResponseBody\inputs;
use AlibabaCloud\SDK\EasyGene\V20210315\Models\GetAppResponseBody\outputs;
use AlibabaCloud\SDK\EasyGene\V20210315\Models\GetAppResponseBody\revisions;
use AlibabaCloud\Tea\Model;

class GetAppResponseBody extends Model
{
    /**
     * @description 应用名称
     *
     * @var string
     */
    public $appName;

    /**
     * @description 实体类型
     *
     * @var string
     */
    public $appType;

    /**
     * @description 参考输入
     *
     * @var configs[]
     */
    public $configs;

    /**
     * @description 创建时间
     *
     * @var string
     */
    public $createTime;

    /**
     * @description 应用定义
     *
     * @var string
     */
    public $definition;

    /**
     * @description 依赖应用
     *
     * @var dependencies[]
     */
    public $dependencies;

    /**
     * @description 应用简要描述
     *
     * @var string
     */
    public $description;

    /**
     * @description 应用详细文档
     *
     * @var string
     */
    public $documentation;

    /**
     * @description 主机ID
     *
     * @var string
     */
    public $hostId;

    /**
     * @description 应用输入
     *
     * @var inputs[]
     */
    public $inputs;

    /**
     * @description 应用标签
     *
     * @var string[]
     */
    public $labels;

    /**
     * @description 应用描述语言
     *
     * @var string
     */
    public $language;

    /**
     * @description 应用描述语言版本
     *
     * @var string
     */
    public $languageVersion;

    /**
     * @description 应用最后修改时间
     *
     * @var string
     */
    public $lastModifiedTime;

    /**
     * @description 应用的输出参数
     *
     * @var outputs[]
     */
    public $outputs;

    /**
     * @description 主WDL路径
     *
     * @var string
     */
    public $path;

    /**
     * @description 请求ID
     *
     * @var string
     */
    public $requestId;

    /**
     * @description 应用版本号
     *
     * @var string
     */
    public $revision;

    /**
     * @description 应用当前版本修改
     *
     * @var string
     */
    public $revisionComment;

    /**
     * @description 应用的所有版本号
     *
     * @var revisions[]
     */
    public $revisions;

    /**
     * @description 应用可见范围
     *
     * @var string
     */
    public $scope;

    /**
     * @description 应用来源
     *
     * @var string
     */
    public $source;

    /**
     * @description 应用URL
     *
     * @var string
     */
    public $URL;

    /**
     * @description 工作流名称
     *
     * @var string
     */
    public $workflowName;

    /**
     * @description 工作空间名称
     *
     * @var string
     */
    public $workspace;
    protected $_name = [
        'appName'          => 'AppName',
        'appType'          => 'AppType',
        'configs'          => 'Configs',
        'createTime'       => 'CreateTime',
        'definition'       => 'Definition',
        'dependencies'     => 'Dependencies',
        'description'      => 'Description',
        'documentation'    => 'Documentation',
        'hostId'           => 'HostId',
        'inputs'           => 'Inputs',
        'labels'           => 'Labels',
        'language'         => 'Language',
        'languageVersion'  => 'LanguageVersion',
        'lastModifiedTime' => 'LastModifiedTime',
        'outputs'          => 'Outputs',
        'path'             => 'Path',
        'requestId'        => 'RequestId',
        'revision'         => 'Revision',
        'revisionComment'  => 'RevisionComment',
        'revisions'        => 'Revisions',
        'scope'            => 'Scope',
        'source'           => 'Source',
        'URL'              => 'URL',
        'workflowName'     => 'WorkflowName',
        'workspace'        => 'Workspace',
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
        if (null !== $this->configs) {
            $res['Configs'] = [];
            if (null !== $this->configs && \is_array($this->configs)) {
                $n = 0;
                foreach ($this->configs as $item) {
                    $res['Configs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
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
        if (null !== $this->hostId) {
            $res['HostId'] = $this->hostId;
        }
        if (null !== $this->inputs) {
            $res['Inputs'] = [];
            if (null !== $this->inputs && \is_array($this->inputs)) {
                $n = 0;
                foreach ($this->inputs as $item) {
                    $res['Inputs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (null !== $this->lastModifiedTime) {
            $res['LastModifiedTime'] = $this->lastModifiedTime;
        }
        if (null !== $this->outputs) {
            $res['Outputs'] = [];
            if (null !== $this->outputs && \is_array($this->outputs)) {
                $n = 0;
                foreach ($this->outputs as $item) {
                    $res['Outputs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->revision) {
            $res['Revision'] = $this->revision;
        }
        if (null !== $this->revisionComment) {
            $res['RevisionComment'] = $this->revisionComment;
        }
        if (null !== $this->revisions) {
            $res['Revisions'] = [];
            if (null !== $this->revisions && \is_array($this->revisions)) {
                $n = 0;
                foreach ($this->revisions as $item) {
                    $res['Revisions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->scope) {
            $res['Scope'] = $this->scope;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->URL) {
            $res['URL'] = $this->URL;
        }
        if (null !== $this->workflowName) {
            $res['WorkflowName'] = $this->workflowName;
        }
        if (null !== $this->workspace) {
            $res['Workspace'] = $this->workspace;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAppResponseBody
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
        if (isset($map['Configs'])) {
            if (!empty($map['Configs'])) {
                $model->configs = [];
                $n              = 0;
                foreach ($map['Configs'] as $item) {
                    $model->configs[$n++] = null !== $item ? configs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
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
        if (isset($map['HostId'])) {
            $model->hostId = $map['HostId'];
        }
        if (isset($map['Inputs'])) {
            if (!empty($map['Inputs'])) {
                $model->inputs = [];
                $n             = 0;
                foreach ($map['Inputs'] as $item) {
                    $model->inputs[$n++] = null !== $item ? inputs::fromMap($item) : $item;
                }
            }
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
        if (isset($map['LastModifiedTime'])) {
            $model->lastModifiedTime = $map['LastModifiedTime'];
        }
        if (isset($map['Outputs'])) {
            if (!empty($map['Outputs'])) {
                $model->outputs = [];
                $n              = 0;
                foreach ($map['Outputs'] as $item) {
                    $model->outputs[$n++] = null !== $item ? outputs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Revision'])) {
            $model->revision = $map['Revision'];
        }
        if (isset($map['RevisionComment'])) {
            $model->revisionComment = $map['RevisionComment'];
        }
        if (isset($map['Revisions'])) {
            if (!empty($map['Revisions'])) {
                $model->revisions = [];
                $n                = 0;
                foreach ($map['Revisions'] as $item) {
                    $model->revisions[$n++] = null !== $item ? revisions::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Scope'])) {
            $model->scope = $map['Scope'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['URL'])) {
            $model->URL = $map['URL'];
        }
        if (isset($map['WorkflowName'])) {
            $model->workflowName = $map['WorkflowName'];
        }
        if (isset($map['Workspace'])) {
            $model->workspace = $map['Workspace'];
        }

        return $model;
    }
}
