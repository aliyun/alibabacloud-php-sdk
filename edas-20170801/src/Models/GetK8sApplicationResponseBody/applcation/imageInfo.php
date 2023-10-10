<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\GetK8sApplicationResponseBody\applcation;

use AlibabaCloud\Tea\Model;

class imageInfo extends Model
{
    /**
     * @description The URL of the image.
     *
     * @example registry.cn-beijing.aliyuncs.com/edas-serverless-****\/1314839****06888_shared_repo:5a166fbd-9d76-4f98-****-78165****c_1572***282
     *
     * @var string
     */
    public $imageUrl;

    /**
     * @description The region ID of the image repository.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the image repository.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $repoId;

    /**
     * @description The name of the image repository.
     *
     * @example 131****067006888_shared_repo
     *
     * @var string
     */
    public $repoName;

    /**
     * @description The namespace to which the image repository belongs.
     *
     * @example edas-server****-user
     *
     * @var string
     */
    public $repoNamespace;

    /**
     * @description The source type of the image repository.
     *
     * @example ALI_HUB
     *
     * @var string
     */
    public $repoOriginType;

    /**
     * @description The tag of the image.
     *
     * @example 5a166fbd-9d76-4f98-****-781659d9f54c_1572485443282
     *
     * @var string
     */
    public $tag;
    protected $_name = [
        'imageUrl'       => 'ImageUrl',
        'regionId'       => 'RegionId',
        'repoId'         => 'RepoId',
        'repoName'       => 'RepoName',
        'repoNamespace'  => 'RepoNamespace',
        'repoOriginType' => 'RepoOriginType',
        'tag'            => 'Tag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageUrl) {
            $res['ImageUrl'] = $this->imageUrl;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->repoId) {
            $res['RepoId'] = $this->repoId;
        }
        if (null !== $this->repoName) {
            $res['RepoName'] = $this->repoName;
        }
        if (null !== $this->repoNamespace) {
            $res['RepoNamespace'] = $this->repoNamespace;
        }
        if (null !== $this->repoOriginType) {
            $res['RepoOriginType'] = $this->repoOriginType;
        }
        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return imageInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageUrl'])) {
            $model->imageUrl = $map['ImageUrl'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RepoId'])) {
            $model->repoId = $map['RepoId'];
        }
        if (isset($map['RepoName'])) {
            $model->repoName = $map['RepoName'];
        }
        if (isset($map['RepoNamespace'])) {
            $model->repoNamespace = $map['RepoNamespace'];
        }
        if (isset($map['RepoOriginType'])) {
            $model->repoOriginType = $map['RepoOriginType'];
        }
        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }

        return $model;
    }
}
