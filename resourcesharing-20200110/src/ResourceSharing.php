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
     * The ID of the resource sharing invitation.
     *   * You can call the [ListResourceShareInvitations](~~450564~~) operation to obtain the ID of a resource sharing invitation.
     *   *
     * @param AcceptResourceShareInvitationRequest $request AcceptResourceShareInvitationRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return AcceptResourceShareInvitationResponse AcceptResourceShareInvitationResponse
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
     * The ID of the resource sharing invitation.
     *   * You can call the [ListResourceShareInvitations](~~450564~~) operation to obtain the ID of a resource sharing invitation.
     *   *
     * @param AcceptResourceShareInvitationRequest $request AcceptResourceShareInvitationRequest
     *
     * @return AcceptResourceShareInvitationResponse AcceptResourceShareInvitationResponse
     */
    public function acceptResourceShareInvitation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->acceptResourceShareInvitationWithOptions($request, $runtime);
    }

    /**
     * The operation that you want to perform. Set the value to AssociateResourceShare.
     *   *
     * @param AssociateResourceShareRequest $request AssociateResourceShareRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return AssociateResourceShareResponse AssociateResourceShareResponse
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
     * The operation that you want to perform. Set the value to AssociateResourceShare.
     *   *
     * @param AssociateResourceShareRequest $request AssociateResourceShareRequest
     *
     * @return AssociateResourceShareResponse AssociateResourceShareResponse
     */
    public function associateResourceShare($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->associateResourceShareWithOptions($request, $runtime);
    }

    /**
     * The name of the permission.
     *   *
     * @param AssociateResourceSharePermissionRequest $request AssociateResourceSharePermissionRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return AssociateResourceSharePermissionResponse AssociateResourceSharePermissionResponse
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
     * The name of the permission.
     *   *
     * @param AssociateResourceSharePermissionRequest $request AssociateResourceSharePermissionRequest
     *
     * @return AssociateResourceSharePermissionResponse AssociateResourceSharePermissionResponse
     */
    public function associateResourceSharePermission($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->associateResourceSharePermissionWithOptions($request, $runtime);
    }

    /**
     * The operation that you want to perform. Set the value to CreateResourceShare.
     *   *
     * @param CreateResourceShareRequest $request CreateResourceShareRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateResourceShareResponse CreateResourceShareResponse
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
     * The operation that you want to perform. Set the value to CreateResourceShare.
     *   *
     * @param CreateResourceShareRequest $request CreateResourceShareRequest
     *
     * @return CreateResourceShareResponse CreateResourceShareResponse
     */
    public function createResourceShare($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createResourceShareWithOptions($request, $runtime);
    }

    /**
     * The operation that you want to perform. Set the value to DeleteResourceShare.
     *   *
     * @param DeleteResourceShareRequest $request DeleteResourceShareRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteResourceShareResponse DeleteResourceShareResponse
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
     * The operation that you want to perform. Set the value to DeleteResourceShare.
     *   *
     * @param DeleteResourceShareRequest $request DeleteResourceShareRequest
     *
     * @return DeleteResourceShareResponse DeleteResourceShareResponse
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
     * The operation that you want to perform. Set the value to DisassociateResourceShare.
     *   *
     * @param DisassociateResourceShareRequest $request DisassociateResourceShareRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DisassociateResourceShareResponse DisassociateResourceShareResponse
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
     * The operation that you want to perform. Set the value to DisassociateResourceShare.
     *   *
     * @param DisassociateResourceShareRequest $request DisassociateResourceShareRequest
     *
     * @return DisassociateResourceShareResponse DisassociateResourceShareResponse
     */
    public function disassociateResourceShare($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disassociateResourceShareWithOptions($request, $runtime);
    }

    /**
     * This topic provides an example on how to call the API operation to disassociate the `AliyunRSDefaultPermissionVSwitch` permission from the `rs-6GRmdD3X****` resource share in the `cn-hangzhou` region.
     *   * ## Limits
     *   * You can call this operation up to 20 times per second per account. This operation is globally limited to 500 times per second across all accounts. If the number of the calls per second exceeds a limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limits when you call this operation.
     *   *
     * @param DisassociateResourceSharePermissionRequest $request DisassociateResourceSharePermissionRequest
     * @param RuntimeOptions                             $runtime runtime options for this request RuntimeOptions
     *
     * @return DisassociateResourceSharePermissionResponse DisassociateResourceSharePermissionResponse
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
     * This topic provides an example on how to call the API operation to disassociate the `AliyunRSDefaultPermissionVSwitch` permission from the `rs-6GRmdD3X****` resource share in the `cn-hangzhou` region.
     *   * ## Limits
     *   * You can call this operation up to 20 times per second per account. This operation is globally limited to 500 times per second across all accounts. If the number of the calls per second exceeds a limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limits when you call this operation.
     *   *
     * @param DisassociateResourceSharePermissionRequest $request DisassociateResourceSharePermissionRequest
     *
     * @return DisassociateResourceSharePermissionResponse DisassociateResourceSharePermissionResponse
     */
    public function disassociateResourceSharePermission($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disassociateResourceSharePermissionWithOptions($request, $runtime);
    }

    /**
     * The operation that you want to perform. Set the value to EnableSharingWithResourceDirectory.
     *   *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return EnableSharingWithResourceDirectoryResponse EnableSharingWithResourceDirectoryResponse
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
     * The operation that you want to perform. Set the value to EnableSharingWithResourceDirectory.
     *   *
     * @return EnableSharingWithResourceDirectoryResponse EnableSharingWithResourceDirectoryResponse
     */
    public function enableSharingWithResourceDirectory()
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableSharingWithResourceDirectoryWithOptions($runtime);
    }

    /**
     * The version of the permission.
     *   *
     * @param GetPermissionRequest $request GetPermissionRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return GetPermissionResponse GetPermissionResponse
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
     * The version of the permission.
     *   *
     * @param GetPermissionRequest $request GetPermissionRequest
     *
     * @return GetPermissionResponse GetPermissionResponse
     */
    public function getPermission($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPermissionWithOptions($request, $runtime);
    }

    /**
     * The maximum number of entries to return for a single request.
     *   * Valid values: 1 to 100. Default value: 20.
     *   *
     * @param ListPermissionVersionsRequest $request ListPermissionVersionsRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return ListPermissionVersionsResponse ListPermissionVersionsResponse
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
     * The maximum number of entries to return for a single request.
     *   * Valid values: 1 to 100. Default value: 20.
     *   *
     * @param ListPermissionVersionsRequest $request ListPermissionVersionsRequest
     *
     * @return ListPermissionVersionsResponse ListPermissionVersionsResponse
     */
    public function listPermissionVersions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPermissionVersionsWithOptions($request, $runtime);
    }

    /**
     * The maximum number of entries to return for a single request.
     *   * Valid values: 1 to 100. Default value: 20.
     *   *
     * @param ListPermissionsRequest $request ListPermissionsRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ListPermissionsResponse ListPermissionsResponse
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
     * The maximum number of entries to return for a single request.
     *   * Valid values: 1 to 100. Default value: 20.
     *   *
     * @param ListPermissionsRequest $request ListPermissionsRequest
     *
     * @return ListPermissionsResponse ListPermissionsResponse
     */
    public function listPermissions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPermissionsWithOptions($request, $runtime);
    }

    /**
     * This topic provides an example on how to call the API operation to query the association records of the resource shares that are created by using the current Alibaba Cloud account in the `cn-hangzhou` region. The response shows the following records:
     *   * *   The resource `vsw-bp1upw03qyz8n7us9****` of the `VSwitch` type has been associated with the resource share `rs-6GRmdD3X****`. The resource is in the `Associated` state. This indicates that the resource is being shared.
     *   * *   The resource `vsw-bp183p93qs667muql****` of the `VSwitch` type has been disassociated from the resource share `rs-6GRmdD3X****`. The resource is in the `Disassociated` state. This indicates that the sharing of the resource is stopped.
     *   * ## Limits
     *   * You can call this operation up to 20 times per second per account. This operation is globally limited to 500 times per second across all accounts. If the number of the calls per second exceeds a limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limits when you call this operation.
     *   *
     * @param ListResourceShareAssociationsRequest $request ListResourceShareAssociationsRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return ListResourceShareAssociationsResponse ListResourceShareAssociationsResponse
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
     * This topic provides an example on how to call the API operation to query the association records of the resource shares that are created by using the current Alibaba Cloud account in the `cn-hangzhou` region. The response shows the following records:
     *   * *   The resource `vsw-bp1upw03qyz8n7us9****` of the `VSwitch` type has been associated with the resource share `rs-6GRmdD3X****`. The resource is in the `Associated` state. This indicates that the resource is being shared.
     *   * *   The resource `vsw-bp183p93qs667muql****` of the `VSwitch` type has been disassociated from the resource share `rs-6GRmdD3X****`. The resource is in the `Disassociated` state. This indicates that the sharing of the resource is stopped.
     *   * ## Limits
     *   * You can call this operation up to 20 times per second per account. This operation is globally limited to 500 times per second across all accounts. If the number of the calls per second exceeds a limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limits when you call this operation.
     *   *
     * @param ListResourceShareAssociationsRequest $request ListResourceShareAssociationsRequest
     *
     * @return ListResourceShareAssociationsResponse ListResourceShareAssociationsResponse
     */
    public function listResourceShareAssociations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listResourceShareAssociationsWithOptions($request, $runtime);
    }

    /**
     * The maximum number of entries to return for a single request.
     *   * Valid values: 1 to 100. Default value: 20.
     *   *
     * @param ListResourceShareInvitationsRequest $request ListResourceShareInvitationsRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return ListResourceShareInvitationsResponse ListResourceShareInvitationsResponse
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
     * The maximum number of entries to return for a single request.
     *   * Valid values: 1 to 100. Default value: 20.
     *   *
     * @param ListResourceShareInvitationsRequest $request ListResourceShareInvitationsRequest
     *
     * @return ListResourceShareInvitationsResponse ListResourceShareInvitationsResponse
     */
    public function listResourceShareInvitations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listResourceShareInvitationsWithOptions($request, $runtime);
    }

    /**
     * The maximum number of entries to return for a single request.
     *   * Valid values: 1 to 100. Default value: 20.
     *   *
     * @param ListResourceSharePermissionsRequest $request ListResourceSharePermissionsRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return ListResourceSharePermissionsResponse ListResourceSharePermissionsResponse
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
     * The maximum number of entries to return for a single request.
     *   * Valid values: 1 to 100. Default value: 20.
     *   *
     * @param ListResourceSharePermissionsRequest $request ListResourceSharePermissionsRequest
     *
     * @return ListResourceSharePermissionsResponse ListResourceSharePermissionsResponse
     */
    public function listResourceSharePermissions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listResourceSharePermissionsWithOptions($request, $runtime);
    }

    /**
     * The operation that you want to perform. Set the value to ListResourceShares.
     *   *
     * @param ListResourceSharesRequest $request ListResourceSharesRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ListResourceSharesResponse ListResourceSharesResponse
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
     * The operation that you want to perform. Set the value to ListResourceShares.
     *   *
     * @param ListResourceSharesRequest $request ListResourceSharesRequest
     *
     * @return ListResourceSharesResponse ListResourceSharesResponse
     */
    public function listResourceShares($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listResourceSharesWithOptions($request, $runtime);
    }

    /**
     * This topic provides an example on how to call the API operation to query the resources that you share with other accounts in the `cn-hangzhou` region. The response shows that in the resource share `rs-6GRmdD3X****`, you share the `vsw-bp1upw03qyz8n7us9****` resource of the `VSwitch` type with other accounts.
     *   * ## Limits
     *   * You can call this operation up to 20 times per second per account. This operation is globally limited to 500 times per second across all accounts. If the number of the calls per second exceeds a limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limits when you call this operation.
     *   *
     * @param ListSharedResourcesRequest $request ListSharedResourcesRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ListSharedResourcesResponse ListSharedResourcesResponse
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
     * This topic provides an example on how to call the API operation to query the resources that you share with other accounts in the `cn-hangzhou` region. The response shows that in the resource share `rs-6GRmdD3X****`, you share the `vsw-bp1upw03qyz8n7us9****` resource of the `VSwitch` type with other accounts.
     *   * ## Limits
     *   * You can call this operation up to 20 times per second per account. This operation is globally limited to 500 times per second across all accounts. If the number of the calls per second exceeds a limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limits when you call this operation.
     *   *
     * @param ListSharedResourcesRequest $request ListSharedResourcesRequest
     *
     * @return ListSharedResourcesResponse ListSharedResourcesResponse
     */
    public function listSharedResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSharedResourcesWithOptions($request, $runtime);
    }

    /**
     * If you are a resource owner, you can query the principals with which you share your resources.
     *   * If you are a principal, you can query the resources that are shared with you.
     *   * This topic provides an example on how to call the API operation to query the principals with which you share your resources in the `cn-hangzhou` region. The response shows that you share your resources with the principals `114240524784****` and `172050525300****`.
     *   * ## Limits
     *   * You can call this operation up to 20 times per second per account. This operation is globally limited to 500 times per second across all accounts. If the number of the calls per second exceeds a limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limits when you call this operation.
     *   *
     * @param ListSharedTargetsRequest $request ListSharedTargetsRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ListSharedTargetsResponse ListSharedTargetsResponse
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
     * If you are a resource owner, you can query the principals with which you share your resources.
     *   * If you are a principal, you can query the resources that are shared with you.
     *   * This topic provides an example on how to call the API operation to query the principals with which you share your resources in the `cn-hangzhou` region. The response shows that you share your resources with the principals `114240524784****` and `172050525300****`.
     *   * ## Limits
     *   * You can call this operation up to 20 times per second per account. This operation is globally limited to 500 times per second across all accounts. If the number of the calls per second exceeds a limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limits when you call this operation.
     *   *
     * @param ListSharedTargetsRequest $request ListSharedTargetsRequest
     *
     * @return ListSharedTargetsResponse ListSharedTargetsResponse
     */
    public function listSharedTargets($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSharedTargetsWithOptions($request, $runtime);
    }

    /**
     * The ID of the resource sharing invitation.
     *   * You can call the [ListResourceShareInvitations](~~450564~~) operation to obtain the ID of a resource sharing invitation.
     *   *
     * @param RejectResourceShareInvitationRequest $request RejectResourceShareInvitationRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return RejectResourceShareInvitationResponse RejectResourceShareInvitationResponse
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
     * The ID of the resource sharing invitation.
     *   * You can call the [ListResourceShareInvitations](~~450564~~) operation to obtain the ID of a resource sharing invitation.
     *   *
     * @param RejectResourceShareInvitationRequest $request RejectResourceShareInvitationRequest
     *
     * @return RejectResourceShareInvitationResponse RejectResourceShareInvitationResponse
     */
    public function rejectResourceShareInvitation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->rejectResourceShareInvitationWithOptions($request, $runtime);
    }

    /**
     * The operation that you want to perform. Set the value to UpdateResourceShare.
     *   *
     * @param UpdateResourceShareRequest $request UpdateResourceShareRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateResourceShareResponse UpdateResourceShareResponse
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
     * The operation that you want to perform. Set the value to UpdateResourceShare.
     *   *
     * @param UpdateResourceShareRequest $request UpdateResourceShareRequest
     *
     * @return UpdateResourceShareResponse UpdateResourceShareResponse
     */
    public function updateResourceShare($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateResourceShareWithOptions($request, $runtime);
    }
}
