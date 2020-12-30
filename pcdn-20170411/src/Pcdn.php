<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pcdn\V20170411;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Pcdn\V20170411\Models\AddConsumerRequest;
use AlibabaCloud\SDK\Pcdn\V20170411\Models\AddConsumerResponse;
use AlibabaCloud\SDK\Pcdn\V20170411\Models\AddDomainRequest;
use AlibabaCloud\SDK\Pcdn\V20170411\Models\AddDomainResponse;
use AlibabaCloud\SDK\Pcdn\V20170411\Models\AddPcdnControlRuleRequest;
use AlibabaCloud\SDK\Pcdn\V20170411\Models\AddPcdnControlRuleResponse;
use AlibabaCloud\SDK\Pcdn\V20170411\Models\DeleteDomainRequest;
use AlibabaCloud\SDK\Pcdn\V20170411\Models\DeleteDomainResponse;
use AlibabaCloud\SDK\Pcdn\V20170411\Models\DeletePcdnControlRuleRequest;
use AlibabaCloud\SDK\Pcdn\V20170411\Models\DeletePcdnControlRuleResponse;
use AlibabaCloud\SDK\Pcdn\V20170411\Models\DisablePcdnControlRuleRequest;
use AlibabaCloud\SDK\Pcdn\V20170411\Models\DisablePcdnControlRuleResponse;
use AlibabaCloud\SDK\Pcdn\V20170411\Models\EditPcdnControlRuleRequest;
use AlibabaCloud\SDK\Pcdn\V20170411\Models\EditPcdnControlRuleResponse;
use AlibabaCloud\SDK\Pcdn\V20170411\Models\EnablePcdnControlRuleRequest;
use AlibabaCloud\SDK\Pcdn\V20170411\Models\EnablePcdnControlRuleResponse;
use AlibabaCloud\SDK\Pcdn\V20170411\Models\GetAccessDataRequest;
use AlibabaCloud\SDK\Pcdn\V20170411\Models\GetAccessDataResponse;
use AlibabaCloud\SDK\Pcdn\V20170411\Models\GetAllAppVersionsRequest;
use AlibabaCloud\SDK\Pcdn\V20170411\Models\GetAllAppVersionsResponse;
use AlibabaCloud\SDK\Pcdn\V20170411\Models\GetAllIspRequest;
use AlibabaCloud\SDK\Pcdn\V20170411\Models\GetAllIspResponse;
use AlibabaCloud\SDK\Pcdn\V20170411\Models\GetAllMarketsRequest;
use AlibabaCloud\SDK\Pcdn\V20170411\Models\GetAllMarketsResponse;
use AlibabaCloud\SDK\Pcdn\V20170411\Models\GetAllPlatformTypesRequest;
use AlibabaCloud\SDK\Pcdn\V20170411\Models\GetAllPlatformTypesResponse;
use AlibabaCloud\SDK\Pcdn\V20170411\Models\GetAllRegionsRequest;
use AlibabaCloud\SDK\Pcdn\V20170411\Models\GetAllRegionsResponse;
use AlibabaCloud\SDK\Pcdn\V20170411\Models\GetBalanceBandwidthDataRequest;
use AlibabaCloud\SDK\Pcdn\V20170411\Models\GetBalanceBandwidthDataResponse;
use AlibabaCloud\SDK\Pcdn\V20170411\Models\GetBalanceTrafficDataRequest;
use AlibabaCloud\SDK\Pcdn\V20170411\Models\GetBalanceTrafficDataResponse;
use AlibabaCloud\SDK\Pcdn\V20170411\Models\GetBandwidthDataRequest;
use AlibabaCloud\SDK\Pcdn\V20170411\Models\GetBandwidthDataResponse;
use AlibabaCloud\SDK\Pcdn\V20170411\Models\GetClientsRatioRequest;
use AlibabaCloud\SDK\Pcdn\V20170411\Models\GetClientsRatioResponse;
use AlibabaCloud\SDK\Pcdn\V20170411\Models\GetConsumerStatusRequest;
use AlibabaCloud\SDK\Pcdn\V20170411\Models\GetConsumerStatusResponse;
use AlibabaCloud\SDK\Pcdn\V20170411\Models\GetControlRulesRequest;
use AlibabaCloud\SDK\Pcdn\V20170411\Models\GetControlRulesResponse;
use AlibabaCloud\SDK\Pcdn\V20170411\Models\GetCoverRateDataRequest;
use AlibabaCloud\SDK\Pcdn\V20170411\Models\GetCoverRateDataResponse;
use AlibabaCloud\SDK\Pcdn\V20170411\Models\GetCurrentModeRequest;
use AlibabaCloud\SDK\Pcdn\V20170411\Models\GetCurrentModeResponse;
use AlibabaCloud\SDK\Pcdn\V20170411\Models\GetDomainCountRequest;
use AlibabaCloud\SDK\Pcdn\V20170411\Models\GetDomainCountResponse;
use AlibabaCloud\SDK\Pcdn\V20170411\Models\GetDomainsRequest;
use AlibabaCloud\SDK\Pcdn\V20170411\Models\GetDomainsResponse;
use AlibabaCloud\SDK\Pcdn\V20170411\Models\GetExpenseSummaryRequest;
use AlibabaCloud\SDK\Pcdn\V20170411\Models\GetExpenseSummaryResponse;
use AlibabaCloud\SDK\Pcdn\V20170411\Models\GetFeeHistoryRequest;
use AlibabaCloud\SDK\Pcdn\V20170411\Models\GetFeeHistoryResponse;
use AlibabaCloud\SDK\Pcdn\V20170411\Models\GetFirstFrameDelayDataRequest;
use AlibabaCloud\SDK\Pcdn\V20170411\Models\GetFirstFrameDelayDataResponse;
use AlibabaCloud\SDK\Pcdn\V20170411\Models\GetFluencyDataRequest;
use AlibabaCloud\SDK\Pcdn\V20170411\Models\GetFluencyDataResponse;
use AlibabaCloud\SDK\Pcdn\V20170411\Models\GetLogsListRequest;
use AlibabaCloud\SDK\Pcdn\V20170411\Models\GetLogsListResponse;
use AlibabaCloud\SDK\Pcdn\V20170411\Models\GetShareRateDataRequest;
use AlibabaCloud\SDK\Pcdn\V20170411\Models\GetShareRateDataResponse;
use AlibabaCloud\SDK\Pcdn\V20170411\Models\GetTokenListRequest;
use AlibabaCloud\SDK\Pcdn\V20170411\Models\GetTokenListResponse;
use AlibabaCloud\SDK\Pcdn\V20170411\Models\GetTrafficByRegionRequest;
use AlibabaCloud\SDK\Pcdn\V20170411\Models\GetTrafficByRegionResponse;
use AlibabaCloud\SDK\Pcdn\V20170411\Models\GetTrafficDataRequest;
use AlibabaCloud\SDK\Pcdn\V20170411\Models\GetTrafficDataResponse;
use AlibabaCloud\SDK\Pcdn\V20170411\Models\StartDomainRequest;
use AlibabaCloud\SDK\Pcdn\V20170411\Models\StartDomainResponse;
use AlibabaCloud\SDK\Pcdn\V20170411\Models\StopDomainRequest;
use AlibabaCloud\SDK\Pcdn\V20170411\Models\StopDomainResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

class Pcdn extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'central';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('pcdn', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param AddConsumerRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return AddConsumerResponse
     */
    public function addConsumerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return AddConsumerResponse::fromMap($this->doRPCRequest('AddConsumer', '2017-04-11', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AddConsumerRequest $request
     *
     * @return AddConsumerResponse
     */
    public function addConsumer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addConsumerWithOptions($request, $runtime);
    }

    /**
     * @param AddDomainRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return AddDomainResponse
     */
    public function addDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return AddDomainResponse::fromMap($this->doRPCRequest('AddDomain', '2017-04-11', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AddDomainRequest $request
     *
     * @return AddDomainResponse
     */
    public function addDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addDomainWithOptions($request, $runtime);
    }

    /**
     * @param AddPcdnControlRuleRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return AddPcdnControlRuleResponse
     */
    public function addPcdnControlRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return AddPcdnControlRuleResponse::fromMap($this->doRPCRequest('AddPcdnControlRule', '2017-04-11', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AddPcdnControlRuleRequest $request
     *
     * @return AddPcdnControlRuleResponse
     */
    public function addPcdnControlRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addPcdnControlRuleWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDomainRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteDomainResponse
     */
    public function deleteDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return DeleteDomainResponse::fromMap($this->doRPCRequest('DeleteDomain', '2017-04-11', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteDomainRequest $request
     *
     * @return DeleteDomainResponse
     */
    public function deleteDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDomainWithOptions($request, $runtime);
    }

    /**
     * @param DeletePcdnControlRuleRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeletePcdnControlRuleResponse
     */
    public function deletePcdnControlRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return DeletePcdnControlRuleResponse::fromMap($this->doRPCRequest('DeletePcdnControlRule', '2017-04-11', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeletePcdnControlRuleRequest $request
     *
     * @return DeletePcdnControlRuleResponse
     */
    public function deletePcdnControlRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deletePcdnControlRuleWithOptions($request, $runtime);
    }

    /**
     * @param DisablePcdnControlRuleRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DisablePcdnControlRuleResponse
     */
    public function disablePcdnControlRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return DisablePcdnControlRuleResponse::fromMap($this->doRPCRequest('DisablePcdnControlRule', '2017-04-11', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DisablePcdnControlRuleRequest $request
     *
     * @return DisablePcdnControlRuleResponse
     */
    public function disablePcdnControlRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disablePcdnControlRuleWithOptions($request, $runtime);
    }

    /**
     * @param EditPcdnControlRuleRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return EditPcdnControlRuleResponse
     */
    public function editPcdnControlRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return EditPcdnControlRuleResponse::fromMap($this->doRPCRequest('EditPcdnControlRule', '2017-04-11', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param EditPcdnControlRuleRequest $request
     *
     * @return EditPcdnControlRuleResponse
     */
    public function editPcdnControlRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->editPcdnControlRuleWithOptions($request, $runtime);
    }

    /**
     * @param EnablePcdnControlRuleRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return EnablePcdnControlRuleResponse
     */
    public function enablePcdnControlRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return EnablePcdnControlRuleResponse::fromMap($this->doRPCRequest('EnablePcdnControlRule', '2017-04-11', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param EnablePcdnControlRuleRequest $request
     *
     * @return EnablePcdnControlRuleResponse
     */
    public function enablePcdnControlRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enablePcdnControlRuleWithOptions($request, $runtime);
    }

    /**
     * @param GetAccessDataRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetAccessDataResponse
     */
    public function getAccessDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return GetAccessDataResponse::fromMap($this->doRPCRequest('GetAccessData', '2017-04-11', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetAccessDataRequest $request
     *
     * @return GetAccessDataResponse
     */
    public function getAccessData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAccessDataWithOptions($request, $runtime);
    }

    /**
     * @param GetAllAppVersionsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetAllAppVersionsResponse
     */
    public function getAllAppVersionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return GetAllAppVersionsResponse::fromMap($this->doRPCRequest('GetAllAppVersions', '2017-04-11', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetAllAppVersionsRequest $request
     *
     * @return GetAllAppVersionsResponse
     */
    public function getAllAppVersions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAllAppVersionsWithOptions($request, $runtime);
    }

    /**
     * @param GetAllIspRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return GetAllIspResponse
     */
    public function getAllIspWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return GetAllIspResponse::fromMap($this->doRPCRequest('GetAllIsp', '2017-04-11', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetAllIspRequest $request
     *
     * @return GetAllIspResponse
     */
    public function getAllIsp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAllIspWithOptions($request, $runtime);
    }

    /**
     * @param GetAllMarketsRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetAllMarketsResponse
     */
    public function getAllMarketsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return GetAllMarketsResponse::fromMap($this->doRPCRequest('GetAllMarkets', '2017-04-11', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetAllMarketsRequest $request
     *
     * @return GetAllMarketsResponse
     */
    public function getAllMarkets($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAllMarketsWithOptions($request, $runtime);
    }

    /**
     * @param GetAllPlatformTypesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetAllPlatformTypesResponse
     */
    public function getAllPlatformTypesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return GetAllPlatformTypesResponse::fromMap($this->doRPCRequest('GetAllPlatformTypes', '2017-04-11', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetAllPlatformTypesRequest $request
     *
     * @return GetAllPlatformTypesResponse
     */
    public function getAllPlatformTypes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAllPlatformTypesWithOptions($request, $runtime);
    }

    /**
     * @param GetAllRegionsRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetAllRegionsResponse
     */
    public function getAllRegionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return GetAllRegionsResponse::fromMap($this->doRPCRequest('GetAllRegions', '2017-04-11', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetAllRegionsRequest $request
     *
     * @return GetAllRegionsResponse
     */
    public function getAllRegions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAllRegionsWithOptions($request, $runtime);
    }

    /**
     * @param GetBalanceBandwidthDataRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetBalanceBandwidthDataResponse
     */
    public function getBalanceBandwidthDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return GetBalanceBandwidthDataResponse::fromMap($this->doRPCRequest('GetBalanceBandwidthData', '2017-04-11', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetBalanceBandwidthDataRequest $request
     *
     * @return GetBalanceBandwidthDataResponse
     */
    public function getBalanceBandwidthData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBalanceBandwidthDataWithOptions($request, $runtime);
    }

    /**
     * @param GetBalanceTrafficDataRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetBalanceTrafficDataResponse
     */
    public function getBalanceTrafficDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return GetBalanceTrafficDataResponse::fromMap($this->doRPCRequest('GetBalanceTrafficData', '2017-04-11', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetBalanceTrafficDataRequest $request
     *
     * @return GetBalanceTrafficDataResponse
     */
    public function getBalanceTrafficData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBalanceTrafficDataWithOptions($request, $runtime);
    }

    /**
     * @param GetBandwidthDataRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetBandwidthDataResponse
     */
    public function getBandwidthDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return GetBandwidthDataResponse::fromMap($this->doRPCRequest('GetBandwidthData', '2017-04-11', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetBandwidthDataRequest $request
     *
     * @return GetBandwidthDataResponse
     */
    public function getBandwidthData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBandwidthDataWithOptions($request, $runtime);
    }

    /**
     * @param GetClientsRatioRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetClientsRatioResponse
     */
    public function getClientsRatioWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return GetClientsRatioResponse::fromMap($this->doRPCRequest('GetClientsRatio', '2017-04-11', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetClientsRatioRequest $request
     *
     * @return GetClientsRatioResponse
     */
    public function getClientsRatio($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getClientsRatioWithOptions($request, $runtime);
    }

    /**
     * @param GetConsumerStatusRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetConsumerStatusResponse
     */
    public function getConsumerStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return GetConsumerStatusResponse::fromMap($this->doRPCRequest('GetConsumerStatus', '2017-04-11', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetConsumerStatusRequest $request
     *
     * @return GetConsumerStatusResponse
     */
    public function getConsumerStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getConsumerStatusWithOptions($request, $runtime);
    }

    /**
     * @param GetControlRulesRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetControlRulesResponse
     */
    public function getControlRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return GetControlRulesResponse::fromMap($this->doRPCRequest('GetControlRules', '2017-04-11', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetControlRulesRequest $request
     *
     * @return GetControlRulesResponse
     */
    public function getControlRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getControlRulesWithOptions($request, $runtime);
    }

    /**
     * @param GetCoverRateDataRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetCoverRateDataResponse
     */
    public function getCoverRateDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return GetCoverRateDataResponse::fromMap($this->doRPCRequest('GetCoverRateData', '2017-04-11', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetCoverRateDataRequest $request
     *
     * @return GetCoverRateDataResponse
     */
    public function getCoverRateData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCoverRateDataWithOptions($request, $runtime);
    }

    /**
     * @param GetCurrentModeRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetCurrentModeResponse
     */
    public function getCurrentModeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return GetCurrentModeResponse::fromMap($this->doRPCRequest('GetCurrentMode', '2017-04-11', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetCurrentModeRequest $request
     *
     * @return GetCurrentModeResponse
     */
    public function getCurrentMode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCurrentModeWithOptions($request, $runtime);
    }

    /**
     * @param GetDomainCountRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetDomainCountResponse
     */
    public function getDomainCountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return GetDomainCountResponse::fromMap($this->doRPCRequest('GetDomainCount', '2017-04-11', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetDomainCountRequest $request
     *
     * @return GetDomainCountResponse
     */
    public function getDomainCount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDomainCountWithOptions($request, $runtime);
    }

    /**
     * @param GetDomainsRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return GetDomainsResponse
     */
    public function getDomainsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return GetDomainsResponse::fromMap($this->doRPCRequest('GetDomains', '2017-04-11', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetDomainsRequest $request
     *
     * @return GetDomainsResponse
     */
    public function getDomains($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDomainsWithOptions($request, $runtime);
    }

    /**
     * @param GetExpenseSummaryRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetExpenseSummaryResponse
     */
    public function getExpenseSummaryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return GetExpenseSummaryResponse::fromMap($this->doRPCRequest('GetExpenseSummary', '2017-04-11', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetExpenseSummaryRequest $request
     *
     * @return GetExpenseSummaryResponse
     */
    public function getExpenseSummary($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getExpenseSummaryWithOptions($request, $runtime);
    }

    /**
     * @param GetFeeHistoryRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetFeeHistoryResponse
     */
    public function getFeeHistoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return GetFeeHistoryResponse::fromMap($this->doRPCRequest('GetFeeHistory', '2017-04-11', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetFeeHistoryRequest $request
     *
     * @return GetFeeHistoryResponse
     */
    public function getFeeHistory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getFeeHistoryWithOptions($request, $runtime);
    }

    /**
     * @param GetFirstFrameDelayDataRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetFirstFrameDelayDataResponse
     */
    public function getFirstFrameDelayDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return GetFirstFrameDelayDataResponse::fromMap($this->doRPCRequest('GetFirstFrameDelayData', '2017-04-11', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetFirstFrameDelayDataRequest $request
     *
     * @return GetFirstFrameDelayDataResponse
     */
    public function getFirstFrameDelayData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getFirstFrameDelayDataWithOptions($request, $runtime);
    }

    /**
     * @param GetFluencyDataRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetFluencyDataResponse
     */
    public function getFluencyDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return GetFluencyDataResponse::fromMap($this->doRPCRequest('GetFluencyData', '2017-04-11', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetFluencyDataRequest $request
     *
     * @return GetFluencyDataResponse
     */
    public function getFluencyData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getFluencyDataWithOptions($request, $runtime);
    }

    /**
     * @param GetLogsListRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetLogsListResponse
     */
    public function getLogsListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return GetLogsListResponse::fromMap($this->doRPCRequest('GetLogsList', '2017-04-11', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetLogsListRequest $request
     *
     * @return GetLogsListResponse
     */
    public function getLogsList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLogsListWithOptions($request, $runtime);
    }

    /**
     * @param GetShareRateDataRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetShareRateDataResponse
     */
    public function getShareRateDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return GetShareRateDataResponse::fromMap($this->doRPCRequest('GetShareRateData', '2017-04-11', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetShareRateDataRequest $request
     *
     * @return GetShareRateDataResponse
     */
    public function getShareRateData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getShareRateDataWithOptions($request, $runtime);
    }

    /**
     * @param GetTokenListRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetTokenListResponse
     */
    public function getTokenListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return GetTokenListResponse::fromMap($this->doRPCRequest('GetTokenList', '2017-04-11', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetTokenListRequest $request
     *
     * @return GetTokenListResponse
     */
    public function getTokenList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTokenListWithOptions($request, $runtime);
    }

    /**
     * @param GetTrafficByRegionRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetTrafficByRegionResponse
     */
    public function getTrafficByRegionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return GetTrafficByRegionResponse::fromMap($this->doRPCRequest('GetTrafficByRegion', '2017-04-11', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetTrafficByRegionRequest $request
     *
     * @return GetTrafficByRegionResponse
     */
    public function getTrafficByRegion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTrafficByRegionWithOptions($request, $runtime);
    }

    /**
     * @param GetTrafficDataRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetTrafficDataResponse
     */
    public function getTrafficDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return GetTrafficDataResponse::fromMap($this->doRPCRequest('GetTrafficData', '2017-04-11', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetTrafficDataRequest $request
     *
     * @return GetTrafficDataResponse
     */
    public function getTrafficData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTrafficDataWithOptions($request, $runtime);
    }

    /**
     * @param StartDomainRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return StartDomainResponse
     */
    public function startDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return StartDomainResponse::fromMap($this->doRPCRequest('StartDomain', '2017-04-11', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param StartDomainRequest $request
     *
     * @return StartDomainResponse
     */
    public function startDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startDomainWithOptions($request, $runtime);
    }

    /**
     * @param StopDomainRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return StopDomainResponse
     */
    public function stopDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return StopDomainResponse::fromMap($this->doRPCRequest('StopDomain', '2017-04-11', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param StopDomainRequest $request
     *
     * @return StopDomainResponse
     */
    public function stopDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopDomainWithOptions($request, $runtime);
    }
}
