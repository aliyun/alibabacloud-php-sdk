<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Cmn\V20200825\Models\ApplyIPRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\ApplyIPResponse;
use AlibabaCloud\SDK\Cmn\V20200825\Models\ApplyIPShrinkRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\AutoDutyRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\AutoDutyResponse;
use AlibabaCloud\SDK\Cmn\V20200825\Models\CloseEventRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\CloseEventResponse;
use AlibabaCloud\SDK\Cmn\V20200825\Models\CreateConfigurationSpecificationRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\CreateConfigurationSpecificationResponse;
use AlibabaCloud\SDK\Cmn\V20200825\Models\CreateConfigurationSpecificationShrinkRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\CreateConfigurationVariateRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\CreateConfigurationVariateResponse;
use AlibabaCloud\SDK\Cmn\V20200825\Models\CreateDedicatedLineRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\CreateDedicatedLineResponse;
use AlibabaCloud\SDK\Cmn\V20200825\Models\CreateDeviceFormRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\CreateDeviceFormResponse;
use AlibabaCloud\SDK\Cmn\V20200825\Models\CreateDevicePropertyRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\CreateDevicePropertyResponse;
use AlibabaCloud\SDK\Cmn\V20200825\Models\CreateDeviceRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\CreateDeviceResponse;
use AlibabaCloud\SDK\Cmn\V20200825\Models\CreateDevicesRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\CreateDevicesResponse;
use AlibabaCloud\SDK\Cmn\V20200825\Models\CreateDevicesShrinkRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\CreateEventDefinitionRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\CreateEventDefinitionResponse;
use AlibabaCloud\SDK\Cmn\V20200825\Models\CreateLinkJobRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\CreateLinkJobResponse;
use AlibabaCloud\SDK\Cmn\V20200825\Models\CreateMonitorItemRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\CreateMonitorItemResponse;
use AlibabaCloud\SDK\Cmn\V20200825\Models\CreateMonitorItemShrinkRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\CreateOsVersionRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\CreateOsVersionResponse;
use AlibabaCloud\SDK\Cmn\V20200825\Models\CreatePhysicalSpaceRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\CreatePhysicalSpaceResponse;
use AlibabaCloud\SDK\Cmn\V20200825\Models\CreatePhysicalSpaceShrinkRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\CreateRealtimeTaskRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\CreateRealtimeTaskResponse;
use AlibabaCloud\SDK\Cmn\V20200825\Models\CreateResourceInformationRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\CreateResourceInformationResponse;
use AlibabaCloud\SDK\Cmn\V20200825\Models\CreateSetupProjectRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\CreateSetupProjectResponse;
use AlibabaCloud\SDK\Cmn\V20200825\Models\CreateSpaceModelRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\CreateSpaceModelResponse;
use AlibabaCloud\SDK\Cmn\V20200825\Models\CreateSpaceModelShrinkRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\CreateTaskRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\CreateTaskResponse;
use AlibabaCloud\SDK\Cmn\V20200825\Models\CreateTimePeriodRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\CreateTimePeriodResponse;
use AlibabaCloud\SDK\Cmn\V20200825\Models\DeleteConfigurationSpecificationRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\DeleteConfigurationSpecificationResponse;
use AlibabaCloud\SDK\Cmn\V20200825\Models\DeleteConfigurationVariateRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\DeleteConfigurationVariateResponse;
use AlibabaCloud\SDK\Cmn\V20200825\Models\DeleteDedicatedLineRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\DeleteDedicatedLineResponse;
use AlibabaCloud\SDK\Cmn\V20200825\Models\DeleteDeliveryArchVersionRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\DeleteDeliveryArchVersionResponse;
use AlibabaCloud\SDK\Cmn\V20200825\Models\DeleteDeliveryProjectRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\DeleteDeliveryProjectResponse;
use AlibabaCloud\SDK\Cmn\V20200825\Models\DeleteDeviceFormRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\DeleteDeviceFormResponse;
use AlibabaCloud\SDK\Cmn\V20200825\Models\DeleteDevicePropertyRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\DeleteDevicePropertyResponse;
use AlibabaCloud\SDK\Cmn\V20200825\Models\DeleteDeviceRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\DeleteDeviceResourceRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\DeleteDeviceResourceResponse;
use AlibabaCloud\SDK\Cmn\V20200825\Models\DeleteDeviceResponse;
use AlibabaCloud\SDK\Cmn\V20200825\Models\DeleteDevicesRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\DeleteDevicesResponse;
use AlibabaCloud\SDK\Cmn\V20200825\Models\DeleteDevicesShrinkRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\DeleteEventDefinitionRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\DeleteEventDefinitionResponse;
use AlibabaCloud\SDK\Cmn\V20200825\Models\DeleteInspectionTaskRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\DeleteInspectionTaskResponse;
use AlibabaCloud\SDK\Cmn\V20200825\Models\DeleteOsVersionRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\DeleteOsVersionResponse;
use AlibabaCloud\SDK\Cmn\V20200825\Models\DeletePhysicalSpaceRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\DeletePhysicalSpaceResponse;
use AlibabaCloud\SDK\Cmn\V20200825\Models\DeleteResourceInformationRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\DeleteResourceInformationResponse;
use AlibabaCloud\SDK\Cmn\V20200825\Models\DeleteSetupProjectRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\DeleteSetupProjectResponse;
use AlibabaCloud\SDK\Cmn\V20200825\Models\DeleteSpaceModelRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\DeleteSpaceModelResponse;
use AlibabaCloud\SDK\Cmn\V20200825\Models\DisableNotificationRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\DisableNotificationResponse;
use AlibabaCloud\SDK\Cmn\V20200825\Models\DisableNotificationShrinkRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\DownloadDeviceResourceRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\DownloadDeviceResourceResponse;
use AlibabaCloud\SDK\Cmn\V20200825\Models\DownloadDeviceResourceShrinkRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\EnableNotificationRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\EnableNotificationResponse;
use AlibabaCloud\SDK\Cmn\V20200825\Models\EnableNotificationShrinkRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\GetAlarmStatusRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\GetAlarmStatusResponse;
use AlibabaCloud\SDK\Cmn\V20200825\Models\GetConfigurationSpecificationRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\GetConfigurationSpecificationResponse;
use AlibabaCloud\SDK\Cmn\V20200825\Models\GetConfigurationVariateRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\GetConfigurationVariateResponse;
use AlibabaCloud\SDK\Cmn\V20200825\Models\GetDedicatedLineRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\GetDedicatedLineResponse;
use AlibabaCloud\SDK\Cmn\V20200825\Models\GetDeviceConfigDateRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\GetDeviceConfigDateResponse;
use AlibabaCloud\SDK\Cmn\V20200825\Models\GetDeviceConfigDiffRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\GetDeviceConfigDiffResponse;
use AlibabaCloud\SDK\Cmn\V20200825\Models\GetDeviceConfigRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\GetDeviceConfigResponse;
use AlibabaCloud\SDK\Cmn\V20200825\Models\GetDeviceFormRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\GetDeviceFormResponse;
use AlibabaCloud\SDK\Cmn\V20200825\Models\GetDeviceOpLogRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\GetDeviceOpLogResponse;
use AlibabaCloud\SDK\Cmn\V20200825\Models\GetDevicePropertyRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\GetDevicePropertyResponse;
use AlibabaCloud\SDK\Cmn\V20200825\Models\GetDeviceRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\GetDeviceResourceRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\GetDeviceResourceResponse;
use AlibabaCloud\SDK\Cmn\V20200825\Models\GetDeviceResponse;
use AlibabaCloud\SDK\Cmn\V20200825\Models\GetInspectionTaskRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\GetInspectionTaskResponse;
use AlibabaCloud\SDK\Cmn\V20200825\Models\GetMonitorItemRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\GetMonitorItemResponse;
use AlibabaCloud\SDK\Cmn\V20200825\Models\GetOsDownloadPathRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\GetOsDownloadPathResponse;
use AlibabaCloud\SDK\Cmn\V20200825\Models\GetOssPolicyRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\GetOssPolicyResponse;
use AlibabaCloud\SDK\Cmn\V20200825\Models\GetOsVersionRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\GetOsVersionResponse;
use AlibabaCloud\SDK\Cmn\V20200825\Models\GetPhysicalSpaceRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\GetPhysicalSpaceResponse;
use AlibabaCloud\SDK\Cmn\V20200825\Models\GetPhysicalSpaceTopoRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\GetPhysicalSpaceTopoResponse;
use AlibabaCloud\SDK\Cmn\V20200825\Models\GetRealtimeTaskRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\GetRealtimeTaskResponse;
use AlibabaCloud\SDK\Cmn\V20200825\Models\GetScheduleWorkerRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\GetScheduleWorkerResponse;
use AlibabaCloud\SDK\Cmn\V20200825\Models\GetSetupProjectRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\GetSetupProjectResponse;
use AlibabaCloud\SDK\Cmn\V20200825\Models\GetSpaceModelInstanceRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\GetSpaceModelInstanceResponse;
use AlibabaCloud\SDK\Cmn\V20200825\Models\GetSpaceModelRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\GetSpaceModelResponse;
use AlibabaCloud\SDK\Cmn\V20200825\Models\GetSpaceModelSortRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\GetSpaceModelSortResponse;
use AlibabaCloud\SDK\Cmn\V20200825\Models\GetTaskRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\GetTaskResponse;
use AlibabaCloud\SDK\Cmn\V20200825\Models\ListAlarmStatusHistoriesRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\ListAlarmStatusHistoriesResponse;
use AlibabaCloud\SDK\Cmn\V20200825\Models\ListAlarmStatusRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\ListAlarmStatusResponse;
use AlibabaCloud\SDK\Cmn\V20200825\Models\ListAlarmStatusStatisticsRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\ListAlarmStatusStatisticsResponse;
use AlibabaCloud\SDK\Cmn\V20200825\Models\ListArchitectureAttributeRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\ListArchitectureAttributeResponse;
use AlibabaCloud\SDK\Cmn\V20200825\Models\ListConfigurationSpecificationsRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\ListConfigurationSpecificationsResponse;
use AlibabaCloud\SDK\Cmn\V20200825\Models\ListConfigurationVariateRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\ListConfigurationVariateResponse;
use AlibabaCloud\SDK\Cmn\V20200825\Models\ListConnectionPoliciesRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\ListConnectionPoliciesResponse;
use AlibabaCloud\SDK\Cmn\V20200825\Models\ListDedicatedLinesRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\ListDedicatedLinesResponse;
use AlibabaCloud\SDK\Cmn\V20200825\Models\ListDeviceFormsRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\ListDeviceFormsResponse;
use AlibabaCloud\SDK\Cmn\V20200825\Models\ListDevicePropertiesRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\ListDevicePropertiesResponse;
use AlibabaCloud\SDK\Cmn\V20200825\Models\ListDeviceResourcesRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\ListDeviceResourcesResponse;
use AlibabaCloud\SDK\Cmn\V20200825\Models\ListDevicesRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\ListDevicesResponse;
use AlibabaCloud\SDK\Cmn\V20200825\Models\ListDevicesShrinkRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\ListDeviceValuesRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\ListDeviceValuesResponse;
use AlibabaCloud\SDK\Cmn\V20200825\Models\ListEventDefinitionsRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\ListEventDefinitionsResponse;
use AlibabaCloud\SDK\Cmn\V20200825\Models\ListEventsRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\ListEventsResponse;
use AlibabaCloud\SDK\Cmn\V20200825\Models\ListInspectionDevicesRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\ListInspectionDevicesResponse;
use AlibabaCloud\SDK\Cmn\V20200825\Models\ListInspectionDevicesShrinkRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\ListInspectionTaskReportsRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\ListInspectionTaskReportsResponse;
use AlibabaCloud\SDK\Cmn\V20200825\Models\ListInspectionTasksRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\ListInspectionTasksResponse;
use AlibabaCloud\SDK\Cmn\V20200825\Models\ListInspectionTasksShrinkRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\ListInstancesResponse;
use AlibabaCloud\SDK\Cmn\V20200825\Models\ListIpBlocksRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\ListIpBlocksResponse;
use AlibabaCloud\SDK\Cmn\V20200825\Models\ListIpBlocksShrinkRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\ListLinksRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\ListLinksResponse;
use AlibabaCloud\SDK\Cmn\V20200825\Models\ListLogsRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\ListLogsResponse;
use AlibabaCloud\SDK\Cmn\V20200825\Models\ListMonitorDataRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\ListMonitorDataResponse;
use AlibabaCloud\SDK\Cmn\V20200825\Models\ListNotificationHistoriesRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\ListNotificationHistoriesResponse;
use AlibabaCloud\SDK\Cmn\V20200825\Models\ListNotificationHistoriesStatisticsRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\ListNotificationHistoriesStatisticsResponse;
use AlibabaCloud\SDK\Cmn\V20200825\Models\ListOsVersionsRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\ListOsVersionsResponse;
use AlibabaCloud\SDK\Cmn\V20200825\Models\ListPhysicalSpacesRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\ListPhysicalSpacesResponse;
use AlibabaCloud\SDK\Cmn\V20200825\Models\ListPhysicalSpacesShrinkRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\ListRegionsResponse;
use AlibabaCloud\SDK\Cmn\V20200825\Models\ListResourceInformationsRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\ListResourceInformationsResponse;
use AlibabaCloud\SDK\Cmn\V20200825\Models\ListResourceInstancesRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\ListResourceInstancesResponse;
use AlibabaCloud\SDK\Cmn\V20200825\Models\ListResourceTypesResponse;
use AlibabaCloud\SDK\Cmn\V20200825\Models\ListSetupProjectsRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\ListSetupProjectsResponse;
use AlibabaCloud\SDK\Cmn\V20200825\Models\ListSpaceModelsRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\ListSpaceModelsResponse;
use AlibabaCloud\SDK\Cmn\V20200825\Models\ListTasksHistoriesRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\ListTasksHistoriesResponse;
use AlibabaCloud\SDK\Cmn\V20200825\Models\ListTreePhysicalSpacesRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\ListTreePhysicalSpacesResponse;
use AlibabaCloud\SDK\Cmn\V20200825\Models\ListTreePhysicalSpacesShrinkRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\LockSpaceModelRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\LockSpaceModelResponse;
use AlibabaCloud\SDK\Cmn\V20200825\Models\ReleaseIPRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\ReleaseIPResponse;
use AlibabaCloud\SDK\Cmn\V20200825\Models\ReleaseIPShrinkRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\RetryTasksRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\RetryTasksResponse;
use AlibabaCloud\SDK\Cmn\V20200825\Models\RetryTasksShrinkRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\UpdateConfigurationSpecificationRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\UpdateConfigurationSpecificationResponse;
use AlibabaCloud\SDK\Cmn\V20200825\Models\UpdateConfigurationSpecificationShrinkRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\UpdateConfigurationVariateRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\UpdateConfigurationVariateResponse;
use AlibabaCloud\SDK\Cmn\V20200825\Models\UpdateDedicatedLineRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\UpdateDedicatedLineResponse;
use AlibabaCloud\SDK\Cmn\V20200825\Models\UpdateDeviceFormRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\UpdateDeviceFormResponse;
use AlibabaCloud\SDK\Cmn\V20200825\Models\UpdateDeviceFormShrinkRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\UpdateDevicePropertyRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\UpdateDevicePropertyResponse;
use AlibabaCloud\SDK\Cmn\V20200825\Models\UpdateDeviceRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\UpdateDeviceResourceRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\UpdateDeviceResourceResponse;
use AlibabaCloud\SDK\Cmn\V20200825\Models\UpdateDeviceResourceShrinkRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\UpdateDeviceResponse;
use AlibabaCloud\SDK\Cmn\V20200825\Models\UpdateDevicesRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\UpdateDevicesResponse;
use AlibabaCloud\SDK\Cmn\V20200825\Models\UpdateDevicesShrinkRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\UpdateEventDefinitionRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\UpdateEventDefinitionResponse;
use AlibabaCloud\SDK\Cmn\V20200825\Models\UpdateInformationKeyActionRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\UpdateInformationKeyActionResponse;
use AlibabaCloud\SDK\Cmn\V20200825\Models\UpdateInstanceRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\UpdateInstanceResponse;
use AlibabaCloud\SDK\Cmn\V20200825\Models\UpdateOsVersionRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\UpdateOsVersionResponse;
use AlibabaCloud\SDK\Cmn\V20200825\Models\UpdatePhysicalSpaceRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\UpdatePhysicalSpaceResponse;
use AlibabaCloud\SDK\Cmn\V20200825\Models\UpdatePhysicalSpaceShrinkRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\UpdateProjectProgressRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\UpdateProjectProgressResponse;
use AlibabaCloud\SDK\Cmn\V20200825\Models\UpdateResourceInformationRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\UpdateResourceInformationResponse;
use AlibabaCloud\SDK\Cmn\V20200825\Models\UpdateResourceInformationShrinkRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\UpdateResourceInstanceRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\UpdateResourceInstanceResponse;
use AlibabaCloud\SDK\Cmn\V20200825\Models\UpdateResourceInstanceShrinkRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\UpdateSetupProjectRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\UpdateSetupProjectResponse;
use AlibabaCloud\SDK\Cmn\V20200825\Models\UpdateSetupProjectShrinkRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\UpdateSpaceModelInstanceRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\UpdateSpaceModelInstanceResponse;
use AlibabaCloud\SDK\Cmn\V20200825\Models\UpdateSpaceModelRequest;
use AlibabaCloud\SDK\Cmn\V20200825\Models\UpdateSpaceModelResponse;
use AlibabaCloud\SDK\Cmn\V20200825\Models\UpdateSpaceModelShrinkRequest;
use AlibabaCloud\Tea\Tea;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Cmn extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('cmn', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param ApplyIPRequest $tmpReq
     * @param RuntimeOptions $runtime
     *
     * @return ApplyIPResponse
     */
    public function applyIPWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ApplyIPShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->deviceResourceIds)) {
            $request->deviceResourceIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->deviceResourceIds, 'DeviceResourceIds', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->businessTypeId)) {
            $query['BusinessTypeId'] = $request->businessTypeId;
        }
        if (!Utils::isUnset($request->businessTypeParams)) {
            $query['BusinessTypeParams'] = $request->businessTypeParams;
        }
        if (!Utils::isUnset($request->deviceResourceId)) {
            $query['DeviceResourceId'] = $request->deviceResourceId;
        }
        if (!Utils::isUnset($request->deviceResourceIdsShrink)) {
            $query['DeviceResourceIds'] = $request->deviceResourceIdsShrink;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->ipType)) {
            $query['IpType'] = $request->ipType;
        }
        if (!Utils::isUnset($request->loopbackPort)) {
            $query['LoopbackPort'] = $request->loopbackPort;
        }
        if (!Utils::isUnset($request->netLocation)) {
            $query['NetLocation'] = $request->netLocation;
        }
        if (!Utils::isUnset($request->setupProjectId)) {
            $query['SetupProjectId'] = $request->setupProjectId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ApplyIP',
            'version'     => '2020-08-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ApplyIPResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ApplyIPRequest $request
     *
     * @return ApplyIPResponse
     */
    public function applyIP($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->applyIPWithOptions($request, $runtime);
    }

    /**
     * @param AutoDutyRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return AutoDutyResponse
     */
    public function autoDutyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->dutyBatch)) {
            $body['DutyBatch'] = $request->dutyBatch;
        }
        if (!Utils::isUnset($request->dutyName)) {
            $body['DutyName'] = $request->dutyName;
        }
        if (!Utils::isUnset($request->endDate)) {
            $body['EndDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->startDate)) {
            $body['StartDate'] = $request->startDate;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AutoDuty',
            'version'     => '2020-08-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AutoDutyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AutoDutyRequest $request
     *
     * @return AutoDutyResponse
     */
    public function autoDuty($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->autoDutyWithOptions($request, $runtime);
    }

    /**
     * @param CloseEventRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return CloseEventResponse
     */
    public function closeEventWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->eventName)) {
            $body['EventName'] = $request->eventName;
        }
        if (!Utils::isUnset($request->eventObjectId)) {
            $body['EventObjectId'] = $request->eventObjectId;
        }
        if (!Utils::isUnset($request->eventType)) {
            $body['EventType'] = $request->eventType;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CloseEvent',
            'version'     => '2020-08-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CloseEventResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CloseEventRequest $request
     *
     * @return CloseEventResponse
     */
    public function closeEvent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->closeEventWithOptions($request, $runtime);
    }

    /**
     * @deprecated
     *   *
     * Deprecated
     *
     * @param CreateConfigurationSpecificationRequest $tmpReq  CreateConfigurationSpecificationRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateConfigurationSpecificationResponse CreateConfigurationSpecificationResponse
     */
    public function createConfigurationSpecificationWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateConfigurationSpecificationShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->relatedVariate)) {
            $request->relatedVariateShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->relatedVariate, 'RelatedVariate', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->architecture)) {
            $body['Architecture'] = $request->architecture;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->model)) {
            $body['Model'] = $request->model;
        }
        if (!Utils::isUnset($request->relatedVariateShrink)) {
            $body['RelatedVariate'] = $request->relatedVariateShrink;
        }
        if (!Utils::isUnset($request->role)) {
            $body['Role'] = $request->role;
        }
        if (!Utils::isUnset($request->specificationContent)) {
            $body['SpecificationContent'] = $request->specificationContent;
        }
        if (!Utils::isUnset($request->specificationName)) {
            $body['SpecificationName'] = $request->specificationName;
        }
        if (!Utils::isUnset($request->vendor)) {
            $body['Vendor'] = $request->vendor;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateConfigurationSpecification',
            'version'     => '2020-08-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateConfigurationSpecificationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @deprecated
     *   *
     * Deprecated
     *
     * @param CreateConfigurationSpecificationRequest $request CreateConfigurationSpecificationRequest
     *
     * @return CreateConfigurationSpecificationResponse CreateConfigurationSpecificationResponse
     */
    public function createConfigurationSpecification($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createConfigurationSpecificationWithOptions($request, $runtime);
    }

    /**
     * @param CreateConfigurationVariateRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return CreateConfigurationVariateResponse
     */
    public function createConfigurationVariateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->comment)) {
            $body['Comment'] = $request->comment;
        }
        if (!Utils::isUnset($request->formatFunction)) {
            $body['FormatFunction'] = $request->formatFunction;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->variateName)) {
            $body['VariateName'] = $request->variateName;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateConfigurationVariate',
            'version'     => '2020-08-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateConfigurationVariateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateConfigurationVariateRequest $request
     *
     * @return CreateConfigurationVariateResponse
     */
    public function createConfigurationVariate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createConfigurationVariateWithOptions($request, $runtime);
    }

    /**
     * @param CreateDedicatedLineRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateDedicatedLineResponse
     */
    public function createDedicatedLineWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $body = [];
        if (!Utils::isUnset($request->bandwidth)) {
            $body['Bandwidth'] = $request->bandwidth;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->contact)) {
            $body['Contact'] = $request->contact;
        }
        if (!Utils::isUnset($request->dedicatedLineGateway)) {
            $body['DedicatedLineGateway'] = $request->dedicatedLineGateway;
        }
        if (!Utils::isUnset($request->dedicatedLineIp)) {
            $body['DedicatedLineIp'] = $request->dedicatedLineIp;
        }
        if (!Utils::isUnset($request->dedicatedLineRole)) {
            $body['DedicatedLineRole'] = $request->dedicatedLineRole;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->deviceId)) {
            $body['DeviceId'] = $request->deviceId;
        }
        if (!Utils::isUnset($request->devicePort)) {
            $body['DevicePort'] = $request->devicePort;
        }
        if (!Utils::isUnset($request->expirationDate)) {
            $body['ExpirationDate'] = $request->expirationDate;
        }
        if (!Utils::isUnset($request->extAttributes)) {
            $body['ExtAttributes'] = $request->extAttributes;
        }
        if (!Utils::isUnset($request->isp)) {
            $body['Isp'] = $request->isp;
        }
        if (!Utils::isUnset($request->ispFormId)) {
            $body['IspFormId'] = $request->ispFormId;
        }
        if (!Utils::isUnset($request->ispId)) {
            $body['IspId'] = $request->ispId;
        }
        if (!Utils::isUnset($request->keyword)) {
            $body['Keyword'] = $request->keyword;
        }
        if (!Utils::isUnset($request->onlineDate)) {
            $body['OnlineDate'] = $request->onlineDate;
        }
        if (!Utils::isUnset($request->phone)) {
            $body['Phone'] = $request->phone;
        }
        if (!Utils::isUnset($request->physicalSpaceId)) {
            $body['PhysicalSpaceId'] = $request->physicalSpaceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateDedicatedLine',
            'version'     => '2020-08-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDedicatedLineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateDedicatedLineRequest $request
     *
     * @return CreateDedicatedLineResponse
     */
    public function createDedicatedLine($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDedicatedLineWithOptions($request, $runtime);
    }

    /**
     * @param CreateDeviceRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CreateDeviceResponse
     */
    public function createDeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->deviceFormId)) {
            $body['DeviceFormId'] = $request->deviceFormId;
        }
        if (!Utils::isUnset($request->enablePassword)) {
            $body['EnablePassword'] = $request->enablePassword;
        }
        if (!Utils::isUnset($request->extAttributes)) {
            $body['ExtAttributes'] = $request->extAttributes;
        }
        if (!Utils::isUnset($request->hostName)) {
            $body['HostName'] = $request->hostName;
        }
        if (!Utils::isUnset($request->ip)) {
            $body['Ip'] = $request->ip;
        }
        if (!Utils::isUnset($request->loginPassword)) {
            $body['LoginPassword'] = $request->loginPassword;
        }
        if (!Utils::isUnset($request->loginType)) {
            $body['LoginType'] = $request->loginType;
        }
        if (!Utils::isUnset($request->loginUsername)) {
            $body['LoginUsername'] = $request->loginUsername;
        }
        if (!Utils::isUnset($request->mac)) {
            $body['Mac'] = $request->mac;
        }
        if (!Utils::isUnset($request->model)) {
            $body['Model'] = $request->model;
        }
        if (!Utils::isUnset($request->physicalSpaceId)) {
            $body['PhysicalSpaceId'] = $request->physicalSpaceId;
        }
        if (!Utils::isUnset($request->securityDomain)) {
            $body['SecurityDomain'] = $request->securityDomain;
        }
        if (!Utils::isUnset($request->serviceStatus)) {
            $body['ServiceStatus'] = $request->serviceStatus;
        }
        if (!Utils::isUnset($request->sn)) {
            $body['Sn'] = $request->sn;
        }
        if (!Utils::isUnset($request->snmpAccountType)) {
            $body['SnmpAccountType'] = $request->snmpAccountType;
        }
        if (!Utils::isUnset($request->snmpAccountVersion)) {
            $body['SnmpAccountVersion'] = $request->snmpAccountVersion;
        }
        if (!Utils::isUnset($request->snmpAuthPassphrase)) {
            $body['SnmpAuthPassphrase'] = $request->snmpAuthPassphrase;
        }
        if (!Utils::isUnset($request->snmpAuthProtocol)) {
            $body['SnmpAuthProtocol'] = $request->snmpAuthProtocol;
        }
        if (!Utils::isUnset($request->snmpCommunity)) {
            $body['SnmpCommunity'] = $request->snmpCommunity;
        }
        if (!Utils::isUnset($request->snmpPrivacyPassphrase)) {
            $body['SnmpPrivacyPassphrase'] = $request->snmpPrivacyPassphrase;
        }
        if (!Utils::isUnset($request->snmpPrivacyProtocol)) {
            $body['SnmpPrivacyProtocol'] = $request->snmpPrivacyProtocol;
        }
        if (!Utils::isUnset($request->snmpSecurityLevel)) {
            $body['SnmpSecurityLevel'] = $request->snmpSecurityLevel;
        }
        if (!Utils::isUnset($request->snmpUsername)) {
            $body['SnmpUsername'] = $request->snmpUsername;
        }
        if (!Utils::isUnset($request->vendor)) {
            $body['Vendor'] = $request->vendor;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateDevice',
            'version'     => '2020-08-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDeviceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateDeviceRequest $request
     *
     * @return CreateDeviceResponse
     */
    public function createDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDeviceWithOptions($request, $runtime);
    }

    /**
     * @param CreateDeviceFormRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateDeviceFormResponse
     */
    public function createDeviceFormWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $body = [];
        if (!Utils::isUnset($request->accountConfig)) {
            $body['AccountConfig'] = $request->accountConfig;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->configCompare)) {
            $body['ConfigCompare'] = $request->configCompare;
        }
        if (!Utils::isUnset($request->detailDisplay)) {
            $body['DetailDisplay'] = $request->detailDisplay;
        }
        if (!Utils::isUnset($request->deviceFormName)) {
            $body['DeviceFormName'] = $request->deviceFormName;
        }
        if (!Utils::isUnset($request->relatedDeviceFormId)) {
            $body['RelatedDeviceFormId'] = $request->relatedDeviceFormId;
        }
        if (!Utils::isUnset($request->resourceUse)) {
            $body['ResourceUse'] = $request->resourceUse;
        }
        if (!Utils::isUnset($request->script)) {
            $body['Script'] = $request->script;
        }
        if (!Utils::isUnset($request->uniqueKey)) {
            $body['UniqueKey'] = $request->uniqueKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateDeviceForm',
            'version'     => '2020-08-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDeviceFormResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateDeviceFormRequest $request
     *
     * @return CreateDeviceFormResponse
     */
    public function createDeviceForm($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDeviceFormWithOptions($request, $runtime);
    }

    /**
     * @param CreateDevicePropertyRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateDevicePropertyResponse
     */
    public function createDevicePropertyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->deviceFormId)) {
            $body['DeviceFormId'] = $request->deviceFormId;
        }
        if (!Utils::isUnset($request->propertyContent)) {
            $body['PropertyContent'] = $request->propertyContent;
        }
        if (!Utils::isUnset($request->propertyFormat)) {
            $body['PropertyFormat'] = $request->propertyFormat;
        }
        if (!Utils::isUnset($request->propertyKey)) {
            $body['PropertyKey'] = $request->propertyKey;
        }
        if (!Utils::isUnset($request->propertyName)) {
            $body['PropertyName'] = $request->propertyName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateDeviceProperty',
            'version'     => '2020-08-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDevicePropertyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateDevicePropertyRequest $request
     *
     * @return CreateDevicePropertyResponse
     */
    public function createDeviceProperty($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDevicePropertyWithOptions($request, $runtime);
    }

    /**
     * @param CreateDevicesRequest $tmpReq
     * @param RuntimeOptions       $runtime
     *
     * @return CreateDevicesResponse
     */
    public function createDevicesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateDevicesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->deviceParamModelList)) {
            $request->deviceParamModelListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->deviceParamModelList, 'DeviceParamModelList', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->deviceFormId)) {
            $body['DeviceFormId'] = $request->deviceFormId;
        }
        if (!Utils::isUnset($request->deviceParamModelListShrink)) {
            $body['DeviceParamModelList'] = $request->deviceParamModelListShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateDevices',
            'version'     => '2020-08-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDevicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateDevicesRequest $request
     *
     * @return CreateDevicesResponse
     */
    public function createDevices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDevicesWithOptions($request, $runtime);
    }

    /**
     * @param CreateEventDefinitionRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateEventDefinitionResponse
     */
    public function createEventDefinitionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->eventName)) {
            $body['EventName'] = $request->eventName;
        }
        if (!Utils::isUnset($request->eventType)) {
            $body['EventType'] = $request->eventType;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->templateId)) {
            $body['TemplateId'] = $request->templateId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateEventDefinition',
            'version'     => '2020-08-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateEventDefinitionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateEventDefinitionRequest $request
     *
     * @return CreateEventDefinitionResponse
     */
    public function createEventDefinition($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createEventDefinitionWithOptions($request, $runtime);
    }

    /**
     * @param CreateLinkJobRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateLinkJobResponse
     */
    public function createLinkJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $body = [];
        if (!Utils::isUnset($request->autoConfirm)) {
            $body['AutoConfirm'] = $request->autoConfirm;
        }
        if (!Utils::isUnset($request->doubleConvertStrategy)) {
            $body['DoubleConvertStrategy'] = $request->doubleConvertStrategy;
        }
        if (!Utils::isUnset($request->jobId)) {
            $body['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->singleStrategy)) {
            $body['SingleStrategy'] = $request->singleStrategy;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateLinkJob',
            'version'     => '2020-08-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateLinkJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateLinkJobRequest $request
     *
     * @return CreateLinkJobResponse
     */
    public function createLinkJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createLinkJobWithOptions($request, $runtime);
    }

    /**
     * @param CreateMonitorItemRequest $tmpReq
     * @param RuntimeOptions           $runtime
     *
     * @return CreateMonitorItemResponse
     */
    public function createMonitorItemWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateMonitorItemShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->alarmRuleList)) {
            $request->alarmRuleListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->alarmRuleList, 'AlarmRuleList', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $body = [];
        if (!Utils::isUnset($request->alarmRuleListShrink)) {
            $body['AlarmRuleList'] = $request->alarmRuleListShrink;
        }
        if (!Utils::isUnset($request->analysisCode)) {
            $body['AnalysisCode'] = $request->analysisCode;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->collectionType)) {
            $body['CollectionType'] = $request->collectionType;
        }
        if (!Utils::isUnset($request->config)) {
            $body['Config'] = $request->config;
        }
        if (!Utils::isUnset($request->dataItem)) {
            $body['DataItem'] = $request->dataItem;
        }
        if (!Utils::isUnset($request->deviceForm)) {
            $body['DeviceForm'] = $request->deviceForm;
        }
        if (!Utils::isUnset($request->effective)) {
            $body['Effective'] = $request->effective;
        }
        if (!Utils::isUnset($request->execInterval)) {
            $body['ExecInterval'] = $request->execInterval;
        }
        if (!Utils::isUnset($request->monitorItemDescription)) {
            $body['MonitorItemDescription'] = $request->monitorItemDescription;
        }
        if (!Utils::isUnset($request->monitorItemName)) {
            $body['MonitorItemName'] = $request->monitorItemName;
        }
        if (!Utils::isUnset($request->securityDomain)) {
            $body['SecurityDomain'] = $request->securityDomain;
        }
        if (!Utils::isUnset($request->type)) {
            $body['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateMonitorItem',
            'version'     => '2020-08-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateMonitorItemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateMonitorItemRequest $request
     *
     * @return CreateMonitorItemResponse
     */
    public function createMonitorItem($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMonitorItemWithOptions($request, $runtime);
    }

    /**
     * @param CreateOsVersionRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateOsVersionResponse
     */
    public function createOsVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bootPatch)) {
            $body['BootPatch'] = $request->bootPatch;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->createTime)) {
            $body['CreateTime'] = $request->createTime;
        }
        if (!Utils::isUnset($request->featurePatch)) {
            $body['FeaturePatch'] = $request->featurePatch;
        }
        if (!Utils::isUnset($request->fileName)) {
            $body['FileName'] = $request->fileName;
        }
        if (!Utils::isUnset($request->filePath)) {
            $body['FilePath'] = $request->filePath;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->model)) {
            $body['Model'] = $request->model;
        }
        if (!Utils::isUnset($request->osVersion)) {
            $body['OsVersion'] = $request->osVersion;
        }
        if (!Utils::isUnset($request->status)) {
            $body['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->systemPatch)) {
            $body['SystemPatch'] = $request->systemPatch;
        }
        if (!Utils::isUnset($request->vendor)) {
            $body['Vendor'] = $request->vendor;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateOsVersion',
            'version'     => '2020-08-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateOsVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateOsVersionRequest $request
     *
     * @return CreateOsVersionResponse
     */
    public function createOsVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createOsVersionWithOptions($request, $runtime);
    }

    /**
     * @param CreatePhysicalSpaceRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return CreatePhysicalSpaceResponse
     */
    public function createPhysicalSpaceWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreatePhysicalSpaceShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->securityDomainList)) {
            $request->securityDomainListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->securityDomainList, 'SecurityDomainList', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $body = [];
        if (!Utils::isUnset($request->address)) {
            $body['Address'] = $request->address;
        }
        if (!Utils::isUnset($request->city)) {
            $body['City'] = $request->city;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->country)) {
            $body['Country'] = $request->country;
        }
        if (!Utils::isUnset($request->owner)) {
            $body['Owner'] = $request->owner;
        }
        if (!Utils::isUnset($request->parentUid)) {
            $body['ParentUid'] = $request->parentUid;
        }
        if (!Utils::isUnset($request->physicalSpaceName)) {
            $body['PhysicalSpaceName'] = $request->physicalSpaceName;
        }
        if (!Utils::isUnset($request->province)) {
            $body['Province'] = $request->province;
        }
        if (!Utils::isUnset($request->remark)) {
            $body['Remark'] = $request->remark;
        }
        if (!Utils::isUnset($request->securityDomainListShrink)) {
            $body['SecurityDomainList'] = $request->securityDomainListShrink;
        }
        if (!Utils::isUnset($request->spaceAbbreviation)) {
            $body['SpaceAbbreviation'] = $request->spaceAbbreviation;
        }
        if (!Utils::isUnset($request->spaceType)) {
            $body['SpaceType'] = $request->spaceType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreatePhysicalSpace',
            'version'     => '2020-08-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreatePhysicalSpaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreatePhysicalSpaceRequest $request
     *
     * @return CreatePhysicalSpaceResponse
     */
    public function createPhysicalSpace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPhysicalSpaceWithOptions($request, $runtime);
    }

    /**
     * @param CreateRealtimeTaskRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateRealtimeTaskResponse
     */
    public function createRealtimeTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $body = [];
        if (!Utils::isUnset($request->checkDuplicatePolicy)) {
            $body['CheckDuplicatePolicy'] = $request->checkDuplicatePolicy;
        }
        if (!Utils::isUnset($request->deviceId)) {
            $body['DeviceId'] = $request->deviceId;
        }
        if (!Utils::isUnset($request->itemName)) {
            $body['ItemName'] = $request->itemName;
        }
        if (!Utils::isUnset($request->script)) {
            $body['Script'] = $request->script;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateRealtimeTask',
            'version'     => '2020-08-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateRealtimeTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateRealtimeTaskRequest $request
     *
     * @return CreateRealtimeTaskResponse
     */
    public function createRealtimeTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRealtimeTaskWithOptions($request, $runtime);
    }

    /**
     * @deprecated
     *   *
     * Deprecated
     *
     * @param CreateResourceInformationRequest $request CreateResourceInformationRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateResourceInformationResponse CreateResourceInformationResponse
     */
    public function createResourceInformationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $body = [];
        if (!Utils::isUnset($request->architectureId)) {
            $body['ArchitectureId'] = $request->architectureId;
        }
        $bodyFlat = [];
        if (!Utils::isUnset($request->information)) {
            $bodyFlat['Information'] = $request->information;
        }
        if (!Utils::isUnset($request->resourceAttribute)) {
            $body['ResourceAttribute'] = $request->resourceAttribute;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $body['ResourceType'] = $request->resourceType;
        }
        $body = Tea::merge($body, OpenApiUtilClient::query($bodyFlat));
        $req  = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateResourceInformation',
            'version'     => '2020-08-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateResourceInformationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @deprecated
     *   *
     * Deprecated
     *
     * @param CreateResourceInformationRequest $request CreateResourceInformationRequest
     *
     * @return CreateResourceInformationResponse CreateResourceInformationResponse
     */
    public function createResourceInformation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createResourceInformationWithOptions($request, $runtime);
    }

    /**
     * @param CreateSetupProjectRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateSetupProjectResponse
     */
    public function createSetupProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $body = [];
        if (!Utils::isUnset($request->deliveryTime)) {
            $body['DeliveryTime'] = $request->deliveryTime;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->spaceId)) {
            $body['SpaceId'] = $request->spaceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateSetupProject',
            'version'     => '2020-08-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateSetupProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateSetupProjectRequest $request
     *
     * @return CreateSetupProjectResponse
     */
    public function createSetupProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSetupProjectWithOptions($request, $runtime);
    }

    /**
     * @param CreateSpaceModelRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return CreateSpaceModelResponse
     */
    public function createSpaceModelWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateSpaceModelShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->sort)) {
            $request->sortShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->sort, 'Sort', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->sortShrink)) {
            $body['Sort'] = $request->sortShrink;
        }
        if (!Utils::isUnset($request->spaceType)) {
            $body['SpaceType'] = $request->spaceType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateSpaceModel',
            'version'     => '2020-08-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateSpaceModelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateSpaceModelRequest $request
     *
     * @return CreateSpaceModelResponse
     */
    public function createSpaceModel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSpaceModelWithOptions($request, $runtime);
    }

    /**
     * @param CreateTaskRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return CreateTaskResponse
     */
    public function createTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->params)) {
            $body['Params'] = $request->params;
        }
        if (!Utils::isUnset($request->templateId)) {
            $body['TemplateId'] = $request->templateId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateTask',
            'version'     => '2020-08-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateTaskRequest $request
     *
     * @return CreateTaskResponse
     */
    public function createTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTaskWithOptions($request, $runtime);
    }

    /**
     * @param CreateTimePeriodRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateTimePeriodResponse
     */
    public function createTimePeriodWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->expression)) {
            $body['Expression'] = $request->expression;
        }
        if (!Utils::isUnset($request->timePeriodDescription)) {
            $body['TimePeriodDescription'] = $request->timePeriodDescription;
        }
        if (!Utils::isUnset($request->timePeriodName)) {
            $body['TimePeriodName'] = $request->timePeriodName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateTimePeriod',
            'version'     => '2020-08-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateTimePeriodResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateTimePeriodRequest $request
     *
     * @return CreateTimePeriodResponse
     */
    public function createTimePeriod($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTimePeriodWithOptions($request, $runtime);
    }

    /**
     * @deprecated
     *   *
     * Deprecated
     *
     * @param DeleteConfigurationSpecificationRequest $request DeleteConfigurationSpecificationRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteConfigurationSpecificationResponse DeleteConfigurationSpecificationResponse
     */
    public function deleteConfigurationSpecificationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $body = [];
        if (!Utils::isUnset($request->configurationSpecificationId)) {
            $body['ConfigurationSpecificationId'] = $request->configurationSpecificationId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteConfigurationSpecification',
            'version'     => '2020-08-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteConfigurationSpecificationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @deprecated
     *   *
     * Deprecated
     *
     * @param DeleteConfigurationSpecificationRequest $request DeleteConfigurationSpecificationRequest
     *
     * @return DeleteConfigurationSpecificationResponse DeleteConfigurationSpecificationResponse
     */
    public function deleteConfigurationSpecification($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteConfigurationSpecificationWithOptions($request, $runtime);
    }

    /**
     * @param DeleteConfigurationVariateRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DeleteConfigurationVariateResponse
     */
    public function deleteConfigurationVariateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->configurationVariateId)) {
            $body['ConfigurationVariateId'] = $request->configurationVariateId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteConfigurationVariate',
            'version'     => '2020-08-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteConfigurationVariateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteConfigurationVariateRequest $request
     *
     * @return DeleteConfigurationVariateResponse
     */
    public function deleteConfigurationVariate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteConfigurationVariateWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDedicatedLineRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteDedicatedLineResponse
     */
    public function deleteDedicatedLineWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $body = [];
        if (!Utils::isUnset($request->dedicatedLineId)) {
            $body['DedicatedLineId'] = $request->dedicatedLineId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteDedicatedLine',
            'version'     => '2020-08-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDedicatedLineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteDedicatedLineRequest $request
     *
     * @return DeleteDedicatedLineResponse
     */
    public function deleteDedicatedLine($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDedicatedLineWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDeliveryArchVersionRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DeleteDeliveryArchVersionResponse
     */
    public function deleteDeliveryArchVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $body = [];
        if (!Utils::isUnset($request->deliveryArchVersionId)) {
            $body['DeliveryArchVersionId'] = $request->deliveryArchVersionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteDeliveryArchVersion',
            'version'     => '2020-08-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDeliveryArchVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteDeliveryArchVersionRequest $request
     *
     * @return DeleteDeliveryArchVersionResponse
     */
    public function deleteDeliveryArchVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDeliveryArchVersionWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDeliveryProjectRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteDeliveryProjectResponse
     */
    public function deleteDeliveryProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $body = [];
        if (!Utils::isUnset($request->deliveryProjectId)) {
            $body['DeliveryProjectId'] = $request->deliveryProjectId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteDeliveryProject',
            'version'     => '2020-08-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDeliveryProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteDeliveryProjectRequest $request
     *
     * @return DeleteDeliveryProjectResponse
     */
    public function deleteDeliveryProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDeliveryProjectWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDeviceRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteDeviceResponse
     */
    public function deleteDeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $body = [];
        if (!Utils::isUnset($request->deviceId)) {
            $body['DeviceId'] = $request->deviceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteDevice',
            'version'     => '2020-08-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDeviceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteDeviceRequest $request
     *
     * @return DeleteDeviceResponse
     */
    public function deleteDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDeviceWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDeviceFormRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteDeviceFormResponse
     */
    public function deleteDeviceFormWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $body = [];
        if (!Utils::isUnset($request->deviceFormId)) {
            $body['DeviceFormId'] = $request->deviceFormId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteDeviceForm',
            'version'     => '2020-08-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDeviceFormResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteDeviceFormRequest $request
     *
     * @return DeleteDeviceFormResponse
     */
    public function deleteDeviceForm($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDeviceFormWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDevicePropertyRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteDevicePropertyResponse
     */
    public function deleteDevicePropertyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $body = [];
        if (!Utils::isUnset($request->devicePropertyId)) {
            $body['DevicePropertyId'] = $request->devicePropertyId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteDeviceProperty',
            'version'     => '2020-08-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDevicePropertyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteDevicePropertyRequest $request
     *
     * @return DeleteDevicePropertyResponse
     */
    public function deleteDeviceProperty($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDevicePropertyWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDeviceResourceRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteDeviceResourceResponse
     */
    public function deleteDeviceResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->deviceResourceId)) {
            $query['DeviceResourceId'] = $request->deviceResourceId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteDeviceResource',
            'version'     => '2020-08-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDeviceResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteDeviceResourceRequest $request
     *
     * @return DeleteDeviceResourceResponse
     */
    public function deleteDeviceResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDeviceResourceWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDevicesRequest $tmpReq
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteDevicesResponse
     */
    public function deleteDevicesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DeleteDevicesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->deviceIds)) {
            $request->deviceIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->deviceIds, 'DeviceIds', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $body = [];
        if (!Utils::isUnset($request->deviceIdsShrink)) {
            $body['DeviceIds'] = $request->deviceIdsShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteDevices',
            'version'     => '2020-08-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDevicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteDevicesRequest $request
     *
     * @return DeleteDevicesResponse
     */
    public function deleteDevices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDevicesWithOptions($request, $runtime);
    }

    /**
     * @param DeleteEventDefinitionRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteEventDefinitionResponse
     */
    public function deleteEventDefinitionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->eventId)) {
            $body['EventId'] = $request->eventId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteEventDefinition',
            'version'     => '2020-08-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteEventDefinitionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteEventDefinitionRequest $request
     *
     * @return DeleteEventDefinitionResponse
     */
    public function deleteEventDefinition($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteEventDefinitionWithOptions($request, $runtime);
    }

    /**
     * @param DeleteInspectionTaskRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteInspectionTaskResponse
     */
    public function deleteInspectionTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteInspectionTask',
            'version'     => '2020-08-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteInspectionTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteInspectionTaskRequest $request
     *
     * @return DeleteInspectionTaskResponse
     */
    public function deleteInspectionTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteInspectionTaskWithOptions($request, $runtime);
    }

    /**
     * @param DeleteOsVersionRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteOsVersionResponse
     */
    public function deleteOsVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->osVersionId)) {
            $body['OsVersionId'] = $request->osVersionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteOsVersion',
            'version'     => '2020-08-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteOsVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteOsVersionRequest $request
     *
     * @return DeleteOsVersionResponse
     */
    public function deleteOsVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteOsVersionWithOptions($request, $runtime);
    }

    /**
     * @param DeletePhysicalSpaceRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeletePhysicalSpaceResponse
     */
    public function deletePhysicalSpaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $body = [];
        if (!Utils::isUnset($request->physicalSpaceId)) {
            $body['PhysicalSpaceId'] = $request->physicalSpaceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeletePhysicalSpace',
            'version'     => '2020-08-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeletePhysicalSpaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeletePhysicalSpaceRequest $request
     *
     * @return DeletePhysicalSpaceResponse
     */
    public function deletePhysicalSpace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deletePhysicalSpaceWithOptions($request, $runtime);
    }

    /**
     * @param DeleteResourceInformationRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DeleteResourceInformationResponse
     */
    public function deleteResourceInformationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $body = [];
        if (!Utils::isUnset($request->resourceInformationId)) {
            $body['ResourceInformationId'] = $request->resourceInformationId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteResourceInformation',
            'version'     => '2020-08-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteResourceInformationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteResourceInformationRequest $request
     *
     * @return DeleteResourceInformationResponse
     */
    public function deleteResourceInformation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteResourceInformationWithOptions($request, $runtime);
    }

    /**
     * @param DeleteSetupProjectRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteSetupProjectResponse
     */
    public function deleteSetupProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $body = [];
        if (!Utils::isUnset($request->setupProjectId)) {
            $body['SetupProjectId'] = $request->setupProjectId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteSetupProject',
            'version'     => '2020-08-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteSetupProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteSetupProjectRequest $request
     *
     * @return DeleteSetupProjectResponse
     */
    public function deleteSetupProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSetupProjectWithOptions($request, $runtime);
    }

    /**
     * @param DeleteSpaceModelRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteSpaceModelResponse
     */
    public function deleteSpaceModelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->spaceModelId)) {
            $query['SpaceModelId'] = $request->spaceModelId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteSpaceModel',
            'version'     => '2020-08-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteSpaceModelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteSpaceModelRequest $request
     *
     * @return DeleteSpaceModelResponse
     */
    public function deleteSpaceModel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSpaceModelWithOptions($request, $runtime);
    }

    /**
     * @param DisableNotificationRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return DisableNotificationResponse
     */
    public function disableNotificationWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DisableNotificationShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->list_)) {
            $request->listShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->list_, 'List', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $body = [];
        if (!Utils::isUnset($request->expiryTime)) {
            $body['ExpiryTime'] = $request->expiryTime;
        }
        if (!Utils::isUnset($request->listShrink)) {
            $body['List'] = $request->listShrink;
        }
        if (!Utils::isUnset($request->reason)) {
            $body['Reason'] = $request->reason;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DisableNotification',
            'version'     => '2020-08-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DisableNotificationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DisableNotificationRequest $request
     *
     * @return DisableNotificationResponse
     */
    public function disableNotification($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableNotificationWithOptions($request, $runtime);
    }

    /**
     * @param DownloadDeviceResourceRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return DownloadDeviceResourceResponse
     */
    public function downloadDeviceResourceWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DownloadDeviceResourceShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->deviceResourceIds)) {
            $request->deviceResourceIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->deviceResourceIds, 'DeviceResourceIds', 'json');
        }
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DownloadDeviceResource',
            'version'     => '2020-08-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DownloadDeviceResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DownloadDeviceResourceRequest $request
     *
     * @return DownloadDeviceResourceResponse
     */
    public function downloadDeviceResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->downloadDeviceResourceWithOptions($request, $runtime);
    }

    /**
     * @param EnableNotificationRequest $tmpReq
     * @param RuntimeOptions            $runtime
     *
     * @return EnableNotificationResponse
     */
    public function enableNotificationWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new EnableNotificationShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->list_)) {
            $request->listShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->list_, 'List', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->listShrink)) {
            $body['List'] = $request->listShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'EnableNotification',
            'version'     => '2020-08-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EnableNotificationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param EnableNotificationRequest $request
     *
     * @return EnableNotificationResponse
     */
    public function enableNotification($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableNotificationWithOptions($request, $runtime);
    }

    /**
     * @param GetAlarmStatusRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetAlarmStatusResponse
     */
    public function getAlarmStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAlarmStatus',
            'version'     => '2020-08-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAlarmStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetAlarmStatusRequest $request
     *
     * @return GetAlarmStatusResponse
     */
    public function getAlarmStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAlarmStatusWithOptions($request, $runtime);
    }

    /**
     * @deprecated
     *   *
     * Deprecated
     *
     * @param GetConfigurationSpecificationRequest $request GetConfigurationSpecificationRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return GetConfigurationSpecificationResponse GetConfigurationSpecificationResponse
     */
    public function getConfigurationSpecificationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetConfigurationSpecification',
            'version'     => '2020-08-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetConfigurationSpecificationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @deprecated
     *   *
     * Deprecated
     *
     * @param GetConfigurationSpecificationRequest $request GetConfigurationSpecificationRequest
     *
     * @return GetConfigurationSpecificationResponse GetConfigurationSpecificationResponse
     */
    public function getConfigurationSpecification($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getConfigurationSpecificationWithOptions($request, $runtime);
    }

    /**
     * @param GetConfigurationVariateRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetConfigurationVariateResponse
     */
    public function getConfigurationVariateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetConfigurationVariate',
            'version'     => '2020-08-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetConfigurationVariateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetConfigurationVariateRequest $request
     *
     * @return GetConfigurationVariateResponse
     */
    public function getConfigurationVariate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getConfigurationVariateWithOptions($request, $runtime);
    }

    /**
     * @param GetDedicatedLineRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetDedicatedLineResponse
     */
    public function getDedicatedLineWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDedicatedLine',
            'version'     => '2020-08-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDedicatedLineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetDedicatedLineRequest $request
     *
     * @return GetDedicatedLineResponse
     */
    public function getDedicatedLine($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDedicatedLineWithOptions($request, $runtime);
    }

    /**
     * @param GetDeviceRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return GetDeviceResponse
     */
    public function getDeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDevice',
            'version'     => '2020-08-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDeviceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetDeviceRequest $request
     *
     * @return GetDeviceResponse
     */
    public function getDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDeviceWithOptions($request, $runtime);
    }

    /**
     * @param GetDeviceConfigRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetDeviceConfigResponse
     */
    public function getDeviceConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDeviceConfig',
            'version'     => '2020-08-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDeviceConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetDeviceConfigRequest $request
     *
     * @return GetDeviceConfigResponse
     */
    public function getDeviceConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDeviceConfigWithOptions($request, $runtime);
    }

    /**
     * @param GetDeviceConfigDateRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetDeviceConfigDateResponse
     */
    public function getDeviceConfigDateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDeviceConfigDate',
            'version'     => '2020-08-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDeviceConfigDateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetDeviceConfigDateRequest $request
     *
     * @return GetDeviceConfigDateResponse
     */
    public function getDeviceConfigDate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDeviceConfigDateWithOptions($request, $runtime);
    }

    /**
     * @param GetDeviceConfigDiffRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetDeviceConfigDiffResponse
     */
    public function getDeviceConfigDiffWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDeviceConfigDiff',
            'version'     => '2020-08-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDeviceConfigDiffResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetDeviceConfigDiffRequest $request
     *
     * @return GetDeviceConfigDiffResponse
     */
    public function getDeviceConfigDiff($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDeviceConfigDiffWithOptions($request, $runtime);
    }

    /**
     * @param GetDeviceFormRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetDeviceFormResponse
     */
    public function getDeviceFormWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDeviceForm',
            'version'     => '2020-08-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDeviceFormResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetDeviceFormRequest $request
     *
     * @return GetDeviceFormResponse
     */
    public function getDeviceForm($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDeviceFormWithOptions($request, $runtime);
    }

    /**
     * @param GetDeviceOpLogRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetDeviceOpLogResponse
     */
    public function getDeviceOpLogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDeviceOpLog',
            'version'     => '2020-08-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDeviceOpLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetDeviceOpLogRequest $request
     *
     * @return GetDeviceOpLogResponse
     */
    public function getDeviceOpLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDeviceOpLogWithOptions($request, $runtime);
    }

    /**
     * @param GetDevicePropertyRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetDevicePropertyResponse
     */
    public function getDevicePropertyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDeviceProperty',
            'version'     => '2020-08-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDevicePropertyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetDevicePropertyRequest $request
     *
     * @return GetDevicePropertyResponse
     */
    public function getDeviceProperty($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDevicePropertyWithOptions($request, $runtime);
    }

    /**
     * @param GetDeviceResourceRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetDeviceResourceResponse
     */
    public function getDeviceResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDeviceResource',
            'version'     => '2020-08-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDeviceResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetDeviceResourceRequest $request
     *
     * @return GetDeviceResourceResponse
     */
    public function getDeviceResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDeviceResourceWithOptions($request, $runtime);
    }

    /**
     * @param GetInspectionTaskRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetInspectionTaskResponse
     */
    public function getInspectionTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetInspectionTask',
            'version'     => '2020-08-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetInspectionTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetInspectionTaskRequest $request
     *
     * @return GetInspectionTaskResponse
     */
    public function getInspectionTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInspectionTaskWithOptions($request, $runtime);
    }

    /**
     * @param GetMonitorItemRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetMonitorItemResponse
     */
    public function getMonitorItemWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetMonitorItem',
            'version'     => '2020-08-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetMonitorItemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetMonitorItemRequest $request
     *
     * @return GetMonitorItemResponse
     */
    public function getMonitorItem($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMonitorItemWithOptions($request, $runtime);
    }

    /**
     * @param GetOsDownloadPathRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetOsDownloadPathResponse
     */
    public function getOsDownloadPathWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetOsDownloadPath',
            'version'     => '2020-08-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetOsDownloadPathResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetOsDownloadPathRequest $request
     *
     * @return GetOsDownloadPathResponse
     */
    public function getOsDownloadPath($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOsDownloadPathWithOptions($request, $runtime);
    }

    /**
     * @param GetOsVersionRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetOsVersionResponse
     */
    public function getOsVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetOsVersion',
            'version'     => '2020-08-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetOsVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetOsVersionRequest $request
     *
     * @return GetOsVersionResponse
     */
    public function getOsVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOsVersionWithOptions($request, $runtime);
    }

    /**
     * @param GetOssPolicyRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetOssPolicyResponse
     */
    public function getOssPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetOssPolicy',
            'version'     => '2020-08-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetOssPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetOssPolicyRequest $request
     *
     * @return GetOssPolicyResponse
     */
    public function getOssPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOssPolicyWithOptions($request, $runtime);
    }

    /**
     * @param GetPhysicalSpaceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetPhysicalSpaceResponse
     */
    public function getPhysicalSpaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetPhysicalSpace',
            'version'     => '2020-08-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetPhysicalSpaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetPhysicalSpaceRequest $request
     *
     * @return GetPhysicalSpaceResponse
     */
    public function getPhysicalSpace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPhysicalSpaceWithOptions($request, $runtime);
    }

    /**
     * @param GetPhysicalSpaceTopoRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetPhysicalSpaceTopoResponse
     */
    public function getPhysicalSpaceTopoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->physicalSpaceId)) {
            $query['PhysicalSpaceId'] = $request->physicalSpaceId;
        }
        if (!Utils::isUnset($request->topoType)) {
            $query['TopoType'] = $request->topoType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetPhysicalSpaceTopo',
            'version'     => '2020-08-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetPhysicalSpaceTopoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetPhysicalSpaceTopoRequest $request
     *
     * @return GetPhysicalSpaceTopoResponse
     */
    public function getPhysicalSpaceTopo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPhysicalSpaceTopoWithOptions($request, $runtime);
    }

    /**
     * @param GetRealtimeTaskRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetRealtimeTaskResponse
     */
    public function getRealtimeTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetRealtimeTask',
            'version'     => '2020-08-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetRealtimeTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetRealtimeTaskRequest $request
     *
     * @return GetRealtimeTaskResponse
     */
    public function getRealtimeTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRealtimeTaskWithOptions($request, $runtime);
    }

    /**
     * @param GetScheduleWorkerRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetScheduleWorkerResponse
     */
    public function getScheduleWorkerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetScheduleWorker',
            'version'     => '2020-08-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetScheduleWorkerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetScheduleWorkerRequest $request
     *
     * @return GetScheduleWorkerResponse
     */
    public function getScheduleWorker($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getScheduleWorkerWithOptions($request, $runtime);
    }

    /**
     * @param GetSetupProjectRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetSetupProjectResponse
     */
    public function getSetupProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetSetupProject',
            'version'     => '2020-08-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetSetupProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetSetupProjectRequest $request
     *
     * @return GetSetupProjectResponse
     */
    public function getSetupProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSetupProjectWithOptions($request, $runtime);
    }

    /**
     * @param GetSpaceModelRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetSpaceModelResponse
     */
    public function getSpaceModelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetSpaceModel',
            'version'     => '2020-08-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetSpaceModelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetSpaceModelRequest $request
     *
     * @return GetSpaceModelResponse
     */
    public function getSpaceModel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSpaceModelWithOptions($request, $runtime);
    }

    /**
     * @param GetSpaceModelInstanceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetSpaceModelInstanceResponse
     */
    public function getSpaceModelInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetSpaceModelInstance',
            'version'     => '2020-08-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetSpaceModelInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetSpaceModelInstanceRequest $request
     *
     * @return GetSpaceModelInstanceResponse
     */
    public function getSpaceModelInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSpaceModelInstanceWithOptions($request, $runtime);
    }

    /**
     * @param GetSpaceModelSortRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetSpaceModelSortResponse
     */
    public function getSpaceModelSortWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetSpaceModelSort',
            'version'     => '2020-08-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetSpaceModelSortResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetSpaceModelSortRequest $request
     *
     * @return GetSpaceModelSortResponse
     */
    public function getSpaceModelSort($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSpaceModelSortWithOptions($request, $runtime);
    }

    /**
     * @param GetTaskRequest $request
     * @param RuntimeOptions $runtime
     *
     * @return GetTaskResponse
     */
    public function getTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetTask',
            'version'     => '2020-08-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetTaskRequest $request
     *
     * @return GetTaskResponse
     */
    public function getTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTaskWithOptions($request, $runtime);
    }

    /**
     * @param ListAlarmStatusRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListAlarmStatusResponse
     */
    public function listAlarmStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAlarmStatus',
            'version'     => '2020-08-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAlarmStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListAlarmStatusRequest $request
     *
     * @return ListAlarmStatusResponse
     */
    public function listAlarmStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAlarmStatusWithOptions($request, $runtime);
    }

    /**
     * @param ListAlarmStatusHistoriesRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListAlarmStatusHistoriesResponse
     */
    public function listAlarmStatusHistoriesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAlarmStatusHistories',
            'version'     => '2020-08-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAlarmStatusHistoriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListAlarmStatusHistoriesRequest $request
     *
     * @return ListAlarmStatusHistoriesResponse
     */
    public function listAlarmStatusHistories($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAlarmStatusHistoriesWithOptions($request, $runtime);
    }

    /**
     * @param ListAlarmStatusStatisticsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ListAlarmStatusStatisticsResponse
     */
    public function listAlarmStatusStatisticsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAlarmStatusStatistics',
            'version'     => '2020-08-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAlarmStatusStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListAlarmStatusStatisticsRequest $request
     *
     * @return ListAlarmStatusStatisticsResponse
     */
    public function listAlarmStatusStatistics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAlarmStatusStatisticsWithOptions($request, $runtime);
    }

    /**
     * @deprecated
     *   *
     * Deprecated
     *
     * @param ListArchitectureAttributeRequest $request ListArchitectureAttributeRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return ListArchitectureAttributeResponse ListArchitectureAttributeResponse
     */
    public function listArchitectureAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListArchitectureAttribute',
            'version'     => '2020-08-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListArchitectureAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @deprecated
     *   *
     * Deprecated
     *
     * @param ListArchitectureAttributeRequest $request ListArchitectureAttributeRequest
     *
     * @return ListArchitectureAttributeResponse ListArchitectureAttributeResponse
     */
    public function listArchitectureAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listArchitectureAttributeWithOptions($request, $runtime);
    }

    /**
     * @deprecated
     *   *
     * Deprecated
     *
     * @param ListConfigurationSpecificationsRequest $request ListConfigurationSpecificationsRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return ListConfigurationSpecificationsResponse ListConfigurationSpecificationsResponse
     */
    public function listConfigurationSpecificationsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListConfigurationSpecifications',
            'version'     => '2020-08-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListConfigurationSpecificationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @deprecated
     *   *
     * Deprecated
     *
     * @param ListConfigurationSpecificationsRequest $request ListConfigurationSpecificationsRequest
     *
     * @return ListConfigurationSpecificationsResponse ListConfigurationSpecificationsResponse
     */
    public function listConfigurationSpecifications($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listConfigurationSpecificationsWithOptions($request, $runtime);
    }

    /**
     * @param ListConfigurationVariateRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListConfigurationVariateResponse
     */
    public function listConfigurationVariateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListConfigurationVariate',
            'version'     => '2020-08-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListConfigurationVariateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListConfigurationVariateRequest $request
     *
     * @return ListConfigurationVariateResponse
     */
    public function listConfigurationVariate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listConfigurationVariateWithOptions($request, $runtime);
    }

    /**
     * @deprecated
     *   *
     * Deprecated
     *
     * @param ListConnectionPoliciesRequest $request ListConnectionPoliciesRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return ListConnectionPoliciesResponse ListConnectionPoliciesResponse
     */
    public function listConnectionPoliciesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        $body = [];
        if (!Utils::isUnset($request->architectureIterationId)) {
            $body['ArchitectureIterationId'] = $request->architectureIterationId;
        }
        if (!Utils::isUnset($request->connectionPolicyId)) {
            $body['ConnectionPolicyId'] = $request->connectionPolicyId;
        }
        if (!Utils::isUnset($request->downlinkArchitectureDeviceId)) {
            $body['DownlinkArchitectureDeviceId'] = $request->downlinkArchitectureDeviceId;
        }
        if (!Utils::isUnset($request->downlinkArchitectureModuleId)) {
            $body['DownlinkArchitectureModuleId'] = $request->downlinkArchitectureModuleId;
        }
        if (!Utils::isUnset($request->uplinkArchitectureDeviceId)) {
            $body['UplinkArchitectureDeviceId'] = $request->uplinkArchitectureDeviceId;
        }
        if (!Utils::isUnset($request->uplinkArchitectureModuleId)) {
            $body['UplinkArchitectureModuleId'] = $request->uplinkArchitectureModuleId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListConnectionPolicies',
            'version'     => '2020-08-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListConnectionPoliciesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @deprecated
     *   *
     * Deprecated
     *
     * @param ListConnectionPoliciesRequest $request ListConnectionPoliciesRequest
     *
     * @return ListConnectionPoliciesResponse ListConnectionPoliciesResponse
     */
    public function listConnectionPolicies($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listConnectionPoliciesWithOptions($request, $runtime);
    }

    /**
     * @param ListDedicatedLinesRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListDedicatedLinesResponse
     */
    public function listDedicatedLinesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDedicatedLines',
            'version'     => '2020-08-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListDedicatedLinesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListDedicatedLinesRequest $request
     *
     * @return ListDedicatedLinesResponse
     */
    public function listDedicatedLines($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDedicatedLinesWithOptions($request, $runtime);
    }

    /**
     * @param ListDeviceFormsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListDeviceFormsResponse
     */
    public function listDeviceFormsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDeviceForms',
            'version'     => '2020-08-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListDeviceFormsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListDeviceFormsRequest $request
     *
     * @return ListDeviceFormsResponse
     */
    public function listDeviceForms($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDeviceFormsWithOptions($request, $runtime);
    }

    /**
     * @param ListDevicePropertiesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListDevicePropertiesResponse
     */
    public function listDevicePropertiesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDeviceProperties',
            'version'     => '2020-08-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListDevicePropertiesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListDevicePropertiesRequest $request
     *
     * @return ListDevicePropertiesResponse
     */
    public function listDeviceProperties($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDevicePropertiesWithOptions($request, $runtime);
    }

    /**
     * @param ListDeviceResourcesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListDeviceResourcesResponse
     */
    public function listDeviceResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDeviceResources',
            'version'     => '2020-08-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListDeviceResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListDeviceResourcesRequest $request
     *
     * @return ListDeviceResourcesResponse
     */
    public function listDeviceResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDeviceResourcesWithOptions($request, $runtime);
    }

    /**
     * @param ListDeviceValuesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListDeviceValuesResponse
     */
    public function listDeviceValuesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDeviceValues',
            'version'     => '2020-08-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListDeviceValuesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListDeviceValuesRequest $request
     *
     * @return ListDeviceValuesResponse
     */
    public function listDeviceValues($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDeviceValuesWithOptions($request, $runtime);
    }

    /**
     * @param ListDevicesRequest $tmpReq
     * @param RuntimeOptions     $runtime
     *
     * @return ListDevicesResponse
     */
    public function listDevicesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListDevicesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->deviceIds)) {
            $request->deviceIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->deviceIds, 'DeviceIds', 'json');
        }
        if (!Utils::isUnset($tmpReq->hostName)) {
            $request->hostNameShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->hostName, 'HostName', 'json');
        }
        if (!Utils::isUnset($tmpReq->ip)) {
            $request->ipShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->ip, 'Ip', 'json');
        }
        if (!Utils::isUnset($tmpReq->mac)) {
            $request->macShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->mac, 'Mac', 'json');
        }
        if (!Utils::isUnset($tmpReq->model)) {
            $request->modelShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->model, 'Model', 'json');
        }
        if (!Utils::isUnset($tmpReq->physicalSpaceIds)) {
            $request->physicalSpaceIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->physicalSpaceIds, 'PhysicalSpaceIds', 'json');
        }
        if (!Utils::isUnset($tmpReq->securityDomain)) {
            $request->securityDomainShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->securityDomain, 'SecurityDomain', 'json');
        }
        if (!Utils::isUnset($tmpReq->serviceStatus)) {
            $request->serviceStatusShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->serviceStatus, 'ServiceStatus', 'json');
        }
        if (!Utils::isUnset($tmpReq->sn)) {
            $request->snShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->sn, 'Sn', 'json');
        }
        if (!Utils::isUnset($tmpReq->vendor)) {
            $request->vendorShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->vendor, 'Vendor', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->calculateAmount)) {
            $query['CalculateAmount'] = $request->calculateAmount;
        }
        if (!Utils::isUnset($request->deviceFormId)) {
            $query['DeviceFormId'] = $request->deviceFormId;
        }
        if (!Utils::isUnset($request->deviceFormName)) {
            $query['DeviceFormName'] = $request->deviceFormName;
        }
        if (!Utils::isUnset($request->deviceIdsShrink)) {
            $query['DeviceIds'] = $request->deviceIdsShrink;
        }
        if (!Utils::isUnset($request->extAttributes)) {
            $query['ExtAttributes'] = $request->extAttributes;
        }
        if (!Utils::isUnset($request->hostNameShrink)) {
            $query['HostName'] = $request->hostNameShrink;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->ipShrink)) {
            $query['Ip'] = $request->ipShrink;
        }
        if (!Utils::isUnset($request->keyword)) {
            $query['Keyword'] = $request->keyword;
        }
        if (!Utils::isUnset($request->macShrink)) {
            $query['Mac'] = $request->macShrink;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->modelShrink)) {
            $query['Model'] = $request->modelShrink;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->physicalSpaceId)) {
            $query['PhysicalSpaceId'] = $request->physicalSpaceId;
        }
        if (!Utils::isUnset($request->physicalSpaceIdsShrink)) {
            $query['PhysicalSpaceIds'] = $request->physicalSpaceIdsShrink;
        }
        if (!Utils::isUnset($request->securityDomainShrink)) {
            $query['SecurityDomain'] = $request->securityDomainShrink;
        }
        if (!Utils::isUnset($request->serviceStatusShrink)) {
            $query['ServiceStatus'] = $request->serviceStatusShrink;
        }
        if (!Utils::isUnset($request->snShrink)) {
            $query['Sn'] = $request->snShrink;
        }
        if (!Utils::isUnset($request->vendorShrink)) {
            $query['Vendor'] = $request->vendorShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDevices',
            'version'     => '2020-08-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListDevicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListDevicesRequest $request
     *
     * @return ListDevicesResponse
     */
    public function listDevices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDevicesWithOptions($request, $runtime);
    }

    /**
     * @param ListEventDefinitionsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListEventDefinitionsResponse
     */
    public function listEventDefinitionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListEventDefinitions',
            'version'     => '2020-08-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListEventDefinitionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListEventDefinitionsRequest $request
     *
     * @return ListEventDefinitionsResponse
     */
    public function listEventDefinitions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listEventDefinitionsWithOptions($request, $runtime);
    }

    /**
     * @param ListEventsRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ListEventsResponse
     */
    public function listEventsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListEvents',
            'version'     => '2020-08-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListEventsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListEventsRequest $request
     *
     * @return ListEventsResponse
     */
    public function listEvents($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listEventsWithOptions($request, $runtime);
    }

    /**
     * @param ListInspectionDevicesRequest $tmpReq
     * @param RuntimeOptions               $runtime
     *
     * @return ListInspectionDevicesResponse
     */
    public function listInspectionDevicesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListInspectionDevicesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->model)) {
            $request->modelShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->model, 'Model', 'json');
        }
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListInspectionDevices',
            'version'     => '2020-08-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListInspectionDevicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListInspectionDevicesRequest $request
     *
     * @return ListInspectionDevicesResponse
     */
    public function listInspectionDevices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listInspectionDevicesWithOptions($request, $runtime);
    }

    /**
     * @param ListInspectionTaskReportsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ListInspectionTaskReportsResponse
     */
    public function listInspectionTaskReportsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListInspectionTaskReports',
            'version'     => '2020-08-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListInspectionTaskReportsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListInspectionTaskReportsRequest $request
     *
     * @return ListInspectionTaskReportsResponse
     */
    public function listInspectionTaskReports($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listInspectionTaskReportsWithOptions($request, $runtime);
    }

    /**
     * @param ListInspectionTasksRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return ListInspectionTasksResponse
     */
    public function listInspectionTasksWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListInspectionTasksShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->alarmStatus)) {
            $request->alarmStatusShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->alarmStatus, 'AlarmStatus', 'json');
        }
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListInspectionTasks',
            'version'     => '2020-08-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListInspectionTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListInspectionTasksRequest $request
     *
     * @return ListInspectionTasksResponse
     */
    public function listInspectionTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listInspectionTasksWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return ListInstancesResponse
     */
    public function listInstancesWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'ListInstances',
            'version'     => '2020-08-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return ListInstancesResponse
     */
    public function listInstances()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listInstancesWithOptions($runtime);
    }

    /**
     * @param ListIpBlocksRequest $tmpReq
     * @param RuntimeOptions      $runtime
     *
     * @return ListIpBlocksResponse
     */
    public function listIpBlocksWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListIpBlocksShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->extAttributes)) {
            $request->extAttributesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->extAttributes, 'ExtAttributes', 'json');
        }
        if (!Utils::isUnset($tmpReq->ipList)) {
            $request->ipListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->ipList, 'IpList', 'json');
        }
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListIpBlocks',
            'version'     => '2020-08-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListIpBlocksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListIpBlocksRequest $request
     *
     * @return ListIpBlocksResponse
     */
    public function listIpBlocks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listIpBlocksWithOptions($request, $runtime);
    }

    /**
     * @param ListLinksRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ListLinksResponse
     */
    public function listLinksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListLinks',
            'version'     => '2020-08-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListLinksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListLinksRequest $request
     *
     * @return ListLinksResponse
     */
    public function listLinks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listLinksWithOptions($request, $runtime);
    }

    /**
     * @param ListLogsRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return ListLogsResponse
     */
    public function listLogsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListLogs',
            'version'     => '2020-08-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListLogsRequest $request
     *
     * @return ListLogsResponse
     */
    public function listLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listLogsWithOptions($request, $runtime);
    }

    /**
     * @param ListMonitorDataRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListMonitorDataResponse
     */
    public function listMonitorDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListMonitorData',
            'version'     => '2020-08-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListMonitorDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListMonitorDataRequest $request
     *
     * @return ListMonitorDataResponse
     */
    public function listMonitorData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listMonitorDataWithOptions($request, $runtime);
    }

    /**
     * @param ListNotificationHistoriesRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ListNotificationHistoriesResponse
     */
    public function listNotificationHistoriesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListNotificationHistories',
            'version'     => '2020-08-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListNotificationHistoriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListNotificationHistoriesRequest $request
     *
     * @return ListNotificationHistoriesResponse
     */
    public function listNotificationHistories($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listNotificationHistoriesWithOptions($request, $runtime);
    }

    /**
     * @param ListNotificationHistoriesStatisticsRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return ListNotificationHistoriesStatisticsResponse
     */
    public function listNotificationHistoriesStatisticsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListNotificationHistoriesStatistics',
            'version'     => '2020-08-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListNotificationHistoriesStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListNotificationHistoriesStatisticsRequest $request
     *
     * @return ListNotificationHistoriesStatisticsResponse
     */
    public function listNotificationHistoriesStatistics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listNotificationHistoriesStatisticsWithOptions($request, $runtime);
    }

    /**
     * @param ListOsVersionsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListOsVersionsResponse
     */
    public function listOsVersionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListOsVersions',
            'version'     => '2020-08-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListOsVersionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListOsVersionsRequest $request
     *
     * @return ListOsVersionsResponse
     */
    public function listOsVersions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listOsVersionsWithOptions($request, $runtime);
    }

    /**
     * @param ListPhysicalSpacesRequest $tmpReq
     * @param RuntimeOptions            $runtime
     *
     * @return ListPhysicalSpacesResponse
     */
    public function listPhysicalSpacesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListPhysicalSpacesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->physicalSpaceIds)) {
            $request->physicalSpaceIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->physicalSpaceIds, 'PhysicalSpaceIds', 'json');
        }
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListPhysicalSpaces',
            'version'     => '2020-08-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListPhysicalSpacesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListPhysicalSpacesRequest $request
     *
     * @return ListPhysicalSpacesResponse
     */
    public function listPhysicalSpaces($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPhysicalSpacesWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return ListRegionsResponse
     */
    public function listRegionsWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'ListRegions',
            'version'     => '2020-08-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return ListRegionsResponse
     */
    public function listRegions()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRegionsWithOptions($runtime);
    }

    /**
     * @param ListResourceInformationsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListResourceInformationsResponse
     */
    public function listResourceInformationsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListResourceInformations',
            'version'     => '2020-08-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListResourceInformationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListResourceInformationsRequest $request
     *
     * @return ListResourceInformationsResponse
     */
    public function listResourceInformations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listResourceInformationsWithOptions($request, $runtime);
    }

    /**
     * @param ListResourceInstancesRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListResourceInstancesResponse
     */
    public function listResourceInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListResourceInstances',
            'version'     => '2020-08-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListResourceInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListResourceInstancesRequest $request
     *
     * @return ListResourceInstancesResponse
     */
    public function listResourceInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listResourceInstancesWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return ListResourceTypesResponse
     */
    public function listResourceTypesWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'ListResourceTypes',
            'version'     => '2020-08-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListResourceTypesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return ListResourceTypesResponse
     */
    public function listResourceTypes()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listResourceTypesWithOptions($runtime);
    }

    /**
     * @param ListSetupProjectsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListSetupProjectsResponse
     */
    public function listSetupProjectsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListSetupProjects',
            'version'     => '2020-08-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListSetupProjectsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListSetupProjectsRequest $request
     *
     * @return ListSetupProjectsResponse
     */
    public function listSetupProjects($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSetupProjectsWithOptions($request, $runtime);
    }

    /**
     * @param ListSpaceModelsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListSpaceModelsResponse
     */
    public function listSpaceModelsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListSpaceModels',
            'version'     => '2020-08-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListSpaceModelsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListSpaceModelsRequest $request
     *
     * @return ListSpaceModelsResponse
     */
    public function listSpaceModels($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSpaceModelsWithOptions($request, $runtime);
    }

    /**
     * @param ListTasksHistoriesRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListTasksHistoriesResponse
     */
    public function listTasksHistoriesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTasksHistories',
            'version'     => '2020-08-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListTasksHistoriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListTasksHistoriesRequest $request
     *
     * @return ListTasksHistoriesResponse
     */
    public function listTasksHistories($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTasksHistoriesWithOptions($request, $runtime);
    }

    /**
     * @param ListTreePhysicalSpacesRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return ListTreePhysicalSpacesResponse
     */
    public function listTreePhysicalSpacesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListTreePhysicalSpacesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->physicalSpaceIds)) {
            $request->physicalSpaceIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->physicalSpaceIds, 'PhysicalSpaceIds', 'json');
        }
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTreePhysicalSpaces',
            'version'     => '2020-08-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListTreePhysicalSpacesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListTreePhysicalSpacesRequest $request
     *
     * @return ListTreePhysicalSpacesResponse
     */
    public function listTreePhysicalSpaces($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTreePhysicalSpacesWithOptions($request, $runtime);
    }

    /**
     * @param LockSpaceModelRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return LockSpaceModelResponse
     */
    public function lockSpaceModelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->spaceModelId)) {
            $query['SpaceModelId'] = $request->spaceModelId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'LockSpaceModel',
            'version'     => '2020-08-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return LockSpaceModelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param LockSpaceModelRequest $request
     *
     * @return LockSpaceModelResponse
     */
    public function lockSpaceModel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->lockSpaceModelWithOptions($request, $runtime);
    }

    /**
     * @param ReleaseIPRequest $tmpReq
     * @param RuntimeOptions   $runtime
     *
     * @return ReleaseIPResponse
     */
    public function releaseIPWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ReleaseIPShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->deviceResourceIds)) {
            $request->deviceResourceIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->deviceResourceIds, 'DeviceResourceIds', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->deviceResourceId)) {
            $query['DeviceResourceId'] = $request->deviceResourceId;
        }
        if (!Utils::isUnset($request->deviceResourceIdsShrink)) {
            $query['DeviceResourceIds'] = $request->deviceResourceIdsShrink;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->ipType)) {
            $query['IpType'] = $request->ipType;
        }
        if (!Utils::isUnset($request->setupProjectId)) {
            $query['SetupProjectId'] = $request->setupProjectId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ReleaseIP',
            'version'     => '2020-08-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ReleaseIPResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ReleaseIPRequest $request
     *
     * @return ReleaseIPResponse
     */
    public function releaseIP($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->releaseIPWithOptions($request, $runtime);
    }

    /**
     * @param RetryTasksRequest $tmpReq
     * @param RuntimeOptions    $runtime
     *
     * @return RetryTasksResponse
     */
    public function retryTasksWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new RetryTasksShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->retryTasks)) {
            $request->retryTasksShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->retryTasks, 'RetryTasks', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->retryTasksShrink)) {
            $query['RetryTasks'] = $request->retryTasksShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RetryTasks',
            'version'     => '2020-08-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RetryTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RetryTasksRequest $request
     *
     * @return RetryTasksResponse
     */
    public function retryTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->retryTasksWithOptions($request, $runtime);
    }

    /**
     * @deprecated
     *   *
     * Deprecated
     *
     * @param UpdateConfigurationSpecificationRequest $tmpReq  UpdateConfigurationSpecificationRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateConfigurationSpecificationResponse UpdateConfigurationSpecificationResponse
     */
    public function updateConfigurationSpecificationWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateConfigurationSpecificationShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->relatedVariate)) {
            $request->relatedVariateShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->relatedVariate, 'RelatedVariate', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->architecture)) {
            $body['Architecture'] = $request->architecture;
        }
        if (!Utils::isUnset($request->configurationSpecificationId)) {
            $body['ConfigurationSpecificationId'] = $request->configurationSpecificationId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->model)) {
            $body['Model'] = $request->model;
        }
        if (!Utils::isUnset($request->relatedVariateShrink)) {
            $body['RelatedVariate'] = $request->relatedVariateShrink;
        }
        if (!Utils::isUnset($request->role)) {
            $body['Role'] = $request->role;
        }
        if (!Utils::isUnset($request->specificationContent)) {
            $body['SpecificationContent'] = $request->specificationContent;
        }
        if (!Utils::isUnset($request->specificationName)) {
            $body['SpecificationName'] = $request->specificationName;
        }
        if (!Utils::isUnset($request->vendor)) {
            $body['Vendor'] = $request->vendor;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateConfigurationSpecification',
            'version'     => '2020-08-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateConfigurationSpecificationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @deprecated
     *   *
     * Deprecated
     *
     * @param UpdateConfigurationSpecificationRequest $request UpdateConfigurationSpecificationRequest
     *
     * @return UpdateConfigurationSpecificationResponse UpdateConfigurationSpecificationResponse
     */
    public function updateConfigurationSpecification($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateConfigurationSpecificationWithOptions($request, $runtime);
    }

    /**
     * @param UpdateConfigurationVariateRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return UpdateConfigurationVariateResponse
     */
    public function updateConfigurationVariateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->comment)) {
            $body['Comment'] = $request->comment;
        }
        if (!Utils::isUnset($request->configurationVariateId)) {
            $body['ConfigurationVariateId'] = $request->configurationVariateId;
        }
        if (!Utils::isUnset($request->formatFunction)) {
            $body['FormatFunction'] = $request->formatFunction;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->variateName)) {
            $body['VariateName'] = $request->variateName;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateConfigurationVariate',
            'version'     => '2020-08-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateConfigurationVariateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateConfigurationVariateRequest $request
     *
     * @return UpdateConfigurationVariateResponse
     */
    public function updateConfigurationVariate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateConfigurationVariateWithOptions($request, $runtime);
    }

    /**
     * @param UpdateDedicatedLineRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateDedicatedLineResponse
     */
    public function updateDedicatedLineWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $body = [];
        if (!Utils::isUnset($request->bandwidth)) {
            $body['Bandwidth'] = $request->bandwidth;
        }
        if (!Utils::isUnset($request->contact)) {
            $body['Contact'] = $request->contact;
        }
        if (!Utils::isUnset($request->dedicatedLineGateway)) {
            $body['DedicatedLineGateway'] = $request->dedicatedLineGateway;
        }
        if (!Utils::isUnset($request->dedicatedLineId)) {
            $body['DedicatedLineId'] = $request->dedicatedLineId;
        }
        if (!Utils::isUnset($request->dedicatedLineIp)) {
            $body['DedicatedLineIp'] = $request->dedicatedLineIp;
        }
        if (!Utils::isUnset($request->dedicatedLineRole)) {
            $body['DedicatedLineRole'] = $request->dedicatedLineRole;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->deviceId)) {
            $body['DeviceId'] = $request->deviceId;
        }
        if (!Utils::isUnset($request->devicePort)) {
            $body['DevicePort'] = $request->devicePort;
        }
        if (!Utils::isUnset($request->expirationDate)) {
            $body['ExpirationDate'] = $request->expirationDate;
        }
        if (!Utils::isUnset($request->extAttributes)) {
            $body['ExtAttributes'] = $request->extAttributes;
        }
        if (!Utils::isUnset($request->isp)) {
            $body['Isp'] = $request->isp;
        }
        if (!Utils::isUnset($request->ispId)) {
            $body['IspId'] = $request->ispId;
        }
        if (!Utils::isUnset($request->keyword)) {
            $body['Keyword'] = $request->keyword;
        }
        if (!Utils::isUnset($request->onlineDate)) {
            $body['OnlineDate'] = $request->onlineDate;
        }
        if (!Utils::isUnset($request->phone)) {
            $body['Phone'] = $request->phone;
        }
        if (!Utils::isUnset($request->physicalSpaceId)) {
            $body['PhysicalSpaceId'] = $request->physicalSpaceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateDedicatedLine',
            'version'     => '2020-08-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateDedicatedLineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateDedicatedLineRequest $request
     *
     * @return UpdateDedicatedLineResponse
     */
    public function updateDedicatedLine($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDedicatedLineWithOptions($request, $runtime);
    }

    /**
     * @param UpdateDeviceRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return UpdateDeviceResponse
     */
    public function updateDeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $body = [];
        if (!Utils::isUnset($request->deviceId)) {
            $body['DeviceId'] = $request->deviceId;
        }
        if (!Utils::isUnset($request->enablePassword)) {
            $body['EnablePassword'] = $request->enablePassword;
        }
        if (!Utils::isUnset($request->extAttributes)) {
            $body['ExtAttributes'] = $request->extAttributes;
        }
        if (!Utils::isUnset($request->hostName)) {
            $body['HostName'] = $request->hostName;
        }
        if (!Utils::isUnset($request->ip)) {
            $body['Ip'] = $request->ip;
        }
        if (!Utils::isUnset($request->loginPassword)) {
            $body['LoginPassword'] = $request->loginPassword;
        }
        if (!Utils::isUnset($request->loginType)) {
            $body['LoginType'] = $request->loginType;
        }
        if (!Utils::isUnset($request->loginUsername)) {
            $body['LoginUsername'] = $request->loginUsername;
        }
        if (!Utils::isUnset($request->mac)) {
            $body['Mac'] = $request->mac;
        }
        if (!Utils::isUnset($request->model)) {
            $body['Model'] = $request->model;
        }
        if (!Utils::isUnset($request->physicalSpaceId)) {
            $body['PhysicalSpaceId'] = $request->physicalSpaceId;
        }
        if (!Utils::isUnset($request->securityDomain)) {
            $body['SecurityDomain'] = $request->securityDomain;
        }
        if (!Utils::isUnset($request->serviceStatus)) {
            $body['ServiceStatus'] = $request->serviceStatus;
        }
        if (!Utils::isUnset($request->sn)) {
            $body['Sn'] = $request->sn;
        }
        if (!Utils::isUnset($request->snmpAccountType)) {
            $body['SnmpAccountType'] = $request->snmpAccountType;
        }
        if (!Utils::isUnset($request->snmpAccountVersion)) {
            $body['SnmpAccountVersion'] = $request->snmpAccountVersion;
        }
        if (!Utils::isUnset($request->snmpAuthPassphrase)) {
            $body['SnmpAuthPassphrase'] = $request->snmpAuthPassphrase;
        }
        if (!Utils::isUnset($request->snmpAuthProtocol)) {
            $body['SnmpAuthProtocol'] = $request->snmpAuthProtocol;
        }
        if (!Utils::isUnset($request->snmpCommunity)) {
            $body['SnmpCommunity'] = $request->snmpCommunity;
        }
        if (!Utils::isUnset($request->snmpPrivacyPassphrase)) {
            $body['SnmpPrivacyPassphrase'] = $request->snmpPrivacyPassphrase;
        }
        if (!Utils::isUnset($request->snmpPrivacyProtocol)) {
            $body['SnmpPrivacyProtocol'] = $request->snmpPrivacyProtocol;
        }
        if (!Utils::isUnset($request->snmpSecurityLevel)) {
            $body['SnmpSecurityLevel'] = $request->snmpSecurityLevel;
        }
        if (!Utils::isUnset($request->snmpUsername)) {
            $body['SnmpUsername'] = $request->snmpUsername;
        }
        if (!Utils::isUnset($request->vendor)) {
            $body['Vendor'] = $request->vendor;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateDevice',
            'version'     => '2020-08-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateDeviceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateDeviceRequest $request
     *
     * @return UpdateDeviceResponse
     */
    public function updateDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDeviceWithOptions($request, $runtime);
    }

    /**
     * @param UpdateDeviceFormRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateDeviceFormResponse
     */
    public function updateDeviceFormWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateDeviceFormShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->attributeList)) {
            $request->attributeListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->attributeList, 'AttributeList', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $body = [];
        if (!Utils::isUnset($request->accountConfig)) {
            $body['AccountConfig'] = $request->accountConfig;
        }
        if (!Utils::isUnset($request->attributeListShrink)) {
            $body['AttributeList'] = $request->attributeListShrink;
        }
        if (!Utils::isUnset($request->configCompare)) {
            $body['ConfigCompare'] = $request->configCompare;
        }
        if (!Utils::isUnset($request->detailDisplay)) {
            $body['DetailDisplay'] = $request->detailDisplay;
        }
        if (!Utils::isUnset($request->deviceFormId)) {
            $body['DeviceFormId'] = $request->deviceFormId;
        }
        if (!Utils::isUnset($request->relatedDeviceFormId)) {
            $body['RelatedDeviceFormId'] = $request->relatedDeviceFormId;
        }
        if (!Utils::isUnset($request->script)) {
            $body['Script'] = $request->script;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateDeviceForm',
            'version'     => '2020-08-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateDeviceFormResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateDeviceFormRequest $request
     *
     * @return UpdateDeviceFormResponse
     */
    public function updateDeviceForm($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDeviceFormWithOptions($request, $runtime);
    }

    /**
     * @param UpdateDevicePropertyRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateDevicePropertyResponse
     */
    public function updateDevicePropertyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $body = [];
        if (!Utils::isUnset($request->devicePropertyId)) {
            $body['DevicePropertyId'] = $request->devicePropertyId;
        }
        if (!Utils::isUnset($request->propertyContent)) {
            $body['PropertyContent'] = $request->propertyContent;
        }
        if (!Utils::isUnset($request->propertyFormat)) {
            $body['PropertyFormat'] = $request->propertyFormat;
        }
        if (!Utils::isUnset($request->propertyName)) {
            $body['PropertyName'] = $request->propertyName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateDeviceProperty',
            'version'     => '2020-08-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateDevicePropertyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateDevicePropertyRequest $request
     *
     * @return UpdateDevicePropertyResponse
     */
    public function updateDeviceProperty($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDevicePropertyWithOptions($request, $runtime);
    }

    /**
     * @param UpdateDeviceResourceRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateDeviceResourceResponse
     */
    public function updateDeviceResourceWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateDeviceResourceShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->deviceResourceIds)) {
            $request->deviceResourceIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->deviceResourceIds, 'DeviceResourceIds', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $body = [];
        if (!Utils::isUnset($request->data)) {
            $body['Data'] = $request->data;
        }
        if (!Utils::isUnset($request->deviceResourceId)) {
            $body['DeviceResourceId'] = $request->deviceResourceId;
        }
        if (!Utils::isUnset($request->deviceResourceIdsShrink)) {
            $body['DeviceResourceIds'] = $request->deviceResourceIdsShrink;
        }
        if (!Utils::isUnset($request->setupProjectId)) {
            $body['SetupProjectId'] = $request->setupProjectId;
        }
        if (!Utils::isUnset($request->updateType)) {
            $body['UpdateType'] = $request->updateType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateDeviceResource',
            'version'     => '2020-08-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateDeviceResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateDeviceResourceRequest $request
     *
     * @return UpdateDeviceResourceResponse
     */
    public function updateDeviceResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDeviceResourceWithOptions($request, $runtime);
    }

    /**
     * @param UpdateDevicesRequest $tmpReq
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateDevicesResponse
     */
    public function updateDevicesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateDevicesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->deviceIds)) {
            $request->deviceIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->deviceIds, 'DeviceIds', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $body = [];
        if (!Utils::isUnset($request->deviceIdsShrink)) {
            $body['DeviceIds'] = $request->deviceIdsShrink;
        }
        if (!Utils::isUnset($request->enablePassword)) {
            $body['EnablePassword'] = $request->enablePassword;
        }
        if (!Utils::isUnset($request->extAttributes)) {
            $body['ExtAttributes'] = $request->extAttributes;
        }
        if (!Utils::isUnset($request->loginPassword)) {
            $body['LoginPassword'] = $request->loginPassword;
        }
        if (!Utils::isUnset($request->loginType)) {
            $body['LoginType'] = $request->loginType;
        }
        if (!Utils::isUnset($request->loginUsername)) {
            $body['LoginUsername'] = $request->loginUsername;
        }
        if (!Utils::isUnset($request->model)) {
            $body['Model'] = $request->model;
        }
        if (!Utils::isUnset($request->physicalSpaceId)) {
            $body['PhysicalSpaceId'] = $request->physicalSpaceId;
        }
        if (!Utils::isUnset($request->physicalSpaceName)) {
            $body['PhysicalSpaceName'] = $request->physicalSpaceName;
        }
        if (!Utils::isUnset($request->securityDomain)) {
            $body['SecurityDomain'] = $request->securityDomain;
        }
        if (!Utils::isUnset($request->serviceStatus)) {
            $body['ServiceStatus'] = $request->serviceStatus;
        }
        if (!Utils::isUnset($request->snmpAccountType)) {
            $body['SnmpAccountType'] = $request->snmpAccountType;
        }
        if (!Utils::isUnset($request->snmpAccountVersion)) {
            $body['SnmpAccountVersion'] = $request->snmpAccountVersion;
        }
        if (!Utils::isUnset($request->snmpAuthPassphrase)) {
            $body['SnmpAuthPassphrase'] = $request->snmpAuthPassphrase;
        }
        if (!Utils::isUnset($request->snmpAuthProtocol)) {
            $body['SnmpAuthProtocol'] = $request->snmpAuthProtocol;
        }
        if (!Utils::isUnset($request->snmpCommunity)) {
            $body['SnmpCommunity'] = $request->snmpCommunity;
        }
        if (!Utils::isUnset($request->snmpPrivacyPassphrase)) {
            $body['SnmpPrivacyPassphrase'] = $request->snmpPrivacyPassphrase;
        }
        if (!Utils::isUnset($request->snmpPrivacyProtocol)) {
            $body['SnmpPrivacyProtocol'] = $request->snmpPrivacyProtocol;
        }
        if (!Utils::isUnset($request->snmpSecurityLevel)) {
            $body['SnmpSecurityLevel'] = $request->snmpSecurityLevel;
        }
        if (!Utils::isUnset($request->snmpUsername)) {
            $body['SnmpUsername'] = $request->snmpUsername;
        }
        if (!Utils::isUnset($request->vendor)) {
            $body['Vendor'] = $request->vendor;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateDevices',
            'version'     => '2020-08-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateDevicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateDevicesRequest $request
     *
     * @return UpdateDevicesResponse
     */
    public function updateDevices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDevicesWithOptions($request, $runtime);
    }

    /**
     * @param UpdateEventDefinitionRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateEventDefinitionResponse
     */
    public function updateEventDefinitionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->eventId)) {
            $body['EventId'] = $request->eventId;
        }
        if (!Utils::isUnset($request->eventName)) {
            $body['EventName'] = $request->eventName;
        }
        if (!Utils::isUnset($request->eventType)) {
            $body['EventType'] = $request->eventType;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->templateId)) {
            $body['TemplateId'] = $request->templateId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateEventDefinition',
            'version'     => '2020-08-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateEventDefinitionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateEventDefinitionRequest $request
     *
     * @return UpdateEventDefinitionResponse
     */
    public function updateEventDefinition($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateEventDefinitionWithOptions($request, $runtime);
    }

    /**
     * @param UpdateInformationKeyActionRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return UpdateInformationKeyActionResponse
     */
    public function updateInformationKeyActionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->key)) {
            $query['Key'] = $request->key;
        }
        if (!Utils::isUnset($request->keyAction)) {
            $query['KeyAction'] = $request->keyAction;
        }
        if (!Utils::isUnset($request->resourceInformationId)) {
            $query['ResourceInformationId'] = $request->resourceInformationId;
        }
        if (!Utils::isUnset($request->setupProjectId)) {
            $query['SetupProjectId'] = $request->setupProjectId;
        }
        if (!Utils::isUnset($request->value)) {
            $query['Value'] = $request->value;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateInformationKeyAction',
            'version'     => '2020-08-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateInformationKeyActionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateInformationKeyActionRequest $request
     *
     * @return UpdateInformationKeyActionResponse
     */
    public function updateInformationKeyAction($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateInformationKeyActionWithOptions($request, $runtime);
    }

    /**
     * @param UpdateInstanceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateInstanceResponse
     */
    public function updateInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->instanceName)) {
            $body['InstanceName'] = $request->instanceName;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateInstance',
            'version'     => '2020-08-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateInstanceRequest $request
     *
     * @return UpdateInstanceResponse
     */
    public function updateInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateInstanceWithOptions($request, $runtime);
    }

    /**
     * @param UpdateOsVersionRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateOsVersionResponse
     */
    public function updateOsVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bootPatch)) {
            $body['BootPatch'] = $request->bootPatch;
        }
        if (!Utils::isUnset($request->featurePatch)) {
            $body['FeaturePatch'] = $request->featurePatch;
        }
        if (!Utils::isUnset($request->fileName)) {
            $body['FileName'] = $request->fileName;
        }
        if (!Utils::isUnset($request->filePath)) {
            $body['FilePath'] = $request->filePath;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->model)) {
            $body['Model'] = $request->model;
        }
        if (!Utils::isUnset($request->osVersion)) {
            $body['OsVersion'] = $request->osVersion;
        }
        if (!Utils::isUnset($request->osVersionId)) {
            $body['OsVersionId'] = $request->osVersionId;
        }
        if (!Utils::isUnset($request->status)) {
            $body['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->systemPatch)) {
            $body['SystemPatch'] = $request->systemPatch;
        }
        if (!Utils::isUnset($request->vendor)) {
            $body['Vendor'] = $request->vendor;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateOsVersion',
            'version'     => '2020-08-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateOsVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateOsVersionRequest $request
     *
     * @return UpdateOsVersionResponse
     */
    public function updateOsVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateOsVersionWithOptions($request, $runtime);
    }

    /**
     * @param UpdatePhysicalSpaceRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return UpdatePhysicalSpaceResponse
     */
    public function updatePhysicalSpaceWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdatePhysicalSpaceShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->securityDomainList)) {
            $request->securityDomainListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->securityDomainList, 'SecurityDomainList', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $body = [];
        if (!Utils::isUnset($request->address)) {
            $body['Address'] = $request->address;
        }
        if (!Utils::isUnset($request->city)) {
            $body['City'] = $request->city;
        }
        if (!Utils::isUnset($request->country)) {
            $body['Country'] = $request->country;
        }
        if (!Utils::isUnset($request->moveAction)) {
            $body['MoveAction'] = $request->moveAction;
        }
        if (!Utils::isUnset($request->owner)) {
            $body['Owner'] = $request->owner;
        }
        if (!Utils::isUnset($request->parentUid)) {
            $body['ParentUid'] = $request->parentUid;
        }
        if (!Utils::isUnset($request->physicalSpaceId)) {
            $body['PhysicalSpaceId'] = $request->physicalSpaceId;
        }
        if (!Utils::isUnset($request->physicalSpaceName)) {
            $body['PhysicalSpaceName'] = $request->physicalSpaceName;
        }
        if (!Utils::isUnset($request->province)) {
            $body['Province'] = $request->province;
        }
        if (!Utils::isUnset($request->remark)) {
            $body['Remark'] = $request->remark;
        }
        if (!Utils::isUnset($request->securityDomainListShrink)) {
            $body['SecurityDomainList'] = $request->securityDomainListShrink;
        }
        if (!Utils::isUnset($request->spaceAbbreviation)) {
            $body['SpaceAbbreviation'] = $request->spaceAbbreviation;
        }
        if (!Utils::isUnset($request->spaceType)) {
            $body['SpaceType'] = $request->spaceType;
        }
        if (!Utils::isUnset($request->targetUid)) {
            $body['TargetUid'] = $request->targetUid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdatePhysicalSpace',
            'version'     => '2020-08-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdatePhysicalSpaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdatePhysicalSpaceRequest $request
     *
     * @return UpdatePhysicalSpaceResponse
     */
    public function updatePhysicalSpace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updatePhysicalSpaceWithOptions($request, $runtime);
    }

    /**
     * @param UpdateProjectProgressRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateProjectProgressResponse
     */
    public function updateProjectProgressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $body = [];
        if (!Utils::isUnset($request->progress)) {
            $body['Progress'] = $request->progress;
        }
        if (!Utils::isUnset($request->setupProjectId)) {
            $body['SetupProjectId'] = $request->setupProjectId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateProjectProgress',
            'version'     => '2020-08-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateProjectProgressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateProjectProgressRequest $request
     *
     * @return UpdateProjectProgressResponse
     */
    public function updateProjectProgress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateProjectProgressWithOptions($request, $runtime);
    }

    /**
     * @param UpdateResourceInformationRequest $tmpReq
     * @param RuntimeOptions                   $runtime
     *
     * @return UpdateResourceInformationResponse
     */
    public function updateResourceInformationWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateResourceInformationShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->information)) {
            $request->informationShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->information, 'Information', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $body = [];
        if (!Utils::isUnset($request->informationShrink)) {
            $body['Information'] = $request->informationShrink;
        }
        if (!Utils::isUnset($request->resourceAttribute)) {
            $body['ResourceAttribute'] = $request->resourceAttribute;
        }
        if (!Utils::isUnset($request->resourceInformationId)) {
            $body['ResourceInformationId'] = $request->resourceInformationId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $body['ResourceType'] = $request->resourceType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateResourceInformation',
            'version'     => '2020-08-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateResourceInformationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateResourceInformationRequest $request
     *
     * @return UpdateResourceInformationResponse
     */
    public function updateResourceInformation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateResourceInformationWithOptions($request, $runtime);
    }

    /**
     * @param UpdateResourceInstanceRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateResourceInstanceResponse
     */
    public function updateResourceInstanceWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateResourceInstanceShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->resourceInformation)) {
            $request->resourceInformationShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->resourceInformation, 'ResourceInformation', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->resourceInformationShrink)) {
            $query['ResourceInformation'] = $request->resourceInformationShrink;
        }
        if (!Utils::isUnset($request->resourceInformationId)) {
            $query['ResourceInformationId'] = $request->resourceInformationId;
        }
        if (!Utils::isUnset($request->setupProjectId)) {
            $query['SetupProjectId'] = $request->setupProjectId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateResourceInstance',
            'version'     => '2020-08-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateResourceInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateResourceInstanceRequest $request
     *
     * @return UpdateResourceInstanceResponse
     */
    public function updateResourceInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateResourceInstanceWithOptions($request, $runtime);
    }

    /**
     * @param UpdateSetupProjectRequest $tmpReq
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateSetupProjectResponse
     */
    public function updateSetupProjectWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateSetupProjectShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->packages)) {
            $request->packagesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->packages, 'Packages', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $body = [];
        if (!Utils::isUnset($request->architectureId)) {
            $body['ArchitectureId'] = $request->architectureId;
        }
        if (!Utils::isUnset($request->deliveryTime)) {
            $body['DeliveryTime'] = $request->deliveryTime;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->nodes)) {
            $body['Nodes'] = $request->nodes;
        }
        if (!Utils::isUnset($request->packagesShrink)) {
            $body['Packages'] = $request->packagesShrink;
        }
        if (!Utils::isUnset($request->setupProjectId)) {
            $body['SetupProjectId'] = $request->setupProjectId;
        }
        if (!Utils::isUnset($request->spaceId)) {
            $body['SpaceId'] = $request->spaceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateSetupProject',
            'version'     => '2020-08-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateSetupProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateSetupProjectRequest $request
     *
     * @return UpdateSetupProjectResponse
     */
    public function updateSetupProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSetupProjectWithOptions($request, $runtime);
    }

    /**
     * @param UpdateSpaceModelRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateSpaceModelResponse
     */
    public function updateSpaceModelWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateSpaceModelShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->sort)) {
            $request->sortShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->sort, 'Sort', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->sortShrink)) {
            $body['Sort'] = $request->sortShrink;
        }
        if (!Utils::isUnset($request->spaceModelId)) {
            $body['SpaceModelId'] = $request->spaceModelId;
        }
        if (!Utils::isUnset($request->spaceType)) {
            $body['SpaceType'] = $request->spaceType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateSpaceModel',
            'version'     => '2020-08-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateSpaceModelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateSpaceModelRequest $request
     *
     * @return UpdateSpaceModelResponse
     */
    public function updateSpaceModel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSpaceModelWithOptions($request, $runtime);
    }

    /**
     * @param UpdateSpaceModelInstanceRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return UpdateSpaceModelInstanceResponse
     */
    public function updateSpaceModelInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instance)) {
            $query['Instance'] = $request->instance;
        }
        if (!Utils::isUnset($request->spaceId)) {
            $query['SpaceId'] = $request->spaceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateSpaceModelInstance',
            'version'     => '2020-08-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateSpaceModelInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateSpaceModelInstanceRequest $request
     *
     * @return UpdateSpaceModelInstanceResponse
     */
    public function updateSpaceModelInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSpaceModelInstanceWithOptions($request, $runtime);
    }
}
