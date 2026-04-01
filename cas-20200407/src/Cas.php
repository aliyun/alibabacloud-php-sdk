<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200407;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Cas\V20200407\Models\AddCloudAccessRequest;
use AlibabaCloud\SDK\Cas\V20200407\Models\AddCloudAccessResponse;
use AlibabaCloud\SDK\Cas\V20200407\Models\ApplyCertificateRequest;
use AlibabaCloud\SDK\Cas\V20200407\Models\ApplyCertificateResponse;
use AlibabaCloud\SDK\Cas\V20200407\Models\CancelCertificateForPackageRequestRequest;
use AlibabaCloud\SDK\Cas\V20200407\Models\CancelCertificateForPackageRequestResponse;
use AlibabaCloud\SDK\Cas\V20200407\Models\CancelOrderRequestRequest;
use AlibabaCloud\SDK\Cas\V20200407\Models\CancelOrderRequestResponse;
use AlibabaCloud\SDK\Cas\V20200407\Models\CancelPendingCertificateRequest;
use AlibabaCloud\SDK\Cas\V20200407\Models\CancelPendingCertificateResponse;
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
use AlibabaCloud\SDK\Cas\V20200407\Models\CreateWarehouseRequest;
use AlibabaCloud\SDK\Cas\V20200407\Models\CreateWarehouseResponse;
use AlibabaCloud\SDK\Cas\V20200407\Models\CreateWHClientCertificateRequest;
use AlibabaCloud\SDK\Cas\V20200407\Models\CreateWHClientCertificateResponse;
use AlibabaCloud\SDK\Cas\V20200407\Models\DecryptRequest;
use AlibabaCloud\SDK\Cas\V20200407\Models\DecryptResponse;
use AlibabaCloud\SDK\Cas\V20200407\Models\DeleteCertificateRequestRequest;
use AlibabaCloud\SDK\Cas\V20200407\Models\DeleteCertificateRequestResponse;
use AlibabaCloud\SDK\Cas\V20200407\Models\DeleteCloudAccessRequest;
use AlibabaCloud\SDK\Cas\V20200407\Models\DeleteCloudAccessResponse;
use AlibabaCloud\SDK\Cas\V20200407\Models\DeleteCsrRequest;
use AlibabaCloud\SDK\Cas\V20200407\Models\DeleteCsrResponse;
use AlibabaCloud\SDK\Cas\V20200407\Models\DeleteDeploymentJobRequest;
use AlibabaCloud\SDK\Cas\V20200407\Models\DeleteDeploymentJobResponse;
use AlibabaCloud\SDK\Cas\V20200407\Models\DeleteInstanceRequest;
use AlibabaCloud\SDK\Cas\V20200407\Models\DeleteInstanceResponse;
use AlibabaCloud\SDK\Cas\V20200407\Models\DeletePCACertRequest;
use AlibabaCloud\SDK\Cas\V20200407\Models\DeletePCACertResponse;
use AlibabaCloud\SDK\Cas\V20200407\Models\DeleteUserCertificateRequest;
use AlibabaCloud\SDK\Cas\V20200407\Models\DeleteUserCertificateResponse;
use AlibabaCloud\SDK\Cas\V20200407\Models\DeleteWarehouseRequest;
use AlibabaCloud\SDK\Cas\V20200407\Models\DeleteWarehouseResponse;
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
use AlibabaCloud\SDK\Cas\V20200407\Models\DescribeWarehouseCertRequest;
use AlibabaCloud\SDK\Cas\V20200407\Models\DescribeWarehouseCertResponse;
use AlibabaCloud\SDK\Cas\V20200407\Models\EncryptRequest;
use AlibabaCloud\SDK\Cas\V20200407\Models\EncryptResponse;
use AlibabaCloud\SDK\Cas\V20200407\Models\GetAssetCountResponse;
use AlibabaCloud\SDK\Cas\V20200407\Models\GetCertificateDetailRequest;
use AlibabaCloud\SDK\Cas\V20200407\Models\GetCertificateDetailResponse;
use AlibabaCloud\SDK\Cas\V20200407\Models\GetCertWarehouseQuotaResponse;
use AlibabaCloud\SDK\Cas\V20200407\Models\GetCsrDetailRequest;
use AlibabaCloud\SDK\Cas\V20200407\Models\GetCsrDetailResponse;
use AlibabaCloud\SDK\Cas\V20200407\Models\GetInstanceDetailRequest;
use AlibabaCloud\SDK\Cas\V20200407\Models\GetInstanceDetailResponse;
use AlibabaCloud\SDK\Cas\V20200407\Models\GetInstanceSummaryRequest;
use AlibabaCloud\SDK\Cas\V20200407\Models\GetInstanceSummaryResponse;
use AlibabaCloud\SDK\Cas\V20200407\Models\GetRiskCountResponse;
use AlibabaCloud\SDK\Cas\V20200407\Models\GetTaskAttributeRequest;
use AlibabaCloud\SDK\Cas\V20200407\Models\GetTaskAttributeResponse;
use AlibabaCloud\SDK\Cas\V20200407\Models\GetUserCertificateDetailRequest;
use AlibabaCloud\SDK\Cas\V20200407\Models\GetUserCertificateDetailResponse;
use AlibabaCloud\SDK\Cas\V20200407\Models\ListAssetCountRequest;
use AlibabaCloud\SDK\Cas\V20200407\Models\ListAssetCountResponse;
use AlibabaCloud\SDK\Cas\V20200407\Models\ListCertificatesRequest;
use AlibabaCloud\SDK\Cas\V20200407\Models\ListCertificatesResponse;
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
use AlibabaCloud\SDK\Cas\V20200407\Models\ListInstancesRequest;
use AlibabaCloud\SDK\Cas\V20200407\Models\ListInstancesResponse;
use AlibabaCloud\SDK\Cas\V20200407\Models\ListUserCertificateOrderRequest;
use AlibabaCloud\SDK\Cas\V20200407\Models\ListUserCertificateOrderResponse;
use AlibabaCloud\SDK\Cas\V20200407\Models\ListWarehouseRequest;
use AlibabaCloud\SDK\Cas\V20200407\Models\ListWarehouseResponse;
use AlibabaCloud\SDK\Cas\V20200407\Models\ListWarehouseShrinkRequest;
use AlibabaCloud\SDK\Cas\V20200407\Models\ListWorkerResourceRequest;
use AlibabaCloud\SDK\Cas\V20200407\Models\ListWorkerResourceResponse;
use AlibabaCloud\SDK\Cas\V20200407\Models\MoveResourceGroupRequest;
use AlibabaCloud\SDK\Cas\V20200407\Models\MoveResourceGroupResponse;
use AlibabaCloud\SDK\Cas\V20200407\Models\RefundInstanceRequest;
use AlibabaCloud\SDK\Cas\V20200407\Models\RefundInstanceResponse;
use AlibabaCloud\SDK\Cas\V20200407\Models\RenewCertificateOrderForPackageRequestRequest;
use AlibabaCloud\SDK\Cas\V20200407\Models\RenewCertificateOrderForPackageRequestResponse;
use AlibabaCloud\SDK\Cas\V20200407\Models\RevokeCertificateRequest;
use AlibabaCloud\SDK\Cas\V20200407\Models\RevokeCertificateResponse;
use AlibabaCloud\SDK\Cas\V20200407\Models\RevokeWHClientCertificateRequest;
use AlibabaCloud\SDK\Cas\V20200407\Models\RevokeWHClientCertificateResponse;
use AlibabaCloud\SDK\Cas\V20200407\Models\SignRequest;
use AlibabaCloud\SDK\Cas\V20200407\Models\SignResponse;
use AlibabaCloud\SDK\Cas\V20200407\Models\UpdateCsrRequest;
use AlibabaCloud\SDK\Cas\V20200407\Models\UpdateCsrResponse;
use AlibabaCloud\SDK\Cas\V20200407\Models\UpdateDeploymentJobRequest;
use AlibabaCloud\SDK\Cas\V20200407\Models\UpdateDeploymentJobResponse;
use AlibabaCloud\SDK\Cas\V20200407\Models\UpdateDeploymentJobStatusRequest;
use AlibabaCloud\SDK\Cas\V20200407\Models\UpdateDeploymentJobStatusResponse;
use AlibabaCloud\SDK\Cas\V20200407\Models\UpdateInstanceRequest;
use AlibabaCloud\SDK\Cas\V20200407\Models\UpdateInstanceResponse;
use AlibabaCloud\SDK\Cas\V20200407\Models\UpdateWorkerResourceStatusRequest;
use AlibabaCloud\SDK\Cas\V20200407\Models\UpdateWorkerResourceStatusResponse;
use AlibabaCloud\SDK\Cas\V20200407\Models\UploadCsrRequest;
use AlibabaCloud\SDK\Cas\V20200407\Models\UploadCsrResponse;
use AlibabaCloud\SDK\Cas\V20200407\Models\UploadPCACertRequest;
use AlibabaCloud\SDK\Cas\V20200407\Models\UploadPCACertResponse;
use AlibabaCloud\SDK\Cas\V20200407\Models\UploadUserCertificateRequest;
use AlibabaCloud\SDK\Cas\V20200407\Models\UploadUserCertificateResponse;
use AlibabaCloud\SDK\Cas\V20200407\Models\VerifyRequest;
use AlibabaCloud\SDK\Cas\V20200407\Models\VerifyResponse;
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
     * 添加授权ak.
     *
     * @param request - AddCloudAccessRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddCloudAccessResponse
     *
     * @param AddCloudAccessRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return AddCloudAccessResponse
     */
    public function addCloudAccessWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cloudName) {
            @$query['CloudName'] = $request->cloudName;
        }

        if (null !== $request->secretId) {
            @$query['SecretId'] = $request->secretId;
        }

        if (null !== $request->secretKey) {
            @$query['SecretKey'] = $request->secretKey;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddCloudAccess',
            'version' => '2020-04-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddCloudAccessResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 添加授权ak.
     *
     * @param request - AddCloudAccessRequest
     *
     * @returns AddCloudAccessResponse
     *
     * @param AddCloudAccessRequest $request
     *
     * @return AddCloudAccessResponse
     */
    public function addCloudAccess($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addCloudAccessWithOptions($request, $runtime);
    }

    /**
     * 申请证书.
     *
     * @param request - ApplyCertificateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ApplyCertificateResponse
     *
     * @param ApplyCertificateRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ApplyCertificateResponse
     */
    public function applyCertificateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ApplyCertificate',
            'version' => '2020-04-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ApplyCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 申请证书.
     *
     * @param request - ApplyCertificateRequest
     *
     * @returns ApplyCertificateResponse
     *
     * @param ApplyCertificateRequest $request
     *
     * @return ApplyCertificateResponse
     */
    public function applyCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->applyCertificateWithOptions($request, $runtime);
    }

    /**
     * Revokes an issued certificate and cancels the application order of the certificate.
     *
     * @remarks
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - CancelCertificateForPackageRequestRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CancelCertificateForPackageRequestResponse
     *
     * @param CancelCertificateForPackageRequestRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return CancelCertificateForPackageRequestResponse
     */
    public function cancelCertificateForPackageRequestWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->orderId) {
            @$query['OrderId'] = $request->orderId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Revokes an issued certificate and cancels the application order of the certificate.
     *
     * @remarks
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - CancelCertificateForPackageRequestRequest
     *
     * @returns CancelCertificateForPackageRequestResponse
     *
     * @param CancelCertificateForPackageRequestRequest $request
     *
     * @return CancelCertificateForPackageRequestResponse
     */
    public function cancelCertificateForPackageRequest($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelCertificateForPackageRequestWithOptions($request, $runtime);
    }

    /**
     * Cancels a certificate application order that is in the pending validation or being reviewed state.
     *
     * @remarks
     * You can call this operation up to 100 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - CancelOrderRequestRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CancelOrderRequestResponse
     *
     * @param CancelOrderRequestRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CancelOrderRequestResponse
     */
    public function cancelOrderRequestWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->orderId) {
            @$query['OrderId'] = $request->orderId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Cancels a certificate application order that is in the pending validation or being reviewed state.
     *
     * @remarks
     * You can call this operation up to 100 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - CancelOrderRequestRequest
     *
     * @returns CancelOrderRequestResponse
     *
     * @param CancelOrderRequestRequest $request
     *
     * @return CancelOrderRequestResponse
     */
    public function cancelOrderRequest($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelOrderRequestWithOptions($request, $runtime);
    }

    /**
     * 撤回证书申请.
     *
     * @param request - CancelPendingCertificateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CancelPendingCertificateResponse
     *
     * @param CancelPendingCertificateRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CancelPendingCertificateResponse
     */
    public function cancelPendingCertificateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CancelPendingCertificate',
            'version' => '2020-04-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CancelPendingCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 撤回证书申请.
     *
     * @param request - CancelPendingCertificateRequest
     *
     * @returns CancelPendingCertificateResponse
     *
     * @param CancelPendingCertificateRequest $request
     *
     * @return CancelPendingCertificateResponse
     */
    public function cancelPendingCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelPendingCertificateWithOptions($request, $runtime);
    }

    /**
     * Submits a certificate application.
     *
     * @remarks
     *   Before you call this operation, make sure that you have purchased a certificate resource plan of the required specifications. For more information about how to purchase a certificate resource plan, see [Purchase a certificate resource plan](https://help.aliyun.com/document_detail/28542.html). You can call the [DescribePackageState](https://help.aliyun.com/document_detail/455800.html) operation to query the usage of a certificate resource plan of specified specifications, including the total number of certificate resource plans that you purchase, the number of certificate applications that you submit, and the number of certificates that are issued.
     * *   After you call this operation to submit a certificate application and the certificate is issued, the certificate quota provided by the resource plan that you purchased is consumed. When you call this operation, you can use the **ProductCode** parameter to specify the specifications of the certificate that you want to apply for.
     * *   After you call this operation to submit a certificate application, you also need to call the [DescribeCertificateState](https://help.aliyun.com/document_detail/455800.html) operation to obtain the information that is required for domain name ownership verification and manually complete the verification. Then, your certificate application is reviewed by the certificate authority (CA). If you use the Domain Name System (DNS) verification method, you must complete the verification on your DNS service provider system. If you use the file verification method, you must complete the verification on the DNS server.
     *
     * @param request - CreateCertificateForPackageRequestRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateCertificateForPackageRequestResponse
     *
     * @param CreateCertificateForPackageRequestRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return CreateCertificateForPackageRequestResponse
     */
    public function createCertificateForPackageRequestWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->companyName) {
            @$query['CompanyName'] = $request->companyName;
        }

        if (null !== $request->csr) {
            @$query['Csr'] = $request->csr;
        }

        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->email) {
            @$query['Email'] = $request->email;
        }

        if (null !== $request->phone) {
            @$query['Phone'] = $request->phone;
        }

        if (null !== $request->productCode) {
            @$query['ProductCode'] = $request->productCode;
        }

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        if (null !== $request->username) {
            @$query['Username'] = $request->username;
        }

        if (null !== $request->validateType) {
            @$query['ValidateType'] = $request->validateType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Submits a certificate application.
     *
     * @remarks
     *   Before you call this operation, make sure that you have purchased a certificate resource plan of the required specifications. For more information about how to purchase a certificate resource plan, see [Purchase a certificate resource plan](https://help.aliyun.com/document_detail/28542.html). You can call the [DescribePackageState](https://help.aliyun.com/document_detail/455800.html) operation to query the usage of a certificate resource plan of specified specifications, including the total number of certificate resource plans that you purchase, the number of certificate applications that you submit, and the number of certificates that are issued.
     * *   After you call this operation to submit a certificate application and the certificate is issued, the certificate quota provided by the resource plan that you purchased is consumed. When you call this operation, you can use the **ProductCode** parameter to specify the specifications of the certificate that you want to apply for.
     * *   After you call this operation to submit a certificate application, you also need to call the [DescribeCertificateState](https://help.aliyun.com/document_detail/455800.html) operation to obtain the information that is required for domain name ownership verification and manually complete the verification. Then, your certificate application is reviewed by the certificate authority (CA). If you use the Domain Name System (DNS) verification method, you must complete the verification on your DNS service provider system. If you use the file verification method, you must complete the verification on the DNS server.
     *
     * @param request - CreateCertificateForPackageRequestRequest
     *
     * @returns CreateCertificateForPackageRequestResponse
     *
     * @param CreateCertificateForPackageRequestRequest $request
     *
     * @return CreateCertificateForPackageRequestResponse
     */
    public function createCertificateForPackageRequest($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCertificateForPackageRequestWithOptions($request, $runtime);
    }

    /**
     * Purchases, applies for, and issues a domain validated (DV) certificate by using extended certificate services.
     *
     * @remarks
     *   You can call this operation to apply for only DV certificates. If you want to apply for an organization validated (OV) or extended validation (EV) certificate, we recommend that you call the [CreateCertificateForPackageRequest](https://help.aliyun.com/document_detail/455296.html) operation. This operation allows you to apply for certificates of all specifications and specify the method to generate a certificate signing request (CSR) file.
     * *   Before you call this operation, make sure that you have purchased a certificate resource plan of the required specifications. For more information about how to purchase a certificate resource plan, see [Purchase a certificate resource plan](https://help.aliyun.com/document_detail/28542.html). You can call the [DescribePackageState](https://help.aliyun.com/document_detail/455803.html) operation to query the usage of a certificate resource plan of specified specifications, including the total number of certificate resource plans that you purchase, the number of certificate applications that you submit, and the number of certificates that are issued.
     * *   When you call this operation, you can use the **ProductCode** parameter to specify the specifications of the certificate.
     * *   After you call this operation to submit a certificate application, Certificate Management Service automatically creates a CSR file for your application and consumes the certificate quota in the certificate resource plans of the specified specifications that you purchased. After you call this operation, you also need to call the [DescribeCertificateState](https://help.aliyun.com/document_detail/455800.html) operation to obtain the information that is required to complete domain name verification, and manually complete the verification. If you use the DNS verification method, you must complete the verification on the management platform of the domain name. If you use the file verification method, you must complete the verification on your DNS server. Then, the certificate authority (CA) will review your certificate application.
     *
     * @param request - CreateCertificateRequestRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateCertificateRequestResponse
     *
     * @param CreateCertificateRequestRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateCertificateRequestResponse
     */
    public function createCertificateRequestWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->email) {
            @$query['Email'] = $request->email;
        }

        if (null !== $request->phone) {
            @$query['Phone'] = $request->phone;
        }

        if (null !== $request->productCode) {
            @$query['ProductCode'] = $request->productCode;
        }

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        if (null !== $request->username) {
            @$query['Username'] = $request->username;
        }

        if (null !== $request->validateType) {
            @$query['ValidateType'] = $request->validateType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Purchases, applies for, and issues a domain validated (DV) certificate by using extended certificate services.
     *
     * @remarks
     *   You can call this operation to apply for only DV certificates. If you want to apply for an organization validated (OV) or extended validation (EV) certificate, we recommend that you call the [CreateCertificateForPackageRequest](https://help.aliyun.com/document_detail/455296.html) operation. This operation allows you to apply for certificates of all specifications and specify the method to generate a certificate signing request (CSR) file.
     * *   Before you call this operation, make sure that you have purchased a certificate resource plan of the required specifications. For more information about how to purchase a certificate resource plan, see [Purchase a certificate resource plan](https://help.aliyun.com/document_detail/28542.html). You can call the [DescribePackageState](https://help.aliyun.com/document_detail/455803.html) operation to query the usage of a certificate resource plan of specified specifications, including the total number of certificate resource plans that you purchase, the number of certificate applications that you submit, and the number of certificates that are issued.
     * *   When you call this operation, you can use the **ProductCode** parameter to specify the specifications of the certificate.
     * *   After you call this operation to submit a certificate application, Certificate Management Service automatically creates a CSR file for your application and consumes the certificate quota in the certificate resource plans of the specified specifications that you purchased. After you call this operation, you also need to call the [DescribeCertificateState](https://help.aliyun.com/document_detail/455800.html) operation to obtain the information that is required to complete domain name verification, and manually complete the verification. If you use the DNS verification method, you must complete the verification on the management platform of the domain name. If you use the file verification method, you must complete the verification on your DNS server. Then, the certificate authority (CA) will review your certificate application.
     *
     * @param request - CreateCertificateRequestRequest
     *
     * @returns CreateCertificateRequestResponse
     *
     * @param CreateCertificateRequestRequest $request
     *
     * @return CreateCertificateRequestResponse
     */
    public function createCertificateRequest($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCertificateRequestWithOptions($request, $runtime);
    }

    /**
     * Purchases, applies for, and issues a domain validated (DV) certificate by using a custom certificate signing request (CSR) file. You can use extended certificate services to purchase and apply for a DV certificate with a few clicks.
     *
     * @remarks
     *   You can use this operation to apply for only a domain validated (DV) certificate. You cannot use this operation to apply for an organization validated (OV) certificate. We recommend that you use the [CreateCertificateForPackageRequest](https://help.aliyun.com/document_detail/455296.html) operation to apply for a certificate. You can use the CreateCertificateForPackageRequest operation to apply for certificates of all types and specify the CSR generation method.
     * *   Before you call this operation, make sure that you have purchased a certificate resource plan of the required specifications. For more information about how to purchase a certificate resource plan, see [Purchase a certificate resource plan](https://help.aliyun.com/document_detail/28542.html). You can call the [DescribePackageState](https://help.aliyun.com/document_detail/455803.html) operation to query the usage of a certificate resource plan of specified specifications, including the total number of certificate resource plans that you purchase, the number of certificate applications that you submit, and the number of certificates that are issued.
     * *   When you call this operation, you can use the **ProductCode** parameter to specify the specifications of the certificate that you want to apply for.
     * *   After you call this operation to submit a certificate application, the certificate quota of the required specifications that you purchased is consumed. After you call this operation, you must call the [DescribeCertificateState](https://help.aliyun.com/document_detail/455800.html) operation to obtain the information that is required for domain name ownership verification and manually complete the verification. Then, your certificate application is reviewed by the certificate authority (CA). If you use the Domain Name System (DNS) verification method, you must complete the verification on your DNS service provider system. If you use the file verification method, you must complete the verification on the DNS server.
     *
     * @param request - CreateCertificateWithCsrRequestRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateCertificateWithCsrRequestResponse
     *
     * @param CreateCertificateWithCsrRequestRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return CreateCertificateWithCsrRequestResponse
     */
    public function createCertificateWithCsrRequestWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->csr) {
            @$query['Csr'] = $request->csr;
        }

        if (null !== $request->email) {
            @$query['Email'] = $request->email;
        }

        if (null !== $request->phone) {
            @$query['Phone'] = $request->phone;
        }

        if (null !== $request->productCode) {
            @$query['ProductCode'] = $request->productCode;
        }

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        if (null !== $request->username) {
            @$query['Username'] = $request->username;
        }

        if (null !== $request->validateType) {
            @$query['ValidateType'] = $request->validateType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Purchases, applies for, and issues a domain validated (DV) certificate by using a custom certificate signing request (CSR) file. You can use extended certificate services to purchase and apply for a DV certificate with a few clicks.
     *
     * @remarks
     *   You can use this operation to apply for only a domain validated (DV) certificate. You cannot use this operation to apply for an organization validated (OV) certificate. We recommend that you use the [CreateCertificateForPackageRequest](https://help.aliyun.com/document_detail/455296.html) operation to apply for a certificate. You can use the CreateCertificateForPackageRequest operation to apply for certificates of all types and specify the CSR generation method.
     * *   Before you call this operation, make sure that you have purchased a certificate resource plan of the required specifications. For more information about how to purchase a certificate resource plan, see [Purchase a certificate resource plan](https://help.aliyun.com/document_detail/28542.html). You can call the [DescribePackageState](https://help.aliyun.com/document_detail/455803.html) operation to query the usage of a certificate resource plan of specified specifications, including the total number of certificate resource plans that you purchase, the number of certificate applications that you submit, and the number of certificates that are issued.
     * *   When you call this operation, you can use the **ProductCode** parameter to specify the specifications of the certificate that you want to apply for.
     * *   After you call this operation to submit a certificate application, the certificate quota of the required specifications that you purchased is consumed. After you call this operation, you must call the [DescribeCertificateState](https://help.aliyun.com/document_detail/455800.html) operation to obtain the information that is required for domain name ownership verification and manually complete the verification. Then, your certificate application is reviewed by the certificate authority (CA). If you use the Domain Name System (DNS) verification method, you must complete the verification on your DNS service provider system. If you use the file verification method, you must complete the verification on the DNS server.
     *
     * @param request - CreateCertificateWithCsrRequestRequest
     *
     * @returns CreateCertificateWithCsrRequestResponse
     *
     * @param CreateCertificateWithCsrRequestRequest $request
     *
     * @return CreateCertificateWithCsrRequestResponse
     */
    public function createCertificateWithCsrRequest($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCertificateWithCsrRequestWithOptions($request, $runtime);
    }

    /**
     * Creates a certificate signing request (CSR). A CSR file contains the information about an SSL certificate that you want to apply for. The information includes the domain names that you want to bind to the certificate and the name and the geographical location of the certificate holder. When you submit a certificate application to a certificate authority (CA), you must provide a CSR. After the CA approves your certificate application, the CA uses the private key of the root CA to sign your CSR and generates a public key file. The public key file is the SSL certificate that the CA issues to you. The private key of the SSL certificate is generated when you create the CSR.
     *
     * @param request - CreateCsrRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateCsrResponse
     *
     * @param CreateCsrRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return CreateCsrResponse
     */
    public function createCsrWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->algorithm) {
            @$query['Algorithm'] = $request->algorithm;
        }

        if (null !== $request->commonName) {
            @$query['CommonName'] = $request->commonName;
        }

        if (null !== $request->corpName) {
            @$query['CorpName'] = $request->corpName;
        }

        if (null !== $request->countryCode) {
            @$query['CountryCode'] = $request->countryCode;
        }

        if (null !== $request->department) {
            @$query['Department'] = $request->department;
        }

        if (null !== $request->keySize) {
            @$query['KeySize'] = $request->keySize;
        }

        if (null !== $request->locality) {
            @$query['Locality'] = $request->locality;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->province) {
            @$query['Province'] = $request->province;
        }

        if (null !== $request->sans) {
            @$query['Sans'] = $request->sans;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Creates a certificate signing request (CSR). A CSR file contains the information about an SSL certificate that you want to apply for. The information includes the domain names that you want to bind to the certificate and the name and the geographical location of the certificate holder. When you submit a certificate application to a certificate authority (CA), you must provide a CSR. After the CA approves your certificate application, the CA uses the private key of the root CA to sign your CSR and generates a public key file. The public key file is the SSL certificate that the CA issues to you. The private key of the SSL certificate is generated when you create the CSR.
     *
     * @param request - CreateCsrRequest
     *
     * @returns CreateCsrResponse
     *
     * @param CreateCsrRequest $request
     *
     * @return CreateCsrResponse
     */
    public function createCsr($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCsrWithOptions($request, $runtime);
    }

    /**
     * Creates a certificate deployment task. After an SSL certificate is issued, you can create a certificate deployment task to immediately deploy the certificate to an Alibaba Cloud service or deploy the certificate to the service at a specific point in time. Then, the certificate can implement trusted identity authentication and ensure the security of data transmission for your website hosted on the service.
     *
     * @remarks
     * After the task creation is completed, the task will be in the editing state. You need to call the UpdateDeploymentJobStatus interface to change the status to the pending state, otherwise the task will not be executed.
     *
     * @param request - CreateDeploymentJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDeploymentJobResponse
     *
     * @param CreateDeploymentJobRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateDeploymentJobResponse
     */
    public function createDeploymentJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->certIds) {
            @$query['CertIds'] = $request->certIds;
        }

        if (null !== $request->contactIds) {
            @$query['ContactIds'] = $request->contactIds;
        }

        if (null !== $request->jobType) {
            @$query['JobType'] = $request->jobType;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->resourceIds) {
            @$query['ResourceIds'] = $request->resourceIds;
        }

        if (null !== $request->scheduleTime) {
            @$query['ScheduleTime'] = $request->scheduleTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Creates a certificate deployment task. After an SSL certificate is issued, you can create a certificate deployment task to immediately deploy the certificate to an Alibaba Cloud service or deploy the certificate to the service at a specific point in time. Then, the certificate can implement trusted identity authentication and ensure the security of data transmission for your website hosted on the service.
     *
     * @remarks
     * After the task creation is completed, the task will be in the editing state. You need to call the UpdateDeploymentJobStatus interface to change the status to the pending state, otherwise the task will not be executed.
     *
     * @param request - CreateDeploymentJobRequest
     *
     * @returns CreateDeploymentJobResponse
     *
     * @param CreateDeploymentJobRequest $request
     *
     * @return CreateDeploymentJobResponse
     */
    public function createDeploymentJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDeploymentJobWithOptions($request, $runtime);
    }

    /**
     * Applies for a client certificate in a certificate repository of a single user.
     *
     * @param request - CreateWHClientCertificateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateWHClientCertificateResponse
     *
     * @param CreateWHClientCertificateRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CreateWHClientCertificateResponse
     */
    public function createWHClientCertificateWithOptions($request, $runtime)
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

        if (null !== $request->sanType) {
            @$query['SanType'] = $request->sanType;
        }

        if (null !== $request->sanValue) {
            @$query['SanValue'] = $request->sanValue;
        }

        if (null !== $request->state) {
            @$query['State'] = $request->state;
        }

        if (null !== $request->years) {
            @$query['Years'] = $request->years;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateWHClientCertificate',
            'version' => '2020-04-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateWHClientCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Applies for a client certificate in a certificate repository of a single user.
     *
     * @param request - CreateWHClientCertificateRequest
     *
     * @returns CreateWHClientCertificateResponse
     *
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
     * 创建证书仓库。
     *
     * @param request - CreateWarehouseRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateWarehouseResponse
     *
     * @param CreateWarehouseRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateWarehouseResponse
     */
    public function createWarehouseWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->biz) {
            @$query['Biz'] = $request->biz;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateWarehouse',
            'version' => '2020-04-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateWarehouseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建证书仓库。
     *
     * @param request - CreateWarehouseRequest
     *
     * @returns CreateWarehouseResponse
     *
     * @param CreateWarehouseRequest $request
     *
     * @return CreateWarehouseResponse
     */
    public function createWarehouse($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createWarehouseWithOptions($request, $runtime);
    }

    /**
     * Decrypts a certificate in a certificate repository.
     *
     * @remarks
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - DecryptRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DecryptResponse
     *
     * @param DecryptRequest $request
     * @param RuntimeOptions $runtime
     *
     * @return DecryptResponse
     */
    public function decryptWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->algorithm) {
            @$query['Algorithm'] = $request->algorithm;
        }

        if (null !== $request->certIdentifier) {
            @$query['CertIdentifier'] = $request->certIdentifier;
        }

        if (null !== $request->ciphertextBlob) {
            @$query['CiphertextBlob'] = $request->ciphertextBlob;
        }

        if (null !== $request->customIdentifier) {
            @$query['CustomIdentifier'] = $request->customIdentifier;
        }

        if (null !== $request->messageType) {
            @$query['MessageType'] = $request->messageType;
        }

        if (null !== $request->warehouseId) {
            @$query['WarehouseId'] = $request->warehouseId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Decrypts a certificate in a certificate repository.
     *
     * @remarks
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - DecryptRequest
     *
     * @returns DecryptResponse
     *
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
     * Deletes an order in which the application for a domain validated (DV) certificate failed.
     *
     * @remarks
     * You can call this operation to delete a certificate application order only in the following scenarios:
     * *   The status of the order is **review failed**. You have called the [DescribeCertificateState](https://help.aliyun.com/document_detail/455800.html) operation to query the status of the certificate application order and the value of the **Type** parameter is **verify_fail**.
     * *   The status of the order is **pending application**. You have called the [CancelOrderRequest](https://help.aliyun.com/document_detail/455299.html) operation to cancel a certificate application order whose status is pending review or being reviewed. The status of the certificate application order that is canceled in this case changes to **pending application**.
     *
     * @param request - DeleteCertificateRequestRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteCertificateRequestResponse
     *
     * @param DeleteCertificateRequestRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DeleteCertificateRequestResponse
     */
    public function deleteCertificateRequestWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->orderId) {
            @$query['OrderId'] = $request->orderId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Deletes an order in which the application for a domain validated (DV) certificate failed.
     *
     * @remarks
     * You can call this operation to delete a certificate application order only in the following scenarios:
     * *   The status of the order is **review failed**. You have called the [DescribeCertificateState](https://help.aliyun.com/document_detail/455800.html) operation to query the status of the certificate application order and the value of the **Type** parameter is **verify_fail**.
     * *   The status of the order is **pending application**. You have called the [CancelOrderRequest](https://help.aliyun.com/document_detail/455299.html) operation to cancel a certificate application order whose status is pending review or being reviewed. The status of the certificate application order that is canceled in this case changes to **pending application**.
     *
     * @param request - DeleteCertificateRequestRequest
     *
     * @returns DeleteCertificateRequestResponse
     *
     * @param DeleteCertificateRequestRequest $request
     *
     * @return DeleteCertificateRequestResponse
     */
    public function deleteCertificateRequest($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCertificateRequestWithOptions($request, $runtime);
    }

    /**
     * 删除授权ak.
     *
     * @param request - DeleteCloudAccessRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteCloudAccessResponse
     *
     * @param DeleteCloudAccessRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteCloudAccessResponse
     */
    public function deleteCloudAccessWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessId) {
            @$query['AccessId'] = $request->accessId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteCloudAccess',
            'version' => '2020-04-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteCloudAccessResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除授权ak.
     *
     * @param request - DeleteCloudAccessRequest
     *
     * @returns DeleteCloudAccessResponse
     *
     * @param DeleteCloudAccessRequest $request
     *
     * @return DeleteCloudAccessResponse
     */
    public function deleteCloudAccess($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCloudAccessWithOptions($request, $runtime);
    }

    /**
     * Deletes a Certificate Signing Request (CSR) that is no longer required.
     *
     * @param request - DeleteCsrRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteCsrResponse
     *
     * @param DeleteCsrRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return DeleteCsrResponse
     */
    public function deleteCsrWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->csrId) {
            @$query['CsrId'] = $request->csrId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Deletes a Certificate Signing Request (CSR) that is no longer required.
     *
     * @param request - DeleteCsrRequest
     *
     * @returns DeleteCsrResponse
     *
     * @param DeleteCsrRequest $request
     *
     * @return DeleteCsrResponse
     */
    public function deleteCsr($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCsrWithOptions($request, $runtime);
    }

    /**
     * Deletes a deployment task.
     *
     * @param request - DeleteDeploymentJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDeploymentJobResponse
     *
     * @param DeleteDeploymentJobRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteDeploymentJobResponse
     */
    public function deleteDeploymentJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Deletes a deployment task.
     *
     * @param request - DeleteDeploymentJobRequest
     *
     * @returns DeleteDeploymentJobResponse
     *
     * @param DeleteDeploymentJobRequest $request
     *
     * @return DeleteDeploymentJobResponse
     */
    public function deleteDeploymentJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDeploymentJobWithOptions($request, $runtime);
    }

    /**
     * 删除实例.
     *
     * @param request - DeleteInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteInstanceResponse
     *
     * @param DeleteInstanceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteInstanceResponse
     */
    public function deleteInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteInstance',
            'version' => '2020-04-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除实例.
     *
     * @param request - DeleteInstanceRequest
     *
     * @returns DeleteInstanceResponse
     *
     * @param DeleteInstanceRequest $request
     *
     * @return DeleteInstanceResponse
     */
    public function deleteInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteInstanceWithOptions($request, $runtime);
    }

    /**
     * Deletes a private certificate from a certificate application repository.
     *
     * @remarks
     * You can call the DeletePCACert operation to delete a private certificate from a certificate application repository.
     * ### Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - DeletePCACertRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeletePCACertResponse
     *
     * @param DeletePCACertRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeletePCACertResponse
     */
    public function deletePCACertWithOptions($request, $runtime)
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
     * Deletes a private certificate from a certificate application repository.
     *
     * @remarks
     * You can call the DeletePCACert operation to delete a private certificate from a certificate application repository.
     * ### Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - DeletePCACertRequest
     *
     * @returns DeletePCACertResponse
     *
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
     * Deletes an expired or uploaded certificate.
     *
     * @remarks
     * You can call this operation up to 100 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - DeleteUserCertificateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteUserCertificateResponse
     *
     * @param DeleteUserCertificateRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteUserCertificateResponse
     */
    public function deleteUserCertificateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->certId) {
            @$query['CertId'] = $request->certId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Deletes an expired or uploaded certificate.
     *
     * @remarks
     * You can call this operation up to 100 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - DeleteUserCertificateRequest
     *
     * @returns DeleteUserCertificateResponse
     *
     * @param DeleteUserCertificateRequest $request
     *
     * @return DeleteUserCertificateResponse
     */
    public function deleteUserCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteUserCertificateWithOptions($request, $runtime);
    }

    /**
     * 删除证书仓库.
     *
     * @param request - DeleteWarehouseRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteWarehouseResponse
     *
     * @param DeleteWarehouseRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteWarehouseResponse
     */
    public function deleteWarehouseWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->warehouseInstanceId) {
            @$query['WarehouseInstanceId'] = $request->warehouseInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteWarehouse',
            'version' => '2020-04-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteWarehouseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除证书仓库.
     *
     * @param request - DeleteWarehouseRequest
     *
     * @returns DeleteWarehouseResponse
     *
     * @param DeleteWarehouseRequest $request
     *
     * @return DeleteWarehouseResponse
     */
    public function deleteWarehouse($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteWarehouseWithOptions($request, $runtime);
    }

    /**
     * Deletes the worker of a deployment task.
     *
     * @param request - DeleteWorkerResourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteWorkerResourceResponse
     *
     * @param DeleteWorkerResourceRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteWorkerResourceResponse
     */
    public function deleteWorkerResourceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        if (null !== $request->workerId) {
            @$query['WorkerId'] = $request->workerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Deletes the worker of a deployment task.
     *
     * @param request - DeleteWorkerResourceRequest
     *
     * @returns DeleteWorkerResourceResponse
     *
     * @param DeleteWorkerResourceRequest $request
     *
     * @return DeleteWorkerResourceResponse
     */
    public function deleteWorkerResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteWorkerResourceWithOptions($request, $runtime);
    }

    /**
     * Queries the status of a specified certificate application order.
     *
     * @remarks
     * If you do not complete the verification of the domain name ownership after you submit a certificate application, you can call this operation to obtain the information that is required to complete the verification. You can complete the verification of the domain name ownership based on the data returned. If you use the DNS verification method, you must complete the verification on the management platform of the domain name. If you use the file verification method, you must complete the verification on the DNS server.
     * The certificate authority (CA) reviews your certificate application only after you complete the verification of the domain name ownership. After the CA approves your certificate application, the CA issues the certificate. If a certificate is issued, you can call this operation to obtain the CA certificate and private key of the certificate.
     *
     * @param request - DescribeCertificateStateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCertificateStateResponse
     *
     * @param DescribeCertificateStateRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeCertificateStateResponse
     */
    public function describeCertificateStateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->orderId) {
            @$query['OrderId'] = $request->orderId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries the status of a specified certificate application order.
     *
     * @remarks
     * If you do not complete the verification of the domain name ownership after you submit a certificate application, you can call this operation to obtain the information that is required to complete the verification. You can complete the verification of the domain name ownership based on the data returned. If you use the DNS verification method, you must complete the verification on the management platform of the domain name. If you use the file verification method, you must complete the verification on the DNS server.
     * The certificate authority (CA) reviews your certificate application only after you complete the verification of the domain name ownership. After the CA approves your certificate application, the CA issues the certificate. If a certificate is issued, you can call this operation to obtain the CA certificate and private key of the certificate.
     *
     * @param request - DescribeCertificateStateRequest
     *
     * @returns DescribeCertificateStateResponse
     *
     * @param DescribeCertificateStateRequest $request
     *
     * @return DescribeCertificateStateResponse
     */
    public function describeCertificateState($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCertificateStateWithOptions($request, $runtime);
    }

    /**
     * Queries the number of third-party cloud resources on which you deployed certificates by using a multi-cloud deployment task.
     *
     * @param request - DescribeCloudResourceStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCloudResourceStatusResponse
     *
     * @param DescribeCloudResourceStatusRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeCloudResourceStatusResponse
     */
    public function describeCloudResourceStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->secretId) {
            @$query['SecretId'] = $request->secretId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries the number of third-party cloud resources on which you deployed certificates by using a multi-cloud deployment task.
     *
     * @param request - DescribeCloudResourceStatusRequest
     *
     * @returns DescribeCloudResourceStatusResponse
     *
     * @param DescribeCloudResourceStatusRequest $request
     *
     * @return DescribeCloudResourceStatusResponse
     */
    public function describeCloudResourceStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCloudResourceStatusWithOptions($request, $runtime);
    }

    /**
     * Queries the details of a deployment task. You can call the CreateDeploymentJob operation to create a deployment task and obtain the ID of the task.
     *
     * @param request - DescribeDeploymentJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDeploymentJobResponse
     *
     * @param DescribeDeploymentJobRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeDeploymentJobResponse
     */
    public function describeDeploymentJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries the details of a deployment task. You can call the CreateDeploymentJob operation to create a deployment task and obtain the ID of the task.
     *
     * @param request - DescribeDeploymentJobRequest
     *
     * @returns DescribeDeploymentJobResponse
     *
     * @param DescribeDeploymentJobRequest $request
     *
     * @return DescribeDeploymentJobResponse
     */
    public function describeDeploymentJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDeploymentJobWithOptions($request, $runtime);
    }

    /**
     * Queries the number of worker tasks in a deployment task.
     *
     * @param request - DescribeDeploymentJobStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDeploymentJobStatusResponse
     *
     * @param DescribeDeploymentJobStatusRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeDeploymentJobStatusResponse
     */
    public function describeDeploymentJobStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries the number of worker tasks in a deployment task.
     *
     * @param request - DescribeDeploymentJobStatusRequest
     *
     * @returns DescribeDeploymentJobStatusResponse
     *
     * @param DescribeDeploymentJobStatusRequest $request
     *
     * @return DescribeDeploymentJobStatusResponse
     */
    public function describeDeploymentJobStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDeploymentJobStatusWithOptions($request, $runtime);
    }

    /**
     * Queries the quota for domain validated (DV) certificates that you purchase and the quota usage.
     *
     * @param request - DescribePackageStateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribePackageStateResponse
     *
     * @param DescribePackageStateRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribePackageStateResponse
     */
    public function describePackageStateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->productCode) {
            @$query['ProductCode'] = $request->productCode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries the quota for domain validated (DV) certificates that you purchase and the quota usage.
     *
     * @param request - DescribePackageStateRequest
     *
     * @returns DescribePackageStateResponse
     *
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
     * 查询仓库证书详情。
     *
     * @param request - DescribeWarehouseCertRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeWarehouseCertResponse
     *
     * @param DescribeWarehouseCertRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeWarehouseCertResponse
     */
    public function describeWarehouseCertWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->certIdentifier) {
            @$query['CertIdentifier'] = $request->certIdentifier;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeWarehouseCert',
            'version' => '2020-04-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeWarehouseCertResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询仓库证书详情。
     *
     * @param request - DescribeWarehouseCertRequest
     *
     * @returns DescribeWarehouseCertResponse
     *
     * @param DescribeWarehouseCertRequest $request
     *
     * @return DescribeWarehouseCertResponse
     */
    public function describeWarehouseCert($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeWarehouseCertWithOptions($request, $runtime);
    }

    /**
     * Encrypts a certificate in a certificate repository.
     *
     * @remarks
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - EncryptRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EncryptResponse
     *
     * @param EncryptRequest $request
     * @param RuntimeOptions $runtime
     *
     * @return EncryptResponse
     */
    public function encryptWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->algorithm) {
            @$query['Algorithm'] = $request->algorithm;
        }

        if (null !== $request->certIdentifier) {
            @$query['CertIdentifier'] = $request->certIdentifier;
        }

        if (null !== $request->customIdentifier) {
            @$query['CustomIdentifier'] = $request->customIdentifier;
        }

        if (null !== $request->messageType) {
            @$query['MessageType'] = $request->messageType;
        }

        if (null !== $request->plaintext) {
            @$query['Plaintext'] = $request->plaintext;
        }

        if (null !== $request->warehouseId) {
            @$query['WarehouseId'] = $request->warehouseId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Encrypts a certificate in a certificate repository.
     *
     * @remarks
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - EncryptRequest
     *
     * @returns EncryptResponse
     *
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
     * 统计资产数量.
     *
     * @param request - GetAssetCountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAssetCountResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return GetAssetCountResponse
     */
    public function getAssetCountWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'GetAssetCount',
            'version' => '2020-04-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAssetCountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 统计资产数量.
     *
     * @returns GetAssetCountResponse
     *
     * @return GetAssetCountResponse
     */
    public function getAssetCount()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAssetCountWithOptions($runtime);
    }

    /**
     * Queries the API call quota for certificate application repositories. When you call API operations for signature generation, signature verification, data encryption, and data decryption, your API call quota for certificate application repositories is consumed. If your API call quota is exhausted, you can no longer call specific certificate application repository-related operations. You can call this operation to query the API call quota for certificate application repositories.
     *
     * @remarks
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - GetCertWarehouseQuotaRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetCertWarehouseQuotaResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return GetCertWarehouseQuotaResponse
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
     * Queries the API call quota for certificate application repositories. When you call API operations for signature generation, signature verification, data encryption, and data decryption, your API call quota for certificate application repositories is consumed. If your API call quota is exhausted, you can no longer call specific certificate application repository-related operations. You can call this operation to query the API call quota for certificate application repositories.
     *
     * @remarks
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @returns GetCertWarehouseQuotaResponse
     *
     * @return GetCertWarehouseQuotaResponse
     */
    public function getCertWarehouseQuota()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCertWarehouseQuotaWithOptions($runtime);
    }

    /**
     * 查询证书详情.
     *
     * @param request - GetCertificateDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetCertificateDetailResponse
     *
     * @param GetCertificateDetailRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetCertificateDetailResponse
     */
    public function getCertificateDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->certificateId) {
            @$query['CertificateId'] = $request->certificateId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetCertificateDetail',
            'version' => '2020-04-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetCertificateDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询证书详情.
     *
     * @param request - GetCertificateDetailRequest
     *
     * @returns GetCertificateDetailResponse
     *
     * @param GetCertificateDetailRequest $request
     *
     * @return GetCertificateDetailResponse
     */
    public function getCertificateDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCertificateDetailWithOptions($request, $runtime);
    }

    /**
     * Obtains the content of a certificate signing request (CSR) file.
     *
     * @param request - GetCsrDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetCsrDetailResponse
     *
     * @param GetCsrDetailRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetCsrDetailResponse
     */
    public function getCsrDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->csrId) {
            @$query['CsrId'] = $request->csrId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Obtains the content of a certificate signing request (CSR) file.
     *
     * @param request - GetCsrDetailRequest
     *
     * @returns GetCsrDetailResponse
     *
     * @param GetCsrDetailRequest $request
     *
     * @return GetCsrDetailResponse
     */
    public function getCsrDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCsrDetailWithOptions($request, $runtime);
    }

    /**
     * 查询实例详情.
     *
     * @param request - GetInstanceDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetInstanceDetailResponse
     *
     * @param GetInstanceDetailRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetInstanceDetailResponse
     */
    public function getInstanceDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetInstanceDetail',
            'version' => '2020-04-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetInstanceDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询实例详情.
     *
     * @param request - GetInstanceDetailRequest
     *
     * @returns GetInstanceDetailResponse
     *
     * @param GetInstanceDetailRequest $request
     *
     * @return GetInstanceDetailResponse
     */
    public function getInstanceDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInstanceDetailWithOptions($request, $runtime);
    }

    /**
     * 实例统计
     *
     * @param request - GetInstanceSummaryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetInstanceSummaryResponse
     *
     * @param GetInstanceSummaryRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetInstanceSummaryResponse
     */
    public function getInstanceSummaryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceType) {
            @$query['InstanceType'] = $request->instanceType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetInstanceSummary',
            'version' => '2020-04-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetInstanceSummaryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 实例统计
     *
     * @param request - GetInstanceSummaryRequest
     *
     * @returns GetInstanceSummaryResponse
     *
     * @param GetInstanceSummaryRequest $request
     *
     * @return GetInstanceSummaryResponse
     */
    public function getInstanceSummary($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInstanceSummaryWithOptions($request, $runtime);
    }

    /**
     * 统计风险资产数量.
     *
     * @param request - GetRiskCountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetRiskCountResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return GetRiskCountResponse
     */
    public function getRiskCountWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'GetRiskCount',
            'version' => '2020-04-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetRiskCountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 统计风险资产数量.
     *
     * @returns GetRiskCountResponse
     *
     * @return GetRiskCountResponse
     */
    public function getRiskCount()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRiskCountWithOptions($runtime);
    }

    /**
     * 查询异步任务状态
     *
     * @param request - GetTaskAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTaskAttributeResponse
     *
     * @param GetTaskAttributeRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetTaskAttributeResponse
     */
    public function getTaskAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        if (null !== $request->taskType) {
            @$query['TaskType'] = $request->taskType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetTaskAttribute',
            'version' => '2020-04-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetTaskAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询异步任务状态
     *
     * @param request - GetTaskAttributeRequest
     *
     * @returns GetTaskAttributeResponse
     *
     * @param GetTaskAttributeRequest $request
     *
     * @return GetTaskAttributeResponse
     */
    public function getTaskAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTaskAttributeWithOptions($request, $runtime);
    }

    /**
     * Queries certificate details, including the basic information and public and private key content. You can call this operation to download the certificate and private key.
     *
     * @remarks
     * You can call this operation up to 100 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - GetUserCertificateDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetUserCertificateDetailResponse
     *
     * @param GetUserCertificateDetailRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetUserCertificateDetailResponse
     */
    public function getUserCertificateDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->certFilter) {
            @$query['CertFilter'] = $request->certFilter;
        }

        if (null !== $request->certId) {
            @$query['CertId'] = $request->certId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries certificate details, including the basic information and public and private key content. You can call this operation to download the certificate and private key.
     *
     * @remarks
     * You can call this operation up to 100 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - GetUserCertificateDetailRequest
     *
     * @returns GetUserCertificateDetailResponse
     *
     * @param GetUserCertificateDetailRequest $request
     *
     * @return GetUserCertificateDetailResponse
     */
    public function getUserCertificateDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUserCertificateDetailWithOptions($request, $runtime);
    }

    /**
     * 查询云产品资源统计列表.
     *
     * @param request - ListAssetCountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAssetCountResponse
     *
     * @param ListAssetCountRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListAssetCountResponse
     */
    public function listAssetCountWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->endDate) {
            @$query['EndDate'] = $request->endDate;
        }

        if (null !== $request->showSize) {
            @$query['ShowSize'] = $request->showSize;
        }

        if (null !== $request->startDate) {
            @$query['StartDate'] = $request->startDate;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAssetCount',
            'version' => '2020-04-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAssetCountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询云产品资源统计列表.
     *
     * @param request - ListAssetCountRequest
     *
     * @returns ListAssetCountResponse
     *
     * @param ListAssetCountRequest $request
     *
     * @return ListAssetCountResponse
     */
    public function listAssetCount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAssetCountWithOptions($request, $runtime);
    }

    /**
     * Queries the certificates in a certificate repository.
     *
     * @remarks
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
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
        if (null !== $request->certType) {
            @$query['CertType'] = $request->certType;
        }

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

        if (null !== $request->sourceType) {
            @$query['SourceType'] = $request->sourceType;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->warehouseId) {
            @$query['WarehouseId'] = $request->warehouseId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries the certificates in a certificate repository.
     *
     * @remarks
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
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
     * Queries certificate repositories.
     *
     * @remarks
     * You can call the ListCertWarehouse operation to query certificate repositories.
     * ### Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - ListCertWarehouseRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListCertWarehouseResponse
     *
     * @param ListCertWarehouseRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListCertWarehouseResponse
     */
    public function listCertWarehouseWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->showSize) {
            @$query['ShowSize'] = $request->showSize;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries certificate repositories.
     *
     * @remarks
     * You can call the ListCertWarehouse operation to query certificate repositories.
     * ### Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - ListCertWarehouseRequest
     *
     * @returns ListCertWarehouseResponse
     *
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
     * 获取证书列表.
     *
     * @param request - ListCertificatesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListCertificatesResponse
     *
     * @param ListCertificatesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListCertificatesResponse
     */
    public function listCertificatesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->certificateSource) {
            @$query['CertificateSource'] = $request->certificateSource;
        }

        if (null !== $request->certificateStatus) {
            @$query['CertificateStatus'] = $request->certificateStatus;
        }

        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->keyword) {
            @$query['Keyword'] = $request->keyword;
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
            'action' => 'ListCertificates',
            'version' => '2020-04-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListCertificatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取证书列表.
     *
     * @param request - ListCertificatesRequest
     *
     * @returns ListCertificatesResponse
     *
     * @param ListCertificatesRequest $request
     *
     * @return ListCertificatesResponse
     */
    public function listCertificates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCertificatesWithOptions($request, $runtime);
    }

    /**
     * Queries a list of AccessKey pairs for multi-cloud deployment.
     *
     * @param request - ListCloudAccessRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListCloudAccessResponse
     *
     * @param ListCloudAccessRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListCloudAccessResponse
     */
    public function listCloudAccessWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cloudName) {
            @$query['CloudName'] = $request->cloudName;
        }

        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->secretId) {
            @$query['SecretId'] = $request->secretId;
        }

        if (null !== $request->showSize) {
            @$query['ShowSize'] = $request->showSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries a list of AccessKey pairs for multi-cloud deployment.
     *
     * @param request - ListCloudAccessRequest
     *
     * @returns ListCloudAccessResponse
     *
     * @param ListCloudAccessRequest $request
     *
     * @return ListCloudAccessResponse
     */
    public function listCloudAccess($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCloudAccessWithOptions($request, $runtime);
    }

    /**
     * Queries the certificate resources of a cloud service provider and cloud services.
     *
     * @param tmpReq - ListCloudResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListCloudResourcesResponse
     *
     * @param ListCloudResourcesRequest $tmpReq
     * @param RuntimeOptions            $runtime
     *
     * @return ListCloudResourcesResponse
     */
    public function listCloudResourcesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListCloudResourcesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->certIds) {
            $request->certIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->certIds, 'CertIds', 'json');
        }

        $query = [];
        if (null !== $request->certIdsShrink) {
            @$query['CertIds'] = $request->certIdsShrink;
        }

        if (null !== $request->cloudName) {
            @$query['CloudName'] = $request->cloudName;
        }

        if (null !== $request->cloudProduct) {
            @$query['CloudProduct'] = $request->cloudProduct;
        }

        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->keyword) {
            @$query['Keyword'] = $request->keyword;
        }

        if (null !== $request->secretId) {
            @$query['SecretId'] = $request->secretId;
        }

        if (null !== $request->showSize) {
            @$query['ShowSize'] = $request->showSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries the certificate resources of a cloud service provider and cloud services.
     *
     * @param request - ListCloudResourcesRequest
     *
     * @returns ListCloudResourcesResponse
     *
     * @param ListCloudResourcesRequest $request
     *
     * @return ListCloudResourcesResponse
     */
    public function listCloudResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCloudResourcesWithOptions($request, $runtime);
    }

    /**
     * Queries a list of contacts.
     *
     * @param request - ListContactRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListContactResponse
     *
     * @param ListContactRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListContactResponse
     */
    public function listContactWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->keyword) {
            @$query['Keyword'] = $request->keyword;
        }

        if (null !== $request->showSize) {
            @$query['ShowSize'] = $request->showSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries a list of contacts.
     *
     * @param request - ListContactRequest
     *
     * @returns ListContactResponse
     *
     * @param ListContactRequest $request
     *
     * @return ListContactResponse
     */
    public function listContact($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listContactWithOptions($request, $runtime);
    }

    /**
     * Queries the details of Certificate Signing Requests (CSRs).
     *
     * @param request - ListCsrRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListCsrResponse
     *
     * @param ListCsrRequest $request
     * @param RuntimeOptions $runtime
     *
     * @return ListCsrResponse
     */
    public function listCsrWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->algorithm) {
            @$query['Algorithm'] = $request->algorithm;
        }

        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
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
     * Queries the details of Certificate Signing Requests (CSRs).
     *
     * @param request - ListCsrRequest
     *
     * @returns ListCsrResponse
     *
     * @param ListCsrRequest $request
     *
     * @return ListCsrResponse
     */
    public function listCsr($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCsrWithOptions($request, $runtime);
    }

    /**
     * Queries a list of deployment tasks that are created.
     *
     * @param request - ListDeploymentJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDeploymentJobResponse
     *
     * @param ListDeploymentJobRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListDeploymentJobResponse
     */
    public function listDeploymentJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->jobType) {
            @$query['JobType'] = $request->jobType;
        }

        if (null !== $request->showSize) {
            @$query['ShowSize'] = $request->showSize;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries a list of deployment tasks that are created.
     *
     * @param request - ListDeploymentJobRequest
     *
     * @returns ListDeploymentJobResponse
     *
     * @param ListDeploymentJobRequest $request
     *
     * @return ListDeploymentJobResponse
     */
    public function listDeploymentJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDeploymentJobWithOptions($request, $runtime);
    }

    /**
     * Queries the basic information about a deployment task. After you create a deployment task, you can call this operation to obtain the basic information about the deployment task, including the instance ID, type, and name of the certificate.
     *
     * @param request - ListDeploymentJobCertRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDeploymentJobCertResponse
     *
     * @param ListDeploymentJobCertRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListDeploymentJobCertResponse
     */
    public function listDeploymentJobCertWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries the basic information about a deployment task. After you create a deployment task, you can call this operation to obtain the basic information about the deployment task, including the instance ID, type, and name of the certificate.
     *
     * @param request - ListDeploymentJobCertRequest
     *
     * @returns ListDeploymentJobCertResponse
     *
     * @param ListDeploymentJobCertRequest $request
     *
     * @return ListDeploymentJobCertResponse
     */
    public function listDeploymentJobCert($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDeploymentJobCertWithOptions($request, $runtime);
    }

    /**
     * Queries the cloud resources of cloud services in a deployment task.
     *
     * @param request - ListDeploymentJobResourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDeploymentJobResourceResponse
     *
     * @param ListDeploymentJobResourceRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ListDeploymentJobResourceResponse
     */
    public function listDeploymentJobResourceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries the cloud resources of cloud services in a deployment task.
     *
     * @param request - ListDeploymentJobResourceRequest
     *
     * @returns ListDeploymentJobResourceResponse
     *
     * @param ListDeploymentJobResourceRequest $request
     *
     * @return ListDeploymentJobResourceResponse
     */
    public function listDeploymentJobResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDeploymentJobResourceWithOptions($request, $runtime);
    }

    /**
     * 获取实例列表.
     *
     * @param request - ListInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListInstancesResponse
     *
     * @param ListInstancesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListInstancesResponse
     */
    public function listInstancesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->brand) {
            @$query['Brand'] = $request->brand;
        }

        if (null !== $request->certificateStatus) {
            @$query['CertificateStatus'] = $request->certificateStatus;
        }

        if (null !== $request->certificateType) {
            @$query['CertificateType'] = $request->certificateType;
        }

        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->instanceType) {
            @$query['InstanceType'] = $request->instanceType;
        }

        if (null !== $request->keyword) {
            @$query['Keyword'] = $request->keyword;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->showSize) {
            @$query['ShowSize'] = $request->showSize;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListInstances',
            'version' => '2020-04-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取实例列表.
     *
     * @param request - ListInstancesRequest
     *
     * @returns ListInstancesResponse
     *
     * @param ListInstancesRequest $request
     *
     * @return ListInstancesResponse
     */
    public function listInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listInstancesWithOptions($request, $runtime);
    }

    /**
     * Queries the certificates or certificate orders of users.
     *
     * @remarks
     * You can call the ListUserCertificateOrder operation to query the certificates or certificate orders of users. If you set OrderType to CERT or UPLOAD, certificates are returned. If you set OrderType to CPACK or BUY, certificate orders are returned.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - ListUserCertificateOrderRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListUserCertificateOrderResponse
     *
     * @param ListUserCertificateOrderRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListUserCertificateOrderResponse
     */
    public function listUserCertificateOrderWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->keyword) {
            @$query['Keyword'] = $request->keyword;
        }

        if (null !== $request->orderType) {
            @$query['OrderType'] = $request->orderType;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->showSize) {
            @$query['ShowSize'] = $request->showSize;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries the certificates or certificate orders of users.
     *
     * @remarks
     * You can call the ListUserCertificateOrder operation to query the certificates or certificate orders of users. If you set OrderType to CERT or UPLOAD, certificates are returned. If you set OrderType to CPACK or BUY, certificate orders are returned.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - ListUserCertificateOrderRequest
     *
     * @returns ListUserCertificateOrderResponse
     *
     * @param ListUserCertificateOrderRequest $request
     *
     * @return ListUserCertificateOrderResponse
     */
    public function listUserCertificateOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUserCertificateOrderWithOptions($request, $runtime);
    }

    /**
     * 查询证书仓库.
     *
     * @param tmpReq - ListWarehouseRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListWarehouseResponse
     *
     * @param ListWarehouseRequest $tmpReq
     * @param RuntimeOptions       $runtime
     *
     * @return ListWarehouseResponse
     */
    public function listWarehouseWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListWarehouseShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->warehouseInstanceIds) {
            $request->warehouseInstanceIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->warehouseInstanceIds, 'WarehouseInstanceIds', 'json');
        }

        if (null !== $tmpReq->warehouseTypes) {
            $request->warehouseTypesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->warehouseTypes, 'WarehouseTypes', 'json');
        }

        $query = [];
        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->warehouseInstanceIdsShrink) {
            @$query['WarehouseInstanceIds'] = $request->warehouseInstanceIdsShrink;
        }

        if (null !== $request->warehouseTypesShrink) {
            @$query['WarehouseTypes'] = $request->warehouseTypesShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListWarehouse',
            'version' => '2020-04-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListWarehouseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询证书仓库.
     *
     * @param request - ListWarehouseRequest
     *
     * @returns ListWarehouseResponse
     *
     * @param ListWarehouseRequest $request
     *
     * @return ListWarehouseResponse
     */
    public function listWarehouse($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listWarehouseWithOptions($request, $runtime);
    }

    /**
     * Queries the details about the worker tasks of a deployment task. Alibaba Cloud allows you to deploy multiple certificates at a time. Therefore, a deployment task may include multiple worker tasks in multiple cloud services. A worker task refers to a task that deploys a certificate to a cloud resource in a cloud service.
     *
     * @param request - ListWorkerResourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListWorkerResourceResponse
     *
     * @param ListWorkerResourceRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListWorkerResourceResponse
     */
    public function listWorkerResourceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cloudProduct) {
            @$query['CloudProduct'] = $request->cloudProduct;
        }

        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        if (null !== $request->showSize) {
            @$query['ShowSize'] = $request->showSize;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Queries the details about the worker tasks of a deployment task. Alibaba Cloud allows you to deploy multiple certificates at a time. Therefore, a deployment task may include multiple worker tasks in multiple cloud services. A worker task refers to a task that deploys a certificate to a cloud resource in a cloud service.
     *
     * @param request - ListWorkerResourceRequest
     *
     * @returns ListWorkerResourceResponse
     *
     * @param ListWorkerResourceRequest $request
     *
     * @return ListWorkerResourceResponse
     */
    public function listWorkerResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listWorkerResourceWithOptions($request, $runtime);
    }

    /**
     * Changes the resource group to which a certificate or certificate order belongs.
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
     * Changes the resource group to which a certificate or certificate order belongs.
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
     * 申请证书.
     *
     * @param request - RefundInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RefundInstanceResponse
     *
     * @param RefundInstanceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return RefundInstanceResponse
     */
    public function refundInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RefundInstance',
            'version' => '2020-04-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RefundInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 申请证书.
     *
     * @param request - RefundInstanceRequest
     *
     * @returns RefundInstanceResponse
     *
     * @param RefundInstanceRequest $request
     *
     * @return RefundInstanceResponse
     */
    public function refundInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->refundInstanceWithOptions($request, $runtime);
    }

    /**
     * Submits a renewal application for an issued certificate.
     *
     * @remarks
     * You can call the RenewCertificateOrderForPackageRequest operation to submit a renewal application for a certificate only when the order of the certificate is in the expiring state. After the renewal is complete, a new certificate order whose status is pending application is generated. You must submit a certificate application for the new certificate order and install the new certificate after the new certificate is issued.
     * >  You can call the [DescribeCertificateState](https://help.aliyun.com/document_detail/164111.html) operation to query the status of a certificate application order. If the value of the **Type** response parameter is **certificate**, the certificate is issued.
     *
     * @param request - RenewCertificateOrderForPackageRequestRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RenewCertificateOrderForPackageRequestResponse
     *
     * @param RenewCertificateOrderForPackageRequestRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return RenewCertificateOrderForPackageRequestResponse
     */
    public function renewCertificateOrderForPackageRequestWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->csr) {
            @$query['Csr'] = $request->csr;
        }

        if (null !== $request->orderId) {
            @$query['OrderId'] = $request->orderId;
        }

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Submits a renewal application for an issued certificate.
     *
     * @remarks
     * You can call the RenewCertificateOrderForPackageRequest operation to submit a renewal application for a certificate only when the order of the certificate is in the expiring state. After the renewal is complete, a new certificate order whose status is pending application is generated. You must submit a certificate application for the new certificate order and install the new certificate after the new certificate is issued.
     * >  You can call the [DescribeCertificateState](https://help.aliyun.com/document_detail/164111.html) operation to query the status of a certificate application order. If the value of the **Type** response parameter is **certificate**, the certificate is issued.
     *
     * @param request - RenewCertificateOrderForPackageRequestRequest
     *
     * @returns RenewCertificateOrderForPackageRequestResponse
     *
     * @param RenewCertificateOrderForPackageRequestRequest $request
     *
     * @return RenewCertificateOrderForPackageRequestResponse
     */
    public function renewCertificateOrderForPackageRequest($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->renewCertificateOrderForPackageRequestWithOptions($request, $runtime);
    }

    /**
     * 吊销证书.
     *
     * @param request - RevokeCertificateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RevokeCertificateResponse
     *
     * @param RevokeCertificateRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return RevokeCertificateResponse
     */
    public function revokeCertificateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RevokeCertificate',
            'version' => '2020-04-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RevokeCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 吊销证书.
     *
     * @param request - RevokeCertificateRequest
     *
     * @returns RevokeCertificateResponse
     *
     * @param RevokeCertificateRequest $request
     *
     * @return RevokeCertificateResponse
     */
    public function revokeCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->revokeCertificateWithOptions($request, $runtime);
    }

    /**
     * Revokes a client certificate or a server certificate in a certificate repository.
     *
     * @remarks
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - RevokeWHClientCertificateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RevokeWHClientCertificateResponse
     *
     * @param RevokeWHClientCertificateRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return RevokeWHClientCertificateResponse
     */
    public function revokeWHClientCertificateWithOptions($request, $runtime)
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
            'action' => 'RevokeWHClientCertificate',
            'version' => '2020-04-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RevokeWHClientCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Revokes a client certificate or a server certificate in a certificate repository.
     *
     * @remarks
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - RevokeWHClientCertificateRequest
     *
     * @returns RevokeWHClientCertificateResponse
     *
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
     * Signs a private certificate in a certificate application repository.
     *
     * @remarks
     * You can call the Sign operation to sign a private certificate in a certificate application repository.
     * ### Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - SignRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SignResponse
     *
     * @param SignRequest    $request
     * @param RuntimeOptions $runtime
     *
     * @return SignResponse
     */
    public function signWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->certIdentifier) {
            @$query['CertIdentifier'] = $request->certIdentifier;
        }

        if (null !== $request->customIdentifier) {
            @$query['CustomIdentifier'] = $request->customIdentifier;
        }

        if (null !== $request->message) {
            @$query['Message'] = $request->message;
        }

        if (null !== $request->messageType) {
            @$query['MessageType'] = $request->messageType;
        }

        if (null !== $request->signingAlgorithm) {
            @$query['SigningAlgorithm'] = $request->signingAlgorithm;
        }

        if (null !== $request->warehouseId) {
            @$query['WarehouseId'] = $request->warehouseId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Signs a private certificate in a certificate application repository.
     *
     * @remarks
     * You can call the Sign operation to sign a private certificate in a certificate application repository.
     * ### Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - SignRequest
     *
     * @returns SignResponse
     *
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
     * Uploads or updates the private key for a Certificate Signing Request (CSR). If you did not upload the required priviate when you uploaded a CSR, you can call this operation to upload or update the private key.
     *
     * @param request - UpdateCsrRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateCsrResponse
     *
     * @param UpdateCsrRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return UpdateCsrResponse
     */
    public function updateCsrWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->csrId) {
            @$query['CsrId'] = $request->csrId;
        }

        if (null !== $request->key) {
            @$query['Key'] = $request->key;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Uploads or updates the private key for a Certificate Signing Request (CSR). If you did not upload the required priviate when you uploaded a CSR, you can call this operation to upload or update the private key.
     *
     * @param request - UpdateCsrRequest
     *
     * @returns UpdateCsrResponse
     *
     * @param UpdateCsrRequest $request
     *
     * @return UpdateCsrResponse
     */
    public function updateCsr($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCsrWithOptions($request, $runtime);
    }

    /**
     * Updates a deployment task.
     *
     * @param request - UpdateDeploymentJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateDeploymentJobResponse
     *
     * @param UpdateDeploymentJobRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateDeploymentJobResponse
     */
    public function updateDeploymentJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->certIds) {
            @$query['CertIds'] = $request->certIds;
        }

        if (null !== $request->contactIds) {
            @$query['ContactIds'] = $request->contactIds;
        }

        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->resourceIds) {
            @$query['ResourceIds'] = $request->resourceIds;
        }

        if (null !== $request->scheduleTime) {
            @$query['ScheduleTime'] = $request->scheduleTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Updates a deployment task.
     *
     * @param request - UpdateDeploymentJobRequest
     *
     * @returns UpdateDeploymentJobResponse
     *
     * @param UpdateDeploymentJobRequest $request
     *
     * @return UpdateDeploymentJobResponse
     */
    public function updateDeploymentJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDeploymentJobWithOptions($request, $runtime);
    }

    /**
     * Updates the status of a deployment task.
     *
     * @param request - UpdateDeploymentJobStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateDeploymentJobStatusResponse
     *
     * @param UpdateDeploymentJobStatusRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return UpdateDeploymentJobStatusResponse
     */
    public function updateDeploymentJobStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Updates the status of a deployment task.
     *
     * @param request - UpdateDeploymentJobStatusRequest
     *
     * @returns UpdateDeploymentJobStatusResponse
     *
     * @param UpdateDeploymentJobStatusRequest $request
     *
     * @return UpdateDeploymentJobStatusResponse
     */
    public function updateDeploymentJobStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDeploymentJobStatusWithOptions($request, $runtime);
    }

    /**
     * 更新实例.
     *
     * @param request - UpdateInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateInstanceResponse
     *
     * @param UpdateInstanceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateInstanceResponse
     */
    public function updateInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->autoReissue) {
            @$query['AutoReissue'] = $request->autoReissue;
        }

        if (null !== $request->certificateName) {
            @$query['CertificateName'] = $request->certificateName;
        }

        if (null !== $request->city) {
            @$query['City'] = $request->city;
        }

        if (null !== $request->companyId) {
            @$query['CompanyId'] = $request->companyId;
        }

        if (null !== $request->contactIdList) {
            @$query['ContactIdList'] = $request->contactIdList;
        }

        if (null !== $request->countryCode) {
            @$query['CountryCode'] = $request->countryCode;
        }

        if (null !== $request->csr) {
            @$query['Csr'] = $request->csr;
        }

        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->generateCsrMethod) {
            @$query['GenerateCsrMethod'] = $request->generateCsrMethod;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->keyAlgorithm) {
            @$query['KeyAlgorithm'] = $request->keyAlgorithm;
        }

        if (null !== $request->province) {
            @$query['Province'] = $request->province;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        if (null !== $request->validationMethod) {
            @$query['ValidationMethod'] = $request->validationMethod;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateInstance',
            'version' => '2020-04-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新实例.
     *
     * @param request - UpdateInstanceRequest
     *
     * @returns UpdateInstanceResponse
     *
     * @param UpdateInstanceRequest $request
     *
     * @return UpdateInstanceResponse
     */
    public function updateInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateInstanceWithOptions($request, $runtime);
    }

    /**
     * Rolls back or executes a worker task in a deployment task.
     *
     * @param request - UpdateWorkerResourceStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateWorkerResourceStatusResponse
     *
     * @param UpdateWorkerResourceStatusRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return UpdateWorkerResourceStatusResponse
     */
    public function updateWorkerResourceStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->workerId) {
            @$query['WorkerId'] = $request->workerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Rolls back or executes a worker task in a deployment task.
     *
     * @param request - UpdateWorkerResourceStatusRequest
     *
     * @returns UpdateWorkerResourceStatusResponse
     *
     * @param UpdateWorkerResourceStatusRequest $request
     *
     * @return UpdateWorkerResourceStatusResponse
     */
    public function updateWorkerResourceStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateWorkerResourceStatusWithOptions($request, $runtime);
    }

    /**
     * Uploads an existing Certificate Signing Request (CSR). You can use the CSR when you upload a certificate. You can also manage the uploaded CSRs in a centralized manner.
     *
     * @param request - UploadCsrRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UploadCsrResponse
     *
     * @param UploadCsrRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return UploadCsrResponse
     */
    public function uploadCsrWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->csr) {
            @$query['Csr'] = $request->csr;
        }

        if (null !== $request->key) {
            @$query['Key'] = $request->key;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Uploads an existing Certificate Signing Request (CSR). You can use the CSR when you upload a certificate. You can also manage the uploaded CSRs in a centralized manner.
     *
     * @param request - UploadCsrRequest
     *
     * @returns UploadCsrResponse
     *
     * @param UploadCsrRequest $request
     *
     * @return UploadCsrResponse
     */
    public function uploadCsr($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uploadCsrWithOptions($request, $runtime);
    }

    /**
     * The private key of the certificate.
     *
     * @remarks
     * You can call this operation to upload a private certificate to a certificate repository.
     * ## [](#qps-)Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - UploadPCACertRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UploadPCACertResponse
     *
     * @param UploadPCACertRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return UploadPCACertResponse
     */
    public function uploadPCACertWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cert) {
            @$query['Cert'] = $request->cert;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->privateKey) {
            @$query['PrivateKey'] = $request->privateKey;
        }

        if (null !== $request->warehouseId) {
            @$query['WarehouseId'] = $request->warehouseId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UploadPCACert',
            'version' => '2020-04-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UploadPCACertResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The private key of the certificate.
     *
     * @remarks
     * You can call this operation to upload a private certificate to a certificate repository.
     * ## [](#qps-)Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - UploadPCACertRequest
     *
     * @returns UploadPCACertResponse
     *
     * @param UploadPCACertRequest $request
     *
     * @return UploadPCACertResponse
     */
    public function uploadPCACert($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uploadPCACertWithOptions($request, $runtime);
    }

    /**
     * Uploads a certificate.
     *
     * @remarks
     * You can call this operation up to 100 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - UploadUserCertificateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UploadUserCertificateResponse
     *
     * @param UploadUserCertificateRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return UploadUserCertificateResponse
     */
    public function uploadUserCertificateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cert) {
            @$query['Cert'] = $request->cert;
        }

        if (null !== $request->encryptCert) {
            @$query['EncryptCert'] = $request->encryptCert;
        }

        if (null !== $request->encryptPrivateKey) {
            @$query['EncryptPrivateKey'] = $request->encryptPrivateKey;
        }

        if (null !== $request->key) {
            @$query['Key'] = $request->key;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->signCert) {
            @$query['SignCert'] = $request->signCert;
        }

        if (null !== $request->signPrivateKey) {
            @$query['SignPrivateKey'] = $request->signPrivateKey;
        }

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Uploads a certificate.
     *
     * @remarks
     * You can call this operation up to 100 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - UploadUserCertificateRequest
     *
     * @returns UploadUserCertificateResponse
     *
     * @param UploadUserCertificateRequest $request
     *
     * @return UploadUserCertificateResponse
     */
    public function uploadUserCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uploadUserCertificateWithOptions($request, $runtime);
    }

    /**
     * Verifies the signature of a private certificate in a certificate application repository.
     *
     * @remarks
     * You can call the Verify operation to verify the signature of a private certificate in a certificate application repository.
     * ### Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - VerifyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns VerifyResponse
     *
     * @param VerifyRequest  $request
     * @param RuntimeOptions $runtime
     *
     * @return VerifyResponse
     */
    public function verifyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->certIdentifier) {
            @$query['CertIdentifier'] = $request->certIdentifier;
        }

        if (null !== $request->customIdentifier) {
            @$query['CustomIdentifier'] = $request->customIdentifier;
        }

        if (null !== $request->message) {
            @$query['Message'] = $request->message;
        }

        if (null !== $request->messageType) {
            @$query['MessageType'] = $request->messageType;
        }

        if (null !== $request->signatureValue) {
            @$query['SignatureValue'] = $request->signatureValue;
        }

        if (null !== $request->signingAlgorithm) {
            @$query['SigningAlgorithm'] = $request->signingAlgorithm;
        }

        if (null !== $request->warehouseId) {
            @$query['WarehouseId'] = $request->warehouseId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Verifies the signature of a private certificate in a certificate application repository.
     *
     * @remarks
     * You can call the Verify operation to verify the signature of a private certificate in a certificate application repository.
     * ### Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - VerifyRequest
     *
     * @returns VerifyResponse
     *
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
