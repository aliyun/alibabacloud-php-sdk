<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\AddCartoonHeaders;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\AddCartoonRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\AddCartoonResponse;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\AddCustomQAHeaders;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\AddCustomQARequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\AddCustomQAResponse;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\AddCustomQAShrinkRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\AddCustomQAV2Headers;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\AddCustomQAV2Request;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\AddCustomQAV2Response;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\AddCustomQAV2ShrinkRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\AddMessageTemplateHeaders;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\AddMessageTemplateRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\AddMessageTemplateResponse;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\AddOrUpdateDisPlayModesHeaders;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\AddOrUpdateDisPlayModesRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\AddOrUpdateDisPlayModesResponse;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\AddOrUpdateDisPlayModesShrinkRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\AddOrUpdateHotelSettingHeaders;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\AddOrUpdateHotelSettingRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\AddOrUpdateHotelSettingResponse;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\AddOrUpdateHotelSettingShrinkRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\AddOrUpdateScreenSaverHeaders;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\AddOrUpdateScreenSaverRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\AddOrUpdateScreenSaverResponse;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\AddOrUpdateScreenSaverShrinkRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\AddOrUpdateWelcomeTextHeaders;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\AddOrUpdateWelcomeTextRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\AddOrUpdateWelcomeTextResponse;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\AuditHotelHeaders;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\AuditHotelRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\AuditHotelResponse;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\AuditHotelShrinkRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\BatchAddHotelRoomHeaders;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\BatchAddHotelRoomRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\BatchAddHotelRoomResponse;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\BatchAddHotelRoomShrinkRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\BatchDeleteHotelRoomHeaders;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\BatchDeleteHotelRoomRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\BatchDeleteHotelRoomResponse;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\BatchDeleteHotelRoomShrinkRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\CheckoutWithAKHeaders;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\CheckoutWithAKRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\CheckoutWithAKResponse;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ChildAccountAuthHeaders;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ChildAccountAuthRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ChildAccountAuthResponse;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ControlRoomDeviceHeaders;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ControlRoomDeviceRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ControlRoomDeviceResponse;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ControlRoomDeviceShrinkRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\CreateHotelAlarmHeaders;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\CreateHotelAlarmRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\CreateHotelAlarmResponse;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\CreateHotelAlarmShrinkRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\CreateHotelHeaders;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\CreateHotelRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\CreateHotelResponse;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\CreateHotelShrinkRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\CreateRcuSceneHeaders;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\CreateRcuSceneRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\CreateRcuSceneResponse;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\CreateRcuSceneShrinkRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\DeleteCartoonHeaders;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\DeleteCartoonRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\DeleteCartoonResponse;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\DeleteCustomQAHeaders;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\DeleteCustomQARequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\DeleteCustomQAResponse;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\DeleteCustomQAShrinkRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\DeleteHotelAlarmHeaders;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\DeleteHotelAlarmRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\DeleteHotelAlarmResponse;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\DeleteHotelAlarmShrinkRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\DeleteHotelSceneBookItemHeaders;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\DeleteHotelSceneBookItemRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\DeleteHotelSceneBookItemResponse;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\DeleteHotelSettingHeaders;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\DeleteHotelSettingRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\DeleteHotelSettingResponse;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\DeleteMessageTemplateHeaders;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\DeleteMessageTemplateRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\DeleteMessageTemplateResponse;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\DeleteRcuSceneHeaders;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\DeleteRcuSceneRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\DeleteRcuSceneResponse;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\DeviceControlHeaders;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\DeviceControlRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\DeviceControlResponse;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\DeviceControlShrinkRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\GetBasicInfoQAHeaders;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\GetBasicInfoQARequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\GetBasicInfoQAResponse;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\GetCartoonHeaders;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\GetCartoonRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\GetCartoonResponse;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\GetHotelContactByGenieDeviceHeaders;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\GetHotelContactByGenieDeviceRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\GetHotelContactByGenieDeviceResponse;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\GetHotelContactByGenieDeviceShrinkRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\GetHotelContactByNumberHeaders;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\GetHotelContactByNumberRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\GetHotelContactByNumberResponse;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\GetHotelContactByNumberShrinkRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\GetHotelContactsHeaders;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\GetHotelContactsRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\GetHotelContactsResponse;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\GetHotelContactsShrinkRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\GetHotelHomeBackImageAndModesHeaders;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\GetHotelHomeBackImageAndModesRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\GetHotelHomeBackImageAndModesResponse;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\GetHotelHomeBackImageAndModesShrinkRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\GetHotelNoticeHeaders;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\GetHotelNoticeRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\GetHotelNoticeResponse;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\GetHotelNoticeShrinkRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\GetHotelNoticeV2Headers;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\GetHotelNoticeV2Request;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\GetHotelNoticeV2Response;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\GetHotelNoticeV2ShrinkRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\GetHotelOrderDetailHeaders;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\GetHotelOrderDetailRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\GetHotelOrderDetailResponse;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\GetHotelOrderDetailShrinkRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\GetHotelRoomDeviceHeaders;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\GetHotelRoomDeviceRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\GetHotelRoomDeviceResponse;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\GetHotelSampleUtterancesHeaders;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\GetHotelSampleUtterancesRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\GetHotelSampleUtterancesResponse;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\GetHotelSampleUtterancesShrinkRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\GetHotelSceneItemDetailHeaders;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\GetHotelSceneItemDetailRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\GetHotelSceneItemDetailResponse;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\GetHotelScreenSaverHeaders;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\GetHotelScreenSaverRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\GetHotelScreenSaverResponse;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\GetHotelScreenSaverShrinkRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\GetHotelScreenSaverStyleHeaders;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\GetHotelScreenSaverStyleRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\GetHotelScreenSaverStyleResponse;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\GetHotelSettingHeaders;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\GetHotelSettingRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\GetHotelSettingResponse;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\GetRelationProductListHeaders;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\GetRelationProductListResponse;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\GetUnionIdHeaders;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\GetUnionIdRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\GetUnionIdResponse;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\GetWelcomeTextAndMusicHeaders;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\GetWelcomeTextAndMusicRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\GetWelcomeTextAndMusicResponse;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\HotelQrBindHeaders;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\HotelQrBindRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\HotelQrBindResponse;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ImportHotelConfigHeaders;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ImportHotelConfigRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ImportHotelConfigResponse;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ImportHotelConfigShrinkRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ImportRoomControlDevicesHeaders;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ImportRoomControlDevicesRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ImportRoomControlDevicesResponse;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ImportRoomControlDevicesShrinkRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ImportRoomGenieScenesHeaders;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ImportRoomGenieScenesRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ImportRoomGenieScenesResponse;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ImportRoomGenieScenesShrinkRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\InsertHotelSceneBookItemHeaders;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\InsertHotelSceneBookItemRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\InsertHotelSceneBookItemResponse;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\InsertHotelSceneBookItemShrinkRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\InvokeRobotPushHeaders;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\InvokeRobotPushRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\InvokeRobotPushResponse;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListAllProvincesHeaders;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListAllProvincesResponse;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListCitiesByProvinceHeaders;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListCitiesByProvinceRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListCitiesByProvinceResponse;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListCustomQAHeaders;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListCustomQARequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListCustomQAResponse;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListCustomQAShrinkRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListDialogueTemplateHeaders;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListDialogueTemplateRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListDialogueTemplateResponse;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListHotelAlarmHeaders;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListHotelAlarmRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListHotelAlarmResponse;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListHotelAlarmShrinkRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListHotelControlDeviceHeaders;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListHotelControlDeviceRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListHotelControlDeviceResponse;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListHotelControlDeviceShrinkRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListHotelInfoHeaders;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListHotelInfoResponse;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListHotelMessageTemplateHeaders;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListHotelMessageTemplateResponse;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListHotelOrderHeaders;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListHotelOrderRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListHotelOrderResponse;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListHotelOrderShrinkRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListHotelRoomsHeaders;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListHotelRoomsRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListHotelRoomsResponse;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListHotelRoomsShrinkRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListHotelSceneBookItemsHeaders;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListHotelSceneBookItemsRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListHotelSceneBookItemsResponse;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListHotelSceneBookItemsShrinkRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListHotelSceneItemHeaders;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListHotelSceneItemRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListHotelSceneItemResponse;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListHotelSceneItemsHeaders;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListHotelSceneItemShrinkRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListHotelSceneItemsRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListHotelSceneItemsResponse;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListHotelSceneItemsShrinkRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListHotelServiceCategoryHeaders;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListHotelServiceCategoryRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListHotelServiceCategoryResponse;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListHotelServiceCategoryShrinkRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListHotelsHeaders;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListHotelsRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListHotelsResponse;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListHotelsShrinkRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListInfraredDeviceBrandsHeaders;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListInfraredDeviceBrandsRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListInfraredDeviceBrandsResponse;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListInfraredRemoteControllersHeaders;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListInfraredRemoteControllersRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListInfraredRemoteControllersResponse;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListSceneCategoryHeaders;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListSceneCategoryRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListSceneCategoryResponse;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListServiceQAHeaders;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListServiceQARequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListServiceQAResponse;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListServiceQAShrinkRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListSTBServiceProvidersHeaders;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListSTBServiceProvidersRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListSTBServiceProvidersResponse;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListTicketsHeaders;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListTicketsRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListTicketsResponse;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListTicketsShrinkRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\PageGetHotelRoomDevicesHeaders;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\PageGetHotelRoomDevicesRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\PageGetHotelRoomDevicesResponse;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\PmsEventReportHeaders;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\PmsEventReportRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\PmsEventReportResponse;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\PushHotelMessageHeaders;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\PushHotelMessageRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\PushHotelMessageResponse;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\PushHotelMessageShrinkRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\PushVoiceBoxCommandsHeaders;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\PushVoiceBoxCommandsRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\PushVoiceBoxCommandsResponse;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\PushVoiceBoxCommandsShrinkRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\PushWelcomeHeaders;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\PushWelcomeRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\PushWelcomeResponse;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\PushWelcomeTextAndMusicHeaders;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\PushWelcomeTextAndMusicRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\PushWelcomeTextAndMusicResponse;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\PushWelcomeTextAndMusicShrinkRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\QueryDeviceStatusHeaders;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\QueryDeviceStatusRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\QueryDeviceStatusResponse;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\QueryDeviceStatusShrinkRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\QueryHotelRoomDetailHeaders;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\QueryHotelRoomDetailRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\QueryHotelRoomDetailResponse;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\QueryRoomControlDevicesHeaders;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\QueryRoomControlDevicesRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\QueryRoomControlDevicesResponse;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\QuerySceneListHeaders;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\QuerySceneListRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\QuerySceneListResponse;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\QuerySceneListShrinkRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\RemoveChildAccountAuthHeaders;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\RemoveChildAccountAuthRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\RemoveChildAccountAuthResponse;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\RemoveHotelHeaders;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\RemoveHotelRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\RemoveHotelResponse;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ResetWelcomeTextAndMusicHeaders;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ResetWelcomeTextAndMusicRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ResetWelcomeTextAndMusicResponse;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\RoomCheckOutHeaders;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\RoomCheckOutRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\RoomCheckOutResponse;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\RoomCheckOutShrinkRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\SubmitHotelOrderHeaders;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\SubmitHotelOrderRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\SubmitHotelOrderResponse;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\SubmitHotelOrderShrinkRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\SyncDeviceStatusWithAkHeaders;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\SyncDeviceStatusWithAkRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\SyncDeviceStatusWithAkResponse;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\UpdateBasicInfoQAHeaders;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\UpdateBasicInfoQARequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\UpdateBasicInfoQAResponse;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\UpdateCustomQAHeaders;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\UpdateCustomQARequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\UpdateCustomQAResponse;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\UpdateCustomQAShrinkRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\UpdateHotelAlarmHeaders;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\UpdateHotelAlarmRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\UpdateHotelAlarmResponse;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\UpdateHotelAlarmShrinkRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\UpdateHotelHeaders;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\UpdateHotelRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\UpdateHotelResponse;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\UpdateHotelSceneBookItemHeaders;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\UpdateHotelSceneBookItemRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\UpdateHotelSceneBookItemResponse;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\UpdateHotelSceneBookItemShrinkRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\UpdateHotelSceneItemHeaders;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\UpdateHotelSceneItemRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\UpdateHotelSceneItemResponse;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\UpdateHotelSceneItemShrinkRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\UpdateHotelShrinkRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\UpdateMessageTemplateHeaders;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\UpdateMessageTemplateRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\UpdateMessageTemplateResponse;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\UpdateRcuSceneHeaders;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\UpdateRcuSceneRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\UpdateRcuSceneResponse;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\UpdateRcuSceneShrinkRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\UpdateServiceQAHeaders;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\UpdateServiceQARequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\UpdateServiceQAResponse;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\UpdateTicketHeaders;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\UpdateTicketRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\UpdateTicketResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class AliGenie extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('aligenie', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param AddCartoonRequest $request
     * @param AddCartoonHeaders $headers
     * @param RuntimeOptions    $runtime
     *
     * @return AddCartoonResponse
     */
    public function addCartoonWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->hotelId)) {
            $body['HotelId'] = $request->hotelId;
        }
        if (!Utils::isUnset($request->startVideoMd5)) {
            $body['StartVideoMd5'] = $request->startVideoMd5;
        }
        if (!Utils::isUnset($request->startVideoUrl)) {
            $body['StartVideoUrl'] = $request->startVideoUrl;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAligenieAccessToken)) {
            $realHeaders['x-acs-aligenie-access-token'] = Utils::toJSONString($headers->xAcsAligenieAccessToken);
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AddCartoon',
            'version'     => 'ip_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ip/addCartoon',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddCartoonResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddCartoonRequest $request
     *
     * @return AddCartoonResponse
     */
    public function addCartoon($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new AddCartoonHeaders([]);

        return $this->addCartoonWithOptions($request, $headers, $runtime);
    }

    /**
     * @param AddCustomQARequest $tmpReq
     * @param AddCustomQAHeaders $headers
     * @param RuntimeOptions     $runtime
     *
     * @return AddCustomQAResponse
     */
    public function addCustomQAWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new AddCustomQAShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->answers)) {
            $request->answersShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->answers, 'Answers', 'json');
        }
        if (!Utils::isUnset($tmpReq->keyWords)) {
            $request->keyWordsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->keyWords, 'KeyWords', 'json');
        }
        if (!Utils::isUnset($tmpReq->supplementaryQuestions)) {
            $request->supplementaryQuestionsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->supplementaryQuestions, 'SupplementaryQuestions', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->answersShrink)) {
            $body['Answers'] = $request->answersShrink;
        }
        if (!Utils::isUnset($request->hotelId)) {
            $body['HotelId'] = $request->hotelId;
        }
        if (!Utils::isUnset($request->keyWordsShrink)) {
            $body['KeyWords'] = $request->keyWordsShrink;
        }
        if (!Utils::isUnset($request->majorQuestion)) {
            $body['MajorQuestion'] = $request->majorQuestion;
        }
        if (!Utils::isUnset($request->supplementaryQuestionsShrink)) {
            $body['SupplementaryQuestions'] = $request->supplementaryQuestionsShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAligenieAccessToken)) {
            $realHeaders['x-acs-aligenie-access-token'] = Utils::toJSONString($headers->xAcsAligenieAccessToken);
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AddCustomQA',
            'version'     => 'ip_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ip/addCustomQA',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddCustomQAResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddCustomQARequest $request
     *
     * @return AddCustomQAResponse
     */
    public function addCustomQA($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new AddCustomQAHeaders([]);

        return $this->addCustomQAWithOptions($request, $headers, $runtime);
    }

    /**
     * @param AddCustomQAV2Request $tmpReq
     * @param AddCustomQAV2Headers $headers
     * @param RuntimeOptions       $runtime
     *
     * @return AddCustomQAV2Response
     */
    public function addCustomQAV2WithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new AddCustomQAV2ShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->answers)) {
            $request->answersShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->answers, 'Answers', 'json');
        }
        if (!Utils::isUnset($tmpReq->keyWords)) {
            $request->keyWordsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->keyWords, 'KeyWords', 'json');
        }
        if (!Utils::isUnset($tmpReq->supplementaryQuestions)) {
            $request->supplementaryQuestionsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->supplementaryQuestions, 'SupplementaryQuestions', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->answersShrink)) {
            $body['Answers'] = $request->answersShrink;
        }
        if (!Utils::isUnset($request->hotelId)) {
            $body['HotelId'] = $request->hotelId;
        }
        if (!Utils::isUnset($request->keyWordsShrink)) {
            $body['KeyWords'] = $request->keyWordsShrink;
        }
        if (!Utils::isUnset($request->majorQuestion)) {
            $body['MajorQuestion'] = $request->majorQuestion;
        }
        if (!Utils::isUnset($request->supplementaryQuestionsShrink)) {
            $body['SupplementaryQuestions'] = $request->supplementaryQuestionsShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAligenieAccessToken)) {
            $realHeaders['x-acs-aligenie-access-token'] = Utils::toJSONString($headers->xAcsAligenieAccessToken);
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AddCustomQAV2',
            'version'     => 'ip_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ip/addQAV2',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddCustomQAV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddCustomQAV2Request $request
     *
     * @return AddCustomQAV2Response
     */
    public function addCustomQAV2($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new AddCustomQAV2Headers([]);

        return $this->addCustomQAV2WithOptions($request, $headers, $runtime);
    }

    /**
     * @param AddMessageTemplateRequest $request
     * @param AddMessageTemplateHeaders $headers
     * @param RuntimeOptions            $runtime
     *
     * @return AddMessageTemplateResponse
     */
    public function addMessageTemplateWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->templateDetail)) {
            $body['TemplateDetail'] = $request->templateDetail;
        }
        if (!Utils::isUnset($request->templateName)) {
            $body['TemplateName'] = $request->templateName;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAligenieAccessToken)) {
            $realHeaders['x-acs-aligenie-access-token'] = Utils::toJSONString($headers->xAcsAligenieAccessToken);
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AddMessageTemplate',
            'version'     => 'ip_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ip/addMessageTemplate',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddMessageTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddMessageTemplateRequest $request
     *
     * @return AddMessageTemplateResponse
     */
    public function addMessageTemplate($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new AddMessageTemplateHeaders([]);

        return $this->addMessageTemplateWithOptions($request, $headers, $runtime);
    }

    /**
     * @param AddOrUpdateDisPlayModesRequest $tmpReq
     * @param AddOrUpdateDisPlayModesHeaders $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return AddOrUpdateDisPlayModesResponse
     */
    public function addOrUpdateDisPlayModesWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new AddOrUpdateDisPlayModesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->hotelDeviceModeList)) {
            $request->hotelDeviceModeListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->hotelDeviceModeList, 'HotelDeviceModeList', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->hotelDeviceModeListShrink)) {
            $body['HotelDeviceModeList'] = $request->hotelDeviceModeListShrink;
        }
        if (!Utils::isUnset($request->hotelId)) {
            $body['HotelId'] = $request->hotelId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAligenieAccessToken)) {
            $realHeaders['x-acs-aligenie-access-token'] = Utils::toJSONString($headers->xAcsAligenieAccessToken);
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AddOrUpdateDisPlayModes',
            'version'     => 'ip_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ip/addOrUpdateDisPlayModes',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddOrUpdateDisPlayModesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddOrUpdateDisPlayModesRequest $request
     *
     * @return AddOrUpdateDisPlayModesResponse
     */
    public function addOrUpdateDisPlayModes($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new AddOrUpdateDisPlayModesHeaders([]);

        return $this->addOrUpdateDisPlayModesWithOptions($request, $headers, $runtime);
    }

    /**
     * @param AddOrUpdateHotelSettingRequest $tmpReq
     * @param AddOrUpdateHotelSettingHeaders $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return AddOrUpdateHotelSettingResponse
     */
    public function addOrUpdateHotelSettingWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new AddOrUpdateHotelSettingShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->hotelDeviceModeList)) {
            $request->hotelDeviceModeListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->hotelDeviceModeList, 'HotelDeviceModeList', 'json');
        }
        if (!Utils::isUnset($tmpReq->hotelScreenSaver)) {
            $request->hotelScreenSaverShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->hotelScreenSaver, 'HotelScreenSaver', 'json');
        }
        if (!Utils::isUnset($tmpReq->nightMode)) {
            $request->nightModeShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->nightMode, 'NightMode', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->hotelDeviceModeListShrink)) {
            $body['HotelDeviceModeList'] = $request->hotelDeviceModeListShrink;
        }
        if (!Utils::isUnset($request->hotelId)) {
            $body['HotelId'] = $request->hotelId;
        }
        if (!Utils::isUnset($request->hotelScreenSaverShrink)) {
            $body['HotelScreenSaver'] = $request->hotelScreenSaverShrink;
        }
        if (!Utils::isUnset($request->nightModeShrink)) {
            $body['NightMode'] = $request->nightModeShrink;
        }
        if (!Utils::isUnset($request->settingType)) {
            $body['SettingType'] = $request->settingType;
        }
        if (!Utils::isUnset($request->value)) {
            $body['Value'] = $request->value;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAligenieAccessToken)) {
            $realHeaders['x-acs-aligenie-access-token'] = Utils::toJSONString($headers->xAcsAligenieAccessToken);
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AddOrUpdateHotelSetting',
            'version'     => 'ip_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ip/addOrUpdateHotelSetting',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddOrUpdateHotelSettingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddOrUpdateHotelSettingRequest $request
     *
     * @return AddOrUpdateHotelSettingResponse
     */
    public function addOrUpdateHotelSetting($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new AddOrUpdateHotelSettingHeaders([]);

        return $this->addOrUpdateHotelSettingWithOptions($request, $headers, $runtime);
    }

    /**
     * @param AddOrUpdateScreenSaverRequest $tmpReq
     * @param AddOrUpdateScreenSaverHeaders $headers
     * @param RuntimeOptions                $runtime
     *
     * @return AddOrUpdateScreenSaverResponse
     */
    public function addOrUpdateScreenSaverWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new AddOrUpdateScreenSaverShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->hotelScreenSaver)) {
            $request->hotelScreenSaverShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->hotelScreenSaver, 'HotelScreenSaver', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->hotelId)) {
            $body['HotelId'] = $request->hotelId;
        }
        if (!Utils::isUnset($request->hotelScreenSaverShrink)) {
            $body['HotelScreenSaver'] = $request->hotelScreenSaverShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAligenieAccessToken)) {
            $realHeaders['x-acs-aligenie-access-token'] = Utils::toJSONString($headers->xAcsAligenieAccessToken);
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AddOrUpdateScreenSaver',
            'version'     => 'ip_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ip/addOrUpdateScreenSaver',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddOrUpdateScreenSaverResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddOrUpdateScreenSaverRequest $request
     *
     * @return AddOrUpdateScreenSaverResponse
     */
    public function addOrUpdateScreenSaver($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new AddOrUpdateScreenSaverHeaders([]);

        return $this->addOrUpdateScreenSaverWithOptions($request, $headers, $runtime);
    }

    /**
     * @param AddOrUpdateWelcomeTextRequest $request
     * @param AddOrUpdateWelcomeTextHeaders $headers
     * @param RuntimeOptions                $runtime
     *
     * @return AddOrUpdateWelcomeTextResponse
     */
    public function addOrUpdateWelcomeTextWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->hotelId)) {
            $body['HotelId'] = $request->hotelId;
        }
        if (!Utils::isUnset($request->musicUrl)) {
            $body['MusicUrl'] = $request->musicUrl;
        }
        if (!Utils::isUnset($request->welcomeText)) {
            $body['WelcomeText'] = $request->welcomeText;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAligenieAccessToken)) {
            $realHeaders['x-acs-aligenie-access-token'] = Utils::toJSONString($headers->xAcsAligenieAccessToken);
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AddOrUpdateWelcomeText',
            'version'     => 'ip_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ip/addOrUpdateWelcomeText',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddOrUpdateWelcomeTextResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddOrUpdateWelcomeTextRequest $request
     *
     * @return AddOrUpdateWelcomeTextResponse
     */
    public function addOrUpdateWelcomeText($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new AddOrUpdateWelcomeTextHeaders([]);

        return $this->addOrUpdateWelcomeTextWithOptions($request, $headers, $runtime);
    }

    /**
     * @param AuditHotelRequest $tmpReq
     * @param AuditHotelHeaders $headers
     * @param RuntimeOptions    $runtime
     *
     * @return AuditHotelResponse
     */
    public function auditHotelWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new AuditHotelShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->auditHotelReq)) {
            $request->auditHotelReqShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->auditHotelReq, 'AuditHotelReq', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->auditHotelReqShrink)) {
            $query['AuditHotelReq'] = $request->auditHotelReqShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAligenieAccessToken)) {
            $realHeaders['x-acs-aligenie-access-token'] = Utils::toJSONString($headers->xAcsAligenieAccessToken);
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AuditHotel',
            'version'     => 'ip_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ip/auditHotel',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return AuditHotelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AuditHotelRequest $request
     *
     * @return AuditHotelResponse
     */
    public function auditHotel($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new AuditHotelHeaders([]);

        return $this->auditHotelWithOptions($request, $headers, $runtime);
    }

    /**
     * @param BatchAddHotelRoomRequest $tmpReq
     * @param BatchAddHotelRoomHeaders $headers
     * @param RuntimeOptions           $runtime
     *
     * @return BatchAddHotelRoomResponse
     */
    public function batchAddHotelRoomWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new BatchAddHotelRoomShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->roomNoList)) {
            $request->roomNoListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->roomNoList, 'RoomNoList', 'simple');
        }
        $body = [];
        if (!Utils::isUnset($request->hotelId)) {
            $body['HotelId'] = $request->hotelId;
        }
        if (!Utils::isUnset($request->roomNoListShrink)) {
            $body['RoomNoList'] = $request->roomNoListShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAligenieAccessToken)) {
            $realHeaders['x-acs-aligenie-access-token'] = Utils::toJSONString($headers->xAcsAligenieAccessToken);
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'BatchAddHotelRoom',
            'version'     => 'ip_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ip/batchAddHotelRoom',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchAddHotelRoomResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param BatchAddHotelRoomRequest $request
     *
     * @return BatchAddHotelRoomResponse
     */
    public function batchAddHotelRoom($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new BatchAddHotelRoomHeaders([]);

        return $this->batchAddHotelRoomWithOptions($request, $headers, $runtime);
    }

    /**
     * @param BatchDeleteHotelRoomRequest $tmpReq
     * @param BatchDeleteHotelRoomHeaders $headers
     * @param RuntimeOptions              $runtime
     *
     * @return BatchDeleteHotelRoomResponse
     */
    public function batchDeleteHotelRoomWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new BatchDeleteHotelRoomShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->roomNoList)) {
            $request->roomNoListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->roomNoList, 'RoomNoList', 'simple');
        }
        $body = [];
        if (!Utils::isUnset($request->hotelId)) {
            $body['HotelId'] = $request->hotelId;
        }
        if (!Utils::isUnset($request->roomNoListShrink)) {
            $body['RoomNoList'] = $request->roomNoListShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAligenieAccessToken)) {
            $realHeaders['x-acs-aligenie-access-token'] = Utils::toJSONString($headers->xAcsAligenieAccessToken);
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'BatchDeleteHotelRoom',
            'version'     => 'ip_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ip/batchDeleteHotelRoom',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchDeleteHotelRoomResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param BatchDeleteHotelRoomRequest $request
     *
     * @return BatchDeleteHotelRoomResponse
     */
    public function batchDeleteHotelRoom($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new BatchDeleteHotelRoomHeaders([]);

        return $this->batchDeleteHotelRoomWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CheckoutWithAKRequest $request
     * @param CheckoutWithAKHeaders $headers
     * @param RuntimeOptions        $runtime
     *
     * @return CheckoutWithAKResponse
     */
    public function checkoutWithAKWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->hotelId)) {
            $body['HotelId'] = $request->hotelId;
        }
        if (!Utils::isUnset($request->roomNo)) {
            $body['RoomNo'] = $request->roomNo;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAligenieAccessToken)) {
            $realHeaders['x-acs-aligenie-access-token'] = Utils::toJSONString($headers->xAcsAligenieAccessToken);
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CheckoutWithAK',
            'version'     => 'ip_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ip/checkoutWithAK',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CheckoutWithAKResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CheckoutWithAKRequest $request
     *
     * @return CheckoutWithAKResponse
     */
    public function checkoutWithAK($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CheckoutWithAKHeaders([]);

        return $this->checkoutWithAKWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ChildAccountAuthRequest $request
     * @param ChildAccountAuthHeaders $headers
     * @param RuntimeOptions          $runtime
     *
     * @return ChildAccountAuthResponse
     */
    public function childAccountAuthWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->account)) {
            $body['Account'] = $request->account;
        }
        if (!Utils::isUnset($request->appKey)) {
            $body['AppKey'] = $request->appKey;
        }
        if (!Utils::isUnset($request->hotelId)) {
            $body['HotelId'] = $request->hotelId;
        }
        if (!Utils::isUnset($request->tbOpenId)) {
            $body['TbOpenId'] = $request->tbOpenId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAligenieAccessToken)) {
            $realHeaders['x-acs-aligenie-access-token'] = Utils::toJSONString($headers->xAcsAligenieAccessToken);
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ChildAccountAuth',
            'version'     => 'ip_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ip/childAccountAuth',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ChildAccountAuthResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ChildAccountAuthRequest $request
     *
     * @return ChildAccountAuthResponse
     */
    public function childAccountAuth($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ChildAccountAuthHeaders([]);

        return $this->childAccountAuthWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ControlRoomDeviceRequest $tmpReq
     * @param ControlRoomDeviceHeaders $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ControlRoomDeviceResponse
     */
    public function controlRoomDeviceWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ControlRoomDeviceShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->properties)) {
            $request->propertiesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->properties, 'Properties', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->cmd)) {
            $body['Cmd'] = $request->cmd;
        }
        if (!Utils::isUnset($request->deviceIndex)) {
            $body['DeviceIndex'] = $request->deviceIndex;
        }
        if (!Utils::isUnset($request->deviceNumber)) {
            $body['DeviceNumber'] = $request->deviceNumber;
        }
        if (!Utils::isUnset($request->hotelId)) {
            $body['HotelId'] = $request->hotelId;
        }
        if (!Utils::isUnset($request->propertiesShrink)) {
            $body['Properties'] = $request->propertiesShrink;
        }
        if (!Utils::isUnset($request->roomNo)) {
            $body['RoomNo'] = $request->roomNo;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAligenieAccessToken)) {
            $realHeaders['x-acs-aligenie-access-token'] = Utils::toJSONString($headers->xAcsAligenieAccessToken);
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ControlRoomDevice',
            'version'     => 'ip_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ip/controlRoomDevice',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ControlRoomDeviceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ControlRoomDeviceRequest $request
     *
     * @return ControlRoomDeviceResponse
     */
    public function controlRoomDevice($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ControlRoomDeviceHeaders([]);

        return $this->controlRoomDeviceWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateHotelRequest $tmpReq
     * @param CreateHotelHeaders $headers
     * @param RuntimeOptions     $runtime
     *
     * @return CreateHotelResponse
     */
    public function createHotelWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateHotelShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->relatedPks)) {
            $request->relatedPksShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->relatedPks, 'RelatedPks', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->appKey)) {
            $body['AppKey'] = $request->appKey;
        }
        if (!Utils::isUnset($request->estOpenTime)) {
            $body['EstOpenTime'] = $request->estOpenTime;
        }
        if (!Utils::isUnset($request->hotelAddress)) {
            $body['HotelAddress'] = $request->hotelAddress;
        }
        if (!Utils::isUnset($request->hotelEmail)) {
            $body['HotelEmail'] = $request->hotelEmail;
        }
        if (!Utils::isUnset($request->hotelName)) {
            $body['HotelName'] = $request->hotelName;
        }
        if (!Utils::isUnset($request->phoneNumber)) {
            $body['PhoneNumber'] = $request->phoneNumber;
        }
        if (!Utils::isUnset($request->relatedPk)) {
            $body['RelatedPk'] = $request->relatedPk;
        }
        if (!Utils::isUnset($request->relatedPksShrink)) {
            $body['RelatedPks'] = $request->relatedPksShrink;
        }
        if (!Utils::isUnset($request->remark)) {
            $body['Remark'] = $request->remark;
        }
        if (!Utils::isUnset($request->roomNum)) {
            $body['RoomNum'] = $request->roomNum;
        }
        if (!Utils::isUnset($request->tbOpenId)) {
            $body['TbOpenId'] = $request->tbOpenId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAligenieAccessToken)) {
            $realHeaders['x-acs-aligenie-access-token'] = Utils::toJSONString($headers->xAcsAligenieAccessToken);
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateHotel',
            'version'     => 'ip_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ip/createHotel',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateHotelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateHotelRequest $request
     *
     * @return CreateHotelResponse
     */
    public function createHotel($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CreateHotelHeaders([]);

        return $this->createHotelWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateHotelAlarmRequest $tmpReq
     * @param CreateHotelAlarmHeaders $headers
     * @param RuntimeOptions          $runtime
     *
     * @return CreateHotelAlarmResponse
     */
    public function createHotelAlarmWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateHotelAlarmShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->rooms)) {
            $request->roomsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->rooms, 'Rooms', 'json');
        }
        if (!Utils::isUnset($tmpReq->scheduleInfo)) {
            $request->scheduleInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->scheduleInfo, 'ScheduleInfo', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->hotelId)) {
            $body['HotelId'] = $request->hotelId;
        }
        if (!Utils::isUnset($request->musicType)) {
            $body['MusicType'] = $request->musicType;
        }
        if (!Utils::isUnset($request->roomsShrink)) {
            $body['Rooms'] = $request->roomsShrink;
        }
        if (!Utils::isUnset($request->scheduleInfoShrink)) {
            $body['ScheduleInfo'] = $request->scheduleInfoShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAligenieAccessToken)) {
            $realHeaders['x-acs-aligenie-access-token'] = Utils::toJSONString($headers->xAcsAligenieAccessToken);
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateHotelAlarm',
            'version'     => 'ip_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ip/createHotelAlarm',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateHotelAlarmResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateHotelAlarmRequest $request
     *
     * @return CreateHotelAlarmResponse
     */
    public function createHotelAlarm($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CreateHotelAlarmHeaders([]);

        return $this->createHotelAlarmWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateRcuSceneRequest $tmpReq
     * @param CreateRcuSceneHeaders $headers
     * @param RuntimeOptions        $runtime
     *
     * @return CreateRcuSceneResponse
     */
    public function createRcuSceneWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateRcuSceneShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->sceneRelationExtDTO)) {
            $request->sceneRelationExtDTOShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->sceneRelationExtDTO, 'SceneRelationExtDTO', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->hotelId)) {
            $body['HotelId'] = $request->hotelId;
        }
        if (!Utils::isUnset($request->sceneId)) {
            $body['SceneId'] = $request->sceneId;
        }
        if (!Utils::isUnset($request->sceneRelationExtDTOShrink)) {
            $body['SceneRelationExtDTO'] = $request->sceneRelationExtDTOShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAligenieAccessToken)) {
            $realHeaders['x-acs-aligenie-access-token'] = Utils::toJSONString($headers->xAcsAligenieAccessToken);
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateRcuScene',
            'version'     => 'ip_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ip/createRcuScene',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateRcuSceneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateRcuSceneRequest $request
     *
     * @return CreateRcuSceneResponse
     */
    public function createRcuScene($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CreateRcuSceneHeaders([]);

        return $this->createRcuSceneWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DeleteCartoonRequest $request
     * @param DeleteCartoonHeaders $headers
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteCartoonResponse
     */
    public function deleteCartoonWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->hotelId)) {
            $body['HotelId'] = $request->hotelId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAligenieAccessToken)) {
            $realHeaders['x-acs-aligenie-access-token'] = Utils::toJSONString($headers->xAcsAligenieAccessToken);
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteCartoon',
            'version'     => 'ip_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ip/deleteCartoon',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteCartoonResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteCartoonRequest $request
     *
     * @return DeleteCartoonResponse
     */
    public function deleteCartoon($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new DeleteCartoonHeaders([]);

        return $this->deleteCartoonWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DeleteCustomQARequest $tmpReq
     * @param DeleteCustomQAHeaders $headers
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteCustomQAResponse
     */
    public function deleteCustomQAWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DeleteCustomQAShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->customQAIds)) {
            $request->customQAIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->customQAIds, 'CustomQAIds', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->customQAIdsShrink)) {
            $body['CustomQAIds'] = $request->customQAIdsShrink;
        }
        if (!Utils::isUnset($request->hotelId)) {
            $body['HotelId'] = $request->hotelId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAligenieAccessToken)) {
            $realHeaders['x-acs-aligenie-access-token'] = Utils::toJSONString($headers->xAcsAligenieAccessToken);
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteCustomQA',
            'version'     => 'ip_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ip/deleteCustomQA',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteCustomQAResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteCustomQARequest $request
     *
     * @return DeleteCustomQAResponse
     */
    public function deleteCustomQA($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new DeleteCustomQAHeaders([]);

        return $this->deleteCustomQAWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DeleteHotelAlarmRequest $tmpReq
     * @param DeleteHotelAlarmHeaders $headers
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteHotelAlarmResponse
     */
    public function deleteHotelAlarmWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DeleteHotelAlarmShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->alarms)) {
            $request->alarmsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->alarms, 'Alarms', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->alarmsShrink)) {
            $body['Alarms'] = $request->alarmsShrink;
        }
        if (!Utils::isUnset($request->hotelId)) {
            $body['HotelId'] = $request->hotelId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAligenieAccessToken)) {
            $realHeaders['x-acs-aligenie-access-token'] = Utils::toJSONString($headers->xAcsAligenieAccessToken);
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteHotelAlarm',
            'version'     => 'ip_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ip/deleteHotelAlarm',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteHotelAlarmResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteHotelAlarmRequest $request
     *
     * @return DeleteHotelAlarmResponse
     */
    public function deleteHotelAlarm($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new DeleteHotelAlarmHeaders([]);

        return $this->deleteHotelAlarmWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DeleteHotelSceneBookItemRequest $request
     * @param DeleteHotelSceneBookItemHeaders $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return DeleteHotelSceneBookItemResponse
     */
    public function deleteHotelSceneBookItemWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->hotelId)) {
            $body['HotelId'] = $request->hotelId;
        }
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAligenieAccessToken)) {
            $realHeaders['x-acs-aligenie-access-token'] = Utils::toJSONString($headers->xAcsAligenieAccessToken);
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteHotelSceneBookItem',
            'version'     => 'ip_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ip/deleteHotelSceneBookItem',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteHotelSceneBookItemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteHotelSceneBookItemRequest $request
     *
     * @return DeleteHotelSceneBookItemResponse
     */
    public function deleteHotelSceneBookItem($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new DeleteHotelSceneBookItemHeaders([]);

        return $this->deleteHotelSceneBookItemWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DeleteHotelSettingRequest $request
     * @param DeleteHotelSettingHeaders $headers
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteHotelSettingResponse
     */
    public function deleteHotelSettingWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->hotelId)) {
            $body['HotelId'] = $request->hotelId;
        }
        if (!Utils::isUnset($request->settingType)) {
            $body['SettingType'] = $request->settingType;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAligenieAccessToken)) {
            $realHeaders['x-acs-aligenie-access-token'] = Utils::toJSONString($headers->xAcsAligenieAccessToken);
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteHotelSetting',
            'version'     => 'ip_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ip/deleteHotelSetting',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteHotelSettingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteHotelSettingRequest $request
     *
     * @return DeleteHotelSettingResponse
     */
    public function deleteHotelSetting($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new DeleteHotelSettingHeaders([]);

        return $this->deleteHotelSettingWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DeleteMessageTemplateRequest $request
     * @param DeleteMessageTemplateHeaders $headers
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteMessageTemplateResponse
     */
    public function deleteMessageTemplateWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->templateId)) {
            $body['TemplateId'] = $request->templateId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAligenieAccessToken)) {
            $realHeaders['x-acs-aligenie-access-token'] = Utils::toJSONString($headers->xAcsAligenieAccessToken);
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteMessageTemplate',
            'version'     => 'ip_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ip/deleteMessageTemplate',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteMessageTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteMessageTemplateRequest $request
     *
     * @return DeleteMessageTemplateResponse
     */
    public function deleteMessageTemplate($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new DeleteMessageTemplateHeaders([]);

        return $this->deleteMessageTemplateWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DeleteRcuSceneRequest $request
     * @param DeleteRcuSceneHeaders $headers
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteRcuSceneResponse
     */
    public function deleteRcuSceneWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->hotelId)) {
            $body['HotelId'] = $request->hotelId;
        }
        if (!Utils::isUnset($request->sceneId)) {
            $body['SceneId'] = $request->sceneId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAligenieAccessToken)) {
            $realHeaders['x-acs-aligenie-access-token'] = Utils::toJSONString($headers->xAcsAligenieAccessToken);
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteRcuScene',
            'version'     => 'ip_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ip/deleteRcuScene',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteRcuSceneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteRcuSceneRequest $request
     *
     * @return DeleteRcuSceneResponse
     */
    public function deleteRcuScene($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new DeleteRcuSceneHeaders([]);

        return $this->deleteRcuSceneWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DeviceControlRequest $tmpReq
     * @param DeviceControlHeaders $headers
     * @param RuntimeOptions       $runtime
     *
     * @return DeviceControlResponse
     */
    public function deviceControlWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DeviceControlShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->payload)) {
            $request->payloadShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->payload, 'Payload', 'json');
        }
        if (!Utils::isUnset($tmpReq->userInfo)) {
            $request->userInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->userInfo, 'UserInfo', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->payloadShrink)) {
            $query['Payload'] = $request->payloadShrink;
        }
        if (!Utils::isUnset($request->userInfoShrink)) {
            $query['UserInfo'] = $request->userInfoShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAligenieAccessToken)) {
            $realHeaders['x-acs-aligenie-access-token'] = Utils::toJSONString($headers->xAcsAligenieAccessToken);
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeviceControl',
            'version'     => 'ip_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ip/deviceControl',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeviceControlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeviceControlRequest $request
     *
     * @return DeviceControlResponse
     */
    public function deviceControl($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new DeviceControlHeaders([]);

        return $this->deviceControlWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetBasicInfoQARequest $request
     * @param GetBasicInfoQAHeaders $headers
     * @param RuntimeOptions        $runtime
     *
     * @return GetBasicInfoQAResponse
     */
    public function getBasicInfoQAWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->hotelId)) {
            $body['HotelId'] = $request->hotelId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAligenieAccessToken)) {
            $realHeaders['x-acs-aligenie-access-token'] = Utils::toJSONString($headers->xAcsAligenieAccessToken);
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetBasicInfoQA',
            'version'     => 'ip_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ip/getBasicInfoQA',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetBasicInfoQAResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetBasicInfoQARequest $request
     *
     * @return GetBasicInfoQAResponse
     */
    public function getBasicInfoQA($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetBasicInfoQAHeaders([]);

        return $this->getBasicInfoQAWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetCartoonRequest $request
     * @param GetCartoonHeaders $headers
     * @param RuntimeOptions    $runtime
     *
     * @return GetCartoonResponse
     */
    public function getCartoonWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->hotelId)) {
            $body['HotelId'] = $request->hotelId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAligenieAccessToken)) {
            $realHeaders['x-acs-aligenie-access-token'] = Utils::toJSONString($headers->xAcsAligenieAccessToken);
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetCartoon',
            'version'     => 'ip_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ip/getCartoon',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetCartoonResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetCartoonRequest $request
     *
     * @return GetCartoonResponse
     */
    public function getCartoon($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetCartoonHeaders([]);

        return $this->getCartoonWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetHotelContactByGenieDeviceRequest $tmpReq
     * @param GetHotelContactByGenieDeviceHeaders $headers
     * @param RuntimeOptions                      $runtime
     *
     * @return GetHotelContactByGenieDeviceResponse
     */
    public function getHotelContactByGenieDeviceWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetHotelContactByGenieDeviceShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->deviceInfo)) {
            $request->deviceInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->deviceInfo, 'DeviceInfo', 'json');
        }
        if (!Utils::isUnset($tmpReq->userInfo)) {
            $request->userInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->userInfo, 'UserInfo', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->deviceInfoShrink)) {
            $query['DeviceInfo'] = $request->deviceInfoShrink;
        }
        if (!Utils::isUnset($request->userInfoShrink)) {
            $query['UserInfo'] = $request->userInfoShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAligenieAccessToken)) {
            $realHeaders['x-acs-aligenie-access-token'] = Utils::toJSONString($headers->xAcsAligenieAccessToken);
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetHotelContactByGenieDevice',
            'version'     => 'ip_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ip/getHotelContactByGenieDevice',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetHotelContactByGenieDeviceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetHotelContactByGenieDeviceRequest $request
     *
     * @return GetHotelContactByGenieDeviceResponse
     */
    public function getHotelContactByGenieDevice($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetHotelContactByGenieDeviceHeaders([]);

        return $this->getHotelContactByGenieDeviceWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetHotelContactByNumberRequest $tmpReq
     * @param GetHotelContactByNumberHeaders $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return GetHotelContactByNumberResponse
     */
    public function getHotelContactByNumberWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetHotelContactByNumberShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->userInfo)) {
            $request->userInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->userInfo, 'UserInfo', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->userInfoShrink)) {
            $query['UserInfo'] = $request->userInfoShrink;
        }
        $body = [];
        if (!Utils::isUnset($request->number)) {
            $body['Number'] = $request->number;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAligenieAccessToken)) {
            $realHeaders['x-acs-aligenie-access-token'] = Utils::toJSONString($headers->xAcsAligenieAccessToken);
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetHotelContactByNumber',
            'version'     => 'ip_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ip/getHotelContactByNumber',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetHotelContactByNumberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetHotelContactByNumberRequest $request
     *
     * @return GetHotelContactByNumberResponse
     */
    public function getHotelContactByNumber($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetHotelContactByNumberHeaders([]);

        return $this->getHotelContactByNumberWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetHotelContactsRequest $tmpReq
     * @param GetHotelContactsHeaders $headers
     * @param RuntimeOptions          $runtime
     *
     * @return GetHotelContactsResponse
     */
    public function getHotelContactsWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetHotelContactsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->userInfo)) {
            $request->userInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->userInfo, 'UserInfo', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->userInfoShrink)) {
            $query['UserInfo'] = $request->userInfoShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAligenieAccessToken)) {
            $realHeaders['x-acs-aligenie-access-token'] = Utils::toJSONString($headers->xAcsAligenieAccessToken);
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetHotelContacts',
            'version'     => 'ip_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ip/getHotelContacts',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetHotelContactsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetHotelContactsRequest $request
     *
     * @return GetHotelContactsResponse
     */
    public function getHotelContacts($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetHotelContactsHeaders([]);

        return $this->getHotelContactsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetHotelHomeBackImageAndModesRequest $tmpReq
     * @param GetHotelHomeBackImageAndModesHeaders $headers
     * @param RuntimeOptions                       $runtime
     *
     * @return GetHotelHomeBackImageAndModesResponse
     */
    public function getHotelHomeBackImageAndModesWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetHotelHomeBackImageAndModesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->userInfo)) {
            $request->userInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->userInfo, 'UserInfo', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->userInfoShrink)) {
            $query['UserInfo'] = $request->userInfoShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAligenieAccessToken)) {
            $realHeaders['x-acs-aligenie-access-token'] = Utils::toJSONString($headers->xAcsAligenieAccessToken);
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetHotelHomeBackImageAndModes',
            'version'     => 'ip_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ip/getHotelHomeBackImageAndModes',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetHotelHomeBackImageAndModesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetHotelHomeBackImageAndModesRequest $request
     *
     * @return GetHotelHomeBackImageAndModesResponse
     */
    public function getHotelHomeBackImageAndModes($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetHotelHomeBackImageAndModesHeaders([]);

        return $this->getHotelHomeBackImageAndModesWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetHotelNoticeRequest $tmpReq
     * @param GetHotelNoticeHeaders $headers
     * @param RuntimeOptions        $runtime
     *
     * @return GetHotelNoticeResponse
     */
    public function getHotelNoticeWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetHotelNoticeShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->userInfo)) {
            $request->userInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->userInfo, 'UserInfo', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->userInfoShrink)) {
            $query['UserInfo'] = $request->userInfoShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAligenieAccessToken)) {
            $realHeaders['x-acs-aligenie-access-token'] = Utils::toJSONString($headers->xAcsAligenieAccessToken);
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetHotelNotice',
            'version'     => 'ip_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ip/getHotelNotice',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetHotelNoticeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetHotelNoticeRequest $request
     *
     * @return GetHotelNoticeResponse
     */
    public function getHotelNotice($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetHotelNoticeHeaders([]);

        return $this->getHotelNoticeWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetHotelNoticeV2Request $tmpReq
     * @param GetHotelNoticeV2Headers $headers
     * @param RuntimeOptions          $runtime
     *
     * @return GetHotelNoticeV2Response
     */
    public function getHotelNoticeV2WithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetHotelNoticeV2ShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->userInfo)) {
            $request->userInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->userInfo, 'UserInfo', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->userInfoShrink)) {
            $query['UserInfo'] = $request->userInfoShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAligenieAccessToken)) {
            $realHeaders['x-acs-aligenie-access-token'] = Utils::toJSONString($headers->xAcsAligenieAccessToken);
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetHotelNoticeV2',
            'version'     => 'ip_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ip/getHotelNoticeV2',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetHotelNoticeV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetHotelNoticeV2Request $request
     *
     * @return GetHotelNoticeV2Response
     */
    public function getHotelNoticeV2($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetHotelNoticeV2Headers([]);

        return $this->getHotelNoticeV2WithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetHotelOrderDetailRequest $tmpReq
     * @param GetHotelOrderDetailHeaders $headers
     * @param RuntimeOptions             $runtime
     *
     * @return GetHotelOrderDetailResponse
     */
    public function getHotelOrderDetailWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetHotelOrderDetailShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->payload)) {
            $request->payloadShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->payload, 'Payload', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->payloadShrink)) {
            $query['Payload'] = $request->payloadShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAligenieAccessToken)) {
            $realHeaders['x-acs-aligenie-access-token'] = Utils::toJSONString($headers->xAcsAligenieAccessToken);
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetHotelOrderDetail',
            'version'     => 'ip_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ip/getHotelOrderDetail',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetHotelOrderDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetHotelOrderDetailRequest $request
     *
     * @return GetHotelOrderDetailResponse
     */
    public function getHotelOrderDetail($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetHotelOrderDetailHeaders([]);

        return $this->getHotelOrderDetailWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetHotelRoomDeviceRequest $request
     * @param GetHotelRoomDeviceHeaders $headers
     * @param RuntimeOptions            $runtime
     *
     * @return GetHotelRoomDeviceResponse
     */
    public function getHotelRoomDeviceWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->hotelId)) {
            $query['HotelId'] = $request->hotelId;
        }
        if (!Utils::isUnset($request->roomNo)) {
            $query['RoomNo'] = $request->roomNo;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAligenieAccessToken)) {
            $realHeaders['x-acs-aligenie-access-token'] = Utils::toJSONString($headers->xAcsAligenieAccessToken);
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetHotelRoomDevice',
            'version'     => 'ip_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ip/getHotelRoomDevice',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetHotelRoomDeviceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetHotelRoomDeviceRequest $request
     *
     * @return GetHotelRoomDeviceResponse
     */
    public function getHotelRoomDevice($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetHotelRoomDeviceHeaders([]);

        return $this->getHotelRoomDeviceWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetHotelSampleUtterancesRequest $tmpReq
     * @param GetHotelSampleUtterancesHeaders $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return GetHotelSampleUtterancesResponse
     */
    public function getHotelSampleUtterancesWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetHotelSampleUtterancesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->userInfo)) {
            $request->userInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->userInfo, 'UserInfo', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->userInfoShrink)) {
            $query['UserInfo'] = $request->userInfoShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAligenieAccessToken)) {
            $realHeaders['x-acs-aligenie-access-token'] = Utils::toJSONString($headers->xAcsAligenieAccessToken);
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetHotelSampleUtterances',
            'version'     => 'ip_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ip/getHotelSampleUtterances',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetHotelSampleUtterancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetHotelSampleUtterancesRequest $request
     *
     * @return GetHotelSampleUtterancesResponse
     */
    public function getHotelSampleUtterances($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetHotelSampleUtterancesHeaders([]);

        return $this->getHotelSampleUtterancesWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetHotelSceneItemDetailRequest $request
     * @param GetHotelSceneItemDetailHeaders $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return GetHotelSceneItemDetailResponse
     */
    public function getHotelSceneItemDetailWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->hotelId)) {
            $body['HotelId'] = $request->hotelId;
        }
        if (!Utils::isUnset($request->itemId)) {
            $body['ItemId'] = $request->itemId;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAligenieAccessToken)) {
            $realHeaders['x-acs-aligenie-access-token'] = Utils::toJSONString($headers->xAcsAligenieAccessToken);
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetHotelSceneItemDetail',
            'version'     => 'ip_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ip/getHotelSceneItemDetail',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetHotelSceneItemDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetHotelSceneItemDetailRequest $request
     *
     * @return GetHotelSceneItemDetailResponse
     */
    public function getHotelSceneItemDetail($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetHotelSceneItemDetailHeaders([]);

        return $this->getHotelSceneItemDetailWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetHotelScreenSaverRequest $tmpReq
     * @param GetHotelScreenSaverHeaders $headers
     * @param RuntimeOptions             $runtime
     *
     * @return GetHotelScreenSaverResponse
     */
    public function getHotelScreenSaverWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetHotelScreenSaverShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->userInfo)) {
            $request->userInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->userInfo, 'UserInfo', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->userInfoShrink)) {
            $query['UserInfo'] = $request->userInfoShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAligenieAccessToken)) {
            $realHeaders['x-acs-aligenie-access-token'] = Utils::toJSONString($headers->xAcsAligenieAccessToken);
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetHotelScreenSaver',
            'version'     => 'ip_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ip/getHotelScreenSaver',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetHotelScreenSaverResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetHotelScreenSaverRequest $request
     *
     * @return GetHotelScreenSaverResponse
     */
    public function getHotelScreenSaver($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetHotelScreenSaverHeaders([]);

        return $this->getHotelScreenSaverWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetHotelScreenSaverStyleRequest $request
     * @param GetHotelScreenSaverStyleHeaders $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return GetHotelScreenSaverStyleResponse
     */
    public function getHotelScreenSaverStyleWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->hotelId)) {
            $body['HotelId'] = $request->hotelId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAligenieAccessToken)) {
            $realHeaders['x-acs-aligenie-access-token'] = Utils::toJSONString($headers->xAcsAligenieAccessToken);
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetHotelScreenSaverStyle',
            'version'     => 'ip_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ip/getHotelScreenSaverStyle',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetHotelScreenSaverStyleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetHotelScreenSaverStyleRequest $request
     *
     * @return GetHotelScreenSaverStyleResponse
     */
    public function getHotelScreenSaverStyle($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetHotelScreenSaverStyleHeaders([]);

        return $this->getHotelScreenSaverStyleWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetHotelSettingRequest $request
     * @param GetHotelSettingHeaders $headers
     * @param RuntimeOptions         $runtime
     *
     * @return GetHotelSettingResponse
     */
    public function getHotelSettingWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->hotelId)) {
            $body['HotelId'] = $request->hotelId;
        }
        if (!Utils::isUnset($request->settingType)) {
            $body['SettingType'] = $request->settingType;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAligenieAccessToken)) {
            $realHeaders['x-acs-aligenie-access-token'] = Utils::toJSONString($headers->xAcsAligenieAccessToken);
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetHotelSetting',
            'version'     => 'ip_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ip/getHotelSetting',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetHotelSettingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetHotelSettingRequest $request
     *
     * @return GetHotelSettingResponse
     */
    public function getHotelSetting($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetHotelSettingHeaders([]);

        return $this->getHotelSettingWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetRelationProductListHeaders $headers
     * @param RuntimeOptions                $runtime
     *
     * @return GetRelationProductListResponse
     */
    public function getRelationProductListWithOptions($headers, $runtime)
    {
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAligenieAccessToken)) {
            $realHeaders['x-acs-aligenie-access-token'] = Utils::toJSONString($headers->xAcsAligenieAccessToken);
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
        ]);
        $params = new Params([
            'action'      => 'GetRelationProductList',
            'version'     => 'ip_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ip/getRelationProductList',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetRelationProductListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return GetRelationProductListResponse
     */
    public function getRelationProductList()
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetRelationProductListHeaders([]);

        return $this->getRelationProductListWithOptions($headers, $runtime);
    }

    /**
     * @param GetUnionIdRequest $request
     * @param GetUnionIdHeaders $headers
     * @param RuntimeOptions    $runtime
     *
     * @return GetUnionIdResponse
     */
    public function getUnionIdWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->encodeKey)) {
            $body['EncodeKey'] = $request->encodeKey;
        }
        if (!Utils::isUnset($request->encodeType)) {
            $body['EncodeType'] = $request->encodeType;
        }
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->idType)) {
            $body['IdType'] = $request->idType;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAligenieAccessToken)) {
            $realHeaders['x-acs-aligenie-access-token'] = Utils::toJSONString($headers->xAcsAligenieAccessToken);
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetUnionId',
            'version'     => 'ip_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ip/getUnionId',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetUnionIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetUnionIdRequest $request
     *
     * @return GetUnionIdResponse
     */
    public function getUnionId($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetUnionIdHeaders([]);

        return $this->getUnionIdWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetWelcomeTextAndMusicRequest $request
     * @param GetWelcomeTextAndMusicHeaders $headers
     * @param RuntimeOptions                $runtime
     *
     * @return GetWelcomeTextAndMusicResponse
     */
    public function getWelcomeTextAndMusicWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->hotelId)) {
            $body['HotelId'] = $request->hotelId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAligenieAccessToken)) {
            $realHeaders['x-acs-aligenie-access-token'] = Utils::toJSONString($headers->xAcsAligenieAccessToken);
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetWelcomeTextAndMusic',
            'version'     => 'ip_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ip/getWelcomeTextAndMusic',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetWelcomeTextAndMusicResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetWelcomeTextAndMusicRequest $request
     *
     * @return GetWelcomeTextAndMusicResponse
     */
    public function getWelcomeTextAndMusic($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetWelcomeTextAndMusicHeaders([]);

        return $this->getWelcomeTextAndMusicWithOptions($request, $headers, $runtime);
    }

    /**
     * @param HotelQrBindRequest $request
     * @param HotelQrBindHeaders $headers
     * @param RuntimeOptions     $runtime
     *
     * @return HotelQrBindResponse
     */
    public function hotelQrBindWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientId)) {
            $body['ClientId'] = $request->clientId;
        }
        if (!Utils::isUnset($request->code)) {
            $body['Code'] = $request->code;
        }
        if (!Utils::isUnset($request->extInfo)) {
            $body['ExtInfo'] = $request->extInfo;
        }
        if (!Utils::isUnset($request->hotelId)) {
            $body['HotelId'] = $request->hotelId;
        }
        if (!Utils::isUnset($request->roomNo)) {
            $body['RoomNo'] = $request->roomNo;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAligenieAccessToken)) {
            $realHeaders['x-acs-aligenie-access-token'] = Utils::toJSONString($headers->xAcsAligenieAccessToken);
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'HotelQrBind',
            'version'     => 'ip_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ip/hotelQrBind',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return HotelQrBindResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param HotelQrBindRequest $request
     *
     * @return HotelQrBindResponse
     */
    public function hotelQrBind($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new HotelQrBindHeaders([]);

        return $this->hotelQrBindWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ImportHotelConfigRequest $tmpReq
     * @param ImportHotelConfigHeaders $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ImportHotelConfigResponse
     */
    public function importHotelConfigWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ImportHotelConfigShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->importHotelConfig)) {
            $request->importHotelConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->importHotelConfig, 'ImportHotelConfig', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->hotelId)) {
            $body['HotelId'] = $request->hotelId;
        }
        if (!Utils::isUnset($request->importHotelConfigShrink)) {
            $body['ImportHotelConfig'] = $request->importHotelConfigShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAligenieAccessToken)) {
            $realHeaders['x-acs-aligenie-access-token'] = Utils::toJSONString($headers->xAcsAligenieAccessToken);
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ImportHotelConfig',
            'version'     => 'ip_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ip/importHotelConfig',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ImportHotelConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ImportHotelConfigRequest $request
     *
     * @return ImportHotelConfigResponse
     */
    public function importHotelConfig($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ImportHotelConfigHeaders([]);

        return $this->importHotelConfigWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ImportRoomControlDevicesRequest $tmpReq
     * @param ImportRoomControlDevicesHeaders $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return ImportRoomControlDevicesResponse
     */
    public function importRoomControlDevicesWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ImportRoomControlDevicesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->locationDevices)) {
            $request->locationDevicesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->locationDevices, 'LocationDevices', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->enableInfraredDeviceImport)) {
            $body['EnableInfraredDeviceImport'] = $request->enableInfraredDeviceImport;
        }
        if (!Utils::isUnset($request->hotelId)) {
            $body['HotelId'] = $request->hotelId;
        }
        if (!Utils::isUnset($request->locationDevicesShrink)) {
            $body['LocationDevices'] = $request->locationDevicesShrink;
        }
        if (!Utils::isUnset($request->roomNo)) {
            $body['RoomNo'] = $request->roomNo;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAligenieAccessToken)) {
            $realHeaders['x-acs-aligenie-access-token'] = Utils::toJSONString($headers->xAcsAligenieAccessToken);
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ImportRoomControlDevices',
            'version'     => 'ip_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ip/importRoomControlDevices',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ImportRoomControlDevicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ImportRoomControlDevicesRequest $request
     *
     * @return ImportRoomControlDevicesResponse
     */
    public function importRoomControlDevices($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ImportRoomControlDevicesHeaders([]);

        return $this->importRoomControlDevicesWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ImportRoomGenieScenesRequest $tmpReq
     * @param ImportRoomGenieScenesHeaders $headers
     * @param RuntimeOptions               $runtime
     *
     * @return ImportRoomGenieScenesResponse
     */
    public function importRoomGenieScenesWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ImportRoomGenieScenesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->sceneList)) {
            $request->sceneListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->sceneList, 'SceneList', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->hotelId)) {
            $body['HotelId'] = $request->hotelId;
        }
        if (!Utils::isUnset($request->roomNo)) {
            $body['RoomNo'] = $request->roomNo;
        }
        if (!Utils::isUnset($request->sceneListShrink)) {
            $body['SceneList'] = $request->sceneListShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAligenieAccessToken)) {
            $realHeaders['x-acs-aligenie-access-token'] = Utils::toJSONString($headers->xAcsAligenieAccessToken);
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ImportRoomGenieScenes',
            'version'     => 'ip_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ip/importRoomGenieScenes',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ImportRoomGenieScenesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ImportRoomGenieScenesRequest $request
     *
     * @return ImportRoomGenieScenesResponse
     */
    public function importRoomGenieScenes($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ImportRoomGenieScenesHeaders([]);

        return $this->importRoomGenieScenesWithOptions($request, $headers, $runtime);
    }

    /**
     * @param InsertHotelSceneBookItemRequest $tmpReq
     * @param InsertHotelSceneBookItemHeaders $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return InsertHotelSceneBookItemResponse
     */
    public function insertHotelSceneBookItemWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new InsertHotelSceneBookItemShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->addHotelSceneItemReq)) {
            $request->addHotelSceneItemReqShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->addHotelSceneItemReq, 'AddHotelSceneItemReq', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->addHotelSceneItemReqShrink)) {
            $query['AddHotelSceneItemReq'] = $request->addHotelSceneItemReqShrink;
        }
        $body = [];
        if (!Utils::isUnset($request->hotelId)) {
            $body['HotelId'] = $request->hotelId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAligenieAccessToken)) {
            $realHeaders['x-acs-aligenie-access-token'] = Utils::toJSONString($headers->xAcsAligenieAccessToken);
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'InsertHotelSceneBookItem',
            'version'     => 'ip_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ip/insertHotelSceneBookItem',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return InsertHotelSceneBookItemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param InsertHotelSceneBookItemRequest $request
     *
     * @return InsertHotelSceneBookItemResponse
     */
    public function insertHotelSceneBookItem($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new InsertHotelSceneBookItemHeaders([]);

        return $this->insertHotelSceneBookItemWithOptions($request, $headers, $runtime);
    }

    /**
     * @param InvokeRobotPushRequest $request
     * @param InvokeRobotPushHeaders $headers
     * @param RuntimeOptions         $runtime
     *
     * @return InvokeRobotPushResponse
     */
    public function invokeRobotPushWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->hotelId)) {
            $body['HotelId'] = $request->hotelId;
        }
        if (!Utils::isUnset($request->pushType)) {
            $body['PushType'] = $request->pushType;
        }
        if (!Utils::isUnset($request->roomNo)) {
            $body['RoomNo'] = $request->roomNo;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAligenieAccessToken)) {
            $realHeaders['x-acs-aligenie-access-token'] = Utils::toJSONString($headers->xAcsAligenieAccessToken);
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'InvokeRobotPush',
            'version'     => 'ip_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ip/invokeRobotPush',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return InvokeRobotPushResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param InvokeRobotPushRequest $request
     *
     * @return InvokeRobotPushResponse
     */
    public function invokeRobotPush($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new InvokeRobotPushHeaders([]);

        return $this->invokeRobotPushWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListAllProvincesHeaders $headers
     * @param RuntimeOptions          $runtime
     *
     * @return ListAllProvincesResponse
     */
    public function listAllProvincesWithOptions($headers, $runtime)
    {
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAligenieAccessToken)) {
            $realHeaders['x-acs-aligenie-access-token'] = Utils::toJSONString($headers->xAcsAligenieAccessToken);
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
        ]);
        $params = new Params([
            'action'      => 'ListAllProvinces',
            'version'     => 'ip_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ip/listAllProvinces',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListAllProvincesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return ListAllProvincesResponse
     */
    public function listAllProvinces()
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ListAllProvincesHeaders([]);

        return $this->listAllProvincesWithOptions($headers, $runtime);
    }

    /**
     * @param ListCitiesByProvinceRequest $request
     * @param ListCitiesByProvinceHeaders $headers
     * @param RuntimeOptions              $runtime
     *
     * @return ListCitiesByProvinceResponse
     */
    public function listCitiesByProvinceWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->province)) {
            $body['Province'] = $request->province;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAligenieAccessToken)) {
            $realHeaders['x-acs-aligenie-access-token'] = Utils::toJSONString($headers->xAcsAligenieAccessToken);
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListCitiesByProvince',
            'version'     => 'ip_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ip/listCitiesByProvince',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListCitiesByProvinceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListCitiesByProvinceRequest $request
     *
     * @return ListCitiesByProvinceResponse
     */
    public function listCitiesByProvince($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ListCitiesByProvinceHeaders([]);

        return $this->listCitiesByProvinceWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListCustomQARequest $tmpReq
     * @param ListCustomQAHeaders $headers
     * @param RuntimeOptions      $runtime
     *
     * @return ListCustomQAResponse
     */
    public function listCustomQAWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListCustomQAShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->page)) {
            $request->pageShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->page, 'Page', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->hotelId)) {
            $body['HotelId'] = $request->hotelId;
        }
        if (!Utils::isUnset($request->keyword)) {
            $body['Keyword'] = $request->keyword;
        }
        if (!Utils::isUnset($request->pageShrink)) {
            $body['Page'] = $request->pageShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAligenieAccessToken)) {
            $realHeaders['x-acs-aligenie-access-token'] = Utils::toJSONString($headers->xAcsAligenieAccessToken);
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListCustomQA',
            'version'     => 'ip_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ip/listCustomQA',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListCustomQAResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListCustomQARequest $request
     *
     * @return ListCustomQAResponse
     */
    public function listCustomQA($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ListCustomQAHeaders([]);

        return $this->listCustomQAWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListDialogueTemplateRequest $request
     * @param ListDialogueTemplateHeaders $headers
     * @param RuntimeOptions              $runtime
     *
     * @return ListDialogueTemplateResponse
     */
    public function listDialogueTemplateWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->hotelId)) {
            $body['HotelId'] = $request->hotelId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAligenieAccessToken)) {
            $realHeaders['x-acs-aligenie-access-token'] = Utils::toJSONString($headers->xAcsAligenieAccessToken);
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListDialogueTemplate',
            'version'     => 'ip_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ip/listDialogueTemplate',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListDialogueTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListDialogueTemplateRequest $request
     *
     * @return ListDialogueTemplateResponse
     */
    public function listDialogueTemplate($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ListDialogueTemplateHeaders([]);

        return $this->listDialogueTemplateWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListHotelAlarmRequest $tmpReq
     * @param ListHotelAlarmHeaders $headers
     * @param RuntimeOptions        $runtime
     *
     * @return ListHotelAlarmResponse
     */
    public function listHotelAlarmWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListHotelAlarmShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->rooms)) {
            $request->roomsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->rooms, 'Rooms', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->hotelId)) {
            $body['HotelId'] = $request->hotelId;
        }
        if (!Utils::isUnset($request->roomsShrink)) {
            $body['Rooms'] = $request->roomsShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAligenieAccessToken)) {
            $realHeaders['x-acs-aligenie-access-token'] = Utils::toJSONString($headers->xAcsAligenieAccessToken);
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListHotelAlarm',
            'version'     => 'ip_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ip/getHotelAlarmList',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListHotelAlarmResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListHotelAlarmRequest $request
     *
     * @return ListHotelAlarmResponse
     */
    public function listHotelAlarm($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ListHotelAlarmHeaders([]);

        return $this->listHotelAlarmWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListHotelControlDeviceRequest $tmpReq
     * @param ListHotelControlDeviceHeaders $headers
     * @param RuntimeOptions                $runtime
     *
     * @return ListHotelControlDeviceResponse
     */
    public function listHotelControlDeviceWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListHotelControlDeviceShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->userInfo)) {
            $request->userInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->userInfo, 'UserInfo', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->userInfoShrink)) {
            $query['UserInfo'] = $request->userInfoShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAligenieAccessToken)) {
            $realHeaders['x-acs-aligenie-access-token'] = Utils::toJSONString($headers->xAcsAligenieAccessToken);
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListHotelControlDevice',
            'version'     => 'ip_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ip/listHotelControlDevice',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListHotelControlDeviceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListHotelControlDeviceRequest $request
     *
     * @return ListHotelControlDeviceResponse
     */
    public function listHotelControlDevice($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ListHotelControlDeviceHeaders([]);

        return $this->listHotelControlDeviceWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListHotelInfoHeaders $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ListHotelInfoResponse
     */
    public function listHotelInfoWithOptions($headers, $runtime)
    {
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAligenieAccessToken)) {
            $realHeaders['x-acs-aligenie-access-token'] = Utils::toJSONString($headers->xAcsAligenieAccessToken);
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
        ]);
        $params = new Params([
            'action'      => 'ListHotelInfo',
            'version'     => 'ip_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ip/listHotelInfo',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListHotelInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return ListHotelInfoResponse
     */
    public function listHotelInfo()
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ListHotelInfoHeaders([]);

        return $this->listHotelInfoWithOptions($headers, $runtime);
    }

    /**
     * @param ListHotelMessageTemplateHeaders $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return ListHotelMessageTemplateResponse
     */
    public function listHotelMessageTemplateWithOptions($headers, $runtime)
    {
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAligenieAccessToken)) {
            $realHeaders['x-acs-aligenie-access-token'] = Utils::toJSONString($headers->xAcsAligenieAccessToken);
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
        ]);
        $params = new Params([
            'action'      => 'ListHotelMessageTemplate',
            'version'     => 'ip_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ip/listHotelMessageTemplate',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListHotelMessageTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return ListHotelMessageTemplateResponse
     */
    public function listHotelMessageTemplate()
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ListHotelMessageTemplateHeaders([]);

        return $this->listHotelMessageTemplateWithOptions($headers, $runtime);
    }

    /**
     * @param ListHotelOrderRequest $tmpReq
     * @param ListHotelOrderHeaders $headers
     * @param RuntimeOptions        $runtime
     *
     * @return ListHotelOrderResponse
     */
    public function listHotelOrderWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListHotelOrderShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->payload)) {
            $request->payloadShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->payload, 'Payload', 'json');
        }
        if (!Utils::isUnset($tmpReq->userInfo)) {
            $request->userInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->userInfo, 'UserInfo', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->payloadShrink)) {
            $query['Payload'] = $request->payloadShrink;
        }
        if (!Utils::isUnset($request->userInfoShrink)) {
            $query['UserInfo'] = $request->userInfoShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAligenieAccessToken)) {
            $realHeaders['x-acs-aligenie-access-token'] = Utils::toJSONString($headers->xAcsAligenieAccessToken);
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListHotelOrder',
            'version'     => 'ip_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ip/listHotelOrder',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListHotelOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListHotelOrderRequest $request
     *
     * @return ListHotelOrderResponse
     */
    public function listHotelOrder($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ListHotelOrderHeaders([]);

        return $this->listHotelOrderWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListHotelRoomsRequest $tmpReq
     * @param ListHotelRoomsHeaders $headers
     * @param RuntimeOptions        $runtime
     *
     * @return ListHotelRoomsResponse
     */
    public function listHotelRoomsWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListHotelRoomsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->hotelAdminRoom)) {
            $request->hotelAdminRoomShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->hotelAdminRoom, 'HotelAdminRoom', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->hotelAdminRoomShrink)) {
            $body['HotelAdminRoom'] = $request->hotelAdminRoomShrink;
        }
        if (!Utils::isUnset($request->hotelId)) {
            $body['HotelId'] = $request->hotelId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAligenieAccessToken)) {
            $realHeaders['x-acs-aligenie-access-token'] = Utils::toJSONString($headers->xAcsAligenieAccessToken);
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListHotelRooms',
            'version'     => 'ip_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ip/listHotelRooms',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListHotelRoomsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListHotelRoomsRequest $request
     *
     * @return ListHotelRoomsResponse
     */
    public function listHotelRooms($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ListHotelRoomsHeaders([]);

        return $this->listHotelRoomsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListHotelSceneBookItemsRequest $tmpReq
     * @param ListHotelSceneBookItemsHeaders $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return ListHotelSceneBookItemsResponse
     */
    public function listHotelSceneBookItemsWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListHotelSceneBookItemsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->page)) {
            $request->pageShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->page, 'Page', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->pageShrink)) {
            $query['Page'] = $request->pageShrink;
        }
        $body = [];
        if (!Utils::isUnset($request->hotelId)) {
            $body['HotelId'] = $request->hotelId;
        }
        if (!Utils::isUnset($request->type)) {
            $body['Type'] = $request->type;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAligenieAccessToken)) {
            $realHeaders['x-acs-aligenie-access-token'] = Utils::toJSONString($headers->xAcsAligenieAccessToken);
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListHotelSceneBookItems',
            'version'     => 'ip_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ip/listHotelSceneBookItems',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListHotelSceneBookItemsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListHotelSceneBookItemsRequest $request
     *
     * @return ListHotelSceneBookItemsResponse
     */
    public function listHotelSceneBookItems($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ListHotelSceneBookItemsHeaders([]);

        return $this->listHotelSceneBookItemsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListHotelSceneItemRequest $tmpReq
     * @param ListHotelSceneItemHeaders $headers
     * @param RuntimeOptions            $runtime
     *
     * @return ListHotelSceneItemResponse
     */
    public function listHotelSceneItemWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListHotelSceneItemShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->payload)) {
            $request->payloadShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->payload, 'Payload', 'json');
        }
        if (!Utils::isUnset($tmpReq->userInfo)) {
            $request->userInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->userInfo, 'UserInfo', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->payloadShrink)) {
            $query['Payload'] = $request->payloadShrink;
        }
        if (!Utils::isUnset($request->userInfoShrink)) {
            $query['UserInfo'] = $request->userInfoShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAligenieAccessToken)) {
            $realHeaders['x-acs-aligenie-access-token'] = Utils::toJSONString($headers->xAcsAligenieAccessToken);
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListHotelSceneItem',
            'version'     => 'ip_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ip/listHotelSceneItem',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListHotelSceneItemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListHotelSceneItemRequest $request
     *
     * @return ListHotelSceneItemResponse
     */
    public function listHotelSceneItem($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ListHotelSceneItemHeaders([]);

        return $this->listHotelSceneItemWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListHotelSceneItemsRequest $tmpReq
     * @param ListHotelSceneItemsHeaders $headers
     * @param RuntimeOptions             $runtime
     *
     * @return ListHotelSceneItemsResponse
     */
    public function listHotelSceneItemsWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListHotelSceneItemsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->listHotelSceneReq)) {
            $request->listHotelSceneReqShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->listHotelSceneReq, 'ListHotelSceneReq', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->listHotelSceneReqShrink)) {
            $query['ListHotelSceneReq'] = $request->listHotelSceneReqShrink;
        }
        $body = [];
        if (!Utils::isUnset($request->hotelId)) {
            $body['HotelId'] = $request->hotelId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAligenieAccessToken)) {
            $realHeaders['x-acs-aligenie-access-token'] = Utils::toJSONString($headers->xAcsAligenieAccessToken);
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListHotelSceneItems',
            'version'     => 'ip_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ip/listHotelSceneItems',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListHotelSceneItemsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListHotelSceneItemsRequest $request
     *
     * @return ListHotelSceneItemsResponse
     */
    public function listHotelSceneItems($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ListHotelSceneItemsHeaders([]);

        return $this->listHotelSceneItemsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListHotelServiceCategoryRequest $tmpReq
     * @param ListHotelServiceCategoryHeaders $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return ListHotelServiceCategoryResponse
     */
    public function listHotelServiceCategoryWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListHotelServiceCategoryShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->payload)) {
            $request->payloadShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->payload, 'Payload', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->payloadShrink)) {
            $query['Payload'] = $request->payloadShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAligenieAccessToken)) {
            $realHeaders['x-acs-aligenie-access-token'] = Utils::toJSONString($headers->xAcsAligenieAccessToken);
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListHotelServiceCategory',
            'version'     => 'ip_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ip/listHotelServiceCategory',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListHotelServiceCategoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListHotelServiceCategoryRequest $request
     *
     * @return ListHotelServiceCategoryResponse
     */
    public function listHotelServiceCategory($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ListHotelServiceCategoryHeaders([]);

        return $this->listHotelServiceCategoryWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListHotelsRequest $tmpReq
     * @param ListHotelsHeaders $headers
     * @param RuntimeOptions    $runtime
     *
     * @return ListHotelsResponse
     */
    public function listHotelsWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListHotelsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->hotelRequest)) {
            $request->hotelRequestShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->hotelRequest, 'HotelRequest', 'json');
        }
        if (!Utils::isUnset($tmpReq->page)) {
            $request->pageShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->page, 'Page', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->hotelRequestShrink)) {
            $query['HotelRequest'] = $request->hotelRequestShrink;
        }
        if (!Utils::isUnset($request->pageShrink)) {
            $query['Page'] = $request->pageShrink;
        }
        $body = [];
        if (!Utils::isUnset($request->status)) {
            $body['Status'] = $request->status;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAligenieAccessToken)) {
            $realHeaders['x-acs-aligenie-access-token'] = Utils::toJSONString($headers->xAcsAligenieAccessToken);
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListHotels',
            'version'     => 'ip_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ip/listHotels',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListHotelsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListHotelsRequest $request
     *
     * @return ListHotelsResponse
     */
    public function listHotels($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ListHotelsHeaders([]);

        return $this->listHotelsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListInfraredDeviceBrandsRequest $request
     * @param ListInfraredDeviceBrandsHeaders $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return ListInfraredDeviceBrandsResponse
     */
    public function listInfraredDeviceBrandsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->category)) {
            $body['Category'] = $request->category;
        }
        if (!Utils::isUnset($request->serviceProvider)) {
            $body['ServiceProvider'] = $request->serviceProvider;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAligenieAccessToken)) {
            $realHeaders['x-acs-aligenie-access-token'] = Utils::toJSONString($headers->xAcsAligenieAccessToken);
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListInfraredDeviceBrands',
            'version'     => 'ip_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ip/listInfraredDeviceBrands',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListInfraredDeviceBrandsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListInfraredDeviceBrandsRequest $request
     *
     * @return ListInfraredDeviceBrandsResponse
     */
    public function listInfraredDeviceBrands($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ListInfraredDeviceBrandsHeaders([]);

        return $this->listInfraredDeviceBrandsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListInfraredRemoteControllersRequest $request
     * @param ListInfraredRemoteControllersHeaders $headers
     * @param RuntimeOptions                       $runtime
     *
     * @return ListInfraredRemoteControllersResponse
     */
    public function listInfraredRemoteControllersWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->brand)) {
            $body['Brand'] = $request->brand;
        }
        if (!Utils::isUnset($request->category)) {
            $body['Category'] = $request->category;
        }
        if (!Utils::isUnset($request->city)) {
            $body['City'] = $request->city;
        }
        if (!Utils::isUnset($request->hotelId)) {
            $body['HotelId'] = $request->hotelId;
        }
        if (!Utils::isUnset($request->province)) {
            $body['Province'] = $request->province;
        }
        if (!Utils::isUnset($request->serviceProvider)) {
            $body['ServiceProvider'] = $request->serviceProvider;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAligenieAccessToken)) {
            $realHeaders['x-acs-aligenie-access-token'] = Utils::toJSONString($headers->xAcsAligenieAccessToken);
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListInfraredRemoteControllers',
            'version'     => 'ip_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ip/listInfraredRemoteControllers',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListInfraredRemoteControllersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListInfraredRemoteControllersRequest $request
     *
     * @return ListInfraredRemoteControllersResponse
     */
    public function listInfraredRemoteControllers($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ListInfraredRemoteControllersHeaders([]);

        return $this->listInfraredRemoteControllersWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListSTBServiceProvidersRequest $request
     * @param ListSTBServiceProvidersHeaders $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return ListSTBServiceProvidersResponse
     */
    public function listSTBServiceProvidersWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->city)) {
            $body['City'] = $request->city;
        }
        if (!Utils::isUnset($request->province)) {
            $body['Province'] = $request->province;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAligenieAccessToken)) {
            $realHeaders['x-acs-aligenie-access-token'] = Utils::toJSONString($headers->xAcsAligenieAccessToken);
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListSTBServiceProviders',
            'version'     => 'ip_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ip/listSTBServiceProviders',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListSTBServiceProvidersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListSTBServiceProvidersRequest $request
     *
     * @return ListSTBServiceProvidersResponse
     */
    public function listSTBServiceProviders($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ListSTBServiceProvidersHeaders([]);

        return $this->listSTBServiceProvidersWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListSceneCategoryRequest $request
     * @param ListSceneCategoryHeaders $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ListSceneCategoryResponse
     */
    public function listSceneCategoryWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->hotelId)) {
            $body['HotelId'] = $request->hotelId;
        }
        if (!Utils::isUnset($request->type)) {
            $body['Type'] = $request->type;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAligenieAccessToken)) {
            $realHeaders['x-acs-aligenie-access-token'] = Utils::toJSONString($headers->xAcsAligenieAccessToken);
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListSceneCategory',
            'version'     => 'ip_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ip/listSceneCategory',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListSceneCategoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListSceneCategoryRequest $request
     *
     * @return ListSceneCategoryResponse
     */
    public function listSceneCategory($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ListSceneCategoryHeaders([]);

        return $this->listSceneCategoryWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListServiceQARequest $tmpReq
     * @param ListServiceQAHeaders $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ListServiceQAResponse
     */
    public function listServiceQAWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListServiceQAShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->page)) {
            $request->pageShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->page, 'Page', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->active)) {
            $body['Active'] = $request->active;
        }
        if (!Utils::isUnset($request->hotelId)) {
            $body['HotelId'] = $request->hotelId;
        }
        if (!Utils::isUnset($request->keyword)) {
            $body['Keyword'] = $request->keyword;
        }
        if (!Utils::isUnset($request->pageShrink)) {
            $body['Page'] = $request->pageShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAligenieAccessToken)) {
            $realHeaders['x-acs-aligenie-access-token'] = Utils::toJSONString($headers->xAcsAligenieAccessToken);
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListServiceQA',
            'version'     => 'ip_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ip/listServiceQA',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListServiceQAResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListServiceQARequest $request
     *
     * @return ListServiceQAResponse
     */
    public function listServiceQA($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ListServiceQAHeaders([]);

        return $this->listServiceQAWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListTicketsRequest $tmpReq
     * @param ListTicketsHeaders $headers
     * @param RuntimeOptions     $runtime
     *
     * @return ListTicketsResponse
     */
    public function listTicketsWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListTicketsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->page)) {
            $request->pageShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->page, 'Page', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->endTime)) {
            $body['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->hotelId)) {
            $body['HotelId'] = $request->hotelId;
        }
        if (!Utils::isUnset($request->isDesc)) {
            $body['IsDesc'] = $request->isDesc;
        }
        if (!Utils::isUnset($request->isNeedCallback)) {
            $body['IsNeedCallback'] = $request->isNeedCallback;
        }
        if (!Utils::isUnset($request->isNeedCharges)) {
            $body['IsNeedCharges'] = $request->isNeedCharges;
        }
        if (!Utils::isUnset($request->pageShrink)) {
            $body['Page'] = $request->pageShrink;
        }
        if (!Utils::isUnset($request->roomNo)) {
            $body['RoomNo'] = $request->roomNo;
        }
        if (!Utils::isUnset($request->sortField)) {
            $body['SortField'] = $request->sortField;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->status)) {
            $body['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->type)) {
            $body['Type'] = $request->type;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAligenieAccessToken)) {
            $realHeaders['x-acs-aligenie-access-token'] = Utils::toJSONString($headers->xAcsAligenieAccessToken);
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListTickets',
            'version'     => 'ip_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ip/listTickets',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListTicketsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListTicketsRequest $request
     *
     * @return ListTicketsResponse
     */
    public function listTickets($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ListTicketsHeaders([]);

        return $this->listTicketsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param PageGetHotelRoomDevicesRequest $request
     * @param PageGetHotelRoomDevicesHeaders $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return PageGetHotelRoomDevicesResponse
     */
    public function pageGetHotelRoomDevicesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->hotelId)) {
            $body['HotelId'] = $request->hotelId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAligenieAccessToken)) {
            $realHeaders['x-acs-aligenie-access-token'] = Utils::toJSONString($headers->xAcsAligenieAccessToken);
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'PageGetHotelRoomDevices',
            'version'     => 'ip_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ip/pageGetHotelRoomDevices',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PageGetHotelRoomDevicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PageGetHotelRoomDevicesRequest $request
     *
     * @return PageGetHotelRoomDevicesResponse
     */
    public function pageGetHotelRoomDevices($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new PageGetHotelRoomDevicesHeaders([]);

        return $this->pageGetHotelRoomDevicesWithOptions($request, $headers, $runtime);
    }

    /**
     * @param PmsEventReportRequest $request
     * @param PmsEventReportHeaders $headers
     * @param RuntimeOptions        $runtime
     *
     * @return PmsEventReportResponse
     */
    public function pmsEventReportWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->payload)) {
            $body['Payload'] = $request->payload;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAligenieAccessToken)) {
            $realHeaders['x-acs-aligenie-access-token'] = Utils::toJSONString($headers->xAcsAligenieAccessToken);
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'PmsEventReport',
            'version'     => 'ip_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ip/pmsEventReport',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PmsEventReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PmsEventReportRequest $request
     *
     * @return PmsEventReportResponse
     */
    public function pmsEventReport($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new PmsEventReportHeaders([]);

        return $this->pmsEventReportWithOptions($request, $headers, $runtime);
    }

    /**
     * @param PushHotelMessageRequest $tmpReq
     * @param PushHotelMessageHeaders $headers
     * @param RuntimeOptions          $runtime
     *
     * @return PushHotelMessageResponse
     */
    public function pushHotelMessageWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new PushHotelMessageShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->pushHotelMessageReq)) {
            $request->pushHotelMessageReqShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->pushHotelMessageReq, 'PushHotelMessageReq', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->pushHotelMessageReqShrink)) {
            $query['PushHotelMessageReq'] = $request->pushHotelMessageReqShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAligenieAccessToken)) {
            $realHeaders['x-acs-aligenie-access-token'] = Utils::toJSONString($headers->xAcsAligenieAccessToken);
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PushHotelMessage',
            'version'     => 'ip_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ip/pushHotelMessage',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return PushHotelMessageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PushHotelMessageRequest $request
     *
     * @return PushHotelMessageResponse
     */
    public function pushHotelMessage($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new PushHotelMessageHeaders([]);

        return $this->pushHotelMessageWithOptions($request, $headers, $runtime);
    }

    /**
     * @param PushVoiceBoxCommandsRequest $tmpReq
     * @param PushVoiceBoxCommandsHeaders $headers
     * @param RuntimeOptions              $runtime
     *
     * @return PushVoiceBoxCommandsResponse
     */
    public function pushVoiceBoxCommandsWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new PushVoiceBoxCommandsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->commands)) {
            $request->commandsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->commands, 'Commands', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->commandsShrink)) {
            $body['Commands'] = $request->commandsShrink;
        }
        if (!Utils::isUnset($request->hotelId)) {
            $body['HotelId'] = $request->hotelId;
        }
        if (!Utils::isUnset($request->roomNo)) {
            $body['RoomNo'] = $request->roomNo;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAligenieAccessToken)) {
            $realHeaders['x-acs-aligenie-access-token'] = Utils::toJSONString($headers->xAcsAligenieAccessToken);
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'PushVoiceBoxCommands',
            'version'     => 'ip_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ip/pushVoiceBoxCommands',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PushVoiceBoxCommandsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PushVoiceBoxCommandsRequest $request
     *
     * @return PushVoiceBoxCommandsResponse
     */
    public function pushVoiceBoxCommands($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new PushVoiceBoxCommandsHeaders([]);

        return $this->pushVoiceBoxCommandsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param PushWelcomeRequest $request
     * @param PushWelcomeHeaders $headers
     * @param RuntimeOptions     $runtime
     *
     * @return PushWelcomeResponse
     */
    public function pushWelcomeWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->hotelId)) {
            $body['HotelId'] = $request->hotelId;
        }
        if (!Utils::isUnset($request->roomNo)) {
            $body['RoomNo'] = $request->roomNo;
        }
        if (!Utils::isUnset($request->welcomeMusicUrl)) {
            $body['WelcomeMusicUrl'] = $request->welcomeMusicUrl;
        }
        if (!Utils::isUnset($request->welcomeText)) {
            $body['WelcomeText'] = $request->welcomeText;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAligenieAccessToken)) {
            $realHeaders['x-acs-aligenie-access-token'] = Utils::toJSONString($headers->xAcsAligenieAccessToken);
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'PushWelcome',
            'version'     => 'ip_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ip/pushWelcome',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PushWelcomeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PushWelcomeRequest $request
     *
     * @return PushWelcomeResponse
     */
    public function pushWelcome($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new PushWelcomeHeaders([]);

        return $this->pushWelcomeWithOptions($request, $headers, $runtime);
    }

    /**
     * @param PushWelcomeTextAndMusicRequest $tmpReq
     * @param PushWelcomeTextAndMusicHeaders $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return PushWelcomeTextAndMusicResponse
     */
    public function pushWelcomeTextAndMusicWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new PushWelcomeTextAndMusicShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->templateVariable)) {
            $request->templateVariableShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->templateVariable, 'TemplateVariable', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->hotelId)) {
            $body['HotelId'] = $request->hotelId;
        }
        if (!Utils::isUnset($request->roomNo)) {
            $body['RoomNo'] = $request->roomNo;
        }
        if (!Utils::isUnset($request->templateVariableShrink)) {
            $body['TemplateVariable'] = $request->templateVariableShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAligenieAccessToken)) {
            $realHeaders['x-acs-aligenie-access-token'] = Utils::toJSONString($headers->xAcsAligenieAccessToken);
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'PushWelcomeTextAndMusic',
            'version'     => 'ip_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ip/pushWelcomeTextAndMusic',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PushWelcomeTextAndMusicResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PushWelcomeTextAndMusicRequest $request
     *
     * @return PushWelcomeTextAndMusicResponse
     */
    public function pushWelcomeTextAndMusic($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new PushWelcomeTextAndMusicHeaders([]);

        return $this->pushWelcomeTextAndMusicWithOptions($request, $headers, $runtime);
    }

    /**
     * @param QueryDeviceStatusRequest $tmpReq
     * @param QueryDeviceStatusHeaders $headers
     * @param RuntimeOptions           $runtime
     *
     * @return QueryDeviceStatusResponse
     */
    public function queryDeviceStatusWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new QueryDeviceStatusShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->payload)) {
            $request->payloadShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->payload, 'Payload', 'json');
        }
        if (!Utils::isUnset($tmpReq->userInfo)) {
            $request->userInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->userInfo, 'UserInfo', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->payloadShrink)) {
            $query['Payload'] = $request->payloadShrink;
        }
        if (!Utils::isUnset($request->userInfoShrink)) {
            $query['UserInfo'] = $request->userInfoShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAligenieAccessToken)) {
            $realHeaders['x-acs-aligenie-access-token'] = Utils::toJSONString($headers->xAcsAligenieAccessToken);
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryDeviceStatus',
            'version'     => 'ip_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ip/queryDeviceStatus',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return QueryDeviceStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryDeviceStatusRequest $request
     *
     * @return QueryDeviceStatusResponse
     */
    public function queryDeviceStatus($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryDeviceStatusHeaders([]);

        return $this->queryDeviceStatusWithOptions($request, $headers, $runtime);
    }

    /**
     * @param QueryHotelRoomDetailRequest $request
     * @param QueryHotelRoomDetailHeaders $headers
     * @param RuntimeOptions              $runtime
     *
     * @return QueryHotelRoomDetailResponse
     */
    public function queryHotelRoomDetailWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->hotelId)) {
            $body['HotelId'] = $request->hotelId;
        }
        if (!Utils::isUnset($request->mac)) {
            $body['Mac'] = $request->mac;
        }
        if (!Utils::isUnset($request->roomNo)) {
            $body['RoomNo'] = $request->roomNo;
        }
        if (!Utils::isUnset($request->sn)) {
            $body['Sn'] = $request->sn;
        }
        if (!Utils::isUnset($request->uuid)) {
            $body['Uuid'] = $request->uuid;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAligenieAccessToken)) {
            $realHeaders['x-acs-aligenie-access-token'] = Utils::toJSONString($headers->xAcsAligenieAccessToken);
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryHotelRoomDetail',
            'version'     => 'ip_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ip/queryHotelRoomDetail',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryHotelRoomDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryHotelRoomDetailRequest $request
     *
     * @return QueryHotelRoomDetailResponse
     */
    public function queryHotelRoomDetail($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryHotelRoomDetailHeaders([]);

        return $this->queryHotelRoomDetailWithOptions($request, $headers, $runtime);
    }

    /**
     * @param QueryRoomControlDevicesRequest $request
     * @param QueryRoomControlDevicesHeaders $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return QueryRoomControlDevicesResponse
     */
    public function queryRoomControlDevicesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->hotelId)) {
            $query['HotelId'] = $request->hotelId;
        }
        if (!Utils::isUnset($request->roomNo)) {
            $query['RoomNo'] = $request->roomNo;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAligenieAccessToken)) {
            $realHeaders['x-acs-aligenie-access-token'] = Utils::toJSONString($headers->xAcsAligenieAccessToken);
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryRoomControlDevices',
            'version'     => 'ip_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ip/queryRoomControlDevices',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return QueryRoomControlDevicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryRoomControlDevicesRequest $request
     *
     * @return QueryRoomControlDevicesResponse
     */
    public function queryRoomControlDevices($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryRoomControlDevicesHeaders([]);

        return $this->queryRoomControlDevicesWithOptions($request, $headers, $runtime);
    }

    /**
     * @param QuerySceneListRequest $tmpReq
     * @param QuerySceneListHeaders $headers
     * @param RuntimeOptions        $runtime
     *
     * @return QuerySceneListResponse
     */
    public function querySceneListWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new QuerySceneListShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->sceneStates)) {
            $request->sceneStatesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->sceneStates, 'SceneStates', 'json');
        }
        if (!Utils::isUnset($tmpReq->sceneTypes)) {
            $request->sceneTypesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->sceneTypes, 'SceneTypes', 'json');
        }
        if (!Utils::isUnset($tmpReq->templateInfoIds)) {
            $request->templateInfoIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->templateInfoIds, 'TemplateInfoIds', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->hotelId)) {
            $body['HotelId'] = $request->hotelId;
        }
        if (!Utils::isUnset($request->sceneStatesShrink)) {
            $body['SceneStates'] = $request->sceneStatesShrink;
        }
        if (!Utils::isUnset($request->sceneTypesShrink)) {
            $body['SceneTypes'] = $request->sceneTypesShrink;
        }
        if (!Utils::isUnset($request->templateInfoIdsShrink)) {
            $body['TemplateInfoIds'] = $request->templateInfoIdsShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAligenieAccessToken)) {
            $realHeaders['x-acs-aligenie-access-token'] = Utils::toJSONString($headers->xAcsAligenieAccessToken);
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QuerySceneList',
            'version'     => 'ip_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ip/querySceneList',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QuerySceneListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QuerySceneListRequest $request
     *
     * @return QuerySceneListResponse
     */
    public function querySceneList($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QuerySceneListHeaders([]);

        return $this->querySceneListWithOptions($request, $headers, $runtime);
    }

    /**
     * @param RemoveChildAccountAuthRequest $request
     * @param RemoveChildAccountAuthHeaders $headers
     * @param RuntimeOptions                $runtime
     *
     * @return RemoveChildAccountAuthResponse
     */
    public function removeChildAccountAuthWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appKey)) {
            $body['AppKey'] = $request->appKey;
        }
        if (!Utils::isUnset($request->childAccountName)) {
            $body['ChildAccountName'] = $request->childAccountName;
        }
        if (!Utils::isUnset($request->hotelId)) {
            $body['HotelId'] = $request->hotelId;
        }
        if (!Utils::isUnset($request->tbOpenId)) {
            $body['TbOpenId'] = $request->tbOpenId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAligenieAccessToken)) {
            $realHeaders['x-acs-aligenie-access-token'] = Utils::toJSONString($headers->xAcsAligenieAccessToken);
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RemoveChildAccountAuth',
            'version'     => 'ip_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ip/removeChildAccountAuth',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemoveChildAccountAuthResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RemoveChildAccountAuthRequest $request
     *
     * @return RemoveChildAccountAuthResponse
     */
    public function removeChildAccountAuth($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new RemoveChildAccountAuthHeaders([]);

        return $this->removeChildAccountAuthWithOptions($request, $headers, $runtime);
    }

    /**
     * @param RemoveHotelRequest $request
     * @param RemoveHotelHeaders $headers
     * @param RuntimeOptions     $runtime
     *
     * @return RemoveHotelResponse
     */
    public function removeHotelWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appKey)) {
            $body['AppKey'] = $request->appKey;
        }
        if (!Utils::isUnset($request->hotelId)) {
            $body['HotelId'] = $request->hotelId;
        }
        if (!Utils::isUnset($request->tbOpenId)) {
            $body['TbOpenId'] = $request->tbOpenId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAligenieAccessToken)) {
            $realHeaders['x-acs-aligenie-access-token'] = Utils::toJSONString($headers->xAcsAligenieAccessToken);
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RemoveHotel',
            'version'     => 'ip_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ip/removeHotel',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemoveHotelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RemoveHotelRequest $request
     *
     * @return RemoveHotelResponse
     */
    public function removeHotel($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new RemoveHotelHeaders([]);

        return $this->removeHotelWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ResetWelcomeTextAndMusicRequest $request
     * @param ResetWelcomeTextAndMusicHeaders $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return ResetWelcomeTextAndMusicResponse
     */
    public function resetWelcomeTextAndMusicWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->hotelId)) {
            $body['HotelId'] = $request->hotelId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAligenieAccessToken)) {
            $realHeaders['x-acs-aligenie-access-token'] = Utils::toJSONString($headers->xAcsAligenieAccessToken);
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ResetWelcomeTextAndMusic',
            'version'     => 'ip_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ip/resetWelcomeTextAndMusic',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ResetWelcomeTextAndMusicResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ResetWelcomeTextAndMusicRequest $request
     *
     * @return ResetWelcomeTextAndMusicResponse
     */
    public function resetWelcomeTextAndMusic($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ResetWelcomeTextAndMusicHeaders([]);

        return $this->resetWelcomeTextAndMusicWithOptions($request, $headers, $runtime);
    }

    /**
     * @param RoomCheckOutRequest $tmpReq
     * @param RoomCheckOutHeaders $headers
     * @param RuntimeOptions      $runtime
     *
     * @return RoomCheckOutResponse
     */
    public function roomCheckOutWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new RoomCheckOutShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->deviceInfo)) {
            $request->deviceInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->deviceInfo, 'DeviceInfo', 'json');
        }
        if (!Utils::isUnset($tmpReq->userInfo)) {
            $request->userInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->userInfo, 'UserInfo', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->deviceInfoShrink)) {
            $query['DeviceInfo'] = $request->deviceInfoShrink;
        }
        if (!Utils::isUnset($request->userInfoShrink)) {
            $query['UserInfo'] = $request->userInfoShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAligenieAccessToken)) {
            $realHeaders['x-acs-aligenie-access-token'] = Utils::toJSONString($headers->xAcsAligenieAccessToken);
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RoomCheckOut',
            'version'     => 'ip_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ip/roomCheckOut',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RoomCheckOutResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RoomCheckOutRequest $request
     *
     * @return RoomCheckOutResponse
     */
    public function roomCheckOut($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new RoomCheckOutHeaders([]);

        return $this->roomCheckOutWithOptions($request, $headers, $runtime);
    }

    /**
     * @param SubmitHotelOrderRequest $tmpReq
     * @param SubmitHotelOrderHeaders $headers
     * @param RuntimeOptions          $runtime
     *
     * @return SubmitHotelOrderResponse
     */
    public function submitHotelOrderWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SubmitHotelOrderShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->payload)) {
            $request->payloadShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->payload, 'Payload', 'json');
        }
        if (!Utils::isUnset($tmpReq->userInfo)) {
            $request->userInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->userInfo, 'UserInfo', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->payloadShrink)) {
            $query['Payload'] = $request->payloadShrink;
        }
        if (!Utils::isUnset($request->userInfoShrink)) {
            $query['UserInfo'] = $request->userInfoShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAligenieAccessToken)) {
            $realHeaders['x-acs-aligenie-access-token'] = Utils::toJSONString($headers->xAcsAligenieAccessToken);
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitHotelOrder',
            'version'     => 'ip_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ip/submitHotelOrder',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return SubmitHotelOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SubmitHotelOrderRequest $request
     *
     * @return SubmitHotelOrderResponse
     */
    public function submitHotelOrder($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new SubmitHotelOrderHeaders([]);

        return $this->submitHotelOrderWithOptions($request, $headers, $runtime);
    }

    /**
     * @param SyncDeviceStatusWithAkRequest $request
     * @param SyncDeviceStatusWithAkHeaders $headers
     * @param RuntimeOptions                $runtime
     *
     * @return SyncDeviceStatusWithAkResponse
     */
    public function syncDeviceStatusWithAkWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->categoryCnName)) {
            $body['CategoryCnName'] = $request->categoryCnName;
        }
        if (!Utils::isUnset($request->categoryEnName)) {
            $body['CategoryEnName'] = $request->categoryEnName;
        }
        if (!Utils::isUnset($request->deviceName)) {
            $body['DeviceName'] = $request->deviceName;
        }
        if (!Utils::isUnset($request->hotelId)) {
            $body['HotelId'] = $request->hotelId;
        }
        if (!Utils::isUnset($request->location)) {
            $body['Location'] = $request->location;
        }
        if (!Utils::isUnset($request->locationCnName)) {
            $body['LocationCnName'] = $request->locationCnName;
        }
        if (!Utils::isUnset($request->number)) {
            $body['Number'] = $request->number;
        }
        if (!Utils::isUnset($request->roomNo)) {
            $body['RoomNo'] = $request->roomNo;
        }
        if (!Utils::isUnset($request->switch_)) {
            $body['Switch'] = $request->switch_;
        }
        if (!Utils::isUnset($request->fanSpeed)) {
            $body['fanSpeed'] = $request->fanSpeed;
        }
        if (!Utils::isUnset($request->mode)) {
            $body['mode'] = $request->mode;
        }
        if (!Utils::isUnset($request->roomTemperature)) {
            $body['roomTemperature'] = $request->roomTemperature;
        }
        if (!Utils::isUnset($request->temperature)) {
            $body['temperature'] = $request->temperature;
        }
        if (!Utils::isUnset($request->value)) {
            $body['value'] = $request->value;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAligenieAccessToken)) {
            $realHeaders['x-acs-aligenie-access-token'] = Utils::toJSONString($headers->xAcsAligenieAccessToken);
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SyncDeviceStatusWithAk',
            'version'     => 'ip_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ip/syncDeviceStatusWithAk',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SyncDeviceStatusWithAkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SyncDeviceStatusWithAkRequest $request
     *
     * @return SyncDeviceStatusWithAkResponse
     */
    public function syncDeviceStatusWithAk($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new SyncDeviceStatusWithAkHeaders([]);

        return $this->syncDeviceStatusWithAkWithOptions($request, $headers, $runtime);
    }

    /**
     * @param UpdateBasicInfoQARequest $request
     * @param UpdateBasicInfoQAHeaders $headers
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateBasicInfoQAResponse
     */
    public function updateBasicInfoQAWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->checkInTime)) {
            $body['CheckInTime'] = $request->checkInTime;
        }
        if (!Utils::isUnset($request->checkOutTime)) {
            $body['CheckOutTime'] = $request->checkOutTime;
        }
        if (!Utils::isUnset($request->hotelAddress)) {
            $body['HotelAddress'] = $request->hotelAddress;
        }
        if (!Utils::isUnset($request->hotelId)) {
            $body['HotelId'] = $request->hotelId;
        }
        if (!Utils::isUnset($request->hotelIntroduction)) {
            $body['HotelIntroduction'] = $request->hotelIntroduction;
        }
        if (!Utils::isUnset($request->hotelMember)) {
            $body['HotelMember'] = $request->hotelMember;
        }
        if (!Utils::isUnset($request->hotelService)) {
            $body['HotelService'] = $request->hotelService;
        }
        if (!Utils::isUnset($request->parkingExpenses)) {
            $body['ParkingExpenses'] = $request->parkingExpenses;
        }
        if (!Utils::isUnset($request->parkingPosition)) {
            $body['ParkingPosition'] = $request->parkingPosition;
        }
        if (!Utils::isUnset($request->phoneNumber)) {
            $body['PhoneNumber'] = $request->phoneNumber;
        }
        if (!Utils::isUnset($request->wifiName)) {
            $body['WifiName'] = $request->wifiName;
        }
        if (!Utils::isUnset($request->wifiPassword)) {
            $body['WifiPassword'] = $request->wifiPassword;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAligenieAccessToken)) {
            $realHeaders['x-acs-aligenie-access-token'] = Utils::toJSONString($headers->xAcsAligenieAccessToken);
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateBasicInfoQA',
            'version'     => 'ip_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ip/updateBasicInfoQA',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateBasicInfoQAResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateBasicInfoQARequest $request
     *
     * @return UpdateBasicInfoQAResponse
     */
    public function updateBasicInfoQA($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new UpdateBasicInfoQAHeaders([]);

        return $this->updateBasicInfoQAWithOptions($request, $headers, $runtime);
    }

    /**
     * @param UpdateCustomQARequest $tmpReq
     * @param UpdateCustomQAHeaders $headers
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateCustomQAResponse
     */
    public function updateCustomQAWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateCustomQAShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->answers)) {
            $request->answersShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->answers, 'Answers', 'json');
        }
        if (!Utils::isUnset($tmpReq->keyWords)) {
            $request->keyWordsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->keyWords, 'KeyWords', 'json');
        }
        if (!Utils::isUnset($tmpReq->supplementaryQuestions)) {
            $request->supplementaryQuestionsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->supplementaryQuestions, 'SupplementaryQuestions', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->answersShrink)) {
            $body['Answers'] = $request->answersShrink;
        }
        if (!Utils::isUnset($request->customQAId)) {
            $body['CustomQAId'] = $request->customQAId;
        }
        if (!Utils::isUnset($request->hotelId)) {
            $body['HotelId'] = $request->hotelId;
        }
        if (!Utils::isUnset($request->keyWordsShrink)) {
            $body['KeyWords'] = $request->keyWordsShrink;
        }
        if (!Utils::isUnset($request->majorQuestion)) {
            $body['MajorQuestion'] = $request->majorQuestion;
        }
        if (!Utils::isUnset($request->supplementaryQuestionsShrink)) {
            $body['SupplementaryQuestions'] = $request->supplementaryQuestionsShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAligenieAccessToken)) {
            $realHeaders['x-acs-aligenie-access-token'] = Utils::toJSONString($headers->xAcsAligenieAccessToken);
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateCustomQA',
            'version'     => 'ip_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ip/updateCustomQA',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateCustomQAResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateCustomQARequest $request
     *
     * @return UpdateCustomQAResponse
     */
    public function updateCustomQA($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new UpdateCustomQAHeaders([]);

        return $this->updateCustomQAWithOptions($request, $headers, $runtime);
    }

    /**
     * @param UpdateHotelRequest $tmpReq
     * @param UpdateHotelHeaders $headers
     * @param RuntimeOptions     $runtime
     *
     * @return UpdateHotelResponse
     */
    public function updateHotelWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateHotelShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->relatedPks)) {
            $request->relatedPksShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->relatedPks, 'RelatedPks', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->appKey)) {
            $body['AppKey'] = $request->appKey;
        }
        if (!Utils::isUnset($request->estOpenTime)) {
            $body['EstOpenTime'] = $request->estOpenTime;
        }
        if (!Utils::isUnset($request->hotelAddress)) {
            $body['HotelAddress'] = $request->hotelAddress;
        }
        if (!Utils::isUnset($request->hotelEmail)) {
            $body['HotelEmail'] = $request->hotelEmail;
        }
        if (!Utils::isUnset($request->hotelId)) {
            $body['HotelId'] = $request->hotelId;
        }
        if (!Utils::isUnset($request->hotelName)) {
            $body['HotelName'] = $request->hotelName;
        }
        if (!Utils::isUnset($request->phoneNumber)) {
            $body['PhoneNumber'] = $request->phoneNumber;
        }
        if (!Utils::isUnset($request->relatedPksShrink)) {
            $body['RelatedPks'] = $request->relatedPksShrink;
        }
        if (!Utils::isUnset($request->remark)) {
            $body['Remark'] = $request->remark;
        }
        if (!Utils::isUnset($request->roomNum)) {
            $body['RoomNum'] = $request->roomNum;
        }
        if (!Utils::isUnset($request->tbOpenId)) {
            $body['TbOpenId'] = $request->tbOpenId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAligenieAccessToken)) {
            $realHeaders['x-acs-aligenie-access-token'] = Utils::toJSONString($headers->xAcsAligenieAccessToken);
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateHotel',
            'version'     => 'ip_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ip/updateHotel',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateHotelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateHotelRequest $request
     *
     * @return UpdateHotelResponse
     */
    public function updateHotel($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new UpdateHotelHeaders([]);

        return $this->updateHotelWithOptions($request, $headers, $runtime);
    }

    /**
     * @param UpdateHotelAlarmRequest $tmpReq
     * @param UpdateHotelAlarmHeaders $headers
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateHotelAlarmResponse
     */
    public function updateHotelAlarmWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateHotelAlarmShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->alarms)) {
            $request->alarmsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->alarms, 'Alarms', 'json');
        }
        if (!Utils::isUnset($tmpReq->scheduleInfo)) {
            $request->scheduleInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->scheduleInfo, 'ScheduleInfo', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->alarmsShrink)) {
            $body['Alarms'] = $request->alarmsShrink;
        }
        if (!Utils::isUnset($request->hotelId)) {
            $body['HotelId'] = $request->hotelId;
        }
        if (!Utils::isUnset($request->scheduleInfoShrink)) {
            $body['ScheduleInfo'] = $request->scheduleInfoShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAligenieAccessToken)) {
            $realHeaders['x-acs-aligenie-access-token'] = Utils::toJSONString($headers->xAcsAligenieAccessToken);
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateHotelAlarm',
            'version'     => 'ip_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ip/updateHotelAlarm',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateHotelAlarmResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateHotelAlarmRequest $request
     *
     * @return UpdateHotelAlarmResponse
     */
    public function updateHotelAlarm($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new UpdateHotelAlarmHeaders([]);

        return $this->updateHotelAlarmWithOptions($request, $headers, $runtime);
    }

    /**
     * @param UpdateHotelSceneBookItemRequest $tmpReq
     * @param UpdateHotelSceneBookItemHeaders $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return UpdateHotelSceneBookItemResponse
     */
    public function updateHotelSceneBookItemWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateHotelSceneBookItemShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->updateHotelSceneBookReq)) {
            $request->updateHotelSceneBookReqShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->updateHotelSceneBookReq, 'UpdateHotelSceneBookReq', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->updateHotelSceneBookReqShrink)) {
            $query['UpdateHotelSceneBookReq'] = $request->updateHotelSceneBookReqShrink;
        }
        $body = [];
        if (!Utils::isUnset($request->hotelId)) {
            $body['HotelId'] = $request->hotelId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAligenieAccessToken)) {
            $realHeaders['x-acs-aligenie-access-token'] = Utils::toJSONString($headers->xAcsAligenieAccessToken);
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateHotelSceneBookItem',
            'version'     => 'ip_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ip/updateHotelSceneBookItem',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateHotelSceneBookItemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateHotelSceneBookItemRequest $request
     *
     * @return UpdateHotelSceneBookItemResponse
     */
    public function updateHotelSceneBookItem($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new UpdateHotelSceneBookItemHeaders([]);

        return $this->updateHotelSceneBookItemWithOptions($request, $headers, $runtime);
    }

    /**
     * @param UpdateHotelSceneItemRequest $tmpReq
     * @param UpdateHotelSceneItemHeaders $headers
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateHotelSceneItemResponse
     */
    public function updateHotelSceneItemWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateHotelSceneItemShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->updateHotelSceneOperateReq)) {
            $request->updateHotelSceneOperateReqShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->updateHotelSceneOperateReq, 'UpdateHotelSceneOperateReq', 'json');
        }
        if (!Utils::isUnset($tmpReq->updateHotelSceneReq)) {
            $request->updateHotelSceneReqShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->updateHotelSceneReq, 'UpdateHotelSceneReq', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->updateHotelSceneOperateReqShrink)) {
            $query['UpdateHotelSceneOperateReq'] = $request->updateHotelSceneOperateReqShrink;
        }
        if (!Utils::isUnset($request->updateHotelSceneReqShrink)) {
            $query['UpdateHotelSceneReq'] = $request->updateHotelSceneReqShrink;
        }
        $body = [];
        if (!Utils::isUnset($request->hotelId)) {
            $body['HotelId'] = $request->hotelId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAligenieAccessToken)) {
            $realHeaders['x-acs-aligenie-access-token'] = Utils::toJSONString($headers->xAcsAligenieAccessToken);
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateHotelSceneItem',
            'version'     => 'ip_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ip/updateHotelSceneItem',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateHotelSceneItemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateHotelSceneItemRequest $request
     *
     * @return UpdateHotelSceneItemResponse
     */
    public function updateHotelSceneItem($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new UpdateHotelSceneItemHeaders([]);

        return $this->updateHotelSceneItemWithOptions($request, $headers, $runtime);
    }

    /**
     * @param UpdateMessageTemplateRequest $request
     * @param UpdateMessageTemplateHeaders $headers
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateMessageTemplateResponse
     */
    public function updateMessageTemplateWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->templateDetail)) {
            $body['TemplateDetail'] = $request->templateDetail;
        }
        if (!Utils::isUnset($request->templateId)) {
            $body['TemplateId'] = $request->templateId;
        }
        if (!Utils::isUnset($request->templateName)) {
            $body['TemplateName'] = $request->templateName;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAligenieAccessToken)) {
            $realHeaders['x-acs-aligenie-access-token'] = Utils::toJSONString($headers->xAcsAligenieAccessToken);
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateMessageTemplate',
            'version'     => 'ip_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ip/updateMessageTemplate',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateMessageTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateMessageTemplateRequest $request
     *
     * @return UpdateMessageTemplateResponse
     */
    public function updateMessageTemplate($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new UpdateMessageTemplateHeaders([]);

        return $this->updateMessageTemplateWithOptions($request, $headers, $runtime);
    }

    /**
     * @param UpdateRcuSceneRequest $tmpReq
     * @param UpdateRcuSceneHeaders $headers
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateRcuSceneResponse
     */
    public function updateRcuSceneWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateRcuSceneShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->sceneRelationExtDTO)) {
            $request->sceneRelationExtDTOShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->sceneRelationExtDTO, 'SceneRelationExtDTO', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->hotelId)) {
            $body['HotelId'] = $request->hotelId;
        }
        if (!Utils::isUnset($request->sceneId)) {
            $body['SceneId'] = $request->sceneId;
        }
        if (!Utils::isUnset($request->sceneRelationExtDTOShrink)) {
            $body['SceneRelationExtDTO'] = $request->sceneRelationExtDTOShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAligenieAccessToken)) {
            $realHeaders['x-acs-aligenie-access-token'] = Utils::toJSONString($headers->xAcsAligenieAccessToken);
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateRcuScene',
            'version'     => 'ip_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ip/updateRcuScene',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateRcuSceneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateRcuSceneRequest $request
     *
     * @return UpdateRcuSceneResponse
     */
    public function updateRcuScene($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new UpdateRcuSceneHeaders([]);

        return $this->updateRcuSceneWithOptions($request, $headers, $runtime);
    }

    /**
     * @param UpdateServiceQARequest $request
     * @param UpdateServiceQAHeaders $headers
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateServiceQAResponse
     */
    public function updateServiceQAWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->answer)) {
            $body['Answer'] = $request->answer;
        }
        if (!Utils::isUnset($request->hotelId)) {
            $body['HotelId'] = $request->hotelId;
        }
        if (!Utils::isUnset($request->serviceQAId)) {
            $body['ServiceQAId'] = $request->serviceQAId;
        }
        if (!Utils::isUnset($request->isActive)) {
            $body['isActive'] = $request->isActive;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAligenieAccessToken)) {
            $realHeaders['x-acs-aligenie-access-token'] = Utils::toJSONString($headers->xAcsAligenieAccessToken);
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateServiceQA',
            'version'     => 'ip_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ip/updateServiceQA',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateServiceQAResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateServiceQARequest $request
     *
     * @return UpdateServiceQAResponse
     */
    public function updateServiceQA($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new UpdateServiceQAHeaders([]);

        return $this->updateServiceQAWithOptions($request, $headers, $runtime);
    }

    /**
     * @param UpdateTicketRequest $request
     * @param UpdateTicketHeaders $headers
     * @param RuntimeOptions      $runtime
     *
     * @return UpdateTicketResponse
     */
    public function updateTicketWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->groupKey)) {
            $body['GroupKey'] = $request->groupKey;
        }
        if (!Utils::isUnset($request->hotelId)) {
            $body['HotelId'] = $request->hotelId;
        }
        if (!Utils::isUnset($request->status)) {
            $body['Status'] = $request->status;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAligenieAccessToken)) {
            $realHeaders['x-acs-aligenie-access-token'] = Utils::toJSONString($headers->xAcsAligenieAccessToken);
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateTicket',
            'version'     => 'ip_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ip/updateTicket',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateTicketResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateTicketRequest $request
     *
     * @return UpdateTicketResponse
     */
    public function updateTicket($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new UpdateTicketHeaders([]);

        return $this->updateTicketWithOptions($request, $headers, $runtime);
    }
}
