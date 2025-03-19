<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListAcrImageRepositoriesResponseBody;

use AlibabaCloud\Tea\Model;

class repositories extends Model
{
    /**
     * @description The time when the image was created.
     *
     * @example 2021-05-20T00:00:00Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The time when the image was modified.
     *
     * @example 2021-05-20T00:00:00Z
     *
     * @var string
     */
    public $modifiedTime;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @description The image repo ID.
     *
     * @example crr-3gqhkza0wbxxxxxx
     *
     * @var string
     */
    public $repoId;

    /**
     * @description The image repo name.
     *
     * @example wordpress
     *
     * @var string
     */
    public $repoName;

    /**
     * @description The type of the repository. Valid values:
     *
     *   `Private`: a private repository
     *   `Public`: a public repository
     *
     * @example Private
     *
     * @var string
     */
    public $repoType;
    protected $_name = [
        'createTime' => 'CreateTime',
        'modifiedTime' => 'ModifiedTime',
        'namespace' => 'Namespace',
        'repoId' => 'RepoId',
        'repoName' => 'RepoName',
        'repoType' => 'RepoType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->repoId) {
            $res['RepoId'] = $this->repoId;
        }
        if (null !== $this->repoName) {
            $res['RepoName'] = $this->repoName;
        }
        if (null !== $this->repoType) {
            $res['RepoType'] = $this->repoType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return repositories
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['RepoId'])) {
            $model->repoId = $map['RepoId'];
        }
        if (isset($map['RepoName'])) {
            $model->repoName = $map['RepoName'];
        }
        if (isset($map['RepoType'])) {
            $model->repoType = $map['RepoType'];
        }

        return $model;
    }
}
