<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ImageSearch\V20201214;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\ImageSearch\V20201214\Models\AddImageAdvanceRequest;
use AlibabaCloud\SDK\ImageSearch\V20201214\Models\AddImageRequest;
use AlibabaCloud\SDK\ImageSearch\V20201214\Models\AddImageResponse;
use AlibabaCloud\SDK\ImageSearch\V20201214\Models\DeleteImageRequest;
use AlibabaCloud\SDK\ImageSearch\V20201214\Models\DeleteImageResponse;
use AlibabaCloud\SDK\ImageSearch\V20201214\Models\DetailRequest;
use AlibabaCloud\SDK\ImageSearch\V20201214\Models\DetailResponse;
use AlibabaCloud\SDK\ImageSearch\V20201214\Models\DumpMetaListRequest;
use AlibabaCloud\SDK\ImageSearch\V20201214\Models\DumpMetaListResponse;
use AlibabaCloud\SDK\ImageSearch\V20201214\Models\DumpMetaRequest;
use AlibabaCloud\SDK\ImageSearch\V20201214\Models\DumpMetaResponse;
use AlibabaCloud\SDK\ImageSearch\V20201214\Models\IncreaseInstanceRequest;
use AlibabaCloud\SDK\ImageSearch\V20201214\Models\IncreaseInstanceResponse;
use AlibabaCloud\SDK\ImageSearch\V20201214\Models\IncreaseListRequest;
use AlibabaCloud\SDK\ImageSearch\V20201214\Models\IncreaseListResponse;
use AlibabaCloud\SDK\ImageSearch\V20201214\Models\SearchImageByNameRequest;
use AlibabaCloud\SDK\ImageSearch\V20201214\Models\SearchImageByNameResponse;
use AlibabaCloud\SDK\ImageSearch\V20201214\Models\SearchImageByPicAdvanceRequest;
use AlibabaCloud\SDK\ImageSearch\V20201214\Models\SearchImageByPicRequest;
use AlibabaCloud\SDK\ImageSearch\V20201214\Models\SearchImageByPicResponse;
use AlibabaCloud\SDK\ImageSearch\V20201214\Models\UpdateImageRequest;
use AlibabaCloud\SDK\ImageSearch\V20201214\Models\UpdateImageResponse;
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

class ImageSearch extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('imagesearch', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * You can call this operation to add an image to an Image Search instance.
     *   * > If you want to obtain more information about the service and technical support, click [Online Consulting](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2) or join the DingTalk group (ID 35035130).
     *   * ## QPS limits
     *   * By default, the concurrency limit for adding an image to instances whose image capacity specifications are 0.1 million images is 1. This means that the system can process up to one request of adding an image every second. By default, the concurrency limit for adding an image to instances of other image capacity specifications is 5. This means that the system can process up to five requests of adding an image every second.
     *   *
     * @param AddImageRequest $request AddImageRequest
     * @param RuntimeOptions  $runtime runtime options for this request RuntimeOptions
     *
     * @return AddImageResponse AddImageResponse
     */
    public function addImageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->categoryId)) {
            $body['CategoryId'] = $request->categoryId;
        }
        if (!Utils::isUnset($request->crop)) {
            $body['Crop'] = $request->crop;
        }
        if (!Utils::isUnset($request->customContent)) {
            $body['CustomContent'] = $request->customContent;
        }
        if (!Utils::isUnset($request->instanceName)) {
            $body['InstanceName'] = $request->instanceName;
        }
        if (!Utils::isUnset($request->intAttr)) {
            $body['IntAttr'] = $request->intAttr;
        }
        if (!Utils::isUnset($request->intAttr2)) {
            $body['IntAttr2'] = $request->intAttr2;
        }
        if (!Utils::isUnset($request->picContent)) {
            $body['PicContent'] = $request->picContent;
        }
        if (!Utils::isUnset($request->picName)) {
            $body['PicName'] = $request->picName;
        }
        if (!Utils::isUnset($request->productId)) {
            $body['ProductId'] = $request->productId;
        }
        if (!Utils::isUnset($request->region)) {
            $body['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->strAttr)) {
            $body['StrAttr'] = $request->strAttr;
        }
        if (!Utils::isUnset($request->strAttr2)) {
            $body['StrAttr2'] = $request->strAttr2;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AddImage',
            'version'     => '2020-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this operation to add an image to an Image Search instance.
     *   * > If you want to obtain more information about the service and technical support, click [Online Consulting](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2) or join the DingTalk group (ID 35035130).
     *   * ## QPS limits
     *   * By default, the concurrency limit for adding an image to instances whose image capacity specifications are 0.1 million images is 1. This means that the system can process up to one request of adding an image every second. By default, the concurrency limit for adding an image to instances of other image capacity specifications is 5. This means that the system can process up to five requests of adding an image every second.
     *   *
     * @param AddImageRequest $request AddImageRequest
     *
     * @return AddImageResponse AddImageResponse
     */
    public function addImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addImageWithOptions($request, $runtime);
    }

    /**
     * @param AddImageAdvanceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return AddImageResponse
     */
    public function addImageAdvance($request, $runtime)
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
            'product'  => 'ImageSearch',
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

        return $this->addImageWithOptions($addImageReq, $runtime);
    }

    /**
     * This operation deletes images from an Image Search instance.
     *   * >  A success response is returned even if the specified image does not exist on the instance. Therefore, you cannot determine whether the image exists on the instance based on the response.
     *   * ## QPS limits
     *   * By default, the maximum number of queries supported by this operation is 20. In this case, the system can process at most 20 requests every second.
     *   *
     * @param DeleteImageRequest $request DeleteImageRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteImageResponse DeleteImageResponse
     */
    public function deleteImageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->instanceName)) {
            $body['InstanceName'] = $request->instanceName;
        }
        if (!Utils::isUnset($request->picName)) {
            $body['PicName'] = $request->picName;
        }
        if (!Utils::isUnset($request->productId)) {
            $body['ProductId'] = $request->productId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteImage',
            'version'     => '2020-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This operation deletes images from an Image Search instance.
     *   * >  A success response is returned even if the specified image does not exist on the instance. Therefore, you cannot determine whether the image exists on the instance based on the response.
     *   * ## QPS limits
     *   * By default, the maximum number of queries supported by this operation is 20. In this case, the system can process at most 20 requests every second.
     *   *
     * @param DeleteImageRequest $request DeleteImageRequest
     *
     * @return DeleteImageResponse DeleteImageResponse
     */
    public function deleteImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteImageWithOptions($request, $runtime);
    }

    /**
     * This operation queries instance details.
     *   * ## QPS limits
     *   * By default, the maximum number of queries supported by this operation is 1. In this case, the system can process only 1 request every second.
     *   *
     * @param DetailRequest  $request DetailRequest
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return DetailResponse DetailResponse
     */
    public function detailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceName)) {
            $query['InstanceName'] = $request->instanceName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'Detail',
            'version'     => '2020-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This operation queries instance details.
     *   * ## QPS limits
     *   * By default, the maximum number of queries supported by this operation is 1. In this case, the system can process only 1 request every second.
     *   *
     * @param DetailRequest $request DetailRequest
     *
     * @return DetailResponse DetailResponse
     */
    public function detail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detailWithOptions($request, $runtime);
    }

    /**
     * This operation creates a task for exporting metadata from an Image Search instance.
     *   * ## QPS limits
     *   * By default, the maximum number of queries supported by this operation is 1. In this case, the system can process at most 1 request every second.
     *   *
     * @param DumpMetaRequest $request DumpMetaRequest
     * @param RuntimeOptions  $runtime runtime options for this request RuntimeOptions
     *
     * @return DumpMetaResponse DumpMetaResponse
     */
    public function dumpMetaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceName)) {
            $query['InstanceName'] = $request->instanceName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DumpMeta',
            'version'     => '2020-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DumpMetaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This operation creates a task for exporting metadata from an Image Search instance.
     *   * ## QPS limits
     *   * By default, the maximum number of queries supported by this operation is 1. In this case, the system can process at most 1 request every second.
     *   *
     * @param DumpMetaRequest $request DumpMetaRequest
     *
     * @return DumpMetaResponse DumpMetaResponse
     */
    public function dumpMeta($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->dumpMetaWithOptions($request, $runtime);
    }

    /**
     * This operation queries tasks that are used for exporting metadata from an Image Search instance.
     *   * ## QPS limits
     *   * By default, the maximum number of queries supported by this operation is 1. In this case, the system can process at most 1 request every second.
     *   *
     * @param DumpMetaListRequest $request DumpMetaListRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return DumpMetaListResponse DumpMetaListResponse
     */
    public function dumpMetaListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->instanceName)) {
            $query['InstanceName'] = $request->instanceName;
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
            'action'      => 'DumpMetaList',
            'version'     => '2020-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DumpMetaListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This operation queries tasks that are used for exporting metadata from an Image Search instance.
     *   * ## QPS limits
     *   * By default, the maximum number of queries supported by this operation is 1. In this case, the system can process at most 1 request every second.
     *   *
     * @param DumpMetaListRequest $request DumpMetaListRequest
     *
     * @return DumpMetaListResponse DumpMetaListResponse
     */
    public function dumpMetaList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->dumpMetaListWithOptions($request, $runtime);
    }

    /**
     * This operation creates a batch task on an Image Search instance.
     *   * ## QPS limits
     *   * By default, the maximum number of queries supported by this operation is 1. In this case, the system can process at most 1 request every second.
     *   *
     * @param IncreaseInstanceRequest $request IncreaseInstanceRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return IncreaseInstanceResponse IncreaseInstanceResponse
     */
    public function increaseInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bucketName)) {
            $query['BucketName'] = $request->bucketName;
        }
        if (!Utils::isUnset($request->callbackAddress)) {
            $query['CallbackAddress'] = $request->callbackAddress;
        }
        if (!Utils::isUnset($request->instanceName)) {
            $query['InstanceName'] = $request->instanceName;
        }
        if (!Utils::isUnset($request->path)) {
            $query['Path'] = $request->path;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'IncreaseInstance',
            'version'     => '2020-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return IncreaseInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This operation creates a batch task on an Image Search instance.
     *   * ## QPS limits
     *   * By default, the maximum number of queries supported by this operation is 1. In this case, the system can process at most 1 request every second.
     *   *
     * @param IncreaseInstanceRequest $request IncreaseInstanceRequest
     *
     * @return IncreaseInstanceResponse IncreaseInstanceResponse
     */
    public function increaseInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->increaseInstanceWithOptions($request, $runtime);
    }

    /**
     * This operation queries batch tasks on an Image Search instance.
     *   * ## QPS limits
     *   * By default, the maximum number of queries supported by this operation is 1. In this case, the system can process at most 1 request every second.
     *   *
     * @param IncreaseListRequest $request IncreaseListRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return IncreaseListResponse IncreaseListResponse
     */
    public function increaseListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bucketName)) {
            $query['BucketName'] = $request->bucketName;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->instanceName)) {
            $query['InstanceName'] = $request->instanceName;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->path)) {
            $query['Path'] = $request->path;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'IncreaseList',
            'version'     => '2020-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return IncreaseListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This operation queries batch tasks on an Image Search instance.
     *   * ## QPS limits
     *   * By default, the maximum number of queries supported by this operation is 1. In this case, the system can process at most 1 request every second.
     *   *
     * @param IncreaseListRequest $request IncreaseListRequest
     *
     * @return IncreaseListResponse IncreaseListResponse
     */
    public function increaseList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->increaseListWithOptions($request, $runtime);
    }

    /**
     * This operation searches for images by image name on an Image Search instance.
     *   * ## QPS limits
     *   * The maximum number of queries per second is displayed in the Image Search console. The upper limit is specified when you purchase the instance. You can set the upper limit to 5 QPS or 10 QPS.
     *   *
     * @param SearchImageByNameRequest $request SearchImageByNameRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return SearchImageByNameResponse SearchImageByNameResponse
     */
    public function searchImageByNameWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->categoryId)) {
            $body['CategoryId'] = $request->categoryId;
        }
        if (!Utils::isUnset($request->filter)) {
            $body['Filter'] = $request->filter;
        }
        if (!Utils::isUnset($request->instanceName)) {
            $body['InstanceName'] = $request->instanceName;
        }
        if (!Utils::isUnset($request->num)) {
            $body['Num'] = $request->num;
        }
        if (!Utils::isUnset($request->picName)) {
            $body['PicName'] = $request->picName;
        }
        if (!Utils::isUnset($request->productId)) {
            $body['ProductId'] = $request->productId;
        }
        if (!Utils::isUnset($request->start)) {
            $body['Start'] = $request->start;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SearchImageByName',
            'version'     => '2020-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SearchImageByNameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This operation searches for images by image name on an Image Search instance.
     *   * ## QPS limits
     *   * The maximum number of queries per second is displayed in the Image Search console. The upper limit is specified when you purchase the instance. You can set the upper limit to 5 QPS or 10 QPS.
     *   *
     * @param SearchImageByNameRequest $request SearchImageByNameRequest
     *
     * @return SearchImageByNameResponse SearchImageByNameResponse
     */
    public function searchImageByName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchImageByNameWithOptions($request, $runtime);
    }

    /**
     * This operation searches for images by image name on an Image Search instance.
     *   * ## QPS limits
     *   * The maximum number of queries per second is displayed in the Image Search console. The upper limit is specified when you purchase the instance. You can set the upper limit to 5 QPS or 10 QPS.
     *   * ## SDK release notes
     *   * The Image Search SDK has been upgraded to version 3.1.1, which supports multi-subject recognition and similarity scores. For more information, see [Image Search SDK for Java](/help/en/image-search/latest/version-v3-java-sdk).
     *   *
     * @param SearchImageByPicRequest $request SearchImageByPicRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return SearchImageByPicResponse SearchImageByPicResponse
     */
    public function searchImageByPicWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->categoryId)) {
            $body['CategoryId'] = $request->categoryId;
        }
        if (!Utils::isUnset($request->crop)) {
            $body['Crop'] = $request->crop;
        }
        if (!Utils::isUnset($request->filter)) {
            $body['Filter'] = $request->filter;
        }
        if (!Utils::isUnset($request->instanceName)) {
            $body['InstanceName'] = $request->instanceName;
        }
        if (!Utils::isUnset($request->num)) {
            $body['Num'] = $request->num;
        }
        if (!Utils::isUnset($request->picContent)) {
            $body['PicContent'] = $request->picContent;
        }
        if (!Utils::isUnset($request->region)) {
            $body['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->start)) {
            $body['Start'] = $request->start;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SearchImageByPic',
            'version'     => '2020-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SearchImageByPicResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This operation searches for images by image name on an Image Search instance.
     *   * ## QPS limits
     *   * The maximum number of queries per second is displayed in the Image Search console. The upper limit is specified when you purchase the instance. You can set the upper limit to 5 QPS or 10 QPS.
     *   * ## SDK release notes
     *   * The Image Search SDK has been upgraded to version 3.1.1, which supports multi-subject recognition and similarity scores. For more information, see [Image Search SDK for Java](/help/en/image-search/latest/version-v3-java-sdk).
     *   *
     * @param SearchImageByPicRequest $request SearchImageByPicRequest
     *
     * @return SearchImageByPicResponse SearchImageByPicResponse
     */
    public function searchImageByPic($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchImageByPicWithOptions($request, $runtime);
    }

    /**
     * @param SearchImageByPicAdvanceRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return SearchImageByPicResponse
     */
    public function searchImageByPicAdvance($request, $runtime)
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
            'product'  => 'ImageSearch',
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

        return $this->searchImageByPicWithOptions($searchImageByPicReq, $runtime);
    }

    /**
     * This operation updates image information on an Image Search instance.
     *   * > *   Limits are imposed on the instance creation time.
     *   * >*   This operation is supported by instances that are created in the Singapore (Singapore) region after December 2021. This operation is not supported in other regions.
     *   * ## QPS limits
     *   * By default, the maximum number of queries supported by this operation is 20. In this case, the system can process at most 20 requests every second.
     *   *
     * @param UpdateImageRequest $request UpdateImageRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateImageResponse UpdateImageResponse
     */
    public function updateImageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->customContent)) {
            $body['CustomContent'] = $request->customContent;
        }
        if (!Utils::isUnset($request->instanceName)) {
            $body['InstanceName'] = $request->instanceName;
        }
        if (!Utils::isUnset($request->intAttr)) {
            $body['IntAttr'] = $request->intAttr;
        }
        if (!Utils::isUnset($request->intAttr2)) {
            $body['IntAttr2'] = $request->intAttr2;
        }
        if (!Utils::isUnset($request->picName)) {
            $body['PicName'] = $request->picName;
        }
        if (!Utils::isUnset($request->productId)) {
            $body['ProductId'] = $request->productId;
        }
        if (!Utils::isUnset($request->strAttr)) {
            $body['StrAttr'] = $request->strAttr;
        }
        if (!Utils::isUnset($request->strAttr2)) {
            $body['StrAttr2'] = $request->strAttr2;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateImage',
            'version'     => '2020-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This operation updates image information on an Image Search instance.
     *   * > *   Limits are imposed on the instance creation time.
     *   * >*   This operation is supported by instances that are created in the Singapore (Singapore) region after December 2021. This operation is not supported in other regions.
     *   * ## QPS limits
     *   * By default, the maximum number of queries supported by this operation is 20. In this case, the system can process at most 20 requests every second.
     *   *
     * @param UpdateImageRequest $request UpdateImageRequest
     *
     * @return UpdateImageResponse UpdateImageResponse
     */
    public function updateImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateImageWithOptions($request, $runtime);
    }
}
