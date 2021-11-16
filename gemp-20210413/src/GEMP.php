<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\GEMP\V20210413\Models\AddProblemServiceGroupRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\AddProblemServiceGroupResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\CancelProblemRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\CancelProblemResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\CheckWebhookRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\CheckWebhookResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ConfirmIntegrationConfigRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ConfirmIntegrationConfigResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\CreateEscalationPlanRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\CreateEscalationPlanResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\CreateIncidentRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\CreateIncidentResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\CreateIncidentSubtotalRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\CreateIncidentSubtotalResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\CreateIntegrationConfigRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\CreateIntegrationConfigResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\CreateProblemEffectionServiceRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\CreateProblemEffectionServiceResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\CreateProblemMeasureRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\CreateProblemMeasureResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\CreateProblemRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\CreateProblemResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\CreateProblemSubtotalRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\CreateProblemSubtotalResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\CreateProblemTimelineRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\CreateProblemTimelineResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\CreateProblemTimelinesRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\CreateProblemTimelinesResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\CreateRouteRuleRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\CreateRouteRuleResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\CreateServiceGroupRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\CreateServiceGroupResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\CreateServiceGroupSchedulingRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\CreateServiceGroupSchedulingResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\CreateServiceRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\CreateServiceResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\CreateSubscriptionRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\CreateSubscriptionResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\CreateTenantApplicationRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\CreateTenantApplicationResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\CreateUserRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\CreateUserResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\DeleteEscalationPlanRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\DeleteEscalationPlanResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\DeleteIncidentRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\DeleteIncidentResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\DeleteIntegrationConfigRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\DeleteIntegrationConfigResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\DeleteProblemEffectionServiceRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\DeleteProblemEffectionServiceResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\DeleteProblemMeasureRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\DeleteProblemMeasureResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\DeleteProblemRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\DeleteProblemResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\DeleteProblemTimelineRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\DeleteProblemTimelineResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\DeleteRouteRuleRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\DeleteRouteRuleResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\DeleteServiceGroupRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\DeleteServiceGroupResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\DeleteServiceGroupUserRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\DeleteServiceGroupUserResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\DeleteServiceRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\DeleteServiceResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\DeleteSubscriptionRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\DeleteSubscriptionResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\DeleteUserRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\DeleteUserResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\DeliverIncidentRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\DeliverIncidentResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\DisableEscalationPlanRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\DisableEscalationPlanResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\DisableIntegrationConfigRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\DisableIntegrationConfigResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\DisableRouteRuleRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\DisableRouteRuleResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\DisableServiceGroupWebhookRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\DisableServiceGroupWebhookResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\DisableSubscriptionRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\DisableSubscriptionResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\EnableEscalationPlanRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\EnableEscalationPlanResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\EnableIntegrationConfigRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\EnableIntegrationConfigResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\EnableRouteRuleRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\EnableRouteRuleResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\EnableServiceGroupWebhookRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\EnableServiceGroupWebhookResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\EnableSubscriptionRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\EnableSubscriptionResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\FinishIncidentRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\FinishIncidentResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\FinishProblemRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\FinishProblemResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\GenerateProblemPictureLinkRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\GenerateProblemPictureLinkResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\GenerateProblemPictureUploadSignRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\GenerateProblemPictureUploadSignResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\GetEscalationPlanRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\GetEscalationPlanResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\GetEventRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\GetEventResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\GetHomePageGuidanceRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\GetHomePageGuidanceResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\GetIncidentRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\GetIncidentResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\GetIncidentStatisticsRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\GetIncidentStatisticsResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\GetIncidentSubtotalCountRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\GetIncidentSubtotalCountResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\GetIntegrationConfigRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\GetIntegrationConfigResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\GetProblemEffectionServiceRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\GetProblemEffectionServiceResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\GetProblemImprovementRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\GetProblemImprovementResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\GetProblemPreviewRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\GetProblemPreviewResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\GetProblemRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\GetProblemResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\GetResourceStatisticsRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\GetResourceStatisticsResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\GetRouteRuleRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\GetRouteRuleResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\GetServiceGroupPersonSchedulingRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\GetServiceGroupPersonSchedulingResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\GetServiceGroupRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\GetServiceGroupResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\GetServiceGroupSchedulingPreviewRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\GetServiceGroupSchedulingPreviewResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\GetServiceGroupSchedulingRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\GetServiceGroupSchedulingResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\GetServiceGroupSpecialPersonSchedulingRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\GetServiceGroupSpecialPersonSchedulingResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\GetServiceRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\GetServiceResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\GetSimilarIncidentStatisticsRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\GetSimilarIncidentStatisticsResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\GetSubscriptionRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\GetSubscriptionResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\GetTenantApplicationRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\GetTenantApplicationResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\GetUserGuideStatusRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\GetUserGuideStatusResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\GetUserRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\GetUserResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListAlertsRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListAlertsResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListChartDataForServiceGroupRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListChartDataForServiceGroupResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListChartDataForUserRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListChartDataForUserResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListConfigsRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListConfigsResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListDataReportForServiceGroupRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListDataReportForServiceGroupResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListDataReportForUserRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListDataReportForUserResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListDictionariesRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListDictionariesResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListEscalationPlanServicesRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListEscalationPlanServicesResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListEscalationPlansRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListEscalationPlansResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListIncidentDetailEscalationPlansRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListIncidentDetailEscalationPlansResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListIncidentDetailTimelinesRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListIncidentDetailTimelinesResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListIncidentsRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListIncidentsResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListIncidentSubtotalsRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListIncidentSubtotalsResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListIncidentTimelinesRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListIncidentTimelinesResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListIntegrationConfigsRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListIntegrationConfigsResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListIntegrationConfigTimelinesRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListIntegrationConfigTimelinesResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListMonitorSourcesRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListMonitorSourcesResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListProblemDetailOperationsRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListProblemDetailOperationsResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListProblemOperationsRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListProblemOperationsResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListProblemsRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListProblemsResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListProblemSubtotalsRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListProblemSubtotalsResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListProblemTimeLinesRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListProblemTimeLinesResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListRouteRulesRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListRouteRulesResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListServiceGroupsRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListServiceGroupsResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListServicesRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListServicesResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListSourceEventsForMonitorSourceRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListSourceEventsForMonitorSourceResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListSourceEventsRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListSourceEventsResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListSubscriptionServiceGroupsRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListSubscriptionServiceGroupsResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListSubscriptionsRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListSubscriptionsResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListUserSerivceGroupsRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListUserSerivceGroupsResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListUsersRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListUsersResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\RecoverProblemRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\RecoverProblemResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\RefreshIntegrationConfigKeyRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\RefreshIntegrationConfigKeyResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\RemoveProblemServiceGroupRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\RemoveProblemServiceGroupResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ReplayProblemRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ReplayProblemResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\RespondIncidentRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\RespondIncidentResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\RevokeProblemRecoveryRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\RevokeProblemRecoveryResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\UpdateEscalationPlanRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\UpdateEscalationPlanResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\UpdateIncidentRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\UpdateIncidentResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\UpdateIntegrationConfigRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\UpdateIntegrationConfigResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\UpdateProblemEffectionServiceRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\UpdateProblemEffectionServiceResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\UpdateProblemImprovementRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\UpdateProblemImprovementResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\UpdateProblemMeasureRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\UpdateProblemMeasureResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\UpdateProblemNoticeRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\UpdateProblemNoticeResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\UpdateProblemRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\UpdateProblemResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\UpdateProblemTimelineRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\UpdateProblemTimelineResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\UpdateRouteRuleRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\UpdateRouteRuleResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\UpdateServiceGroupRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\UpdateServiceGroupResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\UpdateServiceGroupSchedulingRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\UpdateServiceGroupSchedulingResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\UpdateServiceGroupSpecialDaySchedulingRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\UpdateServiceGroupSpecialDaySchedulingResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\UpdateServiceRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\UpdateServiceResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\UpdateSubscriptionRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\UpdateSubscriptionResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\UpdateUserGuideStatusRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\UpdateUserGuideStatusResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\UpdateUserRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\UpdateUserResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

class GEMP extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('gemp', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param AddProblemServiceGroupRequest $request
     *
     * @return AddProblemServiceGroupResponse
     */
    public function addProblemServiceGroup($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->addProblemServiceGroupWithOptions($request, $headers, $runtime);
    }

    /**
     * @param AddProblemServiceGroupRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return AddProblemServiceGroupResponse
     */
    public function addProblemServiceGroupWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->problemId)) {
            @$body['problemId'] = $request->problemId;
        }
        if (!Utils::isUnset($request->serviceGroupIds)) {
            @$body['serviceGroupIds'] = $request->serviceGroupIds;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return AddProblemServiceGroupResponse::fromMap($this->doROARequest('AddProblemServiceGroup', '2021-04-13', 'HTTPS', 'POST', 'AK', '/problem/addServiceGroup', 'json', $req, $runtime));
    }

    /**
     * @param CancelProblemRequest $request
     *
     * @return CancelProblemResponse
     */
    public function cancelProblem($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->cancelProblemWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CancelProblemRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return CancelProblemResponse
     */
    public function cancelProblemWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->cancelReason)) {
            @$body['cancelReason'] = $request->cancelReason;
        }
        if (!Utils::isUnset($request->cancelReasonDescription)) {
            @$body['cancelReasonDescription'] = $request->cancelReasonDescription;
        }
        if (!Utils::isUnset($request->clientToken)) {
            @$body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->problemId)) {
            @$body['problemId'] = $request->problemId;
        }
        if (!Utils::isUnset($request->problemNotifyType)) {
            @$body['problemNotifyType'] = $request->problemNotifyType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return CancelProblemResponse::fromMap($this->doROARequest('CancelProblem', '2021-04-13', 'HTTPS', 'POST', 'AK', '/problem/cancel', 'json', $req, $runtime));
    }

    /**
     * @param CheckWebhookRequest $request
     *
     * @return CheckWebhookResponse
     */
    public function checkWebhook($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->checkWebhookWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CheckWebhookRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return CheckWebhookResponse
     */
    public function checkWebhookWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            @$body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->webhook)) {
            @$body['webhook'] = $request->webhook;
        }
        if (!Utils::isUnset($request->webhookType)) {
            @$body['webhookType'] = $request->webhookType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return CheckWebhookResponse::fromMap($this->doROARequest('CheckWebhook', '2021-04-13', 'HTTPS', 'POST', 'AK', '/services/check/webhook', 'json', $req, $runtime));
    }

    /**
     * @param ConfirmIntegrationConfigRequest $request
     *
     * @return ConfirmIntegrationConfigResponse
     */
    public function confirmIntegrationConfig($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->confirmIntegrationConfigWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ConfirmIntegrationConfigRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return ConfirmIntegrationConfigResponse
     */
    public function confirmIntegrationConfigWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            @$body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->integrationConfigId)) {
            @$body['integrationConfigId'] = $request->integrationConfigId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return ConfirmIntegrationConfigResponse::fromMap($this->doROARequest('ConfirmIntegrationConfig', '2021-04-13', 'HTTPS', 'POST', 'AK', '/integrationConfig/confirm', 'json', $req, $runtime));
    }

    /**
     * @param CreateEscalationPlanRequest $request
     *
     * @return CreateEscalationPlanResponse
     */
    public function createEscalationPlan($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createEscalationPlanWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateEscalationPlanRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return CreateEscalationPlanResponse
     */
    public function createEscalationPlanWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            @$body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->escalationPlanDescription)) {
            @$body['escalationPlanDescription'] = $request->escalationPlanDescription;
        }
        if (!Utils::isUnset($request->escalationPlanName)) {
            @$body['escalationPlanName'] = $request->escalationPlanName;
        }
        if (!Utils::isUnset($request->escalationPlanRules)) {
            @$body['escalationPlanRules'] = $request->escalationPlanRules;
        }
        if (!Utils::isUnset($request->escalationPlanScopeObjects)) {
            @$body['escalationPlanScopeObjects'] = $request->escalationPlanScopeObjects;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return CreateEscalationPlanResponse::fromMap($this->doROARequest('CreateEscalationPlan', '2021-04-13', 'HTTPS', 'POST', 'AK', '/escalationPlan/create', 'json', $req, $runtime));
    }

    /**
     * @param CreateIncidentRequest $request
     *
     * @return CreateIncidentResponse
     */
    public function createIncident($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createIncidentWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateIncidentRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return CreateIncidentResponse
     */
    public function createIncidentWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->assignUserId)) {
            @$body['assignUserId'] = $request->assignUserId;
        }
        if (!Utils::isUnset($request->channels)) {
            @$body['channels'] = $request->channels;
        }
        if (!Utils::isUnset($request->clientToken)) {
            @$body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->effect)) {
            @$body['effect'] = $request->effect;
        }
        if (!Utils::isUnset($request->incidentDescription)) {
            @$body['incidentDescription'] = $request->incidentDescription;
        }
        if (!Utils::isUnset($request->incidentLevel)) {
            @$body['incidentLevel'] = $request->incidentLevel;
        }
        if (!Utils::isUnset($request->incidentTitle)) {
            @$body['incidentTitle'] = $request->incidentTitle;
        }
        if (!Utils::isUnset($request->relatedServiceId)) {
            @$body['relatedServiceId'] = $request->relatedServiceId;
        }
        if (!Utils::isUnset($request->serviceGroupId)) {
            @$body['serviceGroupId'] = $request->serviceGroupId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return CreateIncidentResponse::fromMap($this->doROARequest('CreateIncident', '2021-04-13', 'HTTPS', 'POST', 'AK', '/incident/manualSave', 'json', $req, $runtime));
    }

    /**
     * @param CreateIncidentSubtotalRequest $request
     *
     * @return CreateIncidentSubtotalResponse
     */
    public function createIncidentSubtotal($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createIncidentSubtotalWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateIncidentSubtotalRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return CreateIncidentSubtotalResponse
     */
    public function createIncidentSubtotalWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            @$body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            @$body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->incidentId)) {
            @$body['incidentId'] = $request->incidentId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return CreateIncidentSubtotalResponse::fromMap($this->doROARequest('CreateIncidentSubtotal', '2021-04-13', 'HTTPS', 'POST', 'AK', '/incident/save/subtotal', 'json', $req, $runtime));
    }

    /**
     * @param CreateIntegrationConfigRequest $request
     *
     * @return CreateIntegrationConfigResponse
     */
    public function createIntegrationConfig($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createIntegrationConfigWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateIntegrationConfigRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateIntegrationConfigResponse
     */
    public function createIntegrationConfigWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            @$body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->monitorSourceId)) {
            @$body['monitorSourceId'] = $request->monitorSourceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return CreateIntegrationConfigResponse::fromMap($this->doROARequest('CreateIntegrationConfig', '2021-04-13', 'HTTPS', 'POST', 'AK', '/integrationConfig/create', 'json', $req, $runtime));
    }

    /**
     * @param CreateProblemRequest $request
     *
     * @return CreateProblemResponse
     */
    public function createProblem($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createProblemWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateProblemRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return CreateProblemResponse
     */
    public function createProblemWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->affectServiceIds)) {
            @$body['affectServiceIds'] = $request->affectServiceIds;
        }
        if (!Utils::isUnset($request->clientToken)) {
            @$body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->discoverTime)) {
            @$body['discoverTime'] = $request->discoverTime;
        }
        if (!Utils::isUnset($request->incidentId)) {
            @$body['incidentId'] = $request->incidentId;
        }
        if (!Utils::isUnset($request->mainHandlerId)) {
            @$body['mainHandlerId'] = $request->mainHandlerId;
        }
        if (!Utils::isUnset($request->preliminaryReason)) {
            @$body['preliminaryReason'] = $request->preliminaryReason;
        }
        if (!Utils::isUnset($request->problemLevel)) {
            @$body['problemLevel'] = $request->problemLevel;
        }
        if (!Utils::isUnset($request->problemName)) {
            @$body['problemName'] = $request->problemName;
        }
        if (!Utils::isUnset($request->problemNotifyType)) {
            @$body['problemNotifyType'] = $request->problemNotifyType;
        }
        if (!Utils::isUnset($request->problemStatus)) {
            @$body['problemStatus'] = $request->problemStatus;
        }
        if (!Utils::isUnset($request->progressSummary)) {
            @$body['progressSummary'] = $request->progressSummary;
        }
        if (!Utils::isUnset($request->recoveryTime)) {
            @$body['recoveryTime'] = $request->recoveryTime;
        }
        if (!Utils::isUnset($request->relatedServiceId)) {
            @$body['relatedServiceId'] = $request->relatedServiceId;
        }
        if (!Utils::isUnset($request->serviceGroupIds)) {
            @$body['serviceGroupIds'] = $request->serviceGroupIds;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return CreateProblemResponse::fromMap($this->doROARequest('CreateProblem', '2021-04-13', 'HTTPS', 'POST', 'AK', '/problem/upgrade', 'json', $req, $runtime));
    }

    /**
     * @param CreateProblemEffectionServiceRequest $request
     *
     * @return CreateProblemEffectionServiceResponse
     */
    public function createProblemEffectionService($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createProblemEffectionServiceWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateProblemEffectionServiceRequest $request
     * @param string[]                             $headers
     * @param RuntimeOptions                       $runtime
     *
     * @return CreateProblemEffectionServiceResponse
     */
    public function createProblemEffectionServiceWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            @$body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            @$body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->level)) {
            @$body['level'] = $request->level;
        }
        if (!Utils::isUnset($request->pictureUrl)) {
            @$body['pictureUrl'] = $request->pictureUrl;
        }
        if (!Utils::isUnset($request->problemId)) {
            @$body['problemId'] = $request->problemId;
        }
        if (!Utils::isUnset($request->serviceId)) {
            @$body['serviceId'] = $request->serviceId;
        }
        if (!Utils::isUnset($request->status)) {
            @$body['status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return CreateProblemEffectionServiceResponse::fromMap($this->doROARequest('CreateProblemEffectionService', '2021-04-13', 'HTTPS', 'POST', 'AK', '/problem/process/effectionService/create', 'json', $req, $runtime));
    }

    /**
     * @param CreateProblemMeasureRequest $request
     *
     * @return CreateProblemMeasureResponse
     */
    public function createProblemMeasure($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createProblemMeasureWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateProblemMeasureRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return CreateProblemMeasureResponse
     */
    public function createProblemMeasureWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->checkStandard)) {
            @$body['checkStandard'] = $request->checkStandard;
        }
        if (!Utils::isUnset($request->checkUserId)) {
            @$body['checkUserId'] = $request->checkUserId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            @$body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->content)) {
            @$body['content'] = $request->content;
        }
        if (!Utils::isUnset($request->directorId)) {
            @$body['directorId'] = $request->directorId;
        }
        if (!Utils::isUnset($request->planFinishTime)) {
            @$body['planFinishTime'] = $request->planFinishTime;
        }
        if (!Utils::isUnset($request->problemId)) {
            @$body['problemId'] = $request->problemId;
        }
        if (!Utils::isUnset($request->stalkerId)) {
            @$body['stalkerId'] = $request->stalkerId;
        }
        if (!Utils::isUnset($request->status)) {
            @$body['status'] = $request->status;
        }
        if (!Utils::isUnset($request->type)) {
            @$body['type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return CreateProblemMeasureResponse::fromMap($this->doROARequest('CreateProblemMeasure', '2021-04-13', 'HTTPS', 'POST', 'AK', '/problem/improvement/measure/save', 'json', $req, $runtime));
    }

    /**
     * @param CreateProblemSubtotalRequest $request
     *
     * @return CreateProblemSubtotalResponse
     */
    public function createProblemSubtotal($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createProblemSubtotalWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateProblemSubtotalRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return CreateProblemSubtotalResponse
     */
    public function createProblemSubtotalWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            @$body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            @$body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->problemId)) {
            @$body['problemId'] = $request->problemId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return CreateProblemSubtotalResponse::fromMap($this->doROARequest('CreateProblemSubtotal', '2021-04-13', 'HTTPS', 'POST', 'AK', '/problem/save/subtotal', 'json', $req, $runtime));
    }

    /**
     * @param CreateProblemTimelineRequest $request
     *
     * @return CreateProblemTimelineResponse
     */
    public function createProblemTimeline($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createProblemTimelineWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateProblemTimelineRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return CreateProblemTimelineResponse
     */
    public function createProblemTimelineWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            @$body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->content)) {
            @$body['content'] = $request->content;
        }
        if (!Utils::isUnset($request->keyNode)) {
            @$body['keyNode'] = $request->keyNode;
        }
        if (!Utils::isUnset($request->problemId)) {
            @$body['problemId'] = $request->problemId;
        }
        if (!Utils::isUnset($request->time)) {
            @$body['time'] = $request->time;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return CreateProblemTimelineResponse::fromMap($this->doROARequest('CreateProblemTimeline', '2021-04-13', 'HTTPS', 'POST', 'AK', '/problem/process/timeline/create', 'json', $req, $runtime));
    }

    /**
     * @param CreateProblemTimelinesRequest $request
     *
     * @return CreateProblemTimelinesResponse
     */
    public function createProblemTimelines($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createProblemTimelinesWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateProblemTimelinesRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return CreateProblemTimelinesResponse
     */
    public function createProblemTimelinesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            @$body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->problemId)) {
            @$body['problemId'] = $request->problemId;
        }
        if (!Utils::isUnset($request->timelineNodes)) {
            @$body['timelineNodes'] = $request->timelineNodes;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return CreateProblemTimelinesResponse::fromMap($this->doROARequest('CreateProblemTimelines', '2021-04-13', 'HTTPS', 'POST', 'AK', '/problem/process/timeline/batchCreate', 'json', $req, $runtime));
    }

    /**
     * @param CreateRouteRuleRequest $request
     *
     * @return CreateRouteRuleResponse
     */
    public function createRouteRule($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createRouteRuleWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateRouteRuleRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return CreateRouteRuleResponse
     */
    public function createRouteRuleWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->assignObjectId)) {
            @$body['assignObjectId'] = $request->assignObjectId;
        }
        if (!Utils::isUnset($request->assignObjectType)) {
            @$body['assignObjectType'] = $request->assignObjectType;
        }
        if (!Utils::isUnset($request->clientToken)) {
            @$body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->effection)) {
            @$body['effection'] = $request->effection;
        }
        if (!Utils::isUnset($request->enableStatus)) {
            @$body['enableStatus'] = $request->enableStatus;
        }
        if (!Utils::isUnset($request->incidentLevel)) {
            @$body['incidentLevel'] = $request->incidentLevel;
        }
        if (!Utils::isUnset($request->matchCount)) {
            @$body['matchCount'] = $request->matchCount;
        }
        if (!Utils::isUnset($request->notifyChannels)) {
            @$body['notifyChannels'] = $request->notifyChannels;
        }
        if (!Utils::isUnset($request->relatedServiceId)) {
            @$body['relatedServiceId'] = $request->relatedServiceId;
        }
        if (!Utils::isUnset($request->routeChildRules)) {
            @$body['routeChildRules'] = $request->routeChildRules;
        }
        if (!Utils::isUnset($request->routeType)) {
            @$body['routeType'] = $request->routeType;
        }
        if (!Utils::isUnset($request->ruleName)) {
            @$body['ruleName'] = $request->ruleName;
        }
        if (!Utils::isUnset($request->timeWindow)) {
            @$body['timeWindow'] = $request->timeWindow;
        }
        if (!Utils::isUnset($request->timeWindowUnit)) {
            @$body['timeWindowUnit'] = $request->timeWindowUnit;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return CreateRouteRuleResponse::fromMap($this->doROARequest('CreateRouteRule', '2021-04-13', 'HTTPS', 'POST', 'AK', '/routeRule/save', 'json', $req, $runtime));
    }

    /**
     * @param CreateServiceRequest $request
     *
     * @return CreateServiceResponse
     */
    public function createService($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createServiceWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateServiceRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return CreateServiceResponse
     */
    public function createServiceWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            @$body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->serviceDescription)) {
            @$body['serviceDescription'] = $request->serviceDescription;
        }
        if (!Utils::isUnset($request->serviceName)) {
            @$body['serviceName'] = $request->serviceName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return CreateServiceResponse::fromMap($this->doROARequest('CreateService', '2021-04-13', 'HTTPS', 'POST', 'AK', '/services/save', 'json', $req, $runtime));
    }

    /**
     * @param CreateServiceGroupRequest $request
     *
     * @return CreateServiceGroupResponse
     */
    public function createServiceGroup($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createServiceGroupWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateServiceGroupRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return CreateServiceGroupResponse
     */
    public function createServiceGroupWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            @$body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->enableWebhook)) {
            @$body['enableWebhook'] = $request->enableWebhook;
        }
        if (!Utils::isUnset($request->serviceGroupDescription)) {
            @$body['serviceGroupDescription'] = $request->serviceGroupDescription;
        }
        if (!Utils::isUnset($request->serviceGroupName)) {
            @$body['serviceGroupName'] = $request->serviceGroupName;
        }
        if (!Utils::isUnset($request->userIds)) {
            @$body['userIds'] = $request->userIds;
        }
        if (!Utils::isUnset($request->webhookLink)) {
            @$body['webhookLink'] = $request->webhookLink;
        }
        if (!Utils::isUnset($request->webhookType)) {
            @$body['webhookType'] = $request->webhookType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return CreateServiceGroupResponse::fromMap($this->doROARequest('CreateServiceGroup', '2021-04-13', 'HTTPS', 'POST', 'AK', '/services/group/insert', 'json', $req, $runtime));
    }

    /**
     * @param CreateServiceGroupSchedulingRequest $request
     *
     * @return CreateServiceGroupSchedulingResponse
     */
    public function createServiceGroupScheduling($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createServiceGroupSchedulingWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateServiceGroupSchedulingRequest $request
     * @param string[]                            $headers
     * @param RuntimeOptions                      $runtime
     *
     * @return CreateServiceGroupSchedulingResponse
     */
    public function createServiceGroupSchedulingWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            @$body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->fastScheduling)) {
            @$body['fastScheduling'] = $request->fastScheduling;
        }
        if (!Utils::isUnset($request->fineScheduling)) {
            @$body['fineScheduling'] = $request->fineScheduling;
        }
        if (!Utils::isUnset($request->schedulingWay)) {
            @$body['schedulingWay'] = $request->schedulingWay;
        }
        if (!Utils::isUnset($request->serviceGroupId)) {
            @$body['serviceGroupId'] = $request->serviceGroupId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return CreateServiceGroupSchedulingResponse::fromMap($this->doROARequest('CreateServiceGroupScheduling', '2021-04-13', 'HTTPS', 'POST', 'AK', '/services/group/scheduling/save', 'json', $req, $runtime));
    }

    /**
     * @param CreateSubscriptionRequest $request
     *
     * @return CreateSubscriptionResponse
     */
    public function createSubscription($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createSubscriptionWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateSubscriptionRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return CreateSubscriptionResponse
     */
    public function createSubscriptionWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            @$body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->endTime)) {
            @$body['endTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->expiredType)) {
            @$body['expiredType'] = $request->expiredType;
        }
        if (!Utils::isUnset($request->notifyObjectList)) {
            @$body['notifyObjectList'] = $request->notifyObjectList;
        }
        if (!Utils::isUnset($request->notifyObjectType)) {
            @$body['notifyObjectType'] = $request->notifyObjectType;
        }
        if (!Utils::isUnset($request->notifyStrategyList)) {
            @$body['notifyStrategyList'] = $request->notifyStrategyList;
        }
        if (!Utils::isUnset($request->period)) {
            @$body['period'] = $request->period;
        }
        if (!Utils::isUnset($request->scope)) {
            @$body['scope'] = $request->scope;
        }
        if (!Utils::isUnset($request->scopeObjectList)) {
            @$body['scopeObjectList'] = $request->scopeObjectList;
        }
        if (!Utils::isUnset($request->startTime)) {
            @$body['startTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->subscriptionTitle)) {
            @$body['subscriptionTitle'] = $request->subscriptionTitle;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return CreateSubscriptionResponse::fromMap($this->doROARequest('CreateSubscription', '2021-04-13', 'HTTPS', 'POST', 'AK', '/notify/subscription/create', 'json', $req, $runtime));
    }

    /**
     * @param CreateTenantApplicationRequest $request
     *
     * @return CreateTenantApplicationResponse
     */
    public function createTenantApplication($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createTenantApplicationWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateTenantApplicationRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateTenantApplicationResponse
     */
    public function createTenantApplicationWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->channel)) {
            @$body['channel'] = $request->channel;
        }
        if (!Utils::isUnset($request->clientToken)) {
            @$body['clientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return CreateTenantApplicationResponse::fromMap($this->doROARequest('CreateTenantApplication', '2021-04-13', 'HTTPS', 'POST', 'AK', '/mobileApp/create', 'json', $req, $runtime));
    }

    /**
     * @param CreateUserRequest $request
     *
     * @return CreateUserResponse
     */
    public function createUser($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createUserWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateUserRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return CreateUserResponse
     */
    public function createUserWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            @$body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->email)) {
            @$body['email'] = $request->email;
        }
        if (!Utils::isUnset($request->phone)) {
            @$body['phone'] = $request->phone;
        }
        if (!Utils::isUnset($request->ramId)) {
            @$body['ramId'] = $request->ramId;
        }
        if (!Utils::isUnset($request->username)) {
            @$body['username'] = $request->username;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return CreateUserResponse::fromMap($this->doROARequest('CreateUser', '2021-04-13', 'HTTPS', 'POST', 'AK', '/user/create', 'json', $req, $runtime));
    }

    /**
     * @param DeleteEscalationPlanRequest $request
     *
     * @return DeleteEscalationPlanResponse
     */
    public function deleteEscalationPlan($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteEscalationPlanWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DeleteEscalationPlanRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteEscalationPlanResponse
     */
    public function deleteEscalationPlanWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            @$body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->escalationPlanId)) {
            @$body['escalationPlanId'] = $request->escalationPlanId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return DeleteEscalationPlanResponse::fromMap($this->doROARequest('DeleteEscalationPlan', '2021-04-13', 'HTTPS', 'POST', 'AK', '/escalationPlan/delete', 'json', $req, $runtime));
    }

    /**
     * @param DeleteIncidentRequest $request
     *
     * @return DeleteIncidentResponse
     */
    public function deleteIncident($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteIncidentWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DeleteIncidentRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteIncidentResponse
     */
    public function deleteIncidentWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            @$body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->incidentId)) {
            @$body['incidentId'] = $request->incidentId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return DeleteIncidentResponse::fromMap($this->doROARequest('DeleteIncident', '2021-04-13', 'HTTPS', 'POST', 'AK', '/incident/delete', 'json', $req, $runtime));
    }

    /**
     * @param DeleteIntegrationConfigRequest $request
     *
     * @return DeleteIntegrationConfigResponse
     */
    public function deleteIntegrationConfig($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteIntegrationConfigWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DeleteIntegrationConfigRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteIntegrationConfigResponse
     */
    public function deleteIntegrationConfigWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            @$body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->integrationConfigId)) {
            @$body['integrationConfigId'] = $request->integrationConfigId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return DeleteIntegrationConfigResponse::fromMap($this->doROARequest('DeleteIntegrationConfig', '2021-04-13', 'HTTPS', 'POST', 'AK', '/integrationConfig/delete', 'json', $req, $runtime));
    }

    /**
     * @param DeleteProblemRequest $request
     *
     * @return DeleteProblemResponse
     */
    public function deleteProblem($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteProblemWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DeleteProblemRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteProblemResponse
     */
    public function deleteProblemWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            @$body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->problemId)) {
            @$body['problemId'] = $request->problemId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return DeleteProblemResponse::fromMap($this->doROARequest('DeleteProblem', '2021-04-13', 'HTTPS', 'POST', 'AK', '/problem/delete', 'json', $req, $runtime));
    }

    /**
     * @param DeleteProblemEffectionServiceRequest $request
     *
     * @return DeleteProblemEffectionServiceResponse
     */
    public function deleteProblemEffectionService($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteProblemEffectionServiceWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DeleteProblemEffectionServiceRequest $request
     * @param string[]                             $headers
     * @param RuntimeOptions                       $runtime
     *
     * @return DeleteProblemEffectionServiceResponse
     */
    public function deleteProblemEffectionServiceWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            @$body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->effectionServiceId)) {
            @$body['effectionServiceId'] = $request->effectionServiceId;
        }
        if (!Utils::isUnset($request->problemId)) {
            @$body['problemId'] = $request->problemId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return DeleteProblemEffectionServiceResponse::fromMap($this->doROARequest('DeleteProblemEffectionService', '2021-04-13', 'HTTPS', 'POST', 'AK', '/problem/process/effectionService/delete', 'json', $req, $runtime));
    }

    /**
     * @param DeleteProblemMeasureRequest $request
     *
     * @return DeleteProblemMeasureResponse
     */
    public function deleteProblemMeasure($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteProblemMeasureWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DeleteProblemMeasureRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteProblemMeasureResponse
     */
    public function deleteProblemMeasureWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            @$body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->measureId)) {
            @$body['measureId'] = $request->measureId;
        }
        if (!Utils::isUnset($request->problemId)) {
            @$body['problemId'] = $request->problemId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return DeleteProblemMeasureResponse::fromMap($this->doROARequest('DeleteProblemMeasure', '2021-04-13', 'HTTPS', 'POST', 'AK', '/problem/improvement/measure/delete', 'json', $req, $runtime));
    }

    /**
     * @param DeleteProblemTimelineRequest $request
     *
     * @return DeleteProblemTimelineResponse
     */
    public function deleteProblemTimeline($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteProblemTimelineWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DeleteProblemTimelineRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteProblemTimelineResponse
     */
    public function deleteProblemTimelineWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            @$body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->problemId)) {
            @$body['problemId'] = $request->problemId;
        }
        if (!Utils::isUnset($request->problemTimelineId)) {
            @$body['problemTimelineId'] = $request->problemTimelineId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return DeleteProblemTimelineResponse::fromMap($this->doROARequest('DeleteProblemTimeline', '2021-04-13', 'HTTPS', 'POST', 'AK', '/problem/process/timeline/delete', 'json', $req, $runtime));
    }

    /**
     * @param DeleteRouteRuleRequest $request
     *
     * @return DeleteRouteRuleResponse
     */
    public function deleteRouteRule($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteRouteRuleWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DeleteRouteRuleRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteRouteRuleResponse
     */
    public function deleteRouteRuleWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            @$body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->routeRuleId)) {
            @$body['routeRuleId'] = $request->routeRuleId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return DeleteRouteRuleResponse::fromMap($this->doROARequest('DeleteRouteRule', '2021-04-13', 'HTTPS', 'POST', 'AK', '/routeRule/delete', 'json', $req, $runtime));
    }

    /**
     * @param DeleteServiceRequest $request
     *
     * @return DeleteServiceResponse
     */
    public function deleteService($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteServiceWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DeleteServiceRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteServiceResponse
     */
    public function deleteServiceWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            @$body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->serviceId)) {
            @$body['serviceId'] = $request->serviceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return DeleteServiceResponse::fromMap($this->doROARequest('DeleteService', '2021-04-13', 'HTTPS', 'POST', 'AK', '/services/delete', 'json', $req, $runtime));
    }

    /**
     * @param DeleteServiceGroupRequest $request
     *
     * @return DeleteServiceGroupResponse
     */
    public function deleteServiceGroup($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteServiceGroupWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DeleteServiceGroupRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteServiceGroupResponse
     */
    public function deleteServiceGroupWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            @$body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->serviceGroupId)) {
            @$body['serviceGroupId'] = $request->serviceGroupId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return DeleteServiceGroupResponse::fromMap($this->doROARequest('DeleteServiceGroup', '2021-04-13', 'HTTPS', 'POST', 'AK', '/services/group/delete', 'json', $req, $runtime));
    }

    /**
     * @param DeleteServiceGroupUserRequest $request
     *
     * @return DeleteServiceGroupUserResponse
     */
    public function deleteServiceGroupUser($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteServiceGroupUserWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DeleteServiceGroupUserRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteServiceGroupUserResponse
     */
    public function deleteServiceGroupUserWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            @$body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->newUserId)) {
            @$body['newUserId'] = $request->newUserId;
        }
        if (!Utils::isUnset($request->oldUserId)) {
            @$body['oldUserId'] = $request->oldUserId;
        }
        if (!Utils::isUnset($request->removeUser)) {
            @$body['removeUser'] = $request->removeUser;
        }
        if (!Utils::isUnset($request->serviceGroupId)) {
            @$body['serviceGroupId'] = $request->serviceGroupId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return DeleteServiceGroupUserResponse::fromMap($this->doROARequest('DeleteServiceGroupUser', '2021-04-13', 'HTTPS', 'POST', 'AK', '/services/group/deleteServiceGroupUser', 'json', $req, $runtime));
    }

    /**
     * @param DeleteSubscriptionRequest $request
     *
     * @return DeleteSubscriptionResponse
     */
    public function deleteSubscription($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteSubscriptionWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DeleteSubscriptionRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteSubscriptionResponse
     */
    public function deleteSubscriptionWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->subscriptionId)) {
            @$body['subscriptionId'] = $request->subscriptionId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return DeleteSubscriptionResponse::fromMap($this->doROARequest('DeleteSubscription', '2021-04-13', 'HTTPS', 'POST', 'AK', '/notify/subscription/delete', 'json', $req, $runtime));
    }

    /**
     * @param DeleteUserRequest $request
     *
     * @return DeleteUserResponse
     */
    public function deleteUser($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteUserWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DeleteUserRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return DeleteUserResponse
     */
    public function deleteUserWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            @$body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->userId)) {
            @$body['userId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return DeleteUserResponse::fromMap($this->doROARequest('DeleteUser', '2021-04-13', 'HTTPS', 'POST', 'AK', '/user/delete', 'json', $req, $runtime));
    }

    /**
     * @param DeliverIncidentRequest $request
     *
     * @return DeliverIncidentResponse
     */
    public function deliverIncident($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deliverIncidentWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DeliverIncidentRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return DeliverIncidentResponse
     */
    public function deliverIncidentWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->assignUserId)) {
            @$body['assignUserId'] = $request->assignUserId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            @$body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->incidentId)) {
            @$body['incidentId'] = $request->incidentId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return DeliverIncidentResponse::fromMap($this->doROARequest('DeliverIncident', '2021-04-13', 'HTTPS', 'POST', 'AK', '/incident/deliver', 'json', $req, $runtime));
    }

    /**
     * @param DisableEscalationPlanRequest $request
     *
     * @return DisableEscalationPlanResponse
     */
    public function disableEscalationPlan($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->disableEscalationPlanWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DisableEscalationPlanRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return DisableEscalationPlanResponse
     */
    public function disableEscalationPlanWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            @$body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->escalationPlanId)) {
            @$body['escalationPlanId'] = $request->escalationPlanId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return DisableEscalationPlanResponse::fromMap($this->doROARequest('DisableEscalationPlan', '2021-04-13', 'HTTPS', 'POST', 'AK', '/escalationPlan/disable', 'json', $req, $runtime));
    }

    /**
     * @param DisableIntegrationConfigRequest $request
     *
     * @return DisableIntegrationConfigResponse
     */
    public function disableIntegrationConfig($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->disableIntegrationConfigWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DisableIntegrationConfigRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return DisableIntegrationConfigResponse
     */
    public function disableIntegrationConfigWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            @$body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->integrationConfigId)) {
            @$body['integrationConfigId'] = $request->integrationConfigId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return DisableIntegrationConfigResponse::fromMap($this->doROARequest('DisableIntegrationConfig', '2021-04-13', 'HTTPS', 'POST', 'AK', '/integrationConfig/disable', 'json', $req, $runtime));
    }

    /**
     * @param DisableRouteRuleRequest $request
     *
     * @return DisableRouteRuleResponse
     */
    public function disableRouteRule($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->disableRouteRuleWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DisableRouteRuleRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return DisableRouteRuleResponse
     */
    public function disableRouteRuleWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            @$body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->routeRuleId)) {
            @$body['routeRuleId'] = $request->routeRuleId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return DisableRouteRuleResponse::fromMap($this->doROARequest('DisableRouteRule', '2021-04-13', 'HTTPS', 'POST', 'AK', '/routeRule/disable', 'json', $req, $runtime));
    }

    /**
     * @param DisableServiceGroupWebhookRequest $request
     *
     * @return DisableServiceGroupWebhookResponse
     */
    public function disableServiceGroupWebhook($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->disableServiceGroupWebhookWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DisableServiceGroupWebhookRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return DisableServiceGroupWebhookResponse
     */
    public function disableServiceGroupWebhookWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            @$body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->serviceGroupId)) {
            @$body['serviceGroupId'] = $request->serviceGroupId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return DisableServiceGroupWebhookResponse::fromMap($this->doROARequest('DisableServiceGroupWebhook', '2021-04-13', 'HTTPS', 'POST', 'AK', '/services/group/disableWebhook', 'json', $req, $runtime));
    }

    /**
     * @param DisableSubscriptionRequest $request
     *
     * @return DisableSubscriptionResponse
     */
    public function disableSubscription($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->disableSubscriptionWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DisableSubscriptionRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return DisableSubscriptionResponse
     */
    public function disableSubscriptionWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->subscriptionId)) {
            @$body['subscriptionId'] = $request->subscriptionId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return DisableSubscriptionResponse::fromMap($this->doROARequest('DisableSubscription', '2021-04-13', 'HTTPS', 'POST', 'AK', '/notify/subscription/doDisable', 'json', $req, $runtime));
    }

    /**
     * @param EnableEscalationPlanRequest $request
     *
     * @return EnableEscalationPlanResponse
     */
    public function enableEscalationPlan($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->enableEscalationPlanWithOptions($request, $headers, $runtime);
    }

    /**
     * @param EnableEscalationPlanRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return EnableEscalationPlanResponse
     */
    public function enableEscalationPlanWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            @$body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->escalationPlanId)) {
            @$body['escalationPlanId'] = $request->escalationPlanId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return EnableEscalationPlanResponse::fromMap($this->doROARequest('EnableEscalationPlan', '2021-04-13', 'HTTPS', 'POST', 'AK', '/escalationPlan/enable', 'json', $req, $runtime));
    }

    /**
     * @param EnableIntegrationConfigRequest $request
     *
     * @return EnableIntegrationConfigResponse
     */
    public function enableIntegrationConfig($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->enableIntegrationConfigWithOptions($request, $headers, $runtime);
    }

    /**
     * @param EnableIntegrationConfigRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return EnableIntegrationConfigResponse
     */
    public function enableIntegrationConfigWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            @$body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->integrationConfigId)) {
            @$body['integrationConfigId'] = $request->integrationConfigId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return EnableIntegrationConfigResponse::fromMap($this->doROARequest('EnableIntegrationConfig', '2021-04-13', 'HTTPS', 'POST', 'AK', '/integrationConfig/enable', 'json', $req, $runtime));
    }

    /**
     * @param EnableRouteRuleRequest $request
     *
     * @return EnableRouteRuleResponse
     */
    public function enableRouteRule($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->enableRouteRuleWithOptions($request, $headers, $runtime);
    }

    /**
     * @param EnableRouteRuleRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return EnableRouteRuleResponse
     */
    public function enableRouteRuleWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            @$body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->routeRuleId)) {
            @$body['routeRuleId'] = $request->routeRuleId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return EnableRouteRuleResponse::fromMap($this->doROARequest('EnableRouteRule', '2021-04-13', 'HTTPS', 'POST', 'AK', '/routeRule/enable', 'json', $req, $runtime));
    }

    /**
     * @param EnableServiceGroupWebhookRequest $request
     *
     * @return EnableServiceGroupWebhookResponse
     */
    public function enableServiceGroupWebhook($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->enableServiceGroupWebhookWithOptions($request, $headers, $runtime);
    }

    /**
     * @param EnableServiceGroupWebhookRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return EnableServiceGroupWebhookResponse
     */
    public function enableServiceGroupWebhookWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            @$body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->serviceGroupId)) {
            @$body['serviceGroupId'] = $request->serviceGroupId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return EnableServiceGroupWebhookResponse::fromMap($this->doROARequest('EnableServiceGroupWebhook', '2021-04-13', 'HTTPS', 'POST', 'AK', '/services/group/enableWebhook', 'json', $req, $runtime));
    }

    /**
     * @param EnableSubscriptionRequest $request
     *
     * @return EnableSubscriptionResponse
     */
    public function enableSubscription($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->enableSubscriptionWithOptions($request, $headers, $runtime);
    }

    /**
     * @param EnableSubscriptionRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return EnableSubscriptionResponse
     */
    public function enableSubscriptionWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->subscriptionId)) {
            @$body['subscriptionId'] = $request->subscriptionId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return EnableSubscriptionResponse::fromMap($this->doROARequest('EnableSubscription', '2021-04-13', 'HTTPS', 'POST', 'AK', '/notify/subscription/enable', 'json', $req, $runtime));
    }

    /**
     * @param FinishIncidentRequest $request
     *
     * @return FinishIncidentResponse
     */
    public function finishIncident($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->finishIncidentWithOptions($request, $headers, $runtime);
    }

    /**
     * @param FinishIncidentRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return FinishIncidentResponse
     */
    public function finishIncidentWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            @$body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->incidentFinishReason)) {
            @$body['incidentFinishReason'] = $request->incidentFinishReason;
        }
        if (!Utils::isUnset($request->incidentFinishReasonDescription)) {
            @$body['incidentFinishReasonDescription'] = $request->incidentFinishReasonDescription;
        }
        if (!Utils::isUnset($request->incidentFinishSolution)) {
            @$body['incidentFinishSolution'] = $request->incidentFinishSolution;
        }
        if (!Utils::isUnset($request->incidentFinishSolutionDescription)) {
            @$body['incidentFinishSolutionDescription'] = $request->incidentFinishSolutionDescription;
        }
        if (!Utils::isUnset($request->incidentIds)) {
            @$body['incidentIds'] = $request->incidentIds;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return FinishIncidentResponse::fromMap($this->doROARequest('FinishIncident', '2021-04-13', 'HTTPS', 'POST', 'AK', '/incident/finish', 'json', $req, $runtime));
    }

    /**
     * @param FinishProblemRequest $request
     *
     * @return FinishProblemResponse
     */
    public function finishProblem($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->finishProblemWithOptions($request, $headers, $runtime);
    }

    /**
     * @param FinishProblemRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return FinishProblemResponse
     */
    public function finishProblemWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            @$body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->problemId)) {
            @$body['problemId'] = $request->problemId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return FinishProblemResponse::fromMap($this->doROARequest('FinishProblem', '2021-04-13', 'HTTPS', 'POST', 'AK', '/problem/finish', 'json', $req, $runtime));
    }

    /**
     * @param GenerateProblemPictureLinkRequest $request
     *
     * @return GenerateProblemPictureLinkResponse
     */
    public function generateProblemPictureLink($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->generateProblemPictureLinkWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GenerateProblemPictureLinkRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return GenerateProblemPictureLinkResponse
     */
    public function generateProblemPictureLinkWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->keys)) {
            @$body['keys'] = $request->keys;
        }
        if (!Utils::isUnset($request->problemId)) {
            @$body['problemId'] = $request->problemId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return GenerateProblemPictureLinkResponse::fromMap($this->doROARequest('GenerateProblemPictureLink', '2021-04-13', 'HTTPS', 'POST', 'AK', '/problem/process/oss/getPresignedLink', 'json', $req, $runtime));
    }

    /**
     * @param GenerateProblemPictureUploadSignRequest $request
     *
     * @return GenerateProblemPictureUploadSignResponse
     */
    public function generateProblemPictureUploadSign($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->generateProblemPictureUploadSignWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GenerateProblemPictureUploadSignRequest $request
     * @param string[]                                $headers
     * @param RuntimeOptions                          $runtime
     *
     * @return GenerateProblemPictureUploadSignResponse
     */
    public function generateProblemPictureUploadSignWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->fileName)) {
            @$body['fileName'] = $request->fileName;
        }
        if (!Utils::isUnset($request->fileSize)) {
            @$body['fileSize'] = $request->fileSize;
        }
        if (!Utils::isUnset($request->fileType)) {
            @$body['fileType'] = $request->fileType;
        }
        if (!Utils::isUnset($request->problemId)) {
            @$body['problemId'] = $request->problemId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return GenerateProblemPictureUploadSignResponse::fromMap($this->doROARequest('GenerateProblemPictureUploadSign', '2021-04-13', 'HTTPS', 'POST', 'AK', '/problem/process/oss/generatePostPolicy', 'json', $req, $runtime));
    }

    /**
     * @param GetEscalationPlanRequest $request
     *
     * @return GetEscalationPlanResponse
     */
    public function getEscalationPlan($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getEscalationPlanWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetEscalationPlanRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return GetEscalationPlanResponse
     */
    public function getEscalationPlanWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            @$body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->escalationPlanId)) {
            @$body['escalationPlanId'] = $request->escalationPlanId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return GetEscalationPlanResponse::fromMap($this->doROARequest('GetEscalationPlan', '2021-04-13', 'HTTPS', 'POST', 'AK', '/escalationPlan/detail', 'json', $req, $runtime));
    }

    /**
     * @param GetEventRequest $request
     *
     * @return GetEventResponse
     */
    public function getEvent($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getEventWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetEventRequest $request
     * @param string[]        $headers
     * @param RuntimeOptions  $runtime
     *
     * @return GetEventResponse
     */
    public function getEventWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->monitorSourceId)) {
            @$body['monitorSourceId'] = $request->monitorSourceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return GetEventResponse::fromMap($this->doROARequest('GetEvent', '2021-04-13', 'HTTPS', 'POST', 'AK', '/events/getLastTimeEvent', 'json', $req, $runtime));
    }

    /**
     * @param GetHomePageGuidanceRequest $request
     *
     * @return GetHomePageGuidanceResponse
     */
    public function getHomePageGuidance($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getHomePageGuidanceWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetHomePageGuidanceRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return GetHomePageGuidanceResponse
     */
    public function getHomePageGuidanceWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            @$body['clientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return GetHomePageGuidanceResponse::fromMap($this->doROARequest('GetHomePageGuidance', '2021-04-13', 'HTTPS', 'POST', 'AK', '/guidance/detail', 'json', $req, $runtime));
    }

    /**
     * @param GetIncidentRequest $request
     *
     * @return GetIncidentResponse
     */
    public function getIncident($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getIncidentWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetIncidentRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return GetIncidentResponse
     */
    public function getIncidentWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            @$body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->incidentId)) {
            @$body['incidentId'] = $request->incidentId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return GetIncidentResponse::fromMap($this->doROARequest('GetIncident', '2021-04-13', 'HTTPS', 'POST', 'AK', '/incident/detail', 'json', $req, $runtime));
    }

    /**
     * @param GetIncidentStatisticsRequest $request
     *
     * @return GetIncidentStatisticsResponse
     */
    public function getIncidentStatistics($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getIncidentStatisticsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetIncidentStatisticsRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return GetIncidentStatisticsResponse
     */
    public function getIncidentStatisticsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            @$body['clientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return GetIncidentStatisticsResponse::fromMap($this->doROARequest('GetIncidentStatistics', '2021-04-13', 'HTTPS', 'POST', 'AK', '/incident/count', 'json', $req, $runtime));
    }

    /**
     * @param GetIncidentSubtotalCountRequest $request
     *
     * @return GetIncidentSubtotalCountResponse
     */
    public function getIncidentSubtotalCount($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getIncidentSubtotalCountWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetIncidentSubtotalCountRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return GetIncidentSubtotalCountResponse
     */
    public function getIncidentSubtotalCountWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            @$body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->incidentIds)) {
            @$body['incidentIds'] = $request->incidentIds;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return GetIncidentSubtotalCountResponse::fromMap($this->doROARequest('GetIncidentSubtotalCount', '2021-04-13', 'HTTPS', 'POST', 'AK', '/incident/subtotal/count', 'json', $req, $runtime));
    }

    /**
     * @param GetIntegrationConfigRequest $request
     *
     * @return GetIntegrationConfigResponse
     */
    public function getIntegrationConfig($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getIntegrationConfigWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetIntegrationConfigRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return GetIntegrationConfigResponse
     */
    public function getIntegrationConfigWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            @$body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->integrationConfigId)) {
            @$body['integrationConfigId'] = $request->integrationConfigId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return GetIntegrationConfigResponse::fromMap($this->doROARequest('GetIntegrationConfig', '2021-04-13', 'HTTPS', 'POST', 'AK', '/integrationConfig/detail', 'json', $req, $runtime));
    }

    /**
     * @param GetProblemRequest $request
     *
     * @return GetProblemResponse
     */
    public function getProblem($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getProblemWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetProblemRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return GetProblemResponse
     */
    public function getProblemWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            @$body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->problemId)) {
            @$body['problemId'] = $request->problemId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return GetProblemResponse::fromMap($this->doROARequest('GetProblem', '2021-04-13', 'HTTPS', 'POST', 'AK', '/problem/detail', 'json', $req, $runtime));
    }

    /**
     * @param GetProblemEffectionServiceRequest $request
     *
     * @return GetProblemEffectionServiceResponse
     */
    public function getProblemEffectionService($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getProblemEffectionServiceWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetProblemEffectionServiceRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return GetProblemEffectionServiceResponse
     */
    public function getProblemEffectionServiceWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            @$body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->effectionServiceId)) {
            @$body['effectionServiceId'] = $request->effectionServiceId;
        }
        if (!Utils::isUnset($request->problemId)) {
            @$body['problemId'] = $request->problemId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return GetProblemEffectionServiceResponse::fromMap($this->doROARequest('GetProblemEffectionService', '2021-04-13', 'HTTPS', 'POST', 'AK', '/problem/process/effectionService/detail', 'json', $req, $runtime));
    }

    /**
     * @param GetProblemImprovementRequest $request
     *
     * @return GetProblemImprovementResponse
     */
    public function getProblemImprovement($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getProblemImprovementWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetProblemImprovementRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return GetProblemImprovementResponse
     */
    public function getProblemImprovementWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            @$body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->problemId)) {
            @$body['problemId'] = $request->problemId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return GetProblemImprovementResponse::fromMap($this->doROARequest('GetProblemImprovement', '2021-04-13', 'HTTPS', 'POST', 'AK', '/problem/improvement/detail', 'json', $req, $runtime));
    }

    /**
     * @param GetProblemPreviewRequest $request
     *
     * @return GetProblemPreviewResponse
     */
    public function getProblemPreview($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getProblemPreviewWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetProblemPreviewRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return GetProblemPreviewResponse
     */
    public function getProblemPreviewWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            @$body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->effectServiceIds)) {
            @$body['effectServiceIds'] = $request->effectServiceIds;
        }
        if (!Utils::isUnset($request->incidentId)) {
            @$body['incidentId'] = $request->incidentId;
        }
        if (!Utils::isUnset($request->problemId)) {
            @$body['problemId'] = $request->problemId;
        }
        if (!Utils::isUnset($request->problemLevel)) {
            @$body['problemLevel'] = $request->problemLevel;
        }
        if (!Utils::isUnset($request->problemNotifyType)) {
            @$body['problemNotifyType'] = $request->problemNotifyType;
        }
        if (!Utils::isUnset($request->relatedServiceId)) {
            @$body['relatedServiceId'] = $request->relatedServiceId;
        }
        if (!Utils::isUnset($request->serviceGroupIds)) {
            @$body['serviceGroupIds'] = $request->serviceGroupIds;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return GetProblemPreviewResponse::fromMap($this->doROARequest('GetProblemPreview', '2021-04-13', 'HTTPS', 'POST', 'AK', '/problem/preview', 'json', $req, $runtime));
    }

    /**
     * @param GetResourceStatisticsRequest $request
     *
     * @return GetResourceStatisticsResponse
     */
    public function getResourceStatistics($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getResourceStatisticsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetResourceStatisticsRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return GetResourceStatisticsResponse
     */
    public function getResourceStatisticsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            @$body['clientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return GetResourceStatisticsResponse::fromMap($this->doROARequest('GetResourceStatistics', '2021-04-13', 'HTTPS', 'POST', 'AK', '/config/resource/count', 'json', $req, $runtime));
    }

    /**
     * @param GetRouteRuleRequest $request
     *
     * @return GetRouteRuleResponse
     */
    public function getRouteRule($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getRouteRuleWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetRouteRuleRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return GetRouteRuleResponse
     */
    public function getRouteRuleWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            @$body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->routeRuleId)) {
            @$body['routeRuleId'] = $request->routeRuleId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return GetRouteRuleResponse::fromMap($this->doROARequest('GetRouteRule', '2021-04-13', 'HTTPS', 'POST', 'AK', '/routeRule/detail', 'json', $req, $runtime));
    }

    /**
     * @param GetServiceRequest $request
     *
     * @return GetServiceResponse
     */
    public function getService($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getServiceWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetServiceRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return GetServiceResponse
     */
    public function getServiceWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            @$body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->serviceId)) {
            @$body['serviceId'] = $request->serviceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return GetServiceResponse::fromMap($this->doROARequest('GetService', '2021-04-13', 'HTTPS', 'POST', 'AK', '/services/detail', 'json', $req, $runtime));
    }

    /**
     * @param GetServiceGroupRequest $request
     *
     * @return GetServiceGroupResponse
     */
    public function getServiceGroup($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getServiceGroupWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetServiceGroupRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return GetServiceGroupResponse
     */
    public function getServiceGroupWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            @$body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->serviceGroupId)) {
            @$body['serviceGroupId'] = $request->serviceGroupId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return GetServiceGroupResponse::fromMap($this->doROARequest('GetServiceGroup', '2021-04-13', 'HTTPS', 'POST', 'AK', '/services/group/detail', 'json', $req, $runtime));
    }

    /**
     * @param GetServiceGroupPersonSchedulingRequest $request
     *
     * @return GetServiceGroupPersonSchedulingResponse
     */
    public function getServiceGroupPersonScheduling($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getServiceGroupPersonSchedulingWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetServiceGroupPersonSchedulingRequest $request
     * @param string[]                               $headers
     * @param RuntimeOptions                         $runtime
     *
     * @return GetServiceGroupPersonSchedulingResponse
     */
    public function getServiceGroupPersonSchedulingWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            @$body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->endTime)) {
            @$body['endTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->serviceGroupId)) {
            @$body['serviceGroupId'] = $request->serviceGroupId;
        }
        if (!Utils::isUnset($request->startTime)) {
            @$body['startTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->userId)) {
            @$body['userId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return GetServiceGroupPersonSchedulingResponse::fromMap($this->doROARequest('GetServiceGroupPersonScheduling', '2021-04-13', 'HTTPS', 'POST', 'AK', '/services/group/scheduling/user/getScheduling', 'json', $req, $runtime));
    }

    /**
     * @param GetServiceGroupSchedulingRequest $request
     *
     * @return GetServiceGroupSchedulingResponse
     */
    public function getServiceGroupScheduling($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getServiceGroupSchedulingWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetServiceGroupSchedulingRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return GetServiceGroupSchedulingResponse
     */
    public function getServiceGroupSchedulingWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            @$body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->serviceGroupId)) {
            @$body['serviceGroupId'] = $request->serviceGroupId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return GetServiceGroupSchedulingResponse::fromMap($this->doROARequest('GetServiceGroupScheduling', '2021-04-13', 'HTTPS', 'POST', 'AK', '/services/group/scheduling/detail', 'json', $req, $runtime));
    }

    /**
     * @param GetServiceGroupSchedulingPreviewRequest $request
     *
     * @return GetServiceGroupSchedulingPreviewResponse
     */
    public function getServiceGroupSchedulingPreview($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getServiceGroupSchedulingPreviewWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetServiceGroupSchedulingPreviewRequest $request
     * @param string[]                                $headers
     * @param RuntimeOptions                          $runtime
     *
     * @return GetServiceGroupSchedulingPreviewResponse
     */
    public function getServiceGroupSchedulingPreviewWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            @$body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->endTime)) {
            @$body['endTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->fastScheduling)) {
            @$body['fastScheduling'] = $request->fastScheduling;
        }
        if (!Utils::isUnset($request->fineScheduling)) {
            @$body['fineScheduling'] = $request->fineScheduling;
        }
        if (!Utils::isUnset($request->schedulingWay)) {
            @$body['schedulingWay'] = $request->schedulingWay;
        }
        if (!Utils::isUnset($request->serviceGroupId)) {
            @$body['serviceGroupId'] = $request->serviceGroupId;
        }
        if (!Utils::isUnset($request->startTime)) {
            @$body['startTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return GetServiceGroupSchedulingPreviewResponse::fromMap($this->doROARequest('GetServiceGroupSchedulingPreview', '2021-04-13', 'HTTPS', 'POST', 'AK', '/services/group/scheduling/preview', 'json', $req, $runtime));
    }

    /**
     * @param GetServiceGroupSpecialPersonSchedulingRequest $request
     *
     * @return GetServiceGroupSpecialPersonSchedulingResponse
     */
    public function getServiceGroupSpecialPersonScheduling($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getServiceGroupSpecialPersonSchedulingWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetServiceGroupSpecialPersonSchedulingRequest $request
     * @param string[]                                      $headers
     * @param RuntimeOptions                                $runtime
     *
     * @return GetServiceGroupSpecialPersonSchedulingResponse
     */
    public function getServiceGroupSpecialPersonSchedulingWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            @$body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->serviceGroupId)) {
            @$body['serviceGroupId'] = $request->serviceGroupId;
        }
        if (!Utils::isUnset($request->userId)) {
            @$body['userId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return GetServiceGroupSpecialPersonSchedulingResponse::fromMap($this->doROARequest('GetServiceGroupSpecialPersonScheduling', '2021-04-13', 'HTTPS', 'POST', 'AK', '/services/group/scheduling/getUserScheduling', 'json', $req, $runtime));
    }

    /**
     * @param GetSimilarIncidentStatisticsRequest $request
     *
     * @return GetSimilarIncidentStatisticsResponse
     */
    public function getSimilarIncidentStatistics($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getSimilarIncidentStatisticsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetSimilarIncidentStatisticsRequest $request
     * @param string[]                            $headers
     * @param RuntimeOptions                      $runtime
     *
     * @return GetSimilarIncidentStatisticsResponse
     */
    public function getSimilarIncidentStatisticsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            @$body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->createTime)) {
            @$body['createTime'] = $request->createTime;
        }
        if (!Utils::isUnset($request->events)) {
            @$body['events'] = $request->events;
        }
        if (!Utils::isUnset($request->incidentId)) {
            @$body['incidentId'] = $request->incidentId;
        }
        if (!Utils::isUnset($request->incidentTitle)) {
            @$body['incidentTitle'] = $request->incidentTitle;
        }
        if (!Utils::isUnset($request->relatedServiceId)) {
            @$body['relatedServiceId'] = $request->relatedServiceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return GetSimilarIncidentStatisticsResponse::fromMap($this->doROARequest('GetSimilarIncidentStatistics', '2021-04-13', 'HTTPS', 'POST', 'AK', '/incident/similarIncident/statistics', 'json', $req, $runtime));
    }

    /**
     * @param GetSubscriptionRequest $request
     *
     * @return GetSubscriptionResponse
     */
    public function getSubscription($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getSubscriptionWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetSubscriptionRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return GetSubscriptionResponse
     */
    public function getSubscriptionWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->subscriptionId)) {
            @$body['subscriptionId'] = $request->subscriptionId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return GetSubscriptionResponse::fromMap($this->doROARequest('GetSubscription', '2021-04-13', 'HTTPS', 'POST', 'AK', '/notify/subscription/detail', 'json', $req, $runtime));
    }

    /**
     * @param GetTenantApplicationRequest $request
     *
     * @return GetTenantApplicationResponse
     */
    public function getTenantApplication($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTenantApplicationWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetTenantApplicationRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return GetTenantApplicationResponse
     */
    public function getTenantApplicationWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            @$body['clientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return GetTenantApplicationResponse::fromMap($this->doROARequest('GetTenantApplication', '2021-04-13', 'HTTPS', 'POST', 'AK', '/mobileApp/detail', 'json', $req, $runtime));
    }

    /**
     * @param GetUserRequest $request
     *
     * @return GetUserResponse
     */
    public function getUser($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getUserWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetUserRequest $request
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetUserResponse
     */
    public function getUserWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            @$body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->userId)) {
            @$body['userId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return GetUserResponse::fromMap($this->doROARequest('GetUser', '2021-04-13', 'HTTPS', 'POST', 'AK', '/user/getUser', 'json', $req, $runtime));
    }

    /**
     * @param GetUserGuideStatusRequest $request
     *
     * @return GetUserGuideStatusResponse
     */
    public function getUserGuideStatus($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getUserGuideStatusWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetUserGuideStatusRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return GetUserGuideStatusResponse
     */
    public function getUserGuideStatusWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            @$body['clientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return GetUserGuideStatusResponse::fromMap($this->doROARequest('GetUserGuideStatus', '2021-04-13', 'HTTPS', 'POST', 'AK', '/user/guide/status', 'json', $req, $runtime));
    }

    /**
     * @param ListAlertsRequest $request
     *
     * @return ListAlertsResponse
     */
    public function listAlerts($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAlertsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListAlertsRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return ListAlertsResponse
     */
    public function listAlertsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->alertLevel)) {
            @$body['alertLevel'] = $request->alertLevel;
        }
        if (!Utils::isUnset($request->alertName)) {
            @$body['alertName'] = $request->alertName;
        }
        if (!Utils::isUnset($request->alertSourceName)) {
            @$body['alertSourceName'] = $request->alertSourceName;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            @$body['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            @$body['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->relatedServiceId)) {
            @$body['relatedServiceId'] = $request->relatedServiceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return ListAlertsResponse::fromMap($this->doROARequest('ListAlerts', '2021-04-13', 'HTTPS', 'POST', 'AK', '/alerts/list', 'json', $req, $runtime));
    }

    /**
     * @param ListChartDataForServiceGroupRequest $request
     *
     * @return ListChartDataForServiceGroupResponse
     */
    public function listChartDataForServiceGroup($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listChartDataForServiceGroupWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListChartDataForServiceGroupRequest $request
     * @param string[]                            $headers
     * @param RuntimeOptions                      $runtime
     *
     * @return ListChartDataForServiceGroupResponse
     */
    public function listChartDataForServiceGroupWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            @$body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->endTime)) {
            @$body['endTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->startTime)) {
            @$body['startTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return ListChartDataForServiceGroupResponse::fromMap($this->doROARequest('ListChartDataForServiceGroup', '2021-04-13', 'HTTPS', 'POST', 'AK', '/statistics/chartDataForServiceGroup/', 'json', $req, $runtime));
    }

    /**
     * @param ListChartDataForUserRequest $request
     *
     * @return ListChartDataForUserResponse
     */
    public function listChartDataForUser($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listChartDataForUserWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListChartDataForUserRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return ListChartDataForUserResponse
     */
    public function listChartDataForUserWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            @$body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->endTime)) {
            @$body['endTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->startTime)) {
            @$body['startTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return ListChartDataForUserResponse::fromMap($this->doROARequest('ListChartDataForUser', '2021-04-13', 'HTTPS', 'POST', 'AK', '/statistics/chartDataForUser/', 'json', $req, $runtime));
    }

    /**
     * @param ListConfigsRequest $request
     *
     * @return ListConfigsResponse
     */
    public function listConfigs($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listConfigsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListConfigsRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return ListConfigsResponse
     */
    public function listConfigsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            @$body['clientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return ListConfigsResponse::fromMap($this->doROARequest('ListConfigs', '2021-04-13', 'HTTPS', 'POST', 'AK', '/config/all', 'json', $req, $runtime));
    }

    /**
     * @param ListDataReportForServiceGroupRequest $request
     *
     * @return ListDataReportForServiceGroupResponse
     */
    public function listDataReportForServiceGroup($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDataReportForServiceGroupWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListDataReportForServiceGroupRequest $request
     * @param string[]                             $headers
     * @param RuntimeOptions                       $runtime
     *
     * @return ListDataReportForServiceGroupResponse
     */
    public function listDataReportForServiceGroupWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->endTime)) {
            @$body['endTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->serviceGroupName)) {
            @$body['serviceGroupName'] = $request->serviceGroupName;
        }
        if (!Utils::isUnset($request->startTime)) {
            @$body['startTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return ListDataReportForServiceGroupResponse::fromMap($this->doROARequest('ListDataReportForServiceGroup', '2021-04-13', 'HTTPS', 'POST', 'AK', '/statistics/listDataReportForServiceGroup', 'json', $req, $runtime));
    }

    /**
     * @param ListDataReportForUserRequest $request
     *
     * @return ListDataReportForUserResponse
     */
    public function listDataReportForUser($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDataReportForUserWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListDataReportForUserRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return ListDataReportForUserResponse
     */
    public function listDataReportForUserWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->endTime)) {
            @$body['endTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            @$body['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            @$body['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->startTime)) {
            @$body['startTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return ListDataReportForUserResponse::fromMap($this->doROARequest('ListDataReportForUser', '2021-04-13', 'HTTPS', 'POST', 'AK', '/statistics/listDataReportForUser', 'json', $req, $runtime));
    }

    /**
     * @param ListDictionariesRequest $request
     *
     * @return ListDictionariesResponse
     */
    public function listDictionaries($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDictionariesWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListDictionariesRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return ListDictionariesResponse
     */
    public function listDictionariesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            @$body['clientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return ListDictionariesResponse::fromMap($this->doROARequest('ListDictionaries', '2021-04-13', 'HTTPS', 'POST', 'AK', '/dict/list', 'json', $req, $runtime));
    }

    /**
     * @param ListEscalationPlanServicesRequest $request
     *
     * @return ListEscalationPlanServicesResponse
     */
    public function listEscalationPlanServices($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listEscalationPlanServicesWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListEscalationPlanServicesRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return ListEscalationPlanServicesResponse
     */
    public function listEscalationPlanServicesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            @$body['clientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return ListEscalationPlanServicesResponse::fromMap($this->doROARequest('ListEscalationPlanServices', '2021-04-13', 'HTTPS', 'POST', 'AK', '/escalationPlan/services', 'json', $req, $runtime));
    }

    /**
     * @param ListEscalationPlansRequest $request
     *
     * @return ListEscalationPlansResponse
     */
    public function listEscalationPlans($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listEscalationPlansWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListEscalationPlansRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return ListEscalationPlansResponse
     */
    public function listEscalationPlansWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            @$body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->escalationPlanName)) {
            @$body['escalationPlanName'] = $request->escalationPlanName;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            @$body['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            @$body['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->serviceName)) {
            @$body['serviceName'] = $request->serviceName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return ListEscalationPlansResponse::fromMap($this->doROARequest('ListEscalationPlans', '2021-04-13', 'HTTPS', 'POST', 'AK', '/escalationPlan/list', 'json', $req, $runtime));
    }

    /**
     * @param ListIncidentDetailEscalationPlansRequest $request
     *
     * @return ListIncidentDetailEscalationPlansResponse
     */
    public function listIncidentDetailEscalationPlans($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listIncidentDetailEscalationPlansWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListIncidentDetailEscalationPlansRequest $request
     * @param string[]                                 $headers
     * @param RuntimeOptions                           $runtime
     *
     * @return ListIncidentDetailEscalationPlansResponse
     */
    public function listIncidentDetailEscalationPlansWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            @$body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->incidentId)) {
            @$body['incidentId'] = $request->incidentId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return ListIncidentDetailEscalationPlansResponse::fromMap($this->doROARequest('ListIncidentDetailEscalationPlans', '2021-04-13', 'HTTPS', 'POST', 'AK', '/incident/detail/escalation', 'json', $req, $runtime));
    }

    /**
     * @param ListIncidentDetailTimelinesRequest $request
     *
     * @return ListIncidentDetailTimelinesResponse
     */
    public function listIncidentDetailTimelines($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listIncidentDetailTimelinesWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListIncidentDetailTimelinesRequest $request
     * @param string[]                           $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return ListIncidentDetailTimelinesResponse
     */
    public function listIncidentDetailTimelinesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            @$body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->incidentId)) {
            @$body['incidentId'] = $request->incidentId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            @$body['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            @$body['pageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return ListIncidentDetailTimelinesResponse::fromMap($this->doROARequest('ListIncidentDetailTimelines', '2021-04-13', 'HTTPS', 'POST', 'AK', '/incident/detail/timeline', 'json', $req, $runtime));
    }

    /**
     * @param ListIncidentSubtotalsRequest $request
     *
     * @return ListIncidentSubtotalsResponse
     */
    public function listIncidentSubtotals($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listIncidentSubtotalsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListIncidentSubtotalsRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return ListIncidentSubtotalsResponse
     */
    public function listIncidentSubtotalsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            @$body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->incidentId)) {
            @$body['incidentId'] = $request->incidentId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return ListIncidentSubtotalsResponse::fromMap($this->doROARequest('ListIncidentSubtotals', '2021-04-13', 'HTTPS', 'POST', 'AK', '/incident/list/subtotal', 'json', $req, $runtime));
    }

    /**
     * @param ListIncidentTimelinesRequest $request
     *
     * @return ListIncidentTimelinesResponse
     */
    public function listIncidentTimelines($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listIncidentTimelinesWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListIncidentTimelinesRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return ListIncidentTimelinesResponse
     */
    public function listIncidentTimelinesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            @$body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            @$body['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            @$body['pageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return ListIncidentTimelinesResponse::fromMap($this->doROARequest('ListIncidentTimelines', '2021-04-13', 'HTTPS', 'POST', 'AK', '/incident/timeline', 'json', $req, $runtime));
    }

    /**
     * @param ListIncidentsRequest $request
     *
     * @return ListIncidentsResponse
     */
    public function listIncidents($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listIncidentsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListIncidentsRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ListIncidentsResponse
     */
    public function listIncidentsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            @$body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->createEndTime)) {
            @$body['createEndTime'] = $request->createEndTime;
        }
        if (!Utils::isUnset($request->createStartTime)) {
            @$body['createStartTime'] = $request->createStartTime;
        }
        if (!Utils::isUnset($request->effect)) {
            @$body['effect'] = $request->effect;
        }
        if (!Utils::isUnset($request->incidentLevel)) {
            @$body['incidentLevel'] = $request->incidentLevel;
        }
        if (!Utils::isUnset($request->incidentStatus)) {
            @$body['incidentStatus'] = $request->incidentStatus;
        }
        if (!Utils::isUnset($request->me)) {
            @$body['me'] = $request->me;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            @$body['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            @$body['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->relationServiceId)) {
            @$body['relationServiceId'] = $request->relationServiceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return ListIncidentsResponse::fromMap($this->doROARequest('ListIncidents', '2021-04-13', 'HTTPS', 'POST', 'AK', '/incident/list', 'json', $req, $runtime));
    }

    /**
     * @param ListIntegrationConfigTimelinesRequest $request
     *
     * @return ListIntegrationConfigTimelinesResponse
     */
    public function listIntegrationConfigTimelines($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listIntegrationConfigTimelinesWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListIntegrationConfigTimelinesRequest $request
     * @param string[]                              $headers
     * @param RuntimeOptions                        $runtime
     *
     * @return ListIntegrationConfigTimelinesResponse
     */
    public function listIntegrationConfigTimelinesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            @$body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->integrationConfigId)) {
            @$body['integrationConfigId'] = $request->integrationConfigId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            @$body['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            @$body['pageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return ListIntegrationConfigTimelinesResponse::fromMap($this->doROARequest('ListIntegrationConfigTimelines', '2021-04-13', 'HTTPS', 'POST', 'AK', '/integrationConfig/timeline', 'json', $req, $runtime));
    }

    /**
     * @param ListIntegrationConfigsRequest $request
     *
     * @return ListIntegrationConfigsResponse
     */
    public function listIntegrationConfigs($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listIntegrationConfigsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListIntegrationConfigsRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return ListIntegrationConfigsResponse
     */
    public function listIntegrationConfigsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            @$body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->monitorSourceName)) {
            @$body['monitorSourceName'] = $request->monitorSourceName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return ListIntegrationConfigsResponse::fromMap($this->doROARequest('ListIntegrationConfigs', '2021-04-13', 'HTTPS', 'POST', 'AK', '/integrationConfig/list', 'json', $req, $runtime));
    }

    /**
     * @param ListMonitorSourcesRequest $request
     *
     * @return ListMonitorSourcesResponse
     */
    public function listMonitorSources($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listMonitorSourcesWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListMonitorSourcesRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return ListMonitorSourcesResponse
     */
    public function listMonitorSourcesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            @$body['clientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return ListMonitorSourcesResponse::fromMap($this->doROARequest('ListMonitorSources', '2021-04-13', 'HTTPS', 'POST', 'AK', '/monitorSource/list', 'json', $req, $runtime));
    }

    /**
     * @param ListProblemDetailOperationsRequest $request
     *
     * @return ListProblemDetailOperationsResponse
     */
    public function listProblemDetailOperations($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listProblemDetailOperationsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListProblemDetailOperationsRequest $request
     * @param string[]                           $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return ListProblemDetailOperationsResponse
     */
    public function listProblemDetailOperationsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            @$body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->createTimeSort)) {
            @$body['createTimeSort'] = $request->createTimeSort;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            @$body['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            @$body['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->problemId)) {
            @$body['problemId'] = $request->problemId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return ListProblemDetailOperationsResponse::fromMap($this->doROARequest('ListProblemDetailOperations', '2021-04-13', 'HTTPS', 'POST', 'AK', '/problem/detail/operations', 'json', $req, $runtime));
    }

    /**
     * @param ListProblemOperationsRequest $request
     *
     * @return ListProblemOperationsResponse
     */
    public function listProblemOperations($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listProblemOperationsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListProblemOperationsRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return ListProblemOperationsResponse
     */
    public function listProblemOperationsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            @$body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            @$body['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            @$body['pageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return ListProblemOperationsResponse::fromMap($this->doROARequest('ListProblemOperations', '2021-04-13', 'HTTPS', 'POST', 'AK', '/problem/operations', 'json', $req, $runtime));
    }

    /**
     * @param ListProblemSubtotalsRequest $request
     *
     * @return ListProblemSubtotalsResponse
     */
    public function listProblemSubtotals($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listProblemSubtotalsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListProblemSubtotalsRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return ListProblemSubtotalsResponse
     */
    public function listProblemSubtotalsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            @$body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->problemId)) {
            @$body['problemId'] = $request->problemId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return ListProblemSubtotalsResponse::fromMap($this->doROARequest('ListProblemSubtotals', '2021-04-13', 'HTTPS', 'POST', 'AK', '/problem/list/subtotal', 'json', $req, $runtime));
    }

    /**
     * @param ListProblemTimeLinesRequest $request
     *
     * @return ListProblemTimeLinesResponse
     */
    public function listProblemTimeLines($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listProblemTimeLinesWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListProblemTimeLinesRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return ListProblemTimeLinesResponse
     */
    public function listProblemTimeLinesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            @$body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->problemId)) {
            @$body['problemId'] = $request->problemId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return ListProblemTimeLinesResponse::fromMap($this->doROARequest('ListProblemTimeLines', '2021-04-13', 'HTTPS', 'POST', 'AK', '/problem/detail/timeLines', 'json', $req, $runtime));
    }

    /**
     * @param ListProblemsRequest $request
     *
     * @return ListProblemsResponse
     */
    public function listProblems($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listProblemsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListProblemsRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return ListProblemsResponse
     */
    public function listProblemsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->affectServiceId)) {
            @$body['affectServiceId'] = $request->affectServiceId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            @$body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->discoveryEndTime)) {
            @$body['discoveryEndTime'] = $request->discoveryEndTime;
        }
        if (!Utils::isUnset($request->discoveryStartTime)) {
            @$body['discoveryStartTime'] = $request->discoveryStartTime;
        }
        if (!Utils::isUnset($request->mainHandlerId)) {
            @$body['mainHandlerId'] = $request->mainHandlerId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            @$body['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            @$body['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->problemLevel)) {
            @$body['problemLevel'] = $request->problemLevel;
        }
        if (!Utils::isUnset($request->problemStatus)) {
            @$body['problemStatus'] = $request->problemStatus;
        }
        if (!Utils::isUnset($request->queryType)) {
            @$body['queryType'] = $request->queryType;
        }
        if (!Utils::isUnset($request->repeaterId)) {
            @$body['repeaterId'] = $request->repeaterId;
        }
        if (!Utils::isUnset($request->restoreEndTime)) {
            @$body['restoreEndTime'] = $request->restoreEndTime;
        }
        if (!Utils::isUnset($request->restoreStartTime)) {
            @$body['restoreStartTime'] = $request->restoreStartTime;
        }
        if (!Utils::isUnset($request->serviceGroupId)) {
            @$body['serviceGroupId'] = $request->serviceGroupId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return ListProblemsResponse::fromMap($this->doROARequest('ListProblems', '2021-04-13', 'HTTPS', 'POST', 'AK', '/problem/listProblems', 'json', $req, $runtime));
    }

    /**
     * @param ListRouteRulesRequest $request
     *
     * @return ListRouteRulesResponse
     */
    public function listRouteRules($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listRouteRulesWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListRouteRulesRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return ListRouteRulesResponse
     */
    public function listRouteRulesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            @$body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            @$body['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            @$body['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->ruleName)) {
            @$body['ruleName'] = $request->ruleName;
        }
        if (!Utils::isUnset($request->serviceName)) {
            @$body['serviceName'] = $request->serviceName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return ListRouteRulesResponse::fromMap($this->doROARequest('ListRouteRules', '2021-04-13', 'HTTPS', 'POST', 'AK', '/routeRule/list', 'json', $req, $runtime));
    }

    /**
     * @param ListServiceGroupsRequest $request
     *
     * @return ListServiceGroupsResponse
     */
    public function listServiceGroups($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listServiceGroupsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListServiceGroupsRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ListServiceGroupsResponse
     */
    public function listServiceGroupsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            @$body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->isScheduled)) {
            @$body['isScheduled'] = $request->isScheduled;
        }
        if (!Utils::isUnset($request->orderByScheduleStatus)) {
            @$body['orderByScheduleStatus'] = $request->orderByScheduleStatus;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            @$body['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            @$body['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->queryName)) {
            @$body['queryName'] = $request->queryName;
        }
        if (!Utils::isUnset($request->queryType)) {
            @$body['queryType'] = $request->queryType;
        }
        if (!Utils::isUnset($request->userId)) {
            @$body['userId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return ListServiceGroupsResponse::fromMap($this->doROARequest('ListServiceGroups', '2021-04-13', 'HTTPS', 'POST', 'AK', '/services/group/list', 'json', $req, $runtime));
    }

    /**
     * @param ListServicesRequest $request
     *
     * @return ListServicesResponse
     */
    public function listServices($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listServicesWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListServicesRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return ListServicesResponse
     */
    public function listServicesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            @$body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            @$body['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            @$body['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->serviceName)) {
            @$body['serviceName'] = $request->serviceName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return ListServicesResponse::fromMap($this->doROARequest('ListServices', '2021-04-13', 'HTTPS', 'POST', 'AK', '/services/list', 'json', $req, $runtime));
    }

    /**
     * @param ListSourceEventsRequest $request
     *
     * @return ListSourceEventsResponse
     */
    public function listSourceEvents($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSourceEventsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListSourceEventsRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return ListSourceEventsResponse
     */
    public function listSourceEventsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            @$body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->instanceId)) {
            @$body['instanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->instanceType)) {
            @$body['instanceType'] = $request->instanceType;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            @$body['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            @$body['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->startRowKey)) {
            @$body['startRowKey'] = $request->startRowKey;
        }
        if (!Utils::isUnset($request->stopRowKey)) {
            @$body['stopRowKey'] = $request->stopRowKey;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return ListSourceEventsResponse::fromMap($this->doROARequest('ListSourceEvents', '2021-04-13', 'HTTPS', 'POST', 'AK', '/events/listOriginalEvent', 'json', $req, $runtime));
    }

    /**
     * @param ListSourceEventsForMonitorSourceRequest $request
     *
     * @return ListSourceEventsForMonitorSourceResponse
     */
    public function listSourceEventsForMonitorSource($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSourceEventsForMonitorSourceWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListSourceEventsForMonitorSourceRequest $request
     * @param string[]                                $headers
     * @param RuntimeOptions                          $runtime
     *
     * @return ListSourceEventsForMonitorSourceResponse
     */
    public function listSourceEventsForMonitorSourceWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->monitorSourceId)) {
            @$body['monitorSourceId'] = $request->monitorSourceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return ListSourceEventsForMonitorSourceResponse::fromMap($this->doROARequest('ListSourceEventsForMonitorSource', '2021-04-13', 'HTTPS', 'POST', 'AK', '/events/queryLastestEvents', 'json', $req, $runtime));
    }

    /**
     * @param ListSubscriptionServiceGroupsRequest $request
     *
     * @return ListSubscriptionServiceGroupsResponse
     */
    public function listSubscriptionServiceGroups($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSubscriptionServiceGroupsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListSubscriptionServiceGroupsRequest $request
     * @param string[]                             $headers
     * @param RuntimeOptions                       $runtime
     *
     * @return ListSubscriptionServiceGroupsResponse
     */
    public function listSubscriptionServiceGroupsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            @$body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->serviceIds)) {
            @$body['serviceIds'] = $request->serviceIds;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return ListSubscriptionServiceGroupsResponse::fromMap($this->doROARequest('ListSubscriptionServiceGroups', '2021-04-13', 'HTTPS', 'POST', 'AK', '/problem/serviceGroup/list', 'json', $req, $runtime));
    }

    /**
     * @param ListSubscriptionsRequest $request
     *
     * @return ListSubscriptionsResponse
     */
    public function listSubscriptions($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSubscriptionsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListSubscriptionsRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ListSubscriptionsResponse
     */
    public function listSubscriptionsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            @$body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->notifyObject)) {
            @$body['notifyObject'] = $request->notifyObject;
        }
        if (!Utils::isUnset($request->notifyObjectType)) {
            @$body['notifyObjectType'] = $request->notifyObjectType;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            @$body['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            @$body['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->scope)) {
            @$body['scope'] = $request->scope;
        }
        if (!Utils::isUnset($request->scopeObject)) {
            @$body['scopeObject'] = $request->scopeObject;
        }
        if (!Utils::isUnset($request->subscriptionTitle)) {
            @$body['subscriptionTitle'] = $request->subscriptionTitle;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return ListSubscriptionsResponse::fromMap($this->doROARequest('ListSubscriptions', '2021-04-13', 'HTTPS', 'POST', 'AK', '/notify/subscription/list', 'json', $req, $runtime));
    }

    /**
     * @param ListUserSerivceGroupsRequest $request
     *
     * @return ListUserSerivceGroupsResponse
     */
    public function listUserSerivceGroups($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listUserSerivceGroupsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListUserSerivceGroupsRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return ListUserSerivceGroupsResponse
     */
    public function listUserSerivceGroupsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            @$body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->userId)) {
            @$body['userId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return ListUserSerivceGroupsResponse::fromMap($this->doROARequest('ListUserSerivceGroups', '2021-04-13', 'HTTPS', 'POST', 'AK', '/user/preview/detail', 'json', $req, $runtime));
    }

    /**
     * @param ListUsersRequest $request
     *
     * @return ListUsersResponse
     */
    public function listUsers($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listUsersWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListUsersRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return ListUsersResponse
     */
    public function listUsersWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            @$body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            @$body['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            @$body['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->phone)) {
            @$body['phone'] = $request->phone;
        }
        if (!Utils::isUnset($request->ramId)) {
            @$body['ramId'] = $request->ramId;
        }
        if (!Utils::isUnset($request->scene)) {
            @$body['scene'] = $request->scene;
        }
        if (!Utils::isUnset($request->synergyChannel)) {
            @$body['synergyChannel'] = $request->synergyChannel;
        }
        if (!Utils::isUnset($request->username)) {
            @$body['username'] = $request->username;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return ListUsersResponse::fromMap($this->doROARequest('ListUsers', '2021-04-13', 'HTTPS', 'POST', 'AK', '/user/list', 'json', $req, $runtime));
    }

    /**
     * @param RecoverProblemRequest $request
     *
     * @return RecoverProblemResponse
     */
    public function recoverProblem($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->recoverProblemWithOptions($request, $headers, $runtime);
    }

    /**
     * @param RecoverProblemRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return RecoverProblemResponse
     */
    public function recoverProblemWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->problemId)) {
            @$body['problemId'] = $request->problemId;
        }
        if (!Utils::isUnset($request->problemNotifyType)) {
            @$body['problemNotifyType'] = $request->problemNotifyType;
        }
        if (!Utils::isUnset($request->recoveryTime)) {
            @$body['recoveryTime'] = $request->recoveryTime;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return RecoverProblemResponse::fromMap($this->doROARequest('RecoverProblem', '2021-04-13', 'HTTPS', 'POST', 'AK', '/problem/recovery', 'json', $req, $runtime));
    }

    /**
     * @param RefreshIntegrationConfigKeyRequest $request
     *
     * @return RefreshIntegrationConfigKeyResponse
     */
    public function refreshIntegrationConfigKey($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->refreshIntegrationConfigKeyWithOptions($request, $headers, $runtime);
    }

    /**
     * @param RefreshIntegrationConfigKeyRequest $request
     * @param string[]                           $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return RefreshIntegrationConfigKeyResponse
     */
    public function refreshIntegrationConfigKeyWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            @$body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->integrationConfigId)) {
            @$body['integrationConfigId'] = $request->integrationConfigId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return RefreshIntegrationConfigKeyResponse::fromMap($this->doROARequest('RefreshIntegrationConfigKey', '2021-04-13', 'HTTPS', 'POST', 'AK', '/integrationConfig/refreshKey', 'json', $req, $runtime));
    }

    /**
     * @param RemoveProblemServiceGroupRequest $request
     *
     * @return RemoveProblemServiceGroupResponse
     */
    public function removeProblemServiceGroup($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->removeProblemServiceGroupWithOptions($request, $headers, $runtime);
    }

    /**
     * @param RemoveProblemServiceGroupRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return RemoveProblemServiceGroupResponse
     */
    public function removeProblemServiceGroupWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->problemId)) {
            @$body['problemId'] = $request->problemId;
        }
        if (!Utils::isUnset($request->serviceGroupIds)) {
            @$body['serviceGroupIds'] = $request->serviceGroupIds;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return RemoveProblemServiceGroupResponse::fromMap($this->doROARequest('RemoveProblemServiceGroup', '2021-04-13', 'HTTPS', 'POST', 'AK', '/problem/removeServiceGroup', 'json', $req, $runtime));
    }

    /**
     * @param ReplayProblemRequest $request
     *
     * @return ReplayProblemResponse
     */
    public function replayProblem($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->replayProblemWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ReplayProblemRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ReplayProblemResponse
     */
    public function replayProblemWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            @$body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->problemId)) {
            @$body['problemId'] = $request->problemId;
        }
        if (!Utils::isUnset($request->replayDutyUserId)) {
            @$body['replayDutyUserId'] = $request->replayDutyUserId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return ReplayProblemResponse::fromMap($this->doROARequest('ReplayProblem', '2021-04-13', 'HTTPS', 'POST', 'AK', '/problem/replay', 'json', $req, $runtime));
    }

    /**
     * @param RespondIncidentRequest $request
     *
     * @return RespondIncidentResponse
     */
    public function respondIncident($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->respondIncidentWithOptions($request, $headers, $runtime);
    }

    /**
     * @param RespondIncidentRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return RespondIncidentResponse
     */
    public function respondIncidentWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            @$body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->incidentIds)) {
            @$body['incidentIds'] = $request->incidentIds;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return RespondIncidentResponse::fromMap($this->doROARequest('RespondIncident', '2021-04-13', 'HTTPS', 'POST', 'AK', '/incident/response', 'json', $req, $runtime));
    }

    /**
     * @param RevokeProblemRecoveryRequest $request
     *
     * @return RevokeProblemRecoveryResponse
     */
    public function revokeProblemRecovery($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->revokeProblemRecoveryWithOptions($request, $headers, $runtime);
    }

    /**
     * @param RevokeProblemRecoveryRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return RevokeProblemRecoveryResponse
     */
    public function revokeProblemRecoveryWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            @$body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->problemId)) {
            @$body['problemId'] = $request->problemId;
        }
        if (!Utils::isUnset($request->problemNotifyType)) {
            @$body['problemNotifyType'] = $request->problemNotifyType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return RevokeProblemRecoveryResponse::fromMap($this->doROARequest('RevokeProblemRecovery', '2021-04-13', 'HTTPS', 'POST', 'AK', '/problem/revoke', 'json', $req, $runtime));
    }

    /**
     * @param UpdateEscalationPlanRequest $request
     *
     * @return UpdateEscalationPlanResponse
     */
    public function updateEscalationPlan($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateEscalationPlanWithOptions($request, $headers, $runtime);
    }

    /**
     * @param UpdateEscalationPlanRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateEscalationPlanResponse
     */
    public function updateEscalationPlanWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            @$body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->escalationPlanDescription)) {
            @$body['escalationPlanDescription'] = $request->escalationPlanDescription;
        }
        if (!Utils::isUnset($request->escalationPlanId)) {
            @$body['escalationPlanId'] = $request->escalationPlanId;
        }
        if (!Utils::isUnset($request->escalationPlanName)) {
            @$body['escalationPlanName'] = $request->escalationPlanName;
        }
        if (!Utils::isUnset($request->escalationPlanRules)) {
            @$body['escalationPlanRules'] = $request->escalationPlanRules;
        }
        if (!Utils::isUnset($request->escalationPlanScopeObjects)) {
            @$body['escalationPlanScopeObjects'] = $request->escalationPlanScopeObjects;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return UpdateEscalationPlanResponse::fromMap($this->doROARequest('UpdateEscalationPlan', '2021-04-13', 'HTTPS', 'POST', 'AK', '/escalationPlan/update', 'json', $req, $runtime));
    }

    /**
     * @param UpdateIncidentRequest $request
     *
     * @return UpdateIncidentResponse
     */
    public function updateIncident($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateIncidentWithOptions($request, $headers, $runtime);
    }

    /**
     * @param UpdateIncidentRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateIncidentResponse
     */
    public function updateIncidentWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            @$body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->effect)) {
            @$body['effect'] = $request->effect;
        }
        if (!Utils::isUnset($request->incidentId)) {
            @$body['incidentId'] = $request->incidentId;
        }
        if (!Utils::isUnset($request->incidentLevel)) {
            @$body['incidentLevel'] = $request->incidentLevel;
        }
        if (!Utils::isUnset($request->incidentTitle)) {
            @$body['incidentTitle'] = $request->incidentTitle;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return UpdateIncidentResponse::fromMap($this->doROARequest('UpdateIncident', '2021-04-13', 'HTTPS', 'POST', 'AK', '/incident/update', 'json', $req, $runtime));
    }

    /**
     * @param UpdateIntegrationConfigRequest $request
     *
     * @return UpdateIntegrationConfigResponse
     */
    public function updateIntegrationConfig($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateIntegrationConfigWithOptions($request, $headers, $runtime);
    }

    /**
     * @param UpdateIntegrationConfigRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return UpdateIntegrationConfigResponse
     */
    public function updateIntegrationConfigWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->accessKey)) {
            @$body['accessKey'] = $request->accessKey;
        }
        if (!Utils::isUnset($request->clientToken)) {
            @$body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->integrationConfigId)) {
            @$body['integrationConfigId'] = $request->integrationConfigId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return UpdateIntegrationConfigResponse::fromMap($this->doROARequest('UpdateIntegrationConfig', '2021-04-13', 'HTTPS', 'POST', 'AK', '/integrationConfig/update', 'json', $req, $runtime));
    }

    /**
     * @param UpdateProblemRequest $request
     *
     * @return UpdateProblemResponse
     */
    public function updateProblem($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateProblemWithOptions($request, $headers, $runtime);
    }

    /**
     * @param UpdateProblemRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateProblemResponse
     */
    public function updateProblemWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->feedback)) {
            @$body['feedback'] = $request->feedback;
        }
        if (!Utils::isUnset($request->level)) {
            @$body['level'] = $request->level;
        }
        if (!Utils::isUnset($request->mainHandlerId)) {
            @$body['mainHandlerId'] = $request->mainHandlerId;
        }
        if (!Utils::isUnset($request->preliminaryReason)) {
            @$body['preliminaryReason'] = $request->preliminaryReason;
        }
        if (!Utils::isUnset($request->problemId)) {
            @$body['problemId'] = $request->problemId;
        }
        if (!Utils::isUnset($request->problemName)) {
            @$body['problemName'] = $request->problemName;
        }
        if (!Utils::isUnset($request->progressSummary)) {
            @$body['progressSummary'] = $request->progressSummary;
        }
        if (!Utils::isUnset($request->relatedServiceId)) {
            @$body['relatedServiceId'] = $request->relatedServiceId;
        }
        if (!Utils::isUnset($request->serviceGroupIds)) {
            @$body['serviceGroupIds'] = $request->serviceGroupIds;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return UpdateProblemResponse::fromMap($this->doROARequest('UpdateProblem', '2021-04-13', 'HTTPS', 'POST', 'AK', '/problem/update', 'json', $req, $runtime));
    }

    /**
     * @param UpdateProblemEffectionServiceRequest $request
     *
     * @return UpdateProblemEffectionServiceResponse
     */
    public function updateProblemEffectionService($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateProblemEffectionServiceWithOptions($request, $headers, $runtime);
    }

    /**
     * @param UpdateProblemEffectionServiceRequest $request
     * @param string[]                             $headers
     * @param RuntimeOptions                       $runtime
     *
     * @return UpdateProblemEffectionServiceResponse
     */
    public function updateProblemEffectionServiceWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            @$body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            @$body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->effectionServiceId)) {
            @$body['effectionServiceId'] = $request->effectionServiceId;
        }
        if (!Utils::isUnset($request->level)) {
            @$body['level'] = $request->level;
        }
        if (!Utils::isUnset($request->picUrl)) {
            @$body['picUrl'] = $request->picUrl;
        }
        if (!Utils::isUnset($request->problemId)) {
            @$body['problemId'] = $request->problemId;
        }
        if (!Utils::isUnset($request->serviceId)) {
            @$body['serviceId'] = $request->serviceId;
        }
        if (!Utils::isUnset($request->status)) {
            @$body['status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return UpdateProblemEffectionServiceResponse::fromMap($this->doROARequest('UpdateProblemEffectionService', '2021-04-13', 'HTTPS', 'POST', 'AK', '/problem/process/effectionService/update', 'json', $req, $runtime));
    }

    /**
     * @param UpdateProblemImprovementRequest $request
     *
     * @return UpdateProblemImprovementResponse
     */
    public function updateProblemImprovement($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateProblemImprovementWithOptions($request, $headers, $runtime);
    }

    /**
     * @param UpdateProblemImprovementRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return UpdateProblemImprovementResponse
     */
    public function updateProblemImprovementWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            @$body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->discoverSource)) {
            @$body['discoverSource'] = $request->discoverSource;
        }
        if (!Utils::isUnset($request->dutyDepartmentId)) {
            @$body['dutyDepartmentId'] = $request->dutyDepartmentId;
        }
        if (!Utils::isUnset($request->dutyDepartmentName)) {
            @$body['dutyDepartmentName'] = $request->dutyDepartmentName;
        }
        if (!Utils::isUnset($request->dutyUserId)) {
            @$body['dutyUserId'] = $request->dutyUserId;
        }
        if (!Utils::isUnset($request->injectionMode)) {
            @$body['injectionMode'] = $request->injectionMode;
        }
        if (!Utils::isUnset($request->monitorSourceName)) {
            @$body['monitorSourceName'] = $request->monitorSourceName;
        }
        if (!Utils::isUnset($request->problemId)) {
            @$body['problemId'] = $request->problemId;
        }
        if (!Utils::isUnset($request->problemReason)) {
            @$body['problemReason'] = $request->problemReason;
        }
        if (!Utils::isUnset($request->recentActivity)) {
            @$body['recentActivity'] = $request->recentActivity;
        }
        if (!Utils::isUnset($request->recoveryMode)) {
            @$body['recoveryMode'] = $request->recoveryMode;
        }
        if (!Utils::isUnset($request->relationChanges)) {
            @$body['relationChanges'] = $request->relationChanges;
        }
        if (!Utils::isUnset($request->remark)) {
            @$body['remark'] = $request->remark;
        }
        if (!Utils::isUnset($request->replayDutyUserId)) {
            @$body['replayDutyUserId'] = $request->replayDutyUserId;
        }
        if (!Utils::isUnset($request->userReport)) {
            @$body['userReport'] = $request->userReport;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return UpdateProblemImprovementResponse::fromMap($this->doROARequest('UpdateProblemImprovement', '2021-04-13', 'HTTPS', 'POST', 'AK', '/problem/improvement/update', 'json', $req, $runtime));
    }

    /**
     * @param UpdateProblemMeasureRequest $request
     *
     * @return UpdateProblemMeasureResponse
     */
    public function updateProblemMeasure($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateProblemMeasureWithOptions($request, $headers, $runtime);
    }

    /**
     * @param UpdateProblemMeasureRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateProblemMeasureResponse
     */
    public function updateProblemMeasureWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->checkStandard)) {
            @$body['checkStandard'] = $request->checkStandard;
        }
        if (!Utils::isUnset($request->checkUserId)) {
            @$body['checkUserId'] = $request->checkUserId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            @$body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->content)) {
            @$body['content'] = $request->content;
        }
        if (!Utils::isUnset($request->directorId)) {
            @$body['directorId'] = $request->directorId;
        }
        if (!Utils::isUnset($request->measureId)) {
            @$body['measureId'] = $request->measureId;
        }
        if (!Utils::isUnset($request->planFinishTime)) {
            @$body['planFinishTime'] = $request->planFinishTime;
        }
        if (!Utils::isUnset($request->problemId)) {
            @$body['problemId'] = $request->problemId;
        }
        if (!Utils::isUnset($request->stalkerId)) {
            @$body['stalkerId'] = $request->stalkerId;
        }
        if (!Utils::isUnset($request->status)) {
            @$body['status'] = $request->status;
        }
        if (!Utils::isUnset($request->type)) {
            @$body['type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return UpdateProblemMeasureResponse::fromMap($this->doROARequest('UpdateProblemMeasure', '2021-04-13', 'HTTPS', 'POST', 'AK', '/problem/improvement/measure/update', 'json', $req, $runtime));
    }

    /**
     * @param UpdateProblemNoticeRequest $request
     *
     * @return UpdateProblemNoticeResponse
     */
    public function updateProblemNotice($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateProblemNoticeWithOptions($request, $headers, $runtime);
    }

    /**
     * @param UpdateProblemNoticeRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateProblemNoticeResponse
     */
    public function updateProblemNoticeWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            @$body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->problemId)) {
            @$body['problemId'] = $request->problemId;
        }
        if (!Utils::isUnset($request->problemNotifyType)) {
            @$body['problemNotifyType'] = $request->problemNotifyType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return UpdateProblemNoticeResponse::fromMap($this->doROARequest('UpdateProblemNotice', '2021-04-13', 'HTTPS', 'POST', 'AK', '/problem/notify', 'json', $req, $runtime));
    }

    /**
     * @param UpdateProblemTimelineRequest $request
     *
     * @return UpdateProblemTimelineResponse
     */
    public function updateProblemTimeline($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateProblemTimelineWithOptions($request, $headers, $runtime);
    }

    /**
     * @param UpdateProblemTimelineRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateProblemTimelineResponse
     */
    public function updateProblemTimelineWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            @$body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->content)) {
            @$body['content'] = $request->content;
        }
        if (!Utils::isUnset($request->keyNode)) {
            @$body['keyNode'] = $request->keyNode;
        }
        if (!Utils::isUnset($request->problemId)) {
            @$body['problemId'] = $request->problemId;
        }
        if (!Utils::isUnset($request->problemTimelineId)) {
            @$body['problemTimelineId'] = $request->problemTimelineId;
        }
        if (!Utils::isUnset($request->time)) {
            @$body['time'] = $request->time;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return UpdateProblemTimelineResponse::fromMap($this->doROARequest('UpdateProblemTimeline', '2021-04-13', 'HTTPS', 'POST', 'AK', '/problem/process/timeline/update', 'json', $req, $runtime));
    }

    /**
     * @param UpdateRouteRuleRequest $request
     *
     * @return UpdateRouteRuleResponse
     */
    public function updateRouteRule($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateRouteRuleWithOptions($request, $headers, $runtime);
    }

    /**
     * @param UpdateRouteRuleRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateRouteRuleResponse
     */
    public function updateRouteRuleWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->assignObjectId)) {
            @$body['assignObjectId'] = $request->assignObjectId;
        }
        if (!Utils::isUnset($request->assignObjectType)) {
            @$body['assignObjectType'] = $request->assignObjectType;
        }
        if (!Utils::isUnset($request->clientToken)) {
            @$body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->effection)) {
            @$body['effection'] = $request->effection;
        }
        if (!Utils::isUnset($request->incidentLevel)) {
            @$body['incidentLevel'] = $request->incidentLevel;
        }
        if (!Utils::isUnset($request->matchCount)) {
            @$body['matchCount'] = $request->matchCount;
        }
        if (!Utils::isUnset($request->notifyChannels)) {
            @$body['notifyChannels'] = $request->notifyChannels;
        }
        if (!Utils::isUnset($request->relatedServiceId)) {
            @$body['relatedServiceId'] = $request->relatedServiceId;
        }
        if (!Utils::isUnset($request->routeChildRules)) {
            @$body['routeChildRules'] = $request->routeChildRules;
        }
        if (!Utils::isUnset($request->routeRuleId)) {
            @$body['routeRuleId'] = $request->routeRuleId;
        }
        if (!Utils::isUnset($request->routeType)) {
            @$body['routeType'] = $request->routeType;
        }
        if (!Utils::isUnset($request->ruleName)) {
            @$body['ruleName'] = $request->ruleName;
        }
        if (!Utils::isUnset($request->timeWindow)) {
            @$body['timeWindow'] = $request->timeWindow;
        }
        if (!Utils::isUnset($request->timeWindowUnit)) {
            @$body['timeWindowUnit'] = $request->timeWindowUnit;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return UpdateRouteRuleResponse::fromMap($this->doROARequest('UpdateRouteRule', '2021-04-13', 'HTTPS', 'POST', 'AK', '/routeRule/edit', 'json', $req, $runtime));
    }

    /**
     * @param UpdateServiceRequest $request
     *
     * @return UpdateServiceResponse
     */
    public function updateService($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateServiceWithOptions($request, $headers, $runtime);
    }

    /**
     * @param UpdateServiceRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateServiceResponse
     */
    public function updateServiceWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            @$body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->serviceDescription)) {
            @$body['serviceDescription'] = $request->serviceDescription;
        }
        if (!Utils::isUnset($request->serviceId)) {
            @$body['serviceId'] = $request->serviceId;
        }
        if (!Utils::isUnset($request->serviceName)) {
            @$body['serviceName'] = $request->serviceName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return UpdateServiceResponse::fromMap($this->doROARequest('UpdateService', '2021-04-13', 'HTTPS', 'POST', 'AK', '/services/update', 'json', $req, $runtime));
    }

    /**
     * @param UpdateServiceGroupRequest $request
     *
     * @return UpdateServiceGroupResponse
     */
    public function updateServiceGroup($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateServiceGroupWithOptions($request, $headers, $runtime);
    }

    /**
     * @param UpdateServiceGroupRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateServiceGroupResponse
     */
    public function updateServiceGroupWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            @$body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->enableWebhook)) {
            @$body['enableWebhook'] = $request->enableWebhook;
        }
        if (!Utils::isUnset($request->serviceGroupDescription)) {
            @$body['serviceGroupDescription'] = $request->serviceGroupDescription;
        }
        if (!Utils::isUnset($request->serviceGroupId)) {
            @$body['serviceGroupId'] = $request->serviceGroupId;
        }
        if (!Utils::isUnset($request->serviceGroupName)) {
            @$body['serviceGroupName'] = $request->serviceGroupName;
        }
        if (!Utils::isUnset($request->userIds)) {
            @$body['userIds'] = $request->userIds;
        }
        if (!Utils::isUnset($request->webhookLink)) {
            @$body['webhookLink'] = $request->webhookLink;
        }
        if (!Utils::isUnset($request->webhookType)) {
            @$body['webhookType'] = $request->webhookType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return UpdateServiceGroupResponse::fromMap($this->doROARequest('UpdateServiceGroup', '2021-04-13', 'HTTPS', 'POST', 'AK', '/services/group/modify', 'json', $req, $runtime));
    }

    /**
     * @param UpdateServiceGroupSchedulingRequest $request
     *
     * @return UpdateServiceGroupSchedulingResponse
     */
    public function updateServiceGroupScheduling($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateServiceGroupSchedulingWithOptions($request, $headers, $runtime);
    }

    /**
     * @param UpdateServiceGroupSchedulingRequest $request
     * @param string[]                            $headers
     * @param RuntimeOptions                      $runtime
     *
     * @return UpdateServiceGroupSchedulingResponse
     */
    public function updateServiceGroupSchedulingWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            @$body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->fastScheduling)) {
            @$body['fastScheduling'] = $request->fastScheduling;
        }
        if (!Utils::isUnset($request->fineScheduling)) {
            @$body['fineScheduling'] = $request->fineScheduling;
        }
        if (!Utils::isUnset($request->schedulingWay)) {
            @$body['schedulingWay'] = $request->schedulingWay;
        }
        if (!Utils::isUnset($request->serviceGroupId)) {
            @$body['serviceGroupId'] = $request->serviceGroupId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return UpdateServiceGroupSchedulingResponse::fromMap($this->doROARequest('UpdateServiceGroupScheduling', '2021-04-13', 'HTTPS', 'POST', 'AK', '/services/group/scheduling/update', 'json', $req, $runtime));
    }

    /**
     * @param UpdateServiceGroupSpecialDaySchedulingRequest $request
     *
     * @return UpdateServiceGroupSpecialDaySchedulingResponse
     */
    public function updateServiceGroupSpecialDayScheduling($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateServiceGroupSpecialDaySchedulingWithOptions($request, $headers, $runtime);
    }

    /**
     * @param UpdateServiceGroupSpecialDaySchedulingRequest $request
     * @param string[]                                      $headers
     * @param RuntimeOptions                                $runtime
     *
     * @return UpdateServiceGroupSpecialDaySchedulingResponse
     */
    public function updateServiceGroupSpecialDaySchedulingWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            @$body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->schedulingDate)) {
            @$body['schedulingDate'] = $request->schedulingDate;
        }
        if (!Utils::isUnset($request->schedulingSpecialDays)) {
            @$body['schedulingSpecialDays'] = $request->schedulingSpecialDays;
        }
        if (!Utils::isUnset($request->serviceGroupId)) {
            @$body['serviceGroupId'] = $request->serviceGroupId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return UpdateServiceGroupSpecialDaySchedulingResponse::fromMap($this->doROARequest('UpdateServiceGroupSpecialDayScheduling', '2021-04-13', 'HTTPS', 'POST', 'AK', '/services/group/scheduling/updateSpecialDayScheduling', 'json', $req, $runtime));
    }

    /**
     * @param UpdateSubscriptionRequest $request
     *
     * @return UpdateSubscriptionResponse
     */
    public function updateSubscription($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateSubscriptionWithOptions($request, $headers, $runtime);
    }

    /**
     * @param UpdateSubscriptionRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateSubscriptionResponse
     */
    public function updateSubscriptionWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->endTime)) {
            @$body['endTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->expiredType)) {
            @$body['expiredType'] = $request->expiredType;
        }
        if (!Utils::isUnset($request->notifyObjectList)) {
            @$body['notifyObjectList'] = $request->notifyObjectList;
        }
        if (!Utils::isUnset($request->notifyObjectType)) {
            @$body['notifyObjectType'] = $request->notifyObjectType;
        }
        if (!Utils::isUnset($request->notifyStrategyList)) {
            @$body['notifyStrategyList'] = $request->notifyStrategyList;
        }
        if (!Utils::isUnset($request->period)) {
            @$body['period'] = $request->period;
        }
        if (!Utils::isUnset($request->scope)) {
            @$body['scope'] = $request->scope;
        }
        if (!Utils::isUnset($request->scopeObjectList)) {
            @$body['scopeObjectList'] = $request->scopeObjectList;
        }
        if (!Utils::isUnset($request->startTime)) {
            @$body['startTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->subscriptionId)) {
            @$body['subscriptionId'] = $request->subscriptionId;
        }
        if (!Utils::isUnset($request->subscriptionTitle)) {
            @$body['subscriptionTitle'] = $request->subscriptionTitle;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return UpdateSubscriptionResponse::fromMap($this->doROARequest('UpdateSubscription', '2021-04-13', 'HTTPS', 'POST', 'AK', '/notify/subscription/update', 'json', $req, $runtime));
    }

    /**
     * @param UpdateUserRequest $request
     *
     * @return UpdateUserResponse
     */
    public function updateUser($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateUserWithOptions($request, $headers, $runtime);
    }

    /**
     * @param UpdateUserRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return UpdateUserResponse
     */
    public function updateUserWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            @$body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->email)) {
            @$body['email'] = $request->email;
        }
        if (!Utils::isUnset($request->phone)) {
            @$body['phone'] = $request->phone;
        }
        if (!Utils::isUnset($request->ramId)) {
            @$body['ramId'] = $request->ramId;
        }
        if (!Utils::isUnset($request->userId)) {
            @$body['userId'] = $request->userId;
        }
        if (!Utils::isUnset($request->username)) {
            @$body['username'] = $request->username;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return UpdateUserResponse::fromMap($this->doROARequest('UpdateUser', '2021-04-13', 'HTTPS', 'POST', 'AK', '/user/update', 'json', $req, $runtime));
    }

    /**
     * @param UpdateUserGuideStatusRequest $request
     *
     * @return UpdateUserGuideStatusResponse
     */
    public function updateUserGuideStatus($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateUserGuideStatusWithOptions($request, $headers, $runtime);
    }

    /**
     * @param UpdateUserGuideStatusRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateUserGuideStatusResponse
     */
    public function updateUserGuideStatusWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            @$body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->guideAction)) {
            @$body['guideAction'] = $request->guideAction;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return UpdateUserGuideStatusResponse::fromMap($this->doROARequest('UpdateUserGuideStatus', '2021-04-13', 'HTTPS', 'POST', 'AK', '/user/update/guide/status', 'json', $req, $runtime));
    }
}
