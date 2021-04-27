<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
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
use AlibabaCloud\SDK\Iot\V20180120\Models\ClearEdgeInstanceDriverConfigsRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\ClearEdgeInstanceDriverConfigsResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\CloseEdgeInstanceDeploymentRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\CloseEdgeInstanceDeploymentResponse;
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
use AlibabaCloud\SDK\Iot\V20180120\Models\CreateDeviceGroupRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\CreateDeviceGroupResponse;
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
use AlibabaCloud\SDK\Iot\V20180120\Models\CreateRulengDistributeJobRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\CreateRulengDistributeJobResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\CreateRuleRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\CreateRuleResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\CreateSceneRuleRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\CreateSceneRuleResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\CreateSubscribeRelationRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\CreateSubscribeRelationResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\CreateThingModelRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\CreateThingModelResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\CreateThingScriptRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\CreateThingScriptResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\CreateTopicRouteTableRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\CreateTopicRouteTableResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\DeleteConsumerGroupRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\DeleteConsumerGroupResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\DeleteConsumerGroupSubscribeRelationRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\DeleteConsumerGroupSubscribeRelationResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\DeleteDeviceDistributeJobRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\DeleteDeviceDistributeJobResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\DeleteDeviceFileRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\DeleteDeviceFileResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\DeleteDeviceGroupRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\DeleteDeviceGroupResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\DeleteDevicePropRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\DeleteDevicePropResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\DeleteDeviceRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\DeleteDeviceResponse;
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
use AlibabaCloud\SDK\Iot\V20180120\Models\GetNodesAddingTaskRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\GetNodesAddingTaskResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\GetRuleActionRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\GetRuleActionResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\GetRuleRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\GetRuleResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\GetSceneRuleRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\GetSceneRuleResponse;
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
use AlibabaCloud\SDK\Iot\V20180120\Models\ListProductByTagsRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\ListProductByTagsResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\ListProductTagsRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\ListProductTagsResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\ListRuleActionsRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\ListRuleActionsResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\ListRuleRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\ListRuleResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\ListTaskByPageRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\ListTaskByPageResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\ListTaskRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\ListTaskResponse;
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
use AlibabaCloud\SDK\Iot\V20180120\Models\PublishThingModelRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\PublishThingModelResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\PubRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\PubResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryAppDeviceListRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryAppDeviceListResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryBatchRegisterDeviceStatusRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryBatchRegisterDeviceStatusResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryCertUrlByApplyIdRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryCertUrlByApplyIdResponse;
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
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceStatisticsRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceStatisticsResponse;
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
use AlibabaCloud\SDK\Iot\V20180120\Models\RegisterDeviceRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\RegisterDeviceResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\ReleaseEdgeDriverVersionRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\ReleaseEdgeDriverVersionResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\RemoveThingTopoRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\RemoveThingTopoResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\ReplaceEdgeInstanceGatewayRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\ReplaceEdgeInstanceGatewayResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\ResetConsumerGroupPositionRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\ResetConsumerGroupPositionResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\ResetThingRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\ResetThingResponse;
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
use AlibabaCloud\SDK\Iot\V20180120\Models\SpeechByCombinationRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\SpeechByCombinationResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\StartCpuRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\StartCpuResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\StartRuleRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\StartRuleResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\StopRuleRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\StopRuleResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\SyncSpeechByCombinationRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\SyncSpeechByCombinationResponse;
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
use AlibabaCloud\SDK\Iot\V20180120\Models\UpdateSubscribeRelationRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\UpdateSubscribeRelationResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\UpdateThingModelRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\UpdateThingModelResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\UpdateThingModelValidationConfigRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\UpdateThingModelValidationConfigResponse;
use AlibabaCloud\SDK\Iot\V20180120\Models\UpdateThingScriptRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\UpdateThingScriptResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
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
     * @param BatchAddDeviceGroupRelationsRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return BatchAddDeviceGroupRelationsResponse
     */
    public function batchAddDeviceGroupRelationsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return BatchAddDeviceGroupRelationsResponse::fromMap($this->doRPCRequest('BatchAddDeviceGroupRelations', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return BatchAddThingTopoResponse::fromMap($this->doRPCRequest('BatchAddThingTopo', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param BatchBindDevicesIntoProjectRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return BatchBindDevicesIntoProjectResponse
     */
    public function batchBindDevicesIntoProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return BatchBindDevicesIntoProjectResponse::fromMap($this->doRPCRequest('BatchBindDevicesIntoProject', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param BatchBindDeviceToEdgeInstanceWithDriverRequest $request
     * @param RuntimeOptions                                 $runtime
     *
     * @return BatchBindDeviceToEdgeInstanceWithDriverResponse
     */
    public function batchBindDeviceToEdgeInstanceWithDriverWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return BatchBindDeviceToEdgeInstanceWithDriverResponse::fromMap($this->doRPCRequest('BatchBindDeviceToEdgeInstanceWithDriver', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param BatchBindProductsIntoProjectRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return BatchBindProductsIntoProjectResponse
     */
    public function batchBindProductsIntoProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return BatchBindProductsIntoProjectResponse::fromMap($this->doRPCRequest('BatchBindProductsIntoProject', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return BatchCheckDeviceNamesResponse::fromMap($this->doRPCRequest('BatchCheckDeviceNames', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return BatchClearEdgeInstanceDeviceConfigResponse::fromMap($this->doRPCRequest('BatchClearEdgeInstanceDeviceConfig', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return BatchDeleteDeviceGroupRelationsResponse::fromMap($this->doRPCRequest('BatchDeleteDeviceGroupRelations', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return BatchDeleteEdgeInstanceChannelResponse::fromMap($this->doRPCRequest('BatchDeleteEdgeInstanceChannel', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return BatchGetDeviceBindStatusResponse::fromMap($this->doRPCRequest('BatchGetDeviceBindStatus', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return BatchGetDeviceStateResponse::fromMap($this->doRPCRequest('BatchGetDeviceState', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return BatchGetEdgeDriverResponse::fromMap($this->doRPCRequest('BatchGetEdgeDriver', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return BatchGetEdgeInstanceChannelResponse::fromMap($this->doRPCRequest('BatchGetEdgeInstanceChannel', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return BatchGetEdgeInstanceDeviceChannelResponse::fromMap($this->doRPCRequest('BatchGetEdgeInstanceDeviceChannel', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return BatchGetEdgeInstanceDeviceConfigResponse::fromMap($this->doRPCRequest('BatchGetEdgeInstanceDeviceConfig', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return BatchGetEdgeInstanceDeviceDriverResponse::fromMap($this->doRPCRequest('BatchGetEdgeInstanceDeviceDriver', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return BatchGetEdgeInstanceDriverConfigsResponse::fromMap($this->doRPCRequest('BatchGetEdgeInstanceDriverConfigs', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return BatchPubResponse::fromMap($this->doRPCRequest('BatchPub', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return BatchQueryDeviceDetailResponse::fromMap($this->doRPCRequest('BatchQueryDeviceDetail', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return BatchRegisterDeviceResponse::fromMap($this->doRPCRequest('BatchRegisterDevice', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return BatchRegisterDeviceWithApplyIdResponse::fromMap($this->doRPCRequest('BatchRegisterDeviceWithApplyId', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return BatchSetEdgeInstanceDeviceChannelResponse::fromMap($this->doRPCRequest('BatchSetEdgeInstanceDeviceChannel', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return BatchSetEdgeInstanceDeviceConfigResponse::fromMap($this->doRPCRequest('BatchSetEdgeInstanceDeviceConfig', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return BatchUnbindDeviceFromEdgeInstanceResponse::fromMap($this->doRPCRequest('BatchUnbindDeviceFromEdgeInstance', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return BatchUnbindProjectDevicesResponse::fromMap($this->doRPCRequest('BatchUnbindProjectDevices', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return BatchUnbindProjectProductsResponse::fromMap($this->doRPCRequest('BatchUnbindProjectProducts', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return BatchUpdateDeviceNicknameResponse::fromMap($this->doRPCRequest('BatchUpdateDeviceNickname', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return BindApplicationToEdgeInstanceResponse::fromMap($this->doRPCRequest('BindApplicationToEdgeInstance', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return BindDriverToEdgeInstanceResponse::fromMap($this->doRPCRequest('BindDriverToEdgeInstance', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return BindGatewayToEdgeInstanceResponse::fromMap($this->doRPCRequest('BindGatewayToEdgeInstance', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return BindRoleToEdgeInstanceResponse::fromMap($this->doRPCRequest('BindRoleToEdgeInstance', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return BindSceneRuleToEdgeInstanceResponse::fromMap($this->doRPCRequest('BindSceneRuleToEdgeInstance', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CancelJobResponse::fromMap($this->doRPCRequest('CancelJob', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CancelOTAStrategyByJobResponse::fromMap($this->doRPCRequest('CancelOTAStrategyByJob', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CancelOTATaskByDeviceResponse::fromMap($this->doRPCRequest('CancelOTATaskByDevice', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CancelOTATaskByJobResponse::fromMap($this->doRPCRequest('CancelOTATaskByJob', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ClearEdgeInstanceDriverConfigsRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return ClearEdgeInstanceDriverConfigsResponse
     */
    public function clearEdgeInstanceDriverConfigsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ClearEdgeInstanceDriverConfigsResponse::fromMap($this->doRPCRequest('ClearEdgeInstanceDriverConfigs', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param CloseEdgeInstanceDeploymentRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return CloseEdgeInstanceDeploymentResponse
     */
    public function closeEdgeInstanceDeploymentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CloseEdgeInstanceDeploymentResponse::fromMap($this->doRPCRequest('CloseEdgeInstanceDeployment', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param CopyThingModelRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CopyThingModelResponse
     */
    public function copyThingModelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CopyThingModelResponse::fromMap($this->doRPCRequest('CopyThingModel', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateConsumerGroupResponse::fromMap($this->doRPCRequest('CreateConsumerGroup', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateConsumerGroupSubscribeRelationResponse::fromMap($this->doRPCRequest('CreateConsumerGroupSubscribeRelation', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateDataAPIServiceResponse::fromMap($this->doRPCRequest('CreateDataAPIService', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateDeviceDistributeJobResponse::fromMap($this->doRPCRequest('CreateDeviceDistributeJob', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param CreateDeviceGroupRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateDeviceGroupResponse
     */
    public function createDeviceGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateDeviceGroupResponse::fromMap($this->doRPCRequest('CreateDeviceGroup', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param CreateEdgeDriverRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateEdgeDriverResponse
     */
    public function createEdgeDriverWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateEdgeDriverResponse::fromMap($this->doRPCRequest('CreateEdgeDriver', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateEdgeDriverVersionResponse::fromMap($this->doRPCRequest('CreateEdgeDriverVersion', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateEdgeInstanceResponse::fromMap($this->doRPCRequest('CreateEdgeInstance', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateEdgeInstanceChannelResponse::fromMap($this->doRPCRequest('CreateEdgeInstanceChannel', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateEdgeInstanceDeploymentResponse::fromMap($this->doRPCRequest('CreateEdgeInstanceDeployment', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateEdgeInstanceMessageRoutingResponse::fromMap($this->doRPCRequest('CreateEdgeInstanceMessageRouting', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateEdgeOssPreSignedAddressResponse::fromMap($this->doRPCRequest('CreateEdgeOssPreSignedAddress', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param CreateJobRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return CreateJobResponse
     */
    public function createJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateJobResponse::fromMap($this->doRPCRequest('CreateJob', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateLoRaNodesTaskResponse::fromMap($this->doRPCRequest('CreateLoRaNodesTask', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateOTADynamicUpgradeJobResponse::fromMap($this->doRPCRequest('CreateOTADynamicUpgradeJob', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateOTAFirmwareResponse::fromMap($this->doRPCRequest('CreateOTAFirmware', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateOTAModuleResponse::fromMap($this->doRPCRequest('CreateOTAModule', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateOTAStaticUpgradeJobResponse::fromMap($this->doRPCRequest('CreateOTAStaticUpgradeJob', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateOTAVerifyJobResponse::fromMap($this->doRPCRequest('CreateOTAVerifyJob', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateProductResponse::fromMap($this->doRPCRequest('CreateProduct', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateProductDistributeJobResponse::fromMap($this->doRPCRequest('CreateProductDistributeJob', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateProductTagsResponse::fromMap($this->doRPCRequest('CreateProductTags', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateProductTopicResponse::fromMap($this->doRPCRequest('CreateProductTopic', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateRuleResponse::fromMap($this->doRPCRequest('CreateRule', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateRuleActionResponse::fromMap($this->doRPCRequest('CreateRuleAction', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param CreateRulengDistributeJobRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CreateRulengDistributeJobResponse
     */
    public function createRulengDistributeJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateRulengDistributeJobResponse::fromMap($this->doRPCRequest('CreateRulengDistributeJob', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateRulengDistributeJobRequest $request
     *
     * @return CreateRulengDistributeJobResponse
     */
    public function createRulengDistributeJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRulengDistributeJobWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateSceneRuleResponse::fromMap($this->doRPCRequest('CreateSceneRule', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param CreateSubscribeRelationRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateSubscribeRelationResponse
     */
    public function createSubscribeRelationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateSubscribeRelationResponse::fromMap($this->doRPCRequest('CreateSubscribeRelation', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateThingModelResponse::fromMap($this->doRPCRequest('CreateThingModel', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateThingScriptResponse::fromMap($this->doRPCRequest('CreateThingScript', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateTopicRouteTableResponse::fromMap($this->doRPCRequest('CreateTopicRouteTable', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DeleteConsumerGroupRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteConsumerGroupResponse
     */
    public function deleteConsumerGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteConsumerGroupResponse::fromMap($this->doRPCRequest('DeleteConsumerGroup', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteConsumerGroupSubscribeRelationResponse::fromMap($this->doRPCRequest('DeleteConsumerGroupSubscribeRelation', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteDeviceResponse::fromMap($this->doRPCRequest('DeleteDevice', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteDeviceDistributeJobResponse::fromMap($this->doRPCRequest('DeleteDeviceDistributeJob', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DeleteDeviceFileRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteDeviceFileResponse
     */
    public function deleteDeviceFileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteDeviceFileResponse::fromMap($this->doRPCRequest('DeleteDeviceFile', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteDeviceGroupResponse::fromMap($this->doRPCRequest('DeleteDeviceGroup', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteDevicePropResponse::fromMap($this->doRPCRequest('DeleteDeviceProp', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DeleteEdgeDriverRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteEdgeDriverResponse
     */
    public function deleteEdgeDriverWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteEdgeDriverResponse::fromMap($this->doRPCRequest('DeleteEdgeDriver', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteEdgeDriverVersionResponse::fromMap($this->doRPCRequest('DeleteEdgeDriverVersion', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteEdgeInstanceResponse::fromMap($this->doRPCRequest('DeleteEdgeInstance', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteEdgeInstanceMessageRoutingResponse::fromMap($this->doRPCRequest('DeleteEdgeInstanceMessageRouting', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteJobResponse::fromMap($this->doRPCRequest('DeleteJob', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteOTAFirmwareResponse::fromMap($this->doRPCRequest('DeleteOTAFirmware', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteOTAModuleResponse::fromMap($this->doRPCRequest('DeleteOTAModule', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteProductResponse::fromMap($this->doRPCRequest('DeleteProduct', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteProductTagsResponse::fromMap($this->doRPCRequest('DeleteProductTags', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteProductTopicResponse::fromMap($this->doRPCRequest('DeleteProductTopic', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteRuleResponse::fromMap($this->doRPCRequest('DeleteRule', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteRuleActionResponse::fromMap($this->doRPCRequest('DeleteRuleAction', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteSceneRuleResponse::fromMap($this->doRPCRequest('DeleteSceneRule', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DeleteSubscribeRelationRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteSubscribeRelationResponse
     */
    public function deleteSubscribeRelationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteSubscribeRelationResponse::fromMap($this->doRPCRequest('DeleteSubscribeRelation', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteThingModelResponse::fromMap($this->doRPCRequest('DeleteThingModel', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteTopicRouteTableResponse::fromMap($this->doRPCRequest('DeleteTopicRouteTable', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DisableDeviceTunnelResponse::fromMap($this->doRPCRequest('DisableDeviceTunnel', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DisableDeviceTunnelShareResponse::fromMap($this->doRPCRequest('DisableDeviceTunnelShare', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DisableSceneRuleResponse::fromMap($this->doRPCRequest('DisableSceneRule', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DisableThingResponse::fromMap($this->doRPCRequest('DisableThing', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return EnableDeviceTunnelResponse::fromMap($this->doRPCRequest('EnableDeviceTunnel', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return EnableDeviceTunnelShareResponse::fromMap($this->doRPCRequest('EnableDeviceTunnelShare', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return EnableSceneRuleResponse::fromMap($this->doRPCRequest('EnableSceneRule', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return EnableThingResponse::fromMap($this->doRPCRequest('EnableThing', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GenerateDeviceNameListURLResponse::fromMap($this->doRPCRequest('GenerateDeviceNameListURL', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GenerateFileUploadURLResponse::fromMap($this->doRPCRequest('GenerateFileUploadURL', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GenerateOTAUploadURLResponse::fromMap($this->doRPCRequest('GenerateOTAUploadURL', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetDataAPIServiceDetailResponse::fromMap($this->doRPCRequest('GetDataAPIServiceDetail', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetDeviceShadowResponse::fromMap($this->doRPCRequest('GetDeviceShadow', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetDeviceStatusResponse::fromMap($this->doRPCRequest('GetDeviceStatus', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetDeviceTunnelShareStatusResponse::fromMap($this->doRPCRequest('GetDeviceTunnelShareStatus', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetDeviceTunnelStatusResponse::fromMap($this->doRPCRequest('GetDeviceTunnelStatus', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetEdgeDriverVersionResponse::fromMap($this->doRPCRequest('GetEdgeDriverVersion', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetEdgeInstanceResponse::fromMap($this->doRPCRequest('GetEdgeInstance', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetEdgeInstanceDeploymentResponse::fromMap($this->doRPCRequest('GetEdgeInstanceDeployment', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetEdgeInstanceMessageRoutingResponse::fromMap($this->doRPCRequest('GetEdgeInstanceMessageRouting', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetGatewayBySubDeviceResponse::fromMap($this->doRPCRequest('GetGatewayBySubDevice', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetLoraNodesTaskResponse::fromMap($this->doRPCRequest('GetLoraNodesTask', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param GetNodesAddingTaskRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetNodesAddingTaskResponse
     */
    public function getNodesAddingTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetNodesAddingTaskResponse::fromMap($this->doRPCRequest('GetNodesAddingTask', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetNodesAddingTaskRequest $request
     *
     * @return GetNodesAddingTaskResponse
     */
    public function getNodesAddingTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getNodesAddingTaskWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetRuleResponse::fromMap($this->doRPCRequest('GetRule', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetRuleActionResponse::fromMap($this->doRPCRequest('GetRuleAction', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetSceneRuleResponse::fromMap($this->doRPCRequest('GetSceneRule', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param GetThingModelTslRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetThingModelTslResponse
     */
    public function getThingModelTslWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetThingModelTslResponse::fromMap($this->doRPCRequest('GetThingModelTsl', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetThingModelTslPublishedResponse::fromMap($this->doRPCRequest('GetThingModelTslPublished', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetThingScriptResponse::fromMap($this->doRPCRequest('GetThingScript', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetThingTemplateResponse::fromMap($this->doRPCRequest('GetThingTemplate', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetThingTopoResponse::fromMap($this->doRPCRequest('GetThingTopo', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ImportThingModelTslRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ImportThingModelTslResponse
     */
    public function importThingModelTslWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ImportThingModelTslResponse::fromMap($this->doRPCRequest('ImportThingModelTsl', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return InvokeDataAPIServiceResponse::fromMap($this->doRPCRequest('InvokeDataAPIService', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return InvokeThingServiceResponse::fromMap($this->doRPCRequest('InvokeThingService', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return InvokeThingsServiceResponse::fromMap($this->doRPCRequest('InvokeThingsService', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListAnalyticsDataResponse::fromMap($this->doRPCRequest('ListAnalyticsData', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListDeviceDistributeJobResponse::fromMap($this->doRPCRequest('ListDeviceDistributeJob', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListDistributedDeviceResponse::fromMap($this->doRPCRequest('ListDistributedDevice', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListDistributedProductResponse::fromMap($this->doRPCRequest('ListDistributedProduct', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListJobResponse::fromMap($this->doRPCRequest('ListJob', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListOTAFirmwareResponse::fromMap($this->doRPCRequest('ListOTAFirmware', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListOTAJobByDeviceResponse::fromMap($this->doRPCRequest('ListOTAJobByDevice', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListOTAJobByFirmwareResponse::fromMap($this->doRPCRequest('ListOTAJobByFirmware', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
            'query' => $query,
        ]);

        return ListOTAModuleByProductResponse::fromMap($this->doRPCRequest('ListOTAModuleByProduct', '2018-01-20', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListOTAModuleVersionsByDeviceResponse::fromMap($this->doRPCRequest('ListOTAModuleVersionsByDevice', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListOTATaskByJobResponse::fromMap($this->doRPCRequest('ListOTATaskByJob', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ListProductByTagsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListProductByTagsResponse
     */
    public function listProductByTagsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListProductByTagsResponse::fromMap($this->doRPCRequest('ListProductByTags', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListProductTagsResponse::fromMap($this->doRPCRequest('ListProductTags', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListRuleResponse::fromMap($this->doRPCRequest('ListRule', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListRuleActionsResponse::fromMap($this->doRPCRequest('ListRuleActions', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ListTaskRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return ListTaskResponse
     */
    public function listTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListTaskResponse::fromMap($this->doRPCRequest('ListTask', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ListTaskByPageRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListTaskByPageResponse
     */
    public function listTaskByPageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListTaskByPageResponse::fromMap($this->doRPCRequest('ListTaskByPage', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListTaskByPageRequest $request
     *
     * @return ListTaskByPageResponse
     */
    public function listTaskByPage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTaskByPageWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListThingModelVersionResponse::fromMap($this->doRPCRequest('ListThingModelVersion', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListThingTemplatesResponse::fromMap($this->doRPCRequest('ListThingTemplates', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return NotifyAddThingTopoResponse::fromMap($this->doRPCRequest('NotifyAddThingTopo', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return OpenIotServiceResponse::fromMap($this->doRPCRequest('OpenIotService', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return PrintByTemplateResponse::fromMap($this->doRPCRequest('PrintByTemplate', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return PubResponse::fromMap($this->doRPCRequest('Pub', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return PubBroadcastResponse::fromMap($this->doRPCRequest('PubBroadcast', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param PublishThingModelRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return PublishThingModelResponse
     */
    public function publishThingModelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return PublishThingModelResponse::fromMap($this->doRPCRequest('PublishThingModel', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param QueryAppDeviceListRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return QueryAppDeviceListResponse
     */
    public function queryAppDeviceListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryAppDeviceListResponse::fromMap($this->doRPCRequest('QueryAppDeviceList', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryAppDeviceListRequest $request
     *
     * @return QueryAppDeviceListResponse
     */
    public function queryAppDeviceList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryAppDeviceListWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryBatchRegisterDeviceStatusResponse::fromMap($this->doRPCRequest('QueryBatchRegisterDeviceStatus', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryCertUrlByApplyIdResponse::fromMap($this->doRPCRequest('QueryCertUrlByApplyId', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param QueryConsumerGroupByGroupIdRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return QueryConsumerGroupByGroupIdResponse
     */
    public function queryConsumerGroupByGroupIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryConsumerGroupByGroupIdResponse::fromMap($this->doRPCRequest('QueryConsumerGroupByGroupId', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryConsumerGroupListResponse::fromMap($this->doRPCRequest('QueryConsumerGroupList', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryConsumerGroupStatusResponse::fromMap($this->doRPCRequest('QueryConsumerGroupStatus', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryDetailSceneRuleLogResponse::fromMap($this->doRPCRequest('QueryDetailSceneRuleLog', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryDeviceResponse::fromMap($this->doRPCRequest('QueryDevice', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryDeviceBySQLResponse::fromMap($this->doRPCRequest('QueryDeviceBySQL', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryDeviceByStatusResponse::fromMap($this->doRPCRequest('QueryDeviceByStatus', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryDeviceByTagsResponse::fromMap($this->doRPCRequest('QueryDeviceByTags', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryDeviceCertResponse::fromMap($this->doRPCRequest('QueryDeviceCert', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryDeviceDesiredPropertyResponse::fromMap($this->doRPCRequest('QueryDeviceDesiredProperty', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryDeviceDetailResponse::fromMap($this->doRPCRequest('QueryDeviceDetail', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryDeviceDistributeDetailResponse::fromMap($this->doRPCRequest('QueryDeviceDistributeDetail', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryDeviceDistributeJobResponse::fromMap($this->doRPCRequest('QueryDeviceDistributeJob', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryDeviceEventDataResponse::fromMap($this->doRPCRequest('QueryDeviceEventData', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryDeviceFileResponse::fromMap($this->doRPCRequest('QueryDeviceFile', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryDeviceFileListResponse::fromMap($this->doRPCRequest('QueryDeviceFileList', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryDeviceGroupByDeviceResponse::fromMap($this->doRPCRequest('QueryDeviceGroupByDevice', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryDeviceGroupByTagsResponse::fromMap($this->doRPCRequest('QueryDeviceGroupByTags', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryDeviceGroupInfoResponse::fromMap($this->doRPCRequest('QueryDeviceGroupInfo', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryDeviceGroupListResponse::fromMap($this->doRPCRequest('QueryDeviceGroupList', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryDeviceGroupTagListResponse::fromMap($this->doRPCRequest('QueryDeviceGroupTagList', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param QueryDeviceListByDeviceGroupRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return QueryDeviceListByDeviceGroupResponse
     */
    public function queryDeviceListByDeviceGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryDeviceListByDeviceGroupResponse::fromMap($this->doRPCRequest('QueryDeviceListByDeviceGroup', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryDeviceOriginalEventDataResponse::fromMap($this->doRPCRequest('QueryDeviceOriginalEventData', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryDeviceOriginalPropertyDataResponse::fromMap($this->doRPCRequest('QueryDeviceOriginalPropertyData', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryDeviceOriginalPropertyStatusResponse::fromMap($this->doRPCRequest('QueryDeviceOriginalPropertyStatus', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryDeviceOriginalServiceDataResponse::fromMap($this->doRPCRequest('QueryDeviceOriginalServiceData', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryDevicePropResponse::fromMap($this->doRPCRequest('QueryDeviceProp', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryDevicePropertiesDataResponse::fromMap($this->doRPCRequest('QueryDevicePropertiesData', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryDevicePropertyDataResponse::fromMap($this->doRPCRequest('QueryDevicePropertyData', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryDevicePropertyStatusResponse::fromMap($this->doRPCRequest('QueryDevicePropertyStatus', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryDeviceServiceDataResponse::fromMap($this->doRPCRequest('QueryDeviceServiceData', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param QueryDeviceStatisticsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return QueryDeviceStatisticsResponse
     */
    public function queryDeviceStatisticsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryDeviceStatisticsResponse::fromMap($this->doRPCRequest('QueryDeviceStatistics', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param QueryEdgeDriverRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return QueryEdgeDriverResponse
     */
    public function queryEdgeDriverWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryEdgeDriverResponse::fromMap($this->doRPCRequest('QueryEdgeDriver', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryEdgeDriverVersionResponse::fromMap($this->doRPCRequest('QueryEdgeDriverVersion', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryEdgeInstanceResponse::fromMap($this->doRPCRequest('QueryEdgeInstance', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryEdgeInstanceChannelResponse::fromMap($this->doRPCRequest('QueryEdgeInstanceChannel', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryEdgeInstanceDeviceResponse::fromMap($this->doRPCRequest('QueryEdgeInstanceDevice', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryEdgeInstanceDeviceByDriverResponse::fromMap($this->doRPCRequest('QueryEdgeInstanceDeviceByDriver', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryEdgeInstanceDriverResponse::fromMap($this->doRPCRequest('QueryEdgeInstanceDriver', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryEdgeInstanceGatewayResponse::fromMap($this->doRPCRequest('QueryEdgeInstanceGateway', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryEdgeInstanceHistoricDeploymentResponse::fromMap($this->doRPCRequest('QueryEdgeInstanceHistoricDeployment', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryEdgeInstanceMessageRoutingResponse::fromMap($this->doRPCRequest('QueryEdgeInstanceMessageRouting', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryEdgeInstanceSceneRuleResponse::fromMap($this->doRPCRequest('QueryEdgeInstanceSceneRule', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryJobResponse::fromMap($this->doRPCRequest('QueryJob', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
            'query' => $query,
        ]);

        return QueryJobStatisticsResponse::fromMap($this->doRPCRequest('QueryJobStatistics', '2018-01-20', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryLoRaJoinPermissionsResponse::fromMap($this->doRPCRequest('QueryLoRaJoinPermissions', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param QueryOTAFirmwareRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return QueryOTAFirmwareResponse
     */
    public function queryOTAFirmwareWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryOTAFirmwareResponse::fromMap($this->doRPCRequest('QueryOTAFirmware', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryOTAJobResponse::fromMap($this->doRPCRequest('QueryOTAJob', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryPageByApplyIdResponse::fromMap($this->doRPCRequest('QueryPageByApplyId', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryProductResponse::fromMap($this->doRPCRequest('QueryProduct', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryProductCertInfoResponse::fromMap($this->doRPCRequest('QueryProductCertInfo', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryProductListResponse::fromMap($this->doRPCRequest('QueryProductList', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryProductTopicResponse::fromMap($this->doRPCRequest('QueryProductTopic', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QuerySceneRuleResponse::fromMap($this->doRPCRequest('QuerySceneRule', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param QuerySubscribeRelationRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return QuerySubscribeRelationResponse
     */
    public function querySubscribeRelationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QuerySubscribeRelationResponse::fromMap($this->doRPCRequest('QuerySubscribeRelation', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QuerySummarySceneRuleLogResponse::fromMap($this->doRPCRequest('QuerySummarySceneRuleLog', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QuerySuperDeviceGroupResponse::fromMap($this->doRPCRequest('QuerySuperDeviceGroup', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryTaskResponse::fromMap($this->doRPCRequest('QueryTask', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryThingModelResponse::fromMap($this->doRPCRequest('QueryThingModel', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryThingModelExtendConfigResponse::fromMap($this->doRPCRequest('QueryThingModelExtendConfig', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryThingModelExtendConfigPublishedResponse::fromMap($this->doRPCRequest('QueryThingModelExtendConfigPublished', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryThingModelPublishedResponse::fromMap($this->doRPCRequest('QueryThingModelPublished', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryTopicReverseRouteTableResponse::fromMap($this->doRPCRequest('QueryTopicReverseRouteTable', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryTopicRouteTableResponse::fromMap($this->doRPCRequest('QueryTopicRouteTable', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param RefreshDeviceTunnelSharePasswordRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return RefreshDeviceTunnelSharePasswordResponse
     */
    public function refreshDeviceTunnelSharePasswordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RefreshDeviceTunnelSharePasswordResponse::fromMap($this->doRPCRequest('RefreshDeviceTunnelSharePassword', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param RegisterDeviceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return RegisterDeviceResponse
     */
    public function registerDeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RegisterDeviceResponse::fromMap($this->doRPCRequest('RegisterDevice', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ReleaseEdgeDriverVersionResponse::fromMap($this->doRPCRequest('ReleaseEdgeDriverVersion', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param RemoveThingTopoRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return RemoveThingTopoResponse
     */
    public function removeThingTopoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RemoveThingTopoResponse::fromMap($this->doRPCRequest('RemoveThingTopo', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ReplaceEdgeInstanceGatewayResponse::fromMap($this->doRPCRequest('ReplaceEdgeInstanceGateway', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ResetConsumerGroupPositionRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ResetConsumerGroupPositionResponse
     */
    public function resetConsumerGroupPositionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ResetConsumerGroupPositionResponse::fromMap($this->doRPCRequest('ResetConsumerGroupPosition', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ResetThingResponse::fromMap($this->doRPCRequest('ResetThing', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param RRpcRequest    $request
     * @param RuntimeOptions $runtime
     *
     * @return RRpcResponse
     */
    public function rRpcWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RRpcResponse::fromMap($this->doRPCRequest('RRpc', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param SaveDevicePropRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return SaveDevicePropResponse
     */
    public function saveDevicePropWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SaveDevicePropResponse::fromMap($this->doRPCRequest('SaveDeviceProp', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SetDeviceDesiredPropertyResponse::fromMap($this->doRPCRequest('SetDeviceDesiredProperty', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SetDeviceGroupTagsResponse::fromMap($this->doRPCRequest('SetDeviceGroupTags', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SetDevicePropertyResponse::fromMap($this->doRPCRequest('SetDeviceProperty', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SetDevicesPropertyResponse::fromMap($this->doRPCRequest('SetDevicesProperty', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SetEdgeInstanceDriverConfigsResponse::fromMap($this->doRPCRequest('SetEdgeInstanceDriverConfigs', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SetProductCertInfoResponse::fromMap($this->doRPCRequest('SetProductCertInfo', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param SpeechByCombinationRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return SpeechByCombinationResponse
     */
    public function speechByCombinationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SpeechByCombinationResponse::fromMap($this->doRPCRequest('SpeechByCombination', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param StartCpuRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return StartCpuResponse
     */
    public function startCpuWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return StartCpuResponse::fromMap($this->doRPCRequest('StartCpu', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return StartRuleResponse::fromMap($this->doRPCRequest('StartRule', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return StopRuleResponse::fromMap($this->doRPCRequest('StopRule', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param SyncSpeechByCombinationRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return SyncSpeechByCombinationResponse
     */
    public function syncSpeechByCombinationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SyncSpeechByCombinationResponse::fromMap($this->doRPCRequest('SyncSpeechByCombination', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param TriggerSceneRuleRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return TriggerSceneRuleResponse
     */
    public function triggerSceneRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return TriggerSceneRuleResponse::fromMap($this->doRPCRequest('TriggerSceneRule', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UnbindApplicationFromEdgeInstanceResponse::fromMap($this->doRPCRequest('UnbindApplicationFromEdgeInstance', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UnbindDriverFromEdgeInstanceResponse::fromMap($this->doRPCRequest('UnbindDriverFromEdgeInstance', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UnbindRoleFromEdgeInstanceResponse::fromMap($this->doRPCRequest('UnbindRoleFromEdgeInstance', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UnbindSceneRuleFromEdgeInstanceResponse::fromMap($this->doRPCRequest('UnbindSceneRuleFromEdgeInstance', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateConsumerGroupResponse::fromMap($this->doRPCRequest('UpdateConsumerGroup', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateDeviceGroupResponse::fromMap($this->doRPCRequest('UpdateDeviceGroup', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateDeviceShadowResponse::fromMap($this->doRPCRequest('UpdateDeviceShadow', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateEdgeDriverVersionResponse::fromMap($this->doRPCRequest('UpdateEdgeDriverVersion', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateEdgeInstanceResponse::fromMap($this->doRPCRequest('UpdateEdgeInstance', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateEdgeInstanceChannelResponse::fromMap($this->doRPCRequest('UpdateEdgeInstanceChannel', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateEdgeInstanceMessageRoutingResponse::fromMap($this->doRPCRequest('UpdateEdgeInstanceMessageRouting', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param UpdateJobRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return UpdateJobResponse
     */
    public function updateJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateJobResponse::fromMap($this->doRPCRequest('UpdateJob', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateOTAModuleResponse::fromMap($this->doRPCRequest('UpdateOTAModule', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateProductResponse::fromMap($this->doRPCRequest('UpdateProduct', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateProductFilterConfigResponse::fromMap($this->doRPCRequest('UpdateProductFilterConfig', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateProductTagsResponse::fromMap($this->doRPCRequest('UpdateProductTags', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateProductTopicResponse::fromMap($this->doRPCRequest('UpdateProductTopic', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateRuleResponse::fromMap($this->doRPCRequest('UpdateRule', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateRuleActionResponse::fromMap($this->doRPCRequest('UpdateRuleAction', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateSceneRuleResponse::fromMap($this->doRPCRequest('UpdateSceneRule', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param UpdateSubscribeRelationRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return UpdateSubscribeRelationResponse
     */
    public function updateSubscribeRelationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateSubscribeRelationResponse::fromMap($this->doRPCRequest('UpdateSubscribeRelation', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateThingModelResponse::fromMap($this->doRPCRequest('UpdateThingModel', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param UpdateThingModelValidationConfigRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return UpdateThingModelValidationConfigResponse
     */
    public function updateThingModelValidationConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateThingModelValidationConfigResponse::fromMap($this->doRPCRequest('UpdateThingModelValidationConfig', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateThingModelValidationConfigRequest $request
     *
     * @return UpdateThingModelValidationConfigResponse
     */
    public function updateThingModelValidationConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateThingModelValidationConfigWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateThingScriptResponse::fromMap($this->doRPCRequest('UpdateThingScript', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
