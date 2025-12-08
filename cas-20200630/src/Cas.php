<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200630;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Cas\V20200630\Models\AssignCertificateCountRequest;
use AlibabaCloud\SDK\Cas\V20200630\Models\AssignCertificateCountResponse;
use AlibabaCloud\SDK\Cas\V20200630\Models\CreateClientCertificateRequest;
use AlibabaCloud\SDK\Cas\V20200630\Models\CreateClientCertificateResponse;
use AlibabaCloud\SDK\Cas\V20200630\Models\CreateClientCertificateWithCsrRequest;
use AlibabaCloud\SDK\Cas\V20200630\Models\CreateClientCertificateWithCsrResponse;
use AlibabaCloud\SDK\Cas\V20200630\Models\CreateCustomCertificateRequest;
use AlibabaCloud\SDK\Cas\V20200630\Models\CreateCustomCertificateResponse;
use AlibabaCloud\SDK\Cas\V20200630\Models\CreateExternalCACertificateRequest;
use AlibabaCloud\SDK\Cas\V20200630\Models\CreateExternalCACertificateResponse;
use AlibabaCloud\SDK\Cas\V20200630\Models\CreateExternalCACertificateShrinkRequest;
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
use AlibabaCloud\SDK\Cas\V20200630\Models\DescribeClientCertificateRequest;
use AlibabaCloud\SDK\Cas\V20200630\Models\DescribeClientCertificateResponse;
use AlibabaCloud\SDK\Cas\V20200630\Models\DescribeClientCertificateStatusRequest;
use AlibabaCloud\SDK\Cas\V20200630\Models\DescribeClientCertificateStatusResponse;
use AlibabaCloud\SDK\Cas\V20200630\Models\GetCAInstanceStatusRequest;
use AlibabaCloud\SDK\Cas\V20200630\Models\GetCAInstanceStatusResponse;
use AlibabaCloud\SDK\Cas\V20200630\Models\ListAllEndEntityInstanceRequest;
use AlibabaCloud\SDK\Cas\V20200630\Models\ListAllEndEntityInstanceResponse;
use AlibabaCloud\SDK\Cas\V20200630\Models\ListCertRequest;
use AlibabaCloud\SDK\Cas\V20200630\Models\ListCertResponse;
use AlibabaCloud\SDK\Cas\V20200630\Models\ListClientCertificateRequest;
use AlibabaCloud\SDK\Cas\V20200630\Models\ListClientCertificateResponse;
use AlibabaCloud\SDK\Cas\V20200630\Models\ListPcaCaCertificateRequest;
use AlibabaCloud\SDK\Cas\V20200630\Models\ListPcaCaCertificateResponse;
use AlibabaCloud\SDK\Cas\V20200630\Models\ListRevokeCertificateRequest;
use AlibabaCloud\SDK\Cas\V20200630\Models\ListRevokeCertificateResponse;
use AlibabaCloud\SDK\Cas\V20200630\Models\UpdateCACertificateStatusRequest;
use AlibabaCloud\SDK\Cas\V20200630\Models\UpdateCACertificateStatusResponse;
use AlibabaCloud\SDK\Cas\V20200630\Models\UpdatePcaCertificateRequest;
use AlibabaCloud\SDK\Cas\V20200630\Models\UpdatePcaCertificateResponse;
use AlibabaCloud\SDK\Cas\V20200630\Models\UploadPcaCertToCasRequest;
use AlibabaCloud\SDK\Cas\V20200630\Models\UploadPcaCertToCasResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Cas extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap = [
            'cn-hangzhou' => 'cas.aliyuncs.com',
            'ap-northeast-2-pop' => 'cas.aliyuncs.com',
            'ap-southeast-3' => 'cas.aliyuncs.com',
            'ap-southeast-5' => 'cas.aliyuncs.com',
            'cn-beijing' => 'cas.aliyuncs.com',
            'cn-beijing-finance-1' => 'cas.aliyuncs.com',
            'cn-beijing-finance-pop' => 'cas.aliyuncs.com',
            'cn-beijing-gov-1' => 'cas.aliyuncs.com',
            'cn-beijing-nu16-b01' => 'cas.aliyuncs.com',
            'cn-chengdu' => 'cas.aliyuncs.com',
            'cn-edge-1' => 'cas.aliyuncs.com',
            'cn-fujian' => 'cas.aliyuncs.com',
            'cn-haidian-cm12-c01' => 'cas.aliyuncs.com',
            'cn-hangzhou-bj-b01' => 'cas.aliyuncs.com',
            'cn-hangzhou-finance' => 'cas.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'cas.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'cas.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'cas.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'cas.aliyuncs.com',
            'cn-hangzhou-test-306' => 'cas.aliyuncs.com',
            'cn-hongkong' => 'cas.aliyuncs.com',
            'cn-hongkong-finance-pop' => 'cas.aliyuncs.com',
            'cn-huhehaote' => 'cas.aliyuncs.com',
            'cn-huhehaote-nebula-1' => 'cas.aliyuncs.com',
            'cn-north-2-gov-1' => 'cas.aliyuncs.com',
            'cn-qingdao' => 'cas.aliyuncs.com',
            'cn-qingdao-nebula' => 'cas.aliyuncs.com',
            'cn-shanghai' => 'cas.aliyuncs.com',
            'cn-shanghai-et15-b01' => 'cas.aliyuncs.com',
            'cn-shanghai-et2-b01' => 'cas.aliyuncs.com',
            'cn-shanghai-finance-1' => 'cas.aliyuncs.com',
            'cn-shanghai-inner' => 'cas.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'cas.aliyuncs.com',
            'cn-shenzhen' => 'cas.aliyuncs.com',
            'cn-shenzhen-finance-1' => 'cas.aliyuncs.com',
            'cn-shenzhen-inner' => 'cas.aliyuncs.com',
            'cn-shenzhen-st4-d01' => 'cas.aliyuncs.com',
            'cn-shenzhen-su18-b01' => 'cas.aliyuncs.com',
            'cn-wuhan' => 'cas.aliyuncs.com',
            'cn-wulanchabu' => 'cas.aliyuncs.com',
            'cn-yushanfang' => 'cas.aliyuncs.com',
            'cn-zhangbei' => 'cas.aliyuncs.com',
            'cn-zhangbei-na61-b01' => 'cas.aliyuncs.com',
            'cn-zhangjiakou' => 'cas.aliyuncs.com',
            'cn-zhangjiakou-na62-a01' => 'cas.aliyuncs.com',
            'cn-zhengzhou-nebula-1' => 'cas.aliyuncs.com',
            'eu-west-1' => 'cas.aliyuncs.com',
            'eu-west-1-oxs' => 'cas.aliyuncs.com',
            'rus-west-1-pop' => 'cas.aliyuncs.com',
            'us-east-1' => 'cas.aliyuncs.com',
            'us-west-1' => 'cas.aliyuncs.com',
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
        if (null !== $endpoint) {
            return $endpoint;
        }

        if (null !== $endpointMap && null !== @$endpointMap[$regionId]) {
            return @$endpointMap[$regionId];
        }

        return Utils::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * 分配证书使用数量.
     *
     * @param request - AssignCertificateCountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AssignCertificateCountResponse
     *
     * @param AssignCertificateCountRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return AssignCertificateCountResponse
     */
    public function assignCertificateCountWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->certTotalCount) {
            @$query['CertTotalCount'] = $request->certTotalCount;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AssignCertificateCount',
            'version' => '2020-06-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AssignCertificateCountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 分配证书使用数量.
     *
     * @param request - AssignCertificateCountRequest
     *
     * @returns AssignCertificateCountResponse
     *
     * @param AssignCertificateCountRequest $request
     *
     * @return AssignCertificateCountResponse
     */
    public function assignCertificateCount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->assignCertificateCountWithOptions($request, $runtime);
    }

    /**
     * Issues a client certificate by using a system-generated certificate signing request (CSR) file.
     *
     * @remarks
     * Before you call this operation, make sure that you have created a root certificate authority (CA) certificate by calling the [CreateRootCACertificate](~~CreateRootCACertificate~~) operation and an intermediate CA certificate by calling the [CreateSubCACertificate](~~CreateRootCACertificate~~) operation. Only intermediate CA certificates can issue client certificates.
     * ## QPS limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - CreateClientCertificateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateClientCertificateResponse
     *
     * @param CreateClientCertificateRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateClientCertificateResponse
     */
    public function createClientCertificateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->afterTime) {
            @$query['AfterTime'] = $request->afterTime;
        }

        if (null !== $request->algorithm) {
            @$query['Algorithm'] = $request->algorithm;
        }

        if (null !== $request->beforeTime) {
            @$query['BeforeTime'] = $request->beforeTime;
        }

        if (null !== $request->commonName) {
            @$query['CommonName'] = $request->commonName;
        }

        if (null !== $request->country) {
            @$query['Country'] = $request->country;
        }

        if (null !== $request->days) {
            @$query['Days'] = $request->days;
        }

        if (null !== $request->enableCrl) {
            @$query['EnableCrl'] = $request->enableCrl;
        }

        if (null !== $request->immediately) {
            @$query['Immediately'] = $request->immediately;
        }

        if (null !== $request->locality) {
            @$query['Locality'] = $request->locality;
        }

        if (null !== $request->months) {
            @$query['Months'] = $request->months;
        }

        if (null !== $request->organization) {
            @$query['Organization'] = $request->organization;
        }

        if (null !== $request->organizationUnit) {
            @$query['OrganizationUnit'] = $request->organizationUnit;
        }

        if (null !== $request->parentIdentifier) {
            @$query['ParentIdentifier'] = $request->parentIdentifier;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->sanType) {
            @$query['SanType'] = $request->sanType;
        }

        if (null !== $request->sanValue) {
            @$query['SanValue'] = $request->sanValue;
        }

        if (null !== $request->state) {
            @$query['State'] = $request->state;
        }

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        if (null !== $request->years) {
            @$query['Years'] = $request->years;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateClientCertificate',
            'version' => '2020-06-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateClientCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Issues a client certificate by using a system-generated certificate signing request (CSR) file.
     *
     * @remarks
     * Before you call this operation, make sure that you have created a root certificate authority (CA) certificate by calling the [CreateRootCACertificate](~~CreateRootCACertificate~~) operation and an intermediate CA certificate by calling the [CreateSubCACertificate](~~CreateRootCACertificate~~) operation. Only intermediate CA certificates can issue client certificates.
     * ## QPS limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - CreateClientCertificateRequest
     *
     * @returns CreateClientCertificateResponse
     *
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
     * Issues a client certificate by using a custom certificate signing request (CSR) file.
     *
     * @remarks
     * Before you call this operation, make sure that you have created a root certificate authority (CA) certificate by calling the [CreateRootCACertificate](https://help.aliyun.com/document_detail/328093.html) operation and an intermediate CA certificate by calling the [CreateSubCACertificate](https://help.aliyun.com/document_detail/328094.html) operation. Only intermediate CA certificates can be used to issue client certificates.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - CreateClientCertificateWithCsrRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateClientCertificateWithCsrResponse
     *
     * @param CreateClientCertificateWithCsrRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return CreateClientCertificateWithCsrResponse
     */
    public function createClientCertificateWithCsrWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->afterTime) {
            @$query['AfterTime'] = $request->afterTime;
        }

        if (null !== $request->algorithm) {
            @$query['Algorithm'] = $request->algorithm;
        }

        if (null !== $request->beforeTime) {
            @$query['BeforeTime'] = $request->beforeTime;
        }

        if (null !== $request->commonName) {
            @$query['CommonName'] = $request->commonName;
        }

        if (null !== $request->country) {
            @$query['Country'] = $request->country;
        }

        if (null !== $request->csr) {
            @$query['Csr'] = $request->csr;
        }

        if (null !== $request->days) {
            @$query['Days'] = $request->days;
        }

        if (null !== $request->enableCrl) {
            @$query['EnableCrl'] = $request->enableCrl;
        }

        if (null !== $request->immediately) {
            @$query['Immediately'] = $request->immediately;
        }

        if (null !== $request->locality) {
            @$query['Locality'] = $request->locality;
        }

        if (null !== $request->months) {
            @$query['Months'] = $request->months;
        }

        if (null !== $request->organization) {
            @$query['Organization'] = $request->organization;
        }

        if (null !== $request->organizationUnit) {
            @$query['OrganizationUnit'] = $request->organizationUnit;
        }

        if (null !== $request->parentIdentifier) {
            @$query['ParentIdentifier'] = $request->parentIdentifier;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->sanType) {
            @$query['SanType'] = $request->sanType;
        }

        if (null !== $request->sanValue) {
            @$query['SanValue'] = $request->sanValue;
        }

        if (null !== $request->state) {
            @$query['State'] = $request->state;
        }

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        if (null !== $request->years) {
            @$query['Years'] = $request->years;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateClientCertificateWithCsr',
            'version' => '2020-06-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateClientCertificateWithCsrResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Issues a client certificate by using a custom certificate signing request (CSR) file.
     *
     * @remarks
     * Before you call this operation, make sure that you have created a root certificate authority (CA) certificate by calling the [CreateRootCACertificate](https://help.aliyun.com/document_detail/328093.html) operation and an intermediate CA certificate by calling the [CreateSubCACertificate](https://help.aliyun.com/document_detail/328094.html) operation. Only intermediate CA certificates can be used to issue client certificates.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - CreateClientCertificateWithCsrRequest
     *
     * @returns CreateClientCertificateWithCsrResponse
     *
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
     * Issues a certificate based on the specified key usage, extended key usage, and name and alias of the entity that uses the certificate.
     *
     * @remarks
     * By default, the name of the entity is obtained from the certificate signing request (CSR) of the certificate that you want to issue. If you specify a different name for the entity, the name of the entity in the CSR becomes invalid. The specified name is used to issue the certificate.
     * You must specify the key usage and extended key usage based on the certificate type. The following list describes common certificate types:
     * *   Server certificate
     * Key usage: digitalSignature or keyEncipherment
     * Extended key usage: serverAuth
     * *   Client certificate
     * Key usage: digitalSignature or keyEncipherment
     * Extended key usage: clientAuth
     * *   Mutual Transport Layer Security (TLS) authentication certificate
     * Key usage: digitalSignature or keyEncipherment
     * Extended key usage: serverAuth or clientAuth
     * *   Email certificate
     * Key usage: digitalSignature or contentCommitment
     * Extended key usage: emailProtection
     * Note: Compliant certificate authorities (CAs) are managed by third-party authorities. This operation is not supported for compliant CAs.
     *
     * @param request - CreateCustomCertificateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateCustomCertificateResponse
     *
     * @param CreateCustomCertificateRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateCustomCertificateResponse
     */
    public function createCustomCertificateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apiPassthrough) {
            @$query['ApiPassthrough'] = $request->apiPassthrough;
        }

        if (null !== $request->csr) {
            @$query['Csr'] = $request->csr;
        }

        if (null !== $request->enableCrl) {
            @$query['EnableCrl'] = $request->enableCrl;
        }

        if (null !== $request->immediately) {
            @$query['Immediately'] = $request->immediately;
        }

        if (null !== $request->parentIdentifier) {
            @$query['ParentIdentifier'] = $request->parentIdentifier;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        if (null !== $request->validity) {
            @$query['Validity'] = $request->validity;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateCustomCertificate',
            'version' => '2020-06-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateCustomCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Issues a certificate based on the specified key usage, extended key usage, and name and alias of the entity that uses the certificate.
     *
     * @remarks
     * By default, the name of the entity is obtained from the certificate signing request (CSR) of the certificate that you want to issue. If you specify a different name for the entity, the name of the entity in the CSR becomes invalid. The specified name is used to issue the certificate.
     * You must specify the key usage and extended key usage based on the certificate type. The following list describes common certificate types:
     * *   Server certificate
     * Key usage: digitalSignature or keyEncipherment
     * Extended key usage: serverAuth
     * *   Client certificate
     * Key usage: digitalSignature or keyEncipherment
     * Extended key usage: clientAuth
     * *   Mutual Transport Layer Security (TLS) authentication certificate
     * Key usage: digitalSignature or keyEncipherment
     * Extended key usage: serverAuth or clientAuth
     * *   Email certificate
     * Key usage: digitalSignature or contentCommitment
     * Extended key usage: emailProtection
     * Note: Compliant certificate authorities (CAs) are managed by third-party authorities. This operation is not supported for compliant CAs.
     *
     * @param request - CreateCustomCertificateRequest
     *
     * @returns CreateCustomCertificateResponse
     *
     * @param CreateCustomCertificateRequest $request
     *
     * @return CreateCustomCertificateResponse
     */
    public function createCustomCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCustomCertificateWithOptions($request, $runtime);
    }

    /**
     * 创建外部子CA证书.
     *
     * @param tmpReq - CreateExternalCACertificateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateExternalCACertificateResponse
     *
     * @param CreateExternalCACertificateRequest $tmpReq
     * @param RuntimeOptions                     $runtime
     *
     * @return CreateExternalCACertificateResponse
     */
    public function createExternalCACertificateWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateExternalCACertificateShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->apiPassthrough) {
            $request->apiPassthroughShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->apiPassthrough, 'ApiPassthrough', 'json');
        }

        $query = [];
        if (null !== $request->apiPassthroughShrink) {
            @$query['ApiPassthrough'] = $request->apiPassthroughShrink;
        }

        if (null !== $request->csr) {
            @$query['Csr'] = $request->csr;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        if (null !== $request->validity) {
            @$query['Validity'] = $request->validity;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateExternalCACertificate',
            'version' => '2020-06-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateExternalCACertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建外部子CA证书.
     *
     * @param request - CreateExternalCACertificateRequest
     *
     * @returns CreateExternalCACertificateResponse
     *
     * @param CreateExternalCACertificateRequest $request
     *
     * @return CreateExternalCACertificateResponse
     */
    public function createExternalCACertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createExternalCACertificateWithOptions($request, $runtime);
    }

    /**
     * Revokes a client certificate or a server certificate.
     *
     * @remarks
     * After a client certificate or a server certificate is revoked, the client or the server on which the certificate is installed cannot establish HTTPS connections with other devices.
     * After a client certificate or a server certificate is revoked, you can call the [DeleteClientCertificate](https://help.aliyun.com/document_detail/330880.html) operation to permanently delete the certificate.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - CreateRevokeClientCertificateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateRevokeClientCertificateResponse
     *
     * @param CreateRevokeClientCertificateRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return CreateRevokeClientCertificateResponse
     */
    public function createRevokeClientCertificateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->identifier) {
            @$query['Identifier'] = $request->identifier;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateRevokeClientCertificate',
            'version' => '2020-06-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateRevokeClientCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Revokes a client certificate or a server certificate.
     *
     * @remarks
     * After a client certificate or a server certificate is revoked, the client or the server on which the certificate is installed cannot establish HTTPS connections with other devices.
     * After a client certificate or a server certificate is revoked, you can call the [DeleteClientCertificate](https://help.aliyun.com/document_detail/330880.html) operation to permanently delete the certificate.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - CreateRevokeClientCertificateRequest
     *
     * @returns CreateRevokeClientCertificateResponse
     *
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
     * Creates a root certificate authority (CA) certificate.
     *
     * @remarks
     * You can call the CreateRootCACertificate operation to create a self-signed root CA certificate. A root CA certificate is the trust anchor in a chain of trust for private certificates that are used within an enterprise. You must create a root CA certificate before you can use the root CA certificate to issue intermediate CA certificates. Then, you can use the intermediate CA certificates to issue client certificates and server certificates.
     * Before you call this operation, make sure that you have purchased a private root CA instance by using the [Certificate Management Service console](https://yundun.console.aliyun.com/?p=cas#/pca/rootlist). For more information, see [Create a private CA](https://help.aliyun.com/document_detail/208553.html).
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - CreateRootCACertificateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateRootCACertificateResponse
     *
     * @param CreateRootCACertificateRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateRootCACertificateResponse
     */
    public function createRootCACertificateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->algorithm) {
            @$query['Algorithm'] = $request->algorithm;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->commonName) {
            @$query['CommonName'] = $request->commonName;
        }

        if (null !== $request->countryCode) {
            @$query['CountryCode'] = $request->countryCode;
        }

        if (null !== $request->locality) {
            @$query['Locality'] = $request->locality;
        }

        if (null !== $request->organization) {
            @$query['Organization'] = $request->organization;
        }

        if (null !== $request->organizationUnit) {
            @$query['OrganizationUnit'] = $request->organizationUnit;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->state) {
            @$query['State'] = $request->state;
        }

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        if (null !== $request->years) {
            @$query['Years'] = $request->years;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateRootCACertificate',
            'version' => '2020-06-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateRootCACertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a root certificate authority (CA) certificate.
     *
     * @remarks
     * You can call the CreateRootCACertificate operation to create a self-signed root CA certificate. A root CA certificate is the trust anchor in a chain of trust for private certificates that are used within an enterprise. You must create a root CA certificate before you can use the root CA certificate to issue intermediate CA certificates. Then, you can use the intermediate CA certificates to issue client certificates and server certificates.
     * Before you call this operation, make sure that you have purchased a private root CA instance by using the [Certificate Management Service console](https://yundun.console.aliyun.com/?p=cas#/pca/rootlist). For more information, see [Create a private CA](https://help.aliyun.com/document_detail/208553.html).
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - CreateRootCACertificateRequest
     *
     * @returns CreateRootCACertificateResponse
     *
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
     * Issues a server certificate by using a system-generated certificate signing request (CSR) file.
     *
     * @remarks
     * Before you call this operation, make sure that you have created a root certificate authority (CA) certificate by calling the [CreateRootCACertificate](https://help.aliyun.com/document_detail/328093.html) operation and an intermediate CA certificate by calling the [CreateSubCACertificate](https://help.aliyun.com/document_detail/328094.html) operation. Only intermediate CA certificates can be used to issue server certificates.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - CreateServerCertificateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateServerCertificateResponse
     *
     * @param CreateServerCertificateRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateServerCertificateResponse
     */
    public function createServerCertificateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->afterTime) {
            @$query['AfterTime'] = $request->afterTime;
        }

        if (null !== $request->algorithm) {
            @$query['Algorithm'] = $request->algorithm;
        }

        if (null !== $request->beforeTime) {
            @$query['BeforeTime'] = $request->beforeTime;
        }

        if (null !== $request->commonName) {
            @$query['CommonName'] = $request->commonName;
        }

        if (null !== $request->country) {
            @$query['Country'] = $request->country;
        }

        if (null !== $request->days) {
            @$query['Days'] = $request->days;
        }

        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->enableCrl) {
            @$query['EnableCrl'] = $request->enableCrl;
        }

        if (null !== $request->immediately) {
            @$query['Immediately'] = $request->immediately;
        }

        if (null !== $request->locality) {
            @$query['Locality'] = $request->locality;
        }

        if (null !== $request->months) {
            @$query['Months'] = $request->months;
        }

        if (null !== $request->organization) {
            @$query['Organization'] = $request->organization;
        }

        if (null !== $request->organizationUnit) {
            @$query['OrganizationUnit'] = $request->organizationUnit;
        }

        if (null !== $request->parentIdentifier) {
            @$query['ParentIdentifier'] = $request->parentIdentifier;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->state) {
            @$query['State'] = $request->state;
        }

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        if (null !== $request->years) {
            @$query['Years'] = $request->years;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateServerCertificate',
            'version' => '2020-06-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateServerCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Issues a server certificate by using a system-generated certificate signing request (CSR) file.
     *
     * @remarks
     * Before you call this operation, make sure that you have created a root certificate authority (CA) certificate by calling the [CreateRootCACertificate](https://help.aliyun.com/document_detail/328093.html) operation and an intermediate CA certificate by calling the [CreateSubCACertificate](https://help.aliyun.com/document_detail/328094.html) operation. Only intermediate CA certificates can be used to issue server certificates.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - CreateServerCertificateRequest
     *
     * @returns CreateServerCertificateResponse
     *
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
     * Issues a server certificate by using a custom certificate signing request (CSR) file.
     *
     * @remarks
     * ## Usage notes
     * Before you call this operation, make sure that you have created a root certificate authority (CA) certificate by calling the [CreateRootCACertificate](https://help.aliyun.com/document_detail/328093.html) operation and an intermediate CA certificate by calling the [CreateSubCACertificate](https://help.aliyun.com/document_detail/328094.html) operation. Only intermediate CA certificates can be used to issue server certificates.
     *
     * @param request - CreateServerCertificateWithCsrRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateServerCertificateWithCsrResponse
     *
     * @param CreateServerCertificateWithCsrRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return CreateServerCertificateWithCsrResponse
     */
    public function createServerCertificateWithCsrWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->afterTime) {
            @$query['AfterTime'] = $request->afterTime;
        }

        if (null !== $request->algorithm) {
            @$query['Algorithm'] = $request->algorithm;
        }

        if (null !== $request->beforeTime) {
            @$query['BeforeTime'] = $request->beforeTime;
        }

        if (null !== $request->commonName) {
            @$query['CommonName'] = $request->commonName;
        }

        if (null !== $request->country) {
            @$query['Country'] = $request->country;
        }

        if (null !== $request->csr) {
            @$query['Csr'] = $request->csr;
        }

        if (null !== $request->days) {
            @$query['Days'] = $request->days;
        }

        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->enableCrl) {
            @$query['EnableCrl'] = $request->enableCrl;
        }

        if (null !== $request->immediately) {
            @$query['Immediately'] = $request->immediately;
        }

        if (null !== $request->locality) {
            @$query['Locality'] = $request->locality;
        }

        if (null !== $request->months) {
            @$query['Months'] = $request->months;
        }

        if (null !== $request->organization) {
            @$query['Organization'] = $request->organization;
        }

        if (null !== $request->organizationUnit) {
            @$query['OrganizationUnit'] = $request->organizationUnit;
        }

        if (null !== $request->parentIdentifier) {
            @$query['ParentIdentifier'] = $request->parentIdentifier;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->state) {
            @$query['State'] = $request->state;
        }

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        if (null !== $request->years) {
            @$query['Years'] = $request->years;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateServerCertificateWithCsr',
            'version' => '2020-06-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateServerCertificateWithCsrResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Issues a server certificate by using a custom certificate signing request (CSR) file.
     *
     * @remarks
     * ## Usage notes
     * Before you call this operation, make sure that you have created a root certificate authority (CA) certificate by calling the [CreateRootCACertificate](https://help.aliyun.com/document_detail/328093.html) operation and an intermediate CA certificate by calling the [CreateSubCACertificate](https://help.aliyun.com/document_detail/328094.html) operation. Only intermediate CA certificates can be used to issue server certificates.
     *
     * @param request - CreateServerCertificateWithCsrRequest
     *
     * @returns CreateServerCertificateWithCsrResponse
     *
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
     * Creates an intermediate certificate authority (CA) certificate.
     *
     * @remarks
     * You can call this operation to issue an intermediate certificate authority (CA) certificate by using an existing root CA certificate. Intermediate CA certificates can be used to issue client certificates and server certificates.
     * Before you call this operation, make sure that you have issued a root CA certificate by calling the [CreateRootCACertificate] operation.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - CreateSubCACertificateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateSubCACertificateResponse
     *
     * @param CreateSubCACertificateRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CreateSubCACertificateResponse
     */
    public function createSubCACertificateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->algorithm) {
            @$query['Algorithm'] = $request->algorithm;
        }

        if (null !== $request->commonName) {
            @$query['CommonName'] = $request->commonName;
        }

        if (null !== $request->countryCode) {
            @$query['CountryCode'] = $request->countryCode;
        }

        if (null !== $request->crlDay) {
            @$query['CrlDay'] = $request->crlDay;
        }

        if (null !== $request->enableCrl) {
            @$query['EnableCrl'] = $request->enableCrl;
        }

        if (null !== $request->extendedKeyUsages) {
            @$query['ExtendedKeyUsages'] = $request->extendedKeyUsages;
        }

        if (null !== $request->locality) {
            @$query['Locality'] = $request->locality;
        }

        if (null !== $request->organization) {
            @$query['Organization'] = $request->organization;
        }

        if (null !== $request->organizationUnit) {
            @$query['OrganizationUnit'] = $request->organizationUnit;
        }

        if (null !== $request->parentIdentifier) {
            @$query['ParentIdentifier'] = $request->parentIdentifier;
        }

        if (null !== $request->pathLenConstraint) {
            @$query['PathLenConstraint'] = $request->pathLenConstraint;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->state) {
            @$query['State'] = $request->state;
        }

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        if (null !== $request->years) {
            @$query['Years'] = $request->years;
        }

        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateSubCACertificate',
            'version' => '2020-06-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateSubCACertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an intermediate certificate authority (CA) certificate.
     *
     * @remarks
     * You can call this operation to issue an intermediate certificate authority (CA) certificate by using an existing root CA certificate. Intermediate CA certificates can be used to issue client certificates and server certificates.
     * Before you call this operation, make sure that you have issued a root CA certificate by calling the [CreateRootCACertificate] operation.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - CreateSubCACertificateRequest
     *
     * @returns CreateSubCACertificateResponse
     *
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
     * Deletes a client certificate or a server certificate that is revoked.
     *
     * @remarks
     * Before you call this operation, you must call the [CreateRevokeClientCertificate](https://help.aliyun.com/document_detail/330876.html) operation to revoke a client certificate or a server certificate.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - DeleteClientCertificateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteClientCertificateResponse
     *
     * @param DeleteClientCertificateRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteClientCertificateResponse
     */
    public function deleteClientCertificateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->identifier) {
            @$query['Identifier'] = $request->identifier;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteClientCertificate',
            'version' => '2020-06-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteClientCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a client certificate or a server certificate that is revoked.
     *
     * @remarks
     * Before you call this operation, you must call the [CreateRevokeClientCertificate](https://help.aliyun.com/document_detail/330876.html) operation to revoke a client certificate or a server certificate.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - DeleteClientCertificateRequest
     *
     * @returns DeleteClientCertificateResponse
     *
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
     * Queries the details about a root certificate authority (CA) certificate or an intermediate CA certificate.
     *
     * @remarks
     * You can call the DescribeCACertificate operation to query the details about a root CA certificate or an intermediate CA certificate by using the unique identifier of the root CA certificate or intermediate CA certificate. The details include the serial number, user information, and content of a CA certificate.
     * Before you call this operation, make sure that you have created a root CA by calling the [CreateRootCACertificate] operation or an intermediate CA certificate by calling the [CreateSubCACertificate] operation.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - DescribeCACertificateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCACertificateResponse
     *
     * @param DescribeCACertificateRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeCACertificateResponse
     */
    public function describeCACertificateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->identifier) {
            @$query['Identifier'] = $request->identifier;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCACertificate',
            'version' => '2020-06-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCACertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details about a root certificate authority (CA) certificate or an intermediate CA certificate.
     *
     * @remarks
     * You can call the DescribeCACertificate operation to query the details about a root CA certificate or an intermediate CA certificate by using the unique identifier of the root CA certificate or intermediate CA certificate. The details include the serial number, user information, and content of a CA certificate.
     * Before you call this operation, make sure that you have created a root CA by calling the [CreateRootCACertificate] operation or an intermediate CA certificate by calling the [CreateSubCACertificate] operation.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - DescribeCACertificateRequest
     *
     * @returns DescribeCACertificateResponse
     *
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
     * Queries the number of certificate authority (CA) certificates that you create.
     *
     * @remarks
     * You can call the DescribeCACertificateCount operation to query the number of created CA certificates, which includes root CA certificates and intermediate CA certificates.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - DescribeCACertificateCountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCACertificateCountResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return DescribeCACertificateCountResponse
     */
    public function describeCACertificateCountWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'DescribeCACertificateCount',
            'version' => '2020-06-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCACertificateCountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the number of certificate authority (CA) certificates that you create.
     *
     * @remarks
     * You can call the DescribeCACertificateCount operation to query the number of created CA certificates, which includes root CA certificates and intermediate CA certificates.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @returns DescribeCACertificateCountResponse
     *
     * @return DescribeCACertificateCountResponse
     */
    public function describeCACertificateCount()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCACertificateCountWithOptions($runtime);
    }

    /**
     * Queries the details about all root certificate authority (CA) certificates and intermediate CA certificates.
     *
     * @remarks
     * You can call the DescribeCACertificateList operation to perform a paged query of the details about all CA certificates that you create. The details include the unique identifier, serial number, user information, and content of each root CA certificate or intermediate CA certificate.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - DescribeCACertificateListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCACertificateListResponse
     *
     * @param DescribeCACertificateListRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeCACertificateListResponse
     */
    public function describeCACertificateListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->caStatus) {
            @$query['CaStatus'] = $request->caStatus;
        }

        if (null !== $request->certType) {
            @$query['CertType'] = $request->certType;
        }

        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->identifier) {
            @$query['Identifier'] = $request->identifier;
        }

        if (null !== $request->issuerType) {
            @$query['IssuerType'] = $request->issuerType;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->showSize) {
            @$query['ShowSize'] = $request->showSize;
        }

        if (null !== $request->validStatus) {
            @$query['ValidStatus'] = $request->validStatus;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCACertificateList',
            'version' => '2020-06-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCACertificateListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details about all root certificate authority (CA) certificates and intermediate CA certificates.
     *
     * @remarks
     * You can call the DescribeCACertificateList operation to perform a paged query of the details about all CA certificates that you create. The details include the unique identifier, serial number, user information, and content of each root CA certificate or intermediate CA certificate.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - DescribeCACertificateListRequest
     *
     * @returns DescribeCACertificateListResponse
     *
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
     * Queries the encrypted private key of a client certificate or a server certificate.
     *
     * @remarks
     * ## Usage notes
     * You can call the DescribeCertificatePrivateKey operation to obtain the encrypted private key of a client certificate or a server certificate. The certificate is issued based on a system-generated certificate signing request (CSR). Before you call this operation, make sure that you have issued a client certificate or a server certificate by calling the following operation:
     * *   [CreateClientCertificate](https://help.aliyun.com/document_detail/330873.html)
     * *   [CreateServerCertificate](https://help.aliyun.com/document_detail/330877.html)
     * To ensure the security of private key transmission, the DescribeCertificatePrivateKey operation encrypts the private key by using the private key password that you specify and returns the encrypted private key. The private key password is a string that is used to encrypt the private key. After you obtain the encrypted private key of the certificate, you can use the following methods to decrypt the private key:
     * *   If the encryption algorithm of the certificate is RSA, you must run the `openssl rsa -in <Encrypted private key file> -passin pass:<Private key password> -out <Decrypted private key file>` command in the computer on which [OpenSSL](https://www.openssl.org/source/) or [BabaSSL](https://github.com/BabaSSL/BabaSSL) is installed.
     * *   If the encryption algorithm of the certificate is ECC, you must run the `openssl ec -in <Encrypted private key file> -passin pass:<Private key password> -out <Decrypted private key file>` command in the computer on which [OpenSSL](https://www.openssl.org/source/) or [BabaSSL](https://github.com/BabaSSL/BabaSSL) is installed.
     * *   If the encryption algorithm of the certificate is SM2, you must run the `openssl ec -in <Encrypted private key file> -passin pass:<Private key password> -out <Decrypted private key file>` command in the computer on which [BabaSSL](https://github.com/BabaSSL/BabaSSL) is installed.
     * >  You can call the [DescribeClientCertificate] operation to query the encryption algorithm type of a client certificate or a server certificate.
     * ## Limits
     * You can call this operation up to 100 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - DescribeCertificatePrivateKeyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCertificatePrivateKeyResponse
     *
     * @param DescribeCertificatePrivateKeyRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeCertificatePrivateKeyResponse
     */
    public function describeCertificatePrivateKeyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->encryptedCode) {
            @$query['EncryptedCode'] = $request->encryptedCode;
        }

        if (null !== $request->identifier) {
            @$query['Identifier'] = $request->identifier;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCertificatePrivateKey',
            'version' => '2020-06-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCertificatePrivateKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the encrypted private key of a client certificate or a server certificate.
     *
     * @remarks
     * ## Usage notes
     * You can call the DescribeCertificatePrivateKey operation to obtain the encrypted private key of a client certificate or a server certificate. The certificate is issued based on a system-generated certificate signing request (CSR). Before you call this operation, make sure that you have issued a client certificate or a server certificate by calling the following operation:
     * *   [CreateClientCertificate](https://help.aliyun.com/document_detail/330873.html)
     * *   [CreateServerCertificate](https://help.aliyun.com/document_detail/330877.html)
     * To ensure the security of private key transmission, the DescribeCertificatePrivateKey operation encrypts the private key by using the private key password that you specify and returns the encrypted private key. The private key password is a string that is used to encrypt the private key. After you obtain the encrypted private key of the certificate, you can use the following methods to decrypt the private key:
     * *   If the encryption algorithm of the certificate is RSA, you must run the `openssl rsa -in <Encrypted private key file> -passin pass:<Private key password> -out <Decrypted private key file>` command in the computer on which [OpenSSL](https://www.openssl.org/source/) or [BabaSSL](https://github.com/BabaSSL/BabaSSL) is installed.
     * *   If the encryption algorithm of the certificate is ECC, you must run the `openssl ec -in <Encrypted private key file> -passin pass:<Private key password> -out <Decrypted private key file>` command in the computer on which [OpenSSL](https://www.openssl.org/source/) or [BabaSSL](https://github.com/BabaSSL/BabaSSL) is installed.
     * *   If the encryption algorithm of the certificate is SM2, you must run the `openssl ec -in <Encrypted private key file> -passin pass:<Private key password> -out <Decrypted private key file>` command in the computer on which [BabaSSL](https://github.com/BabaSSL/BabaSSL) is installed.
     * >  You can call the [DescribeClientCertificate] operation to query the encryption algorithm type of a client certificate or a server certificate.
     * ## Limits
     * You can call this operation up to 100 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - DescribeCertificatePrivateKeyRequest
     *
     * @returns DescribeCertificatePrivateKeyResponse
     *
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
     * Queries the details about a client certificate or a server certificate by using the unique identifier of the certificate.
     *
     * @remarks
     * You can call the DescribeClientCertificate operation to query the details about a client certificate or a server certificate by using the unique identifier of the certificate. The details include the serial number, user information, content, and status of each certificate.
     * Before you call this operation, make sure that you have created a client certificate or a server certificate.
     * For more information about how to call an operation to create a client certificate, see the following topics:
     * *   [CreateClientCertificate](https://help.aliyun.com/document_detail/330873.html)
     * *   [CreateClientCertificateWithCsr](https://help.aliyun.com/document_detail/330875.html)
     * For more information about how to call an operation to create a server certificate, see the following topics:
     * *   [CreateServerCertificate](https://help.aliyun.com/document_detail/330877.html)
     * *   [CreateServerCertificateWithCsr](https://help.aliyun.com/document_detail/330878.html)
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - DescribeClientCertificateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeClientCertificateResponse
     *
     * @param DescribeClientCertificateRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeClientCertificateResponse
     */
    public function describeClientCertificateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->identifier) {
            @$query['Identifier'] = $request->identifier;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeClientCertificate',
            'version' => '2020-06-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeClientCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details about a client certificate or a server certificate by using the unique identifier of the certificate.
     *
     * @remarks
     * You can call the DescribeClientCertificate operation to query the details about a client certificate or a server certificate by using the unique identifier of the certificate. The details include the serial number, user information, content, and status of each certificate.
     * Before you call this operation, make sure that you have created a client certificate or a server certificate.
     * For more information about how to call an operation to create a client certificate, see the following topics:
     * *   [CreateClientCertificate](https://help.aliyun.com/document_detail/330873.html)
     * *   [CreateClientCertificateWithCsr](https://help.aliyun.com/document_detail/330875.html)
     * For more information about how to call an operation to create a server certificate, see the following topics:
     * *   [CreateServerCertificate](https://help.aliyun.com/document_detail/330877.html)
     * *   [CreateServerCertificateWithCsr](https://help.aliyun.com/document_detail/330878.html)
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - DescribeClientCertificateRequest
     *
     * @returns DescribeClientCertificateResponse
     *
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
     * Queries the status information about client certificates and server certificates by using the unique identifiers of the certificates.
     *
     * @remarks
     * You can call the DescribeClientCertificateStatus operation to query the status information about multiple client certificates or server certificates at a time by using the unique identifiers of the certificates. For example, you can check whether a certificate is revoked.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - DescribeClientCertificateStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeClientCertificateStatusResponse
     *
     * @param DescribeClientCertificateStatusRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeClientCertificateStatusResponse
     */
    public function describeClientCertificateStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->identifier) {
            @$query['Identifier'] = $request->identifier;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeClientCertificateStatus',
            'version' => '2020-06-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeClientCertificateStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the status information about client certificates and server certificates by using the unique identifiers of the certificates.
     *
     * @remarks
     * You can call the DescribeClientCertificateStatus operation to query the status information about multiple client certificates or server certificates at a time by using the unique identifiers of the certificates. For example, you can check whether a certificate is revoked.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - DescribeClientCertificateStatusRequest
     *
     * @returns DescribeClientCertificateStatusResponse
     *
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
     * Queries the status information about a private root certificate authority (CA) instance or a private intermediate CA instance that you purchase by using the Certificate Management Service console.
     *
     * @remarks
     * ## Usage notes
     * You can call the GetCAInstanceStatus operation to query the status information of a private CA instance by using the ID of the instance. The instance is purchased by using the SSL Certificates Service console. The status information includes the status of the private CA instance, the number of certificates that can be issued by using the private CA instance, and the number of issued certificates.
     * Before you call this operation, make sure that you have purchased a private CA by using the [SSL Certificates Service console](https://yundun.console.aliyun.com/?p=cas#/pca/rootlist). For more information, see [Create a private CA](https://help.aliyun.com/document_detail/208553.html).
     *
     * @param request - GetCAInstanceStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetCAInstanceStatusResponse
     *
     * @param GetCAInstanceStatusRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetCAInstanceStatusResponse
     */
    public function getCAInstanceStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->identifier) {
            @$query['Identifier'] = $request->identifier;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetCAInstanceStatus',
            'version' => '2020-06-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetCAInstanceStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the status information about a private root certificate authority (CA) instance or a private intermediate CA instance that you purchase by using the Certificate Management Service console.
     *
     * @remarks
     * ## Usage notes
     * You can call the GetCAInstanceStatus operation to query the status information of a private CA instance by using the ID of the instance. The instance is purchased by using the SSL Certificates Service console. The status information includes the status of the private CA instance, the number of certificates that can be issued by using the private CA instance, and the number of issued certificates.
     * Before you call this operation, make sure that you have purchased a private CA by using the [SSL Certificates Service console](https://yundun.console.aliyun.com/?p=cas#/pca/rootlist). For more information, see [Create a private CA](https://help.aliyun.com/document_detail/208553.html).
     *
     * @param request - GetCAInstanceStatusRequest
     *
     * @returns GetCAInstanceStatusResponse
     *
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
     * 查询终端实例.
     *
     * @param request - ListAllEndEntityInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAllEndEntityInstanceResponse
     *
     * @param ListAllEndEntityInstanceRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListAllEndEntityInstanceResponse
     */
    public function listAllEndEntityInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->parentId) {
            @$query['ParentId'] = $request->parentId;
        }

        if (null !== $request->recursiveChildren) {
            @$query['RecursiveChildren'] = $request->recursiveChildren;
        }

        if (null !== $request->showSize) {
            @$query['ShowSize'] = $request->showSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAllEndEntityInstance',
            'version' => '2020-06-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAllEndEntityInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询终端实例.
     *
     * @param request - ListAllEndEntityInstanceRequest
     *
     * @returns ListAllEndEntityInstanceResponse
     *
     * @param ListAllEndEntityInstanceRequest $request
     *
     * @return ListAllEndEntityInstanceResponse
     */
    public function listAllEndEntityInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAllEndEntityInstanceWithOptions($request, $runtime);
    }

    /**
     * 获取证书列表.
     *
     * @param request - ListCertRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListCertResponse
     *
     * @param ListCertRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return ListCertResponse
     */
    public function listCertWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->afterDate) {
            @$query['AfterDate'] = $request->afterDate;
        }

        if (null !== $request->beforeDate) {
            @$query['BeforeDate'] = $request->beforeDate;
        }

        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->instanceUuid) {
            @$query['InstanceUuid'] = $request->instanceUuid;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->showSize) {
            @$query['ShowSize'] = $request->showSize;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListCert',
            'version' => '2020-06-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListCertResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取证书列表.
     *
     * @param request - ListCertRequest
     *
     * @returns ListCertResponse
     *
     * @param ListCertRequest $request
     *
     * @return ListCertResponse
     */
    public function listCert($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCertWithOptions($request, $runtime);
    }

    /**
     * Queries the details about all client certificates and server certificates.
     *
     * @remarks
     * You can call the ListClientCertificate operation to perform a paged query of the details about all client certificates and server certificates that you create. The details include the unique identifier, serial number, user information, content, and status of each certificate.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - ListClientCertificateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListClientCertificateResponse
     *
     * @param ListClientCertificateRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListClientCertificateResponse
     */
    public function listClientCertificateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->identifier) {
            @$query['Identifier'] = $request->identifier;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->showSize) {
            @$query['ShowSize'] = $request->showSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListClientCertificate',
            'version' => '2020-06-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListClientCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details about all client certificates and server certificates.
     *
     * @remarks
     * You can call the ListClientCertificate operation to perform a paged query of the details about all client certificates and server certificates that you create. The details include the unique identifier, serial number, user information, content, and status of each certificate.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - ListClientCertificateRequest
     *
     * @returns ListClientCertificateResponse
     *
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
     * 查询私有CA机构证书.
     *
     * @param request - ListPcaCaCertificateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPcaCaCertificateResponse
     *
     * @param ListPcaCaCertificateRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListPcaCaCertificateResponse
     */
    public function listPcaCaCertificateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListPcaCaCertificate',
            'version' => '2020-06-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListPcaCaCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询私有CA机构证书.
     *
     * @param request - ListPcaCaCertificateRequest
     *
     * @returns ListPcaCaCertificateResponse
     *
     * @param ListPcaCaCertificateRequest $request
     *
     * @return ListPcaCaCertificateResponse
     */
    public function listPcaCaCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPcaCaCertificateWithOptions($request, $runtime);
    }

    /**
     * Queries the details about all client certificates and server certificates that are revoked.
     *
     * @remarks
     * You can call the ListRevokeCertificate operation to perform a paged query of the details about all revoked client certificates and server certificates. The details include the unique identifier, serial number, and revocation date of each certificate.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - ListRevokeCertificateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListRevokeCertificateResponse
     *
     * @param ListRevokeCertificateRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListRevokeCertificateResponse
     */
    public function listRevokeCertificateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->showSize) {
            @$query['ShowSize'] = $request->showSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListRevokeCertificate',
            'version' => '2020-06-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListRevokeCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details about all client certificates and server certificates that are revoked.
     *
     * @remarks
     * You can call the ListRevokeCertificate operation to perform a paged query of the details about all revoked client certificates and server certificates. The details include the unique identifier, serial number, and revocation date of each certificate.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - ListRevokeCertificateRequest
     *
     * @returns ListRevokeCertificateResponse
     *
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
     * Changes the status of a root certificate authority (CA) certificate or an intermediate CA certificate from ISSUE to REVOKE.
     *
     * @remarks
     * After a CA certificate is created, the CA certificate is in the ISSUE state by default. You can call the UpdateCACertificateStatus operation to change the status of a CA certificate from ISSUE to REVOKE. If a CA certificate is in the ISSUE state, the CA certificate can be used to issue certificates. If a CA certificate is in the REVOKE state, the CA certificate cannot be used to issue certificates, and the certificates that are issued from the CA certificate become invalid.
     * Before you call this operation, make sure that you have created a root CA by calling the [CreateRootCACertificate] operation or an intermediate CA certificate by calling the [CreateSubCACertificate] operation.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - UpdateCACertificateStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateCACertificateStatusResponse
     *
     * @param UpdateCACertificateStatusRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return UpdateCACertificateStatusResponse
     */
    public function updateCACertificateStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->identifier) {
            @$query['Identifier'] = $request->identifier;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateCACertificateStatus',
            'version' => '2020-06-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateCACertificateStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Changes the status of a root certificate authority (CA) certificate or an intermediate CA certificate from ISSUE to REVOKE.
     *
     * @remarks
     * After a CA certificate is created, the CA certificate is in the ISSUE state by default. You can call the UpdateCACertificateStatus operation to change the status of a CA certificate from ISSUE to REVOKE. If a CA certificate is in the ISSUE state, the CA certificate can be used to issue certificates. If a CA certificate is in the REVOKE state, the CA certificate cannot be used to issue certificates, and the certificates that are issued from the CA certificate become invalid.
     * Before you call this operation, make sure that you have created a root CA by calling the [CreateRootCACertificate] operation or an intermediate CA certificate by calling the [CreateSubCACertificate] operation.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - UpdateCACertificateStatusRequest
     *
     * @returns UpdateCACertificateStatusResponse
     *
     * @param UpdateCACertificateStatusRequest $request
     *
     * @return UpdateCACertificateStatusResponse
     */
    public function updateCACertificateStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCACertificateStatusWithOptions($request, $runtime);
    }

    /**
     * 更新证书属性.
     *
     * @param request - UpdatePcaCertificateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdatePcaCertificateResponse
     *
     * @param UpdatePcaCertificateRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return UpdatePcaCertificateResponse
     */
    public function updatePcaCertificateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aliasName) {
            @$query['AliasName'] = $request->aliasName;
        }

        if (null !== $request->identifier) {
            @$query['Identifier'] = $request->identifier;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdatePcaCertificate',
            'version' => '2020-06-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdatePcaCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新证书属性.
     *
     * @param request - UpdatePcaCertificateRequest
     *
     * @returns UpdatePcaCertificateResponse
     *
     * @param UpdatePcaCertificateRequest $request
     *
     * @return UpdatePcaCertificateResponse
     */
    public function updatePcaCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updatePcaCertificateWithOptions($request, $runtime);
    }

    /**
     * 上传pca证书到SSL上传证书.
     *
     * @param request - UploadPcaCertToCasRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UploadPcaCertToCasResponse
     *
     * @param UploadPcaCertToCasRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return UploadPcaCertToCasResponse
     */
    public function uploadPcaCertToCasWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ids) {
            @$query['Ids'] = $request->ids;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UploadPcaCertToCas',
            'version' => '2020-06-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UploadPcaCertToCasResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 上传pca证书到SSL上传证书.
     *
     * @param request - UploadPcaCertToCasRequest
     *
     * @returns UploadPcaCertToCasResponse
     *
     * @param UploadPcaCertToCasRequest $request
     *
     * @return UploadPcaCertToCasResponse
     */
    public function uploadPcaCertToCas($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uploadPcaCertToCasWithOptions($request, $runtime);
    }
}
