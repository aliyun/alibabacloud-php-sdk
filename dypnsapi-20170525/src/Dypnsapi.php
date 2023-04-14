<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dypnsapi\V20170525;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
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
use AlibabaCloud\SDK\Dypnsapi\V20170525\Models\QueryGateVerifyBillingPublicRequest;
use AlibabaCloud\SDK\Dypnsapi\V20170525\Models\QueryGateVerifyBillingPublicResponse;
use AlibabaCloud\SDK\Dypnsapi\V20170525\Models\QueryGateVerifyStatisticPublicRequest;
use AlibabaCloud\SDK\Dypnsapi\V20170525\Models\QueryGateVerifyStatisticPublicResponse;
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
     * @param CreateVerifySchemeRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateVerifySchemeResponse
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
     * @param CreateVerifySchemeRequest $request
     *
     * @return CreateVerifySchemeResponse
     */
    public function createVerifyScheme($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createVerifySchemeWithOptions($request, $runtime);
    }

    /**
     * @param DeleteVerifySchemeRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteVerifySchemeResponse
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
     * @param DeleteVerifySchemeRequest $request
     *
     * @return DeleteVerifySchemeResponse
     */
    public function deleteVerifyScheme($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteVerifySchemeWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVerifySchemeRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeVerifySchemeResponse
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
     * @param DescribeVerifySchemeRequest $request
     *
     * @return DescribeVerifySchemeResponse
     */
    public function describeVerifyScheme($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVerifySchemeWithOptions($request, $runtime);
    }

    /**
     * @param GetAuthTokenRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetAuthTokenResponse
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
     * @param GetAuthTokenRequest $request
     *
     * @return GetAuthTokenResponse
     */
    public function getAuthToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAuthTokenWithOptions($request, $runtime);
    }

    /**
     * @param GetAuthorizationUrlRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetAuthorizationUrlResponse
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
     * @param GetAuthorizationUrlRequest $request
     *
     * @return GetAuthorizationUrlResponse
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
     * @param GetMobileRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return GetMobileResponse
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
     * @param GetMobileRequest $request
     *
     * @return GetMobileResponse
     */
    public function getMobile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMobileWithOptions($request, $runtime);
    }

    /**
     * @param GetPhoneWithTokenRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetPhoneWithTokenResponse
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
     * @param GetPhoneWithTokenRequest $request
     *
     * @return GetPhoneWithTokenResponse
     */
    public function getPhoneWithToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPhoneWithTokenWithOptions($request, $runtime);
    }

    /**
     * @param GetSmsAuthTokensRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetSmsAuthTokensResponse
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
     * @param GetSmsAuthTokensRequest $request
     *
     * @return GetSmsAuthTokensResponse
     */
    public function getSmsAuthTokens($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSmsAuthTokensWithOptions($request, $runtime);
    }

    /**
     * @param QueryGateVerifyBillingPublicRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return QueryGateVerifyBillingPublicResponse
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
     * @param QueryGateVerifyBillingPublicRequest $request
     *
     * @return QueryGateVerifyBillingPublicResponse
     */
    public function queryGateVerifyBillingPublic($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryGateVerifyBillingPublicWithOptions($request, $runtime);
    }

    /**
     * @param QueryGateVerifyStatisticPublicRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return QueryGateVerifyStatisticPublicResponse
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
     * @param QueryGateVerifyStatisticPublicRequest $request
     *
     * @return QueryGateVerifyStatisticPublicResponse
     */
    public function queryGateVerifyStatisticPublic($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryGateVerifyStatisticPublicWithOptions($request, $runtime);
    }

    /**
     * @param VerifyMobileRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return VerifyMobileResponse
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
     * @param VerifyMobileRequest $request
     *
     * @return VerifyMobileResponse
     */
    public function verifyMobile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->verifyMobileWithOptions($request, $runtime);
    }

    /**
     * @param VerifyPhoneWithTokenRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return VerifyPhoneWithTokenResponse
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
     * @param VerifyPhoneWithTokenRequest $request
     *
     * @return VerifyPhoneWithTokenResponse
     */
    public function verifyPhoneWithToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->verifyPhoneWithTokenWithOptions($request, $runtime);
    }

    /**
     * @param VerifySmsCodeRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return VerifySmsCodeResponse
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
     * @param VerifySmsCodeRequest $request
     *
     * @return VerifySmsCodeResponse
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
