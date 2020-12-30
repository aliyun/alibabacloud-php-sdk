<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models\GetRepoSyncTaskResponseBody;

use AlibabaCloud\Tea\Model;

class imageFrom extends Model
{
    /**
     * @var string
     */
    public $repoNamespaceName;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $imageTag;

    /**
     * @var string
     */
    public $repoName;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'repoNamespaceName' => 'RepoNamespaceName',
        'instanceId'        => 'InstanceId',
        'imageTag'          => 'ImageTag',
        'repoName'          => 'RepoName',
        'regionId'          => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->repoNamespaceName) {
            $res['RepoNamespaceName'] = $this->repoNamespaceName;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->imageTag) {
            $res['ImageTag'] = $this->imageTag;
        }
        if (null !== $this->repoName) {
            $res['RepoName'] = $this->repoName;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return imageFrom
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RepoNamespaceName'])) {
            $model->repoNamespaceName = $map['RepoNamespaceName'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['ImageTag'])) {
            $model->imageTag = $map['ImageTag'];
        }
        if (isset($map['RepoName'])) {
            $model->repoName = $map['RepoName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
