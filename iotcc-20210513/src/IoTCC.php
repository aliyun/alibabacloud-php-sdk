<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IoTCC\V20210513;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\AssociateIpWithConnectionPoolRequest;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\AssociateIpWithConnectionPoolResponse;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\AssociateVSwitchWithIoTCloudConnectorRequest;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\AssociateVSwitchWithIoTCloudConnectorResponse;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\CreateAuthorizationRuleRequest;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\CreateAuthorizationRuleResponse;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\CreateConnectionPoolRequest;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\CreateConnectionPoolResponse;
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
use AlibabaCloud\SDK\IoTCC\V20210513\Models\ListConnectionPoolIpsRequest;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\ListConnectionPoolIpsResponse;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\ListConnectionPoolsRequest;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\ListConnectionPoolsResponse;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\ListIoTCloudConnectorAvailableZonesRequest;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\ListIoTCloudConnectorAvailableZonesResponse;
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
use AlibabaCloud\SDK\IoTCC\V20210513\Models\UpdateAuthorizationRuleAttributeRequest;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\UpdateAuthorizationRuleAttributeResponse;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\UpdateConnectionPoolAttributeRequest;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\UpdateConnectionPoolAttributeResponse;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\UpdateIoTCloudConnectorAttributeRequest;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\UpdateIoTCloudConnectorAttributeResponse;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\UpdateServiceAttributeRequest;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\UpdateServiceAttributeResponse;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\UpdateServiceEntryAttributeRequest;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\UpdateServiceEntryAttributeResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
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
     * @param AssociateIpWithConnectionPoolRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return AssociateIpWithConnectionPoolResponse
     */
    public function associateIpWithConnectionPoolWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AssociateIpWithConnectionPoolResponse::fromMap($this->doRPCRequest('AssociateIpWithConnectionPool', '2021-05-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AssociateVSwitchWithIoTCloudConnectorResponse::fromMap($this->doRPCRequest('AssociateVSwitchWithIoTCloudConnector', '2021-05-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateAuthorizationRuleResponse::fromMap($this->doRPCRequest('CreateAuthorizationRule', '2021-05-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateConnectionPoolResponse::fromMap($this->doRPCRequest('CreateConnectionPool', '2021-05-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param CreateIoTCloudConnectorRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateIoTCloudConnectorResponse
     */
    public function createIoTCloudConnectorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateIoTCloudConnectorResponse::fromMap($this->doRPCRequest('CreateIoTCloudConnector', '2021-05-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param CreateServiceRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateServiceResponse
     */
    public function createServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateServiceResponse::fromMap($this->doRPCRequest('CreateService', '2021-05-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateServiceEntryResponse::fromMap($this->doRPCRequest('CreateServiceEntry', '2021-05-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteAuthorizationRuleResponse::fromMap($this->doRPCRequest('DeleteAuthorizationRule', '2021-05-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteConnectionPoolResponse::fromMap($this->doRPCRequest('DeleteConnectionPool', '2021-05-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DeleteIoTCloudConnectorRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteIoTCloudConnectorResponse
     */
    public function deleteIoTCloudConnectorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteIoTCloudConnectorResponse::fromMap($this->doRPCRequest('DeleteIoTCloudConnector', '2021-05-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DeleteServiceRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteServiceResponse
     */
    public function deleteServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteServiceResponse::fromMap($this->doRPCRequest('DeleteService', '2021-05-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteServiceEntryResponse::fromMap($this->doRPCRequest('DeleteServiceEntry', '2021-05-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DisableIoTCloudConnectorAccessLogResponse::fromMap($this->doRPCRequest('DisableIoTCloudConnectorAccessLog', '2021-05-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DissociateIpFromConnectionPoolResponse::fromMap($this->doRPCRequest('DissociateIpFromConnectionPool', '2021-05-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DissociateVSwitchFromIoTCloudConnectorResponse::fromMap($this->doRPCRequest('DissociateVSwitchFromIoTCloudConnector', '2021-05-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return EnableIoTCloudConnectorAccessLogResponse::fromMap($this->doRPCRequest('EnableIoTCloudConnectorAccessLog', '2021-05-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetConnectionPoolIpOperationResultResponse::fromMap($this->doRPCRequest('GetConnectionPoolIpOperationResult', '2021-05-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetIoTCloudConnectorAccessLogResponse::fromMap($this->doRPCRequest('GetIoTCloudConnectorAccessLog', '2021-05-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetStsInfoAndOssPathResponse::fromMap($this->doRPCRequest('GetStsInfoAndOssPath', '2021-05-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GrantVirtualBorderRouterResponse::fromMap($this->doRPCRequest('GrantVirtualBorderRouter', '2021-05-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListAPNsResponse::fromMap($this->doRPCRequest('ListAPNs', '2021-05-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListAuthorizationRulesResponse::fromMap($this->doRPCRequest('ListAuthorizationRules', '2021-05-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ListConnectionPoolIpsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListConnectionPoolIpsResponse
     */
    public function listConnectionPoolIpsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListConnectionPoolIpsResponse::fromMap($this->doRPCRequest('ListConnectionPoolIps', '2021-05-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListConnectionPoolsResponse::fromMap($this->doRPCRequest('ListConnectionPools', '2021-05-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ListIoTCloudConnectorAvailableZonesRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return ListIoTCloudConnectorAvailableZonesResponse
     */
    public function listIoTCloudConnectorAvailableZonesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListIoTCloudConnectorAvailableZonesResponse::fromMap($this->doRPCRequest('ListIoTCloudConnectorAvailableZones', '2021-05-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ListIoTCloudConnectorsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListIoTCloudConnectorsResponse
     */
    public function listIoTCloudConnectorsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListIoTCloudConnectorsResponse::fromMap($this->doRPCRequest('ListIoTCloudConnectors', '2021-05-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListRegionsResponse::fromMap($this->doRPCRequest('ListRegions', '2021-05-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListServiceResponse::fromMap($this->doRPCRequest('ListService', '2021-05-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListServiceEntriesResponse::fromMap($this->doRPCRequest('ListServiceEntries', '2021-05-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return OpenIoTCloudConnectorServiceResponse::fromMap($this->doRPCRequest('OpenIoTCloudConnectorService', '2021-05-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param UpdateAuthorizationRuleAttributeRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return UpdateAuthorizationRuleAttributeResponse
     */
    public function updateAuthorizationRuleAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateAuthorizationRuleAttributeResponse::fromMap($this->doRPCRequest('UpdateAuthorizationRuleAttribute', '2021-05-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateConnectionPoolAttributeResponse::fromMap($this->doRPCRequest('UpdateConnectionPoolAttribute', '2021-05-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param UpdateIoTCloudConnectorAttributeRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return UpdateIoTCloudConnectorAttributeResponse
     */
    public function updateIoTCloudConnectorAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateIoTCloudConnectorAttributeResponse::fromMap($this->doRPCRequest('UpdateIoTCloudConnectorAttribute', '2021-05-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param UpdateServiceAttributeRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateServiceAttributeResponse
     */
    public function updateServiceAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateServiceAttributeResponse::fromMap($this->doRPCRequest('UpdateServiceAttribute', '2021-05-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateServiceEntryAttributeResponse::fromMap($this->doRPCRequest('UpdateServiceEntryAttribute', '2021-05-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
