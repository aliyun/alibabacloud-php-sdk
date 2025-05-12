<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618;

use AlibabaCloud\Dara\Models\RuntimeOptions;
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
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryCopyrightExtractJobRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryCopyrightExtractJobResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryCopyrightJobRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryCopyrightJobResponse;
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
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryTraceAbJobRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryTraceAbJobResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryTraceExtractJobRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryTraceExtractJobResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryTraceM3u8JobRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryTraceM3u8JobResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryWaterMarkTemplateListRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryWaterMarkTemplateListResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\RegisterCustomFaceRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\RegisterCustomFaceResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\RegisterCustomViewRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\RegisterCustomViewResponse;
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
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitCopyrightExtractJobRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitCopyrightExtractJobResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitCopyrightJobRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitCopyrightJobResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitFpDBDeleteJobRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitFpDBDeleteJobResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitFpFileDeleteJobRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitFpFileDeleteJobResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitFpShotJobRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitFpShotJobResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitImageCopyrightRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitImageCopyrightResponse;
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
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitTraceAbJobRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitTraceAbJobResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitTraceExtractJobRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitTraceExtractJobResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitTraceM3u8JobRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitTraceM3u8JobResponse;
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
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Mts extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap = [
            'ap-northeast-2-pop' => 'mts.aliyuncs.com',
            'ap-southeast-2' => 'mts.aliyuncs.com',
            'ap-southeast-3' => 'mts.aliyuncs.com',
            'cn-beijing-finance-1' => 'mts.aliyuncs.com',
            'cn-beijing-finance-pop' => 'mts.aliyuncs.com',
            'cn-beijing-gov-1' => 'mts.aliyuncs.com',
            'cn-beijing-nu16-b01' => 'mts.aliyuncs.com',
            'cn-chengdu' => 'mts.aliyuncs.com',
            'cn-edge-1' => 'mts.aliyuncs.com',
            'cn-fujian' => 'mts.aliyuncs.com',
            'cn-haidian-cm12-c01' => 'mts.aliyuncs.com',
            'cn-hangzhou-bj-b01' => 'mts.aliyuncs.com',
            'cn-hangzhou-finance' => 'mts.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'mts.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'mts.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'mts.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'mts.aliyuncs.com',
            'cn-hangzhou-test-306' => 'mts.aliyuncs.com',
            'cn-hongkong-finance-pop' => 'mts.aliyuncs.com',
            'cn-huhehaote-nebula-1' => 'mts.aliyuncs.com',
            'cn-north-2-gov-1' => 'mts.aliyuncs.com',
            'cn-qingdao-nebula' => 'mts.aliyuncs.com',
            'cn-shanghai-et15-b01' => 'mts.aliyuncs.com',
            'cn-shanghai-et2-b01' => 'mts.aliyuncs.com',
            'cn-shanghai-finance-1' => 'mts.aliyuncs.com',
            'cn-shanghai-inner' => 'mts.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'mts.aliyuncs.com',
            'cn-shenzhen-finance-1' => 'mts.aliyuncs.com',
            'cn-shenzhen-inner' => 'mts.aliyuncs.com',
            'cn-shenzhen-st4-d01' => 'mts.aliyuncs.com',
            'cn-shenzhen-su18-b01' => 'mts.aliyuncs.com',
            'cn-wuhan' => 'mts.aliyuncs.com',
            'cn-wulanchabu' => 'mts.aliyuncs.com',
            'cn-yushanfang' => 'mts.aliyuncs.com',
            'cn-zhangbei' => 'mts.aliyuncs.com',
            'cn-zhangbei-na61-b01' => 'mts.aliyuncs.com',
            'cn-zhangjiakou-na62-a01' => 'mts.aliyuncs.com',
            'cn-zhengzhou-nebula-1' => 'mts.aliyuncs.com',
            'eu-west-1-oxs' => 'mts.aliyuncs.com',
            'me-east-1' => 'mts.aliyuncs.com',
            'rus-west-1-pop' => 'mts.aliyuncs.com',
            'us-east-1' => 'mts.aliyuncs.com',
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
        if (null !== $endpoint) {
            return $endpoint;
        }

        if (null !== $endpointMap && null !== @$endpointMap[$regionId]) {
            return @$endpointMap[$regionId];
        }

        return Utils::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * Activates a media workflow.
     *
     * @remarks
     * You can call this operation to activate a media workflow that has been deactivated. After you activate a media workflow, you cannot modify the workflow information, such as the name, topology, or trigger mode. A media workflow is activated by default after it is created.
     * ### QPS limit
     * You can call this operation up to 100 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342832.html).
     *
     * @param request - ActivateMediaWorkflowRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ActivateMediaWorkflowResponse
     *
     * @param ActivateMediaWorkflowRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ActivateMediaWorkflowResponse
     */
    public function activateMediaWorkflowWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->mediaWorkflowId) {
            @$query['MediaWorkflowId'] = $request->mediaWorkflowId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ActivateMediaWorkflow',
            'version' => '2014-06-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ActivateMediaWorkflowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Activates a media workflow.
     *
     * @remarks
     * You can call this operation to activate a media workflow that has been deactivated. After you activate a media workflow, you cannot modify the workflow information, such as the name, topology, or trigger mode. A media workflow is activated by default after it is created.
     * ### QPS limit
     * You can call this operation up to 100 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342832.html).
     *
     * @param request - ActivateMediaWorkflowRequest
     *
     * @returns ActivateMediaWorkflowResponse
     *
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
     * Adds a media file.
     *
     * @remarks
     *   You can call this operation to process videos that are uploaded to Object Storage Service (OSS) but not processed. This way, you do not need to upload the videos to OSS again. If you have configured media workflows, OSS automatically notifies ApsaraVideo Media Processing (MPS) when a media file is uploaded to OSS. MPS automatically finds the corresponding workflow in the Active state based on the specified OSS bucket and object. Therefore, in most cases, you do not need to manually call the AddMedia operation to process the media file.
     * *   Media information is automatically obtained only when the specified media workflow is in the Active state. If no media workflow is specified or the specified media workflow is not in the Active state, media information is not obtained.
     * ### QPS limit
     * You can call this operation up to 100 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342832.html).
     *
     * @param request - AddMediaRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddMediaResponse
     *
     * @param AddMediaRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return AddMediaResponse
     */
    public function addMediaWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cateId) {
            @$query['CateId'] = $request->cateId;
        }

        if (null !== $request->coverURL) {
            @$query['CoverURL'] = $request->coverURL;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->fileURL) {
            @$query['FileURL'] = $request->fileURL;
        }

        if (null !== $request->inputUnbind) {
            @$query['InputUnbind'] = $request->inputUnbind;
        }

        if (null !== $request->mediaWorkflowId) {
            @$query['MediaWorkflowId'] = $request->mediaWorkflowId;
        }

        if (null !== $request->mediaWorkflowUserData) {
            @$query['MediaWorkflowUserData'] = $request->mediaWorkflowUserData;
        }

        if (null !== $request->overrideParams) {
            @$query['OverrideParams'] = $request->overrideParams;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        if (null !== $request->title) {
            @$query['Title'] = $request->title;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddMedia',
            'version' => '2014-06-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddMediaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds a media file.
     *
     * @remarks
     *   You can call this operation to process videos that are uploaded to Object Storage Service (OSS) but not processed. This way, you do not need to upload the videos to OSS again. If you have configured media workflows, OSS automatically notifies ApsaraVideo Media Processing (MPS) when a media file is uploaded to OSS. MPS automatically finds the corresponding workflow in the Active state based on the specified OSS bucket and object. Therefore, in most cases, you do not need to manually call the AddMedia operation to process the media file.
     * *   Media information is automatically obtained only when the specified media workflow is in the Active state. If no media workflow is specified or the specified media workflow is not in the Active state, media information is not obtained.
     * ### QPS limit
     * You can call this operation up to 100 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342832.html).
     *
     * @param request - AddMediaRequest
     *
     * @returns AddMediaResponse
     *
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
     * Adds a tag to a media file.
     *
     * @remarks
     * You can call this operation to add only one tag. To add multiple tags at a time, you can call the [UpdateMedia](https://help.aliyun.com/document_detail/44464.html) operation.
     * ### QPS limit
     * You can call this operation up to 100 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342832.html).
     *
     * @param request - AddMediaTagRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddMediaTagResponse
     *
     * @param AddMediaTagRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return AddMediaTagResponse
     */
    public function addMediaTagWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->mediaId) {
            @$query['MediaId'] = $request->mediaId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddMediaTag',
            'version' => '2014-06-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddMediaTagResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds a tag to a media file.
     *
     * @remarks
     * You can call this operation to add only one tag. To add multiple tags at a time, you can call the [UpdateMedia](https://help.aliyun.com/document_detail/44464.html) operation.
     * ### QPS limit
     * You can call this operation up to 100 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342832.html).
     *
     * @param request - AddMediaTagRequest
     *
     * @returns AddMediaTagResponse
     *
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
     * Creates a media workflow.
     *
     * @remarks
     *   You can call this operation to define the topology, activities, and dependencies of a media workflow. The topology is represented by a directed acyclic graph (DAG) in the console. For more information, see [Workflow activities](https://help.aliyun.com/document_detail/68494.html). You can view and run the workflows that are created by calling this operation in the ApsaraVideo Media Processing (MPS) console.
     * *   MPS media workflows can be automatically triggered only by using the prefix of the file path. Automatic triggering by using the suffix is not supported. For more information about the trigger rules, see [Workflow triggering rules for files](https://help.aliyun.com/document_detail/68574.html).
     * ### [](#qps)QPS limits
     * You can call this API operation up to 100 times per second per account. Requests that exceed this limit are dropped, and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](https://help.aliyun.com/document_detail/342832.html).
     *
     * @param request - AddMediaWorkflowRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddMediaWorkflowResponse
     *
     * @param AddMediaWorkflowRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return AddMediaWorkflowResponse
     */
    public function addMediaWorkflowWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->topology) {
            @$query['Topology'] = $request->topology;
        }

        if (null !== $request->triggerMode) {
            @$query['TriggerMode'] = $request->triggerMode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddMediaWorkflow',
            'version' => '2014-06-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddMediaWorkflowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a media workflow.
     *
     * @remarks
     *   You can call this operation to define the topology, activities, and dependencies of a media workflow. The topology is represented by a directed acyclic graph (DAG) in the console. For more information, see [Workflow activities](https://help.aliyun.com/document_detail/68494.html). You can view and run the workflows that are created by calling this operation in the ApsaraVideo Media Processing (MPS) console.
     * *   MPS media workflows can be automatically triggered only by using the prefix of the file path. Automatic triggering by using the suffix is not supported. For more information about the trigger rules, see [Workflow triggering rules for files](https://help.aliyun.com/document_detail/68574.html).
     * ### [](#qps)QPS limits
     * You can call this API operation up to 100 times per second per account. Requests that exceed this limit are dropped, and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](https://help.aliyun.com/document_detail/342832.html).
     *
     * @param request - AddMediaWorkflowRequest
     *
     * @returns AddMediaWorkflowResponse
     *
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
     * Adds an ApsaraVideo Media Processing (MPS) queue.
     *
     * @param request - AddPipelineRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddPipelineResponse
     *
     * @param AddPipelineRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return AddPipelineResponse
     */
    public function addPipelineWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->notifyConfig) {
            @$query['NotifyConfig'] = $request->notifyConfig;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->role) {
            @$query['Role'] = $request->role;
        }

        if (null !== $request->speed) {
            @$query['Speed'] = $request->speed;
        }

        if (null !== $request->speedLevel) {
            @$query['SpeedLevel'] = $request->speedLevel;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddPipeline',
            'version' => '2014-06-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddPipelineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds an ApsaraVideo Media Processing (MPS) queue.
     *
     * @param request - AddPipelineRequest
     *
     * @returns AddPipelineResponse
     *
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
     * 添加labelVersion、knowledgeConfig配置.
     *
     * @param request - AddSmarttagTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddSmarttagTemplateResponse
     *
     * @param AddSmarttagTemplateRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return AddSmarttagTemplateResponse
     */
    public function addSmarttagTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->analyseTypes) {
            @$query['AnalyseTypes'] = $request->analyseTypes;
        }

        if (null !== $request->faceCategoryIds) {
            @$query['FaceCategoryIds'] = $request->faceCategoryIds;
        }

        if (null !== $request->faceCustomParamsConfig) {
            @$query['FaceCustomParamsConfig'] = $request->faceCustomParamsConfig;
        }

        if (null !== $request->industry) {
            @$query['Industry'] = $request->industry;
        }

        if (null !== $request->isDefault) {
            @$query['IsDefault'] = $request->isDefault;
        }

        if (null !== $request->keywordConfig) {
            @$query['KeywordConfig'] = $request->keywordConfig;
        }

        if (null !== $request->knowledgeConfig) {
            @$query['KnowledgeConfig'] = $request->knowledgeConfig;
        }

        if (null !== $request->labelCustomCategoryIds) {
            @$query['LabelCustomCategoryIds'] = $request->labelCustomCategoryIds;
        }

        if (null !== $request->labelCustomParamsConfig) {
            @$query['LabelCustomParamsConfig'] = $request->labelCustomParamsConfig;
        }

        if (null !== $request->labelType) {
            @$query['LabelType'] = $request->labelType;
        }

        if (null !== $request->labelVersion) {
            @$query['LabelVersion'] = $request->labelVersion;
        }

        if (null !== $request->landmarkGroupIds) {
            @$query['LandmarkGroupIds'] = $request->landmarkGroupIds;
        }

        if (null !== $request->objectGroupIds) {
            @$query['ObjectGroupIds'] = $request->objectGroupIds;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->scene) {
            @$query['Scene'] = $request->scene;
        }

        if (null !== $request->templateConfig) {
            @$query['TemplateConfig'] = $request->templateConfig;
        }

        if (null !== $request->templateName) {
            @$query['TemplateName'] = $request->templateName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddSmarttagTemplate',
            'version' => '2014-06-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddSmarttagTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 添加labelVersion、knowledgeConfig配置.
     *
     * @param request - AddSmarttagTemplateRequest
     *
     * @returns AddSmarttagTemplateResponse
     *
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
     * Creates a custom transcoding template. You need to configure the information such as the container format, video stream settings, and audio stream settings.
     *
     * @remarks
     * When you call this operation, you need to set transcoding parameters such as those related to the container format, video stream, and audio stream. If you do not specify some parameters, streams that are generated by using the template do not contain the information specified by those parameters.
     * ### QPS limit
     * You can call this operation up to 100 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342832.html).
     *
     * @param request - AddTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddTemplateResponse
     *
     * @param AddTemplateRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return AddTemplateResponse
     */
    public function addTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->audio) {
            @$query['Audio'] = $request->audio;
        }

        if (null !== $request->container) {
            @$query['Container'] = $request->container;
        }

        if (null !== $request->muxConfig) {
            @$query['MuxConfig'] = $request->muxConfig;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->transConfig) {
            @$query['TransConfig'] = $request->transConfig;
        }

        if (null !== $request->video) {
            @$query['Video'] = $request->video;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddTemplate',
            'version' => '2014-06-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a custom transcoding template. You need to configure the information such as the container format, video stream settings, and audio stream settings.
     *
     * @remarks
     * When you call this operation, you need to set transcoding parameters such as those related to the container format, video stream, and audio stream. If you do not specify some parameters, streams that are generated by using the template do not contain the information specified by those parameters.
     * ### QPS limit
     * You can call this operation up to 100 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342832.html).
     *
     * @param request - AddTemplateRequest
     *
     * @returns AddTemplateResponse
     *
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
     * Creates a watermark template.
     *
     * @remarks
     * After you create a watermark template by calling this operation, you can specify the watermark template and watermark asset when you [submit a transcoding job](https://help.aliyun.com/document_detail/29226.html). This allows you to add watermark information to the output video.
     * ### QPS limit
     * You can call this operation up to 100 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342832.html).
     *
     * @param request - AddWaterMarkTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddWaterMarkTemplateResponse
     *
     * @param AddWaterMarkTemplateRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return AddWaterMarkTemplateResponse
     */
    public function addWaterMarkTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->config) {
            @$query['Config'] = $request->config;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddWaterMarkTemplate',
            'version' => '2014-06-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddWaterMarkTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a watermark template.
     *
     * @remarks
     * After you create a watermark template by calling this operation, you can specify the watermark template and watermark asset when you [submit a transcoding job](https://help.aliyun.com/document_detail/29226.html). This allows you to add watermark information to the output video.
     * ### QPS limit
     * You can call this operation up to 100 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342832.html).
     *
     * @param request - AddWaterMarkTemplateRequest
     *
     * @returns AddWaterMarkTemplateResponse
     *
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
     * Binds an input media bucket.
     *
     * @remarks
     * Before you call this operation to bind an input media bucket, you must create a media bucket. For more information, see [Add media buckets](https://help.aliyun.com/document_detail/42430.html).
     * ### QPS limit
     * You can call this operation up to 100 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342832.html).
     *
     * @param request - BindInputBucketRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BindInputBucketResponse
     *
     * @param BindInputBucketRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return BindInputBucketResponse
     */
    public function bindInputBucketWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bucket) {
            @$query['Bucket'] = $request->bucket;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->referer) {
            @$query['Referer'] = $request->referer;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BindInputBucket',
            'version' => '2014-06-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BindInputBucketResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Binds an input media bucket.
     *
     * @remarks
     * Before you call this operation to bind an input media bucket, you must create a media bucket. For more information, see [Add media buckets](https://help.aliyun.com/document_detail/42430.html).
     * ### QPS limit
     * You can call this operation up to 100 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342832.html).
     *
     * @param request - BindInputBucketRequest
     *
     * @returns BindInputBucketResponse
     *
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
     * Binds an output media bucket to the media library.
     *
     * @remarks
     * Before you call this operation to bind an output media bucket to the media library, you must create a media bucket. For more information, see [Add media buckets](https://help.aliyun.com/document_detail/42430.html).
     * ### QPS limit
     * You can call this operation up to 100 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342832.html).
     *
     * @param request - BindOutputBucketRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BindOutputBucketResponse
     *
     * @param BindOutputBucketRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return BindOutputBucketResponse
     */
    public function bindOutputBucketWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bucket) {
            @$query['Bucket'] = $request->bucket;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BindOutputBucket',
            'version' => '2014-06-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BindOutputBucketResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Binds an output media bucket to the media library.
     *
     * @remarks
     * Before you call this operation to bind an output media bucket to the media library, you must create a media bucket. For more information, see [Add media buckets](https://help.aliyun.com/document_detail/42430.html).
     * ### QPS limit
     * You can call this operation up to 100 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342832.html).
     *
     * @param request - BindOutputBucketRequest
     *
     * @returns BindOutputBucketResponse
     *
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
     * Cancels a transcoding job.
     *
     * @remarks
     *   You can cancel a transcoding job only if the job is in the Submitted state.
     * *   We recommend that you call the **UpdatePipeline** operation to set the status of the ApsaraVideo Media Processing (MPS) queue to Paused before you cancel a job. This suspends job scheduling in the MPS queue. After the job is canceled, you must set the status of the MPS queue back to Active so that the other jobs in the MPS queue can be scheduled.
     * ### QPS limit
     * You can call this operation up to 100 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342832.html).
     *
     * @param request - CancelJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CancelJobResponse
     *
     * @param CancelJobRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return CancelJobResponse
     */
    public function cancelJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CancelJob',
            'version' => '2014-06-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CancelJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Cancels a transcoding job.
     *
     * @remarks
     *   You can cancel a transcoding job only if the job is in the Submitted state.
     * *   We recommend that you call the **UpdatePipeline** operation to set the status of the ApsaraVideo Media Processing (MPS) queue to Paused before you cancel a job. This suspends job scheduling in the MPS queue. After the job is canceled, you must set the status of the MPS queue back to Active so that the other jobs in the MPS queue can be scheduled.
     * ### QPS limit
     * You can call this operation up to 100 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342832.html).
     *
     * @param request - CancelJobRequest
     *
     * @returns CancelJobResponse
     *
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
     * @param request - CreateCustomEntityRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateCustomEntityResponse
     *
     * @param CreateCustomEntityRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateCustomEntityResponse
     */
    public function createCustomEntityWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->algorithm) {
            @$query['Algorithm'] = $request->algorithm;
        }

        if (null !== $request->customEntityInfo) {
            @$query['CustomEntityInfo'] = $request->customEntityInfo;
        }

        if (null !== $request->customEntityName) {
            @$query['CustomEntityName'] = $request->customEntityName;
        }

        if (null !== $request->customGroupId) {
            @$query['CustomGroupId'] = $request->customGroupId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateCustomEntity',
            'version' => '2014-06-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateCustomEntityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CreateCustomEntityRequest
     *
     * @returns CreateCustomEntityResponse
     *
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
     * @param request - CreateCustomGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateCustomGroupResponse
     *
     * @param CreateCustomGroupRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateCustomGroupResponse
     */
    public function createCustomGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->algorithm) {
            @$query['Algorithm'] = $request->algorithm;
        }

        if (null !== $request->customGroupDescription) {
            @$query['CustomGroupDescription'] = $request->customGroupDescription;
        }

        if (null !== $request->customGroupName) {
            @$query['CustomGroupName'] = $request->customGroupName;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateCustomGroup',
            'version' => '2014-06-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateCustomGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CreateCustomGroupRequest
     *
     * @returns CreateCustomGroupResponse
     *
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
     * Submits a job of creating a media fingerprint library.
     *
     * @remarks
     *   You can call this operation to submit a job to create a video or text fingerprint library. You can use a text fingerprint library to store fingerprints for text.
     * *   You can submit a job of creating a text fingerprint library only in the China (Shanghai) region.
     * *   By default, you can submit up to 10 jobs of creating a video fingerprint library to an ApsaraVideo Media Processing (MPS) queue at a time. If you submit more than 10 jobs at a time, the call may fail.
     * ### QPS limit
     * You can call this operation up to 100 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342832.html).
     *
     * @param request - CreateFpShotDBRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateFpShotDBResponse
     *
     * @param CreateFpShotDBRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateFpShotDBResponse
     */
    public function createFpShotDBWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->config) {
            @$query['Config'] = $request->config;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->modelId) {
            @$query['ModelId'] = $request->modelId;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateFpShotDB',
            'version' => '2014-06-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateFpShotDBResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Submits a job of creating a media fingerprint library.
     *
     * @remarks
     *   You can call this operation to submit a job to create a video or text fingerprint library. You can use a text fingerprint library to store fingerprints for text.
     * *   You can submit a job of creating a text fingerprint library only in the China (Shanghai) region.
     * *   By default, you can submit up to 10 jobs of creating a video fingerprint library to an ApsaraVideo Media Processing (MPS) queue at a time. If you submit more than 10 jobs at a time, the call may fail.
     * ### QPS limit
     * You can call this operation up to 100 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342832.html).
     *
     * @param request - CreateFpShotDBRequest
     *
     * @returns CreateFpShotDBResponse
     *
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
     * Disables a media workflow.
     *
     * @remarks
     * The time when the media workflow was created.
     *
     * @param request - DeactivateMediaWorkflowRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeactivateMediaWorkflowResponse
     *
     * @param DeactivateMediaWorkflowRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DeactivateMediaWorkflowResponse
     */
    public function deactivateMediaWorkflowWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->mediaWorkflowId) {
            @$query['MediaWorkflowId'] = $request->mediaWorkflowId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeactivateMediaWorkflow',
            'version' => '2014-06-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeactivateMediaWorkflowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Disables a media workflow.
     *
     * @remarks
     * The time when the media workflow was created.
     *
     * @param request - DeactivateMediaWorkflowRequest
     *
     * @returns DeactivateMediaWorkflowResponse
     *
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
     * Deletes a custom entity from a custom library.
     *
     * @param request - DeleteCustomEntityRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteCustomEntityResponse
     *
     * @param DeleteCustomEntityRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteCustomEntityResponse
     */
    public function deleteCustomEntityWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->algorithm) {
            @$query['Algorithm'] = $request->algorithm;
        }

        if (null !== $request->customEntityId) {
            @$query['CustomEntityId'] = $request->customEntityId;
        }

        if (null !== $request->customGroupId) {
            @$query['CustomGroupId'] = $request->customGroupId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteCustomEntity',
            'version' => '2014-06-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteCustomEntityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a custom entity from a custom library.
     *
     * @param request - DeleteCustomEntityRequest
     *
     * @returns DeleteCustomEntityResponse
     *
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
     * Delete a custom image library.
     *
     * @remarks
     * You can call this operation only in the China (Beijing), China (Shanghai), and China (Hangzhou) regions.
     * ### QPS limit
     * You can call this operation up to 50 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342832.html).
     *
     * @param request - DeleteCustomGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteCustomGroupResponse
     *
     * @param DeleteCustomGroupRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteCustomGroupResponse
     */
    public function deleteCustomGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->algorithm) {
            @$query['Algorithm'] = $request->algorithm;
        }

        if (null !== $request->customGroupId) {
            @$query['CustomGroupId'] = $request->customGroupId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteCustomGroup',
            'version' => '2014-06-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteCustomGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Delete a custom image library.
     *
     * @remarks
     * You can call this operation only in the China (Beijing), China (Shanghai), and China (Hangzhou) regions.
     * ### QPS limit
     * You can call this operation up to 50 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342832.html).
     *
     * @param request - DeleteCustomGroupRequest
     *
     * @returns DeleteCustomGroupResponse
     *
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
     * @param request - DeleteCustomViewRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteCustomViewResponse
     *
     * @param DeleteCustomViewRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteCustomViewResponse
     */
    public function deleteCustomViewWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->algorithm) {
            @$query['Algorithm'] = $request->algorithm;
        }

        if (null !== $request->customEntityId) {
            @$query['CustomEntityId'] = $request->customEntityId;
        }

        if (null !== $request->customGroupId) {
            @$query['CustomGroupId'] = $request->customGroupId;
        }

        if (null !== $request->customViewId) {
            @$query['CustomViewId'] = $request->customViewId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteCustomView',
            'version' => '2014-06-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteCustomViewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DeleteCustomViewRequest
     *
     * @returns DeleteCustomViewResponse
     *
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
     * Deletes media files from ApsaraVideo Media Processing (MPS).
     *
     * @remarks
     * This operation allows you to logically delete a media file. The media file can no longer be processed, but the corresponding objects in the input and output Object Storage Service (OSS) buckets are retained.
     * ### QPS limit
     * You can call this operation up to 100 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342832.html).
     *
     * @param request - DeleteMediaRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteMediaResponse
     *
     * @param DeleteMediaRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteMediaResponse
     */
    public function deleteMediaWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->mediaIds) {
            @$query['MediaIds'] = $request->mediaIds;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteMedia',
            'version' => '2014-06-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteMediaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes media files from ApsaraVideo Media Processing (MPS).
     *
     * @remarks
     * This operation allows you to logically delete a media file. The media file can no longer be processed, but the corresponding objects in the input and output Object Storage Service (OSS) buckets are retained.
     * ### QPS limit
     * You can call this operation up to 100 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342832.html).
     *
     * @param request - DeleteMediaRequest
     *
     * @returns DeleteMediaResponse
     *
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
     * Removes a tag for a media file.
     *
     * @remarks
     * You can call this operation to remove only one tag at a time.
     * ### QPS limit
     * You can call this operation up to 100 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342832.html).
     *
     * @param request - DeleteMediaTagRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteMediaTagResponse
     *
     * @param DeleteMediaTagRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteMediaTagResponse
     */
    public function deleteMediaTagWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->mediaId) {
            @$query['MediaId'] = $request->mediaId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteMediaTag',
            'version' => '2014-06-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteMediaTagResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Removes a tag for a media file.
     *
     * @remarks
     * You can call this operation to remove only one tag at a time.
     * ### QPS limit
     * You can call this operation up to 100 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342832.html).
     *
     * @param request - DeleteMediaTagRequest
     *
     * @returns DeleteMediaTagResponse
     *
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
     * Deletes a media workflow. This does not affect workflow instances that are running.
     *
     * @remarks
     * After you delete or disable a workflow, the workflow cannot be used. In this case, the workflow is not automatically triggered when you upload a file to the bucket specified by the workflow.
     * ### QPS limit
     * You can call this operation up to 100 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342832.html).
     *
     * @param request - DeleteMediaWorkflowRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteMediaWorkflowResponse
     *
     * @param DeleteMediaWorkflowRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteMediaWorkflowResponse
     */
    public function deleteMediaWorkflowWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->mediaWorkflowId) {
            @$query['MediaWorkflowId'] = $request->mediaWorkflowId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteMediaWorkflow',
            'version' => '2014-06-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteMediaWorkflowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a media workflow. This does not affect workflow instances that are running.
     *
     * @remarks
     * After you delete or disable a workflow, the workflow cannot be used. In this case, the workflow is not automatically triggered when you upload a file to the bucket specified by the workflow.
     * ### QPS limit
     * You can call this operation up to 100 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342832.html).
     *
     * @param request - DeleteMediaWorkflowRequest
     *
     * @returns DeleteMediaWorkflowResponse
     *
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
     * Deletes an ApsaraVideo Media Processing (MPS) queue.
     *
     * @remarks
     * You can call this operation to delete only one MPS queue at a time.
     * ### QPS limit
     * You can call this operation up to 100 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342832.html).
     *
     * @param request - DeletePipelineRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeletePipelineResponse
     *
     * @param DeletePipelineRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeletePipelineResponse
     */
    public function deletePipelineWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pipelineId) {
            @$query['PipelineId'] = $request->pipelineId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeletePipeline',
            'version' => '2014-06-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeletePipelineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an ApsaraVideo Media Processing (MPS) queue.
     *
     * @remarks
     * You can call this operation to delete only one MPS queue at a time.
     * ### QPS limit
     * You can call this operation up to 100 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342832.html).
     *
     * @param request - DeletePipelineRequest
     *
     * @returns DeletePipelineResponse
     *
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
     * Deletes a template.
     *
     * @remarks
     * You can call this operation to delete only one template at a time.
     * ### QPS limit
     * You can call this operation up to 100 times per second per account. Requests that exceed this limit are dropped, and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342832.html).
     *
     * @param request - DeleteSmarttagTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteSmarttagTemplateResponse
     *
     * @param DeleteSmarttagTemplateRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteSmarttagTemplateResponse
     */
    public function deleteSmarttagTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteSmarttagTemplate',
            'version' => '2014-06-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteSmarttagTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a template.
     *
     * @remarks
     * You can call this operation to delete only one template at a time.
     * ### QPS limit
     * You can call this operation up to 100 times per second per account. Requests that exceed this limit are dropped, and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342832.html).
     *
     * @param request - DeleteSmarttagTemplateRequest
     *
     * @returns DeleteSmarttagTemplateResponse
     *
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
     * Deletes a custom transcoding template.
     *
     * @remarks
     * A custom transcoding template cannot be deleted if it is being used by a job that has been submitted.
     * ### QPS limit
     * You can call this operation up to 100 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342832.html).
     *
     * @param request - DeleteTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteTemplateResponse
     *
     * @param DeleteTemplateRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteTemplateResponse
     */
    public function deleteTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteTemplate',
            'version' => '2014-06-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a custom transcoding template.
     *
     * @remarks
     * A custom transcoding template cannot be deleted if it is being used by a job that has been submitted.
     * ### QPS limit
     * You can call this operation up to 100 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342832.html).
     *
     * @param request - DeleteTemplateRequest
     *
     * @returns DeleteTemplateResponse
     *
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
     * Deletes a watermark template.
     *
     * @remarks
     * A watermark template cannot be deleted if it is being used by a submitted job.
     * ### QPS limit
     * You can call this operation up to 100 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342832.html).
     *
     * @param request - DeleteWaterMarkTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteWaterMarkTemplateResponse
     *
     * @param DeleteWaterMarkTemplateRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteWaterMarkTemplateResponse
     */
    public function deleteWaterMarkTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->waterMarkTemplateId) {
            @$query['WaterMarkTemplateId'] = $request->waterMarkTemplateId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteWaterMarkTemplate',
            'version' => '2014-06-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteWaterMarkTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a watermark template.
     *
     * @remarks
     * A watermark template cannot be deleted if it is being used by a submitted job.
     * ### QPS limit
     * You can call this operation up to 100 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342832.html).
     *
     * @param request - DeleteWaterMarkTemplateRequest
     *
     * @returns DeleteWaterMarkTemplateResponse
     *
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
     * Reviews images and text and returns the review results.
     *
     * @remarks
     *   The moderation results are synchronously returned after the moderation is complete.
     * *   You can use the image and text moderation feature only in the China (Beijing), China (Shanghai), and Singapore regions.
     * ### QPS limits
     * You can call this operation up to 100 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342832.html).
     *
     * @param request - ImAuditRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ImAuditResponse
     *
     * @param ImAuditRequest $request
     * @param RuntimeOptions $runtime
     *
     * @return ImAuditResponse
     */
    public function imAuditWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizType) {
            @$query['BizType'] = $request->bizType;
        }

        if (null !== $request->contents) {
            @$query['Contents'] = $request->contents;
        }

        if (null !== $request->images) {
            @$query['Images'] = $request->images;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->scenes) {
            @$query['Scenes'] = $request->scenes;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ImAudit',
            'version' => '2014-06-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ImAuditResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Reviews images and text and returns the review results.
     *
     * @remarks
     *   The moderation results are synchronously returned after the moderation is complete.
     * *   You can use the image and text moderation feature only in the China (Beijing), China (Shanghai), and Singapore regions.
     * ### QPS limits
     * You can call this operation up to 100 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342832.html).
     *
     * @param request - ImAuditRequest
     *
     * @returns ImAuditResponse
     *
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
     * Submits a job of importing text files to a text fingerprint library.
     *
     * @remarks
     *   You can call this operation to import multiple text files to a text fingerprint library at a time. The system extracts fingerprints from the text files and saves the fingerprints to the text fingerprint library.
     * *   You can call this operation only in the China (Shanghai) region.
     * ### QPS limit
     * You can call this operation up to 100 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342832.html).
     *
     * @param request - ImportFpShotJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ImportFpShotJobResponse
     *
     * @param ImportFpShotJobRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ImportFpShotJobResponse
     */
    public function importFpShotJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fpDBId) {
            @$query['FpDBId'] = $request->fpDBId;
        }

        if (null !== $request->fpImportConfig) {
            @$query['FpImportConfig'] = $request->fpImportConfig;
        }

        if (null !== $request->input) {
            @$query['Input'] = $request->input;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pipelineId) {
            @$query['PipelineId'] = $request->pipelineId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->userData) {
            @$query['UserData'] = $request->userData;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ImportFpShotJob',
            'version' => '2014-06-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ImportFpShotJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Submits a job of importing text files to a text fingerprint library.
     *
     * @remarks
     *   You can call this operation to import multiple text files to a text fingerprint library at a time. The system extracts fingerprints from the text files and saves the fingerprints to the text fingerprint library.
     * *   You can call this operation only in the China (Shanghai) region.
     * ### QPS limit
     * You can call this operation up to 100 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342832.html).
     *
     * @param request - ImportFpShotJobRequest
     *
     * @returns ImportFpShotJobResponse
     *
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
     * Queries all media buckets bound to the media library.
     *
     * @remarks
     * A maximum of 100 media buckets can be returned.
     * ### QPS limit
     * You can call this operation up to 10 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342832.html).
     *
     * @param request - ListAllMediaBucketRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAllMediaBucketResponse
     *
     * @param ListAllMediaBucketRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListAllMediaBucketResponse
     */
    public function listAllMediaBucketWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maximumPageSize) {
            @$query['MaximumPageSize'] = $request->maximumPageSize;
        }

        if (null !== $request->nextPageToken) {
            @$query['NextPageToken'] = $request->nextPageToken;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAllMediaBucket',
            'version' => '2014-06-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAllMediaBucketResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries all media buckets bound to the media library.
     *
     * @remarks
     * A maximum of 100 media buckets can be returned.
     * ### QPS limit
     * You can call this operation up to 10 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342832.html).
     *
     * @param request - ListAllMediaBucketRequest
     *
     * @returns ListAllMediaBucketResponse
     *
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
     * Queries a list of entities in a custom library.
     *
     * @param request - ListCustomEntitiesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListCustomEntitiesResponse
     *
     * @param ListCustomEntitiesRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListCustomEntitiesResponse
     */
    public function listCustomEntitiesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->algorithm) {
            @$query['Algorithm'] = $request->algorithm;
        }

        if (null !== $request->customGroupId) {
            @$query['CustomGroupId'] = $request->customGroupId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListCustomEntities',
            'version' => '2014-06-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListCustomEntitiesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of entities in a custom library.
     *
     * @param request - ListCustomEntitiesRequest
     *
     * @returns ListCustomEntitiesResponse
     *
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
     * @param request - ListCustomGroupsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListCustomGroupsResponse
     *
     * @param ListCustomGroupsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListCustomGroupsResponse
     */
    public function listCustomGroupsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->algorithm) {
            @$query['Algorithm'] = $request->algorithm;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListCustomGroups',
            'version' => '2014-06-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListCustomGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ListCustomGroupsRequest
     *
     * @returns ListCustomGroupsResponse
     *
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
     * Queries the information about all figures and faces in a specific figure library.
     *
     * @remarks
     * You can specify the ID of a figure or a figure library to query the corresponding information. If neither the figure ID nor figure library ID is specified, the operation returns the information about all figures and faces in all figure libraries within the current RAM user.
     * ### QPS limit
     * You can call this operation up to 100 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342832.html).
     *
     * @param request - ListCustomPersonsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListCustomPersonsResponse
     *
     * @param ListCustomPersonsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListCustomPersonsResponse
     */
    public function listCustomPersonsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->categoryId) {
            @$query['CategoryId'] = $request->categoryId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->personId) {
            @$query['PersonId'] = $request->personId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListCustomPersons',
            'version' => '2014-06-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListCustomPersonsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about all figures and faces in a specific figure library.
     *
     * @remarks
     * You can specify the ID of a figure or a figure library to query the corresponding information. If neither the figure ID nor figure library ID is specified, the operation returns the information about all figures and faces in all figure libraries within the current RAM user.
     * ### QPS limit
     * You can call this operation up to 100 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342832.html).
     *
     * @param request - ListCustomPersonsRequest
     *
     * @returns ListCustomPersonsResponse
     *
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
     * @param request - ListCustomViewsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListCustomViewsResponse
     *
     * @param ListCustomViewsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListCustomViewsResponse
     */
    public function listCustomViewsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->algorithm) {
            @$query['Algorithm'] = $request->algorithm;
        }

        if (null !== $request->customEntityId) {
            @$query['CustomEntityId'] = $request->customEntityId;
        }

        if (null !== $request->customGroupId) {
            @$query['CustomGroupId'] = $request->customGroupId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListCustomViews',
            'version' => '2014-06-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListCustomViewsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ListCustomViewsRequest
     *
     * @returns ListCustomViewsResponse
     *
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
     * Queries media fingerprint libraries.
     *
     * @remarks
     *   You can call this operation to query the status and information about the media fingerprint libraries based on the specified IDs.
     * *   You can query text fingerprint libraries only in the China (Shanghai) region.
     * *   You can call this operation to query up to 10 media fingerprint libraries.
     * ### QPS limit
     * You can call this operation up to 500 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342832.html).
     *
     * @param request - ListFpShotDBRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListFpShotDBResponse
     *
     * @param ListFpShotDBRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListFpShotDBResponse
     */
    public function listFpShotDBWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fpDBIds) {
            @$query['FpDBIds'] = $request->fpDBIds;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListFpShotDB',
            'version' => '2014-06-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListFpShotDBResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries media fingerprint libraries.
     *
     * @remarks
     *   You can call this operation to query the status and information about the media fingerprint libraries based on the specified IDs.
     * *   You can query text fingerprint libraries only in the China (Shanghai) region.
     * *   You can call this operation to query up to 10 media fingerprint libraries.
     * ### QPS limit
     * You can call this operation up to 500 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342832.html).
     *
     * @param request - ListFpShotDBRequest
     *
     * @returns ListFpShotDBResponse
     *
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
     * Queries media files in a media fingerprint library.
     *
     * @remarks
     *   You can call this operation to query media files in a specific media fingerprint library based on the library ID. This operation supports paged queries.
     * *   You can call this operation only in the China (Beijing), China (Hangzhou), China (Shanghai), and Singapore regions.
     * ### QPS limit
     * You can call this operation up to 100 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342832.html).
     *
     * @param request - ListFpShotFilesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListFpShotFilesResponse
     *
     * @param ListFpShotFilesRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListFpShotFilesResponse
     */
    public function listFpShotFilesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->fpDBId) {
            @$query['FpDBId'] = $request->fpDBId;
        }

        if (null !== $request->nextPageToken) {
            @$query['NextPageToken'] = $request->nextPageToken;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListFpShotFiles',
            'version' => '2014-06-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListFpShotFilesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries media files in a media fingerprint library.
     *
     * @remarks
     *   You can call this operation to query media files in a specific media fingerprint library based on the library ID. This operation supports paged queries.
     * *   You can call this operation only in the China (Beijing), China (Hangzhou), China (Shanghai), and Singapore regions.
     * ### QPS limit
     * You can call this operation up to 100 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342832.html).
     *
     * @param request - ListFpShotFilesRequest
     *
     * @returns ListFpShotFilesResponse
     *
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
     * Queries jobs of importing text files to a text fingerprint library.
     *
     * @remarks
     * You can call this operation only in the China (Shanghai) region.
     * ### QPS limit
     * You can call this operation up to 100 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342832.html).
     *
     * @param request - ListFpShotImportJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListFpShotImportJobResponse
     *
     * @param ListFpShotImportJobRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListFpShotImportJobResponse
     */
    public function listFpShotImportJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->jobIds) {
            @$query['JobIds'] = $request->jobIds;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListFpShotImportJob',
            'version' => '2014-06-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListFpShotImportJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries jobs of importing text files to a text fingerprint library.
     *
     * @remarks
     * You can call this operation only in the China (Shanghai) region.
     * ### QPS limit
     * You can call this operation up to 100 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342832.html).
     *
     * @param request - ListFpShotImportJobRequest
     *
     * @returns ListFpShotImportJobResponse
     *
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
     * Traverses transcoding jobs.
     *
     * @remarks
     *   By default, the returned transcoding jobs are sorted by CreationTime in descending order.
     * *   You can call this operation to return transcoding jobs of the last 90 days. The jobs are returned based on the specified time range.
     * *   You can filter query results by configuring request parameters such as job status, creation time interval, and ApsaraVideo Media Processing (MPS) queue for transcoding.
     * *   By default, MPS does not allow you to access data across regions within the same account. Before you call this operation, make sure that the region that you specify is the same as the region of the transcoding jobs to be queried. Otherwise, this operation may fail to be called, or invalid information may be returned.
     * ### [](#qps)QPS limits
     * You can call this API operation up to 100 times per second per account. Requests that exceed this limit are dropped, and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](https://help.aliyun.com/document_detail/342832.html).
     *
     * @param request - ListJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListJobResponse
     *
     * @param ListJobRequest $request
     * @param RuntimeOptions $runtime
     *
     * @return ListJobResponse
     */
    public function listJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endOfJobCreatedTimeRange) {
            @$query['EndOfJobCreatedTimeRange'] = $request->endOfJobCreatedTimeRange;
        }

        if (null !== $request->maximumPageSize) {
            @$query['MaximumPageSize'] = $request->maximumPageSize;
        }

        if (null !== $request->nextPageToken) {
            @$query['NextPageToken'] = $request->nextPageToken;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pipelineId) {
            @$query['PipelineId'] = $request->pipelineId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->startOfJobCreatedTimeRange) {
            @$query['StartOfJobCreatedTimeRange'] = $request->startOfJobCreatedTimeRange;
        }

        if (null !== $request->state) {
            @$query['State'] = $request->state;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListJob',
            'version' => '2014-06-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Traverses transcoding jobs.
     *
     * @remarks
     *   By default, the returned transcoding jobs are sorted by CreationTime in descending order.
     * *   You can call this operation to return transcoding jobs of the last 90 days. The jobs are returned based on the specified time range.
     * *   You can filter query results by configuring request parameters such as job status, creation time interval, and ApsaraVideo Media Processing (MPS) queue for transcoding.
     * *   By default, MPS does not allow you to access data across regions within the same account. Before you call this operation, make sure that the region that you specify is the same as the region of the transcoding jobs to be queried. Otherwise, this operation may fail to be called, or invalid information may be returned.
     * ### [](#qps)QPS limits
     * You can call this API operation up to 100 times per second per account. Requests that exceed this limit are dropped, and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](https://help.aliyun.com/document_detail/342832.html).
     *
     * @param request - ListJobRequest
     *
     * @returns ListJobResponse
     *
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
     * Queries the execution instances of a media workflow.
     *
     * @remarks
     * This operation returns execution instances only in the recent 90 days.
     * ### QPS limit
     * You can call this operation up to 100 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342832.html).
     *
     * @param request - ListMediaWorkflowExecutionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListMediaWorkflowExecutionsResponse
     *
     * @param ListMediaWorkflowExecutionsRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ListMediaWorkflowExecutionsResponse
     */
    public function listMediaWorkflowExecutionsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->inputFileURL) {
            @$query['InputFileURL'] = $request->inputFileURL;
        }

        if (null !== $request->maximumPageSize) {
            @$query['MaximumPageSize'] = $request->maximumPageSize;
        }

        if (null !== $request->mediaWorkflowId) {
            @$query['MediaWorkflowId'] = $request->mediaWorkflowId;
        }

        if (null !== $request->mediaWorkflowName) {
            @$query['MediaWorkflowName'] = $request->mediaWorkflowName;
        }

        if (null !== $request->nextPageToken) {
            @$query['NextPageToken'] = $request->nextPageToken;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListMediaWorkflowExecutions',
            'version' => '2014-06-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListMediaWorkflowExecutionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the execution instances of a media workflow.
     *
     * @remarks
     * This operation returns execution instances only in the recent 90 days.
     * ### QPS limit
     * You can call this operation up to 100 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342832.html).
     *
     * @param request - ListMediaWorkflowExecutionsRequest
     *
     * @returns ListMediaWorkflowExecutionsResponse
     *
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
     * Queries the template analysis job and returns a list of available preset templates when the template analysis job is complete.
     *
     * @remarks
     * The time when the job was created.
     *
     * @param request - QueryAnalysisJobListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryAnalysisJobListResponse
     *
     * @param QueryAnalysisJobListRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return QueryAnalysisJobListResponse
     */
    public function queryAnalysisJobListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->analysisJobIds) {
            @$query['AnalysisJobIds'] = $request->analysisJobIds;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryAnalysisJobList',
            'version' => '2014-06-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryAnalysisJobListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the template analysis job and returns a list of available preset templates when the template analysis job is complete.
     *
     * @remarks
     * The time when the job was created.
     *
     * @param request - QueryAnalysisJobListRequest
     *
     * @returns QueryAnalysisJobListResponse
     *
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
     * 查询版权水印提取任务
     *
     * @param request - QueryCopyrightExtractJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryCopyrightExtractJobResponse
     *
     * @param QueryCopyrightExtractJobRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return QueryCopyrightExtractJobResponse
     */
    public function queryCopyrightExtractJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryCopyrightExtractJob',
            'version' => '2014-06-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryCopyrightExtractJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询版权水印提取任务
     *
     * @param request - QueryCopyrightExtractJobRequest
     *
     * @returns QueryCopyrightExtractJobResponse
     *
     * @param QueryCopyrightExtractJobRequest $request
     *
     * @return QueryCopyrightExtractJobResponse
     */
    public function queryCopyrightExtractJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryCopyrightExtractJobWithOptions($request, $runtime);
    }

    /**
     * 查询视频版权水印任务
     *
     * @param request - QueryCopyrightJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryCopyrightJobResponse
     *
     * @param QueryCopyrightJobRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return QueryCopyrightJobResponse
     */
    public function queryCopyrightJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->createTimeEnd) {
            @$query['CreateTimeEnd'] = $request->createTimeEnd;
        }

        if (null !== $request->createTimeStart) {
            @$query['CreateTimeStart'] = $request->createTimeStart;
        }

        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        if (null !== $request->level) {
            @$query['Level'] = $request->level;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryCopyrightJob',
            'version' => '2014-06-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryCopyrightJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询视频版权水印任务
     *
     * @param request - QueryCopyrightJobRequest
     *
     * @returns QueryCopyrightJobResponse
     *
     * @param QueryCopyrightJobRequest $request
     *
     * @return QueryCopyrightJobResponse
     */
    public function queryCopyrightJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryCopyrightJobWithOptions($request, $runtime);
    }

    /**
     * Queries the jobs of clearing or deleting a media fingerprint library.
     *
     * @remarks
     * You can call this operation to query the specified jobs of clearing or deleting a media fingerprint library based on the job IDs. If you do not specify job IDs, the system returns the latest 20 jobs that are submitted.
     * ### QPS limit
     * You can call this operation up to 100 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342832.html).
     *
     * @param request - QueryFpDBDeleteJobListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryFpDBDeleteJobListResponse
     *
     * @param QueryFpDBDeleteJobListRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return QueryFpDBDeleteJobListResponse
     */
    public function queryFpDBDeleteJobListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->jobIds) {
            @$query['JobIds'] = $request->jobIds;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryFpDBDeleteJobList',
            'version' => '2014-06-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryFpDBDeleteJobListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the jobs of clearing or deleting a media fingerprint library.
     *
     * @remarks
     * You can call this operation to query the specified jobs of clearing or deleting a media fingerprint library based on the job IDs. If you do not specify job IDs, the system returns the latest 20 jobs that are submitted.
     * ### QPS limit
     * You can call this operation up to 100 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342832.html).
     *
     * @param request - QueryFpDBDeleteJobListRequest
     *
     * @returns QueryFpDBDeleteJobListResponse
     *
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
     * Queries the jobs of deleting media files from a media fingerprint library.
     *
     * @remarks
     * You can call this operation to query the specified jobs of deleting media files from a media fingerprint library based on the job IDs. If you do not specify job IDs, the system returns the latest 20 jobs that are submitted.
     * ### QPS limit
     * You can call this operation up to 500 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342832.html).
     *
     * @param request - QueryFpFileDeleteJobListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryFpFileDeleteJobListResponse
     *
     * @param QueryFpFileDeleteJobListRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return QueryFpFileDeleteJobListResponse
     */
    public function queryFpFileDeleteJobListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->jobIds) {
            @$query['JobIds'] = $request->jobIds;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryFpFileDeleteJobList',
            'version' => '2014-06-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryFpFileDeleteJobListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the jobs of deleting media files from a media fingerprint library.
     *
     * @remarks
     * You can call this operation to query the specified jobs of deleting media files from a media fingerprint library based on the job IDs. If you do not specify job IDs, the system returns the latest 20 jobs that are submitted.
     * ### QPS limit
     * You can call this operation up to 500 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342832.html).
     *
     * @param request - QueryFpFileDeleteJobListRequest
     *
     * @returns QueryFpFileDeleteJobListResponse
     *
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
     * Queries media fingerprint analysis jobs. You can call this operation to query video fingerprint analysis jobs and text fingerprint analysis jobs.
     *
     * @remarks
     *   After a media fingerprint analysis job is submitted, the media fingerprinting service compares the fingerprints of the job input with those of the media files in the media fingerprint library. You can call this operation to query the job results.
     * *   You can query the results of a text fingerprint analysis job only in the China (Shanghai) region.
     * ### [](#qps)QPS limits
     * You can call this API operation up to 100 times per second per account. Requests that exceed this limit are dropped, and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](https://help.aliyun.com/document_detail/342832.html).
     *
     * @param request - QueryFpShotJobListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryFpShotJobListResponse
     *
     * @param QueryFpShotJobListRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return QueryFpShotJobListResponse
     */
    public function queryFpShotJobListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endOfJobCreatedTimeRange) {
            @$query['EndOfJobCreatedTimeRange'] = $request->endOfJobCreatedTimeRange;
        }

        if (null !== $request->jobIds) {
            @$query['JobIds'] = $request->jobIds;
        }

        if (null !== $request->maximumPageSize) {
            @$query['MaximumPageSize'] = $request->maximumPageSize;
        }

        if (null !== $request->nextPageToken) {
            @$query['NextPageToken'] = $request->nextPageToken;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pipelineId) {
            @$query['PipelineId'] = $request->pipelineId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->startOfJobCreatedTimeRange) {
            @$query['StartOfJobCreatedTimeRange'] = $request->startOfJobCreatedTimeRange;
        }

        if (null !== $request->state) {
            @$query['State'] = $request->state;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryFpShotJobList',
            'version' => '2014-06-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryFpShotJobListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries media fingerprint analysis jobs. You can call this operation to query video fingerprint analysis jobs and text fingerprint analysis jobs.
     *
     * @remarks
     *   After a media fingerprint analysis job is submitted, the media fingerprinting service compares the fingerprints of the job input with those of the media files in the media fingerprint library. You can call this operation to query the job results.
     * *   You can query the results of a text fingerprint analysis job only in the China (Shanghai) region.
     * ### [](#qps)QPS limits
     * You can call this API operation up to 100 times per second per account. Requests that exceed this limit are dropped, and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](https://help.aliyun.com/document_detail/342832.html).
     *
     * @param request - QueryFpShotJobListRequest
     *
     * @returns QueryFpShotJobListResponse
     *
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
     * @param request - QueryIProductionJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryIProductionJobResponse
     *
     * @param QueryIProductionJobRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return QueryIProductionJobResponse
     */
    public function queryIProductionJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryIProductionJob',
            'version' => '2014-06-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryIProductionJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryIProductionJobRequest
     *
     * @returns QueryIProductionJobResponse
     *
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
     * Queries transcoding jobs at a time by job ID.
     *
     * @remarks
     *   By default, returned jobs are sorted in descending order by CreationTime.
     * *   You can call this operation to query up to 10 transcoding jobs at a time.
     * *   If you do not set the JobIds parameter, the `InvalidParameter` error code is returned.
     * ## QPS limit
     * You can call this API operation up to 100 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limit](https://www.alibabacloud.com/help/en/apsaravideo-for-media-processing/latest/qps-limit).
     *
     * @param request - QueryJobListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryJobListResponse
     *
     * @param QueryJobListRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return QueryJobListResponse
     */
    public function queryJobListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->jobIds) {
            @$query['JobIds'] = $request->jobIds;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryJobList',
            'version' => '2014-06-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryJobListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries transcoding jobs at a time by job ID.
     *
     * @remarks
     *   By default, returned jobs are sorted in descending order by CreationTime.
     * *   You can call this operation to query up to 10 transcoding jobs at a time.
     * *   If you do not set the JobIds parameter, the `InvalidParameter` error code is returned.
     * ## QPS limit
     * You can call this API operation up to 100 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limit](https://www.alibabacloud.com/help/en/apsaravideo-for-media-processing/latest/qps-limit).
     *
     * @param request - QueryJobListRequest
     *
     * @returns QueryJobListResponse
     *
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
     * Queries the information about a content moderation job.
     *
     * @remarks
     * In the content moderation results, the moderation results of the video are sorted in ascending order by time into a timeline. If the video is long, the content moderation results are paginated, and the first page is returned. You can call this operation again to query the remaining moderation results of the video.
     * ### QPS limit
     * You can call this operation up to 100 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342832.html).
     *
     * @param request - QueryMediaCensorJobDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryMediaCensorJobDetailResponse
     *
     * @param QueryMediaCensorJobDetailRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return QueryMediaCensorJobDetailResponse
     */
    public function queryMediaCensorJobDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        if (null !== $request->maximumPageSize) {
            @$query['MaximumPageSize'] = $request->maximumPageSize;
        }

        if (null !== $request->nextPageToken) {
            @$query['NextPageToken'] = $request->nextPageToken;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryMediaCensorJobDetail',
            'version' => '2014-06-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryMediaCensorJobDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about a content moderation job.
     *
     * @remarks
     * In the content moderation results, the moderation results of the video are sorted in ascending order by time into a timeline. If the video is long, the content moderation results are paginated, and the first page is returned. You can call this operation again to query the remaining moderation results of the video.
     * ### QPS limit
     * You can call this operation up to 100 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342832.html).
     *
     * @param request - QueryMediaCensorJobDetailRequest
     *
     * @returns QueryMediaCensorJobDetailResponse
     *
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
     * Queries content moderation jobs.
     *
     * @remarks
     * You can call this operation to query only the content moderation jobs within three months.
     * ### QPS limit
     * You can call this operation up to 50 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342832.html).
     *
     * @param request - QueryMediaCensorJobListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryMediaCensorJobListResponse
     *
     * @param QueryMediaCensorJobListRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return QueryMediaCensorJobListResponse
     */
    public function queryMediaCensorJobListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endOfJobCreatedTimeRange) {
            @$query['EndOfJobCreatedTimeRange'] = $request->endOfJobCreatedTimeRange;
        }

        if (null !== $request->jobIds) {
            @$query['JobIds'] = $request->jobIds;
        }

        if (null !== $request->maximumPageSize) {
            @$query['MaximumPageSize'] = $request->maximumPageSize;
        }

        if (null !== $request->nextPageToken) {
            @$query['NextPageToken'] = $request->nextPageToken;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pipelineId) {
            @$query['PipelineId'] = $request->pipelineId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->startOfJobCreatedTimeRange) {
            @$query['StartOfJobCreatedTimeRange'] = $request->startOfJobCreatedTimeRange;
        }

        if (null !== $request->state) {
            @$query['State'] = $request->state;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryMediaCensorJobList',
            'version' => '2014-06-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryMediaCensorJobListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries content moderation jobs.
     *
     * @remarks
     * You can call this operation to query only the content moderation jobs within three months.
     * ### QPS limit
     * You can call this operation up to 50 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342832.html).
     *
     * @param request - QueryMediaCensorJobListRequest
     *
     * @returns QueryMediaCensorJobListResponse
     *
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
     * Queries the results of media information analysis jobs.
     *
     * @remarks
     *   In asynchronous mode, the media information can be retrieved only after the Message Service (MNS) callback of **submitting a media information job** is returned. If you have not retrieved the media information for a long period, the job may have failed.
     * *   You can call this operation to query up to 10 media information analysis jobs at a time.
     * *   By default, returned jobs are sorted in descending order by CreationTime.
     * ### QPS limit
     * You can call this operation up to 100 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342832.html).
     *
     * @param request - QueryMediaInfoJobListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryMediaInfoJobListResponse
     *
     * @param QueryMediaInfoJobListRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return QueryMediaInfoJobListResponse
     */
    public function queryMediaInfoJobListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->mediaInfoJobIds) {
            @$query['MediaInfoJobIds'] = $request->mediaInfoJobIds;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryMediaInfoJobList',
            'version' => '2014-06-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryMediaInfoJobListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the results of media information analysis jobs.
     *
     * @remarks
     *   In asynchronous mode, the media information can be retrieved only after the Message Service (MNS) callback of **submitting a media information job** is returned. If you have not retrieved the media information for a long period, the job may have failed.
     * *   You can call this operation to query up to 10 media information analysis jobs at a time.
     * *   By default, returned jobs are sorted in descending order by CreationTime.
     * ### QPS limit
     * You can call this operation up to 100 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342832.html).
     *
     * @param request - QueryMediaInfoJobListRequest
     *
     * @returns QueryMediaInfoJobListResponse
     *
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
     * Queries media files based on media file IDs.
     *
     * @remarks
     * You can call this operation to query up to 10 media files at a time.
     * ## QPS limit
     * You can call this operation up to 100 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation. For more information, see [QPS limits](https://www.alibabacloud.com/help/en/apsaravideo-for-media-processing/latest/qps-limit).
     *
     * @param request - QueryMediaListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryMediaListResponse
     *
     * @param QueryMediaListRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return QueryMediaListResponse
     */
    public function queryMediaListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->includeMediaInfo) {
            @$query['IncludeMediaInfo'] = $request->includeMediaInfo;
        }

        if (null !== $request->includePlayList) {
            @$query['IncludePlayList'] = $request->includePlayList;
        }

        if (null !== $request->includeSnapshotList) {
            @$query['IncludeSnapshotList'] = $request->includeSnapshotList;
        }

        if (null !== $request->includeSummaryList) {
            @$query['IncludeSummaryList'] = $request->includeSummaryList;
        }

        if (null !== $request->mediaIds) {
            @$query['MediaIds'] = $request->mediaIds;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryMediaList',
            'version' => '2014-06-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryMediaListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries media files based on media file IDs.
     *
     * @remarks
     * You can call this operation to query up to 10 media files at a time.
     * ## QPS limit
     * You can call this operation up to 100 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation. For more information, see [QPS limits](https://www.alibabacloud.com/help/en/apsaravideo-for-media-processing/latest/qps-limit).
     *
     * @param request - QueryMediaListRequest
     *
     * @returns QueryMediaListResponse
     *
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
     * Queries media files based on their Object Storage Service (OSS) URLs.
     *
     * @remarks
     *   You can call this operation to query up to 10 media files at a time.
     * *   Before you call this operation, you must call the [AddMedia](https://help.aliyun.com/document_detail/44458.html) operation to add media files.
     * *   You can call this operation to query only media files that are processed in a workflow. To obtain comprehensive information about a media file that is newly uploaded to OSS, you can call this operation after the corresponding workflow is complete. To query media files that are not processed in a workflow, you must call the [SubmitMediaInfoJob](https://help.aliyun.com/document_detail/29220.html) operation to submit a media information analysis job. After the job is complete, you can query the information about the media files.
     * ## QPS limit
     * You can call this API operation up to 100 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation. For more information, see [QPS limit](https://www.alibabacloud.com/help/en/apsaravideo-for-media-processing/latest/qps-limit).
     *
     * @param request - QueryMediaListByURLRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryMediaListByURLResponse
     *
     * @param QueryMediaListByURLRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return QueryMediaListByURLResponse
     */
    public function queryMediaListByURLWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fileURLs) {
            @$query['FileURLs'] = $request->fileURLs;
        }

        if (null !== $request->includeMediaInfo) {
            @$query['IncludeMediaInfo'] = $request->includeMediaInfo;
        }

        if (null !== $request->includePlayList) {
            @$query['IncludePlayList'] = $request->includePlayList;
        }

        if (null !== $request->includeSnapshotList) {
            @$query['IncludeSnapshotList'] = $request->includeSnapshotList;
        }

        if (null !== $request->includeSummaryList) {
            @$query['IncludeSummaryList'] = $request->includeSummaryList;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryMediaListByURL',
            'version' => '2014-06-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryMediaListByURLResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries media files based on their Object Storage Service (OSS) URLs.
     *
     * @remarks
     *   You can call this operation to query up to 10 media files at a time.
     * *   Before you call this operation, you must call the [AddMedia](https://help.aliyun.com/document_detail/44458.html) operation to add media files.
     * *   You can call this operation to query only media files that are processed in a workflow. To obtain comprehensive information about a media file that is newly uploaded to OSS, you can call this operation after the corresponding workflow is complete. To query media files that are not processed in a workflow, you must call the [SubmitMediaInfoJob](https://help.aliyun.com/document_detail/29220.html) operation to submit a media information analysis job. After the job is complete, you can query the information about the media files.
     * ## QPS limit
     * You can call this API operation up to 100 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation. For more information, see [QPS limit](https://www.alibabacloud.com/help/en/apsaravideo-for-media-processing/latest/qps-limit).
     *
     * @param request - QueryMediaListByURLRequest
     *
     * @returns QueryMediaListByURLResponse
     *
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
     * Queries media workflow execution instances.
     *
     * @remarks
     *   You can call this operation to query a maximum of 10 media workflow execution instances at a time.
     * *   Before you call this operation, make sure that the workflow pipeline is enabled. Otherwise, the workflow may not run as expected. For example, the following exceptions may occur: the workflow node is invalid and jobs created in the workflow cannot be executed.
     * ### QPS limit
     * You can call this operation up to 100 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342832.html).
     *
     * @param request - QueryMediaWorkflowExecutionListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryMediaWorkflowExecutionListResponse
     *
     * @param QueryMediaWorkflowExecutionListRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return QueryMediaWorkflowExecutionListResponse
     */
    public function queryMediaWorkflowExecutionListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->runIds) {
            @$query['RunIds'] = $request->runIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryMediaWorkflowExecutionList',
            'version' => '2014-06-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryMediaWorkflowExecutionListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries media workflow execution instances.
     *
     * @remarks
     *   You can call this operation to query a maximum of 10 media workflow execution instances at a time.
     * *   Before you call this operation, make sure that the workflow pipeline is enabled. Otherwise, the workflow may not run as expected. For example, the following exceptions may occur: the workflow node is invalid and jobs created in the workflow cannot be executed.
     * ### QPS limit
     * You can call this operation up to 100 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342832.html).
     *
     * @param request - QueryMediaWorkflowExecutionListRequest
     *
     * @returns QueryMediaWorkflowExecutionListResponse
     *
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
     * Queries registered media workflows.
     *
     * @remarks
     * You can call this operation to query up to 10 media workflows at a time.
     * ### QPS limit
     * You can call this operation up to 100 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342832.html).
     *
     * @param request - QueryMediaWorkflowListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryMediaWorkflowListResponse
     *
     * @param QueryMediaWorkflowListRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return QueryMediaWorkflowListResponse
     */
    public function queryMediaWorkflowListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->mediaWorkflowIds) {
            @$query['MediaWorkflowIds'] = $request->mediaWorkflowIds;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryMediaWorkflowList',
            'version' => '2014-06-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryMediaWorkflowListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries registered media workflows.
     *
     * @remarks
     * You can call this operation to query up to 10 media workflows at a time.
     * ### QPS limit
     * You can call this operation up to 100 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342832.html).
     *
     * @param request - QueryMediaWorkflowListRequest
     *
     * @returns QueryMediaWorkflowListResponse
     *
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
     * Queries an ApsaraVideo Media Processing (MPS) queue by using the ID of the queue.
     *
     * @remarks
     *   You can call this operation to query up to 10 MPS queues at a time.
     * *   If `"Code": "InvalidIdentity.ServiceDisabled","Message": "The request identity was not allowed operated.","Recommend"` is returned after you call this operation, check whether the RAM user that you use is assigned the AliyunMTSDefaultRole role to obtain the permissions on MPS and whether your Alibaba Cloud account has overdue payments.
     * ### QPS limit
     * You can call this operation up to 100 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342832.html).
     *
     * @param request - QueryPipelineListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryPipelineListResponse
     *
     * @param QueryPipelineListRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return QueryPipelineListResponse
     */
    public function queryPipelineListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pipelineIds) {
            @$query['PipelineIds'] = $request->pipelineIds;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryPipelineList',
            'version' => '2014-06-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryPipelineListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries an ApsaraVideo Media Processing (MPS) queue by using the ID of the queue.
     *
     * @remarks
     *   You can call this operation to query up to 10 MPS queues at a time.
     * *   If `"Code": "InvalidIdentity.ServiceDisabled","Message": "The request identity was not allowed operated.","Recommend"` is returned after you call this operation, check whether the RAM user that you use is assigned the AliyunMTSDefaultRole role to obtain the permissions on MPS and whether your Alibaba Cloud account has overdue payments.
     * ### QPS limit
     * You can call this operation up to 100 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342832.html).
     *
     * @param request - QueryPipelineListRequest
     *
     * @returns QueryPipelineListResponse
     *
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
     * 查询智能标签任务
     *
     * @param request - QuerySmarttagJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QuerySmarttagJobResponse
     *
     * @param QuerySmarttagJobRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return QuerySmarttagJobResponse
     */
    public function querySmarttagJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->params) {
            @$query['Params'] = $request->params;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QuerySmarttagJob',
            'version' => '2014-06-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QuerySmarttagJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询智能标签任务
     *
     * @param request - QuerySmarttagJobRequest
     *
     * @returns QuerySmarttagJobResponse
     *
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
     * Queries the analysis template of a smart tagging job.
     *
     * @remarks
     * If you call this operation to query the information about a smart tagging template, you must specify the template ID. Otherwise, the operation returns the information about all the templates that are created by the current RAM user.
     * ### QPS limit
     * You can call this operation up to 100 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342832.html).
     *
     * @param request - QuerySmarttagTemplateListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QuerySmarttagTemplateListResponse
     *
     * @param QuerySmarttagTemplateListRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return QuerySmarttagTemplateListResponse
     */
    public function querySmarttagTemplateListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QuerySmarttagTemplateList',
            'version' => '2014-06-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QuerySmarttagTemplateListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the analysis template of a smart tagging job.
     *
     * @remarks
     * If you call this operation to query the information about a smart tagging template, you must specify the template ID. Otherwise, the operation returns the information about all the templates that are created by the current RAM user.
     * ### QPS limit
     * You can call this operation up to 100 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342832.html).
     *
     * @param request - QuerySmarttagTemplateListRequest
     *
     * @returns QuerySmarttagTemplateListResponse
     *
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
     * Queries snapshot jobs.
     *
     * @remarks
     * The status of the snapshot jobs that you want to query.
     * *   **Submitted**: The job was submitted.
     * *   **Snapshoting**: The job is being processed.
     * *   **Success**: The job was successfully processed.
     * *   **Fail**: The job failed.
     *
     * @param request - QuerySnapshotJobListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QuerySnapshotJobListResponse
     *
     * @param QuerySnapshotJobListRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return QuerySnapshotJobListResponse
     */
    public function querySnapshotJobListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endOfJobCreatedTimeRange) {
            @$query['EndOfJobCreatedTimeRange'] = $request->endOfJobCreatedTimeRange;
        }

        if (null !== $request->maximumPageSize) {
            @$query['MaximumPageSize'] = $request->maximumPageSize;
        }

        if (null !== $request->nextPageToken) {
            @$query['NextPageToken'] = $request->nextPageToken;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pipelineId) {
            @$query['PipelineId'] = $request->pipelineId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->snapshotJobIds) {
            @$query['SnapshotJobIds'] = $request->snapshotJobIds;
        }

        if (null !== $request->startOfJobCreatedTimeRange) {
            @$query['StartOfJobCreatedTimeRange'] = $request->startOfJobCreatedTimeRange;
        }

        if (null !== $request->state) {
            @$query['State'] = $request->state;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QuerySnapshotJobList',
            'version' => '2014-06-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QuerySnapshotJobListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries snapshot jobs.
     *
     * @remarks
     * The status of the snapshot jobs that you want to query.
     * *   **Submitted**: The job was submitted.
     * *   **Snapshoting**: The job is being processed.
     * *   **Success**: The job was successfully processed.
     * *   **Fail**: The job failed.
     *
     * @param request - QuerySnapshotJobListRequest
     *
     * @returns QuerySnapshotJobListResponse
     *
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
     * You can call this operation to query up to 10 transcoding templates at a time.
     *
     * @remarks
     * The IDs of the transcoding templates that you want to query. You can query up to 10 transcoding templates at a time. Separate multiple IDs of custom transcoding templates with commas (,).
     *
     * @param request - QueryTemplateListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryTemplateListResponse
     *
     * @param QueryTemplateListRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return QueryTemplateListResponse
     */
    public function queryTemplateListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->templateIds) {
            @$query['TemplateIds'] = $request->templateIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryTemplateList',
            'version' => '2014-06-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryTemplateListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this operation to query up to 10 transcoding templates at a time.
     *
     * @remarks
     * The IDs of the transcoding templates that you want to query. You can query up to 10 transcoding templates at a time. Separate multiple IDs of custom transcoding templates with commas (,).
     *
     * @param request - QueryTemplateListRequest
     *
     * @returns QueryTemplateListResponse
     *
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
     * 查询视频溯源水印ab流任务
     *
     * @param request - QueryTraceAbJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryTraceAbJobResponse
     *
     * @param QueryTraceAbJobRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return QueryTraceAbJobResponse
     */
    public function queryTraceAbJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        if (null !== $request->mediaId) {
            @$query['MediaId'] = $request->mediaId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryTraceAbJob',
            'version' => '2014-06-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryTraceAbJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询视频溯源水印ab流任务
     *
     * @param request - QueryTraceAbJobRequest
     *
     * @returns QueryTraceAbJobResponse
     *
     * @param QueryTraceAbJobRequest $request
     *
     * @return QueryTraceAbJobResponse
     */
    public function queryTraceAbJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryTraceAbJobWithOptions($request, $runtime);
    }

    /**
     * 查询溯源水印提取任务
     *
     * @param request - QueryTraceExtractJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryTraceExtractJobResponse
     *
     * @param QueryTraceExtractJobRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return QueryTraceExtractJobResponse
     */
    public function queryTraceExtractJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryTraceExtractJob',
            'version' => '2014-06-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryTraceExtractJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询溯源水印提取任务
     *
     * @param request - QueryTraceExtractJobRequest
     *
     * @returns QueryTraceExtractJobResponse
     *
     * @param QueryTraceExtractJobRequest $request
     *
     * @return QueryTraceExtractJobResponse
     */
    public function queryTraceExtractJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryTraceExtractJobWithOptions($request, $runtime);
    }

    /**
     * 查询视频溯源水印m3u8任务
     *
     * @param request - QueryTraceM3u8JobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryTraceM3u8JobResponse
     *
     * @param QueryTraceM3u8JobRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return QueryTraceM3u8JobResponse
     */
    public function queryTraceM3u8JobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->createTimeEnd) {
            @$query['CreateTimeEnd'] = $request->createTimeEnd;
        }

        if (null !== $request->createTimeStart) {
            @$query['CreateTimeStart'] = $request->createTimeStart;
        }

        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryTraceM3u8Job',
            'version' => '2014-06-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryTraceM3u8JobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询视频溯源水印m3u8任务
     *
     * @param request - QueryTraceM3u8JobRequest
     *
     * @returns QueryTraceM3u8JobResponse
     *
     * @param QueryTraceM3u8JobRequest $request
     *
     * @return QueryTraceM3u8JobResponse
     */
    public function queryTraceM3u8Job($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryTraceM3u8JobWithOptions($request, $runtime);
    }

    /**
     * Queries watermark templates.
     *
     * @remarks
     * You can call this operation to query up to 10 watermark templates at a time.
     * ### QPS limit
     * You can call this operation up to 100 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342832.html).
     *
     * @param request - QueryWaterMarkTemplateListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryWaterMarkTemplateListResponse
     *
     * @param QueryWaterMarkTemplateListRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return QueryWaterMarkTemplateListResponse
     */
    public function queryWaterMarkTemplateListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->waterMarkTemplateIds) {
            @$query['WaterMarkTemplateIds'] = $request->waterMarkTemplateIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryWaterMarkTemplateList',
            'version' => '2014-06-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryWaterMarkTemplateListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries watermark templates.
     *
     * @remarks
     * You can call this operation to query up to 10 watermark templates at a time.
     * ### QPS limit
     * You can call this operation up to 100 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342832.html).
     *
     * @param request - QueryWaterMarkTemplateListRequest
     *
     * @returns QueryWaterMarkTemplateListResponse
     *
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
     * Registers a custom face.
     *
     * @remarks
     *   You can call this operation to register only one custom face at a time.
     * *   A maximum of 10 images can be registered for a custom face.
     * ### QPS limit
     * You can call this operation up to 100 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342832.html).
     *
     * @param request - RegisterCustomFaceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RegisterCustomFaceResponse
     *
     * @param RegisterCustomFaceRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return RegisterCustomFaceResponse
     */
    public function registerCustomFaceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->categoryId) {
            @$query['CategoryId'] = $request->categoryId;
        }

        if (null !== $request->imageUrl) {
            @$query['ImageUrl'] = $request->imageUrl;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->personId) {
            @$query['PersonId'] = $request->personId;
        }

        if (null !== $request->personName) {
            @$query['PersonName'] = $request->personName;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RegisterCustomFace',
            'version' => '2014-06-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RegisterCustomFaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Registers a custom face.
     *
     * @remarks
     *   You can call this operation to register only one custom face at a time.
     * *   A maximum of 10 images can be registered for a custom face.
     * ### QPS limit
     * You can call this operation up to 100 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342832.html).
     *
     * @param request - RegisterCustomFaceRequest
     *
     * @returns RegisterCustomFaceResponse
     *
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
     * 注册自定义实体项.
     *
     * @param request - RegisterCustomViewRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RegisterCustomViewResponse
     *
     * @param RegisterCustomViewRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return RegisterCustomViewResponse
     */
    public function registerCustomViewWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->algorithm) {
            @$query['Algorithm'] = $request->algorithm;
        }

        if (null !== $request->customEntityId) {
            @$query['CustomEntityId'] = $request->customEntityId;
        }

        if (null !== $request->customGroupId) {
            @$query['CustomGroupId'] = $request->customGroupId;
        }

        if (null !== $request->imageUrl) {
            @$query['ImageUrl'] = $request->imageUrl;
        }

        if (null !== $request->labelPrompt) {
            @$query['LabelPrompt'] = $request->labelPrompt;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RegisterCustomView',
            'version' => '2014-06-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RegisterCustomViewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 注册自定义实体项.
     *
     * @param request - RegisterCustomViewRequest
     *
     * @returns RegisterCustomViewResponse
     *
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
     * Queries media workflows in the specified state.
     *
     * @remarks
     * You can call this operation to query media workflows in the specified state. If you do not specify the state, all media workflows are queried by default.
     * ### QPS limit
     * You can call this operation up to 100 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342832.html).
     *
     * @param request - SearchMediaWorkflowRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SearchMediaWorkflowResponse
     *
     * @param SearchMediaWorkflowRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return SearchMediaWorkflowResponse
     */
    public function searchMediaWorkflowWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->stateList) {
            @$query['StateList'] = $request->stateList;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SearchMediaWorkflow',
            'version' => '2014-06-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SearchMediaWorkflowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries media workflows in the specified state.
     *
     * @remarks
     * You can call this operation to query media workflows in the specified state. If you do not specify the state, all media workflows are queried by default.
     * ### QPS limit
     * You can call this operation up to 100 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342832.html).
     *
     * @param request - SearchMediaWorkflowRequest
     *
     * @returns SearchMediaWorkflowResponse
     *
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
     * Searches for ApsaraVideo Media Processing (MPS) queues in the specified state.
     *
     * @remarks
     * You can call this operation to query MPS queues in the specified state. If you do not specify the state, all MPS queues are queried by default.
     * ### QPS limit
     * You can call this operation up to 100 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342832.html).
     *
     * @param request - SearchPipelineRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SearchPipelineResponse
     *
     * @param SearchPipelineRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return SearchPipelineResponse
     */
    public function searchPipelineWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->state) {
            @$query['State'] = $request->state;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SearchPipeline',
            'version' => '2014-06-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SearchPipelineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Searches for ApsaraVideo Media Processing (MPS) queues in the specified state.
     *
     * @remarks
     * You can call this operation to query MPS queues in the specified state. If you do not specify the state, all MPS queues are queried by default.
     * ### QPS limit
     * You can call this operation up to 100 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342832.html).
     *
     * @param request - SearchPipelineRequest
     *
     * @returns SearchPipelineResponse
     *
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
     * You can call this operation to query custom transcoding templates in the specified state.
     *
     * @remarks
     * You can call this operation up to 100 times per second. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342832.html).
     *
     * @param request - SearchTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SearchTemplateResponse
     *
     * @param SearchTemplateRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return SearchTemplateResponse
     */
    public function searchTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->namePrefix) {
            @$query['NamePrefix'] = $request->namePrefix;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->state) {
            @$query['State'] = $request->state;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SearchTemplate',
            'version' => '2014-06-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SearchTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this operation to query custom transcoding templates in the specified state.
     *
     * @remarks
     * You can call this operation up to 100 times per second. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342832.html).
     *
     * @param request - SearchTemplateRequest
     *
     * @returns SearchTemplateResponse
     *
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
     * Searches for watermark templates.
     *
     * @remarks
     * The total number of returned entries.
     *
     * @param request - SearchWaterMarkTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SearchWaterMarkTemplateResponse
     *
     * @param SearchWaterMarkTemplateRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return SearchWaterMarkTemplateResponse
     */
    public function searchWaterMarkTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->state) {
            @$query['State'] = $request->state;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SearchWaterMarkTemplate',
            'version' => '2014-06-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SearchWaterMarkTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Searches for watermark templates.
     *
     * @remarks
     * The total number of returned entries.
     *
     * @param request - SearchWaterMarkTemplateRequest
     *
     * @returns SearchWaterMarkTemplateResponse
     *
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
     * Submits a preset template analysis job.
     *
     * @remarks
     *   After you call the SubmitAnalysisJob operation to submit a preset template analysis job, ApsaraVideo Media Processing (MPS) intelligently analyzes the input file of the job and recommends a suitable preset template. You can call the [QueryAnalysisJobList](https://help.aliyun.com/document_detail/29224.html) operation to query the analysis result or enable asynchronous notifications to receive the analysis result.
     * *   The analysis result is retained only for two weeks after it is generated. The analysis result is deleted after two weeks. If you use the recommended preset template in a transcoding job after two weeks, the job fails, and the `AnalysisResultNotFound` error code is returned.
     * ### QPS limit
     * You can call this operation up to 100 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342832.html).
     *
     * @param request - SubmitAnalysisJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubmitAnalysisJobResponse
     *
     * @param SubmitAnalysisJobRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return SubmitAnalysisJobResponse
     */
    public function submitAnalysisJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->analysisConfig) {
            @$query['AnalysisConfig'] = $request->analysisConfig;
        }

        if (null !== $request->input) {
            @$query['Input'] = $request->input;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pipelineId) {
            @$query['PipelineId'] = $request->pipelineId;
        }

        if (null !== $request->priority) {
            @$query['Priority'] = $request->priority;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->userData) {
            @$query['UserData'] = $request->userData;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SubmitAnalysisJob',
            'version' => '2014-06-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SubmitAnalysisJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Submits a preset template analysis job.
     *
     * @remarks
     *   After you call the SubmitAnalysisJob operation to submit a preset template analysis job, ApsaraVideo Media Processing (MPS) intelligently analyzes the input file of the job and recommends a suitable preset template. You can call the [QueryAnalysisJobList](https://help.aliyun.com/document_detail/29224.html) operation to query the analysis result or enable asynchronous notifications to receive the analysis result.
     * *   The analysis result is retained only for two weeks after it is generated. The analysis result is deleted after two weeks. If you use the recommended preset template in a transcoding job after two weeks, the job fails, and the `AnalysisResultNotFound` error code is returned.
     * ### QPS limit
     * You can call this operation up to 100 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342832.html).
     *
     * @param request - SubmitAnalysisJobRequest
     *
     * @returns SubmitAnalysisJobResponse
     *
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
     * 提交版权水印提取任务
     *
     * @param request - SubmitCopyrightExtractJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubmitCopyrightExtractJobResponse
     *
     * @param SubmitCopyrightExtractJobRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return SubmitCopyrightExtractJobResponse
     */
    public function submitCopyrightExtractJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->callBack) {
            @$query['CallBack'] = $request->callBack;
        }

        if (null !== $request->input) {
            @$query['Input'] = $request->input;
        }

        if (null !== $request->params) {
            @$query['Params'] = $request->params;
        }

        if (null !== $request->url) {
            @$query['Url'] = $request->url;
        }

        if (null !== $request->userData) {
            @$query['UserData'] = $request->userData;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SubmitCopyrightExtractJob',
            'version' => '2014-06-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SubmitCopyrightExtractJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 提交版权水印提取任务
     *
     * @param request - SubmitCopyrightExtractJobRequest
     *
     * @returns SubmitCopyrightExtractJobResponse
     *
     * @param SubmitCopyrightExtractJobRequest $request
     *
     * @return SubmitCopyrightExtractJobResponse
     */
    public function submitCopyrightExtractJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitCopyrightExtractJobWithOptions($request, $runtime);
    }

    /**
     * 提交视频版权水印.
     *
     * @param request - SubmitCopyrightJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubmitCopyrightJobResponse
     *
     * @param SubmitCopyrightJobRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return SubmitCopyrightJobResponse
     */
    public function submitCopyrightJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->callBack) {
            @$query['CallBack'] = $request->callBack;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->input) {
            @$query['Input'] = $request->input;
        }

        if (null !== $request->level) {
            @$query['Level'] = $request->level;
        }

        if (null !== $request->message) {
            @$query['Message'] = $request->message;
        }

        if (null !== $request->output) {
            @$query['Output'] = $request->output;
        }

        if (null !== $request->params) {
            @$query['Params'] = $request->params;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->totalTime) {
            @$query['TotalTime'] = $request->totalTime;
        }

        if (null !== $request->url) {
            @$query['Url'] = $request->url;
        }

        if (null !== $request->userData) {
            @$query['UserData'] = $request->userData;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SubmitCopyrightJob',
            'version' => '2014-06-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SubmitCopyrightJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 提交视频版权水印.
     *
     * @param request - SubmitCopyrightJobRequest
     *
     * @returns SubmitCopyrightJobResponse
     *
     * @param SubmitCopyrightJobRequest $request
     *
     * @return SubmitCopyrightJobResponse
     */
    public function submitCopyrightJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitCopyrightJobWithOptions($request, $runtime);
    }

    /**
     * Submits a job of clearing or deleting a media fingerprint library.
     *
     * @remarks
     * You can call this operation to clear or delete the specified media fingerprint library based on the library ID. If you clear a media fingerprint library, the content in the library is deleted, but the library is not deleted. If you delete a media fingerprint library, both the library and the content in the library are deleted. If you do not specify the operation type, the system clears the media fingerprint library by default.
     * ### QPS limit
     * You can call this operation up to 100 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342832.html).
     *
     * @param request - SubmitFpDBDeleteJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubmitFpDBDeleteJobResponse
     *
     * @param SubmitFpDBDeleteJobRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return SubmitFpDBDeleteJobResponse
     */
    public function submitFpDBDeleteJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->delType) {
            @$query['DelType'] = $request->delType;
        }

        if (null !== $request->fpDBId) {
            @$query['FpDBId'] = $request->fpDBId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pipelineId) {
            @$query['PipelineId'] = $request->pipelineId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->userData) {
            @$query['UserData'] = $request->userData;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SubmitFpDBDeleteJob',
            'version' => '2014-06-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SubmitFpDBDeleteJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Submits a job of clearing or deleting a media fingerprint library.
     *
     * @remarks
     * You can call this operation to clear or delete the specified media fingerprint library based on the library ID. If you clear a media fingerprint library, the content in the library is deleted, but the library is not deleted. If you delete a media fingerprint library, both the library and the content in the library are deleted. If you do not specify the operation type, the system clears the media fingerprint library by default.
     * ### QPS limit
     * You can call this operation up to 100 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342832.html).
     *
     * @param request - SubmitFpDBDeleteJobRequest
     *
     * @returns SubmitFpDBDeleteJobResponse
     *
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
     * Submits a job of deleting media files from a media fingerprint library.
     *
     * @remarks
     * ## [](#)Limits
     * *   You can call this operation to delete up to 200 media files from a media fingerprint library at a time.
     * *   This operation is available in the following regions: China (Beijing), China (Hangzhou), China (Shanghai), and Singapore.
     * ## [](#qps-)QPS limits
     * You can call this operation up to 10 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](https://help.aliyun.com/document_detail/342832.html).
     *
     * @param request - SubmitFpFileDeleteJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubmitFpFileDeleteJobResponse
     *
     * @param SubmitFpFileDeleteJobRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return SubmitFpFileDeleteJobResponse
     */
    public function submitFpFileDeleteJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fileIds) {
            @$query['FileIds'] = $request->fileIds;
        }

        if (null !== $request->fpDBId) {
            @$query['FpDBId'] = $request->fpDBId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pipelineId) {
            @$query['PipelineId'] = $request->pipelineId;
        }

        if (null !== $request->primaryKeys) {
            @$query['PrimaryKeys'] = $request->primaryKeys;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->userData) {
            @$query['UserData'] = $request->userData;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SubmitFpFileDeleteJob',
            'version' => '2014-06-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SubmitFpFileDeleteJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Submits a job of deleting media files from a media fingerprint library.
     *
     * @remarks
     * ## [](#)Limits
     * *   You can call this operation to delete up to 200 media files from a media fingerprint library at a time.
     * *   This operation is available in the following regions: China (Beijing), China (Hangzhou), China (Shanghai), and Singapore.
     * ## [](#qps-)QPS limits
     * You can call this operation up to 10 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](https://help.aliyun.com/document_detail/342832.html).
     *
     * @param request - SubmitFpFileDeleteJobRequest
     *
     * @returns SubmitFpFileDeleteJobResponse
     *
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
     * Submits a media fingerprint analysis job to query the media fingerprint repository for a media file with the identical or similar fingerprint as the input file.
     *
     * @remarks
     *   You can call this operation to submit a video, audio, image, or text fingerprint analysis job.
     * *   This operation asynchronously submits a job. The query results may not have been generated when the response is returned. After the results are generated, an asynchronous message is returned.
     * *   You can submit a text fingerprint analysis job only in the China (Shanghai) region.
     * *   The input file of the job must be in one of the following formats:
     *     *   Image formats: JPEG, PNG, and BMP.
     *     *   Video formats: MP4, AVI, MKV, MPG, TS, MOV, FLV, MXF.
     *     *   Video encoding formats: MPEG2, MPEG4, H264, HEVC, and WMV.
     * ### QPS limit
     * You can call this operation up to 150 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342832.html).
     *
     * @param request - SubmitFpShotJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubmitFpShotJobResponse
     *
     * @param SubmitFpShotJobRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return SubmitFpShotJobResponse
     */
    public function submitFpShotJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fpShotConfig) {
            @$query['FpShotConfig'] = $request->fpShotConfig;
        }

        if (null !== $request->input) {
            @$query['Input'] = $request->input;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pipelineId) {
            @$query['PipelineId'] = $request->pipelineId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->userData) {
            @$query['UserData'] = $request->userData;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SubmitFpShotJob',
            'version' => '2014-06-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SubmitFpShotJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Submits a media fingerprint analysis job to query the media fingerprint repository for a media file with the identical or similar fingerprint as the input file.
     *
     * @remarks
     *   You can call this operation to submit a video, audio, image, or text fingerprint analysis job.
     * *   This operation asynchronously submits a job. The query results may not have been generated when the response is returned. After the results are generated, an asynchronous message is returned.
     * *   You can submit a text fingerprint analysis job only in the China (Shanghai) region.
     * *   The input file of the job must be in one of the following formats:
     *     *   Image formats: JPEG, PNG, and BMP.
     *     *   Video formats: MP4, AVI, MKV, MPG, TS, MOV, FLV, MXF.
     *     *   Video encoding formats: MPEG2, MPEG4, H264, HEVC, and WMV.
     * ### QPS limit
     * You can call this operation up to 150 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342832.html).
     *
     * @param request - SubmitFpShotJobRequest
     *
     * @returns SubmitFpShotJobResponse
     *
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
     * @remarks
     *   Jobs that are submitted by calling this operation run in an asynchronous manner. After a job is added to the ApsaraVideo Media Processing (MPS) queue, the job is scheduled to run. You can call the [QueryIProductionJob](https://help.aliyun.com/document_detail/170217.html) operation or configure a callback to query the job result.
     * *   Capabilities provided by the intelligent production feature vary based on the region. Before you call this operation to submit an intelligent production job, check whether the job is supported in the region in which your service is activated. For more information, see [Regions and endpoints](https://help.aliyun.com/document_detail/43248.html).
     * ### [](#qps)QPS limit
     * You can call this API operation up to 100 times per second per account. Requests that exceed this limit are dropped, and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](https://help.aliyun.com/document_detail/342832.html).
     *
     * @param request - SubmitIProductionJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubmitIProductionJobResponse
     *
     * @param SubmitIProductionJobRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return SubmitIProductionJobResponse
     */
    public function submitIProductionJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->functionName) {
            @$query['FunctionName'] = $request->functionName;
        }

        if (null !== $request->input) {
            @$query['Input'] = $request->input;
        }

        if (null !== $request->jobParams) {
            @$query['JobParams'] = $request->jobParams;
        }

        if (null !== $request->modelId) {
            @$query['ModelId'] = $request->modelId;
        }

        if (null !== $request->notifyUrl) {
            @$query['NotifyUrl'] = $request->notifyUrl;
        }

        if (null !== $request->output) {
            @$query['Output'] = $request->output;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pipelineId) {
            @$query['PipelineId'] = $request->pipelineId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->scheduleParams) {
            @$query['ScheduleParams'] = $request->scheduleParams;
        }

        if (null !== $request->userData) {
            @$query['UserData'] = $request->userData;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SubmitIProductionJob',
            'version' => '2014-06-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SubmitIProductionJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @remarks
     *   Jobs that are submitted by calling this operation run in an asynchronous manner. After a job is added to the ApsaraVideo Media Processing (MPS) queue, the job is scheduled to run. You can call the [QueryIProductionJob](https://help.aliyun.com/document_detail/170217.html) operation or configure a callback to query the job result.
     * *   Capabilities provided by the intelligent production feature vary based on the region. Before you call this operation to submit an intelligent production job, check whether the job is supported in the region in which your service is activated. For more information, see [Regions and endpoints](https://help.aliyun.com/document_detail/43248.html).
     * ### [](#qps)QPS limit
     * You can call this API operation up to 100 times per second per account. Requests that exceed this limit are dropped, and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](https://help.aliyun.com/document_detail/342832.html).
     *
     * @param request - SubmitIProductionJobRequest
     *
     * @returns SubmitIProductionJobResponse
     *
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
     * 提交图片版权水印任务
     *
     * @param request - SubmitImageCopyrightRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubmitImageCopyrightResponse
     *
     * @param SubmitImageCopyrightRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return SubmitImageCopyrightResponse
     */
    public function submitImageCopyrightWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->message) {
            @$query['Message'] = $request->message;
        }

        if (null !== $request->output) {
            @$query['Output'] = $request->output;
        }

        if (null !== $request->params) {
            @$query['Params'] = $request->params;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SubmitImageCopyright',
            'version' => '2014-06-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SubmitImageCopyrightResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 提交图片版权水印任务
     *
     * @param request - SubmitImageCopyrightRequest
     *
     * @returns SubmitImageCopyrightResponse
     *
     * @param SubmitImageCopyrightRequest $request
     *
     * @return SubmitImageCopyrightResponse
     */
    public function submitImageCopyright($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitImageCopyrightWithOptions($request, $runtime);
    }

    /**
     * Submits transcoding jobs. If the transcoding jobs and workflows created in the ApsaraVideo Media Processing (MPS) console cannot meet your business requirements, you can call the SubmitJobs operation to submit transcoding jobs. Specify transcoding parameters as required when you call the SubmitJobs operation.
     *
     * @remarks
     *   SubmitJobs is an asynchronous operation. After you submit transcoding jobs, the jobs are added to an MPS queue to be scheduled and run. The transcoding jobs may not have been complete when the response is returned. After you call this operation, you can call the [QueryJobList](https://help.aliyun.com/document_detail/602836.html) operation to query the job results. You can also associate a Message Service (MNS) queue or topic with the MPS queue to receive notifications on the jobs. For more information, see [Receive notifications](https://help.aliyun.com/document_detail/42618.html).
     * *   An input file can be up to 100 GB in size. If the size of the input file exceeds this limit, the job may fail.
     * *   If you use an **intelligent preset template** to transcode an input file, you must first call the [SubmitAnalysisJob](https://help.aliyun.com/document_detail/29223.html) operation to submit a preset template analysis job. After the analysis job is complete, you can call the [QueryAnalysisJobList](https://help.aliyun.com/document_detail/29224.html)operation to obtain the available preset templates for the input file. When you submit a transcoding job, set TemplateId to the ID of an available preset template. If you specify a preset template that is not in the available preset templates, the transcoding job fails.
     * *   If you use a **static preset template** to transcode an input file, you do not need to submit a preset template analysis job.
     * *   If you want to use multiple accounts in MPS, you can create Resource Access Management (RAM) users by using your Alibaba Cloud account. For more information, see [Create a RAM user and grant permissions to the RAM user](https://help.aliyun.com/document_detail/42841.html). If the Alibaba Cloud account that is used to query transcoding jobs is not the one that is used to submit the transcoding jobs, no data is returned.
     * *   For information about transcoding FAQ, see [FAQ about MPS](https://help.aliyun.com/document_detail/38986.html).
     * ### [](#qps)QPS limits
     * You can call this operation up to 100 times per second per account. Requests that exceed this limit are dropped, and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](https://help.aliyun.com/document_detail/342832.html).
     *
     * @param request - SubmitJobsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubmitJobsResponse
     *
     * @param SubmitJobsRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return SubmitJobsResponse
     */
    public function submitJobsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->input) {
            @$query['Input'] = $request->input;
        }

        if (null !== $request->outputBucket) {
            @$query['OutputBucket'] = $request->outputBucket;
        }

        if (null !== $request->outputLocation) {
            @$query['OutputLocation'] = $request->outputLocation;
        }

        if (null !== $request->outputs) {
            @$query['Outputs'] = $request->outputs;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pipelineId) {
            @$query['PipelineId'] = $request->pipelineId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SubmitJobs',
            'version' => '2014-06-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SubmitJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Submits transcoding jobs. If the transcoding jobs and workflows created in the ApsaraVideo Media Processing (MPS) console cannot meet your business requirements, you can call the SubmitJobs operation to submit transcoding jobs. Specify transcoding parameters as required when you call the SubmitJobs operation.
     *
     * @remarks
     *   SubmitJobs is an asynchronous operation. After you submit transcoding jobs, the jobs are added to an MPS queue to be scheduled and run. The transcoding jobs may not have been complete when the response is returned. After you call this operation, you can call the [QueryJobList](https://help.aliyun.com/document_detail/602836.html) operation to query the job results. You can also associate a Message Service (MNS) queue or topic with the MPS queue to receive notifications on the jobs. For more information, see [Receive notifications](https://help.aliyun.com/document_detail/42618.html).
     * *   An input file can be up to 100 GB in size. If the size of the input file exceeds this limit, the job may fail.
     * *   If you use an **intelligent preset template** to transcode an input file, you must first call the [SubmitAnalysisJob](https://help.aliyun.com/document_detail/29223.html) operation to submit a preset template analysis job. After the analysis job is complete, you can call the [QueryAnalysisJobList](https://help.aliyun.com/document_detail/29224.html)operation to obtain the available preset templates for the input file. When you submit a transcoding job, set TemplateId to the ID of an available preset template. If you specify a preset template that is not in the available preset templates, the transcoding job fails.
     * *   If you use a **static preset template** to transcode an input file, you do not need to submit a preset template analysis job.
     * *   If you want to use multiple accounts in MPS, you can create Resource Access Management (RAM) users by using your Alibaba Cloud account. For more information, see [Create a RAM user and grant permissions to the RAM user](https://help.aliyun.com/document_detail/42841.html). If the Alibaba Cloud account that is used to query transcoding jobs is not the one that is used to submit the transcoding jobs, no data is returned.
     * *   For information about transcoding FAQ, see [FAQ about MPS](https://help.aliyun.com/document_detail/38986.html).
     * ### [](#qps)QPS limits
     * You can call this operation up to 100 times per second per account. Requests that exceed this limit are dropped, and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](https://help.aliyun.com/document_detail/342832.html).
     *
     * @param request - SubmitJobsRequest
     *
     * @returns SubmitJobsResponse
     *
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
     * Submits a content moderation job.
     *
     * @remarks
     * The job that you submit by calling this operation is run in asynchronous mode. The job is added to an ApsaraVideo Media Processing (MPS) queue and then scheduled, queued, and run. You can call the [QueryMediaCensorJobDetail](https://help.aliyun.com/document_detail/91779.html) operation or configure an asynchronous notification to obtain the job result.
     * ### QPS limit
     * You can call this operation up to 100 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342832.html).
     *
     * @param request - SubmitMediaCensorJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubmitMediaCensorJobResponse
     *
     * @param SubmitMediaCensorJobRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return SubmitMediaCensorJobResponse
     */
    public function submitMediaCensorJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->barrages) {
            @$query['Barrages'] = $request->barrages;
        }

        if (null !== $request->coverImages) {
            @$query['CoverImages'] = $request->coverImages;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->externalUrl) {
            @$query['ExternalUrl'] = $request->externalUrl;
        }

        if (null !== $request->input) {
            @$query['Input'] = $request->input;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pipelineId) {
            @$query['PipelineId'] = $request->pipelineId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->title) {
            @$query['Title'] = $request->title;
        }

        if (null !== $request->userData) {
            @$query['UserData'] = $request->userData;
        }

        if (null !== $request->videoCensorConfig) {
            @$query['VideoCensorConfig'] = $request->videoCensorConfig;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SubmitMediaCensorJob',
            'version' => '2014-06-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SubmitMediaCensorJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Submits a content moderation job.
     *
     * @remarks
     * The job that you submit by calling this operation is run in asynchronous mode. The job is added to an ApsaraVideo Media Processing (MPS) queue and then scheduled, queued, and run. You can call the [QueryMediaCensorJobDetail](https://help.aliyun.com/document_detail/91779.html) operation or configure an asynchronous notification to obtain the job result.
     * ### QPS limit
     * You can call this operation up to 100 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342832.html).
     *
     * @param request - SubmitMediaCensorJobRequest
     *
     * @returns SubmitMediaCensorJobResponse
     *
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
     * Submits a media information analysis job.
     *
     * @remarks
     *   Before you submit a media information analysis job, make sure that the input file is uploaded to an Object Storage Service (OSS) bucket. Otherwise, the job fails. You can configure upload callbacks to be notified of the upload status of files.****
     * *   A media information analysis job can be run in synchronous or asynchronous mode.
     * *   In asynchronous mode, the media information analysis job is submitted to and scheduled in an ApsaraVideo Media Processing (MPS) queue. In this case, the media information analysis job may be queued. The media information analysis job may not be generated when the response to the SubmitMediaInfoJob operation is returned. After the execution is complete, you can call the [QueryMediaInfoJobList](https://help.aliyun.com/document_detail/602828.html) operation to poll the execution results, or associate a Message Service (MNS) queue or topic with the MPS queue to receive the execution results. For more information, see [Receive message notifications](https://www.alibabacloud.com/help/en/mps/receive-message-notifications/?spm=a2c63.p38356.0.0.b48576d2jxNSca).
     * ### QPS limits
     * You can call this operation up to 50 times per second per account. If the number of requests that you send to call this operation within one second reaches the request limit of this operation, new requests fail and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342832.html).
     *
     * @param request - SubmitMediaInfoJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubmitMediaInfoJobResponse
     *
     * @param SubmitMediaInfoJobRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return SubmitMediaInfoJobResponse
     */
    public function submitMediaInfoJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->async) {
            @$query['Async'] = $request->async;
        }

        if (null !== $request->input) {
            @$query['Input'] = $request->input;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pipelineId) {
            @$query['PipelineId'] = $request->pipelineId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->userData) {
            @$query['UserData'] = $request->userData;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SubmitMediaInfoJob',
            'version' => '2014-06-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SubmitMediaInfoJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Submits a media information analysis job.
     *
     * @remarks
     *   Before you submit a media information analysis job, make sure that the input file is uploaded to an Object Storage Service (OSS) bucket. Otherwise, the job fails. You can configure upload callbacks to be notified of the upload status of files.****
     * *   A media information analysis job can be run in synchronous or asynchronous mode.
     * *   In asynchronous mode, the media information analysis job is submitted to and scheduled in an ApsaraVideo Media Processing (MPS) queue. In this case, the media information analysis job may be queued. The media information analysis job may not be generated when the response to the SubmitMediaInfoJob operation is returned. After the execution is complete, you can call the [QueryMediaInfoJobList](https://help.aliyun.com/document_detail/602828.html) operation to poll the execution results, or associate a Message Service (MNS) queue or topic with the MPS queue to receive the execution results. For more information, see [Receive message notifications](https://www.alibabacloud.com/help/en/mps/receive-message-notifications/?spm=a2c63.p38356.0.0.b48576d2jxNSca).
     * ### QPS limits
     * You can call this operation up to 50 times per second per account. If the number of requests that you send to call this operation within one second reaches the request limit of this operation, new requests fail and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342832.html).
     *
     * @param request - SubmitMediaInfoJobRequest
     *
     * @returns SubmitMediaInfoJobResponse
     *
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
     * @param request - SubmitSmarttagJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubmitSmarttagJobResponse
     *
     * @param SubmitSmarttagJobRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return SubmitSmarttagJobResponse
     */
    public function submitSmarttagJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->content) {
            @$query['Content'] = $request->content;
        }

        if (null !== $request->contentAddr) {
            @$query['ContentAddr'] = $request->contentAddr;
        }

        if (null !== $request->contentType) {
            @$query['ContentType'] = $request->contentType;
        }

        if (null !== $request->input) {
            @$query['Input'] = $request->input;
        }

        if (null !== $request->notifyUrl) {
            @$query['NotifyUrl'] = $request->notifyUrl;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->params) {
            @$query['Params'] = $request->params;
        }

        if (null !== $request->pipelineId) {
            @$query['PipelineId'] = $request->pipelineId;
        }

        if (null !== $request->priority) {
            @$query['Priority'] = $request->priority;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        if (null !== $request->title) {
            @$query['Title'] = $request->title;
        }

        if (null !== $request->userData) {
            @$query['UserData'] = $request->userData;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SubmitSmarttagJob',
            'version' => '2014-06-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SubmitSmarttagJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - SubmitSmarttagJobRequest
     *
     * @returns SubmitSmarttagJobResponse
     *
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
     * Submits a snapshot job.
     *
     * @remarks
     *   Only JPG images can be generated by calling this operation.
     * *   Asynchronous mode: This operation may return a response before snapshots are captured. Snapshot jobs are queued in the background and asynchronously processed by ApsaraVideo Media Processing (MPS). If the **Interval** or **Num** parameter is set, the snapshot job is processed in asynchronous mode. For more information about FAQ about capturing snapshots, see [FAQ about taking snapshots](https://help.aliyun.com/document_detail/60805.html).
     * *   Notifications: When you submit a snapshot job, the **PipelineId** parameter is required. An asynchronous message is sent only after the notification feature is enabled for the MPS queue.
     * ### QPS limit
     * You can call this operation up to 50 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342832.html).
     *
     * @param request - SubmitSnapshotJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubmitSnapshotJobResponse
     *
     * @param SubmitSnapshotJobRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return SubmitSnapshotJobResponse
     */
    public function submitSnapshotJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->input) {
            @$query['Input'] = $request->input;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pipelineId) {
            @$query['PipelineId'] = $request->pipelineId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->snapshotConfig) {
            @$query['SnapshotConfig'] = $request->snapshotConfig;
        }

        if (null !== $request->userData) {
            @$query['UserData'] = $request->userData;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SubmitSnapshotJob',
            'version' => '2014-06-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SubmitSnapshotJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Submits a snapshot job.
     *
     * @remarks
     *   Only JPG images can be generated by calling this operation.
     * *   Asynchronous mode: This operation may return a response before snapshots are captured. Snapshot jobs are queued in the background and asynchronously processed by ApsaraVideo Media Processing (MPS). If the **Interval** or **Num** parameter is set, the snapshot job is processed in asynchronous mode. For more information about FAQ about capturing snapshots, see [FAQ about taking snapshots](https://help.aliyun.com/document_detail/60805.html).
     * *   Notifications: When you submit a snapshot job, the **PipelineId** parameter is required. An asynchronous message is sent only after the notification feature is enabled for the MPS queue.
     * ### QPS limit
     * You can call this operation up to 50 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342832.html).
     *
     * @param request - SubmitSnapshotJobRequest
     *
     * @returns SubmitSnapshotJobResponse
     *
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
     * 提交视频溯源水印ab流任务
     *
     * @param request - SubmitTraceAbJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubmitTraceAbJobResponse
     *
     * @param SubmitTraceAbJobRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return SubmitTraceAbJobResponse
     */
    public function submitTraceAbJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->callBack) {
            @$query['CallBack'] = $request->callBack;
        }

        if (null !== $request->cipherBase64ed) {
            @$query['CipherBase64ed'] = $request->cipherBase64ed;
        }

        if (null !== $request->input) {
            @$query['Input'] = $request->input;
        }

        if (null !== $request->level) {
            @$query['Level'] = $request->level;
        }

        if (null !== $request->output) {
            @$query['Output'] = $request->output;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->totalTime) {
            @$query['TotalTime'] = $request->totalTime;
        }

        if (null !== $request->url) {
            @$query['Url'] = $request->url;
        }

        if (null !== $request->userData) {
            @$query['UserData'] = $request->userData;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SubmitTraceAbJob',
            'version' => '2014-06-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SubmitTraceAbJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 提交视频溯源水印ab流任务
     *
     * @param request - SubmitTraceAbJobRequest
     *
     * @returns SubmitTraceAbJobResponse
     *
     * @param SubmitTraceAbJobRequest $request
     *
     * @return SubmitTraceAbJobResponse
     */
    public function submitTraceAbJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitTraceAbJobWithOptions($request, $runtime);
    }

    /**
     * 提交溯源水印提取任务
     *
     * @param request - SubmitTraceExtractJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubmitTraceExtractJobResponse
     *
     * @param SubmitTraceExtractJobRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return SubmitTraceExtractJobResponse
     */
    public function submitTraceExtractJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->callBack) {
            @$query['CallBack'] = $request->callBack;
        }

        if (null !== $request->input) {
            @$query['Input'] = $request->input;
        }

        if (null !== $request->params) {
            @$query['Params'] = $request->params;
        }

        if (null !== $request->url) {
            @$query['Url'] = $request->url;
        }

        if (null !== $request->userData) {
            @$query['UserData'] = $request->userData;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SubmitTraceExtractJob',
            'version' => '2014-06-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SubmitTraceExtractJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 提交溯源水印提取任务
     *
     * @param request - SubmitTraceExtractJobRequest
     *
     * @returns SubmitTraceExtractJobResponse
     *
     * @param SubmitTraceExtractJobRequest $request
     *
     * @return SubmitTraceExtractJobResponse
     */
    public function submitTraceExtractJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitTraceExtractJobWithOptions($request, $runtime);
    }

    /**
     * 提交视频溯源水印m3u8文件任务
     *
     * @param request - SubmitTraceM3u8JobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubmitTraceM3u8JobResponse
     *
     * @param SubmitTraceM3u8JobRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return SubmitTraceM3u8JobResponse
     */
    public function submitTraceM3u8JobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->keyUri) {
            @$query['KeyUri'] = $request->keyUri;
        }

        if (null !== $request->mediaId) {
            @$query['MediaId'] = $request->mediaId;
        }

        if (null !== $request->output) {
            @$query['Output'] = $request->output;
        }

        if (null !== $request->params) {
            @$query['Params'] = $request->params;
        }

        if (null !== $request->trace) {
            @$query['Trace'] = $request->trace;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SubmitTraceM3u8Job',
            'version' => '2014-06-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SubmitTraceM3u8JobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 提交视频溯源水印m3u8文件任务
     *
     * @param request - SubmitTraceM3u8JobRequest
     *
     * @returns SubmitTraceM3u8JobResponse
     *
     * @param SubmitTraceM3u8JobRequest $request
     *
     * @return SubmitTraceM3u8JobResponse
     */
    public function submitTraceM3u8Job($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitTraceM3u8JobWithOptions($request, $runtime);
    }

    /**
     * The description of the figure. The description can be up to 512 characters in length.
     *
     * @remarks
     * The response parameters.
     *
     * @param request - TagCustomPersonRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TagCustomPersonResponse
     *
     * @param TagCustomPersonRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return TagCustomPersonResponse
     */
    public function tagCustomPersonWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->categoryDescription) {
            @$query['CategoryDescription'] = $request->categoryDescription;
        }

        if (null !== $request->categoryId) {
            @$query['CategoryId'] = $request->categoryId;
        }

        if (null !== $request->categoryName) {
            @$query['CategoryName'] = $request->categoryName;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->personDescription) {
            @$query['PersonDescription'] = $request->personDescription;
        }

        if (null !== $request->personId) {
            @$query['PersonId'] = $request->personId;
        }

        if (null !== $request->personName) {
            @$query['PersonName'] = $request->personName;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'TagCustomPerson',
            'version' => '2014-06-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return TagCustomPersonResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The description of the figure. The description can be up to 512 characters in length.
     *
     * @remarks
     * The response parameters.
     *
     * @param request - TagCustomPersonRequest
     *
     * @returns TagCustomPersonResponse
     *
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
     * Unbinds an input media bucket from the media library.
     *
     * @remarks
     * # Usage notes
     * You can call this operation to unbind an input media bucket from the media library based on the name of the output media bucket.
     * # QPS limits
     * You can call this API operation up to 100 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342832.html).
     *
     * @param request - UnbindInputBucketRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UnbindInputBucketResponse
     *
     * @param UnbindInputBucketRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UnbindInputBucketResponse
     */
    public function unbindInputBucketWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bucket) {
            @$query['Bucket'] = $request->bucket;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->roleArn) {
            @$query['RoleArn'] = $request->roleArn;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UnbindInputBucket',
            'version' => '2014-06-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UnbindInputBucketResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Unbinds an input media bucket from the media library.
     *
     * @remarks
     * # Usage notes
     * You can call this operation to unbind an input media bucket from the media library based on the name of the output media bucket.
     * # QPS limits
     * You can call this API operation up to 100 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342832.html).
     *
     * @param request - UnbindInputBucketRequest
     *
     * @returns UnbindInputBucketResponse
     *
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
     * You can call this operation to unbind an output media bucket from the media library based on the name of the output media bucket.
     * ## QPS limit
     * You can call this operation up to 100 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation. For more information, see [QPS limits](https://www.alibabacloud.com/help/en/apsaravideo-for-media-processing/latest/qps-limit).
     *
     * @remarks
     * The name of the output media bucket to be unbound. To obtain the media bucket name, you can log on to the **ApsaraVideo Media Processing (MPS)** console and choose **Workflows** > **Media Buckets** in the left-side navigation pane. Alternatively, you can log on to the **Object Storage Service (OSS) console** and click **My OSS Paths**.
     *
     * @param request - UnbindOutputBucketRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UnbindOutputBucketResponse
     *
     * @param UnbindOutputBucketRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return UnbindOutputBucketResponse
     */
    public function unbindOutputBucketWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bucket) {
            @$query['Bucket'] = $request->bucket;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UnbindOutputBucket',
            'version' => '2014-06-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UnbindOutputBucketResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this operation to unbind an output media bucket from the media library based on the name of the output media bucket.
     * ## QPS limit
     * You can call this operation up to 100 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation. For more information, see [QPS limits](https://www.alibabacloud.com/help/en/apsaravideo-for-media-processing/latest/qps-limit).
     *
     * @remarks
     * The name of the output media bucket to be unbound. To obtain the media bucket name, you can log on to the **ApsaraVideo Media Processing (MPS)** console and choose **Workflows** > **Media Buckets** in the left-side navigation pane. Alternatively, you can log on to the **Object Storage Service (OSS) console** and click **My OSS Paths**.
     *
     * @param request - UnbindOutputBucketRequest
     *
     * @returns UnbindOutputBucketResponse
     *
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
     * Deletes a custom face, all the custom faces that are registered in a custom figure library, or a custom figure library.
     *
     * @remarks
     * You can call this operation to delete a specific custom face, all the custom faces that are registered in a custom figure library, or a custom figure library.
     * ### QPS limit
     * You can call this operation up to 100 times per second per account. Requests that exceed this limit are dropped, and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342832.html).
     *
     * @param request - UnregisterCustomFaceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UnregisterCustomFaceResponse
     *
     * @param UnregisterCustomFaceRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return UnregisterCustomFaceResponse
     */
    public function unregisterCustomFaceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->categoryId) {
            @$query['CategoryId'] = $request->categoryId;
        }

        if (null !== $request->faceId) {
            @$query['FaceId'] = $request->faceId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->personId) {
            @$query['PersonId'] = $request->personId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UnregisterCustomFace',
            'version' => '2014-06-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UnregisterCustomFaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a custom face, all the custom faces that are registered in a custom figure library, or a custom figure library.
     *
     * @remarks
     * You can call this operation to delete a specific custom face, all the custom faces that are registered in a custom figure library, or a custom figure library.
     * ### QPS limit
     * You can call this operation up to 100 times per second per account. Requests that exceed this limit are dropped, and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342832.html).
     *
     * @param request - UnregisterCustomFaceRequest
     *
     * @returns UnregisterCustomFaceResponse
     *
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
     * Updates the basic information about a media file.
     *
     * @remarks
     * The basic information that you can update by calling this operation includes the title, description, and category of a media file. This operation applies to a full update. You must set all the parameters unless you want to replace the value of a specific parameter with a NULL value.
     * ### QPS limit
     * You can call this operation up to 100 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342832.html).
     *
     * @param request - UpdateMediaRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateMediaResponse
     *
     * @param UpdateMediaRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return UpdateMediaResponse
     */
    public function updateMediaWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cateId) {
            @$query['CateId'] = $request->cateId;
        }

        if (null !== $request->coverURL) {
            @$query['CoverURL'] = $request->coverURL;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->mediaId) {
            @$query['MediaId'] = $request->mediaId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        if (null !== $request->title) {
            @$query['Title'] = $request->title;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateMedia',
            'version' => '2014-06-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateMediaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the basic information about a media file.
     *
     * @remarks
     * The basic information that you can update by calling this operation includes the title, description, and category of a media file. This operation applies to a full update. You must set all the parameters unless you want to replace the value of a specific parameter with a NULL value.
     * ### QPS limit
     * You can call this operation up to 100 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342832.html).
     *
     * @param request - UpdateMediaRequest
     *
     * @returns UpdateMediaResponse
     *
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
     * Updates the category to which a media file belongs.
     *
     * @remarks
     * You can call this operation to update only the category of a media file. For more information about how to update all the information about a media file, see [UpdateMedia](https://help.aliyun.com/document_detail/44464.html).
     * ### QPS limit
     * You can call this operation up to 100 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342832.html).
     *
     * @param request - UpdateMediaCategoryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateMediaCategoryResponse
     *
     * @param UpdateMediaCategoryRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateMediaCategoryResponse
     */
    public function updateMediaCategoryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cateId) {
            @$query['CateId'] = $request->cateId;
        }

        if (null !== $request->mediaId) {
            @$query['MediaId'] = $request->mediaId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateMediaCategory',
            'version' => '2014-06-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateMediaCategoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the category to which a media file belongs.
     *
     * @remarks
     * You can call this operation to update only the category of a media file. For more information about how to update all the information about a media file, see [UpdateMedia](https://help.aliyun.com/document_detail/44464.html).
     * ### QPS limit
     * You can call this operation up to 100 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342832.html).
     *
     * @param request - UpdateMediaCategoryRequest
     *
     * @returns UpdateMediaCategoryResponse
     *
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
     * Updates the thumbnail of a media file.
     *
     * @remarks
     * You can call this operation to update only the thumbnail of a media file. For more information about how to update all the information about a media file, see [UpdateMedia](https://help.aliyun.com/document_detail/44464.html).
     * ## Limits on QPS
     * You can call this operation up to 100 times per second. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation. For more information, see [QPS limits](https://www.alibabacloud.com/help/en/apsaravideo-for-media-processing/latest/qps-limit).
     *
     * @param request - UpdateMediaCoverRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateMediaCoverResponse
     *
     * @param UpdateMediaCoverRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateMediaCoverResponse
     */
    public function updateMediaCoverWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->coverURL) {
            @$query['CoverURL'] = $request->coverURL;
        }

        if (null !== $request->mediaId) {
            @$query['MediaId'] = $request->mediaId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateMediaCover',
            'version' => '2014-06-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateMediaCoverResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the thumbnail of a media file.
     *
     * @remarks
     * You can call this operation to update only the thumbnail of a media file. For more information about how to update all the information about a media file, see [UpdateMedia](https://help.aliyun.com/document_detail/44464.html).
     * ## Limits on QPS
     * You can call this operation up to 100 times per second. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation. For more information, see [QPS limits](https://www.alibabacloud.com/help/en/apsaravideo-for-media-processing/latest/qps-limit).
     *
     * @param request - UpdateMediaCoverRequest
     *
     * @returns UpdateMediaCoverResponse
     *
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
     * Updates the publishing status of a media file.
     *
     * @remarks
     * The published state indicates that the access control list (ACL) of media playback resources and snapshot files is set to inherit the ACL of the bucket to which they belong. The unpublished state indicates that the ACL of media playback resources and snapshot files is set to private.
     * ### QPS limit
     * You can call this operation up to 100 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342832.html).
     *
     * @param request - UpdateMediaPublishStateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateMediaPublishStateResponse
     *
     * @param UpdateMediaPublishStateRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return UpdateMediaPublishStateResponse
     */
    public function updateMediaPublishStateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->mediaId) {
            @$query['MediaId'] = $request->mediaId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->publish) {
            @$query['Publish'] = $request->publish;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateMediaPublishState',
            'version' => '2014-06-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateMediaPublishStateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the publishing status of a media file.
     *
     * @remarks
     * The published state indicates that the access control list (ACL) of media playback resources and snapshot files is set to inherit the ACL of the bucket to which they belong. The unpublished state indicates that the ACL of media playback resources and snapshot files is set to private.
     * ### QPS limit
     * You can call this operation up to 100 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342832.html).
     *
     * @param request - UpdateMediaPublishStateRequest
     *
     * @returns UpdateMediaPublishStateResponse
     *
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
     * Updates the topology of a media workflow.
     *
     * @remarks
     *   You can call this operation to update the topology of a media workflow. To update the trigger mode of a media workflow, call the [UpdateMediaWorkflowTriggerMode](https://help.aliyun.com/document_detail/70372.html) operation.
     * *   After you delete or deactivate a media workflow, the workflow cannot be used. In this case, the workflow is not automatically triggered when you upload a file to the bucket specified by the workflow.
     * <warning>Deleting or deactivating a workflow will not affect tasks that have already been submitted. If a workflow is deleted or deactivated after a task has been submitted, tasks that are already in the processing queue will not be canceled and will be executed normally and charged the corresponding fees.
     * ### QPS limit
     * You can call this operation up to 100 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342832.html).>
     *
     * @param request - UpdateMediaWorkflowRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateMediaWorkflowResponse
     *
     * @param UpdateMediaWorkflowRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateMediaWorkflowResponse
     */
    public function updateMediaWorkflowWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->mediaWorkflowId) {
            @$query['MediaWorkflowId'] = $request->mediaWorkflowId;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->topology) {
            @$query['Topology'] = $request->topology;
        }

        if (null !== $request->triggerMode) {
            @$query['TriggerMode'] = $request->triggerMode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateMediaWorkflow',
            'version' => '2014-06-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateMediaWorkflowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the topology of a media workflow.
     *
     * @remarks
     *   You can call this operation to update the topology of a media workflow. To update the trigger mode of a media workflow, call the [UpdateMediaWorkflowTriggerMode](https://help.aliyun.com/document_detail/70372.html) operation.
     * *   After you delete or deactivate a media workflow, the workflow cannot be used. In this case, the workflow is not automatically triggered when you upload a file to the bucket specified by the workflow.
     * <warning>Deleting or deactivating a workflow will not affect tasks that have already been submitted. If a workflow is deleted or deactivated after a task has been submitted, tasks that are already in the processing queue will not be canceled and will be executed normally and charged the corresponding fees.
     * ### QPS limit
     * You can call this operation up to 100 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342832.html).>
     *
     * @param request - UpdateMediaWorkflowRequest
     *
     * @returns UpdateMediaWorkflowResponse
     *
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
     * Updates the trigger mode of a media workflow.
     *
     * @remarks
     * You can call this operation only to modify the trigger mode of a media workflow. To modify other information about the workflow, call the [UpdateMediaWorkflow](https://help.aliyun.com/document_detail/44438.html) operation.
     * ### QPS limit
     * You can call this operation up to 100 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342832.html).
     *
     * @param request - UpdateMediaWorkflowTriggerModeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateMediaWorkflowTriggerModeResponse
     *
     * @param UpdateMediaWorkflowTriggerModeRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return UpdateMediaWorkflowTriggerModeResponse
     */
    public function updateMediaWorkflowTriggerModeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->mediaWorkflowId) {
            @$query['MediaWorkflowId'] = $request->mediaWorkflowId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->triggerMode) {
            @$query['TriggerMode'] = $request->triggerMode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateMediaWorkflowTriggerMode',
            'version' => '2014-06-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateMediaWorkflowTriggerModeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the trigger mode of a media workflow.
     *
     * @remarks
     * You can call this operation only to modify the trigger mode of a media workflow. To modify other information about the workflow, call the [UpdateMediaWorkflow](https://help.aliyun.com/document_detail/44438.html) operation.
     * ### QPS limit
     * You can call this operation up to 100 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342832.html).
     *
     * @param request - UpdateMediaWorkflowTriggerModeRequest
     *
     * @returns UpdateMediaWorkflowTriggerModeResponse
     *
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
     * Updates an ApsaraVideo Media Processing (MPS) queue.
     *
     * @remarks
     *   You can call this operation to modify the name, status, and notification settings of the specified MPS queue.
     * *   If a paused MPS queue is selected in a workflow or a job, such as a video review or media fingerprint job, the workflow or job fails.
     * ### QPS limit
     * You can call this operation up to 100 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342832.html).
     *
     * @param request - UpdatePipelineRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdatePipelineResponse
     *
     * @param UpdatePipelineRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UpdatePipelineResponse
     */
    public function updatePipelineWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->extendConfig) {
            @$query['ExtendConfig'] = $request->extendConfig;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->notifyConfig) {
            @$query['NotifyConfig'] = $request->notifyConfig;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pipelineId) {
            @$query['PipelineId'] = $request->pipelineId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->role) {
            @$query['Role'] = $request->role;
        }

        if (null !== $request->state) {
            @$query['State'] = $request->state;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdatePipeline',
            'version' => '2014-06-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdatePipelineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates an ApsaraVideo Media Processing (MPS) queue.
     *
     * @remarks
     *   You can call this operation to modify the name, status, and notification settings of the specified MPS queue.
     * *   If a paused MPS queue is selected in a workflow or a job, such as a video review or media fingerprint job, the workflow or job fails.
     * ### QPS limit
     * You can call this operation up to 100 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342832.html).
     *
     * @param request - UpdatePipelineRequest
     *
     * @returns UpdatePipelineResponse
     *
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
     * 更新智能标签模板接口支持cpv.
     *
     * @param request - UpdateSmarttagTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateSmarttagTemplateResponse
     *
     * @param UpdateSmarttagTemplateRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateSmarttagTemplateResponse
     */
    public function updateSmarttagTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->analyseTypes) {
            @$query['AnalyseTypes'] = $request->analyseTypes;
        }

        if (null !== $request->faceCategoryIds) {
            @$query['FaceCategoryIds'] = $request->faceCategoryIds;
        }

        if (null !== $request->faceCustomParamsConfig) {
            @$query['FaceCustomParamsConfig'] = $request->faceCustomParamsConfig;
        }

        if (null !== $request->industry) {
            @$query['Industry'] = $request->industry;
        }

        if (null !== $request->isDefault) {
            @$query['IsDefault'] = $request->isDefault;
        }

        if (null !== $request->keywordConfig) {
            @$query['KeywordConfig'] = $request->keywordConfig;
        }

        if (null !== $request->knowledgeConfig) {
            @$query['KnowledgeConfig'] = $request->knowledgeConfig;
        }

        if (null !== $request->labelType) {
            @$query['LabelType'] = $request->labelType;
        }

        if (null !== $request->labelVersion) {
            @$query['LabelVersion'] = $request->labelVersion;
        }

        if (null !== $request->landmarkGroupIds) {
            @$query['LandmarkGroupIds'] = $request->landmarkGroupIds;
        }

        if (null !== $request->objectGroupIds) {
            @$query['ObjectGroupIds'] = $request->objectGroupIds;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->scene) {
            @$query['Scene'] = $request->scene;
        }

        if (null !== $request->templateConfig) {
            @$query['TemplateConfig'] = $request->templateConfig;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        if (null !== $request->templateName) {
            @$query['TemplateName'] = $request->templateName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateSmarttagTemplate',
            'version' => '2014-06-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateSmarttagTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新智能标签模板接口支持cpv.
     *
     * @param request - UpdateSmarttagTemplateRequest
     *
     * @returns UpdateSmarttagTemplateResponse
     *
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
     * @remarks
     * A custom transcoding template cannot be updated if it is being used by a job that has been submitted.The ID of the template. You can obtain the template ID from the response of the [AddTemplate](https://help.aliyun.com/document_detail/213306.html) operation.
     * ### QPS limits
     * You can call this operation up to 100 times per second. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342832.html).
     *
     * @param request - UpdateTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateTemplateResponse
     *
     * @param UpdateTemplateRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateTemplateResponse
     */
    public function updateTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->audio) {
            @$query['Audio'] = $request->audio;
        }

        if (null !== $request->container) {
            @$query['Container'] = $request->container;
        }

        if (null !== $request->muxConfig) {
            @$query['MuxConfig'] = $request->muxConfig;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        if (null !== $request->transConfig) {
            @$query['TransConfig'] = $request->transConfig;
        }

        if (null !== $request->video) {
            @$query['Video'] = $request->video;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateTemplate',
            'version' => '2014-06-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @remarks
     * A custom transcoding template cannot be updated if it is being used by a job that has been submitted.The ID of the template. You can obtain the template ID from the response of the [AddTemplate](https://help.aliyun.com/document_detail/213306.html) operation.
     * ### QPS limits
     * You can call this operation up to 100 times per second. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342832.html).
     *
     * @param request - UpdateTemplateRequest
     *
     * @returns UpdateTemplateResponse
     *
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
     * Updates the name and configurations of the specified watermark template.
     *
     * @remarks
     *   You can call this operation to update the information about a watermark template based on the ID of the watermark template. For example, you can update the name and configurations of a watermark template.
     * *   A watermark template cannot be updated if it is being used by a job that has been submitted.
     * ### QPS limit
     * You can call this operation up to 100 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342832.html).
     *
     * @param request - UpdateWaterMarkTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateWaterMarkTemplateResponse
     *
     * @param UpdateWaterMarkTemplateRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return UpdateWaterMarkTemplateResponse
     */
    public function updateWaterMarkTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->config) {
            @$query['Config'] = $request->config;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->waterMarkTemplateId) {
            @$query['WaterMarkTemplateId'] = $request->waterMarkTemplateId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateWaterMarkTemplate',
            'version' => '2014-06-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateWaterMarkTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the name and configurations of the specified watermark template.
     *
     * @remarks
     *   You can call this operation to update the information about a watermark template based on the ID of the watermark template. For example, you can update the name and configurations of a watermark template.
     * *   A watermark template cannot be updated if it is being used by a job that has been submitted.
     * ### QPS limit
     * You can call this operation up to 100 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342832.html).
     *
     * @param request - UpdateWaterMarkTemplateRequest
     *
     * @returns UpdateWaterMarkTemplateResponse
     *
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
