<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Mts\V20140618\Models\ActivateMediaWorkflowRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\ActivateMediaWorkflowResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\AddMediaRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\AddMediaResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\AddMediaTagRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\AddMediaTagResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\AddMediaWorkflowRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\AddMediaWorkflowResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\AddPipelineRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\AddPipelineResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\AddSmarttagTemplateRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\AddSmarttagTemplateResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\AddTemplateRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\AddTemplateResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\AddWaterMarkTemplateRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\AddWaterMarkTemplateResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\BindInputBucketRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\BindInputBucketResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\BindOutputBucketRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\BindOutputBucketResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\CancelJobRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\CancelJobResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\CreateCustomEntityRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\CreateCustomEntityResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\CreateCustomGroupRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\CreateCustomGroupResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\CreateFpShotDBRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\CreateFpShotDBResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\DeactivateMediaWorkflowRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\DeactivateMediaWorkflowResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\DeleteCustomEntityRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\DeleteCustomEntityResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\DeleteCustomGroupRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\DeleteCustomGroupResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\DeleteCustomViewRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\DeleteCustomViewResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\DeleteMediaRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\DeleteMediaResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\DeleteMediaTagRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\DeleteMediaTagResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\DeleteMediaWorkflowRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\DeleteMediaWorkflowResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\DeletePipelineRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\DeletePipelineResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\DeleteSmarttagTemplateRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\DeleteSmarttagTemplateResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\DeleteTemplateRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\DeleteTemplateResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\DeleteWaterMarkTemplateRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\DeleteWaterMarkTemplateResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\ImAuditRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\ImAuditResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\ImportFpShotJobRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\ImportFpShotJobResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\ListAllMediaBucketRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\ListAllMediaBucketResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\ListCustomEntitiesRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\ListCustomEntitiesResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\ListCustomGroupsRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\ListCustomGroupsResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\ListCustomPersonsRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\ListCustomPersonsResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\ListCustomViewsRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\ListCustomViewsResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\ListFpShotDBRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\ListFpShotDBResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\ListFpShotFilesRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\ListFpShotFilesResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\ListFpShotImportJobRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\ListFpShotImportJobResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\ListJobRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\ListJobResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\ListMediaWorkflowExecutionsRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\ListMediaWorkflowExecutionsResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryAnalysisJobListRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryAnalysisJobListResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryEditingJobListRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryEditingJobListResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryFpDBDeleteJobListRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryFpDBDeleteJobListResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryFpFileDeleteJobListRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryFpFileDeleteJobListResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryFpShotJobListRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryFpShotJobListResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryIProductionJobRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryIProductionJobResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryJobListRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryJobListResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaCensorJobDetailRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaCensorJobDetailResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaCensorJobListRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaCensorJobListResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaInfoJobListRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaInfoJobListResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaListByURLRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaListByURLResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaListRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaListResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaWorkflowExecutionListRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaWorkflowExecutionListResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaWorkflowListRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaWorkflowListResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryPipelineListRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryPipelineListResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\QuerySmarttagJobRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\QuerySmarttagJobResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\QuerySmarttagTemplateListRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\QuerySmarttagTemplateListResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\QuerySnapshotJobListRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\QuerySnapshotJobListResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryTemplateListRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryTemplateListResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryVideoQualityJobRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryVideoQualityJobResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryWaterMarkTemplateListRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryWaterMarkTemplateListResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\RegisterCustomFaceRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\RegisterCustomFaceResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\RegisterCustomViewRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\RegisterCustomViewResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\ReportFpShotJobResultRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\ReportFpShotJobResultResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\SearchMediaWorkflowRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\SearchMediaWorkflowResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\SearchPipelineRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\SearchPipelineResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\SearchTemplateRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\SearchTemplateResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\SearchWaterMarkTemplateRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\SearchWaterMarkTemplateResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitAnalysisJobRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitAnalysisJobResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitFpDBDeleteJobRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitFpDBDeleteJobResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitFpFileDeleteJobRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitFpFileDeleteJobResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitFpShotJobRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitFpShotJobResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitIProductionJobRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitIProductionJobResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitJobsRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitJobsResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitMediaCensorJobRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitMediaCensorJobResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitMediaInfoJobRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitMediaInfoJobResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitSmarttagJobRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitSmarttagJobResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitSnapshotJobRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitSnapshotJobResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitVideoQualityJobRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitVideoQualityJobResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\TagCustomPersonRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\TagCustomPersonResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\UnbindInputBucketRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\UnbindInputBucketResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\UnbindOutputBucketRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\UnbindOutputBucketResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\UnregisterCustomFaceRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\UnregisterCustomFaceResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\UpdateMediaCategoryRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\UpdateMediaCategoryResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\UpdateMediaCoverRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\UpdateMediaCoverResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\UpdateMediaPublishStateRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\UpdateMediaPublishStateResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\UpdateMediaRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\UpdateMediaResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\UpdateMediaWorkflowRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\UpdateMediaWorkflowResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\UpdateMediaWorkflowTriggerModeRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\UpdateMediaWorkflowTriggerModeResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\UpdatePipelineRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\UpdatePipelineResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\UpdateSmarttagTemplateRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\UpdateSmarttagTemplateResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\UpdateTemplateRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\UpdateTemplateResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\UpdateWaterMarkTemplateRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\UpdateWaterMarkTemplateResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Mts extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'ap-northeast-2-pop'          => 'mts.aliyuncs.com',
            'ap-southeast-2'              => 'mts.aliyuncs.com',
            'ap-southeast-3'              => 'mts.aliyuncs.com',
            'cn-beijing-finance-1'        => 'mts.aliyuncs.com',
            'cn-beijing-finance-pop'      => 'mts.aliyuncs.com',
            'cn-beijing-gov-1'            => 'mts.aliyuncs.com',
            'cn-beijing-nu16-b01'         => 'mts.aliyuncs.com',
            'cn-chengdu'                  => 'mts.aliyuncs.com',
            'cn-edge-1'                   => 'mts.aliyuncs.com',
            'cn-fujian'                   => 'mts.aliyuncs.com',
            'cn-haidian-cm12-c01'         => 'mts.aliyuncs.com',
            'cn-hangzhou-bj-b01'          => 'mts.aliyuncs.com',
            'cn-hangzhou-finance'         => 'mts.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'mts.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'mts.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'mts.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'mts.aliyuncs.com',
            'cn-hangzhou-test-306'        => 'mts.aliyuncs.com',
            'cn-hongkong-finance-pop'     => 'mts.aliyuncs.com',
            'cn-huhehaote-nebula-1'       => 'mts.aliyuncs.com',
            'cn-north-2-gov-1'            => 'mts.aliyuncs.com',
            'cn-qingdao-nebula'           => 'mts.aliyuncs.com',
            'cn-shanghai-et15-b01'        => 'mts.aliyuncs.com',
            'cn-shanghai-et2-b01'         => 'mts.aliyuncs.com',
            'cn-shanghai-finance-1'       => 'mts.aliyuncs.com',
            'cn-shanghai-inner'           => 'mts.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'mts.aliyuncs.com',
            'cn-shenzhen-finance-1'       => 'mts.aliyuncs.com',
            'cn-shenzhen-inner'           => 'mts.aliyuncs.com',
            'cn-shenzhen-st4-d01'         => 'mts.aliyuncs.com',
            'cn-shenzhen-su18-b01'        => 'mts.aliyuncs.com',
            'cn-wuhan'                    => 'mts.aliyuncs.com',
            'cn-wulanchabu'               => 'mts.aliyuncs.com',
            'cn-yushanfang'               => 'mts.aliyuncs.com',
            'cn-zhangbei'                 => 'mts.aliyuncs.com',
            'cn-zhangbei-na61-b01'        => 'mts.aliyuncs.com',
            'cn-zhangjiakou-na62-a01'     => 'mts.aliyuncs.com',
            'cn-zhengzhou-nebula-1'       => 'mts.aliyuncs.com',
            'eu-west-1-oxs'               => 'mts.aliyuncs.com',
            'me-east-1'                   => 'mts.aliyuncs.com',
            'rus-west-1-pop'              => 'mts.aliyuncs.com',
            'us-east-1'                   => 'mts.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('mts', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param ActivateMediaWorkflowRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ActivateMediaWorkflowResponse
     */
    public function activateMediaWorkflowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->mediaWorkflowId)) {
            $query['MediaWorkflowId'] = $request->mediaWorkflowId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ActivateMediaWorkflow',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ActivateMediaWorkflowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ActivateMediaWorkflowRequest $request
     *
     * @return ActivateMediaWorkflowResponse
     */
    public function activateMediaWorkflow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->activateMediaWorkflowWithOptions($request, $runtime);
    }

    /**
     * @param AddMediaRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return AddMediaResponse
     */
    public function addMediaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cateId)) {
            $query['CateId'] = $request->cateId;
        }
        if (!Utils::isUnset($request->coverURL)) {
            $query['CoverURL'] = $request->coverURL;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->fileURL)) {
            $query['FileURL'] = $request->fileURL;
        }
        if (!Utils::isUnset($request->inputUnbind)) {
            $query['InputUnbind'] = $request->inputUnbind;
        }
        if (!Utils::isUnset($request->mediaWorkflowId)) {
            $query['MediaWorkflowId'] = $request->mediaWorkflowId;
        }
        if (!Utils::isUnset($request->mediaWorkflowUserData)) {
            $query['MediaWorkflowUserData'] = $request->mediaWorkflowUserData;
        }
        if (!Utils::isUnset($request->overrideParams)) {
            $query['OverrideParams'] = $request->overrideParams;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->tags)) {
            $query['Tags'] = $request->tags;
        }
        if (!Utils::isUnset($request->title)) {
            $query['Title'] = $request->title;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddMedia',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddMediaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddMediaRequest $request
     *
     * @return AddMediaResponse
     */
    public function addMedia($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addMediaWithOptions($request, $runtime);
    }

    /**
     * @param AddMediaTagRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return AddMediaTagResponse
     */
    public function addMediaTagWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->mediaId)) {
            $query['MediaId'] = $request->mediaId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddMediaTag',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddMediaTagResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddMediaTagRequest $request
     *
     * @return AddMediaTagResponse
     */
    public function addMediaTag($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addMediaTagWithOptions($request, $runtime);
    }

    /**
     * @param AddMediaWorkflowRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return AddMediaWorkflowResponse
     */
    public function addMediaWorkflowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->topology)) {
            $query['Topology'] = $request->topology;
        }
        if (!Utils::isUnset($request->triggerMode)) {
            $query['TriggerMode'] = $request->triggerMode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddMediaWorkflow',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddMediaWorkflowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddMediaWorkflowRequest $request
     *
     * @return AddMediaWorkflowResponse
     */
    public function addMediaWorkflow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addMediaWorkflowWithOptions($request, $runtime);
    }

    /**
     * @param AddPipelineRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return AddPipelineResponse
     */
    public function addPipelineWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->notifyConfig)) {
            $query['NotifyConfig'] = $request->notifyConfig;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->role)) {
            $query['Role'] = $request->role;
        }
        if (!Utils::isUnset($request->speed)) {
            $query['Speed'] = $request->speed;
        }
        if (!Utils::isUnset($request->speedLevel)) {
            $query['SpeedLevel'] = $request->speedLevel;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddPipeline',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddPipelineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddPipelineRequest $request
     *
     * @return AddPipelineResponse
     */
    public function addPipeline($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addPipelineWithOptions($request, $runtime);
    }

    /**
     * @param AddSmarttagTemplateRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return AddSmarttagTemplateResponse
     */
    public function addSmarttagTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->analyseTypes)) {
            $query['AnalyseTypes'] = $request->analyseTypes;
        }
        if (!Utils::isUnset($request->faceCategoryIds)) {
            $query['FaceCategoryIds'] = $request->faceCategoryIds;
        }
        if (!Utils::isUnset($request->faceCustomParamsConfig)) {
            $query['FaceCustomParamsConfig'] = $request->faceCustomParamsConfig;
        }
        if (!Utils::isUnset($request->industry)) {
            $query['Industry'] = $request->industry;
        }
        if (!Utils::isUnset($request->isDefault)) {
            $query['IsDefault'] = $request->isDefault;
        }
        if (!Utils::isUnset($request->keywordConfig)) {
            $query['KeywordConfig'] = $request->keywordConfig;
        }
        if (!Utils::isUnset($request->knowledgeConfig)) {
            $query['KnowledgeConfig'] = $request->knowledgeConfig;
        }
        if (!Utils::isUnset($request->labelType)) {
            $query['LabelType'] = $request->labelType;
        }
        if (!Utils::isUnset($request->labelVersion)) {
            $query['LabelVersion'] = $request->labelVersion;
        }
        if (!Utils::isUnset($request->landmarkGroupIds)) {
            $query['LandmarkGroupIds'] = $request->landmarkGroupIds;
        }
        if (!Utils::isUnset($request->objectGroupIds)) {
            $query['ObjectGroupIds'] = $request->objectGroupIds;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->scene)) {
            $query['Scene'] = $request->scene;
        }
        if (!Utils::isUnset($request->templateName)) {
            $query['TemplateName'] = $request->templateName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddSmarttagTemplate',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddSmarttagTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddSmarttagTemplateRequest $request
     *
     * @return AddSmarttagTemplateResponse
     */
    public function addSmarttagTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addSmarttagTemplateWithOptions($request, $runtime);
    }

    /**
     * @param AddTemplateRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return AddTemplateResponse
     */
    public function addTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->audio)) {
            $query['Audio'] = $request->audio;
        }
        if (!Utils::isUnset($request->container)) {
            $query['Container'] = $request->container;
        }
        if (!Utils::isUnset($request->muxConfig)) {
            $query['MuxConfig'] = $request->muxConfig;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->transConfig)) {
            $query['TransConfig'] = $request->transConfig;
        }
        if (!Utils::isUnset($request->video)) {
            $query['Video'] = $request->video;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddTemplate',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddTemplateRequest $request
     *
     * @return AddTemplateResponse
     */
    public function addTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addTemplateWithOptions($request, $runtime);
    }

    /**
     * @param AddWaterMarkTemplateRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return AddWaterMarkTemplateResponse
     */
    public function addWaterMarkTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->config)) {
            $query['Config'] = $request->config;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddWaterMarkTemplate',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddWaterMarkTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddWaterMarkTemplateRequest $request
     *
     * @return AddWaterMarkTemplateResponse
     */
    public function addWaterMarkTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addWaterMarkTemplateWithOptions($request, $runtime);
    }

    /**
     * @param BindInputBucketRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return BindInputBucketResponse
     */
    public function bindInputBucketWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bucket)) {
            $query['Bucket'] = $request->bucket;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->referer)) {
            $query['Referer'] = $request->referer;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->roleArn)) {
            $query['RoleArn'] = $request->roleArn;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BindInputBucket',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BindInputBucketResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param BindInputBucketRequest $request
     *
     * @return BindInputBucketResponse
     */
    public function bindInputBucket($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bindInputBucketWithOptions($request, $runtime);
    }

    /**
     * @param BindOutputBucketRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return BindOutputBucketResponse
     */
    public function bindOutputBucketWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bucket)) {
            $query['Bucket'] = $request->bucket;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->roleArn)) {
            $query['RoleArn'] = $request->roleArn;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BindOutputBucket',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BindOutputBucketResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param BindOutputBucketRequest $request
     *
     * @return BindOutputBucketResponse
     */
    public function bindOutputBucket($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bindOutputBucketWithOptions($request, $runtime);
    }

    /**
     * @param CancelJobRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return CancelJobResponse
     */
    public function cancelJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CancelJob',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CancelJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CancelJobRequest $request
     *
     * @return CancelJobResponse
     */
    public function cancelJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelJobWithOptions($request, $runtime);
    }

    /**
     * @param CreateCustomEntityRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateCustomEntityResponse
     */
    public function createCustomEntityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->algorithm)) {
            $query['Algorithm'] = $request->algorithm;
        }
        if (!Utils::isUnset($request->customEntityInfo)) {
            $query['CustomEntityInfo'] = $request->customEntityInfo;
        }
        if (!Utils::isUnset($request->customEntityName)) {
            $query['CustomEntityName'] = $request->customEntityName;
        }
        if (!Utils::isUnset($request->customGroupId)) {
            $query['CustomGroupId'] = $request->customGroupId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateCustomEntity',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateCustomEntityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateCustomEntityRequest $request
     *
     * @return CreateCustomEntityResponse
     */
    public function createCustomEntity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCustomEntityWithOptions($request, $runtime);
    }

    /**
     * @param CreateCustomGroupRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateCustomGroupResponse
     */
    public function createCustomGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->algorithm)) {
            $query['Algorithm'] = $request->algorithm;
        }
        if (!Utils::isUnset($request->customGroupDescription)) {
            $query['CustomGroupDescription'] = $request->customGroupDescription;
        }
        if (!Utils::isUnset($request->customGroupName)) {
            $query['CustomGroupName'] = $request->customGroupName;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateCustomGroup',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateCustomGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateCustomGroupRequest $request
     *
     * @return CreateCustomGroupResponse
     */
    public function createCustomGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCustomGroupWithOptions($request, $runtime);
    }

    /**
     * @param CreateFpShotDBRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateFpShotDBResponse
     */
    public function createFpShotDBWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->config)) {
            $query['Config'] = $request->config;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->modelId)) {
            $query['ModelId'] = $request->modelId;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateFpShotDB',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateFpShotDBResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateFpShotDBRequest $request
     *
     * @return CreateFpShotDBResponse
     */
    public function createFpShotDB($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFpShotDBWithOptions($request, $runtime);
    }

    /**
     * @param DeactivateMediaWorkflowRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DeactivateMediaWorkflowResponse
     */
    public function deactivateMediaWorkflowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->mediaWorkflowId)) {
            $query['MediaWorkflowId'] = $request->mediaWorkflowId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeactivateMediaWorkflow',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeactivateMediaWorkflowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeactivateMediaWorkflowRequest $request
     *
     * @return DeactivateMediaWorkflowResponse
     */
    public function deactivateMediaWorkflow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deactivateMediaWorkflowWithOptions($request, $runtime);
    }

    /**
     * @param DeleteCustomEntityRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteCustomEntityResponse
     */
    public function deleteCustomEntityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->algorithm)) {
            $query['Algorithm'] = $request->algorithm;
        }
        if (!Utils::isUnset($request->customEntityId)) {
            $query['CustomEntityId'] = $request->customEntityId;
        }
        if (!Utils::isUnset($request->customGroupId)) {
            $query['CustomGroupId'] = $request->customGroupId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteCustomEntity',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteCustomEntityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteCustomEntityRequest $request
     *
     * @return DeleteCustomEntityResponse
     */
    public function deleteCustomEntity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCustomEntityWithOptions($request, $runtime);
    }

    /**
     * @param DeleteCustomGroupRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteCustomGroupResponse
     */
    public function deleteCustomGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->algorithm)) {
            $query['Algorithm'] = $request->algorithm;
        }
        if (!Utils::isUnset($request->customGroupId)) {
            $query['CustomGroupId'] = $request->customGroupId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteCustomGroup',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteCustomGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteCustomGroupRequest $request
     *
     * @return DeleteCustomGroupResponse
     */
    public function deleteCustomGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCustomGroupWithOptions($request, $runtime);
    }

    /**
     * @param DeleteCustomViewRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteCustomViewResponse
     */
    public function deleteCustomViewWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->algorithm)) {
            $query['Algorithm'] = $request->algorithm;
        }
        if (!Utils::isUnset($request->customEntityId)) {
            $query['CustomEntityId'] = $request->customEntityId;
        }
        if (!Utils::isUnset($request->customGroupId)) {
            $query['CustomGroupId'] = $request->customGroupId;
        }
        if (!Utils::isUnset($request->customViewId)) {
            $query['CustomViewId'] = $request->customViewId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteCustomView',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteCustomViewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteCustomViewRequest $request
     *
     * @return DeleteCustomViewResponse
     */
    public function deleteCustomView($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCustomViewWithOptions($request, $runtime);
    }

    /**
     * @param DeleteMediaRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteMediaResponse
     */
    public function deleteMediaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->mediaIds)) {
            $query['MediaIds'] = $request->mediaIds;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteMedia',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteMediaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteMediaRequest $request
     *
     * @return DeleteMediaResponse
     */
    public function deleteMedia($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMediaWithOptions($request, $runtime);
    }

    /**
     * @param DeleteMediaTagRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteMediaTagResponse
     */
    public function deleteMediaTagWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->mediaId)) {
            $query['MediaId'] = $request->mediaId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteMediaTag',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteMediaTagResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteMediaTagRequest $request
     *
     * @return DeleteMediaTagResponse
     */
    public function deleteMediaTag($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMediaTagWithOptions($request, $runtime);
    }

    /**
     * @param DeleteMediaWorkflowRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteMediaWorkflowResponse
     */
    public function deleteMediaWorkflowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->mediaWorkflowId)) {
            $query['MediaWorkflowId'] = $request->mediaWorkflowId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteMediaWorkflow',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteMediaWorkflowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteMediaWorkflowRequest $request
     *
     * @return DeleteMediaWorkflowResponse
     */
    public function deleteMediaWorkflow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMediaWorkflowWithOptions($request, $runtime);
    }

    /**
     * @param DeletePipelineRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeletePipelineResponse
     */
    public function deletePipelineWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pipelineId)) {
            $query['PipelineId'] = $request->pipelineId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeletePipeline',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeletePipelineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeletePipelineRequest $request
     *
     * @return DeletePipelineResponse
     */
    public function deletePipeline($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deletePipelineWithOptions($request, $runtime);
    }

    /**
     * @param DeleteSmarttagTemplateRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteSmarttagTemplateResponse
     */
    public function deleteSmarttagTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteSmarttagTemplate',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteSmarttagTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteSmarttagTemplateRequest $request
     *
     * @return DeleteSmarttagTemplateResponse
     */
    public function deleteSmarttagTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSmarttagTemplateWithOptions($request, $runtime);
    }

    /**
     * @param DeleteTemplateRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteTemplateResponse
     */
    public function deleteTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteTemplate',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteTemplateRequest $request
     *
     * @return DeleteTemplateResponse
     */
    public function deleteTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTemplateWithOptions($request, $runtime);
    }

    /**
     * @param DeleteWaterMarkTemplateRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteWaterMarkTemplateResponse
     */
    public function deleteWaterMarkTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->waterMarkTemplateId)) {
            $query['WaterMarkTemplateId'] = $request->waterMarkTemplateId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteWaterMarkTemplate',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteWaterMarkTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteWaterMarkTemplateRequest $request
     *
     * @return DeleteWaterMarkTemplateResponse
     */
    public function deleteWaterMarkTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteWaterMarkTemplateWithOptions($request, $runtime);
    }

    /**
     * @param ImAuditRequest $request
     * @param RuntimeOptions $runtime
     *
     * @return ImAuditResponse
     */
    public function imAuditWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizType)) {
            $query['BizType'] = $request->bizType;
        }
        if (!Utils::isUnset($request->contents)) {
            $query['Contents'] = $request->contents;
        }
        if (!Utils::isUnset($request->images)) {
            $query['Images'] = $request->images;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->scenes)) {
            $query['Scenes'] = $request->scenes;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ImAudit',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ImAuditResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ImAuditRequest $request
     *
     * @return ImAuditResponse
     */
    public function imAudit($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->imAuditWithOptions($request, $runtime);
    }

    /**
     * @param ImportFpShotJobRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ImportFpShotJobResponse
     */
    public function importFpShotJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fpDBId)) {
            $query['FpDBId'] = $request->fpDBId;
        }
        if (!Utils::isUnset($request->fpImportConfig)) {
            $query['FpImportConfig'] = $request->fpImportConfig;
        }
        if (!Utils::isUnset($request->input)) {
            $query['Input'] = $request->input;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pipelineId)) {
            $query['PipelineId'] = $request->pipelineId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ImportFpShotJob',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ImportFpShotJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ImportFpShotJobRequest $request
     *
     * @return ImportFpShotJobResponse
     */
    public function importFpShotJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->importFpShotJobWithOptions($request, $runtime);
    }

    /**
     * @param ListAllMediaBucketRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListAllMediaBucketResponse
     */
    public function listAllMediaBucketWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->maximumPageSize)) {
            $query['MaximumPageSize'] = $request->maximumPageSize;
        }
        if (!Utils::isUnset($request->nextPageToken)) {
            $query['NextPageToken'] = $request->nextPageToken;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAllMediaBucket',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAllMediaBucketResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListAllMediaBucketRequest $request
     *
     * @return ListAllMediaBucketResponse
     */
    public function listAllMediaBucket($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAllMediaBucketWithOptions($request, $runtime);
    }

    /**
     * @param ListCustomEntitiesRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListCustomEntitiesResponse
     */
    public function listCustomEntitiesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->algorithm)) {
            $query['Algorithm'] = $request->algorithm;
        }
        if (!Utils::isUnset($request->customGroupId)) {
            $query['CustomGroupId'] = $request->customGroupId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListCustomEntities',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListCustomEntitiesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListCustomEntitiesRequest $request
     *
     * @return ListCustomEntitiesResponse
     */
    public function listCustomEntities($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCustomEntitiesWithOptions($request, $runtime);
    }

    /**
     * @param ListCustomGroupsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListCustomGroupsResponse
     */
    public function listCustomGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->algorithm)) {
            $query['Algorithm'] = $request->algorithm;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListCustomGroups',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListCustomGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListCustomGroupsRequest $request
     *
     * @return ListCustomGroupsResponse
     */
    public function listCustomGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCustomGroupsWithOptions($request, $runtime);
    }

    /**
     * @param ListCustomPersonsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListCustomPersonsResponse
     */
    public function listCustomPersonsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->categoryId)) {
            $query['CategoryId'] = $request->categoryId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->personId)) {
            $query['PersonId'] = $request->personId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListCustomPersons',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListCustomPersonsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListCustomPersonsRequest $request
     *
     * @return ListCustomPersonsResponse
     */
    public function listCustomPersons($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCustomPersonsWithOptions($request, $runtime);
    }

    /**
     * @param ListCustomViewsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListCustomViewsResponse
     */
    public function listCustomViewsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->algorithm)) {
            $query['Algorithm'] = $request->algorithm;
        }
        if (!Utils::isUnset($request->customEntityId)) {
            $query['CustomEntityId'] = $request->customEntityId;
        }
        if (!Utils::isUnset($request->customGroupId)) {
            $query['CustomGroupId'] = $request->customGroupId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListCustomViews',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListCustomViewsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListCustomViewsRequest $request
     *
     * @return ListCustomViewsResponse
     */
    public function listCustomViews($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCustomViewsWithOptions($request, $runtime);
    }

    /**
     * @param ListFpShotDBRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListFpShotDBResponse
     */
    public function listFpShotDBWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fpDBIds)) {
            $query['FpDBIds'] = $request->fpDBIds;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListFpShotDB',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListFpShotDBResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListFpShotDBRequest $request
     *
     * @return ListFpShotDBResponse
     */
    public function listFpShotDB($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFpShotDBWithOptions($request, $runtime);
    }

    /**
     * @param ListFpShotFilesRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListFpShotFilesResponse
     */
    public function listFpShotFilesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fpDBId)) {
            $query['FpDBId'] = $request->fpDBId;
        }
        if (!Utils::isUnset($request->nextPageToken)) {
            $query['NextPageToken'] = $request->nextPageToken;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListFpShotFiles',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListFpShotFilesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListFpShotFilesRequest $request
     *
     * @return ListFpShotFilesResponse
     */
    public function listFpShotFiles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFpShotFilesWithOptions($request, $runtime);
    }

    /**
     * @param ListFpShotImportJobRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListFpShotImportJobResponse
     */
    public function listFpShotImportJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->jobIds)) {
            $query['JobIds'] = $request->jobIds;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListFpShotImportJob',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListFpShotImportJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListFpShotImportJobRequest $request
     *
     * @return ListFpShotImportJobResponse
     */
    public function listFpShotImportJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFpShotImportJobWithOptions($request, $runtime);
    }

    /**
     * @param ListJobRequest $request
     * @param RuntimeOptions $runtime
     *
     * @return ListJobResponse
     */
    public function listJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endOfJobCreatedTimeRange)) {
            $query['EndOfJobCreatedTimeRange'] = $request->endOfJobCreatedTimeRange;
        }
        if (!Utils::isUnset($request->maximumPageSize)) {
            $query['MaximumPageSize'] = $request->maximumPageSize;
        }
        if (!Utils::isUnset($request->nextPageToken)) {
            $query['NextPageToken'] = $request->nextPageToken;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pipelineId)) {
            $query['PipelineId'] = $request->pipelineId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->startOfJobCreatedTimeRange)) {
            $query['StartOfJobCreatedTimeRange'] = $request->startOfJobCreatedTimeRange;
        }
        if (!Utils::isUnset($request->state)) {
            $query['State'] = $request->state;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListJob',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListJobRequest $request
     *
     * @return ListJobResponse
     */
    public function listJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listJobWithOptions($request, $runtime);
    }

    /**
     * @param ListMediaWorkflowExecutionsRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ListMediaWorkflowExecutionsResponse
     */
    public function listMediaWorkflowExecutionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->inputFileURL)) {
            $query['InputFileURL'] = $request->inputFileURL;
        }
        if (!Utils::isUnset($request->maximumPageSize)) {
            $query['MaximumPageSize'] = $request->maximumPageSize;
        }
        if (!Utils::isUnset($request->mediaWorkflowId)) {
            $query['MediaWorkflowId'] = $request->mediaWorkflowId;
        }
        if (!Utils::isUnset($request->mediaWorkflowName)) {
            $query['MediaWorkflowName'] = $request->mediaWorkflowName;
        }
        if (!Utils::isUnset($request->nextPageToken)) {
            $query['NextPageToken'] = $request->nextPageToken;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListMediaWorkflowExecutions',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListMediaWorkflowExecutionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListMediaWorkflowExecutionsRequest $request
     *
     * @return ListMediaWorkflowExecutionsResponse
     */
    public function listMediaWorkflowExecutions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listMediaWorkflowExecutionsWithOptions($request, $runtime);
    }

    /**
     * @param QueryAnalysisJobListRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return QueryAnalysisJobListResponse
     */
    public function queryAnalysisJobListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->analysisJobIds)) {
            $query['AnalysisJobIds'] = $request->analysisJobIds;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryAnalysisJobList',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryAnalysisJobListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryAnalysisJobListRequest $request
     *
     * @return QueryAnalysisJobListResponse
     */
    public function queryAnalysisJobList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryAnalysisJobListWithOptions($request, $runtime);
    }

    /**
     * @param QueryEditingJobListRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return QueryEditingJobListResponse
     */
    public function queryEditingJobListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->jobIds)) {
            $query['JobIds'] = $request->jobIds;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryEditingJobList',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryEditingJobListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryEditingJobListRequest $request
     *
     * @return QueryEditingJobListResponse
     */
    public function queryEditingJobList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryEditingJobListWithOptions($request, $runtime);
    }

    /**
     * @param QueryFpDBDeleteJobListRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return QueryFpDBDeleteJobListResponse
     */
    public function queryFpDBDeleteJobListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->jobIds)) {
            $query['JobIds'] = $request->jobIds;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryFpDBDeleteJobList',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryFpDBDeleteJobListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryFpDBDeleteJobListRequest $request
     *
     * @return QueryFpDBDeleteJobListResponse
     */
    public function queryFpDBDeleteJobList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryFpDBDeleteJobListWithOptions($request, $runtime);
    }

    /**
     * @param QueryFpFileDeleteJobListRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return QueryFpFileDeleteJobListResponse
     */
    public function queryFpFileDeleteJobListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->jobIds)) {
            $query['JobIds'] = $request->jobIds;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryFpFileDeleteJobList',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryFpFileDeleteJobListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryFpFileDeleteJobListRequest $request
     *
     * @return QueryFpFileDeleteJobListResponse
     */
    public function queryFpFileDeleteJobList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryFpFileDeleteJobListWithOptions($request, $runtime);
    }

    /**
     * @param QueryFpShotJobListRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return QueryFpShotJobListResponse
     */
    public function queryFpShotJobListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->jobIds)) {
            $query['JobIds'] = $request->jobIds;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryFpShotJobList',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryFpShotJobListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryFpShotJobListRequest $request
     *
     * @return QueryFpShotJobListResponse
     */
    public function queryFpShotJobList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryFpShotJobListWithOptions($request, $runtime);
    }

    /**
     * @param QueryIProductionJobRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return QueryIProductionJobResponse
     */
    public function queryIProductionJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryIProductionJob',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryIProductionJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryIProductionJobRequest $request
     *
     * @return QueryIProductionJobResponse
     */
    public function queryIProductionJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryIProductionJobWithOptions($request, $runtime);
    }

    /**
     * @param QueryJobListRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return QueryJobListResponse
     */
    public function queryJobListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->jobIds)) {
            $query['JobIds'] = $request->jobIds;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryJobList',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryJobListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryJobListRequest $request
     *
     * @return QueryJobListResponse
     */
    public function queryJobList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryJobListWithOptions($request, $runtime);
    }

    /**
     * @param QueryMediaCensorJobDetailRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return QueryMediaCensorJobDetailResponse
     */
    public function queryMediaCensorJobDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->maximumPageSize)) {
            $query['MaximumPageSize'] = $request->maximumPageSize;
        }
        if (!Utils::isUnset($request->nextPageToken)) {
            $query['NextPageToken'] = $request->nextPageToken;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryMediaCensorJobDetail',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryMediaCensorJobDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryMediaCensorJobDetailRequest $request
     *
     * @return QueryMediaCensorJobDetailResponse
     */
    public function queryMediaCensorJobDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryMediaCensorJobDetailWithOptions($request, $runtime);
    }

    /**
     * @param QueryMediaCensorJobListRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return QueryMediaCensorJobListResponse
     */
    public function queryMediaCensorJobListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endOfJobCreatedTimeRange)) {
            $query['EndOfJobCreatedTimeRange'] = $request->endOfJobCreatedTimeRange;
        }
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->maximumPageSize)) {
            $query['MaximumPageSize'] = $request->maximumPageSize;
        }
        if (!Utils::isUnset($request->nextPageToken)) {
            $query['NextPageToken'] = $request->nextPageToken;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pipelineId)) {
            $query['PipelineId'] = $request->pipelineId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->startOfJobCreatedTimeRange)) {
            $query['StartOfJobCreatedTimeRange'] = $request->startOfJobCreatedTimeRange;
        }
        if (!Utils::isUnset($request->state)) {
            $query['State'] = $request->state;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryMediaCensorJobList',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryMediaCensorJobListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryMediaCensorJobListRequest $request
     *
     * @return QueryMediaCensorJobListResponse
     */
    public function queryMediaCensorJobList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryMediaCensorJobListWithOptions($request, $runtime);
    }

    /**
     * @param QueryMediaInfoJobListRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return QueryMediaInfoJobListResponse
     */
    public function queryMediaInfoJobListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->mediaInfoJobIds)) {
            $query['MediaInfoJobIds'] = $request->mediaInfoJobIds;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryMediaInfoJobList',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryMediaInfoJobListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryMediaInfoJobListRequest $request
     *
     * @return QueryMediaInfoJobListResponse
     */
    public function queryMediaInfoJobList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryMediaInfoJobListWithOptions($request, $runtime);
    }

    /**
     * @param QueryMediaListRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return QueryMediaListResponse
     */
    public function queryMediaListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->includeMediaInfo)) {
            $query['IncludeMediaInfo'] = $request->includeMediaInfo;
        }
        if (!Utils::isUnset($request->includePlayList)) {
            $query['IncludePlayList'] = $request->includePlayList;
        }
        if (!Utils::isUnset($request->includeSnapshotList)) {
            $query['IncludeSnapshotList'] = $request->includeSnapshotList;
        }
        if (!Utils::isUnset($request->includeSummaryList)) {
            $query['IncludeSummaryList'] = $request->includeSummaryList;
        }
        if (!Utils::isUnset($request->mediaIds)) {
            $query['MediaIds'] = $request->mediaIds;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryMediaList',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryMediaListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryMediaListRequest $request
     *
     * @return QueryMediaListResponse
     */
    public function queryMediaList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryMediaListWithOptions($request, $runtime);
    }

    /**
     * @param QueryMediaListByURLRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return QueryMediaListByURLResponse
     */
    public function queryMediaListByURLWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fileURLs)) {
            $query['FileURLs'] = $request->fileURLs;
        }
        if (!Utils::isUnset($request->includeMediaInfo)) {
            $query['IncludeMediaInfo'] = $request->includeMediaInfo;
        }
        if (!Utils::isUnset($request->includePlayList)) {
            $query['IncludePlayList'] = $request->includePlayList;
        }
        if (!Utils::isUnset($request->includeSnapshotList)) {
            $query['IncludeSnapshotList'] = $request->includeSnapshotList;
        }
        if (!Utils::isUnset($request->includeSummaryList)) {
            $query['IncludeSummaryList'] = $request->includeSummaryList;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryMediaListByURL',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryMediaListByURLResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryMediaListByURLRequest $request
     *
     * @return QueryMediaListByURLResponse
     */
    public function queryMediaListByURL($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryMediaListByURLWithOptions($request, $runtime);
    }

    /**
     * @param QueryMediaWorkflowExecutionListRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return QueryMediaWorkflowExecutionListResponse
     */
    public function queryMediaWorkflowExecutionListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->runIds)) {
            $query['RunIds'] = $request->runIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryMediaWorkflowExecutionList',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryMediaWorkflowExecutionListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryMediaWorkflowExecutionListRequest $request
     *
     * @return QueryMediaWorkflowExecutionListResponse
     */
    public function queryMediaWorkflowExecutionList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryMediaWorkflowExecutionListWithOptions($request, $runtime);
    }

    /**
     * @param QueryMediaWorkflowListRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return QueryMediaWorkflowListResponse
     */
    public function queryMediaWorkflowListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->mediaWorkflowIds)) {
            $query['MediaWorkflowIds'] = $request->mediaWorkflowIds;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryMediaWorkflowList',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryMediaWorkflowListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryMediaWorkflowListRequest $request
     *
     * @return QueryMediaWorkflowListResponse
     */
    public function queryMediaWorkflowList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryMediaWorkflowListWithOptions($request, $runtime);
    }

    /**
     * @param QueryPipelineListRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return QueryPipelineListResponse
     */
    public function queryPipelineListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pipelineIds)) {
            $query['PipelineIds'] = $request->pipelineIds;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryPipelineList',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryPipelineListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryPipelineListRequest $request
     *
     * @return QueryPipelineListResponse
     */
    public function queryPipelineList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryPipelineListWithOptions($request, $runtime);
    }

    /**
     * @param QuerySmarttagJobRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return QuerySmarttagJobResponse
     */
    public function querySmarttagJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->params)) {
            $query['Params'] = $request->params;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QuerySmarttagJob',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QuerySmarttagJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QuerySmarttagJobRequest $request
     *
     * @return QuerySmarttagJobResponse
     */
    public function querySmarttagJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySmarttagJobWithOptions($request, $runtime);
    }

    /**
     * @param QuerySmarttagTemplateListRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return QuerySmarttagTemplateListResponse
     */
    public function querySmarttagTemplateListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QuerySmarttagTemplateList',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QuerySmarttagTemplateListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QuerySmarttagTemplateListRequest $request
     *
     * @return QuerySmarttagTemplateListResponse
     */
    public function querySmarttagTemplateList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySmarttagTemplateListWithOptions($request, $runtime);
    }

    /**
     * @param QuerySnapshotJobListRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return QuerySnapshotJobListResponse
     */
    public function querySnapshotJobListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endOfJobCreatedTimeRange)) {
            $query['EndOfJobCreatedTimeRange'] = $request->endOfJobCreatedTimeRange;
        }
        if (!Utils::isUnset($request->maximumPageSize)) {
            $query['MaximumPageSize'] = $request->maximumPageSize;
        }
        if (!Utils::isUnset($request->nextPageToken)) {
            $query['NextPageToken'] = $request->nextPageToken;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pipelineId)) {
            $query['PipelineId'] = $request->pipelineId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->snapshotJobIds)) {
            $query['SnapshotJobIds'] = $request->snapshotJobIds;
        }
        if (!Utils::isUnset($request->startOfJobCreatedTimeRange)) {
            $query['StartOfJobCreatedTimeRange'] = $request->startOfJobCreatedTimeRange;
        }
        if (!Utils::isUnset($request->state)) {
            $query['State'] = $request->state;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QuerySnapshotJobList',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QuerySnapshotJobListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QuerySnapshotJobListRequest $request
     *
     * @return QuerySnapshotJobListResponse
     */
    public function querySnapshotJobList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySnapshotJobListWithOptions($request, $runtime);
    }

    /**
     * @param QueryTemplateListRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return QueryTemplateListResponse
     */
    public function queryTemplateListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->templateIds)) {
            $query['TemplateIds'] = $request->templateIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryTemplateList',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryTemplateListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryTemplateListRequest $request
     *
     * @return QueryTemplateListResponse
     */
    public function queryTemplateList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryTemplateListWithOptions($request, $runtime);
    }

    /**
     * @param QueryVideoQualityJobRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return QueryVideoQualityJobResponse
     */
    public function queryVideoQualityJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryVideoQualityJob',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryVideoQualityJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryVideoQualityJobRequest $request
     *
     * @return QueryVideoQualityJobResponse
     */
    public function queryVideoQualityJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryVideoQualityJobWithOptions($request, $runtime);
    }

    /**
     * @param QueryWaterMarkTemplateListRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return QueryWaterMarkTemplateListResponse
     */
    public function queryWaterMarkTemplateListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->waterMarkTemplateIds)) {
            $query['WaterMarkTemplateIds'] = $request->waterMarkTemplateIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryWaterMarkTemplateList',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryWaterMarkTemplateListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryWaterMarkTemplateListRequest $request
     *
     * @return QueryWaterMarkTemplateListResponse
     */
    public function queryWaterMarkTemplateList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryWaterMarkTemplateListWithOptions($request, $runtime);
    }

    /**
     * @param RegisterCustomFaceRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return RegisterCustomFaceResponse
     */
    public function registerCustomFaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->categoryId)) {
            $query['CategoryId'] = $request->categoryId;
        }
        if (!Utils::isUnset($request->imageUrl)) {
            $query['ImageUrl'] = $request->imageUrl;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->personId)) {
            $query['PersonId'] = $request->personId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RegisterCustomFace',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RegisterCustomFaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RegisterCustomFaceRequest $request
     *
     * @return RegisterCustomFaceResponse
     */
    public function registerCustomFace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->registerCustomFaceWithOptions($request, $runtime);
    }

    /**
     * @param RegisterCustomViewRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return RegisterCustomViewResponse
     */
    public function registerCustomViewWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->algorithm)) {
            $query['Algorithm'] = $request->algorithm;
        }
        if (!Utils::isUnset($request->customEntityId)) {
            $query['CustomEntityId'] = $request->customEntityId;
        }
        if (!Utils::isUnset($request->customGroupId)) {
            $query['CustomGroupId'] = $request->customGroupId;
        }
        if (!Utils::isUnset($request->imageUrl)) {
            $query['ImageUrl'] = $request->imageUrl;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RegisterCustomView',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RegisterCustomViewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RegisterCustomViewRequest $request
     *
     * @return RegisterCustomViewResponse
     */
    public function registerCustomView($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->registerCustomViewWithOptions($request, $runtime);
    }

    /**
     * @param ReportFpShotJobResultRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ReportFpShotJobResultResponse
     */
    public function reportFpShotJobResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->details)) {
            $query['Details'] = $request->details;
        }
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->result)) {
            $query['Result'] = $request->result;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ReportFpShotJobResult',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ReportFpShotJobResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ReportFpShotJobResultRequest $request
     *
     * @return ReportFpShotJobResultResponse
     */
    public function reportFpShotJobResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->reportFpShotJobResultWithOptions($request, $runtime);
    }

    /**
     * @param SearchMediaWorkflowRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return SearchMediaWorkflowResponse
     */
    public function searchMediaWorkflowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->stateList)) {
            $query['StateList'] = $request->stateList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SearchMediaWorkflow',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SearchMediaWorkflowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SearchMediaWorkflowRequest $request
     *
     * @return SearchMediaWorkflowResponse
     */
    public function searchMediaWorkflow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchMediaWorkflowWithOptions($request, $runtime);
    }

    /**
     * @param SearchPipelineRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return SearchPipelineResponse
     */
    public function searchPipelineWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->state)) {
            $query['State'] = $request->state;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SearchPipeline',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SearchPipelineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SearchPipelineRequest $request
     *
     * @return SearchPipelineResponse
     */
    public function searchPipeline($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchPipelineWithOptions($request, $runtime);
    }

    /**
     * @param SearchTemplateRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return SearchTemplateResponse
     */
    public function searchTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->state)) {
            $query['State'] = $request->state;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SearchTemplate',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SearchTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SearchTemplateRequest $request
     *
     * @return SearchTemplateResponse
     */
    public function searchTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchTemplateWithOptions($request, $runtime);
    }

    /**
     * @param SearchWaterMarkTemplateRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return SearchWaterMarkTemplateResponse
     */
    public function searchWaterMarkTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->state)) {
            $query['State'] = $request->state;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SearchWaterMarkTemplate',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SearchWaterMarkTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SearchWaterMarkTemplateRequest $request
     *
     * @return SearchWaterMarkTemplateResponse
     */
    public function searchWaterMarkTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchWaterMarkTemplateWithOptions($request, $runtime);
    }

    /**
     * @param SubmitAnalysisJobRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return SubmitAnalysisJobResponse
     */
    public function submitAnalysisJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->analysisConfig)) {
            $query['AnalysisConfig'] = $request->analysisConfig;
        }
        if (!Utils::isUnset($request->input)) {
            $query['Input'] = $request->input;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pipelineId)) {
            $query['PipelineId'] = $request->pipelineId;
        }
        if (!Utils::isUnset($request->priority)) {
            $query['Priority'] = $request->priority;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitAnalysisJob',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitAnalysisJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SubmitAnalysisJobRequest $request
     *
     * @return SubmitAnalysisJobResponse
     */
    public function submitAnalysisJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitAnalysisJobWithOptions($request, $runtime);
    }

    /**
     * @param SubmitFpDBDeleteJobRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return SubmitFpDBDeleteJobResponse
     */
    public function submitFpDBDeleteJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->delType)) {
            $query['DelType'] = $request->delType;
        }
        if (!Utils::isUnset($request->fpDBId)) {
            $query['FpDBId'] = $request->fpDBId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pipelineId)) {
            $query['PipelineId'] = $request->pipelineId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitFpDBDeleteJob',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitFpDBDeleteJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SubmitFpDBDeleteJobRequest $request
     *
     * @return SubmitFpDBDeleteJobResponse
     */
    public function submitFpDBDeleteJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitFpDBDeleteJobWithOptions($request, $runtime);
    }

    /**
     * @param SubmitFpFileDeleteJobRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return SubmitFpFileDeleteJobResponse
     */
    public function submitFpFileDeleteJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fileIds)) {
            $query['FileIds'] = $request->fileIds;
        }
        if (!Utils::isUnset($request->fpDBId)) {
            $query['FpDBId'] = $request->fpDBId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pipelineId)) {
            $query['PipelineId'] = $request->pipelineId;
        }
        if (!Utils::isUnset($request->primaryKeys)) {
            $query['PrimaryKeys'] = $request->primaryKeys;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitFpFileDeleteJob',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitFpFileDeleteJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SubmitFpFileDeleteJobRequest $request
     *
     * @return SubmitFpFileDeleteJobResponse
     */
    public function submitFpFileDeleteJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitFpFileDeleteJobWithOptions($request, $runtime);
    }

    /**
     * @param SubmitFpShotJobRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return SubmitFpShotJobResponse
     */
    public function submitFpShotJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fpShotConfig)) {
            $query['FpShotConfig'] = $request->fpShotConfig;
        }
        if (!Utils::isUnset($request->input)) {
            $query['Input'] = $request->input;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pipelineId)) {
            $query['PipelineId'] = $request->pipelineId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitFpShotJob',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitFpShotJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SubmitFpShotJobRequest $request
     *
     * @return SubmitFpShotJobResponse
     */
    public function submitFpShotJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitFpShotJobWithOptions($request, $runtime);
    }

    /**
     * @param SubmitIProductionJobRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return SubmitIProductionJobResponse
     */
    public function submitIProductionJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->functionName)) {
            $query['FunctionName'] = $request->functionName;
        }
        if (!Utils::isUnset($request->input)) {
            $query['Input'] = $request->input;
        }
        if (!Utils::isUnset($request->jobParams)) {
            $query['JobParams'] = $request->jobParams;
        }
        if (!Utils::isUnset($request->modelId)) {
            $query['ModelId'] = $request->modelId;
        }
        if (!Utils::isUnset($request->notifyUrl)) {
            $query['NotifyUrl'] = $request->notifyUrl;
        }
        if (!Utils::isUnset($request->output)) {
            $query['Output'] = $request->output;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pipelineId)) {
            $query['PipelineId'] = $request->pipelineId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->scheduleParams)) {
            $query['ScheduleParams'] = $request->scheduleParams;
        }
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitIProductionJob',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitIProductionJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SubmitIProductionJobRequest $request
     *
     * @return SubmitIProductionJobResponse
     */
    public function submitIProductionJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitIProductionJobWithOptions($request, $runtime);
    }

    /**
     * @param SubmitJobsRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return SubmitJobsResponse
     */
    public function submitJobsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->input)) {
            $query['Input'] = $request->input;
        }
        if (!Utils::isUnset($request->outputBucket)) {
            $query['OutputBucket'] = $request->outputBucket;
        }
        if (!Utils::isUnset($request->outputLocation)) {
            $query['OutputLocation'] = $request->outputLocation;
        }
        if (!Utils::isUnset($request->outputs)) {
            $query['Outputs'] = $request->outputs;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pipelineId)) {
            $query['PipelineId'] = $request->pipelineId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitJobs',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SubmitJobsRequest $request
     *
     * @return SubmitJobsResponse
     */
    public function submitJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitJobsWithOptions($request, $runtime);
    }

    /**
     * @param SubmitMediaCensorJobRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return SubmitMediaCensorJobResponse
     */
    public function submitMediaCensorJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->barrages)) {
            $query['Barrages'] = $request->barrages;
        }
        if (!Utils::isUnset($request->coverImages)) {
            $query['CoverImages'] = $request->coverImages;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->externalUrl)) {
            $query['ExternalUrl'] = $request->externalUrl;
        }
        if (!Utils::isUnset($request->input)) {
            $query['Input'] = $request->input;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pipelineId)) {
            $query['PipelineId'] = $request->pipelineId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->title)) {
            $query['Title'] = $request->title;
        }
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        if (!Utils::isUnset($request->videoCensorConfig)) {
            $query['VideoCensorConfig'] = $request->videoCensorConfig;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitMediaCensorJob',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitMediaCensorJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SubmitMediaCensorJobRequest $request
     *
     * @return SubmitMediaCensorJobResponse
     */
    public function submitMediaCensorJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitMediaCensorJobWithOptions($request, $runtime);
    }

    /**
     * @param SubmitMediaInfoJobRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return SubmitMediaInfoJobResponse
     */
    public function submitMediaInfoJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->async)) {
            $query['Async'] = $request->async;
        }
        if (!Utils::isUnset($request->input)) {
            $query['Input'] = $request->input;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pipelineId)) {
            $query['PipelineId'] = $request->pipelineId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitMediaInfoJob',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitMediaInfoJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SubmitMediaInfoJobRequest $request
     *
     * @return SubmitMediaInfoJobResponse
     */
    public function submitMediaInfoJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitMediaInfoJobWithOptions($request, $runtime);
    }

    /**
     * @param SubmitSmarttagJobRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return SubmitSmarttagJobResponse
     */
    public function submitSmarttagJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->content)) {
            $query['Content'] = $request->content;
        }
        if (!Utils::isUnset($request->contentAddr)) {
            $query['ContentAddr'] = $request->contentAddr;
        }
        if (!Utils::isUnset($request->input)) {
            $query['Input'] = $request->input;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->params)) {
            $query['Params'] = $request->params;
        }
        if (!Utils::isUnset($request->pipelineId)) {
            $query['PipelineId'] = $request->pipelineId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        if (!Utils::isUnset($request->title)) {
            $query['Title'] = $request->title;
        }
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitSmarttagJob',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitSmarttagJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SubmitSmarttagJobRequest $request
     *
     * @return SubmitSmarttagJobResponse
     */
    public function submitSmarttagJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitSmarttagJobWithOptions($request, $runtime);
    }

    /**
     * @param SubmitSnapshotJobRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return SubmitSnapshotJobResponse
     */
    public function submitSnapshotJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->input)) {
            $query['Input'] = $request->input;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pipelineId)) {
            $query['PipelineId'] = $request->pipelineId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->snapshotConfig)) {
            $query['SnapshotConfig'] = $request->snapshotConfig;
        }
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitSnapshotJob',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitSnapshotJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SubmitSnapshotJobRequest $request
     *
     * @return SubmitSnapshotJobResponse
     */
    public function submitSnapshotJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitSnapshotJobWithOptions($request, $runtime);
    }

    /**
     * @param SubmitVideoQualityJobRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return SubmitVideoQualityJobResponse
     */
    public function submitVideoQualityJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->input)) {
            $query['Input'] = $request->input;
        }
        if (!Utils::isUnset($request->jobParams)) {
            $query['JobParams'] = $request->jobParams;
        }
        if (!Utils::isUnset($request->modelId)) {
            $query['ModelId'] = $request->modelId;
        }
        if (!Utils::isUnset($request->notifyUrl)) {
            $query['NotifyUrl'] = $request->notifyUrl;
        }
        if (!Utils::isUnset($request->output)) {
            $query['Output'] = $request->output;
        }
        if (!Utils::isUnset($request->pipelineId)) {
            $query['PipelineId'] = $request->pipelineId;
        }
        if (!Utils::isUnset($request->scheduleParams)) {
            $query['ScheduleParams'] = $request->scheduleParams;
        }
        if (!Utils::isUnset($request->sourceType)) {
            $query['SourceType'] = $request->sourceType;
        }
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitVideoQualityJob',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitVideoQualityJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SubmitVideoQualityJobRequest $request
     *
     * @return SubmitVideoQualityJobResponse
     */
    public function submitVideoQualityJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitVideoQualityJobWithOptions($request, $runtime);
    }

    /**
     * @param TagCustomPersonRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return TagCustomPersonResponse
     */
    public function tagCustomPersonWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->categoryDescription)) {
            $query['CategoryDescription'] = $request->categoryDescription;
        }
        if (!Utils::isUnset($request->categoryId)) {
            $query['CategoryId'] = $request->categoryId;
        }
        if (!Utils::isUnset($request->categoryName)) {
            $query['CategoryName'] = $request->categoryName;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->personDescription)) {
            $query['PersonDescription'] = $request->personDescription;
        }
        if (!Utils::isUnset($request->personId)) {
            $query['PersonId'] = $request->personId;
        }
        if (!Utils::isUnset($request->personName)) {
            $query['PersonName'] = $request->personName;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'TagCustomPerson',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TagCustomPersonResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param TagCustomPersonRequest $request
     *
     * @return TagCustomPersonResponse
     */
    public function tagCustomPerson($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->tagCustomPersonWithOptions($request, $runtime);
    }

    /**
     * @param UnbindInputBucketRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UnbindInputBucketResponse
     */
    public function unbindInputBucketWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bucket)) {
            $query['Bucket'] = $request->bucket;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->roleArn)) {
            $query['RoleArn'] = $request->roleArn;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UnbindInputBucket',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UnbindInputBucketResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UnbindInputBucketRequest $request
     *
     * @return UnbindInputBucketResponse
     */
    public function unbindInputBucket($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unbindInputBucketWithOptions($request, $runtime);
    }

    /**
     * @param UnbindOutputBucketRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return UnbindOutputBucketResponse
     */
    public function unbindOutputBucketWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bucket)) {
            $query['Bucket'] = $request->bucket;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UnbindOutputBucket',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UnbindOutputBucketResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UnbindOutputBucketRequest $request
     *
     * @return UnbindOutputBucketResponse
     */
    public function unbindOutputBucket($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unbindOutputBucketWithOptions($request, $runtime);
    }

    /**
     * @param UnregisterCustomFaceRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return UnregisterCustomFaceResponse
     */
    public function unregisterCustomFaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->categoryId)) {
            $query['CategoryId'] = $request->categoryId;
        }
        if (!Utils::isUnset($request->faceId)) {
            $query['FaceId'] = $request->faceId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->personId)) {
            $query['PersonId'] = $request->personId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UnregisterCustomFace',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UnregisterCustomFaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UnregisterCustomFaceRequest $request
     *
     * @return UnregisterCustomFaceResponse
     */
    public function unregisterCustomFace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unregisterCustomFaceWithOptions($request, $runtime);
    }

    /**
     * @param UpdateMediaRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return UpdateMediaResponse
     */
    public function updateMediaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cateId)) {
            $query['CateId'] = $request->cateId;
        }
        if (!Utils::isUnset($request->coverURL)) {
            $query['CoverURL'] = $request->coverURL;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->mediaId)) {
            $query['MediaId'] = $request->mediaId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->tags)) {
            $query['Tags'] = $request->tags;
        }
        if (!Utils::isUnset($request->title)) {
            $query['Title'] = $request->title;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateMedia',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateMediaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateMediaRequest $request
     *
     * @return UpdateMediaResponse
     */
    public function updateMedia($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateMediaWithOptions($request, $runtime);
    }

    /**
     * @param UpdateMediaCategoryRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateMediaCategoryResponse
     */
    public function updateMediaCategoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cateId)) {
            $query['CateId'] = $request->cateId;
        }
        if (!Utils::isUnset($request->mediaId)) {
            $query['MediaId'] = $request->mediaId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateMediaCategory',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateMediaCategoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateMediaCategoryRequest $request
     *
     * @return UpdateMediaCategoryResponse
     */
    public function updateMediaCategory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateMediaCategoryWithOptions($request, $runtime);
    }

    /**
     * @param UpdateMediaCoverRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateMediaCoverResponse
     */
    public function updateMediaCoverWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->coverURL)) {
            $query['CoverURL'] = $request->coverURL;
        }
        if (!Utils::isUnset($request->mediaId)) {
            $query['MediaId'] = $request->mediaId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateMediaCover',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateMediaCoverResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateMediaCoverRequest $request
     *
     * @return UpdateMediaCoverResponse
     */
    public function updateMediaCover($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateMediaCoverWithOptions($request, $runtime);
    }

    /**
     * @param UpdateMediaPublishStateRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return UpdateMediaPublishStateResponse
     */
    public function updateMediaPublishStateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->mediaId)) {
            $query['MediaId'] = $request->mediaId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->publish)) {
            $query['Publish'] = $request->publish;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateMediaPublishState',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateMediaPublishStateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateMediaPublishStateRequest $request
     *
     * @return UpdateMediaPublishStateResponse
     */
    public function updateMediaPublishState($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateMediaPublishStateWithOptions($request, $runtime);
    }

    /**
     * @param UpdateMediaWorkflowRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateMediaWorkflowResponse
     */
    public function updateMediaWorkflowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->mediaWorkflowId)) {
            $query['MediaWorkflowId'] = $request->mediaWorkflowId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->topology)) {
            $query['Topology'] = $request->topology;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateMediaWorkflow',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateMediaWorkflowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateMediaWorkflowRequest $request
     *
     * @return UpdateMediaWorkflowResponse
     */
    public function updateMediaWorkflow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateMediaWorkflowWithOptions($request, $runtime);
    }

    /**
     * @param UpdateMediaWorkflowTriggerModeRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return UpdateMediaWorkflowTriggerModeResponse
     */
    public function updateMediaWorkflowTriggerModeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->mediaWorkflowId)) {
            $query['MediaWorkflowId'] = $request->mediaWorkflowId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->triggerMode)) {
            $query['TriggerMode'] = $request->triggerMode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateMediaWorkflowTriggerMode',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateMediaWorkflowTriggerModeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateMediaWorkflowTriggerModeRequest $request
     *
     * @return UpdateMediaWorkflowTriggerModeResponse
     */
    public function updateMediaWorkflowTriggerMode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateMediaWorkflowTriggerModeWithOptions($request, $runtime);
    }

    /**
     * @param UpdatePipelineRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UpdatePipelineResponse
     */
    public function updatePipelineWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->notifyConfig)) {
            $query['NotifyConfig'] = $request->notifyConfig;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pipelineId)) {
            $query['PipelineId'] = $request->pipelineId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->role)) {
            $query['Role'] = $request->role;
        }
        if (!Utils::isUnset($request->state)) {
            $query['State'] = $request->state;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdatePipeline',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdatePipelineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdatePipelineRequest $request
     *
     * @return UpdatePipelineResponse
     */
    public function updatePipeline($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updatePipelineWithOptions($request, $runtime);
    }

    /**
     * @param UpdateSmarttagTemplateRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateSmarttagTemplateResponse
     */
    public function updateSmarttagTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->analyseTypes)) {
            $query['AnalyseTypes'] = $request->analyseTypes;
        }
        if (!Utils::isUnset($request->faceCategoryIds)) {
            $query['FaceCategoryIds'] = $request->faceCategoryIds;
        }
        if (!Utils::isUnset($request->faceCustomParamsConfig)) {
            $query['FaceCustomParamsConfig'] = $request->faceCustomParamsConfig;
        }
        if (!Utils::isUnset($request->industry)) {
            $query['Industry'] = $request->industry;
        }
        if (!Utils::isUnset($request->isDefault)) {
            $query['IsDefault'] = $request->isDefault;
        }
        if (!Utils::isUnset($request->keywordConfig)) {
            $query['KeywordConfig'] = $request->keywordConfig;
        }
        if (!Utils::isUnset($request->knowledgeConfig)) {
            $query['KnowledgeConfig'] = $request->knowledgeConfig;
        }
        if (!Utils::isUnset($request->labelType)) {
            $query['LabelType'] = $request->labelType;
        }
        if (!Utils::isUnset($request->labelVersion)) {
            $query['LabelVersion'] = $request->labelVersion;
        }
        if (!Utils::isUnset($request->landmarkGroupIds)) {
            $query['LandmarkGroupIds'] = $request->landmarkGroupIds;
        }
        if (!Utils::isUnset($request->objectGroupIds)) {
            $query['ObjectGroupIds'] = $request->objectGroupIds;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->scene)) {
            $query['Scene'] = $request->scene;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        if (!Utils::isUnset($request->templateName)) {
            $query['TemplateName'] = $request->templateName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateSmarttagTemplate',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateSmarttagTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateSmarttagTemplateRequest $request
     *
     * @return UpdateSmarttagTemplateResponse
     */
    public function updateSmarttagTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSmarttagTemplateWithOptions($request, $runtime);
    }

    /**
     * @param UpdateTemplateRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateTemplateResponse
     */
    public function updateTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->audio)) {
            $query['Audio'] = $request->audio;
        }
        if (!Utils::isUnset($request->container)) {
            $query['Container'] = $request->container;
        }
        if (!Utils::isUnset($request->muxConfig)) {
            $query['MuxConfig'] = $request->muxConfig;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        if (!Utils::isUnset($request->transConfig)) {
            $query['TransConfig'] = $request->transConfig;
        }
        if (!Utils::isUnset($request->video)) {
            $query['Video'] = $request->video;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateTemplate',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateTemplateRequest $request
     *
     * @return UpdateTemplateResponse
     */
    public function updateTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateTemplateWithOptions($request, $runtime);
    }

    /**
     * @param UpdateWaterMarkTemplateRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return UpdateWaterMarkTemplateResponse
     */
    public function updateWaterMarkTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->config)) {
            $query['Config'] = $request->config;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->waterMarkTemplateId)) {
            $query['WaterMarkTemplateId'] = $request->waterMarkTemplateId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateWaterMarkTemplate',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateWaterMarkTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateWaterMarkTemplateRequest $request
     *
     * @return UpdateWaterMarkTemplateResponse
     */
    public function updateWaterMarkTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateWaterMarkTemplateWithOptions($request, $runtime);
    }
}
