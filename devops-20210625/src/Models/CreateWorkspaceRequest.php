<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Tea\Model;

class CreateWorkspaceRequest extends Model
{
    /**
     * @description 工作空间名称
     *
     * @var string
     */
    public $name;

    /**
     * @description 技术栈
     *
     * @var string
     */
    public $workspaceTemplate;

    /**
     * @description 代码来源URL（当前仅支持云效 Codeup 来源）
     *
     * @var string
     */
    public $codeUrl;

    /**
     * @description 代码版本，支持 commitSHA、分支、标签
     *
     * @var string
     */
    public $codeVersion;

    /**
     * @description 打开空间默认打开的文件相对路径
     *
     * @var string
     */
    public $filePath;

    /**
     * @description 工作空间复用标识，按照"用户+技术栈+代码地址+版本"进行复用 true - 复用 false - 不复用，每次均为新创建
     *
     * @var bool
     */
    public $reuse;

    /**
     * @description 资源标识，提供给非标代码源作为空间复用的唯一标识
     *
     * @var string
     */
    public $resourceIdentifier;

    /**
     * @description 请求来源（用于统计，云产品集成时需要传入）
     *
     * @var string
     */
    public $requestFrom;
    protected $_name = [
        'name'               => 'name',
        'workspaceTemplate'  => 'workspaceTemplate',
        'codeUrl'            => 'codeUrl',
        'codeVersion'        => 'codeVersion',
        'filePath'           => 'filePath',
        'reuse'              => 'reuse',
        'resourceIdentifier' => 'resourceIdentifier',
        'requestFrom'        => 'requestFrom',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->workspaceTemplate) {
            $res['workspaceTemplate'] = $this->workspaceTemplate;
        }
        if (null !== $this->codeUrl) {
            $res['codeUrl'] = $this->codeUrl;
        }
        if (null !== $this->codeVersion) {
            $res['codeVersion'] = $this->codeVersion;
        }
        if (null !== $this->filePath) {
            $res['filePath'] = $this->filePath;
        }
        if (null !== $this->reuse) {
            $res['reuse'] = $this->reuse;
        }
        if (null !== $this->resourceIdentifier) {
            $res['resourceIdentifier'] = $this->resourceIdentifier;
        }
        if (null !== $this->requestFrom) {
            $res['requestFrom'] = $this->requestFrom;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateWorkspaceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['workspaceTemplate'])) {
            $model->workspaceTemplate = $map['workspaceTemplate'];
        }
        if (isset($map['codeUrl'])) {
            $model->codeUrl = $map['codeUrl'];
        }
        if (isset($map['codeVersion'])) {
            $model->codeVersion = $map['codeVersion'];
        }
        if (isset($map['filePath'])) {
            $model->filePath = $map['filePath'];
        }
        if (isset($map['reuse'])) {
            $model->reuse = $map['reuse'];
        }
        if (isset($map['resourceIdentifier'])) {
            $model->resourceIdentifier = $map['resourceIdentifier'];
        }
        if (isset($map['requestFrom'])) {
            $model->requestFrom = $map['requestFrom'];
        }

        return $model;
    }
}
