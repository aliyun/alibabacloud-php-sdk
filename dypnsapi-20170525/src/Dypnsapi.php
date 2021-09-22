<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dypnsapi\V20170525;

use AlibabaCloud\Endpoint\Endpoint;
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
use AlibabaCloud\SDK\Dypnsapi\V20170525\Models\GetCertifyResultRequest;
use AlibabaCloud\SDK\Dypnsapi\V20170525\Models\GetCertifyResultResponse;
use AlibabaCloud\SDK\Dypnsapi\V20170525\Models\GetMobileRequest;
use AlibabaCloud\SDK\Dypnsapi\V20170525\Models\GetMobileResponse;
use AlibabaCloud\SDK\Dypnsapi\V20170525\Models\GetSmsAuthTokensRequest;
use AlibabaCloud\SDK\Dypnsapi\V20170525\Models\GetSmsAuthTokensResponse;
use AlibabaCloud\SDK\Dypnsapi\V20170525\Models\TwiceTelVerifyRequest;
use AlibabaCloud\SDK\Dypnsapi\V20170525\Models\TwiceTelVerifyResponse;
use AlibabaCloud\SDK\Dypnsapi\V20170525\Models\VerifyMobileRequest;
use AlibabaCloud\SDK\Dypnsapi\V20170525\Models\VerifyMobileResponse;
use AlibabaCloud\SDK\Dypnsapi\V20170525\Models\VerifyPhoneWithTokenRequest;
use AlibabaCloud\SDK\Dypnsapi\V20170525\Models\VerifyPhoneWithTokenResponse;
use AlibabaCloud\SDK\Dypnsapi\V20170525\Models\VerifySmsCodeRequest;
use AlibabaCloud\SDK\Dypnsapi\V20170525\Models\VerifySmsCodeResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

class Dypnsapi extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'central';
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
     * @param GetAuthorizationUrlRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetAuthorizationUrlResponse
     */
    public function getAuthorizationUrlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetAuthorizationUrlResponse::fromMap($this->doRPCRequest('GetAuthorizationUrl', '2017-05-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param GetSmsAuthTokensRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetSmsAuthTokensResponse
     */
    public function getSmsAuthTokensWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetSmsAuthTokensResponse::fromMap($this->doRPCRequest('GetSmsAuthTokens', '2017-05-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param CreateVerifySchemeRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateVerifySchemeResponse
     */
    public function createVerifySchemeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateVerifySchemeResponse::fromMap($this->doRPCRequest('CreateVerifyScheme', '2017-05-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param VerifySmsCodeRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return VerifySmsCodeResponse
     */
    public function verifySmsCodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return VerifySmsCodeResponse::fromMap($this->doRPCRequest('VerifySmsCode', '2017-05-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DeleteVerifySchemeRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteVerifySchemeResponse
     */
    public function deleteVerifySchemeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteVerifySchemeResponse::fromMap($this->doRPCRequest('DeleteVerifyScheme', '2017-05-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param VerifyPhoneWithTokenRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return VerifyPhoneWithTokenResponse
     */
    public function verifyPhoneWithTokenWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return VerifyPhoneWithTokenResponse::fromMap($this->doRPCRequest('VerifyPhoneWithToken', '2017-05-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param GetMobileRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return GetMobileResponse
     */
    public function getMobileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetMobileResponse::fromMap($this->doRPCRequest('GetMobile', '2017-05-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param TwiceTelVerifyRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return TwiceTelVerifyResponse
     */
    public function twiceTelVerifyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return TwiceTelVerifyResponse::fromMap($this->doRPCRequest('TwiceTelVerify', '2017-05-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param TwiceTelVerifyRequest $request
     *
     * @return TwiceTelVerifyResponse
     */
    public function twiceTelVerify($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->twiceTelVerifyWithOptions($request, $runtime);
    }

    /**
     * @param GetCertifyResultRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetCertifyResultResponse
     */
    public function getCertifyResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetCertifyResultResponse::fromMap($this->doRPCRequest('GetCertifyResult', '2017-05-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetCertifyResultRequest $request
     *
     * @return GetCertifyResultResponse
     */
    public function getCertifyResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCertifyResultWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeVerifySchemeResponse::fromMap($this->doRPCRequest('DescribeVerifyScheme', '2017-05-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetAuthTokenResponse::fromMap($this->doRPCRequest('GetAuthToken', '2017-05-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param VerifyMobileRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return VerifyMobileResponse
     */
    public function verifyMobileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return VerifyMobileResponse::fromMap($this->doRPCRequest('VerifyMobile', '2017-05-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
}
