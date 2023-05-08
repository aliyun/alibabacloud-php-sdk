<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListImageRiskResponseBody;

use AlibabaCloud\SDK\Sas\V20181203\Models\ListImageRiskResponseBody\imageRiskList\endPointList;
use AlibabaCloud\Tea\Model;

class imageRiskList extends Model
{
    /**
     * @example 3f8efc2184cf1d24936b49c27286a284714b77be34c80c9ee38ca6bf322445****
     *
     * @var string
     */
    public $digest;

    /**
     * @var endPointList[]
     */
    public $endPointList;

    /**
     * @example https://172.20.XXX.XXX/test
     *
     * @var string
     */
    public $endpoints;

    /**
     * @example .aliyuncs.com/sas_test/baseline:exploit
     *
     * @var string
     */
    public $image;

    /**
     * @example IN_SAS
     *
     * @var string
     */
    public $imageAccessType;

    /**
     * @example f922bfeb6960436fe3f0e7b62fc6b9a0b47980986669c367c22433269404****
     *
     * @var string
     */
    public $imageId;

    /**
     * @example ****registry-registry.cn-shenzhen-finance-1.cr.aliyuncs.com/xxxx/docker-****
     *
     * @var string
     */
    public $internetURLs;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example harbor
     *
     * @var string
     */
    public $registryType;

    /**
     * @example crr-bk2l746eyxca1****
     *
     * @var string
     */
    public $repoId;

    /**
     * @example scan_test
     *
     * @var string
     */
    public $repoName;

    /**
     * @example vultar***
     *
     * @var string
     */
    public $repoNamespace;

    /**
     * @example PRIVATE
     *
     * @var string
     */
    public $repoType;

    /**
     * @example {
     * }
     * @var string
     */
    public $statistics;

    /**
     * @example 0.1.0
     *
     * @var string
     */
    public $tag;

    /**
     * @example 0
     *
     * @var int
     */
    public $tagImmutable;

    /**
     * @example 624778f3-5bf2-423c-ac0c-47a62c05****
     *
     * @var string
     */
    public $uuid;

    /**
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
