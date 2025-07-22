<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ExpressConnectRouter\V20230901;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
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
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @summary Enables log delivery for flow logs.
     *  *
     * @param ActivateFlowLogRequest $request ActivateFlowLogRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ActivateFlowLogResponse ActivateFlowLogResponse
     */
    public function activateFlowLogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $body['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ecrId)) {
            $body['EcrId'] = $request->ecrId;
        }
        if (!Utils::isUnset($request->flowLogId)) {
            $body['FlowLogId'] = $request->flowLogId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary Enables log delivery for flow logs.
     *  *
     * @param ActivateFlowLogRequest $request ActivateFlowLogRequest
     *
     * @return ActivateFlowLogResponse ActivateFlowLogResponse
     */
    public function activateFlowLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->activateFlowLogWithOptions($request, $runtime);
    }

    /**
     * @summary Associates a virtual border router (VBR) with an Express Connect router (ECR).
     *  *
     * @description Before you call the **AttachExpressConnectRouterChildInstance** operation to associate a VBR with an ECR, make sure that the ECR is in the **Active** state.
     *  *
     * @param AttachExpressConnectRouterChildInstanceRequest $request AttachExpressConnectRouterChildInstanceRequest
     * @param RuntimeOptions                                 $runtime runtime options for this request RuntimeOptions
     *
     * @return AttachExpressConnectRouterChildInstanceResponse AttachExpressConnectRouterChildInstanceResponse
     */
    public function attachExpressConnectRouterChildInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->childInstanceId)) {
            $body['ChildInstanceId'] = $request->childInstanceId;
        }
        if (!Utils::isUnset($request->childInstanceOwnerId)) {
            $body['ChildInstanceOwnerId'] = $request->childInstanceOwnerId;
        }
        if (!Utils::isUnset($request->childInstanceRegionId)) {
            $body['ChildInstanceRegionId'] = $request->childInstanceRegionId;
        }
        if (!Utils::isUnset($request->childInstanceType)) {
            $body['ChildInstanceType'] = $request->childInstanceType;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $body['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ecrId)) {
            $body['EcrId'] = $request->ecrId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary Associates a virtual border router (VBR) with an Express Connect router (ECR).
     *  *
     * @description Before you call the **AttachExpressConnectRouterChildInstance** operation to associate a VBR with an ECR, make sure that the ECR is in the **Active** state.
     *  *
     * @param AttachExpressConnectRouterChildInstanceRequest $request AttachExpressConnectRouterChildInstanceRequest
     *
     * @return AttachExpressConnectRouterChildInstanceResponse AttachExpressConnectRouterChildInstanceResponse
     */
    public function attachExpressConnectRouterChildInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachExpressConnectRouterChildInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary Checks the Cloud Data Transfer (CDT) service required to add a region to an Express Connect router (ECR).
     *  *
     * @param CheckAddRegionToExpressConnectRouterRequest $request CheckAddRegionToExpressConnectRouterRequest
     * @param RuntimeOptions                              $runtime runtime options for this request RuntimeOptions
     *
     * @return CheckAddRegionToExpressConnectRouterResponse CheckAddRegionToExpressConnectRouterResponse
     */
    public function checkAddRegionToExpressConnectRouterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $body['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ecrId)) {
            $body['EcrId'] = $request->ecrId;
        }
        if (!Utils::isUnset($request->freshRegionId)) {
            $body['FreshRegionId'] = $request->freshRegionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary Checks the Cloud Data Transfer (CDT) service required to add a region to an Express Connect router (ECR).
     *  *
     * @param CheckAddRegionToExpressConnectRouterRequest $request CheckAddRegionToExpressConnectRouterRequest
     *
     * @return CheckAddRegionToExpressConnectRouterResponse CheckAddRegionToExpressConnectRouterResponse
     */
    public function checkAddRegionToExpressConnectRouter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkAddRegionToExpressConnectRouterWithOptions($request, $runtime);
    }

    /**
     * @summary Creates an Express Connect Router (ECR).
     *  *
     * @description After you create an ECR, it enters the **Active** state.
     *  *
     * @param CreateExpressConnectRouterRequest $request CreateExpressConnectRouterRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateExpressConnectRouterResponse CreateExpressConnectRouterResponse
     */
    public function createExpressConnectRouterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->alibabaSideAsn)) {
            $body['AlibabaSideAsn'] = $request->alibabaSideAsn;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $body['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $body['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->tag)) {
            $body['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary Creates an Express Connect Router (ECR).
     *  *
     * @description After you create an ECR, it enters the **Active** state.
     *  *
     * @param CreateExpressConnectRouterRequest $request CreateExpressConnectRouterRequest
     *
     * @return CreateExpressConnectRouterResponse CreateExpressConnectRouterResponse
     */
    public function createExpressConnectRouter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createExpressConnectRouterWithOptions($request, $runtime);
    }

    /**
     * @summary Associates a virtual private cloud (VPC) or a transit router (TR) with an Express Connect router (ECR).
     *  *
     * @param CreateExpressConnectRouterAssociationRequest $request CreateExpressConnectRouterAssociationRequest
     * @param RuntimeOptions                               $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateExpressConnectRouterAssociationResponse CreateExpressConnectRouterAssociationResponse
     */
    public function createExpressConnectRouterAssociationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->allowedPrefixes)) {
            $body['AllowedPrefixes'] = $request->allowedPrefixes;
        }
        if (!Utils::isUnset($request->allowedPrefixesMode)) {
            $body['AllowedPrefixesMode'] = $request->allowedPrefixesMode;
        }
        if (!Utils::isUnset($request->associationRegionId)) {
            $body['AssociationRegionId'] = $request->associationRegionId;
        }
        if (!Utils::isUnset($request->cenId)) {
            $body['CenId'] = $request->cenId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->createAttachment)) {
            $body['CreateAttachment'] = $request->createAttachment;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $body['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ecrId)) {
            $body['EcrId'] = $request->ecrId;
        }
        if (!Utils::isUnset($request->transitRouterId)) {
            $body['TransitRouterId'] = $request->transitRouterId;
        }
        if (!Utils::isUnset($request->transitRouterOwnerId)) {
            $body['TransitRouterOwnerId'] = $request->transitRouterOwnerId;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $body['VpcId'] = $request->vpcId;
        }
        if (!Utils::isUnset($request->vpcOwnerId)) {
            $body['VpcOwnerId'] = $request->vpcOwnerId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary Associates a virtual private cloud (VPC) or a transit router (TR) with an Express Connect router (ECR).
     *  *
     * @param CreateExpressConnectRouterAssociationRequest $request CreateExpressConnectRouterAssociationRequest
     *
     * @return CreateExpressConnectRouterAssociationResponse CreateExpressConnectRouterAssociationResponse
     */
    public function createExpressConnectRouterAssociation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createExpressConnectRouterAssociationWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a flow log and enables log delivery.
     *  *
     * @param CreateFlowLogRequest $request CreateFlowLogRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateFlowLogResponse CreateFlowLogResponse
     */
    public function createFlowLogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->instanceType)) {
            $query['InstanceType'] = $request->instanceType;
        }
        if (!Utils::isUnset($request->interval)) {
            $query['Interval'] = $request->interval;
        }
        if (!Utils::isUnset($request->logStoreName)) {
            $query['LogStoreName'] = $request->logStoreName;
        }
        if (!Utils::isUnset($request->projectName)) {
            $query['ProjectName'] = $request->projectName;
        }
        if (!Utils::isUnset($request->samplingRate)) {
            $query['SamplingRate'] = $request->samplingRate;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $body['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ecrId)) {
            $body['EcrId'] = $request->ecrId;
        }
        if (!Utils::isUnset($request->flowLogName)) {
            $body['FlowLogName'] = $request->flowLogName;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $body['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary Creates a flow log and enables log delivery.
     *  *
     * @param CreateFlowLogRequest $request CreateFlowLogRequest
     *
     * @return CreateFlowLogResponse CreateFlowLogResponse
     */
    public function createFlowLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFlowLogWithOptions($request, $runtime);
    }

    /**
     * @summary Disables log delivery.
     *  *
     * @param DeactivateFlowLogRequest $request DeactivateFlowLogRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DeactivateFlowLogResponse DeactivateFlowLogResponse
     */
    public function deactivateFlowLogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $body['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ecrId)) {
            $body['EcrId'] = $request->ecrId;
        }
        if (!Utils::isUnset($request->flowLogId)) {
            $body['FlowLogId'] = $request->flowLogId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary Disables log delivery.
     *  *
     * @param DeactivateFlowLogRequest $request DeactivateFlowLogRequest
     *
     * @return DeactivateFlowLogResponse DeactivateFlowLogResponse
     */
    public function deactivateFlowLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deactivateFlowLogWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes an Express Connect router (ECR).
     *  *
     * @description Take note of the following items:
     * *   Before you call this operation, make sure that all resources are disassociated from the ECR.
     * *   You can delete only ECRs that are in the **Active** state.
     *  *
     * @param DeleteExpressConnectRouterRequest $request DeleteExpressConnectRouterRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteExpressConnectRouterResponse DeleteExpressConnectRouterResponse
     */
    public function deleteExpressConnectRouterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $body['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ecrId)) {
            $body['EcrId'] = $request->ecrId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary Deletes an Express Connect router (ECR).
     *  *
     * @description Take note of the following items:
     * *   Before you call this operation, make sure that all resources are disassociated from the ECR.
     * *   You can delete only ECRs that are in the **Active** state.
     *  *
     * @param DeleteExpressConnectRouterRequest $request DeleteExpressConnectRouterRequest
     *
     * @return DeleteExpressConnectRouterResponse DeleteExpressConnectRouterResponse
     */
    public function deleteExpressConnectRouter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteExpressConnectRouterWithOptions($request, $runtime);
    }

    /**
     * @summary Disassociates an Express Connect router (ECR) from a virtual private cloud (VPC) or a transit router (TR).
     *  *
     * @param DeleteExpressConnectRouterAssociationRequest $request DeleteExpressConnectRouterAssociationRequest
     * @param RuntimeOptions                               $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteExpressConnectRouterAssociationResponse DeleteExpressConnectRouterAssociationResponse
     */
    public function deleteExpressConnectRouterAssociationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->associationId)) {
            $body['AssociationId'] = $request->associationId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->deleteAttachment)) {
            $body['DeleteAttachment'] = $request->deleteAttachment;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $body['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ecrId)) {
            $body['EcrId'] = $request->ecrId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary Disassociates an Express Connect router (ECR) from a virtual private cloud (VPC) or a transit router (TR).
     *  *
     * @param DeleteExpressConnectRouterAssociationRequest $request DeleteExpressConnectRouterAssociationRequest
     *
     * @return DeleteExpressConnectRouterAssociationResponse DeleteExpressConnectRouterAssociationResponse
     */
    public function deleteExpressConnectRouterAssociation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteExpressConnectRouterAssociationWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a flow log.
     *  *
     * @param DeleteFlowlogRequest $request DeleteFlowlogRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteFlowlogResponse DeleteFlowlogResponse
     */
    public function deleteFlowlogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->flowLogId)) {
            $query['FlowLogId'] = $request->flowLogId;
        }
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $body['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ecrId)) {
            $body['EcrId'] = $request->ecrId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary Deletes a flow log.
     *  *
     * @param DeleteFlowlogRequest $request DeleteFlowlogRequest
     *
     * @return DeleteFlowlogResponse DeleteFlowlogResponse
     */
    public function deleteFlowlog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteFlowlogWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the route entries that are disabled on an Express Connect router (ECR).
     *  *
     * @param DescribeDisabledExpressConnectRouterRouteEntriesRequest $request DescribeDisabledExpressConnectRouterRouteEntriesRequest
     * @param RuntimeOptions                                          $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDisabledExpressConnectRouterRouteEntriesResponse DescribeDisabledExpressConnectRouterRouteEntriesResponse
     */
    public function describeDisabledExpressConnectRouterRouteEntriesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $body['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ecrId)) {
            $body['EcrId'] = $request->ecrId;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $body['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $body['NextToken'] = $request->nextToken;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary Queries the route entries that are disabled on an Express Connect router (ECR).
     *  *
     * @param DescribeDisabledExpressConnectRouterRouteEntriesRequest $request DescribeDisabledExpressConnectRouterRouteEntriesRequest
     *
     * @return DescribeDisabledExpressConnectRouterRouteEntriesResponse DescribeDisabledExpressConnectRouterRouteEntriesResponse
     */
    public function describeDisabledExpressConnectRouterRouteEntries($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDisabledExpressConnectRouterRouteEntriesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of Express Connect routers (ECRs).
     *  *
     * @param DescribeExpressConnectRouterRequest $request DescribeExpressConnectRouterRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeExpressConnectRouterResponse DescribeExpressConnectRouterResponse
     */
    public function describeExpressConnectRouterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $body['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ecrId)) {
            $body['EcrId'] = $request->ecrId;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $body['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $body['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $body['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->tag)) {
            $body['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary Queries a list of Express Connect routers (ECRs).
     *  *
     * @param DescribeExpressConnectRouterRequest $request DescribeExpressConnectRouterRequest
     *
     * @return DescribeExpressConnectRouterResponse DescribeExpressConnectRouterResponse
     */
    public function describeExpressConnectRouter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeExpressConnectRouterWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the historical route prefixes of an Express Connect router (ECR).
     *  *
     * @param DescribeExpressConnectRouterAllowedPrefixHistoryRequest $request DescribeExpressConnectRouterAllowedPrefixHistoryRequest
     * @param RuntimeOptions                                          $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeExpressConnectRouterAllowedPrefixHistoryResponse DescribeExpressConnectRouterAllowedPrefixHistoryResponse
     */
    public function describeExpressConnectRouterAllowedPrefixHistoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->associationId)) {
            $body['AssociationId'] = $request->associationId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $body['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ecrId)) {
            $body['EcrId'] = $request->ecrId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->instanceType)) {
            $body['InstanceType'] = $request->instanceType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary Queries the historical route prefixes of an Express Connect router (ECR).
     *  *
     * @param DescribeExpressConnectRouterAllowedPrefixHistoryRequest $request DescribeExpressConnectRouterAllowedPrefixHistoryRequest
     *
     * @return DescribeExpressConnectRouterAllowedPrefixHistoryResponse DescribeExpressConnectRouterAllowedPrefixHistoryResponse
     */
    public function describeExpressConnectRouterAllowedPrefixHistory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeExpressConnectRouterAllowedPrefixHistoryWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the virtual private clouds (VPCs) and transit routers (TRs) associated with an Express Connect router (ECR).
     *  *
     * @param DescribeExpressConnectRouterAssociationRequest $request DescribeExpressConnectRouterAssociationRequest
     * @param RuntimeOptions                                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeExpressConnectRouterAssociationResponse DescribeExpressConnectRouterAssociationResponse
     */
    public function describeExpressConnectRouterAssociationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->associationId)) {
            $body['AssociationId'] = $request->associationId;
        }
        if (!Utils::isUnset($request->associationNodeType)) {
            $body['AssociationNodeType'] = $request->associationNodeType;
        }
        if (!Utils::isUnset($request->associationRegionId)) {
            $body['AssociationRegionId'] = $request->associationRegionId;
        }
        if (!Utils::isUnset($request->cenId)) {
            $body['CenId'] = $request->cenId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $body['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ecrId)) {
            $body['EcrId'] = $request->ecrId;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $body['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $body['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->transitRouterId)) {
            $body['TransitRouterId'] = $request->transitRouterId;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $body['VpcId'] = $request->vpcId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary Queries the virtual private clouds (VPCs) and transit routers (TRs) associated with an Express Connect router (ECR).
     *  *
     * @param DescribeExpressConnectRouterAssociationRequest $request DescribeExpressConnectRouterAssociationRequest
     *
     * @return DescribeExpressConnectRouterAssociationResponse DescribeExpressConnectRouterAssociationResponse
     */
    public function describeExpressConnectRouterAssociation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeExpressConnectRouterAssociationWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the virtual border routers (VBRs) that are associated with an Express Connect router (ECR).
     *  *
     * @param DescribeExpressConnectRouterChildInstanceRequest $request DescribeExpressConnectRouterChildInstanceRequest
     * @param RuntimeOptions                                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeExpressConnectRouterChildInstanceResponse DescribeExpressConnectRouterChildInstanceResponse
     */
    public function describeExpressConnectRouterChildInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->associationId)) {
            $body['AssociationId'] = $request->associationId;
        }
        if (!Utils::isUnset($request->childInstanceId)) {
            $body['ChildInstanceId'] = $request->childInstanceId;
        }
        if (!Utils::isUnset($request->childInstanceRegionId)) {
            $body['ChildInstanceRegionId'] = $request->childInstanceRegionId;
        }
        if (!Utils::isUnset($request->childInstanceType)) {
            $body['ChildInstanceType'] = $request->childInstanceType;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $body['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ecrId)) {
            $body['EcrId'] = $request->ecrId;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $body['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $body['NextToken'] = $request->nextToken;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary Queries the virtual border routers (VBRs) that are associated with an Express Connect router (ECR).
     *  *
     * @param DescribeExpressConnectRouterChildInstanceRequest $request DescribeExpressConnectRouterChildInstanceRequest
     *
     * @return DescribeExpressConnectRouterChildInstanceResponse DescribeExpressConnectRouterChildInstanceResponse
     */
    public function describeExpressConnectRouterChildInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeExpressConnectRouterChildInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the cross-region forwarding modes of an Express Connect router (ECR).
     *  *
     * @param DescribeExpressConnectRouterInterRegionTransitModeRequest $request DescribeExpressConnectRouterInterRegionTransitModeRequest
     * @param RuntimeOptions                                            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeExpressConnectRouterInterRegionTransitModeResponse DescribeExpressConnectRouterInterRegionTransitModeResponse
     */
    public function describeExpressConnectRouterInterRegionTransitModeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $body['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ecrId)) {
            $body['EcrId'] = $request->ecrId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary Queries the cross-region forwarding modes of an Express Connect router (ECR).
     *  *
     * @param DescribeExpressConnectRouterInterRegionTransitModeRequest $request DescribeExpressConnectRouterInterRegionTransitModeRequest
     *
     * @return DescribeExpressConnectRouterInterRegionTransitModeResponse DescribeExpressConnectRouterInterRegionTransitModeResponse
     */
    public function describeExpressConnectRouterInterRegionTransitMode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeExpressConnectRouterInterRegionTransitModeWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of regions in which resources related to an Express Connect router (ECR) are deployed.
     *  *
     * @param DescribeExpressConnectRouterRegionRequest $request DescribeExpressConnectRouterRegionRequest
     * @param RuntimeOptions                            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeExpressConnectRouterRegionResponse DescribeExpressConnectRouterRegionResponse
     */
    public function describeExpressConnectRouterRegionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $body['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ecrId)) {
            $body['EcrId'] = $request->ecrId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary Queries a list of regions in which resources related to an Express Connect router (ECR) are deployed.
     *  *
     * @param DescribeExpressConnectRouterRegionRequest $request DescribeExpressConnectRouterRegionRequest
     *
     * @return DescribeExpressConnectRouterRegionResponse DescribeExpressConnectRouterRegionResponse
     */
    public function describeExpressConnectRouterRegion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeExpressConnectRouterRegionWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the route entries of an Express Connect router (ECR).
     *  *
     * @param DescribeExpressConnectRouterRouteEntriesRequest $request DescribeExpressConnectRouterRouteEntriesRequest
     * @param RuntimeOptions                                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeExpressConnectRouterRouteEntriesResponse DescribeExpressConnectRouterRouteEntriesResponse
     */
    public function describeExpressConnectRouterRouteEntriesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->asPath)) {
            $body['AsPath'] = $request->asPath;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->community)) {
            $body['Community'] = $request->community;
        }
        if (!Utils::isUnset($request->destinationCidrBlock)) {
            $body['DestinationCidrBlock'] = $request->destinationCidrBlock;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $body['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ecrId)) {
            $body['EcrId'] = $request->ecrId;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $body['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $body['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->nexthopInstanceId)) {
            $body['NexthopInstanceId'] = $request->nexthopInstanceId;
        }
        if (!Utils::isUnset($request->queryRegionId)) {
            $body['QueryRegionId'] = $request->queryRegionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary Queries the route entries of an Express Connect router (ECR).
     *  *
     * @param DescribeExpressConnectRouterRouteEntriesRequest $request DescribeExpressConnectRouterRouteEntriesRequest
     *
     * @return DescribeExpressConnectRouterRouteEntriesResponse DescribeExpressConnectRouterRouteEntriesResponse
     */
    public function describeExpressConnectRouterRouteEntries($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeExpressConnectRouterRouteEntriesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries flow logs.
     *  *
     * @param DescribeFlowLogsRequest $request DescribeFlowLogsRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeFlowLogsResponse DescribeFlowLogsResponse
     */
    public function describeFlowLogsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->flowLogId)) {
            $query['FlowLogId'] = $request->flowLogId;
        }
        if (!Utils::isUnset($request->flowLogName)) {
            $query['FlowLogName'] = $request->flowLogName;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->logStoreName)) {
            $query['LogStoreName'] = $request->logStoreName;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->projectName)) {
            $query['ProjectName'] = $request->projectName;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $body['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ecrId)) {
            $body['EcrId'] = $request->ecrId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary Queries flow logs.
     *  *
     * @param DescribeFlowLogsRequest $request DescribeFlowLogsRequest
     *
     * @return DescribeFlowLogsResponse DescribeFlowLogsResponse
     */
    public function describeFlowLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFlowLogsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the network instances whose permissions are granted to an Express Connect router (ECR).
     *  *
     * @param DescribeInstanceGrantedToExpressConnectRouterRequest $request DescribeInstanceGrantedToExpressConnectRouterRequest
     * @param RuntimeOptions                                       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeInstanceGrantedToExpressConnectRouterResponse DescribeInstanceGrantedToExpressConnectRouterResponse
     */
    public function describeInstanceGrantedToExpressConnectRouterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->callerType)) {
            $body['CallerType'] = $request->callerType;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $body['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ecrId)) {
            $body['EcrId'] = $request->ecrId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->instanceOwnerId)) {
            $body['InstanceOwnerId'] = $request->instanceOwnerId;
        }
        if (!Utils::isUnset($request->instanceRegionId)) {
            $body['InstanceRegionId'] = $request->instanceRegionId;
        }
        if (!Utils::isUnset($request->instanceType)) {
            $body['InstanceType'] = $request->instanceType;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $body['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $body['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $body['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->tagModels)) {
            $body['TagModels'] = $request->tagModels;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary Queries the network instances whose permissions are granted to an Express Connect router (ECR).
     *  *
     * @param DescribeInstanceGrantedToExpressConnectRouterRequest $request DescribeInstanceGrantedToExpressConnectRouterRequest
     *
     * @return DescribeInstanceGrantedToExpressConnectRouterResponse DescribeInstanceGrantedToExpressConnectRouterResponse
     */
    public function describeInstanceGrantedToExpressConnectRouter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceGrantedToExpressConnectRouterWithOptions($request, $runtime);
    }

    /**
     * @summary Disassociates a virtual border router (VBR) from an Express Connect router (ECR).
     *  *
     * @description Before you call the **DetachExpressConnectRouterChildInstance** operation to uninstall a VBR from an ECR, make sure that the ECR is in the **Active** state.
     *  *
     * @param DetachExpressConnectRouterChildInstanceRequest $request DetachExpressConnectRouterChildInstanceRequest
     * @param RuntimeOptions                                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DetachExpressConnectRouterChildInstanceResponse DetachExpressConnectRouterChildInstanceResponse
     */
    public function detachExpressConnectRouterChildInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->childInstanceId)) {
            $body['ChildInstanceId'] = $request->childInstanceId;
        }
        if (!Utils::isUnset($request->childInstanceType)) {
            $body['ChildInstanceType'] = $request->childInstanceType;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $body['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ecrId)) {
            $body['EcrId'] = $request->ecrId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary Disassociates a virtual border router (VBR) from an Express Connect router (ECR).
     *  *
     * @description Before you call the **DetachExpressConnectRouterChildInstance** operation to uninstall a VBR from an ECR, make sure that the ECR is in the **Active** state.
     *  *
     * @param DetachExpressConnectRouterChildInstanceRequest $request DetachExpressConnectRouterChildInstanceRequest
     *
     * @return DetachExpressConnectRouterChildInstanceResponse DetachExpressConnectRouterChildInstanceResponse
     */
    public function detachExpressConnectRouterChildInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detachExpressConnectRouterChildInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary Disables route entries of an Express Connect router (ECR).
     *  *
     * @param DisableExpressConnectRouterRouteEntriesRequest $request DisableExpressConnectRouterRouteEntriesRequest
     * @param RuntimeOptions                                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DisableExpressConnectRouterRouteEntriesResponse DisableExpressConnectRouterRouteEntriesResponse
     */
    public function disableExpressConnectRouterRouteEntriesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->destinationCidrBlock)) {
            $body['DestinationCidrBlock'] = $request->destinationCidrBlock;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $body['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ecrId)) {
            $body['EcrId'] = $request->ecrId;
        }
        if (!Utils::isUnset($request->nexthopInstanceId)) {
            $body['NexthopInstanceId'] = $request->nexthopInstanceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary Disables route entries of an Express Connect router (ECR).
     *  *
     * @param DisableExpressConnectRouterRouteEntriesRequest $request DisableExpressConnectRouterRouteEntriesRequest
     *
     * @return DisableExpressConnectRouterRouteEntriesResponse DisableExpressConnectRouterRouteEntriesResponse
     */
    public function disableExpressConnectRouterRouteEntries($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableExpressConnectRouterRouteEntriesWithOptions($request, $runtime);
    }

    /**
     * @summary Enables route entries of an Express Connect router (ECR).
     *  *
     * @param EnableExpressConnectRouterRouteEntriesRequest $request EnableExpressConnectRouterRouteEntriesRequest
     * @param RuntimeOptions                                $runtime runtime options for this request RuntimeOptions
     *
     * @return EnableExpressConnectRouterRouteEntriesResponse EnableExpressConnectRouterRouteEntriesResponse
     */
    public function enableExpressConnectRouterRouteEntriesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->destinationCidrBlock)) {
            $body['DestinationCidrBlock'] = $request->destinationCidrBlock;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $body['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ecrId)) {
            $body['EcrId'] = $request->ecrId;
        }
        if (!Utils::isUnset($request->nexthopInstanceId)) {
            $body['NexthopInstanceId'] = $request->nexthopInstanceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary Enables route entries of an Express Connect router (ECR).
     *  *
     * @param EnableExpressConnectRouterRouteEntriesRequest $request EnableExpressConnectRouterRouteEntriesRequest
     *
     * @return EnableExpressConnectRouterRouteEntriesResponse EnableExpressConnectRouterRouteEntriesResponse
     */
    public function enableExpressConnectRouterRouteEntries($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableExpressConnectRouterRouteEntriesWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes an Express Connect router (ECR) and disassociates the virtual private cloud (VPC), transit router (TR), and virtual border router (VBR) associated with the ECR.
     *  *
     * @description *   If you forcefully delete an ECR, all the resources associated with the ECR are disassociated at a time. Make sure that the disassociation does not affect the stability of your business.
     * *   You can delete only ECRs that are in the **Active** state.
     *  *
     * @param ForceDeleteExpressConnectRouterRequest $request ForceDeleteExpressConnectRouterRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return ForceDeleteExpressConnectRouterResponse ForceDeleteExpressConnectRouterResponse
     */
    public function forceDeleteExpressConnectRouterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $body['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ecrId)) {
            $body['EcrId'] = $request->ecrId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary Deletes an Express Connect router (ECR) and disassociates the virtual private cloud (VPC), transit router (TR), and virtual border router (VBR) associated with the ECR.
     *  *
     * @description *   If you forcefully delete an ECR, all the resources associated with the ECR are disassociated at a time. Make sure that the disassociation does not affect the stability of your business.
     * *   You can delete only ECRs that are in the **Active** state.
     *  *
     * @param ForceDeleteExpressConnectRouterRequest $request ForceDeleteExpressConnectRouterRequest
     *
     * @return ForceDeleteExpressConnectRouterResponse ForceDeleteExpressConnectRouterResponse
     */
    public function forceDeleteExpressConnectRouter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->forceDeleteExpressConnectRouterWithOptions($request, $runtime);
    }

    /**
     * @summary Grants permissions on a virtual private cloud (VPC) or a virtual border router (VBR) to an Express Connect router (ECR) of another account.
     *  *
     * @description When you associate a network instance of another account with an ECR, you must grant permissions on the network instance to the ECR.
     *  *
     * @param GrantInstanceToExpressConnectRouterRequest $request GrantInstanceToExpressConnectRouterRequest
     * @param RuntimeOptions                             $runtime runtime options for this request RuntimeOptions
     *
     * @return GrantInstanceToExpressConnectRouterResponse GrantInstanceToExpressConnectRouterResponse
     */
    public function grantInstanceToExpressConnectRouterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $body['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ecrId)) {
            $body['EcrId'] = $request->ecrId;
        }
        if (!Utils::isUnset($request->ecrOwnerAliUid)) {
            $body['EcrOwnerAliUid'] = $request->ecrOwnerAliUid;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->instanceRegionId)) {
            $body['InstanceRegionId'] = $request->instanceRegionId;
        }
        if (!Utils::isUnset($request->instanceType)) {
            $body['InstanceType'] = $request->instanceType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary Grants permissions on a virtual private cloud (VPC) or a virtual border router (VBR) to an Express Connect router (ECR) of another account.
     *  *
     * @description When you associate a network instance of another account with an ECR, you must grant permissions on the network instance to the ECR.
     *  *
     * @param GrantInstanceToExpressConnectRouterRequest $request GrantInstanceToExpressConnectRouterRequest
     *
     * @return GrantInstanceToExpressConnectRouterResponse GrantInstanceToExpressConnectRouterResponse
     */
    public function grantInstanceToExpressConnectRouter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->grantInstanceToExpressConnectRouterWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of regions in which the Express Connect router (ECR) feature is activated.
     *  *
     * @param ListExpressConnectRouterSupportedRegionRequest $request ListExpressConnectRouterSupportedRegionRequest
     * @param RuntimeOptions                                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ListExpressConnectRouterSupportedRegionResponse ListExpressConnectRouterSupportedRegionResponse
     */
    public function listExpressConnectRouterSupportedRegionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->nodeType)) {
            $body['NodeType'] = $request->nodeType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary Queries a list of regions in which the Express Connect router (ECR) feature is activated.
     *  *
     * @param ListExpressConnectRouterSupportedRegionRequest $request ListExpressConnectRouterSupportedRegionRequest
     *
     * @return ListExpressConnectRouterSupportedRegionResponse ListExpressConnectRouterSupportedRegionResponse
     */
    public function listExpressConnectRouterSupportedRegion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listExpressConnectRouterSupportedRegionWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of tags that are added to an Express Connect router (ECR).
     *  *
     * @param ListTagResourcesRequest $request ListTagResourcesRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTagResourcesResponse ListTagResourcesResponse
     */
    public function listTagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->maxResults)) {
            $body['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $body['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $body['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $body['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tag)) {
            $body['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary Queries a list of tags that are added to an Express Connect router (ECR).
     *  *
     * @param ListTagResourcesRequest $request ListTagResourcesRequest
     *
     * @return ListTagResourcesResponse ListTagResourcesResponse
     */
    public function listTagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTagResourcesWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the properties such as the name of an Express Connect router (ECR).
     *  *
     * @description You can modify only properties of ECRs in the **Active** state.
     *  *
     * @param ModifyExpressConnectRouterRequest $request ModifyExpressConnectRouterRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyExpressConnectRouterResponse ModifyExpressConnectRouterResponse
     */
    public function modifyExpressConnectRouterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $body['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ecrId)) {
            $body['EcrId'] = $request->ecrId;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary Modifies the properties such as the name of an Express Connect router (ECR).
     *  *
     * @description You can modify only properties of ECRs in the **Active** state.
     *  *
     * @param ModifyExpressConnectRouterRequest $request ModifyExpressConnectRouterRequest
     *
     * @return ModifyExpressConnectRouterResponse ModifyExpressConnectRouterResponse
     */
    public function modifyExpressConnectRouter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyExpressConnectRouterWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the route prefixes of a virtual private cloud (VPC) or a transit router (TR) that is associated with an Express Connect router (ECR).
     *  *
     * @param ModifyExpressConnectRouterAssociationAllowedPrefixRequest $request ModifyExpressConnectRouterAssociationAllowedPrefixRequest
     * @param RuntimeOptions                                            $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyExpressConnectRouterAssociationAllowedPrefixResponse ModifyExpressConnectRouterAssociationAllowedPrefixResponse
     */
    public function modifyExpressConnectRouterAssociationAllowedPrefixWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->allowedPrefixes)) {
            $body['AllowedPrefixes'] = $request->allowedPrefixes;
        }
        if (!Utils::isUnset($request->allowedPrefixesMode)) {
            $body['AllowedPrefixesMode'] = $request->allowedPrefixesMode;
        }
        if (!Utils::isUnset($request->associationId)) {
            $body['AssociationId'] = $request->associationId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $body['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ecrId)) {
            $body['EcrId'] = $request->ecrId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $body['OwnerAccount'] = $request->ownerAccount;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary Modifies the route prefixes of a virtual private cloud (VPC) or a transit router (TR) that is associated with an Express Connect router (ECR).
     *  *
     * @param ModifyExpressConnectRouterAssociationAllowedPrefixRequest $request ModifyExpressConnectRouterAssociationAllowedPrefixRequest
     *
     * @return ModifyExpressConnectRouterAssociationAllowedPrefixResponse ModifyExpressConnectRouterAssociationAllowedPrefixResponse
     */
    public function modifyExpressConnectRouterAssociationAllowedPrefix($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyExpressConnectRouterAssociationAllowedPrefixWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the cross-region forwarding mode of an Express Connect router (ECR).
     *  *
     * @param ModifyExpressConnectRouterInterRegionTransitModeRequest $request ModifyExpressConnectRouterInterRegionTransitModeRequest
     * @param RuntimeOptions                                          $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyExpressConnectRouterInterRegionTransitModeResponse ModifyExpressConnectRouterInterRegionTransitModeResponse
     */
    public function modifyExpressConnectRouterInterRegionTransitModeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $body['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ecrId)) {
            $body['EcrId'] = $request->ecrId;
        }
        if (!Utils::isUnset($request->transitModeList)) {
            $body['TransitModeList'] = $request->transitModeList;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary Modifies the cross-region forwarding mode of an Express Connect router (ECR).
     *  *
     * @param ModifyExpressConnectRouterInterRegionTransitModeRequest $request ModifyExpressConnectRouterInterRegionTransitModeRequest
     *
     * @return ModifyExpressConnectRouterInterRegionTransitModeResponse ModifyExpressConnectRouterInterRegionTransitModeResponse
     */
    public function modifyExpressConnectRouterInterRegionTransitMode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyExpressConnectRouterInterRegionTransitModeWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the name, description, sampling rate, and sampling interval.
     *  *
     * @param ModifyFlowLogAttributeRequest $request ModifyFlowLogAttributeRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyFlowLogAttributeResponse ModifyFlowLogAttributeResponse
     */
    public function modifyFlowLogAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->flowLogId)) {
            $query['FlowLogId'] = $request->flowLogId;
        }
        if (!Utils::isUnset($request->interval)) {
            $query['Interval'] = $request->interval;
        }
        if (!Utils::isUnset($request->samplingRate)) {
            $query['SamplingRate'] = $request->samplingRate;
        }
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $body['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ecrId)) {
            $body['EcrId'] = $request->ecrId;
        }
        if (!Utils::isUnset($request->flowLogName)) {
            $body['FlowLogName'] = $request->flowLogName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary Modifies the name, description, sampling rate, and sampling interval.
     *  *
     * @param ModifyFlowLogAttributeRequest $request ModifyFlowLogAttributeRequest
     *
     * @return ModifyFlowLogAttributeResponse ModifyFlowLogAttributeResponse
     */
    public function modifyFlowLogAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyFlowLogAttributeWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the resource group to which an Express Connect router (ECR) belongs.
     *  *
     * @param MoveResourceGroupRequest $request MoveResourceGroupRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return MoveResourceGroupResponse MoveResourceGroupResponse
     */
    public function moveResourceGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $body['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->newResourceGroupId)) {
            $body['NewResourceGroupId'] = $request->newResourceGroupId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $body['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $body['ResourceType'] = $request->resourceType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary Modifies the resource group to which an Express Connect router (ECR) belongs.
     *  *
     * @param MoveResourceGroupRequest $request MoveResourceGroupRequest
     *
     * @return MoveResourceGroupResponse MoveResourceGroupResponse
     */
    public function moveResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->moveResourceGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Revokes permissions on a virtual private cloud (VPC) or a virtual border router (VBR) from an Express Connect router (ECR) owned by another account.
     *  *
     * @param RevokeInstanceFromExpressConnectRouterRequest $request RevokeInstanceFromExpressConnectRouterRequest
     * @param RuntimeOptions                                $runtime runtime options for this request RuntimeOptions
     *
     * @return RevokeInstanceFromExpressConnectRouterResponse RevokeInstanceFromExpressConnectRouterResponse
     */
    public function revokeInstanceFromExpressConnectRouterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $body['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ecrId)) {
            $body['EcrId'] = $request->ecrId;
        }
        if (!Utils::isUnset($request->ecrOwnerAliUid)) {
            $body['EcrOwnerAliUid'] = $request->ecrOwnerAliUid;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->instanceRegionId)) {
            $body['InstanceRegionId'] = $request->instanceRegionId;
        }
        if (!Utils::isUnset($request->instanceType)) {
            $body['InstanceType'] = $request->instanceType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary Revokes permissions on a virtual private cloud (VPC) or a virtual border router (VBR) from an Express Connect router (ECR) owned by another account.
     *  *
     * @param RevokeInstanceFromExpressConnectRouterRequest $request RevokeInstanceFromExpressConnectRouterRequest
     *
     * @return RevokeInstanceFromExpressConnectRouterResponse RevokeInstanceFromExpressConnectRouterResponse
     */
    public function revokeInstanceFromExpressConnectRouter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->revokeInstanceFromExpressConnectRouterWithOptions($request, $runtime);
    }

    /**
     * @summary Synchronizes the forwarding bandwidth limit between regions for an Express Connect router (ECR).
     *  *
     * @description Updates are allowed only when the ECR is in the **Active** state.
     *  *
     * @param SynchronizeExpressConnectRouterInterRegionBandwidthRequest $request SynchronizeExpressConnectRouterInterRegionBandwidthRequest
     * @param RuntimeOptions                                             $runtime runtime options for this request RuntimeOptions
     *
     * @return SynchronizeExpressConnectRouterInterRegionBandwidthResponse SynchronizeExpressConnectRouterInterRegionBandwidthResponse
     */
    public function synchronizeExpressConnectRouterInterRegionBandwidthWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $body['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ecrId)) {
            $body['EcrId'] = $request->ecrId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary Synchronizes the forwarding bandwidth limit between regions for an Express Connect router (ECR).
     *  *
     * @description Updates are allowed only when the ECR is in the **Active** state.
     *  *
     * @param SynchronizeExpressConnectRouterInterRegionBandwidthRequest $request SynchronizeExpressConnectRouterInterRegionBandwidthRequest
     *
     * @return SynchronizeExpressConnectRouterInterRegionBandwidthResponse SynchronizeExpressConnectRouterInterRegionBandwidthResponse
     */
    public function synchronizeExpressConnectRouterInterRegionBandwidth($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->synchronizeExpressConnectRouterInterRegionBandwidthWithOptions($request, $runtime);
    }

    /**
     * @summary Adds tags to an Express Connect router (ECR). You can add tags to only one ECR each time you call this operation. You can add multiple tags at a time.
     *  *
     * @param TagResourcesRequest $request TagResourcesRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return TagResourcesResponse TagResourcesResponse
     */
    public function tagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $body['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $body['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $body['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tag)) {
            $body['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary Adds tags to an Express Connect router (ECR). You can add tags to only one ECR each time you call this operation. You can add multiple tags at a time.
     *  *
     * @param TagResourcesRequest $request TagResourcesRequest
     *
     * @return TagResourcesResponse TagResourcesResponse
     */
    public function tagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->tagResourcesWithOptions($request, $runtime);
    }

    /**
     * @summary Removes tags from an Express Connect router (ECR).
     *  *
     * @param UntagResourcesRequest $request UntagResourcesRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return UntagResourcesResponse UntagResourcesResponse
     */
    public function untagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->all)) {
            $body['All'] = $request->all;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $body['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $body['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $body['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tagKey)) {
            $body['TagKey'] = $request->tagKey;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary Removes tags from an Express Connect router (ECR).
     *  *
     * @param UntagResourcesRequest $request UntagResourcesRequest
     *
     * @return UntagResourcesResponse UntagResourcesResponse
     */
    public function untagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->untagResourcesWithOptions($request, $runtime);
    }
}
