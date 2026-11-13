<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\InternetBankOpen\V20240612;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\InternetBankOpen\V20240612\Models\GetAiReportRequest;
use AlibabaCloud\SDK\InternetBankOpen\V20240612\Models\GetAiReportResponse;
use AlibabaCloud\SDK\InternetBankOpen\V20240612\Models\InvokeDataProductRequest;
use AlibabaCloud\SDK\InternetBankOpen\V20240612\Models\InvokeDataProductResponse;
use AlibabaCloud\SDK\InternetBankOpen\V20240612\Models\ListProductReportsRequest;
use AlibabaCloud\SDK\InternetBankOpen\V20240612\Models\ListProductReportsResponse;
use Darabonba\GatewayPop\Client;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class InternetBankOpen extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_productId = 'InternetBankOpen';
        $gatewayClient = new Client();
        $this->_spi = $gatewayClient;
        $this->_endpointRule = 'regional';
        $this->_endpointMap = [
            'cn-beijing' => 'internetbankopen.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('internetbankopen', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * Queries the report status and retrieves a temporary download URL for available reports.
     *
     * @remarks
     * Queries the status of the AI report attached to a data product and returns a temporary download URL when the report is available. This operation is a read-only query. It does not call the data service provider again, nor does it start or regenerate the report.
     * You must specify either callId or reportId, but not both. The parameter names are case-sensitive as defined on this page. For per-use reports: first call InvokeDataProduct to obtain the callId, and then use the callId to query. When the report status is AVAILABLE, obtain the download URL from Report. For periodic reports: first call ListProductReports to obtain the ReportId, and then use this ID as reportId to query. Querying by the callId of a periodic product always returns WAITING_PERIOD. Even if the corresponding periodic report has been generated, no download URL is returned. Internal task IDs are not query keys for this operation.
     * The query scope is limited to the calls and reports that belong to the current Alibaba Cloud account. If the ID does not exist or does not belong to the account, ReportNotFound (HTTP 404) is returned without distinguishing between the two causes. When you call this operation as a RAM user, the gateway verifies the internetbank:GetAiReport operation permission.
     * The Report object is returned only when ReportStatus is AVAILABLE. DownloadUrl is a temporary signed download URL. The validity period of the signed URL does not exceed 300 seconds and is no later than ContentExpiresAt. Use the URL before UrlExpiresAt and do not share it publicly. If the URL expires but the report content is still within the retention period, you can query again to obtain a new URL. No download URL is returned when the report expires or its delivery is suspended. Delivery exceptions such as object verification or signing failures return ReportDeliveryFailed (HTTP 500). Invalid parameters return the corresponding InvalidParameter errors (HTTP 400).
     *
     * @param request - GetAiReportRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAiReportResponse
     *
     * @param GetAiReportRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return GetAiReportResponse
     */
    public function getAiReportWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->callId) {
            @$query['callId'] = $request->callId;
        }

        if (null !== $request->reportId) {
            @$query['reportId'] = $request->reportId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAiReport',
            'version' => '2024-06-12',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/api/v1/ai-report',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetAiReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the report status and retrieves a temporary download URL for available reports.
     *
     * @remarks
     * Queries the status of the AI report attached to a data product and returns a temporary download URL when the report is available. This operation is a read-only query. It does not call the data service provider again, nor does it start or regenerate the report.
     * You must specify either callId or reportId, but not both. The parameter names are case-sensitive as defined on this page. For per-use reports: first call InvokeDataProduct to obtain the callId, and then use the callId to query. When the report status is AVAILABLE, obtain the download URL from Report. For periodic reports: first call ListProductReports to obtain the ReportId, and then use this ID as reportId to query. Querying by the callId of a periodic product always returns WAITING_PERIOD. Even if the corresponding periodic report has been generated, no download URL is returned. Internal task IDs are not query keys for this operation.
     * The query scope is limited to the calls and reports that belong to the current Alibaba Cloud account. If the ID does not exist or does not belong to the account, ReportNotFound (HTTP 404) is returned without distinguishing between the two causes. When you call this operation as a RAM user, the gateway verifies the internetbank:GetAiReport operation permission.
     * The Report object is returned only when ReportStatus is AVAILABLE. DownloadUrl is a temporary signed download URL. The validity period of the signed URL does not exceed 300 seconds and is no later than ContentExpiresAt. Use the URL before UrlExpiresAt and do not share it publicly. If the URL expires but the report content is still within the retention period, you can query again to obtain a new URL. No download URL is returned when the report expires or its delivery is suspended. Delivery exceptions such as object verification or signing failures return ReportDeliveryFailed (HTTP 500). Invalid parameters return the corresponding InvalidParameter errors (HTTP 400).
     *
     * @param request - GetAiReportRequest
     *
     * @returns GetAiReportResponse
     *
     * @param GetAiReportRequest $request
     *
     * @return GetAiReportResponse
     */
    public function getAiReport($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getAiReportWithOptions($request, $headers, $runtime);
    }

    /**
     * Provides a unified entry point for invoking data products.
     *
     * @remarks
     * Provides a unified entry point for invoking data products. After the gateway completes identity parsing, RAM authentication, and product authorization, it forwards the request to the data service provider corresponding to the data product and returns the business data. A successful call returns an HTTP 200 status code, and the response body contains RequestId and Data. A failed call returns the corresponding HTTP status code (400 for parameter errors, 403 for no permissions or unactivated services, 409 if the initial request with the same ClientToken is still being processed, 429 for throttled requests, 503 for temporarily unavailable services, and 500 for internal errors), and the response body uses Code and Message to explain the cause.
     * This operation accepts only three business parameters: ClientToken, ProductCode, and ServiceParameters. It does not accept TaskId, Operation, parameters starting with Ai, or EnableAiArtifact (including when set to false). Passing these parameters returns an InvalidParameter error. Whether a product includes an AI report is determined by the product configuration corresponding to the ProductCode. For products that include reports, you can call ListProductReports to query the report list, and use GetAiReport to retrieve the report by CallId or ReportId.
     * Authorization prerequisites: When calling this operation with a RAM user, you must first grant the RAM user the operation permissions for this operation in RAM. Set Action to internetbank:InvokeDataProduct and Resource to acs:internetbank:*:<your Alibaba Cloud account UID>:*. No additional authorization is required when calling this operation directly with the AccessKey of an Alibaba Cloud account.
     * Service-linked role: After the preceding authorization is completed, the system automatically creates the service-linked role (SLR) AliyunServiceRoleForInternetBankPredict under your Alibaba Cloud account. This role is used to invoke the corresponding data service provider on behalf of the customer as a service identity. You can view the related invocation records in ActionTrail of your account.
     *
     * @param request - InvokeDataProductRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns InvokeDataProductResponse
     *
     * @param InvokeDataProductRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return InvokeDataProductResponse
     */
    public function invokeDataProductWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        if (null !== $request->productCode) {
            @$query['productCode'] = $request->productCode;
        }

        if (null !== $request->serviceParameters) {
            @$query['serviceParameters'] = $request->serviceParameters;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'InvokeDataProduct',
            'version' => '2024-06-12',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/api/v1/rpc',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return InvokeDataProductResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Provides a unified entry point for invoking data products.
     *
     * @remarks
     * Provides a unified entry point for invoking data products. After the gateway completes identity parsing, RAM authentication, and product authorization, it forwards the request to the data service provider corresponding to the data product and returns the business data. A successful call returns an HTTP 200 status code, and the response body contains RequestId and Data. A failed call returns the corresponding HTTP status code (400 for parameter errors, 403 for no permissions or unactivated services, 409 if the initial request with the same ClientToken is still being processed, 429 for throttled requests, 503 for temporarily unavailable services, and 500 for internal errors), and the response body uses Code and Message to explain the cause.
     * This operation accepts only three business parameters: ClientToken, ProductCode, and ServiceParameters. It does not accept TaskId, Operation, parameters starting with Ai, or EnableAiArtifact (including when set to false). Passing these parameters returns an InvalidParameter error. Whether a product includes an AI report is determined by the product configuration corresponding to the ProductCode. For products that include reports, you can call ListProductReports to query the report list, and use GetAiReport to retrieve the report by CallId or ReportId.
     * Authorization prerequisites: When calling this operation with a RAM user, you must first grant the RAM user the operation permissions for this operation in RAM. Set Action to internetbank:InvokeDataProduct and Resource to acs:internetbank:*:<your Alibaba Cloud account UID>:*. No additional authorization is required when calling this operation directly with the AccessKey of an Alibaba Cloud account.
     * Service-linked role: After the preceding authorization is completed, the system automatically creates the service-linked role (SLR) AliyunServiceRoleForInternetBankPredict under your Alibaba Cloud account. This role is used to invoke the corresponding data service provider on behalf of the customer as a service identity. You can view the related invocation records in ActionTrail of your account.
     *
     * @param request - InvokeDataProductRequest
     *
     * @returns InvokeDataProductResponse
     *
     * @param InvokeDataProductRequest $request
     *
     * @return InvokeDataProductResponse
     */
    public function invokeDataProduct($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->invokeDataProductWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries the available periodic report IDs and period ranges for a specified product.
     *
     * @remarks
     * Queries the available periodic reports generated for a specified product under the current Alibaba Cloud account. The list is used only to discover report IDs and their corresponding periods, and does not return download URLs. After obtaining a ReportId, call GetAiReport and pass the ID as the reportId parameter to obtain the latest status and download URL. This operation does not call the data service provider or trigger report generation.
     * If LatestOnly is omitted or set to false, the operation queries reports within the last ten completed natural weeks in UTC+8 and returns up to ten report records in descending order of epoch. Empty records are not padded for weeks without reports, and ten reports are not guaranteed to be returned. If LatestOnly is set to true, the operation searches for the most recent active report from all completed historical epochs and returns at most one record, without being limited to the last ten weeks.
     * A natural week is calculated based on UTC+8 (Asia/Shanghai), starting from 00:00:00 on Monday to 00:00:00 on the following Monday. The interval is left-closed and right-open, excluding the current unfinished natural week. PeriodStart and PeriodEnd are output in UTC RFC 3339 format. A single natural week may correspond to multiple report records. Therefore, identical epoch start and end times for two records do not indicate duplication. Use ReportId to distinguish them.
     * The list determines availability based on the asset records of published reports and does not return expired or suspended reports. The actual download status is subject to the query results of GetAiReport. If no available reports exist, an empty Reports array is returned successfully, and ReportNotFound is not returned. This operation provides only two business parameters, ProductCode and LatestOnly, and does not support pagination or custom period filtering. Passing PeriodStart, PageSize, or NextToken returns a corresponding InvalidParameter error (HTTP 400).
     * When called with a RAM identity, the gateway verifies the internetbank:ListProductReports operation permission. The query only reads existing reports of the current account and does not recheck the commercial activation status of the product. Parameter errors return a corresponding InvalidParameter error (HTTP 400). Inconsistent report asset records or query exceptions return ReportDeliveryFailed (HTTP 500).
     *
     * @param request - ListProductReportsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListProductReportsResponse
     *
     * @param ListProductReportsRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return ListProductReportsResponse
     */
    public function listProductReportsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->latestOnly) {
            @$query['LatestOnly'] = $request->latestOnly;
        }

        if (null !== $request->productCode) {
            @$query['ProductCode'] = $request->productCode;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListProductReports',
            'version' => '2024-06-12',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/api/v1/product-reports',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListProductReportsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the available periodic report IDs and period ranges for a specified product.
     *
     * @remarks
     * Queries the available periodic reports generated for a specified product under the current Alibaba Cloud account. The list is used only to discover report IDs and their corresponding periods, and does not return download URLs. After obtaining a ReportId, call GetAiReport and pass the ID as the reportId parameter to obtain the latest status and download URL. This operation does not call the data service provider or trigger report generation.
     * If LatestOnly is omitted or set to false, the operation queries reports within the last ten completed natural weeks in UTC+8 and returns up to ten report records in descending order of epoch. Empty records are not padded for weeks without reports, and ten reports are not guaranteed to be returned. If LatestOnly is set to true, the operation searches for the most recent active report from all completed historical epochs and returns at most one record, without being limited to the last ten weeks.
     * A natural week is calculated based on UTC+8 (Asia/Shanghai), starting from 00:00:00 on Monday to 00:00:00 on the following Monday. The interval is left-closed and right-open, excluding the current unfinished natural week. PeriodStart and PeriodEnd are output in UTC RFC 3339 format. A single natural week may correspond to multiple report records. Therefore, identical epoch start and end times for two records do not indicate duplication. Use ReportId to distinguish them.
     * The list determines availability based on the asset records of published reports and does not return expired or suspended reports. The actual download status is subject to the query results of GetAiReport. If no available reports exist, an empty Reports array is returned successfully, and ReportNotFound is not returned. This operation provides only two business parameters, ProductCode and LatestOnly, and does not support pagination or custom period filtering. Passing PeriodStart, PageSize, or NextToken returns a corresponding InvalidParameter error (HTTP 400).
     * When called with a RAM identity, the gateway verifies the internetbank:ListProductReports operation permission. The query only reads existing reports of the current account and does not recheck the commercial activation status of the product. Parameter errors return a corresponding InvalidParameter error (HTTP 400). Inconsistent report asset records or query exceptions return ReportDeliveryFailed (HTTP 500).
     *
     * @param request - ListProductReportsRequest
     *
     * @returns ListProductReportsResponse
     *
     * @param ListProductReportsRequest $request
     *
     * @return ListProductReportsResponse
     */
    public function listProductReports($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listProductReportsWithOptions($request, $headers, $runtime);
    }
}
