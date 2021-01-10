<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ivision\V20190308;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Ivision\V20190308\Models\CreateFaceGroupRequest;
use AlibabaCloud\SDK\Ivision\V20190308\Models\CreateFaceGroupResponse;
use AlibabaCloud\SDK\Ivision\V20190308\Models\CreateStreamPredictRequest;
use AlibabaCloud\SDK\Ivision\V20190308\Models\CreateStreamPredictResponse;
use AlibabaCloud\SDK\Ivision\V20190308\Models\DeleteFaceGroupRequest;
use AlibabaCloud\SDK\Ivision\V20190308\Models\DeleteFaceGroupResponse;
use AlibabaCloud\SDK\Ivision\V20190308\Models\DeleteStreamPredictRequest;
use AlibabaCloud\SDK\Ivision\V20190308\Models\DeleteStreamPredictResponse;
use AlibabaCloud\SDK\Ivision\V20190308\Models\DescribeFaceGroupsRequest;
use AlibabaCloud\SDK\Ivision\V20190308\Models\DescribeFaceGroupsResponse;
use AlibabaCloud\SDK\Ivision\V20190308\Models\DescribeStreamPredictResultRequest;
use AlibabaCloud\SDK\Ivision\V20190308\Models\DescribeStreamPredictResultResponse;
use AlibabaCloud\SDK\Ivision\V20190308\Models\DescribeStreamPredictsRequest;
use AlibabaCloud\SDK\Ivision\V20190308\Models\DescribeStreamPredictsResponse;
use AlibabaCloud\SDK\Ivision\V20190308\Models\GetAlgorithmDetailRequest;
use AlibabaCloud\SDK\Ivision\V20190308\Models\GetAlgorithmDetailResponse;
use AlibabaCloud\SDK\Ivision\V20190308\Models\GetAlgorithmHistogramsRequest;
use AlibabaCloud\SDK\Ivision\V20190308\Models\GetAlgorithmHistogramsResponse;
use AlibabaCloud\SDK\Ivision\V20190308\Models\ImagePredictRequest;
use AlibabaCloud\SDK\Ivision\V20190308\Models\ImagePredictResponse;
use AlibabaCloud\SDK\Ivision\V20190308\Models\ListMyAlgorithmRequest;
use AlibabaCloud\SDK\Ivision\V20190308\Models\ListMyAlgorithmResponse;
use AlibabaCloud\SDK\Ivision\V20190308\Models\PredictPictureRequest;
use AlibabaCloud\SDK\Ivision\V20190308\Models\PredictPictureResponse;
use AlibabaCloud\SDK\Ivision\V20190308\Models\RegisterFaceRequest;
use AlibabaCloud\SDK\Ivision\V20190308\Models\RegisterFaceResponse;
use AlibabaCloud\SDK\Ivision\V20190308\Models\SearchFaceRequest;
use AlibabaCloud\SDK\Ivision\V20190308\Models\SearchFaceResponse;
use AlibabaCloud\SDK\Ivision\V20190308\Models\StartStreamPredictRequest;
use AlibabaCloud\SDK\Ivision\V20190308\Models\StartStreamPredictResponse;
use AlibabaCloud\SDK\Ivision\V20190308\Models\StopStreamPredictRequest;
use AlibabaCloud\SDK\Ivision\V20190308\Models\StopStreamPredictResponse;
use AlibabaCloud\SDK\Ivision\V20190308\Models\UnregisterFaceRequest;
use AlibabaCloud\SDK\Ivision\V20190308\Models\UnregisterFaceResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

class Ivision extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('ivision', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param CreateFaceGroupRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateFaceGroupResponse
     */
    public function createFaceGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return CreateFaceGroupResponse::fromMap($this->doRPCRequest('CreateFaceGroup', '2019-03-08', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateFaceGroupRequest $request
     *
     * @return CreateFaceGroupResponse
     */
    public function createFaceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFaceGroupWithOptions($request, $runtime);
    }

    /**
     * @param CreateStreamPredictRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateStreamPredictResponse
     */
    public function createStreamPredictWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateStreamPredictResponse::fromMap($this->doRPCRequest('CreateStreamPredict', '2019-03-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateStreamPredictRequest $request
     *
     * @return CreateStreamPredictResponse
     */
    public function createStreamPredict($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createStreamPredictWithOptions($request, $runtime);
    }

    /**
     * @param DeleteFaceGroupRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteFaceGroupResponse
     */
    public function deleteFaceGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return DeleteFaceGroupResponse::fromMap($this->doRPCRequest('DeleteFaceGroup', '2019-03-08', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteFaceGroupRequest $request
     *
     * @return DeleteFaceGroupResponse
     */
    public function deleteFaceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteFaceGroupWithOptions($request, $runtime);
    }

    /**
     * @param DeleteStreamPredictRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteStreamPredictResponse
     */
    public function deleteStreamPredictWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteStreamPredictResponse::fromMap($this->doRPCRequest('DeleteStreamPredict', '2019-03-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteStreamPredictRequest $request
     *
     * @return DeleteStreamPredictResponse
     */
    public function deleteStreamPredict($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteStreamPredictWithOptions($request, $runtime);
    }

    /**
     * @param DescribeFaceGroupsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeFaceGroupsResponse
     */
    public function describeFaceGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return DescribeFaceGroupsResponse::fromMap($this->doRPCRequest('DescribeFaceGroups', '2019-03-08', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeFaceGroupsRequest $request
     *
     * @return DescribeFaceGroupsResponse
     */
    public function describeFaceGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFaceGroupsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeStreamPredictResultRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeStreamPredictResultResponse
     */
    public function describeStreamPredictResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeStreamPredictResultResponse::fromMap($this->doRPCRequest('DescribeStreamPredictResult', '2019-03-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeStreamPredictResultRequest $request
     *
     * @return DescribeStreamPredictResultResponse
     */
    public function describeStreamPredictResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeStreamPredictResultWithOptions($request, $runtime);
    }

    /**
     * @param DescribeStreamPredictsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeStreamPredictsResponse
     */
    public function describeStreamPredictsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeStreamPredictsResponse::fromMap($this->doRPCRequest('DescribeStreamPredicts', '2019-03-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeStreamPredictsRequest $request
     *
     * @return DescribeStreamPredictsResponse
     */
    public function describeStreamPredicts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeStreamPredictsWithOptions($request, $runtime);
    }

    /**
     * @param GetAlgorithmDetailRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetAlgorithmDetailResponse
     */
    public function getAlgorithmDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetAlgorithmDetailResponse::fromMap($this->doRPCRequest('GetAlgorithmDetail', '2019-03-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetAlgorithmDetailRequest $request
     *
     * @return GetAlgorithmDetailResponse
     */
    public function getAlgorithmDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAlgorithmDetailWithOptions($request, $runtime);
    }

    /**
     * @param GetAlgorithmHistogramsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetAlgorithmHistogramsResponse
     */
    public function getAlgorithmHistogramsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetAlgorithmHistogramsResponse::fromMap($this->doRPCRequest('GetAlgorithmHistograms', '2019-03-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetAlgorithmHistogramsRequest $request
     *
     * @return GetAlgorithmHistogramsResponse
     */
    public function getAlgorithmHistograms($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAlgorithmHistogramsWithOptions($request, $runtime);
    }

    /**
     * @param ImagePredictRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ImagePredictResponse
     */
    public function imagePredictWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return ImagePredictResponse::fromMap($this->doRPCRequest('ImagePredict', '2019-03-08', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ImagePredictRequest $request
     *
     * @return ImagePredictResponse
     */
    public function imagePredict($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->imagePredictWithOptions($request, $runtime);
    }

    /**
     * @param ListMyAlgorithmRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListMyAlgorithmResponse
     */
    public function listMyAlgorithmWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListMyAlgorithmResponse::fromMap($this->doRPCRequest('ListMyAlgorithm', '2019-03-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListMyAlgorithmRequest $request
     *
     * @return ListMyAlgorithmResponse
     */
    public function listMyAlgorithm($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listMyAlgorithmWithOptions($request, $runtime);
    }

    /**
     * @param PredictPictureRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return PredictPictureResponse
     */
    public function predictPictureWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return PredictPictureResponse::fromMap($this->doRPCRequest('PredictPicture', '2019-03-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param PredictPictureRequest $request
     *
     * @return PredictPictureResponse
     */
    public function predictPicture($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->predictPictureWithOptions($request, $runtime);
    }

    /**
     * @param RegisterFaceRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return RegisterFaceResponse
     */
    public function registerFaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return RegisterFaceResponse::fromMap($this->doRPCRequest('RegisterFace', '2019-03-08', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RegisterFaceRequest $request
     *
     * @return RegisterFaceResponse
     */
    public function registerFace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->registerFaceWithOptions($request, $runtime);
    }

    /**
     * @param SearchFaceRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return SearchFaceResponse
     */
    public function searchFaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return SearchFaceResponse::fromMap($this->doRPCRequest('SearchFace', '2019-03-08', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SearchFaceRequest $request
     *
     * @return SearchFaceResponse
     */
    public function searchFace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchFaceWithOptions($request, $runtime);
    }

    /**
     * @param StartStreamPredictRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return StartStreamPredictResponse
     */
    public function startStreamPredictWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return StartStreamPredictResponse::fromMap($this->doRPCRequest('StartStreamPredict', '2019-03-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param StartStreamPredictRequest $request
     *
     * @return StartStreamPredictResponse
     */
    public function startStreamPredict($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startStreamPredictWithOptions($request, $runtime);
    }

    /**
     * @param StopStreamPredictRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return StopStreamPredictResponse
     */
    public function stopStreamPredictWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return StopStreamPredictResponse::fromMap($this->doRPCRequest('StopStreamPredict', '2019-03-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param StopStreamPredictRequest $request
     *
     * @return StopStreamPredictResponse
     */
    public function stopStreamPredict($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopStreamPredictWithOptions($request, $runtime);
    }

    /**
     * @param UnregisterFaceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UnregisterFaceResponse
     */
    public function unregisterFaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return UnregisterFaceResponse::fromMap($this->doRPCRequest('UnregisterFace', '2019-03-08', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UnregisterFaceRequest $request
     *
     * @return UnregisterFaceResponse
     */
    public function unregisterFace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unregisterFaceWithOptions($request, $runtime);
    }
}
