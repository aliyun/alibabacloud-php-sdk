<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdc\V20201214;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Vdc\V20201214\Models\DeleteAppExpMetricRuleRequest;
use AlibabaCloud\SDK\Vdc\V20201214\Models\DeleteAppExpMetricRuleResponse;
use AlibabaCloud\SDK\Vdc\V20201214\Models\DeleteAppFollowCallRuleRequest;
use AlibabaCloud\SDK\Vdc\V20201214\Models\DeleteAppFollowCallRuleResponse;
use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeAppConfigRequest;
use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeAppConfigResponse;
use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeAppExpMetricRuleListResponse;
use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeAppExpMetricRuleRequest;
use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeAppExpMetricRuleResponse;
use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeAppFollowCallRuleListResponse;
use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeAppFollowCallRuleRequest;
use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeAppFollowCallRuleResponse;
use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeCallListRequest;
use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeCallListResponse;
use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeCallListTestRequest;
use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeCallListTestResponse;
use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeCallRequest;
use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeCallResponse;
use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeCallUserExpRequest;
use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeCallUserExpResponse;
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
use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeRtcChannelDetailsRequest;
use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeRtcChannelDetailsResponse;
use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeRtcChannelListRequest;
use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeRtcChannelListResponse;
use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeRtcChannelMetricListRequest;
use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeRtcChannelMetricListResponse;
use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeRtcChannelUsersRequest;
use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeRtcChannelUsersResponse;
use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeRtcRecordMetricDataRequest;
use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeRtcRecordMetricDataResponse;
use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeRtcUserEventListRequest;
use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeRtcUserEventListResponse;
use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeUsageAreaDistributionStatDataRequest;
use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeUsageAreaDistributionStatDataResponse;
use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeUsageDistributionStatDataRequest;
use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeUsageDistributionStatDataResponse;
use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeUsageOsSdkVersionDistributionStatDataRequest;
use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeUsageOsSdkVersionDistributionStatDataResponse;
use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeUsageOverallDataRequest;
use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeUsageOverallDataResponse;
use AlibabaCloud\SDK\Vdc\V20201214\Models\UpdateAppExpMetricRuleRequest;
use AlibabaCloud\SDK\Vdc\V20201214\Models\UpdateAppExpMetricRuleResponse;
use AlibabaCloud\SDK\Vdc\V20201214\Models\UpdateAppFollowCallRuleRequest;
use AlibabaCloud\SDK\Vdc\V20201214\Models\UpdateAppFollowCallRuleResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
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
            @$query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->startTs)) {
            @$query['StartTs'] = $request->startTs;
        }
        if (!Utils::isUnset($request->endTs)) {
            @$query['EndTs'] = $request->endTs;
        }
        if (!Utils::isUnset($request->statDim)) {
            @$query['StatDim'] = $request->statDim;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DescribeFaultDiagnosisOverallDataResponse::fromMap($this->doROARequest('DescribeFaultDiagnosisOverallData', '2020-12-14', 'HTTPS', 'POST', 'AK', '/api/diagnosis/describeFaultDiagnosisOverallData', 'json', $req, $runtime));
    }

    /**
     * @param DescribeRtcChannelUsersRequest $request
     *
     * @return DescribeRtcChannelUsersResponse
     */
    public function describeRtcChannelUsers($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeRtcChannelUsersWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DescribeRtcChannelUsersRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeRtcChannelUsersResponse
     */
    public function describeRtcChannelUsersWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            @$query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->channelId)) {
            @$query['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->timePoint)) {
            @$query['TimePoint'] = $request->timePoint;
        }
        if (!Utils::isUnset($request->pageNo)) {
            @$query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            @$query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DescribeRtcChannelUsersResponse::fromMap($this->doROARequest('DescribeRtcChannelUsers', '2020-12-14', 'HTTPS', 'POST', 'AK', '/api/channel/describeRtcChannelUsers', 'json', $req, $runtime));
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
            @$query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->channelId)) {
            @$query['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->createdTs)) {
            @$query['CreatedTs'] = $request->createdTs;
        }
        if (!Utils::isUnset($request->destroyedTs)) {
            @$query['DestroyedTs'] = $request->destroyedTs;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DescribeChannelOverallDataResponse::fromMap($this->doROARequest('DescribeChannelOverallData', '2020-12-14', 'HTTPS', 'POST', 'AK', '/api/channel/describeChannelOverallData', 'json', $req, $runtime));
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
        if (!Utils::isUnset($request->startDate)) {
            @$query['StartDate'] = $request->startDate;
        }
        if (!Utils::isUnset($request->endDate)) {
            @$query['EndDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->appId)) {
            @$query['AppId'] = $request->appId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DescribeUsageOsSdkVersionDistributionStatDataResponse::fromMap($this->doROARequest('DescribeUsageOsSdkVersionDistributionStatData', '2020-12-14', 'HTTPS', 'POST', 'AK', '/api/usage/describeUsageOsSdkVersionDistributionStatData', 'json', $req, $runtime));
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
        if (!Utils::isUnset($request->jobType)) {
            @$query['JobType'] = $request->jobType;
        }
        if (!Utils::isUnset($request->startTs)) {
            @$query['StartTs'] = $request->startTs;
        }
        if (!Utils::isUnset($request->endTs)) {
            @$query['EndTs'] = $request->endTs;
        }
        if (!Utils::isUnset($request->timeZone)) {
            @$query['TimeZone'] = $request->timeZone;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DescribeIceDurPeriodByDaySubTypeResponse::fromMap($this->doROARequest('DescribeIceDurPeriodByDaySubType', '2020-12-14', 'HTTPS', 'POST', 'AK', '/api/ice/describeIceDurPeriodByDaySubType', 'json', $req, $runtime));
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
            @$query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->startTs)) {
            @$query['StartTs'] = $request->startTs;
        }
        if (!Utils::isUnset($request->endTs)) {
            @$query['EndTs'] = $request->endTs;
        }
        if (!Utils::isUnset($request->channelId)) {
            @$query['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->userId)) {
            @$query['UserId'] = $request->userId;
        }
        if (!Utils::isUnset($request->callStatus)) {
            @$query['CallStatus'] = $request->callStatus;
        }
        if (!Utils::isUnset($request->orderBy)) {
            @$query['OrderBy'] = $request->orderBy;
        }
        if (!Utils::isUnset($request->queryMode)) {
            @$query['QueryMode'] = $request->queryMode;
        }
        if (!Utils::isUnset($request->pageNo)) {
            @$query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            @$query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DescribeCallListResponse::fromMap($this->doROARequest('DescribeCallList', '2020-12-14', 'HTTPS', 'POST', 'AK', '/api/call/describeCallList', 'json', $req, $runtime));
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
        if (!Utils::isUnset($request->startDate)) {
            @$query['StartDate'] = $request->startDate;
        }
        if (!Utils::isUnset($request->endDate)) {
            @$query['EndDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->parentArea)) {
            @$query['ParentArea'] = $request->parentArea;
        }
        if (!Utils::isUnset($request->appId)) {
            @$query['AppId'] = $request->appId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DescribeQualityAreaDistributionStatDataResponse::fromMap($this->doROARequest('DescribeQualityAreaDistributionStatData', '2020-12-14', 'HTTPS', 'POST', 'AK', '/api/quality/describeQualityAreaDistributionStatData', 'json', $req, $runtime));
    }

    /**
     * @param DescribeRtcUserEventListRequest $request
     *
     * @return DescribeRtcUserEventListResponse
     */
    public function describeRtcUserEventList($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeRtcUserEventListWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DescribeRtcUserEventListRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeRtcUserEventListResponse
     */
    public function describeRtcUserEventListWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            @$query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->channelId)) {
            @$query['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->uid)) {
            @$query['Uid'] = $request->uid;
        }
        if (!Utils::isUnset($request->startTime)) {
            @$query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->endTime)) {
            @$query['EndTime'] = $request->endTime;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DescribeRtcUserEventListResponse::fromMap($this->doROARequest('DescribeRtcUserEventList', '2020-12-14', 'HTTPS', 'POST', 'AK', '/api/call/describeRtcUserEventList', 'json', $req, $runtime));
    }

    /**
     * @param DeleteAppExpMetricRuleRequest $request
     *
     * @return DeleteAppExpMetricRuleResponse
     */
    public function deleteAppExpMetricRule($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteAppExpMetricRuleWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DeleteAppExpMetricRuleRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteAppExpMetricRuleResponse
     */
    public function deleteAppExpMetricRuleWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            @$query['AppId'] = $request->appId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DeleteAppExpMetricRuleResponse::fromMap($this->doROARequest('DeleteAppExpMetricRule', '2020-12-14', 'HTTPS', 'POST', 'AK', '/api/config/deleteAppExpMetricRule', 'json', $req, $runtime));
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
            @$query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->channelId)) {
            @$query['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->createdTs)) {
            @$query['CreatedTs'] = $request->createdTs;
        }
        if (!Utils::isUnset($request->destroyedTs)) {
            @$query['DestroyedTs'] = $request->destroyedTs;
        }
        if (!Utils::isUnset($request->userIdList)) {
            @$query['UserIdList'] = $request->userIdList;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DescribeEndPointEventListResponse::fromMap($this->doROARequest('DescribeEndPointEventList', '2020-12-14', 'HTTPS', 'POST', 'AK', '/api/call/describeEndPointEventList', 'json', $req, $runtime));
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
        if (!Utils::isUnset($request->startDate)) {
            @$query['StartDate'] = $request->startDate;
        }
        if (!Utils::isUnset($request->endDate)) {
            @$query['EndDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->statDim)) {
            @$query['StatDim'] = $request->statDim;
        }
        if (!Utils::isUnset($request->appId)) {
            @$query['AppId'] = $request->appId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DescribeQualityDistributionStatDataResponse::fromMap($this->doROARequest('DescribeQualityDistributionStatData', '2020-12-14', 'HTTPS', 'POST', 'AK', '/api/quality/describeQualityDistributionStatData', 'json', $req, $runtime));
    }

    /**
     * @param DescribeCallListTestRequest $request
     *
     * @return DescribeCallListTestResponse
     */
    public function describeCallListTest($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeCallListTestWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DescribeCallListTestRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeCallListTestResponse
     */
    public function describeCallListTestWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            @$query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->startTs)) {
            @$query['StartTs'] = $request->startTs;
        }
        if (!Utils::isUnset($request->endTs)) {
            @$query['EndTs'] = $request->endTs;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DescribeCallListTestResponse::fromMap($this->doROARequest('DescribeCallListTest', '2020-12-14', 'HTTPS', 'POST', 'AK', '/api/call/describeCallListTest', 'json', $req, $runtime));
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
            @$query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->channelId)) {
            @$query['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->createdTs)) {
            @$query['CreatedTs'] = $request->createdTs;
        }
        if (!Utils::isUnset($request->destroyedTs)) {
            @$query['DestroyedTs'] = $request->destroyedTs;
        }
        if (!Utils::isUnset($request->extDataType)) {
            @$query['ExtDataType'] = $request->extDataType;
        }
        if (!Utils::isUnset($request->queryExpInfo)) {
            @$query['QueryExpInfo'] = $request->queryExpInfo;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DescribeCallResponse::fromMap($this->doROARequest('DescribeCall', '2020-12-14', 'HTTPS', 'POST', 'AK', '/api/call/describeCall', 'json', $req, $runtime));
    }

    /**
     * @return DescribeAppFollowCallRuleListResponse
     */
    public function describeAppFollowCallRuleList()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeAppFollowCallRuleListWithOptions($headers, $runtime);
    }

    /**
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeAppFollowCallRuleListResponse
     */
    public function describeAppFollowCallRuleListWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return DescribeAppFollowCallRuleListResponse::fromMap($this->doROARequest('DescribeAppFollowCallRuleList', '2020-12-14', 'HTTPS', 'POST', 'AK', '/api/config/describeAppFollowCallRuleList', 'json', $req, $runtime));
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
            @$query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->channelId)) {
            @$query['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->createdTs)) {
            @$query['CreatedTs'] = $request->createdTs;
        }
        if (!Utils::isUnset($request->destroyedTs)) {
            @$query['DestroyedTs'] = $request->destroyedTs;
        }
        if (!Utils::isUnset($request->parentArea)) {
            @$query['ParentArea'] = $request->parentArea;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DescribeChannelAreaDistributionStatDataResponse::fromMap($this->doROARequest('DescribeChannelAreaDistributionStatData', '2020-12-14', 'HTTPS', 'POST', 'AK', '/api/channel/describeChannelAreaDistributionStatData', 'json', $req, $runtime));
    }

    /**
     * @param DescribeAppExpMetricRuleRequest $request
     *
     * @return DescribeAppExpMetricRuleResponse
     */
    public function describeAppExpMetricRule($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeAppExpMetricRuleWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DescribeAppExpMetricRuleRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeAppExpMetricRuleResponse
     */
    public function describeAppExpMetricRuleWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            @$query['AppId'] = $request->appId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DescribeAppExpMetricRuleResponse::fromMap($this->doROARequest('DescribeAppExpMetricRule', '2020-12-14', 'HTTPS', 'POST', 'AK', '/api/config/describeAppExpMetricRule', 'json', $req, $runtime));
    }

    /**
     * @param DescribeRtcChannelDetailsRequest $request
     *
     * @return DescribeRtcChannelDetailsResponse
     */
    public function describeRtcChannelDetails($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeRtcChannelDetailsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DescribeRtcChannelDetailsRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeRtcChannelDetailsResponse
     */
    public function describeRtcChannelDetailsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            @$query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->channelId)) {
            @$query['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->startTime)) {
            @$query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->endTime)) {
            @$query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->pageNo)) {
            @$query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            @$query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DescribeRtcChannelDetailsResponse::fromMap($this->doROARequest('DescribeRtcChannelDetails', '2020-12-14', 'HTTPS', 'POST', 'AK', '/api/channel/describeRtcChannelDetails', 'json', $req, $runtime));
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
            @$query['CurTs'] = $request->curTs;
        }
        if (!Utils::isUnset($request->timeZone)) {
            @$query['TimeZone'] = $request->timeZone;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DescribeIceDurSummaryOverviewResponse::fromMap($this->doROARequest('DescribeIceDurSummaryOverview', '2020-12-14', 'HTTPS', 'POST', 'AK', '/api/ice/describeIceDurSummaryOverview', 'json', $req, $runtime));
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
            @$query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->channelId)) {
            @$query['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->createdTs)) {
            @$query['CreatedTs'] = $request->createdTs;
        }
        if (!Utils::isUnset($request->destroyedTs)) {
            @$query['DestroyedTs'] = $request->destroyedTs;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DescribeCallUserExpResponse::fromMap($this->doROARequest('DescribeCallUserExp', '2020-12-14', 'HTTPS', 'POST', 'AK', '/api/call/describeCallUserExp', 'json', $req, $runtime));
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
            @$query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->channelId)) {
            @$query['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->createdTs)) {
            @$query['CreatedTs'] = $request->createdTs;
        }
        if (!Utils::isUnset($request->destroyedTs)) {
            @$query['DestroyedTs'] = $request->destroyedTs;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DescribeChannelJoinInfoResponse::fromMap($this->doROARequest('DescribeChannelJoinInfo', '2020-12-14', 'HTTPS', 'POST', 'AK', '/api/channel/describeChannelJoinInfo', 'json', $req, $runtime));
    }

    /**
     * @param DeleteAppFollowCallRuleRequest $request
     *
     * @return DeleteAppFollowCallRuleResponse
     */
    public function deleteAppFollowCallRule($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteAppFollowCallRuleWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DeleteAppFollowCallRuleRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteAppFollowCallRuleResponse
     */
    public function deleteAppFollowCallRuleWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            @$query['AppId'] = $request->appId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DeleteAppFollowCallRuleResponse::fromMap($this->doROARequest('DeleteAppFollowCallRule', '2020-12-14', 'HTTPS', 'POST', 'AK', '/api/config/deleteAppFollowCallRule', 'json', $req, $runtime));
    }

    /**
     * @return DescribeAppExpMetricRuleListResponse
     */
    public function describeAppExpMetricRuleList()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeAppExpMetricRuleListWithOptions($headers, $runtime);
    }

    /**
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeAppExpMetricRuleListResponse
     */
    public function describeAppExpMetricRuleListWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return DescribeAppExpMetricRuleListResponse::fromMap($this->doROARequest('DescribeAppExpMetricRuleList', '2020-12-14', 'HTTPS', 'POST', 'AK', '/api/config/describeAppExpMetricRuleList', 'json', $req, $runtime));
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
            @$query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->channelId)) {
            @$query['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->createdTs)) {
            @$query['CreatedTs'] = $request->createdTs;
        }
        if (!Utils::isUnset($request->destroyedTs)) {
            @$query['DestroyedTs'] = $request->destroyedTs;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DescribeChannelTopPubUserListResponse::fromMap($this->doROARequest('DescribeChannelTopPubUserList', '2020-12-14', 'HTTPS', 'POST', 'AK', '/api/channel/describeChannelTopPubUserList', 'json', $req, $runtime));
    }

    /**
     * @param DescribeAppFollowCallRuleRequest $request
     *
     * @return DescribeAppFollowCallRuleResponse
     */
    public function describeAppFollowCallRule($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeAppFollowCallRuleWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DescribeAppFollowCallRuleRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeAppFollowCallRuleResponse
     */
    public function describeAppFollowCallRuleWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            @$query['AppId'] = $request->appId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DescribeAppFollowCallRuleResponse::fromMap($this->doROARequest('DescribeAppFollowCallRule', '2020-12-14', 'HTTPS', 'POST', 'AK', '/api/config/describeAppFollowCallRule', 'json', $req, $runtime));
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
        if (!Utils::isUnset($request->startDate)) {
            @$query['StartDate'] = $request->startDate;
        }
        if (!Utils::isUnset($request->endDate)) {
            @$query['EndDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->statDim)) {
            @$query['StatDim'] = $request->statDim;
        }
        if (!Utils::isUnset($request->appId)) {
            @$query['AppId'] = $request->appId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DescribeUsageDistributionStatDataResponse::fromMap($this->doROARequest('DescribeUsageDistributionStatData', '2020-12-14', 'HTTPS', 'POST', 'AK', '/api/usage/describeUsageDistributionStatData', 'json', $req, $runtime));
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
        if (!Utils::isUnset($request->startDate)) {
            @$query['StartDate'] = $request->startDate;
        }
        if (!Utils::isUnset($request->endDate)) {
            @$query['EndDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->parentArea)) {
            @$query['ParentArea'] = $request->parentArea;
        }
        if (!Utils::isUnset($request->appId)) {
            @$query['AppId'] = $request->appId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DescribeUsageAreaDistributionStatDataResponse::fromMap($this->doROARequest('DescribeUsageAreaDistributionStatData', '2020-12-14', 'HTTPS', 'POST', 'AK', '/api/usage/describeUsageAreaDistributionStatData', 'json', $req, $runtime));
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
            @$query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->channelId)) {
            @$query['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->createdTs)) {
            @$query['CreatedTs'] = $request->createdTs;
        }
        if (!Utils::isUnset($request->destroyedTs)) {
            @$query['DestroyedTs'] = $request->destroyedTs;
        }
        if (!Utils::isUnset($request->subUserId)) {
            @$query['SubUserId'] = $request->subUserId;
        }
        if (!Utils::isUnset($request->pubUserId)) {
            @$query['PubUserId'] = $request->pubUserId;
        }
        if (!Utils::isUnset($request->pubCallIdList)) {
            @$query['PubCallIdList'] = $request->pubCallIdList;
        }
        if (!Utils::isUnset($request->metrics)) {
            @$query['Metrics'] = $request->metrics;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DescribeEndPointMetricDataResponse::fromMap($this->doROARequest('DescribeEndPointMetricData', '2020-12-14', 'HTTPS', 'POST', 'AK', '/api/call/describeEndPointMetricData', 'json', $req, $runtime));
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
            @$query['AppId'] = $request->appId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DescribeAppConfigResponse::fromMap($this->doROARequest('DescribeAppConfig', '2020-12-14', 'HTTPS', 'POST', 'AK', '/api/config/describeAppConfig', 'json', $req, $runtime));
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
        if (!Utils::isUnset($request->startDate)) {
            @$query['StartDate'] = $request->startDate;
        }
        if (!Utils::isUnset($request->endDate)) {
            @$query['EndDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->types)) {
            @$query['Types'] = $request->types;
        }
        if (!Utils::isUnset($request->appId)) {
            @$query['AppId'] = $request->appId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DescribeUsageOverallDataResponse::fromMap($this->doROARequest('DescribeUsageOverallData', '2020-12-14', 'HTTPS', 'POST', 'AK', '/api/usage/describeUsageOverallData', 'json', $req, $runtime));
    }

    /**
     * @param UpdateAppExpMetricRuleRequest $request
     *
     * @return UpdateAppExpMetricRuleResponse
     */
    public function updateAppExpMetricRule($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateAppExpMetricRuleWithOptions($request, $headers, $runtime);
    }

    /**
     * @param UpdateAppExpMetricRuleRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateAppExpMetricRuleResponse
     */
    public function updateAppExpMetricRuleWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->rule)) {
            @$query['Rule'] = $request->rule;
        }
        if (!Utils::isUnset($request->appId)) {
            @$query['AppId'] = $request->appId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return UpdateAppExpMetricRuleResponse::fromMap($this->doROARequest('UpdateAppExpMetricRule', '2020-12-14', 'HTTPS', 'POST', 'AK', '/api/config/updateAppExpMetricRule', 'json', $req, $runtime));
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
            @$query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->channelId)) {
            @$query['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->createdTs)) {
            @$query['CreatedTs'] = $request->createdTs;
        }
        if (!Utils::isUnset($request->userId)) {
            @$query['UserId'] = $request->userId;
        }
        if (!Utils::isUnset($request->faultType)) {
            @$query['FaultType'] = $request->faultType;
        }
        if (!Utils::isUnset($request->queryCallUserInfo)) {
            @$query['QueryCallUserInfo'] = $request->queryCallUserInfo;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DescribeFaultDiagnosisUserDetailResponse::fromMap($this->doROARequest('DescribeFaultDiagnosisUserDetail', '2020-12-14', 'HTTPS', 'POST', 'AK', '/api/diagnosis/describeFaultDiagnosisUserDetail', 'json', $req, $runtime));
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
            @$query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->channelId)) {
            @$query['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->createdTs)) {
            @$query['CreatedTs'] = $request->createdTs;
        }
        if (!Utils::isUnset($request->destroyedTs)) {
            @$query['DestroyedTs'] = $request->destroyedTs;
        }
        if (!Utils::isUnset($request->statDim)) {
            @$query['StatDim'] = $request->statDim;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DescribeChannelDistributionStatDataResponse::fromMap($this->doROARequest('DescribeChannelDistributionStatData', '2020-12-14', 'HTTPS', 'POST', 'AK', '/api/channel/describeChannelDistributionStatData', 'json', $req, $runtime));
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
            @$query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->channelId)) {
            @$query['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->createdTs)) {
            @$query['CreatedTs'] = $request->createdTs;
        }
        if (!Utils::isUnset($request->destroyedTs)) {
            @$query['DestroyedTs'] = $request->destroyedTs;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DescribeChannelUserMetricsResponse::fromMap($this->doROARequest('DescribeChannelUserMetrics', '2020-12-14', 'HTTPS', 'POST', 'AK', '/api/channel/describeChannelUserMetrics', 'json', $req, $runtime));
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
            @$query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->startTs)) {
            @$query['StartTs'] = $request->startTs;
        }
        if (!Utils::isUnset($request->endTs)) {
            @$query['EndTs'] = $request->endTs;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DescribeFaultDiagnosisFactorDistributionStatResponse::fromMap($this->doROARequest('DescribeFaultDiagnosisFactorDistributionStat', '2020-12-14', 'HTTPS', 'POST', 'AK', '/api/diagnosis/describeFaultDiagnosisFactorDistributionStat', 'json', $req, $runtime));
    }

    /**
     * @param DescribeRtcChannelListRequest $request
     *
     * @return DescribeRtcChannelListResponse
     */
    public function describeRtcChannelList($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeRtcChannelListWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DescribeRtcChannelListRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeRtcChannelListResponse
     */
    public function describeRtcChannelListWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            @$query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->startTime)) {
            @$query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->endTime)) {
            @$query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->channelId)) {
            @$query['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->pageNo)) {
            @$query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            @$query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DescribeRtcChannelListResponse::fromMap($this->doROARequest('DescribeRtcChannelList', '2020-12-14', 'HTTPS', 'POST', 'AK', '/api/channel/describeRtcChannelList', 'json', $req, $runtime));
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
            @$query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->startTs)) {
            @$query['StartTs'] = $request->startTs;
        }
        if (!Utils::isUnset($request->endTs)) {
            @$query['EndTs'] = $request->endTs;
        }
        if (!Utils::isUnset($request->channelId)) {
            @$query['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->userId)) {
            @$query['UserId'] = $request->userId;
        }
        if (!Utils::isUnset($request->faultTypes)) {
            @$query['FaultTypes'] = $request->faultTypes;
        }
        if (!Utils::isUnset($request->pageNo)) {
            @$query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            @$query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DescribeFaultDiagnosisUserListResponse::fromMap($this->doROARequest('DescribeFaultDiagnosisUserList', '2020-12-14', 'HTTPS', 'POST', 'AK', '/api/diagnosis/describeFaultDiagnosisUserList', 'json', $req, $runtime));
    }

    /**
     * @param DescribeRtcChannelMetricListRequest $request
     *
     * @return DescribeRtcChannelMetricListResponse
     */
    public function describeRtcChannelMetricList($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeRtcChannelMetricListWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DescribeRtcChannelMetricListRequest $request
     * @param string[]                            $headers
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeRtcChannelMetricListResponse
     */
    public function describeRtcChannelMetricListWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            @$query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->channelId)) {
            @$query['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->pubUid)) {
            @$query['PubUid'] = $request->pubUid;
        }
        if (!Utils::isUnset($request->subUid)) {
            @$query['SubUid'] = $request->subUid;
        }
        if (!Utils::isUnset($request->startTime)) {
            @$query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->endTime)) {
            @$query['EndTime'] = $request->endTime;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DescribeRtcChannelMetricListResponse::fromMap($this->doROARequest('DescribeRtcChannelMetricList', '2020-12-14', 'HTTPS', 'POST', 'AK', '/api/call/describeRtcChannelMetricList', 'json', $req, $runtime));
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
            @$query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->channelId)) {
            @$query['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->createdTs)) {
            @$query['CreatedTs'] = $request->createdTs;
        }
        if (!Utils::isUnset($request->destroyedTs)) {
            @$query['DestroyedTs'] = $request->destroyedTs;
        }
        if (!Utils::isUnset($request->userId)) {
            @$query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DescribeQoeMetricDataResponse::fromMap($this->doROARequest('DescribeQoeMetricData', '2020-12-14', 'HTTPS', 'POST', 'AK', '/api/call/describeQoeMetricData', 'json', $req, $runtime));
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
            @$query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->channelId)) {
            @$query['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->createdTs)) {
            @$query['CreatedTs'] = $request->createdTs;
        }
        if (!Utils::isUnset($request->destroyedTs)) {
            @$query['DestroyedTs'] = $request->destroyedTs;
        }
        if (!Utils::isUnset($request->subUserId)) {
            @$query['SubUserId'] = $request->subUserId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DescribePubUserListBySubUserResponse::fromMap($this->doROARequest('DescribePubUserListBySubUser', '2020-12-14', 'HTTPS', 'POST', 'AK', '/api/call/describePubUserListBySubUser', 'json', $req, $runtime));
    }

    /**
     * @param UpdateAppFollowCallRuleRequest $request
     *
     * @return UpdateAppFollowCallRuleResponse
     */
    public function updateAppFollowCallRule($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateAppFollowCallRuleWithOptions($request, $headers, $runtime);
    }

    /**
     * @param UpdateAppFollowCallRuleRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return UpdateAppFollowCallRuleResponse
     */
    public function updateAppFollowCallRuleWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->rule)) {
            @$query['Rule'] = $request->rule;
        }
        if (!Utils::isUnset($request->appId)) {
            @$query['AppId'] = $request->appId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return UpdateAppFollowCallRuleResponse::fromMap($this->doROARequest('UpdateAppFollowCallRule', '2020-12-14', 'HTTPS', 'POST', 'AK', '/api/config/updateAppFollowCallRule', 'json', $req, $runtime));
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
        if (!Utils::isUnset($request->startDate)) {
            @$query['StartDate'] = $request->startDate;
        }
        if (!Utils::isUnset($request->endDate)) {
            @$query['EndDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->appId)) {
            @$query['AppId'] = $request->appId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DescribeQualityOsSdkVersionDistributionStatDataResponse::fromMap($this->doROARequest('DescribeQualityOsSdkVersionDistributionStatData', '2020-12-14', 'HTTPS', 'POST', 'AK', '/api/quality/describeQualityOsSdkVersionDistributionStatData', 'json', $req, $runtime));
    }

    /**
     * @param DescribeRtcRecordMetricDataRequest $request
     *
     * @return DescribeRtcRecordMetricDataResponse
     */
    public function describeRtcRecordMetricData($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeRtcRecordMetricDataWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DescribeRtcRecordMetricDataRequest $request
     * @param string[]                           $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeRtcRecordMetricDataResponse
     */
    public function describeRtcRecordMetricDataWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->startTime)) {
            @$query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->endTime)) {
            @$query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->serviceArea)) {
            @$query['ServiceArea'] = $request->serviceArea;
        }
        if (!Utils::isUnset($request->appId)) {
            @$query['AppId'] = $request->appId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DescribeRtcRecordMetricDataResponse::fromMap($this->doROARequest('DescribeRtcRecordMetricData', '2020-12-14', 'HTTPS', 'POST', 'AK', '/api/record/describeRtcRecordMetricData', 'json', $req, $runtime));
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
        if (!Utils::isUnset($request->startDate)) {
            @$query['StartDate'] = $request->startDate;
        }
        if (!Utils::isUnset($request->endDate)) {
            @$query['EndDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->types)) {
            @$query['Types'] = $request->types;
        }
        if (!Utils::isUnset($request->appId)) {
            @$query['AppId'] = $request->appId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DescribeQualityOverallDataResponse::fromMap($this->doROARequest('DescribeQualityOverallData', '2020-12-14', 'HTTPS', 'POST', 'AK', '/api/quality/describeQualityOverallData', 'json', $req, $runtime));
    }
}
