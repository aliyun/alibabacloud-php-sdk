<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Iot\V20180120\Models\AddDataForApiSourceRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\AddDataForApiSourceResponse;
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
use AlibabaCloud\SDK\Iot\V20180120\Models\BatchClearEdgeInstanceDeviceConfigRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\BatchClearEdgeInstanceDeviceConfigResponse;
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
use AlibabaCloud\SDK\Iot\V20180120\Models\CreateConsumerGroupRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\CreateConsumerGroupResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\CreateConsumerGroupSubscribeRelationRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\CreateConsumerGroupSubscribeRelationResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\CreateDataAPIServiceRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\CreateDataAPIServiceResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\CreateDeviceDistributeJobRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\CreateDeviceDistributeJobResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\CreateDeviceDynamicGroupRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\CreateDeviceDynamicGroupResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\CreateDeviceGroupRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\CreateDeviceGroupResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\CreateDeviceTunnelRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\CreateDeviceTunnelResponse;
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
use AlibabaCloud\SDK\Iot\V20180120\Models\CreateSoundCodeRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\CreateSoundCodeResponse;
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
use AlibabaCloud\SDK\Iot\V20180120\Models\DeleteSoundCodeRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\DeleteSoundCodeResponse;
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
use AlibabaCloud\SDK\Iot\V20180120\Models\GetDeviceShadowRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\GetDeviceShadowResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\GetDeviceStatusRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\GetDeviceStatusResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\GetDeviceTunnelShareStatusRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\GetDeviceTunnelShareStatusResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\GetDeviceTunnelStatusRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\GetDeviceTunnelStatusResponse;
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
use AlibabaCloud\SDK\Iot\V20180120\Models\GetRuleActionRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\GetRuleActionResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\GetRuleRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\GetRuleResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\GetSceneRuleRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\GetSceneRuleResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\GetSoundCodeAudioRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\GetSoundCodeAudioResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\GetSpeechDeviceDetailRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\GetSpeechDeviceDetailResponse;
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
use AlibabaCloud\SDK\Iot\V20180120\Models\PrintByTemplateRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\PrintByTemplateResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\PubBroadcastRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\PubBroadcastResponse;
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
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceSpeechRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceSpeechResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceStatisticsRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceStatisticsResponse;
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
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryJobRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryJobResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryJobStatisticsRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryJobStatisticsResponse;
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
use AlibabaCloud\SDK\Iot\V20180120\Models\QuerySceneRuleRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\QuerySceneRuleResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\QuerySolutionDeviceGroupPageRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\QuerySolutionDeviceGroupPageResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\QuerySoundCodeListRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\QuerySoundCodeListResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\QuerySpeechDeviceRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\QuerySpeechDeviceResponse;
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
use AlibabaCloud\SDK\Iot\V20180120\Models\ReupgradeOTATaskRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\ReupgradeOTATaskResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\RRpcRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\RRpcResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\SaveDevicePropRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\SaveDevicePropResponse;
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
use AlibabaCloud\SDK\Iot\V20180120\Models\SpeechByCombinationRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\SpeechByCombinationResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\SpeechBySynthesisRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\SpeechBySynthesisResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\StartCpuRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\StartCpuResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\StartRuleRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\StartRuleResponse;
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
use AlibabaCloud\SDK\Iot\V20180120\Models\UnbindRoleFromEdgeInstanceRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\UnbindRoleFromEdgeInstanceResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\UnbindSceneRuleFromEdgeInstanceRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\UnbindSceneRuleFromEdgeInstanceResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\UpdateConsumerGroupRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\UpdateConsumerGroupResponse;
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
use AlibabaCloud\SDK\Iot\V20180120\Models\UpdateSpeechRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\UpdateSpeechResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\UpdateSpeechShrinkRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\UpdateSubscribeRelationRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\UpdateSubscribeRelationResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\UpdateThingModelRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\UpdateThingModelResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\UpdateThingScriptRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\UpdateThingScriptResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Iot extends OpenApiClient
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
     * @param AddDataForApiSourceRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return AddDataForApiSourceResponse
     */
    public function addDataForApiSourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiId)) {
            $query['ApiId'] = $request->apiId;
        }
        if (!Utils::isUnset($request->content)) {
            $query['Content'] = $request->content;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddDataForApiSource',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddDataForApiSourceResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param BatchAddDataForApiSourceRequest $tmpReq
     * @param RuntimeOptions                  $runtime
     *
     * @return BatchAddDataForApiSourceResponse
     */
    public function batchAddDataForApiSourceWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new BatchAddDataForApiSourceShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->contentList)) {
            $request->contentListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->contentList, 'ContentList', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->apiId)) {
            $query['ApiId'] = $request->apiId;
        }
        if (!Utils::isUnset($request->contentListShrink)) {
            $query['ContentList'] = $request->contentListShrink;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BatchAddDataForApiSource',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchAddDataForApiSourceResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->device)) {
            $query['Device'] = $request->device;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BatchAddDeviceGroupRelations',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchAddDeviceGroupRelationsResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->gwDeviceName)) {
            $query['GwDeviceName'] = $request->gwDeviceName;
        }
        if (!Utils::isUnset($request->gwProductKey)) {
            $query['GwProductKey'] = $request->gwProductKey;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->topoAddItem)) {
            $query['TopoAddItem'] = $request->topoAddItem;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BatchAddThingTopo',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchAddThingTopoResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->driverId)) {
            $query['DriverId'] = $request->driverId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->iotIds)) {
            $query['IotIds'] = $request->iotIds;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BatchBindDeviceToEdgeInstanceWithDriver',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchBindDeviceToEdgeInstanceWithDriverResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $body = [];
        if (!Utils::isUnset($request->devices)) {
            $body['Devices'] = $request->devices;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $body['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'BatchBindDevicesIntoProject',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchBindDevicesIntoProjectResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $body = [];
        if (!Utils::isUnset($request->iotInstanceId)) {
            $body['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->productKeys)) {
            $body['ProductKeys'] = $request->productKeys;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'BatchBindProductsIntoProject',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchBindProductsIntoProjectResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->deviceName)) {
            $query['DeviceName'] = $request->deviceName;
        }
        if (!Utils::isUnset($request->deviceNameList)) {
            $query['DeviceNameList'] = $request->deviceNameList;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BatchCheckDeviceNames',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchCheckDeviceNamesResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param BatchClearEdgeInstanceDeviceConfigRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return BatchClearEdgeInstanceDeviceConfigResponse
     */
    public function batchClearEdgeInstanceDeviceConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->iotIds)) {
            $query['IotIds'] = $request->iotIds;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BatchClearEdgeInstanceDeviceConfig',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchClearEdgeInstanceDeviceConfigResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param BatchDeleteDeviceGroupRelationsRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return BatchDeleteDeviceGroupRelationsResponse
     */
    public function batchDeleteDeviceGroupRelationsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->device)) {
            $query['Device'] = $request->device;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BatchDeleteDeviceGroupRelations',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchDeleteDeviceGroupRelationsResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->channelIds)) {
            $query['ChannelIds'] = $request->channelIds;
        }
        if (!Utils::isUnset($request->driverId)) {
            $query['DriverId'] = $request->driverId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BatchDeleteEdgeInstanceChannel',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchDeleteEdgeInstanceChannelResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->iotIds)) {
            $query['IotIds'] = $request->iotIds;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BatchGetDeviceBindStatus',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchGetDeviceBindStatusResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->deviceName)) {
            $query['DeviceName'] = $request->deviceName;
        }
        if (!Utils::isUnset($request->iotId)) {
            $query['IotId'] = $request->iotId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BatchGetDeviceState',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchGetDeviceStateResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->driverIds)) {
            $query['DriverIds'] = $request->driverIds;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BatchGetEdgeDriver',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchGetEdgeDriverResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->channelIds)) {
            $query['ChannelIds'] = $request->channelIds;
        }
        if (!Utils::isUnset($request->driverId)) {
            $query['DriverId'] = $request->driverId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BatchGetEdgeInstanceChannel',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchGetEdgeInstanceChannelResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->driverId)) {
            $query['DriverId'] = $request->driverId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->iotIds)) {
            $query['IotIds'] = $request->iotIds;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BatchGetEdgeInstanceDeviceChannel',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchGetEdgeInstanceDeviceChannelResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->iotIds)) {
            $query['IotIds'] = $request->iotIds;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BatchGetEdgeInstanceDeviceConfig',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchGetEdgeInstanceDeviceConfigResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->iotIds)) {
            $query['IotIds'] = $request->iotIds;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BatchGetEdgeInstanceDeviceDriver',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchGetEdgeInstanceDeviceDriverResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->driverIds)) {
            $query['DriverIds'] = $request->driverIds;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BatchGetEdgeInstanceDriverConfigs',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchGetEdgeInstanceDriverConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param BatchPubRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return BatchPubResponse
     */
    public function batchPubWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->deviceName)) {
            $query['DeviceName'] = $request->deviceName;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->messageContent)) {
            $query['MessageContent'] = $request->messageContent;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        if (!Utils::isUnset($request->qos)) {
            $query['Qos'] = $request->qos;
        }
        if (!Utils::isUnset($request->topicShortName)) {
            $query['TopicShortName'] = $request->topicShortName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BatchPub',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchPubResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->deviceName)) {
            $query['DeviceName'] = $request->deviceName;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BatchQueryDeviceDetail',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchQueryDeviceDetailResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->count)) {
            $query['Count'] = $request->count;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BatchRegisterDevice',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchRegisterDeviceResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->applyId)) {
            $query['ApplyId'] = $request->applyId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BatchRegisterDeviceWithApplyId',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchRegisterDeviceWithApplyIdResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->channelId)) {
            $query['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->driverId)) {
            $query['DriverId'] = $request->driverId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->iotIds)) {
            $query['IotIds'] = $request->iotIds;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BatchSetEdgeInstanceDeviceChannel',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchSetEdgeInstanceDeviceChannelResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->deviceConfigs)) {
            $query['DeviceConfigs'] = $request->deviceConfigs;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BatchSetEdgeInstanceDeviceConfig',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchSetEdgeInstanceDeviceConfigResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->iotIds)) {
            $query['IotIds'] = $request->iotIds;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BatchUnbindDeviceFromEdgeInstance',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchUnbindDeviceFromEdgeInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $body = [];
        if (!Utils::isUnset($request->devices)) {
            $body['Devices'] = $request->devices;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $body['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'BatchUnbindProjectDevices',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchUnbindProjectDevicesResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $body = [];
        if (!Utils::isUnset($request->iotInstanceId)) {
            $body['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->productKeys)) {
            $body['ProductKeys'] = $request->productKeys;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'BatchUnbindProjectProducts',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchUnbindProjectProductsResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->deviceNicknameInfo)) {
            $query['DeviceNicknameInfo'] = $request->deviceNicknameInfo;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BatchUpdateDeviceNickname',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchUpdateDeviceNicknameResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->applicationId)) {
            $query['ApplicationId'] = $request->applicationId;
        }
        if (!Utils::isUnset($request->applicationVersion)) {
            $query['ApplicationVersion'] = $request->applicationVersion;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BindApplicationToEdgeInstance',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BindApplicationToEdgeInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->driverId)) {
            $query['DriverId'] = $request->driverId;
        }
        if (!Utils::isUnset($request->driverVersion)) {
            $query['DriverVersion'] = $request->driverVersion;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->orderId)) {
            $query['OrderId'] = $request->orderId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BindDriverToEdgeInstance',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BindDriverToEdgeInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->deviceName)) {
            $query['DeviceName'] = $request->deviceName;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->iotId)) {
            $query['IotId'] = $request->iotId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BindGatewayToEdgeInstance',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BindGatewayToEdgeInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param BindRoleToEdgeInstanceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return BindRoleToEdgeInstanceResponse
     */
    public function bindRoleToEdgeInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->roleArn)) {
            $query['RoleArn'] = $request->roleArn;
        }
        if (!Utils::isUnset($request->roleName)) {
            $query['RoleName'] = $request->roleName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BindRoleToEdgeInstance',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BindRoleToEdgeInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->ruleId)) {
            $query['RuleId'] = $request->ruleId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BindSceneRuleToEdgeInstance',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BindSceneRuleToEdgeInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CancelJob',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CancelJobResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CancelOTAStrategyByJob',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CancelOTAStrategyByJobResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->deviceName)) {
            $query['DeviceName'] = $request->deviceName;
        }
        if (!Utils::isUnset($request->firmwareId)) {
            $query['FirmwareId'] = $request->firmwareId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CancelOTATaskByDevice',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CancelOTATaskByDeviceResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->cancelInProgressTask)) {
            $query['CancelInProgressTask'] = $request->cancelInProgressTask;
        }
        if (!Utils::isUnset($request->cancelNotifiedTask)) {
            $query['CancelNotifiedTask'] = $request->cancelNotifiedTask;
        }
        if (!Utils::isUnset($request->cancelQueuedTask)) {
            $query['CancelQueuedTask'] = $request->cancelQueuedTask;
        }
        if (!Utils::isUnset($request->cancelScheduledTask)) {
            $query['CancelScheduledTask'] = $request->cancelScheduledTask;
        }
        if (!Utils::isUnset($request->cancelUnconfirmedTask)) {
            $query['CancelUnconfirmedTask'] = $request->cancelUnconfirmedTask;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CancelOTATaskByJob',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CancelOTATaskByJobResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CancelReleaseProduct',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CancelReleaseProductResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ClearEdgeInstanceDriverConfigsRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return ClearEdgeInstanceDriverConfigsResponse
     */
    public function clearEdgeInstanceDriverConfigsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->driverId)) {
            $query['DriverId'] = $request->driverId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ClearEdgeInstanceDriverConfigs',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ClearEdgeInstanceDriverConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->tunnelId)) {
            $query['TunnelId'] = $request->tunnelId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CloseDeviceTunnel',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CloseDeviceTunnelResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CloseEdgeInstanceDeployment',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CloseEdgeInstanceDeploymentResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ConfirmOTATask',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ConfirmOTATaskResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->sourceModelVersion)) {
            $query['SourceModelVersion'] = $request->sourceModelVersion;
        }
        if (!Utils::isUnset($request->sourceProductKey)) {
            $query['SourceProductKey'] = $request->sourceProductKey;
        }
        if (!Utils::isUnset($request->targetProductKey)) {
            $query['TargetProductKey'] = $request->targetProductKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CopyThingModel',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CopyThingModelResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param CreateConsumerGroupRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateConsumerGroupResponse
     */
    public function createConsumerGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateConsumerGroup',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateConsumerGroupResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->consumerGroupId)) {
            $query['ConsumerGroupId'] = $request->consumerGroupId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateConsumerGroupSubscribeRelation',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateConsumerGroupSubscribeRelationResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $body = [];
        if (!Utils::isUnset($request->apiPath)) {
            $body['ApiPath'] = $request->apiPath;
        }
        if (!Utils::isUnset($request->desc)) {
            $body['Desc'] = $request->desc;
        }
        if (!Utils::isUnset($request->displayName)) {
            $body['DisplayName'] = $request->displayName;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $body['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->originSql)) {
            $body['OriginSql'] = $request->originSql;
        }
        if (!Utils::isUnset($request->requestParam)) {
            $body['RequestParam'] = $request->requestParam;
        }
        if (!Utils::isUnset($request->responseParam)) {
            $body['ResponseParam'] = $request->responseParam;
        }
        if (!Utils::isUnset($request->templateSql)) {
            $body['TemplateSql'] = $request->templateSql;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateDataAPIService',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDataAPIServiceResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param CreateDeviceDistributeJobRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CreateDeviceDistributeJobResponse
     */
    public function createDeviceDistributeJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->deviceName)) {
            $body['DeviceName'] = $request->deviceName;
        }
        if (!Utils::isUnset($request->productKey)) {
            $body['ProductKey'] = $request->productKey;
        }
        if (!Utils::isUnset($request->sourceInstanceId)) {
            $body['SourceInstanceId'] = $request->sourceInstanceId;
        }
        if (!Utils::isUnset($request->strategy)) {
            $body['Strategy'] = $request->strategy;
        }
        if (!Utils::isUnset($request->targetAliyunId)) {
            $body['TargetAliyunId'] = $request->targetAliyunId;
        }
        if (!Utils::isUnset($request->targetInstanceConfig)) {
            $body['TargetInstanceConfig'] = $request->targetInstanceConfig;
        }
        if (!Utils::isUnset($request->targetUid)) {
            $body['TargetUid'] = $request->targetUid;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateDeviceDistributeJob',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDeviceDistributeJobResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->dynamicGroupExpression)) {
            $query['DynamicGroupExpression'] = $request->dynamicGroupExpression;
        }
        if (!Utils::isUnset($request->groupDesc)) {
            $query['GroupDesc'] = $request->groupDesc;
        }
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateDeviceDynamicGroup',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDeviceDynamicGroupResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->groupDesc)) {
            $query['GroupDesc'] = $request->groupDesc;
        }
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->superGroupId)) {
            $query['SuperGroupId'] = $request->superGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateDeviceGroup',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDeviceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->deviceName)) {
            $query['DeviceName'] = $request->deviceName;
        }
        if (!Utils::isUnset($request->iotId)) {
            $query['IotId'] = $request->iotId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        if (!Utils::isUnset($request->udi)) {
            $query['Udi'] = $request->udi;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateDeviceTunnel',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDeviceTunnelResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param CreateEdgeDriverRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateEdgeDriverResponse
     */
    public function createEdgeDriverWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cpuArch)) {
            $query['CpuArch'] = $request->cpuArch;
        }
        if (!Utils::isUnset($request->driverName)) {
            $query['DriverName'] = $request->driverName;
        }
        if (!Utils::isUnset($request->driverProtocol)) {
            $query['DriverProtocol'] = $request->driverProtocol;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->isBuiltIn)) {
            $query['IsBuiltIn'] = $request->isBuiltIn;
        }
        if (!Utils::isUnset($request->runtime)) {
            $query['Runtime'] = $request->runtime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateEdgeDriver',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateEdgeDriverResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->argument)) {
            $query['Argument'] = $request->argument;
        }
        if (!Utils::isUnset($request->configCheckRule)) {
            $query['ConfigCheckRule'] = $request->configCheckRule;
        }
        if (!Utils::isUnset($request->containerConfig)) {
            $query['ContainerConfig'] = $request->containerConfig;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->driverConfig)) {
            $query['DriverConfig'] = $request->driverConfig;
        }
        if (!Utils::isUnset($request->driverId)) {
            $query['DriverId'] = $request->driverId;
        }
        if (!Utils::isUnset($request->driverVersion)) {
            $query['DriverVersion'] = $request->driverVersion;
        }
        if (!Utils::isUnset($request->edgeVersion)) {
            $query['EdgeVersion'] = $request->edgeVersion;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->sourceConfig)) {
            $query['SourceConfig'] = $request->sourceConfig;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateEdgeDriverVersion',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateEdgeDriverVersionResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->spec)) {
            $query['Spec'] = $request->spec;
        }
        if (!Utils::isUnset($request->tags)) {
            $query['Tags'] = $request->tags;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateEdgeInstance',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateEdgeInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->channelName)) {
            $query['ChannelName'] = $request->channelName;
        }
        if (!Utils::isUnset($request->configs)) {
            $query['Configs'] = $request->configs;
        }
        if (!Utils::isUnset($request->driverId)) {
            $query['DriverId'] = $request->driverId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateEdgeInstanceChannel',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateEdgeInstanceChannelResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateEdgeInstanceDeployment',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateEdgeInstanceDeploymentResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->sourceData)) {
            $query['SourceData'] = $request->sourceData;
        }
        if (!Utils::isUnset($request->sourceType)) {
            $query['SourceType'] = $request->sourceType;
        }
        if (!Utils::isUnset($request->targetData)) {
            $query['TargetData'] = $request->targetData;
        }
        if (!Utils::isUnset($request->targetIotHubQos)) {
            $query['TargetIotHubQos'] = $request->targetIotHubQos;
        }
        if (!Utils::isUnset($request->targetType)) {
            $query['TargetType'] = $request->targetType;
        }
        if (!Utils::isUnset($request->topicFilter)) {
            $query['TopicFilter'] = $request->topicFilter;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateEdgeInstanceMessageRouting',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateEdgeInstanceMessageRoutingResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->fileName)) {
            $query['FileName'] = $request->fileName;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceVersion)) {
            $query['ResourceVersion'] = $request->resourceVersion;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateEdgeOssPreSignedAddress',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateEdgeOssPreSignedAddressResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param CreateJobRequest $tmpReq
     * @param RuntimeOptions   $runtime
     *
     * @return CreateJobResponse
     */
    public function createJobWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateJobShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->jobFile)) {
            $request->jobFileShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->jobFile, 'JobFile', 'json');
        }
        if (!Utils::isUnset($tmpReq->rolloutConfig)) {
            $request->rolloutConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->rolloutConfig, 'RolloutConfig', 'json');
        }
        if (!Utils::isUnset($tmpReq->targetConfig)) {
            $request->targetConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->targetConfig, 'TargetConfig', 'json');
        }
        if (!Utils::isUnset($tmpReq->timeoutConfig)) {
            $request->timeoutConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->timeoutConfig, 'TimeoutConfig', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->jobDocument)) {
            $query['JobDocument'] = $request->jobDocument;
        }
        if (!Utils::isUnset($request->jobFileShrink)) {
            $query['JobFile'] = $request->jobFileShrink;
        }
        if (!Utils::isUnset($request->jobName)) {
            $query['JobName'] = $request->jobName;
        }
        if (!Utils::isUnset($request->rolloutConfigShrink)) {
            $query['RolloutConfig'] = $request->rolloutConfigShrink;
        }
        if (!Utils::isUnset($request->scheduledTime)) {
            $query['ScheduledTime'] = $request->scheduledTime;
        }
        if (!Utils::isUnset($request->targetConfigShrink)) {
            $query['TargetConfig'] = $request->targetConfigShrink;
        }
        if (!Utils::isUnset($request->timeoutConfigShrink)) {
            $query['TimeoutConfig'] = $request->timeoutConfigShrink;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateJob',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateJobResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->deviceInfo)) {
            $query['DeviceInfo'] = $request->deviceInfo;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateLoRaNodesTask',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateLoRaNodesTaskResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->downloadProtocol)) {
            $query['DownloadProtocol'] = $request->downloadProtocol;
        }
        if (!Utils::isUnset($request->dynamicMode)) {
            $query['DynamicMode'] = $request->dynamicMode;
        }
        if (!Utils::isUnset($request->firmwareId)) {
            $query['FirmwareId'] = $request->firmwareId;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->groupType)) {
            $query['GroupType'] = $request->groupType;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->maximumPerMinute)) {
            $query['MaximumPerMinute'] = $request->maximumPerMinute;
        }
        if (!Utils::isUnset($request->multiModuleMode)) {
            $query['MultiModuleMode'] = $request->multiModuleMode;
        }
        if (!Utils::isUnset($request->needConfirm)) {
            $query['NeedConfirm'] = $request->needConfirm;
        }
        if (!Utils::isUnset($request->needPush)) {
            $query['NeedPush'] = $request->needPush;
        }
        if (!Utils::isUnset($request->overwriteMode)) {
            $query['OverwriteMode'] = $request->overwriteMode;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        if (!Utils::isUnset($request->retryCount)) {
            $query['RetryCount'] = $request->retryCount;
        }
        if (!Utils::isUnset($request->retryInterval)) {
            $query['RetryInterval'] = $request->retryInterval;
        }
        if (!Utils::isUnset($request->srcVersion)) {
            $query['SrcVersion'] = $request->srcVersion;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->timeoutInMinutes)) {
            $query['TimeoutInMinutes'] = $request->timeoutInMinutes;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateOTADynamicUpgradeJob',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateOTADynamicUpgradeJobResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->destVersion)) {
            $query['DestVersion'] = $request->destVersion;
        }
        if (!Utils::isUnset($request->firmwareDesc)) {
            $query['FirmwareDesc'] = $request->firmwareDesc;
        }
        if (!Utils::isUnset($request->firmwareName)) {
            $query['FirmwareName'] = $request->firmwareName;
        }
        if (!Utils::isUnset($request->firmwareSign)) {
            $query['FirmwareSign'] = $request->firmwareSign;
        }
        if (!Utils::isUnset($request->firmwareSize)) {
            $query['FirmwareSize'] = $request->firmwareSize;
        }
        if (!Utils::isUnset($request->firmwareUrl)) {
            $query['FirmwareUrl'] = $request->firmwareUrl;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->moduleName)) {
            $query['ModuleName'] = $request->moduleName;
        }
        if (!Utils::isUnset($request->multiFiles)) {
            $query['MultiFiles'] = $request->multiFiles;
        }
        if (!Utils::isUnset($request->needToVerify)) {
            $query['NeedToVerify'] = $request->needToVerify;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        if (!Utils::isUnset($request->signMethod)) {
            $query['SignMethod'] = $request->signMethod;
        }
        if (!Utils::isUnset($request->srcVersion)) {
            $query['SrcVersion'] = $request->srcVersion;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->udi)) {
            $query['Udi'] = $request->udi;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateOTAFirmware',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateOTAFirmwareResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->aliasName)) {
            $query['AliasName'] = $request->aliasName;
        }
        if (!Utils::isUnset($request->desc)) {
            $query['Desc'] = $request->desc;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->moduleName)) {
            $query['ModuleName'] = $request->moduleName;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateOTAModule',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateOTAModuleResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->dnListFileUrl)) {
            $query['DnListFileUrl'] = $request->dnListFileUrl;
        }
        if (!Utils::isUnset($request->downloadProtocol)) {
            $query['DownloadProtocol'] = $request->downloadProtocol;
        }
        if (!Utils::isUnset($request->firmwareId)) {
            $query['FirmwareId'] = $request->firmwareId;
        }
        if (!Utils::isUnset($request->grayPercent)) {
            $query['GrayPercent'] = $request->grayPercent;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->groupType)) {
            $query['GroupType'] = $request->groupType;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->maximumPerMinute)) {
            $query['MaximumPerMinute'] = $request->maximumPerMinute;
        }
        if (!Utils::isUnset($request->multiModuleMode)) {
            $query['MultiModuleMode'] = $request->multiModuleMode;
        }
        if (!Utils::isUnset($request->needConfirm)) {
            $query['NeedConfirm'] = $request->needConfirm;
        }
        if (!Utils::isUnset($request->needPush)) {
            $query['NeedPush'] = $request->needPush;
        }
        if (!Utils::isUnset($request->overwriteMode)) {
            $query['OverwriteMode'] = $request->overwriteMode;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        if (!Utils::isUnset($request->retryCount)) {
            $query['RetryCount'] = $request->retryCount;
        }
        if (!Utils::isUnset($request->retryInterval)) {
            $query['RetryInterval'] = $request->retryInterval;
        }
        if (!Utils::isUnset($request->scheduleFinishTime)) {
            $query['ScheduleFinishTime'] = $request->scheduleFinishTime;
        }
        if (!Utils::isUnset($request->scheduleTime)) {
            $query['ScheduleTime'] = $request->scheduleTime;
        }
        if (!Utils::isUnset($request->srcVersion)) {
            $query['SrcVersion'] = $request->srcVersion;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->targetDeviceName)) {
            $query['TargetDeviceName'] = $request->targetDeviceName;
        }
        if (!Utils::isUnset($request->targetSelection)) {
            $query['TargetSelection'] = $request->targetSelection;
        }
        if (!Utils::isUnset($request->timeoutInMinutes)) {
            $query['TimeoutInMinutes'] = $request->timeoutInMinutes;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateOTAStaticUpgradeJob',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateOTAStaticUpgradeJobResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->downloadProtocol)) {
            $query['DownloadProtocol'] = $request->downloadProtocol;
        }
        if (!Utils::isUnset($request->firmwareId)) {
            $query['FirmwareId'] = $request->firmwareId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->needConfirm)) {
            $query['NeedConfirm'] = $request->needConfirm;
        }
        if (!Utils::isUnset($request->needPush)) {
            $query['NeedPush'] = $request->needPush;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->targetDeviceName)) {
            $query['TargetDeviceName'] = $request->targetDeviceName;
        }
        if (!Utils::isUnset($request->timeoutInMinutes)) {
            $query['TimeoutInMinutes'] = $request->timeoutInMinutes;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateOTAVerifyJob',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateOTAVerifyJobResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param CreateProductRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateProductResponse
     */
    public function createProductWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliyunCommodityCode)) {
            $query['AliyunCommodityCode'] = $request->aliyunCommodityCode;
        }
        if (!Utils::isUnset($request->authType)) {
            $query['AuthType'] = $request->authType;
        }
        if (!Utils::isUnset($request->categoryKey)) {
            $query['CategoryKey'] = $request->categoryKey;
        }
        if (!Utils::isUnset($request->dataFormat)) {
            $query['DataFormat'] = $request->dataFormat;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->id2)) {
            $query['Id2'] = $request->id2;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->joinPermissionId)) {
            $query['JoinPermissionId'] = $request->joinPermissionId;
        }
        if (!Utils::isUnset($request->netType)) {
            $query['NetType'] = $request->netType;
        }
        if (!Utils::isUnset($request->nodeType)) {
            $query['NodeType'] = $request->nodeType;
        }
        if (!Utils::isUnset($request->productName)) {
            $query['ProductName'] = $request->productName;
        }
        if (!Utils::isUnset($request->protocolType)) {
            $query['ProtocolType'] = $request->protocolType;
        }
        if (!Utils::isUnset($request->publishAuto)) {
            $query['PublishAuto'] = $request->publishAuto;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->validateType)) {
            $query['ValidateType'] = $request->validateType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateProduct',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateProductResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        if (!Utils::isUnset($request->sourceInstanceId)) {
            $query['SourceInstanceId'] = $request->sourceInstanceId;
        }
        if (!Utils::isUnset($request->targetAliyunId)) {
            $query['TargetAliyunId'] = $request->targetAliyunId;
        }
        if (!Utils::isUnset($request->targetInstanceId)) {
            $query['TargetInstanceId'] = $request->targetInstanceId;
        }
        if (!Utils::isUnset($request->targetUid)) {
            $query['TargetUid'] = $request->targetUid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateProductDistributeJob',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateProductDistributeJobResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        if (!Utils::isUnset($request->productTag)) {
            $query['ProductTag'] = $request->productTag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateProductTags',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateProductTagsResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->desc)) {
            $query['Desc'] = $request->desc;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->operation)) {
            $query['Operation'] = $request->operation;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        if (!Utils::isUnset($request->topicShortName)) {
            $query['TopicShortName'] = $request->topicShortName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateProductTopic',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateProductTopicResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->dataType)) {
            $query['DataType'] = $request->dataType;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->ruleDesc)) {
            $query['RuleDesc'] = $request->ruleDesc;
        }
        if (!Utils::isUnset($request->select)) {
            $query['Select'] = $request->select;
        }
        if (!Utils::isUnset($request->shortTopic)) {
            $query['ShortTopic'] = $request->shortTopic;
        }
        if (!Utils::isUnset($request->topic)) {
            $query['Topic'] = $request->topic;
        }
        if (!Utils::isUnset($request->topicType)) {
            $query['TopicType'] = $request->topicType;
        }
        if (!Utils::isUnset($request->where)) {
            $query['Where'] = $request->where;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateRule',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateRuleResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->configuration)) {
            $query['Configuration'] = $request->configuration;
        }
        if (!Utils::isUnset($request->errorActionFlag)) {
            $query['ErrorActionFlag'] = $request->errorActionFlag;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->ruleId)) {
            $query['RuleId'] = $request->ruleId;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateRuleAction',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateRuleActionResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->ruleContent)) {
            $query['RuleContent'] = $request->ruleContent;
        }
        if (!Utils::isUnset($request->ruleDescription)) {
            $query['RuleDescription'] = $request->ruleDescription;
        }
        if (!Utils::isUnset($request->ruleName)) {
            $query['RuleName'] = $request->ruleName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateSceneRule',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateSceneRuleResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param CreateSoundCodeRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateSoundCodeResponse
     */
    public function createSoundCodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->duration)) {
            $body['Duration'] = $request->duration;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $body['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->soundCodeContent)) {
            $body['SoundCodeContent'] = $request->soundCodeContent;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateSoundCode',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateSoundCodeResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param CreateSpeechRequest $tmpReq
     * @param RuntimeOptions      $runtime
     *
     * @return CreateSpeechResponse
     */
    public function createSpeechWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateSpeechShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->soundCodeConfig)) {
            $request->soundCodeConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->soundCodeConfig, 'SoundCodeConfig', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->audioFormat)) {
            $body['AudioFormat'] = $request->audioFormat;
        }
        if (!Utils::isUnset($request->bizCode)) {
            $body['BizCode'] = $request->bizCode;
        }
        if (!Utils::isUnset($request->enableSoundCode)) {
            $body['EnableSoundCode'] = $request->enableSoundCode;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $body['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->projectCode)) {
            $body['ProjectCode'] = $request->projectCode;
        }
        if (!Utils::isUnset($request->soundCodeConfigShrink)) {
            $body['SoundCodeConfig'] = $request->soundCodeConfigShrink;
        }
        if (!Utils::isUnset($request->speechRate)) {
            $body['SpeechRate'] = $request->speechRate;
        }
        if (!Utils::isUnset($request->speechType)) {
            $body['SpeechType'] = $request->speechType;
        }
        if (!Utils::isUnset($request->text)) {
            $body['Text'] = $request->text;
        }
        if (!Utils::isUnset($request->voice)) {
            $body['Voice'] = $request->voice;
        }
        if (!Utils::isUnset($request->volume)) {
            $body['Volume'] = $request->volume;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateSpeech',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateSpeechResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->host)) {
            $body['Host'] = $request->host;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $body['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->protocol)) {
            $body['Protocol'] = $request->protocol;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateStudioAppDomainOpen',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateStudioAppDomainOpenResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->consumerGroupIds)) {
            $query['ConsumerGroupIds'] = $request->consumerGroupIds;
        }
        if (!Utils::isUnset($request->deviceDataFlag)) {
            $query['DeviceDataFlag'] = $request->deviceDataFlag;
        }
        if (!Utils::isUnset($request->deviceLifeCycleFlag)) {
            $query['DeviceLifeCycleFlag'] = $request->deviceLifeCycleFlag;
        }
        if (!Utils::isUnset($request->deviceStatusChangeFlag)) {
            $query['DeviceStatusChangeFlag'] = $request->deviceStatusChangeFlag;
        }
        if (!Utils::isUnset($request->deviceTagFlag)) {
            $query['DeviceTagFlag'] = $request->deviceTagFlag;
        }
        if (!Utils::isUnset($request->deviceTopoLifeCycleFlag)) {
            $query['DeviceTopoLifeCycleFlag'] = $request->deviceTopoLifeCycleFlag;
        }
        if (!Utils::isUnset($request->foundDeviceListFlag)) {
            $query['FoundDeviceListFlag'] = $request->foundDeviceListFlag;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->mnsConfiguration)) {
            $query['MnsConfiguration'] = $request->mnsConfiguration;
        }
        if (!Utils::isUnset($request->otaEventFlag)) {
            $query['OtaEventFlag'] = $request->otaEventFlag;
        }
        if (!Utils::isUnset($request->otaJobFlag)) {
            $query['OtaJobFlag'] = $request->otaJobFlag;
        }
        if (!Utils::isUnset($request->otaVersionFlag)) {
            $query['OtaVersionFlag'] = $request->otaVersionFlag;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        if (!Utils::isUnset($request->thingHistoryFlag)) {
            $query['ThingHistoryFlag'] = $request->thingHistoryFlag;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateSubscribeRelation',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateSubscribeRelationResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->functionBlockId)) {
            $query['FunctionBlockId'] = $request->functionBlockId;
        }
        if (!Utils::isUnset($request->functionBlockName)) {
            $query['FunctionBlockName'] = $request->functionBlockName;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        if (!Utils::isUnset($request->thingModelJson)) {
            $query['ThingModelJson'] = $request->thingModelJson;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateThingModel',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateThingModelResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        if (!Utils::isUnset($request->scriptContent)) {
            $query['ScriptContent'] = $request->scriptContent;
        }
        if (!Utils::isUnset($request->scriptType)) {
            $query['ScriptType'] = $request->scriptType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateThingScript',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateThingScriptResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->dstTopic)) {
            $query['DstTopic'] = $request->dstTopic;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->srcTopic)) {
            $query['SrcTopic'] = $request->srcTopic;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateTopicRouteTable',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateTopicRouteTableResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->iotId)) {
            $query['IotId'] = $request->iotId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteClientIds',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteClientIdsResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteConsumerGroup',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteConsumerGroupResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->consumerGroupId)) {
            $query['ConsumerGroupId'] = $request->consumerGroupId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteConsumerGroupSubscribeRelation',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteConsumerGroupSubscribeRelationResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param DeleteDeviceRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteDeviceResponse
     */
    public function deleteDeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->deviceName)) {
            $query['DeviceName'] = $request->deviceName;
        }
        if (!Utils::isUnset($request->iotId)) {
            $query['IotId'] = $request->iotId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteDevice',
            'version'     => '2018-01-20',
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
     * @param DeleteDeviceDistributeJobRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DeleteDeviceDistributeJobResponse
     */
    public function deleteDeviceDistributeJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteDeviceDistributeJob',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDeviceDistributeJobResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteDeviceDynamicGroup',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDeviceDynamicGroupResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->deviceName)) {
            $query['DeviceName'] = $request->deviceName;
        }
        if (!Utils::isUnset($request->fileId)) {
            $query['FileId'] = $request->fileId;
        }
        if (!Utils::isUnset($request->iotId)) {
            $query['IotId'] = $request->iotId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteDeviceFile',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDeviceFileResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteDeviceGroup',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDeviceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->deviceName)) {
            $query['DeviceName'] = $request->deviceName;
        }
        if (!Utils::isUnset($request->iotId)) {
            $query['IotId'] = $request->iotId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        if (!Utils::isUnset($request->propKey)) {
            $query['PropKey'] = $request->propKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteDeviceProp',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDevicePropResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $body = [];
        if (!Utils::isUnset($request->deviceSpeechList)) {
            $body['DeviceSpeechList'] = $request->deviceSpeechList;
        }
        if (!Utils::isUnset($request->iotId)) {
            $body['IotId'] = $request->iotId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $body['IotInstanceId'] = $request->iotInstanceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteDeviceSpeech',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDeviceSpeechResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->tunnelId)) {
            $query['TunnelId'] = $request->tunnelId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteDeviceTunnel',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDeviceTunnelResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->driverId)) {
            $query['DriverId'] = $request->driverId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteEdgeDriver',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteEdgeDriverResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->driverId)) {
            $query['DriverId'] = $request->driverId;
        }
        if (!Utils::isUnset($request->driverVersion)) {
            $query['DriverVersion'] = $request->driverVersion;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteEdgeDriverVersion',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteEdgeDriverVersionResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteEdgeInstance',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteEdgeInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->routeId)) {
            $query['RouteId'] = $request->routeId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteEdgeInstanceMessageRouting',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteEdgeInstanceMessageRoutingResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteJob',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteJobResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->firmwareId)) {
            $query['FirmwareId'] = $request->firmwareId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteOTAFirmware',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteOTAFirmwareResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->moduleName)) {
            $query['ModuleName'] = $request->moduleName;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteOTAModule',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteOTAModuleResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param DeleteProductRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteProductResponse
     */
    public function deleteProductWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteProduct',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteProductResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        if (!Utils::isUnset($request->productTagKey)) {
            $query['ProductTagKey'] = $request->productTagKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteProductTags',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteProductTagsResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->topicId)) {
            $query['TopicId'] = $request->topicId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteProductTopic',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteProductTopicResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->ruleId)) {
            $query['RuleId'] = $request->ruleId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteRule',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteRuleResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->actionId)) {
            $query['ActionId'] = $request->actionId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteRuleAction',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteRuleActionResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->ruleId)) {
            $query['RuleId'] = $request->ruleId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteSceneRule',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteSceneRuleResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param DeleteSoundCodeRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteSoundCodeResponse
     */
    public function deleteSoundCodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->iotInstanceId)) {
            $body['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->soundCode)) {
            $body['SoundCode'] = $request->soundCode;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteSoundCode',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteSoundCodeResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param DeleteSpeechRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteSpeechResponse
     */
    public function deleteSpeechWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->iotInstanceId)) {
            $body['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->speechCodeList)) {
            $body['SpeechCodeList'] = $request->speechCodeList;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteSpeech',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteSpeechResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->domainId)) {
            $body['DomainId'] = $request->domainId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $body['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteStudioAppDomainOpen',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteStudioAppDomainOpenResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteSubscribeRelation',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteSubscribeRelationResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->eventIdentifier)) {
            $query['EventIdentifier'] = $request->eventIdentifier;
        }
        if (!Utils::isUnset($request->functionBlockId)) {
            $query['FunctionBlockId'] = $request->functionBlockId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        if (!Utils::isUnset($request->propertyIdentifier)) {
            $query['PropertyIdentifier'] = $request->propertyIdentifier;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->serviceIdentifier)) {
            $query['ServiceIdentifier'] = $request->serviceIdentifier;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteThingModel',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteThingModelResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->dstTopic)) {
            $query['DstTopic'] = $request->dstTopic;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->srcTopic)) {
            $query['SrcTopic'] = $request->srcTopic;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteTopicRouteTable',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteTopicRouteTableResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param DisableDeviceTunnelRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DisableDeviceTunnelResponse
     */
    public function disableDeviceTunnelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->deviceName)) {
            $query['DeviceName'] = $request->deviceName;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DisableDeviceTunnel',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DisableDeviceTunnelResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->deviceName)) {
            $query['DeviceName'] = $request->deviceName;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DisableDeviceTunnelShare',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DisableDeviceTunnelShareResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->ruleId)) {
            $query['RuleId'] = $request->ruleId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DisableSceneRule',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DisableSceneRuleResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->deviceName)) {
            $query['DeviceName'] = $request->deviceName;
        }
        if (!Utils::isUnset($request->iotId)) {
            $query['IotId'] = $request->iotId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DisableThing',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DisableThingResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->deviceName)) {
            $query['DeviceName'] = $request->deviceName;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'EnableDeviceTunnel',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EnableDeviceTunnelResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->deviceName)) {
            $query['DeviceName'] = $request->deviceName;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'EnableDeviceTunnelShare',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EnableDeviceTunnelShareResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->ruleId)) {
            $query['RuleId'] = $request->ruleId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'EnableSceneRule',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EnableSceneRuleResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->deviceName)) {
            $query['DeviceName'] = $request->deviceName;
        }
        if (!Utils::isUnset($request->iotId)) {
            $query['IotId'] = $request->iotId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'EnableThing',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EnableThingResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GenerateDeviceNameListURL',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GenerateDeviceNameListURLResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->bizCode)) {
            $query['BizCode'] = $request->bizCode;
        }
        if (!Utils::isUnset($request->fileName)) {
            $query['FileName'] = $request->fileName;
        }
        if (!Utils::isUnset($request->fileSuffix)) {
            $query['FileSuffix'] = $request->fileSuffix;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GenerateFileUploadURL',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GenerateFileUploadURLResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->fileSuffix)) {
            $query['FileSuffix'] = $request->fileSuffix;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GenerateOTAUploadURL',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GenerateOTAUploadURLResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $body = [];
        if (!Utils::isUnset($request->apiSrn)) {
            $body['ApiSrn'] = $request->apiSrn;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $body['IotInstanceId'] = $request->iotInstanceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetDataAPIServiceDetail',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDataAPIServiceDetailResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param GetDeviceShadowRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetDeviceShadowResponse
     */
    public function getDeviceShadowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->deviceName)) {
            $query['DeviceName'] = $request->deviceName;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDeviceShadow',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDeviceShadowResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->deviceName)) {
            $query['DeviceName'] = $request->deviceName;
        }
        if (!Utils::isUnset($request->iotId)) {
            $query['IotId'] = $request->iotId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDeviceStatus',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDeviceStatusResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->deviceName)) {
            $query['DeviceName'] = $request->deviceName;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDeviceTunnelShareStatus',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDeviceTunnelShareStatusResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->deviceName)) {
            $query['DeviceName'] = $request->deviceName;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDeviceTunnelStatus',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDeviceTunnelStatusResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param GetEdgeDriverVersionRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetEdgeDriverVersionResponse
     */
    public function getEdgeDriverVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->driverId)) {
            $query['DriverId'] = $request->driverId;
        }
        if (!Utils::isUnset($request->driverVersion)) {
            $query['DriverVersion'] = $request->driverVersion;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetEdgeDriverVersion',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetEdgeDriverVersionResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetEdgeInstance',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetEdgeInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->deploymentId)) {
            $query['DeploymentId'] = $request->deploymentId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetEdgeInstanceDeployment',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetEdgeInstanceDeploymentResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->routeId)) {
            $query['RouteId'] = $request->routeId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetEdgeInstanceMessageRouting',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetEdgeInstanceMessageRoutingResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->deviceName)) {
            $query['DeviceName'] = $request->deviceName;
        }
        if (!Utils::isUnset($request->iotId)) {
            $query['IotId'] = $request->iotId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetGatewayBySubDevice',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetGatewayBySubDeviceResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetLoraNodesTask',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetLoraNodesTaskResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param GetRuleRequest $request
     * @param RuntimeOptions $runtime
     *
     * @return GetRuleResponse
     */
    public function getRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->ruleId)) {
            $query['RuleId'] = $request->ruleId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetRule',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetRuleResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->actionId)) {
            $query['ActionId'] = $request->actionId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetRuleAction',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetRuleActionResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->ruleId)) {
            $query['RuleId'] = $request->ruleId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetSceneRule',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetSceneRuleResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param GetSoundCodeAudioRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetSoundCodeAudioResponse
     */
    public function getSoundCodeAudioWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->iotInstanceId)) {
            $body['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->soundCodeList)) {
            $body['SoundCodeList'] = $request->soundCodeList;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetSoundCodeAudio',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetSoundCodeAudioResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param GetSpeechDeviceDetailRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetSpeechDeviceDetailResponse
     */
    public function getSpeechDeviceDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->iotId)) {
            $body['IotId'] = $request->iotId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $body['IotInstanceId'] = $request->iotInstanceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetSpeechDeviceDetail',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetSpeechDeviceDetailResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param RuntimeOptions $runtime
     *
     * @return GetSpeechVoiceResponse
     */
    public function getSpeechVoiceWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'GetSpeechVoice',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetSpeechVoiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return GetSpeechVoiceResponse
     */
    public function getSpeechVoice()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSpeechVoiceWithOptions($runtime);
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
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $body['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetStudioAppTokenOpen',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetStudioAppTokenOpenResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->functionBlockId)) {
            $query['FunctionBlockId'] = $request->functionBlockId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->modelVersion)) {
            $query['ModelVersion'] = $request->modelVersion;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        if (!Utils::isUnset($request->simple)) {
            $query['Simple'] = $request->simple;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetThingModelTsl',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetThingModelTslResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->functionBlockId)) {
            $query['FunctionBlockId'] = $request->functionBlockId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->modelVersion)) {
            $query['ModelVersion'] = $request->modelVersion;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->simple)) {
            $query['Simple'] = $request->simple;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetThingModelTslPublished',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetThingModelTslPublishedResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetThingScript',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetThingScriptResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->categoryKey)) {
            $query['CategoryKey'] = $request->categoryKey;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetThingTemplate',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetThingTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->deviceName)) {
            $query['DeviceName'] = $request->deviceName;
        }
        if (!Utils::isUnset($request->iotId)) {
            $query['IotId'] = $request->iotId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetThingTopo',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetThingTopoResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->thingList)) {
            $query['ThingList'] = $request->thingList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GisQueryDeviceLocation',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GisQueryDeviceLocationResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->deviceName)) {
            $query['DeviceName'] = $request->deviceName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->mapMatch)) {
            $query['MapMatch'] = $request->mapMatch;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GisSearchDeviceTrace',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GisSearchDeviceTraceResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ImportThingModelTslRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ImportThingModelTslResponse
     */
    public function importThingModelTslWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->functionBlockId)) {
            $query['FunctionBlockId'] = $request->functionBlockId;
        }
        if (!Utils::isUnset($request->functionBlockName)) {
            $query['FunctionBlockName'] = $request->functionBlockName;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->tslStr)) {
            $query['TslStr'] = $request->tslStr;
        }
        if (!Utils::isUnset($request->tslUrl)) {
            $query['TslUrl'] = $request->tslUrl;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ImportThingModelTsl',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ImportThingModelTslResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $body = [];
        if (!Utils::isUnset($request->apiSrn)) {
            $body['ApiSrn'] = $request->apiSrn;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $body['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->param)) {
            $body['Param'] = $request->param;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'InvokeDataAPIService',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return InvokeDataAPIServiceResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->args)) {
            $query['Args'] = $request->args;
        }
        if (!Utils::isUnset($request->deviceName)) {
            $query['DeviceName'] = $request->deviceName;
        }
        if (!Utils::isUnset($request->identifier)) {
            $query['Identifier'] = $request->identifier;
        }
        if (!Utils::isUnset($request->iotId)) {
            $query['IotId'] = $request->iotId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'InvokeThingService',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return InvokeThingServiceResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->args)) {
            $query['Args'] = $request->args;
        }
        if (!Utils::isUnset($request->deviceName)) {
            $query['DeviceName'] = $request->deviceName;
        }
        if (!Utils::isUnset($request->identifier)) {
            $query['Identifier'] = $request->identifier;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'InvokeThingsService',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return InvokeThingsServiceResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->apiPath)) {
            $query['ApiPath'] = $request->apiPath;
        }
        if (!Utils::isUnset($request->condition)) {
            $query['Condition'] = $request->condition;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->isoId)) {
            $query['IsoId'] = $request->isoId;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAnalyticsData',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAnalyticsDataResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ListDeviceDistributeJobRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListDeviceDistributeJobResponse
     */
    public function listDeviceDistributeJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->targetUid)) {
            $query['TargetUid'] = $request->targetUid;
        }
        $body = [];
        if (!Utils::isUnset($request->jobId)) {
            $body['JobId'] = $request->jobId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListDeviceDistributeJob',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListDeviceDistributeJobResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->deviceName)) {
            $query['DeviceName'] = $request->deviceName;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        if (!Utils::isUnset($request->sourceInstanceId)) {
            $query['SourceInstanceId'] = $request->sourceInstanceId;
        }
        if (!Utils::isUnset($request->targetUid)) {
            $query['TargetUid'] = $request->targetUid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDistributedDevice',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListDistributedDeviceResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        if (!Utils::isUnset($request->sourceInstanceId)) {
            $query['SourceInstanceId'] = $request->sourceInstanceId;
        }
        if (!Utils::isUnset($request->targetInstanceId)) {
            $query['TargetInstanceId'] = $request->targetInstanceId;
        }
        if (!Utils::isUnset($request->targetUid)) {
            $query['TargetUid'] = $request->targetUid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDistributedProduct',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListDistributedProductResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListJob',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListJobResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->destVersion)) {
            $query['DestVersion'] = $request->destVersion;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListOTAFirmware',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListOTAFirmwareResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->deviceName)) {
            $query['DeviceName'] = $request->deviceName;
        }
        if (!Utils::isUnset($request->firmwareId)) {
            $query['FirmwareId'] = $request->firmwareId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListOTAJobByDevice',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListOTAJobByDeviceResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->firmwareId)) {
            $query['FirmwareId'] = $request->firmwareId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListOTAJobByFirmware',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListOTAJobByFirmwareResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListOTAModuleByProduct',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListOTAModuleByProductResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->deviceName)) {
            $query['DeviceName'] = $request->deviceName;
        }
        if (!Utils::isUnset($request->iotId)) {
            $query['IotId'] = $request->iotId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListOTAModuleVersionsByDevice',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListOTAModuleVersionsByDeviceResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->deviceNames)) {
            $query['DeviceNames'] = $request->deviceNames;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->taskStatus)) {
            $query['TaskStatus'] = $request->taskStatus;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListOTATaskByJob',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListOTATaskByJobResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->deviceName)) {
            $query['DeviceName'] = $request->deviceName;
        }
        if (!Utils::isUnset($request->iotId)) {
            $query['IotId'] = $request->iotId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->moduleName)) {
            $query['ModuleName'] = $request->moduleName;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        if (!Utils::isUnset($request->taskStatus)) {
            $query['TaskStatus'] = $request->taskStatus;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListOTAUnfinishedTaskByDevice',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListOTAUnfinishedTaskByDeviceResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ListProductByTagsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListProductByTagsResponse
     */
    public function listProductByTagsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->productTag)) {
            $query['ProductTag'] = $request->productTag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListProductByTags',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListProductByTagsResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListProductTags',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListProductTagsResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListRule',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListRuleResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->ruleId)) {
            $query['RuleId'] = $request->ruleId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListRuleActions',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListRuleActionsResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ListTaskRequest $tmpReq
     * @param RuntimeOptions  $runtime
     *
     * @return ListTaskResponse
     */
    public function listTaskWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListTaskShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->device)) {
            $request->deviceShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->device, 'Device', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->deviceShrink)) {
            $query['Device'] = $request->deviceShrink;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->limit)) {
            $query['Limit'] = $request->limit;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTask',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListTaskResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListThingModelVersion',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListThingModelVersionResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListThingTemplates',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListThingTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->deviceListStr)) {
            $query['DeviceListStr'] = $request->deviceListStr;
        }
        if (!Utils::isUnset($request->gwDeviceName)) {
            $query['GwDeviceName'] = $request->gwDeviceName;
        }
        if (!Utils::isUnset($request->gwIotId)) {
            $query['GwIotId'] = $request->gwIotId;
        }
        if (!Utils::isUnset($request->gwProductKey)) {
            $query['GwProductKey'] = $request->gwProductKey;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'NotifyAddThingTopo',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return NotifyAddThingTopoResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'OpenIotService',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OpenIotServiceResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param PrintByTemplateRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return PrintByTemplateResponse
     */
    public function printByTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->deviceName)) {
            $body['DeviceName'] = $request->deviceName;
        }
        if (!Utils::isUnset($request->historyPrintTopic)) {
            $body['HistoryPrintTopic'] = $request->historyPrintTopic;
        }
        if (!Utils::isUnset($request->iotId)) {
            $body['IotId'] = $request->iotId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $body['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->paramsJsonString)) {
            $body['ParamsJsonString'] = $request->paramsJsonString;
        }
        if (!Utils::isUnset($request->productKey)) {
            $body['ProductKey'] = $request->productKey;
        }
        if (!Utils::isUnset($request->templateBizCode)) {
            $body['TemplateBizCode'] = $request->templateBizCode;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'PrintByTemplate',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PrintByTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->correlationData)) {
            $query['CorrelationData'] = $request->correlationData;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->messageContent)) {
            $query['MessageContent'] = $request->messageContent;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        if (!Utils::isUnset($request->qos)) {
            $query['Qos'] = $request->qos;
        }
        if (!Utils::isUnset($request->responseTopic)) {
            $query['ResponseTopic'] = $request->responseTopic;
        }
        if (!Utils::isUnset($request->topicFullName)) {
            $query['TopicFullName'] = $request->topicFullName;
        }
        if (!Utils::isUnset($request->userProp)) {
            $query['UserProp'] = $request->userProp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'Pub',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PubResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->messageContent)) {
            $query['MessageContent'] = $request->messageContent;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        if (!Utils::isUnset($request->topicFullName)) {
            $query['TopicFullName'] = $request->topicFullName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PubBroadcast',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PubBroadcastResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param PublishStudioAppRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return PublishStudioAppResponse
     */
    public function publishStudioAppWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $body['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'PublishStudioApp',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PublishStudioAppResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->modelVersion)) {
            $query['ModelVersion'] = $request->modelVersion;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PublishThingModel',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PublishThingModelResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        $body = [];
        if (!Utils::isUnset($request->deviceName)) {
            $body['DeviceName'] = $request->deviceName;
        }
        if (!Utils::isUnset($request->iotId)) {
            $body['IotId'] = $request->iotId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $body['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->productKey)) {
            $body['ProductKey'] = $request->productKey;
        }
        if (!Utils::isUnset($request->projectCode)) {
            $body['ProjectCode'] = $request->projectCode;
        }
        if (!Utils::isUnset($request->pushMode)) {
            $body['PushMode'] = $request->pushMode;
        }
        if (!Utils::isUnset($request->speechCodeList)) {
            $body['SpeechCodeList'] = $request->speechCodeList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'PushSpeech',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PushSpeechResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->applyId)) {
            $query['ApplyId'] = $request->applyId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryBatchRegisterDeviceStatus',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryBatchRegisterDeviceStatusResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->applyId)) {
            $query['ApplyId'] = $request->applyId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryCertUrlByApplyId',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryCertUrlByApplyIdResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->iotId)) {
            $query['IotId'] = $request->iotId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryClientIds',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryClientIdsResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryConsumerGroupByGroupId',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryConsumerGroupByGroupIdResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->fuzzy)) {
            $query['Fuzzy'] = $request->fuzzy;
        }
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryConsumerGroupList',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryConsumerGroupListResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryConsumerGroupStatus',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryConsumerGroupStatusResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->ruleId)) {
            $query['RuleId'] = $request->ruleId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->traceId)) {
            $query['TraceId'] = $request->traceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryDetailSceneRuleLog',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryDetailSceneRuleLogResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryDevice',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryDeviceResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->SQL)) {
            $query['SQL'] = $request->SQL;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryDeviceBySQL',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryDeviceBySQLResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryDeviceByStatus',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryDeviceByStatusResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryDeviceByTags',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryDeviceByTagsResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->deviceName)) {
            $query['DeviceName'] = $request->deviceName;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryDeviceCert',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryDeviceCertResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->deviceName)) {
            $query['DeviceName'] = $request->deviceName;
        }
        if (!Utils::isUnset($request->functionBlockId)) {
            $query['FunctionBlockId'] = $request->functionBlockId;
        }
        if (!Utils::isUnset($request->identifier)) {
            $query['Identifier'] = $request->identifier;
        }
        if (!Utils::isUnset($request->iotId)) {
            $query['IotId'] = $request->iotId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryDeviceDesiredProperty',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryDeviceDesiredPropertyResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->deviceName)) {
            $query['DeviceName'] = $request->deviceName;
        }
        if (!Utils::isUnset($request->iotId)) {
            $query['IotId'] = $request->iotId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryDeviceDetail',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryDeviceDetailResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryDeviceDistributeDetail',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryDeviceDistributeDetailResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryDeviceDistributeJob',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryDeviceDistributeJobResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->asc)) {
            $query['Asc'] = $request->asc;
        }
        if (!Utils::isUnset($request->deviceName)) {
            $query['DeviceName'] = $request->deviceName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->eventType)) {
            $query['EventType'] = $request->eventType;
        }
        if (!Utils::isUnset($request->identifier)) {
            $query['Identifier'] = $request->identifier;
        }
        if (!Utils::isUnset($request->iotId)) {
            $query['IotId'] = $request->iotId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryDeviceEventData',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryDeviceEventDataResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->deviceName)) {
            $query['DeviceName'] = $request->deviceName;
        }
        if (!Utils::isUnset($request->fileId)) {
            $query['FileId'] = $request->fileId;
        }
        if (!Utils::isUnset($request->iotId)) {
            $query['IotId'] = $request->iotId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryDeviceFile',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryDeviceFileResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->deviceName)) {
            $query['DeviceName'] = $request->deviceName;
        }
        if (!Utils::isUnset($request->iotId)) {
            $query['IotId'] = $request->iotId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryDeviceFileList',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryDeviceFileListResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->deviceName)) {
            $query['DeviceName'] = $request->deviceName;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryDeviceGroupByDevice',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryDeviceGroupByDeviceResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryDeviceGroupByTags',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryDeviceGroupByTagsResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->groupType)) {
            $query['GroupType'] = $request->groupType;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryDeviceGroupInfo',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryDeviceGroupInfoResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
        }
        if (!Utils::isUnset($request->groupTypes)) {
            $query['GroupTypes'] = $request->groupTypes;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->superGroupId)) {
            $query['SuperGroupId'] = $request->superGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryDeviceGroupList',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryDeviceGroupListResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->groupType)) {
            $query['GroupType'] = $request->groupType;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryDeviceGroupTagList',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryDeviceGroupTagListResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->deviceName)) {
            $query['DeviceName'] = $request->deviceName;
        }
        if (!Utils::isUnset($request->iotId)) {
            $query['IotId'] = $request->iotId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryDeviceInfo',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryDeviceInfoResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryDeviceListByDeviceGroup',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryDeviceListByDeviceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->asc)) {
            $query['Asc'] = $request->asc;
        }
        if (!Utils::isUnset($request->deviceName)) {
            $query['DeviceName'] = $request->deviceName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->identifier)) {
            $query['Identifier'] = $request->identifier;
        }
        if (!Utils::isUnset($request->iotId)) {
            $query['IotId'] = $request->iotId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->nextPageToken)) {
            $query['NextPageToken'] = $request->nextPageToken;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryDeviceOriginalEventData',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryDeviceOriginalEventDataResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->asc)) {
            $query['Asc'] = $request->asc;
        }
        if (!Utils::isUnset($request->deviceName)) {
            $query['DeviceName'] = $request->deviceName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->identifier)) {
            $query['Identifier'] = $request->identifier;
        }
        if (!Utils::isUnset($request->iotId)) {
            $query['IotId'] = $request->iotId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->nextPageToken)) {
            $query['NextPageToken'] = $request->nextPageToken;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryDeviceOriginalPropertyData',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryDeviceOriginalPropertyDataResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->asc)) {
            $query['Asc'] = $request->asc;
        }
        if (!Utils::isUnset($request->deviceName)) {
            $query['DeviceName'] = $request->deviceName;
        }
        if (!Utils::isUnset($request->iotId)) {
            $query['IotId'] = $request->iotId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->nextPageToken)) {
            $query['NextPageToken'] = $request->nextPageToken;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryDeviceOriginalPropertyStatus',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryDeviceOriginalPropertyStatusResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->asc)) {
            $query['Asc'] = $request->asc;
        }
        if (!Utils::isUnset($request->deviceName)) {
            $query['DeviceName'] = $request->deviceName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->identifier)) {
            $query['Identifier'] = $request->identifier;
        }
        if (!Utils::isUnset($request->iotId)) {
            $query['IotId'] = $request->iotId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->nextPageToken)) {
            $query['NextPageToken'] = $request->nextPageToken;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryDeviceOriginalServiceData',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryDeviceOriginalServiceDataResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->deviceName)) {
            $query['DeviceName'] = $request->deviceName;
        }
        if (!Utils::isUnset($request->iotId)) {
            $query['IotId'] = $request->iotId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryDeviceProp',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryDevicePropResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->asc)) {
            $query['Asc'] = $request->asc;
        }
        if (!Utils::isUnset($request->deviceName)) {
            $query['DeviceName'] = $request->deviceName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->identifier)) {
            $query['Identifier'] = $request->identifier;
        }
        if (!Utils::isUnset($request->iotId)) {
            $query['IotId'] = $request->iotId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryDevicePropertiesData',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryDevicePropertiesDataResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->asc)) {
            $query['Asc'] = $request->asc;
        }
        if (!Utils::isUnset($request->deviceName)) {
            $query['DeviceName'] = $request->deviceName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->identifier)) {
            $query['Identifier'] = $request->identifier;
        }
        if (!Utils::isUnset($request->iotId)) {
            $query['IotId'] = $request->iotId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryDevicePropertyData',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryDevicePropertyDataResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->deviceName)) {
            $query['DeviceName'] = $request->deviceName;
        }
        if (!Utils::isUnset($request->functionBlockId)) {
            $query['FunctionBlockId'] = $request->functionBlockId;
        }
        if (!Utils::isUnset($request->iotId)) {
            $query['IotId'] = $request->iotId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryDevicePropertyStatus',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryDevicePropertyStatusResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->asc)) {
            $query['Asc'] = $request->asc;
        }
        if (!Utils::isUnset($request->deviceName)) {
            $query['DeviceName'] = $request->deviceName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->identifier)) {
            $query['Identifier'] = $request->identifier;
        }
        if (!Utils::isUnset($request->iotId)) {
            $query['IotId'] = $request->iotId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryDeviceServiceData',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryDeviceServiceDataResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $body = [];
        if (!Utils::isUnset($request->iotId)) {
            $body['IotId'] = $request->iotId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $body['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->pageId)) {
            $body['PageId'] = $request->pageId;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryDeviceSpeech',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryDeviceSpeechResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryDeviceStatistics',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryDeviceStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param QueryDeviceTunnelRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return QueryDeviceTunnelResponse
     */
    public function queryDeviceTunnelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->tunnelId)) {
            $query['TunnelId'] = $request->tunnelId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryDeviceTunnel',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryDeviceTunnelResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param QueryDynamicGroupDevicesRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return QueryDynamicGroupDevicesResponse
     */
    public function queryDynamicGroupDevicesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->deviceName)) {
            $query['DeviceName'] = $request->deviceName;
        }
        if (!Utils::isUnset($request->fuzzyName)) {
            $query['FuzzyName'] = $request->fuzzyName;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryDynamicGroupDevices',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryDynamicGroupDevicesResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->driverName)) {
            $query['DriverName'] = $request->driverName;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryEdgeDriver',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryEdgeDriverResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->driverId)) {
            $query['DriverId'] = $request->driverId;
        }
        if (!Utils::isUnset($request->driverVersion)) {
            $query['DriverVersion'] = $request->driverVersion;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->versionState)) {
            $query['VersionState'] = $request->versionState;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryEdgeDriverVersion',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryEdgeDriverVersionResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryEdgeInstance',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryEdgeInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->channelName)) {
            $query['ChannelName'] = $request->channelName;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->driverId)) {
            $query['DriverId'] = $request->driverId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryEdgeInstanceChannel',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryEdgeInstanceChannelResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryEdgeInstanceDevice',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryEdgeInstanceDeviceResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->channelId)) {
            $query['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->driverId)) {
            $query['DriverId'] = $request->driverId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryEdgeInstanceDeviceByDriver',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryEdgeInstanceDeviceByDriverResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryEdgeInstanceDriver',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryEdgeInstanceDriverResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryEdgeInstanceGateway',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryEdgeInstanceGatewayResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
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
            'action'      => 'QueryEdgeInstanceHistoricDeployment',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryEdgeInstanceHistoricDeploymentResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryEdgeInstanceMessageRouting',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryEdgeInstanceMessageRoutingResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryEdgeInstanceSceneRule',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryEdgeInstanceSceneRuleResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param QueryJobRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return QueryJobResponse
     */
    public function queryJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryJob',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryJobResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryJobStatistics',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryJobStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param QueryLoRaJoinPermissionsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return QueryLoRaJoinPermissionsResponse
     */
    public function queryLoRaJoinPermissionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryLoRaJoinPermissions',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryLoRaJoinPermissionsResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->uniMsgId)) {
            $query['UniMsgId'] = $request->uniMsgId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryMessageInfo',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryMessageInfoResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->firmwareId)) {
            $query['FirmwareId'] = $request->firmwareId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryOTAFirmware',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryOTAFirmwareResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryOTAJob',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryOTAJobResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->applyId)) {
            $query['ApplyId'] = $request->applyId;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryPageByApplyId',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryPageByApplyIdResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryProduct',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryProductResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryProductCertInfo',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryProductCertInfoResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->aliyunCommodityCode)) {
            $query['AliyunCommodityCode'] = $request->aliyunCommodityCode;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryProductList',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryProductListResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryProductTopic',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryProductTopicResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param QuerySceneRuleRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return QuerySceneRuleResponse
     */
    public function querySceneRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->ruleName)) {
            $query['RuleName'] = $request->ruleName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QuerySceneRule',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QuerySceneRuleResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param QuerySolutionDeviceGroupPageRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return QuerySolutionDeviceGroupPageResponse
     */
    public function querySolutionDeviceGroupPageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fuzzyGroupName)) {
            $query['FuzzyGroupName'] = $request->fuzzyGroupName;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->pageId)) {
            $query['PageId'] = $request->pageId;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->projectCode)) {
            $query['ProjectCode'] = $request->projectCode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QuerySolutionDeviceGroupPage',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QuerySolutionDeviceGroupPageResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param QuerySoundCodeListRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return QuerySoundCodeListResponse
     */
    public function querySoundCodeListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->iotInstanceId)) {
            $body['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->pageId)) {
            $body['PageId'] = $request->pageId;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QuerySoundCodeList',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QuerySoundCodeListResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param QuerySpeechRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return QuerySpeechResponse
     */
    public function querySpeechWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->iotInstanceId)) {
            $body['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->speechCode)) {
            $body['SpeechCode'] = $request->speechCode;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QuerySpeech',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QuerySpeechResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $body = [];
        if (!Utils::isUnset($request->availableSpace)) {
            $body['AvailableSpace'] = $request->availableSpace;
        }
        if (!Utils::isUnset($request->availableSpaceScope)) {
            $body['AvailableSpaceScope'] = $request->availableSpaceScope;
        }
        if (!Utils::isUnset($request->deviceName)) {
            $body['DeviceName'] = $request->deviceName;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $body['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->pageId)) {
            $body['PageId'] = $request->pageId;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->projectCode)) {
            $body['ProjectCode'] = $request->projectCode;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QuerySpeechDevice',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QuerySpeechDeviceResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param QuerySpeechListRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return QuerySpeechListResponse
     */
    public function querySpeechListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->audioFormat)) {
            $body['AudioFormat'] = $request->audioFormat;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $body['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->pageId)) {
            $body['PageId'] = $request->pageId;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->projectCode)) {
            $body['ProjectCode'] = $request->projectCode;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QuerySpeechList',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QuerySpeechListResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->jobCode)) {
            $query['JobCode'] = $request->jobCode;
        }
        $body = [];
        if (!Utils::isUnset($request->iotInstanceId)) {
            $body['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->pageId)) {
            $body['PageId'] = $request->pageId;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->projectCode)) {
            $body['ProjectCode'] = $request->projectCode;
        }
        if (!Utils::isUnset($request->pushMode)) {
            $body['PushMode'] = $request->pushMode;
        }
        if (!Utils::isUnset($request->statusList)) {
            $body['StatusList'] = $request->statusList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QuerySpeechPushJob',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QuerySpeechPushJobResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $body = [];
        if (!Utils::isUnset($request->deviceName)) {
            $body['DeviceName'] = $request->deviceName;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $body['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->jobCode)) {
            $body['JobCode'] = $request->jobCode;
        }
        if (!Utils::isUnset($request->pageId)) {
            $body['PageId'] = $request->pageId;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->status)) {
            $body['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QuerySpeechPushJobDevice',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QuerySpeechPushJobDeviceResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $body = [];
        if (!Utils::isUnset($request->iotInstanceId)) {
            $body['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->jobCode)) {
            $body['JobCode'] = $request->jobCode;
        }
        if (!Utils::isUnset($request->pageId)) {
            $body['PageId'] = $request->pageId;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QuerySpeechPushJobSpeech',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QuerySpeechPushJobSpeechResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $body['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryStudioAppDomainListOpen',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryStudioAppDomainListOpenResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $body = [];
        if (!Utils::isUnset($request->fuzzyName)) {
            $body['FuzzyName'] = $request->fuzzyName;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $body['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $body['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->types)) {
            $body['Types'] = $request->types;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryStudioAppList',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryStudioAppListResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $body['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->isRelease)) {
            $body['IsRelease'] = $request->isRelease;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $body['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryStudioAppPageListOpen',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryStudioAppPageListOpenResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $body = [];
        if (!Utils::isUnset($request->iotInstanceId)) {
            $body['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $body['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryStudioProjectList',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryStudioProjectListResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QuerySubscribeRelation',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QuerySubscribeRelationResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->ruleId)) {
            $query['RuleId'] = $request->ruleId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QuerySummarySceneRuleLog',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QuerySummarySceneRuleLogResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QuerySuperDeviceGroup',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QuerySuperDeviceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryTask',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryTaskResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->functionBlockId)) {
            $query['FunctionBlockId'] = $request->functionBlockId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->modelVersion)) {
            $query['ModelVersion'] = $request->modelVersion;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryThingModel',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryThingModelResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->functionBlockId)) {
            $query['FunctionBlockId'] = $request->functionBlockId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->modelVersion)) {
            $query['ModelVersion'] = $request->modelVersion;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryThingModelExtendConfig',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryThingModelExtendConfigResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->functionBlockId)) {
            $query['FunctionBlockId'] = $request->functionBlockId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->modelVersion)) {
            $query['ModelVersion'] = $request->modelVersion;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryThingModelExtendConfigPublished',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryThingModelExtendConfigPublishedResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->functionBlockId)) {
            $query['FunctionBlockId'] = $request->functionBlockId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->modelVersion)) {
            $query['ModelVersion'] = $request->modelVersion;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryThingModelPublished',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryThingModelPublishedResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->topic)) {
            $query['Topic'] = $request->topic;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryTopicReverseRouteTable',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryTopicReverseRouteTableResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->topic)) {
            $query['Topic'] = $request->topic;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryTopicRouteTable',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryTopicRouteTableResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param RRpcRequest    $request
     * @param RuntimeOptions $runtime
     *
     * @return RRpcResponse
     */
    public function rRpcWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->deviceName)) {
            $query['DeviceName'] = $request->deviceName;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        if (!Utils::isUnset($request->requestBase64Byte)) {
            $query['RequestBase64Byte'] = $request->requestBase64Byte;
        }
        if (!Utils::isUnset($request->timeout)) {
            $query['Timeout'] = $request->timeout;
        }
        if (!Utils::isUnset($request->topic)) {
            $query['Topic'] = $request->topic;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RRpc',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RRpcResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RRpcRequest $request
     *
     * @return RRpcResponse
     */
    public function rRpc($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->rRpcWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->deviceName)) {
            $query['DeviceName'] = $request->deviceName;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RefreshDeviceTunnelSharePassword',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RefreshDeviceTunnelSharePasswordResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $body['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RefreshStudioAppTokenOpen',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RefreshStudioAppTokenOpenResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->appKey)) {
            $query['AppKey'] = $request->appKey;
        }
        if (!Utils::isUnset($request->devEui)) {
            $query['DevEui'] = $request->devEui;
        }
        if (!Utils::isUnset($request->deviceName)) {
            $query['DeviceName'] = $request->deviceName;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->joinEui)) {
            $query['JoinEui'] = $request->joinEui;
        }
        if (!Utils::isUnset($request->loraNodeType)) {
            $query['LoraNodeType'] = $request->loraNodeType;
        }
        if (!Utils::isUnset($request->nickname)) {
            $query['Nickname'] = $request->nickname;
        }
        if (!Utils::isUnset($request->pinCode)) {
            $query['PinCode'] = $request->pinCode;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RegisterDevice',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RegisterDeviceResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->driverId)) {
            $query['DriverId'] = $request->driverId;
        }
        if (!Utils::isUnset($request->driverVersion)) {
            $query['DriverVersion'] = $request->driverVersion;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ReleaseEdgeDriverVersion',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ReleaseEdgeDriverVersionResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ReleaseProduct',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ReleaseProductResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->deviceName)) {
            $query['DeviceName'] = $request->deviceName;
        }
        if (!Utils::isUnset($request->iotId)) {
            $query['IotId'] = $request->iotId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RemoveThingTopo',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemoveThingTopoResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->currentGatewayId)) {
            $query['CurrentGatewayId'] = $request->currentGatewayId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->newGatewayId)) {
            $query['NewGatewayId'] = $request->newGatewayId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ReplaceEdgeInstanceGateway',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ReplaceEdgeInstanceGatewayResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RerunJob',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RerunJobResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ResetConsumerGroupPosition',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ResetConsumerGroupPositionResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->deviceName)) {
            $query['DeviceName'] = $request->deviceName;
        }
        if (!Utils::isUnset($request->iotId)) {
            $query['IotId'] = $request->iotId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ResetThing',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ResetThingResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ReupgradeOTATaskRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ReupgradeOTATaskResponse
     */
    public function reupgradeOTATaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ReupgradeOTATask',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ReupgradeOTATaskResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->deviceName)) {
            $query['DeviceName'] = $request->deviceName;
        }
        if (!Utils::isUnset($request->iotId)) {
            $query['IotId'] = $request->iotId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        if (!Utils::isUnset($request->props)) {
            $query['Props'] = $request->props;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SaveDeviceProp',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SaveDevicePropResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param SetDeviceDesiredPropertyRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return SetDeviceDesiredPropertyResponse
     */
    public function setDeviceDesiredPropertyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->deviceName)) {
            $query['DeviceName'] = $request->deviceName;
        }
        if (!Utils::isUnset($request->iotId)) {
            $query['IotId'] = $request->iotId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->items)) {
            $query['Items'] = $request->items;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        if (!Utils::isUnset($request->versions)) {
            $query['Versions'] = $request->versions;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetDeviceDesiredProperty',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetDeviceDesiredPropertyResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->groupType)) {
            $query['GroupType'] = $request->groupType;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->tagString)) {
            $query['TagString'] = $request->tagString;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetDeviceGroupTags',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetDeviceGroupTagsResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->deviceName)) {
            $query['DeviceName'] = $request->deviceName;
        }
        if (!Utils::isUnset($request->iotId)) {
            $query['IotId'] = $request->iotId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->items)) {
            $query['Items'] = $request->items;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetDeviceProperty',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetDevicePropertyResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->deviceName)) {
            $query['DeviceName'] = $request->deviceName;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->items)) {
            $query['Items'] = $request->items;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetDevicesProperty',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetDevicesPropertyResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->configs)) {
            $query['Configs'] = $request->configs;
        }
        if (!Utils::isUnset($request->driverId)) {
            $query['DriverId'] = $request->driverId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetEdgeInstanceDriverConfigs',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetEdgeInstanceDriverConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->issueModel)) {
            $query['IssueModel'] = $request->issueModel;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetProductCertInfo',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetProductCertInfoResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $body = [];
        if (!Utils::isUnset($request->iotInstanceId)) {
            $body['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->status)) {
            $body['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SetStudioProjectCooperation',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetStudioProjectCooperationResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->authMode)) {
            $body['AuthMode'] = $request->authMode;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $body['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SetupStudioAppAuthModeOpen',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetupStudioAppAuthModeOpenResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param SpeechByCombinationRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return SpeechByCombinationResponse
     */
    public function speechByCombinationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->audioFormat)) {
            $body['AudioFormat'] = $request->audioFormat;
        }
        if (!Utils::isUnset($request->combinationList)) {
            $body['CombinationList'] = $request->combinationList;
        }
        if (!Utils::isUnset($request->deviceName)) {
            $body['DeviceName'] = $request->deviceName;
        }
        if (!Utils::isUnset($request->iotId)) {
            $body['IotId'] = $request->iotId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $body['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->productKey)) {
            $body['ProductKey'] = $request->productKey;
        }
        if (!Utils::isUnset($request->speechId)) {
            $body['SpeechId'] = $request->speechId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SpeechByCombination',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SpeechByCombinationResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $body = [];
        if (!Utils::isUnset($request->audioFormat)) {
            $body['AudioFormat'] = $request->audioFormat;
        }
        if (!Utils::isUnset($request->deviceName)) {
            $body['DeviceName'] = $request->deviceName;
        }
        if (!Utils::isUnset($request->iotId)) {
            $body['IotId'] = $request->iotId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $body['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->productKey)) {
            $body['ProductKey'] = $request->productKey;
        }
        if (!Utils::isUnset($request->speechId)) {
            $body['SpeechId'] = $request->speechId;
        }
        if (!Utils::isUnset($request->speechRate)) {
            $body['SpeechRate'] = $request->speechRate;
        }
        if (!Utils::isUnset($request->text)) {
            $body['Text'] = $request->text;
        }
        if (!Utils::isUnset($request->voice)) {
            $body['Voice'] = $request->voice;
        }
        if (!Utils::isUnset($request->volume)) {
            $body['Volume'] = $request->volume;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SpeechBySynthesis',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SpeechBySynthesisResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param StartCpuRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return StartCpuResponse
     */
    public function startCpuWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->iotId)) {
            $query['IotId'] = $request->iotId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->targetValue)) {
            $query['TargetValue'] = $request->targetValue;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StartCpu',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StartCpuResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param StartCpuRequest $request
     *
     * @return StartCpuResponse
     */
    public function startCpu($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startCpuWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->ruleId)) {
            $query['RuleId'] = $request->ruleId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StartRule',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StartRuleResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param StopRuleRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return StopRuleResponse
     */
    public function stopRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->ruleId)) {
            $query['RuleId'] = $request->ruleId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StopRule',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StopRuleResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->deviceName)) {
            $query['DeviceName'] = $request->deviceName;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        if (!Utils::isUnset($request->topic)) {
            $query['Topic'] = $request->topic;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubscribeTopic',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubscribeTopicResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $body = [];
        if (!Utils::isUnset($request->audioFormat)) {
            $body['AudioFormat'] = $request->audioFormat;
        }
        if (!Utils::isUnset($request->combinationList)) {
            $body['CombinationList'] = $request->combinationList;
        }
        if (!Utils::isUnset($request->deviceName)) {
            $body['DeviceName'] = $request->deviceName;
        }
        if (!Utils::isUnset($request->iotId)) {
            $body['IotId'] = $request->iotId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $body['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->productKey)) {
            $body['ProductKey'] = $request->productKey;
        }
        if (!Utils::isUnset($request->speechId)) {
            $body['SpeechId'] = $request->speechId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SyncSpeechByCombination',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SyncSpeechByCombinationResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param TestSpeechRequest $tmpReq
     * @param RuntimeOptions    $runtime
     *
     * @return TestSpeechResponse
     */
    public function testSpeechWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new TestSpeechShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->soundCodeConfig)) {
            $request->soundCodeConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->soundCodeConfig, 'SoundCodeConfig', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->audioFormat)) {
            $body['AudioFormat'] = $request->audioFormat;
        }
        if (!Utils::isUnset($request->enableSoundCode)) {
            $body['EnableSoundCode'] = $request->enableSoundCode;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $body['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->projectCode)) {
            $body['ProjectCode'] = $request->projectCode;
        }
        if (!Utils::isUnset($request->soundCodeConfigShrink)) {
            $body['SoundCodeConfig'] = $request->soundCodeConfigShrink;
        }
        if (!Utils::isUnset($request->speechRate)) {
            $body['SpeechRate'] = $request->speechRate;
        }
        if (!Utils::isUnset($request->speechType)) {
            $body['SpeechType'] = $request->speechType;
        }
        if (!Utils::isUnset($request->text)) {
            $body['Text'] = $request->text;
        }
        if (!Utils::isUnset($request->voice)) {
            $body['Voice'] = $request->voice;
        }
        if (!Utils::isUnset($request->volume)) {
            $body['Volume'] = $request->volume;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'TestSpeech',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TestSpeechResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->clientId)) {
            $query['ClientId'] = $request->clientId;
        }
        if (!Utils::isUnset($request->iotId)) {
            $query['IotId'] = $request->iotId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'TransformClientId',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TransformClientIdResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->ruleId)) {
            $query['RuleId'] = $request->ruleId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'TriggerSceneRule',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TriggerSceneRuleResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->applicationId)) {
            $query['ApplicationId'] = $request->applicationId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UnbindApplicationFromEdgeInstance',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UnbindApplicationFromEdgeInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->driverId)) {
            $query['DriverId'] = $request->driverId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UnbindDriverFromEdgeInstance',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UnbindDriverFromEdgeInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param UnbindRoleFromEdgeInstanceRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return UnbindRoleFromEdgeInstanceResponse
     */
    public function unbindRoleFromEdgeInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UnbindRoleFromEdgeInstance',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UnbindRoleFromEdgeInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->ruleId)) {
            $query['RuleId'] = $request->ruleId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UnbindSceneRuleFromEdgeInstance',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UnbindSceneRuleFromEdgeInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->newGroupName)) {
            $query['NewGroupName'] = $request->newGroupName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateConsumerGroup',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateConsumerGroupResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param UpdateDeviceGroupRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateDeviceGroupResponse
     */
    public function updateDeviceGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupDesc)) {
            $query['GroupDesc'] = $request->groupDesc;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->groupType)) {
            $query['GroupType'] = $request->groupType;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateDeviceGroup',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateDeviceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->deltaUpdate)) {
            $query['DeltaUpdate'] = $request->deltaUpdate;
        }
        if (!Utils::isUnset($request->deviceName)) {
            $query['DeviceName'] = $request->deviceName;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        if (!Utils::isUnset($request->shadowMessage)) {
            $query['ShadowMessage'] = $request->shadowMessage;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateDeviceShadow',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateDeviceShadowResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->argument)) {
            $query['Argument'] = $request->argument;
        }
        if (!Utils::isUnset($request->configCheckRule)) {
            $query['ConfigCheckRule'] = $request->configCheckRule;
        }
        if (!Utils::isUnset($request->containerConfig)) {
            $query['ContainerConfig'] = $request->containerConfig;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->driverConfig)) {
            $query['DriverConfig'] = $request->driverConfig;
        }
        if (!Utils::isUnset($request->driverId)) {
            $query['DriverId'] = $request->driverId;
        }
        if (!Utils::isUnset($request->driverVersion)) {
            $query['DriverVersion'] = $request->driverVersion;
        }
        if (!Utils::isUnset($request->edgeVersion)) {
            $query['EdgeVersion'] = $request->edgeVersion;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->sourceConfig)) {
            $query['SourceConfig'] = $request->sourceConfig;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateEdgeDriverVersion',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateEdgeDriverVersionResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->bizEnable)) {
            $query['BizEnable'] = $request->bizEnable;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->spec)) {
            $query['Spec'] = $request->spec;
        }
        if (!Utils::isUnset($request->tags)) {
            $query['Tags'] = $request->tags;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateEdgeInstance',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateEdgeInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->channelId)) {
            $query['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->channelName)) {
            $query['ChannelName'] = $request->channelName;
        }
        if (!Utils::isUnset($request->configs)) {
            $query['Configs'] = $request->configs;
        }
        if (!Utils::isUnset($request->driverId)) {
            $query['DriverId'] = $request->driverId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateEdgeInstanceChannel',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateEdgeInstanceChannelResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->routeId)) {
            $query['RouteId'] = $request->routeId;
        }
        if (!Utils::isUnset($request->sourceData)) {
            $query['SourceData'] = $request->sourceData;
        }
        if (!Utils::isUnset($request->sourceType)) {
            $query['SourceType'] = $request->sourceType;
        }
        if (!Utils::isUnset($request->targetData)) {
            $query['TargetData'] = $request->targetData;
        }
        if (!Utils::isUnset($request->targetIotHubQos)) {
            $query['TargetIotHubQos'] = $request->targetIotHubQos;
        }
        if (!Utils::isUnset($request->targetType)) {
            $query['TargetType'] = $request->targetType;
        }
        if (!Utils::isUnset($request->topicFilter)) {
            $query['TopicFilter'] = $request->topicFilter;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateEdgeInstanceMessageRouting',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateEdgeInstanceMessageRoutingResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param UpdateJobRequest $tmpReq
     * @param RuntimeOptions   $runtime
     *
     * @return UpdateJobResponse
     */
    public function updateJobWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateJobShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->rolloutConfig)) {
            $request->rolloutConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->rolloutConfig, 'RolloutConfig', 'json');
        }
        if (!Utils::isUnset($tmpReq->timeoutConfig)) {
            $request->timeoutConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->timeoutConfig, 'TimeoutConfig', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->rolloutConfigShrink)) {
            $query['RolloutConfig'] = $request->rolloutConfigShrink;
        }
        if (!Utils::isUnset($request->timeoutConfigShrink)) {
            $query['TimeoutConfig'] = $request->timeoutConfigShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateJob',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateJobResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->aliasName)) {
            $query['AliasName'] = $request->aliasName;
        }
        if (!Utils::isUnset($request->desc)) {
            $query['Desc'] = $request->desc;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->moduleName)) {
            $query['ModuleName'] = $request->moduleName;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateOTAModule',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateOTAModuleResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param UpdateProductRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateProductResponse
     */
    public function updateProductWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        if (!Utils::isUnset($request->productName)) {
            $query['ProductName'] = $request->productName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateProduct',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateProductResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        if (!Utils::isUnset($request->propertyTimestampFilter)) {
            $query['PropertyTimestampFilter'] = $request->propertyTimestampFilter;
        }
        if (!Utils::isUnset($request->propertyValueFilter)) {
            $query['PropertyValueFilter'] = $request->propertyValueFilter;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateProductFilterConfig',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateProductFilterConfigResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        if (!Utils::isUnset($request->productTag)) {
            $query['ProductTag'] = $request->productTag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateProductTags',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateProductTagsResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->desc)) {
            $query['Desc'] = $request->desc;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->operation)) {
            $query['Operation'] = $request->operation;
        }
        if (!Utils::isUnset($request->topicId)) {
            $query['TopicId'] = $request->topicId;
        }
        if (!Utils::isUnset($request->topicShortName)) {
            $query['TopicShortName'] = $request->topicShortName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateProductTopic',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateProductTopicResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        if (!Utils::isUnset($request->ruleDesc)) {
            $query['RuleDesc'] = $request->ruleDesc;
        }
        if (!Utils::isUnset($request->ruleId)) {
            $query['RuleId'] = $request->ruleId;
        }
        if (!Utils::isUnset($request->select)) {
            $query['Select'] = $request->select;
        }
        if (!Utils::isUnset($request->shortTopic)) {
            $query['ShortTopic'] = $request->shortTopic;
        }
        if (!Utils::isUnset($request->topic)) {
            $query['Topic'] = $request->topic;
        }
        if (!Utils::isUnset($request->topicType)) {
            $query['TopicType'] = $request->topicType;
        }
        if (!Utils::isUnset($request->where)) {
            $query['Where'] = $request->where;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateRule',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateRuleResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->actionId)) {
            $query['ActionId'] = $request->actionId;
        }
        if (!Utils::isUnset($request->configuration)) {
            $query['Configuration'] = $request->configuration;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateRuleAction',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateRuleActionResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->ruleContent)) {
            $query['RuleContent'] = $request->ruleContent;
        }
        if (!Utils::isUnset($request->ruleDescription)) {
            $query['RuleDescription'] = $request->ruleDescription;
        }
        if (!Utils::isUnset($request->ruleId)) {
            $query['RuleId'] = $request->ruleId;
        }
        if (!Utils::isUnset($request->ruleName)) {
            $query['RuleName'] = $request->ruleName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateSceneRule',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateSceneRuleResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param UpdateSpeechRequest $tmpReq
     * @param RuntimeOptions      $runtime
     *
     * @return UpdateSpeechResponse
     */
    public function updateSpeechWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateSpeechShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->soundCodeConfig)) {
            $request->soundCodeConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->soundCodeConfig, 'SoundCodeConfig', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->enableSoundCode)) {
            $body['EnableSoundCode'] = $request->enableSoundCode;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $body['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->projectCode)) {
            $body['ProjectCode'] = $request->projectCode;
        }
        if (!Utils::isUnset($request->soundCodeConfigShrink)) {
            $body['SoundCodeConfig'] = $request->soundCodeConfigShrink;
        }
        if (!Utils::isUnset($request->speechCode)) {
            $body['SpeechCode'] = $request->speechCode;
        }
        if (!Utils::isUnset($request->speechRate)) {
            $body['SpeechRate'] = $request->speechRate;
        }
        if (!Utils::isUnset($request->voice)) {
            $body['Voice'] = $request->voice;
        }
        if (!Utils::isUnset($request->volume)) {
            $body['Volume'] = $request->volume;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateSpeech',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateSpeechResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->consumerGroupIds)) {
            $query['ConsumerGroupIds'] = $request->consumerGroupIds;
        }
        if (!Utils::isUnset($request->deviceDataFlag)) {
            $query['DeviceDataFlag'] = $request->deviceDataFlag;
        }
        if (!Utils::isUnset($request->deviceLifeCycleFlag)) {
            $query['DeviceLifeCycleFlag'] = $request->deviceLifeCycleFlag;
        }
        if (!Utils::isUnset($request->deviceStatusChangeFlag)) {
            $query['DeviceStatusChangeFlag'] = $request->deviceStatusChangeFlag;
        }
        if (!Utils::isUnset($request->deviceTagFlag)) {
            $query['DeviceTagFlag'] = $request->deviceTagFlag;
        }
        if (!Utils::isUnset($request->deviceTopoLifeCycleFlag)) {
            $query['DeviceTopoLifeCycleFlag'] = $request->deviceTopoLifeCycleFlag;
        }
        if (!Utils::isUnset($request->foundDeviceListFlag)) {
            $query['FoundDeviceListFlag'] = $request->foundDeviceListFlag;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->mnsConfiguration)) {
            $query['MnsConfiguration'] = $request->mnsConfiguration;
        }
        if (!Utils::isUnset($request->otaEventFlag)) {
            $query['OtaEventFlag'] = $request->otaEventFlag;
        }
        if (!Utils::isUnset($request->otaJobFlag)) {
            $query['OtaJobFlag'] = $request->otaJobFlag;
        }
        if (!Utils::isUnset($request->otaVersionFlag)) {
            $query['OtaVersionFlag'] = $request->otaVersionFlag;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        if (!Utils::isUnset($request->thingHistoryFlag)) {
            $query['ThingHistoryFlag'] = $request->thingHistoryFlag;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateSubscribeRelation',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateSubscribeRelationResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->functionBlockId)) {
            $query['FunctionBlockId'] = $request->functionBlockId;
        }
        if (!Utils::isUnset($request->functionBlockName)) {
            $query['FunctionBlockName'] = $request->functionBlockName;
        }
        if (!Utils::isUnset($request->identifier)) {
            $query['Identifier'] = $request->identifier;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        if (!Utils::isUnset($request->thingModelJson)) {
            $query['ThingModelJson'] = $request->thingModelJson;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateThingModel',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateThingModelResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        if (!Utils::isUnset($request->scriptContent)) {
            $query['ScriptContent'] = $request->scriptContent;
        }
        if (!Utils::isUnset($request->scriptType)) {
            $query['ScriptType'] = $request->scriptType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateThingScript',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateThingScriptResponse::fromMap($this->callApi($params, $req, $runtime));
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
}
