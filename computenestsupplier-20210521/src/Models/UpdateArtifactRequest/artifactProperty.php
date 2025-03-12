<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\UpdateArtifactRequest;

use AlibabaCloud\Tea\Model;

class artifactProperty extends Model
{
    /**
     * @description The commodity code of the service in Alibaba Cloud Marketplace.
     *
     * >  This parameter is available only if the deployment package is an image.
     * @example cmjj00xxxx
     *
     * @var string
     */
    public $commodityCode;

    /**
     * @description The commodity version of the service in Alibaba Cloud Marketplace.
     *
     * >  This parameter is available only if the deployment package is an image.
     * @example V1.0
     *
     * @var string
     */
    public $commodityVersion;

    /**
     * @description The image ID.
     *
     * >  This parameter is available only if the deployment package is an image.
     * @example m-0xij191j9cuev6ucxxxx
     *
     * @var string
     */
    public $imageId;

    /**
     * @description The region ID.
     *
     * >  This parameter is available only if the deployment package is an image.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the Container Registry  repository.
     * >  This parameter is available only if the deployment package is a container image or of the Helm chart type.
     * @example crr-yy4g68uhi39ttkm8
     *
     * @var string
     */
    public $repoId;

    /**
     * @description The name of the Container Registry repository.
     * >  This parameter is available only if the deployment package is a container image or of the Helm chart type.
     * @example volcanosh/vc-webhook-manager
     *
     * @var string
     */
    public $repoName;

    /**
     * @description The type of the repository.Valid values:
     *
     *   `Public`: a public repository.
     *   `Private`: a private repository.
     * >  This parameter is available only if the deployment package is a container image or of the Helm chart type.
     * @example Public
     *
     * @var string
     */
    public $repoType;

    /**
     * @description The version tag of the image repository.
     *
     * >  This parameter is available only if the deployment package is a container image or of the Helm chart type.
     * @example v1
     *
     * @var string
     */
    public $tag;

    /**
     * @description The URL of the deployment package object.
     *
     *
     * > Note This parameter is available only if the deployment package is an file.
     * @example https://service-info-private.oss-cn-hangzhou.aliyuncs.com/1309208528xxxxxx/template/2e1ce8fc-xxxx-481c-9e8e-789ba9db487d.json
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'commodityCode'    => 'CommodityCode',
        'commodityVersion' => 'CommodityVersion',
        'imageId'          => 'ImageId',
        'regionId'         => 'RegionId',
        'repoId'           => 'RepoId',
        'repoName'         => 'RepoName',
        'repoType'         => 'RepoType',
        'tag'              => 'Tag',
        'url'              => 'Url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commodityCode) {
            $res['CommodityCode'] = $this->commodityCode;
        }
        if (null !== $this->commodityVersion) {
            $res['CommodityVersion'] = $this->commodityVersion;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
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
        if (null !== $this->repoType) {
            $res['RepoType'] = $this->repoType;
        }
        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return artifactProperty
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CommodityCode'])) {
            $model->commodityCode = $map['CommodityCode'];
        }
        if (isset($map['CommodityVersion'])) {
            $model->commodityVersion = $map['CommodityVersion'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
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
        if (isset($map['RepoType'])) {
            $model->repoType = $map['RepoType'];
        }
        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
