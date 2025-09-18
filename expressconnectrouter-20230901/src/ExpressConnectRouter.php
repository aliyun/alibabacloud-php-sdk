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
use AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\DeactivateFlowLogRequest;
use AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\DeactivateFlowLogResponse;
use AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\DeleteExpressConnectRouterAssociationRequest;
use AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\DeleteExpressConnectRouterAssociationResponse;
use AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\DeleteExpressConnectRouterRequest;
use AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\DeleteExpressConnectRouterResponse;
use AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\DeleteFlowlogRequest;
use AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\DeleteFlowlogResponse;
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
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class ExpressConnectRouter extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
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
     * Enables log delivery for flow logs.
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
     * Enables log delivery for flow logs.
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
     * Associates a virtual border router (VBR) with an Express Connect router (ECR).
     *
     * @remarks
     * Before you call the **AttachExpressConnectRouterChildInstance** operation to associate a VBR with an ECR, make sure that the ECR is in the **Active** state.
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
     * Associates a virtual border router (VBR) with an Express Connect router (ECR).
     *
     * @remarks
     * Before you call the **AttachExpressConnectRouterChildInstance** operation to associate a VBR with an ECR, make sure that the ECR is in the **Active** state.
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
     * Checks the Cloud Data Transfer (CDT) service required to add a region to an Express Connect router (ECR).
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
     * Checks the Cloud Data Transfer (CDT) service required to add a region to an Express Connect router (ECR).
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
     * After you create an ECR, it enters the **Active** state.
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
     * After you create an ECR, it enters the **Active** state.
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
     * Associates a virtual private cloud (VPC) or a transit router (TR) with an Express Connect router (ECR).
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
     * Associates a virtual private cloud (VPC) or a transit router (TR) with an Express Connect router (ECR).
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
     * Creates a flow log and enables log delivery.
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
     * Creates a flow log and enables log delivery.
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
     * Disables log delivery.
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
     * Disables log delivery.
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
     * Deletes an Express Connect router (ECR).
     *
     * @remarks
     * Take note of the following items:
     * *   Before you call this operation, make sure that all resources are disassociated from the ECR.
     * *   You can delete only ECRs that are in the **Active** state.
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
     * Deletes an Express Connect router (ECR).
     *
     * @remarks
     * Take note of the following items:
     * *   Before you call this operation, make sure that all resources are disassociated from the ECR.
     * *   You can delete only ECRs that are in the **Active** state.
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
     * Disassociates an Express Connect router (ECR) from a virtual private cloud (VPC) or a transit router (TR).
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
     * Disassociates an Express Connect router (ECR) from a virtual private cloud (VPC) or a transit router (TR).
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
     * Queries the route entries that are disabled on an Express Connect router (ECR).
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
     * Queries the route entries that are disabled on an Express Connect router (ECR).
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
     * Queries a list of Express Connect routers (ECRs).
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
     * Queries a list of Express Connect routers (ECRs).
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
     * Queries the historical route prefixes of an Express Connect router (ECR).
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
     * Queries the historical route prefixes of an Express Connect router (ECR).
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
     * Queries the virtual private clouds (VPCs) and transit routers (TRs) associated with an Express Connect router (ECR).
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
     * Queries the virtual private clouds (VPCs) and transit routers (TRs) associated with an Express Connect router (ECR).
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
     * Queries the virtual border routers (VBRs) that are associated with an Express Connect router (ECR).
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
     * Queries the virtual border routers (VBRs) that are associated with an Express Connect router (ECR).
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
     * Queries the cross-region forwarding modes of an Express Connect router (ECR).
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
     * Queries the cross-region forwarding modes of an Express Connect router (ECR).
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
     * Queries a list of regions in which resources related to an Express Connect router (ECR) are deployed.
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
     * Queries a list of regions in which resources related to an Express Connect router (ECR) are deployed.
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
     * Queries the route entries of an Express Connect router (ECR).
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
     * Queries the route entries of an Express Connect router (ECR).
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
     * Queries the network instances whose permissions are granted to an Express Connect router (ECR).
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
     * Queries the network instances whose permissions are granted to an Express Connect router (ECR).
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
     * Disassociates a virtual border router (VBR) from an Express Connect router (ECR).
     *
     * @remarks
     * Before you call the **DetachExpressConnectRouterChildInstance** operation to uninstall a VBR from an ECR, make sure that the ECR is in the **Active** state.
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
     * Disassociates a virtual border router (VBR) from an Express Connect router (ECR).
     *
     * @remarks
     * Before you call the **DetachExpressConnectRouterChildInstance** operation to uninstall a VBR from an ECR, make sure that the ECR is in the **Active** state.
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
     * Disables route entries of an Express Connect router (ECR).
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
     * Disables route entries of an Express Connect router (ECR).
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
     * Enables route entries of an Express Connect router (ECR).
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
     * Enables route entries of an Express Connect router (ECR).
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
     * Deletes an Express Connect router (ECR) and disassociates the virtual private cloud (VPC), transit router (TR), and virtual border router (VBR) associated with the ECR.
     *
     * @remarks
     *   If you forcefully delete an ECR, all the resources associated with the ECR are disassociated at a time. Make sure that the disassociation does not affect the stability of your business.
     * *   You can delete only ECRs that are in the **Active** state.
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
     * Deletes an Express Connect router (ECR) and disassociates the virtual private cloud (VPC), transit router (TR), and virtual border router (VBR) associated with the ECR.
     *
     * @remarks
     *   If you forcefully delete an ECR, all the resources associated with the ECR are disassociated at a time. Make sure that the disassociation does not affect the stability of your business.
     * *   You can delete only ECRs that are in the **Active** state.
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
     * Grants permissions on a virtual private cloud (VPC) or a virtual border router (VBR) to an Express Connect router (ECR) of another account.
     *
     * @remarks
     * When you associate a network instance of another account with an ECR, you must grant permissions on the network instance to the ECR.
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
     * Grants permissions on a virtual private cloud (VPC) or a virtual border router (VBR) to an Express Connect router (ECR) of another account.
     *
     * @remarks
     * When you associate a network instance of another account with an ECR, you must grant permissions on the network instance to the ECR.
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
     * Queries a list of regions in which the Express Connect router (ECR) feature is activated.
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
     * Queries a list of regions in which the Express Connect router (ECR) feature is activated.
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
     * Queries a list of tags that are added to an Express Connect router (ECR).
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
     * Queries a list of tags that are added to an Express Connect router (ECR).
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
     * Modifies the properties such as the name of an Express Connect router (ECR).
     *
     * @remarks
     * You can modify only properties of ECRs in the **Active** state.
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
     * Modifies the properties such as the name of an Express Connect router (ECR).
     *
     * @remarks
     * You can modify only properties of ECRs in the **Active** state.
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
     * 修改专线网关关联的属性.
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
     * 修改专线网关关联的属性.
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
     * Modifies the route prefixes of a virtual private cloud (VPC) or a transit router (TR) that is associated with an Express Connect router (ECR).
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
     * Modifies the route prefixes of a virtual private cloud (VPC) or a transit router (TR) that is associated with an Express Connect router (ECR).
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
     * 修改专线网关子实例的属性.
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
     * 修改专线网关子实例的属性.
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
     * Modifies the cross-region forwarding mode of an Express Connect router (ECR).
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
     * Modifies the cross-region forwarding mode of an Express Connect router (ECR).
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
     * Modifies the name, description, sampling rate, and sampling interval.
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
     * Modifies the name, description, sampling rate, and sampling interval.
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
     * Modifies the resource group to which an Express Connect router (ECR) belongs.
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
     * Modifies the resource group to which an Express Connect router (ECR) belongs.
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
     * Revokes permissions on a virtual private cloud (VPC) or a virtual border router (VBR) from an Express Connect router (ECR) owned by another account.
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
     * Revokes permissions on a virtual private cloud (VPC) or a virtual border router (VBR) from an Express Connect router (ECR) owned by another account.
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
     * Synchronizes the forwarding bandwidth limit between regions for an Express Connect router (ECR).
     *
     * @remarks
     * Updates are allowed only when the ECR is in the **Active** state.
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
     * Synchronizes the forwarding bandwidth limit between regions for an Express Connect router (ECR).
     *
     * @remarks
     * Updates are allowed only when the ECR is in the **Active** state.
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
     * Adds tags to an Express Connect router (ECR). You can add tags to only one ECR each time you call this operation. You can add multiple tags at a time.
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
     * Adds tags to an Express Connect router (ECR). You can add tags to only one ECR each time you call this operation. You can add multiple tags at a time.
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
     * Removes tags from an Express Connect router (ECR).
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
     * Removes tags from an Express Connect router (ECR).
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
}
