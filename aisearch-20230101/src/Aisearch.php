<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aisearch\V20230101;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Aisearch\V20230101\Models\AddImageAdvanceRequest;
use AlibabaCloud\SDK\Aisearch\V20230101\Models\AddImageRequest;
use AlibabaCloud\SDK\Aisearch\V20230101\Models\AddImageResponse;
use AlibabaCloud\SDK\Aisearch\V20230101\Models\AddImageShrinkRequest;
use AlibabaCloud\SDK\Aisearch\V20230101\Models\CheckOssIncrementMetaExistRequest;
use AlibabaCloud\SDK\Aisearch\V20230101\Models\CheckOssIncrementMetaExistResponse;
use AlibabaCloud\SDK\Aisearch\V20230101\Models\CreateBatchTasksRequest;
use AlibabaCloud\SDK\Aisearch\V20230101\Models\CreateBatchTasksResponse;
use AlibabaCloud\SDK\Aisearch\V20230101\Models\CreateDumpMetaResponse;
use AlibabaCloud\SDK\Aisearch\V20230101\Models\DeleteImageRequest;
use AlibabaCloud\SDK\Aisearch\V20230101\Models\DeleteImageResponse;
use AlibabaCloud\SDK\Aisearch\V20230101\Models\GetImageRequest;
use AlibabaCloud\SDK\Aisearch\V20230101\Models\GetImageResponse;
use AlibabaCloud\SDK\Aisearch\V20230101\Models\GetInstanceResponse;
use AlibabaCloud\SDK\Aisearch\V20230101\Models\ListBatchTasksRequest;
use AlibabaCloud\SDK\Aisearch\V20230101\Models\ListBatchTasksResponse;
use AlibabaCloud\SDK\Aisearch\V20230101\Models\ListDumpMetaRequest;
use AlibabaCloud\SDK\Aisearch\V20230101\Models\ListDumpMetaResponse;
use AlibabaCloud\SDK\Aisearch\V20230101\Models\ListInstanceRequest;
use AlibabaCloud\SDK\Aisearch\V20230101\Models\ListInstanceResponse;
use AlibabaCloud\SDK\Aisearch\V20230101\Models\ListOssBucketAndPathRequest;
use AlibabaCloud\SDK\Aisearch\V20230101\Models\ListOssBucketAndPathResponse;
use AlibabaCloud\SDK\Aisearch\V20230101\Models\ResetInstanceResponse;
use AlibabaCloud\SDK\Aisearch\V20230101\Models\SearchImageByNameRequest;
use AlibabaCloud\SDK\Aisearch\V20230101\Models\SearchImageByNameResponse;
use AlibabaCloud\SDK\Aisearch\V20230101\Models\SearchImageByPicAdvanceRequest;
use AlibabaCloud\SDK\Aisearch\V20230101\Models\SearchImageByPicRequest;
use AlibabaCloud\SDK\Aisearch\V20230101\Models\SearchImageByPicResponse;
use AlibabaCloud\SDK\Aisearch\V20230101\Models\SearchImageByPicShrinkRequest;
use AlibabaCloud\SDK\Aisearch\V20230101\Models\StopBatchTasksResponse;
use AlibabaCloud\SDK\Aisearch\V20230101\Models\StopDumpMetaResponse;
use AlibabaCloud\SDK\Aisearch\V20230101\Models\UpdateImageRequest;
use AlibabaCloud\SDK\Aisearch\V20230101\Models\UpdateImageResponse;
use AlibabaCloud\SDK\OpenPlatform\V20191219\Models\AuthorizeFileUploadRequest;
use AlibabaCloud\SDK\OpenPlatform\V20191219\Models\AuthorizeFileUploadResponse;
use AlibabaCloud\SDK\OpenPlatform\V20191219\OpenPlatform;
use AlibabaCloud\SDK\OSS\OSS;
use AlibabaCloud\SDK\OSS\OSS\PostObjectRequest;
use AlibabaCloud\SDK\OSS\OSS\PostObjectRequest\header;
use AlibabaCloud\Tea\FileForm\FileForm\FileField;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\Config;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Aisearch extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('aisearch', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param string          $InstanceName
     * @param string          $ProductId
     * @param AddImageRequest $tmpReq
     * @param string[]        $headers
     * @param RuntimeOptions  $runtime
     *
     * @return AddImageResponse
     */
    public function addImageWithOptions($InstanceName, $ProductId, $tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new AddImageShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->boxes)) {
            $request->boxesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->boxes, 'Boxes', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->customContent)) {
            $query['CustomContent'] = $request->customContent;
        }
        if (!Utils::isUnset($request->detectLimit)) {
            $query['DetectLimit'] = $request->detectLimit;
        }
        if (!Utils::isUnset($request->intAttr)) {
            $query['IntAttr'] = $request->intAttr;
        }
        if (!Utils::isUnset($request->picContent)) {
            $query['PicContent'] = $request->picContent;
        }
        if (!Utils::isUnset($request->picName)) {
            $query['PicName'] = $request->picName;
        }
        if (!Utils::isUnset($request->picUrl)) {
            $query['PicUrl'] = $request->picUrl;
        }
        if (!Utils::isUnset($request->strAttr)) {
            $query['StrAttr'] = $request->strAttr;
        }
        $body = [];
        if (!Utils::isUnset($request->boxesShrink)) {
            $body['Boxes'] = $request->boxesShrink;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AddImage',
            'version'     => '2023-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/instance/' . OpenApiUtilClient::getEncodeParam($InstanceName) . '/entity/' . OpenApiUtilClient::getEncodeParam($ProductId) . '/image',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string          $InstanceName
     * @param string          $ProductId
     * @param AddImageRequest $request
     *
     * @return AddImageResponse
     */
    public function addImage($InstanceName, $ProductId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->addImageWithOptions($InstanceName, $ProductId, $request, $headers, $runtime);
    }

    /**
     * @param string                 $InstanceName
     * @param string                 $ProductId
     * @param AddImageAdvanceRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return AddImageResponse
     */
    public function addImageAdvance($InstanceName, $ProductId, $request, $headers, $runtime)
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
            'product'  => 'aisearch',
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
        $addImageReq = new AddImageRequest([]);
        OpenApiUtilClient::convert($request, $addImageReq);
        if (!Utils::isUnset($request->picContentObject)) {
            $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->body->accessKeyId;
            $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->body->endpoint, $authResponse->body->useAccelerate, $this->_endpointType);
            $ossClient              = new OSS($ossConfig);
            $fileObj                = new FileField([
                'filename'    => $authResponse->body->objectKey,
                'content'     => $request->picContentObject,
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
            $addImageReq->picContent = 'http://' . $authResponse->body->bucket . '.' . $authResponse->body->endpoint . '/' . $authResponse->body->objectKey . '';
        }

        return $this->addImageWithOptions($InstanceName, $ProductId, $addImageReq, $headers, $runtime);
    }

    /**
     * @param CheckOssIncrementMetaExistRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return CheckOssIncrementMetaExistResponse
     */
    public function checkOssIncrementMetaExistWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bucketName)) {
            $query['BucketName'] = $request->bucketName;
        }
        if (!Utils::isUnset($request->key)) {
            $query['Key'] = $request->key;
        }
        if (!Utils::isUnset($request->ossPath)) {
            $query['OssPath'] = $request->ossPath;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CheckOssIncrementMetaExist',
            'version'     => '2023-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/oss/check-increment-metafile',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CheckOssIncrementMetaExistResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CheckOssIncrementMetaExistRequest $request
     *
     * @return CheckOssIncrementMetaExistResponse
     */
    public function checkOssIncrementMetaExist($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->checkOssIncrementMetaExistWithOptions($request, $headers, $runtime);
    }

    /**
     * @param string                  $InstanceName
     * @param CreateBatchTasksRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return CreateBatchTasksResponse
     */
    public function createBatchTasksWithOptions($InstanceName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bucketName)) {
            $query['BucketName'] = $request->bucketName;
        }
        if (!Utils::isUnset($request->callbackAddress)) {
            $query['CallbackAddress'] = $request->callbackAddress;
        }
        if (!Utils::isUnset($request->ossPath)) {
            $query['OssPath'] = $request->ossPath;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateBatchTasks',
            'version'     => '2023-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/instance/' . OpenApiUtilClient::getEncodeParam($InstanceName) . '/batch-task',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateBatchTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                  $InstanceName
     * @param CreateBatchTasksRequest $request
     *
     * @return CreateBatchTasksResponse
     */
    public function createBatchTasks($InstanceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createBatchTasksWithOptions($InstanceName, $request, $headers, $runtime);
    }

    /**
     * @param string         $InstanceName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return CreateDumpMetaResponse
     */
    public function createDumpMetaWithOptions($InstanceName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'CreateDumpMeta',
            'version'     => '2023-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/instance/' . OpenApiUtilClient::getEncodeParam($InstanceName) . '/dump-meta',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateDumpMetaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $InstanceName
     *
     * @return CreateDumpMetaResponse
     */
    public function createDumpMeta($InstanceName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createDumpMetaWithOptions($InstanceName, $headers, $runtime);
    }

    /**
     * @param string             $InstanceName
     * @param string             $ProductId
     * @param DeleteImageRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteImageResponse
     */
    public function deleteImageWithOptions($InstanceName, $ProductId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->picName)) {
            $query['PicName'] = $request->picName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteImage',
            'version'     => '2023-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/instance/' . OpenApiUtilClient::getEncodeParam($InstanceName) . '/entity/' . OpenApiUtilClient::getEncodeParam($ProductId) . '/image',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string             $InstanceName
     * @param string             $ProductId
     * @param DeleteImageRequest $request
     *
     * @return DeleteImageResponse
     */
    public function deleteImage($InstanceName, $ProductId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteImageWithOptions($InstanceName, $ProductId, $request, $headers, $runtime);
    }

    /**
     * @param string          $InstanceName
     * @param string          $ProductId
     * @param GetImageRequest $request
     * @param string[]        $headers
     * @param RuntimeOptions  $runtime
     *
     * @return GetImageResponse
     */
    public function getImageWithOptions($InstanceName, $ProductId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->picName)) {
            $query['PicName'] = $request->picName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetImage',
            'version'     => '2023-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/instance/' . OpenApiUtilClient::getEncodeParam($InstanceName) . '/entity/' . OpenApiUtilClient::getEncodeParam($ProductId) . '/image',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string          $InstanceName
     * @param string          $ProductId
     * @param GetImageRequest $request
     *
     * @return GetImageResponse
     */
    public function getImage($InstanceName, $ProductId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getImageWithOptions($InstanceName, $ProductId, $request, $headers, $runtime);
    }

    /**
     * @param string         $InstanceName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetInstanceResponse
     */
    public function getInstanceWithOptions($InstanceName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetInstance',
            'version'     => '2023-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/instance/' . OpenApiUtilClient::getEncodeParam($InstanceName) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $InstanceName
     *
     * @return GetInstanceResponse
     */
    public function getInstance($InstanceName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getInstanceWithOptions($InstanceName, $headers, $runtime);
    }

    /**
     * @param string                $InstanceName
     * @param ListBatchTasksRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return ListBatchTasksResponse
     */
    public function listBatchTasksWithOptions($InstanceName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bucketName)) {
            $query['BucketName'] = $request->bucketName;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->ossPath)) {
            $query['OssPath'] = $request->ossPath;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListBatchTasks',
            'version'     => '2023-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/instance/' . OpenApiUtilClient::getEncodeParam($InstanceName) . '/batch-tasks',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListBatchTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                $InstanceName
     * @param ListBatchTasksRequest $request
     *
     * @return ListBatchTasksResponse
     */
    public function listBatchTasks($InstanceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listBatchTasksWithOptions($InstanceName, $request, $headers, $runtime);
    }

    /**
     * @param string              $InstanceName
     * @param ListDumpMetaRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return ListDumpMetaResponse
     */
    public function listDumpMetaWithOptions($InstanceName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDumpMeta',
            'version'     => '2023-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/instance/' . OpenApiUtilClient::getEncodeParam($InstanceName) . '/dump-metas',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListDumpMetaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string              $InstanceName
     * @param ListDumpMetaRequest $request
     *
     * @return ListDumpMetaResponse
     */
    public function listDumpMeta($InstanceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDumpMetaWithOptions($InstanceName, $request, $headers, $runtime);
    }

    /**
     * @param ListInstanceRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return ListInstanceResponse
     */
    public function listInstanceWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceName)) {
            $query['InstanceName'] = $request->instanceName;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->serviceType)) {
            $query['ServiceType'] = $request->serviceType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListInstance',
            'version'     => '2023-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/instances',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListInstanceRequest $request
     *
     * @return ListInstanceResponse
     */
    public function listInstance($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listInstanceWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListOssBucketAndPathRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return ListOssBucketAndPathResponse
     */
    public function listOssBucketAndPathWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bucketName)) {
            $query['BucketName'] = $request->bucketName;
        }
        if (!Utils::isUnset($request->ossPath)) {
            $query['OssPath'] = $request->ossPath;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListOssBucketAndPath',
            'version'     => '2023-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/oss/buckets-and-path',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListOssBucketAndPathResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListOssBucketAndPathRequest $request
     *
     * @return ListOssBucketAndPathResponse
     */
    public function listOssBucketAndPath($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listOssBucketAndPathWithOptions($request, $headers, $runtime);
    }

    /**
     * @param string         $InstanceName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ResetInstanceResponse
     */
    public function resetInstanceWithOptions($InstanceName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ResetInstance',
            'version'     => '2023-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/instance/' . OpenApiUtilClient::getEncodeParam($InstanceName) . '/reset',
            'method'      => 'PATCH',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ResetInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $InstanceName
     *
     * @return ResetInstanceResponse
     */
    public function resetInstance($InstanceName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->resetInstanceWithOptions($InstanceName, $headers, $runtime);
    }

    /**
     * @param string                   $InstanceName
     * @param SearchImageByNameRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return SearchImageByNameResponse
     */
    public function searchImageByNameWithOptions($InstanceName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->filter)) {
            $query['Filter'] = $request->filter;
        }
        if (!Utils::isUnset($request->num)) {
            $query['Num'] = $request->num;
        }
        if (!Utils::isUnset($request->picName)) {
            $query['PicName'] = $request->picName;
        }
        if (!Utils::isUnset($request->productId)) {
            $query['ProductId'] = $request->productId;
        }
        if (!Utils::isUnset($request->start)) {
            $query['Start'] = $request->start;
        }
        if (!Utils::isUnset($request->text)) {
            $query['Text'] = $request->text;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SearchImageByName',
            'version'     => '2023-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/instance/' . OpenApiUtilClient::getEncodeParam($InstanceName) . '/search-by-name',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return SearchImageByNameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                   $InstanceName
     * @param SearchImageByNameRequest $request
     *
     * @return SearchImageByNameResponse
     */
    public function searchImageByName($InstanceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->searchImageByNameWithOptions($InstanceName, $request, $headers, $runtime);
    }

    /**
     * @param string                  $InstanceName
     * @param SearchImageByPicRequest $tmpReq
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return SearchImageByPicResponse
     */
    public function searchImageByPicWithOptions($InstanceName, $tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SearchImageByPicShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->box)) {
            $request->boxShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->box, 'Box', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->boxShrink)) {
            $query['Box'] = $request->boxShrink;
        }
        if (!Utils::isUnset($request->detectLimit)) {
            $query['DetectLimit'] = $request->detectLimit;
        }
        if (!Utils::isUnset($request->filter)) {
            $query['Filter'] = $request->filter;
        }
        if (!Utils::isUnset($request->num)) {
            $query['Num'] = $request->num;
        }
        if (!Utils::isUnset($request->picContent)) {
            $query['PicContent'] = $request->picContent;
        }
        if (!Utils::isUnset($request->picUrl)) {
            $query['PicUrl'] = $request->picUrl;
        }
        if (!Utils::isUnset($request->start)) {
            $query['Start'] = $request->start;
        }
        if (!Utils::isUnset($request->text)) {
            $query['Text'] = $request->text;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SearchImageByPic',
            'version'     => '2023-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/instance/' . OpenApiUtilClient::getEncodeParam($InstanceName) . '/search-by-pic',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return SearchImageByPicResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                  $InstanceName
     * @param SearchImageByPicRequest $request
     *
     * @return SearchImageByPicResponse
     */
    public function searchImageByPic($InstanceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->searchImageByPicWithOptions($InstanceName, $request, $headers, $runtime);
    }

    /**
     * @param string                         $InstanceName
     * @param SearchImageByPicAdvanceRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return SearchImageByPicResponse
     */
    public function searchImageByPicAdvance($InstanceName, $request, $headers, $runtime)
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
            'product'  => 'aisearch',
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
        $searchImageByPicReq = new SearchImageByPicRequest([]);
        OpenApiUtilClient::convert($request, $searchImageByPicReq);
        if (!Utils::isUnset($request->picContentObject)) {
            $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->body->accessKeyId;
            $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->body->endpoint, $authResponse->body->useAccelerate, $this->_endpointType);
            $ossClient              = new OSS($ossConfig);
            $fileObj                = new FileField([
                'filename'    => $authResponse->body->objectKey,
                'content'     => $request->picContentObject,
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
            $searchImageByPicReq->picContent = 'http://' . $authResponse->body->bucket . '.' . $authResponse->body->endpoint . '/' . $authResponse->body->objectKey . '';
        }

        return $this->searchImageByPicWithOptions($InstanceName, $searchImageByPicReq, $headers, $runtime);
    }

    /**
     * @param string         $InstanceName
     * @param string         $Id
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return StopBatchTasksResponse
     */
    public function stopBatchTasksWithOptions($InstanceName, $Id, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'StopBatchTasks',
            'version'     => '2023-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/instance/' . OpenApiUtilClient::getEncodeParam($InstanceName) . '/batch-task/' . OpenApiUtilClient::getEncodeParam($Id) . '/stop',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return StopBatchTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $InstanceName
     * @param string $Id
     *
     * @return StopBatchTasksResponse
     */
    public function stopBatchTasks($InstanceName, $Id)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->stopBatchTasksWithOptions($InstanceName, $Id, $headers, $runtime);
    }

    /**
     * @param string         $InstanceName
     * @param string         $Id
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return StopDumpMetaResponse
     */
    public function stopDumpMetaWithOptions($InstanceName, $Id, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'StopDumpMeta',
            'version'     => '2023-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/instance/' . OpenApiUtilClient::getEncodeParam($InstanceName) . '/dump-meta/' . OpenApiUtilClient::getEncodeParam($Id) . '/stop',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return StopDumpMetaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $InstanceName
     * @param string $Id
     *
     * @return StopDumpMetaResponse
     */
    public function stopDumpMeta($InstanceName, $Id)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->stopDumpMetaWithOptions($InstanceName, $Id, $headers, $runtime);
    }

    /**
     * @param string             $InstanceName
     * @param string             $ProductId
     * @param UpdateImageRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return UpdateImageResponse
     */
    public function updateImageWithOptions($InstanceName, $ProductId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->customContent)) {
            $query['CustomContent'] = $request->customContent;
        }
        if (!Utils::isUnset($request->intAttr)) {
            $query['IntAttr'] = $request->intAttr;
        }
        if (!Utils::isUnset($request->picName)) {
            $query['PicName'] = $request->picName;
        }
        if (!Utils::isUnset($request->strAttr)) {
            $query['StrAttr'] = $request->strAttr;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateImage',
            'version'     => '2023-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/instance/' . OpenApiUtilClient::getEncodeParam($InstanceName) . '/entity/' . OpenApiUtilClient::getEncodeParam($ProductId) . '/image',
            'method'      => 'PATCH',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string             $InstanceName
     * @param string             $ProductId
     * @param UpdateImageRequest $request
     *
     * @return UpdateImageResponse
     */
    public function updateImage($InstanceName, $ProductId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateImageWithOptions($InstanceName, $ProductId, $request, $headers, $runtime);
    }
}
