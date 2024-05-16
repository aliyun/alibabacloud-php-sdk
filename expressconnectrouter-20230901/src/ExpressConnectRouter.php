<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ExpressConnectRouter\V20230901;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\AttachExpressConnectRouterChildInstanceRequest;
use AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\AttachExpressConnectRouterChildInstanceResponse;
use AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\CheckAddRegionToExpressConnectRouterRequest;
use AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\CheckAddRegionToExpressConnectRouterResponse;
use AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\CreateExpressConnectRouterAssociationRequest;
use AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\CreateExpressConnectRouterAssociationResponse;
use AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\CreateExpressConnectRouterRequest;
use AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\CreateExpressConnectRouterResponse;
use AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\DeleteExpressConnectRouterAssociationRequest;
use AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\DeleteExpressConnectRouterAssociationResponse;
use AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\DeleteExpressConnectRouterRequest;
use AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\DeleteExpressConnectRouterResponse;
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
use AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\ModifyExpressConnectRouterAssociationAllowedPrefixRequest;
use AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\ModifyExpressConnectRouterAssociationAllowedPrefixResponse;
use AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\ModifyExpressConnectRouterInterRegionTransitModeRequest;
use AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\ModifyExpressConnectRouterInterRegionTransitModeResponse;
use AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\ModifyExpressConnectRouterRequest;
use AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\ModifyExpressConnectRouterResponse;
use AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\RevokeInstanceFromExpressConnectRouterRequest;
use AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\RevokeInstanceFromExpressConnectRouterResponse;
use AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\SynchronizeExpressConnectRouterInterRegionBandwidthRequest;
use AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\SynchronizeExpressConnectRouterInterRegionBandwidthResponse;
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
            'action'      => 'AttachExpressConnectRouterChildInstance',
            'version'     => '2023-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AttachExpressConnectRouterChildInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
            'action'      => 'CheckAddRegionToExpressConnectRouter',
            'version'     => '2023-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CheckAddRegionToExpressConnectRouterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
        if (!Utils::isUnset($request->tags)) {
            $body['Tags'] = $request->tags;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateExpressConnectRouter',
            'version'     => '2023-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateExpressConnectRouterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
            'action'      => 'CreateExpressConnectRouterAssociation',
            'version'     => '2023-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateExpressConnectRouterAssociationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
            'action'      => 'DeleteExpressConnectRouter',
            'version'     => '2023-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteExpressConnectRouterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
            'action'      => 'DeleteExpressConnectRouterAssociation',
            'version'     => '2023-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteExpressConnectRouterAssociationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
            'action'      => 'DescribeDisabledExpressConnectRouterRouteEntries',
            'version'     => '2023-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDisabledExpressConnectRouterRouteEntriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
        if (!Utils::isUnset($request->tagModels)) {
            $body['TagModels'] = $request->tagModels;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeExpressConnectRouter',
            'version'     => '2023-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeExpressConnectRouterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
            'action'      => 'DescribeExpressConnectRouterAllowedPrefixHistory',
            'version'     => '2023-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeExpressConnectRouterAllowedPrefixHistoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
            'action'      => 'DescribeExpressConnectRouterAssociation',
            'version'     => '2023-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeExpressConnectRouterAssociationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
            'action'      => 'DescribeExpressConnectRouterChildInstance',
            'version'     => '2023-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeExpressConnectRouterChildInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
            'action'      => 'DescribeExpressConnectRouterInterRegionTransitMode',
            'version'     => '2023-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeExpressConnectRouterInterRegionTransitModeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
            'action'      => 'DescribeExpressConnectRouterRegion',
            'version'     => '2023-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeExpressConnectRouterRegionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
            'action'      => 'DescribeExpressConnectRouterRouteEntries',
            'version'     => '2023-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeExpressConnectRouterRouteEntriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeInstanceGrantedToExpressConnectRouterRequest $request DescribeInstanceGrantedToExpressConnectRouterRequest
     * @param RuntimeOptions                                       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeInstanceGrantedToExpressConnectRouterResponse DescribeInstanceGrantedToExpressConnectRouterResponse
     */
    public function describeInstanceGrantedToExpressConnectRouterWithOptions($request, $runtime)
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
            'action'      => 'DescribeInstanceGrantedToExpressConnectRouter',
            'version'     => '2023-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInstanceGrantedToExpressConnectRouterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
            'action'      => 'DetachExpressConnectRouterChildInstance',
            'version'     => '2023-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DetachExpressConnectRouterChildInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
            'action'      => 'DisableExpressConnectRouterRouteEntries',
            'version'     => '2023-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DisableExpressConnectRouterRouteEntriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
            'action'      => 'EnableExpressConnectRouterRouteEntries',
            'version'     => '2023-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EnableExpressConnectRouterRouteEntriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
            'action'      => 'ForceDeleteExpressConnectRouter',
            'version'     => '2023-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ForceDeleteExpressConnectRouterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
            'action'      => 'GrantInstanceToExpressConnectRouter',
            'version'     => '2023-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GrantInstanceToExpressConnectRouterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
            'action'      => 'ListExpressConnectRouterSupportedRegion',
            'version'     => '2023-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListExpressConnectRouterSupportedRegionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
            'action'      => 'ModifyExpressConnectRouter',
            'version'     => '2023-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyExpressConnectRouterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
            'action'      => 'ModifyExpressConnectRouterAssociationAllowedPrefix',
            'version'     => '2023-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyExpressConnectRouterAssociationAllowedPrefixResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
            'action'      => 'ModifyExpressConnectRouterInterRegionTransitMode',
            'version'     => '2023-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyExpressConnectRouterInterRegionTransitModeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
            'action'      => 'RevokeInstanceFromExpressConnectRouter',
            'version'     => '2023-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RevokeInstanceFromExpressConnectRouterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
            'action'      => 'SynchronizeExpressConnectRouterInterRegionBandwidth',
            'version'     => '2023-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SynchronizeExpressConnectRouterInterRegionBandwidthResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SynchronizeExpressConnectRouterInterRegionBandwidthRequest $request SynchronizeExpressConnectRouterInterRegionBandwidthRequest
     *
     * @return SynchronizeExpressConnectRouterInterRegionBandwidthResponse SynchronizeExpressConnectRouterInterRegionBandwidthResponse
     */
    public function synchronizeExpressConnectRouterInterRegionBandwidth($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->synchronizeExpressConnectRouterInterRegionBandwidthWithOptions($request, $runtime);
    }
}
