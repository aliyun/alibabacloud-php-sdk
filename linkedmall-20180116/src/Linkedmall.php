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
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\BatchRegistAnonymousTbAccountRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\BatchRegistAnonymousTbAccountResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\CancelOrderRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\CancelOrderResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\CancelRefundRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\CancelRefundResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\ConfirmDisburseRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\ConfirmDisburseResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\CreateMovieTicketOrderRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\CreateMovieTicketOrderResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\CreateOrderRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\CreateOrderResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\CreateOrderV2Request;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\CreateOrderV2Response;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\CreatePayUrlRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\CreatePayUrlResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\CreateSettleConfirmRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\CreateSettleConfirmResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\CreateVirtualProductOrderRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\CreateVirtualProductOrderResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\CreateWithholdTradeRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\CreateWithholdTradeResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\DeleteBizItemsRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\DeleteBizItemsResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\DeleteItemLimitRuleRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\DeleteItemLimitRuleResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\EnableOrderRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\EnableOrderResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\ExecuteNodeRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\ExecuteNodeResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\GetActivityGameInfoRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\GetActivityGameInfoResponse;
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
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\GrantPromotionToUserRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\GrantPromotionToUserResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\InitApplyRefundRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\InitApplyRefundResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\ListItemActivitiesRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\ListItemActivitiesResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\ListItemActivitiesShrinkRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\ListUserGameProcessRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\ListUserGameProcessResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\ModifyBasicAndBizItemsRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\ModifyBasicAndBizItemsResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\ModifyBizItemsRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\ModifyBizItemsResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\ModifyItemLimitRuleRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\ModifyItemLimitRuleResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\ModifyOrderDeliveryAddressRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\ModifyOrderDeliveryAddressResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\NotifyPayOrderStatusRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\NotifyPayOrderStatusResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\NotifyWithholdFundRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\NotifyWithholdFundResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\PushUserGameProcessRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\PushUserGameProcessResponse;
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
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryBizItemsRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryBizItemsResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryBizItemsWithActivityRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryBizItemsWithActivityResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryBizItemsWithActivityShrinkRequest;
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
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryOrderLogisticsRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryOrderLogisticsResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryRefundApplicationDetailRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryRefundApplicationDetailResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryStatementsRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryStatementsResponse;
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
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryUserGameProcessRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryUserGameProcessResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryWithholdTradeRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryWithholdTradeResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\RefundOrderRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\RefundOrderResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\RefundPointRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\RefundPointResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\RefuseMerchantSyncTaskRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\RefuseMerchantSyncTaskResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\RegistAnonymousTbAccountRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\RegistAnonymousTbAccountResponse;
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
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\RepayForPayUrlRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\RepayForPayUrlResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\RepayOrderRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\RepayOrderResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\ReserveMovieSeatRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\ReserveMovieSeatResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\SettleOrderRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\SettleOrderResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\StartUserGameRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\StartUserGameResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\SubmitReturnGoodLogisticsRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\SubmitReturnGoodLogisticsResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\SyncMerchantInfoRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\SyncMerchantInfoResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\UnsignWithholdAgreementRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\UnsignWithholdAgreementResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\UpdateAddressRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\UpdateAddressResponse;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\ValidateTaobaoAccountRequest;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\ValidateTaobaoAccountResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddAddressResponse::fromMap($this->doRPCRequest('AddAddress', '2018-01-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddItemLimitRuleResponse::fromMap($this->doRPCRequest('AddItemLimitRule', '2018-01-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddItemToSubBizsResponse::fromMap($this->doRPCRequest('AddItemToSubBizs', '2018-01-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddSupplierNewItemsResponse::fromMap($this->doRPCRequest('AddSupplierNewItems', '2018-01-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ApplyRefundResponse::fromMap($this->doRPCRequest('ApplyRefund', '2018-01-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param BatchRegistAnonymousTbAccountRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return BatchRegistAnonymousTbAccountResponse
     */
    public function batchRegistAnonymousTbAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return BatchRegistAnonymousTbAccountResponse::fromMap($this->doRPCRequest('BatchRegistAnonymousTbAccount', '2018-01-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CancelOrderResponse::fromMap($this->doRPCRequest('CancelOrder', '2018-01-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param CancelRefundRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CancelRefundResponse
     */
    public function cancelRefundWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CancelRefundResponse::fromMap($this->doRPCRequest('CancelRefund', '2018-01-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ConfirmDisburseRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ConfirmDisburseResponse
     */
    public function confirmDisburseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ConfirmDisburseResponse::fromMap($this->doRPCRequest('ConfirmDisburse', '2018-01-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
            'query' => $query,
        ]);

        return CreateMovieTicketOrderResponse::fromMap($this->doRPCRequest('CreateMovieTicketOrder', '2018-01-16', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateOrderResponse::fromMap($this->doRPCRequest('CreateOrder', '2018-01-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param CreateOrderV2Request $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateOrderV2Response
     */
    public function createOrderV2WithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateOrderV2Response::fromMap($this->doRPCRequest('CreateOrderV2', '2018-01-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param CreatePayUrlRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CreatePayUrlResponse
     */
    public function createPayUrlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreatePayUrlResponse::fromMap($this->doRPCRequest('CreatePayUrl', '2018-01-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateSettleConfirmResponse::fromMap($this->doRPCRequest('CreateSettleConfirm', '2018-01-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateVirtualProductOrderResponse::fromMap($this->doRPCRequest('CreateVirtualProductOrder', '2018-01-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateWithholdTradeResponse::fromMap($this->doRPCRequest('CreateWithholdTrade', '2018-01-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DeleteBizItemsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteBizItemsResponse
     */
    public function deleteBizItemsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteBizItemsResponse::fromMap($this->doRPCRequest('DeleteBizItems', '2018-01-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteItemLimitRuleResponse::fromMap($this->doRPCRequest('DeleteItemLimitRule', '2018-01-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param EnableOrderRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return EnableOrderResponse
     */
    public function enableOrderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return EnableOrderResponse::fromMap($this->doRPCRequest('EnableOrder', '2018-01-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ExecuteNodeRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ExecuteNodeResponse
     */
    public function executeNodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ExecuteNodeResponse::fromMap($this->doRPCRequest('ExecuteNode', '2018-01-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param GetActivityGameInfoRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetActivityGameInfoResponse
     */
    public function getActivityGameInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return GetActivityGameInfoResponse::fromMap($this->doRPCRequest('GetActivityGameInfo', '2018-01-16', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetCategoryChainResponse::fromMap($this->doRPCRequest('GetCategoryChain', '2018-01-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetCategoryListResponse::fromMap($this->doRPCRequest('GetCategoryList', '2018-01-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetCustomServiceUrlResponse::fromMap($this->doRPCRequest('GetCustomServiceUrl', '2018-01-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
            'query' => $query,
        ]);

        return GetGuidePageResponse::fromMap($this->doRPCRequest('GetGuidePage', '2018-01-16', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetItemPromotionResponse::fromMap($this->doRPCRequest('GetItemPromotion', '2018-01-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetLoginPageResponse::fromMap($this->doRPCRequest('GetLoginPage', '2018-01-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetSwitchUrlResponse::fromMap($this->doRPCRequest('GetSwitchUrl', '2018-01-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetUserInfoResponse::fromMap($this->doRPCRequest('GetUserInfo', '2018-01-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
            'query' => $query,
        ]);

        return GetUserTokenPageResponse::fromMap($this->doRPCRequest('GetUserTokenPage', '2018-01-16', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetWithholdSignPageUrlResponse::fromMap($this->doRPCRequest('GetWithholdSignPageUrl', '2018-01-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param GrantPromotionToUserRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GrantPromotionToUserResponse
     */
    public function grantPromotionToUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GrantPromotionToUserResponse::fromMap($this->doRPCRequest('GrantPromotionToUser', '2018-01-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param InitApplyRefundRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return InitApplyRefundResponse
     */
    public function initApplyRefundWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return InitApplyRefundResponse::fromMap($this->doRPCRequest('InitApplyRefund', '2018-01-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListItemActivitiesResponse::fromMap($this->doRPCRequest('ListItemActivities', '2018-01-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
            'query' => $query,
        ]);

        return ListUserGameProcessResponse::fromMap($this->doRPCRequest('ListUserGameProcess', '2018-01-16', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
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
     * @param ModifyBasicAndBizItemsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ModifyBasicAndBizItemsResponse
     */
    public function modifyBasicAndBizItemsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyBasicAndBizItemsResponse::fromMap($this->doRPCRequest('ModifyBasicAndBizItems', '2018-01-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ModifyBizItemsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ModifyBizItemsResponse
     */
    public function modifyBizItemsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyBizItemsResponse::fromMap($this->doRPCRequest('ModifyBizItems', '2018-01-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyItemLimitRuleResponse::fromMap($this->doRPCRequest('ModifyItemLimitRule', '2018-01-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyOrderDeliveryAddressResponse::fromMap($this->doRPCRequest('ModifyOrderDeliveryAddress', '2018-01-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param NotifyPayOrderStatusRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return NotifyPayOrderStatusResponse
     */
    public function notifyPayOrderStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return NotifyPayOrderStatusResponse::fromMap($this->doRPCRequest('NotifyPayOrderStatus', '2018-01-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return NotifyWithholdFundResponse::fromMap($this->doRPCRequest('NotifyWithholdFund', '2018-01-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param PushUserGameProcessRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return PushUserGameProcessResponse
     */
    public function pushUserGameProcessWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return PushUserGameProcessResponse::fromMap($this->doRPCRequest('PushUserGameProcess', '2018-01-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryActivityItemsResponse::fromMap($this->doRPCRequest('QueryActivityItems', '2018-01-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryAddressResponse::fromMap($this->doRPCRequest('QueryAddress', '2018-01-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryAddressDetailResponse::fromMap($this->doRPCRequest('QueryAddressDetail', '2018-01-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryAddressListResponse::fromMap($this->doRPCRequest('QueryAddressList', '2018-01-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryAdvertisementSettleInfoResponse::fromMap($this->doRPCRequest('QueryAdvertisementSettleInfo', '2018-01-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryAgreementResponse::fromMap($this->doRPCRequest('QueryAgreement', '2018-01-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryAllCinemasResponse::fromMap($this->doRPCRequest('QueryAllCinemas', '2018-01-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryAllCitiesResponse::fromMap($this->doRPCRequest('QueryAllCities', '2018-01-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryBatchRegistAnonymousTbAccountResultResponse::fromMap($this->doRPCRequest('QueryBatchRegistAnonymousTbAccountResult', '2018-01-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryBestSession4ItemsResponse::fromMap($this->doRPCRequest('QueryBestSession4Items', '2018-01-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryBizItemListResponse::fromMap($this->doRPCRequest('QueryBizItemList', '2018-01-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param QueryBizItemsRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return QueryBizItemsResponse
     */
    public function queryBizItemsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryBizItemsResponse::fromMap($this->doRPCRequest('QueryBizItems', '2018-01-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
            'query' => $query,
        ]);

        return QueryBizItemsWithActivityResponse::fromMap($this->doRPCRequest('QueryBizItemsWithActivity', '2018-01-16', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
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
     * @param QueryGuideItemGroupRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return QueryGuideItemGroupResponse
     */
    public function queryGuideItemGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryGuideItemGroupResponse::fromMap($this->doRPCRequest('QueryGuideItemGroup', '2018-01-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
            'query' => $query,
        ]);

        return QueryGuideItemGroupWithOutInventoryResponse::fromMap($this->doRPCRequest('QueryGuideItemGroupWithOutInventory', '2018-01-16', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryHotMoviesResponse::fromMap($this->doRPCRequest('QueryHotMovies', '2018-01-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
            'query' => $query,
        ]);

        return QueryInventoryOfItemsInBizItemGroupResponse::fromMap($this->doRPCRequest('QueryInventoryOfItemsInBizItemGroup', '2018-01-16', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryItemDetailResponse::fromMap($this->doRPCRequest('QueryItemDetail', '2018-01-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryItemDetailInnerResponse::fromMap($this->doRPCRequest('QueryItemDetailInner', '2018-01-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryItemDetailTeaResponse::fromMap($this->doRPCRequest('QueryItemDetailTea', '2018-01-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
            'query' => $query,
        ]);

        return QueryItemInSubBizsResponse::fromMap($this->doRPCRequest('QueryItemInSubBizs', '2018-01-16', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryItemInventoryResponse::fromMap($this->doRPCRequest('QueryItemInventory', '2018-01-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param QueryLogisticsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return QueryLogisticsResponse
     */
    public function queryLogisticsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryLogisticsResponse::fromMap($this->doRPCRequest('QueryLogistics', '2018-01-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryMediaSettleInfoResponse::fromMap($this->doRPCRequest('QueryMediaSettleInfo', '2018-01-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryMessagesResponse::fromMap($this->doRPCRequest('QueryMessages', '2018-01-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryMovieCommentsResponse::fromMap($this->doRPCRequest('QueryMovieComments', '2018-01-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryMovieSchedulesResponse::fromMap($this->doRPCRequest('QueryMovieSchedules', '2018-01-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryMovieSeatsResponse::fromMap($this->doRPCRequest('QueryMovieSeats', '2018-01-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
            'query' => $query,
        ]);

        return QueryMovieTicketsResponse::fromMap($this->doRPCRequest('QueryMovieTickets', '2018-01-16', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryOrderAndPaymentListResponse::fromMap($this->doRPCRequest('QueryOrderAndPaymentList', '2018-01-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param QueryOrderCommissionRateRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return QueryOrderCommissionRateResponse
     */
    public function queryOrderCommissionRateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryOrderCommissionRateResponse::fromMap($this->doRPCRequest('QueryOrderCommissionRate', '2018-01-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryOrderDetailInnerResponse::fromMap($this->doRPCRequest('QueryOrderDetailInner', '2018-01-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryOrderIdByPayIdResponse::fromMap($this->doRPCRequest('QueryOrderIdByPayId', '2018-01-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
            'query' => $query,
        ]);

        return QueryOrderInfoAfterSaleResponse::fromMap($this->doRPCRequest('QueryOrderInfoAfterSale', '2018-01-16', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryOrderItemInfoByPaymentIdForAiZhanYouResponse::fromMap($this->doRPCRequest('QueryOrderItemInfoByPaymentIdForAiZhanYou', '2018-01-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryOrderListResponse::fromMap($this->doRPCRequest('QueryOrderList', '2018-01-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param QueryOrderLogisticsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return QueryOrderLogisticsResponse
     */
    public function queryOrderLogisticsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryOrderLogisticsResponse::fromMap($this->doRPCRequest('QueryOrderLogistics', '2018-01-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param QueryRefundApplicationDetailRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return QueryRefundApplicationDetailResponse
     */
    public function queryRefundApplicationDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryRefundApplicationDetailResponse::fromMap($this->doRPCRequest('QueryRefundApplicationDetail', '2018-01-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param QueryStatementsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return QueryStatementsResponse
     */
    public function queryStatementsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryStatementsResponse::fromMap($this->doRPCRequest('QueryStatements', '2018-01-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param QueryUnfinishedActivitiesRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return QueryUnfinishedActivitiesResponse
     */
    public function queryUnfinishedActivitiesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryUnfinishedActivitiesResponse::fromMap($this->doRPCRequest('QueryUnfinishedActivities', '2018-01-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryUnfinishedSessionsResponse::fromMap($this->doRPCRequest('QueryUnfinishedSessions', '2018-01-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryUnfinishedSessions4ItemsResponse::fromMap($this->doRPCRequest('QueryUnfinishedSessions4Items', '2018-01-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryUpcomingMoviesResponse::fromMap($this->doRPCRequest('QueryUpcomingMovies', '2018-01-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param QueryUserGameProcessRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return QueryUserGameProcessResponse
     */
    public function queryUserGameProcessWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return QueryUserGameProcessResponse::fromMap($this->doRPCRequest('QueryUserGameProcess', '2018-01-16', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
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
     * @param QueryWithholdTradeRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return QueryWithholdTradeResponse
     */
    public function queryWithholdTradeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryWithholdTradeResponse::fromMap($this->doRPCRequest('QueryWithholdTrade', '2018-01-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param RefundOrderRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return RefundOrderResponse
     */
    public function refundOrderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RefundOrderResponse::fromMap($this->doRPCRequest('RefundOrder', '2018-01-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RefundPointResponse::fromMap($this->doRPCRequest('RefundPoint', '2018-01-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param RefuseMerchantSyncTaskRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return RefuseMerchantSyncTaskResponse
     */
    public function refuseMerchantSyncTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RefuseMerchantSyncTaskResponse::fromMap($this->doRPCRequest('RefuseMerchantSyncTask', '2018-01-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RegistAnonymousTbAccountResponse::fromMap($this->doRPCRequest('RegistAnonymousTbAccount', '2018-01-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ReleaseMovieSeatRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ReleaseMovieSeatResponse
     */
    public function releaseMovieSeatWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ReleaseMovieSeatResponse::fromMap($this->doRPCRequest('ReleaseMovieSeat', '2018-01-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RemoveAddressResponse::fromMap($this->doRPCRequest('RemoveAddress', '2018-01-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RemoveMessagesResponse::fromMap($this->doRPCRequest('RemoveMessages', '2018-01-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RenderH5OrderResponse::fromMap($this->doRPCRequest('RenderH5Order', '2018-01-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RenderOrderResponse::fromMap($this->doRPCRequest('RenderOrder', '2018-01-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param RepayForPayUrlRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return RepayForPayUrlResponse
     */
    public function repayForPayUrlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RepayForPayUrlResponse::fromMap($this->doRPCRequest('RepayForPayUrl', '2018-01-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RepayOrderResponse::fromMap($this->doRPCRequest('RepayOrder', '2018-01-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ReserveMovieSeatRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ReserveMovieSeatResponse
     */
    public function reserveMovieSeatWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ReserveMovieSeatResponse::fromMap($this->doRPCRequest('ReserveMovieSeat', '2018-01-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SettleOrderResponse::fromMap($this->doRPCRequest('SettleOrder', '2018-01-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param StartUserGameRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return StartUserGameResponse
     */
    public function startUserGameWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return StartUserGameResponse::fromMap($this->doRPCRequest('StartUserGame', '2018-01-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SubmitReturnGoodLogisticsResponse::fromMap($this->doRPCRequest('SubmitReturnGoodLogistics', '2018-01-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param SyncMerchantInfoRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return SyncMerchantInfoResponse
     */
    public function syncMerchantInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SyncMerchantInfoResponse::fromMap($this->doRPCRequest('SyncMerchantInfo', '2018-01-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param UnsignWithholdAgreementRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return UnsignWithholdAgreementResponse
     */
    public function unsignWithholdAgreementWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UnsignWithholdAgreementResponse::fromMap($this->doRPCRequest('UnsignWithholdAgreement', '2018-01-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateAddressResponse::fromMap($this->doRPCRequest('UpdateAddress', '2018-01-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ValidateTaobaoAccountResponse::fromMap($this->doRPCRequest('ValidateTaobaoAccount', '2018-01-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
