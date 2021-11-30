<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200630;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Cas\V20200630\Models\CreateCertificateWithExtensionRequest;
use AlibabaCloud\SDK\Cas\V20200630\Models\CreateCertificateWithExtensionResponse;
use AlibabaCloud\SDK\Cas\V20200630\Models\CreateClientCertificateRequest;
use AlibabaCloud\SDK\Cas\V20200630\Models\CreateClientCertificateResponse;
use AlibabaCloud\SDK\Cas\V20200630\Models\CreateClientCertificateWithCsrRequest;
use AlibabaCloud\SDK\Cas\V20200630\Models\CreateClientCertificateWithCsrResponse;
use AlibabaCloud\SDK\Cas\V20200630\Models\CreateRevokeClientCertificateRequest;
use AlibabaCloud\SDK\Cas\V20200630\Models\CreateRevokeClientCertificateResponse;
use AlibabaCloud\SDK\Cas\V20200630\Models\CreateRootCACertificateRequest;
use AlibabaCloud\SDK\Cas\V20200630\Models\CreateRootCACertificateResponse;
use AlibabaCloud\SDK\Cas\V20200630\Models\CreateServerCertificateRequest;
use AlibabaCloud\SDK\Cas\V20200630\Models\CreateServerCertificateResponse;
use AlibabaCloud\SDK\Cas\V20200630\Models\CreateServerCertificateWithCsrRequest;
use AlibabaCloud\SDK\Cas\V20200630\Models\CreateServerCertificateWithCsrResponse;
use AlibabaCloud\SDK\Cas\V20200630\Models\CreateSubCACertificateRequest;
use AlibabaCloud\SDK\Cas\V20200630\Models\CreateSubCACertificateResponse;
use AlibabaCloud\SDK\Cas\V20200630\Models\DeleteClientCertificateRequest;
use AlibabaCloud\SDK\Cas\V20200630\Models\DeleteClientCertificateResponse;
use AlibabaCloud\SDK\Cas\V20200630\Models\DescribeCACertificateCountResponse;
use AlibabaCloud\SDK\Cas\V20200630\Models\DescribeCACertificateListRequest;
use AlibabaCloud\SDK\Cas\V20200630\Models\DescribeCACertificateListResponse;
use AlibabaCloud\SDK\Cas\V20200630\Models\DescribeCACertificateRequest;
use AlibabaCloud\SDK\Cas\V20200630\Models\DescribeCACertificateResponse;
use AlibabaCloud\SDK\Cas\V20200630\Models\DescribeCertificatePrivateKeyRequest;
use AlibabaCloud\SDK\Cas\V20200630\Models\DescribeCertificatePrivateKeyResponse;
use AlibabaCloud\SDK\Cas\V20200630\Models\DescribeClientCertificateForSerialNumberRequest;
use AlibabaCloud\SDK\Cas\V20200630\Models\DescribeClientCertificateForSerialNumberResponse;
use AlibabaCloud\SDK\Cas\V20200630\Models\DescribeClientCertificateRequest;
use AlibabaCloud\SDK\Cas\V20200630\Models\DescribeClientCertificateResponse;
use AlibabaCloud\SDK\Cas\V20200630\Models\DescribeClientCertificateStatusForSerialNumberRequest;
use AlibabaCloud\SDK\Cas\V20200630\Models\DescribeClientCertificateStatusForSerialNumberResponse;
use AlibabaCloud\SDK\Cas\V20200630\Models\DescribeClientCertificateStatusRequest;
use AlibabaCloud\SDK\Cas\V20200630\Models\DescribeClientCertificateStatusResponse;
use AlibabaCloud\SDK\Cas\V20200630\Models\GetCAInstanceStatusRequest;
use AlibabaCloud\SDK\Cas\V20200630\Models\GetCAInstanceStatusResponse;
use AlibabaCloud\SDK\Cas\V20200630\Models\ListCACertificateLogRequest;
use AlibabaCloud\SDK\Cas\V20200630\Models\ListCACertificateLogResponse;
use AlibabaCloud\SDK\Cas\V20200630\Models\ListClientCertificateRequest;
use AlibabaCloud\SDK\Cas\V20200630\Models\ListClientCertificateResponse;
use AlibabaCloud\SDK\Cas\V20200630\Models\ListRevokeCertificateRequest;
use AlibabaCloud\SDK\Cas\V20200630\Models\ListRevokeCertificateResponse;
use AlibabaCloud\SDK\Cas\V20200630\Models\UpdateCACertificateStatusRequest;
use AlibabaCloud\SDK\Cas\V20200630\Models\UpdateCACertificateStatusResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Cas extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'cn-hangzhou'                 => 'cas.aliyuncs.com',
            'ap-northeast-2-pop'          => 'cas.aliyuncs.com',
            'ap-southeast-1'              => 'cas.aliyuncs.com',
            'ap-southeast-3'              => 'cas.aliyuncs.com',
            'ap-southeast-5'              => 'cas.aliyuncs.com',
            'cn-beijing'                  => 'cas.aliyuncs.com',
            'cn-beijing-finance-1'        => 'cas.aliyuncs.com',
            'cn-beijing-finance-pop'      => 'cas.aliyuncs.com',
            'cn-beijing-gov-1'            => 'cas.aliyuncs.com',
            'cn-beijing-nu16-b01'         => 'cas.aliyuncs.com',
            'cn-chengdu'                  => 'cas.aliyuncs.com',
            'cn-edge-1'                   => 'cas.aliyuncs.com',
            'cn-fujian'                   => 'cas.aliyuncs.com',
            'cn-haidian-cm12-c01'         => 'cas.aliyuncs.com',
            'cn-hangzhou-bj-b01'          => 'cas.aliyuncs.com',
            'cn-hangzhou-finance'         => 'cas.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'cas.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'cas.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'cas.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'cas.aliyuncs.com',
            'cn-hangzhou-test-306'        => 'cas.aliyuncs.com',
            'cn-hongkong'                 => 'cas.aliyuncs.com',
            'cn-hongkong-finance-pop'     => 'cas.aliyuncs.com',
            'cn-huhehaote'                => 'cas.aliyuncs.com',
            'cn-north-2-gov-1'            => 'cas.aliyuncs.com',
            'cn-qingdao'                  => 'cas.aliyuncs.com',
            'cn-qingdao-nebula'           => 'cas.aliyuncs.com',
            'cn-shanghai'                 => 'cas.aliyuncs.com',
            'cn-shanghai-et15-b01'        => 'cas.aliyuncs.com',
            'cn-shanghai-et2-b01'         => 'cas.aliyuncs.com',
            'cn-shanghai-finance-1'       => 'cas.aliyuncs.com',
            'cn-shanghai-inner'           => 'cas.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'cas.aliyuncs.com',
            'cn-shenzhen'                 => 'cas.aliyuncs.com',
            'cn-shenzhen-finance-1'       => 'cas.aliyuncs.com',
            'cn-shenzhen-inner'           => 'cas.aliyuncs.com',
            'cn-shenzhen-st4-d01'         => 'cas.aliyuncs.com',
            'cn-shenzhen-su18-b01'        => 'cas.aliyuncs.com',
            'cn-wuhan'                    => 'cas.aliyuncs.com',
            'cn-yushanfang'               => 'cas.aliyuncs.com',
            'cn-zhangbei-na61-b01'        => 'cas.aliyuncs.com',
            'cn-zhangjiakou'              => 'cas.aliyuncs.com',
            'cn-zhangjiakou-na62-a01'     => 'cas.aliyuncs.com',
            'cn-zhengzhou-nebula-1'       => 'cas.aliyuncs.com',
            'eu-west-1'                   => 'cas.aliyuncs.com',
            'eu-west-1-oxs'               => 'cas.aliyuncs.com',
            'rus-west-1-pop'              => 'cas.aliyuncs.com',
            'us-east-1'                   => 'cas.aliyuncs.com',
            'us-west-1'                   => 'cas.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('cas', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param CreateCertificateWithExtensionRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return CreateCertificateWithExtensionResponse
     */
    public function createCertificateWithExtensionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                             = [];
        $query['AfterTime']                = $request->afterTime;
        $query['AlgorithmKeySize']         = $request->algorithmKeySize;
        $query['AliasName']                = $request->aliasName;
        $query['AppendCrl']                = $request->appendCrl;
        $query['BasicConstraintsCritical'] = $request->basicConstraintsCritical;
        $query['BeforeTime']               = $request->beforeTime;
        $query['CertType']                 = $request->certType;
        $query['CommonName']               = $request->commonName;
        $query['CountryCode']              = $request->countryCode;
        $query['CsrPemString']             = $request->csrPemString;
        $query['Locality']                 = $request->locality;
        $query['Organization']             = $request->organization;
        $query['OrganizationUnit']         = $request->organizationUnit;
        $query['ParentIdentifier']         = $request->parentIdentifier;
        $query['Sans']                     = $request->sans;
        $query['State']                    = $request->state;
        $req                               = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CreateCertificateWithExtension',
            'version'     => '2020-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateCertificateWithExtensionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateCertificateWithExtensionRequest $request
     *
     * @return CreateCertificateWithExtensionResponse
     */
    public function createCertificateWithExtension($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCertificateWithExtensionWithOptions($request, $runtime);
    }

    /**
     * @param CreateClientCertificateRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateClientCertificateResponse
     */
    public function createClientCertificateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                     = [];
        $query['AfterTime']        = $request->afterTime;
        $query['Algorithm']        = $request->algorithm;
        $query['BeforeTime']       = $request->beforeTime;
        $query['CommonName']       = $request->commonName;
        $query['Days']             = $request->days;
        $query['ParentIdentifier'] = $request->parentIdentifier;
        $query['SanType']          = $request->sanType;
        $query['SanValue']         = $request->sanValue;
        $req                       = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CreateClientCertificate',
            'version'     => '2020-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateClientCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateClientCertificateRequest $request
     *
     * @return CreateClientCertificateResponse
     */
    public function createClientCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createClientCertificateWithOptions($request, $runtime);
    }

    /**
     * @param CreateClientCertificateWithCsrRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return CreateClientCertificateWithCsrResponse
     */
    public function createClientCertificateWithCsrWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                     = [];
        $query['AfterTime']        = $request->afterTime;
        $query['BeforeTime']       = $request->beforeTime;
        $query['Csr']              = $request->csr;
        $query['Days']             = $request->days;
        $query['ParentIdentifier'] = $request->parentIdentifier;
        $query['SanType']          = $request->sanType;
        $query['SanValue']         = $request->sanValue;
        $req                       = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CreateClientCertificateWithCsr',
            'version'     => '2020-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateClientCertificateWithCsrResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateClientCertificateWithCsrRequest $request
     *
     * @return CreateClientCertificateWithCsrResponse
     */
    public function createClientCertificateWithCsr($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createClientCertificateWithCsrWithOptions($request, $runtime);
    }

    /**
     * @param CreateRevokeClientCertificateRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return CreateRevokeClientCertificateResponse
     */
    public function createRevokeClientCertificateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query               = [];
        $query['Identifier'] = $request->identifier;
        $req                 = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CreateRevokeClientCertificate',
            'version'     => '2020-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateRevokeClientCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateRevokeClientCertificateRequest $request
     *
     * @return CreateRevokeClientCertificateResponse
     */
    public function createRevokeClientCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRevokeClientCertificateWithOptions($request, $runtime);
    }

    /**
     * @param CreateRootCACertificateRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateRootCACertificateResponse
     */
    public function createRootCACertificateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                     = [];
        $query['Algorithm']        = $request->algorithm;
        $query['CommonName']       = $request->commonName;
        $query['CountryCode']      = $request->countryCode;
        $query['Locality']         = $request->locality;
        $query['Organization']     = $request->organization;
        $query['OrganizationUnit'] = $request->organizationUnit;
        $query['State']            = $request->state;
        $query['Years']            = $request->years;
        $req                       = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CreateRootCACertificate',
            'version'     => '2020-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateRootCACertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateRootCACertificateRequest $request
     *
     * @return CreateRootCACertificateResponse
     */
    public function createRootCACertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRootCACertificateWithOptions($request, $runtime);
    }

    /**
     * @param CreateServerCertificateRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateServerCertificateResponse
     */
    public function createServerCertificateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                     = [];
        $query['AfterTime']        = $request->afterTime;
        $query['Algorithm']        = $request->algorithm;
        $query['BeforeTime']       = $request->beforeTime;
        $query['CommonName']       = $request->commonName;
        $query['Days']             = $request->days;
        $query['Domain']           = $request->domain;
        $query['ParentIdentifier'] = $request->parentIdentifier;
        $req                       = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CreateServerCertificate',
            'version'     => '2020-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateServerCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateServerCertificateRequest $request
     *
     * @return CreateServerCertificateResponse
     */
    public function createServerCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createServerCertificateWithOptions($request, $runtime);
    }

    /**
     * @param CreateServerCertificateWithCsrRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return CreateServerCertificateWithCsrResponse
     */
    public function createServerCertificateWithCsrWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                     = [];
        $query['AfterTime']        = $request->afterTime;
        $query['BeforeTime']       = $request->beforeTime;
        $query['Csr']              = $request->csr;
        $query['Days']             = $request->days;
        $query['Domain']           = $request->domain;
        $query['ParentIdentifier'] = $request->parentIdentifier;
        $req                       = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CreateServerCertificateWithCsr',
            'version'     => '2020-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateServerCertificateWithCsrResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateServerCertificateWithCsrRequest $request
     *
     * @return CreateServerCertificateWithCsrResponse
     */
    public function createServerCertificateWithCsr($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createServerCertificateWithCsrWithOptions($request, $runtime);
    }

    /**
     * @param CreateSubCACertificateRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CreateSubCACertificateResponse
     */
    public function createSubCACertificateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                     = [];
        $query['Algorithm']        = $request->algorithm;
        $query['CommonName']       = $request->commonName;
        $query['CountryCode']      = $request->countryCode;
        $query['Locality']         = $request->locality;
        $query['Organization']     = $request->organization;
        $query['OrganizationUnit'] = $request->organizationUnit;
        $query['ParentIdentifier'] = $request->parentIdentifier;
        $query['State']            = $request->state;
        $query['Years']            = $request->years;
        $req                       = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CreateSubCACertificate',
            'version'     => '2020-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateSubCACertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateSubCACertificateRequest $request
     *
     * @return CreateSubCACertificateResponse
     */
    public function createSubCACertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSubCACertificateWithOptions($request, $runtime);
    }

    /**
     * @param DeleteClientCertificateRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteClientCertificateResponse
     */
    public function deleteClientCertificateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query               = [];
        $query['Identifier'] = $request->identifier;
        $req                 = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DeleteClientCertificate',
            'version'     => '2020-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteClientCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteClientCertificateRequest $request
     *
     * @return DeleteClientCertificateResponse
     */
    public function deleteClientCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteClientCertificateWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCACertificateRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeCACertificateResponse
     */
    public function describeCACertificateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query               = [];
        $query['Identifier'] = $request->identifier;
        $req                 = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeCACertificate',
            'version'     => '2020-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeCACertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeCACertificateRequest $request
     *
     * @return DescribeCACertificateResponse
     */
    public function describeCACertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCACertificateWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return DescribeCACertificateCountResponse
     */
    public function describeCACertificateCountWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'DescribeCACertificateCount',
            'version'     => '2020-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeCACertificateCountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return DescribeCACertificateCountResponse
     */
    public function describeCACertificateCount()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCACertificateCountWithOptions($runtime);
    }

    /**
     * @param DescribeCACertificateListRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeCACertificateListResponse
     */
    public function describeCACertificateListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                = [];
        $query['CurrentPage'] = $request->currentPage;
        $query['ShowSize']    = $request->showSize;
        $req                  = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeCACertificateList',
            'version'     => '2020-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeCACertificateListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeCACertificateListRequest $request
     *
     * @return DescribeCACertificateListResponse
     */
    public function describeCACertificateList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCACertificateListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCertificatePrivateKeyRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeCertificatePrivateKeyResponse
     */
    public function describeCertificatePrivateKeyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                  = [];
        $query['EncryptedCode'] = $request->encryptedCode;
        $query['Identifier']    = $request->identifier;
        $req                    = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeCertificatePrivateKey',
            'version'     => '2020-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeCertificatePrivateKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeCertificatePrivateKeyRequest $request
     *
     * @return DescribeCertificatePrivateKeyResponse
     */
    public function describeCertificatePrivateKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCertificatePrivateKeyWithOptions($request, $runtime);
    }

    /**
     * @param DescribeClientCertificateRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeClientCertificateResponse
     */
    public function describeClientCertificateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query               = [];
        $query['Identifier'] = $request->identifier;
        $req                 = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeClientCertificate',
            'version'     => '2020-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeClientCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeClientCertificateRequest $request
     *
     * @return DescribeClientCertificateResponse
     */
    public function describeClientCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeClientCertificateWithOptions($request, $runtime);
    }

    /**
     * @param DescribeClientCertificateForSerialNumberRequest $request
     * @param RuntimeOptions                                  $runtime
     *
     * @return DescribeClientCertificateForSerialNumberResponse
     */
    public function describeClientCertificateForSerialNumberWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                 = [];
        $query['SerialNumber'] = $request->serialNumber;
        $req                   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeClientCertificateForSerialNumber',
            'version'     => '2020-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeClientCertificateForSerialNumberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeClientCertificateForSerialNumberRequest $request
     *
     * @return DescribeClientCertificateForSerialNumberResponse
     */
    public function describeClientCertificateForSerialNumber($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeClientCertificateForSerialNumberWithOptions($request, $runtime);
    }

    /**
     * @param DescribeClientCertificateStatusRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeClientCertificateStatusResponse
     */
    public function describeClientCertificateStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query               = [];
        $query['Identifier'] = $request->identifier;
        $req                 = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeClientCertificateStatus',
            'version'     => '2020-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeClientCertificateStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeClientCertificateStatusRequest $request
     *
     * @return DescribeClientCertificateStatusResponse
     */
    public function describeClientCertificateStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeClientCertificateStatusWithOptions($request, $runtime);
    }

    /**
     * @param DescribeClientCertificateStatusForSerialNumberRequest $request
     * @param RuntimeOptions                                        $runtime
     *
     * @return DescribeClientCertificateStatusForSerialNumberResponse
     */
    public function describeClientCertificateStatusForSerialNumberWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                 = [];
        $query['SerialNumber'] = $request->serialNumber;
        $req                   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeClientCertificateStatusForSerialNumber',
            'version'     => '2020-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeClientCertificateStatusForSerialNumberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeClientCertificateStatusForSerialNumberRequest $request
     *
     * @return DescribeClientCertificateStatusForSerialNumberResponse
     */
    public function describeClientCertificateStatusForSerialNumber($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeClientCertificateStatusForSerialNumberWithOptions($request, $runtime);
    }

    /**
     * @param GetCAInstanceStatusRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetCAInstanceStatusResponse
     */
    public function getCAInstanceStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query               = [];
        $query['InstanceId'] = $request->instanceId;
        $req                 = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'GetCAInstanceStatus',
            'version'     => '2020-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetCAInstanceStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetCAInstanceStatusRequest $request
     *
     * @return GetCAInstanceStatusResponse
     */
    public function getCAInstanceStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCAInstanceStatusWithOptions($request, $runtime);
    }

    /**
     * @param ListCACertificateLogRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListCACertificateLogResponse
     */
    public function listCACertificateLogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query               = [];
        $query['Identifier'] = $request->identifier;
        $req                 = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ListCACertificateLog',
            'version'     => '2020-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListCACertificateLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListCACertificateLogRequest $request
     *
     * @return ListCACertificateLogResponse
     */
    public function listCACertificateLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCACertificateLogWithOptions($request, $runtime);
    }

    /**
     * @param ListClientCertificateRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListClientCertificateResponse
     */
    public function listClientCertificateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                = [];
        $query['CurrentPage'] = $request->currentPage;
        $query['ShowSize']    = $request->showSize;
        $req                  = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ListClientCertificate',
            'version'     => '2020-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListClientCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListClientCertificateRequest $request
     *
     * @return ListClientCertificateResponse
     */
    public function listClientCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listClientCertificateWithOptions($request, $runtime);
    }

    /**
     * @param ListRevokeCertificateRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListRevokeCertificateResponse
     */
    public function listRevokeCertificateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                = [];
        $query['CurrentPage'] = $request->currentPage;
        $query['ShowSize']    = $request->showSize;
        $req                  = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ListRevokeCertificate',
            'version'     => '2020-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListRevokeCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListRevokeCertificateRequest $request
     *
     * @return ListRevokeCertificateResponse
     */
    public function listRevokeCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRevokeCertificateWithOptions($request, $runtime);
    }

    /**
     * @param UpdateCACertificateStatusRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return UpdateCACertificateStatusResponse
     */
    public function updateCACertificateStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query               = [];
        $query['Identifier'] = $request->identifier;
        $query['Status']     = $request->status;
        $req                 = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'UpdateCACertificateStatus',
            'version'     => '2020-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateCACertificateStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateCACertificateStatusRequest $request
     *
     * @return UpdateCACertificateStatusResponse
     */
    public function updateCACertificateStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCACertificateStatusWithOptions($request, $runtime);
    }
}
