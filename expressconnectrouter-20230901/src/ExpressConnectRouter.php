<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ExpressConnectRouter\V20230901;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\ActivateFlowLogRequest;
use AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\ActivateFlowLogResponse;
use AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\AttachExpressConnectRouterChildInstanceRequest;
use AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\AttachExpressConnectRouterChildInstanceResponse;
use AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\CheckAddRegionToExpressConnectRouterRequest;
use AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\CheckAddRegionToExpressConnectRouterResponse;
use AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\CreateExpressConnectRouterAssociationRequest;
use AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\CreateExpressConnectRouterAssociationResponse;
use AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\CreateExpressConnectRouterRequest;
use AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\CreateExpressConnectRouterResponse;
use AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\CreateFlowLogRequest;
use AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\CreateFlowLogResponse;
use AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\CreateRouteMapAssociationRequest;
use AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\CreateRouteMapAssociationResponse;
use AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\DeactivateFlowLogRequest;
use AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\DeactivateFlowLogResponse;
use AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\DeleteExpressConnectRouterAssociationRequest;
use AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\DeleteExpressConnectRouterAssociationResponse;
use AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\DeleteExpressConnectRouterRequest;
use AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\DeleteExpressConnectRouterResponse;
use AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\DeleteFlowlogRequest;
use AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\DeleteFlowlogResponse;
use AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\DeleteRouteMapAssociationRequest;
use AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\DeleteRouteMapAssociationResponse;
use AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\DescribeDisabledExpressConnectRouterRouteEntriesRequest;
use AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\DescribeDisabledExpressConnectRouterRouteEntriesResponse;
use AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\DescribeExpressConnectRouterAllowedPrefixHistoryRequest;
use AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\DescribeExpressConnectRouterAllowedPrefixHistoryResponse;
use AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\DescribeExpressConnectRouterAssociationRequest;
use AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\DescribeExpressConnectRouterAssociationResponse;
use AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\DescribeExpressConnectRouterChildInstanceRequest;
use AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\DescribeExpressConnectRouterChildInstanceResponse;
use AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\DescribeExpressConnectRouterInterRegionTransitModeRequest;
use AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\DescribeExpressConnectRouterInterRegionTransitModeResponse;
use AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\DescribeExpressConnectRouterRegionRequest;
use AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\DescribeExpressConnectRouterRegionResponse;
use AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\DescribeExpressConnectRouterRequest;
use AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\DescribeExpressConnectRouterResponse;
use AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\DescribeExpressConnectRouterRouteEntriesRequest;
use AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\DescribeExpressConnectRouterRouteEntriesResponse;
use AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\DescribeFlowLogsRequest;
use AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\DescribeFlowLogsResponse;
use AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\DescribeInstanceGrantedToExpressConnectRouterRequest;
use AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\DescribeInstanceGrantedToExpressConnectRouterResponse;
use AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\DetachExpressConnectRouterChildInstanceRequest;
use AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\DetachExpressConnectRouterChildInstanceResponse;
use AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\DisableExpressConnectRouterRouteEntriesRequest;
use AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\DisableExpressConnectRouterRouteEntriesResponse;
use AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\EnableExpressConnectRouterRouteEntriesRequest;
use AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\EnableExpressConnectRouterRouteEntriesResponse;
use AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\ForceDeleteExpressConnectRouterRequest;
use AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\ForceDeleteExpressConnectRouterResponse;
use AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\GrantInstanceToExpressConnectRouterRequest;
use AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\GrantInstanceToExpressConnectRouterResponse;
use AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\ListExpressConnectRouterSupportedRegionRequest;
use AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\ListExpressConnectRouterSupportedRegionResponse;
use AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\ListRouteMapAssociationsRequest;
use AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\ListRouteMapAssociationsResponse;
use AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\ModifyExpressConnectRouterAssociationAllowedPrefixRequest;
use AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\ModifyExpressConnectRouterAssociationAllowedPrefixResponse;
use AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\ModifyExpressConnectRouterAssociationRequest;
use AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\ModifyExpressConnectRouterAssociationResponse;
use AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\ModifyExpressConnectRouterChildInstanceRequest;
use AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\ModifyExpressConnectRouterChildInstanceResponse;
use AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\ModifyExpressConnectRouterInterRegionTransitModeRequest;
use AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\ModifyExpressConnectRouterInterRegionTransitModeResponse;
use AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\ModifyExpressConnectRouterRequest;
use AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\ModifyExpressConnectRouterResponse;
use AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\ModifyFlowLogAttributeRequest;
use AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\ModifyFlowLogAttributeResponse;
use AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\MoveResourceGroupRequest;
use AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\MoveResourceGroupResponse;
use AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\RevokeInstanceFromExpressConnectRouterRequest;
use AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\RevokeInstanceFromExpressConnectRouterResponse;
use AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\SynchronizeExpressConnectRouterInterRegionBandwidthRequest;
use AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\SynchronizeExpressConnectRouterInterRegionBandwidthResponse;
use AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\TagResourcesRequest;
use AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\TagResourcesResponse;
use AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\UntagResourcesResponse;
use AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\UpdateRouteMapAssociationRequest;
use AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\UpdateRouteMapAssociationResponse;
use Darabonba\GatewayPop\Client;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class ExpressConnectRouter extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_productId = 'ExpressConnectRouter';
        $gatewayClient = new Client();
        $this->_spi = $gatewayClient;
        $this->_endpointRule = 'regional';
        $this->_endpointMap = [
            'cn-hongkong' => 'expressconnectrouter.cn-shanghai.aliyuncs.com',
            'cn-zhangjiakou' => 'expressconnectrouter.cn-shanghai.aliyuncs.com',
            'cn-zhengzhou-jva' => 'expressconnectrouter.cn-shanghai.aliyuncs.com',
            'cn-shenzhen' => 'expressconnectrouter.cn-shanghai.aliyuncs.com',
            'cn-beijing' => 'expressconnectrouter.cn-shanghai.aliyuncs.com',
            'cn-wulanchabu' => 'expressconnectrouter.cn-shanghai.aliyuncs.com',
            'cn-nanjing' => 'expressconnectrouter.cn-shanghai.aliyuncs.com',
            'ap-northeast-2' => 'expressconnectrouter.cn-shanghai.aliyuncs.com',
            'ap-northeast-1' => 'expressconnectrouter.cn-shanghai.aliyuncs.com',
            'cn-fuzhou' => 'expressconnectrouter.cn-shanghai.aliyuncs.com',
            'cn-chengdu' => 'expressconnectrouter.cn-shanghai.aliyuncs.com',
            'cn-qingdao' => 'expressconnectrouter.cn-shanghai.aliyuncs.com',
            'cn-wuhan-lr' => 'expressconnectrouter.cn-shanghai.aliyuncs.com',
            'cn-guangzhou' => 'expressconnectrouter.cn-shanghai.aliyuncs.com',
            'cn-heyuan' => 'expressconnectrouter.cn-shanghai.aliyuncs.com',
            'ap-southeast-1' => 'expressconnectrouter.cn-shanghai.aliyuncs.com',
            'ap-southeast-3' => 'expressconnectrouter.cn-shanghai.aliyuncs.com',
            'cn-huhehaote' => 'expressconnectrouter.cn-shanghai.aliyuncs.com',
            'ap-southeast-5' => 'expressconnectrouter.cn-shanghai.aliyuncs.com',
            'ap-southeast-6' => 'expressconnectrouter.cn-shanghai.aliyuncs.com',
            'ap-southeast-7' => 'expressconnectrouter.cn-shanghai.aliyuncs.com',
            'cn-hangzhou' => 'expressconnectrouter.cn-shanghai.aliyuncs.com',
            'us-west-1' => 'expressconnectrouter.cn-shanghai.aliyuncs.com',
            'us-east-1' => 'expressconnectrouter.cn-shanghai.aliyuncs.com',
            'eu-central-1' => 'expressconnectrouter.cn-shanghai.aliyuncs.com',
            'eu-west-1' => 'expressconnectrouter.cn-shanghai.aliyuncs.com',
            'me-central-1' => 'expressconnectrouter.cn-shanghai.aliyuncs.com',
            'cn-shenzhen-finance-1' => 'expressconnectrouter.cn-shanghai.aliyuncs.com',
            'cn-shanghai-finance-1' => 'expressconnectrouter.cn-shanghai.aliyuncs.com',
            'cn-heyuan-acdr-1' => 'expressconnectrouter.cn-shanghai.aliyuncs.com',
            'cn-beijing-finance-1' => 'expressconnectrouter.cn-shanghai.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('expressconnectrouter', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * Enables log delivery for a flow log.
     *
     * @param request - ActivateFlowLogRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ActivateFlowLogResponse
     *
     * @param ActivateFlowLogRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ActivateFlowLogResponse
     */
    public function activateFlowLogWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->version) {
            @$query['Version'] = $request->version;
        }

        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$body['DryRun'] = $request->dryRun;
        }

        if (null !== $request->ecrId) {
            @$body['EcrId'] = $request->ecrId;
        }

        if (null !== $request->flowLogId) {
            @$body['FlowLogId'] = $request->flowLogId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ActivateFlowLog',
            'version' => '2023-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ActivateFlowLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables log delivery for a flow log.
     *
     * @param request - ActivateFlowLogRequest
     *
     * @returns ActivateFlowLogResponse
     *
     * @param ActivateFlowLogRequest $request
     *
     * @return ActivateFlowLogResponse
     */
    public function activateFlowLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->activateFlowLogWithOptions($request, $runtime);
    }

    /**
     * Attaches a child instance (VBR) to an Express Connect Router (ECR).
     *
     * @remarks
     * Before you invoke the **AttachExpressConnectRouterChildInstance** operation to load a child instance (VBR) to an Express Connect Router (ECR), make sure that the Express Connect Router (ECR) is in the **Active** state.
     *
     * @param request - AttachExpressConnectRouterChildInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AttachExpressConnectRouterChildInstanceResponse
     *
     * @param AttachExpressConnectRouterChildInstanceRequest $request
     * @param RuntimeOptions                                 $runtime
     *
     * @return AttachExpressConnectRouterChildInstanceResponse
     */
    public function attachExpressConnectRouterChildInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->version) {
            @$query['Version'] = $request->version;
        }

        $body = [];
        if (null !== $request->childInstanceId) {
            @$body['ChildInstanceId'] = $request->childInstanceId;
        }

        if (null !== $request->childInstanceOwnerId) {
            @$body['ChildInstanceOwnerId'] = $request->childInstanceOwnerId;
        }

        if (null !== $request->childInstanceRegionId) {
            @$body['ChildInstanceRegionId'] = $request->childInstanceRegionId;
        }

        if (null !== $request->childInstanceType) {
            @$body['ChildInstanceType'] = $request->childInstanceType;
        }

        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->dryRun) {
            @$body['DryRun'] = $request->dryRun;
        }

        if (null !== $request->ecrId) {
            @$body['EcrId'] = $request->ecrId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AttachExpressConnectRouterChildInstance',
            'version' => '2023-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AttachExpressConnectRouterChildInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Attaches a child instance (VBR) to an Express Connect Router (ECR).
     *
     * @remarks
     * Before you invoke the **AttachExpressConnectRouterChildInstance** operation to load a child instance (VBR) to an Express Connect Router (ECR), make sure that the Express Connect Router (ECR) is in the **Active** state.
     *
     * @param request - AttachExpressConnectRouterChildInstanceRequest
     *
     * @returns AttachExpressConnectRouterChildInstanceResponse
     *
     * @param AttachExpressConnectRouterChildInstanceRequest $request
     *
     * @return AttachExpressConnectRouterChildInstanceResponse
     */
    public function attachExpressConnectRouterChildInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachExpressConnectRouterChildInstanceWithOptions($request, $runtime);
    }

    /**
     * Checks the Cloud Data Transfer (CDT) service required to add a specified region to an Express Connect Router (ECR).
     *
     * @param request - CheckAddRegionToExpressConnectRouterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CheckAddRegionToExpressConnectRouterResponse
     *
     * @param CheckAddRegionToExpressConnectRouterRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return CheckAddRegionToExpressConnectRouterResponse
     */
    public function checkAddRegionToExpressConnectRouterWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->version) {
            @$query['Version'] = $request->version;
        }

        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$body['DryRun'] = $request->dryRun;
        }

        if (null !== $request->ecrId) {
            @$body['EcrId'] = $request->ecrId;
        }

        if (null !== $request->freshRegionId) {
            @$body['FreshRegionId'] = $request->freshRegionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CheckAddRegionToExpressConnectRouter',
            'version' => '2023-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CheckAddRegionToExpressConnectRouterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Checks the Cloud Data Transfer (CDT) service required to add a specified region to an Express Connect Router (ECR).
     *
     * @param request - CheckAddRegionToExpressConnectRouterRequest
     *
     * @returns CheckAddRegionToExpressConnectRouterResponse
     *
     * @param CheckAddRegionToExpressConnectRouterRequest $request
     *
     * @return CheckAddRegionToExpressConnectRouterResponse
     */
    public function checkAddRegionToExpressConnectRouter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkAddRegionToExpressConnectRouterWithOptions($request, $runtime);
    }

    /**
     * Creates an Express Connect Router (ECR).
     *
     * @remarks
     * After you create an Express Connect Router (ECR) instance, the instance status is **Active**.
     *
     * @param request - CreateExpressConnectRouterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateExpressConnectRouterResponse
     *
     * @param CreateExpressConnectRouterRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return CreateExpressConnectRouterResponse
     */
    public function createExpressConnectRouterWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->version) {
            @$query['Version'] = $request->version;
        }

        $body = [];
        if (null !== $request->alibabaSideAsn) {
            @$body['AlibabaSideAsn'] = $request->alibabaSideAsn;
        }

        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->dryRun) {
            @$body['DryRun'] = $request->dryRun;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->resourceGroupId) {
            @$body['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->tag) {
            @$body['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateExpressConnectRouter',
            'version' => '2023-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateExpressConnectRouterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an Express Connect Router (ECR).
     *
     * @remarks
     * After you create an Express Connect Router (ECR) instance, the instance status is **Active**.
     *
     * @param request - CreateExpressConnectRouterRequest
     *
     * @returns CreateExpressConnectRouterResponse
     *
     * @param CreateExpressConnectRouterRequest $request
     *
     * @return CreateExpressConnectRouterResponse
     */
    public function createExpressConnectRouter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createExpressConnectRouterWithOptions($request, $runtime);
    }

    /**
     * Associates an Express Connect Router (ECR) with a virtual private cloud (VPC) or a transit router (TR).
     *
     * @param request - CreateExpressConnectRouterAssociationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateExpressConnectRouterAssociationResponse
     *
     * @param CreateExpressConnectRouterAssociationRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return CreateExpressConnectRouterAssociationResponse
     */
    public function createExpressConnectRouterAssociationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        if (null !== $request->version) {
            @$query['Version'] = $request->version;
        }

        $body = [];
        if (null !== $request->allowedPrefixes) {
            @$body['AllowedPrefixes'] = $request->allowedPrefixes;
        }

        if (null !== $request->allowedPrefixesMode) {
            @$body['AllowedPrefixesMode'] = $request->allowedPrefixesMode;
        }

        if (null !== $request->associationRegionId) {
            @$body['AssociationRegionId'] = $request->associationRegionId;
        }

        if (null !== $request->cenId) {
            @$body['CenId'] = $request->cenId;
        }

        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->createAttachment) {
            @$body['CreateAttachment'] = $request->createAttachment;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->dryRun) {
            @$body['DryRun'] = $request->dryRun;
        }

        if (null !== $request->ecrId) {
            @$body['EcrId'] = $request->ecrId;
        }

        if (null !== $request->transitRouterId) {
            @$body['TransitRouterId'] = $request->transitRouterId;
        }

        if (null !== $request->transitRouterOwnerId) {
            @$body['TransitRouterOwnerId'] = $request->transitRouterOwnerId;
        }

        if (null !== $request->vpcId) {
            @$body['VpcId'] = $request->vpcId;
        }

        if (null !== $request->vpcOwnerId) {
            @$body['VpcOwnerId'] = $request->vpcOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateExpressConnectRouterAssociation',
            'version' => '2023-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateExpressConnectRouterAssociationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Associates an Express Connect Router (ECR) with a virtual private cloud (VPC) or a transit router (TR).
     *
     * @param request - CreateExpressConnectRouterAssociationRequest
     *
     * @returns CreateExpressConnectRouterAssociationResponse
     *
     * @param CreateExpressConnectRouterAssociationRequest $request
     *
     * @return CreateExpressConnectRouterAssociationResponse
     */
    public function createExpressConnectRouterAssociation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createExpressConnectRouterAssociationWithOptions($request, $runtime);
    }

    /**
     * Creates a flow log and enables log delivery by default.
     *
     * @param request - CreateFlowLogRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateFlowLogResponse
     *
     * @param CreateFlowLogRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateFlowLogResponse
     */
    public function createFlowLogWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->instanceType) {
            @$query['InstanceType'] = $request->instanceType;
        }

        if (null !== $request->interval) {
            @$query['Interval'] = $request->interval;
        }

        if (null !== $request->logStoreName) {
            @$query['LogStoreName'] = $request->logStoreName;
        }

        if (null !== $request->projectName) {
            @$query['ProjectName'] = $request->projectName;
        }

        if (null !== $request->samplingRate) {
            @$query['SamplingRate'] = $request->samplingRate;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        if (null !== $request->targetSlsRegionId) {
            @$query['TargetSlsRegionId'] = $request->targetSlsRegionId;
        }

        if (null !== $request->version) {
            @$query['Version'] = $request->version;
        }

        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$body['DryRun'] = $request->dryRun;
        }

        if (null !== $request->ecrId) {
            @$body['EcrId'] = $request->ecrId;
        }

        if (null !== $request->flowLogName) {
            @$body['FlowLogName'] = $request->flowLogName;
        }

        if (null !== $request->resourceGroupId) {
            @$body['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateFlowLog',
            'version' => '2023-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateFlowLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a flow log and enables log delivery by default.
     *
     * @param request - CreateFlowLogRequest
     *
     * @returns CreateFlowLogResponse
     *
     * @param CreateFlowLogRequest $request
     *
     * @return CreateFlowLogResponse
     */
    public function createFlowLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFlowLogWithOptions($request, $runtime);
    }

    /**
     * Creates an association between an Express Connect Router (ECR) and a route map.
     *
     * @param request - CreateRouteMapAssociationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateRouteMapAssociationResponse
     *
     * @param CreateRouteMapAssociationRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CreateRouteMapAssociationResponse
     */
    public function createRouteMapAssociationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionIdList) {
            @$query['RegionIdList'] = $request->regionIdList;
        }

        if (null !== $request->routeMapId) {
            @$query['RouteMapId'] = $request->routeMapId;
        }

        if (null !== $request->version) {
            @$query['Version'] = $request->version;
        }

        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$body['DryRun'] = $request->dryRun;
        }

        if (null !== $request->ecrId) {
            @$body['EcrId'] = $request->ecrId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateRouteMapAssociation',
            'version' => '2023-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateRouteMapAssociationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an association between an Express Connect Router (ECR) and a route map.
     *
     * @param request - CreateRouteMapAssociationRequest
     *
     * @returns CreateRouteMapAssociationResponse
     *
     * @param CreateRouteMapAssociationRequest $request
     *
     * @return CreateRouteMapAssociationResponse
     */
    public function createRouteMapAssociation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRouteMapAssociationWithOptions($request, $runtime);
    }

    /**
     * Stops log delivery for a flow log.
     *
     * @param request - DeactivateFlowLogRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeactivateFlowLogResponse
     *
     * @param DeactivateFlowLogRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeactivateFlowLogResponse
     */
    public function deactivateFlowLogWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->version) {
            @$query['Version'] = $request->version;
        }

        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$body['DryRun'] = $request->dryRun;
        }

        if (null !== $request->ecrId) {
            @$body['EcrId'] = $request->ecrId;
        }

        if (null !== $request->flowLogId) {
            @$body['FlowLogId'] = $request->flowLogId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeactivateFlowLog',
            'version' => '2023-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeactivateFlowLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Stops log delivery for a flow log.
     *
     * @param request - DeactivateFlowLogRequest
     *
     * @returns DeactivateFlowLogResponse
     *
     * @param DeactivateFlowLogRequest $request
     *
     * @return DeactivateFlowLogResponse
     */
    public function deactivateFlowLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deactivateFlowLogWithOptions($request, $runtime);
    }

    /**
     * Deletes an Express Connect Router (ECR).
     *
     * @remarks
     * Before you invoke the DeleteExpressConnectRouter operation to delete an Express Connect Router (ECR) instance, note the following:
     * - Before you delete an Express Connect Router (ECR) instance, you must delete the resources associated with the Express Connect Router (ECR) instance.
     * - You can delete only Express Connect Router (ECR) instances that are in the **Active** state.
     *
     * @param request - DeleteExpressConnectRouterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteExpressConnectRouterResponse
     *
     * @param DeleteExpressConnectRouterRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DeleteExpressConnectRouterResponse
     */
    public function deleteExpressConnectRouterWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->version) {
            @$query['Version'] = $request->version;
        }

        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$body['DryRun'] = $request->dryRun;
        }

        if (null !== $request->ecrId) {
            @$body['EcrId'] = $request->ecrId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteExpressConnectRouter',
            'version' => '2023-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteExpressConnectRouterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an Express Connect Router (ECR).
     *
     * @remarks
     * Before you invoke the DeleteExpressConnectRouter operation to delete an Express Connect Router (ECR) instance, note the following:
     * - Before you delete an Express Connect Router (ECR) instance, you must delete the resources associated with the Express Connect Router (ECR) instance.
     * - You can delete only Express Connect Router (ECR) instances that are in the **Active** state.
     *
     * @param request - DeleteExpressConnectRouterRequest
     *
     * @returns DeleteExpressConnectRouterResponse
     *
     * @param DeleteExpressConnectRouterRequest $request
     *
     * @return DeleteExpressConnectRouterResponse
     */
    public function deleteExpressConnectRouter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteExpressConnectRouterWithOptions($request, $runtime);
    }

    /**
     * Disassociates an Express Connect Router (ECR) from a virtual private cloud (VPC) or a transit router.
     *
     * @param request - DeleteExpressConnectRouterAssociationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteExpressConnectRouterAssociationResponse
     *
     * @param DeleteExpressConnectRouterAssociationRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return DeleteExpressConnectRouterAssociationResponse
     */
    public function deleteExpressConnectRouterAssociationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->version) {
            @$query['Version'] = $request->version;
        }

        $body = [];
        if (null !== $request->associationId) {
            @$body['AssociationId'] = $request->associationId;
        }

        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->deleteAttachment) {
            @$body['DeleteAttachment'] = $request->deleteAttachment;
        }

        if (null !== $request->dryRun) {
            @$body['DryRun'] = $request->dryRun;
        }

        if (null !== $request->ecrId) {
            @$body['EcrId'] = $request->ecrId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteExpressConnectRouterAssociation',
            'version' => '2023-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteExpressConnectRouterAssociationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Disassociates an Express Connect Router (ECR) from a virtual private cloud (VPC) or a transit router.
     *
     * @param request - DeleteExpressConnectRouterAssociationRequest
     *
     * @returns DeleteExpressConnectRouterAssociationResponse
     *
     * @param DeleteExpressConnectRouterAssociationRequest $request
     *
     * @return DeleteExpressConnectRouterAssociationResponse
     */
    public function deleteExpressConnectRouterAssociation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteExpressConnectRouterAssociationWithOptions($request, $runtime);
    }

    /**
     * Deletes a flow log.
     *
     * @param request - DeleteFlowlogRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteFlowlogResponse
     *
     * @param DeleteFlowlogRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteFlowlogResponse
     */
    public function deleteFlowlogWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->flowLogId) {
            @$query['FlowLogId'] = $request->flowLogId;
        }

        if (null !== $request->version) {
            @$query['Version'] = $request->version;
        }

        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$body['DryRun'] = $request->dryRun;
        }

        if (null !== $request->ecrId) {
            @$body['EcrId'] = $request->ecrId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteFlowlog',
            'version' => '2023-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteFlowlogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a flow log.
     *
     * @param request - DeleteFlowlogRequest
     *
     * @returns DeleteFlowlogResponse
     *
     * @param DeleteFlowlogRequest $request
     *
     * @return DeleteFlowlogResponse
     */
    public function deleteFlowlog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteFlowlogWithOptions($request, $runtime);
    }

    /**
     * Deletes the association between an Express Connect Router (ECR) and a route policy.
     *
     * @param request - DeleteRouteMapAssociationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteRouteMapAssociationResponse
     *
     * @param DeleteRouteMapAssociationRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DeleteRouteMapAssociationResponse
     */
    public function deleteRouteMapAssociationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->associationId) {
            @$query['AssociationId'] = $request->associationId;
        }

        if (null !== $request->version) {
            @$query['Version'] = $request->version;
        }

        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$body['DryRun'] = $request->dryRun;
        }

        if (null !== $request->ecrId) {
            @$body['EcrId'] = $request->ecrId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteRouteMapAssociation',
            'version' => '2023-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteRouteMapAssociationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes the association between an Express Connect Router (ECR) and a route policy.
     *
     * @param request - DeleteRouteMapAssociationRequest
     *
     * @returns DeleteRouteMapAssociationResponse
     *
     * @param DeleteRouteMapAssociationRequest $request
     *
     * @return DeleteRouteMapAssociationResponse
     */
    public function deleteRouteMapAssociation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRouteMapAssociationWithOptions($request, $runtime);
    }

    /**
     * Queries the disabled route entry of an Express Connect Router (ECR).
     *
     * @param request - DescribeDisabledExpressConnectRouterRouteEntriesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDisabledExpressConnectRouterRouteEntriesResponse
     *
     * @param DescribeDisabledExpressConnectRouterRouteEntriesRequest $request
     * @param RuntimeOptions                                          $runtime
     *
     * @return DescribeDisabledExpressConnectRouterRouteEntriesResponse
     */
    public function describeDisabledExpressConnectRouterRouteEntriesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->version) {
            @$query['Version'] = $request->version;
        }

        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$body['DryRun'] = $request->dryRun;
        }

        if (null !== $request->ecrId) {
            @$body['EcrId'] = $request->ecrId;
        }

        if (null !== $request->maxResults) {
            @$body['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeDisabledExpressConnectRouterRouteEntries',
            'version' => '2023-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDisabledExpressConnectRouterRouteEntriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the disabled route entry of an Express Connect Router (ECR).
     *
     * @param request - DescribeDisabledExpressConnectRouterRouteEntriesRequest
     *
     * @returns DescribeDisabledExpressConnectRouterRouteEntriesResponse
     *
     * @param DescribeDisabledExpressConnectRouterRouteEntriesRequest $request
     *
     * @return DescribeDisabledExpressConnectRouterRouteEntriesResponse
     */
    public function describeDisabledExpressConnectRouterRouteEntries($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDisabledExpressConnectRouterRouteEntriesWithOptions($request, $runtime);
    }

    /**
     * Queries a list of Express Connect Router (ECR) instances.
     *
     * @param request - DescribeExpressConnectRouterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeExpressConnectRouterResponse
     *
     * @param DescribeExpressConnectRouterRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeExpressConnectRouterResponse
     */
    public function describeExpressConnectRouterWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->version) {
            @$query['Version'] = $request->version;
        }

        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$body['DryRun'] = $request->dryRun;
        }

        if (null !== $request->ecrId) {
            @$body['EcrId'] = $request->ecrId;
        }

        if (null !== $request->maxResults) {
            @$body['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        if (null !== $request->resourceGroupId) {
            @$body['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->tag) {
            @$body['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeExpressConnectRouter',
            'version' => '2023-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeExpressConnectRouterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of Express Connect Router (ECR) instances.
     *
     * @param request - DescribeExpressConnectRouterRequest
     *
     * @returns DescribeExpressConnectRouterResponse
     *
     * @param DescribeExpressConnectRouterRequest $request
     *
     * @return DescribeExpressConnectRouterResponse
     */
    public function describeExpressConnectRouter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeExpressConnectRouterWithOptions($request, $runtime);
    }

    /**
     * Queries the history of prefix routes for an Express Connect Router (ECR).
     *
     * @param request - DescribeExpressConnectRouterAllowedPrefixHistoryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeExpressConnectRouterAllowedPrefixHistoryResponse
     *
     * @param DescribeExpressConnectRouterAllowedPrefixHistoryRequest $request
     * @param RuntimeOptions                                          $runtime
     *
     * @return DescribeExpressConnectRouterAllowedPrefixHistoryResponse
     */
    public function describeExpressConnectRouterAllowedPrefixHistoryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->version) {
            @$query['Version'] = $request->version;
        }

        $body = [];
        if (null !== $request->associationId) {
            @$body['AssociationId'] = $request->associationId;
        }

        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$body['DryRun'] = $request->dryRun;
        }

        if (null !== $request->ecrId) {
            @$body['EcrId'] = $request->ecrId;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->instanceType) {
            @$body['InstanceType'] = $request->instanceType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeExpressConnectRouterAllowedPrefixHistory',
            'version' => '2023-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeExpressConnectRouterAllowedPrefixHistoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the history of prefix routes for an Express Connect Router (ECR).
     *
     * @param request - DescribeExpressConnectRouterAllowedPrefixHistoryRequest
     *
     * @returns DescribeExpressConnectRouterAllowedPrefixHistoryResponse
     *
     * @param DescribeExpressConnectRouterAllowedPrefixHistoryRequest $request
     *
     * @return DescribeExpressConnectRouterAllowedPrefixHistoryResponse
     */
    public function describeExpressConnectRouterAllowedPrefixHistory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeExpressConnectRouterAllowedPrefixHistoryWithOptions($request, $runtime);
    }

    /**
     * Queries the virtual private clouds (VPCs) and transit routers (TRs) associated with an Express Connect Router (ECR).
     *
     * @param request - DescribeExpressConnectRouterAssociationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeExpressConnectRouterAssociationResponse
     *
     * @param DescribeExpressConnectRouterAssociationRequest $request
     * @param RuntimeOptions                                 $runtime
     *
     * @return DescribeExpressConnectRouterAssociationResponse
     */
    public function describeExpressConnectRouterAssociationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        if (null !== $request->version) {
            @$query['Version'] = $request->version;
        }

        $body = [];
        if (null !== $request->associationId) {
            @$body['AssociationId'] = $request->associationId;
        }

        if (null !== $request->associationNodeType) {
            @$body['AssociationNodeType'] = $request->associationNodeType;
        }

        if (null !== $request->associationRegionId) {
            @$body['AssociationRegionId'] = $request->associationRegionId;
        }

        if (null !== $request->cenId) {
            @$body['CenId'] = $request->cenId;
        }

        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$body['DryRun'] = $request->dryRun;
        }

        if (null !== $request->ecrId) {
            @$body['EcrId'] = $request->ecrId;
        }

        if (null !== $request->maxResults) {
            @$body['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        if (null !== $request->transitRouterId) {
            @$body['TransitRouterId'] = $request->transitRouterId;
        }

        if (null !== $request->vpcId) {
            @$body['VpcId'] = $request->vpcId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeExpressConnectRouterAssociation',
            'version' => '2023-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeExpressConnectRouterAssociationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the virtual private clouds (VPCs) and transit routers (TRs) associated with an Express Connect Router (ECR).
     *
     * @param request - DescribeExpressConnectRouterAssociationRequest
     *
     * @returns DescribeExpressConnectRouterAssociationResponse
     *
     * @param DescribeExpressConnectRouterAssociationRequest $request
     *
     * @return DescribeExpressConnectRouterAssociationResponse
     */
    public function describeExpressConnectRouterAssociation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeExpressConnectRouterAssociationWithOptions($request, $runtime);
    }

    /**
     * Queries the virtual border routers (VBRs) associated with an Express Connect Router (ECR).
     *
     * @param request - DescribeExpressConnectRouterChildInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeExpressConnectRouterChildInstanceResponse
     *
     * @param DescribeExpressConnectRouterChildInstanceRequest $request
     * @param RuntimeOptions                                   $runtime
     *
     * @return DescribeExpressConnectRouterChildInstanceResponse
     */
    public function describeExpressConnectRouterChildInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->version) {
            @$query['Version'] = $request->version;
        }

        $body = [];
        if (null !== $request->associationId) {
            @$body['AssociationId'] = $request->associationId;
        }

        if (null !== $request->childInstanceId) {
            @$body['ChildInstanceId'] = $request->childInstanceId;
        }

        if (null !== $request->childInstanceRegionId) {
            @$body['ChildInstanceRegionId'] = $request->childInstanceRegionId;
        }

        if (null !== $request->childInstanceType) {
            @$body['ChildInstanceType'] = $request->childInstanceType;
        }

        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$body['DryRun'] = $request->dryRun;
        }

        if (null !== $request->ecrId) {
            @$body['EcrId'] = $request->ecrId;
        }

        if (null !== $request->maxResults) {
            @$body['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeExpressConnectRouterChildInstance',
            'version' => '2023-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeExpressConnectRouterChildInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the virtual border routers (VBRs) associated with an Express Connect Router (ECR).
     *
     * @param request - DescribeExpressConnectRouterChildInstanceRequest
     *
     * @returns DescribeExpressConnectRouterChildInstanceResponse
     *
     * @param DescribeExpressConnectRouterChildInstanceRequest $request
     *
     * @return DescribeExpressConnectRouterChildInstanceResponse
     */
    public function describeExpressConnectRouterChildInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeExpressConnectRouterChildInstanceWithOptions($request, $runtime);
    }

    /**
     * Queries the cross-region forwarding mode of an Express Connect Router (ECR).
     *
     * @param request - DescribeExpressConnectRouterInterRegionTransitModeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeExpressConnectRouterInterRegionTransitModeResponse
     *
     * @param DescribeExpressConnectRouterInterRegionTransitModeRequest $request
     * @param RuntimeOptions                                            $runtime
     *
     * @return DescribeExpressConnectRouterInterRegionTransitModeResponse
     */
    public function describeExpressConnectRouterInterRegionTransitModeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->version) {
            @$query['Version'] = $request->version;
        }

        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$body['DryRun'] = $request->dryRun;
        }

        if (null !== $request->ecrId) {
            @$body['EcrId'] = $request->ecrId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeExpressConnectRouterInterRegionTransitMode',
            'version' => '2023-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeExpressConnectRouterInterRegionTransitModeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the cross-region forwarding mode of an Express Connect Router (ECR).
     *
     * @param request - DescribeExpressConnectRouterInterRegionTransitModeRequest
     *
     * @returns DescribeExpressConnectRouterInterRegionTransitModeResponse
     *
     * @param DescribeExpressConnectRouterInterRegionTransitModeRequest $request
     *
     * @return DescribeExpressConnectRouterInterRegionTransitModeResponse
     */
    public function describeExpressConnectRouterInterRegionTransitMode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeExpressConnectRouterInterRegionTransitModeWithOptions($request, $runtime);
    }

    /**
     * Queries the regions where Express Connect Router (ECR) resources are located.
     *
     * @param request - DescribeExpressConnectRouterRegionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeExpressConnectRouterRegionResponse
     *
     * @param DescribeExpressConnectRouterRegionRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DescribeExpressConnectRouterRegionResponse
     */
    public function describeExpressConnectRouterRegionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->version) {
            @$query['Version'] = $request->version;
        }

        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$body['DryRun'] = $request->dryRun;
        }

        if (null !== $request->ecrId) {
            @$body['EcrId'] = $request->ecrId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeExpressConnectRouterRegion',
            'version' => '2023-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeExpressConnectRouterRegionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the regions where Express Connect Router (ECR) resources are located.
     *
     * @param request - DescribeExpressConnectRouterRegionRequest
     *
     * @returns DescribeExpressConnectRouterRegionResponse
     *
     * @param DescribeExpressConnectRouterRegionRequest $request
     *
     * @return DescribeExpressConnectRouterRegionResponse
     */
    public function describeExpressConnectRouterRegion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeExpressConnectRouterRegionWithOptions($request, $runtime);
    }

    /**
     * Queries the route entries of an Express Connect Router (ECR).
     *
     * @param request - DescribeExpressConnectRouterRouteEntriesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeExpressConnectRouterRouteEntriesResponse
     *
     * @param DescribeExpressConnectRouterRouteEntriesRequest $request
     * @param RuntimeOptions                                  $runtime
     *
     * @return DescribeExpressConnectRouterRouteEntriesResponse
     */
    public function describeExpressConnectRouterRouteEntriesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->version) {
            @$query['Version'] = $request->version;
        }

        $body = [];
        if (null !== $request->asPath) {
            @$body['AsPath'] = $request->asPath;
        }

        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->community) {
            @$body['Community'] = $request->community;
        }

        if (null !== $request->destinationCidrBlock) {
            @$body['DestinationCidrBlock'] = $request->destinationCidrBlock;
        }

        if (null !== $request->dryRun) {
            @$body['DryRun'] = $request->dryRun;
        }

        if (null !== $request->ecrId) {
            @$body['EcrId'] = $request->ecrId;
        }

        if (null !== $request->maxResults) {
            @$body['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        if (null !== $request->nexthopInstanceId) {
            @$body['NexthopInstanceId'] = $request->nexthopInstanceId;
        }

        if (null !== $request->queryRegionId) {
            @$body['QueryRegionId'] = $request->queryRegionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeExpressConnectRouterRouteEntries',
            'version' => '2023-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeExpressConnectRouterRouteEntriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the route entries of an Express Connect Router (ECR).
     *
     * @param request - DescribeExpressConnectRouterRouteEntriesRequest
     *
     * @returns DescribeExpressConnectRouterRouteEntriesResponse
     *
     * @param DescribeExpressConnectRouterRouteEntriesRequest $request
     *
     * @return DescribeExpressConnectRouterRouteEntriesResponse
     */
    public function describeExpressConnectRouterRouteEntries($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeExpressConnectRouterRouteEntriesWithOptions($request, $runtime);
    }

    /**
     * Queries flow logs.
     *
     * @param request - DescribeFlowLogsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeFlowLogsResponse
     *
     * @param DescribeFlowLogsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeFlowLogsResponse
     */
    public function describeFlowLogsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->flowLogId) {
            @$query['FlowLogId'] = $request->flowLogId;
        }

        if (null !== $request->flowLogName) {
            @$query['FlowLogName'] = $request->flowLogName;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->logStoreName) {
            @$query['LogStoreName'] = $request->logStoreName;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->projectName) {
            @$query['ProjectName'] = $request->projectName;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        if (null !== $request->version) {
            @$query['Version'] = $request->version;
        }

        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$body['DryRun'] = $request->dryRun;
        }

        if (null !== $request->ecrId) {
            @$body['EcrId'] = $request->ecrId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeFlowLogs',
            'version' => '2023-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeFlowLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries flow logs.
     *
     * @param request - DescribeFlowLogsRequest
     *
     * @returns DescribeFlowLogsResponse
     *
     * @param DescribeFlowLogsRequest $request
     *
     * @return DescribeFlowLogsResponse
     */
    public function describeFlowLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFlowLogsWithOptions($request, $runtime);
    }

    /**
     * Queries the network instances authorized to an Express Connect Router (ECR).
     *
     * @param request - DescribeInstanceGrantedToExpressConnectRouterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeInstanceGrantedToExpressConnectRouterResponse
     *
     * @param DescribeInstanceGrantedToExpressConnectRouterRequest $request
     * @param RuntimeOptions                                       $runtime
     *
     * @return DescribeInstanceGrantedToExpressConnectRouterResponse
     */
    public function describeInstanceGrantedToExpressConnectRouterWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->version) {
            @$query['Version'] = $request->version;
        }

        $body = [];
        if (null !== $request->callerType) {
            @$body['CallerType'] = $request->callerType;
        }

        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$body['DryRun'] = $request->dryRun;
        }

        if (null !== $request->ecrId) {
            @$body['EcrId'] = $request->ecrId;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->instanceOwnerId) {
            @$body['InstanceOwnerId'] = $request->instanceOwnerId;
        }

        if (null !== $request->instanceRegionId) {
            @$body['InstanceRegionId'] = $request->instanceRegionId;
        }

        if (null !== $request->instanceType) {
            @$body['InstanceType'] = $request->instanceType;
        }

        if (null !== $request->maxResults) {
            @$body['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        if (null !== $request->resourceGroupId) {
            @$body['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->tagModels) {
            @$body['TagModels'] = $request->tagModels;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeInstanceGrantedToExpressConnectRouter',
            'version' => '2023-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeInstanceGrantedToExpressConnectRouterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the network instances authorized to an Express Connect Router (ECR).
     *
     * @param request - DescribeInstanceGrantedToExpressConnectRouterRequest
     *
     * @returns DescribeInstanceGrantedToExpressConnectRouterResponse
     *
     * @param DescribeInstanceGrantedToExpressConnectRouterRequest $request
     *
     * @return DescribeInstanceGrantedToExpressConnectRouterResponse
     */
    public function describeInstanceGrantedToExpressConnectRouter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceGrantedToExpressConnectRouterWithOptions($request, $runtime);
    }

    /**
     * Detaches a virtual border router (VBR) from an Express Connect Router (ECR).
     *
     * @remarks
     * Before you call the **DetachExpressConnectRouterChildInstance** operation to detach a VBR instance from an Express Connect Router (ECR), ensure that the ECR is in the **Active** state.
     *
     * @param request - DetachExpressConnectRouterChildInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DetachExpressConnectRouterChildInstanceResponse
     *
     * @param DetachExpressConnectRouterChildInstanceRequest $request
     * @param RuntimeOptions                                 $runtime
     *
     * @return DetachExpressConnectRouterChildInstanceResponse
     */
    public function detachExpressConnectRouterChildInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->version) {
            @$query['Version'] = $request->version;
        }

        $body = [];
        if (null !== $request->childInstanceId) {
            @$body['ChildInstanceId'] = $request->childInstanceId;
        }

        if (null !== $request->childInstanceType) {
            @$body['ChildInstanceType'] = $request->childInstanceType;
        }

        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$body['DryRun'] = $request->dryRun;
        }

        if (null !== $request->ecrId) {
            @$body['EcrId'] = $request->ecrId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DetachExpressConnectRouterChildInstance',
            'version' => '2023-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DetachExpressConnectRouterChildInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Detaches a virtual border router (VBR) from an Express Connect Router (ECR).
     *
     * @remarks
     * Before you call the **DetachExpressConnectRouterChildInstance** operation to detach a VBR instance from an Express Connect Router (ECR), ensure that the ECR is in the **Active** state.
     *
     * @param request - DetachExpressConnectRouterChildInstanceRequest
     *
     * @returns DetachExpressConnectRouterChildInstanceResponse
     *
     * @param DetachExpressConnectRouterChildInstanceRequest $request
     *
     * @return DetachExpressConnectRouterChildInstanceResponse
     */
    public function detachExpressConnectRouterChildInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detachExpressConnectRouterChildInstanceWithOptions($request, $runtime);
    }

    /**
     * Disables a route entry of an Express Connect Router (ECR).
     *
     * @param request - DisableExpressConnectRouterRouteEntriesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DisableExpressConnectRouterRouteEntriesResponse
     *
     * @param DisableExpressConnectRouterRouteEntriesRequest $request
     * @param RuntimeOptions                                 $runtime
     *
     * @return DisableExpressConnectRouterRouteEntriesResponse
     */
    public function disableExpressConnectRouterRouteEntriesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->version) {
            @$query['Version'] = $request->version;
        }

        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->destinationCidrBlock) {
            @$body['DestinationCidrBlock'] = $request->destinationCidrBlock;
        }

        if (null !== $request->dryRun) {
            @$body['DryRun'] = $request->dryRun;
        }

        if (null !== $request->ecrId) {
            @$body['EcrId'] = $request->ecrId;
        }

        if (null !== $request->nexthopInstanceId) {
            @$body['NexthopInstanceId'] = $request->nexthopInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DisableExpressConnectRouterRouteEntries',
            'version' => '2023-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DisableExpressConnectRouterRouteEntriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Disables a route entry of an Express Connect Router (ECR).
     *
     * @param request - DisableExpressConnectRouterRouteEntriesRequest
     *
     * @returns DisableExpressConnectRouterRouteEntriesResponse
     *
     * @param DisableExpressConnectRouterRouteEntriesRequest $request
     *
     * @return DisableExpressConnectRouterRouteEntriesResponse
     */
    public function disableExpressConnectRouterRouteEntries($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableExpressConnectRouterRouteEntriesWithOptions($request, $runtime);
    }

    /**
     * Enables route entries for an Express Connect Router (ECR).
     *
     * @param request - EnableExpressConnectRouterRouteEntriesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnableExpressConnectRouterRouteEntriesResponse
     *
     * @param EnableExpressConnectRouterRouteEntriesRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return EnableExpressConnectRouterRouteEntriesResponse
     */
    public function enableExpressConnectRouterRouteEntriesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->version) {
            @$query['Version'] = $request->version;
        }

        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->destinationCidrBlock) {
            @$body['DestinationCidrBlock'] = $request->destinationCidrBlock;
        }

        if (null !== $request->dryRun) {
            @$body['DryRun'] = $request->dryRun;
        }

        if (null !== $request->ecrId) {
            @$body['EcrId'] = $request->ecrId;
        }

        if (null !== $request->nexthopInstanceId) {
            @$body['NexthopInstanceId'] = $request->nexthopInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'EnableExpressConnectRouterRouteEntries',
            'version' => '2023-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnableExpressConnectRouterRouteEntriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables route entries for an Express Connect Router (ECR).
     *
     * @param request - EnableExpressConnectRouterRouteEntriesRequest
     *
     * @returns EnableExpressConnectRouterRouteEntriesResponse
     *
     * @param EnableExpressConnectRouterRouteEntriesRequest $request
     *
     * @return EnableExpressConnectRouterRouteEntriesResponse
     */
    public function enableExpressConnectRouterRouteEntries($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableExpressConnectRouterRouteEntriesWithOptions($request, $runtime);
    }

    /**
     * Force deletes an Express Connect Router (ECR) and detaches its associated virtual private clouds (VPCs), Transit Routers (TRs), and virtual border routers (VBRs).
     *
     * @remarks
     * - Force deleting an Express Connect Router (ECR) instance detaches all associated resources. Before you proceed, confirm that this operation does not disrupt your services.
     * - You can delete only ECR instances that are in the **Active** state.
     *
     * @param request - ForceDeleteExpressConnectRouterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ForceDeleteExpressConnectRouterResponse
     *
     * @param ForceDeleteExpressConnectRouterRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return ForceDeleteExpressConnectRouterResponse
     */
    public function forceDeleteExpressConnectRouterWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->version) {
            @$query['Version'] = $request->version;
        }

        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$body['DryRun'] = $request->dryRun;
        }

        if (null !== $request->ecrId) {
            @$body['EcrId'] = $request->ecrId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ForceDeleteExpressConnectRouter',
            'version' => '2023-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ForceDeleteExpressConnectRouterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Force deletes an Express Connect Router (ECR) and detaches its associated virtual private clouds (VPCs), Transit Routers (TRs), and virtual border routers (VBRs).
     *
     * @remarks
     * - Force deleting an Express Connect Router (ECR) instance detaches all associated resources. Before you proceed, confirm that this operation does not disrupt your services.
     * - You can delete only ECR instances that are in the **Active** state.
     *
     * @param request - ForceDeleteExpressConnectRouterRequest
     *
     * @returns ForceDeleteExpressConnectRouterResponse
     *
     * @param ForceDeleteExpressConnectRouterRequest $request
     *
     * @return ForceDeleteExpressConnectRouterResponse
     */
    public function forceDeleteExpressConnectRouter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->forceDeleteExpressConnectRouterWithOptions($request, $runtime);
    }

    /**
     * Grants a virtual private cloud (VPC) or virtual border router (VBR) authorization to a cross-account Express Connect Router (ECR).
     *
     * @remarks
     * To associate a cross-account network instance with an Express Connect Router (ECR) instance, you must grant the network instance authorization to the Express Connect Router (ECR) instance.
     *
     * @param request - GrantInstanceToExpressConnectRouterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GrantInstanceToExpressConnectRouterResponse
     *
     * @param GrantInstanceToExpressConnectRouterRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return GrantInstanceToExpressConnectRouterResponse
     */
    public function grantInstanceToExpressConnectRouterWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->version) {
            @$query['Version'] = $request->version;
        }

        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$body['DryRun'] = $request->dryRun;
        }

        if (null !== $request->ecrId) {
            @$body['EcrId'] = $request->ecrId;
        }

        if (null !== $request->ecrOwnerAliUid) {
            @$body['EcrOwnerAliUid'] = $request->ecrOwnerAliUid;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->instanceRegionId) {
            @$body['InstanceRegionId'] = $request->instanceRegionId;
        }

        if (null !== $request->instanceType) {
            @$body['InstanceType'] = $request->instanceType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GrantInstanceToExpressConnectRouter',
            'version' => '2023-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GrantInstanceToExpressConnectRouterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Grants a virtual private cloud (VPC) or virtual border router (VBR) authorization to a cross-account Express Connect Router (ECR).
     *
     * @remarks
     * To associate a cross-account network instance with an Express Connect Router (ECR) instance, you must grant the network instance authorization to the Express Connect Router (ECR) instance.
     *
     * @param request - GrantInstanceToExpressConnectRouterRequest
     *
     * @returns GrantInstanceToExpressConnectRouterResponse
     *
     * @param GrantInstanceToExpressConnectRouterRequest $request
     *
     * @return GrantInstanceToExpressConnectRouterResponse
     */
    public function grantInstanceToExpressConnectRouter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->grantInstanceToExpressConnectRouterWithOptions($request, $runtime);
    }

    /**
     * Queries the regions that support Express Connect Router (ECR).
     *
     * @param request - ListExpressConnectRouterSupportedRegionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListExpressConnectRouterSupportedRegionResponse
     *
     * @param ListExpressConnectRouterSupportedRegionRequest $request
     * @param RuntimeOptions                                 $runtime
     *
     * @return ListExpressConnectRouterSupportedRegionResponse
     */
    public function listExpressConnectRouterSupportedRegionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->version) {
            @$query['Version'] = $request->version;
        }

        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->nodeType) {
            @$body['NodeType'] = $request->nodeType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListExpressConnectRouterSupportedRegion',
            'version' => '2023-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListExpressConnectRouterSupportedRegionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the regions that support Express Connect Router (ECR).
     *
     * @param request - ListExpressConnectRouterSupportedRegionRequest
     *
     * @returns ListExpressConnectRouterSupportedRegionResponse
     *
     * @param ListExpressConnectRouterSupportedRegionRequest $request
     *
     * @return ListExpressConnectRouterSupportedRegionResponse
     */
    public function listExpressConnectRouterSupportedRegion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listExpressConnectRouterSupportedRegionWithOptions($request, $runtime);
    }

    /**
     * Queries the association between an Express Connect Router (ECR) and a route map.
     *
     * @param request - ListRouteMapAssociationsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListRouteMapAssociationsResponse
     *
     * @param ListRouteMapAssociationsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListRouteMapAssociationsResponse
     */
    public function listRouteMapAssociationsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->associationId) {
            @$query['AssociationId'] = $request->associationId;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->routeMapId) {
            @$query['RouteMapId'] = $request->routeMapId;
        }

        if (null !== $request->version) {
            @$query['Version'] = $request->version;
        }

        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$body['DryRun'] = $request->dryRun;
        }

        if (null !== $request->ecrId) {
            @$body['EcrId'] = $request->ecrId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListRouteMapAssociations',
            'version' => '2023-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListRouteMapAssociationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the association between an Express Connect Router (ECR) and a route map.
     *
     * @param request - ListRouteMapAssociationsRequest
     *
     * @returns ListRouteMapAssociationsResponse
     *
     * @param ListRouteMapAssociationsRequest $request
     *
     * @return ListRouteMapAssociationsResponse
     */
    public function listRouteMapAssociations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRouteMapAssociationsWithOptions($request, $runtime);
    }

    /**
     * Queries the list of tags bound to an Express Connect Router (ECR).
     *
     * @param request - ListTagResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTagResourcesResponse
     *
     * @param ListTagResourcesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListTagResourcesResponse
     */
    public function listTagResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->version) {
            @$query['Version'] = $request->version;
        }

        $body = [];
        if (null !== $request->maxResults) {
            @$body['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        if (null !== $request->resourceId) {
            @$body['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$body['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tag) {
            @$body['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListTagResources',
            'version' => '2023-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListTagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of tags bound to an Express Connect Router (ECR).
     *
     * @param request - ListTagResourcesRequest
     *
     * @returns ListTagResourcesResponse
     *
     * @param ListTagResourcesRequest $request
     *
     * @return ListTagResourcesResponse
     */
    public function listTagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTagResourcesWithOptions($request, $runtime);
    }

    /**
     * Modifies the properties of an Express Connect Router (ECR), such as its name.
     *
     * @remarks
     * You can modify an Express Connect Router (ECR) instance only when it is in the **Active** state.
     *
     * @param request - ModifyExpressConnectRouterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyExpressConnectRouterResponse
     *
     * @param ModifyExpressConnectRouterRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ModifyExpressConnectRouterResponse
     */
    public function modifyExpressConnectRouterWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->version) {
            @$query['Version'] = $request->version;
        }

        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->dryRun) {
            @$body['DryRun'] = $request->dryRun;
        }

        if (null !== $request->ecrId) {
            @$body['EcrId'] = $request->ecrId;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModifyExpressConnectRouter',
            'version' => '2023-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyExpressConnectRouterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the properties of an Express Connect Router (ECR), such as its name.
     *
     * @remarks
     * You can modify an Express Connect Router (ECR) instance only when it is in the **Active** state.
     *
     * @param request - ModifyExpressConnectRouterRequest
     *
     * @returns ModifyExpressConnectRouterResponse
     *
     * @param ModifyExpressConnectRouterRequest $request
     *
     * @return ModifyExpressConnectRouterResponse
     */
    public function modifyExpressConnectRouter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyExpressConnectRouterWithOptions($request, $runtime);
    }

    /**
     * Modifies the attributes of a child instance associated with an Express Connect Router (ECR).
     *
     * @param request - ModifyExpressConnectRouterAssociationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyExpressConnectRouterAssociationResponse
     *
     * @param ModifyExpressConnectRouterAssociationRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return ModifyExpressConnectRouterAssociationResponse
     */
    public function modifyExpressConnectRouterAssociationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->version) {
            @$query['Version'] = $request->version;
        }

        $body = [];
        if (null !== $request->associationId) {
            @$body['AssociationId'] = $request->associationId;
        }

        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->dryRun) {
            @$body['DryRun'] = $request->dryRun;
        }

        if (null !== $request->ecrId) {
            @$body['EcrId'] = $request->ecrId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModifyExpressConnectRouterAssociation',
            'version' => '2023-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyExpressConnectRouterAssociationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the attributes of a child instance associated with an Express Connect Router (ECR).
     *
     * @param request - ModifyExpressConnectRouterAssociationRequest
     *
     * @returns ModifyExpressConnectRouterAssociationResponse
     *
     * @param ModifyExpressConnectRouterAssociationRequest $request
     *
     * @return ModifyExpressConnectRouterAssociationResponse
     */
    public function modifyExpressConnectRouterAssociation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyExpressConnectRouterAssociationWithOptions($request, $runtime);
    }

    /**
     * Modifies the prefixes for a virtual private cloud (VPC) or a transit router that is attached to an Express Connect Router (ECR).
     *
     * @param request - ModifyExpressConnectRouterAssociationAllowedPrefixRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyExpressConnectRouterAssociationAllowedPrefixResponse
     *
     * @param ModifyExpressConnectRouterAssociationAllowedPrefixRequest $request
     * @param RuntimeOptions                                            $runtime
     *
     * @return ModifyExpressConnectRouterAssociationAllowedPrefixResponse
     */
    public function modifyExpressConnectRouterAssociationAllowedPrefixWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->version) {
            @$query['Version'] = $request->version;
        }

        $body = [];
        if (null !== $request->allowedPrefixes) {
            @$body['AllowedPrefixes'] = $request->allowedPrefixes;
        }

        if (null !== $request->allowedPrefixesMode) {
            @$body['AllowedPrefixesMode'] = $request->allowedPrefixesMode;
        }

        if (null !== $request->associationId) {
            @$body['AssociationId'] = $request->associationId;
        }

        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$body['DryRun'] = $request->dryRun;
        }

        if (null !== $request->ecrId) {
            @$body['EcrId'] = $request->ecrId;
        }

        if (null !== $request->ownerAccount) {
            @$body['OwnerAccount'] = $request->ownerAccount;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModifyExpressConnectRouterAssociationAllowedPrefix',
            'version' => '2023-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyExpressConnectRouterAssociationAllowedPrefixResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the prefixes for a virtual private cloud (VPC) or a transit router that is attached to an Express Connect Router (ECR).
     *
     * @param request - ModifyExpressConnectRouterAssociationAllowedPrefixRequest
     *
     * @returns ModifyExpressConnectRouterAssociationAllowedPrefixResponse
     *
     * @param ModifyExpressConnectRouterAssociationAllowedPrefixRequest $request
     *
     * @return ModifyExpressConnectRouterAssociationAllowedPrefixResponse
     */
    public function modifyExpressConnectRouterAssociationAllowedPrefix($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyExpressConnectRouterAssociationAllowedPrefixWithOptions($request, $runtime);
    }

    /**
     * Modifies the attributes of a child instance (VBR) associated with an Express Connect Router (ECR).
     *
     * @param request - ModifyExpressConnectRouterChildInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyExpressConnectRouterChildInstanceResponse
     *
     * @param ModifyExpressConnectRouterChildInstanceRequest $request
     * @param RuntimeOptions                                 $runtime
     *
     * @return ModifyExpressConnectRouterChildInstanceResponse
     */
    public function modifyExpressConnectRouterChildInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->version) {
            @$query['Version'] = $request->version;
        }

        $body = [];
        if (null !== $request->childInstanceId) {
            @$body['ChildInstanceId'] = $request->childInstanceId;
        }

        if (null !== $request->childInstanceType) {
            @$body['ChildInstanceType'] = $request->childInstanceType;
        }

        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->dryRun) {
            @$body['DryRun'] = $request->dryRun;
        }

        if (null !== $request->ecrId) {
            @$body['EcrId'] = $request->ecrId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModifyExpressConnectRouterChildInstance',
            'version' => '2023-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyExpressConnectRouterChildInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the attributes of a child instance (VBR) associated with an Express Connect Router (ECR).
     *
     * @param request - ModifyExpressConnectRouterChildInstanceRequest
     *
     * @returns ModifyExpressConnectRouterChildInstanceResponse
     *
     * @param ModifyExpressConnectRouterChildInstanceRequest $request
     *
     * @return ModifyExpressConnectRouterChildInstanceResponse
     */
    public function modifyExpressConnectRouterChildInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyExpressConnectRouterChildInstanceWithOptions($request, $runtime);
    }

    /**
     * Modifies the inter-region forwarding mode of an Express Connect Router (ECR).
     *
     * @param request - ModifyExpressConnectRouterInterRegionTransitModeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyExpressConnectRouterInterRegionTransitModeResponse
     *
     * @param ModifyExpressConnectRouterInterRegionTransitModeRequest $request
     * @param RuntimeOptions                                          $runtime
     *
     * @return ModifyExpressConnectRouterInterRegionTransitModeResponse
     */
    public function modifyExpressConnectRouterInterRegionTransitModeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->version) {
            @$query['Version'] = $request->version;
        }

        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$body['DryRun'] = $request->dryRun;
        }

        if (null !== $request->ecrId) {
            @$body['EcrId'] = $request->ecrId;
        }

        if (null !== $request->transitModeList) {
            @$body['TransitModeList'] = $request->transitModeList;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModifyExpressConnectRouterInterRegionTransitMode',
            'version' => '2023-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyExpressConnectRouterInterRegionTransitModeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the inter-region forwarding mode of an Express Connect Router (ECR).
     *
     * @param request - ModifyExpressConnectRouterInterRegionTransitModeRequest
     *
     * @returns ModifyExpressConnectRouterInterRegionTransitModeResponse
     *
     * @param ModifyExpressConnectRouterInterRegionTransitModeRequest $request
     *
     * @return ModifyExpressConnectRouterInterRegionTransitModeResponse
     */
    public function modifyExpressConnectRouterInterRegionTransitMode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyExpressConnectRouterInterRegionTransitModeWithOptions($request, $runtime);
    }

    /**
     * Modifies the name, description, sampling rate, and sampling interval of a flow log.
     *
     * @param request - ModifyFlowLogAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyFlowLogAttributeResponse
     *
     * @param ModifyFlowLogAttributeRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ModifyFlowLogAttributeResponse
     */
    public function modifyFlowLogAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->flowLogId) {
            @$query['FlowLogId'] = $request->flowLogId;
        }

        if (null !== $request->interval) {
            @$query['Interval'] = $request->interval;
        }

        if (null !== $request->samplingRate) {
            @$query['SamplingRate'] = $request->samplingRate;
        }

        if (null !== $request->version) {
            @$query['Version'] = $request->version;
        }

        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$body['DryRun'] = $request->dryRun;
        }

        if (null !== $request->ecrId) {
            @$body['EcrId'] = $request->ecrId;
        }

        if (null !== $request->flowLogName) {
            @$body['FlowLogName'] = $request->flowLogName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModifyFlowLogAttribute',
            'version' => '2023-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyFlowLogAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the name, description, sampling rate, and sampling interval of a flow log.
     *
     * @param request - ModifyFlowLogAttributeRequest
     *
     * @returns ModifyFlowLogAttributeResponse
     *
     * @param ModifyFlowLogAttributeRequest $request
     *
     * @return ModifyFlowLogAttributeResponse
     */
    public function modifyFlowLogAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyFlowLogAttributeWithOptions($request, $runtime);
    }

    /**
     * Modifies the resource group to which an Express Connect Router (ECR) belongs.
     *
     * @param request - MoveResourceGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns MoveResourceGroupResponse
     *
     * @param MoveResourceGroupRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return MoveResourceGroupResponse
     */
    public function moveResourceGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->version) {
            @$query['Version'] = $request->version;
        }

        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$body['DryRun'] = $request->dryRun;
        }

        if (null !== $request->newResourceGroupId) {
            @$body['NewResourceGroupId'] = $request->newResourceGroupId;
        }

        if (null !== $request->resourceId) {
            @$body['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$body['ResourceType'] = $request->resourceType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'MoveResourceGroup',
            'version' => '2023-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return MoveResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the resource group to which an Express Connect Router (ECR) belongs.
     *
     * @param request - MoveResourceGroupRequest
     *
     * @returns MoveResourceGroupResponse
     *
     * @param MoveResourceGroupRequest $request
     *
     * @return MoveResourceGroupResponse
     */
    public function moveResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->moveResourceGroupWithOptions($request, $runtime);
    }

    /**
     * Revokes the authorization of a virtual private cloud (VPC) or virtual border router (VBR) on a cross-account Express Connect Router (ECR).
     *
     * @param request - RevokeInstanceFromExpressConnectRouterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RevokeInstanceFromExpressConnectRouterResponse
     *
     * @param RevokeInstanceFromExpressConnectRouterRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return RevokeInstanceFromExpressConnectRouterResponse
     */
    public function revokeInstanceFromExpressConnectRouterWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->version) {
            @$query['Version'] = $request->version;
        }

        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$body['DryRun'] = $request->dryRun;
        }

        if (null !== $request->ecrId) {
            @$body['EcrId'] = $request->ecrId;
        }

        if (null !== $request->ecrOwnerAliUid) {
            @$body['EcrOwnerAliUid'] = $request->ecrOwnerAliUid;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->instanceRegionId) {
            @$body['InstanceRegionId'] = $request->instanceRegionId;
        }

        if (null !== $request->instanceType) {
            @$body['InstanceType'] = $request->instanceType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RevokeInstanceFromExpressConnectRouter',
            'version' => '2023-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RevokeInstanceFromExpressConnectRouterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Revokes the authorization of a virtual private cloud (VPC) or virtual border router (VBR) on a cross-account Express Connect Router (ECR).
     *
     * @param request - RevokeInstanceFromExpressConnectRouterRequest
     *
     * @returns RevokeInstanceFromExpressConnectRouterResponse
     *
     * @param RevokeInstanceFromExpressConnectRouterRequest $request
     *
     * @return RevokeInstanceFromExpressConnectRouterResponse
     */
    public function revokeInstanceFromExpressConnectRouter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->revokeInstanceFromExpressConnectRouterWithOptions($request, $runtime);
    }

    /**
     * Synchronizes the inter-region bandwidth limits for an Express Connect Router (ECR).
     *
     * @remarks
     * You can update an ECR instance only when it is in the **Active** state.
     *
     * @param request - SynchronizeExpressConnectRouterInterRegionBandwidthRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SynchronizeExpressConnectRouterInterRegionBandwidthResponse
     *
     * @param SynchronizeExpressConnectRouterInterRegionBandwidthRequest $request
     * @param RuntimeOptions                                             $runtime
     *
     * @return SynchronizeExpressConnectRouterInterRegionBandwidthResponse
     */
    public function synchronizeExpressConnectRouterInterRegionBandwidthWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->version) {
            @$query['Version'] = $request->version;
        }

        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$body['DryRun'] = $request->dryRun;
        }

        if (null !== $request->ecrId) {
            @$body['EcrId'] = $request->ecrId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SynchronizeExpressConnectRouterInterRegionBandwidth',
            'version' => '2023-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SynchronizeExpressConnectRouterInterRegionBandwidthResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Synchronizes the inter-region bandwidth limits for an Express Connect Router (ECR).
     *
     * @remarks
     * You can update an ECR instance only when it is in the **Active** state.
     *
     * @param request - SynchronizeExpressConnectRouterInterRegionBandwidthRequest
     *
     * @returns SynchronizeExpressConnectRouterInterRegionBandwidthResponse
     *
     * @param SynchronizeExpressConnectRouterInterRegionBandwidthRequest $request
     *
     * @return SynchronizeExpressConnectRouterInterRegionBandwidthResponse
     */
    public function synchronizeExpressConnectRouterInterRegionBandwidth($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->synchronizeExpressConnectRouterInterRegionBandwidthWithOptions($request, $runtime);
    }

    /**
     * Binds tags to an Express Connect Router (ECR). Each call to this operation binds tags to a single ECR instance, but you can bind multiple tags at a time.
     *
     * @param request - TagResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TagResourcesResponse
     *
     * @param TagResourcesRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return TagResourcesResponse
     */
    public function tagResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->version) {
            @$query['Version'] = $request->version;
        }

        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$body['DryRun'] = $request->dryRun;
        }

        if (null !== $request->resourceId) {
            @$body['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$body['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tag) {
            @$body['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'TagResources',
            'version' => '2023-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return TagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Binds tags to an Express Connect Router (ECR). Each call to this operation binds tags to a single ECR instance, but you can bind multiple tags at a time.
     *
     * @param request - TagResourcesRequest
     *
     * @returns TagResourcesResponse
     *
     * @param TagResourcesRequest $request
     *
     * @return TagResourcesResponse
     */
    public function tagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->tagResourcesWithOptions($request, $runtime);
    }

    /**
     * Unbinds tags from an Express Connect Router (ECR).
     *
     * @param request - UntagResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UntagResourcesResponse
     *
     * @param UntagResourcesRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UntagResourcesResponse
     */
    public function untagResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->version) {
            @$query['Version'] = $request->version;
        }

        $body = [];
        if (null !== $request->all) {
            @$body['All'] = $request->all;
        }

        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$body['DryRun'] = $request->dryRun;
        }

        if (null !== $request->resourceId) {
            @$body['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$body['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tagKey) {
            @$body['TagKey'] = $request->tagKey;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UntagResources',
            'version' => '2023-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UntagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Unbinds tags from an Express Connect Router (ECR).
     *
     * @param request - UntagResourcesRequest
     *
     * @returns UntagResourcesResponse
     *
     * @param UntagResourcesRequest $request
     *
     * @return UntagResourcesResponse
     */
    public function untagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->untagResourcesWithOptions($request, $runtime);
    }

    /**
     * Updates the association between an Express Connect Router (ECR) and a routing policy.
     *
     * @param request - UpdateRouteMapAssociationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateRouteMapAssociationResponse
     *
     * @param UpdateRouteMapAssociationRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return UpdateRouteMapAssociationResponse
     */
    public function updateRouteMapAssociationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->associationId) {
            @$query['AssociationId'] = $request->associationId;
        }

        if (null !== $request->regionIdList) {
            @$query['RegionIdList'] = $request->regionIdList;
        }

        if (null !== $request->version) {
            @$query['Version'] = $request->version;
        }

        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$body['DryRun'] = $request->dryRun;
        }

        if (null !== $request->ecrId) {
            @$body['EcrId'] = $request->ecrId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateRouteMapAssociation',
            'version' => '2023-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateRouteMapAssociationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the association between an Express Connect Router (ECR) and a routing policy.
     *
     * @param request - UpdateRouteMapAssociationRequest
     *
     * @returns UpdateRouteMapAssociationResponse
     *
     * @param UpdateRouteMapAssociationRequest $request
     *
     * @return UpdateRouteMapAssociationResponse
     */
    public function updateRouteMapAssociation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateRouteMapAssociationWithOptions($request, $runtime);
    }
}
