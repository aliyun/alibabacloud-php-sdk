<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20180509;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Green\V20180509\Models\AddFacesRequest;
use AlibabaCloud\SDK\Green\V20180509\Models\AddFacesResponse;
use AlibabaCloud\SDK\Green\V20180509\Models\AddGroupsRequest;
use AlibabaCloud\SDK\Green\V20180509\Models\AddGroupsResponse;
use AlibabaCloud\SDK\Green\V20180509\Models\AddPersonRequest;
use AlibabaCloud\SDK\Green\V20180509\Models\AddPersonResponse;
use AlibabaCloud\SDK\Green\V20180509\Models\AddSimilarityImageRequest;
use AlibabaCloud\SDK\Green\V20180509\Models\AddSimilarityImageResponse;
use AlibabaCloud\SDK\Green\V20180509\Models\AddSimilarityLibraryRequest;
use AlibabaCloud\SDK\Green\V20180509\Models\AddSimilarityLibraryResponse;
use AlibabaCloud\SDK\Green\V20180509\Models\AddVideoDnaGroupRequest;
use AlibabaCloud\SDK\Green\V20180509\Models\AddVideoDnaGroupResponse;
use AlibabaCloud\SDK\Green\V20180509\Models\AddVideoDnaRequest;
use AlibabaCloud\SDK\Green\V20180509\Models\AddVideoDnaResponse;
use AlibabaCloud\SDK\Green\V20180509\Models\DeleteFacesRequest;
use AlibabaCloud\SDK\Green\V20180509\Models\DeleteFacesResponse;
use AlibabaCloud\SDK\Green\V20180509\Models\DeleteGroupsRequest;
use AlibabaCloud\SDK\Green\V20180509\Models\DeleteGroupsResponse;
use AlibabaCloud\SDK\Green\V20180509\Models\DeletePersonRequest;
use AlibabaCloud\SDK\Green\V20180509\Models\DeletePersonResponse;
use AlibabaCloud\SDK\Green\V20180509\Models\DeleteSimilarityImageRequest;
use AlibabaCloud\SDK\Green\V20180509\Models\DeleteSimilarityImageResponse;
use AlibabaCloud\SDK\Green\V20180509\Models\DeleteSimilarityLibraryRequest;
use AlibabaCloud\SDK\Green\V20180509\Models\DeleteSimilarityLibraryResponse;
use AlibabaCloud\SDK\Green\V20180509\Models\DeleteVideoDnaGroupRequest;
use AlibabaCloud\SDK\Green\V20180509\Models\DeleteVideoDnaGroupResponse;
use AlibabaCloud\SDK\Green\V20180509\Models\DeleteVideoDnaRequest;
use AlibabaCloud\SDK\Green\V20180509\Models\DeleteVideoDnaResponse;
use AlibabaCloud\SDK\Green\V20180509\Models\DetectFaceRequest;
use AlibabaCloud\SDK\Green\V20180509\Models\DetectFaceResponse;
use AlibabaCloud\SDK\Green\V20180509\Models\FileAsyncScanRequest;
use AlibabaCloud\SDK\Green\V20180509\Models\FileAsyncScanResponse;
use AlibabaCloud\SDK\Green\V20180509\Models\FileAsyncScanResultsRequest;
use AlibabaCloud\SDK\Green\V20180509\Models\FileAsyncScanResultsResponse;
use AlibabaCloud\SDK\Green\V20180509\Models\FileAsyncScanV2Response;
use AlibabaCloud\SDK\Green\V20180509\Models\GetFacesRequest;
use AlibabaCloud\SDK\Green\V20180509\Models\GetFacesResponse;
use AlibabaCloud\SDK\Green\V20180509\Models\GetGroupsRequest;
use AlibabaCloud\SDK\Green\V20180509\Models\GetGroupsResponse;
use AlibabaCloud\SDK\Green\V20180509\Models\GetPersonRequest;
use AlibabaCloud\SDK\Green\V20180509\Models\GetPersonResponse;
use AlibabaCloud\SDK\Green\V20180509\Models\GetPersonsRequest;
use AlibabaCloud\SDK\Green\V20180509\Models\GetPersonsResponse;
use AlibabaCloud\SDK\Green\V20180509\Models\GetSimilarityImageRequest;
use AlibabaCloud\SDK\Green\V20180509\Models\GetSimilarityImageResponse;
use AlibabaCloud\SDK\Green\V20180509\Models\GetSimilarityLibraryRequest;
use AlibabaCloud\SDK\Green\V20180509\Models\GetSimilarityLibraryResponse;
use AlibabaCloud\SDK\Green\V20180509\Models\ImageAsyncManualScanRequest;
use AlibabaCloud\SDK\Green\V20180509\Models\ImageAsyncManualScanResponse;
use AlibabaCloud\SDK\Green\V20180509\Models\ImageAsyncManualScanResultsRequest;
use AlibabaCloud\SDK\Green\V20180509\Models\ImageAsyncManualScanResultsResponse;
use AlibabaCloud\SDK\Green\V20180509\Models\ImageAsyncScanRequest;
use AlibabaCloud\SDK\Green\V20180509\Models\ImageAsyncScanResponse;
use AlibabaCloud\SDK\Green\V20180509\Models\ImageAsyncScanResultsRequest;
use AlibabaCloud\SDK\Green\V20180509\Models\ImageAsyncScanResultsResponse;
use AlibabaCloud\SDK\Green\V20180509\Models\ImageScanFeedbackRequest;
use AlibabaCloud\SDK\Green\V20180509\Models\ImageScanFeedbackResponse;
use AlibabaCloud\SDK\Green\V20180509\Models\ImageSyncScanRequest;
use AlibabaCloud\SDK\Green\V20180509\Models\ImageSyncScanResponse;
use AlibabaCloud\SDK\Green\V20180509\Models\ListSimilarityImagesRequest;
use AlibabaCloud\SDK\Green\V20180509\Models\ListSimilarityImagesResponse;
use AlibabaCloud\SDK\Green\V20180509\Models\ListSimilarityLibrariesRequest;
use AlibabaCloud\SDK\Green\V20180509\Models\ListSimilarityLibrariesResponse;
use AlibabaCloud\SDK\Green\V20180509\Models\LiveStreamAsyncScanRequest;
use AlibabaCloud\SDK\Green\V20180509\Models\LiveStreamAsyncScanResponse;
use AlibabaCloud\SDK\Green\V20180509\Models\LiveStreamAsyncScanResultsRequest;
use AlibabaCloud\SDK\Green\V20180509\Models\LiveStreamAsyncScanResultsResponse;
use AlibabaCloud\SDK\Green\V20180509\Models\LiveStreamCancelScanRequest;
use AlibabaCloud\SDK\Green\V20180509\Models\LiveStreamCancelScanResponse;
use AlibabaCloud\SDK\Green\V20180509\Models\SetPersonRequest;
use AlibabaCloud\SDK\Green\V20180509\Models\SetPersonResponse;
use AlibabaCloud\SDK\Green\V20180509\Models\TextAsyncManualScanRequest;
use AlibabaCloud\SDK\Green\V20180509\Models\TextAsyncManualScanResponse;
use AlibabaCloud\SDK\Green\V20180509\Models\TextAsyncManualScanResultsRequest;
use AlibabaCloud\SDK\Green\V20180509\Models\TextAsyncManualScanResultsResponse;
use AlibabaCloud\SDK\Green\V20180509\Models\TextFeedbackRequest;
use AlibabaCloud\SDK\Green\V20180509\Models\TextFeedbackResponse;
use AlibabaCloud\SDK\Green\V20180509\Models\TextScanRequest;
use AlibabaCloud\SDK\Green\V20180509\Models\TextScanResponse;
use AlibabaCloud\SDK\Green\V20180509\Models\UploadCredentialsRequest;
use AlibabaCloud\SDK\Green\V20180509\Models\UploadCredentialsResponse;
use AlibabaCloud\SDK\Green\V20180509\Models\VideoAsyncManualScanRequest;
use AlibabaCloud\SDK\Green\V20180509\Models\VideoAsyncManualScanResponse;
use AlibabaCloud\SDK\Green\V20180509\Models\VideoAsyncManualScanResultsRequest;
use AlibabaCloud\SDK\Green\V20180509\Models\VideoAsyncManualScanResultsResponse;
use AlibabaCloud\SDK\Green\V20180509\Models\VideoAsyncScanRequest;
use AlibabaCloud\SDK\Green\V20180509\Models\VideoAsyncScanResponse;
use AlibabaCloud\SDK\Green\V20180509\Models\VideoAsyncScanResultsRequest;
use AlibabaCloud\SDK\Green\V20180509\Models\VideoAsyncScanResultsResponse;
use AlibabaCloud\SDK\Green\V20180509\Models\VideoCancelScanRequest;
use AlibabaCloud\SDK\Green\V20180509\Models\VideoCancelScanResponse;
use AlibabaCloud\SDK\Green\V20180509\Models\VideoFeedbackRequest;
use AlibabaCloud\SDK\Green\V20180509\Models\VideoFeedbackResponse;
use AlibabaCloud\SDK\Green\V20180509\Models\VideoSyncScanRequest;
use AlibabaCloud\SDK\Green\V20180509\Models\VideoSyncScanResponse;
use AlibabaCloud\SDK\Green\V20180509\Models\VodAsyncScanRequest;
use AlibabaCloud\SDK\Green\V20180509\Models\VodAsyncScanResponse;
use AlibabaCloud\SDK\Green\V20180509\Models\VodAsyncScanResultsRequest;
use AlibabaCloud\SDK\Green\V20180509\Models\VodAsyncScanResultsResponse;
use AlibabaCloud\SDK\Green\V20180509\Models\VoiceAsyncManualScanRequest;
use AlibabaCloud\SDK\Green\V20180509\Models\VoiceAsyncManualScanResponse;
use AlibabaCloud\SDK\Green\V20180509\Models\VoiceAsyncManualScanResultsRequest;
use AlibabaCloud\SDK\Green\V20180509\Models\VoiceAsyncManualScanResultsResponse;
use AlibabaCloud\SDK\Green\V20180509\Models\VoiceAsyncScanRequest;
use AlibabaCloud\SDK\Green\V20180509\Models\VoiceAsyncScanResponse;
use AlibabaCloud\SDK\Green\V20180509\Models\VoiceAsyncScanResultsRequest;
use AlibabaCloud\SDK\Green\V20180509\Models\VoiceAsyncScanResultsResponse;
use AlibabaCloud\SDK\Green\V20180509\Models\VoiceCancelScanRequest;
use AlibabaCloud\SDK\Green\V20180509\Models\VoiceCancelScanResponse;
use AlibabaCloud\SDK\Green\V20180509\Models\VoiceIdentityCheckRequest;
use AlibabaCloud\SDK\Green\V20180509\Models\VoiceIdentityCheckResponse;
use AlibabaCloud\SDK\Green\V20180509\Models\VoiceIdentityRegisterRequest;
use AlibabaCloud\SDK\Green\V20180509\Models\VoiceIdentityRegisterResponse;
use AlibabaCloud\SDK\Green\V20180509\Models\VoiceIdentityStartCheckRequest;
use AlibabaCloud\SDK\Green\V20180509\Models\VoiceIdentityStartCheckResponse;
use AlibabaCloud\SDK\Green\V20180509\Models\VoiceIdentityStartRegisterRequest;
use AlibabaCloud\SDK\Green\V20180509\Models\VoiceIdentityStartRegisterResponse;
use AlibabaCloud\SDK\Green\V20180509\Models\VoiceIdentityUnregisterRequest;
use AlibabaCloud\SDK\Green\V20180509\Models\VoiceIdentityUnregisterResponse;
use AlibabaCloud\SDK\Green\V20180509\Models\VoiceSyncScanRequest;
use AlibabaCloud\SDK\Green\V20180509\Models\VoiceSyncScanResponse;
use AlibabaCloud\SDK\Green\V20180509\Models\WebpageAsyncScanRequest;
use AlibabaCloud\SDK\Green\V20180509\Models\WebpageAsyncScanResponse;
use AlibabaCloud\SDK\Green\V20180509\Models\WebpageAsyncScanResultsRequest;
use AlibabaCloud\SDK\Green\V20180509\Models\WebpageAsyncScanResultsResponse;
use AlibabaCloud\SDK\Green\V20180509\Models\WebpageSyncScanRequest;
use AlibabaCloud\SDK\Green\V20180509\Models\WebpageSyncScanResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Green extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'ap-northeast-1'        => 'green.ap-southeast-1.aliyuncs.com',
            'ap-south-1'            => 'green.ap-southeast-1.aliyuncs.com',
            'ap-southeast-2'        => 'green.ap-southeast-1.aliyuncs.com',
            'ap-southeast-3'        => 'green.ap-southeast-1.aliyuncs.com',
            'ap-southeast-5'        => 'green.ap-southeast-1.aliyuncs.com',
            'cn-chengdu'            => 'green.aliyuncs.com',
            'cn-hongkong'           => 'green.aliyuncs.com',
            'cn-huhehaote'          => 'green.aliyuncs.com',
            'cn-qingdao'            => 'green.aliyuncs.com',
            'cn-zhangjiakou'        => 'green.aliyuncs.com',
            'eu-central-1'          => 'green.ap-southeast-1.aliyuncs.com',
            'eu-west-1'             => 'green.ap-southeast-1.aliyuncs.com',
            'me-east-1'             => 'green.ap-southeast-1.aliyuncs.com',
            'us-east-1'             => 'green.ap-southeast-1.aliyuncs.com',
            'cn-hangzhou-finance'   => 'green.aliyuncs.com',
            'cn-shenzhen-finance-1' => 'green.aliyuncs.com',
            'cn-shanghai-finance-1' => 'green.aliyuncs.com',
            'cn-north-2-gov-1'      => 'green.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('green', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @summary 添加人脸
     *  *
     * @param AddFacesRequest $request AddFacesRequest
     * @param string[]        $headers map
     * @param RuntimeOptions  $runtime runtime options for this request RuntimeOptions
     *
     * @return AddFacesResponse AddFacesResponse
     */
    public function addFacesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientInfo)) {
            $query['ClientInfo'] = $request->clientInfo;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddFaces',
            'version'     => '2018-05-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/green/sface/face/add',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return AddFacesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 添加人脸
     *  *
     * @param AddFacesRequest $request AddFacesRequest
     *
     * @return AddFacesResponse AddFacesResponse
     */
    public function addFaces($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->addFacesWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 添加分组
     *  *
     * @param AddGroupsRequest $request AddGroupsRequest
     * @param string[]         $headers map
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return AddGroupsResponse AddGroupsResponse
     */
    public function addGroupsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientInfo)) {
            $query['ClientInfo'] = $request->clientInfo;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddGroups',
            'version'     => '2018-05-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/green/sface/person/groups/add',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return AddGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 添加分组
     *  *
     * @param AddGroupsRequest $request AddGroupsRequest
     *
     * @return AddGroupsResponse AddGroupsResponse
     */
    public function addGroups($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->addGroupsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 添加个体
     *  *
     * @param AddPersonRequest $request AddPersonRequest
     * @param string[]         $headers map
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return AddPersonResponse AddPersonResponse
     */
    public function addPersonWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientInfo)) {
            $query['ClientInfo'] = $request->clientInfo;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddPerson',
            'version'     => '2018-05-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/green/sface/person/add',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return AddPersonResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 添加个体
     *  *
     * @param AddPersonRequest $request AddPersonRequest
     *
     * @return AddPersonResponse AddPersonResponse
     */
    public function addPerson($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->addPersonWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 添加相似图
     *  *
     * @param AddSimilarityImageRequest $request AddSimilarityImageRequest
     * @param string[]                  $headers map
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return AddSimilarityImageResponse AddSimilarityImageResponse
     */
    public function addSimilarityImageWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientInfo)) {
            $query['ClientInfo'] = $request->clientInfo;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddSimilarityImage',
            'version'     => '2018-05-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/green/similarity/image/add',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return AddSimilarityImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 添加相似图
     *  *
     * @param AddSimilarityImageRequest $request AddSimilarityImageRequest
     *
     * @return AddSimilarityImageResponse AddSimilarityImageResponse
     */
    public function addSimilarityImage($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->addSimilarityImageWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 添加相似图库
     *  *
     * @param AddSimilarityLibraryRequest $request AddSimilarityLibraryRequest
     * @param string[]                    $headers map
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return AddSimilarityLibraryResponse AddSimilarityLibraryResponse
     */
    public function addSimilarityLibraryWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientInfo)) {
            $query['ClientInfo'] = $request->clientInfo;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddSimilarityLibrary',
            'version'     => '2018-05-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/green/similarity/library/add',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return AddSimilarityLibraryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 添加相似图库
     *  *
     * @param AddSimilarityLibraryRequest $request AddSimilarityLibraryRequest
     *
     * @return AddSimilarityLibraryResponse AddSimilarityLibraryResponse
     */
    public function addSimilarityLibrary($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->addSimilarityLibraryWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 添加视频Dna
     *  *
     * @param AddVideoDnaRequest $request AddVideoDnaRequest
     * @param string[]           $headers map
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return AddVideoDnaResponse AddVideoDnaResponse
     */
    public function addVideoDnaWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientInfo)) {
            $query['ClientInfo'] = $request->clientInfo;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddVideoDna',
            'version'     => '2018-05-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/green/video/dna/add',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return AddVideoDnaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 添加视频Dna
     *  *
     * @param AddVideoDnaRequest $request AddVideoDnaRequest
     *
     * @return AddVideoDnaResponse AddVideoDnaResponse
     */
    public function addVideoDna($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->addVideoDnaWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 添加视频Dna分组
     *  *
     * @param AddVideoDnaGroupRequest $request AddVideoDnaGroupRequest
     * @param string[]                $headers map
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return AddVideoDnaGroupResponse AddVideoDnaGroupResponse
     */
    public function addVideoDnaGroupWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientInfo)) {
            $query['ClientInfo'] = $request->clientInfo;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddVideoDnaGroup',
            'version'     => '2018-05-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/green/video/dna/group/add',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return AddVideoDnaGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 添加视频Dna分组
     *  *
     * @param AddVideoDnaGroupRequest $request AddVideoDnaGroupRequest
     *
     * @return AddVideoDnaGroupResponse AddVideoDnaGroupResponse
     */
    public function addVideoDnaGroup($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->addVideoDnaGroupWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 删除人脸
     *  *
     * @param DeleteFacesRequest $request DeleteFacesRequest
     * @param string[]           $headers map
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteFacesResponse DeleteFacesResponse
     */
    public function deleteFacesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientInfo)) {
            $query['ClientInfo'] = $request->clientInfo;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteFaces',
            'version'     => '2018-05-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/green/sface/face/delete',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteFacesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除人脸
     *  *
     * @param DeleteFacesRequest $request DeleteFacesRequest
     *
     * @return DeleteFacesResponse DeleteFacesResponse
     */
    public function deleteFaces($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteFacesWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 删除分组
     *  *
     * @param DeleteGroupsRequest $request DeleteGroupsRequest
     * @param string[]            $headers map
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteGroupsResponse DeleteGroupsResponse
     */
    public function deleteGroupsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientInfo)) {
            $query['ClientInfo'] = $request->clientInfo;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteGroups',
            'version'     => '2018-05-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/green/sface/person/groups/delete',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除分组
     *  *
     * @param DeleteGroupsRequest $request DeleteGroupsRequest
     *
     * @return DeleteGroupsResponse DeleteGroupsResponse
     */
    public function deleteGroups($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteGroupsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 删除个体
     *  *
     * @param DeletePersonRequest $request DeletePersonRequest
     * @param string[]            $headers map
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return DeletePersonResponse DeletePersonResponse
     */
    public function deletePersonWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientInfo)) {
            $query['ClientInfo'] = $request->clientInfo;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeletePerson',
            'version'     => '2018-05-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/green/sface/person/delete',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeletePersonResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除个体
     *  *
     * @param DeletePersonRequest $request DeletePersonRequest
     *
     * @return DeletePersonResponse DeletePersonResponse
     */
    public function deletePerson($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deletePersonWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 删除相似图
     *  *
     * @param DeleteSimilarityImageRequest $request DeleteSimilarityImageRequest
     * @param string[]                     $headers map
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteSimilarityImageResponse DeleteSimilarityImageResponse
     */
    public function deleteSimilarityImageWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientInfo)) {
            $query['ClientInfo'] = $request->clientInfo;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteSimilarityImage',
            'version'     => '2018-05-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/green/similarity/image/delete',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteSimilarityImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除相似图
     *  *
     * @param DeleteSimilarityImageRequest $request DeleteSimilarityImageRequest
     *
     * @return DeleteSimilarityImageResponse DeleteSimilarityImageResponse
     */
    public function deleteSimilarityImage($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteSimilarityImageWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 删除相似图库
     *  *
     * @param DeleteSimilarityLibraryRequest $request DeleteSimilarityLibraryRequest
     * @param string[]                       $headers map
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteSimilarityLibraryResponse DeleteSimilarityLibraryResponse
     */
    public function deleteSimilarityLibraryWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientInfo)) {
            $query['ClientInfo'] = $request->clientInfo;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteSimilarityLibrary',
            'version'     => '2018-05-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/green/similarity/library/delete',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteSimilarityLibraryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除相似图库
     *  *
     * @param DeleteSimilarityLibraryRequest $request DeleteSimilarityLibraryRequest
     *
     * @return DeleteSimilarityLibraryResponse DeleteSimilarityLibraryResponse
     */
    public function deleteSimilarityLibrary($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteSimilarityLibraryWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 删除视频Dna
     *  *
     * @param DeleteVideoDnaRequest $request DeleteVideoDnaRequest
     * @param string[]              $headers map
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteVideoDnaResponse DeleteVideoDnaResponse
     */
    public function deleteVideoDnaWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientInfo)) {
            $query['ClientInfo'] = $request->clientInfo;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteVideoDna',
            'version'     => '2018-05-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/green/video/dna/delete',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteVideoDnaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除视频Dna
     *  *
     * @param DeleteVideoDnaRequest $request DeleteVideoDnaRequest
     *
     * @return DeleteVideoDnaResponse DeleteVideoDnaResponse
     */
    public function deleteVideoDna($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteVideoDnaWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 删除视频Dna分组
     *  *
     * @param DeleteVideoDnaGroupRequest $request DeleteVideoDnaGroupRequest
     * @param string[]                   $headers map
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteVideoDnaGroupResponse DeleteVideoDnaGroupResponse
     */
    public function deleteVideoDnaGroupWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientInfo)) {
            $query['ClientInfo'] = $request->clientInfo;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteVideoDnaGroup',
            'version'     => '2018-05-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/green/video/dna/group/delete',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteVideoDnaGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除视频Dna分组
     *  *
     * @param DeleteVideoDnaGroupRequest $request DeleteVideoDnaGroupRequest
     *
     * @return DeleteVideoDnaGroupResponse DeleteVideoDnaGroupResponse
     */
    public function deleteVideoDnaGroup($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteVideoDnaGroupWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 人脸属性检测
     *  *
     * @param DetectFaceRequest $request DetectFaceRequest
     * @param string[]          $headers map
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return DetectFaceResponse DetectFaceResponse
     */
    public function detectFaceWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientInfo)) {
            $query['ClientInfo'] = $request->clientInfo;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DetectFace',
            'version'     => '2018-05-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/green/face/detect',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DetectFaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 人脸属性检测
     *  *
     * @param DetectFaceRequest $request DetectFaceRequest
     *
     * @return DetectFaceResponse DetectFaceResponse
     */
    public function detectFace($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->detectFaceWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 文件异步检测
     *  *
     * @param FileAsyncScanRequest $request FileAsyncScanRequest
     * @param string[]             $headers map
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return FileAsyncScanResponse FileAsyncScanResponse
     */
    public function fileAsyncScanWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientInfo)) {
            $query['ClientInfo'] = $request->clientInfo;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'FileAsyncScan',
            'version'     => '2018-05-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/green/file/asyncscan',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return FileAsyncScanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 文件异步检测
     *  *
     * @param FileAsyncScanRequest $request FileAsyncScanRequest
     *
     * @return FileAsyncScanResponse FileAsyncScanResponse
     */
    public function fileAsyncScan($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->fileAsyncScanWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 文件异步检测结果
     *  *
     * @param FileAsyncScanResultsRequest $request FileAsyncScanResultsRequest
     * @param string[]                    $headers map
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return FileAsyncScanResultsResponse FileAsyncScanResultsResponse
     */
    public function fileAsyncScanResultsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientInfo)) {
            $query['ClientInfo'] = $request->clientInfo;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'FileAsyncScanResults',
            'version'     => '2018-05-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/green/file/results',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return FileAsyncScanResultsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 文件异步检测结果
     *  *
     * @param FileAsyncScanResultsRequest $request FileAsyncScanResultsRequest
     *
     * @return FileAsyncScanResultsResponse FileAsyncScanResultsResponse
     */
    public function fileAsyncScanResults($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->fileAsyncScanResultsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 文件检测新版本
     *  *
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return FileAsyncScanV2Response FileAsyncScanV2Response
     */
    public function fileAsyncScanV2WithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'FileAsyncScanV2',
            'version'     => '2018-05-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/green/file/asyncscanv2',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return FileAsyncScanV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 文件检测新版本
     *  *
     * @return FileAsyncScanV2Response FileAsyncScanV2Response
     */
    public function fileAsyncScanV2()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->fileAsyncScanV2WithOptions($headers, $runtime);
    }

    /**
     * @summary 获取人脸列表
     *  *
     * @param GetFacesRequest $request GetFacesRequest
     * @param string[]        $headers map
     * @param RuntimeOptions  $runtime runtime options for this request RuntimeOptions
     *
     * @return GetFacesResponse GetFacesResponse
     */
    public function getFacesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientInfo)) {
            $query['ClientInfo'] = $request->clientInfo;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetFaces',
            'version'     => '2018-05-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/green/sface/faces',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetFacesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取人脸列表
     *  *
     * @param GetFacesRequest $request GetFacesRequest
     *
     * @return GetFacesResponse GetFacesResponse
     */
    public function getFaces($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getFacesWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取组列表
     *  *
     * @param GetGroupsRequest $request GetGroupsRequest
     * @param string[]         $headers map
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return GetGroupsResponse GetGroupsResponse
     */
    public function getGroupsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientInfo)) {
            $query['ClientInfo'] = $request->clientInfo;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetGroups',
            'version'     => '2018-05-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/green/sface/groups',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取组列表
     *  *
     * @param GetGroupsRequest $request GetGroupsRequest
     *
     * @return GetGroupsResponse GetGroupsResponse
     */
    public function getGroups($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getGroupsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取单个个体
     *  *
     * @param GetPersonRequest $request GetPersonRequest
     * @param string[]         $headers map
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return GetPersonResponse GetPersonResponse
     */
    public function getPersonWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientInfo)) {
            $query['ClientInfo'] = $request->clientInfo;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetPerson',
            'version'     => '2018-05-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/green/sface/person',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetPersonResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取单个个体
     *  *
     * @param GetPersonRequest $request GetPersonRequest
     *
     * @return GetPersonResponse GetPersonResponse
     */
    public function getPerson($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getPersonWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取个体列表
     *  *
     * @param GetPersonsRequest $request GetPersonsRequest
     * @param string[]          $headers map
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return GetPersonsResponse GetPersonsResponse
     */
    public function getPersonsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientInfo)) {
            $query['ClientInfo'] = $request->clientInfo;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetPersons',
            'version'     => '2018-05-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/green/sface/group/persons',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetPersonsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取个体列表
     *  *
     * @param GetPersonsRequest $request GetPersonsRequest
     *
     * @return GetPersonsResponse GetPersonsResponse
     */
    public function getPersons($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getPersonsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取相似图
     *  *
     * @param GetSimilarityImageRequest $request GetSimilarityImageRequest
     * @param string[]                  $headers map
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return GetSimilarityImageResponse GetSimilarityImageResponse
     */
    public function getSimilarityImageWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientInfo)) {
            $query['ClientInfo'] = $request->clientInfo;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetSimilarityImage',
            'version'     => '2018-05-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/green/similarity/image/get',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetSimilarityImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取相似图
     *  *
     * @param GetSimilarityImageRequest $request GetSimilarityImageRequest
     *
     * @return GetSimilarityImageResponse GetSimilarityImageResponse
     */
    public function getSimilarityImage($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getSimilarityImageWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取相似图库
     *  *
     * @param GetSimilarityLibraryRequest $request GetSimilarityLibraryRequest
     * @param string[]                    $headers map
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return GetSimilarityLibraryResponse GetSimilarityLibraryResponse
     */
    public function getSimilarityLibraryWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientInfo)) {
            $query['ClientInfo'] = $request->clientInfo;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetSimilarityLibrary',
            'version'     => '2018-05-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/green/similarity/library/get',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetSimilarityLibraryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取相似图库
     *  *
     * @param GetSimilarityLibraryRequest $request GetSimilarityLibraryRequest
     *
     * @return GetSimilarityLibraryResponse GetSimilarityLibraryResponse
     */
    public function getSimilarityLibrary($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getSimilarityLibraryWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 图片人工异步审核
     *  *
     * @param ImageAsyncManualScanRequest $request ImageAsyncManualScanRequest
     * @param string[]                    $headers map
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return ImageAsyncManualScanResponse ImageAsyncManualScanResponse
     */
    public function imageAsyncManualScanWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientInfo)) {
            $query['ClientInfo'] = $request->clientInfo;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ImageAsyncManualScan',
            'version'     => '2018-05-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/green/image/manual/asyncScan',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ImageAsyncManualScanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 图片人工异步审核
     *  *
     * @param ImageAsyncManualScanRequest $request ImageAsyncManualScanRequest
     *
     * @return ImageAsyncManualScanResponse ImageAsyncManualScanResponse
     */
    public function imageAsyncManualScan($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->imageAsyncManualScanWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 图片人工异步审核结果
     *  *
     * @param ImageAsyncManualScanResultsRequest $request ImageAsyncManualScanResultsRequest
     * @param string[]                           $headers map
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return ImageAsyncManualScanResultsResponse ImageAsyncManualScanResultsResponse
     */
    public function imageAsyncManualScanResultsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientInfo)) {
            $query['ClientInfo'] = $request->clientInfo;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ImageAsyncManualScanResults',
            'version'     => '2018-05-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/green/image/manual/scan/results',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ImageAsyncManualScanResultsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 图片人工异步审核结果
     *  *
     * @param ImageAsyncManualScanResultsRequest $request ImageAsyncManualScanResultsRequest
     *
     * @return ImageAsyncManualScanResultsResponse ImageAsyncManualScanResultsResponse
     */
    public function imageAsyncManualScanResults($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->imageAsyncManualScanResultsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 图片异步检测
     *  *
     * @param ImageAsyncScanRequest $request ImageAsyncScanRequest
     * @param string[]              $headers map
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return ImageAsyncScanResponse ImageAsyncScanResponse
     */
    public function imageAsyncScanWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientInfo)) {
            $query['ClientInfo'] = $request->clientInfo;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ImageAsyncScan',
            'version'     => '2018-05-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/green/image/asyncscan',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ImageAsyncScanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 图片异步检测
     *  *
     * @param ImageAsyncScanRequest $request ImageAsyncScanRequest
     *
     * @return ImageAsyncScanResponse ImageAsyncScanResponse
     */
    public function imageAsyncScan($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->imageAsyncScanWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 图片异步检测结果
     *  *
     * @param ImageAsyncScanResultsRequest $request ImageAsyncScanResultsRequest
     * @param string[]                     $headers map
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return ImageAsyncScanResultsResponse ImageAsyncScanResultsResponse
     */
    public function imageAsyncScanResultsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientInfo)) {
            $query['ClientInfo'] = $request->clientInfo;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ImageAsyncScanResults',
            'version'     => '2018-05-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/green/image/results',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ImageAsyncScanResultsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 图片异步检测结果
     *  *
     * @param ImageAsyncScanResultsRequest $request ImageAsyncScanResultsRequest
     *
     * @return ImageAsyncScanResultsResponse ImageAsyncScanResultsResponse
     */
    public function imageAsyncScanResults($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->imageAsyncScanResultsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 图片检测反馈
     *  *
     * @param ImageScanFeedbackRequest $request ImageScanFeedbackRequest
     * @param string[]                 $headers map
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ImageScanFeedbackResponse ImageScanFeedbackResponse
     */
    public function imageScanFeedbackWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientInfo)) {
            $query['ClientInfo'] = $request->clientInfo;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ImageScanFeedback',
            'version'     => '2018-05-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/green/image/feedback',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ImageScanFeedbackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 图片检测反馈
     *  *
     * @param ImageScanFeedbackRequest $request ImageScanFeedbackRequest
     *
     * @return ImageScanFeedbackResponse ImageScanFeedbackResponse
     */
    public function imageScanFeedback($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->imageScanFeedbackWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 图片同步检测
     *  *
     * @param ImageSyncScanRequest $request ImageSyncScanRequest
     * @param string[]             $headers map
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ImageSyncScanResponse ImageSyncScanResponse
     */
    public function imageSyncScanWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientInfo)) {
            $query['ClientInfo'] = $request->clientInfo;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ImageSyncScan',
            'version'     => '2018-05-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/green/image/scan',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ImageSyncScanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 图片同步检测
     *  *
     * @param ImageSyncScanRequest $request ImageSyncScanRequest
     *
     * @return ImageSyncScanResponse ImageSyncScanResponse
     */
    public function imageSyncScan($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->imageSyncScanWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取相似图
     *  *
     * @param ListSimilarityImagesRequest $request ListSimilarityImagesRequest
     * @param string[]                    $headers map
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return ListSimilarityImagesResponse ListSimilarityImagesResponse
     */
    public function listSimilarityImagesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientInfo)) {
            $query['ClientInfo'] = $request->clientInfo;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListSimilarityImages',
            'version'     => '2018-05-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/green/similarity/image/list',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListSimilarityImagesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取相似图
     *  *
     * @param ListSimilarityImagesRequest $request ListSimilarityImagesRequest
     *
     * @return ListSimilarityImagesResponse ListSimilarityImagesResponse
     */
    public function listSimilarityImages($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSimilarityImagesWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取相似图库
     *  *
     * @param ListSimilarityLibrariesRequest $request ListSimilarityLibrariesRequest
     * @param string[]                       $headers map
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ListSimilarityLibrariesResponse ListSimilarityLibrariesResponse
     */
    public function listSimilarityLibrariesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientInfo)) {
            $query['ClientInfo'] = $request->clientInfo;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListSimilarityLibraries',
            'version'     => '2018-05-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/green/similarity/library/list',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListSimilarityLibrariesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取相似图库
     *  *
     * @param ListSimilarityLibrariesRequest $request ListSimilarityLibrariesRequest
     *
     * @return ListSimilarityLibrariesResponse ListSimilarityLibrariesResponse
     */
    public function listSimilarityLibraries($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSimilarityLibrariesWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 直播流异步检测
     *  *
     * @param LiveStreamAsyncScanRequest $request LiveStreamAsyncScanRequest
     * @param string[]                   $headers map
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return LiveStreamAsyncScanResponse LiveStreamAsyncScanResponse
     */
    public function liveStreamAsyncScanWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientInfo)) {
            $query['ClientInfo'] = $request->clientInfo;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'LiveStreamAsyncScan',
            'version'     => '2018-05-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/green/livestream/asyncscan',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return LiveStreamAsyncScanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 直播流异步检测
     *  *
     * @param LiveStreamAsyncScanRequest $request LiveStreamAsyncScanRequest
     *
     * @return LiveStreamAsyncScanResponse LiveStreamAsyncScanResponse
     */
    public function liveStreamAsyncScan($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->liveStreamAsyncScanWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 直播流异步检测结果
     *  *
     * @param LiveStreamAsyncScanResultsRequest $request LiveStreamAsyncScanResultsRequest
     * @param string[]                          $headers map
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return LiveStreamAsyncScanResultsResponse LiveStreamAsyncScanResultsResponse
     */
    public function liveStreamAsyncScanResultsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientInfo)) {
            $query['ClientInfo'] = $request->clientInfo;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'LiveStreamAsyncScanResults',
            'version'     => '2018-05-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/green/livestream/results',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return LiveStreamAsyncScanResultsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 直播流异步检测结果
     *  *
     * @param LiveStreamAsyncScanResultsRequest $request LiveStreamAsyncScanResultsRequest
     *
     * @return LiveStreamAsyncScanResultsResponse LiveStreamAsyncScanResultsResponse
     */
    public function liveStreamAsyncScanResults($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->liveStreamAsyncScanResultsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 直播流取消检测
     *  *
     * @param LiveStreamCancelScanRequest $request LiveStreamCancelScanRequest
     * @param string[]                    $headers map
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return LiveStreamCancelScanResponse LiveStreamCancelScanResponse
     */
    public function liveStreamCancelScanWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientInfo)) {
            $query['ClientInfo'] = $request->clientInfo;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'LiveStreamCancelScan',
            'version'     => '2018-05-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/green/livestream/cancelscan',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return LiveStreamCancelScanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 直播流取消检测
     *  *
     * @param LiveStreamCancelScanRequest $request LiveStreamCancelScanRequest
     *
     * @return LiveStreamCancelScanResponse LiveStreamCancelScanResponse
     */
    public function liveStreamCancelScan($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->liveStreamCancelScanWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 设置个体
     *  *
     * @param SetPersonRequest $request SetPersonRequest
     * @param string[]         $headers map
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return SetPersonResponse SetPersonResponse
     */
    public function setPersonWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientInfo)) {
            $query['ClientInfo'] = $request->clientInfo;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetPerson',
            'version'     => '2018-05-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/green/sface/person/update',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return SetPersonResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 设置个体
     *  *
     * @param SetPersonRequest $request SetPersonRequest
     *
     * @return SetPersonResponse SetPersonResponse
     */
    public function setPerson($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->setPersonWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 文本异步人工审核
     *  *
     * @param TextAsyncManualScanRequest $request TextAsyncManualScanRequest
     * @param string[]                   $headers map
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return TextAsyncManualScanResponse TextAsyncManualScanResponse
     */
    public function textAsyncManualScanWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientInfo)) {
            $query['ClientInfo'] = $request->clientInfo;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'TextAsyncManualScan',
            'version'     => '2018-05-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/green/text/manual/asyncScan',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return TextAsyncManualScanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 文本异步人工审核
     *  *
     * @param TextAsyncManualScanRequest $request TextAsyncManualScanRequest
     *
     * @return TextAsyncManualScanResponse TextAsyncManualScanResponse
     */
    public function textAsyncManualScan($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->textAsyncManualScanWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 文本异步人工审核结果
     *  *
     * @param TextAsyncManualScanResultsRequest $request TextAsyncManualScanResultsRequest
     * @param string[]                          $headers map
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return TextAsyncManualScanResultsResponse TextAsyncManualScanResultsResponse
     */
    public function textAsyncManualScanResultsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientInfo)) {
            $query['ClientInfo'] = $request->clientInfo;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'TextAsyncManualScanResults',
            'version'     => '2018-05-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/green/text/manual/scan/results',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return TextAsyncManualScanResultsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 文本异步人工审核结果
     *  *
     * @param TextAsyncManualScanResultsRequest $request TextAsyncManualScanResultsRequest
     *
     * @return TextAsyncManualScanResultsResponse TextAsyncManualScanResultsResponse
     */
    public function textAsyncManualScanResults($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->textAsyncManualScanResultsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 文本结果反馈
     *  *
     * @param TextFeedbackRequest $request TextFeedbackRequest
     * @param string[]            $headers map
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return TextFeedbackResponse TextFeedbackResponse
     */
    public function textFeedbackWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientInfo)) {
            $query['ClientInfo'] = $request->clientInfo;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'TextFeedback',
            'version'     => '2018-05-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/green/text/feedback',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return TextFeedbackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 文本结果反馈
     *  *
     * @param TextFeedbackRequest $request TextFeedbackRequest
     *
     * @return TextFeedbackResponse TextFeedbackResponse
     */
    public function textFeedback($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->textFeedbackWithOptions($request, $headers, $runtime);
    }

    /**
     * @param TextScanRequest $request TextScanRequest
     * @param string[]        $headers map
     * @param RuntimeOptions  $runtime runtime options for this request RuntimeOptions
     *
     * @return TextScanResponse TextScanResponse
     */
    public function textScanWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientInfo)) {
            $query['ClientInfo'] = $request->clientInfo;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'TextScan',
            'version'     => '2018-05-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/green/text/scan',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return TextScanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param TextScanRequest $request TextScanRequest
     *
     * @return TextScanResponse TextScanResponse
     */
    public function textScan($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->textScanWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取上传证书
     *  *
     * @param UploadCredentialsRequest $request UploadCredentialsRequest
     * @param string[]                 $headers map
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return UploadCredentialsResponse UploadCredentialsResponse
     */
    public function uploadCredentialsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientInfo)) {
            $query['ClientInfo'] = $request->clientInfo;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UploadCredentials',
            'version'     => '2018-05-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/green/credentials/uploadcredentials',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UploadCredentialsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取上传证书
     *  *
     * @param UploadCredentialsRequest $request UploadCredentialsRequest
     *
     * @return UploadCredentialsResponse UploadCredentialsResponse
     */
    public function uploadCredentials($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->uploadCredentialsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 视频异步人工审核
     *  *
     * @param VideoAsyncManualScanRequest $request VideoAsyncManualScanRequest
     * @param string[]                    $headers map
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return VideoAsyncManualScanResponse VideoAsyncManualScanResponse
     */
    public function videoAsyncManualScanWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientInfo)) {
            $query['ClientInfo'] = $request->clientInfo;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'VideoAsyncManualScan',
            'version'     => '2018-05-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/green/video/manual/asyncScan',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return VideoAsyncManualScanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 视频异步人工审核
     *  *
     * @param VideoAsyncManualScanRequest $request VideoAsyncManualScanRequest
     *
     * @return VideoAsyncManualScanResponse VideoAsyncManualScanResponse
     */
    public function videoAsyncManualScan($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->videoAsyncManualScanWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 视频异步人工审核结果
     *  *
     * @param VideoAsyncManualScanResultsRequest $request VideoAsyncManualScanResultsRequest
     * @param string[]                           $headers map
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return VideoAsyncManualScanResultsResponse VideoAsyncManualScanResultsResponse
     */
    public function videoAsyncManualScanResultsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientInfo)) {
            $query['ClientInfo'] = $request->clientInfo;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'VideoAsyncManualScanResults',
            'version'     => '2018-05-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/green/video/manual/scan/results',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return VideoAsyncManualScanResultsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 视频异步人工审核结果
     *  *
     * @param VideoAsyncManualScanResultsRequest $request VideoAsyncManualScanResultsRequest
     *
     * @return VideoAsyncManualScanResultsResponse VideoAsyncManualScanResultsResponse
     */
    public function videoAsyncManualScanResults($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->videoAsyncManualScanResultsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 视频异步检测
     *  *
     * @param VideoAsyncScanRequest $request VideoAsyncScanRequest
     * @param string[]              $headers map
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return VideoAsyncScanResponse VideoAsyncScanResponse
     */
    public function videoAsyncScanWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientInfo)) {
            $query['ClientInfo'] = $request->clientInfo;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'VideoAsyncScan',
            'version'     => '2018-05-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/green/video/asyncscan',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return VideoAsyncScanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 视频异步检测
     *  *
     * @param VideoAsyncScanRequest $request VideoAsyncScanRequest
     *
     * @return VideoAsyncScanResponse VideoAsyncScanResponse
     */
    public function videoAsyncScan($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->videoAsyncScanWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 视频异步检测结果
     *  *
     * @param VideoAsyncScanResultsRequest $request VideoAsyncScanResultsRequest
     * @param string[]                     $headers map
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return VideoAsyncScanResultsResponse VideoAsyncScanResultsResponse
     */
    public function videoAsyncScanResultsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientInfo)) {
            $query['ClientInfo'] = $request->clientInfo;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'VideoAsyncScanResults',
            'version'     => '2018-05-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/green/video/results',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return VideoAsyncScanResultsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 视频异步检测结果
     *  *
     * @param VideoAsyncScanResultsRequest $request VideoAsyncScanResultsRequest
     *
     * @return VideoAsyncScanResultsResponse VideoAsyncScanResultsResponse
     */
    public function videoAsyncScanResults($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->videoAsyncScanResultsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 视频取消检测
     *  *
     * @param VideoCancelScanRequest $request VideoCancelScanRequest
     * @param string[]               $headers map
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return VideoCancelScanResponse VideoCancelScanResponse
     */
    public function videoCancelScanWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientInfo)) {
            $query['ClientInfo'] = $request->clientInfo;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'VideoCancelScan',
            'version'     => '2018-05-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/green/video/cancelscan',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return VideoCancelScanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 视频取消检测
     *  *
     * @param VideoCancelScanRequest $request VideoCancelScanRequest
     *
     * @return VideoCancelScanResponse VideoCancelScanResponse
     */
    public function videoCancelScan($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->videoCancelScanWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 视频结果反馈
     *  *
     * @param VideoFeedbackRequest $request VideoFeedbackRequest
     * @param string[]             $headers map
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return VideoFeedbackResponse VideoFeedbackResponse
     */
    public function videoFeedbackWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientInfo)) {
            $query['ClientInfo'] = $request->clientInfo;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'VideoFeedback',
            'version'     => '2018-05-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/green/video/feedback',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return VideoFeedbackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 视频结果反馈
     *  *
     * @param VideoFeedbackRequest $request VideoFeedbackRequest
     *
     * @return VideoFeedbackResponse VideoFeedbackResponse
     */
    public function videoFeedback($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->videoFeedbackWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 视频同步检测
     *  *
     * @param VideoSyncScanRequest $request VideoSyncScanRequest
     * @param string[]             $headers map
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return VideoSyncScanResponse VideoSyncScanResponse
     */
    public function videoSyncScanWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientInfo)) {
            $query['ClientInfo'] = $request->clientInfo;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'VideoSyncScan',
            'version'     => '2018-05-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/green/video/syncscan',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return VideoSyncScanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 视频同步检测
     *  *
     * @param VideoSyncScanRequest $request VideoSyncScanRequest
     *
     * @return VideoSyncScanResponse VideoSyncScanResponse
     */
    public function videoSyncScan($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->videoSyncScanWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 视频点播异步检测
     *  *
     * @param VodAsyncScanRequest $request VodAsyncScanRequest
     * @param string[]            $headers map
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return VodAsyncScanResponse VodAsyncScanResponse
     */
    public function vodAsyncScanWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientInfo)) {
            $query['ClientInfo'] = $request->clientInfo;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'VodAsyncScan',
            'version'     => '2018-05-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/green/vod/asyncscan',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return VodAsyncScanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 视频点播异步检测
     *  *
     * @param VodAsyncScanRequest $request VodAsyncScanRequest
     *
     * @return VodAsyncScanResponse VodAsyncScanResponse
     */
    public function vodAsyncScan($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->vodAsyncScanWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 视频点播异步检测结果
     *  *
     * @param VodAsyncScanResultsRequest $request VodAsyncScanResultsRequest
     * @param string[]                   $headers map
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return VodAsyncScanResultsResponse VodAsyncScanResultsResponse
     */
    public function vodAsyncScanResultsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientInfo)) {
            $query['ClientInfo'] = $request->clientInfo;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'VodAsyncScanResults',
            'version'     => '2018-05-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/green/vod/results',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return VodAsyncScanResultsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 视频点播异步检测结果
     *  *
     * @param VodAsyncScanResultsRequest $request VodAsyncScanResultsRequest
     *
     * @return VodAsyncScanResultsResponse VodAsyncScanResultsResponse
     */
    public function vodAsyncScanResults($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->vodAsyncScanResultsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 语音异步人工审核
     *  *
     * @param VoiceAsyncManualScanRequest $request VoiceAsyncManualScanRequest
     * @param string[]                    $headers map
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return VoiceAsyncManualScanResponse VoiceAsyncManualScanResponse
     */
    public function voiceAsyncManualScanWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientInfo)) {
            $query['ClientInfo'] = $request->clientInfo;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'VoiceAsyncManualScan',
            'version'     => '2018-05-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/green/voice/manual/asyncScan',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return VoiceAsyncManualScanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 语音异步人工审核
     *  *
     * @param VoiceAsyncManualScanRequest $request VoiceAsyncManualScanRequest
     *
     * @return VoiceAsyncManualScanResponse VoiceAsyncManualScanResponse
     */
    public function voiceAsyncManualScan($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->voiceAsyncManualScanWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 语音异步人工审核结果
     *  *
     * @param VoiceAsyncManualScanResultsRequest $request VoiceAsyncManualScanResultsRequest
     * @param string[]                           $headers map
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return VoiceAsyncManualScanResultsResponse VoiceAsyncManualScanResultsResponse
     */
    public function voiceAsyncManualScanResultsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientInfo)) {
            $query['ClientInfo'] = $request->clientInfo;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'VoiceAsyncManualScanResults',
            'version'     => '2018-05-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/green/voice/manual/scan/results',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return VoiceAsyncManualScanResultsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 语音异步人工审核结果
     *  *
     * @param VoiceAsyncManualScanResultsRequest $request VoiceAsyncManualScanResultsRequest
     *
     * @return VoiceAsyncManualScanResultsResponse VoiceAsyncManualScanResultsResponse
     */
    public function voiceAsyncManualScanResults($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->voiceAsyncManualScanResultsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 语音异步检测
     *  *
     * @param VoiceAsyncScanRequest $request VoiceAsyncScanRequest
     * @param string[]              $headers map
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return VoiceAsyncScanResponse VoiceAsyncScanResponse
     */
    public function voiceAsyncScanWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientInfo)) {
            $query['ClientInfo'] = $request->clientInfo;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'VoiceAsyncScan',
            'version'     => '2018-05-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/green/voice/asyncscan',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return VoiceAsyncScanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 语音异步检测
     *  *
     * @param VoiceAsyncScanRequest $request VoiceAsyncScanRequest
     *
     * @return VoiceAsyncScanResponse VoiceAsyncScanResponse
     */
    public function voiceAsyncScan($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->voiceAsyncScanWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 语音异步检测结果
     *  *
     * @param VoiceAsyncScanResultsRequest $request VoiceAsyncScanResultsRequest
     * @param string[]                     $headers map
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return VoiceAsyncScanResultsResponse VoiceAsyncScanResultsResponse
     */
    public function voiceAsyncScanResultsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientInfo)) {
            $query['ClientInfo'] = $request->clientInfo;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'VoiceAsyncScanResults',
            'version'     => '2018-05-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/green/voice/results',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return VoiceAsyncScanResultsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 语音异步检测结果
     *  *
     * @param VoiceAsyncScanResultsRequest $request VoiceAsyncScanResultsRequest
     *
     * @return VoiceAsyncScanResultsResponse VoiceAsyncScanResultsResponse
     */
    public function voiceAsyncScanResults($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->voiceAsyncScanResultsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 语音取消检测
     *  *
     * @param VoiceCancelScanRequest $request VoiceCancelScanRequest
     * @param string[]               $headers map
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return VoiceCancelScanResponse VoiceCancelScanResponse
     */
    public function voiceCancelScanWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientInfo)) {
            $query['ClientInfo'] = $request->clientInfo;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'VoiceCancelScan',
            'version'     => '2018-05-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/green/voice/cancelscan',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return VoiceCancelScanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 语音取消检测
     *  *
     * @param VoiceCancelScanRequest $request VoiceCancelScanRequest
     *
     * @return VoiceCancelScanResponse VoiceCancelScanResponse
     */
    public function voiceCancelScan($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->voiceCancelScanWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 声纹比对
     *  *
     * @param VoiceIdentityCheckRequest $request VoiceIdentityCheckRequest
     * @param string[]                  $headers map
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return VoiceIdentityCheckResponse VoiceIdentityCheckResponse
     */
    public function voiceIdentityCheckWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientInfo)) {
            $query['ClientInfo'] = $request->clientInfo;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'VoiceIdentityCheck',
            'version'     => '2018-05-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/green/voice/auth/check',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return VoiceIdentityCheckResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 声纹比对
     *  *
     * @param VoiceIdentityCheckRequest $request VoiceIdentityCheckRequest
     *
     * @return VoiceIdentityCheckResponse VoiceIdentityCheckResponse
     */
    public function voiceIdentityCheck($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->voiceIdentityCheckWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 声纹注册
     *  *
     * @param VoiceIdentityRegisterRequest $request VoiceIdentityRegisterRequest
     * @param string[]                     $headers map
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return VoiceIdentityRegisterResponse VoiceIdentityRegisterResponse
     */
    public function voiceIdentityRegisterWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientInfo)) {
            $query['ClientInfo'] = $request->clientInfo;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'VoiceIdentityRegister',
            'version'     => '2018-05-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/green/voice/auth/register',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return VoiceIdentityRegisterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 声纹注册
     *  *
     * @param VoiceIdentityRegisterRequest $request VoiceIdentityRegisterRequest
     *
     * @return VoiceIdentityRegisterResponse VoiceIdentityRegisterResponse
     */
    public function voiceIdentityRegister($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->voiceIdentityRegisterWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 声纹开始比对
     *  *
     * @param VoiceIdentityStartCheckRequest $request VoiceIdentityStartCheckRequest
     * @param string[]                       $headers map
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return VoiceIdentityStartCheckResponse VoiceIdentityStartCheckResponse
     */
    public function voiceIdentityStartCheckWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientInfo)) {
            $query['ClientInfo'] = $request->clientInfo;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'VoiceIdentityStartCheck',
            'version'     => '2018-05-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/green/voice/auth/start/check',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return VoiceIdentityStartCheckResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 声纹开始比对
     *  *
     * @param VoiceIdentityStartCheckRequest $request VoiceIdentityStartCheckRequest
     *
     * @return VoiceIdentityStartCheckResponse VoiceIdentityStartCheckResponse
     */
    public function voiceIdentityStartCheck($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->voiceIdentityStartCheckWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 声纹开始注册
     *  *
     * @param VoiceIdentityStartRegisterRequest $request VoiceIdentityStartRegisterRequest
     * @param string[]                          $headers map
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return VoiceIdentityStartRegisterResponse VoiceIdentityStartRegisterResponse
     */
    public function voiceIdentityStartRegisterWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientInfo)) {
            $query['ClientInfo'] = $request->clientInfo;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'VoiceIdentityStartRegister',
            'version'     => '2018-05-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/green/voice/auth/start/register',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return VoiceIdentityStartRegisterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 声纹开始注册
     *  *
     * @param VoiceIdentityStartRegisterRequest $request VoiceIdentityStartRegisterRequest
     *
     * @return VoiceIdentityStartRegisterResponse VoiceIdentityStartRegisterResponse
     */
    public function voiceIdentityStartRegister($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->voiceIdentityStartRegisterWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 声纹注销
     *  *
     * @param VoiceIdentityUnregisterRequest $request VoiceIdentityUnregisterRequest
     * @param string[]                       $headers map
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return VoiceIdentityUnregisterResponse VoiceIdentityUnregisterResponse
     */
    public function voiceIdentityUnregisterWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientInfo)) {
            $query['ClientInfo'] = $request->clientInfo;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'VoiceIdentityUnregister',
            'version'     => '2018-05-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/green/voice/auth/unregister',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return VoiceIdentityUnregisterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 声纹注销
     *  *
     * @param VoiceIdentityUnregisterRequest $request VoiceIdentityUnregisterRequest
     *
     * @return VoiceIdentityUnregisterResponse VoiceIdentityUnregisterResponse
     */
    public function voiceIdentityUnregister($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->voiceIdentityUnregisterWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 语音同步检测
     *  *
     * @param VoiceSyncScanRequest $request VoiceSyncScanRequest
     * @param string[]             $headers map
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return VoiceSyncScanResponse VoiceSyncScanResponse
     */
    public function voiceSyncScanWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientInfo)) {
            $query['ClientInfo'] = $request->clientInfo;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'VoiceSyncScan',
            'version'     => '2018-05-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/green/voice/syncscan',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return VoiceSyncScanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 语音同步检测
     *  *
     * @param VoiceSyncScanRequest $request VoiceSyncScanRequest
     *
     * @return VoiceSyncScanResponse VoiceSyncScanResponse
     */
    public function voiceSyncScan($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->voiceSyncScanWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 站点异步检测
     *  *
     * @param WebpageAsyncScanRequest $request WebpageAsyncScanRequest
     * @param string[]                $headers map
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return WebpageAsyncScanResponse WebpageAsyncScanResponse
     */
    public function webpageAsyncScanWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientInfo)) {
            $query['ClientInfo'] = $request->clientInfo;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'WebpageAsyncScan',
            'version'     => '2018-05-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/green/webpage/asyncscan',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return WebpageAsyncScanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 站点异步检测
     *  *
     * @param WebpageAsyncScanRequest $request WebpageAsyncScanRequest
     *
     * @return WebpageAsyncScanResponse WebpageAsyncScanResponse
     */
    public function webpageAsyncScan($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->webpageAsyncScanWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 站点异步检测结果
     *  *
     * @param WebpageAsyncScanResultsRequest $request WebpageAsyncScanResultsRequest
     * @param string[]                       $headers map
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return WebpageAsyncScanResultsResponse WebpageAsyncScanResultsResponse
     */
    public function webpageAsyncScanResultsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientInfo)) {
            $query['ClientInfo'] = $request->clientInfo;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'WebpageAsyncScanResults',
            'version'     => '2018-05-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/green/webpage/results',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return WebpageAsyncScanResultsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 站点异步检测结果
     *  *
     * @param WebpageAsyncScanResultsRequest $request WebpageAsyncScanResultsRequest
     *
     * @return WebpageAsyncScanResultsResponse WebpageAsyncScanResultsResponse
     */
    public function webpageAsyncScanResults($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->webpageAsyncScanResultsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 站点同步检测
     *  *
     * @param WebpageSyncScanRequest $request WebpageSyncScanRequest
     * @param string[]               $headers map
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return WebpageSyncScanResponse WebpageSyncScanResponse
     */
    public function webpageSyncScanWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientInfo)) {
            $query['ClientInfo'] = $request->clientInfo;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'WebpageSyncScan',
            'version'     => '2018-05-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/green/webpage/scan',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return WebpageSyncScanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 站点同步检测
     *  *
     * @param WebpageSyncScanRequest $request WebpageSyncScanRequest
     *
     * @return WebpageSyncScanResponse WebpageSyncScanResponse
     */
    public function webpageSyncScan($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->webpageSyncScanWithOptions($request, $headers, $runtime);
    }
}
