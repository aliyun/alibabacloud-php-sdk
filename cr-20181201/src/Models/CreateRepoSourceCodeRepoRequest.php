<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\Tea\Model;

class CreateRepoSourceCodeRepoRequest extends Model
{
    /**
     * @var bool
     */
    public $autoBuild;

    /**
     * @var string
     */
    public $codeRepoName;

    /**
     * @var string
     */
    public $codeRepoNamespaceName;

    /**
     * @var string
     */
    public $codeRepoType;

    /**
     * @var bool
     */
    public $disableCacheBuild;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var bool
     */
    public $overseaBuild;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $repoId;
    protected $_name = [
        'autoBuild'             => 'AutoBuild',
        'codeRepoName'          => 'CodeRepoName',
        'codeRepoNamespaceName' => 'CodeRepoNamespaceName',
        'codeRepoType'          => 'CodeRepoType',
        'disableCacheBuild'     => 'DisableCacheBuild',
        'instanceId'            => 'InstanceId',
        'overseaBuild'          => 'OverseaBuild',
        'regionId'              => 'RegionId',
        'repoId'                => 'RepoId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoBuild) {
            $res['AutoBuild'] = $this->autoBuild;
        }
        if (null !== $this->codeRepoName) {
            $res['CodeRepoName'] = $this->codeRepoName;
        }
        if (null !== $this->codeRepoNamespaceName) {
            $res['CodeRepoNamespaceName'] = $this->codeRepoNamespaceName;
        }
        if (null !== $this->codeRepoType) {
            $res['CodeRepoType'] = $this->codeRepoType;
        }
        if (null !== $this->disableCacheBuild) {
            $res['DisableCacheBuild'] = $this->disableCacheBuild;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->overseaBuild) {
            $res['OverseaBuild'] = $this->overseaBuild;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->repoId) {
            $res['RepoId'] = $this->repoId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateRepoSourceCodeRepoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoBuild'])) {
            $model->autoBuild = $map['AutoBuild'];
        }
        if (isset($map['CodeRepoName'])) {
            $model->codeRepoName = $map['CodeRepoName'];
        }
        if (isset($map['CodeRepoNamespaceName'])) {
            $model->codeRepoNamespaceName = $map['CodeRepoNamespaceName'];
        }
        if (isset($map['CodeRepoType'])) {
            $model->codeRepoType = $map['CodeRepoType'];
        }
        if (isset($map['DisableCacheBuild'])) {
            $model->disableCacheBuild = $map['DisableCacheBuild'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['OverseaBuild'])) {
            $model->overseaBuild = $map['OverseaBuild'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RepoId'])) {
            $model->repoId = $map['RepoId'];
        }

        return $model;
    }
}
