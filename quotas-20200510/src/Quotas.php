<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quotas\V20200510;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\Quotas\V20200510\Models\CreateQuotaAlarmRequest;
use AlibabaCloud\SDK\Quotas\V20200510\Models\CreateQuotaAlarmResponse;
use AlibabaCloud\SDK\Quotas\V20200510\Models\CreateQuotaApplicationRequest;
use AlibabaCloud\SDK\Quotas\V20200510\Models\CreateQuotaApplicationResponse;
use AlibabaCloud\SDK\Quotas\V20200510\Models\DeleteQuotaAlarmRequest;
use AlibabaCloud\SDK\Quotas\V20200510\Models\DeleteQuotaAlarmResponse;
use AlibabaCloud\SDK\Quotas\V20200510\Models\GetProductQuotaDimensionRequest;
use AlibabaCloud\SDK\Quotas\V20200510\Models\GetProductQuotaDimensionResponse;
use AlibabaCloud\SDK\Quotas\V20200510\Models\GetProductQuotaRequest;
use AlibabaCloud\SDK\Quotas\V20200510\Models\GetProductQuotaResponse;
use AlibabaCloud\SDK\Quotas\V20200510\Models\GetQuotaAlarmRequest;
use AlibabaCloud\SDK\Quotas\V20200510\Models\GetQuotaAlarmResponse;
use AlibabaCloud\SDK\Quotas\V20200510\Models\GetQuotaApplicationRequest;
use AlibabaCloud\SDK\Quotas\V20200510\Models\GetQuotaApplicationResponse;
use AlibabaCloud\SDK\Quotas\V20200510\Models\ListAlarmHistoriesRequest;
use AlibabaCloud\SDK\Quotas\V20200510\Models\ListAlarmHistoriesResponse;
use AlibabaCloud\SDK\Quotas\V20200510\Models\ListDependentQuotasRequest;
use AlibabaCloud\SDK\Quotas\V20200510\Models\ListDependentQuotasResponse;
use AlibabaCloud\SDK\Quotas\V20200510\Models\ListProductQuotaDimensionsRequest;
use AlibabaCloud\SDK\Quotas\V20200510\Models\ListProductQuotaDimensionsResponse;
use AlibabaCloud\SDK\Quotas\V20200510\Models\ListProductQuotasRequest;
use AlibabaCloud\SDK\Quotas\V20200510\Models\ListProductQuotasResponse;
use AlibabaCloud\SDK\Quotas\V20200510\Models\ListProductsRequest;
use AlibabaCloud\SDK\Quotas\V20200510\Models\ListProductsResponse;
use AlibabaCloud\SDK\Quotas\V20200510\Models\ListQuotaAlarmsRequest;
use AlibabaCloud\SDK\Quotas\V20200510\Models\ListQuotaAlarmsResponse;
use AlibabaCloud\SDK\Quotas\V20200510\Models\ListQuotaApplicationsRequest;
use AlibabaCloud\SDK\Quotas\V20200510\Models\ListQuotaApplicationsResponse;
use AlibabaCloud\SDK\Quotas\V20200510\Models\UpdateQuotaAlarmRequest;
use AlibabaCloud\SDK\Quotas\V20200510\Models\UpdateQuotaAlarmResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

class Quotas extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('quotas', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param CreateQuotaAlarmRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateQuotaAlarmResponse
     */
    public function createQuotaAlarmWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateQuotaAlarmResponse::fromMap($this->doRPCRequest('CreateQuotaAlarm', '2020-05-10', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateQuotaAlarmRequest $request
     *
     * @return CreateQuotaAlarmResponse
     */
    public function createQuotaAlarm($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createQuotaAlarmWithOptions($request, $runtime);
    }

    /**
     * @param CreateQuotaApplicationRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CreateQuotaApplicationResponse
     */
    public function createQuotaApplicationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateQuotaApplicationResponse::fromMap($this->doRPCRequest('CreateQuotaApplication', '2020-05-10', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateQuotaApplicationRequest $request
     *
     * @return CreateQuotaApplicationResponse
     */
    public function createQuotaApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createQuotaApplicationWithOptions($request, $runtime);
    }

    /**
     * @param DeleteQuotaAlarmRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteQuotaAlarmResponse
     */
    public function deleteQuotaAlarmWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteQuotaAlarmResponse::fromMap($this->doRPCRequest('DeleteQuotaAlarm', '2020-05-10', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteQuotaAlarmRequest $request
     *
     * @return DeleteQuotaAlarmResponse
     */
    public function deleteQuotaAlarm($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteQuotaAlarmWithOptions($request, $runtime);
    }

    /**
     * @param GetProductQuotaRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetProductQuotaResponse
     */
    public function getProductQuotaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetProductQuotaResponse::fromMap($this->doRPCRequest('GetProductQuota', '2020-05-10', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetProductQuotaRequest $request
     *
     * @return GetProductQuotaResponse
     */
    public function getProductQuota($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getProductQuotaWithOptions($request, $runtime);
    }

    /**
     * @param GetProductQuotaDimensionRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetProductQuotaDimensionResponse
     */
    public function getProductQuotaDimensionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetProductQuotaDimensionResponse::fromMap($this->doRPCRequest('GetProductQuotaDimension', '2020-05-10', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetProductQuotaDimensionRequest $request
     *
     * @return GetProductQuotaDimensionResponse
     */
    public function getProductQuotaDimension($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getProductQuotaDimensionWithOptions($request, $runtime);
    }

    /**
     * @param GetQuotaAlarmRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetQuotaAlarmResponse
     */
    public function getQuotaAlarmWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetQuotaAlarmResponse::fromMap($this->doRPCRequest('GetQuotaAlarm', '2020-05-10', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetQuotaAlarmRequest $request
     *
     * @return GetQuotaAlarmResponse
     */
    public function getQuotaAlarm($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getQuotaAlarmWithOptions($request, $runtime);
    }

    /**
     * @param GetQuotaApplicationRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetQuotaApplicationResponse
     */
    public function getQuotaApplicationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetQuotaApplicationResponse::fromMap($this->doRPCRequest('GetQuotaApplication', '2020-05-10', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetQuotaApplicationRequest $request
     *
     * @return GetQuotaApplicationResponse
     */
    public function getQuotaApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getQuotaApplicationWithOptions($request, $runtime);
    }

    /**
     * @param ListAlarmHistoriesRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListAlarmHistoriesResponse
     */
    public function listAlarmHistoriesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListAlarmHistoriesResponse::fromMap($this->doRPCRequest('ListAlarmHistories', '2020-05-10', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListAlarmHistoriesRequest $request
     *
     * @return ListAlarmHistoriesResponse
     */
    public function listAlarmHistories($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAlarmHistoriesWithOptions($request, $runtime);
    }

    /**
     * @param ListDependentQuotasRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListDependentQuotasResponse
     */
    public function listDependentQuotasWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListDependentQuotasResponse::fromMap($this->doRPCRequest('ListDependentQuotas', '2020-05-10', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListDependentQuotasRequest $request
     *
     * @return ListDependentQuotasResponse
     */
    public function listDependentQuotas($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDependentQuotasWithOptions($request, $runtime);
    }

    /**
     * @param ListProductQuotaDimensionsRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ListProductQuotaDimensionsResponse
     */
    public function listProductQuotaDimensionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListProductQuotaDimensionsResponse::fromMap($this->doRPCRequest('ListProductQuotaDimensions', '2020-05-10', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListProductQuotaDimensionsRequest $request
     *
     * @return ListProductQuotaDimensionsResponse
     */
    public function listProductQuotaDimensions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listProductQuotaDimensionsWithOptions($request, $runtime);
    }

    /**
     * @param ListProductQuotasRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListProductQuotasResponse
     */
    public function listProductQuotasWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListProductQuotasResponse::fromMap($this->doRPCRequest('ListProductQuotas', '2020-05-10', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListProductQuotasRequest $request
     *
     * @return ListProductQuotasResponse
     */
    public function listProductQuotas($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listProductQuotasWithOptions($request, $runtime);
    }

    /**
     * @param ListProductsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListProductsResponse
     */
    public function listProductsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListProductsResponse::fromMap($this->doRPCRequest('ListProducts', '2020-05-10', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListProductsRequest $request
     *
     * @return ListProductsResponse
     */
    public function listProducts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listProductsWithOptions($request, $runtime);
    }

    /**
     * @param ListQuotaAlarmsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListQuotaAlarmsResponse
     */
    public function listQuotaAlarmsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListQuotaAlarmsResponse::fromMap($this->doRPCRequest('ListQuotaAlarms', '2020-05-10', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListQuotaAlarmsRequest $request
     *
     * @return ListQuotaAlarmsResponse
     */
    public function listQuotaAlarms($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listQuotaAlarmsWithOptions($request, $runtime);
    }

    /**
     * @param ListQuotaApplicationsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListQuotaApplicationsResponse
     */
    public function listQuotaApplicationsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListQuotaApplicationsResponse::fromMap($this->doRPCRequest('ListQuotaApplications', '2020-05-10', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListQuotaApplicationsRequest $request
     *
     * @return ListQuotaApplicationsResponse
     */
    public function listQuotaApplications($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listQuotaApplicationsWithOptions($request, $runtime);
    }

    /**
     * @param UpdateQuotaAlarmRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateQuotaAlarmResponse
     */
    public function updateQuotaAlarmWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateQuotaAlarmResponse::fromMap($this->doRPCRequest('UpdateQuotaAlarm', '2020-05-10', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateQuotaAlarmRequest $request
     *
     * @return UpdateQuotaAlarmResponse
     */
    public function updateQuotaAlarm($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateQuotaAlarmWithOptions($request, $runtime);
    }
}
