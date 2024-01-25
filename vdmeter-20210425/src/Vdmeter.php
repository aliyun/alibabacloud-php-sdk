<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdmeter\V20210425;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Vdmeter\V20210425\Models\DescribeHuYaRecordByDomainRequest;
use AlibabaCloud\SDK\Vdmeter\V20210425\Models\DescribeHuYaRecordByDomainResponse;
use AlibabaCloud\SDK\Vdmeter\V20210425\Models\DescribeHuYaScreenshotByDomainRequest;
use AlibabaCloud\SDK\Vdmeter\V20210425\Models\DescribeHuYaScreenshotByDomainResponse;
use AlibabaCloud\SDK\Vdmeter\V20210425\Models\DescribeHuYaTranscodeByDomainRequest;
use AlibabaCloud\SDK\Vdmeter\V20210425\Models\DescribeHuYaTranscodeByDomainResponse;
use AlibabaCloud\SDK\Vdmeter\V20210425\Models\DescribeMeterBypassRtUsageByTaskProfileRequest;
use AlibabaCloud\SDK\Vdmeter\V20210425\Models\DescribeMeterBypassRtUsageByTaskProfileResponse;
use AlibabaCloud\SDK\Vdmeter\V20210425\Models\DescribeMeterMpuTranscodeRtUsageByTaskProfileRequest;
use AlibabaCloud\SDK\Vdmeter\V20210425\Models\DescribeMeterMpuTranscodeRtUsageByTaskProfileResponse;
use AlibabaCloud\SDK\Vdmeter\V20210425\Models\DescribeMeterRecordRtUsageByTaskProfileRequest;
use AlibabaCloud\SDK\Vdmeter\V20210425\Models\DescribeMeterRecordRtUsageByTaskProfileResponse;
use AlibabaCloud\SDK\Vdmeter\V20210425\Models\DescribeMeterRtcApproxPeakRateRequest;
use AlibabaCloud\SDK\Vdmeter\V20210425\Models\DescribeMeterRtcApproxPeakRateResponse;
use AlibabaCloud\SDK\Vdmeter\V20210425\Models\DescribeMeterRtcChannelCntDataRequest;
use AlibabaCloud\SDK\Vdmeter\V20210425\Models\DescribeMeterRtcChannelCntDataResponse;
use AlibabaCloud\SDK\Vdmeter\V20210425\Models\DescribeMeterRtcDurationRequest;
use AlibabaCloud\SDK\Vdmeter\V20210425\Models\DescribeMeterRtcDurationResponse;
use AlibabaCloud\SDK\Vdmeter\V20210425\Models\DescribeMeterRtcPeakChannelCntDataRequest;
use AlibabaCloud\SDK\Vdmeter\V20210425\Models\DescribeMeterRtcPeakChannelCntDataResponse;
use AlibabaCloud\SDK\Vdmeter\V20210425\Models\DescribeMeterRtcPeakUserCntDataRequest;
use AlibabaCloud\SDK\Vdmeter\V20210425\Models\DescribeMeterRtcPeakUserCntDataResponse;
use AlibabaCloud\SDK\Vdmeter\V20210425\Models\DescribeMeterRtcRtBandWidthUsageRequest;
use AlibabaCloud\SDK\Vdmeter\V20210425\Models\DescribeMeterRtcRtBandWidthUsageResponse;
use AlibabaCloud\SDK\Vdmeter\V20210425\Models\DescribeMeterRtcRtFlowUsageRequest;
use AlibabaCloud\SDK\Vdmeter\V20210425\Models\DescribeMeterRtcRtFlowUsageResponse;
use AlibabaCloud\SDK\Vdmeter\V20210425\Models\DescribeMeterRtcUserCntDataRequest;
use AlibabaCloud\SDK\Vdmeter\V20210425\Models\DescribeMeterRtcUserCntDataResponse;
use AlibabaCloud\SDK\Vdmeter\V20210425\Models\DescribeNewPlayVideoPlaySessionEventDetailRequest;
use AlibabaCloud\SDK\Vdmeter\V20210425\Models\DescribeNewPlayVideoPlaySessionEventDetailResponse;
use AlibabaCloud\SDK\Vdmeter\V20210425\Models\DescribeNewPlayVideoPlaySessioninfoRequest;
use AlibabaCloud\SDK\Vdmeter\V20210425\Models\DescribeNewPlayVideoPlaySessioninfoResponse;
use AlibabaCloud\SDK\Vdmeter\V20210425\Models\DescribeNewPlayVideoPlaySessionListRequest;
use AlibabaCloud\SDK\Vdmeter\V20210425\Models\DescribeNewPlayVideoPlaySessionListResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Vdmeter extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('vdmeter', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param DescribeHuYaRecordByDomainRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeHuYaRecordByDomainResponse
     */
    public function describeHuYaRecordByDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->businessType)) {
            $query['BusinessType'] = $request->businessType;
        }
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
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
            'action'      => 'DescribeHuYaRecordByDomain',
            'version'     => '2021-04-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeHuYaRecordByDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeHuYaRecordByDomainRequest $request
     *
     * @return DescribeHuYaRecordByDomainResponse
     */
    public function describeHuYaRecordByDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHuYaRecordByDomainWithOptions($request, $runtime);
    }

    /**
     * @param DescribeHuYaScreenshotByDomainRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeHuYaScreenshotByDomainResponse
     */
    public function describeHuYaScreenshotByDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->businessType)) {
            $query['BusinessType'] = $request->businessType;
        }
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
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
            'action'      => 'DescribeHuYaScreenshotByDomain',
            'version'     => '2021-04-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeHuYaScreenshotByDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeHuYaScreenshotByDomainRequest $request
     *
     * @return DescribeHuYaScreenshotByDomainResponse
     */
    public function describeHuYaScreenshotByDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHuYaScreenshotByDomainWithOptions($request, $runtime);
    }

    /**
     * @param DescribeHuYaTranscodeByDomainRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeHuYaTranscodeByDomainResponse
     */
    public function describeHuYaTranscodeByDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->businessType)) {
            $query['BusinessType'] = $request->businessType;
        }
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
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
            'action'      => 'DescribeHuYaTranscodeByDomain',
            'version'     => '2021-04-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeHuYaTranscodeByDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeHuYaTranscodeByDomainRequest $request
     *
     * @return DescribeHuYaTranscodeByDomainResponse
     */
    public function describeHuYaTranscodeByDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHuYaTranscodeByDomainWithOptions($request, $runtime);
    }

    /**
     * @param DescribeMeterBypassRtUsageByTaskProfileRequest $request
     * @param RuntimeOptions                                 $runtime
     *
     * @return DescribeMeterBypassRtUsageByTaskProfileResponse
     */
    public function describeMeterBypassRtUsageByTaskProfileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->endTs)) {
            $query['EndTs'] = $request->endTs;
        }
        if (!Utils::isUnset($request->interval)) {
            $query['Interval'] = $request->interval;
        }
        if (!Utils::isUnset($request->serviceArea)) {
            $query['ServiceArea'] = $request->serviceArea;
        }
        if (!Utils::isUnset($request->startTs)) {
            $query['StartTs'] = $request->startTs;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeMeterBypassRtUsageByTaskProfile',
            'version'     => '2021-04-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeMeterBypassRtUsageByTaskProfileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeMeterBypassRtUsageByTaskProfileRequest $request
     *
     * @return DescribeMeterBypassRtUsageByTaskProfileResponse
     */
    public function describeMeterBypassRtUsageByTaskProfile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMeterBypassRtUsageByTaskProfileWithOptions($request, $runtime);
    }

    /**
     * @param DescribeMeterMpuTranscodeRtUsageByTaskProfileRequest $request
     * @param RuntimeOptions                                       $runtime
     *
     * @return DescribeMeterMpuTranscodeRtUsageByTaskProfileResponse
     */
    public function describeMeterMpuTranscodeRtUsageByTaskProfileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->endTs)) {
            $query['EndTs'] = $request->endTs;
        }
        if (!Utils::isUnset($request->interval)) {
            $query['Interval'] = $request->interval;
        }
        if (!Utils::isUnset($request->serviceArea)) {
            $query['ServiceArea'] = $request->serviceArea;
        }
        if (!Utils::isUnset($request->startTs)) {
            $query['StartTs'] = $request->startTs;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeMeterMpuTranscodeRtUsageByTaskProfile',
            'version'     => '2021-04-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeMeterMpuTranscodeRtUsageByTaskProfileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeMeterMpuTranscodeRtUsageByTaskProfileRequest $request
     *
     * @return DescribeMeterMpuTranscodeRtUsageByTaskProfileResponse
     */
    public function describeMeterMpuTranscodeRtUsageByTaskProfile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMeterMpuTranscodeRtUsageByTaskProfileWithOptions($request, $runtime);
    }

    /**
     * @param DescribeMeterRecordRtUsageByTaskProfileRequest $request
     * @param RuntimeOptions                                 $runtime
     *
     * @return DescribeMeterRecordRtUsageByTaskProfileResponse
     */
    public function describeMeterRecordRtUsageByTaskProfileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->endTs)) {
            $query['EndTs'] = $request->endTs;
        }
        if (!Utils::isUnset($request->interval)) {
            $query['Interval'] = $request->interval;
        }
        if (!Utils::isUnset($request->serviceArea)) {
            $query['ServiceArea'] = $request->serviceArea;
        }
        if (!Utils::isUnset($request->startTs)) {
            $query['StartTs'] = $request->startTs;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeMeterRecordRtUsageByTaskProfile',
            'version'     => '2021-04-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeMeterRecordRtUsageByTaskProfileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeMeterRecordRtUsageByTaskProfileRequest $request
     *
     * @return DescribeMeterRecordRtUsageByTaskProfileResponse
     */
    public function describeMeterRecordRtUsageByTaskProfile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMeterRecordRtUsageByTaskProfileWithOptions($request, $runtime);
    }

    /**
     * @param DescribeMeterRtcApproxPeakRateRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeMeterRtcApproxPeakRateResponse
     */
    public function describeMeterRtcApproxPeakRateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->endTs)) {
            $query['EndTs'] = $request->endTs;
        }
        if (!Utils::isUnset($request->interval)) {
            $query['Interval'] = $request->interval;
        }
        if (!Utils::isUnset($request->serviceArea)) {
            $query['ServiceArea'] = $request->serviceArea;
        }
        if (!Utils::isUnset($request->startTs)) {
            $query['StartTs'] = $request->startTs;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeMeterRtcApproxPeakRate',
            'version'     => '2021-04-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeMeterRtcApproxPeakRateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeMeterRtcApproxPeakRateRequest $request
     *
     * @return DescribeMeterRtcApproxPeakRateResponse
     */
    public function describeMeterRtcApproxPeakRate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMeterRtcApproxPeakRateWithOptions($request, $runtime);
    }

    /**
     * @param DescribeMeterRtcChannelCntDataRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeMeterRtcChannelCntDataResponse
     */
    public function describeMeterRtcChannelCntDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->endTs)) {
            $query['EndTs'] = $request->endTs;
        }
        if (!Utils::isUnset($request->interval)) {
            $query['Interval'] = $request->interval;
        }
        if (!Utils::isUnset($request->serviceArea)) {
            $query['ServiceArea'] = $request->serviceArea;
        }
        if (!Utils::isUnset($request->startTs)) {
            $query['StartTs'] = $request->startTs;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeMeterRtcChannelCntData',
            'version'     => '2021-04-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeMeterRtcChannelCntDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeMeterRtcChannelCntDataRequest $request
     *
     * @return DescribeMeterRtcChannelCntDataResponse
     */
    public function describeMeterRtcChannelCntData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMeterRtcChannelCntDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeMeterRtcDurationRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeMeterRtcDurationResponse
     */
    public function describeMeterRtcDurationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->endTs)) {
            $query['EndTs'] = $request->endTs;
        }
        if (!Utils::isUnset($request->interval)) {
            $query['Interval'] = $request->interval;
        }
        if (!Utils::isUnset($request->serviceArea)) {
            $query['ServiceArea'] = $request->serviceArea;
        }
        if (!Utils::isUnset($request->startTs)) {
            $query['StartTs'] = $request->startTs;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeMeterRtcDuration',
            'version'     => '2021-04-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeMeterRtcDurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeMeterRtcDurationRequest $request
     *
     * @return DescribeMeterRtcDurationResponse
     */
    public function describeMeterRtcDuration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMeterRtcDurationWithOptions($request, $runtime);
    }

    /**
     * @param DescribeMeterRtcPeakChannelCntDataRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DescribeMeterRtcPeakChannelCntDataResponse
     */
    public function describeMeterRtcPeakChannelCntDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->endTs)) {
            $query['EndTs'] = $request->endTs;
        }
        if (!Utils::isUnset($request->interval)) {
            $query['Interval'] = $request->interval;
        }
        if (!Utils::isUnset($request->serviceArea)) {
            $query['ServiceArea'] = $request->serviceArea;
        }
        if (!Utils::isUnset($request->startTs)) {
            $query['StartTs'] = $request->startTs;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeMeterRtcPeakChannelCntData',
            'version'     => '2021-04-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeMeterRtcPeakChannelCntDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeMeterRtcPeakChannelCntDataRequest $request
     *
     * @return DescribeMeterRtcPeakChannelCntDataResponse
     */
    public function describeMeterRtcPeakChannelCntData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMeterRtcPeakChannelCntDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeMeterRtcPeakUserCntDataRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeMeterRtcPeakUserCntDataResponse
     */
    public function describeMeterRtcPeakUserCntDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->endTs)) {
            $query['EndTs'] = $request->endTs;
        }
        if (!Utils::isUnset($request->interval)) {
            $query['Interval'] = $request->interval;
        }
        if (!Utils::isUnset($request->serviceArea)) {
            $query['ServiceArea'] = $request->serviceArea;
        }
        if (!Utils::isUnset($request->startTs)) {
            $query['StartTs'] = $request->startTs;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeMeterRtcPeakUserCntData',
            'version'     => '2021-04-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeMeterRtcPeakUserCntDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeMeterRtcPeakUserCntDataRequest $request
     *
     * @return DescribeMeterRtcPeakUserCntDataResponse
     */
    public function describeMeterRtcPeakUserCntData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMeterRtcPeakUserCntDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeMeterRtcRtBandWidthUsageRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeMeterRtcRtBandWidthUsageResponse
     */
    public function describeMeterRtcRtBandWidthUsageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->endTs)) {
            $query['EndTs'] = $request->endTs;
        }
        if (!Utils::isUnset($request->interval)) {
            $query['Interval'] = $request->interval;
        }
        if (!Utils::isUnset($request->serviceArea)) {
            $query['ServiceArea'] = $request->serviceArea;
        }
        if (!Utils::isUnset($request->startTs)) {
            $query['StartTs'] = $request->startTs;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeMeterRtcRtBandWidthUsage',
            'version'     => '2021-04-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeMeterRtcRtBandWidthUsageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeMeterRtcRtBandWidthUsageRequest $request
     *
     * @return DescribeMeterRtcRtBandWidthUsageResponse
     */
    public function describeMeterRtcRtBandWidthUsage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMeterRtcRtBandWidthUsageWithOptions($request, $runtime);
    }

    /**
     * @param DescribeMeterRtcRtFlowUsageRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeMeterRtcRtFlowUsageResponse
     */
    public function describeMeterRtcRtFlowUsageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->endTs)) {
            $query['EndTs'] = $request->endTs;
        }
        if (!Utils::isUnset($request->interval)) {
            $query['Interval'] = $request->interval;
        }
        if (!Utils::isUnset($request->serviceArea)) {
            $query['ServiceArea'] = $request->serviceArea;
        }
        if (!Utils::isUnset($request->startTs)) {
            $query['StartTs'] = $request->startTs;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeMeterRtcRtFlowUsage',
            'version'     => '2021-04-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeMeterRtcRtFlowUsageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeMeterRtcRtFlowUsageRequest $request
     *
     * @return DescribeMeterRtcRtFlowUsageResponse
     */
    public function describeMeterRtcRtFlowUsage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMeterRtcRtFlowUsageWithOptions($request, $runtime);
    }

    /**
     * @param DescribeMeterRtcUserCntDataRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeMeterRtcUserCntDataResponse
     */
    public function describeMeterRtcUserCntDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->endTs)) {
            $query['EndTs'] = $request->endTs;
        }
        if (!Utils::isUnset($request->interval)) {
            $query['Interval'] = $request->interval;
        }
        if (!Utils::isUnset($request->serviceArea)) {
            $query['ServiceArea'] = $request->serviceArea;
        }
        if (!Utils::isUnset($request->startTs)) {
            $query['StartTs'] = $request->startTs;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeMeterRtcUserCntData',
            'version'     => '2021-04-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeMeterRtcUserCntDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeMeterRtcUserCntDataRequest $request
     *
     * @return DescribeMeterRtcUserCntDataResponse
     */
    public function describeMeterRtcUserCntData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMeterRtcUserCntDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeNewPlayVideoPlaySessionEventDetailRequest $request
     * @param RuntimeOptions                                    $runtime
     *
     * @return DescribeNewPlayVideoPlaySessionEventDetailResponse
     */
    public function describeNewPlayVideoPlaySessionEventDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizDate)) {
            $query['BizDate'] = $request->bizDate;
        }
        if (!Utils::isUnset($request->inputStatus)) {
            $query['InputStatus'] = $request->inputStatus;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->VPS)) {
            $query['VPS'] = $request->VPS;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeNewPlayVideoPlaySessionEventDetail',
            'version'     => '2021-04-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeNewPlayVideoPlaySessionEventDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeNewPlayVideoPlaySessionEventDetailRequest $request
     *
     * @return DescribeNewPlayVideoPlaySessionEventDetailResponse
     */
    public function describeNewPlayVideoPlaySessionEventDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeNewPlayVideoPlaySessionEventDetailWithOptions($request, $runtime);
    }

    /**
     * @param DescribeNewPlayVideoPlaySessionListRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return DescribeNewPlayVideoPlaySessionListResponse
     */
    public function describeNewPlayVideoPlaySessionListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTimeStamp)) {
            $query['EndTimeStamp'] = $request->endTimeStamp;
        }
        if (!Utils::isUnset($request->inputStatus)) {
            $query['InputStatus'] = $request->inputStatus;
        }
        if (!Utils::isUnset($request->order)) {
            $query['Order'] = $request->order;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->startTimeStamp)) {
            $query['StartTimeStamp'] = $request->startTimeStamp;
        }
        if (!Utils::isUnset($request->uniqueId)) {
            $query['UniqueId'] = $request->uniqueId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeNewPlayVideoPlaySessionList',
            'version'     => '2021-04-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeNewPlayVideoPlaySessionListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeNewPlayVideoPlaySessionListRequest $request
     *
     * @return DescribeNewPlayVideoPlaySessionListResponse
     */
    public function describeNewPlayVideoPlaySessionList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeNewPlayVideoPlaySessionListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeNewPlayVideoPlaySessioninfoRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return DescribeNewPlayVideoPlaySessioninfoResponse
     */
    public function describeNewPlayVideoPlaySessioninfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->VPS)) {
            $query['VPS'] = $request->VPS;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeNewPlayVideoPlaySessioninfo',
            'version'     => '2021-04-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeNewPlayVideoPlaySessioninfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeNewPlayVideoPlaySessioninfoRequest $request
     *
     * @return DescribeNewPlayVideoPlaySessioninfoResponse
     */
    public function describeNewPlayVideoPlaySessioninfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeNewPlayVideoPlaySessioninfoWithOptions($request, $runtime);
    }
}
