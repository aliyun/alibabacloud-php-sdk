<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\LinkFace\V20180720;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\LinkFace\V20180720\Models\CreateGroupRequest;
use AlibabaCloud\SDK\LinkFace\V20180720\Models\CreateGroupResponse;
use AlibabaCloud\SDK\LinkFace\V20180720\Models\DeleteDeviceAllGroupRequest;
use AlibabaCloud\SDK\LinkFace\V20180720\Models\DeleteDeviceAllGroupResponse;
use AlibabaCloud\SDK\LinkFace\V20180720\Models\DeleteDeviceGroupRequest;
use AlibabaCloud\SDK\LinkFace\V20180720\Models\DeleteDeviceGroupResponse;
use AlibabaCloud\SDK\LinkFace\V20180720\Models\DeleteFaceRequest;
use AlibabaCloud\SDK\LinkFace\V20180720\Models\DeleteFaceResponse;
use AlibabaCloud\SDK\LinkFace\V20180720\Models\DeleteGroupRequest;
use AlibabaCloud\SDK\LinkFace\V20180720\Models\DeleteGroupResponse;
use AlibabaCloud\SDK\LinkFace\V20180720\Models\LinkFaceRequest;
use AlibabaCloud\SDK\LinkFace\V20180720\Models\LinkFaceResponse;
use AlibabaCloud\SDK\LinkFace\V20180720\Models\QueryAddUserInfoRequest;
use AlibabaCloud\SDK\LinkFace\V20180720\Models\QueryAddUserInfoResponse;
use AlibabaCloud\SDK\LinkFace\V20180720\Models\QueryAllGroupsRequest;
use AlibabaCloud\SDK\LinkFace\V20180720\Models\QueryAllGroupsResponse;
use AlibabaCloud\SDK\LinkFace\V20180720\Models\QueryAuthenticationRequest;
use AlibabaCloud\SDK\LinkFace\V20180720\Models\QueryAuthenticationResponse;
use AlibabaCloud\SDK\LinkFace\V20180720\Models\QueryFaceRequest;
use AlibabaCloud\SDK\LinkFace\V20180720\Models\QueryFaceResponse;
use AlibabaCloud\SDK\LinkFace\V20180720\Models\QueryGroupUsersRequest;
use AlibabaCloud\SDK\LinkFace\V20180720\Models\QueryGroupUsersResponse;
use AlibabaCloud\SDK\LinkFace\V20180720\Models\QueryLicensesRequest;
use AlibabaCloud\SDK\LinkFace\V20180720\Models\QueryLicensesResponse;
use AlibabaCloud\SDK\LinkFace\V20180720\Models\QuerySyncPicScheduleRequest;
use AlibabaCloud\SDK\LinkFace\V20180720\Models\QuerySyncPicScheduleResponse;
use AlibabaCloud\SDK\LinkFace\V20180720\Models\RegisterFaceRequest;
use AlibabaCloud\SDK\LinkFace\V20180720\Models\RegisterFaceResponse;
use AlibabaCloud\SDK\LinkFace\V20180720\Models\SearchFaceRequest;
use AlibabaCloud\SDK\LinkFace\V20180720\Models\SearchFaceResponse;
use AlibabaCloud\SDK\LinkFace\V20180720\Models\SyncFacePicturesRequest;
use AlibabaCloud\SDK\LinkFace\V20180720\Models\SyncFacePicturesResponse;
use AlibabaCloud\SDK\LinkFace\V20180720\Models\UnlinkFaceRequest;
use AlibabaCloud\SDK\LinkFace\V20180720\Models\UnlinkFaceResponse;
use AlibabaCloud\SDK\LinkFace\V20180720\Models\UpdateFaceRequest;
use AlibabaCloud\SDK\LinkFace\V20180720\Models\UpdateFaceResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class LinkFace extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('linkface', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 创建组.
     *
     * @param request - CreateGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateGroupResponse
     *
     * @param CreateGroupRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CreateGroupResponse
     */
    public function createGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->groupId) {
            @$body['GroupId'] = $request->groupId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateGroup',
            'version'     => '2018-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateGroupResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 创建组.
     *
     * @param request - CreateGroupRequest
     * @returns CreateGroupResponse
     *
     * @param CreateGroupRequest $request
     *
     * @return CreateGroupResponse
     */
    public function createGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createGroupWithOptions($request, $runtime);
    }

    /**
     * 删除设备所在的所有分组.
     *
     * @param request - DeleteDeviceAllGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteDeviceAllGroupResponse
     *
     * @param DeleteDeviceAllGroupRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteDeviceAllGroupResponse
     */
    public function deleteDeviceAllGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->deviceName) {
            @$body['DeviceName'] = $request->deviceName;
        }

        if (null !== $request->iotId) {
            @$body['IotId'] = $request->iotId;
        }

        if (null !== $request->productKey) {
            @$body['ProductKey'] = $request->productKey;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteDeviceAllGroup',
            'version'     => '2018-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteDeviceAllGroupResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteDeviceAllGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 删除设备所在的所有分组.
     *
     * @param request - DeleteDeviceAllGroupRequest
     * @returns DeleteDeviceAllGroupResponse
     *
     * @param DeleteDeviceAllGroupRequest $request
     *
     * @return DeleteDeviceAllGroupResponse
     */
    public function deleteDeviceAllGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDeviceAllGroupWithOptions($request, $runtime);
    }

    /**
     * 设备设备组.
     *
     * @param request - DeleteDeviceGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteDeviceGroupResponse
     *
     * @param DeleteDeviceGroupRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteDeviceGroupResponse
     */
    public function deleteDeviceGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->deviceName) {
            @$body['DeviceName'] = $request->deviceName;
        }

        if (null !== $request->groupId) {
            @$body['GroupId'] = $request->groupId;
        }

        if (null !== $request->iotId) {
            @$body['IotId'] = $request->iotId;
        }

        if (null !== $request->productKey) {
            @$body['ProductKey'] = $request->productKey;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteDeviceGroup',
            'version'     => '2018-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteDeviceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteDeviceGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 设备设备组.
     *
     * @param request - DeleteDeviceGroupRequest
     * @returns DeleteDeviceGroupResponse
     *
     * @param DeleteDeviceGroupRequest $request
     *
     * @return DeleteDeviceGroupResponse
     */
    public function deleteDeviceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDeviceGroupWithOptions($request, $runtime);
    }

    /**
     * 删除人脸.
     *
     * @param request - DeleteFaceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteFaceResponse
     *
     * @param DeleteFaceRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return DeleteFaceResponse
     */
    public function deleteFaceWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->groupId) {
            @$body['GroupId'] = $request->groupId;
        }

        if (null !== $request->userId) {
            @$body['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteFace',
            'version'     => '2018-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteFaceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteFaceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 删除人脸.
     *
     * @param request - DeleteFaceRequest
     * @returns DeleteFaceResponse
     *
     * @param DeleteFaceRequest $request
     *
     * @return DeleteFaceResponse
     */
    public function deleteFace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteFaceWithOptions($request, $runtime);
    }

    /**
     * 删除组.
     *
     * @param request - DeleteGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteGroupResponse
     *
     * @param DeleteGroupRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteGroupResponse
     */
    public function deleteGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->groupId) {
            @$body['GroupId'] = $request->groupId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteGroup',
            'version'     => '2018-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteGroupResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 删除组.
     *
     * @param request - DeleteGroupRequest
     * @returns DeleteGroupResponse
     *
     * @param DeleteGroupRequest $request
     *
     * @return DeleteGroupResponse
     */
    public function deleteGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteGroupWithOptions($request, $runtime);
    }

    /**
     * 关联人脸.
     *
     * @param request - LinkFaceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns LinkFaceResponse
     *
     * @param LinkFaceRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return LinkFaceResponse
     */
    public function linkFaceWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->groupId) {
            @$body['GroupId'] = $request->groupId;
        }

        if (null !== $request->userId) {
            @$body['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'LinkFace',
            'version'     => '2018-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return LinkFaceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return LinkFaceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 关联人脸.
     *
     * @param request - LinkFaceRequest
     * @returns LinkFaceResponse
     *
     * @param LinkFaceRequest $request
     *
     * @return LinkFaceResponse
     */
    public function linkFace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->linkFaceWithOptions($request, $runtime);
    }

    /**
     * 查询添加的用户信息.
     *
     * @param request - QueryAddUserInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns QueryAddUserInfoResponse
     *
     * @param QueryAddUserInfoRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return QueryAddUserInfoResponse
     */
    public function queryAddUserInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->deviceName) {
            @$body['DeviceName'] = $request->deviceName;
        }

        if (null !== $request->groupId) {
            @$body['GroupId'] = $request->groupId;
        }

        if (null !== $request->iotId) {
            @$body['IotId'] = $request->iotId;
        }

        if (null !== $request->productKey) {
            @$body['ProductKey'] = $request->productKey;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryAddUserInfo',
            'version'     => '2018-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return QueryAddUserInfoResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return QueryAddUserInfoResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询添加的用户信息.
     *
     * @param request - QueryAddUserInfoRequest
     * @returns QueryAddUserInfoResponse
     *
     * @param QueryAddUserInfoRequest $request
     *
     * @return QueryAddUserInfoResponse
     */
    public function queryAddUserInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryAddUserInfoWithOptions($request, $runtime);
    }

    /**
     * 查询所有分组.
     *
     * @param request - QueryAllGroupsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns QueryAllGroupsResponse
     *
     * @param QueryAllGroupsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return QueryAllGroupsResponse
     */
    public function queryAllGroupsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->currentPage) {
            @$body['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryAllGroups',
            'version'     => '2018-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return QueryAllGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return QueryAllGroupsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询所有分组.
     *
     * @param request - QueryAllGroupsRequest
     * @returns QueryAllGroupsResponse
     *
     * @param QueryAllGroupsRequest $request
     *
     * @return QueryAllGroupsResponse
     */
    public function queryAllGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryAllGroupsWithOptions($request, $runtime);
    }

    /**
     * 查询认证
     *
     * @param request - QueryAuthenticationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns QueryAuthenticationResponse
     *
     * @param QueryAuthenticationRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return QueryAuthenticationResponse
     */
    public function queryAuthenticationWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->currentPage) {
            @$body['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->deviceName) {
            @$body['DeviceName'] = $request->deviceName;
        }

        if (null !== $request->iotId) {
            @$body['IotId'] = $request->iotId;
        }

        if (null !== $request->licenseType) {
            @$body['LicenseType'] = $request->licenseType;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->productKey) {
            @$body['ProductKey'] = $request->productKey;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryAuthentication',
            'version'     => '2018-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return QueryAuthenticationResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return QueryAuthenticationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询认证
     *
     * @param request - QueryAuthenticationRequest
     * @returns QueryAuthenticationResponse
     *
     * @param QueryAuthenticationRequest $request
     *
     * @return QueryAuthenticationResponse
     */
    public function queryAuthentication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryAuthenticationWithOptions($request, $runtime);
    }

    /**
     * 查询人脸.
     *
     * @param request - QueryFaceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns QueryFaceResponse
     *
     * @param QueryFaceRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return QueryFaceResponse
     */
    public function queryFaceWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->userId) {
            @$body['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryFace',
            'version'     => '2018-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return QueryFaceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return QueryFaceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询人脸.
     *
     * @param request - QueryFaceRequest
     * @returns QueryFaceResponse
     *
     * @param QueryFaceRequest $request
     *
     * @return QueryFaceResponse
     */
    public function queryFace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryFaceWithOptions($request, $runtime);
    }

    /**
     * 查询分组内用户.
     *
     * @param request - QueryGroupUsersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns QueryGroupUsersResponse
     *
     * @param QueryGroupUsersRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return QueryGroupUsersResponse
     */
    public function queryGroupUsersWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->currentPage) {
            @$body['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->groupId) {
            @$body['GroupId'] = $request->groupId;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryGroupUsers',
            'version'     => '2018-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return QueryGroupUsersResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return QueryGroupUsersResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询分组内用户.
     *
     * @param request - QueryGroupUsersRequest
     * @returns QueryGroupUsersResponse
     *
     * @param QueryGroupUsersRequest $request
     *
     * @return QueryGroupUsersResponse
     */
    public function queryGroupUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryGroupUsersWithOptions($request, $runtime);
    }

    /**
     * 查询授权.
     *
     * @param request - QueryLicensesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns QueryLicensesResponse
     *
     * @param QueryLicensesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return QueryLicensesResponse
     */
    public function queryLicensesWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->currentPage) {
            @$body['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->licenseType) {
            @$body['LicenseType'] = $request->licenseType;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryLicenses',
            'version'     => '2018-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return QueryLicensesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return QueryLicensesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询授权.
     *
     * @param request - QueryLicensesRequest
     * @returns QueryLicensesResponse
     *
     * @param QueryLicensesRequest $request
     *
     * @return QueryLicensesResponse
     */
    public function queryLicenses($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryLicensesWithOptions($request, $runtime);
    }

    /**
     * 查询同步图片计划.
     *
     * @param request - QuerySyncPicScheduleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns QuerySyncPicScheduleResponse
     *
     * @param QuerySyncPicScheduleRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return QuerySyncPicScheduleResponse
     */
    public function querySyncPicScheduleWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->deviceName) {
            @$body['DeviceName'] = $request->deviceName;
        }

        if (null !== $request->groupId) {
            @$body['GroupId'] = $request->groupId;
        }

        if (null !== $request->iotId) {
            @$body['IotId'] = $request->iotId;
        }

        if (null !== $request->productKey) {
            @$body['ProductKey'] = $request->productKey;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QuerySyncPicSchedule',
            'version'     => '2018-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return QuerySyncPicScheduleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return QuerySyncPicScheduleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询同步图片计划.
     *
     * @param request - QuerySyncPicScheduleRequest
     * @returns QuerySyncPicScheduleResponse
     *
     * @param QuerySyncPicScheduleRequest $request
     *
     * @return QuerySyncPicScheduleResponse
     */
    public function querySyncPicSchedule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySyncPicScheduleWithOptions($request, $runtime);
    }

    /**
     * 注册人脸.
     *
     * @param request - RegisterFaceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns RegisterFaceResponse
     *
     * @param RegisterFaceRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return RegisterFaceResponse
     */
    public function registerFaceWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->groupId) {
            @$body['GroupId'] = $request->groupId;
        }

        if (null !== $request->image) {
            @$body['Image'] = $request->image;
        }

        if (null !== $request->userId) {
            @$body['UserId'] = $request->userId;
        }

        if (null !== $request->userInfo) {
            @$body['UserInfo'] = $request->userInfo;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RegisterFace',
            'version'     => '2018-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return RegisterFaceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RegisterFaceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 注册人脸.
     *
     * @param request - RegisterFaceRequest
     * @returns RegisterFaceResponse
     *
     * @param RegisterFaceRequest $request
     *
     * @return RegisterFaceResponse
     */
    public function registerFace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->registerFaceWithOptions($request, $runtime);
    }

    /**
     * 搜索人脸.
     *
     * @param request - SearchFaceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns SearchFaceResponse
     *
     * @param SearchFaceRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return SearchFaceResponse
     */
    public function searchFaceWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->groupId) {
            @$body['GroupId'] = $request->groupId;
        }

        if (null !== $request->image) {
            @$body['Image'] = $request->image;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SearchFace',
            'version'     => '2018-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SearchFaceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SearchFaceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 搜索人脸.
     *
     * @param request - SearchFaceRequest
     * @returns SearchFaceResponse
     *
     * @param SearchFaceRequest $request
     *
     * @return SearchFaceResponse
     */
    public function searchFace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchFaceWithOptions($request, $runtime);
    }

    /**
     * 同步人脸.
     *
     * @param request - SyncFacePicturesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns SyncFacePicturesResponse
     *
     * @param SyncFacePicturesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return SyncFacePicturesResponse
     */
    public function syncFacePicturesWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->deviceName) {
            @$body['DeviceName'] = $request->deviceName;
        }

        if (null !== $request->groupId) {
            @$body['GroupId'] = $request->groupId;
        }

        if (null !== $request->iotId) {
            @$body['IotId'] = $request->iotId;
        }

        if (null !== $request->productKey) {
            @$body['ProductKey'] = $request->productKey;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SyncFacePictures',
            'version'     => '2018-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SyncFacePicturesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SyncFacePicturesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 同步人脸.
     *
     * @param request - SyncFacePicturesRequest
     * @returns SyncFacePicturesResponse
     *
     * @param SyncFacePicturesRequest $request
     *
     * @return SyncFacePicturesResponse
     */
    public function syncFacePictures($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->syncFacePicturesWithOptions($request, $runtime);
    }

    /**
     * 解绑人脸.
     *
     * @param request - UnlinkFaceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UnlinkFaceResponse
     *
     * @param UnlinkFaceRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return UnlinkFaceResponse
     */
    public function unlinkFaceWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->groupId) {
            @$body['GroupId'] = $request->groupId;
        }

        if (null !== $request->userId) {
            @$body['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UnlinkFace',
            'version'     => '2018-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UnlinkFaceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UnlinkFaceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 解绑人脸.
     *
     * @param request - UnlinkFaceRequest
     * @returns UnlinkFaceResponse
     *
     * @param UnlinkFaceRequest $request
     *
     * @return UnlinkFaceResponse
     */
    public function unlinkFace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unlinkFaceWithOptions($request, $runtime);
    }

    /**
     * 更新人脸.
     *
     * @param request - UpdateFaceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpdateFaceResponse
     *
     * @param UpdateFaceRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return UpdateFaceResponse
     */
    public function updateFaceWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->image) {
            @$body['Image'] = $request->image;
        }

        if (null !== $request->userId) {
            @$body['UserId'] = $request->userId;
        }

        if (null !== $request->userInfo) {
            @$body['UserInfo'] = $request->userInfo;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateFace',
            'version'     => '2018-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateFaceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateFaceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 更新人脸.
     *
     * @param request - UpdateFaceRequest
     * @returns UpdateFaceResponse
     *
     * @param UpdateFaceRequest $request
     *
     * @return UpdateFaceResponse
     */
    public function updateFace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateFaceWithOptions($request, $runtime);
    }
}
