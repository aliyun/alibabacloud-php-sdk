<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudPhoto\V20170711;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\ActivatePhotosRequest;
use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\ActivatePhotosResponse;
use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\AddAlbumPhotosRequest;
use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\AddAlbumPhotosResponse;
use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\CreateAlbumRequest;
use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\CreateAlbumResponse;
use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\CreatePhotoRequest;
use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\CreatePhotoResponse;
use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\CreatePhotoStoreRequest;
use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\CreatePhotoStoreResponse;
use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\CreateTransactionRequest;
use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\CreateTransactionResponse;
use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\DeleteAlbumsRequest;
use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\DeleteAlbumsResponse;
use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\DeleteEventRequest;
use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\DeleteEventResponse;
use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\DeleteFacesRequest;
use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\DeleteFacesResponse;
use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\DeletePhotosRequest;
use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\DeletePhotosResponse;
use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\DeletePhotoStoreRequest;
use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\DeletePhotoStoreResponse;
use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\EditPhotosRequest;
use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\EditPhotosResponse;
use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\EditPhotoStoreRequest;
use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\EditPhotoStoreResponse;
use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\FetchAlbumTagPhotosRequest;
use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\FetchAlbumTagPhotosResponse;
use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\FetchLibrariesRequest;
use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\FetchLibrariesResponse;
use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\FetchMomentPhotosRequest;
use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\FetchMomentPhotosResponse;
use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\FetchPhotosRequest;
use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\FetchPhotosResponse;
use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\GetAlbumsByNamesRequest;
use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\GetAlbumsByNamesResponse;
use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\GetDownloadUrlRequest;
use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\GetDownloadUrlResponse;
use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\GetDownloadUrlsRequest;
use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\GetDownloadUrlsResponse;
use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\GetFramedPhotoUrlsRequest;
use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\GetFramedPhotoUrlsResponse;
use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\GetLibraryRequest;
use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\GetLibraryResponse;
use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\GetPhotosByMd5sRequest;
use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\GetPhotosByMd5sResponse;
use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\GetPhotosRequest;
use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\GetPhotosResponse;
use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\GetPhotoStoreRequest;
use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\GetPhotoStoreResponse;
use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\GetPrivateAccessUrlsRequest;
use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\GetPrivateAccessUrlsResponse;
use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\GetPublicAccessUrlsRequest;
use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\GetPublicAccessUrlsResponse;
use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\GetQuotaRequest;
use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\GetQuotaResponse;
use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\GetSimilarPhotosRequest;
use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\GetSimilarPhotosResponse;
use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\GetThumbnailRequest;
use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\GetThumbnailResponse;
use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\GetThumbnailsRequest;
use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\GetThumbnailsResponse;
use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\GetVideoCoverRequest;
use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\GetVideoCoverResponse;
use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\InactivatePhotosRequest;
use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\InactivatePhotosResponse;
use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\LikePhotoRequest;
use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\LikePhotoResponse;
use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\ListAlbumPhotosRequest;
use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\ListAlbumPhotosResponse;
use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\ListAlbumsRequest;
use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\ListAlbumsResponse;
use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\ListFacePhotosRequest;
use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\ListFacePhotosResponse;
use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\ListFacesRequest;
use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\ListFacesResponse;
use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\ListMomentPhotosRequest;
use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\ListMomentPhotosResponse;
use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\ListMomentsRequest;
use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\ListMomentsResponse;
use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\ListPhotoFacesRequest;
use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\ListPhotoFacesResponse;
use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\ListPhotosRequest;
use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\ListPhotosResponse;
use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\ListPhotoStoresResponse;
use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\ListPhotoTagsRequest;
use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\ListPhotoTagsResponse;
use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\ListRegisteredTagsRequest;
use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\ListRegisteredTagsResponse;
use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\ListTagPhotosRequest;
use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\ListTagPhotosResponse;
use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\ListTagsRequest;
use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\ListTagsResponse;
use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\ListTimeLinePhotosRequest;
use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\ListTimeLinePhotosResponse;
use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\ListTimeLinesRequest;
use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\ListTimeLinesResponse;
use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\MergeFacesRequest;
use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\MergeFacesResponse;
use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\MoveAlbumPhotosRequest;
use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\MoveAlbumPhotosResponse;
use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\MoveFacePhotosRequest;
use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\MoveFacePhotosResponse;
use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\ReactivatePhotosRequest;
use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\ReactivatePhotosResponse;
use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\RegisterPhotoRequest;
use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\RegisterPhotoResponse;
use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\RegisterTagRequest;
use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\RegisterTagResponse;
use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\RemoveAlbumPhotosRequest;
use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\RemoveAlbumPhotosResponse;
use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\RemoveFacePhotosRequest;
use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\RemoveFacePhotosResponse;
use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\RenameAlbumRequest;
use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\RenameAlbumResponse;
use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\RenameFaceRequest;
use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\RenameFaceResponse;
use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\SearchPhotosRequest;
use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\SearchPhotosResponse;
use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\SetAlbumCoverRequest;
use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\SetAlbumCoverResponse;
use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\SetFaceCoverRequest;
use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\SetFaceCoverResponse;
use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\SetMeRequest;
use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\SetMeResponse;
use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\SetQuotaRequest;
use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\SetQuotaResponse;
use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\TagPhotoRequest;
use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\TagPhotoResponse;
use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\ToggleFeaturesRequest;
use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\ToggleFeaturesResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

class CloudPhoto extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('cloudphoto', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param ActivatePhotosRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ActivatePhotosResponse
     */
    public function activatePhotosWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ActivatePhotosResponse::fromMap($this->doRPCRequest('ActivatePhotos', '2017-07-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ActivatePhotosRequest $request
     *
     * @return ActivatePhotosResponse
     */
    public function activatePhotos($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->activatePhotosWithOptions($request, $runtime);
    }

    /**
     * @param AddAlbumPhotosRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return AddAlbumPhotosResponse
     */
    public function addAlbumPhotosWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddAlbumPhotosResponse::fromMap($this->doRPCRequest('AddAlbumPhotos', '2017-07-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AddAlbumPhotosRequest $request
     *
     * @return AddAlbumPhotosResponse
     */
    public function addAlbumPhotos($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addAlbumPhotosWithOptions($request, $runtime);
    }

    /**
     * @param CreateAlbumRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CreateAlbumResponse
     */
    public function createAlbumWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateAlbumResponse::fromMap($this->doRPCRequest('CreateAlbum', '2017-07-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateAlbumRequest $request
     *
     * @return CreateAlbumResponse
     */
    public function createAlbum($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAlbumWithOptions($request, $runtime);
    }

    /**
     * @param CreatePhotoRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CreatePhotoResponse
     */
    public function createPhotoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreatePhotoResponse::fromMap($this->doRPCRequest('CreatePhoto', '2017-07-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreatePhotoRequest $request
     *
     * @return CreatePhotoResponse
     */
    public function createPhoto($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPhotoWithOptions($request, $runtime);
    }

    /**
     * @param CreatePhotoStoreRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreatePhotoStoreResponse
     */
    public function createPhotoStoreWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreatePhotoStoreResponse::fromMap($this->doRPCRequest('CreatePhotoStore', '2017-07-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreatePhotoStoreRequest $request
     *
     * @return CreatePhotoStoreResponse
     */
    public function createPhotoStore($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPhotoStoreWithOptions($request, $runtime);
    }

    /**
     * @param CreateTransactionRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateTransactionResponse
     */
    public function createTransactionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateTransactionResponse::fromMap($this->doRPCRequest('CreateTransaction', '2017-07-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateTransactionRequest $request
     *
     * @return CreateTransactionResponse
     */
    public function createTransaction($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTransactionWithOptions($request, $runtime);
    }

    /**
     * @param DeleteAlbumsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteAlbumsResponse
     */
    public function deleteAlbumsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteAlbumsResponse::fromMap($this->doRPCRequest('DeleteAlbums', '2017-07-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteAlbumsRequest $request
     *
     * @return DeleteAlbumsResponse
     */
    public function deleteAlbums($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAlbumsWithOptions($request, $runtime);
    }

    /**
     * @param DeleteEventRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteEventResponse
     */
    public function deleteEventWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteEventResponse::fromMap($this->doRPCRequest('DeleteEvent', '2017-07-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteEventRequest $request
     *
     * @return DeleteEventResponse
     */
    public function deleteEvent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteEventWithOptions($request, $runtime);
    }

    /**
     * @param DeleteFacesRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteFacesResponse
     */
    public function deleteFacesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteFacesResponse::fromMap($this->doRPCRequest('DeleteFaces', '2017-07-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteFacesRequest $request
     *
     * @return DeleteFacesResponse
     */
    public function deleteFaces($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteFacesWithOptions($request, $runtime);
    }

    /**
     * @param DeletePhotosRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeletePhotosResponse
     */
    public function deletePhotosWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeletePhotosResponse::fromMap($this->doRPCRequest('DeletePhotos', '2017-07-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeletePhotosRequest $request
     *
     * @return DeletePhotosResponse
     */
    public function deletePhotos($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deletePhotosWithOptions($request, $runtime);
    }

    /**
     * @param DeletePhotoStoreRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeletePhotoStoreResponse
     */
    public function deletePhotoStoreWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeletePhotoStoreResponse::fromMap($this->doRPCRequest('DeletePhotoStore', '2017-07-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeletePhotoStoreRequest $request
     *
     * @return DeletePhotoStoreResponse
     */
    public function deletePhotoStore($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deletePhotoStoreWithOptions($request, $runtime);
    }

    /**
     * @param EditPhotosRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return EditPhotosResponse
     */
    public function editPhotosWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return EditPhotosResponse::fromMap($this->doRPCRequest('EditPhotos', '2017-07-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param EditPhotosRequest $request
     *
     * @return EditPhotosResponse
     */
    public function editPhotos($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->editPhotosWithOptions($request, $runtime);
    }

    /**
     * @param EditPhotoStoreRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return EditPhotoStoreResponse
     */
    public function editPhotoStoreWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return EditPhotoStoreResponse::fromMap($this->doRPCRequest('EditPhotoStore', '2017-07-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param EditPhotoStoreRequest $request
     *
     * @return EditPhotoStoreResponse
     */
    public function editPhotoStore($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->editPhotoStoreWithOptions($request, $runtime);
    }

    /**
     * @param FetchAlbumTagPhotosRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return FetchAlbumTagPhotosResponse
     */
    public function fetchAlbumTagPhotosWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return FetchAlbumTagPhotosResponse::fromMap($this->doRPCRequest('FetchAlbumTagPhotos', '2017-07-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param FetchAlbumTagPhotosRequest $request
     *
     * @return FetchAlbumTagPhotosResponse
     */
    public function fetchAlbumTagPhotos($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->fetchAlbumTagPhotosWithOptions($request, $runtime);
    }

    /**
     * @param FetchLibrariesRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return FetchLibrariesResponse
     */
    public function fetchLibrariesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return FetchLibrariesResponse::fromMap($this->doRPCRequest('FetchLibraries', '2017-07-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param FetchLibrariesRequest $request
     *
     * @return FetchLibrariesResponse
     */
    public function fetchLibraries($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->fetchLibrariesWithOptions($request, $runtime);
    }

    /**
     * @param FetchMomentPhotosRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return FetchMomentPhotosResponse
     */
    public function fetchMomentPhotosWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return FetchMomentPhotosResponse::fromMap($this->doRPCRequest('FetchMomentPhotos', '2017-07-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param FetchMomentPhotosRequest $request
     *
     * @return FetchMomentPhotosResponse
     */
    public function fetchMomentPhotos($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->fetchMomentPhotosWithOptions($request, $runtime);
    }

    /**
     * @param FetchPhotosRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return FetchPhotosResponse
     */
    public function fetchPhotosWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return FetchPhotosResponse::fromMap($this->doRPCRequest('FetchPhotos', '2017-07-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param FetchPhotosRequest $request
     *
     * @return FetchPhotosResponse
     */
    public function fetchPhotos($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->fetchPhotosWithOptions($request, $runtime);
    }

    /**
     * @param GetAlbumsByNamesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetAlbumsByNamesResponse
     */
    public function getAlbumsByNamesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetAlbumsByNamesResponse::fromMap($this->doRPCRequest('GetAlbumsByNames', '2017-07-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetAlbumsByNamesRequest $request
     *
     * @return GetAlbumsByNamesResponse
     */
    public function getAlbumsByNames($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAlbumsByNamesWithOptions($request, $runtime);
    }

    /**
     * @param GetDownloadUrlRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetDownloadUrlResponse
     */
    public function getDownloadUrlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetDownloadUrlResponse::fromMap($this->doRPCRequest('GetDownloadUrl', '2017-07-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetDownloadUrlRequest $request
     *
     * @return GetDownloadUrlResponse
     */
    public function getDownloadUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDownloadUrlWithOptions($request, $runtime);
    }

    /**
     * @param GetDownloadUrlsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetDownloadUrlsResponse
     */
    public function getDownloadUrlsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetDownloadUrlsResponse::fromMap($this->doRPCRequest('GetDownloadUrls', '2017-07-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetDownloadUrlsRequest $request
     *
     * @return GetDownloadUrlsResponse
     */
    public function getDownloadUrls($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDownloadUrlsWithOptions($request, $runtime);
    }

    /**
     * @param GetFramedPhotoUrlsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetFramedPhotoUrlsResponse
     */
    public function getFramedPhotoUrlsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetFramedPhotoUrlsResponse::fromMap($this->doRPCRequest('GetFramedPhotoUrls', '2017-07-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetFramedPhotoUrlsRequest $request
     *
     * @return GetFramedPhotoUrlsResponse
     */
    public function getFramedPhotoUrls($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getFramedPhotoUrlsWithOptions($request, $runtime);
    }

    /**
     * @param GetLibraryRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return GetLibraryResponse
     */
    public function getLibraryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetLibraryResponse::fromMap($this->doRPCRequest('GetLibrary', '2017-07-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetLibraryRequest $request
     *
     * @return GetLibraryResponse
     */
    public function getLibrary($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLibraryWithOptions($request, $runtime);
    }

    /**
     * @param GetPhotosRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return GetPhotosResponse
     */
    public function getPhotosWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetPhotosResponse::fromMap($this->doRPCRequest('GetPhotos', '2017-07-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetPhotosRequest $request
     *
     * @return GetPhotosResponse
     */
    public function getPhotos($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPhotosWithOptions($request, $runtime);
    }

    /**
     * @param GetPhotosByMd5sRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetPhotosByMd5sResponse
     */
    public function getPhotosByMd5sWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetPhotosByMd5sResponse::fromMap($this->doRPCRequest('GetPhotosByMd5s', '2017-07-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetPhotosByMd5sRequest $request
     *
     * @return GetPhotosByMd5sResponse
     */
    public function getPhotosByMd5s($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPhotosByMd5sWithOptions($request, $runtime);
    }

    /**
     * @param GetPhotoStoreRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetPhotoStoreResponse
     */
    public function getPhotoStoreWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetPhotoStoreResponse::fromMap($this->doRPCRequest('GetPhotoStore', '2017-07-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetPhotoStoreRequest $request
     *
     * @return GetPhotoStoreResponse
     */
    public function getPhotoStore($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPhotoStoreWithOptions($request, $runtime);
    }

    /**
     * @param GetPrivateAccessUrlsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetPrivateAccessUrlsResponse
     */
    public function getPrivateAccessUrlsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetPrivateAccessUrlsResponse::fromMap($this->doRPCRequest('GetPrivateAccessUrls', '2017-07-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetPrivateAccessUrlsRequest $request
     *
     * @return GetPrivateAccessUrlsResponse
     */
    public function getPrivateAccessUrls($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPrivateAccessUrlsWithOptions($request, $runtime);
    }

    /**
     * @param GetPublicAccessUrlsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetPublicAccessUrlsResponse
     */
    public function getPublicAccessUrlsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetPublicAccessUrlsResponse::fromMap($this->doRPCRequest('GetPublicAccessUrls', '2017-07-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetPublicAccessUrlsRequest $request
     *
     * @return GetPublicAccessUrlsResponse
     */
    public function getPublicAccessUrls($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPublicAccessUrlsWithOptions($request, $runtime);
    }

    /**
     * @param GetQuotaRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return GetQuotaResponse
     */
    public function getQuotaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetQuotaResponse::fromMap($this->doRPCRequest('GetQuota', '2017-07-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetQuotaRequest $request
     *
     * @return GetQuotaResponse
     */
    public function getQuota($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getQuotaWithOptions($request, $runtime);
    }

    /**
     * @param GetSimilarPhotosRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetSimilarPhotosResponse
     */
    public function getSimilarPhotosWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetSimilarPhotosResponse::fromMap($this->doRPCRequest('GetSimilarPhotos', '2017-07-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetSimilarPhotosRequest $request
     *
     * @return GetSimilarPhotosResponse
     */
    public function getSimilarPhotos($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSimilarPhotosWithOptions($request, $runtime);
    }

    /**
     * @param GetThumbnailRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetThumbnailResponse
     */
    public function getThumbnailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetThumbnailResponse::fromMap($this->doRPCRequest('GetThumbnail', '2017-07-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetThumbnailRequest $request
     *
     * @return GetThumbnailResponse
     */
    public function getThumbnail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getThumbnailWithOptions($request, $runtime);
    }

    /**
     * @param GetThumbnailsRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetThumbnailsResponse
     */
    public function getThumbnailsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetThumbnailsResponse::fromMap($this->doRPCRequest('GetThumbnails', '2017-07-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetThumbnailsRequest $request
     *
     * @return GetThumbnailsResponse
     */
    public function getThumbnails($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getThumbnailsWithOptions($request, $runtime);
    }

    /**
     * @param GetVideoCoverRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetVideoCoverResponse
     */
    public function getVideoCoverWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetVideoCoverResponse::fromMap($this->doRPCRequest('GetVideoCover', '2017-07-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetVideoCoverRequest $request
     *
     * @return GetVideoCoverResponse
     */
    public function getVideoCover($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getVideoCoverWithOptions($request, $runtime);
    }

    /**
     * @param InactivatePhotosRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return InactivatePhotosResponse
     */
    public function inactivatePhotosWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return InactivatePhotosResponse::fromMap($this->doRPCRequest('InactivatePhotos', '2017-07-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param InactivatePhotosRequest $request
     *
     * @return InactivatePhotosResponse
     */
    public function inactivatePhotos($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->inactivatePhotosWithOptions($request, $runtime);
    }

    /**
     * @param LikePhotoRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return LikePhotoResponse
     */
    public function likePhotoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return LikePhotoResponse::fromMap($this->doRPCRequest('LikePhoto', '2017-07-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param LikePhotoRequest $request
     *
     * @return LikePhotoResponse
     */
    public function likePhoto($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->likePhotoWithOptions($request, $runtime);
    }

    /**
     * @param ListAlbumPhotosRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListAlbumPhotosResponse
     */
    public function listAlbumPhotosWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListAlbumPhotosResponse::fromMap($this->doRPCRequest('ListAlbumPhotos', '2017-07-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListAlbumPhotosRequest $request
     *
     * @return ListAlbumPhotosResponse
     */
    public function listAlbumPhotos($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAlbumPhotosWithOptions($request, $runtime);
    }

    /**
     * @param ListAlbumsRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ListAlbumsResponse
     */
    public function listAlbumsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListAlbumsResponse::fromMap($this->doRPCRequest('ListAlbums', '2017-07-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListAlbumsRequest $request
     *
     * @return ListAlbumsResponse
     */
    public function listAlbums($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAlbumsWithOptions($request, $runtime);
    }

    /**
     * @param ListFacePhotosRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListFacePhotosResponse
     */
    public function listFacePhotosWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListFacePhotosResponse::fromMap($this->doRPCRequest('ListFacePhotos', '2017-07-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListFacePhotosRequest $request
     *
     * @return ListFacePhotosResponse
     */
    public function listFacePhotos($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFacePhotosWithOptions($request, $runtime);
    }

    /**
     * @param ListFacesRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ListFacesResponse
     */
    public function listFacesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListFacesResponse::fromMap($this->doRPCRequest('ListFaces', '2017-07-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListFacesRequest $request
     *
     * @return ListFacesResponse
     */
    public function listFaces($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFacesWithOptions($request, $runtime);
    }

    /**
     * @param ListMomentPhotosRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListMomentPhotosResponse
     */
    public function listMomentPhotosWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListMomentPhotosResponse::fromMap($this->doRPCRequest('ListMomentPhotos', '2017-07-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListMomentPhotosRequest $request
     *
     * @return ListMomentPhotosResponse
     */
    public function listMomentPhotos($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listMomentPhotosWithOptions($request, $runtime);
    }

    /**
     * @param ListMomentsRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListMomentsResponse
     */
    public function listMomentsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListMomentsResponse::fromMap($this->doRPCRequest('ListMoments', '2017-07-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListMomentsRequest $request
     *
     * @return ListMomentsResponse
     */
    public function listMoments($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listMomentsWithOptions($request, $runtime);
    }

    /**
     * @param ListPhotoFacesRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListPhotoFacesResponse
     */
    public function listPhotoFacesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListPhotoFacesResponse::fromMap($this->doRPCRequest('ListPhotoFaces', '2017-07-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListPhotoFacesRequest $request
     *
     * @return ListPhotoFacesResponse
     */
    public function listPhotoFaces($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPhotoFacesWithOptions($request, $runtime);
    }

    /**
     * @param ListPhotosRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ListPhotosResponse
     */
    public function listPhotosWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListPhotosResponse::fromMap($this->doRPCRequest('ListPhotos', '2017-07-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListPhotosRequest $request
     *
     * @return ListPhotosResponse
     */
    public function listPhotos($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPhotosWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return ListPhotoStoresResponse
     */
    public function listPhotoStoresWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);

        return ListPhotoStoresResponse::fromMap($this->doRPCRequest('ListPhotoStores', '2017-07-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @return ListPhotoStoresResponse
     */
    public function listPhotoStores()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPhotoStoresWithOptions($runtime);
    }

    /**
     * @param ListPhotoTagsRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListPhotoTagsResponse
     */
    public function listPhotoTagsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListPhotoTagsResponse::fromMap($this->doRPCRequest('ListPhotoTags', '2017-07-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListPhotoTagsRequest $request
     *
     * @return ListPhotoTagsResponse
     */
    public function listPhotoTags($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPhotoTagsWithOptions($request, $runtime);
    }

    /**
     * @param ListRegisteredTagsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListRegisteredTagsResponse
     */
    public function listRegisteredTagsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListRegisteredTagsResponse::fromMap($this->doRPCRequest('ListRegisteredTags', '2017-07-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListRegisteredTagsRequest $request
     *
     * @return ListRegisteredTagsResponse
     */
    public function listRegisteredTags($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRegisteredTagsWithOptions($request, $runtime);
    }

    /**
     * @param ListTagPhotosRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListTagPhotosResponse
     */
    public function listTagPhotosWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListTagPhotosResponse::fromMap($this->doRPCRequest('ListTagPhotos', '2017-07-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListTagPhotosRequest $request
     *
     * @return ListTagPhotosResponse
     */
    public function listTagPhotos($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTagPhotosWithOptions($request, $runtime);
    }

    /**
     * @param ListTagsRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return ListTagsResponse
     */
    public function listTagsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListTagsResponse::fromMap($this->doRPCRequest('ListTags', '2017-07-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListTagsRequest $request
     *
     * @return ListTagsResponse
     */
    public function listTags($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTagsWithOptions($request, $runtime);
    }

    /**
     * @param ListTimeLinePhotosRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListTimeLinePhotosResponse
     */
    public function listTimeLinePhotosWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListTimeLinePhotosResponse::fromMap($this->doRPCRequest('ListTimeLinePhotos', '2017-07-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListTimeLinePhotosRequest $request
     *
     * @return ListTimeLinePhotosResponse
     */
    public function listTimeLinePhotos($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTimeLinePhotosWithOptions($request, $runtime);
    }

    /**
     * @param ListTimeLinesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListTimeLinesResponse
     */
    public function listTimeLinesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListTimeLinesResponse::fromMap($this->doRPCRequest('ListTimeLines', '2017-07-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListTimeLinesRequest $request
     *
     * @return ListTimeLinesResponse
     */
    public function listTimeLines($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTimeLinesWithOptions($request, $runtime);
    }

    /**
     * @param MergeFacesRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return MergeFacesResponse
     */
    public function mergeFacesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return MergeFacesResponse::fromMap($this->doRPCRequest('MergeFaces', '2017-07-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param MergeFacesRequest $request
     *
     * @return MergeFacesResponse
     */
    public function mergeFaces($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->mergeFacesWithOptions($request, $runtime);
    }

    /**
     * @param MoveAlbumPhotosRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return MoveAlbumPhotosResponse
     */
    public function moveAlbumPhotosWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return MoveAlbumPhotosResponse::fromMap($this->doRPCRequest('MoveAlbumPhotos', '2017-07-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param MoveAlbumPhotosRequest $request
     *
     * @return MoveAlbumPhotosResponse
     */
    public function moveAlbumPhotos($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->moveAlbumPhotosWithOptions($request, $runtime);
    }

    /**
     * @param MoveFacePhotosRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return MoveFacePhotosResponse
     */
    public function moveFacePhotosWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return MoveFacePhotosResponse::fromMap($this->doRPCRequest('MoveFacePhotos', '2017-07-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param MoveFacePhotosRequest $request
     *
     * @return MoveFacePhotosResponse
     */
    public function moveFacePhotos($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->moveFacePhotosWithOptions($request, $runtime);
    }

    /**
     * @param ReactivatePhotosRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ReactivatePhotosResponse
     */
    public function reactivatePhotosWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ReactivatePhotosResponse::fromMap($this->doRPCRequest('ReactivatePhotos', '2017-07-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ReactivatePhotosRequest $request
     *
     * @return ReactivatePhotosResponse
     */
    public function reactivatePhotos($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->reactivatePhotosWithOptions($request, $runtime);
    }

    /**
     * @param RegisterPhotoRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return RegisterPhotoResponse
     */
    public function registerPhotoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RegisterPhotoResponse::fromMap($this->doRPCRequest('RegisterPhoto', '2017-07-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RegisterPhotoRequest $request
     *
     * @return RegisterPhotoResponse
     */
    public function registerPhoto($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->registerPhotoWithOptions($request, $runtime);
    }

    /**
     * @param RegisterTagRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return RegisterTagResponse
     */
    public function registerTagWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RegisterTagResponse::fromMap($this->doRPCRequest('RegisterTag', '2017-07-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RegisterTagRequest $request
     *
     * @return RegisterTagResponse
     */
    public function registerTag($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->registerTagWithOptions($request, $runtime);
    }

    /**
     * @param RemoveAlbumPhotosRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return RemoveAlbumPhotosResponse
     */
    public function removeAlbumPhotosWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RemoveAlbumPhotosResponse::fromMap($this->doRPCRequest('RemoveAlbumPhotos', '2017-07-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RemoveAlbumPhotosRequest $request
     *
     * @return RemoveAlbumPhotosResponse
     */
    public function removeAlbumPhotos($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeAlbumPhotosWithOptions($request, $runtime);
    }

    /**
     * @param RemoveFacePhotosRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return RemoveFacePhotosResponse
     */
    public function removeFacePhotosWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RemoveFacePhotosResponse::fromMap($this->doRPCRequest('RemoveFacePhotos', '2017-07-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RemoveFacePhotosRequest $request
     *
     * @return RemoveFacePhotosResponse
     */
    public function removeFacePhotos($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeFacePhotosWithOptions($request, $runtime);
    }

    /**
     * @param RenameAlbumRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return RenameAlbumResponse
     */
    public function renameAlbumWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RenameAlbumResponse::fromMap($this->doRPCRequest('RenameAlbum', '2017-07-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RenameAlbumRequest $request
     *
     * @return RenameAlbumResponse
     */
    public function renameAlbum($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->renameAlbumWithOptions($request, $runtime);
    }

    /**
     * @param RenameFaceRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return RenameFaceResponse
     */
    public function renameFaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RenameFaceResponse::fromMap($this->doRPCRequest('RenameFace', '2017-07-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RenameFaceRequest $request
     *
     * @return RenameFaceResponse
     */
    public function renameFace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->renameFaceWithOptions($request, $runtime);
    }

    /**
     * @param SearchPhotosRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return SearchPhotosResponse
     */
    public function searchPhotosWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SearchPhotosResponse::fromMap($this->doRPCRequest('SearchPhotos', '2017-07-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SearchPhotosRequest $request
     *
     * @return SearchPhotosResponse
     */
    public function searchPhotos($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchPhotosWithOptions($request, $runtime);
    }

    /**
     * @param SetAlbumCoverRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return SetAlbumCoverResponse
     */
    public function setAlbumCoverWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SetAlbumCoverResponse::fromMap($this->doRPCRequest('SetAlbumCover', '2017-07-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SetAlbumCoverRequest $request
     *
     * @return SetAlbumCoverResponse
     */
    public function setAlbumCover($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setAlbumCoverWithOptions($request, $runtime);
    }

    /**
     * @param SetFaceCoverRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return SetFaceCoverResponse
     */
    public function setFaceCoverWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SetFaceCoverResponse::fromMap($this->doRPCRequest('SetFaceCover', '2017-07-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SetFaceCoverRequest $request
     *
     * @return SetFaceCoverResponse
     */
    public function setFaceCover($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setFaceCoverWithOptions($request, $runtime);
    }

    /**
     * @param SetMeRequest   $request
     * @param RuntimeOptions $runtime
     *
     * @return SetMeResponse
     */
    public function setMeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SetMeResponse::fromMap($this->doRPCRequest('SetMe', '2017-07-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SetMeRequest $request
     *
     * @return SetMeResponse
     */
    public function setMe($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setMeWithOptions($request, $runtime);
    }

    /**
     * @param SetQuotaRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return SetQuotaResponse
     */
    public function setQuotaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SetQuotaResponse::fromMap($this->doRPCRequest('SetQuota', '2017-07-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SetQuotaRequest $request
     *
     * @return SetQuotaResponse
     */
    public function setQuota($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setQuotaWithOptions($request, $runtime);
    }

    /**
     * @param TagPhotoRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return TagPhotoResponse
     */
    public function tagPhotoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return TagPhotoResponse::fromMap($this->doRPCRequest('TagPhoto', '2017-07-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param TagPhotoRequest $request
     *
     * @return TagPhotoResponse
     */
    public function tagPhoto($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->tagPhotoWithOptions($request, $runtime);
    }

    /**
     * @param ToggleFeaturesRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ToggleFeaturesResponse
     */
    public function toggleFeaturesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ToggleFeaturesResponse::fromMap($this->doRPCRequest('ToggleFeatures', '2017-07-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ToggleFeaturesRequest $request
     *
     * @return ToggleFeaturesResponse
     */
    public function toggleFeatures($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->toggleFeaturesWithOptions($request, $runtime);
    }
}
