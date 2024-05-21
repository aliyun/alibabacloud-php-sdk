<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\AccessTokenRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\AccessTokenResponse;
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
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IeFlightBillSettlementQueryHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IeFlightBillSettlementQueryRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IeFlightBillSettlementQueryResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IeHotelBillSettlementQueryHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IeHotelBillSettlementQueryRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IeHotelBillSettlementQueryResponse;
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
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightOrderPayShrinkRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightOtaItemDetailHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightOtaItemDetailRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightOtaItemDetailResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightOtaSearchHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightOtaSearchRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightOtaSearchResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightOtaSearchShrinkRequest;
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
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ProjectAddHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ProjectAddRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ProjectAddResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ProjectDeleteHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ProjectDeleteRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ProjectDeleteResponse;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ProjectModifyHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ProjectModifyRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ProjectModifyResponse;
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
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\UpdateCustomRoleHeaders;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\UpdateCustomRoleRequest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\UpdateCustomRoleResponse;
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
     * @summary 换取accessToken接口
     *  *
     * @param AccessTokenRequest $request AccessTokenRequest
     * @param string[]           $headers map
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return AccessTokenResponse AccessTokenResponse
     */
    public function accessTokenWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
     * @summary 换取accessToken接口
     *  *
     * @param AccessTokenRequest $request AccessTokenRequest
     *
     * @return AccessTokenResponse AccessTokenResponse
     */
    public function accessToken($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->accessTokenWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 批量新增企业自定义角色下人员
     *  *
     * @param AddEmployeesToCustomRoleRequest $tmpReq  AddEmployeesToCustomRoleRequest
     * @param AddEmployeesToCustomRoleHeaders $headers AddEmployeesToCustomRoleHeaders
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return AddEmployeesToCustomRoleResponse AddEmployeesToCustomRoleResponse
     */
    public function addEmployeesToCustomRoleWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new AddEmployeesToCustomRoleShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->userIdList)) {
            $request->userIdListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->userIdList, 'user_id_list', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->roleId)) {
            $body['role_id'] = $request->roleId;
        }
        if (!Utils::isUnset($request->userIdListShrink)) {
            $body['user_id_list'] = $request->userIdListShrink;
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
            'action'      => 'AddEmployeesToCustomRole',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/role/v1/customRoleEmployees/add',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddEmployeesToCustomRoleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 批量新增企业自定义角色下人员
     *  *
     * @param AddEmployeesToCustomRoleRequest $request AddEmployeesToCustomRoleRequest
     *
     * @return AddEmployeesToCustomRoleResponse AddEmployeesToCustomRoleResponse
     */
    public function addEmployeesToCustomRole($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new AddEmployeesToCustomRoleHeaders([]);

        return $this->addEmployeesToCustomRoleWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 新增发票抬头适用人员
     *  *
     * @param AddInvoiceEntityRequest $tmpReq  AddInvoiceEntityRequest
     * @param AddInvoiceEntityHeaders $headers AddInvoiceEntityHeaders
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return AddInvoiceEntityResponse AddInvoiceEntityResponse
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
     * @summary 新增发票抬头适用人员
     *  *
     * @param AddInvoiceEntityRequest $request AddInvoiceEntityRequest
     *
     * @return AddInvoiceEntityResponse AddInvoiceEntityResponse
     */
    public function addInvoiceEntity($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new AddInvoiceEntityHeaders([]);

        return $this->addInvoiceEntityWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 商旅功能页跳转
     *  *
     * @param AddressGetRequest $request AddressGetRequest
     * @param AddressGetHeaders $headers AddressGetHeaders
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return AddressGetResponse AddressGetResponse
     */
    public function addressGetWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->actionType)) {
            $query['action_type'] = $request->actionType;
        }
        if (!Utils::isUnset($request->arrCityCode)) {
            $query['arr_city_code'] = $request->arrCityCode;
        }
        if (!Utils::isUnset($request->arrCityName)) {
            $query['arr_city_name'] = $request->arrCityName;
        }
        if (!Utils::isUnset($request->carScenesCode)) {
            $query['car_scenes_code'] = $request->carScenesCode;
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
        if (!Utils::isUnset($request->itineraryId)) {
            $query['itinerary_id'] = $request->itineraryId;
        }
        if (!Utils::isUnset($request->orderId)) {
            $query['order_Id'] = $request->orderId;
        }
        if (!Utils::isUnset($request->phone)) {
            $query['phone'] = $request->phone;
        }
        if (!Utils::isUnset($request->subCorpId)) {
            $query['sub_corp_id'] = $request->subCorpId;
        }
        if (!Utils::isUnset($request->taobaoCallbackUrl)) {
            $query['taobao_callback_url'] = $request->taobaoCallbackUrl;
        }
        if (!Utils::isUnset($request->travelerId)) {
            $query['traveler_id'] = $request->travelerId;
        }
        if (!Utils::isUnset($request->type)) {
            $query['type'] = $request->type;
        }
        if (!Utils::isUnset($request->useBookingProxy)) {
            $query['use_booking_proxy'] = $request->useBookingProxy;
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
     * @summary 商旅功能页跳转
     *  *
     * @param AddressGetRequest $request AddressGetRequest
     *
     * @return AddressGetResponse AddressGetResponse
     */
    public function addressGet($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new AddressGetHeaders([]);

        return $this->addressGetWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 查询机场数据
     *  *
     * @param AirportSearchRequest $request AirportSearchRequest
     * @param AirportSearchHeaders $headers AirportSearchHeaders
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return AirportSearchResponse AirportSearchResponse
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
     * @summary 查询机场数据
     *  *
     * @param AirportSearchRequest $request AirportSearchRequest
     *
     * @return AirportSearchResponse AirportSearchResponse
     */
    public function airportSearch($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new AirportSearchHeaders([]);

        return $this->airportSearchWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 全量查询商旅城市行政区划编码信息
     *  *
     * @param AllBaseCityInfoQueryHeaders $headers AllBaseCityInfoQueryHeaders
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return AllBaseCityInfoQueryResponse AllBaseCityInfoQueryResponse
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
     * @summary 全量查询商旅城市行政区划编码信息
     *  *
     * @return AllBaseCityInfoQueryResponse AllBaseCityInfoQueryResponse
     */
    public function allBaseCityInfoQuery()
    {
        $runtime = new RuntimeOptions([]);
        $headers = new AllBaseCityInfoQueryHeaders([]);

        return $this->allBaseCityInfoQueryWithOptions($headers, $runtime);
    }

    /**
     * @summary 新建出差审批单
     *  *
     * @param ApplyAddRequest $tmpReq  ApplyAddRequest
     * @param ApplyAddHeaders $headers ApplyAddHeaders
     * @param RuntimeOptions  $runtime runtime options for this request RuntimeOptions
     *
     * @return ApplyAddResponse ApplyAddResponse
     */
    public function applyAddWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ApplyAddShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->carRule)) {
            $request->carRuleShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->carRule, 'car_rule', 'json');
        }
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
        if (!Utils::isUnset($request->carRuleShrink)) {
            $body['car_rule'] = $request->carRuleShrink;
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
        if (!Utils::isUnset($request->internationalFlightCabins)) {
            $body['international_flight_cabins'] = $request->internationalFlightCabins;
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
        if (!Utils::isUnset($request->paymentDepartmentId)) {
            $body['payment_department_id'] = $request->paymentDepartmentId;
        }
        if (!Utils::isUnset($request->paymentDepartmentName)) {
            $body['payment_department_name'] = $request->paymentDepartmentName;
        }
        if (!Utils::isUnset($request->status)) {
            $body['status'] = $request->status;
        }
        if (!Utils::isUnset($request->subCorpId)) {
            $body['sub_corp_id'] = $request->subCorpId;
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
     * @summary 新建出差审批单
     *  *
     * @param ApplyAddRequest $request ApplyAddRequest
     *
     * @return ApplyAddResponse ApplyAddResponse
     */
    public function applyAdd($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ApplyAddHeaders([]);

        return $this->applyAddWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 更新出差审批单（状态）
     *  *
     * @param ApplyApproveRequest $request ApplyApproveRequest
     * @param ApplyApproveHeaders $headers ApplyApproveHeaders
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return ApplyApproveResponse ApplyApproveResponse
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
        if (!Utils::isUnset($request->subCorpId)) {
            $body['sub_corp_id'] = $request->subCorpId;
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
     * @summary 更新出差审批单（状态）
     *  *
     * @param ApplyApproveRequest $request ApplyApproveRequest
     *
     * @return ApplyApproveResponse ApplyApproveResponse
     */
    public function applyApprove($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ApplyApproveHeaders([]);

        return $this->applyApproveWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 外部审批节点状态同步
     *  *
     * @param ApplyExternalNodeStatusUpdateRequest $tmpReq  ApplyExternalNodeStatusUpdateRequest
     * @param ApplyExternalNodeStatusUpdateHeaders $headers ApplyExternalNodeStatusUpdateHeaders
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return ApplyExternalNodeStatusUpdateResponse ApplyExternalNodeStatusUpdateResponse
     */
    public function applyExternalNodeStatusUpdateWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ApplyExternalNodeStatusUpdateShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->operationRecords)) {
            $request->operationRecordsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->operationRecords, 'operation_records', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->nodeId)) {
            $body['node_id'] = $request->nodeId;
        }
        if (!Utils::isUnset($request->operationRecordsShrink)) {
            $body['operation_records'] = $request->operationRecordsShrink;
        }
        if (!Utils::isUnset($request->processActionResult)) {
            $body['process_action_result'] = $request->processActionResult;
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
            'action'      => 'ApplyExternalNodeStatusUpdate',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/apply/v1/external-nodes/action/status-update',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ApplyExternalNodeStatusUpdateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 外部审批节点状态同步
     *  *
     * @param ApplyExternalNodeStatusUpdateRequest $request ApplyExternalNodeStatusUpdateRequest
     *
     * @return ApplyExternalNodeStatusUpdateResponse ApplyExternalNodeStatusUpdateResponse
     */
    public function applyExternalNodeStatusUpdate($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ApplyExternalNodeStatusUpdateHeaders([]);

        return $this->applyExternalNodeStatusUpdateWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 申请发票
     *  *
     * @param ApplyInvoiceTaskRequest $tmpReq  ApplyInvoiceTaskRequest
     * @param ApplyInvoiceTaskHeaders $headers ApplyInvoiceTaskHeaders
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ApplyInvoiceTaskResponse ApplyInvoiceTaskResponse
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
     * @summary 申请发票
     *  *
     * @param ApplyInvoiceTaskRequest $request ApplyInvoiceTaskRequest
     *
     * @return ApplyInvoiceTaskResponse ApplyInvoiceTaskResponse
     */
    public function applyInvoiceTask($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ApplyInvoiceTaskHeaders([]);

        return $this->applyInvoiceTaskWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 查询出差审批单列表
     *  *
     * @param ApplyListQueryRequest $request ApplyListQueryRequest
     * @param ApplyListQueryHeaders $headers ApplyListQueryHeaders
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return ApplyListQueryResponse ApplyListQueryResponse
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
        if (!Utils::isUnset($request->subCorpId)) {
            $query['sub_corp_id'] = $request->subCorpId;
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
     * @summary 查询出差审批单列表
     *  *
     * @param ApplyListQueryRequest $request ApplyListQueryRequest
     *
     * @return ApplyListQueryResponse ApplyListQueryResponse
     */
    public function applyListQuery($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ApplyListQueryHeaders([]);

        return $this->applyListQueryWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 更新出差审批单
     *  *
     * @param ApplyModifyRequest $tmpReq  ApplyModifyRequest
     * @param ApplyModifyHeaders $headers ApplyModifyHeaders
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return ApplyModifyResponse ApplyModifyResponse
     */
    public function applyModifyWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ApplyModifyShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->carRule)) {
            $request->carRuleShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->carRule, 'car_rule', 'json');
        }
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
        if (!Utils::isUnset($request->carRuleShrink)) {
            $body['car_rule'] = $request->carRuleShrink;
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
        if (!Utils::isUnset($request->paymentDepartmentId)) {
            $body['payment_department_id'] = $request->paymentDepartmentId;
        }
        if (!Utils::isUnset($request->paymentDepartmentName)) {
            $body['payment_department_name'] = $request->paymentDepartmentName;
        }
        if (!Utils::isUnset($request->status)) {
            $body['status'] = $request->status;
        }
        if (!Utils::isUnset($request->subCorpId)) {
            $body['sub_corp_id'] = $request->subCorpId;
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
     * @summary 更新出差审批单
     *  *
     * @param ApplyModifyRequest $request ApplyModifyRequest
     *
     * @return ApplyModifyResponse ApplyModifyResponse
     */
    public function applyModify($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ApplyModifyHeaders([]);

        return $this->applyModifyWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 查询出差审批单详情
     *  *
     * @param ApplyQueryRequest $request ApplyQueryRequest
     * @param ApplyQueryHeaders $headers ApplyQueryHeaders
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return ApplyQueryResponse ApplyQueryResponse
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
        if (!Utils::isUnset($request->subCorpId)) {
            $query['sub_corp_id'] = $request->subCorpId;
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
     * @summary 查询出差审批单详情
     *  *
     * @param ApplyQueryRequest $request ApplyQueryRequest
     *
     * @return ApplyQueryResponse ApplyQueryResponse
     */
    public function applyQuery($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ApplyQueryHeaders([]);

        return $this->applyQueryWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 搜索国内/国际（港澳台）城市基础行政区划数据
     *  *
     * @param BaseCityInfoSearchRequest $request BaseCityInfoSearchRequest
     * @param BaseCityInfoSearchHeaders $headers BaseCityInfoSearchHeaders
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return BaseCityInfoSearchResponse BaseCityInfoSearchResponse
     */
    public function baseCityInfoSearchWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->keyword)) {
            $query['keyword'] = $request->keyword;
        }
        if (!Utils::isUnset($request->region)) {
            $query['region'] = $request->region;
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
            'action'      => 'BaseCityInfoSearch',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/city/v1/cities/action/search',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return BaseCityInfoSearchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 搜索国内/国际（港澳台）城市基础行政区划数据
     *  *
     * @param BaseCityInfoSearchRequest $request BaseCityInfoSearchRequest
     *
     * @return BaseCityInfoSearchResponse BaseCityInfoSearchResponse
     */
    public function baseCityInfoSearch($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new BaseCityInfoSearchHeaders([]);

        return $this->baseCityInfoSearchWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 商旅账单内容修改
     *  *
     * @param BtripBillInfoAdjustRequest $request BtripBillInfoAdjustRequest
     * @param BtripBillInfoAdjustHeaders $headers BtripBillInfoAdjustHeaders
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return BtripBillInfoAdjustResponse BtripBillInfoAdjustResponse
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
     * @summary 商旅账单内容修改
     *  *
     * @param BtripBillInfoAdjustRequest $request BtripBillInfoAdjustRequest
     *
     * @return BtripBillInfoAdjustResponse BtripBillInfoAdjustResponse
     */
    public function btripBillInfoAdjust($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new BtripBillInfoAdjustHeaders([]);

        return $this->btripBillInfoAdjustWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 同步市内用车审批单
     *  *
     * @param CarApplyAddRequest $tmpReq  CarApplyAddRequest
     * @param CarApplyAddHeaders $headers CarApplyAddHeaders
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return CarApplyAddResponse CarApplyAddResponse
     */
    public function carApplyAddWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CarApplyAddShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->travelerStandard)) {
            $request->travelerStandardShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->travelerStandard, 'traveler_standard', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->cause)) {
            $body['cause'] = $request->cause;
        }
        if (!Utils::isUnset($request->city)) {
            $body['city'] = $request->city;
        }
        if (!Utils::isUnset($request->cityCodeSet)) {
            $body['city_code_set'] = $request->cityCodeSet;
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
        if (!Utils::isUnset($request->travelerStandardShrink)) {
            $body['traveler_standard'] = $request->travelerStandardShrink;
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
     * @summary 同步市内用车审批单
     *  *
     * @param CarApplyAddRequest $request CarApplyAddRequest
     *
     * @return CarApplyAddResponse CarApplyAddResponse
     */
    public function carApplyAdd($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CarApplyAddHeaders([]);

        return $this->carApplyAddWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 更新市内用车审批单
     *  *
     * @param CarApplyModifyRequest $request CarApplyModifyRequest
     * @param CarApplyModifyHeaders $headers CarApplyModifyHeaders
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return CarApplyModifyResponse CarApplyModifyResponse
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
     * @summary 更新市内用车审批单
     *  *
     * @param CarApplyModifyRequest $request CarApplyModifyRequest
     *
     * @return CarApplyModifyResponse CarApplyModifyResponse
     */
    public function carApplyModify($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CarApplyModifyHeaders([]);

        return $this->carApplyModifyWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 查询市内用车审批单
     *  *
     * @param CarApplyQueryRequest $request CarApplyQueryRequest
     * @param CarApplyQueryHeaders $headers CarApplyQueryHeaders
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return CarApplyQueryResponse CarApplyQueryResponse
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
     * @summary 查询市内用车审批单
     *  *
     * @param CarApplyQueryRequest $request CarApplyQueryRequest
     *
     * @return CarApplyQueryResponse CarApplyQueryResponse
     */
    public function carApplyQuery($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CarApplyQueryHeaders([]);

        return $this->carApplyQueryWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 查询用车记账数据
     *  *
     * @param CarBillSettlementQueryRequest $request CarBillSettlementQueryRequest
     * @param CarBillSettlementQueryHeaders $headers CarBillSettlementQueryHeaders
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return CarBillSettlementQueryResponse CarBillSettlementQueryResponse
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
     * @summary 查询用车记账数据
     *  *
     * @param CarBillSettlementQueryRequest $request CarBillSettlementQueryRequest
     *
     * @return CarBillSettlementQueryResponse CarBillSettlementQueryResponse
     */
    public function carBillSettlementQuery($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CarBillSettlementQueryHeaders([]);

        return $this->carBillSettlementQueryWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 查询用车订单列表
     *  *
     * @param CarOrderListQueryRequest $request CarOrderListQueryRequest
     * @param CarOrderListQueryHeaders $headers CarOrderListQueryHeaders
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return CarOrderListQueryResponse CarOrderListQueryResponse
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
     * @summary 查询用车订单列表
     *  *
     * @param CarOrderListQueryRequest $request CarOrderListQueryRequest
     *
     * @return CarOrderListQueryResponse CarOrderListQueryResponse
     */
    public function carOrderListQuery($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CarOrderListQueryHeaders([]);

        return $this->carOrderListQueryWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 用车订单查询
     *  *
     * @param CarOrderQueryRequest $request CarOrderQueryRequest
     * @param CarOrderQueryHeaders $headers CarOrderQueryHeaders
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return CarOrderQueryResponse CarOrderQueryResponse
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
     * @summary 用车订单查询
     *  *
     * @param CarOrderQueryRequest $request CarOrderQueryRequest
     *
     * @return CarOrderQueryResponse CarOrderQueryResponse
     */
    public function carOrderQuery($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CarOrderQueryHeaders([]);

        return $this->carOrderQueryWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 查询企业用车场景
     *  *
     * @param CarSceneQueryHeaders $headers CarSceneQueryHeaders
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return CarSceneQueryResponse CarSceneQueryResponse
     */
    public function carSceneQueryWithOptions($headers, $runtime)
    {
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsBtripCorpToken)) {
            $realHeaders['x-acs-btrip-corp-token'] = Utils::toJSONString($headers->xAcsBtripCorpToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
        ]);
        $params = new Params([
            'action'      => 'CarSceneQuery',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/car/v1/scenes',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CarSceneQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询企业用车场景
     *  *
     * @return CarSceneQueryResponse CarSceneQueryResponse
     */
    public function carSceneQuery()
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CarSceneQueryHeaders([]);

        return $this->carSceneQueryWithOptions($headers, $runtime);
    }

    /**
     * @summary 查询行政区划（市，区）基础数据
     *  *
     * @param CitySearchRequest $request CitySearchRequest
     * @param CitySearchHeaders $headers CitySearchHeaders
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return CitySearchResponse CitySearchResponse
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
     * @summary 查询行政区划（市，区）基础数据
     *  *
     * @param CitySearchRequest $request CitySearchRequest
     *
     * @return CitySearchResponse CitySearchResponse
     */
    public function citySearch($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CitySearchHeaders([]);

        return $this->citySearchWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 查询退改审批信息
     *  *
     * @param CommonApplyQueryRequest $request CommonApplyQueryRequest
     * @param CommonApplyQueryHeaders $headers CommonApplyQueryHeaders
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return CommonApplyQueryResponse CommonApplyQueryResponse
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
     * @summary 查询退改审批信息
     *  *
     * @param CommonApplyQueryRequest $request CommonApplyQueryRequest
     *
     * @return CommonApplyQueryResponse CommonApplyQueryResponse
     */
    public function commonApplyQuery($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CommonApplyQueryHeaders([]);

        return $this->commonApplyQueryWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 退改审批结果同步
     *  *
     * @param CommonApplySyncRequest $request CommonApplySyncRequest
     * @param CommonApplySyncHeaders $headers CommonApplySyncHeaders
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return CommonApplySyncResponse CommonApplySyncResponse
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
     * @summary 退改审批结果同步
     *  *
     * @param CommonApplySyncRequest $request CommonApplySyncRequest
     *
     * @return CommonApplySyncResponse CommonApplySyncResponse
     */
    public function commonApplySync($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CommonApplySyncHeaders([]);

        return $this->commonApplySyncWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 查询服务商机票记账数据
     *  *
     * @param CooperatorFlightBillSettlementQueryRequest $request CooperatorFlightBillSettlementQueryRequest
     * @param CooperatorFlightBillSettlementQueryHeaders $headers CooperatorFlightBillSettlementQueryHeaders
     * @param RuntimeOptions                             $runtime runtime options for this request RuntimeOptions
     *
     * @return CooperatorFlightBillSettlementQueryResponse CooperatorFlightBillSettlementQueryResponse
     */
    public function cooperatorFlightBillSettlementQueryWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cooperatorId)) {
            $query['cooperator_id'] = $request->cooperatorId;
        }
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
        if (!Utils::isUnset($headers->xAcsBtripCorpToken)) {
            $realHeaders['x-acs-btrip-corp-token'] = Utils::toJSONString($headers->xAcsBtripCorpToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CooperatorFlightBillSettlementQuery',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/cooperator-flight/v1/bill-settlement',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CooperatorFlightBillSettlementQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询服务商机票记账数据
     *  *
     * @param CooperatorFlightBillSettlementQueryRequest $request CooperatorFlightBillSettlementQueryRequest
     *
     * @return CooperatorFlightBillSettlementQueryResponse CooperatorFlightBillSettlementQueryResponse
     */
    public function cooperatorFlightBillSettlementQuery($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CooperatorFlightBillSettlementQueryHeaders([]);

        return $this->cooperatorFlightBillSettlementQueryWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 查询服务商酒店记账数据
     *  *
     * @param CooperatorHotelBillSettlementQueryRequest $request CooperatorHotelBillSettlementQueryRequest
     * @param CooperatorHotelBillSettlementQueryHeaders $headers CooperatorHotelBillSettlementQueryHeaders
     * @param RuntimeOptions                            $runtime runtime options for this request RuntimeOptions
     *
     * @return CooperatorHotelBillSettlementQueryResponse CooperatorHotelBillSettlementQueryResponse
     */
    public function cooperatorHotelBillSettlementQueryWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cooperatorId)) {
            $query['cooperator_id'] = $request->cooperatorId;
        }
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
        if (!Utils::isUnset($headers->xAcsBtripCorpToken)) {
            $realHeaders['x-acs-btrip-corp-token'] = Utils::toJSONString($headers->xAcsBtripCorpToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CooperatorHotelBillSettlementQuery',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/cooperator-hotel/v1/bill-settlement',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CooperatorHotelBillSettlementQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询服务商酒店记账数据
     *  *
     * @param CooperatorHotelBillSettlementQueryRequest $request CooperatorHotelBillSettlementQueryRequest
     *
     * @return CooperatorHotelBillSettlementQueryResponse CooperatorHotelBillSettlementQueryResponse
     */
    public function cooperatorHotelBillSettlementQuery($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CooperatorHotelBillSettlementQueryHeaders([]);

        return $this->cooperatorHotelBillSettlementQueryWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取关联可调用企业接口
     *  *
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return CorpAuthLinkInfoQueryResponse CorpAuthLinkInfoQueryResponse
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
     * @summary 获取关联可调用企业接口
     *  *
     * @return CorpAuthLinkInfoQueryResponse CorpAuthLinkInfoQueryResponse
     */
    public function corpAuthLinkInfoQuery()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->corpAuthLinkInfoQueryWithOptions($headers, $runtime);
    }

    /**
     * @summary 换取CorpToken接口
     *  *
     * @param CorpTokenRequest $request CorpTokenRequest
     * @param CorpTokenHeaders $headers CorpTokenHeaders
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return CorpTokenResponse CorpTokenResponse
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
     * @summary 换取CorpToken接口
     *  *
     * @param CorpTokenRequest $request CorpTokenRequest
     *
     * @return CorpTokenResponse CorpTokenResponse
     */
    public function corpToken($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CorpTokenHeaders([]);

        return $this->corpTokenWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 删除成本中心
     *  *
     * @param CostCenterDeleteRequest $request CostCenterDeleteRequest
     * @param CostCenterDeleteHeaders $headers CostCenterDeleteHeaders
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return CostCenterDeleteResponse CostCenterDeleteResponse
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
     * @summary 删除成本中心
     *  *
     * @param CostCenterDeleteRequest $request CostCenterDeleteRequest
     *
     * @return CostCenterDeleteResponse CostCenterDeleteResponse
     */
    public function costCenterDelete($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CostCenterDeleteHeaders([]);

        return $this->costCenterDeleteWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 修改成本中心
     *  *
     * @param CostCenterModifyRequest $request CostCenterModifyRequest
     * @param CostCenterModifyHeaders $headers CostCenterModifyHeaders
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return CostCenterModifyResponse CostCenterModifyResponse
     */
    public function costCenterModifyWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->alipayNo)) {
            $body['alipay_no'] = $request->alipayNo;
        }
        if (!Utils::isUnset($request->disable)) {
            $body['disable'] = $request->disable;
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
     * @summary 修改成本中心
     *  *
     * @param CostCenterModifyRequest $request CostCenterModifyRequest
     *
     * @return CostCenterModifyResponse CostCenterModifyResponse
     */
    public function costCenterModify($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CostCenterModifyHeaders([]);

        return $this->costCenterModifyWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 查看成本中心
     *  *
     * @param CostCenterQueryRequest $request CostCenterQueryRequest
     * @param CostCenterQueryHeaders $headers CostCenterQueryHeaders
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return CostCenterQueryResponse CostCenterQueryResponse
     */
    public function costCenterQueryWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->disable)) {
            $query['disable'] = $request->disable;
        }
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
     * @summary 查看成本中心
     *  *
     * @param CostCenterQueryRequest $request CostCenterQueryRequest
     *
     * @return CostCenterQueryResponse CostCenterQueryResponse
     */
    public function costCenterQuery($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CostCenterQueryHeaders([]);

        return $this->costCenterQueryWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 保存成本中心
     *  *
     * @param CostCenterSaveRequest $request CostCenterSaveRequest
     * @param CostCenterSaveHeaders $headers CostCenterSaveHeaders
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return CostCenterSaveResponse CostCenterSaveResponse
     */
    public function costCenterSaveWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->alipayNo)) {
            $body['alipay_no'] = $request->alipayNo;
        }
        if (!Utils::isUnset($request->disable)) {
            $body['disable'] = $request->disable;
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
     * @summary 保存成本中心
     *  *
     * @param CostCenterSaveRequest $request CostCenterSaveRequest
     *
     * @return CostCenterSaveResponse CostCenterSaveResponse
     */
    public function costCenterSave($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CostCenterSaveHeaders([]);

        return $this->costCenterSaveWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 创建企业自定义角色
     *  *
     * @param CreateCustomRoleRequest $request CreateCustomRoleRequest
     * @param CreateCustomRoleHeaders $headers CreateCustomRoleHeaders
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateCustomRoleResponse CreateCustomRoleResponse
     */
    public function createCustomRoleWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->roleId)) {
            $body['role_id'] = $request->roleId;
        }
        if (!Utils::isUnset($request->roleName)) {
            $body['role_name'] = $request->roleName;
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
            'action'      => 'CreateCustomRole',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/role/v1/customRoles/create',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateCustomRoleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建企业自定义角色
     *  *
     * @param CreateCustomRoleRequest $request CreateCustomRoleRequest
     *
     * @return CreateCustomRoleResponse CreateCustomRoleResponse
     */
    public function createCustomRole($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CreateCustomRoleHeaders([]);

        return $this->createCustomRoleWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 创建子企业
     *  *
     * @param CreateSubCorpRequest $request CreateSubCorpRequest
     * @param CreateSubCorpHeaders $headers CreateSubCorpHeaders
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateSubCorpResponse CreateSubCorpResponse
     */
    public function createSubCorpWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->outerCorpId)) {
            $body['outer_corp_id'] = $request->outerCorpId;
        }
        if (!Utils::isUnset($request->outerCorpName)) {
            $body['outer_corp_name'] = $request->outerCorpName;
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
            'action'      => 'CreateSubCorp',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/sub_corps/v1/corps',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateSubCorpResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建子企业
     *  *
     * @param CreateSubCorpRequest $request CreateSubCorpRequest
     *
     * @return CreateSubCorpResponse CreateSubCorpResponse
     */
    public function createSubCorp($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CreateSubCorpHeaders([]);

        return $this->createSubCorpWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 删除企业自定义角色
     *  *
     * @param DeleteCustomRoleRequest $request DeleteCustomRoleRequest
     * @param DeleteCustomRoleHeaders $headers DeleteCustomRoleHeaders
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteCustomRoleResponse DeleteCustomRoleResponse
     */
    public function deleteCustomRoleWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->roleId)) {
            $body['role_id'] = $request->roleId;
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
            'action'      => 'DeleteCustomRole',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/role/v1/customRoles/delete',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteCustomRoleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除企业自定义角色
     *  *
     * @param DeleteCustomRoleRequest $request DeleteCustomRoleRequest
     *
     * @return DeleteCustomRoleResponse DeleteCustomRoleResponse
     */
    public function deleteCustomRole($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new DeleteCustomRoleHeaders([]);

        return $this->deleteCustomRoleWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 批量删除企业自定义角色下人员
     *  *
     * @param DeleteEmployeesFromCustomRoleRequest $tmpReq  DeleteEmployeesFromCustomRoleRequest
     * @param DeleteEmployeesFromCustomRoleHeaders $headers DeleteEmployeesFromCustomRoleHeaders
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteEmployeesFromCustomRoleResponse DeleteEmployeesFromCustomRoleResponse
     */
    public function deleteEmployeesFromCustomRoleWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DeleteEmployeesFromCustomRoleShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->userIdList)) {
            $request->userIdListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->userIdList, 'user_id_list', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->roleId)) {
            $body['role_id'] = $request->roleId;
        }
        if (!Utils::isUnset($request->userIdListShrink)) {
            $body['user_id_list'] = $request->userIdListShrink;
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
            'action'      => 'DeleteEmployeesFromCustomRole',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/role/v1/customRoleEmployees/delete',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteEmployeesFromCustomRoleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 批量删除企业自定义角色下人员
     *  *
     * @param DeleteEmployeesFromCustomRoleRequest $request DeleteEmployeesFromCustomRoleRequest
     *
     * @return DeleteEmployeesFromCustomRoleResponse DeleteEmployeesFromCustomRoleResponse
     */
    public function deleteEmployeesFromCustomRole($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new DeleteEmployeesFromCustomRoleHeaders([]);

        return $this->deleteEmployeesFromCustomRoleWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 删除发票抬头适用人员
     *  *
     * @param DeleteInvoiceEntityRequest $tmpReq  DeleteInvoiceEntityRequest
     * @param DeleteInvoiceEntityHeaders $headers DeleteInvoiceEntityHeaders
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteInvoiceEntityResponse DeleteInvoiceEntityResponse
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
     * @summary 删除发票抬头适用人员
     *  *
     * @param DeleteInvoiceEntityRequest $request DeleteInvoiceEntityRequest
     *
     * @return DeleteInvoiceEntityResponse DeleteInvoiceEntityResponse
     */
    public function deleteInvoiceEntity($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new DeleteInvoiceEntityHeaders([]);

        return $this->deleteInvoiceEntityWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 同步外部平台部门信息至商旅内部
     *  *
     * @param DepartmentSaveRequest $tmpReq  DepartmentSaveRequest
     * @param DepartmentSaveHeaders $headers DepartmentSaveHeaders
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return DepartmentSaveResponse DepartmentSaveResponse
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
     * @summary 同步外部平台部门信息至商旅内部
     *  *
     * @param DepartmentSaveRequest $request DepartmentSaveRequest
     *
     * @return DepartmentSaveResponse DepartmentSaveResponse
     */
    public function departmentSave($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new DepartmentSaveHeaders([]);

        return $this->departmentSaveWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 增加成本中心人员信息
     *  *
     * @param EntityAddRequest $tmpReq  EntityAddRequest
     * @param EntityAddHeaders $headers EntityAddHeaders
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return EntityAddResponse EntityAddResponse
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
     * @summary 增加成本中心人员信息
     *  *
     * @param EntityAddRequest $request EntityAddRequest
     *
     * @return EntityAddResponse EntityAddResponse
     */
    public function entityAdd($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new EntityAddHeaders([]);

        return $this->entityAddWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 删除成本中心人员信息
     *  *
     * @param EntityDeleteRequest $tmpReq  EntityDeleteRequest
     * @param EntityDeleteHeaders $headers EntityDeleteHeaders
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return EntityDeleteResponse EntityDeleteResponse
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
     * @summary 删除成本中心人员信息
     *  *
     * @param EntityDeleteRequest $request EntityDeleteRequest
     *
     * @return EntityDeleteResponse EntityDeleteResponse
     */
    public function entityDelete($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new EntityDeleteHeaders([]);

        return $this->entityDeleteWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 设置成本中心人员信息
     *  *
     * @param EntitySetRequest $tmpReq  EntitySetRequest
     * @param EntitySetHeaders $headers EntitySetHeaders
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return EntitySetResponse EntitySetResponse
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
     * @summary 设置成本中心人员信息
     *  *
     * @param EntitySetRequest $request EntitySetRequest
     *
     * @return EntitySetResponse EntitySetResponse
     */
    public function entitySet($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new EntitySetHeaders([]);

        return $this->entitySetWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 预估价格查询
     *  *
     * @param EstimatedPriceQueryRequest $request EstimatedPriceQueryRequest
     * @param EstimatedPriceQueryHeaders $headers EstimatedPriceQueryHeaders
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return EstimatedPriceQueryResponse EstimatedPriceQueryResponse
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
     * @summary 预估价格查询
     *  *
     * @param EstimatedPriceQueryRequest $request EstimatedPriceQueryRequest
     *
     * @return EstimatedPriceQueryResponse EstimatedPriceQueryResponse
     */
    public function estimatedPriceQuery($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new EstimatedPriceQueryHeaders([]);

        return $this->estimatedPriceQueryWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 超标审批结果同步
     *  *
     * @param ExceedApplySyncRequest $request ExceedApplySyncRequest
     * @param ExceedApplySyncHeaders $headers ExceedApplySyncHeaders
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ExceedApplySyncResponse ExceedApplySyncResponse
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
     * @summary 超标审批结果同步
     *  *
     * @param ExceedApplySyncRequest $request ExceedApplySyncRequest
     *
     * @return ExceedApplySyncResponse ExceedApplySyncResponse
     */
    public function exceedApplySync($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ExceedApplySyncHeaders([]);

        return $this->exceedApplySyncWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 查询机票记账数据
     *  *
     * @param FlightBillSettlementQueryRequest $request FlightBillSettlementQueryRequest
     * @param FlightBillSettlementQueryHeaders $headers FlightBillSettlementQueryHeaders
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return FlightBillSettlementQueryResponse FlightBillSettlementQueryResponse
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
     * @summary 查询机票记账数据
     *  *
     * @param FlightBillSettlementQueryRequest $request FlightBillSettlementQueryRequest
     *
     * @return FlightBillSettlementQueryResponse FlightBillSettlementQueryResponse
     */
    public function flightBillSettlementQuery($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new FlightBillSettlementQueryHeaders([]);

        return $this->flightBillSettlementQueryWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 航班订单取消
     *  *
     * @param FlightCancelOrderRequest $request FlightCancelOrderRequest
     * @param FlightCancelOrderHeaders $headers FlightCancelOrderHeaders
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return FlightCancelOrderResponse FlightCancelOrderResponse
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
     * @summary 航班订单取消
     *  *
     * @param FlightCancelOrderRequest $request FlightCancelOrderRequest
     *
     * @return FlightCancelOrderResponse FlightCancelOrderResponse
     */
    public function flightCancelOrder($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new FlightCancelOrderHeaders([]);

        return $this->flightCancelOrderWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 机票订单取消
     *  *
     * @param FlightCancelOrderV2Request $request FlightCancelOrderV2Request
     * @param FlightCancelOrderV2Headers $headers FlightCancelOrderV2Headers
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return FlightCancelOrderV2Response FlightCancelOrderV2Response
     */
    public function flightCancelOrderV2WithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->isvName)) {
            $query['isv_name'] = $request->isvName;
        }
        if (!Utils::isUnset($request->orderId)) {
            $query['order_id'] = $request->orderId;
        }
        if (!Utils::isUnset($request->outOrderId)) {
            $query['out_order_id'] = $request->outOrderId;
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
            'action'      => 'FlightCancelOrderV2',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dtb-flight/v2/order/action/cancel',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return FlightCancelOrderV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 机票订单取消
     *  *
     * @param FlightCancelOrderV2Request $request FlightCancelOrderV2Request
     *
     * @return FlightCancelOrderV2Response FlightCancelOrderV2Response
     */
    public function flightCancelOrderV2($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new FlightCancelOrderV2Headers([]);

        return $this->flightCancelOrderV2WithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 航班订单创建
     *  *
     * @param FlightCreateOrderRequest $tmpReq  FlightCreateOrderRequest
     * @param FlightCreateOrderHeaders $headers FlightCreateOrderHeaders
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return FlightCreateOrderResponse FlightCreateOrderResponse
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
     * @summary 航班订单创建
     *  *
     * @param FlightCreateOrderRequest $request FlightCreateOrderRequest
     *
     * @return FlightCreateOrderResponse FlightCreateOrderResponse
     */
    public function flightCreateOrder($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new FlightCreateOrderHeaders([]);

        return $this->flightCreateOrderWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 机票订单创建
     *  *
     * @param FlightCreateOrderV2Request $tmpReq  FlightCreateOrderV2Request
     * @param FlightCreateOrderV2Headers $headers FlightCreateOrderV2Headers
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return FlightCreateOrderV2Response FlightCreateOrderV2Response
     */
    public function flightCreateOrderV2WithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new FlightCreateOrderV2ShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->contactInfo)) {
            $request->contactInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->contactInfo, 'contact_info', 'json');
        }
        if (!Utils::isUnset($tmpReq->travelers)) {
            $request->travelersShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->travelers, 'travelers', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->asyncCreateOrderKey)) {
            $body['async_create_order_key'] = $request->asyncCreateOrderKey;
        }
        if (!Utils::isUnset($request->asyncCreateOrderMode)) {
            $body['async_create_order_mode'] = $request->asyncCreateOrderMode;
        }
        if (!Utils::isUnset($request->btripUserId)) {
            $body['btrip_user_id'] = $request->btripUserId;
        }
        if (!Utils::isUnset($request->buyerName)) {
            $body['buyer_name'] = $request->buyerName;
        }
        if (!Utils::isUnset($request->contactInfoShrink)) {
            $body['contact_info'] = $request->contactInfoShrink;
        }
        if (!Utils::isUnset($request->isvName)) {
            $body['isv_name'] = $request->isvName;
        }
        if (!Utils::isUnset($request->otaItemId)) {
            $body['ota_item_id'] = $request->otaItemId;
        }
        if (!Utils::isUnset($request->outOrderId)) {
            $body['out_order_id'] = $request->outOrderId;
        }
        if (!Utils::isUnset($request->totalPriceCent)) {
            $body['total_price_cent'] = $request->totalPriceCent;
        }
        if (!Utils::isUnset($request->travelersShrink)) {
            $body['travelers'] = $request->travelersShrink;
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
            'action'      => 'FlightCreateOrderV2',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dtb-flight/v2/order/action/create',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return FlightCreateOrderV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 机票订单创建
     *  *
     * @param FlightCreateOrderV2Request $request FlightCreateOrderV2Request
     *
     * @return FlightCreateOrderV2Response FlightCreateOrderV2Response
     */
    public function flightCreateOrderV2($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new FlightCreateOrderV2Headers([]);

        return $this->flightCreateOrderV2WithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 查询飞机超标审批详情
     *  *
     * @param FlightExceedApplyQueryRequest $request FlightExceedApplyQueryRequest
     * @param FlightExceedApplyQueryHeaders $headers FlightExceedApplyQueryHeaders
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return FlightExceedApplyQueryResponse FlightExceedApplyQueryResponse
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
     * @summary 查询飞机超标审批详情
     *  *
     * @param FlightExceedApplyQueryRequest $request FlightExceedApplyQueryRequest
     *
     * @return FlightExceedApplyQueryResponse FlightExceedApplyQueryResponse
     */
    public function flightExceedApplyQuery($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new FlightExceedApplyQueryHeaders([]);

        return $this->flightExceedApplyQueryWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 查询机票行程单扫描件
     *  *
     * @param FlightItineraryScanQueryRequest $request FlightItineraryScanQueryRequest
     * @param FlightItineraryScanQueryHeaders $headers FlightItineraryScanQueryHeaders
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return FlightItineraryScanQueryResponse FlightItineraryScanQueryResponse
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
        if (!Utils::isUnset($request->itineraryNum)) {
            $query['itinerary_num'] = $request->itineraryNum;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['page_no'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['page_size'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->ticketNo)) {
            $query['ticket_no'] = $request->ticketNo;
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
     * @summary 查询机票行程单扫描件
     *  *
     * @param FlightItineraryScanQueryRequest $request FlightItineraryScanQueryRequest
     *
     * @return FlightItineraryScanQueryResponse FlightItineraryScanQueryResponse
     */
    public function flightItineraryScanQuery($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new FlightItineraryScanQueryHeaders([]);

        return $this->flightItineraryScanQueryWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 航班列表搜索
     *  *
     * @param FlightListingSearchRequest $request FlightListingSearchRequest
     * @param FlightListingSearchHeaders $headers FlightListingSearchHeaders
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return FlightListingSearchResponse FlightListingSearchResponse
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
     * @summary 航班列表搜索
     *  *
     * @param FlightListingSearchRequest $request FlightListingSearchRequest
     *
     * @return FlightListingSearchResponse FlightListingSearchResponse
     */
    public function flightListingSearch($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new FlightListingSearchHeaders([]);

        return $this->flightListingSearchWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 航班列表搜索
     *  *
     * @param FlightListingSearchV2Request $tmpReq  FlightListingSearchV2Request
     * @param FlightListingSearchV2Headers $headers FlightListingSearchV2Headers
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return FlightListingSearchV2Response FlightListingSearchV2Response
     */
    public function flightListingSearchV2WithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new FlightListingSearchV2ShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->cabinTypeList)) {
            $request->cabinTypeListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->cabinTypeList, 'cabin_type_list', 'json');
        }
        if (!Utils::isUnset($tmpReq->searchJourneys)) {
            $request->searchJourneysShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->searchJourneys, 'search_journeys', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->airlineCode)) {
            $query['airline_code'] = $request->airlineCode;
        }
        if (!Utils::isUnset($request->cabinTypeListShrink)) {
            $query['cabin_type_list'] = $request->cabinTypeListShrink;
        }
        if (!Utils::isUnset($request->directOnly)) {
            $query['direct_only'] = $request->directOnly;
        }
        if (!Utils::isUnset($request->isvName)) {
            $query['isv_name'] = $request->isvName;
        }
        if (!Utils::isUnset($request->needMultiClassPrice)) {
            $query['need_multi_class_price'] = $request->needMultiClassPrice;
        }
        if (!Utils::isUnset($request->needQueryServiceFee)) {
            $query['need_query_service_fee'] = $request->needQueryServiceFee;
        }
        if (!Utils::isUnset($request->needShareFlight)) {
            $query['need_share_flight'] = $request->needShareFlight;
        }
        if (!Utils::isUnset($request->needYCBestPrice)) {
            $query['need_y_c_best_price'] = $request->needYCBestPrice;
        }
        if (!Utils::isUnset($request->searchJourneysShrink)) {
            $query['search_journeys'] = $request->searchJourneysShrink;
        }
        if (!Utils::isUnset($request->searchMode)) {
            $query['search_mode'] = $request->searchMode;
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
            'action'      => 'FlightListingSearchV2',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dtb-flight/v2/flight/action/listing-search',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return FlightListingSearchV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 航班列表搜索
     *  *
     * @param FlightListingSearchV2Request $request FlightListingSearchV2Request
     *
     * @return FlightListingSearchV2Response FlightListingSearchV2Response
     */
    public function flightListingSearchV2($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new FlightListingSearchV2Headers([]);

        return $this->flightListingSearchV2WithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 机票改签申请
     *  *
     * @param FlightModifyApplyV2Request $tmpReq  FlightModifyApplyV2Request
     * @param FlightModifyApplyV2Headers $headers FlightModifyApplyV2Headers
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return FlightModifyApplyV2Response FlightModifyApplyV2Response
     */
    public function flightModifyApplyV2WithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new FlightModifyApplyV2ShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->passengerSegmentRelations)) {
            $request->passengerSegmentRelationsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->passengerSegmentRelations, 'passenger_segment_relations', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->cacheKey)) {
            $body['cache_key'] = $request->cacheKey;
        }
        if (!Utils::isUnset($request->contactPhone)) {
            $body['contact_phone'] = $request->contactPhone;
        }
        if (!Utils::isUnset($request->isvName)) {
            $body['isv_name'] = $request->isvName;
        }
        if (!Utils::isUnset($request->itemId)) {
            $body['item_id'] = $request->itemId;
        }
        if (!Utils::isUnset($request->orderId)) {
            $body['order_id'] = $request->orderId;
        }
        if (!Utils::isUnset($request->outOrderId)) {
            $body['out_order_id'] = $request->outOrderId;
        }
        if (!Utils::isUnset($request->outSubOrderId)) {
            $body['out_sub_order_id'] = $request->outSubOrderId;
        }
        if (!Utils::isUnset($request->passengerSegmentRelationsShrink)) {
            $body['passenger_segment_relations'] = $request->passengerSegmentRelationsShrink;
        }
        if (!Utils::isUnset($request->reason)) {
            $body['reason'] = $request->reason;
        }
        if (!Utils::isUnset($request->sessionId)) {
            $body['session_id'] = $request->sessionId;
        }
        if (!Utils::isUnset($request->voluntary)) {
            $body['voluntary'] = $request->voluntary;
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
            'action'      => 'FlightModifyApplyV2',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dtb-flight/v2/modify/action/apply',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return FlightModifyApplyV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 机票改签申请
     *  *
     * @param FlightModifyApplyV2Request $request FlightModifyApplyV2Request
     *
     * @return FlightModifyApplyV2Response FlightModifyApplyV2Response
     */
    public function flightModifyApplyV2($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new FlightModifyApplyV2Headers([]);

        return $this->flightModifyApplyV2WithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 机票改签取消
     *  *
     * @param FlightModifyCancelV2Request $request FlightModifyCancelV2Request
     * @param FlightModifyCancelV2Headers $headers FlightModifyCancelV2Headers
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return FlightModifyCancelV2Response FlightModifyCancelV2Response
     */
    public function flightModifyCancelV2WithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->isvName)) {
            $query['isv_name'] = $request->isvName;
        }
        if (!Utils::isUnset($request->orderId)) {
            $query['order_id'] = $request->orderId;
        }
        if (!Utils::isUnset($request->outOrderId)) {
            $query['out_order_id'] = $request->outOrderId;
        }
        if (!Utils::isUnset($request->outSubOrderId)) {
            $query['out_sub_order_id'] = $request->outSubOrderId;
        }
        if (!Utils::isUnset($request->subOrderId)) {
            $query['sub_order_id'] = $request->subOrderId;
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
            'action'      => 'FlightModifyCancelV2',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dtb-flight/v2/modify/action/cancel',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return FlightModifyCancelV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 机票改签取消
     *  *
     * @param FlightModifyCancelV2Request $request FlightModifyCancelV2Request
     *
     * @return FlightModifyCancelV2Response FlightModifyCancelV2Response
     */
    public function flightModifyCancelV2($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new FlightModifyCancelV2Headers([]);

        return $this->flightModifyCancelV2WithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 机票改签列表搜索
     *  *
     * @param FlightModifyListingSearchV2Request $tmpReq  FlightModifyListingSearchV2Request
     * @param FlightModifyListingSearchV2Headers $headers FlightModifyListingSearchV2Headers
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return FlightModifyListingSearchV2Response FlightModifyListingSearchV2Response
     */
    public function flightModifyListingSearchV2WithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new FlightModifyListingSearchV2ShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->cabinClass)) {
            $request->cabinClassShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->cabinClass, 'cabin_class', 'json');
        }
        if (!Utils::isUnset($tmpReq->depDate)) {
            $request->depDateShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->depDate, 'dep_date', 'json');
        }
        if (!Utils::isUnset($tmpReq->passengerSegmentRelations)) {
            $request->passengerSegmentRelationsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->passengerSegmentRelations, 'passenger_segment_relations', 'json');
        }
        if (!Utils::isUnset($tmpReq->selectedSegments)) {
            $request->selectedSegmentsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->selectedSegments, 'selected_segments', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->cabinClassShrink)) {
            $query['cabin_class'] = $request->cabinClassShrink;
        }
        if (!Utils::isUnset($request->depDateShrink)) {
            $query['dep_date'] = $request->depDateShrink;
        }
        if (!Utils::isUnset($request->interfaceCallerIsSupportRetry)) {
            $query['interface_caller_is_support_retry'] = $request->interfaceCallerIsSupportRetry;
        }
        if (!Utils::isUnset($request->isvName)) {
            $query['isv_name'] = $request->isvName;
        }
        if (!Utils::isUnset($request->orderId)) {
            $query['order_id'] = $request->orderId;
        }
        if (!Utils::isUnset($request->outOrderId)) {
            $query['out_order_id'] = $request->outOrderId;
        }
        if (!Utils::isUnset($request->passengerSegmentRelationsShrink)) {
            $query['passenger_segment_relations'] = $request->passengerSegmentRelationsShrink;
        }
        if (!Utils::isUnset($request->searchMode)) {
            $query['search_mode'] = $request->searchMode;
        }
        if (!Utils::isUnset($request->searchRetryToken)) {
            $query['search_retry_token'] = $request->searchRetryToken;
        }
        if (!Utils::isUnset($request->selectedSegmentsShrink)) {
            $query['selected_segments'] = $request->selectedSegmentsShrink;
        }
        if (!Utils::isUnset($request->sessionId)) {
            $query['session_id'] = $request->sessionId;
        }
        if (!Utils::isUnset($request->voluntary)) {
            $query['voluntary'] = $request->voluntary;
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
            'action'      => 'FlightModifyListingSearchV2',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dtb-flight/v2/modify/action/listing-search',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return FlightModifyListingSearchV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 机票改签列表搜索
     *  *
     * @param FlightModifyListingSearchV2Request $request FlightModifyListingSearchV2Request
     *
     * @return FlightModifyListingSearchV2Response FlightModifyListingSearchV2Response
     */
    public function flightModifyListingSearchV2($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new FlightModifyListingSearchV2Headers([]);

        return $this->flightModifyListingSearchV2WithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 机票改签详情
     *  *
     * @param FlightModifyOrderDetailV2Request $request FlightModifyOrderDetailV2Request
     * @param FlightModifyOrderDetailV2Headers $headers FlightModifyOrderDetailV2Headers
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return FlightModifyOrderDetailV2Response FlightModifyOrderDetailV2Response
     */
    public function flightModifyOrderDetailV2WithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->isvName)) {
            $query['isv_name'] = $request->isvName;
        }
        if (!Utils::isUnset($request->modifyApplyId)) {
            $query['modify_apply_id'] = $request->modifyApplyId;
        }
        if (!Utils::isUnset($request->needQueryServiceFee)) {
            $query['need_query_service_fee'] = $request->needQueryServiceFee;
        }
        if (!Utils::isUnset($request->orderId)) {
            $query['order_id'] = $request->orderId;
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
            'action'      => 'FlightModifyOrderDetailV2',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dtb-flight/v2/modify/action/detail',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return FlightModifyOrderDetailV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 机票改签详情
     *  *
     * @param FlightModifyOrderDetailV2Request $request FlightModifyOrderDetailV2Request
     *
     * @return FlightModifyOrderDetailV2Response FlightModifyOrderDetailV2Response
     */
    public function flightModifyOrderDetailV2($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new FlightModifyOrderDetailV2Headers([]);

        return $this->flightModifyOrderDetailV2WithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 机票改签报价搜索
     *  *
     * @param FlightModifyOtaSearchV2Request $tmpReq  FlightModifyOtaSearchV2Request
     * @param FlightModifyOtaSearchV2Headers $headers FlightModifyOtaSearchV2Headers
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return FlightModifyOtaSearchV2Response FlightModifyOtaSearchV2Response
     */
    public function flightModifyOtaSearchV2WithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new FlightModifyOtaSearchV2ShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->cabinClass)) {
            $request->cabinClassShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->cabinClass, 'cabin_class', 'json');
        }
        if (!Utils::isUnset($tmpReq->depDate)) {
            $request->depDateShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->depDate, 'dep_date', 'json');
        }
        if (!Utils::isUnset($tmpReq->passengerSegmentRelations)) {
            $request->passengerSegmentRelationsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->passengerSegmentRelations, 'passenger_segment_relations', 'json');
        }
        if (!Utils::isUnset($tmpReq->selectedSegments)) {
            $request->selectedSegmentsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->selectedSegments, 'selected_segments', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->cabinClassShrink)) {
            $query['cabin_class'] = $request->cabinClassShrink;
        }
        if (!Utils::isUnset($request->depDateShrink)) {
            $query['dep_date'] = $request->depDateShrink;
        }
        if (!Utils::isUnset($request->isvName)) {
            $query['isv_name'] = $request->isvName;
        }
        if (!Utils::isUnset($request->orderId)) {
            $query['order_id'] = $request->orderId;
        }
        if (!Utils::isUnset($request->outOrderId)) {
            $query['out_order_id'] = $request->outOrderId;
        }
        if (!Utils::isUnset($request->passengerSegmentRelationsShrink)) {
            $query['passenger_segment_relations'] = $request->passengerSegmentRelationsShrink;
        }
        if (!Utils::isUnset($request->selectedSegmentsShrink)) {
            $query['selected_segments'] = $request->selectedSegmentsShrink;
        }
        if (!Utils::isUnset($request->sessionId)) {
            $query['session_id'] = $request->sessionId;
        }
        if (!Utils::isUnset($request->voluntary)) {
            $query['voluntary'] = $request->voluntary;
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
            'action'      => 'FlightModifyOtaSearchV2',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dtb-flight/v2/modify/action/ota-search',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return FlightModifyOtaSearchV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 机票改签报价搜索
     *  *
     * @param FlightModifyOtaSearchV2Request $request FlightModifyOtaSearchV2Request
     *
     * @return FlightModifyOtaSearchV2Response FlightModifyOtaSearchV2Response
     */
    public function flightModifyOtaSearchV2($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new FlightModifyOtaSearchV2Headers([]);

        return $this->flightModifyOtaSearchV2WithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 机票改签支付
     *  *
     * @param FlightModifyPayV2Request $tmpReq  FlightModifyPayV2Request
     * @param FlightModifyPayV2Headers $headers FlightModifyPayV2Headers
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return FlightModifyPayV2Response FlightModifyPayV2Response
     */
    public function flightModifyPayV2WithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new FlightModifyPayV2ShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->extParams)) {
            $request->extParamsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->extParams, 'ext_params', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->extParamsShrink)) {
            $body['ext_params'] = $request->extParamsShrink;
        }
        if (!Utils::isUnset($request->isvName)) {
            $body['isv_name'] = $request->isvName;
        }
        if (!Utils::isUnset($request->modifyPayAmount)) {
            $body['modify_pay_amount'] = $request->modifyPayAmount;
        }
        if (!Utils::isUnset($request->orderId)) {
            $body['order_id'] = $request->orderId;
        }
        if (!Utils::isUnset($request->outOrderId)) {
            $body['out_order_id'] = $request->outOrderId;
        }
        if (!Utils::isUnset($request->outSubOrderId)) {
            $body['out_sub_order_id'] = $request->outSubOrderId;
        }
        if (!Utils::isUnset($request->subOrderId)) {
            $body['sub_order_id'] = $request->subOrderId;
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
            'action'      => 'FlightModifyPayV2',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dtb-flight/v2/modify/action/pay',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return FlightModifyPayV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 机票改签支付
     *  *
     * @param FlightModifyPayV2Request $request FlightModifyPayV2Request
     *
     * @return FlightModifyPayV2Response FlightModifyPayV2Response
     */
    public function flightModifyPayV2($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new FlightModifyPayV2Headers([]);

        return $this->flightModifyPayV2WithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 航班订单明细信息
     *  *
     * @param FlightOrderDetailInfoRequest $request FlightOrderDetailInfoRequest
     * @param FlightOrderDetailInfoHeaders $headers FlightOrderDetailInfoHeaders
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return FlightOrderDetailInfoResponse FlightOrderDetailInfoResponse
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
     * @summary 航班订单明细信息
     *  *
     * @param FlightOrderDetailInfoRequest $request FlightOrderDetailInfoRequest
     *
     * @return FlightOrderDetailInfoResponse FlightOrderDetailInfoResponse
     */
    public function flightOrderDetailInfo($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new FlightOrderDetailInfoHeaders([]);

        return $this->flightOrderDetailInfoWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 机票订单详情
     *  *
     * @param FlightOrderDetailV2Request $request FlightOrderDetailV2Request
     * @param FlightOrderDetailV2Headers $headers FlightOrderDetailV2Headers
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return FlightOrderDetailV2Response FlightOrderDetailV2Response
     */
    public function flightOrderDetailV2WithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->isvName)) {
            $query['isv_name'] = $request->isvName;
        }
        if (!Utils::isUnset($request->orderId)) {
            $query['order_id'] = $request->orderId;
        }
        if (!Utils::isUnset($request->outOrderId)) {
            $query['out_order_id'] = $request->outOrderId;
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
            'action'      => 'FlightOrderDetailV2',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dtb-flight/v2/order/action/detail',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return FlightOrderDetailV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 机票订单详情
     *  *
     * @param FlightOrderDetailV2Request $request FlightOrderDetailV2Request
     *
     * @return FlightOrderDetailV2Response FlightOrderDetailV2Response
     */
    public function flightOrderDetailV2($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new FlightOrderDetailV2Headers([]);

        return $this->flightOrderDetailV2WithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 查询机票订单列表
     *  *
     * @param FlightOrderListQueryRequest $request FlightOrderListQueryRequest
     * @param FlightOrderListQueryHeaders $headers FlightOrderListQueryHeaders
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return FlightOrderListQueryResponse FlightOrderListQueryResponse
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
     * @summary 查询机票订单列表
     *  *
     * @param FlightOrderListQueryRequest $request FlightOrderListQueryRequest
     *
     * @return FlightOrderListQueryResponse FlightOrderListQueryResponse
     */
    public function flightOrderListQuery($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new FlightOrderListQueryHeaders([]);

        return $this->flightOrderListQueryWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 查询机票订单详情（含票信息）
     *  *
     * @param FlightOrderQueryRequest $request FlightOrderQueryRequest
     * @param FlightOrderQueryHeaders $headers FlightOrderQueryHeaders
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return FlightOrderQueryResponse FlightOrderQueryResponse
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
     * @summary 查询机票订单详情（含票信息）
     *  *
     * @param FlightOrderQueryRequest $request FlightOrderQueryRequest
     *
     * @return FlightOrderQueryResponse FlightOrderQueryResponse
     */
    public function flightOrderQuery($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new FlightOrderQueryHeaders([]);

        return $this->flightOrderQueryWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 查询退改规则行李额
     *  *
     * @param FlightOtaItemDetailRequest $request FlightOtaItemDetailRequest
     * @param FlightOtaItemDetailHeaders $headers FlightOtaItemDetailHeaders
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return FlightOtaItemDetailResponse FlightOtaItemDetailResponse
     */
    public function flightOtaItemDetailWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->isvName)) {
            $query['isv_name'] = $request->isvName;
        }
        if (!Utils::isUnset($request->otaItemId)) {
            $query['ota_item_id'] = $request->otaItemId;
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
            'action'      => 'FlightOtaItemDetail',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dtb-flight/v1/flight/action/ota-item-detail',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return FlightOtaItemDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询退改规则行李额
     *  *
     * @param FlightOtaItemDetailRequest $request FlightOtaItemDetailRequest
     *
     * @return FlightOtaItemDetailResponse FlightOtaItemDetailResponse
     */
    public function flightOtaItemDetail($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new FlightOtaItemDetailHeaders([]);

        return $this->flightOtaItemDetailWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 航班最低价搜索
     *  *
     * @param FlightOtaSearchRequest $request FlightOtaSearchRequest
     * @param FlightOtaSearchHeaders $headers FlightOtaSearchHeaders
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return FlightOtaSearchResponse FlightOtaSearchResponse
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
     * @summary 航班最低价搜索
     *  *
     * @param FlightOtaSearchRequest $request FlightOtaSearchRequest
     *
     * @return FlightOtaSearchResponse FlightOtaSearchResponse
     */
    public function flightOtaSearch($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new FlightOtaSearchHeaders([]);

        return $this->flightOtaSearchWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 单航班报价搜索
     *  *
     * @param FlightOtaSearchV2Request $tmpReq  FlightOtaSearchV2Request
     * @param FlightOtaSearchV2Headers $headers FlightOtaSearchV2Headers
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return FlightOtaSearchV2Response FlightOtaSearchV2Response
     */
    public function flightOtaSearchV2WithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new FlightOtaSearchV2ShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->cabinTypeList)) {
            $request->cabinTypeListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->cabinTypeList, 'cabin_type_list', 'json');
        }
        if (!Utils::isUnset($tmpReq->searchJourneys)) {
            $request->searchJourneysShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->searchJourneys, 'search_journeys', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->cabinTypeListShrink)) {
            $query['cabin_type_list'] = $request->cabinTypeListShrink;
        }
        if (!Utils::isUnset($request->directOnly)) {
            $query['direct_only'] = $request->directOnly;
        }
        if (!Utils::isUnset($request->isvName)) {
            $query['isv_name'] = $request->isvName;
        }
        if (!Utils::isUnset($request->needShareFlight)) {
            $query['need_share_flight'] = $request->needShareFlight;
        }
        if (!Utils::isUnset($request->searchJourneysShrink)) {
            $query['search_journeys'] = $request->searchJourneysShrink;
        }
        if (!Utils::isUnset($request->searchMode)) {
            $query['search_mode'] = $request->searchMode;
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
            'action'      => 'FlightOtaSearchV2',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dtb-flight/v2/flight/action/ota-search',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return FlightOtaSearchV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 单航班报价搜索
     *  *
     * @param FlightOtaSearchV2Request $request FlightOtaSearchV2Request
     *
     * @return FlightOtaSearchV2Response FlightOtaSearchV2Response
     */
    public function flightOtaSearchV2($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new FlightOtaSearchV2Headers([]);

        return $this->flightOtaSearchV2WithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 航班订单支付
     *  *
     * @param FlightPayOrderRequest $tmpReq  FlightPayOrderRequest
     * @param FlightPayOrderHeaders $headers FlightPayOrderHeaders
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return FlightPayOrderResponse FlightPayOrderResponse
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
     * @summary 航班订单支付
     *  *
     * @param FlightPayOrderRequest $request FlightPayOrderRequest
     *
     * @return FlightPayOrderResponse FlightPayOrderResponse
     */
    public function flightPayOrder($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new FlightPayOrderHeaders([]);

        return $this->flightPayOrderWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 机票订单支付
     *  *
     * @param FlightPayOrderV2Request $request FlightPayOrderV2Request
     * @param FlightPayOrderV2Headers $headers FlightPayOrderV2Headers
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return FlightPayOrderV2Response FlightPayOrderV2Response
     */
    public function flightPayOrderV2WithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->isvName)) {
            $body['isv_name'] = $request->isvName;
        }
        if (!Utils::isUnset($request->orderId)) {
            $body['order_id'] = $request->orderId;
        }
        if (!Utils::isUnset($request->outOrderId)) {
            $body['out_order_id'] = $request->outOrderId;
        }
        if (!Utils::isUnset($request->totalPrice)) {
            $body['total_price'] = $request->totalPrice;
        }
        if (!Utils::isUnset($request->totalServiceFeePrice)) {
            $body['total_service_fee_price'] = $request->totalServiceFeePrice;
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
            'action'      => 'FlightPayOrderV2',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dtb-flight/v2/order/action/pay',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return FlightPayOrderV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 机票订单支付
     *  *
     * @param FlightPayOrderV2Request $request FlightPayOrderV2Request
     *
     * @return FlightPayOrderV2Response FlightPayOrderV2Response
     */
    public function flightPayOrderV2($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new FlightPayOrderV2Headers([]);

        return $this->flightPayOrderV2WithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 航班退票申请
     *  *
     * @param FlightRefundApplyRequest $tmpReq  FlightRefundApplyRequest
     * @param FlightRefundApplyHeaders $headers FlightRefundApplyHeaders
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return FlightRefundApplyResponse FlightRefundApplyResponse
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
     * @summary 航班退票申请
     *  *
     * @param FlightRefundApplyRequest $request FlightRefundApplyRequest
     *
     * @return FlightRefundApplyResponse FlightRefundApplyResponse
     */
    public function flightRefundApply($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new FlightRefundApplyHeaders([]);

        return $this->flightRefundApplyWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 机票退票申请
     *  *
     * @param FlightRefundApplyV2Request $tmpReq  FlightRefundApplyV2Request
     * @param FlightRefundApplyV2Headers $headers FlightRefundApplyV2Headers
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return FlightRefundApplyV2Response FlightRefundApplyV2Response
     */
    public function flightRefundApplyV2WithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new FlightRefundApplyV2ShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->passengerSegmentRelations)) {
            $request->passengerSegmentRelationsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->passengerSegmentRelations, 'passenger_segment_relations', 'json');
        }
        if (!Utils::isUnset($tmpReq->ticketNos)) {
            $request->ticketNosShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->ticketNos, 'ticket_nos', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->isvName)) {
            $body['isv_name'] = $request->isvName;
        }
        if (!Utils::isUnset($request->orderId)) {
            $body['order_id'] = $request->orderId;
        }
        if (!Utils::isUnset($request->outOrderId)) {
            $body['out_order_id'] = $request->outOrderId;
        }
        if (!Utils::isUnset($request->outSubOrderId)) {
            $body['out_sub_order_id'] = $request->outSubOrderId;
        }
        if (!Utils::isUnset($request->passengerSegmentRelationsShrink)) {
            $body['passenger_segment_relations'] = $request->passengerSegmentRelationsShrink;
        }
        if (!Utils::isUnset($request->preCalType)) {
            $body['pre_cal_type'] = $request->preCalType;
        }
        if (!Utils::isUnset($request->refundReason)) {
            $body['refund_reason'] = $request->refundReason;
        }
        if (!Utils::isUnset($request->refundReasonType)) {
            $body['refund_reason_type'] = $request->refundReasonType;
        }
        if (!Utils::isUnset($request->ticketNosShrink)) {
            $body['ticket_nos'] = $request->ticketNosShrink;
        }
        if (!Utils::isUnset($request->totalRefundPrice)) {
            $body['total_refund_price'] = $request->totalRefundPrice;
        }
        if (!Utils::isUnset($request->uploadPictUrls)) {
            $body['upload_pict_urls'] = $request->uploadPictUrls;
        }
        if (!Utils::isUnset($request->voluntary)) {
            $body['voluntary'] = $request->voluntary;
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
            'action'      => 'FlightRefundApplyV2',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dtb-flight/v2/refund/action/apply',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return FlightRefundApplyV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 机票退票申请
     *  *
     * @param FlightRefundApplyV2Request $request FlightRefundApplyV2Request
     *
     * @return FlightRefundApplyV2Response FlightRefundApplyV2Response
     */
    public function flightRefundApplyV2($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new FlightRefundApplyV2Headers([]);

        return $this->flightRefundApplyV2WithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 航班退票详情
     *  *
     * @param FlightRefundDetailRequest $request FlightRefundDetailRequest
     * @param FlightRefundDetailHeaders $headers FlightRefundDetailHeaders
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return FlightRefundDetailResponse FlightRefundDetailResponse
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
     * @summary 航班退票详情
     *  *
     * @param FlightRefundDetailRequest $request FlightRefundDetailRequest
     *
     * @return FlightRefundDetailResponse FlightRefundDetailResponse
     */
    public function flightRefundDetail($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new FlightRefundDetailHeaders([]);

        return $this->flightRefundDetailWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 机票退票详情
     *  *
     * @param FlightRefundDetailV2Request $request FlightRefundDetailV2Request
     * @param FlightRefundDetailV2Headers $headers FlightRefundDetailV2Headers
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return FlightRefundDetailV2Response FlightRefundDetailV2Response
     */
    public function flightRefundDetailV2WithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->isvName)) {
            $query['isv_name'] = $request->isvName;
        }
        if (!Utils::isUnset($request->orderId)) {
            $query['order_id'] = $request->orderId;
        }
        if (!Utils::isUnset($request->refundApplyId)) {
            $query['refund_apply_id'] = $request->refundApplyId;
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
            'action'      => 'FlightRefundDetailV2',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dtb-flight/v2/refund/action/detail',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return FlightRefundDetailV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 机票退票详情
     *  *
     * @param FlightRefundDetailV2Request $request FlightRefundDetailV2Request
     *
     * @return FlightRefundDetailV2Response FlightRefundDetailV2Response
     */
    public function flightRefundDetailV2($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new FlightRefundDetailV2Headers([]);

        return $this->flightRefundDetailV2WithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 机票退票预计算
     *  *
     * @param FlightRefundPreCalRequest $tmpReq  FlightRefundPreCalRequest
     * @param FlightRefundPreCalHeaders $headers FlightRefundPreCalHeaders
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return FlightRefundPreCalResponse FlightRefundPreCalResponse
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
     * @summary 机票退票预计算
     *  *
     * @param FlightRefundPreCalRequest $request FlightRefundPreCalRequest
     *
     * @return FlightRefundPreCalResponse FlightRefundPreCalResponse
     */
    public function flightRefundPreCal($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new FlightRefundPreCalHeaders([]);

        return $this->flightRefundPreCalWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 机票退票费用预计算
     *  *
     * @param FlightRefundPreCalV2Request $tmpReq  FlightRefundPreCalV2Request
     * @param FlightRefundPreCalV2Headers $headers FlightRefundPreCalV2Headers
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return FlightRefundPreCalV2Response FlightRefundPreCalV2Response
     */
    public function flightRefundPreCalV2WithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new FlightRefundPreCalV2ShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->passengerSegmentRelations)) {
            $request->passengerSegmentRelationsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->passengerSegmentRelations, 'passenger_segment_relations', 'json');
        }
        if (!Utils::isUnset($tmpReq->ticketNos)) {
            $request->ticketNosShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->ticketNos, 'ticket_nos', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->isvName)) {
            $query['isv_name'] = $request->isvName;
        }
        if (!Utils::isUnset($request->orderId)) {
            $query['order_id'] = $request->orderId;
        }
        if (!Utils::isUnset($request->outOrderId)) {
            $query['out_order_id'] = $request->outOrderId;
        }
        if (!Utils::isUnset($request->passengerSegmentRelationsShrink)) {
            $query['passenger_segment_relations'] = $request->passengerSegmentRelationsShrink;
        }
        if (!Utils::isUnset($request->preCalType)) {
            $query['pre_cal_type'] = $request->preCalType;
        }
        if (!Utils::isUnset($request->ticketNosShrink)) {
            $query['ticket_nos'] = $request->ticketNosShrink;
        }
        if (!Utils::isUnset($request->voluntary)) {
            $query['voluntary'] = $request->voluntary;
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
            'action'      => 'FlightRefundPreCalV2',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dtb-flight/v2/refund/action/pre-cal',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return FlightRefundPreCalV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 机票退票费用预计算
     *  *
     * @param FlightRefundPreCalV2Request $request FlightRefundPreCalV2Request
     *
     * @return FlightRefundPreCalV2Response FlightRefundPreCalV2Response
     */
    public function flightRefundPreCalV2($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new FlightRefundPreCalV2Headers([]);

        return $this->flightRefundPreCalV2WithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 航班列表搜索
     *  *
     * @param FlightSearchListRequest $request FlightSearchListRequest
     * @param FlightSearchListHeaders $headers FlightSearchListHeaders
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return FlightSearchListResponse FlightSearchListResponse
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
     * @summary 航班列表搜索
     *  *
     * @param FlightSearchListRequest $request FlightSearchListRequest
     *
     * @return FlightSearchListResponse FlightSearchListResponse
     */
    public function flightSearchList($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new FlightSearchListHeaders([]);

        return $this->flightSearchListWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 换取GroupCorpToken接口
     *  *
     * @param GroupCorpTokenRequest $request GroupCorpTokenRequest
     * @param GroupCorpTokenHeaders $headers GroupCorpTokenHeaders
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return GroupCorpTokenResponse GroupCorpTokenResponse
     */
    public function groupCorpTokenWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appSecret)) {
            $query['app_secret'] = $request->appSecret;
        }
        if (!Utils::isUnset($request->corpId)) {
            $query['corp_id'] = $request->corpId;
        }
        if (!Utils::isUnset($request->subCorpId)) {
            $query['sub_corp_id'] = $request->subCorpId;
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
            'action'      => 'GroupCorpToken',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/btrip-open-auth/v1/group-corp-token/action/take',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GroupCorpTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 换取GroupCorpToken接口
     *  *
     * @param GroupCorpTokenRequest $request GroupCorpTokenRequest
     *
     * @return GroupCorpTokenResponse GroupCorpTokenResponse
     */
    public function groupCorpToken($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GroupCorpTokenHeaders([]);

        return $this->groupCorpTokenWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 集团部门同步
     *  *
     * @param GroupDepartSaveRequest $tmpReq  GroupDepartSaveRequest
     * @param GroupDepartSaveHeaders $headers GroupDepartSaveHeaders
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return GroupDepartSaveResponse GroupDepartSaveResponse
     */
    public function groupDepartSaveWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GroupDepartSaveShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->subCorpIdList)) {
            $request->subCorpIdListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->subCorpIdList, 'sub_corp_id_list', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->deptName)) {
            $body['dept_name'] = $request->deptName;
        }
        if (!Utils::isUnset($request->managerIds)) {
            $body['manager_ids'] = $request->managerIds;
        }
        if (!Utils::isUnset($request->outerDeptId)) {
            $body['outer_dept_id'] = $request->outerDeptId;
        }
        if (!Utils::isUnset($request->outerDeptPid)) {
            $body['outer_dept_pid'] = $request->outerDeptPid;
        }
        if (!Utils::isUnset($request->status)) {
            $body['status'] = $request->status;
        }
        if (!Utils::isUnset($request->subCorpIdListShrink)) {
            $body['sub_corp_id_list'] = $request->subCorpIdListShrink;
        }
        if (!Utils::isUnset($request->syncGroup)) {
            $body['sync_group'] = $request->syncGroup;
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
            'action'      => 'GroupDepartSave',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/sub_corps/v1/departs',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GroupDepartSaveResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 集团部门同步
     *  *
     * @param GroupDepartSaveRequest $request GroupDepartSaveRequest
     *
     * @return GroupDepartSaveResponse GroupDepartSaveResponse
     */
    public function groupDepartSave($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GroupDepartSaveHeaders([]);

        return $this->groupDepartSaveWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 集团人员同步
     *  *
     * @param GroupUserSaveRequest $tmpReq  GroupUserSaveRequest
     * @param GroupUserSaveHeaders $headers GroupUserSaveHeaders
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return GroupUserSaveResponse GroupUserSaveResponse
     */
    public function groupUserSaveWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GroupUserSaveShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->certList)) {
            $request->certListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->certList, 'cert_list', 'json');
        }
        if (!Utils::isUnset($tmpReq->subCorpIdList)) {
            $request->subCorpIdListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->subCorpIdList, 'sub_corp_id_list', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->baseCityCode)) {
            $body['base_city_code'] = $request->baseCityCode;
        }
        if (!Utils::isUnset($request->birthday)) {
            $body['birthday'] = $request->birthday;
        }
        if (!Utils::isUnset($request->certListShrink)) {
            $body['cert_list'] = $request->certListShrink;
        }
        if (!Utils::isUnset($request->gender)) {
            $body['gender'] = $request->gender;
        }
        if (!Utils::isUnset($request->jobNo)) {
            $body['job_no'] = $request->jobNo;
        }
        if (!Utils::isUnset($request->phone)) {
            $body['phone'] = $request->phone;
        }
        if (!Utils::isUnset($request->realNameEn)) {
            $body['real_name_en'] = $request->realNameEn;
        }
        if (!Utils::isUnset($request->subCorpIdListShrink)) {
            $body['sub_corp_id_list'] = $request->subCorpIdListShrink;
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
        if (!Utils::isUnset($headers->xAcsBtripCorpToken)) {
            $realHeaders['x-acs-btrip-corp-token'] = Utils::toJSONString($headers->xAcsBtripCorpToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GroupUserSave',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/sub_corps/v1/users',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GroupUserSaveResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 集团人员同步
     *  *
     * @param GroupUserSaveRequest $request GroupUserSaveRequest
     *
     * @return GroupUserSaveResponse GroupUserSaveResponse
     */
    public function groupUserSave($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GroupUserSaveHeaders([]);

        return $this->groupUserSaveWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 酒店起价
     *  *
     * @param HotelAskingPriceRequest $tmpReq  HotelAskingPriceRequest
     * @param HotelAskingPriceHeaders $headers HotelAskingPriceHeaders
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return HotelAskingPriceResponse HotelAskingPriceResponse
     */
    public function hotelAskingPriceWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new HotelAskingPriceShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->shids)) {
            $request->shidsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->shids, 'shids', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->adultNum)) {
            $query['adult_num'] = $request->adultNum;
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
        if (!Utils::isUnset($request->cityName)) {
            $query['city_name'] = $request->cityName;
        }
        if (!Utils::isUnset($request->dir)) {
            $query['dir'] = $request->dir;
        }
        if (!Utils::isUnset($request->hotelStar)) {
            $query['hotel_star'] = $request->hotelStar;
        }
        if (!Utils::isUnset($request->isProtocol)) {
            $query['is_protocol'] = $request->isProtocol;
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
            'action'      => 'HotelAskingPrice',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dtb-hotel/v1/hotels/action/asking-price',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return HotelAskingPriceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 酒店起价
     *  *
     * @param HotelAskingPriceRequest $request HotelAskingPriceRequest
     *
     * @return HotelAskingPriceResponse HotelAskingPriceResponse
     */
    public function hotelAskingPrice($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new HotelAskingPriceHeaders([]);

        return $this->hotelAskingPriceWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 查询酒店记账数据
     *  *
     * @param HotelBillSettlementQueryRequest $request HotelBillSettlementQueryRequest
     * @param HotelBillSettlementQueryHeaders $headers HotelBillSettlementQueryHeaders
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return HotelBillSettlementQueryResponse HotelBillSettlementQueryResponse
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
     * @summary 查询酒店记账数据
     *  *
     * @param HotelBillSettlementQueryRequest $request HotelBillSettlementQueryRequest
     *
     * @return HotelBillSettlementQueryResponse HotelBillSettlementQueryResponse
     */
    public function hotelBillSettlementQuery($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new HotelBillSettlementQueryHeaders([]);

        return $this->hotelBillSettlementQueryWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 酒店城市列表
     *  *
     * @param HotelCityCodeListRequest $request HotelCityCodeListRequest
     * @param HotelCityCodeListHeaders $headers HotelCityCodeListHeaders
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return HotelCityCodeListResponse HotelCityCodeListResponse
     */
    public function hotelCityCodeListWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->countryCode)) {
            $query['country_code'] = $request->countryCode;
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
            'action'      => 'HotelCityCodeList',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dtb-hotel/v1/city-codes/action/search',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return HotelCityCodeListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 酒店城市列表
     *  *
     * @param HotelCityCodeListRequest $request HotelCityCodeListRequest
     *
     * @return HotelCityCodeListResponse HotelCityCodeListResponse
     */
    public function hotelCityCodeList($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new HotelCityCodeListHeaders([]);

        return $this->hotelCityCodeListWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 查询酒店超标审批详情
     *  *
     * @param HotelExceedApplyQueryRequest $request HotelExceedApplyQueryRequest
     * @param HotelExceedApplyQueryHeaders $headers HotelExceedApplyQueryHeaders
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return HotelExceedApplyQueryResponse HotelExceedApplyQueryResponse
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
     * @summary 查询酒店超标审批详情
     *  *
     * @param HotelExceedApplyQueryRequest $request HotelExceedApplyQueryRequest
     *
     * @return HotelExceedApplyQueryResponse HotelExceedApplyQueryResponse
     */
    public function hotelExceedApplyQuery($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new HotelExceedApplyQueryHeaders([]);

        return $this->hotelExceedApplyQueryWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 酒店详情页报价接口(直连)
     *  *
     * @param HotelGoodsQueryRequest $request HotelGoodsQueryRequest
     * @param HotelGoodsQueryHeaders $headers HotelGoodsQueryHeaders
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return HotelGoodsQueryResponse HotelGoodsQueryResponse
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
     * @summary 酒店详情页报价接口(直连)
     *  *
     * @param HotelGoodsQueryRequest $request HotelGoodsQueryRequest
     *
     * @return HotelGoodsQueryResponse HotelGoodsQueryResponse
     */
    public function hotelGoodsQuery($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new HotelGoodsQueryHeaders([]);

        return $this->hotelGoodsQueryWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取酒店清单
     *  *
     * @param HotelIndexInfoRequest $request HotelIndexInfoRequest
     * @param HotelIndexInfoHeaders $headers HotelIndexInfoHeaders
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return HotelIndexInfoResponse HotelIndexInfoResponse
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
     * @summary 获取酒店清单
     *  *
     * @param HotelIndexInfoRequest $request HotelIndexInfoRequest
     *
     * @return HotelIndexInfoResponse HotelIndexInfoResponse
     */
    public function hotelIndexInfo($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new HotelIndexInfoHeaders([]);

        return $this->hotelIndexInfoWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 酒店订单取消
     *  *
     * @param HotelOrderCancelRequest $request HotelOrderCancelRequest
     * @param HotelOrderCancelHeaders $headers HotelOrderCancelHeaders
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return HotelOrderCancelResponse HotelOrderCancelResponse
     */
    public function hotelOrderCancelWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->btripOrderId)) {
            $query['btrip_order_id'] = $request->btripOrderId;
        }
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
     * @summary 酒店订单取消
     *  *
     * @param HotelOrderCancelRequest $request HotelOrderCancelRequest
     *
     * @return HotelOrderCancelResponse HotelOrderCancelResponse
     */
    public function hotelOrderCancel($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new HotelOrderCancelHeaders([]);

        return $this->hotelOrderCancelWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 酒店订单创建
     *  *
     * @param HotelOrderCreateRequest $tmpReq  HotelOrderCreateRequest
     * @param HotelOrderCreateHeaders $headers HotelOrderCreateHeaders
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return HotelOrderCreateResponse HotelOrderCreateResponse
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
        if (!Utils::isUnset($request->extra)) {
            $body['extra'] = $request->extra;
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
     * @summary 酒店订单创建
     *  *
     * @param HotelOrderCreateRequest $request HotelOrderCreateRequest
     *
     * @return HotelOrderCreateResponse HotelOrderCreateResponse
     */
    public function hotelOrderCreate($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new HotelOrderCreateHeaders([]);

        return $this->hotelOrderCreateWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 酒店订单明细信息
     *  *
     * @param HotelOrderDetailInfoRequest $request HotelOrderDetailInfoRequest
     * @param HotelOrderDetailInfoHeaders $headers HotelOrderDetailInfoHeaders
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return HotelOrderDetailInfoResponse HotelOrderDetailInfoResponse
     */
    public function hotelOrderDetailInfoWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->btripOrderId)) {
            $query['btrip_order_id'] = $request->btripOrderId;
        }
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
     * @summary 酒店订单明细信息
     *  *
     * @param HotelOrderDetailInfoRequest $request HotelOrderDetailInfoRequest
     *
     * @return HotelOrderDetailInfoResponse HotelOrderDetailInfoResponse
     */
    public function hotelOrderDetailInfo($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new HotelOrderDetailInfoHeaders([]);

        return $this->hotelOrderDetailInfoWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 查询酒店订单列表
     *  *
     * @param HotelOrderListQueryRequest $request HotelOrderListQueryRequest
     * @param HotelOrderListQueryHeaders $headers HotelOrderListQueryHeaders
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return HotelOrderListQueryResponse HotelOrderListQueryResponse
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
     * @summary 查询酒店订单列表
     *  *
     * @param HotelOrderListQueryRequest $request HotelOrderListQueryRequest
     *
     * @return HotelOrderListQueryResponse HotelOrderListQueryResponse
     */
    public function hotelOrderListQuery($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new HotelOrderListQueryHeaders([]);

        return $this->hotelOrderListQueryWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 酒店订单支付
     *  *
     * @param HotelOrderPayRequest $request HotelOrderPayRequest
     * @param HotelOrderPayHeaders $headers HotelOrderPayHeaders
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return HotelOrderPayResponse HotelOrderPayResponse
     */
    public function hotelOrderPayWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->btripOrderId)) {
            $body['btrip_order_id'] = $request->btripOrderId;
        }
        if (!Utils::isUnset($request->btripUserId)) {
            $body['btrip_user_id'] = $request->btripUserId;
        }
        if (!Utils::isUnset($request->companyPayFee)) {
            $body['company_pay_fee'] = $request->companyPayFee;
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
     * @summary 酒店订单支付
     *  *
     * @param HotelOrderPayRequest $request HotelOrderPayRequest
     *
     * @return HotelOrderPayResponse HotelOrderPayResponse
     */
    public function hotelOrderPay($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new HotelOrderPayHeaders([]);

        return $this->hotelOrderPayWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 酒店下单前校验
     *  *
     * @param HotelOrderPreValidateRequest $tmpReq  HotelOrderPreValidateRequest
     * @param HotelOrderPreValidateHeaders $headers HotelOrderPreValidateHeaders
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return HotelOrderPreValidateResponse HotelOrderPreValidateResponse
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
     * @summary 酒店下单前校验
     *  *
     * @param HotelOrderPreValidateRequest $request HotelOrderPreValidateRequest
     *
     * @return HotelOrderPreValidateResponse HotelOrderPreValidateResponse
     */
    public function hotelOrderPreValidate($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new HotelOrderPreValidateHeaders([]);

        return $this->hotelOrderPreValidateWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 酒店订单查询
     *  *
     * @param HotelOrderQueryRequest $request HotelOrderQueryRequest
     * @param HotelOrderQueryHeaders $headers HotelOrderQueryHeaders
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return HotelOrderQueryResponse HotelOrderQueryResponse
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
     * @summary 酒店订单查询
     *  *
     * @param HotelOrderQueryRequest $request HotelOrderQueryRequest
     *
     * @return HotelOrderQueryResponse HotelOrderQueryResponse
     */
    public function hotelOrderQuery($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new HotelOrderQueryHeaders([]);

        return $this->hotelOrderQueryWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 酒店拉动态拉取价格接口(落地)
     *  *
     * @param HotelPricePullRequest $tmpReq  HotelPricePullRequest
     * @param HotelPricePullHeaders $headers HotelPricePullHeaders
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return HotelPricePullResponse HotelPricePullResponse
     */
    public function hotelPricePullWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new HotelPricePullShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->hotelIds)) {
            $request->hotelIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->hotelIds, 'hotel_ids', 'json');
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
        if (!Utils::isUnset($request->cityCode)) {
            $query['city_code'] = $request->cityCode;
        }
        if (!Utils::isUnset($request->hotelIdsShrink)) {
            $query['hotel_ids'] = $request->hotelIdsShrink;
        }
        if (!Utils::isUnset($request->paymentType)) {
            $query['payment_type'] = $request->paymentType;
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
            'action'      => 'HotelPricePull',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dtb-hotel/v1/prices/action/pull',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return HotelPricePullResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 酒店拉动态拉取价格接口(落地)
     *  *
     * @param HotelPricePullRequest $request HotelPricePullRequest
     *
     * @return HotelPricePullResponse HotelPricePullResponse
     */
    public function hotelPricePull($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new HotelPricePullHeaders([]);

        return $this->hotelPricePullWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取酒店静态房型详情
     *  *
     * @param HotelRoomInfoRequest $tmpReq  HotelRoomInfoRequest
     * @param HotelRoomInfoHeaders $headers HotelRoomInfoHeaders
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return HotelRoomInfoResponse HotelRoomInfoResponse
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
     * @summary 获取酒店静态房型详情
     *  *
     * @param HotelRoomInfoRequest $request HotelRoomInfoRequest
     *
     * @return HotelRoomInfoResponse HotelRoomInfoResponse
     */
    public function hotelRoomInfo($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new HotelRoomInfoHeaders([]);

        return $this->hotelRoomInfoWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 酒店列表搜索接口(直连)
     *  *
     * @param HotelSearchRequest $tmpReq  HotelSearchRequest
     * @param HotelSearchHeaders $headers HotelSearchHeaders
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return HotelSearchResponse HotelSearchResponse
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
     * @summary 酒店列表搜索接口(直连)
     *  *
     * @param HotelSearchRequest $request HotelSearchRequest
     *
     * @return HotelSearchResponse HotelSearchResponse
     */
    public function hotelSearch($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new HotelSearchHeaders([]);

        return $this->hotelSearchWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 查询酒店静态详情
     *  *
     * @param HotelStaticInfoRequest $tmpReq  HotelStaticInfoRequest
     * @param HotelStaticInfoHeaders $headers HotelStaticInfoHeaders
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return HotelStaticInfoResponse HotelStaticInfoResponse
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
     * @summary 查询酒店静态详情
     *  *
     * @param HotelStaticInfoRequest $request HotelStaticInfoRequest
     *
     * @return HotelStaticInfoResponse HotelStaticInfoResponse
     */
    public function hotelStaticInfo($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new HotelStaticInfoHeaders([]);

        return $this->hotelStaticInfoWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 查询国际机票记账数据
     *  *
     * @param IeFlightBillSettlementQueryRequest $request IeFlightBillSettlementQueryRequest
     * @param IeFlightBillSettlementQueryHeaders $headers IeFlightBillSettlementQueryHeaders
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return IeFlightBillSettlementQueryResponse IeFlightBillSettlementQueryResponse
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
     * @summary 查询国际机票记账数据
     *  *
     * @param IeFlightBillSettlementQueryRequest $request IeFlightBillSettlementQueryRequest
     *
     * @return IeFlightBillSettlementQueryResponse IeFlightBillSettlementQueryResponse
     */
    public function ieFlightBillSettlementQuery($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new IeFlightBillSettlementQueryHeaders([]);

        return $this->ieFlightBillSettlementQueryWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 查询国际/中国港澳台酒店记账数据
     *  *
     * @param IeHotelBillSettlementQueryRequest $request IeHotelBillSettlementQueryRequest
     * @param IeHotelBillSettlementQueryHeaders $headers IeHotelBillSettlementQueryHeaders
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return IeHotelBillSettlementQueryResponse IeHotelBillSettlementQueryResponse
     */
    public function ieHotelBillSettlementQueryWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->category)) {
            $query['category'] = $request->category;
        }
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
            'action'      => 'IeHotelBillSettlementQuery',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/ie-hotel/v1/bill-settlement',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return IeHotelBillSettlementQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询国际/中国港澳台酒店记账数据
     *  *
     * @param IeHotelBillSettlementQueryRequest $request IeHotelBillSettlementQueryRequest
     *
     * @return IeHotelBillSettlementQueryResponse IeHotelBillSettlementQueryResponse
     */
    public function ieHotelBillSettlementQuery($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new IeHotelBillSettlementQueryHeaders([]);

        return $this->ieHotelBillSettlementQueryWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 查询保险电子发票
     *  *
     * @param InsInvoiceScanQueryRequest $request InsInvoiceScanQueryRequest
     * @param InsInvoiceScanQueryHeaders $headers InsInvoiceScanQueryHeaders
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return InsInvoiceScanQueryResponse InsInvoiceScanQueryResponse
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
     * @summary 查询保险电子发票
     *  *
     * @param InsInvoiceScanQueryRequest $request InsInvoiceScanQueryRequest
     *
     * @return InsInvoiceScanQueryResponse InsInvoiceScanQueryResponse
     */
    public function insInvoiceScanQuery($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new InsInvoiceScanQueryHeaders([]);

        return $this->insInvoiceScanQueryWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 保险订单申请
     *  *
     * @param InsureOrderApplyRequest $request InsureOrderApplyRequest
     * @param InsureOrderApplyHeaders $headers InsureOrderApplyHeaders
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return InsureOrderApplyResponse InsureOrderApplyResponse
     */
    public function insureOrderApplyWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->btripUserId)) {
            $body['btrip_user_id'] = $request->btripUserId;
        }
        if (!Utils::isUnset($request->buyerName)) {
            $body['buyer_name'] = $request->buyerName;
        }
        if (!Utils::isUnset($request->insOrderId)) {
            $body['ins_order_id'] = $request->insOrderId;
        }
        if (!Utils::isUnset($request->isvName)) {
            $body['isv_name'] = $request->isvName;
        }
        if (!Utils::isUnset($request->outOrderId)) {
            $body['out_order_id'] = $request->outOrderId;
        }
        if (!Utils::isUnset($request->outSubOrderId)) {
            $body['out_sub_order_id'] = $request->outSubOrderId;
        }
        if (!Utils::isUnset($request->supplierCode)) {
            $body['supplier_code'] = $request->supplierCode;
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
            'action'      => 'InsureOrderApply',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dtb-flight/v1/insurances/action/apply',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return InsureOrderApplyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 保险订单申请
     *  *
     * @param InsureOrderApplyRequest $request InsureOrderApplyRequest
     *
     * @return InsureOrderApplyResponse InsureOrderApplyResponse
     */
    public function insureOrderApply($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new InsureOrderApplyHeaders([]);

        return $this->insureOrderApplyWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 保险订单取消
     *  *
     * @param string                   $insOrderId
     * @param InsureOrderCancelRequest $request    InsureOrderCancelRequest
     * @param InsureOrderCancelHeaders $headers    InsureOrderCancelHeaders
     * @param RuntimeOptions           $runtime    runtime options for this request RuntimeOptions
     *
     * @return InsureOrderCancelResponse InsureOrderCancelResponse
     */
    public function insureOrderCancelWithOptions($insOrderId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->btripUserId)) {
            $query['btrip_user_id'] = $request->btripUserId;
        }
        if (!Utils::isUnset($request->buyerName)) {
            $query['buyer_name'] = $request->buyerName;
        }
        if (!Utils::isUnset($request->isvName)) {
            $query['isv_name'] = $request->isvName;
        }
        if (!Utils::isUnset($request->supplierCode)) {
            $query['supplier_code'] = $request->supplierCode;
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
            'action'      => 'InsureOrderCancel',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dtb-flight/v1/insurances/' . OpenApiUtilClient::getEncodeParam($insOrderId) . '/action/cancel',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return InsureOrderCancelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 保险订单取消
     *  *
     * @param string                   $insOrderId
     * @param InsureOrderCancelRequest $request    InsureOrderCancelRequest
     *
     * @return InsureOrderCancelResponse InsureOrderCancelResponse
     */
    public function insureOrderCancel($insOrderId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new InsureOrderCancelHeaders([]);

        return $this->insureOrderCancelWithOptions($insOrderId, $request, $headers, $runtime);
    }

    /**
     * @summary 保险订单创建
     *  *
     * @param InsureOrderCreateRequest $tmpReq  InsureOrderCreateRequest
     * @param InsureOrderCreateHeaders $headers InsureOrderCreateHeaders
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return InsureOrderCreateResponse InsureOrderCreateResponse
     */
    public function insureOrderCreateWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new InsureOrderCreateShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->applicant)) {
            $request->applicantShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->applicant, 'applicant', 'json');
        }
        if (!Utils::isUnset($tmpReq->insPersonAndSegmentList)) {
            $request->insPersonAndSegmentListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->insPersonAndSegmentList, 'ins_person_and_segment_list', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->applicantShrink)) {
            $body['applicant'] = $request->applicantShrink;
        }
        if (!Utils::isUnset($request->btripUserId)) {
            $body['btrip_user_id'] = $request->btripUserId;
        }
        if (!Utils::isUnset($request->buyerName)) {
            $body['buyer_name'] = $request->buyerName;
        }
        if (!Utils::isUnset($request->insPersonAndSegmentListShrink)) {
            $body['ins_person_and_segment_list'] = $request->insPersonAndSegmentListShrink;
        }
        if (!Utils::isUnset($request->isvName)) {
            $body['isv_name'] = $request->isvName;
        }
        if (!Utils::isUnset($request->outInsOrderId)) {
            $body['out_ins_order_id'] = $request->outInsOrderId;
        }
        if (!Utils::isUnset($request->outOrderId)) {
            $body['out_order_id'] = $request->outOrderId;
        }
        if (!Utils::isUnset($request->outSubOrderId)) {
            $body['out_sub_order_id'] = $request->outSubOrderId;
        }
        if (!Utils::isUnset($request->supplierCode)) {
            $body['supplier_code'] = $request->supplierCode;
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
            'action'      => 'InsureOrderCreate',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dtb-flight/v1/insurances/action/create',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return InsureOrderCreateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 保险订单创建
     *  *
     * @param InsureOrderCreateRequest $request InsureOrderCreateRequest
     *
     * @return InsureOrderCreateResponse InsureOrderCreateResponse
     */
    public function insureOrderCreate($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new InsureOrderCreateHeaders([]);

        return $this->insureOrderCreateWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 保险订单查询
     *  *
     * @param InsureOrderDetailRequest $request InsureOrderDetailRequest
     * @param InsureOrderDetailHeaders $headers InsureOrderDetailHeaders
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return InsureOrderDetailResponse InsureOrderDetailResponse
     */
    public function insureOrderDetailWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->btripUserId)) {
            $query['btrip_user_id'] = $request->btripUserId;
        }
        if (!Utils::isUnset($request->buyerName)) {
            $query['buyer_name'] = $request->buyerName;
        }
        if (!Utils::isUnset($request->insOrderId)) {
            $query['ins_order_id'] = $request->insOrderId;
        }
        if (!Utils::isUnset($request->isvName)) {
            $query['isv_name'] = $request->isvName;
        }
        if (!Utils::isUnset($request->supplierCode)) {
            $query['supplier_code'] = $request->supplierCode;
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
            'action'      => 'InsureOrderDetail',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dtb-flight/v1/insurances/action/detail',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return InsureOrderDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 保险订单查询
     *  *
     * @param InsureOrderDetailRequest $request InsureOrderDetailRequest
     *
     * @return InsureOrderDetailResponse InsureOrderDetailResponse
     */
    public function insureOrderDetail($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new InsureOrderDetailHeaders([]);

        return $this->insureOrderDetailWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 保险订单支付
     *  *
     * @param string                $insOrderId
     * @param InsureOrderPayRequest $request    InsureOrderPayRequest
     * @param InsureOrderPayHeaders $headers    InsureOrderPayHeaders
     * @param RuntimeOptions        $runtime    runtime options for this request RuntimeOptions
     *
     * @return InsureOrderPayResponse InsureOrderPayResponse
     */
    public function insureOrderPayWithOptions($insOrderId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->btripUserId)) {
            $body['btrip_user_id'] = $request->btripUserId;
        }
        if (!Utils::isUnset($request->buyerName)) {
            $body['buyer_name'] = $request->buyerName;
        }
        if (!Utils::isUnset($request->isvName)) {
            $body['isv_name'] = $request->isvName;
        }
        if (!Utils::isUnset($request->outOrderId)) {
            $body['out_order_id'] = $request->outOrderId;
        }
        if (!Utils::isUnset($request->outSubOrderId)) {
            $body['out_sub_order_id'] = $request->outSubOrderId;
        }
        if (!Utils::isUnset($request->paymentAmount)) {
            $body['payment_amount'] = $request->paymentAmount;
        }
        if (!Utils::isUnset($request->supplierCode)) {
            $body['supplier_code'] = $request->supplierCode;
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
            'action'      => 'InsureOrderPay',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dtb-flight/v1/insurances/' . OpenApiUtilClient::getEncodeParam($insOrderId) . '/action/pay',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return InsureOrderPayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 保险订单支付
     *  *
     * @param string                $insOrderId
     * @param InsureOrderPayRequest $request    InsureOrderPayRequest
     *
     * @return InsureOrderPayResponse InsureOrderPayResponse
     */
    public function insureOrderPay($insOrderId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new InsureOrderPayHeaders([]);

        return $this->insureOrderPayWithOptions($insOrderId, $request, $headers, $runtime);
    }

    /**
     * @summary 保险订单退保
     *  *
     * @param string                   $insOrderId
     * @param InsureOrderRefundRequest $tmpReq     InsureOrderRefundRequest
     * @param InsureOrderRefundHeaders $headers    InsureOrderRefundHeaders
     * @param RuntimeOptions           $runtime    runtime options for this request RuntimeOptions
     *
     * @return InsureOrderRefundResponse InsureOrderRefundResponse
     */
    public function insureOrderRefundWithOptions($insOrderId, $tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new InsureOrderRefundShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->policyNoList)) {
            $request->policyNoListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->policyNoList, 'policy_no_list', 'json');
        }
        if (!Utils::isUnset($tmpReq->subInsOrderIds)) {
            $request->subInsOrderIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->subInsOrderIds, 'sub_ins_order_ids', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->btripUserId)) {
            $body['btrip_user_id'] = $request->btripUserId;
        }
        if (!Utils::isUnset($request->buyerName)) {
            $body['buyer_name'] = $request->buyerName;
        }
        if (!Utils::isUnset($request->isvName)) {
            $body['isv_name'] = $request->isvName;
        }
        if (!Utils::isUnset($request->outApplyId)) {
            $body['out_apply_id'] = $request->outApplyId;
        }
        if (!Utils::isUnset($request->policyNoListShrink)) {
            $body['policy_no_list'] = $request->policyNoListShrink;
        }
        if (!Utils::isUnset($request->subInsOrderIdsShrink)) {
            $body['sub_ins_order_ids'] = $request->subInsOrderIdsShrink;
        }
        if (!Utils::isUnset($request->supplierCode)) {
            $body['supplier_code'] = $request->supplierCode;
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
            'action'      => 'InsureOrderRefund',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dtb-flight/v1/insurances/' . OpenApiUtilClient::getEncodeParam($insOrderId) . '/action/refund',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return InsureOrderRefundResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 保险订单退保
     *  *
     * @param string                   $insOrderId
     * @param InsureOrderRefundRequest $request    InsureOrderRefundRequest
     *
     * @return InsureOrderRefundResponse InsureOrderRefundResponse
     */
    public function insureOrderRefund($insOrderId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new InsureOrderRefundHeaders([]);

        return $this->insureOrderRefundWithOptions($insOrderId, $request, $headers, $runtime);
    }

    /**
     * @summary 查询保单详情链接
     *  *
     * @param string                      $insOrderId
     * @param InsureOrderUrlDetailHeaders $headers    InsureOrderUrlDetailHeaders
     * @param RuntimeOptions              $runtime    runtime options for this request RuntimeOptions
     *
     * @return InsureOrderUrlDetailResponse InsureOrderUrlDetailResponse
     */
    public function insureOrderUrlDetailWithOptions($insOrderId, $headers, $runtime)
    {
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsBtripCorpToken)) {
            $realHeaders['x-acs-btrip-corp-token'] = Utils::toJSONString($headers->xAcsBtripCorpToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
        ]);
        $params = new Params([
            'action'      => 'InsureOrderUrlDetail',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dtb-flight/v1/insurances/' . OpenApiUtilClient::getEncodeParam($insOrderId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return InsureOrderUrlDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询保单详情链接
     *  *
     * @param string $insOrderId
     *
     * @return InsureOrderUrlDetailResponse InsureOrderUrlDetailResponse
     */
    public function insureOrderUrlDetail($insOrderId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new InsureOrderUrlDetailHeaders([]);

        return $this->insureOrderUrlDetailWithOptions($insOrderId, $headers, $runtime);
    }

    /**
     * @summary 退保详情查询
     *  *
     * @param InsureRefundDetailRequest $request InsureRefundDetailRequest
     * @param InsureRefundDetailHeaders $headers InsureRefundDetailHeaders
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return InsureRefundDetailResponse InsureRefundDetailResponse
     */
    public function insureRefundDetailWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->applyId)) {
            $query['apply_id'] = $request->applyId;
        }
        if (!Utils::isUnset($request->btripUserId)) {
            $query['btrip_user_id'] = $request->btripUserId;
        }
        if (!Utils::isUnset($request->buyerName)) {
            $query['buyer_name'] = $request->buyerName;
        }
        if (!Utils::isUnset($request->insOrderId)) {
            $query['ins_order_id'] = $request->insOrderId;
        }
        if (!Utils::isUnset($request->isvName)) {
            $query['isv_name'] = $request->isvName;
        }
        if (!Utils::isUnset($request->outApplyId)) {
            $query['out_apply_id'] = $request->outApplyId;
        }
        if (!Utils::isUnset($request->supplierCode)) {
            $query['supplier_code'] = $request->supplierCode;
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
            'action'      => 'InsureRefundDetail',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dtb-flight/v1/insurances/action/refund-detail',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return InsureRefundDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 退保详情查询
     *  *
     * @param InsureRefundDetailRequest $request InsureRefundDetailRequest
     *
     * @return InsureRefundDetailResponse InsureRefundDetailResponse
     */
    public function insureRefundDetail($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new InsureRefundDetailHeaders([]);

        return $this->insureRefundDetailWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 国际机票创建订单
     *  *
     * @param IntlFlightCreateOrderRequest $tmpReq  IntlFlightCreateOrderRequest
     * @param IntlFlightCreateOrderHeaders $headers IntlFlightCreateOrderHeaders
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return IntlFlightCreateOrderResponse IntlFlightCreateOrderResponse
     */
    public function intlFlightCreateOrderWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new IntlFlightCreateOrderShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->contactInfo)) {
            $request->contactInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->contactInfo, 'contact_info', 'json');
        }
        if (!Utils::isUnset($tmpReq->costCenter)) {
            $request->costCenterShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->costCenter, 'cost_center', 'json');
        }
        if (!Utils::isUnset($tmpReq->extraInfo)) {
            $request->extraInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->extraInfo, 'extra_info', 'json');
        }
        if (!Utils::isUnset($tmpReq->passengerList)) {
            $request->passengerListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->passengerList, 'passenger_list', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->asyncCreateOrderKey)) {
            $query['async_create_order_key'] = $request->asyncCreateOrderKey;
        }
        if (!Utils::isUnset($request->asyncCreateOrderMode)) {
            $query['async_create_order_mode'] = $request->asyncCreateOrderMode;
        }
        if (!Utils::isUnset($request->contactInfoShrink)) {
            $query['contact_info'] = $request->contactInfoShrink;
        }
        if (!Utils::isUnset($request->costCenterShrink)) {
            $query['cost_center'] = $request->costCenterShrink;
        }
        if (!Utils::isUnset($request->extraInfoShrink)) {
            $query['extra_info'] = $request->extraInfoShrink;
        }
        if (!Utils::isUnset($request->isvName)) {
            $query['isv_name'] = $request->isvName;
        }
        if (!Utils::isUnset($request->language)) {
            $query['language'] = $request->language;
        }
        if (!Utils::isUnset($request->otaItemId)) {
            $query['ota_item_id'] = $request->otaItemId;
        }
        if (!Utils::isUnset($request->outOrderId)) {
            $query['out_order_id'] = $request->outOrderId;
        }
        if (!Utils::isUnset($request->passengerListShrink)) {
            $query['passenger_list'] = $request->passengerListShrink;
        }
        if (!Utils::isUnset($request->renderKey)) {
            $query['render_key'] = $request->renderKey;
        }
        if (!Utils::isUnset($request->totalPriceCent)) {
            $query['total_price_cent'] = $request->totalPriceCent;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['user_id'] = $request->userId;
        }
        if (!Utils::isUnset($request->userName)) {
            $query['user_name'] = $request->userName;
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
            'action'      => 'IntlFlightCreateOrder',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/intl-flight/v1/order/action/create',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return IntlFlightCreateOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 国际机票创建订单
     *  *
     * @param IntlFlightCreateOrderRequest $request IntlFlightCreateOrderRequest
     *
     * @return IntlFlightCreateOrderResponse IntlFlightCreateOrderResponse
     */
    public function intlFlightCreateOrder($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new IntlFlightCreateOrderHeaders([]);

        return $this->intlFlightCreateOrderWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 国际机票验舱验价
     *  *
     * @param IntlFlightInventoryPriceCheckRequest $tmpReq  IntlFlightInventoryPriceCheckRequest
     * @param IntlFlightInventoryPriceCheckHeaders $headers IntlFlightInventoryPriceCheckHeaders
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return IntlFlightInventoryPriceCheckResponse IntlFlightInventoryPriceCheckResponse
     */
    public function intlFlightInventoryPriceCheckWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new IntlFlightInventoryPriceCheckShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->passengerList)) {
            $request->passengerListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->passengerList, 'passenger_list', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->isvName)) {
            $query['isv_name'] = $request->isvName;
        }
        if (!Utils::isUnset($request->language)) {
            $query['language'] = $request->language;
        }
        if (!Utils::isUnset($request->orderPrice)) {
            $query['order_price'] = $request->orderPrice;
        }
        if (!Utils::isUnset($request->otaItemId)) {
            $query['ota_item_id'] = $request->otaItemId;
        }
        if (!Utils::isUnset($request->passengerListShrink)) {
            $query['passenger_list'] = $request->passengerListShrink;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['user_id'] = $request->userId;
        }
        if (!Utils::isUnset($request->userName)) {
            $query['user_name'] = $request->userName;
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
            'action'      => 'IntlFlightInventoryPriceCheck',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/intl-flight/v1/flights/action/inventory-price-check',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return IntlFlightInventoryPriceCheckResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 国际机票验舱验价
     *  *
     * @param IntlFlightInventoryPriceCheckRequest $request IntlFlightInventoryPriceCheckRequest
     *
     * @return IntlFlightInventoryPriceCheckResponse IntlFlightInventoryPriceCheckResponse
     */
    public function intlFlightInventoryPriceCheck($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new IntlFlightInventoryPriceCheckHeaders([]);

        return $this->intlFlightInventoryPriceCheckWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 国际机票航班搜索
     *  *
     * @param IntlFlightListingSearchRequest $tmpReq  IntlFlightListingSearchRequest
     * @param IntlFlightListingSearchHeaders $headers IntlFlightListingSearchHeaders
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return IntlFlightListingSearchResponse IntlFlightListingSearchResponse
     */
    public function intlFlightListingSearchWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new IntlFlightListingSearchShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->searchJourneys)) {
            $request->searchJourneysShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->searchJourneys, 'search_journeys', 'json');
        }
        if (!Utils::isUnset($tmpReq->searchPassengerList)) {
            $request->searchPassengerListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->searchPassengerList, 'search_passenger_list', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->btripUserId)) {
            $query['btrip_user_id'] = $request->btripUserId;
        }
        if (!Utils::isUnset($request->buyerName)) {
            $query['buyer_name'] = $request->buyerName;
        }
        if (!Utils::isUnset($request->cabinType)) {
            $query['cabin_type'] = $request->cabinType;
        }
        if (!Utils::isUnset($request->directOnly)) {
            $query['direct_only'] = $request->directOnly;
        }
        if (!Utils::isUnset($request->isvName)) {
            $query['isv_name'] = $request->isvName;
        }
        if (!Utils::isUnset($request->language)) {
            $query['language'] = $request->language;
        }
        if (!Utils::isUnset($request->needShareFlight)) {
            $query['need_share_flight'] = $request->needShareFlight;
        }
        if (!Utils::isUnset($request->outWheelSearch)) {
            $query['out_wheel_search'] = $request->outWheelSearch;
        }
        if (!Utils::isUnset($request->queryRecordId)) {
            $query['query_record_id'] = $request->queryRecordId;
        }
        if (!Utils::isUnset($request->searchJourneysShrink)) {
            $query['search_journeys'] = $request->searchJourneysShrink;
        }
        if (!Utils::isUnset($request->searchMode)) {
            $query['search_mode'] = $request->searchMode;
        }
        if (!Utils::isUnset($request->searchPassengerListShrink)) {
            $query['search_passenger_list'] = $request->searchPassengerListShrink;
        }
        if (!Utils::isUnset($request->supplierCode)) {
            $query['supplier_code'] = $request->supplierCode;
        }
        if (!Utils::isUnset($request->token)) {
            $query['token'] = $request->token;
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
            'action'      => 'IntlFlightListingSearch',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/intl-flight/v1/flights/action/listing-search',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return IntlFlightListingSearchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 国际机票航班搜索
     *  *
     * @param IntlFlightListingSearchRequest $request IntlFlightListingSearchRequest
     *
     * @return IntlFlightListingSearchResponse IntlFlightListingSearchResponse
     */
    public function intlFlightListingSearch($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new IntlFlightListingSearchHeaders([]);

        return $this->intlFlightListingSearchWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 国际机票订单取消
     *  *
     * @param IntlFlightOrderCancelRequest $request IntlFlightOrderCancelRequest
     * @param IntlFlightOrderCancelHeaders $headers IntlFlightOrderCancelHeaders
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return IntlFlightOrderCancelResponse IntlFlightOrderCancelResponse
     */
    public function intlFlightOrderCancelWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->isvName)) {
            $query['isv_name'] = $request->isvName;
        }
        if (!Utils::isUnset($request->memo)) {
            $query['memo'] = $request->memo;
        }
        if (!Utils::isUnset($request->orderId)) {
            $query['order_id'] = $request->orderId;
        }
        if (!Utils::isUnset($request->outOrderId)) {
            $query['out_order_id'] = $request->outOrderId;
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
            'action'      => 'IntlFlightOrderCancel',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/intl-flight/v1/order/action/cancel',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return IntlFlightOrderCancelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 国际机票订单取消
     *  *
     * @param IntlFlightOrderCancelRequest $request IntlFlightOrderCancelRequest
     *
     * @return IntlFlightOrderCancelResponse IntlFlightOrderCancelResponse
     */
    public function intlFlightOrderCancel($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new IntlFlightOrderCancelHeaders([]);

        return $this->intlFlightOrderCancelWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 国际机票订单详情
     *  *
     * @param IntlFlightOrderDetailRequest $request IntlFlightOrderDetailRequest
     * @param IntlFlightOrderDetailHeaders $headers IntlFlightOrderDetailHeaders
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return IntlFlightOrderDetailResponse IntlFlightOrderDetailResponse
     */
    public function intlFlightOrderDetailWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->isvName)) {
            $query['isv_name'] = $request->isvName;
        }
        if (!Utils::isUnset($request->orderId)) {
            $query['order_id'] = $request->orderId;
        }
        if (!Utils::isUnset($request->outOrderId)) {
            $query['out_order_id'] = $request->outOrderId;
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
            'action'      => 'IntlFlightOrderDetail',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/intl-flight/v1/order/action/detail',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return IntlFlightOrderDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 国际机票订单详情
     *  *
     * @param IntlFlightOrderDetailRequest $request IntlFlightOrderDetailRequest
     *
     * @return IntlFlightOrderDetailResponse IntlFlightOrderDetailResponse
     */
    public function intlFlightOrderDetail($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new IntlFlightOrderDetailHeaders([]);

        return $this->intlFlightOrderDetailWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 国际机票订单支付
     *  *
     * @param IntlFlightOrderPayRequest $tmpReq  IntlFlightOrderPayRequest
     * @param IntlFlightOrderPayHeaders $headers IntlFlightOrderPayHeaders
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return IntlFlightOrderPayResponse IntlFlightOrderPayResponse
     */
    public function intlFlightOrderPayWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new IntlFlightOrderPayShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->extParams)) {
            $request->extParamsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->extParams, 'ext_params', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->extParamsShrink)) {
            $query['ext_params'] = $request->extParamsShrink;
        }
        if (!Utils::isUnset($request->isvName)) {
            $query['isv_name'] = $request->isvName;
        }
        if (!Utils::isUnset($request->orderId)) {
            $query['order_id'] = $request->orderId;
        }
        if (!Utils::isUnset($request->outOrderId)) {
            $query['out_order_id'] = $request->outOrderId;
        }
        if (!Utils::isUnset($request->totalPrice)) {
            $query['total_price'] = $request->totalPrice;
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
            'action'      => 'IntlFlightOrderPay',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/intl-flight/v1/order/action/pay',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return IntlFlightOrderPayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 国际机票订单支付
     *  *
     * @param IntlFlightOrderPayRequest $request IntlFlightOrderPayRequest
     *
     * @return IntlFlightOrderPayResponse IntlFlightOrderPayResponse
     */
    public function intlFlightOrderPay($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new IntlFlightOrderPayHeaders([]);

        return $this->intlFlightOrderPayWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 国际机票订单支付前校验
     *  *
     * @param IntlFlightOrderPayCheckRequest $request IntlFlightOrderPayCheckRequest
     * @param IntlFlightOrderPayCheckHeaders $headers IntlFlightOrderPayCheckHeaders
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return IntlFlightOrderPayCheckResponse IntlFlightOrderPayCheckResponse
     */
    public function intlFlightOrderPayCheckWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->isvName)) {
            $query['isv_name'] = $request->isvName;
        }
        if (!Utils::isUnset($request->orderId)) {
            $query['order_id'] = $request->orderId;
        }
        if (!Utils::isUnset($request->outOrderId)) {
            $query['out_order_id'] = $request->outOrderId;
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
            'action'      => 'IntlFlightOrderPayCheck',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/intl-flight/v1/order/action/pay-check',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return IntlFlightOrderPayCheckResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 国际机票订单支付前校验
     *  *
     * @param IntlFlightOrderPayCheckRequest $request IntlFlightOrderPayCheckRequest
     *
     * @return IntlFlightOrderPayCheckResponse IntlFlightOrderPayCheckResponse
     */
    public function intlFlightOrderPayCheck($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new IntlFlightOrderPayCheckHeaders([]);

        return $this->intlFlightOrderPayCheckWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 国际机票报价商品详情
     *  *
     * @param string                         $otaItemId
     * @param IntlFlightOtaItemDetailRequest $request   IntlFlightOtaItemDetailRequest
     * @param IntlFlightOtaItemDetailHeaders $headers   IntlFlightOtaItemDetailHeaders
     * @param RuntimeOptions                 $runtime   runtime options for this request RuntimeOptions
     *
     * @return IntlFlightOtaItemDetailResponse IntlFlightOtaItemDetailResponse
     */
    public function intlFlightOtaItemDetailWithOptions($otaItemId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->btripUserId)) {
            $query['btrip_user_id'] = $request->btripUserId;
        }
        if (!Utils::isUnset($request->buyerName)) {
            $query['buyer_name'] = $request->buyerName;
        }
        if (!Utils::isUnset($request->isvName)) {
            $query['isv_name'] = $request->isvName;
        }
        if (!Utils::isUnset($request->language)) {
            $query['language'] = $request->language;
        }
        if (!Utils::isUnset($request->supplierCode)) {
            $query['supplier_code'] = $request->supplierCode;
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
            'action'      => 'IntlFlightOtaItemDetail',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/intl-flight/v1/items/' . OpenApiUtilClient::getEncodeParam($otaItemId) . '/action/ota-get',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return IntlFlightOtaItemDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 国际机票报价商品详情
     *  *
     * @param string                         $otaItemId
     * @param IntlFlightOtaItemDetailRequest $request   IntlFlightOtaItemDetailRequest
     *
     * @return IntlFlightOtaItemDetailResponse IntlFlightOtaItemDetailResponse
     */
    public function intlFlightOtaItemDetail($otaItemId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new IntlFlightOtaItemDetailHeaders([]);

        return $this->intlFlightOtaItemDetailWithOptions($otaItemId, $request, $headers, $runtime);
    }

    /**
     * @summary 国际机票航班报价查询
     *  *
     * @param IntlFlightOtaSearchRequest $tmpReq  IntlFlightOtaSearchRequest
     * @param IntlFlightOtaSearchHeaders $headers IntlFlightOtaSearchHeaders
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return IntlFlightOtaSearchResponse IntlFlightOtaSearchResponse
     */
    public function intlFlightOtaSearchWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new IntlFlightOtaSearchShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->searchJourneys)) {
            $request->searchJourneysShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->searchJourneys, 'search_journeys', 'json');
        }
        if (!Utils::isUnset($tmpReq->searchPassengerList)) {
            $request->searchPassengerListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->searchPassengerList, 'search_passenger_list', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->btripUserId)) {
            $query['btrip_user_id'] = $request->btripUserId;
        }
        if (!Utils::isUnset($request->buyerName)) {
            $query['buyer_name'] = $request->buyerName;
        }
        if (!Utils::isUnset($request->cabinType)) {
            $query['cabin_type'] = $request->cabinType;
        }
        if (!Utils::isUnset($request->directOnly)) {
            $query['direct_only'] = $request->directOnly;
        }
        if (!Utils::isUnset($request->isvName)) {
            $query['isv_name'] = $request->isvName;
        }
        if (!Utils::isUnset($request->language)) {
            $query['language'] = $request->language;
        }
        if (!Utils::isUnset($request->needShareFlight)) {
            $query['need_share_flight'] = $request->needShareFlight;
        }
        if (!Utils::isUnset($request->searchJourneysShrink)) {
            $query['search_journeys'] = $request->searchJourneysShrink;
        }
        if (!Utils::isUnset($request->searchPassengerListShrink)) {
            $query['search_passenger_list'] = $request->searchPassengerListShrink;
        }
        if (!Utils::isUnset($request->supplierCode)) {
            $query['supplier_code'] = $request->supplierCode;
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
            'action'      => 'IntlFlightOtaSearch',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/intl-flight/v1/flights/action/ota-search',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return IntlFlightOtaSearchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 国际机票航班报价查询
     *  *
     * @param IntlFlightOtaSearchRequest $request IntlFlightOtaSearchRequest
     *
     * @return IntlFlightOtaSearchResponse IntlFlightOtaSearchResponse
     */
    public function intlFlightOtaSearch($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new IntlFlightOtaSearchHeaders([]);

        return $this->intlFlightOtaSearchWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 国际机票航班可用证件查询
     *  *
     * @param string                                $otaItemId
     * @param IntlFlightSegmentAvailableCertRequest $request   IntlFlightSegmentAvailableCertRequest
     * @param IntlFlightSegmentAvailableCertHeaders $headers   IntlFlightSegmentAvailableCertHeaders
     * @param RuntimeOptions                        $runtime   runtime options for this request RuntimeOptions
     *
     * @return IntlFlightSegmentAvailableCertResponse IntlFlightSegmentAvailableCertResponse
     */
    public function intlFlightSegmentAvailableCertWithOptions($otaItemId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->isvName)) {
            $query['isv_name'] = $request->isvName;
        }
        if (!Utils::isUnset($request->language)) {
            $query['language'] = $request->language;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['user_id'] = $request->userId;
        }
        if (!Utils::isUnset($request->userName)) {
            $query['user_name'] = $request->userName;
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
            'action'      => 'IntlFlightSegmentAvailableCert',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/intl-flight/v1/items/' . OpenApiUtilClient::getEncodeParam($otaItemId) . '/action/segment-available-cert',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return IntlFlightSegmentAvailableCertResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 国际机票航班可用证件查询
     *  *
     * @param string                                $otaItemId
     * @param IntlFlightSegmentAvailableCertRequest $request   IntlFlightSegmentAvailableCertRequest
     *
     * @return IntlFlightSegmentAvailableCertResponse IntlFlightSegmentAvailableCertResponse
     */
    public function intlFlightSegmentAvailableCert($otaItemId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new IntlFlightSegmentAvailableCertHeaders([]);

        return $this->intlFlightSegmentAvailableCertWithOptions($otaItemId, $request, $headers, $runtime);
    }

    /**
     * @summary 新增发票配置
     *  *
     * @param InvoiceAddRequest $request InvoiceAddRequest
     * @param InvoiceAddHeaders $headers InvoiceAddHeaders
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return InvoiceAddResponse InvoiceAddResponse
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
        if (!Utils::isUnset($request->unitType)) {
            $body['unit_type'] = $request->unitType;
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
     * @summary 新增发票配置
     *  *
     * @param InvoiceAddRequest $request InvoiceAddRequest
     *
     * @return InvoiceAddResponse InvoiceAddResponse
     */
    public function invoiceAdd($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new InvoiceAddHeaders([]);

        return $this->invoiceAddWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 删除发票抬头
     *  *
     * @param InvoiceDeleteRequest $request InvoiceDeleteRequest
     * @param InvoiceDeleteHeaders $headers InvoiceDeleteHeaders
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return InvoiceDeleteResponse InvoiceDeleteResponse
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
     * @summary 删除发票抬头
     *  *
     * @param InvoiceDeleteRequest $request InvoiceDeleteRequest
     *
     * @return InvoiceDeleteResponse InvoiceDeleteResponse
     */
    public function invoiceDelete($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new InvoiceDeleteHeaders([]);

        return $this->invoiceDeleteWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 修改发票配置
     *  *
     * @param InvoiceModifyRequest $request InvoiceModifyRequest
     * @param InvoiceModifyHeaders $headers InvoiceModifyHeaders
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return InvoiceModifyResponse InvoiceModifyResponse
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
        if (!Utils::isUnset($request->unitType)) {
            $body['unit_type'] = $request->unitType;
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
     * @summary 修改发票配置
     *  *
     * @param InvoiceModifyRequest $request InvoiceModifyRequest
     *
     * @return InvoiceModifyResponse InvoiceModifyResponse
     */
    public function invoiceModify($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new InvoiceModifyHeaders([]);

        return $this->invoiceModifyWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 新增发票抬头可用员工
     *  *
     * @param InvoiceRuleAddRequest $tmpReq  InvoiceRuleAddRequest
     * @param InvoiceRuleAddHeaders $headers InvoiceRuleAddHeaders
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return InvoiceRuleAddResponse InvoiceRuleAddResponse
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
     * @summary 新增发票抬头可用员工
     *  *
     * @param InvoiceRuleAddRequest $request InvoiceRuleAddRequest
     *
     * @return InvoiceRuleAddResponse InvoiceRuleAddResponse
     */
    public function invoiceRuleAdd($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new InvoiceRuleAddHeaders([]);

        return $this->invoiceRuleAddWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 删除发票抬头可用员工
     *  *
     * @param InvoiceRuleDeleteRequest $tmpReq  InvoiceRuleDeleteRequest
     * @param InvoiceRuleDeleteHeaders $headers InvoiceRuleDeleteHeaders
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return InvoiceRuleDeleteResponse InvoiceRuleDeleteResponse
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
     * @summary 删除发票抬头可用员工
     *  *
     * @param InvoiceRuleDeleteRequest $request InvoiceRuleDeleteRequest
     *
     * @return InvoiceRuleDeleteResponse InvoiceRuleDeleteResponse
     */
    public function invoiceRuleDelete($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new InvoiceRuleDeleteHeaders([]);

        return $this->invoiceRuleDeleteWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 保存发票规则
     *  *
     * @param InvoiceRuleSaveRequest $tmpReq  InvoiceRuleSaveRequest
     * @param InvoiceRuleSaveHeaders $headers InvoiceRuleSaveHeaders
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return InvoiceRuleSaveResponse InvoiceRuleSaveResponse
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
        if (!Utils::isUnset($request->scope)) {
            $body['scope'] = $request->scope;
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
     * @summary 保存发票规则
     *  *
     * @param InvoiceRuleSaveRequest $request InvoiceRuleSaveRequest
     *
     * @return InvoiceRuleSaveResponse InvoiceRuleSaveResponse
     */
    public function invoiceRuleSave($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new InvoiceRuleSaveHeaders([]);

        return $this->invoiceRuleSaveWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 搜索用户可用发票抬头
     *  *
     * @param InvoiceSearchRequest $request InvoiceSearchRequest
     * @param InvoiceSearchHeaders $headers InvoiceSearchHeaders
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return InvoiceSearchResponse InvoiceSearchResponse
     */
    public function invoiceSearchWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->thirdPartId)) {
            $query['third_part_id'] = $request->thirdPartId;
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
     * @summary 搜索用户可用发票抬头
     *  *
     * @param InvoiceSearchRequest $request InvoiceSearchRequest
     *
     * @return InvoiceSearchResponse InvoiceSearchResponse
     */
    public function invoiceSearch($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new InvoiceSearchHeaders([]);

        return $this->invoiceSearchWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 员工特殊角色修改
     *  *
     * @param IsvRuleSaveRequest $tmpReq  IsvRuleSaveRequest
     * @param IsvRuleSaveHeaders $headers IsvRuleSaveHeaders
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return IsvRuleSaveResponse IsvRuleSaveResponse
     */
    public function isvRuleSaveWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new IsvRuleSaveShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->bookuserList)) {
            $request->bookuserListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->bookuserList, 'bookuser_list', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->applyNeed)) {
            $body['apply_need'] = $request->applyNeed;
        }
        if (!Utils::isUnset($request->bookType)) {
            $body['book_type'] = $request->bookType;
        }
        if (!Utils::isUnset($request->bookuserListShrink)) {
            $body['bookuser_list'] = $request->bookuserListShrink;
        }
        if (!Utils::isUnset($request->ruleNeed)) {
            $body['rule_need'] = $request->ruleNeed;
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
     * @summary 员工特殊角色修改
     *  *
     * @param IsvRuleSaveRequest $request IsvRuleSaveRequest
     *
     * @return IsvRuleSaveResponse IsvRuleSaveResponse
     */
    public function isvRuleSave($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new IsvRuleSaveHeaders([]);

        return $this->isvRuleSaveWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 用户同步
     *  *
     * @param IsvUserSaveRequest $tmpReq  IsvUserSaveRequest
     * @param IsvUserSaveHeaders $headers IsvUserSaveHeaders
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return IsvUserSaveResponse IsvUserSaveResponse
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
     * @summary 用户同步
     *  *
     * @param IsvUserSaveRequest $request IsvUserSaveRequest
     *
     * @return IsvUserSaveResponse IsvUserSaveResponse
     */
    public function isvUserSave($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new IsvUserSaveHeaders([]);

        return $this->isvUserSaveWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 查询因公用餐记账数据
     *  *
     * @param MealBillSettlementQueryRequest $request MealBillSettlementQueryRequest
     * @param MealBillSettlementQueryHeaders $headers MealBillSettlementQueryHeaders
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return MealBillSettlementQueryResponse MealBillSettlementQueryResponse
     */
    public function mealBillSettlementQueryWithOptions($request, $headers, $runtime)
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
            'action'      => 'MealBillSettlementQuery',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/meal/v1/bill-settlement',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return MealBillSettlementQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询因公用餐记账数据
     *  *
     * @param MealBillSettlementQueryRequest $request MealBillSettlementQueryRequest
     *
     * @return MealBillSettlementQueryResponse MealBillSettlementQueryResponse
     */
    public function mealBillSettlementQuery($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new MealBillSettlementQueryHeaders([]);

        return $this->mealBillSettlementQueryWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取用餐订单详情
     *  *
     * @param string                      $orderId
     * @param MealOrderDetailQueryRequest $request MealOrderDetailQueryRequest
     * @param MealOrderDetailQueryHeaders $headers MealOrderDetailQueryHeaders
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return MealOrderDetailQueryResponse MealOrderDetailQueryResponse
     */
    public function mealOrderDetailQueryWithOptions($orderId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
            'action'      => 'MealOrderDetailQuery',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/meal/v1/orders/' . OpenApiUtilClient::getEncodeParam($orderId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return MealOrderDetailQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取用餐订单详情
     *  *
     * @param string                      $orderId
     * @param MealOrderDetailQueryRequest $request MealOrderDetailQueryRequest
     *
     * @return MealOrderDetailQueryResponse MealOrderDetailQueryResponse
     */
    public function mealOrderDetailQuery($orderId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new MealOrderDetailQueryHeaders([]);

        return $this->mealOrderDetailQueryWithOptions($orderId, $request, $headers, $runtime);
    }

    /**
     * @summary 获取用餐订单列表
     *  *
     * @param MealOrderListQueryRequest $request MealOrderListQueryRequest
     * @param MealOrderListQueryHeaders $headers MealOrderListQueryHeaders
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return MealOrderListQueryResponse MealOrderListQueryResponse
     */
    public function mealOrderListQueryWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
            'action'      => 'MealOrderListQuery',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/meal/v1/orders',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return MealOrderListQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取用餐订单列表
     *  *
     * @param MealOrderListQueryRequest $request MealOrderListQueryRequest
     *
     * @return MealOrderListQueryResponse MealOrderListQueryResponse
     */
    public function mealOrderListQuery($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new MealOrderListQueryHeaders([]);

        return $this->mealOrderListQueryWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 月账单确认
     *  *
     * @param MonthBillConfirmRequest $request MonthBillConfirmRequest
     * @param MonthBillConfirmHeaders $headers MonthBillConfirmHeaders
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return MonthBillConfirmResponse MonthBillConfirmResponse
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
     * @summary 月账单确认
     *  *
     * @param MonthBillConfirmRequest $request MonthBillConfirmRequest
     *
     * @return MonthBillConfirmResponse MonthBillConfirmResponse
     */
    public function monthBillConfirm($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new MonthBillConfirmHeaders([]);

        return $this->monthBillConfirmWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 查询企业月账单
     *  *
     * @param MonthBillGetRequest $request MonthBillGetRequest
     * @param MonthBillGetHeaders $headers MonthBillGetHeaders
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return MonthBillGetResponse MonthBillGetResponse
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
     * @summary 查询企业月账单
     *  *
     * @param MonthBillGetRequest $request MonthBillGetRequest
     *
     * @return MonthBillGetResponse MonthBillGetResponse
     */
    public function monthBillGet($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new MonthBillGetHeaders([]);

        return $this->monthBillGetWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 添加项目
     *  *
     * @param ProjectAddRequest $request ProjectAddRequest
     * @param ProjectAddHeaders $headers ProjectAddHeaders
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return ProjectAddResponse ProjectAddResponse
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
     * @summary 添加项目
     *  *
     * @param ProjectAddRequest $request ProjectAddRequest
     *
     * @return ProjectAddResponse ProjectAddResponse
     */
    public function projectAdd($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ProjectAddHeaders([]);

        return $this->projectAddWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 删除项目
     *  *
     * @param ProjectDeleteRequest $request ProjectDeleteRequest
     * @param ProjectDeleteHeaders $headers ProjectDeleteHeaders
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ProjectDeleteResponse ProjectDeleteResponse
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
     * @summary 删除项目
     *  *
     * @param ProjectDeleteRequest $request ProjectDeleteRequest
     *
     * @return ProjectDeleteResponse ProjectDeleteResponse
     */
    public function projectDelete($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ProjectDeleteHeaders([]);

        return $this->projectDeleteWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 变更项目
     *  *
     * @param ProjectModifyRequest $request ProjectModifyRequest
     * @param ProjectModifyHeaders $headers ProjectModifyHeaders
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ProjectModifyResponse ProjectModifyResponse
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
     * @summary 变更项目
     *  *
     * @param ProjectModifyRequest $request ProjectModifyRequest
     *
     * @return ProjectModifyResponse ProjectModifyResponse
     */
    public function projectModify($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ProjectModifyHeaders([]);

        return $this->projectModifyWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 查询子企业列表
     *  *
     * @param QueryGroupCorpListRequest $request QueryGroupCorpListRequest
     * @param QueryGroupCorpListHeaders $headers QueryGroupCorpListHeaders
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryGroupCorpListResponse QueryGroupCorpListResponse
     */
    public function queryGroupCorpListWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
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
            'action'      => 'QueryGroupCorpList',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/sub_corps/v1/corps/action/corpList',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryGroupCorpListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询子企业列表
     *  *
     * @param QueryGroupCorpListRequest $request QueryGroupCorpListRequest
     *
     * @return QueryGroupCorpListResponse QueryGroupCorpListResponse
     */
    public function queryGroupCorpList($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryGroupCorpListHeaders([]);

        return $this->queryGroupCorpListWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 报销单查询
     *  *
     * @param QueryReimbursementOrderRequest $request QueryReimbursementOrderRequest
     * @param QueryReimbursementOrderHeaders $headers QueryReimbursementOrderHeaders
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryReimbursementOrderResponse QueryReimbursementOrderResponse
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
     * @summary 报销单查询
     *  *
     * @param QueryReimbursementOrderRequest $request QueryReimbursementOrderRequest
     *
     * @return QueryReimbursementOrderResponse QueryReimbursementOrderResponse
     */
    public function queryReimbursementOrder($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryReimbursementOrderHeaders([]);

        return $this->queryReimbursementOrderWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 单个人员同步
     *  *
     * @param SyncSingleUserRequest $tmpReq  SyncSingleUserRequest
     * @param SyncSingleUserHeaders $headers SyncSingleUserHeaders
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return SyncSingleUserResponse SyncSingleUserResponse
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
     * @summary 单个人员同步
     *  *
     * @param SyncSingleUserRequest $request SyncSingleUserRequest
     *
     * @return SyncSingleUserResponse SyncSingleUserResponse
     */
    public function syncSingleUser($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new SyncSingleUserHeaders([]);

        return $this->syncSingleUserWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 同步三方用户映射关系
     *  *
     * @param SyncThirdUserMappingRequest $request SyncThirdUserMappingRequest
     * @param SyncThirdUserMappingHeaders $headers SyncThirdUserMappingHeaders
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return SyncThirdUserMappingResponse SyncThirdUserMappingResponse
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
     * @summary 同步三方用户映射关系
     *  *
     * @param SyncThirdUserMappingRequest $request SyncThirdUserMappingRequest
     *
     * @return SyncThirdUserMappingResponse SyncThirdUserMappingResponse
     */
    public function syncThirdUserMapping($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new SyncThirdUserMappingHeaders([]);

        return $this->syncThirdUserMappingWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 查询淘宝账号信息
     *  *
     * @param string                    $userId
     * @param TBAccountInfoQueryHeaders $headers TBAccountInfoQueryHeaders
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return TBAccountInfoQueryResponse TBAccountInfoQueryResponse
     */
    public function tBAccountInfoQueryWithOptions($userId, $headers, $runtime)
    {
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsBtripCorpToken)) {
            $realHeaders['x-acs-btrip-corp-token'] = Utils::toJSONString($headers->xAcsBtripCorpToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
        ]);
        $params = new Params([
            'action'      => 'TBAccountInfoQuery',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/account/v1/tb-accounts/' . OpenApiUtilClient::getEncodeParam($userId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return TBAccountInfoQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询淘宝账号信息
     *  *
     * @param string $userId
     *
     * @return TBAccountInfoQueryResponse TBAccountInfoQueryResponse
     */
    public function tBAccountInfoQuery($userId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new TBAccountInfoQueryHeaders([]);

        return $this->tBAccountInfoQueryWithOptions($userId, $headers, $runtime);
    }

    /**
     * @summary 解绑淘宝账号
     *  *
     * @param string                 $userId
     * @param TBAccountUnbindHeaders $headers TBAccountUnbindHeaders
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return TBAccountUnbindResponse TBAccountUnbindResponse
     */
    public function tBAccountUnbindWithOptions($userId, $headers, $runtime)
    {
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsBtripCorpToken)) {
            $realHeaders['x-acs-btrip-corp-token'] = Utils::toJSONString($headers->xAcsBtripCorpToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
        ]);
        $params = new Params([
            'action'      => 'TBAccountUnbind',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/account/v1/tb-accounts/' . OpenApiUtilClient::getEncodeParam($userId) . '/action/unbind',
            'method'      => 'PATCH',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return TBAccountUnbindResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 解绑淘宝账号
     *  *
     * @param string $userId
     *
     * @return TBAccountUnbindResponse TBAccountUnbindResponse
     */
    public function tBAccountUnbind($userId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new TBAccountUnbindHeaders([]);

        return $this->tBAccountUnbindWithOptions($userId, $headers, $runtime);
    }

    /**
     * @summary 机票改签申请
     *  *
     * @param TicketChangingApplyRequest $tmpReq  TicketChangingApplyRequest
     * @param TicketChangingApplyHeaders $headers TicketChangingApplyHeaders
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return TicketChangingApplyResponse TicketChangingApplyResponse
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
     * @summary 机票改签申请
     *  *
     * @param TicketChangingApplyRequest $request TicketChangingApplyRequest
     *
     * @return TicketChangingApplyResponse TicketChangingApplyResponse
     */
    public function ticketChangingApply($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new TicketChangingApplyHeaders([]);

        return $this->ticketChangingApplyWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 机票改签取消
     *  *
     * @param TicketChangingCancelRequest $request TicketChangingCancelRequest
     * @param TicketChangingCancelHeaders $headers TicketChangingCancelHeaders
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return TicketChangingCancelResponse TicketChangingCancelResponse
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
     * @summary 机票改签取消
     *  *
     * @param TicketChangingCancelRequest $request TicketChangingCancelRequest
     *
     * @return TicketChangingCancelResponse TicketChangingCancelResponse
     */
    public function ticketChangingCancel($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new TicketChangingCancelHeaders([]);

        return $this->ticketChangingCancelWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 机票改签详情
     *  *
     * @param TicketChangingDetailRequest $request TicketChangingDetailRequest
     * @param TicketChangingDetailHeaders $headers TicketChangingDetailHeaders
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return TicketChangingDetailResponse TicketChangingDetailResponse
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
     * @summary 机票改签详情
     *  *
     * @param TicketChangingDetailRequest $request TicketChangingDetailRequest
     *
     * @return TicketChangingDetailResponse TicketChangingDetailResponse
     */
    public function ticketChangingDetail($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new TicketChangingDetailHeaders([]);

        return $this->ticketChangingDetailWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 机票改签询价
     *  *
     * @param TicketChangingEnquiryRequest $request TicketChangingEnquiryRequest
     * @param TicketChangingEnquiryHeaders $headers TicketChangingEnquiryHeaders
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return TicketChangingEnquiryResponse TicketChangingEnquiryResponse
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
     * @summary 机票改签询价
     *  *
     * @param TicketChangingEnquiryRequest $request TicketChangingEnquiryRequest
     *
     * @return TicketChangingEnquiryResponse TicketChangingEnquiryResponse
     */
    public function ticketChangingEnquiry($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new TicketChangingEnquiryHeaders([]);

        return $this->ticketChangingEnquiryWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 机票改签可改签航班列表
     *  *
     * @param TicketChangingFlightListRequest $tmpReq  TicketChangingFlightListRequest
     * @param TicketChangingFlightListHeaders $headers TicketChangingFlightListHeaders
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return TicketChangingFlightListResponse TicketChangingFlightListResponse
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
     * @summary 机票改签可改签航班列表
     *  *
     * @param TicketChangingFlightListRequest $request TicketChangingFlightListRequest
     *
     * @return TicketChangingFlightListResponse TicketChangingFlightListResponse
     */
    public function ticketChangingFlightList($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new TicketChangingFlightListHeaders([]);

        return $this->ticketChangingFlightListWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 机票改签航班支付
     *  *
     * @param TicketChangingPayRequest $tmpReq  TicketChangingPayRequest
     * @param TicketChangingPayHeaders $headers TicketChangingPayHeaders
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return TicketChangingPayResponse TicketChangingPayResponse
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
     * @summary 机票改签航班支付
     *  *
     * @param TicketChangingPayRequest $request TicketChangingPayRequest
     *
     * @return TicketChangingPayResponse TicketChangingPayResponse
     */
    public function ticketChangingPay($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new TicketChangingPayHeaders([]);

        return $this->ticketChangingPayWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 火车票改签申请
     *  *
     * @param TrainApplyChangeRequest $tmpReq  TrainApplyChangeRequest
     * @param TrainApplyChangeHeaders $headers TrainApplyChangeHeaders
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return TrainApplyChangeResponse TrainApplyChangeResponse
     */
    public function trainApplyChangeWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new TrainApplyChangeShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->changeTrainInfoS)) {
            $request->changeTrainInfoSShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->changeTrainInfoS, 'change_train_info_s', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->changeTrainInfoSShrink)) {
            $query['change_train_info_s'] = $request->changeTrainInfoSShrink;
        }
        $body = [];
        if (!Utils::isUnset($request->acceptNoSeat)) {
            $body['accept_no_seat'] = $request->acceptNoSeat;
        }
        if (!Utils::isUnset($request->forceMatch)) {
            $body['force_match'] = $request->forceMatch;
        }
        if (!Utils::isUnset($request->isPayNow)) {
            $body['is_pay_now'] = $request->isPayNow;
        }
        if (!Utils::isUnset($request->orderId)) {
            $body['order_id'] = $request->orderId;
        }
        if (!Utils::isUnset($request->outChangeApplyId)) {
            $body['out_change_apply_id'] = $request->outChangeApplyId;
        }
        if (!Utils::isUnset($request->outOrderId)) {
            $body['out_order_id'] = $request->outOrderId;
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
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'TrainApplyChange',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/train/v1/change/apply',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TrainApplyChangeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 火车票改签申请
     *  *
     * @param TrainApplyChangeRequest $request TrainApplyChangeRequest
     *
     * @return TrainApplyChangeResponse TrainApplyChangeResponse
     */
    public function trainApplyChange($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new TrainApplyChangeHeaders([]);

        return $this->trainApplyChangeWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 火车票退票申请
     *  *
     * @param TrainApplyRefundRequest $tmpReq  TrainApplyRefundRequest
     * @param TrainApplyRefundHeaders $headers TrainApplyRefundHeaders
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return TrainApplyRefundResponse TrainApplyRefundResponse
     */
    public function trainApplyRefundWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new TrainApplyRefundShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->refundTrainInfos)) {
            $request->refundTrainInfosShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->refundTrainInfos, 'refund_train_infos', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->orderId)) {
            $body['order_id'] = $request->orderId;
        }
        if (!Utils::isUnset($request->outOrderId)) {
            $body['out_order_id'] = $request->outOrderId;
        }
        if (!Utils::isUnset($request->outRefundId)) {
            $body['out_refund_id'] = $request->outRefundId;
        }
        if (!Utils::isUnset($request->refundTrainInfosShrink)) {
            $body['refund_train_infos'] = $request->refundTrainInfosShrink;
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
            'action'      => 'TrainApplyRefund',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/train/v1/refund/apply',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TrainApplyRefundResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 火车票退票申请
     *  *
     * @param TrainApplyRefundRequest $request TrainApplyRefundRequest
     *
     * @return TrainApplyRefundResponse TrainApplyRefundResponse
     */
    public function trainApplyRefund($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new TrainApplyRefundHeaders([]);

        return $this->trainApplyRefundWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 查询火车票记账数据
     *  *
     * @param TrainBillSettlementQueryRequest $request TrainBillSettlementQueryRequest
     * @param TrainBillSettlementQueryHeaders $headers TrainBillSettlementQueryHeaders
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return TrainBillSettlementQueryResponse TrainBillSettlementQueryResponse
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
     * @summary 查询火车票记账数据
     *  *
     * @param TrainBillSettlementQueryRequest $request TrainBillSettlementQueryRequest
     *
     * @return TrainBillSettlementQueryResponse TrainBillSettlementQueryResponse
     */
    public function trainBillSettlementQuery($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new TrainBillSettlementQueryHeaders([]);

        return $this->trainBillSettlementQueryWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 查询火车超标审批详情
     *  *
     * @param TrainExceedApplyQueryRequest $request TrainExceedApplyQueryRequest
     * @param TrainExceedApplyQueryHeaders $headers TrainExceedApplyQueryHeaders
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return TrainExceedApplyQueryResponse TrainExceedApplyQueryResponse
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
     * @summary 查询火车超标审批详情
     *  *
     * @param TrainExceedApplyQueryRequest $request TrainExceedApplyQueryRequest
     *
     * @return TrainExceedApplyQueryResponse TrainExceedApplyQueryResponse
     */
    public function trainExceedApplyQuery($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new TrainExceedApplyQueryHeaders([]);

        return $this->trainExceedApplyQueryWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 火车票改签费用预估
     *  *
     * @param TrainFeeCalculateChangeRequest $tmpReq  TrainFeeCalculateChangeRequest
     * @param TrainFeeCalculateChangeHeaders $headers TrainFeeCalculateChangeHeaders
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return TrainFeeCalculateChangeResponse TrainFeeCalculateChangeResponse
     */
    public function trainFeeCalculateChangeWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new TrainFeeCalculateChangeShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->changeTrainDetails)) {
            $request->changeTrainDetailsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->changeTrainDetails, 'change_train_details', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->changeTrainDetailsShrink)) {
            $body['change_train_details'] = $request->changeTrainDetailsShrink;
        }
        if (!Utils::isUnset($request->distributeOrderId)) {
            $body['distribute_order_id'] = $request->distributeOrderId;
        }
        if (!Utils::isUnset($request->orderId)) {
            $body['order_id'] = $request->orderId;
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
            'action'      => 'TrainFeeCalculateChange',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/train/v1/change/fee',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TrainFeeCalculateChangeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 火车票改签费用预估
     *  *
     * @param TrainFeeCalculateChangeRequest $request TrainFeeCalculateChangeRequest
     *
     * @return TrainFeeCalculateChangeResponse TrainFeeCalculateChangeResponse
     */
    public function trainFeeCalculateChange($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new TrainFeeCalculateChangeHeaders([]);

        return $this->trainFeeCalculateChangeWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 火车票退票费用预估
     *  *
     * @param TrainFeeCalculateRefundRequest $tmpReq  TrainFeeCalculateRefundRequest
     * @param TrainFeeCalculateRefundHeaders $headers TrainFeeCalculateRefundHeaders
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return TrainFeeCalculateRefundResponse TrainFeeCalculateRefundResponse
     */
    public function trainFeeCalculateRefundWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new TrainFeeCalculateRefundShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->refundTrainInfos)) {
            $request->refundTrainInfosShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->refundTrainInfos, 'refund_train_infos', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->distributeOrderId)) {
            $body['distribute_order_id'] = $request->distributeOrderId;
        }
        if (!Utils::isUnset($request->orderId)) {
            $body['order_id'] = $request->orderId;
        }
        if (!Utils::isUnset($request->refundTrainInfosShrink)) {
            $body['refund_train_infos'] = $request->refundTrainInfosShrink;
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
            'action'      => 'TrainFeeCalculateRefund',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/train/v1/refund/fee',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TrainFeeCalculateRefundResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 火车票退票费用预估
     *  *
     * @param TrainFeeCalculateRefundRequest $request TrainFeeCalculateRefundRequest
     *
     * @return TrainFeeCalculateRefundResponse TrainFeeCalculateRefundResponse
     */
    public function trainFeeCalculateRefund($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new TrainFeeCalculateRefundHeaders([]);

        return $this->trainFeeCalculateRefundWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 火车票车次详情查询
     *  *
     * @param TrainNoInfoSearchRequest $request TrainNoInfoSearchRequest
     * @param TrainNoInfoSearchHeaders $headers TrainNoInfoSearchHeaders
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return TrainNoInfoSearchResponse TrainNoInfoSearchResponse
     */
    public function trainNoInfoSearchWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->arrLocation)) {
            $body['arr_location'] = $request->arrLocation;
        }
        if (!Utils::isUnset($request->depDate)) {
            $body['dep_date'] = $request->depDate;
        }
        if (!Utils::isUnset($request->depLocation)) {
            $body['dep_location'] = $request->depLocation;
        }
        if (!Utils::isUnset($request->lineKey)) {
            $body['line_key'] = $request->lineKey;
        }
        if (!Utils::isUnset($request->middleDate)) {
            $body['middle_date'] = $request->middleDate;
        }
        if (!Utils::isUnset($request->middleStation)) {
            $body['middle_station'] = $request->middleStation;
        }
        if (!Utils::isUnset($request->orderId)) {
            $body['order_id'] = $request->orderId;
        }
        if (!Utils::isUnset($request->trainNo)) {
            $body['train_no'] = $request->trainNo;
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
            'action'      => 'TrainNoInfoSearch',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/train/v1/search/info',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TrainNoInfoSearchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 火车票车次详情查询
     *  *
     * @param TrainNoInfoSearchRequest $request TrainNoInfoSearchRequest
     *
     * @return TrainNoInfoSearchResponse TrainNoInfoSearchResponse
     */
    public function trainNoInfoSearch($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new TrainNoInfoSearchHeaders([]);

        return $this->trainNoInfoSearchWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 火车票车次列表查询
     *  *
     * @param TrainNoListSearchRequest $tmpReq  TrainNoListSearchRequest
     * @param TrainNoListSearchHeaders $headers TrainNoListSearchHeaders
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return TrainNoListSearchResponse TrainNoListSearchResponse
     */
    public function trainNoListSearchWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new TrainNoListSearchShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->option)) {
            $request->optionShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->option, 'option', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->arrLocation)) {
            $body['arr_location'] = $request->arrLocation;
        }
        if (!Utils::isUnset($request->depDate)) {
            $body['dep_date'] = $request->depDate;
        }
        if (!Utils::isUnset($request->depLocation)) {
            $body['dep_location'] = $request->depLocation;
        }
        if (!Utils::isUnset($request->optionShrink)) {
            $body['option'] = $request->optionShrink;
        }
        if (!Utils::isUnset($request->orderId)) {
            $body['order_id'] = $request->orderId;
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
            'action'      => 'TrainNoListSearch',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/train/v1/search/list',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TrainNoListSearchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 火车票车次列表查询
     *  *
     * @param TrainNoListSearchRequest $request TrainNoListSearchRequest
     *
     * @return TrainNoListSearchResponse TrainNoListSearchResponse
     */
    public function trainNoListSearch($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new TrainNoListSearchHeaders([]);

        return $this->trainNoListSearchWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 火车票订单取消
     *  *
     * @param TrainOrderCancelRequest $request TrainOrderCancelRequest
     * @param TrainOrderCancelHeaders $headers TrainOrderCancelHeaders
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return TrainOrderCancelResponse TrainOrderCancelResponse
     */
    public function trainOrderCancelWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->changeOrderId)) {
            $body['change_order_id'] = $request->changeOrderId;
        }
        if (!Utils::isUnset($request->orderId)) {
            $body['order_id'] = $request->orderId;
        }
        if (!Utils::isUnset($request->outChangeOrderId)) {
            $body['out_change_order_id'] = $request->outChangeOrderId;
        }
        if (!Utils::isUnset($request->outOrderId)) {
            $body['out_order_id'] = $request->outOrderId;
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
            'action'      => 'TrainOrderCancel',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/train/v1/order/cancel',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TrainOrderCancelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 火车票订单取消
     *  *
     * @param TrainOrderCancelRequest $request TrainOrderCancelRequest
     *
     * @return TrainOrderCancelResponse TrainOrderCancelResponse
     */
    public function trainOrderCancel($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new TrainOrderCancelHeaders([]);

        return $this->trainOrderCancelWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 火车票改签确认
     *  *
     * @param TrainOrderChangeConfirmRequest $request TrainOrderChangeConfirmRequest
     * @param TrainOrderChangeConfirmHeaders $headers TrainOrderChangeConfirmHeaders
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return TrainOrderChangeConfirmResponse TrainOrderChangeConfirmResponse
     */
    public function trainOrderChangeConfirmWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->changeApplyId)) {
            $body['change_apply_id'] = $request->changeApplyId;
        }
        if (!Utils::isUnset($request->changeSettleAmount)) {
            $body['change_settle_amount'] = $request->changeSettleAmount;
        }
        if (!Utils::isUnset($request->orderId)) {
            $body['order_id'] = $request->orderId;
        }
        if (!Utils::isUnset($request->outChangeApplyId)) {
            $body['out_change_apply_id'] = $request->outChangeApplyId;
        }
        if (!Utils::isUnset($request->outOrderId)) {
            $body['out_order_id'] = $request->outOrderId;
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
            'action'      => 'TrainOrderChangeConfirm',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/train/v1/change/confirm',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TrainOrderChangeConfirmResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 火车票改签确认
     *  *
     * @param TrainOrderChangeConfirmRequest $request TrainOrderChangeConfirmRequest
     *
     * @return TrainOrderChangeConfirmResponse TrainOrderChangeConfirmResponse
     */
    public function trainOrderChangeConfirm($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new TrainOrderChangeConfirmHeaders([]);

        return $this->trainOrderChangeConfirmWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 火车票正向预订
     *  *
     * @param TrainOrderCreateRequest $tmpReq  TrainOrderCreateRequest
     * @param TrainOrderCreateHeaders $headers TrainOrderCreateHeaders
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return TrainOrderCreateResponse TrainOrderCreateResponse
     */
    public function trainOrderCreateWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new TrainOrderCreateShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->bookTrainInfos)) {
            $request->bookTrainInfosShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->bookTrainInfos, 'book_train_infos', 'json');
        }
        if (!Utils::isUnset($tmpReq->businessInfo)) {
            $request->businessInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->businessInfo, 'business_info', 'json');
        }
        if (!Utils::isUnset($tmpReq->contactInfo)) {
            $request->contactInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->contactInfo, 'contact_info', 'json');
        }
        if (!Utils::isUnset($tmpReq->passengerOpenInfoS)) {
            $request->passengerOpenInfoSShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->passengerOpenInfoS, 'passenger_open_info_s', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->acceptNoSeat)) {
            $body['accept_no_seat'] = $request->acceptNoSeat;
        }
        if (!Utils::isUnset($request->bookTrainInfosShrink)) {
            $body['book_train_infos'] = $request->bookTrainInfosShrink;
        }
        if (!Utils::isUnset($request->btripUserId)) {
            $body['btrip_user_id'] = $request->btripUserId;
        }
        if (!Utils::isUnset($request->btripUserName)) {
            $body['btrip_user_name'] = $request->btripUserName;
        }
        if (!Utils::isUnset($request->businessInfoShrink)) {
            $body['business_info'] = $request->businessInfoShrink;
        }
        if (!Utils::isUnset($request->contactInfoShrink)) {
            $body['contact_info'] = $request->contactInfoShrink;
        }
        if (!Utils::isUnset($request->forceMatch)) {
            $body['force_match'] = $request->forceMatch;
        }
        if (!Utils::isUnset($request->isPayNow)) {
            $body['is_pay_now'] = $request->isPayNow;
        }
        if (!Utils::isUnset($request->outOrderId)) {
            $body['out_order_id'] = $request->outOrderId;
        }
        if (!Utils::isUnset($request->passengerOpenInfoSShrink)) {
            $body['passenger_open_info_s'] = $request->passengerOpenInfoSShrink;
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
            'action'      => 'TrainOrderCreate',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/train/v1/order/create',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TrainOrderCreateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 火车票正向预订
     *  *
     * @param TrainOrderCreateRequest $request TrainOrderCreateRequest
     *
     * @return TrainOrderCreateResponse TrainOrderCreateResponse
     */
    public function trainOrderCreate($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new TrainOrderCreateHeaders([]);

        return $this->trainOrderCreateWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 火车票订单详情
     *  *
     * @param TrainOrderDetailQueryRequest $request TrainOrderDetailQueryRequest
     * @param TrainOrderDetailQueryHeaders $headers TrainOrderDetailQueryHeaders
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return TrainOrderDetailQueryResponse TrainOrderDetailQueryResponse
     */
    public function trainOrderDetailQueryWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->orderId)) {
            $body['order_id'] = $request->orderId;
        }
        if (!Utils::isUnset($request->outOrderId)) {
            $body['out_order_id'] = $request->outOrderId;
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
            'action'      => 'TrainOrderDetailQuery',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/train/v1/order/query',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TrainOrderDetailQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 火车票订单详情
     *  *
     * @param TrainOrderDetailQueryRequest $request TrainOrderDetailQueryRequest
     *
     * @return TrainOrderDetailQueryResponse TrainOrderDetailQueryResponse
     */
    public function trainOrderDetailQuery($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new TrainOrderDetailQueryHeaders([]);

        return $this->trainOrderDetailQueryWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 查询火车票订单列表
     *  *
     * @param TrainOrderListQueryRequest $request TrainOrderListQueryRequest
     * @param TrainOrderListQueryHeaders $headers TrainOrderListQueryHeaders
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return TrainOrderListQueryResponse TrainOrderListQueryResponse
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
     * @summary 查询火车票订单列表
     *  *
     * @param TrainOrderListQueryRequest $request TrainOrderListQueryRequest
     *
     * @return TrainOrderListQueryResponse TrainOrderListQueryResponse
     */
    public function trainOrderListQuery($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new TrainOrderListQueryHeaders([]);

        return $this->trainOrderListQueryWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 火车票订单支付
     *  *
     * @param TrainOrderPayRequest $request TrainOrderPayRequest
     * @param TrainOrderPayHeaders $headers TrainOrderPayHeaders
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return TrainOrderPayResponse TrainOrderPayResponse
     */
    public function trainOrderPayWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->orderId)) {
            $body['order_id'] = $request->orderId;
        }
        if (!Utils::isUnset($request->outOrderId)) {
            $body['out_order_id'] = $request->outOrderId;
        }
        if (!Utils::isUnset($request->payAmount)) {
            $body['pay_amount'] = $request->payAmount;
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
            'action'      => 'TrainOrderPay',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/train/v1/order/pay',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TrainOrderPayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 火车票订单支付
     *  *
     * @param TrainOrderPayRequest $request TrainOrderPayRequest
     *
     * @return TrainOrderPayResponse TrainOrderPayResponse
     */
    public function trainOrderPay($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new TrainOrderPayHeaders([]);

        return $this->trainOrderPayWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 查询火车票订单详情（含票信息）
     *  *
     * @param TrainOrderQueryRequest $request TrainOrderQueryRequest
     * @param TrainOrderQueryHeaders $headers TrainOrderQueryHeaders
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return TrainOrderQueryResponse TrainOrderQueryResponse
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
     * @summary 查询火车票订单详情（含票信息）
     *  *
     * @param TrainOrderQueryRequest $request TrainOrderQueryRequest
     *
     * @return TrainOrderQueryResponse TrainOrderQueryResponse
     */
    public function trainOrderQuery($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new TrainOrderQueryHeaders([]);

        return $this->trainOrderQueryWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 火车票订单查询V2
     *  *
     * @param TrainOrderQueryV2Request $request TrainOrderQueryV2Request
     * @param TrainOrderQueryV2Headers $headers TrainOrderQueryV2Headers
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return TrainOrderQueryV2Response TrainOrderQueryV2Response
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
     * @summary 火车票订单查询V2
     *  *
     * @param TrainOrderQueryV2Request $request TrainOrderQueryV2Request
     *
     * @return TrainOrderQueryV2Response TrainOrderQueryV2Response
     */
    public function trainOrderQueryV2($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new TrainOrderQueryV2Headers([]);

        return $this->trainOrderQueryV2WithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 查询火车站数据
     *  *
     * @param TrainStationSearchRequest $request TrainStationSearchRequest
     * @param TrainStationSearchHeaders $headers TrainStationSearchHeaders
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return TrainStationSearchResponse TrainStationSearchResponse
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
     * @summary 查询火车站数据
     *  *
     * @param TrainStationSearchRequest $request TrainStationSearchRequest
     *
     * @return TrainStationSearchResponse TrainStationSearchResponse
     */
    public function trainStationSearch($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new TrainStationSearchHeaders([]);

        return $this->trainStationSearchWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 火车票经停站查询
     *  *
     * @param TrainStopoverSearchRequest $request TrainStopoverSearchRequest
     * @param TrainStopoverSearchHeaders $headers TrainStopoverSearchHeaders
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return TrainStopoverSearchResponse TrainStopoverSearchResponse
     */
    public function trainStopoverSearchWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->arrStation)) {
            $body['arr_station'] = $request->arrStation;
        }
        if (!Utils::isUnset($request->depStation)) {
            $body['dep_station'] = $request->depStation;
        }
        if (!Utils::isUnset($request->trainDate)) {
            $body['train_date'] = $request->trainDate;
        }
        if (!Utils::isUnset($request->trainNo)) {
            $body['train_no'] = $request->trainNo;
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
            'action'      => 'TrainStopoverSearch',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/train/v1/search/stopover',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TrainStopoverSearchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 火车票经停站查询
     *  *
     * @param TrainStopoverSearchRequest $request TrainStopoverSearchRequest
     *
     * @return TrainStopoverSearchResponse TrainStopoverSearchResponse
     */
    public function trainStopoverSearch($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new TrainStopoverSearchHeaders([]);

        return $this->trainStopoverSearchWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 查询火车票凭证扫描件
     *  *
     * @param TrainTicketScanQueryRequest $request TrainTicketScanQueryRequest
     * @param TrainTicketScanQueryHeaders $headers TrainTicketScanQueryHeaders
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return TrainTicketScanQueryResponse TrainTicketScanQueryResponse
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
        if (!Utils::isUnset($request->serialNumber)) {
            $query['serial_number'] = $request->serialNumber;
        }
        if (!Utils::isUnset($request->ticketNo)) {
            $query['ticket_no'] = $request->ticketNo;
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
     * @summary 查询火车票凭证扫描件
     *  *
     * @param TrainTicketScanQueryRequest $request TrainTicketScanQueryRequest
     *
     * @return TrainTicketScanQueryResponse TrainTicketScanQueryResponse
     */
    public function trainTicketScanQuery($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new TrainTicketScanQueryHeaders([]);

        return $this->trainTicketScanQueryWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 查询差标列表
     *  *
     * @param TravelStandardListQueryRequest $request TravelStandardListQueryRequest
     * @param TravelStandardListQueryHeaders $headers TravelStandardListQueryHeaders
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return TravelStandardListQueryResponse TravelStandardListQueryResponse
     */
    public function travelStandardListQueryWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fromGroup)) {
            $query['from_group'] = $request->fromGroup;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['page_no'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['page_size'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->ruleName)) {
            $query['rule_name'] = $request->ruleName;
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
            'action'      => 'TravelStandardListQuery',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/travel-manage/v1/standards/list',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return TravelStandardListQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询差标列表
     *  *
     * @param TravelStandardListQueryRequest $request TravelStandardListQueryRequest
     *
     * @return TravelStandardListQueryResponse TravelStandardListQueryResponse
     */
    public function travelStandardListQuery($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new TravelStandardListQueryHeaders([]);

        return $this->travelStandardListQueryWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 查询差标详情
     *  *
     * @param TravelStandardQueryRequest $tmpReq  TravelStandardQueryRequest
     * @param TravelStandardQueryHeaders $headers TravelStandardQueryHeaders
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return TravelStandardQueryResponse TravelStandardQueryResponse
     */
    public function travelStandardQueryWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new TravelStandardQueryShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->serviceTypeList)) {
            $request->serviceTypeListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->serviceTypeList, 'service_type_list', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->fromGroup)) {
            $query['from_group'] = $request->fromGroup;
        }
        if (!Utils::isUnset($request->ruleCode)) {
            $query['rule_code'] = $request->ruleCode;
        }
        if (!Utils::isUnset($request->serviceTypeListShrink)) {
            $query['service_type_list'] = $request->serviceTypeListShrink;
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
            'action'      => 'TravelStandardQuery',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/travel-manage/v1/standards/detail',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return TravelStandardQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询差标详情
     *  *
     * @param TravelStandardQueryRequest $request TravelStandardQueryRequest
     *
     * @return TravelStandardQueryResponse TravelStandardQueryResponse
     */
    public function travelStandardQuery($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new TravelStandardQueryHeaders([]);

        return $this->travelStandardQueryWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 更新企业自定义角色
     *  *
     * @param UpdateCustomRoleRequest $request UpdateCustomRoleRequest
     * @param UpdateCustomRoleHeaders $headers UpdateCustomRoleHeaders
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateCustomRoleResponse UpdateCustomRoleResponse
     */
    public function updateCustomRoleWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->roleId)) {
            $body['role_id'] = $request->roleId;
        }
        if (!Utils::isUnset($request->roleName)) {
            $body['role_name'] = $request->roleName;
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
            'action'      => 'UpdateCustomRole',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/role/v1/customRoles/update',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateCustomRoleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新企业自定义角色
     *  *
     * @param UpdateCustomRoleRequest $request UpdateCustomRoleRequest
     *
     * @return UpdateCustomRoleResponse UpdateCustomRoleResponse
     */
    public function updateCustomRole($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new UpdateCustomRoleHeaders([]);

        return $this->updateCustomRoleWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 人员查询
     *  *
     * @param UserQueryRequest $request UserQueryRequest
     * @param UserQueryHeaders $headers UserQueryHeaders
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return UserQueryResponse UserQueryResponse
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
     * @summary 人员查询
     *  *
     * @param UserQueryRequest $request UserQueryRequest
     *
     * @return UserQueryResponse UserQueryResponse
     */
    public function userQuery($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new UserQueryHeaders([]);

        return $this->userQueryWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 查询增值税发票扫描件
     *  *
     * @param VatInvoiceScanQueryRequest $request VatInvoiceScanQueryRequest
     * @param VatInvoiceScanQueryHeaders $headers VatInvoiceScanQueryHeaders
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return VatInvoiceScanQueryResponse VatInvoiceScanQueryResponse
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
     * @summary 查询增值税发票扫描件
     *  *
     * @param VatInvoiceScanQueryRequest $request VatInvoiceScanQueryRequest
     *
     * @return VatInvoiceScanQueryResponse VatInvoiceScanQueryResponse
     */
    public function vatInvoiceScanQuery($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new VatInvoiceScanQueryHeaders([]);

        return $this->vatInvoiceScanQueryWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 查询账期待申请的发票数据
     *  *
     * @param WaitApplyInvoiceTaskDetailQueryRequest $request WaitApplyInvoiceTaskDetailQueryRequest
     * @param WaitApplyInvoiceTaskDetailQueryHeaders $headers WaitApplyInvoiceTaskDetailQueryHeaders
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return WaitApplyInvoiceTaskDetailQueryResponse WaitApplyInvoiceTaskDetailQueryResponse
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
     * @summary 查询账期待申请的发票数据
     *  *
     * @param WaitApplyInvoiceTaskDetailQueryRequest $request WaitApplyInvoiceTaskDetailQueryRequest
     *
     * @return WaitApplyInvoiceTaskDetailQueryResponse WaitApplyInvoiceTaskDetailQueryResponse
     */
    public function waitApplyInvoiceTaskDetailQuery($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new WaitApplyInvoiceTaskDetailQueryHeaders([]);

        return $this->waitApplyInvoiceTaskDetailQueryWithOptions($request, $headers, $runtime);
    }
}
