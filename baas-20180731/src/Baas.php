<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Baas\V20180731\Models\AcceptEthereumInvitationRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\AcceptEthereumInvitationResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\AcceptInvitationRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\AcceptInvitationResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\AddAntChainSubnetMemberCheckRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\AddAntChainSubnetMemberCheckResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\AddAntChainSubnetNodeCheckRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\AddAntChainSubnetNodeCheckResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\AddEthereumNodeRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\AddEthereumNodeResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\AddFabricExternalOrganizationToChannelRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\AddFabricExternalOrganizationToChannelResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\AddFabricOrganizationToExternalChannelRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\AddFabricOrganizationToExternalChannelResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\ApplyAntChainCertificateRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\ApplyAntChainCertificateResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\ApplyAntChainCertificateWithKeyAutoCreationRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\ApplyAntChainCertificateWithKeyAutoCreationResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\ApplyAntChainRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\ApplyAntChainResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\ApplyAntChainWithKeyAutoCreationRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\ApplyAntChainWithKeyAutoCreationResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\ApplyBlockchainRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\ApplyBlockchainResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\ApplyBlockchainWithKeyAutoCreationRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\ApplyBlockchainWithKeyAutoCreationResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\ApplyPublicAntChainRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\ApplyPublicAntChainResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\ApplyPublicAntChainWithKeyAutoCreationRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\ApplyPublicAntChainWithKeyAutoCreationResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\ApproveEthereumInviteeRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\ApproveEthereumInviteeResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\ApproveFabricChaincodeDefinitionRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\ApproveFabricChaincodeDefinitionResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\BatchAddAntChainMiniAppQRCodeAuthorizedUsersRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\BatchAddAntChainMiniAppQRCodeAuthorizedUsersResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\BatchAddAntChainMiniAppQRCodeAuthorizedUsersShrinkRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\BindFabricManagementChaincodeRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\BindFabricManagementChaincodeResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\CheckConsortiumDomainRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\CheckConsortiumDomainResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\CheckOrganizationDomainRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\CheckOrganizationDomainResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\ConfirmConsortiumMemberRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\ConfirmConsortiumMemberResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\CopyAntChainContractProjectRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\CopyAntChainContractProjectResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\CreateAccessTokenRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\CreateAccessTokenResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\CreateAccountRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\CreateAccountResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\CreateAccountWithKeyPairAutoCreationRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\CreateAccountWithKeyPairAutoCreationResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\CreateAntChainAccountRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\CreateAntChainAccountResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\CreateAntChainAccountWithKeyPairAutoCreationRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\CreateAntChainAccountWithKeyPairAutoCreationResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\CreateAntChainConsortiumRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\CreateAntChainConsortiumResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\CreateAntChainContractContentRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\CreateAntChainContractContentResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\CreateAntChainContractProjectRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\CreateAntChainContractProjectResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\CreateAntChainRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\CreateAntChainResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\CreateBlockchainApplicationRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\CreateBlockchainApplicationResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\CreateBlockchainApplyRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\CreateBlockchainApplyResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\CreateBlockchainRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\CreateBlockchainResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\CreateChaincodeRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\CreateChaincodeResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\CreateChannelMemberRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\CreateChannelMemberResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\CreateChannelRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\CreateChannelResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\CreateCloudIntegrationServiceTokenRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\CreateCloudIntegrationServiceTokenResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\CreateCloudServiceIntegrationRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\CreateCloudServiceIntegrationResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\CreateCloudServiceSessionRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\CreateCloudServiceSessionResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\CreateConsortiumMemberRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\CreateConsortiumMemberResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\CreateConsortiumRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\CreateConsortiumResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\CreateEcosphereRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\CreateEcosphereResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\CreateEthereumInvitationRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\CreateEthereumInvitationResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\CreateEthereumRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\CreateEthereumResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\CreateFabricChaincodePackageRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\CreateFabricChaincodePackageResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\CreateOrganizationRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\CreateOrganizationResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\CreateOrganizationUserRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\CreateOrganizationUserResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\CreateOwnAccountRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\CreateOwnAccountResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\CreatePublicAccountWithKeyPairAutoCreationRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\CreatePublicAccountWithKeyPairAutoCreationResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\CreatePublicAntChainAccountRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\CreatePublicAntChainAccountResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\CreateSmartContractJobResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\CreateTriggerRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\CreateTriggerResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DeleteAntChainConsortiumRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DeleteAntChainConsortiumResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DeleteAntChainContractContentRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DeleteAntChainContractContentResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DeleteAntChainContractProjectRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DeleteAntChainContractProjectResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DeleteAntChainMiniAppQRCodeAuthorizedUserRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DeleteAntChainMiniAppQRCodeAuthorizedUserResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DeleteChaincodeRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DeleteChaincodeResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DeleteGovernanceTaskRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DeleteGovernanceTaskResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DeleteTriggerRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DeleteTriggerResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeAntChainAccountsNewRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeAntChainAccountsNewResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeAntChainAccountsRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeAntChainAccountsResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeAntChainApplicationsRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeAntChainApplicationsResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeAntChainBlockNewRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeAntChainBlockNewResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeAntChainBlockRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeAntChainBlockResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeAntChainCertificateApplicationsNewRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeAntChainCertificateApplicationsNewResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeAntChainCertificateApplicationsRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeAntChainCertificateApplicationsResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeAntChainConfigOptionsRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeAntChainConfigOptionsResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeAntChainConsortiumsNewRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeAntChainConsortiumsNewResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeAntChainConsortiumsRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeAntChainConsortiumsResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeAntChainContractProjectContentTreeNewRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeAntChainContractProjectContentTreeNewResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeAntChainContractProjectContentTreeRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeAntChainContractProjectContentTreeResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeAntChainContractProjectsNewRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeAntChainContractProjectsNewResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeAntChainContractProjectsRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeAntChainContractProjectsResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeAntChainDownloadPathsNewRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeAntChainDownloadPathsNewResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeAntChainDownloadPathsRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeAntChainDownloadPathsResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeAntChainInformationNewRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeAntChainInformationNewResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeAntChainInformationRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeAntChainInformationResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeAntChainLatestBlocksNewRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeAntChainLatestBlocksNewResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeAntChainLatestBlocksRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeAntChainLatestBlocksResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeAntChainLatestTransactionDigestsNewRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeAntChainLatestTransactionDigestsNewResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeAntChainLatestTransactionDigestsRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeAntChainLatestTransactionDigestsResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeAntChainMembersNewRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeAntChainMembersNewResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeAntChainMembersRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeAntChainMembersResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeAntChainMiniAppBrowserQRCodeAccessLogNewRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeAntChainMiniAppBrowserQRCodeAccessLogNewResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeAntChainMiniAppBrowserQRCodeAccessLogRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeAntChainMiniAppBrowserQRCodeAccessLogResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeAntChainMiniAppBrowserQRCodeAuthorizedUsersNewRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeAntChainMiniAppBrowserQRCodeAuthorizedUsersNewResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeAntChainMiniAppBrowserQRCodeAuthorizedUsersRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeAntChainMiniAppBrowserQRCodeAuthorizedUsersResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeAntChainMiniAppBrowserTransactionQRCodeNewRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeAntChainMiniAppBrowserTransactionQRCodeNewResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeAntChainMiniAppBrowserTransactionQRCodeRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeAntChainMiniAppBrowserTransactionQRCodeResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeAntChainNodesNewRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeAntChainNodesNewResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeAntChainQRCodeAuthorizationNewRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeAntChainQRCodeAuthorizationNewResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeAntChainQRCodeAuthorizationRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeAntChainQRCodeAuthorizationResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeAntChainRegionNamesRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeAntChainRegionNamesResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeAntChainRegionsForSaleResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeAntChainResourceTypesResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeAntChainRestRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeAntChainRestResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeAntChainsNewRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeAntChainsNewResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeAntChainsRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeAntChainsResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeAntChainSubnetListRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeAntChainSubnetListResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeAntChainSubnetMemberListRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeAntChainSubnetMemberListResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeAntChainSubnetNodeListRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeAntChainSubnetNodeListResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeAntChainTransactionNewRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeAntChainTransactionNewResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeAntChainTransactionReceiptNewRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeAntChainTransactionReceiptNewResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeAntChainTransactionRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeAntChainTransactionResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeAntChainTransactionStatisticsNewRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeAntChainTransactionStatisticsNewResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeAntChainTransactionStatisticsRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeAntChainTransactionStatisticsResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeAntRegionsRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeAntRegionsResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeAppliesRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeAppliesResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeBcSchemaRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeBcSchemaResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeBlockchainApplicationRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeBlockchainApplicationResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeBlockchainConfigOptionRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeBlockchainConfigOptionResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeBlockchainCreateTaskRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeBlockchainCreateTaskResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeBlockchainCreationConfigOptionsRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeBlockchainCreationConfigOptionsResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeBlockchainInfoRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeBlockchainInfoResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeBlockchainSchemaDetailRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeBlockchainSchemaDetailResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeBlockchainSchemaFileOSSPropertiesRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeBlockchainSchemaFileOSSPropertiesResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeBlockchainSchemaRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeBlockchainSchemaResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeBlockchainSchemaTemplatesResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeBlockRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeBlockResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeCandidateOrganizationsRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeCandidateOrganizationsResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeChaincodeCollectionConfigRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeChaincodeCollectionConfigResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeChaincodeDefinitionTaskRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeChaincodeDefinitionTaskResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeChaincodeUploadPolicyRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeChaincodeUploadPolicyResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeChannelChaincodesRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeChannelChaincodesResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeChannelMembersRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeChannelMembersResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeChannelTriggersRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeChannelTriggersResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeCloudIntegrationServiceTokenRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeCloudIntegrationServiceTokenResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeCloudServiceOrganizationStatusRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeCloudServiceOrganizationStatusResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeCloudServiceTypeStatusRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeCloudServiceTypeStatusResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeConsortiumAdminStatusRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeConsortiumAdminStatusResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeConsortiumChaincodesRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeConsortiumChaincodesResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeConsortiumChannelsRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeConsortiumChannelsResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeConsortiumConfigResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeConsortiumDeletableRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeConsortiumDeletableResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeConsortiumMemberApprovalRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeConsortiumMemberApprovalResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeConsortiumMembersRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeConsortiumMembersResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeConsortiumOrderersRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeConsortiumOrderersResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeConsortiumSpecsResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeConsortiumsRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeConsortiumsResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeCSIGatewayEndpointRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeCSIGatewayEndpointResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeDownloadPathsOfContractChainRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeDownloadPathsOfContractChainResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeDownloadPathsOfNotaryChainRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeDownloadPathsOfNotaryChainResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeDownloadPathsRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeDownloadPathsResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeEcosphereSpecsResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeEthereumClientUsersRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeEthereumClientUsersResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeEthereumDeletableRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeEthereumDeletableResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeEthereumInvitaionRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeEthereumInvitaionResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeEthereumInviteeRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeEthereumInviteeResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeEthereumNodeConfigurationRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeEthereumNodeConfigurationResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeEthereumNodeInfoRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeEthereumNodeInfoResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeEthereumNodeLogsRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeEthereumNodeLogsResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeEthereumNodeRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeEthereumNodeResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeEthereumNodesResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeEthereumRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeEthereumResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeEthereumsResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeExplorerRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeExplorerResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeExplorerURLRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeExplorerURLResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeFabricChaincodeEndorsePolicyRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeFabricChaincodeEndorsePolicyResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeFabricChaincodeLogsRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeFabricChaincodeLogsResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeFabricChannelConfigRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeFabricChannelConfigResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeFabricChannelOrdererRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeFabricChannelOrdererResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeFabricChannelOrganizationsRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeFabricChannelOrganizationsResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeFabricJoinRequestRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeFabricJoinRequestResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeFabricJoinResponseRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeFabricJoinResponseResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeFabricManagementChaincodesRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeFabricManagementChaincodesResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeFabricOrganizationChaincodePackageRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeFabricOrganizationChaincodePackageResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeFabricOrganizationEgressRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeFabricOrganizationEgressResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeFabricPeerChannelsRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeFabricPeerChannelsResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeGovernanceTaskRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeGovernanceTaskResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeGovernanceTasksRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeGovernanceTasksResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeInvitationCodeRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeInvitationCodeResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeInvitationListRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeInvitationListResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeInviterRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeInviterResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeLatest15BlocksRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeLatest15BlocksResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeLatest15TransDigestsRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeLatest15TransDigestsResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeLatestBlocksRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeLatestBlocksResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeLatestTransactionDigestsRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeLatestTransactionDigestsResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeMemberRoleRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeMemberRoleResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeMembersRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeMembersResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeMetricRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeMetricResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeMyBlockchainsResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeMyBlockchanInfosResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeMySuccessAppliesResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeMySuccessfulApplicationResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeNetstatURLRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeNetstatURLResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeOrdererLogsRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeOrdererLogsResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeOrganizationChaincodesRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeOrganizationChaincodesResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeOrganizationChannelsRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeOrganizationChannelsResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeOrganizationDeletableRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeOrganizationDeletableResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeOrganizationMembersRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeOrganizationMembersResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeOrganizationPeersRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeOrganizationPeersResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeOrganizationRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeOrganizationResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeOrganizationSpecsResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeOrganizationsRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeOrganizationsResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeOrganizationTriggersRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeOrganizationTriggersResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeOrganizationUserCertsRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeOrganizationUserCertsResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeOrganizationUsersRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeOrganizationUsersResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeOrgnaizationChaincodesRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeOrgnaizationChaincodesResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeOssPropertiesRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeOssPropertiesResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribePeerLogsRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribePeerLogsResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribePublicAntChainContractProjectContentTreeResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribePublicAntChainDownloadPathsRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribePublicAntChainDownloadPathsResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribePublicCloudIDEEnvConfigsRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribePublicCloudIDEEnvConfigsResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeQRCodeAccessLogRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeQRCodeAccessLogResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeQRCodeAuthorityRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeQRCodeAuthorityResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeResourceTypeResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeResourceTypesResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeRootDomainResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeSchemaDetailRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeSchemaDetailResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeSmartContractJobsByNameRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeSmartContractJobsByNameResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeSmartContractJobsRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeSmartContractJobsResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeSmartContractJobStatusRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeSmartContractJobStatusResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeSmartContractResultContentRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeSmartContractResultContentResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeSmartContractResultRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeSmartContractResultResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeSubscribeCloudServiceIntegrationStateRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeSubscribeCloudServiceIntegrationStateResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeTasksResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeTemplatesResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeTransactionFor2CBrowserRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeTransactionFor2CBrowserResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeTransactionQRCodeRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeTransactionQRCodeResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeTransactionReceiptFor2CBrowserRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeTransactionReceiptFor2CBrowserResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeTransactionRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeTransactionResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeTriggerRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeTriggerResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DestroyConsortiumRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DestroyConsortiumResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DestroyEthereumRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DestroyEthereumResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DestroyOrganizationRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DestroyOrganizationResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DownloadAllRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DownloadAllResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DownloadBizviewRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DownloadBizviewResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DownloadFabricChannelSDKRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DownloadFabricChannelSDKResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DownloadOrganizationSDKRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DownloadOrganizationSDKResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DownloadSDK2Request;
use AlibabaCloud\SDK\Baas\V20180731\Models\DownloadSDK2Response;
use AlibabaCloud\SDK\Baas\V20180731\Models\DownloadSdkRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DownloadSdkResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DownloadSignedDataRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DownloadSignedDataResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\DuplicateAntChainContractProjectRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\DuplicateAntChainContractProjectResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\FreezeAccountRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\FreezeAccountResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\FreezeAntChainAccountRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\FreezeAntChainAccountResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\GetAppliesRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\GetAppliesResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\GetBcSchemaRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\GetBcSchemaResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\GetBlockchainCreateTaskRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\GetBlockchainCreateTaskResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\GetBlockchainInfoRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\GetBlockchainInfoResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\GetMyBlockchainsResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\GetMySuccessAppliesResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\GetOssPropertiesRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\GetOssPropertiesResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\GetTemplatesResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\InstallChaincodeRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\InstallChaincodeResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\InstallFabricChaincodePackageRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\InstallFabricChaincodePackageResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\InstantiateChaincodeRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\InstantiateChaincodeResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\InviteUserRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\InviteUserResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\JoinChannelRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\JoinChannelResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\ModifyTriggerRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\ModifyTriggerResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\OperateUserRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\OperateUserResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\ProcessCloudIDEContractTransactionRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\ProcessCloudIDEContractTransactionResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\ProcessPublicCloudIDEContractTransactionRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\ProcessPublicCloudIDEContractTransactionResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\QueryBlockRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\QueryBlockResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\QueryConsortiumDeletableRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\QueryConsortiumDeletableResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\QueryEthereumDeletableRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\QueryEthereumDeletableResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\QueryMetricRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\QueryMetricResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\QueryOrganizationDeletableRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\QueryOrganizationDeletableResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\QueryTransactionRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\QueryTransactionResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\RejectUserRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\RejectUserResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\RenameBlockchainRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\RenameBlockchainResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\ResetAntChainCertificateRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\ResetAntChainCertificateResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\ResetAntChainUserCertificateRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\ResetAntChainUserCertificateResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\ResetCertificateRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\ResetCertificateResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\ResetOrganizationUserPasswordRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\ResetOrganizationUserPasswordResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\ResetPublicAntChainCertificateRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\ResetPublicAntChainCertificateResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\ResetUserRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\ResetUserResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\SchemaDetailRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\SchemaDetailResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\StartSmartContractJobRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\StartSmartContractJobResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\SubmitFabricChaincodeDefinitionRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\SubmitFabricChaincodeDefinitionResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\SyncFabricChaincodeStatusRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\SyncFabricChaincodeStatusResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\SynchronizeChaincodeRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\SynchronizeChaincodeResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\TagResourcesRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\TagResourcesResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\UnfreezeAccountRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\UnfreezeAccountResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\UnfreezeAntChainAccountRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\UnfreezeAntChainAccountResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\UntagResourcesResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\UpdateAntChainConsortiumRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\UpdateAntChainConsortiumResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\UpdateAntChainContractContentRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\UpdateAntChainContractContentResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\UpdateAntChainContractProjectRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\UpdateAntChainContractProjectResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\UpdateAntChainMemberRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\UpdateAntChainMemberResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\UpdateAntChainQRCodeAuthorizationRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\UpdateAntChainQRCodeAuthorizationResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\UpdateAntChainRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\UpdateAntChainResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\UpdateBlockchainSchemaRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\UpdateBlockchainSchemaResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\UpdateChannelConfigRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\UpdateChannelConfigResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\UpdateEthereumClientUserPasswordRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\UpdateEthereumClientUserPasswordResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\UpdateEthereumNodeConfigurationRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\UpdateEthereumNodeConfigurationResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\UpdateEthereumNodeRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\UpdateEthereumNodeResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\UpdateEthereumRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\UpdateEthereumResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\UpdateGovernanceTaskRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\UpdateGovernanceTaskResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\UpdateMemberRoleRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\UpdateMemberRoleResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\UpdateQRCodeAuthorityRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\UpdateQRCodeAuthorityResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\UpdateSchemaRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\UpdateSchemaResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\UpgradeChaincodeRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\UpgradeChaincodeResponse;
use AlibabaCloud\SDK\Baas\V20180731\Models\UpgradeFabricChaincodeDefinitionRequest;
use AlibabaCloud\SDK\Baas\V20180731\Models\UpgradeFabricChaincodeDefinitionResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Baas extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_signatureAlgorithm = 'v2';
        $this->_endpointRule       = 'regional';
        $this->_endpointMap        = [
            'cn-qingdao'     => 'baas.aliyuncs.com',
            'cn-beijing'     => 'baas.aliyuncs.com',
            'cn-zhangjiakou' => 'baas.aliyuncs.com',
            'cn-huhehaote'   => 'baas.aliyuncs.com',
            'cn-shanghai'    => 'baas.aliyuncs.com',
            'cn-shenzhen'    => 'baas.aliyuncs.com',
            'cn-hongkong'    => 'baas.ap-southeast-1.aliyuncs.com',
            'ap-southeast-2' => 'baas.ap-southeast-1.aliyuncs.com',
            'ap-northeast-1' => 'baas.ap-southeast-1.aliyuncs.com',
            'eu-west-1'      => 'baas.ap-southeast-1.aliyuncs.com',
            'us-west-1'      => 'baas.ap-southeast-1.aliyuncs.com',
            'us-east-1'      => 'baas.ap-southeast-1.aliyuncs.com',
            'eu-central-1'   => 'baas.ap-southeast-1.aliyuncs.com',
            'ap-south-1'     => 'baas.ap-southeast-1.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('baas', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param AcceptEthereumInvitationRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return AcceptEthereumInvitationResponse
     */
    public function acceptEthereumInvitationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->code)) {
            $body['Code'] = $request->code;
        }
        if (!Utils::isUnset($request->token)) {
            $body['Token'] = $request->token;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AcceptEthereumInvitation',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AcceptEthereumInvitationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AcceptEthereumInvitationRequest $request
     *
     * @return AcceptEthereumInvitationResponse
     */
    public function acceptEthereumInvitation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->acceptEthereumInvitationWithOptions($request, $runtime);
    }

    /**
     * @param AcceptInvitationRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return AcceptInvitationResponse
     */
    public function acceptInvitationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->code)) {
            $body['Code'] = $request->code;
        }
        if (!Utils::isUnset($request->isAccepted)) {
            $body['IsAccepted'] = $request->isAccepted;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AcceptInvitation',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AcceptInvitationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AcceptInvitationRequest $request
     *
     * @return AcceptInvitationResponse
     */
    public function acceptInvitation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->acceptInvitationWithOptions($request, $runtime);
    }

    /**
     * @param AddAntChainSubnetMemberCheckRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return AddAntChainSubnetMemberCheckResponse
     */
    public function addAntChainSubnetMemberCheckWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->antChainId)) {
            $body['AntChainId'] = $request->antChainId;
        }
        if (!Utils::isUnset($request->consortiumId)) {
            $body['ConsortiumId'] = $request->consortiumId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AddAntChainSubnetMemberCheck',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddAntChainSubnetMemberCheckResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddAntChainSubnetMemberCheckRequest $request
     *
     * @return AddAntChainSubnetMemberCheckResponse
     */
    public function addAntChainSubnetMemberCheck($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addAntChainSubnetMemberCheckWithOptions($request, $runtime);
    }

    /**
     * @param AddAntChainSubnetNodeCheckRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return AddAntChainSubnetNodeCheckResponse
     */
    public function addAntChainSubnetNodeCheckWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->antChainId)) {
            $body['AntChainId'] = $request->antChainId;
        }
        if (!Utils::isUnset($request->consortiumId)) {
            $body['ConsortiumId'] = $request->consortiumId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AddAntChainSubnetNodeCheck',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddAntChainSubnetNodeCheckResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddAntChainSubnetNodeCheckRequest $request
     *
     * @return AddAntChainSubnetNodeCheckResponse
     */
    public function addAntChainSubnetNodeCheck($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addAntChainSubnetNodeCheckWithOptions($request, $runtime);
    }

    /**
     * @param AddEthereumNodeRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return AddEthereumNodeResponse
     */
    public function addEthereumNodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->ethereumId)) {
            $body['EthereumId'] = $request->ethereumId;
        }
        if (!Utils::isUnset($request->externalNode)) {
            $body['ExternalNode'] = $request->externalNode;
        }
        if (!Utils::isUnset($request->nodeName)) {
            $body['NodeName'] = $request->nodeName;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AddEthereumNode',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddEthereumNodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddEthereumNodeRequest $request
     *
     * @return AddEthereumNodeResponse
     */
    public function addEthereumNode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addEthereumNodeWithOptions($request, $runtime);
    }

    /**
     * @param AddFabricExternalOrganizationToChannelRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return AddFabricExternalOrganizationToChannelResponse
     */
    public function addFabricExternalOrganizationToChannelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->channelId)) {
            $body['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->joinRequest)) {
            $body['JoinRequest'] = $request->joinRequest;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $body['OrganizationId'] = $request->organizationId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AddFabricExternalOrganizationToChannel',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddFabricExternalOrganizationToChannelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddFabricExternalOrganizationToChannelRequest $request
     *
     * @return AddFabricExternalOrganizationToChannelResponse
     */
    public function addFabricExternalOrganizationToChannel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addFabricExternalOrganizationToChannelWithOptions($request, $runtime);
    }

    /**
     * @param AddFabricOrganizationToExternalChannelRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return AddFabricOrganizationToExternalChannelResponse
     */
    public function addFabricOrganizationToExternalChannelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->joinResponse)) {
            $body['JoinResponse'] = $request->joinResponse;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $body['OrganizationId'] = $request->organizationId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AddFabricOrganizationToExternalChannel',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddFabricOrganizationToExternalChannelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddFabricOrganizationToExternalChannelRequest $request
     *
     * @return AddFabricOrganizationToExternalChannelResponse
     */
    public function addFabricOrganizationToExternalChannel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addFabricOrganizationToExternalChannelWithOptions($request, $runtime);
    }

    /**
     * @param ApplyAntChainRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ApplyAntChainResponse
     */
    public function applyAntChainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bizid)) {
            $body['Bizid'] = $request->bizid;
        }
        if (!Utils::isUnset($request->consortiumId)) {
            $body['ConsortiumId'] = $request->consortiumId;
        }
        if (!Utils::isUnset($request->uploadReq)) {
            $body['UploadReq'] = $request->uploadReq;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ApplyAntChain',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ApplyAntChainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ApplyAntChainRequest $request
     *
     * @return ApplyAntChainResponse
     */
    public function applyAntChain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->applyAntChainWithOptions($request, $runtime);
    }

    /**
     * @param ApplyAntChainCertificateRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ApplyAntChainCertificateResponse
     */
    public function applyAntChainCertificateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->antChainId)) {
            $body['AntChainId'] = $request->antChainId;
        }
        if (!Utils::isUnset($request->uploadReq)) {
            $body['UploadReq'] = $request->uploadReq;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ApplyAntChainCertificate',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ApplyAntChainCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ApplyAntChainCertificateRequest $request
     *
     * @return ApplyAntChainCertificateResponse
     */
    public function applyAntChainCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->applyAntChainCertificateWithOptions($request, $runtime);
    }

    /**
     * @param ApplyAntChainCertificateWithKeyAutoCreationRequest $request
     * @param RuntimeOptions                                     $runtime
     *
     * @return ApplyAntChainCertificateWithKeyAutoCreationResponse
     */
    public function applyAntChainCertificateWithKeyAutoCreationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->antChainId)) {
            $body['AntChainId'] = $request->antChainId;
        }
        if (!Utils::isUnset($request->commonName)) {
            $body['CommonName'] = $request->commonName;
        }
        if (!Utils::isUnset($request->consortiumId)) {
            $body['ConsortiumId'] = $request->consortiumId;
        }
        if (!Utils::isUnset($request->countryName)) {
            $body['CountryName'] = $request->countryName;
        }
        if (!Utils::isUnset($request->localityName)) {
            $body['LocalityName'] = $request->localityName;
        }
        if (!Utils::isUnset($request->organizationName)) {
            $body['OrganizationName'] = $request->organizationName;
        }
        if (!Utils::isUnset($request->organizationUnitName)) {
            $body['OrganizationUnitName'] = $request->organizationUnitName;
        }
        if (!Utils::isUnset($request->password)) {
            $body['Password'] = $request->password;
        }
        if (!Utils::isUnset($request->stateOrProvinceName)) {
            $body['StateOrProvinceName'] = $request->stateOrProvinceName;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ApplyAntChainCertificateWithKeyAutoCreation',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ApplyAntChainCertificateWithKeyAutoCreationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ApplyAntChainCertificateWithKeyAutoCreationRequest $request
     *
     * @return ApplyAntChainCertificateWithKeyAutoCreationResponse
     */
    public function applyAntChainCertificateWithKeyAutoCreation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->applyAntChainCertificateWithKeyAutoCreationWithOptions($request, $runtime);
    }

    /**
     * @param ApplyAntChainWithKeyAutoCreationRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return ApplyAntChainWithKeyAutoCreationResponse
     */
    public function applyAntChainWithKeyAutoCreationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->antChainId)) {
            $body['AntChainId'] = $request->antChainId;
        }
        if (!Utils::isUnset($request->commonName)) {
            $body['CommonName'] = $request->commonName;
        }
        if (!Utils::isUnset($request->consortiumId)) {
            $body['ConsortiumId'] = $request->consortiumId;
        }
        if (!Utils::isUnset($request->countryName)) {
            $body['CountryName'] = $request->countryName;
        }
        if (!Utils::isUnset($request->localityName)) {
            $body['LocalityName'] = $request->localityName;
        }
        if (!Utils::isUnset($request->organizationName)) {
            $body['OrganizationName'] = $request->organizationName;
        }
        if (!Utils::isUnset($request->organizationUnitName)) {
            $body['OrganizationUnitName'] = $request->organizationUnitName;
        }
        if (!Utils::isUnset($request->password)) {
            $body['Password'] = $request->password;
        }
        if (!Utils::isUnset($request->stateOrProvinceName)) {
            $body['StateOrProvinceName'] = $request->stateOrProvinceName;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ApplyAntChainWithKeyAutoCreation',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ApplyAntChainWithKeyAutoCreationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ApplyAntChainWithKeyAutoCreationRequest $request
     *
     * @return ApplyAntChainWithKeyAutoCreationResponse
     */
    public function applyAntChainWithKeyAutoCreation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->applyAntChainWithKeyAutoCreationWithOptions($request, $runtime);
    }

    /**
     * @param ApplyBlockchainRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ApplyBlockchainResponse
     */
    public function applyBlockchainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->account)) {
            $body['Account'] = $request->account;
        }
        if (!Utils::isUnset($request->accountPubKey)) {
            $body['AccountPubKey'] = $request->accountPubKey;
        }
        if (!Utils::isUnset($request->accountRecoverPubKey)) {
            $body['AccountRecoverPubKey'] = $request->accountRecoverPubKey;
        }
        if (!Utils::isUnset($request->blockchain)) {
            $body['Blockchain'] = $request->blockchain;
        }
        if (!Utils::isUnset($request->uploadReq)) {
            $body['UploadReq'] = $request->uploadReq;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ApplyBlockchain',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ApplyBlockchainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ApplyBlockchainRequest $request
     *
     * @return ApplyBlockchainResponse
     */
    public function applyBlockchain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->applyBlockchainWithOptions($request, $runtime);
    }

    /**
     * @param ApplyBlockchainWithKeyAutoCreationRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return ApplyBlockchainWithKeyAutoCreationResponse
     */
    public function applyBlockchainWithKeyAutoCreationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bizid)) {
            $body['Bizid'] = $request->bizid;
        }
        if (!Utils::isUnset($request->commonName)) {
            $body['CommonName'] = $request->commonName;
        }
        if (!Utils::isUnset($request->countryName)) {
            $body['CountryName'] = $request->countryName;
        }
        if (!Utils::isUnset($request->localityName)) {
            $body['LocalityName'] = $request->localityName;
        }
        if (!Utils::isUnset($request->organizationName)) {
            $body['OrganizationName'] = $request->organizationName;
        }
        if (!Utils::isUnset($request->organizationUnitName)) {
            $body['OrganizationUnitName'] = $request->organizationUnitName;
        }
        if (!Utils::isUnset($request->password)) {
            $body['Password'] = $request->password;
        }
        if (!Utils::isUnset($request->stateOrProvinceName)) {
            $body['StateOrProvinceName'] = $request->stateOrProvinceName;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ApplyBlockchainWithKeyAutoCreation',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ApplyBlockchainWithKeyAutoCreationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ApplyBlockchainWithKeyAutoCreationRequest $request
     *
     * @return ApplyBlockchainWithKeyAutoCreationResponse
     */
    public function applyBlockchainWithKeyAutoCreation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->applyBlockchainWithKeyAutoCreationWithOptions($request, $runtime);
    }

    /**
     * @param ApplyPublicAntChainRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ApplyPublicAntChainResponse
     */
    public function applyPublicAntChainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bizid)) {
            $body['Bizid'] = $request->bizid;
        }
        if (!Utils::isUnset($request->consortiumId)) {
            $body['ConsortiumId'] = $request->consortiumId;
        }
        if (!Utils::isUnset($request->uploadReq)) {
            $body['UploadReq'] = $request->uploadReq;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ApplyPublicAntChain',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ApplyPublicAntChainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ApplyPublicAntChainRequest $request
     *
     * @return ApplyPublicAntChainResponse
     */
    public function applyPublicAntChain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->applyPublicAntChainWithOptions($request, $runtime);
    }

    /**
     * @param ApplyPublicAntChainWithKeyAutoCreationRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return ApplyPublicAntChainWithKeyAutoCreationResponse
     */
    public function applyPublicAntChainWithKeyAutoCreationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bizid)) {
            $body['Bizid'] = $request->bizid;
        }
        if (!Utils::isUnset($request->commonName)) {
            $body['CommonName'] = $request->commonName;
        }
        if (!Utils::isUnset($request->countryName)) {
            $body['CountryName'] = $request->countryName;
        }
        if (!Utils::isUnset($request->localityName)) {
            $body['LocalityName'] = $request->localityName;
        }
        if (!Utils::isUnset($request->organizationName)) {
            $body['OrganizationName'] = $request->organizationName;
        }
        if (!Utils::isUnset($request->organizationUnitName)) {
            $body['OrganizationUnitName'] = $request->organizationUnitName;
        }
        if (!Utils::isUnset($request->password)) {
            $body['Password'] = $request->password;
        }
        if (!Utils::isUnset($request->stateOrProvinceName)) {
            $body['StateOrProvinceName'] = $request->stateOrProvinceName;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ApplyPublicAntChainWithKeyAutoCreation',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ApplyPublicAntChainWithKeyAutoCreationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ApplyPublicAntChainWithKeyAutoCreationRequest $request
     *
     * @return ApplyPublicAntChainWithKeyAutoCreationResponse
     */
    public function applyPublicAntChainWithKeyAutoCreation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->applyPublicAntChainWithKeyAutoCreationWithOptions($request, $runtime);
    }

    /**
     * @param ApproveEthereumInviteeRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ApproveEthereumInviteeResponse
     */
    public function approveEthereumInviteeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->invitee)) {
            $body['Invitee'] = $request->invitee;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ApproveEthereumInvitee',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ApproveEthereumInviteeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ApproveEthereumInviteeRequest $request
     *
     * @return ApproveEthereumInviteeResponse
     */
    public function approveEthereumInvitee($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->approveEthereumInviteeWithOptions($request, $runtime);
    }

    /**
     * @param ApproveFabricChaincodeDefinitionRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return ApproveFabricChaincodeDefinitionResponse
     */
    public function approveFabricChaincodeDefinitionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->chaincodeId)) {
            $body['ChaincodeId'] = $request->chaincodeId;
        }
        if (!Utils::isUnset($request->chaincodePackageId)) {
            $body['ChaincodePackageId'] = $request->chaincodePackageId;
        }
        if (!Utils::isUnset($request->location)) {
            $body['Location'] = $request->location;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $body['OrganizationId'] = $request->organizationId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ApproveFabricChaincodeDefinition',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ApproveFabricChaincodeDefinitionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ApproveFabricChaincodeDefinitionRequest $request
     *
     * @return ApproveFabricChaincodeDefinitionResponse
     */
    public function approveFabricChaincodeDefinition($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->approveFabricChaincodeDefinitionWithOptions($request, $runtime);
    }

    /**
     * @param BatchAddAntChainMiniAppQRCodeAuthorizedUsersRequest $tmpReq
     * @param RuntimeOptions                                      $runtime
     *
     * @return BatchAddAntChainMiniAppQRCodeAuthorizedUsersResponse
     */
    public function batchAddAntChainMiniAppQRCodeAuthorizedUsersWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new BatchAddAntChainMiniAppQRCodeAuthorizedUsersShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->phoneList)) {
            $request->phoneListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->phoneList, 'PhoneList', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->antChainId)) {
            $body['AntChainId'] = $request->antChainId;
        }
        if (!Utils::isUnset($request->phoneListShrink)) {
            $body['PhoneList'] = $request->phoneListShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'BatchAddAntChainMiniAppQRCodeAuthorizedUsers',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchAddAntChainMiniAppQRCodeAuthorizedUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param BatchAddAntChainMiniAppQRCodeAuthorizedUsersRequest $request
     *
     * @return BatchAddAntChainMiniAppQRCodeAuthorizedUsersResponse
     */
    public function batchAddAntChainMiniAppQRCodeAuthorizedUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchAddAntChainMiniAppQRCodeAuthorizedUsersWithOptions($request, $runtime);
    }

    /**
     * @param BindFabricManagementChaincodeRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return BindFabricManagementChaincodeResponse
     */
    public function bindFabricManagementChaincodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->chaincodeId)) {
            $body['ChaincodeId'] = $request->chaincodeId;
        }
        if (!Utils::isUnset($request->channelId)) {
            $body['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $body['OrganizationId'] = $request->organizationId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'BindFabricManagementChaincode',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BindFabricManagementChaincodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param BindFabricManagementChaincodeRequest $request
     *
     * @return BindFabricManagementChaincodeResponse
     */
    public function bindFabricManagementChaincode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bindFabricManagementChaincodeWithOptions($request, $runtime);
    }

    /**
     * @param CheckConsortiumDomainRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CheckConsortiumDomainResponse
     */
    public function checkConsortiumDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->domainCode)) {
            $body['DomainCode'] = $request->domainCode;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CheckConsortiumDomain',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CheckConsortiumDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CheckConsortiumDomainRequest $request
     *
     * @return CheckConsortiumDomainResponse
     */
    public function checkConsortiumDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkConsortiumDomainWithOptions($request, $runtime);
    }

    /**
     * @param CheckOrganizationDomainRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CheckOrganizationDomainResponse
     */
    public function checkOrganizationDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->domain)) {
            $body['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->domainCode)) {
            $body['DomainCode'] = $request->domainCode;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CheckOrganizationDomain',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CheckOrganizationDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CheckOrganizationDomainRequest $request
     *
     * @return CheckOrganizationDomainResponse
     */
    public function checkOrganizationDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkOrganizationDomainWithOptions($request, $runtime);
    }

    /**
     * @param ConfirmConsortiumMemberRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ConfirmConsortiumMemberResponse
     */
    public function confirmConsortiumMemberWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->consortiumId)) {
            $query['ConsortiumId'] = $request->consortiumId;
        }
        if (!Utils::isUnset($request->organization)) {
            $query['Organization'] = $request->organization;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ConfirmConsortiumMember',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ConfirmConsortiumMemberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ConfirmConsortiumMemberRequest $request
     *
     * @return ConfirmConsortiumMemberResponse
     */
    public function confirmConsortiumMember($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->confirmConsortiumMemberWithOptions($request, $runtime);
    }

    /**
     * @param CopyAntChainContractProjectRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return CopyAntChainContractProjectResponse
     */
    public function copyAntChainContractProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->projectDescription)) {
            $body['ProjectDescription'] = $request->projectDescription;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->projectName)) {
            $body['ProjectName'] = $request->projectName;
        }
        if (!Utils::isUnset($request->projectVersion)) {
            $body['ProjectVersion'] = $request->projectVersion;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CopyAntChainContractProject',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CopyAntChainContractProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CopyAntChainContractProjectRequest $request
     *
     * @return CopyAntChainContractProjectResponse
     */
    public function copyAntChainContractProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->copyAntChainContractProjectWithOptions($request, $runtime);
    }

    /**
     * @param CreateAccessTokenRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateAccessTokenResponse
     */
    public function createAccessTokenWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->accessTokenLifetime)) {
            $body['AccessTokenLifetime'] = $request->accessTokenLifetime;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $body['OrganizationId'] = $request->organizationId;
        }
        if (!Utils::isUnset($request->refreshTokenLifetime)) {
            $body['RefreshTokenLifetime'] = $request->refreshTokenLifetime;
        }
        if (!Utils::isUnset($request->scope)) {
            $body['Scope'] = $request->scope;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateAccessToken',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateAccessTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateAccessTokenRequest $request
     *
     * @return CreateAccessTokenResponse
     */
    public function createAccessToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAccessTokenWithOptions($request, $runtime);
    }

    /**
     * @param CreateAccountRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateAccountResponse
     */
    public function createAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->account)) {
            $body['Account'] = $request->account;
        }
        if (!Utils::isUnset($request->accountPubKey)) {
            $body['AccountPubKey'] = $request->accountPubKey;
        }
        if (!Utils::isUnset($request->accountRecoverPubKey)) {
            $body['AccountRecoverPubKey'] = $request->accountRecoverPubKey;
        }
        if (!Utils::isUnset($request->bizid)) {
            $body['Bizid'] = $request->bizid;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateAccount',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateAccountRequest $request
     *
     * @return CreateAccountResponse
     */
    public function createAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAccountWithOptions($request, $runtime);
    }

    /**
     * @param CreateAccountWithKeyPairAutoCreationRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return CreateAccountWithKeyPairAutoCreationResponse
     */
    public function createAccountWithKeyPairAutoCreationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->account)) {
            $body['Account'] = $request->account;
        }
        if (!Utils::isUnset($request->bizid)) {
            $body['Bizid'] = $request->bizid;
        }
        if (!Utils::isUnset($request->password)) {
            $body['Password'] = $request->password;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateAccountWithKeyPairAutoCreation',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateAccountWithKeyPairAutoCreationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateAccountWithKeyPairAutoCreationRequest $request
     *
     * @return CreateAccountWithKeyPairAutoCreationResponse
     */
    public function createAccountWithKeyPairAutoCreation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAccountWithKeyPairAutoCreationWithOptions($request, $runtime);
    }

    /**
     * @param CreateAntChainRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateAntChainResponse
     */
    public function createAntChainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->antChainName)) {
            $body['AntChainName'] = $request->antChainName;
        }
        if (!Utils::isUnset($request->blockchainRegionId)) {
            $body['BlockchainRegionId'] = $request->blockchainRegionId;
        }
        if (!Utils::isUnset($request->cipherSuit)) {
            $body['CipherSuit'] = $request->cipherSuit;
        }
        if (!Utils::isUnset($request->consortiumId)) {
            $body['ConsortiumId'] = $request->consortiumId;
        }
        if (!Utils::isUnset($request->liveTime)) {
            $body['LiveTime'] = $request->liveTime;
        }
        if (!Utils::isUnset($request->merkleTreeSuit)) {
            $body['MerkleTreeSuit'] = $request->merkleTreeSuit;
        }
        if (!Utils::isUnset($request->nodeNum)) {
            $body['NodeNum'] = $request->nodeNum;
        }
        if (!Utils::isUnset($request->resourceSize)) {
            $body['ResourceSize'] = $request->resourceSize;
        }
        if (!Utils::isUnset($request->tlsAlgo)) {
            $body['TlsAlgo'] = $request->tlsAlgo;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateAntChain',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateAntChainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateAntChainRequest $request
     *
     * @return CreateAntChainResponse
     */
    public function createAntChain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAntChainWithOptions($request, $runtime);
    }

    /**
     * @param CreateAntChainAccountRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateAntChainAccountResponse
     */
    public function createAntChainAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->account)) {
            $body['Account'] = $request->account;
        }
        if (!Utils::isUnset($request->accountPubKey)) {
            $body['AccountPubKey'] = $request->accountPubKey;
        }
        if (!Utils::isUnset($request->accountRecoverPubKey)) {
            $body['AccountRecoverPubKey'] = $request->accountRecoverPubKey;
        }
        if (!Utils::isUnset($request->antChainId)) {
            $body['AntChainId'] = $request->antChainId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateAntChainAccount',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateAntChainAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateAntChainAccountRequest $request
     *
     * @return CreateAntChainAccountResponse
     */
    public function createAntChainAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAntChainAccountWithOptions($request, $runtime);
    }

    /**
     * @param CreateAntChainAccountWithKeyPairAutoCreationRequest $request
     * @param RuntimeOptions                                      $runtime
     *
     * @return CreateAntChainAccountWithKeyPairAutoCreationResponse
     */
    public function createAntChainAccountWithKeyPairAutoCreationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->account)) {
            $body['Account'] = $request->account;
        }
        if (!Utils::isUnset($request->antChainId)) {
            $body['AntChainId'] = $request->antChainId;
        }
        if (!Utils::isUnset($request->password)) {
            $body['Password'] = $request->password;
        }
        if (!Utils::isUnset($request->recoverPassword)) {
            $body['RecoverPassword'] = $request->recoverPassword;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateAntChainAccountWithKeyPairAutoCreation',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateAntChainAccountWithKeyPairAutoCreationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateAntChainAccountWithKeyPairAutoCreationRequest $request
     *
     * @return CreateAntChainAccountWithKeyPairAutoCreationResponse
     */
    public function createAntChainAccountWithKeyPairAutoCreation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAntChainAccountWithKeyPairAutoCreationWithOptions($request, $runtime);
    }

    /**
     * @param CreateAntChainConsortiumRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateAntChainConsortiumResponse
     */
    public function createAntChainConsortiumWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->consortiumDescription)) {
            $body['ConsortiumDescription'] = $request->consortiumDescription;
        }
        if (!Utils::isUnset($request->consortiumName)) {
            $body['ConsortiumName'] = $request->consortiumName;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateAntChainConsortium',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateAntChainConsortiumResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateAntChainConsortiumRequest $request
     *
     * @return CreateAntChainConsortiumResponse
     */
    public function createAntChainConsortium($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAntChainConsortiumWithOptions($request, $runtime);
    }

    /**
     * @param CreateAntChainContractContentRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return CreateAntChainContractContentResponse
     */
    public function createAntChainContractContentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->content)) {
            $body['Content'] = $request->content;
        }
        if (!Utils::isUnset($request->contentName)) {
            $body['ContentName'] = $request->contentName;
        }
        if (!Utils::isUnset($request->isDirectory)) {
            $body['IsDirectory'] = $request->isDirectory;
        }
        if (!Utils::isUnset($request->parentContentId)) {
            $body['ParentContentId'] = $request->parentContentId;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateAntChainContractContent',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateAntChainContractContentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateAntChainContractContentRequest $request
     *
     * @return CreateAntChainContractContentResponse
     */
    public function createAntChainContractContent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAntChainContractContentWithOptions($request, $runtime);
    }

    /**
     * @param CreateAntChainContractProjectRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return CreateAntChainContractProjectResponse
     */
    public function createAntChainContractProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->consortiumId)) {
            $body['ConsortiumId'] = $request->consortiumId;
        }
        if (!Utils::isUnset($request->projectDescription)) {
            $body['ProjectDescription'] = $request->projectDescription;
        }
        if (!Utils::isUnset($request->projectName)) {
            $body['ProjectName'] = $request->projectName;
        }
        if (!Utils::isUnset($request->projectVersion)) {
            $body['ProjectVersion'] = $request->projectVersion;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateAntChainContractProject',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateAntChainContractProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateAntChainContractProjectRequest $request
     *
     * @return CreateAntChainContractProjectResponse
     */
    public function createAntChainContractProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAntChainContractProjectWithOptions($request, $runtime);
    }

    /**
     * @param CreateBlockchainRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateBlockchainResponse
     */
    public function createBlockchainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bizid)) {
            $body['Bizid'] = $request->bizid;
        }
        if (!Utils::isUnset($request->blockchainRegionId)) {
            $body['BlockchainRegionId'] = $request->blockchainRegionId;
        }
        if (!Utils::isUnset($request->blockchainType)) {
            $body['BlockchainType'] = $request->blockchainType;
        }
        if (!Utils::isUnset($request->cipherSuit)) {
            $body['CipherSuit'] = $request->cipherSuit;
        }
        if (!Utils::isUnset($request->liveTime)) {
            $body['LiveTime'] = $request->liveTime;
        }
        if (!Utils::isUnset($request->machineNum)) {
            $body['MachineNum'] = $request->machineNum;
        }
        if (!Utils::isUnset($request->merkleTreeSuit)) {
            $body['MerkleTreeSuit'] = $request->merkleTreeSuit;
        }
        if (!Utils::isUnset($request->size)) {
            $body['Size'] = $request->size;
        }
        if (!Utils::isUnset($request->tlsAlgo)) {
            $body['TlsAlgo'] = $request->tlsAlgo;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateBlockchain',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateBlockchainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateBlockchainRequest $request
     *
     * @return CreateBlockchainResponse
     */
    public function createBlockchain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createBlockchainWithOptions($request, $runtime);
    }

    /**
     * @param CreateBlockchainApplicationRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return CreateBlockchainApplicationResponse
     */
    public function createBlockchainApplicationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bizid)) {
            $body['Bizid'] = $request->bizid;
        }
        if (!Utils::isUnset($request->blockchainRegionId)) {
            $body['BlockchainRegionId'] = $request->blockchainRegionId;
        }
        if (!Utils::isUnset($request->blockchainType)) {
            $body['BlockchainType'] = $request->blockchainType;
        }
        if (!Utils::isUnset($request->cipherSuit)) {
            $body['CipherSuit'] = $request->cipherSuit;
        }
        if (!Utils::isUnset($request->liveTime)) {
            $body['LiveTime'] = $request->liveTime;
        }
        if (!Utils::isUnset($request->machineNum)) {
            $body['MachineNum'] = $request->machineNum;
        }
        if (!Utils::isUnset($request->merkleTreeSuit)) {
            $body['MerkleTreeSuit'] = $request->merkleTreeSuit;
        }
        if (!Utils::isUnset($request->size)) {
            $body['Size'] = $request->size;
        }
        if (!Utils::isUnset($request->tlsAlgo)) {
            $body['TlsAlgo'] = $request->tlsAlgo;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateBlockchainApplication',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateBlockchainApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateBlockchainApplicationRequest $request
     *
     * @return CreateBlockchainApplicationResponse
     */
    public function createBlockchainApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createBlockchainApplicationWithOptions($request, $runtime);
    }

    /**
     * @param CreateBlockchainApplyRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateBlockchainApplyResponse
     */
    public function createBlockchainApplyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bizid)) {
            $body['Bizid'] = $request->bizid;
        }
        if (!Utils::isUnset($request->liveTime)) {
            $body['LiveTime'] = $request->liveTime;
        }
        if (!Utils::isUnset($request->machineNum)) {
            $body['MachineNum'] = $request->machineNum;
        }
        if (!Utils::isUnset($request->size)) {
            $body['Size'] = $request->size;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateBlockchainApply',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateBlockchainApplyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateBlockchainApplyRequest $request
     *
     * @return CreateBlockchainApplyResponse
     */
    public function createBlockchainApply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createBlockchainApplyWithOptions($request, $runtime);
    }

    /**
     * @param CreateChaincodeRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateChaincodeResponse
     */
    public function createChaincodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->channelId)) {
            $body['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->consortiumId)) {
            $body['ConsortiumId'] = $request->consortiumId;
        }
        if (!Utils::isUnset($request->endorsePolicy)) {
            $body['EndorsePolicy'] = $request->endorsePolicy;
        }
        if (!Utils::isUnset($request->location)) {
            $body['Location'] = $request->location;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $body['OrganizationId'] = $request->organizationId;
        }
        if (!Utils::isUnset($request->ossBucket)) {
            $body['OssBucket'] = $request->ossBucket;
        }
        if (!Utils::isUnset($request->ossUrl)) {
            $body['OssUrl'] = $request->ossUrl;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateChaincode',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateChaincodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateChaincodeRequest $request
     *
     * @return CreateChaincodeResponse
     */
    public function createChaincode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createChaincodeWithOptions($request, $runtime);
    }

    /**
     * @param CreateChannelRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateChannelResponse
     */
    public function createChannelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->channelName)) {
            $query['ChannelName'] = $request->channelName;
        }
        if (!Utils::isUnset($request->consortiumId)) {
            $query['ConsortiumId'] = $request->consortiumId;
        }
        if (!Utils::isUnset($request->organization)) {
            $query['Organization'] = $request->organization;
        }
        $body = [];
        if (!Utils::isUnset($request->batchTimeout)) {
            $body['BatchTimeout'] = $request->batchTimeout;
        }
        if (!Utils::isUnset($request->maxMessageCount)) {
            $body['MaxMessageCount'] = $request->maxMessageCount;
        }
        if (!Utils::isUnset($request->preferredMaxBytes)) {
            $body['PreferredMaxBytes'] = $request->preferredMaxBytes;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateChannel',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateChannelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateChannelRequest $request
     *
     * @return CreateChannelResponse
     */
    public function createChannel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createChannelWithOptions($request, $runtime);
    }

    /**
     * @param CreateChannelMemberRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateChannelMemberResponse
     */
    public function createChannelMemberWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->channelId)) {
            $query['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->organization)) {
            $query['Organization'] = $request->organization;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateChannelMember',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateChannelMemberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateChannelMemberRequest $request
     *
     * @return CreateChannelMemberResponse
     */
    public function createChannelMember($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createChannelMemberWithOptions($request, $runtime);
    }

    /**
     * @param CreateCloudIntegrationServiceTokenRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return CreateCloudIntegrationServiceTokenResponse
     */
    public function createCloudIntegrationServiceTokenWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->organizationId)) {
            $query['OrganizationId'] = $request->organizationId;
        }
        if (!Utils::isUnset($request->service)) {
            $query['Service'] = $request->service;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateCloudIntegrationServiceToken',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateCloudIntegrationServiceTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateCloudIntegrationServiceTokenRequest $request
     *
     * @return CreateCloudIntegrationServiceTokenResponse
     */
    public function createCloudIntegrationServiceToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCloudIntegrationServiceTokenWithOptions($request, $runtime);
    }

    /**
     * @param CreateCloudServiceIntegrationRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return CreateCloudServiceIntegrationResponse
     */
    public function createCloudServiceIntegrationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->organizationId)) {
            $query['OrganizationId'] = $request->organizationId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateCloudServiceIntegration',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateCloudServiceIntegrationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateCloudServiceIntegrationRequest $request
     *
     * @return CreateCloudServiceIntegrationResponse
     */
    public function createCloudServiceIntegration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCloudServiceIntegrationWithOptions($request, $runtime);
    }

    /**
     * @param CreateCloudServiceSessionRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CreateCloudServiceSessionResponse
     */
    public function createCloudServiceSessionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->organizationId)) {
            $query['OrganizationId'] = $request->organizationId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateCloudServiceSession',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateCloudServiceSessionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateCloudServiceSessionRequest $request
     *
     * @return CreateCloudServiceSessionResponse
     */
    public function createCloudServiceSession($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCloudServiceSessionWithOptions($request, $runtime);
    }

    /**
     * @param CreateConsortiumRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateConsortiumResponse
     */
    public function createConsortiumWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->channelPolicy)) {
            $body['ChannelPolicy'] = $request->channelPolicy;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->domain)) {
            $body['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->duration)) {
            $body['Duration'] = $request->duration;
        }
        if (!Utils::isUnset($request->location)) {
            $body['Location'] = $request->location;
        }
        if (!Utils::isUnset($request->majorVersion)) {
            $body['MajorVersion'] = $request->majorVersion;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->ordererType)) {
            $body['OrdererType'] = $request->ordererType;
        }
        if (!Utils::isUnset($request->orderersCount)) {
            $body['OrderersCount'] = $request->orderersCount;
        }
        if (!Utils::isUnset($request->organization)) {
            $body['Organization'] = $request->organization;
        }
        if (!Utils::isUnset($request->peersCount)) {
            $body['PeersCount'] = $request->peersCount;
        }
        if (!Utils::isUnset($request->pricingCycle)) {
            $body['PricingCycle'] = $request->pricingCycle;
        }
        if (!Utils::isUnset($request->specName)) {
            $body['SpecName'] = $request->specName;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $body['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateConsortium',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateConsortiumResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateConsortiumRequest $request
     *
     * @return CreateConsortiumResponse
     */
    public function createConsortium($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createConsortiumWithOptions($request, $runtime);
    }

    /**
     * @param CreateConsortiumMemberRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CreateConsortiumMemberResponse
     */
    public function createConsortiumMemberWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->code)) {
            $query['Code'] = $request->code;
        }
        if (!Utils::isUnset($request->consortiumId)) {
            $query['ConsortiumId'] = $request->consortiumId;
        }
        if (!Utils::isUnset($request->organization)) {
            $query['Organization'] = $request->organization;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateConsortiumMember',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateConsortiumMemberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateConsortiumMemberRequest $request
     *
     * @return CreateConsortiumMemberResponse
     */
    public function createConsortiumMember($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createConsortiumMemberWithOptions($request, $runtime);
    }

    /**
     * @param CreateEcosphereRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateEcosphereResponse
     */
    public function createEcosphereWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->channelPolicy)) {
            $body['ChannelPolicy'] = $request->channelPolicy;
        }
        if (!Utils::isUnset($request->consortiumName)) {
            $body['ConsortiumName'] = $request->consortiumName;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->duration)) {
            $body['Duration'] = $request->duration;
        }
        if (!Utils::isUnset($request->location)) {
            $body['Location'] = $request->location;
        }
        if (!Utils::isUnset($request->majorVersion)) {
            $body['MajorVersion'] = $request->majorVersion;
        }
        if (!Utils::isUnset($request->ordererDomain)) {
            $body['OrdererDomain'] = $request->ordererDomain;
        }
        if (!Utils::isUnset($request->ordererType)) {
            $body['OrdererType'] = $request->ordererType;
        }
        if (!Utils::isUnset($request->orderersCount)) {
            $body['OrderersCount'] = $request->orderersCount;
        }
        if (!Utils::isUnset($request->organization)) {
            $body['Organization'] = $request->organization;
        }
        if (!Utils::isUnset($request->peersCount)) {
            $body['PeersCount'] = $request->peersCount;
        }
        if (!Utils::isUnset($request->pricingCycle)) {
            $body['PricingCycle'] = $request->pricingCycle;
        }
        if (!Utils::isUnset($request->specName)) {
            $body['SpecName'] = $request->specName;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $body['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateEcosphere',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateEcosphereResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateEcosphereRequest $request
     *
     * @return CreateEcosphereResponse
     */
    public function createEcosphere($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createEcosphereWithOptions($request, $runtime);
    }

    /**
     * @param CreateEthereumRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateEthereumResponse
     */
    public function createEthereumWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->consensus)) {
            $body['Consensus'] = $request->consensus;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->difficulty)) {
            $body['Difficulty'] = $request->difficulty;
        }
        if (!Utils::isUnset($request->gas)) {
            $body['Gas'] = $request->gas;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->networkId)) {
            $body['NetworkId'] = $request->networkId;
        }
        if (!Utils::isUnset($request->node)) {
            $body['Node'] = $request->node;
        }
        if (!Utils::isUnset($request->region)) {
            $body['Region'] = $request->region;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateEthereum',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateEthereumResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateEthereumRequest $request
     *
     * @return CreateEthereumResponse
     */
    public function createEthereum($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createEthereumWithOptions($request, $runtime);
    }

    /**
     * @param CreateEthereumInvitationRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateEthereumInvitationResponse
     */
    public function createEthereumInvitationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->ethereumId)) {
            $body['EthereumId'] = $request->ethereumId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateEthereumInvitation',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateEthereumInvitationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateEthereumInvitationRequest $request
     *
     * @return CreateEthereumInvitationResponse
     */
    public function createEthereumInvitation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createEthereumInvitationWithOptions($request, $runtime);
    }

    /**
     * @param CreateFabricChaincodePackageRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return CreateFabricChaincodePackageResponse
     */
    public function createFabricChaincodePackageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->location)) {
            $body['Location'] = $request->location;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $body['OrganizationId'] = $request->organizationId;
        }
        if (!Utils::isUnset($request->ossBucket)) {
            $body['OssBucket'] = $request->ossBucket;
        }
        if (!Utils::isUnset($request->ossUrl)) {
            $body['OssUrl'] = $request->ossUrl;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateFabricChaincodePackage',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateFabricChaincodePackageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateFabricChaincodePackageRequest $request
     *
     * @return CreateFabricChaincodePackageResponse
     */
    public function createFabricChaincodePackage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFabricChaincodePackageWithOptions($request, $runtime);
    }

    /**
     * @param CreateOrganizationRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateOrganizationResponse
     */
    public function createOrganizationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->duration)) {
            $query['Duration'] = $request->duration;
        }
        if (!Utils::isUnset($request->location)) {
            $query['Location'] = $request->location;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->peersCount)) {
            $query['PeersCount'] = $request->peersCount;
        }
        if (!Utils::isUnset($request->pricingCycle)) {
            $query['PricingCycle'] = $request->pricingCycle;
        }
        if (!Utils::isUnset($request->specName)) {
            $query['SpecName'] = $request->specName;
        }
        $body = [];
        if (!Utils::isUnset($request->majorVersion)) {
            $body['MajorVersion'] = $request->majorVersion;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateOrganization',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateOrganizationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateOrganizationRequest $request
     *
     * @return CreateOrganizationResponse
     */
    public function createOrganization($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createOrganizationWithOptions($request, $runtime);
    }

    /**
     * @param CreateOrganizationUserRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CreateOrganizationUserResponse
     */
    public function createOrganizationUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->attrs)) {
            $body['Attrs'] = $request->attrs;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $body['OrganizationId'] = $request->organizationId;
        }
        if (!Utils::isUnset($request->password)) {
            $body['Password'] = $request->password;
        }
        if (!Utils::isUnset($request->username)) {
            $body['Username'] = $request->username;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateOrganizationUser',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateOrganizationUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateOrganizationUserRequest $request
     *
     * @return CreateOrganizationUserResponse
     */
    public function createOrganizationUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createOrganizationUserWithOptions($request, $runtime);
    }

    /**
     * @param CreateOwnAccountRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateOwnAccountResponse
     */
    public function createOwnAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bizid)) {
            $body['Bizid'] = $request->bizid;
        }
        if (!Utils::isUnset($request->identity)) {
            $body['Identity'] = $request->identity;
        }
        if (!Utils::isUnset($request->publicKey)) {
            $body['PublicKey'] = $request->publicKey;
        }
        if (!Utils::isUnset($request->recoveryKey)) {
            $body['RecoveryKey'] = $request->recoveryKey;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateOwnAccount',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateOwnAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateOwnAccountRequest $request
     *
     * @return CreateOwnAccountResponse
     */
    public function createOwnAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createOwnAccountWithOptions($request, $runtime);
    }

    /**
     * @param CreatePublicAccountWithKeyPairAutoCreationRequest $request
     * @param RuntimeOptions                                    $runtime
     *
     * @return CreatePublicAccountWithKeyPairAutoCreationResponse
     */
    public function createPublicAccountWithKeyPairAutoCreationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->account)) {
            $body['Account'] = $request->account;
        }
        if (!Utils::isUnset($request->bizid)) {
            $body['Bizid'] = $request->bizid;
        }
        if (!Utils::isUnset($request->password)) {
            $body['Password'] = $request->password;
        }
        if (!Utils::isUnset($request->recoverPassword)) {
            $body['RecoverPassword'] = $request->recoverPassword;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreatePublicAccountWithKeyPairAutoCreation',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreatePublicAccountWithKeyPairAutoCreationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreatePublicAccountWithKeyPairAutoCreationRequest $request
     *
     * @return CreatePublicAccountWithKeyPairAutoCreationResponse
     */
    public function createPublicAccountWithKeyPairAutoCreation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPublicAccountWithKeyPairAutoCreationWithOptions($request, $runtime);
    }

    /**
     * @param CreatePublicAntChainAccountRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return CreatePublicAntChainAccountResponse
     */
    public function createPublicAntChainAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->account)) {
            $body['Account'] = $request->account;
        }
        if (!Utils::isUnset($request->accountPubKey)) {
            $body['AccountPubKey'] = $request->accountPubKey;
        }
        if (!Utils::isUnset($request->accountRecoverPubKey)) {
            $body['AccountRecoverPubKey'] = $request->accountRecoverPubKey;
        }
        if (!Utils::isUnset($request->bizid)) {
            $body['Bizid'] = $request->bizid;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreatePublicAntChainAccount',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreatePublicAntChainAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreatePublicAntChainAccountRequest $request
     *
     * @return CreatePublicAntChainAccountResponse
     */
    public function createPublicAntChainAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPublicAntChainAccountWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return CreateSmartContractJobResponse
     */
    public function createSmartContractJobWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'CreateSmartContractJob',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateSmartContractJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return CreateSmartContractJobResponse
     */
    public function createSmartContractJob()
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSmartContractJobWithOptions($runtime);
    }

    /**
     * @param CreateTriggerRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateTriggerResponse
     */
    public function createTriggerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->channelId)) {
            $body['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->options)) {
            $body['Options'] = $request->options;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $body['OrganizationId'] = $request->organizationId;
        }
        if (!Utils::isUnset($request->source)) {
            $body['Source'] = $request->source;
        }
        if (!Utils::isUnset($request->status)) {
            $body['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->type)) {
            $body['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateTrigger',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateTriggerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateTriggerRequest $request
     *
     * @return CreateTriggerResponse
     */
    public function createTrigger($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTriggerWithOptions($request, $runtime);
    }

    /**
     * @param DeleteAntChainConsortiumRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DeleteAntChainConsortiumResponse
     */
    public function deleteAntChainConsortiumWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->consortiumId)) {
            $body['ConsortiumId'] = $request->consortiumId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteAntChainConsortium',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteAntChainConsortiumResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteAntChainConsortiumRequest $request
     *
     * @return DeleteAntChainConsortiumResponse
     */
    public function deleteAntChainConsortium($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAntChainConsortiumWithOptions($request, $runtime);
    }

    /**
     * @param DeleteAntChainContractContentRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DeleteAntChainContractContentResponse
     */
    public function deleteAntChainContractContentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->contentId)) {
            $body['ContentId'] = $request->contentId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteAntChainContractContent',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteAntChainContractContentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteAntChainContractContentRequest $request
     *
     * @return DeleteAntChainContractContentResponse
     */
    public function deleteAntChainContractContent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAntChainContractContentWithOptions($request, $runtime);
    }

    /**
     * @param DeleteAntChainContractProjectRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DeleteAntChainContractProjectResponse
     */
    public function deleteAntChainContractProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteAntChainContractProject',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteAntChainContractProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteAntChainContractProjectRequest $request
     *
     * @return DeleteAntChainContractProjectResponse
     */
    public function deleteAntChainContractProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAntChainContractProjectWithOptions($request, $runtime);
    }

    /**
     * @param DeleteAntChainMiniAppQRCodeAuthorizedUserRequest $request
     * @param RuntimeOptions                                   $runtime
     *
     * @return DeleteAntChainMiniAppQRCodeAuthorizedUserResponse
     */
    public function deleteAntChainMiniAppQRCodeAuthorizedUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->antChainId)) {
            $body['AntChainId'] = $request->antChainId;
        }
        if (!Utils::isUnset($request->phone)) {
            $body['Phone'] = $request->phone;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteAntChainMiniAppQRCodeAuthorizedUser',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteAntChainMiniAppQRCodeAuthorizedUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteAntChainMiniAppQRCodeAuthorizedUserRequest $request
     *
     * @return DeleteAntChainMiniAppQRCodeAuthorizedUserResponse
     */
    public function deleteAntChainMiniAppQRCodeAuthorizedUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAntChainMiniAppQRCodeAuthorizedUserWithOptions($request, $runtime);
    }

    /**
     * @param DeleteChaincodeRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteChaincodeResponse
     */
    public function deleteChaincodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->chaincodeId)) {
            $body['ChaincodeId'] = $request->chaincodeId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteChaincode',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteChaincodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteChaincodeRequest $request
     *
     * @return DeleteChaincodeResponse
     */
    public function deleteChaincode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteChaincodeWithOptions($request, $runtime);
    }

    /**
     * @param DeleteGovernanceTaskRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteGovernanceTaskResponse
     */
    public function deleteGovernanceTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->channelId)) {
            $body['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $body['OrganizationId'] = $request->organizationId;
        }
        if (!Utils::isUnset($request->taskId)) {
            $body['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteGovernanceTask',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteGovernanceTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteGovernanceTaskRequest $request
     *
     * @return DeleteGovernanceTaskResponse
     */
    public function deleteGovernanceTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteGovernanceTaskWithOptions($request, $runtime);
    }

    /**
     * @param DeleteTriggerRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteTriggerResponse
     */
    public function deleteTriggerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->channelId)) {
            $query['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $query['OrganizationId'] = $request->organizationId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteTrigger',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteTriggerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteTriggerRequest $request
     *
     * @return DeleteTriggerResponse
     */
    public function deleteTrigger($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTriggerWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAntChainAccountsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeAntChainAccountsResponse
     */
    public function describeAntChainAccountsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->antChainId)) {
            $body['AntChainId'] = $request->antChainId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeAntChainAccounts',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAntChainAccountsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAntChainAccountsRequest $request
     *
     * @return DescribeAntChainAccountsResponse
     */
    public function describeAntChainAccounts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAntChainAccountsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAntChainAccountsNewRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeAntChainAccountsNewResponse
     */
    public function describeAntChainAccountsNewWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->antChainId)) {
            $body['AntChainId'] = $request->antChainId;
        }
        if (!Utils::isUnset($request->consortiumId)) {
            $body['ConsortiumId'] = $request->consortiumId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeAntChainAccountsNew',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAntChainAccountsNewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAntChainAccountsNewRequest $request
     *
     * @return DescribeAntChainAccountsNewResponse
     */
    public function describeAntChainAccountsNew($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAntChainAccountsNewWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAntChainApplicationsRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeAntChainApplicationsResponse
     */
    public function describeAntChainApplicationsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bizid)) {
            $body['Bizid'] = $request->bizid;
        }
        if (!Utils::isUnset($request->current)) {
            $body['Current'] = $request->current;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->status)) {
            $body['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeAntChainApplications',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAntChainApplicationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAntChainApplicationsRequest $request
     *
     * @return DescribeAntChainApplicationsResponse
     */
    public function describeAntChainApplications($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAntChainApplicationsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAntChainBlockRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeAntChainBlockResponse
     */
    public function describeAntChainBlockWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->antChainId)) {
            $body['AntChainId'] = $request->antChainId;
        }
        if (!Utils::isUnset($request->height)) {
            $body['Height'] = $request->height;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeAntChainBlock',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAntChainBlockResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAntChainBlockRequest $request
     *
     * @return DescribeAntChainBlockResponse
     */
    public function describeAntChainBlock($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAntChainBlockWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAntChainBlockNewRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeAntChainBlockNewResponse
     */
    public function describeAntChainBlockNewWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->antChainId)) {
            $body['AntChainId'] = $request->antChainId;
        }
        if (!Utils::isUnset($request->consortiumId)) {
            $body['ConsortiumId'] = $request->consortiumId;
        }
        if (!Utils::isUnset($request->height)) {
            $body['Height'] = $request->height;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeAntChainBlockNew',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAntChainBlockNewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAntChainBlockNewRequest $request
     *
     * @return DescribeAntChainBlockNewResponse
     */
    public function describeAntChainBlockNew($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAntChainBlockNewWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAntChainCertificateApplicationsRequest $request
     * @param RuntimeOptions                                 $runtime
     *
     * @return DescribeAntChainCertificateApplicationsResponse
     */
    public function describeAntChainCertificateApplicationsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->antChainId)) {
            $body['AntChainId'] = $request->antChainId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->status)) {
            $body['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeAntChainCertificateApplications',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAntChainCertificateApplicationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAntChainCertificateApplicationsRequest $request
     *
     * @return DescribeAntChainCertificateApplicationsResponse
     */
    public function describeAntChainCertificateApplications($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAntChainCertificateApplicationsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAntChainCertificateApplicationsNewRequest $request
     * @param RuntimeOptions                                    $runtime
     *
     * @return DescribeAntChainCertificateApplicationsNewResponse
     */
    public function describeAntChainCertificateApplicationsNewWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->antChainId)) {
            $body['AntChainId'] = $request->antChainId;
        }
        if (!Utils::isUnset($request->consortiumId)) {
            $body['ConsortiumId'] = $request->consortiumId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->status)) {
            $body['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeAntChainCertificateApplicationsNew',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAntChainCertificateApplicationsNewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAntChainCertificateApplicationsNewRequest $request
     *
     * @return DescribeAntChainCertificateApplicationsNewResponse
     */
    public function describeAntChainCertificateApplicationsNew($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAntChainCertificateApplicationsNewWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAntChainConfigOptionsRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeAntChainConfigOptionsResponse
     */
    public function describeAntChainConfigOptionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->purpose)) {
            $query['Purpose'] = $request->purpose;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAntChainConfigOptions',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAntChainConfigOptionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAntChainConfigOptionsRequest $request
     *
     * @return DescribeAntChainConfigOptionsResponse
     */
    public function describeAntChainConfigOptions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAntChainConfigOptionsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAntChainConsortiumsRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeAntChainConsortiumsResponse
     */
    public function describeAntChainConsortiumsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeAntChainConsortiums',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAntChainConsortiumsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAntChainConsortiumsRequest $request
     *
     * @return DescribeAntChainConsortiumsResponse
     */
    public function describeAntChainConsortiums($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAntChainConsortiumsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAntChainConsortiumsNewRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeAntChainConsortiumsNewResponse
     */
    public function describeAntChainConsortiumsNewWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeAntChainConsortiumsNew',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAntChainConsortiumsNewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAntChainConsortiumsNewRequest $request
     *
     * @return DescribeAntChainConsortiumsNewResponse
     */
    public function describeAntChainConsortiumsNew($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAntChainConsortiumsNewWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAntChainContractProjectContentTreeRequest $request
     * @param RuntimeOptions                                    $runtime
     *
     * @return DescribeAntChainContractProjectContentTreeResponse
     */
    public function describeAntChainContractProjectContentTreeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeAntChainContractProjectContentTree',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAntChainContractProjectContentTreeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAntChainContractProjectContentTreeRequest $request
     *
     * @return DescribeAntChainContractProjectContentTreeResponse
     */
    public function describeAntChainContractProjectContentTree($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAntChainContractProjectContentTreeWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAntChainContractProjectContentTreeNewRequest $request
     * @param RuntimeOptions                                       $runtime
     *
     * @return DescribeAntChainContractProjectContentTreeNewResponse
     */
    public function describeAntChainContractProjectContentTreeNewWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->consortiumId)) {
            $body['ConsortiumId'] = $request->consortiumId;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeAntChainContractProjectContentTreeNew',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAntChainContractProjectContentTreeNewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAntChainContractProjectContentTreeNewRequest $request
     *
     * @return DescribeAntChainContractProjectContentTreeNewResponse
     */
    public function describeAntChainContractProjectContentTreeNew($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAntChainContractProjectContentTreeNewWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAntChainContractProjectsRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeAntChainContractProjectsResponse
     */
    public function describeAntChainContractProjectsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->consortiumId)) {
            $body['ConsortiumId'] = $request->consortiumId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeAntChainContractProjects',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAntChainContractProjectsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAntChainContractProjectsRequest $request
     *
     * @return DescribeAntChainContractProjectsResponse
     */
    public function describeAntChainContractProjects($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAntChainContractProjectsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAntChainContractProjectsNewRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return DescribeAntChainContractProjectsNewResponse
     */
    public function describeAntChainContractProjectsNewWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->consortiumId)) {
            $body['ConsortiumId'] = $request->consortiumId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeAntChainContractProjectsNew',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAntChainContractProjectsNewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAntChainContractProjectsNewRequest $request
     *
     * @return DescribeAntChainContractProjectsNewResponse
     */
    public function describeAntChainContractProjectsNew($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAntChainContractProjectsNewWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAntChainDownloadPathsRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeAntChainDownloadPathsResponse
     */
    public function describeAntChainDownloadPathsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->antChainId)) {
            $body['AntChainId'] = $request->antChainId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeAntChainDownloadPaths',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAntChainDownloadPathsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAntChainDownloadPathsRequest $request
     *
     * @return DescribeAntChainDownloadPathsResponse
     */
    public function describeAntChainDownloadPaths($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAntChainDownloadPathsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAntChainDownloadPathsNewRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeAntChainDownloadPathsNewResponse
     */
    public function describeAntChainDownloadPathsNewWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->antChainId)) {
            $body['AntChainId'] = $request->antChainId;
        }
        if (!Utils::isUnset($request->consortiumId)) {
            $body['ConsortiumId'] = $request->consortiumId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeAntChainDownloadPathsNew',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAntChainDownloadPathsNewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAntChainDownloadPathsNewRequest $request
     *
     * @return DescribeAntChainDownloadPathsNewResponse
     */
    public function describeAntChainDownloadPathsNew($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAntChainDownloadPathsNewWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAntChainInformationRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeAntChainInformationResponse
     */
    public function describeAntChainInformationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->antChainId)) {
            $body['AntChainId'] = $request->antChainId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeAntChainInformation',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAntChainInformationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAntChainInformationRequest $request
     *
     * @return DescribeAntChainInformationResponse
     */
    public function describeAntChainInformation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAntChainInformationWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAntChainInformationNewRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeAntChainInformationNewResponse
     */
    public function describeAntChainInformationNewWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->antChainId)) {
            $body['AntChainId'] = $request->antChainId;
        }
        if (!Utils::isUnset($request->consortiumId)) {
            $body['ConsortiumId'] = $request->consortiumId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeAntChainInformationNew',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAntChainInformationNewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAntChainInformationNewRequest $request
     *
     * @return DescribeAntChainInformationNewResponse
     */
    public function describeAntChainInformationNew($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAntChainInformationNewWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAntChainLatestBlocksRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeAntChainLatestBlocksResponse
     */
    public function describeAntChainLatestBlocksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->antChainId)) {
            $body['AntChainId'] = $request->antChainId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeAntChainLatestBlocks',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAntChainLatestBlocksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAntChainLatestBlocksRequest $request
     *
     * @return DescribeAntChainLatestBlocksResponse
     */
    public function describeAntChainLatestBlocks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAntChainLatestBlocksWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAntChainLatestBlocksNewRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeAntChainLatestBlocksNewResponse
     */
    public function describeAntChainLatestBlocksNewWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->antChainId)) {
            $body['AntChainId'] = $request->antChainId;
        }
        if (!Utils::isUnset($request->consortiumId)) {
            $body['ConsortiumId'] = $request->consortiumId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeAntChainLatestBlocksNew',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAntChainLatestBlocksNewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAntChainLatestBlocksNewRequest $request
     *
     * @return DescribeAntChainLatestBlocksNewResponse
     */
    public function describeAntChainLatestBlocksNew($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAntChainLatestBlocksNewWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAntChainLatestTransactionDigestsRequest $request
     * @param RuntimeOptions                                  $runtime
     *
     * @return DescribeAntChainLatestTransactionDigestsResponse
     */
    public function describeAntChainLatestTransactionDigestsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->antChainId)) {
            $body['AntChainId'] = $request->antChainId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeAntChainLatestTransactionDigests',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAntChainLatestTransactionDigestsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAntChainLatestTransactionDigestsRequest $request
     *
     * @return DescribeAntChainLatestTransactionDigestsResponse
     */
    public function describeAntChainLatestTransactionDigests($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAntChainLatestTransactionDigestsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAntChainLatestTransactionDigestsNewRequest $request
     * @param RuntimeOptions                                     $runtime
     *
     * @return DescribeAntChainLatestTransactionDigestsNewResponse
     */
    public function describeAntChainLatestTransactionDigestsNewWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->antChainId)) {
            $body['AntChainId'] = $request->antChainId;
        }
        if (!Utils::isUnset($request->consortiumId)) {
            $body['ConsortiumId'] = $request->consortiumId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeAntChainLatestTransactionDigestsNew',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAntChainLatestTransactionDigestsNewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAntChainLatestTransactionDigestsNewRequest $request
     *
     * @return DescribeAntChainLatestTransactionDigestsNewResponse
     */
    public function describeAntChainLatestTransactionDigestsNew($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAntChainLatestTransactionDigestsNewWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAntChainMembersRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeAntChainMembersResponse
     */
    public function describeAntChainMembersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->consortiumId)) {
            $body['ConsortiumId'] = $request->consortiumId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeAntChainMembers',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAntChainMembersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAntChainMembersRequest $request
     *
     * @return DescribeAntChainMembersResponse
     */
    public function describeAntChainMembers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAntChainMembersWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAntChainMembersNewRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeAntChainMembersNewResponse
     */
    public function describeAntChainMembersNewWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->consortiumId)) {
            $body['ConsortiumId'] = $request->consortiumId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeAntChainMembersNew',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAntChainMembersNewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAntChainMembersNewRequest $request
     *
     * @return DescribeAntChainMembersNewResponse
     */
    public function describeAntChainMembersNew($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAntChainMembersNewWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAntChainMiniAppBrowserQRCodeAccessLogRequest $request
     * @param RuntimeOptions                                       $runtime
     *
     * @return DescribeAntChainMiniAppBrowserQRCodeAccessLogResponse
     */
    public function describeAntChainMiniAppBrowserQRCodeAccessLogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->antChainId)) {
            $body['AntChainId'] = $request->antChainId;
        }
        if (!Utils::isUnset($request->QRCodeType)) {
            $body['QRCodeType'] = $request->QRCodeType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeAntChainMiniAppBrowserQRCodeAccessLog',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAntChainMiniAppBrowserQRCodeAccessLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAntChainMiniAppBrowserQRCodeAccessLogRequest $request
     *
     * @return DescribeAntChainMiniAppBrowserQRCodeAccessLogResponse
     */
    public function describeAntChainMiniAppBrowserQRCodeAccessLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAntChainMiniAppBrowserQRCodeAccessLogWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAntChainMiniAppBrowserQRCodeAccessLogNewRequest $request
     * @param RuntimeOptions                                          $runtime
     *
     * @return DescribeAntChainMiniAppBrowserQRCodeAccessLogNewResponse
     */
    public function describeAntChainMiniAppBrowserQRCodeAccessLogNewWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->antChainId)) {
            $body['AntChainId'] = $request->antChainId;
        }
        if (!Utils::isUnset($request->QRCodeType)) {
            $body['QRCodeType'] = $request->QRCodeType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeAntChainMiniAppBrowserQRCodeAccessLogNew',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAntChainMiniAppBrowserQRCodeAccessLogNewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAntChainMiniAppBrowserQRCodeAccessLogNewRequest $request
     *
     * @return DescribeAntChainMiniAppBrowserQRCodeAccessLogNewResponse
     */
    public function describeAntChainMiniAppBrowserQRCodeAccessLogNew($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAntChainMiniAppBrowserQRCodeAccessLogNewWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAntChainMiniAppBrowserQRCodeAuthorizedUsersRequest $request
     * @param RuntimeOptions                                             $runtime
     *
     * @return DescribeAntChainMiniAppBrowserQRCodeAuthorizedUsersResponse
     */
    public function describeAntChainMiniAppBrowserQRCodeAuthorizedUsersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->antChainId)) {
            $body['AntChainId'] = $request->antChainId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->QRCodeType)) {
            $body['QRCodeType'] = $request->QRCodeType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeAntChainMiniAppBrowserQRCodeAuthorizedUsers',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAntChainMiniAppBrowserQRCodeAuthorizedUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAntChainMiniAppBrowserQRCodeAuthorizedUsersRequest $request
     *
     * @return DescribeAntChainMiniAppBrowserQRCodeAuthorizedUsersResponse
     */
    public function describeAntChainMiniAppBrowserQRCodeAuthorizedUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAntChainMiniAppBrowserQRCodeAuthorizedUsersWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAntChainMiniAppBrowserQRCodeAuthorizedUsersNewRequest $request
     * @param RuntimeOptions                                                $runtime
     *
     * @return DescribeAntChainMiniAppBrowserQRCodeAuthorizedUsersNewResponse
     */
    public function describeAntChainMiniAppBrowserQRCodeAuthorizedUsersNewWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->antChainId)) {
            $body['AntChainId'] = $request->antChainId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->QRCodeType)) {
            $body['QRCodeType'] = $request->QRCodeType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeAntChainMiniAppBrowserQRCodeAuthorizedUsersNew',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAntChainMiniAppBrowserQRCodeAuthorizedUsersNewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAntChainMiniAppBrowserQRCodeAuthorizedUsersNewRequest $request
     *
     * @return DescribeAntChainMiniAppBrowserQRCodeAuthorizedUsersNewResponse
     */
    public function describeAntChainMiniAppBrowserQRCodeAuthorizedUsersNew($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAntChainMiniAppBrowserQRCodeAuthorizedUsersNewWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAntChainMiniAppBrowserTransactionQRCodeRequest $request
     * @param RuntimeOptions                                         $runtime
     *
     * @return DescribeAntChainMiniAppBrowserTransactionQRCodeResponse
     */
    public function describeAntChainMiniAppBrowserTransactionQRCodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->antChainId)) {
            $body['AntChainId'] = $request->antChainId;
        }
        if (!Utils::isUnset($request->transactionHash)) {
            $body['TransactionHash'] = $request->transactionHash;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeAntChainMiniAppBrowserTransactionQRCode',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAntChainMiniAppBrowserTransactionQRCodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAntChainMiniAppBrowserTransactionQRCodeRequest $request
     *
     * @return DescribeAntChainMiniAppBrowserTransactionQRCodeResponse
     */
    public function describeAntChainMiniAppBrowserTransactionQRCode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAntChainMiniAppBrowserTransactionQRCodeWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAntChainMiniAppBrowserTransactionQRCodeNewRequest $request
     * @param RuntimeOptions                                            $runtime
     *
     * @return DescribeAntChainMiniAppBrowserTransactionQRCodeNewResponse
     */
    public function describeAntChainMiniAppBrowserTransactionQRCodeNewWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->antChainId)) {
            $body['AntChainId'] = $request->antChainId;
        }
        if (!Utils::isUnset($request->contractId)) {
            $body['ContractId'] = $request->contractId;
        }
        if (!Utils::isUnset($request->transactionHash)) {
            $body['TransactionHash'] = $request->transactionHash;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeAntChainMiniAppBrowserTransactionQRCodeNew',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAntChainMiniAppBrowserTransactionQRCodeNewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAntChainMiniAppBrowserTransactionQRCodeNewRequest $request
     *
     * @return DescribeAntChainMiniAppBrowserTransactionQRCodeNewResponse
     */
    public function describeAntChainMiniAppBrowserTransactionQRCodeNew($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAntChainMiniAppBrowserTransactionQRCodeNewWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAntChainNodesNewRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeAntChainNodesNewResponse
     */
    public function describeAntChainNodesNewWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->antChainId)) {
            $body['AntChainId'] = $request->antChainId;
        }
        if (!Utils::isUnset($request->consortiumId)) {
            $body['ConsortiumId'] = $request->consortiumId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeAntChainNodesNew',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAntChainNodesNewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAntChainNodesNewRequest $request
     *
     * @return DescribeAntChainNodesNewResponse
     */
    public function describeAntChainNodesNew($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAntChainNodesNewWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAntChainQRCodeAuthorizationRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return DescribeAntChainQRCodeAuthorizationResponse
     */
    public function describeAntChainQRCodeAuthorizationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->antChainId)) {
            $body['AntChainId'] = $request->antChainId;
        }
        if (!Utils::isUnset($request->QRCodeType)) {
            $body['QRCodeType'] = $request->QRCodeType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeAntChainQRCodeAuthorization',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAntChainQRCodeAuthorizationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAntChainQRCodeAuthorizationRequest $request
     *
     * @return DescribeAntChainQRCodeAuthorizationResponse
     */
    public function describeAntChainQRCodeAuthorization($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAntChainQRCodeAuthorizationWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAntChainQRCodeAuthorizationNewRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return DescribeAntChainQRCodeAuthorizationNewResponse
     */
    public function describeAntChainQRCodeAuthorizationNewWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->antChainId)) {
            $body['AntChainId'] = $request->antChainId;
        }
        if (!Utils::isUnset($request->QRCodeType)) {
            $body['QRCodeType'] = $request->QRCodeType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeAntChainQRCodeAuthorizationNew',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAntChainQRCodeAuthorizationNewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAntChainQRCodeAuthorizationNewRequest $request
     *
     * @return DescribeAntChainQRCodeAuthorizationNewResponse
     */
    public function describeAntChainQRCodeAuthorizationNew($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAntChainQRCodeAuthorizationNewWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAntChainRegionNamesRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeAntChainRegionNamesResponse
     */
    public function describeAntChainRegionNamesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->locale)) {
            $body['Locale'] = $request->locale;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeAntChainRegionNames',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAntChainRegionNamesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAntChainRegionNamesRequest $request
     *
     * @return DescribeAntChainRegionNamesResponse
     */
    public function describeAntChainRegionNames($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAntChainRegionNamesWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return DescribeAntChainRegionsForSaleResponse
     */
    public function describeAntChainRegionsForSaleWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'DescribeAntChainRegionsForSale',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAntChainRegionsForSaleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return DescribeAntChainRegionsForSaleResponse
     */
    public function describeAntChainRegionsForSale()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAntChainRegionsForSaleWithOptions($runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return DescribeAntChainResourceTypesResponse
     */
    public function describeAntChainResourceTypesWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'DescribeAntChainResourceTypes',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAntChainResourceTypesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return DescribeAntChainResourceTypesResponse
     */
    public function describeAntChainResourceTypes()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAntChainResourceTypesWithOptions($runtime);
    }

    /**
     * @param DescribeAntChainRestRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeAntChainRestResponse
     */
    public function describeAntChainRestWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->antChainId)) {
            $body['AntChainId'] = $request->antChainId;
        }
        if (!Utils::isUnset($request->consortiumId)) {
            $body['ConsortiumId'] = $request->consortiumId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeAntChainRest',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAntChainRestResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAntChainRestRequest $request
     *
     * @return DescribeAntChainRestResponse
     */
    public function describeAntChainRest($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAntChainRestWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAntChainSubnetListRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeAntChainSubnetListResponse
     */
    public function describeAntChainSubnetListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->antChainId)) {
            $body['AntChainId'] = $request->antChainId;
        }
        if (!Utils::isUnset($request->consortiumId)) {
            $body['ConsortiumId'] = $request->consortiumId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeAntChainSubnetList',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAntChainSubnetListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAntChainSubnetListRequest $request
     *
     * @return DescribeAntChainSubnetListResponse
     */
    public function describeAntChainSubnetList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAntChainSubnetListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAntChainSubnetMemberListRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeAntChainSubnetMemberListResponse
     */
    public function describeAntChainSubnetMemberListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->antChainId)) {
            $body['AntChainId'] = $request->antChainId;
        }
        if (!Utils::isUnset($request->consortiumId)) {
            $body['ConsortiumId'] = $request->consortiumId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeAntChainSubnetMemberList',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAntChainSubnetMemberListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAntChainSubnetMemberListRequest $request
     *
     * @return DescribeAntChainSubnetMemberListResponse
     */
    public function describeAntChainSubnetMemberList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAntChainSubnetMemberListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAntChainSubnetNodeListRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeAntChainSubnetNodeListResponse
     */
    public function describeAntChainSubnetNodeListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->antChainId)) {
            $body['AntChainId'] = $request->antChainId;
        }
        if (!Utils::isUnset($request->consortiumId)) {
            $body['ConsortiumId'] = $request->consortiumId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeAntChainSubnetNodeList',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAntChainSubnetNodeListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAntChainSubnetNodeListRequest $request
     *
     * @return DescribeAntChainSubnetNodeListResponse
     */
    public function describeAntChainSubnetNodeList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAntChainSubnetNodeListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAntChainTransactionRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeAntChainTransactionResponse
     */
    public function describeAntChainTransactionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->antChainId)) {
            $body['AntChainId'] = $request->antChainId;
        }
        if (!Utils::isUnset($request->hash)) {
            $body['Hash'] = $request->hash;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeAntChainTransaction',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAntChainTransactionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAntChainTransactionRequest $request
     *
     * @return DescribeAntChainTransactionResponse
     */
    public function describeAntChainTransaction($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAntChainTransactionWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAntChainTransactionNewRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeAntChainTransactionNewResponse
     */
    public function describeAntChainTransactionNewWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->antChainId)) {
            $body['AntChainId'] = $request->antChainId;
        }
        if (!Utils::isUnset($request->consortiumId)) {
            $body['ConsortiumId'] = $request->consortiumId;
        }
        if (!Utils::isUnset($request->hash)) {
            $body['Hash'] = $request->hash;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeAntChainTransactionNew',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAntChainTransactionNewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAntChainTransactionNewRequest $request
     *
     * @return DescribeAntChainTransactionNewResponse
     */
    public function describeAntChainTransactionNew($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAntChainTransactionNewWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAntChainTransactionReceiptNewRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return DescribeAntChainTransactionReceiptNewResponse
     */
    public function describeAntChainTransactionReceiptNewWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->antChainId)) {
            $body['AntChainId'] = $request->antChainId;
        }
        if (!Utils::isUnset($request->consortiumId)) {
            $body['ConsortiumId'] = $request->consortiumId;
        }
        if (!Utils::isUnset($request->hash)) {
            $body['Hash'] = $request->hash;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeAntChainTransactionReceiptNew',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAntChainTransactionReceiptNewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAntChainTransactionReceiptNewRequest $request
     *
     * @return DescribeAntChainTransactionReceiptNewResponse
     */
    public function describeAntChainTransactionReceiptNew($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAntChainTransactionReceiptNewWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAntChainTransactionStatisticsRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return DescribeAntChainTransactionStatisticsResponse
     */
    public function describeAntChainTransactionStatisticsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->antChainId)) {
            $body['AntChainId'] = $request->antChainId;
        }
        if (!Utils::isUnset($request->end)) {
            $body['End'] = $request->end;
        }
        if (!Utils::isUnset($request->start)) {
            $body['Start'] = $request->start;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeAntChainTransactionStatistics',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAntChainTransactionStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAntChainTransactionStatisticsRequest $request
     *
     * @return DescribeAntChainTransactionStatisticsResponse
     */
    public function describeAntChainTransactionStatistics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAntChainTransactionStatisticsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAntChainTransactionStatisticsNewRequest $request
     * @param RuntimeOptions                                  $runtime
     *
     * @return DescribeAntChainTransactionStatisticsNewResponse
     */
    public function describeAntChainTransactionStatisticsNewWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->antChainId)) {
            $body['AntChainId'] = $request->antChainId;
        }
        if (!Utils::isUnset($request->consortiumId)) {
            $body['ConsortiumId'] = $request->consortiumId;
        }
        if (!Utils::isUnset($request->end)) {
            $body['End'] = $request->end;
        }
        if (!Utils::isUnset($request->start)) {
            $body['Start'] = $request->start;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeAntChainTransactionStatisticsNew',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAntChainTransactionStatisticsNewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAntChainTransactionStatisticsNewRequest $request
     *
     * @return DescribeAntChainTransactionStatisticsNewResponse
     */
    public function describeAntChainTransactionStatisticsNew($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAntChainTransactionStatisticsNewWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAntChainsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeAntChainsResponse
     */
    public function describeAntChainsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->consortiumId)) {
            $body['ConsortiumId'] = $request->consortiumId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeAntChains',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAntChainsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAntChainsRequest $request
     *
     * @return DescribeAntChainsResponse
     */
    public function describeAntChains($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAntChainsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAntChainsNewRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeAntChainsNewResponse
     */
    public function describeAntChainsNewWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->consortiumId)) {
            $body['ConsortiumId'] = $request->consortiumId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeAntChainsNew',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAntChainsNewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAntChainsNewRequest $request
     *
     * @return DescribeAntChainsNewResponse
     */
    public function describeAntChainsNew($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAntChainsNewWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAntRegionsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeAntRegionsResponse
     */
    public function describeAntRegionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->locale)) {
            $body['Locale'] = $request->locale;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeAntRegions',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAntRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAntRegionsRequest $request
     *
     * @return DescribeAntRegionsResponse
     */
    public function describeAntRegions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAntRegionsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAppliesRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeAppliesResponse
     */
    public function describeAppliesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bizid)) {
            $body['Bizid'] = $request->bizid;
        }
        if (!Utils::isUnset($request->current)) {
            $body['Current'] = $request->current;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->status)) {
            $body['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeApplies',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAppliesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAppliesRequest $request
     *
     * @return DescribeAppliesResponse
     */
    public function describeApplies($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAppliesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeBcSchemaRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeBcSchemaResponse
     */
    public function describeBcSchemaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bizid)) {
            $body['Bizid'] = $request->bizid;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeBcSchema',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeBcSchemaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeBcSchemaRequest $request
     *
     * @return DescribeBcSchemaResponse
     */
    public function describeBcSchema($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBcSchemaWithOptions($request, $runtime);
    }

    /**
     * @param DescribeBlockRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DescribeBlockResponse
     */
    public function describeBlockWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bizid)) {
            $body['Bizid'] = $request->bizid;
        }
        if (!Utils::isUnset($request->height)) {
            $body['Height'] = $request->height;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeBlock',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeBlockResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeBlockRequest $request
     *
     * @return DescribeBlockResponse
     */
    public function describeBlock($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBlockWithOptions($request, $runtime);
    }

    /**
     * @param DescribeBlockchainApplicationRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeBlockchainApplicationResponse
     */
    public function describeBlockchainApplicationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bizid)) {
            $body['Bizid'] = $request->bizid;
        }
        if (!Utils::isUnset($request->current)) {
            $body['Current'] = $request->current;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->status)) {
            $body['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeBlockchainApplication',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeBlockchainApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeBlockchainApplicationRequest $request
     *
     * @return DescribeBlockchainApplicationResponse
     */
    public function describeBlockchainApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBlockchainApplicationWithOptions($request, $runtime);
    }

    /**
     * @param DescribeBlockchainConfigOptionRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeBlockchainConfigOptionResponse
     */
    public function describeBlockchainConfigOptionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->purpose)) {
            $query['Purpose'] = $request->purpose;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeBlockchainConfigOption',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeBlockchainConfigOptionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeBlockchainConfigOptionRequest $request
     *
     * @return DescribeBlockchainConfigOptionResponse
     */
    public function describeBlockchainConfigOption($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBlockchainConfigOptionWithOptions($request, $runtime);
    }

    /**
     * @param DescribeBlockchainCreateTaskRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeBlockchainCreateTaskResponse
     */
    public function describeBlockchainCreateTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->current)) {
            $body['Current'] = $request->current;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeBlockchainCreateTask',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeBlockchainCreateTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeBlockchainCreateTaskRequest $request
     *
     * @return DescribeBlockchainCreateTaskResponse
     */
    public function describeBlockchainCreateTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBlockchainCreateTaskWithOptions($request, $runtime);
    }

    /**
     * @param DescribeBlockchainCreationConfigOptionsRequest $request
     * @param RuntimeOptions                                 $runtime
     *
     * @return DescribeBlockchainCreationConfigOptionsResponse
     */
    public function describeBlockchainCreationConfigOptionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->purpose)) {
            $query['Purpose'] = $request->purpose;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeBlockchainCreationConfigOptions',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeBlockchainCreationConfigOptionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeBlockchainCreationConfigOptionsRequest $request
     *
     * @return DescribeBlockchainCreationConfigOptionsResponse
     */
    public function describeBlockchainCreationConfigOptions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBlockchainCreationConfigOptionsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeBlockchainInfoRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeBlockchainInfoResponse
     */
    public function describeBlockchainInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bizid)) {
            $body['Bizid'] = $request->bizid;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeBlockchainInfo',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeBlockchainInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeBlockchainInfoRequest $request
     *
     * @return DescribeBlockchainInfoResponse
     */
    public function describeBlockchainInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBlockchainInfoWithOptions($request, $runtime);
    }

    /**
     * @param DescribeBlockchainSchemaRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeBlockchainSchemaResponse
     */
    public function describeBlockchainSchemaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bizid)) {
            $body['Bizid'] = $request->bizid;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeBlockchainSchema',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeBlockchainSchemaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeBlockchainSchemaRequest $request
     *
     * @return DescribeBlockchainSchemaResponse
     */
    public function describeBlockchainSchema($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBlockchainSchemaWithOptions($request, $runtime);
    }

    /**
     * @param DescribeBlockchainSchemaDetailRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeBlockchainSchemaDetailResponse
     */
    public function describeBlockchainSchemaDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bizid)) {
            $body['Bizid'] = $request->bizid;
        }
        if (!Utils::isUnset($request->schemaId)) {
            $body['SchemaId'] = $request->schemaId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeBlockchainSchemaDetail',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeBlockchainSchemaDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeBlockchainSchemaDetailRequest $request
     *
     * @return DescribeBlockchainSchemaDetailResponse
     */
    public function describeBlockchainSchemaDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBlockchainSchemaDetailWithOptions($request, $runtime);
    }

    /**
     * @param DescribeBlockchainSchemaFileOSSPropertiesRequest $request
     * @param RuntimeOptions                                   $runtime
     *
     * @return DescribeBlockchainSchemaFileOSSPropertiesResponse
     */
    public function describeBlockchainSchemaFileOSSPropertiesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bizid)) {
            $body['Bizid'] = $request->bizid;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeBlockchainSchemaFileOSSProperties',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeBlockchainSchemaFileOSSPropertiesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeBlockchainSchemaFileOSSPropertiesRequest $request
     *
     * @return DescribeBlockchainSchemaFileOSSPropertiesResponse
     */
    public function describeBlockchainSchemaFileOSSProperties($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBlockchainSchemaFileOSSPropertiesWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return DescribeBlockchainSchemaTemplatesResponse
     */
    public function describeBlockchainSchemaTemplatesWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'DescribeBlockchainSchemaTemplates',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeBlockchainSchemaTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return DescribeBlockchainSchemaTemplatesResponse
     */
    public function describeBlockchainSchemaTemplates()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBlockchainSchemaTemplatesWithOptions($runtime);
    }

    /**
     * @param DescribeCSIGatewayEndpointRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeCSIGatewayEndpointResponse
     */
    public function describeCSIGatewayEndpointWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->organizationId)) {
            $query['OrganizationId'] = $request->organizationId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeCSIGatewayEndpoint',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCSIGatewayEndpointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeCSIGatewayEndpointRequest $request
     *
     * @return DescribeCSIGatewayEndpointResponse
     */
    public function describeCSIGatewayEndpoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCSIGatewayEndpointWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCandidateOrganizationsRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeCandidateOrganizationsResponse
     */
    public function describeCandidateOrganizationsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->location)) {
            $body['Location'] = $request->location;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeCandidateOrganizations',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCandidateOrganizationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeCandidateOrganizationsRequest $request
     *
     * @return DescribeCandidateOrganizationsResponse
     */
    public function describeCandidateOrganizations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCandidateOrganizationsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeChaincodeCollectionConfigRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeChaincodeCollectionConfigResponse
     */
    public function describeChaincodeCollectionConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->chaincodeId)) {
            $body['ChaincodeId'] = $request->chaincodeId;
        }
        if (!Utils::isUnset($request->location)) {
            $body['Location'] = $request->location;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeChaincodeCollectionConfig',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeChaincodeCollectionConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeChaincodeCollectionConfigRequest $request
     *
     * @return DescribeChaincodeCollectionConfigResponse
     */
    public function describeChaincodeCollectionConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeChaincodeCollectionConfigWithOptions($request, $runtime);
    }

    /**
     * @param DescribeChaincodeDefinitionTaskRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeChaincodeDefinitionTaskResponse
     */
    public function describeChaincodeDefinitionTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->chaincodeId)) {
            $body['ChaincodeId'] = $request->chaincodeId;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $body['OrganizationId'] = $request->organizationId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeChaincodeDefinitionTask',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeChaincodeDefinitionTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeChaincodeDefinitionTaskRequest $request
     *
     * @return DescribeChaincodeDefinitionTaskResponse
     */
    public function describeChaincodeDefinitionTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeChaincodeDefinitionTaskWithOptions($request, $runtime);
    }

    /**
     * @param DescribeChaincodeUploadPolicyRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeChaincodeUploadPolicyResponse
     */
    public function describeChaincodeUploadPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->organizationId)) {
            $body['OrganizationId'] = $request->organizationId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeChaincodeUploadPolicy',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeChaincodeUploadPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeChaincodeUploadPolicyRequest $request
     *
     * @return DescribeChaincodeUploadPolicyResponse
     */
    public function describeChaincodeUploadPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeChaincodeUploadPolicyWithOptions($request, $runtime);
    }

    /**
     * @param DescribeChannelChaincodesRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeChannelChaincodesResponse
     */
    public function describeChannelChaincodesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->channelId)) {
            $body['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $body['OrganizationId'] = $request->organizationId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeChannelChaincodes',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeChannelChaincodesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeChannelChaincodesRequest $request
     *
     * @return DescribeChannelChaincodesResponse
     */
    public function describeChannelChaincodes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeChannelChaincodesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeChannelMembersRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeChannelMembersResponse
     */
    public function describeChannelMembersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->channelId)) {
            $query['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $query['OrganizationId'] = $request->organizationId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeChannelMembers',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeChannelMembersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeChannelMembersRequest $request
     *
     * @return DescribeChannelMembersResponse
     */
    public function describeChannelMembers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeChannelMembersWithOptions($request, $runtime);
    }

    /**
     * @param DescribeChannelTriggersRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeChannelTriggersResponse
     */
    public function describeChannelTriggersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->channelId)) {
            $query['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $query['OrganizationId'] = $request->organizationId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeChannelTriggers',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeChannelTriggersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeChannelTriggersRequest $request
     *
     * @return DescribeChannelTriggersResponse
     */
    public function describeChannelTriggers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeChannelTriggersWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCloudIntegrationServiceTokenRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return DescribeCloudIntegrationServiceTokenResponse
     */
    public function describeCloudIntegrationServiceTokenWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->organizationId)) {
            $body['OrganizationId'] = $request->organizationId;
        }
        if (!Utils::isUnset($request->service)) {
            $body['Service'] = $request->service;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeCloudIntegrationServiceToken',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCloudIntegrationServiceTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeCloudIntegrationServiceTokenRequest $request
     *
     * @return DescribeCloudIntegrationServiceTokenResponse
     */
    public function describeCloudIntegrationServiceToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCloudIntegrationServiceTokenWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCloudServiceOrganizationStatusRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return DescribeCloudServiceOrganizationStatusResponse
     */
    public function describeCloudServiceOrganizationStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->organizationId)) {
            $query['OrganizationId'] = $request->organizationId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeCloudServiceOrganizationStatus',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCloudServiceOrganizationStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeCloudServiceOrganizationStatusRequest $request
     *
     * @return DescribeCloudServiceOrganizationStatusResponse
     */
    public function describeCloudServiceOrganizationStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCloudServiceOrganizationStatusWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCloudServiceTypeStatusRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeCloudServiceTypeStatusResponse
     */
    public function describeCloudServiceTypeStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->organizationId)) {
            $body['OrganizationId'] = $request->organizationId;
        }
        if (!Utils::isUnset($request->serviceType)) {
            $body['ServiceType'] = $request->serviceType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeCloudServiceTypeStatus',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCloudServiceTypeStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeCloudServiceTypeStatusRequest $request
     *
     * @return DescribeCloudServiceTypeStatusResponse
     */
    public function describeCloudServiceTypeStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCloudServiceTypeStatusWithOptions($request, $runtime);
    }

    /**
     * @param DescribeConsortiumAdminStatusRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeConsortiumAdminStatusResponse
     */
    public function describeConsortiumAdminStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->location)) {
            $body['Location'] = $request->location;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeConsortiumAdminStatus',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeConsortiumAdminStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeConsortiumAdminStatusRequest $request
     *
     * @return DescribeConsortiumAdminStatusResponse
     */
    public function describeConsortiumAdminStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeConsortiumAdminStatusWithOptions($request, $runtime);
    }

    /**
     * @param DescribeConsortiumChaincodesRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeConsortiumChaincodesResponse
     */
    public function describeConsortiumChaincodesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->consortiumId)) {
            $body['ConsortiumId'] = $request->consortiumId;
        }
        if (!Utils::isUnset($request->location)) {
            $body['Location'] = $request->location;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeConsortiumChaincodes',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeConsortiumChaincodesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeConsortiumChaincodesRequest $request
     *
     * @return DescribeConsortiumChaincodesResponse
     */
    public function describeConsortiumChaincodes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeConsortiumChaincodesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeConsortiumChannelsRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeConsortiumChannelsResponse
     */
    public function describeConsortiumChannelsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->consortiumId)) {
            $query['ConsortiumId'] = $request->consortiumId;
        }
        $body = [];
        if (!Utils::isUnset($request->location)) {
            $body['Location'] = $request->location;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeConsortiumChannels',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeConsortiumChannelsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeConsortiumChannelsRequest $request
     *
     * @return DescribeConsortiumChannelsResponse
     */
    public function describeConsortiumChannels($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeConsortiumChannelsWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return DescribeConsortiumConfigResponse
     */
    public function describeConsortiumConfigWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'DescribeConsortiumConfig',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeConsortiumConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return DescribeConsortiumConfigResponse
     */
    public function describeConsortiumConfig()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeConsortiumConfigWithOptions($runtime);
    }

    /**
     * @param DescribeConsortiumDeletableRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeConsortiumDeletableResponse
     */
    public function describeConsortiumDeletableWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->consortiumId)) {
            $query['ConsortiumId'] = $request->consortiumId;
        }
        $body = [];
        if (!Utils::isUnset($request->location)) {
            $body['Location'] = $request->location;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeConsortiumDeletable',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeConsortiumDeletableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeConsortiumDeletableRequest $request
     *
     * @return DescribeConsortiumDeletableResponse
     */
    public function describeConsortiumDeletable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeConsortiumDeletableWithOptions($request, $runtime);
    }

    /**
     * @param DescribeConsortiumMemberApprovalRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeConsortiumMemberApprovalResponse
     */
    public function describeConsortiumMemberApprovalWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->consortiumId)) {
            $query['ConsortiumId'] = $request->consortiumId;
        }
        $body = [];
        if (!Utils::isUnset($request->location)) {
            $body['Location'] = $request->location;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeConsortiumMemberApproval',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeConsortiumMemberApprovalResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeConsortiumMemberApprovalRequest $request
     *
     * @return DescribeConsortiumMemberApprovalResponse
     */
    public function describeConsortiumMemberApproval($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeConsortiumMemberApprovalWithOptions($request, $runtime);
    }

    /**
     * @param DescribeConsortiumMembersRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeConsortiumMembersResponse
     */
    public function describeConsortiumMembersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->consortiumId)) {
            $body['ConsortiumId'] = $request->consortiumId;
        }
        if (!Utils::isUnset($request->location)) {
            $body['Location'] = $request->location;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeConsortiumMembers',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeConsortiumMembersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeConsortiumMembersRequest $request
     *
     * @return DescribeConsortiumMembersResponse
     */
    public function describeConsortiumMembers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeConsortiumMembersWithOptions($request, $runtime);
    }

    /**
     * @param DescribeConsortiumOrderersRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeConsortiumOrderersResponse
     */
    public function describeConsortiumOrderersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->consortiumId)) {
            $body['ConsortiumId'] = $request->consortiumId;
        }
        if (!Utils::isUnset($request->location)) {
            $body['Location'] = $request->location;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeConsortiumOrderers',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeConsortiumOrderersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeConsortiumOrderersRequest $request
     *
     * @return DescribeConsortiumOrderersResponse
     */
    public function describeConsortiumOrderers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeConsortiumOrderersWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return DescribeConsortiumSpecsResponse
     */
    public function describeConsortiumSpecsWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'DescribeConsortiumSpecs',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeConsortiumSpecsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return DescribeConsortiumSpecsResponse
     */
    public function describeConsortiumSpecs()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeConsortiumSpecsWithOptions($runtime);
    }

    /**
     * @param DescribeConsortiumsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeConsortiumsResponse
     */
    public function describeConsortiumsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->consortiumId)) {
            $query['ConsortiumId'] = $request->consortiumId;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $body = [];
        if (!Utils::isUnset($request->location)) {
            $body['Location'] = $request->location;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeConsortiums',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeConsortiumsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeConsortiumsRequest $request
     *
     * @return DescribeConsortiumsResponse
     */
    public function describeConsortiums($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeConsortiumsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDownloadPathsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeDownloadPathsResponse
     */
    public function describeDownloadPathsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bizid)) {
            $body['Bizid'] = $request->bizid;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeDownloadPaths',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDownloadPathsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDownloadPathsRequest $request
     *
     * @return DescribeDownloadPathsResponse
     */
    public function describeDownloadPaths($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDownloadPathsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDownloadPathsOfContractChainRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return DescribeDownloadPathsOfContractChainResponse
     */
    public function describeDownloadPathsOfContractChainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bizid)) {
            $body['Bizid'] = $request->bizid;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeDownloadPathsOfContractChain',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDownloadPathsOfContractChainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDownloadPathsOfContractChainRequest $request
     *
     * @return DescribeDownloadPathsOfContractChainResponse
     */
    public function describeDownloadPathsOfContractChain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDownloadPathsOfContractChainWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDownloadPathsOfNotaryChainRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DescribeDownloadPathsOfNotaryChainResponse
     */
    public function describeDownloadPathsOfNotaryChainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bizid)) {
            $body['Bizid'] = $request->bizid;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeDownloadPathsOfNotaryChain',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDownloadPathsOfNotaryChainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDownloadPathsOfNotaryChainRequest $request
     *
     * @return DescribeDownloadPathsOfNotaryChainResponse
     */
    public function describeDownloadPathsOfNotaryChain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDownloadPathsOfNotaryChainWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return DescribeEcosphereSpecsResponse
     */
    public function describeEcosphereSpecsWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'DescribeEcosphereSpecs',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeEcosphereSpecsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return DescribeEcosphereSpecsResponse
     */
    public function describeEcosphereSpecs()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEcosphereSpecsWithOptions($runtime);
    }

    /**
     * @param DescribeEthereumRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeEthereumResponse
     */
    public function describeEthereumWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeEthereum',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeEthereumResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeEthereumRequest $request
     *
     * @return DescribeEthereumResponse
     */
    public function describeEthereum($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEthereumWithOptions($request, $runtime);
    }

    /**
     * @param DescribeEthereumClientUsersRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeEthereumClientUsersResponse
     */
    public function describeEthereumClientUsersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->nodeId)) {
            $body['NodeId'] = $request->nodeId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeEthereumClientUsers',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeEthereumClientUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeEthereumClientUsersRequest $request
     *
     * @return DescribeEthereumClientUsersResponse
     */
    public function describeEthereumClientUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEthereumClientUsersWithOptions($request, $runtime);
    }

    /**
     * @param DescribeEthereumDeletableRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeEthereumDeletableResponse
     */
    public function describeEthereumDeletableWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->ethereumId)) {
            $body['EthereumId'] = $request->ethereumId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeEthereumDeletable',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeEthereumDeletableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeEthereumDeletableRequest $request
     *
     * @return DescribeEthereumDeletableResponse
     */
    public function describeEthereumDeletable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEthereumDeletableWithOptions($request, $runtime);
    }

    /**
     * @param DescribeEthereumInvitaionRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeEthereumInvitaionResponse
     */
    public function describeEthereumInvitaionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->token)) {
            $body['Token'] = $request->token;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeEthereumInvitaion',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeEthereumInvitaionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeEthereumInvitaionRequest $request
     *
     * @return DescribeEthereumInvitaionResponse
     */
    public function describeEthereumInvitaion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEthereumInvitaionWithOptions($request, $runtime);
    }

    /**
     * @param DescribeEthereumInviteeRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeEthereumInviteeResponse
     */
    public function describeEthereumInviteeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeEthereumInvitee',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeEthereumInviteeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeEthereumInviteeRequest $request
     *
     * @return DescribeEthereumInviteeResponse
     */
    public function describeEthereumInvitee($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEthereumInviteeWithOptions($request, $runtime);
    }

    /**
     * @param DescribeEthereumNodeRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeEthereumNodeResponse
     */
    public function describeEthereumNodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeEthereumNode',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeEthereumNodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeEthereumNodeRequest $request
     *
     * @return DescribeEthereumNodeResponse
     */
    public function describeEthereumNode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEthereumNodeWithOptions($request, $runtime);
    }

    /**
     * @param DescribeEthereumNodeConfigurationRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeEthereumNodeConfigurationResponse
     */
    public function describeEthereumNodeConfigurationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->nodeId)) {
            $body['NodeId'] = $request->nodeId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeEthereumNodeConfiguration',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeEthereumNodeConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeEthereumNodeConfigurationRequest $request
     *
     * @return DescribeEthereumNodeConfigurationResponse
     */
    public function describeEthereumNodeConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEthereumNodeConfigurationWithOptions($request, $runtime);
    }

    /**
     * @param DescribeEthereumNodeInfoRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeEthereumNodeInfoResponse
     */
    public function describeEthereumNodeInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->nodeId)) {
            $body['NodeId'] = $request->nodeId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeEthereumNodeInfo',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeEthereumNodeInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeEthereumNodeInfoRequest $request
     *
     * @return DescribeEthereumNodeInfoResponse
     */
    public function describeEthereumNodeInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEthereumNodeInfoWithOptions($request, $runtime);
    }

    /**
     * @param DescribeEthereumNodeLogsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeEthereumNodeLogsResponse
     */
    public function describeEthereumNodeLogsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->lines)) {
            $body['Lines'] = $request->lines;
        }
        if (!Utils::isUnset($request->nodeId)) {
            $body['NodeId'] = $request->nodeId;
        }
        if (!Utils::isUnset($request->target)) {
            $body['Target'] = $request->target;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeEthereumNodeLogs',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeEthereumNodeLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeEthereumNodeLogsRequest $request
     *
     * @return DescribeEthereumNodeLogsResponse
     */
    public function describeEthereumNodeLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEthereumNodeLogsWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return DescribeEthereumNodesResponse
     */
    public function describeEthereumNodesWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'DescribeEthereumNodes',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeEthereumNodesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return DescribeEthereumNodesResponse
     */
    public function describeEthereumNodes()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEthereumNodesWithOptions($runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return DescribeEthereumsResponse
     */
    public function describeEthereumsWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'DescribeEthereums',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeEthereumsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return DescribeEthereumsResponse
     */
    public function describeEthereums()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEthereumsWithOptions($runtime);
    }

    /**
     * @param DescribeExplorerRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeExplorerResponse
     */
    public function describeExplorerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->exBody)) {
            $query['ExBody'] = $request->exBody;
        }
        if (!Utils::isUnset($request->exMethod)) {
            $query['ExMethod'] = $request->exMethod;
        }
        if (!Utils::isUnset($request->exUrl)) {
            $query['ExUrl'] = $request->exUrl;
        }
        $body = [];
        if (!Utils::isUnset($request->organizationId)) {
            $body['OrganizationId'] = $request->organizationId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeExplorer',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeExplorerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeExplorerRequest $request
     *
     * @return DescribeExplorerResponse
     */
    public function describeExplorer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeExplorerWithOptions($request, $runtime);
    }

    /**
     * @param DescribeExplorerURLRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeExplorerURLResponse
     */
    public function describeExplorerURLWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->nodeId)) {
            $body['NodeId'] = $request->nodeId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeExplorerURL',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeExplorerURLResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeExplorerURLRequest $request
     *
     * @return DescribeExplorerURLResponse
     */
    public function describeExplorerURL($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeExplorerURLWithOptions($request, $runtime);
    }

    /**
     * @param DescribeFabricChaincodeEndorsePolicyRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return DescribeFabricChaincodeEndorsePolicyResponse
     */
    public function describeFabricChaincodeEndorsePolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->chaincodeName)) {
            $body['ChaincodeName'] = $request->chaincodeName;
        }
        if (!Utils::isUnset($request->channelId)) {
            $body['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $body['OrganizationId'] = $request->organizationId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeFabricChaincodeEndorsePolicy',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeFabricChaincodeEndorsePolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeFabricChaincodeEndorsePolicyRequest $request
     *
     * @return DescribeFabricChaincodeEndorsePolicyResponse
     */
    public function describeFabricChaincodeEndorsePolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFabricChaincodeEndorsePolicyWithOptions($request, $runtime);
    }

    /**
     * @param DescribeFabricChaincodeLogsRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeFabricChaincodeLogsResponse
     */
    public function describeFabricChaincodeLogsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->chaincodeId)) {
            $query['ChaincodeId'] = $request->chaincodeId;
        }
        if (!Utils::isUnset($request->lines)) {
            $query['Lines'] = $request->lines;
        }
        if (!Utils::isUnset($request->offset)) {
            $query['Offset'] = $request->offset;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $query['OrganizationId'] = $request->organizationId;
        }
        if (!Utils::isUnset($request->peerName)) {
            $query['PeerName'] = $request->peerName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeFabricChaincodeLogs',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeFabricChaincodeLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeFabricChaincodeLogsRequest $request
     *
     * @return DescribeFabricChaincodeLogsResponse
     */
    public function describeFabricChaincodeLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFabricChaincodeLogsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeFabricChannelConfigRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeFabricChannelConfigResponse
     */
    public function describeFabricChannelConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->channelId)) {
            $body['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $body['OrganizationId'] = $request->organizationId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeFabricChannelConfig',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeFabricChannelConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeFabricChannelConfigRequest $request
     *
     * @return DescribeFabricChannelConfigResponse
     */
    public function describeFabricChannelConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFabricChannelConfigWithOptions($request, $runtime);
    }

    /**
     * @param DescribeFabricChannelOrdererRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeFabricChannelOrdererResponse
     */
    public function describeFabricChannelOrdererWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->channelId)) {
            $body['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $body['OrganizationId'] = $request->organizationId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeFabricChannelOrderer',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeFabricChannelOrdererResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeFabricChannelOrdererRequest $request
     *
     * @return DescribeFabricChannelOrdererResponse
     */
    public function describeFabricChannelOrderer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFabricChannelOrdererWithOptions($request, $runtime);
    }

    /**
     * @param DescribeFabricChannelOrganizationsRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DescribeFabricChannelOrganizationsResponse
     */
    public function describeFabricChannelOrganizationsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->channelId)) {
            $body['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $body['OrganizationId'] = $request->organizationId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeFabricChannelOrganizations',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeFabricChannelOrganizationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeFabricChannelOrganizationsRequest $request
     *
     * @return DescribeFabricChannelOrganizationsResponse
     */
    public function describeFabricChannelOrganizations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFabricChannelOrganizationsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeFabricJoinRequestRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeFabricJoinRequestResponse
     */
    public function describeFabricJoinRequestWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->organizationId)) {
            $body['OrganizationId'] = $request->organizationId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeFabricJoinRequest',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeFabricJoinRequestResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeFabricJoinRequestRequest $request
     *
     * @return DescribeFabricJoinRequestResponse
     */
    public function describeFabricJoinRequest($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFabricJoinRequestWithOptions($request, $runtime);
    }

    /**
     * @param DescribeFabricJoinResponseRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeFabricJoinResponseResponse
     */
    public function describeFabricJoinResponseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->channelId)) {
            $body['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $body['OrganizationId'] = $request->organizationId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeFabricJoinResponse',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeFabricJoinResponseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeFabricJoinResponseRequest $request
     *
     * @return DescribeFabricJoinResponseResponse
     */
    public function describeFabricJoinResponse($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFabricJoinResponseWithOptions($request, $runtime);
    }

    /**
     * @param DescribeFabricManagementChaincodesRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DescribeFabricManagementChaincodesResponse
     */
    public function describeFabricManagementChaincodesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->channelId)) {
            $body['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $body['OrganizationId'] = $request->organizationId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeFabricManagementChaincodes',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeFabricManagementChaincodesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeFabricManagementChaincodesRequest $request
     *
     * @return DescribeFabricManagementChaincodesResponse
     */
    public function describeFabricManagementChaincodes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFabricManagementChaincodesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeFabricOrganizationChaincodePackageRequest $request
     * @param RuntimeOptions                                    $runtime
     *
     * @return DescribeFabricOrganizationChaincodePackageResponse
     */
    public function describeFabricOrganizationChaincodePackageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->organizationId)) {
            $body['OrganizationId'] = $request->organizationId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeFabricOrganizationChaincodePackage',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeFabricOrganizationChaincodePackageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeFabricOrganizationChaincodePackageRequest $request
     *
     * @return DescribeFabricOrganizationChaincodePackageResponse
     */
    public function describeFabricOrganizationChaincodePackage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFabricOrganizationChaincodePackageWithOptions($request, $runtime);
    }

    /**
     * @param DescribeFabricOrganizationEgressRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeFabricOrganizationEgressResponse
     */
    public function describeFabricOrganizationEgressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->organizationId)) {
            $query['OrganizationId'] = $request->organizationId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeFabricOrganizationEgress',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeFabricOrganizationEgressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeFabricOrganizationEgressRequest $request
     *
     * @return DescribeFabricOrganizationEgressResponse
     */
    public function describeFabricOrganizationEgress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFabricOrganizationEgressWithOptions($request, $runtime);
    }

    /**
     * @param DescribeFabricPeerChannelsRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeFabricPeerChannelsResponse
     */
    public function describeFabricPeerChannelsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->organizationId)) {
            $body['OrganizationId'] = $request->organizationId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeFabricPeerChannels',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeFabricPeerChannelsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeFabricPeerChannelsRequest $request
     *
     * @return DescribeFabricPeerChannelsResponse
     */
    public function describeFabricPeerChannels($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFabricPeerChannelsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeGovernanceTaskRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeGovernanceTaskResponse
     */
    public function describeGovernanceTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->channelId)) {
            $body['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $body['OrganizationId'] = $request->organizationId;
        }
        if (!Utils::isUnset($request->taskId)) {
            $body['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeGovernanceTask',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeGovernanceTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeGovernanceTaskRequest $request
     *
     * @return DescribeGovernanceTaskResponse
     */
    public function describeGovernanceTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGovernanceTaskWithOptions($request, $runtime);
    }

    /**
     * @param DescribeGovernanceTasksRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeGovernanceTasksResponse
     */
    public function describeGovernanceTasksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->channelId)) {
            $body['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $body['OrganizationId'] = $request->organizationId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeGovernanceTasks',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeGovernanceTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeGovernanceTasksRequest $request
     *
     * @return DescribeGovernanceTasksResponse
     */
    public function describeGovernanceTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGovernanceTasksWithOptions($request, $runtime);
    }

    /**
     * @param DescribeInvitationCodeRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeInvitationCodeResponse
     */
    public function describeInvitationCodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->consortiumId)) {
            $body['ConsortiumId'] = $request->consortiumId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeInvitationCode',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInvitationCodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeInvitationCodeRequest $request
     *
     * @return DescribeInvitationCodeResponse
     */
    public function describeInvitationCode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInvitationCodeWithOptions($request, $runtime);
    }

    /**
     * @param DescribeInvitationListRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeInvitationListResponse
     */
    public function describeInvitationListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->consortiumId)) {
            $body['ConsortiumId'] = $request->consortiumId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeInvitationList',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInvitationListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeInvitationListRequest $request
     *
     * @return DescribeInvitationListResponse
     */
    public function describeInvitationList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInvitationListWithOptions($request, $runtime);
    }

    /**
     * ****
     *   *
     * @param DescribeInviterRequest $request DescribeInviterRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeInviterResponse DescribeInviterResponse
     */
    public function describeInviterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->code)) {
            $body['Code'] = $request->code;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeInviter',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInviterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ****
     *   *
     * @param DescribeInviterRequest $request DescribeInviterRequest
     *
     * @return DescribeInviterResponse DescribeInviterResponse
     */
    public function describeInviter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInviterWithOptions($request, $runtime);
    }

    /**
     * @param DescribeLatest15BlocksRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeLatest15BlocksResponse
     */
    public function describeLatest15BlocksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bizid)) {
            $body['Bizid'] = $request->bizid;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeLatest15Blocks',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLatest15BlocksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeLatest15BlocksRequest $request
     *
     * @return DescribeLatest15BlocksResponse
     */
    public function describeLatest15Blocks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLatest15BlocksWithOptions($request, $runtime);
    }

    /**
     * @param DescribeLatest15TransDigestsRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeLatest15TransDigestsResponse
     */
    public function describeLatest15TransDigestsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bizid)) {
            $body['Bizid'] = $request->bizid;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeLatest15TransDigests',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLatest15TransDigestsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeLatest15TransDigestsRequest $request
     *
     * @return DescribeLatest15TransDigestsResponse
     */
    public function describeLatest15TransDigests($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLatest15TransDigestsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeLatestBlocksRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeLatestBlocksResponse
     */
    public function describeLatestBlocksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bizid)) {
            $body['Bizid'] = $request->bizid;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeLatestBlocks',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLatestBlocksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeLatestBlocksRequest $request
     *
     * @return DescribeLatestBlocksResponse
     */
    public function describeLatestBlocks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLatestBlocksWithOptions($request, $runtime);
    }

    /**
     * @param DescribeLatestTransactionDigestsRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeLatestTransactionDigestsResponse
     */
    public function describeLatestTransactionDigestsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bizid)) {
            $body['Bizid'] = $request->bizid;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeLatestTransactionDigests',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLatestTransactionDigestsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeLatestTransactionDigestsRequest $request
     *
     * @return DescribeLatestTransactionDigestsResponse
     */
    public function describeLatestTransactionDigests($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLatestTransactionDigestsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeMemberRoleRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeMemberRoleResponse
     */
    public function describeMemberRoleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bizid)) {
            $body['Bizid'] = $request->bizid;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeMemberRole',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeMemberRoleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeMemberRoleRequest $request
     *
     * @return DescribeMemberRoleResponse
     */
    public function describeMemberRole($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMemberRoleWithOptions($request, $runtime);
    }

    /**
     * @param DescribeMembersRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeMembersResponse
     */
    public function describeMembersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bizid)) {
            $body['Bizid'] = $request->bizid;
        }
        if (!Utils::isUnset($request->current)) {
            $body['Current'] = $request->current;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeMembers',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeMembersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeMembersRequest $request
     *
     * @return DescribeMembersResponse
     */
    public function describeMembers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMembersWithOptions($request, $runtime);
    }

    /**
     * @param DescribeMetricRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DescribeMetricResponse
     */
    public function describeMetricWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizid)) {
            $query['Bizid'] = $request->bizid;
        }
        $body = [];
        if (!Utils::isUnset($request->innerIp)) {
            $body['InnerIp'] = $request->innerIp;
        }
        if (!Utils::isUnset($request->metric)) {
            $body['Metric'] = $request->metric;
        }
        if (!Utils::isUnset($request->period)) {
            $body['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->port)) {
            $body['Port'] = $request->port;
        }
        if (!Utils::isUnset($request->timeArea)) {
            $body['TimeArea'] = $request->timeArea;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeMetric',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeMetricResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeMetricRequest $request
     *
     * @return DescribeMetricResponse
     */
    public function describeMetric($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMetricWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return DescribeMyBlockchainsResponse
     */
    public function describeMyBlockchainsWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'DescribeMyBlockchains',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeMyBlockchainsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return DescribeMyBlockchainsResponse
     */
    public function describeMyBlockchains()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMyBlockchainsWithOptions($runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return DescribeMyBlockchanInfosResponse
     */
    public function describeMyBlockchanInfosWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'DescribeMyBlockchanInfos',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeMyBlockchanInfosResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return DescribeMyBlockchanInfosResponse
     */
    public function describeMyBlockchanInfos()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMyBlockchanInfosWithOptions($runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return DescribeMySuccessAppliesResponse
     */
    public function describeMySuccessAppliesWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'DescribeMySuccessApplies',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeMySuccessAppliesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return DescribeMySuccessAppliesResponse
     */
    public function describeMySuccessApplies()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMySuccessAppliesWithOptions($runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return DescribeMySuccessfulApplicationResponse
     */
    public function describeMySuccessfulApplicationWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'DescribeMySuccessfulApplication',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeMySuccessfulApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return DescribeMySuccessfulApplicationResponse
     */
    public function describeMySuccessfulApplication()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMySuccessfulApplicationWithOptions($runtime);
    }

    /**
     * @param DescribeNetstatURLRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeNetstatURLResponse
     */
    public function describeNetstatURLWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeNetstatURL',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeNetstatURLResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeNetstatURLRequest $request
     *
     * @return DescribeNetstatURLResponse
     */
    public function describeNetstatURL($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeNetstatURLWithOptions($request, $runtime);
    }

    /**
     * @param DescribeOrdererLogsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeOrdererLogsResponse
     */
    public function describeOrdererLogsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->consortiumId)) {
            $query['ConsortiumId'] = $request->consortiumId;
        }
        if (!Utils::isUnset($request->lines)) {
            $query['Lines'] = $request->lines;
        }
        if (!Utils::isUnset($request->ordererName)) {
            $query['OrdererName'] = $request->ordererName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeOrdererLogs',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeOrdererLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeOrdererLogsRequest $request
     *
     * @return DescribeOrdererLogsResponse
     */
    public function describeOrdererLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeOrdererLogsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeOrganizationRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeOrganizationResponse
     */
    public function describeOrganizationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->organizationId)) {
            $query['OrganizationId'] = $request->organizationId;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $body = [];
        if (!Utils::isUnset($request->location)) {
            $body['Location'] = $request->location;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeOrganization',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeOrganizationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeOrganizationRequest $request
     *
     * @return DescribeOrganizationResponse
     */
    public function describeOrganization($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeOrganizationWithOptions($request, $runtime);
    }

    /**
     * @param DescribeOrganizationChaincodesRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeOrganizationChaincodesResponse
     */
    public function describeOrganizationChaincodesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->location)) {
            $body['Location'] = $request->location;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $body['OrganizationId'] = $request->organizationId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeOrganizationChaincodes',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeOrganizationChaincodesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeOrganizationChaincodesRequest $request
     *
     * @return DescribeOrganizationChaincodesResponse
     */
    public function describeOrganizationChaincodes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeOrganizationChaincodesWithOptions($request, $runtime);
    }

    /**
     * ****
     *   *
     * @param DescribeOrganizationChannelsRequest $request DescribeOrganizationChannelsRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeOrganizationChannelsResponse DescribeOrganizationChannelsResponse
     */
    public function describeOrganizationChannelsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->organizationId)) {
            $query['OrganizationId'] = $request->organizationId;
        }
        $body = [];
        if (!Utils::isUnset($request->location)) {
            $body['Location'] = $request->location;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeOrganizationChannels',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeOrganizationChannelsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ****
     *   *
     * @param DescribeOrganizationChannelsRequest $request DescribeOrganizationChannelsRequest
     *
     * @return DescribeOrganizationChannelsResponse DescribeOrganizationChannelsResponse
     */
    public function describeOrganizationChannels($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeOrganizationChannelsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeOrganizationDeletableRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeOrganizationDeletableResponse
     */
    public function describeOrganizationDeletableWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->organizationId)) {
            $query['OrganizationId'] = $request->organizationId;
        }
        $body = [];
        if (!Utils::isUnset($request->location)) {
            $body['Location'] = $request->location;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeOrganizationDeletable',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeOrganizationDeletableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeOrganizationDeletableRequest $request
     *
     * @return DescribeOrganizationDeletableResponse
     */
    public function describeOrganizationDeletable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeOrganizationDeletableWithOptions($request, $runtime);
    }

    /**
     * @param DescribeOrganizationMembersRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeOrganizationMembersResponse
     */
    public function describeOrganizationMembersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->location)) {
            $body['Location'] = $request->location;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $body['OrganizationId'] = $request->organizationId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeOrganizationMembers',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeOrganizationMembersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeOrganizationMembersRequest $request
     *
     * @return DescribeOrganizationMembersResponse
     */
    public function describeOrganizationMembers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeOrganizationMembersWithOptions($request, $runtime);
    }

    /**
     * @param DescribeOrganizationPeersRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeOrganizationPeersResponse
     */
    public function describeOrganizationPeersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->organizationId)) {
            $query['OrganizationId'] = $request->organizationId;
        }
        $body = [];
        if (!Utils::isUnset($request->location)) {
            $body['Location'] = $request->location;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeOrganizationPeers',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeOrganizationPeersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeOrganizationPeersRequest $request
     *
     * @return DescribeOrganizationPeersResponse
     */
    public function describeOrganizationPeers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeOrganizationPeersWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return DescribeOrganizationSpecsResponse
     */
    public function describeOrganizationSpecsWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'DescribeOrganizationSpecs',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeOrganizationSpecsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return DescribeOrganizationSpecsResponse
     */
    public function describeOrganizationSpecs()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeOrganizationSpecsWithOptions($runtime);
    }

    /**
     * @param DescribeOrganizationTriggersRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeOrganizationTriggersResponse
     */
    public function describeOrganizationTriggersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->organizationId)) {
            $query['OrganizationId'] = $request->organizationId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeOrganizationTriggers',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeOrganizationTriggersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeOrganizationTriggersRequest $request
     *
     * @return DescribeOrganizationTriggersResponse
     */
    public function describeOrganizationTriggers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeOrganizationTriggersWithOptions($request, $runtime);
    }

    /**
     * @param DescribeOrganizationUserCertsRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeOrganizationUserCertsResponse
     */
    public function describeOrganizationUserCertsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->organizationId)) {
            $body['OrganizationId'] = $request->organizationId;
        }
        if (!Utils::isUnset($request->username)) {
            $body['Username'] = $request->username;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeOrganizationUserCerts',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeOrganizationUserCertsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeOrganizationUserCertsRequest $request
     *
     * @return DescribeOrganizationUserCertsResponse
     */
    public function describeOrganizationUserCerts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeOrganizationUserCertsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeOrganizationUsersRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeOrganizationUsersResponse
     */
    public function describeOrganizationUsersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->organizationId)) {
            $query['OrganizationId'] = $request->organizationId;
        }
        $body = [];
        if (!Utils::isUnset($request->location)) {
            $body['Location'] = $request->location;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeOrganizationUsers',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeOrganizationUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeOrganizationUsersRequest $request
     *
     * @return DescribeOrganizationUsersResponse
     */
    public function describeOrganizationUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeOrganizationUsersWithOptions($request, $runtime);
    }

    /**
     * @param DescribeOrganizationsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeOrganizationsResponse
     */
    public function describeOrganizationsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $body = [];
        if (!Utils::isUnset($request->location)) {
            $body['Location'] = $request->location;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeOrganizations',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeOrganizationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeOrganizationsRequest $request
     *
     * @return DescribeOrganizationsResponse
     */
    public function describeOrganizations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeOrganizationsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeOrgnaizationChaincodesRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeOrgnaizationChaincodesResponse
     */
    public function describeOrgnaizationChaincodesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->location)) {
            $body['Location'] = $request->location;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $body['OrganizationId'] = $request->organizationId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeOrgnaizationChaincodes',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeOrgnaizationChaincodesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeOrgnaizationChaincodesRequest $request
     *
     * @return DescribeOrgnaizationChaincodesResponse
     */
    public function describeOrgnaizationChaincodes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeOrgnaizationChaincodesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeOssPropertiesRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeOssPropertiesResponse
     */
    public function describeOssPropertiesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bizid)) {
            $body['Bizid'] = $request->bizid;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeOssProperties',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeOssPropertiesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeOssPropertiesRequest $request
     *
     * @return DescribeOssPropertiesResponse
     */
    public function describeOssProperties($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeOssPropertiesWithOptions($request, $runtime);
    }

    /**
     * @param DescribePeerLogsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribePeerLogsResponse
     */
    public function describePeerLogsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lines)) {
            $query['Lines'] = $request->lines;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $query['OrganizationId'] = $request->organizationId;
        }
        if (!Utils::isUnset($request->peerName)) {
            $query['PeerName'] = $request->peerName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePeerLogs',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePeerLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribePeerLogsRequest $request
     *
     * @return DescribePeerLogsResponse
     */
    public function describePeerLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePeerLogsWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return DescribePublicAntChainContractProjectContentTreeResponse
     */
    public function describePublicAntChainContractProjectContentTreeWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'DescribePublicAntChainContractProjectContentTree',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePublicAntChainContractProjectContentTreeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return DescribePublicAntChainContractProjectContentTreeResponse
     */
    public function describePublicAntChainContractProjectContentTree()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePublicAntChainContractProjectContentTreeWithOptions($runtime);
    }

    /**
     * @param DescribePublicAntChainDownloadPathsRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return DescribePublicAntChainDownloadPathsResponse
     */
    public function describePublicAntChainDownloadPathsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bizid)) {
            $body['Bizid'] = $request->bizid;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribePublicAntChainDownloadPaths',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePublicAntChainDownloadPathsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribePublicAntChainDownloadPathsRequest $request
     *
     * @return DescribePublicAntChainDownloadPathsResponse
     */
    public function describePublicAntChainDownloadPaths($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePublicAntChainDownloadPathsWithOptions($request, $runtime);
    }

    /**
     * @param DescribePublicCloudIDEEnvConfigsRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribePublicCloudIDEEnvConfigsResponse
     */
    public function describePublicCloudIDEEnvConfigsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bizid)) {
            $body['Bizid'] = $request->bizid;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribePublicCloudIDEEnvConfigs',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePublicCloudIDEEnvConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribePublicCloudIDEEnvConfigsRequest $request
     *
     * @return DescribePublicCloudIDEEnvConfigsResponse
     */
    public function describePublicCloudIDEEnvConfigs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePublicCloudIDEEnvConfigsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeQRCodeAccessLogRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeQRCodeAccessLogResponse
     */
    public function describeQRCodeAccessLogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bizid)) {
            $body['Bizid'] = $request->bizid;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeQRCodeAccessLog',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeQRCodeAccessLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeQRCodeAccessLogRequest $request
     *
     * @return DescribeQRCodeAccessLogResponse
     */
    public function describeQRCodeAccessLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeQRCodeAccessLogWithOptions($request, $runtime);
    }

    /**
     * @param DescribeQRCodeAuthorityRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeQRCodeAuthorityResponse
     */
    public function describeQRCodeAuthorityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bizid)) {
            $body['Bizid'] = $request->bizid;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeQRCodeAuthority',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeQRCodeAuthorityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeQRCodeAuthorityRequest $request
     *
     * @return DescribeQRCodeAuthorityResponse
     */
    public function describeQRCodeAuthority($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeQRCodeAuthorityWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegionsWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'DescribeRegions',
            'version'     => '2018-07-31',
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
     * @return DescribeRegionsResponse
     */
    public function describeRegions()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRegionsWithOptions($runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return DescribeResourceTypeResponse
     */
    public function describeResourceTypeWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'DescribeResourceType',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeResourceTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return DescribeResourceTypeResponse
     */
    public function describeResourceType()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeResourceTypeWithOptions($runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return DescribeResourceTypesResponse
     */
    public function describeResourceTypesWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'DescribeResourceTypes',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeResourceTypesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return DescribeResourceTypesResponse
     */
    public function describeResourceTypes()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeResourceTypesWithOptions($runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return DescribeRootDomainResponse
     */
    public function describeRootDomainWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'DescribeRootDomain',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRootDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return DescribeRootDomainResponse
     */
    public function describeRootDomain()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRootDomainWithOptions($runtime);
    }

    /**
     * @param DescribeSchemaDetailRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeSchemaDetailResponse
     */
    public function describeSchemaDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bizid)) {
            $body['Bizid'] = $request->bizid;
        }
        if (!Utils::isUnset($request->schemaId)) {
            $body['SchemaId'] = $request->schemaId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeSchemaDetail',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSchemaDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeSchemaDetailRequest $request
     *
     * @return DescribeSchemaDetailResponse
     */
    public function describeSchemaDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSchemaDetailWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSmartContractJobStatusRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeSmartContractJobStatusResponse
     */
    public function describeSmartContractJobStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->jobId)) {
            $body['JobId'] = $request->jobId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeSmartContractJobStatus',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSmartContractJobStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeSmartContractJobStatusRequest $request
     *
     * @return DescribeSmartContractJobStatusResponse
     */
    public function describeSmartContractJobStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSmartContractJobStatusWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSmartContractJobsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeSmartContractJobsResponse
     */
    public function describeSmartContractJobsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->size)) {
            $body['Size'] = $request->size;
        }
        if (!Utils::isUnset($request->start)) {
            $body['Start'] = $request->start;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeSmartContractJobs',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSmartContractJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeSmartContractJobsRequest $request
     *
     * @return DescribeSmartContractJobsResponse
     */
    public function describeSmartContractJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSmartContractJobsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSmartContractJobsByNameRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeSmartContractJobsByNameResponse
     */
    public function describeSmartContractJobsByNameWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->size)) {
            $body['Size'] = $request->size;
        }
        if (!Utils::isUnset($request->start)) {
            $body['Start'] = $request->start;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeSmartContractJobsByName',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSmartContractJobsByNameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeSmartContractJobsByNameRequest $request
     *
     * @return DescribeSmartContractJobsByNameResponse
     */
    public function describeSmartContractJobsByName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSmartContractJobsByNameWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSmartContractResultRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeSmartContractResultResponse
     */
    public function describeSmartContractResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->jobId)) {
            $body['JobId'] = $request->jobId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeSmartContractResult',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSmartContractResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeSmartContractResultRequest $request
     *
     * @return DescribeSmartContractResultResponse
     */
    public function describeSmartContractResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSmartContractResultWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSmartContractResultContentRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DescribeSmartContractResultContentResponse
     */
    public function describeSmartContractResultContentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->jobId)) {
            $body['JobId'] = $request->jobId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeSmartContractResultContent',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSmartContractResultContentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeSmartContractResultContentRequest $request
     *
     * @return DescribeSmartContractResultContentResponse
     */
    public function describeSmartContractResultContent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSmartContractResultContentWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSubscribeCloudServiceIntegrationStateRequest $request
     * @param RuntimeOptions                                       $runtime
     *
     * @return DescribeSubscribeCloudServiceIntegrationStateResponse
     */
    public function describeSubscribeCloudServiceIntegrationStateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->organizationId)) {
            $query['OrganizationId'] = $request->organizationId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSubscribeCloudServiceIntegrationState',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSubscribeCloudServiceIntegrationStateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeSubscribeCloudServiceIntegrationStateRequest $request
     *
     * @return DescribeSubscribeCloudServiceIntegrationStateResponse
     */
    public function describeSubscribeCloudServiceIntegrationState($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSubscribeCloudServiceIntegrationStateWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return DescribeTasksResponse
     */
    public function describeTasksWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'DescribeTasks',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return DescribeTasksResponse
     */
    public function describeTasks()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTasksWithOptions($runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return DescribeTemplatesResponse
     */
    public function describeTemplatesWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'DescribeTemplates',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return DescribeTemplatesResponse
     */
    public function describeTemplates()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTemplatesWithOptions($runtime);
    }

    /**
     * @param DescribeTransactionRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeTransactionResponse
     */
    public function describeTransactionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bizid)) {
            $body['Bizid'] = $request->bizid;
        }
        if (!Utils::isUnset($request->hash)) {
            $body['Hash'] = $request->hash;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeTransaction',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeTransactionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeTransactionRequest $request
     *
     * @return DescribeTransactionResponse
     */
    public function describeTransaction($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTransactionWithOptions($request, $runtime);
    }

    /**
     * @param DescribeTransactionFor2CBrowserRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeTransactionFor2CBrowserResponse
     */
    public function describeTransactionFor2CBrowserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->alipayAuthCode)) {
            $body['AlipayAuthCode'] = $request->alipayAuthCode;
        }
        if (!Utils::isUnset($request->bizid)) {
            $body['Bizid'] = $request->bizid;
        }
        if (!Utils::isUnset($request->hash)) {
            $body['Hash'] = $request->hash;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeTransactionFor2CBrowser',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'Anonymous',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeTransactionFor2CBrowserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeTransactionFor2CBrowserRequest $request
     *
     * @return DescribeTransactionFor2CBrowserResponse
     */
    public function describeTransactionFor2CBrowser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTransactionFor2CBrowserWithOptions($request, $runtime);
    }

    /**
     * @param DescribeTransactionQRCodeRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeTransactionQRCodeResponse
     */
    public function describeTransactionQRCodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bizid)) {
            $body['Bizid'] = $request->bizid;
        }
        if (!Utils::isUnset($request->hash)) {
            $body['Hash'] = $request->hash;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeTransactionQRCode',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeTransactionQRCodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeTransactionQRCodeRequest $request
     *
     * @return DescribeTransactionQRCodeResponse
     */
    public function describeTransactionQRCode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTransactionQRCodeWithOptions($request, $runtime);
    }

    /**
     * @param DescribeTransactionReceiptFor2CBrowserRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return DescribeTransactionReceiptFor2CBrowserResponse
     */
    public function describeTransactionReceiptFor2CBrowserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->alipayAuthCode)) {
            $body['AlipayAuthCode'] = $request->alipayAuthCode;
        }
        if (!Utils::isUnset($request->bizid)) {
            $body['Bizid'] = $request->bizid;
        }
        if (!Utils::isUnset($request->hash)) {
            $body['Hash'] = $request->hash;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeTransactionReceiptFor2CBrowser',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'Anonymous',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeTransactionReceiptFor2CBrowserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeTransactionReceiptFor2CBrowserRequest $request
     *
     * @return DescribeTransactionReceiptFor2CBrowserResponse
     */
    public function describeTransactionReceiptFor2CBrowser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTransactionReceiptFor2CBrowserWithOptions($request, $runtime);
    }

    /**
     * @param DescribeTriggerRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeTriggerResponse
     */
    public function describeTriggerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->channelId)) {
            $query['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $query['OrganizationId'] = $request->organizationId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeTrigger',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeTriggerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeTriggerRequest $request
     *
     * @return DescribeTriggerResponse
     */
    public function describeTrigger($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTriggerWithOptions($request, $runtime);
    }

    /**
     * @param DestroyConsortiumRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DestroyConsortiumResponse
     */
    public function destroyConsortiumWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->consortiumId)) {
            $body['ConsortiumId'] = $request->consortiumId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DestroyConsortium',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DestroyConsortiumResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DestroyConsortiumRequest $request
     *
     * @return DestroyConsortiumResponse
     */
    public function destroyConsortium($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->destroyConsortiumWithOptions($request, $runtime);
    }

    /**
     * @param DestroyEthereumRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DestroyEthereumResponse
     */
    public function destroyEthereumWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->ethereumId)) {
            $body['EthereumId'] = $request->ethereumId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DestroyEthereum',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DestroyEthereumResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DestroyEthereumRequest $request
     *
     * @return DestroyEthereumResponse
     */
    public function destroyEthereum($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->destroyEthereumWithOptions($request, $runtime);
    }

    /**
     * @param DestroyOrganizationRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DestroyOrganizationResponse
     */
    public function destroyOrganizationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->organizationId)) {
            $body['OrganizationId'] = $request->organizationId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DestroyOrganization',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DestroyOrganizationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DestroyOrganizationRequest $request
     *
     * @return DestroyOrganizationResponse
     */
    public function destroyOrganization($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->destroyOrganizationWithOptions($request, $runtime);
    }

    /**
     * @param DownloadAllRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DownloadAllResponse
     */
    public function downloadAllWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bizid)) {
            $body['Bizid'] = $request->bizid;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DownloadAll',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DownloadAllResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DownloadAllRequest $request
     *
     * @return DownloadAllResponse
     */
    public function downloadAll($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->downloadAllWithOptions($request, $runtime);
    }

    /**
     * @param DownloadBizviewRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DownloadBizviewResponse
     */
    public function downloadBizviewWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bizid)) {
            $body['Bizid'] = $request->bizid;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DownloadBizview',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DownloadBizviewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DownloadBizviewRequest $request
     *
     * @return DownloadBizviewResponse
     */
    public function downloadBizview($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->downloadBizviewWithOptions($request, $runtime);
    }

    /**
     * @param DownloadFabricChannelSDKRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DownloadFabricChannelSDKResponse
     */
    public function downloadFabricChannelSDKWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->organizationId)) {
            $query['OrganizationId'] = $request->organizationId;
        }
        if (!Utils::isUnset($request->username)) {
            $query['Username'] = $request->username;
        }
        $body = [];
        if (!Utils::isUnset($request->channelId)) {
            $body['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->location)) {
            $body['Location'] = $request->location;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DownloadFabricChannelSDK',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DownloadFabricChannelSDKResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DownloadFabricChannelSDKRequest $request
     *
     * @return DownloadFabricChannelSDKResponse
     */
    public function downloadFabricChannelSDK($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->downloadFabricChannelSDKWithOptions($request, $runtime);
    }

    /**
     * @param DownloadOrganizationSDKRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DownloadOrganizationSDKResponse
     */
    public function downloadOrganizationSDKWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->organizationId)) {
            $query['OrganizationId'] = $request->organizationId;
        }
        if (!Utils::isUnset($request->username)) {
            $query['Username'] = $request->username;
        }
        $body = [];
        if (!Utils::isUnset($request->location)) {
            $body['Location'] = $request->location;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DownloadOrganizationSDK',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DownloadOrganizationSDKResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DownloadOrganizationSDKRequest $request
     *
     * @return DownloadOrganizationSDKResponse
     */
    public function downloadOrganizationSDK($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->downloadOrganizationSDKWithOptions($request, $runtime);
    }

    /**
     * @param DownloadSDK2Request $request
     * @param RuntimeOptions      $runtime
     *
     * @return DownloadSDK2Response
     */
    public function downloadSDK2WithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bizid)) {
            $body['Bizid'] = $request->bizid;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DownloadSDK2',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DownloadSDK2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DownloadSDK2Request $request
     *
     * @return DownloadSDK2Response
     */
    public function downloadSDK2($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->downloadSDK2WithOptions($request, $runtime);
    }

    /**
     * @param DownloadSdkRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DownloadSdkResponse
     */
    public function downloadSdkWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bizid)) {
            $body['Bizid'] = $request->bizid;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DownloadSdk',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DownloadSdkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DownloadSdkRequest $request
     *
     * @return DownloadSdkResponse
     */
    public function downloadSdk($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->downloadSdkWithOptions($request, $runtime);
    }

    /**
     * @param DownloadSignedDataRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DownloadSignedDataResponse
     */
    public function downloadSignedDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bizid)) {
            $body['Bizid'] = $request->bizid;
        }
        if (!Utils::isUnset($request->path)) {
            $body['Path'] = $request->path;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DownloadSignedData',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DownloadSignedDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DownloadSignedDataRequest $request
     *
     * @return DownloadSignedDataResponse
     */
    public function downloadSignedData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->downloadSignedDataWithOptions($request, $runtime);
    }

    /**
     * @param DuplicateAntChainContractProjectRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DuplicateAntChainContractProjectResponse
     */
    public function duplicateAntChainContractProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->projectVersion)) {
            $body['ProjectVersion'] = $request->projectVersion;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DuplicateAntChainContractProject',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DuplicateAntChainContractProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DuplicateAntChainContractProjectRequest $request
     *
     * @return DuplicateAntChainContractProjectResponse
     */
    public function duplicateAntChainContractProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->duplicateAntChainContractProjectWithOptions($request, $runtime);
    }

    /**
     * @param FreezeAccountRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return FreezeAccountResponse
     */
    public function freezeAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->account)) {
            $body['Account'] = $request->account;
        }
        if (!Utils::isUnset($request->bizid)) {
            $body['Bizid'] = $request->bizid;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'FreezeAccount',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return FreezeAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param FreezeAccountRequest $request
     *
     * @return FreezeAccountResponse
     */
    public function freezeAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->freezeAccountWithOptions($request, $runtime);
    }

    /**
     * @param FreezeAntChainAccountRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return FreezeAntChainAccountResponse
     */
    public function freezeAntChainAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->account)) {
            $body['Account'] = $request->account;
        }
        if (!Utils::isUnset($request->antChainId)) {
            $body['AntChainId'] = $request->antChainId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'FreezeAntChainAccount',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return FreezeAntChainAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param FreezeAntChainAccountRequest $request
     *
     * @return FreezeAntChainAccountResponse
     */
    public function freezeAntChainAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->freezeAntChainAccountWithOptions($request, $runtime);
    }

    /**
     * @param GetAppliesRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return GetAppliesResponse
     */
    public function getAppliesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bizid)) {
            $body['Bizid'] = $request->bizid;
        }
        if (!Utils::isUnset($request->current)) {
            $body['Current'] = $request->current;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->status)) {
            $body['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetApplies',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAppliesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetAppliesRequest $request
     *
     * @return GetAppliesResponse
     */
    public function getApplies($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAppliesWithOptions($request, $runtime);
    }

    /**
     * @param GetBcSchemaRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetBcSchemaResponse
     */
    public function getBcSchemaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bizid)) {
            $body['Bizid'] = $request->bizid;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetBcSchema',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetBcSchemaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetBcSchemaRequest $request
     *
     * @return GetBcSchemaResponse
     */
    public function getBcSchema($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBcSchemaWithOptions($request, $runtime);
    }

    /**
     * @param GetBlockchainCreateTaskRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetBlockchainCreateTaskResponse
     */
    public function getBlockchainCreateTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->current)) {
            $body['Current'] = $request->current;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetBlockchainCreateTask',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetBlockchainCreateTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetBlockchainCreateTaskRequest $request
     *
     * @return GetBlockchainCreateTaskResponse
     */
    public function getBlockchainCreateTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBlockchainCreateTaskWithOptions($request, $runtime);
    }

    /**
     * @param GetBlockchainInfoRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetBlockchainInfoResponse
     */
    public function getBlockchainInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bizid)) {
            $body['Bizid'] = $request->bizid;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetBlockchainInfo',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetBlockchainInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetBlockchainInfoRequest $request
     *
     * @return GetBlockchainInfoResponse
     */
    public function getBlockchainInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBlockchainInfoWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return GetMyBlockchainsResponse
     */
    public function getMyBlockchainsWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'GetMyBlockchains',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetMyBlockchainsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return GetMyBlockchainsResponse
     */
    public function getMyBlockchains()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMyBlockchainsWithOptions($runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return GetMySuccessAppliesResponse
     */
    public function getMySuccessAppliesWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'GetMySuccessApplies',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetMySuccessAppliesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return GetMySuccessAppliesResponse
     */
    public function getMySuccessApplies()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMySuccessAppliesWithOptions($runtime);
    }

    /**
     * @param GetOssPropertiesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetOssPropertiesResponse
     */
    public function getOssPropertiesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bizid)) {
            $body['Bizid'] = $request->bizid;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetOssProperties',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetOssPropertiesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetOssPropertiesRequest $request
     *
     * @return GetOssPropertiesResponse
     */
    public function getOssProperties($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOssPropertiesWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return GetTemplatesResponse
     */
    public function getTemplatesWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'GetTemplates',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return GetTemplatesResponse
     */
    public function getTemplates()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTemplatesWithOptions($runtime);
    }

    /**
     * @param InstallChaincodeRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return InstallChaincodeResponse
     */
    public function installChaincodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->chaincodeId)) {
            $body['ChaincodeId'] = $request->chaincodeId;
        }
        if (!Utils::isUnset($request->location)) {
            $body['Location'] = $request->location;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $body['OrganizationId'] = $request->organizationId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'InstallChaincode',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return InstallChaincodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param InstallChaincodeRequest $request
     *
     * @return InstallChaincodeResponse
     */
    public function installChaincode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->installChaincodeWithOptions($request, $runtime);
    }

    /**
     * @param InstallFabricChaincodePackageRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return InstallFabricChaincodePackageResponse
     */
    public function installFabricChaincodePackageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->chaincodePackageId)) {
            $body['ChaincodePackageId'] = $request->chaincodePackageId;
        }
        if (!Utils::isUnset($request->location)) {
            $body['Location'] = $request->location;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $body['OrganizationId'] = $request->organizationId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'InstallFabricChaincodePackage',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return InstallFabricChaincodePackageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param InstallFabricChaincodePackageRequest $request
     *
     * @return InstallFabricChaincodePackageResponse
     */
    public function installFabricChaincodePackage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->installFabricChaincodePackageWithOptions($request, $runtime);
    }

    /**
     * @param InstantiateChaincodeRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return InstantiateChaincodeResponse
     */
    public function instantiateChaincodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->chaincodeId)) {
            $body['ChaincodeId'] = $request->chaincodeId;
        }
        if (!Utils::isUnset($request->collectionConfig)) {
            $body['CollectionConfig'] = $request->collectionConfig;
        }
        if (!Utils::isUnset($request->endorsePolicy)) {
            $body['EndorsePolicy'] = $request->endorsePolicy;
        }
        if (!Utils::isUnset($request->location)) {
            $body['Location'] = $request->location;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $body['OrganizationId'] = $request->organizationId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'InstantiateChaincode',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return InstantiateChaincodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param InstantiateChaincodeRequest $request
     *
     * @return InstantiateChaincodeResponse
     */
    public function instantiateChaincode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->instantiateChaincodeWithOptions($request, $runtime);
    }

    /**
     * @param InviteUserRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return InviteUserResponse
     */
    public function inviteUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bid)) {
            $body['Bid'] = $request->bid;
        }
        if (!Utils::isUnset($request->bizid)) {
            $body['Bizid'] = $request->bizid;
        }
        if (!Utils::isUnset($request->userEmail)) {
            $body['UserEmail'] = $request->userEmail;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'InviteUser',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return InviteUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param InviteUserRequest $request
     *
     * @return InviteUserResponse
     */
    public function inviteUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->inviteUserWithOptions($request, $runtime);
    }

    /**
     * ****
     *   *
     * @param JoinChannelRequest $request JoinChannelRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return JoinChannelResponse JoinChannelResponse
     */
    public function joinChannelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->channelId)) {
            $query['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->do_)) {
            $query['Do'] = $request->do_;
        }
        $body = [];
        if (!Utils::isUnset($request->location)) {
            $body['Location'] = $request->location;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'JoinChannel',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return JoinChannelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ****
     *   *
     * @param JoinChannelRequest $request JoinChannelRequest
     *
     * @return JoinChannelResponse JoinChannelResponse
     */
    public function joinChannel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->joinChannelWithOptions($request, $runtime);
    }

    /**
     * @param ListTagResourcesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListTagResourcesResponse
     */
    public function listTagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
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
            'version'     => '2018-07-31',
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
     * @param ModifyTriggerRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ModifyTriggerResponse
     */
    public function modifyTriggerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->channelId)) {
            $body['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->options)) {
            $body['Options'] = $request->options;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $body['OrganizationId'] = $request->organizationId;
        }
        if (!Utils::isUnset($request->source)) {
            $body['Source'] = $request->source;
        }
        if (!Utils::isUnset($request->status)) {
            $body['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ModifyTrigger',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyTriggerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyTriggerRequest $request
     *
     * @return ModifyTriggerResponse
     */
    public function modifyTrigger($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyTriggerWithOptions($request, $runtime);
    }

    /**
     * @param OperateUserRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return OperateUserResponse
     */
    public function operateUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bid)) {
            $body['Bid'] = $request->bid;
        }
        if (!Utils::isUnset($request->bizid)) {
            $body['Bizid'] = $request->bizid;
        }
        if (!Utils::isUnset($request->operation)) {
            $body['Operation'] = $request->operation;
        }
        if (!Utils::isUnset($request->userName)) {
            $body['UserName'] = $request->userName;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'OperateUser',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OperateUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param OperateUserRequest $request
     *
     * @return OperateUserResponse
     */
    public function operateUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->operateUserWithOptions($request, $runtime);
    }

    /**
     * @param ProcessCloudIDEContractTransactionRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return ProcessCloudIDEContractTransactionResponse
     */
    public function processCloudIDEContractTransactionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->antChainId)) {
            $body['AntChainId'] = $request->antChainId;
        }
        if (!Utils::isUnset($request->transaction)) {
            $body['Transaction'] = $request->transaction;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ProcessCloudIDEContractTransaction',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ProcessCloudIDEContractTransactionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ProcessCloudIDEContractTransactionRequest $request
     *
     * @return ProcessCloudIDEContractTransactionResponse
     */
    public function processCloudIDEContractTransaction($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->processCloudIDEContractTransactionWithOptions($request, $runtime);
    }

    /**
     * @param ProcessPublicCloudIDEContractTransactionRequest $request
     * @param RuntimeOptions                                  $runtime
     *
     * @return ProcessPublicCloudIDEContractTransactionResponse
     */
    public function processPublicCloudIDEContractTransactionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bizid)) {
            $body['Bizid'] = $request->bizid;
        }
        if (!Utils::isUnset($request->transaction)) {
            $body['Transaction'] = $request->transaction;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ProcessPublicCloudIDEContractTransaction',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ProcessPublicCloudIDEContractTransactionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ProcessPublicCloudIDEContractTransactionRequest $request
     *
     * @return ProcessPublicCloudIDEContractTransactionResponse
     */
    public function processPublicCloudIDEContractTransaction($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->processPublicCloudIDEContractTransactionWithOptions($request, $runtime);
    }

    /**
     * @param QueryBlockRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return QueryBlockResponse
     */
    public function queryBlockWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bizid)) {
            $body['Bizid'] = $request->bizid;
        }
        if (!Utils::isUnset($request->height)) {
            $body['Height'] = $request->height;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryBlock',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryBlockResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryBlockRequest $request
     *
     * @return QueryBlockResponse
     */
    public function queryBlock($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryBlockWithOptions($request, $runtime);
    }

    /**
     * @param QueryConsortiumDeletableRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return QueryConsortiumDeletableResponse
     */
    public function queryConsortiumDeletableWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->consortiumId)) {
            $query['ConsortiumId'] = $request->consortiumId;
        }
        $body = [];
        if (!Utils::isUnset($request->location)) {
            $body['Location'] = $request->location;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryConsortiumDeletable',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryConsortiumDeletableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryConsortiumDeletableRequest $request
     *
     * @return QueryConsortiumDeletableResponse
     */
    public function queryConsortiumDeletable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryConsortiumDeletableWithOptions($request, $runtime);
    }

    /**
     * @param QueryEthereumDeletableRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return QueryEthereumDeletableResponse
     */
    public function queryEthereumDeletableWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->ethereumId)) {
            $body['EthereumId'] = $request->ethereumId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryEthereumDeletable',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryEthereumDeletableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryEthereumDeletableRequest $request
     *
     * @return QueryEthereumDeletableResponse
     */
    public function queryEthereumDeletable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryEthereumDeletableWithOptions($request, $runtime);
    }

    /**
     * @param QueryMetricRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return QueryMetricResponse
     */
    public function queryMetricWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizid)) {
            $query['Bizid'] = $request->bizid;
        }
        $body = [];
        if (!Utils::isUnset($request->innerIp)) {
            $body['InnerIp'] = $request->innerIp;
        }
        if (!Utils::isUnset($request->metric)) {
            $body['Metric'] = $request->metric;
        }
        if (!Utils::isUnset($request->period)) {
            $body['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->port)) {
            $body['Port'] = $request->port;
        }
        if (!Utils::isUnset($request->timeArea)) {
            $body['TimeArea'] = $request->timeArea;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryMetric',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryMetricResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryMetricRequest $request
     *
     * @return QueryMetricResponse
     */
    public function queryMetric($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryMetricWithOptions($request, $runtime);
    }

    /**
     * @param QueryOrganizationDeletableRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return QueryOrganizationDeletableResponse
     */
    public function queryOrganizationDeletableWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->organizationId)) {
            $query['OrganizationId'] = $request->organizationId;
        }
        $body = [];
        if (!Utils::isUnset($request->location)) {
            $body['Location'] = $request->location;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryOrganizationDeletable',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryOrganizationDeletableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryOrganizationDeletableRequest $request
     *
     * @return QueryOrganizationDeletableResponse
     */
    public function queryOrganizationDeletable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryOrganizationDeletableWithOptions($request, $runtime);
    }

    /**
     * @param QueryTransactionRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return QueryTransactionResponse
     */
    public function queryTransactionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bizid)) {
            $body['Bizid'] = $request->bizid;
        }
        if (!Utils::isUnset($request->hash)) {
            $body['Hash'] = $request->hash;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryTransaction',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryTransactionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryTransactionRequest $request
     *
     * @return QueryTransactionResponse
     */
    public function queryTransaction($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryTransactionWithOptions($request, $runtime);
    }

    /**
     * @param RejectUserRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return RejectUserResponse
     */
    public function rejectUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bid)) {
            $body['Bid'] = $request->bid;
        }
        if (!Utils::isUnset($request->bizid)) {
            $body['Bizid'] = $request->bizid;
        }
        if (!Utils::isUnset($request->reason)) {
            $body['Reason'] = $request->reason;
        }
        if (!Utils::isUnset($request->userName)) {
            $body['UserName'] = $request->userName;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RejectUser',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RejectUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RejectUserRequest $request
     *
     * @return RejectUserResponse
     */
    public function rejectUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->rejectUserWithOptions($request, $runtime);
    }

    /**
     * @param RenameBlockchainRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return RenameBlockchainResponse
     */
    public function renameBlockchainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bizid)) {
            $body['Bizid'] = $request->bizid;
        }
        if (!Utils::isUnset($request->newName)) {
            $body['NewName'] = $request->newName;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RenameBlockchain',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RenameBlockchainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RenameBlockchainRequest $request
     *
     * @return RenameBlockchainResponse
     */
    public function renameBlockchain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->renameBlockchainWithOptions($request, $runtime);
    }

    /**
     * @param ResetAntChainCertificateRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ResetAntChainCertificateResponse
     */
    public function resetAntChainCertificateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->antChainId)) {
            $body['AntChainId'] = $request->antChainId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ResetAntChainCertificate',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ResetAntChainCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ResetAntChainCertificateRequest $request
     *
     * @return ResetAntChainCertificateResponse
     */
    public function resetAntChainCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetAntChainCertificateWithOptions($request, $runtime);
    }

    /**
     * @param ResetAntChainUserCertificateRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ResetAntChainUserCertificateResponse
     */
    public function resetAntChainUserCertificateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->antChainId)) {
            $body['AntChainId'] = $request->antChainId;
        }
        if (!Utils::isUnset($request->bid)) {
            $body['Bid'] = $request->bid;
        }
        if (!Utils::isUnset($request->operation)) {
            $body['Operation'] = $request->operation;
        }
        if (!Utils::isUnset($request->username)) {
            $body['Username'] = $request->username;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ResetAntChainUserCertificate',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ResetAntChainUserCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ResetAntChainUserCertificateRequest $request
     *
     * @return ResetAntChainUserCertificateResponse
     */
    public function resetAntChainUserCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetAntChainUserCertificateWithOptions($request, $runtime);
    }

    /**
     * @param ResetCertificateRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ResetCertificateResponse
     */
    public function resetCertificateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bizid)) {
            $body['Bizid'] = $request->bizid;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ResetCertificate',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ResetCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ResetCertificateRequest $request
     *
     * @return ResetCertificateResponse
     */
    public function resetCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetCertificateWithOptions($request, $runtime);
    }

    /**
     * @param ResetOrganizationUserPasswordRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return ResetOrganizationUserPasswordResponse
     */
    public function resetOrganizationUserPasswordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->location)) {
            $body['Location'] = $request->location;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $body['OrganizationId'] = $request->organizationId;
        }
        if (!Utils::isUnset($request->password)) {
            $body['Password'] = $request->password;
        }
        if (!Utils::isUnset($request->username)) {
            $body['Username'] = $request->username;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ResetOrganizationUserPassword',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ResetOrganizationUserPasswordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ResetOrganizationUserPasswordRequest $request
     *
     * @return ResetOrganizationUserPasswordResponse
     */
    public function resetOrganizationUserPassword($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetOrganizationUserPasswordWithOptions($request, $runtime);
    }

    /**
     * @param ResetPublicAntChainCertificateRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return ResetPublicAntChainCertificateResponse
     */
    public function resetPublicAntChainCertificateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bizid)) {
            $body['Bizid'] = $request->bizid;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ResetPublicAntChainCertificate',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ResetPublicAntChainCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ResetPublicAntChainCertificateRequest $request
     *
     * @return ResetPublicAntChainCertificateResponse
     */
    public function resetPublicAntChainCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetPublicAntChainCertificateWithOptions($request, $runtime);
    }

    /**
     * @param ResetUserRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ResetUserResponse
     */
    public function resetUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bid)) {
            $body['Bid'] = $request->bid;
        }
        if (!Utils::isUnset($request->bizid)) {
            $body['Bizid'] = $request->bizid;
        }
        if (!Utils::isUnset($request->operation)) {
            $body['Operation'] = $request->operation;
        }
        if (!Utils::isUnset($request->userName)) {
            $body['UserName'] = $request->userName;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ResetUser',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ResetUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ResetUserRequest $request
     *
     * @return ResetUserResponse
     */
    public function resetUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetUserWithOptions($request, $runtime);
    }

    /**
     * @param SchemaDetailRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return SchemaDetailResponse
     */
    public function schemaDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bizid)) {
            $body['Bizid'] = $request->bizid;
        }
        if (!Utils::isUnset($request->schemaId)) {
            $body['SchemaId'] = $request->schemaId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SchemaDetail',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SchemaDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SchemaDetailRequest $request
     *
     * @return SchemaDetailResponse
     */
    public function schemaDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->schemaDetailWithOptions($request, $runtime);
    }

    /**
     * @param StartSmartContractJobRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return StartSmartContractJobResponse
     */
    public function startSmartContractJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->jobId)) {
            $body['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->jobName)) {
            $body['JobName'] = $request->jobName;
        }
        if (!Utils::isUnset($request->sourceOpt)) {
            $body['SourceOpt'] = $request->sourceOpt;
        }
        if (!Utils::isUnset($request->sourceType)) {
            $body['SourceType'] = $request->sourceType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'StartSmartContractJob',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StartSmartContractJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param StartSmartContractJobRequest $request
     *
     * @return StartSmartContractJobResponse
     */
    public function startSmartContractJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startSmartContractJobWithOptions($request, $runtime);
    }

    /**
     * @param SubmitFabricChaincodeDefinitionRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return SubmitFabricChaincodeDefinitionResponse
     */
    public function submitFabricChaincodeDefinitionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->chaincodePackageId)) {
            $body['ChaincodePackageId'] = $request->chaincodePackageId;
        }
        if (!Utils::isUnset($request->chaincodeVersion)) {
            $body['ChaincodeVersion'] = $request->chaincodeVersion;
        }
        if (!Utils::isUnset($request->channelId)) {
            $body['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->collectionConfig)) {
            $body['CollectionConfig'] = $request->collectionConfig;
        }
        if (!Utils::isUnset($request->endorsePolicy)) {
            $body['EndorsePolicy'] = $request->endorsePolicy;
        }
        if (!Utils::isUnset($request->initRequired)) {
            $body['InitRequired'] = $request->initRequired;
        }
        if (!Utils::isUnset($request->location)) {
            $body['Location'] = $request->location;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $body['OrganizationId'] = $request->organizationId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SubmitFabricChaincodeDefinition',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitFabricChaincodeDefinitionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SubmitFabricChaincodeDefinitionRequest $request
     *
     * @return SubmitFabricChaincodeDefinitionResponse
     */
    public function submitFabricChaincodeDefinition($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitFabricChaincodeDefinitionWithOptions($request, $runtime);
    }

    /**
     * @param SyncFabricChaincodeStatusRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return SyncFabricChaincodeStatusResponse
     */
    public function syncFabricChaincodeStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->chaincodeId)) {
            $body['ChaincodeId'] = $request->chaincodeId;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $body['OrganizationId'] = $request->organizationId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SyncFabricChaincodeStatus',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SyncFabricChaincodeStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SyncFabricChaincodeStatusRequest $request
     *
     * @return SyncFabricChaincodeStatusResponse
     */
    public function syncFabricChaincodeStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->syncFabricChaincodeStatusWithOptions($request, $runtime);
    }

    /**
     * @param SynchronizeChaincodeRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return SynchronizeChaincodeResponse
     */
    public function synchronizeChaincodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->chaincodeId)) {
            $body['ChaincodeId'] = $request->chaincodeId;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $body['OrganizationId'] = $request->organizationId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SynchronizeChaincode',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SynchronizeChaincodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SynchronizeChaincodeRequest $request
     *
     * @return SynchronizeChaincodeResponse
     */
    public function synchronizeChaincode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->synchronizeChaincodeWithOptions($request, $runtime);
    }

    /**
     * @param TagResourcesRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return TagResourcesResponse
     */
    public function tagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
            'version'     => '2018-07-31',
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
     * @param UnfreezeAccountRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return UnfreezeAccountResponse
     */
    public function unfreezeAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->account)) {
            $body['Account'] = $request->account;
        }
        if (!Utils::isUnset($request->bizid)) {
            $body['Bizid'] = $request->bizid;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UnfreezeAccount',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UnfreezeAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UnfreezeAccountRequest $request
     *
     * @return UnfreezeAccountResponse
     */
    public function unfreezeAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unfreezeAccountWithOptions($request, $runtime);
    }

    /**
     * @param UnfreezeAntChainAccountRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return UnfreezeAntChainAccountResponse
     */
    public function unfreezeAntChainAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->account)) {
            $body['Account'] = $request->account;
        }
        if (!Utils::isUnset($request->antChainId)) {
            $body['AntChainId'] = $request->antChainId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UnfreezeAntChainAccount',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UnfreezeAntChainAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UnfreezeAntChainAccountRequest $request
     *
     * @return UnfreezeAntChainAccountResponse
     */
    public function unfreezeAntChainAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unfreezeAntChainAccountWithOptions($request, $runtime);
    }

    /**
     * @param UntagResourcesRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UntagResourcesResponse
     */
    public function untagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->all)) {
            $query['All'] = $request->all;
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
            'version'     => '2018-07-31',
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
     * @param UpdateAntChainRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateAntChainResponse
     */
    public function updateAntChainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->antChainId)) {
            $body['AntChainId'] = $request->antChainId;
        }
        if (!Utils::isUnset($request->antChainName)) {
            $body['AntChainName'] = $request->antChainName;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateAntChain',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateAntChainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateAntChainRequest $request
     *
     * @return UpdateAntChainResponse
     */
    public function updateAntChain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAntChainWithOptions($request, $runtime);
    }

    /**
     * @param UpdateAntChainConsortiumRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return UpdateAntChainConsortiumResponse
     */
    public function updateAntChainConsortiumWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->consortiumDescription)) {
            $body['ConsortiumDescription'] = $request->consortiumDescription;
        }
        if (!Utils::isUnset($request->consortiumId)) {
            $body['ConsortiumId'] = $request->consortiumId;
        }
        if (!Utils::isUnset($request->consortiumName)) {
            $body['ConsortiumName'] = $request->consortiumName;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateAntChainConsortium',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateAntChainConsortiumResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateAntChainConsortiumRequest $request
     *
     * @return UpdateAntChainConsortiumResponse
     */
    public function updateAntChainConsortium($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAntChainConsortiumWithOptions($request, $runtime);
    }

    /**
     * @param UpdateAntChainContractContentRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return UpdateAntChainContractContentResponse
     */
    public function updateAntChainContractContentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->content)) {
            $body['Content'] = $request->content;
        }
        if (!Utils::isUnset($request->contentId)) {
            $body['ContentId'] = $request->contentId;
        }
        if (!Utils::isUnset($request->contentName)) {
            $body['ContentName'] = $request->contentName;
        }
        if (!Utils::isUnset($request->parentContentId)) {
            $body['ParentContentId'] = $request->parentContentId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateAntChainContractContent',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateAntChainContractContentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateAntChainContractContentRequest $request
     *
     * @return UpdateAntChainContractContentResponse
     */
    public function updateAntChainContractContent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAntChainContractContentWithOptions($request, $runtime);
    }

    /**
     * @param UpdateAntChainContractProjectRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return UpdateAntChainContractProjectResponse
     */
    public function updateAntChainContractProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->projectDescription)) {
            $body['ProjectDescription'] = $request->projectDescription;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->projectName)) {
            $body['ProjectName'] = $request->projectName;
        }
        if (!Utils::isUnset($request->projectVersion)) {
            $body['ProjectVersion'] = $request->projectVersion;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateAntChainContractProject',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateAntChainContractProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateAntChainContractProjectRequest $request
     *
     * @return UpdateAntChainContractProjectResponse
     */
    public function updateAntChainContractProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAntChainContractProjectWithOptions($request, $runtime);
    }

    /**
     * @param UpdateAntChainMemberRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateAntChainMemberResponse
     */
    public function updateAntChainMemberWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->consortiumId)) {
            $body['ConsortiumId'] = $request->consortiumId;
        }
        if (!Utils::isUnset($request->memberId)) {
            $body['MemberId'] = $request->memberId;
        }
        if (!Utils::isUnset($request->memberName)) {
            $body['MemberName'] = $request->memberName;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateAntChainMember',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateAntChainMemberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateAntChainMemberRequest $request
     *
     * @return UpdateAntChainMemberResponse
     */
    public function updateAntChainMember($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAntChainMemberWithOptions($request, $runtime);
    }

    /**
     * @param UpdateAntChainQRCodeAuthorizationRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return UpdateAntChainQRCodeAuthorizationResponse
     */
    public function updateAntChainQRCodeAuthorizationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->antChainId)) {
            $body['AntChainId'] = $request->antChainId;
        }
        if (!Utils::isUnset($request->authorizationType)) {
            $body['AuthorizationType'] = $request->authorizationType;
        }
        if (!Utils::isUnset($request->QRCodeType)) {
            $body['QRCodeType'] = $request->QRCodeType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateAntChainQRCodeAuthorization',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateAntChainQRCodeAuthorizationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateAntChainQRCodeAuthorizationRequest $request
     *
     * @return UpdateAntChainQRCodeAuthorizationResponse
     */
    public function updateAntChainQRCodeAuthorization($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAntChainQRCodeAuthorizationWithOptions($request, $runtime);
    }

    /**
     * @param UpdateBlockchainSchemaRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateBlockchainSchemaResponse
     */
    public function updateBlockchainSchemaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bizid)) {
            $body['Bizid'] = $request->bizid;
        }
        if (!Utils::isUnset($request->categoryConfigs)) {
            $body['CategoryConfigs'] = $request->categoryConfigs;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->schemaId)) {
            $body['SchemaId'] = $request->schemaId;
        }
        if (!Utils::isUnset($request->schemaName)) {
            $body['SchemaName'] = $request->schemaName;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateBlockchainSchema',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateBlockchainSchemaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateBlockchainSchemaRequest $request
     *
     * @return UpdateBlockchainSchemaResponse
     */
    public function updateBlockchainSchema($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateBlockchainSchemaWithOptions($request, $runtime);
    }

    /**
     * @param UpdateChannelConfigRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateChannelConfigResponse
     */
    public function updateChannelConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->batchTimeout)) {
            $body['BatchTimeout'] = $request->batchTimeout;
        }
        if (!Utils::isUnset($request->channelId)) {
            $body['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->maxMessageCount)) {
            $body['MaxMessageCount'] = $request->maxMessageCount;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $body['OrganizationId'] = $request->organizationId;
        }
        if (!Utils::isUnset($request->preferredMaxBytes)) {
            $body['PreferredMaxBytes'] = $request->preferredMaxBytes;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateChannelConfig',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateChannelConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateChannelConfigRequest $request
     *
     * @return UpdateChannelConfigResponse
     */
    public function updateChannelConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateChannelConfigWithOptions($request, $runtime);
    }

    /**
     * @param UpdateEthereumRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateEthereumResponse
     */
    public function updateEthereumWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->ethereumId)) {
            $body['EthereumId'] = $request->ethereumId;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateEthereum',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateEthereumResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateEthereumRequest $request
     *
     * @return UpdateEthereumResponse
     */
    public function updateEthereum($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateEthereumWithOptions($request, $runtime);
    }

    /**
     * @param UpdateEthereumClientUserPasswordRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return UpdateEthereumClientUserPasswordResponse
     */
    public function updateEthereumClientUserPasswordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->nodeId)) {
            $body['NodeId'] = $request->nodeId;
        }
        if (!Utils::isUnset($request->password)) {
            $body['Password'] = $request->password;
        }
        if (!Utils::isUnset($request->username)) {
            $body['Username'] = $request->username;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateEthereumClientUserPassword',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateEthereumClientUserPasswordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateEthereumClientUserPasswordRequest $request
     *
     * @return UpdateEthereumClientUserPasswordResponse
     */
    public function updateEthereumClientUserPassword($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateEthereumClientUserPasswordWithOptions($request, $runtime);
    }

    /**
     * @param UpdateEthereumNodeRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateEthereumNodeResponse
     */
    public function updateEthereumNodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->nodeId)) {
            $body['NodeId'] = $request->nodeId;
        }
        if (!Utils::isUnset($request->nodeName)) {
            $body['NodeName'] = $request->nodeName;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateEthereumNode',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateEthereumNodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateEthereumNodeRequest $request
     *
     * @return UpdateEthereumNodeResponse
     */
    public function updateEthereumNode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateEthereumNodeWithOptions($request, $runtime);
    }

    /**
     * @param UpdateEthereumNodeConfigurationRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return UpdateEthereumNodeConfigurationResponse
     */
    public function updateEthereumNodeConfigurationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->IP)) {
            $body['IP'] = $request->IP;
        }
        if (!Utils::isUnset($request->nodeId)) {
            $body['NodeId'] = $request->nodeId;
        }
        if (!Utils::isUnset($request->nodePub)) {
            $body['NodePub'] = $request->nodePub;
        }
        if (!Utils::isUnset($request->p2pPort)) {
            $body['P2pPort'] = $request->p2pPort;
        }
        if (!Utils::isUnset($request->raftPort)) {
            $body['RaftPort'] = $request->raftPort;
        }
        if (!Utils::isUnset($request->rpcPort)) {
            $body['RpcPort'] = $request->rpcPort;
        }
        if (!Utils::isUnset($request->TMPort)) {
            $body['TMPort'] = $request->TMPort;
        }
        if (!Utils::isUnset($request->TMPub)) {
            $body['TMPub'] = $request->TMPub;
        }
        if (!Utils::isUnset($request->WSPort)) {
            $body['WSPort'] = $request->WSPort;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateEthereumNodeConfiguration',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateEthereumNodeConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateEthereumNodeConfigurationRequest $request
     *
     * @return UpdateEthereumNodeConfigurationResponse
     */
    public function updateEthereumNodeConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateEthereumNodeConfigurationWithOptions($request, $runtime);
    }

    /**
     * @param UpdateGovernanceTaskRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateGovernanceTaskResponse
     */
    public function updateGovernanceTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->channelId)) {
            $body['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $body['OrganizationId'] = $request->organizationId;
        }
        if (!Utils::isUnset($request->taskAction)) {
            $body['TaskAction'] = $request->taskAction;
        }
        if (!Utils::isUnset($request->taskId)) {
            $body['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateGovernanceTask',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateGovernanceTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateGovernanceTaskRequest $request
     *
     * @return UpdateGovernanceTaskResponse
     */
    public function updateGovernanceTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateGovernanceTaskWithOptions($request, $runtime);
    }

    /**
     * @param UpdateMemberRoleRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateMemberRoleResponse
     */
    public function updateMemberRoleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bid)) {
            $body['Bid'] = $request->bid;
        }
        if (!Utils::isUnset($request->bizid)) {
            $body['Bizid'] = $request->bizid;
        }
        if (!Utils::isUnset($request->role)) {
            $body['Role'] = $request->role;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateMemberRole',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateMemberRoleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateMemberRoleRequest $request
     *
     * @return UpdateMemberRoleResponse
     */
    public function updateMemberRole($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateMemberRoleWithOptions($request, $runtime);
    }

    /**
     * @param UpdateQRCodeAuthorityRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateQRCodeAuthorityResponse
     */
    public function updateQRCodeAuthorityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->authorized)) {
            $body['Authorized'] = $request->authorized;
        }
        if (!Utils::isUnset($request->bizid)) {
            $body['Bizid'] = $request->bizid;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateQRCodeAuthority',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateQRCodeAuthorityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateQRCodeAuthorityRequest $request
     *
     * @return UpdateQRCodeAuthorityResponse
     */
    public function updateQRCodeAuthority($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateQRCodeAuthorityWithOptions($request, $runtime);
    }

    /**
     * @param UpdateSchemaRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return UpdateSchemaResponse
     */
    public function updateSchemaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bizid)) {
            $body['Bizid'] = $request->bizid;
        }
        if (!Utils::isUnset($request->categoryConfigs)) {
            $body['CategoryConfigs'] = $request->categoryConfigs;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->schemaId)) {
            $body['SchemaId'] = $request->schemaId;
        }
        if (!Utils::isUnset($request->schemaName)) {
            $body['SchemaName'] = $request->schemaName;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateSchema',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateSchemaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateSchemaRequest $request
     *
     * @return UpdateSchemaResponse
     */
    public function updateSchema($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSchemaWithOptions($request, $runtime);
    }

    /**
     * @param UpgradeChaincodeRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpgradeChaincodeResponse
     */
    public function upgradeChaincodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->chaincodeId)) {
            $body['ChaincodeId'] = $request->chaincodeId;
        }
        if (!Utils::isUnset($request->collectionConfig)) {
            $body['CollectionConfig'] = $request->collectionConfig;
        }
        if (!Utils::isUnset($request->endorsePolicy)) {
            $body['EndorsePolicy'] = $request->endorsePolicy;
        }
        if (!Utils::isUnset($request->location)) {
            $body['Location'] = $request->location;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $body['OrganizationId'] = $request->organizationId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpgradeChaincode',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpgradeChaincodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpgradeChaincodeRequest $request
     *
     * @return UpgradeChaincodeResponse
     */
    public function upgradeChaincode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->upgradeChaincodeWithOptions($request, $runtime);
    }

    /**
     * @param UpgradeFabricChaincodeDefinitionRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return UpgradeFabricChaincodeDefinitionResponse
     */
    public function upgradeFabricChaincodeDefinitionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->chaincodeId)) {
            $body['ChaincodeId'] = $request->chaincodeId;
        }
        if (!Utils::isUnset($request->chaincodePackageId)) {
            $body['ChaincodePackageId'] = $request->chaincodePackageId;
        }
        if (!Utils::isUnset($request->chaincodeVersion)) {
            $body['ChaincodeVersion'] = $request->chaincodeVersion;
        }
        if (!Utils::isUnset($request->channelId)) {
            $body['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->collectionConfig)) {
            $body['CollectionConfig'] = $request->collectionConfig;
        }
        if (!Utils::isUnset($request->endorsePolicy)) {
            $body['EndorsePolicy'] = $request->endorsePolicy;
        }
        if (!Utils::isUnset($request->initRequired)) {
            $body['InitRequired'] = $request->initRequired;
        }
        if (!Utils::isUnset($request->location)) {
            $body['Location'] = $request->location;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $body['OrganizationId'] = $request->organizationId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpgradeFabricChaincodeDefinition',
            'version'     => '2018-07-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpgradeFabricChaincodeDefinitionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpgradeFabricChaincodeDefinitionRequest $request
     *
     * @return UpgradeFabricChaincodeDefinitionResponse
     */
    public function upgradeFabricChaincodeDefinition($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->upgradeFabricChaincodeDefinitionWithOptions($request, $runtime);
    }
}
