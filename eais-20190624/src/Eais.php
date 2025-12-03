<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eais\V20190624;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Eais\V20190624\Models\AttachEaiRequest;
use AlibabaCloud\SDK\Eais\V20190624\Models\AttachEaiResponse;
use AlibabaCloud\SDK\Eais\V20190624\Models\AttachEaisEiRequest;
use AlibabaCloud\SDK\Eais\V20190624\Models\AttachEaisEiResponse;
use AlibabaCloud\SDK\Eais\V20190624\Models\ChangeResourceGroupRequest;
use AlibabaCloud\SDK\Eais\V20190624\Models\ChangeResourceGroupResponse;
use AlibabaCloud\SDK\Eais\V20190624\Models\CreateEaiEciRequest;
use AlibabaCloud\SDK\Eais\V20190624\Models\CreateEaiEciResponse;
use AlibabaCloud\SDK\Eais\V20190624\Models\CreateEaiEciShrinkRequest;
use AlibabaCloud\SDK\Eais\V20190624\Models\CreateEaiEcsRequest;
use AlibabaCloud\SDK\Eais\V20190624\Models\CreateEaiEcsResponse;
use AlibabaCloud\SDK\Eais\V20190624\Models\CreateEaiEcsShrinkRequest;
use AlibabaCloud\SDK\Eais\V20190624\Models\CreateEaiJupyterRequest;
use AlibabaCloud\SDK\Eais\V20190624\Models\CreateEaiJupyterResponse;
use AlibabaCloud\SDK\Eais\V20190624\Models\CreateEaiJupyterShrinkRequest;
use AlibabaCloud\SDK\Eais\V20190624\Models\CreateEaiRequest;
use AlibabaCloud\SDK\Eais\V20190624\Models\CreateEaiResponse;
use AlibabaCloud\SDK\Eais\V20190624\Models\CreateEaisEiRequest;
use AlibabaCloud\SDK\Eais\V20190624\Models\CreateEaisEiResponse;
use AlibabaCloud\SDK\Eais\V20190624\Models\DeleteEaiAllRequest;
use AlibabaCloud\SDK\Eais\V20190624\Models\DeleteEaiAllResponse;
use AlibabaCloud\SDK\Eais\V20190624\Models\DeleteEaiRequest;
use AlibabaCloud\SDK\Eais\V20190624\Models\DeleteEaiResponse;
use AlibabaCloud\SDK\Eais\V20190624\Models\DeleteEaisEiRequest;
use AlibabaCloud\SDK\Eais\V20190624\Models\DeleteEaisEiResponse;
use AlibabaCloud\SDK\Eais\V20190624\Models\DescribeEaisRequest;
use AlibabaCloud\SDK\Eais\V20190624\Models\DescribeEaisResponse;
use AlibabaCloud\SDK\Eais\V20190624\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\Eais\V20190624\Models\DetachEaiRequest;
use AlibabaCloud\SDK\Eais\V20190624\Models\DetachEaiResponse;
use AlibabaCloud\SDK\Eais\V20190624\Models\DetachEaisEiRequest;
use AlibabaCloud\SDK\Eais\V20190624\Models\DetachEaisEiResponse;
use AlibabaCloud\SDK\Eais\V20190624\Models\GetInstanceMetricsRequest;
use AlibabaCloud\SDK\Eais\V20190624\Models\GetInstanceMetricsResponse;
use AlibabaCloud\SDK\Eais\V20190624\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\Eais\V20190624\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\Eais\V20190624\Models\StartEaiJupyterRequest;
use AlibabaCloud\SDK\Eais\V20190624\Models\StartEaiJupyterResponse;
use AlibabaCloud\SDK\Eais\V20190624\Models\StartEaisEiRequest;
use AlibabaCloud\SDK\Eais\V20190624\Models\StartEaisEiResponse;
use AlibabaCloud\SDK\Eais\V20190624\Models\StopEaiJupyterRequest;
use AlibabaCloud\SDK\Eais\V20190624\Models\StopEaiJupyterResponse;
use AlibabaCloud\SDK\Eais\V20190624\Models\StopEaisEiRequest;
use AlibabaCloud\SDK\Eais\V20190624\Models\StopEaisEiResponse;
use AlibabaCloud\SDK\Eais\V20190624\Models\TagResourcesRequest;
use AlibabaCloud\SDK\Eais\V20190624\Models\TagResourcesResponse;
use AlibabaCloud\SDK\Eais\V20190624\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\Eais\V20190624\Models\UntagResourcesResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Eais extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap = [
            'ap-northeast-1' => 'eais.aliyuncs.com',
            'ap-northeast-2-pop' => 'eais.aliyuncs.com',
            'ap-south-1' => 'eais.aliyuncs.com',
            'ap-southeast-1' => 'eais.aliyuncs.com',
            'ap-southeast-2' => 'eais.aliyuncs.com',
            'ap-southeast-3' => 'eais.aliyuncs.com',
            'ap-southeast-5' => 'eais.aliyuncs.com',
            'cn-beijing-finance-1' => 'eais.aliyuncs.com',
            'cn-beijing-finance-pop' => 'eais.aliyuncs.com',
            'cn-beijing-gov-1' => 'eais.aliyuncs.com',
            'cn-beijing-nu16-b01' => 'eais.aliyuncs.com',
            'cn-edge-1' => 'eais.aliyuncs.com',
            'cn-fujian' => 'eais.aliyuncs.com',
            'cn-haidian-cm12-c01' => 'eais.aliyuncs.com',
            'cn-hangzhou-bj-b01' => 'eais.aliyuncs.com',
            'cn-hangzhou-finance' => 'eais.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'eais.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'eais.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'eais.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'eais.aliyuncs.com',
            'cn-hangzhou-test-306' => 'eais.aliyuncs.com',
            'cn-hongkong' => 'eais.aliyuncs.com',
            'cn-hongkong-finance-pop' => 'eais.aliyuncs.com',
            'cn-huhehaote' => 'eais.aliyuncs.com',
            'cn-huhehaote-nebula-1' => 'eais.aliyuncs.com',
            'cn-north-2-gov-1' => 'eais.aliyuncs.com',
            'cn-qingdao' => 'eais.aliyuncs.com',
            'cn-qingdao-nebula' => 'eais.aliyuncs.com',
            'cn-shanghai-et15-b01' => 'eais.aliyuncs.com',
            'cn-shanghai-et2-b01' => 'eais.aliyuncs.com',
            'cn-shanghai-finance-1' => 'eais.aliyuncs.com',
            'cn-shanghai-inner' => 'eais.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'eais.aliyuncs.com',
            'cn-shenzhen-finance-1' => 'eais.aliyuncs.com',
            'cn-shenzhen-inner' => 'eais.aliyuncs.com',
            'cn-shenzhen-st4-d01' => 'eais.aliyuncs.com',
            'cn-shenzhen-su18-b01' => 'eais.aliyuncs.com',
            'cn-wuhan' => 'eais.aliyuncs.com',
            'cn-wulanchabu' => 'eais.aliyuncs.com',
            'cn-yushanfang' => 'eais.aliyuncs.com',
            'cn-zhangbei' => 'eais.aliyuncs.com',
            'cn-zhangbei-na61-b01' => 'eais.aliyuncs.com',
            'cn-zhangjiakou' => 'eais.aliyuncs.com',
            'cn-zhangjiakou-na62-a01' => 'eais.aliyuncs.com',
            'cn-zhengzhou-nebula-1' => 'eais.aliyuncs.com',
            'eu-central-1' => 'eais.aliyuncs.com',
            'eu-west-1' => 'eais.aliyuncs.com',
            'eu-west-1-oxs' => 'eais.aliyuncs.com',
            'me-east-1' => 'eais.aliyuncs.com',
            'rus-west-1-pop' => 'eais.aliyuncs.com',
            'us-east-1' => 'eais.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('eais', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 将弹性加速计算实例挂载到ECS实例上.
     *
     * @param request - AttachEaiRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AttachEaiResponse
     *
     * @param AttachEaiRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return AttachEaiResponse
     */
    public function attachEaiWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientInstanceId) {
            @$query['ClientInstanceId'] = $request->clientInstanceId;
        }

        if (null !== $request->elasticAcceleratedInstanceId) {
            @$query['ElasticAcceleratedInstanceId'] = $request->elasticAcceleratedInstanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AttachEai',
            'version' => '2019-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AttachEaiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 将弹性加速计算实例挂载到ECS实例上.
     *
     * @param request - AttachEaiRequest
     *
     * @returns AttachEaiResponse
     *
     * @param AttachEaiRequest $request
     *
     * @return AttachEaiResponse
     */
    public function attachEai($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachEaiWithOptions($request, $runtime);
    }

    /**
     * 将EI绑定到ECS或ECI实例上.
     *
     * @param request - AttachEaisEiRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AttachEaisEiResponse
     *
     * @param AttachEaisEiRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return AttachEaisEiResponse
     */
    public function attachEaisEiWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientInstanceId) {
            @$query['ClientInstanceId'] = $request->clientInstanceId;
        }

        if (null !== $request->eiInstanceId) {
            @$query['EiInstanceId'] = $request->eiInstanceId;
        }

        if (null !== $request->eiInstanceType) {
            @$query['EiInstanceType'] = $request->eiInstanceType;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AttachEaisEi',
            'version' => '2019-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AttachEaisEiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 将EI绑定到ECS或ECI实例上.
     *
     * @param request - AttachEaisEiRequest
     *
     * @returns AttachEaisEiResponse
     *
     * @param AttachEaisEiRequest $request
     *
     * @return AttachEaisEiResponse
     */
    public function attachEaisEi($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachEaisEiWithOptions($request, $runtime);
    }

    /**
     * 资源转组.
     *
     * @param request - ChangeResourceGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ChangeResourceGroupResponse
     *
     * @param ChangeResourceGroupRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ChangeResourceGroupResponse
     */
    public function changeResourceGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceRegionId) {
            @$query['ResourceRegionId'] = $request->resourceRegionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ChangeResourceGroup',
            'version' => '2019-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ChangeResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 资源转组.
     *
     * @param request - ChangeResourceGroupRequest
     *
     * @returns ChangeResourceGroupResponse
     *
     * @param ChangeResourceGroupRequest $request
     *
     * @return ChangeResourceGroupResponse
     */
    public function changeResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->changeResourceGroupWithOptions($request, $runtime);
    }

    /**
     * 创建一个弹性加速计算实例.
     *
     * @param request - CreateEaiRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateEaiResponse
     *
     * @param CreateEaiRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return CreateEaiResponse
     */
    public function createEaiWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->image) {
            @$query['Image'] = $request->image;
        }

        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->instanceType) {
            @$query['InstanceType'] = $request->instanceType;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->securityGroupId) {
            @$query['SecurityGroupId'] = $request->securityGroupId;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        if (null !== $request->vSwitchId) {
            @$query['VSwitchId'] = $request->vSwitchId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateEai',
            'version' => '2019-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateEaiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建一个弹性加速计算实例.
     *
     * @param request - CreateEaiRequest
     *
     * @returns CreateEaiResponse
     *
     * @param CreateEaiRequest $request
     *
     * @return CreateEaiResponse
     */
    public function createEai($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createEaiWithOptions($request, $runtime);
    }

    /**
     * 创建一个EAIS实例和ECI实例并绑定.
     *
     * @param tmpReq - CreateEaiEciRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateEaiEciResponse
     *
     * @param CreateEaiEciRequest $tmpReq
     * @param RuntimeOptions      $runtime
     *
     * @return CreateEaiEciResponse
     */
    public function createEaiEciWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateEaiEciShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->eci) {
            $request->eciShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->eci, 'Eci', 'json');
        }

        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->eaisName) {
            @$query['EaisName'] = $request->eaisName;
        }

        if (null !== $request->eaisType) {
            @$query['EaisType'] = $request->eaisType;
        }

        if (null !== $request->eciShrink) {
            @$query['Eci'] = $request->eciShrink;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->securityGroupId) {
            @$query['SecurityGroupId'] = $request->securityGroupId;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        if (null !== $request->vSwitchId) {
            @$query['VSwitchId'] = $request->vSwitchId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateEaiEci',
            'version' => '2019-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateEaiEciResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建一个EAIS实例和ECI实例并绑定.
     *
     * @param request - CreateEaiEciRequest
     *
     * @returns CreateEaiEciResponse
     *
     * @param CreateEaiEciRequest $request
     *
     * @return CreateEaiEciResponse
     */
    public function createEaiEci($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createEaiEciWithOptions($request, $runtime);
    }

    /**
     * 创建一个EAIS实例和ECS实例并绑定.
     *
     * @param tmpReq - CreateEaiEcsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateEaiEcsResponse
     *
     * @param CreateEaiEcsRequest $tmpReq
     * @param RuntimeOptions      $runtime
     *
     * @return CreateEaiEcsResponse
     */
    public function createEaiEcsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateEaiEcsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->ecs) {
            $request->ecsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->ecs, 'Ecs', 'json');
        }

        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->eaisName) {
            @$query['EaisName'] = $request->eaisName;
        }

        if (null !== $request->eaisType) {
            @$query['EaisType'] = $request->eaisType;
        }

        if (null !== $request->ecsShrink) {
            @$query['Ecs'] = $request->ecsShrink;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->securityGroupId) {
            @$query['SecurityGroupId'] = $request->securityGroupId;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        if (null !== $request->vSwitchId) {
            @$query['VSwitchId'] = $request->vSwitchId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateEaiEcs',
            'version' => '2019-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateEaiEcsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建一个EAIS实例和ECS实例并绑定.
     *
     * @param request - CreateEaiEcsRequest
     *
     * @returns CreateEaiEcsResponse
     *
     * @param CreateEaiEcsRequest $request
     *
     * @return CreateEaiEcsResponse
     */
    public function createEaiEcs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createEaiEcsWithOptions($request, $runtime);
    }

    /**
     * 创建一个EAIS Jupyter环境.
     *
     * @param tmpReq - CreateEaiJupyterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateEaiJupyterResponse
     *
     * @param CreateEaiJupyterRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return CreateEaiJupyterResponse
     */
    public function createEaiJupyterWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateEaiJupyterShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->environmentVar) {
            $request->environmentVarShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->environmentVar, 'EnvironmentVar', 'json');
        }

        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->eaisName) {
            @$query['EaisName'] = $request->eaisName;
        }

        if (null !== $request->eaisType) {
            @$query['EaisType'] = $request->eaisType;
        }

        if (null !== $request->environmentVarShrink) {
            @$query['EnvironmentVar'] = $request->environmentVarShrink;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->securityGroupId) {
            @$query['SecurityGroupId'] = $request->securityGroupId;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        if (null !== $request->vSwitchId) {
            @$query['VSwitchId'] = $request->vSwitchId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateEaiJupyter',
            'version' => '2019-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateEaiJupyterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建一个EAIS Jupyter环境.
     *
     * @param request - CreateEaiJupyterRequest
     *
     * @returns CreateEaiJupyterResponse
     *
     * @param CreateEaiJupyterRequest $request
     *
     * @return CreateEaiJupyterResponse
     */
    public function createEaiJupyter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createEaiJupyterWithOptions($request, $runtime);
    }

    /**
     * 创建一个弹性加速计算实例.
     *
     * @param request - CreateEaisEiRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateEaisEiResponse
     *
     * @param CreateEaisEiRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CreateEaisEiResponse
     */
    public function createEaisEiWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->instanceType) {
            @$query['InstanceType'] = $request->instanceType;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->securityGroupId) {
            @$query['SecurityGroupId'] = $request->securityGroupId;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        if (null !== $request->vSwitchId) {
            @$query['VSwitchId'] = $request->vSwitchId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateEaisEi',
            'version' => '2019-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateEaisEiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建一个弹性加速计算实例.
     *
     * @param request - CreateEaisEiRequest
     *
     * @returns CreateEaisEiResponse
     *
     * @param CreateEaisEiRequest $request
     *
     * @return CreateEaisEiResponse
     */
    public function createEaisEi($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createEaisEiWithOptions($request, $runtime);
    }

    /**
     * 释放一个弹性加速计算实例.
     *
     * @param request - DeleteEaiRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteEaiResponse
     *
     * @param DeleteEaiRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return DeleteEaiResponse
     */
    public function deleteEaiWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->elasticAcceleratedInstanceId) {
            @$query['ElasticAcceleratedInstanceId'] = $request->elasticAcceleratedInstanceId;
        }

        if (null !== $request->force) {
            @$query['Force'] = $request->force;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteEai',
            'version' => '2019-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteEaiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 释放一个弹性加速计算实例.
     *
     * @param request - DeleteEaiRequest
     *
     * @returns DeleteEaiResponse
     *
     * @param DeleteEaiRequest $request
     *
     * @return DeleteEaiResponse
     */
    public function deleteEai($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteEaiWithOptions($request, $runtime);
    }

    /**
     * 释放一个弹性加速计算实例以及与其绑定的ECS或ECI实例.
     *
     * @param request - DeleteEaiAllRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteEaiAllResponse
     *
     * @param DeleteEaiAllRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteEaiAllResponse
     */
    public function deleteEaiAllWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientInstanceId) {
            @$query['ClientInstanceId'] = $request->clientInstanceId;
        }

        if (null !== $request->elasticAcceleratedInstanceId) {
            @$query['ElasticAcceleratedInstanceId'] = $request->elasticAcceleratedInstanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteEaiAll',
            'version' => '2019-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteEaiAllResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 释放一个弹性加速计算实例以及与其绑定的ECS或ECI实例.
     *
     * @param request - DeleteEaiAllRequest
     *
     * @returns DeleteEaiAllResponse
     *
     * @param DeleteEaiAllRequest $request
     *
     * @return DeleteEaiAllResponse
     */
    public function deleteEaiAll($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteEaiAllWithOptions($request, $runtime);
    }

    /**
     * 释放弹性加速计算实例.
     *
     * @param request - DeleteEaisEiRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteEaisEiResponse
     *
     * @param DeleteEaisEiRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteEaisEiResponse
     */
    public function deleteEaisEiWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->eiInstanceId) {
            @$query['EiInstanceId'] = $request->eiInstanceId;
        }

        if (null !== $request->force) {
            @$query['Force'] = $request->force;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteEaisEi',
            'version' => '2019-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteEaisEiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 释放弹性加速计算实例.
     *
     * @param request - DeleteEaisEiRequest
     *
     * @returns DeleteEaisEiResponse
     *
     * @param DeleteEaisEiRequest $request
     *
     * @return DeleteEaisEiResponse
     */
    public function deleteEaisEi($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteEaisEiWithOptions($request, $runtime);
    }

    /**
     * 查询一个或多个弹性加速计算实例的详细信息.
     *
     * @param request - DescribeEaisRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeEaisResponse
     *
     * @param DescribeEaisRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DescribeEaisResponse
     */
    public function describeEaisWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientInstanceId) {
            @$query['ClientInstanceId'] = $request->clientInstanceId;
        }

        if (null !== $request->elasticAcceleratedInstanceIds) {
            @$query['ElasticAcceleratedInstanceIds'] = $request->elasticAcceleratedInstanceIds;
        }

        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->instanceType) {
            @$query['InstanceType'] = $request->instanceType;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeEais',
            'version' => '2019-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeEaisResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询一个或多个弹性加速计算实例的详细信息.
     *
     * @param request - DescribeEaisRequest
     *
     * @returns DescribeEaisResponse
     *
     * @param DescribeEaisRequest $request
     *
     * @return DescribeEaisResponse
     */
    public function describeEais($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEaisWithOptions($request, $runtime);
    }

    /**
     * 查询您可以使用的阿里云地域
     *
     * @param request - DescribeRegionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRegionsResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegionsWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'DescribeRegions',
            'version' => '2019-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询您可以使用的阿里云地域
     *
     * @returns DescribeRegionsResponse
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegions()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRegionsWithOptions($runtime);
    }

    /**
     * 从ECS实例上卸载弹性加速计算实例.
     *
     * @param request - DetachEaiRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DetachEaiResponse
     *
     * @param DetachEaiRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return DetachEaiResponse
     */
    public function detachEaiWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->elasticAcceleratedInstanceId) {
            @$query['ElasticAcceleratedInstanceId'] = $request->elasticAcceleratedInstanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DetachEai',
            'version' => '2019-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DetachEaiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 从ECS实例上卸载弹性加速计算实例.
     *
     * @param request - DetachEaiRequest
     *
     * @returns DetachEaiResponse
     *
     * @param DetachEaiRequest $request
     *
     * @return DetachEaiResponse
     */
    public function detachEai($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detachEaiWithOptions($request, $runtime);
    }

    /**
     * 将EI实例与ECS或ECI实例解绑.
     *
     * @param request - DetachEaisEiRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DetachEaisEiResponse
     *
     * @param DetachEaisEiRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DetachEaisEiResponse
     */
    public function detachEaisEiWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->eiInstanceId) {
            @$query['EiInstanceId'] = $request->eiInstanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DetachEaisEi',
            'version' => '2019-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DetachEaisEiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 将EI实例与ECS或ECI实例解绑.
     *
     * @param request - DetachEaisEiRequest
     *
     * @returns DetachEaisEiResponse
     *
     * @param DetachEaisEiRequest $request
     *
     * @return DetachEaisEiResponse
     */
    public function detachEaisEi($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detachEaisEiWithOptions($request, $runtime);
    }

    /**
     * 获取EAIS实例级别的监控数据.
     *
     * @param request - GetInstanceMetricsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetInstanceMetricsResponse
     *
     * @param GetInstanceMetricsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetInstanceMetricsResponse
     */
    public function getInstanceMetricsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->metricType) {
            @$query['MetricType'] = $request->metricType;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->timeStep) {
            @$query['TimeStep'] = $request->timeStep;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetInstanceMetrics',
            'version' => '2019-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetInstanceMetricsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取EAIS实例级别的监控数据.
     *
     * @param request - GetInstanceMetricsRequest
     *
     * @returns GetInstanceMetricsResponse
     *
     * @param GetInstanceMetricsRequest $request
     *
     * @return GetInstanceMetricsResponse
     */
    public function getInstanceMetrics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInstanceMetricsWithOptions($request, $runtime);
    }

    /**
     * 查询标签列表.
     *
     * @param request - ListTagResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTagResourcesResponse
     *
     * @param ListTagResourcesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListTagResourcesResponse
     */
    public function listTagResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTagResources',
            'version' => '2019-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListTagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询标签列表.
     *
     * @param request - ListTagResourcesRequest
     *
     * @returns ListTagResourcesResponse
     *
     * @param ListTagResourcesRequest $request
     *
     * @return ListTagResourcesResponse
     */
    public function listTagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTagResourcesWithOptions($request, $runtime);
    }

    /**
     * 启动一个部署了notebook的弹性加速计算实例.
     *
     * @param request - StartEaiJupyterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartEaiJupyterResponse
     *
     * @param StartEaiJupyterRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return StartEaiJupyterResponse
     */
    public function startEaiJupyterWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StartEaiJupyter',
            'version' => '2019-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StartEaiJupyterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 启动一个部署了notebook的弹性加速计算实例.
     *
     * @param request - StartEaiJupyterRequest
     *
     * @returns StartEaiJupyterResponse
     *
     * @param StartEaiJupyterRequest $request
     *
     * @return StartEaiJupyterResponse
     */
    public function startEaiJupyter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startEaiJupyterWithOptions($request, $runtime);
    }

    /**
     * 启动一个弹性加速计算实例.
     *
     * @param request - StartEaisEiRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartEaisEiResponse
     *
     * @param StartEaisEiRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return StartEaisEiResponse
     */
    public function startEaisEiWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->eiInstanceId) {
            @$query['EiInstanceId'] = $request->eiInstanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StartEaisEi',
            'version' => '2019-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StartEaisEiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 启动一个弹性加速计算实例.
     *
     * @param request - StartEaisEiRequest
     *
     * @returns StartEaisEiResponse
     *
     * @param StartEaisEiRequest $request
     *
     * @return StartEaisEiResponse
     */
    public function startEaisEi($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startEaisEiWithOptions($request, $runtime);
    }

    /**
     * 停止一个部署了notebook的弹性加速计算实例.
     *
     * @param request - StopEaiJupyterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopEaiJupyterResponse
     *
     * @param StopEaiJupyterRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return StopEaiJupyterResponse
     */
    public function stopEaiJupyterWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StopEaiJupyter',
            'version' => '2019-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StopEaiJupyterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 停止一个部署了notebook的弹性加速计算实例.
     *
     * @param request - StopEaiJupyterRequest
     *
     * @returns StopEaiJupyterResponse
     *
     * @param StopEaiJupyterRequest $request
     *
     * @return StopEaiJupyterResponse
     */
    public function stopEaiJupyter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopEaiJupyterWithOptions($request, $runtime);
    }

    /**
     * 停止一个弹性加速计算实例.
     *
     * @param request - StopEaisEiRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopEaisEiResponse
     *
     * @param StopEaisEiRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return StopEaisEiResponse
     */
    public function stopEaisEiWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->eiInstanceId) {
            @$query['EiInstanceId'] = $request->eiInstanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StopEaisEi',
            'version' => '2019-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StopEaisEiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 停止一个弹性加速计算实例.
     *
     * @param request - StopEaisEiRequest
     *
     * @returns StopEaisEiResponse
     *
     * @param StopEaisEiRequest $request
     *
     * @return StopEaisEiResponse
     */
    public function stopEaisEi($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopEaisEiWithOptions($request, $runtime);
    }

    /**
     * 为弹性加速计算实例创建并绑定标签.
     *
     * @param request - TagResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TagResourcesResponse
     *
     * @param TagResourcesRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return TagResourcesResponse
     */
    public function tagResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'TagResources',
            'version' => '2019-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return TagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 为弹性加速计算实例创建并绑定标签.
     *
     * @param request - TagResourcesRequest
     *
     * @returns TagResourcesResponse
     *
     * @param TagResourcesRequest $request
     *
     * @return TagResourcesResponse
     */
    public function tagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->tagResourcesWithOptions($request, $runtime);
    }

    /**
     * 解绑并删除标签.
     *
     * @param request - UntagResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UntagResourcesResponse
     *
     * @param UntagResourcesRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UntagResourcesResponse
     */
    public function untagResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->all) {
            @$query['All'] = $request->all;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tagKey) {
            @$query['TagKey'] = $request->tagKey;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UntagResources',
            'version' => '2019-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UntagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 解绑并删除标签.
     *
     * @param request - UntagResourcesRequest
     *
     * @returns UntagResourcesResponse
     *
     * @param UntagResourcesRequest $request
     *
     * @return UntagResourcesResponse
     */
    public function untagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->untagResourcesWithOptions($request, $runtime);
    }
}
