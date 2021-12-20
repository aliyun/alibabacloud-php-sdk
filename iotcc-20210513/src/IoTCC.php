<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IoTCC\V20210513;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\AddCidrToConnectionPoolRequest;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\AddCidrToConnectionPoolResponse;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\AddIoTCloudConnectorToGroupRequest;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\AddIoTCloudConnectorToGroupResponse;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\AssociateIpWithConnectionPoolRequest;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\AssociateIpWithConnectionPoolResponse;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\AssociateVSwitchWithIoTCloudConnectorRequest;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\AssociateVSwitchWithIoTCloudConnectorResponse;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\CreateAuthorizationRuleRequest;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\CreateAuthorizationRuleResponse;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\CreateConnectionPoolRequest;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\CreateConnectionPoolResponse;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\CreateGroupAuthorizationRuleRequest;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\CreateGroupAuthorizationRuleResponse;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\CreateIoTCloudConnectorGroupRequest;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\CreateIoTCloudConnectorGroupResponse;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\CreateIoTCloudConnectorRequest;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\CreateIoTCloudConnectorResponse;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\CreateServiceEntryRequest;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\CreateServiceEntryResponse;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\CreateServiceRequest;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\CreateServiceResponse;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\DeleteAuthorizationRuleRequest;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\DeleteAuthorizationRuleResponse;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\DeleteConnectionPoolRequest;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\DeleteConnectionPoolResponse;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\DeleteGroupAuthorizationRuleRequest;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\DeleteGroupAuthorizationRuleResponse;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\DeleteIoTCloudConnectorGroupRequest;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\DeleteIoTCloudConnectorGroupResponse;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\DeleteIoTCloudConnectorRequest;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\DeleteIoTCloudConnectorResponse;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\DeleteServiceEntryRequest;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\DeleteServiceEntryResponse;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\DeleteServiceRequest;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\DeleteServiceResponse;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\DisableIoTCloudConnectorAccessLogRequest;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\DisableIoTCloudConnectorAccessLogResponse;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\DissociateIpFromConnectionPoolRequest;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\DissociateIpFromConnectionPoolResponse;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\DissociateVSwitchFromIoTCloudConnectorRequest;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\DissociateVSwitchFromIoTCloudConnectorResponse;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\EnableIoTCloudConnectorAccessLogRequest;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\EnableIoTCloudConnectorAccessLogResponse;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\GetConnectionPoolIpOperationResultRequest;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\GetConnectionPoolIpOperationResultResponse;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\GetIoTCloudConnectorAccessLogRequest;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\GetIoTCloudConnectorAccessLogResponse;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\GetStsInfoAndOssPathRequest;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\GetStsInfoAndOssPathResponse;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\GrantVirtualBorderRouterRequest;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\GrantVirtualBorderRouterResponse;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\ListAPNsRequest;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\ListAPNsResponse;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\ListAuthorizationRulesRequest;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\ListAuthorizationRulesResponse;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\ListConnectionPoolAllIpsRequest;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\ListConnectionPoolAllIpsResponse;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\ListConnectionPoolIpsRequest;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\ListConnectionPoolIpsResponse;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\ListConnectionPoolsRequest;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\ListConnectionPoolsResponse;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\ListGroupAuthorizationRulesRequest;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\ListGroupAuthorizationRulesResponse;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\ListIoTCloudConnectorAvailableZonesRequest;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\ListIoTCloudConnectorAvailableZonesResponse;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\ListIoTCloudConnectorGroupsRequest;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\ListIoTCloudConnectorGroupsResponse;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\ListIoTCloudConnectorsRequest;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\ListIoTCloudConnectorsResponse;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\ListRegionsRequest;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\ListRegionsResponse;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\ListServiceEntriesRequest;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\ListServiceEntriesResponse;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\ListServiceRequest;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\ListServiceResponse;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\OpenIoTCloudConnectorServiceRequest;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\OpenIoTCloudConnectorServiceResponse;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\RemoveIoTCloudConnectorFromGroupRequest;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\RemoveIoTCloudConnectorFromGroupResponse;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\UpdateAuthorizationRuleAttributeRequest;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\UpdateAuthorizationRuleAttributeResponse;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\UpdateConnectionPoolAttributeRequest;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\UpdateConnectionPoolAttributeResponse;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\UpdateGroupAuthorizationRuleAttributeRequest;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\UpdateGroupAuthorizationRuleAttributeResponse;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\UpdateIoTCloudConnectorAttributeRequest;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\UpdateIoTCloudConnectorAttributeResponse;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\UpdateIoTCloudConnectorGroupAttributeRequest;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\UpdateIoTCloudConnectorGroupAttributeResponse;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\UpdateServiceAttributeRequest;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\UpdateServiceAttributeResponse;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\UpdateServiceEntryAttributeRequest;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\UpdateServiceEntryAttributeResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class IoTCC extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('iotcc', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param AddCidrToConnectionPoolRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return AddCidrToConnectionPoolResponse
     */
    public function addCidrToConnectionPoolWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                        = [];
        $query['Cidrs']               = $request->cidrs;
        $query['ClientToken']         = $request->clientToken;
        $query['ConnectionPoolId']    = $request->connectionPoolId;
        $query['DryRun']              = $request->dryRun;
        $query['IoTCloudConnectorId'] = $request->ioTCloudConnectorId;
        $query['RegionId']            = $request->regionId;
        $req                          = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddCidrToConnectionPool',
            'version'     => '2021-05-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddCidrToConnectionPoolResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddCidrToConnectionPoolRequest $request
     *
     * @return AddCidrToConnectionPoolResponse
     */
    public function addCidrToConnectionPool($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addCidrToConnectionPoolWithOptions($request, $runtime);
    }

    /**
     * @param AddIoTCloudConnectorToGroupRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return AddIoTCloudConnectorToGroupResponse
     */
    public function addIoTCloudConnectorToGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                             = [];
        $query['ClientToken']              = $request->clientToken;
        $query['DryRun']                   = $request->dryRun;
        $query['IoTCloudConnectorGroupId'] = $request->ioTCloudConnectorGroupId;
        $query['IoTCloudConnectorId']      = $request->ioTCloudConnectorId;
        $query['RegionId']                 = $request->regionId;
        $req                               = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddIoTCloudConnectorToGroup',
            'version'     => '2021-05-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddIoTCloudConnectorToGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddIoTCloudConnectorToGroupRequest $request
     *
     * @return AddIoTCloudConnectorToGroupResponse
     */
    public function addIoTCloudConnectorToGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addIoTCloudConnectorToGroupWithOptions($request, $runtime);
    }

    /**
     * @param AssociateIpWithConnectionPoolRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return AssociateIpWithConnectionPoolResponse
     */
    public function associateIpWithConnectionPoolWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                        = [];
        $query['ClientToken']         = $request->clientToken;
        $query['ConnectionPoolId']    = $request->connectionPoolId;
        $query['DryRun']              = $request->dryRun;
        $query['IoTCloudConnectorId'] = $request->ioTCloudConnectorId;
        $query['Ips']                 = $request->ips;
        $query['IpsFilePath']         = $request->ipsFilePath;
        $query['RegionId']            = $request->regionId;
        $req                          = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AssociateIpWithConnectionPool',
            'version'     => '2021-05-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AssociateIpWithConnectionPoolResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AssociateIpWithConnectionPoolRequest $request
     *
     * @return AssociateIpWithConnectionPoolResponse
     */
    public function associateIpWithConnectionPool($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->associateIpWithConnectionPoolWithOptions($request, $runtime);
    }

    /**
     * @param AssociateVSwitchWithIoTCloudConnectorRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return AssociateVSwitchWithIoTCloudConnectorResponse
     */
    public function associateVSwitchWithIoTCloudConnectorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                        = [];
        $query['ClientToken']         = $request->clientToken;
        $query['DryRun']              = $request->dryRun;
        $query['IoTCloudConnectorId'] = $request->ioTCloudConnectorId;
        $query['RegionId']            = $request->regionId;
        $query['VSwitchList']         = $request->vSwitchList;
        $query['VpcId']               = $request->vpcId;
        $req                          = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AssociateVSwitchWithIoTCloudConnector',
            'version'     => '2021-05-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AssociateVSwitchWithIoTCloudConnectorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AssociateVSwitchWithIoTCloudConnectorRequest $request
     *
     * @return AssociateVSwitchWithIoTCloudConnectorResponse
     */
    public function associateVSwitchWithIoTCloudConnector($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->associateVSwitchWithIoTCloudConnectorWithOptions($request, $runtime);
    }

    /**
     * @param CreateAuthorizationRuleRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateAuthorizationRuleResponse
     */
    public function createAuthorizationRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                                 = [];
        $query['AuthorizationRuleDescription'] = $request->authorizationRuleDescription;
        $query['AuthorizationRuleName']        = $request->authorizationRuleName;
        $query['ClientToken']                  = $request->clientToken;
        $query['Destination']                  = $request->destination;
        $query['DestinationType']              = $request->destinationType;
        $query['DryRun']                       = $request->dryRun;
        $query['IoTCloudConnectorId']          = $request->ioTCloudConnectorId;
        $query['Policy']                       = $request->policy;
        $query['RegionId']                     = $request->regionId;
        $query['SourceCidrs']                  = $request->sourceCidrs;
        $req                                   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateAuthorizationRule',
            'version'     => '2021-05-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateAuthorizationRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateAuthorizationRuleRequest $request
     *
     * @return CreateAuthorizationRuleResponse
     */
    public function createAuthorizationRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAuthorizationRuleWithOptions($request, $runtime);
    }

    /**
     * @param CreateConnectionPoolRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateConnectionPoolResponse
     */
    public function createConnectionPoolWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                              = [];
        $query['Cidrs']                     = $request->cidrs;
        $query['ClientToken']               = $request->clientToken;
        $query['ConnectionPoolDescription'] = $request->connectionPoolDescription;
        $query['ConnectionPoolName']        = $request->connectionPoolName;
        $query['Count']                     = $request->count;
        $query['DryRun']                    = $request->dryRun;
        $query['IoTCloudConnectorId']       = $request->ioTCloudConnectorId;
        $query['RegionId']                  = $request->regionId;
        $req                                = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateConnectionPool',
            'version'     => '2021-05-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateConnectionPoolResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateConnectionPoolRequest $request
     *
     * @return CreateConnectionPoolResponse
     */
    public function createConnectionPool($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createConnectionPoolWithOptions($request, $runtime);
    }

    /**
     * @param CreateGroupAuthorizationRuleRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return CreateGroupAuthorizationRuleResponse
     */
    public function createGroupAuthorizationRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                                 = [];
        $query['AuthorizationRuleDescription'] = $request->authorizationRuleDescription;
        $query['AuthorizationRuleName']        = $request->authorizationRuleName;
        $query['ClientToken']                  = $request->clientToken;
        $query['Destination']                  = $request->destination;
        $query['DestinationType']              = $request->destinationType;
        $query['DryRun']                       = $request->dryRun;
        $query['IoTCloudConnectorGroupId']     = $request->ioTCloudConnectorGroupId;
        $query['Policy']                       = $request->policy;
        $query['RegionId']                     = $request->regionId;
        $query['SourceCidrs']                  = $request->sourceCidrs;
        $req                                   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateGroupAuthorizationRule',
            'version'     => '2021-05-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateGroupAuthorizationRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateGroupAuthorizationRuleRequest $request
     *
     * @return CreateGroupAuthorizationRuleResponse
     */
    public function createGroupAuthorizationRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createGroupAuthorizationRuleWithOptions($request, $runtime);
    }

    /**
     * @param CreateIoTCloudConnectorRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateIoTCloudConnectorResponse
     */
    public function createIoTCloudConnectorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                                 = [];
        $query['APN']                          = $request->APN;
        $query['ClientToken']                  = $request->clientToken;
        $query['DryRun']                       = $request->dryRun;
        $query['ISP']                          = $request->ISP;
        $query['IoTCloudConnectorDescription'] = $request->ioTCloudConnectorDescription;
        $query['IoTCloudConnectorName']        = $request->ioTCloudConnectorName;
        $query['RegionId']                     = $request->regionId;
        $query['ResourceUid']                  = $request->resourceUid;
        $query['WildcardDomainEnabled']        = $request->wildcardDomainEnabled;
        $req                                   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateIoTCloudConnector',
            'version'     => '2021-05-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateIoTCloudConnectorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateIoTCloudConnectorRequest $request
     *
     * @return CreateIoTCloudConnectorResponse
     */
    public function createIoTCloudConnector($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createIoTCloudConnectorWithOptions($request, $runtime);
    }

    /**
     * @param CreateIoTCloudConnectorGroupRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return CreateIoTCloudConnectorGroupResponse
     */
    public function createIoTCloudConnectorGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                = [];
        $query['ClientToken'] = $request->clientToken;
        $query['Description'] = $request->description;
        $query['DryRun']      = $request->dryRun;
        $query['Name']        = $request->name;
        $query['RegionId']    = $request->regionId;
        $req                  = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateIoTCloudConnectorGroup',
            'version'     => '2021-05-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateIoTCloudConnectorGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateIoTCloudConnectorGroupRequest $request
     *
     * @return CreateIoTCloudConnectorGroupResponse
     */
    public function createIoTCloudConnectorGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createIoTCloudConnectorGroupWithOptions($request, $runtime);
    }

    /**
     * @param CreateServiceRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateServiceResponse
     */
    public function createServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                        = [];
        $query['ClientToken']         = $request->clientToken;
        $query['DryRun']              = $request->dryRun;
        $query['IoTCloudConnectorId'] = $request->ioTCloudConnectorId;
        $query['RegionId']            = $request->regionId;
        $query['ServiceDescription']  = $request->serviceDescription;
        $query['ServiceName']         = $request->serviceName;
        $req                          = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateService',
            'version'     => '2021-05-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateServiceRequest $request
     *
     * @return CreateServiceResponse
     */
    public function createService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createServiceWithOptions($request, $runtime);
    }

    /**
     * @param CreateServiceEntryRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateServiceEntryResponse
     */
    public function createServiceEntryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                            = [];
        $query['ClientToken']             = $request->clientToken;
        $query['DryRun']                  = $request->dryRun;
        $query['IoTCloudConnectorId']     = $request->ioTCloudConnectorId;
        $query['RegionId']                = $request->regionId;
        $query['ServiceEntryDescription'] = $request->serviceEntryDescription;
        $query['ServiceEntryName']        = $request->serviceEntryName;
        $query['ServiceId']               = $request->serviceId;
        $query['Target']                  = $request->target;
        $query['TargetType']              = $request->targetType;
        $req                              = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateServiceEntry',
            'version'     => '2021-05-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateServiceEntryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateServiceEntryRequest $request
     *
     * @return CreateServiceEntryResponse
     */
    public function createServiceEntry($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createServiceEntryWithOptions($request, $runtime);
    }

    /**
     * @param DeleteAuthorizationRuleRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteAuthorizationRuleResponse
     */
    public function deleteAuthorizationRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                        = [];
        $query['AuthorizationRuleId'] = $request->authorizationRuleId;
        $query['ClientToken']         = $request->clientToken;
        $query['DryRun']              = $request->dryRun;
        $query['IoTCloudConnectorId'] = $request->ioTCloudConnectorId;
        $query['RegionId']            = $request->regionId;
        $req                          = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteAuthorizationRule',
            'version'     => '2021-05-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteAuthorizationRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteAuthorizationRuleRequest $request
     *
     * @return DeleteAuthorizationRuleResponse
     */
    public function deleteAuthorizationRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAuthorizationRuleWithOptions($request, $runtime);
    }

    /**
     * @param DeleteConnectionPoolRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteConnectionPoolResponse
     */
    public function deleteConnectionPoolWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                        = [];
        $query['ClientToken']         = $request->clientToken;
        $query['ConnectionPoolId']    = $request->connectionPoolId;
        $query['DryRun']              = $request->dryRun;
        $query['IoTCloudConnectorId'] = $request->ioTCloudConnectorId;
        $query['RegionId']            = $request->regionId;
        $req                          = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteConnectionPool',
            'version'     => '2021-05-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteConnectionPoolResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteConnectionPoolRequest $request
     *
     * @return DeleteConnectionPoolResponse
     */
    public function deleteConnectionPool($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteConnectionPoolWithOptions($request, $runtime);
    }

    /**
     * @param DeleteGroupAuthorizationRuleRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DeleteGroupAuthorizationRuleResponse
     */
    public function deleteGroupAuthorizationRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                             = [];
        $query['AuthorizationRuleId']      = $request->authorizationRuleId;
        $query['ClientToken']              = $request->clientToken;
        $query['DryRun']                   = $request->dryRun;
        $query['IoTCloudConnectorGroupId'] = $request->ioTCloudConnectorGroupId;
        $query['RegionId']                 = $request->regionId;
        $req                               = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteGroupAuthorizationRule',
            'version'     => '2021-05-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteGroupAuthorizationRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteGroupAuthorizationRuleRequest $request
     *
     * @return DeleteGroupAuthorizationRuleResponse
     */
    public function deleteGroupAuthorizationRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteGroupAuthorizationRuleWithOptions($request, $runtime);
    }

    /**
     * @param DeleteIoTCloudConnectorRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteIoTCloudConnectorResponse
     */
    public function deleteIoTCloudConnectorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                        = [];
        $query['ClientToken']         = $request->clientToken;
        $query['DryRun']              = $request->dryRun;
        $query['IoTCloudConnectorId'] = $request->ioTCloudConnectorId;
        $query['RegionId']            = $request->regionId;
        $req                          = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteIoTCloudConnector',
            'version'     => '2021-05-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteIoTCloudConnectorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteIoTCloudConnectorRequest $request
     *
     * @return DeleteIoTCloudConnectorResponse
     */
    public function deleteIoTCloudConnector($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteIoTCloudConnectorWithOptions($request, $runtime);
    }

    /**
     * @param DeleteIoTCloudConnectorGroupRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DeleteIoTCloudConnectorGroupResponse
     */
    public function deleteIoTCloudConnectorGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                             = [];
        $query['ClientToken']              = $request->clientToken;
        $query['DryRun']                   = $request->dryRun;
        $query['IoTCloudConnectorGroupId'] = $request->ioTCloudConnectorGroupId;
        $query['RegionId']                 = $request->regionId;
        $req                               = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteIoTCloudConnectorGroup',
            'version'     => '2021-05-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteIoTCloudConnectorGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteIoTCloudConnectorGroupRequest $request
     *
     * @return DeleteIoTCloudConnectorGroupResponse
     */
    public function deleteIoTCloudConnectorGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteIoTCloudConnectorGroupWithOptions($request, $runtime);
    }

    /**
     * @param DeleteServiceRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteServiceResponse
     */
    public function deleteServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                        = [];
        $query['ClientToken']         = $request->clientToken;
        $query['DryRun']              = $request->dryRun;
        $query['IoTCloudConnectorId'] = $request->ioTCloudConnectorId;
        $query['RegionId']            = $request->regionId;
        $query['ServiceId']           = $request->serviceId;
        $req                          = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteService',
            'version'     => '2021-05-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteServiceRequest $request
     *
     * @return DeleteServiceResponse
     */
    public function deleteService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteServiceWithOptions($request, $runtime);
    }

    /**
     * @param DeleteServiceEntryRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteServiceEntryResponse
     */
    public function deleteServiceEntryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                        = [];
        $query['ClientToken']         = $request->clientToken;
        $query['DryRun']              = $request->dryRun;
        $query['IoTCloudConnectorId'] = $request->ioTCloudConnectorId;
        $query['RegionId']            = $request->regionId;
        $query['ServiceEntryId']      = $request->serviceEntryId;
        $query['ServiceId']           = $request->serviceId;
        $req                          = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteServiceEntry',
            'version'     => '2021-05-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteServiceEntryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteServiceEntryRequest $request
     *
     * @return DeleteServiceEntryResponse
     */
    public function deleteServiceEntry($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteServiceEntryWithOptions($request, $runtime);
    }

    /**
     * @param DisableIoTCloudConnectorAccessLogRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DisableIoTCloudConnectorAccessLogResponse
     */
    public function disableIoTCloudConnectorAccessLogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                        = [];
        $query['ClientToken']         = $request->clientToken;
        $query['DryRun']              = $request->dryRun;
        $query['IoTCloudConnectorId'] = $request->ioTCloudConnectorId;
        $query['RegionId']            = $request->regionId;
        $req                          = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DisableIoTCloudConnectorAccessLog',
            'version'     => '2021-05-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DisableIoTCloudConnectorAccessLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DisableIoTCloudConnectorAccessLogRequest $request
     *
     * @return DisableIoTCloudConnectorAccessLogResponse
     */
    public function disableIoTCloudConnectorAccessLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableIoTCloudConnectorAccessLogWithOptions($request, $runtime);
    }

    /**
     * @param DissociateIpFromConnectionPoolRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DissociateIpFromConnectionPoolResponse
     */
    public function dissociateIpFromConnectionPoolWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                        = [];
        $query['ClientToken']         = $request->clientToken;
        $query['ConnectionPoolId']    = $request->connectionPoolId;
        $query['DryRun']              = $request->dryRun;
        $query['IoTCloudConnectorId'] = $request->ioTCloudConnectorId;
        $query['Ips']                 = $request->ips;
        $query['IpsFilePath']         = $request->ipsFilePath;
        $query['RegionId']            = $request->regionId;
        $req                          = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DissociateIpFromConnectionPool',
            'version'     => '2021-05-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DissociateIpFromConnectionPoolResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DissociateIpFromConnectionPoolRequest $request
     *
     * @return DissociateIpFromConnectionPoolResponse
     */
    public function dissociateIpFromConnectionPool($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->dissociateIpFromConnectionPoolWithOptions($request, $runtime);
    }

    /**
     * @param DissociateVSwitchFromIoTCloudConnectorRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return DissociateVSwitchFromIoTCloudConnectorResponse
     */
    public function dissociateVSwitchFromIoTCloudConnectorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                        = [];
        $query['ClientToken']         = $request->clientToken;
        $query['DryRun']              = $request->dryRun;
        $query['IoTCloudConnectorId'] = $request->ioTCloudConnectorId;
        $query['RegionId']            = $request->regionId;
        $req                          = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DissociateVSwitchFromIoTCloudConnector',
            'version'     => '2021-05-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DissociateVSwitchFromIoTCloudConnectorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DissociateVSwitchFromIoTCloudConnectorRequest $request
     *
     * @return DissociateVSwitchFromIoTCloudConnectorResponse
     */
    public function dissociateVSwitchFromIoTCloudConnector($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->dissociateVSwitchFromIoTCloudConnectorWithOptions($request, $runtime);
    }

    /**
     * @param EnableIoTCloudConnectorAccessLogRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return EnableIoTCloudConnectorAccessLogResponse
     */
    public function enableIoTCloudConnectorAccessLogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['AccessLogSlsLogStore'] = $request->accessLogSlsLogStore;
        $query['AccessLogSlsProject']  = $request->accessLogSlsProject;
        $query['ClientToken']          = $request->clientToken;
        $query['DryRun']               = $request->dryRun;
        $query['IoTCloudConnectorId']  = $request->ioTCloudConnectorId;
        $query['RegionId']             = $request->regionId;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'EnableIoTCloudConnectorAccessLog',
            'version'     => '2021-05-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EnableIoTCloudConnectorAccessLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param EnableIoTCloudConnectorAccessLogRequest $request
     *
     * @return EnableIoTCloudConnectorAccessLogResponse
     */
    public function enableIoTCloudConnectorAccessLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableIoTCloudConnectorAccessLogWithOptions($request, $runtime);
    }

    /**
     * @param GetConnectionPoolIpOperationResultRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return GetConnectionPoolIpOperationResultResponse
     */
    public function getConnectionPoolIpOperationResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                        = [];
        $query['ConnectionPoolId']    = $request->connectionPoolId;
        $query['IoTCloudConnectorId'] = $request->ioTCloudConnectorId;
        $query['QueryRequestId']      = $request->queryRequestId;
        $query['RegionId']            = $request->regionId;
        $req                          = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetConnectionPoolIpOperationResult',
            'version'     => '2021-05-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetConnectionPoolIpOperationResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetConnectionPoolIpOperationResultRequest $request
     *
     * @return GetConnectionPoolIpOperationResultResponse
     */
    public function getConnectionPoolIpOperationResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getConnectionPoolIpOperationResultWithOptions($request, $runtime);
    }

    /**
     * @param GetIoTCloudConnectorAccessLogRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return GetIoTCloudConnectorAccessLogResponse
     */
    public function getIoTCloudConnectorAccessLogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                        = [];
        $query['ClientToken']         = $request->clientToken;
        $query['DryRun']              = $request->dryRun;
        $query['IoTCloudConnectorId'] = $request->ioTCloudConnectorId;
        $query['RegionId']            = $request->regionId;
        $req                          = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetIoTCloudConnectorAccessLog',
            'version'     => '2021-05-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetIoTCloudConnectorAccessLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetIoTCloudConnectorAccessLogRequest $request
     *
     * @return GetIoTCloudConnectorAccessLogResponse
     */
    public function getIoTCloudConnectorAccessLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getIoTCloudConnectorAccessLogWithOptions($request, $runtime);
    }

    /**
     * @param GetStsInfoAndOssPathRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetStsInfoAndOssPathResponse
     */
    public function getStsInfoAndOssPathWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                        = [];
        $query['ClientToken']         = $request->clientToken;
        $query['ConnectionPoolId']    = $request->connectionPoolId;
        $query['DryRun']              = $request->dryRun;
        $query['FileName']            = $request->fileName;
        $query['IoTCloudConnectorId'] = $request->ioTCloudConnectorId;
        $query['RegionId']            = $request->regionId;
        $req                          = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetStsInfoAndOssPath',
            'version'     => '2021-05-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetStsInfoAndOssPathResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetStsInfoAndOssPathRequest $request
     *
     * @return GetStsInfoAndOssPathResponse
     */
    public function getStsInfoAndOssPath($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getStsInfoAndOssPathWithOptions($request, $runtime);
    }

    /**
     * @param GrantVirtualBorderRouterRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GrantVirtualBorderRouterResponse
     */
    public function grantVirtualBorderRouterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                          = [];
        $query['RegionId']              = $request->regionId;
        $query['VirtualBorderRouterId'] = $request->virtualBorderRouterId;
        $req                            = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GrantVirtualBorderRouter',
            'version'     => '2021-05-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GrantVirtualBorderRouterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GrantVirtualBorderRouterRequest $request
     *
     * @return GrantVirtualBorderRouterResponse
     */
    public function grantVirtualBorderRouter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->grantVirtualBorderRouterWithOptions($request, $runtime);
    }

    /**
     * @param ListAPNsRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return ListAPNsResponse
     */
    public function listAPNsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query               = [];
        $query['APN']        = $request->APN;
        $query['ISP']        = $request->ISP;
        $query['MaxResults'] = $request->maxResults;
        $query['NextToken']  = $request->nextToken;
        $query['RegionId']   = $request->regionId;
        $req                 = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAPNs',
            'version'     => '2021-05-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAPNsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListAPNsRequest $request
     *
     * @return ListAPNsResponse
     */
    public function listAPNs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAPNsWithOptions($request, $runtime);
    }

    /**
     * @param ListAuthorizationRulesRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListAuthorizationRulesResponse
     */
    public function listAuthorizationRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                            = [];
        $query['AuthorizationRuleIds']    = $request->authorizationRuleIds;
        $query['AuthorizationRuleName']   = $request->authorizationRuleName;
        $query['AuthorizationRuleStatus'] = $request->authorizationRuleStatus;
        $query['Destination']             = $request->destination;
        $query['DestinationType']         = $request->destinationType;
        $query['IoTCloudConnectorId']     = $request->ioTCloudConnectorId;
        $query['MaxResults']              = $request->maxResults;
        $query['NextToken']               = $request->nextToken;
        $query['Policy']                  = $request->policy;
        $query['RegionId']                = $request->regionId;
        $req                              = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAuthorizationRules',
            'version'     => '2021-05-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAuthorizationRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListAuthorizationRulesRequest $request
     *
     * @return ListAuthorizationRulesResponse
     */
    public function listAuthorizationRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAuthorizationRulesWithOptions($request, $runtime);
    }

    /**
     * @param ListConnectionPoolAllIpsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListConnectionPoolAllIpsResponse
     */
    public function listConnectionPoolAllIpsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                        = [];
        $query['ConnectionPoolId']    = $request->connectionPoolId;
        $query['IoTCloudConnectorId'] = $request->ioTCloudConnectorId;
        $query['Ip']                  = $request->ip;
        $query['MaxResults']          = $request->maxResults;
        $query['NextToken']           = $request->nextToken;
        $query['RegionId']            = $request->regionId;
        $query['Type']                = $request->type;
        $req                          = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListConnectionPoolAllIps',
            'version'     => '2021-05-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListConnectionPoolAllIpsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListConnectionPoolAllIpsRequest $request
     *
     * @return ListConnectionPoolAllIpsResponse
     */
    public function listConnectionPoolAllIps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listConnectionPoolAllIpsWithOptions($request, $runtime);
    }

    /**
     * @param ListConnectionPoolIpsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListConnectionPoolIpsResponse
     */
    public function listConnectionPoolIpsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                        = [];
        $query['ConnectionPoolId']    = $request->connectionPoolId;
        $query['IoTCloudConnectorId'] = $request->ioTCloudConnectorId;
        $query['Ip']                  = $request->ip;
        $query['MaxResults']          = $request->maxResults;
        $query['NextToken']           = $request->nextToken;
        $query['RegionId']            = $request->regionId;
        $req                          = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListConnectionPoolIps',
            'version'     => '2021-05-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListConnectionPoolIpsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListConnectionPoolIpsRequest $request
     *
     * @return ListConnectionPoolIpsResponse
     */
    public function listConnectionPoolIps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listConnectionPoolIpsWithOptions($request, $runtime);
    }

    /**
     * @param ListConnectionPoolsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListConnectionPoolsResponse
     */
    public function listConnectionPoolsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['ConnectionPoolIds']    = $request->connectionPoolIds;
        $query['ConnectionPoolName']   = $request->connectionPoolName;
        $query['ConnectionPoolStatus'] = $request->connectionPoolStatus;
        $query['IoTCloudConnectorId']  = $request->ioTCloudConnectorId;
        $query['MaxResults']           = $request->maxResults;
        $query['NextToken']            = $request->nextToken;
        $query['RegionId']             = $request->regionId;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListConnectionPools',
            'version'     => '2021-05-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListConnectionPoolsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListConnectionPoolsRequest $request
     *
     * @return ListConnectionPoolsResponse
     */
    public function listConnectionPools($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listConnectionPoolsWithOptions($request, $runtime);
    }

    /**
     * @param ListGroupAuthorizationRulesRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ListGroupAuthorizationRulesResponse
     */
    public function listGroupAuthorizationRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                             = [];
        $query['AuthorizationRuleIds']     = $request->authorizationRuleIds;
        $query['AuthorizationRuleName']    = $request->authorizationRuleName;
        $query['AuthorizationRuleStatus']  = $request->authorizationRuleStatus;
        $query['Destination']              = $request->destination;
        $query['DestinationType']          = $request->destinationType;
        $query['IoTCloudConnectorGroupId'] = $request->ioTCloudConnectorGroupId;
        $query['MaxResults']               = $request->maxResults;
        $query['NextToken']                = $request->nextToken;
        $query['Policy']                   = $request->policy;
        $query['RegionId']                 = $request->regionId;
        $req                               = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListGroupAuthorizationRules',
            'version'     => '2021-05-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListGroupAuthorizationRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListGroupAuthorizationRulesRequest $request
     *
     * @return ListGroupAuthorizationRulesResponse
     */
    public function listGroupAuthorizationRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listGroupAuthorizationRulesWithOptions($request, $runtime);
    }

    /**
     * @param ListIoTCloudConnectorAvailableZonesRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return ListIoTCloudConnectorAvailableZonesResponse
     */
    public function listIoTCloudConnectorAvailableZonesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                        = [];
        $query['IoTCloudConnectorId'] = $request->ioTCloudConnectorId;
        $query['RegionId']            = $request->regionId;
        $req                          = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListIoTCloudConnectorAvailableZones',
            'version'     => '2021-05-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListIoTCloudConnectorAvailableZonesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListIoTCloudConnectorAvailableZonesRequest $request
     *
     * @return ListIoTCloudConnectorAvailableZonesResponse
     */
    public function listIoTCloudConnectorAvailableZones($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listIoTCloudConnectorAvailableZonesWithOptions($request, $runtime);
    }

    /**
     * @param ListIoTCloudConnectorGroupsRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ListIoTCloudConnectorGroupsResponse
     */
    public function listIoTCloudConnectorGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                                 = [];
        $query['IoTCloudConnectorGroupIds']    = $request->ioTCloudConnectorGroupIds;
        $query['IoTCloudConnectorGroupName']   = $request->ioTCloudConnectorGroupName;
        $query['IoTCloudConnectorGroupStatus'] = $request->ioTCloudConnectorGroupStatus;
        $query['MaxResults']                   = $request->maxResults;
        $query['NextToken']                    = $request->nextToken;
        $query['RegionId']                     = $request->regionId;
        $req                                   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListIoTCloudConnectorGroups',
            'version'     => '2021-05-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListIoTCloudConnectorGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListIoTCloudConnectorGroupsRequest $request
     *
     * @return ListIoTCloudConnectorGroupsResponse
     */
    public function listIoTCloudConnectorGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listIoTCloudConnectorGroupsWithOptions($request, $runtime);
    }

    /**
     * @param ListIoTCloudConnectorsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListIoTCloudConnectorsResponse
     */
    public function listIoTCloudConnectorsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                            = [];
        $query['APN']                     = $request->APN;
        $query['ISP']                     = $request->ISP;
        $query['IoTCloudConnectorIds']    = $request->ioTCloudConnectorIds;
        $query['IoTCloudConnectorName']   = $request->ioTCloudConnectorName;
        $query['IoTCloudConnectorStatus'] = $request->ioTCloudConnectorStatus;
        $query['IsInGroup']               = $request->isInGroup;
        $query['MaxResults']              = $request->maxResults;
        $query['NextToken']               = $request->nextToken;
        $query['RegionId']                = $request->regionId;
        $query['VpcId']                   = $request->vpcId;
        $req                              = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListIoTCloudConnectors',
            'version'     => '2021-05-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListIoTCloudConnectorsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListIoTCloudConnectorsRequest $request
     *
     * @return ListIoTCloudConnectorsResponse
     */
    public function listIoTCloudConnectors($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listIoTCloudConnectorsWithOptions($request, $runtime);
    }

    /**
     * @param ListRegionsRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListRegionsResponse
     */
    public function listRegionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['AcceptLanguage'] = $request->acceptLanguage;
        $query['RegionId']       = $request->regionId;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListRegions',
            'version'     => '2021-05-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListRegionsRequest $request
     *
     * @return ListRegionsResponse
     */
    public function listRegions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRegionsWithOptions($request, $runtime);
    }

    /**
     * @param ListServiceRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListServiceResponse
     */
    public function listServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                        = [];
        $query['IoTCloudConnectorId'] = $request->ioTCloudConnectorId;
        $query['MaxResults']          = $request->maxResults;
        $query['NextToken']           = $request->nextToken;
        $query['RegionId']            = $request->regionId;
        $query['ResourceStatuses']    = $request->resourceStatuses;
        $query['ServiceIds']          = $request->serviceIds;
        $query['ServiceNames']        = $request->serviceNames;
        $req                          = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListService',
            'version'     => '2021-05-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListServiceRequest $request
     *
     * @return ListServiceResponse
     */
    public function listService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listServiceWithOptions($request, $runtime);
    }

    /**
     * @param ListServiceEntriesRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListServiceEntriesResponse
     */
    public function listServiceEntriesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                        = [];
        $query['IoTCloudConnectorId'] = $request->ioTCloudConnectorId;
        $query['MaxResults']          = $request->maxResults;
        $query['NextToken']           = $request->nextToken;
        $query['RegionId']            = $request->regionId;
        $query['ServiceEntryIds']     = $request->serviceEntryIds;
        $query['ServiceEntryName']    = $request->serviceEntryName;
        $query['ServiceEntryStatus']  = $request->serviceEntryStatus;
        $query['ServiceId']           = $request->serviceId;
        $query['Target']              = $request->target;
        $query['TargetType']          = $request->targetType;
        $req                          = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListServiceEntries',
            'version'     => '2021-05-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListServiceEntriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListServiceEntriesRequest $request
     *
     * @return ListServiceEntriesResponse
     */
    public function listServiceEntries($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listServiceEntriesWithOptions($request, $runtime);
    }

    /**
     * @param OpenIoTCloudConnectorServiceRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return OpenIoTCloudConnectorServiceResponse
     */
    public function openIoTCloudConnectorServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query             = [];
        $query['RegionId'] = $request->regionId;
        $req               = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'OpenIoTCloudConnectorService',
            'version'     => '2021-05-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OpenIoTCloudConnectorServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param OpenIoTCloudConnectorServiceRequest $request
     *
     * @return OpenIoTCloudConnectorServiceResponse
     */
    public function openIoTCloudConnectorService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->openIoTCloudConnectorServiceWithOptions($request, $runtime);
    }

    /**
     * @param RemoveIoTCloudConnectorFromGroupRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return RemoveIoTCloudConnectorFromGroupResponse
     */
    public function removeIoTCloudConnectorFromGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                             = [];
        $query['ClientToken']              = $request->clientToken;
        $query['DryRun']                   = $request->dryRun;
        $query['IoTCloudConnectorGroupId'] = $request->ioTCloudConnectorGroupId;
        $query['IoTCloudConnectorId']      = $request->ioTCloudConnectorId;
        $query['RegionId']                 = $request->regionId;
        $req                               = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RemoveIoTCloudConnectorFromGroup',
            'version'     => '2021-05-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemoveIoTCloudConnectorFromGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RemoveIoTCloudConnectorFromGroupRequest $request
     *
     * @return RemoveIoTCloudConnectorFromGroupResponse
     */
    public function removeIoTCloudConnectorFromGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeIoTCloudConnectorFromGroupWithOptions($request, $runtime);
    }

    /**
     * @param UpdateAuthorizationRuleAttributeRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return UpdateAuthorizationRuleAttributeResponse
     */
    public function updateAuthorizationRuleAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                                 = [];
        $query['AuthorizationRuleDescription'] = $request->authorizationRuleDescription;
        $query['AuthorizationRuleId']          = $request->authorizationRuleId;
        $query['AuthorizationRuleName']        = $request->authorizationRuleName;
        $query['ClientToken']                  = $request->clientToken;
        $query['Destination']                  = $request->destination;
        $query['DestinationType']              = $request->destinationType;
        $query['DryRun']                       = $request->dryRun;
        $query['IoTCloudConnectorId']          = $request->ioTCloudConnectorId;
        $query['Policy']                       = $request->policy;
        $query['RegionId']                     = $request->regionId;
        $query['SourceCidrs']                  = $request->sourceCidrs;
        $req                                   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateAuthorizationRuleAttribute',
            'version'     => '2021-05-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateAuthorizationRuleAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateAuthorizationRuleAttributeRequest $request
     *
     * @return UpdateAuthorizationRuleAttributeResponse
     */
    public function updateAuthorizationRuleAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAuthorizationRuleAttributeWithOptions($request, $runtime);
    }

    /**
     * @param UpdateConnectionPoolAttributeRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return UpdateConnectionPoolAttributeResponse
     */
    public function updateConnectionPoolAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                              = [];
        $query['Cidrs']                     = $request->cidrs;
        $query['ClientToken']               = $request->clientToken;
        $query['ConnectionPoolDescription'] = $request->connectionPoolDescription;
        $query['ConnectionPoolId']          = $request->connectionPoolId;
        $query['ConnectionPoolName']        = $request->connectionPoolName;
        $query['Count']                     = $request->count;
        $query['DryRun']                    = $request->dryRun;
        $query['IoTCloudConnectorId']       = $request->ioTCloudConnectorId;
        $query['RegionId']                  = $request->regionId;
        $req                                = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateConnectionPoolAttribute',
            'version'     => '2021-05-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateConnectionPoolAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateConnectionPoolAttributeRequest $request
     *
     * @return UpdateConnectionPoolAttributeResponse
     */
    public function updateConnectionPoolAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateConnectionPoolAttributeWithOptions($request, $runtime);
    }

    /**
     * @param UpdateGroupAuthorizationRuleAttributeRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return UpdateGroupAuthorizationRuleAttributeResponse
     */
    public function updateGroupAuthorizationRuleAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                                 = [];
        $query['AuthorizationRuleDescription'] = $request->authorizationRuleDescription;
        $query['AuthorizationRuleId']          = $request->authorizationRuleId;
        $query['AuthorizationRuleName']        = $request->authorizationRuleName;
        $query['ClientToken']                  = $request->clientToken;
        $query['Destination']                  = $request->destination;
        $query['DestinationType']              = $request->destinationType;
        $query['DryRun']                       = $request->dryRun;
        $query['IoTCloudConnectorGroupId']     = $request->ioTCloudConnectorGroupId;
        $query['Policy']                       = $request->policy;
        $query['RegionId']                     = $request->regionId;
        $query['SourceCidrs']                  = $request->sourceCidrs;
        $req                                   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateGroupAuthorizationRuleAttribute',
            'version'     => '2021-05-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateGroupAuthorizationRuleAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateGroupAuthorizationRuleAttributeRequest $request
     *
     * @return UpdateGroupAuthorizationRuleAttributeResponse
     */
    public function updateGroupAuthorizationRuleAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateGroupAuthorizationRuleAttributeWithOptions($request, $runtime);
    }

    /**
     * @param UpdateIoTCloudConnectorAttributeRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return UpdateIoTCloudConnectorAttributeResponse
     */
    public function updateIoTCloudConnectorAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                                 = [];
        $query['ClientToken']                  = $request->clientToken;
        $query['DryRun']                       = $request->dryRun;
        $query['IoTCloudConnectorDescription'] = $request->ioTCloudConnectorDescription;
        $query['IoTCloudConnectorId']          = $request->ioTCloudConnectorId;
        $query['IoTCloudConnectorName']        = $request->ioTCloudConnectorName;
        $query['RegionId']                     = $request->regionId;
        $query['WildcardDomainEnabled']        = $request->wildcardDomainEnabled;
        $req                                   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateIoTCloudConnectorAttribute',
            'version'     => '2021-05-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateIoTCloudConnectorAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateIoTCloudConnectorAttributeRequest $request
     *
     * @return UpdateIoTCloudConnectorAttributeResponse
     */
    public function updateIoTCloudConnectorAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateIoTCloudConnectorAttributeWithOptions($request, $runtime);
    }

    /**
     * @param UpdateIoTCloudConnectorGroupAttributeRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return UpdateIoTCloudConnectorGroupAttributeResponse
     */
    public function updateIoTCloudConnectorGroupAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                             = [];
        $query['ClientToken']              = $request->clientToken;
        $query['Description']              = $request->description;
        $query['DryRun']                   = $request->dryRun;
        $query['IoTCloudConnectorGroupId'] = $request->ioTCloudConnectorGroupId;
        $query['Name']                     = $request->name;
        $query['RegionId']                 = $request->regionId;
        $req                               = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateIoTCloudConnectorGroupAttribute',
            'version'     => '2021-05-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateIoTCloudConnectorGroupAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateIoTCloudConnectorGroupAttributeRequest $request
     *
     * @return UpdateIoTCloudConnectorGroupAttributeResponse
     */
    public function updateIoTCloudConnectorGroupAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateIoTCloudConnectorGroupAttributeWithOptions($request, $runtime);
    }

    /**
     * @param UpdateServiceAttributeRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateServiceAttributeResponse
     */
    public function updateServiceAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                        = [];
        $query['ClientToken']         = $request->clientToken;
        $query['DryRun']              = $request->dryRun;
        $query['IoTCloudConnectorId'] = $request->ioTCloudConnectorId;
        $query['RegionId']            = $request->regionId;
        $query['ServiceDescription']  = $request->serviceDescription;
        $query['ServiceId']           = $request->serviceId;
        $query['ServiceName']         = $request->serviceName;
        $req                          = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateServiceAttribute',
            'version'     => '2021-05-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateServiceAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateServiceAttributeRequest $request
     *
     * @return UpdateServiceAttributeResponse
     */
    public function updateServiceAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateServiceAttributeWithOptions($request, $runtime);
    }

    /**
     * @param UpdateServiceEntryAttributeRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return UpdateServiceEntryAttributeResponse
     */
    public function updateServiceEntryAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                            = [];
        $query['ClientToken']             = $request->clientToken;
        $query['DryRun']                  = $request->dryRun;
        $query['IoTCloudConnectorId']     = $request->ioTCloudConnectorId;
        $query['RegionId']                = $request->regionId;
        $query['ServiceEntryDescription'] = $request->serviceEntryDescription;
        $query['ServiceEntryId']          = $request->serviceEntryId;
        $query['ServiceEntryName']        = $request->serviceEntryName;
        $query['ServiceId']               = $request->serviceId;
        $req                              = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateServiceEntryAttribute',
            'version'     => '2021-05-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateServiceEntryAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateServiceEntryAttributeRequest $request
     *
     * @return UpdateServiceEntryAttributeResponse
     */
    public function updateServiceEntryAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateServiceEntryAttributeWithOptions($request, $runtime);
    }
}
