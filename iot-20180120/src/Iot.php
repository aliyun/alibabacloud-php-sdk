<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\Iot\V20180120\Models\AddDataForApiSourceRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\AddDataForApiSourceResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\AddShareTaskDeviceRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\AddShareTaskDeviceResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\AttachDestinationRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\AttachDestinationResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\AttachParserDataSourceRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\AttachParserDataSourceResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\BatchAddDataForApiSourceRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\BatchAddDataForApiSourceResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\BatchAddDataForApiSourceShrinkRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\BatchAddDeviceGroupRelationsRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\BatchAddDeviceGroupRelationsResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\BatchAddThingTopoRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\BatchAddThingTopoResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\BatchBindDevicesIntoProjectRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\BatchBindDevicesIntoProjectResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\BatchBindDeviceToEdgeInstanceWithDriverRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\BatchBindDeviceToEdgeInstanceWithDriverResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\BatchBindProductsIntoProjectRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\BatchBindProductsIntoProjectResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\BatchCheckDeviceNamesRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\BatchCheckDeviceNamesResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\BatchCheckImportDeviceRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\BatchCheckImportDeviceResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\BatchCheckVehicleDeviceRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\BatchCheckVehicleDeviceResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\BatchClearEdgeInstanceDeviceConfigRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\BatchClearEdgeInstanceDeviceConfigResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\BatchCreateSoundCodeLabelRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\BatchCreateSoundCodeLabelResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\BatchCreateSoundCodeLabelWithLabelsRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\BatchCreateSoundCodeLabelWithLabelsResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\BatchDeleteDeviceGroupRelationsRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\BatchDeleteDeviceGroupRelationsResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\BatchDeleteEdgeInstanceChannelRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\BatchDeleteEdgeInstanceChannelResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\BatchGetDeviceBindStatusRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\BatchGetDeviceBindStatusResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\BatchGetDeviceStateRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\BatchGetDeviceStateResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\BatchGetEdgeDriverRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\BatchGetEdgeDriverResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\BatchGetEdgeInstanceChannelRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\BatchGetEdgeInstanceChannelResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\BatchGetEdgeInstanceDeviceChannelRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\BatchGetEdgeInstanceDeviceChannelResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\BatchGetEdgeInstanceDeviceConfigRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\BatchGetEdgeInstanceDeviceConfigResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\BatchGetEdgeInstanceDeviceDriverRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\BatchGetEdgeInstanceDeviceDriverResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\BatchGetEdgeInstanceDriverConfigsRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\BatchGetEdgeInstanceDriverConfigsResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\BatchImportDeviceRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\BatchImportDeviceResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\BatchImportVehicleDeviceRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\BatchImportVehicleDeviceResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\BatchPubRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\BatchPubResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\BatchQueryDeviceDetailRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\BatchQueryDeviceDetailResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\BatchRegisterDeviceRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\BatchRegisterDeviceResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\BatchRegisterDeviceWithApplyIdRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\BatchRegisterDeviceWithApplyIdResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\BatchSetEdgeInstanceDeviceChannelRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\BatchSetEdgeInstanceDeviceChannelResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\BatchSetEdgeInstanceDeviceConfigRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\BatchSetEdgeInstanceDeviceConfigResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\BatchUnbindDeviceFromEdgeInstanceRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\BatchUnbindDeviceFromEdgeInstanceResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\BatchUnbindProjectDevicesRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\BatchUnbindProjectDevicesResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\BatchUnbindProjectProductsRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\BatchUnbindProjectProductsResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\BatchUpdateDeviceNicknameRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\BatchUpdateDeviceNicknameResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\BindApplicationToEdgeInstanceRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\BindApplicationToEdgeInstanceResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\BindDriverToEdgeInstanceRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\BindDriverToEdgeInstanceResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\BindGatewayToEdgeInstanceRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\BindGatewayToEdgeInstanceResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\BindLicenseDeviceRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\BindLicenseDeviceResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\BindLicenseProductRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\BindLicenseProductResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\BindRoleToEdgeInstanceRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\BindRoleToEdgeInstanceResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\BindSceneRuleToEdgeInstanceRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\BindSceneRuleToEdgeInstanceResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\CancelJobRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\CancelJobResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\CancelOTAStrategyByJobRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\CancelOTAStrategyByJobResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\CancelOTATaskByDeviceRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\CancelOTATaskByDeviceResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\CancelOTATaskByJobRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\CancelOTATaskByJobResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\CancelReleaseProductRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\CancelReleaseProductResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\CheckBindLicenseDeviceProgressRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\CheckBindLicenseDeviceProgressResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\ClearDeviceDesiredPropertyRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\ClearDeviceDesiredPropertyResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\ClearEdgeInstanceDriverConfigsRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\ClearEdgeInstanceDriverConfigsResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\CloseDeviceTunnelRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\CloseDeviceTunnelResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\CloseEdgeInstanceDeploymentRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\CloseEdgeInstanceDeploymentResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\ConfirmOTATaskRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\ConfirmOTATaskResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\CopyThingModelRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\CopyThingModelResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\CountSpeechBroadcastHourRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\CountSpeechBroadcastHourResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\CreateConsumerGroupRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\CreateConsumerGroupResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\CreateConsumerGroupSubscribeRelationRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\CreateConsumerGroupSubscribeRelationResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\CreateDataAPIServiceRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\CreateDataAPIServiceResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\CreateDataSourceItemRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\CreateDataSourceItemResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\CreateDestinationRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\CreateDestinationResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\CreateDeviceDistributeJobRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\CreateDeviceDistributeJobResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\CreateDeviceDynamicGroupRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\CreateDeviceDynamicGroupResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\CreateDeviceGroupRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\CreateDeviceGroupResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\CreateDeviceTunnelRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\CreateDeviceTunnelResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\CreateDownloadDataJobRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\CreateDownloadDataJobResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\CreateDownloadDataJobShrinkRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\CreateEdgeDriverRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\CreateEdgeDriverResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\CreateEdgeDriverVersionRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\CreateEdgeDriverVersionResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\CreateEdgeInstanceChannelRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\CreateEdgeInstanceChannelResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\CreateEdgeInstanceDeploymentRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\CreateEdgeInstanceDeploymentResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\CreateEdgeInstanceMessageRoutingRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\CreateEdgeInstanceMessageRoutingResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\CreateEdgeInstanceRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\CreateEdgeInstanceResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\CreateEdgeOssPreSignedAddressRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\CreateEdgeOssPreSignedAddressResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\CreateJobRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\CreateJobResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\CreateJobShrinkRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\CreateLoRaNodesTaskRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\CreateLoRaNodesTaskResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\CreateOTADynamicUpgradeJobRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\CreateOTADynamicUpgradeJobResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\CreateOTAFirmwareRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\CreateOTAFirmwareResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\CreateOTAModuleRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\CreateOTAModuleResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\CreateOTAStaticUpgradeJobRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\CreateOTAStaticUpgradeJobResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\CreateOTAVerifyJobRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\CreateOTAVerifyJobResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\CreateParserDataSourceRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\CreateParserDataSourceResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\CreateParserRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\CreateParserResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\CreateProductDistributeJobRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\CreateProductDistributeJobResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\CreateProductRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\CreateProductResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\CreateProductTagsRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\CreateProductTagsResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\CreateProductTopicRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\CreateProductTopicResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\CreateRuleActionRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\CreateRuleActionResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\CreateRuleRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\CreateRuleResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\CreateSceneRuleRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\CreateSceneRuleResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\CreateSchedulePeriodRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\CreateSchedulePeriodResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\CreateSoundCodeLabelRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\CreateSoundCodeLabelResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\CreateSoundCodeRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\CreateSoundCodeResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\CreateSoundCodeScheduleRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\CreateSoundCodeScheduleResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\CreateSpeechRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\CreateSpeechResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\CreateSpeechShrinkRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\CreateStudioAppDomainOpenRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\CreateStudioAppDomainOpenResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\CreateSubscribeRelationRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\CreateSubscribeRelationResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\CreateThingModelRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\CreateThingModelResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\CreateThingScriptRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\CreateThingScriptResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\CreateTopicRouteTableRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\CreateTopicRouteTableResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\DeleteClientIdsRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\DeleteClientIdsResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\DeleteConsumerGroupRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\DeleteConsumerGroupResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\DeleteConsumerGroupSubscribeRelationRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\DeleteConsumerGroupSubscribeRelationResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\DeleteDataSourceItemRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\DeleteDataSourceItemResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\DeleteDestinationRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\DeleteDestinationResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\DeleteDeviceDistributeJobRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\DeleteDeviceDistributeJobResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\DeleteDeviceDynamicGroupRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\DeleteDeviceDynamicGroupResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\DeleteDeviceFileRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\DeleteDeviceFileResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\DeleteDeviceGroupRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\DeleteDeviceGroupResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\DeleteDevicePropRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\DeleteDevicePropResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\DeleteDeviceRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\DeleteDeviceResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\DeleteDeviceSpeechRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\DeleteDeviceSpeechResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\DeleteDeviceTunnelRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\DeleteDeviceTunnelResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\DeleteEdgeDriverRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\DeleteEdgeDriverResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\DeleteEdgeDriverVersionRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\DeleteEdgeDriverVersionResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\DeleteEdgeInstanceMessageRoutingRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\DeleteEdgeInstanceMessageRoutingResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\DeleteEdgeInstanceRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\DeleteEdgeInstanceResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\DeleteJobRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\DeleteJobResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\DeleteOTAFirmwareRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\DeleteOTAFirmwareResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\DeleteOTAModuleRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\DeleteOTAModuleResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\DeleteParserDataSourceRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\DeleteParserDataSourceResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\DeleteParserRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\DeleteParserResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\DeleteProductRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\DeleteProductResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\DeleteProductTagsRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\DeleteProductTagsResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\DeleteProductTopicRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\DeleteProductTopicResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\DeleteRuleActionRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\DeleteRuleActionResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\DeleteRuleRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\DeleteRuleResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\DeleteSceneRuleRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\DeleteSceneRuleResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\DeleteSchedulePeriodRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\DeleteSchedulePeriodResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\DeleteShareTaskDeviceRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\DeleteShareTaskDeviceResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\DeleteSoundCodeLabelRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\DeleteSoundCodeLabelResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\DeleteSoundCodeRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\DeleteSoundCodeResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\DeleteSoundCodeScheduleRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\DeleteSoundCodeScheduleResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\DeleteSpeechRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\DeleteSpeechResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\DeleteStudioAppDomainOpenRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\DeleteStudioAppDomainOpenResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\DeleteSubscribeRelationRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\DeleteSubscribeRelationResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\DeleteThingModelRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\DeleteThingModelResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\DeleteTopicRouteTableRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\DeleteTopicRouteTableResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\DetachDestinationRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\DetachDestinationResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\DetachParserDataSourceRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\DetachParserDataSourceResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\DisableDeviceTunnelRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\DisableDeviceTunnelResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\DisableDeviceTunnelShareRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\DisableDeviceTunnelShareResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\DisableSceneRuleRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\DisableSceneRuleResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\DisableThingRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\DisableThingResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\EnableDeviceTunnelRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\EnableDeviceTunnelResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\EnableDeviceTunnelShareRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\EnableDeviceTunnelShareResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\EnableSceneRuleRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\EnableSceneRuleResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\EnableThingRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\EnableThingResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\GenerateDeviceNameListURLRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\GenerateDeviceNameListURLResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\GenerateFileUploadURLRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\GenerateFileUploadURLResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\GenerateOTAUploadURLRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\GenerateOTAUploadURLResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\GetDataAPIServiceDetailRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\GetDataAPIServiceDetailResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\GetDestinationRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\GetDestinationResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\GetDeviceShadowRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\GetDeviceShadowResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\GetDeviceStatusRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\GetDeviceStatusResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\GetDeviceTunnelShareStatusRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\GetDeviceTunnelShareStatusResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\GetDeviceTunnelStatusRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\GetDeviceTunnelStatusResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\GetDownloadFileRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\GetDownloadFileResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\GetDownloadFileShrinkRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\GetEdgeDriverVersionRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\GetEdgeDriverVersionResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\GetEdgeInstanceDeploymentRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\GetEdgeInstanceDeploymentResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\GetEdgeInstanceMessageRoutingRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\GetEdgeInstanceMessageRoutingResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\GetEdgeInstanceRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\GetEdgeInstanceResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\GetGatewayBySubDeviceRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\GetGatewayBySubDeviceResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\GetLoraNodesTaskRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\GetLoraNodesTaskResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\GetParserDataSourceRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\GetParserDataSourceResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\GetParserRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\GetParserResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\GetRuleActionRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\GetRuleActionResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\GetRuleRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\GetRuleResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\GetSceneRuleRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\GetSceneRuleResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\GetShareTaskByDeviceOpenRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\GetShareTaskByDeviceOpenResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\GetSoundCodeAudioRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\GetSoundCodeAudioResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\GetSoundCodeScheduleRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\GetSoundCodeScheduleResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\GetSpeechDeviceDetailRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\GetSpeechDeviceDetailResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\GetSpeechLicenseDeviceStatisticsRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\GetSpeechLicenseDeviceStatisticsResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\GetSpeechVoiceRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\GetSpeechVoiceResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\GetStudioAppTokenOpenRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\GetStudioAppTokenOpenResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\GetThingModelTslPublishedRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\GetThingModelTslPublishedResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\GetThingModelTslRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\GetThingModelTslResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\GetThingScriptRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\GetThingScriptResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\GetThingTemplateRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\GetThingTemplateResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\GetThingTopoRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\GetThingTopoResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\GisQueryDeviceLocationRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\GisQueryDeviceLocationResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\GisSearchDeviceTraceRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\GisSearchDeviceTraceResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\ImportDeviceRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\ImportDeviceResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\ImportDTDataRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\ImportDTDataResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\ImportThingModelTslRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\ImportThingModelTslResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\InvokeDataAPIServiceRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\InvokeDataAPIServiceResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\InvokeThingServiceRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\InvokeThingServiceResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\InvokeThingsServiceRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\InvokeThingsServiceResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\ListAnalyticsDataRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\ListAnalyticsDataResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\ListDataSourceItemRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\ListDataSourceItemResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\ListDestinationRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\ListDestinationResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\ListDeviceDistributeJobRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\ListDeviceDistributeJobResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\ListDistributedDeviceRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\ListDistributedDeviceResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\ListDistributedProductRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\ListDistributedProductResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\ListJobRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\ListJobResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\ListOTAFirmwareRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\ListOTAFirmwareResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\ListOTAJobByDeviceRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\ListOTAJobByDeviceResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\ListOTAJobByFirmwareRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\ListOTAJobByFirmwareResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\ListOTAModuleByProductRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\ListOTAModuleByProductResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\ListOTAModuleVersionsByDeviceRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\ListOTAModuleVersionsByDeviceResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\ListOTATaskByJobRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\ListOTATaskByJobResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\ListOTAUnfinishedTaskByDeviceRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\ListOTAUnfinishedTaskByDeviceResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\ListParserDataSourceRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\ListParserDataSourceResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\ListParserDestinationRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\ListParserDestinationResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\ListParserRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\ListParserResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\ListProductByTagsRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\ListProductByTagsResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\ListProductTagsRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\ListProductTagsResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\ListRuleActionsRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\ListRuleActionsResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\ListRuleRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\ListRuleResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\ListTaskRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\ListTaskResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\ListTaskShrinkRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\ListThingModelVersionRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\ListThingModelVersionResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\ListThingTemplatesRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\ListThingTemplatesResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\NotifyAddThingTopoRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\NotifyAddThingTopoResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\OpenIotServiceRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\OpenIotServiceResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\PackageSoundCodeLabelBatchAudioRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\PackageSoundCodeLabelBatchAudioResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\PageQuerySharedSpeechOpenRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\PageQuerySharedSpeechOpenResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\PageQuerySpeechBroadcastHourRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\PageQuerySpeechBroadcastHourResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\PrintByTemplateRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\PrintByTemplateResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\PubBroadcastRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\PubBroadcastResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\PublishScriptRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\PublishScriptResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\PublishStudioAppRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\PublishStudioAppResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\PublishThingModelRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\PublishThingModelResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\PubRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\PubResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\PushSpeechRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\PushSpeechResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryBatchRegisterDeviceStatusRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryBatchRegisterDeviceStatusResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryCertUrlByApplyIdRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryCertUrlByApplyIdResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryClientIdsRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryClientIdsResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryConsumerGroupByGroupIdRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryConsumerGroupByGroupIdResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryConsumerGroupListRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryConsumerGroupListResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryConsumerGroupStatusRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryConsumerGroupStatusResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryDetailSceneRuleLogRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryDetailSceneRuleLogResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceBySQLRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceBySQLResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceByStatusRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceByStatusResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceByTagsRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceByTagsResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceCertRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceCertResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceDesiredPropertyRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceDesiredPropertyResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceDetailRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceDetailResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceDistributeDetailRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceDistributeDetailResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceDistributeJobRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceDistributeJobResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceEventDataRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceEventDataResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceFileListRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceFileListResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceFileRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceFileResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceGroupByDeviceRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceGroupByDeviceResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceGroupByTagsRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceGroupByTagsResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceGroupInfoRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceGroupInfoResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceGroupListRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceGroupListResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceGroupTagListRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceGroupTagListResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceInfoRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceInfoResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceListByDeviceGroupRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceListByDeviceGroupResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceOriginalEventDataRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceOriginalEventDataResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceOriginalPropertyDataRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceOriginalPropertyDataResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceOriginalPropertyStatusRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceOriginalPropertyStatusResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceOriginalServiceDataRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceOriginalServiceDataResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryDevicePropertiesDataRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryDevicePropertiesDataResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryDevicePropertyDataRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryDevicePropertyDataResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryDevicePropertyStatusRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryDevicePropertyStatusResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryDevicePropRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryDevicePropResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceServiceDataRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceServiceDataResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryDevicesHotStorageDataRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryDevicesHotStorageDataResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryDevicesHotStorageDataStatusRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryDevicesHotStorageDataStatusResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceSpeechRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceSpeechResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceStatisticsRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceStatisticsResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceSubTopicRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceSubTopicResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceTunnelRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceTunnelResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryDynamicGroupDevicesRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryDynamicGroupDevicesResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryEdgeDriverRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryEdgeDriverResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryEdgeDriverVersionRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryEdgeDriverVersionResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryEdgeInstanceChannelRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryEdgeInstanceChannelResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryEdgeInstanceDeviceByDriverRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryEdgeInstanceDeviceByDriverResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryEdgeInstanceDeviceRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryEdgeInstanceDeviceResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryEdgeInstanceDriverRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryEdgeInstanceDriverResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryEdgeInstanceGatewayRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryEdgeInstanceGatewayResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryEdgeInstanceHistoricDeploymentRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryEdgeInstanceHistoricDeploymentResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryEdgeInstanceMessageRoutingRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryEdgeInstanceMessageRoutingResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryEdgeInstanceRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryEdgeInstanceResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryEdgeInstanceSceneRuleRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryEdgeInstanceSceneRuleResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryImportedDeviceByApplyIdRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryImportedDeviceByApplyIdResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryJobRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryJobResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryJobStatisticsRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryJobStatisticsResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryLicenseDeviceListRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryLicenseDeviceListResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryLoRaJoinPermissionsRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryLoRaJoinPermissionsResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryMessageInfoRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryMessageInfoResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryOTAFirmwareRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryOTAFirmwareResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryOTAJobRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryOTAJobResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryPageByApplyIdRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryPageByApplyIdResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryProductCertInfoRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryProductCertInfoResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryProductListRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryProductListResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryProductRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryProductResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryProductTopicRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryProductTopicResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryProjectShareDeviceListRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryProjectShareDeviceListResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\QuerySceneRuleRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\QuerySceneRuleResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\QuerySchedulePeriodListRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\QuerySchedulePeriodListResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryShareTaskDeviceListRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryShareTaskDeviceListResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\QuerySolutionDeviceGroupPageRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\QuerySolutionDeviceGroupPageResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\QuerySoundCodeLabelBatchFailedResultRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\QuerySoundCodeLabelBatchFailedResultResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\QuerySoundCodeLabelBatchListRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\QuerySoundCodeLabelBatchListResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\QuerySoundCodeLabelListRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\QuerySoundCodeLabelListResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\QuerySoundCodeListRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\QuerySoundCodeListResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\QuerySoundCodeScheduleListRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\QuerySoundCodeScheduleListResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\QuerySpeechDeviceRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\QuerySpeechDeviceResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\QuerySpeechLicenseDeviceListRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\QuerySpeechLicenseDeviceListResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\QuerySpeechListRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\QuerySpeechListResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\QuerySpeechPushJobDeviceRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\QuerySpeechPushJobDeviceResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\QuerySpeechPushJobRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\QuerySpeechPushJobResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\QuerySpeechPushJobSpeechRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\QuerySpeechPushJobSpeechResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\QuerySpeechRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\QuerySpeechResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryStudioAppDomainListOpenRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryStudioAppDomainListOpenResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryStudioAppListRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryStudioAppListResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryStudioAppPageListOpenRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryStudioAppPageListOpenResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryStudioProjectListRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryStudioProjectListResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\QuerySubscribeRelationRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\QuerySubscribeRelationResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\QuerySummarySceneRuleLogRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\QuerySummarySceneRuleLogResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\QuerySuperDeviceGroupRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\QuerySuperDeviceGroupResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryTaskRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryTaskResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryThingModelExtendConfigPublishedRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryThingModelExtendConfigPublishedResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryThingModelExtendConfigRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryThingModelExtendConfigResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryThingModelPublishedRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryThingModelPublishedResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryThingModelRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryThingModelResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryTopicReverseRouteTableRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryTopicReverseRouteTableResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryTopicRouteTableRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryTopicRouteTableResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryVehicleDeviceRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryVehicleDeviceResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\ReBindLicenseDeviceRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\ReBindLicenseDeviceResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\RecognizeCarNumRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\RecognizeCarNumResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\RecognizePictureGeneralRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\RecognizePictureGeneralResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\RefreshDeviceTunnelSharePasswordRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\RefreshDeviceTunnelSharePasswordResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\RefreshStudioAppTokenOpenRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\RefreshStudioAppTokenOpenResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\RegisterDeviceRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\RegisterDeviceResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\ReleaseEdgeDriverVersionRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\ReleaseEdgeDriverVersionResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\ReleaseProductRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\ReleaseProductResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\RemoveThingTopoRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\RemoveThingTopoResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\ReplaceEdgeInstanceGatewayRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\ReplaceEdgeInstanceGatewayResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\RerunJobRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\RerunJobResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\ResetConsumerGroupPositionRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\ResetConsumerGroupPositionResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\ResetThingRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\ResetThingResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\RetrySoundCodeLabelBatchRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\RetrySoundCodeLabelBatchResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\ReupgradeOTATaskRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\ReupgradeOTATaskResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\RRpcRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\RRpcResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\SaveDevicePropRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\SaveDevicePropResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\SaveScriptRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\SaveScriptResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\SetDeviceDesiredPropertyRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\SetDeviceDesiredPropertyResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\SetDeviceGroupTagsRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\SetDeviceGroupTagsResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\SetDevicePropertyRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\SetDevicePropertyResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\SetDevicesPropertyRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\SetDevicesPropertyResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\SetEdgeInstanceDriverConfigsRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\SetEdgeInstanceDriverConfigsResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\SetProductCertInfoRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\SetProductCertInfoResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\SetStudioProjectCooperationRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\SetStudioProjectCooperationResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\SetupStudioAppAuthModeOpenRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\SetupStudioAppAuthModeOpenResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\ShareSpeechByCombinationRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\ShareSpeechByCombinationResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\SpeechByCombinationRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\SpeechByCombinationResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\SpeechBySynthesisRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\SpeechBySynthesisResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\StartParserRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\StartParserResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\StartRuleRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\StartRuleResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\StopParserRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\StopParserResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\StopRuleRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\StopRuleResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\SubscribeTopicRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\SubscribeTopicResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\SyncSpeechByCombinationRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\SyncSpeechByCombinationResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\TestSpeechRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\TestSpeechResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\TestSpeechShrinkRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\TransformClientIdRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\TransformClientIdResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\TriggerSceneRuleRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\TriggerSceneRuleResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\UnbindApplicationFromEdgeInstanceRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\UnbindApplicationFromEdgeInstanceResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\UnbindDriverFromEdgeInstanceRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\UnbindDriverFromEdgeInstanceResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\UnbindLicenseProductRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\UnbindLicenseProductResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\UnbindRoleFromEdgeInstanceRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\UnbindRoleFromEdgeInstanceResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\UnbindSceneRuleFromEdgeInstanceRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\UnbindSceneRuleFromEdgeInstanceResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\UpdateConsumerGroupRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\UpdateConsumerGroupResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\UpdateDestinationRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\UpdateDestinationResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\UpdateDeviceGroupRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\UpdateDeviceGroupResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\UpdateDeviceShadowRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\UpdateDeviceShadowResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\UpdateEdgeDriverVersionRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\UpdateEdgeDriverVersionResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\UpdateEdgeInstanceChannelRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\UpdateEdgeInstanceChannelResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\UpdateEdgeInstanceMessageRoutingRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\UpdateEdgeInstanceMessageRoutingResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\UpdateEdgeInstanceRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\UpdateEdgeInstanceResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\UpdateJobRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\UpdateJobResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\UpdateJobShrinkRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\UpdateOTAModuleRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\UpdateOTAModuleResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\UpdateParserDataSourceRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\UpdateParserDataSourceResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\UpdateParserRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\UpdateParserResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\UpdateProductFilterConfigRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\UpdateProductFilterConfigResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\UpdateProductRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\UpdateProductResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\UpdateProductTagsRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\UpdateProductTagsResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\UpdateProductTopicRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\UpdateProductTopicResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\UpdateRuleActionRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\UpdateRuleActionResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\UpdateRuleRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\UpdateRuleResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\UpdateSceneRuleRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\UpdateSceneRuleResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\UpdateSchedulePeriodRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\UpdateSchedulePeriodResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\UpdateSoundCodeLabelRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\UpdateSoundCodeLabelResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\UpdateSoundCodeRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\UpdateSoundCodeResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\UpdateSoundCodeScheduleRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\UpdateSoundCodeScheduleResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\UpdateSpeechRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\UpdateSpeechResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\UpdateSpeechShrinkRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\UpdateSubscribeRelationRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\UpdateSubscribeRelationResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\UpdateThingModelRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\UpdateThingModelResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\UpdateThingScriptRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\UpdateThingScriptResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\WriteDevicesHotStorageDataRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\WriteDevicesHotStorageDataResponse;
use AlibabaCloud\Tea\Rpc\Rpc;
use AlibabaCloud\Tea\RpcUtils\RpcUtils;
use AlibabaCloud\Tea\Tea;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;

class Iot extends Rpc
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'ap-northeast-2-pop'          => 'iot.aliyuncs.com',
            'ap-south-1'                  => 'iot.aliyuncs.com',
            'ap-southeast-2'              => 'iot.aliyuncs.com',
            'ap-southeast-3'              => 'iot.aliyuncs.com',
            'ap-southeast-5'              => 'iot.aliyuncs.com',
            'cn-beijing-finance-1'        => 'iot.aliyuncs.com',
            'cn-beijing-finance-pop'      => 'iot.aliyuncs.com',
            'cn-beijing-gov-1'            => 'iot.aliyuncs.com',
            'cn-beijing-nu16-b01'         => 'iot.aliyuncs.com',
            'cn-chengdu'                  => 'iot.aliyuncs.com',
            'cn-edge-1'                   => 'iot.aliyuncs.com',
            'cn-fujian'                   => 'iot.aliyuncs.com',
            'cn-haidian-cm12-c01'         => 'iot.aliyuncs.com',
            'cn-hangzhou-bj-b01'          => 'iot.aliyuncs.com',
            'cn-hangzhou-finance'         => 'iot.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'iot.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'iot.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'iot.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'iot.aliyuncs.com',
            'cn-hangzhou-test-306'        => 'iot.aliyuncs.com',
            'cn-hongkong'                 => 'iot.aliyuncs.com',
            'cn-hongkong-finance-pop'     => 'iot.aliyuncs.com',
            'cn-huhehaote'                => 'iot.aliyuncs.com',
            'cn-huhehaote-nebula-1'       => 'iot.aliyuncs.com',
            'cn-qingdao'                  => 'iot.aliyuncs.com',
            'cn-qingdao-nebula'           => 'iot.aliyuncs.com',
            'cn-shanghai-et15-b01'        => 'iot.aliyuncs.com',
            'cn-shanghai-et2-b01'         => 'iot.aliyuncs.com',
            'cn-shanghai-finance-1'       => 'iot.aliyuncs.com',
            'cn-shanghai-inner'           => 'iot.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'iot.aliyuncs.com',
            'cn-shenzhen-finance-1'       => 'iot.aliyuncs.com',
            'cn-shenzhen-inner'           => 'iot.aliyuncs.com',
            'cn-shenzhen-st4-d01'         => 'iot.aliyuncs.com',
            'cn-shenzhen-su18-b01'        => 'iot.aliyuncs.com',
            'cn-wuhan'                    => 'iot.aliyuncs.com',
            'cn-wulanchabu'               => 'iot.aliyuncs.com',
            'cn-yushanfang'               => 'iot.aliyuncs.com',
            'cn-zhangbei'                 => 'iot.aliyuncs.com',
            'cn-zhangbei-na61-b01'        => 'iot.aliyuncs.com',
            'cn-zhangjiakou'              => 'iot.aliyuncs.com',
            'cn-zhangjiakou-na62-a01'     => 'iot.aliyuncs.com',
            'cn-zhengzhou-nebula-1'       => 'iot.aliyuncs.com',
            'eu-west-1'                   => 'iot.aliyuncs.com',
            'eu-west-1-oxs'               => 'iot.aliyuncs.com',
            'me-east-1'                   => 'iot.aliyuncs.com',
            'rus-west-1-pop'              => 'iot.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('iot', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
    }

    /**
     * @param AddDataForApiSourceRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return AddDataForApiSourceResponse
     */
    public function addDataForApiSourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return AddDataForApiSourceResponse::fromMap($this->doRequest('AddDataForApiSource', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param AddDataForApiSourceRequest $request
     *
     * @return AddDataForApiSourceResponse
     */
    public function addDataForApiSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addDataForApiSourceWithOptions($request, $runtime);
    }

    /**
     * @param AddShareTaskDeviceRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return AddShareTaskDeviceResponse
     */
    public function addShareTaskDeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return AddShareTaskDeviceResponse::fromMap($this->doRequest('AddShareTaskDevice', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param AddShareTaskDeviceRequest $request
     *
     * @return AddShareTaskDeviceResponse
     */
    public function addShareTaskDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addShareTaskDeviceWithOptions($request, $runtime);
    }

    /**
     * @param AttachDestinationRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return AttachDestinationResponse
     */
    public function attachDestinationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return AttachDestinationResponse::fromMap($this->doRequest('AttachDestination', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param AttachDestinationRequest $request
     *
     * @return AttachDestinationResponse
     */
    public function attachDestination($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachDestinationWithOptions($request, $runtime);
    }

    /**
     * @param AttachParserDataSourceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return AttachParserDataSourceResponse
     */
    public function attachParserDataSourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return AttachParserDataSourceResponse::fromMap($this->doRequest('AttachParserDataSource', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param AttachParserDataSourceRequest $request
     *
     * @return AttachParserDataSourceResponse
     */
    public function attachParserDataSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachParserDataSourceWithOptions($request, $runtime);
    }

    /**
     * @param BatchAddDataForApiSourceRequest $tmp
     * @param RuntimeOptions                  $runtime
     *
     * @return BatchAddDataForApiSourceResponse
     */
    public function batchAddDataForApiSourceWithOptions($tmp, $runtime)
    {
        Utils::validateModel($tmp);
        $request = new BatchAddDataForApiSourceShrinkRequest([]);
        RpcUtils::convert($tmp, $request);
        if (!Utils::isUnset($tmp->contentList)) {
            $request->contentListShrink = Utils::toJSONString($tmp->contentList);
        }

        return BatchAddDataForApiSourceResponse::fromMap($this->doRequest('BatchAddDataForApiSource', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param BatchAddDataForApiSourceRequest $request
     *
     * @return BatchAddDataForApiSourceResponse
     */
    public function batchAddDataForApiSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchAddDataForApiSourceWithOptions($request, $runtime);
    }

    /**
     * @param BatchAddDeviceGroupRelationsRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return BatchAddDeviceGroupRelationsResponse
     */
    public function batchAddDeviceGroupRelationsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return BatchAddDeviceGroupRelationsResponse::fromMap($this->doRequest('BatchAddDeviceGroupRelations', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param BatchAddDeviceGroupRelationsRequest $request
     *
     * @return BatchAddDeviceGroupRelationsResponse
     */
    public function batchAddDeviceGroupRelations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchAddDeviceGroupRelationsWithOptions($request, $runtime);
    }

    /**
     * @param BatchAddThingTopoRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return BatchAddThingTopoResponse
     */
    public function batchAddThingTopoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return BatchAddThingTopoResponse::fromMap($this->doRequest('BatchAddThingTopo', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param BatchAddThingTopoRequest $request
     *
     * @return BatchAddThingTopoResponse
     */
    public function batchAddThingTopo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchAddThingTopoWithOptions($request, $runtime);
    }

    /**
     * @param BatchBindDeviceToEdgeInstanceWithDriverRequest $request
     * @param RuntimeOptions                                 $runtime
     *
     * @return BatchBindDeviceToEdgeInstanceWithDriverResponse
     */
    public function batchBindDeviceToEdgeInstanceWithDriverWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return BatchBindDeviceToEdgeInstanceWithDriverResponse::fromMap($this->doRequest('BatchBindDeviceToEdgeInstanceWithDriver', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param BatchBindDeviceToEdgeInstanceWithDriverRequest $request
     *
     * @return BatchBindDeviceToEdgeInstanceWithDriverResponse
     */
    public function batchBindDeviceToEdgeInstanceWithDriver($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchBindDeviceToEdgeInstanceWithDriverWithOptions($request, $runtime);
    }

    /**
     * @param BatchBindDevicesIntoProjectRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return BatchBindDevicesIntoProjectResponse
     */
    public function batchBindDevicesIntoProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return BatchBindDevicesIntoProjectResponse::fromMap($this->doRequest('BatchBindDevicesIntoProject', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param BatchBindDevicesIntoProjectRequest $request
     *
     * @return BatchBindDevicesIntoProjectResponse
     */
    public function batchBindDevicesIntoProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchBindDevicesIntoProjectWithOptions($request, $runtime);
    }

    /**
     * @param BatchBindProductsIntoProjectRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return BatchBindProductsIntoProjectResponse
     */
    public function batchBindProductsIntoProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return BatchBindProductsIntoProjectResponse::fromMap($this->doRequest('BatchBindProductsIntoProject', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param BatchBindProductsIntoProjectRequest $request
     *
     * @return BatchBindProductsIntoProjectResponse
     */
    public function batchBindProductsIntoProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchBindProductsIntoProjectWithOptions($request, $runtime);
    }

    /**
     * @param BatchCheckDeviceNamesRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return BatchCheckDeviceNamesResponse
     */
    public function batchCheckDeviceNamesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return BatchCheckDeviceNamesResponse::fromMap($this->doRequest('BatchCheckDeviceNames', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param BatchCheckDeviceNamesRequest $request
     *
     * @return BatchCheckDeviceNamesResponse
     */
    public function batchCheckDeviceNames($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchCheckDeviceNamesWithOptions($request, $runtime);
    }

    /**
     * @param BatchCheckImportDeviceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return BatchCheckImportDeviceResponse
     */
    public function batchCheckImportDeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return BatchCheckImportDeviceResponse::fromMap($this->doRequest('BatchCheckImportDevice', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param BatchCheckImportDeviceRequest $request
     *
     * @return BatchCheckImportDeviceResponse
     */
    public function batchCheckImportDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchCheckImportDeviceWithOptions($request, $runtime);
    }

    /**
     * @param BatchCheckVehicleDeviceRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return BatchCheckVehicleDeviceResponse
     */
    public function batchCheckVehicleDeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return BatchCheckVehicleDeviceResponse::fromMap($this->doRequest('BatchCheckVehicleDevice', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param BatchCheckVehicleDeviceRequest $request
     *
     * @return BatchCheckVehicleDeviceResponse
     */
    public function batchCheckVehicleDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchCheckVehicleDeviceWithOptions($request, $runtime);
    }

    /**
     * @param BatchClearEdgeInstanceDeviceConfigRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return BatchClearEdgeInstanceDeviceConfigResponse
     */
    public function batchClearEdgeInstanceDeviceConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return BatchClearEdgeInstanceDeviceConfigResponse::fromMap($this->doRequest('BatchClearEdgeInstanceDeviceConfig', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param BatchClearEdgeInstanceDeviceConfigRequest $request
     *
     * @return BatchClearEdgeInstanceDeviceConfigResponse
     */
    public function batchClearEdgeInstanceDeviceConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchClearEdgeInstanceDeviceConfigWithOptions($request, $runtime);
    }

    /**
     * @param BatchCreateSoundCodeLabelRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return BatchCreateSoundCodeLabelResponse
     */
    public function batchCreateSoundCodeLabelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return BatchCreateSoundCodeLabelResponse::fromMap($this->doRequest('BatchCreateSoundCodeLabel', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param BatchCreateSoundCodeLabelRequest $request
     *
     * @return BatchCreateSoundCodeLabelResponse
     */
    public function batchCreateSoundCodeLabel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchCreateSoundCodeLabelWithOptions($request, $runtime);
    }

    /**
     * @param BatchCreateSoundCodeLabelWithLabelsRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return BatchCreateSoundCodeLabelWithLabelsResponse
     */
    public function batchCreateSoundCodeLabelWithLabelsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return BatchCreateSoundCodeLabelWithLabelsResponse::fromMap($this->doRequest('BatchCreateSoundCodeLabelWithLabels', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param BatchCreateSoundCodeLabelWithLabelsRequest $request
     *
     * @return BatchCreateSoundCodeLabelWithLabelsResponse
     */
    public function batchCreateSoundCodeLabelWithLabels($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchCreateSoundCodeLabelWithLabelsWithOptions($request, $runtime);
    }

    /**
     * @param BatchDeleteDeviceGroupRelationsRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return BatchDeleteDeviceGroupRelationsResponse
     */
    public function batchDeleteDeviceGroupRelationsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return BatchDeleteDeviceGroupRelationsResponse::fromMap($this->doRequest('BatchDeleteDeviceGroupRelations', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param BatchDeleteDeviceGroupRelationsRequest $request
     *
     * @return BatchDeleteDeviceGroupRelationsResponse
     */
    public function batchDeleteDeviceGroupRelations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchDeleteDeviceGroupRelationsWithOptions($request, $runtime);
    }

    /**
     * @param BatchDeleteEdgeInstanceChannelRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return BatchDeleteEdgeInstanceChannelResponse
     */
    public function batchDeleteEdgeInstanceChannelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return BatchDeleteEdgeInstanceChannelResponse::fromMap($this->doRequest('BatchDeleteEdgeInstanceChannel', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param BatchDeleteEdgeInstanceChannelRequest $request
     *
     * @return BatchDeleteEdgeInstanceChannelResponse
     */
    public function batchDeleteEdgeInstanceChannel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchDeleteEdgeInstanceChannelWithOptions($request, $runtime);
    }

    /**
     * @param BatchGetDeviceBindStatusRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return BatchGetDeviceBindStatusResponse
     */
    public function batchGetDeviceBindStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return BatchGetDeviceBindStatusResponse::fromMap($this->doRequest('BatchGetDeviceBindStatus', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param BatchGetDeviceBindStatusRequest $request
     *
     * @return BatchGetDeviceBindStatusResponse
     */
    public function batchGetDeviceBindStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchGetDeviceBindStatusWithOptions($request, $runtime);
    }

    /**
     * @param BatchGetDeviceStateRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return BatchGetDeviceStateResponse
     */
    public function batchGetDeviceStateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return BatchGetDeviceStateResponse::fromMap($this->doRequest('BatchGetDeviceState', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param BatchGetDeviceStateRequest $request
     *
     * @return BatchGetDeviceStateResponse
     */
    public function batchGetDeviceState($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchGetDeviceStateWithOptions($request, $runtime);
    }

    /**
     * @param BatchGetEdgeDriverRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return BatchGetEdgeDriverResponse
     */
    public function batchGetEdgeDriverWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return BatchGetEdgeDriverResponse::fromMap($this->doRequest('BatchGetEdgeDriver', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param BatchGetEdgeDriverRequest $request
     *
     * @return BatchGetEdgeDriverResponse
     */
    public function batchGetEdgeDriver($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchGetEdgeDriverWithOptions($request, $runtime);
    }

    /**
     * @param BatchGetEdgeInstanceChannelRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return BatchGetEdgeInstanceChannelResponse
     */
    public function batchGetEdgeInstanceChannelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return BatchGetEdgeInstanceChannelResponse::fromMap($this->doRequest('BatchGetEdgeInstanceChannel', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param BatchGetEdgeInstanceChannelRequest $request
     *
     * @return BatchGetEdgeInstanceChannelResponse
     */
    public function batchGetEdgeInstanceChannel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchGetEdgeInstanceChannelWithOptions($request, $runtime);
    }

    /**
     * @param BatchGetEdgeInstanceDeviceChannelRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return BatchGetEdgeInstanceDeviceChannelResponse
     */
    public function batchGetEdgeInstanceDeviceChannelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return BatchGetEdgeInstanceDeviceChannelResponse::fromMap($this->doRequest('BatchGetEdgeInstanceDeviceChannel', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param BatchGetEdgeInstanceDeviceChannelRequest $request
     *
     * @return BatchGetEdgeInstanceDeviceChannelResponse
     */
    public function batchGetEdgeInstanceDeviceChannel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchGetEdgeInstanceDeviceChannelWithOptions($request, $runtime);
    }

    /**
     * @param BatchGetEdgeInstanceDeviceConfigRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return BatchGetEdgeInstanceDeviceConfigResponse
     */
    public function batchGetEdgeInstanceDeviceConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return BatchGetEdgeInstanceDeviceConfigResponse::fromMap($this->doRequest('BatchGetEdgeInstanceDeviceConfig', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param BatchGetEdgeInstanceDeviceConfigRequest $request
     *
     * @return BatchGetEdgeInstanceDeviceConfigResponse
     */
    public function batchGetEdgeInstanceDeviceConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchGetEdgeInstanceDeviceConfigWithOptions($request, $runtime);
    }

    /**
     * @param BatchGetEdgeInstanceDeviceDriverRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return BatchGetEdgeInstanceDeviceDriverResponse
     */
    public function batchGetEdgeInstanceDeviceDriverWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return BatchGetEdgeInstanceDeviceDriverResponse::fromMap($this->doRequest('BatchGetEdgeInstanceDeviceDriver', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param BatchGetEdgeInstanceDeviceDriverRequest $request
     *
     * @return BatchGetEdgeInstanceDeviceDriverResponse
     */
    public function batchGetEdgeInstanceDeviceDriver($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchGetEdgeInstanceDeviceDriverWithOptions($request, $runtime);
    }

    /**
     * @param BatchGetEdgeInstanceDriverConfigsRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return BatchGetEdgeInstanceDriverConfigsResponse
     */
    public function batchGetEdgeInstanceDriverConfigsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return BatchGetEdgeInstanceDriverConfigsResponse::fromMap($this->doRequest('BatchGetEdgeInstanceDriverConfigs', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param BatchGetEdgeInstanceDriverConfigsRequest $request
     *
     * @return BatchGetEdgeInstanceDriverConfigsResponse
     */
    public function batchGetEdgeInstanceDriverConfigs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchGetEdgeInstanceDriverConfigsWithOptions($request, $runtime);
    }

    /**
     * @param BatchImportDeviceRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return BatchImportDeviceResponse
     */
    public function batchImportDeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return BatchImportDeviceResponse::fromMap($this->doRequest('BatchImportDevice', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param BatchImportDeviceRequest $request
     *
     * @return BatchImportDeviceResponse
     */
    public function batchImportDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchImportDeviceWithOptions($request, $runtime);
    }

    /**
     * @param BatchImportVehicleDeviceRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return BatchImportVehicleDeviceResponse
     */
    public function batchImportVehicleDeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return BatchImportVehicleDeviceResponse::fromMap($this->doRequest('BatchImportVehicleDevice', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param BatchImportVehicleDeviceRequest $request
     *
     * @return BatchImportVehicleDeviceResponse
     */
    public function batchImportVehicleDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchImportVehicleDeviceWithOptions($request, $runtime);
    }

    /**
     * @param BatchPubRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return BatchPubResponse
     */
    public function batchPubWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return BatchPubResponse::fromMap($this->doRequest('BatchPub', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param BatchPubRequest $request
     *
     * @return BatchPubResponse
     */
    public function batchPub($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchPubWithOptions($request, $runtime);
    }

    /**
     * @param BatchQueryDeviceDetailRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return BatchQueryDeviceDetailResponse
     */
    public function batchQueryDeviceDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return BatchQueryDeviceDetailResponse::fromMap($this->doRequest('BatchQueryDeviceDetail', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param BatchQueryDeviceDetailRequest $request
     *
     * @return BatchQueryDeviceDetailResponse
     */
    public function batchQueryDeviceDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchQueryDeviceDetailWithOptions($request, $runtime);
    }

    /**
     * @param BatchRegisterDeviceRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return BatchRegisterDeviceResponse
     */
    public function batchRegisterDeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return BatchRegisterDeviceResponse::fromMap($this->doRequest('BatchRegisterDevice', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param BatchRegisterDeviceRequest $request
     *
     * @return BatchRegisterDeviceResponse
     */
    public function batchRegisterDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchRegisterDeviceWithOptions($request, $runtime);
    }

    /**
     * @param BatchRegisterDeviceWithApplyIdRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return BatchRegisterDeviceWithApplyIdResponse
     */
    public function batchRegisterDeviceWithApplyIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return BatchRegisterDeviceWithApplyIdResponse::fromMap($this->doRequest('BatchRegisterDeviceWithApplyId', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param BatchRegisterDeviceWithApplyIdRequest $request
     *
     * @return BatchRegisterDeviceWithApplyIdResponse
     */
    public function batchRegisterDeviceWithApplyId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchRegisterDeviceWithApplyIdWithOptions($request, $runtime);
    }

    /**
     * @param BatchSetEdgeInstanceDeviceChannelRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return BatchSetEdgeInstanceDeviceChannelResponse
     */
    public function batchSetEdgeInstanceDeviceChannelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return BatchSetEdgeInstanceDeviceChannelResponse::fromMap($this->doRequest('BatchSetEdgeInstanceDeviceChannel', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param BatchSetEdgeInstanceDeviceChannelRequest $request
     *
     * @return BatchSetEdgeInstanceDeviceChannelResponse
     */
    public function batchSetEdgeInstanceDeviceChannel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchSetEdgeInstanceDeviceChannelWithOptions($request, $runtime);
    }

    /**
     * @param BatchSetEdgeInstanceDeviceConfigRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return BatchSetEdgeInstanceDeviceConfigResponse
     */
    public function batchSetEdgeInstanceDeviceConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return BatchSetEdgeInstanceDeviceConfigResponse::fromMap($this->doRequest('BatchSetEdgeInstanceDeviceConfig', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param BatchSetEdgeInstanceDeviceConfigRequest $request
     *
     * @return BatchSetEdgeInstanceDeviceConfigResponse
     */
    public function batchSetEdgeInstanceDeviceConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchSetEdgeInstanceDeviceConfigWithOptions($request, $runtime);
    }

    /**
     * @param BatchUnbindDeviceFromEdgeInstanceRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return BatchUnbindDeviceFromEdgeInstanceResponse
     */
    public function batchUnbindDeviceFromEdgeInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return BatchUnbindDeviceFromEdgeInstanceResponse::fromMap($this->doRequest('BatchUnbindDeviceFromEdgeInstance', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param BatchUnbindDeviceFromEdgeInstanceRequest $request
     *
     * @return BatchUnbindDeviceFromEdgeInstanceResponse
     */
    public function batchUnbindDeviceFromEdgeInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchUnbindDeviceFromEdgeInstanceWithOptions($request, $runtime);
    }

    /**
     * @param BatchUnbindProjectDevicesRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return BatchUnbindProjectDevicesResponse
     */
    public function batchUnbindProjectDevicesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return BatchUnbindProjectDevicesResponse::fromMap($this->doRequest('BatchUnbindProjectDevices', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param BatchUnbindProjectDevicesRequest $request
     *
     * @return BatchUnbindProjectDevicesResponse
     */
    public function batchUnbindProjectDevices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchUnbindProjectDevicesWithOptions($request, $runtime);
    }

    /**
     * @param BatchUnbindProjectProductsRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return BatchUnbindProjectProductsResponse
     */
    public function batchUnbindProjectProductsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return BatchUnbindProjectProductsResponse::fromMap($this->doRequest('BatchUnbindProjectProducts', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param BatchUnbindProjectProductsRequest $request
     *
     * @return BatchUnbindProjectProductsResponse
     */
    public function batchUnbindProjectProducts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchUnbindProjectProductsWithOptions($request, $runtime);
    }

    /**
     * @param BatchUpdateDeviceNicknameRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return BatchUpdateDeviceNicknameResponse
     */
    public function batchUpdateDeviceNicknameWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return BatchUpdateDeviceNicknameResponse::fromMap($this->doRequest('BatchUpdateDeviceNickname', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param BatchUpdateDeviceNicknameRequest $request
     *
     * @return BatchUpdateDeviceNicknameResponse
     */
    public function batchUpdateDeviceNickname($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchUpdateDeviceNicknameWithOptions($request, $runtime);
    }

    /**
     * @param BindApplicationToEdgeInstanceRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return BindApplicationToEdgeInstanceResponse
     */
    public function bindApplicationToEdgeInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return BindApplicationToEdgeInstanceResponse::fromMap($this->doRequest('BindApplicationToEdgeInstance', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param BindApplicationToEdgeInstanceRequest $request
     *
     * @return BindApplicationToEdgeInstanceResponse
     */
    public function bindApplicationToEdgeInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bindApplicationToEdgeInstanceWithOptions($request, $runtime);
    }

    /**
     * @param BindDriverToEdgeInstanceRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return BindDriverToEdgeInstanceResponse
     */
    public function bindDriverToEdgeInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return BindDriverToEdgeInstanceResponse::fromMap($this->doRequest('BindDriverToEdgeInstance', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param BindDriverToEdgeInstanceRequest $request
     *
     * @return BindDriverToEdgeInstanceResponse
     */
    public function bindDriverToEdgeInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bindDriverToEdgeInstanceWithOptions($request, $runtime);
    }

    /**
     * @param BindGatewayToEdgeInstanceRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return BindGatewayToEdgeInstanceResponse
     */
    public function bindGatewayToEdgeInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return BindGatewayToEdgeInstanceResponse::fromMap($this->doRequest('BindGatewayToEdgeInstance', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param BindGatewayToEdgeInstanceRequest $request
     *
     * @return BindGatewayToEdgeInstanceResponse
     */
    public function bindGatewayToEdgeInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bindGatewayToEdgeInstanceWithOptions($request, $runtime);
    }

    /**
     * @param BindLicenseDeviceRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return BindLicenseDeviceResponse
     */
    public function bindLicenseDeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return BindLicenseDeviceResponse::fromMap($this->doRequest('BindLicenseDevice', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param BindLicenseDeviceRequest $request
     *
     * @return BindLicenseDeviceResponse
     */
    public function bindLicenseDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bindLicenseDeviceWithOptions($request, $runtime);
    }

    /**
     * @param BindLicenseProductRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return BindLicenseProductResponse
     */
    public function bindLicenseProductWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return BindLicenseProductResponse::fromMap($this->doRequest('BindLicenseProduct', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param BindLicenseProductRequest $request
     *
     * @return BindLicenseProductResponse
     */
    public function bindLicenseProduct($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bindLicenseProductWithOptions($request, $runtime);
    }

    /**
     * @param BindRoleToEdgeInstanceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return BindRoleToEdgeInstanceResponse
     */
    public function bindRoleToEdgeInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return BindRoleToEdgeInstanceResponse::fromMap($this->doRequest('BindRoleToEdgeInstance', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param BindRoleToEdgeInstanceRequest $request
     *
     * @return BindRoleToEdgeInstanceResponse
     */
    public function bindRoleToEdgeInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bindRoleToEdgeInstanceWithOptions($request, $runtime);
    }

    /**
     * @param BindSceneRuleToEdgeInstanceRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return BindSceneRuleToEdgeInstanceResponse
     */
    public function bindSceneRuleToEdgeInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return BindSceneRuleToEdgeInstanceResponse::fromMap($this->doRequest('BindSceneRuleToEdgeInstance', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param BindSceneRuleToEdgeInstanceRequest $request
     *
     * @return BindSceneRuleToEdgeInstanceResponse
     */
    public function bindSceneRuleToEdgeInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bindSceneRuleToEdgeInstanceWithOptions($request, $runtime);
    }

    /**
     * @param CancelJobRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return CancelJobResponse
     */
    public function cancelJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CancelJobResponse::fromMap($this->doRequest('CancelJob', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CancelJobRequest $request
     *
     * @return CancelJobResponse
     */
    public function cancelJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelJobWithOptions($request, $runtime);
    }

    /**
     * @param CancelOTAStrategyByJobRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CancelOTAStrategyByJobResponse
     */
    public function cancelOTAStrategyByJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CancelOTAStrategyByJobResponse::fromMap($this->doRequest('CancelOTAStrategyByJob', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CancelOTAStrategyByJobRequest $request
     *
     * @return CancelOTAStrategyByJobResponse
     */
    public function cancelOTAStrategyByJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelOTAStrategyByJobWithOptions($request, $runtime);
    }

    /**
     * @param CancelOTATaskByDeviceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CancelOTATaskByDeviceResponse
     */
    public function cancelOTATaskByDeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CancelOTATaskByDeviceResponse::fromMap($this->doRequest('CancelOTATaskByDevice', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CancelOTATaskByDeviceRequest $request
     *
     * @return CancelOTATaskByDeviceResponse
     */
    public function cancelOTATaskByDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelOTATaskByDeviceWithOptions($request, $runtime);
    }

    /**
     * @param CancelOTATaskByJobRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CancelOTATaskByJobResponse
     */
    public function cancelOTATaskByJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CancelOTATaskByJobResponse::fromMap($this->doRequest('CancelOTATaskByJob', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CancelOTATaskByJobRequest $request
     *
     * @return CancelOTATaskByJobResponse
     */
    public function cancelOTATaskByJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelOTATaskByJobWithOptions($request, $runtime);
    }

    /**
     * @param CancelReleaseProductRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CancelReleaseProductResponse
     */
    public function cancelReleaseProductWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CancelReleaseProductResponse::fromMap($this->doRequest('CancelReleaseProduct', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CancelReleaseProductRequest $request
     *
     * @return CancelReleaseProductResponse
     */
    public function cancelReleaseProduct($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelReleaseProductWithOptions($request, $runtime);
    }

    /**
     * @param CheckBindLicenseDeviceProgressRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return CheckBindLicenseDeviceProgressResponse
     */
    public function checkBindLicenseDeviceProgressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CheckBindLicenseDeviceProgressResponse::fromMap($this->doRequest('CheckBindLicenseDeviceProgress', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CheckBindLicenseDeviceProgressRequest $request
     *
     * @return CheckBindLicenseDeviceProgressResponse
     */
    public function checkBindLicenseDeviceProgress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkBindLicenseDeviceProgressWithOptions($request, $runtime);
    }

    /**
     * @param ClearDeviceDesiredPropertyRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ClearDeviceDesiredPropertyResponse
     */
    public function clearDeviceDesiredPropertyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ClearDeviceDesiredPropertyResponse::fromMap($this->doRequest('ClearDeviceDesiredProperty', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ClearDeviceDesiredPropertyRequest $request
     *
     * @return ClearDeviceDesiredPropertyResponse
     */
    public function clearDeviceDesiredProperty($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->clearDeviceDesiredPropertyWithOptions($request, $runtime);
    }

    /**
     * @param ClearEdgeInstanceDriverConfigsRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return ClearEdgeInstanceDriverConfigsResponse
     */
    public function clearEdgeInstanceDriverConfigsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ClearEdgeInstanceDriverConfigsResponse::fromMap($this->doRequest('ClearEdgeInstanceDriverConfigs', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ClearEdgeInstanceDriverConfigsRequest $request
     *
     * @return ClearEdgeInstanceDriverConfigsResponse
     */
    public function clearEdgeInstanceDriverConfigs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->clearEdgeInstanceDriverConfigsWithOptions($request, $runtime);
    }

    /**
     * @param CloseDeviceTunnelRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CloseDeviceTunnelResponse
     */
    public function closeDeviceTunnelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CloseDeviceTunnelResponse::fromMap($this->doRequest('CloseDeviceTunnel', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CloseDeviceTunnelRequest $request
     *
     * @return CloseDeviceTunnelResponse
     */
    public function closeDeviceTunnel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->closeDeviceTunnelWithOptions($request, $runtime);
    }

    /**
     * @param CloseEdgeInstanceDeploymentRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return CloseEdgeInstanceDeploymentResponse
     */
    public function closeEdgeInstanceDeploymentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CloseEdgeInstanceDeploymentResponse::fromMap($this->doRequest('CloseEdgeInstanceDeployment', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CloseEdgeInstanceDeploymentRequest $request
     *
     * @return CloseEdgeInstanceDeploymentResponse
     */
    public function closeEdgeInstanceDeployment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->closeEdgeInstanceDeploymentWithOptions($request, $runtime);
    }

    /**
     * @param ConfirmOTATaskRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ConfirmOTATaskResponse
     */
    public function confirmOTATaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ConfirmOTATaskResponse::fromMap($this->doRequest('ConfirmOTATask', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ConfirmOTATaskRequest $request
     *
     * @return ConfirmOTATaskResponse
     */
    public function confirmOTATask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->confirmOTATaskWithOptions($request, $runtime);
    }

    /**
     * @param CopyThingModelRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CopyThingModelResponse
     */
    public function copyThingModelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CopyThingModelResponse::fromMap($this->doRequest('CopyThingModel', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CopyThingModelRequest $request
     *
     * @return CopyThingModelResponse
     */
    public function copyThingModel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->copyThingModelWithOptions($request, $runtime);
    }

    /**
     * @param CountSpeechBroadcastHourRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CountSpeechBroadcastHourResponse
     */
    public function countSpeechBroadcastHourWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CountSpeechBroadcastHourResponse::fromMap($this->doRequest('CountSpeechBroadcastHour', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CountSpeechBroadcastHourRequest $request
     *
     * @return CountSpeechBroadcastHourResponse
     */
    public function countSpeechBroadcastHour($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->countSpeechBroadcastHourWithOptions($request, $runtime);
    }

    /**
     * @param CreateConsumerGroupRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateConsumerGroupResponse
     */
    public function createConsumerGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateConsumerGroupResponse::fromMap($this->doRequest('CreateConsumerGroup', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CreateConsumerGroupRequest $request
     *
     * @return CreateConsumerGroupResponse
     */
    public function createConsumerGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createConsumerGroupWithOptions($request, $runtime);
    }

    /**
     * @param CreateConsumerGroupSubscribeRelationRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return CreateConsumerGroupSubscribeRelationResponse
     */
    public function createConsumerGroupSubscribeRelationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateConsumerGroupSubscribeRelationResponse::fromMap($this->doRequest('CreateConsumerGroupSubscribeRelation', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CreateConsumerGroupSubscribeRelationRequest $request
     *
     * @return CreateConsumerGroupSubscribeRelationResponse
     */
    public function createConsumerGroupSubscribeRelation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createConsumerGroupSubscribeRelationWithOptions($request, $runtime);
    }

    /**
     * @param CreateDataAPIServiceRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateDataAPIServiceResponse
     */
    public function createDataAPIServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateDataAPIServiceResponse::fromMap($this->doRequest('CreateDataAPIService', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CreateDataAPIServiceRequest $request
     *
     * @return CreateDataAPIServiceResponse
     */
    public function createDataAPIService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDataAPIServiceWithOptions($request, $runtime);
    }

    /**
     * @param CreateDataSourceItemRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateDataSourceItemResponse
     */
    public function createDataSourceItemWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateDataSourceItemResponse::fromMap($this->doRequest('CreateDataSourceItem', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CreateDataSourceItemRequest $request
     *
     * @return CreateDataSourceItemResponse
     */
    public function createDataSourceItem($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDataSourceItemWithOptions($request, $runtime);
    }

    /**
     * @param CreateDestinationRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateDestinationResponse
     */
    public function createDestinationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateDestinationResponse::fromMap($this->doRequest('CreateDestination', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CreateDestinationRequest $request
     *
     * @return CreateDestinationResponse
     */
    public function createDestination($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDestinationWithOptions($request, $runtime);
    }

    /**
     * @param CreateDeviceDistributeJobRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CreateDeviceDistributeJobResponse
     */
    public function createDeviceDistributeJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateDeviceDistributeJobResponse::fromMap($this->doRequest('CreateDeviceDistributeJob', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CreateDeviceDistributeJobRequest $request
     *
     * @return CreateDeviceDistributeJobResponse
     */
    public function createDeviceDistributeJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDeviceDistributeJobWithOptions($request, $runtime);
    }

    /**
     * @param CreateDeviceDynamicGroupRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateDeviceDynamicGroupResponse
     */
    public function createDeviceDynamicGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateDeviceDynamicGroupResponse::fromMap($this->doRequest('CreateDeviceDynamicGroup', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CreateDeviceDynamicGroupRequest $request
     *
     * @return CreateDeviceDynamicGroupResponse
     */
    public function createDeviceDynamicGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDeviceDynamicGroupWithOptions($request, $runtime);
    }

    /**
     * @param CreateDeviceGroupRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateDeviceGroupResponse
     */
    public function createDeviceGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateDeviceGroupResponse::fromMap($this->doRequest('CreateDeviceGroup', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CreateDeviceGroupRequest $request
     *
     * @return CreateDeviceGroupResponse
     */
    public function createDeviceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDeviceGroupWithOptions($request, $runtime);
    }

    /**
     * @param CreateDeviceTunnelRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateDeviceTunnelResponse
     */
    public function createDeviceTunnelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateDeviceTunnelResponse::fromMap($this->doRequest('CreateDeviceTunnel', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CreateDeviceTunnelRequest $request
     *
     * @return CreateDeviceTunnelResponse
     */
    public function createDeviceTunnel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDeviceTunnelWithOptions($request, $runtime);
    }

    /**
     * @param CreateDownloadDataJobRequest $tmp
     * @param RuntimeOptions               $runtime
     *
     * @return CreateDownloadDataJobResponse
     */
    public function createDownloadDataJobWithOptions($tmp, $runtime)
    {
        Utils::validateModel($tmp);
        $request = new CreateDownloadDataJobShrinkRequest([]);
        RpcUtils::convert($tmp, $request);
        if (!Utils::isUnset($tmp->context)) {
            $request->contextShrink = Utils::toJSONString($tmp->context);
        }
        if (!Utils::isUnset($tmp->fileConfig)) {
            $request->fileConfigShrink = Utils::toJSONString($tmp->fileConfig);
        }

        return CreateDownloadDataJobResponse::fromMap($this->doRequest('CreateDownloadDataJob', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CreateDownloadDataJobRequest $request
     *
     * @return CreateDownloadDataJobResponse
     */
    public function createDownloadDataJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDownloadDataJobWithOptions($request, $runtime);
    }

    /**
     * @param CreateEdgeDriverRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateEdgeDriverResponse
     */
    public function createEdgeDriverWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateEdgeDriverResponse::fromMap($this->doRequest('CreateEdgeDriver', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CreateEdgeDriverRequest $request
     *
     * @return CreateEdgeDriverResponse
     */
    public function createEdgeDriver($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createEdgeDriverWithOptions($request, $runtime);
    }

    /**
     * @param CreateEdgeDriverVersionRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateEdgeDriverVersionResponse
     */
    public function createEdgeDriverVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateEdgeDriverVersionResponse::fromMap($this->doRequest('CreateEdgeDriverVersion', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CreateEdgeDriverVersionRequest $request
     *
     * @return CreateEdgeDriverVersionResponse
     */
    public function createEdgeDriverVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createEdgeDriverVersionWithOptions($request, $runtime);
    }

    /**
     * @param CreateEdgeInstanceRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateEdgeInstanceResponse
     */
    public function createEdgeInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateEdgeInstanceResponse::fromMap($this->doRequest('CreateEdgeInstance', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CreateEdgeInstanceRequest $request
     *
     * @return CreateEdgeInstanceResponse
     */
    public function createEdgeInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createEdgeInstanceWithOptions($request, $runtime);
    }

    /**
     * @param CreateEdgeInstanceChannelRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CreateEdgeInstanceChannelResponse
     */
    public function createEdgeInstanceChannelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateEdgeInstanceChannelResponse::fromMap($this->doRequest('CreateEdgeInstanceChannel', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CreateEdgeInstanceChannelRequest $request
     *
     * @return CreateEdgeInstanceChannelResponse
     */
    public function createEdgeInstanceChannel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createEdgeInstanceChannelWithOptions($request, $runtime);
    }

    /**
     * @param CreateEdgeInstanceDeploymentRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return CreateEdgeInstanceDeploymentResponse
     */
    public function createEdgeInstanceDeploymentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateEdgeInstanceDeploymentResponse::fromMap($this->doRequest('CreateEdgeInstanceDeployment', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CreateEdgeInstanceDeploymentRequest $request
     *
     * @return CreateEdgeInstanceDeploymentResponse
     */
    public function createEdgeInstanceDeployment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createEdgeInstanceDeploymentWithOptions($request, $runtime);
    }

    /**
     * @param CreateEdgeInstanceMessageRoutingRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return CreateEdgeInstanceMessageRoutingResponse
     */
    public function createEdgeInstanceMessageRoutingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateEdgeInstanceMessageRoutingResponse::fromMap($this->doRequest('CreateEdgeInstanceMessageRouting', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CreateEdgeInstanceMessageRoutingRequest $request
     *
     * @return CreateEdgeInstanceMessageRoutingResponse
     */
    public function createEdgeInstanceMessageRouting($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createEdgeInstanceMessageRoutingWithOptions($request, $runtime);
    }

    /**
     * @param CreateEdgeOssPreSignedAddressRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return CreateEdgeOssPreSignedAddressResponse
     */
    public function createEdgeOssPreSignedAddressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateEdgeOssPreSignedAddressResponse::fromMap($this->doRequest('CreateEdgeOssPreSignedAddress', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CreateEdgeOssPreSignedAddressRequest $request
     *
     * @return CreateEdgeOssPreSignedAddressResponse
     */
    public function createEdgeOssPreSignedAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createEdgeOssPreSignedAddressWithOptions($request, $runtime);
    }

    /**
     * @param CreateJobRequest $tmp
     * @param RuntimeOptions   $runtime
     *
     * @return CreateJobResponse
     */
    public function createJobWithOptions($tmp, $runtime)
    {
        Utils::validateModel($tmp);
        $request = new CreateJobShrinkRequest([]);
        RpcUtils::convert($tmp, $request);
        if (!Utils::isUnset($tmp->jobFile)) {
            $request->jobFileShrink = Utils::toJSONString($tmp->jobFile);
        }
        if (!Utils::isUnset($tmp->rolloutConfig)) {
            $request->rolloutConfigShrink = Utils::toJSONString($tmp->rolloutConfig);
        }
        if (!Utils::isUnset($tmp->targetConfig)) {
            $request->targetConfigShrink = Utils::toJSONString($tmp->targetConfig);
        }
        if (!Utils::isUnset($tmp->timeoutConfig)) {
            $request->timeoutConfigShrink = Utils::toJSONString($tmp->timeoutConfig);
        }

        return CreateJobResponse::fromMap($this->doRequest('CreateJob', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CreateJobRequest $request
     *
     * @return CreateJobResponse
     */
    public function createJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createJobWithOptions($request, $runtime);
    }

    /**
     * @param CreateLoRaNodesTaskRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateLoRaNodesTaskResponse
     */
    public function createLoRaNodesTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateLoRaNodesTaskResponse::fromMap($this->doRequest('CreateLoRaNodesTask', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CreateLoRaNodesTaskRequest $request
     *
     * @return CreateLoRaNodesTaskResponse
     */
    public function createLoRaNodesTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createLoRaNodesTaskWithOptions($request, $runtime);
    }

    /**
     * @param CreateOTADynamicUpgradeJobRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return CreateOTADynamicUpgradeJobResponse
     */
    public function createOTADynamicUpgradeJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateOTADynamicUpgradeJobResponse::fromMap($this->doRequest('CreateOTADynamicUpgradeJob', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CreateOTADynamicUpgradeJobRequest $request
     *
     * @return CreateOTADynamicUpgradeJobResponse
     */
    public function createOTADynamicUpgradeJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createOTADynamicUpgradeJobWithOptions($request, $runtime);
    }

    /**
     * @param CreateOTAFirmwareRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateOTAFirmwareResponse
     */
    public function createOTAFirmwareWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateOTAFirmwareResponse::fromMap($this->doRequest('CreateOTAFirmware', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CreateOTAFirmwareRequest $request
     *
     * @return CreateOTAFirmwareResponse
     */
    public function createOTAFirmware($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createOTAFirmwareWithOptions($request, $runtime);
    }

    /**
     * @param CreateOTAModuleRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateOTAModuleResponse
     */
    public function createOTAModuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateOTAModuleResponse::fromMap($this->doRequest('CreateOTAModule', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CreateOTAModuleRequest $request
     *
     * @return CreateOTAModuleResponse
     */
    public function createOTAModule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createOTAModuleWithOptions($request, $runtime);
    }

    /**
     * @param CreateOTAStaticUpgradeJobRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CreateOTAStaticUpgradeJobResponse
     */
    public function createOTAStaticUpgradeJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateOTAStaticUpgradeJobResponse::fromMap($this->doRequest('CreateOTAStaticUpgradeJob', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CreateOTAStaticUpgradeJobRequest $request
     *
     * @return CreateOTAStaticUpgradeJobResponse
     */
    public function createOTAStaticUpgradeJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createOTAStaticUpgradeJobWithOptions($request, $runtime);
    }

    /**
     * @param CreateOTAVerifyJobRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateOTAVerifyJobResponse
     */
    public function createOTAVerifyJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateOTAVerifyJobResponse::fromMap($this->doRequest('CreateOTAVerifyJob', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CreateOTAVerifyJobRequest $request
     *
     * @return CreateOTAVerifyJobResponse
     */
    public function createOTAVerifyJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createOTAVerifyJobWithOptions($request, $runtime);
    }

    /**
     * @param CreateParserRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CreateParserResponse
     */
    public function createParserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateParserResponse::fromMap($this->doRequest('CreateParser', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CreateParserRequest $request
     *
     * @return CreateParserResponse
     */
    public function createParser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createParserWithOptions($request, $runtime);
    }

    /**
     * @param CreateParserDataSourceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CreateParserDataSourceResponse
     */
    public function createParserDataSourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateParserDataSourceResponse::fromMap($this->doRequest('CreateParserDataSource', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CreateParserDataSourceRequest $request
     *
     * @return CreateParserDataSourceResponse
     */
    public function createParserDataSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createParserDataSourceWithOptions($request, $runtime);
    }

    /**
     * @param CreateProductRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateProductResponse
     */
    public function createProductWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateProductResponse::fromMap($this->doRequest('CreateProduct', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CreateProductRequest $request
     *
     * @return CreateProductResponse
     */
    public function createProduct($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createProductWithOptions($request, $runtime);
    }

    /**
     * @param CreateProductDistributeJobRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return CreateProductDistributeJobResponse
     */
    public function createProductDistributeJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateProductDistributeJobResponse::fromMap($this->doRequest('CreateProductDistributeJob', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CreateProductDistributeJobRequest $request
     *
     * @return CreateProductDistributeJobResponse
     */
    public function createProductDistributeJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createProductDistributeJobWithOptions($request, $runtime);
    }

    /**
     * @param CreateProductTagsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateProductTagsResponse
     */
    public function createProductTagsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateProductTagsResponse::fromMap($this->doRequest('CreateProductTags', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CreateProductTagsRequest $request
     *
     * @return CreateProductTagsResponse
     */
    public function createProductTags($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createProductTagsWithOptions($request, $runtime);
    }

    /**
     * @param CreateProductTopicRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateProductTopicResponse
     */
    public function createProductTopicWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateProductTopicResponse::fromMap($this->doRequest('CreateProductTopic', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CreateProductTopicRequest $request
     *
     * @return CreateProductTopicResponse
     */
    public function createProductTopic($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createProductTopicWithOptions($request, $runtime);
    }

    /**
     * @param CreateRuleRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return CreateRuleResponse
     */
    public function createRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateRuleResponse::fromMap($this->doRequest('CreateRule', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CreateRuleRequest $request
     *
     * @return CreateRuleResponse
     */
    public function createRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRuleWithOptions($request, $runtime);
    }

    /**
     * @param CreateRuleActionRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateRuleActionResponse
     */
    public function createRuleActionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateRuleActionResponse::fromMap($this->doRequest('CreateRuleAction', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CreateRuleActionRequest $request
     *
     * @return CreateRuleActionResponse
     */
    public function createRuleAction($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRuleActionWithOptions($request, $runtime);
    }

    /**
     * @param CreateSceneRuleRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateSceneRuleResponse
     */
    public function createSceneRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateSceneRuleResponse::fromMap($this->doRequest('CreateSceneRule', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CreateSceneRuleRequest $request
     *
     * @return CreateSceneRuleResponse
     */
    public function createSceneRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSceneRuleWithOptions($request, $runtime);
    }

    /**
     * @param CreateSchedulePeriodRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateSchedulePeriodResponse
     */
    public function createSchedulePeriodWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateSchedulePeriodResponse::fromMap($this->doRequest('CreateSchedulePeriod', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CreateSchedulePeriodRequest $request
     *
     * @return CreateSchedulePeriodResponse
     */
    public function createSchedulePeriod($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSchedulePeriodWithOptions($request, $runtime);
    }

    /**
     * @param CreateSoundCodeRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateSoundCodeResponse
     */
    public function createSoundCodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateSoundCodeResponse::fromMap($this->doRequest('CreateSoundCode', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CreateSoundCodeRequest $request
     *
     * @return CreateSoundCodeResponse
     */
    public function createSoundCode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSoundCodeWithOptions($request, $runtime);
    }

    /**
     * @param CreateSoundCodeLabelRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateSoundCodeLabelResponse
     */
    public function createSoundCodeLabelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateSoundCodeLabelResponse::fromMap($this->doRequest('CreateSoundCodeLabel', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CreateSoundCodeLabelRequest $request
     *
     * @return CreateSoundCodeLabelResponse
     */
    public function createSoundCodeLabel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSoundCodeLabelWithOptions($request, $runtime);
    }

    /**
     * @param CreateSoundCodeScheduleRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateSoundCodeScheduleResponse
     */
    public function createSoundCodeScheduleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateSoundCodeScheduleResponse::fromMap($this->doRequest('CreateSoundCodeSchedule', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CreateSoundCodeScheduleRequest $request
     *
     * @return CreateSoundCodeScheduleResponse
     */
    public function createSoundCodeSchedule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSoundCodeScheduleWithOptions($request, $runtime);
    }

    /**
     * @param CreateSpeechRequest $tmp
     * @param RuntimeOptions      $runtime
     *
     * @return CreateSpeechResponse
     */
    public function createSpeechWithOptions($tmp, $runtime)
    {
        Utils::validateModel($tmp);
        $request = new CreateSpeechShrinkRequest([]);
        RpcUtils::convert($tmp, $request);
        if (!Utils::isUnset($tmp->soundCodeConfig)) {
            $request->soundCodeConfigShrink = Utils::toJSONString($tmp->soundCodeConfig);
        }

        return CreateSpeechResponse::fromMap($this->doRequest('CreateSpeech', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CreateSpeechRequest $request
     *
     * @return CreateSpeechResponse
     */
    public function createSpeech($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSpeechWithOptions($request, $runtime);
    }

    /**
     * @param CreateStudioAppDomainOpenRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CreateStudioAppDomainOpenResponse
     */
    public function createStudioAppDomainOpenWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateStudioAppDomainOpenResponse::fromMap($this->doRequest('CreateStudioAppDomainOpen', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CreateStudioAppDomainOpenRequest $request
     *
     * @return CreateStudioAppDomainOpenResponse
     */
    public function createStudioAppDomainOpen($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createStudioAppDomainOpenWithOptions($request, $runtime);
    }

    /**
     * @param CreateSubscribeRelationRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateSubscribeRelationResponse
     */
    public function createSubscribeRelationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateSubscribeRelationResponse::fromMap($this->doRequest('CreateSubscribeRelation', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CreateSubscribeRelationRequest $request
     *
     * @return CreateSubscribeRelationResponse
     */
    public function createSubscribeRelation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSubscribeRelationWithOptions($request, $runtime);
    }

    /**
     * @param CreateThingModelRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateThingModelResponse
     */
    public function createThingModelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateThingModelResponse::fromMap($this->doRequest('CreateThingModel', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CreateThingModelRequest $request
     *
     * @return CreateThingModelResponse
     */
    public function createThingModel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createThingModelWithOptions($request, $runtime);
    }

    /**
     * @param CreateThingScriptRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateThingScriptResponse
     */
    public function createThingScriptWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateThingScriptResponse::fromMap($this->doRequest('CreateThingScript', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CreateThingScriptRequest $request
     *
     * @return CreateThingScriptResponse
     */
    public function createThingScript($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createThingScriptWithOptions($request, $runtime);
    }

    /**
     * @param CreateTopicRouteTableRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateTopicRouteTableResponse
     */
    public function createTopicRouteTableWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateTopicRouteTableResponse::fromMap($this->doRequest('CreateTopicRouteTable', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CreateTopicRouteTableRequest $request
     *
     * @return CreateTopicRouteTableResponse
     */
    public function createTopicRouteTable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTopicRouteTableWithOptions($request, $runtime);
    }

    /**
     * @param DeleteClientIdsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteClientIdsResponse
     */
    public function deleteClientIdsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteClientIdsResponse::fromMap($this->doRequest('DeleteClientIds', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DeleteClientIdsRequest $request
     *
     * @return DeleteClientIdsResponse
     */
    public function deleteClientIds($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteClientIdsWithOptions($request, $runtime);
    }

    /**
     * @param DeleteConsumerGroupRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteConsumerGroupResponse
     */
    public function deleteConsumerGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteConsumerGroupResponse::fromMap($this->doRequest('DeleteConsumerGroup', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DeleteConsumerGroupRequest $request
     *
     * @return DeleteConsumerGroupResponse
     */
    public function deleteConsumerGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteConsumerGroupWithOptions($request, $runtime);
    }

    /**
     * @param DeleteConsumerGroupSubscribeRelationRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return DeleteConsumerGroupSubscribeRelationResponse
     */
    public function deleteConsumerGroupSubscribeRelationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteConsumerGroupSubscribeRelationResponse::fromMap($this->doRequest('DeleteConsumerGroupSubscribeRelation', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DeleteConsumerGroupSubscribeRelationRequest $request
     *
     * @return DeleteConsumerGroupSubscribeRelationResponse
     */
    public function deleteConsumerGroupSubscribeRelation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteConsumerGroupSubscribeRelationWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDataSourceItemRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteDataSourceItemResponse
     */
    public function deleteDataSourceItemWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteDataSourceItemResponse::fromMap($this->doRequest('DeleteDataSourceItem', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DeleteDataSourceItemRequest $request
     *
     * @return DeleteDataSourceItemResponse
     */
    public function deleteDataSourceItem($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDataSourceItemWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDestinationRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteDestinationResponse
     */
    public function deleteDestinationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteDestinationResponse::fromMap($this->doRequest('DeleteDestination', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DeleteDestinationRequest $request
     *
     * @return DeleteDestinationResponse
     */
    public function deleteDestination($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDestinationWithOptions($request, $runtime);
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

        return DeleteDeviceResponse::fromMap($this->doRequest('DeleteDevice', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DeleteDeviceDistributeJobRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DeleteDeviceDistributeJobResponse
     */
    public function deleteDeviceDistributeJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteDeviceDistributeJobResponse::fromMap($this->doRequest('DeleteDeviceDistributeJob', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DeleteDeviceDistributeJobRequest $request
     *
     * @return DeleteDeviceDistributeJobResponse
     */
    public function deleteDeviceDistributeJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDeviceDistributeJobWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDeviceDynamicGroupRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DeleteDeviceDynamicGroupResponse
     */
    public function deleteDeviceDynamicGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteDeviceDynamicGroupResponse::fromMap($this->doRequest('DeleteDeviceDynamicGroup', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DeleteDeviceDynamicGroupRequest $request
     *
     * @return DeleteDeviceDynamicGroupResponse
     */
    public function deleteDeviceDynamicGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDeviceDynamicGroupWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDeviceFileRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteDeviceFileResponse
     */
    public function deleteDeviceFileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteDeviceFileResponse::fromMap($this->doRequest('DeleteDeviceFile', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DeleteDeviceFileRequest $request
     *
     * @return DeleteDeviceFileResponse
     */
    public function deleteDeviceFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDeviceFileWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDeviceGroupRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteDeviceGroupResponse
     */
    public function deleteDeviceGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteDeviceGroupResponse::fromMap($this->doRequest('DeleteDeviceGroup', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DeleteDeviceGroupRequest $request
     *
     * @return DeleteDeviceGroupResponse
     */
    public function deleteDeviceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDeviceGroupWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDevicePropRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteDevicePropResponse
     */
    public function deleteDevicePropWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteDevicePropResponse::fromMap($this->doRequest('DeleteDeviceProp', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DeleteDevicePropRequest $request
     *
     * @return DeleteDevicePropResponse
     */
    public function deleteDeviceProp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDevicePropWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDeviceSpeechRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteDeviceSpeechResponse
     */
    public function deleteDeviceSpeechWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteDeviceSpeechResponse::fromMap($this->doRequest('DeleteDeviceSpeech', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DeleteDeviceSpeechRequest $request
     *
     * @return DeleteDeviceSpeechResponse
     */
    public function deleteDeviceSpeech($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDeviceSpeechWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDeviceTunnelRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteDeviceTunnelResponse
     */
    public function deleteDeviceTunnelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteDeviceTunnelResponse::fromMap($this->doRequest('DeleteDeviceTunnel', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DeleteDeviceTunnelRequest $request
     *
     * @return DeleteDeviceTunnelResponse
     */
    public function deleteDeviceTunnel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDeviceTunnelWithOptions($request, $runtime);
    }

    /**
     * @param DeleteEdgeDriverRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteEdgeDriverResponse
     */
    public function deleteEdgeDriverWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteEdgeDriverResponse::fromMap($this->doRequest('DeleteEdgeDriver', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DeleteEdgeDriverRequest $request
     *
     * @return DeleteEdgeDriverResponse
     */
    public function deleteEdgeDriver($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteEdgeDriverWithOptions($request, $runtime);
    }

    /**
     * @param DeleteEdgeDriverVersionRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteEdgeDriverVersionResponse
     */
    public function deleteEdgeDriverVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteEdgeDriverVersionResponse::fromMap($this->doRequest('DeleteEdgeDriverVersion', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DeleteEdgeDriverVersionRequest $request
     *
     * @return DeleteEdgeDriverVersionResponse
     */
    public function deleteEdgeDriverVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteEdgeDriverVersionWithOptions($request, $runtime);
    }

    /**
     * @param DeleteEdgeInstanceRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteEdgeInstanceResponse
     */
    public function deleteEdgeInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteEdgeInstanceResponse::fromMap($this->doRequest('DeleteEdgeInstance', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DeleteEdgeInstanceRequest $request
     *
     * @return DeleteEdgeInstanceResponse
     */
    public function deleteEdgeInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteEdgeInstanceWithOptions($request, $runtime);
    }

    /**
     * @param DeleteEdgeInstanceMessageRoutingRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DeleteEdgeInstanceMessageRoutingResponse
     */
    public function deleteEdgeInstanceMessageRoutingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteEdgeInstanceMessageRoutingResponse::fromMap($this->doRequest('DeleteEdgeInstanceMessageRouting', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DeleteEdgeInstanceMessageRoutingRequest $request
     *
     * @return DeleteEdgeInstanceMessageRoutingResponse
     */
    public function deleteEdgeInstanceMessageRouting($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteEdgeInstanceMessageRoutingWithOptions($request, $runtime);
    }

    /**
     * @param DeleteJobRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return DeleteJobResponse
     */
    public function deleteJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteJobResponse::fromMap($this->doRequest('DeleteJob', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DeleteJobRequest $request
     *
     * @return DeleteJobResponse
     */
    public function deleteJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteJobWithOptions($request, $runtime);
    }

    /**
     * @param DeleteOTAFirmwareRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteOTAFirmwareResponse
     */
    public function deleteOTAFirmwareWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteOTAFirmwareResponse::fromMap($this->doRequest('DeleteOTAFirmware', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DeleteOTAFirmwareRequest $request
     *
     * @return DeleteOTAFirmwareResponse
     */
    public function deleteOTAFirmware($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteOTAFirmwareWithOptions($request, $runtime);
    }

    /**
     * @param DeleteOTAModuleRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteOTAModuleResponse
     */
    public function deleteOTAModuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteOTAModuleResponse::fromMap($this->doRequest('DeleteOTAModule', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DeleteOTAModuleRequest $request
     *
     * @return DeleteOTAModuleResponse
     */
    public function deleteOTAModule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteOTAModuleWithOptions($request, $runtime);
    }

    /**
     * @param DeleteParserRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteParserResponse
     */
    public function deleteParserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteParserResponse::fromMap($this->doRequest('DeleteParser', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DeleteParserRequest $request
     *
     * @return DeleteParserResponse
     */
    public function deleteParser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteParserWithOptions($request, $runtime);
    }

    /**
     * @param DeleteParserDataSourceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteParserDataSourceResponse
     */
    public function deleteParserDataSourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteParserDataSourceResponse::fromMap($this->doRequest('DeleteParserDataSource', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DeleteParserDataSourceRequest $request
     *
     * @return DeleteParserDataSourceResponse
     */
    public function deleteParserDataSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteParserDataSourceWithOptions($request, $runtime);
    }

    /**
     * @param DeleteProductRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteProductResponse
     */
    public function deleteProductWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteProductResponse::fromMap($this->doRequest('DeleteProduct', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DeleteProductRequest $request
     *
     * @return DeleteProductResponse
     */
    public function deleteProduct($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteProductWithOptions($request, $runtime);
    }

    /**
     * @param DeleteProductTagsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteProductTagsResponse
     */
    public function deleteProductTagsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteProductTagsResponse::fromMap($this->doRequest('DeleteProductTags', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DeleteProductTagsRequest $request
     *
     * @return DeleteProductTagsResponse
     */
    public function deleteProductTags($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteProductTagsWithOptions($request, $runtime);
    }

    /**
     * @param DeleteProductTopicRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteProductTopicResponse
     */
    public function deleteProductTopicWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteProductTopicResponse::fromMap($this->doRequest('DeleteProductTopic', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DeleteProductTopicRequest $request
     *
     * @return DeleteProductTopicResponse
     */
    public function deleteProductTopic($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteProductTopicWithOptions($request, $runtime);
    }

    /**
     * @param DeleteRuleRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return DeleteRuleResponse
     */
    public function deleteRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteRuleResponse::fromMap($this->doRequest('DeleteRule', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DeleteRuleRequest $request
     *
     * @return DeleteRuleResponse
     */
    public function deleteRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRuleWithOptions($request, $runtime);
    }

    /**
     * @param DeleteRuleActionRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteRuleActionResponse
     */
    public function deleteRuleActionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteRuleActionResponse::fromMap($this->doRequest('DeleteRuleAction', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DeleteRuleActionRequest $request
     *
     * @return DeleteRuleActionResponse
     */
    public function deleteRuleAction($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRuleActionWithOptions($request, $runtime);
    }

    /**
     * @param DeleteSceneRuleRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteSceneRuleResponse
     */
    public function deleteSceneRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteSceneRuleResponse::fromMap($this->doRequest('DeleteSceneRule', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DeleteSceneRuleRequest $request
     *
     * @return DeleteSceneRuleResponse
     */
    public function deleteSceneRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSceneRuleWithOptions($request, $runtime);
    }

    /**
     * @param DeleteSchedulePeriodRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteSchedulePeriodResponse
     */
    public function deleteSchedulePeriodWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteSchedulePeriodResponse::fromMap($this->doRequest('DeleteSchedulePeriod', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DeleteSchedulePeriodRequest $request
     *
     * @return DeleteSchedulePeriodResponse
     */
    public function deleteSchedulePeriod($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSchedulePeriodWithOptions($request, $runtime);
    }

    /**
     * @param DeleteShareTaskDeviceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteShareTaskDeviceResponse
     */
    public function deleteShareTaskDeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteShareTaskDeviceResponse::fromMap($this->doRequest('DeleteShareTaskDevice', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DeleteShareTaskDeviceRequest $request
     *
     * @return DeleteShareTaskDeviceResponse
     */
    public function deleteShareTaskDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteShareTaskDeviceWithOptions($request, $runtime);
    }

    /**
     * @param DeleteSoundCodeRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteSoundCodeResponse
     */
    public function deleteSoundCodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteSoundCodeResponse::fromMap($this->doRequest('DeleteSoundCode', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DeleteSoundCodeRequest $request
     *
     * @return DeleteSoundCodeResponse
     */
    public function deleteSoundCode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSoundCodeWithOptions($request, $runtime);
    }

    /**
     * @param DeleteSoundCodeLabelRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteSoundCodeLabelResponse
     */
    public function deleteSoundCodeLabelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteSoundCodeLabelResponse::fromMap($this->doRequest('DeleteSoundCodeLabel', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DeleteSoundCodeLabelRequest $request
     *
     * @return DeleteSoundCodeLabelResponse
     */
    public function deleteSoundCodeLabel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSoundCodeLabelWithOptions($request, $runtime);
    }

    /**
     * @param DeleteSoundCodeScheduleRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteSoundCodeScheduleResponse
     */
    public function deleteSoundCodeScheduleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteSoundCodeScheduleResponse::fromMap($this->doRequest('DeleteSoundCodeSchedule', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DeleteSoundCodeScheduleRequest $request
     *
     * @return DeleteSoundCodeScheduleResponse
     */
    public function deleteSoundCodeSchedule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSoundCodeScheduleWithOptions($request, $runtime);
    }

    /**
     * @param DeleteSpeechRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteSpeechResponse
     */
    public function deleteSpeechWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteSpeechResponse::fromMap($this->doRequest('DeleteSpeech', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DeleteSpeechRequest $request
     *
     * @return DeleteSpeechResponse
     */
    public function deleteSpeech($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSpeechWithOptions($request, $runtime);
    }

    /**
     * @param DeleteStudioAppDomainOpenRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DeleteStudioAppDomainOpenResponse
     */
    public function deleteStudioAppDomainOpenWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteStudioAppDomainOpenResponse::fromMap($this->doRequest('DeleteStudioAppDomainOpen', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DeleteStudioAppDomainOpenRequest $request
     *
     * @return DeleteStudioAppDomainOpenResponse
     */
    public function deleteStudioAppDomainOpen($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteStudioAppDomainOpenWithOptions($request, $runtime);
    }

    /**
     * @param DeleteSubscribeRelationRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteSubscribeRelationResponse
     */
    public function deleteSubscribeRelationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteSubscribeRelationResponse::fromMap($this->doRequest('DeleteSubscribeRelation', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DeleteSubscribeRelationRequest $request
     *
     * @return DeleteSubscribeRelationResponse
     */
    public function deleteSubscribeRelation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSubscribeRelationWithOptions($request, $runtime);
    }

    /**
     * @param DeleteThingModelRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteThingModelResponse
     */
    public function deleteThingModelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteThingModelResponse::fromMap($this->doRequest('DeleteThingModel', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DeleteThingModelRequest $request
     *
     * @return DeleteThingModelResponse
     */
    public function deleteThingModel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteThingModelWithOptions($request, $runtime);
    }

    /**
     * @param DeleteTopicRouteTableRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteTopicRouteTableResponse
     */
    public function deleteTopicRouteTableWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteTopicRouteTableResponse::fromMap($this->doRequest('DeleteTopicRouteTable', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DeleteTopicRouteTableRequest $request
     *
     * @return DeleteTopicRouteTableResponse
     */
    public function deleteTopicRouteTable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTopicRouteTableWithOptions($request, $runtime);
    }

    /**
     * @param DetachDestinationRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DetachDestinationResponse
     */
    public function detachDestinationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DetachDestinationResponse::fromMap($this->doRequest('DetachDestination', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DetachDestinationRequest $request
     *
     * @return DetachDestinationResponse
     */
    public function detachDestination($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detachDestinationWithOptions($request, $runtime);
    }

    /**
     * @param DetachParserDataSourceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DetachParserDataSourceResponse
     */
    public function detachParserDataSourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DetachParserDataSourceResponse::fromMap($this->doRequest('DetachParserDataSource', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DetachParserDataSourceRequest $request
     *
     * @return DetachParserDataSourceResponse
     */
    public function detachParserDataSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detachParserDataSourceWithOptions($request, $runtime);
    }

    /**
     * @param DisableDeviceTunnelRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DisableDeviceTunnelResponse
     */
    public function disableDeviceTunnelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DisableDeviceTunnelResponse::fromMap($this->doRequest('DisableDeviceTunnel', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DisableDeviceTunnelRequest $request
     *
     * @return DisableDeviceTunnelResponse
     */
    public function disableDeviceTunnel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableDeviceTunnelWithOptions($request, $runtime);
    }

    /**
     * @param DisableDeviceTunnelShareRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DisableDeviceTunnelShareResponse
     */
    public function disableDeviceTunnelShareWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DisableDeviceTunnelShareResponse::fromMap($this->doRequest('DisableDeviceTunnelShare', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DisableDeviceTunnelShareRequest $request
     *
     * @return DisableDeviceTunnelShareResponse
     */
    public function disableDeviceTunnelShare($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableDeviceTunnelShareWithOptions($request, $runtime);
    }

    /**
     * @param DisableSceneRuleRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DisableSceneRuleResponse
     */
    public function disableSceneRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DisableSceneRuleResponse::fromMap($this->doRequest('DisableSceneRule', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DisableSceneRuleRequest $request
     *
     * @return DisableSceneRuleResponse
     */
    public function disableSceneRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableSceneRuleWithOptions($request, $runtime);
    }

    /**
     * @param DisableThingRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DisableThingResponse
     */
    public function disableThingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DisableThingResponse::fromMap($this->doRequest('DisableThing', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DisableThingRequest $request
     *
     * @return DisableThingResponse
     */
    public function disableThing($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableThingWithOptions($request, $runtime);
    }

    /**
     * @param EnableDeviceTunnelRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return EnableDeviceTunnelResponse
     */
    public function enableDeviceTunnelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return EnableDeviceTunnelResponse::fromMap($this->doRequest('EnableDeviceTunnel', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param EnableDeviceTunnelRequest $request
     *
     * @return EnableDeviceTunnelResponse
     */
    public function enableDeviceTunnel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableDeviceTunnelWithOptions($request, $runtime);
    }

    /**
     * @param EnableDeviceTunnelShareRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return EnableDeviceTunnelShareResponse
     */
    public function enableDeviceTunnelShareWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return EnableDeviceTunnelShareResponse::fromMap($this->doRequest('EnableDeviceTunnelShare', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param EnableDeviceTunnelShareRequest $request
     *
     * @return EnableDeviceTunnelShareResponse
     */
    public function enableDeviceTunnelShare($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableDeviceTunnelShareWithOptions($request, $runtime);
    }

    /**
     * @param EnableSceneRuleRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return EnableSceneRuleResponse
     */
    public function enableSceneRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return EnableSceneRuleResponse::fromMap($this->doRequest('EnableSceneRule', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param EnableSceneRuleRequest $request
     *
     * @return EnableSceneRuleResponse
     */
    public function enableSceneRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableSceneRuleWithOptions($request, $runtime);
    }

    /**
     * @param EnableThingRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return EnableThingResponse
     */
    public function enableThingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return EnableThingResponse::fromMap($this->doRequest('EnableThing', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param EnableThingRequest $request
     *
     * @return EnableThingResponse
     */
    public function enableThing($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableThingWithOptions($request, $runtime);
    }

    /**
     * @param GenerateDeviceNameListURLRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return GenerateDeviceNameListURLResponse
     */
    public function generateDeviceNameListURLWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GenerateDeviceNameListURLResponse::fromMap($this->doRequest('GenerateDeviceNameListURL', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GenerateDeviceNameListURLRequest $request
     *
     * @return GenerateDeviceNameListURLResponse
     */
    public function generateDeviceNameListURL($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateDeviceNameListURLWithOptions($request, $runtime);
    }

    /**
     * @param GenerateFileUploadURLRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GenerateFileUploadURLResponse
     */
    public function generateFileUploadURLWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GenerateFileUploadURLResponse::fromMap($this->doRequest('GenerateFileUploadURL', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GenerateFileUploadURLRequest $request
     *
     * @return GenerateFileUploadURLResponse
     */
    public function generateFileUploadURL($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateFileUploadURLWithOptions($request, $runtime);
    }

    /**
     * @param GenerateOTAUploadURLRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GenerateOTAUploadURLResponse
     */
    public function generateOTAUploadURLWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GenerateOTAUploadURLResponse::fromMap($this->doRequest('GenerateOTAUploadURL', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GenerateOTAUploadURLRequest $request
     *
     * @return GenerateOTAUploadURLResponse
     */
    public function generateOTAUploadURL($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateOTAUploadURLWithOptions($request, $runtime);
    }

    /**
     * @param GetDataAPIServiceDetailRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetDataAPIServiceDetailResponse
     */
    public function getDataAPIServiceDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetDataAPIServiceDetailResponse::fromMap($this->doRequest('GetDataAPIServiceDetail', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetDataAPIServiceDetailRequest $request
     *
     * @return GetDataAPIServiceDetailResponse
     */
    public function getDataAPIServiceDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDataAPIServiceDetailWithOptions($request, $runtime);
    }

    /**
     * @param GetDestinationRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetDestinationResponse
     */
    public function getDestinationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetDestinationResponse::fromMap($this->doRequest('GetDestination', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetDestinationRequest $request
     *
     * @return GetDestinationResponse
     */
    public function getDestination($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDestinationWithOptions($request, $runtime);
    }

    /**
     * @param GetDeviceShadowRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetDeviceShadowResponse
     */
    public function getDeviceShadowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetDeviceShadowResponse::fromMap($this->doRequest('GetDeviceShadow', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetDeviceShadowRequest $request
     *
     * @return GetDeviceShadowResponse
     */
    public function getDeviceShadow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDeviceShadowWithOptions($request, $runtime);
    }

    /**
     * @param GetDeviceStatusRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetDeviceStatusResponse
     */
    public function getDeviceStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetDeviceStatusResponse::fromMap($this->doRequest('GetDeviceStatus', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetDeviceStatusRequest $request
     *
     * @return GetDeviceStatusResponse
     */
    public function getDeviceStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDeviceStatusWithOptions($request, $runtime);
    }

    /**
     * @param GetDeviceTunnelShareStatusRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return GetDeviceTunnelShareStatusResponse
     */
    public function getDeviceTunnelShareStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetDeviceTunnelShareStatusResponse::fromMap($this->doRequest('GetDeviceTunnelShareStatus', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetDeviceTunnelShareStatusRequest $request
     *
     * @return GetDeviceTunnelShareStatusResponse
     */
    public function getDeviceTunnelShareStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDeviceTunnelShareStatusWithOptions($request, $runtime);
    }

    /**
     * @param GetDeviceTunnelStatusRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetDeviceTunnelStatusResponse
     */
    public function getDeviceTunnelStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetDeviceTunnelStatusResponse::fromMap($this->doRequest('GetDeviceTunnelStatus', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetDeviceTunnelStatusRequest $request
     *
     * @return GetDeviceTunnelStatusResponse
     */
    public function getDeviceTunnelStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDeviceTunnelStatusWithOptions($request, $runtime);
    }

    /**
     * @param GetDownloadFileRequest $tmp
     * @param RuntimeOptions         $runtime
     *
     * @return GetDownloadFileResponse
     */
    public function getDownloadFileWithOptions($tmp, $runtime)
    {
        Utils::validateModel($tmp);
        $request = new GetDownloadFileShrinkRequest([]);
        RpcUtils::convert($tmp, $request);
        if (!Utils::isUnset($tmp->context)) {
            $request->contextShrink = Utils::toJSONString($tmp->context);
        }

        return GetDownloadFileResponse::fromMap($this->doRequest('GetDownloadFile', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetDownloadFileRequest $request
     *
     * @return GetDownloadFileResponse
     */
    public function getDownloadFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDownloadFileWithOptions($request, $runtime);
    }

    /**
     * @param GetEdgeDriverVersionRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetEdgeDriverVersionResponse
     */
    public function getEdgeDriverVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetEdgeDriverVersionResponse::fromMap($this->doRequest('GetEdgeDriverVersion', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetEdgeDriverVersionRequest $request
     *
     * @return GetEdgeDriverVersionResponse
     */
    public function getEdgeDriverVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getEdgeDriverVersionWithOptions($request, $runtime);
    }

    /**
     * @param GetEdgeInstanceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetEdgeInstanceResponse
     */
    public function getEdgeInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetEdgeInstanceResponse::fromMap($this->doRequest('GetEdgeInstance', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetEdgeInstanceRequest $request
     *
     * @return GetEdgeInstanceResponse
     */
    public function getEdgeInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getEdgeInstanceWithOptions($request, $runtime);
    }

    /**
     * @param GetEdgeInstanceDeploymentRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return GetEdgeInstanceDeploymentResponse
     */
    public function getEdgeInstanceDeploymentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetEdgeInstanceDeploymentResponse::fromMap($this->doRequest('GetEdgeInstanceDeployment', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetEdgeInstanceDeploymentRequest $request
     *
     * @return GetEdgeInstanceDeploymentResponse
     */
    public function getEdgeInstanceDeployment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getEdgeInstanceDeploymentWithOptions($request, $runtime);
    }

    /**
     * @param GetEdgeInstanceMessageRoutingRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return GetEdgeInstanceMessageRoutingResponse
     */
    public function getEdgeInstanceMessageRoutingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetEdgeInstanceMessageRoutingResponse::fromMap($this->doRequest('GetEdgeInstanceMessageRouting', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetEdgeInstanceMessageRoutingRequest $request
     *
     * @return GetEdgeInstanceMessageRoutingResponse
     */
    public function getEdgeInstanceMessageRouting($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getEdgeInstanceMessageRoutingWithOptions($request, $runtime);
    }

    /**
     * @param GetGatewayBySubDeviceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetGatewayBySubDeviceResponse
     */
    public function getGatewayBySubDeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetGatewayBySubDeviceResponse::fromMap($this->doRequest('GetGatewayBySubDevice', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetGatewayBySubDeviceRequest $request
     *
     * @return GetGatewayBySubDeviceResponse
     */
    public function getGatewayBySubDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getGatewayBySubDeviceWithOptions($request, $runtime);
    }

    /**
     * @param GetLoraNodesTaskRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetLoraNodesTaskResponse
     */
    public function getLoraNodesTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetLoraNodesTaskResponse::fromMap($this->doRequest('GetLoraNodesTask', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetLoraNodesTaskRequest $request
     *
     * @return GetLoraNodesTaskResponse
     */
    public function getLoraNodesTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLoraNodesTaskWithOptions($request, $runtime);
    }

    /**
     * @param GetParserRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return GetParserResponse
     */
    public function getParserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetParserResponse::fromMap($this->doRequest('GetParser', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetParserRequest $request
     *
     * @return GetParserResponse
     */
    public function getParser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getParserWithOptions($request, $runtime);
    }

    /**
     * @param GetParserDataSourceRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetParserDataSourceResponse
     */
    public function getParserDataSourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetParserDataSourceResponse::fromMap($this->doRequest('GetParserDataSource', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetParserDataSourceRequest $request
     *
     * @return GetParserDataSourceResponse
     */
    public function getParserDataSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getParserDataSourceWithOptions($request, $runtime);
    }

    /**
     * @param GetRuleRequest $request
     * @param RuntimeOptions $runtime
     *
     * @return GetRuleResponse
     */
    public function getRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetRuleResponse::fromMap($this->doRequest('GetRule', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetRuleRequest $request
     *
     * @return GetRuleResponse
     */
    public function getRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRuleWithOptions($request, $runtime);
    }

    /**
     * @param GetRuleActionRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetRuleActionResponse
     */
    public function getRuleActionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetRuleActionResponse::fromMap($this->doRequest('GetRuleAction', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetRuleActionRequest $request
     *
     * @return GetRuleActionResponse
     */
    public function getRuleAction($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRuleActionWithOptions($request, $runtime);
    }

    /**
     * @param GetSceneRuleRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetSceneRuleResponse
     */
    public function getSceneRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetSceneRuleResponse::fromMap($this->doRequest('GetSceneRule', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetSceneRuleRequest $request
     *
     * @return GetSceneRuleResponse
     */
    public function getSceneRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSceneRuleWithOptions($request, $runtime);
    }

    /**
     * @param GetShareTaskByDeviceOpenRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetShareTaskByDeviceOpenResponse
     */
    public function getShareTaskByDeviceOpenWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetShareTaskByDeviceOpenResponse::fromMap($this->doRequest('GetShareTaskByDeviceOpen', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetShareTaskByDeviceOpenRequest $request
     *
     * @return GetShareTaskByDeviceOpenResponse
     */
    public function getShareTaskByDeviceOpen($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getShareTaskByDeviceOpenWithOptions($request, $runtime);
    }

    /**
     * @param GetSoundCodeAudioRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetSoundCodeAudioResponse
     */
    public function getSoundCodeAudioWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetSoundCodeAudioResponse::fromMap($this->doRequest('GetSoundCodeAudio', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetSoundCodeAudioRequest $request
     *
     * @return GetSoundCodeAudioResponse
     */
    public function getSoundCodeAudio($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSoundCodeAudioWithOptions($request, $runtime);
    }

    /**
     * @param GetSoundCodeScheduleRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetSoundCodeScheduleResponse
     */
    public function getSoundCodeScheduleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetSoundCodeScheduleResponse::fromMap($this->doRequest('GetSoundCodeSchedule', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetSoundCodeScheduleRequest $request
     *
     * @return GetSoundCodeScheduleResponse
     */
    public function getSoundCodeSchedule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSoundCodeScheduleWithOptions($request, $runtime);
    }

    /**
     * @param GetSpeechDeviceDetailRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetSpeechDeviceDetailResponse
     */
    public function getSpeechDeviceDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetSpeechDeviceDetailResponse::fromMap($this->doRequest('GetSpeechDeviceDetail', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetSpeechDeviceDetailRequest $request
     *
     * @return GetSpeechDeviceDetailResponse
     */
    public function getSpeechDeviceDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSpeechDeviceDetailWithOptions($request, $runtime);
    }

    /**
     * @param GetSpeechLicenseDeviceStatisticsRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return GetSpeechLicenseDeviceStatisticsResponse
     */
    public function getSpeechLicenseDeviceStatisticsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetSpeechLicenseDeviceStatisticsResponse::fromMap($this->doRequest('GetSpeechLicenseDeviceStatistics', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetSpeechLicenseDeviceStatisticsRequest $request
     *
     * @return GetSpeechLicenseDeviceStatisticsResponse
     */
    public function getSpeechLicenseDeviceStatistics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSpeechLicenseDeviceStatisticsWithOptions($request, $runtime);
    }

    /**
     * @param GetSpeechVoiceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetSpeechVoiceResponse
     */
    public function getSpeechVoiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetSpeechVoiceResponse::fromMap($this->doRequest('GetSpeechVoice', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetSpeechVoiceRequest $request
     *
     * @return GetSpeechVoiceResponse
     */
    public function getSpeechVoice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSpeechVoiceWithOptions($request, $runtime);
    }

    /**
     * @param GetStudioAppTokenOpenRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetStudioAppTokenOpenResponse
     */
    public function getStudioAppTokenOpenWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetStudioAppTokenOpenResponse::fromMap($this->doRequest('GetStudioAppTokenOpen', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetStudioAppTokenOpenRequest $request
     *
     * @return GetStudioAppTokenOpenResponse
     */
    public function getStudioAppTokenOpen($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getStudioAppTokenOpenWithOptions($request, $runtime);
    }

    /**
     * @param GetThingModelTslRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetThingModelTslResponse
     */
    public function getThingModelTslWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetThingModelTslResponse::fromMap($this->doRequest('GetThingModelTsl', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetThingModelTslRequest $request
     *
     * @return GetThingModelTslResponse
     */
    public function getThingModelTsl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getThingModelTslWithOptions($request, $runtime);
    }

    /**
     * @param GetThingModelTslPublishedRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return GetThingModelTslPublishedResponse
     */
    public function getThingModelTslPublishedWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetThingModelTslPublishedResponse::fromMap($this->doRequest('GetThingModelTslPublished', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetThingModelTslPublishedRequest $request
     *
     * @return GetThingModelTslPublishedResponse
     */
    public function getThingModelTslPublished($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getThingModelTslPublishedWithOptions($request, $runtime);
    }

    /**
     * @param GetThingScriptRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetThingScriptResponse
     */
    public function getThingScriptWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetThingScriptResponse::fromMap($this->doRequest('GetThingScript', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetThingScriptRequest $request
     *
     * @return GetThingScriptResponse
     */
    public function getThingScript($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getThingScriptWithOptions($request, $runtime);
    }

    /**
     * @param GetThingTemplateRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetThingTemplateResponse
     */
    public function getThingTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetThingTemplateResponse::fromMap($this->doRequest('GetThingTemplate', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetThingTemplateRequest $request
     *
     * @return GetThingTemplateResponse
     */
    public function getThingTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getThingTemplateWithOptions($request, $runtime);
    }

    /**
     * @param GetThingTopoRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetThingTopoResponse
     */
    public function getThingTopoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetThingTopoResponse::fromMap($this->doRequest('GetThingTopo', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetThingTopoRequest $request
     *
     * @return GetThingTopoResponse
     */
    public function getThingTopo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getThingTopoWithOptions($request, $runtime);
    }

    /**
     * @param GisQueryDeviceLocationRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GisQueryDeviceLocationResponse
     */
    public function gisQueryDeviceLocationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GisQueryDeviceLocationResponse::fromMap($this->doRequest('GisQueryDeviceLocation', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GisQueryDeviceLocationRequest $request
     *
     * @return GisQueryDeviceLocationResponse
     */
    public function gisQueryDeviceLocation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->gisQueryDeviceLocationWithOptions($request, $runtime);
    }

    /**
     * @param GisSearchDeviceTraceRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GisSearchDeviceTraceResponse
     */
    public function gisSearchDeviceTraceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GisSearchDeviceTraceResponse::fromMap($this->doRequest('GisSearchDeviceTrace', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GisSearchDeviceTraceRequest $request
     *
     * @return GisSearchDeviceTraceResponse
     */
    public function gisSearchDeviceTrace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->gisSearchDeviceTraceWithOptions($request, $runtime);
    }

    /**
     * @param ImportDTDataRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ImportDTDataResponse
     */
    public function importDTDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ImportDTDataResponse::fromMap($this->doRequest('ImportDTData', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ImportDTDataRequest $request
     *
     * @return ImportDTDataResponse
     */
    public function importDTData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->importDTDataWithOptions($request, $runtime);
    }

    /**
     * @param ImportDeviceRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ImportDeviceResponse
     */
    public function importDeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ImportDeviceResponse::fromMap($this->doRequest('ImportDevice', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ImportDeviceRequest $request
     *
     * @return ImportDeviceResponse
     */
    public function importDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->importDeviceWithOptions($request, $runtime);
    }

    /**
     * @param ImportThingModelTslRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ImportThingModelTslResponse
     */
    public function importThingModelTslWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ImportThingModelTslResponse::fromMap($this->doRequest('ImportThingModelTsl', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ImportThingModelTslRequest $request
     *
     * @return ImportThingModelTslResponse
     */
    public function importThingModelTsl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->importThingModelTslWithOptions($request, $runtime);
    }

    /**
     * @param InvokeDataAPIServiceRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return InvokeDataAPIServiceResponse
     */
    public function invokeDataAPIServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return InvokeDataAPIServiceResponse::fromMap($this->doRequest('InvokeDataAPIService', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param InvokeDataAPIServiceRequest $request
     *
     * @return InvokeDataAPIServiceResponse
     */
    public function invokeDataAPIService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->invokeDataAPIServiceWithOptions($request, $runtime);
    }

    /**
     * @param InvokeThingServiceRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return InvokeThingServiceResponse
     */
    public function invokeThingServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return InvokeThingServiceResponse::fromMap($this->doRequest('InvokeThingService', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param InvokeThingServiceRequest $request
     *
     * @return InvokeThingServiceResponse
     */
    public function invokeThingService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->invokeThingServiceWithOptions($request, $runtime);
    }

    /**
     * @param InvokeThingsServiceRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return InvokeThingsServiceResponse
     */
    public function invokeThingsServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return InvokeThingsServiceResponse::fromMap($this->doRequest('InvokeThingsService', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param InvokeThingsServiceRequest $request
     *
     * @return InvokeThingsServiceResponse
     */
    public function invokeThingsService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->invokeThingsServiceWithOptions($request, $runtime);
    }

    /**
     * @param ListAnalyticsDataRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListAnalyticsDataResponse
     */
    public function listAnalyticsDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListAnalyticsDataResponse::fromMap($this->doRequest('ListAnalyticsData', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ListAnalyticsDataRequest $request
     *
     * @return ListAnalyticsDataResponse
     */
    public function listAnalyticsData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAnalyticsDataWithOptions($request, $runtime);
    }

    /**
     * @param ListDataSourceItemRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListDataSourceItemResponse
     */
    public function listDataSourceItemWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListDataSourceItemResponse::fromMap($this->doRequest('ListDataSourceItem', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ListDataSourceItemRequest $request
     *
     * @return ListDataSourceItemResponse
     */
    public function listDataSourceItem($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDataSourceItemWithOptions($request, $runtime);
    }

    /**
     * @param ListDestinationRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListDestinationResponse
     */
    public function listDestinationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListDestinationResponse::fromMap($this->doRequest('ListDestination', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ListDestinationRequest $request
     *
     * @return ListDestinationResponse
     */
    public function listDestination($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDestinationWithOptions($request, $runtime);
    }

    /**
     * @param ListDeviceDistributeJobRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListDeviceDistributeJobResponse
     */
    public function listDeviceDistributeJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListDeviceDistributeJobResponse::fromMap($this->doRequest('ListDeviceDistributeJob', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ListDeviceDistributeJobRequest $request
     *
     * @return ListDeviceDistributeJobResponse
     */
    public function listDeviceDistributeJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDeviceDistributeJobWithOptions($request, $runtime);
    }

    /**
     * @param ListDistributedDeviceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListDistributedDeviceResponse
     */
    public function listDistributedDeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListDistributedDeviceResponse::fromMap($this->doRequest('ListDistributedDevice', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ListDistributedDeviceRequest $request
     *
     * @return ListDistributedDeviceResponse
     */
    public function listDistributedDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDistributedDeviceWithOptions($request, $runtime);
    }

    /**
     * @param ListDistributedProductRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListDistributedProductResponse
     */
    public function listDistributedProductWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListDistributedProductResponse::fromMap($this->doRequest('ListDistributedProduct', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ListDistributedProductRequest $request
     *
     * @return ListDistributedProductResponse
     */
    public function listDistributedProduct($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDistributedProductWithOptions($request, $runtime);
    }

    /**
     * @param ListJobRequest $request
     * @param RuntimeOptions $runtime
     *
     * @return ListJobResponse
     */
    public function listJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListJobResponse::fromMap($this->doRequest('ListJob', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ListJobRequest $request
     *
     * @return ListJobResponse
     */
    public function listJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listJobWithOptions($request, $runtime);
    }

    /**
     * @param ListOTAFirmwareRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListOTAFirmwareResponse
     */
    public function listOTAFirmwareWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListOTAFirmwareResponse::fromMap($this->doRequest('ListOTAFirmware', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ListOTAFirmwareRequest $request
     *
     * @return ListOTAFirmwareResponse
     */
    public function listOTAFirmware($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listOTAFirmwareWithOptions($request, $runtime);
    }

    /**
     * @param ListOTAJobByDeviceRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListOTAJobByDeviceResponse
     */
    public function listOTAJobByDeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListOTAJobByDeviceResponse::fromMap($this->doRequest('ListOTAJobByDevice', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ListOTAJobByDeviceRequest $request
     *
     * @return ListOTAJobByDeviceResponse
     */
    public function listOTAJobByDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listOTAJobByDeviceWithOptions($request, $runtime);
    }

    /**
     * @param ListOTAJobByFirmwareRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListOTAJobByFirmwareResponse
     */
    public function listOTAJobByFirmwareWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListOTAJobByFirmwareResponse::fromMap($this->doRequest('ListOTAJobByFirmware', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ListOTAJobByFirmwareRequest $request
     *
     * @return ListOTAJobByFirmwareResponse
     */
    public function listOTAJobByFirmware($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listOTAJobByFirmwareWithOptions($request, $runtime);
    }

    /**
     * @param ListOTAModuleByProductRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListOTAModuleByProductResponse
     */
    public function listOTAModuleByProductWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListOTAModuleByProductResponse::fromMap($this->doRequest('ListOTAModuleByProduct', 'HTTPS', 'GET', '2018-01-20', 'AK', Tea::merge($request), null, $runtime));
    }

    /**
     * @param ListOTAModuleByProductRequest $request
     *
     * @return ListOTAModuleByProductResponse
     */
    public function listOTAModuleByProduct($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listOTAModuleByProductWithOptions($request, $runtime);
    }

    /**
     * @param ListOTAModuleVersionsByDeviceRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return ListOTAModuleVersionsByDeviceResponse
     */
    public function listOTAModuleVersionsByDeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListOTAModuleVersionsByDeviceResponse::fromMap($this->doRequest('ListOTAModuleVersionsByDevice', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ListOTAModuleVersionsByDeviceRequest $request
     *
     * @return ListOTAModuleVersionsByDeviceResponse
     */
    public function listOTAModuleVersionsByDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listOTAModuleVersionsByDeviceWithOptions($request, $runtime);
    }

    /**
     * @param ListOTATaskByJobRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListOTATaskByJobResponse
     */
    public function listOTATaskByJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListOTATaskByJobResponse::fromMap($this->doRequest('ListOTATaskByJob', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ListOTATaskByJobRequest $request
     *
     * @return ListOTATaskByJobResponse
     */
    public function listOTATaskByJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listOTATaskByJobWithOptions($request, $runtime);
    }

    /**
     * @param ListOTAUnfinishedTaskByDeviceRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return ListOTAUnfinishedTaskByDeviceResponse
     */
    public function listOTAUnfinishedTaskByDeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListOTAUnfinishedTaskByDeviceResponse::fromMap($this->doRequest('ListOTAUnfinishedTaskByDevice', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ListOTAUnfinishedTaskByDeviceRequest $request
     *
     * @return ListOTAUnfinishedTaskByDeviceResponse
     */
    public function listOTAUnfinishedTaskByDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listOTAUnfinishedTaskByDeviceWithOptions($request, $runtime);
    }

    /**
     * @param ListParserRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ListParserResponse
     */
    public function listParserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListParserResponse::fromMap($this->doRequest('ListParser', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ListParserRequest $request
     *
     * @return ListParserResponse
     */
    public function listParser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listParserWithOptions($request, $runtime);
    }

    /**
     * @param ListParserDataSourceRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListParserDataSourceResponse
     */
    public function listParserDataSourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListParserDataSourceResponse::fromMap($this->doRequest('ListParserDataSource', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ListParserDataSourceRequest $request
     *
     * @return ListParserDataSourceResponse
     */
    public function listParserDataSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listParserDataSourceWithOptions($request, $runtime);
    }

    /**
     * @param ListParserDestinationRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListParserDestinationResponse
     */
    public function listParserDestinationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListParserDestinationResponse::fromMap($this->doRequest('ListParserDestination', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ListParserDestinationRequest $request
     *
     * @return ListParserDestinationResponse
     */
    public function listParserDestination($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listParserDestinationWithOptions($request, $runtime);
    }

    /**
     * @param ListProductByTagsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListProductByTagsResponse
     */
    public function listProductByTagsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListProductByTagsResponse::fromMap($this->doRequest('ListProductByTags', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ListProductByTagsRequest $request
     *
     * @return ListProductByTagsResponse
     */
    public function listProductByTags($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listProductByTagsWithOptions($request, $runtime);
    }

    /**
     * @param ListProductTagsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListProductTagsResponse
     */
    public function listProductTagsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListProductTagsResponse::fromMap($this->doRequest('ListProductTags', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ListProductTagsRequest $request
     *
     * @return ListProductTagsResponse
     */
    public function listProductTags($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listProductTagsWithOptions($request, $runtime);
    }

    /**
     * @param ListRuleRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return ListRuleResponse
     */
    public function listRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListRuleResponse::fromMap($this->doRequest('ListRule', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ListRuleRequest $request
     *
     * @return ListRuleResponse
     */
    public function listRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRuleWithOptions($request, $runtime);
    }

    /**
     * @param ListRuleActionsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListRuleActionsResponse
     */
    public function listRuleActionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListRuleActionsResponse::fromMap($this->doRequest('ListRuleActions', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ListRuleActionsRequest $request
     *
     * @return ListRuleActionsResponse
     */
    public function listRuleActions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRuleActionsWithOptions($request, $runtime);
    }

    /**
     * @param ListTaskRequest $tmp
     * @param RuntimeOptions  $runtime
     *
     * @return ListTaskResponse
     */
    public function listTaskWithOptions($tmp, $runtime)
    {
        Utils::validateModel($tmp);
        $request = new ListTaskShrinkRequest([]);
        RpcUtils::convert($tmp, $request);
        if (!Utils::isUnset($tmp->device)) {
            $request->deviceShrink = Utils::toJSONString($tmp->device);
        }

        return ListTaskResponse::fromMap($this->doRequest('ListTask', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ListTaskRequest $request
     *
     * @return ListTaskResponse
     */
    public function listTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTaskWithOptions($request, $runtime);
    }

    /**
     * @param ListThingModelVersionRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListThingModelVersionResponse
     */
    public function listThingModelVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListThingModelVersionResponse::fromMap($this->doRequest('ListThingModelVersion', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ListThingModelVersionRequest $request
     *
     * @return ListThingModelVersionResponse
     */
    public function listThingModelVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listThingModelVersionWithOptions($request, $runtime);
    }

    /**
     * @param ListThingTemplatesRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListThingTemplatesResponse
     */
    public function listThingTemplatesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListThingTemplatesResponse::fromMap($this->doRequest('ListThingTemplates', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ListThingTemplatesRequest $request
     *
     * @return ListThingTemplatesResponse
     */
    public function listThingTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listThingTemplatesWithOptions($request, $runtime);
    }

    /**
     * @param NotifyAddThingTopoRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return NotifyAddThingTopoResponse
     */
    public function notifyAddThingTopoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return NotifyAddThingTopoResponse::fromMap($this->doRequest('NotifyAddThingTopo', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param NotifyAddThingTopoRequest $request
     *
     * @return NotifyAddThingTopoResponse
     */
    public function notifyAddThingTopo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->notifyAddThingTopoWithOptions($request, $runtime);
    }

    /**
     * @param OpenIotServiceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return OpenIotServiceResponse
     */
    public function openIotServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return OpenIotServiceResponse::fromMap($this->doRequest('OpenIotService', 'HTTPS', 'POST', '2018-01-20', 'AK,APP,PrivateKey,BearerToken', null, Tea::merge($request), $runtime));
    }

    /**
     * @param OpenIotServiceRequest $request
     *
     * @return OpenIotServiceResponse
     */
    public function openIotService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->openIotServiceWithOptions($request, $runtime);
    }

    /**
     * @param PackageSoundCodeLabelBatchAudioRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return PackageSoundCodeLabelBatchAudioResponse
     */
    public function packageSoundCodeLabelBatchAudioWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return PackageSoundCodeLabelBatchAudioResponse::fromMap($this->doRequest('PackageSoundCodeLabelBatchAudio', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param PackageSoundCodeLabelBatchAudioRequest $request
     *
     * @return PackageSoundCodeLabelBatchAudioResponse
     */
    public function packageSoundCodeLabelBatchAudio($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->packageSoundCodeLabelBatchAudioWithOptions($request, $runtime);
    }

    /**
     * @param PageQuerySharedSpeechOpenRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return PageQuerySharedSpeechOpenResponse
     */
    public function pageQuerySharedSpeechOpenWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return PageQuerySharedSpeechOpenResponse::fromMap($this->doRequest('PageQuerySharedSpeechOpen', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param PageQuerySharedSpeechOpenRequest $request
     *
     * @return PageQuerySharedSpeechOpenResponse
     */
    public function pageQuerySharedSpeechOpen($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->pageQuerySharedSpeechOpenWithOptions($request, $runtime);
    }

    /**
     * @param PageQuerySpeechBroadcastHourRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return PageQuerySpeechBroadcastHourResponse
     */
    public function pageQuerySpeechBroadcastHourWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return PageQuerySpeechBroadcastHourResponse::fromMap($this->doRequest('PageQuerySpeechBroadcastHour', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param PageQuerySpeechBroadcastHourRequest $request
     *
     * @return PageQuerySpeechBroadcastHourResponse
     */
    public function pageQuerySpeechBroadcastHour($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->pageQuerySpeechBroadcastHourWithOptions($request, $runtime);
    }

    /**
     * @param PrintByTemplateRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return PrintByTemplateResponse
     */
    public function printByTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return PrintByTemplateResponse::fromMap($this->doRequest('PrintByTemplate', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param PrintByTemplateRequest $request
     *
     * @return PrintByTemplateResponse
     */
    public function printByTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->printByTemplateWithOptions($request, $runtime);
    }

    /**
     * @param PubRequest     $request
     * @param RuntimeOptions $runtime
     *
     * @return PubResponse
     */
    public function pubWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return PubResponse::fromMap($this->doRequest('Pub', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param PubRequest $request
     *
     * @return PubResponse
     */
    public function pub($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->pubWithOptions($request, $runtime);
    }

    /**
     * @param PubBroadcastRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return PubBroadcastResponse
     */
    public function pubBroadcastWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return PubBroadcastResponse::fromMap($this->doRequest('PubBroadcast', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param PubBroadcastRequest $request
     *
     * @return PubBroadcastResponse
     */
    public function pubBroadcast($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->pubBroadcastWithOptions($request, $runtime);
    }

    /**
     * @param PublishScriptRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return PublishScriptResponse
     */
    public function publishScriptWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return PublishScriptResponse::fromMap($this->doRequest('PublishScript', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param PublishScriptRequest $request
     *
     * @return PublishScriptResponse
     */
    public function publishScript($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->publishScriptWithOptions($request, $runtime);
    }

    /**
     * @param PublishStudioAppRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return PublishStudioAppResponse
     */
    public function publishStudioAppWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return PublishStudioAppResponse::fromMap($this->doRequest('PublishStudioApp', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param PublishStudioAppRequest $request
     *
     * @return PublishStudioAppResponse
     */
    public function publishStudioApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->publishStudioAppWithOptions($request, $runtime);
    }

    /**
     * @param PublishThingModelRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return PublishThingModelResponse
     */
    public function publishThingModelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return PublishThingModelResponse::fromMap($this->doRequest('PublishThingModel', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param PublishThingModelRequest $request
     *
     * @return PublishThingModelResponse
     */
    public function publishThingModel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->publishThingModelWithOptions($request, $runtime);
    }

    /**
     * @param PushSpeechRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return PushSpeechResponse
     */
    public function pushSpeechWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return PushSpeechResponse::fromMap($this->doRequest('PushSpeech', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param PushSpeechRequest $request
     *
     * @return PushSpeechResponse
     */
    public function pushSpeech($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->pushSpeechWithOptions($request, $runtime);
    }

    /**
     * @param QueryBatchRegisterDeviceStatusRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return QueryBatchRegisterDeviceStatusResponse
     */
    public function queryBatchRegisterDeviceStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return QueryBatchRegisterDeviceStatusResponse::fromMap($this->doRequest('QueryBatchRegisterDeviceStatus', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param QueryBatchRegisterDeviceStatusRequest $request
     *
     * @return QueryBatchRegisterDeviceStatusResponse
     */
    public function queryBatchRegisterDeviceStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryBatchRegisterDeviceStatusWithOptions($request, $runtime);
    }

    /**
     * @param QueryCertUrlByApplyIdRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return QueryCertUrlByApplyIdResponse
     */
    public function queryCertUrlByApplyIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return QueryCertUrlByApplyIdResponse::fromMap($this->doRequest('QueryCertUrlByApplyId', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param QueryCertUrlByApplyIdRequest $request
     *
     * @return QueryCertUrlByApplyIdResponse
     */
    public function queryCertUrlByApplyId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryCertUrlByApplyIdWithOptions($request, $runtime);
    }

    /**
     * @param QueryClientIdsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return QueryClientIdsResponse
     */
    public function queryClientIdsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return QueryClientIdsResponse::fromMap($this->doRequest('QueryClientIds', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param QueryClientIdsRequest $request
     *
     * @return QueryClientIdsResponse
     */
    public function queryClientIds($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryClientIdsWithOptions($request, $runtime);
    }

    /**
     * @param QueryConsumerGroupByGroupIdRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return QueryConsumerGroupByGroupIdResponse
     */
    public function queryConsumerGroupByGroupIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return QueryConsumerGroupByGroupIdResponse::fromMap($this->doRequest('QueryConsumerGroupByGroupId', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param QueryConsumerGroupByGroupIdRequest $request
     *
     * @return QueryConsumerGroupByGroupIdResponse
     */
    public function queryConsumerGroupByGroupId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryConsumerGroupByGroupIdWithOptions($request, $runtime);
    }

    /**
     * @param QueryConsumerGroupListRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return QueryConsumerGroupListResponse
     */
    public function queryConsumerGroupListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return QueryConsumerGroupListResponse::fromMap($this->doRequest('QueryConsumerGroupList', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param QueryConsumerGroupListRequest $request
     *
     * @return QueryConsumerGroupListResponse
     */
    public function queryConsumerGroupList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryConsumerGroupListWithOptions($request, $runtime);
    }

    /**
     * @param QueryConsumerGroupStatusRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return QueryConsumerGroupStatusResponse
     */
    public function queryConsumerGroupStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return QueryConsumerGroupStatusResponse::fromMap($this->doRequest('QueryConsumerGroupStatus', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param QueryConsumerGroupStatusRequest $request
     *
     * @return QueryConsumerGroupStatusResponse
     */
    public function queryConsumerGroupStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryConsumerGroupStatusWithOptions($request, $runtime);
    }

    /**
     * @param QueryDetailSceneRuleLogRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return QueryDetailSceneRuleLogResponse
     */
    public function queryDetailSceneRuleLogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return QueryDetailSceneRuleLogResponse::fromMap($this->doRequest('QueryDetailSceneRuleLog', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param QueryDetailSceneRuleLogRequest $request
     *
     * @return QueryDetailSceneRuleLogResponse
     */
    public function queryDetailSceneRuleLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDetailSceneRuleLogWithOptions($request, $runtime);
    }

    /**
     * @param QueryDeviceRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return QueryDeviceResponse
     */
    public function queryDeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return QueryDeviceResponse::fromMap($this->doRequest('QueryDevice', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param QueryDeviceRequest $request
     *
     * @return QueryDeviceResponse
     */
    public function queryDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDeviceWithOptions($request, $runtime);
    }

    /**
     * @param QueryDeviceBySQLRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return QueryDeviceBySQLResponse
     */
    public function queryDeviceBySQLWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return QueryDeviceBySQLResponse::fromMap($this->doRequest('QueryDeviceBySQL', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param QueryDeviceBySQLRequest $request
     *
     * @return QueryDeviceBySQLResponse
     */
    public function queryDeviceBySQL($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDeviceBySQLWithOptions($request, $runtime);
    }

    /**
     * @param QueryDeviceByStatusRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return QueryDeviceByStatusResponse
     */
    public function queryDeviceByStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return QueryDeviceByStatusResponse::fromMap($this->doRequest('QueryDeviceByStatus', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param QueryDeviceByStatusRequest $request
     *
     * @return QueryDeviceByStatusResponse
     */
    public function queryDeviceByStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDeviceByStatusWithOptions($request, $runtime);
    }

    /**
     * @param QueryDeviceByTagsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return QueryDeviceByTagsResponse
     */
    public function queryDeviceByTagsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return QueryDeviceByTagsResponse::fromMap($this->doRequest('QueryDeviceByTags', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param QueryDeviceByTagsRequest $request
     *
     * @return QueryDeviceByTagsResponse
     */
    public function queryDeviceByTags($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDeviceByTagsWithOptions($request, $runtime);
    }

    /**
     * @param QueryDeviceCertRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return QueryDeviceCertResponse
     */
    public function queryDeviceCertWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return QueryDeviceCertResponse::fromMap($this->doRequest('QueryDeviceCert', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param QueryDeviceCertRequest $request
     *
     * @return QueryDeviceCertResponse
     */
    public function queryDeviceCert($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDeviceCertWithOptions($request, $runtime);
    }

    /**
     * @param QueryDeviceDesiredPropertyRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return QueryDeviceDesiredPropertyResponse
     */
    public function queryDeviceDesiredPropertyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return QueryDeviceDesiredPropertyResponse::fromMap($this->doRequest('QueryDeviceDesiredProperty', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param QueryDeviceDesiredPropertyRequest $request
     *
     * @return QueryDeviceDesiredPropertyResponse
     */
    public function queryDeviceDesiredProperty($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDeviceDesiredPropertyWithOptions($request, $runtime);
    }

    /**
     * @param QueryDeviceDetailRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return QueryDeviceDetailResponse
     */
    public function queryDeviceDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return QueryDeviceDetailResponse::fromMap($this->doRequest('QueryDeviceDetail', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param QueryDeviceDetailRequest $request
     *
     * @return QueryDeviceDetailResponse
     */
    public function queryDeviceDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDeviceDetailWithOptions($request, $runtime);
    }

    /**
     * @param QueryDeviceDistributeDetailRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return QueryDeviceDistributeDetailResponse
     */
    public function queryDeviceDistributeDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return QueryDeviceDistributeDetailResponse::fromMap($this->doRequest('QueryDeviceDistributeDetail', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param QueryDeviceDistributeDetailRequest $request
     *
     * @return QueryDeviceDistributeDetailResponse
     */
    public function queryDeviceDistributeDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDeviceDistributeDetailWithOptions($request, $runtime);
    }

    /**
     * @param QueryDeviceDistributeJobRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return QueryDeviceDistributeJobResponse
     */
    public function queryDeviceDistributeJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return QueryDeviceDistributeJobResponse::fromMap($this->doRequest('QueryDeviceDistributeJob', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param QueryDeviceDistributeJobRequest $request
     *
     * @return QueryDeviceDistributeJobResponse
     */
    public function queryDeviceDistributeJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDeviceDistributeJobWithOptions($request, $runtime);
    }

    /**
     * @param QueryDeviceEventDataRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return QueryDeviceEventDataResponse
     */
    public function queryDeviceEventDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return QueryDeviceEventDataResponse::fromMap($this->doRequest('QueryDeviceEventData', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param QueryDeviceEventDataRequest $request
     *
     * @return QueryDeviceEventDataResponse
     */
    public function queryDeviceEventData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDeviceEventDataWithOptions($request, $runtime);
    }

    /**
     * @param QueryDeviceFileRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return QueryDeviceFileResponse
     */
    public function queryDeviceFileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return QueryDeviceFileResponse::fromMap($this->doRequest('QueryDeviceFile', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param QueryDeviceFileRequest $request
     *
     * @return QueryDeviceFileResponse
     */
    public function queryDeviceFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDeviceFileWithOptions($request, $runtime);
    }

    /**
     * @param QueryDeviceFileListRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return QueryDeviceFileListResponse
     */
    public function queryDeviceFileListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return QueryDeviceFileListResponse::fromMap($this->doRequest('QueryDeviceFileList', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param QueryDeviceFileListRequest $request
     *
     * @return QueryDeviceFileListResponse
     */
    public function queryDeviceFileList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDeviceFileListWithOptions($request, $runtime);
    }

    /**
     * @param QueryDeviceGroupByDeviceRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return QueryDeviceGroupByDeviceResponse
     */
    public function queryDeviceGroupByDeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return QueryDeviceGroupByDeviceResponse::fromMap($this->doRequest('QueryDeviceGroupByDevice', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param QueryDeviceGroupByDeviceRequest $request
     *
     * @return QueryDeviceGroupByDeviceResponse
     */
    public function queryDeviceGroupByDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDeviceGroupByDeviceWithOptions($request, $runtime);
    }

    /**
     * @param QueryDeviceGroupByTagsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return QueryDeviceGroupByTagsResponse
     */
    public function queryDeviceGroupByTagsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return QueryDeviceGroupByTagsResponse::fromMap($this->doRequest('QueryDeviceGroupByTags', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param QueryDeviceGroupByTagsRequest $request
     *
     * @return QueryDeviceGroupByTagsResponse
     */
    public function queryDeviceGroupByTags($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDeviceGroupByTagsWithOptions($request, $runtime);
    }

    /**
     * @param QueryDeviceGroupInfoRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return QueryDeviceGroupInfoResponse
     */
    public function queryDeviceGroupInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return QueryDeviceGroupInfoResponse::fromMap($this->doRequest('QueryDeviceGroupInfo', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param QueryDeviceGroupInfoRequest $request
     *
     * @return QueryDeviceGroupInfoResponse
     */
    public function queryDeviceGroupInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDeviceGroupInfoWithOptions($request, $runtime);
    }

    /**
     * @param QueryDeviceGroupListRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return QueryDeviceGroupListResponse
     */
    public function queryDeviceGroupListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return QueryDeviceGroupListResponse::fromMap($this->doRequest('QueryDeviceGroupList', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param QueryDeviceGroupListRequest $request
     *
     * @return QueryDeviceGroupListResponse
     */
    public function queryDeviceGroupList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDeviceGroupListWithOptions($request, $runtime);
    }

    /**
     * @param QueryDeviceGroupTagListRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return QueryDeviceGroupTagListResponse
     */
    public function queryDeviceGroupTagListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return QueryDeviceGroupTagListResponse::fromMap($this->doRequest('QueryDeviceGroupTagList', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param QueryDeviceGroupTagListRequest $request
     *
     * @return QueryDeviceGroupTagListResponse
     */
    public function queryDeviceGroupTagList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDeviceGroupTagListWithOptions($request, $runtime);
    }

    /**
     * @param QueryDeviceInfoRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return QueryDeviceInfoResponse
     */
    public function queryDeviceInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return QueryDeviceInfoResponse::fromMap($this->doRequest('QueryDeviceInfo', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param QueryDeviceInfoRequest $request
     *
     * @return QueryDeviceInfoResponse
     */
    public function queryDeviceInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDeviceInfoWithOptions($request, $runtime);
    }

    /**
     * @param QueryDeviceListByDeviceGroupRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return QueryDeviceListByDeviceGroupResponse
     */
    public function queryDeviceListByDeviceGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return QueryDeviceListByDeviceGroupResponse::fromMap($this->doRequest('QueryDeviceListByDeviceGroup', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param QueryDeviceListByDeviceGroupRequest $request
     *
     * @return QueryDeviceListByDeviceGroupResponse
     */
    public function queryDeviceListByDeviceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDeviceListByDeviceGroupWithOptions($request, $runtime);
    }

    /**
     * @param QueryDeviceOriginalEventDataRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return QueryDeviceOriginalEventDataResponse
     */
    public function queryDeviceOriginalEventDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return QueryDeviceOriginalEventDataResponse::fromMap($this->doRequest('QueryDeviceOriginalEventData', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param QueryDeviceOriginalEventDataRequest $request
     *
     * @return QueryDeviceOriginalEventDataResponse
     */
    public function queryDeviceOriginalEventData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDeviceOriginalEventDataWithOptions($request, $runtime);
    }

    /**
     * @param QueryDeviceOriginalPropertyDataRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return QueryDeviceOriginalPropertyDataResponse
     */
    public function queryDeviceOriginalPropertyDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return QueryDeviceOriginalPropertyDataResponse::fromMap($this->doRequest('QueryDeviceOriginalPropertyData', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param QueryDeviceOriginalPropertyDataRequest $request
     *
     * @return QueryDeviceOriginalPropertyDataResponse
     */
    public function queryDeviceOriginalPropertyData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDeviceOriginalPropertyDataWithOptions($request, $runtime);
    }

    /**
     * @param QueryDeviceOriginalPropertyStatusRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return QueryDeviceOriginalPropertyStatusResponse
     */
    public function queryDeviceOriginalPropertyStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return QueryDeviceOriginalPropertyStatusResponse::fromMap($this->doRequest('QueryDeviceOriginalPropertyStatus', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param QueryDeviceOriginalPropertyStatusRequest $request
     *
     * @return QueryDeviceOriginalPropertyStatusResponse
     */
    public function queryDeviceOriginalPropertyStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDeviceOriginalPropertyStatusWithOptions($request, $runtime);
    }

    /**
     * @param QueryDeviceOriginalServiceDataRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return QueryDeviceOriginalServiceDataResponse
     */
    public function queryDeviceOriginalServiceDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return QueryDeviceOriginalServiceDataResponse::fromMap($this->doRequest('QueryDeviceOriginalServiceData', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param QueryDeviceOriginalServiceDataRequest $request
     *
     * @return QueryDeviceOriginalServiceDataResponse
     */
    public function queryDeviceOriginalServiceData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDeviceOriginalServiceDataWithOptions($request, $runtime);
    }

    /**
     * @param QueryDevicePropRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return QueryDevicePropResponse
     */
    public function queryDevicePropWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return QueryDevicePropResponse::fromMap($this->doRequest('QueryDeviceProp', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param QueryDevicePropRequest $request
     *
     * @return QueryDevicePropResponse
     */
    public function queryDeviceProp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDevicePropWithOptions($request, $runtime);
    }

    /**
     * @param QueryDevicePropertiesDataRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return QueryDevicePropertiesDataResponse
     */
    public function queryDevicePropertiesDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return QueryDevicePropertiesDataResponse::fromMap($this->doRequest('QueryDevicePropertiesData', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param QueryDevicePropertiesDataRequest $request
     *
     * @return QueryDevicePropertiesDataResponse
     */
    public function queryDevicePropertiesData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDevicePropertiesDataWithOptions($request, $runtime);
    }

    /**
     * @param QueryDevicePropertyDataRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return QueryDevicePropertyDataResponse
     */
    public function queryDevicePropertyDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return QueryDevicePropertyDataResponse::fromMap($this->doRequest('QueryDevicePropertyData', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param QueryDevicePropertyDataRequest $request
     *
     * @return QueryDevicePropertyDataResponse
     */
    public function queryDevicePropertyData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDevicePropertyDataWithOptions($request, $runtime);
    }

    /**
     * @param QueryDevicePropertyStatusRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return QueryDevicePropertyStatusResponse
     */
    public function queryDevicePropertyStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return QueryDevicePropertyStatusResponse::fromMap($this->doRequest('QueryDevicePropertyStatus', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param QueryDevicePropertyStatusRequest $request
     *
     * @return QueryDevicePropertyStatusResponse
     */
    public function queryDevicePropertyStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDevicePropertyStatusWithOptions($request, $runtime);
    }

    /**
     * @param QueryDeviceServiceDataRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return QueryDeviceServiceDataResponse
     */
    public function queryDeviceServiceDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return QueryDeviceServiceDataResponse::fromMap($this->doRequest('QueryDeviceServiceData', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param QueryDeviceServiceDataRequest $request
     *
     * @return QueryDeviceServiceDataResponse
     */
    public function queryDeviceServiceData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDeviceServiceDataWithOptions($request, $runtime);
    }

    /**
     * @param QueryDeviceSpeechRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return QueryDeviceSpeechResponse
     */
    public function queryDeviceSpeechWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return QueryDeviceSpeechResponse::fromMap($this->doRequest('QueryDeviceSpeech', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param QueryDeviceSpeechRequest $request
     *
     * @return QueryDeviceSpeechResponse
     */
    public function queryDeviceSpeech($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDeviceSpeechWithOptions($request, $runtime);
    }

    /**
     * @param QueryDeviceStatisticsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return QueryDeviceStatisticsResponse
     */
    public function queryDeviceStatisticsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return QueryDeviceStatisticsResponse::fromMap($this->doRequest('QueryDeviceStatistics', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param QueryDeviceStatisticsRequest $request
     *
     * @return QueryDeviceStatisticsResponse
     */
    public function queryDeviceStatistics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDeviceStatisticsWithOptions($request, $runtime);
    }

    /**
     * @param QueryDeviceSubTopicRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return QueryDeviceSubTopicResponse
     */
    public function queryDeviceSubTopicWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return QueryDeviceSubTopicResponse::fromMap($this->doRequest('QueryDeviceSubTopic', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param QueryDeviceSubTopicRequest $request
     *
     * @return QueryDeviceSubTopicResponse
     */
    public function queryDeviceSubTopic($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDeviceSubTopicWithOptions($request, $runtime);
    }

    /**
     * @param QueryDeviceTunnelRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return QueryDeviceTunnelResponse
     */
    public function queryDeviceTunnelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return QueryDeviceTunnelResponse::fromMap($this->doRequest('QueryDeviceTunnel', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param QueryDeviceTunnelRequest $request
     *
     * @return QueryDeviceTunnelResponse
     */
    public function queryDeviceTunnel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDeviceTunnelWithOptions($request, $runtime);
    }

    /**
     * @param QueryDevicesHotStorageDataRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return QueryDevicesHotStorageDataResponse
     */
    public function queryDevicesHotStorageDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return QueryDevicesHotStorageDataResponse::fromMap($this->doRequest('QueryDevicesHotStorageData', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param QueryDevicesHotStorageDataRequest $request
     *
     * @return QueryDevicesHotStorageDataResponse
     */
    public function queryDevicesHotStorageData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDevicesHotStorageDataWithOptions($request, $runtime);
    }

    /**
     * @param QueryDevicesHotStorageDataStatusRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return QueryDevicesHotStorageDataStatusResponse
     */
    public function queryDevicesHotStorageDataStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return QueryDevicesHotStorageDataStatusResponse::fromMap($this->doRequest('QueryDevicesHotStorageDataStatus', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param QueryDevicesHotStorageDataStatusRequest $request
     *
     * @return QueryDevicesHotStorageDataStatusResponse
     */
    public function queryDevicesHotStorageDataStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDevicesHotStorageDataStatusWithOptions($request, $runtime);
    }

    /**
     * @param QueryDynamicGroupDevicesRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return QueryDynamicGroupDevicesResponse
     */
    public function queryDynamicGroupDevicesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return QueryDynamicGroupDevicesResponse::fromMap($this->doRequest('QueryDynamicGroupDevices', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param QueryDynamicGroupDevicesRequest $request
     *
     * @return QueryDynamicGroupDevicesResponse
     */
    public function queryDynamicGroupDevices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDynamicGroupDevicesWithOptions($request, $runtime);
    }

    /**
     * @param QueryEdgeDriverRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return QueryEdgeDriverResponse
     */
    public function queryEdgeDriverWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return QueryEdgeDriverResponse::fromMap($this->doRequest('QueryEdgeDriver', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param QueryEdgeDriverRequest $request
     *
     * @return QueryEdgeDriverResponse
     */
    public function queryEdgeDriver($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryEdgeDriverWithOptions($request, $runtime);
    }

    /**
     * @param QueryEdgeDriverVersionRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return QueryEdgeDriverVersionResponse
     */
    public function queryEdgeDriverVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return QueryEdgeDriverVersionResponse::fromMap($this->doRequest('QueryEdgeDriverVersion', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param QueryEdgeDriverVersionRequest $request
     *
     * @return QueryEdgeDriverVersionResponse
     */
    public function queryEdgeDriverVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryEdgeDriverVersionWithOptions($request, $runtime);
    }

    /**
     * @param QueryEdgeInstanceRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return QueryEdgeInstanceResponse
     */
    public function queryEdgeInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return QueryEdgeInstanceResponse::fromMap($this->doRequest('QueryEdgeInstance', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param QueryEdgeInstanceRequest $request
     *
     * @return QueryEdgeInstanceResponse
     */
    public function queryEdgeInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryEdgeInstanceWithOptions($request, $runtime);
    }

    /**
     * @param QueryEdgeInstanceChannelRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return QueryEdgeInstanceChannelResponse
     */
    public function queryEdgeInstanceChannelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return QueryEdgeInstanceChannelResponse::fromMap($this->doRequest('QueryEdgeInstanceChannel', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param QueryEdgeInstanceChannelRequest $request
     *
     * @return QueryEdgeInstanceChannelResponse
     */
    public function queryEdgeInstanceChannel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryEdgeInstanceChannelWithOptions($request, $runtime);
    }

    /**
     * @param QueryEdgeInstanceDeviceRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return QueryEdgeInstanceDeviceResponse
     */
    public function queryEdgeInstanceDeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return QueryEdgeInstanceDeviceResponse::fromMap($this->doRequest('QueryEdgeInstanceDevice', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param QueryEdgeInstanceDeviceRequest $request
     *
     * @return QueryEdgeInstanceDeviceResponse
     */
    public function queryEdgeInstanceDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryEdgeInstanceDeviceWithOptions($request, $runtime);
    }

    /**
     * @param QueryEdgeInstanceDeviceByDriverRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return QueryEdgeInstanceDeviceByDriverResponse
     */
    public function queryEdgeInstanceDeviceByDriverWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return QueryEdgeInstanceDeviceByDriverResponse::fromMap($this->doRequest('QueryEdgeInstanceDeviceByDriver', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param QueryEdgeInstanceDeviceByDriverRequest $request
     *
     * @return QueryEdgeInstanceDeviceByDriverResponse
     */
    public function queryEdgeInstanceDeviceByDriver($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryEdgeInstanceDeviceByDriverWithOptions($request, $runtime);
    }

    /**
     * @param QueryEdgeInstanceDriverRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return QueryEdgeInstanceDriverResponse
     */
    public function queryEdgeInstanceDriverWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return QueryEdgeInstanceDriverResponse::fromMap($this->doRequest('QueryEdgeInstanceDriver', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param QueryEdgeInstanceDriverRequest $request
     *
     * @return QueryEdgeInstanceDriverResponse
     */
    public function queryEdgeInstanceDriver($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryEdgeInstanceDriverWithOptions($request, $runtime);
    }

    /**
     * @param QueryEdgeInstanceGatewayRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return QueryEdgeInstanceGatewayResponse
     */
    public function queryEdgeInstanceGatewayWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return QueryEdgeInstanceGatewayResponse::fromMap($this->doRequest('QueryEdgeInstanceGateway', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param QueryEdgeInstanceGatewayRequest $request
     *
     * @return QueryEdgeInstanceGatewayResponse
     */
    public function queryEdgeInstanceGateway($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryEdgeInstanceGatewayWithOptions($request, $runtime);
    }

    /**
     * @param QueryEdgeInstanceHistoricDeploymentRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return QueryEdgeInstanceHistoricDeploymentResponse
     */
    public function queryEdgeInstanceHistoricDeploymentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return QueryEdgeInstanceHistoricDeploymentResponse::fromMap($this->doRequest('QueryEdgeInstanceHistoricDeployment', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param QueryEdgeInstanceHistoricDeploymentRequest $request
     *
     * @return QueryEdgeInstanceHistoricDeploymentResponse
     */
    public function queryEdgeInstanceHistoricDeployment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryEdgeInstanceHistoricDeploymentWithOptions($request, $runtime);
    }

    /**
     * @param QueryEdgeInstanceMessageRoutingRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return QueryEdgeInstanceMessageRoutingResponse
     */
    public function queryEdgeInstanceMessageRoutingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return QueryEdgeInstanceMessageRoutingResponse::fromMap($this->doRequest('QueryEdgeInstanceMessageRouting', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param QueryEdgeInstanceMessageRoutingRequest $request
     *
     * @return QueryEdgeInstanceMessageRoutingResponse
     */
    public function queryEdgeInstanceMessageRouting($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryEdgeInstanceMessageRoutingWithOptions($request, $runtime);
    }

    /**
     * @param QueryEdgeInstanceSceneRuleRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return QueryEdgeInstanceSceneRuleResponse
     */
    public function queryEdgeInstanceSceneRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return QueryEdgeInstanceSceneRuleResponse::fromMap($this->doRequest('QueryEdgeInstanceSceneRule', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param QueryEdgeInstanceSceneRuleRequest $request
     *
     * @return QueryEdgeInstanceSceneRuleResponse
     */
    public function queryEdgeInstanceSceneRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryEdgeInstanceSceneRuleWithOptions($request, $runtime);
    }

    /**
     * @param QueryImportedDeviceByApplyIdRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return QueryImportedDeviceByApplyIdResponse
     */
    public function queryImportedDeviceByApplyIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return QueryImportedDeviceByApplyIdResponse::fromMap($this->doRequest('QueryImportedDeviceByApplyId', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param QueryImportedDeviceByApplyIdRequest $request
     *
     * @return QueryImportedDeviceByApplyIdResponse
     */
    public function queryImportedDeviceByApplyId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryImportedDeviceByApplyIdWithOptions($request, $runtime);
    }

    /**
     * @param QueryJobRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return QueryJobResponse
     */
    public function queryJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return QueryJobResponse::fromMap($this->doRequest('QueryJob', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param QueryJobRequest $request
     *
     * @return QueryJobResponse
     */
    public function queryJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryJobWithOptions($request, $runtime);
    }

    /**
     * @param QueryJobStatisticsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return QueryJobStatisticsResponse
     */
    public function queryJobStatisticsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return QueryJobStatisticsResponse::fromMap($this->doRequest('QueryJobStatistics', 'HTTPS', 'GET', '2018-01-20', 'AK', Tea::merge($request), null, $runtime));
    }

    /**
     * @param QueryJobStatisticsRequest $request
     *
     * @return QueryJobStatisticsResponse
     */
    public function queryJobStatistics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryJobStatisticsWithOptions($request, $runtime);
    }

    /**
     * @param QueryLicenseDeviceListRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return QueryLicenseDeviceListResponse
     */
    public function queryLicenseDeviceListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return QueryLicenseDeviceListResponse::fromMap($this->doRequest('QueryLicenseDeviceList', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param QueryLicenseDeviceListRequest $request
     *
     * @return QueryLicenseDeviceListResponse
     */
    public function queryLicenseDeviceList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryLicenseDeviceListWithOptions($request, $runtime);
    }

    /**
     * @param QueryLoRaJoinPermissionsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return QueryLoRaJoinPermissionsResponse
     */
    public function queryLoRaJoinPermissionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return QueryLoRaJoinPermissionsResponse::fromMap($this->doRequest('QueryLoRaJoinPermissions', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param QueryLoRaJoinPermissionsRequest $request
     *
     * @return QueryLoRaJoinPermissionsResponse
     */
    public function queryLoRaJoinPermissions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryLoRaJoinPermissionsWithOptions($request, $runtime);
    }

    /**
     * @param QueryMessageInfoRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return QueryMessageInfoResponse
     */
    public function queryMessageInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return QueryMessageInfoResponse::fromMap($this->doRequest('QueryMessageInfo', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param QueryMessageInfoRequest $request
     *
     * @return QueryMessageInfoResponse
     */
    public function queryMessageInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryMessageInfoWithOptions($request, $runtime);
    }

    /**
     * @param QueryOTAFirmwareRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return QueryOTAFirmwareResponse
     */
    public function queryOTAFirmwareWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return QueryOTAFirmwareResponse::fromMap($this->doRequest('QueryOTAFirmware', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param QueryOTAFirmwareRequest $request
     *
     * @return QueryOTAFirmwareResponse
     */
    public function queryOTAFirmware($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryOTAFirmwareWithOptions($request, $runtime);
    }

    /**
     * @param QueryOTAJobRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return QueryOTAJobResponse
     */
    public function queryOTAJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return QueryOTAJobResponse::fromMap($this->doRequest('QueryOTAJob', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param QueryOTAJobRequest $request
     *
     * @return QueryOTAJobResponse
     */
    public function queryOTAJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryOTAJobWithOptions($request, $runtime);
    }

    /**
     * @param QueryPageByApplyIdRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return QueryPageByApplyIdResponse
     */
    public function queryPageByApplyIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return QueryPageByApplyIdResponse::fromMap($this->doRequest('QueryPageByApplyId', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param QueryPageByApplyIdRequest $request
     *
     * @return QueryPageByApplyIdResponse
     */
    public function queryPageByApplyId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryPageByApplyIdWithOptions($request, $runtime);
    }

    /**
     * @param QueryProductRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return QueryProductResponse
     */
    public function queryProductWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return QueryProductResponse::fromMap($this->doRequest('QueryProduct', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param QueryProductRequest $request
     *
     * @return QueryProductResponse
     */
    public function queryProduct($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryProductWithOptions($request, $runtime);
    }

    /**
     * @param QueryProductCertInfoRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return QueryProductCertInfoResponse
     */
    public function queryProductCertInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return QueryProductCertInfoResponse::fromMap($this->doRequest('QueryProductCertInfo', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param QueryProductCertInfoRequest $request
     *
     * @return QueryProductCertInfoResponse
     */
    public function queryProductCertInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryProductCertInfoWithOptions($request, $runtime);
    }

    /**
     * @param QueryProductListRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return QueryProductListResponse
     */
    public function queryProductListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return QueryProductListResponse::fromMap($this->doRequest('QueryProductList', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param QueryProductListRequest $request
     *
     * @return QueryProductListResponse
     */
    public function queryProductList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryProductListWithOptions($request, $runtime);
    }

    /**
     * @param QueryProductTopicRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return QueryProductTopicResponse
     */
    public function queryProductTopicWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return QueryProductTopicResponse::fromMap($this->doRequest('QueryProductTopic', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param QueryProductTopicRequest $request
     *
     * @return QueryProductTopicResponse
     */
    public function queryProductTopic($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryProductTopicWithOptions($request, $runtime);
    }

    /**
     * @param QueryProjectShareDeviceListRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return QueryProjectShareDeviceListResponse
     */
    public function queryProjectShareDeviceListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return QueryProjectShareDeviceListResponse::fromMap($this->doRequest('QueryProjectShareDeviceList', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param QueryProjectShareDeviceListRequest $request
     *
     * @return QueryProjectShareDeviceListResponse
     */
    public function queryProjectShareDeviceList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryProjectShareDeviceListWithOptions($request, $runtime);
    }

    /**
     * @param QuerySceneRuleRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return QuerySceneRuleResponse
     */
    public function querySceneRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return QuerySceneRuleResponse::fromMap($this->doRequest('QuerySceneRule', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param QuerySceneRuleRequest $request
     *
     * @return QuerySceneRuleResponse
     */
    public function querySceneRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySceneRuleWithOptions($request, $runtime);
    }

    /**
     * @param QuerySchedulePeriodListRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return QuerySchedulePeriodListResponse
     */
    public function querySchedulePeriodListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return QuerySchedulePeriodListResponse::fromMap($this->doRequest('QuerySchedulePeriodList', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param QuerySchedulePeriodListRequest $request
     *
     * @return QuerySchedulePeriodListResponse
     */
    public function querySchedulePeriodList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySchedulePeriodListWithOptions($request, $runtime);
    }

    /**
     * @param QueryShareTaskDeviceListRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return QueryShareTaskDeviceListResponse
     */
    public function queryShareTaskDeviceListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return QueryShareTaskDeviceListResponse::fromMap($this->doRequest('QueryShareTaskDeviceList', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param QueryShareTaskDeviceListRequest $request
     *
     * @return QueryShareTaskDeviceListResponse
     */
    public function queryShareTaskDeviceList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryShareTaskDeviceListWithOptions($request, $runtime);
    }

    /**
     * @param QuerySolutionDeviceGroupPageRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return QuerySolutionDeviceGroupPageResponse
     */
    public function querySolutionDeviceGroupPageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return QuerySolutionDeviceGroupPageResponse::fromMap($this->doRequest('QuerySolutionDeviceGroupPage', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param QuerySolutionDeviceGroupPageRequest $request
     *
     * @return QuerySolutionDeviceGroupPageResponse
     */
    public function querySolutionDeviceGroupPage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySolutionDeviceGroupPageWithOptions($request, $runtime);
    }

    /**
     * @param QuerySoundCodeLabelBatchFailedResultRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return QuerySoundCodeLabelBatchFailedResultResponse
     */
    public function querySoundCodeLabelBatchFailedResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return QuerySoundCodeLabelBatchFailedResultResponse::fromMap($this->doRequest('QuerySoundCodeLabelBatchFailedResult', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param QuerySoundCodeLabelBatchFailedResultRequest $request
     *
     * @return QuerySoundCodeLabelBatchFailedResultResponse
     */
    public function querySoundCodeLabelBatchFailedResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySoundCodeLabelBatchFailedResultWithOptions($request, $runtime);
    }

    /**
     * @param QuerySoundCodeLabelBatchListRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return QuerySoundCodeLabelBatchListResponse
     */
    public function querySoundCodeLabelBatchListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return QuerySoundCodeLabelBatchListResponse::fromMap($this->doRequest('QuerySoundCodeLabelBatchList', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param QuerySoundCodeLabelBatchListRequest $request
     *
     * @return QuerySoundCodeLabelBatchListResponse
     */
    public function querySoundCodeLabelBatchList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySoundCodeLabelBatchListWithOptions($request, $runtime);
    }

    /**
     * @param QuerySoundCodeLabelListRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return QuerySoundCodeLabelListResponse
     */
    public function querySoundCodeLabelListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return QuerySoundCodeLabelListResponse::fromMap($this->doRequest('QuerySoundCodeLabelList', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param QuerySoundCodeLabelListRequest $request
     *
     * @return QuerySoundCodeLabelListResponse
     */
    public function querySoundCodeLabelList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySoundCodeLabelListWithOptions($request, $runtime);
    }

    /**
     * @param QuerySoundCodeListRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return QuerySoundCodeListResponse
     */
    public function querySoundCodeListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return QuerySoundCodeListResponse::fromMap($this->doRequest('QuerySoundCodeList', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param QuerySoundCodeListRequest $request
     *
     * @return QuerySoundCodeListResponse
     */
    public function querySoundCodeList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySoundCodeListWithOptions($request, $runtime);
    }

    /**
     * @param QuerySoundCodeScheduleListRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return QuerySoundCodeScheduleListResponse
     */
    public function querySoundCodeScheduleListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return QuerySoundCodeScheduleListResponse::fromMap($this->doRequest('QuerySoundCodeScheduleList', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param QuerySoundCodeScheduleListRequest $request
     *
     * @return QuerySoundCodeScheduleListResponse
     */
    public function querySoundCodeScheduleList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySoundCodeScheduleListWithOptions($request, $runtime);
    }

    /**
     * @param QuerySpeechRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return QuerySpeechResponse
     */
    public function querySpeechWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return QuerySpeechResponse::fromMap($this->doRequest('QuerySpeech', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param QuerySpeechRequest $request
     *
     * @return QuerySpeechResponse
     */
    public function querySpeech($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySpeechWithOptions($request, $runtime);
    }

    /**
     * @param QuerySpeechDeviceRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return QuerySpeechDeviceResponse
     */
    public function querySpeechDeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return QuerySpeechDeviceResponse::fromMap($this->doRequest('QuerySpeechDevice', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param QuerySpeechDeviceRequest $request
     *
     * @return QuerySpeechDeviceResponse
     */
    public function querySpeechDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySpeechDeviceWithOptions($request, $runtime);
    }

    /**
     * @param QuerySpeechLicenseDeviceListRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return QuerySpeechLicenseDeviceListResponse
     */
    public function querySpeechLicenseDeviceListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return QuerySpeechLicenseDeviceListResponse::fromMap($this->doRequest('QuerySpeechLicenseDeviceList', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param QuerySpeechLicenseDeviceListRequest $request
     *
     * @return QuerySpeechLicenseDeviceListResponse
     */
    public function querySpeechLicenseDeviceList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySpeechLicenseDeviceListWithOptions($request, $runtime);
    }

    /**
     * @param QuerySpeechListRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return QuerySpeechListResponse
     */
    public function querySpeechListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return QuerySpeechListResponse::fromMap($this->doRequest('QuerySpeechList', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param QuerySpeechListRequest $request
     *
     * @return QuerySpeechListResponse
     */
    public function querySpeechList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySpeechListWithOptions($request, $runtime);
    }

    /**
     * @param QuerySpeechPushJobRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return QuerySpeechPushJobResponse
     */
    public function querySpeechPushJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return QuerySpeechPushJobResponse::fromMap($this->doRequest('QuerySpeechPushJob', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param QuerySpeechPushJobRequest $request
     *
     * @return QuerySpeechPushJobResponse
     */
    public function querySpeechPushJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySpeechPushJobWithOptions($request, $runtime);
    }

    /**
     * @param QuerySpeechPushJobDeviceRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return QuerySpeechPushJobDeviceResponse
     */
    public function querySpeechPushJobDeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return QuerySpeechPushJobDeviceResponse::fromMap($this->doRequest('QuerySpeechPushJobDevice', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param QuerySpeechPushJobDeviceRequest $request
     *
     * @return QuerySpeechPushJobDeviceResponse
     */
    public function querySpeechPushJobDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySpeechPushJobDeviceWithOptions($request, $runtime);
    }

    /**
     * @param QuerySpeechPushJobSpeechRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return QuerySpeechPushJobSpeechResponse
     */
    public function querySpeechPushJobSpeechWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return QuerySpeechPushJobSpeechResponse::fromMap($this->doRequest('QuerySpeechPushJobSpeech', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param QuerySpeechPushJobSpeechRequest $request
     *
     * @return QuerySpeechPushJobSpeechResponse
     */
    public function querySpeechPushJobSpeech($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySpeechPushJobSpeechWithOptions($request, $runtime);
    }

    /**
     * @param QueryStudioAppDomainListOpenRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return QueryStudioAppDomainListOpenResponse
     */
    public function queryStudioAppDomainListOpenWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return QueryStudioAppDomainListOpenResponse::fromMap($this->doRequest('QueryStudioAppDomainListOpen', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param QueryStudioAppDomainListOpenRequest $request
     *
     * @return QueryStudioAppDomainListOpenResponse
     */
    public function queryStudioAppDomainListOpen($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryStudioAppDomainListOpenWithOptions($request, $runtime);
    }

    /**
     * @param QueryStudioAppListRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return QueryStudioAppListResponse
     */
    public function queryStudioAppListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return QueryStudioAppListResponse::fromMap($this->doRequest('QueryStudioAppList', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param QueryStudioAppListRequest $request
     *
     * @return QueryStudioAppListResponse
     */
    public function queryStudioAppList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryStudioAppListWithOptions($request, $runtime);
    }

    /**
     * @param QueryStudioAppPageListOpenRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return QueryStudioAppPageListOpenResponse
     */
    public function queryStudioAppPageListOpenWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return QueryStudioAppPageListOpenResponse::fromMap($this->doRequest('QueryStudioAppPageListOpen', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param QueryStudioAppPageListOpenRequest $request
     *
     * @return QueryStudioAppPageListOpenResponse
     */
    public function queryStudioAppPageListOpen($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryStudioAppPageListOpenWithOptions($request, $runtime);
    }

    /**
     * @param QueryStudioProjectListRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return QueryStudioProjectListResponse
     */
    public function queryStudioProjectListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return QueryStudioProjectListResponse::fromMap($this->doRequest('QueryStudioProjectList', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param QueryStudioProjectListRequest $request
     *
     * @return QueryStudioProjectListResponse
     */
    public function queryStudioProjectList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryStudioProjectListWithOptions($request, $runtime);
    }

    /**
     * @param QuerySubscribeRelationRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return QuerySubscribeRelationResponse
     */
    public function querySubscribeRelationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return QuerySubscribeRelationResponse::fromMap($this->doRequest('QuerySubscribeRelation', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param QuerySubscribeRelationRequest $request
     *
     * @return QuerySubscribeRelationResponse
     */
    public function querySubscribeRelation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySubscribeRelationWithOptions($request, $runtime);
    }

    /**
     * @param QuerySummarySceneRuleLogRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return QuerySummarySceneRuleLogResponse
     */
    public function querySummarySceneRuleLogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return QuerySummarySceneRuleLogResponse::fromMap($this->doRequest('QuerySummarySceneRuleLog', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param QuerySummarySceneRuleLogRequest $request
     *
     * @return QuerySummarySceneRuleLogResponse
     */
    public function querySummarySceneRuleLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySummarySceneRuleLogWithOptions($request, $runtime);
    }

    /**
     * @param QuerySuperDeviceGroupRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return QuerySuperDeviceGroupResponse
     */
    public function querySuperDeviceGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return QuerySuperDeviceGroupResponse::fromMap($this->doRequest('QuerySuperDeviceGroup', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param QuerySuperDeviceGroupRequest $request
     *
     * @return QuerySuperDeviceGroupResponse
     */
    public function querySuperDeviceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySuperDeviceGroupWithOptions($request, $runtime);
    }

    /**
     * @param QueryTaskRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return QueryTaskResponse
     */
    public function queryTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return QueryTaskResponse::fromMap($this->doRequest('QueryTask', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param QueryTaskRequest $request
     *
     * @return QueryTaskResponse
     */
    public function queryTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryTaskWithOptions($request, $runtime);
    }

    /**
     * @param QueryThingModelRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return QueryThingModelResponse
     */
    public function queryThingModelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return QueryThingModelResponse::fromMap($this->doRequest('QueryThingModel', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param QueryThingModelRequest $request
     *
     * @return QueryThingModelResponse
     */
    public function queryThingModel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryThingModelWithOptions($request, $runtime);
    }

    /**
     * @param QueryThingModelExtendConfigRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return QueryThingModelExtendConfigResponse
     */
    public function queryThingModelExtendConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return QueryThingModelExtendConfigResponse::fromMap($this->doRequest('QueryThingModelExtendConfig', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param QueryThingModelExtendConfigRequest $request
     *
     * @return QueryThingModelExtendConfigResponse
     */
    public function queryThingModelExtendConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryThingModelExtendConfigWithOptions($request, $runtime);
    }

    /**
     * @param QueryThingModelExtendConfigPublishedRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return QueryThingModelExtendConfigPublishedResponse
     */
    public function queryThingModelExtendConfigPublishedWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return QueryThingModelExtendConfigPublishedResponse::fromMap($this->doRequest('QueryThingModelExtendConfigPublished', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param QueryThingModelExtendConfigPublishedRequest $request
     *
     * @return QueryThingModelExtendConfigPublishedResponse
     */
    public function queryThingModelExtendConfigPublished($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryThingModelExtendConfigPublishedWithOptions($request, $runtime);
    }

    /**
     * @param QueryThingModelPublishedRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return QueryThingModelPublishedResponse
     */
    public function queryThingModelPublishedWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return QueryThingModelPublishedResponse::fromMap($this->doRequest('QueryThingModelPublished', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param QueryThingModelPublishedRequest $request
     *
     * @return QueryThingModelPublishedResponse
     */
    public function queryThingModelPublished($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryThingModelPublishedWithOptions($request, $runtime);
    }

    /**
     * @param QueryTopicReverseRouteTableRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return QueryTopicReverseRouteTableResponse
     */
    public function queryTopicReverseRouteTableWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return QueryTopicReverseRouteTableResponse::fromMap($this->doRequest('QueryTopicReverseRouteTable', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param QueryTopicReverseRouteTableRequest $request
     *
     * @return QueryTopicReverseRouteTableResponse
     */
    public function queryTopicReverseRouteTable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryTopicReverseRouteTableWithOptions($request, $runtime);
    }

    /**
     * @param QueryTopicRouteTableRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return QueryTopicRouteTableResponse
     */
    public function queryTopicRouteTableWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return QueryTopicRouteTableResponse::fromMap($this->doRequest('QueryTopicRouteTable', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param QueryTopicRouteTableRequest $request
     *
     * @return QueryTopicRouteTableResponse
     */
    public function queryTopicRouteTable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryTopicRouteTableWithOptions($request, $runtime);
    }

    /**
     * @param QueryVehicleDeviceRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return QueryVehicleDeviceResponse
     */
    public function queryVehicleDeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return QueryVehicleDeviceResponse::fromMap($this->doRequest('QueryVehicleDevice', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param QueryVehicleDeviceRequest $request
     *
     * @return QueryVehicleDeviceResponse
     */
    public function queryVehicleDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryVehicleDeviceWithOptions($request, $runtime);
    }

    /**
     * @param RRpcRequest    $request
     * @param RuntimeOptions $runtime
     *
     * @return RRpcResponse
     */
    public function RRpcWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return RRpcResponse::fromMap($this->doRequest('RRpc', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param RRpcRequest $request
     *
     * @return RRpcResponse
     */
    public function RRpc($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->RRpcWithOptions($request, $runtime);
    }

    /**
     * @param ReBindLicenseDeviceRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ReBindLicenseDeviceResponse
     */
    public function reBindLicenseDeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ReBindLicenseDeviceResponse::fromMap($this->doRequest('ReBindLicenseDevice', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ReBindLicenseDeviceRequest $request
     *
     * @return ReBindLicenseDeviceResponse
     */
    public function reBindLicenseDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->reBindLicenseDeviceWithOptions($request, $runtime);
    }

    /**
     * @param RecognizeCarNumRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return RecognizeCarNumResponse
     */
    public function recognizeCarNumWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return RecognizeCarNumResponse::fromMap($this->doRequest('RecognizeCarNum', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param RecognizeCarNumRequest $request
     *
     * @return RecognizeCarNumResponse
     */
    public function recognizeCarNum($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeCarNumWithOptions($request, $runtime);
    }

    /**
     * @param RecognizePictureGeneralRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return RecognizePictureGeneralResponse
     */
    public function recognizePictureGeneralWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return RecognizePictureGeneralResponse::fromMap($this->doRequest('RecognizePictureGeneral', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param RecognizePictureGeneralRequest $request
     *
     * @return RecognizePictureGeneralResponse
     */
    public function recognizePictureGeneral($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizePictureGeneralWithOptions($request, $runtime);
    }

    /**
     * @param RefreshDeviceTunnelSharePasswordRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return RefreshDeviceTunnelSharePasswordResponse
     */
    public function refreshDeviceTunnelSharePasswordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return RefreshDeviceTunnelSharePasswordResponse::fromMap($this->doRequest('RefreshDeviceTunnelSharePassword', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param RefreshDeviceTunnelSharePasswordRequest $request
     *
     * @return RefreshDeviceTunnelSharePasswordResponse
     */
    public function refreshDeviceTunnelSharePassword($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->refreshDeviceTunnelSharePasswordWithOptions($request, $runtime);
    }

    /**
     * @param RefreshStudioAppTokenOpenRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return RefreshStudioAppTokenOpenResponse
     */
    public function refreshStudioAppTokenOpenWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return RefreshStudioAppTokenOpenResponse::fromMap($this->doRequest('RefreshStudioAppTokenOpen', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param RefreshStudioAppTokenOpenRequest $request
     *
     * @return RefreshStudioAppTokenOpenResponse
     */
    public function refreshStudioAppTokenOpen($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->refreshStudioAppTokenOpenWithOptions($request, $runtime);
    }

    /**
     * @param RegisterDeviceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return RegisterDeviceResponse
     */
    public function registerDeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return RegisterDeviceResponse::fromMap($this->doRequest('RegisterDevice', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param RegisterDeviceRequest $request
     *
     * @return RegisterDeviceResponse
     */
    public function registerDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->registerDeviceWithOptions($request, $runtime);
    }

    /**
     * @param ReleaseEdgeDriverVersionRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ReleaseEdgeDriverVersionResponse
     */
    public function releaseEdgeDriverVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ReleaseEdgeDriverVersionResponse::fromMap($this->doRequest('ReleaseEdgeDriverVersion', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ReleaseEdgeDriverVersionRequest $request
     *
     * @return ReleaseEdgeDriverVersionResponse
     */
    public function releaseEdgeDriverVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->releaseEdgeDriverVersionWithOptions($request, $runtime);
    }

    /**
     * @param ReleaseProductRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ReleaseProductResponse
     */
    public function releaseProductWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ReleaseProductResponse::fromMap($this->doRequest('ReleaseProduct', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ReleaseProductRequest $request
     *
     * @return ReleaseProductResponse
     */
    public function releaseProduct($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->releaseProductWithOptions($request, $runtime);
    }

    /**
     * @param RemoveThingTopoRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return RemoveThingTopoResponse
     */
    public function removeThingTopoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return RemoveThingTopoResponse::fromMap($this->doRequest('RemoveThingTopo', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param RemoveThingTopoRequest $request
     *
     * @return RemoveThingTopoResponse
     */
    public function removeThingTopo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeThingTopoWithOptions($request, $runtime);
    }

    /**
     * @param ReplaceEdgeInstanceGatewayRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ReplaceEdgeInstanceGatewayResponse
     */
    public function replaceEdgeInstanceGatewayWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ReplaceEdgeInstanceGatewayResponse::fromMap($this->doRequest('ReplaceEdgeInstanceGateway', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ReplaceEdgeInstanceGatewayRequest $request
     *
     * @return ReplaceEdgeInstanceGatewayResponse
     */
    public function replaceEdgeInstanceGateway($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->replaceEdgeInstanceGatewayWithOptions($request, $runtime);
    }

    /**
     * @param RerunJobRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return RerunJobResponse
     */
    public function rerunJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return RerunJobResponse::fromMap($this->doRequest('RerunJob', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param RerunJobRequest $request
     *
     * @return RerunJobResponse
     */
    public function rerunJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->rerunJobWithOptions($request, $runtime);
    }

    /**
     * @param ResetConsumerGroupPositionRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ResetConsumerGroupPositionResponse
     */
    public function resetConsumerGroupPositionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ResetConsumerGroupPositionResponse::fromMap($this->doRequest('ResetConsumerGroupPosition', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ResetConsumerGroupPositionRequest $request
     *
     * @return ResetConsumerGroupPositionResponse
     */
    public function resetConsumerGroupPosition($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetConsumerGroupPositionWithOptions($request, $runtime);
    }

    /**
     * @param ResetThingRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ResetThingResponse
     */
    public function resetThingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ResetThingResponse::fromMap($this->doRequest('ResetThing', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ResetThingRequest $request
     *
     * @return ResetThingResponse
     */
    public function resetThing($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetThingWithOptions($request, $runtime);
    }

    /**
     * @param RetrySoundCodeLabelBatchRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return RetrySoundCodeLabelBatchResponse
     */
    public function retrySoundCodeLabelBatchWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return RetrySoundCodeLabelBatchResponse::fromMap($this->doRequest('RetrySoundCodeLabelBatch', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param RetrySoundCodeLabelBatchRequest $request
     *
     * @return RetrySoundCodeLabelBatchResponse
     */
    public function retrySoundCodeLabelBatch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->retrySoundCodeLabelBatchWithOptions($request, $runtime);
    }

    /**
     * @param ReupgradeOTATaskRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ReupgradeOTATaskResponse
     */
    public function reupgradeOTATaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ReupgradeOTATaskResponse::fromMap($this->doRequest('ReupgradeOTATask', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ReupgradeOTATaskRequest $request
     *
     * @return ReupgradeOTATaskResponse
     */
    public function reupgradeOTATask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->reupgradeOTATaskWithOptions($request, $runtime);
    }

    /**
     * @param SaveDevicePropRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return SaveDevicePropResponse
     */
    public function saveDevicePropWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return SaveDevicePropResponse::fromMap($this->doRequest('SaveDeviceProp', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param SaveDevicePropRequest $request
     *
     * @return SaveDevicePropResponse
     */
    public function saveDeviceProp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveDevicePropWithOptions($request, $runtime);
    }

    /**
     * @param SaveScriptRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return SaveScriptResponse
     */
    public function saveScriptWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return SaveScriptResponse::fromMap($this->doRequest('SaveScript', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param SaveScriptRequest $request
     *
     * @return SaveScriptResponse
     */
    public function saveScript($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveScriptWithOptions($request, $runtime);
    }

    /**
     * @param SetDeviceDesiredPropertyRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return SetDeviceDesiredPropertyResponse
     */
    public function setDeviceDesiredPropertyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return SetDeviceDesiredPropertyResponse::fromMap($this->doRequest('SetDeviceDesiredProperty', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param SetDeviceDesiredPropertyRequest $request
     *
     * @return SetDeviceDesiredPropertyResponse
     */
    public function setDeviceDesiredProperty($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setDeviceDesiredPropertyWithOptions($request, $runtime);
    }

    /**
     * @param SetDeviceGroupTagsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return SetDeviceGroupTagsResponse
     */
    public function setDeviceGroupTagsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return SetDeviceGroupTagsResponse::fromMap($this->doRequest('SetDeviceGroupTags', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param SetDeviceGroupTagsRequest $request
     *
     * @return SetDeviceGroupTagsResponse
     */
    public function setDeviceGroupTags($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setDeviceGroupTagsWithOptions($request, $runtime);
    }

    /**
     * @param SetDevicePropertyRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return SetDevicePropertyResponse
     */
    public function setDevicePropertyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return SetDevicePropertyResponse::fromMap($this->doRequest('SetDeviceProperty', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param SetDevicePropertyRequest $request
     *
     * @return SetDevicePropertyResponse
     */
    public function setDeviceProperty($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setDevicePropertyWithOptions($request, $runtime);
    }

    /**
     * @param SetDevicesPropertyRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return SetDevicesPropertyResponse
     */
    public function setDevicesPropertyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return SetDevicesPropertyResponse::fromMap($this->doRequest('SetDevicesProperty', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param SetDevicesPropertyRequest $request
     *
     * @return SetDevicesPropertyResponse
     */
    public function setDevicesProperty($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setDevicesPropertyWithOptions($request, $runtime);
    }

    /**
     * @param SetEdgeInstanceDriverConfigsRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return SetEdgeInstanceDriverConfigsResponse
     */
    public function setEdgeInstanceDriverConfigsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return SetEdgeInstanceDriverConfigsResponse::fromMap($this->doRequest('SetEdgeInstanceDriverConfigs', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param SetEdgeInstanceDriverConfigsRequest $request
     *
     * @return SetEdgeInstanceDriverConfigsResponse
     */
    public function setEdgeInstanceDriverConfigs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setEdgeInstanceDriverConfigsWithOptions($request, $runtime);
    }

    /**
     * @param SetProductCertInfoRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return SetProductCertInfoResponse
     */
    public function setProductCertInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return SetProductCertInfoResponse::fromMap($this->doRequest('SetProductCertInfo', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param SetProductCertInfoRequest $request
     *
     * @return SetProductCertInfoResponse
     */
    public function setProductCertInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setProductCertInfoWithOptions($request, $runtime);
    }

    /**
     * @param SetStudioProjectCooperationRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return SetStudioProjectCooperationResponse
     */
    public function setStudioProjectCooperationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return SetStudioProjectCooperationResponse::fromMap($this->doRequest('SetStudioProjectCooperation', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param SetStudioProjectCooperationRequest $request
     *
     * @return SetStudioProjectCooperationResponse
     */
    public function setStudioProjectCooperation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setStudioProjectCooperationWithOptions($request, $runtime);
    }

    /**
     * @param SetupStudioAppAuthModeOpenRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return SetupStudioAppAuthModeOpenResponse
     */
    public function setupStudioAppAuthModeOpenWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return SetupStudioAppAuthModeOpenResponse::fromMap($this->doRequest('SetupStudioAppAuthModeOpen', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param SetupStudioAppAuthModeOpenRequest $request
     *
     * @return SetupStudioAppAuthModeOpenResponse
     */
    public function setupStudioAppAuthModeOpen($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setupStudioAppAuthModeOpenWithOptions($request, $runtime);
    }

    /**
     * @param ShareSpeechByCombinationRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ShareSpeechByCombinationResponse
     */
    public function shareSpeechByCombinationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ShareSpeechByCombinationResponse::fromMap($this->doRequest('ShareSpeechByCombination', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ShareSpeechByCombinationRequest $request
     *
     * @return ShareSpeechByCombinationResponse
     */
    public function shareSpeechByCombination($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->shareSpeechByCombinationWithOptions($request, $runtime);
    }

    /**
     * @param SpeechByCombinationRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return SpeechByCombinationResponse
     */
    public function speechByCombinationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return SpeechByCombinationResponse::fromMap($this->doRequest('SpeechByCombination', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param SpeechByCombinationRequest $request
     *
     * @return SpeechByCombinationResponse
     */
    public function speechByCombination($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->speechByCombinationWithOptions($request, $runtime);
    }

    /**
     * @param SpeechBySynthesisRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return SpeechBySynthesisResponse
     */
    public function speechBySynthesisWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return SpeechBySynthesisResponse::fromMap($this->doRequest('SpeechBySynthesis', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param SpeechBySynthesisRequest $request
     *
     * @return SpeechBySynthesisResponse
     */
    public function speechBySynthesis($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->speechBySynthesisWithOptions($request, $runtime);
    }

    /**
     * @param StartParserRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return StartParserResponse
     */
    public function startParserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return StartParserResponse::fromMap($this->doRequest('StartParser', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param StartParserRequest $request
     *
     * @return StartParserResponse
     */
    public function startParser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startParserWithOptions($request, $runtime);
    }

    /**
     * @param StartRuleRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return StartRuleResponse
     */
    public function startRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return StartRuleResponse::fromMap($this->doRequest('StartRule', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param StartRuleRequest $request
     *
     * @return StartRuleResponse
     */
    public function startRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startRuleWithOptions($request, $runtime);
    }

    /**
     * @param StopParserRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return StopParserResponse
     */
    public function stopParserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return StopParserResponse::fromMap($this->doRequest('StopParser', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param StopParserRequest $request
     *
     * @return StopParserResponse
     */
    public function stopParser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopParserWithOptions($request, $runtime);
    }

    /**
     * @param StopRuleRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return StopRuleResponse
     */
    public function stopRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return StopRuleResponse::fromMap($this->doRequest('StopRule', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param StopRuleRequest $request
     *
     * @return StopRuleResponse
     */
    public function stopRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopRuleWithOptions($request, $runtime);
    }

    /**
     * @param SubscribeTopicRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return SubscribeTopicResponse
     */
    public function subscribeTopicWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return SubscribeTopicResponse::fromMap($this->doRequest('SubscribeTopic', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param SubscribeTopicRequest $request
     *
     * @return SubscribeTopicResponse
     */
    public function subscribeTopic($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->subscribeTopicWithOptions($request, $runtime);
    }

    /**
     * @param SyncSpeechByCombinationRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return SyncSpeechByCombinationResponse
     */
    public function syncSpeechByCombinationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return SyncSpeechByCombinationResponse::fromMap($this->doRequest('SyncSpeechByCombination', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param SyncSpeechByCombinationRequest $request
     *
     * @return SyncSpeechByCombinationResponse
     */
    public function syncSpeechByCombination($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->syncSpeechByCombinationWithOptions($request, $runtime);
    }

    /**
     * @param TestSpeechRequest $tmp
     * @param RuntimeOptions    $runtime
     *
     * @return TestSpeechResponse
     */
    public function testSpeechWithOptions($tmp, $runtime)
    {
        Utils::validateModel($tmp);
        $request = new TestSpeechShrinkRequest([]);
        RpcUtils::convert($tmp, $request);
        if (!Utils::isUnset($tmp->soundCodeConfig)) {
            $request->soundCodeConfigShrink = Utils::toJSONString($tmp->soundCodeConfig);
        }

        return TestSpeechResponse::fromMap($this->doRequest('TestSpeech', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param TestSpeechRequest $request
     *
     * @return TestSpeechResponse
     */
    public function testSpeech($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->testSpeechWithOptions($request, $runtime);
    }

    /**
     * @param TransformClientIdRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return TransformClientIdResponse
     */
    public function transformClientIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return TransformClientIdResponse::fromMap($this->doRequest('TransformClientId', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param TransformClientIdRequest $request
     *
     * @return TransformClientIdResponse
     */
    public function transformClientId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->transformClientIdWithOptions($request, $runtime);
    }

    /**
     * @param TriggerSceneRuleRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return TriggerSceneRuleResponse
     */
    public function triggerSceneRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return TriggerSceneRuleResponse::fromMap($this->doRequest('TriggerSceneRule', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param TriggerSceneRuleRequest $request
     *
     * @return TriggerSceneRuleResponse
     */
    public function triggerSceneRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->triggerSceneRuleWithOptions($request, $runtime);
    }

    /**
     * @param UnbindApplicationFromEdgeInstanceRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return UnbindApplicationFromEdgeInstanceResponse
     */
    public function unbindApplicationFromEdgeInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return UnbindApplicationFromEdgeInstanceResponse::fromMap($this->doRequest('UnbindApplicationFromEdgeInstance', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param UnbindApplicationFromEdgeInstanceRequest $request
     *
     * @return UnbindApplicationFromEdgeInstanceResponse
     */
    public function unbindApplicationFromEdgeInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unbindApplicationFromEdgeInstanceWithOptions($request, $runtime);
    }

    /**
     * @param UnbindDriverFromEdgeInstanceRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return UnbindDriverFromEdgeInstanceResponse
     */
    public function unbindDriverFromEdgeInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return UnbindDriverFromEdgeInstanceResponse::fromMap($this->doRequest('UnbindDriverFromEdgeInstance', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param UnbindDriverFromEdgeInstanceRequest $request
     *
     * @return UnbindDriverFromEdgeInstanceResponse
     */
    public function unbindDriverFromEdgeInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unbindDriverFromEdgeInstanceWithOptions($request, $runtime);
    }

    /**
     * @param UnbindLicenseProductRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return UnbindLicenseProductResponse
     */
    public function unbindLicenseProductWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return UnbindLicenseProductResponse::fromMap($this->doRequest('UnbindLicenseProduct', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param UnbindLicenseProductRequest $request
     *
     * @return UnbindLicenseProductResponse
     */
    public function unbindLicenseProduct($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unbindLicenseProductWithOptions($request, $runtime);
    }

    /**
     * @param UnbindRoleFromEdgeInstanceRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return UnbindRoleFromEdgeInstanceResponse
     */
    public function unbindRoleFromEdgeInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return UnbindRoleFromEdgeInstanceResponse::fromMap($this->doRequest('UnbindRoleFromEdgeInstance', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param UnbindRoleFromEdgeInstanceRequest $request
     *
     * @return UnbindRoleFromEdgeInstanceResponse
     */
    public function unbindRoleFromEdgeInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unbindRoleFromEdgeInstanceWithOptions($request, $runtime);
    }

    /**
     * @param UnbindSceneRuleFromEdgeInstanceRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return UnbindSceneRuleFromEdgeInstanceResponse
     */
    public function unbindSceneRuleFromEdgeInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return UnbindSceneRuleFromEdgeInstanceResponse::fromMap($this->doRequest('UnbindSceneRuleFromEdgeInstance', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param UnbindSceneRuleFromEdgeInstanceRequest $request
     *
     * @return UnbindSceneRuleFromEdgeInstanceResponse
     */
    public function unbindSceneRuleFromEdgeInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unbindSceneRuleFromEdgeInstanceWithOptions($request, $runtime);
    }

    /**
     * @param UpdateConsumerGroupRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateConsumerGroupResponse
     */
    public function updateConsumerGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return UpdateConsumerGroupResponse::fromMap($this->doRequest('UpdateConsumerGroup', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param UpdateConsumerGroupRequest $request
     *
     * @return UpdateConsumerGroupResponse
     */
    public function updateConsumerGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateConsumerGroupWithOptions($request, $runtime);
    }

    /**
     * @param UpdateDestinationRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateDestinationResponse
     */
    public function updateDestinationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return UpdateDestinationResponse::fromMap($this->doRequest('UpdateDestination', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param UpdateDestinationRequest $request
     *
     * @return UpdateDestinationResponse
     */
    public function updateDestination($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDestinationWithOptions($request, $runtime);
    }

    /**
     * @param UpdateDeviceGroupRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateDeviceGroupResponse
     */
    public function updateDeviceGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return UpdateDeviceGroupResponse::fromMap($this->doRequest('UpdateDeviceGroup', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param UpdateDeviceGroupRequest $request
     *
     * @return UpdateDeviceGroupResponse
     */
    public function updateDeviceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDeviceGroupWithOptions($request, $runtime);
    }

    /**
     * @param UpdateDeviceShadowRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateDeviceShadowResponse
     */
    public function updateDeviceShadowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return UpdateDeviceShadowResponse::fromMap($this->doRequest('UpdateDeviceShadow', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param UpdateDeviceShadowRequest $request
     *
     * @return UpdateDeviceShadowResponse
     */
    public function updateDeviceShadow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDeviceShadowWithOptions($request, $runtime);
    }

    /**
     * @param UpdateEdgeDriverVersionRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return UpdateEdgeDriverVersionResponse
     */
    public function updateEdgeDriverVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return UpdateEdgeDriverVersionResponse::fromMap($this->doRequest('UpdateEdgeDriverVersion', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param UpdateEdgeDriverVersionRequest $request
     *
     * @return UpdateEdgeDriverVersionResponse
     */
    public function updateEdgeDriverVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateEdgeDriverVersionWithOptions($request, $runtime);
    }

    /**
     * @param UpdateEdgeInstanceRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateEdgeInstanceResponse
     */
    public function updateEdgeInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return UpdateEdgeInstanceResponse::fromMap($this->doRequest('UpdateEdgeInstance', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param UpdateEdgeInstanceRequest $request
     *
     * @return UpdateEdgeInstanceResponse
     */
    public function updateEdgeInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateEdgeInstanceWithOptions($request, $runtime);
    }

    /**
     * @param UpdateEdgeInstanceChannelRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return UpdateEdgeInstanceChannelResponse
     */
    public function updateEdgeInstanceChannelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return UpdateEdgeInstanceChannelResponse::fromMap($this->doRequest('UpdateEdgeInstanceChannel', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param UpdateEdgeInstanceChannelRequest $request
     *
     * @return UpdateEdgeInstanceChannelResponse
     */
    public function updateEdgeInstanceChannel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateEdgeInstanceChannelWithOptions($request, $runtime);
    }

    /**
     * @param UpdateEdgeInstanceMessageRoutingRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return UpdateEdgeInstanceMessageRoutingResponse
     */
    public function updateEdgeInstanceMessageRoutingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return UpdateEdgeInstanceMessageRoutingResponse::fromMap($this->doRequest('UpdateEdgeInstanceMessageRouting', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param UpdateEdgeInstanceMessageRoutingRequest $request
     *
     * @return UpdateEdgeInstanceMessageRoutingResponse
     */
    public function updateEdgeInstanceMessageRouting($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateEdgeInstanceMessageRoutingWithOptions($request, $runtime);
    }

    /**
     * @param UpdateJobRequest $tmp
     * @param RuntimeOptions   $runtime
     *
     * @return UpdateJobResponse
     */
    public function updateJobWithOptions($tmp, $runtime)
    {
        Utils::validateModel($tmp);
        $request = new UpdateJobShrinkRequest([]);
        RpcUtils::convert($tmp, $request);
        if (!Utils::isUnset($tmp->rolloutConfig)) {
            $request->rolloutConfigShrink = Utils::toJSONString($tmp->rolloutConfig);
        }
        if (!Utils::isUnset($tmp->timeoutConfig)) {
            $request->timeoutConfigShrink = Utils::toJSONString($tmp->timeoutConfig);
        }

        return UpdateJobResponse::fromMap($this->doRequest('UpdateJob', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param UpdateJobRequest $request
     *
     * @return UpdateJobResponse
     */
    public function updateJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateJobWithOptions($request, $runtime);
    }

    /**
     * @param UpdateOTAModuleRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateOTAModuleResponse
     */
    public function updateOTAModuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return UpdateOTAModuleResponse::fromMap($this->doRequest('UpdateOTAModule', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param UpdateOTAModuleRequest $request
     *
     * @return UpdateOTAModuleResponse
     */
    public function updateOTAModule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateOTAModuleWithOptions($request, $runtime);
    }

    /**
     * @param UpdateParserRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return UpdateParserResponse
     */
    public function updateParserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return UpdateParserResponse::fromMap($this->doRequest('UpdateParser', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param UpdateParserRequest $request
     *
     * @return UpdateParserResponse
     */
    public function updateParser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateParserWithOptions($request, $runtime);
    }

    /**
     * @param UpdateParserDataSourceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateParserDataSourceResponse
     */
    public function updateParserDataSourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return UpdateParserDataSourceResponse::fromMap($this->doRequest('UpdateParserDataSource', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param UpdateParserDataSourceRequest $request
     *
     * @return UpdateParserDataSourceResponse
     */
    public function updateParserDataSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateParserDataSourceWithOptions($request, $runtime);
    }

    /**
     * @param UpdateProductRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateProductResponse
     */
    public function updateProductWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return UpdateProductResponse::fromMap($this->doRequest('UpdateProduct', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param UpdateProductRequest $request
     *
     * @return UpdateProductResponse
     */
    public function updateProduct($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateProductWithOptions($request, $runtime);
    }

    /**
     * @param UpdateProductFilterConfigRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return UpdateProductFilterConfigResponse
     */
    public function updateProductFilterConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return UpdateProductFilterConfigResponse::fromMap($this->doRequest('UpdateProductFilterConfig', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param UpdateProductFilterConfigRequest $request
     *
     * @return UpdateProductFilterConfigResponse
     */
    public function updateProductFilterConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateProductFilterConfigWithOptions($request, $runtime);
    }

    /**
     * @param UpdateProductTagsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateProductTagsResponse
     */
    public function updateProductTagsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return UpdateProductTagsResponse::fromMap($this->doRequest('UpdateProductTags', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param UpdateProductTagsRequest $request
     *
     * @return UpdateProductTagsResponse
     */
    public function updateProductTags($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateProductTagsWithOptions($request, $runtime);
    }

    /**
     * @param UpdateProductTopicRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateProductTopicResponse
     */
    public function updateProductTopicWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return UpdateProductTopicResponse::fromMap($this->doRequest('UpdateProductTopic', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param UpdateProductTopicRequest $request
     *
     * @return UpdateProductTopicResponse
     */
    public function updateProductTopic($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateProductTopicWithOptions($request, $runtime);
    }

    /**
     * @param UpdateRuleRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return UpdateRuleResponse
     */
    public function updateRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return UpdateRuleResponse::fromMap($this->doRequest('UpdateRule', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param UpdateRuleRequest $request
     *
     * @return UpdateRuleResponse
     */
    public function updateRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateRuleWithOptions($request, $runtime);
    }

    /**
     * @param UpdateRuleActionRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateRuleActionResponse
     */
    public function updateRuleActionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return UpdateRuleActionResponse::fromMap($this->doRequest('UpdateRuleAction', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param UpdateRuleActionRequest $request
     *
     * @return UpdateRuleActionResponse
     */
    public function updateRuleAction($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateRuleActionWithOptions($request, $runtime);
    }

    /**
     * @param UpdateSceneRuleRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateSceneRuleResponse
     */
    public function updateSceneRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return UpdateSceneRuleResponse::fromMap($this->doRequest('UpdateSceneRule', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param UpdateSceneRuleRequest $request
     *
     * @return UpdateSceneRuleResponse
     */
    public function updateSceneRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSceneRuleWithOptions($request, $runtime);
    }

    /**
     * @param UpdateSchedulePeriodRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateSchedulePeriodResponse
     */
    public function updateSchedulePeriodWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return UpdateSchedulePeriodResponse::fromMap($this->doRequest('UpdateSchedulePeriod', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param UpdateSchedulePeriodRequest $request
     *
     * @return UpdateSchedulePeriodResponse
     */
    public function updateSchedulePeriod($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSchedulePeriodWithOptions($request, $runtime);
    }

    /**
     * @param UpdateSoundCodeRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateSoundCodeResponse
     */
    public function updateSoundCodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return UpdateSoundCodeResponse::fromMap($this->doRequest('UpdateSoundCode', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param UpdateSoundCodeRequest $request
     *
     * @return UpdateSoundCodeResponse
     */
    public function updateSoundCode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSoundCodeWithOptions($request, $runtime);
    }

    /**
     * @param UpdateSoundCodeLabelRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateSoundCodeLabelResponse
     */
    public function updateSoundCodeLabelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return UpdateSoundCodeLabelResponse::fromMap($this->doRequest('UpdateSoundCodeLabel', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param UpdateSoundCodeLabelRequest $request
     *
     * @return UpdateSoundCodeLabelResponse
     */
    public function updateSoundCodeLabel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSoundCodeLabelWithOptions($request, $runtime);
    }

    /**
     * @param UpdateSoundCodeScheduleRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return UpdateSoundCodeScheduleResponse
     */
    public function updateSoundCodeScheduleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return UpdateSoundCodeScheduleResponse::fromMap($this->doRequest('UpdateSoundCodeSchedule', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param UpdateSoundCodeScheduleRequest $request
     *
     * @return UpdateSoundCodeScheduleResponse
     */
    public function updateSoundCodeSchedule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSoundCodeScheduleWithOptions($request, $runtime);
    }

    /**
     * @param UpdateSpeechRequest $tmp
     * @param RuntimeOptions      $runtime
     *
     * @return UpdateSpeechResponse
     */
    public function updateSpeechWithOptions($tmp, $runtime)
    {
        Utils::validateModel($tmp);
        $request = new UpdateSpeechShrinkRequest([]);
        RpcUtils::convert($tmp, $request);
        if (!Utils::isUnset($tmp->soundCodeConfig)) {
            $request->soundCodeConfigShrink = Utils::toJSONString($tmp->soundCodeConfig);
        }

        return UpdateSpeechResponse::fromMap($this->doRequest('UpdateSpeech', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param UpdateSpeechRequest $request
     *
     * @return UpdateSpeechResponse
     */
    public function updateSpeech($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSpeechWithOptions($request, $runtime);
    }

    /**
     * @param UpdateSubscribeRelationRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return UpdateSubscribeRelationResponse
     */
    public function updateSubscribeRelationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return UpdateSubscribeRelationResponse::fromMap($this->doRequest('UpdateSubscribeRelation', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param UpdateSubscribeRelationRequest $request
     *
     * @return UpdateSubscribeRelationResponse
     */
    public function updateSubscribeRelation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSubscribeRelationWithOptions($request, $runtime);
    }

    /**
     * @param UpdateThingModelRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateThingModelResponse
     */
    public function updateThingModelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return UpdateThingModelResponse::fromMap($this->doRequest('UpdateThingModel', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param UpdateThingModelRequest $request
     *
     * @return UpdateThingModelResponse
     */
    public function updateThingModel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateThingModelWithOptions($request, $runtime);
    }

    /**
     * @param UpdateThingScriptRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateThingScriptResponse
     */
    public function updateThingScriptWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return UpdateThingScriptResponse::fromMap($this->doRequest('UpdateThingScript', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param UpdateThingScriptRequest $request
     *
     * @return UpdateThingScriptResponse
     */
    public function updateThingScript($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateThingScriptWithOptions($request, $runtime);
    }

    /**
     * @param WriteDevicesHotStorageDataRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return WriteDevicesHotStorageDataResponse
     */
    public function writeDevicesHotStorageDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return WriteDevicesHotStorageDataResponse::fromMap($this->doRequest('WriteDevicesHotStorageData', 'HTTPS', 'POST', '2018-01-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param WriteDevicesHotStorageDataRequest $request
     *
     * @return WriteDevicesHotStorageDataResponse
     */
    public function writeDevicesHotStorageData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->writeDevicesHotStorageDataWithOptions($request, $runtime);
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
}
