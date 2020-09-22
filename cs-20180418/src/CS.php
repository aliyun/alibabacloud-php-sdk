<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20180418;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\CS\V20180418\Models\CallbackClusterTokenRequest;
use AlibabaCloud\SDK\CS\V20180418\Models\CallbackClusterTokenResponse;
use AlibabaCloud\SDK\CS\V20180418\Models\CreateClusterRequest;
use AlibabaCloud\SDK\CS\V20180418\Models\CreateClusterResponse;
use AlibabaCloud\SDK\CS\V20180418\Models\CreateClusterTokenRequest;
use AlibabaCloud\SDK\CS\V20180418\Models\CreateClusterTokenResponse;
use AlibabaCloud\SDK\CS\V20180418\Models\DeleteClusterNodeRequest;
use AlibabaCloud\SDK\CS\V20180418\Models\DeleteClusterNodeResponse;
use AlibabaCloud\SDK\CS\V20180418\Models\DeleteClusterRequest;
use AlibabaCloud\SDK\CS\V20180418\Models\DeleteClusterResponse;
use AlibabaCloud\SDK\CS\V20180418\Models\DescribeAgilityTunnelAgentInfoRequest;
use AlibabaCloud\SDK\CS\V20180418\Models\DescribeAgilityTunnelAgentInfoResponse;
use AlibabaCloud\SDK\CS\V20180418\Models\DescribeAgilityTunnelCertsRequest;
use AlibabaCloud\SDK\CS\V20180418\Models\DescribeAgilityTunnelCertsResponse;
use AlibabaCloud\SDK\CS\V20180418\Models\DescribeApiVersionRequest;
use AlibabaCloud\SDK\CS\V20180418\Models\DescribeApiVersionResponse;
use AlibabaCloud\SDK\CS\V20180418\Models\DescribeClusterCertsRequest;
use AlibabaCloud\SDK\CS\V20180418\Models\DescribeClusterCertsResponse;
use AlibabaCloud\SDK\CS\V20180418\Models\DescribeClusterDetailRequest;
use AlibabaCloud\SDK\CS\V20180418\Models\DescribeClusterDetailResponse;
use AlibabaCloud\SDK\CS\V20180418\Models\DescribeClusterHostsRequest;
use AlibabaCloud\SDK\CS\V20180418\Models\DescribeClusterHostsResponse;
use AlibabaCloud\SDK\CS\V20180418\Models\DescribeClusterLogsRequest;
use AlibabaCloud\SDK\CS\V20180418\Models\DescribeClusterLogsResponse;
use AlibabaCloud\SDK\CS\V20180418\Models\DescribeClusterNodeInfoRequest;
use AlibabaCloud\SDK\CS\V20180418\Models\DescribeClusterNodeInfoResponse;
use AlibabaCloud\SDK\CS\V20180418\Models\DescribeClusterNodeInfoWithInstanceRequest;
use AlibabaCloud\SDK\CS\V20180418\Models\DescribeClusterNodeInfoWithInstanceResponse;
use AlibabaCloud\SDK\CS\V20180418\Models\DescribeClusterNodesRequest;
use AlibabaCloud\SDK\CS\V20180418\Models\DescribeClusterNodesResponse;
use AlibabaCloud\SDK\CS\V20180418\Models\DescribeClusterScaledNodeRequest;
use AlibabaCloud\SDK\CS\V20180418\Models\DescribeClusterScaledNodeResponse;
use AlibabaCloud\SDK\CS\V20180418\Models\DescribeClusterServicesRequest;
use AlibabaCloud\SDK\CS\V20180418\Models\DescribeClusterServicesResponse;
use AlibabaCloud\SDK\CS\V20180418\Models\DescribeClustersRequest;
use AlibabaCloud\SDK\CS\V20180418\Models\DescribeClustersResponse;
use AlibabaCloud\SDK\CS\V20180418\Models\DescribeClusterTokensRequest;
use AlibabaCloud\SDK\CS\V20180418\Models\DescribeClusterTokensResponse;
use AlibabaCloud\SDK\CS\V20180418\Models\DescribeImagesRequest;
use AlibabaCloud\SDK\CS\V20180418\Models\DescribeImagesResponse;
use AlibabaCloud\SDK\CS\V20180418\Models\DescribeKubernetesTemplateRequest;
use AlibabaCloud\SDK\CS\V20180418\Models\DescribeKubernetesTemplateResponse;
use AlibabaCloud\SDK\CS\V20180418\Models\DescribeKubernetesTemplatesRequest;
use AlibabaCloud\SDK\CS\V20180418\Models\DescribeKubernetesTemplatesResponse;
use AlibabaCloud\SDK\CS\V20180418\Models\DescribeServiceContainersRequest;
use AlibabaCloud\SDK\CS\V20180418\Models\DescribeServiceContainersResponse;
use AlibabaCloud\SDK\CS\V20180418\Models\DescribeTaskInfoRequest;
use AlibabaCloud\SDK\CS\V20180418\Models\DescribeTaskInfoResponse;
use AlibabaCloud\SDK\CS\V20180418\Models\DescribeTemplateAttributeRequest;
use AlibabaCloud\SDK\CS\V20180418\Models\DescribeTemplateAttributeResponse;
use AlibabaCloud\SDK\CS\V20180418\Models\DescribeTemplatesRequest;
use AlibabaCloud\SDK\CS\V20180418\Models\DescribeTemplatesResponse;
use AlibabaCloud\SDK\CS\V20180418\Models\DescribeUserContainersRequest;
use AlibabaCloud\SDK\CS\V20180418\Models\DescribeUserContainersResponse;
use AlibabaCloud\SDK\CS\V20180418\Models\DownloadClusterNodeCertsRequest;
use AlibabaCloud\SDK\CS\V20180418\Models\DownloadClusterNodeCertsResponse;
use AlibabaCloud\SDK\CS\V20180418\Models\GatherLogsTokenRequest;
use AlibabaCloud\SDK\CS\V20180418\Models\GatherLogsTokenResponse;
use AlibabaCloud\SDK\CS\V20180418\Models\GetClusterProjectsRequest;
use AlibabaCloud\SDK\CS\V20180418\Models\GetClusterProjectsResponse;
use AlibabaCloud\SDK\CS\V20180418\Models\GetProjectEventsRequest;
use AlibabaCloud\SDK\CS\V20180418\Models\GetProjectEventsResponse;
use AlibabaCloud\SDK\CS\V20180418\Models\GetTriggerHookRequest;
use AlibabaCloud\SDK\CS\V20180418\Models\GetTriggerHookResponse;
use AlibabaCloud\Tea\Roa\Roa;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;

class CS extends Roa
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'ap-northeast-2-pop'          => 'cs.aliyuncs.com',
            'cn-beijing-finance-1'        => 'cs.aliyuncs.com',
            'cn-beijing-finance-pop'      => 'cs.aliyuncs.com',
            'cn-beijing-gov-1'            => 'cs.aliyuncs.com',
            'cn-beijing-nu16-b01'         => 'cs.aliyuncs.com',
            'cn-edge-1'                   => 'cs.aliyuncs.com',
            'cn-fujian'                   => 'cs.aliyuncs.com',
            'cn-haidian-cm12-c01'         => 'cs.aliyuncs.com',
            'cn-hangzhou-bj-b01'          => 'cs.aliyuncs.com',
            'cn-hangzhou-finance'         => 'cs.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'cs.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'cs.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'cs.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'cs.aliyuncs.com',
            'cn-hangzhou-test-306'        => 'cs.aliyuncs.com',
            'cn-hongkong-finance-pop'     => 'cs.aliyuncs.com',
            'cn-huhehaote-nebula-1'       => 'cs.aliyuncs.com',
            'cn-qingdao-nebula'           => 'cs.aliyuncs.com',
            'cn-shanghai-et15-b01'        => 'cs.aliyuncs.com',
            'cn-shanghai-et2-b01'         => 'cs.aliyuncs.com',
            'cn-shanghai-finance-1'       => 'cs.aliyuncs.com',
            'cn-shanghai-inner'           => 'cs.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'cs.aliyuncs.com',
            'cn-shenzhen-finance-1'       => 'cs.aliyuncs.com',
            'cn-shenzhen-inner'           => 'cs.aliyuncs.com',
            'cn-shenzhen-st4-d01'         => 'cs.aliyuncs.com',
            'cn-shenzhen-su18-b01'        => 'cs.aliyuncs.com',
            'cn-wuhan'                    => 'cs.aliyuncs.com',
            'cn-wulanchabu'               => 'cs.aliyuncs.com',
            'cn-yushanfang'               => 'cs.aliyuncs.com',
            'cn-zhangbei-na61-b01'        => 'cs.aliyuncs.com',
            'cn-zhangjiakou-na62-a01'     => 'cs.aliyuncs.com',
            'cn-zhengzhou-nebula-1'       => 'cs.aliyuncs.com',
            'eu-west-1-oxs'               => 'cs.aliyuncs.com',
            'rus-west-1-pop'              => 'cs.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpointHost = $this->getEndpoint('cs', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpointHost);
    }

    /**
     * @param string                  $clusterId
     * @param string                  $projectId
     * @param GetProjectEventsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetProjectEventsResponse
     */
    public function getProjectEventsWithOptions($clusterId, $projectId, $request, $runtime)
    {
        Utils::validateModel($request);

        return GetProjectEventsResponse::fromMap($this->doRequestWithAction('GetProjectEvents', '2018-04-18', 'HTTPS', 'GET', 'AK', '/clusters/' . $clusterId . '/projects/' . $projectId . '/events', null, $request->headers, null, $runtime));
    }

    /**
     * @param string                  $clusterId
     * @param string                  $projectId
     * @param GetProjectEventsRequest $request
     *
     * @return GetProjectEventsResponse
     */
    public function getProjectEvents($clusterId, $projectId, $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getProjectEventsWithOptions($clusterId, $projectId, $request, $runtime);
    }

    /**
     * @param string                            $clusterId
     * @param DescribeKubernetesTemplateRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeKubernetesTemplateResponse
     */
    public function describeKubernetesTemplateWithOptions($clusterId, $request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeKubernetesTemplateResponse::fromMap($this->doRequestWithAction('DescribeKubernetesTemplate', '2018-04-18', 'HTTPS', 'GET', 'AK', '/k8s/templates/' . $clusterId . '', null, $request->headers, null, $runtime));
    }

    /**
     * @param string                            $clusterId
     * @param DescribeKubernetesTemplateRequest $request
     *
     * @return DescribeKubernetesTemplateResponse
     */
    public function describeKubernetesTemplate($clusterId, $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeKubernetesTemplateWithOptions($clusterId, $request, $runtime);
    }

    /**
     * @param string                            $token
     * @param DescribeAgilityTunnelCertsRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeAgilityTunnelCertsResponse
     */
    public function describeAgilityTunnelCertsWithOptions($token, $request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeAgilityTunnelCertsResponse::fromMap($this->doRequestWithAction('DescribeAgilityTunnelCerts', '2018-04-18', 'HTTPS', 'GET', 'Anonymous', '/agility/' . $token . '/agent_certs', null, $request->headers, null, $runtime));
    }

    /**
     * @param string                            $token
     * @param DescribeAgilityTunnelCertsRequest $request
     *
     * @return DescribeAgilityTunnelCertsResponse
     */
    public function describeAgilityTunnelCerts($token, $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAgilityTunnelCertsWithOptions($token, $request, $runtime);
    }

    /**
     * @param string                       $clusterId
     * @param DescribeClusterTokensRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeClusterTokensResponse
     */
    public function describeClusterTokensWithOptions($clusterId, $request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeClusterTokensResponse::fromMap($this->doRequestWithAction('DescribeClusterTokens', '2018-04-18', 'HTTPS', 'GET', 'AK', '/clusters/' . $clusterId . '/tokens', null, $request->headers, null, $runtime));
    }

    /**
     * @param string                       $clusterId
     * @param DescribeClusterTokensRequest $request
     *
     * @return DescribeClusterTokensResponse
     */
    public function describeClusterTokens($clusterId, $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeClusterTokensWithOptions($clusterId, $request, $runtime);
    }

    /**
     * @param string                          $token
     * @param string                          $nodeId
     * @param DownloadClusterNodeCertsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DownloadClusterNodeCertsResponse
     */
    public function downloadClusterNodeCertsWithOptions($token, $nodeId, $request, $runtime)
    {
        Utils::validateModel($request);

        return DownloadClusterNodeCertsResponse::fromMap($this->doRequestWithAction('DownloadClusterNodeCerts', '2018-04-18', 'HTTPS', 'GET', 'Anonymous', '/token/' . $token . '/nodes/' . $nodeId . '/certs', null, $request->headers, null, $runtime));
    }

    /**
     * @param string                          $token
     * @param string                          $nodeId
     * @param DownloadClusterNodeCertsRequest $request
     *
     * @return DownloadClusterNodeCertsResponse
     */
    public function downloadClusterNodeCerts($token, $nodeId, $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->downloadClusterNodeCertsWithOptions($token, $nodeId, $request, $runtime);
    }

    /**
     * @param string                           $clusterId
     * @param string                           $serviceId
     * @param DescribeServiceContainersRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeServiceContainersResponse
     */
    public function describeServiceContainersWithOptions($clusterId, $serviceId, $request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeServiceContainersResponse::fromMap($this->doRequestWithAction('DescribeServiceContainers', '2018-04-18', 'HTTPS', 'GET', 'AK', '/clusters/' . $clusterId . '/services/' . $serviceId . '/containers', null, $request->headers, null, $runtime));
    }

    /**
     * @param string                           $clusterId
     * @param string                           $serviceId
     * @param DescribeServiceContainersRequest $request
     *
     * @return DescribeServiceContainersResponse
     */
    public function describeServiceContainers($clusterId, $serviceId, $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeServiceContainersWithOptions($clusterId, $serviceId, $request, $runtime);
    }

    /**
     * @param string                 $token
     * @param GatherLogsTokenRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GatherLogsTokenResponse
     */
    public function gatherLogsTokenWithOptions($token, $request, $runtime)
    {
        Utils::validateModel($request);

        return GatherLogsTokenResponse::fromMap($this->doRequestWithAction('GatherLogsToken', '2018-04-18', 'HTTPS', 'POST', 'Anonymous', '/token/' . $token . '/gather_logs', null, $request->headers, null, $runtime));
    }

    /**
     * @param string                 $token
     * @param GatherLogsTokenRequest $request
     *
     * @return GatherLogsTokenResponse
     */
    public function gatherLogsToken($token, $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->gatherLogsTokenWithOptions($token, $request, $runtime);
    }

    /**
     * @param string                    $clusterId
     * @param GetClusterProjectsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetClusterProjectsResponse
     */
    public function getClusterProjectsWithOptions($clusterId, $request, $runtime)
    {
        Utils::validateModel($request);

        return GetClusterProjectsResponse::fromMap($this->doRequestWithAction('GetClusterProjects', '2018-04-18', 'HTTPS', 'GET', 'AK', '/clusters/' . $clusterId . '/projects', null, $request->headers, null, $runtime));
    }

    /**
     * @param string                    $clusterId
     * @param GetClusterProjectsRequest $request
     *
     * @return GetClusterProjectsResponse
     */
    public function getClusterProjects($clusterId, $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getClusterProjectsWithOptions($clusterId, $request, $runtime);
    }

    /**
     * @param DescribeApiVersionRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeApiVersionResponse
     */
    public function describeApiVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeApiVersionResponse::fromMap($this->doRequestWithAction('DescribeApiVersion', '2018-04-18', 'HTTPS', 'GET', 'AK', '/version', null, $request->headers, null, $runtime));
    }

    /**
     * @param DescribeApiVersionRequest $request
     *
     * @return DescribeApiVersionResponse
     */
    public function describeApiVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApiVersionWithOptions($request, $runtime);
    }

    /**
     * @param string                  $taskId
     * @param DescribeTaskInfoRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeTaskInfoResponse
     */
    public function describeTaskInfoWithOptions($taskId, $request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeTaskInfoResponse::fromMap($this->doRequestWithAction('DescribeTaskInfo', '2018-04-18', 'HTTPS', 'GET', 'AK', '/tasks/' . $taskId . '', null, $request->headers, null, $runtime));
    }

    /**
     * @param string                  $taskId
     * @param DescribeTaskInfoRequest $request
     *
     * @return DescribeTaskInfoResponse
     */
    public function describeTaskInfo($taskId, $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTaskInfoWithOptions($taskId, $request, $runtime);
    }

    /**
     * @param string                      $clusterId
     * @param DescribeClusterNodesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeClusterNodesResponse
     */
    public function describeClusterNodesWithOptions($clusterId, $request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeClusterNodesResponse::fromMap($this->doRequestWithAction('DescribeClusterNodes', '2018-04-18', 'HTTPS', 'GET', 'AK', '/clusters/' . $clusterId . '/nodes', Utils::stringifyMapValue($request->query), $request->headers, null, $runtime));
    }

    /**
     * @param string                      $clusterId
     * @param DescribeClusterNodesRequest $request
     *
     * @return DescribeClusterNodesResponse
     */
    public function describeClusterNodes($clusterId, $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeClusterNodesWithOptions($clusterId, $request, $runtime);
    }

    /**
     * @param string                                $token
     * @param DescribeAgilityTunnelAgentInfoRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeAgilityTunnelAgentInfoResponse
     */
    public function describeAgilityTunnelAgentInfoWithOptions($token, $request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeAgilityTunnelAgentInfoResponse::fromMap($this->doRequestWithAction('DescribeAgilityTunnelAgentInfo', '2018-04-18', 'HTTPS', 'GET', 'Anonymous', '/agility/' . $token . '/agent_info', null, $request->headers, null, $runtime));
    }

    /**
     * @param string                                $token
     * @param DescribeAgilityTunnelAgentInfoRequest $request
     *
     * @return DescribeAgilityTunnelAgentInfoResponse
     */
    public function describeAgilityTunnelAgentInfo($token, $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAgilityTunnelAgentInfoWithOptions($token, $request, $runtime);
    }

    /**
     * @param string                   $clusterId
     * @param string                   $ip
     * @param DeleteClusterNodeRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteClusterNodeResponse
     */
    public function deleteClusterNodeWithOptions($clusterId, $ip, $request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteClusterNodeResponse::fromMap($this->doRequestWithAction('DeleteClusterNode', '2018-04-18', 'HTTPS', 'DELETE', 'AK', '/clusters/' . $clusterId . '/ip/' . $ip . '', Utils::stringifyMapValue($request->query), $request->headers, null, $runtime));
    }

    /**
     * @param string                   $clusterId
     * @param string                   $ip
     * @param DeleteClusterNodeRequest $request
     *
     * @return DeleteClusterNodeResponse
     */
    public function deleteClusterNode($clusterId, $ip, $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteClusterNodeWithOptions($clusterId, $ip, $request, $runtime);
    }

    /**
     * @param string                                     $token
     * @param string                                     $instanceId
     * @param DescribeClusterNodeInfoWithInstanceRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return DescribeClusterNodeInfoWithInstanceResponse
     */
    public function describeClusterNodeInfoWithInstanceWithOptions($token, $instanceId, $request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeClusterNodeInfoWithInstanceResponse::fromMap($this->doRequestWithAction('DescribeClusterNodeInfoWithInstance', '2018-04-18', 'HTTPS', 'GET', 'Anonymous', '/token/' . $token . '/instance/' . $instanceId . '/node_info', null, $request->headers, null, $runtime));
    }

    /**
     * @param string                                     $token
     * @param string                                     $instanceId
     * @param DescribeClusterNodeInfoWithInstanceRequest $request
     *
     * @return DescribeClusterNodeInfoWithInstanceResponse
     */
    public function describeClusterNodeInfoWithInstance($token, $instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeClusterNodeInfoWithInstanceWithOptions($token, $instanceId, $request, $runtime);
    }

    /**
     * @param string                        $regionId
     * @param DescribeUserContainersRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeUserContainersResponse
     */
    public function describeUserContainersWithOptions($regionId, $request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeUserContainersResponse::fromMap($this->doRequestWithAction('DescribeUserContainers', '2018-04-18', 'HTTPS', 'GET', 'AK', '/region/' . $regionId . '/containers', Utils::stringifyMapValue($request->query), $request->headers, null, $runtime));
    }

    /**
     * @param string                        $regionId
     * @param DescribeUserContainersRequest $request
     *
     * @return DescribeUserContainersResponse
     */
    public function describeUserContainers($regionId, $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUserContainersWithOptions($regionId, $request, $runtime);
    }

    /**
     * @param string                    $clusterId
     * @param CreateClusterTokenRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateClusterTokenResponse
     */
    public function createClusterTokenWithOptions($clusterId, $request, $runtime)
    {
        Utils::validateModel($request);

        return CreateClusterTokenResponse::fromMap($this->doRequestWithAction('CreateClusterToken', '2018-04-18', 'HTTPS', 'POST', 'AK', '/clusters/' . $clusterId . '/token', null, $request->headers, null, $runtime));
    }

    /**
     * @param string                    $clusterId
     * @param CreateClusterTokenRequest $request
     *
     * @return CreateClusterTokenResponse
     */
    public function createClusterToken($clusterId, $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createClusterTokenWithOptions($clusterId, $request, $runtime);
    }

    /**
     * @param string                      $clusterId
     * @param DescribeClusterHostsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeClusterHostsResponse
     */
    public function describeClusterHostsWithOptions($clusterId, $request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeClusterHostsResponse::fromMap($this->doRequestWithAction('DescribeClusterHosts', '2018-04-18', 'HTTPS', 'GET', 'AK', '/clusters/' . $clusterId . '/hosts', null, $request->headers, null, $runtime));
    }

    /**
     * @param string                      $clusterId
     * @param DescribeClusterHostsRequest $request
     *
     * @return DescribeClusterHostsResponse
     */
    public function describeClusterHosts($clusterId, $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeClusterHostsWithOptions($clusterId, $request, $runtime);
    }

    /**
     * @param DescribeKubernetesTemplatesRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeKubernetesTemplatesResponse
     */
    public function describeKubernetesTemplatesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeKubernetesTemplatesResponse::fromMap($this->doRequestWithAction('DescribeKubernetesTemplates', '2018-04-18', 'HTTPS', 'GET', 'AK', '/k8s/templates', Utils::stringifyMapValue($request->query), $request->headers, null, $runtime));
    }

    /**
     * @param DescribeKubernetesTemplatesRequest $request
     *
     * @return DescribeKubernetesTemplatesResponse
     */
    public function describeKubernetesTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeKubernetesTemplatesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeTemplatesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeTemplatesResponse
     */
    public function describeTemplatesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeTemplatesResponse::fromMap($this->doRequestWithAction('DescribeTemplates', '2018-04-18', 'HTTPS', 'GET', 'AK', '/templates', null, $request->headers, null, $runtime));
    }

    /**
     * @param DescribeTemplatesRequest $request
     *
     * @return DescribeTemplatesResponse
     */
    public function describeTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTemplatesWithOptions($request, $runtime);
    }

    /**
     * @param string                           $clusterId
     * @param DescribeClusterScaledNodeRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeClusterScaledNodeResponse
     */
    public function describeClusterScaledNodeWithOptions($clusterId, $request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeClusterScaledNodeResponse::fromMap($this->doRequestWithAction('DescribeClusterScaledNode', '2018-04-18', 'HTTPS', 'GET', 'AK', '/clusters/' . $clusterId . '/scaled_nodes/', null, $request->headers, null, $runtime));
    }

    /**
     * @param string                           $clusterId
     * @param DescribeClusterScaledNodeRequest $request
     *
     * @return DescribeClusterScaledNodeResponse
     */
    public function describeClusterScaledNode($clusterId, $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeClusterScaledNodeWithOptions($clusterId, $request, $runtime);
    }

    /**
     * @param string                      $token
     * @param string                      $reqOnce
     * @param CallbackClusterTokenRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CallbackClusterTokenResponse
     */
    public function callbackClusterTokenWithOptions($token, $reqOnce, $request, $runtime)
    {
        Utils::validateModel($request);

        return CallbackClusterTokenResponse::fromMap($this->doRequestWithAction('CallbackClusterToken', '2018-04-18', 'HTTPS', 'POST', 'Anonymous', '/token/' . $token . '/req_once/' . $reqOnce . '/callback', null, $request->headers, null, $runtime));
    }

    /**
     * @param string                      $token
     * @param string                      $reqOnce
     * @param CallbackClusterTokenRequest $request
     *
     * @return CallbackClusterTokenResponse
     */
    public function callbackClusterToken($token, $reqOnce, $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->callbackClusterTokenWithOptions($token, $reqOnce, $request, $runtime);
    }

    /**
     * @param DescribeImagesRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DescribeImagesResponse
     */
    public function describeImagesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeImagesResponse::fromMap($this->doRequestWithAction('DescribeImages', '2018-04-18', 'HTTPS', 'GET', 'AK', '/images', Utils::stringifyMapValue($request->query), $request->headers, null, $runtime));
    }

    /**
     * @param DescribeImagesRequest $request
     *
     * @return DescribeImagesResponse
     */
    public function describeImages($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeImagesWithOptions($request, $runtime);
    }

    /**
     * @param string                     $clusterId
     * @param DescribeClusterLogsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeClusterLogsResponse
     */
    public function describeClusterLogsWithOptions($clusterId, $request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeClusterLogsResponse::fromMap($this->doRequestWithAction('DescribeClusterLogs', '2018-04-18', 'HTTPS', 'GET', 'AK', '/clusters/' . $clusterId . '/logs', null, $request->headers, null, $runtime));
    }

    /**
     * @param string                     $clusterId
     * @param DescribeClusterLogsRequest $request
     *
     * @return DescribeClusterLogsResponse
     */
    public function describeClusterLogs($clusterId, $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeClusterLogsWithOptions($clusterId, $request, $runtime);
    }

    /**
     * @param string                         $clusterId
     * @param DescribeClusterServicesRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeClusterServicesResponse
     */
    public function describeClusterServicesWithOptions($clusterId, $request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeClusterServicesResponse::fromMap($this->doRequestWithAction('DescribeClusterServices', '2018-04-18', 'HTTPS', 'GET', 'AK', '/clusters/' . $clusterId . '/services', null, $request->headers, null, $runtime));
    }

    /**
     * @param string                         $clusterId
     * @param DescribeClusterServicesRequest $request
     *
     * @return DescribeClusterServicesResponse
     */
    public function describeClusterServices($clusterId, $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeClusterServicesWithOptions($clusterId, $request, $runtime);
    }

    /**
     * @param string                $clusterId
     * @param string                $projectId
     * @param GetTriggerHookRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetTriggerHookResponse
     */
    public function getTriggerHookWithOptions($clusterId, $projectId, $request, $runtime)
    {
        Utils::validateModel($request);

        return GetTriggerHookResponse::fromMap($this->doRequestWithAction('GetTriggerHook', '2018-04-18', 'HTTPS', 'GET', 'AK', '/hook/trigger/' . $clusterId . '/' . $projectId . '', null, $request->headers, null, $runtime));
    }

    /**
     * @param string                $clusterId
     * @param string                $projectId
     * @param GetTriggerHookRequest $request
     *
     * @return GetTriggerHookResponse
     */
    public function getTriggerHook($clusterId, $projectId, $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTriggerHookWithOptions($clusterId, $projectId, $request, $runtime);
    }

    /**
     * @param string                           $templateId
     * @param DescribeTemplateAttributeRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeTemplateAttributeResponse
     */
    public function describeTemplateAttributeWithOptions($templateId, $request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeTemplateAttributeResponse::fromMap($this->doRequestWithAction('DescribeTemplateAttribute', '2018-04-18', 'HTTPS', 'GET', 'AK', '/templates/' . $templateId . '', null, $request->headers, null, $runtime));
    }

    /**
     * @param string                           $templateId
     * @param DescribeTemplateAttributeRequest $request
     *
     * @return DescribeTemplateAttributeResponse
     */
    public function describeTemplateAttribute($templateId, $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTemplateAttributeWithOptions($templateId, $request, $runtime);
    }

    /**
     * @param string                      $clusterId
     * @param DescribeClusterCertsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeClusterCertsResponse
     */
    public function describeClusterCertsWithOptions($clusterId, $request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeClusterCertsResponse::fromMap($this->doRequestWithAction('DescribeClusterCerts', '2018-04-18', 'HTTPS', 'GET', 'AK', '/clusters/' . $clusterId . '/certs', null, $request->headers, null, $runtime));
    }

    /**
     * @param string                      $clusterId
     * @param DescribeClusterCertsRequest $request
     *
     * @return DescribeClusterCertsResponse
     */
    public function describeClusterCerts($clusterId, $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeClusterCertsWithOptions($clusterId, $request, $runtime);
    }

    /**
     * @param string                         $token
     * @param DescribeClusterNodeInfoRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeClusterNodeInfoResponse
     */
    public function describeClusterNodeInfoWithOptions($token, $request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeClusterNodeInfoResponse::fromMap($this->doRequestWithAction('DescribeClusterNodeInfo', '2018-04-18', 'HTTPS', 'GET', 'Anonymous', '/token/' . $token . '/node_info', null, $request->headers, null, $runtime));
    }

    /**
     * @param string                         $token
     * @param DescribeClusterNodeInfoRequest $request
     *
     * @return DescribeClusterNodeInfoResponse
     */
    public function describeClusterNodeInfo($token, $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeClusterNodeInfoWithOptions($token, $request, $runtime);
    }

    /**
     * @param string               $clusterId
     * @param DeleteClusterRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteClusterResponse
     */
    public function deleteClusterWithOptions($clusterId, $request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteClusterResponse::fromMap($this->doRequestWithAction('DeleteCluster', '2018-04-18', 'HTTPS', 'DELETE', 'AK', '/clusters/' . $clusterId . '', null, $request->headers, null, $runtime));
    }

    /**
     * @param string               $clusterId
     * @param DeleteClusterRequest $request
     *
     * @return DeleteClusterResponse
     */
    public function deleteCluster($clusterId, $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteClusterWithOptions($clusterId, $request, $runtime);
    }

    /**
     * @param CreateClusterRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateClusterResponse
     */
    public function createClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateClusterResponse::fromMap($this->doRequestWithAction('CreateCluster', '2018-04-18', 'HTTPS', 'POST', 'AK', '/clusters', null, $request->headers, null, $runtime));
    }

    /**
     * @param CreateClusterRequest $request
     *
     * @return CreateClusterResponse
     */
    public function createCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createClusterWithOptions($request, $runtime);
    }

    /**
     * @param string                       $clusterId
     * @param DescribeClusterDetailRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeClusterDetailResponse
     */
    public function describeClusterDetailWithOptions($clusterId, $request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeClusterDetailResponse::fromMap($this->doRequestWithAction('DescribeClusterDetail', '2018-04-18', 'HTTPS', 'GET', 'AK', '/clusters/' . $clusterId . '', null, $request->headers, null, $runtime));
    }

    /**
     * @param string                       $clusterId
     * @param DescribeClusterDetailRequest $request
     *
     * @return DescribeClusterDetailResponse
     */
    public function describeClusterDetail($clusterId, $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeClusterDetailWithOptions($clusterId, $request, $runtime);
    }

    /**
     * @param DescribeClustersRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeClustersResponse
     */
    public function describeClustersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeClustersResponse::fromMap($this->doRequestWithAction('DescribeClusters', '2018-04-18', 'HTTPS', 'GET', 'AK', '/clusters', Utils::stringifyMapValue($request->query), $request->headers, null, $runtime));
    }

    /**
     * @param DescribeClustersRequest $request
     *
     * @return DescribeClustersResponse
     */
    public function describeClusters($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeClustersWithOptions($request, $runtime);
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
        if (!Utils::isUnset($endpointMap) && !Utils::empty_($endpointMap['regionId'])) {
            return $endpointMap['regionId'];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }
}
