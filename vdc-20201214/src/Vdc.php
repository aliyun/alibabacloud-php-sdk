<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdc\V20201214;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeAppConfigRequest;
use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeAppConfigResponse;
use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeCallInfoRequest;
use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeCallInfoResponse;
use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeCallListRequest;
use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeCallListResponse;
use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeCallRequest;
use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeCallResponse;
use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeCallUserExpRequest;
use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeCallUserExpResponse;
use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeCallUserListRequest;
use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeCallUserListResponse;
use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeChannelAreaDistributionStatDataRequest;
use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeChannelAreaDistributionStatDataResponse;
use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeChannelDistributionStatDataRequest;
use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeChannelDistributionStatDataResponse;
use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeChannelJoinInfoRequest;
use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeChannelJoinInfoResponse;
use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeChannelOverallDataRequest;
use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeChannelOverallDataResponse;
use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeChannelTopPubUserListRequest;
use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeChannelTopPubUserListResponse;
use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeChannelUserMetricsRequest;
use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeChannelUserMetricsResponse;
use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeEndPointEventListRequest;
use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeEndPointEventListResponse;
use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeEndPointMetricDataRequest;
use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeEndPointMetricDataResponse;
use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeFaultDiagnosisFactorDistributionStatRequest;
use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeFaultDiagnosisFactorDistributionStatResponse;
use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeFaultDiagnosisOverallDataRequest;
use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeFaultDiagnosisOverallDataResponse;
use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeFaultDiagnosisUserDetailRequest;
use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeFaultDiagnosisUserDetailResponse;
use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeFaultDiagnosisUserListRequest;
use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeFaultDiagnosisUserListResponse;
use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeIceDurPeriodByDaySubTypeRequest;
use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeIceDurPeriodByDaySubTypeResponse;
use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeIceDurSummaryOverviewRequest;
use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeIceDurSummaryOverviewResponse;
use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribePubUserListBySubUserRequest;
use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribePubUserListBySubUserResponse;
use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeQoeMetricDataRequest;
use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeQoeMetricDataResponse;
use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeQualityAreaDistributionStatDataRequest;
use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeQualityAreaDistributionStatDataResponse;
use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeQualityDistributionStatDataRequest;
use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeQualityDistributionStatDataResponse;
use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeQualityOsSdkVersionDistributionStatDataRequest;
use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeQualityOsSdkVersionDistributionStatDataResponse;
use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeQualityOverallDataRequest;
use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeQualityOverallDataResponse;
use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeUsageAreaDistributionStatDataRequest;
use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeUsageAreaDistributionStatDataResponse;
use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeUsageDistributionStatDataRequest;
use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeUsageDistributionStatDataResponse;
use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeUsageOsSdkVersionDistributionStatDataRequest;
use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeUsageOsSdkVersionDistributionStatDataResponse;
use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeUsageOverallDataRequest;
use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeUsageOverallDataResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Vdc extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('vdc', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param DescribeAppConfigRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeAppConfigResponse
     */
    public function describeAppConfigWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAppConfig',
            'version'     => '2020-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/config/describeAppConfig',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeAppConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAppConfigRequest $request
     *
     * @return DescribeAppConfigResponse
     */
    public function describeAppConfig($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeAppConfigWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DescribeCallRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return DescribeCallResponse
     */
    public function describeCallWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->channelId)) {
            $query['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->createdTs)) {
            $query['CreatedTs'] = $request->createdTs;
        }
        if (!Utils::isUnset($request->destroyedTs)) {
            $query['DestroyedTs'] = $request->destroyedTs;
        }
        if (!Utils::isUnset($request->extDataType)) {
            $query['ExtDataType'] = $request->extDataType;
        }
        if (!Utils::isUnset($request->queryExpInfo)) {
            $query['QueryExpInfo'] = $request->queryExpInfo;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeCall',
            'version'     => '2020-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/call/describeCall',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeCallResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeCallRequest $request
     *
     * @return DescribeCallResponse
     */
    public function describeCall($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeCallWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DescribeCallInfoRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeCallInfoResponse
     */
    public function describeCallInfoWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->channelId)) {
            $query['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->createdTs)) {
            $query['CreatedTs'] = $request->createdTs;
        }
        if (!Utils::isUnset($request->destroyedTs)) {
            $query['DestroyedTs'] = $request->destroyedTs;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeCallInfo',
            'version'     => '2020-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/call/describeCallInfo',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeCallInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeCallInfoRequest $request
     *
     * @return DescribeCallInfoResponse
     */
    public function describeCallInfo($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeCallInfoWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DescribeCallListRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeCallListResponse
     */
    public function describeCallListWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->callStatus)) {
            $query['CallStatus'] = $request->callStatus;
        }
        if (!Utils::isUnset($request->channelId)) {
            $query['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->endTs)) {
            $query['EndTs'] = $request->endTs;
        }
        if (!Utils::isUnset($request->orderBy)) {
            $query['OrderBy'] = $request->orderBy;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->queryMode)) {
            $query['QueryMode'] = $request->queryMode;
        }
        if (!Utils::isUnset($request->startTs)) {
            $query['StartTs'] = $request->startTs;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeCallList',
            'version'     => '2020-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/call/describeCallList',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeCallListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeCallListRequest $request
     *
     * @return DescribeCallListResponse
     */
    public function describeCallList($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeCallListWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DescribeCallUserExpRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeCallUserExpResponse
     */
    public function describeCallUserExpWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->channelId)) {
            $query['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->createdTs)) {
            $query['CreatedTs'] = $request->createdTs;
        }
        if (!Utils::isUnset($request->destroyedTs)) {
            $query['DestroyedTs'] = $request->destroyedTs;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeCallUserExp',
            'version'     => '2020-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/call/describeCallUserExp',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeCallUserExpResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeCallUserExpRequest $request
     *
     * @return DescribeCallUserExpResponse
     */
    public function describeCallUserExp($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeCallUserExpWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DescribeCallUserListRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeCallUserListResponse
     */
    public function describeCallUserListWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->channelId)) {
            $query['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->createdTs)) {
            $query['CreatedTs'] = $request->createdTs;
        }
        if (!Utils::isUnset($request->destroyedTs)) {
            $query['DestroyedTs'] = $request->destroyedTs;
        }
        if (!Utils::isUnset($request->extDataType)) {
            $query['ExtDataType'] = $request->extDataType;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->queryExpInfo)) {
            $query['QueryExpInfo'] = $request->queryExpInfo;
        }
        if (!Utils::isUnset($request->roleType)) {
            $query['RoleType'] = $request->roleType;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeCallUserList',
            'version'     => '2020-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/call/describeCallUserList',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeCallUserListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeCallUserListRequest $request
     *
     * @return DescribeCallUserListResponse
     */
    public function describeCallUserList($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeCallUserListWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DescribeChannelAreaDistributionStatDataRequest $request
     * @param string[]                                       $headers
     * @param RuntimeOptions                                 $runtime
     *
     * @return DescribeChannelAreaDistributionStatDataResponse
     */
    public function describeChannelAreaDistributionStatDataWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->channelId)) {
            $query['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->createdTs)) {
            $query['CreatedTs'] = $request->createdTs;
        }
        if (!Utils::isUnset($request->destroyedTs)) {
            $query['DestroyedTs'] = $request->destroyedTs;
        }
        if (!Utils::isUnset($request->parentArea)) {
            $query['ParentArea'] = $request->parentArea;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeChannelAreaDistributionStatData',
            'version'     => '2020-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/channel/describeChannelAreaDistributionStatData',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeChannelAreaDistributionStatDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeChannelAreaDistributionStatDataRequest $request
     *
     * @return DescribeChannelAreaDistributionStatDataResponse
     */
    public function describeChannelAreaDistributionStatData($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeChannelAreaDistributionStatDataWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DescribeChannelDistributionStatDataRequest $request
     * @param string[]                                   $headers
     * @param RuntimeOptions                             $runtime
     *
     * @return DescribeChannelDistributionStatDataResponse
     */
    public function describeChannelDistributionStatDataWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->channelId)) {
            $query['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->createdTs)) {
            $query['CreatedTs'] = $request->createdTs;
        }
        if (!Utils::isUnset($request->destroyedTs)) {
            $query['DestroyedTs'] = $request->destroyedTs;
        }
        if (!Utils::isUnset($request->statDim)) {
            $query['StatDim'] = $request->statDim;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeChannelDistributionStatData',
            'version'     => '2020-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/channel/describeChannelDistributionStatData',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeChannelDistributionStatDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeChannelDistributionStatDataRequest $request
     *
     * @return DescribeChannelDistributionStatDataResponse
     */
    public function describeChannelDistributionStatData($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeChannelDistributionStatDataWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DescribeChannelJoinInfoRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeChannelJoinInfoResponse
     */
    public function describeChannelJoinInfoWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->channelId)) {
            $query['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->createdTs)) {
            $query['CreatedTs'] = $request->createdTs;
        }
        if (!Utils::isUnset($request->destroyedTs)) {
            $query['DestroyedTs'] = $request->destroyedTs;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeChannelJoinInfo',
            'version'     => '2020-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/channel/describeChannelJoinInfo',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeChannelJoinInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeChannelJoinInfoRequest $request
     *
     * @return DescribeChannelJoinInfoResponse
     */
    public function describeChannelJoinInfo($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeChannelJoinInfoWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DescribeChannelOverallDataRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeChannelOverallDataResponse
     */
    public function describeChannelOverallDataWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->channelId)) {
            $query['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->createdTs)) {
            $query['CreatedTs'] = $request->createdTs;
        }
        if (!Utils::isUnset($request->destroyedTs)) {
            $query['DestroyedTs'] = $request->destroyedTs;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeChannelOverallData',
            'version'     => '2020-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/channel/describeChannelOverallData',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeChannelOverallDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeChannelOverallDataRequest $request
     *
     * @return DescribeChannelOverallDataResponse
     */
    public function describeChannelOverallData($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeChannelOverallDataWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DescribeChannelTopPubUserListRequest $request
     * @param string[]                             $headers
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeChannelTopPubUserListResponse
     */
    public function describeChannelTopPubUserListWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->channelId)) {
            $query['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->createdTs)) {
            $query['CreatedTs'] = $request->createdTs;
        }
        if (!Utils::isUnset($request->destroyedTs)) {
            $query['DestroyedTs'] = $request->destroyedTs;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeChannelTopPubUserList',
            'version'     => '2020-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/channel/describeChannelTopPubUserList',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeChannelTopPubUserListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeChannelTopPubUserListRequest $request
     *
     * @return DescribeChannelTopPubUserListResponse
     */
    public function describeChannelTopPubUserList($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeChannelTopPubUserListWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DescribeChannelUserMetricsRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeChannelUserMetricsResponse
     */
    public function describeChannelUserMetricsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->channelId)) {
            $query['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->createdTs)) {
            $query['CreatedTs'] = $request->createdTs;
        }
        if (!Utils::isUnset($request->destroyedTs)) {
            $query['DestroyedTs'] = $request->destroyedTs;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeChannelUserMetrics',
            'version'     => '2020-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/channel/describeChannelUserMetrics',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeChannelUserMetricsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeChannelUserMetricsRequest $request
     *
     * @return DescribeChannelUserMetricsResponse
     */
    public function describeChannelUserMetrics($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeChannelUserMetricsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DescribeEndPointEventListRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeEndPointEventListResponse
     */
    public function describeEndPointEventListWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->channelId)) {
            $query['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->createdTs)) {
            $query['CreatedTs'] = $request->createdTs;
        }
        if (!Utils::isUnset($request->destroyedTs)) {
            $query['DestroyedTs'] = $request->destroyedTs;
        }
        if (!Utils::isUnset($request->userIdList)) {
            $query['UserIdList'] = $request->userIdList;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeEndPointEventList',
            'version'     => '2020-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/call/describeEndPointEventList',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeEndPointEventListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeEndPointEventListRequest $request
     *
     * @return DescribeEndPointEventListResponse
     */
    public function describeEndPointEventList($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeEndPointEventListWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DescribeEndPointMetricDataRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeEndPointMetricDataResponse
     */
    public function describeEndPointMetricDataWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->channelId)) {
            $query['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->createdTs)) {
            $query['CreatedTs'] = $request->createdTs;
        }
        if (!Utils::isUnset($request->destroyedTs)) {
            $query['DestroyedTs'] = $request->destroyedTs;
        }
        if (!Utils::isUnset($request->metrics)) {
            $query['Metrics'] = $request->metrics;
        }
        if (!Utils::isUnset($request->pubCallIdList)) {
            $query['PubCallIdList'] = $request->pubCallIdList;
        }
        if (!Utils::isUnset($request->pubUserId)) {
            $query['PubUserId'] = $request->pubUserId;
        }
        if (!Utils::isUnset($request->subUserId)) {
            $query['SubUserId'] = $request->subUserId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeEndPointMetricData',
            'version'     => '2020-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/call/describeEndPointMetricData',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeEndPointMetricDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeEndPointMetricDataRequest $request
     *
     * @return DescribeEndPointMetricDataResponse
     */
    public function describeEndPointMetricData($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeEndPointMetricDataWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DescribeFaultDiagnosisFactorDistributionStatRequest $request
     * @param string[]                                            $headers
     * @param RuntimeOptions                                      $runtime
     *
     * @return DescribeFaultDiagnosisFactorDistributionStatResponse
     */
    public function describeFaultDiagnosisFactorDistributionStatWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->endTs)) {
            $query['EndTs'] = $request->endTs;
        }
        if (!Utils::isUnset($request->startTs)) {
            $query['StartTs'] = $request->startTs;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeFaultDiagnosisFactorDistributionStat',
            'version'     => '2020-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/diagnosis/describeFaultDiagnosisFactorDistributionStat',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeFaultDiagnosisFactorDistributionStatResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeFaultDiagnosisFactorDistributionStatRequest $request
     *
     * @return DescribeFaultDiagnosisFactorDistributionStatResponse
     */
    public function describeFaultDiagnosisFactorDistributionStat($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeFaultDiagnosisFactorDistributionStatWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DescribeFaultDiagnosisOverallDataRequest $request
     * @param string[]                                 $headers
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeFaultDiagnosisOverallDataResponse
     */
    public function describeFaultDiagnosisOverallDataWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->endTs)) {
            $query['EndTs'] = $request->endTs;
        }
        if (!Utils::isUnset($request->startTs)) {
            $query['StartTs'] = $request->startTs;
        }
        if (!Utils::isUnset($request->statDim)) {
            $query['StatDim'] = $request->statDim;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeFaultDiagnosisOverallData',
            'version'     => '2020-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/diagnosis/describeFaultDiagnosisOverallData',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeFaultDiagnosisOverallDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeFaultDiagnosisOverallDataRequest $request
     *
     * @return DescribeFaultDiagnosisOverallDataResponse
     */
    public function describeFaultDiagnosisOverallData($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeFaultDiagnosisOverallDataWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DescribeFaultDiagnosisUserDetailRequest $request
     * @param string[]                                $headers
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeFaultDiagnosisUserDetailResponse
     */
    public function describeFaultDiagnosisUserDetailWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->channelId)) {
            $query['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->createdTs)) {
            $query['CreatedTs'] = $request->createdTs;
        }
        if (!Utils::isUnset($request->faultType)) {
            $query['FaultType'] = $request->faultType;
        }
        if (!Utils::isUnset($request->queryCallUserInfo)) {
            $query['QueryCallUserInfo'] = $request->queryCallUserInfo;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeFaultDiagnosisUserDetail',
            'version'     => '2020-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/diagnosis/describeFaultDiagnosisUserDetail',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeFaultDiagnosisUserDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeFaultDiagnosisUserDetailRequest $request
     *
     * @return DescribeFaultDiagnosisUserDetailResponse
     */
    public function describeFaultDiagnosisUserDetail($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeFaultDiagnosisUserDetailWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DescribeFaultDiagnosisUserListRequest $request
     * @param string[]                              $headers
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeFaultDiagnosisUserListResponse
     */
    public function describeFaultDiagnosisUserListWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->channelId)) {
            $query['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->endTs)) {
            $query['EndTs'] = $request->endTs;
        }
        if (!Utils::isUnset($request->faultTypes)) {
            $query['FaultTypes'] = $request->faultTypes;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->startTs)) {
            $query['StartTs'] = $request->startTs;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeFaultDiagnosisUserList',
            'version'     => '2020-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/diagnosis/describeFaultDiagnosisUserList',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeFaultDiagnosisUserListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeFaultDiagnosisUserListRequest $request
     *
     * @return DescribeFaultDiagnosisUserListResponse
     */
    public function describeFaultDiagnosisUserList($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeFaultDiagnosisUserListWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DescribeIceDurPeriodByDaySubTypeRequest $request
     * @param string[]                                $headers
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeIceDurPeriodByDaySubTypeResponse
     */
    public function describeIceDurPeriodByDaySubTypeWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTs)) {
            $query['EndTs'] = $request->endTs;
        }
        if (!Utils::isUnset($request->jobType)) {
            $query['JobType'] = $request->jobType;
        }
        if (!Utils::isUnset($request->startTs)) {
            $query['StartTs'] = $request->startTs;
        }
        if (!Utils::isUnset($request->timeZone)) {
            $query['TimeZone'] = $request->timeZone;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeIceDurPeriodByDaySubType',
            'version'     => '2020-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/ice/describeIceDurPeriodByDaySubType',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeIceDurPeriodByDaySubTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeIceDurPeriodByDaySubTypeRequest $request
     *
     * @return DescribeIceDurPeriodByDaySubTypeResponse
     */
    public function describeIceDurPeriodByDaySubType($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeIceDurPeriodByDaySubTypeWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DescribeIceDurSummaryOverviewRequest $request
     * @param string[]                             $headers
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeIceDurSummaryOverviewResponse
     */
    public function describeIceDurSummaryOverviewWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->curTs)) {
            $query['CurTs'] = $request->curTs;
        }
        if (!Utils::isUnset($request->timeZone)) {
            $query['TimeZone'] = $request->timeZone;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeIceDurSummaryOverview',
            'version'     => '2020-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/ice/describeIceDurSummaryOverview',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeIceDurSummaryOverviewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeIceDurSummaryOverviewRequest $request
     *
     * @return DescribeIceDurSummaryOverviewResponse
     */
    public function describeIceDurSummaryOverview($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeIceDurSummaryOverviewWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DescribePubUserListBySubUserRequest $request
     * @param string[]                            $headers
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribePubUserListBySubUserResponse
     */
    public function describePubUserListBySubUserWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->channelId)) {
            $query['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->createdTs)) {
            $query['CreatedTs'] = $request->createdTs;
        }
        if (!Utils::isUnset($request->destroyedTs)) {
            $query['DestroyedTs'] = $request->destroyedTs;
        }
        if (!Utils::isUnset($request->subUserId)) {
            $query['SubUserId'] = $request->subUserId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePubUserListBySubUser',
            'version'     => '2020-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/call/describePubUserListBySubUser',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribePubUserListBySubUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribePubUserListBySubUserRequest $request
     *
     * @return DescribePubUserListBySubUserResponse
     */
    public function describePubUserListBySubUser($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describePubUserListBySubUserWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DescribeQoeMetricDataRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeQoeMetricDataResponse
     */
    public function describeQoeMetricDataWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->channelId)) {
            $query['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->createdTs)) {
            $query['CreatedTs'] = $request->createdTs;
        }
        if (!Utils::isUnset($request->destroyedTs)) {
            $query['DestroyedTs'] = $request->destroyedTs;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeQoeMetricData',
            'version'     => '2020-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/call/describeQoeMetricData',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeQoeMetricDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeQoeMetricDataRequest $request
     *
     * @return DescribeQoeMetricDataResponse
     */
    public function describeQoeMetricData($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeQoeMetricDataWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DescribeQualityAreaDistributionStatDataRequest $request
     * @param string[]                                       $headers
     * @param RuntimeOptions                                 $runtime
     *
     * @return DescribeQualityAreaDistributionStatDataResponse
     */
    public function describeQualityAreaDistributionStatDataWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->endDate)) {
            $query['EndDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->parentArea)) {
            $query['ParentArea'] = $request->parentArea;
        }
        if (!Utils::isUnset($request->startDate)) {
            $query['StartDate'] = $request->startDate;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeQualityAreaDistributionStatData',
            'version'     => '2020-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/quality/describeQualityAreaDistributionStatData',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeQualityAreaDistributionStatDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeQualityAreaDistributionStatDataRequest $request
     *
     * @return DescribeQualityAreaDistributionStatDataResponse
     */
    public function describeQualityAreaDistributionStatData($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeQualityAreaDistributionStatDataWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DescribeQualityDistributionStatDataRequest $request
     * @param string[]                                   $headers
     * @param RuntimeOptions                             $runtime
     *
     * @return DescribeQualityDistributionStatDataResponse
     */
    public function describeQualityDistributionStatDataWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->endDate)) {
            $query['EndDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->startDate)) {
            $query['StartDate'] = $request->startDate;
        }
        if (!Utils::isUnset($request->statDim)) {
            $query['StatDim'] = $request->statDim;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeQualityDistributionStatData',
            'version'     => '2020-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/quality/describeQualityDistributionStatData',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeQualityDistributionStatDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeQualityDistributionStatDataRequest $request
     *
     * @return DescribeQualityDistributionStatDataResponse
     */
    public function describeQualityDistributionStatData($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeQualityDistributionStatDataWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DescribeQualityOsSdkVersionDistributionStatDataRequest $request
     * @param string[]                                               $headers
     * @param RuntimeOptions                                         $runtime
     *
     * @return DescribeQualityOsSdkVersionDistributionStatDataResponse
     */
    public function describeQualityOsSdkVersionDistributionStatDataWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->endDate)) {
            $query['EndDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->startDate)) {
            $query['StartDate'] = $request->startDate;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeQualityOsSdkVersionDistributionStatData',
            'version'     => '2020-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/quality/describeQualityOsSdkVersionDistributionStatData',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeQualityOsSdkVersionDistributionStatDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeQualityOsSdkVersionDistributionStatDataRequest $request
     *
     * @return DescribeQualityOsSdkVersionDistributionStatDataResponse
     */
    public function describeQualityOsSdkVersionDistributionStatData($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeQualityOsSdkVersionDistributionStatDataWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DescribeQualityOverallDataRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeQualityOverallDataResponse
     */
    public function describeQualityOverallDataWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->endDate)) {
            $query['EndDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->startDate)) {
            $query['StartDate'] = $request->startDate;
        }
        if (!Utils::isUnset($request->types)) {
            $query['Types'] = $request->types;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeQualityOverallData',
            'version'     => '2020-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/quality/describeQualityOverallData',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeQualityOverallDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeQualityOverallDataRequest $request
     *
     * @return DescribeQualityOverallDataResponse
     */
    public function describeQualityOverallData($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeQualityOverallDataWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DescribeUsageAreaDistributionStatDataRequest $request
     * @param string[]                                     $headers
     * @param RuntimeOptions                               $runtime
     *
     * @return DescribeUsageAreaDistributionStatDataResponse
     */
    public function describeUsageAreaDistributionStatDataWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->endDate)) {
            $query['EndDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->parentArea)) {
            $query['ParentArea'] = $request->parentArea;
        }
        if (!Utils::isUnset($request->startDate)) {
            $query['StartDate'] = $request->startDate;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeUsageAreaDistributionStatData',
            'version'     => '2020-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/usage/describeUsageAreaDistributionStatData',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeUsageAreaDistributionStatDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeUsageAreaDistributionStatDataRequest $request
     *
     * @return DescribeUsageAreaDistributionStatDataResponse
     */
    public function describeUsageAreaDistributionStatData($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeUsageAreaDistributionStatDataWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DescribeUsageDistributionStatDataRequest $request
     * @param string[]                                 $headers
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeUsageDistributionStatDataResponse
     */
    public function describeUsageDistributionStatDataWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->endDate)) {
            $query['EndDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->startDate)) {
            $query['StartDate'] = $request->startDate;
        }
        if (!Utils::isUnset($request->statDim)) {
            $query['StatDim'] = $request->statDim;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeUsageDistributionStatData',
            'version'     => '2020-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/usage/describeUsageDistributionStatData',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeUsageDistributionStatDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeUsageDistributionStatDataRequest $request
     *
     * @return DescribeUsageDistributionStatDataResponse
     */
    public function describeUsageDistributionStatData($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeUsageDistributionStatDataWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DescribeUsageOsSdkVersionDistributionStatDataRequest $request
     * @param string[]                                             $headers
     * @param RuntimeOptions                                       $runtime
     *
     * @return DescribeUsageOsSdkVersionDistributionStatDataResponse
     */
    public function describeUsageOsSdkVersionDistributionStatDataWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->endDate)) {
            $query['EndDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->startDate)) {
            $query['StartDate'] = $request->startDate;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeUsageOsSdkVersionDistributionStatData',
            'version'     => '2020-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/usage/describeUsageOsSdkVersionDistributionStatData',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeUsageOsSdkVersionDistributionStatDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeUsageOsSdkVersionDistributionStatDataRequest $request
     *
     * @return DescribeUsageOsSdkVersionDistributionStatDataResponse
     */
    public function describeUsageOsSdkVersionDistributionStatData($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeUsageOsSdkVersionDistributionStatDataWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DescribeUsageOverallDataRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeUsageOverallDataResponse
     */
    public function describeUsageOverallDataWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->endDate)) {
            $query['EndDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->startDate)) {
            $query['StartDate'] = $request->startDate;
        }
        if (!Utils::isUnset($request->types)) {
            $query['Types'] = $request->types;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeUsageOverallData',
            'version'     => '2020-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/usage/describeUsageOverallData',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeUsageOverallDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeUsageOverallDataRequest $request
     *
     * @return DescribeUsageOverallDataResponse
     */
    public function describeUsageOverallData($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeUsageOverallDataWithOptions($request, $headers, $runtime);
    }
}
