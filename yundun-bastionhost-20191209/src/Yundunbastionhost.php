<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\AcceptApproveCommandRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\AcceptApproveCommandResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\AcceptOperationTicketRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\AcceptOperationTicketResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\AddDatabasesToGroupRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\AddDatabasesToGroupResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\AddHostsToGroupRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\AddHostsToGroupResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\AddUsersToGroupRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\AddUsersToGroupResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\AttachDatabaseAccountsToUserGroupRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\AttachDatabaseAccountsToUserGroupResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\AttachDatabaseAccountsToUserRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\AttachDatabaseAccountsToUserResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\AttachHostAccountsToHostShareKeyRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\AttachHostAccountsToHostShareKeyResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\AttachHostAccountsToUserGroupRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\AttachHostAccountsToUserGroupResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\AttachHostAccountsToUserRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\AttachHostAccountsToUserResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\AttachHostGroupAccountsToUserGroupRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\AttachHostGroupAccountsToUserGroupResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\AttachHostGroupAccountsToUserRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\AttachHostGroupAccountsToUserResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ConfigInstanceSecurityGroupsRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ConfigInstanceSecurityGroupsResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ConfigInstanceWhiteListRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ConfigInstanceWhiteListResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\CreateDatabaseAccountRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\CreateDatabaseAccountResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\CreateDatabaseRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\CreateDatabaseResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\CreateExportConfigJobRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\CreateExportConfigJobResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\CreateHostAccountRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\CreateHostAccountResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\CreateHostGroupRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\CreateHostGroupResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\CreateHostRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\CreateHostResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\CreateHostShareKeyRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\CreateHostShareKeyResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\CreateNetworkDomainRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\CreateNetworkDomainResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\CreateOperationTicketRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\CreateOperationTicketResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\CreatePolicyRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\CreatePolicyResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\CreateRuleRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\CreateRuleResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\CreateUserGroupRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\CreateUserGroupResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\CreateUserPublicKeyRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\CreateUserPublicKeyResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\CreateUserRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\CreateUserResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\DeleteDatabaseAccountRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\DeleteDatabaseAccountResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\DeleteDatabaseRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\DeleteDatabaseResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\DeleteHostAccountRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\DeleteHostAccountResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\DeleteHostGroupRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\DeleteHostGroupResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\DeleteHostRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\DeleteHostResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\DeleteHostShareKeyRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\DeleteHostShareKeyResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\DeleteNetworkDomainRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\DeleteNetworkDomainResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\DeletePolicyRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\DeletePolicyResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\DeleteRuleRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\DeleteRuleResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\DeleteUserGroupRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\DeleteUserGroupResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\DeleteUserPublicKeyRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\DeleteUserPublicKeyResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\DeleteUserRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\DeleteUserResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\DescribeInstanceAttributeRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\DescribeInstanceAttributeResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\DescribeInstancesRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\DescribeInstancesResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\DetachDatabaseAccountsFromUserGroupRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\DetachDatabaseAccountsFromUserGroupResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\DetachDatabaseAccountsFromUserRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\DetachDatabaseAccountsFromUserResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\DetachHostAccountsFromHostShareKeyRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\DetachHostAccountsFromHostShareKeyResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\DetachHostAccountsFromUserGroupRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\DetachHostAccountsFromUserGroupResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\DetachHostAccountsFromUserRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\DetachHostAccountsFromUserResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\DetachHostGroupAccountsFromUserGroupRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\DetachHostGroupAccountsFromUserGroupResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\DetachHostGroupAccountsFromUserRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\DetachHostGroupAccountsFromUserResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\DisableInstancePublicAccessRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\DisableInstancePublicAccessResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\DisableRuleRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\DisableRuleResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\EnableInstancePublicAccessRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\EnableInstancePublicAccessResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\EnableRuleRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\EnableRuleResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GenerateAssetOperationTokenRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GenerateAssetOperationTokenResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetDatabaseAccountRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetDatabaseAccountResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetDatabaseRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetDatabaseResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetExportConfigJobRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetExportConfigJobResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetHostAccountRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetHostAccountResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetHostGroupRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetHostGroupResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetHostRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetHostResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetHostShareKeyRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetHostShareKeyResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetInstanceADAuthServerRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetInstanceADAuthServerResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetInstanceLDAPAuthServerRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetInstanceLDAPAuthServerResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetInstanceStoreInfoRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetInstanceStoreInfoResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetInstanceTwoFactorRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetInstanceTwoFactorResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetNetworkDomainRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetNetworkDomainResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetPolicyAssetScopeRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetPolicyAssetScopeResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetPolicyRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetPolicyResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetPolicyUserScopeRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetPolicyUserScopeResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetRuleRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetRuleResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetUserGroupRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetUserGroupResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetUserRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetUserResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListApproveCommandsRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListApproveCommandsResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListDatabaseAccountsForUserGroupRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListDatabaseAccountsForUserGroupResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListDatabaseAccountsForUserRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListDatabaseAccountsForUserResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListDatabaseAccountsRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListDatabaseAccountsResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListDatabasesForUserGroupRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListDatabasesForUserGroupResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListDatabasesForUserRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListDatabasesForUserResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListDatabasesRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListDatabasesResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListHostAccountsForHostShareKeyRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListHostAccountsForHostShareKeyResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListHostAccountsForUserGroupRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListHostAccountsForUserGroupResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListHostAccountsForUserRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListHostAccountsForUserResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListHostAccountsRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListHostAccountsResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListHostGroupAccountNamesForUserGroupRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListHostGroupAccountNamesForUserGroupResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListHostGroupAccountNamesForUserRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListHostGroupAccountNamesForUserResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListHostGroupsForUserGroupRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListHostGroupsForUserGroupResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListHostGroupsForUserRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListHostGroupsForUserResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListHostGroupsRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListHostGroupsResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListHostsForUserGroupRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListHostsForUserGroupResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListHostsForUserRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListHostsForUserResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListHostShareKeysRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListHostShareKeysResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListHostsRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListHostsResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListNetworkDomainsRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListNetworkDomainsResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListOperationDatabaseAccountsRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListOperationDatabaseAccountsResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListOperationDatabasesRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListOperationDatabasesResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListOperationHostAccountsRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListOperationHostAccountsResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListOperationHostsRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListOperationHostsResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListOperationTicketsRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListOperationTicketsResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListPoliciesRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListPoliciesResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListRulesRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListRulesResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListTagKeysRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListTagKeysResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListUserGroupsRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListUserGroupsResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListUserPublicKeysRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListUserPublicKeysResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListUsersRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListUsersResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\LockUsersRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\LockUsersResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ModifyDatabaseAccountRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ModifyDatabaseAccountResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ModifyDatabaseRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ModifyDatabaseResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ModifyHostAccountRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ModifyHostAccountResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ModifyHostGroupRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ModifyHostGroupResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ModifyHostRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ModifyHostResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ModifyHostsActiveAddressTypeRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ModifyHostsActiveAddressTypeResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ModifyHostShareKeyRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ModifyHostShareKeyResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ModifyHostsPortRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ModifyHostsPortResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ModifyInstanceADAuthServerRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ModifyInstanceADAuthServerResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ModifyInstanceAttributeRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ModifyInstanceAttributeResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ModifyInstanceLDAPAuthServerRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ModifyInstanceLDAPAuthServerResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ModifyInstanceTwoFactorRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ModifyInstanceTwoFactorResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ModifyNetworkDomainRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ModifyNetworkDomainResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ModifyPolicyRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ModifyPolicyResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ModifyRuleRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ModifyRuleResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ModifyUserGroupRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ModifyUserGroupResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ModifyUserPublicKeyRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ModifyUserPublicKeyResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ModifyUserRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ModifyUserResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\MoveDatabasesToNetworkDomainRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\MoveDatabasesToNetworkDomainResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\MoveHostsToNetworkDomainRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\MoveHostsToNetworkDomainResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\MoveResourceGroupRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\MoveResourceGroupResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\RejectApproveCommandRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\RejectApproveCommandResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\RejectOperationTicketRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\RejectOperationTicketResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\RemoveDatabasesFromGroupRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\RemoveDatabasesFromGroupResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\RemoveHostsFromGroupRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\RemoveHostsFromGroupResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\RemoveUsersFromGroupRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\RemoveUsersFromGroupResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\RenewAssetOperationTokenRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\RenewAssetOperationTokenResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ResetHostAccountCredentialRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ResetHostAccountCredentialResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\SetPolicyAccessTimeRangeConfigRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\SetPolicyAccessTimeRangeConfigResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\SetPolicyAccessTimeRangeConfigShrinkRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\SetPolicyApprovalConfigRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\SetPolicyApprovalConfigResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\SetPolicyApprovalConfigShrinkRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\SetPolicyAssetScopeRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\SetPolicyAssetScopeResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\SetPolicyCommandConfigRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\SetPolicyCommandConfigResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\SetPolicyCommandConfigShrinkRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\SetPolicyIPAclConfigRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\SetPolicyIPAclConfigResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\SetPolicyIPAclConfigShrinkRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\SetPolicyProtocolConfigRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\SetPolicyProtocolConfigResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\SetPolicyProtocolConfigShrinkRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\SetPolicyUserScopeRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\SetPolicyUserScopeResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\StartInstanceRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\StartInstanceResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\TagResourcesRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\TagResourcesResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\UnlockUsersRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\UnlockUsersResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\UntagResourcesResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\VerifyInstanceADAuthServerRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\VerifyInstanceADAuthServerResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\VerifyInstanceLDAPAuthServerRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\VerifyInstanceLDAPAuthServerResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Yundunbastionhost extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('yundun-bastionhost', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @summary If an O\\&M engineer attempts to run a command specified in the Command Approval field on the Create Control Policy page, the administrator is notified to review the command in the Bastionhost console. The command can be run only after it is approved by the administrator.
     *  *
     * @description You can call this operation as a Bastionhost administrator to approve the request to run a command of an O\\&M engineer.
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param AcceptApproveCommandRequest $request AcceptApproveCommandRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return AcceptApproveCommandResponse AcceptApproveCommandResponse
     */
    public function acceptApproveCommandWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->commandId)) {
            $query['CommandId'] = $request->commandId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AcceptApproveCommand',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AcceptApproveCommandResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary If an O\\&M engineer attempts to run a command specified in the Command Approval field on the Create Control Policy page, the administrator is notified to review the command in the Bastionhost console. The command can be run only after it is approved by the administrator.
     *  *
     * @description You can call this operation as a Bastionhost administrator to approve the request to run a command of an O\\&M engineer.
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param AcceptApproveCommandRequest $request AcceptApproveCommandRequest
     *
     * @return AcceptApproveCommandResponse AcceptApproveCommandResponse
     */
    public function acceptApproveCommand($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->acceptApproveCommandWithOptions($request, $runtime);
    }

    /**
     * @summary Approves an O\\\\\\&M application.
     *  *
     * @description You can call this operation as a Bastionhost administrator to approve an O\\&M application of an O\\&M engineer.
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param AcceptOperationTicketRequest $request AcceptOperationTicketRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return AcceptOperationTicketResponse AcceptOperationTicketResponse
     */
    public function acceptOperationTicketWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->comment)) {
            $query['Comment'] = $request->comment;
        }
        if (!Utils::isUnset($request->effectCount)) {
            $query['EffectCount'] = $request->effectCount;
        }
        if (!Utils::isUnset($request->effectEndTime)) {
            $query['EffectEndTime'] = $request->effectEndTime;
        }
        if (!Utils::isUnset($request->effectStartTime)) {
            $query['EffectStartTime'] = $request->effectStartTime;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->operationTicketId)) {
            $query['OperationTicketId'] = $request->operationTicketId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AcceptOperationTicket',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AcceptOperationTicketResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Approves an O\\\\\\&M application.
     *  *
     * @description You can call this operation as a Bastionhost administrator to approve an O\\&M application of an O\\&M engineer.
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param AcceptOperationTicketRequest $request AcceptOperationTicketRequest
     *
     * @return AcceptOperationTicketResponse AcceptOperationTicketResponse
     */
    public function acceptOperationTicket($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->acceptOperationTicketWithOptions($request, $runtime);
    }

    /**
     * @summary Adds multiple databases to a specified asset group.
     *  *
     * @param AddDatabasesToGroupRequest $request AddDatabasesToGroupRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return AddDatabasesToGroupResponse AddDatabasesToGroupResponse
     */
    public function addDatabasesToGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->databaseIds)) {
            $query['DatabaseIds'] = $request->databaseIds;
        }
        if (!Utils::isUnset($request->hostGroupId)) {
            $query['HostGroupId'] = $request->hostGroupId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddDatabasesToGroup',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddDatabasesToGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Adds multiple databases to a specified asset group.
     *  *
     * @param AddDatabasesToGroupRequest $request AddDatabasesToGroupRequest
     *
     * @return AddDatabasesToGroupResponse AddDatabasesToGroupResponse
     */
    public function addDatabasesToGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addDatabasesToGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Adds one or more hosts to the specified host group.
     *  *
     * @description You can call this operation to add one or more hosts to a host group. You can add multiple hosts to a host group to manage and grant permissions on the hosts in a centralized manner.
     * # Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds a limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limits when you call this operation.
     *  *
     * @param AddHostsToGroupRequest $request AddHostsToGroupRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return AddHostsToGroupResponse AddHostsToGroupResponse
     */
    public function addHostsToGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->hostGroupId)) {
            $query['HostGroupId'] = $request->hostGroupId;
        }
        if (!Utils::isUnset($request->hostIds)) {
            $query['HostIds'] = $request->hostIds;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddHostsToGroup',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddHostsToGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Adds one or more hosts to the specified host group.
     *  *
     * @description You can call this operation to add one or more hosts to a host group. You can add multiple hosts to a host group to manage and grant permissions on the hosts in a centralized manner.
     * # Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds a limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limits when you call this operation.
     *  *
     * @param AddHostsToGroupRequest $request AddHostsToGroupRequest
     *
     * @return AddHostsToGroupResponse AddHostsToGroupResponse
     */
    public function addHostsToGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addHostsToGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Add one or more users to a user group.
     *  *
     * @description #
     * You can call this operation to add one or more users to a user group. After you call the [CreateUserGroup](https://help.aliyun.com/document_detail/204596.html) operation to create a user group, you can call the AddUsersToGroup operation to add multiple users to the user group. Then, you can manage and grant permissions to the users at a time.
     * # Limit
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param AddUsersToGroupRequest $request AddUsersToGroupRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return AddUsersToGroupResponse AddUsersToGroupResponse
     */
    public function addUsersToGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->userGroupId)) {
            $query['UserGroupId'] = $request->userGroupId;
        }
        if (!Utils::isUnset($request->userIds)) {
            $query['UserIds'] = $request->userIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddUsersToGroup',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddUsersToGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Add one or more users to a user group.
     *  *
     * @description #
     * You can call this operation to add one or more users to a user group. After you call the [CreateUserGroup](https://help.aliyun.com/document_detail/204596.html) operation to create a user group, you can call the AddUsersToGroup operation to add multiple users to the user group. Then, you can manage and grant permissions to the users at a time.
     * # Limit
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param AddUsersToGroupRequest $request AddUsersToGroupRequest
     *
     * @return AddUsersToGroupResponse AddUsersToGroupResponse
     */
    public function addUsersToGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addUsersToGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Authorizes a user to manage databases and database accounts.
     *  *
     * @param AttachDatabaseAccountsToUserRequest $request AttachDatabaseAccountsToUserRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return AttachDatabaseAccountsToUserResponse AttachDatabaseAccountsToUserResponse
     */
    public function attachDatabaseAccountsToUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->databases)) {
            $query['Databases'] = $request->databases;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AttachDatabaseAccountsToUser',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AttachDatabaseAccountsToUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Authorizes a user to manage databases and database accounts.
     *  *
     * @param AttachDatabaseAccountsToUserRequest $request AttachDatabaseAccountsToUserRequest
     *
     * @return AttachDatabaseAccountsToUserResponse AttachDatabaseAccountsToUserResponse
     */
    public function attachDatabaseAccountsToUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachDatabaseAccountsToUserWithOptions($request, $runtime);
    }

    /**
     * @summary Authorizes a user group to manage databases and database accounts.
     *  *
     * @param AttachDatabaseAccountsToUserGroupRequest $request AttachDatabaseAccountsToUserGroupRequest
     * @param RuntimeOptions                           $runtime runtime options for this request RuntimeOptions
     *
     * @return AttachDatabaseAccountsToUserGroupResponse AttachDatabaseAccountsToUserGroupResponse
     */
    public function attachDatabaseAccountsToUserGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->databases)) {
            $query['Databases'] = $request->databases;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->userGroupId)) {
            $query['UserGroupId'] = $request->userGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AttachDatabaseAccountsToUserGroup',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AttachDatabaseAccountsToUserGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Authorizes a user group to manage databases and database accounts.
     *  *
     * @param AttachDatabaseAccountsToUserGroupRequest $request AttachDatabaseAccountsToUserGroupRequest
     *
     * @return AttachDatabaseAccountsToUserGroupResponse AttachDatabaseAccountsToUserGroupResponse
     */
    public function attachDatabaseAccountsToUserGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachDatabaseAccountsToUserGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Associates host accounts with a shared key.
     *  *
     * @param AttachHostAccountsToHostShareKeyRequest $request AttachHostAccountsToHostShareKeyRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return AttachHostAccountsToHostShareKeyResponse AttachHostAccountsToHostShareKeyResponse
     */
    public function attachHostAccountsToHostShareKeyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->hostAccountIds)) {
            $query['HostAccountIds'] = $request->hostAccountIds;
        }
        if (!Utils::isUnset($request->hostShareKeyId)) {
            $query['HostShareKeyId'] = $request->hostShareKeyId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AttachHostAccountsToHostShareKey',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AttachHostAccountsToHostShareKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Associates host accounts with a shared key.
     *  *
     * @param AttachHostAccountsToHostShareKeyRequest $request AttachHostAccountsToHostShareKeyRequest
     *
     * @return AttachHostAccountsToHostShareKeyResponse AttachHostAccountsToHostShareKeyResponse
     */
    public function attachHostAccountsToHostShareKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachHostAccountsToHostShareKeyWithOptions($request, $runtime);
    }

    /**
     * @summary Authorizes a user to manage the hosts and host accounts.
     *  *
     * @param AttachHostAccountsToUserRequest $request AttachHostAccountsToUserRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return AttachHostAccountsToUserResponse AttachHostAccountsToUserResponse
     */
    public function attachHostAccountsToUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->hosts)) {
            $query['Hosts'] = $request->hosts;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AttachHostAccountsToUser',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AttachHostAccountsToUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Authorizes a user to manage the hosts and host accounts.
     *  *
     * @param AttachHostAccountsToUserRequest $request AttachHostAccountsToUserRequest
     *
     * @return AttachHostAccountsToUserResponse AttachHostAccountsToUserResponse
     */
    public function attachHostAccountsToUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachHostAccountsToUserWithOptions($request, $runtime);
    }

    /**
     * @summary Authorizes a user group to manage one or more hosts and host accounts.
     *  *
     * @description After you authorize a user group to manage specific hosts and host accounts, all the users in the user group have access to the authorized hosts and host accounts.
     *  *
     * @param AttachHostAccountsToUserGroupRequest $request AttachHostAccountsToUserGroupRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return AttachHostAccountsToUserGroupResponse AttachHostAccountsToUserGroupResponse
     */
    public function attachHostAccountsToUserGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->hosts)) {
            $query['Hosts'] = $request->hosts;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->userGroupId)) {
            $query['UserGroupId'] = $request->userGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AttachHostAccountsToUserGroup',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AttachHostAccountsToUserGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Authorizes a user group to manage one or more hosts and host accounts.
     *  *
     * @description After you authorize a user group to manage specific hosts and host accounts, all the users in the user group have access to the authorized hosts and host accounts.
     *  *
     * @param AttachHostAccountsToUserGroupRequest $request AttachHostAccountsToUserGroupRequest
     *
     * @return AttachHostAccountsToUserGroupResponse AttachHostAccountsToUserGroupResponse
     */
    public function attachHostAccountsToUserGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachHostAccountsToUserGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Authorizes a user to manage one or more host groups and host accounts.
     *  *
     * @param AttachHostGroupAccountsToUserRequest $request AttachHostGroupAccountsToUserRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return AttachHostGroupAccountsToUserResponse AttachHostGroupAccountsToUserResponse
     */
    public function attachHostGroupAccountsToUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->hostGroups)) {
            $query['HostGroups'] = $request->hostGroups;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AttachHostGroupAccountsToUser',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AttachHostGroupAccountsToUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Authorizes a user to manage one or more host groups and host accounts.
     *  *
     * @param AttachHostGroupAccountsToUserRequest $request AttachHostGroupAccountsToUserRequest
     *
     * @return AttachHostGroupAccountsToUserResponse AttachHostGroupAccountsToUserResponse
     */
    public function attachHostGroupAccountsToUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachHostGroupAccountsToUserWithOptions($request, $runtime);
    }

    /**
     * @summary Authorizes a user to manage one or more host groups and host accounts.
     *  *
     * @param AttachHostGroupAccountsToUserGroupRequest $request AttachHostGroupAccountsToUserGroupRequest
     * @param RuntimeOptions                            $runtime runtime options for this request RuntimeOptions
     *
     * @return AttachHostGroupAccountsToUserGroupResponse AttachHostGroupAccountsToUserGroupResponse
     */
    public function attachHostGroupAccountsToUserGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->hostGroups)) {
            $query['HostGroups'] = $request->hostGroups;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->userGroupId)) {
            $query['UserGroupId'] = $request->userGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AttachHostGroupAccountsToUserGroup',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AttachHostGroupAccountsToUserGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Authorizes a user to manage one or more host groups and host accounts.
     *  *
     * @param AttachHostGroupAccountsToUserGroupRequest $request AttachHostGroupAccountsToUserGroupRequest
     *
     * @return AttachHostGroupAccountsToUserGroupResponse AttachHostGroupAccountsToUserGroupResponse
     */
    public function attachHostGroupAccountsToUserGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachHostGroupAccountsToUserGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Configures security groups for a bastion host.
     *  *
     * @param ConfigInstanceSecurityGroupsRequest $request ConfigInstanceSecurityGroupsRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return ConfigInstanceSecurityGroupsResponse ConfigInstanceSecurityGroupsResponse
     */
    public function configInstanceSecurityGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->authorizedSecurityGroups)) {
            $query['AuthorizedSecurityGroups'] = $request->authorizedSecurityGroups;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ConfigInstanceSecurityGroups',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ConfigInstanceSecurityGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Configures security groups for a bastion host.
     *  *
     * @param ConfigInstanceSecurityGroupsRequest $request ConfigInstanceSecurityGroupsRequest
     *
     * @return ConfigInstanceSecurityGroupsResponse ConfigInstanceSecurityGroupsResponse
     */
    public function configInstanceSecurityGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->configInstanceSecurityGroupsWithOptions($request, $runtime);
    }

    /**
     * @summary Configures a whitelist of public IP addresses for a bastion host.
     *  *
     * @description ## Usage notes
     * You can call this operation to configure a whitelist of public IP addresses for a bastion host. By default, a bastion host is accessible from all public IP addresses. If you want to allow the requests from specific public IP addresses, you can call this operation to add trusted IP addresses to the whitelist of the bastion host.
     * ## Limits
     * You can call this operation up to 30 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param ConfigInstanceWhiteListRequest $request ConfigInstanceWhiteListRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ConfigInstanceWhiteListResponse ConfigInstanceWhiteListResponse
     */
    public function configInstanceWhiteListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->whiteList)) {
            $query['WhiteList'] = $request->whiteList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ConfigInstanceWhiteList',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ConfigInstanceWhiteListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Configures a whitelist of public IP addresses for a bastion host.
     *  *
     * @description ## Usage notes
     * You can call this operation to configure a whitelist of public IP addresses for a bastion host. By default, a bastion host is accessible from all public IP addresses. If you want to allow the requests from specific public IP addresses, you can call this operation to add trusted IP addresses to the whitelist of the bastion host.
     * ## Limits
     * You can call this operation up to 30 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param ConfigInstanceWhiteListRequest $request ConfigInstanceWhiteListRequest
     *
     * @return ConfigInstanceWhiteListResponse ConfigInstanceWhiteListResponse
     */
    public function configInstanceWhiteList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->configInstanceWhiteListWithOptions($request, $runtime);
    }

    /**
     * @summary Imports an ApsaraDB RDS for MySQL instance, ApsaraDB RDS for SQL Server instance, ApsaraDB RDS for PostgreSQL instance, PolarDB for MySQL cluster, PolarDB for PostgreSQL cluster, PolarDB for PostgreSQL (Compatible with Oracle) cluster, self-managed MySQL database, self-managed SQL Server database, self-managed PostgreSQL database, or self-managed Oracle database to a bastion host.
     *  *
     * @param CreateDatabaseRequest $request CreateDatabaseRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateDatabaseResponse CreateDatabaseResponse
     */
    public function createDatabaseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->activeAddressType)) {
            $query['ActiveAddressType'] = $request->activeAddressType;
        }
        if (!Utils::isUnset($request->comment)) {
            $query['Comment'] = $request->comment;
        }
        if (!Utils::isUnset($request->databaseName)) {
            $query['DatabaseName'] = $request->databaseName;
        }
        if (!Utils::isUnset($request->databasePort)) {
            $query['DatabasePort'] = $request->databasePort;
        }
        if (!Utils::isUnset($request->databasePrivateAddress)) {
            $query['DatabasePrivateAddress'] = $request->databasePrivateAddress;
        }
        if (!Utils::isUnset($request->databasePublicAddress)) {
            $query['DatabasePublicAddress'] = $request->databasePublicAddress;
        }
        if (!Utils::isUnset($request->databaseType)) {
            $query['DatabaseType'] = $request->databaseType;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->networkDomainId)) {
            $query['NetworkDomainId'] = $request->networkDomainId;
        }
        if (!Utils::isUnset($request->polarDBEndpointType)) {
            $query['PolarDBEndpointType'] = $request->polarDBEndpointType;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        if (!Utils::isUnset($request->sourceInstanceId)) {
            $query['SourceInstanceId'] = $request->sourceInstanceId;
        }
        if (!Utils::isUnset($request->sourceInstanceRegionId)) {
            $query['SourceInstanceRegionId'] = $request->sourceInstanceRegionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateDatabase',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDatabaseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Imports an ApsaraDB RDS for MySQL instance, ApsaraDB RDS for SQL Server instance, ApsaraDB RDS for PostgreSQL instance, PolarDB for MySQL cluster, PolarDB for PostgreSQL cluster, PolarDB for PostgreSQL (Compatible with Oracle) cluster, self-managed MySQL database, self-managed SQL Server database, self-managed PostgreSQL database, or self-managed Oracle database to a bastion host.
     *  *
     * @param CreateDatabaseRequest $request CreateDatabaseRequest
     *
     * @return CreateDatabaseResponse CreateDatabaseResponse
     */
    public function createDatabase($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDatabaseWithOptions($request, $runtime);
    }

    /**
     * @summary After a database is created, you can create a database account for the database. After the account is created, O\\&M engineers can use the account to log on to and perform O\\&M operations on the database.
     *  *
     * @param CreateDatabaseAccountRequest $request CreateDatabaseAccountRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateDatabaseAccountResponse CreateDatabaseAccountResponse
     */
    public function createDatabaseAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->databaseAccountName)) {
            $query['DatabaseAccountName'] = $request->databaseAccountName;
        }
        if (!Utils::isUnset($request->databaseId)) {
            $query['DatabaseId'] = $request->databaseId;
        }
        if (!Utils::isUnset($request->databaseSchema)) {
            $query['DatabaseSchema'] = $request->databaseSchema;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->loginAttribute)) {
            $query['LoginAttribute'] = $request->loginAttribute;
        }
        if (!Utils::isUnset($request->password)) {
            $query['Password'] = $request->password;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateDatabaseAccount',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDatabaseAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary After a database is created, you can create a database account for the database. After the account is created, O\\&M engineers can use the account to log on to and perform O\\&M operations on the database.
     *  *
     * @param CreateDatabaseAccountRequest $request CreateDatabaseAccountRequest
     *
     * @return CreateDatabaseAccountResponse CreateDatabaseAccountResponse
     */
    public function createDatabaseAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDatabaseAccountWithOptions($request, $runtime);
    }

    /**
     * @param CreateExportConfigJobRequest $request CreateExportConfigJobRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateExportConfigJobResponse CreateExportConfigJobResponse
     */
    public function createExportConfigJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateExportConfigJob',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateExportConfigJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateExportConfigJobRequest $request CreateExportConfigJobRequest
     *
     * @return CreateExportConfigJobResponse CreateExportConfigJobResponse
     */
    public function createExportConfigJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createExportConfigJobWithOptions($request, $runtime);
    }

    /**
     * @summary Bastionhost allows you to perform O\\&M operations on hosts from different sources, such as Alibaba Cloud Elastic Compute Service (ECS) instances, servers in on-premises data centers, and servers on other cloud platforms. Before you perform O\\&M operations on hosts by using a bastion host, you must import the hosts to the bastion host. You can call this operation to import a host to a bastion host.
     *  *
     * @param CreateHostRequest $request CreateHostRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateHostResponse CreateHostResponse
     */
    public function createHostWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->activeAddressType)) {
            $query['ActiveAddressType'] = $request->activeAddressType;
        }
        if (!Utils::isUnset($request->comment)) {
            $query['Comment'] = $request->comment;
        }
        if (!Utils::isUnset($request->hostName)) {
            $query['HostName'] = $request->hostName;
        }
        if (!Utils::isUnset($request->hostPrivateAddress)) {
            $query['HostPrivateAddress'] = $request->hostPrivateAddress;
        }
        if (!Utils::isUnset($request->hostPublicAddress)) {
            $query['HostPublicAddress'] = $request->hostPublicAddress;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->instanceRegionId)) {
            $query['InstanceRegionId'] = $request->instanceRegionId;
        }
        if (!Utils::isUnset($request->networkDomainId)) {
            $query['NetworkDomainId'] = $request->networkDomainId;
        }
        if (!Utils::isUnset($request->OSType)) {
            $query['OSType'] = $request->OSType;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        if (!Utils::isUnset($request->sourceInstanceId)) {
            $query['SourceInstanceId'] = $request->sourceInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateHost',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateHostResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Bastionhost allows you to perform O\\&M operations on hosts from different sources, such as Alibaba Cloud Elastic Compute Service (ECS) instances, servers in on-premises data centers, and servers on other cloud platforms. Before you perform O\\&M operations on hosts by using a bastion host, you must import the hosts to the bastion host. You can call this operation to import a host to a bastion host.
     *  *
     * @param CreateHostRequest $request CreateHostRequest
     *
     * @return CreateHostResponse CreateHostResponse
     */
    public function createHost($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createHostWithOptions($request, $runtime);
    }

    /**
     * @summary After you import a host to a bastion host, you must add an account of the host to the bastion host. This way, O\\&M engineers can use the account to log on to and perform O\\&M operations on the host by using the bastion host.
     *  *
     * @param CreateHostAccountRequest $request CreateHostAccountRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateHostAccountResponse CreateHostAccountResponse
     */
    public function createHostAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->hostAccountName)) {
            $query['HostAccountName'] = $request->hostAccountName;
        }
        if (!Utils::isUnset($request->hostId)) {
            $query['HostId'] = $request->hostId;
        }
        if (!Utils::isUnset($request->hostShareKeyId)) {
            $query['HostShareKeyId'] = $request->hostShareKeyId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->passPhrase)) {
            $query['PassPhrase'] = $request->passPhrase;
        }
        if (!Utils::isUnset($request->password)) {
            $query['Password'] = $request->password;
        }
        if (!Utils::isUnset($request->privateKey)) {
            $query['PrivateKey'] = $request->privateKey;
        }
        if (!Utils::isUnset($request->protocolName)) {
            $query['ProtocolName'] = $request->protocolName;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateHostAccount',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateHostAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary After you import a host to a bastion host, you must add an account of the host to the bastion host. This way, O\\&M engineers can use the account to log on to and perform O\\&M operations on the host by using the bastion host.
     *  *
     * @param CreateHostAccountRequest $request CreateHostAccountRequest
     *
     * @return CreateHostAccountResponse CreateHostAccountResponse
     */
    public function createHostAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createHostAccountWithOptions($request, $runtime);
    }

    /**
     * @summary You can create asset groups based on your business requirements and add assets of the same type to an asset group. This allows you to classify assets and manage multiple assets at a time.
     *  *
     * @param CreateHostGroupRequest $request CreateHostGroupRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateHostGroupResponse CreateHostGroupResponse
     */
    public function createHostGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->comment)) {
            $query['Comment'] = $request->comment;
        }
        if (!Utils::isUnset($request->hostGroupName)) {
            $query['HostGroupName'] = $request->hostGroupName;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateHostGroup',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateHostGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary You can create asset groups based on your business requirements and add assets of the same type to an asset group. This allows you to classify assets and manage multiple assets at a time.
     *  *
     * @param CreateHostGroupRequest $request CreateHostGroupRequest
     *
     * @return CreateHostGroupResponse CreateHostGroupResponse
     */
    public function createHostGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createHostGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Bastionhost provides the shared key feature. This feature allows you to manage the private key that is used to log on to a host in a bastion host. This way, you can associate the private key with multiple accounts of the host to make host account management more efficient.
     *  *
     * @param CreateHostShareKeyRequest $request CreateHostShareKeyRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateHostShareKeyResponse CreateHostShareKeyResponse
     */
    public function createHostShareKeyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->hostShareKeyName)) {
            $query['HostShareKeyName'] = $request->hostShareKeyName;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->passPhrase)) {
            $query['PassPhrase'] = $request->passPhrase;
        }
        if (!Utils::isUnset($request->privateKey)) {
            $query['PrivateKey'] = $request->privateKey;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateHostShareKey',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateHostShareKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Bastionhost provides the shared key feature. This feature allows you to manage the private key that is used to log on to a host in a bastion host. This way, you can associate the private key with multiple accounts of the host to make host account management more efficient.
     *  *
     * @param CreateHostShareKeyRequest $request CreateHostShareKeyRequest
     *
     * @return CreateHostShareKeyResponse CreateHostShareKeyResponse
     */
    public function createHostShareKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createHostShareKeyWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a network domain.
     *  *
     * @param CreateNetworkDomainRequest $request CreateNetworkDomainRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateNetworkDomainResponse CreateNetworkDomainResponse
     */
    public function createNetworkDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->comment)) {
            $query['Comment'] = $request->comment;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->networkDomainName)) {
            $query['NetworkDomainName'] = $request->networkDomainName;
        }
        if (!Utils::isUnset($request->networkDomainType)) {
            $query['NetworkDomainType'] = $request->networkDomainType;
        }
        if (!Utils::isUnset($request->proxies)) {
            $query['Proxies'] = $request->proxies;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateNetworkDomain',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateNetworkDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a network domain.
     *  *
     * @param CreateNetworkDomainRequest $request CreateNetworkDomainRequest
     *
     * @return CreateNetworkDomainResponse CreateNetworkDomainResponse
     */
    public function createNetworkDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createNetworkDomainWithOptions($request, $runtime);
    }

    /**
     * @param CreateOperationTicketRequest $request CreateOperationTicketRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateOperationTicketResponse CreateOperationTicketResponse
     */
    public function createOperationTicketWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->approveComment)) {
            $query['ApproveComment'] = $request->approveComment;
        }
        if (!Utils::isUnset($request->assetAccountName)) {
            $query['AssetAccountName'] = $request->assetAccountName;
        }
        if (!Utils::isUnset($request->assetId)) {
            $query['AssetId'] = $request->assetId;
        }
        if (!Utils::isUnset($request->effectEndTime)) {
            $query['EffectEndTime'] = $request->effectEndTime;
        }
        if (!Utils::isUnset($request->effectStartTime)) {
            $query['EffectStartTime'] = $request->effectStartTime;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->isOneTimeEffect)) {
            $query['IsOneTimeEffect'] = $request->isOneTimeEffect;
        }
        if (!Utils::isUnset($request->protocolName)) {
            $query['ProtocolName'] = $request->protocolName;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateOperationTicket',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateOperationTicketResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateOperationTicketRequest $request CreateOperationTicketRequest
     *
     * @return CreateOperationTicketResponse CreateOperationTicketResponse
     */
    public function createOperationTicket($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createOperationTicketWithOptions($request, $runtime);
    }

    /**
     * @summary Configures a command control, command approval, protocol control, or access control policy to manage O\\&M operations. This effectively prevents users from performing high-risk operations or accidental operations to ensure O\\&M security.
     *  *
     * @param CreatePolicyRequest $request CreatePolicyRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return CreatePolicyResponse CreatePolicyResponse
     */
    public function createPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->comment)) {
            $query['Comment'] = $request->comment;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->policyName)) {
            $query['PolicyName'] = $request->policyName;
        }
        if (!Utils::isUnset($request->priority)) {
            $query['Priority'] = $request->priority;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreatePolicy',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreatePolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Configures a command control, command approval, protocol control, or access control policy to manage O\\&M operations. This effectively prevents users from performing high-risk operations or accidental operations to ensure O\\&M security.
     *  *
     * @param CreatePolicyRequest $request CreatePolicyRequest
     *
     * @return CreatePolicyResponse CreatePolicyResponse
     */
    public function createPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPolicyWithOptions($request, $runtime);
    }

    /**
     * @summary You can create authorization rules to authorize multiple users to manage assets. You can also specify a validity period for an authorization rule. This way, you can manage users and assets in a more efficient manner and limit the time periods during which users can access assets.
     *  *
     * @param CreateRuleRequest $request CreateRuleRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateRuleResponse CreateRuleResponse
     */
    public function createRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->comment)) {
            $query['Comment'] = $request->comment;
        }
        if (!Utils::isUnset($request->databases)) {
            $query['Databases'] = $request->databases;
        }
        if (!Utils::isUnset($request->effectiveEndTime)) {
            $query['EffectiveEndTime'] = $request->effectiveEndTime;
        }
        if (!Utils::isUnset($request->effectiveStartTime)) {
            $query['EffectiveStartTime'] = $request->effectiveStartTime;
        }
        if (!Utils::isUnset($request->hostGroups)) {
            $query['HostGroups'] = $request->hostGroups;
        }
        if (!Utils::isUnset($request->hosts)) {
            $query['Hosts'] = $request->hosts;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->ruleName)) {
            $query['RuleName'] = $request->ruleName;
        }
        if (!Utils::isUnset($request->userGroupIds)) {
            $query['UserGroupIds'] = $request->userGroupIds;
        }
        if (!Utils::isUnset($request->userIds)) {
            $query['UserIds'] = $request->userIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateRule',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary You can create authorization rules to authorize multiple users to manage assets. You can also specify a validity period for an authorization rule. This way, you can manage users and assets in a more efficient manner and limit the time periods during which users can access assets.
     *  *
     * @param CreateRuleRequest $request CreateRuleRequest
     *
     * @return CreateRuleResponse CreateRuleResponse
     */
    public function createRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRuleWithOptions($request, $runtime);
    }

    /**
     * @summary Adds a user to a bastion host.
     *  *
     * @description You can call the CreateUser operation to add local users, Resource Access Management (RAM) users, Active Directory (AD)-authenticated users, or Lightweight Directory Access Protocol (LDAP)-authenticated users to a bastion host. After a Bastionhost administrator adds a user to a bastion host, O\\&M engineers can log on to the bastion host as the user to perform O\\&M operations on the hosts that the user is authorized to manage.
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds a limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limits when you call this operation.
     *  *
     * @param CreateUserRequest $request CreateUserRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateUserResponse CreateUserResponse
     */
    public function createUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->comment)) {
            $query['Comment'] = $request->comment;
        }
        if (!Utils::isUnset($request->displayName)) {
            $query['DisplayName'] = $request->displayName;
        }
        if (!Utils::isUnset($request->effectiveEndTime)) {
            $query['EffectiveEndTime'] = $request->effectiveEndTime;
        }
        if (!Utils::isUnset($request->effectiveStartTime)) {
            $query['EffectiveStartTime'] = $request->effectiveStartTime;
        }
        if (!Utils::isUnset($request->email)) {
            $query['Email'] = $request->email;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->language)) {
            $query['Language'] = $request->language;
        }
        if (!Utils::isUnset($request->languageStatus)) {
            $query['LanguageStatus'] = $request->languageStatus;
        }
        if (!Utils::isUnset($request->mobile)) {
            $query['Mobile'] = $request->mobile;
        }
        if (!Utils::isUnset($request->mobileCountryCode)) {
            $query['MobileCountryCode'] = $request->mobileCountryCode;
        }
        if (!Utils::isUnset($request->needResetPassword)) {
            $query['NeedResetPassword'] = $request->needResetPassword;
        }
        if (!Utils::isUnset($request->password)) {
            $query['Password'] = $request->password;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        if (!Utils::isUnset($request->sourceUserId)) {
            $query['SourceUserId'] = $request->sourceUserId;
        }
        if (!Utils::isUnset($request->twoFactorMethods)) {
            $query['TwoFactorMethods'] = $request->twoFactorMethods;
        }
        if (!Utils::isUnset($request->twoFactorStatus)) {
            $query['TwoFactorStatus'] = $request->twoFactorStatus;
        }
        if (!Utils::isUnset($request->userName)) {
            $query['UserName'] = $request->userName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateUser',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Adds a user to a bastion host.
     *  *
     * @description You can call the CreateUser operation to add local users, Resource Access Management (RAM) users, Active Directory (AD)-authenticated users, or Lightweight Directory Access Protocol (LDAP)-authenticated users to a bastion host. After a Bastionhost administrator adds a user to a bastion host, O\\&M engineers can log on to the bastion host as the user to perform O\\&M operations on the hosts that the user is authorized to manage.
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds a limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limits when you call this operation.
     *  *
     * @param CreateUserRequest $request CreateUserRequest
     *
     * @return CreateUserResponse CreateUserResponse
     */
    public function createUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createUserWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a user group for the specified bastion host.
     *  *
     * @description You can call this operation to create a user group for a bastion host as an administrator. Then, you can call the [AddUsersToGroup](https://help.aliyun.com/document_detail/204600.html) operation to add users to the user group at a time. After you add the users to the user group, you can authorize and manage the users in a centralized manner.
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param CreateUserGroupRequest $request CreateUserGroupRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateUserGroupResponse CreateUserGroupResponse
     */
    public function createUserGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->comment)) {
            $query['Comment'] = $request->comment;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->userGroupName)) {
            $query['UserGroupName'] = $request->userGroupName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateUserGroup',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateUserGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a user group for the specified bastion host.
     *  *
     * @description You can call this operation to create a user group for a bastion host as an administrator. Then, you can call the [AddUsersToGroup](https://help.aliyun.com/document_detail/204600.html) operation to add users to the user group at a time. After you add the users to the user group, you can authorize and manage the users in a centralized manner.
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param CreateUserGroupRequest $request CreateUserGroupRequest
     *
     * @return CreateUserGroupResponse CreateUserGroupResponse
     */
    public function createUserGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createUserGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a public key for a bastion host user and hosts the public key in the bastion host. This way, O\\&M engineers can use the private key that corresponds to the public key to log on to the bastion host from an O\\&M client.
     *  *
     * @description You can call the CreateUserPublicKey operation to create a public key for the specified user of a bastion host.
     *  *
     * @param CreateUserPublicKeyRequest $request CreateUserPublicKeyRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateUserPublicKeyResponse CreateUserPublicKeyResponse
     */
    public function createUserPublicKeyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->comment)) {
            $query['Comment'] = $request->comment;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->publicKey)) {
            $query['PublicKey'] = $request->publicKey;
        }
        if (!Utils::isUnset($request->publicKeyName)) {
            $query['PublicKeyName'] = $request->publicKeyName;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateUserPublicKey',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateUserPublicKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a public key for a bastion host user and hosts the public key in the bastion host. This way, O\\&M engineers can use the private key that corresponds to the public key to log on to the bastion host from an O\\&M client.
     *  *
     * @description You can call the CreateUserPublicKey operation to create a public key for the specified user of a bastion host.
     *  *
     * @param CreateUserPublicKeyRequest $request CreateUserPublicKeyRequest
     *
     * @return CreateUserPublicKeyResponse CreateUserPublicKeyResponse
     */
    public function createUserPublicKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createUserPublicKeyWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a database.
     *  *
     * @param DeleteDatabaseRequest $request DeleteDatabaseRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteDatabaseResponse DeleteDatabaseResponse
     */
    public function deleteDatabaseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->databaseId)) {
            $query['DatabaseId'] = $request->databaseId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteDatabase',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDatabaseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a database.
     *  *
     * @param DeleteDatabaseRequest $request DeleteDatabaseRequest
     *
     * @return DeleteDatabaseResponse DeleteDatabaseResponse
     */
    public function deleteDatabase($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDatabaseWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a database account.
     *  *
     * @param DeleteDatabaseAccountRequest $request DeleteDatabaseAccountRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteDatabaseAccountResponse DeleteDatabaseAccountResponse
     */
    public function deleteDatabaseAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->databaseAccountId)) {
            $query['DatabaseAccountId'] = $request->databaseAccountId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteDatabaseAccount',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDatabaseAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a database account.
     *  *
     * @param DeleteDatabaseAccountRequest $request DeleteDatabaseAccountRequest
     *
     * @return DeleteDatabaseAccountResponse DeleteDatabaseAccountResponse
     */
    public function deleteDatabaseAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDatabaseAccountWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes the specified host.
     *  *
     * @param DeleteHostRequest $request DeleteHostRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteHostResponse DeleteHostResponse
     */
    public function deleteHostWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->hostId)) {
            $query['HostId'] = $request->hostId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteHost',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteHostResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes the specified host.
     *  *
     * @param DeleteHostRequest $request DeleteHostRequest
     *
     * @return DeleteHostResponse DeleteHostResponse
     */
    public function deleteHost($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteHostWithOptions($request, $runtime);
    }

    /**
     * @summary Removes a host account.
     *  *
     * @description ## Usage notes
     * This interface is used to delete individual host accounts. If a host account is no longer in use, you can invoke this interface to delete the host account for that host that has been configured on the bastion.
     * >  After you remove the host account, you must enter the username and password of the host when you log on to the host in Bastionhost.
     * ## QPS Limit
     * The single-user QPS limit of this interface is 10 times/second. If the limit is exceeded, the API call will be stream-limited, which may affect your business, please call reasonably.
     *  *
     * @param DeleteHostAccountRequest $request DeleteHostAccountRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteHostAccountResponse DeleteHostAccountResponse
     */
    public function deleteHostAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->hostAccountId)) {
            $query['HostAccountId'] = $request->hostAccountId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteHostAccount',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteHostAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Removes a host account.
     *  *
     * @description ## Usage notes
     * This interface is used to delete individual host accounts. If a host account is no longer in use, you can invoke this interface to delete the host account for that host that has been configured on the bastion.
     * >  After you remove the host account, you must enter the username and password of the host when you log on to the host in Bastionhost.
     * ## QPS Limit
     * The single-user QPS limit of this interface is 10 times/second. If the limit is exceeded, the API call will be stream-limited, which may affect your business, please call reasonably.
     *  *
     * @param DeleteHostAccountRequest $request DeleteHostAccountRequest
     *
     * @return DeleteHostAccountResponse DeleteHostAccountResponse
     */
    public function deleteHostAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteHostAccountWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a host group.
     *  *
     * @description You can call this operation to delete a single host group. If you no longer need to perform O\\&M operations on all hosts in a host group, you can call this operation to delete the host group.
     * ### Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DeleteHostGroupRequest $request DeleteHostGroupRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteHostGroupResponse DeleteHostGroupResponse
     */
    public function deleteHostGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->hostGroupId)) {
            $query['HostGroupId'] = $request->hostGroupId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteHostGroup',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteHostGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a host group.
     *  *
     * @description You can call this operation to delete a single host group. If you no longer need to perform O\\&M operations on all hosts in a host group, you can call this operation to delete the host group.
     * ### Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DeleteHostGroupRequest $request DeleteHostGroupRequest
     *
     * @return DeleteHostGroupResponse DeleteHostGroupResponse
     */
    public function deleteHostGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteHostGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a shared key.
     *  *
     * @param DeleteHostShareKeyRequest $request DeleteHostShareKeyRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteHostShareKeyResponse DeleteHostShareKeyResponse
     */
    public function deleteHostShareKeyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->hostShareKeyId)) {
            $query['HostShareKeyId'] = $request->hostShareKeyId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteHostShareKey',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteHostShareKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a shared key.
     *  *
     * @param DeleteHostShareKeyRequest $request DeleteHostShareKeyRequest
     *
     * @return DeleteHostShareKeyResponse DeleteHostShareKeyResponse
     */
    public function deleteHostShareKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteHostShareKeyWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a network domain.
     *  *
     * @param DeleteNetworkDomainRequest $request DeleteNetworkDomainRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteNetworkDomainResponse DeleteNetworkDomainResponse
     */
    public function deleteNetworkDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->networkDomainId)) {
            $query['NetworkDomainId'] = $request->networkDomainId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteNetworkDomain',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteNetworkDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a network domain.
     *  *
     * @param DeleteNetworkDomainRequest $request DeleteNetworkDomainRequest
     *
     * @return DeleteNetworkDomainResponse DeleteNetworkDomainResponse
     */
    public function deleteNetworkDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteNetworkDomainWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a control policy.
     *  *
     * @param DeletePolicyRequest $request DeletePolicyRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return DeletePolicyResponse DeletePolicyResponse
     */
    public function deletePolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->policyId)) {
            $query['PolicyId'] = $request->policyId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeletePolicy',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeletePolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a control policy.
     *  *
     * @param DeletePolicyRequest $request DeletePolicyRequest
     *
     * @return DeletePolicyResponse DeletePolicyResponse
     */
    public function deletePolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deletePolicyWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes an authorization rule.
     *  *
     * @param DeleteRuleRequest $request DeleteRuleRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteRuleResponse DeleteRuleResponse
     */
    public function deleteRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->ruleId)) {
            $query['RuleId'] = $request->ruleId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteRule',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes an authorization rule.
     *  *
     * @param DeleteRuleRequest $request DeleteRuleRequest
     *
     * @return DeleteRuleResponse DeleteRuleResponse
     */
    public function deleteRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRuleWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a bastion host user.
     *  *
     * @param DeleteUserRequest $request DeleteUserRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteUserResponse DeleteUserResponse
     */
    public function deleteUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteUser',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a bastion host user.
     *  *
     * @param DeleteUserRequest $request DeleteUserRequest
     *
     * @return DeleteUserResponse DeleteUserResponse
     */
    public function deleteUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteUserWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a specified user group from a specified bastion host.
     *  *
     * @param DeleteUserGroupRequest $request DeleteUserGroupRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteUserGroupResponse DeleteUserGroupResponse
     */
    public function deleteUserGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->userGroupId)) {
            $query['UserGroupId'] = $request->userGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteUserGroup',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteUserGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a specified user group from a specified bastion host.
     *  *
     * @param DeleteUserGroupRequest $request DeleteUserGroupRequest
     *
     * @return DeleteUserGroupResponse DeleteUserGroupResponse
     */
    public function deleteUserGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteUserGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a public key from the specified user.
     *  *
     * @description You can call the DeleteUserPublicKey operation to delete a public key from the specified user of a bastion host.
     *  *
     * @param DeleteUserPublicKeyRequest $request DeleteUserPublicKeyRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteUserPublicKeyResponse DeleteUserPublicKeyResponse
     */
    public function deleteUserPublicKeyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->publicKeyId)) {
            $query['PublicKeyId'] = $request->publicKeyId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteUserPublicKey',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteUserPublicKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a public key from the specified user.
     *  *
     * @description You can call the DeleteUserPublicKey operation to delete a public key from the specified user of a bastion host.
     *  *
     * @param DeleteUserPublicKeyRequest $request DeleteUserPublicKeyRequest
     *
     * @return DeleteUserPublicKeyResponse DeleteUserPublicKeyResponse
     */
    public function deleteUserPublicKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteUserPublicKeyWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the attribute information about the specified bastion host. The information includes the ID and remarks of the bastion host.
     *  *
     * @description ****
     *  *
     * @param DescribeInstanceAttributeRequest $request DescribeInstanceAttributeRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeInstanceAttributeResponse DescribeInstanceAttributeResponse
     */
    public function describeInstanceAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeInstanceAttribute',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInstanceAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the attribute information about the specified bastion host. The information includes the ID and remarks of the bastion host.
     *  *
     * @description ****
     *  *
     * @param DescribeInstanceAttributeRequest $request DescribeInstanceAttributeRequest
     *
     * @return DescribeInstanceAttributeResponse DescribeInstanceAttributeResponse
     */
    public function describeInstanceAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceAttributeWithOptions($request, $runtime);
    }

    /**
     * @param DescribeInstancesRequest $request DescribeInstancesRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeInstancesResponse DescribeInstancesResponse
     */
    public function describeInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->instanceStatus)) {
            $query['InstanceStatus'] = $request->instanceStatus;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeInstances',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeInstancesRequest $request DescribeInstancesRequest
     *
     * @return DescribeInstancesResponse DescribeInstancesResponse
     */
    public function describeInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstancesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries available regions where you can create bastion hosts.
     *  *
     * @param DescribeRegionsRequest $request DescribeRegionsRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeRegionsResponse DescribeRegionsResponse
     */
    public function describeRegionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRegions',
            'version'     => '2019-12-09',
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
     * @summary Queries available regions where you can create bastion hosts.
     *  *
     * @param DescribeRegionsRequest $request DescribeRegionsRequest
     *
     * @return DescribeRegionsResponse DescribeRegionsResponse
     */
    public function describeRegions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRegionsWithOptions($request, $runtime);
    }

    /**
     * @summary Revokes permissions on databases and database accounts from a user.
     *  *
     * @param DetachDatabaseAccountsFromUserRequest $request DetachDatabaseAccountsFromUserRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return DetachDatabaseAccountsFromUserResponse DetachDatabaseAccountsFromUserResponse
     */
    public function detachDatabaseAccountsFromUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->databases)) {
            $query['Databases'] = $request->databases;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DetachDatabaseAccountsFromUser',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DetachDatabaseAccountsFromUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Revokes permissions on databases and database accounts from a user.
     *  *
     * @param DetachDatabaseAccountsFromUserRequest $request DetachDatabaseAccountsFromUserRequest
     *
     * @return DetachDatabaseAccountsFromUserResponse DetachDatabaseAccountsFromUserResponse
     */
    public function detachDatabaseAccountsFromUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detachDatabaseAccountsFromUserWithOptions($request, $runtime);
    }

    /**
     * @summary Revokes permissions on databases and database accounts from a user group.
     *  *
     * @param DetachDatabaseAccountsFromUserGroupRequest $request DetachDatabaseAccountsFromUserGroupRequest
     * @param RuntimeOptions                             $runtime runtime options for this request RuntimeOptions
     *
     * @return DetachDatabaseAccountsFromUserGroupResponse DetachDatabaseAccountsFromUserGroupResponse
     */
    public function detachDatabaseAccountsFromUserGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->databases)) {
            $query['Databases'] = $request->databases;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->userGroupId)) {
            $query['UserGroupId'] = $request->userGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DetachDatabaseAccountsFromUserGroup',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DetachDatabaseAccountsFromUserGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Revokes permissions on databases and database accounts from a user group.
     *  *
     * @param DetachDatabaseAccountsFromUserGroupRequest $request DetachDatabaseAccountsFromUserGroupRequest
     *
     * @return DetachDatabaseAccountsFromUserGroupResponse DetachDatabaseAccountsFromUserGroupResponse
     */
    public function detachDatabaseAccountsFromUserGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detachDatabaseAccountsFromUserGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Disassociate host accounts from a shared key.
     *  *
     * @param DetachHostAccountsFromHostShareKeyRequest $request DetachHostAccountsFromHostShareKeyRequest
     * @param RuntimeOptions                            $runtime runtime options for this request RuntimeOptions
     *
     * @return DetachHostAccountsFromHostShareKeyResponse DetachHostAccountsFromHostShareKeyResponse
     */
    public function detachHostAccountsFromHostShareKeyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->hostAccountIds)) {
            $query['HostAccountIds'] = $request->hostAccountIds;
        }
        if (!Utils::isUnset($request->hostShareKeyId)) {
            $query['HostShareKeyId'] = $request->hostShareKeyId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DetachHostAccountsFromHostShareKey',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DetachHostAccountsFromHostShareKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Disassociate host accounts from a shared key.
     *  *
     * @param DetachHostAccountsFromHostShareKeyRequest $request DetachHostAccountsFromHostShareKeyRequest
     *
     * @return DetachHostAccountsFromHostShareKeyResponse DetachHostAccountsFromHostShareKeyResponse
     */
    public function detachHostAccountsFromHostShareKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detachHostAccountsFromHostShareKeyWithOptions($request, $runtime);
    }

    /**
     * @summary Revokes permissions on hosts and host accounts from a user.
     *  *
     * @param DetachHostAccountsFromUserRequest $request DetachHostAccountsFromUserRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DetachHostAccountsFromUserResponse DetachHostAccountsFromUserResponse
     */
    public function detachHostAccountsFromUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->hosts)) {
            $query['Hosts'] = $request->hosts;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DetachHostAccountsFromUser',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DetachHostAccountsFromUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Revokes permissions on hosts and host accounts from a user.
     *  *
     * @param DetachHostAccountsFromUserRequest $request DetachHostAccountsFromUserRequest
     *
     * @return DetachHostAccountsFromUserResponse DetachHostAccountsFromUserResponse
     */
    public function detachHostAccountsFromUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detachHostAccountsFromUserWithOptions($request, $runtime);
    }

    /**
     * @summary Revokes the permissions on one or more hosts and host accounts from a user group.
     *  *
     * @param DetachHostAccountsFromUserGroupRequest $request DetachHostAccountsFromUserGroupRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return DetachHostAccountsFromUserGroupResponse DetachHostAccountsFromUserGroupResponse
     */
    public function detachHostAccountsFromUserGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->hosts)) {
            $query['Hosts'] = $request->hosts;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->userGroupId)) {
            $query['UserGroupId'] = $request->userGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DetachHostAccountsFromUserGroup',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DetachHostAccountsFromUserGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Revokes the permissions on one or more hosts and host accounts from a user group.
     *  *
     * @param DetachHostAccountsFromUserGroupRequest $request DetachHostAccountsFromUserGroupRequest
     *
     * @return DetachHostAccountsFromUserGroupResponse DetachHostAccountsFromUserGroupResponse
     */
    public function detachHostAccountsFromUserGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detachHostAccountsFromUserGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Removes host groups and host accounts from the list of host groups and host accounts that a user is authorized to manage.
     *  *
     * @param DetachHostGroupAccountsFromUserRequest $request DetachHostGroupAccountsFromUserRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return DetachHostGroupAccountsFromUserResponse DetachHostGroupAccountsFromUserResponse
     */
    public function detachHostGroupAccountsFromUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->hostGroups)) {
            $query['HostGroups'] = $request->hostGroups;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DetachHostGroupAccountsFromUser',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DetachHostGroupAccountsFromUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Removes host groups and host accounts from the list of host groups and host accounts that a user is authorized to manage.
     *  *
     * @param DetachHostGroupAccountsFromUserRequest $request DetachHostGroupAccountsFromUserRequest
     *
     * @return DetachHostGroupAccountsFromUserResponse DetachHostGroupAccountsFromUserResponse
     */
    public function detachHostGroupAccountsFromUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detachHostGroupAccountsFromUserWithOptions($request, $runtime);
    }

    /**
     * @summary Revokes permissions on one or more host groups and host accounts from a user group.
     *  *
     * @description ****
     *  *
     * @param DetachHostGroupAccountsFromUserGroupRequest $request DetachHostGroupAccountsFromUserGroupRequest
     * @param RuntimeOptions                              $runtime runtime options for this request RuntimeOptions
     *
     * @return DetachHostGroupAccountsFromUserGroupResponse DetachHostGroupAccountsFromUserGroupResponse
     */
    public function detachHostGroupAccountsFromUserGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->hostGroups)) {
            $query['HostGroups'] = $request->hostGroups;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->userGroupId)) {
            $query['UserGroupId'] = $request->userGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DetachHostGroupAccountsFromUserGroup',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DetachHostGroupAccountsFromUserGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Revokes permissions on one or more host groups and host accounts from a user group.
     *  *
     * @description ****
     *  *
     * @param DetachHostGroupAccountsFromUserGroupRequest $request DetachHostGroupAccountsFromUserGroupRequest
     *
     * @return DetachHostGroupAccountsFromUserGroupResponse DetachHostGroupAccountsFromUserGroupResponse
     */
    public function detachHostGroupAccountsFromUserGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detachHostGroupAccountsFromUserGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Disables Internet access for a bastion host.
     *  *
     * @param DisableInstancePublicAccessRequest $request DisableInstancePublicAccessRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DisableInstancePublicAccessResponse DisableInstancePublicAccessResponse
     */
    public function disableInstancePublicAccessWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DisableInstancePublicAccess',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DisableInstancePublicAccessResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Disables Internet access for a bastion host.
     *  *
     * @param DisableInstancePublicAccessRequest $request DisableInstancePublicAccessRequest
     *
     * @return DisableInstancePublicAccessResponse DisableInstancePublicAccessResponse
     */
    public function disableInstancePublicAccess($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableInstancePublicAccessWithOptions($request, $runtime);
    }

    /**
     * @summary Disables an authorization rule.
     *  *
     * @param DisableRuleRequest $request DisableRuleRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return DisableRuleResponse DisableRuleResponse
     */
    public function disableRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->ruleId)) {
            $query['RuleId'] = $request->ruleId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DisableRule',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DisableRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Disables an authorization rule.
     *  *
     * @param DisableRuleRequest $request DisableRuleRequest
     *
     * @return DisableRuleResponse DisableRuleResponse
     */
    public function disableRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableRuleWithOptions($request, $runtime);
    }

    /**
     * @summary Enables Internet access for a bastion host.
     *  *
     * @param EnableInstancePublicAccessRequest $request EnableInstancePublicAccessRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return EnableInstancePublicAccessResponse EnableInstancePublicAccessResponse
     */
    public function enableInstancePublicAccessWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'EnableInstancePublicAccess',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EnableInstancePublicAccessResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Enables Internet access for a bastion host.
     *  *
     * @param EnableInstancePublicAccessRequest $request EnableInstancePublicAccessRequest
     *
     * @return EnableInstancePublicAccessResponse EnableInstancePublicAccessResponse
     */
    public function enableInstancePublicAccess($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableInstancePublicAccessWithOptions($request, $runtime);
    }

    /**
     * @summary Enables an authorization rule.
     *  *
     * @param EnableRuleRequest $request EnableRuleRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return EnableRuleResponse EnableRuleResponse
     */
    public function enableRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->ruleId)) {
            $query['RuleId'] = $request->ruleId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'EnableRule',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EnableRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Enables an authorization rule.
     *  *
     * @param EnableRuleRequest $request EnableRuleRequest
     *
     * @return EnableRuleResponse EnableRuleResponse
     */
    public function enableRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableRuleWithOptions($request, $runtime);
    }

    /**
     * @summary Applies for an O&M token.
     *  *
     * @param GenerateAssetOperationTokenRequest $request GenerateAssetOperationTokenRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return GenerateAssetOperationTokenResponse GenerateAssetOperationTokenResponse
     */
    public function generateAssetOperationTokenWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->assetAccountId)) {
            $query['AssetAccountId'] = $request->assetAccountId;
        }
        if (!Utils::isUnset($request->assetAccountName)) {
            $query['AssetAccountName'] = $request->assetAccountName;
        }
        if (!Utils::isUnset($request->assetAccountPassword)) {
            $query['AssetAccountPassword'] = $request->assetAccountPassword;
        }
        if (!Utils::isUnset($request->assetAccountProtocolName)) {
            $query['AssetAccountProtocolName'] = $request->assetAccountProtocolName;
        }
        if (!Utils::isUnset($request->assetId)) {
            $query['AssetId'] = $request->assetId;
        }
        if (!Utils::isUnset($request->assetType)) {
            $query['AssetType'] = $request->assetType;
        }
        if (!Utils::isUnset($request->databaseSchema)) {
            $query['DatabaseSchema'] = $request->databaseSchema;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->loginAttribute)) {
            $query['LoginAttribute'] = $request->loginAttribute;
        }
        if (!Utils::isUnset($request->operationMode)) {
            $query['OperationMode'] = $request->operationMode;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->ssoClient)) {
            $query['SsoClient'] = $request->ssoClient;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GenerateAssetOperationToken',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GenerateAssetOperationTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Applies for an O&M token.
     *  *
     * @param GenerateAssetOperationTokenRequest $request GenerateAssetOperationTokenRequest
     *
     * @return GenerateAssetOperationTokenResponse GenerateAssetOperationTokenResponse
     */
    public function generateAssetOperationToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateAssetOperationTokenWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the detailed information about a database.
     *  *
     * @param GetDatabaseRequest $request GetDatabaseRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return GetDatabaseResponse GetDatabaseResponse
     */
    public function getDatabaseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->databaseId)) {
            $query['DatabaseId'] = $request->databaseId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDatabase',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDatabaseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the detailed information about a database.
     *  *
     * @param GetDatabaseRequest $request GetDatabaseRequest
     *
     * @return GetDatabaseResponse GetDatabaseResponse
     */
    public function getDatabase($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDatabaseWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the detailed information about a database account.
     *  *
     * @param GetDatabaseAccountRequest $request GetDatabaseAccountRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return GetDatabaseAccountResponse GetDatabaseAccountResponse
     */
    public function getDatabaseAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->databaseAccountId)) {
            $query['DatabaseAccountId'] = $request->databaseAccountId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDatabaseAccount',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDatabaseAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the detailed information about a database account.
     *  *
     * @param GetDatabaseAccountRequest $request GetDatabaseAccountRequest
     *
     * @return GetDatabaseAccountResponse GetDatabaseAccountResponse
     */
    public function getDatabaseAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDatabaseAccountWithOptions($request, $runtime);
    }

    /**
     * @param GetExportConfigJobRequest $request GetExportConfigJobRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return GetExportConfigJobResponse GetExportConfigJobResponse
     */
    public function getExportConfigJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetExportConfigJob',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetExportConfigJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetExportConfigJobRequest $request GetExportConfigJobRequest
     *
     * @return GetExportConfigJobResponse GetExportConfigJobResponse
     */
    public function getExportConfigJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getExportConfigJobWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details of a host, such as the name, source, address, protocol, and service port of the host.
     *  *
     * @param GetHostRequest $request GetHostRequest
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetHostResponse GetHostResponse
     */
    public function getHostWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->hostId)) {
            $query['HostId'] = $request->hostId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetHost',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetHostResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the details of a host, such as the name, source, address, protocol, and service port of the host.
     *  *
     * @param GetHostRequest $request GetHostRequest
     *
     * @return GetHostResponse GetHostResponse
     */
    public function getHost($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getHostWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details of a specified host account.
     *  *
     * @param GetHostAccountRequest $request GetHostAccountRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return GetHostAccountResponse GetHostAccountResponse
     */
    public function getHostAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->hostAccountId)) {
            $query['HostAccountId'] = $request->hostAccountId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetHostAccount',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetHostAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the details of a specified host account.
     *  *
     * @param GetHostAccountRequest $request GetHostAccountRequest
     *
     * @return GetHostAccountResponse GetHostAccountResponse
     */
    public function getHostAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getHostAccountWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details of a specified host group.
     *  *
     * @param GetHostGroupRequest $request GetHostGroupRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return GetHostGroupResponse GetHostGroupResponse
     */
    public function getHostGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->hostGroupId)) {
            $query['HostGroupId'] = $request->hostGroupId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetHostGroup',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetHostGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the details of a specified host group.
     *  *
     * @param GetHostGroupRequest $request GetHostGroupRequest
     *
     * @return GetHostGroupResponse GetHostGroupResponse
     */
    public function getHostGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getHostGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about a shared key.
     *  *
     * @param GetHostShareKeyRequest $request GetHostShareKeyRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return GetHostShareKeyResponse GetHostShareKeyResponse
     */
    public function getHostShareKeyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->hostShareKeyId)) {
            $query['HostShareKeyId'] = $request->hostShareKeyId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetHostShareKey',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetHostShareKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about a shared key.
     *  *
     * @param GetHostShareKeyRequest $request GetHostShareKeyRequest
     *
     * @return GetHostShareKeyResponse GetHostShareKeyResponse
     */
    public function getHostShareKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getHostShareKeyWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the settings of Active Directory (AD) authentication on a bastion host.
     *  *
     * @description ###
     * You can call this operation to query the settings of AD authentication on a bastion host. After you configure AD authentication on a bastion host, you can import AD-authenticated users into the bastion host. After the AD-authenticated users are imported into the bastion host, the AD-authenticated users can log on to the bastion host to perform O\\&M operations on servers.
     * ### Limit
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param GetInstanceADAuthServerRequest $request GetInstanceADAuthServerRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return GetInstanceADAuthServerResponse GetInstanceADAuthServerResponse
     */
    public function getInstanceADAuthServerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetInstanceADAuthServer',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetInstanceADAuthServerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the settings of Active Directory (AD) authentication on a bastion host.
     *  *
     * @description ###
     * You can call this operation to query the settings of AD authentication on a bastion host. After you configure AD authentication on a bastion host, you can import AD-authenticated users into the bastion host. After the AD-authenticated users are imported into the bastion host, the AD-authenticated users can log on to the bastion host to perform O\\&M operations on servers.
     * ### Limit
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param GetInstanceADAuthServerRequest $request GetInstanceADAuthServerRequest
     *
     * @return GetInstanceADAuthServerResponse GetInstanceADAuthServerResponse
     */
    public function getInstanceADAuthServer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInstanceADAuthServerWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the settings of Lightweight Directory Access Protocol (LDAP) authentication on a bastion host.
     *  *
     * @param GetInstanceLDAPAuthServerRequest $request GetInstanceLDAPAuthServerRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return GetInstanceLDAPAuthServerResponse GetInstanceLDAPAuthServerResponse
     */
    public function getInstanceLDAPAuthServerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetInstanceLDAPAuthServer',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetInstanceLDAPAuthServerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the settings of Lightweight Directory Access Protocol (LDAP) authentication on a bastion host.
     *  *
     * @param GetInstanceLDAPAuthServerRequest $request GetInstanceLDAPAuthServerRequest
     *
     * @return GetInstanceLDAPAuthServerResponse GetInstanceLDAPAuthServerResponse
     */
    public function getInstanceLDAPAuthServer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInstanceLDAPAuthServerWithOptions($request, $runtime);
    }

    /**
     * @param GetInstanceStoreInfoRequest $request GetInstanceStoreInfoRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return GetInstanceStoreInfoResponse GetInstanceStoreInfoResponse
     */
    public function getInstanceStoreInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetInstanceStoreInfo',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetInstanceStoreInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetInstanceStoreInfoRequest $request GetInstanceStoreInfoRequest
     *
     * @return GetInstanceStoreInfoResponse GetInstanceStoreInfoResponse
     */
    public function getInstanceStoreInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInstanceStoreInfoWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the settings of two-factor authentication on a bastion host.
     *  *
     * @description You can call this operation to query the settings of two-factor authentication on a bastion host. After you enable two-factor authentication, Bastionhost sends a verification code to a local user when the local user logs on to a bastion host. A local user can log on to the bastion host only when the local user enters the valid username and password and the verification code. This reduces the security risks caused by account information leaks.
     * ### Limit
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param GetInstanceTwoFactorRequest $request GetInstanceTwoFactorRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return GetInstanceTwoFactorResponse GetInstanceTwoFactorResponse
     */
    public function getInstanceTwoFactorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetInstanceTwoFactor',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetInstanceTwoFactorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the settings of two-factor authentication on a bastion host.
     *  *
     * @description You can call this operation to query the settings of two-factor authentication on a bastion host. After you enable two-factor authentication, Bastionhost sends a verification code to a local user when the local user logs on to a bastion host. A local user can log on to the bastion host only when the local user enters the valid username and password and the verification code. This reduces the security risks caused by account information leaks.
     * ### Limit
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param GetInstanceTwoFactorRequest $request GetInstanceTwoFactorRequest
     *
     * @return GetInstanceTwoFactorResponse GetInstanceTwoFactorResponse
     */
    public function getInstanceTwoFactor($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInstanceTwoFactorWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the detailed information about a network domain.
     *  *
     * @param GetNetworkDomainRequest $request GetNetworkDomainRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return GetNetworkDomainResponse GetNetworkDomainResponse
     */
    public function getNetworkDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->networkDomainId)) {
            $query['NetworkDomainId'] = $request->networkDomainId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetNetworkDomain',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetNetworkDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the detailed information about a network domain.
     *  *
     * @param GetNetworkDomainRequest $request GetNetworkDomainRequest
     *
     * @return GetNetworkDomainResponse GetNetworkDomainResponse
     */
    public function getNetworkDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getNetworkDomainWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the detailed information about a control policy.
     *  *
     * @param GetPolicyRequest $request GetPolicyRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return GetPolicyResponse GetPolicyResponse
     */
    public function getPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->policyId)) {
            $query['PolicyId'] = $request->policyId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetPolicy',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the detailed information about a control policy.
     *  *
     * @param GetPolicyRequest $request GetPolicyRequest
     *
     * @return GetPolicyResponse GetPolicyResponse
     */
    public function getPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPolicyWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the assets to which a control policy applies.
     *  *
     * @param GetPolicyAssetScopeRequest $request GetPolicyAssetScopeRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return GetPolicyAssetScopeResponse GetPolicyAssetScopeResponse
     */
    public function getPolicyAssetScopeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->policyId)) {
            $query['PolicyId'] = $request->policyId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetPolicyAssetScope',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetPolicyAssetScopeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the assets to which a control policy applies.
     *  *
     * @param GetPolicyAssetScopeRequest $request GetPolicyAssetScopeRequest
     *
     * @return GetPolicyAssetScopeResponse GetPolicyAssetScopeResponse
     */
    public function getPolicyAssetScope($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPolicyAssetScopeWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the scope of users to whom a control policy applies.
     *  *
     * @param GetPolicyUserScopeRequest $request GetPolicyUserScopeRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return GetPolicyUserScopeResponse GetPolicyUserScopeResponse
     */
    public function getPolicyUserScopeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->policyId)) {
            $query['PolicyId'] = $request->policyId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetPolicyUserScope',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetPolicyUserScopeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the scope of users to whom a control policy applies.
     *  *
     * @param GetPolicyUserScopeRequest $request GetPolicyUserScopeRequest
     *
     * @return GetPolicyUserScopeResponse GetPolicyUserScopeResponse
     */
    public function getPolicyUserScope($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPolicyUserScopeWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the detailed information about an authorization rule.
     *  *
     * @param GetRuleRequest $request GetRuleRequest
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetRuleResponse GetRuleResponse
     */
    public function getRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->ruleId)) {
            $query['RuleId'] = $request->ruleId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetRule',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the detailed information about an authorization rule.
     *  *
     * @param GetRuleRequest $request GetRuleRequest
     *
     * @return GetRuleResponse GetRuleResponse
     */
    public function getRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRuleWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details of a user of the specified bastion host.
     *  *
     * @param GetUserRequest $request GetUserRequest
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetUserResponse GetUserResponse
     */
    public function getUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetUser',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the details of a user of the specified bastion host.
     *  *
     * @param GetUserRequest $request GetUserRequest
     *
     * @return GetUserResponse GetUserResponse
     */
    public function getUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUserWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details of a user group in a bastion host.
     *  *
     * @param GetUserGroupRequest $request GetUserGroupRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return GetUserGroupResponse GetUserGroupResponse
     */
    public function getUserGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->userGroupId)) {
            $query['UserGroupId'] = $request->userGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetUserGroup',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetUserGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the details of a user group in a bastion host.
     *  *
     * @param GetUserGroupRequest $request GetUserGroupRequest
     *
     * @return GetUserGroupResponse GetUserGroupResponse
     */
    public function getUserGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUserGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Queries commands to be reviewed.
     *  *
     * @description You can call this operation to query commands to be reviewed by a Bastionhost administrator.
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param ListApproveCommandsRequest $request ListApproveCommandsRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ListApproveCommandsResponse ListApproveCommandsResponse
     */
    public function listApproveCommandsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListApproveCommands',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListApproveCommandsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries commands to be reviewed.
     *  *
     * @description You can call this operation to query commands to be reviewed by a Bastionhost administrator.
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param ListApproveCommandsRequest $request ListApproveCommandsRequest
     *
     * @return ListApproveCommandsResponse ListApproveCommandsResponse
     */
    public function listApproveCommands($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listApproveCommandsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the database accounts of a database.
     *  *
     * @param ListDatabaseAccountsRequest $request ListDatabaseAccountsRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return ListDatabaseAccountsResponse ListDatabaseAccountsResponse
     */
    public function listDatabaseAccountsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->databaseAccountName)) {
            $query['DatabaseAccountName'] = $request->databaseAccountName;
        }
        if (!Utils::isUnset($request->databaseId)) {
            $query['DatabaseId'] = $request->databaseId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDatabaseAccounts',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListDatabaseAccountsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the database accounts of a database.
     *  *
     * @param ListDatabaseAccountsRequest $request ListDatabaseAccountsRequest
     *
     * @return ListDatabaseAccountsResponse ListDatabaseAccountsResponse
     */
    public function listDatabaseAccounts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDatabaseAccountsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the database accounts of a database and whether a user is authorized to manage each database account.
     *  *
     * @param ListDatabaseAccountsForUserRequest $request ListDatabaseAccountsForUserRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return ListDatabaseAccountsForUserResponse ListDatabaseAccountsForUserResponse
     */
    public function listDatabaseAccountsForUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->databaseAccountName)) {
            $query['DatabaseAccountName'] = $request->databaseAccountName;
        }
        if (!Utils::isUnset($request->databaseId)) {
            $query['DatabaseId'] = $request->databaseId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDatabaseAccountsForUser',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListDatabaseAccountsForUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the database accounts of a database and whether a user is authorized to manage each database account.
     *  *
     * @param ListDatabaseAccountsForUserRequest $request ListDatabaseAccountsForUserRequest
     *
     * @return ListDatabaseAccountsForUserResponse ListDatabaseAccountsForUserResponse
     */
    public function listDatabaseAccountsForUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDatabaseAccountsForUserWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the database accounts of a database and whether a user group is authorized to manage each database account.
     *  *
     * @param ListDatabaseAccountsForUserGroupRequest $request ListDatabaseAccountsForUserGroupRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return ListDatabaseAccountsForUserGroupResponse ListDatabaseAccountsForUserGroupResponse
     */
    public function listDatabaseAccountsForUserGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->databaseAccountName)) {
            $query['DatabaseAccountName'] = $request->databaseAccountName;
        }
        if (!Utils::isUnset($request->databaseId)) {
            $query['DatabaseId'] = $request->databaseId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->userGroupId)) {
            $query['UserGroupId'] = $request->userGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDatabaseAccountsForUserGroup',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListDatabaseAccountsForUserGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the database accounts of a database and whether a user group is authorized to manage each database account.
     *  *
     * @param ListDatabaseAccountsForUserGroupRequest $request ListDatabaseAccountsForUserGroupRequest
     *
     * @return ListDatabaseAccountsForUserGroupResponse ListDatabaseAccountsForUserGroupResponse
     */
    public function listDatabaseAccountsForUserGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDatabaseAccountsForUserGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the databases that are managed by a bastion host.
     *  *
     * @param ListDatabasesRequest $request ListDatabasesRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ListDatabasesResponse ListDatabasesResponse
     */
    public function listDatabasesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->databaseType)) {
            $query['DatabaseType'] = $request->databaseType;
        }
        if (!Utils::isUnset($request->hostGroupId)) {
            $query['HostGroupId'] = $request->hostGroupId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->networkDomainId)) {
            $query['NetworkDomainId'] = $request->networkDomainId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDatabases',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListDatabasesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the databases that are managed by a bastion host.
     *  *
     * @param ListDatabasesRequest $request ListDatabasesRequest
     *
     * @return ListDatabasesResponse ListDatabasesResponse
     */
    public function listDatabases($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDatabasesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the databases that a user is authorized to manage.
     *  *
     * @param ListDatabasesForUserRequest $request ListDatabasesForUserRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return ListDatabasesForUserResponse ListDatabasesForUserResponse
     */
    public function listDatabasesForUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->databaseAddress)) {
            $query['DatabaseAddress'] = $request->databaseAddress;
        }
        if (!Utils::isUnset($request->databaseName)) {
            $query['DatabaseName'] = $request->databaseName;
        }
        if (!Utils::isUnset($request->databaseType)) {
            $query['DatabaseType'] = $request->databaseType;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->networkDomainId)) {
            $query['NetworkDomainId'] = $request->networkDomainId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDatabasesForUser',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListDatabasesForUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the databases that a user is authorized to manage.
     *  *
     * @param ListDatabasesForUserRequest $request ListDatabasesForUserRequest
     *
     * @return ListDatabasesForUserResponse ListDatabasesForUserResponse
     */
    public function listDatabasesForUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDatabasesForUserWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the databases that a user group is authorized to manage.
     *  *
     * @param ListDatabasesForUserGroupRequest $request ListDatabasesForUserGroupRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return ListDatabasesForUserGroupResponse ListDatabasesForUserGroupResponse
     */
    public function listDatabasesForUserGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->databaseAddress)) {
            $query['DatabaseAddress'] = $request->databaseAddress;
        }
        if (!Utils::isUnset($request->databaseName)) {
            $query['DatabaseName'] = $request->databaseName;
        }
        if (!Utils::isUnset($request->databaseType)) {
            $query['DatabaseType'] = $request->databaseType;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->networkDomainId)) {
            $query['NetworkDomainId'] = $request->networkDomainId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->userGroupId)) {
            $query['UserGroupId'] = $request->userGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDatabasesForUserGroup',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListDatabasesForUserGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the databases that a user group is authorized to manage.
     *  *
     * @param ListDatabasesForUserGroupRequest $request ListDatabasesForUserGroupRequest
     *
     * @return ListDatabasesForUserGroupResponse ListDatabasesForUserGroupResponse
     */
    public function listDatabasesForUserGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDatabasesForUserGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Queries accounts of a specified host.
     *  *
     * @param ListHostAccountsRequest $request ListHostAccountsRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ListHostAccountsResponse ListHostAccountsResponse
     */
    public function listHostAccountsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->hostAccountName)) {
            $query['HostAccountName'] = $request->hostAccountName;
        }
        if (!Utils::isUnset($request->hostId)) {
            $query['HostId'] = $request->hostId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->protocolName)) {
            $query['ProtocolName'] = $request->protocolName;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListHostAccounts',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListHostAccountsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries accounts of a specified host.
     *  *
     * @param ListHostAccountsRequest $request ListHostAccountsRequest
     *
     * @return ListHostAccountsResponse ListHostAccountsResponse
     */
    public function listHostAccounts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listHostAccountsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the host accounts that are associated with a shared key.
     *  *
     * @param ListHostAccountsForHostShareKeyRequest $request ListHostAccountsForHostShareKeyRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return ListHostAccountsForHostShareKeyResponse ListHostAccountsForHostShareKeyResponse
     */
    public function listHostAccountsForHostShareKeyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->hostShareKeyId)) {
            $query['HostShareKeyId'] = $request->hostShareKeyId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListHostAccountsForHostShareKey',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListHostAccountsForHostShareKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the host accounts that are associated with a shared key.
     *  *
     * @param ListHostAccountsForHostShareKeyRequest $request ListHostAccountsForHostShareKeyRequest
     *
     * @return ListHostAccountsForHostShareKeyResponse ListHostAccountsForHostShareKeyResponse
     */
    public function listHostAccountsForHostShareKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listHostAccountsForHostShareKeyWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the host accounts that the specified user is authorized to manage on the specified host.
     *  *
     * @param ListHostAccountsForUserRequest $request ListHostAccountsForUserRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ListHostAccountsForUserResponse ListHostAccountsForUserResponse
     */
    public function listHostAccountsForUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->hostAccountName)) {
            $query['HostAccountName'] = $request->hostAccountName;
        }
        if (!Utils::isUnset($request->hostId)) {
            $query['HostId'] = $request->hostId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListHostAccountsForUser',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListHostAccountsForUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the host accounts that the specified user is authorized to manage on the specified host.
     *  *
     * @param ListHostAccountsForUserRequest $request ListHostAccountsForUserRequest
     *
     * @return ListHostAccountsForUserResponse ListHostAccountsForUserResponse
     */
    public function listHostAccountsForUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listHostAccountsForUserWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the host accounts of the specified host that the specified user group is authorized to manage.
     *  *
     * @param ListHostAccountsForUserGroupRequest $request ListHostAccountsForUserGroupRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return ListHostAccountsForUserGroupResponse ListHostAccountsForUserGroupResponse
     */
    public function listHostAccountsForUserGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->hostAccountName)) {
            $query['HostAccountName'] = $request->hostAccountName;
        }
        if (!Utils::isUnset($request->hostId)) {
            $query['HostId'] = $request->hostId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->userGroupId)) {
            $query['UserGroupId'] = $request->userGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListHostAccountsForUserGroup',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListHostAccountsForUserGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the host accounts of the specified host that the specified user group is authorized to manage.
     *  *
     * @param ListHostAccountsForUserGroupRequest $request ListHostAccountsForUserGroupRequest
     *
     * @return ListHostAccountsForUserGroupResponse ListHostAccountsForUserGroupResponse
     */
    public function listHostAccountsForUserGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listHostAccountsForUserGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the names of the host accounts that a specified user is authorized to manage in a specified host group.
     *  *
     * @param ListHostGroupAccountNamesForUserRequest $request ListHostGroupAccountNamesForUserRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return ListHostGroupAccountNamesForUserResponse ListHostGroupAccountNamesForUserResponse
     */
    public function listHostGroupAccountNamesForUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->hostGroupId)) {
            $query['HostGroupId'] = $request->hostGroupId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListHostGroupAccountNamesForUser',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListHostGroupAccountNamesForUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the names of the host accounts that a specified user is authorized to manage in a specified host group.
     *  *
     * @param ListHostGroupAccountNamesForUserRequest $request ListHostGroupAccountNamesForUserRequest
     *
     * @return ListHostGroupAccountNamesForUserResponse ListHostGroupAccountNamesForUserResponse
     */
    public function listHostGroupAccountNamesForUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listHostGroupAccountNamesForUserWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the names of the host accounts that a user group is authorized to manage in a host group.
     *  *
     * @param ListHostGroupAccountNamesForUserGroupRequest $request ListHostGroupAccountNamesForUserGroupRequest
     * @param RuntimeOptions                               $runtime runtime options for this request RuntimeOptions
     *
     * @return ListHostGroupAccountNamesForUserGroupResponse ListHostGroupAccountNamesForUserGroupResponse
     */
    public function listHostGroupAccountNamesForUserGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->hostGroupId)) {
            $query['HostGroupId'] = $request->hostGroupId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->userGroupId)) {
            $query['UserGroupId'] = $request->userGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListHostGroupAccountNamesForUserGroup',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListHostGroupAccountNamesForUserGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the names of the host accounts that a user group is authorized to manage in a host group.
     *  *
     * @param ListHostGroupAccountNamesForUserGroupRequest $request ListHostGroupAccountNamesForUserGroupRequest
     *
     * @return ListHostGroupAccountNamesForUserGroupResponse ListHostGroupAccountNamesForUserGroupResponse
     */
    public function listHostGroupAccountNamesForUserGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listHostGroupAccountNamesForUserGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of asset groups that are managed by a bastion host.
     *  *
     * @param ListHostGroupsRequest $request ListHostGroupsRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return ListHostGroupsResponse ListHostGroupsResponse
     */
    public function listHostGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->hostGroupName)) {
            $query['HostGroupName'] = $request->hostGroupName;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListHostGroups',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListHostGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of asset groups that are managed by a bastion host.
     *  *
     * @param ListHostGroupsRequest $request ListHostGroupsRequest
     *
     * @return ListHostGroupsResponse ListHostGroupsResponse
     */
    public function listHostGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listHostGroupsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of host groups that a bastion host user is authorized or is not authorized to manage.
     *  *
     * @param ListHostGroupsForUserRequest $request ListHostGroupsForUserRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return ListHostGroupsForUserResponse ListHostGroupsForUserResponse
     */
    public function listHostGroupsForUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->hostGroupName)) {
            $query['HostGroupName'] = $request->hostGroupName;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->mode)) {
            $query['Mode'] = $request->mode;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListHostGroupsForUser',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListHostGroupsForUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of host groups that a bastion host user is authorized or is not authorized to manage.
     *  *
     * @param ListHostGroupsForUserRequest $request ListHostGroupsForUserRequest
     *
     * @return ListHostGroupsForUserResponse ListHostGroupsForUserResponse
     */
    public function listHostGroupsForUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listHostGroupsForUserWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the hosts that a specified user group is authorized or not authorized to manage.
     *  *
     * @param ListHostGroupsForUserGroupRequest $request ListHostGroupsForUserGroupRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return ListHostGroupsForUserGroupResponse ListHostGroupsForUserGroupResponse
     */
    public function listHostGroupsForUserGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->hostGroupName)) {
            $query['HostGroupName'] = $request->hostGroupName;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->mode)) {
            $query['Mode'] = $request->mode;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->userGroupId)) {
            $query['UserGroupId'] = $request->userGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListHostGroupsForUserGroup',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListHostGroupsForUserGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the hosts that a specified user group is authorized or not authorized to manage.
     *  *
     * @param ListHostGroupsForUserGroupRequest $request ListHostGroupsForUserGroupRequest
     *
     * @return ListHostGroupsForUserGroupResponse ListHostGroupsForUserGroupResponse
     */
    public function listHostGroupsForUserGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listHostGroupsForUserGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the shared keys that are associated with a host.
     *  *
     * @param ListHostShareKeysRequest $request ListHostShareKeysRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ListHostShareKeysResponse ListHostShareKeysResponse
     */
    public function listHostShareKeysWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListHostShareKeys',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListHostShareKeysResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the shared keys that are associated with a host.
     *  *
     * @param ListHostShareKeysRequest $request ListHostShareKeysRequest
     *
     * @return ListHostShareKeysResponse ListHostShareKeysResponse
     */
    public function listHostShareKeys($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listHostShareKeysWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the hosts in a bastion host.
     *  *
     * @param ListHostsRequest $request ListHostsRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return ListHostsResponse ListHostsResponse
     */
    public function listHostsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->hostAddress)) {
            $query['HostAddress'] = $request->hostAddress;
        }
        if (!Utils::isUnset($request->hostGroupId)) {
            $query['HostGroupId'] = $request->hostGroupId;
        }
        if (!Utils::isUnset($request->hostName)) {
            $query['HostName'] = $request->hostName;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->OSType)) {
            $query['OSType'] = $request->OSType;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        if (!Utils::isUnset($request->sourceInstanceId)) {
            $query['SourceInstanceId'] = $request->sourceInstanceId;
        }
        if (!Utils::isUnset($request->sourceInstanceState)) {
            $query['SourceInstanceState'] = $request->sourceInstanceState;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListHosts',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListHostsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the hosts in a bastion host.
     *  *
     * @param ListHostsRequest $request ListHostsRequest
     *
     * @return ListHostsResponse ListHostsResponse
     */
    public function listHosts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listHostsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the hosts that a user group is authorized or not authorized to manage.
     *  *
     * @param ListHostsForUserRequest $request ListHostsForUserRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ListHostsForUserResponse ListHostsForUserResponse
     */
    public function listHostsForUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->hostAddress)) {
            $query['HostAddress'] = $request->hostAddress;
        }
        if (!Utils::isUnset($request->hostName)) {
            $query['HostName'] = $request->hostName;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->mode)) {
            $query['Mode'] = $request->mode;
        }
        if (!Utils::isUnset($request->OSType)) {
            $query['OSType'] = $request->OSType;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListHostsForUser',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListHostsForUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the hosts that a user group is authorized or not authorized to manage.
     *  *
     * @param ListHostsForUserRequest $request ListHostsForUserRequest
     *
     * @return ListHostsForUserResponse ListHostsForUserResponse
     */
    public function listHostsForUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listHostsForUserWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the hosts that a user group is authorized or not authorized to manage.
     *  *
     * @param ListHostsForUserGroupRequest $request ListHostsForUserGroupRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return ListHostsForUserGroupResponse ListHostsForUserGroupResponse
     */
    public function listHostsForUserGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->hostAddress)) {
            $query['HostAddress'] = $request->hostAddress;
        }
        if (!Utils::isUnset($request->hostName)) {
            $query['HostName'] = $request->hostName;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->mode)) {
            $query['Mode'] = $request->mode;
        }
        if (!Utils::isUnset($request->OSType)) {
            $query['OSType'] = $request->OSType;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->userGroupId)) {
            $query['UserGroupId'] = $request->userGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListHostsForUserGroup',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListHostsForUserGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the hosts that a user group is authorized or not authorized to manage.
     *  *
     * @param ListHostsForUserGroupRequest $request ListHostsForUserGroupRequest
     *
     * @return ListHostsForUserGroupResponse ListHostsForUserGroupResponse
     */
    public function listHostsForUserGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listHostsForUserGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the network domains created in a bastion host.
     *  *
     * @param ListNetworkDomainsRequest $request ListNetworkDomainsRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ListNetworkDomainsResponse ListNetworkDomainsResponse
     */
    public function listNetworkDomainsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->networkDomainName)) {
            $query['NetworkDomainName'] = $request->networkDomainName;
        }
        if (!Utils::isUnset($request->networkDomainType)) {
            $query['NetworkDomainType'] = $request->networkDomainType;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListNetworkDomains',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListNetworkDomainsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the network domains created in a bastion host.
     *  *
     * @param ListNetworkDomainsRequest $request ListNetworkDomainsRequest
     *
     * @return ListNetworkDomainsResponse ListNetworkDomainsResponse
     */
    public function listNetworkDomains($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listNetworkDomainsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of database accounts that the current Resource Access Management (RAM) user is authorized to manage.
     *  *
     * @param ListOperationDatabaseAccountsRequest $request ListOperationDatabaseAccountsRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return ListOperationDatabaseAccountsResponse ListOperationDatabaseAccountsResponse
     */
    public function listOperationDatabaseAccountsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->databaseAccountName)) {
            $query['DatabaseAccountName'] = $request->databaseAccountName;
        }
        if (!Utils::isUnset($request->databaseId)) {
            $query['DatabaseId'] = $request->databaseId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListOperationDatabaseAccounts',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListOperationDatabaseAccountsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of database accounts that the current Resource Access Management (RAM) user is authorized to manage.
     *  *
     * @param ListOperationDatabaseAccountsRequest $request ListOperationDatabaseAccountsRequest
     *
     * @return ListOperationDatabaseAccountsResponse ListOperationDatabaseAccountsResponse
     */
    public function listOperationDatabaseAccounts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listOperationDatabaseAccountsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of databases that the current Resource Access Management (RAM) user is authorized to manage.
     *  *
     * @param ListOperationDatabasesRequest $request ListOperationDatabasesRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return ListOperationDatabasesResponse ListOperationDatabasesResponse
     */
    public function listOperationDatabasesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->databaseAddress)) {
            $query['DatabaseAddress'] = $request->databaseAddress;
        }
        if (!Utils::isUnset($request->databaseName)) {
            $query['DatabaseName'] = $request->databaseName;
        }
        if (!Utils::isUnset($request->databaseType)) {
            $query['DatabaseType'] = $request->databaseType;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        if (!Utils::isUnset($request->sourceInstanceId)) {
            $query['SourceInstanceId'] = $request->sourceInstanceId;
        }
        if (!Utils::isUnset($request->sourceInstanceState)) {
            $query['SourceInstanceState'] = $request->sourceInstanceState;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListOperationDatabases',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListOperationDatabasesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of databases that the current Resource Access Management (RAM) user is authorized to manage.
     *  *
     * @param ListOperationDatabasesRequest $request ListOperationDatabasesRequest
     *
     * @return ListOperationDatabasesResponse ListOperationDatabasesResponse
     */
    public function listOperationDatabases($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listOperationDatabasesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of host accounts that the current Resource Access Management (RAM) user is authorized to manage.
     *  *
     * @param ListOperationHostAccountsRequest $request ListOperationHostAccountsRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return ListOperationHostAccountsResponse ListOperationHostAccountsResponse
     */
    public function listOperationHostAccountsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->hostAccountName)) {
            $query['HostAccountName'] = $request->hostAccountName;
        }
        if (!Utils::isUnset($request->hostId)) {
            $query['HostId'] = $request->hostId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListOperationHostAccounts',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListOperationHostAccountsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of host accounts that the current Resource Access Management (RAM) user is authorized to manage.
     *  *
     * @param ListOperationHostAccountsRequest $request ListOperationHostAccountsRequest
     *
     * @return ListOperationHostAccountsResponse ListOperationHostAccountsResponse
     */
    public function listOperationHostAccounts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listOperationHostAccountsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of hosts that the current Resource Access Management (RAM) user is authorized to manage.
     *  *
     * @param ListOperationHostsRequest $request ListOperationHostsRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ListOperationHostsResponse ListOperationHostsResponse
     */
    public function listOperationHostsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->hostAddress)) {
            $query['HostAddress'] = $request->hostAddress;
        }
        if (!Utils::isUnset($request->hostName)) {
            $query['HostName'] = $request->hostName;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->OSType)) {
            $query['OSType'] = $request->OSType;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        if (!Utils::isUnset($request->sourceInstanceId)) {
            $query['SourceInstanceId'] = $request->sourceInstanceId;
        }
        if (!Utils::isUnset($request->sourceInstanceState)) {
            $query['SourceInstanceState'] = $request->sourceInstanceState;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListOperationHosts',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListOperationHostsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of hosts that the current Resource Access Management (RAM) user is authorized to manage.
     *  *
     * @param ListOperationHostsRequest $request ListOperationHostsRequest
     *
     * @return ListOperationHostsResponse ListOperationHostsResponse
     */
    public function listOperationHosts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listOperationHostsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries O\\\\\\&M applications to be reviewed.
     *  *
     * @description You can call this operation to query the O\\&M applications to be reviewed by a Bastionhost administrator.
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param ListOperationTicketsRequest $request ListOperationTicketsRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return ListOperationTicketsResponse ListOperationTicketsResponse
     */
    public function listOperationTicketsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->assetAddress)) {
            $query['AssetAddress'] = $request->assetAddress;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListOperationTickets',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListOperationTicketsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries O\\\\\\&M applications to be reviewed.
     *  *
     * @description You can call this operation to query the O\\&M applications to be reviewed by a Bastionhost administrator.
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param ListOperationTicketsRequest $request ListOperationTicketsRequest
     *
     * @return ListOperationTicketsResponse ListOperationTicketsResponse
     */
    public function listOperationTickets($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listOperationTicketsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of control policies.
     *  *
     * @param ListPoliciesRequest $request ListPoliciesRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return ListPoliciesResponse ListPoliciesResponse
     */
    public function listPoliciesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->policyName)) {
            $query['PolicyName'] = $request->policyName;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListPolicies',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListPoliciesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of control policies.
     *  *
     * @param ListPoliciesRequest $request ListPoliciesRequest
     *
     * @return ListPoliciesResponse ListPoliciesResponse
     */
    public function listPolicies($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPoliciesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of authorization rules of a bastion host.
     *  *
     * @param ListRulesRequest $request ListRulesRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return ListRulesResponse ListRulesResponse
     */
    public function listRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->ruleName)) {
            $query['RuleName'] = $request->ruleName;
        }
        if (!Utils::isUnset($request->ruleState)) {
            $query['RuleState'] = $request->ruleState;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListRules',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of authorization rules of a bastion host.
     *  *
     * @param ListRulesRequest $request ListRulesRequest
     *
     * @return ListRulesResponse ListRulesResponse
     */
    public function listRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRulesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the tags that are added to a resource.
     *  *
     * @param ListTagKeysRequest $request ListTagKeysRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTagKeysResponse ListTagKeysResponse
     */
    public function listTagKeysWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTagKeys',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListTagKeysResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the tags that are added to a resource.
     *  *
     * @param ListTagKeysRequest $request ListTagKeysRequest
     *
     * @return ListTagKeysResponse ListTagKeysResponse
     */
    public function listTagKeys($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTagKeysWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the tags bound to one or more Bastionhost instances.
     *  *
     * @param ListTagResourcesRequest $request ListTagResourcesRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTagResourcesResponse ListTagResourcesResponse
     */
    public function listTagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTagResources',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListTagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the tags bound to one or more Bastionhost instances.
     *  *
     * @param ListTagResourcesRequest $request ListTagResourcesRequest
     *
     * @return ListTagResourcesResponse ListTagResourcesResponse
     */
    public function listTagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTagResourcesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of user groups on a bastion host.
     *  *
     * @param ListUserGroupsRequest $request ListUserGroupsRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return ListUserGroupsResponse ListUserGroupsResponse
     */
    public function listUserGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->userGroupName)) {
            $query['UserGroupName'] = $request->userGroupName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListUserGroups',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListUserGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of user groups on a bastion host.
     *  *
     * @param ListUserGroupsRequest $request ListUserGroupsRequest
     *
     * @return ListUserGroupsResponse ListUserGroupsResponse
     */
    public function listUserGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUserGroupsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries all public keys of the specified user.
     *  *
     * @param ListUserPublicKeysRequest $request ListUserPublicKeysRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ListUserPublicKeysResponse ListUserPublicKeysResponse
     */
    public function listUserPublicKeysWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListUserPublicKeys',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListUserPublicKeysResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries all public keys of the specified user.
     *  *
     * @param ListUserPublicKeysRequest $request ListUserPublicKeysRequest
     *
     * @return ListUserPublicKeysResponse ListUserPublicKeysResponse
     */
    public function listUserPublicKeys($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUserPublicKeysWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of users of a bastion host.
     *  *
     * @param ListUsersRequest $request ListUsersRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return ListUsersResponse ListUsersResponse
     */
    public function listUsersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->displayName)) {
            $query['DisplayName'] = $request->displayName;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->mobile)) {
            $query['Mobile'] = $request->mobile;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        if (!Utils::isUnset($request->sourceUserId)) {
            $query['SourceUserId'] = $request->sourceUserId;
        }
        if (!Utils::isUnset($request->userGroupId)) {
            $query['UserGroupId'] = $request->userGroupId;
        }
        if (!Utils::isUnset($request->userName)) {
            $query['UserName'] = $request->userName;
        }
        if (!Utils::isUnset($request->userState)) {
            $query['UserState'] = $request->userState;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListUsers',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of users of a bastion host.
     *  *
     * @param ListUsersRequest $request ListUsersRequest
     *
     * @return ListUsersResponse ListUsersResponse
     */
    public function listUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUsersWithOptions($request, $runtime);
    }

    /**
     * @summary Locks one or more users of a bastion host.
     *  *
     * @description # Description
     * You can call this operation to lock one or more users of a bastion host. If a user does not need to use a bastion host to perform O\\&M operations within a specific period of time, you can lock the user. The locked user can no longer log on to or perform O\\&M operations on the hosts on which the user is granted permissions. If you want to unlock the user later, you can call the [UnlockUsers](https://help.aliyun.com/document_detail/204590.html) operation.
     * # Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
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
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->userIds)) {
            $query['UserIds'] = $request->userIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'LockUsers',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return LockUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Locks one or more users of a bastion host.
     *  *
     * @description # Description
     * You can call this operation to lock one or more users of a bastion host. If a user does not need to use a bastion host to perform O\\&M operations within a specific period of time, you can lock the user. The locked user can no longer log on to or perform O\\&M operations on the hosts on which the user is granted permissions. If you want to unlock the user later, you can call the [UnlockUsers](https://help.aliyun.com/document_detail/204590.html) operation.
     * # Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
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
     * @summary Modifies the basic information about a database.
     *  *
     * @param ModifyDatabaseRequest $request ModifyDatabaseRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDatabaseResponse ModifyDatabaseResponse
     */
    public function modifyDatabaseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->activeAddressType)) {
            $query['ActiveAddressType'] = $request->activeAddressType;
        }
        if (!Utils::isUnset($request->comment)) {
            $query['Comment'] = $request->comment;
        }
        if (!Utils::isUnset($request->databaseId)) {
            $query['DatabaseId'] = $request->databaseId;
        }
        if (!Utils::isUnset($request->databaseName)) {
            $query['DatabaseName'] = $request->databaseName;
        }
        if (!Utils::isUnset($request->databasePort)) {
            $query['DatabasePort'] = $request->databasePort;
        }
        if (!Utils::isUnset($request->databasePrivateAddress)) {
            $query['DatabasePrivateAddress'] = $request->databasePrivateAddress;
        }
        if (!Utils::isUnset($request->databasePublicAddress)) {
            $query['DatabasePublicAddress'] = $request->databasePublicAddress;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->networkDomainId)) {
            $query['NetworkDomainId'] = $request->networkDomainId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->sourceInstanceId)) {
            $query['SourceInstanceId'] = $request->sourceInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyDatabase',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDatabaseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the basic information about a database.
     *  *
     * @param ModifyDatabaseRequest $request ModifyDatabaseRequest
     *
     * @return ModifyDatabaseResponse ModifyDatabaseResponse
     */
    public function modifyDatabase($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDatabaseWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the basic information about a database account.
     *  *
     * @param ModifyDatabaseAccountRequest $request ModifyDatabaseAccountRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDatabaseAccountResponse ModifyDatabaseAccountResponse
     */
    public function modifyDatabaseAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->databaseAccountId)) {
            $query['DatabaseAccountId'] = $request->databaseAccountId;
        }
        if (!Utils::isUnset($request->databaseAccountName)) {
            $query['DatabaseAccountName'] = $request->databaseAccountName;
        }
        if (!Utils::isUnset($request->databaseSchema)) {
            $query['DatabaseSchema'] = $request->databaseSchema;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->password)) {
            $query['Password'] = $request->password;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyDatabaseAccount',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDatabaseAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the basic information about a database account.
     *  *
     * @param ModifyDatabaseAccountRequest $request ModifyDatabaseAccountRequest
     *
     * @return ModifyDatabaseAccountResponse ModifyDatabaseAccountResponse
     */
    public function modifyDatabaseAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDatabaseAccountWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies information about a host. The information includes the address, name, and description of the host and the operating system that the host runs.
     *  *
     * @description You can call the ModifyHost operation to modify the basic information about a host in a data center, an Elastic Compute Service (ECS) instance, or a host in an ApsaraDB MyBase dedicated cluster.
     * > The basic information about ECS instances and hosts in ApsaraDB MyBase dedicated clusters within your Alibaba Cloud account is synchronized to Bastionhost on a regular basis. After you modify the basic information about an ECS instance or a host in an ApsaraDB MyBase dedicated cluster, the modification result may be overwritten by the synchronized information.
     *  *
     * @param ModifyHostRequest $request ModifyHostRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyHostResponse ModifyHostResponse
     */
    public function modifyHostWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->comment)) {
            $query['Comment'] = $request->comment;
        }
        if (!Utils::isUnset($request->hostId)) {
            $query['HostId'] = $request->hostId;
        }
        if (!Utils::isUnset($request->hostName)) {
            $query['HostName'] = $request->hostName;
        }
        if (!Utils::isUnset($request->hostPrivateAddress)) {
            $query['HostPrivateAddress'] = $request->hostPrivateAddress;
        }
        if (!Utils::isUnset($request->hostPublicAddress)) {
            $query['HostPublicAddress'] = $request->hostPublicAddress;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->networkDomainId)) {
            $query['NetworkDomainId'] = $request->networkDomainId;
        }
        if (!Utils::isUnset($request->OSType)) {
            $query['OSType'] = $request->OSType;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyHost',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyHostResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies information about a host. The information includes the address, name, and description of the host and the operating system that the host runs.
     *  *
     * @description You can call the ModifyHost operation to modify the basic information about a host in a data center, an Elastic Compute Service (ECS) instance, or a host in an ApsaraDB MyBase dedicated cluster.
     * > The basic information about ECS instances and hosts in ApsaraDB MyBase dedicated clusters within your Alibaba Cloud account is synchronized to Bastionhost on a regular basis. After you modify the basic information about an ECS instance or a host in an ApsaraDB MyBase dedicated cluster, the modification result may be overwritten by the synchronized information.
     *  *
     * @param ModifyHostRequest $request ModifyHostRequest
     *
     * @return ModifyHostResponse ModifyHostResponse
     */
    public function modifyHost($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyHostWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the information about a host account, such as the username, password, and private key of the host account.
     *  *
     * @param ModifyHostAccountRequest $request ModifyHostAccountRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyHostAccountResponse ModifyHostAccountResponse
     */
    public function modifyHostAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->hostAccountId)) {
            $query['HostAccountId'] = $request->hostAccountId;
        }
        if (!Utils::isUnset($request->hostAccountName)) {
            $query['HostAccountName'] = $request->hostAccountName;
        }
        if (!Utils::isUnset($request->hostShareKeyId)) {
            $query['HostShareKeyId'] = $request->hostShareKeyId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->passPhrase)) {
            $query['PassPhrase'] = $request->passPhrase;
        }
        if (!Utils::isUnset($request->password)) {
            $query['Password'] = $request->password;
        }
        if (!Utils::isUnset($request->privateKey)) {
            $query['PrivateKey'] = $request->privateKey;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyHostAccount',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyHostAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the information about a host account, such as the username, password, and private key of the host account.
     *  *
     * @param ModifyHostAccountRequest $request ModifyHostAccountRequest
     *
     * @return ModifyHostAccountResponse ModifyHostAccountResponse
     */
    public function modifyHostAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyHostAccountWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the name or description of the specified host group.
     *  *
     * @param ModifyHostGroupRequest $request ModifyHostGroupRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyHostGroupResponse ModifyHostGroupResponse
     */
    public function modifyHostGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->comment)) {
            $query['Comment'] = $request->comment;
        }
        if (!Utils::isUnset($request->hostGroupId)) {
            $query['HostGroupId'] = $request->hostGroupId;
        }
        if (!Utils::isUnset($request->hostGroupName)) {
            $query['HostGroupName'] = $request->hostGroupName;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyHostGroup',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyHostGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the name or description of the specified host group.
     *  *
     * @param ModifyHostGroupRequest $request ModifyHostGroupRequest
     *
     * @return ModifyHostGroupResponse ModifyHostGroupResponse
     */
    public function modifyHostGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyHostGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies a shared key.
     *  *
     * @param ModifyHostShareKeyRequest $request ModifyHostShareKeyRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyHostShareKeyResponse ModifyHostShareKeyResponse
     */
    public function modifyHostShareKeyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->hostShareKeyId)) {
            $query['HostShareKeyId'] = $request->hostShareKeyId;
        }
        if (!Utils::isUnset($request->hostShareKeyName)) {
            $query['HostShareKeyName'] = $request->hostShareKeyName;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->passPhrase)) {
            $query['PassPhrase'] = $request->passPhrase;
        }
        if (!Utils::isUnset($request->privateKey)) {
            $query['PrivateKey'] = $request->privateKey;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyHostShareKey',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyHostShareKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies a shared key.
     *  *
     * @param ModifyHostShareKeyRequest $request ModifyHostShareKeyRequest
     *
     * @return ModifyHostShareKeyResponse ModifyHostShareKeyResponse
     */
    public function modifyHostShareKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyHostShareKeyWithOptions($request, $runtime);
    }

    /**
     * @summary Changes the portal type of one or more hosts for O\\&M.
     *  *
     * @param ModifyHostsActiveAddressTypeRequest $request ModifyHostsActiveAddressTypeRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyHostsActiveAddressTypeResponse ModifyHostsActiveAddressTypeResponse
     */
    public function modifyHostsActiveAddressTypeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->activeAddressType)) {
            $query['ActiveAddressType'] = $request->activeAddressType;
        }
        if (!Utils::isUnset($request->hostIds)) {
            $query['HostIds'] = $request->hostIds;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyHostsActiveAddressType',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyHostsActiveAddressTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Changes the portal type of one or more hosts for O\\&M.
     *  *
     * @param ModifyHostsActiveAddressTypeRequest $request ModifyHostsActiveAddressTypeRequest
     *
     * @return ModifyHostsActiveAddressTypeResponse ModifyHostsActiveAddressTypeResponse
     */
    public function modifyHostsActiveAddressType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyHostsActiveAddressTypeWithOptions($request, $runtime);
    }

    /**
     * @summary Changes the port for the O\\\\\\\\\\\\&M protocol on one or more hosts.
     *  *
     * @description ## Usage notes
     * You can call this operation to change the port for the O&M protocol on one or more hosts. If the standard port for the O&M protocol on your host is vulnerable to attacks, you can call this operation to specify a custom port. For example, the standard port for SSH is port 22.
     * >  Ports 0 to 1024 are reserved for Bastionhost. Do not change the port for the O&M protocol to a reserved port.
     * ## QPS limit
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param ModifyHostsPortRequest $request ModifyHostsPortRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyHostsPortResponse ModifyHostsPortResponse
     */
    public function modifyHostsPortWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->hostIds)) {
            $query['HostIds'] = $request->hostIds;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->port)) {
            $query['Port'] = $request->port;
        }
        if (!Utils::isUnset($request->protocolName)) {
            $query['ProtocolName'] = $request->protocolName;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyHostsPort',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyHostsPortResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Changes the port for the O\\\\\\\\\\\\&M protocol on one or more hosts.
     *  *
     * @description ## Usage notes
     * You can call this operation to change the port for the O&M protocol on one or more hosts. If the standard port for the O&M protocol on your host is vulnerable to attacks, you can call this operation to specify a custom port. For example, the standard port for SSH is port 22.
     * >  Ports 0 to 1024 are reserved for Bastionhost. Do not change the port for the O&M protocol to a reserved port.
     * ## QPS limit
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param ModifyHostsPortRequest $request ModifyHostsPortRequest
     *
     * @return ModifyHostsPortResponse ModifyHostsPortResponse
     */
    public function modifyHostsPort($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyHostsPortWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the settings of the Active Directory (AD) authentication server of a bastion host.
     *  *
     * @param ModifyInstanceADAuthServerRequest $request ModifyInstanceADAuthServerRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyInstanceADAuthServerResponse ModifyInstanceADAuthServerResponse
     */
    public function modifyInstanceADAuthServerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->account)) {
            $query['Account'] = $request->account;
        }
        if (!Utils::isUnset($request->baseDN)) {
            $query['BaseDN'] = $request->baseDN;
        }
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->emailMapping)) {
            $query['EmailMapping'] = $request->emailMapping;
        }
        if (!Utils::isUnset($request->filter)) {
            $query['Filter'] = $request->filter;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->isSSL)) {
            $query['IsSSL'] = $request->isSSL;
        }
        if (!Utils::isUnset($request->mobileMapping)) {
            $query['MobileMapping'] = $request->mobileMapping;
        }
        if (!Utils::isUnset($request->nameMapping)) {
            $query['NameMapping'] = $request->nameMapping;
        }
        if (!Utils::isUnset($request->password)) {
            $query['Password'] = $request->password;
        }
        if (!Utils::isUnset($request->port)) {
            $query['Port'] = $request->port;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->server)) {
            $query['Server'] = $request->server;
        }
        if (!Utils::isUnset($request->standbyServer)) {
            $query['StandbyServer'] = $request->standbyServer;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyInstanceADAuthServer',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyInstanceADAuthServerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the settings of the Active Directory (AD) authentication server of a bastion host.
     *  *
     * @param ModifyInstanceADAuthServerRequest $request ModifyInstanceADAuthServerRequest
     *
     * @return ModifyInstanceADAuthServerResponse ModifyInstanceADAuthServerResponse
     */
    public function modifyInstanceADAuthServer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceADAuthServerWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the information about a bastion host.
     *  *
     * @param ModifyInstanceAttributeRequest $request ModifyInstanceAttributeRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyInstanceAttributeResponse ModifyInstanceAttributeResponse
     */
    public function modifyInstanceAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyInstanceAttribute',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyInstanceAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the information about a bastion host.
     *  *
     * @param ModifyInstanceAttributeRequest $request ModifyInstanceAttributeRequest
     *
     * @return ModifyInstanceAttributeResponse ModifyInstanceAttributeResponse
     */
    public function modifyInstanceAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceAttributeWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the settings of the Lightweight Directory Access Protocol (LDAP) authentication server of a bastion host.
     *  *
     * @param ModifyInstanceLDAPAuthServerRequest $request ModifyInstanceLDAPAuthServerRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyInstanceLDAPAuthServerResponse ModifyInstanceLDAPAuthServerResponse
     */
    public function modifyInstanceLDAPAuthServerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->account)) {
            $query['Account'] = $request->account;
        }
        if (!Utils::isUnset($request->baseDN)) {
            $query['BaseDN'] = $request->baseDN;
        }
        if (!Utils::isUnset($request->emailMapping)) {
            $query['EmailMapping'] = $request->emailMapping;
        }
        if (!Utils::isUnset($request->filter)) {
            $query['Filter'] = $request->filter;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->isSSL)) {
            $query['IsSSL'] = $request->isSSL;
        }
        if (!Utils::isUnset($request->loginNameMapping)) {
            $query['LoginNameMapping'] = $request->loginNameMapping;
        }
        if (!Utils::isUnset($request->mobileMapping)) {
            $query['MobileMapping'] = $request->mobileMapping;
        }
        if (!Utils::isUnset($request->nameMapping)) {
            $query['NameMapping'] = $request->nameMapping;
        }
        if (!Utils::isUnset($request->password)) {
            $query['Password'] = $request->password;
        }
        if (!Utils::isUnset($request->port)) {
            $query['Port'] = $request->port;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->server)) {
            $query['Server'] = $request->server;
        }
        if (!Utils::isUnset($request->standbyServer)) {
            $query['StandbyServer'] = $request->standbyServer;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyInstanceLDAPAuthServer',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyInstanceLDAPAuthServerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the settings of the Lightweight Directory Access Protocol (LDAP) authentication server of a bastion host.
     *  *
     * @param ModifyInstanceLDAPAuthServerRequest $request ModifyInstanceLDAPAuthServerRequest
     *
     * @return ModifyInstanceLDAPAuthServerResponse ModifyInstanceLDAPAuthServerResponse
     */
    public function modifyInstanceLDAPAuthServer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceLDAPAuthServerWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the two-factor authentication settings of a bastion host.
     *  *
     * @param ModifyInstanceTwoFactorRequest $request ModifyInstanceTwoFactorRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyInstanceTwoFactorResponse ModifyInstanceTwoFactorResponse
     */
    public function modifyInstanceTwoFactorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->enableTwoFactor)) {
            $query['EnableTwoFactor'] = $request->enableTwoFactor;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->skipTwoFactorTime)) {
            $query['SkipTwoFactorTime'] = $request->skipTwoFactorTime;
        }
        if (!Utils::isUnset($request->twoFactorMethods)) {
            $query['TwoFactorMethods'] = $request->twoFactorMethods;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyInstanceTwoFactor',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyInstanceTwoFactorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the two-factor authentication settings of a bastion host.
     *  *
     * @param ModifyInstanceTwoFactorRequest $request ModifyInstanceTwoFactorRequest
     *
     * @return ModifyInstanceTwoFactorResponse ModifyInstanceTwoFactorResponse
     */
    public function modifyInstanceTwoFactor($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceTwoFactorWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the basic information about a network domain.
     *  *
     * @param ModifyNetworkDomainRequest $request ModifyNetworkDomainRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyNetworkDomainResponse ModifyNetworkDomainResponse
     */
    public function modifyNetworkDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->comment)) {
            $query['Comment'] = $request->comment;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->networkDomainId)) {
            $query['NetworkDomainId'] = $request->networkDomainId;
        }
        if (!Utils::isUnset($request->networkDomainName)) {
            $query['NetworkDomainName'] = $request->networkDomainName;
        }
        if (!Utils::isUnset($request->networkDomainType)) {
            $query['NetworkDomainType'] = $request->networkDomainType;
        }
        if (!Utils::isUnset($request->proxies)) {
            $query['Proxies'] = $request->proxies;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyNetworkDomain',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyNetworkDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the basic information about a network domain.
     *  *
     * @param ModifyNetworkDomainRequest $request ModifyNetworkDomainRequest
     *
     * @return ModifyNetworkDomainResponse ModifyNetworkDomainResponse
     */
    public function modifyNetworkDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyNetworkDomainWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the basic information about a control policy.
     *  *
     * @param ModifyPolicyRequest $request ModifyPolicyRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyPolicyResponse ModifyPolicyResponse
     */
    public function modifyPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->comment)) {
            $query['Comment'] = $request->comment;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->policyId)) {
            $query['PolicyId'] = $request->policyId;
        }
        if (!Utils::isUnset($request->policyName)) {
            $query['PolicyName'] = $request->policyName;
        }
        if (!Utils::isUnset($request->priority)) {
            $query['Priority'] = $request->priority;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyPolicy',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the basic information about a control policy.
     *  *
     * @param ModifyPolicyRequest $request ModifyPolicyRequest
     *
     * @return ModifyPolicyResponse ModifyPolicyResponse
     */
    public function modifyPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyPolicyWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the basic information of an authorization rule.
     *  *
     * @param ModifyRuleRequest $request ModifyRuleRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyRuleResponse ModifyRuleResponse
     */
    public function modifyRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->comment)) {
            $query['Comment'] = $request->comment;
        }
        if (!Utils::isUnset($request->databases)) {
            $query['Databases'] = $request->databases;
        }
        if (!Utils::isUnset($request->effectiveEndTime)) {
            $query['EffectiveEndTime'] = $request->effectiveEndTime;
        }
        if (!Utils::isUnset($request->effectiveStartTime)) {
            $query['EffectiveStartTime'] = $request->effectiveStartTime;
        }
        if (!Utils::isUnset($request->hostGroups)) {
            $query['HostGroups'] = $request->hostGroups;
        }
        if (!Utils::isUnset($request->hosts)) {
            $query['Hosts'] = $request->hosts;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->ruleId)) {
            $query['RuleId'] = $request->ruleId;
        }
        if (!Utils::isUnset($request->ruleName)) {
            $query['RuleName'] = $request->ruleName;
        }
        if (!Utils::isUnset($request->userGroupIds)) {
            $query['UserGroupIds'] = $request->userGroupIds;
        }
        if (!Utils::isUnset($request->userIds)) {
            $query['UserIds'] = $request->userIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyRule',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the basic information of an authorization rule.
     *  *
     * @param ModifyRuleRequest $request ModifyRuleRequest
     *
     * @return ModifyRuleResponse ModifyRuleResponse
     */
    public function modifyRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyRuleWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the information about a user of a bastion host.
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
        if (!Utils::isUnset($request->comment)) {
            $query['Comment'] = $request->comment;
        }
        if (!Utils::isUnset($request->displayName)) {
            $query['DisplayName'] = $request->displayName;
        }
        if (!Utils::isUnset($request->effectiveEndTime)) {
            $query['EffectiveEndTime'] = $request->effectiveEndTime;
        }
        if (!Utils::isUnset($request->effectiveStartTime)) {
            $query['EffectiveStartTime'] = $request->effectiveStartTime;
        }
        if (!Utils::isUnset($request->email)) {
            $query['Email'] = $request->email;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->language)) {
            $query['Language'] = $request->language;
        }
        if (!Utils::isUnset($request->languageStatus)) {
            $query['LanguageStatus'] = $request->languageStatus;
        }
        if (!Utils::isUnset($request->mobile)) {
            $query['Mobile'] = $request->mobile;
        }
        if (!Utils::isUnset($request->mobileCountryCode)) {
            $query['MobileCountryCode'] = $request->mobileCountryCode;
        }
        if (!Utils::isUnset($request->needResetPassword)) {
            $query['NeedResetPassword'] = $request->needResetPassword;
        }
        if (!Utils::isUnset($request->password)) {
            $query['Password'] = $request->password;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->twoFactorMethods)) {
            $query['TwoFactorMethods'] = $request->twoFactorMethods;
        }
        if (!Utils::isUnset($request->twoFactorStatus)) {
            $query['TwoFactorStatus'] = $request->twoFactorStatus;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyUser',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the information about a user of a bastion host.
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
     * @summary Modifies the information about the specified user group.
     *  *
     * @param ModifyUserGroupRequest $request ModifyUserGroupRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyUserGroupResponse ModifyUserGroupResponse
     */
    public function modifyUserGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->comment)) {
            $query['Comment'] = $request->comment;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->userGroupId)) {
            $query['UserGroupId'] = $request->userGroupId;
        }
        if (!Utils::isUnset($request->userGroupName)) {
            $query['UserGroupName'] = $request->userGroupName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyUserGroup',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyUserGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the information about the specified user group.
     *  *
     * @param ModifyUserGroupRequest $request ModifyUserGroupRequest
     *
     * @return ModifyUserGroupResponse ModifyUserGroupResponse
     */
    public function modifyUserGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyUserGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the public key of the user.
     *  *
     * @param ModifyUserPublicKeyRequest $request ModifyUserPublicKeyRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyUserPublicKeyResponse ModifyUserPublicKeyResponse
     */
    public function modifyUserPublicKeyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->comment)) {
            $query['Comment'] = $request->comment;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->publicKey)) {
            $query['PublicKey'] = $request->publicKey;
        }
        if (!Utils::isUnset($request->publicKeyId)) {
            $query['PublicKeyId'] = $request->publicKeyId;
        }
        if (!Utils::isUnset($request->publicKeyName)) {
            $query['PublicKeyName'] = $request->publicKeyName;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyUserPublicKey',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyUserPublicKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the public key of the user.
     *  *
     * @param ModifyUserPublicKeyRequest $request ModifyUserPublicKeyRequest
     *
     * @return ModifyUserPublicKeyResponse ModifyUserPublicKeyResponse
     */
    public function modifyUserPublicKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyUserPublicKeyWithOptions($request, $runtime);
    }

    /**
     * @summary Adds multiple databases to a network domain at a time.
     *  *
     * @param MoveDatabasesToNetworkDomainRequest $request MoveDatabasesToNetworkDomainRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return MoveDatabasesToNetworkDomainResponse MoveDatabasesToNetworkDomainResponse
     */
    public function moveDatabasesToNetworkDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->databaseIds)) {
            $query['DatabaseIds'] = $request->databaseIds;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->networkDomainId)) {
            $query['NetworkDomainId'] = $request->networkDomainId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'MoveDatabasesToNetworkDomain',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return MoveDatabasesToNetworkDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Adds multiple databases to a network domain at a time.
     *  *
     * @param MoveDatabasesToNetworkDomainRequest $request MoveDatabasesToNetworkDomainRequest
     *
     * @return MoveDatabasesToNetworkDomainResponse MoveDatabasesToNetworkDomainResponse
     */
    public function moveDatabasesToNetworkDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->moveDatabasesToNetworkDomainWithOptions($request, $runtime);
    }

    /**
     * @summary Adds multiple hosts to a network domain at a time.
     *  *
     * @param MoveHostsToNetworkDomainRequest $request MoveHostsToNetworkDomainRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return MoveHostsToNetworkDomainResponse MoveHostsToNetworkDomainResponse
     */
    public function moveHostsToNetworkDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->hostIds)) {
            $query['HostIds'] = $request->hostIds;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->networkDomainId)) {
            $query['NetworkDomainId'] = $request->networkDomainId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'MoveHostsToNetworkDomain',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return MoveHostsToNetworkDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Adds multiple hosts to a network domain at a time.
     *  *
     * @param MoveHostsToNetworkDomainRequest $request MoveHostsToNetworkDomainRequest
     *
     * @return MoveHostsToNetworkDomainResponse MoveHostsToNetworkDomainResponse
     */
    public function moveHostsToNetworkDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->moveHostsToNetworkDomainWithOptions($request, $runtime);
    }

    /**
     * @summary Moves a bastion host from one resource group to another resource group.
     *  *
     * @param MoveResourceGroupRequest $request MoveResourceGroupRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return MoveResourceGroupResponse MoveResourceGroupResponse
     */
    public function moveResourceGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'MoveResourceGroup',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return MoveResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Moves a bastion host from one resource group to another resource group.
     *  *
     * @param MoveResourceGroupRequest $request MoveResourceGroupRequest
     *
     * @return MoveResourceGroupResponse MoveResourceGroupResponse
     */
    public function moveResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->moveResourceGroupWithOptions($request, $runtime);
    }

    /**
     * @summary If an O\\&M engineer attempts to run a command specified in the Command Approval section of the Create Control Policy page, the administrator is notified to review the command in the Bastionhost console. The command can be run only after it is approved by the administrator.
     *  *
     * @description You can call this operation as a Bastionhost administrator to reject the request to run a command of an O\\&M engineer.
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param RejectApproveCommandRequest $request RejectApproveCommandRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return RejectApproveCommandResponse RejectApproveCommandResponse
     */
    public function rejectApproveCommandWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->commandId)) {
            $query['CommandId'] = $request->commandId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RejectApproveCommand',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RejectApproveCommandResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary If an O\\&M engineer attempts to run a command specified in the Command Approval section of the Create Control Policy page, the administrator is notified to review the command in the Bastionhost console. The command can be run only after it is approved by the administrator.
     *  *
     * @description You can call this operation as a Bastionhost administrator to reject the request to run a command of an O\\&M engineer.
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param RejectApproveCommandRequest $request RejectApproveCommandRequest
     *
     * @return RejectApproveCommandResponse RejectApproveCommandResponse
     */
    public function rejectApproveCommand($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->rejectApproveCommandWithOptions($request, $runtime);
    }

    /**
     * @summary If a Bastionhost administrator enables O\\&M Approval on the Create Control Policy page, O\\&M engineers can log on to assets to perform O\\&M operations only after the administrator approves their O\\&M applications.
     *  *
     * @description You can call this operation to reject an O\\&M application of an O\\&M engineer as a Bastionhost administrator.
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param RejectOperationTicketRequest $request RejectOperationTicketRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return RejectOperationTicketResponse RejectOperationTicketResponse
     */
    public function rejectOperationTicketWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->comment)) {
            $query['Comment'] = $request->comment;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->operationTicketId)) {
            $query['OperationTicketId'] = $request->operationTicketId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RejectOperationTicket',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RejectOperationTicketResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary If a Bastionhost administrator enables O\\&M Approval on the Create Control Policy page, O\\&M engineers can log on to assets to perform O\\&M operations only after the administrator approves their O\\&M applications.
     *  *
     * @description You can call this operation to reject an O\\&M application of an O\\&M engineer as a Bastionhost administrator.
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param RejectOperationTicketRequest $request RejectOperationTicketRequest
     *
     * @return RejectOperationTicketResponse RejectOperationTicketResponse
     */
    public function rejectOperationTicket($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->rejectOperationTicketWithOptions($request, $runtime);
    }

    /**
     * @summary Removes multiple databases from an asset group at a time.
     *  *
     * @param RemoveDatabasesFromGroupRequest $request RemoveDatabasesFromGroupRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return RemoveDatabasesFromGroupResponse RemoveDatabasesFromGroupResponse
     */
    public function removeDatabasesFromGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->databaseIds)) {
            $query['DatabaseIds'] = $request->databaseIds;
        }
        if (!Utils::isUnset($request->hostGroupId)) {
            $query['HostGroupId'] = $request->hostGroupId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RemoveDatabasesFromGroup',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemoveDatabasesFromGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Removes multiple databases from an asset group at a time.
     *  *
     * @param RemoveDatabasesFromGroupRequest $request RemoveDatabasesFromGroupRequest
     *
     * @return RemoveDatabasesFromGroupResponse RemoveDatabasesFromGroupResponse
     */
    public function removeDatabasesFromGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeDatabasesFromGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Removes multiple hosts from an asset group at a time.
     *  *
     * @description You can call the RemoveHostsFromGroup operation to remove multiple hosts from an asset group at a time. If you no longer need to manage some hosts in an asset group, you can call this operation to remove the hosts from the asset group.
     * # [](#qps-)QPS limit
     * You can call this API operation up to 10 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation.
     *  *
     * @param RemoveHostsFromGroupRequest $request RemoveHostsFromGroupRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return RemoveHostsFromGroupResponse RemoveHostsFromGroupResponse
     */
    public function removeHostsFromGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->hostGroupId)) {
            $query['HostGroupId'] = $request->hostGroupId;
        }
        if (!Utils::isUnset($request->hostIds)) {
            $query['HostIds'] = $request->hostIds;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RemoveHostsFromGroup',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemoveHostsFromGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Removes multiple hosts from an asset group at a time.
     *  *
     * @description You can call the RemoveHostsFromGroup operation to remove multiple hosts from an asset group at a time. If you no longer need to manage some hosts in an asset group, you can call this operation to remove the hosts from the asset group.
     * # [](#qps-)QPS limit
     * You can call this API operation up to 10 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation.
     *  *
     * @param RemoveHostsFromGroupRequest $request RemoveHostsFromGroupRequest
     *
     * @return RemoveHostsFromGroupResponse RemoveHostsFromGroupResponse
     */
    public function removeHostsFromGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeHostsFromGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Removes one or more users from a user group.
     *  *
     * @description You can call this operation to remove one or more users from a user group. When users in a user group are transferred to a new position, resign, or are switched to another user group, you can call this operation to remove the users from the current user group at a time.
     * ## QPS limit
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param RemoveUsersFromGroupRequest $request RemoveUsersFromGroupRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return RemoveUsersFromGroupResponse RemoveUsersFromGroupResponse
     */
    public function removeUsersFromGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->userGroupId)) {
            $query['UserGroupId'] = $request->userGroupId;
        }
        if (!Utils::isUnset($request->userIds)) {
            $query['UserIds'] = $request->userIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RemoveUsersFromGroup',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemoveUsersFromGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Removes one or more users from a user group.
     *  *
     * @description You can call this operation to remove one or more users from a user group. When users in a user group are transferred to a new position, resign, or are switched to another user group, you can call this operation to remove the users from the current user group at a time.
     * ## QPS limit
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param RemoveUsersFromGroupRequest $request RemoveUsersFromGroupRequest
     *
     * @return RemoveUsersFromGroupResponse RemoveUsersFromGroupResponse
     */
    public function removeUsersFromGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeUsersFromGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Renews an O\\&M token for one hour.
     *  *
     * @param RenewAssetOperationTokenRequest $request RenewAssetOperationTokenRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return RenewAssetOperationTokenResponse RenewAssetOperationTokenResponse
     */
    public function renewAssetOperationTokenWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->tokenId)) {
            $query['TokenId'] = $request->tokenId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RenewAssetOperationToken',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RenewAssetOperationTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Renews an O\\&M token for one hour.
     *  *
     * @param RenewAssetOperationTokenRequest $request RenewAssetOperationTokenRequest
     *
     * @return RenewAssetOperationTokenResponse RenewAssetOperationTokenResponse
     */
    public function renewAssetOperationToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->renewAssetOperationTokenWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes the logon credential of a specified host account. The logon credential can be the password or Secure Shell (SSH) private key.
     *  *
     * @param ResetHostAccountCredentialRequest $request ResetHostAccountCredentialRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return ResetHostAccountCredentialResponse ResetHostAccountCredentialResponse
     */
    public function resetHostAccountCredentialWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->credentialType)) {
            $query['CredentialType'] = $request->credentialType;
        }
        if (!Utils::isUnset($request->hostAccountId)) {
            $query['HostAccountId'] = $request->hostAccountId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ResetHostAccountCredential',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ResetHostAccountCredentialResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes the logon credential of a specified host account. The logon credential can be the password or Secure Shell (SSH) private key.
     *  *
     * @param ResetHostAccountCredentialRequest $request ResetHostAccountCredentialRequest
     *
     * @return ResetHostAccountCredentialResponse ResetHostAccountCredentialResponse
     */
    public function resetHostAccountCredential($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetHostAccountCredentialWithOptions($request, $runtime);
    }

    /**
     * @summary Configures the logon period limits in a control policy.
     *  *
     * @param SetPolicyAccessTimeRangeConfigRequest $tmpReq  SetPolicyAccessTimeRangeConfigRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return SetPolicyAccessTimeRangeConfigResponse SetPolicyAccessTimeRangeConfigResponse
     */
    public function setPolicyAccessTimeRangeConfigWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SetPolicyAccessTimeRangeConfigShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->accessTimeRangeConfig)) {
            $request->accessTimeRangeConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->accessTimeRangeConfig, 'AccessTimeRangeConfig', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->accessTimeRangeConfigShrink)) {
            $query['AccessTimeRangeConfig'] = $request->accessTimeRangeConfigShrink;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->policyId)) {
            $query['PolicyId'] = $request->policyId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetPolicyAccessTimeRangeConfig',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetPolicyAccessTimeRangeConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Configures the logon period limits in a control policy.
     *  *
     * @param SetPolicyAccessTimeRangeConfigRequest $request SetPolicyAccessTimeRangeConfigRequest
     *
     * @return SetPolicyAccessTimeRangeConfigResponse SetPolicyAccessTimeRangeConfigResponse
     */
    public function setPolicyAccessTimeRangeConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setPolicyAccessTimeRangeConfigWithOptions($request, $runtime);
    }

    /**
     * @summary Configures the O&M approval setting in a control policy.
     *  *
     * @param SetPolicyApprovalConfigRequest $tmpReq  SetPolicyApprovalConfigRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return SetPolicyApprovalConfigResponse SetPolicyApprovalConfigResponse
     */
    public function setPolicyApprovalConfigWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SetPolicyApprovalConfigShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->approvalConfig)) {
            $request->approvalConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->approvalConfig, 'ApprovalConfig', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->approvalConfigShrink)) {
            $query['ApprovalConfig'] = $request->approvalConfigShrink;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->policyId)) {
            $query['PolicyId'] = $request->policyId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetPolicyApprovalConfig',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetPolicyApprovalConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Configures the O&M approval setting in a control policy.
     *  *
     * @param SetPolicyApprovalConfigRequest $request SetPolicyApprovalConfigRequest
     *
     * @return SetPolicyApprovalConfigResponse SetPolicyApprovalConfigResponse
     */
    public function setPolicyApprovalConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setPolicyApprovalConfigWithOptions($request, $runtime);
    }

    /**
     * @summary Specifies the assets to which a control policy applies.
     *  *
     * @param SetPolicyAssetScopeRequest $request SetPolicyAssetScopeRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return SetPolicyAssetScopeResponse SetPolicyAssetScopeResponse
     */
    public function setPolicyAssetScopeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->databases)) {
            $query['Databases'] = $request->databases;
        }
        if (!Utils::isUnset($request->hostGroups)) {
            $query['HostGroups'] = $request->hostGroups;
        }
        if (!Utils::isUnset($request->hosts)) {
            $query['Hosts'] = $request->hosts;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->policyId)) {
            $query['PolicyId'] = $request->policyId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->scopeType)) {
            $query['ScopeType'] = $request->scopeType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetPolicyAssetScope',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetPolicyAssetScopeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Specifies the assets to which a control policy applies.
     *  *
     * @param SetPolicyAssetScopeRequest $request SetPolicyAssetScopeRequest
     *
     * @return SetPolicyAssetScopeResponse SetPolicyAssetScopeResponse
     */
    public function setPolicyAssetScope($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setPolicyAssetScopeWithOptions($request, $runtime);
    }

    /**
     * @summary Specifies the commands that can or cannot be run by the users or on the assets associated with the policy and the commands that must be reviewed.
     *  *
     * @param SetPolicyCommandConfigRequest $tmpReq  SetPolicyCommandConfigRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return SetPolicyCommandConfigResponse SetPolicyCommandConfigResponse
     */
    public function setPolicyCommandConfigWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SetPolicyCommandConfigShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->commandConfig)) {
            $request->commandConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->commandConfig, 'CommandConfig', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->commandConfigShrink)) {
            $query['CommandConfig'] = $request->commandConfigShrink;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->policyId)) {
            $query['PolicyId'] = $request->policyId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetPolicyCommandConfig',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetPolicyCommandConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Specifies the commands that can or cannot be run by the users or on the assets associated with the policy and the commands that must be reviewed.
     *  *
     * @param SetPolicyCommandConfigRequest $request SetPolicyCommandConfigRequest
     *
     * @return SetPolicyCommandConfigResponse SetPolicyCommandConfigResponse
     */
    public function setPolicyCommandConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setPolicyCommandConfigWithOptions($request, $runtime);
    }

    /**
     * @summary Configures access control settings in a control policy.
     *  *
     * @param SetPolicyIPAclConfigRequest $tmpReq  SetPolicyIPAclConfigRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return SetPolicyIPAclConfigResponse SetPolicyIPAclConfigResponse
     */
    public function setPolicyIPAclConfigWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SetPolicyIPAclConfigShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->IPAclConfig)) {
            $request->IPAclConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->IPAclConfig, 'IPAclConfig', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->IPAclConfigShrink)) {
            $query['IPAclConfig'] = $request->IPAclConfigShrink;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->policyId)) {
            $query['PolicyId'] = $request->policyId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetPolicyIPAclConfig',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetPolicyIPAclConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Configures access control settings in a control policy.
     *  *
     * @param SetPolicyIPAclConfigRequest $request SetPolicyIPAclConfigRequest
     *
     * @return SetPolicyIPAclConfigResponse SetPolicyIPAclConfigResponse
     */
    public function setPolicyIPAclConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setPolicyIPAclConfigWithOptions($request, $runtime);
    }

    /**
     * @summary Modify the protocol control settings in a control policy.
     *  *
     * @param SetPolicyProtocolConfigRequest $tmpReq  SetPolicyProtocolConfigRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return SetPolicyProtocolConfigResponse SetPolicyProtocolConfigResponse
     */
    public function setPolicyProtocolConfigWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SetPolicyProtocolConfigShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->protocolConfig)) {
            $request->protocolConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->protocolConfig, 'ProtocolConfig', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->policyId)) {
            $query['PolicyId'] = $request->policyId;
        }
        if (!Utils::isUnset($request->protocolConfigShrink)) {
            $query['ProtocolConfig'] = $request->protocolConfigShrink;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetPolicyProtocolConfig',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetPolicyProtocolConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modify the protocol control settings in a control policy.
     *  *
     * @param SetPolicyProtocolConfigRequest $request SetPolicyProtocolConfigRequest
     *
     * @return SetPolicyProtocolConfigResponse SetPolicyProtocolConfigResponse
     */
    public function setPolicyProtocolConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setPolicyProtocolConfigWithOptions($request, $runtime);
    }

    /**
     * @summary Specifies the users to whom a control policy applies.
     *  *
     * @param SetPolicyUserScopeRequest $request SetPolicyUserScopeRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return SetPolicyUserScopeResponse SetPolicyUserScopeResponse
     */
    public function setPolicyUserScopeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->policyId)) {
            $query['PolicyId'] = $request->policyId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->scopeType)) {
            $query['ScopeType'] = $request->scopeType;
        }
        if (!Utils::isUnset($request->userGroupIds)) {
            $query['UserGroupIds'] = $request->userGroupIds;
        }
        if (!Utils::isUnset($request->userIds)) {
            $query['UserIds'] = $request->userIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetPolicyUserScope',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetPolicyUserScopeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Specifies the users to whom a control policy applies.
     *  *
     * @param SetPolicyUserScopeRequest $request SetPolicyUserScopeRequest
     *
     * @return SetPolicyUserScopeResponse SetPolicyUserScopeResponse
     */
    public function setPolicyUserScope($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setPolicyUserScopeWithOptions($request, $runtime);
    }

    /**
     * @summary Enables the specified bastion host.
     *  *
     * @param StartInstanceRequest $request StartInstanceRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return StartInstanceResponse StartInstanceResponse
     */
    public function startInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->securityGroupIds)) {
            $query['SecurityGroupIds'] = $request->securityGroupIds;
        }
        if (!Utils::isUnset($request->vswitchId)) {
            $query['VswitchId'] = $request->vswitchId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StartInstance',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StartInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Enables the specified bastion host.
     *  *
     * @param StartInstanceRequest $request StartInstanceRequest
     *
     * @return StartInstanceResponse StartInstanceResponse
     */
    public function startInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary Creates and adds tags to specified bastion hosts.
     *  *
     * @param TagResourcesRequest $request TagResourcesRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return TagResourcesResponse TagResourcesResponse
     */
    public function tagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'TagResources',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates and adds tags to specified bastion hosts.
     *  *
     * @param TagResourcesRequest $request TagResourcesRequest
     *
     * @return TagResourcesResponse TagResourcesResponse
     */
    public function tagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->tagResourcesWithOptions($request, $runtime);
    }

    /**
     * @summary Unlocks one or more users of a bastion host.
     *  *
     * @description After you call the [LockUsers](https://help.aliyun.com/document_detail/204591.html) operation to lock one or more users of a bastion host, you can call this operation to unlock the users. After the users are unlocked, the users can perform O\\&M operations by using the bastion host.
     * # Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
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
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->userIds)) {
            $query['UserIds'] = $request->userIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UnlockUsers',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UnlockUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Unlocks one or more users of a bastion host.
     *  *
     * @description After you call the [LockUsers](https://help.aliyun.com/document_detail/204591.html) operation to lock one or more users of a bastion host, you can call this operation to unlock the users. After the users are unlocked, the users can perform O\\&M operations by using the bastion host.
     * # Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
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
     * @summary Removes tags from the specified bastion host and deletes the tags at a time.
     *  *
     * @param UntagResourcesRequest $request UntagResourcesRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return UntagResourcesResponse UntagResourcesResponse
     */
    public function untagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->all)) {
            $query['All'] = $request->all;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tagKey)) {
            $query['TagKey'] = $request->tagKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UntagResources',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UntagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Removes tags from the specified bastion host and deletes the tags at a time.
     *  *
     * @param UntagResourcesRequest $request UntagResourcesRequest
     *
     * @return UntagResourcesResponse UntagResourcesResponse
     */
    public function untagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->untagResourcesWithOptions($request, $runtime);
    }

    /**
     * @summary 验证实例AD服务配置
     *  *
     * @param VerifyInstanceADAuthServerRequest $request VerifyInstanceADAuthServerRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return VerifyInstanceADAuthServerResponse VerifyInstanceADAuthServerResponse
     */
    public function verifyInstanceADAuthServerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->account)) {
            $query['Account'] = $request->account;
        }
        if (!Utils::isUnset($request->baseDN)) {
            $query['BaseDN'] = $request->baseDN;
        }
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->filter)) {
            $query['Filter'] = $request->filter;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->isSSL)) {
            $query['IsSSL'] = $request->isSSL;
        }
        if (!Utils::isUnset($request->password)) {
            $query['Password'] = $request->password;
        }
        if (!Utils::isUnset($request->port)) {
            $query['Port'] = $request->port;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->server)) {
            $query['Server'] = $request->server;
        }
        if (!Utils::isUnset($request->standbyServer)) {
            $query['StandbyServer'] = $request->standbyServer;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'VerifyInstanceADAuthServer',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return VerifyInstanceADAuthServerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 验证实例AD服务配置
     *  *
     * @param VerifyInstanceADAuthServerRequest $request VerifyInstanceADAuthServerRequest
     *
     * @return VerifyInstanceADAuthServerResponse VerifyInstanceADAuthServerResponse
     */
    public function verifyInstanceADAuthServer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->verifyInstanceADAuthServerWithOptions($request, $runtime);
    }

    /**
     * @summary 验证实例LDAP服务配置
     *  *
     * @param VerifyInstanceLDAPAuthServerRequest $request VerifyInstanceLDAPAuthServerRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return VerifyInstanceLDAPAuthServerResponse VerifyInstanceLDAPAuthServerResponse
     */
    public function verifyInstanceLDAPAuthServerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->account)) {
            $query['Account'] = $request->account;
        }
        if (!Utils::isUnset($request->baseDN)) {
            $query['BaseDN'] = $request->baseDN;
        }
        if (!Utils::isUnset($request->filter)) {
            $query['Filter'] = $request->filter;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->isSSL)) {
            $query['IsSSL'] = $request->isSSL;
        }
        if (!Utils::isUnset($request->password)) {
            $query['Password'] = $request->password;
        }
        if (!Utils::isUnset($request->port)) {
            $query['Port'] = $request->port;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->server)) {
            $query['Server'] = $request->server;
        }
        if (!Utils::isUnset($request->standbyServer)) {
            $query['StandbyServer'] = $request->standbyServer;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'VerifyInstanceLDAPAuthServer',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return VerifyInstanceLDAPAuthServerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 验证实例LDAP服务配置
     *  *
     * @param VerifyInstanceLDAPAuthServerRequest $request VerifyInstanceLDAPAuthServerRequest
     *
     * @return VerifyInstanceLDAPAuthServerResponse VerifyInstanceLDAPAuthServerResponse
     */
    public function verifyInstanceLDAPAuthServer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->verifyInstanceLDAPAuthServerWithOptions($request, $runtime);
    }
}
