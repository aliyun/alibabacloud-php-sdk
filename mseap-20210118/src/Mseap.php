<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mseap\V20210118;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\Mseap\V20210118\Models\ActivateLicenseRequest;
use AlibabaCloud\SDK\Mseap\V20210118\Models\ActivateLicenseResponse;
use AlibabaCloud\SDK\Mseap\V20210118\Models\BusinessLicenseOcrRequest;
use AlibabaCloud\SDK\Mseap\V20210118\Models\BusinessLicenseOcrResponse;
use AlibabaCloud\SDK\Mseap\V20210118\Models\CertificateQualityRequest;
use AlibabaCloud\SDK\Mseap\V20210118\Models\CertificateQualityResponse;
use AlibabaCloud\SDK\Mseap\V20210118\Models\DescribeAgreementStatusRequest;
use AlibabaCloud\SDK\Mseap\V20210118\Models\DescribeAgreementStatusResponse;
use AlibabaCloud\SDK\Mseap\V20210118\Models\IdentityCardOcrRequest;
use AlibabaCloud\SDK\Mseap\V20210118\Models\IdentityCardOcrResponse;
use AlibabaCloud\SDK\Mseap\V20210118\Models\UpdateAgreementStatusRequest;
use AlibabaCloud\SDK\Mseap\V20210118\Models\UpdateAgreementStatusResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

class Mseap extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('mseap', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param ActivateLicenseRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ActivateLicenseResponse
     */
    public function activateLicenseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ActivateLicenseResponse::fromMap($this->doRPCRequest('ActivateLicense', '2021-01-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ActivateLicenseRequest $request
     *
     * @return ActivateLicenseResponse
     */
    public function activateLicense($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->activateLicenseWithOptions($request, $runtime);
    }

    /**
     * @param BusinessLicenseOcrRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return BusinessLicenseOcrResponse
     */
    public function businessLicenseOcrWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return BusinessLicenseOcrResponse::fromMap($this->doRPCRequest('BusinessLicenseOcr', '2021-01-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param BusinessLicenseOcrRequest $request
     *
     * @return BusinessLicenseOcrResponse
     */
    public function businessLicenseOcr($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->businessLicenseOcrWithOptions($request, $runtime);
    }

    /**
     * @param CertificateQualityRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CertificateQualityResponse
     */
    public function certificateQualityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CertificateQualityResponse::fromMap($this->doRPCRequest('CertificateQuality', '2021-01-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CertificateQualityRequest $request
     *
     * @return CertificateQualityResponse
     */
    public function certificateQuality($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->certificateQualityWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAgreementStatusRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeAgreementStatusResponse
     */
    public function describeAgreementStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeAgreementStatusResponse::fromMap($this->doRPCRequest('DescribeAgreementStatus', '2021-01-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeAgreementStatusRequest $request
     *
     * @return DescribeAgreementStatusResponse
     */
    public function describeAgreementStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAgreementStatusWithOptions($request, $runtime);
    }

    /**
     * @param IdentityCardOcrRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return IdentityCardOcrResponse
     */
    public function identityCardOcrWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return IdentityCardOcrResponse::fromMap($this->doRPCRequest('IdentityCardOcr', '2021-01-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param IdentityCardOcrRequest $request
     *
     * @return IdentityCardOcrResponse
     */
    public function identityCardOcr($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->identityCardOcrWithOptions($request, $runtime);
    }

    /**
     * @param UpdateAgreementStatusRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateAgreementStatusResponse
     */
    public function updateAgreementStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateAgreementStatusResponse::fromMap($this->doRPCRequest('UpdateAgreementStatus', '2021-01-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateAgreementStatusRequest $request
     *
     * @return UpdateAgreementStatusResponse
     */
    public function updateAgreementStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAgreementStatusWithOptions($request, $runtime);
    }
}
