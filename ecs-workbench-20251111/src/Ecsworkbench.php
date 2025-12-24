<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecsworkbench\V20251111;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Ecsworkbench\V20251111\Models\DescribeTerminalSettingsResponse;
use AlibabaCloud\SDK\Ecsworkbench\V20251111\Models\ModifyTerminalSettingsRequest;
use AlibabaCloud\SDK\Ecsworkbench\V20251111\Models\ModifyTerminalSettingsResponse;
use AlibabaCloud\SDK\Ecsworkbench\V20251111\Models\ModifyTerminalSettingsShrinkRequest;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Ecsworkbench extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('ecs-workbench', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 查询Workbench终端配置.
     *
     * @remarks
     * 查询Workbench终端配置
     *
     * @param request - DescribeTerminalSettingsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeTerminalSettingsResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return DescribeTerminalSettingsResponse
     */
    public function describeTerminalSettingsWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'DescribeTerminalSettings',
            'version' => '2025-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeTerminalSettingsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询Workbench终端配置.
     *
     * @remarks
     * 查询Workbench终端配置
     *
     * @returns DescribeTerminalSettingsResponse
     *
     * @return DescribeTerminalSettingsResponse
     */
    public function describeTerminalSettings()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTerminalSettingsWithOptions($runtime);
    }

    /**
     * 修改Workbench终端配置.
     *
     * @remarks
     * 修改Workbench终端配置
     *
     * @param tmpReq - ModifyTerminalSettingsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyTerminalSettingsResponse
     *
     * @param ModifyTerminalSettingsRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return ModifyTerminalSettingsResponse
     */
    public function modifyTerminalSettingsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ModifyTerminalSettingsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->passwordlessLoginConfig) {
            $request->passwordlessLoginConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->passwordlessLoginConfig, 'PasswordlessLoginConfig', 'json');
        }

        $query = [];
        if (null !== $request->passwordlessLoginConfigShrink) {
            @$query['PasswordlessLoginConfig'] = $request->passwordlessLoginConfigShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyTerminalSettings',
            'version' => '2025-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyTerminalSettingsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改Workbench终端配置.
     *
     * @remarks
     * 修改Workbench终端配置
     *
     * @param request - ModifyTerminalSettingsRequest
     *
     * @returns ModifyTerminalSettingsResponse
     *
     * @param ModifyTerminalSettingsRequest $request
     *
     * @return ModifyTerminalSettingsResponse
     */
    public function modifyTerminalSettings($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyTerminalSettingsWithOptions($request, $runtime);
    }
}
