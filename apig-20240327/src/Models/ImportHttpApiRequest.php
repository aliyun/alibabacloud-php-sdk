<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\SDK\APIG\V20240327\Models\ImportHttpApiRequest\specOssConfig;
use AlibabaCloud\Tea\Model;

class ImportHttpApiRequest extends Model
{
    /**
     * @description The deployment configuration.
     *
     * @var HttpApiDeployConfig
     */
    public $deployConfigs;

    /**
     * @description The API description, which cannot exceed 255 bytes in length. If you do not specify a description, a description is extracted from the definition file.
     *
     * @example API for testing
     *
     * @var string
     */
    public $description;

    /**
     * @description Specifies whether to perform a dry run. If this parameter is set to true, a dry run is performed without importing the file.
     *
     * @example false
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description The MCP route ID.
     *
     * @var string
     */
    public $mcpRouteId;

    /**
     * @description The API name. If you do not specify a name, a name is extracted from the definition file. If a name and a versioning configuration already exist, the existing API definition is updated based on the strategy field.
     *
     * @example import-test
     *
     * @var string
     */
    public $name;

    /**
     * @description [The resource group ID](https://help.aliyun.com/document_detail/151181.html).
     *
     * @example rg-acfm3q4zjh7fkki
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The Base64-encoded API definition. OAS 2.0 and OAS 3.0 specifications are supported. YAML and JSON formats are supported. This parameter precedes over the specFileUrl parameter. However, if the file size exceeds 10 MB, use the specFileUrl parameter to pass the definition.
     *
     * @example b3BlbmFwaTogMy4wLjAKaW5mbzoKICAgIHRpdGxlOiBkZW1vCiAgICBkZXNjcmlwdGlvbjogdGhpc2lzZGVtbwogICAgdmVyc2lvbjogIiIKcGF0aHM6CiAgICAvdXNlci97dXNlcklkfToKICAgICAgICBnZXQ6CiAgICAgICAgICAgIHN1bW1hcnk6IOiOt+WPlueUqOaIt+S/oeaBrwogICAgICAgICAgICBkZXNjcmlwdGlvbjog6I635Y+W55So5oi35L+h5oGvCiAgICAgICAgICAgIG9wZXJhdGlvbklkOiBHZXRVc2VySW5mbwogICAgICAgICAgICByZXNwb25zZXM6CiAgICAgICAgICAgICAgICAiMjAwIjoKICAgICAgICAgICAgICAgICAgICBkZXNjcmlwdGlvbjog5oiQ5YqfCiAgICAgICAgICAgICAgICAgICAgY29udGVudDoKICAgICAgICAgICAgICAgICAgICAgICAgYXBwbGljYXRpb24vanNvbjtjaGFyc2V0PXV0Zi04OgogICAgICAgICAgICAgICAgICAgICAgICAgICAgc2NoZW1hOiBudWxsCnNlcnZlcnM6CiAgICAtIHVybDogaHR0cDovL2FwaS5leGFtcGxlLmNvbS92MQo=
     *
     * @var string
     */
    public $specContentBase64;

    /**
     * @description The download URL of the API definition file. You can download the file over the Internet or by using an Object Storage Service (OSS) internal download URL that belongs to the current region. You must obtain the required permissions to download the file. For OSS URLs that are not publicly readable, refer to [Download objects using presigned URLs](https://help.aliyun.com/document_detail/39607.html) to specify URLs that provide download permissions. Currently, only OSS URLs are supported.
     *
     * @example https://my-bucket.oss-cn-hangzhou.aliyuncs.com/my-api/api.yaml
     *
     * @var string
     */
    public $specFileUrl;

    /**
     * @description The OSS information.
     *
     * @var specOssConfig
     */
    public $specOssConfig;

    /**
     * @description The update policy when the API to be imported has the same version and name as an existing one. Valid values:
     *
     *   SpectOnly: All configurations in the file take effect.
     *   SpecFirst: The file takes precedence. New APIs are created and existing ones are updated. APIs not included in the file remain unchanged.
     *   ExistFirst (default): The existing APIs take precedence. New APIs are created but existing ones remain unchanged. If this parameter is not specified, the ExistFirst policy takes effect.
     *
     * @example ExistFirst
     *
     * @var string
     */
    public $strategy;

    /**
     * @description The API to be updated. If this parameter is specified, this import updates only the specified API. New APIs are not created and unspecified existing APIs are not updated. Only REST APIs can be specified.
     *
     * @example api-xxxx
     *
     * @var string
     */
    public $targetHttpApiId;

    /**
     * @description The API versioning configuration. If versioning is enabled for an API and the version and name of an API to be imported are the same as those of the existing API, the existing API is updated by this import. If versioning is not enabled for an API and the name of an API to be imported are the same as that of the existing API, the existing API is updated by this import.
     *
     * @var HttpApiVersionConfig
     */
    public $versionConfig;
    protected $_name = [
        'deployConfigs' => 'deployConfigs',
        'description' => 'description',
        'dryRun' => 'dryRun',
        'mcpRouteId' => 'mcpRouteId',
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
        if (null !== $this->deployConfigs) {
            $res['deployConfigs'] = null !== $this->deployConfigs ? $this->deployConfigs->toMap() : null;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->dryRun) {
            $res['dryRun'] = $this->dryRun;
        }
        if (null !== $this->mcpRouteId) {
            $res['mcpRouteId'] = $this->mcpRouteId;
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
        if (isset($map['deployConfigs'])) {
            $model->deployConfigs = HttpApiDeployConfig::fromMap($map['deployConfigs']);
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['dryRun'])) {
            $model->dryRun = $map['dryRun'];
        }
        if (isset($map['mcpRouteId'])) {
            $model->mcpRouteId = $map['mcpRouteId'];
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
