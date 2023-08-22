<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models\GetRepoSyncTaskResponseBody;

use AlibabaCloud\Tea\Model;

class imageFrom extends Model
{
    /**
     * @description The tag of the image.
     *
     * @example master
     *
     * @var string
     */
    public $imageTag;

    /**
     * @description The ID of the instance.
     *
     * @example cri-sgedpenzw80e****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The region ID.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The name of the image repository.
     *
     * @example test
     *
     * @var string
     */
    public $repoName;

    /**
     * @description The name of the namespace.
     *
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
     * @return imageFrom
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
