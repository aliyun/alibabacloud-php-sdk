<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\SDK\APIG\V20240327\Models\ImportHttpApiRequest\specOssConfig;
use AlibabaCloud\Tea\Model;

class ImportHttpApiRequest extends Model
{
    /**
     * @description The description of the imported API. If not provided, it will be extracted from the API definition. The length is limited to 255 bytes.
     *
     * @example 测试专用API
     *
     * @var string
     */
    public $description;

    /**
     * @description Pre-import check. If enabled, only the check will be performed without importing the API.
     *
     * @example false
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description The name of the imported API. If not provided, it will be extracted from the API definition file. If the API name and version configuration already exist, this import will update the existing API definition based on the `strategy` field.
     *
     * @example import-test
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-acfm3q4zjh7fkki
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description Base64 encoded API definition, supporting OAS2.0 and OAS3.0 specifications, in YAML or JSON format. It has a higher priority than the `specFileUrl` parameter. If the file size exceeds 10MB, please use the `specFileUrl` parameter to transfer.
     *
     * @example b3BlbmFwaTogMy4wLjAKaW5mbzoKICAgIHRpdGxlOiBkZW1vCiAgICBkZXNjcmlwdGlvbjogdGhpc2lzZGVtbwogICAgdmVyc2lvbjogIiIKcGF0aHM6CiAgICAvdXNlci97dXNlcklkfToKICAgICAgICBnZXQ6CiAgICAgICAgICAgIHN1bW1hcnk6IOiOt+WPlueUqOaIt+S/oeaBrwogICAgICAgICAgICBkZXNjcmlwdGlvbjog6I635Y+W55So5oi35L+h5oGvCiAgICAgICAgICAgIG9wZXJhdGlvbklkOiBHZXRVc2VySW5mbwogICAgICAgICAgICByZXNwb25zZXM6CiAgICAgICAgICAgICAgICAiMjAwIjoKICAgICAgICAgICAgICAgICAgICBkZXNjcmlwdGlvbjog5oiQ5YqfCiAgICAgICAgICAgICAgICAgICAgY29udGVudDoKICAgICAgICAgICAgICAgICAgICAgICAgYXBwbGljYXRpb24vanNvbjtjaGFyc2V0PXV0Zi04OgogICAgICAgICAgICAgICAgICAgICAgICAgICAgc2NoZW1hOiBudWxsCnNlcnZlcnM6CiAgICAtIHVybDogaHR0cDovL2FwaS5leGFtcGxlLmNvbS92MQo=
     *
     * @var string
     */
    public $specContentBase64;

    /**
     * @description Download URL for the API definition file, which must be accessible from the public network or via an internal OSS download address within the same region. The file URL must have download permissions. For non-publicly readable OSS file links, refer to the documentation at https://help.aliyun.com/zh/oss/user-guide/how-to-obtain-the-url-of-a-single-object-or-the-urls-of-multiple-objects, and provide a URL with download permissions. Currently, only API definition files stored on OSS are supported.
     *
     * @example https://my-bucket.oss-cn-hangzhou.aliyuncs.com/my-api/api.yaml
     *
     * @var string
     */
    public $specFileUrl;

    /**
     * @description The oss config info.
     *
     * @var specOssConfig
     */
    public $specOssConfig;

    /**
     * @description When the imported API name and version management match an existing API, you need to specify an update strategy.
     * - SpecOnly: Completely based on the imported file.
     * - SpecFirst: Prioritize the imported file, add new interfaces and update existing ones, while keeping interfaces not mentioned in the file unchanged.
     * - ExistFirst: Prioritize the existing API, only add new interfaces without updating existing ones.
     * If not specified, the default strategy is ExistFirst.
     *
     * @example ExistFirst
     *
     * @var string
     */
    public $strategy;

    /**
     * @description If this field is specified, this import will update the specified API instead of importing or searching for an existing API based on the API name and version management configuration. The target API must be of REST type.
     *
     * @example api-xxxx
     *
     * @var string
     */
    public $targetHttpApiId;

    /**
     * @description API versioning configuration. If versioning is enabled, and the version number and API name match an existing API, this import will be treated as an update. If versioning is not enabled, and the API name matches an existing API, this import will also be treated as an update.
     *
     * @var HttpApiVersionConfig
     */
    public $versionConfig;
    protected $_name = [
        'description' => 'description',
        'dryRun' => 'dryRun',
        'name' => 'name',
        'resourceGroupId' => 'resourceGroupId',
        'specContentBase64' => 'specContentBase64',
        'specFileUrl' => 'specFileUrl',
        'specOssConfig' => 'specOssConfig',
        'strategy' => 'strategy',
        'targetHttpApiId' => 'targetHttpApiId',
        'versionConfig' => 'versionConfig',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->dryRun) {
            $res['dryRun'] = $this->dryRun;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->resourceGroupId) {
            $res['resourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->specContentBase64) {
            $res['specContentBase64'] = $this->specContentBase64;
        }
        if (null !== $this->specFileUrl) {
            $res['specFileUrl'] = $this->specFileUrl;
        }
        if (null !== $this->specOssConfig) {
            $res['specOssConfig'] = null !== $this->specOssConfig ? $this->specOssConfig->toMap() : null;
        }
        if (null !== $this->strategy) {
            $res['strategy'] = $this->strategy;
        }
        if (null !== $this->targetHttpApiId) {
            $res['targetHttpApiId'] = $this->targetHttpApiId;
        }
        if (null !== $this->versionConfig) {
            $res['versionConfig'] = null !== $this->versionConfig ? $this->versionConfig->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ImportHttpApiRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['dryRun'])) {
            $model->dryRun = $map['dryRun'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['resourceGroupId'])) {
            $model->resourceGroupId = $map['resourceGroupId'];
        }
        if (isset($map['specContentBase64'])) {
            $model->specContentBase64 = $map['specContentBase64'];
        }
        if (isset($map['specFileUrl'])) {
            $model->specFileUrl = $map['specFileUrl'];
        }
        if (isset($map['specOssConfig'])) {
            $model->specOssConfig = specOssConfig::fromMap($map['specOssConfig']);
        }
        if (isset($map['strategy'])) {
            $model->strategy = $map['strategy'];
        }
        if (isset($map['targetHttpApiId'])) {
            $model->targetHttpApiId = $map['targetHttpApiId'];
        }
        if (isset($map['versionConfig'])) {
            $model->versionConfig = HttpApiVersionConfig::fromMap($map['versionConfig']);
        }

        return $model;
    }
}
