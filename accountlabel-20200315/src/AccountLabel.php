<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AccountLabel\V20200315;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\AccountLabel\V20200315\Models\AddCustomerLabelRequest;
use AlibabaCloud\SDK\AccountLabel\V20200315\Models\AddCustomerLabelResponse;
use AlibabaCloud\SDK\AccountLabel\V20200315\Models\BatchFetchAccountLabelRequest;
use AlibabaCloud\SDK\AccountLabel\V20200315\Models\BatchFetchAccountLabelResponse;
use AlibabaCloud\SDK\AccountLabel\V20200315\Models\BatchFetchAccountLabelShrinkRequest;
use AlibabaCloud\SDK\AccountLabel\V20200315\Models\DeleteCustomerLabelRequest;
use AlibabaCloud\SDK\AccountLabel\V20200315\Models\DeleteCustomerLabelResponse;
use AlibabaCloud\SDK\AccountLabel\V20200315\Models\QueryCustomerLabelByConfigGroupRequest;
use AlibabaCloud\SDK\AccountLabel\V20200315\Models\QueryCustomerLabelByConfigGroupResponse;
use AlibabaCloud\SDK\AccountLabel\V20200315\Models\QueryCustomerLabelRequest;
use AlibabaCloud\SDK\AccountLabel\V20200315\Models\QueryCustomerLabelResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class AccountLabel extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('accountlabel', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param request - AddCustomerLabelRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddCustomerLabelResponse
     *
     * @param AddCustomerLabelRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return AddCustomerLabelResponse
     */
    public function addCustomerLabelWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endtime) {
            @$query['Endtime'] = $request->endtime;
        }

        if (null !== $request->labelSeries) {
            @$query['LabelSeries'] = $request->labelSeries;
        }

        if (null !== $request->labelTypes) {
            @$query['LabelTypes'] = $request->labelTypes;
        }

        if (null !== $request->organization) {
            @$query['Organization'] = $request->organization;
        }

        if (null !== $request->PK) {
            @$query['PK'] = $request->PK;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->token) {
            @$query['Token'] = $request->token;
        }

        if (null !== $request->userName) {
            @$query['UserName'] = $request->userName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddCustomerLabel',
            'version' => '2020-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddCustomerLabelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - AddCustomerLabelRequest
     *
     * @returns AddCustomerLabelResponse
     *
     * @param AddCustomerLabelRequest $request
     *
     * @return AddCustomerLabelResponse
     */
    public function addCustomerLabel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addCustomerLabelWithOptions($request, $runtime);
    }

    /**
     * 传入多个labelSeries查询标签.
     *
     * @param tmpReq - BatchFetchAccountLabelRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchFetchAccountLabelResponse
     *
     * @param BatchFetchAccountLabelRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return BatchFetchAccountLabelResponse
     */
    public function batchFetchAccountLabelWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new BatchFetchAccountLabelShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->labelSeriesList) {
            $request->labelSeriesListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->labelSeriesList, 'LabelSeriesList', 'simple');
        }

        $query = [];
        if (null !== $request->instant) {
            @$query['Instant'] = $request->instant;
        }

        if (null !== $request->labelSeriesListShrink) {
            @$query['LabelSeriesList'] = $request->labelSeriesListShrink;
        }

        if (null !== $request->organization) {
            @$query['Organization'] = $request->organization;
        }

        if (null !== $request->pk) {
            @$query['Pk'] = $request->pk;
        }

        if (null !== $request->token) {
            @$query['Token'] = $request->token;
        }

        if (null !== $request->userName) {
            @$query['UserName'] = $request->userName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BatchFetchAccountLabel',
            'version' => '2020-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BatchFetchAccountLabelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 传入多个labelSeries查询标签.
     *
     * @param request - BatchFetchAccountLabelRequest
     *
     * @returns BatchFetchAccountLabelResponse
     *
     * @param BatchFetchAccountLabelRequest $request
     *
     * @return BatchFetchAccountLabelResponse
     */
    public function batchFetchAccountLabel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchFetchAccountLabelWithOptions($request, $runtime);
    }

    /**
     * @param request - DeleteCustomerLabelRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteCustomerLabelResponse
     *
     * @param DeleteCustomerLabelRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteCustomerLabelResponse
     */
    public function deleteCustomerLabelWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->labelSeries) {
            @$query['LabelSeries'] = $request->labelSeries;
        }

        if (null !== $request->labelTypes) {
            @$query['LabelTypes'] = $request->labelTypes;
        }

        if (null !== $request->organization) {
            @$query['Organization'] = $request->organization;
        }

        if (null !== $request->PK) {
            @$query['PK'] = $request->PK;
        }

        if (null !== $request->token) {
            @$query['Token'] = $request->token;
        }

        if (null !== $request->userName) {
            @$query['UserName'] = $request->userName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteCustomerLabel',
            'version' => '2020-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteCustomerLabelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DeleteCustomerLabelRequest
     *
     * @returns DeleteCustomerLabelResponse
     *
     * @param DeleteCustomerLabelRequest $request
     *
     * @return DeleteCustomerLabelResponse
     */
    public function deleteCustomerLabel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCustomerLabelWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryCustomerLabelRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryCustomerLabelResponse
     *
     * @param QueryCustomerLabelRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return QueryCustomerLabelResponse
     */
    public function queryCustomerLabelWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instant) {
            @$query['Instant'] = $request->instant;
        }

        if (null !== $request->labelSeries) {
            @$query['LabelSeries'] = $request->labelSeries;
        }

        if (null !== $request->PK) {
            @$query['PK'] = $request->PK;
        }

        if (null !== $request->token) {
            @$query['Token'] = $request->token;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryCustomerLabel',
            'version' => '2020-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryCustomerLabelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryCustomerLabelRequest
     *
     * @returns QueryCustomerLabelResponse
     *
     * @param QueryCustomerLabelRequest $request
     *
     * @return QueryCustomerLabelResponse
     */
    public function queryCustomerLabel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryCustomerLabelWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryCustomerLabelByConfigGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryCustomerLabelByConfigGroupResponse
     *
     * @param QueryCustomerLabelByConfigGroupRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return QueryCustomerLabelByConfigGroupResponse
     */
    public function queryCustomerLabelByConfigGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->groupType) {
            @$query['GroupType'] = $request->groupType;
        }

        if (null !== $request->PK) {
            @$query['PK'] = $request->PK;
        }

        if (null !== $request->token) {
            @$query['Token'] = $request->token;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryCustomerLabelByConfigGroup',
            'version' => '2020-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryCustomerLabelByConfigGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryCustomerLabelByConfigGroupRequest
     *
     * @returns QueryCustomerLabelByConfigGroupResponse
     *
     * @param QueryCustomerLabelByConfigGroupRequest $request
     *
     * @return QueryCustomerLabelByConfigGroupResponse
     */
    public function queryCustomerLabelByConfigGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryCustomerLabelByConfigGroupWithOptions($request, $runtime);
    }
}
