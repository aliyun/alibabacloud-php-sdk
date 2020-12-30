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
use AlibabaCloud\SDK\Green\V20180509\Models\GetAddVideoDnaResultsRequest;
use AlibabaCloud\SDK\Green\V20180509\Models\GetAddVideoDnaResultsResponse;
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
use AlibabaCloud\SDK\Green\V20180509\Models\SearchPersonRequest;
use AlibabaCloud\SDK\Green\V20180509\Models\SearchPersonResponse;
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
     * @param AddFacesRequest $request
     *
     * @return AddFacesResponse
     */
    public function addFaces($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->addFacesWithOptions($request, $headers, $runtime);
    }

    /**
     * @param AddFacesRequest $request
     * @param string[]        $headers
     * @param RuntimeOptions  $runtime
     *
     * @return AddFacesResponse
     */
    public function addFacesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            @$query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->clientInfo)) {
            @$query['ClientInfo'] = $request->clientInfo;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return AddFacesResponse::fromMap($this->doROARequest('AddFaces', '2018-05-09', 'HTTPS', 'POST', 'AK', '/green/sface/face/add', 'none', $req, $runtime));
    }

    /**
     * @param AddGroupsRequest $request
     *
     * @return AddGroupsResponse
     */
    public function addGroups($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->addGroupsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param AddGroupsRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return AddGroupsResponse
     */
    public function addGroupsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            @$query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->clientInfo)) {
            @$query['ClientInfo'] = $request->clientInfo;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return AddGroupsResponse::fromMap($this->doROARequest('AddGroups', '2018-05-09', 'HTTPS', 'POST', 'AK', '/green/sface/person/groups/add', 'none', $req, $runtime));
    }

    /**
     * @param AddPersonRequest $request
     *
     * @return AddPersonResponse
     */
    public function addPerson($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->addPersonWithOptions($request, $headers, $runtime);
    }

    /**
     * @param AddPersonRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return AddPersonResponse
     */
    public function addPersonWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            @$query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->clientInfo)) {
            @$query['ClientInfo'] = $request->clientInfo;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return AddPersonResponse::fromMap($this->doROARequest('AddPerson', '2018-05-09', 'HTTPS', 'POST', 'AK', '/green/sface/person/add', 'none', $req, $runtime));
    }

    /**
     * @param AddSimilarityImageRequest $request
     *
     * @return AddSimilarityImageResponse
     */
    public function addSimilarityImage($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->addSimilarityImageWithOptions($request, $headers, $runtime);
    }

    /**
     * @param AddSimilarityImageRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return AddSimilarityImageResponse
     */
    public function addSimilarityImageWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientInfo)) {
            @$query['ClientInfo'] = $request->clientInfo;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return AddSimilarityImageResponse::fromMap($this->doROARequest('AddSimilarityImage', '2018-05-09', 'HTTPS', 'POST', 'AK', '/green/similarity/image/add', 'none', $req, $runtime));
    }

    /**
     * @param AddSimilarityLibraryRequest $request
     *
     * @return AddSimilarityLibraryResponse
     */
    public function addSimilarityLibrary($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->addSimilarityLibraryWithOptions($request, $headers, $runtime);
    }

    /**
     * @param AddSimilarityLibraryRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return AddSimilarityLibraryResponse
     */
    public function addSimilarityLibraryWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientInfo)) {
            @$query['ClientInfo'] = $request->clientInfo;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return AddSimilarityLibraryResponse::fromMap($this->doROARequest('AddSimilarityLibrary', '2018-05-09', 'HTTPS', 'POST', 'AK', '/green/similarity/library/add', 'none', $req, $runtime));
    }

    /**
     * @param AddVideoDnaRequest $request
     *
     * @return AddVideoDnaResponse
     */
    public function addVideoDna($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->addVideoDnaWithOptions($request, $headers, $runtime);
    }

    /**
     * @param AddVideoDnaRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return AddVideoDnaResponse
     */
    public function addVideoDnaWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientInfo)) {
            @$query['ClientInfo'] = $request->clientInfo;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return AddVideoDnaResponse::fromMap($this->doROARequest('AddVideoDna', '2018-05-09', 'HTTPS', 'POST', 'AK', '/green/video/dna/add', 'none', $req, $runtime));
    }

    /**
     * @param AddVideoDnaGroupRequest $request
     *
     * @return AddVideoDnaGroupResponse
     */
    public function addVideoDnaGroup($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->addVideoDnaGroupWithOptions($request, $headers, $runtime);
    }

    /**
     * @param AddVideoDnaGroupRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return AddVideoDnaGroupResponse
     */
    public function addVideoDnaGroupWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientInfo)) {
            @$query['ClientInfo'] = $request->clientInfo;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return AddVideoDnaGroupResponse::fromMap($this->doROARequest('AddVideoDnaGroup', '2018-05-09', 'HTTPS', 'POST', 'AK', '/green/video/dna/group/add', 'none', $req, $runtime));
    }

    /**
     * @param DeleteFacesRequest $request
     *
     * @return DeleteFacesResponse
     */
    public function deleteFaces($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteFacesWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DeleteFacesRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteFacesResponse
     */
    public function deleteFacesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            @$query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->clientInfo)) {
            @$query['ClientInfo'] = $request->clientInfo;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DeleteFacesResponse::fromMap($this->doROARequest('DeleteFaces', '2018-05-09', 'HTTPS', 'POST', 'AK', '/green/sface/face/delete', 'none', $req, $runtime));
    }

    /**
     * @param DeleteGroupsRequest $request
     *
     * @return DeleteGroupsResponse
     */
    public function deleteGroups($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteGroupsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DeleteGroupsRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteGroupsResponse
     */
    public function deleteGroupsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            @$query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->clientInfo)) {
            @$query['ClientInfo'] = $request->clientInfo;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DeleteGroupsResponse::fromMap($this->doROARequest('DeleteGroups', '2018-05-09', 'HTTPS', 'POST', 'AK', '/green/sface/person/groups/delete', 'none', $req, $runtime));
    }

    /**
     * @param DeletePersonRequest $request
     *
     * @return DeletePersonResponse
     */
    public function deletePerson($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deletePersonWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DeletePersonRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return DeletePersonResponse
     */
    public function deletePersonWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            @$query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->clientInfo)) {
            @$query['ClientInfo'] = $request->clientInfo;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DeletePersonResponse::fromMap($this->doROARequest('DeletePerson', '2018-05-09', 'HTTPS', 'POST', 'AK', '/green/sface/person/delete', 'none', $req, $runtime));
    }

    /**
     * @param DeleteSimilarityImageRequest $request
     *
     * @return DeleteSimilarityImageResponse
     */
    public function deleteSimilarityImage($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteSimilarityImageWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DeleteSimilarityImageRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteSimilarityImageResponse
     */
    public function deleteSimilarityImageWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientInfo)) {
            @$query['ClientInfo'] = $request->clientInfo;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DeleteSimilarityImageResponse::fromMap($this->doROARequest('DeleteSimilarityImage', '2018-05-09', 'HTTPS', 'POST', 'AK', '/green/similarity/image/delete', 'none', $req, $runtime));
    }

    /**
     * @param DeleteSimilarityLibraryRequest $request
     *
     * @return DeleteSimilarityLibraryResponse
     */
    public function deleteSimilarityLibrary($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteSimilarityLibraryWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DeleteSimilarityLibraryRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteSimilarityLibraryResponse
     */
    public function deleteSimilarityLibraryWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientInfo)) {
            @$query['ClientInfo'] = $request->clientInfo;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DeleteSimilarityLibraryResponse::fromMap($this->doROARequest('DeleteSimilarityLibrary', '2018-05-09', 'HTTPS', 'POST', 'AK', '/green/similarity/library/delete', 'none', $req, $runtime));
    }

    /**
     * @param DeleteVideoDnaRequest $request
     *
     * @return DeleteVideoDnaResponse
     */
    public function deleteVideoDna($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteVideoDnaWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DeleteVideoDnaRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteVideoDnaResponse
     */
    public function deleteVideoDnaWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientInfo)) {
            @$query['ClientInfo'] = $request->clientInfo;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DeleteVideoDnaResponse::fromMap($this->doROARequest('DeleteVideoDna', '2018-05-09', 'HTTPS', 'POST', 'AK', '/green/video/dna/delete', 'none', $req, $runtime));
    }

    /**
     * @param DeleteVideoDnaGroupRequest $request
     *
     * @return DeleteVideoDnaGroupResponse
     */
    public function deleteVideoDnaGroup($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteVideoDnaGroupWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DeleteVideoDnaGroupRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteVideoDnaGroupResponse
     */
    public function deleteVideoDnaGroupWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientInfo)) {
            @$query['ClientInfo'] = $request->clientInfo;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DeleteVideoDnaGroupResponse::fromMap($this->doROARequest('DeleteVideoDnaGroup', '2018-05-09', 'HTTPS', 'POST', 'AK', '/green/video/dna/group/delete', 'none', $req, $runtime));
    }

    /**
     * @param DetectFaceRequest $request
     *
     * @return DetectFaceResponse
     */
    public function detectFace($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->detectFaceWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DetectFaceRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return DetectFaceResponse
     */
    public function detectFaceWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientInfo)) {
            @$query['ClientInfo'] = $request->clientInfo;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DetectFaceResponse::fromMap($this->doROARequest('DetectFace', '2018-05-09', 'HTTPS', 'POST', 'AK', '/green/face/detect', 'none', $req, $runtime));
    }

    /**
     * @param FileAsyncScanRequest $request
     *
     * @return FileAsyncScanResponse
     */
    public function fileAsyncScan($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->fileAsyncScanWithOptions($request, $headers, $runtime);
    }

    /**
     * @param FileAsyncScanRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return FileAsyncScanResponse
     */
    public function fileAsyncScanWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientInfo)) {
            @$query['ClientInfo'] = $request->clientInfo;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return FileAsyncScanResponse::fromMap($this->doROARequest('FileAsyncScan', '2018-05-09', 'HTTPS', 'POST', 'AK', '/green/file/asyncscan', 'none', $req, $runtime));
    }

    /**
     * @param FileAsyncScanResultsRequest $request
     *
     * @return FileAsyncScanResultsResponse
     */
    public function fileAsyncScanResults($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->fileAsyncScanResultsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param FileAsyncScanResultsRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return FileAsyncScanResultsResponse
     */
    public function fileAsyncScanResultsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientInfo)) {
            @$query['ClientInfo'] = $request->clientInfo;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return FileAsyncScanResultsResponse::fromMap($this->doROARequest('FileAsyncScanResults', '2018-05-09', 'HTTPS', 'POST', 'AK', '/green/file/results', 'none', $req, $runtime));
    }

    /**
     * @param GetAddVideoDnaResultsRequest $request
     *
     * @return GetAddVideoDnaResultsResponse
     */
    public function getAddVideoDnaResults($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getAddVideoDnaResultsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetAddVideoDnaResultsRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return GetAddVideoDnaResultsResponse
     */
    public function getAddVideoDnaResultsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientInfo)) {
            @$query['ClientInfo'] = $request->clientInfo;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return GetAddVideoDnaResultsResponse::fromMap($this->doROARequest('GetAddVideoDnaResults', '2018-05-09', 'HTTPS', 'POST', 'AK', '/green/video/dna/add/results', 'none', $req, $runtime));
    }

    /**
     * @param GetFacesRequest $request
     *
     * @return GetFacesResponse
     */
    public function getFaces($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getFacesWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetFacesRequest $request
     * @param string[]        $headers
     * @param RuntimeOptions  $runtime
     *
     * @return GetFacesResponse
     */
    public function getFacesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            @$query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->clientInfo)) {
            @$query['ClientInfo'] = $request->clientInfo;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return GetFacesResponse::fromMap($this->doROARequest('GetFaces', '2018-05-09', 'HTTPS', 'POST', 'AK', '/green/sface/faces', 'json', $req, $runtime));
    }

    /**
     * @param GetGroupsRequest $request
     *
     * @return GetGroupsResponse
     */
    public function getGroups($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getGroupsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetGroupsRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return GetGroupsResponse
     */
    public function getGroupsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            @$query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->clientInfo)) {
            @$query['ClientInfo'] = $request->clientInfo;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return GetGroupsResponse::fromMap($this->doROARequest('GetGroups', '2018-05-09', 'HTTPS', 'POST', 'AK', '/green/sface/groups', 'none', $req, $runtime));
    }

    /**
     * @param GetPersonRequest $request
     *
     * @return GetPersonResponse
     */
    public function getPerson($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getPersonWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetPersonRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return GetPersonResponse
     */
    public function getPersonWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            @$query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->clientInfo)) {
            @$query['ClientInfo'] = $request->clientInfo;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return GetPersonResponse::fromMap($this->doROARequest('GetPerson', '2018-05-09', 'HTTPS', 'POST', 'AK', '/green/sface/person', 'none', $req, $runtime));
    }

    /**
     * @param GetPersonsRequest $request
     *
     * @return GetPersonsResponse
     */
    public function getPersons($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getPersonsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetPersonsRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return GetPersonsResponse
     */
    public function getPersonsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            @$query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->clientInfo)) {
            @$query['ClientInfo'] = $request->clientInfo;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return GetPersonsResponse::fromMap($this->doROARequest('GetPersons', '2018-05-09', 'HTTPS', 'POST', 'AK', '/green/sface/group/persons', 'none', $req, $runtime));
    }

    /**
     * @param GetSimilarityImageRequest $request
     *
     * @return GetSimilarityImageResponse
     */
    public function getSimilarityImage($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getSimilarityImageWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetSimilarityImageRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return GetSimilarityImageResponse
     */
    public function getSimilarityImageWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientInfo)) {
            @$query['ClientInfo'] = $request->clientInfo;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return GetSimilarityImageResponse::fromMap($this->doROARequest('GetSimilarityImage', '2018-05-09', 'HTTPS', 'POST', 'AK', '/green/similarity/image/get', 'none', $req, $runtime));
    }

    /**
     * @param GetSimilarityLibraryRequest $request
     *
     * @return GetSimilarityLibraryResponse
     */
    public function getSimilarityLibrary($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getSimilarityLibraryWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetSimilarityLibraryRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return GetSimilarityLibraryResponse
     */
    public function getSimilarityLibraryWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientInfo)) {
            @$query['ClientInfo'] = $request->clientInfo;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return GetSimilarityLibraryResponse::fromMap($this->doROARequest('GetSimilarityLibrary', '2018-05-09', 'HTTPS', 'POST', 'AK', '/green/similarity/library/get', 'none', $req, $runtime));
    }

    /**
     * @param ImageAsyncManualScanRequest $request
     *
     * @return ImageAsyncManualScanResponse
     */
    public function imageAsyncManualScan($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->imageAsyncManualScanWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ImageAsyncManualScanRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return ImageAsyncManualScanResponse
     */
    public function imageAsyncManualScanWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientInfo)) {
            @$query['ClientInfo'] = $request->clientInfo;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ImageAsyncManualScanResponse::fromMap($this->doROARequest('ImageAsyncManualScan', '2018-05-09', 'HTTPS', 'POST', 'AK', '/green/image/manual/asyncScan', 'none', $req, $runtime));
    }

    /**
     * @param ImageAsyncManualScanResultsRequest $request
     *
     * @return ImageAsyncManualScanResultsResponse
     */
    public function imageAsyncManualScanResults($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->imageAsyncManualScanResultsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ImageAsyncManualScanResultsRequest $request
     * @param string[]                           $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return ImageAsyncManualScanResultsResponse
     */
    public function imageAsyncManualScanResultsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientInfo)) {
            @$query['ClientInfo'] = $request->clientInfo;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ImageAsyncManualScanResultsResponse::fromMap($this->doROARequest('ImageAsyncManualScanResults', '2018-05-09', 'HTTPS', 'POST', 'AK', '/green/image/manual/scan/results', 'none', $req, $runtime));
    }

    /**
     * @param ImageAsyncScanRequest $request
     *
     * @return ImageAsyncScanResponse
     */
    public function imageAsyncScan($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->imageAsyncScanWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ImageAsyncScanRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return ImageAsyncScanResponse
     */
    public function imageAsyncScanWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientInfo)) {
            @$query['ClientInfo'] = $request->clientInfo;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ImageAsyncScanResponse::fromMap($this->doROARequest('ImageAsyncScan', '2018-05-09', 'HTTPS', 'POST', 'AK', '/green/image/asyncscan', 'none', $req, $runtime));
    }

    /**
     * @param ImageAsyncScanResultsRequest $request
     *
     * @return ImageAsyncScanResultsResponse
     */
    public function imageAsyncScanResults($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->imageAsyncScanResultsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ImageAsyncScanResultsRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return ImageAsyncScanResultsResponse
     */
    public function imageAsyncScanResultsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientInfo)) {
            @$query['ClientInfo'] = $request->clientInfo;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ImageAsyncScanResultsResponse::fromMap($this->doROARequest('ImageAsyncScanResults', '2018-05-09', 'HTTPS', 'POST', 'AK', '/green/image/results', 'none', $req, $runtime));
    }

    /**
     * @param ImageScanFeedbackRequest $request
     *
     * @return ImageScanFeedbackResponse
     */
    public function imageScanFeedback($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->imageScanFeedbackWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ImageScanFeedbackRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ImageScanFeedbackResponse
     */
    public function imageScanFeedbackWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientInfo)) {
            @$query['ClientInfo'] = $request->clientInfo;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ImageScanFeedbackResponse::fromMap($this->doROARequest('ImageScanFeedback', '2018-05-09', 'HTTPS', 'POST', 'AK', '/green/image/feedback', 'none', $req, $runtime));
    }

    /**
     * @param ImageSyncScanRequest $request
     *
     * @return ImageSyncScanResponse
     */
    public function imageSyncScan($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->imageSyncScanWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ImageSyncScanRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ImageSyncScanResponse
     */
    public function imageSyncScanWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientInfo)) {
            @$query['ClientInfo'] = $request->clientInfo;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ImageSyncScanResponse::fromMap($this->doROARequest('ImageSyncScan', '2018-05-09', 'HTTPS', 'POST', 'AK', '/green/image/scan', 'none', $req, $runtime));
    }

    /**
     * @param ListSimilarityImagesRequest $request
     *
     * @return ListSimilarityImagesResponse
     */
    public function listSimilarityImages($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSimilarityImagesWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListSimilarityImagesRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return ListSimilarityImagesResponse
     */
    public function listSimilarityImagesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientInfo)) {
            @$query['ClientInfo'] = $request->clientInfo;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ListSimilarityImagesResponse::fromMap($this->doROARequest('ListSimilarityImages', '2018-05-09', 'HTTPS', 'POST', 'AK', '/green/similarity/image/list', 'none', $req, $runtime));
    }

    /**
     * @param ListSimilarityLibrariesRequest $request
     *
     * @return ListSimilarityLibrariesResponse
     */
    public function listSimilarityLibraries($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSimilarityLibrariesWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListSimilarityLibrariesRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return ListSimilarityLibrariesResponse
     */
    public function listSimilarityLibrariesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientInfo)) {
            @$query['ClientInfo'] = $request->clientInfo;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ListSimilarityLibrariesResponse::fromMap($this->doROARequest('ListSimilarityLibraries', '2018-05-09', 'HTTPS', 'POST', 'AK', '/green/similarity/library/list', 'none', $req, $runtime));
    }

    /**
     * @param LiveStreamAsyncScanRequest $request
     *
     * @return LiveStreamAsyncScanResponse
     */
    public function liveStreamAsyncScan($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->liveStreamAsyncScanWithOptions($request, $headers, $runtime);
    }

    /**
     * @param LiveStreamAsyncScanRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return LiveStreamAsyncScanResponse
     */
    public function liveStreamAsyncScanWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientInfo)) {
            @$query['ClientInfo'] = $request->clientInfo;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return LiveStreamAsyncScanResponse::fromMap($this->doROARequest('LiveStreamAsyncScan', '2018-05-09', 'HTTPS', 'POST', 'AK', '/green/livestream/asyncscan', 'none', $req, $runtime));
    }

    /**
     * @param LiveStreamAsyncScanResultsRequest $request
     *
     * @return LiveStreamAsyncScanResultsResponse
     */
    public function liveStreamAsyncScanResults($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->liveStreamAsyncScanResultsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param LiveStreamAsyncScanResultsRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return LiveStreamAsyncScanResultsResponse
     */
    public function liveStreamAsyncScanResultsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientInfo)) {
            @$query['ClientInfo'] = $request->clientInfo;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return LiveStreamAsyncScanResultsResponse::fromMap($this->doROARequest('LiveStreamAsyncScanResults', '2018-05-09', 'HTTPS', 'POST', 'AK', '/green/livestream/results', 'none', $req, $runtime));
    }

    /**
     * @param LiveStreamCancelScanRequest $request
     *
     * @return LiveStreamCancelScanResponse
     */
    public function liveStreamCancelScan($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->liveStreamCancelScanWithOptions($request, $headers, $runtime);
    }

    /**
     * @param LiveStreamCancelScanRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return LiveStreamCancelScanResponse
     */
    public function liveStreamCancelScanWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientInfo)) {
            @$query['ClientInfo'] = $request->clientInfo;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return LiveStreamCancelScanResponse::fromMap($this->doROARequest('LiveStreamCancelScan', '2018-05-09', 'HTTPS', 'POST', 'AK', '/green/livestream/cancelscan', 'none', $req, $runtime));
    }

    /**
     * @param SearchPersonRequest $request
     *
     * @return SearchPersonResponse
     */
    public function searchPerson($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->searchPersonWithOptions($request, $headers, $runtime);
    }

    /**
     * @param SearchPersonRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return SearchPersonResponse
     */
    public function searchPersonWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            @$query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->clientInfo)) {
            @$query['ClientInfo'] = $request->clientInfo;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return SearchPersonResponse::fromMap($this->doROARequest('SearchPerson', '2018-05-09', 'HTTPS', 'POST', 'AK', '/green/sface/search', 'none', $req, $runtime));
    }

    /**
     * @param SetPersonRequest $request
     *
     * @return SetPersonResponse
     */
    public function setPerson($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->setPersonWithOptions($request, $headers, $runtime);
    }

    /**
     * @param SetPersonRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return SetPersonResponse
     */
    public function setPersonWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            @$query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->clientInfo)) {
            @$query['ClientInfo'] = $request->clientInfo;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return SetPersonResponse::fromMap($this->doROARequest('SetPerson', '2018-05-09', 'HTTPS', 'POST', 'AK', '/green/sface/person/update', 'none', $req, $runtime));
    }

    /**
     * @param TextAsyncManualScanRequest $request
     *
     * @return TextAsyncManualScanResponse
     */
    public function textAsyncManualScan($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->textAsyncManualScanWithOptions($request, $headers, $runtime);
    }

    /**
     * @param TextAsyncManualScanRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return TextAsyncManualScanResponse
     */
    public function textAsyncManualScanWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientInfo)) {
            @$query['ClientInfo'] = $request->clientInfo;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return TextAsyncManualScanResponse::fromMap($this->doROARequest('TextAsyncManualScan', '2018-05-09', 'HTTPS', 'POST', 'AK', '/green/text/manual/asyncScan', 'none', $req, $runtime));
    }

    /**
     * @param TextAsyncManualScanResultsRequest $request
     *
     * @return TextAsyncManualScanResultsResponse
     */
    public function textAsyncManualScanResults($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->textAsyncManualScanResultsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param TextAsyncManualScanResultsRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return TextAsyncManualScanResultsResponse
     */
    public function textAsyncManualScanResultsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientInfo)) {
            @$query['ClientInfo'] = $request->clientInfo;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return TextAsyncManualScanResultsResponse::fromMap($this->doROARequest('TextAsyncManualScanResults', '2018-05-09', 'HTTPS', 'POST', 'AK', '/green/text/manual/scan/results', 'none', $req, $runtime));
    }

    /**
     * @param TextFeedbackRequest $request
     *
     * @return TextFeedbackResponse
     */
    public function textFeedback($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->textFeedbackWithOptions($request, $headers, $runtime);
    }

    /**
     * @param TextFeedbackRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return TextFeedbackResponse
     */
    public function textFeedbackWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientInfo)) {
            @$query['ClientInfo'] = $request->clientInfo;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return TextFeedbackResponse::fromMap($this->doROARequest('TextFeedback', '2018-05-09', 'HTTPS', 'POST', 'AK', '/green/text/feedback', 'none', $req, $runtime));
    }

    /**
     * @param TextScanRequest $request
     *
     * @return TextScanResponse
     */
    public function textScan($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->textScanWithOptions($request, $headers, $runtime);
    }

    /**
     * @param TextScanRequest $request
     * @param string[]        $headers
     * @param RuntimeOptions  $runtime
     *
     * @return TextScanResponse
     */
    public function textScanWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientInfo)) {
            @$query['ClientInfo'] = $request->clientInfo;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return TextScanResponse::fromMap($this->doROARequest('TextScan', '2018-05-09', 'HTTPS', 'POST', 'AK', '/green/text/scan', 'none', $req, $runtime));
    }

    /**
     * @param UploadCredentialsRequest $request
     *
     * @return UploadCredentialsResponse
     */
    public function uploadCredentials($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->uploadCredentialsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param UploadCredentialsRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return UploadCredentialsResponse
     */
    public function uploadCredentialsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            @$query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->clientInfo)) {
            @$query['ClientInfo'] = $request->clientInfo;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return UploadCredentialsResponse::fromMap($this->doROARequest('UploadCredentials', '2018-05-09', 'HTTPS', 'POST', 'AK', '/green/credentials/uploadcredentials', 'none', $req, $runtime));
    }

    /**
     * @param VideoAsyncManualScanRequest $request
     *
     * @return VideoAsyncManualScanResponse
     */
    public function videoAsyncManualScan($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->videoAsyncManualScanWithOptions($request, $headers, $runtime);
    }

    /**
     * @param VideoAsyncManualScanRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return VideoAsyncManualScanResponse
     */
    public function videoAsyncManualScanWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientInfo)) {
            @$query['ClientInfo'] = $request->clientInfo;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return VideoAsyncManualScanResponse::fromMap($this->doROARequest('VideoAsyncManualScan', '2018-05-09', 'HTTPS', 'POST', 'AK', '/green/video/manual/asyncScan', 'none', $req, $runtime));
    }

    /**
     * @param VideoAsyncManualScanResultsRequest $request
     *
     * @return VideoAsyncManualScanResultsResponse
     */
    public function videoAsyncManualScanResults($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->videoAsyncManualScanResultsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param VideoAsyncManualScanResultsRequest $request
     * @param string[]                           $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return VideoAsyncManualScanResultsResponse
     */
    public function videoAsyncManualScanResultsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientInfo)) {
            @$query['ClientInfo'] = $request->clientInfo;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return VideoAsyncManualScanResultsResponse::fromMap($this->doROARequest('VideoAsyncManualScanResults', '2018-05-09', 'HTTPS', 'POST', 'AK', '/green/video/manual/scan/results', 'none', $req, $runtime));
    }

    /**
     * @param VideoAsyncScanRequest $request
     *
     * @return VideoAsyncScanResponse
     */
    public function videoAsyncScan($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->videoAsyncScanWithOptions($request, $headers, $runtime);
    }

    /**
     * @param VideoAsyncScanRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return VideoAsyncScanResponse
     */
    public function videoAsyncScanWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientInfo)) {
            @$query['ClientInfo'] = $request->clientInfo;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return VideoAsyncScanResponse::fromMap($this->doROARequest('VideoAsyncScan', '2018-05-09', 'HTTPS', 'POST', 'AK', '/green/video/asyncscan', 'none', $req, $runtime));
    }

    /**
     * @param VideoAsyncScanResultsRequest $request
     *
     * @return VideoAsyncScanResultsResponse
     */
    public function videoAsyncScanResults($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->videoAsyncScanResultsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param VideoAsyncScanResultsRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return VideoAsyncScanResultsResponse
     */
    public function videoAsyncScanResultsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientInfo)) {
            @$query['ClientInfo'] = $request->clientInfo;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return VideoAsyncScanResultsResponse::fromMap($this->doROARequest('VideoAsyncScanResults', '2018-05-09', 'HTTPS', 'POST', 'AK', '/green/video/results', 'none', $req, $runtime));
    }

    /**
     * @param VideoCancelScanRequest $request
     *
     * @return VideoCancelScanResponse
     */
    public function videoCancelScan($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->videoCancelScanWithOptions($request, $headers, $runtime);
    }

    /**
     * @param VideoCancelScanRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return VideoCancelScanResponse
     */
    public function videoCancelScanWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientInfo)) {
            @$query['ClientInfo'] = $request->clientInfo;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return VideoCancelScanResponse::fromMap($this->doROARequest('VideoCancelScan', '2018-05-09', 'HTTPS', 'POST', 'AK', '/green/video/cancelscan', 'none', $req, $runtime));
    }

    /**
     * @param VideoFeedbackRequest $request
     *
     * @return VideoFeedbackResponse
     */
    public function videoFeedback($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->videoFeedbackWithOptions($request, $headers, $runtime);
    }

    /**
     * @param VideoFeedbackRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return VideoFeedbackResponse
     */
    public function videoFeedbackWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientInfo)) {
            @$query['ClientInfo'] = $request->clientInfo;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return VideoFeedbackResponse::fromMap($this->doROARequest('VideoFeedback', '2018-05-09', 'HTTPS', 'POST', 'AK', '/green/video/feedback', 'none', $req, $runtime));
    }

    /**
     * @param VideoSyncScanRequest $request
     *
     * @return VideoSyncScanResponse
     */
    public function videoSyncScan($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->videoSyncScanWithOptions($request, $headers, $runtime);
    }

    /**
     * @param VideoSyncScanRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return VideoSyncScanResponse
     */
    public function videoSyncScanWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientInfo)) {
            @$query['ClientInfo'] = $request->clientInfo;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return VideoSyncScanResponse::fromMap($this->doROARequest('VideoSyncScan', '2018-05-09', 'HTTPS', 'POST', 'AK', '/green/video/syncscan', 'none', $req, $runtime));
    }

    /**
     * @param VodAsyncScanRequest $request
     *
     * @return VodAsyncScanResponse
     */
    public function vodAsyncScan($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->vodAsyncScanWithOptions($request, $headers, $runtime);
    }

    /**
     * @param VodAsyncScanRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return VodAsyncScanResponse
     */
    public function vodAsyncScanWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientInfo)) {
            @$query['ClientInfo'] = $request->clientInfo;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return VodAsyncScanResponse::fromMap($this->doROARequest('VodAsyncScan', '2018-05-09', 'HTTPS', 'POST', 'AK', '/green/vod/asyncscan', 'none', $req, $runtime));
    }

    /**
     * @param VodAsyncScanResultsRequest $request
     *
     * @return VodAsyncScanResultsResponse
     */
    public function vodAsyncScanResults($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->vodAsyncScanResultsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param VodAsyncScanResultsRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return VodAsyncScanResultsResponse
     */
    public function vodAsyncScanResultsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientInfo)) {
            @$query['ClientInfo'] = $request->clientInfo;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return VodAsyncScanResultsResponse::fromMap($this->doROARequest('VodAsyncScanResults', '2018-05-09', 'HTTPS', 'POST', 'AK', '/green/vod/results', 'none', $req, $runtime));
    }

    /**
     * @param VoiceAsyncManualScanRequest $request
     *
     * @return VoiceAsyncManualScanResponse
     */
    public function voiceAsyncManualScan($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->voiceAsyncManualScanWithOptions($request, $headers, $runtime);
    }

    /**
     * @param VoiceAsyncManualScanRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return VoiceAsyncManualScanResponse
     */
    public function voiceAsyncManualScanWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientInfo)) {
            @$query['ClientInfo'] = $request->clientInfo;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return VoiceAsyncManualScanResponse::fromMap($this->doROARequest('VoiceAsyncManualScan', '2018-05-09', 'HTTPS', 'POST', 'AK', '/green/voice/manual/asyncScan', 'none', $req, $runtime));
    }

    /**
     * @param VoiceAsyncManualScanResultsRequest $request
     *
     * @return VoiceAsyncManualScanResultsResponse
     */
    public function voiceAsyncManualScanResults($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->voiceAsyncManualScanResultsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param VoiceAsyncManualScanResultsRequest $request
     * @param string[]                           $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return VoiceAsyncManualScanResultsResponse
     */
    public function voiceAsyncManualScanResultsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientInfo)) {
            @$query['ClientInfo'] = $request->clientInfo;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return VoiceAsyncManualScanResultsResponse::fromMap($this->doROARequest('VoiceAsyncManualScanResults', '2018-05-09', 'HTTPS', 'POST', 'AK', '/green/voice/manual/scan/results', 'none', $req, $runtime));
    }

    /**
     * @param VoiceAsyncScanRequest $request
     *
     * @return VoiceAsyncScanResponse
     */
    public function voiceAsyncScan($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->voiceAsyncScanWithOptions($request, $headers, $runtime);
    }

    /**
     * @param VoiceAsyncScanRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return VoiceAsyncScanResponse
     */
    public function voiceAsyncScanWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientInfo)) {
            @$query['ClientInfo'] = $request->clientInfo;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return VoiceAsyncScanResponse::fromMap($this->doROARequest('VoiceAsyncScan', '2018-05-09', 'HTTPS', 'POST', 'AK', '/green/voice/asyncscan', 'none', $req, $runtime));
    }

    /**
     * @param VoiceAsyncScanResultsRequest $request
     *
     * @return VoiceAsyncScanResultsResponse
     */
    public function voiceAsyncScanResults($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->voiceAsyncScanResultsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param VoiceAsyncScanResultsRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return VoiceAsyncScanResultsResponse
     */
    public function voiceAsyncScanResultsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientInfo)) {
            @$query['ClientInfo'] = $request->clientInfo;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return VoiceAsyncScanResultsResponse::fromMap($this->doROARequest('VoiceAsyncScanResults', '2018-05-09', 'HTTPS', 'POST', 'AK', '/green/voice/results', 'none', $req, $runtime));
    }

    /**
     * @param VoiceCancelScanRequest $request
     *
     * @return VoiceCancelScanResponse
     */
    public function voiceCancelScan($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->voiceCancelScanWithOptions($request, $headers, $runtime);
    }

    /**
     * @param VoiceCancelScanRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return VoiceCancelScanResponse
     */
    public function voiceCancelScanWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientInfo)) {
            @$query['ClientInfo'] = $request->clientInfo;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return VoiceCancelScanResponse::fromMap($this->doROARequest('VoiceCancelScan', '2018-05-09', 'HTTPS', 'POST', 'AK', '/green/voice/cancelscan', 'none', $req, $runtime));
    }

    /**
     * @param VoiceIdentityCheckRequest $request
     *
     * @return VoiceIdentityCheckResponse
     */
    public function voiceIdentityCheck($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->voiceIdentityCheckWithOptions($request, $headers, $runtime);
    }

    /**
     * @param VoiceIdentityCheckRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return VoiceIdentityCheckResponse
     */
    public function voiceIdentityCheckWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            @$query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->clientInfo)) {
            @$query['ClientInfo'] = $request->clientInfo;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return VoiceIdentityCheckResponse::fromMap($this->doROARequest('VoiceIdentityCheck', '2018-05-09', 'HTTPS', 'POST', 'AK', '/green/voice/auth/check', 'none', $req, $runtime));
    }

    /**
     * @param VoiceIdentityRegisterRequest $request
     *
     * @return VoiceIdentityRegisterResponse
     */
    public function voiceIdentityRegister($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->voiceIdentityRegisterWithOptions($request, $headers, $runtime);
    }

    /**
     * @param VoiceIdentityRegisterRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return VoiceIdentityRegisterResponse
     */
    public function voiceIdentityRegisterWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            @$query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->clientInfo)) {
            @$query['ClientInfo'] = $request->clientInfo;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return VoiceIdentityRegisterResponse::fromMap($this->doROARequest('VoiceIdentityRegister', '2018-05-09', 'HTTPS', 'POST', 'AK', '/green/voice/auth/register', 'none', $req, $runtime));
    }

    /**
     * @param VoiceIdentityStartCheckRequest $request
     *
     * @return VoiceIdentityStartCheckResponse
     */
    public function voiceIdentityStartCheck($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->voiceIdentityStartCheckWithOptions($request, $headers, $runtime);
    }

    /**
     * @param VoiceIdentityStartCheckRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return VoiceIdentityStartCheckResponse
     */
    public function voiceIdentityStartCheckWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            @$query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->clientInfo)) {
            @$query['ClientInfo'] = $request->clientInfo;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return VoiceIdentityStartCheckResponse::fromMap($this->doROARequest('VoiceIdentityStartCheck', '2018-05-09', 'HTTPS', 'POST', 'AK', '/green/voice/auth/start/check', 'none', $req, $runtime));
    }

    /**
     * @param VoiceIdentityStartRegisterRequest $request
     *
     * @return VoiceIdentityStartRegisterResponse
     */
    public function voiceIdentityStartRegister($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->voiceIdentityStartRegisterWithOptions($request, $headers, $runtime);
    }

    /**
     * @param VoiceIdentityStartRegisterRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return VoiceIdentityStartRegisterResponse
     */
    public function voiceIdentityStartRegisterWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            @$query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->clientInfo)) {
            @$query['ClientInfo'] = $request->clientInfo;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return VoiceIdentityStartRegisterResponse::fromMap($this->doROARequest('VoiceIdentityStartRegister', '2018-05-09', 'HTTPS', 'POST', 'AK', '/green/voice/auth/start/register', 'none', $req, $runtime));
    }

    /**
     * @param VoiceIdentityUnregisterRequest $request
     *
     * @return VoiceIdentityUnregisterResponse
     */
    public function voiceIdentityUnregister($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->voiceIdentityUnregisterWithOptions($request, $headers, $runtime);
    }

    /**
     * @param VoiceIdentityUnregisterRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return VoiceIdentityUnregisterResponse
     */
    public function voiceIdentityUnregisterWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            @$query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->clientInfo)) {
            @$query['ClientInfo'] = $request->clientInfo;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return VoiceIdentityUnregisterResponse::fromMap($this->doROARequest('VoiceIdentityUnregister', '2018-05-09', 'HTTPS', 'POST', 'AK', '/green/voice/auth/unregister', 'none', $req, $runtime));
    }

    /**
     * @param VoiceSyncScanRequest $request
     *
     * @return VoiceSyncScanResponse
     */
    public function voiceSyncScan($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->voiceSyncScanWithOptions($request, $headers, $runtime);
    }

    /**
     * @param VoiceSyncScanRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return VoiceSyncScanResponse
     */
    public function voiceSyncScanWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            @$query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->clientInfo)) {
            @$query['ClientInfo'] = $request->clientInfo;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return VoiceSyncScanResponse::fromMap($this->doROARequest('VoiceSyncScan', '2018-05-09', 'HTTPS', 'POST', 'AK', '/green/voice/syncscan', 'none', $req, $runtime));
    }

    /**
     * @param WebpageAsyncScanRequest $request
     *
     * @return WebpageAsyncScanResponse
     */
    public function webpageAsyncScan($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->webpageAsyncScanWithOptions($request, $headers, $runtime);
    }

    /**
     * @param WebpageAsyncScanRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return WebpageAsyncScanResponse
     */
    public function webpageAsyncScanWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientInfo)) {
            @$query['ClientInfo'] = $request->clientInfo;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return WebpageAsyncScanResponse::fromMap($this->doROARequest('WebpageAsyncScan', '2018-05-09', 'HTTPS', 'POST', 'AK', '/green/webpage/asyncscan', 'none', $req, $runtime));
    }

    /**
     * @param WebpageAsyncScanResultsRequest $request
     *
     * @return WebpageAsyncScanResultsResponse
     */
    public function webpageAsyncScanResults($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->webpageAsyncScanResultsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param WebpageAsyncScanResultsRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return WebpageAsyncScanResultsResponse
     */
    public function webpageAsyncScanResultsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientInfo)) {
            @$query['ClientInfo'] = $request->clientInfo;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return WebpageAsyncScanResultsResponse::fromMap($this->doROARequest('WebpageAsyncScanResults', '2018-05-09', 'HTTPS', 'POST', 'AK', '/green/webpage/results', 'none', $req, $runtime));
    }

    /**
     * @param WebpageSyncScanRequest $request
     *
     * @return WebpageSyncScanResponse
     */
    public function webpageSyncScan($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->webpageSyncScanWithOptions($request, $headers, $runtime);
    }

    /**
     * @param WebpageSyncScanRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return WebpageSyncScanResponse
     */
    public function webpageSyncScanWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientInfo)) {
            @$query['ClientInfo'] = $request->clientInfo;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return WebpageSyncScanResponse::fromMap($this->doROARequest('WebpageSyncScan', '2018-05-09', 'HTTPS', 'POST', 'AK', '/green/webpage/scan', 'none', $req, $runtime));
    }
}
