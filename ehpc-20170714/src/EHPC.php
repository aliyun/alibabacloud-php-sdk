<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20170714;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\EHPC\V20170714\Models\AddNodesRequest;
use AlibabaCloud\SDK\EHPC\V20170714\Models\AddNodesResponse;
use AlibabaCloud\SDK\EHPC\V20170714\Models\AddUsersRequest;
use AlibabaCloud\SDK\EHPC\V20170714\Models\AddUsersResponse;
use AlibabaCloud\SDK\EHPC\V20170714\Models\CreateClusterRequest;
use AlibabaCloud\SDK\EHPC\V20170714\Models\CreateClusterResponse;
use AlibabaCloud\SDK\EHPC\V20170714\Models\CreateJobTemplateRequest;
use AlibabaCloud\SDK\EHPC\V20170714\Models\CreateJobTemplateResponse;
use AlibabaCloud\SDK\EHPC\V20170714\Models\DeleteClusterRequest;
use AlibabaCloud\SDK\EHPC\V20170714\Models\DeleteClusterResponse;
use AlibabaCloud\SDK\EHPC\V20170714\Models\DeleteJobsRequest;
use AlibabaCloud\SDK\EHPC\V20170714\Models\DeleteJobsResponse;
use AlibabaCloud\SDK\EHPC\V20170714\Models\DeleteJobTemplatesRequest;
use AlibabaCloud\SDK\EHPC\V20170714\Models\DeleteJobTemplatesResponse;
use AlibabaCloud\SDK\EHPC\V20170714\Models\DeleteNodesRequest;
use AlibabaCloud\SDK\EHPC\V20170714\Models\DeleteNodesResponse;
use AlibabaCloud\SDK\EHPC\V20170714\Models\DeleteUsersRequest;
use AlibabaCloud\SDK\EHPC\V20170714\Models\DeleteUsersResponse;
use AlibabaCloud\SDK\EHPC\V20170714\Models\DescribeClusterRequest;
use AlibabaCloud\SDK\EHPC\V20170714\Models\DescribeClusterResponse;
use AlibabaCloud\SDK\EHPC\V20170714\Models\EditJobTemplateRequest;
use AlibabaCloud\SDK\EHPC\V20170714\Models\EditJobTemplateResponse;
use AlibabaCloud\SDK\EHPC\V20170714\Models\GetAutoScaleConfigRequest;
use AlibabaCloud\SDK\EHPC\V20170714\Models\GetAutoScaleConfigResponse;
use AlibabaCloud\SDK\EHPC\V20170714\Models\ListClusterLogsRequest;
use AlibabaCloud\SDK\EHPC\V20170714\Models\ListClusterLogsResponse;
use AlibabaCloud\SDK\EHPC\V20170714\Models\ListClustersRequest;
use AlibabaCloud\SDK\EHPC\V20170714\Models\ListClustersResponse;
use AlibabaCloud\SDK\EHPC\V20170714\Models\ListCurrentClientVersionResponse;
use AlibabaCloud\SDK\EHPC\V20170714\Models\ListCustomImagesRequest;
use AlibabaCloud\SDK\EHPC\V20170714\Models\ListCustomImagesResponse;
use AlibabaCloud\SDK\EHPC\V20170714\Models\ListImagesResponse;
use AlibabaCloud\SDK\EHPC\V20170714\Models\ListJobsRequest;
use AlibabaCloud\SDK\EHPC\V20170714\Models\ListJobsResponse;
use AlibabaCloud\SDK\EHPC\V20170714\Models\ListJobTemplatesRequest;
use AlibabaCloud\SDK\EHPC\V20170714\Models\ListJobTemplatesResponse;
use AlibabaCloud\SDK\EHPC\V20170714\Models\ListNodesNoPagingRequest;
use AlibabaCloud\SDK\EHPC\V20170714\Models\ListNodesNoPagingResponse;
use AlibabaCloud\SDK\EHPC\V20170714\Models\ListNodesRequest;
use AlibabaCloud\SDK\EHPC\V20170714\Models\ListNodesResponse;
use AlibabaCloud\SDK\EHPC\V20170714\Models\ListPreferredEcsTypesRequest;
use AlibabaCloud\SDK\EHPC\V20170714\Models\ListPreferredEcsTypesResponse;
use AlibabaCloud\SDK\EHPC\V20170714\Models\ListRegionsResponse;
use AlibabaCloud\SDK\EHPC\V20170714\Models\ListSoftwaresRequest;
use AlibabaCloud\SDK\EHPC\V20170714\Models\ListSoftwaresResponse;
use AlibabaCloud\SDK\EHPC\V20170714\Models\ListUsersRequest;
use AlibabaCloud\SDK\EHPC\V20170714\Models\ListUsersResponse;
use AlibabaCloud\SDK\EHPC\V20170714\Models\ListVolumesRequest;
use AlibabaCloud\SDK\EHPC\V20170714\Models\ListVolumesResponse;
use AlibabaCloud\SDK\EHPC\V20170714\Models\ModifyClusterAttributesRequest;
use AlibabaCloud\SDK\EHPC\V20170714\Models\ModifyClusterAttributesResponse;
use AlibabaCloud\SDK\EHPC\V20170714\Models\ModifyUserGroupsRequest;
use AlibabaCloud\SDK\EHPC\V20170714\Models\ModifyUserGroupsResponse;
use AlibabaCloud\SDK\EHPC\V20170714\Models\ModifyUserPasswordsRequest;
use AlibabaCloud\SDK\EHPC\V20170714\Models\ModifyUserPasswordsResponse;
use AlibabaCloud\SDK\EHPC\V20170714\Models\RerunJobsRequest;
use AlibabaCloud\SDK\EHPC\V20170714\Models\RerunJobsResponse;
use AlibabaCloud\SDK\EHPC\V20170714\Models\ResetNodesRequest;
use AlibabaCloud\SDK\EHPC\V20170714\Models\ResetNodesResponse;
use AlibabaCloud\SDK\EHPC\V20170714\Models\SetAutoScaleConfigRequest;
use AlibabaCloud\SDK\EHPC\V20170714\Models\SetAutoScaleConfigResponse;
use AlibabaCloud\SDK\EHPC\V20170714\Models\SetJobUserRequest;
use AlibabaCloud\SDK\EHPC\V20170714\Models\SetJobUserResponse;
use AlibabaCloud\SDK\EHPC\V20170714\Models\StopJobsRequest;
use AlibabaCloud\SDK\EHPC\V20170714\Models\StopJobsResponse;
use AlibabaCloud\SDK\EHPC\V20170714\Models\SubmitJobRequest;
use AlibabaCloud\SDK\EHPC\V20170714\Models\SubmitJobResponse;
use AlibabaCloud\SDK\EHPC\V20170714\Models\UpgradeClientRequest;
use AlibabaCloud\SDK\EHPC\V20170714\Models\UpgradeClientResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class EHPC extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('ehpc', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param AddNodesRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return AddNodesResponse
     */
    public function addNodesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddNodes',
            'version'     => '2017-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddNodesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddNodesRequest $request
     *
     * @return AddNodesResponse
     */
    public function addNodes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addNodesWithOptions($request, $runtime);
    }

    /**
     * @param AddUsersRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return AddUsersResponse
     */
    public function addUsersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddUsers',
            'version'     => '2017-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddUsersRequest $request
     *
     * @return AddUsersResponse
     */
    public function addUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addUsersWithOptions($request, $runtime);
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
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateCluster',
            'version'     => '2017-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateClusterResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param CreateJobTemplateRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateJobTemplateResponse
     */
    public function createJobTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateJobTemplate',
            'version'     => '2017-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateJobTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateJobTemplateRequest $request
     *
     * @return CreateJobTemplateResponse
     */
    public function createJobTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createJobTemplateWithOptions($request, $runtime);
    }

    /**
     * @param DeleteClusterRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteClusterResponse
     */
    public function deleteClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteCluster',
            'version'     => '2017-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteClusterRequest $request
     *
     * @return DeleteClusterResponse
     */
    public function deleteCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteClusterWithOptions($request, $runtime);
    }

    /**
     * @param DeleteJobTemplatesRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteJobTemplatesResponse
     */
    public function deleteJobTemplatesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteJobTemplates',
            'version'     => '2017-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteJobTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteJobTemplatesRequest $request
     *
     * @return DeleteJobTemplatesResponse
     */
    public function deleteJobTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteJobTemplatesWithOptions($request, $runtime);
    }

    /**
     * @param DeleteJobsRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return DeleteJobsResponse
     */
    public function deleteJobsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteJobs',
            'version'     => '2017-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteJobsRequest $request
     *
     * @return DeleteJobsResponse
     */
    public function deleteJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteJobsWithOptions($request, $runtime);
    }

    /**
     * @param DeleteNodesRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteNodesResponse
     */
    public function deleteNodesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteNodes',
            'version'     => '2017-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteNodesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteNodesRequest $request
     *
     * @return DeleteNodesResponse
     */
    public function deleteNodes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteNodesWithOptions($request, $runtime);
    }

    /**
     * @param DeleteUsersRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteUsersResponse
     */
    public function deleteUsersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteUsers',
            'version'     => '2017-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteUsersRequest $request
     *
     * @return DeleteUsersResponse
     */
    public function deleteUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteUsersWithOptions($request, $runtime);
    }

    /**
     * @param DescribeClusterRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeClusterResponse
     */
    public function describeClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeCluster',
            'version'     => '2017-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeClusterRequest $request
     *
     * @return DescribeClusterResponse
     */
    public function describeCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeClusterWithOptions($request, $runtime);
    }

    /**
     * @param EditJobTemplateRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return EditJobTemplateResponse
     */
    public function editJobTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'EditJobTemplate',
            'version'     => '2017-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EditJobTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param EditJobTemplateRequest $request
     *
     * @return EditJobTemplateResponse
     */
    public function editJobTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->editJobTemplateWithOptions($request, $runtime);
    }

    /**
     * @param GetAutoScaleConfigRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetAutoScaleConfigResponse
     */
    public function getAutoScaleConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAutoScaleConfig',
            'version'     => '2017-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAutoScaleConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetAutoScaleConfigRequest $request
     *
     * @return GetAutoScaleConfigResponse
     */
    public function getAutoScaleConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAutoScaleConfigWithOptions($request, $runtime);
    }

    /**
     * @param ListClusterLogsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListClusterLogsResponse
     */
    public function listClusterLogsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListClusterLogs',
            'version'     => '2017-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListClusterLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListClusterLogsRequest $request
     *
     * @return ListClusterLogsResponse
     */
    public function listClusterLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listClusterLogsWithOptions($request, $runtime);
    }

    /**
     * @param ListClustersRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListClustersResponse
     */
    public function listClustersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListClusters',
            'version'     => '2017-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListClustersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListClustersRequest $request
     *
     * @return ListClustersResponse
     */
    public function listClusters($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listClustersWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return ListCurrentClientVersionResponse
     */
    public function listCurrentClientVersionWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'ListCurrentClientVersion',
            'version'     => '2017-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListCurrentClientVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return ListCurrentClientVersionResponse
     */
    public function listCurrentClientVersion()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCurrentClientVersionWithOptions($runtime);
    }

    /**
     * @param ListCustomImagesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListCustomImagesResponse
     */
    public function listCustomImagesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListCustomImages',
            'version'     => '2017-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListCustomImagesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListCustomImagesRequest $request
     *
     * @return ListCustomImagesResponse
     */
    public function listCustomImages($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCustomImagesWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return ListImagesResponse
     */
    public function listImagesWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'ListImages',
            'version'     => '2017-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListImagesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return ListImagesResponse
     */
    public function listImages()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listImagesWithOptions($runtime);
    }

    /**
     * @param ListJobTemplatesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListJobTemplatesResponse
     */
    public function listJobTemplatesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListJobTemplates',
            'version'     => '2017-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListJobTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListJobTemplatesRequest $request
     *
     * @return ListJobTemplatesResponse
     */
    public function listJobTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listJobTemplatesWithOptions($request, $runtime);
    }

    /**
     * @param ListJobsRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return ListJobsResponse
     */
    public function listJobsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListJobs',
            'version'     => '2017-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListJobsRequest $request
     *
     * @return ListJobsResponse
     */
    public function listJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listJobsWithOptions($request, $runtime);
    }

    /**
     * @param ListNodesRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ListNodesResponse
     */
    public function listNodesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListNodes',
            'version'     => '2017-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListNodesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListNodesRequest $request
     *
     * @return ListNodesResponse
     */
    public function listNodes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listNodesWithOptions($request, $runtime);
    }

    /**
     * @param ListNodesNoPagingRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListNodesNoPagingResponse
     */
    public function listNodesNoPagingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListNodesNoPaging',
            'version'     => '2017-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListNodesNoPagingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListNodesNoPagingRequest $request
     *
     * @return ListNodesNoPagingResponse
     */
    public function listNodesNoPaging($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listNodesNoPagingWithOptions($request, $runtime);
    }

    /**
     * @param ListPreferredEcsTypesRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListPreferredEcsTypesResponse
     */
    public function listPreferredEcsTypesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListPreferredEcsTypes',
            'version'     => '2017-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListPreferredEcsTypesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListPreferredEcsTypesRequest $request
     *
     * @return ListPreferredEcsTypesResponse
     */
    public function listPreferredEcsTypes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPreferredEcsTypesWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return ListRegionsResponse
     */
    public function listRegionsWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'ListRegions',
            'version'     => '2017-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return ListRegionsResponse
     */
    public function listRegions()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRegionsWithOptions($runtime);
    }

    /**
     * @param ListSoftwaresRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListSoftwaresResponse
     */
    public function listSoftwaresWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListSoftwares',
            'version'     => '2017-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListSoftwaresResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListSoftwaresRequest $request
     *
     * @return ListSoftwaresResponse
     */
    public function listSoftwares($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSoftwaresWithOptions($request, $runtime);
    }

    /**
     * @param ListUsersRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ListUsersResponse
     */
    public function listUsersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListUsers',
            'version'     => '2017-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListUsersRequest $request
     *
     * @return ListUsersResponse
     */
    public function listUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUsersWithOptions($request, $runtime);
    }

    /**
     * @param ListVolumesRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListVolumesResponse
     */
    public function listVolumesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListVolumes',
            'version'     => '2017-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListVolumesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListVolumesRequest $request
     *
     * @return ListVolumesResponse
     */
    public function listVolumes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listVolumesWithOptions($request, $runtime);
    }

    /**
     * @param ModifyClusterAttributesRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ModifyClusterAttributesResponse
     */
    public function modifyClusterAttributesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyClusterAttributes',
            'version'     => '2017-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyClusterAttributesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyClusterAttributesRequest $request
     *
     * @return ModifyClusterAttributesResponse
     */
    public function modifyClusterAttributes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyClusterAttributesWithOptions($request, $runtime);
    }

    /**
     * @param ModifyUserGroupsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ModifyUserGroupsResponse
     */
    public function modifyUserGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyUserGroups',
            'version'     => '2017-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyUserGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyUserGroupsRequest $request
     *
     * @return ModifyUserGroupsResponse
     */
    public function modifyUserGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyUserGroupsWithOptions($request, $runtime);
    }

    /**
     * @param ModifyUserPasswordsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ModifyUserPasswordsResponse
     */
    public function modifyUserPasswordsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyUserPasswords',
            'version'     => '2017-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyUserPasswordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyUserPasswordsRequest $request
     *
     * @return ModifyUserPasswordsResponse
     */
    public function modifyUserPasswords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyUserPasswordsWithOptions($request, $runtime);
    }

    /**
     * @param RerunJobsRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return RerunJobsResponse
     */
    public function rerunJobsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RerunJobs',
            'version'     => '2017-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RerunJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RerunJobsRequest $request
     *
     * @return RerunJobsResponse
     */
    public function rerunJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->rerunJobsWithOptions($request, $runtime);
    }

    /**
     * @param ResetNodesRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ResetNodesResponse
     */
    public function resetNodesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ResetNodes',
            'version'     => '2017-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ResetNodesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ResetNodesRequest $request
     *
     * @return ResetNodesResponse
     */
    public function resetNodes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetNodesWithOptions($request, $runtime);
    }

    /**
     * @param SetAutoScaleConfigRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return SetAutoScaleConfigResponse
     */
    public function setAutoScaleConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetAutoScaleConfig',
            'version'     => '2017-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetAutoScaleConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetAutoScaleConfigRequest $request
     *
     * @return SetAutoScaleConfigResponse
     */
    public function setAutoScaleConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setAutoScaleConfigWithOptions($request, $runtime);
    }

    /**
     * @param SetJobUserRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return SetJobUserResponse
     */
    public function setJobUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetJobUser',
            'version'     => '2017-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetJobUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetJobUserRequest $request
     *
     * @return SetJobUserResponse
     */
    public function setJobUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setJobUserWithOptions($request, $runtime);
    }

    /**
     * @param StopJobsRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return StopJobsResponse
     */
    public function stopJobsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StopJobs',
            'version'     => '2017-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StopJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param StopJobsRequest $request
     *
     * @return StopJobsResponse
     */
    public function stopJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopJobsWithOptions($request, $runtime);
    }

    /**
     * @param SubmitJobRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return SubmitJobResponse
     */
    public function submitJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitJob',
            'version'     => '2017-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SubmitJobRequest $request
     *
     * @return SubmitJobResponse
     */
    public function submitJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitJobWithOptions($request, $runtime);
    }

    /**
     * @param UpgradeClientRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return UpgradeClientResponse
     */
    public function upgradeClientWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpgradeClient',
            'version'     => '2017-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpgradeClientResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpgradeClientRequest $request
     *
     * @return UpgradeClientResponse
     */
    public function upgradeClient($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->upgradeClientWithOptions($request, $runtime);
    }
}
