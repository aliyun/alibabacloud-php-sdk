<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20160607;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Cr\V20160607\Models\CancelRepoBuildResponse;
use AlibabaCloud\SDK\Cr\V20160607\Models\CreateNamespaceResponse;
use AlibabaCloud\SDK\Cr\V20160607\Models\CreateRepoBuildRuleResponse;
use AlibabaCloud\SDK\Cr\V20160607\Models\CreateRepoResponse;
use AlibabaCloud\SDK\Cr\V20160607\Models\CreateRepoWebhookResponse;
use AlibabaCloud\SDK\Cr\V20160607\Models\CreateUserInfoResponse;
use AlibabaCloud\SDK\Cr\V20160607\Models\DeleteImageResponse;
use AlibabaCloud\SDK\Cr\V20160607\Models\DeleteNamespaceResponse;
use AlibabaCloud\SDK\Cr\V20160607\Models\DeleteRepoBuildRuleResponse;
use AlibabaCloud\SDK\Cr\V20160607\Models\DeleteRepoResponse;
use AlibabaCloud\SDK\Cr\V20160607\Models\DeleteRepoWebhookResponse;
use AlibabaCloud\SDK\Cr\V20160607\Models\GetAuthorizationTokenResponse;
use AlibabaCloud\SDK\Cr\V20160607\Models\GetImageLayerResponse;
use AlibabaCloud\SDK\Cr\V20160607\Models\GetImageManifestRequest;
use AlibabaCloud\SDK\Cr\V20160607\Models\GetImageManifestResponse;
use AlibabaCloud\SDK\Cr\V20160607\Models\GetNamespaceListRequest;
use AlibabaCloud\SDK\Cr\V20160607\Models\GetNamespaceListResponse;
use AlibabaCloud\SDK\Cr\V20160607\Models\GetNamespaceResponse;
use AlibabaCloud\SDK\Cr\V20160607\Models\GetRegionListResponse;
use AlibabaCloud\SDK\Cr\V20160607\Models\GetRegionRequest;
use AlibabaCloud\SDK\Cr\V20160607\Models\GetRegionResponse;
use AlibabaCloud\SDK\Cr\V20160607\Models\GetRepoBuildListRequest;
use AlibabaCloud\SDK\Cr\V20160607\Models\GetRepoBuildListResponse;
use AlibabaCloud\SDK\Cr\V20160607\Models\GetRepoBuildRuleListResponse;
use AlibabaCloud\SDK\Cr\V20160607\Models\GetRepoBuildStatusResponse;
use AlibabaCloud\SDK\Cr\V20160607\Models\GetRepoListByNamespaceRequest;
use AlibabaCloud\SDK\Cr\V20160607\Models\GetRepoListByNamespaceResponse;
use AlibabaCloud\SDK\Cr\V20160607\Models\GetRepoListRequest;
use AlibabaCloud\SDK\Cr\V20160607\Models\GetRepoListResponse;
use AlibabaCloud\SDK\Cr\V20160607\Models\GetRepoResponse;
use AlibabaCloud\SDK\Cr\V20160607\Models\GetRepoTagResponse;
use AlibabaCloud\SDK\Cr\V20160607\Models\GetRepoTagScanListRequest;
use AlibabaCloud\SDK\Cr\V20160607\Models\GetRepoTagScanListResponse;
use AlibabaCloud\SDK\Cr\V20160607\Models\GetRepoTagScanStatusResponse;
use AlibabaCloud\SDK\Cr\V20160607\Models\GetRepoTagScanSummaryResponse;
use AlibabaCloud\SDK\Cr\V20160607\Models\GetRepoTagsRequest;
use AlibabaCloud\SDK\Cr\V20160607\Models\GetRepoTagsResponse;
use AlibabaCloud\SDK\Cr\V20160607\Models\GetRepoWebhookResponse;
use AlibabaCloud\SDK\Cr\V20160607\Models\GetResourceQuotaResponse;
use AlibabaCloud\SDK\Cr\V20160607\Models\StartImageScanResponse;
use AlibabaCloud\SDK\Cr\V20160607\Models\StartRepoBuildByRuleResponse;
use AlibabaCloud\SDK\Cr\V20160607\Models\UpdateNamespaceResponse;
use AlibabaCloud\SDK\Cr\V20160607\Models\UpdateRepoBuildRuleResponse;
use AlibabaCloud\SDK\Cr\V20160607\Models\UpdateRepoResponse;
use AlibabaCloud\SDK\Cr\V20160607\Models\UpdateRepoWebhookResponse;
use AlibabaCloud\SDK\Cr\V20160607\Models\UpdateUserInfoResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Cr extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('cr', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param string $RepoNamespace
     * @param string $RepoName
     * @param string $BuildId
     *
     * @return CancelRepoBuildResponse
     */
    public function cancelRepoBuild($RepoNamespace, $RepoName, $BuildId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->cancelRepoBuildWithOptions($RepoNamespace, $RepoName, $BuildId, $headers, $runtime);
    }

    /**
     * @param string         $RepoNamespace
     * @param string         $RepoName
     * @param string         $BuildId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return CancelRepoBuildResponse
     */
    public function cancelRepoBuildWithOptions($RepoNamespace, $RepoName, $BuildId, $headers, $runtime)
    {
        $RepoNamespace = OpenApiUtilClient::getEncodeParam($RepoNamespace);
        $RepoName      = OpenApiUtilClient::getEncodeParam($RepoName);
        $BuildId       = OpenApiUtilClient::getEncodeParam($BuildId);
        $req           = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'CancelRepoBuild',
            'version'     => '2016-06-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/repos/' . $RepoNamespace . '/' . $RepoName . '/build/' . $BuildId . '/cancel',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return CancelRepoBuildResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return CreateNamespaceResponse
     */
    public function createNamespace()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createNamespaceWithOptions($headers, $runtime);
    }

    /**
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return CreateNamespaceResponse
     */
    public function createNamespaceWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'CreateNamespace',
            'version'     => '2016-06-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/namespace',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return CreateNamespaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return CreateRepoResponse
     */
    public function createRepo()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createRepoWithOptions($headers, $runtime);
    }

    /**
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return CreateRepoResponse
     */
    public function createRepoWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'CreateRepo',
            'version'     => '2016-06-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/repos',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return CreateRepoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $RepoNamespace
     * @param string $RepoName
     *
     * @return CreateRepoBuildRuleResponse
     */
    public function createRepoBuildRule($RepoNamespace, $RepoName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createRepoBuildRuleWithOptions($RepoNamespace, $RepoName, $headers, $runtime);
    }

    /**
     * @param string         $RepoNamespace
     * @param string         $RepoName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return CreateRepoBuildRuleResponse
     */
    public function createRepoBuildRuleWithOptions($RepoNamespace, $RepoName, $headers, $runtime)
    {
        $RepoNamespace = OpenApiUtilClient::getEncodeParam($RepoNamespace);
        $RepoName      = OpenApiUtilClient::getEncodeParam($RepoName);
        $req           = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'CreateRepoBuildRule',
            'version'     => '2016-06-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/repos/' . $RepoNamespace . '/' . $RepoName . '/rules',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return CreateRepoBuildRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $RepoNamespace
     * @param string $RepoName
     *
     * @return CreateRepoWebhookResponse
     */
    public function createRepoWebhook($RepoNamespace, $RepoName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createRepoWebhookWithOptions($RepoNamespace, $RepoName, $headers, $runtime);
    }

    /**
     * @param string         $RepoNamespace
     * @param string         $RepoName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return CreateRepoWebhookResponse
     */
    public function createRepoWebhookWithOptions($RepoNamespace, $RepoName, $headers, $runtime)
    {
        $RepoNamespace = OpenApiUtilClient::getEncodeParam($RepoNamespace);
        $RepoName      = OpenApiUtilClient::getEncodeParam($RepoName);
        $req           = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'CreateRepoWebhook',
            'version'     => '2016-06-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/repos/' . $RepoNamespace . '/' . $RepoName . '/webhooks',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return CreateRepoWebhookResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return CreateUserInfoResponse
     */
    public function createUserInfo()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createUserInfoWithOptions($headers, $runtime);
    }

    /**
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return CreateUserInfoResponse
     */
    public function createUserInfoWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'CreateUserInfo',
            'version'     => '2016-06-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/users',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return CreateUserInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $RepoNamespace
     * @param string $RepoName
     * @param string $Tag
     *
     * @return DeleteImageResponse
     */
    public function deleteImage($RepoNamespace, $RepoName, $Tag)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteImageWithOptions($RepoNamespace, $RepoName, $Tag, $headers, $runtime);
    }

    /**
     * @param string         $RepoNamespace
     * @param string         $RepoName
     * @param string         $Tag
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteImageResponse
     */
    public function deleteImageWithOptions($RepoNamespace, $RepoName, $Tag, $headers, $runtime)
    {
        $RepoNamespace = OpenApiUtilClient::getEncodeParam($RepoNamespace);
        $RepoName      = OpenApiUtilClient::getEncodeParam($RepoName);
        $Tag           = OpenApiUtilClient::getEncodeParam($Tag);
        $req           = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteImage',
            'version'     => '2016-06-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/repos/' . $RepoNamespace . '/' . $RepoName . '/tags/' . $Tag . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return DeleteImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $Namespace
     *
     * @return DeleteNamespaceResponse
     */
    public function deleteNamespace($Namespace)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteNamespaceWithOptions($Namespace, $headers, $runtime);
    }

    /**
     * @param string         $Namespace
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteNamespaceResponse
     */
    public function deleteNamespaceWithOptions($Namespace, $headers, $runtime)
    {
        $Namespace = OpenApiUtilClient::getEncodeParam($Namespace);
        $req       = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteNamespace',
            'version'     => '2016-06-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/namespace/' . $Namespace . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return DeleteNamespaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $RepoNamespace
     * @param string $RepoName
     *
     * @return DeleteRepoResponse
     */
    public function deleteRepo($RepoNamespace, $RepoName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteRepoWithOptions($RepoNamespace, $RepoName, $headers, $runtime);
    }

    /**
     * @param string         $RepoNamespace
     * @param string         $RepoName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteRepoResponse
     */
    public function deleteRepoWithOptions($RepoNamespace, $RepoName, $headers, $runtime)
    {
        $RepoNamespace = OpenApiUtilClient::getEncodeParam($RepoNamespace);
        $RepoName      = OpenApiUtilClient::getEncodeParam($RepoName);
        $req           = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteRepo',
            'version'     => '2016-06-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/repos/' . $RepoNamespace . '/' . $RepoName . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return DeleteRepoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $RepoNamespace
     * @param string $RepoName
     * @param string $BuildRuleId
     *
     * @return DeleteRepoBuildRuleResponse
     */
    public function deleteRepoBuildRule($RepoNamespace, $RepoName, $BuildRuleId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteRepoBuildRuleWithOptions($RepoNamespace, $RepoName, $BuildRuleId, $headers, $runtime);
    }

    /**
     * @param string         $RepoNamespace
     * @param string         $RepoName
     * @param string         $BuildRuleId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteRepoBuildRuleResponse
     */
    public function deleteRepoBuildRuleWithOptions($RepoNamespace, $RepoName, $BuildRuleId, $headers, $runtime)
    {
        $RepoNamespace = OpenApiUtilClient::getEncodeParam($RepoNamespace);
        $RepoName      = OpenApiUtilClient::getEncodeParam($RepoName);
        $BuildRuleId   = OpenApiUtilClient::getEncodeParam($BuildRuleId);
        $req           = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteRepoBuildRule',
            'version'     => '2016-06-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/repos/' . $RepoNamespace . '/' . $RepoName . '/rules/' . $BuildRuleId . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return DeleteRepoBuildRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $RepoNamespace
     * @param string $RepoName
     * @param string $WebhookId
     *
     * @return DeleteRepoWebhookResponse
     */
    public function deleteRepoWebhook($RepoNamespace, $RepoName, $WebhookId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteRepoWebhookWithOptions($RepoNamespace, $RepoName, $WebhookId, $headers, $runtime);
    }

    /**
     * @param string         $RepoNamespace
     * @param string         $RepoName
     * @param string         $WebhookId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteRepoWebhookResponse
     */
    public function deleteRepoWebhookWithOptions($RepoNamespace, $RepoName, $WebhookId, $headers, $runtime)
    {
        $RepoNamespace = OpenApiUtilClient::getEncodeParam($RepoNamespace);
        $RepoName      = OpenApiUtilClient::getEncodeParam($RepoName);
        $WebhookId     = OpenApiUtilClient::getEncodeParam($WebhookId);
        $req           = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteRepoWebhook',
            'version'     => '2016-06-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/repos/' . $RepoNamespace . '/' . $RepoName . '/webhooks/' . $WebhookId . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return DeleteRepoWebhookResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return GetAuthorizationTokenResponse
     */
    public function getAuthorizationToken()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getAuthorizationTokenWithOptions($headers, $runtime);
    }

    /**
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetAuthorizationTokenResponse
     */
    public function getAuthorizationTokenWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetAuthorizationToken',
            'version'     => '2016-06-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/tokens',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return GetAuthorizationTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $RepoNamespace
     * @param string $RepoName
     * @param string $Tag
     *
     * @return GetImageLayerResponse
     */
    public function getImageLayer($RepoNamespace, $RepoName, $Tag)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getImageLayerWithOptions($RepoNamespace, $RepoName, $Tag, $headers, $runtime);
    }

    /**
     * @param string         $RepoNamespace
     * @param string         $RepoName
     * @param string         $Tag
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetImageLayerResponse
     */
    public function getImageLayerWithOptions($RepoNamespace, $RepoName, $Tag, $headers, $runtime)
    {
        $RepoNamespace = OpenApiUtilClient::getEncodeParam($RepoNamespace);
        $RepoName      = OpenApiUtilClient::getEncodeParam($RepoName);
        $Tag           = OpenApiUtilClient::getEncodeParam($Tag);
        $req           = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetImageLayer',
            'version'     => '2016-06-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/repos/' . $RepoNamespace . '/' . $RepoName . '/tags/' . $Tag . '/layers',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return GetImageLayerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                  $RepoNamespace
     * @param string                  $RepoName
     * @param string                  $Tag
     * @param GetImageManifestRequest $request
     *
     * @return GetImageManifestResponse
     */
    public function getImageManifest($RepoNamespace, $RepoName, $Tag, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getImageManifestWithOptions($RepoNamespace, $RepoName, $Tag, $request, $headers, $runtime);
    }

    /**
     * @param string                  $RepoNamespace
     * @param string                  $RepoName
     * @param string                  $Tag
     * @param GetImageManifestRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return GetImageManifestResponse
     */
    public function getImageManifestWithOptions($RepoNamespace, $RepoName, $Tag, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $RepoNamespace = OpenApiUtilClient::getEncodeParam($RepoNamespace);
        $RepoName      = OpenApiUtilClient::getEncodeParam($RepoName);
        $Tag           = OpenApiUtilClient::getEncodeParam($Tag);
        $query         = [];
        if (!Utils::isUnset($request->schemaVersion)) {
            @$query['SchemaVersion'] = $request->schemaVersion;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetImageManifest',
            'version'     => '2016-06-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/repos/' . $RepoNamespace . '/' . $RepoName . '/tags/' . $Tag . '/manifest',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return GetImageManifestResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $Namespace
     *
     * @return GetNamespaceResponse
     */
    public function getNamespace($Namespace)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getNamespaceWithOptions($Namespace, $headers, $runtime);
    }

    /**
     * @param string         $Namespace
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetNamespaceResponse
     */
    public function getNamespaceWithOptions($Namespace, $headers, $runtime)
    {
        $Namespace = OpenApiUtilClient::getEncodeParam($Namespace);
        $req       = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetNamespace',
            'version'     => '2016-06-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/namespace/' . $Namespace . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return GetNamespaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetNamespaceListRequest $request
     *
     * @return GetNamespaceListResponse
     */
    public function getNamespaceList($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getNamespaceListWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetNamespaceListRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return GetNamespaceListResponse
     */
    public function getNamespaceListWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->authorize)) {
            @$query['Authorize'] = $request->authorize;
        }
        if (!Utils::isUnset($request->status)) {
            @$query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetNamespaceList',
            'version'     => '2016-06-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/namespace',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return GetNamespaceListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetRegionRequest $request
     *
     * @return GetRegionResponse
     */
    public function getRegion($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getRegionWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetRegionRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return GetRegionResponse
     */
    public function getRegionWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domain)) {
            @$query['Domain'] = $request->domain;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetRegion',
            'version'     => '2016-06-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/regions',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return GetRegionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return GetRegionListResponse
     */
    public function getRegionList()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getRegionListWithOptions($headers, $runtime);
    }

    /**
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetRegionListResponse
     */
    public function getRegionListWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetRegionList',
            'version'     => '2016-06-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/regions',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return GetRegionListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $RepoNamespace
     * @param string $RepoName
     *
     * @return GetRepoResponse
     */
    public function getRepo($RepoNamespace, $RepoName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getRepoWithOptions($RepoNamespace, $RepoName, $headers, $runtime);
    }

    /**
     * @param string         $RepoNamespace
     * @param string         $RepoName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetRepoResponse
     */
    public function getRepoWithOptions($RepoNamespace, $RepoName, $headers, $runtime)
    {
        $RepoNamespace = OpenApiUtilClient::getEncodeParam($RepoNamespace);
        $RepoName      = OpenApiUtilClient::getEncodeParam($RepoName);
        $req           = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetRepo',
            'version'     => '2016-06-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/repos/' . $RepoNamespace . '/' . $RepoName . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return GetRepoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                  $RepoNamespace
     * @param string                  $RepoName
     * @param GetRepoBuildListRequest $request
     *
     * @return GetRepoBuildListResponse
     */
    public function getRepoBuildList($RepoNamespace, $RepoName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getRepoBuildListWithOptions($RepoNamespace, $RepoName, $request, $headers, $runtime);
    }

    /**
     * @param string                  $RepoNamespace
     * @param string                  $RepoName
     * @param GetRepoBuildListRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return GetRepoBuildListResponse
     */
    public function getRepoBuildListWithOptions($RepoNamespace, $RepoName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $RepoNamespace = OpenApiUtilClient::getEncodeParam($RepoNamespace);
        $RepoName      = OpenApiUtilClient::getEncodeParam($RepoName);
        $query         = [];
        if (!Utils::isUnset($request->page)) {
            @$query['Page'] = $request->page;
        }
        if (!Utils::isUnset($request->pageSize)) {
            @$query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetRepoBuildList',
            'version'     => '2016-06-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/repos/' . $RepoNamespace . '/' . $RepoName . '/build',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return GetRepoBuildListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $RepoNamespace
     * @param string $RepoName
     *
     * @return GetRepoBuildRuleListResponse
     */
    public function getRepoBuildRuleList($RepoNamespace, $RepoName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getRepoBuildRuleListWithOptions($RepoNamespace, $RepoName, $headers, $runtime);
    }

    /**
     * @param string         $RepoNamespace
     * @param string         $RepoName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetRepoBuildRuleListResponse
     */
    public function getRepoBuildRuleListWithOptions($RepoNamespace, $RepoName, $headers, $runtime)
    {
        $RepoNamespace = OpenApiUtilClient::getEncodeParam($RepoNamespace);
        $RepoName      = OpenApiUtilClient::getEncodeParam($RepoName);
        $req           = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetRepoBuildRuleList',
            'version'     => '2016-06-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/repos/' . $RepoNamespace . '/' . $RepoName . '/rules',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return GetRepoBuildRuleListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $RepoNamespace
     * @param string $RepoName
     * @param string $BuildId
     *
     * @return GetRepoBuildStatusResponse
     */
    public function getRepoBuildStatus($RepoNamespace, $RepoName, $BuildId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getRepoBuildStatusWithOptions($RepoNamespace, $RepoName, $BuildId, $headers, $runtime);
    }

    /**
     * @param string         $RepoNamespace
     * @param string         $RepoName
     * @param string         $BuildId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetRepoBuildStatusResponse
     */
    public function getRepoBuildStatusWithOptions($RepoNamespace, $RepoName, $BuildId, $headers, $runtime)
    {
        $RepoNamespace = OpenApiUtilClient::getEncodeParam($RepoNamespace);
        $RepoName      = OpenApiUtilClient::getEncodeParam($RepoName);
        $BuildId       = OpenApiUtilClient::getEncodeParam($BuildId);
        $req           = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetRepoBuildStatus',
            'version'     => '2016-06-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/repos/' . $RepoNamespace . '/' . $RepoName . '/build/' . $BuildId . '/status',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return GetRepoBuildStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetRepoListRequest $request
     *
     * @return GetRepoListResponse
     */
    public function getRepoList($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getRepoListWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetRepoListRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return GetRepoListResponse
     */
    public function getRepoListWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->page)) {
            @$query['Page'] = $request->page;
        }
        if (!Utils::isUnset($request->pageSize)) {
            @$query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->status)) {
            @$query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetRepoList',
            'version'     => '2016-06-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/repos',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return GetRepoListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                        $RepoNamespace
     * @param GetRepoListByNamespaceRequest $request
     *
     * @return GetRepoListByNamespaceResponse
     */
    public function getRepoListByNamespace($RepoNamespace, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getRepoListByNamespaceWithOptions($RepoNamespace, $request, $headers, $runtime);
    }

    /**
     * @param string                        $RepoNamespace
     * @param GetRepoListByNamespaceRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return GetRepoListByNamespaceResponse
     */
    public function getRepoListByNamespaceWithOptions($RepoNamespace, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $RepoNamespace = OpenApiUtilClient::getEncodeParam($RepoNamespace);
        $query         = [];
        if (!Utils::isUnset($request->page)) {
            @$query['Page'] = $request->page;
        }
        if (!Utils::isUnset($request->pageSize)) {
            @$query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->status)) {
            @$query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetRepoListByNamespace',
            'version'     => '2016-06-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/repos/' . $RepoNamespace . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return GetRepoListByNamespaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $RepoNamespace
     * @param string $RepoName
     * @param string $Tag
     *
     * @return GetRepoTagResponse
     */
    public function getRepoTag($RepoNamespace, $RepoName, $Tag)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getRepoTagWithOptions($RepoNamespace, $RepoName, $Tag, $headers, $runtime);
    }

    /**
     * @param string         $RepoNamespace
     * @param string         $RepoName
     * @param string         $Tag
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetRepoTagResponse
     */
    public function getRepoTagWithOptions($RepoNamespace, $RepoName, $Tag, $headers, $runtime)
    {
        $RepoNamespace = OpenApiUtilClient::getEncodeParam($RepoNamespace);
        $RepoName      = OpenApiUtilClient::getEncodeParam($RepoName);
        $Tag           = OpenApiUtilClient::getEncodeParam($Tag);
        $req           = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetRepoTag',
            'version'     => '2016-06-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/repos/' . $RepoNamespace . '/' . $RepoName . '/tags/' . $Tag . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetRepoTagResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                    $RepoNamespace
     * @param string                    $RepoName
     * @param string                    $Tag
     * @param GetRepoTagScanListRequest $request
     *
     * @return GetRepoTagScanListResponse
     */
    public function getRepoTagScanList($RepoNamespace, $RepoName, $Tag, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getRepoTagScanListWithOptions($RepoNamespace, $RepoName, $Tag, $request, $headers, $runtime);
    }

    /**
     * @param string                    $RepoNamespace
     * @param string                    $RepoName
     * @param string                    $Tag
     * @param GetRepoTagScanListRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return GetRepoTagScanListResponse
     */
    public function getRepoTagScanListWithOptions($RepoNamespace, $RepoName, $Tag, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $RepoNamespace = OpenApiUtilClient::getEncodeParam($RepoNamespace);
        $RepoName      = OpenApiUtilClient::getEncodeParam($RepoName);
        $Tag           = OpenApiUtilClient::getEncodeParam($Tag);
        $query         = [];
        if (!Utils::isUnset($request->page)) {
            @$query['Page'] = $request->page;
        }
        if (!Utils::isUnset($request->pageSize)) {
            @$query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->severity)) {
            @$query['Severity'] = $request->severity;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetRepoTagScanList',
            'version'     => '2016-06-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/repos/' . $RepoNamespace . '/' . $RepoName . '/tags/' . $Tag . '/scanResult',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return GetRepoTagScanListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $RepoNamespace
     * @param string $RepoName
     * @param string $Tag
     *
     * @return GetRepoTagScanStatusResponse
     */
    public function getRepoTagScanStatus($RepoNamespace, $RepoName, $Tag)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getRepoTagScanStatusWithOptions($RepoNamespace, $RepoName, $Tag, $headers, $runtime);
    }

    /**
     * @param string         $RepoNamespace
     * @param string         $RepoName
     * @param string         $Tag
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetRepoTagScanStatusResponse
     */
    public function getRepoTagScanStatusWithOptions($RepoNamespace, $RepoName, $Tag, $headers, $runtime)
    {
        $RepoNamespace = OpenApiUtilClient::getEncodeParam($RepoNamespace);
        $RepoName      = OpenApiUtilClient::getEncodeParam($RepoName);
        $Tag           = OpenApiUtilClient::getEncodeParam($Tag);
        $req           = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetRepoTagScanStatus',
            'version'     => '2016-06-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/repos/' . $RepoNamespace . '/' . $RepoName . '/tags/' . $Tag . '/scanStatus',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return GetRepoTagScanStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $RepoNamespace
     * @param string $RepoName
     * @param string $Tag
     *
     * @return GetRepoTagScanSummaryResponse
     */
    public function getRepoTagScanSummary($RepoNamespace, $RepoName, $Tag)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getRepoTagScanSummaryWithOptions($RepoNamespace, $RepoName, $Tag, $headers, $runtime);
    }

    /**
     * @param string         $RepoNamespace
     * @param string         $RepoName
     * @param string         $Tag
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetRepoTagScanSummaryResponse
     */
    public function getRepoTagScanSummaryWithOptions($RepoNamespace, $RepoName, $Tag, $headers, $runtime)
    {
        $RepoNamespace = OpenApiUtilClient::getEncodeParam($RepoNamespace);
        $RepoName      = OpenApiUtilClient::getEncodeParam($RepoName);
        $Tag           = OpenApiUtilClient::getEncodeParam($Tag);
        $req           = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetRepoTagScanSummary',
            'version'     => '2016-06-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/repos/' . $RepoNamespace . '/' . $RepoName . '/tags/' . $Tag . '/scanCount',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return GetRepoTagScanSummaryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string             $RepoNamespace
     * @param string             $RepoName
     * @param GetRepoTagsRequest $request
     *
     * @return GetRepoTagsResponse
     */
    public function getRepoTags($RepoNamespace, $RepoName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getRepoTagsWithOptions($RepoNamespace, $RepoName, $request, $headers, $runtime);
    }

    /**
     * @param string             $RepoNamespace
     * @param string             $RepoName
     * @param GetRepoTagsRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return GetRepoTagsResponse
     */
    public function getRepoTagsWithOptions($RepoNamespace, $RepoName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $RepoNamespace = OpenApiUtilClient::getEncodeParam($RepoNamespace);
        $RepoName      = OpenApiUtilClient::getEncodeParam($RepoName);
        $query         = [];
        if (!Utils::isUnset($request->page)) {
            @$query['Page'] = $request->page;
        }
        if (!Utils::isUnset($request->pageSize)) {
            @$query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetRepoTags',
            'version'     => '2016-06-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/repos/' . $RepoNamespace . '/' . $RepoName . '/tags',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return GetRepoTagsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $RepoNamespace
     * @param string $RepoName
     *
     * @return GetRepoWebhookResponse
     */
    public function getRepoWebhook($RepoNamespace, $RepoName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getRepoWebhookWithOptions($RepoNamespace, $RepoName, $headers, $runtime);
    }

    /**
     * @param string         $RepoNamespace
     * @param string         $RepoName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetRepoWebhookResponse
     */
    public function getRepoWebhookWithOptions($RepoNamespace, $RepoName, $headers, $runtime)
    {
        $RepoNamespace = OpenApiUtilClient::getEncodeParam($RepoNamespace);
        $RepoName      = OpenApiUtilClient::getEncodeParam($RepoName);
        $req           = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetRepoWebhook',
            'version'     => '2016-06-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/repos/' . $RepoNamespace . '/' . $RepoName . '/webhooks',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return GetRepoWebhookResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $ResourceName
     *
     * @return GetResourceQuotaResponse
     */
    public function getResourceQuota($ResourceName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getResourceQuotaWithOptions($ResourceName, $headers, $runtime);
    }

    /**
     * @param string         $ResourceName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetResourceQuotaResponse
     */
    public function getResourceQuotaWithOptions($ResourceName, $headers, $runtime)
    {
        $ResourceName = OpenApiUtilClient::getEncodeParam($ResourceName);
        $req          = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetResourceQuota',
            'version'     => '2016-06-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/resource/' . $ResourceName . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return GetResourceQuotaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $RepoNamespace
     * @param string $RepoName
     * @param string $Tag
     *
     * @return StartImageScanResponse
     */
    public function startImageScan($RepoNamespace, $RepoName, $Tag)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->startImageScanWithOptions($RepoNamespace, $RepoName, $Tag, $headers, $runtime);
    }

    /**
     * @param string         $RepoNamespace
     * @param string         $RepoName
     * @param string         $Tag
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return StartImageScanResponse
     */
    public function startImageScanWithOptions($RepoNamespace, $RepoName, $Tag, $headers, $runtime)
    {
        $RepoNamespace = OpenApiUtilClient::getEncodeParam($RepoNamespace);
        $RepoName      = OpenApiUtilClient::getEncodeParam($RepoName);
        $Tag           = OpenApiUtilClient::getEncodeParam($Tag);
        $req           = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'StartImageScan',
            'version'     => '2016-06-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/repos/' . $RepoNamespace . '/' . $RepoName . '/tags/' . $Tag . '/scan',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return StartImageScanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $RepoNamespace
     * @param string $RepoName
     * @param string $BuildRuleId
     *
     * @return StartRepoBuildByRuleResponse
     */
    public function startRepoBuildByRule($RepoNamespace, $RepoName, $BuildRuleId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->startRepoBuildByRuleWithOptions($RepoNamespace, $RepoName, $BuildRuleId, $headers, $runtime);
    }

    /**
     * @param string         $RepoNamespace
     * @param string         $RepoName
     * @param string         $BuildRuleId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return StartRepoBuildByRuleResponse
     */
    public function startRepoBuildByRuleWithOptions($RepoNamespace, $RepoName, $BuildRuleId, $headers, $runtime)
    {
        $RepoNamespace = OpenApiUtilClient::getEncodeParam($RepoNamespace);
        $RepoName      = OpenApiUtilClient::getEncodeParam($RepoName);
        $BuildRuleId   = OpenApiUtilClient::getEncodeParam($BuildRuleId);
        $req           = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'StartRepoBuildByRule',
            'version'     => '2016-06-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/repos/' . $RepoNamespace . '/' . $RepoName . '/rules/' . $BuildRuleId . '/build',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return StartRepoBuildByRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $Namespace
     *
     * @return UpdateNamespaceResponse
     */
    public function updateNamespace($Namespace)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateNamespaceWithOptions($Namespace, $headers, $runtime);
    }

    /**
     * @param string         $Namespace
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return UpdateNamespaceResponse
     */
    public function updateNamespaceWithOptions($Namespace, $headers, $runtime)
    {
        $Namespace = OpenApiUtilClient::getEncodeParam($Namespace);
        $req       = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'UpdateNamespace',
            'version'     => '2016-06-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/namespace/' . $Namespace . '',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return UpdateNamespaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $RepoNamespace
     * @param string $RepoName
     *
     * @return UpdateRepoResponse
     */
    public function updateRepo($RepoNamespace, $RepoName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateRepoWithOptions($RepoNamespace, $RepoName, $headers, $runtime);
    }

    /**
     * @param string         $RepoNamespace
     * @param string         $RepoName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return UpdateRepoResponse
     */
    public function updateRepoWithOptions($RepoNamespace, $RepoName, $headers, $runtime)
    {
        $RepoNamespace = OpenApiUtilClient::getEncodeParam($RepoNamespace);
        $RepoName      = OpenApiUtilClient::getEncodeParam($RepoName);
        $req           = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'UpdateRepo',
            'version'     => '2016-06-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/repos/' . $RepoNamespace . '/' . $RepoName . '',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return UpdateRepoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $RepoNamespace
     * @param string $RepoName
     * @param string $BuildRuleId
     *
     * @return UpdateRepoBuildRuleResponse
     */
    public function updateRepoBuildRule($RepoNamespace, $RepoName, $BuildRuleId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateRepoBuildRuleWithOptions($RepoNamespace, $RepoName, $BuildRuleId, $headers, $runtime);
    }

    /**
     * @param string         $RepoNamespace
     * @param string         $RepoName
     * @param string         $BuildRuleId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return UpdateRepoBuildRuleResponse
     */
    public function updateRepoBuildRuleWithOptions($RepoNamespace, $RepoName, $BuildRuleId, $headers, $runtime)
    {
        $RepoNamespace = OpenApiUtilClient::getEncodeParam($RepoNamespace);
        $RepoName      = OpenApiUtilClient::getEncodeParam($RepoName);
        $BuildRuleId   = OpenApiUtilClient::getEncodeParam($BuildRuleId);
        $req           = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'UpdateRepoBuildRule',
            'version'     => '2016-06-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/repos/' . $RepoNamespace . '/' . $RepoName . '/rules/' . $BuildRuleId . '',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return UpdateRepoBuildRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $RepoNamespace
     * @param string $RepoName
     * @param string $WebhookId
     *
     * @return UpdateRepoWebhookResponse
     */
    public function updateRepoWebhook($RepoNamespace, $RepoName, $WebhookId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateRepoWebhookWithOptions($RepoNamespace, $RepoName, $WebhookId, $headers, $runtime);
    }

    /**
     * @param string         $RepoNamespace
     * @param string         $RepoName
     * @param string         $WebhookId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return UpdateRepoWebhookResponse
     */
    public function updateRepoWebhookWithOptions($RepoNamespace, $RepoName, $WebhookId, $headers, $runtime)
    {
        $RepoNamespace = OpenApiUtilClient::getEncodeParam($RepoNamespace);
        $RepoName      = OpenApiUtilClient::getEncodeParam($RepoName);
        $WebhookId     = OpenApiUtilClient::getEncodeParam($WebhookId);
        $req           = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'UpdateRepoWebhook',
            'version'     => '2016-06-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/repos/' . $RepoNamespace . '/' . $RepoName . '/webhooks/' . $WebhookId . '',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return UpdateRepoWebhookResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return UpdateUserInfoResponse
     */
    public function updateUserInfo()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateUserInfoWithOptions($headers, $runtime);
    }

    /**
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return UpdateUserInfoResponse
     */
    public function updateUserInfoWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'UpdateUserInfo',
            'version'     => '2016-06-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/users',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return UpdateUserInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }
}
