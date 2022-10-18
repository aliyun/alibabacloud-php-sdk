<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Workorder\V20210610;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
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
use AlibabaCloud\Tea\Tea;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
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
        $body = [];
        if (!Utils::isUnset($request->ticketId)) {
            $body['TicketId'] = $request->ticketId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CloseTicket',
            'version'     => '2021-06-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CloseTicketResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param CreateTicketRequest $tmpReq
     * @param RuntimeOptions      $runtime
     *
     * @return CreateTicketResponse
     */
    public function createTicketWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateTicketShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->fileNameList)) {
            $request->fileNameListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->fileNameList, 'FileNameList', 'simple');
        }
        if (!Utils::isUnset($tmpReq->secretInfo)) {
            $request->secretInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->secretInfo), 'SecretInfo', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->secretInfoShrink)) {
            $query['SecretInfo'] = $request->secretInfoShrink;
        }
        $body = [];
        if (!Utils::isUnset($request->categoryId)) {
            $body['CategoryId'] = $request->categoryId;
        }
        if (!Utils::isUnset($request->creatorId)) {
            $body['CreatorId'] = $request->creatorId;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->email)) {
            $body['Email'] = $request->email;
        }
        if (!Utils::isUnset($request->fileNameListShrink)) {
            $body['FileNameList'] = $request->fileNameListShrink;
        }
        if (!Utils::isUnset($request->severity)) {
            $body['Severity'] = $request->severity;
        }
        if (!Utils::isUnset($request->title)) {
            $body['Title'] = $request->title;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateTicket',
            'version'     => '2021-06-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateTicketResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param EvaluateTicketRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return EvaluateTicketResponse
     */
    public function evaluateTicketWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->content)) {
            $body['Content'] = $request->content;
        }
        if (!Utils::isUnset($request->score)) {
            $body['Score'] = $request->score;
        }
        if (!Utils::isUnset($request->solved)) {
            $body['Solved'] = $request->solved;
        }
        if (!Utils::isUnset($request->ticketId)) {
            $body['TicketId'] = $request->ticketId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'EvaluateTicket',
            'version'     => '2021-06-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EvaluateTicketResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param GetAttachmentUploadUrlRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetAttachmentUploadUrlResponse
     */
    public function getAttachmentUploadUrlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->fileName)) {
            $body['FileName'] = $request->fileName;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetAttachmentUploadUrl',
            'version'     => '2021-06-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAttachmentUploadUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param RuntimeOptions $runtime
     *
     * @return GetMqConsumerTagResponse
     */
    public function getMqConsumerTagWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'GetMqConsumerTag',
            'version'     => '2021-06-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetMqConsumerTagResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return GetMqConsumerTagResponse
     */
    public function getMqConsumerTag()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMqConsumerTagWithOptions($runtime);
    }

    /**
     * @param GetTicketRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return GetTicketResponse
     */
    public function getTicketWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->ticketId)) {
            $body['TicketId'] = $request->ticketId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetTicket',
            'version'     => '2021-06-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetTicketResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ListCategoriesRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListCategoriesResponse
     */
    public function listCategoriesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->language)) {
            $query['Language'] = $request->language;
        }
        $body = [];
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->productId)) {
            $body['ProductId'] = $request->productId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListCategories',
            'version'     => '2021-06-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListCategoriesResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->language)) {
            $query['Language'] = $request->language;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListProducts',
            'version'     => '2021-06-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListProductsResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->ticketId)) {
            $query['TicketId'] = $request->ticketId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTicketNotes',
            'version'     => '2021-06-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListTicketNotesResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ListTicketsRequest $tmpReq
     * @param RuntimeOptions     $runtime
     *
     * @return ListTicketsResponse
     */
    public function listTicketsWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListTicketsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->ticketIdList)) {
            $request->ticketIdListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->ticketIdList, 'TicketIdList', 'simple');
        }
        $query = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $body = [];
        if (!Utils::isUnset($request->endDate)) {
            $body['EndDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->keyword)) {
            $body['Keyword'] = $request->keyword;
        }
        if (!Utils::isUnset($request->startDate)) {
            $body['StartDate'] = $request->startDate;
        }
        if (!Utils::isUnset($request->statusList)) {
            $body['StatusList'] = $request->statusList;
        }
        if (!Utils::isUnset($request->ticketId)) {
            $body['TicketId'] = $request->ticketId;
        }
        if (!Utils::isUnset($request->ticketIdListShrink)) {
            $body['TicketIdList'] = $request->ticketIdListShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListTickets',
            'version'     => '2021-06-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListTicketsResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ReopenTicketRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ReopenTicketResponse
     */
    public function reopenTicketWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->content)) {
            $body['Content'] = $request->content;
        }
        if (!Utils::isUnset($request->ticketId)) {
            $body['TicketId'] = $request->ticketId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ReopenTicket',
            'version'     => '2021-06-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ReopenTicketResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ReplyTicketRequest $tmpReq
     * @param RuntimeOptions     $runtime
     *
     * @return ReplyTicketResponse
     */
    public function replyTicketWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ReplyTicketShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->fileNameList)) {
            $request->fileNameListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->fileNameList, 'FileNameList', 'simple');
        }
        $query = [];
        if (!Utils::isUnset($request->fileNameListShrink)) {
            $query['FileNameList'] = $request->fileNameListShrink;
        }
        $body = [];
        if (!Utils::isUnset($request->content)) {
            $body['Content'] = $request->content;
        }
        if (!Utils::isUnset($request->encrypt)) {
            $body['Encrypt'] = $request->encrypt;
        }
        if (!Utils::isUnset($request->ticketId)) {
            $body['TicketId'] = $request->ticketId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ReplyTicket',
            'version'     => '2021-06-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ReplyTicketResponse::fromMap($this->callApi($params, $req, $runtime));
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
