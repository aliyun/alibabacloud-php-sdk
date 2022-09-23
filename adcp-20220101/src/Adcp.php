<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adcp\V20220101;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Adcp\V20220101\Models\AttachClusterToHubRequest;
use AlibabaCloud\SDK\Adcp\V20220101\Models\AttachClusterToHubResponse;
use AlibabaCloud\SDK\Adcp\V20220101\Models\CreateHubClusterRequest;
use AlibabaCloud\SDK\Adcp\V20220101\Models\CreateHubClusterResponse;
use AlibabaCloud\SDK\Adcp\V20220101\Models\DeleteHubClusterRequest;
use AlibabaCloud\SDK\Adcp\V20220101\Models\DeleteHubClusterResponse;
use AlibabaCloud\SDK\Adcp\V20220101\Models\DescribeHubClusterDetailsRequest;
use AlibabaCloud\SDK\Adcp\V20220101\Models\DescribeHubClusterDetailsResponse;
use AlibabaCloud\SDK\Adcp\V20220101\Models\DescribeHubClusterKubeconfigRequest;
use AlibabaCloud\SDK\Adcp\V20220101\Models\DescribeHubClusterKubeconfigResponse;
use AlibabaCloud\SDK\Adcp\V20220101\Models\DescribeHubClusterLogsRequest;
use AlibabaCloud\SDK\Adcp\V20220101\Models\DescribeHubClusterLogsResponse;
use AlibabaCloud\SDK\Adcp\V20220101\Models\DescribeHubClustersRequest;
use AlibabaCloud\SDK\Adcp\V20220101\Models\DescribeHubClustersResponse;
use AlibabaCloud\SDK\Adcp\V20220101\Models\DescribeManagedClustersRequest;
use AlibabaCloud\SDK\Adcp\V20220101\Models\DescribeManagedClustersResponse;
use AlibabaCloud\SDK\Adcp\V20220101\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\Adcp\V20220101\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\Adcp\V20220101\Models\DetachClusterFromHubRequest;
use AlibabaCloud\SDK\Adcp\V20220101\Models\DetachClusterFromHubResponse;
use AlibabaCloud\SDK\Adcp\V20220101\Models\UpdateHubClusterFeatureRequest;
use AlibabaCloud\SDK\Adcp\V20220101\Models\UpdateHubClusterFeatureResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Adcp extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_signatureAlgorithm = 'v2';
        $this->_endpointRule       = 'central';
        $this->_endpointMap        = [
            'cn-beijing'            => 'adcp.cn-beijing.aliyuncs.com',
            'cn-zhangjiakou'        => 'adcp.cn-zhangjiakou.aliyuncs.com',
            'cn-hangzhou'           => 'adcp.cn-hangzhou.aliyuncs.com',
            'cn-shanghai'           => 'adcp.cn-shanghai.aliyuncs.com',
            'cn-shenzhen'           => 'adcp.cn-shenzhen.aliyuncs.com',
            'cn-heyuan'             => 'adcp.cn-heyuan.aliyuncs.com',
            'cn-hongkong'           => 'adcp.cn-hongkong.aliyuncs.com',
            'ap-northeast-1'        => 'adcp.ap-northeast-1.aliyuncs.com',
            'ap-southeast-1'        => 'adcp.ap-southeast-1.aliyuncs.com',
            'ap-southeast-5'        => 'adcp.ap-southeast-5.aliyuncs.com',
            'ap-south-1'            => 'adcp.ap-south-1.aliyuncs.com',
            'ap-southeast-2'        => 'adcp.ap-southeast-2.aliyuncs.com',
            'ap-southeast-3'        => 'adcp.ap-southeast-3.aliyuncs.com',
            'cn-chengdu'            => 'adcp-vpc.cn-chengdu.aliyuncs.com',
            'cn-huhehaote'          => 'adcp.cn-huhehaote.aliyuncs.com',
            'cn-qingdao'            => 'adcp.cn-qingdao.aliyuncs.com',
            'cn-shanghai-finance-1' => 'adcp-vpc.cn-shanghai-finance-1.aliyuncs.com',
            'cn-wulanchabu'         => 'adcp.cn-wulanchabu.aliyuncs.com',
            'eu-central-1'          => 'adcp.eu-central-1.aliyuncs.com',
            'eu-west-1'             => 'adcp-vpc.eu-west-1.aliyuncs.com',
            'me-east-1'             => 'adcp.me-east-1.aliyuncs.com',
            'us-east-1'             => 'adcp.us-east-1.aliyuncs.com',
            'us-west-1'             => 'adcp.us-west-1.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('adcp', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param AttachClusterToHubRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return AttachClusterToHubResponse
     */
    public function attachClusterToHubWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->attachToMesh)) {
            $query['AttachToMesh'] = $request->attachToMesh;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        $body = [];
        if (!Utils::isUnset($request->clusterIds)) {
            $body['ClusterIds'] = $request->clusterIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AttachClusterToHub',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AttachClusterToHubResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AttachClusterToHubRequest $request
     *
     * @return AttachClusterToHubResponse
     */
    public function attachClusterToHub($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachClusterToHubWithOptions($request, $runtime);
    }

    /**
     * @param CreateHubClusterRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateHubClusterResponse
     */
    public function createHubClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->apiServerPublicEip)) {
            $body['ApiServerPublicEip'] = $request->apiServerPublicEip;
        }
        if (!Utils::isUnset($request->auditLogEnabled)) {
            $body['AuditLogEnabled'] = $request->auditLogEnabled;
        }
        if (!Utils::isUnset($request->isEnterpriseSecurityGroup)) {
            $body['IsEnterpriseSecurityGroup'] = $request->isEnterpriseSecurityGroup;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->profile)) {
            $body['Profile'] = $request->profile;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->vSwitches)) {
            $body['VSwitches'] = $request->vSwitches;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $body['VpcId'] = $request->vpcId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateHubCluster',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateHubClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateHubClusterRequest $request
     *
     * @return CreateHubClusterResponse
     */
    public function createHubCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createHubClusterWithOptions($request, $runtime);
    }

    /**
     * @param DeleteHubClusterRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteHubClusterResponse
     */
    public function deleteHubClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->force)) {
            $query['Force'] = $request->force;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteHubCluster',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteHubClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteHubClusterRequest $request
     *
     * @return DeleteHubClusterResponse
     */
    public function deleteHubCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteHubClusterWithOptions($request, $runtime);
    }

    /**
     * @param DescribeHubClusterDetailsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeHubClusterDetailsResponse
     */
    public function describeHubClusterDetailsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeHubClusterDetails',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeHubClusterDetailsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeHubClusterDetailsRequest $request
     *
     * @return DescribeHubClusterDetailsResponse
     */
    public function describeHubClusterDetails($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHubClusterDetailsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeHubClusterKubeconfigRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeHubClusterKubeconfigResponse
     */
    public function describeHubClusterKubeconfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->privateIpAddress)) {
            $query['PrivateIpAddress'] = $request->privateIpAddress;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeHubClusterKubeconfig',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeHubClusterKubeconfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeHubClusterKubeconfigRequest $request
     *
     * @return DescribeHubClusterKubeconfigResponse
     */
    public function describeHubClusterKubeconfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHubClusterKubeconfigWithOptions($request, $runtime);
    }

    /**
     * @param DescribeHubClusterLogsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeHubClusterLogsResponse
     */
    public function describeHubClusterLogsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeHubClusterLogs',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeHubClusterLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeHubClusterLogsRequest $request
     *
     * @return DescribeHubClusterLogsResponse
     */
    public function describeHubClusterLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHubClusterLogsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeHubClustersRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeHubClustersResponse
     */
    public function describeHubClustersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->profile)) {
            $query['Profile'] = $request->profile;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeHubClusters',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeHubClustersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeHubClustersRequest $request
     *
     * @return DescribeHubClustersResponse
     */
    public function describeHubClusters($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHubClustersWithOptions($request, $runtime);
    }

    /**
     * @param DescribeManagedClustersRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeManagedClustersResponse
     */
    public function describeManagedClustersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeManagedClusters',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeManagedClustersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeManagedClustersRequest $request
     *
     * @return DescribeManagedClustersResponse
     */
    public function describeManagedClusters($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeManagedClustersWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRegionsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRegions',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeRegionsRequest $request
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRegionsWithOptions($request, $runtime);
    }

    /**
     * @param DetachClusterFromHubRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DetachClusterFromHubResponse
     */
    public function detachClusterFromHubWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->detachFromMesh)) {
            $query['DetachFromMesh'] = $request->detachFromMesh;
        }
        $body = [];
        if (!Utils::isUnset($request->clusterIds)) {
            $body['ClusterIds'] = $request->clusterIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DetachClusterFromHub',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DetachClusterFromHubResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DetachClusterFromHubRequest $request
     *
     * @return DetachClusterFromHubResponse
     */
    public function detachClusterFromHub($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detachClusterFromHubWithOptions($request, $runtime);
    }

    /**
     * @param UpdateHubClusterFeatureRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return UpdateHubClusterFeatureResponse
     */
    public function updateHubClusterFeatureWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiServerEipId)) {
            $query['ApiServerEipId'] = $request->apiServerEipId;
        }
        if (!Utils::isUnset($request->auditLogEnabled)) {
            $query['AuditLogEnabled'] = $request->auditLogEnabled;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->deletionProtection)) {
            $query['DeletionProtection'] = $request->deletionProtection;
        }
        if (!Utils::isUnset($request->enableArgoCD)) {
            $query['EnableArgoCD'] = $request->enableArgoCD;
        }
        if (!Utils::isUnset($request->enableMesh)) {
            $query['EnableMesh'] = $request->enableMesh;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->publicApiServerEnabled)) {
            $query['PublicApiServerEnabled'] = $request->publicApiServerEnabled;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateHubClusterFeature',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateHubClusterFeatureResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateHubClusterFeatureRequest $request
     *
     * @return UpdateHubClusterFeatureResponse
     */
    public function updateHubClusterFeature($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateHubClusterFeatureWithOptions($request, $runtime);
    }
}
