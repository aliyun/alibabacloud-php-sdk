<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Workorder\V20210610;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Workorder\V20210610\Models\CloseTicketRequest;
use AlibabaCloud\SDK\Workorder\V20210610\Models\CloseTicketResponse;
use AlibabaCloud\SDK\Workorder\V20210610\Models\CreateTicketRequest;
use AlibabaCloud\SDK\Workorder\V20210610\Models\CreateTicketResponse;
use AlibabaCloud\SDK\Workorder\V20210610\Models\CreateTicketShrinkRequest;
use AlibabaCloud\SDK\Workorder\V20210610\Models\EvaluateTicketRequest;
use AlibabaCloud\SDK\Workorder\V20210610\Models\EvaluateTicketResponse;
use AlibabaCloud\SDK\Workorder\V20210610\Models\GetAttachmentUploadUrlRequest;
use AlibabaCloud\SDK\Workorder\V20210610\Models\GetAttachmentUploadUrlResponse;
use AlibabaCloud\SDK\Workorder\V20210610\Models\GetMqConsumerTagResponse;
use AlibabaCloud\SDK\Workorder\V20210610\Models\GetTicketRequest;
use AlibabaCloud\SDK\Workorder\V20210610\Models\GetTicketResponse;
use AlibabaCloud\SDK\Workorder\V20210610\Models\ListCategoriesRequest;
use AlibabaCloud\SDK\Workorder\V20210610\Models\ListCategoriesResponse;
use AlibabaCloud\SDK\Workorder\V20210610\Models\ListProductsRequest;
use AlibabaCloud\SDK\Workorder\V20210610\Models\ListProductsResponse;
use AlibabaCloud\SDK\Workorder\V20210610\Models\ListTicketNotesRequest;
use AlibabaCloud\SDK\Workorder\V20210610\Models\ListTicketNotesResponse;
use AlibabaCloud\SDK\Workorder\V20210610\Models\ListTicketsRequest;
use AlibabaCloud\SDK\Workorder\V20210610\Models\ListTicketsResponse;
use AlibabaCloud\SDK\Workorder\V20210610\Models\ListTicketsShrinkRequest;
use AlibabaCloud\SDK\Workorder\V20210610\Models\ReopenTicketRequest;
use AlibabaCloud\SDK\Workorder\V20210610\Models\ReopenTicketResponse;
use AlibabaCloud\SDK\Workorder\V20210610\Models\ReplyTicketRequest;
use AlibabaCloud\SDK\Workorder\V20210610\Models\ReplyTicketResponse;
use AlibabaCloud\SDK\Workorder\V20210610\Models\ReplyTicketShrinkRequest;
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
     * Closes a ticket.
     *
     * @param request - CloseTicketRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CloseTicketResponse
     *
     * @param CloseTicketRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CloseTicketResponse
     */
    public function closeTicketWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->ticketId) {
            @$body['TicketId'] = $request->ticketId;
        }

        if (null !== $request->uid) {
            @$body['Uid'] = $request->uid;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CloseTicket',
            'version' => '2021-06-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CloseTicketResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Closes a ticket.
     *
     * @param request - CloseTicketRequest
     *
     * @returns CloseTicketResponse
     *
     * @param CloseTicketRequest $request
     *
     * @return CloseTicketResponse
     */
    public function closeTicket($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->closeTicketWithOptions($request, $runtime);
    }

    /**
     * Creates a ticket.
     *
     * @param tmpReq - CreateTicketRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateTicketResponse
     *
     * @param CreateTicketRequest $tmpReq
     * @param RuntimeOptions      $runtime
     *
     * @return CreateTicketResponse
     */
    public function createTicketWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateTicketShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->fileNameList) {
            $request->fileNameListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->fileNameList, 'FileNameList', 'simple');
        }

        if (null !== $tmpReq->secretInfo) {
            $request->secretInfoShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->secretInfo, 'SecretInfo', 'json');
        }

        $query = [];
        if (null !== $request->secretInfoShrink) {
            @$query['SecretInfo'] = $request->secretInfoShrink;
        }

        $body = [];
        if (null !== $request->categoryId) {
            @$body['CategoryId'] = $request->categoryId;
        }

        if (null !== $request->creatorId) {
            @$body['CreatorId'] = $request->creatorId;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->email) {
            @$body['Email'] = $request->email;
        }

        if (null !== $request->fileNameListShrink) {
            @$body['FileNameList'] = $request->fileNameListShrink;
        }

        if (null !== $request->severity) {
            @$body['Severity'] = $request->severity;
        }

        if (null !== $request->title) {
            @$body['Title'] = $request->title;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateTicket',
            'version' => '2021-06-10',
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

    /**
     * Creates a ticket.
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
     * Evaluates a ticket.
     *
     * @param request - EvaluateTicketRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EvaluateTicketResponse
     *
     * @param EvaluateTicketRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return EvaluateTicketResponse
     */
    public function evaluateTicketWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->content) {
            @$body['Content'] = $request->content;
        }

        if (null !== $request->score) {
            @$body['Score'] = $request->score;
        }

        if (null !== $request->solved) {
            @$body['Solved'] = $request->solved;
        }

        if (null !== $request->ticketId) {
            @$body['TicketId'] = $request->ticketId;
        }

        if (null !== $request->uid) {
            @$body['Uid'] = $request->uid;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'EvaluateTicket',
            'version' => '2021-06-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EvaluateTicketResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Evaluates a ticket.
     *
     * @param request - EvaluateTicketRequest
     *
     * @returns EvaluateTicketResponse
     *
     * @param EvaluateTicketRequest $request
     *
     * @return EvaluateTicketResponse
     */
    public function evaluateTicket($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->evaluateTicketWithOptions($request, $runtime);
    }

    /**
     * Queries the Object Storage Service (OSS) URL that is used to upload attachments.
     *
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
        $body = [];
        if (null !== $request->fileName) {
            @$body['FileName'] = $request->fileName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetAttachmentUploadUrl',
            'version' => '2021-06-10',
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
     * Queries the Object Storage Service (OSS) URL that is used to upload attachments.
     *
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
     * @param request - GetMqConsumerTagRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetMqConsumerTagResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return GetMqConsumerTagResponse
     */
    public function getMqConsumerTagWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'GetMqConsumerTag',
            'version' => '2021-06-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetMqConsumerTagResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @returns GetMqConsumerTagResponse
     *
     * @return GetMqConsumerTagResponse
     */
    public function getMqConsumerTag()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMqConsumerTagWithOptions($runtime);
    }

    /**
     * Query tickets.
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
        $body = [];
        if (null !== $request->ticketId) {
            @$body['TicketId'] = $request->ticketId;
        }

        if (null !== $request->uid) {
            @$body['Uid'] = $request->uid;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetTicket',
            'version' => '2021-06-10',
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

    /**
     * Query tickets.
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
     * Obtains the list data of ticket problem categories.
     *
     * @param request - ListCategoriesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListCategoriesResponse
     *
     * @param ListCategoriesRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListCategoriesResponse
     */
    public function listCategoriesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->language) {
            @$query['Language'] = $request->language;
        }

        $body = [];
        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->productId) {
            @$body['ProductId'] = $request->productId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListCategories',
            'version' => '2021-06-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListCategoriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains the list data of ticket problem categories.
     *
     * @param request - ListCategoriesRequest
     *
     * @returns ListCategoriesResponse
     *
     * @param ListCategoriesRequest $request
     *
     * @return ListCategoriesResponse
     */
    public function listCategories($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCategoriesWithOptions($request, $runtime);
    }

    /**
     * Obtains the data of the Alibaba Cloud product list.
     *
     * @param request - ListProductsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListProductsResponse
     *
     * @param ListProductsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListProductsResponse
     */
    public function listProductsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->language) {
            @$query['Language'] = $request->language;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListProducts',
            'version' => '2021-06-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListProductsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains the data of the Alibaba Cloud product list.
     *
     * @param request - ListProductsRequest
     *
     * @returns ListProductsResponse
     *
     * @param ListProductsRequest $request
     *
     * @return ListProductsResponse
     */
    public function listProducts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listProductsWithOptions($request, $runtime);
    }

    /**
     * Obtains the ticket communication records.
     *
     * @param request - ListTicketNotesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTicketNotesResponse
     *
     * @param ListTicketNotesRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListTicketNotesResponse
     */
    public function listTicketNotesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ticketId) {
            @$query['TicketId'] = $request->ticketId;
        }

        if (null !== $request->uid) {
            @$query['Uid'] = $request->uid;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTicketNotes',
            'version' => '2021-06-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListTicketNotesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains the ticket communication records.
     *
     * @param request - ListTicketNotesRequest
     *
     * @returns ListTicketNotesResponse
     *
     * @param ListTicketNotesRequest $request
     *
     * @return ListTicketNotesResponse
     */
    public function listTicketNotes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTicketNotesWithOptions($request, $runtime);
    }

    /**
     * You can call this operation to obtain the list of my tickets.
     *
     * @param tmpReq - ListTicketsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTicketsResponse
     *
     * @param ListTicketsRequest $tmpReq
     * @param RuntimeOptions     $runtime
     *
     * @return ListTicketsResponse
     */
    public function listTicketsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListTicketsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->ticketIdList) {
            $request->ticketIdListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->ticketIdList, 'TicketIdList', 'simple');
        }

        $query = [];
        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $body = [];
        if (null !== $request->endDate) {
            @$body['EndDate'] = $request->endDate;
        }

        if (null !== $request->keyword) {
            @$body['Keyword'] = $request->keyword;
        }

        if (null !== $request->startDate) {
            @$body['StartDate'] = $request->startDate;
        }

        if (null !== $request->statusList) {
            @$body['StatusList'] = $request->statusList;
        }

        if (null !== $request->ticketId) {
            @$body['TicketId'] = $request->ticketId;
        }

        if (null !== $request->ticketIdListShrink) {
            @$body['TicketIdList'] = $request->ticketIdListShrink;
        }

        if (null !== $request->uid) {
            @$body['Uid'] = $request->uid;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListTickets',
            'version' => '2021-06-10',
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

    /**
     * You can call this operation to obtain the list of my tickets.
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

    /**
     * Reopens a ticket.
     *
     * @param request - ReopenTicketRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ReopenTicketResponse
     *
     * @param ReopenTicketRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ReopenTicketResponse
     */
    public function reopenTicketWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->content) {
            @$body['Content'] = $request->content;
        }

        if (null !== $request->ticketId) {
            @$body['TicketId'] = $request->ticketId;
        }

        if (null !== $request->uid) {
            @$body['Uid'] = $request->uid;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ReopenTicket',
            'version' => '2021-06-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ReopenTicketResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Reopens a ticket.
     *
     * @param request - ReopenTicketRequest
     *
     * @returns ReopenTicketResponse
     *
     * @param ReopenTicketRequest $request
     *
     * @return ReopenTicketResponse
     */
    public function reopenTicket($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->reopenTicketWithOptions($request, $runtime);
    }

    /**
     * Reply to the ticket. You can call the ListTicketNotes operation to obtain the content of the reply.
     *
     * @param tmpReq - ReplyTicketRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ReplyTicketResponse
     *
     * @param ReplyTicketRequest $tmpReq
     * @param RuntimeOptions     $runtime
     *
     * @return ReplyTicketResponse
     */
    public function replyTicketWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ReplyTicketShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->fileNameList) {
            $request->fileNameListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->fileNameList, 'FileNameList', 'simple');
        }

        $query = [];
        if (null !== $request->fileNameListShrink) {
            @$query['FileNameList'] = $request->fileNameListShrink;
        }

        $body = [];
        if (null !== $request->content) {
            @$body['Content'] = $request->content;
        }

        if (null !== $request->encrypt) {
            @$body['Encrypt'] = $request->encrypt;
        }

        if (null !== $request->ticketId) {
            @$body['TicketId'] = $request->ticketId;
        }

        if (null !== $request->uid) {
            @$body['Uid'] = $request->uid;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ReplyTicket',
            'version' => '2021-06-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ReplyTicketResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Reply to the ticket. You can call the ListTicketNotes operation to obtain the content of the reply.
     *
     * @param request - ReplyTicketRequest
     *
     * @returns ReplyTicketResponse
     *
     * @param ReplyTicketRequest $request
     *
     * @return ReplyTicketResponse
     */
    public function replyTicket($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->replyTicketWithOptions($request, $runtime);
    }
}
