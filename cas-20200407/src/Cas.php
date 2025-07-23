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
use AlibabaCloud\SDK\Cas\V20200407\Models\CreateCsrRequest;
use AlibabaCloud\SDK\Cas\V20200407\Models\CreateCsrResponse;
use AlibabaCloud\SDK\Cas\V20200407\Models\CreateDeploymentJobRequest;
use AlibabaCloud\SDK\Cas\V20200407\Models\CreateDeploymentJobResponse;
use AlibabaCloud\SDK\Cas\V20200407\Models\DecryptRequest;
use AlibabaCloud\SDK\Cas\V20200407\Models\DecryptResponse;
use AlibabaCloud\SDK\Cas\V20200407\Models\DeleteCertificateRequestRequest;
use AlibabaCloud\SDK\Cas\V20200407\Models\DeleteCertificateRequestResponse;
use AlibabaCloud\SDK\Cas\V20200407\Models\DeleteCsrRequest;
use AlibabaCloud\SDK\Cas\V20200407\Models\DeleteCsrResponse;
use AlibabaCloud\SDK\Cas\V20200407\Models\DeleteDeploymentJobRequest;
use AlibabaCloud\SDK\Cas\V20200407\Models\DeleteDeploymentJobResponse;
use AlibabaCloud\SDK\Cas\V20200407\Models\DeletePCACertRequest;
use AlibabaCloud\SDK\Cas\V20200407\Models\DeletePCACertResponse;
use AlibabaCloud\SDK\Cas\V20200407\Models\DeleteUserCertificateRequest;
use AlibabaCloud\SDK\Cas\V20200407\Models\DeleteUserCertificateResponse;
use AlibabaCloud\SDK\Cas\V20200407\Models\DeleteWorkerResourceRequest;
use AlibabaCloud\SDK\Cas\V20200407\Models\DeleteWorkerResourceResponse;
use AlibabaCloud\SDK\Cas\V20200407\Models\DescribeCertificateStateRequest;
use AlibabaCloud\SDK\Cas\V20200407\Models\DescribeCertificateStateResponse;
use AlibabaCloud\SDK\Cas\V20200407\Models\DescribeCloudResourceStatusRequest;
use AlibabaCloud\SDK\Cas\V20200407\Models\DescribeCloudResourceStatusResponse;
use AlibabaCloud\SDK\Cas\V20200407\Models\DescribeDeploymentJobRequest;
use AlibabaCloud\SDK\Cas\V20200407\Models\DescribeDeploymentJobResponse;
use AlibabaCloud\SDK\Cas\V20200407\Models\DescribeDeploymentJobStatusRequest;
use AlibabaCloud\SDK\Cas\V20200407\Models\DescribeDeploymentJobStatusResponse;
use AlibabaCloud\SDK\Cas\V20200407\Models\DescribePackageStateRequest;
use AlibabaCloud\SDK\Cas\V20200407\Models\DescribePackageStateResponse;
use AlibabaCloud\SDK\Cas\V20200407\Models\EncryptRequest;
use AlibabaCloud\SDK\Cas\V20200407\Models\EncryptResponse;
use AlibabaCloud\SDK\Cas\V20200407\Models\GetCertWarehouseQuotaResponse;
use AlibabaCloud\SDK\Cas\V20200407\Models\GetCsrDetailRequest;
use AlibabaCloud\SDK\Cas\V20200407\Models\GetCsrDetailResponse;
use AlibabaCloud\SDK\Cas\V20200407\Models\GetUserCertificateDetailRequest;
use AlibabaCloud\SDK\Cas\V20200407\Models\GetUserCertificateDetailResponse;
use AlibabaCloud\SDK\Cas\V20200407\Models\ListCertRequest;
use AlibabaCloud\SDK\Cas\V20200407\Models\ListCertResponse;
use AlibabaCloud\SDK\Cas\V20200407\Models\ListCertWarehouseRequest;
use AlibabaCloud\SDK\Cas\V20200407\Models\ListCertWarehouseResponse;
use AlibabaCloud\SDK\Cas\V20200407\Models\ListCloudAccessRequest;
use AlibabaCloud\SDK\Cas\V20200407\Models\ListCloudAccessResponse;
use AlibabaCloud\SDK\Cas\V20200407\Models\ListCloudResourcesRequest;
use AlibabaCloud\SDK\Cas\V20200407\Models\ListCloudResourcesResponse;
use AlibabaCloud\SDK\Cas\V20200407\Models\ListCloudResourcesShrinkRequest;
use AlibabaCloud\SDK\Cas\V20200407\Models\ListContactRequest;
use AlibabaCloud\SDK\Cas\V20200407\Models\ListContactResponse;
use AlibabaCloud\SDK\Cas\V20200407\Models\ListCsrRequest;
use AlibabaCloud\SDK\Cas\V20200407\Models\ListCsrResponse;
use AlibabaCloud\SDK\Cas\V20200407\Models\ListDeploymentJobCertRequest;
use AlibabaCloud\SDK\Cas\V20200407\Models\ListDeploymentJobCertResponse;
use AlibabaCloud\SDK\Cas\V20200407\Models\ListDeploymentJobRequest;
use AlibabaCloud\SDK\Cas\V20200407\Models\ListDeploymentJobResourceRequest;
use AlibabaCloud\SDK\Cas\V20200407\Models\ListDeploymentJobResourceResponse;
use AlibabaCloud\SDK\Cas\V20200407\Models\ListDeploymentJobResponse;
use AlibabaCloud\SDK\Cas\V20200407\Models\ListUserCertificateOrderRequest;
use AlibabaCloud\SDK\Cas\V20200407\Models\ListUserCertificateOrderResponse;
use AlibabaCloud\SDK\Cas\V20200407\Models\ListWorkerResourceRequest;
use AlibabaCloud\SDK\Cas\V20200407\Models\ListWorkerResourceResponse;
use AlibabaCloud\SDK\Cas\V20200407\Models\MoveResourceGroupRequest;
use AlibabaCloud\SDK\Cas\V20200407\Models\MoveResourceGroupResponse;
use AlibabaCloud\SDK\Cas\V20200407\Models\RenewCertificateOrderForPackageRequestRequest;
use AlibabaCloud\SDK\Cas\V20200407\Models\RenewCertificateOrderForPackageRequestResponse;
use AlibabaCloud\SDK\Cas\V20200407\Models\SignRequest;
use AlibabaCloud\SDK\Cas\V20200407\Models\SignResponse;
use AlibabaCloud\SDK\Cas\V20200407\Models\UpdateCsrRequest;
use AlibabaCloud\SDK\Cas\V20200407\Models\UpdateCsrResponse;
use AlibabaCloud\SDK\Cas\V20200407\Models\UpdateDeploymentJobRequest;
use AlibabaCloud\SDK\Cas\V20200407\Models\UpdateDeploymentJobResponse;
use AlibabaCloud\SDK\Cas\V20200407\Models\UpdateDeploymentJobStatusRequest;
use AlibabaCloud\SDK\Cas\V20200407\Models\UpdateDeploymentJobStatusResponse;
use AlibabaCloud\SDK\Cas\V20200407\Models\UpdateWorkerResourceStatusRequest;
use AlibabaCloud\SDK\Cas\V20200407\Models\UpdateWorkerResourceStatusResponse;
use AlibabaCloud\SDK\Cas\V20200407\Models\UploadCsrRequest;
use AlibabaCloud\SDK\Cas\V20200407\Models\UploadCsrResponse;
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
     * @summary Revokes an issued certificate and cancels the application order of the certificate.
     *  *
     * @description You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
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
            'action' => 'CancelCertificateForPackageRequest',
            'version' => '2020-04-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CancelCertificateForPackageRequestResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Revokes an issued certificate and cancels the application order of the certificate.
     *  *
     * @description You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
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
     * @summary Cancels a certificate application order that is in the pending validation or being reviewed state.
     *  *
     * @description You can call this operation up to 100 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
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
            'action' => 'CancelOrderRequest',
            'version' => '2020-04-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CancelOrderRequestResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Cancels a certificate application order that is in the pending validation or being reviewed state.
     *  *
     * @description You can call this operation up to 100 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
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
     * @summary Submits a certificate application.
     *  *
     * @description *   Before you call this operation, make sure that you have purchased a certificate resource plan of the required specifications. For more information about how to purchase a certificate resource plan, see [Purchase a certificate resource plan](https://help.aliyun.com/document_detail/28542.html). You can call the [DescribePackageState](https://help.aliyun.com/document_detail/455800.html) operation to query the usage of a certificate resource plan of specified specifications, including the total number of certificate resource plans that you purchase, the number of certificate applications that you submit, and the number of certificates that are issued.
     * *   After you call this operation to submit a certificate application and the certificate is issued, the certificate quota provided by the resource plan that you purchased is consumed. When you call this operation, you can use the **ProductCode** parameter to specify the specifications of the certificate that you want to apply for.
     * *   After you call this operation to submit a certificate application, you also need to call the [DescribeCertificateState](https://help.aliyun.com/document_detail/455800.html) operation to obtain the information that is required for domain name ownership verification and manually complete the verification. Then, your certificate application is reviewed by the certificate authority (CA). If you use the Domain Name System (DNS) verification method, you must complete the verification on your DNS service provider system. If you use the file verification method, you must complete the verification on the DNS server.
     *  *
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
        if (!Utils::isUnset($request->tags)) {
            $query['Tags'] = $request->tags;
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
            'action' => 'CreateCertificateForPackageRequest',
            'version' => '2020-04-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateCertificateForPackageRequestResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Submits a certificate application.
     *  *
     * @description *   Before you call this operation, make sure that you have purchased a certificate resource plan of the required specifications. For more information about how to purchase a certificate resource plan, see [Purchase a certificate resource plan](https://help.aliyun.com/document_detail/28542.html). You can call the [DescribePackageState](https://help.aliyun.com/document_detail/455800.html) operation to query the usage of a certificate resource plan of specified specifications, including the total number of certificate resource plans that you purchase, the number of certificate applications that you submit, and the number of certificates that are issued.
     * *   After you call this operation to submit a certificate application and the certificate is issued, the certificate quota provided by the resource plan that you purchased is consumed. When you call this operation, you can use the **ProductCode** parameter to specify the specifications of the certificate that you want to apply for.
     * *   After you call this operation to submit a certificate application, you also need to call the [DescribeCertificateState](https://help.aliyun.com/document_detail/455800.html) operation to obtain the information that is required for domain name ownership verification and manually complete the verification. Then, your certificate application is reviewed by the certificate authority (CA). If you use the Domain Name System (DNS) verification method, you must complete the verification on your DNS service provider system. If you use the file verification method, you must complete the verification on the DNS server.
     *  *
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
     * @summary Purchases, applies for, and issues a domain validated (DV) certificate by using extended certificate services.
     *  *
     * @description *   You can call this operation to apply for only DV certificates. If you want to apply for an organization validated (OV) or extended validation (EV) certificate, we recommend that you call the [CreateCertificateForPackageRequest](https://help.aliyun.com/document_detail/455296.html) operation. This operation allows you to apply for certificates of all specifications and specify the method to generate a certificate signing request (CSR) file.
     * *   Before you call this operation, make sure that you have purchased a certificate resource plan of the required specifications. For more information about how to purchase a certificate resource plan, see [Purchase a certificate resource plan](https://help.aliyun.com/document_detail/28542.html). You can call the [DescribePackageState](https://help.aliyun.com/document_detail/455803.html) operation to query the usage of a certificate resource plan of specified specifications, including the total number of certificate resource plans that you purchase, the number of certificate applications that you submit, and the number of certificates that are issued.
     * *   When you call this operation, you can use the **ProductCode** parameter to specify the specifications of the certificate.
     * *   After you call this operation to submit a certificate application, Certificate Management Service automatically creates a CSR file for your application and consumes the certificate quota in the certificate resource plans of the specified specifications that you purchased. After you call this operation, you also need to call the [DescribeCertificateState](https://help.aliyun.com/document_detail/455800.html) operation to obtain the information that is required to complete domain name verification, and manually complete the verification. If you use the DNS verification method, you must complete the verification on the management platform of the domain name. If you use the file verification method, you must complete the verification on your DNS server. Then, the certificate authority (CA) will review your certificate application.
     *  *
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
        if (!Utils::isUnset($request->tags)) {
            $query['Tags'] = $request->tags;
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
            'action' => 'CreateCertificateRequest',
            'version' => '2020-04-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateCertificateRequestResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Purchases, applies for, and issues a domain validated (DV) certificate by using extended certificate services.
     *  *
     * @description *   You can call this operation to apply for only DV certificates. If you want to apply for an organization validated (OV) or extended validation (EV) certificate, we recommend that you call the [CreateCertificateForPackageRequest](https://help.aliyun.com/document_detail/455296.html) operation. This operation allows you to apply for certificates of all specifications and specify the method to generate a certificate signing request (CSR) file.
     * *   Before you call this operation, make sure that you have purchased a certificate resource plan of the required specifications. For more information about how to purchase a certificate resource plan, see [Purchase a certificate resource plan](https://help.aliyun.com/document_detail/28542.html). You can call the [DescribePackageState](https://help.aliyun.com/document_detail/455803.html) operation to query the usage of a certificate resource plan of specified specifications, including the total number of certificate resource plans that you purchase, the number of certificate applications that you submit, and the number of certificates that are issued.
     * *   When you call this operation, you can use the **ProductCode** parameter to specify the specifications of the certificate.
     * *   After you call this operation to submit a certificate application, Certificate Management Service automatically creates a CSR file for your application and consumes the certificate quota in the certificate resource plans of the specified specifications that you purchased. After you call this operation, you also need to call the [DescribeCertificateState](https://help.aliyun.com/document_detail/455800.html) operation to obtain the information that is required to complete domain name verification, and manually complete the verification. If you use the DNS verification method, you must complete the verification on the management platform of the domain name. If you use the file verification method, you must complete the verification on your DNS server. Then, the certificate authority (CA) will review your certificate application.
     *  *
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
     * @summary Purchases, applies for, and issues a domain validated (DV) certificate by using a custom certificate signing request (CSR) file. You can use extended certificate services to purchase and apply for a DV certificate with a few clicks.
     *  *
     * @description *   You can use this operation to apply for only a domain validated (DV) certificate. You cannot use this operation to apply for an organization validated (OV) certificate. We recommend that you use the [CreateCertificateForPackageRequest](https://help.aliyun.com/document_detail/455296.html) operation to apply for a certificate. You can use the CreateCertificateForPackageRequest operation to apply for certificates of all types and specify the CSR generation method.
     * *   Before you call this operation, make sure that you have purchased a certificate resource plan of the required specifications. For more information about how to purchase a certificate resource plan, see [Purchase a certificate resource plan](https://help.aliyun.com/document_detail/28542.html). You can call the [DescribePackageState](https://help.aliyun.com/document_detail/455803.html) operation to query the usage of a certificate resource plan of specified specifications, including the total number of certificate resource plans that you purchase, the number of certificate applications that you submit, and the number of certificates that are issued.
     * *   When you call this operation, you can use the **ProductCode** parameter to specify the specifications of the certificate that you want to apply for.
     * *   After you call this operation to submit a certificate application, the certificate quota of the required specifications that you purchased is consumed. After you call this operation, you must call the [DescribeCertificateState](https://help.aliyun.com/document_detail/455800.html) operation to obtain the information that is required for domain name ownership verification and manually complete the verification. Then, your certificate application is reviewed by the certificate authority (CA). If you use the Domain Name System (DNS) verification method, you must complete the verification on your DNS service provider system. If you use the file verification method, you must complete the verification on the DNS server.
     *  *
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
        if (!Utils::isUnset($request->tags)) {
            $query['Tags'] = $request->tags;
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
            'action' => 'CreateCertificateWithCsrRequest',
            'version' => '2020-04-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateCertificateWithCsrRequestResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Purchases, applies for, and issues a domain validated (DV) certificate by using a custom certificate signing request (CSR) file. You can use extended certificate services to purchase and apply for a DV certificate with a few clicks.
     *  *
     * @description *   You can use this operation to apply for only a domain validated (DV) certificate. You cannot use this operation to apply for an organization validated (OV) certificate. We recommend that you use the [CreateCertificateForPackageRequest](https://help.aliyun.com/document_detail/455296.html) operation to apply for a certificate. You can use the CreateCertificateForPackageRequest operation to apply for certificates of all types and specify the CSR generation method.
     * *   Before you call this operation, make sure that you have purchased a certificate resource plan of the required specifications. For more information about how to purchase a certificate resource plan, see [Purchase a certificate resource plan](https://help.aliyun.com/document_detail/28542.html). You can call the [DescribePackageState](https://help.aliyun.com/document_detail/455803.html) operation to query the usage of a certificate resource plan of specified specifications, including the total number of certificate resource plans that you purchase, the number of certificate applications that you submit, and the number of certificates that are issued.
     * *   When you call this operation, you can use the **ProductCode** parameter to specify the specifications of the certificate that you want to apply for.
     * *   After you call this operation to submit a certificate application, the certificate quota of the required specifications that you purchased is consumed. After you call this operation, you must call the [DescribeCertificateState](https://help.aliyun.com/document_detail/455800.html) operation to obtain the information that is required for domain name ownership verification and manually complete the verification. Then, your certificate application is reviewed by the certificate authority (CA). If you use the Domain Name System (DNS) verification method, you must complete the verification on your DNS service provider system. If you use the file verification method, you must complete the verification on the DNS server.
     *  *
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
     * @summary Creates a certificate signing request (CSR). A CSR file contains the information about an SSL certificate that you want to apply for. The information includes the domain names that you want to bind to the certificate and the name and the geographical location of the certificate holder. When you submit a certificate application to a certificate authority (CA), you must provide a CSR. After the CA approves your certificate application, the CA uses the private key of the root CA to sign your CSR and generates a public key file. The public key file is the SSL certificate that the CA issues to you. The private key of the SSL certificate is generated when you create the CSR.
     *  *
     * @param CreateCsrRequest $request CreateCsrRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateCsrResponse CreateCsrResponse
     */
    public function createCsrWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->algorithm)) {
            $query['Algorithm'] = $request->algorithm;
        }
        if (!Utils::isUnset($request->commonName)) {
            $query['CommonName'] = $request->commonName;
        }
        if (!Utils::isUnset($request->corpName)) {
            $query['CorpName'] = $request->corpName;
        }
        if (!Utils::isUnset($request->countryCode)) {
            $query['CountryCode'] = $request->countryCode;
        }
        if (!Utils::isUnset($request->department)) {
            $query['Department'] = $request->department;
        }
        if (!Utils::isUnset($request->keySize)) {
            $query['KeySize'] = $request->keySize;
        }
        if (!Utils::isUnset($request->locality)) {
            $query['Locality'] = $request->locality;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->province)) {
            $query['Province'] = $request->province;
        }
        if (!Utils::isUnset($request->sans)) {
            $query['Sans'] = $request->sans;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateCsr',
            'version' => '2020-04-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateCsrResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a certificate signing request (CSR). A CSR file contains the information about an SSL certificate that you want to apply for. The information includes the domain names that you want to bind to the certificate and the name and the geographical location of the certificate holder. When you submit a certificate application to a certificate authority (CA), you must provide a CSR. After the CA approves your certificate application, the CA uses the private key of the root CA to sign your CSR and generates a public key file. The public key file is the SSL certificate that the CA issues to you. The private key of the SSL certificate is generated when you create the CSR.
     *  *
     * @param CreateCsrRequest $request CreateCsrRequest
     *
     * @return CreateCsrResponse CreateCsrResponse
     */
    public function createCsr($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCsrWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a certificate deployment task. After an SSL certificate is issued, you can create a certificate deployment task to immediately deploy the certificate to an Alibaba Cloud service or deploy the certificate to the service at a specific point in time. Then, the certificate can implement trusted identity authentication and ensure the security of data transmission for your website hosted on the service.
     *  *
     * @description After the task creation is completed, the task will be in the editing state. You need to call the UpdateDeploymentJobStatus interface to change the status to the pending state, otherwise the task will not be executed.
     *  *
     * @param CreateDeploymentJobRequest $request CreateDeploymentJobRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateDeploymentJobResponse CreateDeploymentJobResponse
     */
    public function createDeploymentJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->certIds)) {
            $query['CertIds'] = $request->certIds;
        }
        if (!Utils::isUnset($request->contactIds)) {
            $query['ContactIds'] = $request->contactIds;
        }
        if (!Utils::isUnset($request->jobType)) {
            $query['JobType'] = $request->jobType;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->resourceIds)) {
            $query['ResourceIds'] = $request->resourceIds;
        }
        if (!Utils::isUnset($request->scheduleTime)) {
            $query['ScheduleTime'] = $request->scheduleTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateDeploymentJob',
            'version' => '2020-04-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateDeploymentJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a certificate deployment task. After an SSL certificate is issued, you can create a certificate deployment task to immediately deploy the certificate to an Alibaba Cloud service or deploy the certificate to the service at a specific point in time. Then, the certificate can implement trusted identity authentication and ensure the security of data transmission for your website hosted on the service.
     *  *
     * @description After the task creation is completed, the task will be in the editing state. You need to call the UpdateDeploymentJobStatus interface to change the status to the pending state, otherwise the task will not be executed.
     *  *
     * @param CreateDeploymentJobRequest $request CreateDeploymentJobRequest
     *
     * @return CreateDeploymentJobResponse CreateDeploymentJobResponse
     */
    public function createDeploymentJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDeploymentJobWithOptions($request, $runtime);
    }

    /**
     * @summary Decrypts a certificate in a certificate repository.
     *  *
     * @description You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DecryptRequest $request DecryptRequest
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return DecryptResponse DecryptResponse
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
            'action' => 'Decrypt',
            'version' => '2020-04-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DecryptResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Decrypts a certificate in a certificate repository.
     *  *
     * @description You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DecryptRequest $request DecryptRequest
     *
     * @return DecryptResponse DecryptResponse
     */
    public function decrypt($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->decryptWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes an order in which the application for a domain validated (DV) certificate failed.
     *  *
     * @description You can call this operation to delete a certificate application order only in the following scenarios:
     * *   The status of the order is **review failed**. You have called the [DescribeCertificateState](https://help.aliyun.com/document_detail/455800.html) operation to query the status of the certificate application order and the value of the **Type** parameter is **verify_fail**.
     * *   The status of the order is **pending application**. You have called the [CancelOrderRequest](https://help.aliyun.com/document_detail/455299.html) operation to cancel a certificate application order whose status is pending review or being reviewed. The status of the certificate application order that is canceled in this case changes to **pending application**.
     *  *
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
            'action' => 'DeleteCertificateRequest',
            'version' => '2020-04-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteCertificateRequestResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes an order in which the application for a domain validated (DV) certificate failed.
     *  *
     * @description You can call this operation to delete a certificate application order only in the following scenarios:
     * *   The status of the order is **review failed**. You have called the [DescribeCertificateState](https://help.aliyun.com/document_detail/455800.html) operation to query the status of the certificate application order and the value of the **Type** parameter is **verify_fail**.
     * *   The status of the order is **pending application**. You have called the [CancelOrderRequest](https://help.aliyun.com/document_detail/455299.html) operation to cancel a certificate application order whose status is pending review or being reviewed. The status of the certificate application order that is canceled in this case changes to **pending application**.
     *  *
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
     * @summary Deletes a certificate signing request (CSR) file.
     *  *
     * @param DeleteCsrRequest $request DeleteCsrRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteCsrResponse DeleteCsrResponse
     */
    public function deleteCsrWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->csrId)) {
            $query['CsrId'] = $request->csrId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteCsr',
            'version' => '2020-04-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteCsrResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a certificate signing request (CSR) file.
     *  *
     * @param DeleteCsrRequest $request DeleteCsrRequest
     *
     * @return DeleteCsrResponse DeleteCsrResponse
     */
    public function deleteCsr($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCsrWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a deployment task.
     *  *
     * @param DeleteDeploymentJobRequest $request DeleteDeploymentJobRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteDeploymentJobResponse DeleteDeploymentJobResponse
     */
    public function deleteDeploymentJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteDeploymentJob',
            'version' => '2020-04-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteDeploymentJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a deployment task.
     *  *
     * @param DeleteDeploymentJobRequest $request DeleteDeploymentJobRequest
     *
     * @return DeleteDeploymentJobResponse DeleteDeploymentJobResponse
     */
    public function deleteDeploymentJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDeploymentJobWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a private certificate from a certificate application repository.
     *  *
     * @description You can call the DeletePCACert operation to delete a private certificate from a certificate application repository.
     * ### Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DeletePCACertRequest $request DeletePCACertRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return DeletePCACertResponse DeletePCACertResponse
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
            'action' => 'DeletePCACert',
            'version' => '2020-04-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeletePCACertResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a private certificate from a certificate application repository.
     *  *
     * @description You can call the DeletePCACert operation to delete a private certificate from a certificate application repository.
     * ### Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DeletePCACertRequest $request DeletePCACertRequest
     *
     * @return DeletePCACertResponse DeletePCACertResponse
     */
    public function deletePCACert($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deletePCACertWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes an expired or uploaded certificate.
     *  *
     * @description You can call this operation up to 100 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
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
            'action' => 'DeleteUserCertificate',
            'version' => '2020-04-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteUserCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes an expired or uploaded certificate.
     *  *
     * @description You can call this operation up to 100 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
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
     * @summary Deletes the worker of a deployment task.
     *  *
     * @param DeleteWorkerResourceRequest $request DeleteWorkerResourceRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteWorkerResourceResponse DeleteWorkerResourceResponse
     */
    public function deleteWorkerResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->workerId)) {
            $query['WorkerId'] = $request->workerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteWorkerResource',
            'version' => '2020-04-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteWorkerResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes the worker of a deployment task.
     *  *
     * @param DeleteWorkerResourceRequest $request DeleteWorkerResourceRequest
     *
     * @return DeleteWorkerResourceResponse DeleteWorkerResourceResponse
     */
    public function deleteWorkerResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteWorkerResourceWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the status of a specified certificate application order.
     *  *
     * @description If you do not complete the verification of the domain name ownership after you submit a certificate application, you can call this operation to obtain the information that is required to complete the verification. You can complete the verification of the domain name ownership based on the data returned. If you use the DNS verification method, you must complete the verification on the management platform of the domain name. If you use the file verification method, you must complete the verification on the DNS server.
     * The certificate authority (CA) reviews your certificate application only after you complete the verification of the domain name ownership. After the CA approves your certificate application, the CA issues the certificate. If a certificate is issued, you can call this operation to obtain the CA certificate and private key of the certificate.
     *  *
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
            'action' => 'DescribeCertificateState',
            'version' => '2020-04-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCertificateStateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the status of a specified certificate application order.
     *  *
     * @description If you do not complete the verification of the domain name ownership after you submit a certificate application, you can call this operation to obtain the information that is required to complete the verification. You can complete the verification of the domain name ownership based on the data returned. If you use the DNS verification method, you must complete the verification on the management platform of the domain name. If you use the file verification method, you must complete the verification on the DNS server.
     * The certificate authority (CA) reviews your certificate application only after you complete the verification of the domain name ownership. After the CA approves your certificate application, the CA issues the certificate. If a certificate is issued, you can call this operation to obtain the CA certificate and private key of the certificate.
     *  *
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
     * @summary Queries the number of third-party cloud resources on which you deployed certificates by using a multi-cloud deployment task.
     *  *
     * @param DescribeCloudResourceStatusRequest $request DescribeCloudResourceStatusRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeCloudResourceStatusResponse DescribeCloudResourceStatusResponse
     */
    public function describeCloudResourceStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->secretId)) {
            $query['SecretId'] = $request->secretId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCloudResourceStatus',
            'version' => '2020-04-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCloudResourceStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the number of third-party cloud resources on which you deployed certificates by using a multi-cloud deployment task.
     *  *
     * @param DescribeCloudResourceStatusRequest $request DescribeCloudResourceStatusRequest
     *
     * @return DescribeCloudResourceStatusResponse DescribeCloudResourceStatusResponse
     */
    public function describeCloudResourceStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCloudResourceStatusWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details of a deployment task. You can call the CreateDeploymentJob operation to create a deployment task and obtain the ID of the task.
     *  *
     * @param DescribeDeploymentJobRequest $request DescribeDeploymentJobRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDeploymentJobResponse DescribeDeploymentJobResponse
     */
    public function describeDeploymentJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDeploymentJob',
            'version' => '2020-04-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDeploymentJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the details of a deployment task. You can call the CreateDeploymentJob operation to create a deployment task and obtain the ID of the task.
     *  *
     * @param DescribeDeploymentJobRequest $request DescribeDeploymentJobRequest
     *
     * @return DescribeDeploymentJobResponse DescribeDeploymentJobResponse
     */
    public function describeDeploymentJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDeploymentJobWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the number of worker tasks in a deployment task.
     *  *
     * @param DescribeDeploymentJobStatusRequest $request DescribeDeploymentJobStatusRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDeploymentJobStatusResponse DescribeDeploymentJobStatusResponse
     */
    public function describeDeploymentJobStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDeploymentJobStatus',
            'version' => '2020-04-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDeploymentJobStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the number of worker tasks in a deployment task.
     *  *
     * @param DescribeDeploymentJobStatusRequest $request DescribeDeploymentJobStatusRequest
     *
     * @return DescribeDeploymentJobStatusResponse DescribeDeploymentJobStatusResponse
     */
    public function describeDeploymentJobStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDeploymentJobStatusWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the quota for domain validated (DV) certificates that you purchase and the quota usage.
     *  *
     * @param DescribePackageStateRequest $request DescribePackageStateRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribePackageStateResponse DescribePackageStateResponse
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
            'action' => 'DescribePackageState',
            'version' => '2020-04-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribePackageStateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the quota for domain validated (DV) certificates that you purchase and the quota usage.
     *  *
     * @param DescribePackageStateRequest $request DescribePackageStateRequest
     *
     * @return DescribePackageStateResponse DescribePackageStateResponse
     */
    public function describePackageState($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePackageStateWithOptions($request, $runtime);
    }

    /**
     * @summary Encrypts a certificate in a certificate repository.
     *  *
     * @description You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param EncryptRequest $request EncryptRequest
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return EncryptResponse EncryptResponse
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
            'action' => 'Encrypt',
            'version' => '2020-04-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EncryptResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Encrypts a certificate in a certificate repository.
     *  *
     * @description You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param EncryptRequest $request EncryptRequest
     *
     * @return EncryptResponse EncryptResponse
     */
    public function encrypt($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->encryptWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the quota for certificate repositories.
     *  *
     * @description You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetCertWarehouseQuotaResponse GetCertWarehouseQuotaResponse
     */
    public function getCertWarehouseQuotaWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'GetCertWarehouseQuota',
            'version' => '2020-04-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetCertWarehouseQuotaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the quota for certificate repositories.
     *  *
     * @description You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @return GetCertWarehouseQuotaResponse GetCertWarehouseQuotaResponse
     */
    public function getCertWarehouseQuota()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCertWarehouseQuotaWithOptions($runtime);
    }

    /**
     * @summary Obtains the content of a certificate signing request (CSR) file.
     *  *
     * @param GetCsrDetailRequest $request GetCsrDetailRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return GetCsrDetailResponse GetCsrDetailResponse
     */
    public function getCsrDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->csrId)) {
            $query['CsrId'] = $request->csrId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'GetCsrDetail',
            'version' => '2020-04-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetCsrDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Obtains the content of a certificate signing request (CSR) file.
     *  *
     * @param GetCsrDetailRequest $request GetCsrDetailRequest
     *
     * @return GetCsrDetailResponse GetCsrDetailResponse
     */
    public function getCsrDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCsrDetailWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details of a certificate.
     *  *
     * @description You can call this operation up to 100 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
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
            'action' => 'GetUserCertificateDetail',
            'version' => '2020-04-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetUserCertificateDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the details of a certificate.
     *  *
     * @description You can call this operation up to 100 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
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
     * @summary Queries the certificates in a certificate repository.
     *  *
     * @description You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
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
            'action' => 'ListCert',
            'version' => '2020-04-07',
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
     * @summary Queries the certificates in a certificate repository.
     *  *
     * @description You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
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
     * @summary Queries certificate repositories.
     *  *
     * @description You can call the ListCertWarehouse operation to query certificate repositories.
     * ### Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param ListCertWarehouseRequest $request ListCertWarehouseRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ListCertWarehouseResponse ListCertWarehouseResponse
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
            'action' => 'ListCertWarehouse',
            'version' => '2020-04-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListCertWarehouseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries certificate repositories.
     *  *
     * @description You can call the ListCertWarehouse operation to query certificate repositories.
     * ### Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param ListCertWarehouseRequest $request ListCertWarehouseRequest
     *
     * @return ListCertWarehouseResponse ListCertWarehouseResponse
     */
    public function listCertWarehouse($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCertWarehouseWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of AccessKey pairs for multi-cloud deployment.
     *  *
     * @param ListCloudAccessRequest $request ListCloudAccessRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ListCloudAccessResponse ListCloudAccessResponse
     */
    public function listCloudAccessWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cloudName)) {
            $query['CloudName'] = $request->cloudName;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->secretId)) {
            $query['SecretId'] = $request->secretId;
        }
        if (!Utils::isUnset($request->showSize)) {
            $query['ShowSize'] = $request->showSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListCloudAccess',
            'version' => '2020-04-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListCloudAccessResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of AccessKey pairs for multi-cloud deployment.
     *  *
     * @param ListCloudAccessRequest $request ListCloudAccessRequest
     *
     * @return ListCloudAccessResponse ListCloudAccessResponse
     */
    public function listCloudAccess($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCloudAccessWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the certificate resources of a cloud service provider and cloud services.
     *  *
     * @param ListCloudResourcesRequest $tmpReq  ListCloudResourcesRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ListCloudResourcesResponse ListCloudResourcesResponse
     */
    public function listCloudResourcesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListCloudResourcesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->certIds)) {
            $request->certIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->certIds, 'CertIds', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->certIdsShrink)) {
            $query['CertIds'] = $request->certIdsShrink;
        }
        if (!Utils::isUnset($request->cloudName)) {
            $query['CloudName'] = $request->cloudName;
        }
        if (!Utils::isUnset($request->cloudProduct)) {
            $query['CloudProduct'] = $request->cloudProduct;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->keyword)) {
            $query['Keyword'] = $request->keyword;
        }
        if (!Utils::isUnset($request->secretId)) {
            $query['SecretId'] = $request->secretId;
        }
        if (!Utils::isUnset($request->showSize)) {
            $query['ShowSize'] = $request->showSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListCloudResources',
            'version' => '2020-04-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListCloudResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the certificate resources of a cloud service provider and cloud services.
     *  *
     * @param ListCloudResourcesRequest $request ListCloudResourcesRequest
     *
     * @return ListCloudResourcesResponse ListCloudResourcesResponse
     */
    public function listCloudResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCloudResourcesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of contacts.
     *  *
     * @param ListContactRequest $request ListContactRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return ListContactResponse ListContactResponse
     */
    public function listContactWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->keyword)) {
            $query['Keyword'] = $request->keyword;
        }
        if (!Utils::isUnset($request->showSize)) {
            $query['ShowSize'] = $request->showSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListContact',
            'version' => '2020-04-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListContactResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of contacts.
     *  *
     * @param ListContactRequest $request ListContactRequest
     *
     * @return ListContactResponse ListContactResponse
     */
    public function listContact($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listContactWithOptions($request, $runtime);
    }

    /**
     * @summary Queries certificate signing requests (CSRs).
     *  *
     * @param ListCsrRequest $request ListCsrRequest
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return ListCsrResponse ListCsrResponse
     */
    public function listCsrWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->algorithm)) {
            $query['Algorithm'] = $request->algorithm;
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListCsr',
            'version' => '2020-04-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListCsrResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries certificate signing requests (CSRs).
     *  *
     * @param ListCsrRequest $request ListCsrRequest
     *
     * @return ListCsrResponse ListCsrResponse
     */
    public function listCsr($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCsrWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of deployment tasks that are created.
     *  *
     * @param ListDeploymentJobRequest $request ListDeploymentJobRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ListDeploymentJobResponse ListDeploymentJobResponse
     */
    public function listDeploymentJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->jobType)) {
            $query['JobType'] = $request->jobType;
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
            'action' => 'ListDeploymentJob',
            'version' => '2020-04-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListDeploymentJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of deployment tasks that are created.
     *  *
     * @param ListDeploymentJobRequest $request ListDeploymentJobRequest
     *
     * @return ListDeploymentJobResponse ListDeploymentJobResponse
     */
    public function listDeploymentJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDeploymentJobWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the basic information about a deployment task. After you create a deployment task, you can call this operation to obtain the basic information about the deployment task, including the instance ID, type, and name of the certificate.
     *  *
     * @param ListDeploymentJobCertRequest $request ListDeploymentJobCertRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return ListDeploymentJobCertResponse ListDeploymentJobCertResponse
     */
    public function listDeploymentJobCertWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListDeploymentJobCert',
            'version' => '2020-04-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListDeploymentJobCertResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the basic information about a deployment task. After you create a deployment task, you can call this operation to obtain the basic information about the deployment task, including the instance ID, type, and name of the certificate.
     *  *
     * @param ListDeploymentJobCertRequest $request ListDeploymentJobCertRequest
     *
     * @return ListDeploymentJobCertResponse ListDeploymentJobCertResponse
     */
    public function listDeploymentJobCert($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDeploymentJobCertWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the cloud resources of cloud services in a deployment task.
     *  *
     * @param ListDeploymentJobResourceRequest $request ListDeploymentJobResourceRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return ListDeploymentJobResourceResponse ListDeploymentJobResourceResponse
     */
    public function listDeploymentJobResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListDeploymentJobResource',
            'version' => '2020-04-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListDeploymentJobResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the cloud resources of cloud services in a deployment task.
     *  *
     * @param ListDeploymentJobResourceRequest $request ListDeploymentJobResourceRequest
     *
     * @return ListDeploymentJobResourceResponse ListDeploymentJobResourceResponse
     */
    public function listDeploymentJobResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDeploymentJobResourceWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the certificates or certificate orders of users.
     *  *
     * @description You can call the ListUserCertificateOrder operation to query the certificates or certificate orders of users. If you set OrderType to CERT or UPLOAD, certificates are returned. If you set OrderType to CPACK or BUY, certificate orders are returned.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
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
            'action' => 'ListUserCertificateOrder',
            'version' => '2020-04-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListUserCertificateOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the certificates or certificate orders of users.
     *  *
     * @description You can call the ListUserCertificateOrder operation to query the certificates or certificate orders of users. If you set OrderType to CERT or UPLOAD, certificates are returned. If you set OrderType to CPACK or BUY, certificate orders are returned.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
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
     * @summary Queries the details about the worker tasks of a deployment task. Alibaba Cloud allows you to deploy multiple certificates at a time. Therefore, a deployment task may include multiple worker tasks in multiple cloud services. A worker task refers to a task that deploys a certificate to a cloud resource in a cloud service.
     *  *
     * @param ListWorkerResourceRequest $request ListWorkerResourceRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ListWorkerResourceResponse ListWorkerResourceResponse
     */
    public function listWorkerResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cloudProduct)) {
            $query['CloudProduct'] = $request->cloudProduct;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
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
            'action' => 'ListWorkerResource',
            'version' => '2020-04-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListWorkerResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the details about the worker tasks of a deployment task. Alibaba Cloud allows you to deploy multiple certificates at a time. Therefore, a deployment task may include multiple worker tasks in multiple cloud services. A worker task refers to a task that deploys a certificate to a cloud resource in a cloud service.
     *  *
     * @param ListWorkerResourceRequest $request ListWorkerResourceRequest
     *
     * @return ListWorkerResourceResponse ListWorkerResourceResponse
     */
    public function listWorkerResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listWorkerResourceWithOptions($request, $runtime);
    }

    /**
     * @summary Changes the resource group to which a certificate or certificate order belongs.
     *  *
     * @param MoveResourceGroupRequest $request MoveResourceGroupRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return MoveResourceGroupResponse MoveResourceGroupResponse
     */
    public function moveResourceGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'MoveResourceGroup',
            'version' => '2020-04-07',
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
     * @summary Changes the resource group to which a certificate or certificate order belongs.
     *  *
     * @param MoveResourceGroupRequest $request MoveResourceGroupRequest
     *
     * @return MoveResourceGroupResponse MoveResourceGroupResponse
     */
    public function moveResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->moveResourceGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Submits a renewal application for an issued certificate.
     *  *
     * @description You can call the RenewCertificateOrderForPackageRequest operation to submit a renewal application for a certificate only when the order of the certificate is in the expiring state. After the renewal is complete, a new certificate order whose status is pending application is generated. You must submit a certificate application for the new certificate order and install the new certificate after the new certificate is issued.
     * >  You can call the [DescribeCertificateState](https://help.aliyun.com/document_detail/164111.html) operation to query the status of a certificate application order. If the value of the **Type** response parameter is **certificate**, the certificate is issued.
     *  *
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
        if (!Utils::isUnset($request->tags)) {
            $query['Tags'] = $request->tags;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'RenewCertificateOrderForPackageRequest',
            'version' => '2020-04-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RenewCertificateOrderForPackageRequestResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Submits a renewal application for an issued certificate.
     *  *
     * @description You can call the RenewCertificateOrderForPackageRequest operation to submit a renewal application for a certificate only when the order of the certificate is in the expiring state. After the renewal is complete, a new certificate order whose status is pending application is generated. You must submit a certificate application for the new certificate order and install the new certificate after the new certificate is issued.
     * >  You can call the [DescribeCertificateState](https://help.aliyun.com/document_detail/164111.html) operation to query the status of a certificate application order. If the value of the **Type** response parameter is **certificate**, the certificate is issued.
     *  *
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
     * @summary Signs a private certificate in a certificate application repository.
     *  *
     * @description You can call the Sign operation to sign a private certificate in a certificate application repository.
     * ### Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param SignRequest    $request SignRequest
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return SignResponse SignResponse
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
            'action' => 'Sign',
            'version' => '2020-04-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SignResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Signs a private certificate in a certificate application repository.
     *  *
     * @description You can call the Sign operation to sign a private certificate in a certificate application repository.
     * ### Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param SignRequest $request SignRequest
     *
     * @return SignResponse SignResponse
     */
    public function sign($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->signWithOptions($request, $runtime);
    }

    /**
     * @summary Updates the private key of a certificate signing request (CSR).
     *  *
     * @param UpdateCsrRequest $request UpdateCsrRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateCsrResponse UpdateCsrResponse
     */
    public function updateCsrWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->csrId)) {
            $query['CsrId'] = $request->csrId;
        }
        if (!Utils::isUnset($request->key)) {
            $query['Key'] = $request->key;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateCsr',
            'version' => '2020-04-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateCsrResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Updates the private key of a certificate signing request (CSR).
     *  *
     * @param UpdateCsrRequest $request UpdateCsrRequest
     *
     * @return UpdateCsrResponse UpdateCsrResponse
     */
    public function updateCsr($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCsrWithOptions($request, $runtime);
    }

    /**
     * @summary Updates a deployment task.
     *  *
     * @param UpdateDeploymentJobRequest $request UpdateDeploymentJobRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateDeploymentJobResponse UpdateDeploymentJobResponse
     */
    public function updateDeploymentJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->certIds)) {
            $query['CertIds'] = $request->certIds;
        }
        if (!Utils::isUnset($request->contactIds)) {
            $query['ContactIds'] = $request->contactIds;
        }
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->resourceIds)) {
            $query['ResourceIds'] = $request->resourceIds;
        }
        if (!Utils::isUnset($request->scheduleTime)) {
            $query['ScheduleTime'] = $request->scheduleTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateDeploymentJob',
            'version' => '2020-04-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateDeploymentJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Updates a deployment task.
     *  *
     * @param UpdateDeploymentJobRequest $request UpdateDeploymentJobRequest
     *
     * @return UpdateDeploymentJobResponse UpdateDeploymentJobResponse
     */
    public function updateDeploymentJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDeploymentJobWithOptions($request, $runtime);
    }

    /**
     * @summary Updates the status of a deployment task.
     *  *
     * @param UpdateDeploymentJobStatusRequest $request UpdateDeploymentJobStatusRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateDeploymentJobStatusResponse UpdateDeploymentJobStatusResponse
     */
    public function updateDeploymentJobStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateDeploymentJobStatus',
            'version' => '2020-04-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateDeploymentJobStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Updates the status of a deployment task.
     *  *
     * @param UpdateDeploymentJobStatusRequest $request UpdateDeploymentJobStatusRequest
     *
     * @return UpdateDeploymentJobStatusResponse UpdateDeploymentJobStatusResponse
     */
    public function updateDeploymentJobStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDeploymentJobStatusWithOptions($request, $runtime);
    }

    /**
     * @summary Rolls back or executes a worker task in a deployment task.
     *  *
     * @param UpdateWorkerResourceStatusRequest $request UpdateWorkerResourceStatusRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateWorkerResourceStatusResponse UpdateWorkerResourceStatusResponse
     */
    public function updateWorkerResourceStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->workerId)) {
            $query['WorkerId'] = $request->workerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateWorkerResourceStatus',
            'version' => '2020-04-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateWorkerResourceStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Rolls back or executes a worker task in a deployment task.
     *  *
     * @param UpdateWorkerResourceStatusRequest $request UpdateWorkerResourceStatusRequest
     *
     * @return UpdateWorkerResourceStatusResponse UpdateWorkerResourceStatusResponse
     */
    public function updateWorkerResourceStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateWorkerResourceStatusWithOptions($request, $runtime);
    }

    /**
     * @summary Uploads a certificate signing request (CSR) file
     *  *
     * @param UploadCsrRequest $request UploadCsrRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return UploadCsrResponse UploadCsrResponse
     */
    public function uploadCsrWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->csr)) {
            $query['Csr'] = $request->csr;
        }
        if (!Utils::isUnset($request->key)) {
            $query['Key'] = $request->key;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'UploadCsr',
            'version' => '2020-04-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UploadCsrResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Uploads a certificate signing request (CSR) file
     *  *
     * @param UploadCsrRequest $request UploadCsrRequest
     *
     * @return UploadCsrResponse UploadCsrResponse
     */
    public function uploadCsr($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uploadCsrWithOptions($request, $runtime);
    }

    /**
     * @summary Uploads a certificate.
     *  *
     * @description You can call this operation up to 100 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
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
        if (!Utils::isUnset($request->tags)) {
            $query['Tags'] = $request->tags;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'UploadUserCertificate',
            'version' => '2020-04-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UploadUserCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Uploads a certificate.
     *  *
     * @description You can call this operation up to 100 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
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
     * @summary Verifies the signature of a private certificate in a certificate application repository.
     *  *
     * @description You can call the Verify operation to verify the signature of a private certificate in a certificate application repository.
     * ### Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param VerifyRequest  $request VerifyRequest
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return VerifyResponse VerifyResponse
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
            'action' => 'Verify',
            'version' => '2020-04-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return VerifyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Verifies the signature of a private certificate in a certificate application repository.
     *  *
     * @description You can call the Verify operation to verify the signature of a private certificate in a certificate application repository.
     * ### Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param VerifyRequest $request VerifyRequest
     *
     * @return VerifyResponse VerifyResponse
     */
    public function verify($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->verifyWithOptions($request, $runtime);
    }
}
