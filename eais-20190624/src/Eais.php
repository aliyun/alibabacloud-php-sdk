<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eais\V20190624;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
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
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Eais extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'ap-northeast-1'              => 'eais.aliyuncs.com',
            'ap-northeast-2-pop'          => 'eais.aliyuncs.com',
            'ap-south-1'                  => 'eais.aliyuncs.com',
            'ap-southeast-1'              => 'eais.aliyuncs.com',
            'ap-southeast-2'              => 'eais.aliyuncs.com',
            'ap-southeast-3'              => 'eais.aliyuncs.com',
            'ap-southeast-5'              => 'eais.aliyuncs.com',
            'cn-beijing-finance-1'        => 'eais.aliyuncs.com',
            'cn-beijing-finance-pop'      => 'eais.aliyuncs.com',
            'cn-beijing-gov-1'            => 'eais.aliyuncs.com',
            'cn-beijing-nu16-b01'         => 'eais.aliyuncs.com',
            'cn-edge-1'                   => 'eais.aliyuncs.com',
            'cn-fujian'                   => 'eais.aliyuncs.com',
            'cn-haidian-cm12-c01'         => 'eais.aliyuncs.com',
            'cn-hangzhou-bj-b01'          => 'eais.aliyuncs.com',
            'cn-hangzhou-finance'         => 'eais.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'eais.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'eais.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'eais.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'eais.aliyuncs.com',
            'cn-hangzhou-test-306'        => 'eais.aliyuncs.com',
            'cn-hongkong'                 => 'eais.aliyuncs.com',
            'cn-hongkong-finance-pop'     => 'eais.aliyuncs.com',
            'cn-huhehaote'                => 'eais.aliyuncs.com',
            'cn-huhehaote-nebula-1'       => 'eais.aliyuncs.com',
            'cn-north-2-gov-1'            => 'eais.aliyuncs.com',
            'cn-qingdao'                  => 'eais.aliyuncs.com',
            'cn-qingdao-nebula'           => 'eais.aliyuncs.com',
            'cn-shanghai-et15-b01'        => 'eais.aliyuncs.com',
            'cn-shanghai-et2-b01'         => 'eais.aliyuncs.com',
            'cn-shanghai-finance-1'       => 'eais.aliyuncs.com',
            'cn-shanghai-inner'           => 'eais.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'eais.aliyuncs.com',
            'cn-shenzhen-finance-1'       => 'eais.aliyuncs.com',
            'cn-shenzhen-inner'           => 'eais.aliyuncs.com',
            'cn-shenzhen-st4-d01'         => 'eais.aliyuncs.com',
            'cn-shenzhen-su18-b01'        => 'eais.aliyuncs.com',
            'cn-wuhan'                    => 'eais.aliyuncs.com',
            'cn-wulanchabu'               => 'eais.aliyuncs.com',
            'cn-yushanfang'               => 'eais.aliyuncs.com',
            'cn-zhangbei'                 => 'eais.aliyuncs.com',
            'cn-zhangbei-na61-b01'        => 'eais.aliyuncs.com',
            'cn-zhangjiakou'              => 'eais.aliyuncs.com',
            'cn-zhangjiakou-na62-a01'     => 'eais.aliyuncs.com',
            'cn-zhengzhou-nebula-1'       => 'eais.aliyuncs.com',
            'eu-central-1'                => 'eais.aliyuncs.com',
            'eu-west-1'                   => 'eais.aliyuncs.com',
            'eu-west-1-oxs'               => 'eais.aliyuncs.com',
            'me-east-1'                   => 'eais.aliyuncs.com',
            'rus-west-1-pop'              => 'eais.aliyuncs.com',
            'us-east-1'                   => 'eais.aliyuncs.com',
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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @summary 将弹性加速计算实例挂载到ECS实例上
     *  *
     * @param AttachEaiRequest $request AttachEaiRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return AttachEaiResponse AttachEaiResponse
     */
    public function attachEaiWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientInstanceId)) {
            $query['ClientInstanceId'] = $request->clientInstanceId;
        }
        if (!Utils::isUnset($request->elasticAcceleratedInstanceId)) {
            $query['ElasticAcceleratedInstanceId'] = $request->elasticAcceleratedInstanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AttachEai',
            'version'     => '2019-06-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AttachEaiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 将弹性加速计算实例挂载到ECS实例上
     *  *
     * @param AttachEaiRequest $request AttachEaiRequest
     *
     * @return AttachEaiResponse AttachEaiResponse
     */
    public function attachEai($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachEaiWithOptions($request, $runtime);
    }

    /**
     * @summary 将EI绑定到ECS或ECI实例上。
     *  *
     * @param AttachEaisEiRequest $request AttachEaisEiRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return AttachEaisEiResponse AttachEaisEiResponse
     */
    public function attachEaisEiWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientInstanceId)) {
            $query['ClientInstanceId'] = $request->clientInstanceId;
        }
        if (!Utils::isUnset($request->eiInstanceId)) {
            $query['EiInstanceId'] = $request->eiInstanceId;
        }
        if (!Utils::isUnset($request->eiInstanceType)) {
            $query['EiInstanceType'] = $request->eiInstanceType;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AttachEaisEi',
            'version'     => '2019-06-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AttachEaisEiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 将EI绑定到ECS或ECI实例上。
     *  *
     * @param AttachEaisEiRequest $request AttachEaisEiRequest
     *
     * @return AttachEaisEiResponse AttachEaisEiResponse
     */
    public function attachEaisEi($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachEaisEiWithOptions($request, $runtime);
    }

    /**
     * @summary 资源转组
     *  *
     * @param ChangeResourceGroupRequest $request ChangeResourceGroupRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ChangeResourceGroupResponse ChangeResourceGroupResponse
     */
    public function changeResourceGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceRegionId)) {
            $query['ResourceRegionId'] = $request->resourceRegionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ChangeResourceGroup',
            'version'     => '2019-06-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ChangeResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 资源转组
     *  *
     * @param ChangeResourceGroupRequest $request ChangeResourceGroupRequest
     *
     * @return ChangeResourceGroupResponse ChangeResourceGroupResponse
     */
    public function changeResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->changeResourceGroupWithOptions($request, $runtime);
    }

    /**
     * @summary 创建一个弹性加速计算实例
     *  *
     * @param CreateEaiRequest $request CreateEaiRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateEaiResponse CreateEaiResponse
     */
    public function createEaiWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->image)) {
            $query['Image'] = $request->image;
        }
        if (!Utils::isUnset($request->instanceName)) {
            $query['InstanceName'] = $request->instanceName;
        }
        if (!Utils::isUnset($request->instanceType)) {
            $query['InstanceType'] = $request->instanceType;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->securityGroupId)) {
            $query['SecurityGroupId'] = $request->securityGroupId;
        }
        if (!Utils::isUnset($request->vSwitchId)) {
            $query['VSwitchId'] = $request->vSwitchId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateEai',
            'version'     => '2019-06-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateEaiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建一个弹性加速计算实例
     *  *
     * @param CreateEaiRequest $request CreateEaiRequest
     *
     * @return CreateEaiResponse CreateEaiResponse
     */
    public function createEai($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createEaiWithOptions($request, $runtime);
    }

    /**
     * @summary 创建一个EAIS实例和ECI实例并绑定
     *  *
     * @param CreateEaiEciRequest $tmpReq  CreateEaiEciRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateEaiEciResponse CreateEaiEciResponse
     */
    public function createEaiEciWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateEaiEciShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->eci)) {
            $request->eciShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->eci, 'Eci', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->eaisName)) {
            $query['EaisName'] = $request->eaisName;
        }
        if (!Utils::isUnset($request->eaisType)) {
            $query['EaisType'] = $request->eaisType;
        }
        if (!Utils::isUnset($request->eciShrink)) {
            $query['Eci'] = $request->eciShrink;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->securityGroupId)) {
            $query['SecurityGroupId'] = $request->securityGroupId;
        }
        if (!Utils::isUnset($request->vSwitchId)) {
            $query['VSwitchId'] = $request->vSwitchId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateEaiEci',
            'version'     => '2019-06-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateEaiEciResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建一个EAIS实例和ECI实例并绑定
     *  *
     * @param CreateEaiEciRequest $request CreateEaiEciRequest
     *
     * @return CreateEaiEciResponse CreateEaiEciResponse
     */
    public function createEaiEci($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createEaiEciWithOptions($request, $runtime);
    }

    /**
     * @summary 创建一个EAIS实例和ECS实例并绑定
     *  *
     * @param CreateEaiEcsRequest $tmpReq  CreateEaiEcsRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateEaiEcsResponse CreateEaiEcsResponse
     */
    public function createEaiEcsWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateEaiEcsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->ecs)) {
            $request->ecsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->ecs, 'Ecs', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->eaisName)) {
            $query['EaisName'] = $request->eaisName;
        }
        if (!Utils::isUnset($request->eaisType)) {
            $query['EaisType'] = $request->eaisType;
        }
        if (!Utils::isUnset($request->ecsShrink)) {
            $query['Ecs'] = $request->ecsShrink;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->securityGroupId)) {
            $query['SecurityGroupId'] = $request->securityGroupId;
        }
        if (!Utils::isUnset($request->vSwitchId)) {
            $query['VSwitchId'] = $request->vSwitchId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateEaiEcs',
            'version'     => '2019-06-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateEaiEcsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建一个EAIS实例和ECS实例并绑定
     *  *
     * @param CreateEaiEcsRequest $request CreateEaiEcsRequest
     *
     * @return CreateEaiEcsResponse CreateEaiEcsResponse
     */
    public function createEaiEcs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createEaiEcsWithOptions($request, $runtime);
    }

    /**
     * @summary 创建一个EAIS Jupyter环境
     *  *
     * @param CreateEaiJupyterRequest $tmpReq  CreateEaiJupyterRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateEaiJupyterResponse CreateEaiJupyterResponse
     */
    public function createEaiJupyterWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateEaiJupyterShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->environmentVar)) {
            $request->environmentVarShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->environmentVar, 'EnvironmentVar', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->eaisName)) {
            $query['EaisName'] = $request->eaisName;
        }
        if (!Utils::isUnset($request->eaisType)) {
            $query['EaisType'] = $request->eaisType;
        }
        if (!Utils::isUnset($request->environmentVarShrink)) {
            $query['EnvironmentVar'] = $request->environmentVarShrink;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->securityGroupId)) {
            $query['SecurityGroupId'] = $request->securityGroupId;
        }
        if (!Utils::isUnset($request->vSwitchId)) {
            $query['VSwitchId'] = $request->vSwitchId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateEaiJupyter',
            'version'     => '2019-06-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateEaiJupyterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建一个EAIS Jupyter环境
     *  *
     * @param CreateEaiJupyterRequest $request CreateEaiJupyterRequest
     *
     * @return CreateEaiJupyterResponse CreateEaiJupyterResponse
     */
    public function createEaiJupyter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createEaiJupyterWithOptions($request, $runtime);
    }

    /**
     * @summary 创建一个弹性加速计算实例
     *  *
     * @param CreateEaisEiRequest $request CreateEaisEiRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateEaisEiResponse CreateEaisEiResponse
     */
    public function createEaisEiWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->instanceName)) {
            $query['InstanceName'] = $request->instanceName;
        }
        if (!Utils::isUnset($request->instanceType)) {
            $query['InstanceType'] = $request->instanceType;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->securityGroupId)) {
            $query['SecurityGroupId'] = $request->securityGroupId;
        }
        if (!Utils::isUnset($request->vSwitchId)) {
            $query['VSwitchId'] = $request->vSwitchId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateEaisEi',
            'version'     => '2019-06-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateEaisEiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建一个弹性加速计算实例
     *  *
     * @param CreateEaisEiRequest $request CreateEaisEiRequest
     *
     * @return CreateEaisEiResponse CreateEaisEiResponse
     */
    public function createEaisEi($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createEaisEiWithOptions($request, $runtime);
    }

    /**
     * @summary 释放一个弹性加速计算实例
     *  *
     * @param DeleteEaiRequest $request DeleteEaiRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteEaiResponse DeleteEaiResponse
     */
    public function deleteEaiWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->elasticAcceleratedInstanceId)) {
            $query['ElasticAcceleratedInstanceId'] = $request->elasticAcceleratedInstanceId;
        }
        if (!Utils::isUnset($request->force)) {
            $query['Force'] = $request->force;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteEai',
            'version'     => '2019-06-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteEaiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 释放一个弹性加速计算实例
     *  *
     * @param DeleteEaiRequest $request DeleteEaiRequest
     *
     * @return DeleteEaiResponse DeleteEaiResponse
     */
    public function deleteEai($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteEaiWithOptions($request, $runtime);
    }

    /**
     * @summary 释放一个弹性加速计算实例以及与其绑定的ECS或ECI实例
     *  *
     * @param DeleteEaiAllRequest $request DeleteEaiAllRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteEaiAllResponse DeleteEaiAllResponse
     */
    public function deleteEaiAllWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientInstanceId)) {
            $query['ClientInstanceId'] = $request->clientInstanceId;
        }
        if (!Utils::isUnset($request->elasticAcceleratedInstanceId)) {
            $query['ElasticAcceleratedInstanceId'] = $request->elasticAcceleratedInstanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteEaiAll',
            'version'     => '2019-06-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteEaiAllResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 释放一个弹性加速计算实例以及与其绑定的ECS或ECI实例
     *  *
     * @param DeleteEaiAllRequest $request DeleteEaiAllRequest
     *
     * @return DeleteEaiAllResponse DeleteEaiAllResponse
     */
    public function deleteEaiAll($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteEaiAllWithOptions($request, $runtime);
    }

    /**
     * @summary 释放弹性加速计算实例
     *  *
     * @param DeleteEaisEiRequest $request DeleteEaisEiRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteEaisEiResponse DeleteEaisEiResponse
     */
    public function deleteEaisEiWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->eiInstanceId)) {
            $query['EiInstanceId'] = $request->eiInstanceId;
        }
        if (!Utils::isUnset($request->force)) {
            $query['Force'] = $request->force;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteEaisEi',
            'version'     => '2019-06-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteEaisEiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 释放弹性加速计算实例
     *  *
     * @param DeleteEaisEiRequest $request DeleteEaisEiRequest
     *
     * @return DeleteEaisEiResponse DeleteEaisEiResponse
     */
    public function deleteEaisEi($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteEaisEiWithOptions($request, $runtime);
    }

    /**
     * @summary 查询一个或多个弹性加速计算实例的详细信息
     *  *
     * @param DescribeEaisRequest $request DescribeEaisRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeEaisResponse DescribeEaisResponse
     */
    public function describeEaisWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientInstanceId)) {
            $query['ClientInstanceId'] = $request->clientInstanceId;
        }
        if (!Utils::isUnset($request->elasticAcceleratedInstanceIds)) {
            $query['ElasticAcceleratedInstanceIds'] = $request->elasticAcceleratedInstanceIds;
        }
        if (!Utils::isUnset($request->instanceName)) {
            $query['InstanceName'] = $request->instanceName;
        }
        if (!Utils::isUnset($request->instanceType)) {
            $query['InstanceType'] = $request->instanceType;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeEais',
            'version'     => '2019-06-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeEaisResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询一个或多个弹性加速计算实例的详细信息
     *  *
     * @param DescribeEaisRequest $request DescribeEaisRequest
     *
     * @return DescribeEaisResponse DescribeEaisResponse
     */
    public function describeEais($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEaisWithOptions($request, $runtime);
    }

    /**
     * @summary 查询您可以使用的阿里云地域
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeRegionsResponse DescribeRegionsResponse
     */
    public function describeRegionsWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'DescribeRegions',
            'version'     => '2019-06-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询您可以使用的阿里云地域
     *  *
     * @return DescribeRegionsResponse DescribeRegionsResponse
     */
    public function describeRegions()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRegionsWithOptions($runtime);
    }

    /**
     * @summary 从ECS实例上卸载弹性加速计算实例
     *  *
     * @param DetachEaiRequest $request DetachEaiRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return DetachEaiResponse DetachEaiResponse
     */
    public function detachEaiWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->elasticAcceleratedInstanceId)) {
            $query['ElasticAcceleratedInstanceId'] = $request->elasticAcceleratedInstanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DetachEai',
            'version'     => '2019-06-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DetachEaiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 从ECS实例上卸载弹性加速计算实例
     *  *
     * @param DetachEaiRequest $request DetachEaiRequest
     *
     * @return DetachEaiResponse DetachEaiResponse
     */
    public function detachEai($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detachEaiWithOptions($request, $runtime);
    }

    /**
     * @summary 将EI实例与ECS或ECI实例解绑
     *  *
     * @param DetachEaisEiRequest $request DetachEaisEiRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return DetachEaisEiResponse DetachEaisEiResponse
     */
    public function detachEaisEiWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->eiInstanceId)) {
            $query['EiInstanceId'] = $request->eiInstanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DetachEaisEi',
            'version'     => '2019-06-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DetachEaisEiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 将EI实例与ECS或ECI实例解绑
     *  *
     * @param DetachEaisEiRequest $request DetachEaisEiRequest
     *
     * @return DetachEaisEiResponse DetachEaisEiResponse
     */
    public function detachEaisEi($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detachEaisEiWithOptions($request, $runtime);
    }

    /**
     * @summary 获取EAIS实例级别的监控数据
     *  *
     * @param GetInstanceMetricsRequest $request GetInstanceMetricsRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return GetInstanceMetricsResponse GetInstanceMetricsResponse
     */
    public function getInstanceMetricsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->metricType)) {
            $query['MetricType'] = $request->metricType;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->timeStep)) {
            $query['TimeStep'] = $request->timeStep;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetInstanceMetrics',
            'version'     => '2019-06-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetInstanceMetricsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取EAIS实例级别的监控数据
     *  *
     * @param GetInstanceMetricsRequest $request GetInstanceMetricsRequest
     *
     * @return GetInstanceMetricsResponse GetInstanceMetricsResponse
     */
    public function getInstanceMetrics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInstanceMetricsWithOptions($request, $runtime);
    }

    /**
     * @summary 查询标签列表
     *  *
     * @param ListTagResourcesRequest $request ListTagResourcesRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTagResourcesResponse ListTagResourcesResponse
     */
    public function listTagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTagResources',
            'version'     => '2019-06-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListTagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询标签列表
     *  *
     * @param ListTagResourcesRequest $request ListTagResourcesRequest
     *
     * @return ListTagResourcesResponse ListTagResourcesResponse
     */
    public function listTagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTagResourcesWithOptions($request, $runtime);
    }

    /**
     * @summary 启动一个部署了notebook的弹性加速计算实例
     *  *
     * @param StartEaiJupyterRequest $request StartEaiJupyterRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return StartEaiJupyterResponse StartEaiJupyterResponse
     */
    public function startEaiJupyterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StartEaiJupyter',
            'version'     => '2019-06-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StartEaiJupyterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 启动一个部署了notebook的弹性加速计算实例
     *  *
     * @param StartEaiJupyterRequest $request StartEaiJupyterRequest
     *
     * @return StartEaiJupyterResponse StartEaiJupyterResponse
     */
    public function startEaiJupyter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startEaiJupyterWithOptions($request, $runtime);
    }

    /**
     * @summary 启动一个弹性加速计算实例
     *  *
     * @param StartEaisEiRequest $request StartEaisEiRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return StartEaisEiResponse StartEaisEiResponse
     */
    public function startEaisEiWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->eiInstanceId)) {
            $query['EiInstanceId'] = $request->eiInstanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StartEaisEi',
            'version'     => '2019-06-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StartEaisEiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 启动一个弹性加速计算实例
     *  *
     * @param StartEaisEiRequest $request StartEaisEiRequest
     *
     * @return StartEaisEiResponse StartEaisEiResponse
     */
    public function startEaisEi($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startEaisEiWithOptions($request, $runtime);
    }

    /**
     * @summary 停止一个部署了notebook的弹性加速计算实例
     *  *
     * @param StopEaiJupyterRequest $request StopEaiJupyterRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return StopEaiJupyterResponse StopEaiJupyterResponse
     */
    public function stopEaiJupyterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StopEaiJupyter',
            'version'     => '2019-06-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StopEaiJupyterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 停止一个部署了notebook的弹性加速计算实例
     *  *
     * @param StopEaiJupyterRequest $request StopEaiJupyterRequest
     *
     * @return StopEaiJupyterResponse StopEaiJupyterResponse
     */
    public function stopEaiJupyter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopEaiJupyterWithOptions($request, $runtime);
    }

    /**
     * @summary 停止一个弹性加速计算实例
     *  *
     * @param StopEaisEiRequest $request StopEaisEiRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return StopEaisEiResponse StopEaisEiResponse
     */
    public function stopEaisEiWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->eiInstanceId)) {
            $query['EiInstanceId'] = $request->eiInstanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StopEaisEi',
            'version'     => '2019-06-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StopEaisEiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 停止一个弹性加速计算实例
     *  *
     * @param StopEaisEiRequest $request StopEaisEiRequest
     *
     * @return StopEaisEiResponse StopEaisEiResponse
     */
    public function stopEaisEi($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopEaisEiWithOptions($request, $runtime);
    }

    /**
     * @summary 为弹性加速计算实例创建并绑定标签
     *  *
     * @param TagResourcesRequest $request TagResourcesRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return TagResourcesResponse TagResourcesResponse
     */
    public function tagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'TagResources',
            'version'     => '2019-06-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 为弹性加速计算实例创建并绑定标签
     *  *
     * @param TagResourcesRequest $request TagResourcesRequest
     *
     * @return TagResourcesResponse TagResourcesResponse
     */
    public function tagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->tagResourcesWithOptions($request, $runtime);
    }

    /**
     * @summary 解绑并删除标签
     *  *
     * @param UntagResourcesRequest $request UntagResourcesRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return UntagResourcesResponse UntagResourcesResponse
     */
    public function untagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->all)) {
            $query['All'] = $request->all;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tagKey)) {
            $query['TagKey'] = $request->tagKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UntagResources',
            'version'     => '2019-06-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UntagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 解绑并删除标签
     *  *
     * @param UntagResourcesRequest $request UntagResourcesRequest
     *
     * @return UntagResourcesResponse UntagResourcesResponse
     */
    public function untagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->untagResourcesWithOptions($request, $runtime);
    }
}
