<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Metaspace\V20221014;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Metaspace\V20221014\Models\ApplyCoordinationForCoordinatorRequest;
use AlibabaCloud\SDK\Metaspace\V20221014\Models\ApplyCoordinationForCoordinatorResponse;
use AlibabaCloud\SDK\Metaspace\V20221014\Models\CancelCoordinationRequest;
use AlibabaCloud\SDK\Metaspace\V20221014\Models\CancelCoordinationResponse;
use AlibabaCloud\SDK\Metaspace\V20221014\Models\GetCoordinationTicketRequest;
use AlibabaCloud\SDK\Metaspace\V20221014\Models\GetCoordinationTicketResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Metaspace extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('metaspace', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 协同者发起流协同请求并获取协同ticket的API接口。
     *
     * @remarks
     * ## 请求说明
     * - 该API为内部使用，主要用于协同者发起流协同。
     * - `DependOnMainStream`参数指定了是否依赖主流的状态来建立或断开协同流。
     * - 当`InitiatorType`设置为强制协同类型时（如`ADMIN_INITIATE_FORCE`或`COORDINATOR_INITIATE_FORCE`），将返回一个`CoordinateTicket`。
     * - 协同资源列表`CoordinationResourceCandidates`中必须包含至少一项资源信息，并且所有提供的资源ID、类型和地区等信息需准确无误。
     * - 确保`OwnerAliUid`与协同者的租户ID相同，否则可能无法成功发起协同请求。
     * - 对于AD用户，请务必填写`AdDomainName`字段。
     *
     * @param request - ApplyCoordinationForCoordinatorRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ApplyCoordinationForCoordinatorResponse
     *
     * @param ApplyCoordinationForCoordinatorRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return ApplyCoordinationForCoordinatorResponse
     */
    public function applyCoordinationForCoordinatorWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        $bodyFlat = [];
        if (null !== $request->coordinationResourceCandidates) {
            @$bodyFlat['CoordinationResourceCandidates'] = $request->coordinationResourceCandidates;
        }

        if (null !== $request->initiatorType) {
            @$body['InitiatorType'] = $request->initiatorType;
        }

        if (null !== $request->uuid) {
            @$body['Uuid'] = $request->uuid;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ApplyCoordinationForCoordinator',
            'version' => '2022-10-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ApplyCoordinationForCoordinatorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 协同者发起流协同请求并获取协同ticket的API接口。
     *
     * @remarks
     * ## 请求说明
     * - 该API为内部使用，主要用于协同者发起流协同。
     * - `DependOnMainStream`参数指定了是否依赖主流的状态来建立或断开协同流。
     * - 当`InitiatorType`设置为强制协同类型时（如`ADMIN_INITIATE_FORCE`或`COORDINATOR_INITIATE_FORCE`），将返回一个`CoordinateTicket`。
     * - 协同资源列表`CoordinationResourceCandidates`中必须包含至少一项资源信息，并且所有提供的资源ID、类型和地区等信息需准确无误。
     * - 确保`OwnerAliUid`与协同者的租户ID相同，否则可能无法成功发起协同请求。
     * - 对于AD用户，请务必填写`AdDomainName`字段。
     *
     * @param request - ApplyCoordinationForCoordinatorRequest
     *
     * @returns ApplyCoordinationForCoordinatorResponse
     *
     * @param ApplyCoordinationForCoordinatorRequest $request
     *
     * @return ApplyCoordinationForCoordinatorResponse
     */
    public function applyCoordinationForCoordinator($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->applyCoordinationForCoordinatorWithOptions($request, $runtime);
    }

    /**
     * 取消协同请求
     *
     * @param request - CancelCoordinationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CancelCoordinationResponse
     *
     * @param CancelCoordinationRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CancelCoordinationResponse
     */
    public function cancelCoordinationWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        $bodyFlat = [];
        if (null !== $request->coIds) {
            @$bodyFlat['CoIds'] = $request->coIds;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CancelCoordination',
            'version' => '2022-10-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CancelCoordinationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 取消协同请求
     *
     * @param request - CancelCoordinationRequest
     *
     * @returns CancelCoordinationResponse
     *
     * @param CancelCoordinationRequest $request
     *
     * @return CancelCoordinationResponse
     */
    public function cancelCoordination($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelCoordinationWithOptions($request, $runtime);
    }

    /**
     * 获取协同流连接ticket.
     *
     * @param request - GetCoordinationTicketRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetCoordinationTicketResponse
     *
     * @param GetCoordinationTicketRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetCoordinationTicketResponse
     */
    public function getCoordinationTicketWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->coId) {
            @$body['CoId'] = $request->coId;
        }

        if (null !== $request->taskId) {
            @$body['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetCoordinationTicket',
            'version' => '2022-10-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetCoordinationTicketResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取协同流连接ticket.
     *
     * @param request - GetCoordinationTicketRequest
     *
     * @returns GetCoordinationTicketResponse
     *
     * @param GetCoordinationTicketRequest $request
     *
     * @return GetCoordinationTicketResponse
     */
    public function getCoordinationTicket($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCoordinationTicketWithOptions($request, $runtime);
    }
}
