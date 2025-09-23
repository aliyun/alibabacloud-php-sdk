<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceSharing\V20200110;

use AlibabaCloud\Dara\Models\RuntimeOptions;
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
use AlibabaCloud\SDK\ResourceSharing\V20200110\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\ResourceSharing\V20200110\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\ResourceSharing\V20200110\Models\RejectResourceShareInvitationRequest;
use AlibabaCloud\SDK\ResourceSharing\V20200110\Models\RejectResourceShareInvitationResponse;
use AlibabaCloud\SDK\ResourceSharing\V20200110\Models\TagResourcesRequest;
use AlibabaCloud\SDK\ResourceSharing\V20200110\Models\TagResourcesResponse;
use AlibabaCloud\SDK\ResourceSharing\V20200110\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\ResourceSharing\V20200110\Models\UntagResourcesResponse;
use AlibabaCloud\SDK\ResourceSharing\V20200110\Models\UpdateResourceShareRequest;
use AlibabaCloud\SDK\ResourceSharing\V20200110\Models\UpdateResourceShareResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

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
        if (null !== $endpoint) {
            return $endpoint;
        }

        if (null !== $endpointMap && null !== @$endpointMap[$regionId]) {
            return @$endpointMap[$regionId];
        }

        return Utils::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * Accepts a resource sharing invitation.
     *
     * @remarks
     * ### [](#)
     * *   A principal needs to accept or reject a resource sharing invitation only if the principal is not the management account or a member of a resource directory. If you share resources with an object in a resource directory, the system automatically accepts the resource sharing invitation for the object.
     * *   A resource sharing invitation is valid for seven days. A principal must accept or reject the invitation within the validity period.
     * This topic provides an example on how to call the API operation to accept the resource sharing invitation whose ID is `i-pMnItMX19fBJ****` in the `cn-hangzhou` region.
     *
     * @param request - AcceptResourceShareInvitationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AcceptResourceShareInvitationResponse
     *
     * @param AcceptResourceShareInvitationRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return AcceptResourceShareInvitationResponse
     */
    public function acceptResourceShareInvitationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->resourceShareInvitationId) {
            @$query['ResourceShareInvitationId'] = $request->resourceShareInvitationId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AcceptResourceShareInvitation',
            'version' => '2020-01-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AcceptResourceShareInvitationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Accepts a resource sharing invitation.
     *
     * @remarks
     * ### [](#)
     * *   A principal needs to accept or reject a resource sharing invitation only if the principal is not the management account or a member of a resource directory. If you share resources with an object in a resource directory, the system automatically accepts the resource sharing invitation for the object.
     * *   A resource sharing invitation is valid for seven days. A principal must accept or reject the invitation within the validity period.
     * This topic provides an example on how to call the API operation to accept the resource sharing invitation whose ID is `i-pMnItMX19fBJ****` in the `cn-hangzhou` region.
     *
     * @param request - AcceptResourceShareInvitationRequest
     *
     * @returns AcceptResourceShareInvitationResponse
     *
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
     * Associates resources or principals with a resource share.
     *
     * @remarks
     * This topic provides an example on how to call the API operation to associate the vSwitch `vsw-bp183p93qs667muql****` and the member `172050525300****` with the resource share `rs-6GRmdD3X****` in the `cn-hangzhou` region. After the association, the vSwitch is shared with the member.
     *
     * @param request - AssociateResourceShareRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AssociateResourceShareResponse
     *
     * @param AssociateResourceShareRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return AssociateResourceShareResponse
     */
    public function associateResourceShareWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->permissionNames) {
            @$query['PermissionNames'] = $request->permissionNames;
        }

        if (null !== $request->resourceArns) {
            @$query['ResourceArns'] = $request->resourceArns;
        }

        if (null !== $request->resourceShareId) {
            @$query['ResourceShareId'] = $request->resourceShareId;
        }

        if (null !== $request->resources) {
            @$query['Resources'] = $request->resources;
        }

        if (null !== $request->targetProperties) {
            @$query['TargetProperties'] = $request->targetProperties;
        }

        if (null !== $request->targets) {
            @$query['Targets'] = $request->targets;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AssociateResourceShare',
            'version' => '2020-01-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AssociateResourceShareResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Associates resources or principals with a resource share.
     *
     * @remarks
     * This topic provides an example on how to call the API operation to associate the vSwitch `vsw-bp183p93qs667muql****` and the member `172050525300****` with the resource share `rs-6GRmdD3X****` in the `cn-hangzhou` region. After the association, the vSwitch is shared with the member.
     *
     * @param request - AssociateResourceShareRequest
     *
     * @returns AssociateResourceShareResponse
     *
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
     * Associates permissions with a resource share.
     *
     * @remarks
     * This topic provides an example on how to call the API operation to associate the `AliyunRSDefaultPermissionVSwitch` permission with the `rs-6GRmdD3X****` resource share in the `cn-hangzhou` region.
     *
     * @param request - AssociateResourceSharePermissionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AssociateResourceSharePermissionResponse
     *
     * @param AssociateResourceSharePermissionRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return AssociateResourceSharePermissionResponse
     */
    public function associateResourceSharePermissionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->permissionName) {
            @$query['PermissionName'] = $request->permissionName;
        }

        if (null !== $request->replace) {
            @$query['Replace'] = $request->replace;
        }

        if (null !== $request->resourceShareId) {
            @$query['ResourceShareId'] = $request->resourceShareId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AssociateResourceSharePermission',
            'version' => '2020-01-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AssociateResourceSharePermissionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Associates permissions with a resource share.
     *
     * @remarks
     * This topic provides an example on how to call the API operation to associate the `AliyunRSDefaultPermissionVSwitch` permission with the `rs-6GRmdD3X****` resource share in the `cn-hangzhou` region.
     *
     * @param request - AssociateResourceSharePermissionRequest
     *
     * @returns AssociateResourceSharePermissionResponse
     *
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
     * Transfers a resource share from one resource group to another.
     *
     * @param request - ChangeResourceGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ChangeResourceGroupResponse
     *
     * @param ChangeResourceGroupRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ChangeResourceGroupResponse
     */
    public function changeResourceGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceRegionId) {
            @$query['ResourceRegionId'] = $request->resourceRegionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ChangeResourceGroup',
            'version' => '2020-01-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ChangeResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Transfers a resource share from one resource group to another.
     *
     * @param request - ChangeResourceGroupRequest
     *
     * @returns ChangeResourceGroupResponse
     *
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
     * Checks the status of resource sharing within a resource directory.
     *
     * @param request - CheckSharingWithResourceDirectoryStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CheckSharingWithResourceDirectoryStatusResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return CheckSharingWithResourceDirectoryStatusResponse
     */
    public function checkSharingWithResourceDirectoryStatusWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'CheckSharingWithResourceDirectoryStatus',
            'version' => '2020-01-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CheckSharingWithResourceDirectoryStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Checks the status of resource sharing within a resource directory.
     *
     * @returns CheckSharingWithResourceDirectoryStatusResponse
     *
     * @return CheckSharingWithResourceDirectoryStatusResponse
     */
    public function checkSharingWithResourceDirectoryStatus()
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkSharingWithResourceDirectoryStatusWithOptions($runtime);
    }

    /**
     * Creates a resource share.
     *
     * @remarks
     * Resource Sharing allows you to share your resources with one or more accounts and access the resources shared by other accounts. For more information, see [Resource Sharing overview](https://help.aliyun.com/document_detail/160622.html).
     * This topic provides an example on how to call the API operation to create a resource share named `test` in the `cn-hangzhou` region to share the vSwitch `vsw-bp183p93qs667muql****` with the member `172050525300****` in a resource directory. In this example, the management account of the resource directory is used to call this API operation.
     *
     * @param request - CreateResourceShareRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateResourceShareResponse
     *
     * @param CreateResourceShareRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateResourceShareResponse
     */
    public function createResourceShareWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->allowExternalTargets) {
            @$query['AllowExternalTargets'] = $request->allowExternalTargets;
        }

        if (null !== $request->permissionNames) {
            @$query['PermissionNames'] = $request->permissionNames;
        }

        if (null !== $request->resourceArns) {
            @$query['ResourceArns'] = $request->resourceArns;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->resourceShareName) {
            @$query['ResourceShareName'] = $request->resourceShareName;
        }

        if (null !== $request->resources) {
            @$query['Resources'] = $request->resources;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        if (null !== $request->targetProperties) {
            @$query['TargetProperties'] = $request->targetProperties;
        }

        if (null !== $request->targets) {
            @$query['Targets'] = $request->targets;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateResourceShare',
            'version' => '2020-01-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateResourceShareResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a resource share.
     *
     * @remarks
     * Resource Sharing allows you to share your resources with one or more accounts and access the resources shared by other accounts. For more information, see [Resource Sharing overview](https://help.aliyun.com/document_detail/160622.html).
     * This topic provides an example on how to call the API operation to create a resource share named `test` in the `cn-hangzhou` region to share the vSwitch `vsw-bp183p93qs667muql****` with the member `172050525300****` in a resource directory. In this example, the management account of the resource directory is used to call this API operation.
     *
     * @param request - CreateResourceShareRequest
     *
     * @returns CreateResourceShareResponse
     *
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
     * Deletes a resource share.
     *
     * @remarks
     * After a resource share is deleted, all principals in the resource share can no longer access the resources in the resource share. However, the resources are not deleted with the resource share.
     * A resource share that is deleted is in the `Deleted` state. The system deletes the record of the resource share within 48 hours to 96 hours.
     * This topic provides an example on how to call the API operation to delete the resource share `rs-qSkW1HBY****` in the `cn-hangzhou` region.
     *
     * @param request - DeleteResourceShareRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteResourceShareResponse
     *
     * @param DeleteResourceShareRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteResourceShareResponse
     */
    public function deleteResourceShareWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->resourceShareId) {
            @$query['ResourceShareId'] = $request->resourceShareId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteResourceShare',
            'version' => '2020-01-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteResourceShareResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a resource share.
     *
     * @remarks
     * After a resource share is deleted, all principals in the resource share can no longer access the resources in the resource share. However, the resources are not deleted with the resource share.
     * A resource share that is deleted is in the `Deleted` state. The system deletes the record of the resource share within 48 hours to 96 hours.
     * This topic provides an example on how to call the API operation to delete the resource share `rs-qSkW1HBY****` in the `cn-hangzhou` region.
     *
     * @param request - DeleteResourceShareRequest
     *
     * @returns DeleteResourceShareResponse
     *
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
     * Queries the regions where the Resource Sharing service is available.
     *
     * @param request - DescribeRegionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRegionsResponse
     *
     * @param DescribeRegionsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegionsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeRegions',
            'version' => '2020-01-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the regions where the Resource Sharing service is available.
     *
     * @param request - DescribeRegionsRequest
     *
     * @returns DescribeRegionsResponse
     *
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
     * Disassociates resources or principals from a resource share.
     *
     * @remarks
     *   A resource owner can call this API operation to disassociate shared resources or principals from a resource share.
     * *   If a principal does not belong to a resource directory, the principal can call this API operation to exit the resource share. For more information, see [Exit a resource share](https://help.aliyun.com/document_detail/440614.html).
     * This topic provides an example on how to use the management account of a resource directory to call the API operation to disassociate the member `172050525300****` from the resource share `rs-6GRmdD3X****` in the `cn-hangzhou` region. After the member is disassociated from the resource share, the member cannot share the resources in the resource share.
     *
     * @param request - DisassociateResourceShareRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DisassociateResourceShareResponse
     *
     * @param DisassociateResourceShareRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DisassociateResourceShareResponse
     */
    public function disassociateResourceShareWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->resourceArns) {
            @$query['ResourceArns'] = $request->resourceArns;
        }

        if (null !== $request->resourceOwner) {
            @$query['ResourceOwner'] = $request->resourceOwner;
        }

        if (null !== $request->resourceShareId) {
            @$query['ResourceShareId'] = $request->resourceShareId;
        }

        if (null !== $request->resources) {
            @$query['Resources'] = $request->resources;
        }

        if (null !== $request->targets) {
            @$query['Targets'] = $request->targets;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DisassociateResourceShare',
            'version' => '2020-01-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DisassociateResourceShareResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Disassociates resources or principals from a resource share.
     *
     * @remarks
     *   A resource owner can call this API operation to disassociate shared resources or principals from a resource share.
     * *   If a principal does not belong to a resource directory, the principal can call this API operation to exit the resource share. For more information, see [Exit a resource share](https://help.aliyun.com/document_detail/440614.html).
     * This topic provides an example on how to use the management account of a resource directory to call the API operation to disassociate the member `172050525300****` from the resource share `rs-6GRmdD3X****` in the `cn-hangzhou` region. After the member is disassociated from the resource share, the member cannot share the resources in the resource share.
     *
     * @param request - DisassociateResourceShareRequest
     *
     * @returns DisassociateResourceShareResponse
     *
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
     * Disassociates a permission from a resource share. You can disassociate a permission from a resource share only if the resource share does not contain resources of the type indicated by the permission.
     *
     * @remarks
     * This topic provides an example on how to call the API operation to disassociate the `AliyunRSDefaultPermissionVSwitch` permission from the `rs-6GRmdD3X****` resource share in the `cn-hangzhou` region.
     *
     * @param request - DisassociateResourceSharePermissionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DisassociateResourceSharePermissionResponse
     *
     * @param DisassociateResourceSharePermissionRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return DisassociateResourceSharePermissionResponse
     */
    public function disassociateResourceSharePermissionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->permissionName) {
            @$query['PermissionName'] = $request->permissionName;
        }

        if (null !== $request->resourceShareId) {
            @$query['ResourceShareId'] = $request->resourceShareId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DisassociateResourceSharePermission',
            'version' => '2020-01-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DisassociateResourceSharePermissionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Disassociates a permission from a resource share. You can disassociate a permission from a resource share only if the resource share does not contain resources of the type indicated by the permission.
     *
     * @remarks
     * This topic provides an example on how to call the API operation to disassociate the `AliyunRSDefaultPermissionVSwitch` permission from the `rs-6GRmdD3X****` resource share in the `cn-hangzhou` region.
     *
     * @param request - DisassociateResourceSharePermissionRequest
     *
     * @returns DisassociateResourceSharePermissionResponse
     *
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
     * Enables resource sharing for a resource directory.
     *
     * @remarks
     * You can share your resources with all members in your resource directory, all members in a specific folder in your resource directory, or a specific member in your resource directory as a resource owner only after you enable resource sharing for your resource directory.
     * You can call this API operation only by using the management account of your resource directory or a RAM user or RAM role to which the required permissions are granted within the management account.
     *
     * @param request - EnableSharingWithResourceDirectoryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnableSharingWithResourceDirectoryResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return EnableSharingWithResourceDirectoryResponse
     */
    public function enableSharingWithResourceDirectoryWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'EnableSharingWithResourceDirectory',
            'version' => '2020-01-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnableSharingWithResourceDirectoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables resource sharing for a resource directory.
     *
     * @remarks
     * You can share your resources with all members in your resource directory, all members in a specific folder in your resource directory, or a specific member in your resource directory as a resource owner only after you enable resource sharing for your resource directory.
     * You can call this API operation only by using the management account of your resource directory or a RAM user or RAM role to which the required permissions are granted within the management account.
     *
     * @returns EnableSharingWithResourceDirectoryResponse
     *
     * @return EnableSharingWithResourceDirectoryResponse
     */
    public function enableSharingWithResourceDirectory()
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableSharingWithResourceDirectoryWithOptions($runtime);
    }

    /**
     * Queries the information about a permission.
     *
     * @remarks
     * This topic provides an example on how to call the API operation to query the information about the `AliyunRSDefaultPermissionVSwitch` permission whose version is `v1` in the `cn-hangzhou` region.
     *
     * @param request - GetPermissionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetPermissionResponse
     *
     * @param GetPermissionRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetPermissionResponse
     */
    public function getPermissionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->permissionName) {
            @$query['PermissionName'] = $request->permissionName;
        }

        if (null !== $request->permissionVersion) {
            @$query['PermissionVersion'] = $request->permissionVersion;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetPermission',
            'version' => '2020-01-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetPermissionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about a permission.
     *
     * @remarks
     * This topic provides an example on how to call the API operation to query the information about the `AliyunRSDefaultPermissionVSwitch` permission whose version is `v1` in the `cn-hangzhou` region.
     *
     * @param request - GetPermissionRequest
     *
     * @returns GetPermissionResponse
     *
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
     * Queries the versions of a permission.
     *
     * @remarks
     * This topic provides an example on how to call the API operation to query the versions of the `AliyunRSDefaultPermissionVSwitch` permission in the `cn-hangzhou` region.
     *
     * @param request - ListPermissionVersionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPermissionVersionsResponse
     *
     * @param ListPermissionVersionsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListPermissionVersionsResponse
     */
    public function listPermissionVersionsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->permissionName) {
            @$query['PermissionName'] = $request->permissionName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListPermissionVersions',
            'version' => '2020-01-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListPermissionVersionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the versions of a permission.
     *
     * @remarks
     * This topic provides an example on how to call the API operation to query the versions of the `AliyunRSDefaultPermissionVSwitch` permission in the `cn-hangzhou` region.
     *
     * @param request - ListPermissionVersionsRequest
     *
     * @returns ListPermissionVersionsResponse
     *
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
     * Queries the information about the default permission.
     *
     * @remarks
     * This topic provides an example on how to call the API operation to query the information about the default permission for the `VSwitch` resource type in the `cn-hangzhou` region.
     *
     * @param request - ListPermissionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPermissionsResponse
     *
     * @param ListPermissionsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListPermissionsResponse
     */
    public function listPermissionsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListPermissions',
            'version' => '2020-01-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListPermissionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about the default permission.
     *
     * @remarks
     * This topic provides an example on how to call the API operation to query the information about the default permission for the `VSwitch` resource type in the `cn-hangzhou` region.
     *
     * @param request - ListPermissionsRequest
     *
     * @returns ListPermissionsResponse
     *
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
     * Queries the association records of resource shares.
     *
     * @remarks
     * This topic provides an example on how to call the API operation to query the association records of the resource shares that are created by using the current Alibaba Cloud account in the `cn-hangzhou` region. The response shows the following records:
     * *   The resource `vsw-bp1upw03qyz8n7us9****` of the `VSwitch` type has been associated with the resource share `rs-6GRmdD3X****`. The resource is in the `Associated` state. This indicates that the resource is being shared.
     * *   The resource `vsw-bp183p93qs667muql****` of the `VSwitch` type has been disassociated from the resource share `rs-6GRmdD3X****`. The resource is in the `Disassociated` state. This indicates that the sharing of the resource is stopped.
     *
     * @param request - ListResourceShareAssociationsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListResourceShareAssociationsResponse
     *
     * @param ListResourceShareAssociationsRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return ListResourceShareAssociationsResponse
     */
    public function listResourceShareAssociationsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->associationStatus) {
            @$query['AssociationStatus'] = $request->associationStatus;
        }

        if (null !== $request->associationType) {
            @$query['AssociationType'] = $request->associationType;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->resourceArn) {
            @$query['ResourceArn'] = $request->resourceArn;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceShareIds) {
            @$query['ResourceShareIds'] = $request->resourceShareIds;
        }

        if (null !== $request->target) {
            @$query['Target'] = $request->target;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListResourceShareAssociations',
            'version' => '2020-01-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListResourceShareAssociationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the association records of resource shares.
     *
     * @remarks
     * This topic provides an example on how to call the API operation to query the association records of the resource shares that are created by using the current Alibaba Cloud account in the `cn-hangzhou` region. The response shows the following records:
     * *   The resource `vsw-bp1upw03qyz8n7us9****` of the `VSwitch` type has been associated with the resource share `rs-6GRmdD3X****`. The resource is in the `Associated` state. This indicates that the resource is being shared.
     * *   The resource `vsw-bp183p93qs667muql****` of the `VSwitch` type has been disassociated from the resource share `rs-6GRmdD3X****`. The resource is in the `Disassociated` state. This indicates that the sharing of the resource is stopped.
     *
     * @param request - ListResourceShareAssociationsRequest
     *
     * @returns ListResourceShareAssociationsResponse
     *
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
     * Queries the resource sharing invitations that are received.
     *
     * @remarks
     * ### [](#)
     * This topic provides an example on how to call the API operation to query the resource sharing invitations that are received by the current account in the `cn-hangzhou` region. The response shows that one invitation is received by the current account and is waiting for confirmation.
     *
     * @param request - ListResourceShareInvitationsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListResourceShareInvitationsResponse
     *
     * @param ListResourceShareInvitationsRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ListResourceShareInvitationsResponse
     */
    public function listResourceShareInvitationsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->resourceShareIds) {
            @$query['ResourceShareIds'] = $request->resourceShareIds;
        }

        if (null !== $request->resourceShareInvitationIds) {
            @$query['ResourceShareInvitationIds'] = $request->resourceShareInvitationIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListResourceShareInvitations',
            'version' => '2020-01-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListResourceShareInvitationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the resource sharing invitations that are received.
     *
     * @remarks
     * ### [](#)
     * This topic provides an example on how to call the API operation to query the resource sharing invitations that are received by the current account in the `cn-hangzhou` region. The response shows that one invitation is received by the current account and is waiting for confirmation.
     *
     * @param request - ListResourceShareInvitationsRequest
     *
     * @returns ListResourceShareInvitationsResponse
     *
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
     * Queries the permissions that are associated with a resource share.
     *
     * @remarks
     * This topic provides an example on how to call the API operation to query the permissions that are associated with the resource share created by using the current Alibaba Cloud account in the `cn-hangzhou` region.
     *
     * @param request - ListResourceSharePermissionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListResourceSharePermissionsResponse
     *
     * @param ListResourceSharePermissionsRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ListResourceSharePermissionsResponse
     */
    public function listResourceSharePermissionsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->resourceOwner) {
            @$query['ResourceOwner'] = $request->resourceOwner;
        }

        if (null !== $request->resourceShareId) {
            @$query['ResourceShareId'] = $request->resourceShareId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListResourceSharePermissions',
            'version' => '2020-01-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListResourceSharePermissionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the permissions that are associated with a resource share.
     *
     * @remarks
     * This topic provides an example on how to call the API operation to query the permissions that are associated with the resource share created by using the current Alibaba Cloud account in the `cn-hangzhou` region.
     *
     * @param request - ListResourceSharePermissionsRequest
     *
     * @returns ListResourceSharePermissionsResponse
     *
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
     * Queries resource shares.
     *
     * @remarks
     * This topic provides an example on how to call the API operation to query the resource shares that are created by using the current Alibaba Cloud account in the `cn-hangzhou` region. The response shows that the following resource shares are created within the account `151266687691****`:
     * *   `rs-hX9wC5jO****`, which is in the `Deleted` state
     * *   `rs-PqysnzIj****`, which is in the `Active` state
     *
     * @param request - ListResourceSharesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListResourceSharesResponse
     *
     * @param ListResourceSharesRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListResourceSharesResponse
     */
    public function listResourceSharesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->permissionName) {
            @$query['PermissionName'] = $request->permissionName;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->resourceOwner) {
            @$query['ResourceOwner'] = $request->resourceOwner;
        }

        if (null !== $request->resourceShareIds) {
            @$query['ResourceShareIds'] = $request->resourceShareIds;
        }

        if (null !== $request->resourceShareName) {
            @$query['ResourceShareName'] = $request->resourceShareName;
        }

        if (null !== $request->resourceShareStatus) {
            @$query['ResourceShareStatus'] = $request->resourceShareStatus;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListResourceShares',
            'version' => '2020-01-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListResourceSharesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries resource shares.
     *
     * @remarks
     * This topic provides an example on how to call the API operation to query the resource shares that are created by using the current Alibaba Cloud account in the `cn-hangzhou` region. The response shows that the following resource shares are created within the account `151266687691****`:
     * *   `rs-hX9wC5jO****`, which is in the `Deleted` state
     * *   `rs-PqysnzIj****`, which is in the `Active` state
     *
     * @param request - ListResourceSharesRequest
     *
     * @returns ListResourceSharesResponse
     *
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
     * Queries the resources you share with other accounts or the resources other accounts share with you.
     *
     * @remarks
     * This topic provides an example on how to call the API operation to query the resources that you share with other accounts in the `cn-hangzhou` region. The response shows that in the resource share `rs-6GRmdD3X****`, you share the `vsw-bp1upw03qyz8n7us9****` resource of the `VSwitch` type with other accounts.
     *
     * @param request - ListSharedResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSharedResourcesResponse
     *
     * @param ListSharedResourcesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListSharedResourcesResponse
     */
    public function listSharedResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->resourceArns) {
            @$query['ResourceArns'] = $request->resourceArns;
        }

        if (null !== $request->resourceIds) {
            @$query['ResourceIds'] = $request->resourceIds;
        }

        if (null !== $request->resourceOwner) {
            @$query['ResourceOwner'] = $request->resourceOwner;
        }

        if (null !== $request->resourceShareIds) {
            @$query['ResourceShareIds'] = $request->resourceShareIds;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->target) {
            @$query['Target'] = $request->target;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListSharedResources',
            'version' => '2020-01-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListSharedResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the resources you share with other accounts or the resources other accounts share with you.
     *
     * @remarks
     * This topic provides an example on how to call the API operation to query the resources that you share with other accounts in the `cn-hangzhou` region. The response shows that in the resource share `rs-6GRmdD3X****`, you share the `vsw-bp1upw03qyz8n7us9****` resource of the `VSwitch` type with other accounts.
     *
     * @param request - ListSharedResourcesRequest
     *
     * @returns ListSharedResourcesResponse
     *
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
     * Queries principals.
     *
     * @remarks
     * If you are a resource owner, you can query the principals with which you share your resources. If you are a principal, you can query the resources that are shared with you.
     * This topic provides an example on how to call the API operation to query the principals with which you share your resources in the `cn-hangzhou` region. The response shows that you share your resources with the principals `114240524784****` and `172050525300****`.
     *
     * @param request - ListSharedTargetsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSharedTargetsResponse
     *
     * @param ListSharedTargetsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListSharedTargetsResponse
     */
    public function listSharedTargetsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->resourceArn) {
            @$query['ResourceArn'] = $request->resourceArn;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceOwner) {
            @$query['ResourceOwner'] = $request->resourceOwner;
        }

        if (null !== $request->resourceShareIds) {
            @$query['ResourceShareIds'] = $request->resourceShareIds;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->targets) {
            @$query['Targets'] = $request->targets;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListSharedTargets',
            'version' => '2020-01-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListSharedTargetsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries principals.
     *
     * @remarks
     * If you are a resource owner, you can query the principals with which you share your resources. If you are a principal, you can query the resources that are shared with you.
     * This topic provides an example on how to call the API operation to query the principals with which you share your resources in the `cn-hangzhou` region. The response shows that you share your resources with the principals `114240524784****` and `172050525300****`.
     *
     * @param request - ListSharedTargetsRequest
     *
     * @returns ListSharedTargetsResponse
     *
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
     * Queries the tags that are added to resource shares.
     *
     * @param request - ListTagResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTagResourcesResponse
     *
     * @param ListTagResourcesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListTagResourcesResponse
     */
    public function listTagResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTagResources',
            'version' => '2020-01-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListTagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the tags that are added to resource shares.
     *
     * @param request - ListTagResourcesRequest
     *
     * @returns ListTagResourcesResponse
     *
     * @param ListTagResourcesRequest $request
     *
     * @return ListTagResourcesResponse
     */
    public function listTagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTagResourcesWithOptions($request, $runtime);
    }

    /**
     * 拒绝组织外共享邀请.
     *
     * @remarks
     * This topic provides an example on how to call the API operation to reject the resource sharing invitation `i-yyTWbkjHArYh****` in the `cn-hangzhou` region.
     *
     * @param request - RejectResourceShareInvitationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RejectResourceShareInvitationResponse
     *
     * @param RejectResourceShareInvitationRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return RejectResourceShareInvitationResponse
     */
    public function rejectResourceShareInvitationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->resourceShareInvitationId) {
            @$query['ResourceShareInvitationId'] = $request->resourceShareInvitationId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RejectResourceShareInvitation',
            'version' => '2020-01-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RejectResourceShareInvitationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 拒绝组织外共享邀请.
     *
     * @remarks
     * This topic provides an example on how to call the API operation to reject the resource sharing invitation `i-yyTWbkjHArYh****` in the `cn-hangzhou` region.
     *
     * @param request - RejectResourceShareInvitationRequest
     *
     * @returns RejectResourceShareInvitationResponse
     *
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
     * Adds tags to a resource share.
     *
     * @param request - TagResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TagResourcesResponse
     *
     * @param TagResourcesRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return TagResourcesResponse
     */
    public function tagResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'TagResources',
            'version' => '2020-01-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return TagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds tags to a resource share.
     *
     * @param request - TagResourcesRequest
     *
     * @returns TagResourcesResponse
     *
     * @param TagResourcesRequest $request
     *
     * @return TagResourcesResponse
     */
    public function tagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->tagResourcesWithOptions($request, $runtime);
    }

    /**
     * Removes tags from resource shares.
     *
     * @param request - UntagResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UntagResourcesResponse
     *
     * @param UntagResourcesRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UntagResourcesResponse
     */
    public function untagResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->all) {
            @$query['All'] = $request->all;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tagKey) {
            @$query['TagKey'] = $request->tagKey;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UntagResources',
            'version' => '2020-01-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UntagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Removes tags from resource shares.
     *
     * @param request - UntagResourcesRequest
     *
     * @returns UntagResourcesResponse
     *
     * @param UntagResourcesRequest $request
     *
     * @return UntagResourcesResponse
     */
    public function untagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->untagResourcesWithOptions($request, $runtime);
    }

    /**
     * 调用UpdateResourceShare修改共享单元基本信息。
     *
     * @remarks
     * You can call this API operation to change the name or resource sharing scope of a resource share.
     * This topic provides an example on how to call the API operation to change the name of the resource share `rs-qSkW1HBY****` in the `cn-hangzhou` region from `test` to `new`.
     *
     * @param request - UpdateResourceShareRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateResourceShareResponse
     *
     * @param UpdateResourceShareRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateResourceShareResponse
     */
    public function updateResourceShareWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->allowExternalTargets) {
            @$query['AllowExternalTargets'] = $request->allowExternalTargets;
        }

        if (null !== $request->resourceShareId) {
            @$query['ResourceShareId'] = $request->resourceShareId;
        }

        if (null !== $request->resourceShareName) {
            @$query['ResourceShareName'] = $request->resourceShareName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateResourceShare',
            'version' => '2020-01-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateResourceShareResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 调用UpdateResourceShare修改共享单元基本信息。
     *
     * @remarks
     * You can call this API operation to change the name or resource sharing scope of a resource share.
     * This topic provides an example on how to call the API operation to change the name of the resource share `rs-qSkW1HBY****` in the `cn-hangzhou` region from `test` to `new`.
     *
     * @param request - UpdateResourceShareRequest
     *
     * @returns UpdateResourceShareResponse
     *
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
