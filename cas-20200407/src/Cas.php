<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200407;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Cas\V20200407\Models\CancelCertificateForPackageRequestRequest;
use AlibabaCloud\SDK\Cas\V20200407\Models\CancelCertificateForPackageRequestResponse;
use AlibabaCloud\SDK\Cas\V20200407\Models\CancelOrderRequestRequest;
use AlibabaCloud\SDK\Cas\V20200407\Models\CancelOrderRequestResponse;
use AlibabaCloud\SDK\Cas\V20200407\Models\CreateCertificateForPackageRequestRequest;
use AlibabaCloud\SDK\Cas\V20200407\Models\CreateCertificateForPackageRequestResponse;
use AlibabaCloud\SDK\Cas\V20200407\Models\CreateCertificateRequestRequest;
use AlibabaCloud\SDK\Cas\V20200407\Models\CreateCertificateRequestResponse;
use AlibabaCloud\SDK\Cas\V20200407\Models\CreateCertificateWithCsrRequestRequest;
use AlibabaCloud\SDK\Cas\V20200407\Models\CreateCertificateWithCsrRequestResponse;
use AlibabaCloud\SDK\Cas\V20200407\Models\CreateWHClientCertificateRequest;
use AlibabaCloud\SDK\Cas\V20200407\Models\CreateWHClientCertificateResponse;
use AlibabaCloud\SDK\Cas\V20200407\Models\DecryptRequest;
use AlibabaCloud\SDK\Cas\V20200407\Models\DecryptResponse;
use AlibabaCloud\SDK\Cas\V20200407\Models\DeleteCertificateRequestRequest;
use AlibabaCloud\SDK\Cas\V20200407\Models\DeleteCertificateRequestResponse;
use AlibabaCloud\SDK\Cas\V20200407\Models\DeletePCACertRequest;
use AlibabaCloud\SDK\Cas\V20200407\Models\DeletePCACertResponse;
use AlibabaCloud\SDK\Cas\V20200407\Models\DeleteUserCertificateRequest;
use AlibabaCloud\SDK\Cas\V20200407\Models\DeleteUserCertificateResponse;
use AlibabaCloud\SDK\Cas\V20200407\Models\DescribeCertificateStateRequest;
use AlibabaCloud\SDK\Cas\V20200407\Models\DescribeCertificateStateResponse;
use AlibabaCloud\SDK\Cas\V20200407\Models\DescribePackageStateRequest;
use AlibabaCloud\SDK\Cas\V20200407\Models\DescribePackageStateResponse;
use AlibabaCloud\SDK\Cas\V20200407\Models\EncryptRequest;
use AlibabaCloud\SDK\Cas\V20200407\Models\EncryptResponse;
use AlibabaCloud\SDK\Cas\V20200407\Models\GetCertWarehouseQuotaResponse;
use AlibabaCloud\SDK\Cas\V20200407\Models\GetUserCertificateDetailRequest;
use AlibabaCloud\SDK\Cas\V20200407\Models\GetUserCertificateDetailResponse;
use AlibabaCloud\SDK\Cas\V20200407\Models\ListCertRequest;
use AlibabaCloud\SDK\Cas\V20200407\Models\ListCertResponse;
use AlibabaCloud\SDK\Cas\V20200407\Models\ListCertWarehouseRequest;
use AlibabaCloud\SDK\Cas\V20200407\Models\ListCertWarehouseResponse;
use AlibabaCloud\SDK\Cas\V20200407\Models\ListUserCertificateOrderRequest;
use AlibabaCloud\SDK\Cas\V20200407\Models\ListUserCertificateOrderResponse;
use AlibabaCloud\SDK\Cas\V20200407\Models\RenewCertificateOrderForPackageRequestRequest;
use AlibabaCloud\SDK\Cas\V20200407\Models\RenewCertificateOrderForPackageRequestResponse;
use AlibabaCloud\SDK\Cas\V20200407\Models\RevokeWHClientCertificateRequest;
use AlibabaCloud\SDK\Cas\V20200407\Models\RevokeWHClientCertificateResponse;
use AlibabaCloud\SDK\Cas\V20200407\Models\SignRequest;
use AlibabaCloud\SDK\Cas\V20200407\Models\SignResponse;
use AlibabaCloud\SDK\Cas\V20200407\Models\UploadPCACertRequest;
use AlibabaCloud\SDK\Cas\V20200407\Models\UploadPCACertResponse;
use AlibabaCloud\SDK\Cas\V20200407\Models\UploadUserCertificateRequest;
use AlibabaCloud\SDK\Cas\V20200407\Models\UploadUserCertificateResponse;
use AlibabaCloud\SDK\Cas\V20200407\Models\VerifyRequest;
use AlibabaCloud\SDK\Cas\V20200407\Models\VerifyResponse;
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
            'cn-huhehaote-nebula-1'       => 'cas.aliyuncs.com',
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
            'cn-wulanchabu'               => 'cas.aliyuncs.com',
            'cn-yushanfang'               => 'cas.aliyuncs.com',
            'cn-zhangbei'                 => 'cas.aliyuncs.com',
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
     * Revokes an issued certificate and cancels the application order of the certificate.
     *   *
     * @param CancelCertificateForPackageRequestRequest $request CancelCertificateForPackageRequestRequest
     * @param RuntimeOptions                            $runtime runtime options for this request RuntimeOptions
     *
     * @return CancelCertificateForPackageRequestResponse CancelCertificateForPackageRequestResponse
     */
    public function cancelCertificateForPackageRequestWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->orderId)) {
            $query['OrderId'] = $request->orderId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CancelCertificateForPackageRequest',
            'version'     => '2020-04-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CancelCertificateForPackageRequestResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Revokes an issued certificate and cancels the application order of the certificate.
     *   *
     * @param CancelCertificateForPackageRequestRequest $request CancelCertificateForPackageRequestRequest
     *
     * @return CancelCertificateForPackageRequestResponse CancelCertificateForPackageRequestResponse
     */
    public function cancelCertificateForPackageRequest($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelCertificateForPackageRequestWithOptions($request, $runtime);
    }

    /**
     * You can call the CancelOrderRequest operation to cancel a certificate application order only in the following scenarios:
     *   * *   The order is in the **pending validation** state. You have submitted a certificate application but the verification of the domain name ownership is not complete.
     *   * *   The order is in the **being reviewed** state. You have submitted a certificate application and the verification of the domain name ownership is complete, but the certificate authority (CA) does not complete the review of the certificate application.
     *   * After a certificate application order is canceled, the status of the order changes to the **pending application** state. In this case, you can call the [DeleteCertificateRequest](~~164109~~) operation to delete the certificate application order. Then, the consumed certificate quota is returned to you.
     *   *
     * @param CancelOrderRequestRequest $request CancelOrderRequestRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return CancelOrderRequestResponse CancelOrderRequestResponse
     */
    public function cancelOrderRequestWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->orderId)) {
            $query['OrderId'] = $request->orderId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CancelOrderRequest',
            'version'     => '2020-04-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CancelOrderRequestResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call the CancelOrderRequest operation to cancel a certificate application order only in the following scenarios:
     *   * *   The order is in the **pending validation** state. You have submitted a certificate application but the verification of the domain name ownership is not complete.
     *   * *   The order is in the **being reviewed** state. You have submitted a certificate application and the verification of the domain name ownership is complete, but the certificate authority (CA) does not complete the review of the certificate application.
     *   * After a certificate application order is canceled, the status of the order changes to the **pending application** state. In this case, you can call the [DeleteCertificateRequest](~~164109~~) operation to delete the certificate application order. Then, the consumed certificate quota is returned to you.
     *   *
     * @param CancelOrderRequestRequest $request CancelOrderRequestRequest
     *
     * @return CancelOrderRequestResponse CancelOrderRequestResponse
     */
    public function cancelOrderRequest($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelOrderRequestWithOptions($request, $runtime);
    }

    /**
     * *   Before you call this operation, make sure that you have purchased a certificate resource plan of the required specifications. For more information about how to purchase a certificate resource plan, see [Purchase a certificate resource plan](~~28542~~). You can call the [DescribePackageState](~~455800~~) operation to query the usage of certificate resource plans of specified specifications, including the total number of certificate resource plans that you purchase, the number of certificate applications that are submitted, and the number of certificates that are issued.
     *   * *   After you call this operation to submit a certificate application and the certificate is issued, the certificate quota provided by the resource plan that you purchased is consumed. When you call this operation, you can use the **ProductCode** parameter to specify the specifications of the certificate that you want to apply for.
     *   * *   After you call this operation to submit a certificate application, you also need to call the [DescribeCertificateState](~~455800~~) operation to obtain the information that is required to complete the verification of the domain name ownership, and complete the verification. If you use the DNS verification method, you must complete the verification in the management platform of the domain name. If you use the file verification method, you must complete the verification in the DNS server. Then, the certificate application order will be reviewed by the certificate authority (CA).
     *   *
     * @param CreateCertificateForPackageRequestRequest $request CreateCertificateForPackageRequestRequest
     * @param RuntimeOptions                            $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateCertificateForPackageRequestResponse CreateCertificateForPackageRequestResponse
     */
    public function createCertificateForPackageRequestWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->companyName)) {
            $query['CompanyName'] = $request->companyName;
        }
        if (!Utils::isUnset($request->csr)) {
            $query['Csr'] = $request->csr;
        }
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->email)) {
            $query['Email'] = $request->email;
        }
        if (!Utils::isUnset($request->phone)) {
            $query['Phone'] = $request->phone;
        }
        if (!Utils::isUnset($request->productCode)) {
            $query['ProductCode'] = $request->productCode;
        }
        if (!Utils::isUnset($request->username)) {
            $query['Username'] = $request->username;
        }
        if (!Utils::isUnset($request->validateType)) {
            $query['ValidateType'] = $request->validateType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateCertificateForPackageRequest',
            'version'     => '2020-04-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateCertificateForPackageRequestResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * *   Before you call this operation, make sure that you have purchased a certificate resource plan of the required specifications. For more information about how to purchase a certificate resource plan, see [Purchase a certificate resource plan](~~28542~~). You can call the [DescribePackageState](~~455800~~) operation to query the usage of certificate resource plans of specified specifications, including the total number of certificate resource plans that you purchase, the number of certificate applications that are submitted, and the number of certificates that are issued.
     *   * *   After you call this operation to submit a certificate application and the certificate is issued, the certificate quota provided by the resource plan that you purchased is consumed. When you call this operation, you can use the **ProductCode** parameter to specify the specifications of the certificate that you want to apply for.
     *   * *   After you call this operation to submit a certificate application, you also need to call the [DescribeCertificateState](~~455800~~) operation to obtain the information that is required to complete the verification of the domain name ownership, and complete the verification. If you use the DNS verification method, you must complete the verification in the management platform of the domain name. If you use the file verification method, you must complete the verification in the DNS server. Then, the certificate application order will be reviewed by the certificate authority (CA).
     *   *
     * @param CreateCertificateForPackageRequestRequest $request CreateCertificateForPackageRequestRequest
     *
     * @return CreateCertificateForPackageRequestResponse CreateCertificateForPackageRequestResponse
     */
    public function createCertificateForPackageRequest($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCertificateForPackageRequestWithOptions($request, $runtime);
    }

    /**
     * *   You can call this operation to apply for only DV certificates. If you want to apply for an organization validated (OV) or extended validation (EV) certificate, we recommend that you call the [CreateCertificateForPackageRequest](~~455296~~) operation. This operation allows you to apply for certificates of all specifications and specify the method to generate a certificate signing request (CSR) file.
     *   * *   Before you call this operation, make sure that you have purchased a certificate resource plan of the required specifications. For more information about how to purchase a certificate resource plan, see [Purchase a certificate resource plan](~~28542~~). You can call the [DescribePackageState](~~455803~~) operation to query the usage of certificate resource plans of specified specifications, including the total number of purchased certificate resource plans of the specified specifications, the number of times that certificate applications have been submitted, and the number of times that certificates have been issued.
     *   * *   When you call this operation, you can use the **ProductCode** parameter to specify the specifications of the certificate.
     *   * *   After you call this operation to submit a certificate application, Certificate Management Service automatically creates a CSR file for your application and consumes the certificate quota in the certificate resource plans of the specified specifications that you purchased. After you call this operation, you also need to call the [DescribeCertificateState](~~455800~~) operation to obtain the information that is required to complete domain name verification, and manually complete the verification. If you use the DNS verification method, you must complete the verification on the management platform of the domain name. If you use the file verification method, you must complete the verification on your DNS server. Then, the certificate authority (CA) will review your certificate application.
     *   *
     * @param CreateCertificateRequestRequest $request CreateCertificateRequestRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateCertificateRequestResponse CreateCertificateRequestResponse
     */
    public function createCertificateRequestWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->email)) {
            $query['Email'] = $request->email;
        }
        if (!Utils::isUnset($request->phone)) {
            $query['Phone'] = $request->phone;
        }
        if (!Utils::isUnset($request->productCode)) {
            $query['ProductCode'] = $request->productCode;
        }
        if (!Utils::isUnset($request->username)) {
            $query['Username'] = $request->username;
        }
        if (!Utils::isUnset($request->validateType)) {
            $query['ValidateType'] = $request->validateType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateCertificateRequest',
            'version'     => '2020-04-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateCertificateRequestResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * *   You can call this operation to apply for only DV certificates. If you want to apply for an organization validated (OV) or extended validation (EV) certificate, we recommend that you call the [CreateCertificateForPackageRequest](~~455296~~) operation. This operation allows you to apply for certificates of all specifications and specify the method to generate a certificate signing request (CSR) file.
     *   * *   Before you call this operation, make sure that you have purchased a certificate resource plan of the required specifications. For more information about how to purchase a certificate resource plan, see [Purchase a certificate resource plan](~~28542~~). You can call the [DescribePackageState](~~455803~~) operation to query the usage of certificate resource plans of specified specifications, including the total number of purchased certificate resource plans of the specified specifications, the number of times that certificate applications have been submitted, and the number of times that certificates have been issued.
     *   * *   When you call this operation, you can use the **ProductCode** parameter to specify the specifications of the certificate.
     *   * *   After you call this operation to submit a certificate application, Certificate Management Service automatically creates a CSR file for your application and consumes the certificate quota in the certificate resource plans of the specified specifications that you purchased. After you call this operation, you also need to call the [DescribeCertificateState](~~455800~~) operation to obtain the information that is required to complete domain name verification, and manually complete the verification. If you use the DNS verification method, you must complete the verification on the management platform of the domain name. If you use the file verification method, you must complete the verification on your DNS server. Then, the certificate authority (CA) will review your certificate application.
     *   *
     * @param CreateCertificateRequestRequest $request CreateCertificateRequestRequest
     *
     * @return CreateCertificateRequestResponse CreateCertificateRequestResponse
     */
    public function createCertificateRequest($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCertificateRequestWithOptions($request, $runtime);
    }

    /**
     * *   You can call the CreateCertificateWithCsrRequest operation to apply only for DV certificates. We recommend that you call the [CreateCertificateForPackageRequest](~~455296~~) operation to submit a certificate application. This operation allows you to apply for certificates of all specifications and specify the method to generate a CSR file.
     *   * *   Before you call this operation, make sure that you have purchased a certificate resource plan of the required specifications. For more information about how to purchase a certificate resource plan, see [Purchase a certificate resource plan](~~28542~~). You can call the [DescribePackageState](~~164110~~) operation to query the usage of certificate resource plans of specified specifications. The usage information includes the total number of purchased certificate resource plans of the specified specifications, the number of times that certificate applications are submitted, and the number of times that certificates are issued.
     *   * *   When you call this operation, you can use the **ProductCode** parameter to specify the specifications of the certificate.
     *   * *   After you call this operation to submit a certificate application, the certificate quota of the required specifications that you purchased is consumed. After you call this operation, you also need to call the [DescribeCertificateState](~~164111~~) operation to obtain the information that is required to complete domain name verification, and manually complete the verification. If you use the DNS verification method, you must complete the verification on the management platform of the domain name. If you use the file verification method, you must complete the verification on your DNS server. The certificate authority (CA) starts to review your certificate application only after the domain name verification is complete.
     *   *
     * @param CreateCertificateWithCsrRequestRequest $request CreateCertificateWithCsrRequestRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateCertificateWithCsrRequestResponse CreateCertificateWithCsrRequestResponse
     */
    public function createCertificateWithCsrRequestWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->csr)) {
            $query['Csr'] = $request->csr;
        }
        if (!Utils::isUnset($request->email)) {
            $query['Email'] = $request->email;
        }
        if (!Utils::isUnset($request->phone)) {
            $query['Phone'] = $request->phone;
        }
        if (!Utils::isUnset($request->productCode)) {
            $query['ProductCode'] = $request->productCode;
        }
        if (!Utils::isUnset($request->username)) {
            $query['Username'] = $request->username;
        }
        if (!Utils::isUnset($request->validateType)) {
            $query['ValidateType'] = $request->validateType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateCertificateWithCsrRequest',
            'version'     => '2020-04-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateCertificateWithCsrRequestResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * *   You can call the CreateCertificateWithCsrRequest operation to apply only for DV certificates. We recommend that you call the [CreateCertificateForPackageRequest](~~455296~~) operation to submit a certificate application. This operation allows you to apply for certificates of all specifications and specify the method to generate a CSR file.
     *   * *   Before you call this operation, make sure that you have purchased a certificate resource plan of the required specifications. For more information about how to purchase a certificate resource plan, see [Purchase a certificate resource plan](~~28542~~). You can call the [DescribePackageState](~~164110~~) operation to query the usage of certificate resource plans of specified specifications. The usage information includes the total number of purchased certificate resource plans of the specified specifications, the number of times that certificate applications are submitted, and the number of times that certificates are issued.
     *   * *   When you call this operation, you can use the **ProductCode** parameter to specify the specifications of the certificate.
     *   * *   After you call this operation to submit a certificate application, the certificate quota of the required specifications that you purchased is consumed. After you call this operation, you also need to call the [DescribeCertificateState](~~164111~~) operation to obtain the information that is required to complete domain name verification, and manually complete the verification. If you use the DNS verification method, you must complete the verification on the management platform of the domain name. If you use the file verification method, you must complete the verification on your DNS server. The certificate authority (CA) starts to review your certificate application only after the domain name verification is complete.
     *   *
     * @param CreateCertificateWithCsrRequestRequest $request CreateCertificateWithCsrRequestRequest
     *
     * @return CreateCertificateWithCsrRequestResponse CreateCertificateWithCsrRequestResponse
     */
    public function createCertificateWithCsrRequest($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCertificateWithCsrRequestWithOptions($request, $runtime);
    }

    /**
     * @param CreateWHClientCertificateRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CreateWHClientCertificateResponse
     */
    public function createWHClientCertificateWithOptions($request, $runtime)
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
            'action'      => 'CreateWHClientCertificate',
            'version'     => '2020-04-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateWHClientCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateWHClientCertificateRequest $request
     *
     * @return CreateWHClientCertificateResponse
     */
    public function createWHClientCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createWHClientCertificateWithOptions($request, $runtime);
    }

    /**
     * @param DecryptRequest $request
     * @param RuntimeOptions $runtime
     *
     * @return DecryptResponse
     */
    public function decryptWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->algorithm)) {
            $query['Algorithm'] = $request->algorithm;
        }
        if (!Utils::isUnset($request->certIdentifier)) {
            $query['CertIdentifier'] = $request->certIdentifier;
        }
        if (!Utils::isUnset($request->ciphertextBlob)) {
            $query['CiphertextBlob'] = $request->ciphertextBlob;
        }
        if (!Utils::isUnset($request->messageType)) {
            $query['MessageType'] = $request->messageType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'Decrypt',
            'version'     => '2020-04-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DecryptResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DecryptRequest $request
     *
     * @return DecryptResponse
     */
    public function decrypt($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->decryptWithOptions($request, $runtime);
    }

    /**
     * You can call this operation to delete a certificate application order only in the following scenarios:
     *   * *   The status of the order is review failed. You have called the [DescribeCertificateState](~~455800~~)  operation to query the status of the certificate application order and the value of the **Type** parameter is **verify_fail**.
     *   * *   The status of the order is **pending application**. You have called the [CancelOrderRequest](~~455299~~) operation to cancel a certificate application order whose status is pending review or being reviewed. The status of the certificate application order that is canceled in this case changes to **pending application**.
     *   *
     * @param DeleteCertificateRequestRequest $request DeleteCertificateRequestRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteCertificateRequestResponse DeleteCertificateRequestResponse
     */
    public function deleteCertificateRequestWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->orderId)) {
            $query['OrderId'] = $request->orderId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteCertificateRequest',
            'version'     => '2020-04-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteCertificateRequestResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this operation to delete a certificate application order only in the following scenarios:
     *   * *   The status of the order is review failed. You have called the [DescribeCertificateState](~~455800~~)  operation to query the status of the certificate application order and the value of the **Type** parameter is **verify_fail**.
     *   * *   The status of the order is **pending application**. You have called the [CancelOrderRequest](~~455299~~) operation to cancel a certificate application order whose status is pending review or being reviewed. The status of the certificate application order that is canceled in this case changes to **pending application**.
     *   *
     * @param DeleteCertificateRequestRequest $request DeleteCertificateRequestRequest
     *
     * @return DeleteCertificateRequestResponse DeleteCertificateRequestResponse
     */
    public function deleteCertificateRequest($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCertificateRequestWithOptions($request, $runtime);
    }

    /**
     * @param DeletePCACertRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeletePCACertResponse
     */
    public function deletePCACertWithOptions($request, $runtime)
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
            'action'      => 'DeletePCACert',
            'version'     => '2020-04-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeletePCACertResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeletePCACertRequest $request
     *
     * @return DeletePCACertResponse
     */
    public function deletePCACert($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deletePCACertWithOptions($request, $runtime);
    }

    /**
     * You can call this operation up to 100 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param DeleteUserCertificateRequest $request DeleteUserCertificateRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteUserCertificateResponse DeleteUserCertificateResponse
     */
    public function deleteUserCertificateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->certId)) {
            $query['CertId'] = $request->certId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteUserCertificate',
            'version'     => '2020-04-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteUserCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this operation up to 100 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param DeleteUserCertificateRequest $request DeleteUserCertificateRequest
     *
     * @return DeleteUserCertificateResponse DeleteUserCertificateResponse
     */
    public function deleteUserCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteUserCertificateWithOptions($request, $runtime);
    }

    /**
     * If you do not complete the verification of the domain name ownership after you submit a certificate application, you can call this operation to obtain the information that is required to complete the verification. You can complete the verification of the domain name ownership based on the data returned. If you use the DNS verification method, you must complete the verification on the management platform of the domain name. If you use the file verification method, you must complete the verification on the DNS server.
     *   * The certificate authority (CA) reviews your certificate application only after you complete the verification of the domain name ownership. After the CA approves your certificate application, the CA issues the certificate. If a certificate is issued, you can call this operation to obtain the CA certificate and private key of the certificate.
     *   *
     * @param DescribeCertificateStateRequest $request DescribeCertificateStateRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeCertificateStateResponse DescribeCertificateStateResponse
     */
    public function describeCertificateStateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->orderId)) {
            $query['OrderId'] = $request->orderId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeCertificateState',
            'version'     => '2020-04-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCertificateStateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * If you do not complete the verification of the domain name ownership after you submit a certificate application, you can call this operation to obtain the information that is required to complete the verification. You can complete the verification of the domain name ownership based on the data returned. If you use the DNS verification method, you must complete the verification on the management platform of the domain name. If you use the file verification method, you must complete the verification on the DNS server.
     *   * The certificate authority (CA) reviews your certificate application only after you complete the verification of the domain name ownership. After the CA approves your certificate application, the CA issues the certificate. If a certificate is issued, you can call this operation to obtain the CA certificate and private key of the certificate.
     *   *
     * @param DescribeCertificateStateRequest $request DescribeCertificateStateRequest
     *
     * @return DescribeCertificateStateResponse DescribeCertificateStateResponse
     */
    public function describeCertificateState($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCertificateStateWithOptions($request, $runtime);
    }

    /**
     * @param DescribePackageStateRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribePackageStateResponse
     */
    public function describePackageStateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->productCode)) {
            $query['ProductCode'] = $request->productCode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePackageState',
            'version'     => '2020-04-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePackageStateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribePackageStateRequest $request
     *
     * @return DescribePackageStateResponse
     */
    public function describePackageState($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePackageStateWithOptions($request, $runtime);
    }

    /**
     * @param EncryptRequest $request
     * @param RuntimeOptions $runtime
     *
     * @return EncryptResponse
     */
    public function encryptWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->algorithm)) {
            $query['Algorithm'] = $request->algorithm;
        }
        if (!Utils::isUnset($request->certIdentifier)) {
            $query['CertIdentifier'] = $request->certIdentifier;
        }
        if (!Utils::isUnset($request->messageType)) {
            $query['MessageType'] = $request->messageType;
        }
        if (!Utils::isUnset($request->plaintext)) {
            $query['Plaintext'] = $request->plaintext;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'Encrypt',
            'version'     => '2020-04-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EncryptResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param EncryptRequest $request
     *
     * @return EncryptResponse
     */
    public function encrypt($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->encryptWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return GetCertWarehouseQuotaResponse
     */
    public function getCertWarehouseQuotaWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'GetCertWarehouseQuota',
            'version'     => '2020-04-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetCertWarehouseQuotaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return GetCertWarehouseQuotaResponse
     */
    public function getCertWarehouseQuota()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCertWarehouseQuotaWithOptions($runtime);
    }

    /**
     * You can call this operation up to 100 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param GetUserCertificateDetailRequest $request GetUserCertificateDetailRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return GetUserCertificateDetailResponse GetUserCertificateDetailResponse
     */
    public function getUserCertificateDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->certFilter)) {
            $query['CertFilter'] = $request->certFilter;
        }
        if (!Utils::isUnset($request->certId)) {
            $query['CertId'] = $request->certId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetUserCertificateDetail',
            'version'     => '2020-04-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetUserCertificateDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this operation up to 100 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param GetUserCertificateDetailRequest $request GetUserCertificateDetailRequest
     *
     * @return GetUserCertificateDetailResponse GetUserCertificateDetailResponse
     */
    public function getUserCertificateDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUserCertificateDetailWithOptions($request, $runtime);
    }

    /**
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param ListCertRequest $request ListCertRequest
     * @param RuntimeOptions  $runtime runtime options for this request RuntimeOptions
     *
     * @return ListCertResponse ListCertResponse
     */
    public function listCertWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->certType)) {
            $query['CertType'] = $request->certType;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->keyWord)) {
            $query['KeyWord'] = $request->keyWord;
        }
        if (!Utils::isUnset($request->showSize)) {
            $query['ShowSize'] = $request->showSize;
        }
        if (!Utils::isUnset($request->sourceType)) {
            $query['SourceType'] = $request->sourceType;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->warehouseId)) {
            $query['WarehouseId'] = $request->warehouseId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListCert',
            'version'     => '2020-04-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListCertResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
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
     * @param ListCertWarehouseRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListCertWarehouseResponse
     */
    public function listCertWarehouseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->showSize)) {
            $query['ShowSize'] = $request->showSize;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListCertWarehouse',
            'version'     => '2020-04-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListCertWarehouseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListCertWarehouseRequest $request
     *
     * @return ListCertWarehouseResponse
     */
    public function listCertWarehouse($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCertWarehouseWithOptions($request, $runtime);
    }

    /**
     * You can call the ListUserCertificateOrder operation to query the certificates or certificate orders of users. If you set OrderType to CERT or UPLOAD, certificates are returned. If you set OrderType to CPACK or BUY, certificate orders are returned.
     *   * ## Limits
     *   * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param ListUserCertificateOrderRequest $request ListUserCertificateOrderRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return ListUserCertificateOrderResponse ListUserCertificateOrderResponse
     */
    public function listUserCertificateOrderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->keyword)) {
            $query['Keyword'] = $request->keyword;
        }
        if (!Utils::isUnset($request->orderType)) {
            $query['OrderType'] = $request->orderType;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->showSize)) {
            $query['ShowSize'] = $request->showSize;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListUserCertificateOrder',
            'version'     => '2020-04-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListUserCertificateOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call the ListUserCertificateOrder operation to query the certificates or certificate orders of users. If you set OrderType to CERT or UPLOAD, certificates are returned. If you set OrderType to CPACK or BUY, certificate orders are returned.
     *   * ## Limits
     *   * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param ListUserCertificateOrderRequest $request ListUserCertificateOrderRequest
     *
     * @return ListUserCertificateOrderResponse ListUserCertificateOrderResponse
     */
    public function listUserCertificateOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUserCertificateOrderWithOptions($request, $runtime);
    }

    /**
     * You can call this operation to submit a renewal application for a certificate only when the order of the certificate is in the expiring state. After the renewal is complete, a new certificate order whose status is pending application is generated. You must submit a certificate application for the new certificate order and install the new certificate after the new certificate is issued.
     *   * > You can call the [DescribeCertificateState](~~455800~~) operation to query the status of a certificate application order. If the value of the **Type** response parameter is **certificate**, the certificate is issued.
     *   *
     * @param RenewCertificateOrderForPackageRequestRequest $request RenewCertificateOrderForPackageRequestRequest
     * @param RuntimeOptions                                $runtime runtime options for this request RuntimeOptions
     *
     * @return RenewCertificateOrderForPackageRequestResponse RenewCertificateOrderForPackageRequestResponse
     */
    public function renewCertificateOrderForPackageRequestWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->csr)) {
            $query['Csr'] = $request->csr;
        }
        if (!Utils::isUnset($request->orderId)) {
            $query['OrderId'] = $request->orderId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RenewCertificateOrderForPackageRequest',
            'version'     => '2020-04-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RenewCertificateOrderForPackageRequestResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this operation to submit a renewal application for a certificate only when the order of the certificate is in the expiring state. After the renewal is complete, a new certificate order whose status is pending application is generated. You must submit a certificate application for the new certificate order and install the new certificate after the new certificate is issued.
     *   * > You can call the [DescribeCertificateState](~~455800~~) operation to query the status of a certificate application order. If the value of the **Type** response parameter is **certificate**, the certificate is issued.
     *   *
     * @param RenewCertificateOrderForPackageRequestRequest $request RenewCertificateOrderForPackageRequestRequest
     *
     * @return RenewCertificateOrderForPackageRequestResponse RenewCertificateOrderForPackageRequestResponse
     */
    public function renewCertificateOrderForPackageRequest($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->renewCertificateOrderForPackageRequestWithOptions($request, $runtime);
    }

    /**
     * @param RevokeWHClientCertificateRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return RevokeWHClientCertificateResponse
     */
    public function revokeWHClientCertificateWithOptions($request, $runtime)
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
            'action'      => 'RevokeWHClientCertificate',
            'version'     => '2020-04-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RevokeWHClientCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RevokeWHClientCertificateRequest $request
     *
     * @return RevokeWHClientCertificateResponse
     */
    public function revokeWHClientCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->revokeWHClientCertificateWithOptions($request, $runtime);
    }

    /**
     * @param SignRequest    $request
     * @param RuntimeOptions $runtime
     *
     * @return SignResponse
     */
    public function signWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->certIdentifier)) {
            $query['CertIdentifier'] = $request->certIdentifier;
        }
        if (!Utils::isUnset($request->message)) {
            $query['Message'] = $request->message;
        }
        if (!Utils::isUnset($request->messageType)) {
            $query['MessageType'] = $request->messageType;
        }
        if (!Utils::isUnset($request->signingAlgorithm)) {
            $query['SigningAlgorithm'] = $request->signingAlgorithm;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'Sign',
            'version'     => '2020-04-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SignResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SignRequest $request
     *
     * @return SignResponse
     */
    public function sign($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->signWithOptions($request, $runtime);
    }

    /**
     * The unique identifier of the certificate.
     *   *
     * @param UploadPCACertRequest $request UploadPCACertRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return UploadPCACertResponse UploadPCACertResponse
     */
    public function uploadPCACertWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cert)) {
            $query['Cert'] = $request->cert;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->privateKey)) {
            $query['PrivateKey'] = $request->privateKey;
        }
        if (!Utils::isUnset($request->warehouseId)) {
            $query['WarehouseId'] = $request->warehouseId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UploadPCACert',
            'version'     => '2020-04-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UploadPCACertResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The unique identifier of the certificate.
     *   *
     * @param UploadPCACertRequest $request UploadPCACertRequest
     *
     * @return UploadPCACertResponse UploadPCACertResponse
     */
    public function uploadPCACert($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uploadPCACertWithOptions($request, $runtime);
    }

    /**
     * You can call this operation up to 100 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param UploadUserCertificateRequest $request UploadUserCertificateRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return UploadUserCertificateResponse UploadUserCertificateResponse
     */
    public function uploadUserCertificateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cert)) {
            $query['Cert'] = $request->cert;
        }
        if (!Utils::isUnset($request->encryptCert)) {
            $query['EncryptCert'] = $request->encryptCert;
        }
        if (!Utils::isUnset($request->encryptPrivateKey)) {
            $query['EncryptPrivateKey'] = $request->encryptPrivateKey;
        }
        if (!Utils::isUnset($request->key)) {
            $query['Key'] = $request->key;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->signCert)) {
            $query['SignCert'] = $request->signCert;
        }
        if (!Utils::isUnset($request->signPrivateKey)) {
            $query['SignPrivateKey'] = $request->signPrivateKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UploadUserCertificate',
            'version'     => '2020-04-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UploadUserCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this operation up to 100 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param UploadUserCertificateRequest $request UploadUserCertificateRequest
     *
     * @return UploadUserCertificateResponse UploadUserCertificateResponse
     */
    public function uploadUserCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uploadUserCertificateWithOptions($request, $runtime);
    }

    /**
     * @param VerifyRequest  $request
     * @param RuntimeOptions $runtime
     *
     * @return VerifyResponse
     */
    public function verifyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->certIdentifier)) {
            $query['CertIdentifier'] = $request->certIdentifier;
        }
        if (!Utils::isUnset($request->message)) {
            $query['Message'] = $request->message;
        }
        if (!Utils::isUnset($request->messageType)) {
            $query['MessageType'] = $request->messageType;
        }
        if (!Utils::isUnset($request->signatureValue)) {
            $query['SignatureValue'] = $request->signatureValue;
        }
        if (!Utils::isUnset($request->signingAlgorithm)) {
            $query['SigningAlgorithm'] = $request->signingAlgorithm;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'Verify',
            'version'     => '2020-04-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return VerifyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param VerifyRequest $request
     *
     * @return VerifyResponse
     */
    public function verify($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->verifyWithOptions($request, $runtime);
    }
}
