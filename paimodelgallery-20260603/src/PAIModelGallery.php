<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAIModelGallery\V20260603;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\PAIModelGallery\V20260603\Models\ListModelGalleryModelsRequest;
use AlibabaCloud\SDK\PAIModelGallery\V20260603\Models\ListModelGalleryModelsResponse;
use AlibabaCloud\SDK\PAIModelGallery\V20260603\Models\ListModelGalleryModelsShrinkRequest;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class PAIModelGallery extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap = [
            'us-west-1' => 'paimodelgallery.us-west-1.aliyuncs.com',
            'us-east-1' => 'paimodelgallery.us-east-1.aliyuncs.com',
            'eu-central-1' => 'paimodelgallery.eu-central-1.aliyuncs.com',
            'cn-wulanchabu' => 'paimodelgallery.cn-wulanchabu.aliyuncs.com',
            'cn-shenzhen' => 'paimodelgallery.cn-shenzhen.aliyuncs.com',
            'cn-shanghai' => 'paimodelgallery.cn-shanghai.aliyuncs.com',
            'cn-hongkong' => 'paimodelgallery.cn-hongkong.aliyuncs.com',
            'cn-hangzhou' => 'paimodelgallery.cn-hangzhou.aliyuncs.com',
            'cn-guangzhou' => 'paimodelgallery.cn-guangzhou.aliyuncs.com',
            'cn-beijing' => 'paimodelgallery.cn-beijing.aliyuncs.com',
            'ap-southeast-5' => 'paimodelgallery.ap-southeast-5.aliyuncs.com',
            'ap-southeast-3' => 'paimodelgallery.ap-southeast-3.aliyuncs.com',
            'ap-southeast-1' => 'paimodelgallery.ap-southeast-1.aliyuncs.com',
            'ap-northeast-2' => 'paimodelgallery.ap-northeast-2.aliyuncs.com',
            'ap-northeast-1' => 'paimodelgallery.ap-northeast-1.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('paimodelgallery', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 获取ModelGallery模型列表.
     *
     * @param tmpReq - ListModelGalleryModelsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListModelGalleryModelsResponse
     *
     * @param ListModelGalleryModelsRequest $tmpReq
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return ListModelGalleryModelsResponse
     */
    public function listModelGalleryModelsWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ListModelGalleryModelsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->conditions) {
            $request->conditionsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->conditions, 'Conditions', 'json');
        }

        if (null !== $tmpReq->tag) {
            $request->tagShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tag, 'Tag', 'json');
        }

        $query = [];
        if (null !== $request->collections) {
            @$query['Collections'] = $request->collections;
        }

        if (null !== $request->compressible) {
            @$query['Compressible'] = $request->compressible;
        }

        if (null !== $request->conditionsShrink) {
            @$query['Conditions'] = $request->conditionsShrink;
        }

        if (null !== $request->deepThink) {
            @$query['DeepThink'] = $request->deepThink;
        }

        if (null !== $request->demonstrable) {
            @$query['Demonstrable'] = $request->demonstrable;
        }

        if (null !== $request->deployable) {
            @$query['Deployable'] = $request->deployable;
        }

        if (null !== $request->distillable) {
            @$query['Distillable'] = $request->distillable;
        }

        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->evaluable) {
            @$query['Evaluable'] = $request->evaluable;
        }

        if (null !== $request->functionCall) {
            @$query['FunctionCall'] = $request->functionCall;
        }

        if (null !== $request->modelName) {
            @$query['ModelName'] = $request->modelName;
        }

        if (null !== $request->modelSeries) {
            @$query['ModelSeries'] = $request->modelSeries;
        }

        if (null !== $request->modelType) {
            @$query['ModelType'] = $request->modelType;
        }

        if (null !== $request->order) {
            @$query['Order'] = $request->order;
        }

        if (null !== $request->origin) {
            @$query['Origin'] = $request->origin;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->query) {
            @$query['Query'] = $request->query;
        }

        if (null !== $request->sortBy) {
            @$query['SortBy'] = $request->sortBy;
        }

        if (null !== $request->supportedCompressionResource) {
            @$query['SupportedCompressionResource'] = $request->supportedCompressionResource;
        }

        if (null !== $request->supportedDistillationResource) {
            @$query['SupportedDistillationResource'] = $request->supportedDistillationResource;
        }

        if (null !== $request->supportedEvaluationResource) {
            @$query['SupportedEvaluationResource'] = $request->supportedEvaluationResource;
        }

        if (null !== $request->supportedInferenceResource) {
            @$query['SupportedInferenceResource'] = $request->supportedInferenceResource;
        }

        if (null !== $request->supportedTrainingResource) {
            @$query['SupportedTrainingResource'] = $request->supportedTrainingResource;
        }

        if (null !== $request->tagShrink) {
            @$query['Tag'] = $request->tagShrink;
        }

        if (null !== $request->task) {
            @$query['Task'] = $request->task;
        }

        if (null !== $request->trainable) {
            @$query['Trainable'] = $request->trainable;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListModelGalleryModels',
            'version' => '2026-06-03',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/modelgallery/models',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListModelGalleryModelsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取ModelGallery模型列表.
     *
     * @param request - ListModelGalleryModelsRequest
     *
     * @returns ListModelGalleryModelsResponse
     *
     * @param ListModelGalleryModelsRequest $request
     *
     * @return ListModelGalleryModelsResponse
     */
    public function listModelGalleryModels($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listModelGalleryModelsWithOptions($request, $headers, $runtime);
    }
}
