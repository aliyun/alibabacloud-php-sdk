<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Workorder\V20200801;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Workorder\V20200801\Models\CreateTicketRequest;
use AlibabaCloud\SDK\Workorder\V20200801\Models\CreateTicketResponse;
use AlibabaCloud\SDK\Workorder\V20200801\Models\GetAttachmentUploadUrlRequest;
use AlibabaCloud\SDK\Workorder\V20200801\Models\GetAttachmentUploadUrlResponse;
use AlibabaCloud\SDK\Workorder\V20200801\Models\GetAttachmentUrlRequest;
use AlibabaCloud\SDK\Workorder\V20200801\Models\GetAttachmentUrlResponse;
use AlibabaCloud\SDK\Workorder\V20200801\Models\GetTicketRequest;
use AlibabaCloud\SDK\Workorder\V20200801\Models\GetTicketResponse;
use AlibabaCloud\SDK\Workorder\V20200801\Models\ListTicketsRequest;
use AlibabaCloud\SDK\Workorder\V20200801\Models\ListTicketsResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Workorder extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'central';
        $this->_endpointMap = [
            'ap-northeast-1' => 'workorder.ap-northeast-1.aliyuncs.com',
            'ap-southeast-1' => 'workorder.ap-southeast-1.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('workorder', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @deprecated openAPI CreateTicket is deprecated, please use Workorder::2021-06-10::CreateTicket instead
     *
     * @param request - CreateTicketRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateTicketResponse
     *
     * @param CreateTicketRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CreateTicketResponse
     */
    public function createTicketWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->commonQuestionId) {
            @$query['CommonQuestionId'] = $request->commonQuestionId;
        }

        if (null !== $request->content) {
            @$query['Content'] = $request->content;
        }

        if (null !== $request->email) {
            @$query['Email'] = $request->email;
        }

        if (null !== $request->fileNameList) {
            @$query['FileNameList'] = $request->fileNameList;
        }

        if (null !== $request->language) {
            @$query['Language'] = $request->language;
        }

        if (null !== $request->notifyTimeRange) {
            @$query['NotifyTimeRange'] = $request->notifyTimeRange;
        }

        if (null !== $request->phone) {
            @$query['Phone'] = $request->phone;
        }

        if (null !== $request->productCode) {
            @$query['ProductCode'] = $request->productCode;
        }

        if (null !== $request->secretContent) {
            @$query['SecretContent'] = $request->secretContent;
        }

        if (null !== $request->title) {
            @$query['Title'] = $request->title;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateTicket',
            'version' => '2020-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateTicketResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * @deprecated openAPI CreateTicket is deprecated, please use Workorder::2021-06-10::CreateTicket instead
     *
     * @param request - CreateTicketRequest
     *
     * @returns CreateTicketResponse
     *
     * @param CreateTicketRequest $request
     *
     * @return CreateTicketResponse
     */
    public function createTicket($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTicketWithOptions($request, $runtime);
    }

    /**
     * @param request - GetAttachmentUploadUrlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAttachmentUploadUrlResponse
     *
     * @param GetAttachmentUploadUrlRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetAttachmentUploadUrlResponse
     */
    public function getAttachmentUploadUrlWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fileName) {
            @$query['FileName'] = $request->fileName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAttachmentUploadUrl',
            'version' => '2020-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAttachmentUploadUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetAttachmentUploadUrlRequest
     *
     * @returns GetAttachmentUploadUrlResponse
     *
     * @param GetAttachmentUploadUrlRequest $request
     *
     * @return GetAttachmentUploadUrlResponse
     */
    public function getAttachmentUploadUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAttachmentUploadUrlWithOptions($request, $runtime);
    }

    /**
     * @param request - GetAttachmentUrlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAttachmentUrlResponse
     *
     * @param GetAttachmentUrlRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetAttachmentUrlResponse
     */
    public function getAttachmentUrlWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->attachName) {
            @$query['AttachName'] = $request->attachName;
        }

        if (null !== $request->noteId) {
            @$query['NoteId'] = $request->noteId;
        }

        if (null !== $request->ticketId) {
            @$query['TicketId'] = $request->ticketId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAttachmentUrl',
            'version' => '2020-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAttachmentUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetAttachmentUrlRequest
     *
     * @returns GetAttachmentUrlResponse
     *
     * @param GetAttachmentUrlRequest $request
     *
     * @return GetAttachmentUrlResponse
     */
    public function getAttachmentUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAttachmentUrlWithOptions($request, $runtime);
    }

    /**
     * @deprecated openAPI GetTicket is deprecated, please use Workorder::2021-06-10::GetTicket instead
     *
     * @param request - GetTicketRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTicketResponse
     *
     * @param GetTicketRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return GetTicketResponse
     */
    public function getTicketWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ticketId) {
            @$query['TicketId'] = $request->ticketId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetTicket',
            'version' => '2020-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetTicketResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * @deprecated openAPI GetTicket is deprecated, please use Workorder::2021-06-10::GetTicket instead
     *
     * @param request - GetTicketRequest
     *
     * @returns GetTicketResponse
     *
     * @param GetTicketRequest $request
     *
     * @return GetTicketResponse
     */
    public function getTicket($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTicketWithOptions($request, $runtime);
    }

    /**
     * @deprecated openAPI ListTickets is deprecated, please use Workorder::2021-06-10::ListTickets instead
     *
     * @param request - ListTicketsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTicketsResponse
     *
     * @param ListTicketsRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListTicketsResponse
     */
    public function listTicketsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->createdAfterTime) {
            @$query['CreatedAfterTime'] = $request->createdAfterTime;
        }

        if (null !== $request->createdBeforeTime) {
            @$query['CreatedBeforeTime'] = $request->createdBeforeTime;
        }

        if (null !== $request->extraConditionList) {
            @$query['ExtraConditionList'] = $request->extraConditionList;
        }

        if (null !== $request->ids) {
            @$query['Ids'] = $request->ids;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->pageStart) {
            @$query['PageStart'] = $request->pageStart;
        }

        if (null !== $request->productCode) {
            @$query['ProductCode'] = $request->productCode;
        }

        if (null !== $request->ticketStatus) {
            @$query['TicketStatus'] = $request->ticketStatus;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTickets',
            'version' => '2020-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListTicketsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * @deprecated openAPI ListTickets is deprecated, please use Workorder::2021-06-10::ListTickets instead
     *
     * @param request - ListTicketsRequest
     *
     * @returns ListTicketsResponse
     *
     * @param ListTicketsRequest $request
     *
     * @return ListTicketsResponse
     */
    public function listTickets($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTicketsWithOptions($request, $runtime);
    }
}
