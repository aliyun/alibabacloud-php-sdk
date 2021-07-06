<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ApproveOrderRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ApproveOrderResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CloseOrderRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CloseOrderResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateDataCorrectOrderRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateDataCorrectOrderResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateDataCorrectOrderShrinkRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateDataCronClearOrderRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateDataCronClearOrderResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateDataCronClearOrderShrinkRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateDataImportOrderRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateDataImportOrderResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateDataImportOrderShrinkRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateFreeLockCorrectOrderRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateFreeLockCorrectOrderResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateFreeLockCorrectOrderShrinkRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateOrderRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateOrderResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateOrderShrinkRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreatePublishGroupTaskRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreatePublishGroupTaskResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateSQLReviewOrderRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateSQLReviewOrderResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateSQLReviewOrderShrinkRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateStructSyncOrderRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateStructSyncOrderResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateStructSyncOrderShrinkRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateUploadFileJobRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateUploadFileJobResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateUploadOSSFileJobRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateUploadOSSFileJobResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateUploadOSSFileJobShrinkRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\DeleteInstanceRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\DeleteInstanceResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\DeleteUserRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\DeleteUserResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\DisableUserRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\DisableUserResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\EnableUserRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\EnableUserResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ExecuteDataCorrectRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ExecuteDataCorrectResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ExecuteDataCorrectShrinkRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ExecuteDataExportRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ExecuteDataExportResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ExecuteDataExportShrinkRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ExecuteScriptRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ExecuteScriptResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ExecuteStructSyncRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ExecuteStructSyncResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetApprovalDetailRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetApprovalDetailResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDatabaseRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDatabaseResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataCorrectBackupFilesRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataCorrectBackupFilesResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataCorrectBackupFilesShrinkRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataCorrectOrderDetailRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataCorrectOrderDetailResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataCorrectSQLFileRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataCorrectSQLFileResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataCorrectTaskDetailRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataCorrectTaskDetailResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataCronClearTaskDetailListRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataCronClearTaskDetailListResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataExportDownloadURLRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataExportDownloadURLResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataExportOrderDetailRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataExportOrderDetailResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDBTopologyRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDBTopologyResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetInstanceRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetInstanceResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetLogicDatabaseRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetLogicDatabaseResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetMetaTableColumnRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetMetaTableColumnResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetMetaTableDetailInfoRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetMetaTableDetailInfoResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetOpLogRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetOpLogResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetOrderBaseInfoRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetOrderBaseInfoResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetOwnerApplyOrderDetailRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetOwnerApplyOrderDetailResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetPermApplyOrderDetailRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetPermApplyOrderDetailResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetPhysicalDatabaseRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetPhysicalDatabaseResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetSQLReviewCheckResultStatusRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetSQLReviewCheckResultStatusResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetSQLReviewOptimizeDetailRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetSQLReviewOptimizeDetailResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetStructSyncExecSqlDetailRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetStructSyncExecSqlDetailResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetStructSyncJobAnalyzeResultRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetStructSyncJobAnalyzeResultResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetStructSyncJobDetailRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetStructSyncJobDetailResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetStructSyncOrderDetailRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetStructSyncOrderDetailResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetTableDBTopologyRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetTableDBTopologyResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetTableTopologyRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetTableTopologyResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetUserActiveTenantRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetUserActiveTenantResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetUserRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetUserResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetUserUploadFileJobRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetUserUploadFileJobResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GrantUserPermissionRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GrantUserPermissionResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListColumnsRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListColumnsResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListDatabasesRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListDatabasesResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListDatabaseUserPermssionsRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListDatabaseUserPermssionsResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListDataCorrectPreCheckDBRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListDataCorrectPreCheckDBResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListDataCorrectPreCheckSQLRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListDataCorrectPreCheckSQLResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListDBTaskSQLJobDetailRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListDBTaskSQLJobDetailResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListDBTaskSQLJobRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListDBTaskSQLJobResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListDDLPublishRecordsRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListDDLPublishRecordsResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListIndexesRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListIndexesResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListInstancesRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListInstancesResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListLogicDatabasesRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListLogicDatabasesResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListLogicTablesRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListLogicTablesResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListOrdersRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListOrdersResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListSensitiveColumnsDetailRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListSensitiveColumnsDetailResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListSensitiveColumnsRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListSensitiveColumnsResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListSQLReviewOriginSQLRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListSQLReviewOriginSQLResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListSQLReviewOriginSQLShrinkRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListTablesRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListTablesResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListUserPermissionsRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListUserPermissionsResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListUsersRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListUsersResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListUserTenantsRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListUserTenantsResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListWorkFlowNodesRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListWorkFlowNodesResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListWorkFlowTemplatesRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListWorkFlowTemplatesResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\RegisterInstanceRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\RegisterInstanceResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\RegisterUserRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\RegisterUserResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\RevokeUserPermissionRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\RevokeUserPermissionResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\SearchDatabaseRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\SearchDatabaseResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\SearchTableRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\SearchTableResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\SetOwnersRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\SetOwnersResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\SubmitOrderApprovalRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\SubmitOrderApprovalResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\SubmitStructSyncOrderApprovalRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\SubmitStructSyncOrderApprovalResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\SyncDatabaseMetaRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\SyncDatabaseMetaResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\SyncInstanceMetaRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\SyncInstanceMetaResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\UpdateInstanceRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\UpdateInstanceResponse;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\UpdateUserRequest;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\UpdateUserResponse;
use AlibabaCloud\Tea\Tea;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

class Dmsenterprise extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'central';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('dms-enterprise', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param SubmitStructSyncOrderApprovalRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return SubmitStructSyncOrderApprovalResponse
     */
    public function submitStructSyncOrderApprovalWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SubmitStructSyncOrderApprovalResponse::fromMap($this->doRPCRequest('SubmitStructSyncOrderApproval', '2018-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SubmitStructSyncOrderApprovalRequest $request
     *
     * @return SubmitStructSyncOrderApprovalResponse
     */
    public function submitStructSyncOrderApproval($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitStructSyncOrderApprovalWithOptions($request, $runtime);
    }

    /**
     * @param ListDatabaseUserPermssionsRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ListDatabaseUserPermssionsResponse
     */
    public function listDatabaseUserPermssionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListDatabaseUserPermssionsResponse::fromMap($this->doRPCRequest('ListDatabaseUserPermssions', '2018-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListDatabaseUserPermssionsRequest $request
     *
     * @return ListDatabaseUserPermssionsResponse
     */
    public function listDatabaseUserPermssions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDatabaseUserPermssionsWithOptions($request, $runtime);
    }

    /**
     * @param ListSensitiveColumnsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListSensitiveColumnsResponse
     */
    public function listSensitiveColumnsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListSensitiveColumnsResponse::fromMap($this->doRPCRequest('ListSensitiveColumns', '2018-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListSensitiveColumnsRequest $request
     *
     * @return ListSensitiveColumnsResponse
     */
    public function listSensitiveColumns($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSensitiveColumnsWithOptions($request, $runtime);
    }

    /**
     * @param ListUsersRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ListUsersResponse
     */
    public function listUsersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListUsersResponse::fromMap($this->doRPCRequest('ListUsers', '2018-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListUsersRequest $request
     *
     * @return ListUsersResponse
     */
    public function listUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUsersWithOptions($request, $runtime);
    }

    /**
     * @param SubmitOrderApprovalRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return SubmitOrderApprovalResponse
     */
    public function submitOrderApprovalWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SubmitOrderApprovalResponse::fromMap($this->doRPCRequest('SubmitOrderApproval', '2018-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SubmitOrderApprovalRequest $request
     *
     * @return SubmitOrderApprovalResponse
     */
    public function submitOrderApproval($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitOrderApprovalWithOptions($request, $runtime);
    }

    /**
     * @param GrantUserPermissionRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GrantUserPermissionResponse
     */
    public function grantUserPermissionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GrantUserPermissionResponse::fromMap($this->doRPCRequest('GrantUserPermission', '2018-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GrantUserPermissionRequest $request
     *
     * @return GrantUserPermissionResponse
     */
    public function grantUserPermission($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->grantUserPermissionWithOptions($request, $runtime);
    }

    /**
     * @param GetMetaTableDetailInfoRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetMetaTableDetailInfoResponse
     */
    public function getMetaTableDetailInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetMetaTableDetailInfoResponse::fromMap($this->doRPCRequest('GetMetaTableDetailInfo', '2018-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetMetaTableDetailInfoRequest $request
     *
     * @return GetMetaTableDetailInfoResponse
     */
    public function getMetaTableDetailInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMetaTableDetailInfoWithOptions($request, $runtime);
    }

    /**
     * @param GetDataCorrectSQLFileRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetDataCorrectSQLFileResponse
     */
    public function getDataCorrectSQLFileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetDataCorrectSQLFileResponse::fromMap($this->doRPCRequest('GetDataCorrectSQLFile', '2018-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetDataCorrectSQLFileRequest $request
     *
     * @return GetDataCorrectSQLFileResponse
     */
    public function getDataCorrectSQLFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDataCorrectSQLFileWithOptions($request, $runtime);
    }

    /**
     * @param CreateFreeLockCorrectOrderRequest $tmpReq
     * @param RuntimeOptions                    $runtime
     *
     * @return CreateFreeLockCorrectOrderResponse
     */
    public function createFreeLockCorrectOrderWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateFreeLockCorrectOrderShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->relatedUserList)) {
            $request->relatedUserListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->relatedUserList, 'RelatedUserList', 'json');
        }
        if (!Utils::isUnset($tmpReq->param)) {
            $request->paramShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->param), 'Param', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateFreeLockCorrectOrderResponse::fromMap($this->doRPCRequest('CreateFreeLockCorrectOrder', '2018-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateFreeLockCorrectOrderRequest $request
     *
     * @return CreateFreeLockCorrectOrderResponse
     */
    public function createFreeLockCorrectOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFreeLockCorrectOrderWithOptions($request, $runtime);
    }

    /**
     * @param CreateOrderRequest $tmpReq
     * @param RuntimeOptions     $runtime
     *
     * @return CreateOrderResponse
     */
    public function createOrderWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateOrderShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->pluginParam)) {
            $request->pluginParamShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->pluginParam, 'PluginParam', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateOrderResponse::fromMap($this->doRPCRequest('CreateOrder', '2018-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ListDatabasesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListDatabasesResponse
     */
    public function listDatabasesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListDatabasesResponse::fromMap($this->doRPCRequest('ListDatabases', '2018-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListDatabasesRequest $request
     *
     * @return ListDatabasesResponse
     */
    public function listDatabases($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDatabasesWithOptions($request, $runtime);
    }

    /**
     * @param ListUserPermissionsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListUserPermissionsResponse
     */
    public function listUserPermissionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListUserPermissionsResponse::fromMap($this->doRPCRequest('ListUserPermissions', '2018-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListUserPermissionsRequest $request
     *
     * @return ListUserPermissionsResponse
     */
    public function listUserPermissions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUserPermissionsWithOptions($request, $runtime);
    }

    /**
     * @param ListWorkFlowTemplatesRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListWorkFlowTemplatesResponse
     */
    public function listWorkFlowTemplatesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListWorkFlowTemplatesResponse::fromMap($this->doRPCRequest('ListWorkFlowTemplates', '2018-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListWorkFlowTemplatesRequest $request
     *
     * @return ListWorkFlowTemplatesResponse
     */
    public function listWorkFlowTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listWorkFlowTemplatesWithOptions($request, $runtime);
    }

    /**
     * @param GetDataExportOrderDetailRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetDataExportOrderDetailResponse
     */
    public function getDataExportOrderDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetDataExportOrderDetailResponse::fromMap($this->doRPCRequest('GetDataExportOrderDetail', '2018-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetDataExportOrderDetailRequest $request
     *
     * @return GetDataExportOrderDetailResponse
     */
    public function getDataExportOrderDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDataExportOrderDetailWithOptions($request, $runtime);
    }

    /**
     * @param ListInstancesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListInstancesResponse
     */
    public function listInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListInstancesResponse::fromMap($this->doRPCRequest('ListInstances', '2018-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListInstancesRequest $request
     *
     * @return ListInstancesResponse
     */
    public function listInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listInstancesWithOptions($request, $runtime);
    }

    /**
     * @param GetUserUploadFileJobRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetUserUploadFileJobResponse
     */
    public function getUserUploadFileJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetUserUploadFileJobResponse::fromMap($this->doRPCRequest('GetUserUploadFileJob', '2018-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetUserUploadFileJobRequest $request
     *
     * @return GetUserUploadFileJobResponse
     */
    public function getUserUploadFileJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUserUploadFileJobWithOptions($request, $runtime);
    }

    /**
     * @param ListDDLPublishRecordsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListDDLPublishRecordsResponse
     */
    public function listDDLPublishRecordsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListDDLPublishRecordsResponse::fromMap($this->doRPCRequest('ListDDLPublishRecords', '2018-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListDDLPublishRecordsRequest $request
     *
     * @return ListDDLPublishRecordsResponse
     */
    public function listDDLPublishRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDDLPublishRecordsWithOptions($request, $runtime);
    }

    /**
     * @param GetStructSyncJobDetailRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetStructSyncJobDetailResponse
     */
    public function getStructSyncJobDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetStructSyncJobDetailResponse::fromMap($this->doRPCRequest('GetStructSyncJobDetail', '2018-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetStructSyncJobDetailRequest $request
     *
     * @return GetStructSyncJobDetailResponse
     */
    public function getStructSyncJobDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getStructSyncJobDetailWithOptions($request, $runtime);
    }

    /**
     * @param CreateUploadOSSFileJobRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return CreateUploadOSSFileJobResponse
     */
    public function createUploadOSSFileJobWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateUploadOSSFileJobShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->uploadTarget)) {
            $request->uploadTargetShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->uploadTarget), 'UploadTarget', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateUploadOSSFileJobResponse::fromMap($this->doRPCRequest('CreateUploadOSSFileJob', '2018-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateUploadOSSFileJobRequest $request
     *
     * @return CreateUploadOSSFileJobResponse
     */
    public function createUploadOSSFileJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createUploadOSSFileJobWithOptions($request, $runtime);
    }

    /**
     * @param SearchDatabaseRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return SearchDatabaseResponse
     */
    public function searchDatabaseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SearchDatabaseResponse::fromMap($this->doRPCRequest('SearchDatabase', '2018-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SearchDatabaseRequest $request
     *
     * @return SearchDatabaseResponse
     */
    public function searchDatabase($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchDatabaseWithOptions($request, $runtime);
    }

    /**
     * @param GetDBTopologyRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetDBTopologyResponse
     */
    public function getDBTopologyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetDBTopologyResponse::fromMap($this->doRPCRequest('GetDBTopology', '2018-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetDBTopologyRequest $request
     *
     * @return GetDBTopologyResponse
     */
    public function getDBTopology($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDBTopologyWithOptions($request, $runtime);
    }

    /**
     * @param GetSQLReviewCheckResultStatusRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return GetSQLReviewCheckResultStatusResponse
     */
    public function getSQLReviewCheckResultStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetSQLReviewCheckResultStatusResponse::fromMap($this->doRPCRequest('GetSQLReviewCheckResultStatus', '2018-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetSQLReviewCheckResultStatusRequest $request
     *
     * @return GetSQLReviewCheckResultStatusResponse
     */
    public function getSQLReviewCheckResultStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSQLReviewCheckResultStatusWithOptions($request, $runtime);
    }

    /**
     * @param SyncDatabaseMetaRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return SyncDatabaseMetaResponse
     */
    public function syncDatabaseMetaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SyncDatabaseMetaResponse::fromMap($this->doRPCRequest('SyncDatabaseMeta', '2018-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SyncDatabaseMetaRequest $request
     *
     * @return SyncDatabaseMetaResponse
     */
    public function syncDatabaseMeta($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->syncDatabaseMetaWithOptions($request, $runtime);
    }

    /**
     * @param GetUserRequest $request
     * @param RuntimeOptions $runtime
     *
     * @return GetUserResponse
     */
    public function getUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetUserResponse::fromMap($this->doRPCRequest('GetUser', '2018-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetUserRequest $request
     *
     * @return GetUserResponse
     */
    public function getUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUserWithOptions($request, $runtime);
    }

    /**
     * @param ExecuteStructSyncRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ExecuteStructSyncResponse
     */
    public function executeStructSyncWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ExecuteStructSyncResponse::fromMap($this->doRPCRequest('ExecuteStructSync', '2018-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ExecuteStructSyncRequest $request
     *
     * @return ExecuteStructSyncResponse
     */
    public function executeStructSync($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->executeStructSyncWithOptions($request, $runtime);
    }

    /**
     * @param GetDataCorrectOrderDetailRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return GetDataCorrectOrderDetailResponse
     */
    public function getDataCorrectOrderDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetDataCorrectOrderDetailResponse::fromMap($this->doRPCRequest('GetDataCorrectOrderDetail', '2018-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetDataCorrectOrderDetailRequest $request
     *
     * @return GetDataCorrectOrderDetailResponse
     */
    public function getDataCorrectOrderDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDataCorrectOrderDetailWithOptions($request, $runtime);
    }

    /**
     * @param ListColumnsRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListColumnsResponse
     */
    public function listColumnsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListColumnsResponse::fromMap($this->doRPCRequest('ListColumns', '2018-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListColumnsRequest $request
     *
     * @return ListColumnsResponse
     */
    public function listColumns($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listColumnsWithOptions($request, $runtime);
    }

    /**
     * @param RevokeUserPermissionRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return RevokeUserPermissionResponse
     */
    public function revokeUserPermissionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RevokeUserPermissionResponse::fromMap($this->doRPCRequest('RevokeUserPermission', '2018-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RevokeUserPermissionRequest $request
     *
     * @return RevokeUserPermissionResponse
     */
    public function revokeUserPermission($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->revokeUserPermissionWithOptions($request, $runtime);
    }

    /**
     * @param GetMetaTableColumnRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetMetaTableColumnResponse
     */
    public function getMetaTableColumnWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetMetaTableColumnResponse::fromMap($this->doRPCRequest('GetMetaTableColumn', '2018-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetMetaTableColumnRequest $request
     *
     * @return GetMetaTableColumnResponse
     */
    public function getMetaTableColumn($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMetaTableColumnWithOptions($request, $runtime);
    }

    /**
     * @param EnableUserRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return EnableUserResponse
     */
    public function enableUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return EnableUserResponse::fromMap($this->doRPCRequest('EnableUser', '2018-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param EnableUserRequest $request
     *
     * @return EnableUserResponse
     */
    public function enableUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableUserWithOptions($request, $runtime);
    }

    /**
     * @param UpdateInstanceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateInstanceResponse
     */
    public function updateInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateInstanceResponse::fromMap($this->doRPCRequest('UpdateInstance', '2018-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateInstanceRequest $request
     *
     * @return UpdateInstanceResponse
     */
    public function updateInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateInstanceWithOptions($request, $runtime);
    }

    /**
     * @param ExecuteScriptRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ExecuteScriptResponse
     */
    public function executeScriptWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ExecuteScriptResponse::fromMap($this->doRPCRequest('ExecuteScript', '2018-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ExecuteScriptRequest $request
     *
     * @return ExecuteScriptResponse
     */
    public function executeScript($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->executeScriptWithOptions($request, $runtime);
    }

    /**
     * @param ListDBTaskSQLJobDetailRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListDBTaskSQLJobDetailResponse
     */
    public function listDBTaskSQLJobDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListDBTaskSQLJobDetailResponse::fromMap($this->doRPCRequest('ListDBTaskSQLJobDetail', '2018-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListDBTaskSQLJobDetailRequest $request
     *
     * @return ListDBTaskSQLJobDetailResponse
     */
    public function listDBTaskSQLJobDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDBTaskSQLJobDetailWithOptions($request, $runtime);
    }

    /**
     * @param DisableUserRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DisableUserResponse
     */
    public function disableUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DisableUserResponse::fromMap($this->doRPCRequest('DisableUser', '2018-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DisableUserRequest $request
     *
     * @return DisableUserResponse
     */
    public function disableUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableUserWithOptions($request, $runtime);
    }

    /**
     * @param GetApprovalDetailRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetApprovalDetailResponse
     */
    public function getApprovalDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetApprovalDetailResponse::fromMap($this->doRPCRequest('GetApprovalDetail', '2018-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetApprovalDetailRequest $request
     *
     * @return GetApprovalDetailResponse
     */
    public function getApprovalDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getApprovalDetailWithOptions($request, $runtime);
    }

    /**
     * @param ListSQLReviewOriginSQLRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return ListSQLReviewOriginSQLResponse
     */
    public function listSQLReviewOriginSQLWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListSQLReviewOriginSQLShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->orderActionDetail)) {
            $request->orderActionDetailShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->orderActionDetail), 'OrderActionDetail', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListSQLReviewOriginSQLResponse::fromMap($this->doRPCRequest('ListSQLReviewOriginSQL', '2018-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListSQLReviewOriginSQLRequest $request
     *
     * @return ListSQLReviewOriginSQLResponse
     */
    public function listSQLReviewOriginSQL($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSQLReviewOriginSQLWithOptions($request, $runtime);
    }

    /**
     * @param GetUserActiveTenantRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetUserActiveTenantResponse
     */
    public function getUserActiveTenantWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetUserActiveTenantResponse::fromMap($this->doRPCRequest('GetUserActiveTenant', '2018-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetUserActiveTenantRequest $request
     *
     * @return GetUserActiveTenantResponse
     */
    public function getUserActiveTenant($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUserActiveTenantWithOptions($request, $runtime);
    }

    /**
     * @param RegisterUserRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return RegisterUserResponse
     */
    public function registerUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RegisterUserResponse::fromMap($this->doRPCRequest('RegisterUser', '2018-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RegisterUserRequest $request
     *
     * @return RegisterUserResponse
     */
    public function registerUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->registerUserWithOptions($request, $runtime);
    }

    /**
     * @param GetInstanceRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetInstanceResponse
     */
    public function getInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetInstanceResponse::fromMap($this->doRPCRequest('GetInstance', '2018-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetInstanceRequest $request
     *
     * @return GetInstanceResponse
     */
    public function getInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInstanceWithOptions($request, $runtime);
    }

    /**
     * @param GetPermApplyOrderDetailRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetPermApplyOrderDetailResponse
     */
    public function getPermApplyOrderDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetPermApplyOrderDetailResponse::fromMap($this->doRPCRequest('GetPermApplyOrderDetail', '2018-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetPermApplyOrderDetailRequest $request
     *
     * @return GetPermApplyOrderDetailResponse
     */
    public function getPermApplyOrderDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPermApplyOrderDetailWithOptions($request, $runtime);
    }

    /**
     * @param ListIndexesRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListIndexesResponse
     */
    public function listIndexesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListIndexesResponse::fromMap($this->doRPCRequest('ListIndexes', '2018-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListIndexesRequest $request
     *
     * @return ListIndexesResponse
     */
    public function listIndexes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listIndexesWithOptions($request, $runtime);
    }

    /**
     * @param ListLogicTablesRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListLogicTablesResponse
     */
    public function listLogicTablesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListLogicTablesResponse::fromMap($this->doRPCRequest('ListLogicTables', '2018-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListLogicTablesRequest $request
     *
     * @return ListLogicTablesResponse
     */
    public function listLogicTables($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listLogicTablesWithOptions($request, $runtime);
    }

    /**
     * @param GetTableTopologyRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetTableTopologyResponse
     */
    public function getTableTopologyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetTableTopologyResponse::fromMap($this->doRPCRequest('GetTableTopology', '2018-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetTableTopologyRequest $request
     *
     * @return GetTableTopologyResponse
     */
    public function getTableTopology($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTableTopologyWithOptions($request, $runtime);
    }

    /**
     * @param GetDataExportDownloadURLRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetDataExportDownloadURLResponse
     */
    public function getDataExportDownloadURLWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetDataExportDownloadURLResponse::fromMap($this->doRPCRequest('GetDataExportDownloadURL', '2018-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetDataExportDownloadURLRequest $request
     *
     * @return GetDataExportDownloadURLResponse
     */
    public function getDataExportDownloadURL($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDataExportDownloadURLWithOptions($request, $runtime);
    }

    /**
     * @param CreateDataCronClearOrderRequest $tmpReq
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateDataCronClearOrderResponse
     */
    public function createDataCronClearOrderWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateDataCronClearOrderShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->relatedUserList)) {
            $request->relatedUserListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->relatedUserList, 'RelatedUserList', 'json');
        }
        if (!Utils::isUnset($tmpReq->param)) {
            $request->paramShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->param), 'Param', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateDataCronClearOrderResponse::fromMap($this->doRPCRequest('CreateDataCronClearOrder', '2018-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateDataCronClearOrderRequest $request
     *
     * @return CreateDataCronClearOrderResponse
     */
    public function createDataCronClearOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDataCronClearOrderWithOptions($request, $runtime);
    }

    /**
     * @param CreatePublishGroupTaskRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CreatePublishGroupTaskResponse
     */
    public function createPublishGroupTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreatePublishGroupTaskResponse::fromMap($this->doRPCRequest('CreatePublishGroupTask', '2018-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreatePublishGroupTaskRequest $request
     *
     * @return CreatePublishGroupTaskResponse
     */
    public function createPublishGroupTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPublishGroupTaskWithOptions($request, $runtime);
    }

    /**
     * @param GetDatabaseRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetDatabaseResponse
     */
    public function getDatabaseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetDatabaseResponse::fromMap($this->doRPCRequest('GetDatabase', '2018-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetDatabaseRequest $request
     *
     * @return GetDatabaseResponse
     */
    public function getDatabase($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDatabaseWithOptions($request, $runtime);
    }

    /**
     * @param GetOwnerApplyOrderDetailRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetOwnerApplyOrderDetailResponse
     */
    public function getOwnerApplyOrderDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetOwnerApplyOrderDetailResponse::fromMap($this->doRPCRequest('GetOwnerApplyOrderDetail', '2018-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetOwnerApplyOrderDetailRequest $request
     *
     * @return GetOwnerApplyOrderDetailResponse
     */
    public function getOwnerApplyOrderDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOwnerApplyOrderDetailWithOptions($request, $runtime);
    }

    /**
     * @param GetOpLogRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return GetOpLogResponse
     */
    public function getOpLogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetOpLogResponse::fromMap($this->doRPCRequest('GetOpLog', '2018-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetOpLogRequest $request
     *
     * @return GetOpLogResponse
     */
    public function getOpLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOpLogWithOptions($request, $runtime);
    }

    /**
     * @param SearchTableRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return SearchTableResponse
     */
    public function searchTableWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SearchTableResponse::fromMap($this->doRPCRequest('SearchTable', '2018-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SearchTableRequest $request
     *
     * @return SearchTableResponse
     */
    public function searchTable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchTableWithOptions($request, $runtime);
    }

    /**
     * @param ListDBTaskSQLJobRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListDBTaskSQLJobResponse
     */
    public function listDBTaskSQLJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListDBTaskSQLJobResponse::fromMap($this->doRPCRequest('ListDBTaskSQLJob', '2018-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListDBTaskSQLJobRequest $request
     *
     * @return ListDBTaskSQLJobResponse
     */
    public function listDBTaskSQLJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDBTaskSQLJobWithOptions($request, $runtime);
    }

    /**
     * @param DeleteUserRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return DeleteUserResponse
     */
    public function deleteUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteUserResponse::fromMap($this->doRPCRequest('DeleteUser', '2018-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteUserRequest $request
     *
     * @return DeleteUserResponse
     */
    public function deleteUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteUserWithOptions($request, $runtime);
    }

    /**
     * @param GetDataCronClearTaskDetailListRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return GetDataCronClearTaskDetailListResponse
     */
    public function getDataCronClearTaskDetailListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetDataCronClearTaskDetailListResponse::fromMap($this->doRPCRequest('GetDataCronClearTaskDetailList', '2018-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetDataCronClearTaskDetailListRequest $request
     *
     * @return GetDataCronClearTaskDetailListResponse
     */
    public function getDataCronClearTaskDetailList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDataCronClearTaskDetailListWithOptions($request, $runtime);
    }

    /**
     * @param GetStructSyncJobAnalyzeResultRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return GetStructSyncJobAnalyzeResultResponse
     */
    public function getStructSyncJobAnalyzeResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetStructSyncJobAnalyzeResultResponse::fromMap($this->doRPCRequest('GetStructSyncJobAnalyzeResult', '2018-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetStructSyncJobAnalyzeResultRequest $request
     *
     * @return GetStructSyncJobAnalyzeResultResponse
     */
    public function getStructSyncJobAnalyzeResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getStructSyncJobAnalyzeResultWithOptions($request, $runtime);
    }

    /**
     * @param ApproveOrderRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ApproveOrderResponse
     */
    public function approveOrderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ApproveOrderResponse::fromMap($this->doRPCRequest('ApproveOrder', '2018-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ApproveOrderRequest $request
     *
     * @return ApproveOrderResponse
     */
    public function approveOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->approveOrderWithOptions($request, $runtime);
    }

    /**
     * @param GetDataCorrectTaskDetailRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetDataCorrectTaskDetailResponse
     */
    public function getDataCorrectTaskDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetDataCorrectTaskDetailResponse::fromMap($this->doRPCRequest('GetDataCorrectTaskDetail', '2018-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetDataCorrectTaskDetailRequest $request
     *
     * @return GetDataCorrectTaskDetailResponse
     */
    public function getDataCorrectTaskDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDataCorrectTaskDetailWithOptions($request, $runtime);
    }

    /**
     * @param CreateUploadFileJobRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateUploadFileJobResponse
     */
    public function createUploadFileJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateUploadFileJobResponse::fromMap($this->doRPCRequest('CreateUploadFileJob', '2018-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateUploadFileJobRequest $request
     *
     * @return CreateUploadFileJobResponse
     */
    public function createUploadFileJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createUploadFileJobWithOptions($request, $runtime);
    }

    /**
     * @param ListLogicDatabasesRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListLogicDatabasesResponse
     */
    public function listLogicDatabasesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListLogicDatabasesResponse::fromMap($this->doRPCRequest('ListLogicDatabases', '2018-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListLogicDatabasesRequest $request
     *
     * @return ListLogicDatabasesResponse
     */
    public function listLogicDatabases($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listLogicDatabasesWithOptions($request, $runtime);
    }

    /**
     * @param CreateDataImportOrderRequest $tmpReq
     * @param RuntimeOptions               $runtime
     *
     * @return CreateDataImportOrderResponse
     */
    public function createDataImportOrderWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateDataImportOrderShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->relatedUserList)) {
            $request->relatedUserListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->relatedUserList, 'RelatedUserList', 'json');
        }
        if (!Utils::isUnset($tmpReq->param)) {
            $request->paramShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->param), 'Param', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateDataImportOrderResponse::fromMap($this->doRPCRequest('CreateDataImportOrder', '2018-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateDataImportOrderRequest $request
     *
     * @return CreateDataImportOrderResponse
     */
    public function createDataImportOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDataImportOrderWithOptions($request, $runtime);
    }

    /**
     * @param CloseOrderRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return CloseOrderResponse
     */
    public function closeOrderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CloseOrderResponse::fromMap($this->doRPCRequest('CloseOrder', '2018-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CloseOrderRequest $request
     *
     * @return CloseOrderResponse
     */
    public function closeOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->closeOrderWithOptions($request, $runtime);
    }

    /**
     * @param SyncInstanceMetaRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return SyncInstanceMetaResponse
     */
    public function syncInstanceMetaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SyncInstanceMetaResponse::fromMap($this->doRPCRequest('SyncInstanceMeta', '2018-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SyncInstanceMetaRequest $request
     *
     * @return SyncInstanceMetaResponse
     */
    public function syncInstanceMeta($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->syncInstanceMetaWithOptions($request, $runtime);
    }

    /**
     * @param ListOrdersRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ListOrdersResponse
     */
    public function listOrdersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListOrdersResponse::fromMap($this->doRPCRequest('ListOrders', '2018-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListOrdersRequest $request
     *
     * @return ListOrdersResponse
     */
    public function listOrders($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listOrdersWithOptions($request, $runtime);
    }

    /**
     * @param CreateSQLReviewOrderRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return CreateSQLReviewOrderResponse
     */
    public function createSQLReviewOrderWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateSQLReviewOrderShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->relatedUserList)) {
            $request->relatedUserListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->relatedUserList, 'RelatedUserList', 'json');
        }
        if (!Utils::isUnset($tmpReq->param)) {
            $request->paramShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->param), 'Param', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateSQLReviewOrderResponse::fromMap($this->doRPCRequest('CreateSQLReviewOrder', '2018-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateSQLReviewOrderRequest $request
     *
     * @return CreateSQLReviewOrderResponse
     */
    public function createSQLReviewOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSQLReviewOrderWithOptions($request, $runtime);
    }

    /**
     * @param GetOrderBaseInfoRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetOrderBaseInfoResponse
     */
    public function getOrderBaseInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetOrderBaseInfoResponse::fromMap($this->doRPCRequest('GetOrderBaseInfo', '2018-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetOrderBaseInfoRequest $request
     *
     * @return GetOrderBaseInfoResponse
     */
    public function getOrderBaseInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOrderBaseInfoWithOptions($request, $runtime);
    }

    /**
     * @param GetSQLReviewOptimizeDetailRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return GetSQLReviewOptimizeDetailResponse
     */
    public function getSQLReviewOptimizeDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetSQLReviewOptimizeDetailResponse::fromMap($this->doRPCRequest('GetSQLReviewOptimizeDetail', '2018-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetSQLReviewOptimizeDetailRequest $request
     *
     * @return GetSQLReviewOptimizeDetailResponse
     */
    public function getSQLReviewOptimizeDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSQLReviewOptimizeDetailWithOptions($request, $runtime);
    }

    /**
     * @param ListUserTenantsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListUserTenantsResponse
     */
    public function listUserTenantsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListUserTenantsResponse::fromMap($this->doRPCRequest('ListUserTenants', '2018-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListUserTenantsRequest $request
     *
     * @return ListUserTenantsResponse
     */
    public function listUserTenants($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUserTenantsWithOptions($request, $runtime);
    }

    /**
     * @param SetOwnersRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return SetOwnersResponse
     */
    public function setOwnersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SetOwnersResponse::fromMap($this->doRPCRequest('SetOwners', '2018-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SetOwnersRequest $request
     *
     * @return SetOwnersResponse
     */
    public function setOwners($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setOwnersWithOptions($request, $runtime);
    }

    /**
     * @param CreateDataCorrectOrderRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return CreateDataCorrectOrderResponse
     */
    public function createDataCorrectOrderWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateDataCorrectOrderShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->relatedUserList)) {
            $request->relatedUserListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->relatedUserList, 'RelatedUserList', 'json');
        }
        if (!Utils::isUnset($tmpReq->param)) {
            $request->paramShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->param), 'Param', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateDataCorrectOrderResponse::fromMap($this->doRPCRequest('CreateDataCorrectOrder', '2018-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateDataCorrectOrderRequest $request
     *
     * @return CreateDataCorrectOrderResponse
     */
    public function createDataCorrectOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDataCorrectOrderWithOptions($request, $runtime);
    }

    /**
     * @param GetLogicDatabaseRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetLogicDatabaseResponse
     */
    public function getLogicDatabaseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetLogicDatabaseResponse::fromMap($this->doRPCRequest('GetLogicDatabase', '2018-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetLogicDatabaseRequest $request
     *
     * @return GetLogicDatabaseResponse
     */
    public function getLogicDatabase($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLogicDatabaseWithOptions($request, $runtime);
    }

    /**
     * @param GetDataCorrectBackupFilesRequest $tmpReq
     * @param RuntimeOptions                   $runtime
     *
     * @return GetDataCorrectBackupFilesResponse
     */
    public function getDataCorrectBackupFilesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetDataCorrectBackupFilesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->actionDetail)) {
            $request->actionDetailShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->actionDetail, 'ActionDetail', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetDataCorrectBackupFilesResponse::fromMap($this->doRPCRequest('GetDataCorrectBackupFiles', '2018-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetDataCorrectBackupFilesRequest $request
     *
     * @return GetDataCorrectBackupFilesResponse
     */
    public function getDataCorrectBackupFiles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDataCorrectBackupFilesWithOptions($request, $runtime);
    }

    /**
     * @param ListDataCorrectPreCheckSQLRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ListDataCorrectPreCheckSQLResponse
     */
    public function listDataCorrectPreCheckSQLWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListDataCorrectPreCheckSQLResponse::fromMap($this->doRPCRequest('ListDataCorrectPreCheckSQL', '2018-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListDataCorrectPreCheckSQLRequest $request
     *
     * @return ListDataCorrectPreCheckSQLResponse
     */
    public function listDataCorrectPreCheckSQL($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDataCorrectPreCheckSQLWithOptions($request, $runtime);
    }

    /**
     * @param RegisterInstanceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return RegisterInstanceResponse
     */
    public function registerInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RegisterInstanceResponse::fromMap($this->doRPCRequest('RegisterInstance', '2018-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RegisterInstanceRequest $request
     *
     * @return RegisterInstanceResponse
     */
    public function registerInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->registerInstanceWithOptions($request, $runtime);
    }

    /**
     * @param CreateStructSyncOrderRequest $tmpReq
     * @param RuntimeOptions               $runtime
     *
     * @return CreateStructSyncOrderResponse
     */
    public function createStructSyncOrderWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateStructSyncOrderShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->relatedUserList)) {
            $request->relatedUserListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->relatedUserList, 'RelatedUserList', 'json');
        }
        if (!Utils::isUnset($tmpReq->param)) {
            $request->paramShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->param), 'Param', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateStructSyncOrderResponse::fromMap($this->doRPCRequest('CreateStructSyncOrder', '2018-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateStructSyncOrderRequest $request
     *
     * @return CreateStructSyncOrderResponse
     */
    public function createStructSyncOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createStructSyncOrderWithOptions($request, $runtime);
    }

    /**
     * @param ExecuteDataExportRequest $tmpReq
     * @param RuntimeOptions           $runtime
     *
     * @return ExecuteDataExportResponse
     */
    public function executeDataExportWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ExecuteDataExportShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->actionDetail)) {
            $request->actionDetailShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->actionDetail, 'ActionDetail', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ExecuteDataExportResponse::fromMap($this->doRPCRequest('ExecuteDataExport', '2018-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ExecuteDataExportRequest $request
     *
     * @return ExecuteDataExportResponse
     */
    public function executeDataExport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->executeDataExportWithOptions($request, $runtime);
    }

    /**
     * @param ExecuteDataCorrectRequest $tmpReq
     * @param RuntimeOptions            $runtime
     *
     * @return ExecuteDataCorrectResponse
     */
    public function executeDataCorrectWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ExecuteDataCorrectShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->actionDetail)) {
            $request->actionDetailShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->actionDetail, 'ActionDetail', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ExecuteDataCorrectResponse::fromMap($this->doRPCRequest('ExecuteDataCorrect', '2018-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ExecuteDataCorrectRequest $request
     *
     * @return ExecuteDataCorrectResponse
     */
    public function executeDataCorrect($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->executeDataCorrectWithOptions($request, $runtime);
    }

    /**
     * @param ListDataCorrectPreCheckDBRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ListDataCorrectPreCheckDBResponse
     */
    public function listDataCorrectPreCheckDBWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListDataCorrectPreCheckDBResponse::fromMap($this->doRPCRequest('ListDataCorrectPreCheckDB', '2018-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListDataCorrectPreCheckDBRequest $request
     *
     * @return ListDataCorrectPreCheckDBResponse
     */
    public function listDataCorrectPreCheckDB($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDataCorrectPreCheckDBWithOptions($request, $runtime);
    }

    /**
     * @param ListTablesRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ListTablesResponse
     */
    public function listTablesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListTablesResponse::fromMap($this->doRPCRequest('ListTables', '2018-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListTablesRequest $request
     *
     * @return ListTablesResponse
     */
    public function listTables($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTablesWithOptions($request, $runtime);
    }

    /**
     * @param ListWorkFlowNodesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListWorkFlowNodesResponse
     */
    public function listWorkFlowNodesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListWorkFlowNodesResponse::fromMap($this->doRPCRequest('ListWorkFlowNodes', '2018-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListWorkFlowNodesRequest $request
     *
     * @return ListWorkFlowNodesResponse
     */
    public function listWorkFlowNodes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listWorkFlowNodesWithOptions($request, $runtime);
    }

    /**
     * @param GetStructSyncOrderDetailRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetStructSyncOrderDetailResponse
     */
    public function getStructSyncOrderDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetStructSyncOrderDetailResponse::fromMap($this->doRPCRequest('GetStructSyncOrderDetail', '2018-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetStructSyncOrderDetailRequest $request
     *
     * @return GetStructSyncOrderDetailResponse
     */
    public function getStructSyncOrderDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getStructSyncOrderDetailWithOptions($request, $runtime);
    }

    /**
     * @param ListSensitiveColumnsDetailRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ListSensitiveColumnsDetailResponse
     */
    public function listSensitiveColumnsDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListSensitiveColumnsDetailResponse::fromMap($this->doRPCRequest('ListSensitiveColumnsDetail', '2018-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListSensitiveColumnsDetailRequest $request
     *
     * @return ListSensitiveColumnsDetailResponse
     */
    public function listSensitiveColumnsDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSensitiveColumnsDetailWithOptions($request, $runtime);
    }

    /**
     * @param UpdateUserRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return UpdateUserResponse
     */
    public function updateUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateUserResponse::fromMap($this->doRPCRequest('UpdateUser', '2018-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateUserRequest $request
     *
     * @return UpdateUserResponse
     */
    public function updateUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateUserWithOptions($request, $runtime);
    }

    /**
     * @param GetPhysicalDatabaseRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetPhysicalDatabaseResponse
     */
    public function getPhysicalDatabaseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetPhysicalDatabaseResponse::fromMap($this->doRPCRequest('GetPhysicalDatabase', '2018-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetPhysicalDatabaseRequest $request
     *
     * @return GetPhysicalDatabaseResponse
     */
    public function getPhysicalDatabase($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPhysicalDatabaseWithOptions($request, $runtime);
    }

    /**
     * @param GetStructSyncExecSqlDetailRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return GetStructSyncExecSqlDetailResponse
     */
    public function getStructSyncExecSqlDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetStructSyncExecSqlDetailResponse::fromMap($this->doRPCRequest('GetStructSyncExecSqlDetail', '2018-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetStructSyncExecSqlDetailRequest $request
     *
     * @return GetStructSyncExecSqlDetailResponse
     */
    public function getStructSyncExecSqlDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getStructSyncExecSqlDetailWithOptions($request, $runtime);
    }

    /**
     * @param DeleteInstanceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteInstanceResponse
     */
    public function deleteInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteInstanceResponse::fromMap($this->doRPCRequest('DeleteInstance', '2018-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteInstanceRequest $request
     *
     * @return DeleteInstanceResponse
     */
    public function deleteInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteInstanceWithOptions($request, $runtime);
    }

    /**
     * @param GetTableDBTopologyRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetTableDBTopologyResponse
     */
    public function getTableDBTopologyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetTableDBTopologyResponse::fromMap($this->doRPCRequest('GetTableDBTopology', '2018-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetTableDBTopologyRequest $request
     *
     * @return GetTableDBTopologyResponse
     */
    public function getTableDBTopology($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTableDBTopologyWithOptions($request, $runtime);
    }
}
