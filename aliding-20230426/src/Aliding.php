<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateSheetHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateSheetRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateSheetResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateSheetShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateSheetShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\InsertRowsBeforeHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\InsertRowsBeforeRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\InsertRowsBeforeResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\InsertRowsBeforeShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\InsertRowsBeforeShrinkRequest;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Aliding extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('aliding', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param CreateSheetRequest $tmpReq
     * @param CreateSheetHeaders $tmpHeader
     * @param RuntimeOptions     $runtime
     *
     * @return CreateSheetResponse
     */
    public function createSheetWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateSheetShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new CreateSheetShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        if (!Utils::isUnset($request->workbookId)) {
            $body['WorkbookId'] = $request->workbookId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateSheet',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/documents/createSheet',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateSheetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateSheetRequest $request
     *
     * @return CreateSheetResponse
     */
    public function createSheet($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CreateSheetHeaders([]);

        return $this->createSheetWithOptions($request, $headers, $runtime);
    }

    /**
     * @param InsertRowsBeforeRequest $tmpReq
     * @param InsertRowsBeforeHeaders $tmpHeader
     * @param RuntimeOptions          $runtime
     *
     * @return InsertRowsBeforeResponse
     */
    public function insertRowsBeforeWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new InsertRowsBeforeShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new InsertRowsBeforeShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->row)) {
            $body['Row'] = $request->row;
        }
        if (!Utils::isUnset($request->rowCount)) {
            $body['RowCount'] = $request->rowCount;
        }
        if (!Utils::isUnset($request->sheetId)) {
            $body['SheetId'] = $request->sheetId;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        if (!Utils::isUnset($request->workbookId)) {
            $body['WorkbookId'] = $request->workbookId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'InsertRowsBefore',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/documents/insertRowsBefore',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return InsertRowsBeforeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param InsertRowsBeforeRequest $request
     *
     * @return InsertRowsBeforeResponse
     */
    public function insertRowsBefore($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new InsertRowsBeforeHeaders([]);

        return $this->insertRowsBeforeWithOptions($request, $headers, $runtime);
    }
}
