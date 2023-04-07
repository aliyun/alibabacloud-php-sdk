<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\AccessTokenRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\AccessTokenResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\AddInvoiceEntityHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\AddInvoiceEntityRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\AddInvoiceEntityResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\AddInvoiceEntityShrinkRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\AddressGetHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\AddressGetRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\AddressGetResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\AirportSearchHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\AirportSearchRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\AirportSearchResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\AllBaseCityInfoQueryHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\AllBaseCityInfoQueryResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ApplyAddHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ApplyAddRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ApplyAddResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ApplyAddShrinkRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ApplyApproveHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ApplyApproveRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ApplyApproveResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ApplyInvoiceTaskHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ApplyInvoiceTaskRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ApplyInvoiceTaskResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ApplyInvoiceTaskShrinkRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ApplyListQueryHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ApplyListQueryRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ApplyListQueryResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ApplyModifyHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ApplyModifyRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ApplyModifyResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ApplyModifyShrinkRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ApplyQueryHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ApplyQueryRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ApplyQueryResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\BtripBillInfoAdjustHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\BtripBillInfoAdjustRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\BtripBillInfoAdjustResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\CarApplyAddHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\CarApplyAddRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\CarApplyAddResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\CarApplyModifyHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\CarApplyModifyRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\CarApplyModifyResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\CarApplyQueryHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\CarApplyQueryRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\CarApplyQueryResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\CarBillSettlementQueryHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\CarBillSettlementQueryRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\CarBillSettlementQueryResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\CarOrderListQueryHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\CarOrderListQueryRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\CarOrderListQueryResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\CarOrderQueryHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\CarOrderQueryRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\CarOrderQueryResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\CitySearchHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\CitySearchRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\CitySearchResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\CommonApplyQueryHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\CommonApplyQueryRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\CommonApplyQueryResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\CommonApplySyncHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\CommonApplySyncRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\CommonApplySyncResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\CorpAuthLinkInfoQueryResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\CorpTokenHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\CorpTokenRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\CorpTokenResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\CostCenterDeleteHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\CostCenterDeleteRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\CostCenterDeleteResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\CostCenterModifyHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\CostCenterModifyRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\CostCenterModifyResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\CostCenterQueryHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\CostCenterQueryRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\CostCenterQueryResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\CostCenterSaveHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\CostCenterSaveRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\CostCenterSaveResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\DeleteInvoiceEntityHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\DeleteInvoiceEntityRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\DeleteInvoiceEntityResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\DeleteInvoiceEntityShrinkRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\DepartmentSaveHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\DepartmentSaveRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\DepartmentSaveResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\DepartmentSaveShrinkRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\EntityAddHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\EntityAddRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\EntityAddResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\EntityAddShrinkRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\EntityDeleteHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\EntityDeleteRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\EntityDeleteResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\EntityDeleteShrinkRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\EntitySetHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\EntitySetRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\EntitySetResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\EntitySetShrinkRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\EstimatedPriceQueryHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\EstimatedPriceQueryRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\EstimatedPriceQueryResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ExceedApplySyncHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ExceedApplySyncRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ExceedApplySyncResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightBillSettlementQueryHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightBillSettlementQueryRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightBillSettlementQueryResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightCancelOrderHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightCancelOrderRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightCancelOrderResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightCreateOrderHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightCreateOrderRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightCreateOrderResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightCreateOrderShrinkRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightExceedApplyQueryHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightExceedApplyQueryRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightExceedApplyQueryResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightItineraryScanQueryHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightItineraryScanQueryRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightItineraryScanQueryResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightListingSearchHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightListingSearchRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightListingSearchResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderDetailInfoHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderDetailInfoRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderDetailInfoResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderListQueryHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderListQueryRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderListQueryResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderQueryHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderQueryRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderQueryResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOtaSearchHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOtaSearchRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOtaSearchResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightPayOrderHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightPayOrderRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightPayOrderResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightPayOrderShrinkRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightRefundApplyHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightRefundApplyRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightRefundApplyResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightRefundApplyShrinkRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightRefundDetailHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightRefundDetailRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightRefundDetailResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightRefundPreCalHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightRefundPreCalRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightRefundPreCalResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightRefundPreCalShrinkRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightSearchListHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightSearchListRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightSearchListResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelBillSettlementQueryHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelBillSettlementQueryRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelBillSettlementQueryResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelExceedApplyQueryHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelExceedApplyQueryRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelExceedApplyQueryResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelGoodsQueryHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelGoodsQueryRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelGoodsQueryResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelIndexInfoHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelIndexInfoRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelIndexInfoResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderCancelHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderCancelRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderCancelResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderCreateHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderCreateRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderCreateResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderCreateShrinkRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderDetailInfoHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderDetailInfoRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderDetailInfoResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderListQueryHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderListQueryRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderListQueryResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderPayHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderPayRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderPayResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderPreValidateHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderPreValidateRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderPreValidateResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderPreValidateShrinkRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderQueryHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderQueryRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderQueryResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelRoomInfoHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelRoomInfoRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelRoomInfoResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelRoomInfoShrinkRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelSearchHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelSearchRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelSearchResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelSearchShrinkRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelStaticInfoHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelStaticInfoRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelStaticInfoResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelStaticInfoShrinkRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IeFlightBillSettlementQueryHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IeFlightBillSettlementQueryRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IeFlightBillSettlementQueryResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\InsInvoiceScanQueryHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\InsInvoiceScanQueryRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\InsInvoiceScanQueryResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\InvoiceAddHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\InvoiceAddRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\InvoiceAddResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\InvoiceDeleteHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\InvoiceDeleteRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\InvoiceDeleteResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\InvoiceModifyHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\InvoiceModifyRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\InvoiceModifyResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\InvoiceRuleAddHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\InvoiceRuleAddRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\InvoiceRuleAddResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\InvoiceRuleAddShrinkRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\InvoiceRuleDeleteHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\InvoiceRuleDeleteRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\InvoiceRuleDeleteResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\InvoiceRuleDeleteShrinkRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\InvoiceRuleSaveHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\InvoiceRuleSaveRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\InvoiceRuleSaveResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\InvoiceRuleSaveShrinkRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\InvoiceSearchHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\InvoiceSearchRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\InvoiceSearchResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IsvRuleSaveHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IsvRuleSaveRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IsvRuleSaveResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IsvUserSaveHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IsvUserSaveRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IsvUserSaveResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IsvUserSaveShrinkRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\MonthBillConfirmHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\MonthBillConfirmRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\MonthBillConfirmResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\MonthBillGetHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\MonthBillGetRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\MonthBillGetResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ProjectAddHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ProjectAddRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ProjectAddResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ProjectDeleteHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ProjectDeleteRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ProjectDeleteResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ProjectModifyHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ProjectModifyRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ProjectModifyResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\QueryReimbursementOrderHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\QueryReimbursementOrderRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\QueryReimbursementOrderResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\SyncSingleUserHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\SyncSingleUserRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\SyncSingleUserResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\SyncSingleUserShrinkRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\SyncThirdUserMappingHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\SyncThirdUserMappingRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\SyncThirdUserMappingResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TicketChangingApplyHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TicketChangingApplyRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TicketChangingApplyResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TicketChangingApplyShrinkRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TicketChangingCancelHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TicketChangingCancelRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TicketChangingCancelResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TicketChangingDetailHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TicketChangingDetailRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TicketChangingDetailResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TicketChangingEnquiryHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TicketChangingEnquiryRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TicketChangingEnquiryResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TicketChangingFlightListHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TicketChangingFlightListRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TicketChangingFlightListResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TicketChangingFlightListShrinkRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TicketChangingPayHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TicketChangingPayRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TicketChangingPayResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TicketChangingPayShrinkRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainBillSettlementQueryHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainBillSettlementQueryRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainBillSettlementQueryResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainExceedApplyQueryHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainExceedApplyQueryRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainExceedApplyQueryResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainOrderListQueryHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainOrderListQueryRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainOrderListQueryResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainOrderQueryHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainOrderQueryRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainOrderQueryResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainOrderQueryV2Headers;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainOrderQueryV2Request;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainOrderQueryV2Response;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainStationSearchHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainStationSearchRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainStationSearchResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainTicketScanQueryHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainTicketScanQueryRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainTicketScanQueryResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\UserQueryHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\UserQueryRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\UserQueryResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\VatInvoiceScanQueryHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\VatInvoiceScanQueryRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\VatInvoiceScanQueryResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\WaitApplyInvoiceTaskDetailQueryHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\WaitApplyInvoiceTaskDetailQueryRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\WaitApplyInvoiceTaskDetailQueryResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class BtripOpen extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('btripopen', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param AccessTokenRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return AccessTokenResponse
     */
    public function accessTokenWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appKey)) {
            $query['app_key'] = $request->appKey;
        }
        if (!Utils::isUnset($request->appSecret)) {
            $query['app_secret'] = $request->appSecret;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AccessToken',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/btrip-open-auth/v1/access-token/action/take',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return AccessTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AccessTokenRequest $request
     *
     * @return AccessTokenResponse
     */
    public function accessToken($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->accessTokenWithOptions($request, $headers, $runtime);
    }

    /**
     * @param AddInvoiceEntityRequest $tmpReq
     * @param AddInvoiceEntityHeaders $headers
     * @param RuntimeOptions          $runtime
     *
     * @return AddInvoiceEntityResponse
     */
    public function addInvoiceEntityWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new AddInvoiceEntityShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->entities)) {
            $request->entitiesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->entities, 'entities', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->entitiesShrink)) {
            $body['entities'] = $request->entitiesShrink;
        }
        if (!Utils::isUnset($request->thirdPartId)) {
            $body['third_part_id'] = $request->thirdPartId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsBtripCorpToken)) {
            $realHeaders['x-acs-btrip-corp-token'] = Utils::toJSONString($headers->xAcsBtripCorpToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AddInvoiceEntity',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/invoice/v1/entities',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddInvoiceEntityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddInvoiceEntityRequest $request
     *
     * @return AddInvoiceEntityResponse
     */
    public function addInvoiceEntity($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new AddInvoiceEntityHeaders([]);

        return $this->addInvoiceEntityWithOptions($request, $headers, $runtime);
    }

    /**
     * @param AddressGetRequest $request
     * @param AddressGetHeaders $headers
     * @param RuntimeOptions    $runtime
     *
     * @return AddressGetResponse
     */
    public function addressGetWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->actionType)) {
            $query['action_type'] = $request->actionType;
        }
        if (!Utils::isUnset($request->itineraryId)) {
            $query['itinerary_id'] = $request->itineraryId;
        }
        if (!Utils::isUnset($request->phone)) {
            $query['phone'] = $request->phone;
        }
        if (!Utils::isUnset($request->subCorpId)) {
            $query['sub_corp_id'] = $request->subCorpId;
        }
        if (!Utils::isUnset($request->type)) {
            $query['type'] = $request->type;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['user_id'] = $request->userId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsBtripSoCorpToken)) {
            $realHeaders['x-acs-btrip-so-corp-token'] = Utils::toJSONString($headers->xAcsBtripSoCorpToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddressGet',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/open/v1/address',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return AddressGetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddressGetRequest $request
     *
     * @return AddressGetResponse
     */
    public function addressGet($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new AddressGetHeaders([]);

        return $this->addressGetWithOptions($request, $headers, $runtime);
    }

    /**
     * @param AirportSearchRequest $request
     * @param AirportSearchHeaders $headers
     * @param RuntimeOptions       $runtime
     *
     * @return AirportSearchResponse
     */
    public function airportSearchWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->keyword)) {
            $query['keyword'] = $request->keyword;
        }
        if (!Utils::isUnset($request->type)) {
            $query['type'] = $request->type;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsBtripSoCorpToken)) {
            $realHeaders['x-acs-btrip-so-corp-token'] = Utils::toJSONString($headers->xAcsBtripSoCorpToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AirportSearch',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/city/v1/airport',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return AirportSearchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AirportSearchRequest $request
     *
     * @return AirportSearchResponse
     */
    public function airportSearch($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new AirportSearchHeaders([]);

        return $this->airportSearchWithOptions($request, $headers, $runtime);
    }

    /**
     * @param AllBaseCityInfoQueryHeaders $headers
     * @param RuntimeOptions              $runtime
     *
     * @return AllBaseCityInfoQueryResponse
     */
    public function allBaseCityInfoQueryWithOptions($headers, $runtime)
    {
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsBtripAccessToken)) {
            $realHeaders['x-acs-btrip-access-token'] = Utils::toJSONString($headers->xAcsBtripAccessToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
        ]);
        $params = new Params([
            'action'      => 'AllBaseCityInfoQuery',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/city/v1/code',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return AllBaseCityInfoQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return AllBaseCityInfoQueryResponse
     */
    public function allBaseCityInfoQuery()
    {
        $runtime = new RuntimeOptions([]);
        $headers = new AllBaseCityInfoQueryHeaders([]);

        return $this->allBaseCityInfoQueryWithOptions($headers, $runtime);
    }

    /**
     * @param ApplyAddRequest $tmpReq
     * @param ApplyAddHeaders $headers
     * @param RuntimeOptions  $runtime
     *
     * @return ApplyAddResponse
     */
    public function applyAddWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ApplyAddShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->externalTravelerList)) {
            $request->externalTravelerListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->externalTravelerList, 'external_traveler_list', 'json');
        }
        if (!Utils::isUnset($tmpReq->externalTravelerStandard)) {
            $request->externalTravelerStandardShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->externalTravelerStandard, 'external_traveler_standard', 'json');
        }
        if (!Utils::isUnset($tmpReq->hotelShare)) {
            $request->hotelShareShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->hotelShare, 'hotel_share', 'json');
        }
        if (!Utils::isUnset($tmpReq->itineraryList)) {
            $request->itineraryListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->itineraryList, 'itinerary_list', 'json');
        }
        if (!Utils::isUnset($tmpReq->itinerarySetList)) {
            $request->itinerarySetListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->itinerarySetList, 'itinerary_set_list', 'json');
        }
        if (!Utils::isUnset($tmpReq->travelerList)) {
            $request->travelerListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->travelerList, 'traveler_list', 'json');
        }
        if (!Utils::isUnset($tmpReq->travelerStandard)) {
            $request->travelerStandardShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->travelerStandard, 'traveler_standard', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->internationalFlightCabins)) {
            $query['international_flight_cabins'] = $request->internationalFlightCabins;
        }
        $body = [];
        if (!Utils::isUnset($request->budget)) {
            $body['budget'] = $request->budget;
        }
        if (!Utils::isUnset($request->budgetMerge)) {
            $body['budget_merge'] = $request->budgetMerge;
        }
        if (!Utils::isUnset($request->corpName)) {
            $body['corp_name'] = $request->corpName;
        }
        if (!Utils::isUnset($request->departId)) {
            $body['depart_id'] = $request->departId;
        }
        if (!Utils::isUnset($request->departName)) {
            $body['depart_name'] = $request->departName;
        }
        if (!Utils::isUnset($request->extendField)) {
            $body['extend_field'] = $request->extendField;
        }
        if (!Utils::isUnset($request->externalTravelerListShrink)) {
            $body['external_traveler_list'] = $request->externalTravelerListShrink;
        }
        if (!Utils::isUnset($request->externalTravelerStandardShrink)) {
            $body['external_traveler_standard'] = $request->externalTravelerStandardShrink;
        }
        if (!Utils::isUnset($request->flightBudget)) {
            $body['flight_budget'] = $request->flightBudget;
        }
        if (!Utils::isUnset($request->hotelBudget)) {
            $body['hotel_budget'] = $request->hotelBudget;
        }
        if (!Utils::isUnset($request->hotelShareShrink)) {
            $body['hotel_share'] = $request->hotelShareShrink;
        }
        if (!Utils::isUnset($request->itineraryListShrink)) {
            $body['itinerary_list'] = $request->itineraryListShrink;
        }
        if (!Utils::isUnset($request->itineraryRule)) {
            $body['itinerary_rule'] = $request->itineraryRule;
        }
        if (!Utils::isUnset($request->itinerarySetListShrink)) {
            $body['itinerary_set_list'] = $request->itinerarySetListShrink;
        }
        if (!Utils::isUnset($request->limitTraveler)) {
            $body['limit_traveler'] = $request->limitTraveler;
        }
        if (!Utils::isUnset($request->status)) {
            $body['status'] = $request->status;
        }
        if (!Utils::isUnset($request->thirdpartApplyId)) {
            $body['thirdpart_apply_id'] = $request->thirdpartApplyId;
        }
        if (!Utils::isUnset($request->thirdpartBusinessId)) {
            $body['thirdpart_business_id'] = $request->thirdpartBusinessId;
        }
        if (!Utils::isUnset($request->thirdpartDepartId)) {
            $body['thirdpart_depart_id'] = $request->thirdpartDepartId;
        }
        if (!Utils::isUnset($request->togetherBookRule)) {
            $body['together_book_rule'] = $request->togetherBookRule;
        }
        if (!Utils::isUnset($request->trainBudget)) {
            $body['train_budget'] = $request->trainBudget;
        }
        if (!Utils::isUnset($request->travelerListShrink)) {
            $body['traveler_list'] = $request->travelerListShrink;
        }
        if (!Utils::isUnset($request->travelerStandardShrink)) {
            $body['traveler_standard'] = $request->travelerStandardShrink;
        }
        if (!Utils::isUnset($request->tripCause)) {
            $body['trip_cause'] = $request->tripCause;
        }
        if (!Utils::isUnset($request->tripDay)) {
            $body['trip_day'] = $request->tripDay;
        }
        if (!Utils::isUnset($request->tripTitle)) {
            $body['trip_title'] = $request->tripTitle;
        }
        if (!Utils::isUnset($request->type)) {
            $body['type'] = $request->type;
        }
        if (!Utils::isUnset($request->unionNo)) {
            $body['union_no'] = $request->unionNo;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['user_id'] = $request->userId;
        }
        if (!Utils::isUnset($request->userName)) {
            $body['user_name'] = $request->userName;
        }
        if (!Utils::isUnset($request->vehicleBudget)) {
            $body['vehicle_budget'] = $request->vehicleBudget;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsBtripSoCorpToken)) {
            $realHeaders['x-acs-btrip-so-corp-token'] = Utils::toJSONString($headers->xAcsBtripSoCorpToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ApplyAdd',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/apply/v1/biz-trip',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ApplyAddResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ApplyAddRequest $request
     *
     * @return ApplyAddResponse
     */
    public function applyAdd($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ApplyAddHeaders([]);

        return $this->applyAddWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ApplyApproveRequest $request
     * @param ApplyApproveHeaders $headers
     * @param RuntimeOptions      $runtime
     *
     * @return ApplyApproveResponse
     */
    public function applyApproveWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->applyId)) {
            $body['apply_id'] = $request->applyId;
        }
        if (!Utils::isUnset($request->note)) {
            $body['note'] = $request->note;
        }
        if (!Utils::isUnset($request->operateTime)) {
            $body['operate_time'] = $request->operateTime;
        }
        if (!Utils::isUnset($request->status)) {
            $body['status'] = $request->status;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['user_id'] = $request->userId;
        }
        if (!Utils::isUnset($request->userName)) {
            $body['user_name'] = $request->userName;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsBtripSoCorpToken)) {
            $realHeaders['x-acs-btrip-so-corp-token'] = Utils::toJSONString($headers->xAcsBtripSoCorpToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ApplyApprove',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/apply/v1/biz-trip/action/approve',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ApplyApproveResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ApplyApproveRequest $request
     *
     * @return ApplyApproveResponse
     */
    public function applyApprove($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ApplyApproveHeaders([]);

        return $this->applyApproveWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ApplyInvoiceTaskRequest $tmpReq
     * @param ApplyInvoiceTaskHeaders $headers
     * @param RuntimeOptions          $runtime
     *
     * @return ApplyInvoiceTaskResponse
     */
    public function applyInvoiceTaskWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ApplyInvoiceTaskShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->invoiceTaskList)) {
            $request->invoiceTaskListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->invoiceTaskList, 'invoice_task_list', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->billDate)) {
            $body['bill_date'] = $request->billDate;
        }
        if (!Utils::isUnset($request->invoiceTaskListShrink)) {
            $body['invoice_task_list'] = $request->invoiceTaskListShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsBtripSoCorpToken)) {
            $realHeaders['x-acs-btrip-so-corp-token'] = Utils::toJSONString($headers->xAcsBtripSoCorpToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ApplyInvoiceTask',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/invoice/v1/apply-invoice-task',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ApplyInvoiceTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ApplyInvoiceTaskRequest $request
     *
     * @return ApplyInvoiceTaskResponse
     */
    public function applyInvoiceTask($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ApplyInvoiceTaskHeaders([]);

        return $this->applyInvoiceTaskWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ApplyListQueryRequest $request
     * @param ApplyListQueryHeaders $headers
     * @param RuntimeOptions        $runtime
     *
     * @return ApplyListQueryResponse
     */
    public function applyListQueryWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->allApply)) {
            $query['all_apply'] = $request->allApply;
        }
        if (!Utils::isUnset($request->departId)) {
            $query['depart_id'] = $request->departId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['end_time'] = $request->endTime;
        }
        if (!Utils::isUnset($request->gmtModified)) {
            $query['gmt_modified'] = $request->gmtModified;
        }
        if (!Utils::isUnset($request->onlyShangLvApply)) {
            $query['only_shang_lv_apply'] = $request->onlyShangLvApply;
        }
        if (!Utils::isUnset($request->page)) {
            $query['page'] = $request->page;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['page_size'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['start_time'] = $request->startTime;
        }
        if (!Utils::isUnset($request->type)) {
            $query['type'] = $request->type;
        }
        if (!Utils::isUnset($request->unionNo)) {
            $query['union_no'] = $request->unionNo;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['user_id'] = $request->userId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsBtripSoCorpToken)) {
            $realHeaders['x-acs-btrip-so-corp-token'] = Utils::toJSONString($headers->xAcsBtripSoCorpToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ApplyListQuery',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/apply/v1/biz-trips',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ApplyListQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ApplyListQueryRequest $request
     *
     * @return ApplyListQueryResponse
     */
    public function applyListQuery($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ApplyListQueryHeaders([]);

        return $this->applyListQueryWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ApplyModifyRequest $tmpReq
     * @param ApplyModifyHeaders $headers
     * @param RuntimeOptions     $runtime
     *
     * @return ApplyModifyResponse
     */
    public function applyModifyWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ApplyModifyShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->externalTravelerList)) {
            $request->externalTravelerListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->externalTravelerList, 'external_traveler_list', 'json');
        }
        if (!Utils::isUnset($tmpReq->externalTravelerStandard)) {
            $request->externalTravelerStandardShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->externalTravelerStandard, 'external_traveler_standard', 'json');
        }
        if (!Utils::isUnset($tmpReq->hotelShare)) {
            $request->hotelShareShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->hotelShare, 'hotel_share', 'json');
        }
        if (!Utils::isUnset($tmpReq->itineraryList)) {
            $request->itineraryListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->itineraryList, 'itinerary_list', 'json');
        }
        if (!Utils::isUnset($tmpReq->itinerarySetList)) {
            $request->itinerarySetListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->itinerarySetList, 'itinerary_set_list', 'json');
        }
        if (!Utils::isUnset($tmpReq->travelerList)) {
            $request->travelerListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->travelerList, 'traveler_list', 'json');
        }
        if (!Utils::isUnset($tmpReq->travelerStandard)) {
            $request->travelerStandardShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->travelerStandard, 'traveler_standard', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->budget)) {
            $body['budget'] = $request->budget;
        }
        if (!Utils::isUnset($request->budgetMerge)) {
            $body['budget_merge'] = $request->budgetMerge;
        }
        if (!Utils::isUnset($request->corpName)) {
            $body['corp_name'] = $request->corpName;
        }
        if (!Utils::isUnset($request->departId)) {
            $body['depart_id'] = $request->departId;
        }
        if (!Utils::isUnset($request->departName)) {
            $body['depart_name'] = $request->departName;
        }
        if (!Utils::isUnset($request->extendField)) {
            $body['extend_field'] = $request->extendField;
        }
        if (!Utils::isUnset($request->externalTravelerListShrink)) {
            $body['external_traveler_list'] = $request->externalTravelerListShrink;
        }
        if (!Utils::isUnset($request->externalTravelerStandardShrink)) {
            $body['external_traveler_standard'] = $request->externalTravelerStandardShrink;
        }
        if (!Utils::isUnset($request->flightBudget)) {
            $body['flight_budget'] = $request->flightBudget;
        }
        if (!Utils::isUnset($request->hotelBudget)) {
            $body['hotel_budget'] = $request->hotelBudget;
        }
        if (!Utils::isUnset($request->hotelShareShrink)) {
            $body['hotel_share'] = $request->hotelShareShrink;
        }
        if (!Utils::isUnset($request->itineraryListShrink)) {
            $body['itinerary_list'] = $request->itineraryListShrink;
        }
        if (!Utils::isUnset($request->itineraryRule)) {
            $body['itinerary_rule'] = $request->itineraryRule;
        }
        if (!Utils::isUnset($request->itinerarySetListShrink)) {
            $body['itinerary_set_list'] = $request->itinerarySetListShrink;
        }
        if (!Utils::isUnset($request->limitTraveler)) {
            $body['limit_traveler'] = $request->limitTraveler;
        }
        if (!Utils::isUnset($request->status)) {
            $body['status'] = $request->status;
        }
        if (!Utils::isUnset($request->thirdpartApplyId)) {
            $body['thirdpart_apply_id'] = $request->thirdpartApplyId;
        }
        if (!Utils::isUnset($request->thirdpartBusinessId)) {
            $body['thirdpart_business_id'] = $request->thirdpartBusinessId;
        }
        if (!Utils::isUnset($request->thirdpartDepartId)) {
            $body['thirdpart_depart_id'] = $request->thirdpartDepartId;
        }
        if (!Utils::isUnset($request->togetherBookRule)) {
            $body['together_book_rule'] = $request->togetherBookRule;
        }
        if (!Utils::isUnset($request->trainBudget)) {
            $body['train_budget'] = $request->trainBudget;
        }
        if (!Utils::isUnset($request->travelerListShrink)) {
            $body['traveler_list'] = $request->travelerListShrink;
        }
        if (!Utils::isUnset($request->travelerStandardShrink)) {
            $body['traveler_standard'] = $request->travelerStandardShrink;
        }
        if (!Utils::isUnset($request->tripCause)) {
            $body['trip_cause'] = $request->tripCause;
        }
        if (!Utils::isUnset($request->tripDay)) {
            $body['trip_day'] = $request->tripDay;
        }
        if (!Utils::isUnset($request->tripTitle)) {
            $body['trip_title'] = $request->tripTitle;
        }
        if (!Utils::isUnset($request->unionNo)) {
            $body['union_no'] = $request->unionNo;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['user_id'] = $request->userId;
        }
        if (!Utils::isUnset($request->userName)) {
            $body['user_name'] = $request->userName;
        }
        if (!Utils::isUnset($request->vehicleBudget)) {
            $body['vehicle_budget'] = $request->vehicleBudget;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsBtripSoCorpToken)) {
            $realHeaders['x-acs-btrip-so-corp-token'] = Utils::toJSONString($headers->xAcsBtripSoCorpToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ApplyModify',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/apply/v1/biz-trip',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ApplyModifyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ApplyModifyRequest $request
     *
     * @return ApplyModifyResponse
     */
    public function applyModify($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ApplyModifyHeaders([]);

        return $this->applyModifyWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ApplyQueryRequest $request
     * @param ApplyQueryHeaders $headers
     * @param RuntimeOptions    $runtime
     *
     * @return ApplyQueryResponse
     */
    public function applyQueryWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->applyId)) {
            $query['apply_id'] = $request->applyId;
        }
        if (!Utils::isUnset($request->applyShowId)) {
            $query['apply_show_id'] = $request->applyShowId;
        }
        if (!Utils::isUnset($request->thirdpartApplyId)) {
            $query['thirdpart_apply_id'] = $request->thirdpartApplyId;
        }
        if (!Utils::isUnset($request->type)) {
            $query['type'] = $request->type;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsBtripSoCorpToken)) {
            $realHeaders['x-acs-btrip-so-corp-token'] = Utils::toJSONString($headers->xAcsBtripSoCorpToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ApplyQuery',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/apply/v1/biz-trip',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ApplyQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ApplyQueryRequest $request
     *
     * @return ApplyQueryResponse
     */
    public function applyQuery($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ApplyQueryHeaders([]);

        return $this->applyQueryWithOptions($request, $headers, $runtime);
    }

    /**
     * @param BtripBillInfoAdjustRequest $request
     * @param BtripBillInfoAdjustHeaders $headers
     * @param RuntimeOptions             $runtime
     *
     * @return BtripBillInfoAdjustResponse
     */
    public function btripBillInfoAdjustWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->primaryId)) {
            $body['primary_id'] = $request->primaryId;
        }
        if (!Utils::isUnset($request->thirdPartCostCenterId)) {
            $body['third_part_cost_center_id'] = $request->thirdPartCostCenterId;
        }
        if (!Utils::isUnset($request->thirdPartDepartmentId)) {
            $body['third_part_department_id'] = $request->thirdPartDepartmentId;
        }
        if (!Utils::isUnset($request->thirdPartInvoiceId)) {
            $body['third_part_invoice_id'] = $request->thirdPartInvoiceId;
        }
        if (!Utils::isUnset($request->thirdPartProjectId)) {
            $body['third_part_project_id'] = $request->thirdPartProjectId;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['user_id'] = $request->userId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsBtripCorpToken)) {
            $realHeaders['x-acs-btrip-corp-token'] = Utils::toJSONString($headers->xAcsBtripCorpToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'BtripBillInfoAdjust',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/bill/v1/info/action/adjust',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BtripBillInfoAdjustResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param BtripBillInfoAdjustRequest $request
     *
     * @return BtripBillInfoAdjustResponse
     */
    public function btripBillInfoAdjust($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new BtripBillInfoAdjustHeaders([]);

        return $this->btripBillInfoAdjustWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CarApplyAddRequest $request
     * @param CarApplyAddHeaders $headers
     * @param RuntimeOptions     $runtime
     *
     * @return CarApplyAddResponse
     */
    public function carApplyAddWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->cause)) {
            $body['cause'] = $request->cause;
        }
        if (!Utils::isUnset($request->city)) {
            $body['city'] = $request->city;
        }
        if (!Utils::isUnset($request->date)) {
            $body['date'] = $request->date;
        }
        if (!Utils::isUnset($request->finishedDate)) {
            $body['finished_date'] = $request->finishedDate;
        }
        if (!Utils::isUnset($request->projectCode)) {
            $body['project_code'] = $request->projectCode;
        }
        if (!Utils::isUnset($request->projectName)) {
            $body['project_name'] = $request->projectName;
        }
        if (!Utils::isUnset($request->status)) {
            $body['status'] = $request->status;
        }
        if (!Utils::isUnset($request->thirdPartApplyId)) {
            $body['third_part_apply_id'] = $request->thirdPartApplyId;
        }
        if (!Utils::isUnset($request->thirdPartCostCenterId)) {
            $body['third_part_cost_center_id'] = $request->thirdPartCostCenterId;
        }
        if (!Utils::isUnset($request->thirdPartInvoiceId)) {
            $body['third_part_invoice_id'] = $request->thirdPartInvoiceId;
        }
        if (!Utils::isUnset($request->timesTotal)) {
            $body['times_total'] = $request->timesTotal;
        }
        if (!Utils::isUnset($request->timesType)) {
            $body['times_type'] = $request->timesType;
        }
        if (!Utils::isUnset($request->timesUsed)) {
            $body['times_used'] = $request->timesUsed;
        }
        if (!Utils::isUnset($request->title)) {
            $body['title'] = $request->title;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['user_id'] = $request->userId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsBtripSoCorpToken)) {
            $realHeaders['x-acs-btrip-so-corp-token'] = Utils::toJSONString($headers->xAcsBtripSoCorpToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CarApplyAdd',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/apply/v1/car',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CarApplyAddResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CarApplyAddRequest $request
     *
     * @return CarApplyAddResponse
     */
    public function carApplyAdd($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CarApplyAddHeaders([]);

        return $this->carApplyAddWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CarApplyModifyRequest $request
     * @param CarApplyModifyHeaders $headers
     * @param RuntimeOptions        $runtime
     *
     * @return CarApplyModifyResponse
     */
    public function carApplyModifyWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->operateTime)) {
            $body['operate_time'] = $request->operateTime;
        }
        if (!Utils::isUnset($request->remark)) {
            $body['remark'] = $request->remark;
        }
        if (!Utils::isUnset($request->status)) {
            $body['status'] = $request->status;
        }
        if (!Utils::isUnset($request->thirdPartApplyId)) {
            $body['third_part_apply_id'] = $request->thirdPartApplyId;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['user_id'] = $request->userId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsBtripSoCorpToken)) {
            $realHeaders['x-acs-btrip-so-corp-token'] = Utils::toJSONString($headers->xAcsBtripSoCorpToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CarApplyModify',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/apply/v1/car',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CarApplyModifyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CarApplyModifyRequest $request
     *
     * @return CarApplyModifyResponse
     */
    public function carApplyModify($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CarApplyModifyHeaders([]);

        return $this->carApplyModifyWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CarApplyQueryRequest $request
     * @param CarApplyQueryHeaders $headers
     * @param RuntimeOptions       $runtime
     *
     * @return CarApplyQueryResponse
     */
    public function carApplyQueryWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->createdEndAt)) {
            $query['created_end_at'] = $request->createdEndAt;
        }
        if (!Utils::isUnset($request->createdStartAt)) {
            $query['created_start_at'] = $request->createdStartAt;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['page_number'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['page_size'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->thirdPartApplyId)) {
            $query['third_part_apply_id'] = $request->thirdPartApplyId;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['user_id'] = $request->userId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsBtripSoCorpToken)) {
            $realHeaders['x-acs-btrip-so-corp-token'] = Utils::toJSONString($headers->xAcsBtripSoCorpToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CarApplyQuery',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/apply/v1/car',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CarApplyQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CarApplyQueryRequest $request
     *
     * @return CarApplyQueryResponse
     */
    public function carApplyQuery($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CarApplyQueryHeaders([]);

        return $this->carApplyQueryWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CarBillSettlementQueryRequest $request
     * @param CarBillSettlementQueryHeaders $headers
     * @param RuntimeOptions                $runtime
     *
     * @return CarBillSettlementQueryResponse
     */
    public function carBillSettlementQueryWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNo)) {
            $query['page_no'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['page_size'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->periodEnd)) {
            $query['period_end'] = $request->periodEnd;
        }
        if (!Utils::isUnset($request->periodStart)) {
            $query['period_start'] = $request->periodStart;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsBtripSoCorpToken)) {
            $realHeaders['x-acs-btrip-so-corp-token'] = Utils::toJSONString($headers->xAcsBtripSoCorpToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CarBillSettlementQuery',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/car/v1/bill-settlement',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CarBillSettlementQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CarBillSettlementQueryRequest $request
     *
     * @return CarBillSettlementQueryResponse
     */
    public function carBillSettlementQuery($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CarBillSettlementQueryHeaders([]);

        return $this->carBillSettlementQueryWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CarOrderListQueryRequest $request
     * @param CarOrderListQueryHeaders $headers
     * @param RuntimeOptions           $runtime
     *
     * @return CarOrderListQueryResponse
     */
    public function carOrderListQueryWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->allApply)) {
            $query['all_apply'] = $request->allApply;
        }
        if (!Utils::isUnset($request->applyId)) {
            $query['apply_id'] = $request->applyId;
        }
        if (!Utils::isUnset($request->departId)) {
            $query['depart_id'] = $request->departId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['end_time'] = $request->endTime;
        }
        if (!Utils::isUnset($request->page)) {
            $query['page'] = $request->page;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['page_size'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['start_time'] = $request->startTime;
        }
        if (!Utils::isUnset($request->thirdpartApplyId)) {
            $query['thirdpart_apply_id'] = $request->thirdpartApplyId;
        }
        if (!Utils::isUnset($request->updateEndTime)) {
            $query['update_end_time'] = $request->updateEndTime;
        }
        if (!Utils::isUnset($request->updateStartTime)) {
            $query['update_start_time'] = $request->updateStartTime;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['user_id'] = $request->userId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsBtripSoCorpToken)) {
            $realHeaders['x-acs-btrip-so-corp-token'] = Utils::toJSONString($headers->xAcsBtripSoCorpToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CarOrderListQuery',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/car/v1/order-list',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CarOrderListQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CarOrderListQueryRequest $request
     *
     * @return CarOrderListQueryResponse
     */
    public function carOrderListQuery($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CarOrderListQueryHeaders([]);

        return $this->carOrderListQueryWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CarOrderQueryRequest $request
     * @param CarOrderQueryHeaders $headers
     * @param RuntimeOptions       $runtime
     *
     * @return CarOrderQueryResponse
     */
    public function carOrderQueryWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->orderId)) {
            $query['order_id'] = $request->orderId;
        }
        if (!Utils::isUnset($request->subOrderId)) {
            $query['sub_order_id'] = $request->subOrderId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsBtripSoCorpToken)) {
            $realHeaders['x-acs-btrip-so-corp-token'] = Utils::toJSONString($headers->xAcsBtripSoCorpToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CarOrderQuery',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/car/v1/order',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CarOrderQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CarOrderQueryRequest $request
     *
     * @return CarOrderQueryResponse
     */
    public function carOrderQuery($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CarOrderQueryHeaders([]);

        return $this->carOrderQueryWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CitySearchRequest $request
     * @param CitySearchHeaders $headers
     * @param RuntimeOptions    $runtime
     *
     * @return CitySearchResponse
     */
    public function citySearchWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->keyword)) {
            $query['keyword'] = $request->keyword;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsBtripSoCorpToken)) {
            $realHeaders['x-acs-btrip-so-corp-token'] = Utils::toJSONString($headers->xAcsBtripSoCorpToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CitySearch',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/city/v1/city',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CitySearchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CitySearchRequest $request
     *
     * @return CitySearchResponse
     */
    public function citySearch($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CitySearchHeaders([]);

        return $this->citySearchWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CommonApplyQueryRequest $request
     * @param CommonApplyQueryHeaders $headers
     * @param RuntimeOptions          $runtime
     *
     * @return CommonApplyQueryResponse
     */
    public function commonApplyQueryWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->applyId)) {
            $query['apply_id'] = $request->applyId;
        }
        if (!Utils::isUnset($request->bizCategory)) {
            $query['biz_category'] = $request->bizCategory;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['user_id'] = $request->userId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsBtripSoCorpToken)) {
            $realHeaders['x-acs-btrip-so-corp-token'] = Utils::toJSONString($headers->xAcsBtripSoCorpToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CommonApplyQuery',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/apply/v1/common',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CommonApplyQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CommonApplyQueryRequest $request
     *
     * @return CommonApplyQueryResponse
     */
    public function commonApplyQuery($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CommonApplyQueryHeaders([]);

        return $this->commonApplyQueryWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CommonApplySyncRequest $request
     * @param CommonApplySyncHeaders $headers
     * @param RuntimeOptions         $runtime
     *
     * @return CommonApplySyncResponse
     */
    public function commonApplySyncWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->applyId)) {
            $query['apply_id'] = $request->applyId;
        }
        if (!Utils::isUnset($request->bizCategory)) {
            $query['biz_category'] = $request->bizCategory;
        }
        if (!Utils::isUnset($request->remark)) {
            $query['remark'] = $request->remark;
        }
        if (!Utils::isUnset($request->status)) {
            $query['status'] = $request->status;
        }
        if (!Utils::isUnset($request->thirdpartyFlowId)) {
            $query['thirdparty_flow_id'] = $request->thirdpartyFlowId;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['user_id'] = $request->userId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsBtripSoCorpToken)) {
            $realHeaders['x-acs-btrip-so-corp-token'] = Utils::toJSONString($headers->xAcsBtripSoCorpToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CommonApplySync',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/apply/v1/syn-common',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CommonApplySyncResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CommonApplySyncRequest $request
     *
     * @return CommonApplySyncResponse
     */
    public function commonApplySync($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CommonApplySyncHeaders([]);

        return $this->commonApplySyncWithOptions($request, $headers, $runtime);
    }

    /**
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return CorpAuthLinkInfoQueryResponse
     */
    public function corpAuthLinkInfoQueryWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'CorpAuthLinkInfoQuery',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/corp-authority-link/v1/info',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CorpAuthLinkInfoQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return CorpAuthLinkInfoQueryResponse
     */
    public function corpAuthLinkInfoQuery()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->corpAuthLinkInfoQueryWithOptions($headers, $runtime);
    }

    /**
     * @param CorpTokenRequest $request
     * @param CorpTokenHeaders $headers
     * @param RuntimeOptions   $runtime
     *
     * @return CorpTokenResponse
     */
    public function corpTokenWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appSecret)) {
            $query['app_secret'] = $request->appSecret;
        }
        if (!Utils::isUnset($request->corpId)) {
            $query['corp_id'] = $request->corpId;
        }
        if (!Utils::isUnset($request->type)) {
            $query['type'] = $request->type;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsBtripAccessToken)) {
            $realHeaders['x-acs-btrip-access-token'] = Utils::toJSONString($headers->xAcsBtripAccessToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CorpToken',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/btrip-open-auth/v1/corp-token/action/take',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CorpTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CorpTokenRequest $request
     *
     * @return CorpTokenResponse
     */
    public function corpToken($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CorpTokenHeaders([]);

        return $this->corpTokenWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CostCenterDeleteRequest $request
     * @param CostCenterDeleteHeaders $headers
     * @param RuntimeOptions          $runtime
     *
     * @return CostCenterDeleteResponse
     */
    public function costCenterDeleteWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->thirdpartId)) {
            $query['thirdpart_id'] = $request->thirdpartId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsBtripSoCorpToken)) {
            $realHeaders['x-acs-btrip-so-corp-token'] = Utils::toJSONString($headers->xAcsBtripSoCorpToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CostCenterDelete',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/costcenter/v1/delete-costcenter',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CostCenterDeleteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CostCenterDeleteRequest $request
     *
     * @return CostCenterDeleteResponse
     */
    public function costCenterDelete($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CostCenterDeleteHeaders([]);

        return $this->costCenterDeleteWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CostCenterModifyRequest $request
     * @param CostCenterModifyHeaders $headers
     * @param RuntimeOptions          $runtime
     *
     * @return CostCenterModifyResponse
     */
    public function costCenterModifyWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->alipayNo)) {
            $body['alipay_no'] = $request->alipayNo;
        }
        if (!Utils::isUnset($request->number)) {
            $body['number'] = $request->number;
        }
        if (!Utils::isUnset($request->scope)) {
            $body['scope'] = $request->scope;
        }
        if (!Utils::isUnset($request->thirdpartId)) {
            $body['thirdpart_id'] = $request->thirdpartId;
        }
        if (!Utils::isUnset($request->title)) {
            $body['title'] = $request->title;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsBtripSoCorpToken)) {
            $realHeaders['x-acs-btrip-so-corp-token'] = Utils::toJSONString($headers->xAcsBtripSoCorpToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CostCenterModify',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/costcenter/v1/modify-costcenter',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CostCenterModifyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CostCenterModifyRequest $request
     *
     * @return CostCenterModifyResponse
     */
    public function costCenterModify($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CostCenterModifyHeaders([]);

        return $this->costCenterModifyWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CostCenterQueryRequest $request
     * @param CostCenterQueryHeaders $headers
     * @param RuntimeOptions         $runtime
     *
     * @return CostCenterQueryResponse
     */
    public function costCenterQueryWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->needOrgEntity)) {
            $query['need_org_entity'] = $request->needOrgEntity;
        }
        if (!Utils::isUnset($request->thirdpartId)) {
            $query['thirdpart_id'] = $request->thirdpartId;
        }
        if (!Utils::isUnset($request->title)) {
            $query['title'] = $request->title;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['user_id'] = $request->userId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsBtripSoCorpToken)) {
            $realHeaders['x-acs-btrip-so-corp-token'] = Utils::toJSONString($headers->xAcsBtripSoCorpToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CostCenterQuery',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/costcenter/v1/costcenter',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CostCenterQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CostCenterQueryRequest $request
     *
     * @return CostCenterQueryResponse
     */
    public function costCenterQuery($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CostCenterQueryHeaders([]);

        return $this->costCenterQueryWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CostCenterSaveRequest $request
     * @param CostCenterSaveHeaders $headers
     * @param RuntimeOptions        $runtime
     *
     * @return CostCenterSaveResponse
     */
    public function costCenterSaveWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->alipayNo)) {
            $body['alipay_no'] = $request->alipayNo;
        }
        if (!Utils::isUnset($request->number)) {
            $body['number'] = $request->number;
        }
        if (!Utils::isUnset($request->scope)) {
            $body['scope'] = $request->scope;
        }
        if (!Utils::isUnset($request->thirdpartId)) {
            $body['thirdpart_id'] = $request->thirdpartId;
        }
        if (!Utils::isUnset($request->title)) {
            $body['title'] = $request->title;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsBtripSoCorpToken)) {
            $realHeaders['x-acs-btrip-so-corp-token'] = Utils::toJSONString($headers->xAcsBtripSoCorpToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CostCenterSave',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/costcenter/v1/save-costcenter',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CostCenterSaveResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CostCenterSaveRequest $request
     *
     * @return CostCenterSaveResponse
     */
    public function costCenterSave($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CostCenterSaveHeaders([]);

        return $this->costCenterSaveWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DeleteInvoiceEntityRequest $tmpReq
     * @param DeleteInvoiceEntityHeaders $headers
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteInvoiceEntityResponse
     */
    public function deleteInvoiceEntityWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DeleteInvoiceEntityShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->entities)) {
            $request->entitiesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->entities, 'entities', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->delAll)) {
            $query['del_all'] = $request->delAll;
        }
        if (!Utils::isUnset($request->entitiesShrink)) {
            $query['entities'] = $request->entitiesShrink;
        }
        if (!Utils::isUnset($request->thirdPartId)) {
            $query['third_part_id'] = $request->thirdPartId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsBtripCorpToken)) {
            $realHeaders['x-acs-btrip-corp-token'] = Utils::toJSONString($headers->xAcsBtripCorpToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteInvoiceEntity',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/invoice/v1/entities',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteInvoiceEntityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteInvoiceEntityRequest $request
     *
     * @return DeleteInvoiceEntityResponse
     */
    public function deleteInvoiceEntity($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new DeleteInvoiceEntityHeaders([]);

        return $this->deleteInvoiceEntityWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DepartmentSaveRequest $tmpReq
     * @param DepartmentSaveHeaders $headers
     * @param RuntimeOptions        $runtime
     *
     * @return DepartmentSaveResponse
     */
    public function departmentSaveWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DepartmentSaveShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->departList)) {
            $request->departListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->departList, 'depart_list', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->departListShrink)) {
            $body['depart_list'] = $request->departListShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsBtripSoCorpToken)) {
            $realHeaders['x-acs-btrip-so-corp-token'] = Utils::toJSONString($headers->xAcsBtripSoCorpToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DepartmentSave',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/department/v1/department',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DepartmentSaveResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DepartmentSaveRequest $request
     *
     * @return DepartmentSaveResponse
     */
    public function departmentSave($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new DepartmentSaveHeaders([]);

        return $this->departmentSaveWithOptions($request, $headers, $runtime);
    }

    /**
     * @param EntityAddRequest $tmpReq
     * @param EntityAddHeaders $headers
     * @param RuntimeOptions   $runtime
     *
     * @return EntityAddResponse
     */
    public function entityAddWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new EntityAddShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->entityDOList)) {
            $request->entityDOListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->entityDOList, 'entity_d_o_list', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->entityDOListShrink)) {
            $body['entity_d_o_list'] = $request->entityDOListShrink;
        }
        if (!Utils::isUnset($request->thirdpartId)) {
            $body['thirdpart_id'] = $request->thirdpartId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsBtripSoCorpToken)) {
            $realHeaders['x-acs-btrip-so-corp-token'] = Utils::toJSONString($headers->xAcsBtripSoCorpToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'EntityAdd',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/costcenter/v1/add-entity',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EntityAddResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param EntityAddRequest $request
     *
     * @return EntityAddResponse
     */
    public function entityAdd($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new EntityAddHeaders([]);

        return $this->entityAddWithOptions($request, $headers, $runtime);
    }

    /**
     * @param EntityDeleteRequest $tmpReq
     * @param EntityDeleteHeaders $headers
     * @param RuntimeOptions      $runtime
     *
     * @return EntityDeleteResponse
     */
    public function entityDeleteWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new EntityDeleteShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->entityDOList)) {
            $request->entityDOListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->entityDOList, 'entity_d_o_list', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->delAll)) {
            $query['del_all'] = $request->delAll;
        }
        if (!Utils::isUnset($request->thirdpartId)) {
            $query['thirdpart_id'] = $request->thirdpartId;
        }
        $body = [];
        if (!Utils::isUnset($request->entityDOListShrink)) {
            $body['entity_d_o_list'] = $request->entityDOListShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsBtripSoCorpToken)) {
            $realHeaders['x-acs-btrip-so-corp-token'] = Utils::toJSONString($headers->xAcsBtripSoCorpToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'EntityDelete',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/costcenter/v1/entity/action/delete',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EntityDeleteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param EntityDeleteRequest $request
     *
     * @return EntityDeleteResponse
     */
    public function entityDelete($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new EntityDeleteHeaders([]);

        return $this->entityDeleteWithOptions($request, $headers, $runtime);
    }

    /**
     * @param EntitySetRequest $tmpReq
     * @param EntitySetHeaders $headers
     * @param RuntimeOptions   $runtime
     *
     * @return EntitySetResponse
     */
    public function entitySetWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new EntitySetShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->entityDOList)) {
            $request->entityDOListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->entityDOList, 'entity_d_o_list', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->entityDOListShrink)) {
            $body['entity_d_o_list'] = $request->entityDOListShrink;
        }
        if (!Utils::isUnset($request->thirdpartId)) {
            $body['thirdpart_id'] = $request->thirdpartId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsBtripSoCorpToken)) {
            $realHeaders['x-acs-btrip-so-corp-token'] = Utils::toJSONString($headers->xAcsBtripSoCorpToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'EntitySet',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/costcenter/v1/set-entity',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EntitySetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param EntitySetRequest $request
     *
     * @return EntitySetResponse
     */
    public function entitySet($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new EntitySetHeaders([]);

        return $this->entitySetWithOptions($request, $headers, $runtime);
    }

    /**
     * @param EstimatedPriceQueryRequest $request
     * @param EstimatedPriceQueryHeaders $headers
     * @param RuntimeOptions             $runtime
     *
     * @return EstimatedPriceQueryResponse
     */
    public function estimatedPriceQueryWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->arrCity)) {
            $query['arr_city'] = $request->arrCity;
        }
        if (!Utils::isUnset($request->category)) {
            $query['category'] = $request->category;
        }
        if (!Utils::isUnset($request->depCity)) {
            $query['dep_city'] = $request->depCity;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['end_time'] = $request->endTime;
        }
        if (!Utils::isUnset($request->itineraryId)) {
            $query['itinerary_id'] = $request->itineraryId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['start_time'] = $request->startTime;
        }
        if (!Utils::isUnset($request->subCorpId)) {
            $query['sub_corp_id'] = $request->subCorpId;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['user_id'] = $request->userId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsBtripSoCorpToken)) {
            $realHeaders['x-acs-btrip-so-corp-token'] = Utils::toJSONString($headers->xAcsBtripSoCorpToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'EstimatedPriceQuery',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/costcenter/v1/estimated-price',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return EstimatedPriceQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param EstimatedPriceQueryRequest $request
     *
     * @return EstimatedPriceQueryResponse
     */
    public function estimatedPriceQuery($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new EstimatedPriceQueryHeaders([]);

        return $this->estimatedPriceQueryWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ExceedApplySyncRequest $request
     * @param ExceedApplySyncHeaders $headers
     * @param RuntimeOptions         $runtime
     *
     * @return ExceedApplySyncResponse
     */
    public function exceedApplySyncWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->applyId)) {
            $query['apply_id'] = $request->applyId;
        }
        if (!Utils::isUnset($request->bizCategory)) {
            $query['biz_category'] = $request->bizCategory;
        }
        if (!Utils::isUnset($request->remark)) {
            $query['remark'] = $request->remark;
        }
        if (!Utils::isUnset($request->status)) {
            $query['status'] = $request->status;
        }
        if (!Utils::isUnset($request->thirdpartyFlowId)) {
            $query['thirdparty_flow_id'] = $request->thirdpartyFlowId;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['user_id'] = $request->userId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsBtripSoCorpToken)) {
            $realHeaders['x-acs-btrip-so-corp-token'] = Utils::toJSONString($headers->xAcsBtripSoCorpToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ExceedApplySync',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/apply/v1/syn-exceed',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ExceedApplySyncResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ExceedApplySyncRequest $request
     *
     * @return ExceedApplySyncResponse
     */
    public function exceedApplySync($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ExceedApplySyncHeaders([]);

        return $this->exceedApplySyncWithOptions($request, $headers, $runtime);
    }

    /**
     * @param FlightBillSettlementQueryRequest $request
     * @param FlightBillSettlementQueryHeaders $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return FlightBillSettlementQueryResponse
     */
    public function flightBillSettlementQueryWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNo)) {
            $query['page_no'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['page_size'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->periodEnd)) {
            $query['period_end'] = $request->periodEnd;
        }
        if (!Utils::isUnset($request->periodStart)) {
            $query['period_start'] = $request->periodStart;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsBtripSoCorpToken)) {
            $realHeaders['x-acs-btrip-so-corp-token'] = Utils::toJSONString($headers->xAcsBtripSoCorpToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'FlightBillSettlementQuery',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/flight/v1/bill-settlement',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return FlightBillSettlementQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param FlightBillSettlementQueryRequest $request
     *
     * @return FlightBillSettlementQueryResponse
     */
    public function flightBillSettlementQuery($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new FlightBillSettlementQueryHeaders([]);

        return $this->flightBillSettlementQueryWithOptions($request, $headers, $runtime);
    }

    /**
     * @param FlightCancelOrderRequest $request
     * @param FlightCancelOrderHeaders $headers
     * @param RuntimeOptions           $runtime
     *
     * @return FlightCancelOrderResponse
     */
    public function flightCancelOrderWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->disOrderId)) {
            $query['dis_order_id'] = $request->disOrderId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsBtripCorpToken)) {
            $realHeaders['x-acs-btrip-corp-token'] = Utils::toJSONString($headers->xAcsBtripCorpToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'FlightCancelOrder',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dtb-flight/v1/order/action/cancel',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return FlightCancelOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param FlightCancelOrderRequest $request
     *
     * @return FlightCancelOrderResponse
     */
    public function flightCancelOrder($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new FlightCancelOrderHeaders([]);

        return $this->flightCancelOrderWithOptions($request, $headers, $runtime);
    }

    /**
     * @param FlightCreateOrderRequest $tmpReq
     * @param FlightCreateOrderHeaders $headers
     * @param RuntimeOptions           $runtime
     *
     * @return FlightCreateOrderResponse
     */
    public function flightCreateOrderWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new FlightCreateOrderShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->contactInfo)) {
            $request->contactInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->contactInfo, 'contact_info', 'json');
        }
        if (!Utils::isUnset($tmpReq->orderAttr)) {
            $request->orderAttrShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->orderAttr, 'order_attr', 'json');
        }
        if (!Utils::isUnset($tmpReq->travelerInfoList)) {
            $request->travelerInfoListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->travelerInfoList, 'traveler_info_list', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->arrAirportCode)) {
            $body['arr_airport_code'] = $request->arrAirportCode;
        }
        if (!Utils::isUnset($request->arrCityCode)) {
            $body['arr_city_code'] = $request->arrCityCode;
        }
        if (!Utils::isUnset($request->autoPay)) {
            $body['auto_pay'] = $request->autoPay;
        }
        if (!Utils::isUnset($request->buyerName)) {
            $body['buyer_name'] = $request->buyerName;
        }
        if (!Utils::isUnset($request->buyerUniqueKey)) {
            $body['buyer_unique_key'] = $request->buyerUniqueKey;
        }
        if (!Utils::isUnset($request->contactInfoShrink)) {
            $body['contact_info'] = $request->contactInfoShrink;
        }
        if (!Utils::isUnset($request->depAirportCode)) {
            $body['dep_airport_code'] = $request->depAirportCode;
        }
        if (!Utils::isUnset($request->depCityCode)) {
            $body['dep_city_code'] = $request->depCityCode;
        }
        if (!Utils::isUnset($request->depDate)) {
            $body['dep_date'] = $request->depDate;
        }
        if (!Utils::isUnset($request->disOrderId)) {
            $body['dis_order_id'] = $request->disOrderId;
        }
        if (!Utils::isUnset($request->orderAttrShrink)) {
            $body['order_attr'] = $request->orderAttrShrink;
        }
        if (!Utils::isUnset($request->orderParams)) {
            $body['order_params'] = $request->orderParams;
        }
        if (!Utils::isUnset($request->otaItemId)) {
            $body['ota_item_id'] = $request->otaItemId;
        }
        if (!Utils::isUnset($request->price)) {
            $body['price'] = $request->price;
        }
        if (!Utils::isUnset($request->receiptAddress)) {
            $body['receipt_address'] = $request->receiptAddress;
        }
        if (!Utils::isUnset($request->receiptTarget)) {
            $body['receipt_target'] = $request->receiptTarget;
        }
        if (!Utils::isUnset($request->receiptTitle)) {
            $body['receipt_title'] = $request->receiptTitle;
        }
        if (!Utils::isUnset($request->travelerInfoListShrink)) {
            $body['traveler_info_list'] = $request->travelerInfoListShrink;
        }
        if (!Utils::isUnset($request->tripType)) {
            $body['trip_type'] = $request->tripType;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsBtripCorpToken)) {
            $realHeaders['x-acs-btrip-corp-token'] = Utils::toJSONString($headers->xAcsBtripCorpToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'FlightCreateOrder',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dtb-flight/v1/order/action/create',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return FlightCreateOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param FlightCreateOrderRequest $request
     *
     * @return FlightCreateOrderResponse
     */
    public function flightCreateOrder($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new FlightCreateOrderHeaders([]);

        return $this->flightCreateOrderWithOptions($request, $headers, $runtime);
    }

    /**
     * @param FlightExceedApplyQueryRequest $request
     * @param FlightExceedApplyQueryHeaders $headers
     * @param RuntimeOptions                $runtime
     *
     * @return FlightExceedApplyQueryResponse
     */
    public function flightExceedApplyQueryWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->applyId)) {
            $query['apply_id'] = $request->applyId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsBtripSoCorpToken)) {
            $realHeaders['x-acs-btrip-so-corp-token'] = Utils::toJSONString($headers->xAcsBtripSoCorpToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'FlightExceedApplyQuery',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/apply/v1/flight-exceed',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return FlightExceedApplyQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param FlightExceedApplyQueryRequest $request
     *
     * @return FlightExceedApplyQueryResponse
     */
    public function flightExceedApplyQuery($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new FlightExceedApplyQueryHeaders([]);

        return $this->flightExceedApplyQueryWithOptions($request, $headers, $runtime);
    }

    /**
     * @param FlightItineraryScanQueryRequest $request
     * @param FlightItineraryScanQueryHeaders $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return FlightItineraryScanQueryResponse
     */
    public function flightItineraryScanQueryWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->billDate)) {
            $query['bill_date'] = $request->billDate;
        }
        if (!Utils::isUnset($request->billId)) {
            $query['bill_id'] = $request->billId;
        }
        if (!Utils::isUnset($request->invoiceSubTaskId)) {
            $query['invoice_sub_task_id'] = $request->invoiceSubTaskId;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['page_no'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['page_size'] = $request->pageSize;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsBtripSoCorpToken)) {
            $realHeaders['x-acs-btrip-so-corp-token'] = Utils::toJSONString($headers->xAcsBtripSoCorpToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'FlightItineraryScanQuery',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/scan/v1/flight-itinerary',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return FlightItineraryScanQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param FlightItineraryScanQueryRequest $request
     *
     * @return FlightItineraryScanQueryResponse
     */
    public function flightItineraryScanQuery($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new FlightItineraryScanQueryHeaders([]);

        return $this->flightItineraryScanQueryWithOptions($request, $headers, $runtime);
    }

    /**
     * @param FlightListingSearchRequest $request
     * @param FlightListingSearchHeaders $headers
     * @param RuntimeOptions             $runtime
     *
     * @return FlightListingSearchResponse
     */
    public function flightListingSearchWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->airlineCode)) {
            $query['airline_code'] = $request->airlineCode;
        }
        if (!Utils::isUnset($request->arrCityCode)) {
            $query['arr_city_code'] = $request->arrCityCode;
        }
        if (!Utils::isUnset($request->cabinClass)) {
            $query['cabin_class'] = $request->cabinClass;
        }
        if (!Utils::isUnset($request->depCityCode)) {
            $query['dep_city_code'] = $request->depCityCode;
        }
        if (!Utils::isUnset($request->depDate)) {
            $query['dep_date'] = $request->depDate;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsBtripCorpToken)) {
            $realHeaders['x-acs-btrip-corp-token'] = Utils::toJSONString($headers->xAcsBtripCorpToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'FlightListingSearch',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dtb-flight/v1/flight/action/listing-search',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return FlightListingSearchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param FlightListingSearchRequest $request
     *
     * @return FlightListingSearchResponse
     */
    public function flightListingSearch($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new FlightListingSearchHeaders([]);

        return $this->flightListingSearchWithOptions($request, $headers, $runtime);
    }

    /**
     * @param FlightOrderDetailInfoRequest $request
     * @param FlightOrderDetailInfoHeaders $headers
     * @param RuntimeOptions               $runtime
     *
     * @return FlightOrderDetailInfoResponse
     */
    public function flightOrderDetailInfoWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->disOrderId)) {
            $query['dis_order_id'] = $request->disOrderId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsBtripCorpToken)) {
            $realHeaders['x-acs-btrip-corp-token'] = Utils::toJSONString($headers->xAcsBtripCorpToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'FlightOrderDetailInfo',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dtb-flight/v1/order/action/detail',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return FlightOrderDetailInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param FlightOrderDetailInfoRequest $request
     *
     * @return FlightOrderDetailInfoResponse
     */
    public function flightOrderDetailInfo($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new FlightOrderDetailInfoHeaders([]);

        return $this->flightOrderDetailInfoWithOptions($request, $headers, $runtime);
    }

    /**
     * @param FlightOrderListQueryRequest $request
     * @param FlightOrderListQueryHeaders $headers
     * @param RuntimeOptions              $runtime
     *
     * @return FlightOrderListQueryResponse
     */
    public function flightOrderListQueryWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->allApply)) {
            $query['all_apply'] = $request->allApply;
        }
        if (!Utils::isUnset($request->applyId)) {
            $query['apply_id'] = $request->applyId;
        }
        if (!Utils::isUnset($request->departId)) {
            $query['depart_id'] = $request->departId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['end_time'] = $request->endTime;
        }
        if (!Utils::isUnset($request->page)) {
            $query['page'] = $request->page;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['page_size'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['start_time'] = $request->startTime;
        }
        if (!Utils::isUnset($request->thirdpartApplyId)) {
            $query['thirdpart_apply_id'] = $request->thirdpartApplyId;
        }
        if (!Utils::isUnset($request->updateEndTime)) {
            $query['update_end_time'] = $request->updateEndTime;
        }
        if (!Utils::isUnset($request->updateStartTime)) {
            $query['update_start_time'] = $request->updateStartTime;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['user_id'] = $request->userId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsBtripSoCorpToken)) {
            $realHeaders['x-acs-btrip-so-corp-token'] = Utils::toJSONString($headers->xAcsBtripSoCorpToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'FlightOrderListQuery',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/flight/v1/order-list',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return FlightOrderListQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param FlightOrderListQueryRequest $request
     *
     * @return FlightOrderListQueryResponse
     */
    public function flightOrderListQuery($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new FlightOrderListQueryHeaders([]);

        return $this->flightOrderListQueryWithOptions($request, $headers, $runtime);
    }

    /**
     * @param FlightOrderQueryRequest $request
     * @param FlightOrderQueryHeaders $headers
     * @param RuntimeOptions          $runtime
     *
     * @return FlightOrderQueryResponse
     */
    public function flightOrderQueryWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->orderId)) {
            $query['order_id'] = $request->orderId;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['user_id'] = $request->userId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsBtripSoCorpToken)) {
            $realHeaders['x-acs-btrip-so-corp-token'] = Utils::toJSONString($headers->xAcsBtripSoCorpToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'FlightOrderQuery',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/flight/v1/order',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return FlightOrderQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param FlightOrderQueryRequest $request
     *
     * @return FlightOrderQueryResponse
     */
    public function flightOrderQuery($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new FlightOrderQueryHeaders([]);

        return $this->flightOrderQueryWithOptions($request, $headers, $runtime);
    }

    /**
     * @param FlightOtaSearchRequest $request
     * @param FlightOtaSearchHeaders $headers
     * @param RuntimeOptions         $runtime
     *
     * @return FlightOtaSearchResponse
     */
    public function flightOtaSearchWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->airlineCode)) {
            $query['airline_code'] = $request->airlineCode;
        }
        if (!Utils::isUnset($request->arrCityCode)) {
            $query['arr_city_code'] = $request->arrCityCode;
        }
        if (!Utils::isUnset($request->cabinClass)) {
            $query['cabin_class'] = $request->cabinClass;
        }
        if (!Utils::isUnset($request->carrierFlightNo)) {
            $query['carrier_flight_no'] = $request->carrierFlightNo;
        }
        if (!Utils::isUnset($request->depCityCode)) {
            $query['dep_city_code'] = $request->depCityCode;
        }
        if (!Utils::isUnset($request->depDate)) {
            $query['dep_date'] = $request->depDate;
        }
        if (!Utils::isUnset($request->flightNo)) {
            $query['flight_no'] = $request->flightNo;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsBtripCorpToken)) {
            $realHeaders['x-acs-btrip-corp-token'] = Utils::toJSONString($headers->xAcsBtripCorpToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'FlightOtaSearch',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dtb-flight/v1/flight/action/ota-search',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return FlightOtaSearchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param FlightOtaSearchRequest $request
     *
     * @return FlightOtaSearchResponse
     */
    public function flightOtaSearch($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new FlightOtaSearchHeaders([]);

        return $this->flightOtaSearchWithOptions($request, $headers, $runtime);
    }

    /**
     * @param FlightPayOrderRequest $tmpReq
     * @param FlightPayOrderHeaders $headers
     * @param RuntimeOptions        $runtime
     *
     * @return FlightPayOrderResponse
     */
    public function flightPayOrderWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new FlightPayOrderShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->extra)) {
            $request->extraShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->extra, 'extra', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->corpPayPrice)) {
            $body['corp_pay_price'] = $request->corpPayPrice;
        }
        if (!Utils::isUnset($request->disOrderId)) {
            $body['dis_order_id'] = $request->disOrderId;
        }
        if (!Utils::isUnset($request->extraShrink)) {
            $body['extra'] = $request->extraShrink;
        }
        if (!Utils::isUnset($request->personalPayPrice)) {
            $body['personal_pay_price'] = $request->personalPayPrice;
        }
        if (!Utils::isUnset($request->totalPayPrice)) {
            $body['total_pay_price'] = $request->totalPayPrice;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsBtripCorpToken)) {
            $realHeaders['x-acs-btrip-corp-token'] = Utils::toJSONString($headers->xAcsBtripCorpToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'FlightPayOrder',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dtb-flight/v1/order/action/pay',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return FlightPayOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param FlightPayOrderRequest $request
     *
     * @return FlightPayOrderResponse
     */
    public function flightPayOrder($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new FlightPayOrderHeaders([]);

        return $this->flightPayOrderWithOptions($request, $headers, $runtime);
    }

    /**
     * @param FlightRefundApplyRequest $tmpReq
     * @param FlightRefundApplyHeaders $headers
     * @param RuntimeOptions           $runtime
     *
     * @return FlightRefundApplyResponse
     */
    public function flightRefundApplyWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new FlightRefundApplyShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->extra)) {
            $request->extraShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->extra, 'extra', 'json');
        }
        if (!Utils::isUnset($tmpReq->passengerSegmentInfoList)) {
            $request->passengerSegmentInfoListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->passengerSegmentInfoList, 'passenger_segment_info_list', 'json');
        }
        if (!Utils::isUnset($tmpReq->refundVoucherInfo)) {
            $request->refundVoucherInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->refundVoucherInfo, 'refund_voucher_info', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->corpRefundPrice)) {
            $body['corp_refund_price'] = $request->corpRefundPrice;
        }
        if (!Utils::isUnset($request->disOrderId)) {
            $body['dis_order_id'] = $request->disOrderId;
        }
        if (!Utils::isUnset($request->disSubOrderId)) {
            $body['dis_sub_order_id'] = $request->disSubOrderId;
        }
        if (!Utils::isUnset($request->displayRefundMoney)) {
            $body['display_refund_money'] = $request->displayRefundMoney;
        }
        if (!Utils::isUnset($request->extraShrink)) {
            $body['extra'] = $request->extraShrink;
        }
        if (!Utils::isUnset($request->isVoluntary)) {
            $body['is_voluntary'] = $request->isVoluntary;
        }
        if (!Utils::isUnset($request->itemUnitIds)) {
            $body['item_unit_ids'] = $request->itemUnitIds;
        }
        if (!Utils::isUnset($request->passengerSegmentInfoListShrink)) {
            $body['passenger_segment_info_list'] = $request->passengerSegmentInfoListShrink;
        }
        if (!Utils::isUnset($request->personalRefundPrice)) {
            $body['personal_refund_price'] = $request->personalRefundPrice;
        }
        if (!Utils::isUnset($request->reasonDetail)) {
            $body['reason_detail'] = $request->reasonDetail;
        }
        if (!Utils::isUnset($request->reasonType)) {
            $body['reason_type'] = $request->reasonType;
        }
        if (!Utils::isUnset($request->refundVoucherInfoShrink)) {
            $body['refund_voucher_info'] = $request->refundVoucherInfoShrink;
        }
        if (!Utils::isUnset($request->sessionId)) {
            $body['session_id'] = $request->sessionId;
        }
        if (!Utils::isUnset($request->totalRefundPrice)) {
            $body['total_refund_price'] = $request->totalRefundPrice;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsBtripCorpToken)) {
            $realHeaders['x-acs-btrip-corp-token'] = Utils::toJSONString($headers->xAcsBtripCorpToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'FlightRefundApply',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dtb-flight/v1/refund/action/apply',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return FlightRefundApplyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param FlightRefundApplyRequest $request
     *
     * @return FlightRefundApplyResponse
     */
    public function flightRefundApply($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new FlightRefundApplyHeaders([]);

        return $this->flightRefundApplyWithOptions($request, $headers, $runtime);
    }

    /**
     * @param FlightRefundDetailRequest $request
     * @param FlightRefundDetailHeaders $headers
     * @param RuntimeOptions            $runtime
     *
     * @return FlightRefundDetailResponse
     */
    public function flightRefundDetailWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->disOrderId)) {
            $query['dis_order_id'] = $request->disOrderId;
        }
        if (!Utils::isUnset($request->disSubOrderId)) {
            $query['dis_sub_order_id'] = $request->disSubOrderId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsBtripCorpToken)) {
            $realHeaders['x-acs-btrip-corp-token'] = Utils::toJSONString($headers->xAcsBtripCorpToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'FlightRefundDetail',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dtb-flight/v1/refund/action/detail',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return FlightRefundDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param FlightRefundDetailRequest $request
     *
     * @return FlightRefundDetailResponse
     */
    public function flightRefundDetail($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new FlightRefundDetailHeaders([]);

        return $this->flightRefundDetailWithOptions($request, $headers, $runtime);
    }

    /**
     * @param FlightRefundPreCalRequest $tmpReq
     * @param FlightRefundPreCalHeaders $headers
     * @param RuntimeOptions            $runtime
     *
     * @return FlightRefundPreCalResponse
     */
    public function flightRefundPreCalWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new FlightRefundPreCalShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->passengerSegmentInfoList)) {
            $request->passengerSegmentInfoListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->passengerSegmentInfoList, 'passenger_segment_info_list', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->disOrderId)) {
            $query['dis_order_id'] = $request->disOrderId;
        }
        if (!Utils::isUnset($request->isVoluntary)) {
            $query['is_voluntary'] = $request->isVoluntary;
        }
        if (!Utils::isUnset($request->passengerSegmentInfoListShrink)) {
            $query['passenger_segment_info_list'] = $request->passengerSegmentInfoListShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsBtripCorpToken)) {
            $realHeaders['x-acs-btrip-corp-token'] = Utils::toJSONString($headers->xAcsBtripCorpToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'FlightRefundPreCal',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dtb-flight/v1/refund/action/pre-cal',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return FlightRefundPreCalResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param FlightRefundPreCalRequest $request
     *
     * @return FlightRefundPreCalResponse
     */
    public function flightRefundPreCal($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new FlightRefundPreCalHeaders([]);

        return $this->flightRefundPreCalWithOptions($request, $headers, $runtime);
    }

    /**
     * @param FlightSearchListRequest $request
     * @param FlightSearchListHeaders $headers
     * @param RuntimeOptions          $runtime
     *
     * @return FlightSearchListResponse
     */
    public function flightSearchListWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->airlineCode)) {
            $query['airline_code'] = $request->airlineCode;
        }
        if (!Utils::isUnset($request->arrCityCode)) {
            $query['arr_city_code'] = $request->arrCityCode;
        }
        if (!Utils::isUnset($request->arrCityName)) {
            $query['arr_city_name'] = $request->arrCityName;
        }
        if (!Utils::isUnset($request->arrDate)) {
            $query['arr_date'] = $request->arrDate;
        }
        if (!Utils::isUnset($request->cabinClass)) {
            $query['cabin_class'] = $request->cabinClass;
        }
        if (!Utils::isUnset($request->depCityCode)) {
            $query['dep_city_code'] = $request->depCityCode;
        }
        if (!Utils::isUnset($request->depCityName)) {
            $query['dep_city_name'] = $request->depCityName;
        }
        if (!Utils::isUnset($request->depDate)) {
            $query['dep_date'] = $request->depDate;
        }
        if (!Utils::isUnset($request->flightNo)) {
            $query['flight_no'] = $request->flightNo;
        }
        if (!Utils::isUnset($request->needMultiClassPrice)) {
            $query['need_multi_class_price'] = $request->needMultiClassPrice;
        }
        if (!Utils::isUnset($request->transferCityCode)) {
            $query['transfer_city_code'] = $request->transferCityCode;
        }
        if (!Utils::isUnset($request->transferFlightNo)) {
            $query['transfer_flight_no'] = $request->transferFlightNo;
        }
        if (!Utils::isUnset($request->transferLeaveDate)) {
            $query['transfer_leave_date'] = $request->transferLeaveDate;
        }
        if (!Utils::isUnset($request->tripType)) {
            $query['trip_type'] = $request->tripType;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsBtripCorpToken)) {
            $realHeaders['x-acs-btrip-corp-token'] = Utils::toJSONString($headers->xAcsBtripCorpToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'FlightSearchList',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/huge/dtb-flight/v1/flight/action/search-list',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return FlightSearchListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param FlightSearchListRequest $request
     *
     * @return FlightSearchListResponse
     */
    public function flightSearchList($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new FlightSearchListHeaders([]);

        return $this->flightSearchListWithOptions($request, $headers, $runtime);
    }

    /**
     * @param HotelBillSettlementQueryRequest $request
     * @param HotelBillSettlementQueryHeaders $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return HotelBillSettlementQueryResponse
     */
    public function hotelBillSettlementQueryWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNo)) {
            $query['page_no'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['page_size'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->periodEnd)) {
            $query['period_end'] = $request->periodEnd;
        }
        if (!Utils::isUnset($request->periodStart)) {
            $query['period_start'] = $request->periodStart;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsBtripSoCorpToken)) {
            $realHeaders['x-acs-btrip-so-corp-token'] = Utils::toJSONString($headers->xAcsBtripSoCorpToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'HotelBillSettlementQuery',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/hotel/v1/bill-settlement',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return HotelBillSettlementQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param HotelBillSettlementQueryRequest $request
     *
     * @return HotelBillSettlementQueryResponse
     */
    public function hotelBillSettlementQuery($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new HotelBillSettlementQueryHeaders([]);

        return $this->hotelBillSettlementQueryWithOptions($request, $headers, $runtime);
    }

    /**
     * @param HotelExceedApplyQueryRequest $request
     * @param HotelExceedApplyQueryHeaders $headers
     * @param RuntimeOptions               $runtime
     *
     * @return HotelExceedApplyQueryResponse
     */
    public function hotelExceedApplyQueryWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->applyId)) {
            $query['apply_id'] = $request->applyId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsBtripSoCorpToken)) {
            $realHeaders['x-acs-btrip-so-corp-token'] = Utils::toJSONString($headers->xAcsBtripSoCorpToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'HotelExceedApplyQuery',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/apply/v1/hotel-exceed',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return HotelExceedApplyQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param HotelExceedApplyQueryRequest $request
     *
     * @return HotelExceedApplyQueryResponse
     */
    public function hotelExceedApplyQuery($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new HotelExceedApplyQueryHeaders([]);

        return $this->hotelExceedApplyQueryWithOptions($request, $headers, $runtime);
    }

    /**
     * @param HotelGoodsQueryRequest $request
     * @param HotelGoodsQueryHeaders $headers
     * @param RuntimeOptions         $runtime
     *
     * @return HotelGoodsQueryResponse
     */
    public function hotelGoodsQueryWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->adultNum)) {
            $query['adult_num'] = $request->adultNum;
        }
        if (!Utils::isUnset($request->agreementPrice)) {
            $query['agreement_price'] = $request->agreementPrice;
        }
        if (!Utils::isUnset($request->beginDate)) {
            $query['begin_date'] = $request->beginDate;
        }
        if (!Utils::isUnset($request->breakfastIncluded)) {
            $query['breakfast_included'] = $request->breakfastIncluded;
        }
        if (!Utils::isUnset($request->btripUserId)) {
            $query['btrip_user_id'] = $request->btripUserId;
        }
        if (!Utils::isUnset($request->cityCode)) {
            $query['city_code'] = $request->cityCode;
        }
        if (!Utils::isUnset($request->endDate)) {
            $query['end_date'] = $request->endDate;
        }
        if (!Utils::isUnset($request->hotelId)) {
            $query['hotel_id'] = $request->hotelId;
        }
        if (!Utils::isUnset($request->payOverType)) {
            $query['pay_over_type'] = $request->payOverType;
        }
        if (!Utils::isUnset($request->paymentType)) {
            $query['payment_type'] = $request->paymentType;
        }
        if (!Utils::isUnset($request->specialInvoice)) {
            $query['special_invoice'] = $request->specialInvoice;
        }
        if (!Utils::isUnset($request->superMan)) {
            $query['super_man'] = $request->superMan;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsBtripCorpToken)) {
            $realHeaders['x-acs-btrip-corp-token'] = Utils::toJSONString($headers->xAcsBtripCorpToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'HotelGoodsQuery',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dtb-hotel/v1/hotel-goods',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return HotelGoodsQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param HotelGoodsQueryRequest $request
     *
     * @return HotelGoodsQueryResponse
     */
    public function hotelGoodsQuery($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new HotelGoodsQueryHeaders([]);

        return $this->hotelGoodsQueryWithOptions($request, $headers, $runtime);
    }

    /**
     * @param HotelIndexInfoRequest $request
     * @param HotelIndexInfoHeaders $headers
     * @param RuntimeOptions        $runtime
     *
     * @return HotelIndexInfoResponse
     */
    public function hotelIndexInfoWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cityCode)) {
            $query['city_code'] = $request->cityCode;
        }
        if (!Utils::isUnset($request->hotelStatus)) {
            $query['hotel_status'] = $request->hotelStatus;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['page_size'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->pageToken)) {
            $query['page_token'] = $request->pageToken;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsBtripCorpToken)) {
            $realHeaders['x-acs-btrip-corp-token'] = Utils::toJSONString($headers->xAcsBtripCorpToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'HotelIndexInfo',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dtb-hotel/v1/index-infos',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return HotelIndexInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param HotelIndexInfoRequest $request
     *
     * @return HotelIndexInfoResponse
     */
    public function hotelIndexInfo($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new HotelIndexInfoHeaders([]);

        return $this->hotelIndexInfoWithOptions($request, $headers, $runtime);
    }

    /**
     * @param HotelOrderCancelRequest $request
     * @param HotelOrderCancelHeaders $headers
     * @param RuntimeOptions          $runtime
     *
     * @return HotelOrderCancelResponse
     */
    public function hotelOrderCancelWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->disOrderId)) {
            $query['dis_order_id'] = $request->disOrderId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsBtripCorpToken)) {
            $realHeaders['x-acs-btrip-corp-token'] = Utils::toJSONString($headers->xAcsBtripCorpToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'HotelOrderCancel',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dtb-hotel/v1/orders/action/cancel',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return HotelOrderCancelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param HotelOrderCancelRequest $request
     *
     * @return HotelOrderCancelResponse
     */
    public function hotelOrderCancel($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new HotelOrderCancelHeaders([]);

        return $this->hotelOrderCancelWithOptions($request, $headers, $runtime);
    }

    /**
     * @param HotelOrderCreateRequest $tmpReq
     * @param HotelOrderCreateHeaders $headers
     * @param RuntimeOptions          $runtime
     *
     * @return HotelOrderCreateResponse
     */
    public function hotelOrderCreateWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new HotelOrderCreateShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->invoiceInfo)) {
            $request->invoiceInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->invoiceInfo, 'invoice_info', 'json');
        }
        if (!Utils::isUnset($tmpReq->occupantInfoList)) {
            $request->occupantInfoListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->occupantInfoList, 'occupant_info_list', 'json');
        }
        if (!Utils::isUnset($tmpReq->promotionInfo)) {
            $request->promotionInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->promotionInfo, 'promotion_info', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->btripUserId)) {
            $body['btrip_user_id'] = $request->btripUserId;
        }
        if (!Utils::isUnset($request->checkIn)) {
            $body['check_in'] = $request->checkIn;
        }
        if (!Utils::isUnset($request->checkOut)) {
            $body['check_out'] = $request->checkOut;
        }
        if (!Utils::isUnset($request->contractEmail)) {
            $body['contract_email'] = $request->contractEmail;
        }
        if (!Utils::isUnset($request->contractName)) {
            $body['contract_name'] = $request->contractName;
        }
        if (!Utils::isUnset($request->contractPhone)) {
            $body['contract_phone'] = $request->contractPhone;
        }
        if (!Utils::isUnset($request->corpPayPrice)) {
            $body['corp_pay_price'] = $request->corpPayPrice;
        }
        if (!Utils::isUnset($request->disOrderId)) {
            $body['dis_order_id'] = $request->disOrderId;
        }
        if (!Utils::isUnset($request->invoiceInfoShrink)) {
            $body['invoice_info'] = $request->invoiceInfoShrink;
        }
        if (!Utils::isUnset($request->itemId)) {
            $body['item_id'] = $request->itemId;
        }
        if (!Utils::isUnset($request->itineraryNo)) {
            $body['itinerary_no'] = $request->itineraryNo;
        }
        if (!Utils::isUnset($request->occupantInfoListShrink)) {
            $body['occupant_info_list'] = $request->occupantInfoListShrink;
        }
        if (!Utils::isUnset($request->personPayPrice)) {
            $body['person_pay_price'] = $request->personPayPrice;
        }
        if (!Utils::isUnset($request->promotionInfoShrink)) {
            $body['promotion_info'] = $request->promotionInfoShrink;
        }
        if (!Utils::isUnset($request->ratePlanId)) {
            $body['rate_plan_id'] = $request->ratePlanId;
        }
        if (!Utils::isUnset($request->roomId)) {
            $body['room_id'] = $request->roomId;
        }
        if (!Utils::isUnset($request->roomNum)) {
            $body['room_num'] = $request->roomNum;
        }
        if (!Utils::isUnset($request->sellerId)) {
            $body['seller_id'] = $request->sellerId;
        }
        if (!Utils::isUnset($request->shid)) {
            $body['shid'] = $request->shid;
        }
        if (!Utils::isUnset($request->totalOrderPrice)) {
            $body['total_order_price'] = $request->totalOrderPrice;
        }
        if (!Utils::isUnset($request->validateResKey)) {
            $body['validate_res_key'] = $request->validateResKey;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsBtripCorpToken)) {
            $realHeaders['x-acs-btrip-corp-token'] = Utils::toJSONString($headers->xAcsBtripCorpToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'HotelOrderCreate',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dtb-hotel/v1/orders/action/create',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return HotelOrderCreateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param HotelOrderCreateRequest $request
     *
     * @return HotelOrderCreateResponse
     */
    public function hotelOrderCreate($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new HotelOrderCreateHeaders([]);

        return $this->hotelOrderCreateWithOptions($request, $headers, $runtime);
    }

    /**
     * @param HotelOrderDetailInfoRequest $request
     * @param HotelOrderDetailInfoHeaders $headers
     * @param RuntimeOptions              $runtime
     *
     * @return HotelOrderDetailInfoResponse
     */
    public function hotelOrderDetailInfoWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->disOrderId)) {
            $query['dis_order_id'] = $request->disOrderId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsBtripCorpToken)) {
            $realHeaders['x-acs-btrip-corp-token'] = Utils::toJSONString($headers->xAcsBtripCorpToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'HotelOrderDetailInfo',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dtb-hotel/v1/orders/action/detail',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return HotelOrderDetailInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param HotelOrderDetailInfoRequest $request
     *
     * @return HotelOrderDetailInfoResponse
     */
    public function hotelOrderDetailInfo($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new HotelOrderDetailInfoHeaders([]);

        return $this->hotelOrderDetailInfoWithOptions($request, $headers, $runtime);
    }

    /**
     * @param HotelOrderListQueryRequest $request
     * @param HotelOrderListQueryHeaders $headers
     * @param RuntimeOptions             $runtime
     *
     * @return HotelOrderListQueryResponse
     */
    public function hotelOrderListQueryWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->allApply)) {
            $query['all_apply'] = $request->allApply;
        }
        if (!Utils::isUnset($request->applyId)) {
            $query['apply_id'] = $request->applyId;
        }
        if (!Utils::isUnset($request->departId)) {
            $query['depart_id'] = $request->departId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['end_time'] = $request->endTime;
        }
        if (!Utils::isUnset($request->page)) {
            $query['page'] = $request->page;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['page_size'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['start_time'] = $request->startTime;
        }
        if (!Utils::isUnset($request->thirdpartApplyId)) {
            $query['thirdpart_apply_id'] = $request->thirdpartApplyId;
        }
        if (!Utils::isUnset($request->updateEndTime)) {
            $query['update_end_time'] = $request->updateEndTime;
        }
        if (!Utils::isUnset($request->updateStartTime)) {
            $query['update_start_time'] = $request->updateStartTime;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['user_id'] = $request->userId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsBtripSoCorpToken)) {
            $realHeaders['x-acs-btrip-so-corp-token'] = Utils::toJSONString($headers->xAcsBtripSoCorpToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'HotelOrderListQuery',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/hotel/v1/order-list',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return HotelOrderListQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param HotelOrderListQueryRequest $request
     *
     * @return HotelOrderListQueryResponse
     */
    public function hotelOrderListQuery($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new HotelOrderListQueryHeaders([]);

        return $this->hotelOrderListQueryWithOptions($request, $headers, $runtime);
    }

    /**
     * @param HotelOrderPayRequest $request
     * @param HotelOrderPayHeaders $headers
     * @param RuntimeOptions       $runtime
     *
     * @return HotelOrderPayResponse
     */
    public function hotelOrderPayWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->btripUserId)) {
            $body['btrip_user_id'] = $request->btripUserId;
        }
        if (!Utils::isUnset($request->companyPayFee)) {
            $body['company_pay_fee'] = $request->companyPayFee;
        }
        if (!Utils::isUnset($request->disOrderId)) {
            $body['dis_order_id'] = $request->disOrderId;
        }
        if (!Utils::isUnset($request->personPayFee)) {
            $body['person_pay_fee'] = $request->personPayFee;
        }
        if (!Utils::isUnset($request->thirdPayAccount)) {
            $body['third_pay_account'] = $request->thirdPayAccount;
        }
        if (!Utils::isUnset($request->thirdTradeNo)) {
            $body['third_trade_no'] = $request->thirdTradeNo;
        }
        if (!Utils::isUnset($request->totalPrice)) {
            $body['total_price'] = $request->totalPrice;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsBtripCorpToken)) {
            $realHeaders['x-acs-btrip-corp-token'] = Utils::toJSONString($headers->xAcsBtripCorpToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'HotelOrderPay',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dtb-hotel/v1/orders/action/pay',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return HotelOrderPayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param HotelOrderPayRequest $request
     *
     * @return HotelOrderPayResponse
     */
    public function hotelOrderPay($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new HotelOrderPayHeaders([]);

        return $this->hotelOrderPayWithOptions($request, $headers, $runtime);
    }

    /**
     * @param HotelOrderPreValidateRequest $tmpReq
     * @param HotelOrderPreValidateHeaders $headers
     * @param RuntimeOptions               $runtime
     *
     * @return HotelOrderPreValidateResponse
     */
    public function hotelOrderPreValidateWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new HotelOrderPreValidateShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->dailyList)) {
            $request->dailyListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->dailyList, 'daily_list', 'json');
        }
        if (!Utils::isUnset($tmpReq->occupantInfoList)) {
            $request->occupantInfoListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->occupantInfoList, 'occupant_info_list', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->btripUserId)) {
            $query['btrip_user_id'] = $request->btripUserId;
        }
        if (!Utils::isUnset($request->checkIn)) {
            $query['check_in'] = $request->checkIn;
        }
        if (!Utils::isUnset($request->checkOut)) {
            $query['check_out'] = $request->checkOut;
        }
        if (!Utils::isUnset($request->dailyListShrink)) {
            $query['daily_list'] = $request->dailyListShrink;
        }
        if (!Utils::isUnset($request->itemId)) {
            $query['item_id'] = $request->itemId;
        }
        if (!Utils::isUnset($request->numberOfAdultsPerRoom)) {
            $query['number_of_adults_per_room'] = $request->numberOfAdultsPerRoom;
        }
        if (!Utils::isUnset($request->occupantInfoListShrink)) {
            $query['occupant_info_list'] = $request->occupantInfoListShrink;
        }
        if (!Utils::isUnset($request->ratePlanId)) {
            $query['rate_plan_id'] = $request->ratePlanId;
        }
        if (!Utils::isUnset($request->roomId)) {
            $query['room_id'] = $request->roomId;
        }
        if (!Utils::isUnset($request->roomNum)) {
            $query['room_num'] = $request->roomNum;
        }
        if (!Utils::isUnset($request->searchRoomPrice)) {
            $query['search_room_price'] = $request->searchRoomPrice;
        }
        if (!Utils::isUnset($request->sellerId)) {
            $query['seller_id'] = $request->sellerId;
        }
        if (!Utils::isUnset($request->shid)) {
            $query['shid'] = $request->shid;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsBtripCorpToken)) {
            $realHeaders['x-acs-btrip-corp-token'] = Utils::toJSONString($headers->xAcsBtripCorpToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'HotelOrderPreValidate',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dtb-hotel/v1/orders/action/pre-validate',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return HotelOrderPreValidateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param HotelOrderPreValidateRequest $request
     *
     * @return HotelOrderPreValidateResponse
     */
    public function hotelOrderPreValidate($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new HotelOrderPreValidateHeaders([]);

        return $this->hotelOrderPreValidateWithOptions($request, $headers, $runtime);
    }

    /**
     * @param HotelOrderQueryRequest $request
     * @param HotelOrderQueryHeaders $headers
     * @param RuntimeOptions         $runtime
     *
     * @return HotelOrderQueryResponse
     */
    public function hotelOrderQueryWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->orderId)) {
            $query['order_id'] = $request->orderId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsBtripSoCorpToken)) {
            $realHeaders['x-acs-btrip-so-corp-token'] = Utils::toJSONString($headers->xAcsBtripSoCorpToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'HotelOrderQuery',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/hotel/v1/order',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return HotelOrderQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param HotelOrderQueryRequest $request
     *
     * @return HotelOrderQueryResponse
     */
    public function hotelOrderQuery($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new HotelOrderQueryHeaders([]);

        return $this->hotelOrderQueryWithOptions($request, $headers, $runtime);
    }

    /**
     * @param HotelRoomInfoRequest $tmpReq
     * @param HotelRoomInfoHeaders $headers
     * @param RuntimeOptions       $runtime
     *
     * @return HotelRoomInfoResponse
     */
    public function hotelRoomInfoWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new HotelRoomInfoShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->roomIds)) {
            $request->roomIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->roomIds, 'room_ids', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->roomIdsShrink)) {
            $query['room_ids'] = $request->roomIdsShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsBtripCorpToken)) {
            $realHeaders['x-acs-btrip-corp-token'] = Utils::toJSONString($headers->xAcsBtripCorpToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'HotelRoomInfo',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dtb-hotel/v1/room-infos',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return HotelRoomInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param HotelRoomInfoRequest $request
     *
     * @return HotelRoomInfoResponse
     */
    public function hotelRoomInfo($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new HotelRoomInfoHeaders([]);

        return $this->hotelRoomInfoWithOptions($request, $headers, $runtime);
    }

    /**
     * @param HotelSearchRequest $tmpReq
     * @param HotelSearchHeaders $headers
     * @param RuntimeOptions     $runtime
     *
     * @return HotelSearchResponse
     */
    public function hotelSearchWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new HotelSearchShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->brandCode)) {
            $request->brandCodeShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->brandCode, 'brand_code', 'json');
        }
        if (!Utils::isUnset($tmpReq->shids)) {
            $request->shidsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->shids, 'shids', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->adultNum)) {
            $query['adult_num'] = $request->adultNum;
        }
        if (!Utils::isUnset($request->brandCodeShrink)) {
            $query['brand_code'] = $request->brandCodeShrink;
        }
        if (!Utils::isUnset($request->btripUserId)) {
            $query['btrip_user_id'] = $request->btripUserId;
        }
        if (!Utils::isUnset($request->checkInDate)) {
            $query['check_in_date'] = $request->checkInDate;
        }
        if (!Utils::isUnset($request->checkOutDate)) {
            $query['check_out_date'] = $request->checkOutDate;
        }
        if (!Utils::isUnset($request->cityCode)) {
            $query['city_code'] = $request->cityCode;
        }
        if (!Utils::isUnset($request->dir)) {
            $query['dir'] = $request->dir;
        }
        if (!Utils::isUnset($request->distance)) {
            $query['distance'] = $request->distance;
        }
        if (!Utils::isUnset($request->districtCode)) {
            $query['district_code'] = $request->districtCode;
        }
        if (!Utils::isUnset($request->hotelStar)) {
            $query['hotel_star'] = $request->hotelStar;
        }
        if (!Utils::isUnset($request->isProtocol)) {
            $query['is_protocol'] = $request->isProtocol;
        }
        if (!Utils::isUnset($request->keyWords)) {
            $query['key_words'] = $request->keyWords;
        }
        if (!Utils::isUnset($request->location)) {
            $query['location'] = $request->location;
        }
        if (!Utils::isUnset($request->maxPrice)) {
            $query['max_price'] = $request->maxPrice;
        }
        if (!Utils::isUnset($request->minPrice)) {
            $query['min_price'] = $request->minPrice;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['page_no'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['page_size'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->payOverType)) {
            $query['pay_over_type'] = $request->payOverType;
        }
        if (!Utils::isUnset($request->paymentType)) {
            $query['payment_type'] = $request->paymentType;
        }
        if (!Utils::isUnset($request->shidsShrink)) {
            $query['shids'] = $request->shidsShrink;
        }
        if (!Utils::isUnset($request->sortCode)) {
            $query['sort_code'] = $request->sortCode;
        }
        if (!Utils::isUnset($request->superMan)) {
            $query['super_man'] = $request->superMan;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsBtripCorpToken)) {
            $realHeaders['x-acs-btrip-corp-token'] = Utils::toJSONString($headers->xAcsBtripCorpToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'HotelSearch',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dtb-hotel/v1/hotels/action/search',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return HotelSearchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param HotelSearchRequest $request
     *
     * @return HotelSearchResponse
     */
    public function hotelSearch($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new HotelSearchHeaders([]);

        return $this->hotelSearchWithOptions($request, $headers, $runtime);
    }

    /**
     * @param HotelStaticInfoRequest $tmpReq
     * @param HotelStaticInfoHeaders $headers
     * @param RuntimeOptions         $runtime
     *
     * @return HotelStaticInfoResponse
     */
    public function hotelStaticInfoWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new HotelStaticInfoShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->hotelIds)) {
            $request->hotelIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->hotelIds, 'hotel_ids', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->hotelIdsShrink)) {
            $query['hotel_ids'] = $request->hotelIdsShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsBtripCorpToken)) {
            $realHeaders['x-acs-btrip-corp-token'] = Utils::toJSONString($headers->xAcsBtripCorpToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'HotelStaticInfo',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dtb-hotel/v1/static-infos',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return HotelStaticInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param HotelStaticInfoRequest $request
     *
     * @return HotelStaticInfoResponse
     */
    public function hotelStaticInfo($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new HotelStaticInfoHeaders([]);

        return $this->hotelStaticInfoWithOptions($request, $headers, $runtime);
    }

    /**
     * @param IeFlightBillSettlementQueryRequest $request
     * @param IeFlightBillSettlementQueryHeaders $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return IeFlightBillSettlementQueryResponse
     */
    public function ieFlightBillSettlementQueryWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNo)) {
            $query['page_no'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['page_size'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->periodEnd)) {
            $query['period_end'] = $request->periodEnd;
        }
        if (!Utils::isUnset($request->periodStart)) {
            $query['period_start'] = $request->periodStart;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsBtripSoCorpToken)) {
            $realHeaders['x-acs-btrip-so-corp-token'] = Utils::toJSONString($headers->xAcsBtripSoCorpToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'IeFlightBillSettlementQuery',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/ie-flight/v1/bill-settlement',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return IeFlightBillSettlementQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param IeFlightBillSettlementQueryRequest $request
     *
     * @return IeFlightBillSettlementQueryResponse
     */
    public function ieFlightBillSettlementQuery($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new IeFlightBillSettlementQueryHeaders([]);

        return $this->ieFlightBillSettlementQueryWithOptions($request, $headers, $runtime);
    }

    /**
     * @param InsInvoiceScanQueryRequest $request
     * @param InsInvoiceScanQueryHeaders $headers
     * @param RuntimeOptions             $runtime
     *
     * @return InsInvoiceScanQueryResponse
     */
    public function insInvoiceScanQueryWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->billDate)) {
            $query['bill_date'] = $request->billDate;
        }
        if (!Utils::isUnset($request->billId)) {
            $query['bill_id'] = $request->billId;
        }
        if (!Utils::isUnset($request->invoiceSubTaskId)) {
            $query['invoice_sub_task_id'] = $request->invoiceSubTaskId;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['page_no'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['page_size'] = $request->pageSize;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsBtripSoCorpToken)) {
            $realHeaders['x-acs-btrip-so-corp-token'] = Utils::toJSONString($headers->xAcsBtripSoCorpToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'InsInvoiceScanQuery',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/scan/v1/ins-invoice',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return InsInvoiceScanQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param InsInvoiceScanQueryRequest $request
     *
     * @return InsInvoiceScanQueryResponse
     */
    public function insInvoiceScanQuery($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new InsInvoiceScanQueryHeaders([]);

        return $this->insInvoiceScanQueryWithOptions($request, $headers, $runtime);
    }

    /**
     * @param InvoiceAddRequest $request
     * @param InvoiceAddHeaders $headers
     * @param RuntimeOptions    $runtime
     *
     * @return InvoiceAddResponse
     */
    public function invoiceAddWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->address)) {
            $body['address'] = $request->address;
        }
        if (!Utils::isUnset($request->bankName)) {
            $body['bank_name'] = $request->bankName;
        }
        if (!Utils::isUnset($request->bankNo)) {
            $body['bank_no'] = $request->bankNo;
        }
        if (!Utils::isUnset($request->taxNo)) {
            $body['tax_no'] = $request->taxNo;
        }
        if (!Utils::isUnset($request->tel)) {
            $body['tel'] = $request->tel;
        }
        if (!Utils::isUnset($request->thirdPartId)) {
            $body['third_part_id'] = $request->thirdPartId;
        }
        if (!Utils::isUnset($request->title)) {
            $body['title'] = $request->title;
        }
        if (!Utils::isUnset($request->type)) {
            $body['type'] = $request->type;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsBtripSoCorpToken)) {
            $realHeaders['x-acs-btrip-so-corp-token'] = Utils::toJSONString($headers->xAcsBtripSoCorpToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'InvoiceAdd',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/invoice/v1/add-invoice',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return InvoiceAddResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param InvoiceAddRequest $request
     *
     * @return InvoiceAddResponse
     */
    public function invoiceAdd($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new InvoiceAddHeaders([]);

        return $this->invoiceAddWithOptions($request, $headers, $runtime);
    }

    /**
     * @param InvoiceDeleteRequest $request
     * @param InvoiceDeleteHeaders $headers
     * @param RuntimeOptions       $runtime
     *
     * @return InvoiceDeleteResponse
     */
    public function invoiceDeleteWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->thirdPartId)) {
            $query['third_part_id'] = $request->thirdPartId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsBtripSoCorpToken)) {
            $realHeaders['x-acs-btrip-so-corp-token'] = Utils::toJSONString($headers->xAcsBtripSoCorpToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'InvoiceDelete',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/invoice/v1/invoice',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return InvoiceDeleteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param InvoiceDeleteRequest $request
     *
     * @return InvoiceDeleteResponse
     */
    public function invoiceDelete($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new InvoiceDeleteHeaders([]);

        return $this->invoiceDeleteWithOptions($request, $headers, $runtime);
    }

    /**
     * @param InvoiceModifyRequest $request
     * @param InvoiceModifyHeaders $headers
     * @param RuntimeOptions       $runtime
     *
     * @return InvoiceModifyResponse
     */
    public function invoiceModifyWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->address)) {
            $body['address'] = $request->address;
        }
        if (!Utils::isUnset($request->bankName)) {
            $body['bank_name'] = $request->bankName;
        }
        if (!Utils::isUnset($request->bankNo)) {
            $body['bank_no'] = $request->bankNo;
        }
        if (!Utils::isUnset($request->taxNo)) {
            $body['tax_no'] = $request->taxNo;
        }
        if (!Utils::isUnset($request->tel)) {
            $body['tel'] = $request->tel;
        }
        if (!Utils::isUnset($request->thirdPartId)) {
            $body['third_part_id'] = $request->thirdPartId;
        }
        if (!Utils::isUnset($request->title)) {
            $body['title'] = $request->title;
        }
        if (!Utils::isUnset($request->type)) {
            $body['type'] = $request->type;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsBtripSoCorpToken)) {
            $realHeaders['x-acs-btrip-so-corp-token'] = Utils::toJSONString($headers->xAcsBtripSoCorpToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'InvoiceModify',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/invoice/v1/invoice',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return InvoiceModifyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param InvoiceModifyRequest $request
     *
     * @return InvoiceModifyResponse
     */
    public function invoiceModify($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new InvoiceModifyHeaders([]);

        return $this->invoiceModifyWithOptions($request, $headers, $runtime);
    }

    /**
     * @param InvoiceRuleAddRequest $tmpReq
     * @param InvoiceRuleAddHeaders $headers
     * @param RuntimeOptions        $runtime
     *
     * @return InvoiceRuleAddResponse
     */
    public function invoiceRuleAddWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new InvoiceRuleAddShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->entities)) {
            $request->entitiesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->entities, 'entities', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->entitiesShrink)) {
            $body['entities'] = $request->entitiesShrink;
        }
        if (!Utils::isUnset($request->thirdPartId)) {
            $body['third_part_id'] = $request->thirdPartId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsBtripCorpToken)) {
            $realHeaders['x-acs-btrip-corp-token'] = Utils::toJSONString($headers->xAcsBtripCorpToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'InvoiceRuleAdd',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/invoice/v1/invoice-rule',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return InvoiceRuleAddResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param InvoiceRuleAddRequest $request
     *
     * @return InvoiceRuleAddResponse
     */
    public function invoiceRuleAdd($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new InvoiceRuleAddHeaders([]);

        return $this->invoiceRuleAddWithOptions($request, $headers, $runtime);
    }

    /**
     * @param InvoiceRuleDeleteRequest $tmpReq
     * @param InvoiceRuleDeleteHeaders $headers
     * @param RuntimeOptions           $runtime
     *
     * @return InvoiceRuleDeleteResponse
     */
    public function invoiceRuleDeleteWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new InvoiceRuleDeleteShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->entities)) {
            $request->entitiesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->entities, 'entities', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->delAll)) {
            $query['del_all'] = $request->delAll;
        }
        if (!Utils::isUnset($request->entitiesShrink)) {
            $query['entities'] = $request->entitiesShrink;
        }
        if (!Utils::isUnset($request->thirdPartId)) {
            $query['third_part_id'] = $request->thirdPartId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsBtripCorpToken)) {
            $realHeaders['x-acs-btrip-corp-token'] = Utils::toJSONString($headers->xAcsBtripCorpToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'InvoiceRuleDelete',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/invoice/v1/invoice-rule',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return InvoiceRuleDeleteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param InvoiceRuleDeleteRequest $request
     *
     * @return InvoiceRuleDeleteResponse
     */
    public function invoiceRuleDelete($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new InvoiceRuleDeleteHeaders([]);

        return $this->invoiceRuleDeleteWithOptions($request, $headers, $runtime);
    }

    /**
     * @param InvoiceRuleSaveRequest $tmpReq
     * @param InvoiceRuleSaveHeaders $headers
     * @param RuntimeOptions         $runtime
     *
     * @return InvoiceRuleSaveResponse
     */
    public function invoiceRuleSaveWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new InvoiceRuleSaveShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->entities)) {
            $request->entitiesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->entities, 'entities', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->allEmploye)) {
            $body['all_employe'] = $request->allEmploye;
        }
        if (!Utils::isUnset($request->entitiesShrink)) {
            $body['entities'] = $request->entitiesShrink;
        }
        if (!Utils::isUnset($request->thirdPartId)) {
            $body['third_part_id'] = $request->thirdPartId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsBtripSoCorpToken)) {
            $realHeaders['x-acs-btrip-so-corp-token'] = Utils::toJSONString($headers->xAcsBtripSoCorpToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'InvoiceRuleSave',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/invoice/v1/invoice-rule',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return InvoiceRuleSaveResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param InvoiceRuleSaveRequest $request
     *
     * @return InvoiceRuleSaveResponse
     */
    public function invoiceRuleSave($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new InvoiceRuleSaveHeaders([]);

        return $this->invoiceRuleSaveWithOptions($request, $headers, $runtime);
    }

    /**
     * @param InvoiceSearchRequest $request
     * @param InvoiceSearchHeaders $headers
     * @param RuntimeOptions       $runtime
     *
     * @return InvoiceSearchResponse
     */
    public function invoiceSearchWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->title)) {
            $query['title'] = $request->title;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['user_id'] = $request->userId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsBtripSoCorpToken)) {
            $realHeaders['x-acs-btrip-so-corp-token'] = Utils::toJSONString($headers->xAcsBtripSoCorpToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'InvoiceSearch',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/invoice/v1/invoice',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return InvoiceSearchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param InvoiceSearchRequest $request
     *
     * @return InvoiceSearchResponse
     */
    public function invoiceSearch($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new InvoiceSearchHeaders([]);

        return $this->invoiceSearchWithOptions($request, $headers, $runtime);
    }

    /**
     * @param IsvRuleSaveRequest $request
     * @param IsvRuleSaveHeaders $headers
     * @param RuntimeOptions     $runtime
     *
     * @return IsvRuleSaveResponse
     */
    public function isvRuleSaveWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bookType)) {
            $body['book_type'] = $request->bookType;
        }
        if (!Utils::isUnset($request->status)) {
            $body['status'] = $request->status;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['user_id'] = $request->userId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsBtripSoCorpToken)) {
            $realHeaders['x-acs-btrip-so-corp-token'] = Utils::toJSONString($headers->xAcsBtripSoCorpToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'IsvRuleSave',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/user/v1/rule',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return IsvRuleSaveResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param IsvRuleSaveRequest $request
     *
     * @return IsvRuleSaveResponse
     */
    public function isvRuleSave($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new IsvRuleSaveHeaders([]);

        return $this->isvRuleSaveWithOptions($request, $headers, $runtime);
    }

    /**
     * @param IsvUserSaveRequest $tmpReq
     * @param IsvUserSaveHeaders $headers
     * @param RuntimeOptions     $runtime
     *
     * @return IsvUserSaveResponse
     */
    public function isvUserSaveWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new IsvUserSaveShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->userList)) {
            $request->userListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->userList, 'user_list', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->userListShrink)) {
            $body['user_list'] = $request->userListShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsBtripSoCorpToken)) {
            $realHeaders['x-acs-btrip-so-corp-token'] = Utils::toJSONString($headers->xAcsBtripSoCorpToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'IsvUserSave',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/isvuser/v1/isvuser',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return IsvUserSaveResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param IsvUserSaveRequest $request
     *
     * @return IsvUserSaveResponse
     */
    public function isvUserSave($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new IsvUserSaveHeaders([]);

        return $this->isvUserSaveWithOptions($request, $headers, $runtime);
    }

    /**
     * @param MonthBillConfirmRequest $request
     * @param MonthBillConfirmHeaders $headers
     * @param RuntimeOptions          $runtime
     *
     * @return MonthBillConfirmResponse
     */
    public function monthBillConfirmWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->mailBillDate)) {
            $body['mail_bill_date'] = $request->mailBillDate;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['user_id'] = $request->userId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsBtripCorpToken)) {
            $realHeaders['x-acs-btrip-corp-token'] = Utils::toJSONString($headers->xAcsBtripCorpToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'MonthBillConfirm',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/bill/v1/status/action/confirm',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return MonthBillConfirmResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param MonthBillConfirmRequest $request
     *
     * @return MonthBillConfirmResponse
     */
    public function monthBillConfirm($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new MonthBillConfirmHeaders([]);

        return $this->monthBillConfirmWithOptions($request, $headers, $runtime);
    }

    /**
     * @param MonthBillGetRequest $request
     * @param MonthBillGetHeaders $headers
     * @param RuntimeOptions      $runtime
     *
     * @return MonthBillGetResponse
     */
    public function monthBillGetWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->billMonth)) {
            $query['bill_month'] = $request->billMonth;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsBtripSoCorpToken)) {
            $realHeaders['x-acs-btrip-so-corp-token'] = Utils::toJSONString($headers->xAcsBtripSoCorpToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'MonthBillGet',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/open/v1/month-bill',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return MonthBillGetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param MonthBillGetRequest $request
     *
     * @return MonthBillGetResponse
     */
    public function monthBillGet($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new MonthBillGetHeaders([]);

        return $this->monthBillGetWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ProjectAddRequest $request
     * @param ProjectAddHeaders $headers
     * @param RuntimeOptions    $runtime
     *
     * @return ProjectAddResponse
     */
    public function projectAddWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->code)) {
            $body['code'] = $request->code;
        }
        if (!Utils::isUnset($request->projectName)) {
            $body['project_name'] = $request->projectName;
        }
        if (!Utils::isUnset($request->thirdPartCostCenterId)) {
            $body['third_part_cost_center_id'] = $request->thirdPartCostCenterId;
        }
        if (!Utils::isUnset($request->thirdPartId)) {
            $body['third_part_id'] = $request->thirdPartId;
        }
        if (!Utils::isUnset($request->thirdPartInvoiceId)) {
            $body['third_part_invoice_id'] = $request->thirdPartInvoiceId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsBtripSoCorpToken)) {
            $realHeaders['x-acs-btrip-so-corp-token'] = Utils::toJSONString($headers->xAcsBtripSoCorpToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ProjectAdd',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/cost/v1/project',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ProjectAddResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ProjectAddRequest $request
     *
     * @return ProjectAddResponse
     */
    public function projectAdd($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ProjectAddHeaders([]);

        return $this->projectAddWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ProjectDeleteRequest $request
     * @param ProjectDeleteHeaders $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ProjectDeleteResponse
     */
    public function projectDeleteWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->thirdPartId)) {
            $query['third_part_id'] = $request->thirdPartId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsBtripSoCorpToken)) {
            $realHeaders['x-acs-btrip-so-corp-token'] = Utils::toJSONString($headers->xAcsBtripSoCorpToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ProjectDelete',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/cost/v1/project',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ProjectDeleteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ProjectDeleteRequest $request
     *
     * @return ProjectDeleteResponse
     */
    public function projectDelete($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ProjectDeleteHeaders([]);

        return $this->projectDeleteWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ProjectModifyRequest $request
     * @param ProjectModifyHeaders $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ProjectModifyResponse
     */
    public function projectModifyWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->code)) {
            $body['code'] = $request->code;
        }
        if (!Utils::isUnset($request->projectName)) {
            $body['project_name'] = $request->projectName;
        }
        if (!Utils::isUnset($request->thirdPartCostCenterId)) {
            $body['third_part_cost_center_id'] = $request->thirdPartCostCenterId;
        }
        if (!Utils::isUnset($request->thirdPartId)) {
            $body['third_part_id'] = $request->thirdPartId;
        }
        if (!Utils::isUnset($request->thirdPartInvoiceId)) {
            $body['third_part_invoice_id'] = $request->thirdPartInvoiceId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsBtripSoCorpToken)) {
            $realHeaders['x-acs-btrip-so-corp-token'] = Utils::toJSONString($headers->xAcsBtripSoCorpToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ProjectModify',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/cost/v1/project',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ProjectModifyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ProjectModifyRequest $request
     *
     * @return ProjectModifyResponse
     */
    public function projectModify($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ProjectModifyHeaders([]);

        return $this->projectModifyWithOptions($request, $headers, $runtime);
    }

    /**
     * @param QueryReimbursementOrderRequest $request
     * @param QueryReimbursementOrderHeaders $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return QueryReimbursementOrderResponse
     */
    public function queryReimbursementOrderWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->reimbOrderNo)) {
            $query['reimb_order_no'] = $request->reimbOrderNo;
        }
        if (!Utils::isUnset($request->subCorpId)) {
            $query['sub_corp_id'] = $request->subCorpId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsBtripCorpToken)) {
            $realHeaders['x-acs-btrip-corp-token'] = Utils::toJSONString($headers->xAcsBtripCorpToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryReimbursementOrder',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/reimbursement/v1/order',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return QueryReimbursementOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryReimbursementOrderRequest $request
     *
     * @return QueryReimbursementOrderResponse
     */
    public function queryReimbursementOrder($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryReimbursementOrderHeaders([]);

        return $this->queryReimbursementOrderWithOptions($request, $headers, $runtime);
    }

    /**
     * @param SyncSingleUserRequest $tmpReq
     * @param SyncSingleUserHeaders $headers
     * @param RuntimeOptions        $runtime
     *
     * @return SyncSingleUserResponse
     */
    public function syncSingleUserWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SyncSingleUserShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->thirdDepartIdList)) {
            $request->thirdDepartIdListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->thirdDepartIdList, 'third_depart_id_list', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->email)) {
            $body['email'] = $request->email;
        }
        if (!Utils::isUnset($request->jobNo)) {
            $body['job_no'] = $request->jobNo;
        }
        if (!Utils::isUnset($request->leaveStatus)) {
            $body['leave_status'] = $request->leaveStatus;
        }
        if (!Utils::isUnset($request->managerUserId)) {
            $body['manager_user_id'] = $request->managerUserId;
        }
        if (!Utils::isUnset($request->phone)) {
            $body['phone'] = $request->phone;
        }
        if (!Utils::isUnset($request->position)) {
            $body['position'] = $request->position;
        }
        if (!Utils::isUnset($request->positionLevel)) {
            $body['position_level'] = $request->positionLevel;
        }
        if (!Utils::isUnset($request->realNameEn)) {
            $body['real_name_en'] = $request->realNameEn;
        }
        if (!Utils::isUnset($request->thirdDepartIdListShrink)) {
            $body['third_depart_id_list'] = $request->thirdDepartIdListShrink;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['user_id'] = $request->userId;
        }
        if (!Utils::isUnset($request->userName)) {
            $body['user_name'] = $request->userName;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsBtripSoCorpToken)) {
            $realHeaders['x-acs-btrip-so-corp-token'] = Utils::toJSONString($headers->xAcsBtripSoCorpToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SyncSingleUser',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/user/v1/single-user/action/sync',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SyncSingleUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SyncSingleUserRequest $request
     *
     * @return SyncSingleUserResponse
     */
    public function syncSingleUser($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new SyncSingleUserHeaders([]);

        return $this->syncSingleUserWithOptions($request, $headers, $runtime);
    }

    /**
     * @param SyncThirdUserMappingRequest $request
     * @param SyncThirdUserMappingHeaders $headers
     * @param RuntimeOptions              $runtime
     *
     * @return SyncThirdUserMappingResponse
     */
    public function syncThirdUserMappingWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->status)) {
            $body['status'] = $request->status;
        }
        if (!Utils::isUnset($request->thirdChannelType)) {
            $body['third_channel_type'] = $request->thirdChannelType;
        }
        if (!Utils::isUnset($request->thirdUserId)) {
            $body['third_user_id'] = $request->thirdUserId;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['user_id'] = $request->userId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsBtripCorpToken)) {
            $realHeaders['x-acs-btrip-corp-token'] = Utils::toJSONString($headers->xAcsBtripCorpToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SyncThirdUserMapping',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/user/v1/third-users/action/mapping',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SyncThirdUserMappingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SyncThirdUserMappingRequest $request
     *
     * @return SyncThirdUserMappingResponse
     */
    public function syncThirdUserMapping($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new SyncThirdUserMappingHeaders([]);

        return $this->syncThirdUserMappingWithOptions($request, $headers, $runtime);
    }

    /**
     * @param TicketChangingApplyRequest $tmpReq
     * @param TicketChangingApplyHeaders $headers
     * @param RuntimeOptions             $runtime
     *
     * @return TicketChangingApplyResponse
     */
    public function ticketChangingApplyWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new TicketChangingApplyShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->modifyFlightInfoList)) {
            $request->modifyFlightInfoListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->modifyFlightInfoList, 'modify_flight_info_list', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->disOrderId)) {
            $body['dis_order_id'] = $request->disOrderId;
        }
        if (!Utils::isUnset($request->disSubOrderId)) {
            $body['dis_sub_order_id'] = $request->disSubOrderId;
        }
        if (!Utils::isUnset($request->isVoluntary)) {
            $body['is_voluntary'] = $request->isVoluntary;
        }
        if (!Utils::isUnset($request->modifyFlightInfoListShrink)) {
            $body['modify_flight_info_list'] = $request->modifyFlightInfoListShrink;
        }
        if (!Utils::isUnset($request->otaItemId)) {
            $body['ota_item_id'] = $request->otaItemId;
        }
        if (!Utils::isUnset($request->reason)) {
            $body['reason'] = $request->reason;
        }
        if (!Utils::isUnset($request->sessionId)) {
            $body['session_id'] = $request->sessionId;
        }
        if (!Utils::isUnset($request->whetherRetry)) {
            $body['whether_retry'] = $request->whetherRetry;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsBtripCorpToken)) {
            $realHeaders['x-acs-btrip-corp-token'] = Utils::toJSONString($headers->xAcsBtripCorpToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'TicketChangingApply',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dtb-flight/v1/ticket-changing/action/apply',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TicketChangingApplyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param TicketChangingApplyRequest $request
     *
     * @return TicketChangingApplyResponse
     */
    public function ticketChangingApply($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new TicketChangingApplyHeaders([]);

        return $this->ticketChangingApplyWithOptions($request, $headers, $runtime);
    }

    /**
     * @param TicketChangingCancelRequest $request
     * @param TicketChangingCancelHeaders $headers
     * @param RuntimeOptions              $runtime
     *
     * @return TicketChangingCancelResponse
     */
    public function ticketChangingCancelWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->disOrderId)) {
            $query['dis_order_id'] = $request->disOrderId;
        }
        if (!Utils::isUnset($request->disSubOrderId)) {
            $query['dis_sub_order_id'] = $request->disSubOrderId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsBtripCorpToken)) {
            $realHeaders['x-acs-btrip-corp-token'] = Utils::toJSONString($headers->xAcsBtripCorpToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'TicketChangingCancel',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dtb-flight/v1/ticket-changing/action/cancel',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return TicketChangingCancelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param TicketChangingCancelRequest $request
     *
     * @return TicketChangingCancelResponse
     */
    public function ticketChangingCancel($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new TicketChangingCancelHeaders([]);

        return $this->ticketChangingCancelWithOptions($request, $headers, $runtime);
    }

    /**
     * @param TicketChangingDetailRequest $request
     * @param TicketChangingDetailHeaders $headers
     * @param RuntimeOptions              $runtime
     *
     * @return TicketChangingDetailResponse
     */
    public function ticketChangingDetailWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->disOrderId)) {
            $query['dis_order_id'] = $request->disOrderId;
        }
        if (!Utils::isUnset($request->disSubOrderId)) {
            $query['dis_sub_order_id'] = $request->disSubOrderId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsBtripCorpToken)) {
            $realHeaders['x-acs-btrip-corp-token'] = Utils::toJSONString($headers->xAcsBtripCorpToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'TicketChangingDetail',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dtb-flight/v1/ticket-changing/action/detail',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return TicketChangingDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param TicketChangingDetailRequest $request
     *
     * @return TicketChangingDetailResponse
     */
    public function ticketChangingDetail($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new TicketChangingDetailHeaders([]);

        return $this->ticketChangingDetailWithOptions($request, $headers, $runtime);
    }

    /**
     * @param TicketChangingEnquiryRequest $request
     * @param TicketChangingEnquiryHeaders $headers
     * @param RuntimeOptions               $runtime
     *
     * @return TicketChangingEnquiryResponse
     */
    public function ticketChangingEnquiryWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->arrCity)) {
            $query['arr_city'] = $request->arrCity;
        }
        if (!Utils::isUnset($request->depCity)) {
            $query['dep_city'] = $request->depCity;
        }
        if (!Utils::isUnset($request->disOrderId)) {
            $query['dis_order_id'] = $request->disOrderId;
        }
        if (!Utils::isUnset($request->isVoluntary)) {
            $query['is_voluntary'] = $request->isVoluntary;
        }
        if (!Utils::isUnset($request->modifyDepartDate)) {
            $query['modify_depart_date'] = $request->modifyDepartDate;
        }
        if (!Utils::isUnset($request->modifyFlightNo)) {
            $query['modify_flight_no'] = $request->modifyFlightNo;
        }
        if (!Utils::isUnset($request->sessionId)) {
            $query['session_id'] = $request->sessionId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsBtripCorpToken)) {
            $realHeaders['x-acs-btrip-corp-token'] = Utils::toJSONString($headers->xAcsBtripCorpToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'TicketChangingEnquiry',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dtb-flight/v1/ticket-changing/action/enquiry',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return TicketChangingEnquiryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param TicketChangingEnquiryRequest $request
     *
     * @return TicketChangingEnquiryResponse
     */
    public function ticketChangingEnquiry($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new TicketChangingEnquiryHeaders([]);

        return $this->ticketChangingEnquiryWithOptions($request, $headers, $runtime);
    }

    /**
     * @param TicketChangingFlightListRequest $tmpReq
     * @param TicketChangingFlightListHeaders $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return TicketChangingFlightListResponse
     */
    public function ticketChangingFlightListWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new TicketChangingFlightListShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->travelerInfoList)) {
            $request->travelerInfoListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->travelerInfoList, 'traveler_info_list', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->arrCity)) {
            $query['arr_city'] = $request->arrCity;
        }
        if (!Utils::isUnset($request->depCity)) {
            $query['dep_city'] = $request->depCity;
        }
        if (!Utils::isUnset($request->depDate)) {
            $query['dep_date'] = $request->depDate;
        }
        if (!Utils::isUnset($request->disOrderId)) {
            $query['dis_order_id'] = $request->disOrderId;
        }
        if (!Utils::isUnset($request->isVoluntary)) {
            $query['is_voluntary'] = $request->isVoluntary;
        }
        if (!Utils::isUnset($request->travelerInfoListShrink)) {
            $query['traveler_info_list'] = $request->travelerInfoListShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsBtripCorpToken)) {
            $realHeaders['x-acs-btrip-corp-token'] = Utils::toJSONString($headers->xAcsBtripCorpToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'TicketChangingFlightList',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/huge/dtb-flight/v1/ticket-changing-flight/action/list',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return TicketChangingFlightListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param TicketChangingFlightListRequest $request
     *
     * @return TicketChangingFlightListResponse
     */
    public function ticketChangingFlightList($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new TicketChangingFlightListHeaders([]);

        return $this->ticketChangingFlightListWithOptions($request, $headers, $runtime);
    }

    /**
     * @param TicketChangingPayRequest $tmpReq
     * @param TicketChangingPayHeaders $headers
     * @param RuntimeOptions           $runtime
     *
     * @return TicketChangingPayResponse
     */
    public function ticketChangingPayWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new TicketChangingPayShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->extra)) {
            $request->extraShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->extra, 'extra', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->corpPayPrice)) {
            $body['corp_pay_price'] = $request->corpPayPrice;
        }
        if (!Utils::isUnset($request->disOrderId)) {
            $body['dis_order_id'] = $request->disOrderId;
        }
        if (!Utils::isUnset($request->disSubOrderId)) {
            $body['dis_sub_order_id'] = $request->disSubOrderId;
        }
        if (!Utils::isUnset($request->extraShrink)) {
            $body['extra'] = $request->extraShrink;
        }
        if (!Utils::isUnset($request->personalPayPrice)) {
            $body['personal_pay_price'] = $request->personalPayPrice;
        }
        if (!Utils::isUnset($request->totalPayPrice)) {
            $body['total_pay_price'] = $request->totalPayPrice;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsBtripCorpToken)) {
            $realHeaders['x-acs-btrip-corp-token'] = Utils::toJSONString($headers->xAcsBtripCorpToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'TicketChangingPay',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dtb-flight/v1/ticket-changing/action/pay',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TicketChangingPayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param TicketChangingPayRequest $request
     *
     * @return TicketChangingPayResponse
     */
    public function ticketChangingPay($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new TicketChangingPayHeaders([]);

        return $this->ticketChangingPayWithOptions($request, $headers, $runtime);
    }

    /**
     * @param TrainBillSettlementQueryRequest $request
     * @param TrainBillSettlementQueryHeaders $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return TrainBillSettlementQueryResponse
     */
    public function trainBillSettlementQueryWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNo)) {
            $query['page_no'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['page_size'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->periodEnd)) {
            $query['period_end'] = $request->periodEnd;
        }
        if (!Utils::isUnset($request->periodStart)) {
            $query['period_start'] = $request->periodStart;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsBtripSoCorpToken)) {
            $realHeaders['x-acs-btrip-so-corp-token'] = Utils::toJSONString($headers->xAcsBtripSoCorpToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'TrainBillSettlementQuery',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/train/v1/bill-settlement',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return TrainBillSettlementQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param TrainBillSettlementQueryRequest $request
     *
     * @return TrainBillSettlementQueryResponse
     */
    public function trainBillSettlementQuery($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new TrainBillSettlementQueryHeaders([]);

        return $this->trainBillSettlementQueryWithOptions($request, $headers, $runtime);
    }

    /**
     * @param TrainExceedApplyQueryRequest $request
     * @param TrainExceedApplyQueryHeaders $headers
     * @param RuntimeOptions               $runtime
     *
     * @return TrainExceedApplyQueryResponse
     */
    public function trainExceedApplyQueryWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->applyId)) {
            $query['apply_id'] = $request->applyId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsBtripSoCorpToken)) {
            $realHeaders['x-acs-btrip-so-corp-token'] = Utils::toJSONString($headers->xAcsBtripSoCorpToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'TrainExceedApplyQuery',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/apply/v1/train-exceed',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return TrainExceedApplyQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param TrainExceedApplyQueryRequest $request
     *
     * @return TrainExceedApplyQueryResponse
     */
    public function trainExceedApplyQuery($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new TrainExceedApplyQueryHeaders([]);

        return $this->trainExceedApplyQueryWithOptions($request, $headers, $runtime);
    }

    /**
     * @param TrainOrderListQueryRequest $request
     * @param TrainOrderListQueryHeaders $headers
     * @param RuntimeOptions             $runtime
     *
     * @return TrainOrderListQueryResponse
     */
    public function trainOrderListQueryWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->allApply)) {
            $query['all_apply'] = $request->allApply;
        }
        if (!Utils::isUnset($request->applyId)) {
            $query['apply_id'] = $request->applyId;
        }
        if (!Utils::isUnset($request->departId)) {
            $query['depart_id'] = $request->departId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['end_time'] = $request->endTime;
        }
        if (!Utils::isUnset($request->page)) {
            $query['page'] = $request->page;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['page_size'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['start_time'] = $request->startTime;
        }
        if (!Utils::isUnset($request->thirdpartApplyId)) {
            $query['thirdpart_apply_id'] = $request->thirdpartApplyId;
        }
        if (!Utils::isUnset($request->updateEndTime)) {
            $query['update_end_time'] = $request->updateEndTime;
        }
        if (!Utils::isUnset($request->updateStartTime)) {
            $query['update_start_time'] = $request->updateStartTime;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['user_id'] = $request->userId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsBtripSoCorpToken)) {
            $realHeaders['x-acs-btrip-so-corp-token'] = Utils::toJSONString($headers->xAcsBtripSoCorpToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'TrainOrderListQuery',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/train/v1/order-list',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return TrainOrderListQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param TrainOrderListQueryRequest $request
     *
     * @return TrainOrderListQueryResponse
     */
    public function trainOrderListQuery($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new TrainOrderListQueryHeaders([]);

        return $this->trainOrderListQueryWithOptions($request, $headers, $runtime);
    }

    /**
     * @param TrainOrderQueryRequest $request
     * @param TrainOrderQueryHeaders $headers
     * @param RuntimeOptions         $runtime
     *
     * @return TrainOrderQueryResponse
     */
    public function trainOrderQueryWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->orderId)) {
            $query['order_id'] = $request->orderId;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['user_id'] = $request->userId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsBtripSoCorpToken)) {
            $realHeaders['x-acs-btrip-so-corp-token'] = Utils::toJSONString($headers->xAcsBtripSoCorpToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'TrainOrderQuery',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/train/v1/order',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return TrainOrderQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param TrainOrderQueryRequest $request
     *
     * @return TrainOrderQueryResponse
     */
    public function trainOrderQuery($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new TrainOrderQueryHeaders([]);

        return $this->trainOrderQueryWithOptions($request, $headers, $runtime);
    }

    /**
     * @param TrainOrderQueryV2Request $request
     * @param TrainOrderQueryV2Headers $headers
     * @param RuntimeOptions           $runtime
     *
     * @return TrainOrderQueryV2Response
     */
    public function trainOrderQueryV2WithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->orderId)) {
            $query['order_id'] = $request->orderId;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['user_id'] = $request->userId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsBtripCorpToken)) {
            $realHeaders['x-acs-btrip-corp-token'] = Utils::toJSONString($headers->xAcsBtripCorpToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'TrainOrderQueryV2',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/train/v2/order',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return TrainOrderQueryV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param TrainOrderQueryV2Request $request
     *
     * @return TrainOrderQueryV2Response
     */
    public function trainOrderQueryV2($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new TrainOrderQueryV2Headers([]);

        return $this->trainOrderQueryV2WithOptions($request, $headers, $runtime);
    }

    /**
     * @param TrainStationSearchRequest $request
     * @param TrainStationSearchHeaders $headers
     * @param RuntimeOptions            $runtime
     *
     * @return TrainStationSearchResponse
     */
    public function trainStationSearchWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->keyword)) {
            $query['keyword'] = $request->keyword;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsBtripSoCorpToken)) {
            $realHeaders['x-acs-btrip-so-corp-token'] = Utils::toJSONString($headers->xAcsBtripSoCorpToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'TrainStationSearch',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/city/v1/train',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return TrainStationSearchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param TrainStationSearchRequest $request
     *
     * @return TrainStationSearchResponse
     */
    public function trainStationSearch($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new TrainStationSearchHeaders([]);

        return $this->trainStationSearchWithOptions($request, $headers, $runtime);
    }

    /**
     * @param TrainTicketScanQueryRequest $request
     * @param TrainTicketScanQueryHeaders $headers
     * @param RuntimeOptions              $runtime
     *
     * @return TrainTicketScanQueryResponse
     */
    public function trainTicketScanQueryWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->billDate)) {
            $query['bill_date'] = $request->billDate;
        }
        if (!Utils::isUnset($request->billId)) {
            $query['bill_id'] = $request->billId;
        }
        if (!Utils::isUnset($request->invoiceSubTaskId)) {
            $query['invoice_sub_task_id'] = $request->invoiceSubTaskId;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['page_no'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['page_size'] = $request->pageSize;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsBtripSoCorpToken)) {
            $realHeaders['x-acs-btrip-so-corp-token'] = Utils::toJSONString($headers->xAcsBtripSoCorpToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'TrainTicketScanQuery',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/scan/v1/train-ticket',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return TrainTicketScanQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param TrainTicketScanQueryRequest $request
     *
     * @return TrainTicketScanQueryResponse
     */
    public function trainTicketScanQuery($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new TrainTicketScanQueryHeaders([]);

        return $this->trainTicketScanQueryWithOptions($request, $headers, $runtime);
    }

    /**
     * @param UserQueryRequest $request
     * @param UserQueryHeaders $headers
     * @param RuntimeOptions   $runtime
     *
     * @return UserQueryResponse
     */
    public function userQueryWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->modifiedTimeGreaterOrEqualThan)) {
            $query['modified_time_greater_or_equal_than'] = $request->modifiedTimeGreaterOrEqualThan;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['page_size'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->pageToken)) {
            $query['page_token'] = $request->pageToken;
        }
        if (!Utils::isUnset($request->thirdPartJobNo)) {
            $query['third_part_job_no'] = $request->thirdPartJobNo;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsBtripSoCorpToken)) {
            $realHeaders['x-acs-btrip-so-corp-token'] = Utils::toJSONString($headers->xAcsBtripSoCorpToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UserQuery',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/user/v1/user',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UserQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UserQueryRequest $request
     *
     * @return UserQueryResponse
     */
    public function userQuery($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new UserQueryHeaders([]);

        return $this->userQueryWithOptions($request, $headers, $runtime);
    }

    /**
     * @param VatInvoiceScanQueryRequest $request
     * @param VatInvoiceScanQueryHeaders $headers
     * @param RuntimeOptions             $runtime
     *
     * @return VatInvoiceScanQueryResponse
     */
    public function vatInvoiceScanQueryWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->billDate)) {
            $query['bill_date'] = $request->billDate;
        }
        if (!Utils::isUnset($request->billId)) {
            $query['bill_id'] = $request->billId;
        }
        if (!Utils::isUnset($request->invoiceSubTaskId)) {
            $query['invoice_sub_task_id'] = $request->invoiceSubTaskId;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['page_no'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['page_size'] = $request->pageSize;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsBtripSoCorpToken)) {
            $realHeaders['x-acs-btrip-so-corp-token'] = Utils::toJSONString($headers->xAcsBtripSoCorpToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'VatInvoiceScanQuery',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/scan/v1/vat-invoice',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return VatInvoiceScanQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param VatInvoiceScanQueryRequest $request
     *
     * @return VatInvoiceScanQueryResponse
     */
    public function vatInvoiceScanQuery($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new VatInvoiceScanQueryHeaders([]);

        return $this->vatInvoiceScanQueryWithOptions($request, $headers, $runtime);
    }

    /**
     * @param WaitApplyInvoiceTaskDetailQueryRequest $request
     * @param WaitApplyInvoiceTaskDetailQueryHeaders $headers
     * @param RuntimeOptions                         $runtime
     *
     * @return WaitApplyInvoiceTaskDetailQueryResponse
     */
    public function waitApplyInvoiceTaskDetailQueryWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->billDate)) {
            $query['bill_date'] = $request->billDate;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsBtripSoCorpToken)) {
            $realHeaders['x-acs-btrip-so-corp-token'] = Utils::toJSONString($headers->xAcsBtripSoCorpToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'WaitApplyInvoiceTaskDetailQuery',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/invoice/v1/wait-apply-task',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return WaitApplyInvoiceTaskDetailQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param WaitApplyInvoiceTaskDetailQueryRequest $request
     *
     * @return WaitApplyInvoiceTaskDetailQueryResponse
     */
    public function waitApplyInvoiceTaskDetailQuery($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new WaitApplyInvoiceTaskDetailQueryHeaders([]);

        return $this->waitApplyInvoiceTaskDetailQueryWithOptions($request, $headers, $runtime);
    }
}
