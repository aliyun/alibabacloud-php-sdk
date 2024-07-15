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
     * @description The metadata of the Object Storage Service (OSS) object.
     *
     * >  This parameter is available only if the deployment package is an OSS object.
     * @example {\\"WorkDir\\":\\"/root\\",\\"CommandType\\":\\"RunShellScript\\",\\"Platform\\":\\"Linux\\",\\"Script\\":\\"echo hello\\"}
     *
     * @var string
     */
    public $fileScriptMetadata;

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
     * @description The script content of the deployment package.
     *
     * >  This parameter is available only if the deployment package is a script.
     * @example {"ScriptMetadata":"{\\"CommandType\\":\\"RunShellScript\\",\\"Platform\\":\\"Linux\\",\\"Script\\":\\"ls\\"}"}
     *
     * @var string
     */
    public $scriptMetadata;

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
        'commodityCode'      => 'CommodityCode',
        'commodityVersion'   => 'CommodityVersion',
        'fileScriptMetadata' => 'FileScriptMetadata',
        'imageId'            => 'ImageId',
        'regionId'           => 'RegionId',
        'scriptMetadata'     => 'ScriptMetadata',
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
        if (null !== $this->scriptMetadata) {
            $res['ScriptMetadata'] = $this->scriptMetadata;
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
        if (isset($map['ScriptMetadata'])) {
            $model->scriptMetadata = $map['ScriptMetadata'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
