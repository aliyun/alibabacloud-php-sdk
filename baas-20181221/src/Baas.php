<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20181221;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Baas\V20181221\Models\AcceptFabricInvitationRequest;
use AlibabaCloud\SDK\Baas\V20181221\Models\AcceptFabricInvitationResponse;
use AlibabaCloud\SDK\Baas\V20181221\Models\ApplyAntChainCertificateRequest;
use AlibabaCloud\SDK\Baas\V20181221\Models\ApplyAntChainCertificateResponse;
use AlibabaCloud\SDK\Baas\V20181221\Models\ApplyAntChainCertificateWithKeyAutoCreationRequest;
use AlibabaCloud\SDK\Baas\V20181221\Models\ApplyAntChainCertificateWithKeyAutoCreationResponse;
use AlibabaCloud\SDK\Baas\V20181221\Models\ApproveFabricChaincodeDefinitionRequest;
use AlibabaCloud\SDK\Baas\V20181221\Models\ApproveFabricChaincodeDefinitionResponse;
use AlibabaCloud\SDK\Baas\V20181221\Models\BatchAddAntChainMiniAppQRCodeAuthorizedUsersRequest;
use AlibabaCloud\SDK\Baas\V20181221\Models\BatchAddAntChainMiniAppQRCodeAuthorizedUsersResponse;
use AlibabaCloud\SDK\Baas\V20181221\Models\BatchAddAntChainMiniAppQRCodeAuthorizedUsersShrinkRequest;
use AlibabaCloud\SDK\Baas\V20181221\Models\CheckFabricConsortiumDomainRequest;
use AlibabaCloud\SDK\Baas\V20181221\Models\CheckFabricConsortiumDomainResponse;
use AlibabaCloud\SDK\Baas\V20181221\Models\CheckFabricOrganizationDomainRequest;
use AlibabaCloud\SDK\Baas\V20181221\Models\CheckFabricOrganizationDomainResponse;
use AlibabaCloud\SDK\Baas\V20181221\Models\ConfirmFabricConsortiumMemberRequest;
use AlibabaCloud\SDK\Baas\V20181221\Models\ConfirmFabricConsortiumMemberResponse;
use AlibabaCloud\SDK\Baas\V20181221\Models\CopyAntChainContractProjectRequest;
use AlibabaCloud\SDK\Baas\V20181221\Models\CopyAntChainContractProjectResponse;
use AlibabaCloud\SDK\Baas\V20181221\Models\CreateAntChainAccountRequest;
use AlibabaCloud\SDK\Baas\V20181221\Models\CreateAntChainAccountResponse;
use AlibabaCloud\SDK\Baas\V20181221\Models\CreateAntChainAccountWithKeyPairAutoCreationRequest;
use AlibabaCloud\SDK\Baas\V20181221\Models\CreateAntChainAccountWithKeyPairAutoCreationResponse;
use AlibabaCloud\SDK\Baas\V20181221\Models\CreateAntChainConsortiumRequest;
use AlibabaCloud\SDK\Baas\V20181221\Models\CreateAntChainConsortiumResponse;
use AlibabaCloud\SDK\Baas\V20181221\Models\CreateAntChainContractContentRequest;
use AlibabaCloud\SDK\Baas\V20181221\Models\CreateAntChainContractContentResponse;
use AlibabaCloud\SDK\Baas\V20181221\Models\CreateAntChainContractProjectRequest;
use AlibabaCloud\SDK\Baas\V20181221\Models\CreateAntChainContractProjectResponse;
use AlibabaCloud\SDK\Baas\V20181221\Models\CreateAntChainKmsAccountNewRequest;
use AlibabaCloud\SDK\Baas\V20181221\Models\CreateAntChainKmsAccountNewResponse;
use AlibabaCloud\SDK\Baas\V20181221\Models\CreateFabricChaincodePackageRequest;
use AlibabaCloud\SDK\Baas\V20181221\Models\CreateFabricChaincodePackageResponse;
use AlibabaCloud\SDK\Baas\V20181221\Models\CreateFabricChaincodeRequest;
use AlibabaCloud\SDK\Baas\V20181221\Models\CreateFabricChaincodeResponse;
use AlibabaCloud\SDK\Baas\V20181221\Models\CreateFabricChannelMemberRequest;
use AlibabaCloud\SDK\Baas\V20181221\Models\CreateFabricChannelMemberResponse;
use AlibabaCloud\SDK\Baas\V20181221\Models\CreateFabricChannelRequest;
use AlibabaCloud\SDK\Baas\V20181221\Models\CreateFabricChannelResponse;
use AlibabaCloud\SDK\Baas\V20181221\Models\CreateFabricConsortiumMemberRequest;
use AlibabaCloud\SDK\Baas\V20181221\Models\CreateFabricConsortiumMemberResponse;
use AlibabaCloud\SDK\Baas\V20181221\Models\CreateFabricConsortiumRequest;
use AlibabaCloud\SDK\Baas\V20181221\Models\CreateFabricConsortiumResponse;
use AlibabaCloud\SDK\Baas\V20181221\Models\CreateFabricOrganizationRequest;
use AlibabaCloud\SDK\Baas\V20181221\Models\CreateFabricOrganizationResponse;
use AlibabaCloud\SDK\Baas\V20181221\Models\CreateFabricOrganizationUserRequest;
use AlibabaCloud\SDK\Baas\V20181221\Models\CreateFabricOrganizationUserResponse;
use AlibabaCloud\SDK\Baas\V20181221\Models\DeleteAntChainConsortiumRequest;
use AlibabaCloud\SDK\Baas\V20181221\Models\DeleteAntChainConsortiumResponse;
use AlibabaCloud\SDK\Baas\V20181221\Models\DeleteAntChainContractContentRequest;
use AlibabaCloud\SDK\Baas\V20181221\Models\DeleteAntChainContractContentResponse;
use AlibabaCloud\SDK\Baas\V20181221\Models\DeleteAntChainContractProjectRequest;
use AlibabaCloud\SDK\Baas\V20181221\Models\DeleteAntChainContractProjectResponse;
use AlibabaCloud\SDK\Baas\V20181221\Models\DeleteAntChainMiniAppQRCodeAuthorizedUserRequest;
use AlibabaCloud\SDK\Baas\V20181221\Models\DeleteAntChainMiniAppQRCodeAuthorizedUserResponse;
use AlibabaCloud\SDK\Baas\V20181221\Models\DeleteFabricChaincodeRequest;
use AlibabaCloud\SDK\Baas\V20181221\Models\DeleteFabricChaincodeResponse;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainAccountsRequest;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainAccountsResponse;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainAccountsV2Request;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainAccountsV2Response;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainBlockRequest;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainBlockResponse;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainBlockV2Request;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainBlockV2Response;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainCertificateApplicationsRequest;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainCertificateApplicationsResponse;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainCertificateApplicationsV2Request;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainCertificateApplicationsV2Response;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainConsortiumsRequest;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainConsortiumsResponse;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainConsortiumsV2Request;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainConsortiumsV2Response;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainContractProjectContentTreeRequest;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainContractProjectContentTreeResponse;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainContractProjectContentTreeV2Request;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainContractProjectContentTreeV2Response;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainContractProjectsRequest;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainContractProjectsResponse;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainContractProjectsV2Request;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainContractProjectsV2Response;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainDownloadPathsRequest;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainDownloadPathsResponse;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainDownloadPathsV2Request;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainDownloadPathsV2Response;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainInformationRequest;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainInformationResponse;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainInformationV2Request;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainInformationV2Response;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainLatestBlocksRequest;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainLatestBlocksResponse;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainLatestBlocksV2Request;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainLatestBlocksV2Response;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainLatestTransactionDigestsRequest;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainLatestTransactionDigestsResponse;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainLatestTransactionDigestsV2Request;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainLatestTransactionDigestsV2Response;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainMembersRequest;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainMembersResponse;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainMembersV2Request;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainMembersV2Response;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainMiniAppBrowserQRCodeAccessLogRequest;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainMiniAppBrowserQRCodeAccessLogResponse;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainMiniAppBrowserQRCodeAccessLogV2Request;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainMiniAppBrowserQRCodeAccessLogV2Response;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainMiniAppBrowserQRCodeAuthorizedUsersRequest;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainMiniAppBrowserQRCodeAuthorizedUsersResponse;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainMiniAppBrowserQRCodeAuthorizedUsersV2Request;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainMiniAppBrowserQRCodeAuthorizedUsersV2Response;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainMiniAppBrowserTransactionQRCodeNewRequest;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainMiniAppBrowserTransactionQRCodeNewResponse;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainMiniAppBrowserTransactionQRCodeRequest;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainMiniAppBrowserTransactionQRCodeResponse;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainNodesRequest;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainNodesResponse;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainNodesV2Request;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainNodesV2Response;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainQRCodeAuthorizationRequest;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainQRCodeAuthorizationResponse;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainQRCodeAuthorizationV2Request;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainQRCodeAuthorizationV2Response;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainsRequest;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainsResponse;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainsV2Request;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainsV2Response;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainTransactionReceiptRequest;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainTransactionReceiptResponse;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainTransactionReceiptV2Request;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainTransactionReceiptV2Response;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainTransactionRequest;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainTransactionResponse;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainTransactionStatisticsRequest;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainTransactionStatisticsResponse;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainTransactionStatisticsV2Request;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainTransactionStatisticsV2Response;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainTransactionV2Request;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainTransactionV2Response;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeEthereumDeletableRequest;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeEthereumDeletableResponse;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeFabricCandidateOrganizationsRequest;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeFabricCandidateOrganizationsResponse;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeFabricChaincodeDefinitionTaskRequest;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeFabricChaincodeDefinitionTaskResponse;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeFabricChaincodeUploadPolicyRequest;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeFabricChaincodeUploadPolicyResponse;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeFabricChannelMembersRequest;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeFabricChannelMembersResponse;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeFabricConsortiumAdminStatusRequest;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeFabricConsortiumAdminStatusResponse;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeFabricConsortiumChaincodesRequest;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeFabricConsortiumChaincodesResponse;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeFabricConsortiumChannelsRequest;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeFabricConsortiumChannelsResponse;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeFabricConsortiumConfigResponse;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeFabricConsortiumDeletableRequest;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeFabricConsortiumDeletableResponse;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeFabricConsortiumMemberApprovalRequest;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeFabricConsortiumMemberApprovalResponse;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeFabricConsortiumMembersRequest;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeFabricConsortiumMembersResponse;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeFabricConsortiumOrderersRequest;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeFabricConsortiumOrderersResponse;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeFabricConsortiumSpecsResponse;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeFabricConsortiumsRequest;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeFabricConsortiumsResponse;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeFabricExplorerRequest;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeFabricExplorerResponse;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeFabricInvitationCodeRequest;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeFabricInvitationCodeResponse;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeFabricInviterRequest;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeFabricInviterResponse;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeFabricOrdererLogsRequest;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeFabricOrdererLogsResponse;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeFabricOrganizationChaincodePackageRequest;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeFabricOrganizationChaincodePackageResponse;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeFabricOrganizationChaincodesRequest;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeFabricOrganizationChaincodesResponse;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeFabricOrganizationChannelsRequest;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeFabricOrganizationChannelsResponse;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeFabricOrganizationDeletableRequest;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeFabricOrganizationDeletableResponse;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeFabricOrganizationMembersRequest;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeFabricOrganizationMembersResponse;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeFabricOrganizationPeersRequest;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeFabricOrganizationPeersResponse;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeFabricOrganizationRequest;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeFabricOrganizationResponse;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeFabricOrganizationSpecsResponse;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeFabricOrganizationsRequest;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeFabricOrganizationsResponse;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeFabricOrganizationUsersRequest;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeFabricOrganizationUsersResponse;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeFabricPeerLogsRequest;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeFabricPeerLogsResponse;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeRootDomainResponse;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeTasksResponse;
use AlibabaCloud\SDK\Baas\V20181221\Models\DownloadFabricOrganizationSDKRequest;
use AlibabaCloud\SDK\Baas\V20181221\Models\DownloadFabricOrganizationSDKResponse;
use AlibabaCloud\SDK\Baas\V20181221\Models\FreezeAntChainAccountRequest;
use AlibabaCloud\SDK\Baas\V20181221\Models\FreezeAntChainAccountResponse;
use AlibabaCloud\SDK\Baas\V20181221\Models\InstallFabricChaincodePackageRequest;
use AlibabaCloud\SDK\Baas\V20181221\Models\InstallFabricChaincodePackageResponse;
use AlibabaCloud\SDK\Baas\V20181221\Models\InstallFabricChaincodeRequest;
use AlibabaCloud\SDK\Baas\V20181221\Models\InstallFabricChaincodeResponse;
use AlibabaCloud\SDK\Baas\V20181221\Models\InstantiateFabricChaincodeRequest;
use AlibabaCloud\SDK\Baas\V20181221\Models\InstantiateFabricChaincodeResponse;
use AlibabaCloud\SDK\Baas\V20181221\Models\JoinFabricChannelRequest;
use AlibabaCloud\SDK\Baas\V20181221\Models\JoinFabricChannelResponse;
use AlibabaCloud\SDK\Baas\V20181221\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\Baas\V20181221\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\Baas\V20181221\Models\ResetAntChainCertificateRequest;
use AlibabaCloud\SDK\Baas\V20181221\Models\ResetAntChainCertificateResponse;
use AlibabaCloud\SDK\Baas\V20181221\Models\ResetAntChainUserCertificateRequest;
use AlibabaCloud\SDK\Baas\V20181221\Models\ResetAntChainUserCertificateResponse;
use AlibabaCloud\SDK\Baas\V20181221\Models\ResetFabricOrganizationUserPasswordRequest;
use AlibabaCloud\SDK\Baas\V20181221\Models\ResetFabricOrganizationUserPasswordResponse;
use AlibabaCloud\SDK\Baas\V20181221\Models\SubmitFabricChaincodeDefinitionRequest;
use AlibabaCloud\SDK\Baas\V20181221\Models\SubmitFabricChaincodeDefinitionResponse;
use AlibabaCloud\SDK\Baas\V20181221\Models\SynchronizeFabricChaincodeRequest;
use AlibabaCloud\SDK\Baas\V20181221\Models\SynchronizeFabricChaincodeResponse;
use AlibabaCloud\SDK\Baas\V20181221\Models\TagResourcesRequest;
use AlibabaCloud\SDK\Baas\V20181221\Models\TagResourcesResponse;
use AlibabaCloud\SDK\Baas\V20181221\Models\UnfreezeAntChainAccountRequest;
use AlibabaCloud\SDK\Baas\V20181221\Models\UnfreezeAntChainAccountResponse;
use AlibabaCloud\SDK\Baas\V20181221\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\Baas\V20181221\Models\UntagResourcesResponse;
use AlibabaCloud\SDK\Baas\V20181221\Models\UpdateAntChainConsortiumRequest;
use AlibabaCloud\SDK\Baas\V20181221\Models\UpdateAntChainConsortiumResponse;
use AlibabaCloud\SDK\Baas\V20181221\Models\UpdateAntChainContractContentRequest;
use AlibabaCloud\SDK\Baas\V20181221\Models\UpdateAntChainContractContentResponse;
use AlibabaCloud\SDK\Baas\V20181221\Models\UpdateAntChainContractProjectRequest;
use AlibabaCloud\SDK\Baas\V20181221\Models\UpdateAntChainContractProjectResponse;
use AlibabaCloud\SDK\Baas\V20181221\Models\UpdateAntChainMemberRequest;
use AlibabaCloud\SDK\Baas\V20181221\Models\UpdateAntChainMemberResponse;
use AlibabaCloud\SDK\Baas\V20181221\Models\UpdateAntChainQRCodeAuthorizationRequest;
use AlibabaCloud\SDK\Baas\V20181221\Models\UpdateAntChainQRCodeAuthorizationResponse;
use AlibabaCloud\SDK\Baas\V20181221\Models\UpdateAntChainRequest;
use AlibabaCloud\SDK\Baas\V20181221\Models\UpdateAntChainResponse;
use AlibabaCloud\SDK\Baas\V20181221\Models\UpgradeFabricChaincodeDefinitionRequest;
use AlibabaCloud\SDK\Baas\V20181221\Models\UpgradeFabricChaincodeDefinitionResponse;
use AlibabaCloud\SDK\Baas\V20181221\Models\UpgradeFabricChaincodeRequest;
use AlibabaCloud\SDK\Baas\V20181221\Models\UpgradeFabricChaincodeResponse;
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
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
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
     * @param AcceptFabricInvitationRequest $request AcceptFabricInvitationRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return AcceptFabricInvitationResponse AcceptFabricInvitationResponse
     */
    public function acceptFabricInvitationWithOptions($request, $runtime)
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
            'action'      => 'AcceptFabricInvitation',
            'version'     => '2018-12-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AcceptFabricInvitationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AcceptFabricInvitationRequest $request AcceptFabricInvitationRequest
     *
     * @return AcceptFabricInvitationResponse AcceptFabricInvitationResponse
     */
    public function acceptFabricInvitation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->acceptFabricInvitationWithOptions($request, $runtime);
    }

    /**
     * @param ApplyAntChainCertificateRequest $request ApplyAntChainCertificateRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return ApplyAntChainCertificateResponse ApplyAntChainCertificateResponse
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
            'version'     => '2018-12-21',
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
     * @param ApplyAntChainCertificateRequest $request ApplyAntChainCertificateRequest
     *
     * @return ApplyAntChainCertificateResponse ApplyAntChainCertificateResponse
     */
    public function applyAntChainCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->applyAntChainCertificateWithOptions($request, $runtime);
    }

    /**
     * @param ApplyAntChainCertificateWithKeyAutoCreationRequest $request ApplyAntChainCertificateWithKeyAutoCreationRequest
     * @param RuntimeOptions                                     $runtime runtime options for this request RuntimeOptions
     *
     * @return ApplyAntChainCertificateWithKeyAutoCreationResponse ApplyAntChainCertificateWithKeyAutoCreationResponse
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
            'version'     => '2018-12-21',
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
     * @param ApplyAntChainCertificateWithKeyAutoCreationRequest $request ApplyAntChainCertificateWithKeyAutoCreationRequest
     *
     * @return ApplyAntChainCertificateWithKeyAutoCreationResponse ApplyAntChainCertificateWithKeyAutoCreationResponse
     */
    public function applyAntChainCertificateWithKeyAutoCreation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->applyAntChainCertificateWithKeyAutoCreationWithOptions($request, $runtime);
    }

    /**
     * @summary ApproveFabricChaincodeDefinition
     *  *
     * @param ApproveFabricChaincodeDefinitionRequest $request ApproveFabricChaincodeDefinitionRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return ApproveFabricChaincodeDefinitionResponse ApproveFabricChaincodeDefinitionResponse
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
            'version'     => '2018-12-21',
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
     * @summary ApproveFabricChaincodeDefinition
     *  *
     * @param ApproveFabricChaincodeDefinitionRequest $request ApproveFabricChaincodeDefinitionRequest
     *
     * @return ApproveFabricChaincodeDefinitionResponse ApproveFabricChaincodeDefinitionResponse
     */
    public function approveFabricChaincodeDefinition($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->approveFabricChaincodeDefinitionWithOptions($request, $runtime);
    }

    /**
     * @param BatchAddAntChainMiniAppQRCodeAuthorizedUsersRequest $tmpReq  BatchAddAntChainMiniAppQRCodeAuthorizedUsersRequest
     * @param RuntimeOptions                                      $runtime runtime options for this request RuntimeOptions
     *
     * @return BatchAddAntChainMiniAppQRCodeAuthorizedUsersResponse BatchAddAntChainMiniAppQRCodeAuthorizedUsersResponse
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
            'version'     => '2018-12-21',
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
     * @param BatchAddAntChainMiniAppQRCodeAuthorizedUsersRequest $request BatchAddAntChainMiniAppQRCodeAuthorizedUsersRequest
     *
     * @return BatchAddAntChainMiniAppQRCodeAuthorizedUsersResponse BatchAddAntChainMiniAppQRCodeAuthorizedUsersResponse
     */
    public function batchAddAntChainMiniAppQRCodeAuthorizedUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchAddAntChainMiniAppQRCodeAuthorizedUsersWithOptions($request, $runtime);
    }

    /**
     * @param CheckFabricConsortiumDomainRequest $request CheckFabricConsortiumDomainRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return CheckFabricConsortiumDomainResponse CheckFabricConsortiumDomainResponse
     */
    public function checkFabricConsortiumDomainWithOptions($request, $runtime)
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
            'action'      => 'CheckFabricConsortiumDomain',
            'version'     => '2018-12-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CheckFabricConsortiumDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CheckFabricConsortiumDomainRequest $request CheckFabricConsortiumDomainRequest
     *
     * @return CheckFabricConsortiumDomainResponse CheckFabricConsortiumDomainResponse
     */
    public function checkFabricConsortiumDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkFabricConsortiumDomainWithOptions($request, $runtime);
    }

    /**
     * @param CheckFabricOrganizationDomainRequest $request CheckFabricOrganizationDomainRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return CheckFabricOrganizationDomainResponse CheckFabricOrganizationDomainResponse
     */
    public function checkFabricOrganizationDomainWithOptions($request, $runtime)
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
            'action'      => 'CheckFabricOrganizationDomain',
            'version'     => '2018-12-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CheckFabricOrganizationDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CheckFabricOrganizationDomainRequest $request CheckFabricOrganizationDomainRequest
     *
     * @return CheckFabricOrganizationDomainResponse CheckFabricOrganizationDomainResponse
     */
    public function checkFabricOrganizationDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkFabricOrganizationDomainWithOptions($request, $runtime);
    }

    /**
     * @param ConfirmFabricConsortiumMemberRequest $request ConfirmFabricConsortiumMemberRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return ConfirmFabricConsortiumMemberResponse ConfirmFabricConsortiumMemberResponse
     */
    public function confirmFabricConsortiumMemberWithOptions($request, $runtime)
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
            'action'      => 'ConfirmFabricConsortiumMember',
            'version'     => '2018-12-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ConfirmFabricConsortiumMemberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ConfirmFabricConsortiumMemberRequest $request ConfirmFabricConsortiumMemberRequest
     *
     * @return ConfirmFabricConsortiumMemberResponse ConfirmFabricConsortiumMemberResponse
     */
    public function confirmFabricConsortiumMember($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->confirmFabricConsortiumMemberWithOptions($request, $runtime);
    }

    /**
     * @param CopyAntChainContractProjectRequest $request CopyAntChainContractProjectRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return CopyAntChainContractProjectResponse CopyAntChainContractProjectResponse
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
            'version'     => '2018-12-21',
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
     * @param CopyAntChainContractProjectRequest $request CopyAntChainContractProjectRequest
     *
     * @return CopyAntChainContractProjectResponse CopyAntChainContractProjectResponse
     */
    public function copyAntChainContractProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->copyAntChainContractProjectWithOptions($request, $runtime);
    }

    /**
     * @param CreateAntChainAccountRequest $request CreateAntChainAccountRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateAntChainAccountResponse CreateAntChainAccountResponse
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
            'version'     => '2018-12-21',
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
     * @param CreateAntChainAccountRequest $request CreateAntChainAccountRequest
     *
     * @return CreateAntChainAccountResponse CreateAntChainAccountResponse
     */
    public function createAntChainAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAntChainAccountWithOptions($request, $runtime);
    }

    /**
     * @param CreateAntChainAccountWithKeyPairAutoCreationRequest $request CreateAntChainAccountWithKeyPairAutoCreationRequest
     * @param RuntimeOptions                                      $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateAntChainAccountWithKeyPairAutoCreationResponse CreateAntChainAccountWithKeyPairAutoCreationResponse
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
            'version'     => '2018-12-21',
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
     * @param CreateAntChainAccountWithKeyPairAutoCreationRequest $request CreateAntChainAccountWithKeyPairAutoCreationRequest
     *
     * @return CreateAntChainAccountWithKeyPairAutoCreationResponse CreateAntChainAccountWithKeyPairAutoCreationResponse
     */
    public function createAntChainAccountWithKeyPairAutoCreation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAntChainAccountWithKeyPairAutoCreationWithOptions($request, $runtime);
    }

    /**
     * @param CreateAntChainConsortiumRequest $request CreateAntChainConsortiumRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateAntChainConsortiumResponse CreateAntChainConsortiumResponse
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
            'version'     => '2018-12-21',
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
     * @param CreateAntChainConsortiumRequest $request CreateAntChainConsortiumRequest
     *
     * @return CreateAntChainConsortiumResponse CreateAntChainConsortiumResponse
     */
    public function createAntChainConsortium($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAntChainConsortiumWithOptions($request, $runtime);
    }

    /**
     * @param CreateAntChainContractContentRequest $request CreateAntChainContractContentRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateAntChainContractContentResponse CreateAntChainContractContentResponse
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
            'version'     => '2018-12-21',
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
     * @param CreateAntChainContractContentRequest $request CreateAntChainContractContentRequest
     *
     * @return CreateAntChainContractContentResponse CreateAntChainContractContentResponse
     */
    public function createAntChainContractContent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAntChainContractContentWithOptions($request, $runtime);
    }

    /**
     * @param CreateAntChainContractProjectRequest $request CreateAntChainContractProjectRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateAntChainContractProjectResponse CreateAntChainContractProjectResponse
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
            'version'     => '2018-12-21',
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
     * @param CreateAntChainContractProjectRequest $request CreateAntChainContractProjectRequest
     *
     * @return CreateAntChainContractProjectResponse CreateAntChainContractProjectResponse
     */
    public function createAntChainContractProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAntChainContractProjectWithOptions($request, $runtime);
    }

    /**
     * @summary 创建MyChain托管账户
     *  *
     * @param CreateAntChainKmsAccountNewRequest $request CreateAntChainKmsAccountNewRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateAntChainKmsAccountNewResponse CreateAntChainKmsAccountNewResponse
     */
    public function createAntChainKmsAccountNewWithOptions($request, $runtime)
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
            'action'      => 'CreateAntChainKmsAccountNew',
            'version'     => '2018-12-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateAntChainKmsAccountNewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建MyChain托管账户
     *  *
     * @param CreateAntChainKmsAccountNewRequest $request CreateAntChainKmsAccountNewRequest
     *
     * @return CreateAntChainKmsAccountNewResponse CreateAntChainKmsAccountNewResponse
     */
    public function createAntChainKmsAccountNew($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAntChainKmsAccountNewWithOptions($request, $runtime);
    }

    /**
     * @param CreateFabricChaincodeRequest $request CreateFabricChaincodeRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateFabricChaincodeResponse CreateFabricChaincodeResponse
     */
    public function createFabricChaincodeWithOptions($request, $runtime)
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
            'action'      => 'CreateFabricChaincode',
            'version'     => '2018-12-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateFabricChaincodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateFabricChaincodeRequest $request CreateFabricChaincodeRequest
     *
     * @return CreateFabricChaincodeResponse CreateFabricChaincodeResponse
     */
    public function createFabricChaincode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFabricChaincodeWithOptions($request, $runtime);
    }

    /**
     * @summary CreateFabricChaincodePackage
     *  *
     * @param CreateFabricChaincodePackageRequest $request CreateFabricChaincodePackageRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateFabricChaincodePackageResponse CreateFabricChaincodePackageResponse
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
        if (!Utils::isUnset($request->ossUrl)) {
            $body['OssUrl'] = $request->ossUrl;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateFabricChaincodePackage',
            'version'     => '2018-12-21',
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
     * @summary CreateFabricChaincodePackage
     *  *
     * @param CreateFabricChaincodePackageRequest $request CreateFabricChaincodePackageRequest
     *
     * @return CreateFabricChaincodePackageResponse CreateFabricChaincodePackageResponse
     */
    public function createFabricChaincodePackage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFabricChaincodePackageWithOptions($request, $runtime);
    }

    /**
     * @param CreateFabricChannelRequest $request CreateFabricChannelRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateFabricChannelResponse CreateFabricChannelResponse
     */
    public function createFabricChannelWithOptions($request, $runtime)
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
            'action'      => 'CreateFabricChannel',
            'version'     => '2018-12-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateFabricChannelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateFabricChannelRequest $request CreateFabricChannelRequest
     *
     * @return CreateFabricChannelResponse CreateFabricChannelResponse
     */
    public function createFabricChannel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFabricChannelWithOptions($request, $runtime);
    }

    /**
     * @param CreateFabricChannelMemberRequest $request CreateFabricChannelMemberRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateFabricChannelMemberResponse CreateFabricChannelMemberResponse
     */
    public function createFabricChannelMemberWithOptions($request, $runtime)
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
            'action'      => 'CreateFabricChannelMember',
            'version'     => '2018-12-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateFabricChannelMemberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateFabricChannelMemberRequest $request CreateFabricChannelMemberRequest
     *
     * @return CreateFabricChannelMemberResponse CreateFabricChannelMemberResponse
     */
    public function createFabricChannelMember($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFabricChannelMemberWithOptions($request, $runtime);
    }

    /**
     * @param CreateFabricConsortiumRequest $request CreateFabricConsortiumRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateFabricConsortiumResponse CreateFabricConsortiumResponse
     */
    public function createFabricConsortiumWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->channelPolicy)) {
            $body['ChannelPolicy'] = $request->channelPolicy;
        }
        if (!Utils::isUnset($request->consortiumDescription)) {
            $body['ConsortiumDescription'] = $request->consortiumDescription;
        }
        if (!Utils::isUnset($request->consortiumName)) {
            $body['ConsortiumName'] = $request->consortiumName;
        }
        if (!Utils::isUnset($request->domain)) {
            $body['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->location)) {
            $body['Location'] = $request->location;
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
        if (!Utils::isUnset($request->paymentDuration)) {
            $body['PaymentDuration'] = $request->paymentDuration;
        }
        if (!Utils::isUnset($request->paymentDurationUnit)) {
            $body['PaymentDurationUnit'] = $request->paymentDurationUnit;
        }
        if (!Utils::isUnset($request->peersCount)) {
            $body['PeersCount'] = $request->peersCount;
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
            'action'      => 'CreateFabricConsortium',
            'version'     => '2018-12-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateFabricConsortiumResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateFabricConsortiumRequest $request CreateFabricConsortiumRequest
     *
     * @return CreateFabricConsortiumResponse CreateFabricConsortiumResponse
     */
    public function createFabricConsortium($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFabricConsortiumWithOptions($request, $runtime);
    }

    /**
     * @param CreateFabricConsortiumMemberRequest $request CreateFabricConsortiumMemberRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateFabricConsortiumMemberResponse CreateFabricConsortiumMemberResponse
     */
    public function createFabricConsortiumMemberWithOptions($request, $runtime)
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
            'action'      => 'CreateFabricConsortiumMember',
            'version'     => '2018-12-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateFabricConsortiumMemberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateFabricConsortiumMemberRequest $request CreateFabricConsortiumMemberRequest
     *
     * @return CreateFabricConsortiumMemberResponse CreateFabricConsortiumMemberResponse
     */
    public function createFabricConsortiumMember($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFabricConsortiumMemberWithOptions($request, $runtime);
    }

    /**
     * @param CreateFabricOrganizationRequest $request CreateFabricOrganizationRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateFabricOrganizationResponse CreateFabricOrganizationResponse
     */
    public function createFabricOrganizationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->location)) {
            $query['Location'] = $request->location;
        }
        if (!Utils::isUnset($request->organizationName)) {
            $query['OrganizationName'] = $request->organizationName;
        }
        if (!Utils::isUnset($request->specName)) {
            $query['SpecName'] = $request->specName;
        }
        $body = [];
        if (!Utils::isUnset($request->paymentDuration)) {
            $body['PaymentDuration'] = $request->paymentDuration;
        }
        if (!Utils::isUnset($request->paymentDurationUnit)) {
            $body['PaymentDurationUnit'] = $request->paymentDurationUnit;
        }
        if (!Utils::isUnset($request->peersCount)) {
            $body['PeersCount'] = $request->peersCount;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateFabricOrganization',
            'version'     => '2018-12-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateFabricOrganizationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateFabricOrganizationRequest $request CreateFabricOrganizationRequest
     *
     * @return CreateFabricOrganizationResponse CreateFabricOrganizationResponse
     */
    public function createFabricOrganization($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFabricOrganizationWithOptions($request, $runtime);
    }

    /**
     * @param CreateFabricOrganizationUserRequest $request CreateFabricOrganizationUserRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateFabricOrganizationUserResponse CreateFabricOrganizationUserResponse
     */
    public function createFabricOrganizationUserWithOptions($request, $runtime)
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
            'action'      => 'CreateFabricOrganizationUser',
            'version'     => '2018-12-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateFabricOrganizationUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateFabricOrganizationUserRequest $request CreateFabricOrganizationUserRequest
     *
     * @return CreateFabricOrganizationUserResponse CreateFabricOrganizationUserResponse
     */
    public function createFabricOrganizationUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFabricOrganizationUserWithOptions($request, $runtime);
    }

    /**
     * @param DeleteAntChainConsortiumRequest $request DeleteAntChainConsortiumRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteAntChainConsortiumResponse DeleteAntChainConsortiumResponse
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
            'version'     => '2018-12-21',
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
     * @param DeleteAntChainConsortiumRequest $request DeleteAntChainConsortiumRequest
     *
     * @return DeleteAntChainConsortiumResponse DeleteAntChainConsortiumResponse
     */
    public function deleteAntChainConsortium($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAntChainConsortiumWithOptions($request, $runtime);
    }

    /**
     * @param DeleteAntChainContractContentRequest $request DeleteAntChainContractContentRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteAntChainContractContentResponse DeleteAntChainContractContentResponse
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
            'version'     => '2018-12-21',
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
     * @param DeleteAntChainContractContentRequest $request DeleteAntChainContractContentRequest
     *
     * @return DeleteAntChainContractContentResponse DeleteAntChainContractContentResponse
     */
    public function deleteAntChainContractContent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAntChainContractContentWithOptions($request, $runtime);
    }

    /**
     * @param DeleteAntChainContractProjectRequest $request DeleteAntChainContractProjectRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteAntChainContractProjectResponse DeleteAntChainContractProjectResponse
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
            'version'     => '2018-12-21',
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
     * @param DeleteAntChainContractProjectRequest $request DeleteAntChainContractProjectRequest
     *
     * @return DeleteAntChainContractProjectResponse DeleteAntChainContractProjectResponse
     */
    public function deleteAntChainContractProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAntChainContractProjectWithOptions($request, $runtime);
    }

    /**
     * @param DeleteAntChainMiniAppQRCodeAuthorizedUserRequest $request DeleteAntChainMiniAppQRCodeAuthorizedUserRequest
     * @param RuntimeOptions                                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteAntChainMiniAppQRCodeAuthorizedUserResponse DeleteAntChainMiniAppQRCodeAuthorizedUserResponse
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
            'version'     => '2018-12-21',
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
     * @param DeleteAntChainMiniAppQRCodeAuthorizedUserRequest $request DeleteAntChainMiniAppQRCodeAuthorizedUserRequest
     *
     * @return DeleteAntChainMiniAppQRCodeAuthorizedUserResponse DeleteAntChainMiniAppQRCodeAuthorizedUserResponse
     */
    public function deleteAntChainMiniAppQRCodeAuthorizedUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAntChainMiniAppQRCodeAuthorizedUserWithOptions($request, $runtime);
    }

    /**
     * @param DeleteFabricChaincodeRequest $request DeleteFabricChaincodeRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteFabricChaincodeResponse DeleteFabricChaincodeResponse
     */
    public function deleteFabricChaincodeWithOptions($request, $runtime)
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
            'action'      => 'DeleteFabricChaincode',
            'version'     => '2018-12-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteFabricChaincodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteFabricChaincodeRequest $request DeleteFabricChaincodeRequest
     *
     * @return DeleteFabricChaincodeResponse DeleteFabricChaincodeResponse
     */
    public function deleteFabricChaincode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteFabricChaincodeWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAntChainAccountsRequest $request DescribeAntChainAccountsRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAntChainAccountsResponse DescribeAntChainAccountsResponse
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
            'version'     => '2018-12-21',
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
     * @param DescribeAntChainAccountsRequest $request DescribeAntChainAccountsRequest
     *
     * @return DescribeAntChainAccountsResponse DescribeAntChainAccountsResponse
     */
    public function describeAntChainAccounts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAntChainAccountsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAntChainAccountsV2Request $request DescribeAntChainAccountsV2Request
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAntChainAccountsV2Response DescribeAntChainAccountsV2Response
     */
    public function describeAntChainAccountsV2WithOptions($request, $runtime)
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
            'action'      => 'DescribeAntChainAccountsV2',
            'version'     => '2018-12-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAntChainAccountsV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAntChainAccountsV2Request $request DescribeAntChainAccountsV2Request
     *
     * @return DescribeAntChainAccountsV2Response DescribeAntChainAccountsV2Response
     */
    public function describeAntChainAccountsV2($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAntChainAccountsV2WithOptions($request, $runtime);
    }

    /**
     * @param DescribeAntChainBlockRequest $request DescribeAntChainBlockRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAntChainBlockResponse DescribeAntChainBlockResponse
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
            'version'     => '2018-12-21',
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
     * @param DescribeAntChainBlockRequest $request DescribeAntChainBlockRequest
     *
     * @return DescribeAntChainBlockResponse DescribeAntChainBlockResponse
     */
    public function describeAntChainBlock($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAntChainBlockWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAntChainBlockV2Request $request DescribeAntChainBlockV2Request
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAntChainBlockV2Response DescribeAntChainBlockV2Response
     */
    public function describeAntChainBlockV2WithOptions($request, $runtime)
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
            'action'      => 'DescribeAntChainBlockV2',
            'version'     => '2018-12-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAntChainBlockV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAntChainBlockV2Request $request DescribeAntChainBlockV2Request
     *
     * @return DescribeAntChainBlockV2Response DescribeAntChainBlockV2Response
     */
    public function describeAntChainBlockV2($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAntChainBlockV2WithOptions($request, $runtime);
    }

    /**
     * @param DescribeAntChainCertificateApplicationsRequest $request DescribeAntChainCertificateApplicationsRequest
     * @param RuntimeOptions                                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAntChainCertificateApplicationsResponse DescribeAntChainCertificateApplicationsResponse
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
            'version'     => '2018-12-21',
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
     * @param DescribeAntChainCertificateApplicationsRequest $request DescribeAntChainCertificateApplicationsRequest
     *
     * @return DescribeAntChainCertificateApplicationsResponse DescribeAntChainCertificateApplicationsResponse
     */
    public function describeAntChainCertificateApplications($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAntChainCertificateApplicationsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAntChainCertificateApplicationsV2Request $request DescribeAntChainCertificateApplicationsV2Request
     * @param RuntimeOptions                                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAntChainCertificateApplicationsV2Response DescribeAntChainCertificateApplicationsV2Response
     */
    public function describeAntChainCertificateApplicationsV2WithOptions($request, $runtime)
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
            'action'      => 'DescribeAntChainCertificateApplicationsV2',
            'version'     => '2018-12-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAntChainCertificateApplicationsV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAntChainCertificateApplicationsV2Request $request DescribeAntChainCertificateApplicationsV2Request
     *
     * @return DescribeAntChainCertificateApplicationsV2Response DescribeAntChainCertificateApplicationsV2Response
     */
    public function describeAntChainCertificateApplicationsV2($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAntChainCertificateApplicationsV2WithOptions($request, $runtime);
    }

    /**
     * @param DescribeAntChainConsortiumsRequest $request DescribeAntChainConsortiumsRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAntChainConsortiumsResponse DescribeAntChainConsortiumsResponse
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
            'version'     => '2018-12-21',
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
     * @param DescribeAntChainConsortiumsRequest $request DescribeAntChainConsortiumsRequest
     *
     * @return DescribeAntChainConsortiumsResponse DescribeAntChainConsortiumsResponse
     */
    public function describeAntChainConsortiums($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAntChainConsortiumsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAntChainConsortiumsV2Request $request DescribeAntChainConsortiumsV2Request
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAntChainConsortiumsV2Response DescribeAntChainConsortiumsV2Response
     */
    public function describeAntChainConsortiumsV2WithOptions($request, $runtime)
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
            'action'      => 'DescribeAntChainConsortiumsV2',
            'version'     => '2018-12-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAntChainConsortiumsV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAntChainConsortiumsV2Request $request DescribeAntChainConsortiumsV2Request
     *
     * @return DescribeAntChainConsortiumsV2Response DescribeAntChainConsortiumsV2Response
     */
    public function describeAntChainConsortiumsV2($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAntChainConsortiumsV2WithOptions($request, $runtime);
    }

    /**
     * @param DescribeAntChainContractProjectContentTreeRequest $request DescribeAntChainContractProjectContentTreeRequest
     * @param RuntimeOptions                                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAntChainContractProjectContentTreeResponse DescribeAntChainContractProjectContentTreeResponse
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
            'version'     => '2018-12-21',
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
     * @param DescribeAntChainContractProjectContentTreeRequest $request DescribeAntChainContractProjectContentTreeRequest
     *
     * @return DescribeAntChainContractProjectContentTreeResponse DescribeAntChainContractProjectContentTreeResponse
     */
    public function describeAntChainContractProjectContentTree($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAntChainContractProjectContentTreeWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAntChainContractProjectContentTreeV2Request $request DescribeAntChainContractProjectContentTreeV2Request
     * @param RuntimeOptions                                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAntChainContractProjectContentTreeV2Response DescribeAntChainContractProjectContentTreeV2Response
     */
    public function describeAntChainContractProjectContentTreeV2WithOptions($request, $runtime)
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
            'action'      => 'DescribeAntChainContractProjectContentTreeV2',
            'version'     => '2018-12-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAntChainContractProjectContentTreeV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAntChainContractProjectContentTreeV2Request $request DescribeAntChainContractProjectContentTreeV2Request
     *
     * @return DescribeAntChainContractProjectContentTreeV2Response DescribeAntChainContractProjectContentTreeV2Response
     */
    public function describeAntChainContractProjectContentTreeV2($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAntChainContractProjectContentTreeV2WithOptions($request, $runtime);
    }

    /**
     * @param DescribeAntChainContractProjectsRequest $request DescribeAntChainContractProjectsRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAntChainContractProjectsResponse DescribeAntChainContractProjectsResponse
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
            'version'     => '2018-12-21',
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
     * @param DescribeAntChainContractProjectsRequest $request DescribeAntChainContractProjectsRequest
     *
     * @return DescribeAntChainContractProjectsResponse DescribeAntChainContractProjectsResponse
     */
    public function describeAntChainContractProjects($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAntChainContractProjectsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAntChainContractProjectsV2Request $request DescribeAntChainContractProjectsV2Request
     * @param RuntimeOptions                            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAntChainContractProjectsV2Response DescribeAntChainContractProjectsV2Response
     */
    public function describeAntChainContractProjectsV2WithOptions($request, $runtime)
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
            'action'      => 'DescribeAntChainContractProjectsV2',
            'version'     => '2018-12-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAntChainContractProjectsV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAntChainContractProjectsV2Request $request DescribeAntChainContractProjectsV2Request
     *
     * @return DescribeAntChainContractProjectsV2Response DescribeAntChainContractProjectsV2Response
     */
    public function describeAntChainContractProjectsV2($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAntChainContractProjectsV2WithOptions($request, $runtime);
    }

    /**
     * @param DescribeAntChainDownloadPathsRequest $request DescribeAntChainDownloadPathsRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAntChainDownloadPathsResponse DescribeAntChainDownloadPathsResponse
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
            'version'     => '2018-12-21',
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
     * @param DescribeAntChainDownloadPathsRequest $request DescribeAntChainDownloadPathsRequest
     *
     * @return DescribeAntChainDownloadPathsResponse DescribeAntChainDownloadPathsResponse
     */
    public function describeAntChainDownloadPaths($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAntChainDownloadPathsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAntChainDownloadPathsV2Request $request DescribeAntChainDownloadPathsV2Request
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAntChainDownloadPathsV2Response DescribeAntChainDownloadPathsV2Response
     */
    public function describeAntChainDownloadPathsV2WithOptions($request, $runtime)
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
            'action'      => 'DescribeAntChainDownloadPathsV2',
            'version'     => '2018-12-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAntChainDownloadPathsV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAntChainDownloadPathsV2Request $request DescribeAntChainDownloadPathsV2Request
     *
     * @return DescribeAntChainDownloadPathsV2Response DescribeAntChainDownloadPathsV2Response
     */
    public function describeAntChainDownloadPathsV2($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAntChainDownloadPathsV2WithOptions($request, $runtime);
    }

    /**
     * @param DescribeAntChainInformationRequest $request DescribeAntChainInformationRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAntChainInformationResponse DescribeAntChainInformationResponse
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
            'version'     => '2018-12-21',
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
     * @param DescribeAntChainInformationRequest $request DescribeAntChainInformationRequest
     *
     * @return DescribeAntChainInformationResponse DescribeAntChainInformationResponse
     */
    public function describeAntChainInformation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAntChainInformationWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAntChainInformationV2Request $request DescribeAntChainInformationV2Request
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAntChainInformationV2Response DescribeAntChainInformationV2Response
     */
    public function describeAntChainInformationV2WithOptions($request, $runtime)
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
            'action'      => 'DescribeAntChainInformationV2',
            'version'     => '2018-12-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAntChainInformationV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAntChainInformationV2Request $request DescribeAntChainInformationV2Request
     *
     * @return DescribeAntChainInformationV2Response DescribeAntChainInformationV2Response
     */
    public function describeAntChainInformationV2($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAntChainInformationV2WithOptions($request, $runtime);
    }

    /**
     * @param DescribeAntChainLatestBlocksRequest $request DescribeAntChainLatestBlocksRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAntChainLatestBlocksResponse DescribeAntChainLatestBlocksResponse
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
            'version'     => '2018-12-21',
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
     * @param DescribeAntChainLatestBlocksRequest $request DescribeAntChainLatestBlocksRequest
     *
     * @return DescribeAntChainLatestBlocksResponse DescribeAntChainLatestBlocksResponse
     */
    public function describeAntChainLatestBlocks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAntChainLatestBlocksWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAntChainLatestBlocksV2Request $request DescribeAntChainLatestBlocksV2Request
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAntChainLatestBlocksV2Response DescribeAntChainLatestBlocksV2Response
     */
    public function describeAntChainLatestBlocksV2WithOptions($request, $runtime)
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
            'action'      => 'DescribeAntChainLatestBlocksV2',
            'version'     => '2018-12-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAntChainLatestBlocksV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAntChainLatestBlocksV2Request $request DescribeAntChainLatestBlocksV2Request
     *
     * @return DescribeAntChainLatestBlocksV2Response DescribeAntChainLatestBlocksV2Response
     */
    public function describeAntChainLatestBlocksV2($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAntChainLatestBlocksV2WithOptions($request, $runtime);
    }

    /**
     * @param DescribeAntChainLatestTransactionDigestsRequest $request DescribeAntChainLatestTransactionDigestsRequest
     * @param RuntimeOptions                                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAntChainLatestTransactionDigestsResponse DescribeAntChainLatestTransactionDigestsResponse
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
            'version'     => '2018-12-21',
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
     * @param DescribeAntChainLatestTransactionDigestsRequest $request DescribeAntChainLatestTransactionDigestsRequest
     *
     * @return DescribeAntChainLatestTransactionDigestsResponse DescribeAntChainLatestTransactionDigestsResponse
     */
    public function describeAntChainLatestTransactionDigests($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAntChainLatestTransactionDigestsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAntChainLatestTransactionDigestsV2Request $request DescribeAntChainLatestTransactionDigestsV2Request
     * @param RuntimeOptions                                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAntChainLatestTransactionDigestsV2Response DescribeAntChainLatestTransactionDigestsV2Response
     */
    public function describeAntChainLatestTransactionDigestsV2WithOptions($request, $runtime)
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
            'action'      => 'DescribeAntChainLatestTransactionDigestsV2',
            'version'     => '2018-12-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAntChainLatestTransactionDigestsV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAntChainLatestTransactionDigestsV2Request $request DescribeAntChainLatestTransactionDigestsV2Request
     *
     * @return DescribeAntChainLatestTransactionDigestsV2Response DescribeAntChainLatestTransactionDigestsV2Response
     */
    public function describeAntChainLatestTransactionDigestsV2($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAntChainLatestTransactionDigestsV2WithOptions($request, $runtime);
    }

    /**
     * @param DescribeAntChainMembersRequest $request DescribeAntChainMembersRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAntChainMembersResponse DescribeAntChainMembersResponse
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
            'version'     => '2018-12-21',
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
     * @param DescribeAntChainMembersRequest $request DescribeAntChainMembersRequest
     *
     * @return DescribeAntChainMembersResponse DescribeAntChainMembersResponse
     */
    public function describeAntChainMembers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAntChainMembersWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAntChainMembersV2Request $request DescribeAntChainMembersV2Request
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAntChainMembersV2Response DescribeAntChainMembersV2Response
     */
    public function describeAntChainMembersV2WithOptions($request, $runtime)
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
            'action'      => 'DescribeAntChainMembersV2',
            'version'     => '2018-12-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAntChainMembersV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAntChainMembersV2Request $request DescribeAntChainMembersV2Request
     *
     * @return DescribeAntChainMembersV2Response DescribeAntChainMembersV2Response
     */
    public function describeAntChainMembersV2($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAntChainMembersV2WithOptions($request, $runtime);
    }

    /**
     * @param DescribeAntChainMiniAppBrowserQRCodeAccessLogRequest $request DescribeAntChainMiniAppBrowserQRCodeAccessLogRequest
     * @param RuntimeOptions                                       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAntChainMiniAppBrowserQRCodeAccessLogResponse DescribeAntChainMiniAppBrowserQRCodeAccessLogResponse
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
            'version'     => '2018-12-21',
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
     * @param DescribeAntChainMiniAppBrowserQRCodeAccessLogRequest $request DescribeAntChainMiniAppBrowserQRCodeAccessLogRequest
     *
     * @return DescribeAntChainMiniAppBrowserQRCodeAccessLogResponse DescribeAntChainMiniAppBrowserQRCodeAccessLogResponse
     */
    public function describeAntChainMiniAppBrowserQRCodeAccessLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAntChainMiniAppBrowserQRCodeAccessLogWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAntChainMiniAppBrowserQRCodeAccessLogV2Request $request DescribeAntChainMiniAppBrowserQRCodeAccessLogV2Request
     * @param RuntimeOptions                                         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAntChainMiniAppBrowserQRCodeAccessLogV2Response DescribeAntChainMiniAppBrowserQRCodeAccessLogV2Response
     */
    public function describeAntChainMiniAppBrowserQRCodeAccessLogV2WithOptions($request, $runtime)
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
            'action'      => 'DescribeAntChainMiniAppBrowserQRCodeAccessLogV2',
            'version'     => '2018-12-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAntChainMiniAppBrowserQRCodeAccessLogV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAntChainMiniAppBrowserQRCodeAccessLogV2Request $request DescribeAntChainMiniAppBrowserQRCodeAccessLogV2Request
     *
     * @return DescribeAntChainMiniAppBrowserQRCodeAccessLogV2Response DescribeAntChainMiniAppBrowserQRCodeAccessLogV2Response
     */
    public function describeAntChainMiniAppBrowserQRCodeAccessLogV2($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAntChainMiniAppBrowserQRCodeAccessLogV2WithOptions($request, $runtime);
    }

    /**
     * @param DescribeAntChainMiniAppBrowserQRCodeAuthorizedUsersRequest $request DescribeAntChainMiniAppBrowserQRCodeAuthorizedUsersRequest
     * @param RuntimeOptions                                             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAntChainMiniAppBrowserQRCodeAuthorizedUsersResponse DescribeAntChainMiniAppBrowserQRCodeAuthorizedUsersResponse
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
            'version'     => '2018-12-21',
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
     * @param DescribeAntChainMiniAppBrowserQRCodeAuthorizedUsersRequest $request DescribeAntChainMiniAppBrowserQRCodeAuthorizedUsersRequest
     *
     * @return DescribeAntChainMiniAppBrowserQRCodeAuthorizedUsersResponse DescribeAntChainMiniAppBrowserQRCodeAuthorizedUsersResponse
     */
    public function describeAntChainMiniAppBrowserQRCodeAuthorizedUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAntChainMiniAppBrowserQRCodeAuthorizedUsersWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAntChainMiniAppBrowserQRCodeAuthorizedUsersV2Request $request DescribeAntChainMiniAppBrowserQRCodeAuthorizedUsersV2Request
     * @param RuntimeOptions                                               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAntChainMiniAppBrowserQRCodeAuthorizedUsersV2Response DescribeAntChainMiniAppBrowserQRCodeAuthorizedUsersV2Response
     */
    public function describeAntChainMiniAppBrowserQRCodeAuthorizedUsersV2WithOptions($request, $runtime)
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
            'action'      => 'DescribeAntChainMiniAppBrowserQRCodeAuthorizedUsersV2',
            'version'     => '2018-12-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAntChainMiniAppBrowserQRCodeAuthorizedUsersV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAntChainMiniAppBrowserQRCodeAuthorizedUsersV2Request $request DescribeAntChainMiniAppBrowserQRCodeAuthorizedUsersV2Request
     *
     * @return DescribeAntChainMiniAppBrowserQRCodeAuthorizedUsersV2Response DescribeAntChainMiniAppBrowserQRCodeAuthorizedUsersV2Response
     */
    public function describeAntChainMiniAppBrowserQRCodeAuthorizedUsersV2($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAntChainMiniAppBrowserQRCodeAuthorizedUsersV2WithOptions($request, $runtime);
    }

    /**
     * @param DescribeAntChainMiniAppBrowserTransactionQRCodeRequest $request DescribeAntChainMiniAppBrowserTransactionQRCodeRequest
     * @param RuntimeOptions                                         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAntChainMiniAppBrowserTransactionQRCodeResponse DescribeAntChainMiniAppBrowserTransactionQRCodeResponse
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
            'version'     => '2018-12-21',
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
     * @param DescribeAntChainMiniAppBrowserTransactionQRCodeRequest $request DescribeAntChainMiniAppBrowserTransactionQRCodeRequest
     *
     * @return DescribeAntChainMiniAppBrowserTransactionQRCodeResponse DescribeAntChainMiniAppBrowserTransactionQRCodeResponse
     */
    public function describeAntChainMiniAppBrowserTransactionQRCode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAntChainMiniAppBrowserTransactionQRCodeWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAntChainMiniAppBrowserTransactionQRCodeNewRequest $request DescribeAntChainMiniAppBrowserTransactionQRCodeNewRequest
     * @param RuntimeOptions                                            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAntChainMiniAppBrowserTransactionQRCodeNewResponse DescribeAntChainMiniAppBrowserTransactionQRCodeNewResponse
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
            'version'     => '2018-12-21',
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
     * @param DescribeAntChainMiniAppBrowserTransactionQRCodeNewRequest $request DescribeAntChainMiniAppBrowserTransactionQRCodeNewRequest
     *
     * @return DescribeAntChainMiniAppBrowserTransactionQRCodeNewResponse DescribeAntChainMiniAppBrowserTransactionQRCodeNewResponse
     */
    public function describeAntChainMiniAppBrowserTransactionQRCodeNew($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAntChainMiniAppBrowserTransactionQRCodeNewWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAntChainNodesRequest $request DescribeAntChainNodesRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAntChainNodesResponse DescribeAntChainNodesResponse
     */
    public function describeAntChainNodesWithOptions($request, $runtime)
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
            'action'      => 'DescribeAntChainNodes',
            'version'     => '2018-12-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAntChainNodesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAntChainNodesRequest $request DescribeAntChainNodesRequest
     *
     * @return DescribeAntChainNodesResponse DescribeAntChainNodesResponse
     */
    public function describeAntChainNodes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAntChainNodesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAntChainNodesV2Request $request DescribeAntChainNodesV2Request
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAntChainNodesV2Response DescribeAntChainNodesV2Response
     */
    public function describeAntChainNodesV2WithOptions($request, $runtime)
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
            'action'      => 'DescribeAntChainNodesV2',
            'version'     => '2018-12-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAntChainNodesV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAntChainNodesV2Request $request DescribeAntChainNodesV2Request
     *
     * @return DescribeAntChainNodesV2Response DescribeAntChainNodesV2Response
     */
    public function describeAntChainNodesV2($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAntChainNodesV2WithOptions($request, $runtime);
    }

    /**
     * @param DescribeAntChainQRCodeAuthorizationRequest $request DescribeAntChainQRCodeAuthorizationRequest
     * @param RuntimeOptions                             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAntChainQRCodeAuthorizationResponse DescribeAntChainQRCodeAuthorizationResponse
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
            'version'     => '2018-12-21',
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
     * @param DescribeAntChainQRCodeAuthorizationRequest $request DescribeAntChainQRCodeAuthorizationRequest
     *
     * @return DescribeAntChainQRCodeAuthorizationResponse DescribeAntChainQRCodeAuthorizationResponse
     */
    public function describeAntChainQRCodeAuthorization($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAntChainQRCodeAuthorizationWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAntChainQRCodeAuthorizationV2Request $request DescribeAntChainQRCodeAuthorizationV2Request
     * @param RuntimeOptions                               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAntChainQRCodeAuthorizationV2Response DescribeAntChainQRCodeAuthorizationV2Response
     */
    public function describeAntChainQRCodeAuthorizationV2WithOptions($request, $runtime)
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
            'action'      => 'DescribeAntChainQRCodeAuthorizationV2',
            'version'     => '2018-12-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAntChainQRCodeAuthorizationV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAntChainQRCodeAuthorizationV2Request $request DescribeAntChainQRCodeAuthorizationV2Request
     *
     * @return DescribeAntChainQRCodeAuthorizationV2Response DescribeAntChainQRCodeAuthorizationV2Response
     */
    public function describeAntChainQRCodeAuthorizationV2($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAntChainQRCodeAuthorizationV2WithOptions($request, $runtime);
    }

    /**
     * @param DescribeAntChainTransactionRequest $request DescribeAntChainTransactionRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAntChainTransactionResponse DescribeAntChainTransactionResponse
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
            'version'     => '2018-12-21',
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
     * @param DescribeAntChainTransactionRequest $request DescribeAntChainTransactionRequest
     *
     * @return DescribeAntChainTransactionResponse DescribeAntChainTransactionResponse
     */
    public function describeAntChainTransaction($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAntChainTransactionWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAntChainTransactionReceiptRequest $request DescribeAntChainTransactionReceiptRequest
     * @param RuntimeOptions                            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAntChainTransactionReceiptResponse DescribeAntChainTransactionReceiptResponse
     */
    public function describeAntChainTransactionReceiptWithOptions($request, $runtime)
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
            'action'      => 'DescribeAntChainTransactionReceipt',
            'version'     => '2018-12-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAntChainTransactionReceiptResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAntChainTransactionReceiptRequest $request DescribeAntChainTransactionReceiptRequest
     *
     * @return DescribeAntChainTransactionReceiptResponse DescribeAntChainTransactionReceiptResponse
     */
    public function describeAntChainTransactionReceipt($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAntChainTransactionReceiptWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAntChainTransactionReceiptV2Request $request DescribeAntChainTransactionReceiptV2Request
     * @param RuntimeOptions                              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAntChainTransactionReceiptV2Response DescribeAntChainTransactionReceiptV2Response
     */
    public function describeAntChainTransactionReceiptV2WithOptions($request, $runtime)
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
            'action'      => 'DescribeAntChainTransactionReceiptV2',
            'version'     => '2018-12-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAntChainTransactionReceiptV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAntChainTransactionReceiptV2Request $request DescribeAntChainTransactionReceiptV2Request
     *
     * @return DescribeAntChainTransactionReceiptV2Response DescribeAntChainTransactionReceiptV2Response
     */
    public function describeAntChainTransactionReceiptV2($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAntChainTransactionReceiptV2WithOptions($request, $runtime);
    }

    /**
     * @param DescribeAntChainTransactionStatisticsRequest $request DescribeAntChainTransactionStatisticsRequest
     * @param RuntimeOptions                               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAntChainTransactionStatisticsResponse DescribeAntChainTransactionStatisticsResponse
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
            'version'     => '2018-12-21',
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
     * @param DescribeAntChainTransactionStatisticsRequest $request DescribeAntChainTransactionStatisticsRequest
     *
     * @return DescribeAntChainTransactionStatisticsResponse DescribeAntChainTransactionStatisticsResponse
     */
    public function describeAntChainTransactionStatistics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAntChainTransactionStatisticsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAntChainTransactionStatisticsV2Request $request DescribeAntChainTransactionStatisticsV2Request
     * @param RuntimeOptions                                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAntChainTransactionStatisticsV2Response DescribeAntChainTransactionStatisticsV2Response
     */
    public function describeAntChainTransactionStatisticsV2WithOptions($request, $runtime)
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
            'action'      => 'DescribeAntChainTransactionStatisticsV2',
            'version'     => '2018-12-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAntChainTransactionStatisticsV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAntChainTransactionStatisticsV2Request $request DescribeAntChainTransactionStatisticsV2Request
     *
     * @return DescribeAntChainTransactionStatisticsV2Response DescribeAntChainTransactionStatisticsV2Response
     */
    public function describeAntChainTransactionStatisticsV2($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAntChainTransactionStatisticsV2WithOptions($request, $runtime);
    }

    /**
     * @param DescribeAntChainTransactionV2Request $request DescribeAntChainTransactionV2Request
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAntChainTransactionV2Response DescribeAntChainTransactionV2Response
     */
    public function describeAntChainTransactionV2WithOptions($request, $runtime)
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
            'action'      => 'DescribeAntChainTransactionV2',
            'version'     => '2018-12-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAntChainTransactionV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAntChainTransactionV2Request $request DescribeAntChainTransactionV2Request
     *
     * @return DescribeAntChainTransactionV2Response DescribeAntChainTransactionV2Response
     */
    public function describeAntChainTransactionV2($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAntChainTransactionV2WithOptions($request, $runtime);
    }

    /**
     * @param DescribeAntChainsRequest $request DescribeAntChainsRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAntChainsResponse DescribeAntChainsResponse
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
            'version'     => '2018-12-21',
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
     * @param DescribeAntChainsRequest $request DescribeAntChainsRequest
     *
     * @return DescribeAntChainsResponse DescribeAntChainsResponse
     */
    public function describeAntChains($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAntChainsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAntChainsV2Request $request DescribeAntChainsV2Request
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAntChainsV2Response DescribeAntChainsV2Response
     */
    public function describeAntChainsV2WithOptions($request, $runtime)
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
            'action'      => 'DescribeAntChainsV2',
            'version'     => '2018-12-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAntChainsV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAntChainsV2Request $request DescribeAntChainsV2Request
     *
     * @return DescribeAntChainsV2Response DescribeAntChainsV2Response
     */
    public function describeAntChainsV2($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAntChainsV2WithOptions($request, $runtime);
    }

    /**
     * @param DescribeEthereumDeletableRequest $request DescribeEthereumDeletableRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeEthereumDeletableResponse DescribeEthereumDeletableResponse
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
            'version'     => '2018-12-21',
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
     * @param DescribeEthereumDeletableRequest $request DescribeEthereumDeletableRequest
     *
     * @return DescribeEthereumDeletableResponse DescribeEthereumDeletableResponse
     */
    public function describeEthereumDeletable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEthereumDeletableWithOptions($request, $runtime);
    }

    /**
     * @param DescribeFabricCandidateOrganizationsRequest $request DescribeFabricCandidateOrganizationsRequest
     * @param RuntimeOptions                              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeFabricCandidateOrganizationsResponse DescribeFabricCandidateOrganizationsResponse
     */
    public function describeFabricCandidateOrganizationsWithOptions($request, $runtime)
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
            'action'      => 'DescribeFabricCandidateOrganizations',
            'version'     => '2018-12-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeFabricCandidateOrganizationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeFabricCandidateOrganizationsRequest $request DescribeFabricCandidateOrganizationsRequest
     *
     * @return DescribeFabricCandidateOrganizationsResponse DescribeFabricCandidateOrganizationsResponse
     */
    public function describeFabricCandidateOrganizations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFabricCandidateOrganizationsWithOptions($request, $runtime);
    }

    /**
     * @summary DescribeFabricChaincodeDefinitionTask
     *  *
     * @param DescribeFabricChaincodeDefinitionTaskRequest $request DescribeFabricChaincodeDefinitionTaskRequest
     * @param RuntimeOptions                               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeFabricChaincodeDefinitionTaskResponse DescribeFabricChaincodeDefinitionTaskResponse
     */
    public function describeFabricChaincodeDefinitionTaskWithOptions($request, $runtime)
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
            'action'      => 'DescribeFabricChaincodeDefinitionTask',
            'version'     => '2018-12-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeFabricChaincodeDefinitionTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary DescribeFabricChaincodeDefinitionTask
     *  *
     * @param DescribeFabricChaincodeDefinitionTaskRequest $request DescribeFabricChaincodeDefinitionTaskRequest
     *
     * @return DescribeFabricChaincodeDefinitionTaskResponse DescribeFabricChaincodeDefinitionTaskResponse
     */
    public function describeFabricChaincodeDefinitionTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFabricChaincodeDefinitionTaskWithOptions($request, $runtime);
    }

    /**
     * @param DescribeFabricChaincodeUploadPolicyRequest $request DescribeFabricChaincodeUploadPolicyRequest
     * @param RuntimeOptions                             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeFabricChaincodeUploadPolicyResponse DescribeFabricChaincodeUploadPolicyResponse
     */
    public function describeFabricChaincodeUploadPolicyWithOptions($request, $runtime)
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
            'action'      => 'DescribeFabricChaincodeUploadPolicy',
            'version'     => '2018-12-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeFabricChaincodeUploadPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeFabricChaincodeUploadPolicyRequest $request DescribeFabricChaincodeUploadPolicyRequest
     *
     * @return DescribeFabricChaincodeUploadPolicyResponse DescribeFabricChaincodeUploadPolicyResponse
     */
    public function describeFabricChaincodeUploadPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFabricChaincodeUploadPolicyWithOptions($request, $runtime);
    }

    /**
     * @param DescribeFabricChannelMembersRequest $request DescribeFabricChannelMembersRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeFabricChannelMembersResponse DescribeFabricChannelMembersResponse
     */
    public function describeFabricChannelMembersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->channelId)) {
            $query['ChannelId'] = $request->channelId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeFabricChannelMembers',
            'version'     => '2018-12-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeFabricChannelMembersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeFabricChannelMembersRequest $request DescribeFabricChannelMembersRequest
     *
     * @return DescribeFabricChannelMembersResponse DescribeFabricChannelMembersResponse
     */
    public function describeFabricChannelMembers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFabricChannelMembersWithOptions($request, $runtime);
    }

    /**
     * @param DescribeFabricConsortiumAdminStatusRequest $request DescribeFabricConsortiumAdminStatusRequest
     * @param RuntimeOptions                             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeFabricConsortiumAdminStatusResponse DescribeFabricConsortiumAdminStatusResponse
     */
    public function describeFabricConsortiumAdminStatusWithOptions($request, $runtime)
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
            'action'      => 'DescribeFabricConsortiumAdminStatus',
            'version'     => '2018-12-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeFabricConsortiumAdminStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeFabricConsortiumAdminStatusRequest $request DescribeFabricConsortiumAdminStatusRequest
     *
     * @return DescribeFabricConsortiumAdminStatusResponse DescribeFabricConsortiumAdminStatusResponse
     */
    public function describeFabricConsortiumAdminStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFabricConsortiumAdminStatusWithOptions($request, $runtime);
    }

    /**
     * @param DescribeFabricConsortiumChaincodesRequest $request DescribeFabricConsortiumChaincodesRequest
     * @param RuntimeOptions                            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeFabricConsortiumChaincodesResponse DescribeFabricConsortiumChaincodesResponse
     */
    public function describeFabricConsortiumChaincodesWithOptions($request, $runtime)
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
            'action'      => 'DescribeFabricConsortiumChaincodes',
            'version'     => '2018-12-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeFabricConsortiumChaincodesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeFabricConsortiumChaincodesRequest $request DescribeFabricConsortiumChaincodesRequest
     *
     * @return DescribeFabricConsortiumChaincodesResponse DescribeFabricConsortiumChaincodesResponse
     */
    public function describeFabricConsortiumChaincodes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFabricConsortiumChaincodesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeFabricConsortiumChannelsRequest $request DescribeFabricConsortiumChannelsRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeFabricConsortiumChannelsResponse DescribeFabricConsortiumChannelsResponse
     */
    public function describeFabricConsortiumChannelsWithOptions($request, $runtime)
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
            'action'      => 'DescribeFabricConsortiumChannels',
            'version'     => '2018-12-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeFabricConsortiumChannelsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeFabricConsortiumChannelsRequest $request DescribeFabricConsortiumChannelsRequest
     *
     * @return DescribeFabricConsortiumChannelsResponse DescribeFabricConsortiumChannelsResponse
     */
    public function describeFabricConsortiumChannels($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFabricConsortiumChannelsWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeFabricConsortiumConfigResponse DescribeFabricConsortiumConfigResponse
     */
    public function describeFabricConsortiumConfigWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'DescribeFabricConsortiumConfig',
            'version'     => '2018-12-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeFabricConsortiumConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return DescribeFabricConsortiumConfigResponse DescribeFabricConsortiumConfigResponse
     */
    public function describeFabricConsortiumConfig()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFabricConsortiumConfigWithOptions($runtime);
    }

    /**
     * @param DescribeFabricConsortiumDeletableRequest $request DescribeFabricConsortiumDeletableRequest
     * @param RuntimeOptions                           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeFabricConsortiumDeletableResponse DescribeFabricConsortiumDeletableResponse
     */
    public function describeFabricConsortiumDeletableWithOptions($request, $runtime)
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
            'action'      => 'DescribeFabricConsortiumDeletable',
            'version'     => '2018-12-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeFabricConsortiumDeletableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeFabricConsortiumDeletableRequest $request DescribeFabricConsortiumDeletableRequest
     *
     * @return DescribeFabricConsortiumDeletableResponse DescribeFabricConsortiumDeletableResponse
     */
    public function describeFabricConsortiumDeletable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFabricConsortiumDeletableWithOptions($request, $runtime);
    }

    /**
     * @param DescribeFabricConsortiumMemberApprovalRequest $request DescribeFabricConsortiumMemberApprovalRequest
     * @param RuntimeOptions                                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeFabricConsortiumMemberApprovalResponse DescribeFabricConsortiumMemberApprovalResponse
     */
    public function describeFabricConsortiumMemberApprovalWithOptions($request, $runtime)
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
            'action'      => 'DescribeFabricConsortiumMemberApproval',
            'version'     => '2018-12-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeFabricConsortiumMemberApprovalResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeFabricConsortiumMemberApprovalRequest $request DescribeFabricConsortiumMemberApprovalRequest
     *
     * @return DescribeFabricConsortiumMemberApprovalResponse DescribeFabricConsortiumMemberApprovalResponse
     */
    public function describeFabricConsortiumMemberApproval($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFabricConsortiumMemberApprovalWithOptions($request, $runtime);
    }

    /**
     * @param DescribeFabricConsortiumMembersRequest $request DescribeFabricConsortiumMembersRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeFabricConsortiumMembersResponse DescribeFabricConsortiumMembersResponse
     */
    public function describeFabricConsortiumMembersWithOptions($request, $runtime)
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
            'action'      => 'DescribeFabricConsortiumMembers',
            'version'     => '2018-12-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeFabricConsortiumMembersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeFabricConsortiumMembersRequest $request DescribeFabricConsortiumMembersRequest
     *
     * @return DescribeFabricConsortiumMembersResponse DescribeFabricConsortiumMembersResponse
     */
    public function describeFabricConsortiumMembers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFabricConsortiumMembersWithOptions($request, $runtime);
    }

    /**
     * @param DescribeFabricConsortiumOrderersRequest $request DescribeFabricConsortiumOrderersRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeFabricConsortiumOrderersResponse DescribeFabricConsortiumOrderersResponse
     */
    public function describeFabricConsortiumOrderersWithOptions($request, $runtime)
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
            'action'      => 'DescribeFabricConsortiumOrderers',
            'version'     => '2018-12-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeFabricConsortiumOrderersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeFabricConsortiumOrderersRequest $request DescribeFabricConsortiumOrderersRequest
     *
     * @return DescribeFabricConsortiumOrderersResponse DescribeFabricConsortiumOrderersResponse
     */
    public function describeFabricConsortiumOrderers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFabricConsortiumOrderersWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeFabricConsortiumSpecsResponse DescribeFabricConsortiumSpecsResponse
     */
    public function describeFabricConsortiumSpecsWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'DescribeFabricConsortiumSpecs',
            'version'     => '2018-12-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeFabricConsortiumSpecsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return DescribeFabricConsortiumSpecsResponse DescribeFabricConsortiumSpecsResponse
     */
    public function describeFabricConsortiumSpecs()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFabricConsortiumSpecsWithOptions($runtime);
    }

    /**
     * @param DescribeFabricConsortiumsRequest $request DescribeFabricConsortiumsRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeFabricConsortiumsResponse DescribeFabricConsortiumsResponse
     */
    public function describeFabricConsortiumsWithOptions($request, $runtime)
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
            'action'      => 'DescribeFabricConsortiums',
            'version'     => '2018-12-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeFabricConsortiumsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeFabricConsortiumsRequest $request DescribeFabricConsortiumsRequest
     *
     * @return DescribeFabricConsortiumsResponse DescribeFabricConsortiumsResponse
     */
    public function describeFabricConsortiums($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFabricConsortiumsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeFabricExplorerRequest $request DescribeFabricExplorerRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeFabricExplorerResponse DescribeFabricExplorerResponse
     */
    public function describeFabricExplorerWithOptions($request, $runtime)
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
            'action'      => 'DescribeFabricExplorer',
            'version'     => '2018-12-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeFabricExplorerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeFabricExplorerRequest $request DescribeFabricExplorerRequest
     *
     * @return DescribeFabricExplorerResponse DescribeFabricExplorerResponse
     */
    public function describeFabricExplorer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFabricExplorerWithOptions($request, $runtime);
    }

    /**
     * @param DescribeFabricInvitationCodeRequest $request DescribeFabricInvitationCodeRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeFabricInvitationCodeResponse DescribeFabricInvitationCodeResponse
     */
    public function describeFabricInvitationCodeWithOptions($request, $runtime)
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
            'action'      => 'DescribeFabricInvitationCode',
            'version'     => '2018-12-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeFabricInvitationCodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeFabricInvitationCodeRequest $request DescribeFabricInvitationCodeRequest
     *
     * @return DescribeFabricInvitationCodeResponse DescribeFabricInvitationCodeResponse
     */
    public function describeFabricInvitationCode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFabricInvitationCodeWithOptions($request, $runtime);
    }

    /**
     * @param DescribeFabricInviterRequest $request DescribeFabricInviterRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeFabricInviterResponse DescribeFabricInviterResponse
     */
    public function describeFabricInviterWithOptions($request, $runtime)
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
            'action'      => 'DescribeFabricInviter',
            'version'     => '2018-12-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeFabricInviterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeFabricInviterRequest $request DescribeFabricInviterRequest
     *
     * @return DescribeFabricInviterResponse DescribeFabricInviterResponse
     */
    public function describeFabricInviter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFabricInviterWithOptions($request, $runtime);
    }

    /**
     * @param DescribeFabricOrdererLogsRequest $request DescribeFabricOrdererLogsRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeFabricOrdererLogsResponse DescribeFabricOrdererLogsResponse
     */
    public function describeFabricOrdererLogsWithOptions($request, $runtime)
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
            'action'      => 'DescribeFabricOrdererLogs',
            'version'     => '2018-12-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeFabricOrdererLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeFabricOrdererLogsRequest $request DescribeFabricOrdererLogsRequest
     *
     * @return DescribeFabricOrdererLogsResponse DescribeFabricOrdererLogsResponse
     */
    public function describeFabricOrdererLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFabricOrdererLogsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeFabricOrganizationRequest $request DescribeFabricOrganizationRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeFabricOrganizationResponse DescribeFabricOrganizationResponse
     */
    public function describeFabricOrganizationWithOptions($request, $runtime)
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
            'action'      => 'DescribeFabricOrganization',
            'version'     => '2018-12-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeFabricOrganizationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeFabricOrganizationRequest $request DescribeFabricOrganizationRequest
     *
     * @return DescribeFabricOrganizationResponse DescribeFabricOrganizationResponse
     */
    public function describeFabricOrganization($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFabricOrganizationWithOptions($request, $runtime);
    }

    /**
     * @summary DescribeFabricOrganizationChaincodePackage
     *  *
     * @param DescribeFabricOrganizationChaincodePackageRequest $request DescribeFabricOrganizationChaincodePackageRequest
     * @param RuntimeOptions                                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeFabricOrganizationChaincodePackageResponse DescribeFabricOrganizationChaincodePackageResponse
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
            'version'     => '2018-12-21',
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
     * @summary DescribeFabricOrganizationChaincodePackage
     *  *
     * @param DescribeFabricOrganizationChaincodePackageRequest $request DescribeFabricOrganizationChaincodePackageRequest
     *
     * @return DescribeFabricOrganizationChaincodePackageResponse DescribeFabricOrganizationChaincodePackageResponse
     */
    public function describeFabricOrganizationChaincodePackage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFabricOrganizationChaincodePackageWithOptions($request, $runtime);
    }

    /**
     * @param DescribeFabricOrganizationChaincodesRequest $request DescribeFabricOrganizationChaincodesRequest
     * @param RuntimeOptions                              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeFabricOrganizationChaincodesResponse DescribeFabricOrganizationChaincodesResponse
     */
    public function describeFabricOrganizationChaincodesWithOptions($request, $runtime)
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
            'action'      => 'DescribeFabricOrganizationChaincodes',
            'version'     => '2018-12-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeFabricOrganizationChaincodesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeFabricOrganizationChaincodesRequest $request DescribeFabricOrganizationChaincodesRequest
     *
     * @return DescribeFabricOrganizationChaincodesResponse DescribeFabricOrganizationChaincodesResponse
     */
    public function describeFabricOrganizationChaincodes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFabricOrganizationChaincodesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeFabricOrganizationChannelsRequest $request DescribeFabricOrganizationChannelsRequest
     * @param RuntimeOptions                            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeFabricOrganizationChannelsResponse DescribeFabricOrganizationChannelsResponse
     */
    public function describeFabricOrganizationChannelsWithOptions($request, $runtime)
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
            'action'      => 'DescribeFabricOrganizationChannels',
            'version'     => '2018-12-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeFabricOrganizationChannelsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeFabricOrganizationChannelsRequest $request DescribeFabricOrganizationChannelsRequest
     *
     * @return DescribeFabricOrganizationChannelsResponse DescribeFabricOrganizationChannelsResponse
     */
    public function describeFabricOrganizationChannels($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFabricOrganizationChannelsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeFabricOrganizationDeletableRequest $request DescribeFabricOrganizationDeletableRequest
     * @param RuntimeOptions                             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeFabricOrganizationDeletableResponse DescribeFabricOrganizationDeletableResponse
     */
    public function describeFabricOrganizationDeletableWithOptions($request, $runtime)
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
            'action'      => 'DescribeFabricOrganizationDeletable',
            'version'     => '2018-12-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeFabricOrganizationDeletableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeFabricOrganizationDeletableRequest $request DescribeFabricOrganizationDeletableRequest
     *
     * @return DescribeFabricOrganizationDeletableResponse DescribeFabricOrganizationDeletableResponse
     */
    public function describeFabricOrganizationDeletable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFabricOrganizationDeletableWithOptions($request, $runtime);
    }

    /**
     * @param DescribeFabricOrganizationMembersRequest $request DescribeFabricOrganizationMembersRequest
     * @param RuntimeOptions                           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeFabricOrganizationMembersResponse DescribeFabricOrganizationMembersResponse
     */
    public function describeFabricOrganizationMembersWithOptions($request, $runtime)
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
            'action'      => 'DescribeFabricOrganizationMembers',
            'version'     => '2018-12-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeFabricOrganizationMembersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeFabricOrganizationMembersRequest $request DescribeFabricOrganizationMembersRequest
     *
     * @return DescribeFabricOrganizationMembersResponse DescribeFabricOrganizationMembersResponse
     */
    public function describeFabricOrganizationMembers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFabricOrganizationMembersWithOptions($request, $runtime);
    }

    /**
     * @param DescribeFabricOrganizationPeersRequest $request DescribeFabricOrganizationPeersRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeFabricOrganizationPeersResponse DescribeFabricOrganizationPeersResponse
     */
    public function describeFabricOrganizationPeersWithOptions($request, $runtime)
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
            'action'      => 'DescribeFabricOrganizationPeers',
            'version'     => '2018-12-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeFabricOrganizationPeersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeFabricOrganizationPeersRequest $request DescribeFabricOrganizationPeersRequest
     *
     * @return DescribeFabricOrganizationPeersResponse DescribeFabricOrganizationPeersResponse
     */
    public function describeFabricOrganizationPeers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFabricOrganizationPeersWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeFabricOrganizationSpecsResponse DescribeFabricOrganizationSpecsResponse
     */
    public function describeFabricOrganizationSpecsWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'DescribeFabricOrganizationSpecs',
            'version'     => '2018-12-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeFabricOrganizationSpecsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return DescribeFabricOrganizationSpecsResponse DescribeFabricOrganizationSpecsResponse
     */
    public function describeFabricOrganizationSpecs()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFabricOrganizationSpecsWithOptions($runtime);
    }

    /**
     * @param DescribeFabricOrganizationUsersRequest $request DescribeFabricOrganizationUsersRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeFabricOrganizationUsersResponse DescribeFabricOrganizationUsersResponse
     */
    public function describeFabricOrganizationUsersWithOptions($request, $runtime)
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
            'action'      => 'DescribeFabricOrganizationUsers',
            'version'     => '2018-12-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeFabricOrganizationUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeFabricOrganizationUsersRequest $request DescribeFabricOrganizationUsersRequest
     *
     * @return DescribeFabricOrganizationUsersResponse DescribeFabricOrganizationUsersResponse
     */
    public function describeFabricOrganizationUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFabricOrganizationUsersWithOptions($request, $runtime);
    }

    /**
     * @param DescribeFabricOrganizationsRequest $request DescribeFabricOrganizationsRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeFabricOrganizationsResponse DescribeFabricOrganizationsResponse
     */
    public function describeFabricOrganizationsWithOptions($request, $runtime)
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
            'action'      => 'DescribeFabricOrganizations',
            'version'     => '2018-12-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeFabricOrganizationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeFabricOrganizationsRequest $request DescribeFabricOrganizationsRequest
     *
     * @return DescribeFabricOrganizationsResponse DescribeFabricOrganizationsResponse
     */
    public function describeFabricOrganizations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFabricOrganizationsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeFabricPeerLogsRequest $request DescribeFabricPeerLogsRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeFabricPeerLogsResponse DescribeFabricPeerLogsResponse
     */
    public function describeFabricPeerLogsWithOptions($request, $runtime)
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
            'action'      => 'DescribeFabricPeerLogs',
            'version'     => '2018-12-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeFabricPeerLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeFabricPeerLogsRequest $request DescribeFabricPeerLogsRequest
     *
     * @return DescribeFabricPeerLogsResponse DescribeFabricPeerLogsResponse
     */
    public function describeFabricPeerLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFabricPeerLogsWithOptions($request, $runtime);
    }

    /**
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
            'version'     => '2018-12-21',
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
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeRootDomainResponse DescribeRootDomainResponse
     */
    public function describeRootDomainWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'DescribeRootDomain',
            'version'     => '2018-12-21',
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
     * @return DescribeRootDomainResponse DescribeRootDomainResponse
     */
    public function describeRootDomain()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRootDomainWithOptions($runtime);
    }

    /**
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeTasksResponse DescribeTasksResponse
     */
    public function describeTasksWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'DescribeTasks',
            'version'     => '2018-12-21',
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
     * @return DescribeTasksResponse DescribeTasksResponse
     */
    public function describeTasks()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTasksWithOptions($runtime);
    }

    /**
     * @param DownloadFabricOrganizationSDKRequest $request DownloadFabricOrganizationSDKRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return DownloadFabricOrganizationSDKResponse DownloadFabricOrganizationSDKResponse
     */
    public function downloadFabricOrganizationSDKWithOptions($request, $runtime)
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
            'action'      => 'DownloadFabricOrganizationSDK',
            'version'     => '2018-12-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DownloadFabricOrganizationSDKResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DownloadFabricOrganizationSDKRequest $request DownloadFabricOrganizationSDKRequest
     *
     * @return DownloadFabricOrganizationSDKResponse DownloadFabricOrganizationSDKResponse
     */
    public function downloadFabricOrganizationSDK($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->downloadFabricOrganizationSDKWithOptions($request, $runtime);
    }

    /**
     * @param FreezeAntChainAccountRequest $request FreezeAntChainAccountRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return FreezeAntChainAccountResponse FreezeAntChainAccountResponse
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
            'version'     => '2018-12-21',
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
     * @param FreezeAntChainAccountRequest $request FreezeAntChainAccountRequest
     *
     * @return FreezeAntChainAccountResponse FreezeAntChainAccountResponse
     */
    public function freezeAntChainAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->freezeAntChainAccountWithOptions($request, $runtime);
    }

    /**
     * @param InstallFabricChaincodeRequest $request InstallFabricChaincodeRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return InstallFabricChaincodeResponse InstallFabricChaincodeResponse
     */
    public function installFabricChaincodeWithOptions($request, $runtime)
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
            'action'      => 'InstallFabricChaincode',
            'version'     => '2018-12-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return InstallFabricChaincodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param InstallFabricChaincodeRequest $request InstallFabricChaincodeRequest
     *
     * @return InstallFabricChaincodeResponse InstallFabricChaincodeResponse
     */
    public function installFabricChaincode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->installFabricChaincodeWithOptions($request, $runtime);
    }

    /**
     * @summary InstallFabricChaincodePackage
     *  *
     * @param InstallFabricChaincodePackageRequest $request InstallFabricChaincodePackageRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return InstallFabricChaincodePackageResponse InstallFabricChaincodePackageResponse
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
            'version'     => '2018-12-21',
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
     * @summary InstallFabricChaincodePackage
     *  *
     * @param InstallFabricChaincodePackageRequest $request InstallFabricChaincodePackageRequest
     *
     * @return InstallFabricChaincodePackageResponse InstallFabricChaincodePackageResponse
     */
    public function installFabricChaincodePackage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->installFabricChaincodePackageWithOptions($request, $runtime);
    }

    /**
     * @param InstantiateFabricChaincodeRequest $request InstantiateFabricChaincodeRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return InstantiateFabricChaincodeResponse InstantiateFabricChaincodeResponse
     */
    public function instantiateFabricChaincodeWithOptions($request, $runtime)
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
            'action'      => 'InstantiateFabricChaincode',
            'version'     => '2018-12-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return InstantiateFabricChaincodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param InstantiateFabricChaincodeRequest $request InstantiateFabricChaincodeRequest
     *
     * @return InstantiateFabricChaincodeResponse InstantiateFabricChaincodeResponse
     */
    public function instantiateFabricChaincode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->instantiateFabricChaincodeWithOptions($request, $runtime);
    }

    /**
     * @param JoinFabricChannelRequest $request JoinFabricChannelRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return JoinFabricChannelResponse JoinFabricChannelResponse
     */
    public function joinFabricChannelWithOptions($request, $runtime)
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
            'action'      => 'JoinFabricChannel',
            'version'     => '2018-12-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return JoinFabricChannelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param JoinFabricChannelRequest $request JoinFabricChannelRequest
     *
     * @return JoinFabricChannelResponse JoinFabricChannelResponse
     */
    public function joinFabricChannel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->joinFabricChannelWithOptions($request, $runtime);
    }

    /**
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
            'version'     => '2018-12-21',
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
     * @param ResetAntChainCertificateRequest $request ResetAntChainCertificateRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return ResetAntChainCertificateResponse ResetAntChainCertificateResponse
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
            'version'     => '2018-12-21',
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
     * @param ResetAntChainCertificateRequest $request ResetAntChainCertificateRequest
     *
     * @return ResetAntChainCertificateResponse ResetAntChainCertificateResponse
     */
    public function resetAntChainCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetAntChainCertificateWithOptions($request, $runtime);
    }

    /**
     * @param ResetAntChainUserCertificateRequest $request ResetAntChainUserCertificateRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return ResetAntChainUserCertificateResponse ResetAntChainUserCertificateResponse
     */
    public function resetAntChainUserCertificateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->antChainId)) {
            $body['AntChainId'] = $request->antChainId;
        }
        if (!Utils::isUnset($request->username)) {
            $body['Username'] = $request->username;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ResetAntChainUserCertificate',
            'version'     => '2018-12-21',
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
     * @param ResetAntChainUserCertificateRequest $request ResetAntChainUserCertificateRequest
     *
     * @return ResetAntChainUserCertificateResponse ResetAntChainUserCertificateResponse
     */
    public function resetAntChainUserCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetAntChainUserCertificateWithOptions($request, $runtime);
    }

    /**
     * @param ResetFabricOrganizationUserPasswordRequest $request ResetFabricOrganizationUserPasswordRequest
     * @param RuntimeOptions                             $runtime runtime options for this request RuntimeOptions
     *
     * @return ResetFabricOrganizationUserPasswordResponse ResetFabricOrganizationUserPasswordResponse
     */
    public function resetFabricOrganizationUserPasswordWithOptions($request, $runtime)
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
            'action'      => 'ResetFabricOrganizationUserPassword',
            'version'     => '2018-12-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ResetFabricOrganizationUserPasswordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ResetFabricOrganizationUserPasswordRequest $request ResetFabricOrganizationUserPasswordRequest
     *
     * @return ResetFabricOrganizationUserPasswordResponse ResetFabricOrganizationUserPasswordResponse
     */
    public function resetFabricOrganizationUserPassword($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetFabricOrganizationUserPasswordWithOptions($request, $runtime);
    }

    /**
     * @summary SubmitFabricChaincodeDefinition
     *  *
     * @param SubmitFabricChaincodeDefinitionRequest $request SubmitFabricChaincodeDefinitionRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return SubmitFabricChaincodeDefinitionResponse SubmitFabricChaincodeDefinitionResponse
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
            'version'     => '2018-12-21',
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
     * @summary SubmitFabricChaincodeDefinition
     *  *
     * @param SubmitFabricChaincodeDefinitionRequest $request SubmitFabricChaincodeDefinitionRequest
     *
     * @return SubmitFabricChaincodeDefinitionResponse SubmitFabricChaincodeDefinitionResponse
     */
    public function submitFabricChaincodeDefinition($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitFabricChaincodeDefinitionWithOptions($request, $runtime);
    }

    /**
     * @param SynchronizeFabricChaincodeRequest $request SynchronizeFabricChaincodeRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return SynchronizeFabricChaincodeResponse SynchronizeFabricChaincodeResponse
     */
    public function synchronizeFabricChaincodeWithOptions($request, $runtime)
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
            'action'      => 'SynchronizeFabricChaincode',
            'version'     => '2018-12-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SynchronizeFabricChaincodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SynchronizeFabricChaincodeRequest $request SynchronizeFabricChaincodeRequest
     *
     * @return SynchronizeFabricChaincodeResponse SynchronizeFabricChaincodeResponse
     */
    public function synchronizeFabricChaincode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->synchronizeFabricChaincodeWithOptions($request, $runtime);
    }

    /**
     * @param TagResourcesRequest $request TagResourcesRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return TagResourcesResponse TagResourcesResponse
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
            'version'     => '2018-12-21',
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
     * @param UnfreezeAntChainAccountRequest $request UnfreezeAntChainAccountRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return UnfreezeAntChainAccountResponse UnfreezeAntChainAccountResponse
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
            'version'     => '2018-12-21',
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
     * @param UnfreezeAntChainAccountRequest $request UnfreezeAntChainAccountRequest
     *
     * @return UnfreezeAntChainAccountResponse UnfreezeAntChainAccountResponse
     */
    public function unfreezeAntChainAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unfreezeAntChainAccountWithOptions($request, $runtime);
    }

    /**
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
            'version'     => '2018-12-21',
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
     * @param UpdateAntChainRequest $request UpdateAntChainRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateAntChainResponse UpdateAntChainResponse
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
            'version'     => '2018-12-21',
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
     * @param UpdateAntChainRequest $request UpdateAntChainRequest
     *
     * @return UpdateAntChainResponse UpdateAntChainResponse
     */
    public function updateAntChain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAntChainWithOptions($request, $runtime);
    }

    /**
     * @param UpdateAntChainConsortiumRequest $request UpdateAntChainConsortiumRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateAntChainConsortiumResponse UpdateAntChainConsortiumResponse
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
            'version'     => '2018-12-21',
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
     * @param UpdateAntChainConsortiumRequest $request UpdateAntChainConsortiumRequest
     *
     * @return UpdateAntChainConsortiumResponse UpdateAntChainConsortiumResponse
     */
    public function updateAntChainConsortium($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAntChainConsortiumWithOptions($request, $runtime);
    }

    /**
     * @param UpdateAntChainContractContentRequest $request UpdateAntChainContractContentRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateAntChainContractContentResponse UpdateAntChainContractContentResponse
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
            'version'     => '2018-12-21',
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
     * @param UpdateAntChainContractContentRequest $request UpdateAntChainContractContentRequest
     *
     * @return UpdateAntChainContractContentResponse UpdateAntChainContractContentResponse
     */
    public function updateAntChainContractContent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAntChainContractContentWithOptions($request, $runtime);
    }

    /**
     * @param UpdateAntChainContractProjectRequest $request UpdateAntChainContractProjectRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateAntChainContractProjectResponse UpdateAntChainContractProjectResponse
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
            'version'     => '2018-12-21',
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
     * @param UpdateAntChainContractProjectRequest $request UpdateAntChainContractProjectRequest
     *
     * @return UpdateAntChainContractProjectResponse UpdateAntChainContractProjectResponse
     */
    public function updateAntChainContractProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAntChainContractProjectWithOptions($request, $runtime);
    }

    /**
     * @param UpdateAntChainMemberRequest $request UpdateAntChainMemberRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateAntChainMemberResponse UpdateAntChainMemberResponse
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
            'version'     => '2018-12-21',
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
     * @param UpdateAntChainMemberRequest $request UpdateAntChainMemberRequest
     *
     * @return UpdateAntChainMemberResponse UpdateAntChainMemberResponse
     */
    public function updateAntChainMember($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAntChainMemberWithOptions($request, $runtime);
    }

    /**
     * @param UpdateAntChainQRCodeAuthorizationRequest $request UpdateAntChainQRCodeAuthorizationRequest
     * @param RuntimeOptions                           $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateAntChainQRCodeAuthorizationResponse UpdateAntChainQRCodeAuthorizationResponse
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
            'version'     => '2018-12-21',
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
     * @param UpdateAntChainQRCodeAuthorizationRequest $request UpdateAntChainQRCodeAuthorizationRequest
     *
     * @return UpdateAntChainQRCodeAuthorizationResponse UpdateAntChainQRCodeAuthorizationResponse
     */
    public function updateAntChainQRCodeAuthorization($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAntChainQRCodeAuthorizationWithOptions($request, $runtime);
    }

    /**
     * @description ****
     *  *
     * @param UpgradeFabricChaincodeRequest $request UpgradeFabricChaincodeRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return UpgradeFabricChaincodeResponse UpgradeFabricChaincodeResponse
     */
    public function upgradeFabricChaincodeWithOptions($request, $runtime)
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
            'action'      => 'UpgradeFabricChaincode',
            'version'     => '2018-12-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpgradeFabricChaincodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @description ****
     *  *
     * @param UpgradeFabricChaincodeRequest $request UpgradeFabricChaincodeRequest
     *
     * @return UpgradeFabricChaincodeResponse UpgradeFabricChaincodeResponse
     */
    public function upgradeFabricChaincode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->upgradeFabricChaincodeWithOptions($request, $runtime);
    }

    /**
     * @summary UpgradeFabricChaincodeDefinition
     *  *
     * @param UpgradeFabricChaincodeDefinitionRequest $request UpgradeFabricChaincodeDefinitionRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return UpgradeFabricChaincodeDefinitionResponse UpgradeFabricChaincodeDefinitionResponse
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
            'version'     => '2018-12-21',
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
     * @summary UpgradeFabricChaincodeDefinition
     *  *
     * @param UpgradeFabricChaincodeDefinitionRequest $request UpgradeFabricChaincodeDefinitionRequest
     *
     * @return UpgradeFabricChaincodeDefinitionResponse UpgradeFabricChaincodeDefinitionResponse
     */
    public function upgradeFabricChaincodeDefinition($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->upgradeFabricChaincodeDefinitionWithOptions($request, $runtime);
    }
}
