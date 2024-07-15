<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\CreateArtifactRequest;

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
     * @description The script metadata.
     *
     * @example {\\"WorkDir\\":\\"/root\\",\\"CommandType\\":\\"RunShellScript\\",\\"Platform\\":\\"Linux\\",\\"Script\\":\\"echo hello\\"}
     *
     * @var string
     */
    public $fileScriptMetadata;

    /**
     * @description The image ID.
     *
     * >  This parameter is available only if the deployment package is an image.
     * @example m-0xij191j9cuev6xxxxxx
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
     * @description The ID of the image repository.
     *
     * >  This parameter is available only if the deployment package is a container image or of the Helm chart type.
     * @example crr-d8o1nponyc2t1gcg
     *
     * @var string
     */
    public $repoId;

    /**
     * @description The name of the image repository.
     *
     * >  This parameter is available only if the deployment package is a container image or of the Helm chart type.
     * @example wordpress
     *
     * @var string
     */
    public $repoName;

    /**
     * @description The script content.
     *
     * >  This parameter is available only if the deployment package is a script.
     * @example {"ScriptMetadata":"{\\"CommandType\\":\\"RunShellScript\\",\\"Platform\\":\\"Linux\\",\\"Script\\":\\"ls\\"}"}
     *
     * @var string
     */
    public $scriptMetadata;

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
     * @description The object URL of the deployment package.
     *
     * @example https://service-info-private.oss-cn-hangzhou.aliyuncs.com/1309208528xxxxxx/template/2e1ce8fc-xxxx-481c-9e8e-789ba9db487d.json
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'commodityCode'      => 'CommodityCode',
        'commodityVersion'   => 'CommodityVersion',
        'fileScriptMetadata' => 'FileScriptMetadata',
        'imageId'            => 'ImageId',
        'regionId'           => 'RegionId',
        'repoId'             => 'RepoId',
        'repoName'           => 'RepoName',
        'scriptMetadata'     => 'ScriptMetadata',
        'tag'                => 'Tag',
        'url'                => 'Url',
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
        if (null !== $this->fileScriptMetadata) {
            $res['FileScriptMetadata'] = $this->fileScriptMetadata;
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
        if (null !== $this->scriptMetadata) {
            $res['ScriptMetadata'] = $this->scriptMetadata;
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
        if (isset($map['FileScriptMetadata'])) {
            $model->fileScriptMetadata = $map['FileScriptMetadata'];
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
        if (isset($map['ScriptMetadata'])) {
            $model->scriptMetadata = $map['ScriptMetadata'];
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
