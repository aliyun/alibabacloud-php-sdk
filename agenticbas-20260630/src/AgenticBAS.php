<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgenticBAS\V20260630;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\AgenticBAS\V20260630\Models\BatchVerifyPentestVulnRequest;
use AlibabaCloud\SDK\AgenticBAS\V20260630\Models\BatchVerifyPentestVulnResponse;
use AlibabaCloud\SDK\AgenticBAS\V20260630\Models\BatchVerifyPentestVulnShrinkRequest;
use AlibabaCloud\SDK\AgenticBAS\V20260630\Models\CreatePentestTaskRequest;
use AlibabaCloud\SDK\AgenticBAS\V20260630\Models\CreatePentestTaskResponse;
use AlibabaCloud\SDK\AgenticBAS\V20260630\Models\CreatePentestTaskShrinkRequest;
use AlibabaCloud\SDK\AgenticBAS\V20260630\Models\DescribePentestReportContentRequest;
use AlibabaCloud\SDK\AgenticBAS\V20260630\Models\DescribePentestReportContentResponse;
use AlibabaCloud\SDK\AgenticBAS\V20260630\Models\DescribePentestReportContentShrinkRequest;
use AlibabaCloud\SDK\AgenticBAS\V20260630\Models\DescribePentestTaskListRequest;
use AlibabaCloud\SDK\AgenticBAS\V20260630\Models\DescribePentestTaskListResponse;
use AlibabaCloud\SDK\AgenticBAS\V20260630\Models\DescribePentestTaskListShrinkRequest;
use AlibabaCloud\SDK\AgenticBAS\V20260630\Models\DescribePentestVulnDetailRequest;
use AlibabaCloud\SDK\AgenticBAS\V20260630\Models\DescribePentestVulnDetailResponse;
use AlibabaCloud\SDK\AgenticBAS\V20260630\Models\DescribePentestVulnDetailShrinkRequest;
use AlibabaCloud\SDK\AgenticBAS\V20260630\Models\DescribePentestVulnListRequest;
use AlibabaCloud\SDK\AgenticBAS\V20260630\Models\DescribePentestVulnListResponse;
use AlibabaCloud\SDK\AgenticBAS\V20260630\Models\DescribePentestVulnListShrinkRequest;
use Darabonba\GatewayPop\Client;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class AgenticBAS extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_productId = 'AgenticBAS';
        $gatewayClient = new Client();
        $this->_spi = $gatewayClient;
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('agenticbas', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * Submits asynchronous retests in bulk for specified vulnerabilities under the current account and returns the acceptance results for each item.
     *
     * @remarks
     * Submits retests for existing vulnerabilities that the current account has access to. OperationInput accepts only VulnIds. The original array must contain 1 to 100 elements, and duplicate elements are counted. The original length is validated before deduplication. If the limit is exceeded, the entire request is rejected and no verification records are created. Valid vulnerability IDs are processed item by item. A single item failure does not block the remaining items or roll back accepted items. SuccessCount and Results.Success only indicate that the verification records are created and accepted, and do not mean that the vulnerabilities have been retested or passed verification. Retests are executed asynchronously and may consume credits.
     *
     * @param tmpReq - BatchVerifyPentestVulnRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchVerifyPentestVulnResponse
     *
     * @param BatchVerifyPentestVulnRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return BatchVerifyPentestVulnResponse
     */
    public function batchVerifyPentestVulnWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new BatchVerifyPentestVulnShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->operationInput) {
            $request->operationInputShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->operationInput, 'OperationInput', 'json');
        }

        $query = [];
        if (null !== $request->operationInputShrink) {
            @$query['OperationInput'] = $request->operationInputShrink;
        }

        if (null !== $request->operationType) {
            @$query['OperationType'] = $request->operationType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BatchVerifyPentestVuln',
            'version' => '2026-06-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BatchVerifyPentestVulnResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Submits asynchronous retests in bulk for specified vulnerabilities under the current account and returns the acceptance results for each item.
     *
     * @remarks
     * Submits retests for existing vulnerabilities that the current account has access to. OperationInput accepts only VulnIds. The original array must contain 1 to 100 elements, and duplicate elements are counted. The original length is validated before deduplication. If the limit is exceeded, the entire request is rejected and no verification records are created. Valid vulnerability IDs are processed item by item. A single item failure does not block the remaining items or roll back accepted items. SuccessCount and Results.Success only indicate that the verification records are created and accepted, and do not mean that the vulnerabilities have been retested or passed verification. Retests are executed asynchronously and may consume credits.
     *
     * @param request - BatchVerifyPentestVulnRequest
     *
     * @returns BatchVerifyPentestVulnResponse
     *
     * @param BatchVerifyPentestVulnRequest $request
     *
     * @return BatchVerifyPentestVulnResponse
     */
    public function batchVerifyPentestVuln($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchVerifyPentestVulnWithOptions($request, $runtime);
    }

    /**
     * Creates penetration testing tasks for authorized assets of the current account and returns the task IDs. You can specify up to five targets at a time, and one task is created for each target.
     *
     * @remarks
     * Creates penetration testing tasks for authorized assets of the current account and returns the task IDs. You can specify up to five targets at a time, and one task is created for each target.
     * Before you call this operation, you must activate the AgenticBAS service or meet the validity period and quota conditions of the trial service. The target assets must meet the ownership verification requirements of the selected asset source. Business parameters are passed in OperationInput. VulnCheckItems and PentestRequirement cannot be empty at the same time. Currently, only IMMEDIATE execution is supported, and scheduled execution is not supported.
     * A successful creation response only indicates that the tasks are created and does not wait for the scan to complete. Save the TaskId in TaskList, query the status and usage by calling DescribePentestTaskList, and then use the same TaskId to query vulnerabilities or reports. Tasks may enter a queue. If a report is not generated, the query response may not contain a download link.
     * Credentials use an object structure of "identity name -> credential configuration". The following are synthetic examples. Replace them with authorized test identities in actual calls.
     * ```json
     * {
     *   "Credentials": {
     *     "accountUser": {
     *       "account": {
     *         "username": "example-user",
     *         "password": "example-password"
     *       }
     *     },
     *     "cookieUser": {
     *       "cookies": [
     *         {
     *           "name": "session",
     *           "value": "example-session",
     *           "domain": "example.com",
     *           "path": "/",
     *           "secure": true,
     *           "httpOnly": true,
     *           "sameSite": "Lax"
     *         }
     *       ]
     *     },
     *     "localUser": {
     *       "localStorage": {
     *         "access_token": "example-local-token"
     *       }
     *     },
     *     "sessionUser": {
     *       "sessionStorage": {
     *         "session_token": "example-session-token"
     *       }
     *     },
     *     "headerUser": {
     *       "extraHeaders": {
     *         "Authorization": "Bearer example-token"
     *       }
     *     }
     *   }
     * }
     * ```
     *
     * @param tmpReq - CreatePentestTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreatePentestTaskResponse
     *
     * @param CreatePentestTaskRequest $tmpReq
     * @param RuntimeOptions           $runtime
     *
     * @return CreatePentestTaskResponse
     */
    public function createPentestTaskWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreatePentestTaskShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->operationInput) {
            $request->operationInputShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->operationInput, 'OperationInput', 'json');
        }

        $query = [];
        if (null !== $request->operationInputShrink) {
            @$query['OperationInput'] = $request->operationInputShrink;
        }

        if (null !== $request->operationType) {
            @$query['OperationType'] = $request->operationType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreatePentestTask',
            'version' => '2026-06-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreatePentestTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates penetration testing tasks for authorized assets of the current account and returns the task IDs. You can specify up to five targets at a time, and one task is created for each target.
     *
     * @remarks
     * Creates penetration testing tasks for authorized assets of the current account and returns the task IDs. You can specify up to five targets at a time, and one task is created for each target.
     * Before you call this operation, you must activate the AgenticBAS service or meet the validity period and quota conditions of the trial service. The target assets must meet the ownership verification requirements of the selected asset source. Business parameters are passed in OperationInput. VulnCheckItems and PentestRequirement cannot be empty at the same time. Currently, only IMMEDIATE execution is supported, and scheduled execution is not supported.
     * A successful creation response only indicates that the tasks are created and does not wait for the scan to complete. Save the TaskId in TaskList, query the status and usage by calling DescribePentestTaskList, and then use the same TaskId to query vulnerabilities or reports. Tasks may enter a queue. If a report is not generated, the query response may not contain a download link.
     * Credentials use an object structure of "identity name -> credential configuration". The following are synthetic examples. Replace them with authorized test identities in actual calls.
     * ```json
     * {
     *   "Credentials": {
     *     "accountUser": {
     *       "account": {
     *         "username": "example-user",
     *         "password": "example-password"
     *       }
     *     },
     *     "cookieUser": {
     *       "cookies": [
     *         {
     *           "name": "session",
     *           "value": "example-session",
     *           "domain": "example.com",
     *           "path": "/",
     *           "secure": true,
     *           "httpOnly": true,
     *           "sameSite": "Lax"
     *         }
     *       ]
     *     },
     *     "localUser": {
     *       "localStorage": {
     *         "access_token": "example-local-token"
     *       }
     *     },
     *     "sessionUser": {
     *       "sessionStorage": {
     *         "session_token": "example-session-token"
     *       }
     *     },
     *     "headerUser": {
     *       "extraHeaders": {
     *         "Authorization": "Bearer example-token"
     *       }
     *     }
     *   }
     * }
     * ```
     *
     * @param request - CreatePentestTaskRequest
     *
     * @returns CreatePentestTaskResponse
     *
     * @param CreatePentestTaskRequest $request
     *
     * @return CreatePentestTaskResponse
     */
    public function createPentestTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPentestTaskWithOptions($request, $runtime);
    }

    /**
     * Queries the PDF report of a specified penetration test task for the current account, and returns a temporary Object Storage Service (OSS) download URL and the expiration time without returning the report content.
     *
     * @param tmpReq - DescribePentestReportContentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribePentestReportContentResponse
     *
     * @param DescribePentestReportContentRequest $tmpReq
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribePentestReportContentResponse
     */
    public function describePentestReportContentWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DescribePentestReportContentShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->operationInput) {
            $request->operationInputShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->operationInput, 'OperationInput', 'json');
        }

        $query = [];
        if (null !== $request->operationInputShrink) {
            @$query['OperationInput'] = $request->operationInputShrink;
        }

        if (null !== $request->operationType) {
            @$query['OperationType'] = $request->operationType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribePentestReportContent',
            'version' => '2026-06-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribePentestReportContentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the PDF report of a specified penetration test task for the current account, and returns a temporary Object Storage Service (OSS) download URL and the expiration time without returning the report content.
     *
     * @param request - DescribePentestReportContentRequest
     *
     * @returns DescribePentestReportContentResponse
     *
     * @param DescribePentestReportContentRequest $request
     *
     * @return DescribePentestReportContentResponse
     */
    public function describePentestReportContent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePentestReportContentWithOptions($request, $runtime);
    }

    /**
     * Queries the penetration testing nodes of the current account by paging and returns the node status, execution duration, Credits usage, time, and vulnerability statistics.
     *
     * @remarks
     * Queries the penetration testing nodes of the current account by paging and returns the node status, execution duration, Credits usage, time, and vulnerability statistics.
     * Use OperationInput to specify query conditions. Paging is implemented by using CurrentPage and PageSize. By default, the first page is returned with 10 entries per page. You can filter nodes by node name keyword and node status.
     * The response includes TaskList and PageInfo. Duration indicates the execution duration in seconds. CreditsUsed indicates the number of Credits used. Nodes that have not started may not have a start time or duration, and nodes that have not finished may not have a completion time. All UNIX timestamps are in UNIX seconds. You can transform them to the time zone of the invoker for display.
     *
     * @param tmpReq - DescribePentestTaskListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribePentestTaskListResponse
     *
     * @param DescribePentestTaskListRequest $tmpReq
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribePentestTaskListResponse
     */
    public function describePentestTaskListWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DescribePentestTaskListShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->operationInput) {
            $request->operationInputShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->operationInput, 'OperationInput', 'json');
        }

        $query = [];
        if (null !== $request->operationInputShrink) {
            @$query['OperationInput'] = $request->operationInputShrink;
        }

        if (null !== $request->operationType) {
            @$query['OperationType'] = $request->operationType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribePentestTaskList',
            'version' => '2026-06-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribePentestTaskListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the penetration testing nodes of the current account by paging and returns the node status, execution duration, Credits usage, time, and vulnerability statistics.
     *
     * @remarks
     * Queries the penetration testing nodes of the current account by paging and returns the node status, execution duration, Credits usage, time, and vulnerability statistics.
     * Use OperationInput to specify query conditions. Paging is implemented by using CurrentPage and PageSize. By default, the first page is returned with 10 entries per page. You can filter nodes by node name keyword and node status.
     * The response includes TaskList and PageInfo. Duration indicates the execution duration in seconds. CreditsUsed indicates the number of Credits used. Nodes that have not started may not have a start time or duration, and nodes that have not finished may not have a completion time. All UNIX timestamps are in UNIX seconds. You can transform them to the time zone of the invoker for display.
     *
     * @param request - DescribePentestTaskListRequest
     *
     * @returns DescribePentestTaskListResponse
     *
     * @param DescribePentestTaskListRequest $request
     *
     * @return DescribePentestTaskListResponse
     */
    public function describePentestTaskList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePentestTaskListWithOptions($request, $runtime);
    }

    /**
     * Queries the details of a single vulnerability under the current account without triggering a scan or vulnerability verification.
     *
     * @remarks
     * Queries a specified single vulnerability under the current account by using OperationInput.VulnId and returns a VulnDetail object. This operation only reads existing vulnerability data, does not create scan or verification tasks, and does not support batch queries by using TaskId or VulnIds. You can call DescribePentestVulnList to obtain vulnerability IDs and then query the details of each vulnerability. The caller identity is determined by the gateway, and you cannot specify other accounts through request parameters.
     *
     * @param tmpReq - DescribePentestVulnDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribePentestVulnDetailResponse
     *
     * @param DescribePentestVulnDetailRequest $tmpReq
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribePentestVulnDetailResponse
     */
    public function describePentestVulnDetailWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DescribePentestVulnDetailShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->operationInput) {
            $request->operationInputShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->operationInput, 'OperationInput', 'json');
        }

        $query = [];
        if (null !== $request->operationInputShrink) {
            @$query['OperationInput'] = $request->operationInputShrink;
        }

        if (null !== $request->operationType) {
            @$query['OperationType'] = $request->operationType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribePentestVulnDetail',
            'version' => '2026-06-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribePentestVulnDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a single vulnerability under the current account without triggering a scan or vulnerability verification.
     *
     * @remarks
     * Queries a specified single vulnerability under the current account by using OperationInput.VulnId and returns a VulnDetail object. This operation only reads existing vulnerability data, does not create scan or verification tasks, and does not support batch queries by using TaskId or VulnIds. You can call DescribePentestVulnList to obtain vulnerability IDs and then query the details of each vulnerability. The caller identity is determined by the gateway, and you cannot specify other accounts through request parameters.
     *
     * @param request - DescribePentestVulnDetailRequest
     *
     * @returns DescribePentestVulnDetailResponse
     *
     * @param DescribePentestVulnDetailRequest $request
     *
     * @return DescribePentestVulnDetailResponse
     */
    public function describePentestVulnDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePentestVulnDetailWithOptions($request, $runtime);
    }

    /**
     * Queries the penetration testing vulnerabilities of the current account by task ID with pagination. Returns information such as the vulnerability title, severity, authentication status, affected URLs, and discovery time, and supports filtering by severity.
     *
     * @param tmpReq - DescribePentestVulnListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribePentestVulnListResponse
     *
     * @param DescribePentestVulnListRequest $tmpReq
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribePentestVulnListResponse
     */
    public function describePentestVulnListWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DescribePentestVulnListShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->operationInput) {
            $request->operationInputShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->operationInput, 'OperationInput', 'json');
        }

        $query = [];
        if (null !== $request->operationInputShrink) {
            @$query['OperationInput'] = $request->operationInputShrink;
        }

        if (null !== $request->operationType) {
            @$query['OperationType'] = $request->operationType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribePentestVulnList',
            'version' => '2026-06-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribePentestVulnListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the penetration testing vulnerabilities of the current account by task ID with pagination. Returns information such as the vulnerability title, severity, authentication status, affected URLs, and discovery time, and supports filtering by severity.
     *
     * @param request - DescribePentestVulnListRequest
     *
     * @returns DescribePentestVulnListResponse
     *
     * @param DescribePentestVulnListRequest $request
     *
     * @return DescribePentestVulnListResponse
     */
    public function describePentestVulnList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePentestVulnListWithOptions($request, $runtime);
    }
}
