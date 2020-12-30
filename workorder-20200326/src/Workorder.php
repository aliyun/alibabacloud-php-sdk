<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Workorder\V20200326;

use AlibabaCloud\Endpoint\Endpoint;
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
use AlibabaCloud\SDK\Workorder\V20200326\Models\ReplyTicketRequest;
use AlibabaCloud\SDK\Workorder\V20200326\Models\ReplyTicketResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

class Workorder extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'central';
        $this->_endpointMap  = [
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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @param CloseTicketRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CloseTicketResponse
     */
    public function closeTicketWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CloseTicketResponse::fromMap($this->doRPCRequest('CloseTicket', '2020-03-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param CreateTicketRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CreateTicketResponse
     */
    public function createTicketWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateTicketResponse::fromMap($this->doRPCRequest('CreateTicket', '2020-03-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param ListCategoriesRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListCategoriesResponse
     */
    public function listCategoriesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListCategoriesResponse::fromMap($this->doRPCRequest('ListCategories', '2020-03-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param ListProductsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListProductsResponse
     */
    public function listProductsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListProductsResponse::fromMap($this->doRPCRequest('ListProducts', '2020-03-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param ListTicketNotesRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListTicketNotesResponse
     */
    public function listTicketNotesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListTicketNotesResponse::fromMap($this->doRPCRequest('ListTicketNotes', '2020-03-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param ListTicketsRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListTicketsResponse
     */
    public function listTicketsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListTicketsResponse::fromMap($this->doRPCRequest('ListTickets', '2020-03-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param ReplyTicketRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ReplyTicketResponse
     */
    public function replyTicketWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ReplyTicketResponse::fromMap($this->doRPCRequest('ReplyTicket', '2020-03-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
