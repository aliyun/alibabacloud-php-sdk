<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\Dara\Url;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\AccessTokenRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\AccessTokenResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\AddDepartmentHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\AddDepartmentRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\AddDepartmentResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\AddDepartmentShrinkRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\AddEmployeeHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\AddEmployeeRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\AddEmployeeResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\AddEmployeeShrinkRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\AddEmployeesToCustomRoleHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\AddEmployeesToCustomRoleRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\AddEmployeesToCustomRoleResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\AddEmployeesToCustomRoleShrinkRequest;
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
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ApplyExternalNodeStatusUpdateHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ApplyExternalNodeStatusUpdateRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ApplyExternalNodeStatusUpdateResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ApplyExternalNodeStatusUpdateShrinkRequest;
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
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ApplyTripTaskExecuteHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ApplyTripTaskExecuteRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ApplyTripTaskExecuteResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\BaseCityInfoSearchHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\BaseCityInfoSearchRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\BaseCityInfoSearchResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\BtripBillInfoAdjustHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\BtripBillInfoAdjustRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\BtripBillInfoAdjustResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\CarApplyAddHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\CarApplyAddRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\CarApplyAddResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\CarApplyAddShrinkRequest;
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
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\CarSceneQueryHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\CarSceneQueryResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ChannelCorpCreateHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ChannelCorpCreateRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ChannelCorpCreateResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\CitySearchHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\CitySearchRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\CitySearchResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\CommonApplyQueryHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\CommonApplyQueryRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\CommonApplyQueryResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\CommonApplySyncHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\CommonApplySyncRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\CommonApplySyncResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\CooperatorFlightBillSettlementQueryHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\CooperatorFlightBillSettlementQueryRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\CooperatorFlightBillSettlementQueryResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\CooperatorHotelBillSettlementQueryHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\CooperatorHotelBillSettlementQueryRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\CooperatorHotelBillSettlementQueryResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\CooperatorHotelEventPushHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\CooperatorHotelEventPushRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\CooperatorHotelEventPushResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\CooperatorSyncPayStatusHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\CooperatorSyncPayStatusRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\CooperatorSyncPayStatusResponse;
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
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\CreateCustomRoleHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\CreateCustomRoleRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\CreateCustomRoleResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\CreateSubCorpHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\CreateSubCorpRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\CreateSubCorpResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\DeleteCustomRoleHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\DeleteCustomRoleRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\DeleteCustomRoleResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\DeleteDepartmentHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\DeleteDepartmentRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\DeleteDepartmentResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\DeleteEmployeesFromCustomRoleHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\DeleteEmployeesFromCustomRoleRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\DeleteEmployeesFromCustomRoleResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\DeleteEmployeesFromCustomRoleShrinkRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\DeleteInvoiceEntityHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\DeleteInvoiceEntityRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\DeleteInvoiceEntityResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\DeleteInvoiceEntityShrinkRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\DepartmentSaveHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\DepartmentSaveRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\DepartmentSaveResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\DepartmentSaveShrinkRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ElectronicItineraryBatchApplyHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ElectronicItineraryBatchApplyRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ElectronicItineraryBatchApplyResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ElectronicItineraryBatchApplyShrinkRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ElectronicItineraryGetApplyResultHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ElectronicItineraryGetApplyResultRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ElectronicItineraryGetApplyResultResponse;
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
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ExternalUserAddHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ExternalUserAddRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ExternalUserAddResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ExternalUserAddShrinkRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ExternalUserDeleteHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ExternalUserDeleteResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ExternalUserQueryHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ExternalUserQueryResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ExternalUserUpdateHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ExternalUserUpdateRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ExternalUserUpdateResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ExternalUserUpdateShrinkRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightBillSettlementQueryHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightBillSettlementQueryRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightBillSettlementQueryResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightCancelOrderHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightCancelOrderRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightCancelOrderResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightCancelOrderV2Headers;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightCancelOrderV2Request;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightCancelOrderV2Response;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightCreateOrderHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightCreateOrderRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightCreateOrderResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightCreateOrderShrinkRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightCreateOrderV2Headers;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightCreateOrderV2Request;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightCreateOrderV2Response;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightCreateOrderV2ShrinkRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightExceedApplyQueryHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightExceedApplyQueryRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightExceedApplyQueryResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightItineraryScanQueryHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightItineraryScanQueryRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightItineraryScanQueryResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightListingSearchHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightListingSearchRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightListingSearchResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightListingSearchV2Headers;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightListingSearchV2Request;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightListingSearchV2Response;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightListingSearchV2ShrinkRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightModifyApplyV2Headers;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightModifyApplyV2Request;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightModifyApplyV2Response;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightModifyApplyV2ShrinkRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightModifyCancelV2Headers;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightModifyCancelV2Request;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightModifyCancelV2Response;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightModifyListingSearchV2Headers;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightModifyListingSearchV2Request;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightModifyListingSearchV2Response;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightModifyListingSearchV2ShrinkRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightModifyOrderDetailV2Headers;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightModifyOrderDetailV2Request;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightModifyOrderDetailV2Response;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightModifyOtaSearchV2Headers;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightModifyOtaSearchV2Request;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightModifyOtaSearchV2Response;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightModifyOtaSearchV2ShrinkRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightModifyPayV2Headers;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightModifyPayV2Request;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightModifyPayV2Response;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightModifyPayV2ShrinkRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderDetailInfoHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderDetailInfoRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderDetailInfoResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderDetailV2Headers;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderDetailV2Request;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderDetailV2Response;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderListQueryHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderListQueryRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderListQueryResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderListQueryV2Headers;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderListQueryV2Request;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderListQueryV2Response;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderListQueryV2ShrinkRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderQueryHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderQueryRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderQueryResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOtaItemDetailHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOtaItemDetailRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOtaItemDetailResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOtaSearchHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOtaSearchRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOtaSearchResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOtaSearchV2Headers;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOtaSearchV2Request;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOtaSearchV2Response;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOtaSearchV2ShrinkRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightPayOrderHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightPayOrderRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightPayOrderResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightPayOrderShrinkRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightPayOrderV2Headers;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightPayOrderV2Request;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightPayOrderV2Response;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightRefundApplyHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightRefundApplyRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightRefundApplyResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightRefundApplyShrinkRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightRefundApplyV2Headers;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightRefundApplyV2Request;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightRefundApplyV2Response;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightRefundApplyV2ShrinkRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightRefundDetailHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightRefundDetailRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightRefundDetailResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightRefundDetailV2Headers;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightRefundDetailV2Request;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightRefundDetailV2Response;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightRefundPreCalHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightRefundPreCalRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightRefundPreCalResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightRefundPreCalShrinkRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightRefundPreCalV2Headers;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightRefundPreCalV2Request;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightRefundPreCalV2Response;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightRefundPreCalV2ShrinkRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightSearchListHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightSearchListRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightSearchListResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FuPointBillSettlementQueryHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FuPointBillSettlementQueryRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FuPointBillSettlementQueryResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\GroupCorpTokenHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\GroupCorpTokenRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\GroupCorpTokenResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\GroupDepartSaveHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\GroupDepartSaveRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\GroupDepartSaveResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\GroupDepartSaveShrinkRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\GroupUserSaveHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\GroupUserSaveRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\GroupUserSaveResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\GroupUserSaveShrinkRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelAskingPriceHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelAskingPriceRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelAskingPriceResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelAskingPriceShrinkRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelBillSettlementQueryHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelBillSettlementQueryRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelBillSettlementQueryResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelCityCodeListHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelCityCodeListRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelCityCodeListResponse;
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
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderChangeApplyHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderChangeApplyRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderChangeApplyResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderChangeApplyShrinkRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderChangeDetailHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderChangeDetailRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderChangeDetailResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderCreateHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderCreateRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderCreateResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderCreateShrinkRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderDetailInfoHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderDetailInfoRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderDetailInfoResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderInfoQueryHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderInfoQueryResponse;
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
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelPricePullHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelPricePullRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelPricePullResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelPricePullShrinkRequest;
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
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelSuggestV2Headers;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelSuggestV2Request;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelSuggestV2Response;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IeFlightBillSettlementQueryHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IeFlightBillSettlementQueryRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IeFlightBillSettlementQueryResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IeHotelBillSettlementQueryHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IeHotelBillSettlementQueryRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IeHotelBillSettlementQueryResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IFlightOrderDetailQueryHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IFlightOrderDetailQueryRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IFlightOrderDetailQueryResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IFlightOrderListQueryHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IFlightOrderListQueryRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IFlightOrderListQueryResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IFlightOrderListQueryShrinkRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\InsInvoiceScanQueryHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\InsInvoiceScanQueryRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\InsInvoiceScanQueryResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\InsureOrderApplyHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\InsureOrderApplyRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\InsureOrderApplyResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\InsureOrderCancelHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\InsureOrderCancelRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\InsureOrderCancelResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\InsureOrderCreateHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\InsureOrderCreateRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\InsureOrderCreateResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\InsureOrderCreateShrinkRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\InsureOrderDetailHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\InsureOrderDetailRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\InsureOrderDetailResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\InsureOrderPayHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\InsureOrderPayRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\InsureOrderPayResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\InsureOrderRefundHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\InsureOrderRefundRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\InsureOrderRefundResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\InsureOrderRefundShrinkRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\InsureOrderUrlDetailHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\InsureOrderUrlDetailResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\InsureRefundDetailHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\InsureRefundDetailRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\InsureRefundDetailResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightCreateOrderHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightCreateOrderRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightCreateOrderResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightCreateOrderShrinkRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightInventoryPriceCheckHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightInventoryPriceCheckRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightInventoryPriceCheckResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightInventoryPriceCheckShrinkRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightListingSearchHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightListingSearchRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightListingSearchResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightListingSearchShrinkRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightOrderCancelHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightOrderCancelRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightOrderCancelResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightOrderDetailHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightOrderDetailRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightOrderDetailResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightOrderPayCheckHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightOrderPayCheckRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightOrderPayCheckResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightOrderPayHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightOrderPayRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightOrderPayResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightOtaItemDetailHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightOtaItemDetailRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightOtaItemDetailResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightOtaSearchHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightOtaSearchRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightOtaSearchResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightOtaSearchShrinkRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightReShopConsultHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightReShopConsultRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightReShopConsultResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightSegmentAvailableCertHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightSegmentAvailableCertRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightSegmentAvailableCertResponse;
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
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IsvRuleSaveShrinkRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IsvUserSaveHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IsvUserSaveRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IsvUserSaveResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IsvUserSaveShrinkRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\MealApplyAddHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\MealApplyAddRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\MealApplyAddResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\MealApplyAddShrinkRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\MealApplyApproveHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\MealApplyApproveRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\MealApplyApproveResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\MealApplyQueryHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\MealApplyQueryRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\MealApplyQueryResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\MealBillSettlementQueryHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\MealBillSettlementQueryRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\MealBillSettlementQueryResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\MealOrderDetailQueryHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\MealOrderDetailQueryRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\MealOrderDetailQueryResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\MealOrderListQueryHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\MealOrderListQueryRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\MealOrderListQueryResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\MonthBillConfirmHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\MonthBillConfirmRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\MonthBillConfirmResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\MonthBillGetHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\MonthBillGetRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\MonthBillGetResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\MonthBillSplitGetHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\MonthBillSplitGetRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\MonthBillSplitGetResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\MonthBillSplitGetShrinkRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\OrderRefundDetailQueryHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\OrderRefundDetailQueryRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\OrderRefundDetailQueryResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ProjectAddHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ProjectAddRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ProjectAddResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ProjectDeleteHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ProjectDeleteRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ProjectDeleteResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ProjectModifyHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ProjectModifyRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ProjectModifyResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\QueryCorpDetailInfoHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\QueryCorpDetailInfoRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\QueryCorpDetailInfoResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\QueryEmployeeDetailHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\QueryEmployeeDetailRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\QueryEmployeeDetailResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\QueryGroupCorpListHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\QueryGroupCorpListRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\QueryGroupCorpListResponse;
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
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TBAccountInfoQueryHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TBAccountInfoQueryResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TBAccountUnbindHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TBAccountUnbindResponse;
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
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainApplyChangeHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainApplyChangeRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainApplyChangeResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainApplyChangeShrinkRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainApplyRefundHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainApplyRefundRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainApplyRefundResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainApplyRefundShrinkRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainBillSettlementQueryHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainBillSettlementQueryRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainBillSettlementQueryResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainExceedApplyQueryHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainExceedApplyQueryRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainExceedApplyQueryResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainFeeCalculateChangeHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainFeeCalculateChangeRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainFeeCalculateChangeResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainFeeCalculateChangeShrinkRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainFeeCalculateRefundHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainFeeCalculateRefundRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainFeeCalculateRefundResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainFeeCalculateRefundShrinkRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainNoInfoSearchHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainNoInfoSearchRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainNoInfoSearchResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainNoListSearchHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainNoListSearchRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainNoListSearchResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainNoListSearchShrinkRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainOrderCancelHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainOrderCancelRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainOrderCancelResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainOrderChangeConfirmHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainOrderChangeConfirmRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainOrderChangeConfirmResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainOrderCreateHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainOrderCreateRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainOrderCreateResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainOrderCreateShrinkRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainOrderDetailQueryHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainOrderDetailQueryRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainOrderDetailQueryResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainOrderListQueryHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainOrderListQueryRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainOrderListQueryResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainOrderPayHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainOrderPayRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainOrderPayResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainOrderQueryHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainOrderQueryRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainOrderQueryResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainOrderQueryV2Headers;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainOrderQueryV2Request;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainOrderQueryV2Response;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainStationSearchHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainStationSearchRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainStationSearchResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainStopoverSearchHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainStopoverSearchRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainStopoverSearchResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainTicketScanQueryHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainTicketScanQueryRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainTicketScanQueryResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TravelStandardListQueryHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TravelStandardListQueryRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TravelStandardListQueryResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TravelStandardQueryHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TravelStandardQueryRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TravelStandardQueryResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TravelStandardQueryShrinkRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TripBusinessInstanceQueryHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TripBusinessInstanceQueryRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TripBusinessInstanceQueryResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TripCCInfoQueryHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TripCCInfoQueryRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TripCCInfoQueryResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TripTaskQueryHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TripTaskQueryRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TripTaskQueryResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\UpdateCustomRoleHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\UpdateCustomRoleRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\UpdateCustomRoleResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\UpdateDepartmentHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\UpdateDepartmentRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\UpdateDepartmentResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\UpdateDepartmentShrinkRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\UpdateEmployeeHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\UpdateEmployeeLeaveStatusHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\UpdateEmployeeLeaveStatusRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\UpdateEmployeeLeaveStatusResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\UpdateEmployeeRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\UpdateEmployeeResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\UpdateEmployeeShrinkRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\UserQueryHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\UserQueryRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\UserQueryResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\VasBillSettlementQueryHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\VasBillSettlementQueryRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\VasBillSettlementQueryResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\VatInvoiceScanQueryHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\VatInvoiceScanQueryRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\VatInvoiceScanQueryResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\WaitApplyInvoiceTaskDetailQueryHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\WaitApplyInvoiceTaskDetailQueryRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\WaitApplyInvoiceTaskDetailQueryResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

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
        if (null !== $endpoint) {
            return $endpoint;
        }

        if (null !== $endpointMap && null !== @$endpointMap[$regionId]) {
            return @$endpointMap[$regionId];
        }

        return Utils::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * 换取accessToken接口.
     *
     * @param request - AccessTokenRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AccessTokenResponse
     *
     * @param AccessTokenRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return AccessTokenResponse
     */
    public function accessTokenWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appSecret) {
            @$query['app_secret'] = $request->appSecret;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AccessToken',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/btrip-open-auth/v1/access-token/action/take',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return AccessTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 换取accessToken接口.
     *
     * @param request - AccessTokenRequest
     *
     * @returns AccessTokenResponse
     *
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
     * 创建企业部门.
     *
     * @param tmpReq - AddDepartmentRequest
     * @param headers - AddDepartmentHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddDepartmentResponse
     *
     * @param AddDepartmentRequest $tmpReq
     * @param AddDepartmentHeaders $headers
     * @param RuntimeOptions       $runtime
     *
     * @return AddDepartmentResponse
     */
    public function addDepartmentWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new AddDepartmentShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->managerEmployeeIdList) {
            $request->managerEmployeeIdListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->managerEmployeeIdList, 'manager_employee_id_list', 'json');
        }

        $body = [];
        if (null !== $request->deptName) {
            @$body['dept_name'] = $request->deptName;
        }

        if (null !== $request->managerEmployeeIdListShrink) {
            @$body['manager_employee_id_list'] = $request->managerEmployeeIdListShrink;
        }

        if (null !== $request->outDeptId) {
            @$body['out_dept_id'] = $request->outDeptId;
        }

        if (null !== $request->outDeptPid) {
            @$body['out_dept_pid'] = $request->outDeptPid;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripCorpToken) {
            @$realHeaders['x-acs-btrip-corp-token'] = '' . $headers->xAcsBtripCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AddDepartment',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/department/v2/add',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddDepartmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建企业部门.
     *
     * @param request - AddDepartmentRequest
     *
     * @returns AddDepartmentResponse
     *
     * @param AddDepartmentRequest $request
     *
     * @return AddDepartmentResponse
     */
    public function addDepartment($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new AddDepartmentHeaders([]);

        return $this->addDepartmentWithOptions($request, $headers, $runtime);
    }

    /**
     * 添加员工.
     *
     * @param tmpReq - AddEmployeeRequest
     * @param headers - AddEmployeeHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddEmployeeResponse
     *
     * @param AddEmployeeRequest $tmpReq
     * @param AddEmployeeHeaders $headers
     * @param RuntimeOptions     $runtime
     *
     * @return AddEmployeeResponse
     */
    public function addEmployeeWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new AddEmployeeShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->baseCityCodeList) {
            $request->baseCityCodeListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->baseCityCodeList, 'base_city_code_list', 'json');
        }

        if (null !== $tmpReq->baseLocationList) {
            $request->baseLocationListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->baseLocationList, 'base_location_list', 'json');
        }

        if (null !== $tmpReq->certList) {
            $request->certListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->certList, 'cert_list', 'json');
        }

        if (null !== $tmpReq->customRoleCodeList) {
            $request->customRoleCodeListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->customRoleCodeList, 'custom_role_code_list', 'json');
        }

        if (null !== $tmpReq->outDeptIdList) {
            $request->outDeptIdListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->outDeptIdList, 'out_dept_id_list', 'json');
        }

        $body = [];
        if (null !== $request->attribute) {
            @$body['attribute'] = $request->attribute;
        }

        if (null !== $request->avatar) {
            @$body['avatar'] = $request->avatar;
        }

        if (null !== $request->baseCityCodeListShrink) {
            @$body['base_city_code_list'] = $request->baseCityCodeListShrink;
        }

        if (null !== $request->baseLocationListShrink) {
            @$body['base_location_list'] = $request->baseLocationListShrink;
        }

        if (null !== $request->birthday) {
            @$body['birthday'] = $request->birthday;
        }

        if (null !== $request->certListShrink) {
            @$body['cert_list'] = $request->certListShrink;
        }

        if (null !== $request->customRoleCodeListShrink) {
            @$body['custom_role_code_list'] = $request->customRoleCodeListShrink;
        }

        if (null !== $request->email) {
            @$body['email'] = $request->email;
        }

        if (null !== $request->gender) {
            @$body['gender'] = $request->gender;
        }

        if (null !== $request->isAdmin) {
            @$body['is_admin'] = $request->isAdmin;
        }

        if (null !== $request->isBoss) {
            @$body['is_boss'] = $request->isBoss;
        }

        if (null !== $request->isDeptLeader) {
            @$body['is_dept_leader'] = $request->isDeptLeader;
        }

        if (null !== $request->jobNo) {
            @$body['job_no'] = $request->jobNo;
        }

        if (null !== $request->managerUserId) {
            @$body['manager_user_id'] = $request->managerUserId;
        }

        if (null !== $request->outDeptIdListShrink) {
            @$body['out_dept_id_list'] = $request->outDeptIdListShrink;
        }

        if (null !== $request->phone) {
            @$body['phone'] = $request->phone;
        }

        if (null !== $request->positionLevel) {
            @$body['position_level'] = $request->positionLevel;
        }

        if (null !== $request->realName) {
            @$body['real_name'] = $request->realName;
        }

        if (null !== $request->realNameEn) {
            @$body['real_name_en'] = $request->realNameEn;
        }

        if (null !== $request->unionId) {
            @$body['union_id'] = $request->unionId;
        }

        if (null !== $request->userId) {
            @$body['user_id'] = $request->userId;
        }

        if (null !== $request->userNick) {
            @$body['user_nick'] = $request->userNick;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripCorpToken) {
            @$realHeaders['x-acs-btrip-corp-token'] = '' . $headers->xAcsBtripCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AddEmployee',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/employee/v2/add',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddEmployeeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 添加员工.
     *
     * @param request - AddEmployeeRequest
     *
     * @returns AddEmployeeResponse
     *
     * @param AddEmployeeRequest $request
     *
     * @return AddEmployeeResponse
     */
    public function addEmployee($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new AddEmployeeHeaders([]);

        return $this->addEmployeeWithOptions($request, $headers, $runtime);
    }

    /**
     * 批量新增企业自定义角色下人员.
     *
     * @param tmpReq - AddEmployeesToCustomRoleRequest
     * @param headers - AddEmployeesToCustomRoleHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddEmployeesToCustomRoleResponse
     *
     * @param AddEmployeesToCustomRoleRequest $tmpReq
     * @param AddEmployeesToCustomRoleHeaders $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return AddEmployeesToCustomRoleResponse
     */
    public function addEmployeesToCustomRoleWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new AddEmployeesToCustomRoleShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->userIdList) {
            $request->userIdListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->userIdList, 'user_id_list', 'json');
        }

        $body = [];
        if (null !== $request->roleId) {
            @$body['role_id'] = $request->roleId;
        }

        if (null !== $request->userIdListShrink) {
            @$body['user_id_list'] = $request->userIdListShrink;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripCorpToken) {
            @$realHeaders['x-acs-btrip-corp-token'] = '' . $headers->xAcsBtripCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AddEmployeesToCustomRole',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/role/v1/customRoleEmployees/add',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddEmployeesToCustomRoleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 批量新增企业自定义角色下人员.
     *
     * @param request - AddEmployeesToCustomRoleRequest
     *
     * @returns AddEmployeesToCustomRoleResponse
     *
     * @param AddEmployeesToCustomRoleRequest $request
     *
     * @return AddEmployeesToCustomRoleResponse
     */
    public function addEmployeesToCustomRole($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new AddEmployeesToCustomRoleHeaders([]);

        return $this->addEmployeesToCustomRoleWithOptions($request, $headers, $runtime);
    }

    /**
     * 新增发票抬头适用人员.
     *
     * @param tmpReq - AddInvoiceEntityRequest
     * @param headers - AddInvoiceEntityHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddInvoiceEntityResponse
     *
     * @param AddInvoiceEntityRequest $tmpReq
     * @param AddInvoiceEntityHeaders $headers
     * @param RuntimeOptions          $runtime
     *
     * @return AddInvoiceEntityResponse
     */
    public function addInvoiceEntityWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new AddInvoiceEntityShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->entities) {
            $request->entitiesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->entities, 'entities', 'json');
        }

        $body = [];
        if (null !== $request->entitiesShrink) {
            @$body['entities'] = $request->entitiesShrink;
        }

        if (null !== $request->thirdPartId) {
            @$body['third_part_id'] = $request->thirdPartId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripCorpToken) {
            @$realHeaders['x-acs-btrip-corp-token'] = '' . $headers->xAcsBtripCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AddInvoiceEntity',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/invoice/v1/entities',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddInvoiceEntityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 新增发票抬头适用人员.
     *
     * @param request - AddInvoiceEntityRequest
     *
     * @returns AddInvoiceEntityResponse
     *
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
     * 商旅功能页跳转.
     *
     * @param request - AddressGetRequest
     * @param headers - AddressGetHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddressGetResponse
     *
     * @param AddressGetRequest $request
     * @param AddressGetHeaders $headers
     * @param RuntimeOptions    $runtime
     *
     * @return AddressGetResponse
     */
    public function addressGetWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->actionType) {
            @$query['action_type'] = $request->actionType;
        }

        if (null !== $request->arrCityCode) {
            @$query['arr_city_code'] = $request->arrCityCode;
        }

        if (null !== $request->arrCityName) {
            @$query['arr_city_name'] = $request->arrCityName;
        }

        if (null !== $request->carScenesCode) {
            @$query['car_scenes_code'] = $request->carScenesCode;
        }

        if (null !== $request->depCityCode) {
            @$query['dep_city_code'] = $request->depCityCode;
        }

        if (null !== $request->depCityName) {
            @$query['dep_city_name'] = $request->depCityName;
        }

        if (null !== $request->depDate) {
            @$query['dep_date'] = $request->depDate;
        }

        if (null !== $request->itineraryId) {
            @$query['itinerary_id'] = $request->itineraryId;
        }

        if (null !== $request->middlePage) {
            @$query['middle_page'] = $request->middlePage;
        }

        if (null !== $request->orderId) {
            @$query['order_Id'] = $request->orderId;
        }

        if (null !== $request->phone) {
            @$query['phone'] = $request->phone;
        }

        if (null !== $request->sessionParameters) {
            @$query['session_parameters'] = $request->sessionParameters;
        }

        if (null !== $request->subCorpId) {
            @$query['sub_corp_id'] = $request->subCorpId;
        }

        if (null !== $request->taobaoCallbackUrl) {
            @$query['taobao_callback_url'] = $request->taobaoCallbackUrl;
        }

        if (null !== $request->thirdpartApplyId) {
            @$query['thirdpart_apply_id'] = $request->thirdpartApplyId;
        }

        if (null !== $request->travelerId) {
            @$query['traveler_id'] = $request->travelerId;
        }

        if (null !== $request->type) {
            @$query['type'] = $request->type;
        }

        if (null !== $request->useBookingProxy) {
            @$query['use_booking_proxy'] = $request->useBookingProxy;
        }

        if (null !== $request->userId) {
            @$query['user_id'] = $request->userId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripSoCorpToken) {
            @$realHeaders['x-acs-btrip-so-corp-token'] = '' . $headers->xAcsBtripSoCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddressGet',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/open/v1/address',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return AddressGetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 商旅功能页跳转.
     *
     * @param request - AddressGetRequest
     *
     * @returns AddressGetResponse
     *
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
     * 查询机场数据.
     *
     * @param request - AirportSearchRequest
     * @param headers - AirportSearchHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AirportSearchResponse
     *
     * @param AirportSearchRequest $request
     * @param AirportSearchHeaders $headers
     * @param RuntimeOptions       $runtime
     *
     * @return AirportSearchResponse
     */
    public function airportSearchWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->keyword) {
            @$query['keyword'] = $request->keyword;
        }

        if (null !== $request->type) {
            @$query['type'] = $request->type;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripSoCorpToken) {
            @$realHeaders['x-acs-btrip-so-corp-token'] = '' . $headers->xAcsBtripSoCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AirportSearch',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/city/v1/airport',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return AirportSearchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询机场数据.
     *
     * @param request - AirportSearchRequest
     *
     * @returns AirportSearchResponse
     *
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
     * 全量查询商旅城市行政区划编码信息.
     *
     * @param headers - AllBaseCityInfoQueryHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AllBaseCityInfoQueryResponse
     *
     * @param AllBaseCityInfoQueryHeaders $headers
     * @param RuntimeOptions              $runtime
     *
     * @return AllBaseCityInfoQueryResponse
     */
    public function allBaseCityInfoQueryWithOptions($headers, $runtime)
    {
        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripAccessToken) {
            @$realHeaders['x-acs-btrip-access-token'] = '' . $headers->xAcsBtripAccessToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
        ]);
        $params = new Params([
            'action' => 'AllBaseCityInfoQuery',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/city/v1/code',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return AllBaseCityInfoQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 全量查询商旅城市行政区划编码信息.
     *
     * @returns AllBaseCityInfoQueryResponse
     *
     * @return AllBaseCityInfoQueryResponse
     */
    public function allBaseCityInfoQuery()
    {
        $runtime = new RuntimeOptions([]);
        $headers = new AllBaseCityInfoQueryHeaders([]);

        return $this->allBaseCityInfoQueryWithOptions($headers, $runtime);
    }

    /**
     * 新建出差审批单.
     *
     * @param tmpReq - ApplyAddRequest
     * @param headers - ApplyAddHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ApplyAddResponse
     *
     * @param ApplyAddRequest $tmpReq
     * @param ApplyAddHeaders $headers
     * @param RuntimeOptions  $runtime
     *
     * @return ApplyAddResponse
     */
    public function applyAddWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ApplyAddShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->carRule) {
            $request->carRuleShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->carRule, 'car_rule', 'json');
        }

        if (null !== $tmpReq->defaultStandard) {
            $request->defaultStandardShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->defaultStandard, 'default_standard', 'json');
        }

        if (null !== $tmpReq->externalTravelerList) {
            $request->externalTravelerListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->externalTravelerList, 'external_traveler_list', 'json');
        }

        if (null !== $tmpReq->externalTravelerStandard) {
            $request->externalTravelerStandardShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->externalTravelerStandard, 'external_traveler_standard', 'json');
        }

        if (null !== $tmpReq->hotelShare) {
            $request->hotelShareShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->hotelShare, 'hotel_share', 'json');
        }

        if (null !== $tmpReq->itineraryList) {
            $request->itineraryListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->itineraryList, 'itinerary_list', 'json');
        }

        if (null !== $tmpReq->itinerarySetList) {
            $request->itinerarySetListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->itinerarySetList, 'itinerary_set_list', 'json');
        }

        if (null !== $tmpReq->travelerList) {
            $request->travelerListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->travelerList, 'traveler_list', 'json');
        }

        if (null !== $tmpReq->travelerStandard) {
            $request->travelerStandardShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->travelerStandard, 'traveler_standard', 'json');
        }

        $body = [];
        if (null !== $request->budget) {
            @$body['budget'] = $request->budget;
        }

        if (null !== $request->budgetMerge) {
            @$body['budget_merge'] = $request->budgetMerge;
        }

        if (null !== $request->carRuleShrink) {
            @$body['car_rule'] = $request->carRuleShrink;
        }

        if (null !== $request->corpName) {
            @$body['corp_name'] = $request->corpName;
        }

        if (null !== $request->defaultStandardShrink) {
            @$body['default_standard'] = $request->defaultStandardShrink;
        }

        if (null !== $request->departId) {
            @$body['depart_id'] = $request->departId;
        }

        if (null !== $request->departName) {
            @$body['depart_name'] = $request->departName;
        }

        if (null !== $request->extendField) {
            @$body['extend_field'] = $request->extendField;
        }

        if (null !== $request->externalTravelerListShrink) {
            @$body['external_traveler_list'] = $request->externalTravelerListShrink;
        }

        if (null !== $request->externalTravelerStandardShrink) {
            @$body['external_traveler_standard'] = $request->externalTravelerStandardShrink;
        }

        if (null !== $request->flightBudget) {
            @$body['flight_budget'] = $request->flightBudget;
        }

        if (null !== $request->hotelBudget) {
            @$body['hotel_budget'] = $request->hotelBudget;
        }

        if (null !== $request->hotelShareShrink) {
            @$body['hotel_share'] = $request->hotelShareShrink;
        }

        if (null !== $request->internationalFlightCabins) {
            @$body['international_flight_cabins'] = $request->internationalFlightCabins;
        }

        if (null !== $request->intlFlightBudget) {
            @$body['intl_flight_budget'] = $request->intlFlightBudget;
        }

        if (null !== $request->intlHotelBudget) {
            @$body['intl_hotel_budget'] = $request->intlHotelBudget;
        }

        if (null !== $request->itineraryListShrink) {
            @$body['itinerary_list'] = $request->itineraryListShrink;
        }

        if (null !== $request->itineraryRule) {
            @$body['itinerary_rule'] = $request->itineraryRule;
        }

        if (null !== $request->itinerarySetListShrink) {
            @$body['itinerary_set_list'] = $request->itinerarySetListShrink;
        }

        if (null !== $request->limitTraveler) {
            @$body['limit_traveler'] = $request->limitTraveler;
        }

        if (null !== $request->mealBudget) {
            @$body['meal_budget'] = $request->mealBudget;
        }

        if (null !== $request->paymentDepartmentId) {
            @$body['payment_department_id'] = $request->paymentDepartmentId;
        }

        if (null !== $request->paymentDepartmentName) {
            @$body['payment_department_name'] = $request->paymentDepartmentName;
        }

        if (null !== $request->status) {
            @$body['status'] = $request->status;
        }

        if (null !== $request->subCorpId) {
            @$body['sub_corp_id'] = $request->subCorpId;
        }

        if (null !== $request->thirdpartApplyId) {
            @$body['thirdpart_apply_id'] = $request->thirdpartApplyId;
        }

        if (null !== $request->thirdpartBusinessId) {
            @$body['thirdpart_business_id'] = $request->thirdpartBusinessId;
        }

        if (null !== $request->thirdpartDepartId) {
            @$body['thirdpart_depart_id'] = $request->thirdpartDepartId;
        }

        if (null !== $request->togetherBookRule) {
            @$body['together_book_rule'] = $request->togetherBookRule;
        }

        if (null !== $request->trainBudget) {
            @$body['train_budget'] = $request->trainBudget;
        }

        if (null !== $request->travelerListShrink) {
            @$body['traveler_list'] = $request->travelerListShrink;
        }

        if (null !== $request->travelerStandardShrink) {
            @$body['traveler_standard'] = $request->travelerStandardShrink;
        }

        if (null !== $request->tripCause) {
            @$body['trip_cause'] = $request->tripCause;
        }

        if (null !== $request->tripDay) {
            @$body['trip_day'] = $request->tripDay;
        }

        if (null !== $request->tripTitle) {
            @$body['trip_title'] = $request->tripTitle;
        }

        if (null !== $request->type) {
            @$body['type'] = $request->type;
        }

        if (null !== $request->unionNo) {
            @$body['union_no'] = $request->unionNo;
        }

        if (null !== $request->userId) {
            @$body['user_id'] = $request->userId;
        }

        if (null !== $request->userName) {
            @$body['user_name'] = $request->userName;
        }

        if (null !== $request->vehicleBudget) {
            @$body['vehicle_budget'] = $request->vehicleBudget;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripSoCorpToken) {
            @$realHeaders['x-acs-btrip-so-corp-token'] = '' . $headers->xAcsBtripSoCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ApplyAdd',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/apply/v1/biz-trip',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ApplyAddResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 新建出差审批单.
     *
     * @param request - ApplyAddRequest
     *
     * @returns ApplyAddResponse
     *
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
     * 更新出差审批单（状态）.
     *
     * @param request - ApplyApproveRequest
     * @param headers - ApplyApproveHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ApplyApproveResponse
     *
     * @param ApplyApproveRequest $request
     * @param ApplyApproveHeaders $headers
     * @param RuntimeOptions      $runtime
     *
     * @return ApplyApproveResponse
     */
    public function applyApproveWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->applyId) {
            @$body['apply_id'] = $request->applyId;
        }

        if (null !== $request->note) {
            @$body['note'] = $request->note;
        }

        if (null !== $request->operateTime) {
            @$body['operate_time'] = $request->operateTime;
        }

        if (null !== $request->status) {
            @$body['status'] = $request->status;
        }

        if (null !== $request->subCorpId) {
            @$body['sub_corp_id'] = $request->subCorpId;
        }

        if (null !== $request->userId) {
            @$body['user_id'] = $request->userId;
        }

        if (null !== $request->userName) {
            @$body['user_name'] = $request->userName;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripSoCorpToken) {
            @$realHeaders['x-acs-btrip-so-corp-token'] = '' . $headers->xAcsBtripSoCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ApplyApprove',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/apply/v1/biz-trip/action/approve',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ApplyApproveResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新出差审批单（状态）.
     *
     * @param request - ApplyApproveRequest
     *
     * @returns ApplyApproveResponse
     *
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
     * 外部审批节点状态同步.
     *
     * @param tmpReq - ApplyExternalNodeStatusUpdateRequest
     * @param headers - ApplyExternalNodeStatusUpdateHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ApplyExternalNodeStatusUpdateResponse
     *
     * @param ApplyExternalNodeStatusUpdateRequest $tmpReq
     * @param ApplyExternalNodeStatusUpdateHeaders $headers
     * @param RuntimeOptions                       $runtime
     *
     * @return ApplyExternalNodeStatusUpdateResponse
     */
    public function applyExternalNodeStatusUpdateWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ApplyExternalNodeStatusUpdateShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->operationRecords) {
            $request->operationRecordsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->operationRecords, 'operation_records', 'json');
        }

        $body = [];
        if (null !== $request->nodeId) {
            @$body['node_id'] = $request->nodeId;
        }

        if (null !== $request->operationRecordsShrink) {
            @$body['operation_records'] = $request->operationRecordsShrink;
        }

        if (null !== $request->processActionResult) {
            @$body['process_action_result'] = $request->processActionResult;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripCorpToken) {
            @$realHeaders['x-acs-btrip-corp-token'] = '' . $headers->xAcsBtripCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ApplyExternalNodeStatusUpdate',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/apply/v1/external-nodes/action/status-update',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ApplyExternalNodeStatusUpdateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 外部审批节点状态同步.
     *
     * @param request - ApplyExternalNodeStatusUpdateRequest
     *
     * @returns ApplyExternalNodeStatusUpdateResponse
     *
     * @param ApplyExternalNodeStatusUpdateRequest $request
     *
     * @return ApplyExternalNodeStatusUpdateResponse
     */
    public function applyExternalNodeStatusUpdate($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ApplyExternalNodeStatusUpdateHeaders([]);

        return $this->applyExternalNodeStatusUpdateWithOptions($request, $headers, $runtime);
    }

    /**
     * 申请发票.
     *
     * @param tmpReq - ApplyInvoiceTaskRequest
     * @param headers - ApplyInvoiceTaskHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ApplyInvoiceTaskResponse
     *
     * @param ApplyInvoiceTaskRequest $tmpReq
     * @param ApplyInvoiceTaskHeaders $headers
     * @param RuntimeOptions          $runtime
     *
     * @return ApplyInvoiceTaskResponse
     */
    public function applyInvoiceTaskWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ApplyInvoiceTaskShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->invoiceTaskList) {
            $request->invoiceTaskListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->invoiceTaskList, 'invoice_task_list', 'json');
        }

        $body = [];
        if (null !== $request->billDate) {
            @$body['bill_date'] = $request->billDate;
        }

        if (null !== $request->invoiceTaskListShrink) {
            @$body['invoice_task_list'] = $request->invoiceTaskListShrink;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripSoCorpToken) {
            @$realHeaders['x-acs-btrip-so-corp-token'] = '' . $headers->xAcsBtripSoCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ApplyInvoiceTask',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/invoice/v1/apply-invoice-task',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ApplyInvoiceTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 申请发票.
     *
     * @param request - ApplyInvoiceTaskRequest
     *
     * @returns ApplyInvoiceTaskResponse
     *
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
     * 查询出差审批单列表.
     *
     * @param request - ApplyListQueryRequest
     * @param headers - ApplyListQueryHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ApplyListQueryResponse
     *
     * @param ApplyListQueryRequest $request
     * @param ApplyListQueryHeaders $headers
     * @param RuntimeOptions        $runtime
     *
     * @return ApplyListQueryResponse
     */
    public function applyListQueryWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->allApply) {
            @$query['all_apply'] = $request->allApply;
        }

        if (null !== $request->departId) {
            @$query['depart_id'] = $request->departId;
        }

        if (null !== $request->endTime) {
            @$query['end_time'] = $request->endTime;
        }

        if (null !== $request->gmtModified) {
            @$query['gmt_modified'] = $request->gmtModified;
        }

        if (null !== $request->onlyShangLvApply) {
            @$query['only_shang_lv_apply'] = $request->onlyShangLvApply;
        }

        if (null !== $request->page) {
            @$query['page'] = $request->page;
        }

        if (null !== $request->pageSize) {
            @$query['page_size'] = $request->pageSize;
        }

        if (null !== $request->startTime) {
            @$query['start_time'] = $request->startTime;
        }

        if (null !== $request->subCorpId) {
            @$query['sub_corp_id'] = $request->subCorpId;
        }

        if (null !== $request->type) {
            @$query['type'] = $request->type;
        }

        if (null !== $request->unionNo) {
            @$query['union_no'] = $request->unionNo;
        }

        if (null !== $request->userId) {
            @$query['user_id'] = $request->userId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripSoCorpToken) {
            @$realHeaders['x-acs-btrip-so-corp-token'] = '' . $headers->xAcsBtripSoCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ApplyListQuery',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/apply/v1/biz-trips',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ApplyListQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询出差审批单列表.
     *
     * @param request - ApplyListQueryRequest
     *
     * @returns ApplyListQueryResponse
     *
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
     * 更新出差审批单.
     *
     * @param tmpReq - ApplyModifyRequest
     * @param headers - ApplyModifyHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ApplyModifyResponse
     *
     * @param ApplyModifyRequest $tmpReq
     * @param ApplyModifyHeaders $headers
     * @param RuntimeOptions     $runtime
     *
     * @return ApplyModifyResponse
     */
    public function applyModifyWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ApplyModifyShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->carRule) {
            $request->carRuleShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->carRule, 'car_rule', 'json');
        }

        if (null !== $tmpReq->defaultStandard) {
            $request->defaultStandardShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->defaultStandard, 'default_standard', 'json');
        }

        if (null !== $tmpReq->externalTravelerList) {
            $request->externalTravelerListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->externalTravelerList, 'external_traveler_list', 'json');
        }

        if (null !== $tmpReq->externalTravelerStandard) {
            $request->externalTravelerStandardShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->externalTravelerStandard, 'external_traveler_standard', 'json');
        }

        if (null !== $tmpReq->hotelShare) {
            $request->hotelShareShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->hotelShare, 'hotel_share', 'json');
        }

        if (null !== $tmpReq->itineraryList) {
            $request->itineraryListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->itineraryList, 'itinerary_list', 'json');
        }

        if (null !== $tmpReq->itinerarySetList) {
            $request->itinerarySetListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->itinerarySetList, 'itinerary_set_list', 'json');
        }

        if (null !== $tmpReq->travelerList) {
            $request->travelerListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->travelerList, 'traveler_list', 'json');
        }

        if (null !== $tmpReq->travelerStandard) {
            $request->travelerStandardShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->travelerStandard, 'traveler_standard', 'json');
        }

        $body = [];
        if (null !== $request->budget) {
            @$body['budget'] = $request->budget;
        }

        if (null !== $request->budgetMerge) {
            @$body['budget_merge'] = $request->budgetMerge;
        }

        if (null !== $request->carRuleShrink) {
            @$body['car_rule'] = $request->carRuleShrink;
        }

        if (null !== $request->corpName) {
            @$body['corp_name'] = $request->corpName;
        }

        if (null !== $request->defaultStandardShrink) {
            @$body['default_standard'] = $request->defaultStandardShrink;
        }

        if (null !== $request->departId) {
            @$body['depart_id'] = $request->departId;
        }

        if (null !== $request->departName) {
            @$body['depart_name'] = $request->departName;
        }

        if (null !== $request->extendField) {
            @$body['extend_field'] = $request->extendField;
        }

        if (null !== $request->externalTravelerListShrink) {
            @$body['external_traveler_list'] = $request->externalTravelerListShrink;
        }

        if (null !== $request->externalTravelerStandardShrink) {
            @$body['external_traveler_standard'] = $request->externalTravelerStandardShrink;
        }

        if (null !== $request->flightBudget) {
            @$body['flight_budget'] = $request->flightBudget;
        }

        if (null !== $request->hotelBudget) {
            @$body['hotel_budget'] = $request->hotelBudget;
        }

        if (null !== $request->hotelShareShrink) {
            @$body['hotel_share'] = $request->hotelShareShrink;
        }

        if (null !== $request->intlFlightBudget) {
            @$body['intl_flight_budget'] = $request->intlFlightBudget;
        }

        if (null !== $request->intlHotelBudget) {
            @$body['intl_hotel_budget'] = $request->intlHotelBudget;
        }

        if (null !== $request->itineraryListShrink) {
            @$body['itinerary_list'] = $request->itineraryListShrink;
        }

        if (null !== $request->itineraryRule) {
            @$body['itinerary_rule'] = $request->itineraryRule;
        }

        if (null !== $request->itinerarySetListShrink) {
            @$body['itinerary_set_list'] = $request->itinerarySetListShrink;
        }

        if (null !== $request->limitTraveler) {
            @$body['limit_traveler'] = $request->limitTraveler;
        }

        if (null !== $request->mealBudget) {
            @$body['meal_budget'] = $request->mealBudget;
        }

        if (null !== $request->paymentDepartmentId) {
            @$body['payment_department_id'] = $request->paymentDepartmentId;
        }

        if (null !== $request->paymentDepartmentName) {
            @$body['payment_department_name'] = $request->paymentDepartmentName;
        }

        if (null !== $request->status) {
            @$body['status'] = $request->status;
        }

        if (null !== $request->subCorpId) {
            @$body['sub_corp_id'] = $request->subCorpId;
        }

        if (null !== $request->thirdpartApplyId) {
            @$body['thirdpart_apply_id'] = $request->thirdpartApplyId;
        }

        if (null !== $request->thirdpartBusinessId) {
            @$body['thirdpart_business_id'] = $request->thirdpartBusinessId;
        }

        if (null !== $request->thirdpartDepartId) {
            @$body['thirdpart_depart_id'] = $request->thirdpartDepartId;
        }

        if (null !== $request->togetherBookRule) {
            @$body['together_book_rule'] = $request->togetherBookRule;
        }

        if (null !== $request->trainBudget) {
            @$body['train_budget'] = $request->trainBudget;
        }

        if (null !== $request->travelerListShrink) {
            @$body['traveler_list'] = $request->travelerListShrink;
        }

        if (null !== $request->travelerStandardShrink) {
            @$body['traveler_standard'] = $request->travelerStandardShrink;
        }

        if (null !== $request->tripCause) {
            @$body['trip_cause'] = $request->tripCause;
        }

        if (null !== $request->tripDay) {
            @$body['trip_day'] = $request->tripDay;
        }

        if (null !== $request->tripTitle) {
            @$body['trip_title'] = $request->tripTitle;
        }

        if (null !== $request->unionNo) {
            @$body['union_no'] = $request->unionNo;
        }

        if (null !== $request->userId) {
            @$body['user_id'] = $request->userId;
        }

        if (null !== $request->userName) {
            @$body['user_name'] = $request->userName;
        }

        if (null !== $request->vehicleBudget) {
            @$body['vehicle_budget'] = $request->vehicleBudget;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripSoCorpToken) {
            @$realHeaders['x-acs-btrip-so-corp-token'] = '' . $headers->xAcsBtripSoCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ApplyModify',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/apply/v1/biz-trip',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ApplyModifyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新出差审批单.
     *
     * @param request - ApplyModifyRequest
     *
     * @returns ApplyModifyResponse
     *
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
     * 查询出差审批单详情.
     *
     * @param request - ApplyQueryRequest
     * @param headers - ApplyQueryHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ApplyQueryResponse
     *
     * @param ApplyQueryRequest $request
     * @param ApplyQueryHeaders $headers
     * @param RuntimeOptions    $runtime
     *
     * @return ApplyQueryResponse
     */
    public function applyQueryWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applyId) {
            @$query['apply_id'] = $request->applyId;
        }

        if (null !== $request->applyShowId) {
            @$query['apply_show_id'] = $request->applyShowId;
        }

        if (null !== $request->subCorpId) {
            @$query['sub_corp_id'] = $request->subCorpId;
        }

        if (null !== $request->thirdpartApplyId) {
            @$query['thirdpart_apply_id'] = $request->thirdpartApplyId;
        }

        if (null !== $request->type) {
            @$query['type'] = $request->type;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripSoCorpToken) {
            @$realHeaders['x-acs-btrip-so-corp-token'] = '' . $headers->xAcsBtripSoCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ApplyQuery',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/apply/v1/biz-trip',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ApplyQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询出差审批单详情.
     *
     * @param request - ApplyQueryRequest
     *
     * @returns ApplyQueryResponse
     *
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
     * 执行审批任务
     *
     * @param request - ApplyTripTaskExecuteRequest
     * @param headers - ApplyTripTaskExecuteHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ApplyTripTaskExecuteResponse
     *
     * @param ApplyTripTaskExecuteRequest $request
     * @param ApplyTripTaskExecuteHeaders $headers
     * @param RuntimeOptions              $runtime
     *
     * @return ApplyTripTaskExecuteResponse
     */
    public function applyTripTaskExecuteWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->actionFrom) {
            @$body['action_from'] = $request->actionFrom;
        }

        if (null !== $request->comment) {
            @$body['comment'] = $request->comment;
        }

        if (null !== $request->taskAction) {
            @$body['task_action'] = $request->taskAction;
        }

        if (null !== $request->taskId) {
            @$body['task_id'] = $request->taskId;
        }

        if (null !== $request->userId) {
            @$body['user_id'] = $request->userId;
        }

        if (null !== $request->userName) {
            @$body['user_name'] = $request->userName;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripSoCorpToken) {
            @$realHeaders['x-acs-btrip-so-corp-token'] = '' . $headers->xAcsBtripSoCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ApplyTripTaskExecute',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/apply/v1/trip-task/action/execute',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ApplyTripTaskExecuteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 执行审批任务
     *
     * @param request - ApplyTripTaskExecuteRequest
     *
     * @returns ApplyTripTaskExecuteResponse
     *
     * @param ApplyTripTaskExecuteRequest $request
     *
     * @return ApplyTripTaskExecuteResponse
     */
    public function applyTripTaskExecute($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ApplyTripTaskExecuteHeaders([]);

        return $this->applyTripTaskExecuteWithOptions($request, $headers, $runtime);
    }

    /**
     * 搜索国内/国际（港澳台）城市基础行政区划数据.
     *
     * @param request - BaseCityInfoSearchRequest
     * @param headers - BaseCityInfoSearchHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BaseCityInfoSearchResponse
     *
     * @param BaseCityInfoSearchRequest $request
     * @param BaseCityInfoSearchHeaders $headers
     * @param RuntimeOptions            $runtime
     *
     * @return BaseCityInfoSearchResponse
     */
    public function baseCityInfoSearchWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->keyword) {
            @$query['keyword'] = $request->keyword;
        }

        if (null !== $request->region) {
            @$query['region'] = $request->region;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripAccessToken) {
            @$realHeaders['x-acs-btrip-access-token'] = '' . $headers->xAcsBtripAccessToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BaseCityInfoSearch',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/city/v1/cities/action/search',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return BaseCityInfoSearchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 搜索国内/国际（港澳台）城市基础行政区划数据.
     *
     * @param request - BaseCityInfoSearchRequest
     *
     * @returns BaseCityInfoSearchResponse
     *
     * @param BaseCityInfoSearchRequest $request
     *
     * @return BaseCityInfoSearchResponse
     */
    public function baseCityInfoSearch($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new BaseCityInfoSearchHeaders([]);

        return $this->baseCityInfoSearchWithOptions($request, $headers, $runtime);
    }

    /**
     * 商旅账单内容修改.
     *
     * @param request - BtripBillInfoAdjustRequest
     * @param headers - BtripBillInfoAdjustHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BtripBillInfoAdjustResponse
     *
     * @param BtripBillInfoAdjustRequest $request
     * @param BtripBillInfoAdjustHeaders $headers
     * @param RuntimeOptions             $runtime
     *
     * @return BtripBillInfoAdjustResponse
     */
    public function btripBillInfoAdjustWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->primaryId) {
            @$body['primary_id'] = $request->primaryId;
        }

        if (null !== $request->thirdPartCostCenterId) {
            @$body['third_part_cost_center_id'] = $request->thirdPartCostCenterId;
        }

        if (null !== $request->thirdPartDepartmentId) {
            @$body['third_part_department_id'] = $request->thirdPartDepartmentId;
        }

        if (null !== $request->thirdPartInvoiceId) {
            @$body['third_part_invoice_id'] = $request->thirdPartInvoiceId;
        }

        if (null !== $request->thirdPartProjectId) {
            @$body['third_part_project_id'] = $request->thirdPartProjectId;
        }

        if (null !== $request->userId) {
            @$body['user_id'] = $request->userId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripCorpToken) {
            @$realHeaders['x-acs-btrip-corp-token'] = '' . $headers->xAcsBtripCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'BtripBillInfoAdjust',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/bill/v1/info/action/adjust',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BtripBillInfoAdjustResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 商旅账单内容修改.
     *
     * @param request - BtripBillInfoAdjustRequest
     *
     * @returns BtripBillInfoAdjustResponse
     *
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
     * 同步市内用车审批单.
     *
     * @param tmpReq - CarApplyAddRequest
     * @param headers - CarApplyAddHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CarApplyAddResponse
     *
     * @param CarApplyAddRequest $tmpReq
     * @param CarApplyAddHeaders $headers
     * @param RuntimeOptions     $runtime
     *
     * @return CarApplyAddResponse
     */
    public function carApplyAddWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new CarApplyAddShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->travelerStandard) {
            $request->travelerStandardShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->travelerStandard, 'traveler_standard', 'json');
        }

        $body = [];
        if (null !== $request->cause) {
            @$body['cause'] = $request->cause;
        }

        if (null !== $request->city) {
            @$body['city'] = $request->city;
        }

        if (null !== $request->cityCodeSet) {
            @$body['city_code_set'] = $request->cityCodeSet;
        }

        if (null !== $request->date) {
            @$body['date'] = $request->date;
        }

        if (null !== $request->finishedDate) {
            @$body['finished_date'] = $request->finishedDate;
        }

        if (null !== $request->projectCode) {
            @$body['project_code'] = $request->projectCode;
        }

        if (null !== $request->projectName) {
            @$body['project_name'] = $request->projectName;
        }

        if (null !== $request->status) {
            @$body['status'] = $request->status;
        }

        if (null !== $request->thirdPartApplyId) {
            @$body['third_part_apply_id'] = $request->thirdPartApplyId;
        }

        if (null !== $request->thirdPartCostCenterId) {
            @$body['third_part_cost_center_id'] = $request->thirdPartCostCenterId;
        }

        if (null !== $request->thirdPartInvoiceId) {
            @$body['third_part_invoice_id'] = $request->thirdPartInvoiceId;
        }

        if (null !== $request->timesTotal) {
            @$body['times_total'] = $request->timesTotal;
        }

        if (null !== $request->timesType) {
            @$body['times_type'] = $request->timesType;
        }

        if (null !== $request->timesUsed) {
            @$body['times_used'] = $request->timesUsed;
        }

        if (null !== $request->title) {
            @$body['title'] = $request->title;
        }

        if (null !== $request->travelerStandardShrink) {
            @$body['traveler_standard'] = $request->travelerStandardShrink;
        }

        if (null !== $request->userId) {
            @$body['user_id'] = $request->userId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripSoCorpToken) {
            @$realHeaders['x-acs-btrip-so-corp-token'] = '' . $headers->xAcsBtripSoCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CarApplyAdd',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/apply/v1/car',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CarApplyAddResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 同步市内用车审批单.
     *
     * @param request - CarApplyAddRequest
     *
     * @returns CarApplyAddResponse
     *
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
     * 更新市内用车审批单.
     *
     * @param request - CarApplyModifyRequest
     * @param headers - CarApplyModifyHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CarApplyModifyResponse
     *
     * @param CarApplyModifyRequest $request
     * @param CarApplyModifyHeaders $headers
     * @param RuntimeOptions        $runtime
     *
     * @return CarApplyModifyResponse
     */
    public function carApplyModifyWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->operateTime) {
            @$body['operate_time'] = $request->operateTime;
        }

        if (null !== $request->remark) {
            @$body['remark'] = $request->remark;
        }

        if (null !== $request->status) {
            @$body['status'] = $request->status;
        }

        if (null !== $request->thirdPartApplyId) {
            @$body['third_part_apply_id'] = $request->thirdPartApplyId;
        }

        if (null !== $request->userId) {
            @$body['user_id'] = $request->userId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripSoCorpToken) {
            @$realHeaders['x-acs-btrip-so-corp-token'] = '' . $headers->xAcsBtripSoCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CarApplyModify',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/apply/v1/car',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CarApplyModifyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新市内用车审批单.
     *
     * @param request - CarApplyModifyRequest
     *
     * @returns CarApplyModifyResponse
     *
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
     * 查询市内用车审批单.
     *
     * @param request - CarApplyQueryRequest
     * @param headers - CarApplyQueryHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CarApplyQueryResponse
     *
     * @param CarApplyQueryRequest $request
     * @param CarApplyQueryHeaders $headers
     * @param RuntimeOptions       $runtime
     *
     * @return CarApplyQueryResponse
     */
    public function carApplyQueryWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->createdEndAt) {
            @$query['created_end_at'] = $request->createdEndAt;
        }

        if (null !== $request->createdStartAt) {
            @$query['created_start_at'] = $request->createdStartAt;
        }

        if (null !== $request->pageNumber) {
            @$query['page_number'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['page_size'] = $request->pageSize;
        }

        if (null !== $request->thirdPartApplyId) {
            @$query['third_part_apply_id'] = $request->thirdPartApplyId;
        }

        if (null !== $request->userId) {
            @$query['user_id'] = $request->userId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripSoCorpToken) {
            @$realHeaders['x-acs-btrip-so-corp-token'] = '' . $headers->xAcsBtripSoCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CarApplyQuery',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/apply/v1/car',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CarApplyQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询市内用车审批单.
     *
     * @param request - CarApplyQueryRequest
     *
     * @returns CarApplyQueryResponse
     *
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
     * 查询用车记账数据.
     *
     * @param request - CarBillSettlementQueryRequest
     * @param headers - CarBillSettlementQueryHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CarBillSettlementQueryResponse
     *
     * @param CarBillSettlementQueryRequest $request
     * @param CarBillSettlementQueryHeaders $headers
     * @param RuntimeOptions                $runtime
     *
     * @return CarBillSettlementQueryResponse
     */
    public function carBillSettlementQueryWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->billBatch) {
            @$query['bill_batch'] = $request->billBatch;
        }

        if (null !== $request->orderId) {
            @$query['order_id'] = $request->orderId;
        }

        if (null !== $request->pageNo) {
            @$query['page_no'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['page_size'] = $request->pageSize;
        }

        if (null !== $request->periodEnd) {
            @$query['period_end'] = $request->periodEnd;
        }

        if (null !== $request->periodStart) {
            @$query['period_start'] = $request->periodStart;
        }

        if (null !== $request->scrollId) {
            @$query['scroll_id'] = $request->scrollId;
        }

        if (null !== $request->scrollMod) {
            @$query['scroll_mod'] = $request->scrollMod;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripSoCorpToken) {
            @$realHeaders['x-acs-btrip-so-corp-token'] = '' . $headers->xAcsBtripSoCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CarBillSettlementQuery',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/car/v1/bill-settlement',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CarBillSettlementQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询用车记账数据.
     *
     * @param request - CarBillSettlementQueryRequest
     *
     * @returns CarBillSettlementQueryResponse
     *
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
     * 查询用车订单列表.
     *
     * @param request - CarOrderListQueryRequest
     * @param headers - CarOrderListQueryHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CarOrderListQueryResponse
     *
     * @param CarOrderListQueryRequest $request
     * @param CarOrderListQueryHeaders $headers
     * @param RuntimeOptions           $runtime
     *
     * @return CarOrderListQueryResponse
     */
    public function carOrderListQueryWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->allApply) {
            @$query['all_apply'] = $request->allApply;
        }

        if (null !== $request->applyId) {
            @$query['apply_id'] = $request->applyId;
        }

        if (null !== $request->departId) {
            @$query['depart_id'] = $request->departId;
        }

        if (null !== $request->endTime) {
            @$query['end_time'] = $request->endTime;
        }

        if (null !== $request->page) {
            @$query['page'] = $request->page;
        }

        if (null !== $request->pageSize) {
            @$query['page_size'] = $request->pageSize;
        }

        if (null !== $request->startTime) {
            @$query['start_time'] = $request->startTime;
        }

        if (null !== $request->thirdpartApplyId) {
            @$query['thirdpart_apply_id'] = $request->thirdpartApplyId;
        }

        if (null !== $request->updateEndTime) {
            @$query['update_end_time'] = $request->updateEndTime;
        }

        if (null !== $request->updateStartTime) {
            @$query['update_start_time'] = $request->updateStartTime;
        }

        if (null !== $request->userId) {
            @$query['user_id'] = $request->userId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripSoCorpToken) {
            @$realHeaders['x-acs-btrip-so-corp-token'] = '' . $headers->xAcsBtripSoCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CarOrderListQuery',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/car/v1/order-list',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CarOrderListQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询用车订单列表.
     *
     * @param request - CarOrderListQueryRequest
     *
     * @returns CarOrderListQueryResponse
     *
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
     * 用车订单查询.
     *
     * @param request - CarOrderQueryRequest
     * @param headers - CarOrderQueryHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CarOrderQueryResponse
     *
     * @param CarOrderQueryRequest $request
     * @param CarOrderQueryHeaders $headers
     * @param RuntimeOptions       $runtime
     *
     * @return CarOrderQueryResponse
     */
    public function carOrderQueryWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->orderId) {
            @$query['order_id'] = $request->orderId;
        }

        if (null !== $request->subOrderId) {
            @$query['sub_order_id'] = $request->subOrderId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripSoCorpToken) {
            @$realHeaders['x-acs-btrip-so-corp-token'] = '' . $headers->xAcsBtripSoCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CarOrderQuery',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/car/v1/order',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CarOrderQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 用车订单查询.
     *
     * @param request - CarOrderQueryRequest
     *
     * @returns CarOrderQueryResponse
     *
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
     * 查询企业用车场景.
     *
     * @param headers - CarSceneQueryHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CarSceneQueryResponse
     *
     * @param CarSceneQueryHeaders $headers
     * @param RuntimeOptions       $runtime
     *
     * @return CarSceneQueryResponse
     */
    public function carSceneQueryWithOptions($headers, $runtime)
    {
        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripCorpToken) {
            @$realHeaders['x-acs-btrip-corp-token'] = '' . $headers->xAcsBtripCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
        ]);
        $params = new Params([
            'action' => 'CarSceneQuery',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/car/v1/scenes',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CarSceneQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询企业用车场景.
     *
     * @returns CarSceneQueryResponse
     *
     * @return CarSceneQueryResponse
     */
    public function carSceneQuery()
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CarSceneQueryHeaders([]);

        return $this->carSceneQueryWithOptions($headers, $runtime);
    }

    /**
     * 渠道商创建企业.
     *
     * @param request - ChannelCorpCreateRequest
     * @param headers - ChannelCorpCreateHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ChannelCorpCreateResponse
     *
     * @param ChannelCorpCreateRequest $request
     * @param ChannelCorpCreateHeaders $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ChannelCorpCreateResponse
     */
    public function channelCorpCreateWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->administratorName) {
            @$body['administrator_name'] = $request->administratorName;
        }

        if (null !== $request->administratorPhone) {
            @$body['administrator_phone'] = $request->administratorPhone;
        }

        if (null !== $request->city) {
            @$body['city'] = $request->city;
        }

        if (null !== $request->corpName) {
            @$body['corp_name'] = $request->corpName;
        }

        if (null !== $request->province) {
            @$body['province'] = $request->province;
        }

        if (null !== $request->scope) {
            @$body['scope'] = $request->scope;
        }

        if (null !== $request->thirdCorpId) {
            @$body['third_corp_id'] = $request->thirdCorpId;
        }

        if (null !== $request->userId) {
            @$body['user_id'] = $request->userId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripCorpToken) {
            @$realHeaders['x-acs-btrip-corp-token'] = '' . $headers->xAcsBtripCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ChannelCorpCreate',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/corp/v1/channelCorps',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ChannelCorpCreateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 渠道商创建企业.
     *
     * @param request - ChannelCorpCreateRequest
     *
     * @returns ChannelCorpCreateResponse
     *
     * @param ChannelCorpCreateRequest $request
     *
     * @return ChannelCorpCreateResponse
     */
    public function channelCorpCreate($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ChannelCorpCreateHeaders([]);

        return $this->channelCorpCreateWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询行政区划（市，区）基础数据.
     *
     * @param request - CitySearchRequest
     * @param headers - CitySearchHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CitySearchResponse
     *
     * @param CitySearchRequest $request
     * @param CitySearchHeaders $headers
     * @param RuntimeOptions    $runtime
     *
     * @return CitySearchResponse
     */
    public function citySearchWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->keyword) {
            @$query['keyword'] = $request->keyword;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripSoCorpToken) {
            @$realHeaders['x-acs-btrip-so-corp-token'] = '' . $headers->xAcsBtripSoCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CitySearch',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/city/v1/city',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CitySearchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询行政区划（市，区）基础数据.
     *
     * @param request - CitySearchRequest
     *
     * @returns CitySearchResponse
     *
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
     * 查询退改审批信息.
     *
     * @param request - CommonApplyQueryRequest
     * @param headers - CommonApplyQueryHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CommonApplyQueryResponse
     *
     * @param CommonApplyQueryRequest $request
     * @param CommonApplyQueryHeaders $headers
     * @param RuntimeOptions          $runtime
     *
     * @return CommonApplyQueryResponse
     */
    public function commonApplyQueryWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applyId) {
            @$query['apply_id'] = $request->applyId;
        }

        if (null !== $request->bizCategory) {
            @$query['biz_category'] = $request->bizCategory;
        }

        if (null !== $request->businessInstanceId) {
            @$query['business_instance_id'] = $request->businessInstanceId;
        }

        if (null !== $request->userId) {
            @$query['user_id'] = $request->userId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripSoCorpToken) {
            @$realHeaders['x-acs-btrip-so-corp-token'] = '' . $headers->xAcsBtripSoCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CommonApplyQuery',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/apply/v1/common',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CommonApplyQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询退改审批信息.
     *
     * @param request - CommonApplyQueryRequest
     *
     * @returns CommonApplyQueryResponse
     *
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
     * 退改审批结果同步.
     *
     * @param request - CommonApplySyncRequest
     * @param headers - CommonApplySyncHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CommonApplySyncResponse
     *
     * @param CommonApplySyncRequest $request
     * @param CommonApplySyncHeaders $headers
     * @param RuntimeOptions         $runtime
     *
     * @return CommonApplySyncResponse
     */
    public function commonApplySyncWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applyId) {
            @$query['apply_id'] = $request->applyId;
        }

        if (null !== $request->bizCategory) {
            @$query['biz_category'] = $request->bizCategory;
        }

        if (null !== $request->remark) {
            @$query['remark'] = $request->remark;
        }

        if (null !== $request->status) {
            @$query['status'] = $request->status;
        }

        if (null !== $request->thirdpartyFlowId) {
            @$query['thirdparty_flow_id'] = $request->thirdpartyFlowId;
        }

        if (null !== $request->userId) {
            @$query['user_id'] = $request->userId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripSoCorpToken) {
            @$realHeaders['x-acs-btrip-so-corp-token'] = '' . $headers->xAcsBtripSoCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CommonApplySync',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/apply/v1/syn-common',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CommonApplySyncResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 退改审批结果同步.
     *
     * @param request - CommonApplySyncRequest
     *
     * @returns CommonApplySyncResponse
     *
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
     * 查询服务商机票记账数据.
     *
     * @param request - CooperatorFlightBillSettlementQueryRequest
     * @param headers - CooperatorFlightBillSettlementQueryHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CooperatorFlightBillSettlementQueryResponse
     *
     * @param CooperatorFlightBillSettlementQueryRequest $request
     * @param CooperatorFlightBillSettlementQueryHeaders $headers
     * @param RuntimeOptions                             $runtime
     *
     * @return CooperatorFlightBillSettlementQueryResponse
     */
    public function cooperatorFlightBillSettlementQueryWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->billBatch) {
            @$query['bill_batch'] = $request->billBatch;
        }

        if (null !== $request->cooperatorId) {
            @$query['cooperator_id'] = $request->cooperatorId;
        }

        if (null !== $request->orderId) {
            @$query['order_id'] = $request->orderId;
        }

        if (null !== $request->pageNo) {
            @$query['page_no'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['page_size'] = $request->pageSize;
        }

        if (null !== $request->periodEnd) {
            @$query['period_end'] = $request->periodEnd;
        }

        if (null !== $request->periodStart) {
            @$query['period_start'] = $request->periodStart;
        }

        if (null !== $request->scrollId) {
            @$query['scroll_id'] = $request->scrollId;
        }

        if (null !== $request->scrollMod) {
            @$query['scroll_mod'] = $request->scrollMod;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripCorpToken) {
            @$realHeaders['x-acs-btrip-corp-token'] = '' . $headers->xAcsBtripCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CooperatorFlightBillSettlementQuery',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/cooperator-flight/v1/bill-settlement',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CooperatorFlightBillSettlementQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询服务商机票记账数据.
     *
     * @param request - CooperatorFlightBillSettlementQueryRequest
     *
     * @returns CooperatorFlightBillSettlementQueryResponse
     *
     * @param CooperatorFlightBillSettlementQueryRequest $request
     *
     * @return CooperatorFlightBillSettlementQueryResponse
     */
    public function cooperatorFlightBillSettlementQuery($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CooperatorFlightBillSettlementQueryHeaders([]);

        return $this->cooperatorFlightBillSettlementQueryWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询服务商酒店记账数据.
     *
     * @param request - CooperatorHotelBillSettlementQueryRequest
     * @param headers - CooperatorHotelBillSettlementQueryHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CooperatorHotelBillSettlementQueryResponse
     *
     * @param CooperatorHotelBillSettlementQueryRequest $request
     * @param CooperatorHotelBillSettlementQueryHeaders $headers
     * @param RuntimeOptions                            $runtime
     *
     * @return CooperatorHotelBillSettlementQueryResponse
     */
    public function cooperatorHotelBillSettlementQueryWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->billBatch) {
            @$query['bill_batch'] = $request->billBatch;
        }

        if (null !== $request->cooperatorId) {
            @$query['cooperator_id'] = $request->cooperatorId;
        }

        if (null !== $request->orderId) {
            @$query['order_id'] = $request->orderId;
        }

        if (null !== $request->pageNo) {
            @$query['page_no'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['page_size'] = $request->pageSize;
        }

        if (null !== $request->periodEnd) {
            @$query['period_end'] = $request->periodEnd;
        }

        if (null !== $request->periodStart) {
            @$query['period_start'] = $request->periodStart;
        }

        if (null !== $request->scrollId) {
            @$query['scroll_id'] = $request->scrollId;
        }

        if (null !== $request->scrollMod) {
            @$query['scroll_mod'] = $request->scrollMod;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripCorpToken) {
            @$realHeaders['x-acs-btrip-corp-token'] = '' . $headers->xAcsBtripCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CooperatorHotelBillSettlementQuery',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/cooperator-hotel/v1/bill-settlement',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CooperatorHotelBillSettlementQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询服务商酒店记账数据.
     *
     * @param request - CooperatorHotelBillSettlementQueryRequest
     *
     * @returns CooperatorHotelBillSettlementQueryResponse
     *
     * @param CooperatorHotelBillSettlementQueryRequest $request
     *
     * @return CooperatorHotelBillSettlementQueryResponse
     */
    public function cooperatorHotelBillSettlementQuery($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CooperatorHotelBillSettlementQueryHeaders([]);

        return $this->cooperatorHotelBillSettlementQueryWithOptions($request, $headers, $runtime);
    }

    /**
     * 酒店订单事件推送
     *
     * @param request - CooperatorHotelEventPushRequest
     * @param headers - CooperatorHotelEventPushHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CooperatorHotelEventPushResponse
     *
     * @param CooperatorHotelEventPushRequest $request
     * @param CooperatorHotelEventPushHeaders $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return CooperatorHotelEventPushResponse
     */
    public function cooperatorHotelEventPushWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->changeOrderStatus) {
            @$body['change_order_status'] = $request->changeOrderStatus;
        }

        if (null !== $request->changeOrderStatusDesc) {
            @$body['change_order_status_desc'] = $request->changeOrderStatusDesc;
        }

        if (null !== $request->cooperatorOrderId) {
            @$body['cooperator_order_id'] = $request->cooperatorOrderId;
        }

        if (null !== $request->event) {
            @$body['event'] = $request->event;
        }

        if (null !== $request->eventDesc) {
            @$body['event_desc'] = $request->eventDesc;
        }

        if (null !== $request->eventTime) {
            @$body['event_time'] = $request->eventTime;
        }

        if (null !== $request->orderId) {
            @$body['order_id'] = $request->orderId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripCorpToken) {
            @$realHeaders['x-acs-btrip-corp-token'] = '' . $headers->xAcsBtripCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CooperatorHotelEventPush',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/coop-hotel/v1/orders/events',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CooperatorHotelEventPushResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 酒店订单事件推送
     *
     * @param request - CooperatorHotelEventPushRequest
     *
     * @returns CooperatorHotelEventPushResponse
     *
     * @param CooperatorHotelEventPushRequest $request
     *
     * @return CooperatorHotelEventPushResponse
     */
    public function cooperatorHotelEventPush($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CooperatorHotelEventPushHeaders([]);

        return $this->cooperatorHotelEventPushWithOptions($request, $headers, $runtime);
    }

    /**
     * 个人支付结果推送
     *
     * @param request - CooperatorSyncPayStatusRequest
     * @param headers - CooperatorSyncPayStatusHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CooperatorSyncPayStatusResponse
     *
     * @param CooperatorSyncPayStatusRequest $request
     * @param CooperatorSyncPayStatusHeaders $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return CooperatorSyncPayStatusResponse
     */
    public function cooperatorSyncPayStatusWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->cooperatorOrderId) {
            @$body['cooperator_order_id'] = $request->cooperatorOrderId;
        }

        if (null !== $request->cooperatorPayNo) {
            @$body['cooperator_pay_no'] = $request->cooperatorPayNo;
        }

        if (null !== $request->orderId) {
            @$body['order_id'] = $request->orderId;
        }

        if (null !== $request->payStatus) {
            @$body['pay_status'] = $request->payStatus;
        }

        if (null !== $request->payTime) {
            @$body['pay_time'] = $request->payTime;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripCorpToken) {
            @$realHeaders['x-acs-btrip-corp-token'] = '' . $headers->xAcsBtripCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CooperatorSyncPayStatus',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/coop-pay/v1/cashiers/status',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CooperatorSyncPayStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 个人支付结果推送
     *
     * @param request - CooperatorSyncPayStatusRequest
     *
     * @returns CooperatorSyncPayStatusResponse
     *
     * @param CooperatorSyncPayStatusRequest $request
     *
     * @return CooperatorSyncPayStatusResponse
     */
    public function cooperatorSyncPayStatus($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CooperatorSyncPayStatusHeaders([]);

        return $this->cooperatorSyncPayStatusWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取关联可调用企业接口.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CorpAuthLinkInfoQueryResponse
     *
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
            'action' => 'CorpAuthLinkInfoQuery',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/corp-authority-link/v1/info',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CorpAuthLinkInfoQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取关联可调用企业接口.
     *
     * @returns CorpAuthLinkInfoQueryResponse
     *
     * @return CorpAuthLinkInfoQueryResponse
     */
    public function corpAuthLinkInfoQuery()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->corpAuthLinkInfoQueryWithOptions($headers, $runtime);
    }

    /**
     * 换取CorpToken接口.
     *
     * @param request - CorpTokenRequest
     * @param headers - CorpTokenHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CorpTokenResponse
     *
     * @param CorpTokenRequest $request
     * @param CorpTokenHeaders $headers
     * @param RuntimeOptions   $runtime
     *
     * @return CorpTokenResponse
     */
    public function corpTokenWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appSecret) {
            @$query['app_secret'] = $request->appSecret;
        }

        if (null !== $request->corpId) {
            @$query['corp_id'] = $request->corpId;
        }

        if (null !== $request->type) {
            @$query['type'] = $request->type;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripAccessToken) {
            @$realHeaders['x-acs-btrip-access-token'] = '' . $headers->xAcsBtripAccessToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CorpToken',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/btrip-open-auth/v1/corp-token/action/take',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CorpTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 换取CorpToken接口.
     *
     * @param request - CorpTokenRequest
     *
     * @returns CorpTokenResponse
     *
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
     * 删除成本中心.
     *
     * @param request - CostCenterDeleteRequest
     * @param headers - CostCenterDeleteHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CostCenterDeleteResponse
     *
     * @param CostCenterDeleteRequest $request
     * @param CostCenterDeleteHeaders $headers
     * @param RuntimeOptions          $runtime
     *
     * @return CostCenterDeleteResponse
     */
    public function costCenterDeleteWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->thirdpartId) {
            @$query['thirdpart_id'] = $request->thirdpartId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripSoCorpToken) {
            @$realHeaders['x-acs-btrip-so-corp-token'] = '' . $headers->xAcsBtripSoCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CostCenterDelete',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/costcenter/v1/delete-costcenter',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CostCenterDeleteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除成本中心.
     *
     * @param request - CostCenterDeleteRequest
     *
     * @returns CostCenterDeleteResponse
     *
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
     * 修改成本中心.
     *
     * @param request - CostCenterModifyRequest
     * @param headers - CostCenterModifyHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CostCenterModifyResponse
     *
     * @param CostCenterModifyRequest $request
     * @param CostCenterModifyHeaders $headers
     * @param RuntimeOptions          $runtime
     *
     * @return CostCenterModifyResponse
     */
    public function costCenterModifyWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->alipayNo) {
            @$body['alipay_no'] = $request->alipayNo;
        }

        if (null !== $request->disable) {
            @$body['disable'] = $request->disable;
        }

        if (null !== $request->number) {
            @$body['number'] = $request->number;
        }

        if (null !== $request->scope) {
            @$body['scope'] = $request->scope;
        }

        if (null !== $request->thirdpartId) {
            @$body['thirdpart_id'] = $request->thirdpartId;
        }

        if (null !== $request->title) {
            @$body['title'] = $request->title;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripSoCorpToken) {
            @$realHeaders['x-acs-btrip-so-corp-token'] = '' . $headers->xAcsBtripSoCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CostCenterModify',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/costcenter/v1/modify-costcenter',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CostCenterModifyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改成本中心.
     *
     * @param request - CostCenterModifyRequest
     *
     * @returns CostCenterModifyResponse
     *
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
     * 查看成本中心.
     *
     * @param request - CostCenterQueryRequest
     * @param headers - CostCenterQueryHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CostCenterQueryResponse
     *
     * @param CostCenterQueryRequest $request
     * @param CostCenterQueryHeaders $headers
     * @param RuntimeOptions         $runtime
     *
     * @return CostCenterQueryResponse
     */
    public function costCenterQueryWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->disable) {
            @$query['disable'] = $request->disable;
        }

        if (null !== $request->needOrgEntity) {
            @$query['need_org_entity'] = $request->needOrgEntity;
        }

        if (null !== $request->thirdpartId) {
            @$query['thirdpart_id'] = $request->thirdpartId;
        }

        if (null !== $request->title) {
            @$query['title'] = $request->title;
        }

        if (null !== $request->userId) {
            @$query['user_id'] = $request->userId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripSoCorpToken) {
            @$realHeaders['x-acs-btrip-so-corp-token'] = '' . $headers->xAcsBtripSoCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CostCenterQuery',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/costcenter/v1/costcenter',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CostCenterQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查看成本中心.
     *
     * @param request - CostCenterQueryRequest
     *
     * @returns CostCenterQueryResponse
     *
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
     * 保存成本中心.
     *
     * @param request - CostCenterSaveRequest
     * @param headers - CostCenterSaveHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CostCenterSaveResponse
     *
     * @param CostCenterSaveRequest $request
     * @param CostCenterSaveHeaders $headers
     * @param RuntimeOptions        $runtime
     *
     * @return CostCenterSaveResponse
     */
    public function costCenterSaveWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->alipayNo) {
            @$body['alipay_no'] = $request->alipayNo;
        }

        if (null !== $request->disable) {
            @$body['disable'] = $request->disable;
        }

        if (null !== $request->number) {
            @$body['number'] = $request->number;
        }

        if (null !== $request->scope) {
            @$body['scope'] = $request->scope;
        }

        if (null !== $request->thirdpartId) {
            @$body['thirdpart_id'] = $request->thirdpartId;
        }

        if (null !== $request->title) {
            @$body['title'] = $request->title;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripSoCorpToken) {
            @$realHeaders['x-acs-btrip-so-corp-token'] = '' . $headers->xAcsBtripSoCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CostCenterSave',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/costcenter/v1/save-costcenter',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CostCenterSaveResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 保存成本中心.
     *
     * @param request - CostCenterSaveRequest
     *
     * @returns CostCenterSaveResponse
     *
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
     * 创建企业自定义角色.
     *
     * @param request - CreateCustomRoleRequest
     * @param headers - CreateCustomRoleHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateCustomRoleResponse
     *
     * @param CreateCustomRoleRequest $request
     * @param CreateCustomRoleHeaders $headers
     * @param RuntimeOptions          $runtime
     *
     * @return CreateCustomRoleResponse
     */
    public function createCustomRoleWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->roleId) {
            @$body['role_id'] = $request->roleId;
        }

        if (null !== $request->roleName) {
            @$body['role_name'] = $request->roleName;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripCorpToken) {
            @$realHeaders['x-acs-btrip-corp-token'] = '' . $headers->xAcsBtripCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateCustomRole',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/role/v1/customRoles/create',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateCustomRoleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建企业自定义角色.
     *
     * @param request - CreateCustomRoleRequest
     *
     * @returns CreateCustomRoleResponse
     *
     * @param CreateCustomRoleRequest $request
     *
     * @return CreateCustomRoleResponse
     */
    public function createCustomRole($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CreateCustomRoleHeaders([]);

        return $this->createCustomRoleWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建子企业.
     *
     * @param request - CreateSubCorpRequest
     * @param headers - CreateSubCorpHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateSubCorpResponse
     *
     * @param CreateSubCorpRequest $request
     * @param CreateSubCorpHeaders $headers
     * @param RuntimeOptions       $runtime
     *
     * @return CreateSubCorpResponse
     */
    public function createSubCorpWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->outerCorpId) {
            @$body['outer_corp_id'] = $request->outerCorpId;
        }

        if (null !== $request->outerCorpName) {
            @$body['outer_corp_name'] = $request->outerCorpName;
        }

        if (null !== $request->userId) {
            @$body['user_id'] = $request->userId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripCorpToken) {
            @$realHeaders['x-acs-btrip-corp-token'] = '' . $headers->xAcsBtripCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateSubCorp',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/sub_corps/v1/corps',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateSubCorpResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建子企业.
     *
     * @param request - CreateSubCorpRequest
     *
     * @returns CreateSubCorpResponse
     *
     * @param CreateSubCorpRequest $request
     *
     * @return CreateSubCorpResponse
     */
    public function createSubCorp($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CreateSubCorpHeaders([]);

        return $this->createSubCorpWithOptions($request, $headers, $runtime);
    }

    /**
     * 删除企业自定义角色.
     *
     * @param request - DeleteCustomRoleRequest
     * @param headers - DeleteCustomRoleHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteCustomRoleResponse
     *
     * @param DeleteCustomRoleRequest $request
     * @param DeleteCustomRoleHeaders $headers
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteCustomRoleResponse
     */
    public function deleteCustomRoleWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->roleId) {
            @$body['role_id'] = $request->roleId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripCorpToken) {
            @$realHeaders['x-acs-btrip-corp-token'] = '' . $headers->xAcsBtripCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteCustomRole',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/role/v1/customRoles/delete',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteCustomRoleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除企业自定义角色.
     *
     * @param request - DeleteCustomRoleRequest
     *
     * @returns DeleteCustomRoleResponse
     *
     * @param DeleteCustomRoleRequest $request
     *
     * @return DeleteCustomRoleResponse
     */
    public function deleteCustomRole($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new DeleteCustomRoleHeaders([]);

        return $this->deleteCustomRoleWithOptions($request, $headers, $runtime);
    }

    /**
     * 删除企业部门.
     *
     * @param request - DeleteDepartmentRequest
     * @param headers - DeleteDepartmentHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDepartmentResponse
     *
     * @param DeleteDepartmentRequest $request
     * @param DeleteDepartmentHeaders $headers
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteDepartmentResponse
     */
    public function deleteDepartmentWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->outDeptId) {
            @$body['out_dept_id'] = $request->outDeptId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripCorpToken) {
            @$realHeaders['x-acs-btrip-corp-token'] = '' . $headers->xAcsBtripCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteDepartment',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/department/v2/delete',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteDepartmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除企业部门.
     *
     * @param request - DeleteDepartmentRequest
     *
     * @returns DeleteDepartmentResponse
     *
     * @param DeleteDepartmentRequest $request
     *
     * @return DeleteDepartmentResponse
     */
    public function deleteDepartment($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new DeleteDepartmentHeaders([]);

        return $this->deleteDepartmentWithOptions($request, $headers, $runtime);
    }

    /**
     * 批量删除企业自定义角色下人员.
     *
     * @param tmpReq - DeleteEmployeesFromCustomRoleRequest
     * @param headers - DeleteEmployeesFromCustomRoleHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteEmployeesFromCustomRoleResponse
     *
     * @param DeleteEmployeesFromCustomRoleRequest $tmpReq
     * @param DeleteEmployeesFromCustomRoleHeaders $headers
     * @param RuntimeOptions                       $runtime
     *
     * @return DeleteEmployeesFromCustomRoleResponse
     */
    public function deleteEmployeesFromCustomRoleWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new DeleteEmployeesFromCustomRoleShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->userIdList) {
            $request->userIdListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->userIdList, 'user_id_list', 'json');
        }

        $body = [];
        if (null !== $request->roleId) {
            @$body['role_id'] = $request->roleId;
        }

        if (null !== $request->userIdListShrink) {
            @$body['user_id_list'] = $request->userIdListShrink;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripCorpToken) {
            @$realHeaders['x-acs-btrip-corp-token'] = '' . $headers->xAcsBtripCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteEmployeesFromCustomRole',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/role/v1/customRoleEmployees/delete',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteEmployeesFromCustomRoleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 批量删除企业自定义角色下人员.
     *
     * @param request - DeleteEmployeesFromCustomRoleRequest
     *
     * @returns DeleteEmployeesFromCustomRoleResponse
     *
     * @param DeleteEmployeesFromCustomRoleRequest $request
     *
     * @return DeleteEmployeesFromCustomRoleResponse
     */
    public function deleteEmployeesFromCustomRole($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new DeleteEmployeesFromCustomRoleHeaders([]);

        return $this->deleteEmployeesFromCustomRoleWithOptions($request, $headers, $runtime);
    }

    /**
     * 删除发票抬头适用人员.
     *
     * @param tmpReq - DeleteInvoiceEntityRequest
     * @param headers - DeleteInvoiceEntityHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteInvoiceEntityResponse
     *
     * @param DeleteInvoiceEntityRequest $tmpReq
     * @param DeleteInvoiceEntityHeaders $headers
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteInvoiceEntityResponse
     */
    public function deleteInvoiceEntityWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new DeleteInvoiceEntityShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->entities) {
            $request->entitiesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->entities, 'entities', 'json');
        }

        $query = [];
        if (null !== $request->delAll) {
            @$query['del_all'] = $request->delAll;
        }

        if (null !== $request->entitiesShrink) {
            @$query['entities'] = $request->entitiesShrink;
        }

        if (null !== $request->thirdPartId) {
            @$query['third_part_id'] = $request->thirdPartId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripCorpToken) {
            @$realHeaders['x-acs-btrip-corp-token'] = '' . $headers->xAcsBtripCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteInvoiceEntity',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/invoice/v1/entities',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteInvoiceEntityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除发票抬头适用人员.
     *
     * @param request - DeleteInvoiceEntityRequest
     *
     * @returns DeleteInvoiceEntityResponse
     *
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
     * 同步外部平台部门信息至商旅内部.
     *
     * @param tmpReq - DepartmentSaveRequest
     * @param headers - DepartmentSaveHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DepartmentSaveResponse
     *
     * @param DepartmentSaveRequest $tmpReq
     * @param DepartmentSaveHeaders $headers
     * @param RuntimeOptions        $runtime
     *
     * @return DepartmentSaveResponse
     */
    public function departmentSaveWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new DepartmentSaveShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->departList) {
            $request->departListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->departList, 'depart_list', 'json');
        }

        $body = [];
        if (null !== $request->departListShrink) {
            @$body['depart_list'] = $request->departListShrink;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripSoCorpToken) {
            @$realHeaders['x-acs-btrip-so-corp-token'] = '' . $headers->xAcsBtripSoCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DepartmentSave',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/department/v1/department',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DepartmentSaveResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 同步外部平台部门信息至商旅内部.
     *
     * @param request - DepartmentSaveRequest
     *
     * @returns DepartmentSaveResponse
     *
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
     * 批量申请电子行程单.
     *
     * @param tmpReq - ElectronicItineraryBatchApplyRequest
     * @param headers - ElectronicItineraryBatchApplyHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ElectronicItineraryBatchApplyResponse
     *
     * @param ElectronicItineraryBatchApplyRequest $tmpReq
     * @param ElectronicItineraryBatchApplyHeaders $headers
     * @param RuntimeOptions                       $runtime
     *
     * @return ElectronicItineraryBatchApplyResponse
     */
    public function electronicItineraryBatchApplyWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ElectronicItineraryBatchApplyShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->applyItineraryList) {
            $request->applyItineraryListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->applyItineraryList, 'apply_itinerary_list', 'json');
        }

        $body = [];
        if (null !== $request->applyItineraryListShrink) {
            @$body['apply_itinerary_list'] = $request->applyItineraryListShrink;
        }

        if (null !== $request->canReprint) {
            @$body['can_reprint'] = $request->canReprint;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripSoCorpToken) {
            @$realHeaders['x-acs-btrip-so-corp-token'] = '' . $headers->xAcsBtripSoCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ElectronicItineraryBatchApply',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/invoice/v1/apply-itinerary-batch-task',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ElectronicItineraryBatchApplyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 批量申请电子行程单.
     *
     * @param request - ElectronicItineraryBatchApplyRequest
     *
     * @returns ElectronicItineraryBatchApplyResponse
     *
     * @param ElectronicItineraryBatchApplyRequest $request
     *
     * @return ElectronicItineraryBatchApplyResponse
     */
    public function electronicItineraryBatchApply($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ElectronicItineraryBatchApplyHeaders([]);

        return $this->electronicItineraryBatchApplyWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取电子行程单申请结果.
     *
     * @param request - ElectronicItineraryGetApplyResultRequest
     * @param headers - ElectronicItineraryGetApplyResultHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ElectronicItineraryGetApplyResultResponse
     *
     * @param ElectronicItineraryGetApplyResultRequest $request
     * @param ElectronicItineraryGetApplyResultHeaders $headers
     * @param RuntimeOptions                           $runtime
     *
     * @return ElectronicItineraryGetApplyResultResponse
     */
    public function electronicItineraryGetApplyResultWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->batchApplyNo) {
            @$query['batch_apply_no'] = $request->batchApplyNo;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripSoCorpToken) {
            @$realHeaders['x-acs-btrip-so-corp-token'] = '' . $headers->xAcsBtripSoCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ElectronicItineraryGetApplyResult',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/invoice/v1/get-itinerary-batch-task',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ElectronicItineraryGetApplyResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取电子行程单申请结果.
     *
     * @param request - ElectronicItineraryGetApplyResultRequest
     *
     * @returns ElectronicItineraryGetApplyResultResponse
     *
     * @param ElectronicItineraryGetApplyResultRequest $request
     *
     * @return ElectronicItineraryGetApplyResultResponse
     */
    public function electronicItineraryGetApplyResult($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ElectronicItineraryGetApplyResultHeaders([]);

        return $this->electronicItineraryGetApplyResultWithOptions($request, $headers, $runtime);
    }

    /**
     * 增加成本中心人员信息.
     *
     * @param tmpReq - EntityAddRequest
     * @param headers - EntityAddHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EntityAddResponse
     *
     * @param EntityAddRequest $tmpReq
     * @param EntityAddHeaders $headers
     * @param RuntimeOptions   $runtime
     *
     * @return EntityAddResponse
     */
    public function entityAddWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new EntityAddShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->entityDOList) {
            $request->entityDOListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->entityDOList, 'entity_d_o_list', 'json');
        }

        $body = [];
        if (null !== $request->entityDOListShrink) {
            @$body['entity_d_o_list'] = $request->entityDOListShrink;
        }

        if (null !== $request->thirdpartId) {
            @$body['thirdpart_id'] = $request->thirdpartId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripSoCorpToken) {
            @$realHeaders['x-acs-btrip-so-corp-token'] = '' . $headers->xAcsBtripSoCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'EntityAdd',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/costcenter/v1/add-entity',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EntityAddResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 增加成本中心人员信息.
     *
     * @param request - EntityAddRequest
     *
     * @returns EntityAddResponse
     *
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
     * 删除成本中心人员信息.
     *
     * @param tmpReq - EntityDeleteRequest
     * @param headers - EntityDeleteHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EntityDeleteResponse
     *
     * @param EntityDeleteRequest $tmpReq
     * @param EntityDeleteHeaders $headers
     * @param RuntimeOptions      $runtime
     *
     * @return EntityDeleteResponse
     */
    public function entityDeleteWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new EntityDeleteShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->entityDOList) {
            $request->entityDOListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->entityDOList, 'entity_d_o_list', 'json');
        }

        $query = [];
        if (null !== $request->delAll) {
            @$query['del_all'] = $request->delAll;
        }

        if (null !== $request->thirdpartId) {
            @$query['thirdpart_id'] = $request->thirdpartId;
        }

        $body = [];
        if (null !== $request->entityDOListShrink) {
            @$body['entity_d_o_list'] = $request->entityDOListShrink;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripSoCorpToken) {
            @$realHeaders['x-acs-btrip-so-corp-token'] = '' . $headers->xAcsBtripSoCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'EntityDelete',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/costcenter/v1/entity/action/delete',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EntityDeleteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除成本中心人员信息.
     *
     * @param request - EntityDeleteRequest
     *
     * @returns EntityDeleteResponse
     *
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
     * 设置成本中心人员信息.
     *
     * @param tmpReq - EntitySetRequest
     * @param headers - EntitySetHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EntitySetResponse
     *
     * @param EntitySetRequest $tmpReq
     * @param EntitySetHeaders $headers
     * @param RuntimeOptions   $runtime
     *
     * @return EntitySetResponse
     */
    public function entitySetWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new EntitySetShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->entityDOList) {
            $request->entityDOListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->entityDOList, 'entity_d_o_list', 'json');
        }

        $body = [];
        if (null !== $request->entityDOListShrink) {
            @$body['entity_d_o_list'] = $request->entityDOListShrink;
        }

        if (null !== $request->thirdpartId) {
            @$body['thirdpart_id'] = $request->thirdpartId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripSoCorpToken) {
            @$realHeaders['x-acs-btrip-so-corp-token'] = '' . $headers->xAcsBtripSoCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'EntitySet',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/costcenter/v1/set-entity',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EntitySetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 设置成本中心人员信息.
     *
     * @param request - EntitySetRequest
     *
     * @returns EntitySetResponse
     *
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
     * 预估价格查询.
     *
     * @param request - EstimatedPriceQueryRequest
     * @param headers - EstimatedPriceQueryHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EstimatedPriceQueryResponse
     *
     * @param EstimatedPriceQueryRequest $request
     * @param EstimatedPriceQueryHeaders $headers
     * @param RuntimeOptions             $runtime
     *
     * @return EstimatedPriceQueryResponse
     */
    public function estimatedPriceQueryWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->arrCity) {
            @$query['arr_city'] = $request->arrCity;
        }

        if (null !== $request->category) {
            @$query['category'] = $request->category;
        }

        if (null !== $request->depCity) {
            @$query['dep_city'] = $request->depCity;
        }

        if (null !== $request->endTime) {
            @$query['end_time'] = $request->endTime;
        }

        if (null !== $request->itineraryId) {
            @$query['itinerary_id'] = $request->itineraryId;
        }

        if (null !== $request->startTime) {
            @$query['start_time'] = $request->startTime;
        }

        if (null !== $request->subCorpId) {
            @$query['sub_corp_id'] = $request->subCorpId;
        }

        if (null !== $request->userId) {
            @$query['user_id'] = $request->userId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripSoCorpToken) {
            @$realHeaders['x-acs-btrip-so-corp-token'] = '' . $headers->xAcsBtripSoCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'EstimatedPriceQuery',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/costcenter/v1/estimated-price',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return EstimatedPriceQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 预估价格查询.
     *
     * @param request - EstimatedPriceQueryRequest
     *
     * @returns EstimatedPriceQueryResponse
     *
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
     * 超标审批结果同步.
     *
     * @param request - ExceedApplySyncRequest
     * @param headers - ExceedApplySyncHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExceedApplySyncResponse
     *
     * @param ExceedApplySyncRequest $request
     * @param ExceedApplySyncHeaders $headers
     * @param RuntimeOptions         $runtime
     *
     * @return ExceedApplySyncResponse
     */
    public function exceedApplySyncWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applyId) {
            @$query['apply_id'] = $request->applyId;
        }

        if (null !== $request->bizCategory) {
            @$query['biz_category'] = $request->bizCategory;
        }

        if (null !== $request->remark) {
            @$query['remark'] = $request->remark;
        }

        if (null !== $request->status) {
            @$query['status'] = $request->status;
        }

        if (null !== $request->thirdpartyFlowId) {
            @$query['thirdparty_flow_id'] = $request->thirdpartyFlowId;
        }

        if (null !== $request->userId) {
            @$query['user_id'] = $request->userId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripSoCorpToken) {
            @$realHeaders['x-acs-btrip-so-corp-token'] = '' . $headers->xAcsBtripSoCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ExceedApplySync',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/apply/v1/syn-exceed',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ExceedApplySyncResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 超标审批结果同步.
     *
     * @param request - ExceedApplySyncRequest
     *
     * @returns ExceedApplySyncResponse
     *
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
     * 添加外部出行人与证件信息.
     *
     * @param tmpReq - ExternalUserAddRequest
     * @param headers - ExternalUserAddHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExternalUserAddResponse
     *
     * @param ExternalUserAddRequest $tmpReq
     * @param ExternalUserAddHeaders $headers
     * @param RuntimeOptions         $runtime
     *
     * @return ExternalUserAddResponse
     */
    public function externalUserAddWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ExternalUserAddShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->certRequestList) {
            $request->certRequestListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->certRequestList, 'cert_request_list', 'json');
        }

        $body = [];
        if (null !== $request->birthday) {
            @$body['birthday'] = $request->birthday;
        }

        if (null !== $request->certRequestListShrink) {
            @$body['cert_request_list'] = $request->certRequestListShrink;
        }

        if (null !== $request->email) {
            @$body['email'] = $request->email;
        }

        if (null !== $request->externalUserId) {
            @$body['external_user_id'] = $request->externalUserId;
        }

        if (null !== $request->phone) {
            @$body['phone'] = $request->phone;
        }

        if (null !== $request->realName) {
            @$body['real_name'] = $request->realName;
        }

        if (null !== $request->realNameEn) {
            @$body['real_name_en'] = $request->realNameEn;
        }

        if (null !== $request->userType) {
            @$body['user_type'] = $request->userType;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripCorpToken) {
            @$realHeaders['x-acs-btrip-corp-token'] = '' . $headers->xAcsBtripCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ExternalUserAdd',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/user/v1/externalUsers',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ExternalUserAddResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 添加外部出行人与证件信息.
     *
     * @param request - ExternalUserAddRequest
     *
     * @returns ExternalUserAddResponse
     *
     * @param ExternalUserAddRequest $request
     *
     * @return ExternalUserAddResponse
     */
    public function externalUserAdd($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ExternalUserAddHeaders([]);

        return $this->externalUserAddWithOptions($request, $headers, $runtime);
    }

    /**
     * 删除外部出行人.
     *
     * @param headers - ExternalUserDeleteHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExternalUserDeleteResponse
     *
     * @param string                    $externalUserId
     * @param ExternalUserDeleteHeaders $headers
     * @param RuntimeOptions            $runtime
     *
     * @return ExternalUserDeleteResponse
     */
    public function externalUserDeleteWithOptions($externalUserId, $headers, $runtime)
    {
        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripCorpToken) {
            @$realHeaders['x-acs-btrip-corp-token'] = '' . $headers->xAcsBtripCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
        ]);
        $params = new Params([
            'action' => 'ExternalUserDelete',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/user/v1/externalUsers/' . Url::percentEncode($externalUserId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ExternalUserDeleteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除外部出行人.
     *
     * @returns ExternalUserDeleteResponse
     *
     * @param string $externalUserId
     *
     * @return ExternalUserDeleteResponse
     */
    public function externalUserDelete($externalUserId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ExternalUserDeleteHeaders([]);

        return $this->externalUserDeleteWithOptions($externalUserId, $headers, $runtime);
    }

    /**
     * 查询外部出行人.
     *
     * @param headers - ExternalUserQueryHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExternalUserQueryResponse
     *
     * @param string                   $externalUserId
     * @param ExternalUserQueryHeaders $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ExternalUserQueryResponse
     */
    public function externalUserQueryWithOptions($externalUserId, $headers, $runtime)
    {
        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripCorpToken) {
            @$realHeaders['x-acs-btrip-corp-token'] = '' . $headers->xAcsBtripCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
        ]);
        $params = new Params([
            'action' => 'ExternalUserQuery',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/user/v1/externalUsers/' . Url::percentEncode($externalUserId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ExternalUserQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询外部出行人.
     *
     * @returns ExternalUserQueryResponse
     *
     * @param string $externalUserId
     *
     * @return ExternalUserQueryResponse
     */
    public function externalUserQuery($externalUserId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ExternalUserQueryHeaders([]);

        return $this->externalUserQueryWithOptions($externalUserId, $headers, $runtime);
    }

    /**
     * 修改外部出行人与证件信息.
     *
     * @param tmpReq - ExternalUserUpdateRequest
     * @param headers - ExternalUserUpdateHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExternalUserUpdateResponse
     *
     * @param string                    $externalUserId
     * @param ExternalUserUpdateRequest $tmpReq
     * @param ExternalUserUpdateHeaders $headers
     * @param RuntimeOptions            $runtime
     *
     * @return ExternalUserUpdateResponse
     */
    public function externalUserUpdateWithOptions($externalUserId, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ExternalUserUpdateShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->certRequestList) {
            $request->certRequestListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->certRequestList, 'cert_request_list', 'json');
        }

        $body = [];
        if (null !== $request->birthday) {
            @$body['birthday'] = $request->birthday;
        }

        if (null !== $request->certRequestListShrink) {
            @$body['cert_request_list'] = $request->certRequestListShrink;
        }

        if (null !== $request->email) {
            @$body['email'] = $request->email;
        }

        if (null !== $request->phone) {
            @$body['phone'] = $request->phone;
        }

        if (null !== $request->realName) {
            @$body['real_name'] = $request->realName;
        }

        if (null !== $request->realNameEn) {
            @$body['real_name_en'] = $request->realNameEn;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripCorpToken) {
            @$realHeaders['x-acs-btrip-corp-token'] = '' . $headers->xAcsBtripCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ExternalUserUpdate',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/user/v1/externalUsers/' . Url::percentEncode($externalUserId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ExternalUserUpdateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改外部出行人与证件信息.
     *
     * @param request - ExternalUserUpdateRequest
     *
     * @returns ExternalUserUpdateResponse
     *
     * @param string                    $externalUserId
     * @param ExternalUserUpdateRequest $request
     *
     * @return ExternalUserUpdateResponse
     */
    public function externalUserUpdate($externalUserId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ExternalUserUpdateHeaders([]);

        return $this->externalUserUpdateWithOptions($externalUserId, $request, $headers, $runtime);
    }

    /**
     * 查询机票记账数据.
     *
     * @param request - FlightBillSettlementQueryRequest
     * @param headers - FlightBillSettlementQueryHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns FlightBillSettlementQueryResponse
     *
     * @param FlightBillSettlementQueryRequest $request
     * @param FlightBillSettlementQueryHeaders $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return FlightBillSettlementQueryResponse
     */
    public function flightBillSettlementQueryWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->billBatch) {
            @$query['bill_batch'] = $request->billBatch;
        }

        if (null !== $request->orderId) {
            @$query['order_id'] = $request->orderId;
        }

        if (null !== $request->pageNo) {
            @$query['page_no'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['page_size'] = $request->pageSize;
        }

        if (null !== $request->periodEnd) {
            @$query['period_end'] = $request->periodEnd;
        }

        if (null !== $request->periodStart) {
            @$query['period_start'] = $request->periodStart;
        }

        if (null !== $request->scrollId) {
            @$query['scroll_id'] = $request->scrollId;
        }

        if (null !== $request->scrollMod) {
            @$query['scroll_mod'] = $request->scrollMod;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripSoCorpToken) {
            @$realHeaders['x-acs-btrip-so-corp-token'] = '' . $headers->xAcsBtripSoCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'FlightBillSettlementQuery',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/flight/v1/bill-settlement',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return FlightBillSettlementQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询机票记账数据.
     *
     * @param request - FlightBillSettlementQueryRequest
     *
     * @returns FlightBillSettlementQueryResponse
     *
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
     * 航班订单取消.
     *
     * @param request - FlightCancelOrderRequest
     * @param headers - FlightCancelOrderHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns FlightCancelOrderResponse
     *
     * @param FlightCancelOrderRequest $request
     * @param FlightCancelOrderHeaders $headers
     * @param RuntimeOptions           $runtime
     *
     * @return FlightCancelOrderResponse
     */
    public function flightCancelOrderWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->disOrderId) {
            @$query['dis_order_id'] = $request->disOrderId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripCorpToken) {
            @$realHeaders['x-acs-btrip-corp-token'] = '' . $headers->xAcsBtripCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'FlightCancelOrder',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/dtb-flight/v1/order/action/cancel',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return FlightCancelOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 航班订单取消.
     *
     * @param request - FlightCancelOrderRequest
     *
     * @returns FlightCancelOrderResponse
     *
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
     * 机票订单取消.
     *
     * @param request - FlightCancelOrderV2Request
     * @param headers - FlightCancelOrderV2Headers
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns FlightCancelOrderV2Response
     *
     * @param FlightCancelOrderV2Request $request
     * @param FlightCancelOrderV2Headers $headers
     * @param RuntimeOptions             $runtime
     *
     * @return FlightCancelOrderV2Response
     */
    public function flightCancelOrderV2WithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->isvName) {
            @$query['isv_name'] = $request->isvName;
        }

        if (null !== $request->orderId) {
            @$query['order_id'] = $request->orderId;
        }

        if (null !== $request->outOrderId) {
            @$query['out_order_id'] = $request->outOrderId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripCorpToken) {
            @$realHeaders['x-acs-btrip-corp-token'] = '' . $headers->xAcsBtripCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'FlightCancelOrderV2',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/dtb-flight/v2/order/action/cancel',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return FlightCancelOrderV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 机票订单取消.
     *
     * @param request - FlightCancelOrderV2Request
     *
     * @returns FlightCancelOrderV2Response
     *
     * @param FlightCancelOrderV2Request $request
     *
     * @return FlightCancelOrderV2Response
     */
    public function flightCancelOrderV2($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new FlightCancelOrderV2Headers([]);

        return $this->flightCancelOrderV2WithOptions($request, $headers, $runtime);
    }

    /**
     * 航班订单创建.
     *
     * @param tmpReq - FlightCreateOrderRequest
     * @param headers - FlightCreateOrderHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns FlightCreateOrderResponse
     *
     * @param FlightCreateOrderRequest $tmpReq
     * @param FlightCreateOrderHeaders $headers
     * @param RuntimeOptions           $runtime
     *
     * @return FlightCreateOrderResponse
     */
    public function flightCreateOrderWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new FlightCreateOrderShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->contactInfo) {
            $request->contactInfoShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->contactInfo, 'contact_info', 'json');
        }

        if (null !== $tmpReq->orderAttr) {
            $request->orderAttrShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->orderAttr, 'order_attr', 'json');
        }

        if (null !== $tmpReq->travelerInfoList) {
            $request->travelerInfoListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->travelerInfoList, 'traveler_info_list', 'json');
        }

        $body = [];
        if (null !== $request->arrAirportCode) {
            @$body['arr_airport_code'] = $request->arrAirportCode;
        }

        if (null !== $request->arrCityCode) {
            @$body['arr_city_code'] = $request->arrCityCode;
        }

        if (null !== $request->autoPay) {
            @$body['auto_pay'] = $request->autoPay;
        }

        if (null !== $request->buyerName) {
            @$body['buyer_name'] = $request->buyerName;
        }

        if (null !== $request->buyerUniqueKey) {
            @$body['buyer_unique_key'] = $request->buyerUniqueKey;
        }

        if (null !== $request->contactInfoShrink) {
            @$body['contact_info'] = $request->contactInfoShrink;
        }

        if (null !== $request->depAirportCode) {
            @$body['dep_airport_code'] = $request->depAirportCode;
        }

        if (null !== $request->depCityCode) {
            @$body['dep_city_code'] = $request->depCityCode;
        }

        if (null !== $request->depDate) {
            @$body['dep_date'] = $request->depDate;
        }

        if (null !== $request->disOrderId) {
            @$body['dis_order_id'] = $request->disOrderId;
        }

        if (null !== $request->orderAttrShrink) {
            @$body['order_attr'] = $request->orderAttrShrink;
        }

        if (null !== $request->orderParams) {
            @$body['order_params'] = $request->orderParams;
        }

        if (null !== $request->otaItemId) {
            @$body['ota_item_id'] = $request->otaItemId;
        }

        if (null !== $request->price) {
            @$body['price'] = $request->price;
        }

        if (null !== $request->receiptAddress) {
            @$body['receipt_address'] = $request->receiptAddress;
        }

        if (null !== $request->receiptTarget) {
            @$body['receipt_target'] = $request->receiptTarget;
        }

        if (null !== $request->receiptTitle) {
            @$body['receipt_title'] = $request->receiptTitle;
        }

        if (null !== $request->travelerInfoListShrink) {
            @$body['traveler_info_list'] = $request->travelerInfoListShrink;
        }

        if (null !== $request->tripType) {
            @$body['trip_type'] = $request->tripType;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripCorpToken) {
            @$realHeaders['x-acs-btrip-corp-token'] = '' . $headers->xAcsBtripCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'FlightCreateOrder',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/dtb-flight/v1/order/action/create',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return FlightCreateOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 航班订单创建.
     *
     * @param request - FlightCreateOrderRequest
     *
     * @returns FlightCreateOrderResponse
     *
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
     * 机票订单创建.
     *
     * @param tmpReq - FlightCreateOrderV2Request
     * @param headers - FlightCreateOrderV2Headers
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns FlightCreateOrderV2Response
     *
     * @param FlightCreateOrderV2Request $tmpReq
     * @param FlightCreateOrderV2Headers $headers
     * @param RuntimeOptions             $runtime
     *
     * @return FlightCreateOrderV2Response
     */
    public function flightCreateOrderV2WithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new FlightCreateOrderV2ShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->contactInfo) {
            $request->contactInfoShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->contactInfo, 'contact_info', 'json');
        }

        if (null !== $tmpReq->travelers) {
            $request->travelersShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->travelers, 'travelers', 'json');
        }

        $body = [];
        if (null !== $request->asyncCreateOrderKey) {
            @$body['async_create_order_key'] = $request->asyncCreateOrderKey;
        }

        if (null !== $request->asyncCreateOrderMode) {
            @$body['async_create_order_mode'] = $request->asyncCreateOrderMode;
        }

        if (null !== $request->btripUserId) {
            @$body['btrip_user_id'] = $request->btripUserId;
        }

        if (null !== $request->buyerName) {
            @$body['buyer_name'] = $request->buyerName;
        }

        if (null !== $request->contactInfoShrink) {
            @$body['contact_info'] = $request->contactInfoShrink;
        }

        if (null !== $request->isvName) {
            @$body['isv_name'] = $request->isvName;
        }

        if (null !== $request->otaItemId) {
            @$body['ota_item_id'] = $request->otaItemId;
        }

        if (null !== $request->outOrderId) {
            @$body['out_order_id'] = $request->outOrderId;
        }

        if (null !== $request->totalPriceCent) {
            @$body['total_price_cent'] = $request->totalPriceCent;
        }

        if (null !== $request->travelersShrink) {
            @$body['travelers'] = $request->travelersShrink;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripCorpToken) {
            @$realHeaders['x-acs-btrip-corp-token'] = '' . $headers->xAcsBtripCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'FlightCreateOrderV2',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/dtb-flight/v2/order/action/create',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return FlightCreateOrderV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 机票订单创建.
     *
     * @param request - FlightCreateOrderV2Request
     *
     * @returns FlightCreateOrderV2Response
     *
     * @param FlightCreateOrderV2Request $request
     *
     * @return FlightCreateOrderV2Response
     */
    public function flightCreateOrderV2($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new FlightCreateOrderV2Headers([]);

        return $this->flightCreateOrderV2WithOptions($request, $headers, $runtime);
    }

    /**
     * 查询飞机超标审批详情.
     *
     * @param request - FlightExceedApplyQueryRequest
     * @param headers - FlightExceedApplyQueryHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns FlightExceedApplyQueryResponse
     *
     * @param FlightExceedApplyQueryRequest $request
     * @param FlightExceedApplyQueryHeaders $headers
     * @param RuntimeOptions                $runtime
     *
     * @return FlightExceedApplyQueryResponse
     */
    public function flightExceedApplyQueryWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applyId) {
            @$query['apply_id'] = $request->applyId;
        }

        if (null !== $request->businessInstanceId) {
            @$query['business_instance_id'] = $request->businessInstanceId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripSoCorpToken) {
            @$realHeaders['x-acs-btrip-so-corp-token'] = '' . $headers->xAcsBtripSoCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'FlightExceedApplyQuery',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/apply/v1/flight-exceed',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return FlightExceedApplyQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询飞机超标审批详情.
     *
     * @param request - FlightExceedApplyQueryRequest
     *
     * @returns FlightExceedApplyQueryResponse
     *
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
     * 查询机票行程单扫描件.
     *
     * @param request - FlightItineraryScanQueryRequest
     * @param headers - FlightItineraryScanQueryHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns FlightItineraryScanQueryResponse
     *
     * @param FlightItineraryScanQueryRequest $request
     * @param FlightItineraryScanQueryHeaders $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return FlightItineraryScanQueryResponse
     */
    public function flightItineraryScanQueryWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->billDate) {
            @$query['bill_date'] = $request->billDate;
        }

        if (null !== $request->billId) {
            @$query['bill_id'] = $request->billId;
        }

        if (null !== $request->invoiceSubTaskId) {
            @$query['invoice_sub_task_id'] = $request->invoiceSubTaskId;
        }

        if (null !== $request->itineraryNum) {
            @$query['itinerary_num'] = $request->itineraryNum;
        }

        if (null !== $request->pageNo) {
            @$query['page_no'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['page_size'] = $request->pageSize;
        }

        if (null !== $request->ticketNo) {
            @$query['ticket_no'] = $request->ticketNo;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripSoCorpToken) {
            @$realHeaders['x-acs-btrip-so-corp-token'] = '' . $headers->xAcsBtripSoCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'FlightItineraryScanQuery',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/scan/v1/flight-itinerary',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return FlightItineraryScanQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询机票行程单扫描件.
     *
     * @param request - FlightItineraryScanQueryRequest
     *
     * @returns FlightItineraryScanQueryResponse
     *
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
     * 航班列表搜索.
     *
     * @param request - FlightListingSearchRequest
     * @param headers - FlightListingSearchHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns FlightListingSearchResponse
     *
     * @param FlightListingSearchRequest $request
     * @param FlightListingSearchHeaders $headers
     * @param RuntimeOptions             $runtime
     *
     * @return FlightListingSearchResponse
     */
    public function flightListingSearchWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->airlineCode) {
            @$query['airline_code'] = $request->airlineCode;
        }

        if (null !== $request->arrCityCode) {
            @$query['arr_city_code'] = $request->arrCityCode;
        }

        if (null !== $request->cabinClass) {
            @$query['cabin_class'] = $request->cabinClass;
        }

        if (null !== $request->depCityCode) {
            @$query['dep_city_code'] = $request->depCityCode;
        }

        if (null !== $request->depDate) {
            @$query['dep_date'] = $request->depDate;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripCorpToken) {
            @$realHeaders['x-acs-btrip-corp-token'] = '' . $headers->xAcsBtripCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'FlightListingSearch',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/dtb-flight/v1/flight/action/listing-search',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return FlightListingSearchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 航班列表搜索.
     *
     * @param request - FlightListingSearchRequest
     *
     * @returns FlightListingSearchResponse
     *
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
     * 航班列表搜索.
     *
     * @param tmpReq - FlightListingSearchV2Request
     * @param headers - FlightListingSearchV2Headers
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns FlightListingSearchV2Response
     *
     * @param FlightListingSearchV2Request $tmpReq
     * @param FlightListingSearchV2Headers $headers
     * @param RuntimeOptions               $runtime
     *
     * @return FlightListingSearchV2Response
     */
    public function flightListingSearchV2WithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new FlightListingSearchV2ShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->cabinTypeList) {
            $request->cabinTypeListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->cabinTypeList, 'cabin_type_list', 'json');
        }

        if (null !== $tmpReq->searchJourneys) {
            $request->searchJourneysShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->searchJourneys, 'search_journeys', 'json');
        }

        $query = [];
        if (null !== $request->airlineCode) {
            @$query['airline_code'] = $request->airlineCode;
        }

        if (null !== $request->cabinTypeListShrink) {
            @$query['cabin_type_list'] = $request->cabinTypeListShrink;
        }

        if (null !== $request->directOnly) {
            @$query['direct_only'] = $request->directOnly;
        }

        if (null !== $request->isvName) {
            @$query['isv_name'] = $request->isvName;
        }

        if (null !== $request->needMultiClassPrice) {
            @$query['need_multi_class_price'] = $request->needMultiClassPrice;
        }

        if (null !== $request->needQueryServiceFee) {
            @$query['need_query_service_fee'] = $request->needQueryServiceFee;
        }

        if (null !== $request->needShareFlight) {
            @$query['need_share_flight'] = $request->needShareFlight;
        }

        if (null !== $request->needYCBestPrice) {
            @$query['need_y_c_best_price'] = $request->needYCBestPrice;
        }

        if (null !== $request->searchJourneysShrink) {
            @$query['search_journeys'] = $request->searchJourneysShrink;
        }

        if (null !== $request->searchMode) {
            @$query['search_mode'] = $request->searchMode;
        }

        if (null !== $request->tripType) {
            @$query['trip_type'] = $request->tripType;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripCorpToken) {
            @$realHeaders['x-acs-btrip-corp-token'] = '' . $headers->xAcsBtripCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'FlightListingSearchV2',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/dtb-flight/v2/flight/action/listing-search',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return FlightListingSearchV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 航班列表搜索.
     *
     * @param request - FlightListingSearchV2Request
     *
     * @returns FlightListingSearchV2Response
     *
     * @param FlightListingSearchV2Request $request
     *
     * @return FlightListingSearchV2Response
     */
    public function flightListingSearchV2($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new FlightListingSearchV2Headers([]);

        return $this->flightListingSearchV2WithOptions($request, $headers, $runtime);
    }

    /**
     * 机票改签申请.
     *
     * @param tmpReq - FlightModifyApplyV2Request
     * @param headers - FlightModifyApplyV2Headers
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns FlightModifyApplyV2Response
     *
     * @param FlightModifyApplyV2Request $tmpReq
     * @param FlightModifyApplyV2Headers $headers
     * @param RuntimeOptions             $runtime
     *
     * @return FlightModifyApplyV2Response
     */
    public function flightModifyApplyV2WithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new FlightModifyApplyV2ShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->passengerSegmentRelations) {
            $request->passengerSegmentRelationsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->passengerSegmentRelations, 'passenger_segment_relations', 'json');
        }

        $body = [];
        if (null !== $request->cacheKey) {
            @$body['cache_key'] = $request->cacheKey;
        }

        if (null !== $request->contactPhone) {
            @$body['contact_phone'] = $request->contactPhone;
        }

        if (null !== $request->isvName) {
            @$body['isv_name'] = $request->isvName;
        }

        if (null !== $request->itemId) {
            @$body['item_id'] = $request->itemId;
        }

        if (null !== $request->orderId) {
            @$body['order_id'] = $request->orderId;
        }

        if (null !== $request->outOrderId) {
            @$body['out_order_id'] = $request->outOrderId;
        }

        if (null !== $request->outSubOrderId) {
            @$body['out_sub_order_id'] = $request->outSubOrderId;
        }

        if (null !== $request->passengerSegmentRelationsShrink) {
            @$body['passenger_segment_relations'] = $request->passengerSegmentRelationsShrink;
        }

        if (null !== $request->reason) {
            @$body['reason'] = $request->reason;
        }

        if (null !== $request->sessionId) {
            @$body['session_id'] = $request->sessionId;
        }

        if (null !== $request->voluntary) {
            @$body['voluntary'] = $request->voluntary;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripCorpToken) {
            @$realHeaders['x-acs-btrip-corp-token'] = '' . $headers->xAcsBtripCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'FlightModifyApplyV2',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/dtb-flight/v2/modify/action/apply',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return FlightModifyApplyV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 机票改签申请.
     *
     * @param request - FlightModifyApplyV2Request
     *
     * @returns FlightModifyApplyV2Response
     *
     * @param FlightModifyApplyV2Request $request
     *
     * @return FlightModifyApplyV2Response
     */
    public function flightModifyApplyV2($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new FlightModifyApplyV2Headers([]);

        return $this->flightModifyApplyV2WithOptions($request, $headers, $runtime);
    }

    /**
     * 机票改签取消.
     *
     * @param request - FlightModifyCancelV2Request
     * @param headers - FlightModifyCancelV2Headers
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns FlightModifyCancelV2Response
     *
     * @param FlightModifyCancelV2Request $request
     * @param FlightModifyCancelV2Headers $headers
     * @param RuntimeOptions              $runtime
     *
     * @return FlightModifyCancelV2Response
     */
    public function flightModifyCancelV2WithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->isvName) {
            @$query['isv_name'] = $request->isvName;
        }

        if (null !== $request->orderId) {
            @$query['order_id'] = $request->orderId;
        }

        if (null !== $request->outOrderId) {
            @$query['out_order_id'] = $request->outOrderId;
        }

        if (null !== $request->outSubOrderId) {
            @$query['out_sub_order_id'] = $request->outSubOrderId;
        }

        if (null !== $request->subOrderId) {
            @$query['sub_order_id'] = $request->subOrderId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripCorpToken) {
            @$realHeaders['x-acs-btrip-corp-token'] = '' . $headers->xAcsBtripCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'FlightModifyCancelV2',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/dtb-flight/v2/modify/action/cancel',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return FlightModifyCancelV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 机票改签取消.
     *
     * @param request - FlightModifyCancelV2Request
     *
     * @returns FlightModifyCancelV2Response
     *
     * @param FlightModifyCancelV2Request $request
     *
     * @return FlightModifyCancelV2Response
     */
    public function flightModifyCancelV2($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new FlightModifyCancelV2Headers([]);

        return $this->flightModifyCancelV2WithOptions($request, $headers, $runtime);
    }

    /**
     * 机票改签列表搜索.
     *
     * @param tmpReq - FlightModifyListingSearchV2Request
     * @param headers - FlightModifyListingSearchV2Headers
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns FlightModifyListingSearchV2Response
     *
     * @param FlightModifyListingSearchV2Request $tmpReq
     * @param FlightModifyListingSearchV2Headers $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return FlightModifyListingSearchV2Response
     */
    public function flightModifyListingSearchV2WithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new FlightModifyListingSearchV2ShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->cabinClass) {
            $request->cabinClassShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->cabinClass, 'cabin_class', 'json');
        }

        if (null !== $tmpReq->depDate) {
            $request->depDateShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->depDate, 'dep_date', 'json');
        }

        if (null !== $tmpReq->passengerSegmentRelations) {
            $request->passengerSegmentRelationsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->passengerSegmentRelations, 'passenger_segment_relations', 'json');
        }

        if (null !== $tmpReq->selectedSegments) {
            $request->selectedSegmentsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->selectedSegments, 'selected_segments', 'json');
        }

        $query = [];
        if (null !== $request->cabinClassShrink) {
            @$query['cabin_class'] = $request->cabinClassShrink;
        }

        if (null !== $request->depDateShrink) {
            @$query['dep_date'] = $request->depDateShrink;
        }

        if (null !== $request->interfaceCallerIsSupportRetry) {
            @$query['interface_caller_is_support_retry'] = $request->interfaceCallerIsSupportRetry;
        }

        if (null !== $request->isvName) {
            @$query['isv_name'] = $request->isvName;
        }

        if (null !== $request->orderId) {
            @$query['order_id'] = $request->orderId;
        }

        if (null !== $request->outOrderId) {
            @$query['out_order_id'] = $request->outOrderId;
        }

        if (null !== $request->passengerSegmentRelationsShrink) {
            @$query['passenger_segment_relations'] = $request->passengerSegmentRelationsShrink;
        }

        if (null !== $request->searchMode) {
            @$query['search_mode'] = $request->searchMode;
        }

        if (null !== $request->searchRetryToken) {
            @$query['search_retry_token'] = $request->searchRetryToken;
        }

        if (null !== $request->selectedSegmentsShrink) {
            @$query['selected_segments'] = $request->selectedSegmentsShrink;
        }

        if (null !== $request->sessionId) {
            @$query['session_id'] = $request->sessionId;
        }

        if (null !== $request->voluntary) {
            @$query['voluntary'] = $request->voluntary;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripCorpToken) {
            @$realHeaders['x-acs-btrip-corp-token'] = '' . $headers->xAcsBtripCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'FlightModifyListingSearchV2',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/dtb-flight/v2/modify/action/listing-search',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return FlightModifyListingSearchV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 机票改签列表搜索.
     *
     * @param request - FlightModifyListingSearchV2Request
     *
     * @returns FlightModifyListingSearchV2Response
     *
     * @param FlightModifyListingSearchV2Request $request
     *
     * @return FlightModifyListingSearchV2Response
     */
    public function flightModifyListingSearchV2($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new FlightModifyListingSearchV2Headers([]);

        return $this->flightModifyListingSearchV2WithOptions($request, $headers, $runtime);
    }

    /**
     * 机票改签详情.
     *
     * @param request - FlightModifyOrderDetailV2Request
     * @param headers - FlightModifyOrderDetailV2Headers
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns FlightModifyOrderDetailV2Response
     *
     * @param FlightModifyOrderDetailV2Request $request
     * @param FlightModifyOrderDetailV2Headers $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return FlightModifyOrderDetailV2Response
     */
    public function flightModifyOrderDetailV2WithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->isvName) {
            @$query['isv_name'] = $request->isvName;
        }

        if (null !== $request->modifyApplyId) {
            @$query['modify_apply_id'] = $request->modifyApplyId;
        }

        if (null !== $request->needQueryServiceFee) {
            @$query['need_query_service_fee'] = $request->needQueryServiceFee;
        }

        if (null !== $request->orderId) {
            @$query['order_id'] = $request->orderId;
        }

        if (null !== $request->outModifyApplyId) {
            @$query['out_modify_apply_id'] = $request->outModifyApplyId;
        }

        if (null !== $request->outOrderId) {
            @$query['out_order_id'] = $request->outOrderId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripCorpToken) {
            @$realHeaders['x-acs-btrip-corp-token'] = '' . $headers->xAcsBtripCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'FlightModifyOrderDetailV2',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/dtb-flight/v2/modify/action/detail',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return FlightModifyOrderDetailV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 机票改签详情.
     *
     * @param request - FlightModifyOrderDetailV2Request
     *
     * @returns FlightModifyOrderDetailV2Response
     *
     * @param FlightModifyOrderDetailV2Request $request
     *
     * @return FlightModifyOrderDetailV2Response
     */
    public function flightModifyOrderDetailV2($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new FlightModifyOrderDetailV2Headers([]);

        return $this->flightModifyOrderDetailV2WithOptions($request, $headers, $runtime);
    }

    /**
     * 机票改签报价搜索.
     *
     * @param tmpReq - FlightModifyOtaSearchV2Request
     * @param headers - FlightModifyOtaSearchV2Headers
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns FlightModifyOtaSearchV2Response
     *
     * @param FlightModifyOtaSearchV2Request $tmpReq
     * @param FlightModifyOtaSearchV2Headers $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return FlightModifyOtaSearchV2Response
     */
    public function flightModifyOtaSearchV2WithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new FlightModifyOtaSearchV2ShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->cabinClass) {
            $request->cabinClassShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->cabinClass, 'cabin_class', 'json');
        }

        if (null !== $tmpReq->depDate) {
            $request->depDateShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->depDate, 'dep_date', 'json');
        }

        if (null !== $tmpReq->passengerSegmentRelations) {
            $request->passengerSegmentRelationsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->passengerSegmentRelations, 'passenger_segment_relations', 'json');
        }

        if (null !== $tmpReq->selectedSegments) {
            $request->selectedSegmentsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->selectedSegments, 'selected_segments', 'json');
        }

        $query = [];
        if (null !== $request->cabinClassShrink) {
            @$query['cabin_class'] = $request->cabinClassShrink;
        }

        if (null !== $request->depDateShrink) {
            @$query['dep_date'] = $request->depDateShrink;
        }

        if (null !== $request->isvName) {
            @$query['isv_name'] = $request->isvName;
        }

        if (null !== $request->orderId) {
            @$query['order_id'] = $request->orderId;
        }

        if (null !== $request->outOrderId) {
            @$query['out_order_id'] = $request->outOrderId;
        }

        if (null !== $request->passengerSegmentRelationsShrink) {
            @$query['passenger_segment_relations'] = $request->passengerSegmentRelationsShrink;
        }

        if (null !== $request->selectedSegmentsShrink) {
            @$query['selected_segments'] = $request->selectedSegmentsShrink;
        }

        if (null !== $request->sessionId) {
            @$query['session_id'] = $request->sessionId;
        }

        if (null !== $request->voluntary) {
            @$query['voluntary'] = $request->voluntary;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripCorpToken) {
            @$realHeaders['x-acs-btrip-corp-token'] = '' . $headers->xAcsBtripCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'FlightModifyOtaSearchV2',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/dtb-flight/v2/modify/action/ota-search',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return FlightModifyOtaSearchV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 机票改签报价搜索.
     *
     * @param request - FlightModifyOtaSearchV2Request
     *
     * @returns FlightModifyOtaSearchV2Response
     *
     * @param FlightModifyOtaSearchV2Request $request
     *
     * @return FlightModifyOtaSearchV2Response
     */
    public function flightModifyOtaSearchV2($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new FlightModifyOtaSearchV2Headers([]);

        return $this->flightModifyOtaSearchV2WithOptions($request, $headers, $runtime);
    }

    /**
     * 机票改签支付.
     *
     * @param tmpReq - FlightModifyPayV2Request
     * @param headers - FlightModifyPayV2Headers
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns FlightModifyPayV2Response
     *
     * @param FlightModifyPayV2Request $tmpReq
     * @param FlightModifyPayV2Headers $headers
     * @param RuntimeOptions           $runtime
     *
     * @return FlightModifyPayV2Response
     */
    public function flightModifyPayV2WithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new FlightModifyPayV2ShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->extParams) {
            $request->extParamsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->extParams, 'ext_params', 'json');
        }

        $body = [];
        if (null !== $request->extParamsShrink) {
            @$body['ext_params'] = $request->extParamsShrink;
        }

        if (null !== $request->isvName) {
            @$body['isv_name'] = $request->isvName;
        }

        if (null !== $request->modifyPayAmount) {
            @$body['modify_pay_amount'] = $request->modifyPayAmount;
        }

        if (null !== $request->orderId) {
            @$body['order_id'] = $request->orderId;
        }

        if (null !== $request->outOrderId) {
            @$body['out_order_id'] = $request->outOrderId;
        }

        if (null !== $request->outSubOrderId) {
            @$body['out_sub_order_id'] = $request->outSubOrderId;
        }

        if (null !== $request->subOrderId) {
            @$body['sub_order_id'] = $request->subOrderId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripCorpToken) {
            @$realHeaders['x-acs-btrip-corp-token'] = '' . $headers->xAcsBtripCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'FlightModifyPayV2',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/dtb-flight/v2/modify/action/pay',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return FlightModifyPayV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 机票改签支付.
     *
     * @param request - FlightModifyPayV2Request
     *
     * @returns FlightModifyPayV2Response
     *
     * @param FlightModifyPayV2Request $request
     *
     * @return FlightModifyPayV2Response
     */
    public function flightModifyPayV2($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new FlightModifyPayV2Headers([]);

        return $this->flightModifyPayV2WithOptions($request, $headers, $runtime);
    }

    /**
     * 航班订单明细信息.
     *
     * @param request - FlightOrderDetailInfoRequest
     * @param headers - FlightOrderDetailInfoHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns FlightOrderDetailInfoResponse
     *
     * @param FlightOrderDetailInfoRequest $request
     * @param FlightOrderDetailInfoHeaders $headers
     * @param RuntimeOptions               $runtime
     *
     * @return FlightOrderDetailInfoResponse
     */
    public function flightOrderDetailInfoWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->disOrderId) {
            @$query['dis_order_id'] = $request->disOrderId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripCorpToken) {
            @$realHeaders['x-acs-btrip-corp-token'] = '' . $headers->xAcsBtripCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'FlightOrderDetailInfo',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/dtb-flight/v1/order/action/detail',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return FlightOrderDetailInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 航班订单明细信息.
     *
     * @param request - FlightOrderDetailInfoRequest
     *
     * @returns FlightOrderDetailInfoResponse
     *
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
     * 机票订单详情.
     *
     * @param request - FlightOrderDetailV2Request
     * @param headers - FlightOrderDetailV2Headers
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns FlightOrderDetailV2Response
     *
     * @param FlightOrderDetailV2Request $request
     * @param FlightOrderDetailV2Headers $headers
     * @param RuntimeOptions             $runtime
     *
     * @return FlightOrderDetailV2Response
     */
    public function flightOrderDetailV2WithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->isvName) {
            @$query['isv_name'] = $request->isvName;
        }

        if (null !== $request->orderId) {
            @$query['order_id'] = $request->orderId;
        }

        if (null !== $request->outOrderId) {
            @$query['out_order_id'] = $request->outOrderId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripCorpToken) {
            @$realHeaders['x-acs-btrip-corp-token'] = '' . $headers->xAcsBtripCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'FlightOrderDetailV2',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/dtb-flight/v2/order/action/detail',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return FlightOrderDetailV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 机票订单详情.
     *
     * @param request - FlightOrderDetailV2Request
     *
     * @returns FlightOrderDetailV2Response
     *
     * @param FlightOrderDetailV2Request $request
     *
     * @return FlightOrderDetailV2Response
     */
    public function flightOrderDetailV2($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new FlightOrderDetailV2Headers([]);

        return $this->flightOrderDetailV2WithOptions($request, $headers, $runtime);
    }

    /**
     * 查询机票订单列表.
     *
     * @param request - FlightOrderListQueryRequest
     * @param headers - FlightOrderListQueryHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns FlightOrderListQueryResponse
     *
     * @param FlightOrderListQueryRequest $request
     * @param FlightOrderListQueryHeaders $headers
     * @param RuntimeOptions              $runtime
     *
     * @return FlightOrderListQueryResponse
     */
    public function flightOrderListQueryWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->allApply) {
            @$query['all_apply'] = $request->allApply;
        }

        if (null !== $request->applyId) {
            @$query['apply_id'] = $request->applyId;
        }

        if (null !== $request->departId) {
            @$query['depart_id'] = $request->departId;
        }

        if (null !== $request->endTime) {
            @$query['end_time'] = $request->endTime;
        }

        if (null !== $request->page) {
            @$query['page'] = $request->page;
        }

        if (null !== $request->pageSize) {
            @$query['page_size'] = $request->pageSize;
        }

        if (null !== $request->startTime) {
            @$query['start_time'] = $request->startTime;
        }

        if (null !== $request->thirdpartApplyId) {
            @$query['thirdpart_apply_id'] = $request->thirdpartApplyId;
        }

        if (null !== $request->updateEndTime) {
            @$query['update_end_time'] = $request->updateEndTime;
        }

        if (null !== $request->updateStartTime) {
            @$query['update_start_time'] = $request->updateStartTime;
        }

        if (null !== $request->userId) {
            @$query['user_id'] = $request->userId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripSoCorpToken) {
            @$realHeaders['x-acs-btrip-so-corp-token'] = '' . $headers->xAcsBtripSoCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'FlightOrderListQuery',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/flight/v1/order-list',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return FlightOrderListQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询机票订单列表.
     *
     * @param request - FlightOrderListQueryRequest
     *
     * @returns FlightOrderListQueryResponse
     *
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
     * 机票订单列表查询.
     *
     * @param tmpReq - FlightOrderListQueryV2Request
     * @param headers - FlightOrderListQueryV2Headers
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns FlightOrderListQueryV2Response
     *
     * @param FlightOrderListQueryV2Request $tmpReq
     * @param FlightOrderListQueryV2Headers $headers
     * @param RuntimeOptions                $runtime
     *
     * @return FlightOrderListQueryV2Response
     */
    public function flightOrderListQueryV2WithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new FlightOrderListQueryV2ShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->approveId) {
            $request->approveIdShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->approveId, 'approve_id', 'json');
        }

        if (null !== $tmpReq->bookerId) {
            $request->bookerIdShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->bookerId, 'booker_id', 'json');
        }

        if (null !== $tmpReq->departId) {
            $request->departIdShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->departId, 'depart_id', 'json');
        }

        if (null !== $tmpReq->supplier) {
            $request->supplierShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->supplier, 'supplier', 'json');
        }

        if (null !== $tmpReq->thirdpartApproveId) {
            $request->thirdpartApproveIdShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->thirdpartApproveId, 'thirdpart_approve_id', 'json');
        }

        $query = [];
        if (null !== $request->approveIdShrink) {
            @$query['approve_id'] = $request->approveIdShrink;
        }

        if (null !== $request->bookerIdShrink) {
            @$query['booker_id'] = $request->bookerIdShrink;
        }

        if (null !== $request->departIdShrink) {
            @$query['depart_id'] = $request->departIdShrink;
        }

        if (null !== $request->endDate) {
            @$query['end_date'] = $request->endDate;
        }

        if (null !== $request->pageSize) {
            @$query['page_Size'] = $request->pageSize;
        }

        if (null !== $request->scrollId) {
            @$query['scroll_id'] = $request->scrollId;
        }

        if (null !== $request->startDate) {
            @$query['start_date'] = $request->startDate;
        }

        if (null !== $request->supplierShrink) {
            @$query['supplier'] = $request->supplierShrink;
        }

        if (null !== $request->thirdpartApproveIdShrink) {
            @$query['thirdpart_approve_id'] = $request->thirdpartApproveIdShrink;
        }

        if (null !== $request->updateEndDate) {
            @$query['update_end_date'] = $request->updateEndDate;
        }

        if (null !== $request->updateStartDate) {
            @$query['update_start_date'] = $request->updateStartDate;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripCorpToken) {
            @$realHeaders['x-acs-btrip-corp-token'] = '' . $headers->xAcsBtripCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'FlightOrderListQueryV2',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/open/v2/Flight-order-list-query',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return FlightOrderListQueryV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 机票订单列表查询.
     *
     * @param request - FlightOrderListQueryV2Request
     *
     * @returns FlightOrderListQueryV2Response
     *
     * @param FlightOrderListQueryV2Request $request
     *
     * @return FlightOrderListQueryV2Response
     */
    public function flightOrderListQueryV2($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new FlightOrderListQueryV2Headers([]);

        return $this->flightOrderListQueryV2WithOptions($request, $headers, $runtime);
    }

    /**
     * 查询机票订单详情（含票信息）.
     *
     * @param request - FlightOrderQueryRequest
     * @param headers - FlightOrderQueryHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns FlightOrderQueryResponse
     *
     * @param FlightOrderQueryRequest $request
     * @param FlightOrderQueryHeaders $headers
     * @param RuntimeOptions          $runtime
     *
     * @return FlightOrderQueryResponse
     */
    public function flightOrderQueryWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->orderId) {
            @$query['order_id'] = $request->orderId;
        }

        if (null !== $request->userId) {
            @$query['user_id'] = $request->userId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripSoCorpToken) {
            @$realHeaders['x-acs-btrip-so-corp-token'] = '' . $headers->xAcsBtripSoCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'FlightOrderQuery',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/flight/v1/order',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return FlightOrderQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询机票订单详情（含票信息）.
     *
     * @param request - FlightOrderQueryRequest
     *
     * @returns FlightOrderQueryResponse
     *
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
     * 查询退改规则行李额.
     *
     * @param request - FlightOtaItemDetailRequest
     * @param headers - FlightOtaItemDetailHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns FlightOtaItemDetailResponse
     *
     * @param FlightOtaItemDetailRequest $request
     * @param FlightOtaItemDetailHeaders $headers
     * @param RuntimeOptions             $runtime
     *
     * @return FlightOtaItemDetailResponse
     */
    public function flightOtaItemDetailWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->isvName) {
            @$query['isv_name'] = $request->isvName;
        }

        if (null !== $request->otaItemId) {
            @$query['ota_item_id'] = $request->otaItemId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripCorpToken) {
            @$realHeaders['x-acs-btrip-corp-token'] = '' . $headers->xAcsBtripCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'FlightOtaItemDetail',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/dtb-flight/v1/flight/action/ota-item-detail',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return FlightOtaItemDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询退改规则行李额.
     *
     * @param request - FlightOtaItemDetailRequest
     *
     * @returns FlightOtaItemDetailResponse
     *
     * @param FlightOtaItemDetailRequest $request
     *
     * @return FlightOtaItemDetailResponse
     */
    public function flightOtaItemDetail($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new FlightOtaItemDetailHeaders([]);

        return $this->flightOtaItemDetailWithOptions($request, $headers, $runtime);
    }

    /**
     * 航班最低价搜索.
     *
     * @param request - FlightOtaSearchRequest
     * @param headers - FlightOtaSearchHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns FlightOtaSearchResponse
     *
     * @param FlightOtaSearchRequest $request
     * @param FlightOtaSearchHeaders $headers
     * @param RuntimeOptions         $runtime
     *
     * @return FlightOtaSearchResponse
     */
    public function flightOtaSearchWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->airlineCode) {
            @$query['airline_code'] = $request->airlineCode;
        }

        if (null !== $request->arrCityCode) {
            @$query['arr_city_code'] = $request->arrCityCode;
        }

        if (null !== $request->cabinClass) {
            @$query['cabin_class'] = $request->cabinClass;
        }

        if (null !== $request->carrierFlightNo) {
            @$query['carrier_flight_no'] = $request->carrierFlightNo;
        }

        if (null !== $request->depCityCode) {
            @$query['dep_city_code'] = $request->depCityCode;
        }

        if (null !== $request->depDate) {
            @$query['dep_date'] = $request->depDate;
        }

        if (null !== $request->flightNo) {
            @$query['flight_no'] = $request->flightNo;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripCorpToken) {
            @$realHeaders['x-acs-btrip-corp-token'] = '' . $headers->xAcsBtripCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'FlightOtaSearch',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/dtb-flight/v1/flight/action/ota-search',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return FlightOtaSearchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 航班最低价搜索.
     *
     * @param request - FlightOtaSearchRequest
     *
     * @returns FlightOtaSearchResponse
     *
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
     * 单航班报价搜索.
     *
     * @param tmpReq - FlightOtaSearchV2Request
     * @param headers - FlightOtaSearchV2Headers
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns FlightOtaSearchV2Response
     *
     * @param FlightOtaSearchV2Request $tmpReq
     * @param FlightOtaSearchV2Headers $headers
     * @param RuntimeOptions           $runtime
     *
     * @return FlightOtaSearchV2Response
     */
    public function flightOtaSearchV2WithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new FlightOtaSearchV2ShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->cabinTypeList) {
            $request->cabinTypeListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->cabinTypeList, 'cabin_type_list', 'json');
        }

        if (null !== $tmpReq->searchJourneys) {
            $request->searchJourneysShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->searchJourneys, 'search_journeys', 'json');
        }

        $query = [];
        if (null !== $request->cabinTypeListShrink) {
            @$query['cabin_type_list'] = $request->cabinTypeListShrink;
        }

        if (null !== $request->directOnly) {
            @$query['direct_only'] = $request->directOnly;
        }

        if (null !== $request->isvName) {
            @$query['isv_name'] = $request->isvName;
        }

        if (null !== $request->needShareFlight) {
            @$query['need_share_flight'] = $request->needShareFlight;
        }

        if (null !== $request->searchJourneysShrink) {
            @$query['search_journeys'] = $request->searchJourneysShrink;
        }

        if (null !== $request->searchMode) {
            @$query['search_mode'] = $request->searchMode;
        }

        if (null !== $request->tripType) {
            @$query['trip_type'] = $request->tripType;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripCorpToken) {
            @$realHeaders['x-acs-btrip-corp-token'] = '' . $headers->xAcsBtripCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'FlightOtaSearchV2',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/dtb-flight/v2/flight/action/ota-search',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return FlightOtaSearchV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 单航班报价搜索.
     *
     * @param request - FlightOtaSearchV2Request
     *
     * @returns FlightOtaSearchV2Response
     *
     * @param FlightOtaSearchV2Request $request
     *
     * @return FlightOtaSearchV2Response
     */
    public function flightOtaSearchV2($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new FlightOtaSearchV2Headers([]);

        return $this->flightOtaSearchV2WithOptions($request, $headers, $runtime);
    }

    /**
     * 航班订单支付.
     *
     * @param tmpReq - FlightPayOrderRequest
     * @param headers - FlightPayOrderHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns FlightPayOrderResponse
     *
     * @param FlightPayOrderRequest $tmpReq
     * @param FlightPayOrderHeaders $headers
     * @param RuntimeOptions        $runtime
     *
     * @return FlightPayOrderResponse
     */
    public function flightPayOrderWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new FlightPayOrderShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->extra) {
            $request->extraShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->extra, 'extra', 'json');
        }

        $body = [];
        if (null !== $request->corpPayPrice) {
            @$body['corp_pay_price'] = $request->corpPayPrice;
        }

        if (null !== $request->disOrderId) {
            @$body['dis_order_id'] = $request->disOrderId;
        }

        if (null !== $request->extraShrink) {
            @$body['extra'] = $request->extraShrink;
        }

        if (null !== $request->personalPayPrice) {
            @$body['personal_pay_price'] = $request->personalPayPrice;
        }

        if (null !== $request->totalPayPrice) {
            @$body['total_pay_price'] = $request->totalPayPrice;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripCorpToken) {
            @$realHeaders['x-acs-btrip-corp-token'] = '' . $headers->xAcsBtripCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'FlightPayOrder',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/dtb-flight/v1/order/action/pay',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return FlightPayOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 航班订单支付.
     *
     * @param request - FlightPayOrderRequest
     *
     * @returns FlightPayOrderResponse
     *
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
     * 机票订单支付.
     *
     * @param request - FlightPayOrderV2Request
     * @param headers - FlightPayOrderV2Headers
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns FlightPayOrderV2Response
     *
     * @param FlightPayOrderV2Request $request
     * @param FlightPayOrderV2Headers $headers
     * @param RuntimeOptions          $runtime
     *
     * @return FlightPayOrderV2Response
     */
    public function flightPayOrderV2WithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->isvName) {
            @$body['isv_name'] = $request->isvName;
        }

        if (null !== $request->orderId) {
            @$body['order_id'] = $request->orderId;
        }

        if (null !== $request->outOrderId) {
            @$body['out_order_id'] = $request->outOrderId;
        }

        if (null !== $request->totalPrice) {
            @$body['total_price'] = $request->totalPrice;
        }

        if (null !== $request->totalServiceFeePrice) {
            @$body['total_service_fee_price'] = $request->totalServiceFeePrice;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripCorpToken) {
            @$realHeaders['x-acs-btrip-corp-token'] = '' . $headers->xAcsBtripCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'FlightPayOrderV2',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/dtb-flight/v2/order/action/pay',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return FlightPayOrderV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 机票订单支付.
     *
     * @param request - FlightPayOrderV2Request
     *
     * @returns FlightPayOrderV2Response
     *
     * @param FlightPayOrderV2Request $request
     *
     * @return FlightPayOrderV2Response
     */
    public function flightPayOrderV2($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new FlightPayOrderV2Headers([]);

        return $this->flightPayOrderV2WithOptions($request, $headers, $runtime);
    }

    /**
     * 航班退票申请.
     *
     * @param tmpReq - FlightRefundApplyRequest
     * @param headers - FlightRefundApplyHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns FlightRefundApplyResponse
     *
     * @param FlightRefundApplyRequest $tmpReq
     * @param FlightRefundApplyHeaders $headers
     * @param RuntimeOptions           $runtime
     *
     * @return FlightRefundApplyResponse
     */
    public function flightRefundApplyWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new FlightRefundApplyShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->extra) {
            $request->extraShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->extra, 'extra', 'json');
        }

        if (null !== $tmpReq->passengerSegmentInfoList) {
            $request->passengerSegmentInfoListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->passengerSegmentInfoList, 'passenger_segment_info_list', 'json');
        }

        if (null !== $tmpReq->refundVoucherInfo) {
            $request->refundVoucherInfoShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->refundVoucherInfo, 'refund_voucher_info', 'json');
        }

        $body = [];
        if (null !== $request->corpRefundPrice) {
            @$body['corp_refund_price'] = $request->corpRefundPrice;
        }

        if (null !== $request->disOrderId) {
            @$body['dis_order_id'] = $request->disOrderId;
        }

        if (null !== $request->disSubOrderId) {
            @$body['dis_sub_order_id'] = $request->disSubOrderId;
        }

        if (null !== $request->displayRefundMoney) {
            @$body['display_refund_money'] = $request->displayRefundMoney;
        }

        if (null !== $request->extraShrink) {
            @$body['extra'] = $request->extraShrink;
        }

        if (null !== $request->isVoluntary) {
            @$body['is_voluntary'] = $request->isVoluntary;
        }

        if (null !== $request->itemUnitIds) {
            @$body['item_unit_ids'] = $request->itemUnitIds;
        }

        if (null !== $request->passengerSegmentInfoListShrink) {
            @$body['passenger_segment_info_list'] = $request->passengerSegmentInfoListShrink;
        }

        if (null !== $request->personalRefundPrice) {
            @$body['personal_refund_price'] = $request->personalRefundPrice;
        }

        if (null !== $request->reasonDetail) {
            @$body['reason_detail'] = $request->reasonDetail;
        }

        if (null !== $request->reasonType) {
            @$body['reason_type'] = $request->reasonType;
        }

        if (null !== $request->refundVoucherInfoShrink) {
            @$body['refund_voucher_info'] = $request->refundVoucherInfoShrink;
        }

        if (null !== $request->sessionId) {
            @$body['session_id'] = $request->sessionId;
        }

        if (null !== $request->totalRefundPrice) {
            @$body['total_refund_price'] = $request->totalRefundPrice;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripCorpToken) {
            @$realHeaders['x-acs-btrip-corp-token'] = '' . $headers->xAcsBtripCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'FlightRefundApply',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/dtb-flight/v1/refund/action/apply',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return FlightRefundApplyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 航班退票申请.
     *
     * @param request - FlightRefundApplyRequest
     *
     * @returns FlightRefundApplyResponse
     *
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
     * 机票退票申请.
     *
     * @param tmpReq - FlightRefundApplyV2Request
     * @param headers - FlightRefundApplyV2Headers
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns FlightRefundApplyV2Response
     *
     * @param FlightRefundApplyV2Request $tmpReq
     * @param FlightRefundApplyV2Headers $headers
     * @param RuntimeOptions             $runtime
     *
     * @return FlightRefundApplyV2Response
     */
    public function flightRefundApplyV2WithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new FlightRefundApplyV2ShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->passengerSegmentRelations) {
            $request->passengerSegmentRelationsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->passengerSegmentRelations, 'passenger_segment_relations', 'json');
        }

        if (null !== $tmpReq->ticketNos) {
            $request->ticketNosShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->ticketNos, 'ticket_nos', 'json');
        }

        $body = [];
        if (null !== $request->isvName) {
            @$body['isv_name'] = $request->isvName;
        }

        if (null !== $request->orderId) {
            @$body['order_id'] = $request->orderId;
        }

        if (null !== $request->outOrderId) {
            @$body['out_order_id'] = $request->outOrderId;
        }

        if (null !== $request->outSubOrderId) {
            @$body['out_sub_order_id'] = $request->outSubOrderId;
        }

        if (null !== $request->passengerSegmentRelationsShrink) {
            @$body['passenger_segment_relations'] = $request->passengerSegmentRelationsShrink;
        }

        if (null !== $request->preCalType) {
            @$body['pre_cal_type'] = $request->preCalType;
        }

        if (null !== $request->refundReason) {
            @$body['refund_reason'] = $request->refundReason;
        }

        if (null !== $request->refundReasonType) {
            @$body['refund_reason_type'] = $request->refundReasonType;
        }

        if (null !== $request->ticketNosShrink) {
            @$body['ticket_nos'] = $request->ticketNosShrink;
        }

        if (null !== $request->totalRefundPrice) {
            @$body['total_refund_price'] = $request->totalRefundPrice;
        }

        if (null !== $request->uploadPictUrls) {
            @$body['upload_pict_urls'] = $request->uploadPictUrls;
        }

        if (null !== $request->voluntary) {
            @$body['voluntary'] = $request->voluntary;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripCorpToken) {
            @$realHeaders['x-acs-btrip-corp-token'] = '' . $headers->xAcsBtripCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'FlightRefundApplyV2',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/dtb-flight/v2/refund/action/apply',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return FlightRefundApplyV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 机票退票申请.
     *
     * @param request - FlightRefundApplyV2Request
     *
     * @returns FlightRefundApplyV2Response
     *
     * @param FlightRefundApplyV2Request $request
     *
     * @return FlightRefundApplyV2Response
     */
    public function flightRefundApplyV2($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new FlightRefundApplyV2Headers([]);

        return $this->flightRefundApplyV2WithOptions($request, $headers, $runtime);
    }

    /**
     * 航班退票详情.
     *
     * @param request - FlightRefundDetailRequest
     * @param headers - FlightRefundDetailHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns FlightRefundDetailResponse
     *
     * @param FlightRefundDetailRequest $request
     * @param FlightRefundDetailHeaders $headers
     * @param RuntimeOptions            $runtime
     *
     * @return FlightRefundDetailResponse
     */
    public function flightRefundDetailWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->disOrderId) {
            @$query['dis_order_id'] = $request->disOrderId;
        }

        if (null !== $request->disSubOrderId) {
            @$query['dis_sub_order_id'] = $request->disSubOrderId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripCorpToken) {
            @$realHeaders['x-acs-btrip-corp-token'] = '' . $headers->xAcsBtripCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'FlightRefundDetail',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/dtb-flight/v1/refund/action/detail',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return FlightRefundDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 航班退票详情.
     *
     * @param request - FlightRefundDetailRequest
     *
     * @returns FlightRefundDetailResponse
     *
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
     * 机票退票详情.
     *
     * @param request - FlightRefundDetailV2Request
     * @param headers - FlightRefundDetailV2Headers
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns FlightRefundDetailV2Response
     *
     * @param FlightRefundDetailV2Request $request
     * @param FlightRefundDetailV2Headers $headers
     * @param RuntimeOptions              $runtime
     *
     * @return FlightRefundDetailV2Response
     */
    public function flightRefundDetailV2WithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->isvName) {
            @$query['isv_name'] = $request->isvName;
        }

        if (null !== $request->orderId) {
            @$query['order_id'] = $request->orderId;
        }

        if (null !== $request->outOrderId) {
            @$query['out_order_id'] = $request->outOrderId;
        }

        if (null !== $request->outRefundApplyId) {
            @$query['out_refund_apply_id'] = $request->outRefundApplyId;
        }

        if (null !== $request->refundApplyId) {
            @$query['refund_apply_id'] = $request->refundApplyId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripCorpToken) {
            @$realHeaders['x-acs-btrip-corp-token'] = '' . $headers->xAcsBtripCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'FlightRefundDetailV2',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/dtb-flight/v2/refund/action/detail',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return FlightRefundDetailV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 机票退票详情.
     *
     * @param request - FlightRefundDetailV2Request
     *
     * @returns FlightRefundDetailV2Response
     *
     * @param FlightRefundDetailV2Request $request
     *
     * @return FlightRefundDetailV2Response
     */
    public function flightRefundDetailV2($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new FlightRefundDetailV2Headers([]);

        return $this->flightRefundDetailV2WithOptions($request, $headers, $runtime);
    }

    /**
     * 机票退票预计算.
     *
     * @param tmpReq - FlightRefundPreCalRequest
     * @param headers - FlightRefundPreCalHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns FlightRefundPreCalResponse
     *
     * @param FlightRefundPreCalRequest $tmpReq
     * @param FlightRefundPreCalHeaders $headers
     * @param RuntimeOptions            $runtime
     *
     * @return FlightRefundPreCalResponse
     */
    public function flightRefundPreCalWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new FlightRefundPreCalShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->passengerSegmentInfoList) {
            $request->passengerSegmentInfoListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->passengerSegmentInfoList, 'passenger_segment_info_list', 'json');
        }

        $query = [];
        if (null !== $request->disOrderId) {
            @$query['dis_order_id'] = $request->disOrderId;
        }

        if (null !== $request->isVoluntary) {
            @$query['is_voluntary'] = $request->isVoluntary;
        }

        if (null !== $request->passengerSegmentInfoListShrink) {
            @$query['passenger_segment_info_list'] = $request->passengerSegmentInfoListShrink;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripCorpToken) {
            @$realHeaders['x-acs-btrip-corp-token'] = '' . $headers->xAcsBtripCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'FlightRefundPreCal',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/dtb-flight/v1/refund/action/pre-cal',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return FlightRefundPreCalResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 机票退票预计算.
     *
     * @param request - FlightRefundPreCalRequest
     *
     * @returns FlightRefundPreCalResponse
     *
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
     * 机票退票费用预计算.
     *
     * @param tmpReq - FlightRefundPreCalV2Request
     * @param headers - FlightRefundPreCalV2Headers
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns FlightRefundPreCalV2Response
     *
     * @param FlightRefundPreCalV2Request $tmpReq
     * @param FlightRefundPreCalV2Headers $headers
     * @param RuntimeOptions              $runtime
     *
     * @return FlightRefundPreCalV2Response
     */
    public function flightRefundPreCalV2WithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new FlightRefundPreCalV2ShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->passengerSegmentRelations) {
            $request->passengerSegmentRelationsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->passengerSegmentRelations, 'passenger_segment_relations', 'json');
        }

        if (null !== $tmpReq->ticketNos) {
            $request->ticketNosShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->ticketNos, 'ticket_nos', 'json');
        }

        $query = [];
        if (null !== $request->isvName) {
            @$query['isv_name'] = $request->isvName;
        }

        if (null !== $request->orderId) {
            @$query['order_id'] = $request->orderId;
        }

        if (null !== $request->outOrderId) {
            @$query['out_order_id'] = $request->outOrderId;
        }

        if (null !== $request->passengerSegmentRelationsShrink) {
            @$query['passenger_segment_relations'] = $request->passengerSegmentRelationsShrink;
        }

        if (null !== $request->preCalType) {
            @$query['pre_cal_type'] = $request->preCalType;
        }

        if (null !== $request->ticketNosShrink) {
            @$query['ticket_nos'] = $request->ticketNosShrink;
        }

        if (null !== $request->voluntary) {
            @$query['voluntary'] = $request->voluntary;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripCorpToken) {
            @$realHeaders['x-acs-btrip-corp-token'] = '' . $headers->xAcsBtripCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'FlightRefundPreCalV2',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/dtb-flight/v2/refund/action/pre-cal',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return FlightRefundPreCalV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 机票退票费用预计算.
     *
     * @param request - FlightRefundPreCalV2Request
     *
     * @returns FlightRefundPreCalV2Response
     *
     * @param FlightRefundPreCalV2Request $request
     *
     * @return FlightRefundPreCalV2Response
     */
    public function flightRefundPreCalV2($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new FlightRefundPreCalV2Headers([]);

        return $this->flightRefundPreCalV2WithOptions($request, $headers, $runtime);
    }

    /**
     * 航班列表搜索.
     *
     * @param request - FlightSearchListRequest
     * @param headers - FlightSearchListHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns FlightSearchListResponse
     *
     * @param FlightSearchListRequest $request
     * @param FlightSearchListHeaders $headers
     * @param RuntimeOptions          $runtime
     *
     * @return FlightSearchListResponse
     */
    public function flightSearchListWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->airlineCode) {
            @$query['airline_code'] = $request->airlineCode;
        }

        if (null !== $request->arrCityCode) {
            @$query['arr_city_code'] = $request->arrCityCode;
        }

        if (null !== $request->arrCityName) {
            @$query['arr_city_name'] = $request->arrCityName;
        }

        if (null !== $request->arrDate) {
            @$query['arr_date'] = $request->arrDate;
        }

        if (null !== $request->cabinClass) {
            @$query['cabin_class'] = $request->cabinClass;
        }

        if (null !== $request->depCityCode) {
            @$query['dep_city_code'] = $request->depCityCode;
        }

        if (null !== $request->depCityName) {
            @$query['dep_city_name'] = $request->depCityName;
        }

        if (null !== $request->depDate) {
            @$query['dep_date'] = $request->depDate;
        }

        if (null !== $request->flightNo) {
            @$query['flight_no'] = $request->flightNo;
        }

        if (null !== $request->needMultiClassPrice) {
            @$query['need_multi_class_price'] = $request->needMultiClassPrice;
        }

        if (null !== $request->transferCityCode) {
            @$query['transfer_city_code'] = $request->transferCityCode;
        }

        if (null !== $request->transferFlightNo) {
            @$query['transfer_flight_no'] = $request->transferFlightNo;
        }

        if (null !== $request->transferLeaveDate) {
            @$query['transfer_leave_date'] = $request->transferLeaveDate;
        }

        if (null !== $request->tripType) {
            @$query['trip_type'] = $request->tripType;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripCorpToken) {
            @$realHeaders['x-acs-btrip-corp-token'] = '' . $headers->xAcsBtripCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'FlightSearchList',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/huge/dtb-flight/v1/flight/action/search-list',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return FlightSearchListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 航班列表搜索.
     *
     * @param request - FlightSearchListRequest
     *
     * @returns FlightSearchListResponse
     *
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
     * 查询福豆记账数据.
     *
     * @param request - FuPointBillSettlementQueryRequest
     * @param headers - FuPointBillSettlementQueryHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns FuPointBillSettlementQueryResponse
     *
     * @param FuPointBillSettlementQueryRequest $request
     * @param FuPointBillSettlementQueryHeaders $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return FuPointBillSettlementQueryResponse
     */
    public function fuPointBillSettlementQueryWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->billBatch) {
            @$query['bill_batch'] = $request->billBatch;
        }

        if (null !== $request->cooperatorId) {
            @$query['cooperator_id'] = $request->cooperatorId;
        }

        if (null !== $request->orderId) {
            @$query['order_id'] = $request->orderId;
        }

        if (null !== $request->pageNo) {
            @$query['page_no'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['page_size'] = $request->pageSize;
        }

        if (null !== $request->periodEnd) {
            @$query['period_end'] = $request->periodEnd;
        }

        if (null !== $request->periodStart) {
            @$query['period_start'] = $request->periodStart;
        }

        if (null !== $request->scrollId) {
            @$query['scroll_id'] = $request->scrollId;
        }

        if (null !== $request->scrollMod) {
            @$query['scroll_mod'] = $request->scrollMod;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripCorpToken) {
            @$realHeaders['x-acs-btrip-corp-token'] = '' . $headers->xAcsBtripCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'FuPointBillSettlementQuery',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/fupoint/v1/bill-settlement',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return FuPointBillSettlementQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询福豆记账数据.
     *
     * @param request - FuPointBillSettlementQueryRequest
     *
     * @returns FuPointBillSettlementQueryResponse
     *
     * @param FuPointBillSettlementQueryRequest $request
     *
     * @return FuPointBillSettlementQueryResponse
     */
    public function fuPointBillSettlementQuery($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new FuPointBillSettlementQueryHeaders([]);

        return $this->fuPointBillSettlementQueryWithOptions($request, $headers, $runtime);
    }

    /**
     * 换取GroupCorpToken接口.
     *
     * @param request - GroupCorpTokenRequest
     * @param headers - GroupCorpTokenHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GroupCorpTokenResponse
     *
     * @param GroupCorpTokenRequest $request
     * @param GroupCorpTokenHeaders $headers
     * @param RuntimeOptions        $runtime
     *
     * @return GroupCorpTokenResponse
     */
    public function groupCorpTokenWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appSecret) {
            @$query['app_secret'] = $request->appSecret;
        }

        if (null !== $request->corpId) {
            @$query['corp_id'] = $request->corpId;
        }

        if (null !== $request->subCorpId) {
            @$query['sub_corp_id'] = $request->subCorpId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripAccessToken) {
            @$realHeaders['x-acs-btrip-access-token'] = '' . $headers->xAcsBtripAccessToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GroupCorpToken',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/btrip-open-auth/v1/group-corp-token/action/take',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GroupCorpTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 换取GroupCorpToken接口.
     *
     * @param request - GroupCorpTokenRequest
     *
     * @returns GroupCorpTokenResponse
     *
     * @param GroupCorpTokenRequest $request
     *
     * @return GroupCorpTokenResponse
     */
    public function groupCorpToken($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GroupCorpTokenHeaders([]);

        return $this->groupCorpTokenWithOptions($request, $headers, $runtime);
    }

    /**
     * 集团部门同步.
     *
     * @param tmpReq - GroupDepartSaveRequest
     * @param headers - GroupDepartSaveHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GroupDepartSaveResponse
     *
     * @param GroupDepartSaveRequest $tmpReq
     * @param GroupDepartSaveHeaders $headers
     * @param RuntimeOptions         $runtime
     *
     * @return GroupDepartSaveResponse
     */
    public function groupDepartSaveWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new GroupDepartSaveShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->subCorpIdList) {
            $request->subCorpIdListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->subCorpIdList, 'sub_corp_id_list', 'json');
        }

        $body = [];
        if (null !== $request->deptName) {
            @$body['dept_name'] = $request->deptName;
        }

        if (null !== $request->managerIds) {
            @$body['manager_ids'] = $request->managerIds;
        }

        if (null !== $request->outerDeptId) {
            @$body['outer_dept_id'] = $request->outerDeptId;
        }

        if (null !== $request->outerDeptPid) {
            @$body['outer_dept_pid'] = $request->outerDeptPid;
        }

        if (null !== $request->status) {
            @$body['status'] = $request->status;
        }

        if (null !== $request->subCorpIdListShrink) {
            @$body['sub_corp_id_list'] = $request->subCorpIdListShrink;
        }

        if (null !== $request->syncGroup) {
            @$body['sync_group'] = $request->syncGroup;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripCorpToken) {
            @$realHeaders['x-acs-btrip-corp-token'] = '' . $headers->xAcsBtripCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GroupDepartSave',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/sub_corps/v1/departs',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GroupDepartSaveResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 集团部门同步.
     *
     * @param request - GroupDepartSaveRequest
     *
     * @returns GroupDepartSaveResponse
     *
     * @param GroupDepartSaveRequest $request
     *
     * @return GroupDepartSaveResponse
     */
    public function groupDepartSave($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GroupDepartSaveHeaders([]);

        return $this->groupDepartSaveWithOptions($request, $headers, $runtime);
    }

    /**
     * 集团人员同步.
     *
     * @param tmpReq - GroupUserSaveRequest
     * @param headers - GroupUserSaveHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GroupUserSaveResponse
     *
     * @param GroupUserSaveRequest $tmpReq
     * @param GroupUserSaveHeaders $headers
     * @param RuntimeOptions       $runtime
     *
     * @return GroupUserSaveResponse
     */
    public function groupUserSaveWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new GroupUserSaveShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->certList) {
            $request->certListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->certList, 'cert_list', 'json');
        }

        if (null !== $tmpReq->subCorpIdList) {
            $request->subCorpIdListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->subCorpIdList, 'sub_corp_id_list', 'json');
        }

        $body = [];
        if (null !== $request->baseCityCode) {
            @$body['base_city_code'] = $request->baseCityCode;
        }

        if (null !== $request->birthday) {
            @$body['birthday'] = $request->birthday;
        }

        if (null !== $request->certListShrink) {
            @$body['cert_list'] = $request->certListShrink;
        }

        if (null !== $request->gender) {
            @$body['gender'] = $request->gender;
        }

        if (null !== $request->jobNo) {
            @$body['job_no'] = $request->jobNo;
        }

        if (null !== $request->phone) {
            @$body['phone'] = $request->phone;
        }

        if (null !== $request->realNameEn) {
            @$body['real_name_en'] = $request->realNameEn;
        }

        if (null !== $request->subCorpIdListShrink) {
            @$body['sub_corp_id_list'] = $request->subCorpIdListShrink;
        }

        if (null !== $request->userId) {
            @$body['user_id'] = $request->userId;
        }

        if (null !== $request->userName) {
            @$body['user_name'] = $request->userName;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripCorpToken) {
            @$realHeaders['x-acs-btrip-corp-token'] = '' . $headers->xAcsBtripCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GroupUserSave',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/sub_corps/v1/users',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GroupUserSaveResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 集团人员同步.
     *
     * @param request - GroupUserSaveRequest
     *
     * @returns GroupUserSaveResponse
     *
     * @param GroupUserSaveRequest $request
     *
     * @return GroupUserSaveResponse
     */
    public function groupUserSave($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GroupUserSaveHeaders([]);

        return $this->groupUserSaveWithOptions($request, $headers, $runtime);
    }

    /**
     * 酒店起价.
     *
     * @param tmpReq - HotelAskingPriceRequest
     * @param headers - HotelAskingPriceHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns HotelAskingPriceResponse
     *
     * @param HotelAskingPriceRequest $tmpReq
     * @param HotelAskingPriceHeaders $headers
     * @param RuntimeOptions          $runtime
     *
     * @return HotelAskingPriceResponse
     */
    public function hotelAskingPriceWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new HotelAskingPriceShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->shids) {
            $request->shidsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->shids, 'shids', 'json');
        }

        $query = [];
        if (null !== $request->adultNum) {
            @$query['adult_num'] = $request->adultNum;
        }

        if (null !== $request->btripUserId) {
            @$query['btrip_user_id'] = $request->btripUserId;
        }

        if (null !== $request->checkInDate) {
            @$query['check_in_date'] = $request->checkInDate;
        }

        if (null !== $request->checkOutDate) {
            @$query['check_out_date'] = $request->checkOutDate;
        }

        if (null !== $request->cityCode) {
            @$query['city_code'] = $request->cityCode;
        }

        if (null !== $request->cityName) {
            @$query['city_name'] = $request->cityName;
        }

        if (null !== $request->dir) {
            @$query['dir'] = $request->dir;
        }

        if (null !== $request->hotelStar) {
            @$query['hotel_star'] = $request->hotelStar;
        }

        if (null !== $request->isProtocol) {
            @$query['is_protocol'] = $request->isProtocol;
        }

        if (null !== $request->paymentType) {
            @$query['payment_type'] = $request->paymentType;
        }

        if (null !== $request->shidsShrink) {
            @$query['shids'] = $request->shidsShrink;
        }

        if (null !== $request->sortCode) {
            @$query['sort_code'] = $request->sortCode;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripCorpToken) {
            @$realHeaders['x-acs-btrip-corp-token'] = '' . $headers->xAcsBtripCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'HotelAskingPrice',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/dtb-hotel/v1/hotels/action/asking-price',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return HotelAskingPriceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 酒店起价.
     *
     * @param request - HotelAskingPriceRequest
     *
     * @returns HotelAskingPriceResponse
     *
     * @param HotelAskingPriceRequest $request
     *
     * @return HotelAskingPriceResponse
     */
    public function hotelAskingPrice($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new HotelAskingPriceHeaders([]);

        return $this->hotelAskingPriceWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询酒店记账数据.
     *
     * @param request - HotelBillSettlementQueryRequest
     * @param headers - HotelBillSettlementQueryHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns HotelBillSettlementQueryResponse
     *
     * @param HotelBillSettlementQueryRequest $request
     * @param HotelBillSettlementQueryHeaders $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return HotelBillSettlementQueryResponse
     */
    public function hotelBillSettlementQueryWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->billBatch) {
            @$query['bill_batch'] = $request->billBatch;
        }

        if (null !== $request->orderId) {
            @$query['order_id'] = $request->orderId;
        }

        if (null !== $request->pageNo) {
            @$query['page_no'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['page_size'] = $request->pageSize;
        }

        if (null !== $request->periodEnd) {
            @$query['period_end'] = $request->periodEnd;
        }

        if (null !== $request->periodStart) {
            @$query['period_start'] = $request->periodStart;
        }

        if (null !== $request->scrollId) {
            @$query['scroll_id'] = $request->scrollId;
        }

        if (null !== $request->scrollMod) {
            @$query['scroll_mod'] = $request->scrollMod;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripSoCorpToken) {
            @$realHeaders['x-acs-btrip-so-corp-token'] = '' . $headers->xAcsBtripSoCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'HotelBillSettlementQuery',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/hotel/v1/bill-settlement',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return HotelBillSettlementQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询酒店记账数据.
     *
     * @param request - HotelBillSettlementQueryRequest
     *
     * @returns HotelBillSettlementQueryResponse
     *
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
     * 酒店城市列表.
     *
     * @param request - HotelCityCodeListRequest
     * @param headers - HotelCityCodeListHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns HotelCityCodeListResponse
     *
     * @param HotelCityCodeListRequest $request
     * @param HotelCityCodeListHeaders $headers
     * @param RuntimeOptions           $runtime
     *
     * @return HotelCityCodeListResponse
     */
    public function hotelCityCodeListWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->countryCode) {
            @$query['country_code'] = $request->countryCode;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripCorpToken) {
            @$realHeaders['x-acs-btrip-corp-token'] = '' . $headers->xAcsBtripCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'HotelCityCodeList',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/dtb-hotel/v1/city-codes/action/search',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return HotelCityCodeListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 酒店城市列表.
     *
     * @param request - HotelCityCodeListRequest
     *
     * @returns HotelCityCodeListResponse
     *
     * @param HotelCityCodeListRequest $request
     *
     * @return HotelCityCodeListResponse
     */
    public function hotelCityCodeList($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new HotelCityCodeListHeaders([]);

        return $this->hotelCityCodeListWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询酒店超标审批详情.
     *
     * @param request - HotelExceedApplyQueryRequest
     * @param headers - HotelExceedApplyQueryHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns HotelExceedApplyQueryResponse
     *
     * @param HotelExceedApplyQueryRequest $request
     * @param HotelExceedApplyQueryHeaders $headers
     * @param RuntimeOptions               $runtime
     *
     * @return HotelExceedApplyQueryResponse
     */
    public function hotelExceedApplyQueryWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applyId) {
            @$query['apply_id'] = $request->applyId;
        }

        if (null !== $request->businessInstanceId) {
            @$query['business_instance_id'] = $request->businessInstanceId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripSoCorpToken) {
            @$realHeaders['x-acs-btrip-so-corp-token'] = '' . $headers->xAcsBtripSoCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'HotelExceedApplyQuery',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/apply/v1/hotel-exceed',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return HotelExceedApplyQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询酒店超标审批详情.
     *
     * @param request - HotelExceedApplyQueryRequest
     *
     * @returns HotelExceedApplyQueryResponse
     *
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
     * 酒店详情页报价接口(直连).
     *
     * @param request - HotelGoodsQueryRequest
     * @param headers - HotelGoodsQueryHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns HotelGoodsQueryResponse
     *
     * @param HotelGoodsQueryRequest $request
     * @param HotelGoodsQueryHeaders $headers
     * @param RuntimeOptions         $runtime
     *
     * @return HotelGoodsQueryResponse
     */
    public function hotelGoodsQueryWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->adultNum) {
            @$query['adult_num'] = $request->adultNum;
        }

        if (null !== $request->agreementPrice) {
            @$query['agreement_price'] = $request->agreementPrice;
        }

        if (null !== $request->beginDate) {
            @$query['begin_date'] = $request->beginDate;
        }

        if (null !== $request->breakfastIncluded) {
            @$query['breakfast_included'] = $request->breakfastIncluded;
        }

        if (null !== $request->btripUserId) {
            @$query['btrip_user_id'] = $request->btripUserId;
        }

        if (null !== $request->cityCode) {
            @$query['city_code'] = $request->cityCode;
        }

        if (null !== $request->endDate) {
            @$query['end_date'] = $request->endDate;
        }

        if (null !== $request->hotelId) {
            @$query['hotel_id'] = $request->hotelId;
        }

        if (null !== $request->payOverType) {
            @$query['pay_over_type'] = $request->payOverType;
        }

        if (null !== $request->paymentType) {
            @$query['payment_type'] = $request->paymentType;
        }

        if (null !== $request->specialInvoice) {
            @$query['special_invoice'] = $request->specialInvoice;
        }

        if (null !== $request->superMan) {
            @$query['super_man'] = $request->superMan;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripCorpToken) {
            @$realHeaders['x-acs-btrip-corp-token'] = '' . $headers->xAcsBtripCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'HotelGoodsQuery',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/dtb-hotel/v1/hotel-goods',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return HotelGoodsQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 酒店详情页报价接口(直连).
     *
     * @param request - HotelGoodsQueryRequest
     *
     * @returns HotelGoodsQueryResponse
     *
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
     * 获取酒店清单.
     *
     * @param request - HotelIndexInfoRequest
     * @param headers - HotelIndexInfoHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns HotelIndexInfoResponse
     *
     * @param HotelIndexInfoRequest $request
     * @param HotelIndexInfoHeaders $headers
     * @param RuntimeOptions        $runtime
     *
     * @return HotelIndexInfoResponse
     */
    public function hotelIndexInfoWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cityCode) {
            @$query['city_code'] = $request->cityCode;
        }

        if (null !== $request->hotelStatus) {
            @$query['hotel_status'] = $request->hotelStatus;
        }

        if (null !== $request->pageSize) {
            @$query['page_size'] = $request->pageSize;
        }

        if (null !== $request->pageToken) {
            @$query['page_token'] = $request->pageToken;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripCorpToken) {
            @$realHeaders['x-acs-btrip-corp-token'] = '' . $headers->xAcsBtripCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'HotelIndexInfo',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/dtb-hotel/v1/index-infos',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return HotelIndexInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取酒店清单.
     *
     * @param request - HotelIndexInfoRequest
     *
     * @returns HotelIndexInfoResponse
     *
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
     * 酒店订单取消.
     *
     * @param request - HotelOrderCancelRequest
     * @param headers - HotelOrderCancelHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns HotelOrderCancelResponse
     *
     * @param HotelOrderCancelRequest $request
     * @param HotelOrderCancelHeaders $headers
     * @param RuntimeOptions          $runtime
     *
     * @return HotelOrderCancelResponse
     */
    public function hotelOrderCancelWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->btripOrderId) {
            @$query['btrip_order_id'] = $request->btripOrderId;
        }

        if (null !== $request->disOrderId) {
            @$query['dis_order_id'] = $request->disOrderId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripCorpToken) {
            @$realHeaders['x-acs-btrip-corp-token'] = '' . $headers->xAcsBtripCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'HotelOrderCancel',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/dtb-hotel/v1/orders/action/cancel',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return HotelOrderCancelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 酒店订单取消.
     *
     * @param request - HotelOrderCancelRequest
     *
     * @returns HotelOrderCancelResponse
     *
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
     * 酒店订单修改申请.
     *
     * @param tmpReq - HotelOrderChangeApplyRequest
     * @param headers - HotelOrderChangeApplyHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns HotelOrderChangeApplyResponse
     *
     * @param HotelOrderChangeApplyRequest $tmpReq
     * @param HotelOrderChangeApplyHeaders $headers
     * @param RuntimeOptions               $runtime
     *
     * @return HotelOrderChangeApplyResponse
     */
    public function hotelOrderChangeApplyWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new HotelOrderChangeApplyShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->roomInfoList) {
            $request->roomInfoListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->roomInfoList, 'room_info_list', 'json');
        }

        $body = [];
        if (null !== $request->btripUserId) {
            @$body['btrip_user_id'] = $request->btripUserId;
        }

        if (null !== $request->disOrderId) {
            @$body['dis_order_id'] = $request->disOrderId;
        }

        if (null !== $request->reason) {
            @$body['reason'] = $request->reason;
        }

        if (null !== $request->roomInfoListShrink) {
            @$body['room_info_list'] = $request->roomInfoListShrink;
        }

        if (null !== $request->saleOrderId) {
            @$body['sale_order_id'] = $request->saleOrderId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripCorpToken) {
            @$realHeaders['x-acs-btrip-corp-token'] = '' . $headers->xAcsBtripCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'HotelOrderChangeApply',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/dtb-hotel/v1/orders/action/change/apply',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return HotelOrderChangeApplyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 酒店订单修改申请.
     *
     * @param request - HotelOrderChangeApplyRequest
     *
     * @returns HotelOrderChangeApplyResponse
     *
     * @param HotelOrderChangeApplyRequest $request
     *
     * @return HotelOrderChangeApplyResponse
     */
    public function hotelOrderChangeApply($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new HotelOrderChangeApplyHeaders([]);

        return $this->hotelOrderChangeApplyWithOptions($request, $headers, $runtime);
    }

    /**
     * 酒店订单修改详情.
     *
     * @param request - HotelOrderChangeDetailRequest
     * @param headers - HotelOrderChangeDetailHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns HotelOrderChangeDetailResponse
     *
     * @param HotelOrderChangeDetailRequest $request
     * @param HotelOrderChangeDetailHeaders $headers
     * @param RuntimeOptions                $runtime
     *
     * @return HotelOrderChangeDetailResponse
     */
    public function hotelOrderChangeDetailWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->btripUserId) {
            @$body['btrip_user_id'] = $request->btripUserId;
        }

        if (null !== $request->changeOrderId) {
            @$body['change_order_id'] = $request->changeOrderId;
        }

        if (null !== $request->disOrderId) {
            @$body['dis_order_id'] = $request->disOrderId;
        }

        if (null !== $request->saleOrderId) {
            @$body['sale_order_id'] = $request->saleOrderId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripCorpToken) {
            @$realHeaders['x-acs-btrip-corp-token'] = '' . $headers->xAcsBtripCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'HotelOrderChangeDetail',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/dtb-hotel/v1/orders/action/change/detail',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return HotelOrderChangeDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 酒店订单修改详情.
     *
     * @param request - HotelOrderChangeDetailRequest
     *
     * @returns HotelOrderChangeDetailResponse
     *
     * @param HotelOrderChangeDetailRequest $request
     *
     * @return HotelOrderChangeDetailResponse
     */
    public function hotelOrderChangeDetail($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new HotelOrderChangeDetailHeaders([]);

        return $this->hotelOrderChangeDetailWithOptions($request, $headers, $runtime);
    }

    /**
     * 酒店订单创建.
     *
     * @param tmpReq - HotelOrderCreateRequest
     * @param headers - HotelOrderCreateHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns HotelOrderCreateResponse
     *
     * @param HotelOrderCreateRequest $tmpReq
     * @param HotelOrderCreateHeaders $headers
     * @param RuntimeOptions          $runtime
     *
     * @return HotelOrderCreateResponse
     */
    public function hotelOrderCreateWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new HotelOrderCreateShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->invoiceInfo) {
            $request->invoiceInfoShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->invoiceInfo, 'invoice_info', 'json');
        }

        if (null !== $tmpReq->occupantInfoList) {
            $request->occupantInfoListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->occupantInfoList, 'occupant_info_list', 'json');
        }

        if (null !== $tmpReq->promotionInfo) {
            $request->promotionInfoShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->promotionInfo, 'promotion_info', 'json');
        }

        $body = [];
        if (null !== $request->btripUserId) {
            @$body['btrip_user_id'] = $request->btripUserId;
        }

        if (null !== $request->checkIn) {
            @$body['check_in'] = $request->checkIn;
        }

        if (null !== $request->checkOut) {
            @$body['check_out'] = $request->checkOut;
        }

        if (null !== $request->contractEmail) {
            @$body['contract_email'] = $request->contractEmail;
        }

        if (null !== $request->contractName) {
            @$body['contract_name'] = $request->contractName;
        }

        if (null !== $request->contractPhone) {
            @$body['contract_phone'] = $request->contractPhone;
        }

        if (null !== $request->corpPayPrice) {
            @$body['corp_pay_price'] = $request->corpPayPrice;
        }

        if (null !== $request->disOrderId) {
            @$body['dis_order_id'] = $request->disOrderId;
        }

        if (null !== $request->extra) {
            @$body['extra'] = $request->extra;
        }

        if (null !== $request->invoiceInfoShrink) {
            @$body['invoice_info'] = $request->invoiceInfoShrink;
        }

        if (null !== $request->itemId) {
            @$body['item_id'] = $request->itemId;
        }

        if (null !== $request->itineraryNo) {
            @$body['itinerary_no'] = $request->itineraryNo;
        }

        if (null !== $request->occupantInfoListShrink) {
            @$body['occupant_info_list'] = $request->occupantInfoListShrink;
        }

        if (null !== $request->personPayPrice) {
            @$body['person_pay_price'] = $request->personPayPrice;
        }

        if (null !== $request->promotionInfoShrink) {
            @$body['promotion_info'] = $request->promotionInfoShrink;
        }

        if (null !== $request->ratePlanId) {
            @$body['rate_plan_id'] = $request->ratePlanId;
        }

        if (null !== $request->roomId) {
            @$body['room_id'] = $request->roomId;
        }

        if (null !== $request->roomNum) {
            @$body['room_num'] = $request->roomNum;
        }

        if (null !== $request->sellerId) {
            @$body['seller_id'] = $request->sellerId;
        }

        if (null !== $request->shid) {
            @$body['shid'] = $request->shid;
        }

        if (null !== $request->totalOrderPrice) {
            @$body['total_order_price'] = $request->totalOrderPrice;
        }

        if (null !== $request->validateResKey) {
            @$body['validate_res_key'] = $request->validateResKey;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripCorpToken) {
            @$realHeaders['x-acs-btrip-corp-token'] = '' . $headers->xAcsBtripCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'HotelOrderCreate',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/dtb-hotel/v1/orders/action/create',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return HotelOrderCreateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 酒店订单创建.
     *
     * @param request - HotelOrderCreateRequest
     *
     * @returns HotelOrderCreateResponse
     *
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
     * 酒店订单明细信息.
     *
     * @param request - HotelOrderDetailInfoRequest
     * @param headers - HotelOrderDetailInfoHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns HotelOrderDetailInfoResponse
     *
     * @param HotelOrderDetailInfoRequest $request
     * @param HotelOrderDetailInfoHeaders $headers
     * @param RuntimeOptions              $runtime
     *
     * @return HotelOrderDetailInfoResponse
     */
    public function hotelOrderDetailInfoWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->btripOrderId) {
            @$query['btrip_order_id'] = $request->btripOrderId;
        }

        if (null !== $request->disOrderId) {
            @$query['dis_order_id'] = $request->disOrderId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripCorpToken) {
            @$realHeaders['x-acs-btrip-corp-token'] = '' . $headers->xAcsBtripCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'HotelOrderDetailInfo',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/dtb-hotel/v1/orders/action/detail',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return HotelOrderDetailInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 酒店订单明细信息.
     *
     * @param request - HotelOrderDetailInfoRequest
     *
     * @returns HotelOrderDetailInfoResponse
     *
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
     * 自营酒店订单查询.
     *
     * @param headers - HotelOrderInfoQueryHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns HotelOrderInfoQueryResponse
     *
     * @param string                     $orderId
     * @param HotelOrderInfoQueryHeaders $headers
     * @param RuntimeOptions             $runtime
     *
     * @return HotelOrderInfoQueryResponse
     */
    public function hotelOrderInfoQueryWithOptions($orderId, $headers, $runtime)
    {
        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripCorpToken) {
            @$realHeaders['x-acs-btrip-corp-token'] = '' . $headers->xAcsBtripCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
        ]);
        $params = new Params([
            'action' => 'HotelOrderInfoQuery',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/order/v1/hotelOrders/' . Url::percentEncode($orderId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return HotelOrderInfoQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 自营酒店订单查询.
     *
     * @returns HotelOrderInfoQueryResponse
     *
     * @param string $orderId
     *
     * @return HotelOrderInfoQueryResponse
     */
    public function hotelOrderInfoQuery($orderId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new HotelOrderInfoQueryHeaders([]);

        return $this->hotelOrderInfoQueryWithOptions($orderId, $headers, $runtime);
    }

    /**
     * 查询酒店订单列表.
     *
     * @param request - HotelOrderListQueryRequest
     * @param headers - HotelOrderListQueryHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns HotelOrderListQueryResponse
     *
     * @param HotelOrderListQueryRequest $request
     * @param HotelOrderListQueryHeaders $headers
     * @param RuntimeOptions             $runtime
     *
     * @return HotelOrderListQueryResponse
     */
    public function hotelOrderListQueryWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->allApply) {
            @$query['all_apply'] = $request->allApply;
        }

        if (null !== $request->applyId) {
            @$query['apply_id'] = $request->applyId;
        }

        if (null !== $request->category) {
            @$query['category'] = $request->category;
        }

        if (null !== $request->departId) {
            @$query['depart_id'] = $request->departId;
        }

        if (null !== $request->endTime) {
            @$query['end_time'] = $request->endTime;
        }

        if (null !== $request->page) {
            @$query['page'] = $request->page;
        }

        if (null !== $request->pageSize) {
            @$query['page_size'] = $request->pageSize;
        }

        if (null !== $request->startTime) {
            @$query['start_time'] = $request->startTime;
        }

        if (null !== $request->thirdpartApplyId) {
            @$query['thirdpart_apply_id'] = $request->thirdpartApplyId;
        }

        if (null !== $request->updateEndTime) {
            @$query['update_end_time'] = $request->updateEndTime;
        }

        if (null !== $request->updateStartTime) {
            @$query['update_start_time'] = $request->updateStartTime;
        }

        if (null !== $request->userId) {
            @$query['user_id'] = $request->userId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripSoCorpToken) {
            @$realHeaders['x-acs-btrip-so-corp-token'] = '' . $headers->xAcsBtripSoCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'HotelOrderListQuery',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/hotel/v1/order-list',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return HotelOrderListQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询酒店订单列表.
     *
     * @param request - HotelOrderListQueryRequest
     *
     * @returns HotelOrderListQueryResponse
     *
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
     * 酒店订单支付.
     *
     * @param request - HotelOrderPayRequest
     * @param headers - HotelOrderPayHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns HotelOrderPayResponse
     *
     * @param HotelOrderPayRequest $request
     * @param HotelOrderPayHeaders $headers
     * @param RuntimeOptions       $runtime
     *
     * @return HotelOrderPayResponse
     */
    public function hotelOrderPayWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->btripOrderId) {
            @$body['btrip_order_id'] = $request->btripOrderId;
        }

        if (null !== $request->btripUserId) {
            @$body['btrip_user_id'] = $request->btripUserId;
        }

        if (null !== $request->companyPayFee) {
            @$body['company_pay_fee'] = $request->companyPayFee;
        }

        if (null !== $request->personPayFee) {
            @$body['person_pay_fee'] = $request->personPayFee;
        }

        if (null !== $request->thirdPayAccount) {
            @$body['third_pay_account'] = $request->thirdPayAccount;
        }

        if (null !== $request->thirdTradeNo) {
            @$body['third_trade_no'] = $request->thirdTradeNo;
        }

        if (null !== $request->totalPrice) {
            @$body['total_price'] = $request->totalPrice;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripCorpToken) {
            @$realHeaders['x-acs-btrip-corp-token'] = '' . $headers->xAcsBtripCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'HotelOrderPay',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/dtb-hotel/v1/orders/action/pay',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return HotelOrderPayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 酒店订单支付.
     *
     * @param request - HotelOrderPayRequest
     *
     * @returns HotelOrderPayResponse
     *
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
     * 酒店下单前校验.
     *
     * @param tmpReq - HotelOrderPreValidateRequest
     * @param headers - HotelOrderPreValidateHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns HotelOrderPreValidateResponse
     *
     * @param HotelOrderPreValidateRequest $tmpReq
     * @param HotelOrderPreValidateHeaders $headers
     * @param RuntimeOptions               $runtime
     *
     * @return HotelOrderPreValidateResponse
     */
    public function hotelOrderPreValidateWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new HotelOrderPreValidateShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->dailyList) {
            $request->dailyListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->dailyList, 'daily_list', 'json');
        }

        if (null !== $tmpReq->occupantInfoList) {
            $request->occupantInfoListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->occupantInfoList, 'occupant_info_list', 'json');
        }

        $query = [];
        if (null !== $request->btripUserId) {
            @$query['btrip_user_id'] = $request->btripUserId;
        }

        if (null !== $request->checkIn) {
            @$query['check_in'] = $request->checkIn;
        }

        if (null !== $request->checkOut) {
            @$query['check_out'] = $request->checkOut;
        }

        if (null !== $request->dailyListShrink) {
            @$query['daily_list'] = $request->dailyListShrink;
        }

        if (null !== $request->itemId) {
            @$query['item_id'] = $request->itemId;
        }

        if (null !== $request->numberOfAdultsPerRoom) {
            @$query['number_of_adults_per_room'] = $request->numberOfAdultsPerRoom;
        }

        if (null !== $request->occupantInfoListShrink) {
            @$query['occupant_info_list'] = $request->occupantInfoListShrink;
        }

        if (null !== $request->ratePlanId) {
            @$query['rate_plan_id'] = $request->ratePlanId;
        }

        if (null !== $request->roomId) {
            @$query['room_id'] = $request->roomId;
        }

        if (null !== $request->roomNum) {
            @$query['room_num'] = $request->roomNum;
        }

        if (null !== $request->searchRoomPrice) {
            @$query['search_room_price'] = $request->searchRoomPrice;
        }

        if (null !== $request->sellerId) {
            @$query['seller_id'] = $request->sellerId;
        }

        if (null !== $request->shid) {
            @$query['shid'] = $request->shid;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripCorpToken) {
            @$realHeaders['x-acs-btrip-corp-token'] = '' . $headers->xAcsBtripCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'HotelOrderPreValidate',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/dtb-hotel/v1/orders/action/pre-validate',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return HotelOrderPreValidateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 酒店下单前校验.
     *
     * @param request - HotelOrderPreValidateRequest
     *
     * @returns HotelOrderPreValidateResponse
     *
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
     * 酒店订单查询.
     *
     * @param request - HotelOrderQueryRequest
     * @param headers - HotelOrderQueryHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns HotelOrderQueryResponse
     *
     * @param HotelOrderQueryRequest $request
     * @param HotelOrderQueryHeaders $headers
     * @param RuntimeOptions         $runtime
     *
     * @return HotelOrderQueryResponse
     */
    public function hotelOrderQueryWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->orderId) {
            @$query['order_id'] = $request->orderId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripSoCorpToken) {
            @$realHeaders['x-acs-btrip-so-corp-token'] = '' . $headers->xAcsBtripSoCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'HotelOrderQuery',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/hotel/v1/order',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return HotelOrderQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 酒店订单查询.
     *
     * @param request - HotelOrderQueryRequest
     *
     * @returns HotelOrderQueryResponse
     *
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
     * 酒店拉动态拉取价格接口(落地).
     *
     * @param tmpReq - HotelPricePullRequest
     * @param headers - HotelPricePullHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns HotelPricePullResponse
     *
     * @param HotelPricePullRequest $tmpReq
     * @param HotelPricePullHeaders $headers
     * @param RuntimeOptions        $runtime
     *
     * @return HotelPricePullResponse
     */
    public function hotelPricePullWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new HotelPricePullShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->hotelIds) {
            $request->hotelIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->hotelIds, 'hotel_ids', 'json');
        }

        $query = [];
        if (null !== $request->btripUserId) {
            @$query['btrip_user_id'] = $request->btripUserId;
        }

        if (null !== $request->checkIn) {
            @$query['check_in'] = $request->checkIn;
        }

        if (null !== $request->checkOut) {
            @$query['check_out'] = $request->checkOut;
        }

        if (null !== $request->cityCode) {
            @$query['city_code'] = $request->cityCode;
        }

        if (null !== $request->hotelIdsShrink) {
            @$query['hotel_ids'] = $request->hotelIdsShrink;
        }

        if (null !== $request->paymentType) {
            @$query['payment_type'] = $request->paymentType;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripCorpToken) {
            @$realHeaders['x-acs-btrip-corp-token'] = '' . $headers->xAcsBtripCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'HotelPricePull',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/dtb-hotel/v1/prices/action/pull',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return HotelPricePullResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 酒店拉动态拉取价格接口(落地).
     *
     * @param request - HotelPricePullRequest
     *
     * @returns HotelPricePullResponse
     *
     * @param HotelPricePullRequest $request
     *
     * @return HotelPricePullResponse
     */
    public function hotelPricePull($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new HotelPricePullHeaders([]);

        return $this->hotelPricePullWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取酒店静态房型详情.
     *
     * @param tmpReq - HotelRoomInfoRequest
     * @param headers - HotelRoomInfoHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns HotelRoomInfoResponse
     *
     * @param HotelRoomInfoRequest $tmpReq
     * @param HotelRoomInfoHeaders $headers
     * @param RuntimeOptions       $runtime
     *
     * @return HotelRoomInfoResponse
     */
    public function hotelRoomInfoWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new HotelRoomInfoShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->roomIds) {
            $request->roomIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->roomIds, 'room_ids', 'json');
        }

        $query = [];
        if (null !== $request->roomIdsShrink) {
            @$query['room_ids'] = $request->roomIdsShrink;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripCorpToken) {
            @$realHeaders['x-acs-btrip-corp-token'] = '' . $headers->xAcsBtripCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'HotelRoomInfo',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/dtb-hotel/v1/room-infos',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return HotelRoomInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取酒店静态房型详情.
     *
     * @param request - HotelRoomInfoRequest
     *
     * @returns HotelRoomInfoResponse
     *
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
     * 酒店列表搜索接口(直连).
     *
     * @param tmpReq - HotelSearchRequest
     * @param headers - HotelSearchHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns HotelSearchResponse
     *
     * @param HotelSearchRequest $tmpReq
     * @param HotelSearchHeaders $headers
     * @param RuntimeOptions     $runtime
     *
     * @return HotelSearchResponse
     */
    public function hotelSearchWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new HotelSearchShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->brandCode) {
            $request->brandCodeShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->brandCode, 'brand_code', 'json');
        }

        if (null !== $tmpReq->shids) {
            $request->shidsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->shids, 'shids', 'json');
        }

        $query = [];
        if (null !== $request->adultNum) {
            @$query['adult_num'] = $request->adultNum;
        }

        if (null !== $request->brandCodeShrink) {
            @$query['brand_code'] = $request->brandCodeShrink;
        }

        if (null !== $request->btripUserId) {
            @$query['btrip_user_id'] = $request->btripUserId;
        }

        if (null !== $request->checkInDate) {
            @$query['check_in_date'] = $request->checkInDate;
        }

        if (null !== $request->checkOutDate) {
            @$query['check_out_date'] = $request->checkOutDate;
        }

        if (null !== $request->cityCode) {
            @$query['city_code'] = $request->cityCode;
        }

        if (null !== $request->dir) {
            @$query['dir'] = $request->dir;
        }

        if (null !== $request->distance) {
            @$query['distance'] = $request->distance;
        }

        if (null !== $request->districtCode) {
            @$query['district_code'] = $request->districtCode;
        }

        if (null !== $request->hotelStar) {
            @$query['hotel_star'] = $request->hotelStar;
        }

        if (null !== $request->isProtocol) {
            @$query['is_protocol'] = $request->isProtocol;
        }

        if (null !== $request->keyWords) {
            @$query['key_words'] = $request->keyWords;
        }

        if (null !== $request->location) {
            @$query['location'] = $request->location;
        }

        if (null !== $request->maxPrice) {
            @$query['max_price'] = $request->maxPrice;
        }

        if (null !== $request->minPrice) {
            @$query['min_price'] = $request->minPrice;
        }

        if (null !== $request->pageNo) {
            @$query['page_no'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['page_size'] = $request->pageSize;
        }

        if (null !== $request->payOverType) {
            @$query['pay_over_type'] = $request->payOverType;
        }

        if (null !== $request->paymentType) {
            @$query['payment_type'] = $request->paymentType;
        }

        if (null !== $request->shidsShrink) {
            @$query['shids'] = $request->shidsShrink;
        }

        if (null !== $request->sortCode) {
            @$query['sort_code'] = $request->sortCode;
        }

        if (null !== $request->superMan) {
            @$query['super_man'] = $request->superMan;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripCorpToken) {
            @$realHeaders['x-acs-btrip-corp-token'] = '' . $headers->xAcsBtripCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'HotelSearch',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/dtb-hotel/v1/hotels/action/search',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return HotelSearchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 酒店列表搜索接口(直连).
     *
     * @param request - HotelSearchRequest
     *
     * @returns HotelSearchResponse
     *
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
     * 查询酒店静态详情.
     *
     * @param tmpReq - HotelStaticInfoRequest
     * @param headers - HotelStaticInfoHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns HotelStaticInfoResponse
     *
     * @param HotelStaticInfoRequest $tmpReq
     * @param HotelStaticInfoHeaders $headers
     * @param RuntimeOptions         $runtime
     *
     * @return HotelStaticInfoResponse
     */
    public function hotelStaticInfoWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new HotelStaticInfoShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->hotelIds) {
            $request->hotelIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->hotelIds, 'hotel_ids', 'json');
        }

        $query = [];
        if (null !== $request->hotelIdsShrink) {
            @$query['hotel_ids'] = $request->hotelIdsShrink;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripCorpToken) {
            @$realHeaders['x-acs-btrip-corp-token'] = '' . $headers->xAcsBtripCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'HotelStaticInfo',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/dtb-hotel/v1/static-infos',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return HotelStaticInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询酒店静态详情.
     *
     * @param request - HotelStaticInfoRequest
     *
     * @returns HotelStaticInfoResponse
     *
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
     * 酒店关键词搜索.
     *
     * @param request - HotelSuggestV2Request
     * @param headers - HotelSuggestV2Headers
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns HotelSuggestV2Response
     *
     * @param HotelSuggestV2Request $request
     * @param HotelSuggestV2Headers $headers
     * @param RuntimeOptions        $runtime
     *
     * @return HotelSuggestV2Response
     */
    public function hotelSuggestV2WithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->btripUserId) {
            @$query['btrip_user_id'] = $request->btripUserId;
        }

        if (null !== $request->checkIn) {
            @$query['check_in'] = $request->checkIn;
        }

        if (null !== $request->checkOut) {
            @$query['check_out'] = $request->checkOut;
        }

        if (null !== $request->cityCode) {
            @$query['city_code'] = $request->cityCode;
        }

        if (null !== $request->keyword) {
            @$query['keyword'] = $request->keyword;
        }

        if (null !== $request->searchType) {
            @$query['search_type'] = $request->searchType;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripCorpToken) {
            @$realHeaders['x-acs-btrip-corp-token'] = '' . $headers->xAcsBtripCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'HotelSuggestV2',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/dtb-hotel/v2/suggest-infos',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return HotelSuggestV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 酒店关键词搜索.
     *
     * @param request - HotelSuggestV2Request
     *
     * @returns HotelSuggestV2Response
     *
     * @param HotelSuggestV2Request $request
     *
     * @return HotelSuggestV2Response
     */
    public function hotelSuggestV2($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new HotelSuggestV2Headers([]);

        return $this->hotelSuggestV2WithOptions($request, $headers, $runtime);
    }

    /**
     * 国际机票订单详情.
     *
     * @param request - IFlightOrderDetailQueryRequest
     * @param headers - IFlightOrderDetailQueryHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns IFlightOrderDetailQueryResponse
     *
     * @param IFlightOrderDetailQueryRequest $request
     * @param IFlightOrderDetailQueryHeaders $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return IFlightOrderDetailQueryResponse
     */
    public function iFlightOrderDetailQueryWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->orderId) {
            @$query['order_id'] = $request->orderId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripCorpToken) {
            @$realHeaders['x-acs-btrip-corp-token'] = '' . $headers->xAcsBtripCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'IFlightOrderDetailQuery',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/open/v1/intlFlight-order-detail-query',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return IFlightOrderDetailQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 国际机票订单详情.
     *
     * @param request - IFlightOrderDetailQueryRequest
     *
     * @returns IFlightOrderDetailQueryResponse
     *
     * @param IFlightOrderDetailQueryRequest $request
     *
     * @return IFlightOrderDetailQueryResponse
     */
    public function iFlightOrderDetailQuery($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new IFlightOrderDetailQueryHeaders([]);

        return $this->iFlightOrderDetailQueryWithOptions($request, $headers, $runtime);
    }

    /**
     * 国际机票订单列表.
     *
     * @param tmpReq - IFlightOrderListQueryRequest
     * @param headers - IFlightOrderListQueryHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns IFlightOrderListQueryResponse
     *
     * @param IFlightOrderListQueryRequest $tmpReq
     * @param IFlightOrderListQueryHeaders $headers
     * @param RuntimeOptions               $runtime
     *
     * @return IFlightOrderListQueryResponse
     */
    public function iFlightOrderListQueryWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new IFlightOrderListQueryShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->applyIdList) {
            $request->applyIdListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->applyIdList, 'apply_id_list', 'json');
        }

        if (null !== $tmpReq->bookTypeList) {
            $request->bookTypeListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->bookTypeList, 'book_type_list', 'json');
        }

        if (null !== $tmpReq->bookerId) {
            $request->bookerIdShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->bookerId, 'booker_id', 'json');
        }

        if (null !== $tmpReq->thirdPartApplyIdList) {
            $request->thirdPartApplyIdListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->thirdPartApplyIdList, 'third_part_apply_id_list', 'json');
        }

        $query = [];
        if (null !== $request->applyIdListShrink) {
            @$query['apply_id_list'] = $request->applyIdListShrink;
        }

        if (null !== $request->bookTypeListShrink) {
            @$query['book_type_list'] = $request->bookTypeListShrink;
        }

        if (null !== $request->bookerIdShrink) {
            @$query['booker_id'] = $request->bookerIdShrink;
        }

        if (null !== $request->endDate) {
            @$query['end_date'] = $request->endDate;
        }

        if (null !== $request->pageSize) {
            @$query['page_size'] = $request->pageSize;
        }

        if (null !== $request->scrollId) {
            @$query['scroll_id'] = $request->scrollId;
        }

        if (null !== $request->startDate) {
            @$query['start_date'] = $request->startDate;
        }

        if (null !== $request->thirdPartApplyIdListShrink) {
            @$query['third_part_apply_id_list'] = $request->thirdPartApplyIdListShrink;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripCorpToken) {
            @$realHeaders['x-acs-btrip-corp-token'] = '' . $headers->xAcsBtripCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'IFlightOrderListQuery',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/open/v1/intlFlight-order-list-query',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return IFlightOrderListQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 国际机票订单列表.
     *
     * @param request - IFlightOrderListQueryRequest
     *
     * @returns IFlightOrderListQueryResponse
     *
     * @param IFlightOrderListQueryRequest $request
     *
     * @return IFlightOrderListQueryResponse
     */
    public function iFlightOrderListQuery($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new IFlightOrderListQueryHeaders([]);

        return $this->iFlightOrderListQueryWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询国际机票记账数据.
     *
     * @param request - IeFlightBillSettlementQueryRequest
     * @param headers - IeFlightBillSettlementQueryHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns IeFlightBillSettlementQueryResponse
     *
     * @param IeFlightBillSettlementQueryRequest $request
     * @param IeFlightBillSettlementQueryHeaders $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return IeFlightBillSettlementQueryResponse
     */
    public function ieFlightBillSettlementQueryWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->billBatch) {
            @$query['bill_batch'] = $request->billBatch;
        }

        if (null !== $request->orderId) {
            @$query['order_id'] = $request->orderId;
        }

        if (null !== $request->pageNo) {
            @$query['page_no'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['page_size'] = $request->pageSize;
        }

        if (null !== $request->periodEnd) {
            @$query['period_end'] = $request->periodEnd;
        }

        if (null !== $request->periodStart) {
            @$query['period_start'] = $request->periodStart;
        }

        if (null !== $request->scrollId) {
            @$query['scroll_id'] = $request->scrollId;
        }

        if (null !== $request->scrollMod) {
            @$query['scroll_mod'] = $request->scrollMod;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripSoCorpToken) {
            @$realHeaders['x-acs-btrip-so-corp-token'] = '' . $headers->xAcsBtripSoCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'IeFlightBillSettlementQuery',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/ie-flight/v1/bill-settlement',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return IeFlightBillSettlementQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询国际机票记账数据.
     *
     * @param request - IeFlightBillSettlementQueryRequest
     *
     * @returns IeFlightBillSettlementQueryResponse
     *
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
     * 查询国际/中国港澳台酒店记账数据.
     *
     * @param request - IeHotelBillSettlementQueryRequest
     * @param headers - IeHotelBillSettlementQueryHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns IeHotelBillSettlementQueryResponse
     *
     * @param IeHotelBillSettlementQueryRequest $request
     * @param IeHotelBillSettlementQueryHeaders $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return IeHotelBillSettlementQueryResponse
     */
    public function ieHotelBillSettlementQueryWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->billBatch) {
            @$query['bill_batch'] = $request->billBatch;
        }

        if (null !== $request->category) {
            @$query['category'] = $request->category;
        }

        if (null !== $request->orderId) {
            @$query['order_id'] = $request->orderId;
        }

        if (null !== $request->pageNo) {
            @$query['page_no'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['page_size'] = $request->pageSize;
        }

        if (null !== $request->periodEnd) {
            @$query['period_end'] = $request->periodEnd;
        }

        if (null !== $request->periodStart) {
            @$query['period_start'] = $request->periodStart;
        }

        if (null !== $request->scrollId) {
            @$query['scroll_id'] = $request->scrollId;
        }

        if (null !== $request->scrollMod) {
            @$query['scroll_mod'] = $request->scrollMod;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripSoCorpToken) {
            @$realHeaders['x-acs-btrip-so-corp-token'] = '' . $headers->xAcsBtripSoCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'IeHotelBillSettlementQuery',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/ie-hotel/v1/bill-settlement',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return IeHotelBillSettlementQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询国际/中国港澳台酒店记账数据.
     *
     * @param request - IeHotelBillSettlementQueryRequest
     *
     * @returns IeHotelBillSettlementQueryResponse
     *
     * @param IeHotelBillSettlementQueryRequest $request
     *
     * @return IeHotelBillSettlementQueryResponse
     */
    public function ieHotelBillSettlementQuery($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new IeHotelBillSettlementQueryHeaders([]);

        return $this->ieHotelBillSettlementQueryWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询保险电子发票.
     *
     * @param request - InsInvoiceScanQueryRequest
     * @param headers - InsInvoiceScanQueryHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns InsInvoiceScanQueryResponse
     *
     * @param InsInvoiceScanQueryRequest $request
     * @param InsInvoiceScanQueryHeaders $headers
     * @param RuntimeOptions             $runtime
     *
     * @return InsInvoiceScanQueryResponse
     */
    public function insInvoiceScanQueryWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->billDate) {
            @$query['bill_date'] = $request->billDate;
        }

        if (null !== $request->billId) {
            @$query['bill_id'] = $request->billId;
        }

        if (null !== $request->invoiceSubTaskId) {
            @$query['invoice_sub_task_id'] = $request->invoiceSubTaskId;
        }

        if (null !== $request->pageNo) {
            @$query['page_no'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['page_size'] = $request->pageSize;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripSoCorpToken) {
            @$realHeaders['x-acs-btrip-so-corp-token'] = '' . $headers->xAcsBtripSoCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'InsInvoiceScanQuery',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/scan/v1/ins-invoice',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return InsInvoiceScanQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询保险电子发票.
     *
     * @param request - InsInvoiceScanQueryRequest
     *
     * @returns InsInvoiceScanQueryResponse
     *
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
     * 保险订单申请.
     *
     * @param request - InsureOrderApplyRequest
     * @param headers - InsureOrderApplyHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns InsureOrderApplyResponse
     *
     * @param InsureOrderApplyRequest $request
     * @param InsureOrderApplyHeaders $headers
     * @param RuntimeOptions          $runtime
     *
     * @return InsureOrderApplyResponse
     */
    public function insureOrderApplyWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->btripUserId) {
            @$body['btrip_user_id'] = $request->btripUserId;
        }

        if (null !== $request->buyerName) {
            @$body['buyer_name'] = $request->buyerName;
        }

        if (null !== $request->insOrderId) {
            @$body['ins_order_id'] = $request->insOrderId;
        }

        if (null !== $request->isvName) {
            @$body['isv_name'] = $request->isvName;
        }

        if (null !== $request->outOrderId) {
            @$body['out_order_id'] = $request->outOrderId;
        }

        if (null !== $request->outSubOrderId) {
            @$body['out_sub_order_id'] = $request->outSubOrderId;
        }

        if (null !== $request->supplierCode) {
            @$body['supplier_code'] = $request->supplierCode;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripCorpToken) {
            @$realHeaders['x-acs-btrip-corp-token'] = '' . $headers->xAcsBtripCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'InsureOrderApply',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/dtb-flight/v1/insurances/action/apply',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return InsureOrderApplyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 保险订单申请.
     *
     * @param request - InsureOrderApplyRequest
     *
     * @returns InsureOrderApplyResponse
     *
     * @param InsureOrderApplyRequest $request
     *
     * @return InsureOrderApplyResponse
     */
    public function insureOrderApply($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new InsureOrderApplyHeaders([]);

        return $this->insureOrderApplyWithOptions($request, $headers, $runtime);
    }

    /**
     * 保险订单取消.
     *
     * @param request - InsureOrderCancelRequest
     * @param headers - InsureOrderCancelHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns InsureOrderCancelResponse
     *
     * @param string                   $insOrderId
     * @param InsureOrderCancelRequest $request
     * @param InsureOrderCancelHeaders $headers
     * @param RuntimeOptions           $runtime
     *
     * @return InsureOrderCancelResponse
     */
    public function insureOrderCancelWithOptions($insOrderId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->btripUserId) {
            @$query['btrip_user_id'] = $request->btripUserId;
        }

        if (null !== $request->buyerName) {
            @$query['buyer_name'] = $request->buyerName;
        }

        if (null !== $request->isvName) {
            @$query['isv_name'] = $request->isvName;
        }

        if (null !== $request->supplierCode) {
            @$query['supplier_code'] = $request->supplierCode;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripCorpToken) {
            @$realHeaders['x-acs-btrip-corp-token'] = '' . $headers->xAcsBtripCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'InsureOrderCancel',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/dtb-flight/v1/insurances/' . Url::percentEncode($insOrderId) . '/action/cancel',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return InsureOrderCancelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 保险订单取消.
     *
     * @param request - InsureOrderCancelRequest
     *
     * @returns InsureOrderCancelResponse
     *
     * @param string                   $insOrderId
     * @param InsureOrderCancelRequest $request
     *
     * @return InsureOrderCancelResponse
     */
    public function insureOrderCancel($insOrderId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new InsureOrderCancelHeaders([]);

        return $this->insureOrderCancelWithOptions($insOrderId, $request, $headers, $runtime);
    }

    /**
     * 保险订单创建.
     *
     * @param tmpReq - InsureOrderCreateRequest
     * @param headers - InsureOrderCreateHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns InsureOrderCreateResponse
     *
     * @param InsureOrderCreateRequest $tmpReq
     * @param InsureOrderCreateHeaders $headers
     * @param RuntimeOptions           $runtime
     *
     * @return InsureOrderCreateResponse
     */
    public function insureOrderCreateWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new InsureOrderCreateShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->applicant) {
            $request->applicantShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->applicant, 'applicant', 'json');
        }

        if (null !== $tmpReq->insPersonAndSegmentList) {
            $request->insPersonAndSegmentListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->insPersonAndSegmentList, 'ins_person_and_segment_list', 'json');
        }

        $body = [];
        if (null !== $request->applicantShrink) {
            @$body['applicant'] = $request->applicantShrink;
        }

        if (null !== $request->btripUserId) {
            @$body['btrip_user_id'] = $request->btripUserId;
        }

        if (null !== $request->buyerName) {
            @$body['buyer_name'] = $request->buyerName;
        }

        if (null !== $request->insPersonAndSegmentListShrink) {
            @$body['ins_person_and_segment_list'] = $request->insPersonAndSegmentListShrink;
        }

        if (null !== $request->isvName) {
            @$body['isv_name'] = $request->isvName;
        }

        if (null !== $request->outInsOrderId) {
            @$body['out_ins_order_id'] = $request->outInsOrderId;
        }

        if (null !== $request->outOrderId) {
            @$body['out_order_id'] = $request->outOrderId;
        }

        if (null !== $request->outSubOrderId) {
            @$body['out_sub_order_id'] = $request->outSubOrderId;
        }

        if (null !== $request->supplierCode) {
            @$body['supplier_code'] = $request->supplierCode;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripCorpToken) {
            @$realHeaders['x-acs-btrip-corp-token'] = '' . $headers->xAcsBtripCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'InsureOrderCreate',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/dtb-flight/v1/insurances/action/create',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return InsureOrderCreateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 保险订单创建.
     *
     * @param request - InsureOrderCreateRequest
     *
     * @returns InsureOrderCreateResponse
     *
     * @param InsureOrderCreateRequest $request
     *
     * @return InsureOrderCreateResponse
     */
    public function insureOrderCreate($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new InsureOrderCreateHeaders([]);

        return $this->insureOrderCreateWithOptions($request, $headers, $runtime);
    }

    /**
     * 保险订单查询.
     *
     * @param request - InsureOrderDetailRequest
     * @param headers - InsureOrderDetailHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns InsureOrderDetailResponse
     *
     * @param InsureOrderDetailRequest $request
     * @param InsureOrderDetailHeaders $headers
     * @param RuntimeOptions           $runtime
     *
     * @return InsureOrderDetailResponse
     */
    public function insureOrderDetailWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->btripUserId) {
            @$query['btrip_user_id'] = $request->btripUserId;
        }

        if (null !== $request->buyerName) {
            @$query['buyer_name'] = $request->buyerName;
        }

        if (null !== $request->insOrderId) {
            @$query['ins_order_id'] = $request->insOrderId;
        }

        if (null !== $request->isvName) {
            @$query['isv_name'] = $request->isvName;
        }

        if (null !== $request->supplierCode) {
            @$query['supplier_code'] = $request->supplierCode;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripCorpToken) {
            @$realHeaders['x-acs-btrip-corp-token'] = '' . $headers->xAcsBtripCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'InsureOrderDetail',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/dtb-flight/v1/insurances/action/detail',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return InsureOrderDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 保险订单查询.
     *
     * @param request - InsureOrderDetailRequest
     *
     * @returns InsureOrderDetailResponse
     *
     * @param InsureOrderDetailRequest $request
     *
     * @return InsureOrderDetailResponse
     */
    public function insureOrderDetail($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new InsureOrderDetailHeaders([]);

        return $this->insureOrderDetailWithOptions($request, $headers, $runtime);
    }

    /**
     * 保险订单支付.
     *
     * @param request - InsureOrderPayRequest
     * @param headers - InsureOrderPayHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns InsureOrderPayResponse
     *
     * @param string                $insOrderId
     * @param InsureOrderPayRequest $request
     * @param InsureOrderPayHeaders $headers
     * @param RuntimeOptions        $runtime
     *
     * @return InsureOrderPayResponse
     */
    public function insureOrderPayWithOptions($insOrderId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->btripUserId) {
            @$body['btrip_user_id'] = $request->btripUserId;
        }

        if (null !== $request->buyerName) {
            @$body['buyer_name'] = $request->buyerName;
        }

        if (null !== $request->isvName) {
            @$body['isv_name'] = $request->isvName;
        }

        if (null !== $request->outOrderId) {
            @$body['out_order_id'] = $request->outOrderId;
        }

        if (null !== $request->outSubOrderId) {
            @$body['out_sub_order_id'] = $request->outSubOrderId;
        }

        if (null !== $request->paymentAmount) {
            @$body['payment_amount'] = $request->paymentAmount;
        }

        if (null !== $request->supplierCode) {
            @$body['supplier_code'] = $request->supplierCode;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripCorpToken) {
            @$realHeaders['x-acs-btrip-corp-token'] = '' . $headers->xAcsBtripCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'InsureOrderPay',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/dtb-flight/v1/insurances/' . Url::percentEncode($insOrderId) . '/action/pay',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return InsureOrderPayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 保险订单支付.
     *
     * @param request - InsureOrderPayRequest
     *
     * @returns InsureOrderPayResponse
     *
     * @param string                $insOrderId
     * @param InsureOrderPayRequest $request
     *
     * @return InsureOrderPayResponse
     */
    public function insureOrderPay($insOrderId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new InsureOrderPayHeaders([]);

        return $this->insureOrderPayWithOptions($insOrderId, $request, $headers, $runtime);
    }

    /**
     * 保险订单退保.
     *
     * @param tmpReq - InsureOrderRefundRequest
     * @param headers - InsureOrderRefundHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns InsureOrderRefundResponse
     *
     * @param string                   $insOrderId
     * @param InsureOrderRefundRequest $tmpReq
     * @param InsureOrderRefundHeaders $headers
     * @param RuntimeOptions           $runtime
     *
     * @return InsureOrderRefundResponse
     */
    public function insureOrderRefundWithOptions($insOrderId, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new InsureOrderRefundShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->policyNoList) {
            $request->policyNoListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->policyNoList, 'policy_no_list', 'json');
        }

        if (null !== $tmpReq->subInsOrderIds) {
            $request->subInsOrderIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->subInsOrderIds, 'sub_ins_order_ids', 'json');
        }

        $body = [];
        if (null !== $request->btripUserId) {
            @$body['btrip_user_id'] = $request->btripUserId;
        }

        if (null !== $request->buyerName) {
            @$body['buyer_name'] = $request->buyerName;
        }

        if (null !== $request->isvName) {
            @$body['isv_name'] = $request->isvName;
        }

        if (null !== $request->outApplyId) {
            @$body['out_apply_id'] = $request->outApplyId;
        }

        if (null !== $request->policyNoListShrink) {
            @$body['policy_no_list'] = $request->policyNoListShrink;
        }

        if (null !== $request->subInsOrderIdsShrink) {
            @$body['sub_ins_order_ids'] = $request->subInsOrderIdsShrink;
        }

        if (null !== $request->supplierCode) {
            @$body['supplier_code'] = $request->supplierCode;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripCorpToken) {
            @$realHeaders['x-acs-btrip-corp-token'] = '' . $headers->xAcsBtripCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'InsureOrderRefund',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/dtb-flight/v1/insurances/' . Url::percentEncode($insOrderId) . '/action/refund',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return InsureOrderRefundResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 保险订单退保.
     *
     * @param request - InsureOrderRefundRequest
     *
     * @returns InsureOrderRefundResponse
     *
     * @param string                   $insOrderId
     * @param InsureOrderRefundRequest $request
     *
     * @return InsureOrderRefundResponse
     */
    public function insureOrderRefund($insOrderId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new InsureOrderRefundHeaders([]);

        return $this->insureOrderRefundWithOptions($insOrderId, $request, $headers, $runtime);
    }

    /**
     * 查询保单详情链接.
     *
     * @param headers - InsureOrderUrlDetailHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns InsureOrderUrlDetailResponse
     *
     * @param string                      $insOrderId
     * @param InsureOrderUrlDetailHeaders $headers
     * @param RuntimeOptions              $runtime
     *
     * @return InsureOrderUrlDetailResponse
     */
    public function insureOrderUrlDetailWithOptions($insOrderId, $headers, $runtime)
    {
        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripCorpToken) {
            @$realHeaders['x-acs-btrip-corp-token'] = '' . $headers->xAcsBtripCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
        ]);
        $params = new Params([
            'action' => 'InsureOrderUrlDetail',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/dtb-flight/v1/insurances/' . Url::percentEncode($insOrderId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return InsureOrderUrlDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询保单详情链接.
     *
     * @returns InsureOrderUrlDetailResponse
     *
     * @param string $insOrderId
     *
     * @return InsureOrderUrlDetailResponse
     */
    public function insureOrderUrlDetail($insOrderId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new InsureOrderUrlDetailHeaders([]);

        return $this->insureOrderUrlDetailWithOptions($insOrderId, $headers, $runtime);
    }

    /**
     * 退保详情查询.
     *
     * @param request - InsureRefundDetailRequest
     * @param headers - InsureRefundDetailHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns InsureRefundDetailResponse
     *
     * @param InsureRefundDetailRequest $request
     * @param InsureRefundDetailHeaders $headers
     * @param RuntimeOptions            $runtime
     *
     * @return InsureRefundDetailResponse
     */
    public function insureRefundDetailWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applyId) {
            @$query['apply_id'] = $request->applyId;
        }

        if (null !== $request->btripUserId) {
            @$query['btrip_user_id'] = $request->btripUserId;
        }

        if (null !== $request->buyerName) {
            @$query['buyer_name'] = $request->buyerName;
        }

        if (null !== $request->insOrderId) {
            @$query['ins_order_id'] = $request->insOrderId;
        }

        if (null !== $request->isvName) {
            @$query['isv_name'] = $request->isvName;
        }

        if (null !== $request->outApplyId) {
            @$query['out_apply_id'] = $request->outApplyId;
        }

        if (null !== $request->supplierCode) {
            @$query['supplier_code'] = $request->supplierCode;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripCorpToken) {
            @$realHeaders['x-acs-btrip-corp-token'] = '' . $headers->xAcsBtripCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'InsureRefundDetail',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/dtb-flight/v1/insurances/action/refund-detail',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return InsureRefundDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 退保详情查询.
     *
     * @param request - InsureRefundDetailRequest
     *
     * @returns InsureRefundDetailResponse
     *
     * @param InsureRefundDetailRequest $request
     *
     * @return InsureRefundDetailResponse
     */
    public function insureRefundDetail($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new InsureRefundDetailHeaders([]);

        return $this->insureRefundDetailWithOptions($request, $headers, $runtime);
    }

    /**
     * 国际机票创建订单.
     *
     * @param tmpReq - IntlFlightCreateOrderRequest
     * @param headers - IntlFlightCreateOrderHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns IntlFlightCreateOrderResponse
     *
     * @param IntlFlightCreateOrderRequest $tmpReq
     * @param IntlFlightCreateOrderHeaders $headers
     * @param RuntimeOptions               $runtime
     *
     * @return IntlFlightCreateOrderResponse
     */
    public function intlFlightCreateOrderWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new IntlFlightCreateOrderShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->contactInfo) {
            $request->contactInfoShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->contactInfo, 'contact_info', 'json');
        }

        if (null !== $tmpReq->extraInfo) {
            $request->extraInfoShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->extraInfo, 'extra_info', 'json');
        }

        if (null !== $tmpReq->passengerList) {
            $request->passengerListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->passengerList, 'passenger_list', 'json');
        }

        $body = [];
        if (null !== $request->asyncCreateOrderKey) {
            @$body['async_create_order_key'] = $request->asyncCreateOrderKey;
        }

        if (null !== $request->asyncCreateOrderMode) {
            @$body['async_create_order_mode'] = $request->asyncCreateOrderMode;
        }

        if (null !== $request->btripUserId) {
            @$body['btrip_user_id'] = $request->btripUserId;
        }

        if (null !== $request->buyerName) {
            @$body['buyer_name'] = $request->buyerName;
        }

        if (null !== $request->contactInfoShrink) {
            @$body['contact_info'] = $request->contactInfoShrink;
        }

        if (null !== $request->extraInfoShrink) {
            @$body['extra_info'] = $request->extraInfoShrink;
        }

        if (null !== $request->isvName) {
            @$body['isv_name'] = $request->isvName;
        }

        if (null !== $request->orderPrice) {
            @$body['order_price'] = $request->orderPrice;
        }

        if (null !== $request->otaItemId) {
            @$body['ota_item_id'] = $request->otaItemId;
        }

        if (null !== $request->outOrderId) {
            @$body['out_order_id'] = $request->outOrderId;
        }

        if (null !== $request->passengerListShrink) {
            @$body['passenger_list'] = $request->passengerListShrink;
        }

        if (null !== $request->renderKey) {
            @$body['render_key'] = $request->renderKey;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripCorpToken) {
            @$realHeaders['x-acs-btrip-corp-token'] = '' . $headers->xAcsBtripCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'IntlFlightCreateOrder',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/intl-flight/v1/order/action/create',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return IntlFlightCreateOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 国际机票创建订单.
     *
     * @param request - IntlFlightCreateOrderRequest
     *
     * @returns IntlFlightCreateOrderResponse
     *
     * @param IntlFlightCreateOrderRequest $request
     *
     * @return IntlFlightCreateOrderResponse
     */
    public function intlFlightCreateOrder($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new IntlFlightCreateOrderHeaders([]);

        return $this->intlFlightCreateOrderWithOptions($request, $headers, $runtime);
    }

    /**
     * 国际机票验舱验价.
     *
     * @param tmpReq - IntlFlightInventoryPriceCheckRequest
     * @param headers - IntlFlightInventoryPriceCheckHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns IntlFlightInventoryPriceCheckResponse
     *
     * @param IntlFlightInventoryPriceCheckRequest $tmpReq
     * @param IntlFlightInventoryPriceCheckHeaders $headers
     * @param RuntimeOptions                       $runtime
     *
     * @return IntlFlightInventoryPriceCheckResponse
     */
    public function intlFlightInventoryPriceCheckWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new IntlFlightInventoryPriceCheckShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->passengerList) {
            $request->passengerListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->passengerList, 'passenger_list', 'json');
        }

        $query = [];
        if (null !== $request->btripUserId) {
            @$query['btrip_user_id'] = $request->btripUserId;
        }

        if (null !== $request->buyerName) {
            @$query['buyer_name'] = $request->buyerName;
        }

        if (null !== $request->isvName) {
            @$query['isv_name'] = $request->isvName;
        }

        if (null !== $request->orderPrice) {
            @$query['order_price'] = $request->orderPrice;
        }

        if (null !== $request->otaItemId) {
            @$query['ota_item_id'] = $request->otaItemId;
        }

        if (null !== $request->passengerListShrink) {
            @$query['passenger_list'] = $request->passengerListShrink;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripCorpToken) {
            @$realHeaders['x-acs-btrip-corp-token'] = '' . $headers->xAcsBtripCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'IntlFlightInventoryPriceCheck',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/intl-flight/v1/flights/action/inventory-price-check',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return IntlFlightInventoryPriceCheckResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 国际机票验舱验价.
     *
     * @param request - IntlFlightInventoryPriceCheckRequest
     *
     * @returns IntlFlightInventoryPriceCheckResponse
     *
     * @param IntlFlightInventoryPriceCheckRequest $request
     *
     * @return IntlFlightInventoryPriceCheckResponse
     */
    public function intlFlightInventoryPriceCheck($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new IntlFlightInventoryPriceCheckHeaders([]);

        return $this->intlFlightInventoryPriceCheckWithOptions($request, $headers, $runtime);
    }

    /**
     * 国际机票航班搜索.
     *
     * @param tmpReq - IntlFlightListingSearchRequest
     * @param headers - IntlFlightListingSearchHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns IntlFlightListingSearchResponse
     *
     * @param IntlFlightListingSearchRequest $tmpReq
     * @param IntlFlightListingSearchHeaders $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return IntlFlightListingSearchResponse
     */
    public function intlFlightListingSearchWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new IntlFlightListingSearchShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->searchJourneys) {
            $request->searchJourneysShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->searchJourneys, 'search_journeys', 'json');
        }

        if (null !== $tmpReq->searchPassengerList) {
            $request->searchPassengerListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->searchPassengerList, 'search_passenger_list', 'json');
        }

        $query = [];
        if (null !== $request->btripUserId) {
            @$query['btrip_user_id'] = $request->btripUserId;
        }

        if (null !== $request->buyerName) {
            @$query['buyer_name'] = $request->buyerName;
        }

        if (null !== $request->cabinType) {
            @$query['cabin_type'] = $request->cabinType;
        }

        if (null !== $request->isvName) {
            @$query['isv_name'] = $request->isvName;
        }

        if (null !== $request->outWheelSearch) {
            @$query['out_wheel_search'] = $request->outWheelSearch;
        }

        if (null !== $request->queryRecordId) {
            @$query['query_record_id'] = $request->queryRecordId;
        }

        if (null !== $request->searchJourneysShrink) {
            @$query['search_journeys'] = $request->searchJourneysShrink;
        }

        if (null !== $request->searchMode) {
            @$query['search_mode'] = $request->searchMode;
        }

        if (null !== $request->searchPassengerListShrink) {
            @$query['search_passenger_list'] = $request->searchPassengerListShrink;
        }

        if (null !== $request->token) {
            @$query['token'] = $request->token;
        }

        if (null !== $request->tripType) {
            @$query['trip_type'] = $request->tripType;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripCorpToken) {
            @$realHeaders['x-acs-btrip-corp-token'] = '' . $headers->xAcsBtripCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'IntlFlightListingSearch',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/intl-flight/v1/flights/action/listing-search',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return IntlFlightListingSearchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 国际机票航班搜索.
     *
     * @param request - IntlFlightListingSearchRequest
     *
     * @returns IntlFlightListingSearchResponse
     *
     * @param IntlFlightListingSearchRequest $request
     *
     * @return IntlFlightListingSearchResponse
     */
    public function intlFlightListingSearch($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new IntlFlightListingSearchHeaders([]);

        return $this->intlFlightListingSearchWithOptions($request, $headers, $runtime);
    }

    /**
     * 国际机票订单取消.
     *
     * @param request - IntlFlightOrderCancelRequest
     * @param headers - IntlFlightOrderCancelHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns IntlFlightOrderCancelResponse
     *
     * @param IntlFlightOrderCancelRequest $request
     * @param IntlFlightOrderCancelHeaders $headers
     * @param RuntimeOptions               $runtime
     *
     * @return IntlFlightOrderCancelResponse
     */
    public function intlFlightOrderCancelWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->btripUserId) {
            @$body['btrip_user_id'] = $request->btripUserId;
        }

        if (null !== $request->buyerName) {
            @$body['buyer_name'] = $request->buyerName;
        }

        if (null !== $request->isvName) {
            @$body['isv_name'] = $request->isvName;
        }

        if (null !== $request->orderId) {
            @$body['order_id'] = $request->orderId;
        }

        if (null !== $request->outOrderId) {
            @$body['out_order_id'] = $request->outOrderId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripCorpToken) {
            @$realHeaders['x-acs-btrip-corp-token'] = '' . $headers->xAcsBtripCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'IntlFlightOrderCancel',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/intl-flight/v1/order/action/cancel',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return IntlFlightOrderCancelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 国际机票订单取消.
     *
     * @param request - IntlFlightOrderCancelRequest
     *
     * @returns IntlFlightOrderCancelResponse
     *
     * @param IntlFlightOrderCancelRequest $request
     *
     * @return IntlFlightOrderCancelResponse
     */
    public function intlFlightOrderCancel($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new IntlFlightOrderCancelHeaders([]);

        return $this->intlFlightOrderCancelWithOptions($request, $headers, $runtime);
    }

    /**
     * 国际机票订单详情.
     *
     * @param request - IntlFlightOrderDetailRequest
     * @param headers - IntlFlightOrderDetailHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns IntlFlightOrderDetailResponse
     *
     * @param IntlFlightOrderDetailRequest $request
     * @param IntlFlightOrderDetailHeaders $headers
     * @param RuntimeOptions               $runtime
     *
     * @return IntlFlightOrderDetailResponse
     */
    public function intlFlightOrderDetailWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->btripUserId) {
            @$query['btrip_user_id'] = $request->btripUserId;
        }

        if (null !== $request->buyerName) {
            @$query['buyer_name'] = $request->buyerName;
        }

        if (null !== $request->isvName) {
            @$query['isv_name'] = $request->isvName;
        }

        if (null !== $request->orderId) {
            @$query['order_id'] = $request->orderId;
        }

        if (null !== $request->outOrderId) {
            @$query['out_order_id'] = $request->outOrderId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripCorpToken) {
            @$realHeaders['x-acs-btrip-corp-token'] = '' . $headers->xAcsBtripCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'IntlFlightOrderDetail',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/intl-flight/v1/order/action/detail',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return IntlFlightOrderDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 国际机票订单详情.
     *
     * @param request - IntlFlightOrderDetailRequest
     *
     * @returns IntlFlightOrderDetailResponse
     *
     * @param IntlFlightOrderDetailRequest $request
     *
     * @return IntlFlightOrderDetailResponse
     */
    public function intlFlightOrderDetail($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new IntlFlightOrderDetailHeaders([]);

        return $this->intlFlightOrderDetailWithOptions($request, $headers, $runtime);
    }

    /**
     * 国际机票订单支付.
     *
     * @param request - IntlFlightOrderPayRequest
     * @param headers - IntlFlightOrderPayHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns IntlFlightOrderPayResponse
     *
     * @param IntlFlightOrderPayRequest $request
     * @param IntlFlightOrderPayHeaders $headers
     * @param RuntimeOptions            $runtime
     *
     * @return IntlFlightOrderPayResponse
     */
    public function intlFlightOrderPayWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->btripUserId) {
            @$body['btrip_user_id'] = $request->btripUserId;
        }

        if (null !== $request->buyerName) {
            @$body['buyer_name'] = $request->buyerName;
        }

        if (null !== $request->isvName) {
            @$body['isv_name'] = $request->isvName;
        }

        if (null !== $request->orderId) {
            @$body['order_id'] = $request->orderId;
        }

        if (null !== $request->orderPrice) {
            @$body['order_price'] = $request->orderPrice;
        }

        if (null !== $request->outOrderId) {
            @$body['out_order_id'] = $request->outOrderId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripCorpToken) {
            @$realHeaders['x-acs-btrip-corp-token'] = '' . $headers->xAcsBtripCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'IntlFlightOrderPay',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/intl-flight/v1/order/action/pay',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return IntlFlightOrderPayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 国际机票订单支付.
     *
     * @param request - IntlFlightOrderPayRequest
     *
     * @returns IntlFlightOrderPayResponse
     *
     * @param IntlFlightOrderPayRequest $request
     *
     * @return IntlFlightOrderPayResponse
     */
    public function intlFlightOrderPay($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new IntlFlightOrderPayHeaders([]);

        return $this->intlFlightOrderPayWithOptions($request, $headers, $runtime);
    }

    /**
     * 国际机票订单支付前校验.
     *
     * @param request - IntlFlightOrderPayCheckRequest
     * @param headers - IntlFlightOrderPayCheckHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns IntlFlightOrderPayCheckResponse
     *
     * @param IntlFlightOrderPayCheckRequest $request
     * @param IntlFlightOrderPayCheckHeaders $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return IntlFlightOrderPayCheckResponse
     */
    public function intlFlightOrderPayCheckWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->btripUserId) {
            @$query['btrip_user_id'] = $request->btripUserId;
        }

        if (null !== $request->buyerName) {
            @$query['buyer_name'] = $request->buyerName;
        }

        if (null !== $request->isvName) {
            @$query['isv_name'] = $request->isvName;
        }

        if (null !== $request->orderId) {
            @$query['order_id'] = $request->orderId;
        }

        if (null !== $request->outOrderId) {
            @$query['out_order_id'] = $request->outOrderId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripCorpToken) {
            @$realHeaders['x-acs-btrip-corp-token'] = '' . $headers->xAcsBtripCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'IntlFlightOrderPayCheck',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/intl-flight/v1/order/action/pay-check',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return IntlFlightOrderPayCheckResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 国际机票订单支付前校验.
     *
     * @param request - IntlFlightOrderPayCheckRequest
     *
     * @returns IntlFlightOrderPayCheckResponse
     *
     * @param IntlFlightOrderPayCheckRequest $request
     *
     * @return IntlFlightOrderPayCheckResponse
     */
    public function intlFlightOrderPayCheck($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new IntlFlightOrderPayCheckHeaders([]);

        return $this->intlFlightOrderPayCheckWithOptions($request, $headers, $runtime);
    }

    /**
     * 国际机票报价商品详情.
     *
     * @param request - IntlFlightOtaItemDetailRequest
     * @param headers - IntlFlightOtaItemDetailHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns IntlFlightOtaItemDetailResponse
     *
     * @param string                         $otaItemId
     * @param IntlFlightOtaItemDetailRequest $request
     * @param IntlFlightOtaItemDetailHeaders $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return IntlFlightOtaItemDetailResponse
     */
    public function intlFlightOtaItemDetailWithOptions($otaItemId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->btripUserId) {
            @$query['btrip_user_id'] = $request->btripUserId;
        }

        if (null !== $request->buyerName) {
            @$query['buyer_name'] = $request->buyerName;
        }

        if (null !== $request->isvName) {
            @$query['isv_name'] = $request->isvName;
        }

        if (null !== $request->language) {
            @$query['language'] = $request->language;
        }

        if (null !== $request->supplierCode) {
            @$query['supplier_code'] = $request->supplierCode;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripCorpToken) {
            @$realHeaders['x-acs-btrip-corp-token'] = '' . $headers->xAcsBtripCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'IntlFlightOtaItemDetail',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/intl-flight/v1/items/' . Url::percentEncode($otaItemId) . '/action/ota-get',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return IntlFlightOtaItemDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 国际机票报价商品详情.
     *
     * @param request - IntlFlightOtaItemDetailRequest
     *
     * @returns IntlFlightOtaItemDetailResponse
     *
     * @param string                         $otaItemId
     * @param IntlFlightOtaItemDetailRequest $request
     *
     * @return IntlFlightOtaItemDetailResponse
     */
    public function intlFlightOtaItemDetail($otaItemId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new IntlFlightOtaItemDetailHeaders([]);

        return $this->intlFlightOtaItemDetailWithOptions($otaItemId, $request, $headers, $runtime);
    }

    /**
     * 国际机票航班报价查询.
     *
     * @param tmpReq - IntlFlightOtaSearchRequest
     * @param headers - IntlFlightOtaSearchHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns IntlFlightOtaSearchResponse
     *
     * @param IntlFlightOtaSearchRequest $tmpReq
     * @param IntlFlightOtaSearchHeaders $headers
     * @param RuntimeOptions             $runtime
     *
     * @return IntlFlightOtaSearchResponse
     */
    public function intlFlightOtaSearchWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new IntlFlightOtaSearchShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->searchJourneys) {
            $request->searchJourneysShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->searchJourneys, 'search_journeys', 'json');
        }

        if (null !== $tmpReq->searchPassengerList) {
            $request->searchPassengerListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->searchPassengerList, 'search_passenger_list', 'json');
        }

        $query = [];
        if (null !== $request->btripUserId) {
            @$query['btrip_user_id'] = $request->btripUserId;
        }

        if (null !== $request->buyerName) {
            @$query['buyer_name'] = $request->buyerName;
        }

        if (null !== $request->cabinType) {
            @$query['cabin_type'] = $request->cabinType;
        }

        if (null !== $request->isvName) {
            @$query['isv_name'] = $request->isvName;
        }

        if (null !== $request->searchJourneysShrink) {
            @$query['search_journeys'] = $request->searchJourneysShrink;
        }

        if (null !== $request->searchPassengerListShrink) {
            @$query['search_passenger_list'] = $request->searchPassengerListShrink;
        }

        if (null !== $request->tripType) {
            @$query['trip_type'] = $request->tripType;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripCorpToken) {
            @$realHeaders['x-acs-btrip-corp-token'] = '' . $headers->xAcsBtripCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'IntlFlightOtaSearch',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/intl-flight/v1/flights/action/ota-search',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return IntlFlightOtaSearchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 国际机票航班报价查询.
     *
     * @param request - IntlFlightOtaSearchRequest
     *
     * @returns IntlFlightOtaSearchResponse
     *
     * @param IntlFlightOtaSearchRequest $request
     *
     * @return IntlFlightOtaSearchResponse
     */
    public function intlFlightOtaSearch($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new IntlFlightOtaSearchHeaders([]);

        return $this->intlFlightOtaSearchWithOptions($request, $headers, $runtime);
    }

    /**
     * 国际机票改签咨询.
     *
     * @param request - IntlFlightReShopConsultRequest
     * @param headers - IntlFlightReShopConsultHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns IntlFlightReShopConsultResponse
     *
     * @param IntlFlightReShopConsultRequest $request
     * @param IntlFlightReShopConsultHeaders $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return IntlFlightReShopConsultResponse
     */
    public function intlFlightReShopConsultWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->btripUserId) {
            @$query['btrip_user_id'] = $request->btripUserId;
        }

        if (null !== $request->buyerName) {
            @$query['buyer_name'] = $request->buyerName;
        }

        if (null !== $request->isvName) {
            @$query['isv_name'] = $request->isvName;
        }

        if (null !== $request->orderId) {
            @$query['order_id'] = $request->orderId;
        }

        if (null !== $request->outOrderId) {
            @$query['out_order_id'] = $request->outOrderId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripCorpToken) {
            @$realHeaders['x-acs-btrip-corp-token'] = '' . $headers->xAcsBtripCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'IntlFlightReShopConsult',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/intl-flight/v1/flights/action/reshop/consult',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return IntlFlightReShopConsultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 国际机票改签咨询.
     *
     * @param request - IntlFlightReShopConsultRequest
     *
     * @returns IntlFlightReShopConsultResponse
     *
     * @param IntlFlightReShopConsultRequest $request
     *
     * @return IntlFlightReShopConsultResponse
     */
    public function intlFlightReShopConsult($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new IntlFlightReShopConsultHeaders([]);

        return $this->intlFlightReShopConsultWithOptions($request, $headers, $runtime);
    }

    /**
     * 国际机票航班可用证件查询.
     *
     * @param request - IntlFlightSegmentAvailableCertRequest
     * @param headers - IntlFlightSegmentAvailableCertHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns IntlFlightSegmentAvailableCertResponse
     *
     * @param string                                $otaItemId
     * @param IntlFlightSegmentAvailableCertRequest $request
     * @param IntlFlightSegmentAvailableCertHeaders $headers
     * @param RuntimeOptions                        $runtime
     *
     * @return IntlFlightSegmentAvailableCertResponse
     */
    public function intlFlightSegmentAvailableCertWithOptions($otaItemId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->isvName) {
            @$query['isv_name'] = $request->isvName;
        }

        if (null !== $request->language) {
            @$query['language'] = $request->language;
        }

        if (null !== $request->userId) {
            @$query['user_id'] = $request->userId;
        }

        if (null !== $request->userName) {
            @$query['user_name'] = $request->userName;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripCorpToken) {
            @$realHeaders['x-acs-btrip-corp-token'] = '' . $headers->xAcsBtripCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'IntlFlightSegmentAvailableCert',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/intl-flight/v1/items/' . Url::percentEncode($otaItemId) . '/action/segment-available-cert',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return IntlFlightSegmentAvailableCertResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 国际机票航班可用证件查询.
     *
     * @param request - IntlFlightSegmentAvailableCertRequest
     *
     * @returns IntlFlightSegmentAvailableCertResponse
     *
     * @param string                                $otaItemId
     * @param IntlFlightSegmentAvailableCertRequest $request
     *
     * @return IntlFlightSegmentAvailableCertResponse
     */
    public function intlFlightSegmentAvailableCert($otaItemId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new IntlFlightSegmentAvailableCertHeaders([]);

        return $this->intlFlightSegmentAvailableCertWithOptions($otaItemId, $request, $headers, $runtime);
    }

    /**
     * 新增发票配置.
     *
     * @param request - InvoiceAddRequest
     * @param headers - InvoiceAddHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns InvoiceAddResponse
     *
     * @param InvoiceAddRequest $request
     * @param InvoiceAddHeaders $headers
     * @param RuntimeOptions    $runtime
     *
     * @return InvoiceAddResponse
     */
    public function invoiceAddWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->address) {
            @$body['address'] = $request->address;
        }

        if (null !== $request->bankName) {
            @$body['bank_name'] = $request->bankName;
        }

        if (null !== $request->bankNo) {
            @$body['bank_no'] = $request->bankNo;
        }

        if (null !== $request->taxNo) {
            @$body['tax_no'] = $request->taxNo;
        }

        if (null !== $request->tel) {
            @$body['tel'] = $request->tel;
        }

        if (null !== $request->thirdPartId) {
            @$body['third_part_id'] = $request->thirdPartId;
        }

        if (null !== $request->title) {
            @$body['title'] = $request->title;
        }

        if (null !== $request->type) {
            @$body['type'] = $request->type;
        }

        if (null !== $request->unitType) {
            @$body['unit_type'] = $request->unitType;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripSoCorpToken) {
            @$realHeaders['x-acs-btrip-so-corp-token'] = '' . $headers->xAcsBtripSoCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'InvoiceAdd',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/invoice/v1/add-invoice',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return InvoiceAddResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 新增发票配置.
     *
     * @param request - InvoiceAddRequest
     *
     * @returns InvoiceAddResponse
     *
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
     * 删除发票抬头.
     *
     * @param request - InvoiceDeleteRequest
     * @param headers - InvoiceDeleteHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns InvoiceDeleteResponse
     *
     * @param InvoiceDeleteRequest $request
     * @param InvoiceDeleteHeaders $headers
     * @param RuntimeOptions       $runtime
     *
     * @return InvoiceDeleteResponse
     */
    public function invoiceDeleteWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->thirdPartId) {
            @$query['third_part_id'] = $request->thirdPartId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripSoCorpToken) {
            @$realHeaders['x-acs-btrip-so-corp-token'] = '' . $headers->xAcsBtripSoCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'InvoiceDelete',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/invoice/v1/invoice',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return InvoiceDeleteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除发票抬头.
     *
     * @param request - InvoiceDeleteRequest
     *
     * @returns InvoiceDeleteResponse
     *
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
     * 修改发票配置.
     *
     * @param request - InvoiceModifyRequest
     * @param headers - InvoiceModifyHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns InvoiceModifyResponse
     *
     * @param InvoiceModifyRequest $request
     * @param InvoiceModifyHeaders $headers
     * @param RuntimeOptions       $runtime
     *
     * @return InvoiceModifyResponse
     */
    public function invoiceModifyWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->address) {
            @$body['address'] = $request->address;
        }

        if (null !== $request->bankName) {
            @$body['bank_name'] = $request->bankName;
        }

        if (null !== $request->bankNo) {
            @$body['bank_no'] = $request->bankNo;
        }

        if (null !== $request->taxNo) {
            @$body['tax_no'] = $request->taxNo;
        }

        if (null !== $request->tel) {
            @$body['tel'] = $request->tel;
        }

        if (null !== $request->thirdPartId) {
            @$body['third_part_id'] = $request->thirdPartId;
        }

        if (null !== $request->title) {
            @$body['title'] = $request->title;
        }

        if (null !== $request->type) {
            @$body['type'] = $request->type;
        }

        if (null !== $request->unitType) {
            @$body['unit_type'] = $request->unitType;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripSoCorpToken) {
            @$realHeaders['x-acs-btrip-so-corp-token'] = '' . $headers->xAcsBtripSoCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'InvoiceModify',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/invoice/v1/invoice',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return InvoiceModifyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改发票配置.
     *
     * @param request - InvoiceModifyRequest
     *
     * @returns InvoiceModifyResponse
     *
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
     * 新增发票抬头可用员工.
     *
     * @param tmpReq - InvoiceRuleAddRequest
     * @param headers - InvoiceRuleAddHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns InvoiceRuleAddResponse
     *
     * @param InvoiceRuleAddRequest $tmpReq
     * @param InvoiceRuleAddHeaders $headers
     * @param RuntimeOptions        $runtime
     *
     * @return InvoiceRuleAddResponse
     */
    public function invoiceRuleAddWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new InvoiceRuleAddShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->entities) {
            $request->entitiesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->entities, 'entities', 'json');
        }

        $body = [];
        if (null !== $request->entitiesShrink) {
            @$body['entities'] = $request->entitiesShrink;
        }

        if (null !== $request->thirdPartId) {
            @$body['third_part_id'] = $request->thirdPartId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripCorpToken) {
            @$realHeaders['x-acs-btrip-corp-token'] = '' . $headers->xAcsBtripCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'InvoiceRuleAdd',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/invoice/v1/invoice-rule',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return InvoiceRuleAddResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 新增发票抬头可用员工.
     *
     * @param request - InvoiceRuleAddRequest
     *
     * @returns InvoiceRuleAddResponse
     *
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
     * 删除发票抬头可用员工.
     *
     * @param tmpReq - InvoiceRuleDeleteRequest
     * @param headers - InvoiceRuleDeleteHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns InvoiceRuleDeleteResponse
     *
     * @param InvoiceRuleDeleteRequest $tmpReq
     * @param InvoiceRuleDeleteHeaders $headers
     * @param RuntimeOptions           $runtime
     *
     * @return InvoiceRuleDeleteResponse
     */
    public function invoiceRuleDeleteWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new InvoiceRuleDeleteShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->entities) {
            $request->entitiesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->entities, 'entities', 'json');
        }

        $query = [];
        if (null !== $request->delAll) {
            @$query['del_all'] = $request->delAll;
        }

        if (null !== $request->entitiesShrink) {
            @$query['entities'] = $request->entitiesShrink;
        }

        if (null !== $request->thirdPartId) {
            @$query['third_part_id'] = $request->thirdPartId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripCorpToken) {
            @$realHeaders['x-acs-btrip-corp-token'] = '' . $headers->xAcsBtripCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'InvoiceRuleDelete',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/invoice/v1/invoice-rule',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return InvoiceRuleDeleteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除发票抬头可用员工.
     *
     * @param request - InvoiceRuleDeleteRequest
     *
     * @returns InvoiceRuleDeleteResponse
     *
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
     * 保存发票规则.
     *
     * @param tmpReq - InvoiceRuleSaveRequest
     * @param headers - InvoiceRuleSaveHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns InvoiceRuleSaveResponse
     *
     * @param InvoiceRuleSaveRequest $tmpReq
     * @param InvoiceRuleSaveHeaders $headers
     * @param RuntimeOptions         $runtime
     *
     * @return InvoiceRuleSaveResponse
     */
    public function invoiceRuleSaveWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new InvoiceRuleSaveShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->entities) {
            $request->entitiesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->entities, 'entities', 'json');
        }

        $body = [];
        if (null !== $request->allEmploye) {
            @$body['all_employe'] = $request->allEmploye;
        }

        if (null !== $request->entitiesShrink) {
            @$body['entities'] = $request->entitiesShrink;
        }

        if (null !== $request->scope) {
            @$body['scope'] = $request->scope;
        }

        if (null !== $request->thirdPartId) {
            @$body['third_part_id'] = $request->thirdPartId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripSoCorpToken) {
            @$realHeaders['x-acs-btrip-so-corp-token'] = '' . $headers->xAcsBtripSoCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'InvoiceRuleSave',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/invoice/v1/invoice-rule',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return InvoiceRuleSaveResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 保存发票规则.
     *
     * @param request - InvoiceRuleSaveRequest
     *
     * @returns InvoiceRuleSaveResponse
     *
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
     * 搜索用户可用发票抬头.
     *
     * @param request - InvoiceSearchRequest
     * @param headers - InvoiceSearchHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns InvoiceSearchResponse
     *
     * @param InvoiceSearchRequest $request
     * @param InvoiceSearchHeaders $headers
     * @param RuntimeOptions       $runtime
     *
     * @return InvoiceSearchResponse
     */
    public function invoiceSearchWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->thirdPartId) {
            @$query['third_part_id'] = $request->thirdPartId;
        }

        if (null !== $request->title) {
            @$query['title'] = $request->title;
        }

        if (null !== $request->userId) {
            @$query['user_id'] = $request->userId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripSoCorpToken) {
            @$realHeaders['x-acs-btrip-so-corp-token'] = '' . $headers->xAcsBtripSoCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'InvoiceSearch',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/invoice/v1/invoice',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return InvoiceSearchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 搜索用户可用发票抬头.
     *
     * @param request - InvoiceSearchRequest
     *
     * @returns InvoiceSearchResponse
     *
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
     * 员工特殊角色修改.
     *
     * @param tmpReq - IsvRuleSaveRequest
     * @param headers - IsvRuleSaveHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns IsvRuleSaveResponse
     *
     * @param IsvRuleSaveRequest $tmpReq
     * @param IsvRuleSaveHeaders $headers
     * @param RuntimeOptions     $runtime
     *
     * @return IsvRuleSaveResponse
     */
    public function isvRuleSaveWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new IsvRuleSaveShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->bookuserList) {
            $request->bookuserListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->bookuserList, 'bookuser_list', 'json');
        }

        $body = [];
        if (null !== $request->applyNeed) {
            @$body['apply_need'] = $request->applyNeed;
        }

        if (null !== $request->bookType) {
            @$body['book_type'] = $request->bookType;
        }

        if (null !== $request->bookuserListShrink) {
            @$body['bookuser_list'] = $request->bookuserListShrink;
        }

        if (null !== $request->ruleNeed) {
            @$body['rule_need'] = $request->ruleNeed;
        }

        if (null !== $request->status) {
            @$body['status'] = $request->status;
        }

        if (null !== $request->userId) {
            @$body['user_id'] = $request->userId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripSoCorpToken) {
            @$realHeaders['x-acs-btrip-so-corp-token'] = '' . $headers->xAcsBtripSoCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'IsvRuleSave',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/user/v1/rule',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return IsvRuleSaveResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 员工特殊角色修改.
     *
     * @param request - IsvRuleSaveRequest
     *
     * @returns IsvRuleSaveResponse
     *
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
     * 用户同步.
     *
     * @param tmpReq - IsvUserSaveRequest
     * @param headers - IsvUserSaveHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns IsvUserSaveResponse
     *
     * @param IsvUserSaveRequest $tmpReq
     * @param IsvUserSaveHeaders $headers
     * @param RuntimeOptions     $runtime
     *
     * @return IsvUserSaveResponse
     */
    public function isvUserSaveWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new IsvUserSaveShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->userList) {
            $request->userListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->userList, 'user_list', 'json');
        }

        $body = [];
        if (null !== $request->userListShrink) {
            @$body['user_list'] = $request->userListShrink;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripSoCorpToken) {
            @$realHeaders['x-acs-btrip-so-corp-token'] = '' . $headers->xAcsBtripSoCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'IsvUserSave',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/isvuser/v1/isvuser',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return IsvUserSaveResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 用户同步.
     *
     * @param request - IsvUserSaveRequest
     *
     * @returns IsvUserSaveResponse
     *
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
     * 新增用餐申请单.
     *
     * @param tmpReq - MealApplyAddRequest
     * @param headers - MealApplyAddHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns MealApplyAddResponse
     *
     * @param MealApplyAddRequest $tmpReq
     * @param MealApplyAddHeaders $headers
     * @param RuntimeOptions      $runtime
     *
     * @return MealApplyAddResponse
     */
    public function mealApplyAddWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new MealApplyAddShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->applyUser) {
            $request->applyUserShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->applyUser, 'apply_user', 'json');
        }

        if (null !== $tmpReq->itineraryList) {
            $request->itineraryListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->itineraryList, 'itinerary_list', 'json');
        }

        $body = [];
        if (null !== $request->applyUserShrink) {
            @$body['apply_user'] = $request->applyUserShrink;
        }

        if (null !== $request->costCenterId) {
            @$body['cost_center_id'] = $request->costCenterId;
        }

        if (null !== $request->invoiceId) {
            @$body['invoice_id'] = $request->invoiceId;
        }

        if (null !== $request->itineraryListShrink) {
            @$body['itinerary_list'] = $request->itineraryListShrink;
        }

        if (null !== $request->mealAmount) {
            @$body['meal_amount'] = $request->mealAmount;
        }

        if (null !== $request->mealCause) {
            @$body['meal_cause'] = $request->mealCause;
        }

        if (null !== $request->projectCode) {
            @$body['project_code'] = $request->projectCode;
        }

        if (null !== $request->projectTitle) {
            @$body['project_title'] = $request->projectTitle;
        }

        if (null !== $request->status) {
            @$body['status'] = $request->status;
        }

        if (null !== $request->thirdPartApplyId) {
            @$body['third_part_apply_id'] = $request->thirdPartApplyId;
        }

        if (null !== $request->thirdPartCostCenterId) {
            @$body['third_part_cost_center_id'] = $request->thirdPartCostCenterId;
        }

        if (null !== $request->thirdPartInvoiceId) {
            @$body['third_part_invoice_id'] = $request->thirdPartInvoiceId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripCorpToken) {
            @$realHeaders['x-acs-btrip-corp-token'] = '' . $headers->xAcsBtripCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'MealApplyAdd',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/apply/v1/meal',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return MealApplyAddResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 新增用餐申请单.
     *
     * @param request - MealApplyAddRequest
     *
     * @returns MealApplyAddResponse
     *
     * @param MealApplyAddRequest $request
     *
     * @return MealApplyAddResponse
     */
    public function mealApplyAdd($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new MealApplyAddHeaders([]);

        return $this->mealApplyAddWithOptions($request, $headers, $runtime);
    }

    /**
     * 更新用餐申请单状态
     *
     * @param request - MealApplyApproveRequest
     * @param headers - MealApplyApproveHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns MealApplyApproveResponse
     *
     * @param MealApplyApproveRequest $request
     * @param MealApplyApproveHeaders $headers
     * @param RuntimeOptions          $runtime
     *
     * @return MealApplyApproveResponse
     */
    public function mealApplyApproveWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->operateTime) {
            @$body['operate_time'] = $request->operateTime;
        }

        if (null !== $request->remark) {
            @$body['remark'] = $request->remark;
        }

        if (null !== $request->status) {
            @$body['status'] = $request->status;
        }

        if (null !== $request->thirdPartApplyId) {
            @$body['third_part_apply_id'] = $request->thirdPartApplyId;
        }

        if (null !== $request->userId) {
            @$body['user_id'] = $request->userId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripCorpToken) {
            @$realHeaders['x-acs-btrip-corp-token'] = '' . $headers->xAcsBtripCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'MealApplyApprove',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/apply/v1/meal',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return MealApplyApproveResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新用餐申请单状态
     *
     * @param request - MealApplyApproveRequest
     *
     * @returns MealApplyApproveResponse
     *
     * @param MealApplyApproveRequest $request
     *
     * @return MealApplyApproveResponse
     */
    public function mealApplyApprove($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new MealApplyApproveHeaders([]);

        return $this->mealApplyApproveWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询用餐申请单.
     *
     * @param request - MealApplyQueryRequest
     * @param headers - MealApplyQueryHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns MealApplyQueryResponse
     *
     * @param MealApplyQueryRequest $request
     * @param MealApplyQueryHeaders $headers
     * @param RuntimeOptions        $runtime
     *
     * @return MealApplyQueryResponse
     */
    public function mealApplyQueryWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->thirdPartApplyId) {
            @$query['third_part_apply_id'] = $request->thirdPartApplyId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripCorpToken) {
            @$realHeaders['x-acs-btrip-corp-token'] = '' . $headers->xAcsBtripCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'MealApplyQuery',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/apply/v1/meal',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return MealApplyQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询用餐申请单.
     *
     * @param request - MealApplyQueryRequest
     *
     * @returns MealApplyQueryResponse
     *
     * @param MealApplyQueryRequest $request
     *
     * @return MealApplyQueryResponse
     */
    public function mealApplyQuery($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new MealApplyQueryHeaders([]);

        return $this->mealApplyQueryWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询因公用餐记账数据.
     *
     * @param request - MealBillSettlementQueryRequest
     * @param headers - MealBillSettlementQueryHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns MealBillSettlementQueryResponse
     *
     * @param MealBillSettlementQueryRequest $request
     * @param MealBillSettlementQueryHeaders $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return MealBillSettlementQueryResponse
     */
    public function mealBillSettlementQueryWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->billBatch) {
            @$query['bill_batch'] = $request->billBatch;
        }

        if (null !== $request->orderId) {
            @$query['order_id'] = $request->orderId;
        }

        if (null !== $request->pageNo) {
            @$query['page_no'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['page_size'] = $request->pageSize;
        }

        if (null !== $request->periodEnd) {
            @$query['period_end'] = $request->periodEnd;
        }

        if (null !== $request->periodStart) {
            @$query['period_start'] = $request->periodStart;
        }

        if (null !== $request->scrollId) {
            @$query['scroll_id'] = $request->scrollId;
        }

        if (null !== $request->scrollMod) {
            @$query['scroll_mod'] = $request->scrollMod;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripSoCorpToken) {
            @$realHeaders['x-acs-btrip-so-corp-token'] = '' . $headers->xAcsBtripSoCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'MealBillSettlementQuery',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/meal/v1/bill-settlement',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return MealBillSettlementQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询因公用餐记账数据.
     *
     * @param request - MealBillSettlementQueryRequest
     *
     * @returns MealBillSettlementQueryResponse
     *
     * @param MealBillSettlementQueryRequest $request
     *
     * @return MealBillSettlementQueryResponse
     */
    public function mealBillSettlementQuery($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new MealBillSettlementQueryHeaders([]);

        return $this->mealBillSettlementQueryWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取用餐订单详情.
     *
     * @param request - MealOrderDetailQueryRequest
     * @param headers - MealOrderDetailQueryHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns MealOrderDetailQueryResponse
     *
     * @param string                      $orderId
     * @param MealOrderDetailQueryRequest $request
     * @param MealOrderDetailQueryHeaders $headers
     * @param RuntimeOptions              $runtime
     *
     * @return MealOrderDetailQueryResponse
     */
    public function mealOrderDetailQueryWithOptions($orderId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->userId) {
            @$query['user_id'] = $request->userId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripCorpToken) {
            @$realHeaders['x-acs-btrip-corp-token'] = '' . $headers->xAcsBtripCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'MealOrderDetailQuery',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/meal/v1/orders/' . Url::percentEncode($orderId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return MealOrderDetailQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取用餐订单详情.
     *
     * @param request - MealOrderDetailQueryRequest
     *
     * @returns MealOrderDetailQueryResponse
     *
     * @param string                      $orderId
     * @param MealOrderDetailQueryRequest $request
     *
     * @return MealOrderDetailQueryResponse
     */
    public function mealOrderDetailQuery($orderId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new MealOrderDetailQueryHeaders([]);

        return $this->mealOrderDetailQueryWithOptions($orderId, $request, $headers, $runtime);
    }

    /**
     * 获取用餐订单列表.
     *
     * @param request - MealOrderListQueryRequest
     * @param headers - MealOrderListQueryHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns MealOrderListQueryResponse
     *
     * @param MealOrderListQueryRequest $request
     * @param MealOrderListQueryHeaders $headers
     * @param RuntimeOptions            $runtime
     *
     * @return MealOrderListQueryResponse
     */
    public function mealOrderListQueryWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->userId) {
            @$query['user_id'] = $request->userId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripCorpToken) {
            @$realHeaders['x-acs-btrip-corp-token'] = '' . $headers->xAcsBtripCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'MealOrderListQuery',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/meal/v1/orders',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return MealOrderListQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取用餐订单列表.
     *
     * @param request - MealOrderListQueryRequest
     *
     * @returns MealOrderListQueryResponse
     *
     * @param MealOrderListQueryRequest $request
     *
     * @return MealOrderListQueryResponse
     */
    public function mealOrderListQuery($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new MealOrderListQueryHeaders([]);

        return $this->mealOrderListQueryWithOptions($request, $headers, $runtime);
    }

    /**
     * 月账单确认.
     *
     * @param request - MonthBillConfirmRequest
     * @param headers - MonthBillConfirmHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns MonthBillConfirmResponse
     *
     * @param MonthBillConfirmRequest $request
     * @param MonthBillConfirmHeaders $headers
     * @param RuntimeOptions          $runtime
     *
     * @return MonthBillConfirmResponse
     */
    public function monthBillConfirmWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->mailBillDate) {
            @$body['mail_bill_date'] = $request->mailBillDate;
        }

        if (null !== $request->userId) {
            @$body['user_id'] = $request->userId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripCorpToken) {
            @$realHeaders['x-acs-btrip-corp-token'] = '' . $headers->xAcsBtripCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'MonthBillConfirm',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/bill/v1/status/action/confirm',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return MonthBillConfirmResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 月账单确认.
     *
     * @param request - MonthBillConfirmRequest
     *
     * @returns MonthBillConfirmResponse
     *
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
     * 查询企业月账单.
     *
     * @param request - MonthBillGetRequest
     * @param headers - MonthBillGetHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns MonthBillGetResponse
     *
     * @param MonthBillGetRequest $request
     * @param MonthBillGetHeaders $headers
     * @param RuntimeOptions      $runtime
     *
     * @return MonthBillGetResponse
     */
    public function monthBillGetWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->billBatch) {
            @$query['bill_batch'] = $request->billBatch;
        }

        if (null !== $request->billMonth) {
            @$query['bill_month'] = $request->billMonth;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripSoCorpToken) {
            @$realHeaders['x-acs-btrip-so-corp-token'] = '' . $headers->xAcsBtripSoCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'MonthBillGet',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/open/v1/month-bill',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return MonthBillGetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询企业月账单.
     *
     * @param request - MonthBillGetRequest
     *
     * @returns MonthBillGetResponse
     *
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
     * 查询拆分版企业月账单.
     *
     * @param tmpReq - MonthBillSplitGetRequest
     * @param headers - MonthBillSplitGetHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns MonthBillSplitGetResponse
     *
     * @param MonthBillSplitGetRequest $tmpReq
     * @param MonthBillSplitGetHeaders $headers
     * @param RuntimeOptions           $runtime
     *
     * @return MonthBillSplitGetResponse
     */
    public function monthBillSplitGetWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new MonthBillSplitGetShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->billSplitKeyList) {
            $request->billSplitKeyListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->billSplitKeyList, 'bill_split_key_list', 'json');
        }

        $query = [];
        if (null !== $request->billBatch) {
            @$query['bill_batch'] = $request->billBatch;
        }

        if (null !== $request->billMonth) {
            @$query['bill_month'] = $request->billMonth;
        }

        if (null !== $request->billSplitKeyListShrink) {
            @$query['bill_split_key_list'] = $request->billSplitKeyListShrink;
        }

        if (null !== $request->billSplitMode) {
            @$query['bill_split_mode'] = $request->billSplitMode;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripSoCorpToken) {
            @$realHeaders['x-acs-btrip-so-corp-token'] = '' . $headers->xAcsBtripSoCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'MonthBillSplitGet',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/open/v1/month-bill-split',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return MonthBillSplitGetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询拆分版企业月账单.
     *
     * @param request - MonthBillSplitGetRequest
     *
     * @returns MonthBillSplitGetResponse
     *
     * @param MonthBillSplitGetRequest $request
     *
     * @return MonthBillSplitGetResponse
     */
    public function monthBillSplitGet($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new MonthBillSplitGetHeaders([]);

        return $this->monthBillSplitGetWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询订单退款明细.
     *
     * @param request - OrderRefundDetailQueryRequest
     * @param headers - OrderRefundDetailQueryHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns OrderRefundDetailQueryResponse
     *
     * @param OrderRefundDetailQueryRequest $request
     * @param OrderRefundDetailQueryHeaders $headers
     * @param RuntimeOptions                $runtime
     *
     * @return OrderRefundDetailQueryResponse
     */
    public function orderRefundDetailQueryWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->cooperatorOrderId) {
            @$body['cooperator_order_id'] = $request->cooperatorOrderId;
        }

        if (null !== $request->orderId) {
            @$body['order_id'] = $request->orderId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripCorpToken) {
            @$realHeaders['x-acs-btrip-corp-token'] = '' . $headers->xAcsBtripCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'OrderRefundDetailQuery',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/coop-hotel/v1/refund/action/detail',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return OrderRefundDetailQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询订单退款明细.
     *
     * @param request - OrderRefundDetailQueryRequest
     *
     * @returns OrderRefundDetailQueryResponse
     *
     * @param OrderRefundDetailQueryRequest $request
     *
     * @return OrderRefundDetailQueryResponse
     */
    public function orderRefundDetailQuery($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new OrderRefundDetailQueryHeaders([]);

        return $this->orderRefundDetailQueryWithOptions($request, $headers, $runtime);
    }

    /**
     * 添加项目.
     *
     * @param request - ProjectAddRequest
     * @param headers - ProjectAddHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ProjectAddResponse
     *
     * @param ProjectAddRequest $request
     * @param ProjectAddHeaders $headers
     * @param RuntimeOptions    $runtime
     *
     * @return ProjectAddResponse
     */
    public function projectAddWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->code) {
            @$body['code'] = $request->code;
        }

        if (null !== $request->projectName) {
            @$body['project_name'] = $request->projectName;
        }

        if (null !== $request->thirdPartCostCenterId) {
            @$body['third_part_cost_center_id'] = $request->thirdPartCostCenterId;
        }

        if (null !== $request->thirdPartId) {
            @$body['third_part_id'] = $request->thirdPartId;
        }

        if (null !== $request->thirdPartInvoiceId) {
            @$body['third_part_invoice_id'] = $request->thirdPartInvoiceId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripSoCorpToken) {
            @$realHeaders['x-acs-btrip-so-corp-token'] = '' . $headers->xAcsBtripSoCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ProjectAdd',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/cost/v1/project',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ProjectAddResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 添加项目.
     *
     * @param request - ProjectAddRequest
     *
     * @returns ProjectAddResponse
     *
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
     * 删除项目.
     *
     * @param request - ProjectDeleteRequest
     * @param headers - ProjectDeleteHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ProjectDeleteResponse
     *
     * @param ProjectDeleteRequest $request
     * @param ProjectDeleteHeaders $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ProjectDeleteResponse
     */
    public function projectDeleteWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->thirdPartId) {
            @$query['third_part_id'] = $request->thirdPartId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripSoCorpToken) {
            @$realHeaders['x-acs-btrip-so-corp-token'] = '' . $headers->xAcsBtripSoCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ProjectDelete',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/cost/v1/project',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ProjectDeleteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除项目.
     *
     * @param request - ProjectDeleteRequest
     *
     * @returns ProjectDeleteResponse
     *
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
     * 变更项目.
     *
     * @param request - ProjectModifyRequest
     * @param headers - ProjectModifyHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ProjectModifyResponse
     *
     * @param ProjectModifyRequest $request
     * @param ProjectModifyHeaders $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ProjectModifyResponse
     */
    public function projectModifyWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->code) {
            @$body['code'] = $request->code;
        }

        if (null !== $request->projectName) {
            @$body['project_name'] = $request->projectName;
        }

        if (null !== $request->thirdPartCostCenterId) {
            @$body['third_part_cost_center_id'] = $request->thirdPartCostCenterId;
        }

        if (null !== $request->thirdPartId) {
            @$body['third_part_id'] = $request->thirdPartId;
        }

        if (null !== $request->thirdPartInvoiceId) {
            @$body['third_part_invoice_id'] = $request->thirdPartInvoiceId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripSoCorpToken) {
            @$realHeaders['x-acs-btrip-so-corp-token'] = '' . $headers->xAcsBtripSoCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ProjectModify',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/cost/v1/project',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ProjectModifyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 变更项目.
     *
     * @param request - ProjectModifyRequest
     *
     * @returns ProjectModifyResponse
     *
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
     * 查询企业信息详情.
     *
     * @param request - QueryCorpDetailInfoRequest
     * @param headers - QueryCorpDetailInfoHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryCorpDetailInfoResponse
     *
     * @param QueryCorpDetailInfoRequest $request
     * @param QueryCorpDetailInfoHeaders $headers
     * @param RuntimeOptions             $runtime
     *
     * @return QueryCorpDetailInfoResponse
     */
    public function queryCorpDetailInfoWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountId) {
            @$query['account_id'] = $request->accountId;
        }

        if (null !== $request->targetCorpId) {
            @$query['target_corp_id'] = $request->targetCorpId;
        }

        if (null !== $request->targetThirdCorpId) {
            @$query['target_third_corp_id'] = $request->targetThirdCorpId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripCorpToken) {
            @$realHeaders['x-acs-btrip-corp-token'] = '' . $headers->xAcsBtripCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryCorpDetailInfo',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/corps/v1/corps/detail',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return QueryCorpDetailInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询企业信息详情.
     *
     * @param request - QueryCorpDetailInfoRequest
     *
     * @returns QueryCorpDetailInfoResponse
     *
     * @param QueryCorpDetailInfoRequest $request
     *
     * @return QueryCorpDetailInfoResponse
     */
    public function queryCorpDetailInfo($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryCorpDetailInfoHeaders([]);

        return $this->queryCorpDetailInfoWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取单个员工信息.
     *
     * @param request - QueryEmployeeDetailRequest
     * @param headers - QueryEmployeeDetailHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryEmployeeDetailResponse
     *
     * @param QueryEmployeeDetailRequest $request
     * @param QueryEmployeeDetailHeaders $headers
     * @param RuntimeOptions             $runtime
     *
     * @return QueryEmployeeDetailResponse
     */
    public function queryEmployeeDetailWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->outEmployeeId) {
            @$query['out_employee_id'] = $request->outEmployeeId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripCorpToken) {
            @$realHeaders['x-acs-btrip-corp-token'] = '' . $headers->xAcsBtripCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryEmployeeDetail',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/user/v1/employeeDetail',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return QueryEmployeeDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取单个员工信息.
     *
     * @param request - QueryEmployeeDetailRequest
     *
     * @returns QueryEmployeeDetailResponse
     *
     * @param QueryEmployeeDetailRequest $request
     *
     * @return QueryEmployeeDetailResponse
     */
    public function queryEmployeeDetail($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryEmployeeDetailHeaders([]);

        return $this->queryEmployeeDetailWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询子企业列表.
     *
     * @param request - QueryGroupCorpListRequest
     * @param headers - QueryGroupCorpListHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryGroupCorpListResponse
     *
     * @param QueryGroupCorpListRequest $request
     * @param QueryGroupCorpListHeaders $headers
     * @param RuntimeOptions            $runtime
     *
     * @return QueryGroupCorpListResponse
     */
    public function queryGroupCorpListWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->userId) {
            @$body['user_id'] = $request->userId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripCorpToken) {
            @$realHeaders['x-acs-btrip-corp-token'] = '' . $headers->xAcsBtripCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'QueryGroupCorpList',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/sub_corps/v1/corps/action/corpList',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryGroupCorpListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询子企业列表.
     *
     * @param request - QueryGroupCorpListRequest
     *
     * @returns QueryGroupCorpListResponse
     *
     * @param QueryGroupCorpListRequest $request
     *
     * @return QueryGroupCorpListResponse
     */
    public function queryGroupCorpList($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryGroupCorpListHeaders([]);

        return $this->queryGroupCorpListWithOptions($request, $headers, $runtime);
    }

    /**
     * 报销单查询.
     *
     * @param request - QueryReimbursementOrderRequest
     * @param headers - QueryReimbursementOrderHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryReimbursementOrderResponse
     *
     * @param QueryReimbursementOrderRequest $request
     * @param QueryReimbursementOrderHeaders $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return QueryReimbursementOrderResponse
     */
    public function queryReimbursementOrderWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->reimbOrderNo) {
            @$query['reimb_order_no'] = $request->reimbOrderNo;
        }

        if (null !== $request->subCorpId) {
            @$query['sub_corp_id'] = $request->subCorpId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripCorpToken) {
            @$realHeaders['x-acs-btrip-corp-token'] = '' . $headers->xAcsBtripCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryReimbursementOrder',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/reimbursement/v1/order',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return QueryReimbursementOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 报销单查询.
     *
     * @param request - QueryReimbursementOrderRequest
     *
     * @returns QueryReimbursementOrderResponse
     *
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
     * 单个人员同步.
     *
     * @param tmpReq - SyncSingleUserRequest
     * @param headers - SyncSingleUserHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SyncSingleUserResponse
     *
     * @param SyncSingleUserRequest $tmpReq
     * @param SyncSingleUserHeaders $headers
     * @param RuntimeOptions        $runtime
     *
     * @return SyncSingleUserResponse
     */
    public function syncSingleUserWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new SyncSingleUserShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->thirdDepartIdList) {
            $request->thirdDepartIdListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->thirdDepartIdList, 'third_depart_id_list', 'json');
        }

        $body = [];
        if (null !== $request->email) {
            @$body['email'] = $request->email;
        }

        if (null !== $request->jobNo) {
            @$body['job_no'] = $request->jobNo;
        }

        if (null !== $request->leaveStatus) {
            @$body['leave_status'] = $request->leaveStatus;
        }

        if (null !== $request->managerUserId) {
            @$body['manager_user_id'] = $request->managerUserId;
        }

        if (null !== $request->phone) {
            @$body['phone'] = $request->phone;
        }

        if (null !== $request->position) {
            @$body['position'] = $request->position;
        }

        if (null !== $request->positionLevel) {
            @$body['position_level'] = $request->positionLevel;
        }

        if (null !== $request->realNameEn) {
            @$body['real_name_en'] = $request->realNameEn;
        }

        if (null !== $request->thirdDepartIdListShrink) {
            @$body['third_depart_id_list'] = $request->thirdDepartIdListShrink;
        }

        if (null !== $request->userId) {
            @$body['user_id'] = $request->userId;
        }

        if (null !== $request->userName) {
            @$body['user_name'] = $request->userName;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripSoCorpToken) {
            @$realHeaders['x-acs-btrip-so-corp-token'] = '' . $headers->xAcsBtripSoCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SyncSingleUser',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/user/v1/single-user/action/sync',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SyncSingleUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 单个人员同步.
     *
     * @param request - SyncSingleUserRequest
     *
     * @returns SyncSingleUserResponse
     *
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
     * 同步三方用户映射关系.
     *
     * @param request - SyncThirdUserMappingRequest
     * @param headers - SyncThirdUserMappingHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SyncThirdUserMappingResponse
     *
     * @param SyncThirdUserMappingRequest $request
     * @param SyncThirdUserMappingHeaders $headers
     * @param RuntimeOptions              $runtime
     *
     * @return SyncThirdUserMappingResponse
     */
    public function syncThirdUserMappingWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->status) {
            @$body['status'] = $request->status;
        }

        if (null !== $request->thirdChannelType) {
            @$body['third_channel_type'] = $request->thirdChannelType;
        }

        if (null !== $request->thirdUserId) {
            @$body['third_user_id'] = $request->thirdUserId;
        }

        if (null !== $request->userId) {
            @$body['user_id'] = $request->userId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripCorpToken) {
            @$realHeaders['x-acs-btrip-corp-token'] = '' . $headers->xAcsBtripCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SyncThirdUserMapping',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/user/v1/third-users/action/mapping',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SyncThirdUserMappingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 同步三方用户映射关系.
     *
     * @param request - SyncThirdUserMappingRequest
     *
     * @returns SyncThirdUserMappingResponse
     *
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
     * 查询淘宝账号信息.
     *
     * @param headers - TBAccountInfoQueryHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TBAccountInfoQueryResponse
     *
     * @param string                    $userId
     * @param TBAccountInfoQueryHeaders $headers
     * @param RuntimeOptions            $runtime
     *
     * @return TBAccountInfoQueryResponse
     */
    public function tBAccountInfoQueryWithOptions($userId, $headers, $runtime)
    {
        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripCorpToken) {
            @$realHeaders['x-acs-btrip-corp-token'] = '' . $headers->xAcsBtripCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
        ]);
        $params = new Params([
            'action' => 'TBAccountInfoQuery',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/account/v1/tb-accounts/' . Url::percentEncode($userId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return TBAccountInfoQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询淘宝账号信息.
     *
     * @returns TBAccountInfoQueryResponse
     *
     * @param string $userId
     *
     * @return TBAccountInfoQueryResponse
     */
    public function tBAccountInfoQuery($userId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new TBAccountInfoQueryHeaders([]);

        return $this->tBAccountInfoQueryWithOptions($userId, $headers, $runtime);
    }

    /**
     * 解绑淘宝账号.
     *
     * @param headers - TBAccountUnbindHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TBAccountUnbindResponse
     *
     * @param string                 $userId
     * @param TBAccountUnbindHeaders $headers
     * @param RuntimeOptions         $runtime
     *
     * @return TBAccountUnbindResponse
     */
    public function tBAccountUnbindWithOptions($userId, $headers, $runtime)
    {
        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripCorpToken) {
            @$realHeaders['x-acs-btrip-corp-token'] = '' . $headers->xAcsBtripCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
        ]);
        $params = new Params([
            'action' => 'TBAccountUnbind',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/account/v1/tb-accounts/' . Url::percentEncode($userId) . '/action/unbind',
            'method' => 'PATCH',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return TBAccountUnbindResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 解绑淘宝账号.
     *
     * @returns TBAccountUnbindResponse
     *
     * @param string $userId
     *
     * @return TBAccountUnbindResponse
     */
    public function tBAccountUnbind($userId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new TBAccountUnbindHeaders([]);

        return $this->tBAccountUnbindWithOptions($userId, $headers, $runtime);
    }

    /**
     * 机票改签申请.
     *
     * @param tmpReq - TicketChangingApplyRequest
     * @param headers - TicketChangingApplyHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TicketChangingApplyResponse
     *
     * @param TicketChangingApplyRequest $tmpReq
     * @param TicketChangingApplyHeaders $headers
     * @param RuntimeOptions             $runtime
     *
     * @return TicketChangingApplyResponse
     */
    public function ticketChangingApplyWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new TicketChangingApplyShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->modifyFlightInfoList) {
            $request->modifyFlightInfoListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->modifyFlightInfoList, 'modify_flight_info_list', 'json');
        }

        $body = [];
        if (null !== $request->disOrderId) {
            @$body['dis_order_id'] = $request->disOrderId;
        }

        if (null !== $request->disSubOrderId) {
            @$body['dis_sub_order_id'] = $request->disSubOrderId;
        }

        if (null !== $request->isVoluntary) {
            @$body['is_voluntary'] = $request->isVoluntary;
        }

        if (null !== $request->modifyFlightInfoListShrink) {
            @$body['modify_flight_info_list'] = $request->modifyFlightInfoListShrink;
        }

        if (null !== $request->otaItemId) {
            @$body['ota_item_id'] = $request->otaItemId;
        }

        if (null !== $request->reason) {
            @$body['reason'] = $request->reason;
        }

        if (null !== $request->sessionId) {
            @$body['session_id'] = $request->sessionId;
        }

        if (null !== $request->whetherRetry) {
            @$body['whether_retry'] = $request->whetherRetry;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripCorpToken) {
            @$realHeaders['x-acs-btrip-corp-token'] = '' . $headers->xAcsBtripCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'TicketChangingApply',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/dtb-flight/v1/ticket-changing/action/apply',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return TicketChangingApplyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 机票改签申请.
     *
     * @param request - TicketChangingApplyRequest
     *
     * @returns TicketChangingApplyResponse
     *
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
     * 机票改签取消.
     *
     * @param request - TicketChangingCancelRequest
     * @param headers - TicketChangingCancelHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TicketChangingCancelResponse
     *
     * @param TicketChangingCancelRequest $request
     * @param TicketChangingCancelHeaders $headers
     * @param RuntimeOptions              $runtime
     *
     * @return TicketChangingCancelResponse
     */
    public function ticketChangingCancelWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->disOrderId) {
            @$query['dis_order_id'] = $request->disOrderId;
        }

        if (null !== $request->disSubOrderId) {
            @$query['dis_sub_order_id'] = $request->disSubOrderId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripCorpToken) {
            @$realHeaders['x-acs-btrip-corp-token'] = '' . $headers->xAcsBtripCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'TicketChangingCancel',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/dtb-flight/v1/ticket-changing/action/cancel',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return TicketChangingCancelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 机票改签取消.
     *
     * @param request - TicketChangingCancelRequest
     *
     * @returns TicketChangingCancelResponse
     *
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
     * 机票改签详情.
     *
     * @param request - TicketChangingDetailRequest
     * @param headers - TicketChangingDetailHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TicketChangingDetailResponse
     *
     * @param TicketChangingDetailRequest $request
     * @param TicketChangingDetailHeaders $headers
     * @param RuntimeOptions              $runtime
     *
     * @return TicketChangingDetailResponse
     */
    public function ticketChangingDetailWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->disOrderId) {
            @$query['dis_order_id'] = $request->disOrderId;
        }

        if (null !== $request->disSubOrderId) {
            @$query['dis_sub_order_id'] = $request->disSubOrderId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripCorpToken) {
            @$realHeaders['x-acs-btrip-corp-token'] = '' . $headers->xAcsBtripCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'TicketChangingDetail',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/dtb-flight/v1/ticket-changing/action/detail',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return TicketChangingDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 机票改签详情.
     *
     * @param request - TicketChangingDetailRequest
     *
     * @returns TicketChangingDetailResponse
     *
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
     * 机票改签询价.
     *
     * @param request - TicketChangingEnquiryRequest
     * @param headers - TicketChangingEnquiryHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TicketChangingEnquiryResponse
     *
     * @param TicketChangingEnquiryRequest $request
     * @param TicketChangingEnquiryHeaders $headers
     * @param RuntimeOptions               $runtime
     *
     * @return TicketChangingEnquiryResponse
     */
    public function ticketChangingEnquiryWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->arrCity) {
            @$query['arr_city'] = $request->arrCity;
        }

        if (null !== $request->depCity) {
            @$query['dep_city'] = $request->depCity;
        }

        if (null !== $request->disOrderId) {
            @$query['dis_order_id'] = $request->disOrderId;
        }

        if (null !== $request->isVoluntary) {
            @$query['is_voluntary'] = $request->isVoluntary;
        }

        if (null !== $request->modifyDepartDate) {
            @$query['modify_depart_date'] = $request->modifyDepartDate;
        }

        if (null !== $request->modifyFlightNo) {
            @$query['modify_flight_no'] = $request->modifyFlightNo;
        }

        if (null !== $request->sessionId) {
            @$query['session_id'] = $request->sessionId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripCorpToken) {
            @$realHeaders['x-acs-btrip-corp-token'] = '' . $headers->xAcsBtripCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'TicketChangingEnquiry',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/dtb-flight/v1/ticket-changing/action/enquiry',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return TicketChangingEnquiryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 机票改签询价.
     *
     * @param request - TicketChangingEnquiryRequest
     *
     * @returns TicketChangingEnquiryResponse
     *
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
     * 机票改签可改签航班列表.
     *
     * @param tmpReq - TicketChangingFlightListRequest
     * @param headers - TicketChangingFlightListHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TicketChangingFlightListResponse
     *
     * @param TicketChangingFlightListRequest $tmpReq
     * @param TicketChangingFlightListHeaders $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return TicketChangingFlightListResponse
     */
    public function ticketChangingFlightListWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new TicketChangingFlightListShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->travelerInfoList) {
            $request->travelerInfoListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->travelerInfoList, 'traveler_info_list', 'json');
        }

        $query = [];
        if (null !== $request->arrCity) {
            @$query['arr_city'] = $request->arrCity;
        }

        if (null !== $request->depCity) {
            @$query['dep_city'] = $request->depCity;
        }

        if (null !== $request->depDate) {
            @$query['dep_date'] = $request->depDate;
        }

        if (null !== $request->disOrderId) {
            @$query['dis_order_id'] = $request->disOrderId;
        }

        if (null !== $request->isVoluntary) {
            @$query['is_voluntary'] = $request->isVoluntary;
        }

        if (null !== $request->travelerInfoListShrink) {
            @$query['traveler_info_list'] = $request->travelerInfoListShrink;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripCorpToken) {
            @$realHeaders['x-acs-btrip-corp-token'] = '' . $headers->xAcsBtripCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'TicketChangingFlightList',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/huge/dtb-flight/v1/ticket-changing-flight/action/list',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return TicketChangingFlightListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 机票改签可改签航班列表.
     *
     * @param request - TicketChangingFlightListRequest
     *
     * @returns TicketChangingFlightListResponse
     *
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
     * 机票改签航班支付.
     *
     * @param tmpReq - TicketChangingPayRequest
     * @param headers - TicketChangingPayHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TicketChangingPayResponse
     *
     * @param TicketChangingPayRequest $tmpReq
     * @param TicketChangingPayHeaders $headers
     * @param RuntimeOptions           $runtime
     *
     * @return TicketChangingPayResponse
     */
    public function ticketChangingPayWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new TicketChangingPayShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->extra) {
            $request->extraShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->extra, 'extra', 'json');
        }

        $body = [];
        if (null !== $request->corpPayPrice) {
            @$body['corp_pay_price'] = $request->corpPayPrice;
        }

        if (null !== $request->disOrderId) {
            @$body['dis_order_id'] = $request->disOrderId;
        }

        if (null !== $request->disSubOrderId) {
            @$body['dis_sub_order_id'] = $request->disSubOrderId;
        }

        if (null !== $request->extraShrink) {
            @$body['extra'] = $request->extraShrink;
        }

        if (null !== $request->personalPayPrice) {
            @$body['personal_pay_price'] = $request->personalPayPrice;
        }

        if (null !== $request->totalPayPrice) {
            @$body['total_pay_price'] = $request->totalPayPrice;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripCorpToken) {
            @$realHeaders['x-acs-btrip-corp-token'] = '' . $headers->xAcsBtripCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'TicketChangingPay',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/dtb-flight/v1/ticket-changing/action/pay',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return TicketChangingPayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 机票改签航班支付.
     *
     * @param request - TicketChangingPayRequest
     *
     * @returns TicketChangingPayResponse
     *
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
     * 火车票改签申请.
     *
     * @param tmpReq - TrainApplyChangeRequest
     * @param headers - TrainApplyChangeHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TrainApplyChangeResponse
     *
     * @param TrainApplyChangeRequest $tmpReq
     * @param TrainApplyChangeHeaders $headers
     * @param RuntimeOptions          $runtime
     *
     * @return TrainApplyChangeResponse
     */
    public function trainApplyChangeWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new TrainApplyChangeShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->changeTrainInfoS) {
            $request->changeTrainInfoSShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->changeTrainInfoS, 'change_train_info_s', 'json');
        }

        $query = [];
        if (null !== $request->changeTrainInfoSShrink) {
            @$query['change_train_info_s'] = $request->changeTrainInfoSShrink;
        }

        $body = [];
        if (null !== $request->acceptNoSeat) {
            @$body['accept_no_seat'] = $request->acceptNoSeat;
        }

        if (null !== $request->forceMatch) {
            @$body['force_match'] = $request->forceMatch;
        }

        if (null !== $request->isPayNow) {
            @$body['is_pay_now'] = $request->isPayNow;
        }

        if (null !== $request->orderId) {
            @$body['order_id'] = $request->orderId;
        }

        if (null !== $request->outChangeApplyId) {
            @$body['out_change_apply_id'] = $request->outChangeApplyId;
        }

        if (null !== $request->outOrderId) {
            @$body['out_order_id'] = $request->outOrderId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripCorpToken) {
            @$realHeaders['x-acs-btrip-corp-token'] = '' . $headers->xAcsBtripCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'TrainApplyChange',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/train/v1/change/apply',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return TrainApplyChangeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 火车票改签申请.
     *
     * @param request - TrainApplyChangeRequest
     *
     * @returns TrainApplyChangeResponse
     *
     * @param TrainApplyChangeRequest $request
     *
     * @return TrainApplyChangeResponse
     */
    public function trainApplyChange($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new TrainApplyChangeHeaders([]);

        return $this->trainApplyChangeWithOptions($request, $headers, $runtime);
    }

    /**
     * 火车票退票申请.
     *
     * @param tmpReq - TrainApplyRefundRequest
     * @param headers - TrainApplyRefundHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TrainApplyRefundResponse
     *
     * @param TrainApplyRefundRequest $tmpReq
     * @param TrainApplyRefundHeaders $headers
     * @param RuntimeOptions          $runtime
     *
     * @return TrainApplyRefundResponse
     */
    public function trainApplyRefundWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new TrainApplyRefundShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->refundTrainInfos) {
            $request->refundTrainInfosShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->refundTrainInfos, 'refund_train_infos', 'json');
        }

        $body = [];
        if (null !== $request->orderId) {
            @$body['order_id'] = $request->orderId;
        }

        if (null !== $request->outOrderId) {
            @$body['out_order_id'] = $request->outOrderId;
        }

        if (null !== $request->outRefundId) {
            @$body['out_refund_id'] = $request->outRefundId;
        }

        if (null !== $request->refundTrainInfosShrink) {
            @$body['refund_train_infos'] = $request->refundTrainInfosShrink;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripCorpToken) {
            @$realHeaders['x-acs-btrip-corp-token'] = '' . $headers->xAcsBtripCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'TrainApplyRefund',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/train/v1/refund/apply',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return TrainApplyRefundResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 火车票退票申请.
     *
     * @param request - TrainApplyRefundRequest
     *
     * @returns TrainApplyRefundResponse
     *
     * @param TrainApplyRefundRequest $request
     *
     * @return TrainApplyRefundResponse
     */
    public function trainApplyRefund($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new TrainApplyRefundHeaders([]);

        return $this->trainApplyRefundWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询火车票记账数据.
     *
     * @param request - TrainBillSettlementQueryRequest
     * @param headers - TrainBillSettlementQueryHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TrainBillSettlementQueryResponse
     *
     * @param TrainBillSettlementQueryRequest $request
     * @param TrainBillSettlementQueryHeaders $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return TrainBillSettlementQueryResponse
     */
    public function trainBillSettlementQueryWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->billBatch) {
            @$query['bill_batch'] = $request->billBatch;
        }

        if (null !== $request->orderId) {
            @$query['order_id'] = $request->orderId;
        }

        if (null !== $request->pageNo) {
            @$query['page_no'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['page_size'] = $request->pageSize;
        }

        if (null !== $request->periodEnd) {
            @$query['period_end'] = $request->periodEnd;
        }

        if (null !== $request->periodStart) {
            @$query['period_start'] = $request->periodStart;
        }

        if (null !== $request->scrollId) {
            @$query['scroll_id'] = $request->scrollId;
        }

        if (null !== $request->scrollMod) {
            @$query['scroll_mod'] = $request->scrollMod;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripSoCorpToken) {
            @$realHeaders['x-acs-btrip-so-corp-token'] = '' . $headers->xAcsBtripSoCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'TrainBillSettlementQuery',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/train/v1/bill-settlement',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return TrainBillSettlementQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询火车票记账数据.
     *
     * @param request - TrainBillSettlementQueryRequest
     *
     * @returns TrainBillSettlementQueryResponse
     *
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
     * 查询火车超标审批详情.
     *
     * @param request - TrainExceedApplyQueryRequest
     * @param headers - TrainExceedApplyQueryHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TrainExceedApplyQueryResponse
     *
     * @param TrainExceedApplyQueryRequest $request
     * @param TrainExceedApplyQueryHeaders $headers
     * @param RuntimeOptions               $runtime
     *
     * @return TrainExceedApplyQueryResponse
     */
    public function trainExceedApplyQueryWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applyId) {
            @$query['apply_id'] = $request->applyId;
        }

        if (null !== $request->businessInstanceId) {
            @$query['business_instance_id'] = $request->businessInstanceId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripSoCorpToken) {
            @$realHeaders['x-acs-btrip-so-corp-token'] = '' . $headers->xAcsBtripSoCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'TrainExceedApplyQuery',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/apply/v1/train-exceed',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return TrainExceedApplyQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询火车超标审批详情.
     *
     * @param request - TrainExceedApplyQueryRequest
     *
     * @returns TrainExceedApplyQueryResponse
     *
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
     * 火车票改签费用预估.
     *
     * @param tmpReq - TrainFeeCalculateChangeRequest
     * @param headers - TrainFeeCalculateChangeHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TrainFeeCalculateChangeResponse
     *
     * @param TrainFeeCalculateChangeRequest $tmpReq
     * @param TrainFeeCalculateChangeHeaders $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return TrainFeeCalculateChangeResponse
     */
    public function trainFeeCalculateChangeWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new TrainFeeCalculateChangeShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->changeTrainDetails) {
            $request->changeTrainDetailsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->changeTrainDetails, 'change_train_details', 'json');
        }

        $body = [];
        if (null !== $request->changeTrainDetailsShrink) {
            @$body['change_train_details'] = $request->changeTrainDetailsShrink;
        }

        if (null !== $request->distributeOrderId) {
            @$body['distribute_order_id'] = $request->distributeOrderId;
        }

        if (null !== $request->orderId) {
            @$body['order_id'] = $request->orderId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripCorpToken) {
            @$realHeaders['x-acs-btrip-corp-token'] = '' . $headers->xAcsBtripCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'TrainFeeCalculateChange',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/train/v1/change/fee',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return TrainFeeCalculateChangeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 火车票改签费用预估.
     *
     * @param request - TrainFeeCalculateChangeRequest
     *
     * @returns TrainFeeCalculateChangeResponse
     *
     * @param TrainFeeCalculateChangeRequest $request
     *
     * @return TrainFeeCalculateChangeResponse
     */
    public function trainFeeCalculateChange($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new TrainFeeCalculateChangeHeaders([]);

        return $this->trainFeeCalculateChangeWithOptions($request, $headers, $runtime);
    }

    /**
     * 火车票退票费用预估.
     *
     * @param tmpReq - TrainFeeCalculateRefundRequest
     * @param headers - TrainFeeCalculateRefundHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TrainFeeCalculateRefundResponse
     *
     * @param TrainFeeCalculateRefundRequest $tmpReq
     * @param TrainFeeCalculateRefundHeaders $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return TrainFeeCalculateRefundResponse
     */
    public function trainFeeCalculateRefundWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new TrainFeeCalculateRefundShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->refundTrainInfos) {
            $request->refundTrainInfosShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->refundTrainInfos, 'refund_train_infos', 'json');
        }

        $body = [];
        if (null !== $request->distributeOrderId) {
            @$body['distribute_order_id'] = $request->distributeOrderId;
        }

        if (null !== $request->orderId) {
            @$body['order_id'] = $request->orderId;
        }

        if (null !== $request->refundTrainInfosShrink) {
            @$body['refund_train_infos'] = $request->refundTrainInfosShrink;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripCorpToken) {
            @$realHeaders['x-acs-btrip-corp-token'] = '' . $headers->xAcsBtripCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'TrainFeeCalculateRefund',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/train/v1/refund/fee',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return TrainFeeCalculateRefundResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 火车票退票费用预估.
     *
     * @param request - TrainFeeCalculateRefundRequest
     *
     * @returns TrainFeeCalculateRefundResponse
     *
     * @param TrainFeeCalculateRefundRequest $request
     *
     * @return TrainFeeCalculateRefundResponse
     */
    public function trainFeeCalculateRefund($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new TrainFeeCalculateRefundHeaders([]);

        return $this->trainFeeCalculateRefundWithOptions($request, $headers, $runtime);
    }

    /**
     * 火车票车次详情查询.
     *
     * @param request - TrainNoInfoSearchRequest
     * @param headers - TrainNoInfoSearchHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TrainNoInfoSearchResponse
     *
     * @param TrainNoInfoSearchRequest $request
     * @param TrainNoInfoSearchHeaders $headers
     * @param RuntimeOptions           $runtime
     *
     * @return TrainNoInfoSearchResponse
     */
    public function trainNoInfoSearchWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->arrLocation) {
            @$body['arr_location'] = $request->arrLocation;
        }

        if (null !== $request->depDate) {
            @$body['dep_date'] = $request->depDate;
        }

        if (null !== $request->depLocation) {
            @$body['dep_location'] = $request->depLocation;
        }

        if (null !== $request->lineKey) {
            @$body['line_key'] = $request->lineKey;
        }

        if (null !== $request->middleDate) {
            @$body['middle_date'] = $request->middleDate;
        }

        if (null !== $request->middleStation) {
            @$body['middle_station'] = $request->middleStation;
        }

        if (null !== $request->orderId) {
            @$body['order_id'] = $request->orderId;
        }

        if (null !== $request->trainNo) {
            @$body['train_no'] = $request->trainNo;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripCorpToken) {
            @$realHeaders['x-acs-btrip-corp-token'] = '' . $headers->xAcsBtripCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'TrainNoInfoSearch',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/train/v1/search/info',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return TrainNoInfoSearchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 火车票车次详情查询.
     *
     * @param request - TrainNoInfoSearchRequest
     *
     * @returns TrainNoInfoSearchResponse
     *
     * @param TrainNoInfoSearchRequest $request
     *
     * @return TrainNoInfoSearchResponse
     */
    public function trainNoInfoSearch($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new TrainNoInfoSearchHeaders([]);

        return $this->trainNoInfoSearchWithOptions($request, $headers, $runtime);
    }

    /**
     * 火车票车次列表查询.
     *
     * @param tmpReq - TrainNoListSearchRequest
     * @param headers - TrainNoListSearchHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TrainNoListSearchResponse
     *
     * @param TrainNoListSearchRequest $tmpReq
     * @param TrainNoListSearchHeaders $headers
     * @param RuntimeOptions           $runtime
     *
     * @return TrainNoListSearchResponse
     */
    public function trainNoListSearchWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new TrainNoListSearchShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->option) {
            $request->optionShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->option, 'option', 'json');
        }

        $body = [];
        if (null !== $request->arrLocation) {
            @$body['arr_location'] = $request->arrLocation;
        }

        if (null !== $request->depDate) {
            @$body['dep_date'] = $request->depDate;
        }

        if (null !== $request->depLocation) {
            @$body['dep_location'] = $request->depLocation;
        }

        if (null !== $request->optionShrink) {
            @$body['option'] = $request->optionShrink;
        }

        if (null !== $request->orderId) {
            @$body['order_id'] = $request->orderId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripCorpToken) {
            @$realHeaders['x-acs-btrip-corp-token'] = '' . $headers->xAcsBtripCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'TrainNoListSearch',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/train/v1/search/list',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return TrainNoListSearchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 火车票车次列表查询.
     *
     * @param request - TrainNoListSearchRequest
     *
     * @returns TrainNoListSearchResponse
     *
     * @param TrainNoListSearchRequest $request
     *
     * @return TrainNoListSearchResponse
     */
    public function trainNoListSearch($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new TrainNoListSearchHeaders([]);

        return $this->trainNoListSearchWithOptions($request, $headers, $runtime);
    }

    /**
     * 火车票订单取消.
     *
     * @param request - TrainOrderCancelRequest
     * @param headers - TrainOrderCancelHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TrainOrderCancelResponse
     *
     * @param TrainOrderCancelRequest $request
     * @param TrainOrderCancelHeaders $headers
     * @param RuntimeOptions          $runtime
     *
     * @return TrainOrderCancelResponse
     */
    public function trainOrderCancelWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->changeOrderId) {
            @$body['change_order_id'] = $request->changeOrderId;
        }

        if (null !== $request->orderId) {
            @$body['order_id'] = $request->orderId;
        }

        if (null !== $request->outChangeOrderId) {
            @$body['out_change_order_id'] = $request->outChangeOrderId;
        }

        if (null !== $request->outOrderId) {
            @$body['out_order_id'] = $request->outOrderId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripCorpToken) {
            @$realHeaders['x-acs-btrip-corp-token'] = '' . $headers->xAcsBtripCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'TrainOrderCancel',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/train/v1/order/cancel',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return TrainOrderCancelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 火车票订单取消.
     *
     * @param request - TrainOrderCancelRequest
     *
     * @returns TrainOrderCancelResponse
     *
     * @param TrainOrderCancelRequest $request
     *
     * @return TrainOrderCancelResponse
     */
    public function trainOrderCancel($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new TrainOrderCancelHeaders([]);

        return $this->trainOrderCancelWithOptions($request, $headers, $runtime);
    }

    /**
     * 火车票改签确认.
     *
     * @param request - TrainOrderChangeConfirmRequest
     * @param headers - TrainOrderChangeConfirmHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TrainOrderChangeConfirmResponse
     *
     * @param TrainOrderChangeConfirmRequest $request
     * @param TrainOrderChangeConfirmHeaders $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return TrainOrderChangeConfirmResponse
     */
    public function trainOrderChangeConfirmWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->changeApplyId) {
            @$body['change_apply_id'] = $request->changeApplyId;
        }

        if (null !== $request->changeSettleAmount) {
            @$body['change_settle_amount'] = $request->changeSettleAmount;
        }

        if (null !== $request->orderId) {
            @$body['order_id'] = $request->orderId;
        }

        if (null !== $request->outChangeApplyId) {
            @$body['out_change_apply_id'] = $request->outChangeApplyId;
        }

        if (null !== $request->outOrderId) {
            @$body['out_order_id'] = $request->outOrderId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripCorpToken) {
            @$realHeaders['x-acs-btrip-corp-token'] = '' . $headers->xAcsBtripCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'TrainOrderChangeConfirm',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/train/v1/change/confirm',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return TrainOrderChangeConfirmResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 火车票改签确认.
     *
     * @param request - TrainOrderChangeConfirmRequest
     *
     * @returns TrainOrderChangeConfirmResponse
     *
     * @param TrainOrderChangeConfirmRequest $request
     *
     * @return TrainOrderChangeConfirmResponse
     */
    public function trainOrderChangeConfirm($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new TrainOrderChangeConfirmHeaders([]);

        return $this->trainOrderChangeConfirmWithOptions($request, $headers, $runtime);
    }

    /**
     * 火车票正向预订.
     *
     * @param tmpReq - TrainOrderCreateRequest
     * @param headers - TrainOrderCreateHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TrainOrderCreateResponse
     *
     * @param TrainOrderCreateRequest $tmpReq
     * @param TrainOrderCreateHeaders $headers
     * @param RuntimeOptions          $runtime
     *
     * @return TrainOrderCreateResponse
     */
    public function trainOrderCreateWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new TrainOrderCreateShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->bookTrainInfos) {
            $request->bookTrainInfosShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->bookTrainInfos, 'book_train_infos', 'json');
        }

        if (null !== $tmpReq->businessInfo) {
            $request->businessInfoShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->businessInfo, 'business_info', 'json');
        }

        if (null !== $tmpReq->contactInfo) {
            $request->contactInfoShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->contactInfo, 'contact_info', 'json');
        }

        if (null !== $tmpReq->passengerOpenInfoS) {
            $request->passengerOpenInfoSShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->passengerOpenInfoS, 'passenger_open_info_s', 'json');
        }

        $body = [];
        if (null !== $request->acceptNoSeat) {
            @$body['accept_no_seat'] = $request->acceptNoSeat;
        }

        if (null !== $request->bookTrainInfosShrink) {
            @$body['book_train_infos'] = $request->bookTrainInfosShrink;
        }

        if (null !== $request->btripUserId) {
            @$body['btrip_user_id'] = $request->btripUserId;
        }

        if (null !== $request->btripUserName) {
            @$body['btrip_user_name'] = $request->btripUserName;
        }

        if (null !== $request->businessInfoShrink) {
            @$body['business_info'] = $request->businessInfoShrink;
        }

        if (null !== $request->contactInfoShrink) {
            @$body['contact_info'] = $request->contactInfoShrink;
        }

        if (null !== $request->forceMatch) {
            @$body['force_match'] = $request->forceMatch;
        }

        if (null !== $request->isPayNow) {
            @$body['is_pay_now'] = $request->isPayNow;
        }

        if (null !== $request->outOrderId) {
            @$body['out_order_id'] = $request->outOrderId;
        }

        if (null !== $request->passengerOpenInfoSShrink) {
            @$body['passenger_open_info_s'] = $request->passengerOpenInfoSShrink;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripCorpToken) {
            @$realHeaders['x-acs-btrip-corp-token'] = '' . $headers->xAcsBtripCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'TrainOrderCreate',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/train/v1/order/create',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return TrainOrderCreateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 火车票正向预订.
     *
     * @param request - TrainOrderCreateRequest
     *
     * @returns TrainOrderCreateResponse
     *
     * @param TrainOrderCreateRequest $request
     *
     * @return TrainOrderCreateResponse
     */
    public function trainOrderCreate($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new TrainOrderCreateHeaders([]);

        return $this->trainOrderCreateWithOptions($request, $headers, $runtime);
    }

    /**
     * 火车票订单详情.
     *
     * @param request - TrainOrderDetailQueryRequest
     * @param headers - TrainOrderDetailQueryHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TrainOrderDetailQueryResponse
     *
     * @param TrainOrderDetailQueryRequest $request
     * @param TrainOrderDetailQueryHeaders $headers
     * @param RuntimeOptions               $runtime
     *
     * @return TrainOrderDetailQueryResponse
     */
    public function trainOrderDetailQueryWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->orderId) {
            @$body['order_id'] = $request->orderId;
        }

        if (null !== $request->outOrderId) {
            @$body['out_order_id'] = $request->outOrderId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripCorpToken) {
            @$realHeaders['x-acs-btrip-corp-token'] = '' . $headers->xAcsBtripCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'TrainOrderDetailQuery',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/train/v1/order/query',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return TrainOrderDetailQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 火车票订单详情.
     *
     * @param request - TrainOrderDetailQueryRequest
     *
     * @returns TrainOrderDetailQueryResponse
     *
     * @param TrainOrderDetailQueryRequest $request
     *
     * @return TrainOrderDetailQueryResponse
     */
    public function trainOrderDetailQuery($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new TrainOrderDetailQueryHeaders([]);

        return $this->trainOrderDetailQueryWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询火车票订单列表.
     *
     * @param request - TrainOrderListQueryRequest
     * @param headers - TrainOrderListQueryHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TrainOrderListQueryResponse
     *
     * @param TrainOrderListQueryRequest $request
     * @param TrainOrderListQueryHeaders $headers
     * @param RuntimeOptions             $runtime
     *
     * @return TrainOrderListQueryResponse
     */
    public function trainOrderListQueryWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->allApply) {
            @$query['all_apply'] = $request->allApply;
        }

        if (null !== $request->applyId) {
            @$query['apply_id'] = $request->applyId;
        }

        if (null !== $request->departId) {
            @$query['depart_id'] = $request->departId;
        }

        if (null !== $request->endTime) {
            @$query['end_time'] = $request->endTime;
        }

        if (null !== $request->page) {
            @$query['page'] = $request->page;
        }

        if (null !== $request->pageSize) {
            @$query['page_size'] = $request->pageSize;
        }

        if (null !== $request->startTime) {
            @$query['start_time'] = $request->startTime;
        }

        if (null !== $request->thirdpartApplyId) {
            @$query['thirdpart_apply_id'] = $request->thirdpartApplyId;
        }

        if (null !== $request->updateEndTime) {
            @$query['update_end_time'] = $request->updateEndTime;
        }

        if (null !== $request->updateStartTime) {
            @$query['update_start_time'] = $request->updateStartTime;
        }

        if (null !== $request->userId) {
            @$query['user_id'] = $request->userId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripSoCorpToken) {
            @$realHeaders['x-acs-btrip-so-corp-token'] = '' . $headers->xAcsBtripSoCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'TrainOrderListQuery',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/train/v1/order-list',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return TrainOrderListQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询火车票订单列表.
     *
     * @param request - TrainOrderListQueryRequest
     *
     * @returns TrainOrderListQueryResponse
     *
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
     * 火车票订单支付.
     *
     * @param request - TrainOrderPayRequest
     * @param headers - TrainOrderPayHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TrainOrderPayResponse
     *
     * @param TrainOrderPayRequest $request
     * @param TrainOrderPayHeaders $headers
     * @param RuntimeOptions       $runtime
     *
     * @return TrainOrderPayResponse
     */
    public function trainOrderPayWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->orderId) {
            @$body['order_id'] = $request->orderId;
        }

        if (null !== $request->outOrderId) {
            @$body['out_order_id'] = $request->outOrderId;
        }

        if (null !== $request->payAmount) {
            @$body['pay_amount'] = $request->payAmount;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripCorpToken) {
            @$realHeaders['x-acs-btrip-corp-token'] = '' . $headers->xAcsBtripCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'TrainOrderPay',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/train/v1/order/pay',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return TrainOrderPayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 火车票订单支付.
     *
     * @param request - TrainOrderPayRequest
     *
     * @returns TrainOrderPayResponse
     *
     * @param TrainOrderPayRequest $request
     *
     * @return TrainOrderPayResponse
     */
    public function trainOrderPay($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new TrainOrderPayHeaders([]);

        return $this->trainOrderPayWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询火车票订单详情（含票信息）.
     *
     * @param request - TrainOrderQueryRequest
     * @param headers - TrainOrderQueryHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TrainOrderQueryResponse
     *
     * @param TrainOrderQueryRequest $request
     * @param TrainOrderQueryHeaders $headers
     * @param RuntimeOptions         $runtime
     *
     * @return TrainOrderQueryResponse
     */
    public function trainOrderQueryWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->orderId) {
            @$query['order_id'] = $request->orderId;
        }

        if (null !== $request->userId) {
            @$query['user_id'] = $request->userId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripSoCorpToken) {
            @$realHeaders['x-acs-btrip-so-corp-token'] = '' . $headers->xAcsBtripSoCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'TrainOrderQuery',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/train/v1/order',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return TrainOrderQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询火车票订单详情（含票信息）.
     *
     * @param request - TrainOrderQueryRequest
     *
     * @returns TrainOrderQueryResponse
     *
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
     * 火车票订单查询V2.
     *
     * @param request - TrainOrderQueryV2Request
     * @param headers - TrainOrderQueryV2Headers
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TrainOrderQueryV2Response
     *
     * @param TrainOrderQueryV2Request $request
     * @param TrainOrderQueryV2Headers $headers
     * @param RuntimeOptions           $runtime
     *
     * @return TrainOrderQueryV2Response
     */
    public function trainOrderQueryV2WithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->orderId) {
            @$query['order_id'] = $request->orderId;
        }

        if (null !== $request->userId) {
            @$query['user_id'] = $request->userId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripCorpToken) {
            @$realHeaders['x-acs-btrip-corp-token'] = '' . $headers->xAcsBtripCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'TrainOrderQueryV2',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/train/v2/order',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return TrainOrderQueryV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 火车票订单查询V2.
     *
     * @param request - TrainOrderQueryV2Request
     *
     * @returns TrainOrderQueryV2Response
     *
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
     * 查询火车站数据.
     *
     * @param request - TrainStationSearchRequest
     * @param headers - TrainStationSearchHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TrainStationSearchResponse
     *
     * @param TrainStationSearchRequest $request
     * @param TrainStationSearchHeaders $headers
     * @param RuntimeOptions            $runtime
     *
     * @return TrainStationSearchResponse
     */
    public function trainStationSearchWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->keyword) {
            @$query['keyword'] = $request->keyword;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripSoCorpToken) {
            @$realHeaders['x-acs-btrip-so-corp-token'] = '' . $headers->xAcsBtripSoCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'TrainStationSearch',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/city/v1/train',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return TrainStationSearchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询火车站数据.
     *
     * @param request - TrainStationSearchRequest
     *
     * @returns TrainStationSearchResponse
     *
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
     * 火车票经停站查询.
     *
     * @param request - TrainStopoverSearchRequest
     * @param headers - TrainStopoverSearchHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TrainStopoverSearchResponse
     *
     * @param TrainStopoverSearchRequest $request
     * @param TrainStopoverSearchHeaders $headers
     * @param RuntimeOptions             $runtime
     *
     * @return TrainStopoverSearchResponse
     */
    public function trainStopoverSearchWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->arrStation) {
            @$body['arr_station'] = $request->arrStation;
        }

        if (null !== $request->depStation) {
            @$body['dep_station'] = $request->depStation;
        }

        if (null !== $request->trainDate) {
            @$body['train_date'] = $request->trainDate;
        }

        if (null !== $request->trainNo) {
            @$body['train_no'] = $request->trainNo;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripCorpToken) {
            @$realHeaders['x-acs-btrip-corp-token'] = '' . $headers->xAcsBtripCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'TrainStopoverSearch',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/train/v1/search/stopover',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return TrainStopoverSearchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 火车票经停站查询.
     *
     * @param request - TrainStopoverSearchRequest
     *
     * @returns TrainStopoverSearchResponse
     *
     * @param TrainStopoverSearchRequest $request
     *
     * @return TrainStopoverSearchResponse
     */
    public function trainStopoverSearch($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new TrainStopoverSearchHeaders([]);

        return $this->trainStopoverSearchWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询火车票凭证扫描件.
     *
     * @param request - TrainTicketScanQueryRequest
     * @param headers - TrainTicketScanQueryHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TrainTicketScanQueryResponse
     *
     * @param TrainTicketScanQueryRequest $request
     * @param TrainTicketScanQueryHeaders $headers
     * @param RuntimeOptions              $runtime
     *
     * @return TrainTicketScanQueryResponse
     */
    public function trainTicketScanQueryWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->billDate) {
            @$query['bill_date'] = $request->billDate;
        }

        if (null !== $request->billId) {
            @$query['bill_id'] = $request->billId;
        }

        if (null !== $request->invoiceSubTaskId) {
            @$query['invoice_sub_task_id'] = $request->invoiceSubTaskId;
        }

        if (null !== $request->pageNo) {
            @$query['page_no'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['page_size'] = $request->pageSize;
        }

        if (null !== $request->serialNumber) {
            @$query['serial_number'] = $request->serialNumber;
        }

        if (null !== $request->ticketNo) {
            @$query['ticket_no'] = $request->ticketNo;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripSoCorpToken) {
            @$realHeaders['x-acs-btrip-so-corp-token'] = '' . $headers->xAcsBtripSoCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'TrainTicketScanQuery',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/scan/v1/train-ticket',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return TrainTicketScanQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询火车票凭证扫描件.
     *
     * @param request - TrainTicketScanQueryRequest
     *
     * @returns TrainTicketScanQueryResponse
     *
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
     * 查询差标列表.
     *
     * @param request - TravelStandardListQueryRequest
     * @param headers - TravelStandardListQueryHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TravelStandardListQueryResponse
     *
     * @param TravelStandardListQueryRequest $request
     * @param TravelStandardListQueryHeaders $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return TravelStandardListQueryResponse
     */
    public function travelStandardListQueryWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fromGroup) {
            @$query['from_group'] = $request->fromGroup;
        }

        if (null !== $request->pageNo) {
            @$query['page_no'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['page_size'] = $request->pageSize;
        }

        if (null !== $request->ruleName) {
            @$query['rule_name'] = $request->ruleName;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripCorpToken) {
            @$realHeaders['x-acs-btrip-corp-token'] = '' . $headers->xAcsBtripCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'TravelStandardListQuery',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/travel-manage/v1/standards/list',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return TravelStandardListQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询差标列表.
     *
     * @param request - TravelStandardListQueryRequest
     *
     * @returns TravelStandardListQueryResponse
     *
     * @param TravelStandardListQueryRequest $request
     *
     * @return TravelStandardListQueryResponse
     */
    public function travelStandardListQuery($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new TravelStandardListQueryHeaders([]);

        return $this->travelStandardListQueryWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询差标详情.
     *
     * @param tmpReq - TravelStandardQueryRequest
     * @param headers - TravelStandardQueryHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TravelStandardQueryResponse
     *
     * @param TravelStandardQueryRequest $tmpReq
     * @param TravelStandardQueryHeaders $headers
     * @param RuntimeOptions             $runtime
     *
     * @return TravelStandardQueryResponse
     */
    public function travelStandardQueryWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new TravelStandardQueryShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->serviceTypeList) {
            $request->serviceTypeListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->serviceTypeList, 'service_type_list', 'json');
        }

        $query = [];
        if (null !== $request->fromGroup) {
            @$query['from_group'] = $request->fromGroup;
        }

        if (null !== $request->ruleCode) {
            @$query['rule_code'] = $request->ruleCode;
        }

        if (null !== $request->serviceTypeListShrink) {
            @$query['service_type_list'] = $request->serviceTypeListShrink;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripCorpToken) {
            @$realHeaders['x-acs-btrip-corp-token'] = '' . $headers->xAcsBtripCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'TravelStandardQuery',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/travel-manage/v1/standards/detail',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return TravelStandardQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询差标详情.
     *
     * @param request - TravelStandardQueryRequest
     *
     * @returns TravelStandardQueryResponse
     *
     * @param TravelStandardQueryRequest $request
     *
     * @return TravelStandardQueryResponse
     */
    public function travelStandardQuery($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new TravelStandardQueryHeaders([]);

        return $this->travelStandardQueryWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询业务流程.
     *
     * @param request - TripBusinessInstanceQueryRequest
     * @param headers - TripBusinessInstanceQueryHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TripBusinessInstanceQueryResponse
     *
     * @param TripBusinessInstanceQueryRequest $request
     * @param TripBusinessInstanceQueryHeaders $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return TripBusinessInstanceQueryResponse
     */
    public function tripBusinessInstanceQueryWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->businessInstanceId) {
            @$query['business_instance_id'] = $request->businessInstanceId;
        }

        if (null !== $request->thirdBusinessId) {
            @$query['third_business_id'] = $request->thirdBusinessId;
        }

        if (null !== $request->userId) {
            @$query['user_id'] = $request->userId;
        }

        if (null !== $request->userName) {
            @$query['user_name'] = $request->userName;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripSoCorpToken) {
            @$realHeaders['x-acs-btrip-so-corp-token'] = '' . $headers->xAcsBtripSoCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'TripBusinessInstanceQuery',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/apply/v1/business',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return TripBusinessInstanceQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询业务流程.
     *
     * @param request - TripBusinessInstanceQueryRequest
     *
     * @returns TripBusinessInstanceQueryResponse
     *
     * @param TripBusinessInstanceQueryRequest $request
     *
     * @return TripBusinessInstanceQueryResponse
     */
    public function tripBusinessInstanceQuery($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new TripBusinessInstanceQueryHeaders([]);

        return $this->tripBusinessInstanceQueryWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询抄送信息.
     *
     * @param request - TripCCInfoQueryRequest
     * @param headers - TripCCInfoQueryHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TripCCInfoQueryResponse
     *
     * @param TripCCInfoQueryRequest $request
     * @param TripCCInfoQueryHeaders $headers
     * @param RuntimeOptions         $runtime
     *
     * @return TripCCInfoQueryResponse
     */
    public function tripCCInfoQueryWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->businessInstanceId) {
            @$query['business_instance_id'] = $request->businessInstanceId;
        }

        if (null !== $request->nodeId) {
            @$query['node_id'] = $request->nodeId;
        }

        if (null !== $request->thirdBusinessId) {
            @$query['third_business_id'] = $request->thirdBusinessId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripCorpToken) {
            @$realHeaders['x-acs-btrip-corp-token'] = '' . $headers->xAcsBtripCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'TripCCInfoQuery',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/apply/v1/cc',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return TripCCInfoQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询抄送信息.
     *
     * @param request - TripCCInfoQueryRequest
     *
     * @returns TripCCInfoQueryResponse
     *
     * @param TripCCInfoQueryRequest $request
     *
     * @return TripCCInfoQueryResponse
     */
    public function tripCCInfoQuery($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new TripCCInfoQueryHeaders([]);

        return $this->tripCCInfoQueryWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询审批任务列表.
     *
     * @param request - TripTaskQueryRequest
     * @param headers - TripTaskQueryHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TripTaskQueryResponse
     *
     * @param TripTaskQueryRequest $request
     * @param TripTaskQueryHeaders $headers
     * @param RuntimeOptions       $runtime
     *
     * @return TripTaskQueryResponse
     */
    public function tripTaskQueryWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->businessInstanceId) {
            @$query['business_instance_id'] = $request->businessInstanceId;
        }

        if (null !== $request->thirdBusinessId) {
            @$query['third_business_id'] = $request->thirdBusinessId;
        }

        if (null !== $request->userId) {
            @$query['user_id'] = $request->userId;
        }

        if (null !== $request->userName) {
            @$query['user_name'] = $request->userName;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripCorpToken) {
            @$realHeaders['x-acs-btrip-corp-token'] = '' . $headers->xAcsBtripCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'TripTaskQuery',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/apply/v1/tasks',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return TripTaskQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询审批任务列表.
     *
     * @param request - TripTaskQueryRequest
     *
     * @returns TripTaskQueryResponse
     *
     * @param TripTaskQueryRequest $request
     *
     * @return TripTaskQueryResponse
     */
    public function tripTaskQuery($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new TripTaskQueryHeaders([]);

        return $this->tripTaskQueryWithOptions($request, $headers, $runtime);
    }

    /**
     * 更新企业自定义角色.
     *
     * @param request - UpdateCustomRoleRequest
     * @param headers - UpdateCustomRoleHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateCustomRoleResponse
     *
     * @param UpdateCustomRoleRequest $request
     * @param UpdateCustomRoleHeaders $headers
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateCustomRoleResponse
     */
    public function updateCustomRoleWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->roleId) {
            @$body['role_id'] = $request->roleId;
        }

        if (null !== $request->roleName) {
            @$body['role_name'] = $request->roleName;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripCorpToken) {
            @$realHeaders['x-acs-btrip-corp-token'] = '' . $headers->xAcsBtripCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateCustomRole',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/role/v1/customRoles/update',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateCustomRoleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新企业自定义角色.
     *
     * @param request - UpdateCustomRoleRequest
     *
     * @returns UpdateCustomRoleResponse
     *
     * @param UpdateCustomRoleRequest $request
     *
     * @return UpdateCustomRoleResponse
     */
    public function updateCustomRole($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new UpdateCustomRoleHeaders([]);

        return $this->updateCustomRoleWithOptions($request, $headers, $runtime);
    }

    /**
     * 修改企业部门.
     *
     * @param tmpReq - UpdateDepartmentRequest
     * @param headers - UpdateDepartmentHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateDepartmentResponse
     *
     * @param UpdateDepartmentRequest $tmpReq
     * @param UpdateDepartmentHeaders $headers
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateDepartmentResponse
     */
    public function updateDepartmentWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateDepartmentShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->managerEmployeeIdList) {
            $request->managerEmployeeIdListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->managerEmployeeIdList, 'manager_employee_id_list', 'json');
        }

        $body = [];
        if (null !== $request->deptName) {
            @$body['dept_name'] = $request->deptName;
        }

        if (null !== $request->managerEmployeeIdListShrink) {
            @$body['manager_employee_id_list'] = $request->managerEmployeeIdListShrink;
        }

        if (null !== $request->outDeptId) {
            @$body['out_dept_id'] = $request->outDeptId;
        }

        if (null !== $request->outDeptPid) {
            @$body['out_dept_pid'] = $request->outDeptPid;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripCorpToken) {
            @$realHeaders['x-acs-btrip-corp-token'] = '' . $headers->xAcsBtripCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateDepartment',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/department/v2/update',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateDepartmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改企业部门.
     *
     * @param request - UpdateDepartmentRequest
     *
     * @returns UpdateDepartmentResponse
     *
     * @param UpdateDepartmentRequest $request
     *
     * @return UpdateDepartmentResponse
     */
    public function updateDepartment($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new UpdateDepartmentHeaders([]);

        return $this->updateDepartmentWithOptions($request, $headers, $runtime);
    }

    /**
     * 更新员工信息.
     *
     * @param tmpReq - UpdateEmployeeRequest
     * @param headers - UpdateEmployeeHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateEmployeeResponse
     *
     * @param UpdateEmployeeRequest $tmpReq
     * @param UpdateEmployeeHeaders $headers
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateEmployeeResponse
     */
    public function updateEmployeeWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateEmployeeShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->baseCityCodeList) {
            $request->baseCityCodeListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->baseCityCodeList, 'base_city_code_list', 'json');
        }

        if (null !== $tmpReq->baseLocationList) {
            $request->baseLocationListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->baseLocationList, 'base_location_list', 'json');
        }

        if (null !== $tmpReq->certList) {
            $request->certListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->certList, 'cert_list', 'json');
        }

        if (null !== $tmpReq->customRoleCodeList) {
            $request->customRoleCodeListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->customRoleCodeList, 'custom_role_code_list', 'json');
        }

        if (null !== $tmpReq->outDeptIdList) {
            $request->outDeptIdListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->outDeptIdList, 'out_dept_id_list', 'json');
        }

        $body = [];
        if (null !== $request->attribute) {
            @$body['attribute'] = $request->attribute;
        }

        if (null !== $request->avatar) {
            @$body['avatar'] = $request->avatar;
        }

        if (null !== $request->baseCityCodeListShrink) {
            @$body['base_city_code_list'] = $request->baseCityCodeListShrink;
        }

        if (null !== $request->baseLocationListShrink) {
            @$body['base_location_list'] = $request->baseLocationListShrink;
        }

        if (null !== $request->birthday) {
            @$body['birthday'] = $request->birthday;
        }

        if (null !== $request->certListShrink) {
            @$body['cert_list'] = $request->certListShrink;
        }

        if (null !== $request->customRoleCodeListShrink) {
            @$body['custom_role_code_list'] = $request->customRoleCodeListShrink;
        }

        if (null !== $request->email) {
            @$body['email'] = $request->email;
        }

        if (null !== $request->gender) {
            @$body['gender'] = $request->gender;
        }

        if (null !== $request->isAdmin) {
            @$body['is_admin'] = $request->isAdmin;
        }

        if (null !== $request->isBoss) {
            @$body['is_boss'] = $request->isBoss;
        }

        if (null !== $request->isDeptLeader) {
            @$body['is_dept_leader'] = $request->isDeptLeader;
        }

        if (null !== $request->jobNo) {
            @$body['job_no'] = $request->jobNo;
        }

        if (null !== $request->managerUserId) {
            @$body['manager_user_id'] = $request->managerUserId;
        }

        if (null !== $request->outDeptIdListShrink) {
            @$body['out_dept_id_list'] = $request->outDeptIdListShrink;
        }

        if (null !== $request->phone) {
            @$body['phone'] = $request->phone;
        }

        if (null !== $request->positionLevel) {
            @$body['position_level'] = $request->positionLevel;
        }

        if (null !== $request->realName) {
            @$body['real_name'] = $request->realName;
        }

        if (null !== $request->realNameEn) {
            @$body['real_name_en'] = $request->realNameEn;
        }

        if (null !== $request->userId) {
            @$body['user_id'] = $request->userId;
        }

        if (null !== $request->userNick) {
            @$body['user_nick'] = $request->userNick;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripCorpToken) {
            @$realHeaders['x-acs-btrip-corp-token'] = '' . $headers->xAcsBtripCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateEmployee',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/employee/v2/update',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateEmployeeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新员工信息.
     *
     * @param request - UpdateEmployeeRequest
     *
     * @returns UpdateEmployeeResponse
     *
     * @param UpdateEmployeeRequest $request
     *
     * @return UpdateEmployeeResponse
     */
    public function updateEmployee($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new UpdateEmployeeHeaders([]);

        return $this->updateEmployeeWithOptions($request, $headers, $runtime);
    }

    /**
     * 更新员工在职状态
     *
     * @param request - UpdateEmployeeLeaveStatusRequest
     * @param headers - UpdateEmployeeLeaveStatusHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateEmployeeLeaveStatusResponse
     *
     * @param UpdateEmployeeLeaveStatusRequest $request
     * @param UpdateEmployeeLeaveStatusHeaders $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return UpdateEmployeeLeaveStatusResponse
     */
    public function updateEmployeeLeaveStatusWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->isLeave) {
            @$body['is_leave'] = $request->isLeave;
        }

        if (null !== $request->userId) {
            @$body['user_id'] = $request->userId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripCorpToken) {
            @$realHeaders['x-acs-btrip-corp-token'] = '' . $headers->xAcsBtripCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateEmployeeLeaveStatus',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/employee/v2/updateLeaveStatus',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateEmployeeLeaveStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新员工在职状态
     *
     * @param request - UpdateEmployeeLeaveStatusRequest
     *
     * @returns UpdateEmployeeLeaveStatusResponse
     *
     * @param UpdateEmployeeLeaveStatusRequest $request
     *
     * @return UpdateEmployeeLeaveStatusResponse
     */
    public function updateEmployeeLeaveStatus($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new UpdateEmployeeLeaveStatusHeaders([]);

        return $this->updateEmployeeLeaveStatusWithOptions($request, $headers, $runtime);
    }

    /**
     * 人员查询.
     *
     * @param request - UserQueryRequest
     * @param headers - UserQueryHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UserQueryResponse
     *
     * @param UserQueryRequest $request
     * @param UserQueryHeaders $headers
     * @param RuntimeOptions   $runtime
     *
     * @return UserQueryResponse
     */
    public function userQueryWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->modifiedTimeGreaterOrEqualThan) {
            @$query['modified_time_greater_or_equal_than'] = $request->modifiedTimeGreaterOrEqualThan;
        }

        if (null !== $request->pageSize) {
            @$query['page_size'] = $request->pageSize;
        }

        if (null !== $request->pageToken) {
            @$query['page_token'] = $request->pageToken;
        }

        if (null !== $request->thirdPartJobNo) {
            @$query['third_part_job_no'] = $request->thirdPartJobNo;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripSoCorpToken) {
            @$realHeaders['x-acs-btrip-so-corp-token'] = '' . $headers->xAcsBtripSoCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UserQuery',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/user/v1/user',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UserQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 人员查询.
     *
     * @param request - UserQueryRequest
     *
     * @returns UserQueryResponse
     *
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
     * 查询增值服务记账数据.
     *
     * @param request - VasBillSettlementQueryRequest
     * @param headers - VasBillSettlementQueryHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns VasBillSettlementQueryResponse
     *
     * @param VasBillSettlementQueryRequest $request
     * @param VasBillSettlementQueryHeaders $headers
     * @param RuntimeOptions                $runtime
     *
     * @return VasBillSettlementQueryResponse
     */
    public function vasBillSettlementQueryWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->billBatch) {
            @$query['bill_batch'] = $request->billBatch;
        }

        if (null !== $request->cooperatorId) {
            @$query['cooperator_id'] = $request->cooperatorId;
        }

        if (null !== $request->orderId) {
            @$query['order_id'] = $request->orderId;
        }

        if (null !== $request->pageNo) {
            @$query['page_no'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['page_size'] = $request->pageSize;
        }

        if (null !== $request->periodEnd) {
            @$query['period_end'] = $request->periodEnd;
        }

        if (null !== $request->periodStart) {
            @$query['period_start'] = $request->periodStart;
        }

        if (null !== $request->scrollId) {
            @$query['scroll_id'] = $request->scrollId;
        }

        if (null !== $request->scrollMod) {
            @$query['scroll_mod'] = $request->scrollMod;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripCorpToken) {
            @$realHeaders['x-acs-btrip-corp-token'] = '' . $headers->xAcsBtripCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'VasBillSettlementQuery',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/vas/v1/bill-settlement',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return VasBillSettlementQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询增值服务记账数据.
     *
     * @param request - VasBillSettlementQueryRequest
     *
     * @returns VasBillSettlementQueryResponse
     *
     * @param VasBillSettlementQueryRequest $request
     *
     * @return VasBillSettlementQueryResponse
     */
    public function vasBillSettlementQuery($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new VasBillSettlementQueryHeaders([]);

        return $this->vasBillSettlementQueryWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询增值税发票扫描件.
     *
     * @param request - VatInvoiceScanQueryRequest
     * @param headers - VatInvoiceScanQueryHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns VatInvoiceScanQueryResponse
     *
     * @param VatInvoiceScanQueryRequest $request
     * @param VatInvoiceScanQueryHeaders $headers
     * @param RuntimeOptions             $runtime
     *
     * @return VatInvoiceScanQueryResponse
     */
    public function vatInvoiceScanQueryWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->billDate) {
            @$query['bill_date'] = $request->billDate;
        }

        if (null !== $request->billId) {
            @$query['bill_id'] = $request->billId;
        }

        if (null !== $request->invoiceSubTaskId) {
            @$query['invoice_sub_task_id'] = $request->invoiceSubTaskId;
        }

        if (null !== $request->pageNo) {
            @$query['page_no'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['page_size'] = $request->pageSize;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripSoCorpToken) {
            @$realHeaders['x-acs-btrip-so-corp-token'] = '' . $headers->xAcsBtripSoCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'VatInvoiceScanQuery',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/scan/v1/vat-invoice',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return VatInvoiceScanQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询增值税发票扫描件.
     *
     * @param request - VatInvoiceScanQueryRequest
     *
     * @returns VatInvoiceScanQueryResponse
     *
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
     * 查询账期待申请的发票数据.
     *
     * @param request - WaitApplyInvoiceTaskDetailQueryRequest
     * @param headers - WaitApplyInvoiceTaskDetailQueryHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns WaitApplyInvoiceTaskDetailQueryResponse
     *
     * @param WaitApplyInvoiceTaskDetailQueryRequest $request
     * @param WaitApplyInvoiceTaskDetailQueryHeaders $headers
     * @param RuntimeOptions                         $runtime
     *
     * @return WaitApplyInvoiceTaskDetailQueryResponse
     */
    public function waitApplyInvoiceTaskDetailQueryWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->billDate) {
            @$query['bill_date'] = $request->billDate;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsBtripSoCorpToken) {
            @$realHeaders['x-acs-btrip-so-corp-token'] = '' . $headers->xAcsBtripSoCorpToken;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'WaitApplyInvoiceTaskDetailQuery',
            'version' => '2022-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/invoice/v1/wait-apply-task',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return WaitApplyInvoiceTaskDetailQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询账期待申请的发票数据.
     *
     * @param request - WaitApplyInvoiceTaskDetailQueryRequest
     *
     * @returns WaitApplyInvoiceTaskDetailQueryResponse
     *
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
