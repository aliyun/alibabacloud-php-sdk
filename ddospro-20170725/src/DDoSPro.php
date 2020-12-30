<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DDoSPro\V20170725;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\DDoSPro\V20170725\Models\ConfigSwitchPriorityRequest;
use AlibabaCloud\SDK\DDoSPro\V20170725\Models\ConfigSwitchPriorityResponse;
use AlibabaCloud\SDK\DDoSPro\V20170725\Models\CreateCcCustomedRuleRequest;
use AlibabaCloud\SDK\DDoSPro\V20170725\Models\CreateCcCustomedRuleResponse;
use AlibabaCloud\SDK\DDoSPro\V20170725\Models\CreateDomainRequest;
use AlibabaCloud\SDK\DDoSPro\V20170725\Models\CreateDomainResponse;
use AlibabaCloud\SDK\DDoSPro\V20170725\Models\CreatePortRuleRequest;
use AlibabaCloud\SDK\DDoSPro\V20170725\Models\CreatePortRuleResponse;
use AlibabaCloud\SDK\DDoSPro\V20170725\Models\CreateTransmitLineRequest;
use AlibabaCloud\SDK\DDoSPro\V20170725\Models\CreateTransmitLineResponse;
use AlibabaCloud\SDK\DDoSPro\V20170725\Models\DeleteCcCustomedRuleRequest;
use AlibabaCloud\SDK\DDoSPro\V20170725\Models\DeleteCcCustomedRuleResponse;
use AlibabaCloud\SDK\DDoSPro\V20170725\Models\DeleteDomainRequest;
use AlibabaCloud\SDK\DDoSPro\V20170725\Models\DeleteDomainResponse;
use AlibabaCloud\SDK\DDoSPro\V20170725\Models\DeletePortRuleRequest;
use AlibabaCloud\SDK\DDoSPro\V20170725\Models\DeletePortRuleResponse;
use AlibabaCloud\SDK\DDoSPro\V20170725\Models\DeleteTransmitLineRequest;
use AlibabaCloud\SDK\DDoSPro\V20170725\Models\DeleteTransmitLineResponse;
use AlibabaCloud\SDK\DDoSPro\V20170725\Models\DescribeBackSourceCidrRequest;
use AlibabaCloud\SDK\DDoSPro\V20170725\Models\DescribeBackSourceCidrResponse;
use AlibabaCloud\SDK\DDoSPro\V20170725\Models\DescribeBizFlowRequest;
use AlibabaCloud\SDK\DDoSPro\V20170725\Models\DescribeBizFlowResponse;
use AlibabaCloud\SDK\DDoSPro\V20170725\Models\DescribeCcEventsRequest;
use AlibabaCloud\SDK\DDoSPro\V20170725\Models\DescribeCcEventsResponse;
use AlibabaCloud\SDK\DDoSPro\V20170725\Models\DescribeCnameAutoStatusRequest;
use AlibabaCloud\SDK\DDoSPro\V20170725\Models\DescribeCnameAutoStatusResponse;
use AlibabaCloud\SDK\DDoSPro\V20170725\Models\DescribeDdosAttackEventSourceIpsRequest;
use AlibabaCloud\SDK\DDoSPro\V20170725\Models\DescribeDdosAttackEventSourceIpsResponse;
use AlibabaCloud\SDK\DDoSPro\V20170725\Models\DescribeDdosAttackEventsRequest;
use AlibabaCloud\SDK\DDoSPro\V20170725\Models\DescribeDdosAttackEventsResponse;
use AlibabaCloud\SDK\DDoSPro\V20170725\Models\DescribeDdosAttackTypeChartRequest;
use AlibabaCloud\SDK\DDoSPro\V20170725\Models\DescribeDdosAttackTypeChartResponse;
use AlibabaCloud\SDK\DDoSPro\V20170725\Models\DescribeDdosFlowProportionDiagramRequest;
use AlibabaCloud\SDK\DDoSPro\V20170725\Models\DescribeDdosFlowProportionDiagramResponse;
use AlibabaCloud\SDK\DDoSPro\V20170725\Models\DescribeDdosIpConfigRequest;
use AlibabaCloud\SDK\DDoSPro\V20170725\Models\DescribeDdosIpConfigResponse;
use AlibabaCloud\SDK\DDoSPro\V20170725\Models\DescribeDdosPeakFlowRequest;
use AlibabaCloud\SDK\DDoSPro\V20170725\Models\DescribeDdosPeakFlowResponse;
use AlibabaCloud\SDK\DDoSPro\V20170725\Models\DescribeDomainConfigPageRequest;
use AlibabaCloud\SDK\DDoSPro\V20170725\Models\DescribeDomainConfigPageResponse;
use AlibabaCloud\SDK\DDoSPro\V20170725\Models\DescribeDomainSecurityConfigRequest;
use AlibabaCloud\SDK\DDoSPro\V20170725\Models\DescribeDomainSecurityConfigResponse;
use AlibabaCloud\SDK\DDoSPro\V20170725\Models\DescribeHealthCheckConfigRequest;
use AlibabaCloud\SDK\DDoSPro\V20170725\Models\DescribeHealthCheckConfigResponse;
use AlibabaCloud\SDK\DDoSPro\V20170725\Models\DescribeInstancePageRequest;
use AlibabaCloud\SDK\DDoSPro\V20170725\Models\DescribeInstancePageResponse;
use AlibabaCloud\SDK\DDoSPro\V20170725\Models\DescribePortRulePageRequest;
use AlibabaCloud\SDK\DDoSPro\V20170725\Models\DescribePortRulePageResponse;
use AlibabaCloud\SDK\DDoSPro\V20170725\Models\ListCcCustomedRuleRequest;
use AlibabaCloud\SDK\DDoSPro\V20170725\Models\ListCcCustomedRuleResponse;
use AlibabaCloud\SDK\DDoSPro\V20170725\Models\ModifyCcCustomStatusRequest;
use AlibabaCloud\SDK\DDoSPro\V20170725\Models\ModifyCcCustomStatusResponse;
use AlibabaCloud\SDK\DDoSPro\V20170725\Models\ModifyCcStatusRequest;
use AlibabaCloud\SDK\DDoSPro\V20170725\Models\ModifyCcStatusResponse;
use AlibabaCloud\SDK\DDoSPro\V20170725\Models\ModifyCcTemplateRequest;
use AlibabaCloud\SDK\DDoSPro\V20170725\Models\ModifyCcTemplateResponse;
use AlibabaCloud\SDK\DDoSPro\V20170725\Models\ModifyDDoSProtectConfigRequest;
use AlibabaCloud\SDK\DDoSPro\V20170725\Models\ModifyDDoSProtectConfigResponse;
use AlibabaCloud\SDK\DDoSPro\V20170725\Models\ModifyDomainBlackWhiteListRequest;
use AlibabaCloud\SDK\DDoSPro\V20170725\Models\ModifyDomainBlackWhiteListResponse;
use AlibabaCloud\SDK\DDoSPro\V20170725\Models\ModifyDomainProxyRequest;
use AlibabaCloud\SDK\DDoSPro\V20170725\Models\ModifyDomainProxyResponse;
use AlibabaCloud\SDK\DDoSPro\V20170725\Models\ModifyElasticBandwidthRequest;
use AlibabaCloud\SDK\DDoSPro\V20170725\Models\ModifyElasticBandwidthResponse;
use AlibabaCloud\SDK\DDoSPro\V20170725\Models\ModifyHealthCheckConfigRequest;
use AlibabaCloud\SDK\DDoSPro\V20170725\Models\ModifyHealthCheckConfigResponse;
use AlibabaCloud\SDK\DDoSPro\V20170725\Models\ModifyIpCnameStatusRequest;
use AlibabaCloud\SDK\DDoSPro\V20170725\Models\ModifyIpCnameStatusResponse;
use AlibabaCloud\SDK\DDoSPro\V20170725\Models\ModifyPersistenceTimeOutRequest;
use AlibabaCloud\SDK\DDoSPro\V20170725\Models\ModifyPersistenceTimeOutResponse;
use AlibabaCloud\SDK\DDoSPro\V20170725\Models\ModifyRealServersRequest;
use AlibabaCloud\SDK\DDoSPro\V20170725\Models\ModifyRealServersResponse;
use AlibabaCloud\SDK\DDoSPro\V20170725\Models\ModifyTransmitLineRequest;
use AlibabaCloud\SDK\DDoSPro\V20170725\Models\ModifyTransmitLineResponse;
use AlibabaCloud\SDK\DDoSPro\V20170725\Models\UpdateCcCustomedRuleRequest;
use AlibabaCloud\SDK\DDoSPro\V20170725\Models\UpdateCcCustomedRuleResponse;
use AlibabaCloud\SDK\DDoSPro\V20170725\Models\UpdatePortRuleRequest;
use AlibabaCloud\SDK\DDoSPro\V20170725\Models\UpdatePortRuleResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

class DDoSPro extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('ddospro', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param ConfigSwitchPriorityRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ConfigSwitchPriorityResponse
     */
    public function configSwitchPriorityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ConfigSwitchPriorityResponse::fromMap($this->doRPCRequest('ConfigSwitchPriority', '2017-07-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ConfigSwitchPriorityRequest $request
     *
     * @return ConfigSwitchPriorityResponse
     */
    public function configSwitchPriority($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->configSwitchPriorityWithOptions($request, $runtime);
    }

    /**
     * @param CreateCcCustomedRuleRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateCcCustomedRuleResponse
     */
    public function createCcCustomedRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateCcCustomedRuleResponse::fromMap($this->doRPCRequest('CreateCcCustomedRule', '2017-07-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateCcCustomedRuleRequest $request
     *
     * @return CreateCcCustomedRuleResponse
     */
    public function createCcCustomedRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCcCustomedRuleWithOptions($request, $runtime);
    }

    /**
     * @param CreateDomainRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CreateDomainResponse
     */
    public function createDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateDomainResponse::fromMap($this->doRPCRequest('CreateDomain', '2017-07-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateDomainRequest $request
     *
     * @return CreateDomainResponse
     */
    public function createDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDomainWithOptions($request, $runtime);
    }

    /**
     * @param CreatePortRuleRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreatePortRuleResponse
     */
    public function createPortRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreatePortRuleResponse::fromMap($this->doRPCRequest('CreatePortRule', '2017-07-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreatePortRuleRequest $request
     *
     * @return CreatePortRuleResponse
     */
    public function createPortRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPortRuleWithOptions($request, $runtime);
    }

    /**
     * @param CreateTransmitLineRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateTransmitLineResponse
     */
    public function createTransmitLineWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateTransmitLineResponse::fromMap($this->doRPCRequest('CreateTransmitLine', '2017-07-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateTransmitLineRequest $request
     *
     * @return CreateTransmitLineResponse
     */
    public function createTransmitLine($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTransmitLineWithOptions($request, $runtime);
    }

    /**
     * @param DeleteCcCustomedRuleRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteCcCustomedRuleResponse
     */
    public function deleteCcCustomedRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteCcCustomedRuleResponse::fromMap($this->doRPCRequest('DeleteCcCustomedRule', '2017-07-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteCcCustomedRuleRequest $request
     *
     * @return DeleteCcCustomedRuleResponse
     */
    public function deleteCcCustomedRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCcCustomedRuleWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDomainRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteDomainResponse
     */
    public function deleteDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteDomainResponse::fromMap($this->doRPCRequest('DeleteDomain', '2017-07-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteDomainRequest $request
     *
     * @return DeleteDomainResponse
     */
    public function deleteDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDomainWithOptions($request, $runtime);
    }

    /**
     * @param DeletePortRuleRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeletePortRuleResponse
     */
    public function deletePortRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeletePortRuleResponse::fromMap($this->doRPCRequest('DeletePortRule', '2017-07-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeletePortRuleRequest $request
     *
     * @return DeletePortRuleResponse
     */
    public function deletePortRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deletePortRuleWithOptions($request, $runtime);
    }

    /**
     * @param DeleteTransmitLineRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteTransmitLineResponse
     */
    public function deleteTransmitLineWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteTransmitLineResponse::fromMap($this->doRPCRequest('DeleteTransmitLine', '2017-07-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteTransmitLineRequest $request
     *
     * @return DeleteTransmitLineResponse
     */
    public function deleteTransmitLine($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTransmitLineWithOptions($request, $runtime);
    }

    /**
     * @param DescribeBackSourceCidrRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeBackSourceCidrResponse
     */
    public function describeBackSourceCidrWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeBackSourceCidrResponse::fromMap($this->doRPCRequest('DescribeBackSourceCidr', '2017-07-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeBackSourceCidrRequest $request
     *
     * @return DescribeBackSourceCidrResponse
     */
    public function describeBackSourceCidr($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBackSourceCidrWithOptions($request, $runtime);
    }

    /**
     * @param DescribeBizFlowRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeBizFlowResponse
     */
    public function describeBizFlowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeBizFlowResponse::fromMap($this->doRPCRequest('DescribeBizFlow', '2017-07-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeBizFlowRequest $request
     *
     * @return DescribeBizFlowResponse
     */
    public function describeBizFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBizFlowWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCcEventsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeCcEventsResponse
     */
    public function describeCcEventsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeCcEventsResponse::fromMap($this->doRPCRequest('DescribeCcEvents', '2017-07-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeCcEventsRequest $request
     *
     * @return DescribeCcEventsResponse
     */
    public function describeCcEvents($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCcEventsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCnameAutoStatusRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeCnameAutoStatusResponse
     */
    public function describeCnameAutoStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeCnameAutoStatusResponse::fromMap($this->doRPCRequest('DescribeCnameAutoStatus', '2017-07-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeCnameAutoStatusRequest $request
     *
     * @return DescribeCnameAutoStatusResponse
     */
    public function describeCnameAutoStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCnameAutoStatusWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDdosAttackEventsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeDdosAttackEventsResponse
     */
    public function describeDdosAttackEventsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDdosAttackEventsResponse::fromMap($this->doRPCRequest('DescribeDdosAttackEvents', '2017-07-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeDdosAttackEventsRequest $request
     *
     * @return DescribeDdosAttackEventsResponse
     */
    public function describeDdosAttackEvents($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDdosAttackEventsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDdosAttackEventSourceIpsRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeDdosAttackEventSourceIpsResponse
     */
    public function describeDdosAttackEventSourceIpsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDdosAttackEventSourceIpsResponse::fromMap($this->doRPCRequest('DescribeDdosAttackEventSourceIps', '2017-07-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeDdosAttackEventSourceIpsRequest $request
     *
     * @return DescribeDdosAttackEventSourceIpsResponse
     */
    public function describeDdosAttackEventSourceIps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDdosAttackEventSourceIpsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDdosAttackTypeChartRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeDdosAttackTypeChartResponse
     */
    public function describeDdosAttackTypeChartWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDdosAttackTypeChartResponse::fromMap($this->doRPCRequest('DescribeDdosAttackTypeChart', '2017-07-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeDdosAttackTypeChartRequest $request
     *
     * @return DescribeDdosAttackTypeChartResponse
     */
    public function describeDdosAttackTypeChart($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDdosAttackTypeChartWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDdosFlowProportionDiagramRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeDdosFlowProportionDiagramResponse
     */
    public function describeDdosFlowProportionDiagramWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDdosFlowProportionDiagramResponse::fromMap($this->doRPCRequest('DescribeDdosFlowProportionDiagram', '2017-07-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeDdosFlowProportionDiagramRequest $request
     *
     * @return DescribeDdosFlowProportionDiagramResponse
     */
    public function describeDdosFlowProportionDiagram($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDdosFlowProportionDiagramWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDdosIpConfigRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeDdosIpConfigResponse
     */
    public function describeDdosIpConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDdosIpConfigResponse::fromMap($this->doRPCRequest('DescribeDdosIpConfig', '2017-07-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeDdosIpConfigRequest $request
     *
     * @return DescribeDdosIpConfigResponse
     */
    public function describeDdosIpConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDdosIpConfigWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDdosPeakFlowRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeDdosPeakFlowResponse
     */
    public function describeDdosPeakFlowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDdosPeakFlowResponse::fromMap($this->doRPCRequest('DescribeDdosPeakFlow', '2017-07-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeDdosPeakFlowRequest $request
     *
     * @return DescribeDdosPeakFlowResponse
     */
    public function describeDdosPeakFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDdosPeakFlowWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDomainConfigPageRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeDomainConfigPageResponse
     */
    public function describeDomainConfigPageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDomainConfigPageResponse::fromMap($this->doRPCRequest('DescribeDomainConfigPage', '2017-07-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeDomainConfigPageRequest $request
     *
     * @return DescribeDomainConfigPageResponse
     */
    public function describeDomainConfigPage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainConfigPageWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDomainSecurityConfigRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeDomainSecurityConfigResponse
     */
    public function describeDomainSecurityConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDomainSecurityConfigResponse::fromMap($this->doRPCRequest('DescribeDomainSecurityConfig', '2017-07-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeDomainSecurityConfigRequest $request
     *
     * @return DescribeDomainSecurityConfigResponse
     */
    public function describeDomainSecurityConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainSecurityConfigWithOptions($request, $runtime);
    }

    /**
     * @param DescribeHealthCheckConfigRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeHealthCheckConfigResponse
     */
    public function describeHealthCheckConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeHealthCheckConfigResponse::fromMap($this->doRPCRequest('DescribeHealthCheckConfig', '2017-07-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeHealthCheckConfigRequest $request
     *
     * @return DescribeHealthCheckConfigResponse
     */
    public function describeHealthCheckConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHealthCheckConfigWithOptions($request, $runtime);
    }

    /**
     * @param DescribeInstancePageRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeInstancePageResponse
     */
    public function describeInstancePageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeInstancePageResponse::fromMap($this->doRPCRequest('DescribeInstancePage', '2017-07-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeInstancePageRequest $request
     *
     * @return DescribeInstancePageResponse
     */
    public function describeInstancePage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstancePageWithOptions($request, $runtime);
    }

    /**
     * @param DescribePortRulePageRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribePortRulePageResponse
     */
    public function describePortRulePageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribePortRulePageResponse::fromMap($this->doRPCRequest('DescribePortRulePage', '2017-07-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribePortRulePageRequest $request
     *
     * @return DescribePortRulePageResponse
     */
    public function describePortRulePage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePortRulePageWithOptions($request, $runtime);
    }

    /**
     * @param ListCcCustomedRuleRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListCcCustomedRuleResponse
     */
    public function listCcCustomedRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListCcCustomedRuleResponse::fromMap($this->doRPCRequest('ListCcCustomedRule', '2017-07-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListCcCustomedRuleRequest $request
     *
     * @return ListCcCustomedRuleResponse
     */
    public function listCcCustomedRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCcCustomedRuleWithOptions($request, $runtime);
    }

    /**
     * @param ModifyCcCustomStatusRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ModifyCcCustomStatusResponse
     */
    public function modifyCcCustomStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyCcCustomStatusResponse::fromMap($this->doRPCRequest('ModifyCcCustomStatus', '2017-07-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyCcCustomStatusRequest $request
     *
     * @return ModifyCcCustomStatusResponse
     */
    public function modifyCcCustomStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyCcCustomStatusWithOptions($request, $runtime);
    }

    /**
     * @param ModifyCcStatusRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ModifyCcStatusResponse
     */
    public function modifyCcStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyCcStatusResponse::fromMap($this->doRPCRequest('ModifyCcStatus', '2017-07-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyCcStatusRequest $request
     *
     * @return ModifyCcStatusResponse
     */
    public function modifyCcStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyCcStatusWithOptions($request, $runtime);
    }

    /**
     * @param ModifyCcTemplateRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ModifyCcTemplateResponse
     */
    public function modifyCcTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyCcTemplateResponse::fromMap($this->doRPCRequest('ModifyCcTemplate', '2017-07-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyCcTemplateRequest $request
     *
     * @return ModifyCcTemplateResponse
     */
    public function modifyCcTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyCcTemplateWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDDoSProtectConfigRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ModifyDDoSProtectConfigResponse
     */
    public function modifyDDoSProtectConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyDDoSProtectConfigResponse::fromMap($this->doRPCRequest('ModifyDDoSProtectConfig', '2017-07-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyDDoSProtectConfigRequest $request
     *
     * @return ModifyDDoSProtectConfigResponse
     */
    public function modifyDDoSProtectConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDDoSProtectConfigWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDomainBlackWhiteListRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ModifyDomainBlackWhiteListResponse
     */
    public function modifyDomainBlackWhiteListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyDomainBlackWhiteListResponse::fromMap($this->doRPCRequest('ModifyDomainBlackWhiteList', '2017-07-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyDomainBlackWhiteListRequest $request
     *
     * @return ModifyDomainBlackWhiteListResponse
     */
    public function modifyDomainBlackWhiteList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDomainBlackWhiteListWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDomainProxyRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ModifyDomainProxyResponse
     */
    public function modifyDomainProxyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyDomainProxyResponse::fromMap($this->doRPCRequest('ModifyDomainProxy', '2017-07-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyDomainProxyRequest $request
     *
     * @return ModifyDomainProxyResponse
     */
    public function modifyDomainProxy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDomainProxyWithOptions($request, $runtime);
    }

    /**
     * @param ModifyElasticBandwidthRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ModifyElasticBandwidthResponse
     */
    public function modifyElasticBandwidthWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyElasticBandwidthResponse::fromMap($this->doRPCRequest('ModifyElasticBandwidth', '2017-07-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyElasticBandwidthRequest $request
     *
     * @return ModifyElasticBandwidthResponse
     */
    public function modifyElasticBandwidth($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyElasticBandwidthWithOptions($request, $runtime);
    }

    /**
     * @param ModifyHealthCheckConfigRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ModifyHealthCheckConfigResponse
     */
    public function modifyHealthCheckConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyHealthCheckConfigResponse::fromMap($this->doRPCRequest('ModifyHealthCheckConfig', '2017-07-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyHealthCheckConfigRequest $request
     *
     * @return ModifyHealthCheckConfigResponse
     */
    public function modifyHealthCheckConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyHealthCheckConfigWithOptions($request, $runtime);
    }

    /**
     * @param ModifyIpCnameStatusRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ModifyIpCnameStatusResponse
     */
    public function modifyIpCnameStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyIpCnameStatusResponse::fromMap($this->doRPCRequest('ModifyIpCnameStatus', '2017-07-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyIpCnameStatusRequest $request
     *
     * @return ModifyIpCnameStatusResponse
     */
    public function modifyIpCnameStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyIpCnameStatusWithOptions($request, $runtime);
    }

    /**
     * @param ModifyPersistenceTimeOutRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ModifyPersistenceTimeOutResponse
     */
    public function modifyPersistenceTimeOutWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyPersistenceTimeOutResponse::fromMap($this->doRPCRequest('ModifyPersistenceTimeOut', '2017-07-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyPersistenceTimeOutRequest $request
     *
     * @return ModifyPersistenceTimeOutResponse
     */
    public function modifyPersistenceTimeOut($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyPersistenceTimeOutWithOptions($request, $runtime);
    }

    /**
     * @param ModifyRealServersRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ModifyRealServersResponse
     */
    public function modifyRealServersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyRealServersResponse::fromMap($this->doRPCRequest('ModifyRealServers', '2017-07-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyRealServersRequest $request
     *
     * @return ModifyRealServersResponse
     */
    public function modifyRealServers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyRealServersWithOptions($request, $runtime);
    }

    /**
     * @param ModifyTransmitLineRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ModifyTransmitLineResponse
     */
    public function modifyTransmitLineWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyTransmitLineResponse::fromMap($this->doRPCRequest('ModifyTransmitLine', '2017-07-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyTransmitLineRequest $request
     *
     * @return ModifyTransmitLineResponse
     */
    public function modifyTransmitLine($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyTransmitLineWithOptions($request, $runtime);
    }

    /**
     * @param UpdateCcCustomedRuleRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateCcCustomedRuleResponse
     */
    public function updateCcCustomedRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateCcCustomedRuleResponse::fromMap($this->doRPCRequest('UpdateCcCustomedRule', '2017-07-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateCcCustomedRuleRequest $request
     *
     * @return UpdateCcCustomedRuleResponse
     */
    public function updateCcCustomedRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCcCustomedRuleWithOptions($request, $runtime);
    }

    /**
     * @param UpdatePortRuleRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UpdatePortRuleResponse
     */
    public function updatePortRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdatePortRuleResponse::fromMap($this->doRPCRequest('UpdatePortRule', '2017-07-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdatePortRuleRequest $request
     *
     * @return UpdatePortRuleResponse
     */
    public function updatePortRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updatePortRuleWithOptions($request, $runtime);
    }
}
