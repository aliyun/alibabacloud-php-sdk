<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListAcrImageRepositoriesResponseBody;

use AlibabaCloud\Dara\Model;

class repositories extends Model
{
    /**
     * @var string
     */
    public $createTime;
    /**
     * @var string
     */
    public $modifiedTime;
    /**
     * @var string
     */
    public $repoId;
    /**
     * @var string
     */
    public $repoName;
    /**
     * @var string
     */
    public $repoType;
    protected $_name = [
        'createTime'   => 'CreateTime',
        'modifiedTime' => 'ModifiedTime',
        'repoId'       => 'RepoId',
        'repoName'     => 'RepoName',
        'repoType'     => 'RepoType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
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
