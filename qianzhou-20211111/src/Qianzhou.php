<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qianzhou\V20211111;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Qianzhou\V20211111\Models\AICreateSessionMessageRequest;
use AlibabaCloud\SDK\Qianzhou\V20211111\Models\AICreateSessionMessageResponse;
use AlibabaCloud\SDK\Qianzhou\V20211111\Models\CreateDiagnosisRequest;
use AlibabaCloud\SDK\Qianzhou\V20211111\Models\CreateDiagnosisResponse;
use AlibabaCloud\SDK\Qianzhou\V20211111\Models\GetClusterRequest;
use AlibabaCloud\SDK\Qianzhou\V20211111\Models\GetClusterResponse;
use AlibabaCloud\SDK\Qianzhou\V20211111\Models\GetClusterWarningRequest;
use AlibabaCloud\SDK\Qianzhou\V20211111\Models\GetClusterWarningResponse;
use AlibabaCloud\SDK\Qianzhou\V20211111\Models\GetDiagnosisResultRequest;
use AlibabaCloud\SDK\Qianzhou\V20211111\Models\GetDiagnosisResultResponse;
use AlibabaCloud\SDK\Qianzhou\V20211111\Models\GetUserClusterWarningRequest;
use AlibabaCloud\SDK\Qianzhou\V20211111\Models\GetUserClusterWarningResponse;
use AlibabaCloud\SDK\Qianzhou\V20211111\Models\GetWebshellTokenResponse;
use AlibabaCloud\SDK\Qianzhou\V20211111\Models\HelloRequest;
use AlibabaCloud\SDK\Qianzhou\V20211111\Models\HelloResponse;
use AlibabaCloud\SDK\Qianzhou\V20211111\Models\ListClusterDeprecatedAPIRequest;
use AlibabaCloud\SDK\Qianzhou\V20211111\Models\ListClusterDeprecatedAPIResponse;
use AlibabaCloud\SDK\Qianzhou\V20211111\Models\ListClusterImagesRequest;
use AlibabaCloud\SDK\Qianzhou\V20211111\Models\ListClusterImagesResponse;
use AlibabaCloud\SDK\Qianzhou\V20211111\Models\ListUserClustersRequest;
use AlibabaCloud\SDK\Qianzhou\V20211111\Models\ListUserClustersResponse;
use AlibabaCloud\SDK\Qianzhou\V20211111\Models\QueryByInstanceInfoRequest;
use AlibabaCloud\SDK\Qianzhou\V20211111\Models\QueryByInstanceInfoResponse;
use AlibabaCloud\SDK\Qianzhou\V20211111\Models\QueryNodeInfoRequest;
use AlibabaCloud\SDK\Qianzhou\V20211111\Models\QueryNodeInfoResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Qianzhou extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('qianzhou', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @summary ACK AI助手千舟InnerAPI
     *  *
     * @param AICreateSessionMessageRequest $request AICreateSessionMessageRequest
     * @param string[]                      $headers map
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return AICreateSessionMessageResponse AICreateSessionMessageResponse
     */
    public function aICreateSessionMessageWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->employeeId)) {
            $query['employee_id'] = $request->employeeId;
        }
        $body = [];
        if (!Utils::isUnset($request->context)) {
            $body['context'] = $request->context;
        }
        if (!Utils::isUnset($request->language)) {
            $body['language'] = $request->language;
        }
        if (!Utils::isUnset($request->message)) {
            $body['message'] = $request->message;
        }
        if (!Utils::isUnset($request->sessionId)) {
            $body['session_id'] = $request->sessionId;
        }
        if (!Utils::isUnset($request->type)) {
            $body['type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AICreateSessionMessage',
            'version'     => '2021-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/popapi/AICreateSessionMessage',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return AICreateSessionMessageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary ACK AI助手千舟InnerAPI
     *  *
     * @param AICreateSessionMessageRequest $request AICreateSessionMessageRequest
     *
     * @return AICreateSessionMessageResponse AICreateSessionMessageResponse
     */
    public function aICreateSessionMessage($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->aICreateSessionMessageWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary CreateDiagnosis
     *  *
     * @param CreateDiagnosisRequest $request CreateDiagnosisRequest
     * @param string[]               $headers map
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateDiagnosisResponse CreateDiagnosisResponse
     */
    public function createDiagnosisWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterID)) {
            $query['clusterID'] = $request->clusterID;
        }
        if (!Utils::isUnset($request->diagnosisType)) {
            $query['diagnosisType'] = $request->diagnosisType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'CreateDiagnosis',
            'version'     => '2021-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/popapi/createDiagnosis',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateDiagnosisResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary CreateDiagnosis
     *  *
     * @param CreateDiagnosisRequest $request CreateDiagnosisRequest
     *
     * @return CreateDiagnosisResponse CreateDiagnosisResponse
     */
    public function createDiagnosis($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createDiagnosisWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取集群信息
     *  *
     * @param GetClusterRequest $request GetClusterRequest
     * @param string[]          $headers map
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return GetClusterResponse GetClusterResponse
     */
    public function getClusterWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterID)) {
            $query['clusterID'] = $request->clusterID;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetCluster',
            'version'     => '2021-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/popapi/getCluster',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取集群信息
     *  *
     * @param GetClusterRequest $request GetClusterRequest
     *
     * @return GetClusterResponse GetClusterResponse
     */
    public function getCluster($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getClusterWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 单个集群的高危风险项
     *  *
     * @param GetClusterWarningRequest $request GetClusterWarningRequest
     * @param string[]                 $headers map
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return GetClusterWarningResponse GetClusterWarningResponse
     */
    public function getClusterWarningWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterID)) {
            $query['clusterID'] = $request->clusterID;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetClusterWarning',
            'version'     => '2021-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/popapi/getKeyClusterWarningList',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetClusterWarningResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 单个集群的高危风险项
     *  *
     * @param GetClusterWarningRequest $request GetClusterWarningRequest
     *
     * @return GetClusterWarningResponse GetClusterWarningResponse
     */
    public function getClusterWarning($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getClusterWarningWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary GetDiagnosisResult
     *  *
     * @param GetDiagnosisResultRequest $request GetDiagnosisResultRequest
     * @param string[]                  $headers map
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return GetDiagnosisResultResponse GetDiagnosisResultResponse
     */
    public function getDiagnosisResultWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->diagnosisId)) {
            $query['diagnosisId'] = $request->diagnosisId;
        }
        if (!Utils::isUnset($request->ownerUid)) {
            $query['ownerUid'] = $request->ownerUid;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDiagnosisResult',
            'version'     => '2021-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/popapi/GetDiagnosisResult',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetDiagnosisResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary GetDiagnosisResult
     *  *
     * @param GetDiagnosisResultRequest $request GetDiagnosisResultRequest
     *
     * @return GetDiagnosisResultResponse GetDiagnosisResultResponse
     */
    public function getDiagnosisResult($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getDiagnosisResultWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 单个用户的高危集群
     *  *
     * @param GetUserClusterWarningRequest $request GetUserClusterWarningRequest
     * @param string[]                     $headers map
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return GetUserClusterWarningResponse GetUserClusterWarningResponse
     */
    public function getUserClusterWarningWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->userID)) {
            $query['userID'] = $request->userID;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetUserClusterWarning',
            'version'     => '2021-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/popapi/listUserKeyClusters',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetUserClusterWarningResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 单个用户的高危集群
     *  *
     * @param GetUserClusterWarningRequest $request GetUserClusterWarningRequest
     *
     * @return GetUserClusterWarningResponse GetUserClusterWarningResponse
     */
    public function getUserClusterWarning($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getUserClusterWarningWithOptions($request, $headers, $runtime);
    }

    /**
     * @deprecated OpenAPI GetWebshellToken is deprecated
     *  *
     * Deprecated
     *
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetWebshellTokenResponse GetWebshellTokenResponse
     */
    public function getWebshellTokenWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetWebshellToken',
            'version'     => '2021-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/popapi/getChorusToken',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetWebshellTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @deprecated OpenAPI GetWebshellToken is deprecated
     *  *
     * Deprecated
     *
     * @return GetWebshellTokenResponse GetWebshellTokenResponse
     */
    public function getWebshellToken()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getWebshellTokenWithOptions($headers, $runtime);
    }

    /**
     * @summary 测试接口
     *  *
     * @param HelloRequest   $request HelloRequest
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return HelloResponse HelloResponse
     */
    public function helloWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->user)) {
            $query['user'] = $request->user;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'Hello',
            'version'     => '2021-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/popapi/hello',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return HelloResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 测试接口
     *  *
     * @param HelloRequest $request HelloRequest
     *
     * @return HelloResponse HelloResponse
     */
    public function hello($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->helloWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取某集群废弃api的统计情况
     *  *
     * @param ListClusterDeprecatedAPIRequest $request ListClusterDeprecatedAPIRequest
     * @param string[]                        $headers map
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return ListClusterDeprecatedAPIResponse ListClusterDeprecatedAPIResponse
     */
    public function listClusterDeprecatedAPIWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['cluster_id'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['page_no'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['page_size'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->targetVersion)) {
            $query['target_version'] = $request->targetVersion;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListClusterDeprecatedAPI',
            'version'     => '2021-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/popapi/listDeprecatedK8sAPI',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListClusterDeprecatedAPIResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取某集群废弃api的统计情况
     *  *
     * @param ListClusterDeprecatedAPIRequest $request ListClusterDeprecatedAPIRequest
     *
     * @return ListClusterDeprecatedAPIResponse ListClusterDeprecatedAPIResponse
     */
    public function listClusterDeprecatedAPI($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listClusterDeprecatedAPIWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取某集群中的Image列表
     *  *
     * @param ListClusterImagesRequest $request ListClusterImagesRequest
     * @param string[]                 $headers map
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ListClusterImagesResponse ListClusterImagesResponse
     */
    public function listClusterImagesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['cluster_id'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->imageHash)) {
            $query['image_hash'] = $request->imageHash;
        }
        if (!Utils::isUnset($request->imageName)) {
            $query['image_name'] = $request->imageName;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['page_no'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['page_size'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->uid)) {
            $query['uid'] = $request->uid;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListClusterImages',
            'version'     => '2021-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/popapi/listClusterPodImages',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListClusterImagesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取某集群中的Image列表
     *  *
     * @param ListClusterImagesRequest $request ListClusterImagesRequest
     *
     * @return ListClusterImagesResponse ListClusterImagesResponse
     */
    public function listClusterImages($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listClusterImagesWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取用户下的集群列表
     *  *
     * @param ListUserClustersRequest $request ListUserClustersRequest
     * @param string[]                $headers map
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ListUserClustersResponse ListUserClustersResponse
     */
    public function listUserClustersWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->current)) {
            $query['current'] = $request->current;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->userID)) {
            $query['userID'] = $request->userID;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListUserClusters',
            'version'     => '2021-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/popapi/listUserClusters',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListUserClustersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取用户下的集群列表
     *  *
     * @param ListUserClustersRequest $request ListUserClustersRequest
     *
     * @return ListUserClustersResponse ListUserClustersResponse
     */
    public function listUserClusters($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listUserClustersWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 查询节点相关集群、用户信息
     *  *
     * @param QueryByInstanceInfoRequest $request QueryByInstanceInfoRequest
     * @param string[]                   $headers map
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryByInstanceInfoResponse QueryByInstanceInfoResponse
     */
    public function queryByInstanceInfoWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryByInstanceInfo',
            'version'     => '2021-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/popapi/queryByInstanceInfo',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return QueryByInstanceInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询节点相关集群、用户信息
     *  *
     * @param QueryByInstanceInfoRequest $request QueryByInstanceInfoRequest
     *
     * @return QueryByInstanceInfoResponse QueryByInstanceInfoResponse
     */
    public function queryByInstanceInfo($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryByInstanceInfoWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 根据节点instanceId查询集群/用户信息
     *  *
     * @param QueryNodeInfoRequest $request QueryNodeInfoRequest
     * @param string[]             $headers map
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryNodeInfoResponse QueryNodeInfoResponse
     */
    public function queryNodeInfoWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['instanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['regionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryNodeInfo',
            'version'     => '2021-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/popapi/queryByInstanceId',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return QueryNodeInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 根据节点instanceId查询集群/用户信息
     *  *
     * @param QueryNodeInfoRequest $request QueryNodeInfoRequest
     *
     * @return QueryNodeInfoResponse QueryNodeInfoResponse
     */
    public function queryNodeInfo($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryNodeInfoWithOptions($request, $headers, $runtime);
    }
}
