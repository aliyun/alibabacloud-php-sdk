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
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return CancelRepoBuildResponse::fromMap($this->doROARequest('CancelRepoBuild', '2016-06-07', 'HTTPS', 'POST', 'AK', '/repos/' . $RepoNamespace . '/{RepoName}/build/{BuildId}/cancel', 'none', $req, $runtime));
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

        return CreateNamespaceResponse::fromMap($this->doROARequest('CreateNamespace', '2016-06-07', 'HTTPS', 'PUT', 'AK', '/namespace', 'none', $req, $runtime));
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

        return CreateRepoResponse::fromMap($this->doROARequest('CreateRepo', '2016-06-07', 'HTTPS', 'PUT', 'AK', '/repos', 'none', $req, $runtime));
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
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return CreateRepoBuildRuleResponse::fromMap($this->doROARequest('CreateRepoBuildRule', '2016-06-07', 'HTTPS', 'PUT', 'AK', '/repos/' . $RepoNamespace . '/{RepoName}/rules', 'none', $req, $runtime));
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
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return CreateRepoWebhookResponse::fromMap($this->doROARequest('CreateRepoWebhook', '2016-06-07', 'HTTPS', 'PUT', 'AK', '/repos/' . $RepoNamespace . '/{RepoName}/webhooks', 'none', $req, $runtime));
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

        return CreateUserInfoResponse::fromMap($this->doROARequest('CreateUserInfo', '2016-06-07', 'HTTPS', 'PUT', 'AK', '/users', 'none', $req, $runtime));
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
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return DeleteImageResponse::fromMap($this->doROARequest('DeleteImage', '2016-06-07', 'HTTPS', 'DELETE', 'AK', '/repos/' . $RepoNamespace . '/{RepoName}/tags/{Tag}', 'none', $req, $runtime));
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
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return DeleteNamespaceResponse::fromMap($this->doROARequest('DeleteNamespace', '2016-06-07', 'HTTPS', 'DELETE', 'AK', '/namespace/' . $Namespace . '', 'none', $req, $runtime));
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
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return DeleteRepoResponse::fromMap($this->doROARequest('DeleteRepo', '2016-06-07', 'HTTPS', 'DELETE', 'AK', '/repos/' . $RepoNamespace . '/{RepoName}', 'none', $req, $runtime));
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
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return DeleteRepoBuildRuleResponse::fromMap($this->doROARequest('DeleteRepoBuildRule', '2016-06-07', 'HTTPS', 'DELETE', 'AK', '/repos/' . $RepoNamespace . '/{RepoName}/rules/{BuildRuleId}', 'none', $req, $runtime));
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
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return DeleteRepoWebhookResponse::fromMap($this->doROARequest('DeleteRepoWebhook', '2016-06-07', 'HTTPS', 'DELETE', 'AK', '/repos/' . $RepoNamespace . '/{RepoName}/webhooks/{WebhookId}', 'none', $req, $runtime));
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

        return GetAuthorizationTokenResponse::fromMap($this->doROARequest('GetAuthorizationToken', '2016-06-07', 'HTTPS', 'GET', 'AK', '/tokens', 'none', $req, $runtime));
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
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return GetImageLayerResponse::fromMap($this->doROARequest('GetImageLayer', '2016-06-07', 'HTTPS', 'GET', 'AK', '/repos/' . $RepoNamespace . '/{RepoName}/tags/{Tag}/layers', 'none', $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->schemaVersion)) {
            @$query['SchemaVersion'] = $request->schemaVersion;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return GetImageManifestResponse::fromMap($this->doROARequest('GetImageManifest', '2016-06-07', 'HTTPS', 'GET', 'AK', '/repos/' . $RepoNamespace . '/{RepoName}/tags/{Tag}/manifest', 'none', $req, $runtime));
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
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return GetNamespaceResponse::fromMap($this->doROARequest('GetNamespace', '2016-06-07', 'HTTPS', 'GET', 'AK', '/namespace/' . $Namespace . '', 'none', $req, $runtime));
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
        if (!Utils::isUnset($request->status)) {
            @$query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->authorize)) {
            @$query['Authorize'] = $request->authorize;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return GetNamespaceListResponse::fromMap($this->doROARequest('GetNamespaceList', '2016-06-07', 'HTTPS', 'GET', 'AK', '/namespace', 'none', $req, $runtime));
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

        return GetRegionResponse::fromMap($this->doROARequest('GetRegion', '2016-06-07', 'HTTPS', 'GET', 'AK', '/regions', 'none', $req, $runtime));
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

        return GetRegionListResponse::fromMap($this->doROARequest('GetRegionList', '2016-06-07', 'HTTPS', 'GET', 'AK', '/regions', 'none', $req, $runtime));
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
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return GetRepoResponse::fromMap($this->doROARequest('GetRepo', '2016-06-07', 'HTTPS', 'GET', 'AK', '/repos/' . $RepoNamespace . '/{RepoName}', 'none', $req, $runtime));
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
        $query = [];
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

        return GetRepoBuildListResponse::fromMap($this->doROARequest('GetRepoBuildList', '2016-06-07', 'HTTPS', 'GET', 'AK', '/repos/' . $RepoNamespace . '/{RepoName}/build', 'none', $req, $runtime));
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
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return GetRepoBuildRuleListResponse::fromMap($this->doROARequest('GetRepoBuildRuleList', '2016-06-07', 'HTTPS', 'GET', 'AK', '/repos/' . $RepoNamespace . '/{RepoName}/rules', 'none', $req, $runtime));
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
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return GetRepoBuildStatusResponse::fromMap($this->doROARequest('GetRepoBuildStatus', '2016-06-07', 'HTTPS', 'GET', 'AK', '/repos/' . $RepoNamespace . '/{RepoName}/build/{BuildId}/status', 'none', $req, $runtime));
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
        if (!Utils::isUnset($request->status)) {
            @$query['Status'] = $request->status;
        }
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

        return GetRepoListResponse::fromMap($this->doROARequest('GetRepoList', '2016-06-07', 'HTTPS', 'GET', 'AK', '/repos', 'none', $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->status)) {
            @$query['Status'] = $request->status;
        }
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

        return GetRepoListByNamespaceResponse::fromMap($this->doROARequest('GetRepoListByNamespace', '2016-06-07', 'HTTPS', 'GET', 'AK', '/repos/' . $RepoNamespace . '', 'none', $req, $runtime));
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
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return GetRepoTagResponse::fromMap($this->doROARequest('GetRepoTag', '2016-06-07', 'HTTPS', 'GET', 'AK', '/repos/' . $RepoNamespace . '/{RepoName}/tags/{Tag}', 'json', $req, $runtime));
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
        $query = [];
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

        return GetRepoTagsResponse::fromMap($this->doROARequest('GetRepoTags', '2016-06-07', 'HTTPS', 'GET', 'AK', '/repos/' . $RepoNamespace . '/{RepoName}/tags', 'none', $req, $runtime));
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
        $query = [];
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

        return GetRepoTagScanListResponse::fromMap($this->doROARequest('GetRepoTagScanList', '2016-06-07', 'HTTPS', 'GET', 'AK', '/repos/' . $RepoNamespace . '/{RepoName}/tags/{Tag}/scanResult', 'none', $req, $runtime));
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
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return GetRepoTagScanStatusResponse::fromMap($this->doROARequest('GetRepoTagScanStatus', '2016-06-07', 'HTTPS', 'GET', 'AK', '/repos/' . $RepoNamespace . '/{RepoName}/tags/{Tag}/scanStatus', 'none', $req, $runtime));
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
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return GetRepoTagScanSummaryResponse::fromMap($this->doROARequest('GetRepoTagScanSummary', '2016-06-07', 'HTTPS', 'GET', 'AK', '/repos/' . $RepoNamespace . '/{RepoName}/tags/{Tag}/scanCount', 'none', $req, $runtime));
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
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return GetRepoWebhookResponse::fromMap($this->doROARequest('GetRepoWebhook', '2016-06-07', 'HTTPS', 'GET', 'AK', '/repos/' . $RepoNamespace . '/{RepoName}/webhooks', 'none', $req, $runtime));
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
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return StartImageScanResponse::fromMap($this->doROARequest('StartImageScan', '2016-06-07', 'HTTPS', 'PUT', 'AK', '/repos/' . $RepoNamespace . '/{RepoName}/tags/{Tag}/scan', 'none', $req, $runtime));
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
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return StartRepoBuildByRuleResponse::fromMap($this->doROARequest('StartRepoBuildByRule', '2016-06-07', 'HTTPS', 'PUT', 'AK', '/repos/' . $RepoNamespace . '/{RepoName}/rules/{BuildRuleId}/build', 'none', $req, $runtime));
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
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return UpdateNamespaceResponse::fromMap($this->doROARequest('UpdateNamespace', '2016-06-07', 'HTTPS', 'POST', 'AK', '/namespace/' . $Namespace . '', 'none', $req, $runtime));
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
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return UpdateRepoResponse::fromMap($this->doROARequest('UpdateRepo', '2016-06-07', 'HTTPS', 'POST', 'AK', '/repos/' . $RepoNamespace . '/{RepoName}', 'none', $req, $runtime));
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
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return UpdateRepoBuildRuleResponse::fromMap($this->doROARequest('UpdateRepoBuildRule', '2016-06-07', 'HTTPS', 'POST', 'AK', '/repos/' . $RepoNamespace . '/{RepoName}/rules/{BuildRuleId}', 'none', $req, $runtime));
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
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return UpdateRepoWebhookResponse::fromMap($this->doROARequest('UpdateRepoWebhook', '2016-06-07', 'HTTPS', 'POST', 'AK', '/repos/' . $RepoNamespace . '/{RepoName}/webhooks/{WebhookId}', 'none', $req, $runtime));
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

        return UpdateUserInfoResponse::fromMap($this->doROARequest('UpdateUserInfo', '2016-06-07', 'HTTPS', 'POST', 'AK', '/users', 'none', $req, $runtime));
    }
}
