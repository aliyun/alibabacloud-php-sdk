<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\CreateEdgeContainerAppVersionRequest\containers;

use AlibabaCloud\Tea\Model;

class ACRImageInfo extends Model
{
    /**
     * @description The domain name of the Container Registry image.
     *
     * @example 1500.***.net
     *
     * @var string
     */
    public $domain;

    /**
     * @description The ID of the Container Registry instance.
     *
     * @example xcdn-9axbo****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description Specifies whether the image is an enterprise-level Container Registry image.
     *
     * @example false
     *
     * @var bool
     */
    public $isEnterpriseRegistry;

    /**
     * @description The regions in which the Container Registry instance resides.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the image repository.
     *
     * @example crr-h1ghghu60ct****
     *
     * @var string
     */
    public $repoId;

    /**
     * @description The name of the image repository.
     *
     * @example test_71
     *
     * @var string
     */
    public $repoName;

    /**
     * @description The namespace to which the image repository belongs.
     *
     * @example safeline
     *
     * @var string
     */
    public $repoNamespace;

    /**
     * @description The tag of the Container Registry image.
     *
     * @example 3.40.2
     *
     * @var string
     */
    public $tag;

    /**
     * @description The URL of the Container Registry image tag.
     *
     * @var string
     */
    public $tagUrl;
    protected $_name = [
        'domain' => 'Domain',
        'instanceId' => 'InstanceId',
        'isEnterpriseRegistry' => 'IsEnterpriseRegistry',
        'regionId' => 'RegionId',
        'repoId' => 'RepoId',
        'repoName' => 'RepoName',
        'repoNamespace' => 'RepoNamespace',
        'tag' => 'Tag',
        'tagUrl' => 'TagUrl',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->isEnterpriseRegistry) {
            $res['IsEnterpriseRegistry'] = $this->isEnterpriseRegistry;
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
        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }
        if (null !== $this->tagUrl) {
            $res['TagUrl'] = $this->tagUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ACRImageInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['IsEnterpriseRegistry'])) {
            $model->isEnterpriseRegistry = $map['IsEnterpriseRegistry'];
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
        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }
        if (isset($map['TagUrl'])) {
            $model->tagUrl = $map['TagUrl'];
        }

        return $model;
    }
}
