<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EcdBiz\V20240929;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\EcdBiz\V20240929\Models\ActiveRightsRequest;
use AlibabaCloud\SDK\EcdBiz\V20240929\Models\ActiveRightsResponse;
use AlibabaCloud\SDK\EcdBiz\V20240929\Models\ListRightsRequest;
use AlibabaCloud\SDK\EcdBiz\V20240929\Models\ListRightsResponse;
use Darabonba\GatewayPop\Client;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class EcdBiz extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_productId = 'EcdBiz';
        $gatewayClient = new Client();
        $this->_spi = $gatewayClient;
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('ecdbiz', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * Activates the commercial edition rights under the current account. First, query the rights by calling ListRights, and then select the target region, office network, image, and user. A Success response indicates that the request is processed. To check the resource creation result, query the RightsActiveStatus, RightsActiveFailureCause, and RightsResourceId parameters returned by ListRights.
     *
     * @remarks
     * Activates the commercial edition rights under the current account. First, query the rights by calling ListRights, and then select the target region, office network, image, and user. A Success response indicates that the request is processed. To check the resource creation result, query the RightsActiveStatus, RightsActiveFailureCause, and RightsResourceId parameters returned by ListRights.
     *
     * @param request - ActiveRightsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ActiveRightsResponse
     *
     * @param ActiveRightsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ActiveRightsResponse
     */
    public function activeRightsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dataDiskSize) {
            @$query['DataDiskSize'] = $request->dataDiskSize;
        }

        if (null !== $request->desktopType) {
            @$query['DesktopType'] = $request->desktopType;
        }

        if (null !== $request->language) {
            @$query['Language'] = $request->language;
        }

        if (null !== $request->policyGroupId) {
            @$query['PolicyGroupId'] = $request->policyGroupId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->rootDiskSize) {
            @$query['RootDiskSize'] = $request->rootDiskSize;
        }

        if (null !== $request->workspaceIds) {
            @$query['WorkspaceIds'] = $request->workspaceIds;
        }

        if (null !== $request->wyidList) {
            @$query['WyidList'] = $request->wyidList;
        }

        $body = [];
        if (null !== $request->clientIp) {
            @$body['ClientIp'] = $request->clientIp;
        }

        if (null !== $request->customImageId) {
            @$body['CustomImageId'] = $request->customImageId;
        }

        if (null !== $request->endTime) {
            @$body['EndTime'] = $request->endTime;
        }

        if (null !== $request->hibernate) {
            @$body['Hibernate'] = $request->hibernate;
        }

        if (null !== $request->officeSiteId) {
            @$body['OfficeSiteId'] = $request->officeSiteId;
        }

        $bodyFlat = [];
        if (null !== $request->rightsAssignedUser) {
            @$bodyFlat['RightsAssignedUser'] = $request->rightsAssignedUser;
        }

        if (null !== $request->rightsGpuSpec) {
            @$body['RightsGpuSpec'] = $request->rightsGpuSpec;
        }

        if (null !== $request->rightsIds) {
            @$bodyFlat['RightsIds'] = $request->rightsIds;
        }

        if (null !== $request->rightsResourceArea) {
            @$body['RightsResourceArea'] = $request->rightsResourceArea;
        }

        if (null !== $request->rightsResourceImageOs) {
            @$body['RightsResourceImageOs'] = $request->rightsResourceImageOs;
        }

        if (null !== $request->rightsResourceRegion) {
            @$body['RightsResourceRegion'] = $request->rightsResourceRegion;
        }

        if (null !== $request->rightsResourceType) {
            @$body['RightsResourceType'] = $request->rightsResourceType;
        }

        if (null !== $request->rightsSpec) {
            @$body['RightsSpec'] = $request->rightsSpec;
        }

        if (null !== $request->startTime) {
            @$body['StartTime'] = $request->startTime;
        }

        if (null !== $request->vSwitchId) {
            @$body['VSwitchId'] = $request->vSwitchId;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ActiveRights',
            'version' => '2024-09-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ActiveRightsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Activates the commercial edition rights under the current account. First, query the rights by calling ListRights, and then select the target region, office network, image, and user. A Success response indicates that the request is processed. To check the resource creation result, query the RightsActiveStatus, RightsActiveFailureCause, and RightsResourceId parameters returned by ListRights.
     *
     * @remarks
     * Activates the commercial edition rights under the current account. First, query the rights by calling ListRights, and then select the target region, office network, image, and user. A Success response indicates that the request is processed. To check the resource creation result, query the RightsActiveStatus, RightsActiveFailureCause, and RightsResourceId parameters returned by ListRights.
     *
     * @param request - ActiveRightsRequest
     *
     * @returns ActiveRightsResponse
     *
     * @param ActiveRightsRequest $request
     *
     * @return ActiveRightsResponse
     */
    public function activeRights($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->activeRightsWithOptions($request, $runtime);
    }

    /**
     * Queries the commercial edition rights accessible to the current caller identity by using paging. Use this operation to select rights before activation. After you call ActiveRights, you can query the processing results by using RightsActiveStatus, RightsActiveFailureCause, and RightsResourceId.
     *
     * @remarks
     * Queries the commercial edition rights accessible to the current caller identity by using paging. Use this operation to select rights before activation. After you call ActiveRights, you can query the processing results by using RightsActiveStatus, RightsActiveFailureCause, and RightsResourceId.
     *
     * @param request - ListRightsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListRightsResponse
     *
     * @param ListRightsRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ListRightsResponse
     */
    public function listRightsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->businessSceneCode) {
            @$query['BusinessSceneCode'] = $request->businessSceneCode;
        }

        if (null !== $request->rightsIds) {
            @$query['RightsIds'] = $request->rightsIds;
        }

        $body = [];
        if (null !== $request->aiDesktop) {
            @$body['AiDesktop'] = $request->aiDesktop;
        }

        if (null !== $request->maxResults) {
            @$body['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        if (null !== $request->orderField) {
            @$body['OrderField'] = $request->orderField;
        }

        if (null !== $request->orderType) {
            @$body['OrderType'] = $request->orderType;
        }

        if (null !== $request->overseas) {
            @$body['Overseas'] = $request->overseas;
        }

        if (null !== $request->rightsActiveStatus) {
            @$body['RightsActiveStatus'] = $request->rightsActiveStatus;
        }

        if (null !== $request->rightsAssignedUser) {
            @$body['RightsAssignedUser'] = $request->rightsAssignedUser;
        }

        if (null !== $request->rightsPeriod) {
            @$body['RightsPeriod'] = $request->rightsPeriod;
        }

        if (null !== $request->rightsResourceId) {
            @$body['RightsResourceId'] = $request->rightsResourceId;
        }

        if (null !== $request->rightsResourceType) {
            @$body['RightsResourceType'] = $request->rightsResourceType;
        }

        $bodyFlat = [];
        if (null !== $request->rightsResourceTypes) {
            @$bodyFlat['RightsResourceTypes'] = $request->rightsResourceTypes;
        }

        if (null !== $request->rightsSpec) {
            @$body['RightsSpec'] = $request->rightsSpec;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListRights',
            'version' => '2024-09-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListRightsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the commercial edition rights accessible to the current caller identity by using paging. Use this operation to select rights before activation. After you call ActiveRights, you can query the processing results by using RightsActiveStatus, RightsActiveFailureCause, and RightsResourceId.
     *
     * @remarks
     * Queries the commercial edition rights accessible to the current caller identity by using paging. Use this operation to select rights before activation. After you call ActiveRights, you can query the processing results by using RightsActiveStatus, RightsActiveFailureCause, and RightsResourceId.
     *
     * @param request - ListRightsRequest
     *
     * @returns ListRightsResponse
     *
     * @param ListRightsRequest $request
     *
     * @return ListRightsResponse
     */
    public function listRights($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRightsWithOptions($request, $runtime);
    }
}
