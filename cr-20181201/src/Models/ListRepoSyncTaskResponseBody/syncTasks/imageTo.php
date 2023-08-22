<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models\ListRepoSyncTaskResponseBody\syncTasks;

use AlibabaCloud\Tea\Model;

class imageTo extends Model
{
    /**
     * @example v0.1
     *
     * @var string
     */
    public $imageTag;

    /**
     * @example cri-k77rd2eo9zttneqo
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example cn-shenzhen
     *
     * @var string
     */
    public $regionId;

    /**
     * @example test
     *
     * @var string
     */
    public $repoName;

    /**
     * @example test
     *
     * @var string
     */
    public $repoNamespaceName;
    protected $_name = [
        'imageTag'          => 'ImageTag',
        'instanceId'        => 'InstanceId',
        'regionId'          => 'RegionId',
        'repoName'          => 'RepoName',
        'repoNamespaceName' => 'RepoNamespaceName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageTag) {
            $res['ImageTag'] = $this->imageTag;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->repoName) {
            $res['RepoName'] = $this->repoName;
        }
        if (null !== $this->repoNamespaceName) {
            $res['RepoNamespaceName'] = $this->repoNamespaceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return imageTo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageTag'])) {
            $model->imageTag = $map['ImageTag'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RepoName'])) {
            $model->repoName = $map['RepoName'];
        }
        if (isset($map['RepoNamespaceName'])) {
            $model->repoNamespaceName = $map['RepoNamespaceName'];
        }

        return $model;
    }
}
