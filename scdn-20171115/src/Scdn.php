<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Scdn\V20171115;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Scdn\V20171115\Models\AddScdnDomainRequest;
use AlibabaCloud\SDK\Scdn\V20171115\Models\AddScdnDomainResponse;
use AlibabaCloud\SDK\Scdn\V20171115\Models\BatchDeleteScdnDomainConfigsRequest;
use AlibabaCloud\SDK\Scdn\V20171115\Models\BatchDeleteScdnDomainConfigsResponse;
use AlibabaCloud\SDK\Scdn\V20171115\Models\BatchSetScdnDomainConfigsRequest;
use AlibabaCloud\SDK\Scdn\V20171115\Models\BatchSetScdnDomainConfigsResponse;
use AlibabaCloud\SDK\Scdn\V20171115\Models\BatchStartScdnDomainRequest;
use AlibabaCloud\SDK\Scdn\V20171115\Models\BatchStartScdnDomainResponse;
use AlibabaCloud\SDK\Scdn\V20171115\Models\BatchStopScdnDomainRequest;
use AlibabaCloud\SDK\Scdn\V20171115\Models\BatchStopScdnDomainResponse;
use AlibabaCloud\SDK\Scdn\V20171115\Models\BatchUpdateScdnDomainRequest;
use AlibabaCloud\SDK\Scdn\V20171115\Models\BatchUpdateScdnDomainResponse;
use AlibabaCloud\SDK\Scdn\V20171115\Models\CheckScdnServiceRequest;
use AlibabaCloud\SDK\Scdn\V20171115\Models\CheckScdnServiceResponse;
use AlibabaCloud\SDK\Scdn\V20171115\Models\DeleteScdnDomainRequest;
use AlibabaCloud\SDK\Scdn\V20171115\Models\DeleteScdnDomainResponse;
use AlibabaCloud\SDK\Scdn\V20171115\Models\DeleteScdnSpecificConfigRequest;
use AlibabaCloud\SDK\Scdn\V20171115\Models\DeleteScdnSpecificConfigResponse;
use AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnCcInfoResponse;
use AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnCcQpsInfoRequest;
use AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnCcQpsInfoResponse;
use AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnCcTopIpRequest;
use AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnCcTopIpResponse;
use AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnCcTopUrlRequest;
use AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnCcTopUrlResponse;
use AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnCertificateDetailRequest;
use AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnCertificateDetailResponse;
use AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnCertificateListRequest;
use AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnCertificateListResponse;
use AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnDDoSInfoResponse;
use AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnDDoSTrafficInfoRequest;
use AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnDDoSTrafficInfoResponse;
use AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnDomainBpsDataRequest;
use AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnDomainBpsDataResponse;
use AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnDomainCertificateInfoRequest;
use AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnDomainCertificateInfoResponse;
use AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnDomainCnameRequest;
use AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnDomainCnameResponse;
use AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnDomainConfigsRequest;
use AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnDomainConfigsResponse;
use AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnDomainDetailRequest;
use AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnDomainDetailResponse;
use AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnDomainHitRateDataRequest;
use AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnDomainHitRateDataResponse;
use AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnDomainHttpCodeDataRequest;
use AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnDomainHttpCodeDataResponse;
use AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnDomainIspDataRequest;
use AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnDomainIspDataResponse;
use AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnDomainLogRequest;
use AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnDomainLogResponse;
use AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnDomainOriginBpsDataRequest;
use AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnDomainOriginBpsDataResponse;
use AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnDomainOriginTrafficDataRequest;
use AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnDomainOriginTrafficDataResponse;
use AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnDomainPvDataRequest;
use AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnDomainPvDataResponse;
use AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnDomainQpsDataRequest;
use AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnDomainQpsDataResponse;
use AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnDomainRealTimeBpsDataRequest;
use AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnDomainRealTimeBpsDataResponse;
use AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnDomainRealTimeByteHitRateDataRequest;
use AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnDomainRealTimeByteHitRateDataResponse;
use AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnDomainRealTimeHttpCodeDataRequest;
use AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnDomainRealTimeHttpCodeDataResponse;
use AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnDomainRealTimeQpsDataRequest;
use AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnDomainRealTimeQpsDataResponse;
use AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnDomainRealTimeReqHitRateDataRequest;
use AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnDomainRealTimeReqHitRateDataResponse;
use AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnDomainRealTimeSrcBpsDataRequest;
use AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnDomainRealTimeSrcBpsDataResponse;
use AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnDomainRealTimeSrcTrafficDataRequest;
use AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnDomainRealTimeSrcTrafficDataResponse;
use AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnDomainRealTimeTrafficDataRequest;
use AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnDomainRealTimeTrafficDataResponse;
use AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnDomainRegionDataRequest;
use AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnDomainRegionDataResponse;
use AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnDomainTopReferVisitRequest;
use AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnDomainTopReferVisitResponse;
use AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnDomainTopUrlVisitRequest;
use AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnDomainTopUrlVisitResponse;
use AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnDomainTrafficDataRequest;
use AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnDomainTrafficDataResponse;
use AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnDomainUvDataRequest;
use AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnDomainUvDataResponse;
use AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnRefreshQuotaRequest;
use AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnRefreshQuotaResponse;
use AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnRefreshTasksRequest;
use AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnRefreshTasksResponse;
use AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnServiceRequest;
use AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnServiceResponse;
use AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnTopDomainsByFlowRequest;
use AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnTopDomainsByFlowResponse;
use AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnUserDomainsRequest;
use AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnUserDomainsResponse;
use AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnUserProtectInfoResponse;
use AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnUserQuotaRequest;
use AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnUserQuotaResponse;
use AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnVerifyContentRequest;
use AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnVerifyContentResponse;
use AlibabaCloud\SDK\Scdn\V20171115\Models\PreloadScdnObjectCachesRequest;
use AlibabaCloud\SDK\Scdn\V20171115\Models\PreloadScdnObjectCachesResponse;
use AlibabaCloud\SDK\Scdn\V20171115\Models\RefreshScdnObjectCachesRequest;
use AlibabaCloud\SDK\Scdn\V20171115\Models\RefreshScdnObjectCachesResponse;
use AlibabaCloud\SDK\Scdn\V20171115\Models\SetScdnBotInfoRequest;
use AlibabaCloud\SDK\Scdn\V20171115\Models\SetScdnBotInfoResponse;
use AlibabaCloud\SDK\Scdn\V20171115\Models\SetScdnCcInfoRequest;
use AlibabaCloud\SDK\Scdn\V20171115\Models\SetScdnCcInfoResponse;
use AlibabaCloud\SDK\Scdn\V20171115\Models\SetScdnDDoSInfoRequest;
use AlibabaCloud\SDK\Scdn\V20171115\Models\SetScdnDDoSInfoResponse;
use AlibabaCloud\SDK\Scdn\V20171115\Models\SetScdnDomainCertificateRequest;
use AlibabaCloud\SDK\Scdn\V20171115\Models\SetScdnDomainCertificateResponse;
use AlibabaCloud\SDK\Scdn\V20171115\Models\StartScdnDomainRequest;
use AlibabaCloud\SDK\Scdn\V20171115\Models\StartScdnDomainResponse;
use AlibabaCloud\SDK\Scdn\V20171115\Models\StopScdnDomainRequest;
use AlibabaCloud\SDK\Scdn\V20171115\Models\StopScdnDomainResponse;
use AlibabaCloud\SDK\Scdn\V20171115\Models\TestAmpDescribeScdnDomainIspDataRequest;
use AlibabaCloud\SDK\Scdn\V20171115\Models\TestAmpDescribeScdnDomainIspDataResponse;
use AlibabaCloud\SDK\Scdn\V20171115\Models\UpdateScdnDomainRequest;
use AlibabaCloud\SDK\Scdn\V20171115\Models\UpdateScdnDomainResponse;
use AlibabaCloud\SDK\Scdn\V20171115\Models\VerifyScdnDomainOwnerRequest;
use AlibabaCloud\SDK\Scdn\V20171115\Models\VerifyScdnDomainOwnerResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Scdn extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'ap-northeast-1'              => 'scdn.aliyuncs.com',
            'ap-northeast-2-pop'          => 'scdn.aliyuncs.com',
            'ap-south-1'                  => 'scdn.aliyuncs.com',
            'ap-southeast-1'              => 'scdn.aliyuncs.com',
            'ap-southeast-2'              => 'scdn.aliyuncs.com',
            'ap-southeast-3'              => 'scdn.aliyuncs.com',
            'ap-southeast-5'              => 'scdn.aliyuncs.com',
            'cn-beijing'                  => 'scdn.aliyuncs.com',
            'cn-beijing-finance-1'        => 'scdn.aliyuncs.com',
            'cn-beijing-finance-pop'      => 'scdn.aliyuncs.com',
            'cn-beijing-gov-1'            => 'scdn.aliyuncs.com',
            'cn-beijing-nu16-b01'         => 'scdn.aliyuncs.com',
            'cn-chengdu'                  => 'scdn.aliyuncs.com',
            'cn-edge-1'                   => 'scdn.aliyuncs.com',
            'cn-fujian'                   => 'scdn.aliyuncs.com',
            'cn-haidian-cm12-c01'         => 'scdn.aliyuncs.com',
            'cn-hangzhou'                 => 'scdn.aliyuncs.com',
            'cn-hangzhou-bj-b01'          => 'scdn.aliyuncs.com',
            'cn-hangzhou-finance'         => 'scdn.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'scdn.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'scdn.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'scdn.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'scdn.aliyuncs.com',
            'cn-hangzhou-test-306'        => 'scdn.aliyuncs.com',
            'cn-hongkong'                 => 'scdn.aliyuncs.com',
            'cn-hongkong-finance-pop'     => 'scdn.aliyuncs.com',
            'cn-huhehaote'                => 'scdn.aliyuncs.com',
            'cn-north-2-gov-1'            => 'scdn.aliyuncs.com',
            'cn-qingdao'                  => 'scdn.aliyuncs.com',
            'cn-qingdao-nebula'           => 'scdn.aliyuncs.com',
            'cn-shanghai'                 => 'scdn.aliyuncs.com',
            'cn-shanghai-et15-b01'        => 'scdn.aliyuncs.com',
            'cn-shanghai-et2-b01'         => 'scdn.aliyuncs.com',
            'cn-shanghai-finance-1'       => 'scdn.aliyuncs.com',
            'cn-shanghai-inner'           => 'scdn.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'scdn.aliyuncs.com',
            'cn-shenzhen'                 => 'scdn.aliyuncs.com',
            'cn-shenzhen-finance-1'       => 'scdn.aliyuncs.com',
            'cn-shenzhen-inner'           => 'scdn.aliyuncs.com',
            'cn-shenzhen-st4-d01'         => 'scdn.aliyuncs.com',
            'cn-shenzhen-su18-b01'        => 'scdn.aliyuncs.com',
            'cn-wuhan'                    => 'scdn.aliyuncs.com',
            'cn-yushanfang'               => 'scdn.aliyuncs.com',
            'cn-zhangbei-na61-b01'        => 'scdn.aliyuncs.com',
            'cn-zhangjiakou'              => 'scdn.aliyuncs.com',
            'cn-zhangjiakou-na62-a01'     => 'scdn.aliyuncs.com',
            'cn-zhengzhou-nebula-1'       => 'scdn.aliyuncs.com',
            'eu-central-1'                => 'scdn.aliyuncs.com',
            'eu-west-1'                   => 'scdn.aliyuncs.com',
            'eu-west-1-oxs'               => 'scdn.aliyuncs.com',
            'me-east-1'                   => 'scdn.aliyuncs.com',
            'rus-west-1-pop'              => 'scdn.aliyuncs.com',
            'us-east-1'                   => 'scdn.aliyuncs.com',
            'us-west-1'                   => 'scdn.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('scdn', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param AddScdnDomainRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return AddScdnDomainResponse
     */
    public function addScdnDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->checkUrl)) {
            $query['CheckUrl'] = $request->checkUrl;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->scope)) {
            $query['Scope'] = $request->scope;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->sources)) {
            $query['Sources'] = $request->sources;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddScdnDomain',
            'version'     => '2017-11-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddScdnDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddScdnDomainRequest $request
     *
     * @return AddScdnDomainResponse
     */
    public function addScdnDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addScdnDomainWithOptions($request, $runtime);
    }

    /**
     * @param BatchDeleteScdnDomainConfigsRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return BatchDeleteScdnDomainConfigsResponse
     */
    public function batchDeleteScdnDomainConfigsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainNames)) {
            $query['DomainNames'] = $request->domainNames;
        }
        if (!Utils::isUnset($request->functionNames)) {
            $query['FunctionNames'] = $request->functionNames;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
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
            'action'      => 'BatchDeleteScdnDomainConfigs',
            'version'     => '2017-11-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchDeleteScdnDomainConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param BatchDeleteScdnDomainConfigsRequest $request
     *
     * @return BatchDeleteScdnDomainConfigsResponse
     */
    public function batchDeleteScdnDomainConfigs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchDeleteScdnDomainConfigsWithOptions($request, $runtime);
    }

    /**
     * @param BatchSetScdnDomainConfigsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return BatchSetScdnDomainConfigsResponse
     */
    public function batchSetScdnDomainConfigsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainNames)) {
            $query['DomainNames'] = $request->domainNames;
        }
        if (!Utils::isUnset($request->functions)) {
            $query['Functions'] = $request->functions;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
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
            'action'      => 'BatchSetScdnDomainConfigs',
            'version'     => '2017-11-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchSetScdnDomainConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param BatchSetScdnDomainConfigsRequest $request
     *
     * @return BatchSetScdnDomainConfigsResponse
     */
    public function batchSetScdnDomainConfigs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchSetScdnDomainConfigsWithOptions($request, $runtime);
    }

    /**
     * @param BatchStartScdnDomainRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return BatchStartScdnDomainResponse
     */
    public function batchStartScdnDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainNames)) {
            $query['DomainNames'] = $request->domainNames;
        }
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
            'action'      => 'BatchStartScdnDomain',
            'version'     => '2017-11-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchStartScdnDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param BatchStartScdnDomainRequest $request
     *
     * @return BatchStartScdnDomainResponse
     */
    public function batchStartScdnDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchStartScdnDomainWithOptions($request, $runtime);
    }

    /**
     * @param BatchStopScdnDomainRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return BatchStopScdnDomainResponse
     */
    public function batchStopScdnDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainNames)) {
            $query['DomainNames'] = $request->domainNames;
        }
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
            'action'      => 'BatchStopScdnDomain',
            'version'     => '2017-11-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchStopScdnDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param BatchStopScdnDomainRequest $request
     *
     * @return BatchStopScdnDomainResponse
     */
    public function batchStopScdnDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchStopScdnDomainWithOptions($request, $runtime);
    }

    /**
     * @param BatchUpdateScdnDomainRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return BatchUpdateScdnDomainResponse
     */
    public function batchUpdateScdnDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->sources)) {
            $query['Sources'] = $request->sources;
        }
        if (!Utils::isUnset($request->topLevelDomain)) {
            $query['TopLevelDomain'] = $request->topLevelDomain;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BatchUpdateScdnDomain',
            'version'     => '2017-11-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchUpdateScdnDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param BatchUpdateScdnDomainRequest $request
     *
     * @return BatchUpdateScdnDomainResponse
     */
    public function batchUpdateScdnDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchUpdateScdnDomainWithOptions($request, $runtime);
    }

    /**
     * @param CheckScdnServiceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CheckScdnServiceResponse
     */
    public function checkScdnServiceWithOptions($request, $runtime)
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
            'action'      => 'CheckScdnService',
            'version'     => '2017-11-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CheckScdnServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CheckScdnServiceRequest $request
     *
     * @return CheckScdnServiceResponse
     */
    public function checkScdnService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkScdnServiceWithOptions($request, $runtime);
    }

    /**
     * @param DeleteScdnDomainRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteScdnDomainResponse
     */
    public function deleteScdnDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
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
            'action'      => 'DeleteScdnDomain',
            'version'     => '2017-11-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteScdnDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteScdnDomainRequest $request
     *
     * @return DeleteScdnDomainResponse
     */
    public function deleteScdnDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteScdnDomainWithOptions($request, $runtime);
    }

    /**
     * @param DeleteScdnSpecificConfigRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DeleteScdnSpecificConfigResponse
     */
    public function deleteScdnSpecificConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->configId)) {
            $query['ConfigId'] = $request->configId;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
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
            'action'      => 'DeleteScdnSpecificConfig',
            'version'     => '2017-11-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteScdnSpecificConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteScdnSpecificConfigRequest $request
     *
     * @return DeleteScdnSpecificConfigResponse
     */
    public function deleteScdnSpecificConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteScdnSpecificConfigWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return DescribeScdnCcInfoResponse
     */
    public function describeScdnCcInfoWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'DescribeScdnCcInfo',
            'version'     => '2017-11-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeScdnCcInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return DescribeScdnCcInfoResponse
     */
    public function describeScdnCcInfo()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeScdnCcInfoWithOptions($runtime);
    }

    /**
     * @param DescribeScdnCcQpsInfoRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeScdnCcQpsInfoResponse
     */
    public function describeScdnCcQpsInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeScdnCcQpsInfo',
            'version'     => '2017-11-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeScdnCcQpsInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeScdnCcQpsInfoRequest $request
     *
     * @return DescribeScdnCcQpsInfoResponse
     */
    public function describeScdnCcQpsInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeScdnCcQpsInfoWithOptions($request, $runtime);
    }

    /**
     * @param DescribeScdnCcTopIpRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeScdnCcTopIpResponse
     */
    public function describeScdnCcTopIpWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeScdnCcTopIp',
            'version'     => '2017-11-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeScdnCcTopIpResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeScdnCcTopIpRequest $request
     *
     * @return DescribeScdnCcTopIpResponse
     */
    public function describeScdnCcTopIp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeScdnCcTopIpWithOptions($request, $runtime);
    }

    /**
     * @param DescribeScdnCcTopUrlRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeScdnCcTopUrlResponse
     */
    public function describeScdnCcTopUrlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeScdnCcTopUrl',
            'version'     => '2017-11-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeScdnCcTopUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeScdnCcTopUrlRequest $request
     *
     * @return DescribeScdnCcTopUrlResponse
     */
    public function describeScdnCcTopUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeScdnCcTopUrlWithOptions($request, $runtime);
    }

    /**
     * @param DescribeScdnCertificateDetailRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeScdnCertificateDetailResponse
     */
    public function describeScdnCertificateDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->certName)) {
            $query['CertName'] = $request->certName;
        }
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
            'action'      => 'DescribeScdnCertificateDetail',
            'version'     => '2017-11-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeScdnCertificateDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeScdnCertificateDetailRequest $request
     *
     * @return DescribeScdnCertificateDetailResponse
     */
    public function describeScdnCertificateDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeScdnCertificateDetailWithOptions($request, $runtime);
    }

    /**
     * @param DescribeScdnCertificateListRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeScdnCertificateListResponse
     */
    public function describeScdnCertificateListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
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
            'action'      => 'DescribeScdnCertificateList',
            'version'     => '2017-11-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeScdnCertificateListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeScdnCertificateListRequest $request
     *
     * @return DescribeScdnCertificateListResponse
     */
    public function describeScdnCertificateList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeScdnCertificateListWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return DescribeScdnDDoSInfoResponse
     */
    public function describeScdnDDoSInfoWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'DescribeScdnDDoSInfo',
            'version'     => '2017-11-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeScdnDDoSInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return DescribeScdnDDoSInfoResponse
     */
    public function describeScdnDDoSInfo()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeScdnDDoSInfoWithOptions($runtime);
    }

    /**
     * @param DescribeScdnDDoSTrafficInfoRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeScdnDDoSTrafficInfoResponse
     */
    public function describeScdnDDoSTrafficInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeScdnDDoSTrafficInfo',
            'version'     => '2017-11-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeScdnDDoSTrafficInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeScdnDDoSTrafficInfoRequest $request
     *
     * @return DescribeScdnDDoSTrafficInfoResponse
     */
    public function describeScdnDDoSTrafficInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeScdnDDoSTrafficInfoWithOptions($request, $runtime);
    }

    /**
     * @param DescribeScdnDomainBpsDataRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeScdnDomainBpsDataResponse
     */
    public function describeScdnDomainBpsDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->interval)) {
            $query['Interval'] = $request->interval;
        }
        if (!Utils::isUnset($request->ispNameEn)) {
            $query['IspNameEn'] = $request->ispNameEn;
        }
        if (!Utils::isUnset($request->locationNameEn)) {
            $query['LocationNameEn'] = $request->locationNameEn;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeScdnDomainBpsData',
            'version'     => '2017-11-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeScdnDomainBpsDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeScdnDomainBpsDataRequest $request
     *
     * @return DescribeScdnDomainBpsDataResponse
     */
    public function describeScdnDomainBpsData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeScdnDomainBpsDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeScdnDomainCertificateInfoRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeScdnDomainCertificateInfoResponse
     */
    public function describeScdnDomainCertificateInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeScdnDomainCertificateInfo',
            'version'     => '2017-11-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeScdnDomainCertificateInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeScdnDomainCertificateInfoRequest $request
     *
     * @return DescribeScdnDomainCertificateInfoResponse
     */
    public function describeScdnDomainCertificateInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeScdnDomainCertificateInfoWithOptions($request, $runtime);
    }

    /**
     * @param DescribeScdnDomainCnameRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeScdnDomainCnameResponse
     */
    public function describeScdnDomainCnameWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeScdnDomainCname',
            'version'     => '2017-11-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeScdnDomainCnameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeScdnDomainCnameRequest $request
     *
     * @return DescribeScdnDomainCnameResponse
     */
    public function describeScdnDomainCname($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeScdnDomainCnameWithOptions($request, $runtime);
    }

    /**
     * @param DescribeScdnDomainConfigsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeScdnDomainConfigsResponse
     */
    public function describeScdnDomainConfigsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->configId)) {
            $query['ConfigId'] = $request->configId;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->functionNames)) {
            $query['FunctionNames'] = $request->functionNames;
        }
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
            'action'      => 'DescribeScdnDomainConfigs',
            'version'     => '2017-11-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeScdnDomainConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeScdnDomainConfigsRequest $request
     *
     * @return DescribeScdnDomainConfigsResponse
     */
    public function describeScdnDomainConfigs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeScdnDomainConfigsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeScdnDomainDetailRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeScdnDomainDetailResponse
     */
    public function describeScdnDomainDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
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
            'action'      => 'DescribeScdnDomainDetail',
            'version'     => '2017-11-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeScdnDomainDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeScdnDomainDetailRequest $request
     *
     * @return DescribeScdnDomainDetailResponse
     */
    public function describeScdnDomainDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeScdnDomainDetailWithOptions($request, $runtime);
    }

    /**
     * @param DescribeScdnDomainHitRateDataRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeScdnDomainHitRateDataResponse
     */
    public function describeScdnDomainHitRateDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->interval)) {
            $query['Interval'] = $request->interval;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeScdnDomainHitRateData',
            'version'     => '2017-11-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeScdnDomainHitRateDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeScdnDomainHitRateDataRequest $request
     *
     * @return DescribeScdnDomainHitRateDataResponse
     */
    public function describeScdnDomainHitRateData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeScdnDomainHitRateDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeScdnDomainHttpCodeDataRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeScdnDomainHttpCodeDataResponse
     */
    public function describeScdnDomainHttpCodeDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->interval)) {
            $query['Interval'] = $request->interval;
        }
        if (!Utils::isUnset($request->ispNameEn)) {
            $query['IspNameEn'] = $request->ispNameEn;
        }
        if (!Utils::isUnset($request->locationNameEn)) {
            $query['LocationNameEn'] = $request->locationNameEn;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeScdnDomainHttpCodeData',
            'version'     => '2017-11-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeScdnDomainHttpCodeDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeScdnDomainHttpCodeDataRequest $request
     *
     * @return DescribeScdnDomainHttpCodeDataResponse
     */
    public function describeScdnDomainHttpCodeData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeScdnDomainHttpCodeDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeScdnDomainIspDataRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeScdnDomainIspDataResponse
     */
    public function describeScdnDomainIspDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeScdnDomainIspData',
            'version'     => '2017-11-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeScdnDomainIspDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeScdnDomainIspDataRequest $request
     *
     * @return DescribeScdnDomainIspDataResponse
     */
    public function describeScdnDomainIspData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeScdnDomainIspDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeScdnDomainLogRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeScdnDomainLogResponse
     */
    public function describeScdnDomainLogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeScdnDomainLog',
            'version'     => '2017-11-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeScdnDomainLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeScdnDomainLogRequest $request
     *
     * @return DescribeScdnDomainLogResponse
     */
    public function describeScdnDomainLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeScdnDomainLogWithOptions($request, $runtime);
    }

    /**
     * @param DescribeScdnDomainOriginBpsDataRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeScdnDomainOriginBpsDataResponse
     */
    public function describeScdnDomainOriginBpsDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->interval)) {
            $query['Interval'] = $request->interval;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeScdnDomainOriginBpsData',
            'version'     => '2017-11-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeScdnDomainOriginBpsDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeScdnDomainOriginBpsDataRequest $request
     *
     * @return DescribeScdnDomainOriginBpsDataResponse
     */
    public function describeScdnDomainOriginBpsData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeScdnDomainOriginBpsDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeScdnDomainOriginTrafficDataRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return DescribeScdnDomainOriginTrafficDataResponse
     */
    public function describeScdnDomainOriginTrafficDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->interval)) {
            $query['Interval'] = $request->interval;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeScdnDomainOriginTrafficData',
            'version'     => '2017-11-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeScdnDomainOriginTrafficDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeScdnDomainOriginTrafficDataRequest $request
     *
     * @return DescribeScdnDomainOriginTrafficDataResponse
     */
    public function describeScdnDomainOriginTrafficData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeScdnDomainOriginTrafficDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeScdnDomainPvDataRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeScdnDomainPvDataResponse
     */
    public function describeScdnDomainPvDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeScdnDomainPvData',
            'version'     => '2017-11-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeScdnDomainPvDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeScdnDomainPvDataRequest $request
     *
     * @return DescribeScdnDomainPvDataResponse
     */
    public function describeScdnDomainPvData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeScdnDomainPvDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeScdnDomainQpsDataRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeScdnDomainQpsDataResponse
     */
    public function describeScdnDomainQpsDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->interval)) {
            $query['Interval'] = $request->interval;
        }
        if (!Utils::isUnset($request->ispNameEn)) {
            $query['IspNameEn'] = $request->ispNameEn;
        }
        if (!Utils::isUnset($request->locationNameEn)) {
            $query['LocationNameEn'] = $request->locationNameEn;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeScdnDomainQpsData',
            'version'     => '2017-11-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeScdnDomainQpsDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeScdnDomainQpsDataRequest $request
     *
     * @return DescribeScdnDomainQpsDataResponse
     */
    public function describeScdnDomainQpsData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeScdnDomainQpsDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeScdnDomainRealTimeBpsDataRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeScdnDomainRealTimeBpsDataResponse
     */
    public function describeScdnDomainRealTimeBpsDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeScdnDomainRealTimeBpsData',
            'version'     => '2017-11-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeScdnDomainRealTimeBpsDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeScdnDomainRealTimeBpsDataRequest $request
     *
     * @return DescribeScdnDomainRealTimeBpsDataResponse
     */
    public function describeScdnDomainRealTimeBpsData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeScdnDomainRealTimeBpsDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeScdnDomainRealTimeByteHitRateDataRequest $request
     * @param RuntimeOptions                                   $runtime
     *
     * @return DescribeScdnDomainRealTimeByteHitRateDataResponse
     */
    public function describeScdnDomainRealTimeByteHitRateDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeScdnDomainRealTimeByteHitRateData',
            'version'     => '2017-11-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeScdnDomainRealTimeByteHitRateDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeScdnDomainRealTimeByteHitRateDataRequest $request
     *
     * @return DescribeScdnDomainRealTimeByteHitRateDataResponse
     */
    public function describeScdnDomainRealTimeByteHitRateData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeScdnDomainRealTimeByteHitRateDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeScdnDomainRealTimeHttpCodeDataRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return DescribeScdnDomainRealTimeHttpCodeDataResponse
     */
    public function describeScdnDomainRealTimeHttpCodeDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->ispNameEn)) {
            $query['IspNameEn'] = $request->ispNameEn;
        }
        if (!Utils::isUnset($request->locationNameEn)) {
            $query['LocationNameEn'] = $request->locationNameEn;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeScdnDomainRealTimeHttpCodeData',
            'version'     => '2017-11-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeScdnDomainRealTimeHttpCodeDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeScdnDomainRealTimeHttpCodeDataRequest $request
     *
     * @return DescribeScdnDomainRealTimeHttpCodeDataResponse
     */
    public function describeScdnDomainRealTimeHttpCodeData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeScdnDomainRealTimeHttpCodeDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeScdnDomainRealTimeQpsDataRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeScdnDomainRealTimeQpsDataResponse
     */
    public function describeScdnDomainRealTimeQpsDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeScdnDomainRealTimeQpsData',
            'version'     => '2017-11-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeScdnDomainRealTimeQpsDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeScdnDomainRealTimeQpsDataRequest $request
     *
     * @return DescribeScdnDomainRealTimeQpsDataResponse
     */
    public function describeScdnDomainRealTimeQpsData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeScdnDomainRealTimeQpsDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeScdnDomainRealTimeReqHitRateDataRequest $request
     * @param RuntimeOptions                                  $runtime
     *
     * @return DescribeScdnDomainRealTimeReqHitRateDataResponse
     */
    public function describeScdnDomainRealTimeReqHitRateDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeScdnDomainRealTimeReqHitRateData',
            'version'     => '2017-11-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeScdnDomainRealTimeReqHitRateDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeScdnDomainRealTimeReqHitRateDataRequest $request
     *
     * @return DescribeScdnDomainRealTimeReqHitRateDataResponse
     */
    public function describeScdnDomainRealTimeReqHitRateData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeScdnDomainRealTimeReqHitRateDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeScdnDomainRealTimeSrcBpsDataRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return DescribeScdnDomainRealTimeSrcBpsDataResponse
     */
    public function describeScdnDomainRealTimeSrcBpsDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeScdnDomainRealTimeSrcBpsData',
            'version'     => '2017-11-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeScdnDomainRealTimeSrcBpsDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeScdnDomainRealTimeSrcBpsDataRequest $request
     *
     * @return DescribeScdnDomainRealTimeSrcBpsDataResponse
     */
    public function describeScdnDomainRealTimeSrcBpsData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeScdnDomainRealTimeSrcBpsDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeScdnDomainRealTimeSrcTrafficDataRequest $request
     * @param RuntimeOptions                                  $runtime
     *
     * @return DescribeScdnDomainRealTimeSrcTrafficDataResponse
     */
    public function describeScdnDomainRealTimeSrcTrafficDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeScdnDomainRealTimeSrcTrafficData',
            'version'     => '2017-11-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeScdnDomainRealTimeSrcTrafficDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeScdnDomainRealTimeSrcTrafficDataRequest $request
     *
     * @return DescribeScdnDomainRealTimeSrcTrafficDataResponse
     */
    public function describeScdnDomainRealTimeSrcTrafficData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeScdnDomainRealTimeSrcTrafficDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeScdnDomainRealTimeTrafficDataRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return DescribeScdnDomainRealTimeTrafficDataResponse
     */
    public function describeScdnDomainRealTimeTrafficDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeScdnDomainRealTimeTrafficData',
            'version'     => '2017-11-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeScdnDomainRealTimeTrafficDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeScdnDomainRealTimeTrafficDataRequest $request
     *
     * @return DescribeScdnDomainRealTimeTrafficDataResponse
     */
    public function describeScdnDomainRealTimeTrafficData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeScdnDomainRealTimeTrafficDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeScdnDomainRegionDataRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeScdnDomainRegionDataResponse
     */
    public function describeScdnDomainRegionDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeScdnDomainRegionData',
            'version'     => '2017-11-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeScdnDomainRegionDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeScdnDomainRegionDataRequest $request
     *
     * @return DescribeScdnDomainRegionDataResponse
     */
    public function describeScdnDomainRegionData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeScdnDomainRegionDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeScdnDomainTopReferVisitRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeScdnDomainTopReferVisitResponse
     */
    public function describeScdnDomainTopReferVisitWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->sortBy)) {
            $query['SortBy'] = $request->sortBy;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeScdnDomainTopReferVisit',
            'version'     => '2017-11-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeScdnDomainTopReferVisitResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeScdnDomainTopReferVisitRequest $request
     *
     * @return DescribeScdnDomainTopReferVisitResponse
     */
    public function describeScdnDomainTopReferVisit($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeScdnDomainTopReferVisitWithOptions($request, $runtime);
    }

    /**
     * @param DescribeScdnDomainTopUrlVisitRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeScdnDomainTopUrlVisitResponse
     */
    public function describeScdnDomainTopUrlVisitWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->sortBy)) {
            $query['SortBy'] = $request->sortBy;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeScdnDomainTopUrlVisit',
            'version'     => '2017-11-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeScdnDomainTopUrlVisitResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeScdnDomainTopUrlVisitRequest $request
     *
     * @return DescribeScdnDomainTopUrlVisitResponse
     */
    public function describeScdnDomainTopUrlVisit($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeScdnDomainTopUrlVisitWithOptions($request, $runtime);
    }

    /**
     * @param DescribeScdnDomainTrafficDataRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeScdnDomainTrafficDataResponse
     */
    public function describeScdnDomainTrafficDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->interval)) {
            $query['Interval'] = $request->interval;
        }
        if (!Utils::isUnset($request->ispNameEn)) {
            $query['IspNameEn'] = $request->ispNameEn;
        }
        if (!Utils::isUnset($request->locationNameEn)) {
            $query['LocationNameEn'] = $request->locationNameEn;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeScdnDomainTrafficData',
            'version'     => '2017-11-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeScdnDomainTrafficDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeScdnDomainTrafficDataRequest $request
     *
     * @return DescribeScdnDomainTrafficDataResponse
     */
    public function describeScdnDomainTrafficData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeScdnDomainTrafficDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeScdnDomainUvDataRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeScdnDomainUvDataResponse
     */
    public function describeScdnDomainUvDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeScdnDomainUvData',
            'version'     => '2017-11-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeScdnDomainUvDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeScdnDomainUvDataRequest $request
     *
     * @return DescribeScdnDomainUvDataResponse
     */
    public function describeScdnDomainUvData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeScdnDomainUvDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeScdnRefreshQuotaRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeScdnRefreshQuotaResponse
     */
    public function describeScdnRefreshQuotaWithOptions($request, $runtime)
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
            'action'      => 'DescribeScdnRefreshQuota',
            'version'     => '2017-11-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeScdnRefreshQuotaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeScdnRefreshQuotaRequest $request
     *
     * @return DescribeScdnRefreshQuotaResponse
     */
    public function describeScdnRefreshQuota($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeScdnRefreshQuotaWithOptions($request, $runtime);
    }

    /**
     * @param DescribeScdnRefreshTasksRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeScdnRefreshTasksResponse
     */
    public function describeScdnRefreshTasksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->objectPath)) {
            $query['ObjectPath'] = $request->objectPath;
        }
        if (!Utils::isUnset($request->objectType)) {
            $query['ObjectType'] = $request->objectType;
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
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeScdnRefreshTasks',
            'version'     => '2017-11-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeScdnRefreshTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeScdnRefreshTasksRequest $request
     *
     * @return DescribeScdnRefreshTasksResponse
     */
    public function describeScdnRefreshTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeScdnRefreshTasksWithOptions($request, $runtime);
    }

    /**
     * @param DescribeScdnServiceRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeScdnServiceResponse
     */
    public function describeScdnServiceWithOptions($request, $runtime)
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
            'action'      => 'DescribeScdnService',
            'version'     => '2017-11-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeScdnServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeScdnServiceRequest $request
     *
     * @return DescribeScdnServiceResponse
     */
    public function describeScdnService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeScdnServiceWithOptions($request, $runtime);
    }

    /**
     * @param DescribeScdnTopDomainsByFlowRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeScdnTopDomainsByFlowResponse
     */
    public function describeScdnTopDomainsByFlowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->limit)) {
            $query['Limit'] = $request->limit;
        }
        if (!Utils::isUnset($request->product)) {
            $query['Product'] = $request->product;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeScdnTopDomainsByFlow',
            'version'     => '2017-11-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeScdnTopDomainsByFlowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeScdnTopDomainsByFlowRequest $request
     *
     * @return DescribeScdnTopDomainsByFlowResponse
     */
    public function describeScdnTopDomainsByFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeScdnTopDomainsByFlowWithOptions($request, $runtime);
    }

    /**
     * @param DescribeScdnUserDomainsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeScdnUserDomainsResponse
     */
    public function describeScdnUserDomainsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->changeEndTime)) {
            $query['ChangeEndTime'] = $request->changeEndTime;
        }
        if (!Utils::isUnset($request->changeStartTime)) {
            $query['ChangeStartTime'] = $request->changeStartTime;
        }
        if (!Utils::isUnset($request->checkDomainShow)) {
            $query['CheckDomainShow'] = $request->checkDomainShow;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->domainSearchType)) {
            $query['DomainSearchType'] = $request->domainSearchType;
        }
        if (!Utils::isUnset($request->domainStatus)) {
            $query['DomainStatus'] = $request->domainStatus;
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
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeScdnUserDomains',
            'version'     => '2017-11-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeScdnUserDomainsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeScdnUserDomainsRequest $request
     *
     * @return DescribeScdnUserDomainsResponse
     */
    public function describeScdnUserDomains($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeScdnUserDomainsWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return DescribeScdnUserProtectInfoResponse
     */
    public function describeScdnUserProtectInfoWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'DescribeScdnUserProtectInfo',
            'version'     => '2017-11-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeScdnUserProtectInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return DescribeScdnUserProtectInfoResponse
     */
    public function describeScdnUserProtectInfo()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeScdnUserProtectInfoWithOptions($runtime);
    }

    /**
     * @param DescribeScdnUserQuotaRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeScdnUserQuotaResponse
     */
    public function describeScdnUserQuotaWithOptions($request, $runtime)
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
            'action'      => 'DescribeScdnUserQuota',
            'version'     => '2017-11-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeScdnUserQuotaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeScdnUserQuotaRequest $request
     *
     * @return DescribeScdnUserQuotaResponse
     */
    public function describeScdnUserQuota($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeScdnUserQuotaWithOptions($request, $runtime);
    }

    /**
     * @param DescribeScdnVerifyContentRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeScdnVerifyContentResponse
     */
    public function describeScdnVerifyContentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeScdnVerifyContent',
            'version'     => '2017-11-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeScdnVerifyContentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeScdnVerifyContentRequest $request
     *
     * @return DescribeScdnVerifyContentResponse
     */
    public function describeScdnVerifyContent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeScdnVerifyContentWithOptions($request, $runtime);
    }

    /**
     * @param PreloadScdnObjectCachesRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return PreloadScdnObjectCachesResponse
     */
    public function preloadScdnObjectCachesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->area)) {
            $query['Area'] = $request->area;
        }
        if (!Utils::isUnset($request->l2Preload)) {
            $query['L2Preload'] = $request->l2Preload;
        }
        if (!Utils::isUnset($request->objectPath)) {
            $query['ObjectPath'] = $request->objectPath;
        }
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
            'action'      => 'PreloadScdnObjectCaches',
            'version'     => '2017-11-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PreloadScdnObjectCachesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PreloadScdnObjectCachesRequest $request
     *
     * @return PreloadScdnObjectCachesResponse
     */
    public function preloadScdnObjectCaches($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->preloadScdnObjectCachesWithOptions($request, $runtime);
    }

    /**
     * @param RefreshScdnObjectCachesRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return RefreshScdnObjectCachesResponse
     */
    public function refreshScdnObjectCachesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->objectPath)) {
            $query['ObjectPath'] = $request->objectPath;
        }
        if (!Utils::isUnset($request->objectType)) {
            $query['ObjectType'] = $request->objectType;
        }
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
            'action'      => 'RefreshScdnObjectCaches',
            'version'     => '2017-11-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RefreshScdnObjectCachesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RefreshScdnObjectCachesRequest $request
     *
     * @return RefreshScdnObjectCachesResponse
     */
    public function refreshScdnObjectCaches($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->refreshScdnObjectCachesWithOptions($request, $runtime);
    }

    /**
     * @param SetScdnBotInfoRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return SetScdnBotInfoResponse
     */
    public function setScdnBotInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetScdnBotInfo',
            'version'     => '2017-11-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetScdnBotInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetScdnBotInfoRequest $request
     *
     * @return SetScdnBotInfoResponse
     */
    public function setScdnBotInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setScdnBotInfoWithOptions($request, $runtime);
    }

    /**
     * @param SetScdnCcInfoRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return SetScdnCcInfoResponse
     */
    public function setScdnCcInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetScdnCcInfo',
            'version'     => '2017-11-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetScdnCcInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetScdnCcInfoRequest $request
     *
     * @return SetScdnCcInfoResponse
     */
    public function setScdnCcInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setScdnCcInfoWithOptions($request, $runtime);
    }

    /**
     * @param SetScdnDDoSInfoRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return SetScdnDDoSInfoResponse
     */
    public function setScdnDDoSInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetScdnDDoSInfo',
            'version'     => '2017-11-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetScdnDDoSInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetScdnDDoSInfoRequest $request
     *
     * @return SetScdnDDoSInfoResponse
     */
    public function setScdnDDoSInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setScdnDDoSInfoWithOptions($request, $runtime);
    }

    /**
     * @param SetScdnDomainCertificateRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return SetScdnDomainCertificateResponse
     */
    public function setScdnDomainCertificateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->certName)) {
            $query['CertName'] = $request->certName;
        }
        if (!Utils::isUnset($request->certType)) {
            $query['CertType'] = $request->certType;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->forceSet)) {
            $query['ForceSet'] = $request->forceSet;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->SSLPri)) {
            $query['SSLPri'] = $request->SSLPri;
        }
        if (!Utils::isUnset($request->SSLProtocol)) {
            $query['SSLProtocol'] = $request->SSLProtocol;
        }
        if (!Utils::isUnset($request->SSLPub)) {
            $query['SSLPub'] = $request->SSLPub;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetScdnDomainCertificate',
            'version'     => '2017-11-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetScdnDomainCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetScdnDomainCertificateRequest $request
     *
     * @return SetScdnDomainCertificateResponse
     */
    public function setScdnDomainCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setScdnDomainCertificateWithOptions($request, $runtime);
    }

    /**
     * @param StartScdnDomainRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return StartScdnDomainResponse
     */
    public function startScdnDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
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
            'action'      => 'StartScdnDomain',
            'version'     => '2017-11-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StartScdnDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param StartScdnDomainRequest $request
     *
     * @return StartScdnDomainResponse
     */
    public function startScdnDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startScdnDomainWithOptions($request, $runtime);
    }

    /**
     * @param StopScdnDomainRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return StopScdnDomainResponse
     */
    public function stopScdnDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
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
            'action'      => 'StopScdnDomain',
            'version'     => '2017-11-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StopScdnDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param StopScdnDomainRequest $request
     *
     * @return StopScdnDomainResponse
     */
    public function stopScdnDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopScdnDomainWithOptions($request, $runtime);
    }

    /**
     * @param TestAmpDescribeScdnDomainIspDataRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return TestAmpDescribeScdnDomainIspDataResponse
     */
    public function testAmpDescribeScdnDomainIspDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'TestAmpDescribeScdnDomainIspData',
            'version'     => '2017-11-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TestAmpDescribeScdnDomainIspDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param TestAmpDescribeScdnDomainIspDataRequest $request
     *
     * @return TestAmpDescribeScdnDomainIspDataResponse
     */
    public function testAmpDescribeScdnDomainIspData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->testAmpDescribeScdnDomainIspDataWithOptions($request, $runtime);
    }

    /**
     * @param UpdateScdnDomainRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateScdnDomainResponse
     */
    public function updateScdnDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->sources)) {
            $query['Sources'] = $request->sources;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateScdnDomain',
            'version'     => '2017-11-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateScdnDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateScdnDomainRequest $request
     *
     * @return UpdateScdnDomainResponse
     */
    public function updateScdnDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateScdnDomainWithOptions($request, $runtime);
    }

    /**
     * @param VerifyScdnDomainOwnerRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return VerifyScdnDomainOwnerResponse
     */
    public function verifyScdnDomainOwnerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->verifyType)) {
            $query['VerifyType'] = $request->verifyType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'VerifyScdnDomainOwner',
            'version'     => '2017-11-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return VerifyScdnDomainOwnerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param VerifyScdnDomainOwnerRequest $request
     *
     * @return VerifyScdnDomainOwnerResponse
     */
    public function verifyScdnDomainOwner($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->verifyScdnDomainOwnerWithOptions($request, $runtime);
    }
}
