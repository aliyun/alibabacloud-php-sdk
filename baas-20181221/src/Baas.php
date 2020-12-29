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
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainBlockRequest;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainBlockResponse;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainCertificateApplicationsRequest;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainCertificateApplicationsResponse;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainConsortiumsRequest;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainConsortiumsResponse;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainContractProjectContentTreeRequest;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainContractProjectContentTreeResponse;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainContractProjectsRequest;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainContractProjectsResponse;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainDownloadPathsRequest;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainDownloadPathsResponse;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainInformationRequest;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainInformationResponse;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainLatestBlocksRequest;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainLatestBlocksResponse;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainLatestTransactionDigestsRequest;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainLatestTransactionDigestsResponse;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainMembersRequest;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainMembersResponse;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainMiniAppBrowserQRCodeAccessLogRequest;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainMiniAppBrowserQRCodeAccessLogResponse;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainMiniAppBrowserQRCodeAuthorizedUsersRequest;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainMiniAppBrowserQRCodeAuthorizedUsersResponse;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainMiniAppBrowserTransactionQRCodeRequest;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainMiniAppBrowserTransactionQRCodeResponse;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainNodesRequest;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainNodesResponse;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainQRCodeAuthorizationRequest;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainQRCodeAuthorizationResponse;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainsRequest;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainsResponse;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainTransactionReceiptRequest;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainTransactionReceiptResponse;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainTransactionRequest;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainTransactionResponse;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainTransactionStatisticsRequest;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainTransactionStatisticsResponse;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeEthereumDeletableRequest;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeEthereumDeletableResponse;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeFabricCandidateOrganizationsRequest;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeFabricCandidateOrganizationsResponse;
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
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeFabricOrganizationChaincodesRequest;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeFabricOrganizationChaincodesResponse;
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
use AlibabaCloud\SDK\Baas\V20181221\Models\UpgradeFabricChaincodeRequest;
use AlibabaCloud\SDK\Baas\V20181221\Models\UpgradeFabricChaincodeResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
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
     * @param AcceptFabricInvitationRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return AcceptFabricInvitationResponse
     */
    public function acceptFabricInvitationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AcceptFabricInvitationResponse::fromMap($this->doRPCRequest('AcceptFabricInvitation', '2018-12-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AcceptFabricInvitationRequest $request
     *
     * @return AcceptFabricInvitationResponse
     */
    public function acceptFabricInvitation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->acceptFabricInvitationWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ApplyAntChainCertificateResponse::fromMap($this->doRPCRequest('ApplyAntChainCertificate', '2018-12-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ApplyAntChainCertificateWithKeyAutoCreationResponse::fromMap($this->doRPCRequest('ApplyAntChainCertificateWithKeyAutoCreation', '2018-12-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return BatchAddAntChainMiniAppQRCodeAuthorizedUsersResponse::fromMap($this->doRPCRequest('BatchAddAntChainMiniAppQRCodeAuthorizedUsers', '2018-12-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param CheckFabricConsortiumDomainRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return CheckFabricConsortiumDomainResponse
     */
    public function checkFabricConsortiumDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CheckFabricConsortiumDomainResponse::fromMap($this->doRPCRequest('CheckFabricConsortiumDomain', '2018-12-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CheckFabricConsortiumDomainRequest $request
     *
     * @return CheckFabricConsortiumDomainResponse
     */
    public function checkFabricConsortiumDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkFabricConsortiumDomainWithOptions($request, $runtime);
    }

    /**
     * @param CheckFabricOrganizationDomainRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return CheckFabricOrganizationDomainResponse
     */
    public function checkFabricOrganizationDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CheckFabricOrganizationDomainResponse::fromMap($this->doRPCRequest('CheckFabricOrganizationDomain', '2018-12-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CheckFabricOrganizationDomainRequest $request
     *
     * @return CheckFabricOrganizationDomainResponse
     */
    public function checkFabricOrganizationDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkFabricOrganizationDomainWithOptions($request, $runtime);
    }

    /**
     * @param ConfirmFabricConsortiumMemberRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return ConfirmFabricConsortiumMemberResponse
     */
    public function confirmFabricConsortiumMemberWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ConfirmFabricConsortiumMemberResponse::fromMap($this->doRPCRequest('ConfirmFabricConsortiumMember', '2018-12-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ConfirmFabricConsortiumMemberRequest $request
     *
     * @return ConfirmFabricConsortiumMemberResponse
     */
    public function confirmFabricConsortiumMember($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->confirmFabricConsortiumMemberWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CopyAntChainContractProjectResponse::fromMap($this->doRPCRequest('CopyAntChainContractProject', '2018-12-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param CreateAntChainAccountRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateAntChainAccountResponse
     */
    public function createAntChainAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateAntChainAccountResponse::fromMap($this->doRPCRequest('CreateAntChainAccount', '2018-12-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateAntChainAccountWithKeyPairAutoCreationResponse::fromMap($this->doRPCRequest('CreateAntChainAccountWithKeyPairAutoCreation', '2018-12-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateAntChainConsortiumResponse::fromMap($this->doRPCRequest('CreateAntChainConsortium', '2018-12-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateAntChainContractContentResponse::fromMap($this->doRPCRequest('CreateAntChainContractContent', '2018-12-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateAntChainContractProjectResponse::fromMap($this->doRPCRequest('CreateAntChainContractProject', '2018-12-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param CreateFabricChaincodeRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateFabricChaincodeResponse
     */
    public function createFabricChaincodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateFabricChaincodeResponse::fromMap($this->doRPCRequest('CreateFabricChaincode', '2018-12-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateFabricChaincodeRequest $request
     *
     * @return CreateFabricChaincodeResponse
     */
    public function createFabricChaincode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFabricChaincodeWithOptions($request, $runtime);
    }

    /**
     * @param CreateFabricChannelRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateFabricChannelResponse
     */
    public function createFabricChannelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateFabricChannelResponse::fromMap($this->doRPCRequest('CreateFabricChannel', '2018-12-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateFabricChannelRequest $request
     *
     * @return CreateFabricChannelResponse
     */
    public function createFabricChannel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFabricChannelWithOptions($request, $runtime);
    }

    /**
     * @param CreateFabricChannelMemberRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CreateFabricChannelMemberResponse
     */
    public function createFabricChannelMemberWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateFabricChannelMemberResponse::fromMap($this->doRPCRequest('CreateFabricChannelMember', '2018-12-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateFabricChannelMemberRequest $request
     *
     * @return CreateFabricChannelMemberResponse
     */
    public function createFabricChannelMember($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFabricChannelMemberWithOptions($request, $runtime);
    }

    /**
     * @param CreateFabricConsortiumRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CreateFabricConsortiumResponse
     */
    public function createFabricConsortiumWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateFabricConsortiumResponse::fromMap($this->doRPCRequest('CreateFabricConsortium', '2018-12-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateFabricConsortiumRequest $request
     *
     * @return CreateFabricConsortiumResponse
     */
    public function createFabricConsortium($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFabricConsortiumWithOptions($request, $runtime);
    }

    /**
     * @param CreateFabricConsortiumMemberRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return CreateFabricConsortiumMemberResponse
     */
    public function createFabricConsortiumMemberWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateFabricConsortiumMemberResponse::fromMap($this->doRPCRequest('CreateFabricConsortiumMember', '2018-12-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateFabricConsortiumMemberRequest $request
     *
     * @return CreateFabricConsortiumMemberResponse
     */
    public function createFabricConsortiumMember($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFabricConsortiumMemberWithOptions($request, $runtime);
    }

    /**
     * @param CreateFabricOrganizationRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateFabricOrganizationResponse
     */
    public function createFabricOrganizationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateFabricOrganizationResponse::fromMap($this->doRPCRequest('CreateFabricOrganization', '2018-12-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateFabricOrganizationRequest $request
     *
     * @return CreateFabricOrganizationResponse
     */
    public function createFabricOrganization($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFabricOrganizationWithOptions($request, $runtime);
    }

    /**
     * @param CreateFabricOrganizationUserRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return CreateFabricOrganizationUserResponse
     */
    public function createFabricOrganizationUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateFabricOrganizationUserResponse::fromMap($this->doRPCRequest('CreateFabricOrganizationUser', '2018-12-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateFabricOrganizationUserRequest $request
     *
     * @return CreateFabricOrganizationUserResponse
     */
    public function createFabricOrganizationUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFabricOrganizationUserWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteAntChainConsortiumResponse::fromMap($this->doRPCRequest('DeleteAntChainConsortium', '2018-12-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteAntChainContractContentResponse::fromMap($this->doRPCRequest('DeleteAntChainContractContent', '2018-12-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteAntChainContractProjectResponse::fromMap($this->doRPCRequest('DeleteAntChainContractProject', '2018-12-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteAntChainMiniAppQRCodeAuthorizedUserResponse::fromMap($this->doRPCRequest('DeleteAntChainMiniAppQRCodeAuthorizedUser', '2018-12-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DeleteFabricChaincodeRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteFabricChaincodeResponse
     */
    public function deleteFabricChaincodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteFabricChaincodeResponse::fromMap($this->doRPCRequest('DeleteFabricChaincode', '2018-12-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteFabricChaincodeRequest $request
     *
     * @return DeleteFabricChaincodeResponse
     */
    public function deleteFabricChaincode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteFabricChaincodeWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeAntChainAccountsResponse::fromMap($this->doRPCRequest('DescribeAntChainAccounts', '2018-12-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeAntChainBlockRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeAntChainBlockResponse
     */
    public function describeAntChainBlockWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeAntChainBlockResponse::fromMap($this->doRPCRequest('DescribeAntChainBlock', '2018-12-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeAntChainCertificateApplicationsRequest $request
     * @param RuntimeOptions                                 $runtime
     *
     * @return DescribeAntChainCertificateApplicationsResponse
     */
    public function describeAntChainCertificateApplicationsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeAntChainCertificateApplicationsResponse::fromMap($this->doRPCRequest('DescribeAntChainCertificateApplications', '2018-12-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeAntChainConsortiumsRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeAntChainConsortiumsResponse
     */
    public function describeAntChainConsortiumsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeAntChainConsortiumsResponse::fromMap($this->doRPCRequest('DescribeAntChainConsortiums', '2018-12-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeAntChainContractProjectContentTreeRequest $request
     * @param RuntimeOptions                                    $runtime
     *
     * @return DescribeAntChainContractProjectContentTreeResponse
     */
    public function describeAntChainContractProjectContentTreeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeAntChainContractProjectContentTreeResponse::fromMap($this->doRPCRequest('DescribeAntChainContractProjectContentTree', '2018-12-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeAntChainContractProjectsRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeAntChainContractProjectsResponse
     */
    public function describeAntChainContractProjectsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeAntChainContractProjectsResponse::fromMap($this->doRPCRequest('DescribeAntChainContractProjects', '2018-12-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeAntChainDownloadPathsRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeAntChainDownloadPathsResponse
     */
    public function describeAntChainDownloadPathsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeAntChainDownloadPathsResponse::fromMap($this->doRPCRequest('DescribeAntChainDownloadPaths', '2018-12-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeAntChainInformationRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeAntChainInformationResponse
     */
    public function describeAntChainInformationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeAntChainInformationResponse::fromMap($this->doRPCRequest('DescribeAntChainInformation', '2018-12-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeAntChainLatestBlocksRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeAntChainLatestBlocksResponse
     */
    public function describeAntChainLatestBlocksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeAntChainLatestBlocksResponse::fromMap($this->doRPCRequest('DescribeAntChainLatestBlocks', '2018-12-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeAntChainLatestTransactionDigestsRequest $request
     * @param RuntimeOptions                                  $runtime
     *
     * @return DescribeAntChainLatestTransactionDigestsResponse
     */
    public function describeAntChainLatestTransactionDigestsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeAntChainLatestTransactionDigestsResponse::fromMap($this->doRPCRequest('DescribeAntChainLatestTransactionDigests', '2018-12-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeAntChainMembersRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeAntChainMembersResponse
     */
    public function describeAntChainMembersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeAntChainMembersResponse::fromMap($this->doRPCRequest('DescribeAntChainMembers', '2018-12-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeAntChainMiniAppBrowserQRCodeAccessLogRequest $request
     * @param RuntimeOptions                                       $runtime
     *
     * @return DescribeAntChainMiniAppBrowserQRCodeAccessLogResponse
     */
    public function describeAntChainMiniAppBrowserQRCodeAccessLogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeAntChainMiniAppBrowserQRCodeAccessLogResponse::fromMap($this->doRPCRequest('DescribeAntChainMiniAppBrowserQRCodeAccessLog', '2018-12-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeAntChainMiniAppBrowserQRCodeAuthorizedUsersRequest $request
     * @param RuntimeOptions                                             $runtime
     *
     * @return DescribeAntChainMiniAppBrowserQRCodeAuthorizedUsersResponse
     */
    public function describeAntChainMiniAppBrowserQRCodeAuthorizedUsersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeAntChainMiniAppBrowserQRCodeAuthorizedUsersResponse::fromMap($this->doRPCRequest('DescribeAntChainMiniAppBrowserQRCodeAuthorizedUsers', '2018-12-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeAntChainMiniAppBrowserTransactionQRCodeRequest $request
     * @param RuntimeOptions                                         $runtime
     *
     * @return DescribeAntChainMiniAppBrowserTransactionQRCodeResponse
     */
    public function describeAntChainMiniAppBrowserTransactionQRCodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeAntChainMiniAppBrowserTransactionQRCodeResponse::fromMap($this->doRPCRequest('DescribeAntChainMiniAppBrowserTransactionQRCode', '2018-12-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeAntChainNodesRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeAntChainNodesResponse
     */
    public function describeAntChainNodesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeAntChainNodesResponse::fromMap($this->doRPCRequest('DescribeAntChainNodes', '2018-12-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeAntChainNodesRequest $request
     *
     * @return DescribeAntChainNodesResponse
     */
    public function describeAntChainNodes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAntChainNodesWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeAntChainQRCodeAuthorizationResponse::fromMap($this->doRPCRequest('DescribeAntChainQRCodeAuthorization', '2018-12-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeAntChainsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeAntChainsResponse
     */
    public function describeAntChainsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeAntChainsResponse::fromMap($this->doRPCRequest('DescribeAntChains', '2018-12-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeAntChainTransactionRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeAntChainTransactionResponse
     */
    public function describeAntChainTransactionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeAntChainTransactionResponse::fromMap($this->doRPCRequest('DescribeAntChainTransaction', '2018-12-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeAntChainTransactionReceiptRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DescribeAntChainTransactionReceiptResponse
     */
    public function describeAntChainTransactionReceiptWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeAntChainTransactionReceiptResponse::fromMap($this->doRPCRequest('DescribeAntChainTransactionReceipt', '2018-12-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeAntChainTransactionReceiptRequest $request
     *
     * @return DescribeAntChainTransactionReceiptResponse
     */
    public function describeAntChainTransactionReceipt($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAntChainTransactionReceiptWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeAntChainTransactionStatisticsResponse::fromMap($this->doRPCRequest('DescribeAntChainTransactionStatistics', '2018-12-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeEthereumDeletableRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeEthereumDeletableResponse
     */
    public function describeEthereumDeletableWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeEthereumDeletableResponse::fromMap($this->doRPCRequest('DescribeEthereumDeletable', '2018-12-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeFabricCandidateOrganizationsRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return DescribeFabricCandidateOrganizationsResponse
     */
    public function describeFabricCandidateOrganizationsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeFabricCandidateOrganizationsResponse::fromMap($this->doRPCRequest('DescribeFabricCandidateOrganizations', '2018-12-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeFabricCandidateOrganizationsRequest $request
     *
     * @return DescribeFabricCandidateOrganizationsResponse
     */
    public function describeFabricCandidateOrganizations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFabricCandidateOrganizationsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeFabricChaincodeUploadPolicyRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return DescribeFabricChaincodeUploadPolicyResponse
     */
    public function describeFabricChaincodeUploadPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeFabricChaincodeUploadPolicyResponse::fromMap($this->doRPCRequest('DescribeFabricChaincodeUploadPolicy', '2018-12-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeFabricChaincodeUploadPolicyRequest $request
     *
     * @return DescribeFabricChaincodeUploadPolicyResponse
     */
    public function describeFabricChaincodeUploadPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFabricChaincodeUploadPolicyWithOptions($request, $runtime);
    }

    /**
     * @param DescribeFabricChannelMembersRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeFabricChannelMembersResponse
     */
    public function describeFabricChannelMembersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeFabricChannelMembersResponse::fromMap($this->doRPCRequest('DescribeFabricChannelMembers', '2018-12-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeFabricChannelMembersRequest $request
     *
     * @return DescribeFabricChannelMembersResponse
     */
    public function describeFabricChannelMembers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFabricChannelMembersWithOptions($request, $runtime);
    }

    /**
     * @param DescribeFabricConsortiumAdminStatusRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return DescribeFabricConsortiumAdminStatusResponse
     */
    public function describeFabricConsortiumAdminStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeFabricConsortiumAdminStatusResponse::fromMap($this->doRPCRequest('DescribeFabricConsortiumAdminStatus', '2018-12-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeFabricConsortiumAdminStatusRequest $request
     *
     * @return DescribeFabricConsortiumAdminStatusResponse
     */
    public function describeFabricConsortiumAdminStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFabricConsortiumAdminStatusWithOptions($request, $runtime);
    }

    /**
     * @param DescribeFabricConsortiumChaincodesRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DescribeFabricConsortiumChaincodesResponse
     */
    public function describeFabricConsortiumChaincodesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeFabricConsortiumChaincodesResponse::fromMap($this->doRPCRequest('DescribeFabricConsortiumChaincodes', '2018-12-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeFabricConsortiumChaincodesRequest $request
     *
     * @return DescribeFabricConsortiumChaincodesResponse
     */
    public function describeFabricConsortiumChaincodes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFabricConsortiumChaincodesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeFabricConsortiumChannelsRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeFabricConsortiumChannelsResponse
     */
    public function describeFabricConsortiumChannelsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeFabricConsortiumChannelsResponse::fromMap($this->doRPCRequest('DescribeFabricConsortiumChannels', '2018-12-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeFabricConsortiumChannelsRequest $request
     *
     * @return DescribeFabricConsortiumChannelsResponse
     */
    public function describeFabricConsortiumChannels($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFabricConsortiumChannelsWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return DescribeFabricConsortiumConfigResponse
     */
    public function describeFabricConsortiumConfigWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);

        return DescribeFabricConsortiumConfigResponse::fromMap($this->doRPCRequest('DescribeFabricConsortiumConfig', '2018-12-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @return DescribeFabricConsortiumConfigResponse
     */
    public function describeFabricConsortiumConfig()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFabricConsortiumConfigWithOptions($runtime);
    }

    /**
     * @param DescribeFabricConsortiumDeletableRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeFabricConsortiumDeletableResponse
     */
    public function describeFabricConsortiumDeletableWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeFabricConsortiumDeletableResponse::fromMap($this->doRPCRequest('DescribeFabricConsortiumDeletable', '2018-12-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeFabricConsortiumDeletableRequest $request
     *
     * @return DescribeFabricConsortiumDeletableResponse
     */
    public function describeFabricConsortiumDeletable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFabricConsortiumDeletableWithOptions($request, $runtime);
    }

    /**
     * @param DescribeFabricConsortiumMemberApprovalRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return DescribeFabricConsortiumMemberApprovalResponse
     */
    public function describeFabricConsortiumMemberApprovalWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeFabricConsortiumMemberApprovalResponse::fromMap($this->doRPCRequest('DescribeFabricConsortiumMemberApproval', '2018-12-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeFabricConsortiumMemberApprovalRequest $request
     *
     * @return DescribeFabricConsortiumMemberApprovalResponse
     */
    public function describeFabricConsortiumMemberApproval($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFabricConsortiumMemberApprovalWithOptions($request, $runtime);
    }

    /**
     * @param DescribeFabricConsortiumMembersRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeFabricConsortiumMembersResponse
     */
    public function describeFabricConsortiumMembersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeFabricConsortiumMembersResponse::fromMap($this->doRPCRequest('DescribeFabricConsortiumMembers', '2018-12-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeFabricConsortiumMembersRequest $request
     *
     * @return DescribeFabricConsortiumMembersResponse
     */
    public function describeFabricConsortiumMembers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFabricConsortiumMembersWithOptions($request, $runtime);
    }

    /**
     * @param DescribeFabricConsortiumOrderersRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeFabricConsortiumOrderersResponse
     */
    public function describeFabricConsortiumOrderersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeFabricConsortiumOrderersResponse::fromMap($this->doRPCRequest('DescribeFabricConsortiumOrderers', '2018-12-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeFabricConsortiumOrderersRequest $request
     *
     * @return DescribeFabricConsortiumOrderersResponse
     */
    public function describeFabricConsortiumOrderers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFabricConsortiumOrderersWithOptions($request, $runtime);
    }

    /**
     * @param DescribeFabricConsortiumsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeFabricConsortiumsResponse
     */
    public function describeFabricConsortiumsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeFabricConsortiumsResponse::fromMap($this->doRPCRequest('DescribeFabricConsortiums', '2018-12-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeFabricConsortiumsRequest $request
     *
     * @return DescribeFabricConsortiumsResponse
     */
    public function describeFabricConsortiums($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFabricConsortiumsWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return DescribeFabricConsortiumSpecsResponse
     */
    public function describeFabricConsortiumSpecsWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);

        return DescribeFabricConsortiumSpecsResponse::fromMap($this->doRPCRequest('DescribeFabricConsortiumSpecs', '2018-12-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @return DescribeFabricConsortiumSpecsResponse
     */
    public function describeFabricConsortiumSpecs()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFabricConsortiumSpecsWithOptions($runtime);
    }

    /**
     * @param DescribeFabricExplorerRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeFabricExplorerResponse
     */
    public function describeFabricExplorerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeFabricExplorerResponse::fromMap($this->doRPCRequest('DescribeFabricExplorer', '2018-12-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeFabricExplorerRequest $request
     *
     * @return DescribeFabricExplorerResponse
     */
    public function describeFabricExplorer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFabricExplorerWithOptions($request, $runtime);
    }

    /**
     * @param DescribeFabricInvitationCodeRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeFabricInvitationCodeResponse
     */
    public function describeFabricInvitationCodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeFabricInvitationCodeResponse::fromMap($this->doRPCRequest('DescribeFabricInvitationCode', '2018-12-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeFabricInvitationCodeRequest $request
     *
     * @return DescribeFabricInvitationCodeResponse
     */
    public function describeFabricInvitationCode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFabricInvitationCodeWithOptions($request, $runtime);
    }

    /**
     * @param DescribeFabricInviterRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeFabricInviterResponse
     */
    public function describeFabricInviterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeFabricInviterResponse::fromMap($this->doRPCRequest('DescribeFabricInviter', '2018-12-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeFabricInviterRequest $request
     *
     * @return DescribeFabricInviterResponse
     */
    public function describeFabricInviter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFabricInviterWithOptions($request, $runtime);
    }

    /**
     * @param DescribeFabricOrdererLogsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeFabricOrdererLogsResponse
     */
    public function describeFabricOrdererLogsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeFabricOrdererLogsResponse::fromMap($this->doRPCRequest('DescribeFabricOrdererLogs', '2018-12-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeFabricOrdererLogsRequest $request
     *
     * @return DescribeFabricOrdererLogsResponse
     */
    public function describeFabricOrdererLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFabricOrdererLogsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeFabricOrganizationRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeFabricOrganizationResponse
     */
    public function describeFabricOrganizationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeFabricOrganizationResponse::fromMap($this->doRPCRequest('DescribeFabricOrganization', '2018-12-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeFabricOrganizationRequest $request
     *
     * @return DescribeFabricOrganizationResponse
     */
    public function describeFabricOrganization($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFabricOrganizationWithOptions($request, $runtime);
    }

    /**
     * @param DescribeFabricOrganizationChaincodesRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return DescribeFabricOrganizationChaincodesResponse
     */
    public function describeFabricOrganizationChaincodesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeFabricOrganizationChaincodesResponse::fromMap($this->doRPCRequest('DescribeFabricOrganizationChaincodes', '2018-12-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeFabricOrganizationChaincodesRequest $request
     *
     * @return DescribeFabricOrganizationChaincodesResponse
     */
    public function describeFabricOrganizationChaincodes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFabricOrganizationChaincodesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeFabricOrganizationDeletableRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return DescribeFabricOrganizationDeletableResponse
     */
    public function describeFabricOrganizationDeletableWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeFabricOrganizationDeletableResponse::fromMap($this->doRPCRequest('DescribeFabricOrganizationDeletable', '2018-12-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeFabricOrganizationDeletableRequest $request
     *
     * @return DescribeFabricOrganizationDeletableResponse
     */
    public function describeFabricOrganizationDeletable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFabricOrganizationDeletableWithOptions($request, $runtime);
    }

    /**
     * @param DescribeFabricOrganizationMembersRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeFabricOrganizationMembersResponse
     */
    public function describeFabricOrganizationMembersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeFabricOrganizationMembersResponse::fromMap($this->doRPCRequest('DescribeFabricOrganizationMembers', '2018-12-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeFabricOrganizationMembersRequest $request
     *
     * @return DescribeFabricOrganizationMembersResponse
     */
    public function describeFabricOrganizationMembers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFabricOrganizationMembersWithOptions($request, $runtime);
    }

    /**
     * @param DescribeFabricOrganizationPeersRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeFabricOrganizationPeersResponse
     */
    public function describeFabricOrganizationPeersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeFabricOrganizationPeersResponse::fromMap($this->doRPCRequest('DescribeFabricOrganizationPeers', '2018-12-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeFabricOrganizationPeersRequest $request
     *
     * @return DescribeFabricOrganizationPeersResponse
     */
    public function describeFabricOrganizationPeers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFabricOrganizationPeersWithOptions($request, $runtime);
    }

    /**
     * @param DescribeFabricOrganizationsRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeFabricOrganizationsResponse
     */
    public function describeFabricOrganizationsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeFabricOrganizationsResponse::fromMap($this->doRPCRequest('DescribeFabricOrganizations', '2018-12-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeFabricOrganizationsRequest $request
     *
     * @return DescribeFabricOrganizationsResponse
     */
    public function describeFabricOrganizations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFabricOrganizationsWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return DescribeFabricOrganizationSpecsResponse
     */
    public function describeFabricOrganizationSpecsWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);

        return DescribeFabricOrganizationSpecsResponse::fromMap($this->doRPCRequest('DescribeFabricOrganizationSpecs', '2018-12-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @return DescribeFabricOrganizationSpecsResponse
     */
    public function describeFabricOrganizationSpecs()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFabricOrganizationSpecsWithOptions($runtime);
    }

    /**
     * @param DescribeFabricOrganizationUsersRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeFabricOrganizationUsersResponse
     */
    public function describeFabricOrganizationUsersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeFabricOrganizationUsersResponse::fromMap($this->doRPCRequest('DescribeFabricOrganizationUsers', '2018-12-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeFabricOrganizationUsersRequest $request
     *
     * @return DescribeFabricOrganizationUsersResponse
     */
    public function describeFabricOrganizationUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFabricOrganizationUsersWithOptions($request, $runtime);
    }

    /**
     * @param DescribeFabricPeerLogsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeFabricPeerLogsResponse
     */
    public function describeFabricPeerLogsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeFabricPeerLogsResponse::fromMap($this->doRPCRequest('DescribeFabricPeerLogs', '2018-12-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeFabricPeerLogsRequest $request
     *
     * @return DescribeFabricPeerLogsResponse
     */
    public function describeFabricPeerLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFabricPeerLogsWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeRegionsResponse::fromMap($this->doRPCRequest('DescribeRegions', '2018-12-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param RuntimeOptions $runtime
     *
     * @return DescribeRootDomainResponse
     */
    public function describeRootDomainWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);

        return DescribeRootDomainResponse::fromMap($this->doRPCRequest('DescribeRootDomain', '2018-12-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param RuntimeOptions $runtime
     *
     * @return DescribeTasksResponse
     */
    public function describeTasksWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);

        return DescribeTasksResponse::fromMap($this->doRPCRequest('DescribeTasks', '2018-12-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DownloadFabricOrganizationSDKRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DownloadFabricOrganizationSDKResponse
     */
    public function downloadFabricOrganizationSDKWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DownloadFabricOrganizationSDKResponse::fromMap($this->doRPCRequest('DownloadFabricOrganizationSDK', '2018-12-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DownloadFabricOrganizationSDKRequest $request
     *
     * @return DownloadFabricOrganizationSDKResponse
     */
    public function downloadFabricOrganizationSDK($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->downloadFabricOrganizationSDKWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return FreezeAntChainAccountResponse::fromMap($this->doRPCRequest('FreezeAntChainAccount', '2018-12-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param InstallFabricChaincodeRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return InstallFabricChaincodeResponse
     */
    public function installFabricChaincodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return InstallFabricChaincodeResponse::fromMap($this->doRPCRequest('InstallFabricChaincode', '2018-12-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param InstallFabricChaincodeRequest $request
     *
     * @return InstallFabricChaincodeResponse
     */
    public function installFabricChaincode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->installFabricChaincodeWithOptions($request, $runtime);
    }

    /**
     * @param InstantiateFabricChaincodeRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return InstantiateFabricChaincodeResponse
     */
    public function instantiateFabricChaincodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return InstantiateFabricChaincodeResponse::fromMap($this->doRPCRequest('InstantiateFabricChaincode', '2018-12-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param InstantiateFabricChaincodeRequest $request
     *
     * @return InstantiateFabricChaincodeResponse
     */
    public function instantiateFabricChaincode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->instantiateFabricChaincodeWithOptions($request, $runtime);
    }

    /**
     * @param JoinFabricChannelRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return JoinFabricChannelResponse
     */
    public function joinFabricChannelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return JoinFabricChannelResponse::fromMap($this->doRPCRequest('JoinFabricChannel', '2018-12-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param JoinFabricChannelRequest $request
     *
     * @return JoinFabricChannelResponse
     */
    public function joinFabricChannel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->joinFabricChannelWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListTagResourcesResponse::fromMap($this->doRPCRequest('ListTagResources', '2018-12-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ResetAntChainCertificateRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ResetAntChainCertificateResponse
     */
    public function resetAntChainCertificateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ResetAntChainCertificateResponse::fromMap($this->doRPCRequest('ResetAntChainCertificate', '2018-12-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ResetAntChainUserCertificateResponse::fromMap($this->doRPCRequest('ResetAntChainUserCertificate', '2018-12-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ResetFabricOrganizationUserPasswordRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return ResetFabricOrganizationUserPasswordResponse
     */
    public function resetFabricOrganizationUserPasswordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ResetFabricOrganizationUserPasswordResponse::fromMap($this->doRPCRequest('ResetFabricOrganizationUserPassword', '2018-12-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ResetFabricOrganizationUserPasswordRequest $request
     *
     * @return ResetFabricOrganizationUserPasswordResponse
     */
    public function resetFabricOrganizationUserPassword($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetFabricOrganizationUserPasswordWithOptions($request, $runtime);
    }

    /**
     * @param SynchronizeFabricChaincodeRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return SynchronizeFabricChaincodeResponse
     */
    public function synchronizeFabricChaincodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SynchronizeFabricChaincodeResponse::fromMap($this->doRPCRequest('SynchronizeFabricChaincode', '2018-12-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SynchronizeFabricChaincodeRequest $request
     *
     * @return SynchronizeFabricChaincodeResponse
     */
    public function synchronizeFabricChaincode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->synchronizeFabricChaincodeWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return TagResourcesResponse::fromMap($this->doRPCRequest('TagResources', '2018-12-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param UnfreezeAntChainAccountRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return UnfreezeAntChainAccountResponse
     */
    public function unfreezeAntChainAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UnfreezeAntChainAccountResponse::fromMap($this->doRPCRequest('UnfreezeAntChainAccount', '2018-12-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UntagResourcesResponse::fromMap($this->doRPCRequest('UntagResources', '2018-12-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateAntChainResponse::fromMap($this->doRPCRequest('UpdateAntChain', '2018-12-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateAntChainConsortiumResponse::fromMap($this->doRPCRequest('UpdateAntChainConsortium', '2018-12-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateAntChainContractContentResponse::fromMap($this->doRPCRequest('UpdateAntChainContractContent', '2018-12-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateAntChainContractProjectResponse::fromMap($this->doRPCRequest('UpdateAntChainContractProject', '2018-12-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateAntChainMemberResponse::fromMap($this->doRPCRequest('UpdateAntChainMember', '2018-12-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateAntChainQRCodeAuthorizationResponse::fromMap($this->doRPCRequest('UpdateAntChainQRCodeAuthorization', '2018-12-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param UpgradeFabricChaincodeRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return UpgradeFabricChaincodeResponse
     */
    public function upgradeFabricChaincodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpgradeFabricChaincodeResponse::fromMap($this->doRPCRequest('UpgradeFabricChaincode', '2018-12-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpgradeFabricChaincodeRequest $request
     *
     * @return UpgradeFabricChaincodeResponse
     */
    public function upgradeFabricChaincode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->upgradeFabricChaincodeWithOptions($request, $runtime);
    }
}
