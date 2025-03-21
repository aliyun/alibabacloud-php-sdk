<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Brainindustrial\V20200920;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\ActivateLicenseRequest;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\ActivateLicenseResponse;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\CreateEssOptJobRequest;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\CreateEssOptJobResponse;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\CreateEssOptJobShrinkRequest;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\CreateLoadForecastJobRequest;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\CreateLoadForecastJobResponse;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\CreateLoadForecastJobShrinkRequest;
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
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\OpenApiInvokeRequest;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\OpenApiInvokeResponse;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\UpdateLicenseDescriptionRequest;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\UpdateLicenseDescriptionResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @summary 激活License
     *  *
     * @param ActivateLicenseRequest $request ActivateLicenseRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ActivateLicenseResponse ActivateLicenseResponse
     */
    public function activateLicenseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->fingerprint)) {
            $body['Fingerprint'] = $request->fingerprint;
        }
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->orderId)) {
            $body['OrderId'] = $request->orderId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ActivateLicenseResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ActivateLicenseResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 激活License
     *  *
     * @param ActivateLicenseRequest $request ActivateLicenseRequest
     *
     * @return ActivateLicenseResponse ActivateLicenseResponse
     */
    public function activateLicense($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->activateLicenseWithOptions($request, $runtime);
    }

    /**
     * @summary 创建储能运行优化任务
     *  *
     * @param CreateEssOptJobRequest $tmpReq  CreateEssOptJobRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateEssOptJobResponse CreateEssOptJobResponse
     */
    public function createEssOptJobWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateEssOptJobShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->elecPrice)) {
            $request->elecPriceShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->elecPrice, 'ElecPrice', 'json');
        }
        if (!Utils::isUnset($tmpReq->genPrice)) {
            $request->genPriceShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->genPrice, 'GenPrice', 'json');
        }
        if (!Utils::isUnset($tmpReq->location)) {
            $request->locationShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->location, 'Location', 'json');
        }
        if (!Utils::isUnset($tmpReq->systemData)) {
            $request->systemDataShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->systemData, 'SystemData', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->duration)) {
            $body['Duration'] = $request->duration;
        }
        if (!Utils::isUnset($request->elecPriceShrink)) {
            $body['ElecPrice'] = $request->elecPriceShrink;
        }
        if (!Utils::isUnset($request->freq)) {
            $body['Freq'] = $request->freq;
        }
        if (!Utils::isUnset($request->genPriceShrink)) {
            $body['GenPrice'] = $request->genPriceShrink;
        }
        if (!Utils::isUnset($request->locationShrink)) {
            $body['Location'] = $request->locationShrink;
        }
        if (!Utils::isUnset($request->modelVersion)) {
            $body['ModelVersion'] = $request->modelVersion;
        }
        if (!Utils::isUnset($request->runDate)) {
            $body['RunDate'] = $request->runDate;
        }
        if (!Utils::isUnset($request->systemDataShrink)) {
            $body['SystemData'] = $request->systemDataShrink;
        }
        if (!Utils::isUnset($request->timeZone)) {
            $body['TimeZone'] = $request->timeZone;
        }
        if (!Utils::isUnset($request->topoType)) {
            $body['TopoType'] = $request->topoType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateEssOptJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateEssOptJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 创建储能运行优化任务
     *  *
     * @param CreateEssOptJobRequest $request CreateEssOptJobRequest
     *
     * @return CreateEssOptJobResponse CreateEssOptJobResponse
     */
    public function createEssOptJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createEssOptJobWithOptions($request, $runtime);
    }

    /**
     * @summary 创建用电负荷预测任务
     *  *
     * @param CreateLoadForecastJobRequest $tmpReq  CreateLoadForecastJobRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateLoadForecastJobResponse CreateLoadForecastJobResponse
     */
    public function createLoadForecastJobWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateLoadForecastJobShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->historyData)) {
            $request->historyDataShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->historyData, 'HistoryData', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->deviceType)) {
            $body['DeviceType'] = $request->deviceType;
        }
        if (!Utils::isUnset($request->duration)) {
            $body['Duration'] = $request->duration;
        }
        if (!Utils::isUnset($request->freq)) {
            $body['Freq'] = $request->freq;
        }
        if (!Utils::isUnset($request->historyDataShrink)) {
            $body['HistoryData'] = $request->historyDataShrink;
        }
        if (!Utils::isUnset($request->modelVersion)) {
            $body['ModelVersion'] = $request->modelVersion;
        }
        if (!Utils::isUnset($request->runDate)) {
            $body['RunDate'] = $request->runDate;
        }
        if (!Utils::isUnset($request->systemType)) {
            $body['SystemType'] = $request->systemType;
        }
        if (!Utils::isUnset($request->timeZone)) {
            $body['TimeZone'] = $request->timeZone;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateLoadForecastJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateLoadForecastJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 创建用电负荷预测任务
     *  *
     * @param CreateLoadForecastJobRequest $request CreateLoadForecastJobRequest
     *
     * @return CreateLoadForecastJobResponse CreateLoadForecastJobResponse
     */
    public function createLoadForecastJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createLoadForecastJobWithOptions($request, $runtime);
    }

    /**
     * @summary 创建发电功率预测任务
     *  *
     * @param CreatePowerForecastJobRequest $tmpReq  CreatePowerForecastJobRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return CreatePowerForecastJobResponse CreatePowerForecastJobResponse
     */
    public function createPowerForecastJobWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreatePowerForecastJobShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->historyData)) {
            $request->historyDataShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->historyData, 'HistoryData', 'json');
        }
        if (!Utils::isUnset($tmpReq->location)) {
            $request->locationShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->location, 'Location', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->deviceType)) {
            $body['DeviceType'] = $request->deviceType;
        }
        if (!Utils::isUnset($request->duration)) {
            $body['Duration'] = $request->duration;
        }
        if (!Utils::isUnset($request->freq)) {
            $body['Freq'] = $request->freq;
        }
        if (!Utils::isUnset($request->historyDataShrink)) {
            $body['HistoryData'] = $request->historyDataShrink;
        }
        if (!Utils::isUnset($request->locationShrink)) {
            $body['Location'] = $request->locationShrink;
        }
        if (!Utils::isUnset($request->modelVersion)) {
            $body['ModelVersion'] = $request->modelVersion;
        }
        if (!Utils::isUnset($request->runDate)) {
            $body['RunDate'] = $request->runDate;
        }
        if (!Utils::isUnset($request->systemType)) {
            $body['SystemType'] = $request->systemType;
        }
        if (!Utils::isUnset($request->timeZone)) {
            $body['TimeZone'] = $request->timeZone;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreatePowerForecastJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreatePowerForecastJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 创建发电功率预测任务
     *  *
     * @param CreatePowerForecastJobRequest $request CreatePowerForecastJobRequest
     *
     * @return CreatePowerForecastJobResponse CreatePowerForecastJobResponse
     */
    public function createPowerForecastJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPowerForecastJobWithOptions($request, $runtime);
    }

    /**
     * @summary 查询aivpp算法job
     *  *
     * @param GetAivppAlgoJobRequest $request GetAivppAlgoJobRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAivppAlgoJobResponse GetAivppAlgoJobResponse
     */
    public function getAivppAlgoJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->jobId)) {
            $body['JobId'] = $request->jobId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetAivppAlgoJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetAivppAlgoJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 查询aivpp算法job
     *  *
     * @param GetAivppAlgoJobRequest $request GetAivppAlgoJobRequest
     *
     * @return GetAivppAlgoJobResponse GetAivppAlgoJobResponse
     */
    public function getAivppAlgoJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAivppAlgoJobWithOptions($request, $runtime);
    }

    /**
     * @summary License详情
     *  *
     * @param GetLicenseRequest $request GetLicenseRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return GetLicenseResponse GetLicenseResponse
     */
    public function getLicenseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetLicenseResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetLicenseResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary License详情
     *  *
     * @param GetLicenseRequest $request GetLicenseRequest
     *
     * @return GetLicenseResponse GetLicenseResponse
     */
    public function getLicense($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLicenseWithOptions($request, $runtime);
    }

    /**
     * @summary 获取用户AIVPP资源列表
     *  *
     * @param ListAivppResourcesRequest $request ListAivppResourcesRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAivppResourcesResponse ListAivppResourcesResponse
     */
    public function listAivppResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->currentPage)) {
            $body['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $body['MaxResults'] = $request->maxResults;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListAivppResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListAivppResourcesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 获取用户AIVPP资源列表
     *  *
     * @param ListAivppResourcesRequest $request ListAivppResourcesRequest
     *
     * @return ListAivppResourcesResponse ListAivppResourcesResponse
     */
    public function listAivppResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAivppResourcesWithOptions($request, $runtime);
    }

    /**
     * @summary License列表
     *  *
     * @param ListLicensesRequest $request ListLicensesRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return ListLicensesResponse ListLicensesResponse
     */
    public function listLicensesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->currentPage)) {
            $body['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->queryStr)) {
            $body['QueryStr'] = $request->queryStr;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListLicensesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListLicensesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary License列表
     *  *
     * @param ListLicensesRequest $request ListLicensesRequest
     *
     * @return ListLicensesResponse ListLicensesResponse
     */
    public function listLicenses($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listLicensesWithOptions($request, $runtime);
    }

    /**
     * @summary 获取用户资源列表
     *  *
     * @param ListUserResourcesRequest $request ListUserResourcesRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ListUserResourcesResponse ListUserResourcesResponse
     */
    public function listUserResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->commodityCode)) {
            $body['CommodityCode'] = $request->commodityCode;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListUserResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListUserResourcesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 获取用户资源列表
     *  *
     * @param ListUserResourcesRequest $request ListUserResourcesRequest
     *
     * @return ListUserResourcesResponse ListUserResourcesResponse
     */
    public function listUserResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUserResourcesWithOptions($request, $runtime);
    }

    /**
     * @summary 调用aics openapi
     *  *
     * @param OpenApiInvokeRequest $request OpenApiInvokeRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return OpenApiInvokeResponse OpenApiInvokeResponse
     */
    public function openApiInvokeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->nodeId)) {
            $query['NodeId'] = $request->nodeId;
        }
        if (!Utils::isUnset($request->serviceId)) {
            $query['ServiceId'] = $request->serviceId;
        }
        $body = [];
        if (!Utils::isUnset($request->param)) {
            $body['Param'] = $request->param;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'OpenApiInvoke',
            'version' => '2020-09-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return OpenApiInvokeResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return OpenApiInvokeResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 调用aics openapi
     *  *
     * @param OpenApiInvokeRequest $request OpenApiInvokeRequest
     *
     * @return OpenApiInvokeResponse OpenApiInvokeResponse
     */
    public function openApiInvoke($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->openApiInvokeWithOptions($request, $runtime);
    }

    /**
     * @summary 更新license描述
     *  *
     * @param UpdateLicenseDescriptionRequest $request UpdateLicenseDescriptionRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateLicenseDescriptionResponse UpdateLicenseDescriptionResponse
     */
    public function updateLicenseDescriptionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpdateLicenseDescriptionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateLicenseDescriptionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 更新license描述
     *  *
     * @param UpdateLicenseDescriptionRequest $request UpdateLicenseDescriptionRequest
     *
     * @return UpdateLicenseDescriptionResponse UpdateLicenseDescriptionResponse
     */
    public function updateLicenseDescription($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateLicenseDescriptionWithOptions($request, $runtime);
    }
}
