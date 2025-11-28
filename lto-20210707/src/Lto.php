<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Lto\V20210707;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Lto\V20210707\Models\AddBaaSAntChainBizChainRequest;
use AlibabaCloud\SDK\Lto\V20210707\Models\AddBaaSAntChainBizChainResponse;
use AlibabaCloud\SDK\Lto\V20210707\Models\AddBaaSFabricBizChainRequest;
use AlibabaCloud\SDK\Lto\V20210707\Models\AddBaaSFabricBizChainResponse;
use AlibabaCloud\SDK\Lto\V20210707\Models\AddBsnFabricBizChainRequest;
use AlibabaCloud\SDK\Lto\V20210707\Models\AddBsnFabricBizChainResponse;
use AlibabaCloud\SDK\Lto\V20210707\Models\AddDeviceGroupRequest;
use AlibabaCloud\SDK\Lto\V20210707\Models\AddDeviceGroupResponse;
use AlibabaCloud\SDK\Lto\V20210707\Models\AddMemberRequest;
use AlibabaCloud\SDK\Lto\V20210707\Models\AddMemberResponse;
use AlibabaCloud\SDK\Lto\V20210707\Models\AddPrivacyRuleRequest;
use AlibabaCloud\SDK\Lto\V20210707\Models\AddPrivacyRuleResponse;
use AlibabaCloud\SDK\Lto\V20210707\Models\AddRouteRuleRequest;
use AlibabaCloud\SDK\Lto\V20210707\Models\AddRouteRuleResponse;
use AlibabaCloud\SDK\Lto\V20210707\Models\AgreeMemberAccessRequest;
use AlibabaCloud\SDK\Lto\V20210707\Models\AgreeMemberAccessResponse;
use AlibabaCloud\SDK\Lto\V20210707\Models\AuthorizeBaaSRequest;
use AlibabaCloud\SDK\Lto\V20210707\Models\AuthorizeBaaSResponse;
use AlibabaCloud\SDK\Lto\V20210707\Models\AuthorizeDeviceGroupBizChainRequest;
use AlibabaCloud\SDK\Lto\V20210707\Models\AuthorizeDeviceGroupBizChainResponse;
use AlibabaCloud\SDK\Lto\V20210707\Models\AuthorizeMemberBizChainRequest;
use AlibabaCloud\SDK\Lto\V20210707\Models\AuthorizeMemberBizChainResponse;
use AlibabaCloud\SDK\Lto\V20210707\Models\DeletePrivacyRuleRequest;
use AlibabaCloud\SDK\Lto\V20210707\Models\DeletePrivacyRuleResponse;
use AlibabaCloud\SDK\Lto\V20210707\Models\DeleteRouteRuleRequest;
use AlibabaCloud\SDK\Lto\V20210707\Models\DeleteRouteRuleResponse;
use AlibabaCloud\SDK\Lto\V20210707\Models\DeniedMemberAccessRequest;
use AlibabaCloud\SDK\Lto\V20210707\Models\DeniedMemberAccessResponse;
use AlibabaCloud\SDK\Lto\V20210707\Models\DescribeAccountRoleRequest;
use AlibabaCloud\SDK\Lto\V20210707\Models\DescribeAccountRoleResponse;
use AlibabaCloud\SDK\Lto\V20210707\Models\DescribeAdminInfoRequest;
use AlibabaCloud\SDK\Lto\V20210707\Models\DescribeAdminInfoResponse;
use AlibabaCloud\SDK\Lto\V20210707\Models\DescribeBizChainStatInfoRequest;
use AlibabaCloud\SDK\Lto\V20210707\Models\DescribeBizChainStatInfoResponse;
use AlibabaCloud\SDK\Lto\V20210707\Models\DescribeDashboardApiInfoRequest;
use AlibabaCloud\SDK\Lto\V20210707\Models\DescribeDashboardApiInfoResponse;
use AlibabaCloud\SDK\Lto\V20210707\Models\DescribeDashboardBaseInfoRequest;
use AlibabaCloud\SDK\Lto\V20210707\Models\DescribeDashboardBaseInfoResponse;
use AlibabaCloud\SDK\Lto\V20210707\Models\DescribeDashboardDeviceInfoRequest;
use AlibabaCloud\SDK\Lto\V20210707\Models\DescribeDashboardDeviceInfoResponse;
use AlibabaCloud\SDK\Lto\V20210707\Models\DescribeDashboardMemberApiInfoRequest;
use AlibabaCloud\SDK\Lto\V20210707\Models\DescribeDashboardMemberApiInfoResponse;
use AlibabaCloud\SDK\Lto\V20210707\Models\DescribeDashboardMemberDeviceInfoRequest;
use AlibabaCloud\SDK\Lto\V20210707\Models\DescribeDashboardMemberDeviceInfoResponse;
use AlibabaCloud\SDK\Lto\V20210707\Models\DescribeDeviceInfoRequest;
use AlibabaCloud\SDK\Lto\V20210707\Models\DescribeDeviceInfoResponse;
use AlibabaCloud\SDK\Lto\V20210707\Models\DescribeEdgeStatInfoRequest;
use AlibabaCloud\SDK\Lto\V20210707\Models\DescribeEdgeStatInfoResponse;
use AlibabaCloud\SDK\Lto\V20210707\Models\DescribeMemberBizChainStatInfoRequest;
use AlibabaCloud\SDK\Lto\V20210707\Models\DescribeMemberBizChainStatInfoResponse;
use AlibabaCloud\SDK\Lto\V20210707\Models\DescribeMemberStatInfoRequest;
use AlibabaCloud\SDK\Lto\V20210707\Models\DescribeMemberStatInfoResponse;
use AlibabaCloud\SDK\Lto\V20210707\Models\DescribeMemberTotalStatInfoRequest;
use AlibabaCloud\SDK\Lto\V20210707\Models\DescribeMemberTotalStatInfoResponse;
use AlibabaCloud\SDK\Lto\V20210707\Models\DescribePackgeInfoRequest;
use AlibabaCloud\SDK\Lto\V20210707\Models\DescribePackgeInfoResponse;
use AlibabaCloud\SDK\Lto\V20210707\Models\DescribeStatDeviceInfoRequest;
use AlibabaCloud\SDK\Lto\V20210707\Models\DescribeStatDeviceInfoResponse;
use AlibabaCloud\SDK\Lto\V20210707\Models\DescribeStatMemberDeviceInfoRequest;
use AlibabaCloud\SDK\Lto\V20210707\Models\DescribeStatMemberDeviceInfoResponse;
use AlibabaCloud\SDK\Lto\V20210707\Models\DescribeTotalStatInfoRequest;
use AlibabaCloud\SDK\Lto\V20210707\Models\DescribeTotalStatInfoResponse;
use AlibabaCloud\SDK\Lto\V20210707\Models\DisableDeviceGroupRequest;
use AlibabaCloud\SDK\Lto\V20210707\Models\DisableDeviceGroupResponse;
use AlibabaCloud\SDK\Lto\V20210707\Models\DisableDeviceRequest;
use AlibabaCloud\SDK\Lto\V20210707\Models\DisableDeviceResponse;
use AlibabaCloud\SDK\Lto\V20210707\Models\DownloadPrivacyKeyRequest;
use AlibabaCloud\SDK\Lto\V20210707\Models\DownloadPrivacyKeyResponse;
use AlibabaCloud\SDK\Lto\V20210707\Models\EnableDeviceGroupRequest;
use AlibabaCloud\SDK\Lto\V20210707\Models\EnableDeviceGroupResponse;
use AlibabaCloud\SDK\Lto\V20210707\Models\EnableDeviceRequest;
use AlibabaCloud\SDK\Lto\V20210707\Models\EnableDeviceResponse;
use AlibabaCloud\SDK\Lto\V20210707\Models\FreezeMemberRequest;
use AlibabaCloud\SDK\Lto\V20210707\Models\FreezeMemberResponse;
use AlibabaCloud\SDK\Lto\V20210707\Models\GetEdgeTotalDeviceCountRequest;
use AlibabaCloud\SDK\Lto\V20210707\Models\GetEdgeTotalDeviceCountResponse;
use AlibabaCloud\SDK\Lto\V20210707\Models\ListAllAdminRequest;
use AlibabaCloud\SDK\Lto\V20210707\Models\ListAllAdminResponse;
use AlibabaCloud\SDK\Lto\V20210707\Models\ListAllBizChainContractRequest;
use AlibabaCloud\SDK\Lto\V20210707\Models\ListAllBizChainContractResponse;
use AlibabaCloud\SDK\Lto\V20210707\Models\ListAllBizChainRequest;
use AlibabaCloud\SDK\Lto\V20210707\Models\ListAllBizChainResponse;
use AlibabaCloud\SDK\Lto\V20210707\Models\ListAllDeviceGroupRequest;
use AlibabaCloud\SDK\Lto\V20210707\Models\ListAllDeviceGroupResponse;
use AlibabaCloud\SDK\Lto\V20210707\Models\ListAllMemberRequest;
use AlibabaCloud\SDK\Lto\V20210707\Models\ListAllMemberResponse;
use AlibabaCloud\SDK\Lto\V20210707\Models\ListAllPrivacyAlgorithmRequest;
use AlibabaCloud\SDK\Lto\V20210707\Models\ListAllPrivacyAlgorithmResponse;
use AlibabaCloud\SDK\Lto\V20210707\Models\ListAllPrivacyRuleRequest;
use AlibabaCloud\SDK\Lto\V20210707\Models\ListAllPrivacyRuleResponse;
use AlibabaCloud\SDK\Lto\V20210707\Models\ListAllProductKeyRequest;
use AlibabaCloud\SDK\Lto\V20210707\Models\ListAllProductKeyResponse;
use AlibabaCloud\SDK\Lto\V20210707\Models\ListAllSystemContractRequest;
use AlibabaCloud\SDK\Lto\V20210707\Models\ListAllSystemContractResponse;
use AlibabaCloud\SDK\Lto\V20210707\Models\ListBaaSAntChainConsortiumRequest;
use AlibabaCloud\SDK\Lto\V20210707\Models\ListBaaSAntChainConsortiumResponse;
use AlibabaCloud\SDK\Lto\V20210707\Models\ListBaaSAntChainPeerRequest;
use AlibabaCloud\SDK\Lto\V20210707\Models\ListBaaSAntChainPeerResponse;
use AlibabaCloud\SDK\Lto\V20210707\Models\ListBaaSAntChainRequest;
use AlibabaCloud\SDK\Lto\V20210707\Models\ListBaaSAntChainResponse;
use AlibabaCloud\SDK\Lto\V20210707\Models\ListBaaSFabricChannelRequest;
use AlibabaCloud\SDK\Lto\V20210707\Models\ListBaaSFabricChannelResponse;
use AlibabaCloud\SDK\Lto\V20210707\Models\ListBaaSFabricConsortiumRequest;
use AlibabaCloud\SDK\Lto\V20210707\Models\ListBaaSFabricConsortiumResponse;
use AlibabaCloud\SDK\Lto\V20210707\Models\ListBaaSFabricOrganizationRequest;
use AlibabaCloud\SDK\Lto\V20210707\Models\ListBaaSFabricOrganizationResponse;
use AlibabaCloud\SDK\Lto\V20210707\Models\ListBizChainDataRequest;
use AlibabaCloud\SDK\Lto\V20210707\Models\ListBizChainDataResponse;
use AlibabaCloud\SDK\Lto\V20210707\Models\ListBizChainRequest;
use AlibabaCloud\SDK\Lto\V20210707\Models\ListBizChainResponse;
use AlibabaCloud\SDK\Lto\V20210707\Models\ListDeviceGroupAuthorizedBizChainRequest;
use AlibabaCloud\SDK\Lto\V20210707\Models\ListDeviceGroupAuthorizedBizChainResponse;
use AlibabaCloud\SDK\Lto\V20210707\Models\ListDeviceGroupRequest;
use AlibabaCloud\SDK\Lto\V20210707\Models\ListDeviceGroupResponse;
use AlibabaCloud\SDK\Lto\V20210707\Models\ListDeviceRequest;
use AlibabaCloud\SDK\Lto\V20210707\Models\ListDeviceResponse;
use AlibabaCloud\SDK\Lto\V20210707\Models\ListEdgeDeviceGroupRequest;
use AlibabaCloud\SDK\Lto\V20210707\Models\ListEdgeDeviceGroupResponse;
use AlibabaCloud\SDK\Lto\V20210707\Models\ListEdgeDeviceRequest;
use AlibabaCloud\SDK\Lto\V20210707\Models\ListEdgeDeviceResponse;
use AlibabaCloud\SDK\Lto\V20210707\Models\ListMemberAccessRecordRequest;
use AlibabaCloud\SDK\Lto\V20210707\Models\ListMemberAccessRecordResponse;
use AlibabaCloud\SDK\Lto\V20210707\Models\ListMemberAuthorizedBizChainRequest;
use AlibabaCloud\SDK\Lto\V20210707\Models\ListMemberAuthorizedBizChainResponse;
use AlibabaCloud\SDK\Lto\V20210707\Models\ListMemberRequest;
use AlibabaCloud\SDK\Lto\V20210707\Models\ListMemberResponse;
use AlibabaCloud\SDK\Lto\V20210707\Models\ListPrivacyRuleRequest;
use AlibabaCloud\SDK\Lto\V20210707\Models\ListPrivacyRuleResponse;
use AlibabaCloud\SDK\Lto\V20210707\Models\ListPrivacyRuleSharedMemberRequest;
use AlibabaCloud\SDK\Lto\V20210707\Models\ListPrivacyRuleSharedMemberResponse;
use AlibabaCloud\SDK\Lto\V20210707\Models\ListRouteRuleRequest;
use AlibabaCloud\SDK\Lto\V20210707\Models\ListRouteRuleResponse;
use AlibabaCloud\SDK\Lto\V20210707\Models\QueryBlockchainDataRequest;
use AlibabaCloud\SDK\Lto\V20210707\Models\QueryBlockchainDataResponse;
use AlibabaCloud\SDK\Lto\V20210707\Models\QueryBlockchainMetadataRequest;
use AlibabaCloud\SDK\Lto\V20210707\Models\QueryBlockchainMetadataResponse;
use AlibabaCloud\SDK\Lto\V20210707\Models\SharePrivacyRuleRequest;
use AlibabaCloud\SDK\Lto\V20210707\Models\SharePrivacyRuleResponse;
use AlibabaCloud\SDK\Lto\V20210707\Models\UnFreezeMemberRequest;
use AlibabaCloud\SDK\Lto\V20210707\Models\UnFreezeMemberResponse;
use AlibabaCloud\SDK\Lto\V20210707\Models\UpdateBizChainRequest;
use AlibabaCloud\SDK\Lto\V20210707\Models\UpdateBizChainResponse;
use AlibabaCloud\SDK\Lto\V20210707\Models\UpdateMemberRequest;
use AlibabaCloud\SDK\Lto\V20210707\Models\UpdateMemberResponse;
use AlibabaCloud\SDK\Lto\V20210707\Models\UpdatePrivacyRuleRequest;
use AlibabaCloud\SDK\Lto\V20210707\Models\UpdatePrivacyRuleResponse;
use AlibabaCloud\SDK\Lto\V20210707\Models\UpdateRouteRuleRequest;
use AlibabaCloud\SDK\Lto\V20210707\Models\UpdateRouteRuleResponse;
use AlibabaCloud\SDK\Lto\V20210707\Models\UploadIoTDataToBlockchainRequest;
use AlibabaCloud\SDK\Lto\V20210707\Models\UploadIoTDataToBlockchainResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Lto extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('lto', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param request - AddBaaSAntChainBizChainRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddBaaSAntChainBizChainResponse
     *
     * @param AddBaaSAntChainBizChainRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return AddBaaSAntChainBizChainResponse
     */
    public function addBaaSAntChainBizChainWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->baaSAntChainChainId) {
            @$query['BaaSAntChainChainId'] = $request->baaSAntChainChainId;
        }

        if (null !== $request->baaSAntChainConsortiumId) {
            @$query['BaaSAntChainConsortiumId'] = $request->baaSAntChainConsortiumId;
        }

        if (null !== $request->caCert) {
            @$query['CaCert'] = $request->caCert;
        }

        if (null !== $request->caCertPassword) {
            @$query['CaCertPassword'] = $request->caCertPassword;
        }

        if (null !== $request->clientCert) {
            @$query['ClientCert'] = $request->clientCert;
        }

        if (null !== $request->clientKey) {
            @$query['ClientKey'] = $request->clientKey;
        }

        if (null !== $request->clientKeyPassword) {
            @$query['ClientKeyPassword'] = $request->clientKeyPassword;
        }

        if (null !== $request->contractTemplateIdList) {
            @$query['ContractTemplateIdList'] = $request->contractTemplateIdList;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->nodeNameList) {
            @$query['NodeNameList'] = $request->nodeNameList;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->remark) {
            @$query['Remark'] = $request->remark;
        }

        if (null !== $request->userKey) {
            @$query['UserKey'] = $request->userKey;
        }

        if (null !== $request->userKeyPassword) {
            @$query['UserKeyPassword'] = $request->userKeyPassword;
        }

        if (null !== $request->userName) {
            @$query['UserName'] = $request->userName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddBaaSAntChainBizChain',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddBaaSAntChainBizChainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - AddBaaSAntChainBizChainRequest
     *
     * @returns AddBaaSAntChainBizChainResponse
     *
     * @param AddBaaSAntChainBizChainRequest $request
     *
     * @return AddBaaSAntChainBizChainResponse
     */
    public function addBaaSAntChainBizChain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addBaaSAntChainBizChainWithOptions($request, $runtime);
    }

    /**
     * @param request - AddBaaSFabricBizChainRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddBaaSFabricBizChainResponse
     *
     * @param AddBaaSFabricBizChainRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return AddBaaSFabricBizChainResponse
     */
    public function addBaaSFabricBizChainWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->baaSFabricChannelId) {
            @$query['BaaSFabricChannelId'] = $request->baaSFabricChannelId;
        }

        if (null !== $request->baaSFabricConsortiumId) {
            @$query['BaaSFabricConsortiumId'] = $request->baaSFabricConsortiumId;
        }

        if (null !== $request->baaSFabricOrganizationId) {
            @$query['BaaSFabricOrganizationId'] = $request->baaSFabricOrganizationId;
        }

        if (null !== $request->contractTemplateIdList) {
            @$query['ContractTemplateIdList'] = $request->contractTemplateIdList;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->remark) {
            @$query['Remark'] = $request->remark;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddBaaSFabricBizChain',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddBaaSFabricBizChainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - AddBaaSFabricBizChainRequest
     *
     * @returns AddBaaSFabricBizChainResponse
     *
     * @param AddBaaSFabricBizChainRequest $request
     *
     * @return AddBaaSFabricBizChainResponse
     */
    public function addBaaSFabricBizChain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addBaaSFabricBizChainWithOptions($request, $runtime);
    }

    /**
     * @param request - AddBsnFabricBizChainRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddBsnFabricBizChainResponse
     *
     * @param AddBsnFabricBizChainRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return AddBsnFabricBizChainResponse
     */
    public function addBsnFabricBizChainWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appCode) {
            @$query['AppCode'] = $request->appCode;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->nodeList) {
            @$query['NodeList'] = $request->nodeList;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->remark) {
            @$query['Remark'] = $request->remark;
        }

        if (null !== $request->userCode) {
            @$query['UserCode'] = $request->userCode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddBsnFabricBizChain',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddBsnFabricBizChainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - AddBsnFabricBizChainRequest
     *
     * @returns AddBsnFabricBizChainResponse
     *
     * @param AddBsnFabricBizChainRequest $request
     *
     * @return AddBsnFabricBizChainResponse
     */
    public function addBsnFabricBizChain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addBsnFabricBizChainWithOptions($request, $runtime);
    }

    /**
     * 添加设备组.
     *
     * @param request - AddDeviceGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddDeviceGroupResponse
     *
     * @param AddDeviceGroupRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return AddDeviceGroupResponse
     */
    public function addDeviceGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->authorizedCount) {
            @$query['AuthorizedCount'] = $request->authorizedCount;
        }

        if (null !== $request->productKey) {
            @$query['ProductKey'] = $request->productKey;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->remark) {
            @$query['Remark'] = $request->remark;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddDeviceGroup',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddDeviceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 添加设备组.
     *
     * @param request - AddDeviceGroupRequest
     *
     * @returns AddDeviceGroupResponse
     *
     * @param AddDeviceGroupRequest $request
     *
     * @return AddDeviceGroupResponse
     */
    public function addDeviceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addDeviceGroupWithOptions($request, $runtime);
    }

    /**
     * 添加成员.
     *
     * @param request - AddMemberRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddMemberResponse
     *
     * @param AddMemberRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return AddMemberResponse
     */
    public function addMemberWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->authorizedCount) {
            @$query['AuthorizedCount'] = $request->authorizedCount;
        }

        if (null !== $request->authorizedDeviceCount) {
            @$query['AuthorizedDeviceCount'] = $request->authorizedDeviceCount;
        }

        if (null !== $request->contactor) {
            @$query['Contactor'] = $request->contactor;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->remark) {
            @$query['Remark'] = $request->remark;
        }

        if (null !== $request->telephony) {
            @$query['Telephony'] = $request->telephony;
        }

        if (null !== $request->uid) {
            @$query['Uid'] = $request->uid;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddMember',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddMemberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 添加成员.
     *
     * @param request - AddMemberRequest
     *
     * @returns AddMemberResponse
     *
     * @param AddMemberRequest $request
     *
     * @return AddMemberResponse
     */
    public function addMember($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addMemberWithOptions($request, $runtime);
    }

    /**
     * @param request - AddPrivacyRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddPrivacyRuleResponse
     *
     * @param AddPrivacyRuleRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return AddPrivacyRuleResponse
     */
    public function addPrivacyRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->algImpl) {
            @$query['AlgImpl'] = $request->algImpl;
        }

        if (null !== $request->algType) {
            @$query['AlgType'] = $request->algType;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->remark) {
            @$query['Remark'] = $request->remark;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddPrivacyRule',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddPrivacyRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - AddPrivacyRuleRequest
     *
     * @returns AddPrivacyRuleResponse
     *
     * @param AddPrivacyRuleRequest $request
     *
     * @return AddPrivacyRuleResponse
     */
    public function addPrivacyRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addPrivacyRuleWithOptions($request, $runtime);
    }

    /**
     * @param request - AddRouteRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddRouteRuleResponse
     *
     * @param AddRouteRuleRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return AddRouteRuleResponse
     */
    public function addRouteRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizChainId) {
            @$query['BizChainId'] = $request->bizChainId;
        }

        if (null !== $request->chainUpMode) {
            @$query['ChainUpMode'] = $request->chainUpMode;
        }

        if (null !== $request->contractName) {
            @$query['ContractName'] = $request->contractName;
        }

        if (null !== $request->contractTemplateId) {
            @$query['ContractTemplateId'] = $request->contractTemplateId;
        }

        if (null !== $request->deviceGroupId) {
            @$query['DeviceGroupId'] = $request->deviceGroupId;
        }

        if (null !== $request->invokeType) {
            @$query['InvokeType'] = $request->invokeType;
        }

        if (null !== $request->privacyRuleId) {
            @$query['PrivacyRuleId'] = $request->privacyRuleId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->remark) {
            @$query['Remark'] = $request->remark;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddRouteRule',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddRouteRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - AddRouteRuleRequest
     *
     * @returns AddRouteRuleResponse
     *
     * @param AddRouteRuleRequest $request
     *
     * @return AddRouteRuleResponse
     */
    public function addRouteRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addRouteRuleWithOptions($request, $runtime);
    }

    /**
     * 成员同意接入.
     *
     * @param request - AgreeMemberAccessRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AgreeMemberAccessResponse
     *
     * @param AgreeMemberAccessRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return AgreeMemberAccessResponse
     */
    public function agreeMemberAccessWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->memberAccountId) {
            @$query['MemberAccountId'] = $request->memberAccountId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AgreeMemberAccess',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AgreeMemberAccessResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 成员同意接入.
     *
     * @param request - AgreeMemberAccessRequest
     *
     * @returns AgreeMemberAccessResponse
     *
     * @param AgreeMemberAccessRequest $request
     *
     * @return AgreeMemberAccessResponse
     */
    public function agreeMemberAccess($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->agreeMemberAccessWithOptions($request, $runtime);
    }

    /**
     * @param request - AuthorizeBaaSRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AuthorizeBaaSResponse
     *
     * @param AuthorizeBaaSRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return AuthorizeBaaSResponse
     */
    public function authorizeBaaSWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AuthorizeBaaS',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AuthorizeBaaSResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - AuthorizeBaaSRequest
     *
     * @returns AuthorizeBaaSResponse
     *
     * @param AuthorizeBaaSRequest $request
     *
     * @return AuthorizeBaaSResponse
     */
    public function authorizeBaaS($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->authorizeBaaSWithOptions($request, $runtime);
    }

    /**
     * @param request - AuthorizeDeviceGroupBizChainRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AuthorizeDeviceGroupBizChainResponse
     *
     * @param AuthorizeDeviceGroupBizChainRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return AuthorizeDeviceGroupBizChainResponse
     */
    public function authorizeDeviceGroupBizChainWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizChainIdList) {
            @$query['BizChainIdList'] = $request->bizChainIdList;
        }

        if (null !== $request->deviceGroupId) {
            @$query['DeviceGroupId'] = $request->deviceGroupId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AuthorizeDeviceGroupBizChain',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AuthorizeDeviceGroupBizChainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - AuthorizeDeviceGroupBizChainRequest
     *
     * @returns AuthorizeDeviceGroupBizChainResponse
     *
     * @param AuthorizeDeviceGroupBizChainRequest $request
     *
     * @return AuthorizeDeviceGroupBizChainResponse
     */
    public function authorizeDeviceGroupBizChain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->authorizeDeviceGroupBizChainWithOptions($request, $runtime);
    }

    /**
     * @param request - AuthorizeMemberBizChainRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AuthorizeMemberBizChainResponse
     *
     * @param AuthorizeMemberBizChainRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return AuthorizeMemberBizChainResponse
     */
    public function authorizeMemberBizChainWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizChainInfo) {
            @$query['BizChainInfo'] = $request->bizChainInfo;
        }

        if (null !== $request->memberId) {
            @$query['MemberId'] = $request->memberId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AuthorizeMemberBizChain',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AuthorizeMemberBizChainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - AuthorizeMemberBizChainRequest
     *
     * @returns AuthorizeMemberBizChainResponse
     *
     * @param AuthorizeMemberBizChainRequest $request
     *
     * @return AuthorizeMemberBizChainResponse
     */
    public function authorizeMemberBizChain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->authorizeMemberBizChainWithOptions($request, $runtime);
    }

    /**
     * @param request - DeletePrivacyRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeletePrivacyRuleResponse
     *
     * @param DeletePrivacyRuleRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeletePrivacyRuleResponse
     */
    public function deletePrivacyRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->privacyRuleId) {
            @$query['PrivacyRuleId'] = $request->privacyRuleId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeletePrivacyRule',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeletePrivacyRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DeletePrivacyRuleRequest
     *
     * @returns DeletePrivacyRuleResponse
     *
     * @param DeletePrivacyRuleRequest $request
     *
     * @return DeletePrivacyRuleResponse
     */
    public function deletePrivacyRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deletePrivacyRuleWithOptions($request, $runtime);
    }

    /**
     * @param request - DeleteRouteRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteRouteRuleResponse
     *
     * @param DeleteRouteRuleRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteRouteRuleResponse
     */
    public function deleteRouteRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->routeRuleId) {
            @$query['RouteRuleId'] = $request->routeRuleId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteRouteRule',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteRouteRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DeleteRouteRuleRequest
     *
     * @returns DeleteRouteRuleResponse
     *
     * @param DeleteRouteRuleRequest $request
     *
     * @return DeleteRouteRuleResponse
     */
    public function deleteRouteRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRouteRuleWithOptions($request, $runtime);
    }

    /**
     * 成员拒绝接入.
     *
     * @param request - DeniedMemberAccessRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeniedMemberAccessResponse
     *
     * @param DeniedMemberAccessRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeniedMemberAccessResponse
     */
    public function deniedMemberAccessWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->memberAccountId) {
            @$query['MemberAccountId'] = $request->memberAccountId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeniedMemberAccess',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeniedMemberAccessResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 成员拒绝接入.
     *
     * @param request - DeniedMemberAccessRequest
     *
     * @returns DeniedMemberAccessResponse
     *
     * @param DeniedMemberAccessRequest $request
     *
     * @return DeniedMemberAccessResponse
     */
    public function deniedMemberAccess($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deniedMemberAccessWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeAccountRoleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAccountRoleResponse
     *
     * @param DescribeAccountRoleRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeAccountRoleResponse
     */
    public function describeAccountRoleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAccountRole',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAccountRoleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeAccountRoleRequest
     *
     * @returns DescribeAccountRoleResponse
     *
     * @param DescribeAccountRoleRequest $request
     *
     * @return DescribeAccountRoleResponse
     */
    public function describeAccountRole($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAccountRoleWithOptions($request, $runtime);
    }

    /**
     * 查询管理方信息.
     *
     * @param request - DescribeAdminInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAdminInfoResponse
     *
     * @param DescribeAdminInfoRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeAdminInfoResponse
     */
    public function describeAdminInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAdminInfo',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAdminInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询管理方信息.
     *
     * @param request - DescribeAdminInfoRequest
     *
     * @returns DescribeAdminInfoResponse
     *
     * @param DescribeAdminInfoRequest $request
     *
     * @return DescribeAdminInfoResponse
     */
    public function describeAdminInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAdminInfoWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeBizChainStatInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeBizChainStatInfoResponse
     *
     * @param DescribeBizChainStatInfoRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeBizChainStatInfoResponse
     */
    public function describeBizChainStatInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeBizChainStatInfo',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeBizChainStatInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeBizChainStatInfoRequest
     *
     * @returns DescribeBizChainStatInfoResponse
     *
     * @param DescribeBizChainStatInfoRequest $request
     *
     * @return DescribeBizChainStatInfoResponse
     */
    public function describeBizChainStatInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBizChainStatInfoWithOptions($request, $runtime);
    }

    /**
     * 查询概览API信息.
     *
     * @param request - DescribeDashboardApiInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDashboardApiInfoResponse
     *
     * @param DescribeDashboardApiInfoRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeDashboardApiInfoResponse
     */
    public function describeDashboardApiInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDashboardApiInfo',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDashboardApiInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询概览API信息.
     *
     * @param request - DescribeDashboardApiInfoRequest
     *
     * @returns DescribeDashboardApiInfoResponse
     *
     * @param DescribeDashboardApiInfoRequest $request
     *
     * @return DescribeDashboardApiInfoResponse
     */
    public function describeDashboardApiInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDashboardApiInfoWithOptions($request, $runtime);
    }

    /**
     * 查询概览信息.
     *
     * @param request - DescribeDashboardBaseInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDashboardBaseInfoResponse
     *
     * @param DescribeDashboardBaseInfoRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeDashboardBaseInfoResponse
     */
    public function describeDashboardBaseInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDashboardBaseInfo',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDashboardBaseInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询概览信息.
     *
     * @param request - DescribeDashboardBaseInfoRequest
     *
     * @returns DescribeDashboardBaseInfoResponse
     *
     * @param DescribeDashboardBaseInfoRequest $request
     *
     * @return DescribeDashboardBaseInfoResponse
     */
    public function describeDashboardBaseInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDashboardBaseInfoWithOptions($request, $runtime);
    }

    /**
     * 查询概览设备信息.
     *
     * @param request - DescribeDashboardDeviceInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDashboardDeviceInfoResponse
     *
     * @param DescribeDashboardDeviceInfoRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeDashboardDeviceInfoResponse
     */
    public function describeDashboardDeviceInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDashboardDeviceInfo',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDashboardDeviceInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询概览设备信息.
     *
     * @param request - DescribeDashboardDeviceInfoRequest
     *
     * @returns DescribeDashboardDeviceInfoResponse
     *
     * @param DescribeDashboardDeviceInfoRequest $request
     *
     * @return DescribeDashboardDeviceInfoResponse
     */
    public function describeDashboardDeviceInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDashboardDeviceInfoWithOptions($request, $runtime);
    }

    /**
     * 查询概览成员API信息.
     *
     * @param request - DescribeDashboardMemberApiInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDashboardMemberApiInfoResponse
     *
     * @param DescribeDashboardMemberApiInfoRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeDashboardMemberApiInfoResponse
     */
    public function describeDashboardMemberApiInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizChainId) {
            @$query['BizChainId'] = $request->bizChainId;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDashboardMemberApiInfo',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDashboardMemberApiInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询概览成员API信息.
     *
     * @param request - DescribeDashboardMemberApiInfoRequest
     *
     * @returns DescribeDashboardMemberApiInfoResponse
     *
     * @param DescribeDashboardMemberApiInfoRequest $request
     *
     * @return DescribeDashboardMemberApiInfoResponse
     */
    public function describeDashboardMemberApiInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDashboardMemberApiInfoWithOptions($request, $runtime);
    }

    /**
     * 查询概览成员设备信息.
     *
     * @param request - DescribeDashboardMemberDeviceInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDashboardMemberDeviceInfoResponse
     *
     * @param DescribeDashboardMemberDeviceInfoRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeDashboardMemberDeviceInfoResponse
     */
    public function describeDashboardMemberDeviceInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDashboardMemberDeviceInfo',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDashboardMemberDeviceInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询概览成员设备信息.
     *
     * @param request - DescribeDashboardMemberDeviceInfoRequest
     *
     * @returns DescribeDashboardMemberDeviceInfoResponse
     *
     * @param DescribeDashboardMemberDeviceInfoRequest $request
     *
     * @return DescribeDashboardMemberDeviceInfoResponse
     */
    public function describeDashboardMemberDeviceInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDashboardMemberDeviceInfoWithOptions($request, $runtime);
    }

    /**
     * 查询设备信息.
     *
     * @param request - DescribeDeviceInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDeviceInfoResponse
     *
     * @param DescribeDeviceInfoRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeDeviceInfoResponse
     */
    public function describeDeviceInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDeviceInfo',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDeviceInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询设备信息.
     *
     * @param request - DescribeDeviceInfoRequest
     *
     * @returns DescribeDeviceInfoResponse
     *
     * @param DescribeDeviceInfoRequest $request
     *
     * @return DescribeDeviceInfoResponse
     */
    public function describeDeviceInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDeviceInfoWithOptions($request, $runtime);
    }

    /**
     * 查询边缘一体机统计信息.
     *
     * @param request - DescribeEdgeStatInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeEdgeStatInfoResponse
     *
     * @param DescribeEdgeStatInfoRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeEdgeStatInfoResponse
     */
    public function describeEdgeStatInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->edgeDn) {
            @$query['EdgeDn'] = $request->edgeDn;
        }

        if (null !== $request->edgePk) {
            @$query['EdgePk'] = $request->edgePk;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeEdgeStatInfo',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeEdgeStatInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询边缘一体机统计信息.
     *
     * @param request - DescribeEdgeStatInfoRequest
     *
     * @returns DescribeEdgeStatInfoResponse
     *
     * @param DescribeEdgeStatInfoRequest $request
     *
     * @return DescribeEdgeStatInfoResponse
     */
    public function describeEdgeStatInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEdgeStatInfoWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeMemberBizChainStatInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeMemberBizChainStatInfoResponse
     *
     * @param DescribeMemberBizChainStatInfoRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeMemberBizChainStatInfoResponse
     */
    public function describeMemberBizChainStatInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountId) {
            @$query['AccountId'] = $request->accountId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeMemberBizChainStatInfo',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeMemberBizChainStatInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeMemberBizChainStatInfoRequest
     *
     * @returns DescribeMemberBizChainStatInfoResponse
     *
     * @param DescribeMemberBizChainStatInfoRequest $request
     *
     * @return DescribeMemberBizChainStatInfoResponse
     */
    public function describeMemberBizChainStatInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMemberBizChainStatInfoWithOptions($request, $runtime);
    }

    /**
     * 查询统计成员API信息.
     *
     * @param request - DescribeMemberStatInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeMemberStatInfoResponse
     *
     * @param DescribeMemberStatInfoRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeMemberStatInfoResponse
     */
    public function describeMemberStatInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizChainId) {
            @$query['BizChainId'] = $request->bizChainId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeMemberStatInfo',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeMemberStatInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询统计成员API信息.
     *
     * @param request - DescribeMemberStatInfoRequest
     *
     * @returns DescribeMemberStatInfoResponse
     *
     * @param DescribeMemberStatInfoRequest $request
     *
     * @return DescribeMemberStatInfoResponse
     */
    public function describeMemberStatInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMemberStatInfoWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeMemberTotalStatInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeMemberTotalStatInfoResponse
     *
     * @param DescribeMemberTotalStatInfoRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeMemberTotalStatInfoResponse
     */
    public function describeMemberTotalStatInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountId) {
            @$query['AccountId'] = $request->accountId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeMemberTotalStatInfo',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeMemberTotalStatInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeMemberTotalStatInfoRequest
     *
     * @returns DescribeMemberTotalStatInfoResponse
     *
     * @param DescribeMemberTotalStatInfoRequest $request
     *
     * @return DescribeMemberTotalStatInfoResponse
     */
    public function describeMemberTotalStatInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMemberTotalStatInfoWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribePackgeInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribePackgeInfoResponse
     *
     * @param DescribePackgeInfoRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribePackgeInfoResponse
     */
    public function describePackgeInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountId) {
            @$query['AccountId'] = $request->accountId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribePackgeInfo',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribePackgeInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribePackgeInfoRequest
     *
     * @returns DescribePackgeInfoResponse
     *
     * @param DescribePackgeInfoRequest $request
     *
     * @return DescribePackgeInfoResponse
     */
    public function describePackgeInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePackgeInfoWithOptions($request, $runtime);
    }

    /**
     * 查询统计设备信息.
     *
     * @param request - DescribeStatDeviceInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeStatDeviceInfoResponse
     *
     * @param DescribeStatDeviceInfoRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeStatDeviceInfoResponse
     */
    public function describeStatDeviceInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeStatDeviceInfo',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeStatDeviceInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询统计设备信息.
     *
     * @param request - DescribeStatDeviceInfoRequest
     *
     * @returns DescribeStatDeviceInfoResponse
     *
     * @param DescribeStatDeviceInfoRequest $request
     *
     * @return DescribeStatDeviceInfoResponse
     */
    public function describeStatDeviceInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeStatDeviceInfoWithOptions($request, $runtime);
    }

    /**
     * 查询统计成员设备信息.
     *
     * @param request - DescribeStatMemberDeviceInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeStatMemberDeviceInfoResponse
     *
     * @param DescribeStatMemberDeviceInfoRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeStatMemberDeviceInfoResponse
     */
    public function describeStatMemberDeviceInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeStatMemberDeviceInfo',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeStatMemberDeviceInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询统计成员设备信息.
     *
     * @param request - DescribeStatMemberDeviceInfoRequest
     *
     * @returns DescribeStatMemberDeviceInfoResponse
     *
     * @param DescribeStatMemberDeviceInfoRequest $request
     *
     * @return DescribeStatMemberDeviceInfoResponse
     */
    public function describeStatMemberDeviceInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeStatMemberDeviceInfoWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeTotalStatInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeTotalStatInfoResponse
     *
     * @param DescribeTotalStatInfoRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeTotalStatInfoResponse
     */
    public function describeTotalStatInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeTotalStatInfo',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeTotalStatInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeTotalStatInfoRequest
     *
     * @returns DescribeTotalStatInfoResponse
     *
     * @param DescribeTotalStatInfoRequest $request
     *
     * @return DescribeTotalStatInfoResponse
     */
    public function describeTotalStatInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTotalStatInfoWithOptions($request, $runtime);
    }

    /**
     * @param request - DisableDeviceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DisableDeviceResponse
     *
     * @param DisableDeviceRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DisableDeviceResponse
     */
    public function disableDeviceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->deviceId) {
            @$query['DeviceId'] = $request->deviceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DisableDevice',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DisableDeviceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DisableDeviceRequest
     *
     * @returns DisableDeviceResponse
     *
     * @param DisableDeviceRequest $request
     *
     * @return DisableDeviceResponse
     */
    public function disableDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableDeviceWithOptions($request, $runtime);
    }

    /**
     * @param request - DisableDeviceGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DisableDeviceGroupResponse
     *
     * @param DisableDeviceGroupRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DisableDeviceGroupResponse
     */
    public function disableDeviceGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->deviceGroupId) {
            @$query['DeviceGroupId'] = $request->deviceGroupId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DisableDeviceGroup',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DisableDeviceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DisableDeviceGroupRequest
     *
     * @returns DisableDeviceGroupResponse
     *
     * @param DisableDeviceGroupRequest $request
     *
     * @return DisableDeviceGroupResponse
     */
    public function disableDeviceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableDeviceGroupWithOptions($request, $runtime);
    }

    /**
     * @param request - DownloadPrivacyKeyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DownloadPrivacyKeyResponse
     *
     * @param DownloadPrivacyKeyRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DownloadPrivacyKeyResponse
     */
    public function downloadPrivacyKeyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DownloadPrivacyKey',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DownloadPrivacyKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DownloadPrivacyKeyRequest
     *
     * @returns DownloadPrivacyKeyResponse
     *
     * @param DownloadPrivacyKeyRequest $request
     *
     * @return DownloadPrivacyKeyResponse
     */
    public function downloadPrivacyKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->downloadPrivacyKeyWithOptions($request, $runtime);
    }

    /**
     * @param request - EnableDeviceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnableDeviceResponse
     *
     * @param EnableDeviceRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return EnableDeviceResponse
     */
    public function enableDeviceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->deviceId) {
            @$query['DeviceId'] = $request->deviceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'EnableDevice',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnableDeviceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - EnableDeviceRequest
     *
     * @returns EnableDeviceResponse
     *
     * @param EnableDeviceRequest $request
     *
     * @return EnableDeviceResponse
     */
    public function enableDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableDeviceWithOptions($request, $runtime);
    }

    /**
     * @param request - EnableDeviceGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnableDeviceGroupResponse
     *
     * @param EnableDeviceGroupRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return EnableDeviceGroupResponse
     */
    public function enableDeviceGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->deviceGroupId) {
            @$query['DeviceGroupId'] = $request->deviceGroupId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'EnableDeviceGroup',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnableDeviceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - EnableDeviceGroupRequest
     *
     * @returns EnableDeviceGroupResponse
     *
     * @param EnableDeviceGroupRequest $request
     *
     * @return EnableDeviceGroupResponse
     */
    public function enableDeviceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableDeviceGroupWithOptions($request, $runtime);
    }

    /**
     * @param request - FreezeMemberRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns FreezeMemberResponse
     *
     * @param FreezeMemberRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return FreezeMemberResponse
     */
    public function freezeMemberWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->memberId) {
            @$query['MemberId'] = $request->memberId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'FreezeMember',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return FreezeMemberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - FreezeMemberRequest
     *
     * @returns FreezeMemberResponse
     *
     * @param FreezeMemberRequest $request
     *
     * @return FreezeMemberResponse
     */
    public function freezeMember($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->freezeMemberWithOptions($request, $runtime);
    }

    /**
     * @param request - GetEdgeTotalDeviceCountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetEdgeTotalDeviceCountResponse
     *
     * @param GetEdgeTotalDeviceCountRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetEdgeTotalDeviceCountResponse
     */
    public function getEdgeTotalDeviceCountWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetEdgeTotalDeviceCount',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetEdgeTotalDeviceCountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetEdgeTotalDeviceCountRequest
     *
     * @returns GetEdgeTotalDeviceCountResponse
     *
     * @param GetEdgeTotalDeviceCountRequest $request
     *
     * @return GetEdgeTotalDeviceCountResponse
     */
    public function getEdgeTotalDeviceCount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getEdgeTotalDeviceCountWithOptions($request, $runtime);
    }

    /**
     * @param request - ListAllAdminRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAllAdminResponse
     *
     * @param ListAllAdminRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListAllAdminResponse
     */
    public function listAllAdminWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAllAdmin',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAllAdminResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ListAllAdminRequest
     *
     * @returns ListAllAdminResponse
     *
     * @param ListAllAdminRequest $request
     *
     * @return ListAllAdminResponse
     */
    public function listAllAdmin($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAllAdminWithOptions($request, $runtime);
    }

    /**
     * @param request - ListAllBizChainRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAllBizChainResponse
     *
     * @param ListAllBizChainRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListAllBizChainResponse
     */
    public function listAllBizChainWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAllBizChain',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAllBizChainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ListAllBizChainRequest
     *
     * @returns ListAllBizChainResponse
     *
     * @param ListAllBizChainRequest $request
     *
     * @return ListAllBizChainResponse
     */
    public function listAllBizChain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAllBizChainWithOptions($request, $runtime);
    }

    /**
     * @param request - ListAllBizChainContractRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAllBizChainContractResponse
     *
     * @param ListAllBizChainContractRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListAllBizChainContractResponse
     */
    public function listAllBizChainContractWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizChainId) {
            @$query['BizChainId'] = $request->bizChainId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAllBizChainContract',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAllBizChainContractResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ListAllBizChainContractRequest
     *
     * @returns ListAllBizChainContractResponse
     *
     * @param ListAllBizChainContractRequest $request
     *
     * @return ListAllBizChainContractResponse
     */
    public function listAllBizChainContract($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAllBizChainContractWithOptions($request, $runtime);
    }

    /**
     * @param request - ListAllDeviceGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAllDeviceGroupResponse
     *
     * @param ListAllDeviceGroupRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListAllDeviceGroupResponse
     */
    public function listAllDeviceGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAllDeviceGroup',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAllDeviceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ListAllDeviceGroupRequest
     *
     * @returns ListAllDeviceGroupResponse
     *
     * @param ListAllDeviceGroupRequest $request
     *
     * @return ListAllDeviceGroupResponse
     */
    public function listAllDeviceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAllDeviceGroupWithOptions($request, $runtime);
    }

    /**
     * @param request - ListAllMemberRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAllMemberResponse
     *
     * @param ListAllMemberRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListAllMemberResponse
     */
    public function listAllMemberWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAllMember',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAllMemberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ListAllMemberRequest
     *
     * @returns ListAllMemberResponse
     *
     * @param ListAllMemberRequest $request
     *
     * @return ListAllMemberResponse
     */
    public function listAllMember($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAllMemberWithOptions($request, $runtime);
    }

    /**
     * @param request - ListAllPrivacyAlgorithmRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAllPrivacyAlgorithmResponse
     *
     * @param ListAllPrivacyAlgorithmRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListAllPrivacyAlgorithmResponse
     */
    public function listAllPrivacyAlgorithmWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAllPrivacyAlgorithm',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAllPrivacyAlgorithmResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ListAllPrivacyAlgorithmRequest
     *
     * @returns ListAllPrivacyAlgorithmResponse
     *
     * @param ListAllPrivacyAlgorithmRequest $request
     *
     * @return ListAllPrivacyAlgorithmResponse
     */
    public function listAllPrivacyAlgorithm($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAllPrivacyAlgorithmWithOptions($request, $runtime);
    }

    /**
     * @param request - ListAllPrivacyRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAllPrivacyRuleResponse
     *
     * @param ListAllPrivacyRuleRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListAllPrivacyRuleResponse
     */
    public function listAllPrivacyRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAllPrivacyRule',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAllPrivacyRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ListAllPrivacyRuleRequest
     *
     * @returns ListAllPrivacyRuleResponse
     *
     * @param ListAllPrivacyRuleRequest $request
     *
     * @return ListAllPrivacyRuleResponse
     */
    public function listAllPrivacyRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAllPrivacyRuleWithOptions($request, $runtime);
    }

    /**
     * @param request - ListAllProductKeyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAllProductKeyResponse
     *
     * @param ListAllProductKeyRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListAllProductKeyResponse
     */
    public function listAllProductKeyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAllProductKey',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAllProductKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ListAllProductKeyRequest
     *
     * @returns ListAllProductKeyResponse
     *
     * @param ListAllProductKeyRequest $request
     *
     * @return ListAllProductKeyResponse
     */
    public function listAllProductKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAllProductKeyWithOptions($request, $runtime);
    }

    /**
     * @param request - ListAllSystemContractRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAllSystemContractResponse
     *
     * @param ListAllSystemContractRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListAllSystemContractResponse
     */
    public function listAllSystemContractWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->blockChainType) {
            @$query['BlockChainType'] = $request->blockChainType;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAllSystemContract',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAllSystemContractResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ListAllSystemContractRequest
     *
     * @returns ListAllSystemContractResponse
     *
     * @param ListAllSystemContractRequest $request
     *
     * @return ListAllSystemContractResponse
     */
    public function listAllSystemContract($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAllSystemContractWithOptions($request, $runtime);
    }

    /**
     * @param request - ListBaaSAntChainRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListBaaSAntChainResponse
     *
     * @param ListBaaSAntChainRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListBaaSAntChainResponse
     */
    public function listBaaSAntChainWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->baaSAntChainConsortiumId) {
            @$query['BaaSAntChainConsortiumId'] = $request->baaSAntChainConsortiumId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListBaaSAntChain',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListBaaSAntChainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ListBaaSAntChainRequest
     *
     * @returns ListBaaSAntChainResponse
     *
     * @param ListBaaSAntChainRequest $request
     *
     * @return ListBaaSAntChainResponse
     */
    public function listBaaSAntChain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listBaaSAntChainWithOptions($request, $runtime);
    }

    /**
     * @param request - ListBaaSAntChainConsortiumRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListBaaSAntChainConsortiumResponse
     *
     * @param ListBaaSAntChainConsortiumRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ListBaaSAntChainConsortiumResponse
     */
    public function listBaaSAntChainConsortiumWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListBaaSAntChainConsortium',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListBaaSAntChainConsortiumResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ListBaaSAntChainConsortiumRequest
     *
     * @returns ListBaaSAntChainConsortiumResponse
     *
     * @param ListBaaSAntChainConsortiumRequest $request
     *
     * @return ListBaaSAntChainConsortiumResponse
     */
    public function listBaaSAntChainConsortium($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listBaaSAntChainConsortiumWithOptions($request, $runtime);
    }

    /**
     * @param request - ListBaaSAntChainPeerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListBaaSAntChainPeerResponse
     *
     * @param ListBaaSAntChainPeerRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListBaaSAntChainPeerResponse
     */
    public function listBaaSAntChainPeerWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->baaSAntChainChainId) {
            @$query['BaaSAntChainChainId'] = $request->baaSAntChainChainId;
        }

        if (null !== $request->baaSAntChainConsortiumId) {
            @$query['BaaSAntChainConsortiumId'] = $request->baaSAntChainConsortiumId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListBaaSAntChainPeer',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListBaaSAntChainPeerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ListBaaSAntChainPeerRequest
     *
     * @returns ListBaaSAntChainPeerResponse
     *
     * @param ListBaaSAntChainPeerRequest $request
     *
     * @return ListBaaSAntChainPeerResponse
     */
    public function listBaaSAntChainPeer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listBaaSAntChainPeerWithOptions($request, $runtime);
    }

    /**
     * @param request - ListBaaSFabricChannelRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListBaaSFabricChannelResponse
     *
     * @param ListBaaSFabricChannelRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListBaaSFabricChannelResponse
     */
    public function listBaaSFabricChannelWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->baaSFabricConsortiumId) {
            @$query['BaaSFabricConsortiumId'] = $request->baaSFabricConsortiumId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListBaaSFabricChannel',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListBaaSFabricChannelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ListBaaSFabricChannelRequest
     *
     * @returns ListBaaSFabricChannelResponse
     *
     * @param ListBaaSFabricChannelRequest $request
     *
     * @return ListBaaSFabricChannelResponse
     */
    public function listBaaSFabricChannel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listBaaSFabricChannelWithOptions($request, $runtime);
    }

    /**
     * @param request - ListBaaSFabricConsortiumRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListBaaSFabricConsortiumResponse
     *
     * @param ListBaaSFabricConsortiumRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListBaaSFabricConsortiumResponse
     */
    public function listBaaSFabricConsortiumWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListBaaSFabricConsortium',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListBaaSFabricConsortiumResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ListBaaSFabricConsortiumRequest
     *
     * @returns ListBaaSFabricConsortiumResponse
     *
     * @param ListBaaSFabricConsortiumRequest $request
     *
     * @return ListBaaSFabricConsortiumResponse
     */
    public function listBaaSFabricConsortium($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listBaaSFabricConsortiumWithOptions($request, $runtime);
    }

    /**
     * @param request - ListBaaSFabricOrganizationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListBaaSFabricOrganizationResponse
     *
     * @param ListBaaSFabricOrganizationRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ListBaaSFabricOrganizationResponse
     */
    public function listBaaSFabricOrganizationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->baaSFabricChannelId) {
            @$query['BaaSFabricChannelId'] = $request->baaSFabricChannelId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListBaaSFabricOrganization',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListBaaSFabricOrganizationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ListBaaSFabricOrganizationRequest
     *
     * @returns ListBaaSFabricOrganizationResponse
     *
     * @param ListBaaSFabricOrganizationRequest $request
     *
     * @return ListBaaSFabricOrganizationResponse
     */
    public function listBaaSFabricOrganization($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listBaaSFabricOrganizationWithOptions($request, $runtime);
    }

    /**
     * @param request - ListBizChainRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListBizChainResponse
     *
     * @param ListBizChainRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListBizChainResponse
     */
    public function listBizChainWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizChainId) {
            @$query['BizChainId'] = $request->bizChainId;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->num) {
            @$query['Num'] = $request->num;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->size) {
            @$query['Size'] = $request->size;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListBizChain',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListBizChainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ListBizChainRequest
     *
     * @returns ListBizChainResponse
     *
     * @param ListBizChainRequest $request
     *
     * @return ListBizChainResponse
     */
    public function listBizChain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listBizChainWithOptions($request, $runtime);
    }

    /**
     * @param request - ListBizChainDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListBizChainDataResponse
     *
     * @param ListBizChainDataRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListBizChainDataResponse
     */
    public function listBizChainDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizChainId) {
            @$query['BizChainId'] = $request->bizChainId;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->ioTDataDID) {
            @$query['IoTDataDID'] = $request->ioTDataDID;
        }

        if (null !== $request->memberId) {
            @$query['MemberId'] = $request->memberId;
        }

        if (null !== $request->num) {
            @$query['Num'] = $request->num;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->size) {
            @$query['Size'] = $request->size;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListBizChainData',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListBizChainDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ListBizChainDataRequest
     *
     * @returns ListBizChainDataResponse
     *
     * @param ListBizChainDataRequest $request
     *
     * @return ListBizChainDataResponse
     */
    public function listBizChainData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listBizChainDataWithOptions($request, $runtime);
    }

    /**
     * @param request - ListDeviceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDeviceResponse
     *
     * @param ListDeviceRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ListDeviceResponse
     */
    public function listDeviceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->deviceGroupId) {
            @$query['DeviceGroupId'] = $request->deviceGroupId;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->num) {
            @$query['Num'] = $request->num;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->size) {
            @$query['Size'] = $request->size;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListDevice',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListDeviceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ListDeviceRequest
     *
     * @returns ListDeviceResponse
     *
     * @param ListDeviceRequest $request
     *
     * @return ListDeviceResponse
     */
    public function listDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDeviceWithOptions($request, $runtime);
    }

    /**
     * 查询设备组列表.
     *
     * @param request - ListDeviceGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDeviceGroupResponse
     *
     * @param ListDeviceGroupRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListDeviceGroupResponse
     */
    public function listDeviceGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->memberName) {
            @$query['MemberName'] = $request->memberName;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->num) {
            @$query['Num'] = $request->num;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->size) {
            @$query['Size'] = $request->size;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListDeviceGroup',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListDeviceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询设备组列表.
     *
     * @param request - ListDeviceGroupRequest
     *
     * @returns ListDeviceGroupResponse
     *
     * @param ListDeviceGroupRequest $request
     *
     * @return ListDeviceGroupResponse
     */
    public function listDeviceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDeviceGroupWithOptions($request, $runtime);
    }

    /**
     * @param request - ListDeviceGroupAuthorizedBizChainRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDeviceGroupAuthorizedBizChainResponse
     *
     * @param ListDeviceGroupAuthorizedBizChainRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return ListDeviceGroupAuthorizedBizChainResponse
     */
    public function listDeviceGroupAuthorizedBizChainWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->deviceGroupId) {
            @$query['DeviceGroupId'] = $request->deviceGroupId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListDeviceGroupAuthorizedBizChain',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListDeviceGroupAuthorizedBizChainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ListDeviceGroupAuthorizedBizChainRequest
     *
     * @returns ListDeviceGroupAuthorizedBizChainResponse
     *
     * @param ListDeviceGroupAuthorizedBizChainRequest $request
     *
     * @return ListDeviceGroupAuthorizedBizChainResponse
     */
    public function listDeviceGroupAuthorizedBizChain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDeviceGroupAuthorizedBizChainWithOptions($request, $runtime);
    }

    /**
     * 查询边缘设备列表.
     *
     * @param request - ListEdgeDeviceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListEdgeDeviceResponse
     *
     * @param ListEdgeDeviceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListEdgeDeviceResponse
     */
    public function listEdgeDeviceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->num) {
            @$query['Num'] = $request->num;
        }

        if (null !== $request->productKey) {
            @$query['ProductKey'] = $request->productKey;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->size) {
            @$query['Size'] = $request->size;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListEdgeDevice',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListEdgeDeviceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询边缘设备列表.
     *
     * @param request - ListEdgeDeviceRequest
     *
     * @returns ListEdgeDeviceResponse
     *
     * @param ListEdgeDeviceRequest $request
     *
     * @return ListEdgeDeviceResponse
     */
    public function listEdgeDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listEdgeDeviceWithOptions($request, $runtime);
    }

    /**
     * 查询边缘设备组列表.
     *
     * @param request - ListEdgeDeviceGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListEdgeDeviceGroupResponse
     *
     * @param ListEdgeDeviceGroupRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListEdgeDeviceGroupResponse
     */
    public function listEdgeDeviceGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->num) {
            @$query['Num'] = $request->num;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->size) {
            @$query['Size'] = $request->size;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListEdgeDeviceGroup',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListEdgeDeviceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询边缘设备组列表.
     *
     * @param request - ListEdgeDeviceGroupRequest
     *
     * @returns ListEdgeDeviceGroupResponse
     *
     * @param ListEdgeDeviceGroupRequest $request
     *
     * @return ListEdgeDeviceGroupResponse
     */
    public function listEdgeDeviceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listEdgeDeviceGroupWithOptions($request, $runtime);
    }

    /**
     * 查询成员列表.
     *
     * @param request - ListMemberRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListMemberResponse
     *
     * @param ListMemberRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ListMemberResponse
     */
    public function listMemberWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->contactor) {
            @$query['Contactor'] = $request->contactor;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->num) {
            @$query['Num'] = $request->num;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->size) {
            @$query['Size'] = $request->size;
        }

        if (null !== $request->uid) {
            @$query['Uid'] = $request->uid;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListMember',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListMemberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询成员列表.
     *
     * @param request - ListMemberRequest
     *
     * @returns ListMemberResponse
     *
     * @param ListMemberRequest $request
     *
     * @return ListMemberResponse
     */
    public function listMember($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listMemberWithOptions($request, $runtime);
    }

    /**
     * 查询成员接入记录分页列表.
     *
     * @param request - ListMemberAccessRecordRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListMemberAccessRecordResponse
     *
     * @param ListMemberAccessRecordRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListMemberAccessRecordResponse
     */
    public function listMemberAccessRecordWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessStatus) {
            @$query['AccessStatus'] = $request->accessStatus;
        }

        if (null !== $request->contactor) {
            @$query['Contactor'] = $request->contactor;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->num) {
            @$query['Num'] = $request->num;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->size) {
            @$query['Size'] = $request->size;
        }

        if (null !== $request->uid) {
            @$query['Uid'] = $request->uid;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListMemberAccessRecord',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListMemberAccessRecordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询成员接入记录分页列表.
     *
     * @param request - ListMemberAccessRecordRequest
     *
     * @returns ListMemberAccessRecordResponse
     *
     * @param ListMemberAccessRecordRequest $request
     *
     * @return ListMemberAccessRecordResponse
     */
    public function listMemberAccessRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listMemberAccessRecordWithOptions($request, $runtime);
    }

    /**
     * @param request - ListMemberAuthorizedBizChainRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListMemberAuthorizedBizChainResponse
     *
     * @param ListMemberAuthorizedBizChainRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ListMemberAuthorizedBizChainResponse
     */
    public function listMemberAuthorizedBizChainWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->memberId) {
            @$query['MemberId'] = $request->memberId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListMemberAuthorizedBizChain',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListMemberAuthorizedBizChainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ListMemberAuthorizedBizChainRequest
     *
     * @returns ListMemberAuthorizedBizChainResponse
     *
     * @param ListMemberAuthorizedBizChainRequest $request
     *
     * @return ListMemberAuthorizedBizChainResponse
     */
    public function listMemberAuthorizedBizChain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listMemberAuthorizedBizChainWithOptions($request, $runtime);
    }

    /**
     * @param request - ListPrivacyRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPrivacyRuleResponse
     *
     * @param ListPrivacyRuleRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListPrivacyRuleResponse
     */
    public function listPrivacyRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->num) {
            @$query['Num'] = $request->num;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->size) {
            @$query['Size'] = $request->size;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListPrivacyRule',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListPrivacyRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ListPrivacyRuleRequest
     *
     * @returns ListPrivacyRuleResponse
     *
     * @param ListPrivacyRuleRequest $request
     *
     * @return ListPrivacyRuleResponse
     */
    public function listPrivacyRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPrivacyRuleWithOptions($request, $runtime);
    }

    /**
     * @param request - ListPrivacyRuleSharedMemberRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPrivacyRuleSharedMemberResponse
     *
     * @param ListPrivacyRuleSharedMemberRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ListPrivacyRuleSharedMemberResponse
     */
    public function listPrivacyRuleSharedMemberWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->privacyRuleId) {
            @$query['PrivacyRuleId'] = $request->privacyRuleId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListPrivacyRuleSharedMember',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListPrivacyRuleSharedMemberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ListPrivacyRuleSharedMemberRequest
     *
     * @returns ListPrivacyRuleSharedMemberResponse
     *
     * @param ListPrivacyRuleSharedMemberRequest $request
     *
     * @return ListPrivacyRuleSharedMemberResponse
     */
    public function listPrivacyRuleSharedMember($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPrivacyRuleSharedMemberWithOptions($request, $runtime);
    }

    /**
     * @param request - ListRouteRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListRouteRuleResponse
     *
     * @param ListRouteRuleRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListRouteRuleResponse
     */
    public function listRouteRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizChainName) {
            @$query['BizChainName'] = $request->bizChainName;
        }

        if (null !== $request->chainUpMode) {
            @$query['ChainUpMode'] = $request->chainUpMode;
        }

        if (null !== $request->deviceGroupName) {
            @$query['DeviceGroupName'] = $request->deviceGroupName;
        }

        if (null !== $request->num) {
            @$query['Num'] = $request->num;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->size) {
            @$query['Size'] = $request->size;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListRouteRule',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListRouteRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ListRouteRuleRequest
     *
     * @returns ListRouteRuleResponse
     *
     * @param ListRouteRuleRequest $request
     *
     * @return ListRouteRuleResponse
     */
    public function listRouteRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRouteRuleWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryBlockchainDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryBlockchainDataResponse
     *
     * @param QueryBlockchainDataRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return QueryBlockchainDataResponse
     */
    public function queryBlockchainDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizChainId) {
            @$query['BizChainId'] = $request->bizChainId;
        }

        if (null !== $request->contractName) {
            @$query['ContractName'] = $request->contractName;
        }

        if (null !== $request->invokeType) {
            @$query['InvokeType'] = $request->invokeType;
        }

        if (null !== $request->iotDataDID) {
            @$query['IotDataDID'] = $request->iotDataDID;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->transactionId) {
            @$query['TransactionId'] = $request->transactionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryBlockchainData',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryBlockchainDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryBlockchainDataRequest
     *
     * @returns QueryBlockchainDataResponse
     *
     * @param QueryBlockchainDataRequest $request
     *
     * @return QueryBlockchainDataResponse
     */
    public function queryBlockchainData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryBlockchainDataWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryBlockchainMetadataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryBlockchainMetadataResponse
     *
     * @param QueryBlockchainMetadataRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return QueryBlockchainMetadataResponse
     */
    public function queryBlockchainMetadataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizChainId) {
            @$query['BizChainId'] = $request->bizChainId;
        }

        if (null !== $request->contractName) {
            @$query['ContractName'] = $request->contractName;
        }

        if (null !== $request->invokeType) {
            @$query['InvokeType'] = $request->invokeType;
        }

        if (null !== $request->iotDataDID) {
            @$query['IotDataDID'] = $request->iotDataDID;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->transactionId) {
            @$query['TransactionId'] = $request->transactionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryBlockchainMetadata',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryBlockchainMetadataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryBlockchainMetadataRequest
     *
     * @returns QueryBlockchainMetadataResponse
     *
     * @param QueryBlockchainMetadataRequest $request
     *
     * @return QueryBlockchainMetadataResponse
     */
    public function queryBlockchainMetadata($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryBlockchainMetadataWithOptions($request, $runtime);
    }

    /**
     * @param request - SharePrivacyRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SharePrivacyRuleResponse
     *
     * @param SharePrivacyRuleRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return SharePrivacyRuleResponse
     */
    public function sharePrivacyRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->memberIdList) {
            @$query['MemberIdList'] = $request->memberIdList;
        }

        if (null !== $request->privacyRuleId) {
            @$query['PrivacyRuleId'] = $request->privacyRuleId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SharePrivacyRule',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SharePrivacyRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - SharePrivacyRuleRequest
     *
     * @returns SharePrivacyRuleResponse
     *
     * @param SharePrivacyRuleRequest $request
     *
     * @return SharePrivacyRuleResponse
     */
    public function sharePrivacyRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sharePrivacyRuleWithOptions($request, $runtime);
    }

    /**
     * @param request - UnFreezeMemberRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UnFreezeMemberResponse
     *
     * @param UnFreezeMemberRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UnFreezeMemberResponse
     */
    public function unFreezeMemberWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->memberId) {
            @$query['MemberId'] = $request->memberId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UnFreezeMember',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UnFreezeMemberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - UnFreezeMemberRequest
     *
     * @returns UnFreezeMemberResponse
     *
     * @param UnFreezeMemberRequest $request
     *
     * @return UnFreezeMemberResponse
     */
    public function unFreezeMember($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unFreezeMemberWithOptions($request, $runtime);
    }

    /**
     * @param request - UpdateBizChainRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateBizChainResponse
     *
     * @param UpdateBizChainRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateBizChainResponse
     */
    public function updateBizChainWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizChainId) {
            @$query['BizChainId'] = $request->bizChainId;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->remark) {
            @$query['Remark'] = $request->remark;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateBizChain',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateBizChainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - UpdateBizChainRequest
     *
     * @returns UpdateBizChainResponse
     *
     * @param UpdateBizChainRequest $request
     *
     * @return UpdateBizChainResponse
     */
    public function updateBizChain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateBizChainWithOptions($request, $runtime);
    }

    /**
     * 修改成员信息.
     *
     * @param request - UpdateMemberRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateMemberResponse
     *
     * @param UpdateMemberRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return UpdateMemberResponse
     */
    public function updateMemberWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->authorizedCount) {
            @$query['AuthorizedCount'] = $request->authorizedCount;
        }

        if (null !== $request->authorizedDeviceCount) {
            @$query['AuthorizedDeviceCount'] = $request->authorizedDeviceCount;
        }

        if (null !== $request->contactor) {
            @$query['Contactor'] = $request->contactor;
        }

        if (null !== $request->memberId) {
            @$query['MemberId'] = $request->memberId;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->remark) {
            @$query['Remark'] = $request->remark;
        }

        if (null !== $request->telephony) {
            @$query['Telephony'] = $request->telephony;
        }

        if (null !== $request->uid) {
            @$query['Uid'] = $request->uid;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateMember',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateMemberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改成员信息.
     *
     * @param request - UpdateMemberRequest
     *
     * @returns UpdateMemberResponse
     *
     * @param UpdateMemberRequest $request
     *
     * @return UpdateMemberResponse
     */
    public function updateMember($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateMemberWithOptions($request, $runtime);
    }

    /**
     * @param request - UpdatePrivacyRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdatePrivacyRuleResponse
     *
     * @param UpdatePrivacyRuleRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UpdatePrivacyRuleResponse
     */
    public function updatePrivacyRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->algImpl) {
            @$query['AlgImpl'] = $request->algImpl;
        }

        if (null !== $request->algType) {
            @$query['AlgType'] = $request->algType;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->privacyRuleId) {
            @$query['PrivacyRuleId'] = $request->privacyRuleId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->remark) {
            @$query['Remark'] = $request->remark;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdatePrivacyRule',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdatePrivacyRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - UpdatePrivacyRuleRequest
     *
     * @returns UpdatePrivacyRuleResponse
     *
     * @param UpdatePrivacyRuleRequest $request
     *
     * @return UpdatePrivacyRuleResponse
     */
    public function updatePrivacyRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updatePrivacyRuleWithOptions($request, $runtime);
    }

    /**
     * @param request - UpdateRouteRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateRouteRuleResponse
     *
     * @param UpdateRouteRuleRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateRouteRuleResponse
     */
    public function updateRouteRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizChainId) {
            @$query['BizChainId'] = $request->bizChainId;
        }

        if (null !== $request->contractName) {
            @$query['ContractName'] = $request->contractName;
        }

        if (null !== $request->contractTemplateId) {
            @$query['ContractTemplateId'] = $request->contractTemplateId;
        }

        if (null !== $request->invokeType) {
            @$query['InvokeType'] = $request->invokeType;
        }

        if (null !== $request->privacyRuleId) {
            @$query['PrivacyRuleId'] = $request->privacyRuleId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->remark) {
            @$query['Remark'] = $request->remark;
        }

        if (null !== $request->routeRuleId) {
            @$query['RouteRuleId'] = $request->routeRuleId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateRouteRule',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateRouteRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - UpdateRouteRuleRequest
     *
     * @returns UpdateRouteRuleResponse
     *
     * @param UpdateRouteRuleRequest $request
     *
     * @return UpdateRouteRuleResponse
     */
    public function updateRouteRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateRouteRuleWithOptions($request, $runtime);
    }

    /**
     * @param request - UploadIoTDataToBlockchainRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UploadIoTDataToBlockchainResponse
     *
     * @param UploadIoTDataToBlockchainRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return UploadIoTDataToBlockchainResponse
     */
    public function uploadIoTDataToBlockchainWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->iotAuthType) {
            @$query['IotAuthType'] = $request->iotAuthType;
        }

        if (null !== $request->iotDataDID) {
            @$query['IotDataDID'] = $request->iotDataDID;
        }

        if (null !== $request->iotDataDigest) {
            @$query['IotDataDigest'] = $request->iotDataDigest;
        }

        if (null !== $request->iotDataToken) {
            @$query['IotDataToken'] = $request->iotDataToken;
        }

        if (null !== $request->iotId) {
            @$query['IotId'] = $request->iotId;
        }

        if (null !== $request->iotIdServiceProvider) {
            @$query['IotIdServiceProvider'] = $request->iotIdServiceProvider;
        }

        if (null !== $request->iotIdSource) {
            @$query['IotIdSource'] = $request->iotIdSource;
        }

        if (null !== $request->plainData) {
            @$query['PlainData'] = $request->plainData;
        }

        if (null !== $request->privacyData) {
            @$query['PrivacyData'] = $request->privacyData;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UploadIoTDataToBlockchain',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UploadIoTDataToBlockchainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - UploadIoTDataToBlockchainRequest
     *
     * @returns UploadIoTDataToBlockchainResponse
     *
     * @param UploadIoTDataToBlockchainRequest $request
     *
     * @return UploadIoTDataToBlockchainResponse
     */
    public function uploadIoTDataToBlockchain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uploadIoTDataToBlockchainWithOptions($request, $runtime);
    }
}
