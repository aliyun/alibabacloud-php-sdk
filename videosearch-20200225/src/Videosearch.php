<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videosearch\V20200225;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\OpenPlatform\V20191219\Models\AuthorizeFileUploadRequest;
use AlibabaCloud\SDK\OpenPlatform\V20191219\Models\AuthorizeFileUploadResponse;
use AlibabaCloud\SDK\OpenPlatform\V20191219\OpenPlatform;
use AlibabaCloud\SDK\OSS\OSS;
use AlibabaCloud\SDK\OSS\OSS\PostObjectRequest;
use AlibabaCloud\SDK\OSS\OSS\PostObjectRequest\header;
use AlibabaCloud\SDK\Videosearch\V20200225\Models\AddDeletionAudioTaskRequest;
use AlibabaCloud\SDK\Videosearch\V20200225\Models\AddDeletionAudioTaskResponse;
use AlibabaCloud\SDK\Videosearch\V20200225\Models\AddDeletionVideoTaskRequest;
use AlibabaCloud\SDK\Videosearch\V20200225\Models\AddDeletionVideoTaskResponse;
use AlibabaCloud\SDK\Videosearch\V20200225\Models\AddSearchAudioTaskAdvanceRequest;
use AlibabaCloud\SDK\Videosearch\V20200225\Models\AddSearchAudioTaskRequest;
use AlibabaCloud\SDK\Videosearch\V20200225\Models\AddSearchAudioTaskResponse;
use AlibabaCloud\SDK\Videosearch\V20200225\Models\AddSearchVideoTaskAdvanceRequest;
use AlibabaCloud\SDK\Videosearch\V20200225\Models\AddSearchVideoTaskRequest;
use AlibabaCloud\SDK\Videosearch\V20200225\Models\AddSearchVideoTaskResponse;
use AlibabaCloud\SDK\Videosearch\V20200225\Models\AddStorageAudioTaskAdvanceRequest;
use AlibabaCloud\SDK\Videosearch\V20200225\Models\AddStorageAudioTaskRequest;
use AlibabaCloud\SDK\Videosearch\V20200225\Models\AddStorageAudioTaskResponse;
use AlibabaCloud\SDK\Videosearch\V20200225\Models\AddStorageVideoTaskAdvanceRequest;
use AlibabaCloud\SDK\Videosearch\V20200225\Models\AddStorageVideoTaskRequest;
use AlibabaCloud\SDK\Videosearch\V20200225\Models\AddStorageVideoTaskResponse;
use AlibabaCloud\SDK\Videosearch\V20200225\Models\CancelBatchTaskRequest;
use AlibabaCloud\SDK\Videosearch\V20200225\Models\CancelBatchTaskResponse;
use AlibabaCloud\SDK\Videosearch\V20200225\Models\CreateBatchTaskAdvanceRequest;
use AlibabaCloud\SDK\Videosearch\V20200225\Models\CreateBatchTaskRequest;
use AlibabaCloud\SDK\Videosearch\V20200225\Models\CreateBatchTaskResponse;
use AlibabaCloud\SDK\Videosearch\V20200225\Models\GetAudioInstanceRequest;
use AlibabaCloud\SDK\Videosearch\V20200225\Models\GetAudioInstanceResponse;
use AlibabaCloud\SDK\Videosearch\V20200225\Models\GetAudioStorageHistoryRequest;
use AlibabaCloud\SDK\Videosearch\V20200225\Models\GetAudioStorageHistoryResponse;
use AlibabaCloud\SDK\Videosearch\V20200225\Models\GetAudioTaskStatusRequest;
use AlibabaCloud\SDK\Videosearch\V20200225\Models\GetAudioTaskStatusResponse;
use AlibabaCloud\SDK\Videosearch\V20200225\Models\GetBatchTaskRequest;
use AlibabaCloud\SDK\Videosearch\V20200225\Models\GetBatchTaskResponse;
use AlibabaCloud\SDK\Videosearch\V20200225\Models\GetInstanceRequest;
use AlibabaCloud\SDK\Videosearch\V20200225\Models\GetInstanceResponse;
use AlibabaCloud\SDK\Videosearch\V20200225\Models\GetStorageHistoryRequest;
use AlibabaCloud\SDK\Videosearch\V20200225\Models\GetStorageHistoryResponse;
use AlibabaCloud\SDK\Videosearch\V20200225\Models\GetTaskStatusRequest;
use AlibabaCloud\SDK\Videosearch\V20200225\Models\GetTaskStatusResponse;
use AlibabaCloud\SDK\Videosearch\V20200225\Models\ListBatchTaskRequest;
use AlibabaCloud\SDK\Videosearch\V20200225\Models\ListBatchTaskResponse;
use AlibabaCloud\SDK\Videosearch\V20200225\Models\ListInstancesRequest;
use AlibabaCloud\SDK\Videosearch\V20200225\Models\ListInstancesResponse;
use AlibabaCloud\SDK\Videosearch\V20200225\Models\ListSearchAudioTasksRequest;
use AlibabaCloud\SDK\Videosearch\V20200225\Models\ListSearchAudioTasksResponse;
use AlibabaCloud\SDK\Videosearch\V20200225\Models\ListSearchVideoTasksRequest;
use AlibabaCloud\SDK\Videosearch\V20200225\Models\ListSearchVideoTasksResponse;
use AlibabaCloud\SDK\Videosearch\V20200225\Models\ListStorageAudioTasksRequest;
use AlibabaCloud\SDK\Videosearch\V20200225\Models\ListStorageAudioTasksResponse;
use AlibabaCloud\SDK\Videosearch\V20200225\Models\ListStorageVideoTasksRequest;
use AlibabaCloud\SDK\Videosearch\V20200225\Models\ListStorageVideoTasksResponse;
use AlibabaCloud\SDK\Videosearch\V20200225\Models\ModifyPriorityRequest;
use AlibabaCloud\SDK\Videosearch\V20200225\Models\ModifyPriorityResponse;
use AlibabaCloud\Tea\FileForm\FileForm\FileField;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\Config;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Videosearch extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'cn-beijing'  => 'multisearch.cn-beijing.aliyuncs.com',
            'cn-hangzhou' => 'multisearch.cn-hangzhou.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('videosearch', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
    }

    /**
     * @param string   $productId
     * @param string   $regionId
     * @param string   $endpointRule
     * @param string   $network
     * @param string   $suffix
     * @param string[] $endpointMap
     * @param string   $endpoint
     *
     * @return string
     */
    public function getEndpoint($productId, $regionId, $endpointRule, $network, $suffix, $endpointMap, $endpoint)
    {
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @param AddDeletionAudioTaskRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return AddDeletionAudioTaskResponse
     */
    public function addDeletionAudioTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        $body = [];
        if (!Utils::isUnset($request->audioId)) {
            $body['AudioId'] = $request->audioId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AddDeletionAudioTask',
            'version'     => '2020-02-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddDeletionAudioTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddDeletionAudioTaskRequest $request
     *
     * @return AddDeletionAudioTaskResponse
     */
    public function addDeletionAudioTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addDeletionAudioTaskWithOptions($request, $runtime);
    }

    /**
     * @param AddDeletionVideoTaskRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return AddDeletionVideoTaskResponse
     */
    public function addDeletionVideoTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        $body = [];
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->videoId)) {
            $body['VideoId'] = $request->videoId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AddDeletionVideoTask',
            'version'     => '2020-02-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddDeletionVideoTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddDeletionVideoTaskRequest $request
     *
     * @return AddDeletionVideoTaskResponse
     */
    public function addDeletionVideoTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addDeletionVideoTaskWithOptions($request, $runtime);
    }

    /**
     * @param AddSearchAudioTaskRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return AddSearchAudioTaskResponse
     */
    public function addSearchAudioTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        $body = [];
        if (!Utils::isUnset($request->audioFile)) {
            $body['AudioFile'] = $request->audioFile;
        }
        if (!Utils::isUnset($request->audioUrl)) {
            $body['AudioUrl'] = $request->audioUrl;
        }
        if (!Utils::isUnset($request->callbackUrl)) {
            $body['CallbackUrl'] = $request->callbackUrl;
        }
        if (!Utils::isUnset($request->contentSource)) {
            $body['ContentSource'] = $request->contentSource;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->needFeatureFile)) {
            $body['NeedFeatureFile'] = $request->needFeatureFile;
        }
        if (!Utils::isUnset($request->queryTags)) {
            $body['QueryTags'] = $request->queryTags;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $body['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->returnAudioNumber)) {
            $body['ReturnAudioNumber'] = $request->returnAudioNumber;
        }
        if (!Utils::isUnset($request->sort)) {
            $body['Sort'] = $request->sort;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AddSearchAudioTask',
            'version'     => '2020-02-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddSearchAudioTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddSearchAudioTaskRequest $request
     *
     * @return AddSearchAudioTaskResponse
     */
    public function addSearchAudioTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addSearchAudioTaskWithOptions($request, $runtime);
    }

    /**
     * @param AddSearchAudioTaskAdvanceRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return AddSearchAudioTaskResponse
     */
    public function addSearchAudioTaskAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId          = $this->_credential->getAccessKeyId();
        $accessKeySecret      = $this->_credential->getAccessKeySecret();
        $securityToken        = $this->_credential->getSecurityToken();
        $credentialType       = $this->_credential->getType();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (Utils::isUnset($openPlatformEndpoint)) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }
        if (Utils::isUnset($credentialType)) {
            $credentialType = 'access_key';
        }
        $authConfig = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'securityToken'   => $securityToken,
            'type'            => $credentialType,
            'endpoint'        => $openPlatformEndpoint,
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'videosearch',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = new AuthorizeFileUploadResponse([]);
        $ossConfig    = new \AlibabaCloud\SDK\OSS\OSS\Config([
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $ossClient     = null;
        $fileObj       = new FileField([]);
        $ossHeader     = new header([]);
        $uploadRequest = new PostObjectRequest([]);
        $ossRuntime    = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        OpenApiUtilClient::convert($runtime, $ossRuntime);
        $addSearchAudioTaskReq = new AddSearchAudioTaskRequest([]);
        OpenApiUtilClient::convert($request, $addSearchAudioTaskReq);
        if (!Utils::isUnset($request->audioFileObject)) {
            $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->body->accessKeyId;
            $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->body->endpoint, $authResponse->body->useAccelerate, $this->_endpointType);
            $ossClient              = new OSS($ossConfig);
            $fileObj                = new FileField([
                'filename'    => $authResponse->body->objectKey,
                'content'     => $request->audioFileObject,
                'contentType' => '',
            ]);
            $ossHeader = new header([
                'accessKeyId'         => $authResponse->body->accessKeyId,
                'policy'              => $authResponse->body->encodedPolicy,
                'signature'           => $authResponse->body->signature,
                'key'                 => $authResponse->body->objectKey,
                'file'                => $fileObj,
                'successActionStatus' => '201',
            ]);
            $uploadRequest = new PostObjectRequest([
                'bucketName' => $authResponse->body->bucket,
                'header'     => $ossHeader,
            ]);
            $ossClient->postObject($uploadRequest, $ossRuntime);
            $addSearchAudioTaskReq->audioFile = 'http://' . $authResponse->body->bucket . '.' . $authResponse->body->endpoint . '/' . $authResponse->body->objectKey . '';
        }

        return $this->addSearchAudioTaskWithOptions($addSearchAudioTaskReq, $runtime);
    }

    /**
     * @param AddSearchVideoTaskRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return AddSearchVideoTaskResponse
     */
    public function addSearchVideoTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        $body = [];
        if (!Utils::isUnset($request->callbackUrl)) {
            $body['CallbackUrl'] = $request->callbackUrl;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->needFeatureFile)) {
            $body['NeedFeatureFile'] = $request->needFeatureFile;
        }
        if (!Utils::isUnset($request->queryTags)) {
            $body['QueryTags'] = $request->queryTags;
        }
        if (!Utils::isUnset($request->replaceStorageThreshold)) {
            $body['ReplaceStorageThreshold'] = $request->replaceStorageThreshold;
        }
        if (!Utils::isUnset($request->returnVideoNumber)) {
            $body['ReturnVideoNumber'] = $request->returnVideoNumber;
        }
        if (!Utils::isUnset($request->searchType)) {
            $body['SearchType'] = $request->searchType;
        }
        if (!Utils::isUnset($request->sort)) {
            $body['Sort'] = $request->sort;
        }
        if (!Utils::isUnset($request->storageType)) {
            $body['StorageType'] = $request->storageType;
        }
        if (!Utils::isUnset($request->videoFile)) {
            $body['VideoFile'] = $request->videoFile;
        }
        if (!Utils::isUnset($request->videoId)) {
            $body['VideoId'] = $request->videoId;
        }
        if (!Utils::isUnset($request->videoTags)) {
            $body['VideoTags'] = $request->videoTags;
        }
        if (!Utils::isUnset($request->videoUrl)) {
            $body['VideoUrl'] = $request->videoUrl;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AddSearchVideoTask',
            'version'     => '2020-02-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddSearchVideoTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddSearchVideoTaskRequest $request
     *
     * @return AddSearchVideoTaskResponse
     */
    public function addSearchVideoTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addSearchVideoTaskWithOptions($request, $runtime);
    }

    /**
     * @param AddSearchVideoTaskAdvanceRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return AddSearchVideoTaskResponse
     */
    public function addSearchVideoTaskAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId          = $this->_credential->getAccessKeyId();
        $accessKeySecret      = $this->_credential->getAccessKeySecret();
        $securityToken        = $this->_credential->getSecurityToken();
        $credentialType       = $this->_credential->getType();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (Utils::isUnset($openPlatformEndpoint)) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }
        if (Utils::isUnset($credentialType)) {
            $credentialType = 'access_key';
        }
        $authConfig = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'securityToken'   => $securityToken,
            'type'            => $credentialType,
            'endpoint'        => $openPlatformEndpoint,
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'videosearch',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = new AuthorizeFileUploadResponse([]);
        $ossConfig    = new \AlibabaCloud\SDK\OSS\OSS\Config([
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $ossClient     = null;
        $fileObj       = new FileField([]);
        $ossHeader     = new header([]);
        $uploadRequest = new PostObjectRequest([]);
        $ossRuntime    = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        OpenApiUtilClient::convert($runtime, $ossRuntime);
        $addSearchVideoTaskReq = new AddSearchVideoTaskRequest([]);
        OpenApiUtilClient::convert($request, $addSearchVideoTaskReq);
        if (!Utils::isUnset($request->videoFileObject)) {
            $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->body->accessKeyId;
            $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->body->endpoint, $authResponse->body->useAccelerate, $this->_endpointType);
            $ossClient              = new OSS($ossConfig);
            $fileObj                = new FileField([
                'filename'    => $authResponse->body->objectKey,
                'content'     => $request->videoFileObject,
                'contentType' => '',
            ]);
            $ossHeader = new header([
                'accessKeyId'         => $authResponse->body->accessKeyId,
                'policy'              => $authResponse->body->encodedPolicy,
                'signature'           => $authResponse->body->signature,
                'key'                 => $authResponse->body->objectKey,
                'file'                => $fileObj,
                'successActionStatus' => '201',
            ]);
            $uploadRequest = new PostObjectRequest([
                'bucketName' => $authResponse->body->bucket,
                'header'     => $ossHeader,
            ]);
            $ossClient->postObject($uploadRequest, $ossRuntime);
            $addSearchVideoTaskReq->videoFile = 'http://' . $authResponse->body->bucket . '.' . $authResponse->body->endpoint . '/' . $authResponse->body->objectKey . '';
        }

        return $this->addSearchVideoTaskWithOptions($addSearchVideoTaskReq, $runtime);
    }

    /**
     * @param AddStorageAudioTaskRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return AddStorageAudioTaskResponse
     */
    public function addStorageAudioTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->contentSource)) {
            $query['ContentSource'] = $request->contentSource;
        }
        $body = [];
        if (!Utils::isUnset($request->audioFile)) {
            $body['AudioFile'] = $request->audioFile;
        }
        if (!Utils::isUnset($request->audioId)) {
            $body['AudioId'] = $request->audioId;
        }
        if (!Utils::isUnset($request->audioTags)) {
            $body['AudioTags'] = $request->audioTags;
        }
        if (!Utils::isUnset($request->audioUrl)) {
            $body['AudioUrl'] = $request->audioUrl;
        }
        if (!Utils::isUnset($request->callbackUrl)) {
            $body['CallbackUrl'] = $request->callbackUrl;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->sort)) {
            $body['Sort'] = $request->sort;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AddStorageAudioTask',
            'version'     => '2020-02-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddStorageAudioTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddStorageAudioTaskRequest $request
     *
     * @return AddStorageAudioTaskResponse
     */
    public function addStorageAudioTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addStorageAudioTaskWithOptions($request, $runtime);
    }

    /**
     * @param AddStorageAudioTaskAdvanceRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return AddStorageAudioTaskResponse
     */
    public function addStorageAudioTaskAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId          = $this->_credential->getAccessKeyId();
        $accessKeySecret      = $this->_credential->getAccessKeySecret();
        $securityToken        = $this->_credential->getSecurityToken();
        $credentialType       = $this->_credential->getType();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (Utils::isUnset($openPlatformEndpoint)) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }
        if (Utils::isUnset($credentialType)) {
            $credentialType = 'access_key';
        }
        $authConfig = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'securityToken'   => $securityToken,
            'type'            => $credentialType,
            'endpoint'        => $openPlatformEndpoint,
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'videosearch',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = new AuthorizeFileUploadResponse([]);
        $ossConfig    = new \AlibabaCloud\SDK\OSS\OSS\Config([
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $ossClient     = null;
        $fileObj       = new FileField([]);
        $ossHeader     = new header([]);
        $uploadRequest = new PostObjectRequest([]);
        $ossRuntime    = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        OpenApiUtilClient::convert($runtime, $ossRuntime);
        $addStorageAudioTaskReq = new AddStorageAudioTaskRequest([]);
        OpenApiUtilClient::convert($request, $addStorageAudioTaskReq);
        if (!Utils::isUnset($request->audioFileObject)) {
            $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->body->accessKeyId;
            $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->body->endpoint, $authResponse->body->useAccelerate, $this->_endpointType);
            $ossClient              = new OSS($ossConfig);
            $fileObj                = new FileField([
                'filename'    => $authResponse->body->objectKey,
                'content'     => $request->audioFileObject,
                'contentType' => '',
            ]);
            $ossHeader = new header([
                'accessKeyId'         => $authResponse->body->accessKeyId,
                'policy'              => $authResponse->body->encodedPolicy,
                'signature'           => $authResponse->body->signature,
                'key'                 => $authResponse->body->objectKey,
                'file'                => $fileObj,
                'successActionStatus' => '201',
            ]);
            $uploadRequest = new PostObjectRequest([
                'bucketName' => $authResponse->body->bucket,
                'header'     => $ossHeader,
            ]);
            $ossClient->postObject($uploadRequest, $ossRuntime);
            $addStorageAudioTaskReq->audioFile = 'http://' . $authResponse->body->bucket . '.' . $authResponse->body->endpoint . '/' . $authResponse->body->objectKey . '';
        }

        return $this->addStorageAudioTaskWithOptions($addStorageAudioTaskReq, $runtime);
    }

    /**
     * @param AddStorageVideoTaskRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return AddStorageVideoTaskResponse
     */
    public function addStorageVideoTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        $body = [];
        if (!Utils::isUnset($request->callbackUrl)) {
            $body['CallbackUrl'] = $request->callbackUrl;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->sort)) {
            $body['Sort'] = $request->sort;
        }
        if (!Utils::isUnset($request->storageInfo)) {
            $body['StorageInfo'] = $request->storageInfo;
        }
        if (!Utils::isUnset($request->videoFile)) {
            $body['VideoFile'] = $request->videoFile;
        }
        if (!Utils::isUnset($request->videoId)) {
            $body['VideoId'] = $request->videoId;
        }
        if (!Utils::isUnset($request->videoTags)) {
            $body['VideoTags'] = $request->videoTags;
        }
        if (!Utils::isUnset($request->videoUrl)) {
            $body['VideoUrl'] = $request->videoUrl;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AddStorageVideoTask',
            'version'     => '2020-02-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddStorageVideoTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddStorageVideoTaskRequest $request
     *
     * @return AddStorageVideoTaskResponse
     */
    public function addStorageVideoTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addStorageVideoTaskWithOptions($request, $runtime);
    }

    /**
     * @param AddStorageVideoTaskAdvanceRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return AddStorageVideoTaskResponse
     */
    public function addStorageVideoTaskAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId          = $this->_credential->getAccessKeyId();
        $accessKeySecret      = $this->_credential->getAccessKeySecret();
        $securityToken        = $this->_credential->getSecurityToken();
        $credentialType       = $this->_credential->getType();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (Utils::isUnset($openPlatformEndpoint)) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }
        if (Utils::isUnset($credentialType)) {
            $credentialType = 'access_key';
        }
        $authConfig = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'securityToken'   => $securityToken,
            'type'            => $credentialType,
            'endpoint'        => $openPlatformEndpoint,
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'videosearch',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = new AuthorizeFileUploadResponse([]);
        $ossConfig    = new \AlibabaCloud\SDK\OSS\OSS\Config([
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $ossClient     = null;
        $fileObj       = new FileField([]);
        $ossHeader     = new header([]);
        $uploadRequest = new PostObjectRequest([]);
        $ossRuntime    = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        OpenApiUtilClient::convert($runtime, $ossRuntime);
        $addStorageVideoTaskReq = new AddStorageVideoTaskRequest([]);
        OpenApiUtilClient::convert($request, $addStorageVideoTaskReq);
        if (!Utils::isUnset($request->videoFileObject)) {
            $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->body->accessKeyId;
            $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->body->endpoint, $authResponse->body->useAccelerate, $this->_endpointType);
            $ossClient              = new OSS($ossConfig);
            $fileObj                = new FileField([
                'filename'    => $authResponse->body->objectKey,
                'content'     => $request->videoFileObject,
                'contentType' => '',
            ]);
            $ossHeader = new header([
                'accessKeyId'         => $authResponse->body->accessKeyId,
                'policy'              => $authResponse->body->encodedPolicy,
                'signature'           => $authResponse->body->signature,
                'key'                 => $authResponse->body->objectKey,
                'file'                => $fileObj,
                'successActionStatus' => '201',
            ]);
            $uploadRequest = new PostObjectRequest([
                'bucketName' => $authResponse->body->bucket,
                'header'     => $ossHeader,
            ]);
            $ossClient->postObject($uploadRequest, $ossRuntime);
            $addStorageVideoTaskReq->videoFile = 'http://' . $authResponse->body->bucket . '.' . $authResponse->body->endpoint . '/' . $authResponse->body->objectKey . '';
        }

        return $this->addStorageVideoTaskWithOptions($addStorageVideoTaskReq, $runtime);
    }

    /**
     * @param CancelBatchTaskRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CancelBatchTaskResponse
     */
    public function cancelBatchTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->batchTaskId)) {
            $query['BatchTaskId'] = $request->batchTaskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CancelBatchTask',
            'version'     => '2020-02-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CancelBatchTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CancelBatchTaskRequest $request
     *
     * @return CancelBatchTaskResponse
     */
    public function cancelBatchTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelBatchTaskWithOptions($request, $runtime);
    }

    /**
     * @param CreateBatchTaskRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateBatchTaskResponse
     */
    public function createBatchTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        $body = [];
        if (!Utils::isUnset($request->batchTaskType)) {
            $body['BatchTaskType'] = $request->batchTaskType;
        }
        if (!Utils::isUnset($request->callbackUrl)) {
            $body['CallbackUrl'] = $request->callbackUrl;
        }
        if (!Utils::isUnset($request->fileUrl)) {
            $body['FileUrl'] = $request->fileUrl;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->ossBucketName)) {
            $body['OssBucketName'] = $request->ossBucketName;
        }
        if (!Utils::isUnset($request->ossDataPath)) {
            $body['OssDataPath'] = $request->ossDataPath;
        }
        if (!Utils::isUnset($request->ossMetaFile)) {
            $body['OssMetaFile'] = $request->ossMetaFile;
        }
        if (!Utils::isUnset($request->roleArn)) {
            $body['RoleArn'] = $request->roleArn;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateBatchTask',
            'version'     => '2020-02-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateBatchTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateBatchTaskRequest $request
     *
     * @return CreateBatchTaskResponse
     */
    public function createBatchTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createBatchTaskWithOptions($request, $runtime);
    }

    /**
     * @param CreateBatchTaskAdvanceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CreateBatchTaskResponse
     */
    public function createBatchTaskAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId          = $this->_credential->getAccessKeyId();
        $accessKeySecret      = $this->_credential->getAccessKeySecret();
        $securityToken        = $this->_credential->getSecurityToken();
        $credentialType       = $this->_credential->getType();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (Utils::isUnset($openPlatformEndpoint)) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }
        if (Utils::isUnset($credentialType)) {
            $credentialType = 'access_key';
        }
        $authConfig = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'securityToken'   => $securityToken,
            'type'            => $credentialType,
            'endpoint'        => $openPlatformEndpoint,
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'videosearch',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = new AuthorizeFileUploadResponse([]);
        $ossConfig    = new \AlibabaCloud\SDK\OSS\OSS\Config([
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $ossClient     = null;
        $fileObj       = new FileField([]);
        $ossHeader     = new header([]);
        $uploadRequest = new PostObjectRequest([]);
        $ossRuntime    = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        OpenApiUtilClient::convert($runtime, $ossRuntime);
        $createBatchTaskReq = new CreateBatchTaskRequest([]);
        OpenApiUtilClient::convert($request, $createBatchTaskReq);
        if (!Utils::isUnset($request->fileUrlObject)) {
            $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->body->accessKeyId;
            $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->body->endpoint, $authResponse->body->useAccelerate, $this->_endpointType);
            $ossClient              = new OSS($ossConfig);
            $fileObj                = new FileField([
                'filename'    => $authResponse->body->objectKey,
                'content'     => $request->fileUrlObject,
                'contentType' => '',
            ]);
            $ossHeader = new header([
                'accessKeyId'         => $authResponse->body->accessKeyId,
                'policy'              => $authResponse->body->encodedPolicy,
                'signature'           => $authResponse->body->signature,
                'key'                 => $authResponse->body->objectKey,
                'file'                => $fileObj,
                'successActionStatus' => '201',
            ]);
            $uploadRequest = new PostObjectRequest([
                'bucketName' => $authResponse->body->bucket,
                'header'     => $ossHeader,
            ]);
            $ossClient->postObject($uploadRequest, $ossRuntime);
            $createBatchTaskReq->fileUrl = 'http://' . $authResponse->body->bucket . '.' . $authResponse->body->endpoint . '/' . $authResponse->body->objectKey . '';
        }

        return $this->createBatchTaskWithOptions($createBatchTaskReq, $runtime);
    }

    /**
     * @param GetAudioInstanceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetAudioInstanceResponse
     */
    public function getAudioInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        $body = [];
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetAudioInstance',
            'version'     => '2020-02-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAudioInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetAudioInstanceRequest $request
     *
     * @return GetAudioInstanceResponse
     */
    public function getAudioInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAudioInstanceWithOptions($request, $runtime);
    }

    /**
     * @param GetAudioStorageHistoryRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetAudioStorageHistoryResponse
     */
    public function getAudioStorageHistoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->audioId)) {
            $query['AudioId'] = $request->audioId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAudioStorageHistory',
            'version'     => '2020-02-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAudioStorageHistoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetAudioStorageHistoryRequest $request
     *
     * @return GetAudioStorageHistoryResponse
     */
    public function getAudioStorageHistory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAudioStorageHistoryWithOptions($request, $runtime);
    }

    /**
     * @param GetAudioTaskStatusRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetAudioTaskStatusResponse
     */
    public function getAudioTaskStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        $body = [];
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->taskId)) {
            $body['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetAudioTaskStatus',
            'version'     => '2020-02-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAudioTaskStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetAudioTaskStatusRequest $request
     *
     * @return GetAudioTaskStatusResponse
     */
    public function getAudioTaskStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAudioTaskStatusWithOptions($request, $runtime);
    }

    /**
     * @param GetBatchTaskRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetBatchTaskResponse
     */
    public function getBatchTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        $body = [];
        if (!Utils::isUnset($request->batchTaskId)) {
            $body['BatchTaskId'] = $request->batchTaskId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetBatchTask',
            'version'     => '2020-02-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetBatchTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetBatchTaskRequest $request
     *
     * @return GetBatchTaskResponse
     */
    public function getBatchTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBatchTaskWithOptions($request, $runtime);
    }

    /**
     * @param GetInstanceRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetInstanceResponse
     */
    public function getInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        $body = [];
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetInstance',
            'version'     => '2020-02-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetInstanceRequest $request
     *
     * @return GetInstanceResponse
     */
    public function getInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInstanceWithOptions($request, $runtime);
    }

    /**
     * @param GetStorageHistoryRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetStorageHistoryResponse
     */
    public function getStorageHistoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->videoId)) {
            $query['VideoId'] = $request->videoId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetStorageHistory',
            'version'     => '2020-02-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetStorageHistoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetStorageHistoryRequest $request
     *
     * @return GetStorageHistoryResponse
     */
    public function getStorageHistory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getStorageHistoryWithOptions($request, $runtime);
    }

    /**
     * @param GetTaskStatusRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetTaskStatusResponse
     */
    public function getTaskStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        $body = [];
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->taskId)) {
            $body['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetTaskStatus',
            'version'     => '2020-02-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetTaskStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetTaskStatusRequest $request
     *
     * @return GetTaskStatusResponse
     */
    public function getTaskStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTaskStatusWithOptions($request, $runtime);
    }

    /**
     * @param ListBatchTaskRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListBatchTaskResponse
     */
    public function listBatchTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->batchTaskType)) {
            $query['BatchTaskType'] = $request->batchTaskType;
        }
        if (!Utils::isUnset($request->bucketName)) {
            $query['BucketName'] = $request->bucketName;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dataPath)) {
            $query['DataPath'] = $request->dataPath;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListBatchTask',
            'version'     => '2020-02-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListBatchTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListBatchTaskRequest $request
     *
     * @return ListBatchTaskResponse
     */
    public function listBatchTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listBatchTaskWithOptions($request, $runtime);
    }

    /**
     * @param ListInstancesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListInstancesResponse
     */
    public function listInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        $body = [];
        if (!Utils::isUnset($request->instanceName)) {
            $body['InstanceName'] = $request->instanceName;
        }
        if (!Utils::isUnset($request->instanceType)) {
            $body['InstanceType'] = $request->instanceType;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->status)) {
            $body['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->tags)) {
            $body['Tags'] = $request->tags;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListInstances',
            'version'     => '2020-02-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListInstancesRequest $request
     *
     * @return ListInstancesResponse
     */
    public function listInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listInstancesWithOptions($request, $runtime);
    }

    /**
     * @param ListSearchAudioTasksRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListSearchAudioTasksResponse
     */
    public function listSearchAudioTasksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->sortList)) {
            $body['SortList'] = $request->sortList;
        }
        if (!Utils::isUnset($request->statusList)) {
            $body['StatusList'] = $request->statusList;
        }
        if (!Utils::isUnset($request->taskId)) {
            $body['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListSearchAudioTasks',
            'version'     => '2020-02-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListSearchAudioTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListSearchAudioTasksRequest $request
     *
     * @return ListSearchAudioTasksResponse
     */
    public function listSearchAudioTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSearchAudioTasksWithOptions($request, $runtime);
    }

    /**
     * @param ListSearchVideoTasksRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListSearchVideoTasksResponse
     */
    public function listSearchVideoTasksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->searchTypeList)) {
            $body['SearchTypeList'] = $request->searchTypeList;
        }
        if (!Utils::isUnset($request->sortList)) {
            $body['SortList'] = $request->sortList;
        }
        if (!Utils::isUnset($request->statusList)) {
            $body['StatusList'] = $request->statusList;
        }
        if (!Utils::isUnset($request->taskId)) {
            $body['TaskId'] = $request->taskId;
        }
        if (!Utils::isUnset($request->videoId)) {
            $body['VideoId'] = $request->videoId;
        }
        if (!Utils::isUnset($request->videoName)) {
            $body['VideoName'] = $request->videoName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListSearchVideoTasks',
            'version'     => '2020-02-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListSearchVideoTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListSearchVideoTasksRequest $request
     *
     * @return ListSearchVideoTasksResponse
     */
    public function listSearchVideoTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSearchVideoTasksWithOptions($request, $runtime);
    }

    /**
     * @param ListStorageAudioTasksRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListStorageAudioTasksResponse
     */
    public function listStorageAudioTasksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        $body = [];
        if (!Utils::isUnset($request->audioId)) {
            $body['AudioId'] = $request->audioId;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->sortList)) {
            $body['SortList'] = $request->sortList;
        }
        if (!Utils::isUnset($request->statusList)) {
            $body['StatusList'] = $request->statusList;
        }
        if (!Utils::isUnset($request->storageInfoList)) {
            $body['StorageInfoList'] = $request->storageInfoList;
        }
        if (!Utils::isUnset($request->taskId)) {
            $body['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListStorageAudioTasks',
            'version'     => '2020-02-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListStorageAudioTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListStorageAudioTasksRequest $request
     *
     * @return ListStorageAudioTasksResponse
     */
    public function listStorageAudioTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listStorageAudioTasksWithOptions($request, $runtime);
    }

    /**
     * @param ListStorageVideoTasksRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListStorageVideoTasksResponse
     */
    public function listStorageVideoTasksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->sortList)) {
            $body['SortList'] = $request->sortList;
        }
        if (!Utils::isUnset($request->statusList)) {
            $body['StatusList'] = $request->statusList;
        }
        if (!Utils::isUnset($request->storageInfoList)) {
            $body['StorageInfoList'] = $request->storageInfoList;
        }
        if (!Utils::isUnset($request->taskId)) {
            $body['TaskId'] = $request->taskId;
        }
        if (!Utils::isUnset($request->videoId)) {
            $body['VideoId'] = $request->videoId;
        }
        if (!Utils::isUnset($request->videoName)) {
            $body['VideoName'] = $request->videoName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListStorageVideoTasks',
            'version'     => '2020-02-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListStorageVideoTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListStorageVideoTasksRequest $request
     *
     * @return ListStorageVideoTasksResponse
     */
    public function listStorageVideoTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listStorageVideoTasksWithOptions($request, $runtime);
    }

    /**
     * @param ModifyPriorityRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ModifyPriorityResponse
     */
    public function modifyPriorityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $body = [];
        if (!Utils::isUnset($request->sort)) {
            $body['Sort'] = $request->sort;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ModifyPriority',
            'version'     => '2020-02-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyPriorityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyPriorityRequest $request
     *
     * @return ModifyPriorityResponse
     */
    public function modifyPriority($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyPriorityWithOptions($request, $runtime);
    }
}
