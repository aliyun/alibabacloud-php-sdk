<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\Tea\Model;

class CreateRepositoryRequest extends Model
{
    /**
     * @description The description of the repository.
     *
     * @example repo1
     *
     * @var string
     */
    public $detail;

    /**
     * @description The ID of the instance.
     *
     * @example cri-xkx6vujuhay0****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The name of the image repository.
     *
     * @example repo1
     *
     * @var string
     */
    public $repoName;

    /**
     * @description The name of the namespace to which the image repository belongs.
     *
     * @example namespace01
     *
     * @var string
     */
    public $repoNamespaceName;

    /**
     * @description The type of the repository. Valid values:
     *
     *   `PUBLIC`: The repository is a public repository.
     *   `PRIVATE`: The repository is a private repository.
     *
     * @example PRIVATE
     *
     * @var string
     */
    public $repoType;

    /**
     * @description The summary about the repository.
     *
     * @example repo1
     *
     * @var string
     */
    public $summary;

    /**
     * @description Specifies whether to enable the feature of image tag immutability. Valid values:
     *
     *   `true`: enables the feature of image tag immutability.
     *   `false`: disables the feature of image tag immutability.
     *
     * @example true
     *
     * @var bool
     */
    public $tagImmutability;
    protected $_name = [
        'detail'            => 'Detail',
        'instanceId'        => 'InstanceId',
        'repoName'          => 'RepoName',
        'repoNamespaceName' => 'RepoNamespaceName',
        'repoType'          => 'RepoType',
        'summary'           => 'Summary',
        'tagImmutability'   => 'TagImmutability',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->detail) {
            $res['Detail'] = $this->detail;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->repoName) {
            $res['RepoName'] = $this->repoName;
        }
        if (null !== $this->repoNamespaceName) {
            $res['RepoNamespaceName'] = $this->repoNamespaceName;
        }
        if (null !== $this->repoType) {
            $res['RepoType'] = $this->repoType;
        }
        if (null !== $this->summary) {
            $res['Summary'] = $this->summary;
        }
        if (null !== $this->tagImmutability) {
            $res['TagImmutability'] = $this->tagImmutability;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateRepositoryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Detail'])) {
            $model->detail = $map['Detail'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RepoName'])) {
            $model->repoName = $map['RepoName'];
        }
        if (isset($map['RepoNamespaceName'])) {
            $model->repoNamespaceName = $map['RepoNamespaceName'];
        }
        if (isset($map['RepoType'])) {
            $model->repoType = $map['RepoType'];
        }
        if (isset($map['Summary'])) {
            $model->summary = $map['Summary'];
        }
        if (isset($map['TagImmutability'])) {
            $model->tagImmutability = $map['TagImmutability'];
        }

        return $model;
    }
}
