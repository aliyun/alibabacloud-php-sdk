<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200619;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Cas\V20200619\Models\CreateSSLCertificateRequest;
use AlibabaCloud\SDK\Cas\V20200619\Models\CreateSSLCertificateResponse;
use AlibabaCloud\SDK\Cas\V20200619\Models\CreateSSLCertificateWithNameRequest;
use AlibabaCloud\SDK\Cas\V20200619\Models\CreateSSLCertificateWithNameResponse;
use AlibabaCloud\SDK\Cas\V20200619\Models\DeleteSSLCertificateRequest;
use AlibabaCloud\SDK\Cas\V20200619\Models\DeleteSSLCertificateResponse;
use AlibabaCloud\SDK\Cas\V20200619\Models\DescribeSSLCertificateCountRequest;
use AlibabaCloud\SDK\Cas\V20200619\Models\DescribeSSLCertificateCountResponse;
use AlibabaCloud\SDK\Cas\V20200619\Models\DescribeSSLCertificateListRequest;
use AlibabaCloud\SDK\Cas\V20200619\Models\DescribeSSLCertificateListResponse;
use AlibabaCloud\SDK\Cas\V20200619\Models\DescribeSSLCertificateMatchDomainListRequest;
use AlibabaCloud\SDK\Cas\V20200619\Models\DescribeSSLCertificateMatchDomainListResponse;
use AlibabaCloud\SDK\Cas\V20200619\Models\DescribeSSLCertificatePrivateKeyRequest;
use AlibabaCloud\SDK\Cas\V20200619\Models\DescribeSSLCertificatePrivateKeyResponse;
use AlibabaCloud\SDK\Cas\V20200619\Models\DescribeSSLCertificatePublicKeyDetailRequest;
use AlibabaCloud\SDK\Cas\V20200619\Models\DescribeSSLCertificatePublicKeyDetailResponse;
use AlibabaCloud\SDK\Cas\V20200619\Models\UploadSSLCertificateRequest;
use AlibabaCloud\SDK\Cas\V20200619\Models\UploadSSLCertificateResponse;
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
     * @param CreateSSLCertificateRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateSSLCertificateResponse
     */
    public function createSSLCertificateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->certificate)) {
            $query['Certificate'] = $request->certificate;
        }
        if (!Utils::isUnset($request->privateKey)) {
            $query['PrivateKey'] = $request->privateKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateSSLCertificate',
            'version'     => '2020-06-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateSSLCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateSSLCertificateRequest $request
     *
     * @return CreateSSLCertificateResponse
     */
    public function createSSLCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSSLCertificateWithOptions($request, $runtime);
    }

    /**
     * @param CreateSSLCertificateWithNameRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return CreateSSLCertificateWithNameResponse
     */
    public function createSSLCertificateWithNameWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->certName)) {
            $query['CertName'] = $request->certName;
        }
        if (!Utils::isUnset($request->certificate)) {
            $query['Certificate'] = $request->certificate;
        }
        if (!Utils::isUnset($request->privateKey)) {
            $query['PrivateKey'] = $request->privateKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateSSLCertificateWithName',
            'version'     => '2020-06-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateSSLCertificateWithNameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateSSLCertificateWithNameRequest $request
     *
     * @return CreateSSLCertificateWithNameResponse
     */
    public function createSSLCertificateWithName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSSLCertificateWithNameWithOptions($request, $runtime);
    }

    /**
     * @param DeleteSSLCertificateRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteSSLCertificateResponse
     */
    public function deleteSSLCertificateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->certIdentifier)) {
            $query['CertIdentifier'] = $request->certIdentifier;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteSSLCertificate',
            'version'     => '2020-06-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteSSLCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteSSLCertificateRequest $request
     *
     * @return DeleteSSLCertificateResponse
     */
    public function deleteSSLCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSSLCertificateWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSSLCertificateCountRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeSSLCertificateCountResponse
     */
    public function describeSSLCertificateCountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->searchValue)) {
            $query['SearchValue'] = $request->searchValue;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSSLCertificateCount',
            'version'     => '2020-06-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSSLCertificateCountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeSSLCertificateCountRequest $request
     *
     * @return DescribeSSLCertificateCountResponse
     */
    public function describeSSLCertificateCount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSSLCertificateCountWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSSLCertificateListRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeSSLCertificateListResponse
     */
    public function describeSSLCertificateListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->searchValue)) {
            $query['SearchValue'] = $request->searchValue;
        }
        if (!Utils::isUnset($request->showSize)) {
            $query['ShowSize'] = $request->showSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSSLCertificateList',
            'version'     => '2020-06-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSSLCertificateListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeSSLCertificateListRequest $request
     *
     * @return DescribeSSLCertificateListResponse
     */
    public function describeSSLCertificateList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSSLCertificateListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSSLCertificateMatchDomainListRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return DescribeSSLCertificateMatchDomainListResponse
     */
    public function describeSSLCertificateMatchDomainListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->algorithm)) {
            $query['Algorithm'] = $request->algorithm;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->matchType)) {
            $query['MatchType'] = $request->matchType;
        }
        if (!Utils::isUnset($request->showSize)) {
            $query['ShowSize'] = $request->showSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSSLCertificateMatchDomainList',
            'version'     => '2020-06-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSSLCertificateMatchDomainListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeSSLCertificateMatchDomainListRequest $request
     *
     * @return DescribeSSLCertificateMatchDomainListResponse
     */
    public function describeSSLCertificateMatchDomainList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSSLCertificateMatchDomainListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSSLCertificatePrivateKeyRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeSSLCertificatePrivateKeyResponse
     */
    public function describeSSLCertificatePrivateKeyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->certIdentifier)) {
            $query['CertIdentifier'] = $request->certIdentifier;
        }
        if (!Utils::isUnset($request->encryptedCode)) {
            $query['EncryptedCode'] = $request->encryptedCode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSSLCertificatePrivateKey',
            'version'     => '2020-06-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSSLCertificatePrivateKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeSSLCertificatePrivateKeyRequest $request
     *
     * @return DescribeSSLCertificatePrivateKeyResponse
     */
    public function describeSSLCertificatePrivateKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSSLCertificatePrivateKeyWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSSLCertificatePublicKeyDetailRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return DescribeSSLCertificatePublicKeyDetailResponse
     */
    public function describeSSLCertificatePublicKeyDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->certIdentifier)) {
            $query['CertIdentifier'] = $request->certIdentifier;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSSLCertificatePublicKeyDetail',
            'version'     => '2020-06-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSSLCertificatePublicKeyDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeSSLCertificatePublicKeyDetailRequest $request
     *
     * @return DescribeSSLCertificatePublicKeyDetailResponse
     */
    public function describeSSLCertificatePublicKeyDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSSLCertificatePublicKeyDetailWithOptions($request, $runtime);
    }

    /**
     * @param UploadSSLCertificateRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return UploadSSLCertificateResponse
     */
    public function uploadSSLCertificateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->certName)) {
            $query['CertName'] = $request->certName;
        }
        if (!Utils::isUnset($request->certificate)) {
            $query['Certificate'] = $request->certificate;
        }
        if (!Utils::isUnset($request->encryptCertificate)) {
            $query['EncryptCertificate'] = $request->encryptCertificate;
        }
        if (!Utils::isUnset($request->encryptPrivateKey)) {
            $query['EncryptPrivateKey'] = $request->encryptPrivateKey;
        }
        if (!Utils::isUnset($request->privateKey)) {
            $query['PrivateKey'] = $request->privateKey;
        }
        if (!Utils::isUnset($request->signCertificate)) {
            $query['SignCertificate'] = $request->signCertificate;
        }
        if (!Utils::isUnset($request->signPrivateKey)) {
            $query['SignPrivateKey'] = $request->signPrivateKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UploadSSLCertificate',
            'version'     => '2020-06-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UploadSSLCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UploadSSLCertificateRequest $request
     *
     * @return UploadSSLCertificateResponse
     */
    public function uploadSSLCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uploadSSLCertificateWithOptions($request, $runtime);
    }
}
