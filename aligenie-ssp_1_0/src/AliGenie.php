<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\AddAndRemoveFavoriteContentHeaders;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\AddAndRemoveFavoriteContentRequest;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\AddAndRemoveFavoriteContentResponse;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\AddAndRemoveFavoriteContentShrinkRequest;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\AddSubHeaders;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\AddSubRequest;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\AddSubResponse;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\AddSubShrinkRequest;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\AuthLoginWithAligenieUserInfoGeneratedByPhoneNumberHeaders;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\AuthLoginWithAligenieUserInfoGeneratedByPhoneNumberRequest;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\AuthLoginWithAligenieUserInfoGeneratedByPhoneNumberResponse;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\AuthLoginWithAligenieUserInfoHeaders;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\AuthLoginWithAligenieUserInfoRequest;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\AuthLoginWithAligenieUserInfoResponse;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\AuthLoginWithTaobaoUserInfoHeaders;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\AuthLoginWithTaobaoUserInfoRequest;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\AuthLoginWithTaobaoUserInfoResponse;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\AuthLoginWithThirdUserInfoHeaders;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\AuthLoginWithThirdUserInfoRequest;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\AuthLoginWithThirdUserInfoResponse;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\AuthLoginWithThirdUserInfoShrinkRequest;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\CheckAuthCodeBindForExtHeaders;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\CheckAuthCodeBindForExtRequest;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\CheckAuthCodeBindForExtResponse;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\CheckAuthCodeBindForExtShrinkRequest;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\CreateAlarmHeaders;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\CreateAlarmRequest;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\CreateAlarmResponse;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\CreateAlarmShrinkRequest;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\CreatePlayingListHeaders;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\CreatePlayingListRequest;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\CreatePlayingListResponse;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\CreatePlayingListShrinkRequest;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\CreateScheduleTaskHeaders;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\CreateScheduleTaskRequest;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\CreateScheduleTaskResponse;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\CreateScheduleTaskShrinkRequest;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\DeleteAlarmsHeaders;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\DeleteAlarmsRequest;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\DeleteAlarmsResponse;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\DeleteAlarmsShrinkRequest;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\DeleteScheduleTaskHeaders;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\DeleteScheduleTaskRequest;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\DeleteScheduleTaskResponse;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\DeleteScheduleTaskShrinkRequest;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\DeleteSubHeaders;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\DeleteSubRequest;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\DeleteSubResponse;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\DeviceControlHeaders;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\DeviceControlRequest;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\DeviceControlResponse;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\DeviceControlShrinkRequest;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\EcologyOpennessAuthenticateHeaders;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\EcologyOpennessAuthenticateRequest;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\EcologyOpennessAuthenticateResponse;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\EcologyOpennessSendVerificationCodeHeaders;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\EcologyOpennessSendVerificationCodeRequest;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\EcologyOpennessSendVerificationCodeResponse;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\FindUserlistToAuthLoginWithPhoneNumberHeaders;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\FindUserlistToAuthLoginWithPhoneNumberRequest;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\FindUserlistToAuthLoginWithPhoneNumberResponse;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\GetAlarmHeaders;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\GetAlarmRequest;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\GetAlarmResponse;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\GetAlarmShrinkRequest;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\GetAlbumDetailByIdHeaders;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\GetAlbumDetailByIdRequest;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\GetAlbumDetailByIdResponse;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\GetAlbumHeaders;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\GetAlbumRequest;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\GetAlbumResponse;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\GetAligenieUserInfoHeaders;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\GetAligenieUserInfoRequest;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\GetAligenieUserInfoResponse;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\GetCodeEnhanceHeaders;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\GetCodeEnhanceRequest;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\GetCodeEnhanceResponse;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\GetCodeEnhanceShrinkRequest;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\GetContentHeaders;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\GetContentRequest;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\GetContentResponse;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\GetCurrentPlayingItemHeaders;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\GetCurrentPlayingItemRequest;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\GetCurrentPlayingItemResponse;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\GetCurrentPlayingItemShrinkRequest;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\GetCurrentPlayingListHeaders;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\GetCurrentPlayingListRequest;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\GetCurrentPlayingListResponse;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\GetCurrentPlayingListShrinkRequest;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\GetDeviceBasicInfoHeaders;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\GetDeviceBasicInfoRequest;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\GetDeviceBasicInfoResponse;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\GetDeviceBasicInfoShrinkRequest;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\GetDeviceIdByIdentityHeaders;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\GetDeviceIdByIdentityRequest;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\GetDeviceIdByIdentityResponse;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\GetDeviceSettingHeaders;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\GetDeviceSettingRequest;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\GetDeviceSettingResponse;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\GetDeviceSettingShrinkRequest;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\GetDeviceStatusDetailHeaders;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\GetDeviceStatusDetailRequest;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\GetDeviceStatusDetailResponse;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\GetDeviceStatusDetailShrinkRequest;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\GetDeviceStatusInfoHeaders;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\GetDeviceStatusInfoRequest;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\GetDeviceStatusInfoResponse;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\GetDeviceStatusInfoShrinkRequest;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\GetDeviceTagHeaders;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\GetDeviceTagRequest;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\GetDeviceTagResponse;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\GetDeviceTagShrinkRequest;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\GetScheduleTaskHeaders;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\GetScheduleTaskRequest;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\GetScheduleTaskResponse;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\GetScheduleTaskShrinkRequest;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\GetUnreadMessageCountHeaders;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\GetUnreadMessageCountRequest;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\GetUnreadMessageCountResponse;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\GetUnreadMessageCountShrinkRequest;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\GetUserByDeviceIdHeaders;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\GetUserByDeviceIdRequest;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\GetUserByDeviceIdResponse;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\GetUserByDeviceIdShrinkRequest;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\GetWeatherHeaders;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\GetWeatherRequest;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\GetWeatherResponse;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\GetWeatherShrinkRequest;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\IndexControlPlayingListHeaders;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\IndexControlPlayingListRequest;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\IndexControlPlayingListResponse;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\IndexControlPlayingListShrinkRequest;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ListAlarmsHeaders;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ListAlarmsRequest;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ListAlarmsResponse;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ListAlarmsShrinkRequest;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ListAlbumDetailHeaders;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ListAlbumDetailRequest;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ListAlbumDetailResponse;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ListAlbumIsAddedHeaders;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ListAlbumIsAddedRequest;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ListAlbumIsAddedResponse;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ListAlbumIsAddedShrinkRequest;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ListCateContentHeaders;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ListCateContentRequest;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ListCateContentResponse;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ListCateContentShrinkRequest;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ListCateInfoHeaders;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ListCateInfoRequest;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ListCateInfoResponse;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ListCommonCateFirstFloorHeaders;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ListCommonCateFirstFloorRequest;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ListCommonCateFirstFloorResponse;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ListCommonCateSecondFloorHeaders;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ListCommonCateSecondFloorRequest;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ListCommonCateSecondFloorResponse;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ListDeviceBasicInfoHeaders;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ListDeviceBasicInfoRequest;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ListDeviceBasicInfoResponse;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ListDeviceBasicInfoShrinkRequest;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ListDeviceByUserIdAndChanelHeaders;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ListDeviceByUserIdAndChanelRequest;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ListDeviceByUserIdAndChanelResponse;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ListDeviceByUserIdAndChanelShrinkRequest;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ListDeviceByUserIdHeaders;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ListDeviceByUserIdRequest;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ListDeviceByUserIdResponse;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ListDeviceByUserIdShrinkRequest;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ListDeviceIdByIdentitiesHeaders;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ListDeviceIdByIdentitiesRequest;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ListDeviceIdByIdentitiesResponse;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ListDeviceIdByIdentitiesShrinkRequest;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ListMusicHeaders;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ListMusicRequest;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ListMusicResponse;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ListMusicShrinkRequest;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ListPlayHistoryHeaders;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ListPlayHistoryRequest;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ListPlayHistoryResponse;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ListPlayHistoryShrinkRequest;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ListRecommendContentHeaders;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ListRecommendContentRequest;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ListRecommendContentResponse;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ListRecommendContentShrinkRequest;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ListSubAlbumHeaders;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ListSubAlbumRequest;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ListSubAlbumResponse;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ListSubAlbumShrinkRequest;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ListSubHeaders;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ListSubRequest;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ListSubResponse;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ListSubscriptionAlbumCategoryHeaders;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ListSubscriptionAlbumCategoryRequest;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ListSubscriptionAlbumCategoryResponse;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ListSubShrinkRequest;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ListUserMessageHeaders;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ListUserMessageRequest;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ListUserMessageResponse;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ListUserMessageShrinkRequest;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\PlayAndPauseControlHeaders;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\PlayAndPauseControlRequest;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\PlayAndPauseControlResponse;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\PlayAndPauseControlShrinkRequest;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\PlayModeControlHeaders;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\PlayModeControlRequest;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\PlayModeControlResponse;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\PlayModeControlShrinkRequest;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\PreviousAndNextControlHeaders;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\PreviousAndNextControlRequest;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\PreviousAndNextControlResponse;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\PreviousAndNextControlShrinkRequest;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ProgressControlHeaders;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ProgressControlRequest;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ProgressControlResponse;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ProgressControlShrinkRequest;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\QueryMusicTypeHeaders;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\QueryMusicTypeRequest;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\QueryMusicTypeResponse;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\QueryMusicTypeShrinkRequest;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ReadMessageHeaders;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ReadMessageRequest;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ReadMessageResponse;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ReadMessageShrinkRequest;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ScanCodeBindHeaders;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ScanCodeBindRequest;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ScanCodeBindResponse;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ScanCodeBindShrinkRequest;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ScgSearchHeaders;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ScgSearchRequest;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ScgSearchResponse;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ScgSearchShrinkRequest;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\SearchContentHeaders;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\SearchContentRequest;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\SearchContentResponse;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\SearchContentShrinkRequest;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\SendMessageHeaders;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\SendMessageRequest;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\SendMessageResponse;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\SendMessageShrinkRequest;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\SetDeviceSettingHeaders;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\SetDeviceSettingRequest;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\SetDeviceSettingResponse;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\SetDeviceSettingShrinkRequest;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\UnbindAligenieUserHeaders;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\UnbindAligenieUserRequest;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\UnbindAligenieUserResponse;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\UnbindDeviceHeaders;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\UnbindDeviceRequest;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\UnbindDeviceResponse;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\UnbindDeviceShrinkRequest;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\UpdateAlarmHeaders;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\UpdateAlarmRequest;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\UpdateAlarmResponse;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\UpdateAlarmShrinkRequest;
use AlibabaCloud\Tea\Tea;
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
     * @param AddAndRemoveFavoriteContentRequest $request
     *
     * @return AddAndRemoveFavoriteContentResponse
     */
    public function addAndRemoveFavoriteContent($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new AddAndRemoveFavoriteContentHeaders([]);

        return $this->addAndRemoveFavoriteContentWithOptions($request, $headers, $runtime);
    }

    /**
     * @param AddAndRemoveFavoriteContentRequest $tmpReq
     * @param AddAndRemoveFavoriteContentHeaders $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return AddAndRemoveFavoriteContentResponse
     */
    public function addAndRemoveFavoriteContentWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new AddAndRemoveFavoriteContentShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->deviceInfo)) {
            $request->deviceInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->deviceInfo), 'DeviceInfo', 'json');
        }
        if (!Utils::isUnset($tmpReq->openAddAndRemoveFavoriteContentRequest)) {
            $request->openAddAndRemoveFavoriteContentRequestShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->openAddAndRemoveFavoriteContentRequest), 'OpenAddAndRemoveFavoriteContentRequest', 'json');
        }
        if (!Utils::isUnset($tmpReq->userInfo)) {
            $request->userInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->userInfo), 'UserInfo', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->deviceInfoShrink)) {
            $query['DeviceInfo'] = $request->deviceInfoShrink;
        }
        if (!Utils::isUnset($request->userInfoShrink)) {
            $query['UserInfo'] = $request->userInfoShrink;
        }
        $body = [];
        if (!Utils::isUnset($request->openAddAndRemoveFavoriteContentRequestShrink)) {
            $body['OpenAddAndRemoveFavoriteContentRequest'] = $request->openAddAndRemoveFavoriteContentRequestShrink;
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
            'action'      => 'AddAndRemoveFavoriteContent',
            'version'     => 'ssp_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ssp/AddAndRemoveFavoriteContent',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddAndRemoveFavoriteContentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddSubRequest $request
     *
     * @return AddSubResponse
     */
    public function addSub($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new AddSubHeaders([]);

        return $this->addSubWithOptions($request, $headers, $runtime);
    }

    /**
     * @param AddSubRequest  $tmpReq
     * @param AddSubHeaders  $headers
     * @param RuntimeOptions $runtime
     *
     * @return AddSubResponse
     */
    public function addSubWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new AddSubShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->addSubscriptionInfoRequest)) {
            $request->addSubscriptionInfoRequestShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->addSubscriptionInfoRequest), 'AddSubscriptionInfoRequest', 'json');
        }
        if (!Utils::isUnset($tmpReq->deviceInfo)) {
            $request->deviceInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->deviceInfo), 'DeviceInfo', 'json');
        }
        if (!Utils::isUnset($tmpReq->userInfo)) {
            $request->userInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->userInfo), 'UserInfo', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->addSubscriptionInfoRequestShrink)) {
            $query['AddSubscriptionInfoRequest'] = $request->addSubscriptionInfoRequestShrink;
        }
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
            'action'      => 'AddSub',
            'version'     => 'ssp_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ssp/addSub',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return AddSubResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AuthLoginWithAligenieUserInfoRequest $request
     *
     * @return AuthLoginWithAligenieUserInfoResponse
     */
    public function authLoginWithAligenieUserInfo($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new AuthLoginWithAligenieUserInfoHeaders([]);

        return $this->authLoginWithAligenieUserInfoWithOptions($request, $headers, $runtime);
    }

    /**
     * @param AuthLoginWithAligenieUserInfoRequest $request
     * @param AuthLoginWithAligenieUserInfoHeaders $headers
     * @param RuntimeOptions                       $runtime
     *
     * @return AuthLoginWithAligenieUserInfoResponse
     */
    public function authLoginWithAligenieUserInfoWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->encryptedAligenieUserIdentifier)) {
            $body['EncryptedAligenieUserIdentifier'] = $request->encryptedAligenieUserIdentifier;
        }
        if (!Utils::isUnset($request->sessionId)) {
            $body['SessionId'] = $request->sessionId;
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
            'action'      => 'AuthLoginWithAligenieUserInfo',
            'version'     => 'ssp_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ssp/authLoginWithAligenieUserInfo',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AuthLoginWithAligenieUserInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AuthLoginWithAligenieUserInfoGeneratedByPhoneNumberRequest $request
     *
     * @return AuthLoginWithAligenieUserInfoGeneratedByPhoneNumberResponse
     */
    public function authLoginWithAligenieUserInfoGeneratedByPhoneNumber($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new AuthLoginWithAligenieUserInfoGeneratedByPhoneNumberHeaders([]);

        return $this->authLoginWithAligenieUserInfoGeneratedByPhoneNumberWithOptions($request, $headers, $runtime);
    }

    /**
     * @param AuthLoginWithAligenieUserInfoGeneratedByPhoneNumberRequest $request
     * @param AuthLoginWithAligenieUserInfoGeneratedByPhoneNumberHeaders $headers
     * @param RuntimeOptions                                             $runtime
     *
     * @return AuthLoginWithAligenieUserInfoGeneratedByPhoneNumberResponse
     */
    public function authLoginWithAligenieUserInfoGeneratedByPhoneNumberWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->sessionId)) {
            $body['SessionId'] = $request->sessionId;
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
            'action'      => 'AuthLoginWithAligenieUserInfoGeneratedByPhoneNumber',
            'version'     => 'ssp_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ssp/authLoginWithAligenieUserInfoGeneratedByPhoneNumber',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AuthLoginWithAligenieUserInfoGeneratedByPhoneNumberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AuthLoginWithTaobaoUserInfoRequest $request
     *
     * @return AuthLoginWithTaobaoUserInfoResponse
     */
    public function authLoginWithTaobaoUserInfo($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new AuthLoginWithTaobaoUserInfoHeaders([]);

        return $this->authLoginWithTaobaoUserInfoWithOptions($request, $headers, $runtime);
    }

    /**
     * @param AuthLoginWithTaobaoUserInfoRequest $request
     * @param AuthLoginWithTaobaoUserInfoHeaders $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return AuthLoginWithTaobaoUserInfoResponse
     */
    public function authLoginWithTaobaoUserInfoWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->encryptedTaobaoUserIdentifier)) {
            $body['EncryptedTaobaoUserIdentifier'] = $request->encryptedTaobaoUserIdentifier;
        }
        if (!Utils::isUnset($request->sessionId)) {
            $body['SessionId'] = $request->sessionId;
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
            'action'      => 'AuthLoginWithTaobaoUserInfo',
            'version'     => 'ssp_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ssp/authLoginWithTaobaoUserInfo',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AuthLoginWithTaobaoUserInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AuthLoginWithThirdUserInfoRequest $request
     *
     * @return AuthLoginWithThirdUserInfoResponse
     */
    public function authLoginWithThirdUserInfo($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new AuthLoginWithThirdUserInfoHeaders([]);

        return $this->authLoginWithThirdUserInfoWithOptions($request, $headers, $runtime);
    }

    /**
     * @param AuthLoginWithThirdUserInfoRequest $tmpReq
     * @param AuthLoginWithThirdUserInfoHeaders $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return AuthLoginWithThirdUserInfoResponse
     */
    public function authLoginWithThirdUserInfoWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new AuthLoginWithThirdUserInfoShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->extInfo)) {
            $request->extInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->extInfo, 'ExtInfo', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->extInfoShrink)) {
            $body['ExtInfo'] = $request->extInfoShrink;
        }
        if (!Utils::isUnset($request->sceneCode)) {
            $body['SceneCode'] = $request->sceneCode;
        }
        if (!Utils::isUnset($request->thirdUserIdentifier)) {
            $body['ThirdUserIdentifier'] = $request->thirdUserIdentifier;
        }
        if (!Utils::isUnset($request->thirdUserType)) {
            $body['ThirdUserType'] = $request->thirdUserType;
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
            'action'      => 'AuthLoginWithThirdUserInfo',
            'version'     => 'ssp_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ssp/authLoginWithThirdUserInfo',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AuthLoginWithThirdUserInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CheckAuthCodeBindForExtRequest $request
     *
     * @return CheckAuthCodeBindForExtResponse
     */
    public function checkAuthCodeBindForExt($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CheckAuthCodeBindForExtHeaders([]);

        return $this->checkAuthCodeBindForExtWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CheckAuthCodeBindForExtRequest $tmpReq
     * @param CheckAuthCodeBindForExtHeaders $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return CheckAuthCodeBindForExtResponse
     */
    public function checkAuthCodeBindForExtWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CheckAuthCodeBindForExtShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->userInfo)) {
            $request->userInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->userInfo), 'UserInfo', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->authCode)) {
            $query['AuthCode'] = $request->authCode;
        }
        if (!Utils::isUnset($request->encodeKey)) {
            $query['EncodeKey'] = $request->encodeKey;
        }
        if (!Utils::isUnset($request->encodeType)) {
            $query['EncodeType'] = $request->encodeType;
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
            'action'      => 'CheckAuthCodeBindForExt',
            'version'     => 'ssp_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ssp/checkAuthCodeBindForExt',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CheckAuthCodeBindForExtResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateAlarmRequest $request
     *
     * @return CreateAlarmResponse
     */
    public function createAlarm($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CreateAlarmHeaders([]);

        return $this->createAlarmWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateAlarmRequest $tmpReq
     * @param CreateAlarmHeaders $headers
     * @param RuntimeOptions     $runtime
     *
     * @return CreateAlarmResponse
     */
    public function createAlarmWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateAlarmShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->deviceInfo)) {
            $request->deviceInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->deviceInfo), 'DeviceInfo', 'json');
        }
        if (!Utils::isUnset($tmpReq->payload)) {
            $request->payloadShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->payload), 'Payload', 'json');
        }
        if (!Utils::isUnset($tmpReq->userInfo)) {
            $request->userInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->userInfo), 'UserInfo', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->deviceInfoShrink)) {
            $body['DeviceInfo'] = $request->deviceInfoShrink;
        }
        if (!Utils::isUnset($request->payloadShrink)) {
            $body['Payload'] = $request->payloadShrink;
        }
        if (!Utils::isUnset($request->userInfoShrink)) {
            $body['UserInfo'] = $request->userInfoShrink;
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
            'action'      => 'CreateAlarm',
            'version'     => 'ssp_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ssp/createAlarm',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateAlarmResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreatePlayingListRequest $request
     *
     * @return CreatePlayingListResponse
     */
    public function createPlayingList($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CreatePlayingListHeaders([]);

        return $this->createPlayingListWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreatePlayingListRequest $tmpReq
     * @param CreatePlayingListHeaders $headers
     * @param RuntimeOptions           $runtime
     *
     * @return CreatePlayingListResponse
     */
    public function createPlayingListWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreatePlayingListShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->deviceInfo)) {
            $request->deviceInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->deviceInfo), 'DeviceInfo', 'json');
        }
        if (!Utils::isUnset($tmpReq->openCreatePlayingListRequest)) {
            $request->openCreatePlayingListRequestShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->openCreatePlayingListRequest), 'OpenCreatePlayingListRequest', 'json');
        }
        if (!Utils::isUnset($tmpReq->userInfo)) {
            $request->userInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->userInfo), 'UserInfo', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->deviceInfoShrink)) {
            $query['DeviceInfo'] = $request->deviceInfoShrink;
        }
        if (!Utils::isUnset($request->userInfoShrink)) {
            $query['UserInfo'] = $request->userInfoShrink;
        }
        $body = [];
        if (!Utils::isUnset($request->openCreatePlayingListRequestShrink)) {
            $body['OpenCreatePlayingListRequest'] = $request->openCreatePlayingListRequestShrink;
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
            'action'      => 'CreatePlayingList',
            'version'     => 'ssp_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ssp/CreatePlayingList',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreatePlayingListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateScheduleTaskRequest $request
     *
     * @return CreateScheduleTaskResponse
     */
    public function createScheduleTask($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CreateScheduleTaskHeaders([]);

        return $this->createScheduleTaskWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateScheduleTaskRequest $tmpReq
     * @param CreateScheduleTaskHeaders $headers
     * @param RuntimeOptions            $runtime
     *
     * @return CreateScheduleTaskResponse
     */
    public function createScheduleTaskWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateScheduleTaskShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->deviceInfo)) {
            $request->deviceInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->deviceInfo), 'DeviceInfo', 'json');
        }
        if (!Utils::isUnset($tmpReq->payload)) {
            $request->payloadShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->payload), 'Payload', 'json');
        }
        if (!Utils::isUnset($tmpReq->userInfo)) {
            $request->userInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->userInfo), 'UserInfo', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->deviceInfoShrink)) {
            $body['DeviceInfo'] = $request->deviceInfoShrink;
        }
        if (!Utils::isUnset($request->payloadShrink)) {
            $body['Payload'] = $request->payloadShrink;
        }
        if (!Utils::isUnset($request->userInfoShrink)) {
            $body['UserInfo'] = $request->userInfoShrink;
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
            'action'      => 'CreateScheduleTask',
            'version'     => 'ssp_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ssp/CreateScheduleTask',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateScheduleTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteAlarmsRequest $request
     *
     * @return DeleteAlarmsResponse
     */
    public function deleteAlarms($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new DeleteAlarmsHeaders([]);

        return $this->deleteAlarmsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DeleteAlarmsRequest $tmpReq
     * @param DeleteAlarmsHeaders $headers
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteAlarmsResponse
     */
    public function deleteAlarmsWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DeleteAlarmsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->deviceInfo)) {
            $request->deviceInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->deviceInfo), 'DeviceInfo', 'json');
        }
        if (!Utils::isUnset($tmpReq->payload)) {
            $request->payloadShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->payload), 'Payload', 'json');
        }
        if (!Utils::isUnset($tmpReq->userInfo)) {
            $request->userInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->userInfo), 'UserInfo', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->deviceInfoShrink)) {
            $body['DeviceInfo'] = $request->deviceInfoShrink;
        }
        if (!Utils::isUnset($request->payloadShrink)) {
            $body['Payload'] = $request->payloadShrink;
        }
        if (!Utils::isUnset($request->userInfoShrink)) {
            $body['UserInfo'] = $request->userInfoShrink;
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
            'action'      => 'DeleteAlarms',
            'version'     => 'ssp_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ssp/deleteAlarms',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteAlarmsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteScheduleTaskRequest $request
     *
     * @return DeleteScheduleTaskResponse
     */
    public function deleteScheduleTask($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new DeleteScheduleTaskHeaders([]);

        return $this->deleteScheduleTaskWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DeleteScheduleTaskRequest $tmpReq
     * @param DeleteScheduleTaskHeaders $headers
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteScheduleTaskResponse
     */
    public function deleteScheduleTaskWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DeleteScheduleTaskShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->deviceInfo)) {
            $request->deviceInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->deviceInfo), 'DeviceInfo', 'json');
        }
        if (!Utils::isUnset($tmpReq->payload)) {
            $request->payloadShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->payload), 'Payload', 'json');
        }
        if (!Utils::isUnset($tmpReq->userInfo)) {
            $request->userInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->userInfo), 'UserInfo', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->deviceInfoShrink)) {
            $body['DeviceInfo'] = $request->deviceInfoShrink;
        }
        if (!Utils::isUnset($request->payloadShrink)) {
            $body['Payload'] = $request->payloadShrink;
        }
        if (!Utils::isUnset($request->userInfoShrink)) {
            $body['UserInfo'] = $request->userInfoShrink;
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
            'action'      => 'DeleteScheduleTask',
            'version'     => 'ssp_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ssp/DeleteScheduleTask',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteScheduleTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteSubRequest $request
     *
     * @return DeleteSubResponse
     */
    public function deleteSub($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new DeleteSubHeaders([]);

        return $this->deleteSubWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DeleteSubRequest $request
     * @param DeleteSubHeaders $headers
     * @param RuntimeOptions   $runtime
     *
     * @return DeleteSubResponse
     */
    public function deleteSubWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->subId)) {
            $query['SubId'] = $request->subId;
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
            'action'      => 'DeleteSub',
            'version'     => 'ssp_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ssp/deleteSub',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteSubResponse::fromMap($this->callApi($params, $req, $runtime));
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
        if (!Utils::isUnset($tmpReq->controlRequest)) {
            $request->controlRequestShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->controlRequest), 'ControlRequest', 'json');
        }
        if (!Utils::isUnset($tmpReq->deviceInfo)) {
            $request->deviceInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->deviceInfo), 'DeviceInfo', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->deviceInfoShrink)) {
            $query['DeviceInfo'] = $request->deviceInfoShrink;
        }
        $body = [];
        if (!Utils::isUnset($request->controlRequestShrink)) {
            $body['ControlRequest'] = $request->controlRequestShrink;
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
            'action'      => 'DeviceControl',
            'version'     => 'ssp_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ssp/control',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeviceControlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param EcologyOpennessAuthenticateRequest $request
     *
     * @return EcologyOpennessAuthenticateResponse
     */
    public function ecologyOpennessAuthenticate($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new EcologyOpennessAuthenticateHeaders([]);

        return $this->ecologyOpennessAuthenticateWithOptions($request, $headers, $runtime);
    }

    /**
     * @param EcologyOpennessAuthenticateRequest $request
     * @param EcologyOpennessAuthenticateHeaders $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return EcologyOpennessAuthenticateResponse
     */
    public function ecologyOpennessAuthenticateWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->encodeKey)) {
            $body['EncodeKey'] = $request->encodeKey;
        }
        if (!Utils::isUnset($request->encodeType)) {
            $body['EncodeType'] = $request->encodeType;
        }
        if (!Utils::isUnset($request->loginStateAccessToken)) {
            $body['LoginStateAccessToken'] = $request->loginStateAccessToken;
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
            'action'      => 'EcologyOpennessAuthenticate',
            'version'     => 'ssp_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ssp/ecologyOpennessAuthenticate',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EcologyOpennessAuthenticateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param EcologyOpennessSendVerificationCodeRequest $request
     *
     * @return EcologyOpennessSendVerificationCodeResponse
     */
    public function ecologyOpennessSendVerificationCode($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new EcologyOpennessSendVerificationCodeHeaders([]);

        return $this->ecologyOpennessSendVerificationCodeWithOptions($request, $headers, $runtime);
    }

    /**
     * @param EcologyOpennessSendVerificationCodeRequest $request
     * @param EcologyOpennessSendVerificationCodeHeaders $headers
     * @param RuntimeOptions                             $runtime
     *
     * @return EcologyOpennessSendVerificationCodeResponse
     */
    public function ecologyOpennessSendVerificationCodeWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->phoneNumber)) {
            $body['PhoneNumber'] = $request->phoneNumber;
        }
        if (!Utils::isUnset($request->region)) {
            $body['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->sessionId)) {
            $body['SessionId'] = $request->sessionId;
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
            'action'      => 'EcologyOpennessSendVerificationCode',
            'version'     => 'ssp_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ssp/ecologyOpennessSendVerificationCode',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EcologyOpennessSendVerificationCodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param FindUserlistToAuthLoginWithPhoneNumberRequest $request
     *
     * @return FindUserlistToAuthLoginWithPhoneNumberResponse
     */
    public function findUserlistToAuthLoginWithPhoneNumber($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new FindUserlistToAuthLoginWithPhoneNumberHeaders([]);

        return $this->findUserlistToAuthLoginWithPhoneNumberWithOptions($request, $headers, $runtime);
    }

    /**
     * @param FindUserlistToAuthLoginWithPhoneNumberRequest $request
     * @param FindUserlistToAuthLoginWithPhoneNumberHeaders $headers
     * @param RuntimeOptions                                $runtime
     *
     * @return FindUserlistToAuthLoginWithPhoneNumberResponse
     */
    public function findUserlistToAuthLoginWithPhoneNumberWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->code)) {
            $query['Code'] = $request->code;
        }
        if (!Utils::isUnset($request->phoneNumber)) {
            $query['PhoneNumber'] = $request->phoneNumber;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->sessionId)) {
            $query['SessionId'] = $request->sessionId;
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
            'action'      => 'FindUserlistToAuthLoginWithPhoneNumber',
            'version'     => 'ssp_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ssp/findUserlistToAuthLoginWithPhoneNumber',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return FindUserlistToAuthLoginWithPhoneNumberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetAlarmRequest $request
     *
     * @return GetAlarmResponse
     */
    public function getAlarm($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetAlarmHeaders([]);

        return $this->getAlarmWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetAlarmRequest $tmpReq
     * @param GetAlarmHeaders $headers
     * @param RuntimeOptions  $runtime
     *
     * @return GetAlarmResponse
     */
    public function getAlarmWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetAlarmShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->deviceInfo)) {
            $request->deviceInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->deviceInfo), 'DeviceInfo', 'json');
        }
        if (!Utils::isUnset($tmpReq->payload)) {
            $request->payloadShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->payload), 'Payload', 'json');
        }
        if (!Utils::isUnset($tmpReq->userInfo)) {
            $request->userInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->userInfo), 'UserInfo', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->deviceInfoShrink)) {
            $body['DeviceInfo'] = $request->deviceInfoShrink;
        }
        if (!Utils::isUnset($request->payloadShrink)) {
            $body['Payload'] = $request->payloadShrink;
        }
        if (!Utils::isUnset($request->userInfoShrink)) {
            $body['UserInfo'] = $request->userInfoShrink;
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
            'action'      => 'GetAlarm',
            'version'     => 'ssp_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ssp/getAlarm',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAlarmResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetAlbumRequest $request
     *
     * @return GetAlbumResponse
     */
    public function getAlbum($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetAlbumHeaders([]);

        return $this->getAlbumWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetAlbumRequest $request
     * @param GetAlbumHeaders $headers
     * @param RuntimeOptions  $runtime
     *
     * @return GetAlbumResponse
     */
    public function getAlbumWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
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
            'action'      => 'GetAlbum',
            'version'     => 'ssp_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ssp/GetAlbum',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetAlbumResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetAlbumDetailByIdRequest $request
     *
     * @return GetAlbumDetailByIdResponse
     */
    public function getAlbumDetailById($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetAlbumDetailByIdHeaders([]);

        return $this->getAlbumDetailByIdWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetAlbumDetailByIdRequest $request
     * @param GetAlbumDetailByIdHeaders $headers
     * @param RuntimeOptions            $runtime
     *
     * @return GetAlbumDetailByIdResponse
     */
    public function getAlbumDetailByIdWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->albumId)) {
            $query['AlbumId'] = $request->albumId;
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
            'action'      => 'GetAlbumDetailById',
            'version'     => 'ssp_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ssp/getAlbumDetailById',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetAlbumDetailByIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetAligenieUserInfoRequest $request
     *
     * @return GetAligenieUserInfoResponse
     */
    public function getAligenieUserInfo($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetAligenieUserInfoHeaders([]);

        return $this->getAligenieUserInfoWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetAligenieUserInfoRequest $request
     * @param GetAligenieUserInfoHeaders $headers
     * @param RuntimeOptions             $runtime
     *
     * @return GetAligenieUserInfoResponse
     */
    public function getAligenieUserInfoWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->loginStateAccessToken)) {
            $query['LoginStateAccessToken'] = $request->loginStateAccessToken;
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
            'action'      => 'GetAligenieUserInfo',
            'version'     => 'ssp_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ssp/getAligenieUserInfo',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetAligenieUserInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetCodeEnhanceRequest $request
     *
     * @return GetCodeEnhanceResponse
     */
    public function getCodeEnhance($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetCodeEnhanceHeaders([]);

        return $this->getCodeEnhanceWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetCodeEnhanceRequest $tmpReq
     * @param GetCodeEnhanceHeaders $headers
     * @param RuntimeOptions        $runtime
     *
     * @return GetCodeEnhanceResponse
     */
    public function getCodeEnhanceWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetCodeEnhanceShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->channelInfo)) {
            $request->channelInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->channelInfo), 'ChannelInfo', 'json');
        }
        if (!Utils::isUnset($tmpReq->userInfo)) {
            $request->userInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->userInfo), 'UserInfo', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->channelInfoShrink)) {
            $query['ChannelInfo'] = $request->channelInfoShrink;
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
            'action'      => 'GetCodeEnhance',
            'version'     => 'ssp_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ssp/getCodeEnhance',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetCodeEnhanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetContentRequest $request
     *
     * @return GetContentResponse
     */
    public function getContent($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetContentHeaders([]);

        return $this->getContentWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetContentRequest $request
     * @param GetContentHeaders $headers
     * @param RuntimeOptions    $runtime
     *
     * @return GetContentResponse
     */
    public function getContentWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
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
            'action'      => 'GetContent',
            'version'     => 'ssp_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ssp/GetContent',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetContentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetCurrentPlayingItemRequest $request
     *
     * @return GetCurrentPlayingItemResponse
     */
    public function getCurrentPlayingItem($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetCurrentPlayingItemHeaders([]);

        return $this->getCurrentPlayingItemWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetCurrentPlayingItemRequest $tmpReq
     * @param GetCurrentPlayingItemHeaders $headers
     * @param RuntimeOptions               $runtime
     *
     * @return GetCurrentPlayingItemResponse
     */
    public function getCurrentPlayingItemWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetCurrentPlayingItemShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->deviceInfo)) {
            $request->deviceInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->deviceInfo), 'DeviceInfo', 'json');
        }
        if (!Utils::isUnset($tmpReq->userInfo)) {
            $request->userInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->userInfo), 'UserInfo', 'json');
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
            'action'      => 'GetCurrentPlayingItem',
            'version'     => 'ssp_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ssp/GetCurrentPlayingItem',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetCurrentPlayingItemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetCurrentPlayingListRequest $request
     *
     * @return GetCurrentPlayingListResponse
     */
    public function getCurrentPlayingList($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetCurrentPlayingListHeaders([]);

        return $this->getCurrentPlayingListWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetCurrentPlayingListRequest $tmpReq
     * @param GetCurrentPlayingListHeaders $headers
     * @param RuntimeOptions               $runtime
     *
     * @return GetCurrentPlayingListResponse
     */
    public function getCurrentPlayingListWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetCurrentPlayingListShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->deviceInfo)) {
            $request->deviceInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->deviceInfo), 'DeviceInfo', 'json');
        }
        if (!Utils::isUnset($tmpReq->openQueryPlayListRequest)) {
            $request->openQueryPlayListRequestShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->openQueryPlayListRequest), 'OpenQueryPlayListRequest', 'json');
        }
        if (!Utils::isUnset($tmpReq->userInfo)) {
            $request->userInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->userInfo), 'UserInfo', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->deviceInfoShrink)) {
            $query['DeviceInfo'] = $request->deviceInfoShrink;
        }
        if (!Utils::isUnset($request->userInfoShrink)) {
            $query['UserInfo'] = $request->userInfoShrink;
        }
        $body = [];
        if (!Utils::isUnset($request->openQueryPlayListRequestShrink)) {
            $body['OpenQueryPlayListRequest'] = $request->openQueryPlayListRequestShrink;
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
            'action'      => 'GetCurrentPlayingList',
            'version'     => 'ssp_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ssp/GetCurrentPlayingList',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetCurrentPlayingListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetDeviceBasicInfoRequest $request
     *
     * @return GetDeviceBasicInfoResponse
     */
    public function getDeviceBasicInfo($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetDeviceBasicInfoHeaders([]);

        return $this->getDeviceBasicInfoWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetDeviceBasicInfoRequest $tmpReq
     * @param GetDeviceBasicInfoHeaders $headers
     * @param RuntimeOptions            $runtime
     *
     * @return GetDeviceBasicInfoResponse
     */
    public function getDeviceBasicInfoWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetDeviceBasicInfoShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->deviceInfo)) {
            $request->deviceInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->deviceInfo), 'DeviceInfo', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->deviceInfoShrink)) {
            $query['DeviceInfo'] = $request->deviceInfoShrink;
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
            'action'      => 'GetDeviceBasicInfo',
            'version'     => 'ssp_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ssp/getDeviceBasicInfo',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetDeviceBasicInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetDeviceIdByIdentityRequest $request
     *
     * @return GetDeviceIdByIdentityResponse
     */
    public function getDeviceIdByIdentity($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetDeviceIdByIdentityHeaders([]);

        return $this->getDeviceIdByIdentityWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetDeviceIdByIdentityRequest $request
     * @param GetDeviceIdByIdentityHeaders $headers
     * @param RuntimeOptions               $runtime
     *
     * @return GetDeviceIdByIdentityResponse
     */
    public function getDeviceIdByIdentityWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->encodeKey)) {
            $query['EncodeKey'] = $request->encodeKey;
        }
        if (!Utils::isUnset($request->encodeType)) {
            $query['EncodeType'] = $request->encodeType;
        }
        if (!Utils::isUnset($request->identityId)) {
            $query['IdentityId'] = $request->identityId;
        }
        if (!Utils::isUnset($request->identityType)) {
            $query['IdentityType'] = $request->identityType;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
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
            'action'      => 'GetDeviceIdByIdentity',
            'version'     => 'ssp_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ssp/getDeviceIdByIdentity',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetDeviceIdByIdentityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetDeviceSettingRequest $request
     *
     * @return GetDeviceSettingResponse
     */
    public function getDeviceSetting($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetDeviceSettingHeaders([]);

        return $this->getDeviceSettingWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetDeviceSettingRequest $tmpReq
     * @param GetDeviceSettingHeaders $headers
     * @param RuntimeOptions          $runtime
     *
     * @return GetDeviceSettingResponse
     */
    public function getDeviceSettingWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetDeviceSettingShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->deviceInfo)) {
            $request->deviceInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->deviceInfo), 'DeviceInfo', 'json');
        }
        if (!Utils::isUnset($tmpReq->keys)) {
            $request->keysShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->keys, 'Keys', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->deviceInfoShrink)) {
            $query['DeviceInfo'] = $request->deviceInfoShrink;
        }
        if (!Utils::isUnset($request->keysShrink)) {
            $query['Keys'] = $request->keysShrink;
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
            'action'      => 'GetDeviceSetting',
            'version'     => 'ssp_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ssp/getDeviceSetting',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetDeviceSettingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetDeviceStatusDetailRequest $request
     *
     * @return GetDeviceStatusDetailResponse
     */
    public function getDeviceStatusDetail($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetDeviceStatusDetailHeaders([]);

        return $this->getDeviceStatusDetailWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetDeviceStatusDetailRequest $tmpReq
     * @param GetDeviceStatusDetailHeaders $headers
     * @param RuntimeOptions               $runtime
     *
     * @return GetDeviceStatusDetailResponse
     */
    public function getDeviceStatusDetailWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetDeviceStatusDetailShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->deviceInfo)) {
            $request->deviceInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->deviceInfo), 'DeviceInfo', 'json');
        }
        if (!Utils::isUnset($tmpReq->keys)) {
            $request->keysShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->keys, 'Keys', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->deviceInfoShrink)) {
            $query['DeviceInfo'] = $request->deviceInfoShrink;
        }
        if (!Utils::isUnset($request->keysShrink)) {
            $query['Keys'] = $request->keysShrink;
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
            'action'      => 'GetDeviceStatusDetail',
            'version'     => 'ssp_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ssp/getDeviceStatusDetail',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetDeviceStatusDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetDeviceStatusInfoRequest $request
     *
     * @return GetDeviceStatusInfoResponse
     */
    public function getDeviceStatusInfo($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetDeviceStatusInfoHeaders([]);

        return $this->getDeviceStatusInfoWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetDeviceStatusInfoRequest $tmpReq
     * @param GetDeviceStatusInfoHeaders $headers
     * @param RuntimeOptions             $runtime
     *
     * @return GetDeviceStatusInfoResponse
     */
    public function getDeviceStatusInfoWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetDeviceStatusInfoShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->deviceInfo)) {
            $request->deviceInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->deviceInfo), 'DeviceInfo', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->deviceInfoShrink)) {
            $query['DeviceInfo'] = $request->deviceInfoShrink;
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
            'action'      => 'GetDeviceStatusInfo',
            'version'     => 'ssp_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ssp/getDeviceStatusInfo',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetDeviceStatusInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetDeviceTagRequest $request
     *
     * @return GetDeviceTagResponse
     */
    public function getDeviceTag($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetDeviceTagHeaders([]);

        return $this->getDeviceTagWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetDeviceTagRequest $tmpReq
     * @param GetDeviceTagHeaders $headers
     * @param RuntimeOptions      $runtime
     *
     * @return GetDeviceTagResponse
     */
    public function getDeviceTagWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetDeviceTagShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->deviceInfo)) {
            $request->deviceInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->deviceInfo), 'DeviceInfo', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->deviceInfoShrink)) {
            $query['DeviceInfo'] = $request->deviceInfoShrink;
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
            'action'      => 'GetDeviceTag',
            'version'     => 'ssp_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ssp/getDeviceTag',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetDeviceTagResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetScheduleTaskRequest $request
     *
     * @return GetScheduleTaskResponse
     */
    public function getScheduleTask($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetScheduleTaskHeaders([]);

        return $this->getScheduleTaskWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetScheduleTaskRequest $tmpReq
     * @param GetScheduleTaskHeaders $headers
     * @param RuntimeOptions         $runtime
     *
     * @return GetScheduleTaskResponse
     */
    public function getScheduleTaskWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetScheduleTaskShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->deviceInfo)) {
            $request->deviceInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->deviceInfo), 'DeviceInfo', 'json');
        }
        if (!Utils::isUnset($tmpReq->payload)) {
            $request->payloadShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->payload), 'Payload', 'json');
        }
        if (!Utils::isUnset($tmpReq->userInfo)) {
            $request->userInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->userInfo), 'UserInfo', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->deviceInfoShrink)) {
            $body['DeviceInfo'] = $request->deviceInfoShrink;
        }
        if (!Utils::isUnset($request->payloadShrink)) {
            $body['Payload'] = $request->payloadShrink;
        }
        if (!Utils::isUnset($request->userInfoShrink)) {
            $body['UserInfo'] = $request->userInfoShrink;
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
            'action'      => 'GetScheduleTask',
            'version'     => 'ssp_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ssp/GetScheduleTask',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetScheduleTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetUnreadMessageCountRequest $request
     *
     * @return GetUnreadMessageCountResponse
     */
    public function getUnreadMessageCount($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetUnreadMessageCountHeaders([]);

        return $this->getUnreadMessageCountWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetUnreadMessageCountRequest $tmpReq
     * @param GetUnreadMessageCountHeaders $headers
     * @param RuntimeOptions               $runtime
     *
     * @return GetUnreadMessageCountResponse
     */
    public function getUnreadMessageCountWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetUnreadMessageCountShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->userInfo)) {
            $request->userInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->userInfo), 'UserInfo', 'json');
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
            'action'      => 'GetUnreadMessageCount',
            'version'     => 'ssp_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ssp/getUnreadMessageCount',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetUnreadMessageCountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetUserByDeviceIdRequest $request
     *
     * @return GetUserByDeviceIdResponse
     */
    public function getUserByDeviceId($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetUserByDeviceIdHeaders([]);

        return $this->getUserByDeviceIdWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetUserByDeviceIdRequest $tmpReq
     * @param GetUserByDeviceIdHeaders $headers
     * @param RuntimeOptions           $runtime
     *
     * @return GetUserByDeviceIdResponse
     */
    public function getUserByDeviceIdWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetUserByDeviceIdShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->deviceInfo)) {
            $request->deviceInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->deviceInfo), 'DeviceInfo', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->deviceInfoShrink)) {
            $query['DeviceInfo'] = $request->deviceInfoShrink;
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
            'action'      => 'GetUserByDeviceId',
            'version'     => 'ssp_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ssp/getUserByDeviceId',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetUserByDeviceIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetWeatherRequest $request
     *
     * @return GetWeatherResponse
     */
    public function getWeather($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetWeatherHeaders([]);

        return $this->getWeatherWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetWeatherRequest $tmpReq
     * @param GetWeatherHeaders $headers
     * @param RuntimeOptions    $runtime
     *
     * @return GetWeatherResponse
     */
    public function getWeatherWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetWeatherShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->deviceInfo)) {
            $request->deviceInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->deviceInfo), 'DeviceInfo', 'json');
        }
        if (!Utils::isUnset($tmpReq->payload)) {
            $request->payloadShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->payload), 'Payload', 'json');
        }
        if (!Utils::isUnset($tmpReq->userInfo)) {
            $request->userInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->userInfo), 'UserInfo', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->deviceInfoShrink)) {
            $body['DeviceInfo'] = $request->deviceInfoShrink;
        }
        if (!Utils::isUnset($request->payloadShrink)) {
            $body['Payload'] = $request->payloadShrink;
        }
        if (!Utils::isUnset($request->userInfoShrink)) {
            $body['UserInfo'] = $request->userInfoShrink;
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
            'action'      => 'GetWeather',
            'version'     => 'ssp_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ssp/GetWeather',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetWeatherResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param IndexControlPlayingListRequest $request
     *
     * @return IndexControlPlayingListResponse
     */
    public function indexControlPlayingList($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new IndexControlPlayingListHeaders([]);

        return $this->indexControlPlayingListWithOptions($request, $headers, $runtime);
    }

    /**
     * @param IndexControlPlayingListRequest $tmpReq
     * @param IndexControlPlayingListHeaders $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return IndexControlPlayingListResponse
     */
    public function indexControlPlayingListWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new IndexControlPlayingListShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->deviceInfo)) {
            $request->deviceInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->deviceInfo), 'DeviceInfo', 'json');
        }
        if (!Utils::isUnset($tmpReq->openIndexControlRequest)) {
            $request->openIndexControlRequestShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->openIndexControlRequest), 'OpenIndexControlRequest', 'json');
        }
        if (!Utils::isUnset($tmpReq->userInfo)) {
            $request->userInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->userInfo), 'UserInfo', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->deviceInfoShrink)) {
            $query['DeviceInfo'] = $request->deviceInfoShrink;
        }
        if (!Utils::isUnset($request->userInfoShrink)) {
            $query['UserInfo'] = $request->userInfoShrink;
        }
        $body = [];
        if (!Utils::isUnset($request->openIndexControlRequestShrink)) {
            $body['OpenIndexControlRequest'] = $request->openIndexControlRequestShrink;
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
            'action'      => 'IndexControlPlayingList',
            'version'     => 'ssp_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ssp/IndexControlPlayingList',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return IndexControlPlayingListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListAlarmsRequest $request
     *
     * @return ListAlarmsResponse
     */
    public function listAlarms($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ListAlarmsHeaders([]);

        return $this->listAlarmsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListAlarmsRequest $tmpReq
     * @param ListAlarmsHeaders $headers
     * @param RuntimeOptions    $runtime
     *
     * @return ListAlarmsResponse
     */
    public function listAlarmsWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListAlarmsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->deviceInfo)) {
            $request->deviceInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->deviceInfo), 'DeviceInfo', 'json');
        }
        if (!Utils::isUnset($tmpReq->payload)) {
            $request->payloadShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->payload), 'Payload', 'json');
        }
        if (!Utils::isUnset($tmpReq->userInfo)) {
            $request->userInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->userInfo), 'UserInfo', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->deviceInfoShrink)) {
            $body['DeviceInfo'] = $request->deviceInfoShrink;
        }
        if (!Utils::isUnset($request->payloadShrink)) {
            $body['Payload'] = $request->payloadShrink;
        }
        if (!Utils::isUnset($request->userInfoShrink)) {
            $body['UserInfo'] = $request->userInfoShrink;
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
            'action'      => 'ListAlarms',
            'version'     => 'ssp_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ssp/listAlarm',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAlarmsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListAlbumDetailRequest $request
     *
     * @return ListAlbumDetailResponse
     */
    public function listAlbumDetail($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ListAlbumDetailHeaders([]);

        return $this->listAlbumDetailWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListAlbumDetailRequest $request
     * @param ListAlbumDetailHeaders $headers
     * @param RuntimeOptions         $runtime
     *
     * @return ListAlbumDetailResponse
     */
    public function listAlbumDetailWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
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
            'action'      => 'ListAlbumDetail',
            'version'     => 'ssp_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ssp/ListAlbumDetail',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListAlbumDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListAlbumIsAddedRequest $request
     *
     * @return ListAlbumIsAddedResponse
     */
    public function listAlbumIsAdded($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ListAlbumIsAddedHeaders([]);

        return $this->listAlbumIsAddedWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListAlbumIsAddedRequest $tmpReq
     * @param ListAlbumIsAddedHeaders $headers
     * @param RuntimeOptions          $runtime
     *
     * @return ListAlbumIsAddedResponse
     */
    public function listAlbumIsAddedWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListAlbumIsAddedShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->albumIdList)) {
            $request->albumIdListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->albumIdList, 'AlbumIdList', 'json');
        }
        if (!Utils::isUnset($tmpReq->deviceInfo)) {
            $request->deviceInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->deviceInfo), 'DeviceInfo', 'json');
        }
        if (!Utils::isUnset($tmpReq->userInfo)) {
            $request->userInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->userInfo), 'UserInfo', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->albumIdListShrink)) {
            $query['AlbumIdList'] = $request->albumIdListShrink;
        }
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
            'action'      => 'ListAlbumIsAdded',
            'version'     => 'ssp_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ssp/listAlbumIsAdded',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListAlbumIsAddedResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListCateContentRequest $request
     *
     * @return ListCateContentResponse
     */
    public function listCateContent($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ListCateContentHeaders([]);

        return $this->listCateContentWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListCateContentRequest $tmpReq
     * @param ListCateContentHeaders $headers
     * @param RuntimeOptions         $runtime
     *
     * @return ListCateContentResponse
     */
    public function listCateContentWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListCateContentShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->deviceInfo)) {
            $request->deviceInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->deviceInfo), 'DeviceInfo', 'json');
        }
        if (!Utils::isUnset($tmpReq->request)) {
            $request->requestShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->request), 'Request', 'json');
        }
        if (!Utils::isUnset($tmpReq->userInfo)) {
            $request->userInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->userInfo), 'UserInfo', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->deviceInfoShrink)) {
            $query['DeviceInfo'] = $request->deviceInfoShrink;
        }
        if (!Utils::isUnset($request->userInfoShrink)) {
            $query['UserInfo'] = $request->userInfoShrink;
        }
        $body = [];
        if (!Utils::isUnset($request->requestShrink)) {
            $body['Request'] = $request->requestShrink;
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
            'action'      => 'ListCateContent',
            'version'     => 'ssp_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ssp/ListCateContent',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListCateContentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListCateInfoRequest $request
     *
     * @return ListCateInfoResponse
     */
    public function listCateInfo($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ListCateInfoHeaders([]);

        return $this->listCateInfoWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListCateInfoRequest $request
     * @param ListCateInfoHeaders $headers
     * @param RuntimeOptions      $runtime
     *
     * @return ListCateInfoResponse
     */
    public function listCateInfoWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
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
            'action'      => 'ListCateInfo',
            'version'     => 'ssp_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ssp/ListCateInfo',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListCateInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListCommonCateFirstFloorRequest $request
     *
     * @return ListCommonCateFirstFloorResponse
     */
    public function listCommonCateFirstFloor($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ListCommonCateFirstFloorHeaders([]);

        return $this->listCommonCateFirstFloorWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListCommonCateFirstFloorRequest $request
     * @param ListCommonCateFirstFloorHeaders $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return ListCommonCateFirstFloorResponse
     */
    public function listCommonCateFirstFloorWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
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
            'action'      => 'ListCommonCateFirstFloor',
            'version'     => 'ssp_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ssp/ListCommonCateFirstFloor',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListCommonCateFirstFloorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListCommonCateSecondFloorRequest $request
     *
     * @return ListCommonCateSecondFloorResponse
     */
    public function listCommonCateSecondFloor($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ListCommonCateSecondFloorHeaders([]);

        return $this->listCommonCateSecondFloorWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListCommonCateSecondFloorRequest $request
     * @param ListCommonCateSecondFloorHeaders $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return ListCommonCateSecondFloorResponse
     */
    public function listCommonCateSecondFloorWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->parentCateId)) {
            $query['ParentCateId'] = $request->parentCateId;
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
            'action'      => 'ListCommonCateSecondFloor',
            'version'     => 'ssp_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ssp/ListCommonCateSecondFloor',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListCommonCateSecondFloorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListDeviceBasicInfoRequest $request
     *
     * @return ListDeviceBasicInfoResponse
     */
    public function listDeviceBasicInfo($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ListDeviceBasicInfoHeaders([]);

        return $this->listDeviceBasicInfoWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListDeviceBasicInfoRequest $tmpReq
     * @param ListDeviceBasicInfoHeaders $headers
     * @param RuntimeOptions             $runtime
     *
     * @return ListDeviceBasicInfoResponse
     */
    public function listDeviceBasicInfoWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListDeviceBasicInfoShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->deviceInfos)) {
            $request->deviceInfosShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->deviceInfos), 'DeviceInfos', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->deviceInfosShrink)) {
            $query['DeviceInfos'] = $request->deviceInfosShrink;
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
            'action'      => 'ListDeviceBasicInfo',
            'version'     => 'ssp_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ssp/listDeviceBasicInfo',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListDeviceBasicInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListDeviceByUserIdRequest $request
     *
     * @return ListDeviceByUserIdResponse
     */
    public function listDeviceByUserId($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ListDeviceByUserIdHeaders([]);

        return $this->listDeviceByUserIdWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListDeviceByUserIdRequest $tmpReq
     * @param ListDeviceByUserIdHeaders $headers
     * @param RuntimeOptions            $runtime
     *
     * @return ListDeviceByUserIdResponse
     */
    public function listDeviceByUserIdWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListDeviceByUserIdShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->userInfo)) {
            $request->userInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->userInfo), 'UserInfo', 'json');
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
            'action'      => 'ListDeviceByUserId',
            'version'     => 'ssp_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ssp/listDeviceByUserId',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListDeviceByUserIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListDeviceByUserIdAndChanelRequest $request
     *
     * @return ListDeviceByUserIdAndChanelResponse
     */
    public function listDeviceByUserIdAndChanel($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ListDeviceByUserIdAndChanelHeaders([]);

        return $this->listDeviceByUserIdAndChanelWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListDeviceByUserIdAndChanelRequest $tmpReq
     * @param ListDeviceByUserIdAndChanelHeaders $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return ListDeviceByUserIdAndChanelResponse
     */
    public function listDeviceByUserIdAndChanelWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListDeviceByUserIdAndChanelShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->channelInfo)) {
            $request->channelInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->channelInfo), 'ChannelInfo', 'json');
        }
        if (!Utils::isUnset($tmpReq->userInfo)) {
            $request->userInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->userInfo), 'UserInfo', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->channelInfoShrink)) {
            $query['ChannelInfo'] = $request->channelInfoShrink;
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
            'action'      => 'ListDeviceByUserIdAndChanel',
            'version'     => 'ssp_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ssp/listDeviceByUserIdAndChanel',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListDeviceByUserIdAndChanelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListDeviceIdByIdentitiesRequest $request
     *
     * @return ListDeviceIdByIdentitiesResponse
     */
    public function listDeviceIdByIdentities($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ListDeviceIdByIdentitiesHeaders([]);

        return $this->listDeviceIdByIdentitiesWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListDeviceIdByIdentitiesRequest $tmpReq
     * @param ListDeviceIdByIdentitiesHeaders $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return ListDeviceIdByIdentitiesResponse
     */
    public function listDeviceIdByIdentitiesWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListDeviceIdByIdentitiesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->identityIds)) {
            $request->identityIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->identityIds, 'IdentityIds', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->encodeKey)) {
            $query['EncodeKey'] = $request->encodeKey;
        }
        if (!Utils::isUnset($request->encodeType)) {
            $query['EncodeType'] = $request->encodeType;
        }
        if (!Utils::isUnset($request->identityIdsShrink)) {
            $query['IdentityIds'] = $request->identityIdsShrink;
        }
        if (!Utils::isUnset($request->identityType)) {
            $query['IdentityType'] = $request->identityType;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
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
            'action'      => 'ListDeviceIdByIdentities',
            'version'     => 'ssp_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ssp/listDeviceIdByIdentities',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListDeviceIdByIdentitiesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListMusicRequest $request
     *
     * @return ListMusicResponse
     */
    public function listMusic($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ListMusicHeaders([]);

        return $this->listMusicWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListMusicRequest $tmpReq
     * @param ListMusicHeaders $headers
     * @param RuntimeOptions   $runtime
     *
     * @return ListMusicResponse
     */
    public function listMusicWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListMusicShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->deviceInfo)) {
            $request->deviceInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->deviceInfo), 'DeviceInfo', 'json');
        }
        if (!Utils::isUnset($tmpReq->payload)) {
            $request->payloadShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->payload), 'Payload', 'json');
        }
        if (!Utils::isUnset($tmpReq->userInfo)) {
            $request->userInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->userInfo), 'UserInfo', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->deviceInfoShrink)) {
            $body['DeviceInfo'] = $request->deviceInfoShrink;
        }
        if (!Utils::isUnset($request->payloadShrink)) {
            $body['Payload'] = $request->payloadShrink;
        }
        if (!Utils::isUnset($request->userInfoShrink)) {
            $body['UserInfo'] = $request->userInfoShrink;
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
            'action'      => 'ListMusic',
            'version'     => 'ssp_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ssp/listMusic',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListMusicResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListPlayHistoryRequest $request
     *
     * @return ListPlayHistoryResponse
     */
    public function listPlayHistory($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ListPlayHistoryHeaders([]);

        return $this->listPlayHistoryWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListPlayHistoryRequest $tmpReq
     * @param ListPlayHistoryHeaders $headers
     * @param RuntimeOptions         $runtime
     *
     * @return ListPlayHistoryResponse
     */
    public function listPlayHistoryWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListPlayHistoryShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->deviceInfo)) {
            $request->deviceInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->deviceInfo), 'DeviceInfo', 'json');
        }
        if (!Utils::isUnset($tmpReq->request)) {
            $request->requestShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->request), 'Request', 'json');
        }
        if (!Utils::isUnset($tmpReq->userInfo)) {
            $request->userInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->userInfo), 'UserInfo', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->deviceInfoShrink)) {
            $query['DeviceInfo'] = $request->deviceInfoShrink;
        }
        if (!Utils::isUnset($request->userInfoShrink)) {
            $query['UserInfo'] = $request->userInfoShrink;
        }
        $body = [];
        if (!Utils::isUnset($request->requestShrink)) {
            $body['Request'] = $request->requestShrink;
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
            'action'      => 'ListPlayHistory',
            'version'     => 'ssp_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ssp/ListPlayHistory',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListPlayHistoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListRecommendContentRequest $request
     *
     * @return ListRecommendContentResponse
     */
    public function listRecommendContent($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ListRecommendContentHeaders([]);

        return $this->listRecommendContentWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListRecommendContentRequest $tmpReq
     * @param ListRecommendContentHeaders $headers
     * @param RuntimeOptions              $runtime
     *
     * @return ListRecommendContentResponse
     */
    public function listRecommendContentWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListRecommendContentShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->deviceInfo)) {
            $request->deviceInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->deviceInfo), 'DeviceInfo', 'json');
        }
        if (!Utils::isUnset($tmpReq->request)) {
            $request->requestShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->request), 'Request', 'json');
        }
        if (!Utils::isUnset($tmpReq->userInfo)) {
            $request->userInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->userInfo), 'UserInfo', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->deviceInfoShrink)) {
            $query['DeviceInfo'] = $request->deviceInfoShrink;
        }
        if (!Utils::isUnset($request->userInfoShrink)) {
            $query['UserInfo'] = $request->userInfoShrink;
        }
        $body = [];
        if (!Utils::isUnset($request->requestShrink)) {
            $body['Request'] = $request->requestShrink;
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
            'action'      => 'ListRecommendContent',
            'version'     => 'ssp_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ssp/ListRecommendContent',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListRecommendContentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListSubRequest $request
     *
     * @return ListSubResponse
     */
    public function listSub($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ListSubHeaders([]);

        return $this->listSubWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListSubRequest $tmpReq
     * @param ListSubHeaders $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListSubResponse
     */
    public function listSubWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListSubShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->deviceInfo)) {
            $request->deviceInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->deviceInfo), 'DeviceInfo', 'json');
        }
        if (!Utils::isUnset($tmpReq->page)) {
            $request->pageShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->page), 'Page', 'json');
        }
        if (!Utils::isUnset($tmpReq->userInfo)) {
            $request->userInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->userInfo), 'UserInfo', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->deviceInfoShrink)) {
            $query['DeviceInfo'] = $request->deviceInfoShrink;
        }
        if (!Utils::isUnset($request->pageShrink)) {
            $query['Page'] = $request->pageShrink;
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
            'action'      => 'ListSub',
            'version'     => 'ssp_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ssp/listSub',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListSubResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListSubAlbumRequest $request
     *
     * @return ListSubAlbumResponse
     */
    public function listSubAlbum($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ListSubAlbumHeaders([]);

        return $this->listSubAlbumWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListSubAlbumRequest $tmpReq
     * @param ListSubAlbumHeaders $headers
     * @param RuntimeOptions      $runtime
     *
     * @return ListSubAlbumResponse
     */
    public function listSubAlbumWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListSubAlbumShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->deviceInfo)) {
            $request->deviceInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->deviceInfo), 'DeviceInfo', 'json');
        }
        if (!Utils::isUnset($tmpReq->querySubscriptionAlbumRequest)) {
            $request->querySubscriptionAlbumRequestShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->querySubscriptionAlbumRequest), 'QuerySubscriptionAlbumRequest', 'json');
        }
        if (!Utils::isUnset($tmpReq->userInfo)) {
            $request->userInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->userInfo), 'UserInfo', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->deviceInfoShrink)) {
            $query['DeviceInfo'] = $request->deviceInfoShrink;
        }
        if (!Utils::isUnset($request->querySubscriptionAlbumRequestShrink)) {
            $query['QuerySubscriptionAlbumRequest'] = $request->querySubscriptionAlbumRequestShrink;
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
            'action'      => 'ListSubAlbum',
            'version'     => 'ssp_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ssp/listSubAlbum',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListSubAlbumResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListSubscriptionAlbumCategoryRequest $request
     *
     * @return ListSubscriptionAlbumCategoryResponse
     */
    public function listSubscriptionAlbumCategory($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ListSubscriptionAlbumCategoryHeaders([]);

        return $this->listSubscriptionAlbumCategoryWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListSubscriptionAlbumCategoryRequest $request
     * @param ListSubscriptionAlbumCategoryHeaders $headers
     * @param RuntimeOptions                       $runtime
     *
     * @return ListSubscriptionAlbumCategoryResponse
     */
    public function listSubscriptionAlbumCategoryWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->categoryName)) {
            $query['CategoryName'] = $request->categoryName;
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
            'action'      => 'ListSubscriptionAlbumCategory',
            'version'     => 'ssp_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ssp/listSubscriptionAlbumCategory',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListSubscriptionAlbumCategoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListUserMessageRequest $request
     *
     * @return ListUserMessageResponse
     */
    public function listUserMessage($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ListUserMessageHeaders([]);

        return $this->listUserMessageWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListUserMessageRequest $tmpReq
     * @param ListUserMessageHeaders $headers
     * @param RuntimeOptions         $runtime
     *
     * @return ListUserMessageResponse
     */
    public function listUserMessageWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListUserMessageShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->userInfo)) {
            $request->userInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->userInfo), 'UserInfo', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->beforeTime)) {
            $query['BeforeTime'] = $request->beforeTime;
        }
        if (!Utils::isUnset($request->userInfoShrink)) {
            $query['UserInfo'] = $request->userInfoShrink;
        }
        if (!Utils::isUnset($request->limit)) {
            $query['limit'] = $request->limit;
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
            'action'      => 'ListUserMessage',
            'version'     => 'ssp_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ssp/listUserMessage',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListUserMessageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PlayAndPauseControlRequest $request
     *
     * @return PlayAndPauseControlResponse
     */
    public function playAndPauseControl($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new PlayAndPauseControlHeaders([]);

        return $this->playAndPauseControlWithOptions($request, $headers, $runtime);
    }

    /**
     * @param PlayAndPauseControlRequest $tmpReq
     * @param PlayAndPauseControlHeaders $headers
     * @param RuntimeOptions             $runtime
     *
     * @return PlayAndPauseControlResponse
     */
    public function playAndPauseControlWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new PlayAndPauseControlShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->deviceInfo)) {
            $request->deviceInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->deviceInfo), 'DeviceInfo', 'json');
        }
        if (!Utils::isUnset($tmpReq->openPlayAndPauseControlParam)) {
            $request->openPlayAndPauseControlParamShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->openPlayAndPauseControlParam), 'OpenPlayAndPauseControlParam', 'json');
        }
        if (!Utils::isUnset($tmpReq->userInfo)) {
            $request->userInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->userInfo), 'UserInfo', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->deviceInfoShrink)) {
            $query['DeviceInfo'] = $request->deviceInfoShrink;
        }
        if (!Utils::isUnset($request->userInfoShrink)) {
            $query['UserInfo'] = $request->userInfoShrink;
        }
        $body = [];
        if (!Utils::isUnset($request->openPlayAndPauseControlParamShrink)) {
            $body['OpenPlayAndPauseControlParam'] = $request->openPlayAndPauseControlParamShrink;
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
            'action'      => 'PlayAndPauseControl',
            'version'     => 'ssp_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ssp/PlayAndPauseControl',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PlayAndPauseControlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PlayModeControlRequest $request
     *
     * @return PlayModeControlResponse
     */
    public function playModeControl($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new PlayModeControlHeaders([]);

        return $this->playModeControlWithOptions($request, $headers, $runtime);
    }

    /**
     * @param PlayModeControlRequest $tmpReq
     * @param PlayModeControlHeaders $headers
     * @param RuntimeOptions         $runtime
     *
     * @return PlayModeControlResponse
     */
    public function playModeControlWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new PlayModeControlShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->deviceInfo)) {
            $request->deviceInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->deviceInfo), 'DeviceInfo', 'json');
        }
        if (!Utils::isUnset($tmpReq->openPlayModeControlRequest)) {
            $request->openPlayModeControlRequestShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->openPlayModeControlRequest), 'OpenPlayModeControlRequest', 'json');
        }
        if (!Utils::isUnset($tmpReq->userInfo)) {
            $request->userInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->userInfo), 'UserInfo', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->deviceInfoShrink)) {
            $query['DeviceInfo'] = $request->deviceInfoShrink;
        }
        if (!Utils::isUnset($request->userInfoShrink)) {
            $query['UserInfo'] = $request->userInfoShrink;
        }
        $body = [];
        if (!Utils::isUnset($request->openPlayModeControlRequestShrink)) {
            $body['OpenPlayModeControlRequest'] = $request->openPlayModeControlRequestShrink;
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
            'action'      => 'PlayModeControl',
            'version'     => 'ssp_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ssp/PlayModeControl',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PlayModeControlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PreviousAndNextControlRequest $request
     *
     * @return PreviousAndNextControlResponse
     */
    public function previousAndNextControl($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new PreviousAndNextControlHeaders([]);

        return $this->previousAndNextControlWithOptions($request, $headers, $runtime);
    }

    /**
     * @param PreviousAndNextControlRequest $tmpReq
     * @param PreviousAndNextControlHeaders $headers
     * @param RuntimeOptions                $runtime
     *
     * @return PreviousAndNextControlResponse
     */
    public function previousAndNextControlWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new PreviousAndNextControlShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->deviceInfo)) {
            $request->deviceInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->deviceInfo), 'DeviceInfo', 'json');
        }
        if (!Utils::isUnset($tmpReq->openControlPlayingListRequest)) {
            $request->openControlPlayingListRequestShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->openControlPlayingListRequest), 'OpenControlPlayingListRequest', 'json');
        }
        if (!Utils::isUnset($tmpReq->userInfo)) {
            $request->userInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->userInfo), 'UserInfo', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->deviceInfoShrink)) {
            $query['DeviceInfo'] = $request->deviceInfoShrink;
        }
        if (!Utils::isUnset($request->userInfoShrink)) {
            $query['UserInfo'] = $request->userInfoShrink;
        }
        $body = [];
        if (!Utils::isUnset($request->openControlPlayingListRequestShrink)) {
            $body['OpenControlPlayingListRequest'] = $request->openControlPlayingListRequestShrink;
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
            'action'      => 'PreviousAndNextControl',
            'version'     => 'ssp_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ssp/PreviousAndNextControl',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PreviousAndNextControlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ProgressControlRequest $request
     *
     * @return ProgressControlResponse
     */
    public function progressControl($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ProgressControlHeaders([]);

        return $this->progressControlWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ProgressControlRequest $tmpReq
     * @param ProgressControlHeaders $headers
     * @param RuntimeOptions         $runtime
     *
     * @return ProgressControlResponse
     */
    public function progressControlWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ProgressControlShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->deviceInfo)) {
            $request->deviceInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->deviceInfo), 'DeviceInfo', 'json');
        }
        if (!Utils::isUnset($tmpReq->openProgressControlRequest)) {
            $request->openProgressControlRequestShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->openProgressControlRequest), 'OpenProgressControlRequest', 'json');
        }
        if (!Utils::isUnset($tmpReq->userInfo)) {
            $request->userInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->userInfo), 'UserInfo', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->deviceInfoShrink)) {
            $query['DeviceInfo'] = $request->deviceInfoShrink;
        }
        if (!Utils::isUnset($request->userInfoShrink)) {
            $query['UserInfo'] = $request->userInfoShrink;
        }
        $body = [];
        if (!Utils::isUnset($request->openProgressControlRequestShrink)) {
            $body['OpenProgressControlRequest'] = $request->openProgressControlRequestShrink;
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
            'action'      => 'ProgressControl',
            'version'     => 'ssp_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ssp/ProgressControl',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ProgressControlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryMusicTypeRequest $request
     *
     * @return QueryMusicTypeResponse
     */
    public function queryMusicType($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryMusicTypeHeaders([]);

        return $this->queryMusicTypeWithOptions($request, $headers, $runtime);
    }

    /**
     * @param QueryMusicTypeRequest $tmpReq
     * @param QueryMusicTypeHeaders $headers
     * @param RuntimeOptions        $runtime
     *
     * @return QueryMusicTypeResponse
     */
    public function queryMusicTypeWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new QueryMusicTypeShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->deviceInfo)) {
            $request->deviceInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->deviceInfo), 'DeviceInfo', 'json');
        }
        if (!Utils::isUnset($tmpReq->payload)) {
            $request->payloadShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->payload), 'Payload', 'json');
        }
        if (!Utils::isUnset($tmpReq->userInfo)) {
            $request->userInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->userInfo), 'UserInfo', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->deviceInfoShrink)) {
            $body['DeviceInfo'] = $request->deviceInfoShrink;
        }
        if (!Utils::isUnset($request->payloadShrink)) {
            $body['Payload'] = $request->payloadShrink;
        }
        if (!Utils::isUnset($request->userInfoShrink)) {
            $body['UserInfo'] = $request->userInfoShrink;
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
            'action'      => 'QueryMusicType',
            'version'     => 'ssp_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ssp/queryMusicType',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryMusicTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ReadMessageRequest $request
     *
     * @return ReadMessageResponse
     */
    public function readMessage($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ReadMessageHeaders([]);

        return $this->readMessageWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ReadMessageRequest $tmpReq
     * @param ReadMessageHeaders $headers
     * @param RuntimeOptions     $runtime
     *
     * @return ReadMessageResponse
     */
    public function readMessageWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ReadMessageShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->userInfo)) {
            $request->userInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->userInfo), 'UserInfo', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->messageId)) {
            $query['MessageId'] = $request->messageId;
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
            'action'      => 'ReadMessage',
            'version'     => 'ssp_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ssp/readMessage',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ReadMessageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ScanCodeBindRequest $request
     *
     * @return ScanCodeBindResponse
     */
    public function scanCodeBind($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ScanCodeBindHeaders([]);

        return $this->scanCodeBindWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ScanCodeBindRequest $tmpReq
     * @param ScanCodeBindHeaders $headers
     * @param RuntimeOptions      $runtime
     *
     * @return ScanCodeBindResponse
     */
    public function scanCodeBindWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ScanCodeBindShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->bindReq)) {
            $request->bindReqShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->bindReq), 'BindReq', 'json');
        }
        if (!Utils::isUnset($tmpReq->userInfo)) {
            $request->userInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->userInfo), 'UserInfo', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->bindReqShrink)) {
            $body['BindReq'] = $request->bindReqShrink;
        }
        if (!Utils::isUnset($request->userInfoShrink)) {
            $body['UserInfo'] = $request->userInfoShrink;
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
            'action'      => 'ScanCodeBind',
            'version'     => 'ssp_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ssp/scanCode',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ScanCodeBindResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ScgSearchRequest $request
     *
     * @return ScgSearchResponse
     */
    public function scgSearch($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ScgSearchHeaders([]);

        return $this->scgSearchWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ScgSearchRequest $tmpReq
     * @param ScgSearchHeaders $headers
     * @param RuntimeOptions   $runtime
     *
     * @return ScgSearchResponse
     */
    public function scgSearchWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ScgSearchShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->scgFilter)) {
            $request->scgFilterShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->scgFilter), 'ScgFilter', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->scgFilterShrink)) {
            $query['ScgFilter'] = $request->scgFilterShrink;
        }
        if (!Utils::isUnset($request->topicId)) {
            $query['TopicId'] = $request->topicId;
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
            'action'      => 'ScgSearch',
            'version'     => 'ssp_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ssp/scgSearch',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ScgSearchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SearchContentRequest $request
     *
     * @return SearchContentResponse
     */
    public function searchContent($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new SearchContentHeaders([]);

        return $this->searchContentWithOptions($request, $headers, $runtime);
    }

    /**
     * @param SearchContentRequest $tmpReq
     * @param SearchContentHeaders $headers
     * @param RuntimeOptions       $runtime
     *
     * @return SearchContentResponse
     */
    public function searchContentWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SearchContentShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->deviceInfo)) {
            $request->deviceInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->deviceInfo), 'DeviceInfo', 'json');
        }
        if (!Utils::isUnset($tmpReq->request)) {
            $request->requestShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->request), 'Request', 'json');
        }
        if (!Utils::isUnset($tmpReq->userInfo)) {
            $request->userInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->userInfo), 'UserInfo', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->deviceInfoShrink)) {
            $query['DeviceInfo'] = $request->deviceInfoShrink;
        }
        if (!Utils::isUnset($request->userInfoShrink)) {
            $query['UserInfo'] = $request->userInfoShrink;
        }
        $body = [];
        if (!Utils::isUnset($request->requestShrink)) {
            $body['Request'] = $request->requestShrink;
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
            'action'      => 'SearchContent',
            'version'     => 'ssp_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ssp/SearchContent',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SearchContentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SendMessageRequest $request
     *
     * @return SendMessageResponse
     */
    public function sendMessage($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new SendMessageHeaders([]);

        return $this->sendMessageWithOptions($request, $headers, $runtime);
    }

    /**
     * @param SendMessageRequest $tmpReq
     * @param SendMessageHeaders $headers
     * @param RuntimeOptions     $runtime
     *
     * @return SendMessageResponse
     */
    public function sendMessageWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SendMessageShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->userInfo)) {
            $request->userInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->userInfo), 'UserInfo', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
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
            'action'      => 'SendMessage',
            'version'     => 'ssp_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ssp/sendMessage',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return SendMessageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetDeviceSettingRequest $request
     *
     * @return SetDeviceSettingResponse
     */
    public function setDeviceSetting($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new SetDeviceSettingHeaders([]);

        return $this->setDeviceSettingWithOptions($request, $headers, $runtime);
    }

    /**
     * @param SetDeviceSettingRequest $tmpReq
     * @param SetDeviceSettingHeaders $headers
     * @param RuntimeOptions          $runtime
     *
     * @return SetDeviceSettingResponse
     */
    public function setDeviceSettingWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SetDeviceSettingShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->deviceInfo)) {
            $request->deviceInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->deviceInfo), 'DeviceInfo', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->deviceInfoShrink)) {
            $query['DeviceInfo'] = $request->deviceInfoShrink;
        }
        $body = [];
        if (!Utils::isUnset($request->key)) {
            $body['Key'] = $request->key;
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
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SetDeviceSetting',
            'version'     => 'ssp_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ssp/setDeviceSetting',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetDeviceSettingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UnbindAligenieUserRequest $request
     *
     * @return UnbindAligenieUserResponse
     */
    public function unbindAligenieUser($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new UnbindAligenieUserHeaders([]);

        return $this->unbindAligenieUserWithOptions($request, $headers, $runtime);
    }

    /**
     * @param UnbindAligenieUserRequest $request
     * @param UnbindAligenieUserHeaders $headers
     * @param RuntimeOptions            $runtime
     *
     * @return UnbindAligenieUserResponse
     */
    public function unbindAligenieUserWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->loginStateAccessToken)) {
            $body['LoginStateAccessToken'] = $request->loginStateAccessToken;
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
            'action'      => 'UnbindAligenieUser',
            'version'     => 'ssp_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ssp/unbindAligenieUser',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UnbindAligenieUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UnbindDeviceRequest $request
     *
     * @return UnbindDeviceResponse
     */
    public function unbindDevice($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new UnbindDeviceHeaders([]);

        return $this->unbindDeviceWithOptions($request, $headers, $runtime);
    }

    /**
     * @param UnbindDeviceRequest $tmpReq
     * @param UnbindDeviceHeaders $headers
     * @param RuntimeOptions      $runtime
     *
     * @return UnbindDeviceResponse
     */
    public function unbindDeviceWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UnbindDeviceShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->deviceInfo)) {
            $request->deviceInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->deviceInfo), 'DeviceInfo', 'json');
        }
        if (!Utils::isUnset($tmpReq->userInfo)) {
            $request->userInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->userInfo), 'UserInfo', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->deviceInfoShrink)) {
            $body['DeviceInfo'] = $request->deviceInfoShrink;
        }
        if (!Utils::isUnset($request->userInfoShrink)) {
            $body['UserInfo'] = $request->userInfoShrink;
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
            'action'      => 'UnbindDevice',
            'version'     => 'ssp_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ssp/unbindDevice',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UnbindDeviceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateAlarmRequest $request
     *
     * @return UpdateAlarmResponse
     */
    public function updateAlarm($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new UpdateAlarmHeaders([]);

        return $this->updateAlarmWithOptions($request, $headers, $runtime);
    }

    /**
     * @param UpdateAlarmRequest $tmpReq
     * @param UpdateAlarmHeaders $headers
     * @param RuntimeOptions     $runtime
     *
     * @return UpdateAlarmResponse
     */
    public function updateAlarmWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateAlarmShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->deviceInfo)) {
            $request->deviceInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->deviceInfo), 'DeviceInfo', 'json');
        }
        if (!Utils::isUnset($tmpReq->payload)) {
            $request->payloadShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->payload), 'Payload', 'json');
        }
        if (!Utils::isUnset($tmpReq->userInfo)) {
            $request->userInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->userInfo), 'UserInfo', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->deviceInfoShrink)) {
            $body['DeviceInfo'] = $request->deviceInfoShrink;
        }
        if (!Utils::isUnset($request->payloadShrink)) {
            $body['Payload'] = $request->payloadShrink;
        }
        if (!Utils::isUnset($request->userInfoShrink)) {
            $body['UserInfo'] = $request->userInfoShrink;
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
            'action'      => 'UpdateAlarm',
            'version'     => 'ssp_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ssp/updateAlarm',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateAlarmResponse::fromMap($this->callApi($params, $req, $runtime));
    }
}
