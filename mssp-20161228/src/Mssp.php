<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mssp\V20161228;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Mssp\V20161228\Models\ConfirmDjbhReportRequest;
use AlibabaCloud\SDK\Mssp\V20161228\Models\ConfirmDjbhReportResponse;
use AlibabaCloud\SDK\Mssp\V20161228\Models\CreateServiceLinkedRoleRequest;
use AlibabaCloud\SDK\Mssp\V20161228\Models\CreateServiceLinkedRoleResponse;
use AlibabaCloud\SDK\Mssp\V20161228\Models\CreateServiceWorkOrderRequest;
use AlibabaCloud\SDK\Mssp\V20161228\Models\CreateServiceWorkOrderResponse;
use AlibabaCloud\SDK\Mssp\V20161228\Models\DeleteDjbhReportRequest;
use AlibabaCloud\SDK\Mssp\V20161228\Models\DeleteDjbhReportResponse;
use AlibabaCloud\SDK\Mssp\V20161228\Models\DescribeServiceLinkedRoleRequest;
use AlibabaCloud\SDK\Mssp\V20161228\Models\DescribeServiceLinkedRoleResponse;
use AlibabaCloud\SDK\Mssp\V20161228\Models\DisposeServiceWorkOrderRequest;
use AlibabaCloud\SDK\Mssp\V20161228\Models\DisposeServiceWorkOrderResponse;
use AlibabaCloud\SDK\Mssp\V20161228\Models\DisposeWorkTaskRequest;
use AlibabaCloud\SDK\Mssp\V20161228\Models\DisposeWorkTaskResponse;
use AlibabaCloud\SDK\Mssp\V20161228\Models\DisposeWorkTaskShrinkRequest;
use AlibabaCloud\SDK\Mssp\V20161228\Models\GetAlarmDetailByIdRequest;
use AlibabaCloud\SDK\Mssp\V20161228\Models\GetAlarmDetailByIdResponse;
use AlibabaCloud\SDK\Mssp\V20161228\Models\GetAttackedAssetDealRequest;
use AlibabaCloud\SDK\Mssp\V20161228\Models\GetAttackedAssetDealResponse;
use AlibabaCloud\SDK\Mssp\V20161228\Models\GetBaselineSummaryRequest;
use AlibabaCloud\SDK\Mssp\V20161228\Models\GetBaselineSummaryResponse;
use AlibabaCloud\SDK\Mssp\V20161228\Models\GetConsoleScoreRequest;
use AlibabaCloud\SDK\Mssp\V20161228\Models\GetConsoleScoreResponse;
use AlibabaCloud\SDK\Mssp\V20161228\Models\GetDetailByIdRequest;
use AlibabaCloud\SDK\Mssp\V20161228\Models\GetDetailByIdResponse;
use AlibabaCloud\SDK\Mssp\V20161228\Models\GetDocumentDownloadUrlRequest;
use AlibabaCloud\SDK\Mssp\V20161228\Models\GetDocumentDownloadUrlResponse;
use AlibabaCloud\SDK\Mssp\V20161228\Models\GetDocumentPageRequest;
use AlibabaCloud\SDK\Mssp\V20161228\Models\GetDocumentPageResponse;
use AlibabaCloud\SDK\Mssp\V20161228\Models\GetDocumentSummaryRequest;
use AlibabaCloud\SDK\Mssp\V20161228\Models\GetDocumentSummaryResponse;
use AlibabaCloud\SDK\Mssp\V20161228\Models\GetRecentDocumentRequest;
use AlibabaCloud\SDK\Mssp\V20161228\Models\GetRecentDocumentResponse;
use AlibabaCloud\SDK\Mssp\V20161228\Models\GetSafetyCoverRequest;
use AlibabaCloud\SDK\Mssp\V20161228\Models\GetSafetyCoverResponse;
use AlibabaCloud\SDK\Mssp\V20161228\Models\GetSowListRequest;
use AlibabaCloud\SDK\Mssp\V20161228\Models\GetSowListResponse;
use AlibabaCloud\SDK\Mssp\V20161228\Models\GetSuspEventPageRequest;
use AlibabaCloud\SDK\Mssp\V20161228\Models\GetSuspEventPageResponse;
use AlibabaCloud\SDK\Mssp\V20161228\Models\GetSuspEventSummaryRequest;
use AlibabaCloud\SDK\Mssp\V20161228\Models\GetSuspEventSummaryResponse;
use AlibabaCloud\SDK\Mssp\V20161228\Models\GetSuspPageSummaryResponse;
use AlibabaCloud\SDK\Mssp\V20161228\Models\GetUserStatusResponse;
use AlibabaCloud\SDK\Mssp\V20161228\Models\GetVulItemPageRequest;
use AlibabaCloud\SDK\Mssp\V20161228\Models\GetVulItemPageResponse;
use AlibabaCloud\SDK\Mssp\V20161228\Models\GetVulListByIdRequest;
use AlibabaCloud\SDK\Mssp\V20161228\Models\GetVulListByIdResponse;
use AlibabaCloud\SDK\Mssp\V20161228\Models\GetVulPageSummaryResponse;
use AlibabaCloud\SDK\Mssp\V20161228\Models\GetVulSummaryRequest;
use AlibabaCloud\SDK\Mssp\V20161228\Models\GetVulSummaryResponse;
use AlibabaCloud\SDK\Mssp\V20161228\Models\GetWorkTaskSummaryRequest;
use AlibabaCloud\SDK\Mssp\V20161228\Models\GetWorkTaskSummaryResponse;
use AlibabaCloud\SDK\Mssp\V20161228\Models\PageServiceCustomerRequest;
use AlibabaCloud\SDK\Mssp\V20161228\Models\PageServiceCustomerResponse;
use AlibabaCloud\SDK\Mssp\V20161228\Models\SendCustomEventRequest;
use AlibabaCloud\SDK\Mssp\V20161228\Models\SendCustomEventResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Mssp extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('mssp', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * Confirm Receipt of Security Assessment Report.
     *
     * @param request - ConfirmDjbhReportRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ConfirmDjbhReportResponse
     *
     * @param ConfirmDjbhReportRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ConfirmDjbhReportResponse
     */
    public function confirmDjbhReportWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ConfirmDjbhReport',
            'version' => '2016-12-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ConfirmDjbhReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Confirm Receipt of Security Assessment Report.
     *
     * @param request - ConfirmDjbhReportRequest
     *
     * @returns ConfirmDjbhReportResponse
     *
     * @param ConfirmDjbhReportRequest $request
     *
     * @return ConfirmDjbhReportResponse
     */
    public function confirmDjbhReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->confirmDjbhReportWithOptions($request, $runtime);
    }

    /**
     * Create Service-Linked Role.
     *
     * @param request - CreateServiceLinkedRoleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateServiceLinkedRoleResponse
     *
     * @param CreateServiceLinkedRoleRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateServiceLinkedRoleResponse
     */
    public function createServiceLinkedRoleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateServiceLinkedRole',
            'version' => '2016-12-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateServiceLinkedRoleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Create Service-Linked Role.
     *
     * @param request - CreateServiceLinkedRoleRequest
     *
     * @returns CreateServiceLinkedRoleResponse
     *
     * @param CreateServiceLinkedRoleRequest $request
     *
     * @return CreateServiceLinkedRoleResponse
     */
    public function createServiceLinkedRole($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createServiceLinkedRoleWithOptions($request, $runtime);
    }

    /**
     * Create Service Work Order.
     *
     * @param request - CreateServiceWorkOrderRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateServiceWorkOrderResponse
     *
     * @param CreateServiceWorkOrderRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CreateServiceWorkOrderResponse
     */
    public function createServiceWorkOrderWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->creator) {
            @$body['Creator'] = $request->creator;
        }

        if (null !== $request->customerId) {
            @$body['CustomerId'] = $request->customerId;
        }

        if (null !== $request->durationDay) {
            @$body['DurationDay'] = $request->durationDay;
        }

        if (null !== $request->isAttachment) {
            @$body['IsAttachment'] = $request->isAttachment;
        }

        if (null !== $request->isMilestone) {
            @$body['IsMilestone'] = $request->isMilestone;
        }

        if (null !== $request->isWorkOrderNotify) {
            @$body['IsWorkOrderNotify'] = $request->isWorkOrderNotify;
        }

        if (null !== $request->notifyDay) {
            @$body['NotifyDay'] = $request->notifyDay;
        }

        if (null !== $request->notifyId) {
            @$body['NotifyId'] = $request->notifyId;
        }

        if (null !== $request->operateRemark) {
            @$body['OperateRemark'] = $request->operateRemark;
        }

        if (null !== $request->operateType) {
            @$body['OperateType'] = $request->operateType;
        }

        if (null !== $request->operator) {
            @$body['Operator'] = $request->operator;
        }

        if (null !== $request->ownerId) {
            @$body['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->priority) {
            @$body['Priority'] = $request->priority;
        }

        if (null !== $request->startTime) {
            @$body['StartTime'] = $request->startTime;
        }

        if (null !== $request->workOrderDetail) {
            @$body['WorkOrderDetail'] = $request->workOrderDetail;
        }

        if (null !== $request->workOrderName) {
            @$body['WorkOrderName'] = $request->workOrderName;
        }

        if (null !== $request->workOrderSource) {
            @$body['WorkOrderSource'] = $request->workOrderSource;
        }

        if (null !== $request->workOrderStatus) {
            @$body['WorkOrderStatus'] = $request->workOrderStatus;
        }

        if (null !== $request->workOrderType) {
            @$body['WorkOrderType'] = $request->workOrderType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateServiceWorkOrder',
            'version' => '2016-12-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateServiceWorkOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Create Service Work Order.
     *
     * @param request - CreateServiceWorkOrderRequest
     *
     * @returns CreateServiceWorkOrderResponse
     *
     * @param CreateServiceWorkOrderRequest $request
     *
     * @return CreateServiceWorkOrderResponse
     */
    public function createServiceWorkOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createServiceWorkOrderWithOptions($request, $runtime);
    }

    /**
     * Delete Security Assessment Report.
     *
     * @param request - DeleteDjbhReportRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDjbhReportResponse
     *
     * @param DeleteDjbhReportRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteDjbhReportResponse
     */
    public function deleteDjbhReportWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteDjbhReport',
            'version' => '2016-12-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteDjbhReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Delete Security Assessment Report.
     *
     * @param request - DeleteDjbhReportRequest
     *
     * @returns DeleteDjbhReportResponse
     *
     * @param DeleteDjbhReportRequest $request
     *
     * @return DeleteDjbhReportResponse
     */
    public function deleteDjbhReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDjbhReportWithOptions($request, $runtime);
    }

    /**
     * Query Service-Linked Role.
     *
     * @param request - DescribeServiceLinkedRoleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeServiceLinkedRoleResponse
     *
     * @param DescribeServiceLinkedRoleRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeServiceLinkedRoleResponse
     */
    public function describeServiceLinkedRoleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeServiceLinkedRole',
            'version' => '2016-12-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeServiceLinkedRoleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query Service-Linked Role.
     *
     * @param request - DescribeServiceLinkedRoleRequest
     *
     * @returns DescribeServiceLinkedRoleResponse
     *
     * @param DescribeServiceLinkedRoleRequest $request
     *
     * @return DescribeServiceLinkedRoleResponse
     */
    public function describeServiceLinkedRole($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeServiceLinkedRoleWithOptions($request, $runtime);
    }

    /**
     * Process Service Work Order.
     *
     * @param request - DisposeServiceWorkOrderRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DisposeServiceWorkOrderResponse
     *
     * @param DisposeServiceWorkOrderRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DisposeServiceWorkOrderResponse
     */
    public function disposeServiceWorkOrderWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->attachmentName) {
            @$body['AttachmentName'] = $request->attachmentName;
        }

        if (null !== $request->endTime) {
            @$body['EndTime'] = $request->endTime;
        }

        if (null !== $request->forwardOwnerId) {
            @$body['ForwardOwnerId'] = $request->forwardOwnerId;
        }

        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        if (null !== $request->isAttachment) {
            @$body['IsAttachment'] = $request->isAttachment;
        }

        if (null !== $request->isWorkOrderNotify) {
            @$body['IsWorkOrderNotify'] = $request->isWorkOrderNotify;
        }

        if (null !== $request->notifyId) {
            @$body['NotifyId'] = $request->notifyId;
        }

        if (null !== $request->operateRemark) {
            @$body['OperateRemark'] = $request->operateRemark;
        }

        if (null !== $request->operateType) {
            @$body['OperateType'] = $request->operateType;
        }

        if (null !== $request->operator) {
            @$body['Operator'] = $request->operator;
        }

        if (null !== $request->startTime) {
            @$body['StartTime'] = $request->startTime;
        }

        if (null !== $request->upgradeOwnerId) {
            @$body['UpgradeOwnerId'] = $request->upgradeOwnerId;
        }

        if (null !== $request->workOrderDetail) {
            @$body['WorkOrderDetail'] = $request->workOrderDetail;
        }

        if (null !== $request->workOrderName) {
            @$body['WorkOrderName'] = $request->workOrderName;
        }

        if (null !== $request->workOrderStatus) {
            @$body['WorkOrderStatus'] = $request->workOrderStatus;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DisposeServiceWorkOrder',
            'version' => '2016-12-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DisposeServiceWorkOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Process Service Work Order.
     *
     * @param request - DisposeServiceWorkOrderRequest
     *
     * @returns DisposeServiceWorkOrderResponse
     *
     * @param DisposeServiceWorkOrderRequest $request
     *
     * @return DisposeServiceWorkOrderResponse
     */
    public function disposeServiceWorkOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disposeServiceWorkOrderWithOptions($request, $runtime);
    }

    /**
     * Handle Alert Work Order.
     *
     * @param tmpReq - DisposeWorkTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DisposeWorkTaskResponse
     *
     * @param DisposeWorkTaskRequest $tmpReq
     * @param RuntimeOptions         $runtime
     *
     * @return DisposeWorkTaskResponse
     */
    public function disposeWorkTaskWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DisposeWorkTaskShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->workTaskAnalysisResults) {
            $request->workTaskAnalysisResultsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->workTaskAnalysisResults, 'WorkTaskAnalysisResults', 'json');
        }

        $body = [];
        if (null !== $request->operator) {
            @$body['Operator'] = $request->operator;
        }

        if (null !== $request->optRemark) {
            @$body['OptRemark'] = $request->optRemark;
        }

        if (null !== $request->status) {
            @$body['Status'] = $request->status;
        }

        if (null !== $request->taskIds) {
            @$body['TaskIds'] = $request->taskIds;
        }

        if (null !== $request->workTaskAnalysisResultsShrink) {
            @$body['WorkTaskAnalysisResults'] = $request->workTaskAnalysisResultsShrink;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DisposeWorkTask',
            'version' => '2016-12-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DisposeWorkTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Handle Alert Work Order.
     *
     * @param request - DisposeWorkTaskRequest
     *
     * @returns DisposeWorkTaskResponse
     *
     * @param DisposeWorkTaskRequest $request
     *
     * @return DisposeWorkTaskResponse
     */
    public function disposeWorkTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disposeWorkTaskWithOptions($request, $runtime);
    }

    /**
     * Query Alarm Details.
     *
     * @param request - GetAlarmDetailByIdRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAlarmDetailByIdResponse
     *
     * @param GetAlarmDetailByIdRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetAlarmDetailByIdResponse
     */
    public function getAlarmDetailByIdWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetAlarmDetailById',
            'version' => '2016-12-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAlarmDetailByIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query Alarm Details.
     *
     * @param request - GetAlarmDetailByIdRequest
     *
     * @returns GetAlarmDetailByIdResponse
     *
     * @param GetAlarmDetailByIdRequest $request
     *
     * @return GetAlarmDetailByIdResponse
     */
    public function getAlarmDetailById($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAlarmDetailByIdWithOptions($request, $runtime);
    }

    /**
     * Trend of Attacked Asset Convergence.
     *
     * @param request - GetAttackedAssetDealRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAttackedAssetDealResponse
     *
     * @param GetAttackedAssetDealRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetAttackedAssetDealResponse
     */
    public function getAttackedAssetDealWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->dateType) {
            @$body['DateType'] = $request->dateType;
        }

        if (null !== $request->endDate) {
            @$body['EndDate'] = $request->endDate;
        }

        if (null !== $request->startDate) {
            @$body['StartDate'] = $request->startDate;
        }

        if (null !== $request->suspEventSource) {
            @$body['SuspEventSource'] = $request->suspEventSource;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetAttackedAssetDeal',
            'version' => '2016-12-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAttackedAssetDealResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Trend of Attacked Asset Convergence.
     *
     * @param request - GetAttackedAssetDealRequest
     *
     * @returns GetAttackedAssetDealResponse
     *
     * @param GetAttackedAssetDealRequest $request
     *
     * @return GetAttackedAssetDealResponse
     */
    public function getAttackedAssetDeal($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAttackedAssetDealWithOptions($request, $runtime);
    }

    /**
     * Compliance Risk Convergence Trend.
     *
     * @param request - GetBaselineSummaryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetBaselineSummaryResponse
     *
     * @param GetBaselineSummaryRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetBaselineSummaryResponse
     */
    public function getBaselineSummaryWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->dateType) {
            @$body['DateType'] = $request->dateType;
        }

        if (null !== $request->endDate) {
            @$body['EndDate'] = $request->endDate;
        }

        if (null !== $request->startDate) {
            @$body['StartDate'] = $request->startDate;
        }

        if (null !== $request->suspEventSource) {
            @$body['SuspEventSource'] = $request->suspEventSource;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetBaselineSummary',
            'version' => '2016-12-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetBaselineSummaryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Compliance Risk Convergence Trend.
     *
     * @param request - GetBaselineSummaryRequest
     *
     * @returns GetBaselineSummaryResponse
     *
     * @param GetBaselineSummaryRequest $request
     *
     * @return GetBaselineSummaryResponse
     */
    public function getBaselineSummary($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBaselineSummaryWithOptions($request, $runtime);
    }

    /**
     * Get Console Score.
     *
     * @param request - GetConsoleScoreRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetConsoleScoreResponse
     *
     * @param GetConsoleScoreRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetConsoleScoreResponse
     */
    public function getConsoleScoreWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->dateType) {
            @$body['DateType'] = $request->dateType;
        }

        if (null !== $request->endDate) {
            @$body['EndDate'] = $request->endDate;
        }

        if (null !== $request->startDate) {
            @$body['StartDate'] = $request->startDate;
        }

        if (null !== $request->suspEventSource) {
            @$body['SuspEventSource'] = $request->suspEventSource;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetConsoleScore',
            'version' => '2016-12-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetConsoleScoreResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Get Console Score.
     *
     * @param request - GetConsoleScoreRequest
     *
     * @returns GetConsoleScoreResponse
     *
     * @param GetConsoleScoreRequest $request
     *
     * @return GetConsoleScoreResponse
     */
    public function getConsoleScore($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getConsoleScoreWithOptions($request, $runtime);
    }

    /**
     * Query Risk Details.
     *
     * @param request - GetDetailByIdRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDetailByIdResponse
     *
     * @param GetDetailByIdRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetDetailByIdResponse
     */
    public function getDetailByIdWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetDetailById',
            'version' => '2016-12-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetDetailByIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query Risk Details.
     *
     * @param request - GetDetailByIdRequest
     *
     * @returns GetDetailByIdResponse
     *
     * @param GetDetailByIdRequest $request
     *
     * @return GetDetailByIdResponse
     */
    public function getDetailById($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDetailByIdWithOptions($request, $runtime);
    }

    /**
     * Single Service Report Download.
     *
     * @param request - GetDocumentDownloadUrlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDocumentDownloadUrlResponse
     *
     * @param GetDocumentDownloadUrlRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetDocumentDownloadUrlResponse
     */
    public function getDocumentDownloadUrlWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->fileKey) {
            @$body['FileKey'] = $request->fileKey;
        }

        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        if (null !== $request->reportType) {
            @$body['ReportType'] = $request->reportType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetDocumentDownloadUrl',
            'version' => '2016-12-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetDocumentDownloadUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Single Service Report Download.
     *
     * @param request - GetDocumentDownloadUrlRequest
     *
     * @returns GetDocumentDownloadUrlResponse
     *
     * @param GetDocumentDownloadUrlRequest $request
     *
     * @return GetDocumentDownloadUrlResponse
     */
    public function getDocumentDownloadUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDocumentDownloadUrlWithOptions($request, $runtime);
    }

    /**
     * Service Report Query.
     *
     * @param request - GetDocumentPageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDocumentPageResponse
     *
     * @param GetDocumentPageRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetDocumentPageResponse
     */
    public function getDocumentPageWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->currentPage) {
            @$body['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->deliveredBy) {
            @$body['DeliveredBy'] = $request->deliveredBy;
        }

        if (null !== $request->documentName) {
            @$body['DocumentName'] = $request->documentName;
        }

        if (null !== $request->documentType) {
            @$body['DocumentType'] = $request->documentType;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->reportType) {
            @$body['ReportType'] = $request->reportType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetDocumentPage',
            'version' => '2016-12-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetDocumentPageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Service Report Query.
     *
     * @param request - GetDocumentPageRequest
     *
     * @returns GetDocumentPageResponse
     *
     * @param GetDocumentPageRequest $request
     *
     * @return GetDocumentPageResponse
     */
    public function getDocumentPage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDocumentPageWithOptions($request, $runtime);
    }

    /**
     * Service Report Home Page Statistics Acquisition.
     *
     * @param request - GetDocumentSummaryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDocumentSummaryResponse
     *
     * @param GetDocumentSummaryRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetDocumentSummaryResponse
     */
    public function getDocumentSummaryWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->reportType) {
            @$body['ReportType'] = $request->reportType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetDocumentSummary',
            'version' => '2016-12-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetDocumentSummaryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Service Report Home Page Statistics Acquisition.
     *
     * @param request - GetDocumentSummaryRequest
     *
     * @returns GetDocumentSummaryResponse
     *
     * @param GetDocumentSummaryRequest $request
     *
     * @return GetDocumentSummaryResponse
     */
    public function getDocumentSummary($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDocumentSummaryWithOptions($request, $runtime);
    }

    /**
     * Get Recently Uploaded Service Reports.
     *
     * @param request - GetRecentDocumentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetRecentDocumentResponse
     *
     * @param GetRecentDocumentRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetRecentDocumentResponse
     */
    public function getRecentDocumentWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->dateType) {
            @$body['DateType'] = $request->dateType;
        }

        if (null !== $request->endDate) {
            @$body['EndDate'] = $request->endDate;
        }

        if (null !== $request->startDate) {
            @$body['StartDate'] = $request->startDate;
        }

        if (null !== $request->suspEventSource) {
            @$body['SuspEventSource'] = $request->suspEventSource;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetRecentDocument',
            'version' => '2016-12-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetRecentDocumentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Get Recently Uploaded Service Reports.
     *
     * @param request - GetRecentDocumentRequest
     *
     * @returns GetRecentDocumentResponse
     *
     * @param GetRecentDocumentRequest $request
     *
     * @return GetRecentDocumentResponse
     */
    public function getRecentDocument($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRecentDocumentWithOptions($request, $runtime);
    }

    /**
     * Get Safety Coverage.
     *
     * @param request - GetSafetyCoverRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSafetyCoverResponse
     *
     * @param GetSafetyCoverRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetSafetyCoverResponse
     */
    public function getSafetyCoverWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->dateType) {
            @$body['DateType'] = $request->dateType;
        }

        if (null !== $request->endDate) {
            @$body['EndDate'] = $request->endDate;
        }

        if (null !== $request->startDate) {
            @$body['StartDate'] = $request->startDate;
        }

        if (null !== $request->suspEventSource) {
            @$body['SuspEventSource'] = $request->suspEventSource;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetSafetyCover',
            'version' => '2016-12-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetSafetyCoverResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Get Safety Coverage.
     *
     * @param request - GetSafetyCoverRequest
     *
     * @returns GetSafetyCoverResponse
     *
     * @param GetSafetyCoverRequest $request
     *
     * @return GetSafetyCoverResponse
     */
    public function getSafetyCover($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSafetyCoverWithOptions($request, $runtime);
    }

    /**
     * Get SOW List.
     *
     * @param request - GetSowListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSowListResponse
     *
     * @param GetSowListRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return GetSowListResponse
     */
    public function getSowListWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->dateType) {
            @$body['DateType'] = $request->dateType;
        }

        if (null !== $request->endDate) {
            @$body['EndDate'] = $request->endDate;
        }

        if (null !== $request->startDate) {
            @$body['StartDate'] = $request->startDate;
        }

        if (null !== $request->suspEventSource) {
            @$body['SuspEventSource'] = $request->suspEventSource;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetSowList',
            'version' => '2016-12-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetSowListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Get SOW List.
     *
     * @param request - GetSowListRequest
     *
     * @returns GetSowListResponse
     *
     * @param GetSowListRequest $request
     *
     * @return GetSowListResponse
     */
    public function getSowList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSowListWithOptions($request, $runtime);
    }

    /**
     * Alarm Disposal Query.
     *
     * @param request - GetSuspEventPageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSuspEventPageResponse
     *
     * @param GetSuspEventPageRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetSuspEventPageResponse
     */
    public function getSuspEventPageWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->alarmEndTime) {
            @$body['AlarmEndTime'] = $request->alarmEndTime;
        }

        if (null !== $request->alarmStartTime) {
            @$body['AlarmStartTime'] = $request->alarmStartTime;
        }

        if (null !== $request->currentPage) {
            @$body['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->source) {
            @$body['Source'] = $request->source;
        }

        if (null !== $request->status) {
            @$body['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetSuspEventPage',
            'version' => '2016-12-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetSuspEventPageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Alarm Disposal Query.
     *
     * @param request - GetSuspEventPageRequest
     *
     * @returns GetSuspEventPageResponse
     *
     * @param GetSuspEventPageRequest $request
     *
     * @return GetSuspEventPageResponse
     */
    public function getSuspEventPage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSuspEventPageWithOptions($request, $runtime);
    }

    /**
     * Get Alert Statistics.
     *
     * @param request - GetSuspEventSummaryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSuspEventSummaryResponse
     *
     * @param GetSuspEventSummaryRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetSuspEventSummaryResponse
     */
    public function getSuspEventSummaryWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->dateType) {
            @$body['DateType'] = $request->dateType;
        }

        if (null !== $request->endDate) {
            @$body['EndDate'] = $request->endDate;
        }

        if (null !== $request->startDate) {
            @$body['StartDate'] = $request->startDate;
        }

        if (null !== $request->suspEventSource) {
            @$body['SuspEventSource'] = $request->suspEventSource;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetSuspEventSummary',
            'version' => '2016-12-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetSuspEventSummaryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Get Alert Statistics.
     *
     * @param request - GetSuspEventSummaryRequest
     *
     * @returns GetSuspEventSummaryResponse
     *
     * @param GetSuspEventSummaryRequest $request
     *
     * @return GetSuspEventSummaryResponse
     */
    public function getSuspEventSummary($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSuspEventSummaryWithOptions($request, $runtime);
    }

    /**
     * Alarm Page Statistics.
     *
     * @param request - GetSuspPageSummaryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSuspPageSummaryResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return GetSuspPageSummaryResponse
     */
    public function getSuspPageSummaryWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'GetSuspPageSummary',
            'version' => '2016-12-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetSuspPageSummaryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Alarm Page Statistics.
     *
     * @returns GetSuspPageSummaryResponse
     *
     * @return GetSuspPageSummaryResponse
     */
    public function getSuspPageSummary()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSuspPageSummaryWithOptions($runtime);
    }

    /**
     * Query User Activation Status.
     *
     * @param request - GetUserStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetUserStatusResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return GetUserStatusResponse
     */
    public function getUserStatusWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'GetUserStatus',
            'version' => '2016-12-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetUserStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query User Activation Status.
     *
     * @returns GetUserStatusResponse
     *
     * @return GetUserStatusResponse
     */
    public function getUserStatus()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUserStatusWithOptions($runtime);
    }

    /**
     * Risk Query.
     *
     * @param request - GetVulItemPageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetVulItemPageResponse
     *
     * @param GetVulItemPageRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetVulItemPageResponse
     */
    public function getVulItemPageWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->aliasName) {
            @$body['AliasName'] = $request->aliasName;
        }

        if (null !== $request->currentPage) {
            @$body['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->dealed) {
            @$body['Dealed'] = $request->dealed;
        }

        if (null !== $request->level) {
            @$body['Level'] = $request->level;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->scanType) {
            @$body['ScanType'] = $request->scanType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetVulItemPage',
            'version' => '2016-12-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetVulItemPageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Risk Query.
     *
     * @param request - GetVulItemPageRequest
     *
     * @returns GetVulItemPageResponse
     *
     * @param GetVulItemPageRequest $request
     *
     * @return GetVulItemPageResponse
     */
    public function getVulItemPage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getVulItemPageWithOptions($request, $runtime);
    }

    /**
     * Query processed details.
     *
     * @param request - GetVulListByIdRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetVulListByIdResponse
     *
     * @param GetVulListByIdRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetVulListByIdResponse
     */
    public function getVulListByIdWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->currentPage) {
            @$body['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->dealed) {
            @$body['Dealed'] = $request->dealed;
        }

        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        if (null !== $request->necessity) {
            @$body['Necessity'] = $request->necessity;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->remark) {
            @$body['Remark'] = $request->remark;
        }

        if (null !== $request->uuids) {
            @$body['Uuids'] = $request->uuids;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetVulListById',
            'version' => '2016-12-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetVulListByIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query processed details.
     *
     * @param request - GetVulListByIdRequest
     *
     * @returns GetVulListByIdResponse
     *
     * @param GetVulListByIdRequest $request
     *
     * @return GetVulListByIdResponse
     */
    public function getVulListById($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getVulListByIdWithOptions($request, $runtime);
    }

    /**
     * Risk Page Statistics.
     *
     * @param request - GetVulPageSummaryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetVulPageSummaryResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return GetVulPageSummaryResponse
     */
    public function getVulPageSummaryWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'GetVulPageSummary',
            'version' => '2016-12-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetVulPageSummaryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Risk Page Statistics.
     *
     * @returns GetVulPageSummaryResponse
     *
     * @return GetVulPageSummaryResponse
     */
    public function getVulPageSummary()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getVulPageSummaryWithOptions($runtime);
    }

    /**
     * Get Risk Statistics.
     *
     * @param request - GetVulSummaryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetVulSummaryResponse
     *
     * @param GetVulSummaryRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetVulSummaryResponse
     */
    public function getVulSummaryWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->dateType) {
            @$body['DateType'] = $request->dateType;
        }

        if (null !== $request->endDate) {
            @$body['EndDate'] = $request->endDate;
        }

        if (null !== $request->startDate) {
            @$body['StartDate'] = $request->startDate;
        }

        if (null !== $request->suspEventSource) {
            @$body['SuspEventSource'] = $request->suspEventSource;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetVulSummary',
            'version' => '2016-12-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetVulSummaryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Get Risk Statistics.
     *
     * @param request - GetVulSummaryRequest
     *
     * @returns GetVulSummaryResponse
     *
     * @param GetVulSummaryRequest $request
     *
     * @return GetVulSummaryResponse
     */
    public function getVulSummary($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getVulSummaryWithOptions($request, $runtime);
    }

    /**
     * Get the First Line Work Order Statistics.
     *
     * @param request - GetWorkTaskSummaryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetWorkTaskSummaryResponse
     *
     * @param GetWorkTaskSummaryRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetWorkTaskSummaryResponse
     */
    public function getWorkTaskSummaryWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->dateType) {
            @$body['DateType'] = $request->dateType;
        }

        if (null !== $request->endDate) {
            @$body['EndDate'] = $request->endDate;
        }

        if (null !== $request->startDate) {
            @$body['StartDate'] = $request->startDate;
        }

        if (null !== $request->suspEventSource) {
            @$body['SuspEventSource'] = $request->suspEventSource;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetWorkTaskSummary',
            'version' => '2016-12-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetWorkTaskSummaryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Get the First Line Work Order Statistics.
     *
     * @param request - GetWorkTaskSummaryRequest
     *
     * @returns GetWorkTaskSummaryResponse
     *
     * @param GetWorkTaskSummaryRequest $request
     *
     * @return GetWorkTaskSummaryResponse
     */
    public function getWorkTaskSummary($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getWorkTaskSummaryWithOptions($request, $runtime);
    }

    /**
     * Service Customer Information Query.
     *
     * @param request - PageServiceCustomerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PageServiceCustomerResponse
     *
     * @param PageServiceCustomerRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return PageServiceCustomerResponse
     */
    public function pageServiceCustomerWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->authStatus) {
            @$body['AuthStatus'] = $request->authStatus;
        }

        if (null !== $request->cmAuthStatus) {
            @$body['CmAuthStatus'] = $request->cmAuthStatus;
        }

        if (null !== $request->currentPage) {
            @$body['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->endTime) {
            @$body['EndTime'] = $request->endTime;
        }

        if (null !== $request->monitorAuthStatus) {
            @$body['MonitorAuthStatus'] = $request->monitorAuthStatus;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->startTime) {
            @$body['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'PageServiceCustomer',
            'version' => '2016-12-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PageServiceCustomerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Service Customer Information Query.
     *
     * @param request - PageServiceCustomerRequest
     *
     * @returns PageServiceCustomerResponse
     *
     * @param PageServiceCustomerRequest $request
     *
     * @return PageServiceCustomerResponse
     */
    public function pageServiceCustomer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->pageServiceCustomerWithOptions($request, $runtime);
    }

    /**
     * Send Custom Alert Event.
     *
     * @param request - SendCustomEventRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SendCustomEventResponse
     *
     * @param SendCustomEventRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return SendCustomEventResponse
     */
    public function sendCustomEventWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->customerId) {
            @$body['CustomerId'] = $request->customerId;
        }

        if (null !== $request->dataSource) {
            @$body['DataSource'] = $request->dataSource;
        }

        if (null !== $request->eventDescription) {
            @$body['EventDescription'] = $request->eventDescription;
        }

        if (null !== $request->eventDetails) {
            @$body['EventDetails'] = $request->eventDetails;
        }

        if (null !== $request->eventMarkdown) {
            @$body['EventMarkdown'] = $request->eventMarkdown;
        }

        if (null !== $request->eventName) {
            @$body['EventName'] = $request->eventName;
        }

        if (null !== $request->eventType) {
            @$body['EventType'] = $request->eventType;
        }

        if (null !== $request->findTime) {
            @$body['FindTime'] = $request->findTime;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->instanceName) {
            @$body['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->isSend) {
            @$body['IsSend'] = $request->isSend;
        }

        if (null !== $request->level) {
            @$body['Level'] = $request->level;
        }

        if (null !== $request->occurrenceTime) {
            @$body['OccurrenceTime'] = $request->occurrenceTime;
        }

        if (null !== $request->ownerId) {
            @$body['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->product) {
            @$body['Product'] = $request->product;
        }

        if (null !== $request->uniqueId) {
            @$body['UniqueId'] = $request->uniqueId;
        }

        if (null !== $request->uuid) {
            @$body['Uuid'] = $request->uuid;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SendCustomEvent',
            'version' => '2016-12-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SendCustomEventResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Send Custom Alert Event.
     *
     * @param request - SendCustomEventRequest
     *
     * @returns SendCustomEventResponse
     *
     * @param SendCustomEventRequest $request
     *
     * @return SendCustomEventResponse
     */
    public function sendCustomEvent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sendCustomEventWithOptions($request, $runtime);
    }
}
