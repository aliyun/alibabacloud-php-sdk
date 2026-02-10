<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Workorder\V20200326;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Workorder\V20200326\Models\CloseTicketRequest;
use AlibabaCloud\SDK\Workorder\V20200326\Models\CloseTicketResponse;
use AlibabaCloud\SDK\Workorder\V20200326\Models\CreateTicketRequest;
use AlibabaCloud\SDK\Workorder\V20200326\Models\CreateTicketResponse;
use AlibabaCloud\SDK\Workorder\V20200326\Models\ListCategoriesRequest;
use AlibabaCloud\SDK\Workorder\V20200326\Models\ListCategoriesResponse;
use AlibabaCloud\SDK\Workorder\V20200326\Models\ListProductsRequest;
use AlibabaCloud\SDK\Workorder\V20200326\Models\ListProductsResponse;
use AlibabaCloud\SDK\Workorder\V20200326\Models\ListTicketNotesRequest;
use AlibabaCloud\SDK\Workorder\V20200326\Models\ListTicketNotesResponse;
use AlibabaCloud\SDK\Workorder\V20200326\Models\ListTicketsRequest;
use AlibabaCloud\SDK\Workorder\V20200326\Models\ListTicketsResponse;
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
     * @deprecated openAPI CloseTicket is deprecated, please use Workorder::2021-06-10::CloseTicket instead
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
        $query = [];
        if (null !== $request->language) {
            @$query['Language'] = $request->language;
        }

        if (null !== $request->ticketId) {
            @$query['TicketId'] = $request->ticketId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CloseTicket',
            'version' => '2020-03-26',
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

    // Deprecated
    /**
     * @deprecated openAPI CloseTicket is deprecated, please use Workorder::2021-06-10::CloseTicket instead
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
        if (null !== $request->category) {
            @$query['Category'] = $request->category;
        }

        if (null !== $request->content) {
            @$query['Content'] = $request->content;
        }

        if (null !== $request->email) {
            @$query['Email'] = $request->email;
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
            'version' => '2020-03-26',
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
     * @deprecated openAPI ListCategories is deprecated, please use Workorder::2021-06-10::ListCategories instead
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

        if (null !== $request->productCode) {
            @$query['ProductCode'] = $request->productCode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListCategories',
            'version' => '2020-03-26',
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

    // Deprecated
    /**
     * @deprecated openAPI ListCategories is deprecated, please use Workorder::2021-06-10::ListCategories instead
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
     * @deprecated openAPI ListProducts is deprecated, please use Workorder::2021-06-10::ListProducts instead
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListProducts',
            'version' => '2020-03-26',
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

    // Deprecated
    /**
     * @deprecated openAPI ListProducts is deprecated, please use Workorder::2021-06-10::ListProducts instead
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
     * @deprecated openAPI ListTicketNotes is deprecated, please use Workorder::2021-06-10::ListTicketNotes instead
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
        if (null !== $request->language) {
            @$query['Language'] = $request->language;
        }

        if (null !== $request->ticketId) {
            @$query['TicketId'] = $request->ticketId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTicketNotes',
            'version' => '2020-03-26',
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

    // Deprecated
    /**
     * @deprecated openAPI ListTicketNotes is deprecated, please use Workorder::2021-06-10::ListTicketNotes instead
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

        if (null !== $request->ids) {
            @$query['Ids'] = $request->ids;
        }

        if (null !== $request->language) {
            @$query['Language'] = $request->language;
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

        if (null !== $request->subUserId) {
            @$query['SubUserId'] = $request->subUserId;
        }

        if (null !== $request->ticketStatus) {
            @$query['TicketStatus'] = $request->ticketStatus;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTickets',
            'version' => '2020-03-26',
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
