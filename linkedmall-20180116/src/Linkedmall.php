<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\AddAddressRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\AddAddressResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\AddItemLimitRuleRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\AddItemLimitRuleResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\AddItemToSubBizsRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\AddItemToSubBizsResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\AddItemToSubBizsShrinkRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\AddSupplierNewItemsRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\AddSupplierNewItemsResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\ApplyRefundRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\ApplyRefundResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\ApplyRefundWithDesignatedTbUidRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\ApplyRefundWithDesignatedTbUidResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\ApplyRefundWithDesignatedTbUidShrinkRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\BatchRegistAnonymousTbAccountRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\BatchRegistAnonymousTbAccountResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\CancelOrderRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\CancelOrderResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\CancelOrderWithDesignatedTbUidRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\CancelOrderWithDesignatedTbUidResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\CancelRealTbAccountSupportRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\CancelRealTbAccountSupportResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\CancelRefundRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\CancelRefundResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\CancelRefundWithDesignatedTbUidRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\CancelRefundWithDesignatedTbUidResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\ConfirmDisburseRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\ConfirmDisburseResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\ConfirmDisburseWithDesignatedTbUidRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\ConfirmDisburseWithDesignatedTbUidResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\CreateMovieTicketOrderRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\CreateMovieTicketOrderResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\CreateOrderPayUrlForOutDiscountRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\CreateOrderPayUrlForOutDiscountResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\CreateOrderRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\CreateOrderResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\CreateOrderTransactionDetailFileRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\CreateOrderTransactionDetailFileResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\CreateOrderV2Request;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\CreateOrderV2Response;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\CreateOrderWithDesignatedTbUidRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\CreateOrderWithDesignatedTbUidResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\CreateOutDiscountOrderWithDesignatedTbUidRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\CreateOutDiscountOrderWithDesignatedTbUidResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\CreatePayUrlRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\CreatePayUrlResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\CreateSettleConfirmRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\CreateSettleConfirmResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\CreateVirtualProductOrderRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\CreateVirtualProductOrderResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\CreateWithholdTradeRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\CreateWithholdTradeResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\DeductUserPointRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\DeductUserPointResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\DeductUserPointShrinkRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\DeleteBizItemsRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\DeleteBizItemsResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\DeleteItemLimitRuleRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\DeleteItemLimitRuleResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\DownloadCpsBillFileRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\DownloadCpsBillFileResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\DownloadItemBillFileRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\DownloadItemBillFileResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\DownloadOrderTransactionDetailFileRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\DownloadOrderTransactionDetailFileResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\EnableOrderRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\EnableOrderResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\EnableOrderWithDesignatedTbUidRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\EnableOrderWithDesignatedTbUidResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\ExecuteNodeRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\ExecuteNodeResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\FreezeUserPointRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\FreezeUserPointResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\FreezeUserPointShrinkRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\GetActivityGameInfoRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\GetActivityGameInfoResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\GetActivityGameInfoShrinkRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\GetCategoryChainRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\GetCategoryChainResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\GetCategoryListRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\GetCategoryListResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\GetCustomServiceUrlRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\GetCustomServiceUrlResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\GetGuidePageRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\GetGuidePageResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\GetItemPromotionRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\GetItemPromotionResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\GetLoginPageRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\GetLoginPageResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\GetSwitchUrlRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\GetSwitchUrlResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\GetUserInfoRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\GetUserInfoResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\GetUserTokenPageRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\GetUserTokenPageResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\GetWithholdSignPageUrlRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\GetWithholdSignPageUrlResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\GiveUserPointRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\GiveUserPointResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\GiveUserPointShrinkRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\GrantPromotionToUserRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\GrantPromotionToUserResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\GrantPromotionToUserShrinkRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\GrantUserPointRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\GrantUserPointResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\GrantUserPointShrinkRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\InitApplyRefundRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\InitApplyRefundResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\InitApplyRefundWithDesignatedTbUidRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\InitApplyRefundWithDesignatedTbUidResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\InitModifyRefundRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\InitModifyRefundResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\InitModifyRefundWithDesignatedTbUidRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\InitModifyRefundWithDesignatedTbUidResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\ListActivityAtmosphereRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\ListActivityAtmosphereResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\ListActivityGameInfoRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\ListActivityGameInfoResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\ListItemActivitiesRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\ListItemActivitiesResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\ListItemActivitiesShrinkRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\ListUserGameProcessRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\ListUserGameProcessResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\ListUserPointRecordsRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\ListUserPointRecordsResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\ModifyBasicAndBizItemsRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\ModifyBasicAndBizItemsResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\ModifyBasicItemSupplierPriceRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\ModifyBasicItemSupplierPriceResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\ModifyBizItemsRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\ModifyBizItemsResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\ModifyItemLimitRuleRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\ModifyItemLimitRuleResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\ModifyOrderDeliveryAddressRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\ModifyOrderDeliveryAddressResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\ModifyRefundRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\ModifyRefundResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\ModifyRefundWithDesignatedTbUidRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\ModifyRefundWithDesignatedTbUidResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\ModifyRefundWithDesignatedTbUidShrinkRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\ModifySettleAccountRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\ModifySettleAccountResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\ModifySupplierPriceAndPriceCentRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\ModifySupplierPriceAndPriceCentResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\NotifyPayOrderStatusRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\NotifyPayOrderStatusResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\NotifyWithholdFundRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\NotifyWithholdFundResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\OpenRealTbAccountSupportRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\OpenRealTbAccountSupportResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\PushUserGameProcessRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\PushUserGameProcessResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\PushUserGameProcessShrinkRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryActivityItemsRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryActivityItemsResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryAddressDetailRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryAddressDetailResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryAddressListRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryAddressListResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryAddressRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryAddressResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryAdvertisementSettleInfoRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryAdvertisementSettleInfoResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryAgreementRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryAgreementResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryAllCinemasRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryAllCinemasResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryAllCitiesRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryAllCitiesResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryAllCitiesShrinkRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryBatchRegistAnonymousTbAccountResultRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryBatchRegistAnonymousTbAccountResultResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryBestSession4ItemsRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryBestSession4ItemsResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryBestSession4ItemsShrinkRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryBizItemListRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryBizItemListResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryBizItemListShrinkRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryBizItemListV2Request;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryBizItemListV2Response;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryBizItemListV2ShrinkRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryBizItemListWithCacheRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryBizItemListWithCacheResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryBizItemListWithCacheShrinkRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryBizItemsRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryBizItemsResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryBizItemsWithActivityRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryBizItemsWithActivityResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryBizItemsWithActivityShrinkRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryBudgetTicketItemListByBizIdRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryBudgetTicketItemListByBizIdResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryChannelItemBillDownloadUrlRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryChannelItemBillDownloadUrlResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryGuideItemGroupForCrowdOperationRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryGuideItemGroupForCrowdOperationResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryGuideItemGroupRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryGuideItemGroupResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryGuideItemGroupWithOutInventoryRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryGuideItemGroupWithOutInventoryResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryHotMoviesRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryHotMoviesResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryInventoryOfItemsInBizItemGroupRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryInventoryOfItemsInBizItemGroupResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryInventoryOfItemsInBizItemGroupShrinkRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryItemDetailInnerRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryItemDetailInnerResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryItemDetailRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryItemDetailResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryItemDetailTeaRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryItemDetailTeaResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryItemInSubBizsRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryItemInSubBizsResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryItemInSubBizsShrinkRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryItemInventoryRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryItemInventoryResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryItemInventoryV2Request;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryItemInventoryV2Response;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryLogisticsRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryLogisticsResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryMediaSettleInfoRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryMediaSettleInfoResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryMessagesRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryMessagesResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryMovieCommentsRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryMovieCommentsResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryMovieSchedulesRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryMovieSchedulesResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryMovieSeatsRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryMovieSeatsResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryMovieTicketsRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryMovieTicketsResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryOrderAndPaymentListRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryOrderAndPaymentListResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryOrderAndPaymentListWithDesignatedTbUidRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryOrderAndPaymentListWithDesignatedTbUidResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryOrderCommissionRateRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryOrderCommissionRateResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryOrderDetailInnerRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryOrderDetailInnerResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryOrderIdByPayIdRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryOrderIdByPayIdResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryOrderInfoAfterSaleRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryOrderInfoAfterSaleResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryOrderItemInfoByPaymentIdForAiZhanYouRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryOrderItemInfoByPaymentIdForAiZhanYouResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryOrderListRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryOrderListResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryOrderListWithDesignatedTbUidRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryOrderListWithDesignatedTbUidResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryOrderLogisticsRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryOrderLogisticsResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryOrderLogisticsWithDesignatedTbUidRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryOrderLogisticsWithDesignatedTbUidResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryRealTbAccountSupportRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryRealTbAccountSupportResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryRefundApplicationDetailRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryRefundApplicationDetailResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryRefundApplyWithDesignatedTbUidRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryRefundApplyWithDesignatedTbUidResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryStatementsRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryStatementsResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QuerySupplierItemBillDownloadUrlRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QuerySupplierItemBillDownloadUrlResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryUnfinishedActivitiesRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryUnfinishedActivitiesResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryUnfinishedSessions4ItemsRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryUnfinishedSessions4ItemsResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryUnfinishedSessions4ItemsShrinkRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryUnfinishedSessionsRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryUnfinishedSessionsResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryUpcomingMoviesRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryUpcomingMoviesResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryUpcomingMoviesShrinkRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryUserAccountRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryUserAccountResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryUserGameProcessRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryUserGameProcessResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryUserGameProcessShrinkRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryUserPointRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryUserPointResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryUserPointShrinkRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryWithholdTradeRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryWithholdTradeResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\RebindTbAccountRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\RebindTbAccountResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\RefreshSettlementOrderAccountRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\RefreshSettlementOrderAccountResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\RefundOrderRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\RefundOrderResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\RefundPointRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\RefundPointResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\RefundUserPointRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\RefundUserPointResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\RefundUserPointShrinkRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\RefuseMerchantSyncTaskRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\RefuseMerchantSyncTaskResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\RegistAnonymousTbAccountRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\RegistAnonymousTbAccountResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\RegisterSettleAccountRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\RegisterSettleAccountResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\RegisterUserAccountRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\RegisterUserAccountResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\ReleaseMovieSeatRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\ReleaseMovieSeatResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\RemoveAddressRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\RemoveAddressResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\RemoveMessagesRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\RemoveMessagesResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\RenderH5OrderRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\RenderH5OrderResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\RenderOrderRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\RenderOrderResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\RenderOrderWithDesignatedTbUidRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\RenderOrderWithDesignatedTbUidResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\RenderOrderWithDesignatedTbUidShrinkRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\RepayForPayUrlRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\RepayForPayUrlResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\RepayOrderRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\RepayOrderResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\RepayWithDesignatedTbUidRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\RepayWithDesignatedTbUidResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\ReserveMovieSeatRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\ReserveMovieSeatResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\SettleOrderRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\SettleOrderResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\StartUserGameRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\StartUserGameResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\StartUserGameShrinkRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\SubmitReturnGoodLogisticsRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\SubmitReturnGoodLogisticsResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\SubmitReturnGoodLogisticsWithDesignatedTbUidRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\SubmitReturnGoodLogisticsWithDesignatedTbUidResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\SyncMerchantInfoRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\SyncMerchantInfoResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\UnFreezeUserPointRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\UnFreezeUserPointResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\UnFreezeUserPointShrinkRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\UnsignWithholdAgreementRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\UnsignWithholdAgreementResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\UpdateAddressRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\UpdateAddressResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\ValidateTaobaoAccountRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\ValidateTaobaoAccountResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Linkedmall extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'cn-hangzhou'                 => 'linkedmall.aliyuncs.com',
            'cn-shanghai'                 => 'linkedmall.aliyuncs.com',
            'ap-northeast-1'              => 'linkedmall.aliyuncs.com',
            'ap-northeast-2-pop'          => 'linkedmall.aliyuncs.com',
            'ap-south-1'                  => 'linkedmall.aliyuncs.com',
            'ap-southeast-1'              => 'linkedmall.aliyuncs.com',
            'ap-southeast-2'              => 'linkedmall.aliyuncs.com',
            'ap-southeast-3'              => 'linkedmall.aliyuncs.com',
            'ap-southeast-5'              => 'linkedmall.aliyuncs.com',
            'cn-beijing'                  => 'linkedmall.aliyuncs.com',
            'cn-beijing-finance-1'        => 'linkedmall.aliyuncs.com',
            'cn-beijing-finance-pop'      => 'linkedmall.aliyuncs.com',
            'cn-beijing-gov-1'            => 'linkedmall.aliyuncs.com',
            'cn-beijing-nu16-b01'         => 'linkedmall.aliyuncs.com',
            'cn-chengdu'                  => 'linkedmall.aliyuncs.com',
            'cn-edge-1'                   => 'linkedmall.aliyuncs.com',
            'cn-fujian'                   => 'linkedmall.aliyuncs.com',
            'cn-haidian-cm12-c01'         => 'linkedmall.aliyuncs.com',
            'cn-hangzhou-bj-b01'          => 'linkedmall.aliyuncs.com',
            'cn-hangzhou-finance'         => 'linkedmall.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'linkedmall.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'linkedmall.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'linkedmall.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'linkedmall.aliyuncs.com',
            'cn-hangzhou-test-306'        => 'linkedmall.aliyuncs.com',
            'cn-hongkong'                 => 'linkedmall.aliyuncs.com',
            'cn-hongkong-finance-pop'     => 'linkedmall.aliyuncs.com',
            'cn-huhehaote'                => 'linkedmall.aliyuncs.com',
            'cn-north-2-gov-1'            => 'linkedmall.aliyuncs.com',
            'cn-qingdao'                  => 'linkedmall.aliyuncs.com',
            'cn-qingdao-nebula'           => 'linkedmall.aliyuncs.com',
            'cn-shanghai-et15-b01'        => 'linkedmall.aliyuncs.com',
            'cn-shanghai-et2-b01'         => 'linkedmall.aliyuncs.com',
            'cn-shanghai-finance-1'       => 'linkedmall.aliyuncs.com',
            'cn-shanghai-inner'           => 'linkedmall.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'linkedmall.aliyuncs.com',
            'cn-shenzhen'                 => 'linkedmall.aliyuncs.com',
            'cn-shenzhen-finance-1'       => 'linkedmall.aliyuncs.com',
            'cn-shenzhen-inner'           => 'linkedmall.aliyuncs.com',
            'cn-shenzhen-st4-d01'         => 'linkedmall.aliyuncs.com',
            'cn-shenzhen-su18-b01'        => 'linkedmall.aliyuncs.com',
            'cn-wuhan'                    => 'linkedmall.aliyuncs.com',
            'cn-yushanfang'               => 'linkedmall.aliyuncs.com',
            'cn-zhangbei-na61-b01'        => 'linkedmall.aliyuncs.com',
            'cn-zhangjiakou'              => 'linkedmall.aliyuncs.com',
            'cn-zhangjiakou-na62-a01'     => 'linkedmall.aliyuncs.com',
            'cn-zhengzhou-nebula-1'       => 'linkedmall.aliyuncs.com',
            'eu-central-1'                => 'linkedmall.aliyuncs.com',
            'eu-west-1'                   => 'linkedmall.aliyuncs.com',
            'eu-west-1-oxs'               => 'linkedmall.aliyuncs.com',
            'me-east-1'                   => 'linkedmall.aliyuncs.com',
            'rus-west-1-pop'              => 'linkedmall.aliyuncs.com',
            'us-east-1'                   => 'linkedmall.aliyuncs.com',
            'us-west-1'                   => 'linkedmall.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('linkedmall', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param AddAddressRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return AddAddressResponse
     */
    public function addAddressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->thirdPartyUserId)) {
            $query['ThirdPartyUserId'] = $request->thirdPartyUserId;
        }
        if (!Utils::isUnset($request->useAnonymousTbAccount)) {
            $query['UseAnonymousTbAccount'] = $request->useAnonymousTbAccount;
        }
        $body = [];
        if (!Utils::isUnset($request->addressInfo)) {
            $body['AddressInfo'] = $request->addressInfo;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AddAddress',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddAddressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddAddressRequest $request
     *
     * @return AddAddressResponse
     */
    public function addAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addAddressWithOptions($request, $runtime);
    }

    /**
     * @param AddItemLimitRuleRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return AddItemLimitRuleResponse
     */
    public function addItemLimitRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->beginTime)) {
            $query['BeginTime'] = $request->beginTime;
        }
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->itemId)) {
            $query['ItemId'] = $request->itemId;
        }
        if (!Utils::isUnset($request->lmActivityId)) {
            $query['LmActivityId'] = $request->lmActivityId;
        }
        if (!Utils::isUnset($request->lmItemId)) {
            $query['LmItemId'] = $request->lmItemId;
        }
        if (!Utils::isUnset($request->ruleType)) {
            $query['RuleType'] = $request->ruleType;
        }
        if (!Utils::isUnset($request->subBizCode)) {
            $query['SubBizCode'] = $request->subBizCode;
        }
        if (!Utils::isUnset($request->upperNum)) {
            $query['UpperNum'] = $request->upperNum;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddItemLimitRule',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddItemLimitRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddItemLimitRuleRequest $request
     *
     * @return AddItemLimitRuleResponse
     */
    public function addItemLimitRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addItemLimitRuleWithOptions($request, $runtime);
    }

    /**
     * @param AddItemToSubBizsRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return AddItemToSubBizsResponse
     */
    public function addItemToSubBizsWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new AddItemToSubBizsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->subBizIds)) {
            $request->subBizIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->subBizIds, 'SubBizIds', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->bizId)) {
            $body['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->itemId)) {
            $body['ItemId'] = $request->itemId;
        }
        if (!Utils::isUnset($request->lmItemId)) {
            $body['LmItemId'] = $request->lmItemId;
        }
        if (!Utils::isUnset($request->subBizIdsShrink)) {
            $body['SubBizIds'] = $request->subBizIdsShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AddItemToSubBizs',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddItemToSubBizsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddItemToSubBizsRequest $request
     *
     * @return AddItemToSubBizsResponse
     */
    public function addItemToSubBizs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addItemToSubBizsWithOptions($request, $runtime);
    }

    /**
     * @param AddSupplierNewItemsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return AddSupplierNewItemsResponse
     */
    public function addSupplierNewItemsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->itemList)) {
            $query['ItemList'] = $request->itemList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddSupplierNewItems',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddSupplierNewItemsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddSupplierNewItemsRequest $request
     *
     * @return AddSupplierNewItemsResponse
     */
    public function addSupplierNewItems($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addSupplierNewItemsWithOptions($request, $runtime);
    }

    /**
     * @param ApplyRefundRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ApplyRefundResponse
     */
    public function applyRefundWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountType)) {
            $query['AccountType'] = $request->accountType;
        }
        if (!Utils::isUnset($request->applyReasonTextId)) {
            $query['ApplyReasonTextId'] = $request->applyReasonTextId;
        }
        if (!Utils::isUnset($request->applyRefundCount)) {
            $query['ApplyRefundCount'] = $request->applyRefundCount;
        }
        if (!Utils::isUnset($request->applyRefundFee)) {
            $query['ApplyRefundFee'] = $request->applyRefundFee;
        }
        if (!Utils::isUnset($request->bizClaimType)) {
            $query['BizClaimType'] = $request->bizClaimType;
        }
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->bizUid)) {
            $query['BizUid'] = $request->bizUid;
        }
        if (!Utils::isUnset($request->goodsStatus)) {
            $query['GoodsStatus'] = $request->goodsStatus;
        }
        if (!Utils::isUnset($request->subLmOrderId)) {
            $query['SubLmOrderId'] = $request->subLmOrderId;
        }
        if (!Utils::isUnset($request->thirdPartyUserId)) {
            $query['ThirdPartyUserId'] = $request->thirdPartyUserId;
        }
        if (!Utils::isUnset($request->useAnonymousTbAccount)) {
            $query['UseAnonymousTbAccount'] = $request->useAnonymousTbAccount;
        }
        $body = [];
        if (!Utils::isUnset($request->leaveMessage)) {
            $body['LeaveMessage'] = $request->leaveMessage;
        }
        if (!Utils::isUnset($request->leavePictureList)) {
            $body['LeavePictureList'] = $request->leavePictureList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ApplyRefund',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ApplyRefundResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ApplyRefundRequest $request
     *
     * @return ApplyRefundResponse
     */
    public function applyRefund($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->applyRefundWithOptions($request, $runtime);
    }

    /**
     * @param ApplyRefundWithDesignatedTbUidRequest $tmpReq
     * @param RuntimeOptions                        $runtime
     *
     * @return ApplyRefundWithDesignatedTbUidResponse
     */
    public function applyRefundWithDesignatedTbUidWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ApplyRefundWithDesignatedTbUidShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->proofs)) {
            $request->proofsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->proofs, 'Proofs', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->bizId)) {
            $body['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->disputeId)) {
            $body['DisputeId'] = $request->disputeId;
        }
        if (!Utils::isUnset($request->goodsStatus)) {
            $body['GoodsStatus'] = $request->goodsStatus;
        }
        if (!Utils::isUnset($request->message)) {
            $body['Message'] = $request->message;
        }
        if (!Utils::isUnset($request->proofsShrink)) {
            $body['Proofs'] = $request->proofsShrink;
        }
        if (!Utils::isUnset($request->reasonId)) {
            $body['ReasonId'] = $request->reasonId;
        }
        if (!Utils::isUnset($request->refundCode)) {
            $body['RefundCode'] = $request->refundCode;
        }
        if (!Utils::isUnset($request->refundCount)) {
            $body['RefundCount'] = $request->refundCount;
        }
        if (!Utils::isUnset($request->refundFee)) {
            $body['RefundFee'] = $request->refundFee;
        }
        if (!Utils::isUnset($request->subLmOrderId)) {
            $body['SubLmOrderId'] = $request->subLmOrderId;
        }
        if (!Utils::isUnset($request->tbAccountType)) {
            $body['TbAccountType'] = $request->tbAccountType;
        }
        if (!Utils::isUnset($request->tbUserId)) {
            $body['TbUserId'] = $request->tbUserId;
        }
        if (!Utils::isUnset($request->thirdPartyUserId)) {
            $body['ThirdPartyUserId'] = $request->thirdPartyUserId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ApplyRefundWithDesignatedTbUid',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ApplyRefundWithDesignatedTbUidResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ApplyRefundWithDesignatedTbUidRequest $request
     *
     * @return ApplyRefundWithDesignatedTbUidResponse
     */
    public function applyRefundWithDesignatedTbUid($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->applyRefundWithDesignatedTbUidWithOptions($request, $runtime);
    }

    /**
     * @param BatchRegistAnonymousTbAccountRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return BatchRegistAnonymousTbAccountResponse
     */
    public function batchRegistAnonymousTbAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->idJsonList)) {
            $query['IdJsonList'] = $request->idJsonList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BatchRegistAnonymousTbAccount',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchRegistAnonymousTbAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param BatchRegistAnonymousTbAccountRequest $request
     *
     * @return BatchRegistAnonymousTbAccountResponse
     */
    public function batchRegistAnonymousTbAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchRegistAnonymousTbAccountWithOptions($request, $runtime);
    }

    /**
     * @param CancelOrderRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CancelOrderResponse
     */
    public function cancelOrderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountType)) {
            $query['AccountType'] = $request->accountType;
        }
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->bizUid)) {
            $query['BizUid'] = $request->bizUid;
        }
        if (!Utils::isUnset($request->lmOrderId)) {
            $query['LmOrderId'] = $request->lmOrderId;
        }
        if (!Utils::isUnset($request->thirdPartyUserId)) {
            $query['ThirdPartyUserId'] = $request->thirdPartyUserId;
        }
        if (!Utils::isUnset($request->useAnonymousTbAccount)) {
            $query['UseAnonymousTbAccount'] = $request->useAnonymousTbAccount;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CancelOrder',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CancelOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CancelOrderRequest $request
     *
     * @return CancelOrderResponse
     */
    public function cancelOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelOrderWithOptions($request, $runtime);
    }

    /**
     * @param CancelOrderWithDesignatedTbUidRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return CancelOrderWithDesignatedTbUidResponse
     */
    public function cancelOrderWithDesignatedTbUidWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bizId)) {
            $body['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->lmOrderId)) {
            $body['LmOrderId'] = $request->lmOrderId;
        }
        if (!Utils::isUnset($request->tbAccountType)) {
            $body['TbAccountType'] = $request->tbAccountType;
        }
        if (!Utils::isUnset($request->tbUserId)) {
            $body['TbUserId'] = $request->tbUserId;
        }
        if (!Utils::isUnset($request->thirdPartyUserId)) {
            $body['ThirdPartyUserId'] = $request->thirdPartyUserId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CancelOrderWithDesignatedTbUid',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CancelOrderWithDesignatedTbUidResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CancelOrderWithDesignatedTbUidRequest $request
     *
     * @return CancelOrderWithDesignatedTbUidResponse
     */
    public function cancelOrderWithDesignatedTbUid($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelOrderWithDesignatedTbUidWithOptions($request, $runtime);
    }

    /**
     * @param CancelRealTbAccountSupportRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return CancelRealTbAccountSupportResponse
     */
    public function cancelRealTbAccountSupportWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bizId)) {
            $body['BizId'] = $request->bizId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CancelRealTbAccountSupport',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CancelRealTbAccountSupportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CancelRealTbAccountSupportRequest $request
     *
     * @return CancelRealTbAccountSupportResponse
     */
    public function cancelRealTbAccountSupport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelRealTbAccountSupportWithOptions($request, $runtime);
    }

    /**
     * @param CancelRefundRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CancelRefundResponse
     */
    public function cancelRefundWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountType)) {
            $query['AccountType'] = $request->accountType;
        }
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->bizUid)) {
            $query['BizUid'] = $request->bizUid;
        }
        if (!Utils::isUnset($request->disputeId)) {
            $query['DisputeId'] = $request->disputeId;
        }
        if (!Utils::isUnset($request->subLmOrderId)) {
            $query['SubLmOrderId'] = $request->subLmOrderId;
        }
        if (!Utils::isUnset($request->thirdPartyUserId)) {
            $query['ThirdPartyUserId'] = $request->thirdPartyUserId;
        }
        if (!Utils::isUnset($request->useAnonymousTbAccount)) {
            $query['UseAnonymousTbAccount'] = $request->useAnonymousTbAccount;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CancelRefund',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CancelRefundResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CancelRefundRequest $request
     *
     * @return CancelRefundResponse
     */
    public function cancelRefund($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelRefundWithOptions($request, $runtime);
    }

    /**
     * @param CancelRefundWithDesignatedTbUidRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return CancelRefundWithDesignatedTbUidResponse
     */
    public function cancelRefundWithDesignatedTbUidWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bizId)) {
            $body['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->disputeId)) {
            $body['DisputeId'] = $request->disputeId;
        }
        if (!Utils::isUnset($request->subLmOrderId)) {
            $body['SubLmOrderId'] = $request->subLmOrderId;
        }
        if (!Utils::isUnset($request->tbAccountType)) {
            $body['TbAccountType'] = $request->tbAccountType;
        }
        if (!Utils::isUnset($request->tbUserId)) {
            $body['TbUserId'] = $request->tbUserId;
        }
        if (!Utils::isUnset($request->thirdPartyUserId)) {
            $body['ThirdPartyUserId'] = $request->thirdPartyUserId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CancelRefundWithDesignatedTbUid',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CancelRefundWithDesignatedTbUidResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CancelRefundWithDesignatedTbUidRequest $request
     *
     * @return CancelRefundWithDesignatedTbUidResponse
     */
    public function cancelRefundWithDesignatedTbUid($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelRefundWithDesignatedTbUidWithOptions($request, $runtime);
    }

    /**
     * @param ConfirmDisburseRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ConfirmDisburseResponse
     */
    public function confirmDisburseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountType)) {
            $query['AccountType'] = $request->accountType;
        }
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->bizUid)) {
            $query['BizUid'] = $request->bizUid;
        }
        if (!Utils::isUnset($request->lmOrderId)) {
            $query['LmOrderId'] = $request->lmOrderId;
        }
        if (!Utils::isUnset($request->thirdPartyUserId)) {
            $query['ThirdPartyUserId'] = $request->thirdPartyUserId;
        }
        if (!Utils::isUnset($request->useAnonymousTbAccount)) {
            $query['UseAnonymousTbAccount'] = $request->useAnonymousTbAccount;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ConfirmDisburse',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ConfirmDisburseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ConfirmDisburseRequest $request
     *
     * @return ConfirmDisburseResponse
     */
    public function confirmDisburse($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->confirmDisburseWithOptions($request, $runtime);
    }

    /**
     * @param ConfirmDisburseWithDesignatedTbUidRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return ConfirmDisburseWithDesignatedTbUidResponse
     */
    public function confirmDisburseWithDesignatedTbUidWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bizId)) {
            $body['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->lmOrderId)) {
            $body['LmOrderId'] = $request->lmOrderId;
        }
        if (!Utils::isUnset($request->tbAccountType)) {
            $body['TbAccountType'] = $request->tbAccountType;
        }
        if (!Utils::isUnset($request->tbUserId)) {
            $body['TbUserId'] = $request->tbUserId;
        }
        if (!Utils::isUnset($request->thirdPartyUserId)) {
            $body['ThirdPartyUserId'] = $request->thirdPartyUserId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ConfirmDisburseWithDesignatedTbUid',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ConfirmDisburseWithDesignatedTbUidResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ConfirmDisburseWithDesignatedTbUidRequest $request
     *
     * @return ConfirmDisburseWithDesignatedTbUidResponse
     */
    public function confirmDisburseWithDesignatedTbUid($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->confirmDisburseWithDesignatedTbUidWithOptions($request, $runtime);
    }

    /**
     * @param CreateMovieTicketOrderRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CreateMovieTicketOrderResponse
     */
    public function createMovieTicketOrderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateMovieTicketOrder',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateMovieTicketOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateMovieTicketOrderRequest $request
     *
     * @return CreateMovieTicketOrderResponse
     */
    public function createMovieTicketOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMovieTicketOrderWithOptions($request, $runtime);
    }

    /**
     * @param CreateOrderRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CreateOrderResponse
     */
    public function createOrderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountType)) {
            $query['AccountType'] = $request->accountType;
        }
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->bizUid)) {
            $query['BizUid'] = $request->bizUid;
        }
        if (!Utils::isUnset($request->buyerMessageMap)) {
            $query['BuyerMessageMap'] = $request->buyerMessageMap;
        }
        if (!Utils::isUnset($request->deliveryAddress)) {
            $query['DeliveryAddress'] = $request->deliveryAddress;
        }
        if (!Utils::isUnset($request->extJson)) {
            $query['ExtJson'] = $request->extJson;
        }
        if (!Utils::isUnset($request->itemId)) {
            $query['ItemId'] = $request->itemId;
        }
        if (!Utils::isUnset($request->itemList)) {
            $query['ItemList'] = $request->itemList;
        }
        if (!Utils::isUnset($request->lmItemId)) {
            $query['LmItemId'] = $request->lmItemId;
        }
        if (!Utils::isUnset($request->orderExpireTime)) {
            $query['OrderExpireTime'] = $request->orderExpireTime;
        }
        if (!Utils::isUnset($request->outTradeId)) {
            $query['OutTradeId'] = $request->outTradeId;
        }
        if (!Utils::isUnset($request->quantity)) {
            $query['Quantity'] = $request->quantity;
        }
        if (!Utils::isUnset($request->thirdPartyUserId)) {
            $query['ThirdPartyUserId'] = $request->thirdPartyUserId;
        }
        if (!Utils::isUnset($request->totalAmount)) {
            $query['TotalAmount'] = $request->totalAmount;
        }
        if (!Utils::isUnset($request->useAnonymousTbAccount)) {
            $query['UseAnonymousTbAccount'] = $request->useAnonymousTbAccount;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateOrder',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateOrderRequest $request
     *
     * @return CreateOrderResponse
     */
    public function createOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createOrderWithOptions($request, $runtime);
    }

    /**
     * @param CreateOrderPayUrlForOutDiscountRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return CreateOrderPayUrlForOutDiscountResponse
     */
    public function createOrderPayUrlForOutDiscountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->bizUid)) {
            $query['BizUid'] = $request->bizUid;
        }
        if (!Utils::isUnset($request->thirdPartyUserId)) {
            $query['ThirdPartyUserId'] = $request->thirdPartyUserId;
        }
        if (!Utils::isUnset($request->useAnonymousTbAccount)) {
            $query['UseAnonymousTbAccount'] = $request->useAnonymousTbAccount;
        }
        $body = [];
        if (!Utils::isUnset($request->buyInfo)) {
            $body['BuyInfo'] = $request->buyInfo;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateOrderPayUrlForOutDiscount',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateOrderPayUrlForOutDiscountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateOrderPayUrlForOutDiscountRequest $request
     *
     * @return CreateOrderPayUrlForOutDiscountResponse
     */
    public function createOrderPayUrlForOutDiscount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createOrderPayUrlForOutDiscountWithOptions($request, $runtime);
    }

    /**
     * @param CreateOrderTransactionDetailFileRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return CreateOrderTransactionDetailFileResponse
     */
    public function createOrderTransactionDetailFileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bizId)) {
            $body['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->bizName)) {
            $body['BizName'] = $request->bizName;
        }
        if (!Utils::isUnset($request->channelName)) {
            $body['ChannelName'] = $request->channelName;
        }
        if (!Utils::isUnset($request->createEndTime)) {
            $body['CreateEndTime'] = $request->createEndTime;
        }
        if (!Utils::isUnset($request->createStartTime)) {
            $body['CreateStartTime'] = $request->createStartTime;
        }
        if (!Utils::isUnset($request->itemId)) {
            $body['ItemId'] = $request->itemId;
        }
        if (!Utils::isUnset($request->lmShopId)) {
            $body['LmShopId'] = $request->lmShopId;
        }
        if (!Utils::isUnset($request->orderStatus)) {
            $body['OrderStatus'] = $request->orderStatus;
        }
        if (!Utils::isUnset($request->payStatus)) {
            $body['PayStatus'] = $request->payStatus;
        }
        if (!Utils::isUnset($request->paymentEndTime)) {
            $body['PaymentEndTime'] = $request->paymentEndTime;
        }
        if (!Utils::isUnset($request->paymentStartTime)) {
            $body['PaymentStartTime'] = $request->paymentStartTime;
        }
        if (!Utils::isUnset($request->poCode)) {
            $body['PoCode'] = $request->poCode;
        }
        if (!Utils::isUnset($request->refundEndTime)) {
            $body['RefundEndTime'] = $request->refundEndTime;
        }
        if (!Utils::isUnset($request->refundStartTime)) {
            $body['RefundStartTime'] = $request->refundStartTime;
        }
        if (!Utils::isUnset($request->sellerId)) {
            $body['SellerId'] = $request->sellerId;
        }
        if (!Utils::isUnset($request->sellerName)) {
            $body['SellerName'] = $request->sellerName;
        }
        if (!Utils::isUnset($request->settlementNode)) {
            $body['SettlementNode'] = $request->settlementNode;
        }
        if (!Utils::isUnset($request->shopName)) {
            $body['ShopName'] = $request->shopName;
        }
        if (!Utils::isUnset($request->tbMainOrderId)) {
            $body['TbMainOrderId'] = $request->tbMainOrderId;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->tenantName)) {
            $body['TenantName'] = $request->tenantName;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateOrderTransactionDetailFile',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateOrderTransactionDetailFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateOrderTransactionDetailFileRequest $request
     *
     * @return CreateOrderTransactionDetailFileResponse
     */
    public function createOrderTransactionDetailFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createOrderTransactionDetailFileWithOptions($request, $runtime);
    }

    /**
     * @param CreateOrderV2Request $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateOrderV2Response
     */
    public function createOrderV2WithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountType)) {
            $query['AccountType'] = $request->accountType;
        }
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->bizUid)) {
            $query['BizUid'] = $request->bizUid;
        }
        if (!Utils::isUnset($request->buyerMessageMap)) {
            $query['BuyerMessageMap'] = $request->buyerMessageMap;
        }
        if (!Utils::isUnset($request->deliveryAddress)) {
            $query['DeliveryAddress'] = $request->deliveryAddress;
        }
        if (!Utils::isUnset($request->extJson)) {
            $query['ExtJson'] = $request->extJson;
        }
        if (!Utils::isUnset($request->itemId)) {
            $query['ItemId'] = $request->itemId;
        }
        if (!Utils::isUnset($request->itemList)) {
            $query['ItemList'] = $request->itemList;
        }
        if (!Utils::isUnset($request->lmItemId)) {
            $query['LmItemId'] = $request->lmItemId;
        }
        if (!Utils::isUnset($request->orderExpireTime)) {
            $query['OrderExpireTime'] = $request->orderExpireTime;
        }
        if (!Utils::isUnset($request->outTradeId)) {
            $query['OutTradeId'] = $request->outTradeId;
        }
        if (!Utils::isUnset($request->quantity)) {
            $query['Quantity'] = $request->quantity;
        }
        if (!Utils::isUnset($request->thirdPartyUserId)) {
            $query['ThirdPartyUserId'] = $request->thirdPartyUserId;
        }
        if (!Utils::isUnset($request->totalAmount)) {
            $query['TotalAmount'] = $request->totalAmount;
        }
        if (!Utils::isUnset($request->useAnonymousTbAccount)) {
            $query['UseAnonymousTbAccount'] = $request->useAnonymousTbAccount;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateOrderV2',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateOrderV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateOrderV2Request $request
     *
     * @return CreateOrderV2Response
     */
    public function createOrderV2($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createOrderV2WithOptions($request, $runtime);
    }

    /**
     * @param CreateOrderWithDesignatedTbUidRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return CreateOrderWithDesignatedTbUidResponse
     */
    public function createOrderWithDesignatedTbUidWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bizId)) {
            $body['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->buyerMessages)) {
            $body['BuyerMessages'] = $request->buyerMessages;
        }
        if (!Utils::isUnset($request->deliveryAddress)) {
            $body['DeliveryAddress'] = $request->deliveryAddress;
        }
        if (!Utils::isUnset($request->deliveryInfo)) {
            $body['DeliveryInfo'] = $request->deliveryInfo;
        }
        if (!Utils::isUnset($request->extInfo)) {
            $body['ExtInfo'] = $request->extInfo;
        }
        if (!Utils::isUnset($request->orderExpireTime)) {
            $body['OrderExpireTime'] = $request->orderExpireTime;
        }
        if (!Utils::isUnset($request->orderItems)) {
            $body['OrderItems'] = $request->orderItems;
        }
        if (!Utils::isUnset($request->outTradeId)) {
            $body['OutTradeId'] = $request->outTradeId;
        }
        if (!Utils::isUnset($request->tbAccountType)) {
            $body['TbAccountType'] = $request->tbAccountType;
        }
        if (!Utils::isUnset($request->tbUserId)) {
            $body['TbUserId'] = $request->tbUserId;
        }
        if (!Utils::isUnset($request->thirdPartyUserId)) {
            $body['ThirdPartyUserId'] = $request->thirdPartyUserId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateOrderWithDesignatedTbUid',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateOrderWithDesignatedTbUidResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateOrderWithDesignatedTbUidRequest $request
     *
     * @return CreateOrderWithDesignatedTbUidResponse
     */
    public function createOrderWithDesignatedTbUid($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createOrderWithDesignatedTbUidWithOptions($request, $runtime);
    }

    /**
     * @param CreateOutDiscountOrderWithDesignatedTbUidRequest $request
     * @param RuntimeOptions                                   $runtime
     *
     * @return CreateOutDiscountOrderWithDesignatedTbUidResponse
     */
    public function createOutDiscountOrderWithDesignatedTbUidWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bizId)) {
            $body['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->buyerMessages)) {
            $body['BuyerMessages'] = $request->buyerMessages;
        }
        if (!Utils::isUnset($request->deliveryAddress)) {
            $body['DeliveryAddress'] = $request->deliveryAddress;
        }
        if (!Utils::isUnset($request->deliveryInfo)) {
            $body['DeliveryInfo'] = $request->deliveryInfo;
        }
        if (!Utils::isUnset($request->extInfo)) {
            $body['ExtInfo'] = $request->extInfo;
        }
        if (!Utils::isUnset($request->orderExpireTime)) {
            $body['OrderExpireTime'] = $request->orderExpireTime;
        }
        if (!Utils::isUnset($request->orderItems)) {
            $body['OrderItems'] = $request->orderItems;
        }
        if (!Utils::isUnset($request->outDiscountInfos)) {
            $body['OutDiscountInfos'] = $request->outDiscountInfos;
        }
        if (!Utils::isUnset($request->outTradeId)) {
            $body['OutTradeId'] = $request->outTradeId;
        }
        if (!Utils::isUnset($request->tbAccountType)) {
            $body['TbAccountType'] = $request->tbAccountType;
        }
        if (!Utils::isUnset($request->tbUserId)) {
            $body['TbUserId'] = $request->tbUserId;
        }
        if (!Utils::isUnset($request->thirdPartyUserId)) {
            $body['ThirdPartyUserId'] = $request->thirdPartyUserId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateOutDiscountOrderWithDesignatedTbUid',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateOutDiscountOrderWithDesignatedTbUidResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateOutDiscountOrderWithDesignatedTbUidRequest $request
     *
     * @return CreateOutDiscountOrderWithDesignatedTbUidResponse
     */
    public function createOutDiscountOrderWithDesignatedTbUid($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createOutDiscountOrderWithDesignatedTbUidWithOptions($request, $runtime);
    }

    /**
     * @param CreatePayUrlRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CreatePayUrlResponse
     */
    public function createPayUrlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->bizUid)) {
            $query['BizUid'] = $request->bizUid;
        }
        if (!Utils::isUnset($request->thirdPartyUserId)) {
            $query['ThirdPartyUserId'] = $request->thirdPartyUserId;
        }
        if (!Utils::isUnset($request->useAnonymousTbAccount)) {
            $query['UseAnonymousTbAccount'] = $request->useAnonymousTbAccount;
        }
        $body = [];
        if (!Utils::isUnset($request->buyInfo)) {
            $body['BuyInfo'] = $request->buyInfo;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreatePayUrl',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreatePayUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreatePayUrlRequest $request
     *
     * @return CreatePayUrlResponse
     */
    public function createPayUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPayUrlWithOptions($request, $runtime);
    }

    /**
     * @param CreateSettleConfirmRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateSettleConfirmResponse
     */
    public function createSettleConfirmWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bizId)) {
            $body['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->extInfo)) {
            $body['ExtInfo'] = $request->extInfo;
        }
        if (!Utils::isUnset($request->merchantId)) {
            $body['MerchantId'] = $request->merchantId;
        }
        if (!Utils::isUnset($request->outRequestNo)) {
            $body['OutRequestNo'] = $request->outRequestNo;
        }
        if (!Utils::isUnset($request->outTradeNo)) {
            $body['OutTradeNo'] = $request->outTradeNo;
        }
        if (!Utils::isUnset($request->settleInfo)) {
            $body['SettleInfo'] = $request->settleInfo;
        }
        if (!Utils::isUnset($request->tradeNo)) {
            $body['TradeNo'] = $request->tradeNo;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateSettleConfirm',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateSettleConfirmResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateSettleConfirmRequest $request
     *
     * @return CreateSettleConfirmResponse
     */
    public function createSettleConfirm($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSettleConfirmWithOptions($request, $runtime);
    }

    /**
     * @param CreateVirtualProductOrderRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CreateVirtualProductOrderResponse
     */
    public function createVirtualProductOrderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountType)) {
            $query['AccountType'] = $request->accountType;
        }
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->bizUid)) {
            $query['BizUid'] = $request->bizUid;
        }
        if (!Utils::isUnset($request->deliveryAddress)) {
            $query['DeliveryAddress'] = $request->deliveryAddress;
        }
        if (!Utils::isUnset($request->extJson)) {
            $query['ExtJson'] = $request->extJson;
        }
        if (!Utils::isUnset($request->itemId)) {
            $query['ItemId'] = $request->itemId;
        }
        if (!Utils::isUnset($request->itemList)) {
            $query['ItemList'] = $request->itemList;
        }
        if (!Utils::isUnset($request->lmItemId)) {
            $query['LmItemId'] = $request->lmItemId;
        }
        if (!Utils::isUnset($request->orderExpireTime)) {
            $query['OrderExpireTime'] = $request->orderExpireTime;
        }
        if (!Utils::isUnset($request->outTradeId)) {
            $query['OutTradeId'] = $request->outTradeId;
        }
        if (!Utils::isUnset($request->quantity)) {
            $query['Quantity'] = $request->quantity;
        }
        if (!Utils::isUnset($request->thirdPartyUserId)) {
            $query['ThirdPartyUserId'] = $request->thirdPartyUserId;
        }
        if (!Utils::isUnset($request->totalAmount)) {
            $query['TotalAmount'] = $request->totalAmount;
        }
        if (!Utils::isUnset($request->useAnonymousTbAccount)) {
            $query['UseAnonymousTbAccount'] = $request->useAnonymousTbAccount;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateVirtualProductOrder',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateVirtualProductOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateVirtualProductOrderRequest $request
     *
     * @return CreateVirtualProductOrderResponse
     */
    public function createVirtualProductOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createVirtualProductOrderWithOptions($request, $runtime);
    }

    /**
     * @param CreateWithholdTradeRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateWithholdTradeResponse
     */
    public function createWithholdTradeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->agreementNo)) {
            $body['AgreementNo'] = $request->agreementNo;
        }
        if (!Utils::isUnset($request->body)) {
            $body['Body'] = $request->body;
        }
        if (!Utils::isUnset($request->buyerId)) {
            $body['BuyerId'] = $request->buyerId;
        }
        if (!Utils::isUnset($request->extInfo)) {
            $body['ExtInfo'] = $request->extInfo;
        }
        if (!Utils::isUnset($request->goodsDetail)) {
            $body['GoodsDetail'] = $request->goodsDetail;
        }
        if (!Utils::isUnset($request->merchantId)) {
            $body['MerchantId'] = $request->merchantId;
        }
        if (!Utils::isUnset($request->outRequestNo)) {
            $body['OutRequestNo'] = $request->outRequestNo;
        }
        if (!Utils::isUnset($request->outTradeNo)) {
            $body['OutTradeNo'] = $request->outTradeNo;
        }
        if (!Utils::isUnset($request->settleMode)) {
            $body['SettleMode'] = $request->settleMode;
        }
        if (!Utils::isUnset($request->subject)) {
            $body['Subject'] = $request->subject;
        }
        if (!Utils::isUnset($request->totalAmount)) {
            $body['TotalAmount'] = $request->totalAmount;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateWithholdTrade',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateWithholdTradeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateWithholdTradeRequest $request
     *
     * @return CreateWithholdTradeResponse
     */
    public function createWithholdTrade($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createWithholdTradeWithOptions($request, $runtime);
    }

    /**
     * @param DeductUserPointRequest $tmpReq
     * @param RuntimeOptions         $runtime
     *
     * @return DeductUserPointResponse
     */
    public function deductUserPointWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DeductUserPointShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->extInfo)) {
            $request->extInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->extInfo, 'ExtInfo', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->accountType)) {
            $query['AccountType'] = $request->accountType;
        }
        if (!Utils::isUnset($request->amount)) {
            $query['Amount'] = $request->amount;
        }
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->idempotentId)) {
            $query['IdempotentId'] = $request->idempotentId;
        }
        if (!Utils::isUnset($request->message)) {
            $query['Message'] = $request->message;
        }
        if (!Utils::isUnset($request->ruleId)) {
            $query['RuleId'] = $request->ruleId;
        }
        if (!Utils::isUnset($request->thirdPartyUserId)) {
            $query['ThirdPartyUserId'] = $request->thirdPartyUserId;
        }
        if (!Utils::isUnset($request->title)) {
            $query['Title'] = $request->title;
        }
        $body = [];
        if (!Utils::isUnset($request->extInfoShrink)) {
            $body['ExtInfo'] = $request->extInfoShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeductUserPoint',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeductUserPointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeductUserPointRequest $request
     *
     * @return DeductUserPointResponse
     */
    public function deductUserPoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deductUserPointWithOptions($request, $runtime);
    }

    /**
     * @param DeleteBizItemsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteBizItemsResponse
     */
    public function deleteBizItemsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->itemIdList)) {
            $query['ItemIdList'] = $request->itemIdList;
        }
        if (!Utils::isUnset($request->subBizId)) {
            $query['SubBizId'] = $request->subBizId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteBizItems',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteBizItemsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteBizItemsRequest $request
     *
     * @return DeleteBizItemsResponse
     */
    public function deleteBizItems($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteBizItemsWithOptions($request, $runtime);
    }

    /**
     * @param DeleteItemLimitRuleRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteItemLimitRuleResponse
     */
    public function deleteItemLimitRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->itemId)) {
            $query['ItemId'] = $request->itemId;
        }
        if (!Utils::isUnset($request->lmActivityId)) {
            $query['LmActivityId'] = $request->lmActivityId;
        }
        if (!Utils::isUnset($request->lmItemId)) {
            $query['LmItemId'] = $request->lmItemId;
        }
        if (!Utils::isUnset($request->ruleId)) {
            $query['RuleId'] = $request->ruleId;
        }
        if (!Utils::isUnset($request->subBizCode)) {
            $query['SubBizCode'] = $request->subBizCode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteItemLimitRule',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteItemLimitRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteItemLimitRuleRequest $request
     *
     * @return DeleteItemLimitRuleResponse
     */
    public function deleteItemLimitRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteItemLimitRuleWithOptions($request, $runtime);
    }

    /**
     * @param DownloadCpsBillFileRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DownloadCpsBillFileResponse
     */
    public function downloadCpsBillFileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->billId)) {
            $body['BillId'] = $request->billId;
        }
        if (!Utils::isUnset($request->bizId)) {
            $body['BizId'] = $request->bizId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DownloadCpsBillFile',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DownloadCpsBillFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DownloadCpsBillFileRequest $request
     *
     * @return DownloadCpsBillFileResponse
     */
    public function downloadCpsBillFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->downloadCpsBillFileWithOptions($request, $runtime);
    }

    /**
     * @param DownloadItemBillFileRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DownloadItemBillFileResponse
     */
    public function downloadItemBillFileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->billId)) {
            $body['BillId'] = $request->billId;
        }
        if (!Utils::isUnset($request->bizId)) {
            $body['BizId'] = $request->bizId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DownloadItemBillFile',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DownloadItemBillFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DownloadItemBillFileRequest $request
     *
     * @return DownloadItemBillFileResponse
     */
    public function downloadItemBillFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->downloadItemBillFileWithOptions($request, $runtime);
    }

    /**
     * @param DownloadOrderTransactionDetailFileRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DownloadOrderTransactionDetailFileResponse
     */
    public function downloadOrderTransactionDetailFileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bizId)) {
            $body['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->recordId)) {
            $body['RecordId'] = $request->recordId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DownloadOrderTransactionDetailFile',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DownloadOrderTransactionDetailFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DownloadOrderTransactionDetailFileRequest $request
     *
     * @return DownloadOrderTransactionDetailFileResponse
     */
    public function downloadOrderTransactionDetailFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->downloadOrderTransactionDetailFileWithOptions($request, $runtime);
    }

    /**
     * @param EnableOrderRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return EnableOrderResponse
     */
    public function enableOrderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountType)) {
            $query['AccountType'] = $request->accountType;
        }
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->bizUid)) {
            $query['BizUid'] = $request->bizUid;
        }
        if (!Utils::isUnset($request->extJson)) {
            $query['ExtJson'] = $request->extJson;
        }
        if (!Utils::isUnset($request->lmOrderId)) {
            $query['LmOrderId'] = $request->lmOrderId;
        }
        if (!Utils::isUnset($request->outTradeId)) {
            $query['OutTradeId'] = $request->outTradeId;
        }
        if (!Utils::isUnset($request->thirdPartyUserId)) {
            $query['ThirdPartyUserId'] = $request->thirdPartyUserId;
        }
        if (!Utils::isUnset($request->useAnonymousTbAccount)) {
            $query['UseAnonymousTbAccount'] = $request->useAnonymousTbAccount;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'EnableOrder',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EnableOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param EnableOrderRequest $request
     *
     * @return EnableOrderResponse
     */
    public function enableOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableOrderWithOptions($request, $runtime);
    }

    /**
     * @param EnableOrderWithDesignatedTbUidRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return EnableOrderWithDesignatedTbUidResponse
     */
    public function enableOrderWithDesignatedTbUidWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bizId)) {
            $body['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->lmOrderId)) {
            $body['LmOrderId'] = $request->lmOrderId;
        }
        if (!Utils::isUnset($request->tbAccountType)) {
            $body['TbAccountType'] = $request->tbAccountType;
        }
        if (!Utils::isUnset($request->tbUserId)) {
            $body['TbUserId'] = $request->tbUserId;
        }
        if (!Utils::isUnset($request->thirdPartyUserId)) {
            $body['ThirdPartyUserId'] = $request->thirdPartyUserId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'EnableOrderWithDesignatedTbUid',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EnableOrderWithDesignatedTbUidResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param EnableOrderWithDesignatedTbUidRequest $request
     *
     * @return EnableOrderWithDesignatedTbUidResponse
     */
    public function enableOrderWithDesignatedTbUid($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableOrderWithDesignatedTbUidWithOptions($request, $runtime);
    }

    /**
     * @param ExecuteNodeRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ExecuteNodeResponse
     */
    public function executeNodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->nodeId)) {
            $query['NodeId'] = $request->nodeId;
        }
        if (!Utils::isUnset($request->nodeInstanceId)) {
            $query['NodeInstanceId'] = $request->nodeInstanceId;
        }
        if (!Utils::isUnset($request->processId)) {
            $query['ProcessId'] = $request->processId;
        }
        if (!Utils::isUnset($request->processInstanceId)) {
            $query['ProcessInstanceId'] = $request->processInstanceId;
        }
        if (!Utils::isUnset($request->requestData)) {
            $query['RequestData'] = $request->requestData;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ExecuteNode',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ExecuteNodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ExecuteNodeRequest $request
     *
     * @return ExecuteNodeResponse
     */
    public function executeNode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->executeNodeWithOptions($request, $runtime);
    }

    /**
     * @param FreezeUserPointRequest $tmpReq
     * @param RuntimeOptions         $runtime
     *
     * @return FreezeUserPointResponse
     */
    public function freezeUserPointWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new FreezeUserPointShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->extInfo)) {
            $request->extInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->extInfo, 'ExtInfo', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->accountType)) {
            $query['AccountType'] = $request->accountType;
        }
        if (!Utils::isUnset($request->amount)) {
            $query['Amount'] = $request->amount;
        }
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->idempotentId)) {
            $query['IdempotentId'] = $request->idempotentId;
        }
        if (!Utils::isUnset($request->message)) {
            $query['Message'] = $request->message;
        }
        if (!Utils::isUnset($request->ruleId)) {
            $query['RuleId'] = $request->ruleId;
        }
        if (!Utils::isUnset($request->thirdPartyUserId)) {
            $query['ThirdPartyUserId'] = $request->thirdPartyUserId;
        }
        if (!Utils::isUnset($request->title)) {
            $query['Title'] = $request->title;
        }
        $body = [];
        if (!Utils::isUnset($request->extInfoShrink)) {
            $body['ExtInfo'] = $request->extInfoShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'FreezeUserPoint',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return FreezeUserPointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param FreezeUserPointRequest $request
     *
     * @return FreezeUserPointResponse
     */
    public function freezeUserPoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->freezeUserPointWithOptions($request, $runtime);
    }

    /**
     * @param GetActivityGameInfoRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return GetActivityGameInfoResponse
     */
    public function getActivityGameInfoWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetActivityGameInfoShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->extInfo)) {
            $request->extInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->extInfo, 'ExtInfo', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->accountType)) {
            $query['AccountType'] = $request->accountType;
        }
        if (!Utils::isUnset($request->activityId)) {
            $query['ActivityId'] = $request->activityId;
        }
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->gameId)) {
            $query['GameId'] = $request->gameId;
        }
        if (!Utils::isUnset($request->thirdPartyUserId)) {
            $query['ThirdPartyUserId'] = $request->thirdPartyUserId;
        }
        $body = [];
        if (!Utils::isUnset($request->extInfoShrink)) {
            $body['ExtInfo'] = $request->extInfoShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetActivityGameInfo',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetActivityGameInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetActivityGameInfoRequest $request
     *
     * @return GetActivityGameInfoResponse
     */
    public function getActivityGameInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getActivityGameInfoWithOptions($request, $runtime);
    }

    /**
     * @param GetCategoryChainRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetCategoryChainResponse
     */
    public function getCategoryChainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->categoryId)) {
            $query['CategoryId'] = $request->categoryId;
        }
        if (!Utils::isUnset($request->itemId)) {
            $query['ItemId'] = $request->itemId;
        }
        if (!Utils::isUnset($request->lmItemId)) {
            $query['LmItemId'] = $request->lmItemId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetCategoryChain',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetCategoryChainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetCategoryChainRequest $request
     *
     * @return GetCategoryChainResponse
     */
    public function getCategoryChain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCategoryChainWithOptions($request, $runtime);
    }

    /**
     * @param GetCategoryListRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetCategoryListResponse
     */
    public function getCategoryListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->categoryId)) {
            $query['CategoryId'] = $request->categoryId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetCategoryList',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetCategoryListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetCategoryListRequest $request
     *
     * @return GetCategoryListResponse
     */
    public function getCategoryList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCategoryListWithOptions($request, $runtime);
    }

    /**
     * @param GetCustomServiceUrlRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetCustomServiceUrlResponse
     */
    public function getCustomServiceUrlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountType)) {
            $query['AccountType'] = $request->accountType;
        }
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->bizUid)) {
            $query['BizUid'] = $request->bizUid;
        }
        if (!Utils::isUnset($request->cuid)) {
            $query['Cuid'] = $request->cuid;
        }
        if (!Utils::isUnset($request->nick)) {
            $query['Nick'] = $request->nick;
        }
        if (!Utils::isUnset($request->sellerId)) {
            $query['SellerId'] = $request->sellerId;
        }
        if (!Utils::isUnset($request->thirdPartyUserId)) {
            $query['ThirdPartyUserId'] = $request->thirdPartyUserId;
        }
        if (!Utils::isUnset($request->useAnonymousTbAccount)) {
            $query['UseAnonymousTbAccount'] = $request->useAnonymousTbAccount;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetCustomServiceUrl',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetCustomServiceUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetCustomServiceUrlRequest $request
     *
     * @return GetCustomServiceUrlResponse
     */
    public function getCustomServiceUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCustomServiceUrlWithOptions($request, $runtime);
    }

    /**
     * @param GetGuidePageRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetGuidePageResponse
     */
    public function getGuidePageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetGuidePage',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetGuidePageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetGuidePageRequest $request
     *
     * @return GetGuidePageResponse
     */
    public function getGuidePage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getGuidePageWithOptions($request, $runtime);
    }

    /**
     * @param GetItemPromotionRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetItemPromotionResponse
     */
    public function getItemPromotionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->itemId)) {
            $query['ItemId'] = $request->itemId;
        }
        if (!Utils::isUnset($request->lmItemId)) {
            $query['LmItemId'] = $request->lmItemId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetItemPromotion',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetItemPromotionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetItemPromotionRequest $request
     *
     * @return GetItemPromotionResponse
     */
    public function getItemPromotion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getItemPromotionWithOptions($request, $runtime);
    }

    /**
     * @param GetLoginPageRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetLoginPageResponse
     */
    public function getLoginPageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->thirdPartyUserId)) {
            $query['ThirdPartyUserId'] = $request->thirdPartyUserId;
        }
        if (!Utils::isUnset($request->useAnonymousTbAccount)) {
            $query['UseAnonymousTbAccount'] = $request->useAnonymousTbAccount;
        }
        $body = [];
        if (!Utils::isUnset($request->failUrl)) {
            $body['FailUrl'] = $request->failUrl;
        }
        if (!Utils::isUnset($request->targetUrl)) {
            $body['TargetUrl'] = $request->targetUrl;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetLoginPage',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetLoginPageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetLoginPageRequest $request
     *
     * @return GetLoginPageResponse
     */
    public function getLoginPage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLoginPageWithOptions($request, $runtime);
    }

    /**
     * @param GetSwitchUrlRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetSwitchUrlResponse
     */
    public function getSwitchUrlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->bizUid)) {
            $query['BizUid'] = $request->bizUid;
        }
        if (!Utils::isUnset($request->thirdPartyUserId)) {
            $query['ThirdPartyUserId'] = $request->thirdPartyUserId;
        }
        if (!Utils::isUnset($request->useAnonymousTbAccount)) {
            $query['UseAnonymousTbAccount'] = $request->useAnonymousTbAccount;
        }
        $body = [];
        if (!Utils::isUnset($request->url)) {
            $body['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetSwitchUrl',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetSwitchUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetSwitchUrlRequest $request
     *
     * @return GetSwitchUrlResponse
     */
    public function getSwitchUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSwitchUrlWithOptions($request, $runtime);
    }

    /**
     * @param GetUserInfoRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetUserInfoResponse
     */
    public function getUserInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->userFlag)) {
            $query['UserFlag'] = $request->userFlag;
        }
        $body = [];
        if (!Utils::isUnset($request->queryJson)) {
            $body['QueryJson'] = $request->queryJson;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetUserInfo',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetUserInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetUserInfoRequest $request
     *
     * @return GetUserInfoResponse
     */
    public function getUserInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUserInfoWithOptions($request, $runtime);
    }

    /**
     * @param GetUserTokenPageRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetUserTokenPageResponse
     */
    public function getUserTokenPageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetUserTokenPage',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetUserTokenPageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetUserTokenPageRequest $request
     *
     * @return GetUserTokenPageResponse
     */
    public function getUserTokenPage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUserTokenPageWithOptions($request, $runtime);
    }

    /**
     * @param GetWithholdSignPageUrlRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetWithholdSignPageUrlResponse
     */
    public function getWithholdSignPageUrlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->deviceType)) {
            $body['DeviceType'] = $request->deviceType;
        }
        if (!Utils::isUnset($request->extInfo)) {
            $body['ExtInfo'] = $request->extInfo;
        }
        if (!Utils::isUnset($request->externalAgreementNo)) {
            $body['ExternalAgreementNo'] = $request->externalAgreementNo;
        }
        if (!Utils::isUnset($request->identityParameters)) {
            $body['IdentityParameters'] = $request->identityParameters;
        }
        if (!Utils::isUnset($request->merchantId)) {
            $body['MerchantId'] = $request->merchantId;
        }
        if (!Utils::isUnset($request->merchantServiceDescription)) {
            $body['MerchantServiceDescription'] = $request->merchantServiceDescription;
        }
        if (!Utils::isUnset($request->merchantServiceName)) {
            $body['MerchantServiceName'] = $request->merchantServiceName;
        }
        if (!Utils::isUnset($request->notifyUrl)) {
            $body['NotifyUrl'] = $request->notifyUrl;
        }
        if (!Utils::isUnset($request->outRequestNo)) {
            $body['OutRequestNo'] = $request->outRequestNo;
        }
        if (!Utils::isUnset($request->returnUrl)) {
            $body['ReturnUrl'] = $request->returnUrl;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetWithholdSignPageUrl',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetWithholdSignPageUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetWithholdSignPageUrlRequest $request
     *
     * @return GetWithholdSignPageUrlResponse
     */
    public function getWithholdSignPageUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getWithholdSignPageUrlWithOptions($request, $runtime);
    }

    /**
     * @param GiveUserPointRequest $tmpReq
     * @param RuntimeOptions       $runtime
     *
     * @return GiveUserPointResponse
     */
    public function giveUserPointWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GiveUserPointShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->extInfo)) {
            $request->extInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->extInfo, 'ExtInfo', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->accountType)) {
            $query['AccountType'] = $request->accountType;
        }
        if (!Utils::isUnset($request->amount)) {
            $query['Amount'] = $request->amount;
        }
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->idempotentId)) {
            $query['IdempotentId'] = $request->idempotentId;
        }
        if (!Utils::isUnset($request->message)) {
            $query['Message'] = $request->message;
        }
        if (!Utils::isUnset($request->ruleId)) {
            $query['RuleId'] = $request->ruleId;
        }
        if (!Utils::isUnset($request->targetBizUid)) {
            $query['TargetBizUid'] = $request->targetBizUid;
        }
        if (!Utils::isUnset($request->thirdPartyUserId)) {
            $query['ThirdPartyUserId'] = $request->thirdPartyUserId;
        }
        if (!Utils::isUnset($request->title)) {
            $query['Title'] = $request->title;
        }
        $body = [];
        if (!Utils::isUnset($request->extInfoShrink)) {
            $body['ExtInfo'] = $request->extInfoShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GiveUserPoint',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GiveUserPointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GiveUserPointRequest $request
     *
     * @return GiveUserPointResponse
     */
    public function giveUserPoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->giveUserPointWithOptions($request, $runtime);
    }

    /**
     * @param GrantPromotionToUserRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return GrantPromotionToUserResponse
     */
    public function grantPromotionToUserWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GrantPromotionToUserShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->body)) {
            $request->bodyShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->body, 'body', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->expireSeconds)) {
            $query['ExpireSeconds'] = $request->expireSeconds;
        }
        if (!Utils::isUnset($request->grantMode)) {
            $query['GrantMode'] = $request->grantMode;
        }
        if (!Utils::isUnset($request->grantWay)) {
            $query['GrantWay'] = $request->grantWay;
        }
        if (!Utils::isUnset($request->idempotentId)) {
            $query['IdempotentId'] = $request->idempotentId;
        }
        if (!Utils::isUnset($request->promotionId)) {
            $query['PromotionId'] = $request->promotionId;
        }
        if (!Utils::isUnset($request->securityCode)) {
            $query['SecurityCode'] = $request->securityCode;
        }
        if (!Utils::isUnset($request->thirdPartyUserId)) {
            $query['ThirdPartyUserId'] = $request->thirdPartyUserId;
        }
        $body = [];
        if (!Utils::isUnset($request->bodyShrink)) {
            $body['body'] = $request->bodyShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GrantPromotionToUser',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GrantPromotionToUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GrantPromotionToUserRequest $request
     *
     * @return GrantPromotionToUserResponse
     */
    public function grantPromotionToUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->grantPromotionToUserWithOptions($request, $runtime);
    }

    /**
     * @param GrantUserPointRequest $tmpReq
     * @param RuntimeOptions        $runtime
     *
     * @return GrantUserPointResponse
     */
    public function grantUserPointWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GrantUserPointShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->extInfo)) {
            $request->extInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->extInfo, 'ExtInfo', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->accountType)) {
            $query['AccountType'] = $request->accountType;
        }
        if (!Utils::isUnset($request->amount)) {
            $query['Amount'] = $request->amount;
        }
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->idempotentId)) {
            $query['IdempotentId'] = $request->idempotentId;
        }
        if (!Utils::isUnset($request->message)) {
            $query['Message'] = $request->message;
        }
        if (!Utils::isUnset($request->ruleId)) {
            $query['RuleId'] = $request->ruleId;
        }
        if (!Utils::isUnset($request->thirdPartyUserId)) {
            $query['ThirdPartyUserId'] = $request->thirdPartyUserId;
        }
        if (!Utils::isUnset($request->title)) {
            $query['Title'] = $request->title;
        }
        $body = [];
        if (!Utils::isUnset($request->extInfoShrink)) {
            $body['ExtInfo'] = $request->extInfoShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GrantUserPoint',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GrantUserPointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GrantUserPointRequest $request
     *
     * @return GrantUserPointResponse
     */
    public function grantUserPoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->grantUserPointWithOptions($request, $runtime);
    }

    /**
     * @param InitApplyRefundRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return InitApplyRefundResponse
     */
    public function initApplyRefundWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountType)) {
            $query['AccountType'] = $request->accountType;
        }
        if (!Utils::isUnset($request->bizClaimType)) {
            $query['BizClaimType'] = $request->bizClaimType;
        }
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->bizUid)) {
            $query['BizUid'] = $request->bizUid;
        }
        if (!Utils::isUnset($request->goodsStatus)) {
            $query['GoodsStatus'] = $request->goodsStatus;
        }
        if (!Utils::isUnset($request->subLmOrderId)) {
            $query['SubLmOrderId'] = $request->subLmOrderId;
        }
        if (!Utils::isUnset($request->thirdPartyUserId)) {
            $query['ThirdPartyUserId'] = $request->thirdPartyUserId;
        }
        if (!Utils::isUnset($request->useAnonymousTbAccount)) {
            $query['UseAnonymousTbAccount'] = $request->useAnonymousTbAccount;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'InitApplyRefund',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return InitApplyRefundResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param InitApplyRefundRequest $request
     *
     * @return InitApplyRefundResponse
     */
    public function initApplyRefund($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->initApplyRefundWithOptions($request, $runtime);
    }

    /**
     * @param InitApplyRefundWithDesignatedTbUidRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return InitApplyRefundWithDesignatedTbUidResponse
     */
    public function initApplyRefundWithDesignatedTbUidWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bizId)) {
            $body['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->disputeId)) {
            $body['DisputeId'] = $request->disputeId;
        }
        if (!Utils::isUnset($request->refundCode)) {
            $body['RefundCode'] = $request->refundCode;
        }
        if (!Utils::isUnset($request->subLmOrderId)) {
            $body['SubLmOrderId'] = $request->subLmOrderId;
        }
        if (!Utils::isUnset($request->tbAccountType)) {
            $body['TbAccountType'] = $request->tbAccountType;
        }
        if (!Utils::isUnset($request->tbUserId)) {
            $body['TbUserId'] = $request->tbUserId;
        }
        if (!Utils::isUnset($request->thirdPartyUserId)) {
            $body['ThirdPartyUserId'] = $request->thirdPartyUserId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'InitApplyRefundWithDesignatedTbUid',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return InitApplyRefundWithDesignatedTbUidResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param InitApplyRefundWithDesignatedTbUidRequest $request
     *
     * @return InitApplyRefundWithDesignatedTbUidResponse
     */
    public function initApplyRefundWithDesignatedTbUid($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->initApplyRefundWithDesignatedTbUidWithOptions($request, $runtime);
    }

    /**
     * @param InitModifyRefundRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return InitModifyRefundResponse
     */
    public function initModifyRefundWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountType)) {
            $query['AccountType'] = $request->accountType;
        }
        if (!Utils::isUnset($request->bizClaimType)) {
            $query['BizClaimType'] = $request->bizClaimType;
        }
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->bizUid)) {
            $query['BizUid'] = $request->bizUid;
        }
        if (!Utils::isUnset($request->disputeId)) {
            $query['DisputeId'] = $request->disputeId;
        }
        if (!Utils::isUnset($request->goodsStatus)) {
            $query['GoodsStatus'] = $request->goodsStatus;
        }
        if (!Utils::isUnset($request->subLmOrderId)) {
            $query['SubLmOrderId'] = $request->subLmOrderId;
        }
        if (!Utils::isUnset($request->thirdPartyUserId)) {
            $query['ThirdPartyUserId'] = $request->thirdPartyUserId;
        }
        if (!Utils::isUnset($request->useAnonymousTbAccount)) {
            $query['UseAnonymousTbAccount'] = $request->useAnonymousTbAccount;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'InitModifyRefund',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return InitModifyRefundResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param InitModifyRefundRequest $request
     *
     * @return InitModifyRefundResponse
     */
    public function initModifyRefund($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->initModifyRefundWithOptions($request, $runtime);
    }

    /**
     * @param InitModifyRefundWithDesignatedTbUidRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return InitModifyRefundWithDesignatedTbUidResponse
     */
    public function initModifyRefundWithDesignatedTbUidWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bizId)) {
            $body['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->disputeId)) {
            $body['DisputeId'] = $request->disputeId;
        }
        if (!Utils::isUnset($request->refundCode)) {
            $body['RefundCode'] = $request->refundCode;
        }
        if (!Utils::isUnset($request->subLmOrderId)) {
            $body['SubLmOrderId'] = $request->subLmOrderId;
        }
        if (!Utils::isUnset($request->tbAccountType)) {
            $body['TbAccountType'] = $request->tbAccountType;
        }
        if (!Utils::isUnset($request->tbUserId)) {
            $body['TbUserId'] = $request->tbUserId;
        }
        if (!Utils::isUnset($request->thirdPartyUserId)) {
            $body['ThirdPartyUserId'] = $request->thirdPartyUserId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'InitModifyRefundWithDesignatedTbUid',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return InitModifyRefundWithDesignatedTbUidResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param InitModifyRefundWithDesignatedTbUidRequest $request
     *
     * @return InitModifyRefundWithDesignatedTbUidResponse
     */
    public function initModifyRefundWithDesignatedTbUid($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->initModifyRefundWithDesignatedTbUidWithOptions($request, $runtime);
    }

    /**
     * @param ListActivityAtmosphereRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListActivityAtmosphereResponse
     */
    public function listActivityAtmosphereWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListActivityAtmosphere',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListActivityAtmosphereResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListActivityAtmosphereRequest $request
     *
     * @return ListActivityAtmosphereResponse
     */
    public function listActivityAtmosphere($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listActivityAtmosphereWithOptions($request, $runtime);
    }

    /**
     * @param ListActivityGameInfoRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListActivityGameInfoResponse
     */
    public function listActivityGameInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListActivityGameInfo',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListActivityGameInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListActivityGameInfoRequest $request
     *
     * @return ListActivityGameInfoResponse
     */
    public function listActivityGameInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listActivityGameInfoWithOptions($request, $runtime);
    }

    /**
     * @param ListItemActivitiesRequest $tmpReq
     * @param RuntimeOptions            $runtime
     *
     * @return ListItemActivitiesResponse
     */
    public function listItemActivitiesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListItemActivitiesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->itemIds)) {
            $request->itemIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->itemIds, 'ItemIds', 'json');
        }
        if (!Utils::isUnset($tmpReq->lmItemIds)) {
            $request->lmItemIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->lmItemIds, 'LmItemIds', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->itemIdsShrink)) {
            $query['ItemIds'] = $request->itemIdsShrink;
        }
        if (!Utils::isUnset($request->lmItemIdsShrink)) {
            $query['LmItemIds'] = $request->lmItemIdsShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListItemActivities',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListItemActivitiesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListItemActivitiesRequest $request
     *
     * @return ListItemActivitiesResponse
     */
    public function listItemActivities($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listItemActivitiesWithOptions($request, $runtime);
    }

    /**
     * @param ListUserGameProcessRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListUserGameProcessResponse
     */
    public function listUserGameProcessWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListUserGameProcess',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListUserGameProcessResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListUserGameProcessRequest $request
     *
     * @return ListUserGameProcessResponse
     */
    public function listUserGameProcess($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUserGameProcessWithOptions($request, $runtime);
    }

    /**
     * @param ListUserPointRecordsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListUserPointRecordsResponse
     */
    public function listUserPointRecordsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListUserPointRecords',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListUserPointRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListUserPointRecordsRequest $request
     *
     * @return ListUserPointRecordsResponse
     */
    public function listUserPointRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUserPointRecordsWithOptions($request, $runtime);
    }

    /**
     * @param ModifyBasicAndBizItemsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ModifyBasicAndBizItemsResponse
     */
    public function modifyBasicAndBizItemsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->subBizId)) {
            $query['SubBizId'] = $request->subBizId;
        }
        $body = [];
        if (!Utils::isUnset($request->itemList)) {
            $body['ItemList'] = $request->itemList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ModifyBasicAndBizItems',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyBasicAndBizItemsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyBasicAndBizItemsRequest $request
     *
     * @return ModifyBasicAndBizItemsResponse
     */
    public function modifyBasicAndBizItems($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyBasicAndBizItemsWithOptions($request, $runtime);
    }

    /**
     * @param ModifyBasicItemSupplierPriceRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ModifyBasicItemSupplierPriceResponse
     */
    public function modifyBasicItemSupplierPriceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->lmItemId)) {
            $query['LmItemId'] = $request->lmItemId;
        }
        if (!Utils::isUnset($request->lmShopId)) {
            $query['LmShopId'] = $request->lmShopId;
        }
        if (!Utils::isUnset($request->skuId)) {
            $query['SkuId'] = $request->skuId;
        }
        if (!Utils::isUnset($request->supplierPrice)) {
            $query['SupplierPrice'] = $request->supplierPrice;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyBasicItemSupplierPrice',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyBasicItemSupplierPriceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyBasicItemSupplierPriceRequest $request
     *
     * @return ModifyBasicItemSupplierPriceResponse
     */
    public function modifyBasicItemSupplierPrice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyBasicItemSupplierPriceWithOptions($request, $runtime);
    }

    /**
     * @param ModifyBizItemsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ModifyBizItemsResponse
     */
    public function modifyBizItemsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->subBizId)) {
            $query['SubBizId'] = $request->subBizId;
        }
        $body = [];
        if (!Utils::isUnset($request->itemList)) {
            $body['ItemList'] = $request->itemList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ModifyBizItems',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyBizItemsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyBizItemsRequest $request
     *
     * @return ModifyBizItemsResponse
     */
    public function modifyBizItems($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyBizItemsWithOptions($request, $runtime);
    }

    /**
     * @param ModifyItemLimitRuleRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ModifyItemLimitRuleResponse
     */
    public function modifyItemLimitRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->beginTime)) {
            $query['BeginTime'] = $request->beginTime;
        }
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->itemId)) {
            $query['ItemId'] = $request->itemId;
        }
        if (!Utils::isUnset($request->lmActivityId)) {
            $query['LmActivityId'] = $request->lmActivityId;
        }
        if (!Utils::isUnset($request->lmItemId)) {
            $query['LmItemId'] = $request->lmItemId;
        }
        if (!Utils::isUnset($request->ruleId)) {
            $query['RuleId'] = $request->ruleId;
        }
        if (!Utils::isUnset($request->ruleType)) {
            $query['RuleType'] = $request->ruleType;
        }
        if (!Utils::isUnset($request->subBizCode)) {
            $query['SubBizCode'] = $request->subBizCode;
        }
        if (!Utils::isUnset($request->upperNum)) {
            $query['UpperNum'] = $request->upperNum;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyItemLimitRule',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyItemLimitRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyItemLimitRuleRequest $request
     *
     * @return ModifyItemLimitRuleResponse
     */
    public function modifyItemLimitRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyItemLimitRuleWithOptions($request, $runtime);
    }

    /**
     * @param ModifyOrderDeliveryAddressRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ModifyOrderDeliveryAddressResponse
     */
    public function modifyOrderDeliveryAddressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->deliveryAddress)) {
            $query['DeliveryAddress'] = $request->deliveryAddress;
        }
        if (!Utils::isUnset($request->extJson)) {
            $query['ExtJson'] = $request->extJson;
        }
        if (!Utils::isUnset($request->lmOrderId)) {
            $query['LmOrderId'] = $request->lmOrderId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyOrderDeliveryAddress',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyOrderDeliveryAddressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyOrderDeliveryAddressRequest $request
     *
     * @return ModifyOrderDeliveryAddressResponse
     */
    public function modifyOrderDeliveryAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyOrderDeliveryAddressWithOptions($request, $runtime);
    }

    /**
     * @param ModifyRefundRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ModifyRefundResponse
     */
    public function modifyRefundWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountType)) {
            $query['AccountType'] = $request->accountType;
        }
        if (!Utils::isUnset($request->applyReasonTextId)) {
            $query['ApplyReasonTextId'] = $request->applyReasonTextId;
        }
        if (!Utils::isUnset($request->applyRefundCount)) {
            $query['ApplyRefundCount'] = $request->applyRefundCount;
        }
        if (!Utils::isUnset($request->applyRefundFee)) {
            $query['ApplyRefundFee'] = $request->applyRefundFee;
        }
        if (!Utils::isUnset($request->bizClaimType)) {
            $query['BizClaimType'] = $request->bizClaimType;
        }
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->bizUid)) {
            $query['BizUid'] = $request->bizUid;
        }
        if (!Utils::isUnset($request->disputeId)) {
            $query['DisputeId'] = $request->disputeId;
        }
        if (!Utils::isUnset($request->goodsStatus)) {
            $query['GoodsStatus'] = $request->goodsStatus;
        }
        if (!Utils::isUnset($request->subLmOrderId)) {
            $query['SubLmOrderId'] = $request->subLmOrderId;
        }
        if (!Utils::isUnset($request->thirdPartyUserId)) {
            $query['ThirdPartyUserId'] = $request->thirdPartyUserId;
        }
        if (!Utils::isUnset($request->useAnonymousTbAccount)) {
            $query['UseAnonymousTbAccount'] = $request->useAnonymousTbAccount;
        }
        $body = [];
        if (!Utils::isUnset($request->leaveMessage)) {
            $body['LeaveMessage'] = $request->leaveMessage;
        }
        if (!Utils::isUnset($request->leavePictureList)) {
            $body['LeavePictureList'] = $request->leavePictureList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ModifyRefund',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyRefundResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyRefundRequest $request
     *
     * @return ModifyRefundResponse
     */
    public function modifyRefund($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyRefundWithOptions($request, $runtime);
    }

    /**
     * @param ModifyRefundWithDesignatedTbUidRequest $tmpReq
     * @param RuntimeOptions                         $runtime
     *
     * @return ModifyRefundWithDesignatedTbUidResponse
     */
    public function modifyRefundWithDesignatedTbUidWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ModifyRefundWithDesignatedTbUidShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->proofs)) {
            $request->proofsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->proofs, 'Proofs', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->bizId)) {
            $body['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->disputeId)) {
            $body['DisputeId'] = $request->disputeId;
        }
        if (!Utils::isUnset($request->goodsStatus)) {
            $body['GoodsStatus'] = $request->goodsStatus;
        }
        if (!Utils::isUnset($request->message)) {
            $body['Message'] = $request->message;
        }
        if (!Utils::isUnset($request->proofsShrink)) {
            $body['Proofs'] = $request->proofsShrink;
        }
        if (!Utils::isUnset($request->reasonId)) {
            $body['ReasonId'] = $request->reasonId;
        }
        if (!Utils::isUnset($request->refundCode)) {
            $body['RefundCode'] = $request->refundCode;
        }
        if (!Utils::isUnset($request->refundCount)) {
            $body['RefundCount'] = $request->refundCount;
        }
        if (!Utils::isUnset($request->refundFee)) {
            $body['RefundFee'] = $request->refundFee;
        }
        if (!Utils::isUnset($request->subLmOrderId)) {
            $body['SubLmOrderId'] = $request->subLmOrderId;
        }
        if (!Utils::isUnset($request->tbAccountType)) {
            $body['TbAccountType'] = $request->tbAccountType;
        }
        if (!Utils::isUnset($request->tbUserId)) {
            $body['TbUserId'] = $request->tbUserId;
        }
        if (!Utils::isUnset($request->thirdPartyUserId)) {
            $body['ThirdPartyUserId'] = $request->thirdPartyUserId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ModifyRefundWithDesignatedTbUid',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyRefundWithDesignatedTbUidResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyRefundWithDesignatedTbUidRequest $request
     *
     * @return ModifyRefundWithDesignatedTbUidResponse
     */
    public function modifyRefundWithDesignatedTbUid($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyRefundWithDesignatedTbUidWithOptions($request, $runtime);
    }

    /**
     * @param ModifySettleAccountRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ModifySettleAccountResponse
     */
    public function modifySettleAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->accountChannel)) {
            $body['AccountChannel'] = $request->accountChannel;
        }
        if (!Utils::isUnset($request->accountId)) {
            $body['AccountId'] = $request->accountId;
        }
        if (!Utils::isUnset($request->accountName)) {
            $body['AccountName'] = $request->accountName;
        }
        if (!Utils::isUnset($request->accountNo)) {
            $body['AccountNo'] = $request->accountNo;
        }
        if (!Utils::isUnset($request->accountPayType)) {
            $body['AccountPayType'] = $request->accountPayType;
        }
        if (!Utils::isUnset($request->accountType)) {
            $body['AccountType'] = $request->accountType;
        }
        if (!Utils::isUnset($request->bizId)) {
            $body['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->countryOrAreaCode)) {
            $body['CountryOrAreaCode'] = $request->countryOrAreaCode;
        }
        if (!Utils::isUnset($request->currency)) {
            $body['Currency'] = $request->currency;
        }
        if (!Utils::isUnset($request->extInfo)) {
            $body['ExtInfo'] = $request->extInfo;
        }
        if (!Utils::isUnset($request->idempotentId)) {
            $body['IdempotentId'] = $request->idempotentId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ModifySettleAccount',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifySettleAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifySettleAccountRequest $request
     *
     * @return ModifySettleAccountResponse
     */
    public function modifySettleAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySettleAccountWithOptions($request, $runtime);
    }

    /**
     * @param ModifySupplierPriceAndPriceCentRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return ModifySupplierPriceAndPriceCentResponse
     */
    public function modifySupplierPriceAndPriceCentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->lmItemId)) {
            $query['LmItemId'] = $request->lmItemId;
        }
        if (!Utils::isUnset($request->lmShopId)) {
            $query['LmShopId'] = $request->lmShopId;
        }
        if (!Utils::isUnset($request->priceCent)) {
            $query['PriceCent'] = $request->priceCent;
        }
        if (!Utils::isUnset($request->skuId)) {
            $query['SkuId'] = $request->skuId;
        }
        if (!Utils::isUnset($request->supplierPrice)) {
            $query['SupplierPrice'] = $request->supplierPrice;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifySupplierPriceAndPriceCent',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifySupplierPriceAndPriceCentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifySupplierPriceAndPriceCentRequest $request
     *
     * @return ModifySupplierPriceAndPriceCentResponse
     */
    public function modifySupplierPriceAndPriceCent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySupplierPriceAndPriceCentWithOptions($request, $runtime);
    }

    /**
     * @param NotifyPayOrderStatusRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return NotifyPayOrderStatusResponse
     */
    public function notifyPayOrderStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->amount)) {
            $query['Amount'] = $request->amount;
        }
        if (!Utils::isUnset($request->channelId)) {
            $query['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->operationDate)) {
            $query['OperationDate'] = $request->operationDate;
        }
        if (!Utils::isUnset($request->payTypes)) {
            $query['PayTypes'] = $request->payTypes;
        }
        if (!Utils::isUnset($request->requestId)) {
            $query['RequestId'] = $request->requestId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'NotifyPayOrderStatus',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return NotifyPayOrderStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param NotifyPayOrderStatusRequest $request
     *
     * @return NotifyPayOrderStatusResponse
     */
    public function notifyPayOrderStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->notifyPayOrderStatusWithOptions($request, $runtime);
    }

    /**
     * @param NotifyWithholdFundRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return NotifyWithholdFundResponse
     */
    public function notifyWithholdFundWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->amount)) {
            $query['Amount'] = $request->amount;
        }
        if (!Utils::isUnset($request->channelId)) {
            $query['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->operationDate)) {
            $query['OperationDate'] = $request->operationDate;
        }
        if (!Utils::isUnset($request->payTypes)) {
            $query['PayTypes'] = $request->payTypes;
        }
        if (!Utils::isUnset($request->requestId)) {
            $query['RequestId'] = $request->requestId;
        }
        if (!Utils::isUnset($request->tenantOrderId)) {
            $query['TenantOrderId'] = $request->tenantOrderId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'NotifyWithholdFund',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return NotifyWithholdFundResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param NotifyWithholdFundRequest $request
     *
     * @return NotifyWithholdFundResponse
     */
    public function notifyWithholdFund($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->notifyWithholdFundWithOptions($request, $runtime);
    }

    /**
     * @param OpenRealTbAccountSupportRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return OpenRealTbAccountSupportResponse
     */
    public function openRealTbAccountSupportWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bizId)) {
            $body['BizId'] = $request->bizId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'OpenRealTbAccountSupport',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OpenRealTbAccountSupportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param OpenRealTbAccountSupportRequest $request
     *
     * @return OpenRealTbAccountSupportResponse
     */
    public function openRealTbAccountSupport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->openRealTbAccountSupportWithOptions($request, $runtime);
    }

    /**
     * @param PushUserGameProcessRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return PushUserGameProcessResponse
     */
    public function pushUserGameProcessWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new PushUserGameProcessShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->extInfo)) {
            $request->extInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->extInfo, 'ExtInfo', 'json');
        }
        if (!Utils::isUnset($tmpReq->body)) {
            $request->bodyShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->body, 'body', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->accountType)) {
            $query['AccountType'] = $request->accountType;
        }
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->currentStepId)) {
            $query['CurrentStepId'] = $request->currentStepId;
        }
        if (!Utils::isUnset($request->processId)) {
            $query['ProcessId'] = $request->processId;
        }
        if (!Utils::isUnset($request->thirdPartyUserId)) {
            $query['ThirdPartyUserId'] = $request->thirdPartyUserId;
        }
        $body = [];
        if (!Utils::isUnset($request->extInfoShrink)) {
            $body['ExtInfo'] = $request->extInfoShrink;
        }
        if (!Utils::isUnset($request->bodyShrink)) {
            $body['body'] = $request->bodyShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'PushUserGameProcess',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PushUserGameProcessResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PushUserGameProcessRequest $request
     *
     * @return PushUserGameProcessResponse
     */
    public function pushUserGameProcess($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->pushUserGameProcessWithOptions($request, $runtime);
    }

    /**
     * @param QueryActivityItemsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return QueryActivityItemsResponse
     */
    public function queryActivityItemsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->lmActivityId)) {
            $query['LmActivityId'] = $request->lmActivityId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryActivityItems',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryActivityItemsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryActivityItemsRequest $request
     *
     * @return QueryActivityItemsResponse
     */
    public function queryActivityItems($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryActivityItemsWithOptions($request, $runtime);
    }

    /**
     * @param QueryAddressRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return QueryAddressResponse
     */
    public function queryAddressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->divisionCode)) {
            $query['DivisionCode'] = $request->divisionCode;
        }
        if (!Utils::isUnset($request->ip)) {
            $query['Ip'] = $request->ip;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryAddress',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryAddressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryAddressRequest $request
     *
     * @return QueryAddressResponse
     */
    public function queryAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryAddressWithOptions($request, $runtime);
    }

    /**
     * @param QueryAddressDetailRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return QueryAddressDetailResponse
     */
    public function queryAddressDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->addressInfo)) {
            $query['AddressInfo'] = $request->addressInfo;
        }
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->thirdPartyUserId)) {
            $query['ThirdPartyUserId'] = $request->thirdPartyUserId;
        }
        if (!Utils::isUnset($request->useAnonymousTbAccount)) {
            $query['UseAnonymousTbAccount'] = $request->useAnonymousTbAccount;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryAddressDetail',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryAddressDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryAddressDetailRequest $request
     *
     * @return QueryAddressDetailResponse
     */
    public function queryAddressDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryAddressDetailWithOptions($request, $runtime);
    }

    /**
     * @param QueryAddressListRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return QueryAddressListResponse
     */
    public function queryAddressListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->thirdPartyUserId)) {
            $query['ThirdPartyUserId'] = $request->thirdPartyUserId;
        }
        if (!Utils::isUnset($request->useAnonymousTbAccount)) {
            $query['UseAnonymousTbAccount'] = $request->useAnonymousTbAccount;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryAddressList',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryAddressListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryAddressListRequest $request
     *
     * @return QueryAddressListResponse
     */
    public function queryAddressList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryAddressListWithOptions($request, $runtime);
    }

    /**
     * @param QueryAdvertisementSettleInfoRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return QueryAdvertisementSettleInfoResponse
     */
    public function queryAdvertisementSettleInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->channelId)) {
            $query['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->extInfo)) {
            $query['ExtInfo'] = $request->extInfo;
        }
        if (!Utils::isUnset($request->mediaSettleDetailId)) {
            $query['MediaSettleDetailId'] = $request->mediaSettleDetailId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->settleNo)) {
            $query['SettleNo'] = $request->settleNo;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryAdvertisementSettleInfo',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryAdvertisementSettleInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryAdvertisementSettleInfoRequest $request
     *
     * @return QueryAdvertisementSettleInfoResponse
     */
    public function queryAdvertisementSettleInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryAdvertisementSettleInfoWithOptions($request, $runtime);
    }

    /**
     * @param QueryAgreementRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return QueryAgreementResponse
     */
    public function queryAgreementWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->agreementNo)) {
            $body['AgreementNo'] = $request->agreementNo;
        }
        if (!Utils::isUnset($request->externalAgreementNo)) {
            $body['ExternalAgreementNo'] = $request->externalAgreementNo;
        }
        if (!Utils::isUnset($request->merchantId)) {
            $body['MerchantId'] = $request->merchantId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryAgreement',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryAgreementResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryAgreementRequest $request
     *
     * @return QueryAgreementResponse
     */
    public function queryAgreement($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryAgreementWithOptions($request, $runtime);
    }

    /**
     * @param QueryAllCinemasRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return QueryAllCinemasResponse
     */
    public function queryAllCinemasWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->cityCode)) {
            $query['CityCode'] = $request->cityCode;
        }
        if (!Utils::isUnset($request->extJson)) {
            $query['ExtJson'] = $request->extJson;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryAllCinemas',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryAllCinemasResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryAllCinemasRequest $request
     *
     * @return QueryAllCinemasResponse
     */
    public function queryAllCinemas($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryAllCinemasWithOptions($request, $runtime);
    }

    /**
     * @param QueryAllCitiesRequest $tmpReq
     * @param RuntimeOptions        $runtime
     *
     * @return QueryAllCitiesResponse
     */
    public function queryAllCitiesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new QueryAllCitiesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->extJson)) {
            $request->extJsonShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->extJson, 'ExtJson', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->extJsonShrink)) {
            $query['ExtJson'] = $request->extJsonShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryAllCities',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryAllCitiesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryAllCitiesRequest $request
     *
     * @return QueryAllCitiesResponse
     */
    public function queryAllCities($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryAllCitiesWithOptions($request, $runtime);
    }

    /**
     * @param QueryBatchRegistAnonymousTbAccountResultRequest $request
     * @param RuntimeOptions                                  $runtime
     *
     * @return QueryBatchRegistAnonymousTbAccountResultResponse
     */
    public function queryBatchRegistAnonymousTbAccountResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->batchId)) {
            $query['BatchId'] = $request->batchId;
        }
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryBatchRegistAnonymousTbAccountResult',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryBatchRegistAnonymousTbAccountResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryBatchRegistAnonymousTbAccountResultRequest $request
     *
     * @return QueryBatchRegistAnonymousTbAccountResultResponse
     */
    public function queryBatchRegistAnonymousTbAccountResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryBatchRegistAnonymousTbAccountResultWithOptions($request, $runtime);
    }

    /**
     * @param QueryBestSession4ItemsRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return QueryBestSession4ItemsResponse
     */
    public function queryBestSession4ItemsWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new QueryBestSession4ItemsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->itemIds)) {
            $request->itemIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->itemIds, 'ItemIds', 'json');
        }
        if (!Utils::isUnset($tmpReq->lmItemIds)) {
            $request->lmItemIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->lmItemIds, 'LmItemIds', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->itemIdsShrink)) {
            $query['ItemIds'] = $request->itemIdsShrink;
        }
        if (!Utils::isUnset($request->lmItemIdsShrink)) {
            $query['LmItemIds'] = $request->lmItemIdsShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryBestSession4Items',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryBestSession4ItemsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryBestSession4ItemsRequest $request
     *
     * @return QueryBestSession4ItemsResponse
     */
    public function queryBestSession4Items($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryBestSession4ItemsWithOptions($request, $runtime);
    }

    /**
     * @param QueryBizItemListRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return QueryBizItemListResponse
     */
    public function queryBizItemListWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new QueryBizItemListShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->itemIds)) {
            $request->itemIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->itemIds, 'ItemIds', 'json');
        }
        if (!Utils::isUnset($tmpReq->lmItemIds)) {
            $request->lmItemIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->lmItemIds, 'LmItemIds', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->categoryId)) {
            $query['CategoryId'] = $request->categoryId;
        }
        if (!Utils::isUnset($request->itemIdsShrink)) {
            $query['ItemIds'] = $request->itemIdsShrink;
        }
        if (!Utils::isUnset($request->lmItemIdsShrink)) {
            $query['LmItemIds'] = $request->lmItemIdsShrink;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->subBizId)) {
            $query['SubBizId'] = $request->subBizId;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryBizItemList',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryBizItemListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryBizItemListRequest $request
     *
     * @return QueryBizItemListResponse
     */
    public function queryBizItemList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryBizItemListWithOptions($request, $runtime);
    }

    /**
     * @param QueryBizItemListV2Request $tmpReq
     * @param RuntimeOptions            $runtime
     *
     * @return QueryBizItemListV2Response
     */
    public function queryBizItemListV2WithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new QueryBizItemListV2ShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->itemIds)) {
            $request->itemIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->itemIds, 'ItemIds', 'json');
        }
        if (!Utils::isUnset($tmpReq->lmItemIds)) {
            $request->lmItemIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->lmItemIds, 'LmItemIds', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->categoryId)) {
            $query['CategoryId'] = $request->categoryId;
        }
        if (!Utils::isUnset($request->itemIdsShrink)) {
            $query['ItemIds'] = $request->itemIdsShrink;
        }
        if (!Utils::isUnset($request->lmItemIdsShrink)) {
            $query['LmItemIds'] = $request->lmItemIdsShrink;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->subBizId)) {
            $query['SubBizId'] = $request->subBizId;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryBizItemListV2',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryBizItemListV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryBizItemListV2Request $request
     *
     * @return QueryBizItemListV2Response
     */
    public function queryBizItemListV2($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryBizItemListV2WithOptions($request, $runtime);
    }

    /**
     * @param QueryBizItemListWithCacheRequest $tmpReq
     * @param RuntimeOptions                   $runtime
     *
     * @return QueryBizItemListWithCacheResponse
     */
    public function queryBizItemListWithCacheWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new QueryBizItemListWithCacheShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->itemIds)) {
            $request->itemIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->itemIds, 'ItemIds', 'json');
        }
        if (!Utils::isUnset($tmpReq->lmItemIds)) {
            $request->lmItemIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->lmItemIds, 'LmItemIds', 'json');
        }
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryBizItemListWithCache',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryBizItemListWithCacheResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryBizItemListWithCacheRequest $request
     *
     * @return QueryBizItemListWithCacheResponse
     */
    public function queryBizItemListWithCache($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryBizItemListWithCacheWithOptions($request, $runtime);
    }

    /**
     * @param QueryBizItemsRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return QueryBizItemsResponse
     */
    public function queryBizItemsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->subBizId)) {
            $query['SubBizId'] = $request->subBizId;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryBizItems',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryBizItemsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryBizItemsRequest $request
     *
     * @return QueryBizItemsResponse
     */
    public function queryBizItems($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryBizItemsWithOptions($request, $runtime);
    }

    /**
     * @param QueryBizItemsWithActivityRequest $tmpReq
     * @param RuntimeOptions                   $runtime
     *
     * @return QueryBizItemsWithActivityResponse
     */
    public function queryBizItemsWithActivityWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new QueryBizItemsWithActivityShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->itemIds)) {
            $request->itemIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->itemIds, 'ItemIds', 'json');
        }
        if (!Utils::isUnset($tmpReq->lmItemIds)) {
            $request->lmItemIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->lmItemIds, 'LmItemIds', 'json');
        }
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryBizItemsWithActivity',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryBizItemsWithActivityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryBizItemsWithActivityRequest $request
     *
     * @return QueryBizItemsWithActivityResponse
     */
    public function queryBizItemsWithActivity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryBizItemsWithActivityWithOptions($request, $runtime);
    }

    /**
     * @param QueryBudgetTicketItemListByBizIdRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return QueryBudgetTicketItemListByBizIdResponse
     */
    public function queryBudgetTicketItemListByBizIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->budgetTicketNo)) {
            $query['BudgetTicketNo'] = $request->budgetTicketNo;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryBudgetTicketItemListByBizId',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryBudgetTicketItemListByBizIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryBudgetTicketItemListByBizIdRequest $request
     *
     * @return QueryBudgetTicketItemListByBizIdResponse
     */
    public function queryBudgetTicketItemListByBizId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryBudgetTicketItemListByBizIdWithOptions($request, $runtime);
    }

    /**
     * @param QueryChannelItemBillDownloadUrlRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return QueryChannelItemBillDownloadUrlResponse
     */
    public function queryChannelItemBillDownloadUrlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->billId)) {
            $body['BillId'] = $request->billId;
        }
        if (!Utils::isUnset($request->billPeriod)) {
            $body['BillPeriod'] = $request->billPeriod;
        }
        if (!Utils::isUnset($request->billStatus)) {
            $body['BillStatus'] = $request->billStatus;
        }
        if (!Utils::isUnset($request->bizId)) {
            $body['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->bizName)) {
            $body['BizName'] = $request->bizName;
        }
        if (!Utils::isUnset($request->lmShopId)) {
            $body['LmShopId'] = $request->lmShopId;
        }
        if (!Utils::isUnset($request->lmShopName)) {
            $body['LmShopName'] = $request->lmShopName;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryChannelItemBillDownloadUrl',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryChannelItemBillDownloadUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryChannelItemBillDownloadUrlRequest $request
     *
     * @return QueryChannelItemBillDownloadUrlResponse
     */
    public function queryChannelItemBillDownloadUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryChannelItemBillDownloadUrlWithOptions($request, $runtime);
    }

    /**
     * @param QueryGuideItemGroupRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return QueryGuideItemGroupResponse
     */
    public function queryGuideItemGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->itemState)) {
            $query['ItemState'] = $request->itemState;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryGuideItemGroup',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryGuideItemGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryGuideItemGroupRequest $request
     *
     * @return QueryGuideItemGroupResponse
     */
    public function queryGuideItemGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryGuideItemGroupWithOptions($request, $runtime);
    }

    /**
     * @param QueryGuideItemGroupForCrowdOperationRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return QueryGuideItemGroupForCrowdOperationResponse
     */
    public function queryGuideItemGroupForCrowdOperationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->itemState)) {
            $query['ItemState'] = $request->itemState;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->userFlag)) {
            $query['UserFlag'] = $request->userFlag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryGuideItemGroupForCrowdOperation',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryGuideItemGroupForCrowdOperationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryGuideItemGroupForCrowdOperationRequest $request
     *
     * @return QueryGuideItemGroupForCrowdOperationResponse
     */
    public function queryGuideItemGroupForCrowdOperation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryGuideItemGroupForCrowdOperationWithOptions($request, $runtime);
    }

    /**
     * @param QueryGuideItemGroupWithOutInventoryRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return QueryGuideItemGroupWithOutInventoryResponse
     */
    public function queryGuideItemGroupWithOutInventoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryGuideItemGroupWithOutInventory',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryGuideItemGroupWithOutInventoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryGuideItemGroupWithOutInventoryRequest $request
     *
     * @return QueryGuideItemGroupWithOutInventoryResponse
     */
    public function queryGuideItemGroupWithOutInventory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryGuideItemGroupWithOutInventoryWithOptions($request, $runtime);
    }

    /**
     * @param QueryHotMoviesRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return QueryHotMoviesResponse
     */
    public function queryHotMoviesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->cityCode)) {
            $query['CityCode'] = $request->cityCode;
        }
        if (!Utils::isUnset($request->extJson)) {
            $query['ExtJson'] = $request->extJson;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryHotMovies',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryHotMoviesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryHotMoviesRequest $request
     *
     * @return QueryHotMoviesResponse
     */
    public function queryHotMovies($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryHotMoviesWithOptions($request, $runtime);
    }

    /**
     * @param QueryInventoryOfItemsInBizItemGroupRequest $tmpReq
     * @param RuntimeOptions                             $runtime
     *
     * @return QueryInventoryOfItemsInBizItemGroupResponse
     */
    public function queryInventoryOfItemsInBizItemGroupWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new QueryInventoryOfItemsInBizItemGroupShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->itemIds)) {
            $request->itemIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->itemIds, 'ItemIds', 'json');
        }
        if (!Utils::isUnset($tmpReq->lmItemIds)) {
            $request->lmItemIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->lmItemIds, 'LmItemIds', 'json');
        }
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryInventoryOfItemsInBizItemGroup',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryInventoryOfItemsInBizItemGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryInventoryOfItemsInBizItemGroupRequest $request
     *
     * @return QueryInventoryOfItemsInBizItemGroupResponse
     */
    public function queryInventoryOfItemsInBizItemGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryInventoryOfItemsInBizItemGroupWithOptions($request, $runtime);
    }

    /**
     * @param QueryItemDetailRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return QueryItemDetailResponse
     */
    public function queryItemDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->itemId)) {
            $query['ItemId'] = $request->itemId;
        }
        if (!Utils::isUnset($request->lmItemId)) {
            $query['LmItemId'] = $request->lmItemId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryItemDetail',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryItemDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryItemDetailRequest $request
     *
     * @return QueryItemDetailResponse
     */
    public function queryItemDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryItemDetailWithOptions($request, $runtime);
    }

    /**
     * @param QueryItemDetailInnerRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return QueryItemDetailInnerResponse
     */
    public function queryItemDetailInnerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->bizUid)) {
            $query['BizUid'] = $request->bizUid;
        }
        if (!Utils::isUnset($request->divisionCode)) {
            $query['DivisionCode'] = $request->divisionCode;
        }
        if (!Utils::isUnset($request->ip)) {
            $query['Ip'] = $request->ip;
        }
        if (!Utils::isUnset($request->itemId)) {
            $query['ItemId'] = $request->itemId;
        }
        if (!Utils::isUnset($request->lmItemId)) {
            $query['LmItemId'] = $request->lmItemId;
        }
        if (!Utils::isUnset($request->thirdPartyUserId)) {
            $query['ThirdPartyUserId'] = $request->thirdPartyUserId;
        }
        if (!Utils::isUnset($request->useAnonymousTbAccount)) {
            $query['UseAnonymousTbAccount'] = $request->useAnonymousTbAccount;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryItemDetailInner',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryItemDetailInnerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryItemDetailInnerRequest $request
     *
     * @return QueryItemDetailInnerResponse
     */
    public function queryItemDetailInner($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryItemDetailInnerWithOptions($request, $runtime);
    }

    /**
     * @param QueryItemDetailTeaRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return QueryItemDetailTeaResponse
     */
    public function queryItemDetailTeaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->itemId)) {
            $query['ItemId'] = $request->itemId;
        }
        if (!Utils::isUnset($request->lmItemId)) {
            $query['LmItemId'] = $request->lmItemId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryItemDetailTea',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryItemDetailTeaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryItemDetailTeaRequest $request
     *
     * @return QueryItemDetailTeaResponse
     */
    public function queryItemDetailTea($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryItemDetailTeaWithOptions($request, $runtime);
    }

    /**
     * @param QueryItemInSubBizsRequest $tmpReq
     * @param RuntimeOptions            $runtime
     *
     * @return QueryItemInSubBizsResponse
     */
    public function queryItemInSubBizsWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new QueryItemInSubBizsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->subBizIds)) {
            $request->subBizIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->subBizIds, 'SubBizIds', 'json');
        }
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryItemInSubBizs',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryItemInSubBizsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryItemInSubBizsRequest $request
     *
     * @return QueryItemInSubBizsResponse
     */
    public function queryItemInSubBizs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryItemInSubBizsWithOptions($request, $runtime);
    }

    /**
     * @param QueryItemInventoryRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return QueryItemInventoryResponse
     */
    public function queryItemInventoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->divisionCode)) {
            $query['DivisionCode'] = $request->divisionCode;
        }
        if (!Utils::isUnset($request->ip)) {
            $query['Ip'] = $request->ip;
        }
        if (!Utils::isUnset($request->itemList)) {
            $query['ItemList'] = $request->itemList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryItemInventory',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryItemInventoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryItemInventoryRequest $request
     *
     * @return QueryItemInventoryResponse
     */
    public function queryItemInventory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryItemInventoryWithOptions($request, $runtime);
    }

    /**
     * @param QueryItemInventoryV2Request $request
     * @param RuntimeOptions              $runtime
     *
     * @return QueryItemInventoryV2Response
     */
    public function queryItemInventoryV2WithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->divisionCode)) {
            $query['DivisionCode'] = $request->divisionCode;
        }
        if (!Utils::isUnset($request->ip)) {
            $query['Ip'] = $request->ip;
        }
        if (!Utils::isUnset($request->itemList)) {
            $query['ItemList'] = $request->itemList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryItemInventoryV2',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryItemInventoryV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryItemInventoryV2Request $request
     *
     * @return QueryItemInventoryV2Response
     */
    public function queryItemInventoryV2($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryItemInventoryV2WithOptions($request, $runtime);
    }

    /**
     * @param QueryLogisticsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return QueryLogisticsResponse
     */
    public function queryLogisticsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountType)) {
            $query['AccountType'] = $request->accountType;
        }
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->bizUid)) {
            $query['BizUid'] = $request->bizUid;
        }
        if (!Utils::isUnset($request->lmOrderId)) {
            $query['LmOrderId'] = $request->lmOrderId;
        }
        if (!Utils::isUnset($request->thirdPartyUserId)) {
            $query['ThirdPartyUserId'] = $request->thirdPartyUserId;
        }
        if (!Utils::isUnset($request->useAnonymousTbAccount)) {
            $query['UseAnonymousTbAccount'] = $request->useAnonymousTbAccount;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryLogistics',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryLogisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryLogisticsRequest $request
     *
     * @return QueryLogisticsResponse
     */
    public function queryLogistics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryLogisticsWithOptions($request, $runtime);
    }

    /**
     * @param QueryMediaSettleInfoRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return QueryMediaSettleInfoResponse
     */
    public function queryMediaSettleInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->channelId)) {
            $query['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->extInfo)) {
            $query['ExtInfo'] = $request->extInfo;
        }
        if (!Utils::isUnset($request->mediaName)) {
            $query['MediaName'] = $request->mediaName;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->settleNo)) {
            $query['SettleNo'] = $request->settleNo;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryMediaSettleInfo',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryMediaSettleInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryMediaSettleInfoRequest $request
     *
     * @return QueryMediaSettleInfoResponse
     */
    public function queryMediaSettleInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryMediaSettleInfoWithOptions($request, $runtime);
    }

    /**
     * @param QueryMessagesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return QueryMessagesResponse
     */
    public function queryMessagesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->extJson)) {
            $query['ExtJson'] = $request->extJson;
        }
        if (!Utils::isUnset($request->topic)) {
            $query['Topic'] = $request->topic;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryMessages',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryMessagesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryMessagesRequest $request
     *
     * @return QueryMessagesResponse
     */
    public function queryMessages($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryMessagesWithOptions($request, $runtime);
    }

    /**
     * @param QueryMovieCommentsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return QueryMovieCommentsResponse
     */
    public function queryMovieCommentsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->extJson)) {
            $query['ExtJson'] = $request->extJson;
        }
        if (!Utils::isUnset($request->movieId)) {
            $query['MovieId'] = $request->movieId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryMovieComments',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryMovieCommentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryMovieCommentsRequest $request
     *
     * @return QueryMovieCommentsResponse
     */
    public function queryMovieComments($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryMovieCommentsWithOptions($request, $runtime);
    }

    /**
     * @param QueryMovieSchedulesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return QueryMovieSchedulesResponse
     */
    public function queryMovieSchedulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->cinemaId)) {
            $query['CinemaId'] = $request->cinemaId;
        }
        if (!Utils::isUnset($request->extJson)) {
            $query['ExtJson'] = $request->extJson;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryMovieSchedules',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryMovieSchedulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryMovieSchedulesRequest $request
     *
     * @return QueryMovieSchedulesResponse
     */
    public function queryMovieSchedules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryMovieSchedulesWithOptions($request, $runtime);
    }

    /**
     * @param QueryMovieSeatsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return QueryMovieSeatsResponse
     */
    public function queryMovieSeatsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->extJson)) {
            $query['ExtJson'] = $request->extJson;
        }
        if (!Utils::isUnset($request->scheduleId)) {
            $query['ScheduleId'] = $request->scheduleId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryMovieSeats',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryMovieSeatsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryMovieSeatsRequest $request
     *
     * @return QueryMovieSeatsResponse
     */
    public function queryMovieSeats($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryMovieSeatsWithOptions($request, $runtime);
    }

    /**
     * @param QueryMovieTicketsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return QueryMovieTicketsResponse
     */
    public function queryMovieTicketsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryMovieTickets',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryMovieTicketsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryMovieTicketsRequest $request
     *
     * @return QueryMovieTicketsResponse
     */
    public function queryMovieTickets($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryMovieTicketsWithOptions($request, $runtime);
    }

    /**
     * @param QueryOrderAndPaymentListRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return QueryOrderAndPaymentListResponse
     */
    public function queryOrderAndPaymentListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountType)) {
            $query['AccountType'] = $request->accountType;
        }
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->bizUid)) {
            $query['BizUid'] = $request->bizUid;
        }
        if (!Utils::isUnset($request->filterOption)) {
            $query['FilterOption'] = $request->filterOption;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->thirdPartyUserId)) {
            $query['ThirdPartyUserId'] = $request->thirdPartyUserId;
        }
        if (!Utils::isUnset($request->useAnonymousTbAccount)) {
            $query['UseAnonymousTbAccount'] = $request->useAnonymousTbAccount;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryOrderAndPaymentList',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryOrderAndPaymentListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryOrderAndPaymentListRequest $request
     *
     * @return QueryOrderAndPaymentListResponse
     */
    public function queryOrderAndPaymentList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryOrderAndPaymentListWithOptions($request, $runtime);
    }

    /**
     * @param QueryOrderAndPaymentListWithDesignatedTbUidRequest $request
     * @param RuntimeOptions                                     $runtime
     *
     * @return QueryOrderAndPaymentListWithDesignatedTbUidResponse
     */
    public function queryOrderAndPaymentListWithDesignatedTbUidWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bizId)) {
            $body['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->filterOption)) {
            $body['FilterOption'] = $request->filterOption;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->tbAccountType)) {
            $body['TbAccountType'] = $request->tbAccountType;
        }
        if (!Utils::isUnset($request->tbUserId)) {
            $body['TbUserId'] = $request->tbUserId;
        }
        if (!Utils::isUnset($request->thirdPartyUserId)) {
            $body['ThirdPartyUserId'] = $request->thirdPartyUserId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryOrderAndPaymentListWithDesignatedTbUid',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryOrderAndPaymentListWithDesignatedTbUidResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryOrderAndPaymentListWithDesignatedTbUidRequest $request
     *
     * @return QueryOrderAndPaymentListWithDesignatedTbUidResponse
     */
    public function queryOrderAndPaymentListWithDesignatedTbUid($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryOrderAndPaymentListWithDesignatedTbUidWithOptions($request, $runtime);
    }

    /**
     * @param QueryOrderCommissionRateRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return QueryOrderCommissionRateResponse
     */
    public function queryOrderCommissionRateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountType)) {
            $query['AccountType'] = $request->accountType;
        }
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->bizUid)) {
            $query['BizUid'] = $request->bizUid;
        }
        if (!Utils::isUnset($request->lmOrderId)) {
            $query['LmOrderId'] = $request->lmOrderId;
        }
        if (!Utils::isUnset($request->thirdPartyUserId)) {
            $query['ThirdPartyUserId'] = $request->thirdPartyUserId;
        }
        if (!Utils::isUnset($request->useAnonymousTbAccount)) {
            $query['UseAnonymousTbAccount'] = $request->useAnonymousTbAccount;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryOrderCommissionRate',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryOrderCommissionRateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryOrderCommissionRateRequest $request
     *
     * @return QueryOrderCommissionRateResponse
     */
    public function queryOrderCommissionRate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryOrderCommissionRateWithOptions($request, $runtime);
    }

    /**
     * @param QueryOrderDetailInnerRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return QueryOrderDetailInnerResponse
     */
    public function queryOrderDetailInnerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->bizUid)) {
            $query['BizUid'] = $request->bizUid;
        }
        if (!Utils::isUnset($request->filterOption)) {
            $query['FilterOption'] = $request->filterOption;
        }
        if (!Utils::isUnset($request->thirdPartyUserId)) {
            $query['ThirdPartyUserId'] = $request->thirdPartyUserId;
        }
        if (!Utils::isUnset($request->useAnonymousTbAccount)) {
            $query['UseAnonymousTbAccount'] = $request->useAnonymousTbAccount;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryOrderDetailInner',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryOrderDetailInnerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryOrderDetailInnerRequest $request
     *
     * @return QueryOrderDetailInnerResponse
     */
    public function queryOrderDetailInner($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryOrderDetailInnerWithOptions($request, $runtime);
    }

    /**
     * @param QueryOrderIdByPayIdRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return QueryOrderIdByPayIdResponse
     */
    public function queryOrderIdByPayIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountType)) {
            $query['AccountType'] = $request->accountType;
        }
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->bizUid)) {
            $query['BizUid'] = $request->bizUid;
        }
        if (!Utils::isUnset($request->paymentId)) {
            $query['PaymentId'] = $request->paymentId;
        }
        if (!Utils::isUnset($request->thirdPartyUserId)) {
            $query['ThirdPartyUserId'] = $request->thirdPartyUserId;
        }
        if (!Utils::isUnset($request->useAnonymousTbAccount)) {
            $query['UseAnonymousTbAccount'] = $request->useAnonymousTbAccount;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryOrderIdByPayId',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryOrderIdByPayIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryOrderIdByPayIdRequest $request
     *
     * @return QueryOrderIdByPayIdResponse
     */
    public function queryOrderIdByPayId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryOrderIdByPayIdWithOptions($request, $runtime);
    }

    /**
     * @param QueryOrderInfoAfterSaleRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return QueryOrderInfoAfterSaleResponse
     */
    public function queryOrderInfoAfterSaleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryOrderInfoAfterSale',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryOrderInfoAfterSaleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryOrderInfoAfterSaleRequest $request
     *
     * @return QueryOrderInfoAfterSaleResponse
     */
    public function queryOrderInfoAfterSale($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryOrderInfoAfterSaleWithOptions($request, $runtime);
    }

    /**
     * @param QueryOrderItemInfoByPaymentIdForAiZhanYouRequest $request
     * @param RuntimeOptions                                   $runtime
     *
     * @return QueryOrderItemInfoByPaymentIdForAiZhanYouResponse
     */
    public function queryOrderItemInfoByPaymentIdForAiZhanYouWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->bizUid)) {
            $query['BizUid'] = $request->bizUid;
        }
        if (!Utils::isUnset($request->paymentId)) {
            $query['PaymentId'] = $request->paymentId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryOrderItemInfoByPaymentIdForAiZhanYou',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryOrderItemInfoByPaymentIdForAiZhanYouResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryOrderItemInfoByPaymentIdForAiZhanYouRequest $request
     *
     * @return QueryOrderItemInfoByPaymentIdForAiZhanYouResponse
     */
    public function queryOrderItemInfoByPaymentIdForAiZhanYou($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryOrderItemInfoByPaymentIdForAiZhanYouWithOptions($request, $runtime);
    }

    /**
     * @param QueryOrderListRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return QueryOrderListResponse
     */
    public function queryOrderListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountType)) {
            $query['AccountType'] = $request->accountType;
        }
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->bizUid)) {
            $query['BizUid'] = $request->bizUid;
        }
        if (!Utils::isUnset($request->filterOption)) {
            $query['FilterOption'] = $request->filterOption;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->thirdPartyUserId)) {
            $query['ThirdPartyUserId'] = $request->thirdPartyUserId;
        }
        if (!Utils::isUnset($request->useAnonymousTbAccount)) {
            $query['UseAnonymousTbAccount'] = $request->useAnonymousTbAccount;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryOrderList',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryOrderListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryOrderListRequest $request
     *
     * @return QueryOrderListResponse
     */
    public function queryOrderList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryOrderListWithOptions($request, $runtime);
    }

    /**
     * @param QueryOrderListWithDesignatedTbUidRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return QueryOrderListWithDesignatedTbUidResponse
     */
    public function queryOrderListWithDesignatedTbUidWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bizId)) {
            $body['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->filterOption)) {
            $body['FilterOption'] = $request->filterOption;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->tbAccountType)) {
            $body['TbAccountType'] = $request->tbAccountType;
        }
        if (!Utils::isUnset($request->tbUserId)) {
            $body['TbUserId'] = $request->tbUserId;
        }
        if (!Utils::isUnset($request->thirdPartyUserId)) {
            $body['ThirdPartyUserId'] = $request->thirdPartyUserId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryOrderListWithDesignatedTbUid',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryOrderListWithDesignatedTbUidResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryOrderListWithDesignatedTbUidRequest $request
     *
     * @return QueryOrderListWithDesignatedTbUidResponse
     */
    public function queryOrderListWithDesignatedTbUid($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryOrderListWithDesignatedTbUidWithOptions($request, $runtime);
    }

    /**
     * @param QueryOrderLogisticsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return QueryOrderLogisticsResponse
     */
    public function queryOrderLogisticsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountType)) {
            $query['AccountType'] = $request->accountType;
        }
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->bizUid)) {
            $query['BizUid'] = $request->bizUid;
        }
        if (!Utils::isUnset($request->lmOrderId)) {
            $query['LmOrderId'] = $request->lmOrderId;
        }
        if (!Utils::isUnset($request->thirdPartyUserId)) {
            $query['ThirdPartyUserId'] = $request->thirdPartyUserId;
        }
        if (!Utils::isUnset($request->useAnonymousTbAccount)) {
            $query['UseAnonymousTbAccount'] = $request->useAnonymousTbAccount;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryOrderLogistics',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryOrderLogisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryOrderLogisticsRequest $request
     *
     * @return QueryOrderLogisticsResponse
     */
    public function queryOrderLogistics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryOrderLogisticsWithOptions($request, $runtime);
    }

    /**
     * @param QueryOrderLogisticsWithDesignatedTbUidRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return QueryOrderLogisticsWithDesignatedTbUidResponse
     */
    public function queryOrderLogisticsWithDesignatedTbUidWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bizId)) {
            $body['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->lmOrderId)) {
            $body['LmOrderId'] = $request->lmOrderId;
        }
        if (!Utils::isUnset($request->tbAccountType)) {
            $body['TbAccountType'] = $request->tbAccountType;
        }
        if (!Utils::isUnset($request->tbUserId)) {
            $body['TbUserId'] = $request->tbUserId;
        }
        if (!Utils::isUnset($request->thirdPartyUserId)) {
            $body['ThirdPartyUserId'] = $request->thirdPartyUserId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryOrderLogisticsWithDesignatedTbUid',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryOrderLogisticsWithDesignatedTbUidResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryOrderLogisticsWithDesignatedTbUidRequest $request
     *
     * @return QueryOrderLogisticsWithDesignatedTbUidResponse
     */
    public function queryOrderLogisticsWithDesignatedTbUid($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryOrderLogisticsWithDesignatedTbUidWithOptions($request, $runtime);
    }

    /**
     * @param QueryRealTbAccountSupportRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return QueryRealTbAccountSupportResponse
     */
    public function queryRealTbAccountSupportWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bizId)) {
            $body['BizId'] = $request->bizId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryRealTbAccountSupport',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryRealTbAccountSupportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryRealTbAccountSupportRequest $request
     *
     * @return QueryRealTbAccountSupportResponse
     */
    public function queryRealTbAccountSupport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryRealTbAccountSupportWithOptions($request, $runtime);
    }

    /**
     * @param QueryRefundApplicationDetailRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return QueryRefundApplicationDetailResponse
     */
    public function queryRefundApplicationDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountType)) {
            $query['AccountType'] = $request->accountType;
        }
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->bizUid)) {
            $query['BizUid'] = $request->bizUid;
        }
        if (!Utils::isUnset($request->subLmOrderId)) {
            $query['SubLmOrderId'] = $request->subLmOrderId;
        }
        if (!Utils::isUnset($request->thirdPartyUserId)) {
            $query['ThirdPartyUserId'] = $request->thirdPartyUserId;
        }
        if (!Utils::isUnset($request->useAnonymousTbAccount)) {
            $query['UseAnonymousTbAccount'] = $request->useAnonymousTbAccount;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryRefundApplicationDetail',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryRefundApplicationDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryRefundApplicationDetailRequest $request
     *
     * @return QueryRefundApplicationDetailResponse
     */
    public function queryRefundApplicationDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryRefundApplicationDetailWithOptions($request, $runtime);
    }

    /**
     * @param QueryRefundApplyWithDesignatedTbUidRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return QueryRefundApplyWithDesignatedTbUidResponse
     */
    public function queryRefundApplyWithDesignatedTbUidWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bizId)) {
            $body['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->subLmOrderId)) {
            $body['SubLmOrderId'] = $request->subLmOrderId;
        }
        if (!Utils::isUnset($request->tbAccountType)) {
            $body['TbAccountType'] = $request->tbAccountType;
        }
        if (!Utils::isUnset($request->tbUserId)) {
            $body['TbUserId'] = $request->tbUserId;
        }
        if (!Utils::isUnset($request->thirdPartyUserId)) {
            $body['ThirdPartyUserId'] = $request->thirdPartyUserId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryRefundApplyWithDesignatedTbUid',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryRefundApplyWithDesignatedTbUidResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryRefundApplyWithDesignatedTbUidRequest $request
     *
     * @return QueryRefundApplyWithDesignatedTbUidResponse
     */
    public function queryRefundApplyWithDesignatedTbUid($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryRefundApplyWithDesignatedTbUidWithOptions($request, $runtime);
    }

    /**
     * @param QueryStatementsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return QueryStatementsResponse
     */
    public function queryStatementsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->currency)) {
            $query['Currency'] = $request->currency;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->extInfo)) {
            $query['ExtInfo'] = $request->extInfo;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->payeeIds)) {
            $query['PayeeIds'] = $request->payeeIds;
        }
        if (!Utils::isUnset($request->settleNoes)) {
            $query['SettleNoes'] = $request->settleNoes;
        }
        if (!Utils::isUnset($request->settleStatus)) {
            $query['SettleStatus'] = $request->settleStatus;
        }
        if (!Utils::isUnset($request->settleType)) {
            $query['SettleType'] = $request->settleType;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $query['TenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryStatements',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryStatementsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryStatementsRequest $request
     *
     * @return QueryStatementsResponse
     */
    public function queryStatements($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryStatementsWithOptions($request, $runtime);
    }

    /**
     * @param QuerySupplierItemBillDownloadUrlRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return QuerySupplierItemBillDownloadUrlResponse
     */
    public function querySupplierItemBillDownloadUrlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->billId)) {
            $body['BillId'] = $request->billId;
        }
        if (!Utils::isUnset($request->billPeriod)) {
            $body['BillPeriod'] = $request->billPeriod;
        }
        if (!Utils::isUnset($request->billStatus)) {
            $body['BillStatus'] = $request->billStatus;
        }
        if (!Utils::isUnset($request->bizId)) {
            $body['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->bizName)) {
            $body['BizName'] = $request->bizName;
        }
        if (!Utils::isUnset($request->lmShopId)) {
            $body['LmShopId'] = $request->lmShopId;
        }
        if (!Utils::isUnset($request->lmShopName)) {
            $body['LmShopName'] = $request->lmShopName;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QuerySupplierItemBillDownloadUrl',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QuerySupplierItemBillDownloadUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QuerySupplierItemBillDownloadUrlRequest $request
     *
     * @return QuerySupplierItemBillDownloadUrlResponse
     */
    public function querySupplierItemBillDownloadUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySupplierItemBillDownloadUrlWithOptions($request, $runtime);
    }

    /**
     * @param QueryUnfinishedActivitiesRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return QueryUnfinishedActivitiesResponse
     */
    public function queryUnfinishedActivitiesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryUnfinishedActivities',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryUnfinishedActivitiesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryUnfinishedActivitiesRequest $request
     *
     * @return QueryUnfinishedActivitiesResponse
     */
    public function queryUnfinishedActivities($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryUnfinishedActivitiesWithOptions($request, $runtime);
    }

    /**
     * @param QueryUnfinishedSessionsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return QueryUnfinishedSessionsResponse
     */
    public function queryUnfinishedSessionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->queryTime)) {
            $query['QueryTime'] = $request->queryTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryUnfinishedSessions',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryUnfinishedSessionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryUnfinishedSessionsRequest $request
     *
     * @return QueryUnfinishedSessionsResponse
     */
    public function queryUnfinishedSessions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryUnfinishedSessionsWithOptions($request, $runtime);
    }

    /**
     * @param QueryUnfinishedSessions4ItemsRequest $tmpReq
     * @param RuntimeOptions                       $runtime
     *
     * @return QueryUnfinishedSessions4ItemsResponse
     */
    public function queryUnfinishedSessions4ItemsWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new QueryUnfinishedSessions4ItemsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->itemIds)) {
            $request->itemIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->itemIds, 'ItemIds', 'json');
        }
        if (!Utils::isUnset($tmpReq->lmItemIds)) {
            $request->lmItemIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->lmItemIds, 'LmItemIds', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->itemIdsShrink)) {
            $query['ItemIds'] = $request->itemIdsShrink;
        }
        if (!Utils::isUnset($request->lmItemIdsShrink)) {
            $query['LmItemIds'] = $request->lmItemIdsShrink;
        }
        if (!Utils::isUnset($request->queryTime)) {
            $query['QueryTime'] = $request->queryTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryUnfinishedSessions4Items',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryUnfinishedSessions4ItemsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryUnfinishedSessions4ItemsRequest $request
     *
     * @return QueryUnfinishedSessions4ItemsResponse
     */
    public function queryUnfinishedSessions4Items($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryUnfinishedSessions4ItemsWithOptions($request, $runtime);
    }

    /**
     * @param QueryUpcomingMoviesRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return QueryUpcomingMoviesResponse
     */
    public function queryUpcomingMoviesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new QueryUpcomingMoviesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->extJson)) {
            $request->extJsonShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->extJson, 'ExtJson', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->cityCode)) {
            $query['CityCode'] = $request->cityCode;
        }
        if (!Utils::isUnset($request->extJsonShrink)) {
            $query['ExtJson'] = $request->extJsonShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryUpcomingMovies',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryUpcomingMoviesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryUpcomingMoviesRequest $request
     *
     * @return QueryUpcomingMoviesResponse
     */
    public function queryUpcomingMovies($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryUpcomingMoviesWithOptions($request, $runtime);
    }

    /**
     * @param QueryUserAccountRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return QueryUserAccountResponse
     */
    public function queryUserAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bizId)) {
            $body['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->thirdPartyUserId)) {
            $body['ThirdPartyUserId'] = $request->thirdPartyUserId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryUserAccount',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryUserAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryUserAccountRequest $request
     *
     * @return QueryUserAccountResponse
     */
    public function queryUserAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryUserAccountWithOptions($request, $runtime);
    }

    /**
     * @param QueryUserGameProcessRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return QueryUserGameProcessResponse
     */
    public function queryUserGameProcessWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new QueryUserGameProcessShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->extInfo)) {
            $request->extInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->extInfo, 'ExtInfo', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->accountType)) {
            $query['AccountType'] = $request->accountType;
        }
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->processId)) {
            $query['ProcessId'] = $request->processId;
        }
        if (!Utils::isUnset($request->thirdPartyUserId)) {
            $query['ThirdPartyUserId'] = $request->thirdPartyUserId;
        }
        $body = [];
        if (!Utils::isUnset($request->extInfoShrink)) {
            $body['ExtInfo'] = $request->extInfoShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryUserGameProcess',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryUserGameProcessResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryUserGameProcessRequest $request
     *
     * @return QueryUserGameProcessResponse
     */
    public function queryUserGameProcess($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryUserGameProcessWithOptions($request, $runtime);
    }

    /**
     * @param QueryUserPointRequest $tmpReq
     * @param RuntimeOptions        $runtime
     *
     * @return QueryUserPointResponse
     */
    public function queryUserPointWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new QueryUserPointShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->extInfo)) {
            $request->extInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->extInfo, 'ExtInfo', 'json');
        }
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryUserPoint',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryUserPointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryUserPointRequest $request
     *
     * @return QueryUserPointResponse
     */
    public function queryUserPoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryUserPointWithOptions($request, $runtime);
    }

    /**
     * @param QueryWithholdTradeRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return QueryWithholdTradeResponse
     */
    public function queryWithholdTradeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->merchantId)) {
            $body['MerchantId'] = $request->merchantId;
        }
        if (!Utils::isUnset($request->outTradeNo)) {
            $body['OutTradeNo'] = $request->outTradeNo;
        }
        if (!Utils::isUnset($request->tradeNo)) {
            $body['TradeNo'] = $request->tradeNo;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryWithholdTrade',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryWithholdTradeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryWithholdTradeRequest $request
     *
     * @return QueryWithholdTradeResponse
     */
    public function queryWithholdTrade($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryWithholdTradeWithOptions($request, $runtime);
    }

    /**
     * @param RebindTbAccountRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return RebindTbAccountResponse
     */
    public function rebindTbAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bizId)) {
            $body['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->tbAccountType)) {
            $body['TbAccountType'] = $request->tbAccountType;
        }
        if (!Utils::isUnset($request->tbUserId)) {
            $body['TbUserId'] = $request->tbUserId;
        }
        if (!Utils::isUnset($request->thirdPartyUserId)) {
            $body['ThirdPartyUserId'] = $request->thirdPartyUserId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RebindTbAccount',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RebindTbAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RebindTbAccountRequest $request
     *
     * @return RebindTbAccountResponse
     */
    public function rebindTbAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->rebindTbAccountWithOptions($request, $runtime);
    }

    /**
     * @param RefreshSettlementOrderAccountRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return RefreshSettlementOrderAccountResponse
     */
    public function refreshSettlementOrderAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->accountId)) {
            $body['AccountId'] = $request->accountId;
        }
        if (!Utils::isUnset($request->bizId)) {
            $body['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->extInfo)) {
            $body['ExtInfo'] = $request->extInfo;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RefreshSettlementOrderAccount',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RefreshSettlementOrderAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RefreshSettlementOrderAccountRequest $request
     *
     * @return RefreshSettlementOrderAccountResponse
     */
    public function refreshSettlementOrderAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->refreshSettlementOrderAccountWithOptions($request, $runtime);
    }

    /**
     * @param RefundOrderRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return RefundOrderResponse
     */
    public function refundOrderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->extInfo)) {
            $body['ExtInfo'] = $request->extInfo;
        }
        if (!Utils::isUnset($request->merchantId)) {
            $body['MerchantId'] = $request->merchantId;
        }
        if (!Utils::isUnset($request->outRequestNo)) {
            $body['OutRequestNo'] = $request->outRequestNo;
        }
        if (!Utils::isUnset($request->outTradeNo)) {
            $body['OutTradeNo'] = $request->outTradeNo;
        }
        if (!Utils::isUnset($request->refundAmount)) {
            $body['RefundAmount'] = $request->refundAmount;
        }
        if (!Utils::isUnset($request->refundReason)) {
            $body['RefundReason'] = $request->refundReason;
        }
        if (!Utils::isUnset($request->refundRoyaltyParameters)) {
            $body['RefundRoyaltyParameters'] = $request->refundRoyaltyParameters;
        }
        if (!Utils::isUnset($request->tradeNo)) {
            $body['TradeNo'] = $request->tradeNo;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RefundOrder',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RefundOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RefundOrderRequest $request
     *
     * @return RefundOrderResponse
     */
    public function refundOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->refundOrderWithOptions($request, $runtime);
    }

    /**
     * @param RefundPointRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return RefundPointResponse
     */
    public function refundPointWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->lmOrderId)) {
            $query['LmOrderId'] = $request->lmOrderId;
        }
        if (!Utils::isUnset($request->reason)) {
            $query['Reason'] = $request->reason;
        }
        if (!Utils::isUnset($request->sellerId)) {
            $query['SellerId'] = $request->sellerId;
        }
        if (!Utils::isUnset($request->thirdPartyUserId)) {
            $query['ThirdPartyUserId'] = $request->thirdPartyUserId;
        }
        if (!Utils::isUnset($request->useAnonymousTbAccount)) {
            $query['UseAnonymousTbAccount'] = $request->useAnonymousTbAccount;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RefundPoint',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RefundPointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RefundPointRequest $request
     *
     * @return RefundPointResponse
     */
    public function refundPoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->refundPointWithOptions($request, $runtime);
    }

    /**
     * @param RefundUserPointRequest $tmpReq
     * @param RuntimeOptions         $runtime
     *
     * @return RefundUserPointResponse
     */
    public function refundUserPointWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new RefundUserPointShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->extInfo)) {
            $request->extInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->extInfo, 'ExtInfo', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->accountType)) {
            $query['AccountType'] = $request->accountType;
        }
        if (!Utils::isUnset($request->amount)) {
            $query['Amount'] = $request->amount;
        }
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->idempotentId)) {
            $query['IdempotentId'] = $request->idempotentId;
        }
        if (!Utils::isUnset($request->message)) {
            $query['Message'] = $request->message;
        }
        if (!Utils::isUnset($request->originRecordId)) {
            $query['OriginRecordId'] = $request->originRecordId;
        }
        if (!Utils::isUnset($request->ruleId)) {
            $query['RuleId'] = $request->ruleId;
        }
        if (!Utils::isUnset($request->thirdPartyUserId)) {
            $query['ThirdPartyUserId'] = $request->thirdPartyUserId;
        }
        if (!Utils::isUnset($request->title)) {
            $query['Title'] = $request->title;
        }
        $body = [];
        if (!Utils::isUnset($request->extInfoShrink)) {
            $body['ExtInfo'] = $request->extInfoShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RefundUserPoint',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RefundUserPointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RefundUserPointRequest $request
     *
     * @return RefundUserPointResponse
     */
    public function refundUserPoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->refundUserPointWithOptions($request, $runtime);
    }

    /**
     * @param RefuseMerchantSyncTaskRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return RefuseMerchantSyncTaskResponse
     */
    public function refuseMerchantSyncTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->sellerNick)) {
            $query['SellerNick'] = $request->sellerNick;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        if (!Utils::isUnset($request->timeStamp)) {
            $query['TimeStamp'] = $request->timeStamp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RefuseMerchantSyncTask',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RefuseMerchantSyncTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RefuseMerchantSyncTaskRequest $request
     *
     * @return RefuseMerchantSyncTaskResponse
     */
    public function refuseMerchantSyncTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->refuseMerchantSyncTaskWithOptions($request, $runtime);
    }

    /**
     * @param RegistAnonymousTbAccountRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return RegistAnonymousTbAccountResponse
     */
    public function registAnonymousTbAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->thirdPartyUserId)) {
            $query['ThirdPartyUserId'] = $request->thirdPartyUserId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RegistAnonymousTbAccount',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RegistAnonymousTbAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RegistAnonymousTbAccountRequest $request
     *
     * @return RegistAnonymousTbAccountResponse
     */
    public function registAnonymousTbAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->registAnonymousTbAccountWithOptions($request, $runtime);
    }

    /**
     * @param RegisterSettleAccountRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return RegisterSettleAccountResponse
     */
    public function registerSettleAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->accountChannel)) {
            $body['AccountChannel'] = $request->accountChannel;
        }
        if (!Utils::isUnset($request->accountName)) {
            $body['AccountName'] = $request->accountName;
        }
        if (!Utils::isUnset($request->accountNo)) {
            $body['AccountNo'] = $request->accountNo;
        }
        if (!Utils::isUnset($request->accountPayType)) {
            $body['AccountPayType'] = $request->accountPayType;
        }
        if (!Utils::isUnset($request->accountType)) {
            $body['AccountType'] = $request->accountType;
        }
        if (!Utils::isUnset($request->bizId)) {
            $body['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->countryOrAreaCode)) {
            $body['CountryOrAreaCode'] = $request->countryOrAreaCode;
        }
        if (!Utils::isUnset($request->currency)) {
            $body['Currency'] = $request->currency;
        }
        if (!Utils::isUnset($request->extInfo)) {
            $body['ExtInfo'] = $request->extInfo;
        }
        if (!Utils::isUnset($request->idempotentId)) {
            $body['IdempotentId'] = $request->idempotentId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RegisterSettleAccount',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RegisterSettleAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RegisterSettleAccountRequest $request
     *
     * @return RegisterSettleAccountResponse
     */
    public function registerSettleAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->registerSettleAccountWithOptions($request, $runtime);
    }

    /**
     * @param RegisterUserAccountRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return RegisterUserAccountResponse
     */
    public function registerUserAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bizId)) {
            $body['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->tbAccountType)) {
            $body['TbAccountType'] = $request->tbAccountType;
        }
        if (!Utils::isUnset($request->tbUserId)) {
            $body['TbUserId'] = $request->tbUserId;
        }
        if (!Utils::isUnset($request->thirdPartyUserId)) {
            $body['ThirdPartyUserId'] = $request->thirdPartyUserId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RegisterUserAccount',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RegisterUserAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RegisterUserAccountRequest $request
     *
     * @return RegisterUserAccountResponse
     */
    public function registerUserAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->registerUserAccountWithOptions($request, $runtime);
    }

    /**
     * @param ReleaseMovieSeatRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ReleaseMovieSeatResponse
     */
    public function releaseMovieSeatWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->bizUid)) {
            $query['BizUid'] = $request->bizUid;
        }
        if (!Utils::isUnset($request->extJson)) {
            $query['ExtJson'] = $request->extJson;
        }
        if (!Utils::isUnset($request->lockSeatApplyKey)) {
            $query['LockSeatApplyKey'] = $request->lockSeatApplyKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ReleaseMovieSeat',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ReleaseMovieSeatResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ReleaseMovieSeatRequest $request
     *
     * @return ReleaseMovieSeatResponse
     */
    public function releaseMovieSeat($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->releaseMovieSeatWithOptions($request, $runtime);
    }

    /**
     * @param RemoveAddressRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return RemoveAddressResponse
     */
    public function removeAddressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->thirdPartyUserId)) {
            $query['ThirdPartyUserId'] = $request->thirdPartyUserId;
        }
        if (!Utils::isUnset($request->useAnonymousTbAccount)) {
            $query['UseAnonymousTbAccount'] = $request->useAnonymousTbAccount;
        }
        $body = [];
        if (!Utils::isUnset($request->addressInfo)) {
            $body['AddressInfo'] = $request->addressInfo;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RemoveAddress',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemoveAddressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RemoveAddressRequest $request
     *
     * @return RemoveAddressResponse
     */
    public function removeAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeAddressWithOptions($request, $runtime);
    }

    /**
     * @param RemoveMessagesRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return RemoveMessagesResponse
     */
    public function removeMessagesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->extJson)) {
            $query['ExtJson'] = $request->extJson;
        }
        if (!Utils::isUnset($request->messageIds)) {
            $query['MessageIds'] = $request->messageIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RemoveMessages',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemoveMessagesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RemoveMessagesRequest $request
     *
     * @return RemoveMessagesResponse
     */
    public function removeMessages($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeMessagesWithOptions($request, $runtime);
    }

    /**
     * @param RenderH5OrderRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return RenderH5OrderResponse
     */
    public function renderH5OrderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountType)) {
            $query['AccountType'] = $request->accountType;
        }
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->bizUid)) {
            $query['BizUid'] = $request->bizUid;
        }
        if (!Utils::isUnset($request->buyOrderRequestModel)) {
            $query['BuyOrderRequestModel'] = $request->buyOrderRequestModel;
        }
        if (!Utils::isUnset($request->thirdPartyUserId)) {
            $query['ThirdPartyUserId'] = $request->thirdPartyUserId;
        }
        if (!Utils::isUnset($request->useAnonymousTbAccount)) {
            $query['UseAnonymousTbAccount'] = $request->useAnonymousTbAccount;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RenderH5Order',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RenderH5OrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RenderH5OrderRequest $request
     *
     * @return RenderH5OrderResponse
     */
    public function renderH5Order($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->renderH5OrderWithOptions($request, $runtime);
    }

    /**
     * @param RenderOrderRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return RenderOrderResponse
     */
    public function renderOrderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountType)) {
            $query['AccountType'] = $request->accountType;
        }
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->bizUid)) {
            $query['BizUid'] = $request->bizUid;
        }
        if (!Utils::isUnset($request->deliveryAddress)) {
            $query['DeliveryAddress'] = $request->deliveryAddress;
        }
        if (!Utils::isUnset($request->extJson)) {
            $query['ExtJson'] = $request->extJson;
        }
        if (!Utils::isUnset($request->itemList)) {
            $query['ItemList'] = $request->itemList;
        }
        if (!Utils::isUnset($request->lmItemId)) {
            $query['LmItemId'] = $request->lmItemId;
        }
        if (!Utils::isUnset($request->thirdPartyUserId)) {
            $query['ThirdPartyUserId'] = $request->thirdPartyUserId;
        }
        if (!Utils::isUnset($request->useAnonymousTbAccount)) {
            $query['UseAnonymousTbAccount'] = $request->useAnonymousTbAccount;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RenderOrder',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RenderOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RenderOrderRequest $request
     *
     * @return RenderOrderResponse
     */
    public function renderOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->renderOrderWithOptions($request, $runtime);
    }

    /**
     * @param RenderOrderWithDesignatedTbUidRequest $tmpReq
     * @param RuntimeOptions                        $runtime
     *
     * @return RenderOrderWithDesignatedTbUidResponse
     */
    public function renderOrderWithDesignatedTbUidWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new RenderOrderWithDesignatedTbUidShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->itemList)) {
            $request->itemListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->itemList, 'ItemList', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->bizId)) {
            $body['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->deliveryAddress)) {
            $body['DeliveryAddress'] = $request->deliveryAddress;
        }
        if (!Utils::isUnset($request->itemListShrink)) {
            $body['ItemList'] = $request->itemListShrink;
        }
        if (!Utils::isUnset($request->tbAccountType)) {
            $body['TbAccountType'] = $request->tbAccountType;
        }
        if (!Utils::isUnset($request->tbUserId)) {
            $body['TbUserId'] = $request->tbUserId;
        }
        if (!Utils::isUnset($request->thirdPartyUserId)) {
            $body['ThirdPartyUserId'] = $request->thirdPartyUserId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RenderOrderWithDesignatedTbUid',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RenderOrderWithDesignatedTbUidResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RenderOrderWithDesignatedTbUidRequest $request
     *
     * @return RenderOrderWithDesignatedTbUidResponse
     */
    public function renderOrderWithDesignatedTbUid($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->renderOrderWithDesignatedTbUidWithOptions($request, $runtime);
    }

    /**
     * @param RepayForPayUrlRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return RepayForPayUrlResponse
     */
    public function repayForPayUrlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->bizUid)) {
            $query['BizUid'] = $request->bizUid;
        }
        if (!Utils::isUnset($request->lmOrderId)) {
            $query['LmOrderId'] = $request->lmOrderId;
        }
        if (!Utils::isUnset($request->thirdPartyUserId)) {
            $query['ThirdPartyUserId'] = $request->thirdPartyUserId;
        }
        if (!Utils::isUnset($request->useAnonymousTbAccount)) {
            $query['UseAnonymousTbAccount'] = $request->useAnonymousTbAccount;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RepayForPayUrl',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RepayForPayUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RepayForPayUrlRequest $request
     *
     * @return RepayForPayUrlResponse
     */
    public function repayForPayUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->repayForPayUrlWithOptions($request, $runtime);
    }

    /**
     * @param RepayOrderRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return RepayOrderResponse
     */
    public function repayOrderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountType)) {
            $query['AccountType'] = $request->accountType;
        }
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->bizUid)) {
            $query['BizUid'] = $request->bizUid;
        }
        if (!Utils::isUnset($request->lmOrderId)) {
            $query['LmOrderId'] = $request->lmOrderId;
        }
        if (!Utils::isUnset($request->thirdPartyUserId)) {
            $query['ThirdPartyUserId'] = $request->thirdPartyUserId;
        }
        if (!Utils::isUnset($request->useAnonymousTbAccount)) {
            $query['UseAnonymousTbAccount'] = $request->useAnonymousTbAccount;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RepayOrder',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RepayOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RepayOrderRequest $request
     *
     * @return RepayOrderResponse
     */
    public function repayOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->repayOrderWithOptions($request, $runtime);
    }

    /**
     * @param RepayWithDesignatedTbUidRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return RepayWithDesignatedTbUidResponse
     */
    public function repayWithDesignatedTbUidWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bizId)) {
            $body['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->extJson)) {
            $body['ExtJson'] = $request->extJson;
        }
        if (!Utils::isUnset($request->lmOrderId)) {
            $body['LmOrderId'] = $request->lmOrderId;
        }
        if (!Utils::isUnset($request->tbAccountType)) {
            $body['TbAccountType'] = $request->tbAccountType;
        }
        if (!Utils::isUnset($request->tbUserId)) {
            $body['TbUserId'] = $request->tbUserId;
        }
        if (!Utils::isUnset($request->thirdPartyUserId)) {
            $body['ThirdPartyUserId'] = $request->thirdPartyUserId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RepayWithDesignatedTbUid',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RepayWithDesignatedTbUidResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RepayWithDesignatedTbUidRequest $request
     *
     * @return RepayWithDesignatedTbUidResponse
     */
    public function repayWithDesignatedTbUid($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->repayWithDesignatedTbUidWithOptions($request, $runtime);
    }

    /**
     * @param ReserveMovieSeatRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ReserveMovieSeatResponse
     */
    public function reserveMovieSeatWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->bizUid)) {
            $query['BizUid'] = $request->bizUid;
        }
        if (!Utils::isUnset($request->extJson)) {
            $query['ExtJson'] = $request->extJson;
        }
        if (!Utils::isUnset($request->mobile)) {
            $query['Mobile'] = $request->mobile;
        }
        if (!Utils::isUnset($request->scheduleId)) {
            $query['ScheduleId'] = $request->scheduleId;
        }
        if (!Utils::isUnset($request->seatIds)) {
            $query['SeatIds'] = $request->seatIds;
        }
        if (!Utils::isUnset($request->seatNames)) {
            $query['SeatNames'] = $request->seatNames;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ReserveMovieSeat',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ReserveMovieSeatResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ReserveMovieSeatRequest $request
     *
     * @return ReserveMovieSeatResponse
     */
    public function reserveMovieSeat($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->reserveMovieSeatWithOptions($request, $runtime);
    }

    /**
     * @param SettleOrderRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return SettleOrderResponse
     */
    public function settleOrderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->extInfo)) {
            $body['ExtInfo'] = $request->extInfo;
        }
        if (!Utils::isUnset($request->merchantId)) {
            $body['MerchantId'] = $request->merchantId;
        }
        if (!Utils::isUnset($request->outRequestNo)) {
            $body['OutRequestNo'] = $request->outRequestNo;
        }
        if (!Utils::isUnset($request->outTradeNo)) {
            $body['OutTradeNo'] = $request->outTradeNo;
        }
        if (!Utils::isUnset($request->royaltyParameters)) {
            $body['RoyaltyParameters'] = $request->royaltyParameters;
        }
        if (!Utils::isUnset($request->tradeNo)) {
            $body['TradeNo'] = $request->tradeNo;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SettleOrder',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SettleOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SettleOrderRequest $request
     *
     * @return SettleOrderResponse
     */
    public function settleOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->settleOrderWithOptions($request, $runtime);
    }

    /**
     * @param StartUserGameRequest $tmpReq
     * @param RuntimeOptions       $runtime
     *
     * @return StartUserGameResponse
     */
    public function startUserGameWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new StartUserGameShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->extInfo)) {
            $request->extInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->extInfo, 'ExtInfo', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->accountType)) {
            $query['AccountType'] = $request->accountType;
        }
        if (!Utils::isUnset($request->activityId)) {
            $query['ActivityId'] = $request->activityId;
        }
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->gameId)) {
            $query['GameId'] = $request->gameId;
        }
        if (!Utils::isUnset($request->routeId)) {
            $query['RouteId'] = $request->routeId;
        }
        if (!Utils::isUnset($request->thirdPartyUserId)) {
            $query['ThirdPartyUserId'] = $request->thirdPartyUserId;
        }
        if (!Utils::isUnset($request->userApp)) {
            $query['UserApp'] = $request->userApp;
        }
        $body = [];
        if (!Utils::isUnset($request->extInfoShrink)) {
            $body['ExtInfo'] = $request->extInfoShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'StartUserGame',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StartUserGameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param StartUserGameRequest $request
     *
     * @return StartUserGameResponse
     */
    public function startUserGame($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startUserGameWithOptions($request, $runtime);
    }

    /**
     * @param SubmitReturnGoodLogisticsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return SubmitReturnGoodLogisticsResponse
     */
    public function submitReturnGoodLogisticsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountType)) {
            $query['AccountType'] = $request->accountType;
        }
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->bizUid)) {
            $query['BizUid'] = $request->bizUid;
        }
        if (!Utils::isUnset($request->cpCode)) {
            $query['CpCode'] = $request->cpCode;
        }
        if (!Utils::isUnset($request->disputeId)) {
            $query['DisputeId'] = $request->disputeId;
        }
        if (!Utils::isUnset($request->logisticsNo)) {
            $query['LogisticsNo'] = $request->logisticsNo;
        }
        if (!Utils::isUnset($request->subLmOrderId)) {
            $query['SubLmOrderId'] = $request->subLmOrderId;
        }
        if (!Utils::isUnset($request->thirdPartyUserId)) {
            $query['ThirdPartyUserId'] = $request->thirdPartyUserId;
        }
        if (!Utils::isUnset($request->useAnonymousTbAccount)) {
            $query['UseAnonymousTbAccount'] = $request->useAnonymousTbAccount;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitReturnGoodLogistics',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitReturnGoodLogisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SubmitReturnGoodLogisticsRequest $request
     *
     * @return SubmitReturnGoodLogisticsResponse
     */
    public function submitReturnGoodLogistics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitReturnGoodLogisticsWithOptions($request, $runtime);
    }

    /**
     * @param SubmitReturnGoodLogisticsWithDesignatedTbUidRequest $request
     * @param RuntimeOptions                                      $runtime
     *
     * @return SubmitReturnGoodLogisticsWithDesignatedTbUidResponse
     */
    public function submitReturnGoodLogisticsWithDesignatedTbUidWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bizId)) {
            $body['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->cpCode)) {
            $body['CpCode'] = $request->cpCode;
        }
        if (!Utils::isUnset($request->disputeId)) {
            $body['DisputeId'] = $request->disputeId;
        }
        if (!Utils::isUnset($request->logisticsNo)) {
            $body['LogisticsNo'] = $request->logisticsNo;
        }
        if (!Utils::isUnset($request->subLmOrderId)) {
            $body['SubLmOrderId'] = $request->subLmOrderId;
        }
        if (!Utils::isUnset($request->tbAccountType)) {
            $body['TbAccountType'] = $request->tbAccountType;
        }
        if (!Utils::isUnset($request->tbUserId)) {
            $body['TbUserId'] = $request->tbUserId;
        }
        if (!Utils::isUnset($request->thirdPartyUserId)) {
            $body['ThirdPartyUserId'] = $request->thirdPartyUserId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SubmitReturnGoodLogisticsWithDesignatedTbUid',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitReturnGoodLogisticsWithDesignatedTbUidResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SubmitReturnGoodLogisticsWithDesignatedTbUidRequest $request
     *
     * @return SubmitReturnGoodLogisticsWithDesignatedTbUidResponse
     */
    public function submitReturnGoodLogisticsWithDesignatedTbUid($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitReturnGoodLogisticsWithDesignatedTbUidWithOptions($request, $runtime);
    }

    /**
     * @param SyncMerchantInfoRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return SyncMerchantInfoResponse
     */
    public function syncMerchantInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->sellerNick)) {
            $query['SellerNick'] = $request->sellerNick;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        if (!Utils::isUnset($request->timeStamp)) {
            $query['TimeStamp'] = $request->timeStamp;
        }
        $body = [];
        if (!Utils::isUnset($request->itemList)) {
            $body['ItemList'] = $request->itemList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SyncMerchantInfo',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SyncMerchantInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SyncMerchantInfoRequest $request
     *
     * @return SyncMerchantInfoResponse
     */
    public function syncMerchantInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->syncMerchantInfoWithOptions($request, $runtime);
    }

    /**
     * @param UnFreezeUserPointRequest $tmpReq
     * @param RuntimeOptions           $runtime
     *
     * @return UnFreezeUserPointResponse
     */
    public function unFreezeUserPointWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UnFreezeUserPointShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->extInfo)) {
            $request->extInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->extInfo, 'ExtInfo', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->accountType)) {
            $query['AccountType'] = $request->accountType;
        }
        if (!Utils::isUnset($request->amount)) {
            $query['Amount'] = $request->amount;
        }
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->idempotentId)) {
            $query['IdempotentId'] = $request->idempotentId;
        }
        if (!Utils::isUnset($request->message)) {
            $query['Message'] = $request->message;
        }
        if (!Utils::isUnset($request->ruleId)) {
            $query['RuleId'] = $request->ruleId;
        }
        if (!Utils::isUnset($request->thirdPartyUserId)) {
            $query['ThirdPartyUserId'] = $request->thirdPartyUserId;
        }
        if (!Utils::isUnset($request->title)) {
            $query['Title'] = $request->title;
        }
        $body = [];
        if (!Utils::isUnset($request->extInfoShrink)) {
            $body['ExtInfo'] = $request->extInfoShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UnFreezeUserPoint',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UnFreezeUserPointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UnFreezeUserPointRequest $request
     *
     * @return UnFreezeUserPointResponse
     */
    public function unFreezeUserPoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unFreezeUserPointWithOptions($request, $runtime);
    }

    /**
     * @param UnsignWithholdAgreementRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return UnsignWithholdAgreementResponse
     */
    public function unsignWithholdAgreementWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->agreementNo)) {
            $body['AgreementNo'] = $request->agreementNo;
        }
        if (!Utils::isUnset($request->externalAgreementNo)) {
            $body['ExternalAgreementNo'] = $request->externalAgreementNo;
        }
        if (!Utils::isUnset($request->merchantId)) {
            $body['MerchantId'] = $request->merchantId;
        }
        if (!Utils::isUnset($request->outRequestNo)) {
            $body['OutRequestNo'] = $request->outRequestNo;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UnsignWithholdAgreement',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UnsignWithholdAgreementResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UnsignWithholdAgreementRequest $request
     *
     * @return UnsignWithholdAgreementResponse
     */
    public function unsignWithholdAgreement($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unsignWithholdAgreementWithOptions($request, $runtime);
    }

    /**
     * @param UpdateAddressRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateAddressResponse
     */
    public function updateAddressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->thirdPartyUserId)) {
            $query['ThirdPartyUserId'] = $request->thirdPartyUserId;
        }
        if (!Utils::isUnset($request->useAnonymousTbAccount)) {
            $query['UseAnonymousTbAccount'] = $request->useAnonymousTbAccount;
        }
        $body = [];
        if (!Utils::isUnset($request->addressInfo)) {
            $body['AddressInfo'] = $request->addressInfo;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateAddress',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateAddressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateAddressRequest $request
     *
     * @return UpdateAddressResponse
     */
    public function updateAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAddressWithOptions($request, $runtime);
    }

    /**
     * @param ValidateTaobaoAccountRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ValidateTaobaoAccountResponse
     */
    public function validateTaobaoAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->bizUid)) {
            $query['BizUid'] = $request->bizUid;
        }
        if (!Utils::isUnset($request->extJson)) {
            $query['ExtJson'] = $request->extJson;
        }
        if (!Utils::isUnset($request->mobileNo)) {
            $query['MobileNo'] = $request->mobileNo;
        }
        if (!Utils::isUnset($request->tbUserNick)) {
            $query['TbUserNick'] = $request->tbUserNick;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ValidateTaobaoAccount',
            'version'     => '2018-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ValidateTaobaoAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ValidateTaobaoAccountRequest $request
     *
     * @return ValidateTaobaoAccountResponse
     */
    public function validateTaobaoAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->validateTaobaoAccountWithOptions($request, $runtime);
    }
}
