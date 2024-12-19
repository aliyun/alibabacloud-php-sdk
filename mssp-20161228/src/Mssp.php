<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mssp\V20161228;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
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
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @summary Confirm Receipt of Security Assessment Report
     *  *
     * @param ConfirmDjbhReportRequest $request ConfirmDjbhReportRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ConfirmDjbhReportResponse ConfirmDjbhReportResponse
     */
    public function confirmDjbhReportWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ConfirmDjbhReport',
            'version'     => '2016-12-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ConfirmDjbhReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Confirm Receipt of Security Assessment Report
     *  *
     * @param ConfirmDjbhReportRequest $request ConfirmDjbhReportRequest
     *
     * @return ConfirmDjbhReportResponse ConfirmDjbhReportResponse
     */
    public function confirmDjbhReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->confirmDjbhReportWithOptions($request, $runtime);
    }

    /**
     * @summary Create Service-Linked Role
     *  *
     * @param CreateServiceLinkedRoleRequest $request CreateServiceLinkedRoleRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateServiceLinkedRoleResponse CreateServiceLinkedRoleResponse
     */
    public function createServiceLinkedRoleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateServiceLinkedRole',
            'version'     => '2016-12-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateServiceLinkedRoleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Create Service-Linked Role
     *  *
     * @param CreateServiceLinkedRoleRequest $request CreateServiceLinkedRoleRequest
     *
     * @return CreateServiceLinkedRoleResponse CreateServiceLinkedRoleResponse
     */
    public function createServiceLinkedRole($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createServiceLinkedRoleWithOptions($request, $runtime);
    }

    /**
     * @summary Create Service Work Order
     *  *
     * @param CreateServiceWorkOrderRequest $request CreateServiceWorkOrderRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateServiceWorkOrderResponse CreateServiceWorkOrderResponse
     */
    public function createServiceWorkOrderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->creator)) {
            $body['Creator'] = $request->creator;
        }
        if (!Utils::isUnset($request->customerId)) {
            $body['CustomerId'] = $request->customerId;
        }
        if (!Utils::isUnset($request->durationDay)) {
            $body['DurationDay'] = $request->durationDay;
        }
        if (!Utils::isUnset($request->isAttachment)) {
            $body['IsAttachment'] = $request->isAttachment;
        }
        if (!Utils::isUnset($request->isWorkOrderNotify)) {
            $body['IsWorkOrderNotify'] = $request->isWorkOrderNotify;
        }
        if (!Utils::isUnset($request->notifyDay)) {
            $body['NotifyDay'] = $request->notifyDay;
        }
        if (!Utils::isUnset($request->notifyId)) {
            $body['NotifyId'] = $request->notifyId;
        }
        if (!Utils::isUnset($request->operateRemark)) {
            $body['OperateRemark'] = $request->operateRemark;
        }
        if (!Utils::isUnset($request->operateType)) {
            $body['OperateType'] = $request->operateType;
        }
        if (!Utils::isUnset($request->operator)) {
            $body['Operator'] = $request->operator;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $body['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->workOrderDetail)) {
            $body['WorkOrderDetail'] = $request->workOrderDetail;
        }
        if (!Utils::isUnset($request->workOrderName)) {
            $body['WorkOrderName'] = $request->workOrderName;
        }
        if (!Utils::isUnset($request->workOrderSource)) {
            $body['WorkOrderSource'] = $request->workOrderSource;
        }
        if (!Utils::isUnset($request->workOrderStatus)) {
            $body['WorkOrderStatus'] = $request->workOrderStatus;
        }
        if (!Utils::isUnset($request->workOrderType)) {
            $body['WorkOrderType'] = $request->workOrderType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateServiceWorkOrder',
            'version'     => '2016-12-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateServiceWorkOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Create Service Work Order
     *  *
     * @param CreateServiceWorkOrderRequest $request CreateServiceWorkOrderRequest
     *
     * @return CreateServiceWorkOrderResponse CreateServiceWorkOrderResponse
     */
    public function createServiceWorkOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createServiceWorkOrderWithOptions($request, $runtime);
    }

    /**
     * @summary Delete Security Assessment Report
     *  *
     * @param DeleteDjbhReportRequest $request DeleteDjbhReportRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteDjbhReportResponse DeleteDjbhReportResponse
     */
    public function deleteDjbhReportWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteDjbhReport',
            'version'     => '2016-12-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDjbhReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Delete Security Assessment Report
     *  *
     * @param DeleteDjbhReportRequest $request DeleteDjbhReportRequest
     *
     * @return DeleteDjbhReportResponse DeleteDjbhReportResponse
     */
    public function deleteDjbhReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDjbhReportWithOptions($request, $runtime);
    }

    /**
     * @summary Query Service-Linked Role
     *  *
     * @param DescribeServiceLinkedRoleRequest $request DescribeServiceLinkedRoleRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeServiceLinkedRoleResponse DescribeServiceLinkedRoleResponse
     */
    public function describeServiceLinkedRoleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeServiceLinkedRole',
            'version'     => '2016-12-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeServiceLinkedRoleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Query Service-Linked Role
     *  *
     * @param DescribeServiceLinkedRoleRequest $request DescribeServiceLinkedRoleRequest
     *
     * @return DescribeServiceLinkedRoleResponse DescribeServiceLinkedRoleResponse
     */
    public function describeServiceLinkedRole($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeServiceLinkedRoleWithOptions($request, $runtime);
    }

    /**
     * @summary Process Service Work Order
     *  *
     * @param DisposeServiceWorkOrderRequest $request DisposeServiceWorkOrderRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DisposeServiceWorkOrderResponse DisposeServiceWorkOrderResponse
     */
    public function disposeServiceWorkOrderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->attachmentName)) {
            $body['AttachmentName'] = $request->attachmentName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $body['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->forwardOwnerId)) {
            $body['ForwardOwnerId'] = $request->forwardOwnerId;
        }
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->isAttachment)) {
            $body['IsAttachment'] = $request->isAttachment;
        }
        if (!Utils::isUnset($request->isWorkOrderNotify)) {
            $body['IsWorkOrderNotify'] = $request->isWorkOrderNotify;
        }
        if (!Utils::isUnset($request->notifyId)) {
            $body['NotifyId'] = $request->notifyId;
        }
        if (!Utils::isUnset($request->operateRemark)) {
            $body['OperateRemark'] = $request->operateRemark;
        }
        if (!Utils::isUnset($request->operateType)) {
            $body['OperateType'] = $request->operateType;
        }
        if (!Utils::isUnset($request->operator)) {
            $body['Operator'] = $request->operator;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->upgradeOwnerId)) {
            $body['UpgradeOwnerId'] = $request->upgradeOwnerId;
        }
        if (!Utils::isUnset($request->workOrderDetail)) {
            $body['WorkOrderDetail'] = $request->workOrderDetail;
        }
        if (!Utils::isUnset($request->workOrderName)) {
            $body['WorkOrderName'] = $request->workOrderName;
        }
        if (!Utils::isUnset($request->workOrderStatus)) {
            $body['WorkOrderStatus'] = $request->workOrderStatus;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DisposeServiceWorkOrder',
            'version'     => '2016-12-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DisposeServiceWorkOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Process Service Work Order
     *  *
     * @param DisposeServiceWorkOrderRequest $request DisposeServiceWorkOrderRequest
     *
     * @return DisposeServiceWorkOrderResponse DisposeServiceWorkOrderResponse
     */
    public function disposeServiceWorkOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disposeServiceWorkOrderWithOptions($request, $runtime);
    }

    /**
     * @summary Handle Alert Work Order
     *  *
     * @param DisposeWorkTaskRequest $request DisposeWorkTaskRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DisposeWorkTaskResponse DisposeWorkTaskResponse
     */
    public function disposeWorkTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->operator)) {
            $body['Operator'] = $request->operator;
        }
        if (!Utils::isUnset($request->optRemark)) {
            $body['OptRemark'] = $request->optRemark;
        }
        if (!Utils::isUnset($request->status)) {
            $body['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->taskIds)) {
            $body['TaskIds'] = $request->taskIds;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DisposeWorkTask',
            'version'     => '2016-12-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DisposeWorkTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Handle Alert Work Order
     *  *
     * @param DisposeWorkTaskRequest $request DisposeWorkTaskRequest
     *
     * @return DisposeWorkTaskResponse DisposeWorkTaskResponse
     */
    public function disposeWorkTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disposeWorkTaskWithOptions($request, $runtime);
    }

    /**
     * @summary Query Alarm Details
     *  *
     * @param GetAlarmDetailByIdRequest $request GetAlarmDetailByIdRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAlarmDetailByIdResponse GetAlarmDetailByIdResponse
     */
    public function getAlarmDetailByIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetAlarmDetailById',
            'version'     => '2016-12-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAlarmDetailByIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Query Alarm Details
     *  *
     * @param GetAlarmDetailByIdRequest $request GetAlarmDetailByIdRequest
     *
     * @return GetAlarmDetailByIdResponse GetAlarmDetailByIdResponse
     */
    public function getAlarmDetailById($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAlarmDetailByIdWithOptions($request, $runtime);
    }

    /**
     * @summary Trend of Attacked Asset Convergence
     *  *
     * @param GetAttackedAssetDealRequest $request GetAttackedAssetDealRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAttackedAssetDealResponse GetAttackedAssetDealResponse
     */
    public function getAttackedAssetDealWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->dateType)) {
            $body['DateType'] = $request->dateType;
        }
        if (!Utils::isUnset($request->endDate)) {
            $body['EndDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->startDate)) {
            $body['StartDate'] = $request->startDate;
        }
        if (!Utils::isUnset($request->suspEventSource)) {
            $body['SuspEventSource'] = $request->suspEventSource;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetAttackedAssetDeal',
            'version'     => '2016-12-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAttackedAssetDealResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Trend of Attacked Asset Convergence
     *  *
     * @param GetAttackedAssetDealRequest $request GetAttackedAssetDealRequest
     *
     * @return GetAttackedAssetDealResponse GetAttackedAssetDealResponse
     */
    public function getAttackedAssetDeal($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAttackedAssetDealWithOptions($request, $runtime);
    }

    /**
     * @summary Compliance Risk Convergence Trend
     *  *
     * @param GetBaselineSummaryRequest $request GetBaselineSummaryRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return GetBaselineSummaryResponse GetBaselineSummaryResponse
     */
    public function getBaselineSummaryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->dateType)) {
            $body['DateType'] = $request->dateType;
        }
        if (!Utils::isUnset($request->endDate)) {
            $body['EndDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->startDate)) {
            $body['StartDate'] = $request->startDate;
        }
        if (!Utils::isUnset($request->suspEventSource)) {
            $body['SuspEventSource'] = $request->suspEventSource;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetBaselineSummary',
            'version'     => '2016-12-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetBaselineSummaryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Compliance Risk Convergence Trend
     *  *
     * @param GetBaselineSummaryRequest $request GetBaselineSummaryRequest
     *
     * @return GetBaselineSummaryResponse GetBaselineSummaryResponse
     */
    public function getBaselineSummary($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBaselineSummaryWithOptions($request, $runtime);
    }

    /**
     * @summary Get Console Score
     *  *
     * @param GetConsoleScoreRequest $request GetConsoleScoreRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return GetConsoleScoreResponse GetConsoleScoreResponse
     */
    public function getConsoleScoreWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->dateType)) {
            $body['DateType'] = $request->dateType;
        }
        if (!Utils::isUnset($request->endDate)) {
            $body['EndDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->startDate)) {
            $body['StartDate'] = $request->startDate;
        }
        if (!Utils::isUnset($request->suspEventSource)) {
            $body['SuspEventSource'] = $request->suspEventSource;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetConsoleScore',
            'version'     => '2016-12-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetConsoleScoreResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Get Console Score
     *  *
     * @param GetConsoleScoreRequest $request GetConsoleScoreRequest
     *
     * @return GetConsoleScoreResponse GetConsoleScoreResponse
     */
    public function getConsoleScore($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getConsoleScoreWithOptions($request, $runtime);
    }

    /**
     * @summary Query Risk Details
     *  *
     * @param GetDetailByIdRequest $request GetDetailByIdRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return GetDetailByIdResponse GetDetailByIdResponse
     */
    public function getDetailByIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetDetailById',
            'version'     => '2016-12-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDetailByIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Query Risk Details
     *  *
     * @param GetDetailByIdRequest $request GetDetailByIdRequest
     *
     * @return GetDetailByIdResponse GetDetailByIdResponse
     */
    public function getDetailById($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDetailByIdWithOptions($request, $runtime);
    }

    /**
     * @summary Single Service Report Download
     *  *
     * @param GetDocumentDownloadUrlRequest $request GetDocumentDownloadUrlRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return GetDocumentDownloadUrlResponse GetDocumentDownloadUrlResponse
     */
    public function getDocumentDownloadUrlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->reportType)) {
            $body['ReportType'] = $request->reportType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetDocumentDownloadUrl',
            'version'     => '2016-12-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDocumentDownloadUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Single Service Report Download
     *  *
     * @param GetDocumentDownloadUrlRequest $request GetDocumentDownloadUrlRequest
     *
     * @return GetDocumentDownloadUrlResponse GetDocumentDownloadUrlResponse
     */
    public function getDocumentDownloadUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDocumentDownloadUrlWithOptions($request, $runtime);
    }

    /**
     * @summary Service Report Query
     *  *
     * @param GetDocumentPageRequest $request GetDocumentPageRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return GetDocumentPageResponse GetDocumentPageResponse
     */
    public function getDocumentPageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->currentPage)) {
            $body['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->deliveredBy)) {
            $body['DeliveredBy'] = $request->deliveredBy;
        }
        if (!Utils::isUnset($request->documentName)) {
            $body['DocumentName'] = $request->documentName;
        }
        if (!Utils::isUnset($request->documentType)) {
            $body['DocumentType'] = $request->documentType;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->reportType)) {
            $body['ReportType'] = $request->reportType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetDocumentPage',
            'version'     => '2016-12-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDocumentPageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Service Report Query
     *  *
     * @param GetDocumentPageRequest $request GetDocumentPageRequest
     *
     * @return GetDocumentPageResponse GetDocumentPageResponse
     */
    public function getDocumentPage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDocumentPageWithOptions($request, $runtime);
    }

    /**
     * @summary Service Report Home Page Statistics Acquisition
     *  *
     * @param GetDocumentSummaryRequest $request GetDocumentSummaryRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return GetDocumentSummaryResponse GetDocumentSummaryResponse
     */
    public function getDocumentSummaryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->reportType)) {
            $body['ReportType'] = $request->reportType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetDocumentSummary',
            'version'     => '2016-12-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDocumentSummaryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Service Report Home Page Statistics Acquisition
     *  *
     * @param GetDocumentSummaryRequest $request GetDocumentSummaryRequest
     *
     * @return GetDocumentSummaryResponse GetDocumentSummaryResponse
     */
    public function getDocumentSummary($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDocumentSummaryWithOptions($request, $runtime);
    }

    /**
     * @summary Get Recently Uploaded Service Reports
     *  *
     * @param GetRecentDocumentRequest $request GetRecentDocumentRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return GetRecentDocumentResponse GetRecentDocumentResponse
     */
    public function getRecentDocumentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->dateType)) {
            $body['DateType'] = $request->dateType;
        }
        if (!Utils::isUnset($request->endDate)) {
            $body['EndDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->startDate)) {
            $body['StartDate'] = $request->startDate;
        }
        if (!Utils::isUnset($request->suspEventSource)) {
            $body['SuspEventSource'] = $request->suspEventSource;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetRecentDocument',
            'version'     => '2016-12-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetRecentDocumentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Get Recently Uploaded Service Reports
     *  *
     * @param GetRecentDocumentRequest $request GetRecentDocumentRequest
     *
     * @return GetRecentDocumentResponse GetRecentDocumentResponse
     */
    public function getRecentDocument($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRecentDocumentWithOptions($request, $runtime);
    }

    /**
     * @summary Get Safety Coverage
     *  *
     * @param GetSafetyCoverRequest $request GetSafetyCoverRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return GetSafetyCoverResponse GetSafetyCoverResponse
     */
    public function getSafetyCoverWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->dateType)) {
            $body['DateType'] = $request->dateType;
        }
        if (!Utils::isUnset($request->endDate)) {
            $body['EndDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->startDate)) {
            $body['StartDate'] = $request->startDate;
        }
        if (!Utils::isUnset($request->suspEventSource)) {
            $body['SuspEventSource'] = $request->suspEventSource;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetSafetyCover',
            'version'     => '2016-12-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetSafetyCoverResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Get Safety Coverage
     *  *
     * @param GetSafetyCoverRequest $request GetSafetyCoverRequest
     *
     * @return GetSafetyCoverResponse GetSafetyCoverResponse
     */
    public function getSafetyCover($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSafetyCoverWithOptions($request, $runtime);
    }

    /**
     * @summary Get SOW List
     *  *
     * @param GetSowListRequest $request GetSowListRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return GetSowListResponse GetSowListResponse
     */
    public function getSowListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->dateType)) {
            $body['DateType'] = $request->dateType;
        }
        if (!Utils::isUnset($request->endDate)) {
            $body['EndDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->startDate)) {
            $body['StartDate'] = $request->startDate;
        }
        if (!Utils::isUnset($request->suspEventSource)) {
            $body['SuspEventSource'] = $request->suspEventSource;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetSowList',
            'version'     => '2016-12-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetSowListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Get SOW List
     *  *
     * @param GetSowListRequest $request GetSowListRequest
     *
     * @return GetSowListResponse GetSowListResponse
     */
    public function getSowList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSowListWithOptions($request, $runtime);
    }

    /**
     * @summary Alarm Disposal Query
     *  *
     * @param GetSuspEventPageRequest $request GetSuspEventPageRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return GetSuspEventPageResponse GetSuspEventPageResponse
     */
    public function getSuspEventPageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->alarmEndTime)) {
            $body['AlarmEndTime'] = $request->alarmEndTime;
        }
        if (!Utils::isUnset($request->alarmStartTime)) {
            $body['AlarmStartTime'] = $request->alarmStartTime;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $body['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->source)) {
            $body['Source'] = $request->source;
        }
        if (!Utils::isUnset($request->status)) {
            $body['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetSuspEventPage',
            'version'     => '2016-12-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetSuspEventPageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Alarm Disposal Query
     *  *
     * @param GetSuspEventPageRequest $request GetSuspEventPageRequest
     *
     * @return GetSuspEventPageResponse GetSuspEventPageResponse
     */
    public function getSuspEventPage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSuspEventPageWithOptions($request, $runtime);
    }

    /**
     * @summary Get Alert Statistics
     *  *
     * @param GetSuspEventSummaryRequest $request GetSuspEventSummaryRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return GetSuspEventSummaryResponse GetSuspEventSummaryResponse
     */
    public function getSuspEventSummaryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->dateType)) {
            $body['DateType'] = $request->dateType;
        }
        if (!Utils::isUnset($request->endDate)) {
            $body['EndDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->startDate)) {
            $body['StartDate'] = $request->startDate;
        }
        if (!Utils::isUnset($request->suspEventSource)) {
            $body['SuspEventSource'] = $request->suspEventSource;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetSuspEventSummary',
            'version'     => '2016-12-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetSuspEventSummaryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Get Alert Statistics
     *  *
     * @param GetSuspEventSummaryRequest $request GetSuspEventSummaryRequest
     *
     * @return GetSuspEventSummaryResponse GetSuspEventSummaryResponse
     */
    public function getSuspEventSummary($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSuspEventSummaryWithOptions($request, $runtime);
    }

    /**
     * @summary Alarm Page Statistics
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetSuspPageSummaryResponse GetSuspPageSummaryResponse
     */
    public function getSuspPageSummaryWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'GetSuspPageSummary',
            'version'     => '2016-12-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetSuspPageSummaryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Alarm Page Statistics
     *  *
     * @return GetSuspPageSummaryResponse GetSuspPageSummaryResponse
     */
    public function getSuspPageSummary()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSuspPageSummaryWithOptions($runtime);
    }

    /**
     * @summary Query User Activation Status
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetUserStatusResponse GetUserStatusResponse
     */
    public function getUserStatusWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'GetUserStatus',
            'version'     => '2016-12-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetUserStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Query User Activation Status
     *  *
     * @return GetUserStatusResponse GetUserStatusResponse
     */
    public function getUserStatus()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUserStatusWithOptions($runtime);
    }

    /**
     * @summary Risk Query
     *  *
     * @param GetVulItemPageRequest $request GetVulItemPageRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return GetVulItemPageResponse GetVulItemPageResponse
     */
    public function getVulItemPageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->aliasName)) {
            $body['AliasName'] = $request->aliasName;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $body['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->dealed)) {
            $body['Dealed'] = $request->dealed;
        }
        if (!Utils::isUnset($request->level)) {
            $body['Level'] = $request->level;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->scanType)) {
            $body['ScanType'] = $request->scanType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetVulItemPage',
            'version'     => '2016-12-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetVulItemPageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Risk Query
     *  *
     * @param GetVulItemPageRequest $request GetVulItemPageRequest
     *
     * @return GetVulItemPageResponse GetVulItemPageResponse
     */
    public function getVulItemPage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getVulItemPageWithOptions($request, $runtime);
    }

    /**
     * @summary Query processed details
     *  *
     * @param GetVulListByIdRequest $request GetVulListByIdRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return GetVulListByIdResponse GetVulListByIdResponse
     */
    public function getVulListByIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->currentPage)) {
            $body['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->dealed)) {
            $body['Dealed'] = $request->dealed;
        }
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->necessity)) {
            $body['Necessity'] = $request->necessity;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->remark)) {
            $body['Remark'] = $request->remark;
        }
        if (!Utils::isUnset($request->uuids)) {
            $body['Uuids'] = $request->uuids;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetVulListById',
            'version'     => '2016-12-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetVulListByIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Query processed details
     *  *
     * @param GetVulListByIdRequest $request GetVulListByIdRequest
     *
     * @return GetVulListByIdResponse GetVulListByIdResponse
     */
    public function getVulListById($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getVulListByIdWithOptions($request, $runtime);
    }

    /**
     * @summary Risk Page Statistics
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetVulPageSummaryResponse GetVulPageSummaryResponse
     */
    public function getVulPageSummaryWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'GetVulPageSummary',
            'version'     => '2016-12-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetVulPageSummaryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Risk Page Statistics
     *  *
     * @return GetVulPageSummaryResponse GetVulPageSummaryResponse
     */
    public function getVulPageSummary()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getVulPageSummaryWithOptions($runtime);
    }

    /**
     * @summary Get Risk Statistics
     *  *
     * @param GetVulSummaryRequest $request GetVulSummaryRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return GetVulSummaryResponse GetVulSummaryResponse
     */
    public function getVulSummaryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->dateType)) {
            $body['DateType'] = $request->dateType;
        }
        if (!Utils::isUnset($request->endDate)) {
            $body['EndDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->startDate)) {
            $body['StartDate'] = $request->startDate;
        }
        if (!Utils::isUnset($request->suspEventSource)) {
            $body['SuspEventSource'] = $request->suspEventSource;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetVulSummary',
            'version'     => '2016-12-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetVulSummaryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Get Risk Statistics
     *  *
     * @param GetVulSummaryRequest $request GetVulSummaryRequest
     *
     * @return GetVulSummaryResponse GetVulSummaryResponse
     */
    public function getVulSummary($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getVulSummaryWithOptions($request, $runtime);
    }

    /**
     * @summary Get the First Line Work Order Statistics
     *  *
     * @param GetWorkTaskSummaryRequest $request GetWorkTaskSummaryRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return GetWorkTaskSummaryResponse GetWorkTaskSummaryResponse
     */
    public function getWorkTaskSummaryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->dateType)) {
            $body['DateType'] = $request->dateType;
        }
        if (!Utils::isUnset($request->endDate)) {
            $body['EndDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->startDate)) {
            $body['StartDate'] = $request->startDate;
        }
        if (!Utils::isUnset($request->suspEventSource)) {
            $body['SuspEventSource'] = $request->suspEventSource;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetWorkTaskSummary',
            'version'     => '2016-12-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetWorkTaskSummaryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Get the First Line Work Order Statistics
     *  *
     * @param GetWorkTaskSummaryRequest $request GetWorkTaskSummaryRequest
     *
     * @return GetWorkTaskSummaryResponse GetWorkTaskSummaryResponse
     */
    public function getWorkTaskSummary($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getWorkTaskSummaryWithOptions($request, $runtime);
    }

    /**
     * @summary Service Customer Information Query
     *  *
     * @param PageServiceCustomerRequest $request PageServiceCustomerRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return PageServiceCustomerResponse PageServiceCustomerResponse
     */
    public function pageServiceCustomerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->authStatus)) {
            $body['AuthStatus'] = $request->authStatus;
        }
        if (!Utils::isUnset($request->cmAuthStatus)) {
            $body['CmAuthStatus'] = $request->cmAuthStatus;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $body['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->endTime)) {
            $body['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->monitorAuthStatus)) {
            $body['MonitorAuthStatus'] = $request->monitorAuthStatus;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'PageServiceCustomer',
            'version'     => '2016-12-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PageServiceCustomerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Service Customer Information Query
     *  *
     * @param PageServiceCustomerRequest $request PageServiceCustomerRequest
     *
     * @return PageServiceCustomerResponse PageServiceCustomerResponse
     */
    public function pageServiceCustomer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->pageServiceCustomerWithOptions($request, $runtime);
    }

    /**
     * @summary Send Custom Alert Event
     *  *
     * @param SendCustomEventRequest $request SendCustomEventRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return SendCustomEventResponse SendCustomEventResponse
     */
    public function sendCustomEventWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->customerId)) {
            $body['CustomerId'] = $request->customerId;
        }
        if (!Utils::isUnset($request->dataSource)) {
            $body['DataSource'] = $request->dataSource;
        }
        if (!Utils::isUnset($request->eventDescription)) {
            $body['EventDescription'] = $request->eventDescription;
        }
        if (!Utils::isUnset($request->eventDetails)) {
            $body['EventDetails'] = $request->eventDetails;
        }
        if (!Utils::isUnset($request->eventName)) {
            $body['EventName'] = $request->eventName;
        }
        if (!Utils::isUnset($request->eventType)) {
            $body['EventType'] = $request->eventType;
        }
        if (!Utils::isUnset($request->findTime)) {
            $body['FindTime'] = $request->findTime;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->instanceName)) {
            $body['InstanceName'] = $request->instanceName;
        }
        if (!Utils::isUnset($request->isSend)) {
            $body['IsSend'] = $request->isSend;
        }
        if (!Utils::isUnset($request->level)) {
            $body['Level'] = $request->level;
        }
        if (!Utils::isUnset($request->occurrenceTime)) {
            $body['OccurrenceTime'] = $request->occurrenceTime;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $body['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->product)) {
            $body['Product'] = $request->product;
        }
        if (!Utils::isUnset($request->uniqueId)) {
            $body['UniqueId'] = $request->uniqueId;
        }
        if (!Utils::isUnset($request->uuid)) {
            $body['Uuid'] = $request->uuid;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SendCustomEvent',
            'version'     => '2016-12-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SendCustomEventResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Send Custom Alert Event
     *  *
     * @param SendCustomEventRequest $request SendCustomEventRequest
     *
     * @return SendCustomEventResponse SendCustomEventResponse
     */
    public function sendCustomEvent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sendCustomEventWithOptions($request, $runtime);
    }
}
