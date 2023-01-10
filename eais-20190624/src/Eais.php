<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eais\V20190624;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Eais\V20190624\Models\AttachEaiRequest;
use AlibabaCloud\SDK\Eais\V20190624\Models\AttachEaiResponse;
use AlibabaCloud\SDK\Eais\V20190624\Models\ChangeResourceGroupRequest;
use AlibabaCloud\SDK\Eais\V20190624\Models\ChangeResourceGroupResponse;
use AlibabaCloud\SDK\Eais\V20190624\Models\CreateEaiAllRequest;
use AlibabaCloud\SDK\Eais\V20190624\Models\CreateEaiAllResponse;
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
use AlibabaCloud\SDK\Eais\V20190624\Models\DeleteEaiAllRequest;
use AlibabaCloud\SDK\Eais\V20190624\Models\DeleteEaiAllResponse;
use AlibabaCloud\SDK\Eais\V20190624\Models\DeleteEaiRequest;
use AlibabaCloud\SDK\Eais\V20190624\Models\DeleteEaiResponse;
use AlibabaCloud\SDK\Eais\V20190624\Models\DescribeEaisRequest;
use AlibabaCloud\SDK\Eais\V20190624\Models\DescribeEaisResponse;
use AlibabaCloud\SDK\Eais\V20190624\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\Eais\V20190624\Models\DetachEaiRequest;
use AlibabaCloud\SDK\Eais\V20190624\Models\DetachEaiResponse;
use AlibabaCloud\SDK\Eais\V20190624\Models\GetInstanceMetricsRequest;
use AlibabaCloud\SDK\Eais\V20190624\Models\GetInstanceMetricsResponse;
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
     * @param AttachEaiRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return AttachEaiResponse
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
     * @param ChangeResourceGroupRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ChangeResourceGroupResponse
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
     * @param CreateEaiRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return CreateEaiResponse
     */
    public function createEaiWithOptions($request, $runtime)
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
     * @deprecated
     *   *
     * Deprecated
     *
     * @param CreateEaiAllRequest $request CreateEaiAllRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateEaiAllResponse CreateEaiAllResponse
     */
    public function createEaiAllWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientImageId)) {
            $query['ClientImageId'] = $request->clientImageId;
        }
        if (!Utils::isUnset($request->clientInstanceName)) {
            $query['ClientInstanceName'] = $request->clientInstanceName;
        }
        if (!Utils::isUnset($request->clientInstanceType)) {
            $query['ClientInstanceType'] = $request->clientInstanceType;
        }
        if (!Utils::isUnset($request->clientInternetMaxBandwidthIn)) {
            $query['ClientInternetMaxBandwidthIn'] = $request->clientInternetMaxBandwidthIn;
        }
        if (!Utils::isUnset($request->clientInternetMaxBandwidthOut)) {
            $query['ClientInternetMaxBandwidthOut'] = $request->clientInternetMaxBandwidthOut;
        }
        if (!Utils::isUnset($request->clientPassword)) {
            $query['ClientPassword'] = $request->clientPassword;
        }
        if (!Utils::isUnset($request->clientSecurityGroupId)) {
            $query['ClientSecurityGroupId'] = $request->clientSecurityGroupId;
        }
        if (!Utils::isUnset($request->clientSystemDiskCategory)) {
            $query['ClientSystemDiskCategory'] = $request->clientSystemDiskCategory;
        }
        if (!Utils::isUnset($request->clientSystemDiskSize)) {
            $query['ClientSystemDiskSize'] = $request->clientSystemDiskSize;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->clientVSwitchId)) {
            $query['ClientVSwitchId'] = $request->clientVSwitchId;
        }
        if (!Utils::isUnset($request->clientZoneId)) {
            $query['ClientZoneId'] = $request->clientZoneId;
        }
        if (!Utils::isUnset($request->eaiInstanceType)) {
            $query['EaiInstanceType'] = $request->eaiInstanceType;
        }
        if (!Utils::isUnset($request->instanceName)) {
            $query['InstanceName'] = $request->instanceName;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateEaiAll',
            'version'     => '2019-06-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateEaiAllResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @deprecated
     *   *
     * Deprecated
     *
     * @param CreateEaiAllRequest $request CreateEaiAllRequest
     *
     * @return CreateEaiAllResponse CreateEaiAllResponse
     */
    public function createEaiAll($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createEaiAllWithOptions($request, $runtime);
    }

    /**
     * @param CreateEaiEciRequest $tmpReq
     * @param RuntimeOptions      $runtime
     *
     * @return CreateEaiEciResponse
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
     * @param CreateEaiEcsRequest $tmpReq
     * @param RuntimeOptions      $runtime
     *
     * @return CreateEaiEcsResponse
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
     * @param CreateEaiJupyterRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return CreateEaiJupyterResponse
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
     * @param DeleteEaiRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return DeleteEaiResponse
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
     * @param DeleteEaiAllRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteEaiAllResponse
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
     * @param DescribeEaisRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DescribeEaisResponse
     */
    public function describeEaisWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
     * @param RuntimeOptions $runtime
     *
     * @return DescribeRegionsResponse
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
     * @return DescribeRegionsResponse
     */
    public function describeRegions()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRegionsWithOptions($runtime);
    }

    /**
     * @param DetachEaiRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return DetachEaiResponse
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
     * @param GetInstanceMetricsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetInstanceMetricsResponse
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
     * @param GetInstanceMetricsRequest $request
     *
     * @return GetInstanceMetricsResponse
     */
    public function getInstanceMetrics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInstanceMetricsWithOptions($request, $runtime);
    }
}
