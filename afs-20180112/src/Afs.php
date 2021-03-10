<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Afs\V20180112;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\Afs\V20180112\Models\AnalyzeNvcRequest;
use AlibabaCloud\SDK\Afs\V20180112\Models\AnalyzeNvcResponse;
use AlibabaCloud\SDK\Afs\V20180112\Models\AuthenticateSigRequest;
use AlibabaCloud\SDK\Afs\V20180112\Models\AuthenticateSigResponse;
use AlibabaCloud\SDK\Afs\V20180112\Models\ConfigurationStyleRequest;
use AlibabaCloud\SDK\Afs\V20180112\Models\ConfigurationStyleResponse;
use AlibabaCloud\SDK\Afs\V20180112\Models\CreateConfigurationRequest;
use AlibabaCloud\SDK\Afs\V20180112\Models\CreateConfigurationResponse;
use AlibabaCloud\SDK\Afs\V20180112\Models\DescribeAfsConfigNameRequest;
use AlibabaCloud\SDK\Afs\V20180112\Models\DescribeAfsConfigNameResponse;
use AlibabaCloud\SDK\Afs\V20180112\Models\DescribeAfsOneConfDataRequest;
use AlibabaCloud\SDK\Afs\V20180112\Models\DescribeAfsOneConfDataResponse;
use AlibabaCloud\SDK\Afs\V20180112\Models\DescribeAfsTotalConfDataRequest;
use AlibabaCloud\SDK\Afs\V20180112\Models\DescribeAfsTotalConfDataResponse;
use AlibabaCloud\SDK\Afs\V20180112\Models\DescribeAfsVerifySigDataRequest;
use AlibabaCloud\SDK\Afs\V20180112\Models\DescribeAfsVerifySigDataResponse;
use AlibabaCloud\SDK\Afs\V20180112\Models\DescribeCaptchaDayRequest;
use AlibabaCloud\SDK\Afs\V20180112\Models\DescribeCaptchaDayResponse;
use AlibabaCloud\SDK\Afs\V20180112\Models\DescribeCaptchaIpCityRequest;
use AlibabaCloud\SDK\Afs\V20180112\Models\DescribeCaptchaIpCityResponse;
use AlibabaCloud\SDK\Afs\V20180112\Models\DescribeCaptchaMinRequest;
use AlibabaCloud\SDK\Afs\V20180112\Models\DescribeCaptchaMinResponse;
use AlibabaCloud\SDK\Afs\V20180112\Models\DescribeCaptchaOrderRequest;
use AlibabaCloud\SDK\Afs\V20180112\Models\DescribeCaptchaOrderResponse;
use AlibabaCloud\SDK\Afs\V20180112\Models\DescribeCaptchaRiskRequest;
use AlibabaCloud\SDK\Afs\V20180112\Models\DescribeCaptchaRiskResponse;
use AlibabaCloud\SDK\Afs\V20180112\Models\DescribeConfigNameRequest;
use AlibabaCloud\SDK\Afs\V20180112\Models\DescribeConfigNameResponse;
use AlibabaCloud\SDK\Afs\V20180112\Models\DescribeEarlyWarningRequest;
use AlibabaCloud\SDK\Afs\V20180112\Models\DescribeEarlyWarningResponse;
use AlibabaCloud\SDK\Afs\V20180112\Models\DescribeOrderInfoRequest;
use AlibabaCloud\SDK\Afs\V20180112\Models\DescribeOrderInfoResponse;
use AlibabaCloud\SDK\Afs\V20180112\Models\DescribePersonMachineListRequest;
use AlibabaCloud\SDK\Afs\V20180112\Models\DescribePersonMachineListResponse;
use AlibabaCloud\SDK\Afs\V20180112\Models\SetEarlyWarningRequest;
use AlibabaCloud\SDK\Afs\V20180112\Models\SetEarlyWarningResponse;
use AlibabaCloud\SDK\Afs\V20180112\Models\UpdateConfigNameRequest;
use AlibabaCloud\SDK\Afs\V20180112\Models\UpdateConfigNameResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

class Afs extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'ap-northeast-1'              => 'afs.aliyuncs.com',
            'ap-northeast-2-pop'          => 'afs.aliyuncs.com',
            'ap-south-1'                  => 'afs.aliyuncs.com',
            'ap-southeast-1'              => 'afs.aliyuncs.com',
            'ap-southeast-2'              => 'afs.aliyuncs.com',
            'ap-southeast-3'              => 'afs.aliyuncs.com',
            'ap-southeast-5'              => 'afs.aliyuncs.com',
            'cn-beijing'                  => 'afs.aliyuncs.com',
            'cn-beijing-finance-1'        => 'afs.aliyuncs.com',
            'cn-beijing-finance-pop'      => 'afs.aliyuncs.com',
            'cn-beijing-gov-1'            => 'afs.aliyuncs.com',
            'cn-beijing-nu16-b01'         => 'afs.aliyuncs.com',
            'cn-chengdu'                  => 'afs.aliyuncs.com',
            'cn-edge-1'                   => 'afs.aliyuncs.com',
            'cn-fujian'                   => 'afs.aliyuncs.com',
            'cn-haidian-cm12-c01'         => 'afs.aliyuncs.com',
            'cn-hangzhou-bj-b01'          => 'afs.aliyuncs.com',
            'cn-hangzhou-finance'         => 'afs.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'afs.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'afs.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'afs.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'afs.aliyuncs.com',
            'cn-hangzhou-test-306'        => 'afs.aliyuncs.com',
            'cn-hongkong'                 => 'afs.aliyuncs.com',
            'cn-hongkong-finance-pop'     => 'afs.aliyuncs.com',
            'cn-huhehaote'                => 'afs.aliyuncs.com',
            'cn-north-2-gov-1'            => 'afs.aliyuncs.com',
            'cn-qingdao'                  => 'afs.aliyuncs.com',
            'cn-qingdao-nebula'           => 'afs.aliyuncs.com',
            'cn-shanghai'                 => 'afs.aliyuncs.com',
            'cn-shanghai-et15-b01'        => 'afs.aliyuncs.com',
            'cn-shanghai-et2-b01'         => 'afs.aliyuncs.com',
            'cn-shanghai-finance-1'       => 'afs.aliyuncs.com',
            'cn-shanghai-inner'           => 'afs.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'afs.aliyuncs.com',
            'cn-shenzhen'                 => 'afs.aliyuncs.com',
            'cn-shenzhen-finance-1'       => 'afs.aliyuncs.com',
            'cn-shenzhen-inner'           => 'afs.aliyuncs.com',
            'cn-shenzhen-st4-d01'         => 'afs.aliyuncs.com',
            'cn-shenzhen-su18-b01'        => 'afs.aliyuncs.com',
            'cn-wuhan'                    => 'afs.aliyuncs.com',
            'cn-yushanfang'               => 'afs.aliyuncs.com',
            'cn-zhangbei-na61-b01'        => 'afs.aliyuncs.com',
            'cn-zhangjiakou'              => 'afs.aliyuncs.com',
            'cn-zhangjiakou-na62-a01'     => 'afs.aliyuncs.com',
            'cn-zhengzhou-nebula-1'       => 'afs.aliyuncs.com',
            'eu-central-1'                => 'afs.aliyuncs.com',
            'eu-west-1'                   => 'afs.aliyuncs.com',
            'eu-west-1-oxs'               => 'afs.aliyuncs.com',
            'me-east-1'                   => 'afs.aliyuncs.com',
            'rus-west-1-pop'              => 'afs.aliyuncs.com',
            'us-east-1'                   => 'afs.aliyuncs.com',
            'us-west-1'                   => 'afs.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('afs', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param AnalyzeNvcRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return AnalyzeNvcResponse
     */
    public function analyzeNvcWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AnalyzeNvcResponse::fromMap($this->doRPCRequest('AnalyzeNvc', '2018-01-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AnalyzeNvcRequest $request
     *
     * @return AnalyzeNvcResponse
     */
    public function analyzeNvc($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->analyzeNvcWithOptions($request, $runtime);
    }

    /**
     * @param AuthenticateSigRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return AuthenticateSigResponse
     */
    public function authenticateSigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AuthenticateSigResponse::fromMap($this->doRPCRequest('AuthenticateSig', '2018-01-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AuthenticateSigRequest $request
     *
     * @return AuthenticateSigResponse
     */
    public function authenticateSig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->authenticateSigWithOptions($request, $runtime);
    }

    /**
     * @param ConfigurationStyleRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ConfigurationStyleResponse
     */
    public function configurationStyleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ConfigurationStyleResponse::fromMap($this->doRPCRequest('ConfigurationStyle', '2018-01-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ConfigurationStyleRequest $request
     *
     * @return ConfigurationStyleResponse
     */
    public function configurationStyle($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->configurationStyleWithOptions($request, $runtime);
    }

    /**
     * @param CreateConfigurationRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateConfigurationResponse
     */
    public function createConfigurationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateConfigurationResponse::fromMap($this->doRPCRequest('CreateConfiguration', '2018-01-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateConfigurationRequest $request
     *
     * @return CreateConfigurationResponse
     */
    public function createConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createConfigurationWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAfsConfigNameRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeAfsConfigNameResponse
     */
    public function describeAfsConfigNameWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeAfsConfigNameResponse::fromMap($this->doRPCRequest('DescribeAfsConfigName', '2018-01-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeAfsConfigNameRequest $request
     *
     * @return DescribeAfsConfigNameResponse
     */
    public function describeAfsConfigName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAfsConfigNameWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAfsOneConfDataRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeAfsOneConfDataResponse
     */
    public function describeAfsOneConfDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeAfsOneConfDataResponse::fromMap($this->doRPCRequest('DescribeAfsOneConfData', '2018-01-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeAfsOneConfDataRequest $request
     *
     * @return DescribeAfsOneConfDataResponse
     */
    public function describeAfsOneConfData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAfsOneConfDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAfsTotalConfDataRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeAfsTotalConfDataResponse
     */
    public function describeAfsTotalConfDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeAfsTotalConfDataResponse::fromMap($this->doRPCRequest('DescribeAfsTotalConfData', '2018-01-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeAfsTotalConfDataRequest $request
     *
     * @return DescribeAfsTotalConfDataResponse
     */
    public function describeAfsTotalConfData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAfsTotalConfDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAfsVerifySigDataRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeAfsVerifySigDataResponse
     */
    public function describeAfsVerifySigDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeAfsVerifySigDataResponse::fromMap($this->doRPCRequest('DescribeAfsVerifySigData', '2018-01-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeAfsVerifySigDataRequest $request
     *
     * @return DescribeAfsVerifySigDataResponse
     */
    public function describeAfsVerifySigData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAfsVerifySigDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCaptchaDayRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeCaptchaDayResponse
     */
    public function describeCaptchaDayWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeCaptchaDayResponse::fromMap($this->doRPCRequest('DescribeCaptchaDay', '2018-01-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeCaptchaDayRequest $request
     *
     * @return DescribeCaptchaDayResponse
     */
    public function describeCaptchaDay($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCaptchaDayWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCaptchaIpCityRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeCaptchaIpCityResponse
     */
    public function describeCaptchaIpCityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeCaptchaIpCityResponse::fromMap($this->doRPCRequest('DescribeCaptchaIpCity', '2018-01-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeCaptchaIpCityRequest $request
     *
     * @return DescribeCaptchaIpCityResponse
     */
    public function describeCaptchaIpCity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCaptchaIpCityWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCaptchaMinRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeCaptchaMinResponse
     */
    public function describeCaptchaMinWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeCaptchaMinResponse::fromMap($this->doRPCRequest('DescribeCaptchaMin', '2018-01-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeCaptchaMinRequest $request
     *
     * @return DescribeCaptchaMinResponse
     */
    public function describeCaptchaMin($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCaptchaMinWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCaptchaOrderRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeCaptchaOrderResponse
     */
    public function describeCaptchaOrderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeCaptchaOrderResponse::fromMap($this->doRPCRequest('DescribeCaptchaOrder', '2018-01-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeCaptchaOrderRequest $request
     *
     * @return DescribeCaptchaOrderResponse
     */
    public function describeCaptchaOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCaptchaOrderWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCaptchaRiskRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeCaptchaRiskResponse
     */
    public function describeCaptchaRiskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeCaptchaRiskResponse::fromMap($this->doRPCRequest('DescribeCaptchaRisk', '2018-01-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeCaptchaRiskRequest $request
     *
     * @return DescribeCaptchaRiskResponse
     */
    public function describeCaptchaRisk($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCaptchaRiskWithOptions($request, $runtime);
    }

    /**
     * @param DescribeConfigNameRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeConfigNameResponse
     */
    public function describeConfigNameWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeConfigNameResponse::fromMap($this->doRPCRequest('DescribeConfigName', '2018-01-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeConfigNameRequest $request
     *
     * @return DescribeConfigNameResponse
     */
    public function describeConfigName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeConfigNameWithOptions($request, $runtime);
    }

    /**
     * @param DescribeEarlyWarningRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeEarlyWarningResponse
     */
    public function describeEarlyWarningWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeEarlyWarningResponse::fromMap($this->doRPCRequest('DescribeEarlyWarning', '2018-01-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeEarlyWarningRequest $request
     *
     * @return DescribeEarlyWarningResponse
     */
    public function describeEarlyWarning($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEarlyWarningWithOptions($request, $runtime);
    }

    /**
     * @param DescribeOrderInfoRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeOrderInfoResponse
     */
    public function describeOrderInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeOrderInfoResponse::fromMap($this->doRPCRequest('DescribeOrderInfo', '2018-01-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeOrderInfoRequest $request
     *
     * @return DescribeOrderInfoResponse
     */
    public function describeOrderInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeOrderInfoWithOptions($request, $runtime);
    }

    /**
     * @param DescribePersonMachineListRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribePersonMachineListResponse
     */
    public function describePersonMachineListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribePersonMachineListResponse::fromMap($this->doRPCRequest('DescribePersonMachineList', '2018-01-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribePersonMachineListRequest $request
     *
     * @return DescribePersonMachineListResponse
     */
    public function describePersonMachineList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePersonMachineListWithOptions($request, $runtime);
    }

    /**
     * @param SetEarlyWarningRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return SetEarlyWarningResponse
     */
    public function setEarlyWarningWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SetEarlyWarningResponse::fromMap($this->doRPCRequest('SetEarlyWarning', '2018-01-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SetEarlyWarningRequest $request
     *
     * @return SetEarlyWarningResponse
     */
    public function setEarlyWarning($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setEarlyWarningWithOptions($request, $runtime);
    }

    /**
     * @param UpdateConfigNameRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateConfigNameResponse
     */
    public function updateConfigNameWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateConfigNameResponse::fromMap($this->doRPCRequest('UpdateConfigName', '2018-01-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateConfigNameRequest $request
     *
     * @return UpdateConfigNameResponse
     */
    public function updateConfigName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateConfigNameWithOptions($request, $runtime);
    }
}
