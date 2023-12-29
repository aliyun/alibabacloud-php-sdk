<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dypnsapi\V20170525;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Dypnsapi\V20170525\Models\CheckSmsVerifyCodeRequest;
use AlibabaCloud\SDK\Dypnsapi\V20170525\Models\CheckSmsVerifyCodeResponse;
use AlibabaCloud\SDK\Dypnsapi\V20170525\Models\CreateSchemeConfigRequest;
use AlibabaCloud\SDK\Dypnsapi\V20170525\Models\CreateSchemeConfigResponse;
use AlibabaCloud\SDK\Dypnsapi\V20170525\Models\CreateVerifySchemeRequest;
use AlibabaCloud\SDK\Dypnsapi\V20170525\Models\CreateVerifySchemeResponse;
use AlibabaCloud\SDK\Dypnsapi\V20170525\Models\DeleteVerifySchemeRequest;
use AlibabaCloud\SDK\Dypnsapi\V20170525\Models\DeleteVerifySchemeResponse;
use AlibabaCloud\SDK\Dypnsapi\V20170525\Models\DescribeVerifySchemeRequest;
use AlibabaCloud\SDK\Dypnsapi\V20170525\Models\DescribeVerifySchemeResponse;
use AlibabaCloud\SDK\Dypnsapi\V20170525\Models\GetAuthorizationUrlRequest;
use AlibabaCloud\SDK\Dypnsapi\V20170525\Models\GetAuthorizationUrlResponse;
use AlibabaCloud\SDK\Dypnsapi\V20170525\Models\GetAuthTokenRequest;
use AlibabaCloud\SDK\Dypnsapi\V20170525\Models\GetAuthTokenResponse;
use AlibabaCloud\SDK\Dypnsapi\V20170525\Models\GetFusionAuthTokenRequest;
use AlibabaCloud\SDK\Dypnsapi\V20170525\Models\GetFusionAuthTokenResponse;
use AlibabaCloud\SDK\Dypnsapi\V20170525\Models\GetMobileRequest;
use AlibabaCloud\SDK\Dypnsapi\V20170525\Models\GetMobileResponse;
use AlibabaCloud\SDK\Dypnsapi\V20170525\Models\GetPhoneWithTokenRequest;
use AlibabaCloud\SDK\Dypnsapi\V20170525\Models\GetPhoneWithTokenResponse;
use AlibabaCloud\SDK\Dypnsapi\V20170525\Models\GetSmsAuthTokensRequest;
use AlibabaCloud\SDK\Dypnsapi\V20170525\Models\GetSmsAuthTokensResponse;
use AlibabaCloud\SDK\Dypnsapi\V20170525\Models\JyCreateVerifySchemeRequest;
use AlibabaCloud\SDK\Dypnsapi\V20170525\Models\JyCreateVerifySchemeResponse;
use AlibabaCloud\SDK\Dypnsapi\V20170525\Models\JyQueryAppInfoBySceneCodeRequest;
use AlibabaCloud\SDK\Dypnsapi\V20170525\Models\JyQueryAppInfoBySceneCodeResponse;
use AlibabaCloud\SDK\Dypnsapi\V20170525\Models\QueryGateVerifyBillingPublicRequest;
use AlibabaCloud\SDK\Dypnsapi\V20170525\Models\QueryGateVerifyBillingPublicResponse;
use AlibabaCloud\SDK\Dypnsapi\V20170525\Models\QueryGateVerifyStatisticPublicRequest;
use AlibabaCloud\SDK\Dypnsapi\V20170525\Models\QueryGateVerifyStatisticPublicResponse;
use AlibabaCloud\SDK\Dypnsapi\V20170525\Models\QuerySendDetailsRequest;
use AlibabaCloud\SDK\Dypnsapi\V20170525\Models\QuerySendDetailsResponse;
use AlibabaCloud\SDK\Dypnsapi\V20170525\Models\SendSmsVerifyCodeRequest;
use AlibabaCloud\SDK\Dypnsapi\V20170525\Models\SendSmsVerifyCodeResponse;
use AlibabaCloud\SDK\Dypnsapi\V20170525\Models\VerifyMobileRequest;
use AlibabaCloud\SDK\Dypnsapi\V20170525\Models\VerifyMobileResponse;
use AlibabaCloud\SDK\Dypnsapi\V20170525\Models\VerifyPhoneWithTokenRequest;
use AlibabaCloud\SDK\Dypnsapi\V20170525\Models\VerifyPhoneWithTokenResponse;
use AlibabaCloud\SDK\Dypnsapi\V20170525\Models\VerifySmsCodeRequest;
use AlibabaCloud\SDK\Dypnsapi\V20170525\Models\VerifySmsCodeResponse;
use AlibabaCloud\SDK\Dypnsapi\V20170525\Models\VerifyWithFusionAuthTokenRequest;
use AlibabaCloud\SDK\Dypnsapi\V20170525\Models\VerifyWithFusionAuthTokenResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Dypnsapi extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_signatureAlgorithm = 'v2';
        $this->_endpointRule       = 'central';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('dypnsapi', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param CheckSmsVerifyCodeRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CheckSmsVerifyCodeResponse
     */
    public function checkSmsVerifyCodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->caseAuthPolicy)) {
            $query['CaseAuthPolicy'] = $request->caseAuthPolicy;
        }
        if (!Utils::isUnset($request->countryCode)) {
            $query['CountryCode'] = $request->countryCode;
        }
        if (!Utils::isUnset($request->outId)) {
            $query['OutId'] = $request->outId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->phoneNumber)) {
            $query['PhoneNumber'] = $request->phoneNumber;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->schemeName)) {
            $query['SchemeName'] = $request->schemeName;
        }
        if (!Utils::isUnset($request->verifyCode)) {
            $query['VerifyCode'] = $request->verifyCode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CheckSmsVerifyCode',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CheckSmsVerifyCodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CheckSmsVerifyCodeRequest $request
     *
     * @return CheckSmsVerifyCodeResponse
     */
    public function checkSmsVerifyCode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkSmsVerifyCodeWithOptions($request, $runtime);
    }

    /**
     * @param CreateSchemeConfigRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateSchemeConfigResponse
     */
    public function createSchemeConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->androidPackageName)) {
            $query['AndroidPackageName'] = $request->androidPackageName;
        }
        if (!Utils::isUnset($request->androidPackageSign)) {
            $query['AndroidPackageSign'] = $request->androidPackageSign;
        }
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->h5Origin)) {
            $query['H5Origin'] = $request->h5Origin;
        }
        if (!Utils::isUnset($request->h5Url)) {
            $query['H5Url'] = $request->h5Url;
        }
        if (!Utils::isUnset($request->iosBundleId)) {
            $query['IosBundleId'] = $request->iosBundleId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->platform)) {
            $query['Platform'] = $request->platform;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->schemeName)) {
            $query['SchemeName'] = $request->schemeName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateSchemeConfig',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateSchemeConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateSchemeConfigRequest $request
     *
     * @return CreateSchemeConfigResponse
     */
    public function createSchemeConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSchemeConfigWithOptions($request, $runtime);
    }

    /**
     * ### [](#qps)QPS limits
     *   * You can call this operation up to 100 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param CreateVerifySchemeRequest $request CreateVerifySchemeRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateVerifySchemeResponse CreateVerifySchemeResponse
     */
    public function createVerifySchemeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->authType)) {
            $query['AuthType'] = $request->authType;
        }
        if (!Utils::isUnset($request->bundleId)) {
            $query['BundleId'] = $request->bundleId;
        }
        if (!Utils::isUnset($request->cmApiCode)) {
            $query['CmApiCode'] = $request->cmApiCode;
        }
        if (!Utils::isUnset($request->ctApiCode)) {
            $query['CtApiCode'] = $request->ctApiCode;
        }
        if (!Utils::isUnset($request->cuApiCode)) {
            $query['CuApiCode'] = $request->cuApiCode;
        }
        if (!Utils::isUnset($request->email)) {
            $query['Email'] = $request->email;
        }
        if (!Utils::isUnset($request->ipWhiteList)) {
            $query['IpWhiteList'] = $request->ipWhiteList;
        }
        if (!Utils::isUnset($request->origin)) {
            $query['Origin'] = $request->origin;
        }
        if (!Utils::isUnset($request->osType)) {
            $query['OsType'] = $request->osType;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->packName)) {
            $query['PackName'] = $request->packName;
        }
        if (!Utils::isUnset($request->packSign)) {
            $query['PackSign'] = $request->packSign;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->sceneType)) {
            $query['SceneType'] = $request->sceneType;
        }
        if (!Utils::isUnset($request->schemeName)) {
            $query['SchemeName'] = $request->schemeName;
        }
        if (!Utils::isUnset($request->smsSignName)) {
            $query['SmsSignName'] = $request->smsSignName;
        }
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateVerifyScheme',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateVerifySchemeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ### [](#qps)QPS limits
     *   * You can call this operation up to 100 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param CreateVerifySchemeRequest $request CreateVerifySchemeRequest
     *
     * @return CreateVerifySchemeResponse CreateVerifySchemeResponse
     */
    public function createVerifyScheme($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createVerifySchemeWithOptions($request, $runtime);
    }

    /**
     * ### [](#qps)QPS limits
     *   * You can call this operation up to 100 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param DeleteVerifySchemeRequest $request DeleteVerifySchemeRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteVerifySchemeResponse DeleteVerifySchemeResponse
     */
    public function deleteVerifySchemeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->customerId)) {
            $query['CustomerId'] = $request->customerId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->schemeCode)) {
            $query['SchemeCode'] = $request->schemeCode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteVerifyScheme',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteVerifySchemeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ### [](#qps)QPS limits
     *   * You can call this operation up to 100 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param DeleteVerifySchemeRequest $request DeleteVerifySchemeRequest
     *
     * @return DeleteVerifySchemeResponse DeleteVerifySchemeResponse
     */
    public function deleteVerifyScheme($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteVerifySchemeWithOptions($request, $runtime);
    }

    /**
     * ### [](#qps)QPS limits
     *   * You can call this operation up to 100 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param DescribeVerifySchemeRequest $request DescribeVerifySchemeRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeVerifySchemeResponse DescribeVerifySchemeResponse
     */
    public function describeVerifySchemeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->customerId)) {
            $query['CustomerId'] = $request->customerId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->schemeCode)) {
            $query['SchemeCode'] = $request->schemeCode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeVerifyScheme',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeVerifySchemeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ### [](#qps)QPS limits
     *   * You can call this operation up to 100 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param DescribeVerifySchemeRequest $request DescribeVerifySchemeRequest
     *
     * @return DescribeVerifySchemeResponse DescribeVerifySchemeResponse
     */
    public function describeVerifyScheme($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVerifySchemeWithOptions($request, $runtime);
    }

    /**
     * ### [](#)Preparations
     *   * You must register an Alibaba Cloud account, obtain an Alibaba Cloud AccessKey pair, and create a verification service. For more information, see [Use the phone number verification feature for HTML5 pages](~~169786~~).
     *   * ### [](#qps)QPS limits
     *   * You can call this operation up to 1,000 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param GetAuthTokenRequest $request GetAuthTokenRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAuthTokenResponse GetAuthTokenResponse
     */
    public function getAuthTokenWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->origin)) {
            $query['Origin'] = $request->origin;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->sceneCode)) {
            $query['SceneCode'] = $request->sceneCode;
        }
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAuthToken',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAuthTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ### [](#)Preparations
     *   * You must register an Alibaba Cloud account, obtain an Alibaba Cloud AccessKey pair, and create a verification service. For more information, see [Use the phone number verification feature for HTML5 pages](~~169786~~).
     *   * ### [](#qps)QPS limits
     *   * You can call this operation up to 1,000 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param GetAuthTokenRequest $request GetAuthTokenRequest
     *
     * @return GetAuthTokenResponse GetAuthTokenResponse
     */
    public function getAuthToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAuthTokenWithOptions($request, $runtime);
    }

    /**
     * ### [](#)Preparations
     *   * You must register an Alibaba Cloud account and obtain an Alibaba Cloud AccessKey pair. For more information, see [Process of communication authorization](~~196922~~).
     *   * ### [](#qps)QPS limits
     *   * You can call this operation up to 1,000 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param GetAuthorizationUrlRequest $request GetAuthorizationUrlRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAuthorizationUrlResponse GetAuthorizationUrlResponse
     */
    public function getAuthorizationUrlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endDate)) {
            $query['EndDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->phoneNo)) {
            $query['PhoneNo'] = $request->phoneNo;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->schemeId)) {
            $query['SchemeId'] = $request->schemeId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAuthorizationUrl',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAuthorizationUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ### [](#)Preparations
     *   * You must register an Alibaba Cloud account and obtain an Alibaba Cloud AccessKey pair. For more information, see [Process of communication authorization](~~196922~~).
     *   * ### [](#qps)QPS limits
     *   * You can call this operation up to 1,000 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param GetAuthorizationUrlRequest $request GetAuthorizationUrlRequest
     *
     * @return GetAuthorizationUrlResponse GetAuthorizationUrlResponse
     */
    public function getAuthorizationUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAuthorizationUrlWithOptions($request, $runtime);
    }

    /**
     * @param GetFusionAuthTokenRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetFusionAuthTokenResponse
     */
    public function getFusionAuthTokenWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bundleId)) {
            $query['BundleId'] = $request->bundleId;
        }
        if (!Utils::isUnset($request->durationSeconds)) {
            $query['DurationSeconds'] = $request->durationSeconds;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->packageName)) {
            $query['PackageName'] = $request->packageName;
        }
        if (!Utils::isUnset($request->packageSign)) {
            $query['PackageSign'] = $request->packageSign;
        }
        if (!Utils::isUnset($request->platform)) {
            $query['Platform'] = $request->platform;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->schemeCode)) {
            $query['SchemeCode'] = $request->schemeCode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetFusionAuthToken',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetFusionAuthTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetFusionAuthTokenRequest $request
     *
     * @return GetFusionAuthTokenResponse
     */
    public function getFusionAuthToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getFusionAuthTokenWithOptions($request, $runtime);
    }

    /**
     * ### [](#)Preparations
     *   * You must register an Alibaba Cloud account, obtain an Alibaba Cloud AccessKey pair, and create a verification service. For more information, see [Getting Started](~~84541~~).
     *   * >  This operation is applicable only to one-click logon or registration. You can call this operation only after you confirm the authorization on the authorization page provided by the SDK for one-click logon. You are prohibited from simulating or bypassing the authorization process. Alibaba Cloud reserves the right to terminate our services and take legal actions against such violations.
     *   * ### [](#qps)QPS limits
     *   * You can call this operation up to 5,000 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param GetMobileRequest $request GetMobileRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return GetMobileResponse GetMobileResponse
     */
    public function getMobileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            $query['AccessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->outId)) {
            $query['OutId'] = $request->outId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetMobile',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetMobileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ### [](#)Preparations
     *   * You must register an Alibaba Cloud account, obtain an Alibaba Cloud AccessKey pair, and create a verification service. For more information, see [Getting Started](~~84541~~).
     *   * >  This operation is applicable only to one-click logon or registration. You can call this operation only after you confirm the authorization on the authorization page provided by the SDK for one-click logon. You are prohibited from simulating or bypassing the authorization process. Alibaba Cloud reserves the right to terminate our services and take legal actions against such violations.
     *   * ### [](#qps)QPS limits
     *   * You can call this operation up to 5,000 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param GetMobileRequest $request GetMobileRequest
     *
     * @return GetMobileResponse GetMobileResponse
     */
    public function getMobile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMobileWithOptions($request, $runtime);
    }

    /**
     * ### [](#)Preparations
     *   * You must register an Alibaba Cloud account, obtain an Alibaba Cloud AccessKey pair, and create a verification service. For more information, see [Getting Started](~~84541~~).
     *   * >  This operation is applicable only to one-click logon or registration in HTML5 pages. You can call this operation only after you confirm the authorization on the authorization page provided by the JavaScript SDK. You are prohibited from simulating or bypassing the authorization process. Alibaba Cloud reserves the right to terminate our services and take legal actions against such violations.
     *   * ### [](#qps)QPS limits
     *   * You can call this operation up to 500 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param GetPhoneWithTokenRequest $request GetPhoneWithTokenRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return GetPhoneWithTokenResponse GetPhoneWithTokenResponse
     */
    public function getPhoneWithTokenWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->spToken)) {
            $query['SpToken'] = $request->spToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetPhoneWithToken',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetPhoneWithTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ### [](#)Preparations
     *   * You must register an Alibaba Cloud account, obtain an Alibaba Cloud AccessKey pair, and create a verification service. For more information, see [Getting Started](~~84541~~).
     *   * >  This operation is applicable only to one-click logon or registration in HTML5 pages. You can call this operation only after you confirm the authorization on the authorization page provided by the JavaScript SDK. You are prohibited from simulating or bypassing the authorization process. Alibaba Cloud reserves the right to terminate our services and take legal actions against such violations.
     *   * ### [](#qps)QPS limits
     *   * You can call this operation up to 500 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param GetPhoneWithTokenRequest $request GetPhoneWithTokenRequest
     *
     * @return GetPhoneWithTokenResponse GetPhoneWithTokenResponse
     */
    public function getPhoneWithToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPhoneWithTokenWithOptions($request, $runtime);
    }

    /**
     * ### [](#)Preparations
     *   * You must register an Alibaba Cloud account, obtain an Alibaba Cloud AccessKey pair, and create a verification service. For more information, see [Use the SMS verification feature](~~313209~~).
     *   * ### [](#qps)QPS limits
     *   * You can call this operation up to 5,000 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param GetSmsAuthTokensRequest $request GetSmsAuthTokensRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return GetSmsAuthTokensResponse GetSmsAuthTokensResponse
     */
    public function getSmsAuthTokensWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bundleId)) {
            $query['BundleId'] = $request->bundleId;
        }
        if (!Utils::isUnset($request->expire)) {
            $query['Expire'] = $request->expire;
        }
        if (!Utils::isUnset($request->osType)) {
            $query['OsType'] = $request->osType;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->packageName)) {
            $query['PackageName'] = $request->packageName;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->sceneCode)) {
            $query['SceneCode'] = $request->sceneCode;
        }
        if (!Utils::isUnset($request->signName)) {
            $query['SignName'] = $request->signName;
        }
        if (!Utils::isUnset($request->smsCodeExpire)) {
            $query['SmsCodeExpire'] = $request->smsCodeExpire;
        }
        if (!Utils::isUnset($request->smsTemplateCode)) {
            $query['SmsTemplateCode'] = $request->smsTemplateCode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetSmsAuthTokens',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetSmsAuthTokensResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ### [](#)Preparations
     *   * You must register an Alibaba Cloud account, obtain an Alibaba Cloud AccessKey pair, and create a verification service. For more information, see [Use the SMS verification feature](~~313209~~).
     *   * ### [](#qps)QPS limits
     *   * You can call this operation up to 5,000 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param GetSmsAuthTokensRequest $request GetSmsAuthTokensRequest
     *
     * @return GetSmsAuthTokensResponse GetSmsAuthTokensResponse
     */
    public function getSmsAuthTokens($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSmsAuthTokensWithOptions($request, $runtime);
    }

    /**
     * @deprecated : JyCreateVerifyScheme is deprecated, please use Dypnsapi::2017-05-25::CreateVerifyScheme instead.
     *   *
     * Deprecated
     *
     * @param JyCreateVerifySchemeRequest $request JyCreateVerifySchemeRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return JyCreateVerifySchemeResponse JyCreateVerifySchemeResponse
     */
    public function jyCreateVerifySchemeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->bundleId)) {
            $query['BundleId'] = $request->bundleId;
        }
        if (!Utils::isUnset($request->cmApiCode)) {
            $query['CmApiCode'] = $request->cmApiCode;
        }
        if (!Utils::isUnset($request->ctApiCode)) {
            $query['CtApiCode'] = $request->ctApiCode;
        }
        if (!Utils::isUnset($request->cuApiCode)) {
            $query['CuApiCode'] = $request->cuApiCode;
        }
        if (!Utils::isUnset($request->osType)) {
            $query['OsType'] = $request->osType;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->packName)) {
            $query['PackName'] = $request->packName;
        }
        if (!Utils::isUnset($request->packSign)) {
            $query['PackSign'] = $request->packSign;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->schemeName)) {
            $query['SchemeName'] = $request->schemeName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'JyCreateVerifyScheme',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return JyCreateVerifySchemeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @deprecated : JyCreateVerifyScheme is deprecated, please use Dypnsapi::2017-05-25::CreateVerifyScheme instead.
     *   *
     * Deprecated
     *
     * @param JyCreateVerifySchemeRequest $request JyCreateVerifySchemeRequest
     *
     * @return JyCreateVerifySchemeResponse JyCreateVerifySchemeResponse
     */
    public function jyCreateVerifyScheme($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->jyCreateVerifySchemeWithOptions($request, $runtime);
    }

    /**
     * @deprecated : JyQueryAppInfoBySceneCode is deprecated, please use Dypnsapi::2017-05-25::QueryAppInfoBySceneCode instead.
     *   *
     * Deprecated
     *
     * @param JyQueryAppInfoBySceneCodeRequest $request JyQueryAppInfoBySceneCodeRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return JyQueryAppInfoBySceneCodeResponse JyQueryAppInfoBySceneCodeResponse
     */
    public function jyQueryAppInfoBySceneCodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->sceneCode)) {
            $query['SceneCode'] = $request->sceneCode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'JyQueryAppInfoBySceneCode',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return JyQueryAppInfoBySceneCodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @deprecated : JyQueryAppInfoBySceneCode is deprecated, please use Dypnsapi::2017-05-25::QueryAppInfoBySceneCode instead.
     *   *
     * Deprecated
     *
     * @param JyQueryAppInfoBySceneCodeRequest $request JyQueryAppInfoBySceneCodeRequest
     *
     * @return JyQueryAppInfoBySceneCodeResponse JyQueryAppInfoBySceneCodeResponse
     */
    public function jyQueryAppInfoBySceneCode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->jyQueryAppInfoBySceneCodeWithOptions($request, $runtime);
    }

    /**
     * ### [](#qps)QPS limits
     *   * You can call this operation up to 500 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param QueryGateVerifyBillingPublicRequest $request QueryGateVerifyBillingPublicRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryGateVerifyBillingPublicResponse QueryGateVerifyBillingPublicResponse
     */
    public function queryGateVerifyBillingPublicWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->authenticationType)) {
            $query['AuthenticationType'] = $request->authenticationType;
        }
        if (!Utils::isUnset($request->month)) {
            $query['Month'] = $request->month;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryGateVerifyBillingPublic',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryGateVerifyBillingPublicResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ### [](#qps)QPS limits
     *   * You can call this operation up to 500 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param QueryGateVerifyBillingPublicRequest $request QueryGateVerifyBillingPublicRequest
     *
     * @return QueryGateVerifyBillingPublicResponse QueryGateVerifyBillingPublicResponse
     */
    public function queryGateVerifyBillingPublic($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryGateVerifyBillingPublicWithOptions($request, $runtime);
    }

    /**
     * ### [](#qps)QPS limits
     *   * You can call this operation up to 500 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param QueryGateVerifyStatisticPublicRequest $request QueryGateVerifyStatisticPublicRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryGateVerifyStatisticPublicResponse QueryGateVerifyStatisticPublicResponse
     */
    public function queryGateVerifyStatisticPublicWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->authenticationType)) {
            $query['AuthenticationType'] = $request->authenticationType;
        }
        if (!Utils::isUnset($request->endDate)) {
            $query['EndDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->osType)) {
            $query['OsType'] = $request->osType;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->sceneCode)) {
            $query['SceneCode'] = $request->sceneCode;
        }
        if (!Utils::isUnset($request->startDate)) {
            $query['StartDate'] = $request->startDate;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryGateVerifyStatisticPublic',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryGateVerifyStatisticPublicResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ### [](#qps)QPS limits
     *   * You can call this operation up to 500 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param QueryGateVerifyStatisticPublicRequest $request QueryGateVerifyStatisticPublicRequest
     *
     * @return QueryGateVerifyStatisticPublicResponse QueryGateVerifyStatisticPublicResponse
     */
    public function queryGateVerifyStatisticPublic($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryGateVerifyStatisticPublicWithOptions($request, $runtime);
    }

    /**
     * @deprecated
     *   *
     * Deprecated
     *
     * @param QuerySendDetailsRequest $request QuerySendDetailsRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return QuerySendDetailsResponse QuerySendDetailsResponse
     */
    public function querySendDetailsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->phoneNumber)) {
            $query['PhoneNumber'] = $request->phoneNumber;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->sendDate)) {
            $query['SendDate'] = $request->sendDate;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QuerySendDetails',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QuerySendDetailsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @deprecated
     *   *
     * Deprecated
     *
     * @param QuerySendDetailsRequest $request QuerySendDetailsRequest
     *
     * @return QuerySendDetailsResponse QuerySendDetailsResponse
     */
    public function querySendDetails($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySendDetailsWithOptions($request, $runtime);
    }

    /**
     * @param SendSmsVerifyCodeRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return SendSmsVerifyCodeResponse
     */
    public function sendSmsVerifyCodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->codeLength)) {
            $query['CodeLength'] = $request->codeLength;
        }
        if (!Utils::isUnset($request->codeType)) {
            $query['CodeType'] = $request->codeType;
        }
        if (!Utils::isUnset($request->countryCode)) {
            $query['CountryCode'] = $request->countryCode;
        }
        if (!Utils::isUnset($request->duplicatePolicy)) {
            $query['DuplicatePolicy'] = $request->duplicatePolicy;
        }
        if (!Utils::isUnset($request->interval)) {
            $query['Interval'] = $request->interval;
        }
        if (!Utils::isUnset($request->outId)) {
            $query['OutId'] = $request->outId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->phoneNumber)) {
            $query['PhoneNumber'] = $request->phoneNumber;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->returnVerifyCode)) {
            $query['ReturnVerifyCode'] = $request->returnVerifyCode;
        }
        if (!Utils::isUnset($request->schemeName)) {
            $query['SchemeName'] = $request->schemeName;
        }
        if (!Utils::isUnset($request->signName)) {
            $query['SignName'] = $request->signName;
        }
        if (!Utils::isUnset($request->smsUpExtendCode)) {
            $query['SmsUpExtendCode'] = $request->smsUpExtendCode;
        }
        if (!Utils::isUnset($request->templateCode)) {
            $query['TemplateCode'] = $request->templateCode;
        }
        if (!Utils::isUnset($request->templateParam)) {
            $query['TemplateParam'] = $request->templateParam;
        }
        if (!Utils::isUnset($request->validTime)) {
            $query['ValidTime'] = $request->validTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SendSmsVerifyCode',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SendSmsVerifyCodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SendSmsVerifyCodeRequest $request
     *
     * @return SendSmsVerifyCodeResponse
     */
    public function sendSmsVerifyCode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sendSmsVerifyCodeWithOptions($request, $runtime);
    }

    /**
     * ### [](#)Preparations
     *   * You must register an Alibaba Cloud account, obtain an Alibaba Cloud AccessKey pair, and create a verification service. For more information, see [Getting Started](~~84541~~).
     *   * >  This operation is applicable to only the verification of thephone number that you use. To obtain a phone number for one-click logon, call [GetMobile](~~189865~~).
     *   * ### [](#qps)QPS limits
     *   * You can call this operation up to 5,000 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param VerifyMobileRequest $request VerifyMobileRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return VerifyMobileResponse VerifyMobileResponse
     */
    public function verifyMobileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessCode)) {
            $query['AccessCode'] = $request->accessCode;
        }
        if (!Utils::isUnset($request->outId)) {
            $query['OutId'] = $request->outId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->phoneNumber)) {
            $query['PhoneNumber'] = $request->phoneNumber;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'VerifyMobile',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return VerifyMobileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ### [](#)Preparations
     *   * You must register an Alibaba Cloud account, obtain an Alibaba Cloud AccessKey pair, and create a verification service. For more information, see [Getting Started](~~84541~~).
     *   * >  This operation is applicable to only the verification of thephone number that you use. To obtain a phone number for one-click logon, call [GetMobile](~~189865~~).
     *   * ### [](#qps)QPS limits
     *   * You can call this operation up to 5,000 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param VerifyMobileRequest $request VerifyMobileRequest
     *
     * @return VerifyMobileResponse VerifyMobileResponse
     */
    public function verifyMobile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->verifyMobileWithOptions($request, $runtime);
    }

    /**
     * ### [](#)Preparations
     *   * You must register an Alibaba Cloud account, obtain an Alibaba Cloud AccessKey pair, and create a verification service. For more information, see [Use the phone number verification feature for HTML5 pages](~~169786~~).
     *   * ### [](#qps)QPS limits
     *   * You can call this operation up to 1,000 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param VerifyPhoneWithTokenRequest $request VerifyPhoneWithTokenRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return VerifyPhoneWithTokenResponse VerifyPhoneWithTokenResponse
     */
    public function verifyPhoneWithTokenWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->phoneNumber)) {
            $query['PhoneNumber'] = $request->phoneNumber;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->spToken)) {
            $query['SpToken'] = $request->spToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'VerifyPhoneWithToken',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return VerifyPhoneWithTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ### [](#)Preparations
     *   * You must register an Alibaba Cloud account, obtain an Alibaba Cloud AccessKey pair, and create a verification service. For more information, see [Use the phone number verification feature for HTML5 pages](~~169786~~).
     *   * ### [](#qps)QPS limits
     *   * You can call this operation up to 1,000 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param VerifyPhoneWithTokenRequest $request VerifyPhoneWithTokenRequest
     *
     * @return VerifyPhoneWithTokenResponse VerifyPhoneWithTokenResponse
     */
    public function verifyPhoneWithToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->verifyPhoneWithTokenWithOptions($request, $runtime);
    }

    /**
     * ### [](#)Preparations
     *   * You must register an Alibaba Cloud account, obtain an Alibaba Cloud AccessKey pair, and create a verification service. For more information, see [Use the SMS verification feature](~~313209~~).
     *   * ### [](#qps)QPS limits
     *   * You can call this operation up to 500 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param VerifySmsCodeRequest $request VerifySmsCodeRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return VerifySmsCodeResponse VerifySmsCodeResponse
     */
    public function verifySmsCodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->phoneNumber)) {
            $query['PhoneNumber'] = $request->phoneNumber;
        }
        if (!Utils::isUnset($request->smsCode)) {
            $query['SmsCode'] = $request->smsCode;
        }
        if (!Utils::isUnset($request->smsToken)) {
            $query['SmsToken'] = $request->smsToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'VerifySmsCode',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return VerifySmsCodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ### [](#)Preparations
     *   * You must register an Alibaba Cloud account, obtain an Alibaba Cloud AccessKey pair, and create a verification service. For more information, see [Use the SMS verification feature](~~313209~~).
     *   * ### [](#qps)QPS limits
     *   * You can call this operation up to 500 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param VerifySmsCodeRequest $request VerifySmsCodeRequest
     *
     * @return VerifySmsCodeResponse VerifySmsCodeResponse
     */
    public function verifySmsCode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->verifySmsCodeWithOptions($request, $runtime);
    }

    /**
     * @param VerifyWithFusionAuthTokenRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return VerifyWithFusionAuthTokenResponse
     */
    public function verifyWithFusionAuthTokenWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->verifyToken)) {
            $query['VerifyToken'] = $request->verifyToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'VerifyWithFusionAuthToken',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return VerifyWithFusionAuthTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param VerifyWithFusionAuthTokenRequest $request
     *
     * @return VerifyWithFusionAuthTokenResponse
     */
    public function verifyWithFusionAuthToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->verifyWithFusionAuthTokenWithOptions($request, $runtime);
    }
}
