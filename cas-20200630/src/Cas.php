<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200630;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Cas\V20200630\Models\CreateClientCertificateRequest;
use AlibabaCloud\SDK\Cas\V20200630\Models\CreateClientCertificateResponse;
use AlibabaCloud\SDK\Cas\V20200630\Models\CreateClientCertificateWithCsrRequest;
use AlibabaCloud\SDK\Cas\V20200630\Models\CreateClientCertificateWithCsrResponse;
use AlibabaCloud\SDK\Cas\V20200630\Models\CreateCustomCertificateRequest;
use AlibabaCloud\SDK\Cas\V20200630\Models\CreateCustomCertificateResponse;
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
use AlibabaCloud\SDK\Cas\V20200630\Models\ListCertRequest;
use AlibabaCloud\SDK\Cas\V20200630\Models\ListCertResponse;
use AlibabaCloud\SDK\Cas\V20200630\Models\ListClientCertificateRequest;
use AlibabaCloud\SDK\Cas\V20200630\Models\ListClientCertificateResponse;
use AlibabaCloud\SDK\Cas\V20200630\Models\ListRevokeCertificateRequest;
use AlibabaCloud\SDK\Cas\V20200630\Models\ListRevokeCertificateResponse;
use AlibabaCloud\SDK\Cas\V20200630\Models\UpdateCACertificateStatusRequest;
use AlibabaCloud\SDK\Cas\V20200630\Models\UpdateCACertificateStatusResponse;
use AlibabaCloud\SDK\Cas\V20200630\Models\UploadPcaCertToCasRequest;
use AlibabaCloud\SDK\Cas\V20200630\Models\UploadPcaCertToCasResponse;
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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @summary Issues a client certificate by using a system-generated certificate signing request (CSR) file.
     *  *
     * @description Before you call this operation, make sure that you have created a root certificate authority (CA) certificate by calling the [CreateRootCACertificate](~~CreateRootCACertificate~~) operation and an intermediate CA certificate by calling the [CreateSubCACertificate](~~CreateRootCACertificate~~) operation. Only intermediate CA certificates can issue client certificates.
     * ## QPS limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param CreateClientCertificateRequest $request CreateClientCertificateRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateClientCertificateResponse CreateClientCertificateResponse
     */
    public function createClientCertificateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->afterTime)) {
            $query['AfterTime'] = $request->afterTime;
        }
        if (!Utils::isUnset($request->algorithm)) {
            $query['Algorithm'] = $request->algorithm;
        }
        if (!Utils::isUnset($request->beforeTime)) {
            $query['BeforeTime'] = $request->beforeTime;
        }
        if (!Utils::isUnset($request->commonName)) {
            $query['CommonName'] = $request->commonName;
        }
        if (!Utils::isUnset($request->country)) {
            $query['Country'] = $request->country;
        }
        if (!Utils::isUnset($request->days)) {
            $query['Days'] = $request->days;
        }
        if (!Utils::isUnset($request->enableCrl)) {
            $query['EnableCrl'] = $request->enableCrl;
        }
        if (!Utils::isUnset($request->immediately)) {
            $query['Immediately'] = $request->immediately;
        }
        if (!Utils::isUnset($request->locality)) {
            $query['Locality'] = $request->locality;
        }
        if (!Utils::isUnset($request->months)) {
            $query['Months'] = $request->months;
        }
        if (!Utils::isUnset($request->organization)) {
            $query['Organization'] = $request->organization;
        }
        if (!Utils::isUnset($request->organizationUnit)) {
            $query['OrganizationUnit'] = $request->organizationUnit;
        }
        if (!Utils::isUnset($request->parentIdentifier)) {
            $query['ParentIdentifier'] = $request->parentIdentifier;
        }
        if (!Utils::isUnset($request->sanType)) {
            $query['SanType'] = $request->sanType;
        }
        if (!Utils::isUnset($request->sanValue)) {
            $query['SanValue'] = $request->sanValue;
        }
        if (!Utils::isUnset($request->state)) {
            $query['State'] = $request->state;
        }
        if (!Utils::isUnset($request->years)) {
            $query['Years'] = $request->years;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Issues a client certificate by using a system-generated certificate signing request (CSR) file.
     *  *
     * @description Before you call this operation, make sure that you have created a root certificate authority (CA) certificate by calling the [CreateRootCACertificate](~~CreateRootCACertificate~~) operation and an intermediate CA certificate by calling the [CreateSubCACertificate](~~CreateRootCACertificate~~) operation. Only intermediate CA certificates can issue client certificates.
     * ## QPS limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param CreateClientCertificateRequest $request CreateClientCertificateRequest
     *
     * @return CreateClientCertificateResponse CreateClientCertificateResponse
     */
    public function createClientCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createClientCertificateWithOptions($request, $runtime);
    }

    /**
     * @summary Issues a client certificate by using a custom certificate signing request (CSR) file.
     *  *
     * @description Before you call this operation, make sure that you have created a root certificate authority (CA) certificate by calling the [CreateRootCACertificate](https://help.aliyun.com/document_detail/328093.html) operation and an intermediate CA certificate by calling the [CreateSubCACertificate](https://help.aliyun.com/document_detail/328094.html) operation. Only intermediate CA certificates can be used to issue client certificates.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param CreateClientCertificateWithCsrRequest $request CreateClientCertificateWithCsrRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateClientCertificateWithCsrResponse CreateClientCertificateWithCsrResponse
     */
    public function createClientCertificateWithCsrWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->afterTime)) {
            $query['AfterTime'] = $request->afterTime;
        }
        if (!Utils::isUnset($request->algorithm)) {
            $query['Algorithm'] = $request->algorithm;
        }
        if (!Utils::isUnset($request->beforeTime)) {
            $query['BeforeTime'] = $request->beforeTime;
        }
        if (!Utils::isUnset($request->commonName)) {
            $query['CommonName'] = $request->commonName;
        }
        if (!Utils::isUnset($request->country)) {
            $query['Country'] = $request->country;
        }
        if (!Utils::isUnset($request->csr)) {
            $query['Csr'] = $request->csr;
        }
        if (!Utils::isUnset($request->days)) {
            $query['Days'] = $request->days;
        }
        if (!Utils::isUnset($request->enableCrl)) {
            $query['EnableCrl'] = $request->enableCrl;
        }
        if (!Utils::isUnset($request->immediately)) {
            $query['Immediately'] = $request->immediately;
        }
        if (!Utils::isUnset($request->locality)) {
            $query['Locality'] = $request->locality;
        }
        if (!Utils::isUnset($request->months)) {
            $query['Months'] = $request->months;
        }
        if (!Utils::isUnset($request->organization)) {
            $query['Organization'] = $request->organization;
        }
        if (!Utils::isUnset($request->organizationUnit)) {
            $query['OrganizationUnit'] = $request->organizationUnit;
        }
        if (!Utils::isUnset($request->parentIdentifier)) {
            $query['ParentIdentifier'] = $request->parentIdentifier;
        }
        if (!Utils::isUnset($request->sanType)) {
            $query['SanType'] = $request->sanType;
        }
        if (!Utils::isUnset($request->sanValue)) {
            $query['SanValue'] = $request->sanValue;
        }
        if (!Utils::isUnset($request->state)) {
            $query['State'] = $request->state;
        }
        if (!Utils::isUnset($request->years)) {
            $query['Years'] = $request->years;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Issues a client certificate by using a custom certificate signing request (CSR) file.
     *  *
     * @description Before you call this operation, make sure that you have created a root certificate authority (CA) certificate by calling the [CreateRootCACertificate](https://help.aliyun.com/document_detail/328093.html) operation and an intermediate CA certificate by calling the [CreateSubCACertificate](https://help.aliyun.com/document_detail/328094.html) operation. Only intermediate CA certificates can be used to issue client certificates.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param CreateClientCertificateWithCsrRequest $request CreateClientCertificateWithCsrRequest
     *
     * @return CreateClientCertificateWithCsrResponse CreateClientCertificateWithCsrResponse
     */
    public function createClientCertificateWithCsr($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createClientCertificateWithCsrWithOptions($request, $runtime);
    }

    /**
     * @summary Issues a certificate based on the specified key usage, extended key usage, and name and alias of the entity that uses the certificate.
     *  *
     * @description By default, the name of the entity is obtained from the certificate signing request (CSR) of the certificate that you want to issue. If you specify a different name for the entity, the name of the entity in the CSR becomes invalid. The specified name is used to issue the certificate.
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
     *  *
     * @param CreateCustomCertificateRequest $request CreateCustomCertificateRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateCustomCertificateResponse CreateCustomCertificateResponse
     */
    public function createCustomCertificateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiPassthrough)) {
            $query['ApiPassthrough'] = $request->apiPassthrough;
        }
        if (!Utils::isUnset($request->csr)) {
            $query['Csr'] = $request->csr;
        }
        if (!Utils::isUnset($request->enableCrl)) {
            $query['EnableCrl'] = $request->enableCrl;
        }
        if (!Utils::isUnset($request->immediately)) {
            $query['Immediately'] = $request->immediately;
        }
        if (!Utils::isUnset($request->parentIdentifier)) {
            $query['ParentIdentifier'] = $request->parentIdentifier;
        }
        if (!Utils::isUnset($request->validity)) {
            $query['Validity'] = $request->validity;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Issues a certificate based on the specified key usage, extended key usage, and name and alias of the entity that uses the certificate.
     *  *
     * @description By default, the name of the entity is obtained from the certificate signing request (CSR) of the certificate that you want to issue. If you specify a different name for the entity, the name of the entity in the CSR becomes invalid. The specified name is used to issue the certificate.
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
     *  *
     * @param CreateCustomCertificateRequest $request CreateCustomCertificateRequest
     *
     * @return CreateCustomCertificateResponse CreateCustomCertificateResponse
     */
    public function createCustomCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCustomCertificateWithOptions($request, $runtime);
    }

    /**
     * @summary Revokes a client certificate or a server certificate.
     *  *
     * @description After a client certificate or a server certificate is revoked, the client or the server on which the certificate is installed cannot establish HTTPS connections with other devices.
     * After a client certificate or a server certificate is revoked, you can call the [DeleteClientCertificate](https://help.aliyun.com/document_detail/330880.html) operation to permanently delete the certificate.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param CreateRevokeClientCertificateRequest $request CreateRevokeClientCertificateRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateRevokeClientCertificateResponse CreateRevokeClientCertificateResponse
     */
    public function createRevokeClientCertificateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->identifier)) {
            $query['Identifier'] = $request->identifier;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Revokes a client certificate or a server certificate.
     *  *
     * @description After a client certificate or a server certificate is revoked, the client or the server on which the certificate is installed cannot establish HTTPS connections with other devices.
     * After a client certificate or a server certificate is revoked, you can call the [DeleteClientCertificate](https://help.aliyun.com/document_detail/330880.html) operation to permanently delete the certificate.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param CreateRevokeClientCertificateRequest $request CreateRevokeClientCertificateRequest
     *
     * @return CreateRevokeClientCertificateResponse CreateRevokeClientCertificateResponse
     */
    public function createRevokeClientCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRevokeClientCertificateWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a root certificate authority (CA) certificate.
     *  *
     * @description You can call the CreateRootCACertificate operation to create a self-signed root CA certificate. A root CA certificate is the trust anchor in a chain of trust for private certificates that are used within an enterprise. You must create a root CA certificate before you can use the root CA certificate to issue intermediate CA certificates. Then, you can use the intermediate CA certificates to issue client certificates and server certificates.
     * Before you call this operation, make sure that you have purchased a private root CA instance by using the [Certificate Management Service console](https://yundun.console.aliyun.com/?p=cas#/pca/rootlist). For more information, see [Create a private CA](https://help.aliyun.com/document_detail/208553.html).
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param CreateRootCACertificateRequest $request CreateRootCACertificateRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateRootCACertificateResponse CreateRootCACertificateResponse
     */
    public function createRootCACertificateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->algorithm)) {
            $query['Algorithm'] = $request->algorithm;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->commonName)) {
            $query['CommonName'] = $request->commonName;
        }
        if (!Utils::isUnset($request->countryCode)) {
            $query['CountryCode'] = $request->countryCode;
        }
        if (!Utils::isUnset($request->locality)) {
            $query['Locality'] = $request->locality;
        }
        if (!Utils::isUnset($request->organization)) {
            $query['Organization'] = $request->organization;
        }
        if (!Utils::isUnset($request->organizationUnit)) {
            $query['OrganizationUnit'] = $request->organizationUnit;
        }
        if (!Utils::isUnset($request->state)) {
            $query['State'] = $request->state;
        }
        if (!Utils::isUnset($request->years)) {
            $query['Years'] = $request->years;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Creates a root certificate authority (CA) certificate.
     *  *
     * @description You can call the CreateRootCACertificate operation to create a self-signed root CA certificate. A root CA certificate is the trust anchor in a chain of trust for private certificates that are used within an enterprise. You must create a root CA certificate before you can use the root CA certificate to issue intermediate CA certificates. Then, you can use the intermediate CA certificates to issue client certificates and server certificates.
     * Before you call this operation, make sure that you have purchased a private root CA instance by using the [Certificate Management Service console](https://yundun.console.aliyun.com/?p=cas#/pca/rootlist). For more information, see [Create a private CA](https://help.aliyun.com/document_detail/208553.html).
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param CreateRootCACertificateRequest $request CreateRootCACertificateRequest
     *
     * @return CreateRootCACertificateResponse CreateRootCACertificateResponse
     */
    public function createRootCACertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRootCACertificateWithOptions($request, $runtime);
    }

    /**
     * @summary Issues a server certificate by using a system-generated certificate signing request (CSR) file.
     *  *
     * @description Before you call this operation, make sure that you have created a root certificate authority (CA) certificate by calling the [CreateRootCACertificate](https://help.aliyun.com/document_detail/328093.html) operation and an intermediate CA certificate by calling the [CreateSubCACertificate](https://help.aliyun.com/document_detail/328094.html) operation. Only intermediate CA certificates can be used to issue server certificates.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param CreateServerCertificateRequest $request CreateServerCertificateRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateServerCertificateResponse CreateServerCertificateResponse
     */
    public function createServerCertificateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->afterTime)) {
            $query['AfterTime'] = $request->afterTime;
        }
        if (!Utils::isUnset($request->algorithm)) {
            $query['Algorithm'] = $request->algorithm;
        }
        if (!Utils::isUnset($request->beforeTime)) {
            $query['BeforeTime'] = $request->beforeTime;
        }
        if (!Utils::isUnset($request->commonName)) {
            $query['CommonName'] = $request->commonName;
        }
        if (!Utils::isUnset($request->country)) {
            $query['Country'] = $request->country;
        }
        if (!Utils::isUnset($request->days)) {
            $query['Days'] = $request->days;
        }
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->enableCrl)) {
            $query['EnableCrl'] = $request->enableCrl;
        }
        if (!Utils::isUnset($request->immediately)) {
            $query['Immediately'] = $request->immediately;
        }
        if (!Utils::isUnset($request->locality)) {
            $query['Locality'] = $request->locality;
        }
        if (!Utils::isUnset($request->months)) {
            $query['Months'] = $request->months;
        }
        if (!Utils::isUnset($request->organization)) {
            $query['Organization'] = $request->organization;
        }
        if (!Utils::isUnset($request->organizationUnit)) {
            $query['OrganizationUnit'] = $request->organizationUnit;
        }
        if (!Utils::isUnset($request->parentIdentifier)) {
            $query['ParentIdentifier'] = $request->parentIdentifier;
        }
        if (!Utils::isUnset($request->state)) {
            $query['State'] = $request->state;
        }
        if (!Utils::isUnset($request->years)) {
            $query['Years'] = $request->years;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Issues a server certificate by using a system-generated certificate signing request (CSR) file.
     *  *
     * @description Before you call this operation, make sure that you have created a root certificate authority (CA) certificate by calling the [CreateRootCACertificate](https://help.aliyun.com/document_detail/328093.html) operation and an intermediate CA certificate by calling the [CreateSubCACertificate](https://help.aliyun.com/document_detail/328094.html) operation. Only intermediate CA certificates can be used to issue server certificates.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param CreateServerCertificateRequest $request CreateServerCertificateRequest
     *
     * @return CreateServerCertificateResponse CreateServerCertificateResponse
     */
    public function createServerCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createServerCertificateWithOptions($request, $runtime);
    }

    /**
     * @summary Issues a server certificate by using a custom certificate signing request (CSR) file.
     *  *
     * @description ## Usage notes
     * Before you call this operation, make sure that you have created a root certificate authority (CA) certificate by calling the [CreateRootCACertificate](https://help.aliyun.com/document_detail/328093.html) operation and an intermediate CA certificate by calling the [CreateSubCACertificate](https://help.aliyun.com/document_detail/328094.html) operation. Only intermediate CA certificates can be used to issue server certificates.
     *  *
     * @param CreateServerCertificateWithCsrRequest $request CreateServerCertificateWithCsrRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateServerCertificateWithCsrResponse CreateServerCertificateWithCsrResponse
     */
    public function createServerCertificateWithCsrWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->afterTime)) {
            $query['AfterTime'] = $request->afterTime;
        }
        if (!Utils::isUnset($request->algorithm)) {
            $query['Algorithm'] = $request->algorithm;
        }
        if (!Utils::isUnset($request->beforeTime)) {
            $query['BeforeTime'] = $request->beforeTime;
        }
        if (!Utils::isUnset($request->commonName)) {
            $query['CommonName'] = $request->commonName;
        }
        if (!Utils::isUnset($request->country)) {
            $query['Country'] = $request->country;
        }
        if (!Utils::isUnset($request->csr)) {
            $query['Csr'] = $request->csr;
        }
        if (!Utils::isUnset($request->days)) {
            $query['Days'] = $request->days;
        }
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->enableCrl)) {
            $query['EnableCrl'] = $request->enableCrl;
        }
        if (!Utils::isUnset($request->immediately)) {
            $query['Immediately'] = $request->immediately;
        }
        if (!Utils::isUnset($request->locality)) {
            $query['Locality'] = $request->locality;
        }
        if (!Utils::isUnset($request->months)) {
            $query['Months'] = $request->months;
        }
        if (!Utils::isUnset($request->organization)) {
            $query['Organization'] = $request->organization;
        }
        if (!Utils::isUnset($request->organizationUnit)) {
            $query['OrganizationUnit'] = $request->organizationUnit;
        }
        if (!Utils::isUnset($request->parentIdentifier)) {
            $query['ParentIdentifier'] = $request->parentIdentifier;
        }
        if (!Utils::isUnset($request->state)) {
            $query['State'] = $request->state;
        }
        if (!Utils::isUnset($request->years)) {
            $query['Years'] = $request->years;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Issues a server certificate by using a custom certificate signing request (CSR) file.
     *  *
     * @description ## Usage notes
     * Before you call this operation, make sure that you have created a root certificate authority (CA) certificate by calling the [CreateRootCACertificate](https://help.aliyun.com/document_detail/328093.html) operation and an intermediate CA certificate by calling the [CreateSubCACertificate](https://help.aliyun.com/document_detail/328094.html) operation. Only intermediate CA certificates can be used to issue server certificates.
     *  *
     * @param CreateServerCertificateWithCsrRequest $request CreateServerCertificateWithCsrRequest
     *
     * @return CreateServerCertificateWithCsrResponse CreateServerCertificateWithCsrResponse
     */
    public function createServerCertificateWithCsr($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createServerCertificateWithCsrWithOptions($request, $runtime);
    }

    /**
     * @summary Creates an intermediate certificate authority (CA) certificate.
     *  *
     * @description You can call this operation to issue an intermediate certificate authority (CA) certificate by using an existing root CA certificate. Intermediate CA certificates can be used to issue client certificates and server certificates.
     * Before you call this operation, make sure that you have issued a root CA certificate by calling the [CreateRootCACertificate] operation.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param CreateSubCACertificateRequest $request CreateSubCACertificateRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateSubCACertificateResponse CreateSubCACertificateResponse
     */
    public function createSubCACertificateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->algorithm)) {
            $query['Algorithm'] = $request->algorithm;
        }
        if (!Utils::isUnset($request->commonName)) {
            $query['CommonName'] = $request->commonName;
        }
        if (!Utils::isUnset($request->countryCode)) {
            $query['CountryCode'] = $request->countryCode;
        }
        if (!Utils::isUnset($request->crlDay)) {
            $query['CrlDay'] = $request->crlDay;
        }
        if (!Utils::isUnset($request->enableCrl)) {
            $query['EnableCrl'] = $request->enableCrl;
        }
        if (!Utils::isUnset($request->extendedKeyUsages)) {
            $query['ExtendedKeyUsages'] = $request->extendedKeyUsages;
        }
        if (!Utils::isUnset($request->locality)) {
            $query['Locality'] = $request->locality;
        }
        if (!Utils::isUnset($request->organization)) {
            $query['Organization'] = $request->organization;
        }
        if (!Utils::isUnset($request->organizationUnit)) {
            $query['OrganizationUnit'] = $request->organizationUnit;
        }
        if (!Utils::isUnset($request->parentIdentifier)) {
            $query['ParentIdentifier'] = $request->parentIdentifier;
        }
        if (!Utils::isUnset($request->pathLenConstraint)) {
            $query['PathLenConstraint'] = $request->pathLenConstraint;
        }
        if (!Utils::isUnset($request->state)) {
            $query['State'] = $request->state;
        }
        if (!Utils::isUnset($request->years)) {
            $query['Years'] = $request->years;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Creates an intermediate certificate authority (CA) certificate.
     *  *
     * @description You can call this operation to issue an intermediate certificate authority (CA) certificate by using an existing root CA certificate. Intermediate CA certificates can be used to issue client certificates and server certificates.
     * Before you call this operation, make sure that you have issued a root CA certificate by calling the [CreateRootCACertificate] operation.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param CreateSubCACertificateRequest $request CreateSubCACertificateRequest
     *
     * @return CreateSubCACertificateResponse CreateSubCACertificateResponse
     */
    public function createSubCACertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSubCACertificateWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a client certificate or a server certificate that is revoked.
     *  *
     * @description Before you call this operation, you must call the [CreateRevokeClientCertificate](https://help.aliyun.com/document_detail/330876.html) operation to revoke a client certificate or a server certificate.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DeleteClientCertificateRequest $request DeleteClientCertificateRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteClientCertificateResponse DeleteClientCertificateResponse
     */
    public function deleteClientCertificateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->identifier)) {
            $query['Identifier'] = $request->identifier;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Deletes a client certificate or a server certificate that is revoked.
     *  *
     * @description Before you call this operation, you must call the [CreateRevokeClientCertificate](https://help.aliyun.com/document_detail/330876.html) operation to revoke a client certificate or a server certificate.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DeleteClientCertificateRequest $request DeleteClientCertificateRequest
     *
     * @return DeleteClientCertificateResponse DeleteClientCertificateResponse
     */
    public function deleteClientCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteClientCertificateWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details about a root certificate authority (CA) certificate or an intermediate CA certificate.
     *  *
     * @description You can call the DescribeCACertificate operation to query the details about a root CA certificate or an intermediate CA certificate by using the unique identifier of the root CA certificate or intermediate CA certificate. The details include the serial number, user information, and content of a CA certificate.
     * Before you call this operation, make sure that you have created a root CA by calling the [CreateRootCACertificate] operation or an intermediate CA certificate by calling the [CreateSubCACertificate] operation.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DescribeCACertificateRequest $request DescribeCACertificateRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeCACertificateResponse DescribeCACertificateResponse
     */
    public function describeCACertificateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->identifier)) {
            $query['Identifier'] = $request->identifier;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Queries the details about a root certificate authority (CA) certificate or an intermediate CA certificate.
     *  *
     * @description You can call the DescribeCACertificate operation to query the details about a root CA certificate or an intermediate CA certificate by using the unique identifier of the root CA certificate or intermediate CA certificate. The details include the serial number, user information, and content of a CA certificate.
     * Before you call this operation, make sure that you have created a root CA by calling the [CreateRootCACertificate] operation or an intermediate CA certificate by calling the [CreateSubCACertificate] operation.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DescribeCACertificateRequest $request DescribeCACertificateRequest
     *
     * @return DescribeCACertificateResponse DescribeCACertificateResponse
     */
    public function describeCACertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCACertificateWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the number of certificate authority (CA) certificates that you create.
     *  *
     * @description You can call the DescribeCACertificateCount operation to query the number of created CA certificates, which includes root CA certificates and intermediate CA certificates.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeCACertificateCountResponse DescribeCACertificateCountResponse
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
     * @summary Queries the number of certificate authority (CA) certificates that you create.
     *  *
     * @description You can call the DescribeCACertificateCount operation to query the number of created CA certificates, which includes root CA certificates and intermediate CA certificates.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @return DescribeCACertificateCountResponse DescribeCACertificateCountResponse
     */
    public function describeCACertificateCount()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCACertificateCountWithOptions($runtime);
    }

    /**
     * @summary Queries the details about all root certificate authority (CA) certificates and intermediate CA certificates.
     *  *
     * @description You can call the DescribeCACertificateList operation to perform a paged query of the details about all CA certificates that you create. The details include the unique identifier, serial number, user information, and content of each root CA certificate or intermediate CA certificate.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DescribeCACertificateListRequest $request DescribeCACertificateListRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeCACertificateListResponse DescribeCACertificateListResponse
     */
    public function describeCACertificateListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->caStatus)) {
            $query['CaStatus'] = $request->caStatus;
        }
        if (!Utils::isUnset($request->certType)) {
            $query['CertType'] = $request->certType;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->identifier)) {
            $query['Identifier'] = $request->identifier;
        }
        if (!Utils::isUnset($request->issuerType)) {
            $query['IssuerType'] = $request->issuerType;
        }
        if (!Utils::isUnset($request->showSize)) {
            $query['ShowSize'] = $request->showSize;
        }
        if (!Utils::isUnset($request->validStatus)) {
            $query['ValidStatus'] = $request->validStatus;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Queries the details about all root certificate authority (CA) certificates and intermediate CA certificates.
     *  *
     * @description You can call the DescribeCACertificateList operation to perform a paged query of the details about all CA certificates that you create. The details include the unique identifier, serial number, user information, and content of each root CA certificate or intermediate CA certificate.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DescribeCACertificateListRequest $request DescribeCACertificateListRequest
     *
     * @return DescribeCACertificateListResponse DescribeCACertificateListResponse
     */
    public function describeCACertificateList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCACertificateListWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the encrypted private key of a client certificate or a server certificate.
     *  *
     * @description ## Usage notes
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
     *  *
     * @param DescribeCertificatePrivateKeyRequest $request DescribeCertificatePrivateKeyRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeCertificatePrivateKeyResponse DescribeCertificatePrivateKeyResponse
     */
    public function describeCertificatePrivateKeyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->encryptedCode)) {
            $query['EncryptedCode'] = $request->encryptedCode;
        }
        if (!Utils::isUnset($request->identifier)) {
            $query['Identifier'] = $request->identifier;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Queries the encrypted private key of a client certificate or a server certificate.
     *  *
     * @description ## Usage notes
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
     *  *
     * @param DescribeCertificatePrivateKeyRequest $request DescribeCertificatePrivateKeyRequest
     *
     * @return DescribeCertificatePrivateKeyResponse DescribeCertificatePrivateKeyResponse
     */
    public function describeCertificatePrivateKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCertificatePrivateKeyWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details about a client certificate or a server certificate by using the unique identifier of the certificate.
     *  *
     * @description You can call the DescribeClientCertificate operation to query the details about a client certificate or a server certificate by using the unique identifier of the certificate. The details include the serial number, user information, content, and status of each certificate.
     * Before you call this operation, make sure that you have created a client certificate or a server certificate.
     * For more information about how to call an operation to create a client certificate, see the following topics:
     * *   [CreateClientCertificate](https://help.aliyun.com/document_detail/330873.html)
     * *   [CreateClientCertificateWithCsr](https://help.aliyun.com/document_detail/330875.html)
     * For more information about how to call an operation to create a server certificate, see the following topics:
     * *   [CreateServerCertificate](https://help.aliyun.com/document_detail/330877.html)
     * *   [CreateServerCertificateWithCsr](https://help.aliyun.com/document_detail/330878.html)
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DescribeClientCertificateRequest $request DescribeClientCertificateRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeClientCertificateResponse DescribeClientCertificateResponse
     */
    public function describeClientCertificateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->identifier)) {
            $query['Identifier'] = $request->identifier;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Queries the details about a client certificate or a server certificate by using the unique identifier of the certificate.
     *  *
     * @description You can call the DescribeClientCertificate operation to query the details about a client certificate or a server certificate by using the unique identifier of the certificate. The details include the serial number, user information, content, and status of each certificate.
     * Before you call this operation, make sure that you have created a client certificate or a server certificate.
     * For more information about how to call an operation to create a client certificate, see the following topics:
     * *   [CreateClientCertificate](https://help.aliyun.com/document_detail/330873.html)
     * *   [CreateClientCertificateWithCsr](https://help.aliyun.com/document_detail/330875.html)
     * For more information about how to call an operation to create a server certificate, see the following topics:
     * *   [CreateServerCertificate](https://help.aliyun.com/document_detail/330877.html)
     * *   [CreateServerCertificateWithCsr](https://help.aliyun.com/document_detail/330878.html)
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DescribeClientCertificateRequest $request DescribeClientCertificateRequest
     *
     * @return DescribeClientCertificateResponse DescribeClientCertificateResponse
     */
    public function describeClientCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeClientCertificateWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the status information about client certificates and server certificates by using the unique identifiers of the certificates.
     *  *
     * @description You can call the DescribeClientCertificateStatus operation to query the status information about multiple client certificates or server certificates at a time by using the unique identifiers of the certificates. For example, you can check whether a certificate is revoked.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DescribeClientCertificateStatusRequest $request DescribeClientCertificateStatusRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeClientCertificateStatusResponse DescribeClientCertificateStatusResponse
     */
    public function describeClientCertificateStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->identifier)) {
            $query['Identifier'] = $request->identifier;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Queries the status information about client certificates and server certificates by using the unique identifiers of the certificates.
     *  *
     * @description You can call the DescribeClientCertificateStatus operation to query the status information about multiple client certificates or server certificates at a time by using the unique identifiers of the certificates. For example, you can check whether a certificate is revoked.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DescribeClientCertificateStatusRequest $request DescribeClientCertificateStatusRequest
     *
     * @return DescribeClientCertificateStatusResponse DescribeClientCertificateStatusResponse
     */
    public function describeClientCertificateStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeClientCertificateStatusWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the status information about a private root certificate authority (CA) instance or a private intermediate CA instance that you purchase by using the Certificate Management Service console.
     *  *
     * @description ## Usage notes
     * You can call the GetCAInstanceStatus operation to query the status information of a private CA instance by using the ID of the instance. The instance is purchased by using the SSL Certificates Service console. The status information includes the status of the private CA instance, the number of certificates that can be issued by using the private CA instance, and the number of issued certificates.
     * Before you call this operation, make sure that you have purchased a private CA by using the [SSL Certificates Service console](https://yundun.console.aliyun.com/?p=cas#/pca/rootlist). For more information, see [Create a private CA](https://help.aliyun.com/document_detail/208553.html).
     *  *
     * @param GetCAInstanceStatusRequest $request GetCAInstanceStatusRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return GetCAInstanceStatusResponse GetCAInstanceStatusResponse
     */
    public function getCAInstanceStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->identifier)) {
            $query['Identifier'] = $request->identifier;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Queries the status information about a private root certificate authority (CA) instance or a private intermediate CA instance that you purchase by using the Certificate Management Service console.
     *  *
     * @description ## Usage notes
     * You can call the GetCAInstanceStatus operation to query the status information of a private CA instance by using the ID of the instance. The instance is purchased by using the SSL Certificates Service console. The status information includes the status of the private CA instance, the number of certificates that can be issued by using the private CA instance, and the number of issued certificates.
     * Before you call this operation, make sure that you have purchased a private CA by using the [SSL Certificates Service console](https://yundun.console.aliyun.com/?p=cas#/pca/rootlist). For more information, see [Create a private CA](https://help.aliyun.com/document_detail/208553.html).
     *  *
     * @param GetCAInstanceStatusRequest $request GetCAInstanceStatusRequest
     *
     * @return GetCAInstanceStatusResponse GetCAInstanceStatusResponse
     */
    public function getCAInstanceStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCAInstanceStatusWithOptions($request, $runtime);
    }

    /**
     * @summary 获取证书列表
     *  *
     * @param ListCertRequest $request ListCertRequest
     * @param RuntimeOptions  $runtime runtime options for this request RuntimeOptions
     *
     * @return ListCertResponse ListCertResponse
     */
    public function listCertWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->afterDate)) {
            $query['AfterDate'] = $request->afterDate;
        }
        if (!Utils::isUnset($request->beforeDate)) {
            $query['BeforeDate'] = $request->beforeDate;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->instanceUuid)) {
            $query['InstanceUuid'] = $request->instanceUuid;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->showSize)) {
            $query['ShowSize'] = $request->showSize;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 获取证书列表
     *  *
     * @param ListCertRequest $request ListCertRequest
     *
     * @return ListCertResponse ListCertResponse
     */
    public function listCert($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCertWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details about all client certificates and server certificates.
     *  *
     * @description You can call the ListClientCertificate operation to perform a paged query of the details about all client certificates and server certificates that you create. The details include the unique identifier, serial number, user information, content, and status of each certificate.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param ListClientCertificateRequest $request ListClientCertificateRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return ListClientCertificateResponse ListClientCertificateResponse
     */
    public function listClientCertificateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->identifier)) {
            $query['Identifier'] = $request->identifier;
        }
        if (!Utils::isUnset($request->showSize)) {
            $query['ShowSize'] = $request->showSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Queries the details about all client certificates and server certificates.
     *  *
     * @description You can call the ListClientCertificate operation to perform a paged query of the details about all client certificates and server certificates that you create. The details include the unique identifier, serial number, user information, content, and status of each certificate.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param ListClientCertificateRequest $request ListClientCertificateRequest
     *
     * @return ListClientCertificateResponse ListClientCertificateResponse
     */
    public function listClientCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listClientCertificateWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details about all client certificates and server certificates that are revoked.
     *  *
     * @description You can call the ListRevokeCertificate operation to perform a paged query of the details about all revoked client certificates and server certificates. The details include the unique identifier, serial number, and revocation date of each certificate.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param ListRevokeCertificateRequest $request ListRevokeCertificateRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return ListRevokeCertificateResponse ListRevokeCertificateResponse
     */
    public function listRevokeCertificateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->showSize)) {
            $query['ShowSize'] = $request->showSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Queries the details about all client certificates and server certificates that are revoked.
     *  *
     * @description You can call the ListRevokeCertificate operation to perform a paged query of the details about all revoked client certificates and server certificates. The details include the unique identifier, serial number, and revocation date of each certificate.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param ListRevokeCertificateRequest $request ListRevokeCertificateRequest
     *
     * @return ListRevokeCertificateResponse ListRevokeCertificateResponse
     */
    public function listRevokeCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRevokeCertificateWithOptions($request, $runtime);
    }

    /**
     * @summary Changes the status of a root certificate authority (CA) certificate or an intermediate CA certificate from ISSUE to REVOKE.
     *  *
     * @description After a CA certificate is created, the CA certificate is in the ISSUE state by default. You can call the UpdateCACertificateStatus operation to change the status of a CA certificate from ISSUE to REVOKE. If a CA certificate is in the ISSUE state, the CA certificate can be used to issue certificates. If a CA certificate is in the REVOKE state, the CA certificate cannot be used to issue certificates, and the certificates that are issued from the CA certificate become invalid.
     * Before you call this operation, make sure that you have created a root CA by calling the [CreateRootCACertificate] operation or an intermediate CA certificate by calling the [CreateSubCACertificate] operation.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param UpdateCACertificateStatusRequest $request UpdateCACertificateStatusRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateCACertificateStatusResponse UpdateCACertificateStatusResponse
     */
    public function updateCACertificateStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->identifier)) {
            $query['Identifier'] = $request->identifier;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Changes the status of a root certificate authority (CA) certificate or an intermediate CA certificate from ISSUE to REVOKE.
     *  *
     * @description After a CA certificate is created, the CA certificate is in the ISSUE state by default. You can call the UpdateCACertificateStatus operation to change the status of a CA certificate from ISSUE to REVOKE. If a CA certificate is in the ISSUE state, the CA certificate can be used to issue certificates. If a CA certificate is in the REVOKE state, the CA certificate cannot be used to issue certificates, and the certificates that are issued from the CA certificate become invalid.
     * Before you call this operation, make sure that you have created a root CA by calling the [CreateRootCACertificate] operation or an intermediate CA certificate by calling the [CreateSubCACertificate] operation.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param UpdateCACertificateStatusRequest $request UpdateCACertificateStatusRequest
     *
     * @return UpdateCACertificateStatusResponse UpdateCACertificateStatusResponse
     */
    public function updateCACertificateStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCACertificateStatusWithOptions($request, $runtime);
    }

    /**
     * @summary 上传pca证书到SSL上传证书
     *  *
     * @param UploadPcaCertToCasRequest $request UploadPcaCertToCasRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return UploadPcaCertToCasResponse UploadPcaCertToCasResponse
     */
    public function uploadPcaCertToCasWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ids)) {
            $query['Ids'] = $request->ids;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 上传pca证书到SSL上传证书
     *  *
     * @param UploadPcaCertToCasRequest $request UploadPcaCertToCasRequest
     *
     * @return UploadPcaCertToCasResponse UploadPcaCertToCasResponse
     */
    public function uploadPcaCertToCas($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uploadPcaCertToCasWithOptions($request, $runtime);
    }
}
