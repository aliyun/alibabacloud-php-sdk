<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\AddUploadedFunctionFileInfoRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\AddUploadedFunctionFileInfoResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\AddVersionBlackDevicesRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\AddVersionBlackDevicesResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\AddVersionGroupDevicesRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\AddVersionGroupDevicesResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\AddVersionWhiteDevicesByDeviceGroupsRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\AddVersionWhiteDevicesByDeviceGroupsResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\AddVersionWhiteDevicesRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\AddVersionWhiteDevicesResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\ConnectAssistDeviceRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\ConnectAssistDeviceResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\CountActivatedOrNewRegistrationDeviceRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\CountActivatedOrNewRegistrationDeviceResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\CountDeviceBrandsRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\CountDeviceBrandsResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\CountDeviceModelsRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\CountDeviceModelsResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\CountDevicesRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\CountDevicesResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\CountProjectsResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\CountYunIdInfoResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\CreateAppVersionRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\CreateAppVersionResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\CreateCustomizedFilterRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\CreateCustomizedFilterResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\CreateCustomizedPropertyRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\CreateCustomizedPropertyResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\CreateDeviceBrandRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\CreateDeviceBrandResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\CreateDeviceModelRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\CreateDeviceModelResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\CreateDeviceRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\CreateDeviceResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\CreateMqttRootTopicRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\CreateMqttRootTopicResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\CreateNamespaceRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\CreateNamespaceResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\CreateOsVersionRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\CreateOsVersionResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\CreateProjectAppRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\CreateProjectAppResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\CreateProjectRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\CreateProjectResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\CreateRpcServiceRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\CreateRpcServiceResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\CreateSchemaSubscribeRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\CreateSchemaSubscribeResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\CreateShadowSchemaRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\CreateShadowSchemaResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\CreateTriggerRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\CreateTriggerResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\CreateUpstreamAppKeyRelationRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\CreateUpstreamAppKeyRelationResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\CreateUpstreamAppKeyRelationsRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\CreateUpstreamAppKeyRelationsResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\CreateUpstreamAppServerRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\CreateUpstreamAppServerResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\CreateVersionDeviceGroupRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\CreateVersionDeviceGroupResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\CreateVersionPrepublishRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\CreateVersionPrepublishResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\CreateVersionTestRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\CreateVersionTestResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\DelayPublishOsVersionRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\DelayPublishOsVersionResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\DeleteAllCustomizedFiltersRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\DeleteAllCustomizedFiltersResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\DeleteAllVersionGroupDevicesRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\DeleteAllVersionGroupDevicesResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\DeleteCameraShootingRecordRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\DeleteCameraShootingRecordResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\DeleteCustomizedFilterRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\DeleteCustomizedFilterResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\DeleteCustomizedPropertyRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\DeleteCustomizedPropertyResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\DeleteDeviceRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\DeleteDeviceResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\DeleteFunctionFileRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\DeleteFunctionFileResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\DeleteMqttRootTopicRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\DeleteMqttRootTopicResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\DeleteNamespaceRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\DeleteNamespaceResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\DeleteOpenAccountRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\DeleteOpenAccountResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\DeleteProjectAppRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\DeleteProjectAppResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\DeleteRpcServiceRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\DeleteRpcServiceResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\DeleteSchemaSubscribeRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\DeleteSchemaSubscribeResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\DeleteShadowSchemaRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\DeleteShadowSchemaResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\DeleteTriggerRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\DeleteTriggerResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\DeleteUpstreamAppKeyRelationRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\DeleteUpstreamAppKeyRelationResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\DeleteUpstreamAppServerRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\DeleteUpstreamAppServerResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\DeleteVersionAllBlackDevicesRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\DeleteVersionAllBlackDevicesResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\DeleteVersionAllWhiteDevicesRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\DeleteVersionAllWhiteDevicesResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\DeleteVersionBlackDevicesByIdRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\DeleteVersionBlackDevicesByIdResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\DeleteVersionBlackDevicesRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\DeleteVersionBlackDevicesResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\DeleteVersionDeviceGroupRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\DeleteVersionDeviceGroupResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\DeleteVersionGroupDeviceByIdRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\DeleteVersionGroupDeviceByIdResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\DeleteVersionGroupDeviceRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\DeleteVersionGroupDeviceResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\DeleteVersionTestRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\DeleteVersionTestResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\DeleteVersionWhiteDevicesByIdRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\DeleteVersionWhiteDevicesByIdResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\DeleteVersionWhiteDevicesRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\DeleteVersionWhiteDevicesResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\DeployFunctionFileRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\DeployFunctionFileResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\DescribeApiGatewayAppSecurityRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\DescribeApiGatewayAppSecurityResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\DescribeAppVersionRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\DescribeAppVersionResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\DescribeAssistReportRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\DescribeAssistReportResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\DescribeAssistRTMPServerAddressRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\DescribeAssistRTMPServerAddressResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\DescribeAssistWSServerAddressRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\DescribeAssistWSServerAddressResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\DescribeCustomizedFilterRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\DescribeCustomizedFilterResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\DescribeDefaultSchemaRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\DescribeDefaultSchemaResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\DescribeDeviceBrandRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\DescribeDeviceBrandResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\DescribeDeviceIdByOuterInfoRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\DescribeDeviceIdByOuterInfoResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\DescribeDeviceInfoRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\DescribeDeviceInfoResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\DescribeDeviceModelRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\DescribeDeviceModelResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\DescribeDeviceOnlineInfoRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\DescribeDeviceOnlineInfoResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\DescribeDeviceRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\DescribeDeviceResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\DescribeDeviceShadowRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\DescribeDeviceShadowResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\DescribeDeviceValiditySchemaRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\DescribeDeviceValiditySchemaResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\DescribeMessageRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\DescribeMessageResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\DescribeMqttClientStatusRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\DescribeMqttClientStatusResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\DescribeMqttMessageRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\DescribeMqttMessageResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\DescribeMqttTopicSubscriptionRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\DescribeMqttTopicSubscriptionResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\DescribeOpenAccountRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\DescribeOpenAccountResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\DescribeOsVersionRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\DescribeOsVersionResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\DescribeProjectAppSecurityRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\DescribeProjectAppSecurityResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\DescribeProjectRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\DescribeProjectResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\DescribeShadowSchemaRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\DescribeShadowSchemaResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\DescribeVersionDeviceGroupRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\DescribeVersionDeviceGroupResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\DiagnosisVersionRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\DiagnosisVersionResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\ExecuteCameraShootingCommandRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\ExecuteCameraShootingCommandResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\ExecuteRemoteCommandRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\ExecuteRemoteCommandResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\ExecuteVehicleControlRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\ExecuteVehicleControlResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\FindAppVersionsRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\FindAppVersionsResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\FindCustomizedFiltersRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\FindCustomizedFiltersResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\FindCustomizedPropertiesRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\FindCustomizedPropertiesResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\FindOsVersionsRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\FindOsVersionsResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\FindPrepublishesByParentIdRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\FindPrepublishesByParentIdResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\FindPrepublishesByVersionIdRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\FindPrepublishesByVersionIdResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\FindPrepublishPassedDevicesRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\FindPrepublishPassedDevicesResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\FindVersionBlackDevicesRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\FindVersionBlackDevicesResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\FindVersionDeviceGroupsRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\FindVersionDeviceGroupsResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\FindVersionGroupDevicesRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\FindVersionGroupDevicesResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\FindVersionMessageSendRecordsRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\FindVersionMessageSendRecordsResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\FindVersionMessagesRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\FindVersionMessagesResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\FindVersionTestsRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\FindVersionTestsResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\FindVersionWhiteDevicesRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\FindVersionWhiteDevicesResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\GenerateAssistFileUploadUrlRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\GenerateAssistFileUploadUrlResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\GenerateFunctionFileUploadMetaRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\GenerateFunctionFileUploadMetaResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\GenerateOssPostPolicyRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\GenerateOssPostPolicyResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\GenerateOssUploadMetaRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\GenerateOssUploadMetaResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\GenerateSdkDownloadInfoRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\GenerateSdkDownloadInfoResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\GenerateSysAppDownloadInfoRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\GenerateSysAppDownloadInfoResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\GetCommercialVehicleDeviceRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\GetCommercialVehicleDeviceResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\GetCommercialVehicleTrackRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\GetCommercialVehicleTrackResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\GetDeviceAppUpdateFunnelEventsRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\GetDeviceAppUpdateFunnelEventsResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\GetDeviceSystemUpdateFunnelEventsRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\GetDeviceSystemUpdateFunnelEventsResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\GetNamespaceDataRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\GetNamespaceDataResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\GetNamespaceStatisticsDataRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\GetNamespaceStatisticsDataResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\GetOssUploadMetaRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\GetOssUploadMetaResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\GetVehicleControlResultRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\GetVehicleControlResultResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\GetVehicleTrackRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\GetVehicleTrackResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\InvokeFunctionRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\InvokeFunctionResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListApiGatewayAppsRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListApiGatewayAppsResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListAppsRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListAppsResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListAssistActionDetailsRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListAssistActionDetailsResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListAssistDevicesRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListAssistDevicesResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListAssistHistoriesRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListAssistHistoriesResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListAssistHistoryDetailsRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListAssistHistoryDetailsResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListCameraShootingAttachmentsRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListCameraShootingAttachmentsResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListCameraShootingRecordsRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListCameraShootingRecordsResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListClientPluginsRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListClientPluginsResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListClientPluginVersionsRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListClientPluginVersionsResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListClientSdksRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListClientSdksResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListCommercialVehicleDevicesRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListCommercialVehicleDevicesResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListConnectLogsRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListConnectLogsResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListDeployedFunctionsRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListDeployedFunctionsResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListDeviceBrandsRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListDeviceBrandsResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListDeviceModelRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListDeviceModelResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListDeviceModelsRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListDeviceModelsResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListDevicesRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListDevicesResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListDeviceTypesRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListDeviceTypesResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListEdgeDevicesRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListEdgeDevicesResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListFunctionExecuteLogRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListFunctionExecuteLogResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListFunctionFilesByProjectIdRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListFunctionFilesByProjectIdResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListFunctionFilesRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListFunctionFilesResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListHostDevicesRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListHostDevicesResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListMessageAcksRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListMessageAcksResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListMessageReceiversRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListMessageReceiversResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListMqttClientSubscriptionsRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListMqttClientSubscriptionsResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListMqttMessageLogsRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListMqttMessageLogsResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListMqttRootTopicsRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListMqttRootTopicsResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListNamespacesRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListNamespacesResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListOfflineMessagesRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListOfflineMessagesResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListOpenAccountLinksRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListOpenAccountLinksResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListOpenAccountsRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListOpenAccountsResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListPreChecksResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListProjectAppsRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListProjectAppsResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListProjectsResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListRpcServicesRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListRpcServicesResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListSchemaSubscribesRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListSchemaSubscribesResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListServicesResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListShadowSchemaDeviceModelsRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListShadowSchemaDeviceModelsResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListShadowSchemasRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListShadowSchemasResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListSupportFeaturesResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListTriggersRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListTriggersResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListUpstreamAppKeyRelationsRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListUpstreamAppKeyRelationsResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListUpstreamAppServersRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListUpstreamAppServersResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListVehicleRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListVehicleResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListVersionDeviceGroupsRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListVersionDeviceGroupsResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\PublishAppVersionRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\PublishAppVersionResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\PublishMqttMessageRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\PublishMqttMessageResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\PublishOsVersionRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\PublishOsVersionResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\PushConfigInfoRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\PushConfigInfoResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\PushMessageRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\PushMessageResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\PushVersionMessageRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\PushVersionMessageResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\QueryPrepublishPassedDeviceCountRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\QueryPrepublishPassedDeviceCountResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\SubmitAssistReportRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\SubmitAssistReportResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\UpdateApiGatewayAppStatusRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\UpdateApiGatewayAppStatusResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\UpdateAppBlackWhiteVersionsRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\UpdateAppBlackWhiteVersionsResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\UpdateAppVersionReleaseNoteRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\UpdateAppVersionReleaseNoteResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\UpdateAppVersionRemarkRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\UpdateAppVersionRemarkResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\UpdateAppVersionRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\UpdateAppVersionResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\UpdateAppVersionStatusRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\UpdateAppVersionStatusResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\UpdateCustomizedFilterRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\UpdateCustomizedFilterResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\UpdateDeviceModelRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\UpdateDeviceModelResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\UpdateNamespaceDataRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\UpdateNamespaceDataResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\UpdateOsBlackWhiteVersionsRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\UpdateOsBlackWhiteVersionsResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\UpdateOsVersionReleaseNoteRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\UpdateOsVersionReleaseNoteResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\UpdateOsVersionRemarkRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\UpdateOsVersionRemarkResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\UpdateOsVersionRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\UpdateOsVersionResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\UpdateOsVersionStatusRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\UpdateOsVersionStatusResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\UpdateProjectRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\UpdateProjectResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\UpdateSchemaSubscribeRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\UpdateSchemaSubscribeResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\UpdateShadowSchemaRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\UpdateShadowSchemaResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\UpdateTriggerRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\UpdateTriggerResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\UpdateUpstreamAppServerRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\UpdateUpstreamAppServerResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\UpdateVersionDeviceGroupRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\UpdateVersionDeviceGroupResponse;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\UpdateVersionPrepublishActiveStatusRequest;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\UpdateVersionPrepublishActiveStatusResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

class Iovcc extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('iovcc', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param ListDeviceBrandsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListDeviceBrandsResponse
     */
    public function listDeviceBrandsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return ListDeviceBrandsResponse::fromMap($this->doRPCRequest('ListDeviceBrands', '2018-05-01', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListDeviceBrandsRequest $request
     *
     * @return ListDeviceBrandsResponse
     */
    public function listDeviceBrands($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDeviceBrandsWithOptions($request, $runtime);
    }

    /**
     * @param ListFunctionExecuteLogRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListFunctionExecuteLogResponse
     */
    public function listFunctionExecuteLogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListFunctionExecuteLogResponse::fromMap($this->doRPCRequest('ListFunctionExecuteLog', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListFunctionExecuteLogRequest $request
     *
     * @return ListFunctionExecuteLogResponse
     */
    public function listFunctionExecuteLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFunctionExecuteLogWithOptions($request, $runtime);
    }

    /**
     * @param ListDeviceModelsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListDeviceModelsResponse
     */
    public function listDeviceModelsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return ListDeviceModelsResponse::fromMap($this->doRPCRequest('ListDeviceModels', '2018-05-01', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListDeviceModelsRequest $request
     *
     * @return ListDeviceModelsResponse
     */
    public function listDeviceModels($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDeviceModelsWithOptions($request, $runtime);
    }

    /**
     * @param ListMqttMessageLogsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListMqttMessageLogsResponse
     */
    public function listMqttMessageLogsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListMqttMessageLogsResponse::fromMap($this->doRPCRequest('ListMqttMessageLogs', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListMqttMessageLogsRequest $request
     *
     * @return ListMqttMessageLogsResponse
     */
    public function listMqttMessageLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listMqttMessageLogsWithOptions($request, $runtime);
    }

    /**
     * @param DeleteNamespaceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteNamespaceResponse
     */
    public function deleteNamespaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteNamespaceResponse::fromMap($this->doRPCRequest('DeleteNamespace', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteNamespaceRequest $request
     *
     * @return DeleteNamespaceResponse
     */
    public function deleteNamespace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteNamespaceWithOptions($request, $runtime);
    }

    /**
     * @param ListOfflineMessagesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListOfflineMessagesResponse
     */
    public function listOfflineMessagesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListOfflineMessagesResponse::fromMap($this->doRPCRequest('ListOfflineMessages', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListOfflineMessagesRequest $request
     *
     * @return ListOfflineMessagesResponse
     */
    public function listOfflineMessages($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listOfflineMessagesWithOptions($request, $runtime);
    }

    /**
     * @param PushMessageRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return PushMessageResponse
     */
    public function pushMessageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return PushMessageResponse::fromMap($this->doRPCRequest('PushMessage', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param PushMessageRequest $request
     *
     * @return PushMessageResponse
     */
    public function pushMessage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->pushMessageWithOptions($request, $runtime);
    }

    /**
     * @param DeleteCustomizedFilterRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteCustomizedFilterResponse
     */
    public function deleteCustomizedFilterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteCustomizedFilterResponse::fromMap($this->doRPCRequest('DeleteCustomizedFilter', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteCustomizedFilterRequest $request
     *
     * @return DeleteCustomizedFilterResponse
     */
    public function deleteCustomizedFilter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCustomizedFilterWithOptions($request, $runtime);
    }

    /**
     * @param DescribeMqttClientStatusRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeMqttClientStatusResponse
     */
    public function describeMqttClientStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeMqttClientStatusResponse::fromMap($this->doRPCRequest('DescribeMqttClientStatus', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeMqttClientStatusRequest $request
     *
     * @return DescribeMqttClientStatusResponse
     */
    public function describeMqttClientStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMqttClientStatusWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteDeviceResponse::fromMap($this->doRPCRequest('DeleteDevice', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param UpdateDeviceModelRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateDeviceModelResponse
     */
    public function updateDeviceModelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateDeviceModelResponse::fromMap($this->doRPCRequest('UpdateDeviceModel', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateDeviceModelRequest $request
     *
     * @return UpdateDeviceModelResponse
     */
    public function updateDeviceModel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDeviceModelWithOptions($request, $runtime);
    }

    /**
     * @param UpdateApiGatewayAppStatusRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return UpdateApiGatewayAppStatusResponse
     */
    public function updateApiGatewayAppStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateApiGatewayAppStatusResponse::fromMap($this->doRPCRequest('UpdateApiGatewayAppStatus', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateApiGatewayAppStatusRequest $request
     *
     * @return UpdateApiGatewayAppStatusResponse
     */
    public function updateApiGatewayAppStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateApiGatewayAppStatusWithOptions($request, $runtime);
    }

    /**
     * @param ListCameraShootingAttachmentsRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return ListCameraShootingAttachmentsResponse
     */
    public function listCameraShootingAttachmentsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListCameraShootingAttachmentsResponse::fromMap($this->doRPCRequest('ListCameraShootingAttachments', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListCameraShootingAttachmentsRequest $request
     *
     * @return ListCameraShootingAttachmentsResponse
     */
    public function listCameraShootingAttachments($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCameraShootingAttachmentsWithOptions($request, $runtime);
    }

    /**
     * @param ListAssistHistoriesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListAssistHistoriesResponse
     */
    public function listAssistHistoriesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return ListAssistHistoriesResponse::fromMap($this->doRPCRequest('ListAssistHistories', '2018-05-01', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListAssistHistoriesRequest $request
     *
     * @return ListAssistHistoriesResponse
     */
    public function listAssistHistories($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAssistHistoriesWithOptions($request, $runtime);
    }

    /**
     * @param GetDeviceSystemUpdateFunnelEventsRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return GetDeviceSystemUpdateFunnelEventsResponse
     */
    public function getDeviceSystemUpdateFunnelEventsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetDeviceSystemUpdateFunnelEventsResponse::fromMap($this->doRPCRequest('GetDeviceSystemUpdateFunnelEvents', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetDeviceSystemUpdateFunnelEventsRequest $request
     *
     * @return GetDeviceSystemUpdateFunnelEventsResponse
     */
    public function getDeviceSystemUpdateFunnelEvents($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDeviceSystemUpdateFunnelEventsWithOptions($request, $runtime);
    }

    /**
     * @param DeleteAllCustomizedFiltersRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DeleteAllCustomizedFiltersResponse
     */
    public function deleteAllCustomizedFiltersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteAllCustomizedFiltersResponse::fromMap($this->doRPCRequest('DeleteAllCustomizedFilters', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteAllCustomizedFiltersRequest $request
     *
     * @return DeleteAllCustomizedFiltersResponse
     */
    public function deleteAllCustomizedFilters($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAllCustomizedFiltersWithOptions($request, $runtime);
    }

    /**
     * @param GenerateAssistFileUploadUrlRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return GenerateAssistFileUploadUrlResponse
     */
    public function generateAssistFileUploadUrlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GenerateAssistFileUploadUrlResponse::fromMap($this->doRPCRequest('GenerateAssistFileUploadUrl', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GenerateAssistFileUploadUrlRequest $request
     *
     * @return GenerateAssistFileUploadUrlResponse
     */
    public function generateAssistFileUploadUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateAssistFileUploadUrlWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAssistWSServerAddressRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeAssistWSServerAddressResponse
     */
    public function describeAssistWSServerAddressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return DescribeAssistWSServerAddressResponse::fromMap($this->doRPCRequest('DescribeAssistWSServerAddress', '2018-05-01', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeAssistWSServerAddressRequest $request
     *
     * @return DescribeAssistWSServerAddressResponse
     */
    public function describeAssistWSServerAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAssistWSServerAddressWithOptions($request, $runtime);
    }

    /**
     * @param FindPrepublishesByVersionIdRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return FindPrepublishesByVersionIdResponse
     */
    public function findPrepublishesByVersionIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return FindPrepublishesByVersionIdResponse::fromMap($this->doRPCRequest('FindPrepublishesByVersionId', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param FindPrepublishesByVersionIdRequest $request
     *
     * @return FindPrepublishesByVersionIdResponse
     */
    public function findPrepublishesByVersionId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->findPrepublishesByVersionIdWithOptions($request, $runtime);
    }

    /**
     * @param FindVersionMessagesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return FindVersionMessagesResponse
     */
    public function findVersionMessagesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return FindVersionMessagesResponse::fromMap($this->doRPCRequest('FindVersionMessages', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param FindVersionMessagesRequest $request
     *
     * @return FindVersionMessagesResponse
     */
    public function findVersionMessages($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->findVersionMessagesWithOptions($request, $runtime);
    }

    /**
     * @param UpdateUpstreamAppServerRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return UpdateUpstreamAppServerResponse
     */
    public function updateUpstreamAppServerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateUpstreamAppServerResponse::fromMap($this->doRPCRequest('UpdateUpstreamAppServer', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateUpstreamAppServerRequest $request
     *
     * @return UpdateUpstreamAppServerResponse
     */
    public function updateUpstreamAppServer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateUpstreamAppServerWithOptions($request, $runtime);
    }

    /**
     * @param GetVehicleTrackRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetVehicleTrackResponse
     */
    public function getVehicleTrackWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return GetVehicleTrackResponse::fromMap($this->doRPCRequest('GetVehicleTrack', '2018-05-01', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetVehicleTrackRequest $request
     *
     * @return GetVehicleTrackResponse
     */
    public function getVehicleTrack($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getVehicleTrackWithOptions($request, $runtime);
    }

    /**
     * @param CreateVersionTestRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateVersionTestResponse
     */
    public function createVersionTestWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateVersionTestResponse::fromMap($this->doRPCRequest('CreateVersionTest', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateVersionTestRequest $request
     *
     * @return CreateVersionTestResponse
     */
    public function createVersionTest($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createVersionTestWithOptions($request, $runtime);
    }

    /**
     * @param ListDeployedFunctionsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListDeployedFunctionsResponse
     */
    public function listDeployedFunctionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListDeployedFunctionsResponse::fromMap($this->doRPCRequest('ListDeployedFunctions', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListDeployedFunctionsRequest $request
     *
     * @return ListDeployedFunctionsResponse
     */
    public function listDeployedFunctions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDeployedFunctionsWithOptions($request, $runtime);
    }

    /**
     * @param ListDeviceModelRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListDeviceModelResponse
     */
    public function listDeviceModelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return ListDeviceModelResponse::fromMap($this->doRPCRequest('ListDeviceModel', '2018-05-01', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListDeviceModelRequest $request
     *
     * @return ListDeviceModelResponse
     */
    public function listDeviceModel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDeviceModelWithOptions($request, $runtime);
    }

    /**
     * @param CreateSchemaSubscribeRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateSchemaSubscribeResponse
     */
    public function createSchemaSubscribeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateSchemaSubscribeResponse::fromMap($this->doRPCRequest('CreateSchemaSubscribe', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateSchemaSubscribeRequest $request
     *
     * @return CreateSchemaSubscribeResponse
     */
    public function createSchemaSubscribe($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSchemaSubscribeWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAssistRTMPServerAddressRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeAssistRTMPServerAddressResponse
     */
    public function describeAssistRTMPServerAddressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return DescribeAssistRTMPServerAddressResponse::fromMap($this->doRPCRequest('DescribeAssistRTMPServerAddress', '2018-05-01', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeAssistRTMPServerAddressRequest $request
     *
     * @return DescribeAssistRTMPServerAddressResponse
     */
    public function describeAssistRTMPServerAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAssistRTMPServerAddressWithOptions($request, $runtime);
    }

    /**
     * @param DeleteShadowSchemaRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteShadowSchemaResponse
     */
    public function deleteShadowSchemaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteShadowSchemaResponse::fromMap($this->doRPCRequest('DeleteShadowSchema', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteShadowSchemaRequest $request
     *
     * @return DeleteShadowSchemaResponse
     */
    public function deleteShadowSchema($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteShadowSchemaWithOptions($request, $runtime);
    }

    /**
     * @param DescribeProjectAppSecurityRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeProjectAppSecurityResponse
     */
    public function describeProjectAppSecurityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeProjectAppSecurityResponse::fromMap($this->doRPCRequest('DescribeProjectAppSecurity', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeProjectAppSecurityRequest $request
     *
     * @return DescribeProjectAppSecurityResponse
     */
    public function describeProjectAppSecurity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeProjectAppSecurityWithOptions($request, $runtime);
    }

    /**
     * @param CreateDeviceBrandRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateDeviceBrandResponse
     */
    public function createDeviceBrandWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateDeviceBrandResponse::fromMap($this->doRPCRequest('CreateDeviceBrand', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateDeviceBrandRequest $request
     *
     * @return CreateDeviceBrandResponse
     */
    public function createDeviceBrand($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDeviceBrandWithOptions($request, $runtime);
    }

    /**
     * @param CreateMqttRootTopicRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateMqttRootTopicResponse
     */
    public function createMqttRootTopicWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateMqttRootTopicResponse::fromMap($this->doRPCRequest('CreateMqttRootTopic', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateMqttRootTopicRequest $request
     *
     * @return CreateMqttRootTopicResponse
     */
    public function createMqttRootTopic($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMqttRootTopicWithOptions($request, $runtime);
    }

    /**
     * @param DelayPublishOsVersionRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DelayPublishOsVersionResponse
     */
    public function delayPublishOsVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DelayPublishOsVersionResponse::fromMap($this->doRPCRequest('DelayPublishOsVersion', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DelayPublishOsVersionRequest $request
     *
     * @return DelayPublishOsVersionResponse
     */
    public function delayPublishOsVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->delayPublishOsVersionWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return ListPreChecksResponse
     */
    public function listPreChecksWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);

        return ListPreChecksResponse::fromMap($this->doRPCRequest('ListPreChecks', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @return ListPreChecksResponse
     */
    public function listPreChecks()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPreChecksWithOptions($runtime);
    }

    /**
     * @param ListAppsRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return ListAppsResponse
     */
    public function listAppsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListAppsResponse::fromMap($this->doRPCRequest('ListApps', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListAppsRequest $request
     *
     * @return ListAppsResponse
     */
    public function listApps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAppsWithOptions($request, $runtime);
    }

    /**
     * @param DeleteCameraShootingRecordRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DeleteCameraShootingRecordResponse
     */
    public function deleteCameraShootingRecordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteCameraShootingRecordResponse::fromMap($this->doRPCRequest('DeleteCameraShootingRecord', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteCameraShootingRecordRequest $request
     *
     * @return DeleteCameraShootingRecordResponse
     */
    public function deleteCameraShootingRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCameraShootingRecordWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDeviceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DescribeDeviceResponse
     */
    public function describeDeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDeviceResponse::fromMap($this->doRPCRequest('DescribeDevice', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeDeviceRequest $request
     *
     * @return DescribeDeviceResponse
     */
    public function describeDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDeviceWithOptions($request, $runtime);
    }

    /**
     * @param AddVersionGroupDevicesRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return AddVersionGroupDevicesResponse
     */
    public function addVersionGroupDevicesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddVersionGroupDevicesResponse::fromMap($this->doRPCRequest('AddVersionGroupDevices', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AddVersionGroupDevicesRequest $request
     *
     * @return AddVersionGroupDevicesResponse
     */
    public function addVersionGroupDevices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addVersionGroupDevicesWithOptions($request, $runtime);
    }

    /**
     * @param ListProjectAppsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListProjectAppsResponse
     */
    public function listProjectAppsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListProjectAppsResponse::fromMap($this->doRPCRequest('ListProjectApps', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListProjectAppsRequest $request
     *
     * @return ListProjectAppsResponse
     */
    public function listProjectApps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listProjectAppsWithOptions($request, $runtime);
    }

    /**
     * @param ConnectAssistDeviceRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ConnectAssistDeviceResponse
     */
    public function connectAssistDeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ConnectAssistDeviceResponse::fromMap($this->doRPCRequest('ConnectAssistDevice', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ConnectAssistDeviceRequest $request
     *
     * @return ConnectAssistDeviceResponse
     */
    public function connectAssistDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->connectAssistDeviceWithOptions($request, $runtime);
    }

    /**
     * @param ListApiGatewayAppsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListApiGatewayAppsResponse
     */
    public function listApiGatewayAppsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListApiGatewayAppsResponse::fromMap($this->doRPCRequest('ListApiGatewayApps', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListApiGatewayAppsRequest $request
     *
     * @return ListApiGatewayAppsResponse
     */
    public function listApiGatewayApps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listApiGatewayAppsWithOptions($request, $runtime);
    }

    /**
     * @param DeleteRpcServiceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteRpcServiceResponse
     */
    public function deleteRpcServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteRpcServiceResponse::fromMap($this->doRPCRequest('DeleteRpcService', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteRpcServiceRequest $request
     *
     * @return DeleteRpcServiceResponse
     */
    public function deleteRpcService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRpcServiceWithOptions($request, $runtime);
    }

    /**
     * @param FindPrepublishPassedDevicesRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return FindPrepublishPassedDevicesResponse
     */
    public function findPrepublishPassedDevicesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return FindPrepublishPassedDevicesResponse::fromMap($this->doRPCRequest('FindPrepublishPassedDevices', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param FindPrepublishPassedDevicesRequest $request
     *
     * @return FindPrepublishPassedDevicesResponse
     */
    public function findPrepublishPassedDevices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->findPrepublishPassedDevicesWithOptions($request, $runtime);
    }

    /**
     * @param DeleteVersionBlackDevicesByIdRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DeleteVersionBlackDevicesByIdResponse
     */
    public function deleteVersionBlackDevicesByIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteVersionBlackDevicesByIdResponse::fromMap($this->doRPCRequest('DeleteVersionBlackDevicesById', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteVersionBlackDevicesByIdRequest $request
     *
     * @return DeleteVersionBlackDevicesByIdResponse
     */
    public function deleteVersionBlackDevicesById($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteVersionBlackDevicesByIdWithOptions($request, $runtime);
    }

    /**
     * @param DescribeOpenAccountRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeOpenAccountResponse
     */
    public function describeOpenAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return DescribeOpenAccountResponse::fromMap($this->doRPCRequest('DescribeOpenAccount', '2018-05-01', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeOpenAccountRequest $request
     *
     * @return DescribeOpenAccountResponse
     */
    public function describeOpenAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeOpenAccountWithOptions($request, $runtime);
    }

    /**
     * @param FindCustomizedFiltersRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return FindCustomizedFiltersResponse
     */
    public function findCustomizedFiltersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return FindCustomizedFiltersResponse::fromMap($this->doRPCRequest('FindCustomizedFilters', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param FindCustomizedFiltersRequest $request
     *
     * @return FindCustomizedFiltersResponse
     */
    public function findCustomizedFilters($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->findCustomizedFiltersWithOptions($request, $runtime);
    }

    /**
     * @param DeployFunctionFileRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeployFunctionFileResponse
     */
    public function deployFunctionFileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeployFunctionFileResponse::fromMap($this->doRPCRequest('DeployFunctionFile', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeployFunctionFileRequest $request
     *
     * @return DeployFunctionFileResponse
     */
    public function deployFunctionFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deployFunctionFileWithOptions($request, $runtime);
    }

    /**
     * @param ListAssistActionDetailsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListAssistActionDetailsResponse
     */
    public function listAssistActionDetailsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return ListAssistActionDetailsResponse::fromMap($this->doRPCRequest('ListAssistActionDetails', '2018-05-01', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListAssistActionDetailsRequest $request
     *
     * @return ListAssistActionDetailsResponse
     */
    public function listAssistActionDetails($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAssistActionDetailsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeMqttTopicSubscriptionRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeMqttTopicSubscriptionResponse
     */
    public function describeMqttTopicSubscriptionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeMqttTopicSubscriptionResponse::fromMap($this->doRPCRequest('DescribeMqttTopicSubscription', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeMqttTopicSubscriptionRequest $request
     *
     * @return DescribeMqttTopicSubscriptionResponse
     */
    public function describeMqttTopicSubscription($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMqttTopicSubscriptionWithOptions($request, $runtime);
    }

    /**
     * @param PushVersionMessageRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return PushVersionMessageResponse
     */
    public function pushVersionMessageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return PushVersionMessageResponse::fromMap($this->doRPCRequest('PushVersionMessage', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param PushVersionMessageRequest $request
     *
     * @return PushVersionMessageResponse
     */
    public function pushVersionMessage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->pushVersionMessageWithOptions($request, $runtime);
    }

    /**
     * @param CountDeviceModelsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CountDeviceModelsResponse
     */
    public function countDeviceModelsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return CountDeviceModelsResponse::fromMap($this->doRPCRequest('CountDeviceModels', '2018-05-01', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CountDeviceModelsRequest $request
     *
     * @return CountDeviceModelsResponse
     */
    public function countDeviceModels($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->countDeviceModelsWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateDeviceResponse::fromMap($this->doRPCRequest('CreateDevice', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param CreateNamespaceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateNamespaceResponse
     */
    public function createNamespaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateNamespaceResponse::fromMap($this->doRPCRequest('CreateNamespace', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateNamespaceRequest $request
     *
     * @return CreateNamespaceResponse
     */
    public function createNamespace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createNamespaceWithOptions($request, $runtime);
    }

    /**
     * @param FindVersionDeviceGroupsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return FindVersionDeviceGroupsResponse
     */
    public function findVersionDeviceGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return FindVersionDeviceGroupsResponse::fromMap($this->doRPCRequest('FindVersionDeviceGroups', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param FindVersionDeviceGroupsRequest $request
     *
     * @return FindVersionDeviceGroupsResponse
     */
    public function findVersionDeviceGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->findVersionDeviceGroupsWithOptions($request, $runtime);
    }

    /**
     * @param ExecuteRemoteCommandRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ExecuteRemoteCommandResponse
     */
    public function executeRemoteCommandWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ExecuteRemoteCommandResponse::fromMap($this->doRPCRequest('ExecuteRemoteCommand', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ExecuteRemoteCommandRequest $request
     *
     * @return ExecuteRemoteCommandResponse
     */
    public function executeRemoteCommand($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->executeRemoteCommandWithOptions($request, $runtime);
    }

    /**
     * @param CreateVersionDeviceGroupRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateVersionDeviceGroupResponse
     */
    public function createVersionDeviceGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateVersionDeviceGroupResponse::fromMap($this->doRPCRequest('CreateVersionDeviceGroup', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateVersionDeviceGroupRequest $request
     *
     * @return CreateVersionDeviceGroupResponse
     */
    public function createVersionDeviceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createVersionDeviceGroupWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAssistReportRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeAssistReportResponse
     */
    public function describeAssistReportWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return DescribeAssistReportResponse::fromMap($this->doRPCRequest('DescribeAssistReport', '2018-05-01', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeAssistReportRequest $request
     *
     * @return DescribeAssistReportResponse
     */
    public function describeAssistReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAssistReportWithOptions($request, $runtime);
    }

    /**
     * @param ListConnectLogsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListConnectLogsResponse
     */
    public function listConnectLogsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListConnectLogsResponse::fromMap($this->doRPCRequest('ListConnectLogs', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListConnectLogsRequest $request
     *
     * @return ListConnectLogsResponse
     */
    public function listConnectLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listConnectLogsWithOptions($request, $runtime);
    }

    /**
     * @param ListClientPluginsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListClientPluginsResponse
     */
    public function listClientPluginsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListClientPluginsResponse::fromMap($this->doRPCRequest('ListClientPlugins', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListClientPluginsRequest $request
     *
     * @return ListClientPluginsResponse
     */
    public function listClientPlugins($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listClientPluginsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeShadowSchemaRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeShadowSchemaResponse
     */
    public function describeShadowSchemaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeShadowSchemaResponse::fromMap($this->doRPCRequest('DescribeShadowSchema', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeShadowSchemaRequest $request
     *
     * @return DescribeShadowSchemaResponse
     */
    public function describeShadowSchema($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeShadowSchemaWithOptions($request, $runtime);
    }

    /**
     * @param FindVersionBlackDevicesRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return FindVersionBlackDevicesResponse
     */
    public function findVersionBlackDevicesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return FindVersionBlackDevicesResponse::fromMap($this->doRPCRequest('FindVersionBlackDevices', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param FindVersionBlackDevicesRequest $request
     *
     * @return FindVersionBlackDevicesResponse
     */
    public function findVersionBlackDevices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->findVersionBlackDevicesWithOptions($request, $runtime);
    }

    /**
     * @param ListFunctionFilesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListFunctionFilesResponse
     */
    public function listFunctionFilesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListFunctionFilesResponse::fromMap($this->doRPCRequest('ListFunctionFiles', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListFunctionFilesRequest $request
     *
     * @return ListFunctionFilesResponse
     */
    public function listFunctionFiles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFunctionFilesWithOptions($request, $runtime);
    }

    /**
     * @param UpdateNamespaceDataRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateNamespaceDataResponse
     */
    public function updateNamespaceDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateNamespaceDataResponse::fromMap($this->doRPCRequest('UpdateNamespaceData', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateNamespaceDataRequest $request
     *
     * @return UpdateNamespaceDataResponse
     */
    public function updateNamespaceData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateNamespaceDataWithOptions($request, $runtime);
    }

    /**
     * @param ListEdgeDevicesRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListEdgeDevicesResponse
     */
    public function listEdgeDevicesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListEdgeDevicesResponse::fromMap($this->doRPCRequest('ListEdgeDevices', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListEdgeDevicesRequest $request
     *
     * @return ListEdgeDevicesResponse
     */
    public function listEdgeDevices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listEdgeDevicesWithOptions($request, $runtime);
    }

    /**
     * @param DeleteCustomizedPropertyRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DeleteCustomizedPropertyResponse
     */
    public function deleteCustomizedPropertyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteCustomizedPropertyResponse::fromMap($this->doRPCRequest('DeleteCustomizedProperty', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteCustomizedPropertyRequest $request
     *
     * @return DeleteCustomizedPropertyResponse
     */
    public function deleteCustomizedProperty($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCustomizedPropertyWithOptions($request, $runtime);
    }

    /**
     * @param UpdateAppVersionReleaseNoteRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return UpdateAppVersionReleaseNoteResponse
     */
    public function updateAppVersionReleaseNoteWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateAppVersionReleaseNoteResponse::fromMap($this->doRPCRequest('UpdateAppVersionReleaseNote', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateAppVersionReleaseNoteRequest $request
     *
     * @return UpdateAppVersionReleaseNoteResponse
     */
    public function updateAppVersionReleaseNote($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAppVersionReleaseNoteWithOptions($request, $runtime);
    }

    /**
     * @param CreateTriggerRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateTriggerResponse
     */
    public function createTriggerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateTriggerResponse::fromMap($this->doRPCRequest('CreateTrigger', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateTriggerRequest $request
     *
     * @return CreateTriggerResponse
     */
    public function createTrigger($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTriggerWithOptions($request, $runtime);
    }

    /**
     * @param DiagnosisVersionRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DiagnosisVersionResponse
     */
    public function diagnosisVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DiagnosisVersionResponse::fromMap($this->doRPCRequest('DiagnosisVersion', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DiagnosisVersionRequest $request
     *
     * @return DiagnosisVersionResponse
     */
    public function diagnosisVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->diagnosisVersionWithOptions($request, $runtime);
    }

    /**
     * @param ListShadowSchemaDeviceModelsRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ListShadowSchemaDeviceModelsResponse
     */
    public function listShadowSchemaDeviceModelsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return ListShadowSchemaDeviceModelsResponse::fromMap($this->doRPCRequest('ListShadowSchemaDeviceModels', '2018-05-01', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListShadowSchemaDeviceModelsRequest $request
     *
     * @return ListShadowSchemaDeviceModelsResponse
     */
    public function listShadowSchemaDeviceModels($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listShadowSchemaDeviceModelsWithOptions($request, $runtime);
    }

    /**
     * @param PushConfigInfoRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return PushConfigInfoResponse
     */
    public function pushConfigInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return PushConfigInfoResponse::fromMap($this->doRPCRequest('PushConfigInfo', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param PushConfigInfoRequest $request
     *
     * @return PushConfigInfoResponse
     */
    public function pushConfigInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->pushConfigInfoWithOptions($request, $runtime);
    }

    /**
     * @param GenerateOssUploadMetaRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GenerateOssUploadMetaResponse
     */
    public function generateOssUploadMetaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GenerateOssUploadMetaResponse::fromMap($this->doRPCRequest('GenerateOssUploadMeta', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GenerateOssUploadMetaRequest $request
     *
     * @return GenerateOssUploadMetaResponse
     */
    public function generateOssUploadMeta($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateOssUploadMetaWithOptions($request, $runtime);
    }

    /**
     * @param AddVersionBlackDevicesRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return AddVersionBlackDevicesResponse
     */
    public function addVersionBlackDevicesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddVersionBlackDevicesResponse::fromMap($this->doRPCRequest('AddVersionBlackDevices', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AddVersionBlackDevicesRequest $request
     *
     * @return AddVersionBlackDevicesResponse
     */
    public function addVersionBlackDevices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addVersionBlackDevicesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCustomizedFilterRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeCustomizedFilterResponse
     */
    public function describeCustomizedFilterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeCustomizedFilterResponse::fromMap($this->doRPCRequest('DescribeCustomizedFilter', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeCustomizedFilterRequest $request
     *
     * @return DescribeCustomizedFilterResponse
     */
    public function describeCustomizedFilter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCustomizedFilterWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDeviceIdByOuterInfoRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeDeviceIdByOuterInfoResponse
     */
    public function describeDeviceIdByOuterInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return DescribeDeviceIdByOuterInfoResponse::fromMap($this->doRPCRequest('DescribeDeviceIdByOuterInfo', '2018-05-01', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeDeviceIdByOuterInfoRequest $request
     *
     * @return DescribeDeviceIdByOuterInfoResponse
     */
    public function describeDeviceIdByOuterInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDeviceIdByOuterInfoWithOptions($request, $runtime);
    }

    /**
     * @param CreateAppVersionRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateAppVersionResponse
     */
    public function createAppVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateAppVersionResponse::fromMap($this->doRPCRequest('CreateAppVersion', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateAppVersionRequest $request
     *
     * @return CreateAppVersionResponse
     */
    public function createAppVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAppVersionWithOptions($request, $runtime);
    }

    /**
     * @param CountActivatedOrNewRegistrationDeviceRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return CountActivatedOrNewRegistrationDeviceResponse
     */
    public function countActivatedOrNewRegistrationDeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CountActivatedOrNewRegistrationDeviceResponse::fromMap($this->doRPCRequest('CountActivatedOrNewRegistrationDevice', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CountActivatedOrNewRegistrationDeviceRequest $request
     *
     * @return CountActivatedOrNewRegistrationDeviceResponse
     */
    public function countActivatedOrNewRegistrationDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->countActivatedOrNewRegistrationDeviceWithOptions($request, $runtime);
    }

    /**
     * @param ListDevicesRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListDevicesResponse
     */
    public function listDevicesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return ListDevicesResponse::fromMap($this->doRPCRequest('ListDevices', '2018-05-01', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
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
     * @param FindVersionTestsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return FindVersionTestsResponse
     */
    public function findVersionTestsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return FindVersionTestsResponse::fromMap($this->doRPCRequest('FindVersionTests', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param FindVersionTestsRequest $request
     *
     * @return FindVersionTestsResponse
     */
    public function findVersionTests($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->findVersionTestsWithOptions($request, $runtime);
    }

    /**
     * @param PublishOsVersionRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return PublishOsVersionResponse
     */
    public function publishOsVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return PublishOsVersionResponse::fromMap($this->doRPCRequest('PublishOsVersion', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param PublishOsVersionRequest $request
     *
     * @return PublishOsVersionResponse
     */
    public function publishOsVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->publishOsVersionWithOptions($request, $runtime);
    }

    /**
     * @param CreateUpstreamAppKeyRelationsRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return CreateUpstreamAppKeyRelationsResponse
     */
    public function createUpstreamAppKeyRelationsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateUpstreamAppKeyRelationsResponse::fromMap($this->doRPCRequest('CreateUpstreamAppKeyRelations', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateUpstreamAppKeyRelationsRequest $request
     *
     * @return CreateUpstreamAppKeyRelationsResponse
     */
    public function createUpstreamAppKeyRelations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createUpstreamAppKeyRelationsWithOptions($request, $runtime);
    }

    /**
     * @param UpdateOsVersionReleaseNoteRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return UpdateOsVersionReleaseNoteResponse
     */
    public function updateOsVersionReleaseNoteWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateOsVersionReleaseNoteResponse::fromMap($this->doRPCRequest('UpdateOsVersionReleaseNote', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateOsVersionReleaseNoteRequest $request
     *
     * @return UpdateOsVersionReleaseNoteResponse
     */
    public function updateOsVersionReleaseNote($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateOsVersionReleaseNoteWithOptions($request, $runtime);
    }

    /**
     * @param PublishAppVersionRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return PublishAppVersionResponse
     */
    public function publishAppVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return PublishAppVersionResponse::fromMap($this->doRPCRequest('PublishAppVersion', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param PublishAppVersionRequest $request
     *
     * @return PublishAppVersionResponse
     */
    public function publishAppVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->publishAppVersionWithOptions($request, $runtime);
    }

    /**
     * @param PublishMqttMessageRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return PublishMqttMessageResponse
     */
    public function publishMqttMessageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return PublishMqttMessageResponse::fromMap($this->doRPCRequest('PublishMqttMessage', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param PublishMqttMessageRequest $request
     *
     * @return PublishMqttMessageResponse
     */
    public function publishMqttMessage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->publishMqttMessageWithOptions($request, $runtime);
    }

    /**
     * @param DeleteVersionGroupDeviceRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DeleteVersionGroupDeviceResponse
     */
    public function deleteVersionGroupDeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteVersionGroupDeviceResponse::fromMap($this->doRPCRequest('DeleteVersionGroupDevice', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteVersionGroupDeviceRequest $request
     *
     * @return DeleteVersionGroupDeviceResponse
     */
    public function deleteVersionGroupDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteVersionGroupDeviceWithOptions($request, $runtime);
    }

    /**
     * @param DeleteFunctionFileRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteFunctionFileResponse
     */
    public function deleteFunctionFileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteFunctionFileResponse::fromMap($this->doRPCRequest('DeleteFunctionFile', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteFunctionFileRequest $request
     *
     * @return DeleteFunctionFileResponse
     */
    public function deleteFunctionFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteFunctionFileWithOptions($request, $runtime);
    }

    /**
     * @param AddVersionWhiteDevicesRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return AddVersionWhiteDevicesResponse
     */
    public function addVersionWhiteDevicesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddVersionWhiteDevicesResponse::fromMap($this->doRPCRequest('AddVersionWhiteDevices', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AddVersionWhiteDevicesRequest $request
     *
     * @return AddVersionWhiteDevicesResponse
     */
    public function addVersionWhiteDevices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addVersionWhiteDevicesWithOptions($request, $runtime);
    }

    /**
     * @param ListAssistHistoryDetailsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListAssistHistoryDetailsResponse
     */
    public function listAssistHistoryDetailsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return ListAssistHistoryDetailsResponse::fromMap($this->doRPCRequest('ListAssistHistoryDetails', '2018-05-01', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListAssistHistoryDetailsRequest $request
     *
     * @return ListAssistHistoryDetailsResponse
     */
    public function listAssistHistoryDetails($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAssistHistoryDetailsWithOptions($request, $runtime);
    }

    /**
     * @param CreateCustomizedFilterRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CreateCustomizedFilterResponse
     */
    public function createCustomizedFilterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateCustomizedFilterResponse::fromMap($this->doRPCRequest('CreateCustomizedFilter', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateCustomizedFilterRequest $request
     *
     * @return CreateCustomizedFilterResponse
     */
    public function createCustomizedFilter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCustomizedFilterWithOptions($request, $runtime);
    }

    /**
     * @param DeleteUpstreamAppKeyRelationRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DeleteUpstreamAppKeyRelationResponse
     */
    public function deleteUpstreamAppKeyRelationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteUpstreamAppKeyRelationResponse::fromMap($this->doRPCRequest('DeleteUpstreamAppKeyRelation', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteUpstreamAppKeyRelationRequest $request
     *
     * @return DeleteUpstreamAppKeyRelationResponse
     */
    public function deleteUpstreamAppKeyRelation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteUpstreamAppKeyRelationWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAppVersionRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeAppVersionResponse
     */
    public function describeAppVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeAppVersionResponse::fromMap($this->doRPCRequest('DescribeAppVersion', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeAppVersionRequest $request
     *
     * @return DescribeAppVersionResponse
     */
    public function describeAppVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAppVersionWithOptions($request, $runtime);
    }

    /**
     * @param ListVehicleRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListVehicleResponse
     */
    public function listVehicleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return ListVehicleResponse::fromMap($this->doRPCRequest('ListVehicle', '2018-05-01', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListVehicleRequest $request
     *
     * @return ListVehicleResponse
     */
    public function listVehicle($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listVehicleWithOptions($request, $runtime);
    }

    /**
     * @param ExecuteCameraShootingCommandRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ExecuteCameraShootingCommandResponse
     */
    public function executeCameraShootingCommandWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ExecuteCameraShootingCommandResponse::fromMap($this->doRPCRequest('ExecuteCameraShootingCommand', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ExecuteCameraShootingCommandRequest $request
     *
     * @return ExecuteCameraShootingCommandResponse
     */
    public function executeCameraShootingCommand($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->executeCameraShootingCommandWithOptions($request, $runtime);
    }

    /**
     * @param DeleteVersionDeviceGroupRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DeleteVersionDeviceGroupResponse
     */
    public function deleteVersionDeviceGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteVersionDeviceGroupResponse::fromMap($this->doRPCRequest('DeleteVersionDeviceGroup', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteVersionDeviceGroupRequest $request
     *
     * @return DeleteVersionDeviceGroupResponse
     */
    public function deleteVersionDeviceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteVersionDeviceGroupWithOptions($request, $runtime);
    }

    /**
     * @param ListFunctionFilesByProjectIdRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ListFunctionFilesByProjectIdResponse
     */
    public function listFunctionFilesByProjectIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListFunctionFilesByProjectIdResponse::fromMap($this->doRPCRequest('ListFunctionFilesByProjectId', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListFunctionFilesByProjectIdRequest $request
     *
     * @return ListFunctionFilesByProjectIdResponse
     */
    public function listFunctionFilesByProjectId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFunctionFilesByProjectIdWithOptions($request, $runtime);
    }

    /**
     * @param FindVersionWhiteDevicesRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return FindVersionWhiteDevicesResponse
     */
    public function findVersionWhiteDevicesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return FindVersionWhiteDevicesResponse::fromMap($this->doRPCRequest('FindVersionWhiteDevices', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param FindVersionWhiteDevicesRequest $request
     *
     * @return FindVersionWhiteDevicesResponse
     */
    public function findVersionWhiteDevices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->findVersionWhiteDevicesWithOptions($request, $runtime);
    }

    /**
     * @param CreateUpstreamAppServerRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateUpstreamAppServerResponse
     */
    public function createUpstreamAppServerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateUpstreamAppServerResponse::fromMap($this->doRPCRequest('CreateUpstreamAppServer', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateUpstreamAppServerRequest $request
     *
     * @return CreateUpstreamAppServerResponse
     */
    public function createUpstreamAppServer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createUpstreamAppServerWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVersionDeviceGroupRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeVersionDeviceGroupResponse
     */
    public function describeVersionDeviceGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeVersionDeviceGroupResponse::fromMap($this->doRPCRequest('DescribeVersionDeviceGroup', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeVersionDeviceGroupRequest $request
     *
     * @return DescribeVersionDeviceGroupResponse
     */
    public function describeVersionDeviceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVersionDeviceGroupWithOptions($request, $runtime);
    }

    /**
     * @param UpdateAppVersionRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateAppVersionResponse
     */
    public function updateAppVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateAppVersionResponse::fromMap($this->doRPCRequest('UpdateAppVersion', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateAppVersionRequest $request
     *
     * @return UpdateAppVersionResponse
     */
    public function updateAppVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAppVersionWithOptions($request, $runtime);
    }

    /**
     * @param CreateCustomizedPropertyRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateCustomizedPropertyResponse
     */
    public function createCustomizedPropertyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateCustomizedPropertyResponse::fromMap($this->doRPCRequest('CreateCustomizedProperty', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateCustomizedPropertyRequest $request
     *
     * @return CreateCustomizedPropertyResponse
     */
    public function createCustomizedProperty($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCustomizedPropertyWithOptions($request, $runtime);
    }

    /**
     * @param ListSchemaSubscribesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListSchemaSubscribesResponse
     */
    public function listSchemaSubscribesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return ListSchemaSubscribesResponse::fromMap($this->doRPCRequest('ListSchemaSubscribes', '2018-05-01', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListSchemaSubscribesRequest $request
     *
     * @return ListSchemaSubscribesResponse
     */
    public function listSchemaSubscribes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSchemaSubscribesWithOptions($request, $runtime);
    }

    /**
     * @param UpdateSchemaSubscribeRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateSchemaSubscribeResponse
     */
    public function updateSchemaSubscribeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateSchemaSubscribeResponse::fromMap($this->doRPCRequest('UpdateSchemaSubscribe', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateSchemaSubscribeRequest $request
     *
     * @return UpdateSchemaSubscribeResponse
     */
    public function updateSchemaSubscribe($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSchemaSubscribeWithOptions($request, $runtime);
    }

    /**
     * @param DeleteAllVersionGroupDevicesRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DeleteAllVersionGroupDevicesResponse
     */
    public function deleteAllVersionGroupDevicesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteAllVersionGroupDevicesResponse::fromMap($this->doRPCRequest('DeleteAllVersionGroupDevices', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteAllVersionGroupDevicesRequest $request
     *
     * @return DeleteAllVersionGroupDevicesResponse
     */
    public function deleteAllVersionGroupDevices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAllVersionGroupDevicesWithOptions($request, $runtime);
    }

    /**
     * @param DeleteVersionWhiteDevicesByIdRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DeleteVersionWhiteDevicesByIdResponse
     */
    public function deleteVersionWhiteDevicesByIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteVersionWhiteDevicesByIdResponse::fromMap($this->doRPCRequest('DeleteVersionWhiteDevicesById', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteVersionWhiteDevicesByIdRequest $request
     *
     * @return DeleteVersionWhiteDevicesByIdResponse
     */
    public function deleteVersionWhiteDevicesById($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteVersionWhiteDevicesByIdWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateOsVersionResponse::fromMap($this->doRPCRequest('UpdateOsVersion', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param GenerateOssPostPolicyRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GenerateOssPostPolicyResponse
     */
    public function generateOssPostPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GenerateOssPostPolicyResponse::fromMap($this->doRPCRequest('GenerateOssPostPolicy', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GenerateOssPostPolicyRequest $request
     *
     * @return GenerateOssPostPolicyResponse
     */
    public function generateOssPostPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateOssPostPolicyWithOptions($request, $runtime);
    }

    /**
     * @param FindVersionGroupDevicesRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return FindVersionGroupDevicesResponse
     */
    public function findVersionGroupDevicesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return FindVersionGroupDevicesResponse::fromMap($this->doRPCRequest('FindVersionGroupDevices', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param FindVersionGroupDevicesRequest $request
     *
     * @return FindVersionGroupDevicesResponse
     */
    public function findVersionGroupDevices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->findVersionGroupDevicesWithOptions($request, $runtime);
    }

    /**
     * @param DeleteOpenAccountRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteOpenAccountResponse
     */
    public function deleteOpenAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return DeleteOpenAccountResponse::fromMap($this->doRPCRequest('DeleteOpenAccount', '2018-05-01', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteOpenAccountRequest $request
     *
     * @return DeleteOpenAccountResponse
     */
    public function deleteOpenAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteOpenAccountWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDefaultSchemaRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeDefaultSchemaResponse
     */
    public function describeDefaultSchemaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDefaultSchemaResponse::fromMap($this->doRPCRequest('DescribeDefaultSchema', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeDefaultSchemaRequest $request
     *
     * @return DescribeDefaultSchemaResponse
     */
    public function describeDefaultSchema($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDefaultSchemaWithOptions($request, $runtime);
    }

    /**
     * @param ListUpstreamAppServersRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListUpstreamAppServersResponse
     */
    public function listUpstreamAppServersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListUpstreamAppServersResponse::fromMap($this->doRPCRequest('ListUpstreamAppServers', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListUpstreamAppServersRequest $request
     *
     * @return ListUpstreamAppServersResponse
     */
    public function listUpstreamAppServers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUpstreamAppServersWithOptions($request, $runtime);
    }

    /**
     * @param DeleteVersionTestRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteVersionTestResponse
     */
    public function deleteVersionTestWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteVersionTestResponse::fromMap($this->doRPCRequest('DeleteVersionTest', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteVersionTestRequest $request
     *
     * @return DeleteVersionTestResponse
     */
    public function deleteVersionTest($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteVersionTestWithOptions($request, $runtime);
    }

    /**
     * @param CreateUpstreamAppKeyRelationRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return CreateUpstreamAppKeyRelationResponse
     */
    public function createUpstreamAppKeyRelationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateUpstreamAppKeyRelationResponse::fromMap($this->doRPCRequest('CreateUpstreamAppKeyRelation', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateUpstreamAppKeyRelationRequest $request
     *
     * @return CreateUpstreamAppKeyRelationResponse
     */
    public function createUpstreamAppKeyRelation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createUpstreamAppKeyRelationWithOptions($request, $runtime);
    }

    /**
     * @param FindAppVersionsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return FindAppVersionsResponse
     */
    public function findAppVersionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return FindAppVersionsResponse::fromMap($this->doRPCRequest('FindAppVersions', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param FindAppVersionsRequest $request
     *
     * @return FindAppVersionsResponse
     */
    public function findAppVersions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->findAppVersionsWithOptions($request, $runtime);
    }

    /**
     * @param ListMqttRootTopicsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListMqttRootTopicsResponse
     */
    public function listMqttRootTopicsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListMqttRootTopicsResponse::fromMap($this->doRPCRequest('ListMqttRootTopics', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListMqttRootTopicsRequest $request
     *
     * @return ListMqttRootTopicsResponse
     */
    public function listMqttRootTopics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listMqttRootTopicsWithOptions($request, $runtime);
    }

    /**
     * @param ListAssistDevicesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListAssistDevicesResponse
     */
    public function listAssistDevicesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return ListAssistDevicesResponse::fromMap($this->doRPCRequest('ListAssistDevices', '2018-05-01', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListAssistDevicesRequest $request
     *
     * @return ListAssistDevicesResponse
     */
    public function listAssistDevices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAssistDevicesWithOptions($request, $runtime);
    }

    /**
     * @param DeleteUpstreamAppServerRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteUpstreamAppServerResponse
     */
    public function deleteUpstreamAppServerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteUpstreamAppServerResponse::fromMap($this->doRPCRequest('DeleteUpstreamAppServer', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteUpstreamAppServerRequest $request
     *
     * @return DeleteUpstreamAppServerResponse
     */
    public function deleteUpstreamAppServer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteUpstreamAppServerWithOptions($request, $runtime);
    }

    /**
     * @param UpdateVersionDeviceGroupRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return UpdateVersionDeviceGroupResponse
     */
    public function updateVersionDeviceGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateVersionDeviceGroupResponse::fromMap($this->doRPCRequest('UpdateVersionDeviceGroup', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateVersionDeviceGroupRequest $request
     *
     * @return UpdateVersionDeviceGroupResponse
     */
    public function updateVersionDeviceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateVersionDeviceGroupWithOptions($request, $runtime);
    }

    /**
     * @param ListOpenAccountsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListOpenAccountsResponse
     */
    public function listOpenAccountsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return ListOpenAccountsResponse::fromMap($this->doRPCRequest('ListOpenAccounts', '2018-05-01', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListOpenAccountsRequest $request
     *
     * @return ListOpenAccountsResponse
     */
    public function listOpenAccounts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listOpenAccountsWithOptions($request, $runtime);
    }

    /**
     * @param UpdateOsVersionStatusRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateOsVersionStatusResponse
     */
    public function updateOsVersionStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateOsVersionStatusResponse::fromMap($this->doRPCRequest('UpdateOsVersionStatus', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateOsVersionStatusRequest $request
     *
     * @return UpdateOsVersionStatusResponse
     */
    public function updateOsVersionStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateOsVersionStatusWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return CountProjectsResponse
     */
    public function countProjectsWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);

        return CountProjectsResponse::fromMap($this->doRPCRequest('CountProjects', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @return CountProjectsResponse
     */
    public function countProjects()
    {
        $runtime = new RuntimeOptions([]);

        return $this->countProjectsWithOptions($runtime);
    }

    /**
     * @param ListCommercialVehicleDevicesRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ListCommercialVehicleDevicesResponse
     */
    public function listCommercialVehicleDevicesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListCommercialVehicleDevicesResponse::fromMap($this->doRPCRequest('ListCommercialVehicleDevices', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListCommercialVehicleDevicesRequest $request
     *
     * @return ListCommercialVehicleDevicesResponse
     */
    public function listCommercialVehicleDevices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCommercialVehicleDevicesWithOptions($request, $runtime);
    }

    /**
     * @param ListMessageReceiversRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListMessageReceiversResponse
     */
    public function listMessageReceiversWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListMessageReceiversResponse::fromMap($this->doRPCRequest('ListMessageReceivers', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListMessageReceiversRequest $request
     *
     * @return ListMessageReceiversResponse
     */
    public function listMessageReceivers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listMessageReceiversWithOptions($request, $runtime);
    }

    /**
     * @param CountDevicesRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CountDevicesResponse
     */
    public function countDevicesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return CountDevicesResponse::fromMap($this->doRPCRequest('CountDevices', '2018-05-01', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CountDevicesRequest $request
     *
     * @return CountDevicesResponse
     */
    public function countDevices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->countDevicesWithOptions($request, $runtime);
    }

    /**
     * @param UpdateOsBlackWhiteVersionsRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return UpdateOsBlackWhiteVersionsResponse
     */
    public function updateOsBlackWhiteVersionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateOsBlackWhiteVersionsResponse::fromMap($this->doRPCRequest('UpdateOsBlackWhiteVersions', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateOsBlackWhiteVersionsRequest $request
     *
     * @return UpdateOsBlackWhiteVersionsResponse
     */
    public function updateOsBlackWhiteVersions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateOsBlackWhiteVersionsWithOptions($request, $runtime);
    }

    /**
     * @param GetNamespaceDataRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetNamespaceDataResponse
     */
    public function getNamespaceDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetNamespaceDataResponse::fromMap($this->doRPCRequest('GetNamespaceData', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetNamespaceDataRequest $request
     *
     * @return GetNamespaceDataResponse
     */
    public function getNamespaceData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getNamespaceDataWithOptions($request, $runtime);
    }

    /**
     * @param UpdateOsVersionRemarkRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateOsVersionRemarkResponse
     */
    public function updateOsVersionRemarkWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateOsVersionRemarkResponse::fromMap($this->doRPCRequest('UpdateOsVersionRemark', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateOsVersionRemarkRequest $request
     *
     * @return UpdateOsVersionRemarkResponse
     */
    public function updateOsVersionRemark($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateOsVersionRemarkWithOptions($request, $runtime);
    }

    /**
     * @param QueryPrepublishPassedDeviceCountRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return QueryPrepublishPassedDeviceCountResponse
     */
    public function queryPrepublishPassedDeviceCountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryPrepublishPassedDeviceCountResponse::fromMap($this->doRPCRequest('QueryPrepublishPassedDeviceCount', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryPrepublishPassedDeviceCountRequest $request
     *
     * @return QueryPrepublishPassedDeviceCountResponse
     */
    public function queryPrepublishPassedDeviceCount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryPrepublishPassedDeviceCountWithOptions($request, $runtime);
    }

    /**
     * @param CreateProjectRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateProjectResponse
     */
    public function createProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateProjectResponse::fromMap($this->doRPCRequest('CreateProject', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateProjectRequest $request
     *
     * @return CreateProjectResponse
     */
    public function createProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createProjectWithOptions($request, $runtime);
    }

    /**
     * @param ListNamespacesRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListNamespacesResponse
     */
    public function listNamespacesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListNamespacesResponse::fromMap($this->doRPCRequest('ListNamespaces', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListNamespacesRequest $request
     *
     * @return ListNamespacesResponse
     */
    public function listNamespaces($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listNamespacesWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return ListSupportFeaturesResponse
     */
    public function listSupportFeaturesWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);

        return ListSupportFeaturesResponse::fromMap($this->doRPCRequest('ListSupportFeatures', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @return ListSupportFeaturesResponse
     */
    public function listSupportFeatures()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSupportFeaturesWithOptions($runtime);
    }

    /**
     * @param DeleteMqttRootTopicRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteMqttRootTopicResponse
     */
    public function deleteMqttRootTopicWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteMqttRootTopicResponse::fromMap($this->doRPCRequest('DeleteMqttRootTopic', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteMqttRootTopicRequest $request
     *
     * @return DeleteMqttRootTopicResponse
     */
    public function deleteMqttRootTopic($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMqttRootTopicWithOptions($request, $runtime);
    }

    /**
     * @param DeleteVersionGroupDeviceByIdRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DeleteVersionGroupDeviceByIdResponse
     */
    public function deleteVersionGroupDeviceByIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteVersionGroupDeviceByIdResponse::fromMap($this->doRPCRequest('DeleteVersionGroupDeviceById', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteVersionGroupDeviceByIdRequest $request
     *
     * @return DeleteVersionGroupDeviceByIdResponse
     */
    public function deleteVersionGroupDeviceById($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteVersionGroupDeviceByIdWithOptions($request, $runtime);
    }

    /**
     * @param ListClientPluginVersionsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListClientPluginVersionsResponse
     */
    public function listClientPluginVersionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListClientPluginVersionsResponse::fromMap($this->doRPCRequest('ListClientPluginVersions', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListClientPluginVersionsRequest $request
     *
     * @return ListClientPluginVersionsResponse
     */
    public function listClientPluginVersions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listClientPluginVersionsWithOptions($request, $runtime);
    }

    /**
     * @param FindVersionMessageSendRecordsRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return FindVersionMessageSendRecordsResponse
     */
    public function findVersionMessageSendRecordsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return FindVersionMessageSendRecordsResponse::fromMap($this->doRPCRequest('FindVersionMessageSendRecords', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param FindVersionMessageSendRecordsRequest $request
     *
     * @return FindVersionMessageSendRecordsResponse
     */
    public function findVersionMessageSendRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->findVersionMessageSendRecordsWithOptions($request, $runtime);
    }

    /**
     * @param GenerateSysAppDownloadInfoRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return GenerateSysAppDownloadInfoResponse
     */
    public function generateSysAppDownloadInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GenerateSysAppDownloadInfoResponse::fromMap($this->doRPCRequest('GenerateSysAppDownloadInfo', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GenerateSysAppDownloadInfoRequest $request
     *
     * @return GenerateSysAppDownloadInfoResponse
     */
    public function generateSysAppDownloadInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateSysAppDownloadInfoWithOptions($request, $runtime);
    }

    /**
     * @param DeleteTriggerRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteTriggerResponse
     */
    public function deleteTriggerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteTriggerResponse::fromMap($this->doRPCRequest('DeleteTrigger', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteTriggerRequest $request
     *
     * @return DeleteTriggerResponse
     */
    public function deleteTrigger($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTriggerWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDeviceInfoRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeDeviceInfoResponse
     */
    public function describeDeviceInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return DescribeDeviceInfoResponse::fromMap($this->doRPCRequest('DescribeDeviceInfo', '2018-05-01', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeDeviceInfoRequest $request
     *
     * @return DescribeDeviceInfoResponse
     */
    public function describeDeviceInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDeviceInfoWithOptions($request, $runtime);
    }

    /**
     * @param CreateDeviceModelRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateDeviceModelResponse
     */
    public function createDeviceModelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateDeviceModelResponse::fromMap($this->doRPCRequest('CreateDeviceModel', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateDeviceModelRequest $request
     *
     * @return CreateDeviceModelResponse
     */
    public function createDeviceModel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDeviceModelWithOptions($request, $runtime);
    }

    /**
     * @param UpdateAppVersionStatusRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateAppVersionStatusResponse
     */
    public function updateAppVersionStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateAppVersionStatusResponse::fromMap($this->doRPCRequest('UpdateAppVersionStatus', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateAppVersionStatusRequest $request
     *
     * @return UpdateAppVersionStatusResponse
     */
    public function updateAppVersionStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAppVersionStatusWithOptions($request, $runtime);
    }

    /**
     * @param UpdateShadowSchemaRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateShadowSchemaResponse
     */
    public function updateShadowSchemaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateShadowSchemaResponse::fromMap($this->doRPCRequest('UpdateShadowSchema', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateShadowSchemaRequest $request
     *
     * @return UpdateShadowSchemaResponse
     */
    public function updateShadowSchema($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateShadowSchemaWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDeviceShadowRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeDeviceShadowResponse
     */
    public function describeDeviceShadowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDeviceShadowResponse::fromMap($this->doRPCRequest('DescribeDeviceShadow', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeDeviceShadowRequest $request
     *
     * @return DescribeDeviceShadowResponse
     */
    public function describeDeviceShadow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDeviceShadowWithOptions($request, $runtime);
    }

    /**
     * @param ListTriggersRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListTriggersResponse
     */
    public function listTriggersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListTriggersResponse::fromMap($this->doRPCRequest('ListTriggers', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListTriggersRequest $request
     *
     * @return ListTriggersResponse
     */
    public function listTriggers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTriggersWithOptions($request, $runtime);
    }

    /**
     * @param UpdateCustomizedFilterRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateCustomizedFilterResponse
     */
    public function updateCustomizedFilterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateCustomizedFilterResponse::fromMap($this->doRPCRequest('UpdateCustomizedFilter', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateCustomizedFilterRequest $request
     *
     * @return UpdateCustomizedFilterResponse
     */
    public function updateCustomizedFilter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCustomizedFilterWithOptions($request, $runtime);
    }

    /**
     * @param CreateVersionPrepublishRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateVersionPrepublishResponse
     */
    public function createVersionPrepublishWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateVersionPrepublishResponse::fromMap($this->doRPCRequest('CreateVersionPrepublish', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateVersionPrepublishRequest $request
     *
     * @return CreateVersionPrepublishResponse
     */
    public function createVersionPrepublish($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createVersionPrepublishWithOptions($request, $runtime);
    }

    /**
     * @param UpdateAppVersionRemarkRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateAppVersionRemarkResponse
     */
    public function updateAppVersionRemarkWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateAppVersionRemarkResponse::fromMap($this->doRPCRequest('UpdateAppVersionRemark', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateAppVersionRemarkRequest $request
     *
     * @return UpdateAppVersionRemarkResponse
     */
    public function updateAppVersionRemark($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAppVersionRemarkWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDeviceModelRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeDeviceModelResponse
     */
    public function describeDeviceModelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return DescribeDeviceModelResponse::fromMap($this->doRPCRequest('DescribeDeviceModel', '2018-05-01', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeDeviceModelRequest $request
     *
     * @return DescribeDeviceModelResponse
     */
    public function describeDeviceModel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDeviceModelWithOptions($request, $runtime);
    }

    /**
     * @param ListDeviceTypesRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListDeviceTypesResponse
     */
    public function listDeviceTypesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return ListDeviceTypesResponse::fromMap($this->doRPCRequest('ListDeviceTypes', '2018-05-01', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListDeviceTypesRequest $request
     *
     * @return ListDeviceTypesResponse
     */
    public function listDeviceTypes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDeviceTypesWithOptions($request, $runtime);
    }

    /**
     * @param GenerateSdkDownloadInfoRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GenerateSdkDownloadInfoResponse
     */
    public function generateSdkDownloadInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GenerateSdkDownloadInfoResponse::fromMap($this->doRPCRequest('GenerateSdkDownloadInfo', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GenerateSdkDownloadInfoRequest $request
     *
     * @return GenerateSdkDownloadInfoResponse
     */
    public function generateSdkDownloadInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateSdkDownloadInfoWithOptions($request, $runtime);
    }

    /**
     * @param ExecuteVehicleControlRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ExecuteVehicleControlResponse
     */
    public function executeVehicleControlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ExecuteVehicleControlResponse::fromMap($this->doRPCRequest('ExecuteVehicleControl', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ExecuteVehicleControlRequest $request
     *
     * @return ExecuteVehicleControlResponse
     */
    public function executeVehicleControl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->executeVehicleControlWithOptions($request, $runtime);
    }

    /**
     * @param DescribeApiGatewayAppSecurityRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeApiGatewayAppSecurityResponse
     */
    public function describeApiGatewayAppSecurityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeApiGatewayAppSecurityResponse::fromMap($this->doRPCRequest('DescribeApiGatewayAppSecurity', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeApiGatewayAppSecurityRequest $request
     *
     * @return DescribeApiGatewayAppSecurityResponse
     */
    public function describeApiGatewayAppSecurity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApiGatewayAppSecurityWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDeviceOnlineInfoRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeDeviceOnlineInfoResponse
     */
    public function describeDeviceOnlineInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDeviceOnlineInfoResponse::fromMap($this->doRPCRequest('DescribeDeviceOnlineInfo', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeDeviceOnlineInfoRequest $request
     *
     * @return DescribeDeviceOnlineInfoResponse
     */
    public function describeDeviceOnlineInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDeviceOnlineInfoWithOptions($request, $runtime);
    }

    /**
     * @param CreateRpcServiceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateRpcServiceResponse
     */
    public function createRpcServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateRpcServiceResponse::fromMap($this->doRPCRequest('CreateRpcService', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateRpcServiceRequest $request
     *
     * @return CreateRpcServiceResponse
     */
    public function createRpcService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRpcServiceWithOptions($request, $runtime);
    }

    /**
     * @param DeleteVersionWhiteDevicesRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DeleteVersionWhiteDevicesResponse
     */
    public function deleteVersionWhiteDevicesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteVersionWhiteDevicesResponse::fromMap($this->doRPCRequest('DeleteVersionWhiteDevices', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteVersionWhiteDevicesRequest $request
     *
     * @return DeleteVersionWhiteDevicesResponse
     */
    public function deleteVersionWhiteDevices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteVersionWhiteDevicesWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return ListProjectsResponse
     */
    public function listProjectsWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);

        return ListProjectsResponse::fromMap($this->doRPCRequest('ListProjects', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @return ListProjectsResponse
     */
    public function listProjects()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listProjectsWithOptions($runtime);
    }

    /**
     * @param GenerateFunctionFileUploadMetaRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return GenerateFunctionFileUploadMetaResponse
     */
    public function generateFunctionFileUploadMetaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GenerateFunctionFileUploadMetaResponse::fromMap($this->doRPCRequest('GenerateFunctionFileUploadMeta', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GenerateFunctionFileUploadMetaRequest $request
     *
     * @return GenerateFunctionFileUploadMetaResponse
     */
    public function generateFunctionFileUploadMeta($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateFunctionFileUploadMetaWithOptions($request, $runtime);
    }

    /**
     * @param DescribeProjectRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeProjectResponse
     */
    public function describeProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeProjectResponse::fromMap($this->doRPCRequest('DescribeProject', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeProjectRequest $request
     *
     * @return DescribeProjectResponse
     */
    public function describeProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeProjectWithOptions($request, $runtime);
    }

    /**
     * @param DescribeMqttMessageRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeMqttMessageResponse
     */
    public function describeMqttMessageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeMqttMessageResponse::fromMap($this->doRPCRequest('DescribeMqttMessage', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeMqttMessageRequest $request
     *
     * @return DescribeMqttMessageResponse
     */
    public function describeMqttMessage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMqttMessageWithOptions($request, $runtime);
    }

    /**
     * @param ListCameraShootingRecordsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ListCameraShootingRecordsResponse
     */
    public function listCameraShootingRecordsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListCameraShootingRecordsResponse::fromMap($this->doRPCRequest('ListCameraShootingRecords', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListCameraShootingRecordsRequest $request
     *
     * @return ListCameraShootingRecordsResponse
     */
    public function listCameraShootingRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCameraShootingRecordsWithOptions($request, $runtime);
    }

    /**
     * @param DeleteVersionBlackDevicesRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DeleteVersionBlackDevicesResponse
     */
    public function deleteVersionBlackDevicesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteVersionBlackDevicesResponse::fromMap($this->doRPCRequest('DeleteVersionBlackDevices', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteVersionBlackDevicesRequest $request
     *
     * @return DeleteVersionBlackDevicesResponse
     */
    public function deleteVersionBlackDevices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteVersionBlackDevicesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeOsVersionRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeOsVersionResponse
     */
    public function describeOsVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeOsVersionResponse::fromMap($this->doRPCRequest('DescribeOsVersion', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeOsVersionRequest $request
     *
     * @return DescribeOsVersionResponse
     */
    public function describeOsVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeOsVersionWithOptions($request, $runtime);
    }

    /**
     * @param ListRpcServicesRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListRpcServicesResponse
     */
    public function listRpcServicesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListRpcServicesResponse::fromMap($this->doRPCRequest('ListRpcServices', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListRpcServicesRequest $request
     *
     * @return ListRpcServicesResponse
     */
    public function listRpcServices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRpcServicesWithOptions($request, $runtime);
    }

    /**
     * @param DeleteSchemaSubscribeRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteSchemaSubscribeResponse
     */
    public function deleteSchemaSubscribeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteSchemaSubscribeResponse::fromMap($this->doRPCRequest('DeleteSchemaSubscribe', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteSchemaSubscribeRequest $request
     *
     * @return DeleteSchemaSubscribeResponse
     */
    public function deleteSchemaSubscribe($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSchemaSubscribeWithOptions($request, $runtime);
    }

    /**
     * @param AddUploadedFunctionFileInfoRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return AddUploadedFunctionFileInfoResponse
     */
    public function addUploadedFunctionFileInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddUploadedFunctionFileInfoResponse::fromMap($this->doRPCRequest('AddUploadedFunctionFileInfo', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AddUploadedFunctionFileInfoRequest $request
     *
     * @return AddUploadedFunctionFileInfoResponse
     */
    public function addUploadedFunctionFileInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addUploadedFunctionFileInfoWithOptions($request, $runtime);
    }

    /**
     * @param CreateProjectAppRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateProjectAppResponse
     */
    public function createProjectAppWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateProjectAppResponse::fromMap($this->doRPCRequest('CreateProjectApp', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateProjectAppRequest $request
     *
     * @return CreateProjectAppResponse
     */
    public function createProjectApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createProjectAppWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return ListServicesResponse
     */
    public function listServicesWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);

        return ListServicesResponse::fromMap($this->doRPCRequest('ListServices', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @return ListServicesResponse
     */
    public function listServices()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listServicesWithOptions($runtime);
    }

    /**
     * @param FindOsVersionsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return FindOsVersionsResponse
     */
    public function findOsVersionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return FindOsVersionsResponse::fromMap($this->doRPCRequest('FindOsVersions', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param FindOsVersionsRequest $request
     *
     * @return FindOsVersionsResponse
     */
    public function findOsVersions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->findOsVersionsWithOptions($request, $runtime);
    }

    /**
     * @param UpdateVersionPrepublishActiveStatusRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return UpdateVersionPrepublishActiveStatusResponse
     */
    public function updateVersionPrepublishActiveStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateVersionPrepublishActiveStatusResponse::fromMap($this->doRPCRequest('UpdateVersionPrepublishActiveStatus', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateVersionPrepublishActiveStatusRequest $request
     *
     * @return UpdateVersionPrepublishActiveStatusResponse
     */
    public function updateVersionPrepublishActiveStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateVersionPrepublishActiveStatusWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateOsVersionResponse::fromMap($this->doRPCRequest('CreateOsVersion', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param CountDeviceBrandsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CountDeviceBrandsResponse
     */
    public function countDeviceBrandsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return CountDeviceBrandsResponse::fromMap($this->doRPCRequest('CountDeviceBrands', '2018-05-01', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CountDeviceBrandsRequest $request
     *
     * @return CountDeviceBrandsResponse
     */
    public function countDeviceBrands($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->countDeviceBrandsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDeviceBrandRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeDeviceBrandResponse
     */
    public function describeDeviceBrandWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return DescribeDeviceBrandResponse::fromMap($this->doRPCRequest('DescribeDeviceBrand', '2018-05-01', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeDeviceBrandRequest $request
     *
     * @return DescribeDeviceBrandResponse
     */
    public function describeDeviceBrand($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDeviceBrandWithOptions($request, $runtime);
    }

    /**
     * @param CreateShadowSchemaRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateShadowSchemaResponse
     */
    public function createShadowSchemaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateShadowSchemaResponse::fromMap($this->doRPCRequest('CreateShadowSchema', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateShadowSchemaRequest $request
     *
     * @return CreateShadowSchemaResponse
     */
    public function createShadowSchema($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createShadowSchemaWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDeviceValiditySchemaRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeDeviceValiditySchemaResponse
     */
    public function describeDeviceValiditySchemaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDeviceValiditySchemaResponse::fromMap($this->doRPCRequest('DescribeDeviceValiditySchema', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeDeviceValiditySchemaRequest $request
     *
     * @return DescribeDeviceValiditySchemaResponse
     */
    public function describeDeviceValiditySchema($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDeviceValiditySchemaWithOptions($request, $runtime);
    }

    /**
     * @param GetOssUploadMetaRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetOssUploadMetaResponse
     */
    public function getOssUploadMetaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetOssUploadMetaResponse::fromMap($this->doRPCRequest('GetOssUploadMeta', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetOssUploadMetaRequest $request
     *
     * @return GetOssUploadMetaResponse
     */
    public function getOssUploadMeta($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOssUploadMetaWithOptions($request, $runtime);
    }

    /**
     * @param ListUpstreamAppKeyRelationsRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ListUpstreamAppKeyRelationsResponse
     */
    public function listUpstreamAppKeyRelationsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListUpstreamAppKeyRelationsResponse::fromMap($this->doRPCRequest('ListUpstreamAppKeyRelations', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListUpstreamAppKeyRelationsRequest $request
     *
     * @return ListUpstreamAppKeyRelationsResponse
     */
    public function listUpstreamAppKeyRelations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUpstreamAppKeyRelationsWithOptions($request, $runtime);
    }

    /**
     * @param ListShadowSchemasRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListShadowSchemasResponse
     */
    public function listShadowSchemasWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListShadowSchemasResponse::fromMap($this->doRPCRequest('ListShadowSchemas', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListShadowSchemasRequest $request
     *
     * @return ListShadowSchemasResponse
     */
    public function listShadowSchemas($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listShadowSchemasWithOptions($request, $runtime);
    }

    /**
     * @param DeleteProjectAppRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteProjectAppResponse
     */
    public function deleteProjectAppWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteProjectAppResponse::fromMap($this->doRPCRequest('DeleteProjectApp', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteProjectAppRequest $request
     *
     * @return DeleteProjectAppResponse
     */
    public function deleteProjectApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteProjectAppWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return CountYunIdInfoResponse
     */
    public function countYunIdInfoWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);

        return CountYunIdInfoResponse::fromMap($this->doRPCRequest('CountYunIdInfo', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @return CountYunIdInfoResponse
     */
    public function countYunIdInfo()
    {
        $runtime = new RuntimeOptions([]);

        return $this->countYunIdInfoWithOptions($runtime);
    }

    /**
     * @param FindPrepublishesByParentIdRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return FindPrepublishesByParentIdResponse
     */
    public function findPrepublishesByParentIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return FindPrepublishesByParentIdResponse::fromMap($this->doRPCRequest('FindPrepublishesByParentId', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param FindPrepublishesByParentIdRequest $request
     *
     * @return FindPrepublishesByParentIdResponse
     */
    public function findPrepublishesByParentId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->findPrepublishesByParentIdWithOptions($request, $runtime);
    }

    /**
     * @param GetVehicleControlResultRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetVehicleControlResultResponse
     */
    public function getVehicleControlResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return GetVehicleControlResultResponse::fromMap($this->doRPCRequest('GetVehicleControlResult', '2018-05-01', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetVehicleControlResultRequest $request
     *
     * @return GetVehicleControlResultResponse
     */
    public function getVehicleControlResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getVehicleControlResultWithOptions($request, $runtime);
    }

    /**
     * @param UpdateTriggerRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateTriggerResponse
     */
    public function updateTriggerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateTriggerResponse::fromMap($this->doRPCRequest('UpdateTrigger', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateTriggerRequest $request
     *
     * @return UpdateTriggerResponse
     */
    public function updateTrigger($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateTriggerWithOptions($request, $runtime);
    }

    /**
     * @param ListClientSdksRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListClientSdksResponse
     */
    public function listClientSdksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListClientSdksResponse::fromMap($this->doRPCRequest('ListClientSdks', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListClientSdksRequest $request
     *
     * @return ListClientSdksResponse
     */
    public function listClientSdks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listClientSdksWithOptions($request, $runtime);
    }

    /**
     * @param ListVersionDeviceGroupsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListVersionDeviceGroupsResponse
     */
    public function listVersionDeviceGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListVersionDeviceGroupsResponse::fromMap($this->doRPCRequest('ListVersionDeviceGroups', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListVersionDeviceGroupsRequest $request
     *
     * @return ListVersionDeviceGroupsResponse
     */
    public function listVersionDeviceGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listVersionDeviceGroupsWithOptions($request, $runtime);
    }

    /**
     * @param GetCommercialVehicleDeviceRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return GetCommercialVehicleDeviceResponse
     */
    public function getCommercialVehicleDeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetCommercialVehicleDeviceResponse::fromMap($this->doRPCRequest('GetCommercialVehicleDevice', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetCommercialVehicleDeviceRequest $request
     *
     * @return GetCommercialVehicleDeviceResponse
     */
    public function getCommercialVehicleDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCommercialVehicleDeviceWithOptions($request, $runtime);
    }

    /**
     * @param SubmitAssistReportRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return SubmitAssistReportResponse
     */
    public function submitAssistReportWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SubmitAssistReportResponse::fromMap($this->doRPCRequest('SubmitAssistReport', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SubmitAssistReportRequest $request
     *
     * @return SubmitAssistReportResponse
     */
    public function submitAssistReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitAssistReportWithOptions($request, $runtime);
    }

    /**
     * @param DeleteVersionAllBlackDevicesRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DeleteVersionAllBlackDevicesResponse
     */
    public function deleteVersionAllBlackDevicesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteVersionAllBlackDevicesResponse::fromMap($this->doRPCRequest('DeleteVersionAllBlackDevices', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteVersionAllBlackDevicesRequest $request
     *
     * @return DeleteVersionAllBlackDevicesResponse
     */
    public function deleteVersionAllBlackDevices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteVersionAllBlackDevicesWithOptions($request, $runtime);
    }

    /**
     * @param ListOpenAccountLinksRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListOpenAccountLinksResponse
     */
    public function listOpenAccountLinksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return ListOpenAccountLinksResponse::fromMap($this->doRPCRequest('ListOpenAccountLinks', '2018-05-01', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListOpenAccountLinksRequest $request
     *
     * @return ListOpenAccountLinksResponse
     */
    public function listOpenAccountLinks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listOpenAccountLinksWithOptions($request, $runtime);
    }

    /**
     * @param AddVersionWhiteDevicesByDeviceGroupsRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return AddVersionWhiteDevicesByDeviceGroupsResponse
     */
    public function addVersionWhiteDevicesByDeviceGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddVersionWhiteDevicesByDeviceGroupsResponse::fromMap($this->doRPCRequest('AddVersionWhiteDevicesByDeviceGroups', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AddVersionWhiteDevicesByDeviceGroupsRequest $request
     *
     * @return AddVersionWhiteDevicesByDeviceGroupsResponse
     */
    public function addVersionWhiteDevicesByDeviceGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addVersionWhiteDevicesByDeviceGroupsWithOptions($request, $runtime);
    }

    /**
     * @param FindCustomizedPropertiesRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return FindCustomizedPropertiesResponse
     */
    public function findCustomizedPropertiesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return FindCustomizedPropertiesResponse::fromMap($this->doRPCRequest('FindCustomizedProperties', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param FindCustomizedPropertiesRequest $request
     *
     * @return FindCustomizedPropertiesResponse
     */
    public function findCustomizedProperties($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->findCustomizedPropertiesWithOptions($request, $runtime);
    }

    /**
     * @param ListMessageAcksRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListMessageAcksResponse
     */
    public function listMessageAcksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListMessageAcksResponse::fromMap($this->doRPCRequest('ListMessageAcks', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListMessageAcksRequest $request
     *
     * @return ListMessageAcksResponse
     */
    public function listMessageAcks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listMessageAcksWithOptions($request, $runtime);
    }

    /**
     * @param GetCommercialVehicleTrackRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return GetCommercialVehicleTrackResponse
     */
    public function getCommercialVehicleTrackWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetCommercialVehicleTrackResponse::fromMap($this->doRPCRequest('GetCommercialVehicleTrack', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetCommercialVehicleTrackRequest $request
     *
     * @return GetCommercialVehicleTrackResponse
     */
    public function getCommercialVehicleTrack($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCommercialVehicleTrackWithOptions($request, $runtime);
    }

    /**
     * @param ListHostDevicesRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListHostDevicesResponse
     */
    public function listHostDevicesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListHostDevicesResponse::fromMap($this->doRPCRequest('ListHostDevices', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListHostDevicesRequest $request
     *
     * @return ListHostDevicesResponse
     */
    public function listHostDevices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listHostDevicesWithOptions($request, $runtime);
    }

    /**
     * @param ListMqttClientSubscriptionsRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ListMqttClientSubscriptionsResponse
     */
    public function listMqttClientSubscriptionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListMqttClientSubscriptionsResponse::fromMap($this->doRPCRequest('ListMqttClientSubscriptions', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListMqttClientSubscriptionsRequest $request
     *
     * @return ListMqttClientSubscriptionsResponse
     */
    public function listMqttClientSubscriptions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listMqttClientSubscriptionsWithOptions($request, $runtime);
    }

    /**
     * @param InvokeFunctionRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return InvokeFunctionResponse
     */
    public function invokeFunctionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return InvokeFunctionResponse::fromMap($this->doRPCRequest('InvokeFunction', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param InvokeFunctionRequest $request
     *
     * @return InvokeFunctionResponse
     */
    public function invokeFunction($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->invokeFunctionWithOptions($request, $runtime);
    }

    /**
     * @param DeleteVersionAllWhiteDevicesRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DeleteVersionAllWhiteDevicesResponse
     */
    public function deleteVersionAllWhiteDevicesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteVersionAllWhiteDevicesResponse::fromMap($this->doRPCRequest('DeleteVersionAllWhiteDevices', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteVersionAllWhiteDevicesRequest $request
     *
     * @return DeleteVersionAllWhiteDevicesResponse
     */
    public function deleteVersionAllWhiteDevices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteVersionAllWhiteDevicesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeMessageRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeMessageResponse
     */
    public function describeMessageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeMessageResponse::fromMap($this->doRPCRequest('DescribeMessage', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeMessageRequest $request
     *
     * @return DescribeMessageResponse
     */
    public function describeMessage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMessageWithOptions($request, $runtime);
    }

    /**
     * @param UpdateProjectRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateProjectResponse
     */
    public function updateProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateProjectResponse::fromMap($this->doRPCRequest('UpdateProject', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateProjectRequest $request
     *
     * @return UpdateProjectResponse
     */
    public function updateProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateProjectWithOptions($request, $runtime);
    }

    /**
     * @param UpdateAppBlackWhiteVersionsRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return UpdateAppBlackWhiteVersionsResponse
     */
    public function updateAppBlackWhiteVersionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateAppBlackWhiteVersionsResponse::fromMap($this->doRPCRequest('UpdateAppBlackWhiteVersions', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateAppBlackWhiteVersionsRequest $request
     *
     * @return UpdateAppBlackWhiteVersionsResponse
     */
    public function updateAppBlackWhiteVersions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAppBlackWhiteVersionsWithOptions($request, $runtime);
    }

    /**
     * @param GetDeviceAppUpdateFunnelEventsRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return GetDeviceAppUpdateFunnelEventsResponse
     */
    public function getDeviceAppUpdateFunnelEventsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetDeviceAppUpdateFunnelEventsResponse::fromMap($this->doRPCRequest('GetDeviceAppUpdateFunnelEvents', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetDeviceAppUpdateFunnelEventsRequest $request
     *
     * @return GetDeviceAppUpdateFunnelEventsResponse
     */
    public function getDeviceAppUpdateFunnelEvents($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDeviceAppUpdateFunnelEventsWithOptions($request, $runtime);
    }

    /**
     * @param GetNamespaceStatisticsDataRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return GetNamespaceStatisticsDataResponse
     */
    public function getNamespaceStatisticsDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetNamespaceStatisticsDataResponse::fromMap($this->doRPCRequest('GetNamespaceStatisticsData', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetNamespaceStatisticsDataRequest $request
     *
     * @return GetNamespaceStatisticsDataResponse
     */
    public function getNamespaceStatisticsData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getNamespaceStatisticsDataWithOptions($request, $runtime);
    }
}
