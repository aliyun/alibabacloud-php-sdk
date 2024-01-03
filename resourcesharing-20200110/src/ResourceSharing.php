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
use AlibabaCloud\SDK\ResourceSharing\V20200110\Models\ChangeResourceGroupRequest;
use AlibabaCloud\SDK\ResourceSharing\V20200110\Models\ChangeResourceGroupResponse;
use AlibabaCloud\SDK\ResourceSharing\V20200110\Models\CheckSharingWithResourceDirectoryStatusResponse;
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
     * ### [](#)
     *   * *   A principal needs to accept or reject a resource sharing invitation only if the principal is not the management account or a member of a resource directory. If you share resources with an object in a resource directory, the system automatically accepts the resource sharing invitation for the object.
     *   * *   A resource sharing invitation is valid for seven days. A principal must accept or reject the invitation within the validity period.
     *   * This topic provides an example on how to call the API operation to accept the resource sharing invitation whose ID is `i-pMnItMX19fBJ****` in the `cn-hangzhou` region.
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
     * ### [](#)
     *   * *   A principal needs to accept or reject a resource sharing invitation only if the principal is not the management account or a member of a resource directory. If you share resources with an object in a resource directory, the system automatically accepts the resource sharing invitation for the object.
     *   * *   A resource sharing invitation is valid for seven days. A principal must accept or reject the invitation within the validity period.
     *   * This topic provides an example on how to call the API operation to accept the resource sharing invitation whose ID is `i-pMnItMX19fBJ****` in the `cn-hangzhou` region.
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
     * This topic provides an example on how to call the API operation to associate the vSwitch `vsw-bp183p93qs667muql****` and the member `172050525300****` with the resource share `rs-6GRmdD3X****` in the `cn-hangzhou` region. After the association, the vSwitch is shared with the member.
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
     * This topic provides an example on how to call the API operation to associate the vSwitch `vsw-bp183p93qs667muql****` and the member `172050525300****` with the resource share `rs-6GRmdD3X****` in the `cn-hangzhou` region. After the association, the vSwitch is shared with the member.
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
     * This topic provides an example on how to call the API operation to associate the `AliyunRSDefaultPermissionVSwitch` permission with the `rs-6GRmdD3X****` resource share in the `cn-hangzhou` region.
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
     * This topic provides an example on how to call the API operation to associate the `AliyunRSDefaultPermissionVSwitch` permission with the `rs-6GRmdD3X****` resource share in the `cn-hangzhou` region.
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
            'version'     => '2020-01-10',
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
     * @param RuntimeOptions $runtime
     *
     * @return CheckSharingWithResourceDirectoryStatusResponse
     */
    public function checkSharingWithResourceDirectoryStatusWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'CheckSharingWithResourceDirectoryStatus',
            'version'     => '2020-01-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CheckSharingWithResourceDirectoryStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return CheckSharingWithResourceDirectoryStatusResponse
     */
    public function checkSharingWithResourceDirectoryStatus()
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkSharingWithResourceDirectoryStatusWithOptions($runtime);
    }

    /**
     * Resource Sharing allows you to share your resources with one or more accounts and access the resources shared by other accounts. For more information, see [Resource Sharing overview](~~160622~~).
     *   * This topic provides an example on how to call the API operation to create a resource share named `test` in the `cn-hangzhou` region to share the vSwitch `vsw-bp183p93qs667muql****` with the member `172050525300****`. In this example, the management account of a resource directory is used to call this API operation.
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
     * Resource Sharing allows you to share your resources with one or more accounts and access the resources shared by other accounts. For more information, see [Resource Sharing overview](~~160622~~).
     *   * This topic provides an example on how to call the API operation to create a resource share named `test` in the `cn-hangzhou` region to share the vSwitch `vsw-bp183p93qs667muql****` with the member `172050525300****`. In this example, the management account of a resource directory is used to call this API operation.
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
     * After a resource share is deleted, all principals in the resource share can no longer access the resources in the resource share. However, the resources are not deleted with the resource share.
     *   * A resource share that is deleted is in the `Deleted` state. The system deletes the record of the resource share within 48 hours to 96 hours.
     *   * This topic provides an example on how to call the API operation to delete the resource share `rs-qSkW1HBY****` in the `cn-hangzhou` region.
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
     * After a resource share is deleted, all principals in the resource share can no longer access the resources in the resource share. However, the resources are not deleted with the resource share.
     *   * A resource share that is deleted is in the `Deleted` state. The system deletes the record of the resource share within 48 hours to 96 hours.
     *   * This topic provides an example on how to call the API operation to delete the resource share `rs-qSkW1HBY****` in the `cn-hangzhou` region.
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
     * *   A resource owner can call this API operation to remove shared resources or principals from a resource share.
     *   * *   If an Alibaba Cloud account that is not the management account or a member of a resource directory is added to a resource share as a principal, you can use the Alibaba Cloud account to call this API operation to exit the resource share. For more information, see [Exit a resource share](~~440614~~).
     *   * This topic provides an example on how to use the management account of a resource directory to call the API operation to remove the member `172050525300****` from the resource share `rs-6GRmdD3X****` in the `cn-hangzhou` region. After the member is removed from the resource share, the member cannot share the resources in the resource share.
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
     * *   A resource owner can call this API operation to remove shared resources or principals from a resource share.
     *   * *   If an Alibaba Cloud account that is not the management account or a member of a resource directory is added to a resource share as a principal, you can use the Alibaba Cloud account to call this API operation to exit the resource share. For more information, see [Exit a resource share](~~440614~~).
     *   * This topic provides an example on how to use the management account of a resource directory to call the API operation to remove the member `172050525300****` from the resource share `rs-6GRmdD3X****` in the `cn-hangzhou` region. After the member is removed from the resource share, the member cannot share the resources in the resource share.
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
     * You can share your resources with all members in your resource directory, all members in a specific folder in your resource directory, or a specific member in your resource directory as a resource owner only after you enable resource sharing for your resource directory.
     *   * You can call this API operation only by using the management account of your resource directory or a RAM user or RAM role to which the required permissions are granted within the management account.
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
     * You can share your resources with all members in your resource directory, all members in a specific folder in your resource directory, or a specific member in your resource directory as a resource owner only after you enable resource sharing for your resource directory.
     *   * You can call this API operation only by using the management account of your resource directory or a RAM user or RAM role to which the required permissions are granted within the management account.
     *   *
     * @return EnableSharingWithResourceDirectoryResponse EnableSharingWithResourceDirectoryResponse
     */
    public function enableSharingWithResourceDirectory()
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableSharingWithResourceDirectoryWithOptions($runtime);
    }

    /**
     * This topic provides an example on how to call the API operation to query the information about the `AliyunRSDefaultPermissionVSwitch` permission whose version is `v1` in the `cn-hangzhou` region.
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
     * This topic provides an example on how to call the API operation to query the information about the `AliyunRSDefaultPermissionVSwitch` permission whose version is `v1` in the `cn-hangzhou` region.
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
     * This topic provides an example on how to call the API operation to query the versions of the `AliyunRSDefaultPermissionVSwitch` permission in the `cn-hangzhou` region.
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
     * This topic provides an example on how to call the API operation to query the versions of the `AliyunRSDefaultPermissionVSwitch` permission in the `cn-hangzhou` region.
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
     * This topic provides an example on how to call the API operation to query the information about the default permission for the `VSwitch` resource type in the `cn-hangzhou` region.
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
     * This topic provides an example on how to call the API operation to query the information about the default permission for the `VSwitch` resource type in the `cn-hangzhou` region.
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
     * ### [](#)
     *   * This topic provides an example on how to call the API operation to query the resource sharing invitations that are received by the current account in the `cn-hangzhou` region. The response shows that one invitation is received by the current account and is waiting for confirmation.
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
     * ### [](#)
     *   * This topic provides an example on how to call the API operation to query the resource sharing invitations that are received by the current account in the `cn-hangzhou` region. The response shows that one invitation is received by the current account and is waiting for confirmation.
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
     * This topic provides an example on how to call the API operation to query the permissions that are associated with the resource share created by using the current Alibaba Cloud account in the `cn-hangzhou` region.
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
     * This topic provides an example on how to call the API operation to query the permissions that are associated with the resource share created by using the current Alibaba Cloud account in the `cn-hangzhou` region.
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
     * This topic provides an example on how to call the API operation to query the resource shares that are created by using the current Alibaba Cloud account in the `cn-hangzhou` region. The response shows that the following resource shares are created by using the account whose ID is `151266687691****`:
     *   * *   `rs-hX9wC5jO****`, which is in the `Deleted` state
     *   * *   `rs-PqysnzIj****`, which is in the `Active` state.
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
     * This topic provides an example on how to call the API operation to query the resource shares that are created by using the current Alibaba Cloud account in the `cn-hangzhou` region. The response shows that the following resource shares are created by using the account whose ID is `151266687691****`:
     *   * *   `rs-hX9wC5jO****`, which is in the `Deleted` state
     *   * *   `rs-PqysnzIj****`, which is in the `Active` state.
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
     * This topic provides an example on how to call the API operation to reject the resource sharing invitation `i-yyTWbkjHArYh****` in the `cn-hangzhou` region.
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
     * This topic provides an example on how to call the API operation to reject the resource sharing invitation `i-yyTWbkjHArYh****` in the `cn-hangzhou` region.
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
     * You can call this API operation to change the name or resource sharing scope of a resource share.
     *   * This topic provides an example on how to call the API operation to change the name of the resource share `rs-qSkW1HBY****` in the `cn-hangzhou` region from `test` to `new`.
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
     * You can call this API operation to change the name or resource sharing scope of a resource share.
     *   * This topic provides an example on how to call the API operation to change the name of the resource share `rs-qSkW1HBY****` in the `cn-hangzhou` region from `test` to `new`.
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
