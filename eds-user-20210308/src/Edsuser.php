<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\BatchSetDesktopManagerRequest;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\BatchSetDesktopManagerResponse;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\ChangeUserPasswordRequest;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\ChangeUserPasswordResponse;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\CheckUsedPropertyRequest;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\CheckUsedPropertyResponse;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\CheckUsedPropertyValueRequest;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\CheckUsedPropertyValueResponse;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\CreateGroupRequest;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\CreateGroupResponse;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\CreateOrgRequest;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\CreateOrgResponse;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\CreatePropertyRequest;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\CreatePropertyResponse;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\CreateResourceGroupRequest;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\CreateResourceGroupResponse;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\CreateUsersRequest;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\CreateUsersResponse;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\DeleteResourceGroupRequest;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\DeleteResourceGroupResponse;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\DeleteUserPropertyValueRequest;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\DeleteUserPropertyValueResponse;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\DescribeGroupsRequest;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\DescribeGroupsResponse;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\DescribeGroupUserRequest;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\DescribeGroupUserResponse;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\DescribeMfaDevicesRequest;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\DescribeMfaDevicesResponse;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\DescribeOrgByLayerRequest;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\DescribeOrgByLayerResponse;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\DescribeOrgsRequest;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\DescribeOrgsResponse;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\DescribeResourceGroupsRequest;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\DescribeResourceGroupsResponse;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\DescribeUsersRequest;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\DescribeUsersResponse;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\DescribeUsersShrinkRequest;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\FilterUsersRequest;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\FilterUsersResponse;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\FilterUsersShrinkRequest;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\GetManagerInfoByAuthCodeRequest;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\GetManagerInfoByAuthCodeResponse;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\InitTenantAliasResponse;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\ListPropertyResponse;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\ListPropertyValueRequest;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\ListPropertyValueResponse;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\LockMfaDeviceRequest;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\LockMfaDeviceResponse;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\LockUsersRequest;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\LockUsersResponse;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\ModifyGroupRequest;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\ModifyGroupResponse;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\ModifyOrgRequest;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\ModifyOrgResponse;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\ModifyUserRequest;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\ModifyUserResponse;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\MoveOrgRequest;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\MoveOrgResponse;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\MoveUserOrgRequest;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\MoveUserOrgResponse;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\QuerySyncStatusByAliUidResponse;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\RemoveGroupRequest;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\RemoveGroupResponse;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\RemoveMfaDeviceRequest;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\RemoveMfaDeviceResponse;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\RemoveOrgRequest;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\RemoveOrgResponse;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\RemovePropertyRequest;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\RemovePropertyResponse;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\RemoveUsersRequest;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\RemoveUsersResponse;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\ResetUserPasswordRequest;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\ResetUserPasswordResponse;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\SetUserPropertyValueRequest;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\SetUserPropertyValueResponse;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\SyncAllEduInfoResponse;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\UnlockMfaDeviceRequest;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\UnlockMfaDeviceResponse;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\UnlockUsersRequest;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\UnlockUsersResponse;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\UpdatePropertyRequest;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\UpdatePropertyResponse;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\UserBatchJoinGroupRequest;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\UserBatchJoinGroupResponse;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\UserBatchQuitGroupRequest;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\UserBatchQuitGroupResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Edsuser extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_signatureAlgorithm = 'v2';
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('eds-user', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @summary 批量设置桌面管理员
     *  *
     * @param BatchSetDesktopManagerRequest $request BatchSetDesktopManagerRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return BatchSetDesktopManagerResponse BatchSetDesktopManagerResponse
     */
    public function batchSetDesktopManagerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->isDesktopManager)) {
            $body['IsDesktopManager'] = $request->isDesktopManager;
        }
        if (!Utils::isUnset($request->users)) {
            $body['Users'] = $request->users;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'BatchSetDesktopManager',
            'version' => '2021-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BatchSetDesktopManagerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 批量设置桌面管理员
     *  *
     * @param BatchSetDesktopManagerRequest $request BatchSetDesktopManagerRequest
     *
     * @return BatchSetDesktopManagerResponse BatchSetDesktopManagerResponse
     */
    public function batchSetDesktopManager($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchSetDesktopManagerWithOptions($request, $runtime);
    }

    /**
     * @summary 管理员修改用户密码
     *  *
     * @param ChangeUserPasswordRequest $request ChangeUserPasswordRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ChangeUserPasswordResponse ChangeUserPasswordResponse
     */
    public function changeUserPasswordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->endUserId)) {
            $body['EndUserId'] = $request->endUserId;
        }
        if (!Utils::isUnset($request->newPassword)) {
            $body['NewPassword'] = $request->newPassword;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ChangeUserPassword',
            'version' => '2021-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ChangeUserPasswordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 管理员修改用户密码
     *  *
     * @param ChangeUserPasswordRequest $request ChangeUserPasswordRequest
     *
     * @return ChangeUserPasswordResponse ChangeUserPasswordResponse
     */
    public function changeUserPassword($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->changeUserPasswordWithOptions($request, $runtime);
    }

    /**
     * @summary Queries whether a property is associated with one or more convenience users.
     *  *
     * @param CheckUsedPropertyRequest $request CheckUsedPropertyRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return CheckUsedPropertyResponse CheckUsedPropertyResponse
     */
    public function checkUsedPropertyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->propertyId)) {
            $query['PropertyId'] = $request->propertyId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'CheckUsedProperty',
            'version' => '2021-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CheckUsedPropertyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries whether a property is associated with one or more convenience users.
     *  *
     * @param CheckUsedPropertyRequest $request CheckUsedPropertyRequest
     *
     * @return CheckUsedPropertyResponse CheckUsedPropertyResponse
     */
    public function checkUsedProperty($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkUsedPropertyWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the number of convenience accounts that are associated with the specified custom property value.
     *  *
     * @description Before you call the operation, you can call the [ListProperty](https://help.aliyun.com/document_detail/410890.html) operation to query the existing user properties and their IDs (PropertyId) and values (PropertyValueId).
     *  *
     * @param CheckUsedPropertyValueRequest $request CheckUsedPropertyValueRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return CheckUsedPropertyValueResponse CheckUsedPropertyValueResponse
     */
    public function checkUsedPropertyValueWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->propertyId)) {
            $query['PropertyId'] = $request->propertyId;
        }
        if (!Utils::isUnset($request->propertyValueId)) {
            $query['PropertyValueId'] = $request->propertyValueId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'CheckUsedPropertyValue',
            'version' => '2021-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CheckUsedPropertyValueResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the number of convenience accounts that are associated with the specified custom property value.
     *  *
     * @description Before you call the operation, you can call the [ListProperty](https://help.aliyun.com/document_detail/410890.html) operation to query the existing user properties and their IDs (PropertyId) and values (PropertyValueId).
     *  *
     * @param CheckUsedPropertyValueRequest $request CheckUsedPropertyValueRequest
     *
     * @return CheckUsedPropertyValueResponse CheckUsedPropertyValueResponse
     */
    public function checkUsedPropertyValue($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkUsedPropertyValueWithOptions($request, $runtime);
    }

    /**
     * @summary 创建角色.
     *  *
     * @param CreateGroupRequest $request CreateGroupRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateGroupResponse CreateGroupResponse
     */
    public function createGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizType)) {
            $query['BizType'] = $request->bizType;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
        }
        if (!Utils::isUnset($request->parentGroupId)) {
            $query['ParentGroupId'] = $request->parentGroupId;
        }
        if (!Utils::isUnset($request->solutionId)) {
            $query['SolutionId'] = $request->solutionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateGroup',
            'version' => '2021-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建角色.
     *  *
     * @param CreateGroupRequest $request CreateGroupRequest
     *
     * @return CreateGroupResponse CreateGroupResponse
     */
    public function createGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createGroupWithOptions($request, $runtime);
    }

    /**
     * @summary 创建组织
     *  *
     * @param CreateOrgRequest $request CreateOrgRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateOrgResponse CreateOrgResponse
     */
    public function createOrgWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->orgName)) {
            $query['OrgName'] = $request->orgName;
        }
        if (!Utils::isUnset($request->parentOrgId)) {
            $query['ParentOrgId'] = $request->parentOrgId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateOrg',
            'version' => '2021-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateOrgResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建组织
     *  *
     * @param CreateOrgRequest $request CreateOrgRequest
     *
     * @return CreateOrgResponse CreateOrgResponse
     */
    public function createOrg($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createOrgWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a user property.
     *  *
     * @param CreatePropertyRequest $request CreatePropertyRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return CreatePropertyResponse CreatePropertyResponse
     */
    public function createPropertyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->propertyKey)) {
            $body['PropertyKey'] = $request->propertyKey;
        }
        if (!Utils::isUnset($request->propertyValues)) {
            $body['PropertyValues'] = $request->propertyValues;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateProperty',
            'version' => '2021-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreatePropertyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a user property.
     *  *
     * @param CreatePropertyRequest $request CreatePropertyRequest
     *
     * @return CreatePropertyResponse CreatePropertyResponse
     */
    public function createProperty($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPropertyWithOptions($request, $runtime);
    }

    /**
     * @summary 创建资源组
     *  *
     * @param CreateResourceGroupRequest $request CreateResourceGroupRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateResourceGroupResponse CreateResourceGroupResponse
     */
    public function createResourceGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->isResourceGroupWithOfficeSite)) {
            $query['IsResourceGroupWithOfficeSite'] = $request->isResourceGroupWithOfficeSite;
        }
        if (!Utils::isUnset($request->platform)) {
            $query['Platform'] = $request->platform;
        }
        if (!Utils::isUnset($request->resourceGroupName)) {
            $query['ResourceGroupName'] = $request->resourceGroupName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateResourceGroup',
            'version' => '2021-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建资源组
     *  *
     * @param CreateResourceGroupRequest $request CreateResourceGroupRequest
     *
     * @return CreateResourceGroupResponse CreateResourceGroupResponse
     */
    public function createResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createResourceGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a convenience user.
     *  *
     * @description Convenience users are dedicated Elastic Desktop Service (EDS) user accounts and are suitable for scenarios in which you do not need to connect to enterprise Active Directory (AD) systems. The information about a convenience user includes the username, email address, and mobile number. You must specify the username or email address.
     *  *
     * @param CreateUsersRequest $request CreateUsersRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateUsersResponse CreateUsersResponse
     */
    public function createUsersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->autoLockTime)) {
            $query['AutoLockTime'] = $request->autoLockTime;
        }
        if (!Utils::isUnset($request->isLocalAdmin)) {
            $query['IsLocalAdmin'] = $request->isLocalAdmin;
        }
        if (!Utils::isUnset($request->passwordExpireDays)) {
            $query['PasswordExpireDays'] = $request->passwordExpireDays;
        }
        $body = [];
        if (!Utils::isUnset($request->password)) {
            $body['Password'] = $request->password;
        }
        if (!Utils::isUnset($request->users)) {
            $body['Users'] = $request->users;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateUsers',
            'version' => '2021-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a convenience user.
     *  *
     * @description Convenience users are dedicated Elastic Desktop Service (EDS) user accounts and are suitable for scenarios in which you do not need to connect to enterprise Active Directory (AD) systems. The information about a convenience user includes the username, email address, and mobile number. You must specify the username or email address.
     *  *
     * @param CreateUsersRequest $request CreateUsersRequest
     *
     * @return CreateUsersResponse CreateUsersResponse
     */
    public function createUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createUsersWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a resource group.
     *  *
     * @param DeleteResourceGroupRequest $request DeleteResourceGroupRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteResourceGroupResponse DeleteResourceGroupResponse
     */
    public function deleteResourceGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceGroupIds)) {
            $query['ResourceGroupIds'] = $request->resourceGroupIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteResourceGroup',
            'version' => '2021-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a resource group.
     *  *
     * @param DeleteResourceGroupRequest $request DeleteResourceGroupRequest
     *
     * @return DeleteResourceGroupResponse DeleteResourceGroupResponse
     */
    public function deleteResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteResourceGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Dissociates a user property from a user.
     *  *
     * @description Before you call this operation, you can call the FilterUsers operation to query the users that are associated with user properties.
     *  *
     * @param DeleteUserPropertyValueRequest $request DeleteUserPropertyValueRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteUserPropertyValueResponse DeleteUserPropertyValueResponse
     */
    public function deleteUserPropertyValueWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->propertyId)) {
            $body['PropertyId'] = $request->propertyId;
        }
        if (!Utils::isUnset($request->propertyValueId)) {
            $body['PropertyValueId'] = $request->propertyValueId;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteUserPropertyValue',
            'version' => '2021-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteUserPropertyValueResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Dissociates a user property from a user.
     *  *
     * @description Before you call this operation, you can call the FilterUsers operation to query the users that are associated with user properties.
     *  *
     * @param DeleteUserPropertyValueRequest $request DeleteUserPropertyValueRequest
     *
     * @return DeleteUserPropertyValueResponse DeleteUserPropertyValueResponse
     */
    public function deleteUserPropertyValue($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteUserPropertyValueWithOptions($request, $runtime);
    }

    /**
     * @summary 全量同步初始化
     *  *
     * @param DescribeGroupUserRequest $request DescribeGroupUserRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeGroupUserResponse DescribeGroupUserResponse
     */
    public function describeGroupUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizType)) {
            $query['BizType'] = $request->bizType;
        }
        if (!Utils::isUnset($request->filter)) {
            $query['Filter'] = $request->filter;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->solutionId)) {
            $query['SolutionId'] = $request->solutionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeGroupUser',
            'version' => '2021-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeGroupUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 全量同步初始化
     *  *
     * @param DescribeGroupUserRequest $request DescribeGroupUserRequest
     *
     * @return DescribeGroupUserResponse DescribeGroupUserResponse
     */
    public function describeGroupUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGroupUserWithOptions($request, $runtime);
    }

    /**
     * @summary 全量同步初始化.
     *  *
     * @param DescribeGroupsRequest $request DescribeGroupsRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeGroupsResponse DescribeGroupsResponse
     */
    public function describeGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizType)) {
            $query['BizType'] = $request->bizType;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->solutionId)) {
            $query['SolutionId'] = $request->solutionId;
        }
        if (!Utils::isUnset($request->transferFileNeedApproval)) {
            $query['TransferFileNeedApproval'] = $request->transferFileNeedApproval;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeGroups',
            'version' => '2021-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 全量同步初始化.
     *  *
     * @param DescribeGroupsRequest $request DescribeGroupsRequest
     *
     * @return DescribeGroupsResponse DescribeGroupsResponse
     */
    public function describeGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGroupsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about virtual multi-factor authentication (MFA) devices that are bound to convenience users.
     *  *
     * @param DescribeMfaDevicesRequest $request DescribeMfaDevicesRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeMfaDevicesResponse DescribeMfaDevicesResponse
     */
    public function describeMfaDevicesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->adDomain)) {
            $query['AdDomain'] = $request->adDomain;
        }
        if (!Utils::isUnset($request->endUserIds)) {
            $query['EndUserIds'] = $request->endUserIds;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->serialNumbers)) {
            $query['SerialNumbers'] = $request->serialNumbers;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeMfaDevices',
            'version' => '2021-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeMfaDevicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about virtual multi-factor authentication (MFA) devices that are bound to convenience users.
     *  *
     * @param DescribeMfaDevicesRequest $request DescribeMfaDevicesRequest
     *
     * @return DescribeMfaDevicesResponse DescribeMfaDevicesResponse
     */
    public function describeMfaDevices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMfaDevicesWithOptions($request, $runtime);
    }

    /**
     * @summary 查找下级组织
     *  *
     * @param DescribeOrgByLayerRequest $request DescribeOrgByLayerRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeOrgByLayerResponse DescribeOrgByLayerResponse
     */
    public function describeOrgByLayerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->orgName)) {
            $body['OrgName'] = $request->orgName;
        }
        if (!Utils::isUnset($request->parentOrgId)) {
            $body['ParentOrgId'] = $request->parentOrgId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeOrgByLayer',
            'version' => '2021-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeOrgByLayerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查找下级组织
     *  *
     * @param DescribeOrgByLayerRequest $request DescribeOrgByLayerRequest
     *
     * @return DescribeOrgByLayerResponse DescribeOrgByLayerResponse
     */
    public function describeOrgByLayer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeOrgByLayerWithOptions($request, $runtime);
    }

    /**
     * @summary Queries organizations.
     *  *
     * @description An organization is in a tree structure. The root organization ID is in the following format: org-aliyun-wy-org-id.
     *  *
     * @param DescribeOrgsRequest $request DescribeOrgsRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeOrgsResponse DescribeOrgsResponse
     */
    public function describeOrgsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->orgName)) {
            $query['OrgName'] = $request->orgName;
        }
        if (!Utils::isUnset($request->parentOrgId)) {
            $query['ParentOrgId'] = $request->parentOrgId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeOrgs',
            'version' => '2021-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeOrgsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries organizations.
     *  *
     * @description An organization is in a tree structure. The root organization ID is in the following format: org-aliyun-wy-org-id.
     *  *
     * @param DescribeOrgsRequest $request DescribeOrgsRequest
     *
     * @return DescribeOrgsResponse DescribeOrgsResponse
     */
    public function describeOrgs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeOrgsWithOptions($request, $runtime);
    }

    /**
     * @summary 查看资源组
     *  *
     * @param DescribeResourceGroupsRequest $request DescribeResourceGroupsRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeResourceGroupsResponse DescribeResourceGroupsResponse
     */
    public function describeResourceGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->needContainResourceGroupWithOfficeSite)) {
            $query['NeedContainResourceGroupWithOfficeSite'] = $request->needContainResourceGroupWithOfficeSite;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->platform)) {
            $query['Platform'] = $request->platform;
        }
        if (!Utils::isUnset($request->resourceGroupIds)) {
            $query['ResourceGroupIds'] = $request->resourceGroupIds;
        }
        if (!Utils::isUnset($request->resourceGroupName)) {
            $query['ResourceGroupName'] = $request->resourceGroupName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeResourceGroups',
            'version' => '2021-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeResourceGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查看资源组
     *  *
     * @param DescribeResourceGroupsRequest $request DescribeResourceGroupsRequest
     *
     * @return DescribeResourceGroupsResponse DescribeResourceGroupsResponse
     */
    public function describeResourceGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeResourceGroupsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about convenience users. The information of a convenience user includes a username, an email address, and a description.
     *  *
     * @param DescribeUsersRequest $tmpReq  DescribeUsersRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeUsersResponse DescribeUsersResponse
     */
    public function describeUsersWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DescribeUsersShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->filterWithAssignedResource)) {
            $request->filterWithAssignedResourceShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->filterWithAssignedResource, 'FilterWithAssignedResource', 'json');
        }
        if (!Utils::isUnset($tmpReq->filterWithAssignedResources)) {
            $request->filterWithAssignedResourcesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->filterWithAssignedResources, 'FilterWithAssignedResources', 'json');
        }
        if (!Utils::isUnset($tmpReq->showExtras)) {
            $request->showExtrasShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->showExtras, 'ShowExtras', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->filter)) {
            $query['Filter'] = $request->filter;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        $body = [];
        if (!Utils::isUnset($request->bizType)) {
            $body['BizType'] = $request->bizType;
        }
        if (!Utils::isUnset($request->endUserIds)) {
            $body['EndUserIds'] = $request->endUserIds;
        }
        if (!Utils::isUnset($request->excludeEndUserIds)) {
            $body['ExcludeEndUserIds'] = $request->excludeEndUserIds;
        }
        if (!Utils::isUnset($request->excludeGroupId)) {
            $body['ExcludeGroupId'] = $request->excludeGroupId;
        }
        if (!Utils::isUnset($request->filterWithAssignedResourceShrink)) {
            $body['FilterWithAssignedResource'] = $request->filterWithAssignedResourceShrink;
        }
        if (!Utils::isUnset($request->filterWithAssignedResourcesShrink)) {
            $body['FilterWithAssignedResources'] = $request->filterWithAssignedResourcesShrink;
        }
        if (!Utils::isUnset($request->groupId)) {
            $body['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->isQueryAllSubOrgs)) {
            $body['IsQueryAllSubOrgs'] = $request->isQueryAllSubOrgs;
        }
        if (!Utils::isUnset($request->orgId)) {
            $body['OrgId'] = $request->orgId;
        }
        if (!Utils::isUnset($request->showExtrasShrink)) {
            $body['ShowExtras'] = $request->showExtrasShrink;
        }
        if (!Utils::isUnset($request->solutionId)) {
            $body['SolutionId'] = $request->solutionId;
        }
        if (!Utils::isUnset($request->status)) {
            $body['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeUsers',
            'version' => '2021-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about convenience users. The information of a convenience user includes a username, an email address, and a description.
     *  *
     * @param DescribeUsersRequest $request DescribeUsersRequest
     *
     * @return DescribeUsersResponse DescribeUsersResponse
     */
    public function describeUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUsersWithOptions($request, $runtime);
    }

    /**
     * @summary Filters convenience accounts by property.
     *  *
     * @param FilterUsersRequest $tmpReq  FilterUsersRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return FilterUsersResponse FilterUsersResponse
     */
    public function filterUsersWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new FilterUsersShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->orderParam)) {
            $request->orderParamShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->orderParam, 'OrderParam', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->excludeEndUserIds)) {
            $query['ExcludeEndUserIds'] = $request->excludeEndUserIds;
        }
        if (!Utils::isUnset($request->filter)) {
            $query['Filter'] = $request->filter;
        }
        if (!Utils::isUnset($request->includeDesktopCount)) {
            $query['IncludeDesktopCount'] = $request->includeDesktopCount;
        }
        if (!Utils::isUnset($request->includeDesktopGroupCount)) {
            $query['IncludeDesktopGroupCount'] = $request->includeDesktopGroupCount;
        }
        if (!Utils::isUnset($request->includeOrgInfo)) {
            $query['IncludeOrgInfo'] = $request->includeOrgInfo;
        }
        if (!Utils::isUnset($request->includeSupportIdps)) {
            $query['IncludeSupportIdps'] = $request->includeSupportIdps;
        }
        if (!Utils::isUnset($request->isQueryAllSubOrgs)) {
            $query['IsQueryAllSubOrgs'] = $request->isQueryAllSubOrgs;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->orderParamShrink)) {
            $query['OrderParam'] = $request->orderParamShrink;
        }
        if (!Utils::isUnset($request->orgId)) {
            $query['OrgId'] = $request->orgId;
        }
        if (!Utils::isUnset($request->ownerType)) {
            $query['OwnerType'] = $request->ownerType;
        }
        if (!Utils::isUnset($request->propertyFilterParam)) {
            $query['PropertyFilterParam'] = $request->propertyFilterParam;
        }
        if (!Utils::isUnset($request->propertyKeyValueFilterParam)) {
            $query['PropertyKeyValueFilterParam'] = $request->propertyKeyValueFilterParam;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'FilterUsers',
            'version' => '2021-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return FilterUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Filters convenience accounts by property.
     *  *
     * @param FilterUsersRequest $request FilterUsersRequest
     *
     * @return FilterUsersResponse FilterUsersResponse
     */
    public function filterUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->filterUsersWithOptions($request, $runtime);
    }

    /**
     * @summary Obtains the information about the current logon administrator based on the authorization code.
     *  *
     * @param GetManagerInfoByAuthCodeRequest $request GetManagerInfoByAuthCodeRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return GetManagerInfoByAuthCodeResponse GetManagerInfoByAuthCodeResponse
     */
    public function getManagerInfoByAuthCodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->authCode)) {
            $query['AuthCode'] = $request->authCode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'GetManagerInfoByAuthCode',
            'version' => '2021-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetManagerInfoByAuthCodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Obtains the information about the current logon administrator based on the authorization code.
     *  *
     * @param GetManagerInfoByAuthCodeRequest $request GetManagerInfoByAuthCodeRequest
     *
     * @return GetManagerInfoByAuthCodeResponse GetManagerInfoByAuthCodeResponse
     */
    public function getManagerInfoByAuthCode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getManagerInfoByAuthCodeWithOptions($request, $runtime);
    }

    /**
     * @summary 初始化TenantAlias
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return InitTenantAliasResponse InitTenantAliasResponse
     */
    public function initTenantAliasWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'InitTenantAlias',
            'version' => '2021-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return InitTenantAliasResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 初始化TenantAlias
     *  *
     * @return InitTenantAliasResponse InitTenantAliasResponse
     */
    public function initTenantAlias()
    {
        $runtime = new RuntimeOptions([]);

        return $this->initTenantAliasWithOptions($runtime);
    }

    /**
     * @summary Queries all user properties within an Alibaba Cloud account.
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return ListPropertyResponse ListPropertyResponse
     */
    public function listPropertyWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'ListProperty',
            'version' => '2021-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListPropertyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries all user properties within an Alibaba Cloud account.
     *  *
     * @return ListPropertyResponse ListPropertyResponse
     */
    public function listProperty()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPropertyWithOptions($runtime);
    }

    /**
     * @summary Queries property values of a user property.
     *  *
     * @param ListPropertyValueRequest $request ListPropertyValueRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ListPropertyValueResponse ListPropertyValueResponse
     */
    public function listPropertyValueWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->propertyId)) {
            $query['PropertyId'] = $request->propertyId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListPropertyValue',
            'version' => '2021-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListPropertyValueResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries property values of a user property.
     *  *
     * @param ListPropertyValueRequest $request ListPropertyValueRequest
     *
     * @return ListPropertyValueResponse ListPropertyValueResponse
     */
    public function listPropertyValue($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPropertyValueWithOptions($request, $runtime);
    }

    /**
     * @summary Locks a virtual multi-factor authentication (MFA) device that is bound to a convenience user.
     *  *
     * @description After a virtual MFA device is locked, the status of the virtual MFA device changes to LOCKED. The convenience user to which the MFA device is bound cannot log on to the cloud desktop that resides in the workspace with the MFA feature enabled because the identity of the convenience user cannot be verified based on the virtual MFA device. You can call the [UnlockMfaDevice](https://help.aliyun.com/document_detail/286534.html) operation to unlock the virtual MFA device.
     *  *
     * @param LockMfaDeviceRequest $request LockMfaDeviceRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return LockMfaDeviceResponse LockMfaDeviceResponse
     */
    public function lockMfaDeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->adDomain)) {
            $query['AdDomain'] = $request->adDomain;
        }
        if (!Utils::isUnset($request->serialNumber)) {
            $query['SerialNumber'] = $request->serialNumber;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'LockMfaDevice',
            'version' => '2021-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return LockMfaDeviceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Locks a virtual multi-factor authentication (MFA) device that is bound to a convenience user.
     *  *
     * @description After a virtual MFA device is locked, the status of the virtual MFA device changes to LOCKED. The convenience user to which the MFA device is bound cannot log on to the cloud desktop that resides in the workspace with the MFA feature enabled because the identity of the convenience user cannot be verified based on the virtual MFA device. You can call the [UnlockMfaDevice](https://help.aliyun.com/document_detail/286534.html) operation to unlock the virtual MFA device.
     *  *
     * @param LockMfaDeviceRequest $request LockMfaDeviceRequest
     *
     * @return LockMfaDeviceResponse LockMfaDeviceResponse
     */
    public function lockMfaDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->lockMfaDeviceWithOptions($request, $runtime);
    }

    /**
     * @summary Locks one or more convenience users.
     *  *
     * @param LockUsersRequest $request LockUsersRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return LockUsersResponse LockUsersResponse
     */
    public function lockUsersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->logoutSession)) {
            $query['LogoutSession'] = $request->logoutSession;
        }
        $body = [];
        if (!Utils::isUnset($request->users)) {
            $body['Users'] = $request->users;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'LockUsers',
            'version' => '2021-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return LockUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Locks one or more convenience users.
     *  *
     * @param LockUsersRequest $request LockUsersRequest
     *
     * @return LockUsersResponse LockUsersResponse
     */
    public function lockUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->lockUsersWithOptions($request, $runtime);
    }

    /**
     * @summary 修改角色.
     *  *
     * @param ModifyGroupRequest $request ModifyGroupRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyGroupResponse ModifyGroupResponse
     */
    public function modifyGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->newGroupName)) {
            $query['NewGroupName'] = $request->newGroupName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyGroup',
            'version' => '2021-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改角色.
     *  *
     * @param ModifyGroupRequest $request ModifyGroupRequest
     *
     * @return ModifyGroupResponse ModifyGroupResponse
     */
    public function modifyGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyGroupWithOptions($request, $runtime);
    }

    /**
     * @summary 修改组织
     *  *
     * @param ModifyOrgRequest $request ModifyOrgRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyOrgResponse ModifyOrgResponse
     */
    public function modifyOrgWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->orgId)) {
            $query['OrgId'] = $request->orgId;
        }
        if (!Utils::isUnset($request->orgName)) {
            $query['OrgName'] = $request->orgName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyOrg',
            'version' => '2021-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyOrgResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改组织
     *  *
     * @param ModifyOrgRequest $request ModifyOrgRequest
     *
     * @return ModifyOrgResponse ModifyOrgResponse
     */
    public function modifyOrg($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyOrgWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies user information.
     *  *
     * @param ModifyUserRequest $request ModifyUserRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyUserResponse ModifyUserResponse
     */
    public function modifyUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->email)) {
            $query['Email'] = $request->email;
        }
        if (!Utils::isUnset($request->endUserId)) {
            $query['EndUserId'] = $request->endUserId;
        }
        if (!Utils::isUnset($request->phone)) {
            $query['Phone'] = $request->phone;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyUser',
            'version' => '2021-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies user information.
     *  *
     * @param ModifyUserRequest $request ModifyUserRequest
     *
     * @return ModifyUserResponse ModifyUserResponse
     */
    public function modifyUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyUserWithOptions($request, $runtime);
    }

    /**
     * @summary 移动组织
     *  *
     * @param MoveOrgRequest $request MoveOrgRequest
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return MoveOrgResponse MoveOrgResponse
     */
    public function moveOrgWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->newParentOrgId)) {
            $body['NewParentOrgId'] = $request->newParentOrgId;
        }
        if (!Utils::isUnset($request->orgId)) {
            $body['OrgId'] = $request->orgId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'MoveOrg',
            'version' => '2021-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return MoveOrgResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 移动组织
     *  *
     * @param MoveOrgRequest $request MoveOrgRequest
     *
     * @return MoveOrgResponse MoveOrgResponse
     */
    public function moveOrg($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->moveOrgWithOptions($request, $runtime);
    }

    /**
     * @summary 移动用户组织
     *  *
     * @param MoveUserOrgRequest $request MoveUserOrgRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return MoveUserOrgResponse MoveUserOrgResponse
     */
    public function moveUserOrgWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->endUserIds)) {
            $body['EndUserIds'] = $request->endUserIds;
        }
        if (!Utils::isUnset($request->orgId)) {
            $body['OrgId'] = $request->orgId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'MoveUserOrg',
            'version' => '2021-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return MoveUserOrgResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 移动用户组织
     *  *
     * @param MoveUserOrgRequest $request MoveUserOrgRequest
     *
     * @return MoveUserOrgResponse MoveUserOrgResponse
     */
    public function moveUserOrg($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->moveUserOrgWithOptions($request, $runtime);
    }

    /**
     * @summary 查询edu同步信息
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return QuerySyncStatusByAliUidResponse QuerySyncStatusByAliUidResponse
     */
    public function querySyncStatusByAliUidWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'QuerySyncStatusByAliUid',
            'version' => '2021-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QuerySyncStatusByAliUidResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询edu同步信息
     *  *
     * @return QuerySyncStatusByAliUidResponse QuerySyncStatusByAliUidResponse
     */
    public function querySyncStatusByAliUid()
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySyncStatusByAliUidWithOptions($runtime);
    }

    /**
     * @summary 删除角色.
     *  *
     * @param RemoveGroupRequest $request RemoveGroupRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return RemoveGroupResponse RemoveGroupResponse
     */
    public function removeGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->groupIds)) {
            $query['GroupIds'] = $request->groupIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'RemoveGroup',
            'version' => '2021-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RemoveGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除角色.
     *  *
     * @param RemoveGroupRequest $request RemoveGroupRequest
     *
     * @return RemoveGroupResponse RemoveGroupResponse
     */
    public function removeGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Removes a virtual multi-factor authentication (MFA) device that is bound to a convenience user.
     *  *
     * @description If you remove a virtual MFA device that is bound to a convenience user, the convenience user can no longer use the virtual MFA device to log on to cloud desktops. Before the convenience user can log on to cloud desktops again, a new virtual MFA device must be bound to the convenience user.
     *  *
     * @param RemoveMfaDeviceRequest $request RemoveMfaDeviceRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return RemoveMfaDeviceResponse RemoveMfaDeviceResponse
     */
    public function removeMfaDeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->adDomain)) {
            $query['AdDomain'] = $request->adDomain;
        }
        if (!Utils::isUnset($request->serialNumber)) {
            $query['SerialNumber'] = $request->serialNumber;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'RemoveMfaDevice',
            'version' => '2021-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RemoveMfaDeviceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Removes a virtual multi-factor authentication (MFA) device that is bound to a convenience user.
     *  *
     * @description If you remove a virtual MFA device that is bound to a convenience user, the convenience user can no longer use the virtual MFA device to log on to cloud desktops. Before the convenience user can log on to cloud desktops again, a new virtual MFA device must be bound to the convenience user.
     *  *
     * @param RemoveMfaDeviceRequest $request RemoveMfaDeviceRequest
     *
     * @return RemoveMfaDeviceResponse RemoveMfaDeviceResponse
     */
    public function removeMfaDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeMfaDeviceWithOptions($request, $runtime);
    }

    /**
     * @summary 移除组织
     *  *
     * @param RemoveOrgRequest $request RemoveOrgRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return RemoveOrgResponse RemoveOrgResponse
     */
    public function removeOrgWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->orgId)) {
            $body['OrgId'] = $request->orgId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RemoveOrg',
            'version' => '2021-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RemoveOrgResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 移除组织
     *  *
     * @param RemoveOrgRequest $request RemoveOrgRequest
     *
     * @return RemoveOrgResponse RemoveOrgResponse
     */
    public function removeOrg($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeOrgWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a user property.
     *  *
     * @param RemovePropertyRequest $request RemovePropertyRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return RemovePropertyResponse RemovePropertyResponse
     */
    public function removePropertyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->propertyId)) {
            $body['PropertyId'] = $request->propertyId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RemoveProperty',
            'version' => '2021-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RemovePropertyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a user property.
     *  *
     * @param RemovePropertyRequest $request RemovePropertyRequest
     *
     * @return RemovePropertyResponse RemovePropertyResponse
     */
    public function removeProperty($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removePropertyWithOptions($request, $runtime);
    }

    /**
     * @summary Removes one or more convenience users.
     *  *
     * @param RemoveUsersRequest $request RemoveUsersRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return RemoveUsersResponse RemoveUsersResponse
     */
    public function removeUsersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->users)) {
            $body['Users'] = $request->users;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RemoveUsers',
            'version' => '2021-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RemoveUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Removes one or more convenience users.
     *  *
     * @param RemoveUsersRequest $request RemoveUsersRequest
     *
     * @return RemoveUsersResponse RemoveUsersResponse
     */
    public function removeUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeUsersWithOptions($request, $runtime);
    }

    /**
     * @summary Resets the password for a convenience user. If you call this operation, a token that is used to reset the password is generated, and the system sends a password reset email that includes the token to the email address of the convenience user.
     *  *
     * @param ResetUserPasswordRequest $request ResetUserPasswordRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ResetUserPasswordResponse ResetUserPasswordResponse
     */
    public function resetUserPasswordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->notifyType)) {
            $body['NotifyType'] = $request->notifyType;
        }
        if (!Utils::isUnset($request->users)) {
            $body['Users'] = $request->users;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ResetUserPassword',
            'version' => '2021-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ResetUserPasswordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Resets the password for a convenience user. If you call this operation, a token that is used to reset the password is generated, and the system sends a password reset email that includes the token to the email address of the convenience user.
     *  *
     * @param ResetUserPasswordRequest $request ResetUserPasswordRequest
     *
     * @return ResetUserPasswordResponse ResetUserPasswordResponse
     */
    public function resetUserPassword($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetUserPasswordWithOptions($request, $runtime);
    }

    /**
     * @summary Associates a user property with a convenience user.
     *  *
     * @param SetUserPropertyValueRequest $request SetUserPropertyValueRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return SetUserPropertyValueResponse SetUserPropertyValueResponse
     */
    public function setUserPropertyValueWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->propertyId)) {
            $body['PropertyId'] = $request->propertyId;
        }
        if (!Utils::isUnset($request->propertyValueId)) {
            $body['PropertyValueId'] = $request->propertyValueId;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['UserId'] = $request->userId;
        }
        if (!Utils::isUnset($request->userName)) {
            $body['UserName'] = $request->userName;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SetUserPropertyValue',
            'version' => '2021-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetUserPropertyValueResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Associates a user property with a convenience user.
     *  *
     * @param SetUserPropertyValueRequest $request SetUserPropertyValueRequest
     *
     * @return SetUserPropertyValueResponse SetUserPropertyValueResponse
     */
    public function setUserPropertyValue($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setUserPropertyValueWithOptions($request, $runtime);
    }

    /**
     * @summary 从钉钉手动同步老师学生信息
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return SyncAllEduInfoResponse SyncAllEduInfoResponse
     */
    public function syncAllEduInfoWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'SyncAllEduInfo',
            'version' => '2021-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SyncAllEduInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 从钉钉手动同步老师学生信息
     *  *
     * @return SyncAllEduInfoResponse SyncAllEduInfoResponse
     */
    public function syncAllEduInfo()
    {
        $runtime = new RuntimeOptions([]);

        return $this->syncAllEduInfoWithOptions($runtime);
    }

    /**
     * @summary Unlocks a virtual multi-factor authentication (MFA) device that is bound to a convenience user.
     *  *
     * @param UnlockMfaDeviceRequest $request UnlockMfaDeviceRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return UnlockMfaDeviceResponse UnlockMfaDeviceResponse
     */
    public function unlockMfaDeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->adDomain)) {
            $query['AdDomain'] = $request->adDomain;
        }
        if (!Utils::isUnset($request->serialNumber)) {
            $query['SerialNumber'] = $request->serialNumber;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'UnlockMfaDevice',
            'version' => '2021-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UnlockMfaDeviceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Unlocks a virtual multi-factor authentication (MFA) device that is bound to a convenience user.
     *  *
     * @param UnlockMfaDeviceRequest $request UnlockMfaDeviceRequest
     *
     * @return UnlockMfaDeviceResponse UnlockMfaDeviceResponse
     */
    public function unlockMfaDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unlockMfaDeviceWithOptions($request, $runtime);
    }

    /**
     * @summary Unlocks one or more convenience users.
     *  *
     * @param UnlockUsersRequest $request UnlockUsersRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return UnlockUsersResponse UnlockUsersResponse
     */
    public function unlockUsersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->autoLockTime)) {
            $query['AutoLockTime'] = $request->autoLockTime;
        }
        $body = [];
        if (!Utils::isUnset($request->users)) {
            $body['Users'] = $request->users;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UnlockUsers',
            'version' => '2021-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UnlockUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Unlocks one or more convenience users.
     *  *
     * @param UnlockUsersRequest $request UnlockUsersRequest
     *
     * @return UnlockUsersResponse UnlockUsersResponse
     */
    public function unlockUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unlockUsersWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies a user property.
     *  *
     * @param UpdatePropertyRequest $request UpdatePropertyRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdatePropertyResponse UpdatePropertyResponse
     */
    public function updatePropertyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->propertyId)) {
            $body['PropertyId'] = $request->propertyId;
        }
        if (!Utils::isUnset($request->propertyKey)) {
            $body['PropertyKey'] = $request->propertyKey;
        }
        if (!Utils::isUnset($request->propertyValues)) {
            $body['PropertyValues'] = $request->propertyValues;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateProperty',
            'version' => '2021-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdatePropertyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies a user property.
     *  *
     * @param UpdatePropertyRequest $request UpdatePropertyRequest
     *
     * @return UpdatePropertyResponse UpdatePropertyResponse
     */
    public function updateProperty($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updatePropertyWithOptions($request, $runtime);
    }

    /**
     * @summary 用户批量分配角色
     *  *
     * @param UserBatchJoinGroupRequest $request UserBatchJoinGroupRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return UserBatchJoinGroupResponse UserBatchJoinGroupResponse
     */
    public function userBatchJoinGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->endUserIds)) {
            $body['EndUserIds'] = $request->endUserIds;
        }
        if (!Utils::isUnset($request->groupId)) {
            $body['GroupId'] = $request->groupId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UserBatchJoinGroup',
            'version' => '2021-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UserBatchJoinGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 用户批量分配角色
     *  *
     * @param UserBatchJoinGroupRequest $request UserBatchJoinGroupRequest
     *
     * @return UserBatchJoinGroupResponse UserBatchJoinGroupResponse
     */
    public function userBatchJoinGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->userBatchJoinGroupWithOptions($request, $runtime);
    }

    /**
     * @summary 用户批量移出角色
     *  *
     * @param UserBatchQuitGroupRequest $request UserBatchQuitGroupRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return UserBatchQuitGroupResponse UserBatchQuitGroupResponse
     */
    public function userBatchQuitGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->endUserIds)) {
            $body['EndUserIds'] = $request->endUserIds;
        }
        if (!Utils::isUnset($request->groupId)) {
            $body['GroupId'] = $request->groupId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UserBatchQuitGroup',
            'version' => '2021-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UserBatchQuitGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 用户批量移出角色
     *  *
     * @param UserBatchQuitGroupRequest $request UserBatchQuitGroupRequest
     *
     * @return UserBatchQuitGroupResponse UserBatchQuitGroupResponse
     */
    public function userBatchQuitGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->userBatchQuitGroupWithOptions($request, $runtime);
    }
}
