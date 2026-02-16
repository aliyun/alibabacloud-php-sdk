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
use AlibabaCloud\SDK\ADBAI\V20250812\Models\DeleteEmbodiedAIPlatformRequest;
use AlibabaCloud\SDK\ADBAI\V20250812\Models\DeleteEmbodiedAIPlatformResponse;
use AlibabaCloud\SDK\ADBAI\V20250812\Models\DescribeEmbodiedAIPlatformsRequest;
use AlibabaCloud\SDK\ADBAI\V20250812\Models\DescribeEmbodiedAIPlatformsResponse;
use AlibabaCloud\SDK\ADBAI\V20250812\Models\GetEmbodiedAIPlatformResourceUsageInfoRequest;
use AlibabaCloud\SDK\ADBAI\V20250812\Models\GetEmbodiedAIPlatformResourceUsageInfoResponse;
use AlibabaCloud\SDK\ADBAI\V20250812\Models\LockEmbodiedAIPlatformRequest;
use AlibabaCloud\SDK\ADBAI\V20250812\Models\LockEmbodiedAIPlatformResponse;
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
        $this->_endpointRule = '';
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
     * 创建指标平台.
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
     * 创建指标平台.
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
     * 创建具身智能平台.
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

        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->platformName) {
            @$query['PlatformName'] = $request->platformName;
        }

        if (null !== $request->rayConfigShrink) {
            @$query['RayConfig'] = $request->rayConfigShrink;
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
     * 创建具身智能平台.
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
     * 删除具身智能平台.
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
     * 删除具身智能平台.
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
     * 查询具身智能平台.
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
     * 查询具身智能平台.
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
     * 查询具身智能平台资源用量.
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
     * 查询具身智能平台资源用量.
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
     * 解锁具身智能平台.
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
     * 解锁具身智能平台.
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
     * 重置具身智能平台密码
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
     * 重置具身智能平台密码
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
     * 解锁具身智能平台.
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
     * 解锁具身智能平台.
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
