<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceSharing\V20200110;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\ResourceSharing\V20200110\Models\AcceptResourceShareInvitationRequest;
use AlibabaCloud\SDK\ResourceSharing\V20200110\Models\AcceptResourceShareInvitationResponse;
use AlibabaCloud\SDK\ResourceSharing\V20200110\Models\AssociateResourceSharePermissionRequest;
use AlibabaCloud\SDK\ResourceSharing\V20200110\Models\AssociateResourceSharePermissionResponse;
use AlibabaCloud\SDK\ResourceSharing\V20200110\Models\AssociateResourceShareRequest;
use AlibabaCloud\SDK\ResourceSharing\V20200110\Models\AssociateResourceShareResponse;
use AlibabaCloud\SDK\ResourceSharing\V20200110\Models\CreateResourceShareRequest;
use AlibabaCloud\SDK\ResourceSharing\V20200110\Models\CreateResourceShareResponse;
use AlibabaCloud\SDK\ResourceSharing\V20200110\Models\DeleteResourceShareRequest;
use AlibabaCloud\SDK\ResourceSharing\V20200110\Models\DeleteResourceShareResponse;
use AlibabaCloud\SDK\ResourceSharing\V20200110\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\ResourceSharing\V20200110\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\ResourceSharing\V20200110\Models\DisassociateResourceSharePermissionRequest;
use AlibabaCloud\SDK\ResourceSharing\V20200110\Models\DisassociateResourceSharePermissionResponse;
use AlibabaCloud\SDK\ResourceSharing\V20200110\Models\DisassociateResourceShareRequest;
use AlibabaCloud\SDK\ResourceSharing\V20200110\Models\DisassociateResourceShareResponse;
use AlibabaCloud\SDK\ResourceSharing\V20200110\Models\EnableSharingWithResourceDirectoryResponse;
use AlibabaCloud\SDK\ResourceSharing\V20200110\Models\GetPermissionRequest;
use AlibabaCloud\SDK\ResourceSharing\V20200110\Models\GetPermissionResponse;
use AlibabaCloud\SDK\ResourceSharing\V20200110\Models\ListPermissionsRequest;
use AlibabaCloud\SDK\ResourceSharing\V20200110\Models\ListPermissionsResponse;
use AlibabaCloud\SDK\ResourceSharing\V20200110\Models\ListPermissionVersionsRequest;
use AlibabaCloud\SDK\ResourceSharing\V20200110\Models\ListPermissionVersionsResponse;
use AlibabaCloud\SDK\ResourceSharing\V20200110\Models\ListResourceShareAssociationsRequest;
use AlibabaCloud\SDK\ResourceSharing\V20200110\Models\ListResourceShareAssociationsResponse;
use AlibabaCloud\SDK\ResourceSharing\V20200110\Models\ListResourceShareInvitationsRequest;
use AlibabaCloud\SDK\ResourceSharing\V20200110\Models\ListResourceShareInvitationsResponse;
use AlibabaCloud\SDK\ResourceSharing\V20200110\Models\ListResourceSharePermissionsRequest;
use AlibabaCloud\SDK\ResourceSharing\V20200110\Models\ListResourceSharePermissionsResponse;
use AlibabaCloud\SDK\ResourceSharing\V20200110\Models\ListResourceSharesRequest;
use AlibabaCloud\SDK\ResourceSharing\V20200110\Models\ListResourceSharesResponse;
use AlibabaCloud\SDK\ResourceSharing\V20200110\Models\ListSharedResourcesRequest;
use AlibabaCloud\SDK\ResourceSharing\V20200110\Models\ListSharedResourcesResponse;
use AlibabaCloud\SDK\ResourceSharing\V20200110\Models\ListSharedTargetsRequest;
use AlibabaCloud\SDK\ResourceSharing\V20200110\Models\ListSharedTargetsResponse;
use AlibabaCloud\SDK\ResourceSharing\V20200110\Models\RejectResourceShareInvitationRequest;
use AlibabaCloud\SDK\ResourceSharing\V20200110\Models\RejectResourceShareInvitationResponse;
use AlibabaCloud\SDK\ResourceSharing\V20200110\Models\UpdateResourceShareRequest;
use AlibabaCloud\SDK\ResourceSharing\V20200110\Models\UpdateResourceShareResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class ResourceSharing extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('resourcesharing', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param AcceptResourceShareInvitationRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return AcceptResourceShareInvitationResponse
     */
    public function acceptResourceShareInvitationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->resourceShareInvitationId)) {
            $query['ResourceShareInvitationId'] = $request->resourceShareInvitationId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AcceptResourceShareInvitation',
            'version'     => '2020-01-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AcceptResourceShareInvitationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AcceptResourceShareInvitationRequest $request
     *
     * @return AcceptResourceShareInvitationResponse
     */
    public function acceptResourceShareInvitation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->acceptResourceShareInvitationWithOptions($request, $runtime);
    }

    /**
     * @param AssociateResourceShareRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return AssociateResourceShareResponse
     */
    public function associateResourceShareWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->permissionNames)) {
            $query['PermissionNames'] = $request->permissionNames;
        }
        if (!Utils::isUnset($request->resourceShareId)) {
            $query['ResourceShareId'] = $request->resourceShareId;
        }
        if (!Utils::isUnset($request->resources)) {
            $query['Resources'] = $request->resources;
        }
        if (!Utils::isUnset($request->targets)) {
            $query['Targets'] = $request->targets;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AssociateResourceShare',
            'version'     => '2020-01-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AssociateResourceShareResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AssociateResourceShareRequest $request
     *
     * @return AssociateResourceShareResponse
     */
    public function associateResourceShare($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->associateResourceShareWithOptions($request, $runtime);
    }

    /**
     * @param AssociateResourceSharePermissionRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return AssociateResourceSharePermissionResponse
     */
    public function associateResourceSharePermissionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->permissionName)) {
            $query['PermissionName'] = $request->permissionName;
        }
        if (!Utils::isUnset($request->replace)) {
            $query['Replace'] = $request->replace;
        }
        if (!Utils::isUnset($request->resourceShareId)) {
            $query['ResourceShareId'] = $request->resourceShareId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AssociateResourceSharePermission',
            'version'     => '2020-01-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AssociateResourceSharePermissionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AssociateResourceSharePermissionRequest $request
     *
     * @return AssociateResourceSharePermissionResponse
     */
    public function associateResourceSharePermission($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->associateResourceSharePermissionWithOptions($request, $runtime);
    }

    /**
     * @param CreateResourceShareRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateResourceShareResponse
     */
    public function createResourceShareWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->allowExternalTargets)) {
            $query['AllowExternalTargets'] = $request->allowExternalTargets;
        }
        if (!Utils::isUnset($request->permissionNames)) {
            $query['PermissionNames'] = $request->permissionNames;
        }
        if (!Utils::isUnset($request->resourceShareName)) {
            $query['ResourceShareName'] = $request->resourceShareName;
        }
        if (!Utils::isUnset($request->resources)) {
            $query['Resources'] = $request->resources;
        }
        if (!Utils::isUnset($request->targets)) {
            $query['Targets'] = $request->targets;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateResourceShare',
            'version'     => '2020-01-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateResourceShareResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateResourceShareRequest $request
     *
     * @return CreateResourceShareResponse
     */
    public function createResourceShare($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createResourceShareWithOptions($request, $runtime);
    }

    /**
     * @param DeleteResourceShareRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteResourceShareResponse
     */
    public function deleteResourceShareWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->resourceShareId)) {
            $query['ResourceShareId'] = $request->resourceShareId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteResourceShare',
            'version'     => '2020-01-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteResourceShareResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteResourceShareRequest $request
     *
     * @return DeleteResourceShareResponse
     */
    public function deleteResourceShare($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteResourceShareWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRegions',
            'version'     => '2020-01-10',
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
     * @param DisassociateResourceShareRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DisassociateResourceShareResponse
     */
    public function disassociateResourceShareWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->resourceOwner)) {
            $query['ResourceOwner'] = $request->resourceOwner;
        }
        if (!Utils::isUnset($request->resourceShareId)) {
            $query['ResourceShareId'] = $request->resourceShareId;
        }
        if (!Utils::isUnset($request->resources)) {
            $query['Resources'] = $request->resources;
        }
        if (!Utils::isUnset($request->targets)) {
            $query['Targets'] = $request->targets;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DisassociateResourceShare',
            'version'     => '2020-01-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DisassociateResourceShareResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DisassociateResourceShareRequest $request
     *
     * @return DisassociateResourceShareResponse
     */
    public function disassociateResourceShare($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disassociateResourceShareWithOptions($request, $runtime);
    }

    /**
     * @param DisassociateResourceSharePermissionRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return DisassociateResourceSharePermissionResponse
     */
    public function disassociateResourceSharePermissionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->permissionName)) {
            $query['PermissionName'] = $request->permissionName;
        }
        if (!Utils::isUnset($request->resourceShareId)) {
            $query['ResourceShareId'] = $request->resourceShareId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DisassociateResourceSharePermission',
            'version'     => '2020-01-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DisassociateResourceSharePermissionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DisassociateResourceSharePermissionRequest $request
     *
     * @return DisassociateResourceSharePermissionResponse
     */
    public function disassociateResourceSharePermission($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disassociateResourceSharePermissionWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return EnableSharingWithResourceDirectoryResponse
     */
    public function enableSharingWithResourceDirectoryWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'EnableSharingWithResourceDirectory',
            'version'     => '2020-01-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EnableSharingWithResourceDirectoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return EnableSharingWithResourceDirectoryResponse
     */
    public function enableSharingWithResourceDirectory()
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableSharingWithResourceDirectoryWithOptions($runtime);
    }

    /**
     * @param GetPermissionRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetPermissionResponse
     */
    public function getPermissionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->permissionName)) {
            $query['PermissionName'] = $request->permissionName;
        }
        if (!Utils::isUnset($request->permissionVersion)) {
            $query['PermissionVersion'] = $request->permissionVersion;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetPermission',
            'version'     => '2020-01-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetPermissionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetPermissionRequest $request
     *
     * @return GetPermissionResponse
     */
    public function getPermission($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPermissionWithOptions($request, $runtime);
    }

    /**
     * @param ListPermissionVersionsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListPermissionVersionsResponse
     */
    public function listPermissionVersionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->permissionName)) {
            $query['PermissionName'] = $request->permissionName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListPermissionVersions',
            'version'     => '2020-01-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListPermissionVersionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListPermissionVersionsRequest $request
     *
     * @return ListPermissionVersionsResponse
     */
    public function listPermissionVersions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPermissionVersionsWithOptions($request, $runtime);
    }

    /**
     * @param ListPermissionsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListPermissionsResponse
     */
    public function listPermissionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListPermissions',
            'version'     => '2020-01-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListPermissionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListPermissionsRequest $request
     *
     * @return ListPermissionsResponse
     */
    public function listPermissions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPermissionsWithOptions($request, $runtime);
    }

    /**
     * @param ListResourceShareAssociationsRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return ListResourceShareAssociationsResponse
     */
    public function listResourceShareAssociationsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->associationStatus)) {
            $query['AssociationStatus'] = $request->associationStatus;
        }
        if (!Utils::isUnset($request->associationType)) {
            $query['AssociationType'] = $request->associationType;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceShareIds)) {
            $query['ResourceShareIds'] = $request->resourceShareIds;
        }
        if (!Utils::isUnset($request->target)) {
            $query['Target'] = $request->target;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListResourceShareAssociations',
            'version'     => '2020-01-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListResourceShareAssociationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListResourceShareAssociationsRequest $request
     *
     * @return ListResourceShareAssociationsResponse
     */
    public function listResourceShareAssociations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listResourceShareAssociationsWithOptions($request, $runtime);
    }

    /**
     * @param ListResourceShareInvitationsRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ListResourceShareInvitationsResponse
     */
    public function listResourceShareInvitationsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->resourceShareIds)) {
            $query['ResourceShareIds'] = $request->resourceShareIds;
        }
        if (!Utils::isUnset($request->resourceShareInvitationIds)) {
            $query['ResourceShareInvitationIds'] = $request->resourceShareInvitationIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListResourceShareInvitations',
            'version'     => '2020-01-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListResourceShareInvitationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListResourceShareInvitationsRequest $request
     *
     * @return ListResourceShareInvitationsResponse
     */
    public function listResourceShareInvitations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listResourceShareInvitationsWithOptions($request, $runtime);
    }

    /**
     * @param ListResourceSharePermissionsRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ListResourceSharePermissionsResponse
     */
    public function listResourceSharePermissionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->resourceOwner)) {
            $query['ResourceOwner'] = $request->resourceOwner;
        }
        if (!Utils::isUnset($request->resourceShareId)) {
            $query['ResourceShareId'] = $request->resourceShareId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListResourceSharePermissions',
            'version'     => '2020-01-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListResourceSharePermissionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListResourceSharePermissionsRequest $request
     *
     * @return ListResourceSharePermissionsResponse
     */
    public function listResourceSharePermissions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listResourceSharePermissionsWithOptions($request, $runtime);
    }

    /**
     * @param ListResourceSharesRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListResourceSharesResponse
     */
    public function listResourceSharesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->permissionName)) {
            $query['PermissionName'] = $request->permissionName;
        }
        if (!Utils::isUnset($request->resourceOwner)) {
            $query['ResourceOwner'] = $request->resourceOwner;
        }
        if (!Utils::isUnset($request->resourceShareIds)) {
            $query['ResourceShareIds'] = $request->resourceShareIds;
        }
        if (!Utils::isUnset($request->resourceShareName)) {
            $query['ResourceShareName'] = $request->resourceShareName;
        }
        if (!Utils::isUnset($request->resourceShareStatus)) {
            $query['ResourceShareStatus'] = $request->resourceShareStatus;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListResourceShares',
            'version'     => '2020-01-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListResourceSharesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListResourceSharesRequest $request
     *
     * @return ListResourceSharesResponse
     */
    public function listResourceShares($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listResourceSharesWithOptions($request, $runtime);
    }

    /**
     * @param ListSharedResourcesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListSharedResourcesResponse
     */
    public function listSharedResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->resourceIds)) {
            $query['ResourceIds'] = $request->resourceIds;
        }
        if (!Utils::isUnset($request->resourceOwner)) {
            $query['ResourceOwner'] = $request->resourceOwner;
        }
        if (!Utils::isUnset($request->resourceShareIds)) {
            $query['ResourceShareIds'] = $request->resourceShareIds;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->target)) {
            $query['Target'] = $request->target;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListSharedResources',
            'version'     => '2020-01-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListSharedResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListSharedResourcesRequest $request
     *
     * @return ListSharedResourcesResponse
     */
    public function listSharedResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSharedResourcesWithOptions($request, $runtime);
    }

    /**
     * @param ListSharedTargetsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListSharedTargetsResponse
     */
    public function listSharedTargetsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceOwner)) {
            $query['ResourceOwner'] = $request->resourceOwner;
        }
        if (!Utils::isUnset($request->resourceShareIds)) {
            $query['ResourceShareIds'] = $request->resourceShareIds;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->targets)) {
            $query['Targets'] = $request->targets;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListSharedTargets',
            'version'     => '2020-01-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListSharedTargetsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListSharedTargetsRequest $request
     *
     * @return ListSharedTargetsResponse
     */
    public function listSharedTargets($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSharedTargetsWithOptions($request, $runtime);
    }

    /**
     * @param RejectResourceShareInvitationRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return RejectResourceShareInvitationResponse
     */
    public function rejectResourceShareInvitationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->resourceShareInvitationId)) {
            $query['ResourceShareInvitationId'] = $request->resourceShareInvitationId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RejectResourceShareInvitation',
            'version'     => '2020-01-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RejectResourceShareInvitationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RejectResourceShareInvitationRequest $request
     *
     * @return RejectResourceShareInvitationResponse
     */
    public function rejectResourceShareInvitation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->rejectResourceShareInvitationWithOptions($request, $runtime);
    }

    /**
     * @param UpdateResourceShareRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateResourceShareResponse
     */
    public function updateResourceShareWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->allowExternalTargets)) {
            $query['AllowExternalTargets'] = $request->allowExternalTargets;
        }
        if (!Utils::isUnset($request->resourceShareId)) {
            $query['ResourceShareId'] = $request->resourceShareId;
        }
        if (!Utils::isUnset($request->resourceShareName)) {
            $query['ResourceShareName'] = $request->resourceShareName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateResourceShare',
            'version'     => '2020-01-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateResourceShareResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateResourceShareRequest $request
     *
     * @return UpdateResourceShareResponse
     */
    public function updateResourceShare($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateResourceShareWithOptions($request, $runtime);
    }
}
