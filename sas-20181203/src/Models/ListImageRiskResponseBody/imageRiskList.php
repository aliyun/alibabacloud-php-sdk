<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListImageRiskResponseBody;

use AlibabaCloud\SDK\Sas\V20181203\Models\ListImageRiskResponseBody\imageRiskList\endPointList;
use AlibabaCloud\Tea\Model;

class imageRiskList extends Model
{
    /**
     * @description The digest value of the image.
     *
     * @example 3f8efc2184cf1d24936b49c27286a284714b77be34c80c9ee38ca6bf322445****
     *
     * @var string
     */
    public $digest;

    /**
     * @description An array that consists of the details of the endpoint.
     *
     * @var endPointList[]
     */
    public $endPointList;

    /**
     * @description The endpoint of Container Registry.
     *
     * @example https://172.20.XXX.XXX/test
     *
     * @var string
     */
    public $endpoints;

    /**
     * @description The image of the container.
     *
     * @example .aliyuncs.com/sas_test/baseline:exploit
     *
     * @var string
     */
    public $image;

    /**
     * @description The registration status of the image repository. Valid values:
     *
     *   **IN_SAS**: The image repository is registered with Security Center.
     *   **NOT_IN_SAS**: The image repository is not registered with Security Center.
     *
     * @example IN_SAS
     *
     * @var string
     */
    public $imageAccessType;

    /**
     * @description The ID of the image.
     *
     * @example f922bfeb6960436fe3f0e7b62fc6b9a0b47980986669c367c22433269404****
     *
     * @var string
     */
    public $imageId;

    /**
     * @description The public endpoint of the image repository.
     *
     * @example ****registry-registry.cn-shenzhen-finance-1.cr.aliyuncs.com/xxxx/docker-****
     *
     * @var string
     */
    public $internetURLs;

    /**
     * @description The region of the image repository.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The type of the image repository. Valid values:
     *
     *   **acr**
     *   **harbor**
     *   **quay**
     *   **CI/CD**: Jenkins
     *
     * @example harbor
     *
     * @var string
     */
    public $registryType;

    /**
     * @description The ID of the image repository.
     *
     * @example crr-bk2l746eyxca1****
     *
     * @var string
     */
    public $repoId;

    /**
     * @description The name of the image repository.
     *
     * @example scan_test
     *
     * @var string
     */
    public $repoName;

    /**
     * @description The name of the namespace to which the repository belongs.
     *
     * @example vultar***
     *
     * @var string
     */
    public $repoNamespace;

    /**
     * @description The type of the repository. Valid values:
     *
     *   `PUBLIC`
     *   `PRIVATE`
     *
     * @example PRIVATE
     *
     * @var string
     */
    public $repoType;

    /**
     * @description The statistics on a security event.
     *
     * @example {
     * }
     * @var string
     */
    public $statistics;

    /**
     * @description The tag that is added to the image.
     *
     * @example 0.1.0
     *
     * @var string
     */
    public $tag;

    /**
     * @description Indicates whether the image version is immutable. If the image version is immutable, only the image of the latest version in the image repository can be overwritten. Valid values:
     *
     *   **0**: The image version is mutable.
     *   **1**: The image version is immutable.
     *
     * @example 0
     *
     * @var int
     */
    public $tagImmutable;

    /**
     * @description The UUID of the image.
     *
     * @example 624778f3-5bf2-423c-ac0c-47a62c05****
     *
     * @var string
     */
    public $uuid;

    /**
     * @description The endpoint of the image repository in the VPC.
     *
     * @example ****-registry-registry-vpc.cn-shenzhen-finance-1.cr.aliyuncs.com/xxxx/docker-****
     *
     * @var string
     */
    public $vpcURLs;
    protected $_name = [
        'digest'          => 'Digest',
        'endPointList'    => 'EndPointList',
        'endpoints'       => 'Endpoints',
        'image'           => 'Image',
        'imageAccessType' => 'ImageAccessType',
        'imageId'         => 'ImageId',
        'internetURLs'    => 'InternetURLs',
        'regionId'        => 'RegionId',
        'registryType'    => 'RegistryType',
        'repoId'          => 'RepoId',
        'repoName'        => 'RepoName',
        'repoNamespace'   => 'RepoNamespace',
        'repoType'        => 'RepoType',
        'statistics'      => 'Statistics',
        'tag'             => 'Tag',
        'tagImmutable'    => 'TagImmutable',
        'uuid'            => 'Uuid',
        'vpcURLs'         => 'VpcURLs',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->digest) {
            $res['Digest'] = $this->digest;
        }
        if (null !== $this->endPointList) {
            $res['EndPointList'] = [];
            if (null !== $this->endPointList && \is_array($this->endPointList)) {
                $n = 0;
                foreach ($this->endPointList as $item) {
                    $res['EndPointList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->endpoints) {
            $res['Endpoints'] = $this->endpoints;
        }
        if (null !== $this->image) {
            $res['Image'] = $this->image;
        }
        if (null !== $this->imageAccessType) {
            $res['ImageAccessType'] = $this->imageAccessType;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->internetURLs) {
            $res['InternetURLs'] = $this->internetURLs;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->registryType) {
            $res['RegistryType'] = $this->registryType;
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
        if (null !== $this->repoType) {
            $res['RepoType'] = $this->repoType;
        }
        if (null !== $this->statistics) {
            $res['Statistics'] = $this->statistics;
        }
        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }
        if (null !== $this->tagImmutable) {
            $res['TagImmutable'] = $this->tagImmutable;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }
        if (null !== $this->vpcURLs) {
            $res['VpcURLs'] = $this->vpcURLs;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return imageRiskList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Digest'])) {
            $model->digest = $map['Digest'];
        }
        if (isset($map['EndPointList'])) {
            if (!empty($map['EndPointList'])) {
                $model->endPointList = [];
                $n                   = 0;
                foreach ($map['EndPointList'] as $item) {
                    $model->endPointList[$n++] = null !== $item ? endPointList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Endpoints'])) {
            $model->endpoints = $map['Endpoints'];
        }
        if (isset($map['Image'])) {
            $model->image = $map['Image'];
        }
        if (isset($map['ImageAccessType'])) {
            $model->imageAccessType = $map['ImageAccessType'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['InternetURLs'])) {
            $model->internetURLs = $map['InternetURLs'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RegistryType'])) {
            $model->registryType = $map['RegistryType'];
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
        if (isset($map['RepoType'])) {
            $model->repoType = $map['RepoType'];
        }
        if (isset($map['Statistics'])) {
            $model->statistics = $map['Statistics'];
        }
        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }
        if (isset($map['TagImmutable'])) {
            $model->tagImmutable = $map['TagImmutable'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }
        if (isset($map['VpcURLs'])) {
            $model->vpcURLs = $map['VpcURLs'];
        }

        return $model;
    }
}
