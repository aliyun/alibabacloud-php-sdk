<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Tea\Model;

class CreateWorkspaceRequest extends Model
{
    /**
     * @var string
     */
    public $codeUrl;

    /**
     * @var string
     */
    public $codeVersion;

    /**
     * @var string
     */
    public $filePath;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $requestFrom;

    /**
     * @var string
     */
    public $resourceIdentifier;

    /**
     * @var bool
     */
    public $reuse;

    /**
     * @var string
     */
    public $workspaceTemplate;
    protected $_name = [
        'codeUrl'            => 'codeUrl',
        'codeVersion'        => 'codeVersion',
        'filePath'           => 'filePath',
        'name'               => 'name',
        'requestFrom'        => 'requestFrom',
        'resourceIdentifier' => 'resourceIdentifier',
        'reuse'              => 'reuse',
        'workspaceTemplate'  => 'workspaceTemplate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->codeUrl) {
            $res['codeUrl'] = $this->codeUrl;
        }
        if (null !== $this->codeVersion) {
            $res['codeVersion'] = $this->codeVersion;
        }
        if (null !== $this->filePath) {
            $res['filePath'] = $this->filePath;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->requestFrom) {
            $res['requestFrom'] = $this->requestFrom;
        }
        if (null !== $this->resourceIdentifier) {
            $res['resourceIdentifier'] = $this->resourceIdentifier;
        }
        if (null !== $this->reuse) {
            $res['reuse'] = $this->reuse;
        }
        if (null !== $this->workspaceTemplate) {
            $res['workspaceTemplate'] = $this->workspaceTemplate;
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
        if (isset($map['codeUrl'])) {
            $model->codeUrl = $map['codeUrl'];
        }
        if (isset($map['codeVersion'])) {
            $model->codeVersion = $map['codeVersion'];
        }
        if (isset($map['filePath'])) {
            $model->filePath = $map['filePath'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['requestFrom'])) {
            $model->requestFrom = $map['requestFrom'];
        }
        if (isset($map['resourceIdentifier'])) {
            $model->resourceIdentifier = $map['resourceIdentifier'];
        }
        if (isset($map['reuse'])) {
            $model->reuse = $map['reuse'];
        }
        if (isset($map['workspaceTemplate'])) {
            $model->workspaceTemplate = $map['workspaceTemplate'];
        }

        return $model;
    }
}
