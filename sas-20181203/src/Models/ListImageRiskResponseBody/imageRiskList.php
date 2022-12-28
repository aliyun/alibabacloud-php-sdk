<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListImageRiskResponseBody;

use AlibabaCloud\SDK\Sas\V20181203\Models\ListImageRiskResponseBody\imageRiskList\endPointList;
use AlibabaCloud\Tea\Model;

class imageRiskList extends Model
{
    /**
     * @var string
     */
    public $digest;

    /**
     * @var endPointList[]
     */
    public $endPointList;

    /**
     * @var string
     */
    public $endpoints;

    /**
     * @var string
     */
    public $image;

    /**
     * @example IN_SAS/NOT_IN_SAS/K8S_SYSTEM
     *
     * @var string
     */
    public $imageAccessType;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $internetURLs;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $registryType;

    /**
     * @var string
     */
    public $repoId;

    /**
     * @var string
     */
    public $repoName;

    /**
     * @var string
     */
    public $repoNamespace;

    /**
     * @var string
     */
    public $repoType;

    /**
     * @var string
     */
    public $statistics;

    /**
     * @var string
     */
    public $tag;

    /**
     * @var int
     */
    public $tagImmutable;

    /**
     * @var string
     */
    public $uuid;

    /**
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
