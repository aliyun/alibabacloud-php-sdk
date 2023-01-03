<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Eflo\V20220530\Models\CreateSubnetRequest;
use AlibabaCloud\SDK\Eflo\V20220530\Models\CreateSubnetResponse;
use AlibabaCloud\SDK\Eflo\V20220530\Models\CreateVccRequest;
use AlibabaCloud\SDK\Eflo\V20220530\Models\CreateVccResponse;
use AlibabaCloud\SDK\Eflo\V20220530\Models\CreateVpdRequest;
use AlibabaCloud\SDK\Eflo\V20220530\Models\CreateVpdResponse;
use AlibabaCloud\SDK\Eflo\V20220530\Models\DeleteSubnetRequest;
use AlibabaCloud\SDK\Eflo\V20220530\Models\DeleteSubnetResponse;
use AlibabaCloud\SDK\Eflo\V20220530\Models\DeleteVpdRequest;
use AlibabaCloud\SDK\Eflo\V20220530\Models\DeleteVpdResponse;
use AlibabaCloud\SDK\Eflo\V20220530\Models\GetSubnetRequest;
use AlibabaCloud\SDK\Eflo\V20220530\Models\GetSubnetResponse;
use AlibabaCloud\SDK\Eflo\V20220530\Models\GetVccRequest;
use AlibabaCloud\SDK\Eflo\V20220530\Models\GetVccResponse;
use AlibabaCloud\SDK\Eflo\V20220530\Models\GetVpdRequest;
use AlibabaCloud\SDK\Eflo\V20220530\Models\GetVpdResponse;
use AlibabaCloud\SDK\Eflo\V20220530\Models\InitializeVccResponse;
use AlibabaCloud\SDK\Eflo\V20220530\Models\ListSubnetsRequest;
use AlibabaCloud\SDK\Eflo\V20220530\Models\ListSubnetsResponse;
use AlibabaCloud\SDK\Eflo\V20220530\Models\ListVccsRequest;
use AlibabaCloud\SDK\Eflo\V20220530\Models\ListVccsResponse;
use AlibabaCloud\SDK\Eflo\V20220530\Models\ListVpdsRequest;
use AlibabaCloud\SDK\Eflo\V20220530\Models\ListVpdsResponse;
use AlibabaCloud\SDK\Eflo\V20220530\Models\UpdateSubnetRequest;
use AlibabaCloud\SDK\Eflo\V20220530\Models\UpdateSubnetResponse;
use AlibabaCloud\SDK\Eflo\V20220530\Models\UpdateVccRequest;
use AlibabaCloud\SDK\Eflo\V20220530\Models\UpdateVccResponse;
use AlibabaCloud\SDK\Eflo\V20220530\Models\UpdateVpdRequest;
use AlibabaCloud\SDK\Eflo\V20220530\Models\UpdateVpdResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Eflo extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('eflo', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param CreateSubnetRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CreateSubnetResponse
     */
    public function createSubnetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->cidr)) {
            $body['Cidr'] = $request->cidr;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->type)) {
            $body['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->vpdId)) {
            $body['VpdId'] = $request->vpdId;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $body['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateSubnet',
            'version'     => '2022-05-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateSubnetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateSubnetRequest $request
     *
     * @return CreateSubnetResponse
     */
    public function createSubnet($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSubnetWithOptions($request, $runtime);
    }

    /**
     * @param CreateVccRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return CreateVccResponse
     */
    public function createVccWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->accessCouldService)) {
            $body['AccessCouldService'] = $request->accessCouldService;
        }
        if (!Utils::isUnset($request->bgpCidr)) {
            $body['BgpCidr'] = $request->bgpCidr;
        }
        if (!Utils::isUnset($request->cenId)) {
            $body['CenId'] = $request->cenId;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->vSwitchId)) {
            $body['VSwitchId'] = $request->vSwitchId;
        }
        if (!Utils::isUnset($request->vccId)) {
            $body['VccId'] = $request->vccId;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $body['VpcId'] = $request->vpcId;
        }
        if (!Utils::isUnset($request->vpdId)) {
            $body['VpdId'] = $request->vpdId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateVcc',
            'version'     => '2022-05-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateVccResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateVccRequest $request
     *
     * @return CreateVccResponse
     */
    public function createVcc($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createVccWithOptions($request, $runtime);
    }

    /**
     * @param CreateVpdRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return CreateVpdResponse
     */
    public function createVpdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->cidr)) {
            $body['Cidr'] = $request->cidr;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->subnets)) {
            $body['Subnets'] = $request->subnets;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateVpd',
            'version'     => '2022-05-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateVpdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateVpdRequest $request
     *
     * @return CreateVpdResponse
     */
    public function createVpd($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createVpdWithOptions($request, $runtime);
    }

    /**
     * @param DeleteSubnetRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteSubnetResponse
     */
    public function deleteSubnetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->subnetId)) {
            $body['SubnetId'] = $request->subnetId;
        }
        if (!Utils::isUnset($request->vpdId)) {
            $body['VpdId'] = $request->vpdId;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $body['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteSubnet',
            'version'     => '2022-05-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteSubnetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteSubnetRequest $request
     *
     * @return DeleteSubnetResponse
     */
    public function deleteSubnet($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSubnetWithOptions($request, $runtime);
    }

    /**
     * @param DeleteVpdRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return DeleteVpdResponse
     */
    public function deleteVpdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->vpdId)) {
            $body['VpdId'] = $request->vpdId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteVpd',
            'version'     => '2022-05-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteVpdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteVpdRequest $request
     *
     * @return DeleteVpdResponse
     */
    public function deleteVpd($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteVpdWithOptions($request, $runtime);
    }

    /**
     * @param GetSubnetRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return GetSubnetResponse
     */
    public function getSubnetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->subnetId)) {
            $body['SubnetId'] = $request->subnetId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetSubnet',
            'version'     => '2022-05-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetSubnetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetSubnetRequest $request
     *
     * @return GetSubnetResponse
     */
    public function getSubnet($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSubnetWithOptions($request, $runtime);
    }

    /**
     * @param GetVccRequest  $request
     * @param RuntimeOptions $runtime
     *
     * @return GetVccResponse
     */
    public function getVccWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->vccId)) {
            $body['VccId'] = $request->vccId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetVcc',
            'version'     => '2022-05-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetVccResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetVccRequest $request
     *
     * @return GetVccResponse
     */
    public function getVcc($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getVccWithOptions($request, $runtime);
    }

    /**
     * @param GetVpdRequest  $request
     * @param RuntimeOptions $runtime
     *
     * @return GetVpdResponse
     */
    public function getVpdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->vpdId)) {
            $body['VpdId'] = $request->vpdId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetVpd',
            'version'     => '2022-05-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetVpdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetVpdRequest $request
     *
     * @return GetVpdResponse
     */
    public function getVpd($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getVpdWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return InitializeVccResponse
     */
    public function initializeVccWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'InitializeVcc',
            'version'     => '2022-05-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return InitializeVccResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return InitializeVccResponse
     */
    public function initializeVcc()
    {
        $runtime = new RuntimeOptions([]);

        return $this->initializeVccWithOptions($runtime);
    }

    /**
     * @param ListSubnetsRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListSubnetsResponse
     */
    public function listSubnetsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->enablePage)) {
            $body['EnablePage'] = $request->enablePage;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->status)) {
            $body['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->subnetId)) {
            $body['SubnetId'] = $request->subnetId;
        }
        if (!Utils::isUnset($request->type)) {
            $body['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->vpdId)) {
            $body['VpdId'] = $request->vpdId;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $body['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListSubnets',
            'version'     => '2022-05-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListSubnetsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListSubnetsRequest $request
     *
     * @return ListSubnetsResponse
     */
    public function listSubnets($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSubnetsWithOptions($request, $runtime);
    }

    /**
     * @param ListVccsRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return ListVccsResponse
     */
    public function listVccsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bandwidth)) {
            $body['Bandwidth'] = $request->bandwidth;
        }
        if (!Utils::isUnset($request->cenId)) {
            $body['CenId'] = $request->cenId;
        }
        if (!Utils::isUnset($request->enablePage)) {
            $body['EnablePage'] = $request->enablePage;
        }
        if (!Utils::isUnset($request->exStatus)) {
            $body['ExStatus'] = $request->exStatus;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->status)) {
            $body['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->vccId)) {
            $body['VccId'] = $request->vccId;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $body['VpcId'] = $request->vpcId;
        }
        if (!Utils::isUnset($request->vpdId)) {
            $body['VpdId'] = $request->vpdId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListVccs',
            'version'     => '2022-05-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListVccsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListVccsRequest $request
     *
     * @return ListVccsResponse
     */
    public function listVccs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listVccsWithOptions($request, $runtime);
    }

    /**
     * @param ListVpdsRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return ListVpdsResponse
     */
    public function listVpdsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->enablePage)) {
            $body['EnablePage'] = $request->enablePage;
        }
        if (!Utils::isUnset($request->filterErId)) {
            $body['FilterErId'] = $request->filterErId;
        }
        if (!Utils::isUnset($request->forSelect)) {
            $body['ForSelect'] = $request->forSelect;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->status)) {
            $body['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->vpdId)) {
            $body['VpdId'] = $request->vpdId;
        }
        if (!Utils::isUnset($request->withDependence)) {
            $body['WithDependence'] = $request->withDependence;
        }
        if (!Utils::isUnset($request->withoutVcc)) {
            $body['WithoutVcc'] = $request->withoutVcc;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListVpds',
            'version'     => '2022-05-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListVpdsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListVpdsRequest $request
     *
     * @return ListVpdsResponse
     */
    public function listVpds($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listVpdsWithOptions($request, $runtime);
    }

    /**
     * @param UpdateSubnetRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return UpdateSubnetResponse
     */
    public function updateSubnetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->subnetId)) {
            $body['SubnetId'] = $request->subnetId;
        }
        if (!Utils::isUnset($request->vpdId)) {
            $body['VpdId'] = $request->vpdId;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $body['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateSubnet',
            'version'     => '2022-05-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateSubnetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateSubnetRequest $request
     *
     * @return UpdateSubnetResponse
     */
    public function updateSubnet($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSubnetWithOptions($request, $runtime);
    }

    /**
     * @param UpdateVccRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return UpdateVccResponse
     */
    public function updateVccWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bandwidth)) {
            $body['Bandwidth'] = $request->bandwidth;
        }
        if (!Utils::isUnset($request->orderId)) {
            $body['OrderId'] = $request->orderId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->vccId)) {
            $body['VccId'] = $request->vccId;
        }
        if (!Utils::isUnset($request->vccName)) {
            $body['VccName'] = $request->vccName;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateVcc',
            'version'     => '2022-05-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateVccResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateVccRequest $request
     *
     * @return UpdateVccResponse
     */
    public function updateVcc($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateVccWithOptions($request, $runtime);
    }

    /**
     * @param UpdateVpdRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return UpdateVpdResponse
     */
    public function updateVpdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->vpdId)) {
            $body['VpdId'] = $request->vpdId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateVpd',
            'version'     => '2022-05-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateVpdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateVpdRequest $request
     *
     * @return UpdateVpdResponse
     */
    public function updateVpd($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateVpdWithOptions($request, $runtime);
    }
}
