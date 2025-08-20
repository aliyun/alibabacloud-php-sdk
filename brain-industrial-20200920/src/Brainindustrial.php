<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Brainindustrial\V20200920;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\ActivateLicenseRequest;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\ActivateLicenseResponse;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\AicsOpenApiInvokeRequest;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\AicsOpenApiInvokeResponse;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\AicsOpenApiInvokeShrinkRequest;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\CreateEssOptJobRequest;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\CreateEssOptJobResponse;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\CreateEssOptJobShrinkRequest;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\CreateLoadForecastByFileUrlJobRequest;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\CreateLoadForecastByFileUrlJobResponse;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\CreateLoadForecastJobRequest;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\CreateLoadForecastJobResponse;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\CreateLoadForecastJobShrinkRequest;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\CreatePowerForecastByFileUrlJobRequest;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\CreatePowerForecastByFileUrlJobResponse;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\CreatePowerForecastByFileUrlJobShrinkRequest;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\CreatePowerForecastJobRequest;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\CreatePowerForecastJobResponse;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\CreatePowerForecastJobShrinkRequest;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetAivppAlgoJobRequest;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetAivppAlgoJobResponse;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetLicenseRequest;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetLicenseResponse;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\ListAivppResourcesRequest;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\ListAivppResourcesResponse;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\ListLicensesRequest;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\ListLicensesResponse;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\ListUserResourcesRequest;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\ListUserResourcesResponse;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\UpdateLicenseDescriptionRequest;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\UpdateLicenseDescriptionResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Brainindustrial extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('brain-industrial', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 激活License.
     *
     * @param request - ActivateLicenseRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ActivateLicenseResponse
     *
     * @param ActivateLicenseRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ActivateLicenseResponse
     */
    public function activateLicenseWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->fingerprint) {
            @$body['Fingerprint'] = $request->fingerprint;
        }

        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->orderId) {
            @$body['OrderId'] = $request->orderId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ActivateLicense',
            'version' => '2020-09-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ActivateLicenseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 激活License.
     *
     * @param request - ActivateLicenseRequest
     *
     * @returns ActivateLicenseResponse
     *
     * @param ActivateLicenseRequest $request
     *
     * @return ActivateLicenseResponse
     */
    public function activateLicense($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->activateLicenseWithOptions($request, $runtime);
    }

    /**
     * 调用aics openapi.
     *
     * @param tmpReq - AicsOpenApiInvokeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AicsOpenApiInvokeResponse
     *
     * @param AicsOpenApiInvokeRequest $tmpReq
     * @param RuntimeOptions           $runtime
     *
     * @return AicsOpenApiInvokeResponse
     */
    public function aicsOpenApiInvokeWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new AicsOpenApiInvokeShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->param) {
            $request->paramShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->param, 'Param', 'json');
        }

        $query = [];
        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        if (null !== $request->nodeId) {
            @$query['NodeId'] = $request->nodeId;
        }

        if (null !== $request->serviceId) {
            @$query['ServiceId'] = $request->serviceId;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $body = [];
        if (null !== $request->paramShrink) {
            @$body['Param'] = $request->paramShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AicsOpenApiInvoke',
            'version' => '2020-09-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AicsOpenApiInvokeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 调用aics openapi.
     *
     * @param request - AicsOpenApiInvokeRequest
     *
     * @returns AicsOpenApiInvokeResponse
     *
     * @param AicsOpenApiInvokeRequest $request
     *
     * @return AicsOpenApiInvokeResponse
     */
    public function aicsOpenApiInvoke($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->aicsOpenApiInvokeWithOptions($request, $runtime);
    }

    /**
     * 创建储能运行优化任务
     *
     * @param tmpReq - CreateEssOptJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateEssOptJobResponse
     *
     * @param CreateEssOptJobRequest $tmpReq
     * @param RuntimeOptions         $runtime
     *
     * @return CreateEssOptJobResponse
     */
    public function createEssOptJobWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateEssOptJobShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->elecPrice) {
            $request->elecPriceShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->elecPrice, 'ElecPrice', 'json');
        }

        if (null !== $tmpReq->genPrice) {
            $request->genPriceShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->genPrice, 'GenPrice', 'json');
        }

        if (null !== $tmpReq->location) {
            $request->locationShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->location, 'Location', 'json');
        }

        if (null !== $tmpReq->systemData) {
            $request->systemDataShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->systemData, 'SystemData', 'json');
        }

        $body = [];
        if (null !== $request->businessKey) {
            @$body['BusinessKey'] = $request->businessKey;
        }

        if (null !== $request->duration) {
            @$body['Duration'] = $request->duration;
        }

        if (null !== $request->elecPriceShrink) {
            @$body['ElecPrice'] = $request->elecPriceShrink;
        }

        if (null !== $request->freq) {
            @$body['Freq'] = $request->freq;
        }

        if (null !== $request->genPriceShrink) {
            @$body['GenPrice'] = $request->genPriceShrink;
        }

        if (null !== $request->locationShrink) {
            @$body['Location'] = $request->locationShrink;
        }

        if (null !== $request->modelVersion) {
            @$body['ModelVersion'] = $request->modelVersion;
        }

        if (null !== $request->runDate) {
            @$body['RunDate'] = $request->runDate;
        }

        if (null !== $request->systemDataShrink) {
            @$body['SystemData'] = $request->systemDataShrink;
        }

        if (null !== $request->timeZone) {
            @$body['TimeZone'] = $request->timeZone;
        }

        if (null !== $request->topoType) {
            @$body['TopoType'] = $request->topoType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateEssOptJob',
            'version' => '2020-09-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateEssOptJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建储能运行优化任务
     *
     * @param request - CreateEssOptJobRequest
     *
     * @returns CreateEssOptJobResponse
     *
     * @param CreateEssOptJobRequest $request
     *
     * @return CreateEssOptJobResponse
     */
    public function createEssOptJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createEssOptJobWithOptions($request, $runtime);
    }

    /**
     * 创建用电负荷预测任务，历史数据来自文件url.
     *
     * @param request - CreateLoadForecastByFileUrlJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateLoadForecastByFileUrlJobResponse
     *
     * @param CreateLoadForecastByFileUrlJobRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return CreateLoadForecastByFileUrlJobResponse
     */
    public function createLoadForecastByFileUrlJobWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->businessKey) {
            @$body['BusinessKey'] = $request->businessKey;
        }

        if (null !== $request->deviceType) {
            @$body['DeviceType'] = $request->deviceType;
        }

        if (null !== $request->duration) {
            @$body['Duration'] = $request->duration;
        }

        if (null !== $request->freq) {
            @$body['Freq'] = $request->freq;
        }

        if (null !== $request->historyUrl) {
            @$body['HistoryUrl'] = $request->historyUrl;
        }

        if (null !== $request->modelVersion) {
            @$body['ModelVersion'] = $request->modelVersion;
        }

        if (null !== $request->runDate) {
            @$body['RunDate'] = $request->runDate;
        }

        if (null !== $request->systemType) {
            @$body['SystemType'] = $request->systemType;
        }

        if (null !== $request->timeColumn) {
            @$body['TimeColumn'] = $request->timeColumn;
        }

        if (null !== $request->timeZone) {
            @$body['TimeZone'] = $request->timeZone;
        }

        if (null !== $request->valueColumn) {
            @$body['ValueColumn'] = $request->valueColumn;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateLoadForecastByFileUrlJob',
            'version' => '2020-09-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateLoadForecastByFileUrlJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建用电负荷预测任务，历史数据来自文件url.
     *
     * @param request - CreateLoadForecastByFileUrlJobRequest
     *
     * @returns CreateLoadForecastByFileUrlJobResponse
     *
     * @param CreateLoadForecastByFileUrlJobRequest $request
     *
     * @return CreateLoadForecastByFileUrlJobResponse
     */
    public function createLoadForecastByFileUrlJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createLoadForecastByFileUrlJobWithOptions($request, $runtime);
    }

    /**
     * 创建用电负荷预测任务
     *
     * @param tmpReq - CreateLoadForecastJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateLoadForecastJobResponse
     *
     * @param CreateLoadForecastJobRequest $tmpReq
     * @param RuntimeOptions               $runtime
     *
     * @return CreateLoadForecastJobResponse
     */
    public function createLoadForecastJobWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateLoadForecastJobShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->historyData) {
            $request->historyDataShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->historyData, 'HistoryData', 'json');
        }

        $body = [];
        if (null !== $request->businessKey) {
            @$body['BusinessKey'] = $request->businessKey;
        }

        if (null !== $request->deviceType) {
            @$body['DeviceType'] = $request->deviceType;
        }

        if (null !== $request->duration) {
            @$body['Duration'] = $request->duration;
        }

        if (null !== $request->freq) {
            @$body['Freq'] = $request->freq;
        }

        if (null !== $request->historyDataShrink) {
            @$body['HistoryData'] = $request->historyDataShrink;
        }

        if (null !== $request->modelVersion) {
            @$body['ModelVersion'] = $request->modelVersion;
        }

        if (null !== $request->runDate) {
            @$body['RunDate'] = $request->runDate;
        }

        if (null !== $request->systemType) {
            @$body['SystemType'] = $request->systemType;
        }

        if (null !== $request->timeZone) {
            @$body['TimeZone'] = $request->timeZone;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateLoadForecastJob',
            'version' => '2020-09-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateLoadForecastJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建用电负荷预测任务
     *
     * @param request - CreateLoadForecastJobRequest
     *
     * @returns CreateLoadForecastJobResponse
     *
     * @param CreateLoadForecastJobRequest $request
     *
     * @return CreateLoadForecastJobResponse
     */
    public function createLoadForecastJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createLoadForecastJobWithOptions($request, $runtime);
    }

    /**
     * 创建发电功率预测任务，历史数据来自文件url.
     *
     * @param tmpReq - CreatePowerForecastByFileUrlJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreatePowerForecastByFileUrlJobResponse
     *
     * @param CreatePowerForecastByFileUrlJobRequest $tmpReq
     * @param RuntimeOptions                         $runtime
     *
     * @return CreatePowerForecastByFileUrlJobResponse
     */
    public function createPowerForecastByFileUrlJobWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreatePowerForecastByFileUrlJobShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->location) {
            $request->locationShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->location, 'Location', 'json');
        }

        $body = [];
        if (null !== $request->businessKey) {
            @$body['BusinessKey'] = $request->businessKey;
        }

        if (null !== $request->deviceType) {
            @$body['DeviceType'] = $request->deviceType;
        }

        if (null !== $request->duration) {
            @$body['Duration'] = $request->duration;
        }

        if (null !== $request->freq) {
            @$body['Freq'] = $request->freq;
        }

        if (null !== $request->historyUrl) {
            @$body['HistoryUrl'] = $request->historyUrl;
        }

        if (null !== $request->locationShrink) {
            @$body['Location'] = $request->locationShrink;
        }

        if (null !== $request->modelVersion) {
            @$body['ModelVersion'] = $request->modelVersion;
        }

        if (null !== $request->runDate) {
            @$body['RunDate'] = $request->runDate;
        }

        if (null !== $request->systemType) {
            @$body['SystemType'] = $request->systemType;
        }

        if (null !== $request->timeColumn) {
            @$body['TimeColumn'] = $request->timeColumn;
        }

        if (null !== $request->timeZone) {
            @$body['TimeZone'] = $request->timeZone;
        }

        if (null !== $request->valueColumn) {
            @$body['ValueColumn'] = $request->valueColumn;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreatePowerForecastByFileUrlJob',
            'version' => '2020-09-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreatePowerForecastByFileUrlJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建发电功率预测任务，历史数据来自文件url.
     *
     * @param request - CreatePowerForecastByFileUrlJobRequest
     *
     * @returns CreatePowerForecastByFileUrlJobResponse
     *
     * @param CreatePowerForecastByFileUrlJobRequest $request
     *
     * @return CreatePowerForecastByFileUrlJobResponse
     */
    public function createPowerForecastByFileUrlJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPowerForecastByFileUrlJobWithOptions($request, $runtime);
    }

    /**
     * 创建发电功率预测任务
     *
     * @param tmpReq - CreatePowerForecastJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreatePowerForecastJobResponse
     *
     * @param CreatePowerForecastJobRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return CreatePowerForecastJobResponse
     */
    public function createPowerForecastJobWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreatePowerForecastJobShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->historyData) {
            $request->historyDataShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->historyData, 'HistoryData', 'json');
        }

        if (null !== $tmpReq->location) {
            $request->locationShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->location, 'Location', 'json');
        }

        $body = [];
        if (null !== $request->businessKey) {
            @$body['BusinessKey'] = $request->businessKey;
        }

        if (null !== $request->deviceType) {
            @$body['DeviceType'] = $request->deviceType;
        }

        if (null !== $request->duration) {
            @$body['Duration'] = $request->duration;
        }

        if (null !== $request->freq) {
            @$body['Freq'] = $request->freq;
        }

        if (null !== $request->historyDataShrink) {
            @$body['HistoryData'] = $request->historyDataShrink;
        }

        if (null !== $request->locationShrink) {
            @$body['Location'] = $request->locationShrink;
        }

        if (null !== $request->modelVersion) {
            @$body['ModelVersion'] = $request->modelVersion;
        }

        if (null !== $request->runDate) {
            @$body['RunDate'] = $request->runDate;
        }

        if (null !== $request->systemType) {
            @$body['SystemType'] = $request->systemType;
        }

        if (null !== $request->timeZone) {
            @$body['TimeZone'] = $request->timeZone;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreatePowerForecastJob',
            'version' => '2020-09-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreatePowerForecastJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建发电功率预测任务
     *
     * @param request - CreatePowerForecastJobRequest
     *
     * @returns CreatePowerForecastJobResponse
     *
     * @param CreatePowerForecastJobRequest $request
     *
     * @return CreatePowerForecastJobResponse
     */
    public function createPowerForecastJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPowerForecastJobWithOptions($request, $runtime);
    }

    /**
     * 查询aivpp算法job.
     *
     * @param request - GetAivppAlgoJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAivppAlgoJobResponse
     *
     * @param GetAivppAlgoJobRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetAivppAlgoJobResponse
     */
    public function getAivppAlgoJobWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->jobId) {
            @$body['JobId'] = $request->jobId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetAivppAlgoJob',
            'version' => '2020-09-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAivppAlgoJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询aivpp算法job.
     *
     * @param request - GetAivppAlgoJobRequest
     *
     * @returns GetAivppAlgoJobResponse
     *
     * @param GetAivppAlgoJobRequest $request
     *
     * @return GetAivppAlgoJobResponse
     */
    public function getAivppAlgoJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAivppAlgoJobWithOptions($request, $runtime);
    }

    /**
     * License详情.
     *
     * @param request - GetLicenseRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetLicenseResponse
     *
     * @param GetLicenseRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return GetLicenseResponse
     */
    public function getLicenseWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetLicense',
            'version' => '2020-09-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetLicenseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * License详情.
     *
     * @param request - GetLicenseRequest
     *
     * @returns GetLicenseResponse
     *
     * @param GetLicenseRequest $request
     *
     * @return GetLicenseResponse
     */
    public function getLicense($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLicenseWithOptions($request, $runtime);
    }

    /**
     * 获取用户AIVPP资源列表.
     *
     * @param request - ListAivppResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAivppResourcesResponse
     *
     * @param ListAivppResourcesRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListAivppResourcesResponse
     */
    public function listAivppResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->currentPage) {
            @$body['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->maxResults) {
            @$body['MaxResults'] = $request->maxResults;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListAivppResources',
            'version' => '2020-09-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAivppResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取用户AIVPP资源列表.
     *
     * @param request - ListAivppResourcesRequest
     *
     * @returns ListAivppResourcesResponse
     *
     * @param ListAivppResourcesRequest $request
     *
     * @return ListAivppResourcesResponse
     */
    public function listAivppResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAivppResourcesWithOptions($request, $runtime);
    }

    /**
     * License列表.
     *
     * @param request - ListLicensesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListLicensesResponse
     *
     * @param ListLicensesRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListLicensesResponse
     */
    public function listLicensesWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->currentPage) {
            @$body['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->queryStr) {
            @$body['QueryStr'] = $request->queryStr;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListLicenses',
            'version' => '2020-09-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListLicensesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * License列表.
     *
     * @param request - ListLicensesRequest
     *
     * @returns ListLicensesResponse
     *
     * @param ListLicensesRequest $request
     *
     * @return ListLicensesResponse
     */
    public function listLicenses($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listLicensesWithOptions($request, $runtime);
    }

    /**
     * 获取用户资源列表.
     *
     * @param request - ListUserResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListUserResourcesResponse
     *
     * @param ListUserResourcesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListUserResourcesResponse
     */
    public function listUserResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->commodityCode) {
            @$body['CommodityCode'] = $request->commodityCode;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListUserResources',
            'version' => '2020-09-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListUserResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取用户资源列表.
     *
     * @param request - ListUserResourcesRequest
     *
     * @returns ListUserResourcesResponse
     *
     * @param ListUserResourcesRequest $request
     *
     * @return ListUserResourcesResponse
     */
    public function listUserResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUserResourcesWithOptions($request, $runtime);
    }

    /**
     * 更新license描述.
     *
     * @param request - UpdateLicenseDescriptionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateLicenseDescriptionResponse
     *
     * @param UpdateLicenseDescriptionRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return UpdateLicenseDescriptionResponse
     */
    public function updateLicenseDescriptionWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateLicenseDescription',
            'version' => '2020-09-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateLicenseDescriptionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新license描述.
     *
     * @param request - UpdateLicenseDescriptionRequest
     *
     * @returns UpdateLicenseDescriptionResponse
     *
     * @param UpdateLicenseDescriptionRequest $request
     *
     * @return UpdateLicenseDescriptionResponse
     */
    public function updateLicenseDescription($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateLicenseDescriptionWithOptions($request, $runtime);
    }
}
