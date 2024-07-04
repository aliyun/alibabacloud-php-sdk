<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20180528;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Mts\V20180528\Models\ActivateMediaWorkflowRequest;
use AlibabaCloud\SDK\Mts\V20180528\Models\ActivateMediaWorkflowResponse;
use AlibabaCloud\SDK\Mts\V20180528\Models\AddCategoryRequest;
use AlibabaCloud\SDK\Mts\V20180528\Models\AddCategoryResponse;
use AlibabaCloud\SDK\Mts\V20180528\Models\AddMediaRequest;
use AlibabaCloud\SDK\Mts\V20180528\Models\AddMediaResponse;
use AlibabaCloud\SDK\Mts\V20180528\Models\AddMediaTagRequest;
use AlibabaCloud\SDK\Mts\V20180528\Models\AddMediaTagResponse;
use AlibabaCloud\SDK\Mts\V20180528\Models\AddMediaWorkflowRequest;
use AlibabaCloud\SDK\Mts\V20180528\Models\AddMediaWorkflowResponse;
use AlibabaCloud\SDK\Mts\V20180528\Models\AddPipelineRequest;
use AlibabaCloud\SDK\Mts\V20180528\Models\AddPipelineResponse;
use AlibabaCloud\SDK\Mts\V20180528\Models\AddTemplateRequest;
use AlibabaCloud\SDK\Mts\V20180528\Models\AddTemplateResponse;
use AlibabaCloud\SDK\Mts\V20180528\Models\AddWaterMarkTemplateRequest;
use AlibabaCloud\SDK\Mts\V20180528\Models\AddWaterMarkTemplateResponse;
use AlibabaCloud\SDK\Mts\V20180528\Models\BindInputBucketRequest;
use AlibabaCloud\SDK\Mts\V20180528\Models\BindInputBucketResponse;
use AlibabaCloud\SDK\Mts\V20180528\Models\BindOutputBucketRequest;
use AlibabaCloud\SDK\Mts\V20180528\Models\BindOutputBucketResponse;
use AlibabaCloud\SDK\Mts\V20180528\Models\CancelJobRequest;
use AlibabaCloud\SDK\Mts\V20180528\Models\CancelJobResponse;
use AlibabaCloud\SDK\Mts\V20180528\Models\CategoryTreeRequest;
use AlibabaCloud\SDK\Mts\V20180528\Models\CategoryTreeResponse;
use AlibabaCloud\SDK\Mts\V20180528\Models\DeactivateMediaWorkflowRequest;
use AlibabaCloud\SDK\Mts\V20180528\Models\DeactivateMediaWorkflowResponse;
use AlibabaCloud\SDK\Mts\V20180528\Models\DeleteCategoryRequest;
use AlibabaCloud\SDK\Mts\V20180528\Models\DeleteCategoryResponse;
use AlibabaCloud\SDK\Mts\V20180528\Models\DeleteMediaRequest;
use AlibabaCloud\SDK\Mts\V20180528\Models\DeleteMediaResponse;
use AlibabaCloud\SDK\Mts\V20180528\Models\DeleteMediaTagRequest;
use AlibabaCloud\SDK\Mts\V20180528\Models\DeleteMediaTagResponse;
use AlibabaCloud\SDK\Mts\V20180528\Models\DeleteMediaWorkflowRequest;
use AlibabaCloud\SDK\Mts\V20180528\Models\DeleteMediaWorkflowResponse;
use AlibabaCloud\SDK\Mts\V20180528\Models\DeletePipelineRequest;
use AlibabaCloud\SDK\Mts\V20180528\Models\DeletePipelineResponse;
use AlibabaCloud\SDK\Mts\V20180528\Models\DeleteTemplateRequest;
use AlibabaCloud\SDK\Mts\V20180528\Models\DeleteTemplateResponse;
use AlibabaCloud\SDK\Mts\V20180528\Models\DeleteWaterMarkTemplateRequest;
use AlibabaCloud\SDK\Mts\V20180528\Models\DeleteWaterMarkTemplateResponse;
use AlibabaCloud\SDK\Mts\V20180528\Models\DescribeMtsUserResourcePackageRequest;
use AlibabaCloud\SDK\Mts\V20180528\Models\DescribeMtsUserResourcePackageResponse;
use AlibabaCloud\SDK\Mts\V20180528\Models\ListAllCategoryRequest;
use AlibabaCloud\SDK\Mts\V20180528\Models\ListAllCategoryResponse;
use AlibabaCloud\SDK\Mts\V20180528\Models\ListAllMediaBucketRequest;
use AlibabaCloud\SDK\Mts\V20180528\Models\ListAllMediaBucketResponse;
use AlibabaCloud\SDK\Mts\V20180528\Models\ListJobRequest;
use AlibabaCloud\SDK\Mts\V20180528\Models\ListJobResponse;
use AlibabaCloud\SDK\Mts\V20180528\Models\ListMediaRequest;
use AlibabaCloud\SDK\Mts\V20180528\Models\ListMediaResponse;
use AlibabaCloud\SDK\Mts\V20180528\Models\ListMediaWorkflowExecutionsRequest;
use AlibabaCloud\SDK\Mts\V20180528\Models\ListMediaWorkflowExecutionsResponse;
use AlibabaCloud\SDK\Mts\V20180528\Models\QueryAnalysisJobListRequest;
use AlibabaCloud\SDK\Mts\V20180528\Models\QueryAnalysisJobListResponse;
use AlibabaCloud\SDK\Mts\V20180528\Models\QueryEditingJobListRequest;
use AlibabaCloud\SDK\Mts\V20180528\Models\QueryEditingJobListResponse;
use AlibabaCloud\SDK\Mts\V20180528\Models\QueryJobListRequest;
use AlibabaCloud\SDK\Mts\V20180528\Models\QueryJobListResponse;
use AlibabaCloud\SDK\Mts\V20180528\Models\QueryMediaInfoJobListRequest;
use AlibabaCloud\SDK\Mts\V20180528\Models\QueryMediaInfoJobListResponse;
use AlibabaCloud\SDK\Mts\V20180528\Models\QueryMediaListByURLRequest;
use AlibabaCloud\SDK\Mts\V20180528\Models\QueryMediaListByURLResponse;
use AlibabaCloud\SDK\Mts\V20180528\Models\QueryMediaListRequest;
use AlibabaCloud\SDK\Mts\V20180528\Models\QueryMediaListResponse;
use AlibabaCloud\SDK\Mts\V20180528\Models\QueryMediaWorkflowExecutionListRequest;
use AlibabaCloud\SDK\Mts\V20180528\Models\QueryMediaWorkflowExecutionListResponse;
use AlibabaCloud\SDK\Mts\V20180528\Models\QueryMediaWorkflowListRequest;
use AlibabaCloud\SDK\Mts\V20180528\Models\QueryMediaWorkflowListResponse;
use AlibabaCloud\SDK\Mts\V20180528\Models\QueryPipelineListRequest;
use AlibabaCloud\SDK\Mts\V20180528\Models\QueryPipelineListResponse;
use AlibabaCloud\SDK\Mts\V20180528\Models\QuerySnapshotJobListRequest;
use AlibabaCloud\SDK\Mts\V20180528\Models\QuerySnapshotJobListResponse;
use AlibabaCloud\SDK\Mts\V20180528\Models\QueryTemplateListRequest;
use AlibabaCloud\SDK\Mts\V20180528\Models\QueryTemplateListResponse;
use AlibabaCloud\SDK\Mts\V20180528\Models\QueryWaterMarkTemplateListRequest;
use AlibabaCloud\SDK\Mts\V20180528\Models\QueryWaterMarkTemplateListResponse;
use AlibabaCloud\SDK\Mts\V20180528\Models\SearchMediaWorkflowRequest;
use AlibabaCloud\SDK\Mts\V20180528\Models\SearchMediaWorkflowResponse;
use AlibabaCloud\SDK\Mts\V20180528\Models\SearchPipelineRequest;
use AlibabaCloud\SDK\Mts\V20180528\Models\SearchPipelineResponse;
use AlibabaCloud\SDK\Mts\V20180528\Models\SearchTemplateRequest;
use AlibabaCloud\SDK\Mts\V20180528\Models\SearchTemplateResponse;
use AlibabaCloud\SDK\Mts\V20180528\Models\SearchWaterMarkTemplateRequest;
use AlibabaCloud\SDK\Mts\V20180528\Models\SearchWaterMarkTemplateResponse;
use AlibabaCloud\SDK\Mts\V20180528\Models\SubmitAnalysisJobRequest;
use AlibabaCloud\SDK\Mts\V20180528\Models\SubmitAnalysisJobResponse;
use AlibabaCloud\SDK\Mts\V20180528\Models\SubmitEditingJobsRequest;
use AlibabaCloud\SDK\Mts\V20180528\Models\SubmitEditingJobsResponse;
use AlibabaCloud\SDK\Mts\V20180528\Models\SubmitJobsRequest;
use AlibabaCloud\SDK\Mts\V20180528\Models\SubmitJobsResponse;
use AlibabaCloud\SDK\Mts\V20180528\Models\SubmitMediaInfoJobRequest;
use AlibabaCloud\SDK\Mts\V20180528\Models\SubmitMediaInfoJobResponse;
use AlibabaCloud\SDK\Mts\V20180528\Models\SubmitSnapshotJobRequest;
use AlibabaCloud\SDK\Mts\V20180528\Models\SubmitSnapshotJobResponse;
use AlibabaCloud\SDK\Mts\V20180528\Models\UnbindInputBucketRequest;
use AlibabaCloud\SDK\Mts\V20180528\Models\UnbindInputBucketResponse;
use AlibabaCloud\SDK\Mts\V20180528\Models\UnbindOutputBucketRequest;
use AlibabaCloud\SDK\Mts\V20180528\Models\UnbindOutputBucketResponse;
use AlibabaCloud\SDK\Mts\V20180528\Models\UpdateCategoryNameRequest;
use AlibabaCloud\SDK\Mts\V20180528\Models\UpdateCategoryNameResponse;
use AlibabaCloud\SDK\Mts\V20180528\Models\UpdateMediaCategoryRequest;
use AlibabaCloud\SDK\Mts\V20180528\Models\UpdateMediaCategoryResponse;
use AlibabaCloud\SDK\Mts\V20180528\Models\UpdateMediaCoverRequest;
use AlibabaCloud\SDK\Mts\V20180528\Models\UpdateMediaCoverResponse;
use AlibabaCloud\SDK\Mts\V20180528\Models\UpdateMediaPublishStateRequest;
use AlibabaCloud\SDK\Mts\V20180528\Models\UpdateMediaPublishStateResponse;
use AlibabaCloud\SDK\Mts\V20180528\Models\UpdateMediaRequest;
use AlibabaCloud\SDK\Mts\V20180528\Models\UpdateMediaResponse;
use AlibabaCloud\SDK\Mts\V20180528\Models\UpdateMediaWorkflowRequest;
use AlibabaCloud\SDK\Mts\V20180528\Models\UpdateMediaWorkflowResponse;
use AlibabaCloud\SDK\Mts\V20180528\Models\UpdateMediaWorkflowTriggerModeRequest;
use AlibabaCloud\SDK\Mts\V20180528\Models\UpdateMediaWorkflowTriggerModeResponse;
use AlibabaCloud\SDK\Mts\V20180528\Models\UpdatePipelineRequest;
use AlibabaCloud\SDK\Mts\V20180528\Models\UpdatePipelineResponse;
use AlibabaCloud\SDK\Mts\V20180528\Models\UpdateTemplateRequest;
use AlibabaCloud\SDK\Mts\V20180528\Models\UpdateTemplateResponse;
use AlibabaCloud\SDK\Mts\V20180528\Models\UpdateWaterMarkTemplateRequest;
use AlibabaCloud\SDK\Mts\V20180528\Models\UpdateWaterMarkTemplateResponse;
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
     * @param ActivateMediaWorkflowRequest $request ActivateMediaWorkflowRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return ActivateMediaWorkflowResponse ActivateMediaWorkflowResponse
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
            'version'     => '2018-05-28',
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
     * @param ActivateMediaWorkflowRequest $request ActivateMediaWorkflowRequest
     *
     * @return ActivateMediaWorkflowResponse ActivateMediaWorkflowResponse
     */
    public function activateMediaWorkflow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->activateMediaWorkflowWithOptions($request, $runtime);
    }

    /**
     * @param AddCategoryRequest $request AddCategoryRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return AddCategoryResponse AddCategoryResponse
     */
    public function addCategoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cateName)) {
            $query['CateName'] = $request->cateName;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->parentId)) {
            $query['ParentId'] = $request->parentId;
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
            'action'      => 'AddCategory',
            'version'     => '2018-05-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddCategoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddCategoryRequest $request AddCategoryRequest
     *
     * @return AddCategoryResponse AddCategoryResponse
     */
    public function addCategory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addCategoryWithOptions($request, $runtime);
    }

    /**
     * @param AddMediaRequest $request AddMediaRequest
     * @param RuntimeOptions  $runtime runtime options for this request RuntimeOptions
     *
     * @return AddMediaResponse AddMediaResponse
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
            'version'     => '2018-05-28',
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
     * @param AddMediaRequest $request AddMediaRequest
     *
     * @return AddMediaResponse AddMediaResponse
     */
    public function addMedia($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addMediaWithOptions($request, $runtime);
    }

    /**
     * @param AddMediaTagRequest $request AddMediaTagRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return AddMediaTagResponse AddMediaTagResponse
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
            'version'     => '2018-05-28',
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
     * @param AddMediaTagRequest $request AddMediaTagRequest
     *
     * @return AddMediaTagResponse AddMediaTagResponse
     */
    public function addMediaTag($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addMediaTagWithOptions($request, $runtime);
    }

    /**
     * @param AddMediaWorkflowRequest $request AddMediaWorkflowRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return AddMediaWorkflowResponse AddMediaWorkflowResponse
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
            'version'     => '2018-05-28',
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
     * @param AddMediaWorkflowRequest $request AddMediaWorkflowRequest
     *
     * @return AddMediaWorkflowResponse AddMediaWorkflowResponse
     */
    public function addMediaWorkflow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addMediaWorkflowWithOptions($request, $runtime);
    }

    /**
     * @param AddPipelineRequest $request AddPipelineRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return AddPipelineResponse AddPipelineResponse
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
            'version'     => '2018-05-28',
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
     * @param AddPipelineRequest $request AddPipelineRequest
     *
     * @return AddPipelineResponse AddPipelineResponse
     */
    public function addPipeline($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addPipelineWithOptions($request, $runtime);
    }

    /**
     * @param AddTemplateRequest $request AddTemplateRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return AddTemplateResponse AddTemplateResponse
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
            'version'     => '2018-05-28',
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
     * @param AddTemplateRequest $request AddTemplateRequest
     *
     * @return AddTemplateResponse AddTemplateResponse
     */
    public function addTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addTemplateWithOptions($request, $runtime);
    }

    /**
     * @param AddWaterMarkTemplateRequest $request AddWaterMarkTemplateRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return AddWaterMarkTemplateResponse AddWaterMarkTemplateResponse
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
            'version'     => '2018-05-28',
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
     * @param AddWaterMarkTemplateRequest $request AddWaterMarkTemplateRequest
     *
     * @return AddWaterMarkTemplateResponse AddWaterMarkTemplateResponse
     */
    public function addWaterMarkTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addWaterMarkTemplateWithOptions($request, $runtime);
    }

    /**
     * @param BindInputBucketRequest $request BindInputBucketRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return BindInputBucketResponse BindInputBucketResponse
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
            'version'     => '2018-05-28',
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
     * @param BindInputBucketRequest $request BindInputBucketRequest
     *
     * @return BindInputBucketResponse BindInputBucketResponse
     */
    public function bindInputBucket($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bindInputBucketWithOptions($request, $runtime);
    }

    /**
     * @param BindOutputBucketRequest $request BindOutputBucketRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return BindOutputBucketResponse BindOutputBucketResponse
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
            'version'     => '2018-05-28',
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
     * @param BindOutputBucketRequest $request BindOutputBucketRequest
     *
     * @return BindOutputBucketResponse BindOutputBucketResponse
     */
    public function bindOutputBucket($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bindOutputBucketWithOptions($request, $runtime);
    }

    /**
     * @param CancelJobRequest $request CancelJobRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return CancelJobResponse CancelJobResponse
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
            'version'     => '2018-05-28',
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
     * @param CancelJobRequest $request CancelJobRequest
     *
     * @return CancelJobResponse CancelJobResponse
     */
    public function cancelJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelJobWithOptions($request, $runtime);
    }

    /**
     * @param CategoryTreeRequest $request CategoryTreeRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return CategoryTreeResponse CategoryTreeResponse
     */
    public function categoryTreeWithOptions($request, $runtime)
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CategoryTree',
            'version'     => '2018-05-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CategoryTreeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CategoryTreeRequest $request CategoryTreeRequest
     *
     * @return CategoryTreeResponse CategoryTreeResponse
     */
    public function categoryTree($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->categoryTreeWithOptions($request, $runtime);
    }

    /**
     * @param DeactivateMediaWorkflowRequest $request DeactivateMediaWorkflowRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DeactivateMediaWorkflowResponse DeactivateMediaWorkflowResponse
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
            'version'     => '2018-05-28',
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
     * @param DeactivateMediaWorkflowRequest $request DeactivateMediaWorkflowRequest
     *
     * @return DeactivateMediaWorkflowResponse DeactivateMediaWorkflowResponse
     */
    public function deactivateMediaWorkflow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deactivateMediaWorkflowWithOptions($request, $runtime);
    }

    /**
     * @param DeleteCategoryRequest $request DeleteCategoryRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteCategoryResponse DeleteCategoryResponse
     */
    public function deleteCategoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cateId)) {
            $query['CateId'] = $request->cateId;
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
            'action'      => 'DeleteCategory',
            'version'     => '2018-05-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteCategoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteCategoryRequest $request DeleteCategoryRequest
     *
     * @return DeleteCategoryResponse DeleteCategoryResponse
     */
    public function deleteCategory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCategoryWithOptions($request, $runtime);
    }

    /**
     * @param DeleteMediaRequest $request DeleteMediaRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteMediaResponse DeleteMediaResponse
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
            'version'     => '2018-05-28',
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
     * @param DeleteMediaRequest $request DeleteMediaRequest
     *
     * @return DeleteMediaResponse DeleteMediaResponse
     */
    public function deleteMedia($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMediaWithOptions($request, $runtime);
    }

    /**
     * @param DeleteMediaTagRequest $request DeleteMediaTagRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteMediaTagResponse DeleteMediaTagResponse
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
            'version'     => '2018-05-28',
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
     * @param DeleteMediaTagRequest $request DeleteMediaTagRequest
     *
     * @return DeleteMediaTagResponse DeleteMediaTagResponse
     */
    public function deleteMediaTag($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMediaTagWithOptions($request, $runtime);
    }

    /**
     * @param DeleteMediaWorkflowRequest $request DeleteMediaWorkflowRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteMediaWorkflowResponse DeleteMediaWorkflowResponse
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
            'version'     => '2018-05-28',
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
     * @param DeleteMediaWorkflowRequest $request DeleteMediaWorkflowRequest
     *
     * @return DeleteMediaWorkflowResponse DeleteMediaWorkflowResponse
     */
    public function deleteMediaWorkflow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMediaWorkflowWithOptions($request, $runtime);
    }

    /**
     * @param DeletePipelineRequest $request DeletePipelineRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return DeletePipelineResponse DeletePipelineResponse
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
            'version'     => '2018-05-28',
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
     * @param DeletePipelineRequest $request DeletePipelineRequest
     *
     * @return DeletePipelineResponse DeletePipelineResponse
     */
    public function deletePipeline($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deletePipelineWithOptions($request, $runtime);
    }

    /**
     * @param DeleteTemplateRequest $request DeleteTemplateRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteTemplateResponse DeleteTemplateResponse
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
            'version'     => '2018-05-28',
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
     * @param DeleteTemplateRequest $request DeleteTemplateRequest
     *
     * @return DeleteTemplateResponse DeleteTemplateResponse
     */
    public function deleteTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTemplateWithOptions($request, $runtime);
    }

    /**
     * @param DeleteWaterMarkTemplateRequest $request DeleteWaterMarkTemplateRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteWaterMarkTemplateResponse DeleteWaterMarkTemplateResponse
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
            'version'     => '2018-05-28',
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
     * @param DeleteWaterMarkTemplateRequest $request DeleteWaterMarkTemplateRequest
     *
     * @return DeleteWaterMarkTemplateResponse DeleteWaterMarkTemplateResponse
     */
    public function deleteWaterMarkTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteWaterMarkTemplateWithOptions($request, $runtime);
    }

    /**
     * @param DescribeMtsUserResourcePackageRequest $request DescribeMtsUserResourcePackageRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeMtsUserResourcePackageResponse DescribeMtsUserResourcePackageResponse
     */
    public function describeMtsUserResourcePackageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeMtsUserResourcePackage',
            'version'     => '2018-05-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeMtsUserResourcePackageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeMtsUserResourcePackageRequest $request DescribeMtsUserResourcePackageRequest
     *
     * @return DescribeMtsUserResourcePackageResponse DescribeMtsUserResourcePackageResponse
     */
    public function describeMtsUserResourcePackage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMtsUserResourcePackageWithOptions($request, $runtime);
    }

    /**
     * @param ListAllCategoryRequest $request ListAllCategoryRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAllCategoryResponse ListAllCategoryResponse
     */
    public function listAllCategoryWithOptions($request, $runtime)
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAllCategory',
            'version'     => '2018-05-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAllCategoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListAllCategoryRequest $request ListAllCategoryRequest
     *
     * @return ListAllCategoryResponse ListAllCategoryResponse
     */
    public function listAllCategory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAllCategoryWithOptions($request, $runtime);
    }

    /**
     * @param ListAllMediaBucketRequest $request ListAllMediaBucketRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAllMediaBucketResponse ListAllMediaBucketResponse
     */
    public function listAllMediaBucketWithOptions($request, $runtime)
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAllMediaBucket',
            'version'     => '2018-05-28',
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
     * @param ListAllMediaBucketRequest $request ListAllMediaBucketRequest
     *
     * @return ListAllMediaBucketResponse ListAllMediaBucketResponse
     */
    public function listAllMediaBucket($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAllMediaBucketWithOptions($request, $runtime);
    }

    /**
     * @param ListJobRequest $request ListJobRequest
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return ListJobResponse ListJobResponse
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
            'version'     => '2018-05-28',
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
     * @param ListJobRequest $request ListJobRequest
     *
     * @return ListJobResponse ListJobResponse
     */
    public function listJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listJobWithOptions($request, $runtime);
    }

    /**
     * @param ListMediaRequest $request ListMediaRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return ListMediaResponse ListMediaResponse
     */
    public function listMediaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->from)) {
            $query['From'] = $request->from;
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
        if (!Utils::isUnset($request->to)) {
            $query['To'] = $request->to;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListMedia',
            'version'     => '2018-05-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListMediaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListMediaRequest $request ListMediaRequest
     *
     * @return ListMediaResponse ListMediaResponse
     */
    public function listMedia($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listMediaWithOptions($request, $runtime);
    }

    /**
     * @param ListMediaWorkflowExecutionsRequest $request ListMediaWorkflowExecutionsRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return ListMediaWorkflowExecutionsResponse ListMediaWorkflowExecutionsResponse
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
            'version'     => '2018-05-28',
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
     * @param ListMediaWorkflowExecutionsRequest $request ListMediaWorkflowExecutionsRequest
     *
     * @return ListMediaWorkflowExecutionsResponse ListMediaWorkflowExecutionsResponse
     */
    public function listMediaWorkflowExecutions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listMediaWorkflowExecutionsWithOptions($request, $runtime);
    }

    /**
     * @param QueryAnalysisJobListRequest $request QueryAnalysisJobListRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryAnalysisJobListResponse QueryAnalysisJobListResponse
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
            'version'     => '2018-05-28',
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
     * @param QueryAnalysisJobListRequest $request QueryAnalysisJobListRequest
     *
     * @return QueryAnalysisJobListResponse QueryAnalysisJobListResponse
     */
    public function queryAnalysisJobList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryAnalysisJobListWithOptions($request, $runtime);
    }

    /**
     * @param QueryEditingJobListRequest $request QueryEditingJobListRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryEditingJobListResponse QueryEditingJobListResponse
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
            'version'     => '2018-05-28',
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
     * @param QueryEditingJobListRequest $request QueryEditingJobListRequest
     *
     * @return QueryEditingJobListResponse QueryEditingJobListResponse
     */
    public function queryEditingJobList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryEditingJobListWithOptions($request, $runtime);
    }

    /**
     * @param QueryJobListRequest $request QueryJobListRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryJobListResponse QueryJobListResponse
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
            'version'     => '2018-05-28',
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
     * @param QueryJobListRequest $request QueryJobListRequest
     *
     * @return QueryJobListResponse QueryJobListResponse
     */
    public function queryJobList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryJobListWithOptions($request, $runtime);
    }

    /**
     * @param QueryMediaInfoJobListRequest $request QueryMediaInfoJobListRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryMediaInfoJobListResponse QueryMediaInfoJobListResponse
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
            'version'     => '2018-05-28',
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
     * @param QueryMediaInfoJobListRequest $request QueryMediaInfoJobListRequest
     *
     * @return QueryMediaInfoJobListResponse QueryMediaInfoJobListResponse
     */
    public function queryMediaInfoJobList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryMediaInfoJobListWithOptions($request, $runtime);
    }

    /**
     * @param QueryMediaListRequest $request QueryMediaListRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryMediaListResponse QueryMediaListResponse
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
            'version'     => '2018-05-28',
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
     * @param QueryMediaListRequest $request QueryMediaListRequest
     *
     * @return QueryMediaListResponse QueryMediaListResponse
     */
    public function queryMediaList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryMediaListWithOptions($request, $runtime);
    }

    /**
     * @param QueryMediaListByURLRequest $request QueryMediaListByURLRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryMediaListByURLResponse QueryMediaListByURLResponse
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
            'version'     => '2018-05-28',
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
     * @param QueryMediaListByURLRequest $request QueryMediaListByURLRequest
     *
     * @return QueryMediaListByURLResponse QueryMediaListByURLResponse
     */
    public function queryMediaListByURL($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryMediaListByURLWithOptions($request, $runtime);
    }

    /**
     * @param QueryMediaWorkflowExecutionListRequest $request QueryMediaWorkflowExecutionListRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryMediaWorkflowExecutionListResponse QueryMediaWorkflowExecutionListResponse
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
            'version'     => '2018-05-28',
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
     * @param QueryMediaWorkflowExecutionListRequest $request QueryMediaWorkflowExecutionListRequest
     *
     * @return QueryMediaWorkflowExecutionListResponse QueryMediaWorkflowExecutionListResponse
     */
    public function queryMediaWorkflowExecutionList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryMediaWorkflowExecutionListWithOptions($request, $runtime);
    }

    /**
     * @param QueryMediaWorkflowListRequest $request QueryMediaWorkflowListRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryMediaWorkflowListResponse QueryMediaWorkflowListResponse
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
            'version'     => '2018-05-28',
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
     * @param QueryMediaWorkflowListRequest $request QueryMediaWorkflowListRequest
     *
     * @return QueryMediaWorkflowListResponse QueryMediaWorkflowListResponse
     */
    public function queryMediaWorkflowList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryMediaWorkflowListWithOptions($request, $runtime);
    }

    /**
     * @param QueryPipelineListRequest $request QueryPipelineListRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryPipelineListResponse QueryPipelineListResponse
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
            'version'     => '2018-05-28',
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
     * @param QueryPipelineListRequest $request QueryPipelineListRequest
     *
     * @return QueryPipelineListResponse QueryPipelineListResponse
     */
    public function queryPipelineList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryPipelineListWithOptions($request, $runtime);
    }

    /**
     * @param QuerySnapshotJobListRequest $request QuerySnapshotJobListRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return QuerySnapshotJobListResponse QuerySnapshotJobListResponse
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
            'version'     => '2018-05-28',
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
     * @param QuerySnapshotJobListRequest $request QuerySnapshotJobListRequest
     *
     * @return QuerySnapshotJobListResponse QuerySnapshotJobListResponse
     */
    public function querySnapshotJobList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySnapshotJobListWithOptions($request, $runtime);
    }

    /**
     * @param QueryTemplateListRequest $request QueryTemplateListRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryTemplateListResponse QueryTemplateListResponse
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
            'version'     => '2018-05-28',
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
     * @param QueryTemplateListRequest $request QueryTemplateListRequest
     *
     * @return QueryTemplateListResponse QueryTemplateListResponse
     */
    public function queryTemplateList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryTemplateListWithOptions($request, $runtime);
    }

    /**
     * @param QueryWaterMarkTemplateListRequest $request QueryWaterMarkTemplateListRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryWaterMarkTemplateListResponse QueryWaterMarkTemplateListResponse
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
            'version'     => '2018-05-28',
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
     * @param QueryWaterMarkTemplateListRequest $request QueryWaterMarkTemplateListRequest
     *
     * @return QueryWaterMarkTemplateListResponse QueryWaterMarkTemplateListResponse
     */
    public function queryWaterMarkTemplateList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryWaterMarkTemplateListWithOptions($request, $runtime);
    }

    /**
     * @param SearchMediaWorkflowRequest $request SearchMediaWorkflowRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return SearchMediaWorkflowResponse SearchMediaWorkflowResponse
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
            'version'     => '2018-05-28',
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
     * @param SearchMediaWorkflowRequest $request SearchMediaWorkflowRequest
     *
     * @return SearchMediaWorkflowResponse SearchMediaWorkflowResponse
     */
    public function searchMediaWorkflow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchMediaWorkflowWithOptions($request, $runtime);
    }

    /**
     * @param SearchPipelineRequest $request SearchPipelineRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return SearchPipelineResponse SearchPipelineResponse
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
            'version'     => '2018-05-28',
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
     * @param SearchPipelineRequest $request SearchPipelineRequest
     *
     * @return SearchPipelineResponse SearchPipelineResponse
     */
    public function searchPipeline($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchPipelineWithOptions($request, $runtime);
    }

    /**
     * @param SearchTemplateRequest $request SearchTemplateRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return SearchTemplateResponse SearchTemplateResponse
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
            'version'     => '2018-05-28',
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
     * @param SearchTemplateRequest $request SearchTemplateRequest
     *
     * @return SearchTemplateResponse SearchTemplateResponse
     */
    public function searchTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchTemplateWithOptions($request, $runtime);
    }

    /**
     * @param SearchWaterMarkTemplateRequest $request SearchWaterMarkTemplateRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return SearchWaterMarkTemplateResponse SearchWaterMarkTemplateResponse
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
            'version'     => '2018-05-28',
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
     * @param SearchWaterMarkTemplateRequest $request SearchWaterMarkTemplateRequest
     *
     * @return SearchWaterMarkTemplateResponse SearchWaterMarkTemplateResponse
     */
    public function searchWaterMarkTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchWaterMarkTemplateWithOptions($request, $runtime);
    }

    /**
     * @param SubmitAnalysisJobRequest $request SubmitAnalysisJobRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return SubmitAnalysisJobResponse SubmitAnalysisJobResponse
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
            'version'     => '2018-05-28',
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
     * @param SubmitAnalysisJobRequest $request SubmitAnalysisJobRequest
     *
     * @return SubmitAnalysisJobResponse SubmitAnalysisJobResponse
     */
    public function submitAnalysisJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitAnalysisJobWithOptions($request, $runtime);
    }

    /**
     * @param SubmitEditingJobsRequest $request SubmitEditingJobsRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return SubmitEditingJobsResponse SubmitEditingJobsResponse
     */
    public function submitEditingJobsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->editingInputs)) {
            $query['EditingInputs'] = $request->editingInputs;
        }
        if (!Utils::isUnset($request->editingJobOutputs)) {
            $query['EditingJobOutputs'] = $request->editingJobOutputs;
        }
        if (!Utils::isUnset($request->outputBucket)) {
            $query['OutputBucket'] = $request->outputBucket;
        }
        if (!Utils::isUnset($request->outputLocation)) {
            $query['OutputLocation'] = $request->outputLocation;
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
            'action'      => 'SubmitEditingJobs',
            'version'     => '2018-05-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitEditingJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SubmitEditingJobsRequest $request SubmitEditingJobsRequest
     *
     * @return SubmitEditingJobsResponse SubmitEditingJobsResponse
     */
    public function submitEditingJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitEditingJobsWithOptions($request, $runtime);
    }

    /**
     * @param SubmitJobsRequest $request SubmitJobsRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return SubmitJobsResponse SubmitJobsResponse
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
            'version'     => '2018-05-28',
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
     * @param SubmitJobsRequest $request SubmitJobsRequest
     *
     * @return SubmitJobsResponse SubmitJobsResponse
     */
    public function submitJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitJobsWithOptions($request, $runtime);
    }

    /**
     * @param SubmitMediaInfoJobRequest $request SubmitMediaInfoJobRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return SubmitMediaInfoJobResponse SubmitMediaInfoJobResponse
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
            'version'     => '2018-05-28',
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
     * @param SubmitMediaInfoJobRequest $request SubmitMediaInfoJobRequest
     *
     * @return SubmitMediaInfoJobResponse SubmitMediaInfoJobResponse
     */
    public function submitMediaInfoJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitMediaInfoJobWithOptions($request, $runtime);
    }

    /**
     * @param SubmitSnapshotJobRequest $request SubmitSnapshotJobRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return SubmitSnapshotJobResponse SubmitSnapshotJobResponse
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
            'version'     => '2018-05-28',
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
     * @param SubmitSnapshotJobRequest $request SubmitSnapshotJobRequest
     *
     * @return SubmitSnapshotJobResponse SubmitSnapshotJobResponse
     */
    public function submitSnapshotJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitSnapshotJobWithOptions($request, $runtime);
    }

    /**
     * @param UnbindInputBucketRequest $request UnbindInputBucketRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return UnbindInputBucketResponse UnbindInputBucketResponse
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
            'version'     => '2018-05-28',
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
     * @param UnbindInputBucketRequest $request UnbindInputBucketRequest
     *
     * @return UnbindInputBucketResponse UnbindInputBucketResponse
     */
    public function unbindInputBucket($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unbindInputBucketWithOptions($request, $runtime);
    }

    /**
     * @param UnbindOutputBucketRequest $request UnbindOutputBucketRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return UnbindOutputBucketResponse UnbindOutputBucketResponse
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
            'version'     => '2018-05-28',
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
     * @param UnbindOutputBucketRequest $request UnbindOutputBucketRequest
     *
     * @return UnbindOutputBucketResponse UnbindOutputBucketResponse
     */
    public function unbindOutputBucket($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unbindOutputBucketWithOptions($request, $runtime);
    }

    /**
     * @param UpdateCategoryNameRequest $request UpdateCategoryNameRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateCategoryNameResponse UpdateCategoryNameResponse
     */
    public function updateCategoryNameWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cateId)) {
            $query['CateId'] = $request->cateId;
        }
        if (!Utils::isUnset($request->cateName)) {
            $query['CateName'] = $request->cateName;
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
            'action'      => 'UpdateCategoryName',
            'version'     => '2018-05-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateCategoryNameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateCategoryNameRequest $request UpdateCategoryNameRequest
     *
     * @return UpdateCategoryNameResponse UpdateCategoryNameResponse
     */
    public function updateCategoryName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCategoryNameWithOptions($request, $runtime);
    }

    /**
     * @param UpdateMediaRequest $request UpdateMediaRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateMediaResponse UpdateMediaResponse
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
            'version'     => '2018-05-28',
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
     * @param UpdateMediaRequest $request UpdateMediaRequest
     *
     * @return UpdateMediaResponse UpdateMediaResponse
     */
    public function updateMedia($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateMediaWithOptions($request, $runtime);
    }

    /**
     * @param UpdateMediaCategoryRequest $request UpdateMediaCategoryRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateMediaCategoryResponse UpdateMediaCategoryResponse
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
            'version'     => '2018-05-28',
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
     * @param UpdateMediaCategoryRequest $request UpdateMediaCategoryRequest
     *
     * @return UpdateMediaCategoryResponse UpdateMediaCategoryResponse
     */
    public function updateMediaCategory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateMediaCategoryWithOptions($request, $runtime);
    }

    /**
     * @param UpdateMediaCoverRequest $request UpdateMediaCoverRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateMediaCoverResponse UpdateMediaCoverResponse
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
            'version'     => '2018-05-28',
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
     * @param UpdateMediaCoverRequest $request UpdateMediaCoverRequest
     *
     * @return UpdateMediaCoverResponse UpdateMediaCoverResponse
     */
    public function updateMediaCover($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateMediaCoverWithOptions($request, $runtime);
    }

    /**
     * @param UpdateMediaPublishStateRequest $request UpdateMediaPublishStateRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateMediaPublishStateResponse UpdateMediaPublishStateResponse
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
            'version'     => '2018-05-28',
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
     * @param UpdateMediaPublishStateRequest $request UpdateMediaPublishStateRequest
     *
     * @return UpdateMediaPublishStateResponse UpdateMediaPublishStateResponse
     */
    public function updateMediaPublishState($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateMediaPublishStateWithOptions($request, $runtime);
    }

    /**
     * @param UpdateMediaWorkflowRequest $request UpdateMediaWorkflowRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateMediaWorkflowResponse UpdateMediaWorkflowResponse
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
            'version'     => '2018-05-28',
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
     * @param UpdateMediaWorkflowRequest $request UpdateMediaWorkflowRequest
     *
     * @return UpdateMediaWorkflowResponse UpdateMediaWorkflowResponse
     */
    public function updateMediaWorkflow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateMediaWorkflowWithOptions($request, $runtime);
    }

    /**
     * @param UpdateMediaWorkflowTriggerModeRequest $request UpdateMediaWorkflowTriggerModeRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateMediaWorkflowTriggerModeResponse UpdateMediaWorkflowTriggerModeResponse
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
            'version'     => '2018-05-28',
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
     * @param UpdateMediaWorkflowTriggerModeRequest $request UpdateMediaWorkflowTriggerModeRequest
     *
     * @return UpdateMediaWorkflowTriggerModeResponse UpdateMediaWorkflowTriggerModeResponse
     */
    public function updateMediaWorkflowTriggerMode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateMediaWorkflowTriggerModeWithOptions($request, $runtime);
    }

    /**
     * @param UpdatePipelineRequest $request UpdatePipelineRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdatePipelineResponse UpdatePipelineResponse
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
            'version'     => '2018-05-28',
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
     * @param UpdatePipelineRequest $request UpdatePipelineRequest
     *
     * @return UpdatePipelineResponse UpdatePipelineResponse
     */
    public function updatePipeline($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updatePipelineWithOptions($request, $runtime);
    }

    /**
     * @param UpdateTemplateRequest $request UpdateTemplateRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateTemplateResponse UpdateTemplateResponse
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
            'version'     => '2018-05-28',
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
     * @param UpdateTemplateRequest $request UpdateTemplateRequest
     *
     * @return UpdateTemplateResponse UpdateTemplateResponse
     */
    public function updateTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateTemplateWithOptions($request, $runtime);
    }

    /**
     * @param UpdateWaterMarkTemplateRequest $request UpdateWaterMarkTemplateRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateWaterMarkTemplateResponse UpdateWaterMarkTemplateResponse
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
            'version'     => '2018-05-28',
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
     * @param UpdateWaterMarkTemplateRequest $request UpdateWaterMarkTemplateRequest
     *
     * @return UpdateWaterMarkTemplateResponse UpdateWaterMarkTemplateResponse
     */
    public function updateWaterMarkTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateWaterMarkTemplateWithOptions($request, $runtime);
    }
}
