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
use AlibabaCloud\SDK\Scdn\V20171115\Models\BatchUpdateScdnDomainRequest;
use AlibabaCloud\SDK\Scdn\V20171115\Models\BatchUpdateScdnDomainResponse;
use AlibabaCloud\SDK\Scdn\V20171115\Models\CheckScdnServiceRequest;
use AlibabaCloud\SDK\Scdn\V20171115\Models\CheckScdnServiceResponse;
use AlibabaCloud\SDK\Scdn\V20171115\Models\DeleteScdnDomainRequest;
use AlibabaCloud\SDK\Scdn\V20171115\Models\DeleteScdnDomainResponse;
use AlibabaCloud\SDK\Scdn\V20171115\Models\DeleteScdnSpecificConfigRequest;
use AlibabaCloud\SDK\Scdn\V20171115\Models\DeleteScdnSpecificConfigResponse;
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
use AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnDDoSInfoRequest;
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
use AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnUserProtectInfoRequest;
use AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnUserProtectInfoResponse;
use AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnUserQuotaRequest;
use AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnUserQuotaResponse;
use AlibabaCloud\SDK\Scdn\V20171115\Models\OpenScdnServiceRequest;
use AlibabaCloud\SDK\Scdn\V20171115\Models\OpenScdnServiceResponse;
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
use AlibabaCloud\SDK\Scdn\V20171115\Models\SetScdnDomainBizInfoRequest;
use AlibabaCloud\SDK\Scdn\V20171115\Models\SetScdnDomainBizInfoResponse;
use AlibabaCloud\SDK\Scdn\V20171115\Models\SetScdnDomainCertificateRequest;
use AlibabaCloud\SDK\Scdn\V20171115\Models\SetScdnDomainCertificateResponse;
use AlibabaCloud\SDK\Scdn\V20171115\Models\StartScdnDomainRequest;
use AlibabaCloud\SDK\Scdn\V20171115\Models\StartScdnDomainResponse;
use AlibabaCloud\SDK\Scdn\V20171115\Models\StopScdnDomainRequest;
use AlibabaCloud\SDK\Scdn\V20171115\Models\StopScdnDomainResponse;
use AlibabaCloud\SDK\Scdn\V20171115\Models\UpdateScdnDomainRequest;
use AlibabaCloud\SDK\Scdn\V20171115\Models\UpdateScdnDomainResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddScdnDomainResponse::fromMap($this->doRPCRequest('AddScdnDomain', '2017-11-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return BatchDeleteScdnDomainConfigsResponse::fromMap($this->doRPCRequest('BatchDeleteScdnDomainConfigs', '2017-11-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return BatchSetScdnDomainConfigsResponse::fromMap($this->doRPCRequest('BatchSetScdnDomainConfigs', '2017-11-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param BatchUpdateScdnDomainRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return BatchUpdateScdnDomainResponse
     */
    public function batchUpdateScdnDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return BatchUpdateScdnDomainResponse::fromMap($this->doRPCRequest('BatchUpdateScdnDomain', '2017-11-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CheckScdnServiceResponse::fromMap($this->doRPCRequest('CheckScdnService', '2017-11-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteScdnDomainResponse::fromMap($this->doRPCRequest('DeleteScdnDomain', '2017-11-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteScdnSpecificConfigResponse::fromMap($this->doRPCRequest('DeleteScdnSpecificConfig', '2017-11-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
            'query' => $query,
        ]);

        return DescribeScdnCcQpsInfoResponse::fromMap($this->doRPCRequest('DescribeScdnCcQpsInfo', '2017-11-15', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
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
            'query' => $query,
        ]);

        return DescribeScdnCcTopIpResponse::fromMap($this->doRPCRequest('DescribeScdnCcTopIp', '2017-11-15', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
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
            'query' => $query,
        ]);

        return DescribeScdnCcTopUrlResponse::fromMap($this->doRPCRequest('DescribeScdnCcTopUrl', '2017-11-15', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeScdnCertificateDetailResponse::fromMap($this->doRPCRequest('DescribeScdnCertificateDetail', '2017-11-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeScdnCertificateListResponse::fromMap($this->doRPCRequest('DescribeScdnCertificateList', '2017-11-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeScdnDDoSInfoRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeScdnDDoSInfoResponse
     */
    public function describeScdnDDoSInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return DescribeScdnDDoSInfoResponse::fromMap($this->doRPCRequest('DescribeScdnDDoSInfo', '2017-11-15', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeScdnDDoSInfoRequest $request
     *
     * @return DescribeScdnDDoSInfoResponse
     */
    public function describeScdnDDoSInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeScdnDDoSInfoWithOptions($request, $runtime);
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
            'query' => $query,
        ]);

        return DescribeScdnDDoSTrafficInfoResponse::fromMap($this->doRPCRequest('DescribeScdnDDoSTrafficInfo', '2017-11-15', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeScdnDomainBpsDataResponse::fromMap($this->doRPCRequest('DescribeScdnDomainBpsData', '2017-11-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeScdnDomainCertificateInfoResponse::fromMap($this->doRPCRequest('DescribeScdnDomainCertificateInfo', '2017-11-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
            'query' => $query,
        ]);

        return DescribeScdnDomainCnameResponse::fromMap($this->doRPCRequest('DescribeScdnDomainCname', '2017-11-15', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeScdnDomainConfigsResponse::fromMap($this->doRPCRequest('DescribeScdnDomainConfigs', '2017-11-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeScdnDomainDetailResponse::fromMap($this->doRPCRequest('DescribeScdnDomainDetail', '2017-11-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeScdnDomainHitRateDataResponse::fromMap($this->doRPCRequest('DescribeScdnDomainHitRateData', '2017-11-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeScdnDomainHttpCodeDataResponse::fromMap($this->doRPCRequest('DescribeScdnDomainHttpCodeData', '2017-11-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeScdnDomainIspDataResponse::fromMap($this->doRPCRequest('DescribeScdnDomainIspData', '2017-11-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeScdnDomainLogResponse::fromMap($this->doRPCRequest('DescribeScdnDomainLog', '2017-11-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeScdnDomainOriginBpsDataResponse::fromMap($this->doRPCRequest('DescribeScdnDomainOriginBpsData', '2017-11-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeScdnDomainOriginTrafficDataResponse::fromMap($this->doRPCRequest('DescribeScdnDomainOriginTrafficData', '2017-11-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeScdnDomainPvDataResponse::fromMap($this->doRPCRequest('DescribeScdnDomainPvData', '2017-11-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeScdnDomainQpsDataResponse::fromMap($this->doRPCRequest('DescribeScdnDomainQpsData', '2017-11-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
            'query' => $query,
        ]);

        return DescribeScdnDomainRealTimeBpsDataResponse::fromMap($this->doRPCRequest('DescribeScdnDomainRealTimeBpsData', '2017-11-15', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
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
            'query' => $query,
        ]);

        return DescribeScdnDomainRealTimeByteHitRateDataResponse::fromMap($this->doRPCRequest('DescribeScdnDomainRealTimeByteHitRateData', '2017-11-15', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeScdnDomainRealTimeHttpCodeDataResponse::fromMap($this->doRPCRequest('DescribeScdnDomainRealTimeHttpCodeData', '2017-11-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
            'query' => $query,
        ]);

        return DescribeScdnDomainRealTimeQpsDataResponse::fromMap($this->doRPCRequest('DescribeScdnDomainRealTimeQpsData', '2017-11-15', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
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
            'query' => $query,
        ]);

        return DescribeScdnDomainRealTimeReqHitRateDataResponse::fromMap($this->doRPCRequest('DescribeScdnDomainRealTimeReqHitRateData', '2017-11-15', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeScdnDomainRealTimeSrcBpsDataResponse::fromMap($this->doRPCRequest('DescribeScdnDomainRealTimeSrcBpsData', '2017-11-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeScdnDomainRealTimeSrcTrafficDataResponse::fromMap($this->doRPCRequest('DescribeScdnDomainRealTimeSrcTrafficData', '2017-11-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeScdnDomainRealTimeTrafficDataResponse::fromMap($this->doRPCRequest('DescribeScdnDomainRealTimeTrafficData', '2017-11-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeScdnDomainRegionDataResponse::fromMap($this->doRPCRequest('DescribeScdnDomainRegionData', '2017-11-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeScdnDomainTopReferVisitResponse::fromMap($this->doRPCRequest('DescribeScdnDomainTopReferVisit', '2017-11-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeScdnDomainTopUrlVisitResponse::fromMap($this->doRPCRequest('DescribeScdnDomainTopUrlVisit', '2017-11-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeScdnDomainTrafficDataResponse::fromMap($this->doRPCRequest('DescribeScdnDomainTrafficData', '2017-11-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeScdnDomainUvDataResponse::fromMap($this->doRPCRequest('DescribeScdnDomainUvData', '2017-11-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeScdnRefreshQuotaResponse::fromMap($this->doRPCRequest('DescribeScdnRefreshQuota', '2017-11-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeScdnRefreshTasksResponse::fromMap($this->doRPCRequest('DescribeScdnRefreshTasks', '2017-11-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeScdnServiceResponse::fromMap($this->doRPCRequest('DescribeScdnService', '2017-11-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeScdnTopDomainsByFlowResponse::fromMap($this->doRPCRequest('DescribeScdnTopDomainsByFlow', '2017-11-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeScdnUserDomainsResponse::fromMap($this->doRPCRequest('DescribeScdnUserDomains', '2017-11-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeScdnUserProtectInfoRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeScdnUserProtectInfoResponse
     */
    public function describeScdnUserProtectInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return DescribeScdnUserProtectInfoResponse::fromMap($this->doRPCRequest('DescribeScdnUserProtectInfo', '2017-11-15', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeScdnUserProtectInfoRequest $request
     *
     * @return DescribeScdnUserProtectInfoResponse
     */
    public function describeScdnUserProtectInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeScdnUserProtectInfoWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeScdnUserQuotaResponse::fromMap($this->doRPCRequest('DescribeScdnUserQuota', '2017-11-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param OpenScdnServiceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return OpenScdnServiceResponse
     */
    public function openScdnServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return OpenScdnServiceResponse::fromMap($this->doRPCRequest('OpenScdnService', '2017-11-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param OpenScdnServiceRequest $request
     *
     * @return OpenScdnServiceResponse
     */
    public function openScdnService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->openScdnServiceWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return PreloadScdnObjectCachesResponse::fromMap($this->doRPCRequest('PreloadScdnObjectCaches', '2017-11-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RefreshScdnObjectCachesResponse::fromMap($this->doRPCRequest('RefreshScdnObjectCaches', '2017-11-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
            'query' => $query,
        ]);

        return SetScdnBotInfoResponse::fromMap($this->doRPCRequest('SetScdnBotInfo', '2017-11-15', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
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
            'query' => $query,
        ]);

        return SetScdnCcInfoResponse::fromMap($this->doRPCRequest('SetScdnCcInfo', '2017-11-15', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
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
            'query' => $query,
        ]);

        return SetScdnDDoSInfoResponse::fromMap($this->doRPCRequest('SetScdnDDoSInfo', '2017-11-15', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
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
     * @param SetScdnDomainBizInfoRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return SetScdnDomainBizInfoResponse
     */
    public function setScdnDomainBizInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return SetScdnDomainBizInfoResponse::fromMap($this->doRPCRequest('SetScdnDomainBizInfo', '2017-11-15', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SetScdnDomainBizInfoRequest $request
     *
     * @return SetScdnDomainBizInfoResponse
     */
    public function setScdnDomainBizInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setScdnDomainBizInfoWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SetScdnDomainCertificateResponse::fromMap($this->doRPCRequest('SetScdnDomainCertificate', '2017-11-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return StartScdnDomainResponse::fromMap($this->doRPCRequest('StartScdnDomain', '2017-11-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return StopScdnDomainResponse::fromMap($this->doRPCRequest('StopScdnDomain', '2017-11-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param UpdateScdnDomainRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateScdnDomainResponse
     */
    public function updateScdnDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateScdnDomainResponse::fromMap($this->doRPCRequest('UpdateScdnDomain', '2017-11-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
}
