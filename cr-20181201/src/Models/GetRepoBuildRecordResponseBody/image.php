<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models\GetRepoBuildRecordResponseBody;

use AlibabaCloud\Tea\Model;

class image extends Model
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
     * @description The name of the image repository.
     *
     * @example test
     *
     * @var string
     */
    public $repoName;

    /**
     * @description The name of the namespace to which the image repository belongs.
     *
     * @example test
     *
     * @var string
     */
    public $repoNamespaceName;
    protected $_name = [
        'imageTag'          => 'ImageTag',
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
        if (isset($map['RepoName'])) {
            $model->repoName = $map['RepoName'];
        }
        if (isset($map['RepoNamespaceName'])) {
            $model->repoNamespaceName = $map['RepoNamespaceName'];
        }

        return $model;
    }
}
