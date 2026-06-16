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
use AlibabaCloud\SDK\Cas\V20200630\Models\DescribeClientCertificateForSerialNumberRequest;
use AlibabaCloud\SDK\Cas\V20200630\Models\DescribeClientCertificateForSerialNumberResponse;
use AlibabaCloud\SDK\Cas\V20200630\Models\DescribeClientCertificateRequest;
use AlibabaCloud\SDK\Cas\V20200630\Models\DescribeClientCertificateResponse;
use AlibabaCloud\SDK\Cas\V20200630\Models\DescribeClientCertificateStatusForSerialNumberRequest;
use AlibabaCloud\SDK\Cas\V20200630\Models\DescribeClientCertificateStatusForSerialNumberResponse;
use AlibabaCloud\SDK\Cas\V20200630\Models\DescribeClientCertificateStatusRequest;
use AlibabaCloud\SDK\Cas\V20200630\Models\DescribeClientCertificateStatusResponse;
use AlibabaCloud\SDK\Cas\V20200630\Models\DescribePcaAndExternalCACertificateListRequest;
use AlibabaCloud\SDK\Cas\V20200630\Models\DescribePcaAndExternalCACertificateListResponse;
use AlibabaCloud\SDK\Cas\V20200630\Models\GetCaInstanceCrlAddressRequest;
use AlibabaCloud\SDK\Cas\V20200630\Models\GetCaInstanceCrlAddressResponse;
use AlibabaCloud\SDK\Cas\V20200630\Models\GetCAInstanceStatusRequest;
use AlibabaCloud\SDK\Cas\V20200630\Models\GetCAInstanceStatusResponse;
use AlibabaCloud\SDK\Cas\V20200630\Models\ListAllEndEntityInstanceRequest;
use AlibabaCloud\SDK\Cas\V20200630\Models\ListAllEndEntityInstanceResponse;
use AlibabaCloud\SDK\Cas\V20200630\Models\ListCACertificateLogRequest;
use AlibabaCloud\SDK\Cas\V20200630\Models\ListCACertificateLogResponse;
use AlibabaCloud\SDK\Cas\V20200630\Models\ListCertRequest;
use AlibabaCloud\SDK\Cas\V20200630\Models\ListCertResponse;
use AlibabaCloud\SDK\Cas\V20200630\Models\ListClientCertificateRequest;
use AlibabaCloud\SDK\Cas\V20200630\Models\ListClientCertificateResponse;
use AlibabaCloud\SDK\Cas\V20200630\Models\ListPcaCaCertificateRequest;
use AlibabaCloud\SDK\Cas\V20200630\Models\ListPcaCaCertificateResponse;
use AlibabaCloud\SDK\Cas\V20200630\Models\ListRevokeCertificateRequest;
use AlibabaCloud\SDK\Cas\V20200630\Models\ListRevokeCertificateResponse;
use AlibabaCloud\SDK\Cas\V20200630\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\Cas\V20200630\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\Cas\V20200630\Models\MoveResourceGroupRequest;
use AlibabaCloud\SDK\Cas\V20200630\Models\MoveResourceGroupResponse;
use AlibabaCloud\SDK\Cas\V20200630\Models\TagResourcesRequest;
use AlibabaCloud\SDK\Cas\V20200630\Models\TagResourcesResponse;
use AlibabaCloud\SDK\Cas\V20200630\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\Cas\V20200630\Models\UntagResourcesResponse;
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
     * Assigns the certificate quota to a subordinate certificate authority (CA) instance.
     *
     * @remarks
     * ## QPS limit
     * This API operation is limited to 10 queries per second (QPS) per user. If you exceed this limit, the system throttles your API calls, which can affect your business. Plan your calls accordingly.
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
     * Assigns the certificate quota to a subordinate certificate authority (CA) instance.
     *
     * @remarks
     * ## QPS limit
     * This API operation is limited to 10 queries per second (QPS) per user. If you exceed this limit, the system throttles your API calls, which can affect your business. Plan your calls accordingly.
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
     * Issues a client certificate by using a system-generated certificate signing request (CSR). You must create a root CA certificate and a subordinate CA certificate before calling this operation.
     *
     * @remarks
     * Before you call this operation, you must create a root CA certificate by calling [CreateRootCACertificate](https://help.aliyun.com/document_detail/465962.html) and a subordinate CA certificate by calling [CreateSubCACertificate](https://help.aliyun.com/document_detail/465959.html). Only subordinate CA certificates can issue client certificates.
     * ## QPS limit
     * The queries per second (QPS) limit for this operation is 10 calls per second per user. Calls that exceed this limit are throttled, which can impact your business. We recommend that you call this operation at a reasonable rate.
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

        if (null !== $request->aliasName) {
            @$query['AliasName'] = $request->aliasName;
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

        if (null !== $request->customIdentifier) {
            @$query['CustomIdentifier'] = $request->customIdentifier;
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

        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
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
     * Issues a client certificate by using a system-generated certificate signing request (CSR). You must create a root CA certificate and a subordinate CA certificate before calling this operation.
     *
     * @remarks
     * Before you call this operation, you must create a root CA certificate by calling [CreateRootCACertificate](https://help.aliyun.com/document_detail/465962.html) and a subordinate CA certificate by calling [CreateSubCACertificate](https://help.aliyun.com/document_detail/465959.html). Only subordinate CA certificates can issue client certificates.
     * ## QPS limit
     * The queries per second (QPS) limit for this operation is 10 calls per second per user. Calls that exceed this limit are throttled, which can impact your business. We recommend that you call this operation at a reasonable rate.
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
     * Issues a client certificate by using a custom certificate signing request (CSR).
     *
     * @remarks
     * Before you call this operation, you must create a root CA certificate by calling [CreateRootCACertificate](https://help.aliyun.com/document_detail/465962.html) and a subordinate CA certificate by calling [CreateSubCACertificate](https://help.aliyun.com/document_detail/465959.html). Only subordinate CA certificates can issue client certificates.
     * ## QPS limit
     * This operation is limited to 10 queries per second (QPS) per user. If you exceed this limit, the system throttles your API calls, which may affect your business. We recommend that you plan your calls to avoid being throttled.
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

        if (null !== $request->customIdentifier) {
            @$query['CustomIdentifier'] = $request->customIdentifier;
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
     * Issues a client certificate by using a custom certificate signing request (CSR).
     *
     * @remarks
     * Before you call this operation, you must create a root CA certificate by calling [CreateRootCACertificate](https://help.aliyun.com/document_detail/465962.html) and a subordinate CA certificate by calling [CreateSubCACertificate](https://help.aliyun.com/document_detail/465959.html). Only subordinate CA certificates can issue client certificates.
     * ## QPS limit
     * This operation is limited to 10 queries per second (QPS) per user. If you exceed this limit, the system throttles your API calls, which may affect your business. We recommend that you plan your calls to avoid being throttled.
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
     * Issues a custom digital certificate with specified subject, subject alternative names (SANs), key usage, and extended key usage attributes.
     *
     * @remarks
     * By default, the certificate subject is retrieved from the Certificate Signing Request (CSR). If you specify a certificate subject, the subject from the CSR is ignored and the specified subject is used to issue the certificate.
     * You must specify the key usage or extended key usage based on your scenario. The following examples show common scenarios:
     * - Server-side authentication certificate
     * Key usage: digitalSignature, keyEncipherment
     * Extended key usage: serverAuth
     * - Client authentication certificate
     * Key usage: digitalSignature, keyEncipherment
     * Extended key usage: clientAuth
     * - mTLS mutual authentication certificate
     * Key usage: digitalSignature, keyEncipherment
     * Extended key usage: serverAuth, clientAuth
     * - Email signing certificate
     * Key usage: digitalSignature, contentCommitment
     * Extended key usage: emailProtection
     * Note: Compliance CAs are managed by third-party authorities and do not support this operation.
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

        if (null !== $request->customIdentifier) {
            @$query['customIdentifier'] = $request->customIdentifier;
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
     * Issues a custom digital certificate with specified subject, subject alternative names (SANs), key usage, and extended key usage attributes.
     *
     * @remarks
     * By default, the certificate subject is retrieved from the Certificate Signing Request (CSR). If you specify a certificate subject, the subject from the CSR is ignored and the specified subject is used to issue the certificate.
     * You must specify the key usage or extended key usage based on your scenario. The following examples show common scenarios:
     * - Server-side authentication certificate
     * Key usage: digitalSignature, keyEncipherment
     * Extended key usage: serverAuth
     * - Client authentication certificate
     * Key usage: digitalSignature, keyEncipherment
     * Extended key usage: clientAuth
     * - mTLS mutual authentication certificate
     * Key usage: digitalSignature, keyEncipherment
     * Extended key usage: serverAuth, clientAuth
     * - Email signing certificate
     * Key usage: digitalSignature, contentCommitment
     * Extended key usage: emailProtection
     * Note: Compliance CAs are managed by third-party authorities and do not support this operation.
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
     * Create and issue an external subordinate CA certificate using a CSR and API parameters.
     *
     * @remarks
     * ## Request
     * - Creates an external subordinate CA certificate from a certificate signing request (CSR) and optional API pass-through parameters.
     * - The required `InstanceId` parameter specifies the instance ID of the external subordinate CA.
     * - The `Csr` parameter must contain a valid certificate signing request.
     * - The `Validity` parameter specifies the certificate\\"s validity period and accepts values in either relative or absolute time formats.
     * - The `ApiPassthrough` parameter lets you override information in the CSR, such as subject information, or add certificate extensions.
     * - Note: For end-entity CA certificates, set the `pathLenConstraint` parameter to 0.
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

        if (null !== $request->certMaxTime) {
            @$query['CertMaxTime'] = $request->certMaxTime;
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
     * Create and issue an external subordinate CA certificate using a CSR and API parameters.
     *
     * @remarks
     * ## Request
     * - Creates an external subordinate CA certificate from a certificate signing request (CSR) and optional API pass-through parameters.
     * - The required `InstanceId` parameter specifies the instance ID of the external subordinate CA.
     * - The `Csr` parameter must contain a valid certificate signing request.
     * - The `Validity` parameter specifies the certificate\\"s validity period and accepts values in either relative or absolute time formats.
     * - The `ApiPassthrough` parameter lets you override information in the CSR, such as subject information, or add certificate extensions.
     * - Note: For end-entity CA certificates, set the `pathLenConstraint` parameter to 0.
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
     * Revokes a client certificate or a server certificate issued by a private certificate authority (CA).
     *
     * @remarks
     * After a client or server certificate is revoked, the client or server where the certificate is installed cannot establish HTTPS connections with other devices.
     * After a client or server certificate is revoked, you can call [DeleteClientCertificate](https://help.aliyun.com/document_detail/465981.html) to permanently delete the certificate.
     * ## QPS limit
     * The limit on queries per second (QPS) for this operation is 10 per user. If you exceed this limit, API calls are throttled, which can affect your business. Plan your API calls accordingly.
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
     * Revokes a client certificate or a server certificate issued by a private certificate authority (CA).
     *
     * @remarks
     * After a client or server certificate is revoked, the client or server where the certificate is installed cannot establish HTTPS connections with other devices.
     * After a client or server certificate is revoked, you can call [DeleteClientCertificate](https://help.aliyun.com/document_detail/465981.html) to permanently delete the certificate.
     * ## QPS limit
     * The limit on queries per second (QPS) for this operation is 10 per user. If you exceed this limit, API calls are throttled, which can affect your business. Plan your API calls accordingly.
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
     * This operation creates a self-signed root CA certificate. A root CA certificate is the starting point of a private trust chain within an enterprise. After you create a root CA certificate, you can use it to issue intermediate CA certificates. You can then use the intermediate CA certificates to issue client and server-side certificates.
     * Before calling this operation, purchase a private root CA in the [SSL Certificate Service console](https://yundun.console.aliyun.com/?p=cas#/pca/rootlist). Otherwise, the call fails. For more information, see [Purchase a private CA](https://help.aliyun.com/document_detail/208553.html).
     * ## QPS limit
     * The queries per second (QPS) limit for this operation is 10 calls per second per user. If you exceed the limit, API calls are throttled, which may affect your business. Call the API at a reasonable rate.
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
     * This operation creates a self-signed root CA certificate. A root CA certificate is the starting point of a private trust chain within an enterprise. After you create a root CA certificate, you can use it to issue intermediate CA certificates. You can then use the intermediate CA certificates to issue client and server-side certificates.
     * Before calling this operation, purchase a private root CA in the [SSL Certificate Service console](https://yundun.console.aliyun.com/?p=cas#/pca/rootlist). Otherwise, the call fails. For more information, see [Purchase a private CA](https://help.aliyun.com/document_detail/208553.html).
     * ## QPS limit
     * The queries per second (QPS) limit for this operation is 10 calls per second per user. If you exceed the limit, API calls are throttled, which may affect your business. Call the API at a reasonable rate.
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
     * Issues a server certificate by using a system-generated certificate signing request (CSR).
     *
     * @remarks
     * Before you call this operation, you must call [CreateRootCACertificate](https://help.aliyun.com/document_detail/465962.html) to create a root certificate authority (CA) certificate and [CreateSubCACertificate](https://help.aliyun.com/document_detail/465975.html) to create a subordinate CA certificate. Only a subordinate CA certificate can issue a server certificate.
     * ## QPS limits
     * The queries per second (QPS) limit for this operation is 10 calls per second for each user. If you exceed this limit, the system throttles your API calls, which can affect your business. Plan your calls accordingly.
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

        if (null !== $request->customIdentifier) {
            @$query['CustomIdentifier'] = $request->customIdentifier;
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
     * Issues a server certificate by using a system-generated certificate signing request (CSR).
     *
     * @remarks
     * Before you call this operation, you must call [CreateRootCACertificate](https://help.aliyun.com/document_detail/465962.html) to create a root certificate authority (CA) certificate and [CreateSubCACertificate](https://help.aliyun.com/document_detail/465975.html) to create a subordinate CA certificate. Only a subordinate CA certificate can issue a server certificate.
     * ## QPS limits
     * The queries per second (QPS) limit for this operation is 10 calls per second for each user. If you exceed this limit, the system throttles your API calls, which can affect your business. Plan your calls accordingly.
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
     * Issues a server certificate by using a custom certificate signing request (CSR).
     *
     * @remarks
     * Before you call this operation, you must call [CreateRootCACertificate](https://help.aliyun.com/document_detail/465962.html) to create a root CA certificate and [CreateSubCACertificate](https://help.aliyun.com/document_detail/465959.html) to create a subordinate CA certificate. Server-side certificates can be issued only by subordinate CA certificates.
     * ## Limits
     * This operation has a queries per second (QPS) limit of 10 requests per user. If you exceed this limit, rate limiting is triggered, which may affect your business. Call this operation only as needed.
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

        if (null !== $request->customIdentifier) {
            @$query['CustomIdentifier'] = $request->customIdentifier;
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
     * Issues a server certificate by using a custom certificate signing request (CSR).
     *
     * @remarks
     * Before you call this operation, you must call [CreateRootCACertificate](https://help.aliyun.com/document_detail/465962.html) to create a root CA certificate and [CreateSubCACertificate](https://help.aliyun.com/document_detail/465959.html) to create a subordinate CA certificate. Server-side certificates can be issued only by subordinate CA certificates.
     * ## Limits
     * This operation has a queries per second (QPS) limit of 10 requests per user. If you exceed this limit, rate limiting is triggered, which may affect your business. Call this operation only as needed.
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
     * Creates a subordinate certificate authority (CA) certificate under an existing root CA.
     *
     * @remarks
     * This operation issues an intermediate CA certificate from an existing root CA certificate. You can use the intermediate CA certificate to issue client and server certificates.
     * Before calling this operation, you must call the [CreateRootCACertificate](https://help.aliyun.com/document_detail/465962.html) operation to create a root CA certificate.
     * ## QPS limit
     * The queries per second (QPS) limit for this operation is 10 calls per user. Calls that exceed this limit are throttled. This may affect your business. Plan your calls accordingly.
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

        if (null !== $request->certMaxTime) {
            @$query['CertMaxTime'] = $request->certMaxTime;
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
     * Creates a subordinate certificate authority (CA) certificate under an existing root CA.
     *
     * @remarks
     * This operation issues an intermediate CA certificate from an existing root CA certificate. You can use the intermediate CA certificate to issue client and server certificates.
     * Before calling this operation, you must call the [CreateRootCACertificate](https://help.aliyun.com/document_detail/465962.html) operation to create a root CA certificate.
     * ## QPS limit
     * The queries per second (QPS) limit for this operation is 10 calls per user. Calls that exceed this limit are throttled. This may affect your business. Plan your calls accordingly.
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
     * Deletes a revoked client certificate or server certificate. Only revoked certificates can be deleted.
     *
     * @remarks
     * Before you call this operation, you must call [CreateRevokeClientCertificate](https://help.aliyun.com/document_detail/465972.html) to revoke the client or server-side certificate.
     * ## QPS limit
     * This operation supports up to 10 queries per second (QPS) for each user. If you exceed the limit, API calls are throttled. This may affect your business. Plan your calls accordingly.
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
     * Deletes a revoked client certificate or server certificate. Only revoked certificates can be deleted.
     *
     * @remarks
     * Before you call this operation, you must call [CreateRevokeClientCertificate](https://help.aliyun.com/document_detail/465972.html) to revoke the client or server-side certificate.
     * ## QPS limit
     * This operation supports up to 10 queries per second (QPS) for each user. If you exceed the limit, API calls are throttled. This may affect your business. Plan your calls accordingly.
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
     * Retrieves information about a certificate authority (CA) certificate.
     *
     * @remarks
     * You can call this operation to query the details of a root or subordinate CA certificate by its unique identifier. The details include the serial number, subject information, and certificate content.
     * Before you call this operation, you must create a root CA certificate by calling [CreateRootCACertificate](https://help.aliyun.com/document_detail/465962.html) and a subordinate CA certificate by calling [CreateSubCACertificate](https://help.aliyun.com/document_detail/465959.html).
     * ## QPS limit
     * The queries per second (QPS) limit for this operation is 10 calls per second for each user. If you exceed the limit, API calls are throttled, which can affect your business. Plan your calls accordingly.
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
     * Retrieves information about a certificate authority (CA) certificate.
     *
     * @remarks
     * You can call this operation to query the details of a root or subordinate CA certificate by its unique identifier. The details include the serial number, subject information, and certificate content.
     * Before you call this operation, you must create a root CA certificate by calling [CreateRootCACertificate](https://help.aliyun.com/document_detail/465962.html) and a subordinate CA certificate by calling [CreateSubCACertificate](https://help.aliyun.com/document_detail/465959.html).
     * ## QPS limit
     * The queries per second (QPS) limit for this operation is 10 calls per second for each user. If you exceed the limit, API calls are throttled, which can affect your business. Plan your calls accordingly.
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
     * Queries the number of certificate authority (CA) certificates that you created.
     *
     * @remarks
     * This operation queries the number of CA certificates that you have created, including root CA certificates and subordinate CA certificates.
     * ## QPS limit
     * Each user is limited to 10 queries per second (QPS) for this API operation. If you exceed the limit, your API calls are throttled. This may affect your business. Plan your calls accordingly.
     *
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
     * Queries the number of certificate authority (CA) certificates that you created.
     *
     * @remarks
     * This operation queries the number of CA certificates that you have created, including root CA certificates and subordinate CA certificates.
     * ## QPS limit
     * Each user is limited to 10 queries per second (QPS) for this API operation. If you exceed the limit, your API calls are throttled. This may affect your business. Plan your calls accordingly.
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
     * Queries all root and subordinate certificate authority (CA) certificates.
     *
     * @remarks
     * You can call this operation to query the details of all your root and intermediate CA certificates by page. The details include the unique identifier, serial number, subject information, and content of each certificate.
     * ## QPS limit
     * The queries per second (QPS) limit for this operation is 10 for each user. If you exceed the limit, API calls are throttled. This may affect your business. We recommend that you call this operation a reasonable number of times.
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
     * Queries all root and subordinate certificate authority (CA) certificates.
     *
     * @remarks
     * You can call this operation to query the details of all your root and intermediate CA certificates by page. The details include the unique identifier, serial number, subject information, and content of each certificate.
     * ## QPS limit
     * The queries per second (QPS) limit for this operation is 10 for each user. If you exceed the limit, API calls are throttled. This may affect your business. We recommend that you call this operation a reasonable number of times.
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
     * Queries the encrypted private key of a client certificate or server certificate.
     *
     * @remarks
     * This API applies only to certificates that are issued from a system-generated Certificate Signing Request (CSR). You can use this API to retrieve the encrypted private key of a client certificate or a server-side certificate. Before you call this API, you must have issued a client or server-side certificate by calling one of the following APIs:
     * - [CreateClientCertificate](https://help.aliyun.com/document_detail/465967.html)
     * - [CreateServerCertificate](https://help.aliyun.com/document_detail/465975.html)
     * To keep the private key secure during transmission, this API uses a password that you set to encrypt the private key. The API then returns the encrypted private key. After you retrieve the encrypted private key, you can decrypt it using one of the following methods:
     * - If the certificate uses the RSA encryption algorithm, run the `openssl rsa -in <encrypted_private_key_file> -passin pass:<private_key_password> -out <decrypted_private_key_file>` command to decrypt the private key. You must run this command on a computer that has [OpenSSL](https://www.openssl.org/source/) or [BabaSSL](https://github.com/BabaSSL/BabaSSL) installed.
     * - If the certificate uses the ECC encryption algorithm, run the `openssl ec -in <encrypted_private_key_file> -passin pass:<private_key_password> -out <decrypted_private_key_file>` command to decrypt the private key. You must run this command on a computer that has [OpenSSL](https://www.openssl.org/source/) or [BabaSSL](https://github.com/BabaSSL/BabaSSL) installed.
     * - If the certificate uses the SM2 encryption algorithm, run the `openssl ec -in <encrypted_private_key_file> -passin pass:<private_key_password> -out <decrypted_private_key_file>` command to decrypt the private key. You must run this command on a computer that has [BabaSSL](https://github.com/BabaSSL/BabaSSL) installed.
     * > You can call [DescribeClientCertificate](https://help.aliyun.com/document_detail/465985.html) to query the encryption algorithm of the client or server-side certificate.
     * ## QPS limit
     * This API has a queries per second (QPS) limit of 10 for each user. If you exceed this limit, your API calls are throttled. Throttling can affect your business. Plan your calls accordingly.
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

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
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
     * Queries the encrypted private key of a client certificate or server certificate.
     *
     * @remarks
     * This API applies only to certificates that are issued from a system-generated Certificate Signing Request (CSR). You can use this API to retrieve the encrypted private key of a client certificate or a server-side certificate. Before you call this API, you must have issued a client or server-side certificate by calling one of the following APIs:
     * - [CreateClientCertificate](https://help.aliyun.com/document_detail/465967.html)
     * - [CreateServerCertificate](https://help.aliyun.com/document_detail/465975.html)
     * To keep the private key secure during transmission, this API uses a password that you set to encrypt the private key. The API then returns the encrypted private key. After you retrieve the encrypted private key, you can decrypt it using one of the following methods:
     * - If the certificate uses the RSA encryption algorithm, run the `openssl rsa -in <encrypted_private_key_file> -passin pass:<private_key_password> -out <decrypted_private_key_file>` command to decrypt the private key. You must run this command on a computer that has [OpenSSL](https://www.openssl.org/source/) or [BabaSSL](https://github.com/BabaSSL/BabaSSL) installed.
     * - If the certificate uses the ECC encryption algorithm, run the `openssl ec -in <encrypted_private_key_file> -passin pass:<private_key_password> -out <decrypted_private_key_file>` command to decrypt the private key. You must run this command on a computer that has [OpenSSL](https://www.openssl.org/source/) or [BabaSSL](https://github.com/BabaSSL/BabaSSL) installed.
     * - If the certificate uses the SM2 encryption algorithm, run the `openssl ec -in <encrypted_private_key_file> -passin pass:<private_key_password> -out <decrypted_private_key_file>` command to decrypt the private key. You must run this command on a computer that has [BabaSSL](https://github.com/BabaSSL/BabaSSL) installed.
     * > You can call [DescribeClientCertificate](https://help.aliyun.com/document_detail/465985.html) to query the encryption algorithm of the client or server-side certificate.
     * ## QPS limit
     * This API has a queries per second (QPS) limit of 10 for each user. If you exceed this limit, your API calls are throttled. Throttling can affect your business. Plan your calls accordingly.
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
     * Retrieves a client certificate or server certificate by its unique identifier.
     *
     * @remarks
     * You can call this operation to query the details of a client certificate or a server-side certificate by its unique identifier. The details include the serial number, subject, content, and status of the certificate.
     * Before you call this operation, you must create a client certificate or a server-side certificate.
     * To create a client certificate by calling an API, see the following topics:
     * - [CreateClientCertificate](https://help.aliyun.com/document_detail/465967.html)
     * - [CreateClientCertificateWithCsr](https://help.aliyun.com/document_detail/465970.html)
     * To create a server-side certificate by calling an API, see the following topics:
     * - [CreateServerCertificate](https://help.aliyun.com/document_detail/465975.html)
     * - [CreateServerCertificateWithCsr](https://help.aliyun.com/document_detail/465979.html)
     * ## Limits
     * The queries per second (QPS) limit for this API call is 10 per user. If you exceed this limit, throttling is triggered, which may affect your business. Plan your calls accordingly.
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
     * Retrieves a client certificate or server certificate by its unique identifier.
     *
     * @remarks
     * You can call this operation to query the details of a client certificate or a server-side certificate by its unique identifier. The details include the serial number, subject, content, and status of the certificate.
     * Before you call this operation, you must create a client certificate or a server-side certificate.
     * To create a client certificate by calling an API, see the following topics:
     * - [CreateClientCertificate](https://help.aliyun.com/document_detail/465967.html)
     * - [CreateClientCertificateWithCsr](https://help.aliyun.com/document_detail/465970.html)
     * To create a server-side certificate by calling an API, see the following topics:
     * - [CreateServerCertificate](https://help.aliyun.com/document_detail/465975.html)
     * - [CreateServerCertificateWithCsr](https://help.aliyun.com/document_detail/465979.html)
     * ## Limits
     * The queries per second (QPS) limit for this API call is 10 per user. If you exceed this limit, throttling is triggered, which may affect your business. Plan your calls accordingly.
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
     * Retrieves the details of multiple client or server certificates by serial number.
     *
     * @remarks
     * # Usage
     * Retrieves the details of multiple client or server certificates by serial number. The response includes each certificate\\"s serial number, subject information, content, and status.
     * Before calling this operation, ensure you have created a client certificate or a server certificate.
     * To create a client certificate, see:
     * - [CreateClientCertificate](https://help.aliyun.com/document_detail/330873.html)
     * - [CreateClientCertificateWithCsr](https://help.aliyun.com/document_detail/330875.html)
     * To create a server certificate, see:
     * - [CreateServerCertificate](https://help.aliyun.com/document_detail/330877.html)
     * - [CreateServerCertificateWithCsr](https://help.aliyun.com/document_detail/330878.html)
     * # QPS limit
     * The QPS limit for this operation is 10 calls per second per account. Exceeding this limit triggers throttling, which can impact your business. Plan your calls accordingly.
     *
     * @deprecated openAPI DescribeClientCertificateForSerialNumber is deprecated, please use cas::2020-06-30::DescribeClientCertificate instead
     *
     * @param request - DescribeClientCertificateForSerialNumberRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeClientCertificateForSerialNumberResponse
     *
     * @param DescribeClientCertificateForSerialNumberRequest $request
     * @param RuntimeOptions                                  $runtime
     *
     * @return DescribeClientCertificateForSerialNumberResponse
     */
    public function describeClientCertificateForSerialNumberWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->serialNumber) {
            @$query['SerialNumber'] = $request->serialNumber;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeClientCertificateForSerialNumber',
            'version' => '2020-06-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeClientCertificateForSerialNumberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * Retrieves the details of multiple client or server certificates by serial number.
     *
     * @remarks
     * # Usage
     * Retrieves the details of multiple client or server certificates by serial number. The response includes each certificate\\"s serial number, subject information, content, and status.
     * Before calling this operation, ensure you have created a client certificate or a server certificate.
     * To create a client certificate, see:
     * - [CreateClientCertificate](https://help.aliyun.com/document_detail/330873.html)
     * - [CreateClientCertificateWithCsr](https://help.aliyun.com/document_detail/330875.html)
     * To create a server certificate, see:
     * - [CreateServerCertificate](https://help.aliyun.com/document_detail/330877.html)
     * - [CreateServerCertificateWithCsr](https://help.aliyun.com/document_detail/330878.html)
     * # QPS limit
     * The QPS limit for this operation is 10 calls per second per account. Exceeding this limit triggers throttling, which can impact your business. Plan your calls accordingly.
     *
     * @deprecated openAPI DescribeClientCertificateForSerialNumber is deprecated, please use cas::2020-06-30::DescribeClientCertificate instead
     *
     * @param request - DescribeClientCertificateForSerialNumberRequest
     *
     * @returns DescribeClientCertificateForSerialNumberResponse
     *
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
     * Queries the status of a client certificate or server certificate by its unique identifier.
     *
     * @remarks
     * This operation queries the status of multiple client or server-side certificates in a batch using their unique identifiers. For example, you can check whether a certificate is revoked.
     * ## QPS limits
     * This operation is limited to 10 queries per second (QPS) for each user. API calls that exceed this limit are throttled, which may affect your business. We recommend that you call this operation at a reasonable rate.
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
     * Queries the status of a client certificate or server certificate by its unique identifier.
     *
     * @remarks
     * This operation queries the status of multiple client or server-side certificates in a batch using their unique identifiers. For example, you can check whether a certificate is revoked.
     * ## QPS limits
     * This operation is limited to 10 queries per second (QPS) for each user. API calls that exceed this limit are throttled, which may affect your business. We recommend that you call this operation at a reasonable rate.
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
     * Queries the status of client and server-side certificates using their serial numbers.
     *
     * @remarks
     * This operation queries the status of one or more client or server certificates by their serial numbers. For example, you can check whether a certificate is revoked.
     * ## QPS limit
     * You can make up to 10 API calls per second per account. Exceeding this limit triggers throttling, which can impact your business. Plan your calls accordingly.
     *
     * @param request - DescribeClientCertificateStatusForSerialNumberRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeClientCertificateStatusForSerialNumberResponse
     *
     * @param DescribeClientCertificateStatusForSerialNumberRequest $request
     * @param RuntimeOptions                                        $runtime
     *
     * @return DescribeClientCertificateStatusForSerialNumberResponse
     */
    public function describeClientCertificateStatusForSerialNumberWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->serialNumber) {
            @$query['SerialNumber'] = $request->serialNumber;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeClientCertificateStatusForSerialNumber',
            'version' => '2020-06-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeClientCertificateStatusForSerialNumberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the status of client and server-side certificates using their serial numbers.
     *
     * @remarks
     * This operation queries the status of one or more client or server certificates by their serial numbers. For example, you can check whether a certificate is revoked.
     * ## QPS limit
     * You can make up to 10 API calls per second per account. Exceeding this limit triggers throttling, which can impact your business. Plan your calls accordingly.
     *
     * @param request - DescribeClientCertificateStatusForSerialNumberRequest
     *
     * @returns DescribeClientCertificateStatusForSerialNumberResponse
     *
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
     * Returns all your certification authority (CA) certificates. These include certificates generated by Private CA and imported external certificates.
     *
     * @remarks
     * This operation performs a paged query to retrieve the details of all your CA certificates, including root and subordinate CA certificates. These details include the unique identifier, serial number, subject information, and certificate content.
     * ## QPS limit
     * The queries per second (QPS) limit for a single user is 10. The system throttles API calls that exceed this limit, which may affect your business. To prevent throttling, call this operation within the stated limit.
     *
     * @param request - DescribePcaAndExternalCACertificateListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribePcaAndExternalCACertificateListResponse
     *
     * @param DescribePcaAndExternalCACertificateListRequest $request
     * @param RuntimeOptions                                 $runtime
     *
     * @return DescribePcaAndExternalCACertificateListResponse
     */
    public function describePcaAndExternalCACertificateListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->identifiers) {
            @$query['Identifiers'] = $request->identifiers;
        }

        if (null !== $request->keyWord) {
            @$query['KeyWord'] = $request->keyWord;
        }

        if (null !== $request->showSize) {
            @$query['ShowSize'] = $request->showSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribePcaAndExternalCACertificateList',
            'version' => '2020-06-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribePcaAndExternalCACertificateListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Returns all your certification authority (CA) certificates. These include certificates generated by Private CA and imported external certificates.
     *
     * @remarks
     * This operation performs a paged query to retrieve the details of all your CA certificates, including root and subordinate CA certificates. These details include the unique identifier, serial number, subject information, and certificate content.
     * ## QPS limit
     * The queries per second (QPS) limit for a single user is 10. The system throttles API calls that exceed this limit, which may affect your business. To prevent throttling, call this operation within the stated limit.
     *
     * @param request - DescribePcaAndExternalCACertificateListRequest
     *
     * @returns DescribePcaAndExternalCACertificateListResponse
     *
     * @param DescribePcaAndExternalCACertificateListRequest $request
     *
     * @return DescribePcaAndExternalCACertificateListResponse
     */
    public function describePcaAndExternalCACertificateList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePcaAndExternalCACertificateListWithOptions($request, $runtime);
    }

    /**
     * Queries the status of a private certificate authority (CA) instance, including the remaining certificate quota.
     *
     * @remarks
     * Use this operation to query the status of a private CA instance by its ID. The status information includes the instance\\"s status, the total number of certificates it can issue, and the number of certificates already issued.
     * Before you call this operation, purchase a private CA in the [CAS console](https://yundun.console.aliyun.com/?p=cas#/pca/rootlist). For more information, see [Purchase a private CA](https://help.aliyun.com/document_detail/208553.html).
     * ## QPS limits
     * This operation has a queries per second (QPS) limit of 10 for each user. If you exceed this limit, API calls are throttled, which can affect your business. Call this operation at a reasonable rate.
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
     * Queries the status of a private certificate authority (CA) instance, including the remaining certificate quota.
     *
     * @remarks
     * Use this operation to query the status of a private CA instance by its ID. The status information includes the instance\\"s status, the total number of certificates it can issue, and the number of certificates already issued.
     * Before you call this operation, purchase a private CA in the [CAS console](https://yundun.console.aliyun.com/?p=cas#/pca/rootlist). For more information, see [Purchase a private CA](https://help.aliyun.com/document_detail/208553.html).
     * ## QPS limits
     * This operation has a queries per second (QPS) limit of 10 for each user. If you exceed this limit, API calls are throttled, which can affect your business. Call this operation at a reasonable rate.
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
     * Obtain the CRL URL of a CA.
     *
     * @remarks
     * This API is used to query the status information of a private CA instance that you purchased through the SSL Certificates Service console by using the ID of the private CA instance. For example, the status of the CA instance, the number of certificates contained, the number of issued certificates, and so on.
     * Before calling this API, you must have purchased a private CA through the [Certificate Management Service console](https://yundun.console.aliyun.com/?p=cas#/pca/rootlist). For more information, see [Purchase a private CA](https://help.aliyun.com/document_detail/208553.html).
     * ## QPS Limit
     * The per-user QPS limit for this API is 10 calls per second. If the limit is exceeded, API calls will be throttled, which may affect your business. Please call the API appropriately.
     *
     * @param request - GetCaInstanceCrlAddressRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetCaInstanceCrlAddressResponse
     *
     * @param GetCaInstanceCrlAddressRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetCaInstanceCrlAddressResponse
     */
    public function getCaInstanceCrlAddressWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->caIdentifier) {
            @$query['CaIdentifier'] = $request->caIdentifier;
        }

        if (null !== $request->uuid) {
            @$query['Uuid'] = $request->uuid;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetCaInstanceCrlAddress',
            'version' => '2020-06-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetCaInstanceCrlAddressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtain the CRL URL of a CA.
     *
     * @remarks
     * This API is used to query the status information of a private CA instance that you purchased through the SSL Certificates Service console by using the ID of the private CA instance. For example, the status of the CA instance, the number of certificates contained, the number of issued certificates, and so on.
     * Before calling this API, you must have purchased a private CA through the [Certificate Management Service console](https://yundun.console.aliyun.com/?p=cas#/pca/rootlist). For more information, see [Purchase a private CA](https://help.aliyun.com/document_detail/208553.html).
     * ## QPS Limit
     * The per-user QPS limit for this API is 10 calls per second. If the limit is exceeded, API calls will be throttled, which may affect your business. Please call the API appropriately.
     *
     * @param request - GetCaInstanceCrlAddressRequest
     *
     * @returns GetCaInstanceCrlAddressResponse
     *
     * @param GetCaInstanceCrlAddressRequest $request
     *
     * @return GetCaInstanceCrlAddressResponse
     */
    public function getCaInstanceCrlAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCaInstanceCrlAddressWithOptions($request, $runtime);
    }

    /**
     * Queries the end-entity instances under a private certificate authority (CA).
     *
     * @remarks
     * This operation queries the status of a private Certificate Authority (CA) instance by its ID. It returns details for a private CA instance that you purchased in the Certificate Management Service (CAS) console. These details include the instance status, the number of certificates it contains, and the number of issued certificates.
     * Before calling this operation, purchase a private CA from the [CAS console](https://yundun.console.aliyun.com/?p=cas#/pca/rootlist). For more information, see [Purchase a private CA](https://help.aliyun.com/document_detail/208553.html).
     * ## QPS limits
     * The queries per second (QPS) limit for this operation is 10 calls per second for each user. If you exceed the limit, API calls are throttled, which may affect your business. Plan your calls accordingly.
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
     * Queries the end-entity instances under a private certificate authority (CA).
     *
     * @remarks
     * This operation queries the status of a private Certificate Authority (CA) instance by its ID. It returns details for a private CA instance that you purchased in the Certificate Management Service (CAS) console. These details include the instance status, the number of certificates it contains, and the number of issued certificates.
     * Before calling this operation, purchase a private CA from the [CAS console](https://yundun.console.aliyun.com/?p=cas#/pca/rootlist). For more information, see [Purchase a private CA](https://help.aliyun.com/document_detail/208553.html).
     * ## QPS limits
     * The queries per second (QPS) limit for this operation is 10 calls per second for each user. If you exceed the limit, API calls are throttled, which may affect your business. Plan your calls accordingly.
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
     * Queries the operation logs of a certificate authority (CA) certificate, such as issuance and revocation events.
     *
     * @remarks
     * You can use this API to query the operation logs for a Certificate Authority (CA) certificate. These logs record operations, such as certificate creation and status changes, for both root and subordinate CA certificates.
     * This API is limited to 10 queries per second (QPS) per user. API calls that exceed this limit are throttled. This can impact your business. Ensure that you call the API within this limit.
     *
     * @param request - ListCACertificateLogRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListCACertificateLogResponse
     *
     * @param ListCACertificateLogRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListCACertificateLogResponse
     */
    public function listCACertificateLogWithOptions($request, $runtime)
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
            'action' => 'ListCACertificateLog',
            'version' => '2020-06-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListCACertificateLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the operation logs of a certificate authority (CA) certificate, such as issuance and revocation events.
     *
     * @remarks
     * You can use this API to query the operation logs for a Certificate Authority (CA) certificate. These logs record operations, such as certificate creation and status changes, for both root and subordinate CA certificates.
     * This API is limited to 10 queries per second (QPS) per user. API calls that exceed this limit are throttled. This can impact your business. Ensure that you call the API within this limit.
     *
     * @param request - ListCACertificateLogRequest
     *
     * @returns ListCACertificateLogResponse
     *
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
     * Retrieves a list of certificates.
     *
     * @remarks
     * The QPS limit for this API is 10 per user. If you exceed this limit, your API calls will be throttled. To avoid impacting your business, please plan your calls accordingly.
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

        if (null !== $request->parentIdentifier) {
            @$query['ParentIdentifier'] = $request->parentIdentifier;
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
     * Retrieves a list of certificates.
     *
     * @remarks
     * The QPS limit for this API is 10 per user. If you exceed this limit, your API calls will be throttled. To avoid impacting your business, please plan your calls accordingly.
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
     * Lists all client certificates and server certificates issued by a private certificate authority (CA).
     *
     * @remarks
     * This API performs a paged query to retrieve the details of all client and server-side certificates that you have created. These details include the unique identifier, serial number, subject information, content, and status of each certificate.
     * ## QPS limit
     * The QPS limit for a single user is 10 calls per second. If you exceed this limit, your API calls are throttled, which may affect your business. Call this API at a reasonable rate.
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
     * Lists all client certificates and server certificates issued by a private certificate authority (CA).
     *
     * @remarks
     * This API performs a paged query to retrieve the details of all client and server-side certificates that you have created. These details include the unique identifier, serial number, subject information, content, and status of each certificate.
     * ## QPS limit
     * The QPS limit for a single user is 10 calls per second. If you exceed this limit, your API calls are throttled, which may affect your business. Call this API at a reasonable rate.
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
     * Lists private certificate authority (CA) certificates.
     *
     * @remarks
     * This operation lists CA certificates, including root and subordinate CA certificates.
     * This operation has a limit of 10 queries per second (QPS) for each user. If you exceed the limit, API calls are throttled, which may affect your business. Call this operation at a reasonable rate.
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
     * Lists private certificate authority (CA) certificates.
     *
     * @remarks
     * This operation lists CA certificates, including root and subordinate CA certificates.
     * This operation has a limit of 10 queries per second (QPS) for each user. If you exceed the limit, API calls are throttled, which may affect your business. Call this operation at a reasonable rate.
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
     * Queries all revoked client certificates and server certificates.
     *
     * @remarks
     * Performs a paged query to retrieve the details of all revoked client and server-side certificates, such as the unique identifier, serial number, and revocation date.
     * ## QPS limit
     * The queries per second (QPS) limit for this API is 10 for each user. If you exceed this limit, API calls are throttled, which may affect your business. We recommend that you call this API at a reasonable rate.
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
     * Queries all revoked client certificates and server certificates.
     *
     * @remarks
     * Performs a paged query to retrieve the details of all revoked client and server-side certificates, such as the unique identifier, serial number, and revocation date.
     * ## QPS limit
     * The queries per second (QPS) limit for this API is 10 for each user. If you exceed this limit, API calls are throttled, which may affect your business. We recommend that you call this API at a reasonable rate.
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
     * Queries the tags that are attached to Certificate Management Service resources.
     *
     * @remarks
     * Before you call this operation, you must purchase a private CA in the [Certificate Management Service console](https://yundun.console.aliyun.com/?p=cas#/pca/rootlist). For more information, see [Purchase a private CA](https://help.aliyun.com/document_detail/208553.html).
     * You can call this operation up to 10 times per second per Alibaba Cloud account. If the number of calls per second exceeds this limit, throttling is triggered. This may affect your business. We recommend that you plan your calls accordingly.
     * ## QPS limit
     * You can call this operation up to 10 times per second for each Alibaba Cloud account. If the number of calls per second exceeds this limit, throttling is triggered, which may affect your business. We recommend that you plan your calls accordingly.
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
        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTagResources',
            'version' => '2020-06-30',
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
     * Queries the tags that are attached to Certificate Management Service resources.
     *
     * @remarks
     * Before you call this operation, you must purchase a private CA in the [Certificate Management Service console](https://yundun.console.aliyun.com/?p=cas#/pca/rootlist). For more information, see [Purchase a private CA](https://help.aliyun.com/document_detail/208553.html).
     * You can call this operation up to 10 times per second per Alibaba Cloud account. If the number of calls per second exceeds this limit, throttling is triggered. This may affect your business. We recommend that you plan your calls accordingly.
     * ## QPS limit
     * You can call this operation up to 10 times per second for each Alibaba Cloud account. If the number of calls per second exceeds this limit, throttling is triggered, which may affect your business. We recommend that you plan your calls accordingly.
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
     * Moves a Certificate Management Service resource to a different resource group.
     *
     * @remarks
     * This operation queries the status information of a private CA instance that you purchased in the Certificate Management Service (CAS) console. You can query by the private CA instance ID to retrieve information such as the status of the CA instance, the number of certificates it contains, and the number of issued certificates.
     * Before you call this operation, you must purchase a private CA in the [CAS console](https://yundun.console.aliyun.com/?p=cas#/pca/rootlist). For more information, see [Purchase a private CA](https://help.aliyun.com/document_detail/208553.html).
     * ## QPS limit
     * This operation is limited to 10 queries per second (QPS) for each user. If you exceed this limit, API calls are throttled, which can affect your business. Call this operation within the specified limit.
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
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'MoveResourceGroup',
            'version' => '2020-06-30',
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
     * Moves a Certificate Management Service resource to a different resource group.
     *
     * @remarks
     * This operation queries the status information of a private CA instance that you purchased in the Certificate Management Service (CAS) console. You can query by the private CA instance ID to retrieve information such as the status of the CA instance, the number of certificates it contains, and the number of issued certificates.
     * Before you call this operation, you must purchase a private CA in the [CAS console](https://yundun.console.aliyun.com/?p=cas#/pca/rootlist). For more information, see [Purchase a private CA](https://help.aliyun.com/document_detail/208553.html).
     * ## QPS limit
     * This operation is limited to 10 queries per second (QPS) for each user. If you exceed this limit, API calls are throttled, which can affect your business. Call this operation within the specified limit.
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
     * Attaches tags to one or more Certificate Management Service resources.
     *
     * @remarks
     * This operation adds tags to one or more resources. You can add tags to private CA instances that you purchased in the Certificate Management Service (CAS) console.
     * Before calling this operation, purchase a private CA in the [CAS console](https://yundun.console.aliyun.com/?p=cas#/pca/rootlist). For more information, see [Purchase a private CA](https://help.aliyun.com/document_detail/208553.html).
     * ## QPS limit
     * This operation is limited to 10 queries per second (QPS) per user. If you exceed this limit, API calls are throttled, which may affect your business. We recommend that you call this operation at a reasonable rate.
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
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'TagResources',
            'version' => '2020-06-30',
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
     * Attaches tags to one or more Certificate Management Service resources.
     *
     * @remarks
     * This operation adds tags to one or more resources. You can add tags to private CA instances that you purchased in the Certificate Management Service (CAS) console.
     * Before calling this operation, purchase a private CA in the [CAS console](https://yundun.console.aliyun.com/?p=cas#/pca/rootlist). For more information, see [Purchase a private CA](https://help.aliyun.com/document_detail/208553.html).
     * ## QPS limit
     * This operation is limited to 10 queries per second (QPS) per user. If you exceed this limit, API calls are throttled, which may affect your business. We recommend that you call this operation at a reasonable rate.
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
     * Removes tags from one or more Certificate Management Service resources.
     *
     * @remarks
     * This operation queries status information for a private Certificate Authority (CA) instance that you purchased in the Certificate Management Service (CAS) console. You can use the private CA instance ID to retrieve information such as the instance status, the number of certificates it contains, and the number of certificates issued.
     * Before you call this operation, you must purchase a private CA from the [CAS console](https://yundun.console.aliyun.com/?p=cas#/pca/rootlist). For more information, see [Purchase a private CA](https://help.aliyun.com/document_detail/208553.html).
     * ## QPS limit
     * The queries per second (QPS) limit for this operation is 10 calls per second per user. If you exceed this limit, API calls are throttled. This may affect your business. Plan your calls accordingly.
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
        if (null !== $request->all) {
            @$query['All'] = $request->all;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tagKey) {
            @$query['TagKey'] = $request->tagKey;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UntagResources',
            'version' => '2020-06-30',
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
     * Removes tags from one or more Certificate Management Service resources.
     *
     * @remarks
     * This operation queries status information for a private Certificate Authority (CA) instance that you purchased in the Certificate Management Service (CAS) console. You can use the private CA instance ID to retrieve information such as the instance status, the number of certificates it contains, and the number of certificates issued.
     * Before you call this operation, you must purchase a private CA from the [CAS console](https://yundun.console.aliyun.com/?p=cas#/pca/rootlist). For more information, see [Purchase a private CA](https://help.aliyun.com/document_detail/208553.html).
     * ## QPS limit
     * The queries per second (QPS) limit for this operation is 10 calls per second per user. If you exceed this limit, API calls are throttled. This may affect your business. Plan your calls accordingly.
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

    /**
     * Changes the status of a root or subordinate certificate authority (CA) certificate, such as revoking or disabling an active CA.
     *
     * @remarks
     * When you create a CA certificate, its status is ISSUE by default. You can call this API operation to change the status of a CA certificate from ISSUE to REVOKE. A CA certificate in the ISSUE state can be used to issue certificates. A CA certificate in the REVOKE state cannot be used to issue certificates, and all certificates issued by this CA certificate become invalid.
     * Before you call this API operation, create a root CA certificate by calling [CreateRootCACertificate](https://help.aliyun.com/document_detail/465962.html) and an intermediate CA certificate by calling [CreateSubCACertificate](https://help.aliyun.com/document_detail/465959.html).
     * ## QPS limit
     * This operation is limited to 10 queries per second (QPS) for each user. If you exceed this limit, API calls are throttled. This may affect your business. Plan your calls accordingly.
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
     * Changes the status of a root or subordinate certificate authority (CA) certificate, such as revoking or disabling an active CA.
     *
     * @remarks
     * When you create a CA certificate, its status is ISSUE by default. You can call this API operation to change the status of a CA certificate from ISSUE to REVOKE. A CA certificate in the ISSUE state can be used to issue certificates. A CA certificate in the REVOKE state cannot be used to issue certificates, and all certificates issued by this CA certificate become invalid.
     * Before you call this API operation, create a root CA certificate by calling [CreateRootCACertificate](https://help.aliyun.com/document_detail/465962.html) and an intermediate CA certificate by calling [CreateSubCACertificate](https://help.aliyun.com/document_detail/465959.html).
     * ## QPS limit
     * This operation is limited to 10 queries per second (QPS) for each user. If you exceed this limit, API calls are throttled. This may affect your business. Plan your calls accordingly.
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
     * Updates the properties of a private CA certificate, such as the export status.
     *
     * @remarks
     * When a Certificate Authority (CA) certificate is created, its status is Normal by default. You can call this API operation to change the status of a CA certificate to Revoked. A CA certificate in the Normal status can be used to issue certificates. A revoked CA certificate cannot be used to issue certificates, and all certificates previously issued by it become invalid.
     * Before you call this API operation, you must create a root CA certificate by calling [CreateRootCACertificate](https://help.aliyun.com/document_detail/465962.html) and a subordinate CA certificate by calling [CreateSubCACertificate](https://help.aliyun.com/document_detail/465959.html).
     * ## QPS limits
     * This API operation is limited to 10 queries per second (QPS) per user. If you exceed this limit, API calls are throttled, which may affect your business. Call this API operation at a reasonable rate.
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
     * Updates the properties of a private CA certificate, such as the export status.
     *
     * @remarks
     * When a Certificate Authority (CA) certificate is created, its status is Normal by default. You can call this API operation to change the status of a CA certificate to Revoked. A CA certificate in the Normal status can be used to issue certificates. A revoked CA certificate cannot be used to issue certificates, and all certificates previously issued by it become invalid.
     * Before you call this API operation, you must create a root CA certificate by calling [CreateRootCACertificate](https://help.aliyun.com/document_detail/465962.html) and a subordinate CA certificate by calling [CreateSubCACertificate](https://help.aliyun.com/document_detail/465959.html).
     * ## QPS limits
     * This API operation is limited to 10 queries per second (QPS) per user. If you exceed this limit, API calls are throttled, which may affect your business. Call this API operation at a reasonable rate.
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
     * Uploads a private CA certificate to Certificate Management Service for centralized management.
     *
     * @remarks
     * This API operation uploads a PCA certificate to a certificate repository.
     * ## QPS limit
     * This operation has a queries per second (QPS) limit of 10 calls per second for each user. If you exceed the limit, your API calls are throttled. Throttling may affect your business. We recommend that you call this operation at a reasonable rate.
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
     * Uploads a private CA certificate to Certificate Management Service for centralized management.
     *
     * @remarks
     * This API operation uploads a PCA certificate to a certificate repository.
     * ## QPS limit
     * This operation has a queries per second (QPS) limit of 10 calls per second for each user. If you exceed the limit, your API calls are throttled. Throttling may affect your business. We recommend that you call this operation at a reasonable rate.
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
