<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ADBAI\V20250812;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\ADBAI\V20250812\Models\CreateAgentPlatformRequest;
use AlibabaCloud\SDK\ADBAI\V20250812\Models\CreateAgentPlatformResponse;
use AlibabaCloud\SDK\ADBAI\V20250812\Models\CreateAgentPlatformShrinkRequest;
use AlibabaCloud\SDK\ADBAI\V20250812\Models\CreateEmbodiedAIPlatformRequest;
use AlibabaCloud\SDK\ADBAI\V20250812\Models\CreateEmbodiedAIPlatformResponse;
use AlibabaCloud\SDK\ADBAI\V20250812\Models\CreateEmbodiedAIPlatformShrinkRequest;
use AlibabaCloud\SDK\ADBAI\V20250812\Models\CreateMultiModelKnowledgeBaseRequest;
use AlibabaCloud\SDK\ADBAI\V20250812\Models\CreateMultiModelKnowledgeBaseResponse;
use AlibabaCloud\SDK\ADBAI\V20250812\Models\DeleteAgentPlatformRequest;
use AlibabaCloud\SDK\ADBAI\V20250812\Models\DeleteAgentPlatformResponse;
use AlibabaCloud\SDK\ADBAI\V20250812\Models\DeleteEmbodiedAIPlatformRequest;
use AlibabaCloud\SDK\ADBAI\V20250812\Models\DeleteEmbodiedAIPlatformResponse;
use AlibabaCloud\SDK\ADBAI\V20250812\Models\DeleteMultiModalKnowledgeBaseRequest;
use AlibabaCloud\SDK\ADBAI\V20250812\Models\DeleteMultiModalKnowledgeBaseResponse;
use AlibabaCloud\SDK\ADBAI\V20250812\Models\DescribeChatMessageRequest;
use AlibabaCloud\SDK\ADBAI\V20250812\Models\DescribeChatMessageResponse;
use AlibabaCloud\SDK\ADBAI\V20250812\Models\DescribeEapDeviceResourceAllocationRequest;
use AlibabaCloud\SDK\ADBAI\V20250812\Models\DescribeEapDeviceResourceAllocationResponse;
use AlibabaCloud\SDK\ADBAI\V20250812\Models\DescribeEmbodiedAIPlatformsRequest;
use AlibabaCloud\SDK\ADBAI\V20250812\Models\DescribeEmbodiedAIPlatformsResponse;
use AlibabaCloud\SDK\ADBAI\V20250812\Models\GetEmbodiedAIPlatformResourceUsageInfoRequest;
use AlibabaCloud\SDK\ADBAI\V20250812\Models\GetEmbodiedAIPlatformResourceUsageInfoResponse;
use AlibabaCloud\SDK\ADBAI\V20250812\Models\LockEmbodiedAIPlatformRequest;
use AlibabaCloud\SDK\ADBAI\V20250812\Models\LockEmbodiedAIPlatformResponse;
use AlibabaCloud\SDK\ADBAI\V20250812\Models\ModifyAgentPlatformRequest;
use AlibabaCloud\SDK\ADBAI\V20250812\Models\ModifyAgentPlatformResponse;
use AlibabaCloud\SDK\ADBAI\V20250812\Models\ModifyAgentPlatformShrinkRequest;
use AlibabaCloud\SDK\ADBAI\V20250812\Models\ModifyEmbodiedAIPlatformRequest;
use AlibabaCloud\SDK\ADBAI\V20250812\Models\ModifyEmbodiedAIPlatformResponse;
use AlibabaCloud\SDK\ADBAI\V20250812\Models\ModifyEmbodiedAIPlatformShrinkRequest;
use AlibabaCloud\SDK\ADBAI\V20250812\Models\ResetEmbodiedAIPlatformPasswordRequest;
use AlibabaCloud\SDK\ADBAI\V20250812\Models\ResetEmbodiedAIPlatformPasswordResponse;
use AlibabaCloud\SDK\ADBAI\V20250812\Models\UnlockEmbodiedAIPlatformRequest;
use AlibabaCloud\SDK\ADBAI\V20250812\Models\UnlockEmbodiedAIPlatformResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class ADBAI extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('adbai', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * Creates a metric analysis platform.
     *
     * @param tmpReq - CreateAgentPlatformRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAgentPlatformResponse
     *
     * @param CreateAgentPlatformRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return CreateAgentPlatformResponse
     */
    public function createAgentPlatformWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateAgentPlatformShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->aiPlatformConfig) {
            $request->aiPlatformConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->aiPlatformConfig, 'AiPlatformConfig', 'json');
        }

        $query = [];
        if (null !== $request->aiPlatformConfigShrink) {
            @$query['AiPlatformConfig'] = $request->aiPlatformConfigShrink;
        }

        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateAgentPlatform',
            'version' => '2025-08-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateAgentPlatformResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a metric analysis platform.
     *
     * @param request - CreateAgentPlatformRequest
     *
     * @returns CreateAgentPlatformResponse
     *
     * @param CreateAgentPlatformRequest $request
     *
     * @return CreateAgentPlatformResponse
     */
    public function createAgentPlatform($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAgentPlatformWithOptions($request, $runtime);
    }

    /**
     * Creates an embodied intelligence multimodal data platform.
     *
     * @remarks
     * Queries the actual resource amount corresponding to the backend of the instance ontology count.
     *
     * @param tmpReq - CreateEmbodiedAIPlatformRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateEmbodiedAIPlatformResponse
     *
     * @param CreateEmbodiedAIPlatformRequest $tmpReq
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateEmbodiedAIPlatformResponse
     */
    public function createEmbodiedAIPlatformWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateEmbodiedAIPlatformShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->rayConfig) {
            $request->rayConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->rayConfig, 'RayConfig', 'json');
        }

        if (null !== $tmpReq->rayTrainConfig) {
            $request->rayTrainConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->rayTrainConfig, 'RayTrainConfig', 'json');
        }

        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->deviceCount) {
            @$query['DeviceCount'] = $request->deviceCount;
        }

        if (null !== $request->platformName) {
            @$query['PlatformName'] = $request->platformName;
        }

        if (null !== $request->rayConfigShrink) {
            @$query['RayConfig'] = $request->rayConfigShrink;
        }

        if (null !== $request->rayTrainConfigShrink) {
            @$query['RayTrainConfig'] = $request->rayTrainConfigShrink;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->webserverSpecName) {
            @$query['WebserverSpecName'] = $request->webserverSpecName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateEmbodiedAIPlatform',
            'version' => '2025-08-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateEmbodiedAIPlatformResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an embodied intelligence multimodal data platform.
     *
     * @remarks
     * Queries the actual resource amount corresponding to the backend of the instance ontology count.
     *
     * @param request - CreateEmbodiedAIPlatformRequest
     *
     * @returns CreateEmbodiedAIPlatformResponse
     *
     * @param CreateEmbodiedAIPlatformRequest $request
     *
     * @return CreateEmbodiedAIPlatformResponse
     */
    public function createEmbodiedAIPlatform($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createEmbodiedAIPlatformWithOptions($request, $runtime);
    }

    /**
     * Creates an AnalyticDB multimodal knowledge base.
     *
     * @remarks
     * Creates an AnalyticDB multimodal knowledge base.
     *
     * @param request - CreateMultiModelKnowledgeBaseRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateMultiModelKnowledgeBaseResponse
     *
     * @param CreateMultiModelKnowledgeBaseRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return CreateMultiModelKnowledgeBaseResponse
     */
    public function createMultiModelKnowledgeBaseWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->adbInstanceName) {
            @$query['AdbInstanceName'] = $request->adbInstanceName;
        }

        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->dbClusterAcu) {
            @$query['DbClusterAcu'] = $request->dbClusterAcu;
        }

        if (null !== $request->lakeStorageBucketName) {
            @$query['LakeStorageBucketName'] = $request->lakeStorageBucketName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceAcuMax) {
            @$query['ResourceAcuMax'] = $request->resourceAcuMax;
        }

        if (null !== $request->resourceAcuMin) {
            @$query['ResourceAcuMin'] = $request->resourceAcuMin;
        }

        if (null !== $request->vSwitchId) {
            @$query['VSwitchId'] = $request->vSwitchId;
        }

        if (null !== $request->vpcId) {
            @$query['VpcId'] = $request->vpcId;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateMultiModelKnowledgeBase',
            'version' => '2025-08-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateMultiModelKnowledgeBaseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an AnalyticDB multimodal knowledge base.
     *
     * @remarks
     * Creates an AnalyticDB multimodal knowledge base.
     *
     * @param request - CreateMultiModelKnowledgeBaseRequest
     *
     * @returns CreateMultiModelKnowledgeBaseResponse
     *
     * @param CreateMultiModelKnowledgeBaseRequest $request
     *
     * @return CreateMultiModelKnowledgeBaseResponse
     */
    public function createMultiModelKnowledgeBase($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMultiModelKnowledgeBaseWithOptions($request, $runtime);
    }

    /**
     * Deletes a metrics platform.
     *
     * @param request - DeleteAgentPlatformRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAgentPlatformResponse
     *
     * @param DeleteAgentPlatformRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteAgentPlatformResponse
     */
    public function deleteAgentPlatformWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteAgentPlatform',
            'version' => '2025-08-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteAgentPlatformResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a metrics platform.
     *
     * @param request - DeleteAgentPlatformRequest
     *
     * @returns DeleteAgentPlatformResponse
     *
     * @param DeleteAgentPlatformRequest $request
     *
     * @return DeleteAgentPlatformResponse
     */
    public function deleteAgentPlatform($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAgentPlatformWithOptions($request, $runtime);
    }

    /**
     * Deletes an embodied intelligence platform.
     *
     * @param request - DeleteEmbodiedAIPlatformRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteEmbodiedAIPlatformResponse
     *
     * @param DeleteEmbodiedAIPlatformRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DeleteEmbodiedAIPlatformResponse
     */
    public function deleteEmbodiedAIPlatformWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->platformName) {
            @$query['PlatformName'] = $request->platformName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteEmbodiedAIPlatform',
            'version' => '2025-08-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteEmbodiedAIPlatformResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an embodied intelligence platform.
     *
     * @param request - DeleteEmbodiedAIPlatformRequest
     *
     * @returns DeleteEmbodiedAIPlatformResponse
     *
     * @param DeleteEmbodiedAIPlatformRequest $request
     *
     * @return DeleteEmbodiedAIPlatformResponse
     */
    public function deleteEmbodiedAIPlatform($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteEmbodiedAIPlatformWithOptions($request, $runtime);
    }

    /**
     * Deletes an ADB multimodal knowledge base.
     *
     * @remarks
     * Deletes an ADB multimodal knowledge base.
     *
     * @param request - DeleteMultiModalKnowledgeBaseRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteMultiModalKnowledgeBaseResponse
     *
     * @param DeleteMultiModalKnowledgeBaseRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DeleteMultiModalKnowledgeBaseResponse
     */
    public function deleteMultiModalKnowledgeBaseWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->mmkbName) {
            @$query['MmkbName'] = $request->mmkbName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteMultiModalKnowledgeBase',
            'version' => '2025-08-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteMultiModalKnowledgeBaseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an ADB multimodal knowledge base.
     *
     * @remarks
     * Deletes an ADB multimodal knowledge base.
     *
     * @param request - DeleteMultiModalKnowledgeBaseRequest
     *
     * @returns DeleteMultiModalKnowledgeBaseResponse
     *
     * @param DeleteMultiModalKnowledgeBaseRequest $request
     *
     * @return DeleteMultiModalKnowledgeBaseResponse
     */
    public function deleteMultiModalKnowledgeBase($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMultiModalKnowledgeBaseWithOptions($request, $runtime);
    }

    /**
     * Queries multi-turn conversations for instance kernel diagnostics.
     *
     * @remarks
     * Queries multi-turn conversations for instance kernel diagnostics.
     *
     * @param request - DescribeChatMessageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeChatMessageResponse
     *
     * @param DescribeChatMessageRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeChatMessageResponse
     */
    public function describeChatMessageWithSSE($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->query) {
            @$query['Query'] = $request->query;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->sessionId) {
            @$query['SessionId'] = $request->sessionId;
        }

        if (null !== $request->skill) {
            @$query['Skill'] = $request->skill;
        }

        if (null !== $request->timezone) {
            @$query['Timezone'] = $request->timezone;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeChatMessage',
            'version' => '2025-08-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        $sseResp = $this->callSSEApi($params, $req, $runtime);

        foreach ($sseResp as $resp) {
            if (null !== $resp->event && null !== $resp->event->data) {
                $data = json_decode($resp->event->data, true);

                yield DescribeChatMessageResponse::fromMap([
                    'statusCode' => $resp->statusCode,
                    'headers' => $resp->headers,
                    'id' => $resp->event->id,
                    'event' => $resp->event->event,
                    'body' => $data,
                ]);
            }
        }
    }

    /**
     * Queries multi-turn conversations for instance kernel diagnostics.
     *
     * @remarks
     * Queries multi-turn conversations for instance kernel diagnostics.
     *
     * @param request - DescribeChatMessageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeChatMessageResponse
     *
     * @param DescribeChatMessageRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeChatMessageResponse
     */
    public function describeChatMessageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->query) {
            @$query['Query'] = $request->query;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->sessionId) {
            @$query['SessionId'] = $request->sessionId;
        }

        if (null !== $request->skill) {
            @$query['Skill'] = $request->skill;
        }

        if (null !== $request->timezone) {
            @$query['Timezone'] = $request->timezone;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeChatMessage',
            'version' => '2025-08-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeChatMessageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries multi-turn conversations for instance kernel diagnostics.
     *
     * @remarks
     * Queries multi-turn conversations for instance kernel diagnostics.
     *
     * @param request - DescribeChatMessageRequest
     *
     * @returns DescribeChatMessageResponse
     *
     * @param DescribeChatMessageRequest $request
     *
     * @return DescribeChatMessageResponse
     */
    public function describeChatMessage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeChatMessageWithOptions($request, $runtime);
    }

    /**
     * Queries the resource allocation plan for devices on the embodied intelligence platform.
     *
     * @remarks
     * Queries the actual resource capacity corresponding to the backend of the instance device count.
     *
     * @param request - DescribeEapDeviceResourceAllocationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeEapDeviceResourceAllocationResponse
     *
     * @param DescribeEapDeviceResourceAllocationRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return DescribeEapDeviceResourceAllocationResponse
     */
    public function describeEapDeviceResourceAllocationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->deviceCount) {
            @$query['DeviceCount'] = $request->deviceCount;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeEapDeviceResourceAllocation',
            'version' => '2025-08-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeEapDeviceResourceAllocationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the resource allocation plan for devices on the embodied intelligence platform.
     *
     * @remarks
     * Queries the actual resource capacity corresponding to the backend of the instance device count.
     *
     * @param request - DescribeEapDeviceResourceAllocationRequest
     *
     * @returns DescribeEapDeviceResourceAllocationResponse
     *
     * @param DescribeEapDeviceResourceAllocationRequest $request
     *
     * @return DescribeEapDeviceResourceAllocationResponse
     */
    public function describeEapDeviceResourceAllocation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEapDeviceResourceAllocationWithOptions($request, $runtime);
    }

    /**
     * Queries embodied intelligence multimodal data platforms.
     *
     * @param request - DescribeEmbodiedAIPlatformsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeEmbodiedAIPlatformsResponse
     *
     * @param DescribeEmbodiedAIPlatformsRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeEmbodiedAIPlatformsResponse
     */
    public function describeEmbodiedAIPlatformsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->platformName) {
            @$query['PlatformName'] = $request->platformName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->state) {
            @$query['State'] = $request->state;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeEmbodiedAIPlatforms',
            'version' => '2025-08-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeEmbodiedAIPlatformsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries embodied intelligence multimodal data platforms.
     *
     * @param request - DescribeEmbodiedAIPlatformsRequest
     *
     * @returns DescribeEmbodiedAIPlatformsResponse
     *
     * @param DescribeEmbodiedAIPlatformsRequest $request
     *
     * @return DescribeEmbodiedAIPlatformsResponse
     */
    public function describeEmbodiedAIPlatforms($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEmbodiedAIPlatformsWithOptions($request, $runtime);
    }

    /**
     * Queries the resource usage information of an embodied intelligence platform.
     *
     * @param request - GetEmbodiedAIPlatformResourceUsageInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetEmbodiedAIPlatformResourceUsageInfoResponse
     *
     * @param GetEmbodiedAIPlatformResourceUsageInfoRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return GetEmbodiedAIPlatformResourceUsageInfoResponse
     */
    public function getEmbodiedAIPlatformResourceUsageInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->platformName) {
            @$query['PlatformName'] = $request->platformName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetEmbodiedAIPlatformResourceUsageInfo',
            'version' => '2025-08-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetEmbodiedAIPlatformResourceUsageInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the resource usage information of an embodied intelligence platform.
     *
     * @param request - GetEmbodiedAIPlatformResourceUsageInfoRequest
     *
     * @returns GetEmbodiedAIPlatformResourceUsageInfoResponse
     *
     * @param GetEmbodiedAIPlatformResourceUsageInfoRequest $request
     *
     * @return GetEmbodiedAIPlatformResourceUsageInfoResponse
     */
    public function getEmbodiedAIPlatformResourceUsageInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getEmbodiedAIPlatformResourceUsageInfoWithOptions($request, $runtime);
    }

    /**
     * Locks an embodied intelligence platform.
     *
     * @param request - LockEmbodiedAIPlatformRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns LockEmbodiedAIPlatformResponse
     *
     * @param LockEmbodiedAIPlatformRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return LockEmbodiedAIPlatformResponse
     */
    public function lockEmbodiedAIPlatformWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->platformName) {
            @$query['PlatformName'] = $request->platformName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'LockEmbodiedAIPlatform',
            'version' => '2025-08-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return LockEmbodiedAIPlatformResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Locks an embodied intelligence platform.
     *
     * @param request - LockEmbodiedAIPlatformRequest
     *
     * @returns LockEmbodiedAIPlatformResponse
     *
     * @param LockEmbodiedAIPlatformRequest $request
     *
     * @return LockEmbodiedAIPlatformResponse
     */
    public function lockEmbodiedAIPlatform($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->lockEmbodiedAIPlatformWithOptions($request, $runtime);
    }

    /**
     * Upgrades or downgrades the specifications of a metric platform.
     *
     * @param tmpReq - ModifyAgentPlatformRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyAgentPlatformResponse
     *
     * @param ModifyAgentPlatformRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return ModifyAgentPlatformResponse
     */
    public function modifyAgentPlatformWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ModifyAgentPlatformShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->aiPlatformConfig) {
            $request->aiPlatformConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->aiPlatformConfig, 'AiPlatformConfig', 'json');
        }

        $query = [];
        if (null !== $request->aiPlatformConfigShrink) {
            @$query['AiPlatformConfig'] = $request->aiPlatformConfigShrink;
        }

        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyAgentPlatform',
            'version' => '2025-08-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyAgentPlatformResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Upgrades or downgrades the specifications of a metric platform.
     *
     * @param request - ModifyAgentPlatformRequest
     *
     * @returns ModifyAgentPlatformResponse
     *
     * @param ModifyAgentPlatformRequest $request
     *
     * @return ModifyAgentPlatformResponse
     */
    public function modifyAgentPlatform($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAgentPlatformWithOptions($request, $runtime);
    }

    /**
     * Modifies the specifications of an embodied intelligence platform.
     *
     * @param tmpReq - ModifyEmbodiedAIPlatformRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyEmbodiedAIPlatformResponse
     *
     * @param ModifyEmbodiedAIPlatformRequest $tmpReq
     * @param RuntimeOptions                  $runtime
     *
     * @return ModifyEmbodiedAIPlatformResponse
     */
    public function modifyEmbodiedAIPlatformWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ModifyEmbodiedAIPlatformShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->rayConfig) {
            $request->rayConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->rayConfig, 'RayConfig', 'json');
        }

        if (null !== $tmpReq->rayTrainConfig) {
            $request->rayTrainConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->rayTrainConfig, 'RayTrainConfig', 'json');
        }

        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->deviceCount) {
            @$query['DeviceCount'] = $request->deviceCount;
        }

        if (null !== $request->platformName) {
            @$query['PlatformName'] = $request->platformName;
        }

        if (null !== $request->rayConfigShrink) {
            @$query['RayConfig'] = $request->rayConfigShrink;
        }

        if (null !== $request->rayTrainConfigShrink) {
            @$query['RayTrainConfig'] = $request->rayTrainConfigShrink;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->webserverSpecName) {
            @$query['WebserverSpecName'] = $request->webserverSpecName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyEmbodiedAIPlatform',
            'version' => '2025-08-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyEmbodiedAIPlatformResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the specifications of an embodied intelligence platform.
     *
     * @param request - ModifyEmbodiedAIPlatformRequest
     *
     * @returns ModifyEmbodiedAIPlatformResponse
     *
     * @param ModifyEmbodiedAIPlatformRequest $request
     *
     * @return ModifyEmbodiedAIPlatformResponse
     */
    public function modifyEmbodiedAIPlatform($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyEmbodiedAIPlatformWithOptions($request, $runtime);
    }

    /**
     * Resets the admin password for the embodied intelligence platform.
     *
     * @param request - ResetEmbodiedAIPlatformPasswordRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ResetEmbodiedAIPlatformPasswordResponse
     *
     * @param ResetEmbodiedAIPlatformPasswordRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return ResetEmbodiedAIPlatformPasswordResponse
     */
    public function resetEmbodiedAIPlatformPasswordWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->password) {
            @$query['Password'] = $request->password;
        }

        if (null !== $request->platformName) {
            @$query['PlatformName'] = $request->platformName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ResetEmbodiedAIPlatformPassword',
            'version' => '2025-08-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ResetEmbodiedAIPlatformPasswordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Resets the admin password for the embodied intelligence platform.
     *
     * @param request - ResetEmbodiedAIPlatformPasswordRequest
     *
     * @returns ResetEmbodiedAIPlatformPasswordResponse
     *
     * @param ResetEmbodiedAIPlatformPasswordRequest $request
     *
     * @return ResetEmbodiedAIPlatformPasswordResponse
     */
    public function resetEmbodiedAIPlatformPassword($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetEmbodiedAIPlatformPasswordWithOptions($request, $runtime);
    }

    /**
     * Unlocks an embodied intelligence platform.
     *
     * @param request - UnlockEmbodiedAIPlatformRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UnlockEmbodiedAIPlatformResponse
     *
     * @param UnlockEmbodiedAIPlatformRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return UnlockEmbodiedAIPlatformResponse
     */
    public function unlockEmbodiedAIPlatformWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->platformName) {
            @$query['PlatformName'] = $request->platformName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UnlockEmbodiedAIPlatform',
            'version' => '2025-08-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UnlockEmbodiedAIPlatformResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Unlocks an embodied intelligence platform.
     *
     * @param request - UnlockEmbodiedAIPlatformRequest
     *
     * @returns UnlockEmbodiedAIPlatformResponse
     *
     * @param UnlockEmbodiedAIPlatformRequest $request
     *
     * @return UnlockEmbodiedAIPlatformResponse
     */
    public function unlockEmbodiedAIPlatform($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unlockEmbodiedAIPlatformWithOptions($request, $runtime);
    }
}
