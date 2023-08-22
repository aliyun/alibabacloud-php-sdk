<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models\ListRepoBuildRecordResponseBody\buildRecords;

use AlibabaCloud\Tea\Model;

class image extends Model
{
    /**
     * @description The tag of the image.
     *
     * @example v0.1
     *
     * @var string
     */
    public $imageTag;

    /**
     * @description The ID of the repository.
     *
     * @example crr-gzsrlevmvoaq****
     *
     * @var string
     */
    public $repoId;

    /**
     * @description The name of the repository.
     *
     * @example test
     *
     * @var string
     */
    public $repoName;

    /**
     * @description The name of the namespace to which the repository belongs.
     *
     * @example test
     *
     * @var string
     */
    public $repoNamespaceName;
    protected $_name = [
        'imageTag'          => 'ImageTag',
        'repoId'            => 'RepoId',
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
        if (null !== $this->repoId) {
            $res['RepoId'] = $this->repoId;
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
     * @return image
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageTag'])) {
            $model->imageTag = $map['ImageTag'];
        }
        if (isset($map['RepoId'])) {
            $model->repoId = $map['RepoId'];
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
