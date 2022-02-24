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
use AlibabaCloud\SDK\Cas\V20200407\Models\DeleteCertificateRequestRequest;
use AlibabaCloud\SDK\Cas\V20200407\Models\DeleteCertificateRequestResponse;
use AlibabaCloud\SDK\Cas\V20200407\Models\DescribeCertificateStateRequest;
use AlibabaCloud\SDK\Cas\V20200407\Models\DescribeCertificateStateResponse;
use AlibabaCloud\SDK\Cas\V20200407\Models\DescribePackageStateRequest;
use AlibabaCloud\SDK\Cas\V20200407\Models\DescribePackageStateResponse;
use AlibabaCloud\SDK\Cas\V20200407\Models\ListUserCertificateOrderRequest;
use AlibabaCloud\SDK\Cas\V20200407\Models\ListUserCertificateOrderResponse;
use AlibabaCloud\SDK\Cas\V20200407\Models\RenewCertificateOrderForPackageRequestRequest;
use AlibabaCloud\SDK\Cas\V20200407\Models\RenewCertificateOrderForPackageRequestResponse;
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
     * @param CancelCertificateForPackageRequestRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return CancelCertificateForPackageRequestResponse
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
     * @param CancelOrderRequestRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CancelOrderRequestResponse
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
     * @param CreateCertificateForPackageRequestRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return CreateCertificateForPackageRequestResponse
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
     * @param CreateCertificateRequestRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateCertificateRequestResponse
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
     * @param CreateCertificateWithCsrRequestRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return CreateCertificateWithCsrRequestResponse
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
     * @param DeleteCertificateRequestRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DeleteCertificateRequestResponse
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
     * @param DescribeCertificateStateRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeCertificateStateResponse
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
     * @param ListUserCertificateOrderRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListUserCertificateOrderResponse
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
     * @param RenewCertificateOrderForPackageRequestRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return RenewCertificateOrderForPackageRequestResponse
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
     * @param RenewCertificateOrderForPackageRequestRequest $request
     *
     * @return RenewCertificateOrderForPackageRequestResponse
     */
    public function renewCertificateOrderForPackageRequest($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->renewCertificateOrderForPackageRequestWithOptions($request, $runtime);
    }
}
