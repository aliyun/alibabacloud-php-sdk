<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CC5G\V20220314;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\CC5G\V20220314\Models\AddDNSAuthorizationRuleRequest;
use AlibabaCloud\SDK\CC5G\V20220314\Models\AddDNSAuthorizationRuleResponse;
use AlibabaCloud\SDK\CC5G\V20220314\Models\AttachVpcToNetLinkRequest;
use AlibabaCloud\SDK\CC5G\V20220314\Models\AttachVpcToNetLinkResponse;
use AlibabaCloud\SDK\CC5G\V20220314\Models\CreateAuthorizationRuleRequest;
use AlibabaCloud\SDK\CC5G\V20220314\Models\CreateAuthorizationRuleResponse;
use AlibabaCloud\SDK\CC5G\V20220314\Models\CreateWirelessCloudConnectorRequest;
use AlibabaCloud\SDK\CC5G\V20220314\Models\CreateWirelessCloudConnectorResponse;
use AlibabaCloud\SDK\CC5G\V20220314\Models\DeleteAuthorizationRuleRequest;
use AlibabaCloud\SDK\CC5G\V20220314\Models\DeleteAuthorizationRuleResponse;
use AlibabaCloud\SDK\CC5G\V20220314\Models\DeleteWirelessCloudConnectorRequest;
use AlibabaCloud\SDK\CC5G\V20220314\Models\DeleteWirelessCloudConnectorResponse;
use AlibabaCloud\SDK\CC5G\V20220314\Models\DetachVpcFromNetLinkRequest;
use AlibabaCloud\SDK\CC5G\V20220314\Models\DetachVpcFromNetLinkResponse;
use AlibabaCloud\SDK\CC5G\V20220314\Models\ListZonesRequest;
use AlibabaCloud\SDK\CC5G\V20220314\Models\ListZonesResponse;
use AlibabaCloud\SDK\CC5G\V20220314\Models\OpenCc5gServiceRequest;
use AlibabaCloud\SDK\CC5G\V20220314\Models\OpenCc5gServiceResponse;
use AlibabaCloud\SDK\CC5G\V20220314\Models\UpdateAuthorizationRuleRequest;
use AlibabaCloud\SDK\CC5G\V20220314\Models\UpdateAuthorizationRuleResponse;
use AlibabaCloud\SDK\CC5G\V20220314\Models\UpdateCardRequest;
use AlibabaCloud\SDK\CC5G\V20220314\Models\UpdateCardResponse;
use AlibabaCloud\SDK\CC5G\V20220314\Models\UpdateDNSAuthorizationRuleRequest;
use AlibabaCloud\SDK\CC5G\V20220314\Models\UpdateDNSAuthorizationRuleResponse;
use AlibabaCloud\SDK\CC5G\V20220314\Models\UpdateWirelessCloudConnectorRequest;
use AlibabaCloud\SDK\CC5G\V20220314\Models\UpdateWirelessCloudConnectorResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class CC5G extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('cc5g', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param AddDNSAuthorizationRuleRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return AddDNSAuthorizationRuleResponse
     */
    public function addDNSAuthorizationRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->destinationIp)) {
            $query['DestinationIp'] = $request->destinationIp;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->sourceDNSIp)) {
            $query['SourceDNSIp'] = $request->sourceDNSIp;
        }
        if (!Utils::isUnset($request->wirelessCloudConnectorId)) {
            $query['WirelessCloudConnectorId'] = $request->wirelessCloudConnectorId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddDNSAuthorizationRule',
            'version'     => '2022-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddDNSAuthorizationRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddDNSAuthorizationRuleRequest $request
     *
     * @return AddDNSAuthorizationRuleResponse
     */
    public function addDNSAuthorizationRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addDNSAuthorizationRuleWithOptions($request, $runtime);
    }

    /**
     * @param AttachVpcToNetLinkRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return AttachVpcToNetLinkResponse
     */
    public function attachVpcToNetLinkWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->netLinkId)) {
            $query['NetLinkId'] = $request->netLinkId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->vSwitches)) {
            $query['VSwitches'] = $request->vSwitches;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $query['VpcId'] = $request->vpcId;
        }
        if (!Utils::isUnset($request->wirelessCloudConnectorId)) {
            $query['WirelessCloudConnectorId'] = $request->wirelessCloudConnectorId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AttachVpcToNetLink',
            'version'     => '2022-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AttachVpcToNetLinkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AttachVpcToNetLinkRequest $request
     *
     * @return AttachVpcToNetLinkResponse
     */
    public function attachVpcToNetLink($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachVpcToNetLinkWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->destination)) {
            $query['Destination'] = $request->destination;
        }
        if (!Utils::isUnset($request->destinationType)) {
            $query['DestinationType'] = $request->destinationType;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->policy)) {
            $query['Policy'] = $request->policy;
        }
        if (!Utils::isUnset($request->sourceCidr)) {
            $query['SourceCidr'] = $request->sourceCidr;
        }
        if (!Utils::isUnset($request->wirelessCloudConnectorId)) {
            $query['WirelessCloudConnectorId'] = $request->wirelessCloudConnectorId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateAuthorizationRule',
            'version'     => '2022-03-14',
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
     * @param CreateWirelessCloudConnectorRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return CreateWirelessCloudConnectorResponse
     */
    public function createWirelessCloudConnectorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ISP)) {
            $query['ISP'] = $request->ISP;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->netLinks)) {
            $query['NetLinks'] = $request->netLinks;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->useCase)) {
            $query['UseCase'] = $request->useCase;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateWirelessCloudConnector',
            'version'     => '2022-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateWirelessCloudConnectorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateWirelessCloudConnectorRequest $request
     *
     * @return CreateWirelessCloudConnectorResponse
     */
    public function createWirelessCloudConnector($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createWirelessCloudConnectorWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->authorizationRuleId)) {
            $query['AuthorizationRuleId'] = $request->authorizationRuleId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->wirelessCloudConnectorId)) {
            $query['WirelessCloudConnectorId'] = $request->wirelessCloudConnectorId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteAuthorizationRule',
            'version'     => '2022-03-14',
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
     * @param DeleteWirelessCloudConnectorRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DeleteWirelessCloudConnectorResponse
     */
    public function deleteWirelessCloudConnectorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->wirelessCloudConnectorId)) {
            $query['WirelessCloudConnectorId'] = $request->wirelessCloudConnectorId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteWirelessCloudConnector',
            'version'     => '2022-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteWirelessCloudConnectorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteWirelessCloudConnectorRequest $request
     *
     * @return DeleteWirelessCloudConnectorResponse
     */
    public function deleteWirelessCloudConnector($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteWirelessCloudConnectorWithOptions($request, $runtime);
    }

    /**
     * @param DetachVpcFromNetLinkRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DetachVpcFromNetLinkResponse
     */
    public function detachVpcFromNetLinkWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->netLinkId)) {
            $query['NetLinkId'] = $request->netLinkId;
        }
        if (!Utils::isUnset($request->wirelessCloudConnectorId)) {
            $query['WirelessCloudConnectorId'] = $request->wirelessCloudConnectorId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DetachVpcFromNetLink',
            'version'     => '2022-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DetachVpcFromNetLinkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DetachVpcFromNetLinkRequest $request
     *
     * @return DetachVpcFromNetLinkResponse
     */
    public function detachVpcFromNetLink($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detachVpcFromNetLinkWithOptions($request, $runtime);
    }

    /**
     * @param ListZonesRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ListZonesResponse
     */
    public function listZonesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListZones',
            'version'     => '2022-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListZonesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListZonesRequest $request
     *
     * @return ListZonesResponse
     */
    public function listZones($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listZonesWithOptions($request, $runtime);
    }

    /**
     * @param OpenCc5gServiceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return OpenCc5gServiceResponse
     */
    public function openCc5gServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'OpenCc5gService',
            'version'     => '2022-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OpenCc5gServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param OpenCc5gServiceRequest $request
     *
     * @return OpenCc5gServiceResponse
     */
    public function openCc5gService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->openCc5gServiceWithOptions($request, $runtime);
    }

    /**
     * @param UpdateAuthorizationRuleRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return UpdateAuthorizationRuleResponse
     */
    public function updateAuthorizationRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->authorizationRuleId)) {
            $query['AuthorizationRuleId'] = $request->authorizationRuleId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->destination)) {
            $query['Destination'] = $request->destination;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->policy)) {
            $query['Policy'] = $request->policy;
        }
        if (!Utils::isUnset($request->sourceCidr)) {
            $query['SourceCidr'] = $request->sourceCidr;
        }
        if (!Utils::isUnset($request->wirelessCloudConnectorId)) {
            $query['WirelessCloudConnectorId'] = $request->wirelessCloudConnectorId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateAuthorizationRule',
            'version'     => '2022-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateAuthorizationRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateAuthorizationRuleRequest $request
     *
     * @return UpdateAuthorizationRuleResponse
     */
    public function updateAuthorizationRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAuthorizationRuleWithOptions($request, $runtime);
    }

    /**
     * @param UpdateCardRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return UpdateCardResponse
     */
    public function updateCardWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->iccid)) {
            $query['Iccid'] = $request->iccid;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->wirelessCloudConnectorId)) {
            $query['WirelessCloudConnectorId'] = $request->wirelessCloudConnectorId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateCard',
            'version'     => '2022-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateCardResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateCardRequest $request
     *
     * @return UpdateCardResponse
     */
    public function updateCard($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCardWithOptions($request, $runtime);
    }

    /**
     * @param UpdateDNSAuthorizationRuleRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return UpdateDNSAuthorizationRuleResponse
     */
    public function updateDNSAuthorizationRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->authorizationRuleId)) {
            $query['AuthorizationRuleId'] = $request->authorizationRuleId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->destinationIp)) {
            $query['DestinationIp'] = $request->destinationIp;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->sourceDNSIp)) {
            $query['SourceDNSIp'] = $request->sourceDNSIp;
        }
        if (!Utils::isUnset($request->wirelessCloudConnectorId)) {
            $query['WirelessCloudConnectorId'] = $request->wirelessCloudConnectorId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateDNSAuthorizationRule',
            'version'     => '2022-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateDNSAuthorizationRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateDNSAuthorizationRuleRequest $request
     *
     * @return UpdateDNSAuthorizationRuleResponse
     */
    public function updateDNSAuthorizationRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDNSAuthorizationRuleWithOptions($request, $runtime);
    }

    /**
     * @param UpdateWirelessCloudConnectorRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return UpdateWirelessCloudConnectorResponse
     */
    public function updateWirelessCloudConnectorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->wirelessCloudConnectorId)) {
            $query['WirelessCloudConnectorId'] = $request->wirelessCloudConnectorId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateWirelessCloudConnector',
            'version'     => '2022-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateWirelessCloudConnectorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateWirelessCloudConnectorRequest $request
     *
     * @return UpdateWirelessCloudConnectorResponse
     */
    public function updateWirelessCloudConnector($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateWirelessCloudConnectorWithOptions($request, $runtime);
    }
}
