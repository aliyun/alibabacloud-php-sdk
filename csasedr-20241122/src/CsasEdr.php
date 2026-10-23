<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CsasEdr\V20241122;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\CsasEdr\V20241122\Models\DescribeNsasSuspEventTypeRequest;
use AlibabaCloud\SDK\CsasEdr\V20241122\Models\DescribeNsasSuspEventTypeResponse;
use AlibabaCloud\SDK\CsasEdr\V20241122\Models\DescribeSecurityEventOperationsRequest;
use AlibabaCloud\SDK\CsasEdr\V20241122\Models\DescribeSecurityEventOperationsResponse;
use AlibabaCloud\SDK\CsasEdr\V20241122\Models\DescribeSuspEventsRequest;
use AlibabaCloud\SDK\CsasEdr\V20241122\Models\DescribeSuspEventsResponse;
use AlibabaCloud\SDK\CsasEdr\V20241122\Models\HandleSecurityEventsRequest;
use AlibabaCloud\SDK\CsasEdr\V20241122\Models\HandleSecurityEventsResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class CsasEdr extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('csasedr', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * Queries security alert types.
     *
     * @param request - DescribeNsasSuspEventTypeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeNsasSuspEventTypeResponse
     *
     * @param DescribeNsasSuspEventTypeRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeNsasSuspEventTypeResponse
     */
    public function describeNsasSuspEventTypeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->containerFieldName) {
            @$query['ContainerFieldName'] = $request->containerFieldName;
        }

        if (null !== $request->containerFieldValue) {
            @$query['ContainerFieldValue'] = $request->containerFieldValue;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->remark) {
            @$query['Remark'] = $request->remark;
        }

        if (null !== $request->sourceIp) {
            @$query['SourceIp'] = $request->sourceIp;
        }

        if (null !== $request->uuids) {
            @$query['Uuids'] = $request->uuids;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeNsasSuspEventType',
            'version' => '2024-11-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeNsasSuspEventTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries security alert types.
     *
     * @param request - DescribeNsasSuspEventTypeRequest
     *
     * @returns DescribeNsasSuspEventTypeResponse
     *
     * @param DescribeNsasSuspEventTypeRequest $request
     *
     * @return DescribeNsasSuspEventTypeResponse
     */
    public function describeNsasSuspEventType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeNsasSuspEventTypeWithOptions($request, $runtime);
    }

    /**
     * Queries the handling operations, operability, and whitelist rule configurations for a specified endpoint alert in its current state.
     *
     * @remarks
     * This operation queries the handling operations that can be displayed for a specified endpoint alert. When initiating a subsequent response, you must select the operation items returned in this response where UserCanOperate is true, and submit parameters as required by the response operation. The query result does not guarantee that the subsequent response will succeed.
     * The actual returned results are affected by feature switches, canary releases, dynamic allowlists, alert templates, alert statuses, and filter conditions. The list may be empty. The examples are used to illustrate field formats or rule combinations and do not represent that a specific alert will definitely return these values. MappingMarkFields and its subfields are generic compatibility structures. The current query pipeline does not populate their elements, and you should not infer that this operation supports the corresponding capabilities based on them.
     *
     * @param request - DescribeSecurityEventOperationsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSecurityEventOperationsResponse
     *
     * @param DescribeSecurityEventOperationsRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeSecurityEventOperationsResponse
     */
    public function describeSecurityEventOperationsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->securityEventId) {
            @$query['SecurityEventId'] = $request->securityEventId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSecurityEventOperations',
            'version' => '2024-11-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSecurityEventOperationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the handling operations, operability, and whitelist rule configurations for a specified endpoint alert in its current state.
     *
     * @remarks
     * This operation queries the handling operations that can be displayed for a specified endpoint alert. When initiating a subsequent response, you must select the operation items returned in this response where UserCanOperate is true, and submit parameters as required by the response operation. The query result does not guarantee that the subsequent response will succeed.
     * The actual returned results are affected by feature switches, canary releases, dynamic allowlists, alert templates, alert statuses, and filter conditions. The list may be empty. The examples are used to illustrate field formats or rule combinations and do not represent that a specific alert will definitely return these values. MappingMarkFields and its subfields are generic compatibility structures. The current query pipeline does not populate their elements, and you should not infer that this operation supports the corresponding capabilities based on them.
     *
     * @param request - DescribeSecurityEventOperationsRequest
     *
     * @returns DescribeSecurityEventOperationsResponse
     *
     * @param DescribeSecurityEventOperationsRequest $request
     *
     * @return DescribeSecurityEventOperationsResponse
     */
    public function describeSecurityEventOperations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSecurityEventOperationsWithOptions($request, $runtime);
    }

    /**
     * Queries endpoint security alerts and supports filtering by alert, endpoint, and processing status.
     *
     * @param request - DescribeSuspEventsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSuspEventsResponse
     *
     * @param DescribeSuspEventsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeSuspEventsResponse
     */
    public function describeSuspEventsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->alarmEventName) {
            @$query['AlarmEventName'] = $request->alarmEventName;
        }

        if (null !== $request->alarmUniqueInfo) {
            @$query['AlarmUniqueInfo'] = $request->alarmUniqueInfo;
        }

        if (null !== $request->assetsTypeList) {
            @$query['AssetsTypeList'] = $request->assetsTypeList;
        }

        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->containerFieldName) {
            @$query['ContainerFieldName'] = $request->containerFieldName;
        }

        if (null !== $request->containerFieldValue) {
            @$query['ContainerFieldValue'] = $request->containerFieldValue;
        }

        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->dealed) {
            @$query['Dealed'] = $request->dealed;
        }

        if (null !== $request->department) {
            @$query['Department'] = $request->department;
        }

        if (null !== $request->eventNames) {
            @$query['EventNames'] = $request->eventNames;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->hostName) {
            @$query['HostName'] = $request->hostName;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->innerIp) {
            @$query['InnerIp'] = $request->innerIp;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->levels) {
            @$query['Levels'] = $request->levels;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->operateErrorCodeList) {
            @$query['OperateErrorCodeList'] = $request->operateErrorCodeList;
        }

        if (null !== $request->operateTimeEnd) {
            @$query['OperateTimeEnd'] = $request->operateTimeEnd;
        }

        if (null !== $request->operateTimeStart) {
            @$query['OperateTimeStart'] = $request->operateTimeStart;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->parentEventTypes) {
            @$query['ParentEventTypes'] = $request->parentEventTypes;
        }

        if (null !== $request->remark) {
            @$query['Remark'] = $request->remark;
        }

        if (null !== $request->sortColumn) {
            @$query['SortColumn'] = $request->sortColumn;
        }

        if (null !== $request->sortType) {
            @$query['SortType'] = $request->sortType;
        }

        if (null !== $request->source) {
            @$query['Source'] = $request->source;
        }

        if (null !== $request->sourceIp) {
            @$query['SourceIp'] = $request->sourceIp;
        }

        if (null !== $request->srcIp) {
            @$query['SrcIp'] = $request->srcIp;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->strictMode) {
            @$query['StrictMode'] = $request->strictMode;
        }

        if (null !== $request->targetType) {
            @$query['TargetType'] = $request->targetType;
        }

        if (null !== $request->timeEnd) {
            @$query['TimeEnd'] = $request->timeEnd;
        }

        if (null !== $request->timeStart) {
            @$query['TimeStart'] = $request->timeStart;
        }

        if (null !== $request->uniqueInfo) {
            @$query['UniqueInfo'] = $request->uniqueInfo;
        }

        if (null !== $request->userName) {
            @$query['UserName'] = $request->userName;
        }

        if (null !== $request->uuids) {
            @$query['Uuids'] = $request->uuids;
        }

        $body = [];
        if (null !== $request->tacticId) {
            @$body['TacticId'] = $request->tacticId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeSuspEvents',
            'version' => '2024-11-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSuspEventsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries endpoint security alerts and supports filtering by alert, endpoint, and processing status.
     *
     * @param request - DescribeSuspEventsRequest
     *
     * @returns DescribeSuspEventsResponse
     *
     * @param DescribeSuspEventsRequest $request
     *
     * @return DescribeSuspEventsResponse
     */
    public function describeSuspEvents($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSuspEventsWithOptions($request, $runtime);
    }

    /**
     * Handles security alert events.
     *
     * @param request - HandleSecurityEventsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns HandleSecurityEventsResponse
     *
     * @param HandleSecurityEventsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return HandleSecurityEventsResponse
     */
    public function handleSecurityEventsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->markBatch) {
            @$query['MarkBatch'] = $request->markBatch;
        }

        if (null !== $request->markMissParam) {
            @$query['MarkMissParam'] = $request->markMissParam;
        }

        if (null !== $request->operationCode) {
            @$query['OperationCode'] = $request->operationCode;
        }

        if (null !== $request->operationParams) {
            @$query['OperationParams'] = $request->operationParams;
        }

        if (null !== $request->remark) {
            @$query['Remark'] = $request->remark;
        }

        if (null !== $request->securityEventIds) {
            @$query['SecurityEventIds'] = $request->securityEventIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'HandleSecurityEvents',
            'version' => '2024-11-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return HandleSecurityEventsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Handles security alert events.
     *
     * @param request - HandleSecurityEventsRequest
     *
     * @returns HandleSecurityEventsResponse
     *
     * @param HandleSecurityEventsRequest $request
     *
     * @return HandleSecurityEventsResponse
     */
    public function handleSecurityEvents($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->handleSecurityEventsWithOptions($request, $runtime);
    }
}
