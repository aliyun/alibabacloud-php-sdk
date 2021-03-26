<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\ICE\V20201109\Models\AddEditingProjectMaterialsRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\AddEditingProjectMaterialsResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\CreateEditingProjectRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\CreateEditingProjectResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteEditingProjectMaterialsRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteEditingProjectMaterialsResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteEditingProjectsRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteEditingProjectsResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteMediaInfosRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteMediaInfosResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteSmartJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteSmartJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\DescribeIceProductStatusResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\DescribeRelatedAuthorizationStatusResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetEditingProjectMaterialsRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetEditingProjectMaterialsResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetEditingProjectRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetEditingProjectResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetMediaInfoRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetMediaInfoResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetMediaProducingJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetMediaProducingJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetSmartHandleJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetSmartHandleJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListAllPublicMediaTagsRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListAllPublicMediaTagsResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListMediaBasicInfosRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListMediaBasicInfosResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListMediaProducingJobsRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListMediaProducingJobsResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListPublicMediaBasicInfosRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListPublicMediaBasicInfosResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListSmartJobsRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListSmartJobsResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\RegisterMediaInfoRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\RegisterMediaInfoResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\SearchEditingProjectRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SearchEditingProjectResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitASRJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitASRJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitIRJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitIRJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitKeyWordCutJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitKeyWordCutJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitMediaProducingJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitMediaProducingJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitPPTCutJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitPPTCutJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitSmartJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitSmartJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitSubtitleProduceJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitSubtitleProduceJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateEditingProjectRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateEditingProjectResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateMediaInfoRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateMediaInfoResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateSmartJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateSmartJobResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

class ICE extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'ap-northeast-1'              => 'ice.aliyuncs.com',
            'ap-northeast-2-pop'          => 'ice.aliyuncs.com',
            'ap-south-1'                  => 'ice.aliyuncs.com',
            'ap-southeast-1'              => 'ice.aliyuncs.com',
            'ap-southeast-2'              => 'ice.aliyuncs.com',
            'ap-southeast-3'              => 'ice.aliyuncs.com',
            'ap-southeast-5'              => 'ice.aliyuncs.com',
            'cn-beijing'                  => 'ice.aliyuncs.com',
            'cn-beijing-finance-1'        => 'ice.aliyuncs.com',
            'cn-beijing-finance-pop'      => 'ice.aliyuncs.com',
            'cn-beijing-gov-1'            => 'ice.aliyuncs.com',
            'cn-beijing-nu16-b01'         => 'ice.aliyuncs.com',
            'cn-chengdu'                  => 'ice.aliyuncs.com',
            'cn-edge-1'                   => 'ice.aliyuncs.com',
            'cn-fujian'                   => 'ice.aliyuncs.com',
            'cn-haidian-cm12-c01'         => 'ice.aliyuncs.com',
            'cn-hangzhou'                 => 'ice.aliyuncs.com',
            'cn-hangzhou-bj-b01'          => 'ice.aliyuncs.com',
            'cn-hangzhou-finance'         => 'ice.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'ice.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'ice.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'ice.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'ice.aliyuncs.com',
            'cn-hangzhou-test-306'        => 'ice.aliyuncs.com',
            'cn-hongkong'                 => 'ice.aliyuncs.com',
            'cn-hongkong-finance-pop'     => 'ice.aliyuncs.com',
            'cn-huhehaote'                => 'ice.aliyuncs.com',
            'cn-huhehaote-nebula-1'       => 'ice.aliyuncs.com',
            'cn-north-2-gov-1'            => 'ice.aliyuncs.com',
            'cn-qingdao'                  => 'ice.aliyuncs.com',
            'cn-qingdao-nebula'           => 'ice.aliyuncs.com',
            'cn-shanghai-et15-b01'        => 'ice.aliyuncs.com',
            'cn-shanghai-et2-b01'         => 'ice.aliyuncs.com',
            'cn-shanghai-finance-1'       => 'ice.aliyuncs.com',
            'cn-shanghai-inner'           => 'ice.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'ice.aliyuncs.com',
            'cn-shenzhen'                 => 'ice.aliyuncs.com',
            'cn-shenzhen-finance-1'       => 'ice.aliyuncs.com',
            'cn-shenzhen-inner'           => 'ice.aliyuncs.com',
            'cn-shenzhen-st4-d01'         => 'ice.aliyuncs.com',
            'cn-shenzhen-su18-b01'        => 'ice.aliyuncs.com',
            'cn-wuhan'                    => 'ice.aliyuncs.com',
            'cn-wulanchabu'               => 'ice.aliyuncs.com',
            'cn-yushanfang'               => 'ice.aliyuncs.com',
            'cn-zhangbei'                 => 'ice.aliyuncs.com',
            'cn-zhangbei-na61-b01'        => 'ice.aliyuncs.com',
            'cn-zhangjiakou'              => 'ice.aliyuncs.com',
            'cn-zhangjiakou-na62-a01'     => 'ice.aliyuncs.com',
            'cn-zhengzhou-nebula-1'       => 'ice.aliyuncs.com',
            'eu-central-1'                => 'ice.aliyuncs.com',
            'eu-west-1'                   => 'ice.aliyuncs.com',
            'eu-west-1-oxs'               => 'ice.aliyuncs.com',
            'me-east-1'                   => 'ice.aliyuncs.com',
            'rus-west-1-pop'              => 'ice.aliyuncs.com',
            'us-east-1'                   => 'ice.aliyuncs.com',
            'us-west-1'                   => 'ice.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('ice', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param ListSmartJobsRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListSmartJobsResponse
     */
    public function listSmartJobsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return ListSmartJobsResponse::fromMap($this->doRPCRequest('ListSmartJobs', '2020-11-09', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListSmartJobsRequest $request
     *
     * @return ListSmartJobsResponse
     */
    public function listSmartJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSmartJobsWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return DescribeIceProductStatusResponse
     */
    public function describeIceProductStatusWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);

        return DescribeIceProductStatusResponse::fromMap($this->doRPCRequest('DescribeIceProductStatus', '2020-11-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @return DescribeIceProductStatusResponse
     */
    public function describeIceProductStatus()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeIceProductStatusWithOptions($runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return DescribeRelatedAuthorizationStatusResponse
     */
    public function describeRelatedAuthorizationStatusWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);

        return DescribeRelatedAuthorizationStatusResponse::fromMap($this->doRPCRequest('DescribeRelatedAuthorizationStatus', '2020-11-09', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @return DescribeRelatedAuthorizationStatusResponse
     */
    public function describeRelatedAuthorizationStatus()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRelatedAuthorizationStatusWithOptions($runtime);
    }

    /**
     * @param ListMediaBasicInfosRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListMediaBasicInfosResponse
     */
    public function listMediaBasicInfosWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListMediaBasicInfosResponse::fromMap($this->doRPCRequest('ListMediaBasicInfos', '2020-11-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListMediaBasicInfosRequest $request
     *
     * @return ListMediaBasicInfosResponse
     */
    public function listMediaBasicInfos($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listMediaBasicInfosWithOptions($request, $runtime);
    }

    /**
     * @param SubmitSubtitleProduceJobRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return SubmitSubtitleProduceJobResponse
     */
    public function submitSubtitleProduceJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SubmitSubtitleProduceJobResponse::fromMap($this->doRPCRequest('SubmitSubtitleProduceJob', '2020-11-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SubmitSubtitleProduceJobRequest $request
     *
     * @return SubmitSubtitleProduceJobResponse
     */
    public function submitSubtitleProduceJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitSubtitleProduceJobWithOptions($request, $runtime);
    }

    /**
     * @param SubmitKeyWordCutJobRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return SubmitKeyWordCutJobResponse
     */
    public function submitKeyWordCutJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return SubmitKeyWordCutJobResponse::fromMap($this->doRPCRequest('SubmitKeyWordCutJob', '2020-11-09', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SubmitKeyWordCutJobRequest $request
     *
     * @return SubmitKeyWordCutJobResponse
     */
    public function submitKeyWordCutJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitKeyWordCutJobWithOptions($request, $runtime);
    }

    /**
     * @param AddEditingProjectMaterialsRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return AddEditingProjectMaterialsResponse
     */
    public function addEditingProjectMaterialsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddEditingProjectMaterialsResponse::fromMap($this->doRPCRequest('AddEditingProjectMaterials', '2020-11-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AddEditingProjectMaterialsRequest $request
     *
     * @return AddEditingProjectMaterialsResponse
     */
    public function addEditingProjectMaterials($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addEditingProjectMaterialsWithOptions($request, $runtime);
    }

    /**
     * @param SubmitASRJobRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return SubmitASRJobResponse
     */
    public function submitASRJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SubmitASRJobResponse::fromMap($this->doRPCRequest('SubmitASRJob', '2020-11-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SubmitASRJobRequest $request
     *
     * @return SubmitASRJobResponse
     */
    public function submitASRJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitASRJobWithOptions($request, $runtime);
    }

    /**
     * @param GetEditingProjectRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetEditingProjectResponse
     */
    public function getEditingProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return GetEditingProjectResponse::fromMap($this->doRPCRequest('GetEditingProject', '2020-11-09', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetEditingProjectRequest $request
     *
     * @return GetEditingProjectResponse
     */
    public function getEditingProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getEditingProjectWithOptions($request, $runtime);
    }

    /**
     * @param DeleteSmartJobRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteSmartJobResponse
     */
    public function deleteSmartJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteSmartJobResponse::fromMap($this->doRPCRequest('DeleteSmartJob', '2020-11-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteSmartJobRequest $request
     *
     * @return DeleteSmartJobResponse
     */
    public function deleteSmartJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSmartJobWithOptions($request, $runtime);
    }

    /**
     * @param SubmitIRJobRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return SubmitIRJobResponse
     */
    public function submitIRJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SubmitIRJobResponse::fromMap($this->doRPCRequest('SubmitIRJob', '2020-11-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SubmitIRJobRequest $request
     *
     * @return SubmitIRJobResponse
     */
    public function submitIRJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitIRJobWithOptions($request, $runtime);
    }

    /**
     * @param DeleteEditingProjectMaterialsRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DeleteEditingProjectMaterialsResponse
     */
    public function deleteEditingProjectMaterialsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return DeleteEditingProjectMaterialsResponse::fromMap($this->doRPCRequest('DeleteEditingProjectMaterials', '2020-11-09', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteEditingProjectMaterialsRequest $request
     *
     * @return DeleteEditingProjectMaterialsResponse
     */
    public function deleteEditingProjectMaterials($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteEditingProjectMaterialsWithOptions($request, $runtime);
    }

    /**
     * @param UpdateEditingProjectRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateEditingProjectResponse
     */
    public function updateEditingProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateEditingProjectResponse::fromMap($this->doRPCRequest('UpdateEditingProject', '2020-11-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateEditingProjectRequest $request
     *
     * @return UpdateEditingProjectResponse
     */
    public function updateEditingProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateEditingProjectWithOptions($request, $runtime);
    }

    /**
     * @param SearchEditingProjectRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return SearchEditingProjectResponse
     */
    public function searchEditingProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SearchEditingProjectResponse::fromMap($this->doRPCRequest('SearchEditingProject', '2020-11-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SearchEditingProjectRequest $request
     *
     * @return SearchEditingProjectResponse
     */
    public function searchEditingProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchEditingProjectWithOptions($request, $runtime);
    }

    /**
     * @param DeleteEditingProjectsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteEditingProjectsResponse
     */
    public function deleteEditingProjectsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteEditingProjectsResponse::fromMap($this->doRPCRequest('DeleteEditingProjects', '2020-11-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteEditingProjectsRequest $request
     *
     * @return DeleteEditingProjectsResponse
     */
    public function deleteEditingProjects($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteEditingProjectsWithOptions($request, $runtime);
    }

    /**
     * @param GetMediaInfoRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetMediaInfoResponse
     */
    public function getMediaInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetMediaInfoResponse::fromMap($this->doRPCRequest('GetMediaInfo', '2020-11-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetMediaInfoRequest $request
     *
     * @return GetMediaInfoResponse
     */
    public function getMediaInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMediaInfoWithOptions($request, $runtime);
    }

    /**
     * @param SubmitSmartJobRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return SubmitSmartJobResponse
     */
    public function submitSmartJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SubmitSmartJobResponse::fromMap($this->doRPCRequest('SubmitSmartJob', '2020-11-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SubmitSmartJobRequest $request
     *
     * @return SubmitSmartJobResponse
     */
    public function submitSmartJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitSmartJobWithOptions($request, $runtime);
    }

    /**
     * @param ListMediaProducingJobsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListMediaProducingJobsResponse
     */
    public function listMediaProducingJobsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListMediaProducingJobsResponse::fromMap($this->doRPCRequest('ListMediaProducingJobs', '2020-11-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListMediaProducingJobsRequest $request
     *
     * @return ListMediaProducingJobsResponse
     */
    public function listMediaProducingJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listMediaProducingJobsWithOptions($request, $runtime);
    }

    /**
     * @param GetEditingProjectMaterialsRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return GetEditingProjectMaterialsResponse
     */
    public function getEditingProjectMaterialsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return GetEditingProjectMaterialsResponse::fromMap($this->doRPCRequest('GetEditingProjectMaterials', '2020-11-09', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetEditingProjectMaterialsRequest $request
     *
     * @return GetEditingProjectMaterialsResponse
     */
    public function getEditingProjectMaterials($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getEditingProjectMaterialsWithOptions($request, $runtime);
    }

    /**
     * @param SubmitMediaProducingJobRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return SubmitMediaProducingJobResponse
     */
    public function submitMediaProducingJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SubmitMediaProducingJobResponse::fromMap($this->doRPCRequest('SubmitMediaProducingJob', '2020-11-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SubmitMediaProducingJobRequest $request
     *
     * @return SubmitMediaProducingJobResponse
     */
    public function submitMediaProducingJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitMediaProducingJobWithOptions($request, $runtime);
    }

    /**
     * @param DeleteMediaInfosRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteMediaInfosResponse
     */
    public function deleteMediaInfosWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteMediaInfosResponse::fromMap($this->doRPCRequest('DeleteMediaInfos', '2020-11-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteMediaInfosRequest $request
     *
     * @return DeleteMediaInfosResponse
     */
    public function deleteMediaInfos($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMediaInfosWithOptions($request, $runtime);
    }

    /**
     * @param UpdateSmartJobRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateSmartJobResponse
     */
    public function updateSmartJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateSmartJobResponse::fromMap($this->doRPCRequest('UpdateSmartJob', '2020-11-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateSmartJobRequest $request
     *
     * @return UpdateSmartJobResponse
     */
    public function updateSmartJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSmartJobWithOptions($request, $runtime);
    }

    /**
     * @param ListAllPublicMediaTagsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListAllPublicMediaTagsResponse
     */
    public function listAllPublicMediaTagsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListAllPublicMediaTagsResponse::fromMap($this->doRPCRequest('ListAllPublicMediaTags', '2020-11-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListAllPublicMediaTagsRequest $request
     *
     * @return ListAllPublicMediaTagsResponse
     */
    public function listAllPublicMediaTags($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAllPublicMediaTagsWithOptions($request, $runtime);
    }

    /**
     * @param RegisterMediaInfoRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return RegisterMediaInfoResponse
     */
    public function registerMediaInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RegisterMediaInfoResponse::fromMap($this->doRPCRequest('RegisterMediaInfo', '2020-11-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RegisterMediaInfoRequest $request
     *
     * @return RegisterMediaInfoResponse
     */
    public function registerMediaInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->registerMediaInfoWithOptions($request, $runtime);
    }

    /**
     * @param CreateEditingProjectRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateEditingProjectResponse
     */
    public function createEditingProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateEditingProjectResponse::fromMap($this->doRPCRequest('CreateEditingProject', '2020-11-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateEditingProjectRequest $request
     *
     * @return CreateEditingProjectResponse
     */
    public function createEditingProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createEditingProjectWithOptions($request, $runtime);
    }

    /**
     * @param ListPublicMediaBasicInfosRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ListPublicMediaBasicInfosResponse
     */
    public function listPublicMediaBasicInfosWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListPublicMediaBasicInfosResponse::fromMap($this->doRPCRequest('ListPublicMediaBasicInfos', '2020-11-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListPublicMediaBasicInfosRequest $request
     *
     * @return ListPublicMediaBasicInfosResponse
     */
    public function listPublicMediaBasicInfos($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPublicMediaBasicInfosWithOptions($request, $runtime);
    }

    /**
     * @param UpdateMediaInfoRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateMediaInfoResponse
     */
    public function updateMediaInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateMediaInfoResponse::fromMap($this->doRPCRequest('UpdateMediaInfo', '2020-11-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateMediaInfoRequest $request
     *
     * @return UpdateMediaInfoResponse
     */
    public function updateMediaInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateMediaInfoWithOptions($request, $runtime);
    }

    /**
     * @param GetMediaProducingJobRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetMediaProducingJobResponse
     */
    public function getMediaProducingJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return GetMediaProducingJobResponse::fromMap($this->doRPCRequest('GetMediaProducingJob', '2020-11-09', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetMediaProducingJobRequest $request
     *
     * @return GetMediaProducingJobResponse
     */
    public function getMediaProducingJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMediaProducingJobWithOptions($request, $runtime);
    }

    /**
     * @param GetSmartHandleJobRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetSmartHandleJobResponse
     */
    public function getSmartHandleJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return GetSmartHandleJobResponse::fromMap($this->doRPCRequest('GetSmartHandleJob', '2020-11-09', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetSmartHandleJobRequest $request
     *
     * @return GetSmartHandleJobResponse
     */
    public function getSmartHandleJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSmartHandleJobWithOptions($request, $runtime);
    }

    /**
     * @param SubmitPPTCutJobRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return SubmitPPTCutJobResponse
     */
    public function submitPPTCutJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return SubmitPPTCutJobResponse::fromMap($this->doRPCRequest('SubmitPPTCutJob', '2020-11-09', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SubmitPPTCutJobRequest $request
     *
     * @return SubmitPPTCutJobResponse
     */
    public function submitPPTCutJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitPPTCutJobWithOptions($request, $runtime);
    }
}
